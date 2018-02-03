<?php

namespace App\Http\Controllers\Front;

use App\Front\Plugins\Compare;
use App\Front\Plugins\WishList;
use App\Http\Controllers\Controller;
use App\Item;
use Illuminate\Http\Request;

class WebpageController extends Controller
{
    
    public function shops(){
        return view('front.techmarket.shops');
    }


    public function shopDetail(){
         return view('front.techmarket.shop_detail');
    }
    
    public function addCompare(){
        
        $item = new Item();
        $item->id = "db";
        $item->price = 2.00;
        $item->title = "shoe";
        
        Compare::getInstance()->addToCompare($item);
        
        return Compare::getInstance()->all();
    }

    public function favorite(){
        return view('front.techmarket.favorite');
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

    public function products(){
        return view('front.techmarket.shop_products');
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
