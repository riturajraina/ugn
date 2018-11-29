<?php

namespace App\Models\Favourites;

use App\Models\BaseRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FavouritesRepository extends BaseRepository {

    protected $_dbUgnFavouritesMaster;

    public function __construct() {
        parent::__construct();
        $this->_dbUgnFavouritesMaster = new DbUgnFavouritesMaster();
    }

    public function getTableName() {
        return $this->_dbUgnFavouritesMaster->getTable();
    }
    
    public function checkIfRecordPresent($data) 
    {
        try {
            $whereArray =   [
                'fk_tab_id'             =>  $data['fk_tab_id'],
                'fk_accordion_id'       =>  $data['fk_accordion_id'],
                'fk_content_id'         =>  $data['fk_content_id'],
            ];
            
            $result     =   $this->_dbUgnFavouritesMaster::where($whereArray)->get()->toArray();
            
            if (count($result)) {
                return $result;
            }
            
            return false;
        } catch (\Exception $ex) {
            $this->setError('check if favourite record present', $ex);
            return false;
        }
    }
  
    public function setFavourite($data)
    {
        try { //echo '<br>inside setfavorite, data : <pre>' . print_r($data, true) . '</pre>';exit;
            $result     =   $this->checkIfRecordPresent($data);
            
            $dateTime   =   date('Y-m-d H:i:s');
            
            if (count($result) && is_array($result)) {
                
                $result =   $result['0'];
                
                if (strtolower($result['status']) == 'disabled') {
                    
                    $result =   $this->_dbUgnFavouritesMaster::
                                where(['pk_favourites_master' => $result['pk_favourites_master']])
                                ->update(['status' => 'Enabled', 'updated_at' => $dateTime]);
                    
                    if (!$result) {
                        $this->error = 'Unable to set favourite due to a database error';
                        return false;
                    }
                    
                    return true;
                    
                } else {
                    $this->error = 'Favourite already marked';
                    return false;
                }
            }
            
            $this->_dbUgnFavouritesMaster->fk_tab_id            =   $data['fk_tab_id'];
            $this->_dbUgnFavouritesMaster->fk_accordion_id      =   $data['fk_accordion_id'];
            $this->_dbUgnFavouritesMaster->fk_content_id        =   $data['fk_content_id'];
            $this->_dbUgnFavouritesMaster->created_at           =   $dateTime;
            $this->_dbUgnFavouritesMaster->updated_at           =   $dateTime;
            $this->_dbUgnFavouritesMaster->fk_admin_user_id     =   $data['fk_admin_user_id'];
            $this->_dbUgnFavouritesMaster->status               =   $data['status'];

            if (!$this->_dbUgnFavouritesMaster->save()) {
                $this->error    =   'Unable to mark favourite due to a database error';
                return false;
            }

            return $this->_dbUgnFavouritesMaster->pk_favourites_master;
            
        } catch (\Exception $ex) {
            $this->setError('save favourite data', $ex);
            return false;
        }
    }
    
    public function unsetFavourite($data) 
    {
        try {
            
            $result =   $this->checkIfRecordPresent($data);
            
            if (count($result) && is_array($result)) {
                
                $result =   $result['0'];
                
                if (strtolower($result['status']) == 'enabled') {
                    
                    $result =   $this->_dbUgnFavouritesMaster::where(
                                ['pk_favourites_master' => $result['pk_favourites_master']])
                                ->update(['status' => 'Disabled', 'updated_at' => date('Y-m-d H:i:s')]);
                    
                    if (!$result) {
                        $this->error = 'Unable to set favourite due to a database error';
                        return false;
                    }
                    
                    return true;
                    
                } else {
                    $this->error = 'Favourite already disabled';
                    return false;
                }
            } else {
                $this->error = 'Favourite already disabled';
                return false;
            }
        } catch (\Exception $ex) {
            $this->setError('unset favourite', $ex);
            return false;
        }
    }
    
    public function getFavouritesList($data)
    {
        try {
            $result =   $this->_dbUgnFavouritesMaster;
            
            if (!empty($data['searchArray'])) {
                $result =   $result->where($data['searchArray']);
            }
            
            if (!empty($data['api_call'])) {
                $result =   $result->get()->toArray();
            } else {
                $result =   $result->paginate(env('RECORDS_PER_PAGE'));
                $result->all();
            }
            
            if (count($result)) {
                return $result;
            }
            
            $this->error    =   'No favourites found for this page and tab';
            
            return [];
            
        } catch (\Exception $ex) {
            $this->setError('get favourite list', $ex);
            return false;
        }
    }
}


