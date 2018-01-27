<?php

namespace App\Front\Plugins;

use Illuminate\Support\Facades\Session;
/**
* 
*/
class WishList
{
	public $items = null;
	public $totalQty = 0;

	function __construct($oldWishList)
	{
		if ($oldWishList) {
			$this->items = $oldWishList->items;	
			$this->totalQty = $oldWishList->totalQty;				
		}
	} 
        
        public static function getInstance(){
		$oldWishList = Session::has("wishlist") ? Session::get("wishlist") : null;
		return new WishList($oldWishList);
	}

	public function addToWishList($item){
		$response = true;
		$storedItem = ['item' => $item];

			if ($this->items && array_key_exists($item->id, $this->items)) {
				$response = false;			
			}else{

				$this->items[$item->id] = $storedItem;		
				$this->totalQty ++;	
                                Session::put("wishlist",$this);
			}

		return $response;	
			
	}

	public function removeItem($item){

		$this->totalQty -= 1;
		unset($this->items[$item->id]);
                Session::put("wishlist",$this);
	}
        
        public function all(){
	if(!empty($this->items)){
		return $this->items;
	}
}
}