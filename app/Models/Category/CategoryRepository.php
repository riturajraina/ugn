<?php namespace App\Models\Category;

use App\Models\BaseRepository;
use Illuminate\Support\Facades\DB;

class CategoryRepository extends BaseRepository {

    protected $_dbUgnPageCategoryMaster;

    public function __construct() {
        $this->_dbUgnPageCategoryMaster = new DbUgnPageCategoryMaster();
    }

    public function getTableName()
    {
        return $this->_dbUgnPageCategoryMaster->getTable();
    }
    
    public function arrangeDisplayOrder($data)
    {
        try {
            if (!empty($data['categoryUpdate'])) {
                $result =   $this->_dbUgnPageCategoryMaster::where(['pk_page_category_id' => $data['pk_page_category_id']])
                            ->get(['display_order'])->toArray();
                
                $result =   $result['0'];
                
                $result =   $this->_dbUgnPageCategoryMaster::where(['display_order' => $data['display_order']])
                            ->update(['display_order' => $result['display_order']]);//Swap display orders
                
                return true;
            }
            
            $result = $this->_dbUgnPageCategoryMaster::where('pk_page_category_id', '<>', $data['pk_page_category_id'])
                      ->where('display_order', '>=', $data['display_order'])
                      ->update(['display_order' => DB::raw('`display_order` + 1')]);
            
            return true;
        } catch (\Exception $ex) {
            $this->setError('re-arrange display order of categories', $ex);
            return false;
        }
    }
    
    public function updateCategory($data)
    {
        try {
            if (!empty($data['category_name'])) {
                if (!$this->checkForDuplicateCategoryName($data)) {
                
                    $this->error = 'This category name already exist';

                    return false;
                }
            }
            
            if (!empty($data['display_order'])) {
                
                $data['categoryUpdate'] = true;
                
                if (!$this->arrangeDisplayOrder($data)) {
                    return false;
                }
                
                unset($data['categoryUpdate']);
            }
            
            $result = $this->_dbUgnPageCategoryMaster::where(['pk_page_category_id' => $data['pk_page_category_id']])
                      ->update($data);
            
            return true;
        } catch (\Exception $ex) {
            $this->setError('update category', $ex);
            return false;
        }
    }
    
    public function checkForDuplicateCategoryName($data) 
    {
        try {
            $result =   $this->_dbUgnPageCategoryMaster;
            
            if (!empty($data['pk_page_category_id'])) {
                $result =   $result->where('pk_page_category_id', '<>', $data['pk_page_category_id']);
            }
            
            $result =   $result->where(['category_name' => $data['category_name']])->get(['pk_page_category_id'])->toArray();
            
            if (count($result)) {
                return false;
            }
            
            return true;
        } catch (\Exception $ex) {
            $this->setError('check for duplicate category name', $ex);
            return false;
        }
    }
    
    public function createCategory($data)
    {
        try {
            
            if (!$this->checkForDuplicateCategoryName($data)) {
                $this->error    =   'This category name already exist';
                return false;
            }
            
            $dateTime                                           =   date('Y-m-d H:i:s');
            $this->_dbUgnPageCategoryMaster->category_name      =   $data['category_name'];
            $this->_dbUgnPageCategoryMaster->created_at         =   $dateTime;
            $this->_dbUgnPageCategoryMaster->updated_at         =   $dateTime;
            $this->_dbUgnPageCategoryMaster->fk_admin_user_id   =   $data['fk_admin_user_id'];
            $this->_dbUgnPageCategoryMaster->display_order      =   $data['display_order'];
            $this->_dbUgnPageCategoryMaster->status             =   $data['status'];
            
            if (!$this->_dbUgnPageCategoryMaster->save()) {
                $this->error = 'Unable to save category due to a database error';
                return false;
            }
            
            $displayOrderArray  =   [
                'pk_page_category_id'   => $this->_dbUgnPageCategoryMaster->pk_page_category_id,
                'display_order'         => $data['display_order'], 
            ];
            
            if (!$this->arrangeDisplayOrder($displayOrderArray)) {
                return false;
            }
            
            return $this->_dbUgnPageCategoryMaster->pk_page_category_id;
            
        } catch (\Exception $ex) {
            $this->setError('create new category', $ex);
            return false;
        }
    }
    
    public function getCategoryList($data=[])
    {
        try {
            $result =   $this->_dbUgnPageCategoryMaster;
            
            if (!empty($data['searchArray'])) {
                
                if (!empty($data['searchArray']['category_name'])) {
                    $result = $result->where('category_name', 'like', '%' . $data['searchArray']['category_name'] . '%');
                    unset ($data['searchArray']['category_name']);
                }
                
                if (count($data['searchArray'])) {
                    $result = $result->where($data['searchArray']);
                }
            }
            
            if (!empty($data['orderBy'])) {
                $result->orderBy($data['orderBy']['column'], $data['orderBy']['order']);
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
            
            $this->error    =   'No categories found';
            
            return [];
        } catch (\Exception $ex) {
            $this->setError('fetch category list', $ex);
            return false;
        }
    }
    
    public function getDisplayOrderList()
    {
        try {
            
            $result =   $this->_dbUgnPageCategoryMaster::max('display_order');
            
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
            $this->setError('fetch display order list', $ex);
            return false;
        }
    }
}
