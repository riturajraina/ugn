<?php

namespace App\Models\Tab;

use App\Models\BaseRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TabRepository extends BaseRepository {

    protected $_dbUgnTabMaster;

    public function __construct() {
        parent::__construct();
        $this->_dbUgnTabMaster = new DbUgnTabMaster();
    }

    public function getTableName() {
        return $this->_dbUgnTabMaster->getTable();
    }
    
    public function checkForDuplicateTitle($data)
    {
        try {
            $whereArray =   [
                'title' => $data['title'],
                'fk_content_id' => $data['fk_content_id'],
            ];
            
            $result = $this->_dbUgnTabMaster::where($whereArray);
            
            if (!empty($data['pk_tab_id'])) {
                $result = $result->where('pk_tab_id', '<>', $data['pk_tab_id']);
            }
            
            $result = $result->get()->toArray();
            
            if (count($result)) {
                unset($result);
                $this->error = 'This Tab already exist for this page.';
                return false;
            }
            
            return true;
        } catch (\Exception $ex) {
            $this->setError('Check for duplicate Tab Title', $ex);
            return false;
        }
    }
    
    public function saveTabData($data)
    {
        try {
            if (!$this->checkForDuplicateTitle($data)) {
                return false;
            }
            
            $dateTime                               =   date('Y-m-d H:i:s');
            
            $this->_dbUgnTabMaster->fk_content_id   =   $data['fk_content_id'];
            $this->_dbUgnTabMaster->title           =   $data['title'];
            $this->_dbUgnTabMaster->paragraph       =   $data['paragraph'];
            $this->_dbUgnTabMaster->created_at      =   $dateTime;
            $this->_dbUgnTabMaster->updated_at      =   $dateTime;
            $this->_dbUgnTabMaster->fk_admin_user_id=   $data['fk_admin_user_id'];
            $this->_dbUgnTabMaster->status          =   $data['status'];
            
            if (!$this->_dbUgnTabMaster->save()) {
                $this->error = 'Unable to save tab content due to a database error';
                return false;
            }
            
            return $this->_dbUgnTabMaster->pk_tab_id;
        } catch (\Exception $ex) {
            $this->setError('save tab data', $ex);
            return false;
        }
    }
    
    public function updateTab($data)
    {
        try {
            if (!empty($data['title'])) {
                if (!$this->checkForDuplicateTitle($data)) {
                    return false;
                }
            }
            
            $tabId  =   $data['pk_tab_id'];
            
            unset($data['pk_tab_id']);
            
            $result =   $this->_dbUgnTabMaster::where(['pk_tab_id' => $tabId])->update($data);
            
            if (!$result) {
                $this->error = 'Unable to update tab data due to a database error.';
                return false;
            }
            
            return true;
        } catch (\Exception $ex) {
            $this->setError('update tab data', $ex);
            return false;
        }
    }
    
    public function getTabList($data=[])
    {
        try {
            $result     =   $this->_dbUgnTabMaster;
            
            if (!empty($data['searchArray'])) {
                
                if (!empty($data['searchArray']['contentIds'])) {
                    $contentIds =   !is_array($data['searchArray']['contentIds']) ? [$data['searchArray']['contentIds']]
                                    : $data['searchArray']['contentIds'];
                    
                    $result =   $result->whereIn('fk_content_id', $contentIds);
                    
                    unset($data['searchArray']['contentIds']);
                }
                
                if (!empty($data['searchArray']['tabIds'])) {
                    
                    $tabIds =   !is_array($data['searchArray']['tabIds']) ? [$data['searchArray']['tabIds']]
                                    : $data['searchArray']['tabIds'];
                    
                    $result =   $result->whereIn('pk_tab_id', $tabIds);
                    
                    unset($data['searchArray']['tabIds']);
                }
                
                if (!empty($data['searchArray']['searchText'])) {
                    
                    global $globalData;
                    
                    $globalData =   $data;
                    
                    $result     =   $result->where (
                    
                                        function ($query) {

                                            $data = $GLOBALS['globalData'];

                                            unset($GLOBALS['globalData']);

                                            $searchText =   $data['searchArray']['searchText'];
                                            
                                            $query->Where('title', 'like', '%' . $searchText . '%')
                                                  ->orWhere('paragraph', 'like', '%' . $searchText . '%');
                                            
                                            if (env('SPACEDSEARCH')) {
                                                $spacedArray    =   explode(' ', $searchText);
                                            
                                                if (is_array($spacedArray) && count($spacedArray)) {
                                                    foreach ($spacedArray as $searchText) {
                                                        $query =    $query->orWhere('title', 'like', '%' . $searchText . '%')
                                                                    ->orWhere('paragraph', 'like', '%' . $searchText . '%');
                                                    }
                                                }
                                            }
                                        }
                                    );
                    
                    unset($data['searchArray']['searchText']);
                }
                
                if (count($data['searchArray'])) {
                    $result =   $result->where($data['searchArray']);
                }
            }
            
            if (!empty($data['api_call'])) {
                $result =   $result->get()->toArray();
            } else {
                $result =   $result->paginate(env('RECORDS_PER_PAGE'));
            }
            
            if (count($result)) {
                return $result;
            }
            
            $this->noResult =   true;
            
            $this->error    =   'No tabs found for this page';
           
            return false;
            
        } catch (\Exception $ex) {
            $this->setError('fetch tab list', $ex);
            return false;
        }
    }
}

