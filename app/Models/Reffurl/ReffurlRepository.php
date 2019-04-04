<?php  
namespace App\Models\Reffurl;

use App\Models\BaseRepository;
use Illuminate\Http\Request; 
use Illuminate\Support\Facades\Auth; 
use Illuminate\Support\Facades\DB;

class ReffurlRepository extends BaseRepository {

    protected $_dbUgnReffurlMaster;

    public function __construct() {
        $this->_dbUgnReffurlMaster = new DbUgnReffurlMaster();
    }

    public function checkIfExist($ref_url)
    {  
        try {
           
            $result     =   $this->_dbUgnReffurlMaster;
           
           
            $result =   $result->where(['ref_url' => $ref_url]);
          
            
            $result     =   $result->get()->toArray();
                
            $count      =   count($result);
            
            if (!$count) {
                return '-1';
            }
            
            if ($count > 0) {
               
            
                return $result;
            } 
            
            
        } catch (\Exception $ex) {
            $this->setError('check if Url already exist', $ex);
            return false;
        }
    }
    
    public function saveRefUrls($data)
    {
        try {
           
            $this->_dbUgnReffurlMaster    =   new DbUgnReffurlMaster();//Save from loop
            
            $dateTime   =   date('Y-m-d H:i:s');
            
            $this->_dbUgnReffurlMaster->ref_url        =   $data['ref_url'];
            $this->_dbUgnReffurlMaster->created_at        =   $dateTime;
            
            if (!$this->_dbUgnReffurlMaster->save()) {
                
                $this->error    =   'Unable to save Urls due to a database error';
                return false;
            }
            
            return $this->_dbUgnReffurlMaster->pk_ref_id;
            
        } catch (\Exception $ex) {
            $this->setError('save Url', $ex);
            return false;
        }
    }
    
   public function getUrlDetailsFromIds($refurlsIds)
   {
     try {
           
            $result     =   $this->_dbUgnReffurlMaster;
           
           
            $result =   $result->where(['pk_ref_id' => $refurls]);
           
            
            $result     =   $result->get()->toArray();
              
           
             return $result;
         
             
        } catch (\Exception $ex) {
            $this->setError('check if Url already exist', $ex);
            return false;
        }
  }

      public function getRefList($ref_url)
      {  
        try {
            $refIds   =      explode(',',$ref_url);
            $result     =   $this->_dbUgnReffurlMaster;
           
           
            $result =   $result->whereIn('pk_ref_id' , $refIds);
           
            
            $result     =   $result->get()->toArray();
                   
            $count      =   count($result);
            
            if (!$count) {
                return '-1';
            }
            
            if ($count > 0) {
                         
                return $result;
            } 
            
                      
        } catch (\Exception $ex) {
            $this->setError('check if Url already exist', $ex);
            return false;
        }
    }

    
    public function getTableName()
    {
        $this->_dbUgnReffurlMaster->getTable();
    }
}
