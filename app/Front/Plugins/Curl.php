<?php
namespace App\Plugins;

class Curl
{
    /** @var resource cURL handle */
    private $ch;

    /** @var mixed The response */
    private $response = false;
   // private $base_url = "https://api.hubtel.com/v1/merchantaccount/merchants/HM0912170010";
    private $base_url = "https://api.hubtel.com/v1/merchantaccount/onlinecheckout/invoice/create";
    private $client_id = "xgmbkmtt";
    private $client_secret = "ckunlnyx";
    private $basic_auth_key;
    /**
     * @param string $url
     * @param array  $options
     */
    public function __construct()
    {       
        $this->ch = curl_init($this->base_url);        
        $this->basic_auth_key = 'Basic ' . base64_encode($this->client_id . ':' . $this->client_secret);                             
         
    }
    
    public static function  getInstance(){
        return new Curl();
    }
    
    public function run($body){
        $curlData = [
            CURLOPT_POSTFIELDS => json_encode($body),
            CURLOPT_CUSTOMREQUEST => "POST", 
            CURLOPT_HTTPHEADER => array(    
                'Authorization: '.$this->basic_auth_key,
                'Content-Type: application/json',  
                'Cache-Control: no-cache',
                'Content-Length: ' . strlen(json_encode($body)))
        ];

        foreach ($curlData as $key => $val) {
            curl_setopt($this->ch, $key, $val);
        }

        curl_setopt($this->ch, CURLOPT_RETURNTRANSFER, true);
        return $this->getResponse();        
    }

    /**
     * Get the response
     * @return string
     * @throws \RuntimeException On cURL error
     */
    private function getResponse()
    {
         if ($this->response) {
             return $this->response;
         }

        $response = curl_exec($this->ch);
        $error    = curl_error($this->ch);
        $errno    = curl_errno($this->ch);

        if (is_resource($this->ch)) {
            curl_close($this->ch);
        }

        if (0 !== $errno) {          
            throw new \RuntimeException($error, $errno);
        }

        return $this->response = $response;
    }

  
}