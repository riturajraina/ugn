<?php
namespace App\Models\User;

use Illuminate\Database\Eloquent\Model;

class DbUgnAdminUser extends Model
{
	protected $table		= 'ugn_admin_user';

	protected $primaryKey	= 'pk_admin_user_id';

	protected $fillable		= [
            'fname', 'lname', 'password', 'mobile_number', 'email', 'created_at', 'updated_at', 
            'fk_admin_role_id', 'remember_token', 'status'
	];

	public function __construct()
	{

	}
}


