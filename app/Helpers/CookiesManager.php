<?php
    namespace App\Helpers;
    
    class CookiesManager
    {
        public function __construct()
        {
            
        }
        
        public function setCookie($cookieName, $cookieValue, $cookieTime=0)
        {
            return setcookie($cookieName, $cookieValue, $cookieTime);
        }
        
        public function getCookieValue($cookieName)
        {
            if (!empty($_COOKIE[$cookieName])) {
                return $_COOKIE[$cookieName];
            }
            
            return false;
        }
    }