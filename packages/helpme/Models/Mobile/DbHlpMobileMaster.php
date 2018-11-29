<?php

namespace Helpme\Models\Mobile;

use Illuminate\Database\Eloquent\Model;

class DbHlpMobileMaster extends Model
{
	//public $incrementing = true;

	protected $primaryKey = 'pk_mobile_id';	
	protected $table = 'hlp_mobile_master';

	public function __construct()
	{
		
	}
    
}
