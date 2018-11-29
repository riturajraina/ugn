<?php
namespace App\Models\Fuser;

use Illuminate\Database\Eloquent\Model;

class DbUgnUserMaster extends Model
{
	protected $table		= 'ugn_user_master';

	protected $primaryKey	= 'pk_user_id';

	protected $fillable		= [
            'fname', 'lname', 'password', 'mobile_number', 'email', 'created_at', 'updated_at', 
			'remember_token', 'status'
	];

	public function __construct()
	{

	}
}


