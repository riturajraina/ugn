<?php

namespace Helpme\Models\Address;

use Illuminate\Database\Eloquent\Model;

class DbHlpAddressMaster extends Model
{
	protected $primaryKey = 'pk_address_id';
	
	protected $table = 'hlp_address_master';

	public function __construct()
	{
		
	}
    
}
