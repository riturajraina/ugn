<?php namespace App\Models\Image;

use App\Models\BaseRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ImageRepository extends BaseRepository {

    protected $_dbUgnImageMaster;

    public function __construct() {
        $this->_dbUgnImageMaster = new DbUgnImageMaster();
    }

    public function checkIfExist($imageName)
    {
        try {
            
            $result     =   $this->_dbUgnImageMaster;
            
            if (is_array($imageName)) {
                $result =   $result->whereIn('image_name', $imageName);
            } else {
                $result =   $result->where(['image_name' => $imageName]);
            }
            
            $result     =   $result->get()->toArray();
            
            if (!$result) {
                $this->error = 'Unable to check if image name already exist due to a database error';
                return false;
            }
            
            $count      =   count($result);
            
            if (!$count) {
                return false;
            }
            
            if ($count > 1) {
                return $result;
            } 
            
            $result     =  $result['0'];
            
            return $result;
            
        } catch (\Exception $ex) {
            $this->setError('check if image already exist', $ex);
            return false;
        }
    }
    
    public function saveImage($data)
    {
        try {
            $imageDetails =   $this->checkIfExist($data['image_name']);
            
            if ($imageDetails) {
                return $imageDetails;
            }
            
            $this->_dbUgnImageMaster    =   new DbUgnImageMaster();//Save from loop
            
            $dateTime   =   date('Y-m-d H:i:s');
            
            $this->_dbUgnImageMaster->image_name        =   $data['image_name'];
            $this->_dbUgnImageMaster->created_at        =   $dateTime;
            $this->_dbUgnImageMaster->updated_at        =   $dateTime;
            $this->_dbUgnImageMaster->fk_admin_user_id  =   $data['fk_admin_user_id'];
            
            if (!$this->_dbUgnImageMaster->save()) {
                $this->error    =   'Unable to save image due to a database error';
                return false;
            }
            
            return $this->_dbUgnImageMaster->pk_image_id;
            
        } catch (\Exception $ex) {
            $this->setError('save image', $ex);
            return false;
        }
    }
    
    public function getImageList($data=[])
    {
        try {
            $result = $this->_dbUgnImageMaster;
            
            if (!empty($data['searchArray'])) {
                foreach ($data['searchArray'] as $searchKey =>$searchValue) {
                    if ($searchKey == 'image_name') {
                        $result =   $result->where($searchKey, 'like', '%' . $searchValue . '%');
                    } else {
                        $result =   $result->where($searchKey, '=', $searchValue);
                    }
                }
                //$result = $result->where($data['searchArray']);
            }
            
            if (!empty($data['api_call'])) {
                $result =   $result->get()->toArray();
            } else {
                $result =   $result->orderBy('updated_at', 'DESC')->paginate(env('RECORDS_PER_PAGE'));
                $result->all();
            }
            
            if (count($result)) {
                return $result;
            }
            
            $this->error    =   'No images found';
            
            return [];
        } catch (\Exception $ex) {
            $this->setError('fetch image list', $ex);
            return false;
        }
    }

    
    public function getTableName()
    {
        $this->_dbUgnImageMaster->getTable();
    }
}
