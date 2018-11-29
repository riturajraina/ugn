<?php

namespace App\Helpers;

class GenerateRandom extends ValidatorBase {

    protected $alphanumericArray;

    public function __construct() {
        $this->alphanumericArray = array('1', '2', '3', '4', '5', '6', '7', '8', '9', 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z');
    }

    public function generateAlphaNumeric($length = 6) {
        $count = count($this->alphanumericArray);

        $randomString = null;

        for ($i = 0; $i < $length; $i++) {
            $randomString .= $this->alphanumericArray[mt_rand(0, ($count - 1))];
        }

        return $randomString;
    }

}
