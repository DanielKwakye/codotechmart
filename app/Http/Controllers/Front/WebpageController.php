<?php

namespace App\Http\Controllers\Front;

use App\Front\Plugins\Cart;
use App\Front\Plugins\Compare;
use App\Front\Plugins\WishList;
use App\Http\Controllers\Controller;
use App\Item;
use App\Product;
use App\Shop;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Branch;

class WebpageController extends Controller
{
    
    public function shops(){
        $shops = Branch::where('type','main')->get()->sortByDesc('created_at');
        $data = [
          'shops' => $shops
        ];
        return view('front.techmarket.shops')->with($data);
    }


    public function shopDetail($id){
         $branch = Branch::find($id);
         $products = $branch->products()->where('visibility',1)->get();          

         $shop = $branch->shop;

         $data = [
             'shop' => $shop,
             'products' => $products,
             'branches' => $shop->branches,
             'branch' => $branch
         ];

         return view('front.techmarket.shop_detail')->with($data);
    }

    public function hangCart(){
        return view('front.techmarket.inc.hanging_cart');
    }

    public function mainCart(){
        return view('front.techmarket.inc.main_cart');
    }

    public function addCart(Request $request){
        $product = (new Product())->find($request->product_id);

        // alter the product and add the branch to it ..
        $product->shop_id = $request->branch_id;

//        check if user is purchasing from a different shop -----------------
        if(Cart::getInstance()->getTotalQty() > 0){
            $shop_id = Cart::getInstance()->getFirstItem()->item->shop_id;
            if($product->shop_id != $shop_id){
                Cart::getInstance()->clear();
            }
        }
        Cart::getInstance()->add($product,$request->qty);
        return json_encode(['status' => 'success', 'message' => $product->name . ' added successfully', 'qty' => Cart::getInstance()->getTotalQty()]);
    }

    public function updateCart(Request $request){
      //  return $request->all();
        for ($i = 0 ; $i < sizeof($request->items) ; $i++){
            $product_id = $request->items[$i];
            $product = (new Product())->find($product_id);
            Cart::getInstance()->update($product,$request->qtys[$i]);
        }

        return json_encode(['status' => true, 'message' => 'cart updated successfully']);
    }

    public function productDetail($id){
        $product = (new Product())->find($id);
        $data = [
            'product' => $product
        ];
        return view('front.techmarket.product_detail')->with($data);
    }

    public function saveWishlist(){

        if(Auth::user()){
            $data = [];
            foreach (WishList::getInstance()->all() as $item){
                $arr = [
                    'product_id' => $item['item']->id,
                    'user_id' => Auth::user()->id,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ];
                array_push($data,$arr);
            }

            DB::table('wishlists')->insert($data);

            return json_encode(['status' => true, 'message' => 'Your wish list is saved']);
        }

        return json_encode(['status' => false, 'link' => url('save/wishlist')]);

    }
    
    public function addCompare($id){
        
        $item = (new Product())->find($id);
        $result = Compare::getInstance()->addToCompare($item);
        if($result){
            return json_encode(['status' => true, 'message' => $item->name . " is added to compare", 'qty' => Compare::getInstance()->totalQty]);
        }else{
            return json_encode(['status' => true, 'message' => $item->name . " is already added to compare", 'qty' => Compare::getInstance()->totalQty]);
        }
    }

    public function removeCompare($id){
        $item = (new Product())->find($id);
        Compare::getInstance()->removeItem($item);
        return json_encode(['status' => true, 'message' => $item->name . " removed from compare", 'qty' => Compare::getInstance()->totalQty]);
    }

    public function removeWishlist($id){
        $item = (new Product())->find($id);
        WishList::getInstance()->removeItem($item);
        return json_encode(['status' => true, 'message' => $item->name . " removed from favorite", 'qty' => Compare::getInstance()->totalQty]);
    }

    public function compareSection(){
        return view('front.techmarket.inc.compare_section');
    }

    public function favoriteSection(){
        return view('front.techmarket.inc.favorite_section');
    }

    public function addWishlist($id){

        $item = (new Product())->find($id);

        $res = WishList::getInstance()->addToWishList($item);

        if($res){
            return json_encode(['status' => true, 'message' => $item->name . " is added to favorites", 'qty' => WishList::getInstance()->totalQty]);
        }else{
            return json_encode(['status' => true, 'message' => $item->name . " already added to favorite", 'qty' => WishList::getInstance()->totalQty]);
        }


    }

    public function removeCart ($id){
        $product = (new Product())->find($id);
        Cart::getInstance()->remove($product);
        return json_encode(['status' => true, 'message' => $product->name .' removed successfully']);
    }



    public function favorite(){
        return view('front.techmarket.favorite');
    }

    public function orderDetail(){
        return view('front.techmarket.order_detail');
    }


    public function faq(){
        return view('front.techmarket.faq');
    }

    public function about(){
        return view('front.techmarket.about');
    }

    public function compare(){
        return view('front.techmarket.compare');
    }

    public function cartSummary(){
        return view('front.techmarket.inc.cart_summary');
    }

    public function products($id){
        $shop = Shop::find($id);
        $products = $shop->products;
        $data = [
          'products' => $products
        ];
        return view('front.techmarket.shop_products')->with($data);
    }

    public function profile(){
        return view('front.techmarket.profile');
    }

    public function loginOrRegister($token = null)
    {

        if ($token == null) {
            return view('front.techmarket.login_register');
        }
        
        $user = \App\User::where('referral_link', $token)->first();
       
        if ($user) {
             
           Session::put('referral', $user->id);
                    
           return view('front.techmarket.login_register');

        }
         
        return redirect("login/register")->withErrors("Can't find any customer with this referral link");
    }

    public function cart(){
        return view('front.techmarket.cart');
    }
}
