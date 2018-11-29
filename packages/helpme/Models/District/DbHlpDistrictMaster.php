<?php

namespace Helpme\Models\District;

use Illuminate\Database\Eloquent\Model;

class DbHlpDistrictMaster extends Model
{
	public function __construct()
	{
		$this->table = 'hlp_district_master';
	}
    
}
