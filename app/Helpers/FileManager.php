<?php

namespace App\Helpers;

use Illuminate\Http\Request;

class FileManager extends ValidatorBase {
    
    protected $pathSeparator;
    
    public function __construct() {
        parent::__construct();
        
        $this->error = null;
        
        $this->pathSeparator = null;
        
        $osInfo = php_uname();
        
        if (stristr($osInfo, 'windows')) {
            $this->pathSeparator = "\\";
        }
        
        if (stristr($osInfo, 'linux')) {
            $this->pathSeparator = '/';
        }
        
    }
    
    public function getPathSeparator()
    {
        return $this->pathSeparator;
    }

    public function createPathDirectory($path, $dirNameWithDotAllowed=false) {
        
        $pathArray = explode($this->pathSeparator, $path);
        
        /*echo '<br>Path separator : ' . $this->pathSeparator;
        
        echo '<br>pathArray : <pre>' . print_r($pathArray, true) . '</pre>';exit;*/
        
        if (!is_array($pathArray)) {
            $pathArray = [$pathArray];
        }
        
        $count = count($pathArray);
        
        //if ($count && is_array($pathArray)) {
            $i = 0;
            
            $totalNodes = $count-1;
            
            $curDir = null;
            
            foreach ($pathArray as $dir) {
                
                //if ($i >= ($totalNodes)) {
                if ($i >= ($count)) {
                    break;
                }
                
                $createDirectory = false;
                
                $curDir .= empty($curDir) ? $dir : '/' . $dir;
                
                if ($dirNameWithDotAllowed) {
                    $createDirectory = true;
                } elseif (!stristr($dir, '.')) {
                    $createDirectory = true;
                } else {
                    $this->error = 'A . was found in directory name : ' . $dir . '. Please check';
                    return false;
                }
                
                if ($createDirectory) {
                    if (!is_dir($curDir)) {
                        if (!mkdir($curDir)) {
                            $this->error = 'Unable to create directory : ' . $curDir;
                            return false;
                        }
                    }
                }
                
                $i++;
            }
        //}
        
        return true;
    }
    
    public function getDirFileNames($dirName)
    {
        try {
            $fileNames = [];
            
            foreach (new \DirectoryIterator($dirName) as $file) {
                if ($file->isFile()) {
                    //echo $file->getFilename() . '<br>';
                    $fileNames[] = $file->getFilename();
                }
            }
            
            if (count($fileNames)) {
                return $fileNames;
            }
            
            $this->error = 'No files found in directory : ' . $dirName;
            
            return false;
        } catch (\Exception $ex) {
            $this->error = 'Unable to fetch file names of directory : ' . $dirName 
                    . ' due to this error : ' . $ex->getMessage();
            return false;
        }
    }
    
    public function getCsvData($filePath)
    {
        try {
            $fp         =   fopen($filePath , 'r');

            $csvData	= [];

            while(! feof($fp) ) {
                $csvData[] = fgetcsv($fp);
            }

            fclose($fp);
            
            return $csvData;
            
        } catch (\Exception $ex) {
            $this->error = 'Unable to fetch csv data from file : ' . $filePath 
                    . ', due to this exception : ' . $ex->getMessage();
            return false;
        }
    }
    
    public function splitCsvFile($filePath, $noOfParts = 5)
    {
        try {
            
        } catch (\Exception $ex) {
            $this->error = 'Unable to split csv files into ' . $noOfParts . ' parts '
                           . 'due to this exception : ' . $ex->getMessage();
            return false;
        }
    }

}
