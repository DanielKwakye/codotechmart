<?php

namespace App\Http\Controllers\Front;

use App\Checkout;
use App\Front\Plugins\Cart;
use App\Front\Plugins\WishList;
use App\Order;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class UsersController extends Controller
{

    /**
     * UsersController constructor.
     */
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function saveWishlist(){

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

        return view('wishlist')->withErrors(['Your wishlist is saved']);
    }

    public function submitCheckout(Request $request){

//        return $request->all();

        $this->validate($request, [
            'phone_number' => 'required|numeric|regex:/(0)[0-9]{9}$/',
            'full_address' => 'required'
        ]);

//        save request in checkout session ---------------
        $checkout = Checkout::getInstance();
        $file = 'count.txt';

        $number = "1000000";

//get the number from the file
        if(Storage::disk('local')->exists($file)){
            $uniq = Storage::disk('local')->get($file);

//add +1
            $number = $uniq + 1 ;
        }


// add that new value to text file again for next use
//        file_put_contents($file, $number);
        Storage::disk('local')->put($file,$number);


// your unique id ready
        $checkout->order_number = $number;
        $checkout->longitude = $request->longitude;
        $checkout->latitude = $request->latitude;
        $checkout->name = $request->billing_first_name;
        $checkout->reciever_phone = $request->phone_number;
        $checkout->full_address = $request->full_address;
//        delivery_option : 1 = deliver to me, 2 = i'll pick it up -----------------------------------
        $checkout->delivery_option = $request->delivery_option;
//        payment_option : 1 = pay online, 2 = pay on delivery ---------------------------------------
        $checkout->payment_option = $request->payment_option;
        $checkout->notes = $request->notes;
        $checkout->branch_id = Cart::getInstance()->getFirstItem()->item->shop_id;
        $checkout->delivery_to = $request->full_address;
//        status 0 means processing ------------------------------
        $checkout->status = 0;
        $checkout->amount = Cart::getInstance()->getTotalPrice();

        $checkout->save();

//        update the user's details -----------------------------------------------------
        Auth::user()->update(['phone' => $request->phone_number]);
        Auth::user()->update(['address' => $request->full_address]);

//        payment and transaction_id fields not available yet --------------

//        check the payment option and redirect the user appropriately ---------------------------
        if($request->payment_option == 1){
//            pay online -----------------------

        }else{
//            pay on delivery -----------------------------


        }

        return redirect('order/received');


    }

    public function orderReceived(){

//        fetch the order from checkout ------------------------
        $checkout = Checkout::getInstance()->getCheckout();
        if($checkout == null){
            return redirect('/')->withErrors("Add items to cart");
        }

//        create the order in the database -----------------------------
        $order = new Order();
        $order->order_number = $checkout->order_number;
        $order->user_id	 = Auth::user()->id;
        $order->branch_id = $checkout->branch_id;
        $order->full_address = $checkout->full_address;
        $order->reciever_phone = $checkout->reciever_phone;
        $order->notes = $checkout->notes;
        $order->delivery_option = $checkout->delivery_option;
        $order->delivery_fee = $checkout->delivery_fee;
        $order->delivery_to = $checkout->delivery_to;
        $order->latitude = $checkout->latitude;
        $order->longitude = $checkout->longitude;
        $order->status = $checkout->status;
        $order->payment = $checkout->payment;
        $order->payment_option = $checkout->payment_option;
        $order->amount = $checkout->amount;
        $order->transaction_id = $checkout->transaction_id;
        $order->created_at = Carbon::now();
        $order->updated_at = Carbon::now();

       $order->save();


//        save items in cart for user --------------------------------

//        return $order;

            $carts = Cart::getInstance()->all();

            foreach ($carts as $item){
                (new \App\Cart())->create([
                    'order_id' => $order->id,
                    'product_id' => $item->item->id,
                    'qty' => $item->qty,
                    'price' => $item->price
                ]);
            }

            //        send notification message to the shop for via text ------------------------


            // credit the person who referred him once ----------------

        if(Auth::user()->referred_by  != null && Auth::user()->referrer_paid == 0){           


                //find the person who referred this user ---------------------------
                $my_referrer = (new \App\User)->find(Auth::user()->referred_by);
          

//  check if the user exists in the referrals db and has not been paid --------------
            

                if (!$my_referrer->referrals()->where('paid',0)->exists()) {
                    // this is the first time hes being credited ------------------
                    \App\Referral::create(['user_id' => Auth::user()->referred_by]);
                }


//               get the referrer's record from referral's table -----
                $ref_record = $my_referrer->referrals()->where('paid',0)->first();

// the referral amount is calculated with a quadratic formula here --------------------------

                // update the amount and number of people's record ----------------

                if (Auth::user()->referrer_paid == 0) {
                    # code...
                     $ref_record->update([
                    'number_of_people' => $ref_record->number_of_people + 1, 
                    'amount_earned' => $ref_record->amount_earned + 10
                    ]);
                }

                // mark the logged in user as his referrer is paid ----------------------

                Auth::user()->update(['referrer_paid' => 1]);
            
        }



//        clear cart --
        Cart::getInstance()->clear();

//            clear checkout -----------------
        Checkout::getInstance()->clear();


        return view('front.techmarket.order_received')->with('order',$order);
    }

    public function checkout(){
        if (Cart::getInstance()->getTotalQty() < 1){
            return redirect('/')->withErrors('Add Items To Cart To Proceed');
        }
        return view('front.techmarket.checkout');
    }

    public function Order(){
//        credit person who referred him if any and he hasn't been credited already ----

//        check if business cert is provided for payonline
    }
}
