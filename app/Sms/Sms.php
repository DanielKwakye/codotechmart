<?php 

namespace App;

class Sms
{

	private $curl;
	private $url = "http://api.infobip.com/sms/1/text/single";
	private $key;
	private $phone;
	private $from = "Codotechmart";
	private $message;
	private $username = "CODO-XO";
	private $password = "Asamoah@";

	function __construct($phone,$message)
	{
		$this->curl = curl_init();
		$this->phone = $phone;
		$this->message = $message;
		$this->key = base64_encode($this->username . ':' . $this->password);
	}

	private function generateAndSendSms($phone,$vCode){

     $str = substr($phone, 1);
     $phone = "233".$str;
     $message = "Your Verification Code is ".$vCode;
     
     $sms = new Sms($phone,$message);
	    return $sms->send();

    }

	public function send(){
				

		curl_setopt_array($this->curl, array(
		  CURLOPT_URL => $this->url,
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => "",
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 30,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => "POST",
		  CURLOPT_POSTFIELDS => "{ \"from\":\"".$this->from."\", \"to\": \" ".$this->phone." \", \"text\":\"".$this->message."\" }",
		  CURLOPT_HTTPHEADER => array(
		    "accept: application/json",
		    "authorization: Basic ".$this->key,
		    "content-type: application/json"
		  ),
		));

		$response = curl_exec($this->curl);
		$err = curl_error($this->curl);

		curl_close($this->curl);

		if ($err) {
		  return "cURL Error #:" . $err;
		} else {
		  return $response;
		}
	}
}