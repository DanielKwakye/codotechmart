<?php
namespace App;

class Security {
    
    static function getInstance() {
        return new Security();
    }
    
    public function encode($param) {
        return strtr(base64_encode($param), '+/=', '._-');        
    }
    
    public function decode($param) {
      return base64_decode(strtr($param, '._-', '+/='));        
    }
    
    
}
