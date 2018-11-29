<?php

namespace App\Helpers;

use Illuminate\Http\Request;

class ArchiveManager extends ValidatorBase {

    protected $zipArchive;

    public function __construct() {
        parent::__construct();
        $this->zipArchive = new \ZipArchive();
    }
    
    public function extract($source, $destination, $replaceStrings = [])
    {
        set_time_limit (0);
        
        ini_set ('memory_limit', '-1');
        
        try {
            
            /************/
            $finfo = finfo_open(FILEINFO_MIME_TYPE);
            
            $fileType = trim(strtolower(finfo_file($finfo, $source)));
            
            switch ($fileType) {
                case 'application/x-gzip':
                    if (!$this->extractGzipFile($source, $destination, $replaceStrings))
                    {
                        return false;
                    }

                    break;
                
                case 'application/zip' :
                    if (!$this->extractZipFile($source, $destination, $replaceStrings)) {
                        return false;
                    }
                    
                    break;
            }
            
            return true;
            
            /***********/
            
            
            
            /*$numberOfFiles = $this->zip->numFiles;
            
            for ($i = 0; $i < $numberOfFiles; $i++) {
                $filename = $this->zip->getNameIndex($i);
                $fileinfo = pathinfo($filename);
                //copy("zip://".$path."#".$filename, "/your/new/destination/".$fileinfo['basename']);
                if ($numberOfFiles > 1) {
                    if (!copy("zip://" . $path . "#" . $filename, $destination . '_' . $i)) {
                        file_put_contents('D:\multiData\error_' . $filename . '.txt', 'Unable to copy zip file ' . $filename . ' to destination '
                                . ': ' . $destination . '_' . $i);
                    }
                } else {
                    if (!copy("zip://" . $path . "#" . $filename, $destination)) {
                        file_put_contents('D:\multiData\error_' . $filename . '.txt', 'Unable to copy zip file ' . $filename . ' to destination '
                                . ': ' . $destination);
                    }
                }
            }*/
                
            
        } catch (\Exception $ex) {
            $this->error = 'Unable to unzip file : ' . $source . ' due to this error : ' . $ex->getMessage();
            return false;
        }        
    }
    
    public function extractZipFile($source, $destination, $replaceStrings=[])
    {
        try {
            if (!$this->zipArchive->open($source)) {
                        
                $this->error = 'Unable to open source zip archive file : ' . $source;

                return false;
            }

            if (!$this->zipArchive->extractTo($destination)) {

                $this->zipArchive->close();

                $this->error = 'Unable to extract archive file to destination : ' . $destination;

                return false;
            }

            $this->zipArchive->close();

            return true;
        } catch (\Exception $ex) {
            $this->error = 'Unable to unzip zip file : ' . $source . ' due to this error : ' . $ex->getMessage();
            return false;
        }
        
    }
    
    public function extractGzipFile($source, $destination, $replaceStrings=[])
    {
        try {
            // Raising this value may increase performance
            //$buffer_size = 4096; // read 4kb at a time
            //$buffer_size = 524288000; // read 500 MB at a time
            //$buffer_size = 209715200;// read 200 MB at a time
            //52428800//50 MB
            //10485760//10 MB
            //5242880//5 MB
            set_time_limit(0);
            
            $buffer_size = (int) env('GUNZIPBUFFERSIZE');

            // Open our files (in binary mode)
            $file = gzopen($source, 'rb');
            
            if (!$file) {
                $this->error = 'Unable to open source zip file : ' . $source;
                return false;
            }

            $outFile = fopen($destination, 'wb'); 
            
            if (!$outFile) {
                gzclose($file);
                $this->error = 'Unable to open destination file ' . $destination . ' for unzipping.';
                return false;
            }

            // Keep repeating until the end of the input file
            while(!gzeof($file)) {
                // Read buffer-size bytes
                // Both fwrite and gzread and binary-safe
                /*$writeString = str_ireplace('<item_basic_data>', '', gzread($file, $buffer_size));
                $writeString = str_ireplace('</item_basic_data>', '', $writeString);
              
                //Discarding unwanted XML tags so as to facilitate MySql import using 
                //Load XML Command...Rituraj
              
                fwrite($outFile, $writeString);*/
                
                if (count($replaceStrings)) {
                    
                    $writeString = gzread($file, $buffer_size);
                    
                    foreach ($replaceStrings as $replaced => $replacedBy) {
                        $replacedBy = strtolower($replacedBy) == 'null' ? '' : $replacedBy;
                        
                        $writeString = str_ireplace($replaced, $replacedBy, $writeString);
                    }
                    
                    fwrite($outFile, $writeString);
                    
                } else {
                    fwrite($outFile, gzread($file, $buffer_size));
                }
                
                //$writeString = null;
            }  
            // Files are done, close files

            fclose($outFile);
            gzclose($file);

            return true;
        } catch (\Exception $ex) {
            $this->error = 'Unable to unzip gz file : ' . $source . ' due to this error : ' . $ex->getMessage();
            return false;
        }
    }
    
    public function importData()
    {
        /**
         * LOAD XML LOCAL INFILE 'D:\\xampp\\htdocs\\test\\AmazonItemXmlSample.txt'
        INTO TABLE amz_denorm_table_xml
        ROWS IDENTIFIED BY '<item_data>';
         */
    }
}
