<?php

namespace App\Models\Service;

use App\Models\BaseRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccordionRepository extends BaseRepository {

    protected $_dbUgnAccordionMaster;

    public function __construct() {
        parent::__construct();
        $this->_dbUgnAccordionMaster = new DbUgnAccordionMaster();
    }

    public function getTableName() {
        return $this->_dbUgnAccordionMaster->getTable();
    }
    
    public function checkForDuplicateTitle($data)
    {
        try {
            $whereArray =   [
                'title'     =>   $data['title'],
                'fk_tab_id' =>   $data['fk_tab_id'],
            ];
            
            $result =   $this->_dbUgnAccordionMaster::where($whereArray);
            
            if (!empty($data['pk_accordion_id'])) {
                $result =   $result->where('pk_accordion_id', '<>', $data['pk_accordion_id']);
            }
            
            $result     =   $result->get()->toArray();
            
            if (count($result)) {
                $this->error = 'This title already exist in another accordion of this Tab.';
                return false;
            }
            
            return true;
        } catch (\Exception $ex) {
            $this->setError('check for duplicate accordion title', $ex);
            return false;
        }
    }
    
    public function updateAccordion($data)
    {
        try {
            if (!empty($data['title'])) {
                if (!$this->checkForDuplicateTitle($data)) {
                    return false;
                }
            }
            
            $accordionId = $data['pk_accordion_id'];
            
            unset($data['pk_accordion_id']);
            
            $result =   $this->_dbUgnAccordionMaster::where(['pk_accordion_id' => $accordionId])->update($data);
            
            if (!$result) {
                $this->error = 'Unable to update accordion data due to a database error.';
                return false;
            }
            
            return true;
        } catch (\Exception $ex) {
            $this->setError('update accordion data', $ex);
            return false;
        }
    }
    
    public function saveAccordion($data)
    {
        try {
            if (!$this->checkForDuplicateTitle($data)) {
                return false;
            }
            
            $dateTime   =   date('Y-m-d H:i:s');
            
            $this->_dbUgnAccordionMaster->fk_tab_id         =   $data['fk_tab_id'];
            $this->_dbUgnAccordionMaster->title             =   $data['title'];
            $this->_dbUgnAccordionMaster->paragraph         =   $data['paragraph'];
            $this->_dbUgnAccordionMaster->fk_admin_user_id  =   $data['fk_admin_user_id'];
            $this->_dbUgnAccordionMaster->status            =   $data['status'];
            $this->_dbUgnAccordionMaster->created_at        =   $dateTime;
            $this->_dbUgnAccordionMaster->updated_at        =   $dateTime;
            
            if (!$this->_dbUgnAccordionMaster->save()) {
                $this->error    =   'Unable to save accordion data due to a database error.';
                return false;
            }
            
            return $this->_dbUgnAccordionMaster->pk_accordion_id;
                    
        } catch (\Exception $ex) {
            $this->setError('save accordion data', $ex);
            return false;
        }
    }
    
    public function getAccordionList($data=[])
    {
        try {
            $result = $this->_dbUgnAccordionMaster;
            
            if (!empty($data['searchArray'])) {
                
                if (!empty($data['searchArray']['tabIds'])) {
                    
                    $tabIds =   !is_array($data['searchArray']['tabIds']) ? [$data['searchArray']['tabIds']]
                                    : $data['searchArray']['tabIds'];
                    
                    $result =   $result->whereIn('fk_tab_id', $tabIds);
                    
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
                $result = $result->get()->toArray();
            } else {
                $result = $result->paginate(env('RECORDS_PER_PAGE'));
                $result->all();
            }
            
            if (count($result)) {
                return $result;
            }
            
            $this->noResult =   true;
            
            $this->error    =   'No accordions found for this tab';
            
            return false;
        } catch (\Exception $ex) {
            $this->setError('fetch accordion list', $ex);
            return false;
        }
    }
}


