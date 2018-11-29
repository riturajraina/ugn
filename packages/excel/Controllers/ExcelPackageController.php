<?php

namespace Excel\Controllers;

use Excel\Config\ExcelConfig;
use App\Http\Controllers\Controller;

//require_once(base_path() . '/packages/excel/excel_reader2.php');

class ExcelPackageController extends Controller {

    protected $error;
    protected $excelReader;

    public function __construct() {
        $this->error = '';
        $this->excelReader = new SpreadsheetExcelReader();
    }

    public function getError() {
        return $this->error;
    }

    /**
     * 
     *
     * @return Response
     */
    public function getData($data) {

        $returnData = [];
        //echo '<br>data : <pre>' . print_r($data, true) . '</pre>';exit;

        try {
            switch (strtolower($data['type'])) {
                case 'xls':
                    //require_once('excel_reader2.php');

                    //$returnData = new SpreadsheetExcelReader($data['file']);
                    
                    $this->excelReader->read($data['file']);
                    
                    $returnData = $this->excelReader->getDataArray();

                    if (!$returnData) {
                        $this->error = 'Unable to fetch data from excel file due to an error. Please contact administrator';
                        return false;
                    }

                    break;

                case 'csv' :
                    
                    $csvLines = explode(PHP_EOL, file_get_contents($data['file']));
                    
                    if (!$csvLines) {
                        $this->error = 'Unable to fetch data from csv file due to an error. Please contact administrator';
                        return false;
                    }
                    
                    $i = 0;
                    
                    foreach ($csvLines as $line) {
                        if (!empty($line)) {
                            $csvArray = str_getcsv($line);

                            if (count($csvArray)) {
                                $insertArray = [];

                                foreach ($csvArray as $value) {
                                        $insertArray[] =trim(addslashes(stripslashes($value)));
                                }
                            }
                            
                            $returnData[$i++] = $insertArray;
                        }
                    }
                    
                    break;
            }

            return $returnData;
            
        } catch (\Exception $ex) {
            $this->error = $ex->getMessage();
            return false;
        }
    }

}
