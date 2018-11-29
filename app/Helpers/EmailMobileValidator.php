<?php

namespace App\Helpers;

class EmailMobileValidator extends ValidatorBase {

    public function __construct() {
        parent::__construct();
    }

    public function validateEmail($email) {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $this->error = 'Please enter a valid email';
            return false;
        }
        return true;
    }

    public function validateMobile($mobile) {
        $this->error = [];
        
        if (!is_numeric($mobile)) {
            $this->error[] = 'Please enter numeric value for mobile number';
        }

        if (strlen($mobile) > 10) {
            $this->error[] = 'Length of mobile number cannot be greater than 10';
        }

        if (strlen($mobile) < 10) {
            $this->error[] = 'Length of mobile number cannot be less than 10';
        }

        if ($mobile{'0'} <> '9' && $mobile{'0'} <> '8' && $mobile{'0'} <> '7' && $mobile{'0'} <> '6') {
            $this->error[] = 'Mobile number shall start with 9, 8, 7 or 6';
        }

        if (count($this->error)) {
            return false;
        }

        return true;
    }

}
