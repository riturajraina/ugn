<?php

namespace App\Helpers;

class DateValidator extends ValidatorBase {

    public function __construct() {
        
    }

    public function dateValidate($date, $format = 'Y-m-d', $separator = '-') {
        try {
            $this->error = [];
            $dateArray = explode($separator, $date);
            //echo '<br>data array : <pre>' . print_r($dateArray, true) . '</pre>';exit;
            //echo '<br>Separator : ' . $separator;exit;
            //echo '<br>Format : ' . $format;exit;
            if (!is_array($dateArray)) {
                $this->error[] = 'Invalid Date array';
                return false;
            }

            $day = null;
            $month = null;
            $year = null;

            $format = strtolower($format);

            switch ($format) {
                case 'y-m-d':
                case 'ymd':
                    $day = !empty($dateArray['2']) ? $dateArray['2'] : null;
                    $month = !empty($dateArray['1']) ? $dateArray['1'] : null;
                    $year = !empty($dateArray['0']) ? $dateArray['0'] : null;
                    break;

                case 'm-d-y':
                case 'mdy':
                    $day = !empty($dateArray['1']) ? $dateArray['1'] : null;
                    $month = !empty($dateArray['0']) ? $dateArray['0'] : null;
                    $year = !empty($dateArray['2']) ? $dateArray['2'] : null;
                    break;

                case 'd-m-y' :
                case 'dmy' :
                    $day = !empty($dateArray['0']) ? $dateArray['0'] : null;
                    $month = !empty($dateArray['1']) ? $dateArray['1'] : null;
                    $year = !empty($dateArray['2']) ? $dateArray['2'] : null;
                    break;
            }

            if (empty($day) || empty($month) || empty($year)) {
                $this->error[] = 'Required date component found empty : day : ' . $day . ', month : ' 
                                 . $month . ', Year : ' . $year . ', format : ' . $format . ', separator : ' . $separator 
                                 . ', date : ' . $date;
                //echo '<br>data array : <pre>' . print_r($dateArray, true) . '</pre>';exit;
            } else {
                if (!checkdate($month, $day, $year)) {
                    $this->error[] = 'Invalid Date';
                    //echo '<br>data array : <pre>' . print_r($dateArray, true) . '</pre>';exit;
                }
            }

            if (count($this->error)) {
                return false;
            }

            return true;
        } catch (\Exception $ex) {
            $this->error[] = 'Unable to validate date due to this exception : ' . $ex->getMessage();
            return false;
        }
        
    }

    public function getDateValue($date, $dateSeparater = '-', $timeSeparator = ':', $format = 'YMDHIS') 
    {
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
                return mktime($timeArray['0'], $timeArray['1'], $timeArray['2'], $dateArray['1'], $dateArray['2'], 
                        $dateArray['0']);

            case 'MDYHIS' :
                if (!checkdate($dateArray['0'], $dateArray['1'], $dateArray['2'])) {
                    $this->error = 'Invalid date';
                    return false;
                }
                return mktime($$timeArray['0'], $timeArray['1'], $timeArray['2'], $dateArray['0'], $dateArray['1'], 
                        $dateArray['2']);

            case 'MYDHIS' :
                if (!checkdate($dateArray['0'], $dateArray['2'], $dateArray['1'])) {
                    $this->error = 'Invalid date';
                    return false;
                }
                return mktime($$timeArray['0'], $timeArray['1'], $timeArray['2'], $dateArray['0'], $dateArray['2'], 
                        $dateArray['1']);
        }
    }
}
