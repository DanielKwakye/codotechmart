<?php

namespace App\Http\Controllers\Front;

use App\Front\Plugins\WishList;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
}
