<?php
namespace App\Models\Otp;

use Illuminate\Database\Eloquent\Model;

class DbUgnForgotpasswordOtpMaster extends Model
{
	protected $table		= 'ugn_forgotpassword_otp_master';

	protected $primaryKey	= 'pk_otp_id';

	protected $fillable		= [
        'fk_admin_user_id', 'otp_text', 'is_verified', 'created_at', 'updated_at'
    ];

	public function __construct()
	{

	}
}


