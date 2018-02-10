<?php
/**
* 
*/
namespace App\mazuma;
use Session;

class mazuma
{
	 /**
     
	 ---------------------------------------------
     Example of parameters to pass
      "amount": 1,
	  "network": "mtn",
	  "recipient_number": "026xxxxxxx",
	  "sender": "024xxxxxxx",
	  "option": "rmta"

	 *payment options details.
	 ----------------------------
	 *amount 
	 The amount to be paid

     *$network
     This is the network of the mobile money account that would be making the payment (your customer).
    

     *$recipient_number 
     This is the mobile money account the payments shall end up in. (your account).
     can be any network number

     *$sender_number :
     This is the mobile money account that would be making the payment (your customers).
     must be strictly mtn

     *$option
     This denotes the direction of cash flow. For example, rmta can be understood as an acronym of the phrase ‘receive mtn to airtel’, which means you would be receiving money to your Airtel account (the recipient number) from an MTN number(the sender). This format would hold for all transaction requests sent to the API. Do not forget to append the r at beginning.

	 *
	 
	  --------------------------------------------
	  Example of how to use the payment function
	  import class in at where you want to use it like
	  use App\mazuma\mazuma;

	   $com= new mazuma();
      	$com->payment(0.40,'mtn','0249645056','0241994733','rmtm');
     */
	
	    public function payment($amount,$network,$recipient_number,$sender_number,$option){

          $data = array(
            'price'=>$amount,
            'network'=> $network,
            'recipient_number'=> $recipient_number,
            'sender'=> $sender_number,
            'option'=> $option,
            'apikey'=> '9f251b7d8e00f32b8dd65408cd47d527757ef2e0'); 

        //API Keys
        $url = 'https://client.teamcyst.com/api_call.php';


        $additional_headers = array(
           'Content-Type: application/json'
        );
        $details = json_encode($data);
        $ch = curl_init($url);                                                                      
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                                                                     
        curl_setopt($ch, CURLOPT_POSTFIELDS, $details); // $data is the request payload                                                                  
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                      
        curl_setopt($ch, CURLOPT_HTTPHEADER, $additional_headers); 

        $server_output = curl_exec ($ch);


        $err = curl_error($ch);
        curl_close($ch);
        if($err){
            echo $err;
        }else if($server_output){
            
            if(json_decode($server_output)->status=='failed'){
            	session::flash('error','Transaction Failed');
                return back();
            }
            else if (json_decode($server_output)->status=='success') {
            	session::flash('success','Transaction Successful');
                return back();
            }
            else{
            	session::flash('error','Transaction Declined');
                return back();
            }
            }
            else{
            	session::flash('error','Transaction Cancelled');
                return back();
            }

            }
}



