<?php
namespace App\Models\Register;

use Illuminate\Database\Eloquent\Model;

class DbPrnUserMaster extends Model
{
	protected $table		= 'prn_user_master';
	
	protected $primaryKey	= 'pk_user_id';

	protected $fillable		= ['title', 'fk_user_id_assigned_to', 'status', 'Description', 'dueDate'];

	public function __construct()
	{

	}
}


