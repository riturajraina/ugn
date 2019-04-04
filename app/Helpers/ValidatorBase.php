<?php

namespace App\Helpers;

class ValidatorBase {

    protected $error;

    public function __construct() {
        $this->error = [];
    }

    public function getError() {
        return $this->error;
    }
    
    public function setError($message, \Exception $ex) {
        $exceptionMessage = $ex->getMessage();
        
        if (env('APP_DEBUG') && !empty($exceptionMessage)) {
            $message = 'Unable to ' . $message . ' due to this error : ' 
                    . $ex->getMessage() 
                    . '. Please contact system administrator';
        } else {
            $message = 'Unable to ' . $message . ' due to an exception. '
                    . 'Please contact system administrator';
        }
        
        $this->error    =   is_array($this->error) ? '' : $this->error;
        
        $this->error .= (!empty($this->error) ? $this->newLineChar : '') . $message;
        
        return true;
    }
}

