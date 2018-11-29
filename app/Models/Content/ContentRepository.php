<?php

namespace App\Models\Content;

use App\Models\BaseRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ContentRepository extends BaseRepository {

    protected $_dbUgnContentMaster;

    public function __construct() {
        parent::__construct();
        $this->_dbUgnContentMaster = new DbUgnContentMaster();
    }

    public function getContentTableName() {
        return $this->_dbUgnContentMaster->getTable();
    }
    
    public function checkForDuplicateData($data)
    {
        try {
            $result     =   $this->_dbUgnContentMaster;
            
            if (!empty($data['pk_content_id'])) {
                $result =   $this->_dbUgnContentMaster::where('pk_content_id', '<>', $data['pk_content_id']);

            }
            
            global  $globalData;
            
            $globalData =   $data;
              if (isset($data['title']) || isset($data['page_link_text'])) {
            $result     =   $result->where (
                    
                                function ($query) {
                
                                    $data = $GLOBALS['globalData'];
                                    
                                    unset($GLOBALS['globalData']);
                                    
                                    if (!empty($data['title']) && !empty($data['page_link_text'])) {
                                        
                                        $query->where(['title' => $data['title']])
                                          ->orWhere(['page_link_text' => $data['page_link_text']]);
                                        
                                    } elseif (!empty($data['title']) && !empty($data['page_link_text'])) {
                                        
                                        $query->where(['title' => $data['title']])
                                          ->orWhere(['page_link_text' => $data['page_link_text']]);
                                        
                                    } elseif (!empty($data['page_link_text'])) {
                                        
                                        $query->where(['page_link_text' => $data['page_link_text']]);
                                        
                                    } elseif (!empty($data['title'])) {
                                        
                                        $query->where(['title' => $data['title']]);
                                        
                                    } 
                                }
                            );
                          
            $result     =   $result->get(['title', 'page_link_text'])->toArray();
            
            if (count($result) && is_array($result)) {
                
                foreach ($result as $row) {
                    if (!empty($data['title'])) {
                        if ($row['title']   == $data['title']) {
                            $this->error    .=  'Title already exist';
                        }
                    }
                    
                    if (!empty($data['page_link_text'])) {
                        if ($row['page_link_text'] == $data['page_link_text']) {
                            $this->error    .=  '<br>Page link text already exist';
                        }
                    }
                }
                
                if (!empty($this->error)) {
                    return false;
                }
            }
        }
           
            return true;
            
        } catch (\Exception $ex) {
            $this->setError('check for duplicate fields in database', $ex);
            return false;
        }
    }

  
    public function arrangeDisplayOrder($data)
    {
        try {
            if (!empty($data['pageUpdate'])) {
                $result =   $this->_dbUgnContentMaster::where(['pk_content_id' => $data['pk_content_id']])
                            ->get(['display_order'])->toArray();
                
                $result =   $result['0'];
                
                $result =   $this->_dbUgnContentMaster::where(['display_order' => $data['display_order']])
                            ->update(['display_order' => $result['display_order']]);//Swap display orders
                
                return true;
            }
            
    $result = $this->_dbUgnContentMaster::where('pk_content_id', '<>', $data['pk_content_id'])
                      ->where('display_order', '>=', $data['display_order'])
                      ->update(['display_order' => DB::raw('`display_order` + 1')]);
            
            return true;
        } catch (\Exception $ex) {
            $this->setError('re-arrange display order of content pages', $ex);
            return false;
        }
    }
    
     public function savePageData($data) 
    {
        try {
            $data   =   $this->trimArray($data);
            
            if (!$this->checkForDuplicateData($data)) {
                return false;
            }
            
            $dateTime                                       =   date('Y-m-d H:i:s');
            
            $this->_dbUgnContentMaster->fk_page_category_id =   $data['fk_page_category_id'];
            $this->_dbUgnContentMaster->display_order       =   $data['display_order'];
            $this->_dbUgnContentMaster->page_link_text      =   $data['page_link_text'];
            $this->_dbUgnContentMaster->title               =   $data['title'];
            $this->_dbUgnContentMaster->contentImages       =   $data['contentImages'];
            $this->_dbUgnContentMaster->contentImages_Mob   =   $data['contentImages_Mob'];
            $this->_dbUgnContentMaster->contentImages_right =   $data['contentImages_right'];
            $this->_dbUgnContentMaster->contentImages_Mob_right =   $data['contentImages_Mob_right'];
            $this->_dbUgnContentMaster->right_image_vid_url =   $data['right_image_vid_url'];
            $this->_dbUgnContentMaster->paragraph           =   $data['paragraph'];
            $this->_dbUgnContentMaster->ref_ids             =   $data['ref_ids'];
            $this->_dbUgnContentMaster->fk_admin_user_id    =   $data['fk_admin_user_id'];
            $this->_dbUgnContentMaster->status              =   $data['status'];
            $this->_dbUgnContentMaster->created_at          =   $dateTime;
            $this->_dbUgnContentMaster->updated_at          =   $dateTime;
            
            if (!$this->_dbUgnContentMaster->save()) {
                $this->error    =   'Unable to save page content due to a database error';
                return false;
            }
            
            $displayOrderArray  =   [
                'pk_content_id' => $this->_dbUgnContentMaster->pk_content_id,
                'display_order' => $data['display_order'], 
            ];
            
            if (!$this->arrangeDisplayOrder($displayOrderArray)) {
                return false;
            }
            
            return $this->_dbUgnContentMaster->pk_content_id;
            
        } catch (Exception $ex) {
            $this->setError('save page data', $ex);
            return false;
        }
    }
    
        public function updatePageData($data)
    {
        try {
            //echo '<br>update data : <pre>' . print_r($data, true) . '</pre>';exit;
            if (!$this->checkForDuplicateData($data)) {
                return false;
            }
           
            if (!empty($data['display_order'])) {
                
                $data['pageUpdate'] = true;
                
                if (!$this->arrangeDisplayOrder($data)) {
                    return false;
                }
                
                unset($data['pageUpdate']);
            }
            
            if (!$this->_dbUgnContentMaster::where(['pk_content_id' => $data['pk_content_id']])->update($data)) {
                $this->error = 'Unable to update page content due to a database error';
                return false;
            }
            
            return true;
        } catch (\Exception $ex) {
            $this->setError('update page data', $ex);
            return false;
        }
    }
        
    public function getPageList($data=array())
    {
        try {
            
            $result = $this->_dbUgnContentMaster;
            
            if (!empty($data['searchArray'])) {
                
                if (!empty($data['searchArray']['categoryIds'])) {
                    
                    $categoryIds    =   !is_array($data['searchArray']['categoryIds']) ? [$data['searchArray']['categoryIds']]
                                        : $data['searchArray']['categoryIds'];
                    
                    $result = $result->whereIn('fk_page_category_id', $categoryIds);
                    
                    unset($data['searchArray']['categoryIds']);
                }
                
                if (!empty($data['searchArray']['contentIds'])) {
                    $contentIds =   !is_array($data['searchArray']['contentIds']) ? [$data['searchArray']['contentIds']]
                                    : $data['searchArray']['contentIds'];
                    
                    $result =   $result->whereIn('pk_content_id', $contentIds);
                    
                    unset($data['searchArray']['contentIds']);
                }
                
                if (!empty($data['searchArray']['searchText'])) {
                    
                    global $globalData;
                    
                    $globalData =   $data;
                    
                    $result     =   $result->where (
                    
                                        function ($query) {

                                            $data = $GLOBALS['globalData'];

                                            unset($GLOBALS['globalData']);

                                            $searchText =   $data['searchArray']['searchText'];
                                            
                                            $query->where('page_link_text', 'like', '%' . $searchText . '%')
                                                  ->orWhere('title', 'like', '%' . $searchText . '%')
                                                  ->orWhere('paragraph', 'like', '%' . $searchText . '%');
                                            
                                            if (env('SPACEDSEARCH')) {
                                                $spacedArray    =   explode(' ', $searchText);
                                            
                                                if (is_array($spacedArray) && count($spacedArray)) {
                                                    foreach ($spacedArray as $searchText) {
                                                        $query =    $query->orWhere('title', 'like', '%' . $searchText . '%')
                                                                    ->orWhere('paragraph', 'like', '%' . $searchText . '%')
                                                                    ->orWhere('page_link_text', 'like', '%' . $searchText . '%');;
                                                    }
                                                }
                                            }
                                        }
                                    );
                    
                    unset($data['searchArray']['searchText']);//echo '<br>Sql : ' . $result->toSql();exit;
                }
                
                if (count($data['searchArray'])) {
                    $result = $result->where($data['searchArray']);
                }
            }
            
            if (!empty($data['orderBy'])) {
                $result->orderBy($data['orderBy']['column'], $data['orderBy']['order']);
            }
            
            if (!empty($data['api_call'])) {
                $result = $result->get()->toArray();
            } else {
                $result = $result->paginate(env('RECORDS_PER_PAGE'));
            }
            
            if (count($result)) {
                return $result;
            }
            
            $this->noResult =   true;
            
            $this->error = 'No pages found';
            
            return false;
        } catch (\Exception $ex) {
            $this->setError('fetch page list', $ex);
            return false;
        }
    }
    
    public function getDisplayOrderList()
    {
        try {
            
            $result =   $this->_dbUgnContentMaster::max('display_order');
            
            if (!$result) {
                return ['1' => 1];
            }
            
            $result     +=  1;
            
            $list       =   [];
            
            for ($i=1;$i<=$result;$i++) {
                $list[$i] =   $i;
            }
            
            return $list;
        } catch (\Exception $ex) {
            $this->setError('fetch page display order list', $ex);
            return false;
        }
    }
}
