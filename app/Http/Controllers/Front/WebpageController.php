<?php

namespace App\Http\Controllers\Front;

use App\Front\Plugins\Cart;
use App\Front\Plugins\Compare;
use App\Front\Plugins\WishList;
use App\Http\Controllers\Controller;
use App\Item;
use App\Product;
use App\Shop;
use Illuminate\Http\Request;

class WebpageController extends Controller
{
    
    public function shops(){
        $shops = Shop::all()->sortByDesc('created_at');
        $data = [
          'shops' => $shops
        ];
        return view('front.techmarket.shops')->with($data);
    }


    public function shopDetail($id){
         $shop = Shop::find($id);
         $products = $shop->products()->where('visibility',1)->get();
         $data = [
             'shop' => $shop,
             'products' => $products
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
        Cart::getInstance()->add($product,$request->qty);
        return json_encode(['status' => 'success', 'message' => $product->name . 'added successfully']);
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
    
    public function addCompare(){
        
        $item = new Item();
        $item->id = "db";
        $item->price = 2.00;
        $item->title = "shoe";
        
        Compare::getInstance()->addToCompare($item);
        
        return Compare::getInstance()->all();
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
    
    public function addWishlist(){
         $item = new Item();
        $item->id = str_random(3);
        $item->price = 2.00;
        $item->title = "shoe";
        
        WishList::getInstance()->addToWishList($item);

        return WishList::getInstance()->all();
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

    public function loginOrRegister(){

        return view('front.techmarket.login_register');
    }

    public function checkout(){
        return view('front.techmarket.checkout');
    }

    public function cart(){
        return view('front.techmarket.cart');
    }
}
