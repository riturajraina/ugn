<?php

namespace App\Models\Sms;

use App\Models\BaseRepository;


class SmsRepository extends BaseRepository {

    protected $_dbUgnSmsMaster;

    public function __construct() {
        $this->_dbUgnSmsMaster = new DbUgnSmsMaster();
    }

    public function saveSms($data)
    {   
        try {
            //echo '<br>sms text from save sms : ' . $data['sms_text'];
            $dateTime   =   date('Y-m-d H:i:s');
            $this->_dbUgnSmsMaster->sms_text =  $data['sms_text'];
            $this->_dbUgnSmsMaster->mobile_number = $data['mobile_number'];
            $this->_dbUgnSmsMaster->apiInfo = $data['apiInfo'];
            $this->_dbUgnSmsMaster->created_at = $dateTime;
            $this->_dbUgnSmsMaster->updated_at = $dateTime;
            $this->_dbUgnSmsMaster->status = $data['status'];
            if (!$this->_dbUgnSmsMaster->save()) {
                return false;
            }
            return $this->_dbUgnSmsMaster->pk_sms_id;
        } catch (\Exception $ex) {
            $this->setError('Unable to save sms. Please contact administrator', $ex);
            return false;
        }
        
    }

}
