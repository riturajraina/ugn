<?php

namespace Helpme\Models\Mobile;

use Illuminate\Support\Facades\Auth;

class MobileRepository {

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
        //$mobileId = $this->_dbMobile::select('pk_mobile_id')->where(['mobile_number', '=', $data['mobile_number']])->get();
        //$mobileId = $this->_dbMobile::select('pk_mobile_id')->where(['mobile_number' => $data['mobile_number']])->get();

        $mobileId = $this->_dbMobile::where(['mobile_number' => $data['mobile_number']])->pluck('pk_mobile_id');

        $mobileId = $mobileId->toArray();

        //echo '<br>mobile id : <pre>' . print_r($mobileId, true) . '</pre>';

        if (count($mobileId)) {
            //echo '<br>inside if'; exit;
            return $mobileId['0'];
        }

        $mobileId = $this->save($data);

        return $mobileId;
    }
    
    public function getMobileNumber($mobileId)
    {
        $result = $this->_dbMobile::where(['pk_mobile_id' => $mobileId])->get(['mobile_number'])->toArray();
        //echo '<br>result : <pre>' . print_r($result, true) . '</pre>';exit;
        if (count($result)) {
            return $result['0']['mobile_number'];
        }
        
        return false;
    }

    /**
     * Saves a task
     *
     * @param  $data
     * @return null
     */
    public function save($data) {
        //$this->middleware('auth');

        $this->_dbMobile->mobile_number = $data['mobile_number'];

        $this->_dbMobile->save();

        return $this->_dbMobile->pk_mobile_id;
    }

    /**
     * Deletes a task
     *
     * @param  int  $id
     * @return null
     */
    public function delete($data) {
        $this->_dbMobile::findOrFail($data['pk_mobile_id'])->delete();
    }

    /*     * * */
}
