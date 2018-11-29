<?php

namespace App\Models;
use App\Helpers\DateValidator;

class BaseRepository {

    protected $error = null;
    protected $errorCode = null;
    protected $newLineChar = '<br>';
    protected $totalRecords = 0;
    protected $dateValidator;
    protected $noResult;
    
    public function __construct()
    {
        $this->dateValidator = new DateValidator();
        $this->noResult =   false;
    }

    public function getError() {
        return $this->error;
    }
    
    public function getTotalRecords()
    {
        return $this->totalRecords;
    }

    public function getErrorCode() {
        return $this->errorCode;
    }

    public function setError($message, \Exception $ex) {
        $exceptionMessage = $ex->getMessage();
        
        if (env('APP_DEBUG') && !empty($exceptionMessage)) {
            $message = 'Unable to ' . $message . ' due to this database error : ' 
                    . $ex->getMessage() 
                    . '. Please contact system administrator';
        } else {
            $message = 'Unable to ' . $message . ' due to a database error. '
                    . 'Please contact system administrator';
        }
        
        $this->error .= (!empty($this->error) ? $this->newLineChar : '') . $message;
        
        return true;
    }

    public function getDateValue($date, $dateSeparater = '-', $timeSeparator = ':', $format = 'YMDHIS') 
    {
        $returnValue =  $this->dateValidator->getDateValue($date, $dateSeparater, $timeSeparator, $format); 
        
        if (!$returnValue) {
            $this->error = $this->dateValidator->getError();
            return false;
        }
        
        return $returnValue;
    }
    
    public function sanitizeValue($value)
    {
        //return trim(addslashes(stripslashes($value)));
        return trim($value);
    }
    
    public function trimArray($array)
    {
        /*$returnArray = [];
        
        foreach ($array as $key=>$value) {
            $returnArray[$key] = trim($value);
        }
        
        return $returnArray;*/
        
        array_walk($array, [$this, 'trimArrayWalk']);
        
        return $array;
    }
    
    public function trimArrayWalk(&$value, $key)
    {
        $value = trim($value);
    }
    
    public function checkIfNoResult()
    {
        if ($this->noResult) {
            return true;
        }
        
        return false;
    }

}
