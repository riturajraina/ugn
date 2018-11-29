<?php

namespace App\Models\Otp;

use App\Models\BaseRepository;

//use App\Helpers\GenerateRandom;
//use Illuminate\Support\Facades\Auth;

class ForgotPasswordOtpRepository extends BaseRepository {

    protected $_dbUgnOtp;

    public function __construct() {
        $this->_dbUgnOtp = new DbUgnForgotpasswordOtpMaster();
    }

    /**
     * Returns the list of tasks created
     *
     * @return \Illuminate\Http\Response
     */
    public function saveOtp($data) {
        try {
            $dateTime = date('Y-m-d H:i:s');
            $this->_dbUgnOtp->otp_text = $data['otp_text'];
            $this->_dbUgnOtp->fk_admin_user_id = $data['fk_admin_user_id'];
            $this->_dbUgnOtp->created_at = $dateTime;
            $this->_dbUgnOtp->updated_at = $dateTime;
            $this->_dbUgnOtp->save();
            return $this->_dbUgnOtp->pk_otp_id;
        } catch (\Exception $ex) {
            $this->setError('save otp', $ex);
            return false;
        }
    }

    public function verifyOtp($data) {
        $result = $this->_dbUgnOtp::where(['otp_text' => $data['otp'], 'is_verified' => 'No', 'fk_admin_user_id' => 1])
                    ->get()->toArray();
    }
    
    public function getPreviousOtpRecord($data)
    {
        try {
            $whereArray = ['fk_admin_user_id' => $data['fk_admin_user_id']];
            if (!empty($data['is_verified'])) {
                $whereArray['is_verified'] = $data['is_verified'];
            }
            $result = $this->_dbUgnOtp::where($whereArray)->orderBy('pk_otp_id', 'DESC')
                ->take(1)->get()->toArray();
            if (is_array($result) && count($result)) {
                return $result['0'];
            }
        } catch (\Exception $ex) {
            $this->setError('get previous otp status', $ex);
            return false;
        }
    }
    
    public function verifyOtpRecord($recordId)
    {
        try {
            $result = $this->_dbUgnOtp::where(['pk_otp_id' => $recordId])->update(['is_verified' => 'Yes']);
            return true;
        } catch (Exception $ex) {
            $this->setError('verify OTP', $ex);
            return false;
        }
    }

}
