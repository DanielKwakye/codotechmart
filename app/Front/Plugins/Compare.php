<?php

namespace App\Front\Plugins;
use Illuminate\Support\Facades\Session;
/**
* 
*/
class Compare
{
	public $items = null;
	public $totalQty = 0;

	function __construct($oldCompare)
	{
		if ($oldCompare) {
			$this->items = $oldCompare->items;	
			$this->totalQty = $oldCompare->totalQty;				
		}
	} 
        
        public static function getInstance(){
		$oldCompare = Session::has("compare") ? Session::get("compare") : null;
		return new Compare($oldCompare);
	}

	public function addToCompare($item){
		$response = true;
		$storedItem = ['item' => $item];

			if($this->items && array_key_exists($item->id, $this->items)) {
				$response = false;			
			}else{
				$this->items[$item->id] = $storedItem;		
				$this->totalQty ++;
                                Session::put("compare",$this);
			}
		return $response;	
			
	}

	public function removeItem($item){

		$this->totalQty -= 1;
		unset($this->items[$item->id]);
                 Session::put("compare",$this);
	}
        
        public function all(){
            if(!empty($this->items)){
                    return $this->items;
            }
        }
}