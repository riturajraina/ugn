<?php

namespace App\Models\Mobile;

use App\Models\BaseRepository;
use Illuminate\Support\Facades\Auth;

class MobileRepository extends BaseRepository{

    protected $_dbMobile;

    public function __construct() {
        $this->_dbMobile = new DbHlpMobileMaster();
    }

    /*     * * */

    /**
     * Returns the mobile number id of a previous entered mobile number
     *
     * @return \Illuminate\Http\Response
     */
    public function getMobileId($data) {
        try {
            $mobileId = $this->_dbMobile::where(['mobile_number' => $data['mobile_number']])->pluck('pk_mobile_id');

            $mobileId = $mobileId->toArray();

            //echo '<br>mobile id : <pre>' . print_r($mobileId, true) . '</pre>';

            if (count($mobileId)) {
                //echo '<br>inside if'; exit;
                return $mobileId['0'];
            }

            $mobileId = $this->save($data);

            return $mobileId;
        } catch (\Exception $ex) {
            $this->setError('fetch mobile Id', $ex);
            return false;
        }
        
    }
    
    public function getMobileNumber($mobileId)
    {
        try {
            $result = $this->_dbMobile::where(['pk_mobile_id' => $mobileId])->get(['mobile_number'])->toArray();
            //echo '<br>result : <pre>' . print_r($result, true) . '</pre>';exit;
            if (count($result)) {
                return $result['0']['mobile_number'];
            }

            return false;
        } catch (\Exception $ex) {
            $this->setError('fetch mobile number', $ex);
        }
        
    }

    /**
     * Saves a task
     *
     * @param  $data
     * @return null
     */
    public function save($data) {
        try {
            $this->_dbMobile->mobile_number = $data['mobile_number'];

            $this->_dbMobile->save();

            return $this->_dbMobile->pk_mobile_id;
        } catch (\Exception $ex) {
            $this->setError('save mobile number', $ex);
            return false;
        }
    }

    /**
     * Deletes a task
     *
     * @param  int  $id
     * @return null
     */
    public function delete($data) {
        try {
            $this->_dbMobile::findOrFail($data['pk_mobile_id'])->delete();
        } catch (\Exception $ex) {
            $this->setError('delete mobile number from database', $ex);
            return false;
        }
    }
}
