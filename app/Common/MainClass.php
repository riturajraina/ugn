<?php

namespace App\Common;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MainClass extends BaseController {
    
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $error;
    protected $errorCode;
    protected $newLineChar;
    protected $totalRecords;

    public function __construct() {
        $this->error = null;
        $this->errorCode = null;
        $this->newLineChar = '<br>';
        $this->totalRecords = 0;
    }

    public function getError() {
        return $this->error;
    }

    public function getTotalRecords() {
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

    public function getDateValue($date, $dateSeparater = '-', $timeSeparator = ':', $format = 'YMDHIS') {
        if (empty($date)) {
            $this->error = 'Empty date string';
            return false;
        }

        $dateTimeArray = explode(' ', $date);

        $dateArray = array();

        $timeArray = array();

        if (is_array($dateTimeArray) && !empty($dateTimeArray['1'])) {
            $dateArray = explode($dateSeparater, $dateTimeArray['0']);
            $timeArray = explode($timeSeparator, $dateTimeArray['1']);
        } else {
            $dateArray = explode($dateSeparater, $date);
            $timeArray = array(0, 0, 0);
        }

        $format = strtoupper($format);

        switch ($format) {
            case 'YMDHIS' :
                if (!checkdate($dateArray['1'], $dateArray['2'], $dateArray['0'])) {
                    $this->error = 'Invalid date';
                    return false;
                }
                return mktime($timeArray['0'], $timeArray['1'], $timeArray['2'], $dateArray['1'], $dateArray['2'], $dateArray['0']);

            case 'MDYHIS' :
                if (!checkdate($dateArray['0'], $dateArray['1'], $dateArray['2'])) {
                    $this->error = 'Invalid date';
                    return false;
                }
                return mktime($$timeArray['0'], $timeArray['1'], $timeArray['2'], $dateArray['0'], $dateArray['1'], $dateArray['2']);

            case 'MYDHIS' :
                if (!checkdate($dateArray['0'], $dateArray['2'], $dateArray['1'])) {
                    $this->error = 'Invalid date';
                    return false;
                }
                return mktime($$timeArray['0'], $timeArray['1'], $timeArray['2'], $dateArray['0'], $dateArray['2'], $dateArray['1']);
        }
    }

}
