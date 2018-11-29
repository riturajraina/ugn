<?php

namespace App\Helpers;

use Illuminate\Http\Request;
use App\Helpers\Curl;

class SolrManager extends ValidatorBase {

    protected $solrArray;

    public function __construct() {
        parent::__construct();

        $this->error = null;
        
        $this->solrArray =  [
                                'solrip'    => 'localhost',
                                'solrport'  => '8983',
                                //'solrcore'  => 'fkart',
                                'solrcore'  => 'fkart1',
                                
                            ];
    }
    
    public function setSolrArray($data)
    {
        if (!empty($data['solrip'])) {
            $this->solrArray['solrip']      = $data['solrip'];
        }
        
        if (!empty($data['solrport'])) {
            $this->solrArray['solrport']    = $data['solrport'];
        }
        
        if (!empty($data['solrcore'])) {
            $this->solrArray['solrcore']    = $data['solrcore'];
        }
        
        return true;
    }

    function postCsvDataToSolr($data) 
    {
        $header         =   array("Content-type:text/csv; charset=utf-8");

        $post           =   $data;

        //echo "\n" . '<br>Solr Post Data : ' . $post;exit;

        /*$url            =   'http://' . $this->solrArray['solrip'] 
                            . ':' . $this->solrArray['solrport'] 
                            . '/solr/' . $this->solrArray['solrcore'] 
                            . '/update?commit=true';
         * 
         * 
         * $optionsArray   =   [
            
            CURLOPT_URL             => $url,
            CURLOPT_HTTPHEADER      => $header,
            CURLOPT_RETURNTRANSFER  => TRUE,
            CURLOPT_POST            => TRUE,
            CURLOPT_POSTFIELDS      => $post,
            CURLOPT_PROXY           => '',
            
            ];
         */
        
        $url            =   'http://' . $this->solrArray['solrip'] 
                            . ':' . $this->solrArray['solrport'] 
                            . '/solr/' . $this->solrArray['solrcore'] 
                            . '/update/csv?commit=true&encapsulator=' . urlencode('"') . '&escape=' . urlencode('\\');
        
        /*$url            =   'http://' . $this->solrArray['solrip'] 
                            . ':' . $this->solrArray['solrport'] 
                            . '/solr/' . $this->solrArray['solrcore'] 
                            . '/update/csv?commit=true&encapsulator=' . urlencode('"') . '&escape=' . urlencode('"');*/
        
        //echo "\n" . '<br>Url : ' . $url;exit;//%5C backslach urlencode

        $curl           =   new Curl();
        
        $optionsArray   =   [
            
            CURLOPT_URL             => $url,
            CURLOPT_HTTPHEADER      => $header,
            CURLOPT_RETURNTRANSFER  => TRUE,
            CURLOPT_POST            => TRUE,
            //CURLOPT_POSTFIELDS      => 'data-binary=' . $post,
            CURLOPT_POSTFIELDS      => $post,
            CURLOPT_PROXY           => '',
            
        ];
        
        //echo "\n" . '<br>Options array : <pre>' . print_r($optionsArray, true) . '</pre>';exit;
        $curlResult = $curl->execute($optionsArray);

        if (!$curlResult) {
            $this->error = $curl->getError();
            return false;
        } 
        
        if (stristr($curlResult, 'err')) {
            $this->error = $curlResult;
            return false;
        }

        return true;
    }
}

