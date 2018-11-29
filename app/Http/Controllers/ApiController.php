<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Api\ApiRepository;
use Illuminate\Http\Request;

class ApiController extends Controller  
{
    protected $apiRepository;
    
    public function __construct()
    {
        parent::__construct();
        $this->apiRepository = new ApiRepository();
    }
    
    public function fetchDataFromApiAndStore($provider='flipkart')
    {
        $provider = strtolower($provider);
        
        $message  = 'Data imported successfully';
        
        if (!$this->apiRepository->fetchAndStoreData($provider)) {
            $message =  'Error : ' . $this->apiRepository->getError();
        }
        
        echo $message;
    }
    
    public function fetchDataMultiUrl(Request $request)
    {
        $data       = $request->all();
        
        if (empty($data['provider'])) {
            $data['provider'] = 'flipkart';
        }
        
        //$provider   = strtolower($data['provider']);
        
        $message    = '<br>Data imported successfully';
        
        if (!$this->apiRepository->fetchParallelData($data)) {
            $message =  'Error : ' . $this->apiRepository->getError();
        }

        echo $message;
    }
    
    public function unzipCronDataFiles($cronId=null, $provider='flipkart')
    {
        $provider = strtolower($provider);
        
        $message  = '<br>Data unzipped successfully';
        
        if (!$this->apiRepository->unzipCronDataFiles(['cronId' => $cronId, 'provider' => $provider]))
        {
            $message =  $this->apiRepository->getError();
        }

        echo $message;
    }
    
    public function unzipFile(Request $request)
    {
        
        $data       = $request->all();
        
        //file_put_contents('d:\\multiData\multiunzipcontroller.txt', json_encode($data));
        
        $message    = '<br>File unzipped successfully';
        
        if (!$this->apiRepository->unzipFile($data)) {
            $message = $this->apiRepository->getError();
        }
        
        echo $message;
    }
    
    public function unzipFileGetMethod($path, $cat, $logId, $cronId)
    {
        
        $data       = ['path' => $path, 'cat' => $cat, 'logId' => $logId, 'cronId' => $cronId];
        
        //file_put_contents('d:\\multiData\multiunzipcontroller.txt', json_encode($data));
        
        $message    = '<br>File unzipped successfully';
        
        if (!$this->apiRepository->unzipFile($data)) {
            $message = $this->apiRepository->getError();
        }
        
        echo $message;
    }
    
    public function insertImportedData($cronId, $provider=null)
    {
        $data       = ['cronId' => $cronId, 'provider' => $provider];
        
        $message    = 'Data inserted successfully';
        
        if (!$this->apiRepository->insertImportedData($data)) {
            $message = $this->apiRepository->getError();
        }
        
        echo $message;
    }
    
    public function insertInSolr($provider='flipkart')
    {
        $message = 'Data imported successfully in Solr';
        
        if (!$this->apiRepository->insertDataInSolr($provider)) {
            $message = $this->apiRepository->getError();
        }
        
        echo $message;
    }
    
    public function exportSolrImportDataToFile($provider='flipkart')
    {
        $message = 'Data exported successfully';
        
        if (!$this->apiRepository->exportSolrImportDataToFile($provider)) {
            $message = $this->apiRepository->getError();
        }
        
        echo $message;
    }
}
