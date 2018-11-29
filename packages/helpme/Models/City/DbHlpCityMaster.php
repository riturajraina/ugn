<?php

namespace Helpme\Models\City;

use Illuminate\Database\Eloquent\Model;

class DbHlpCityMaster extends Model
{
	public function __construct()
	{
		$this->table = 'hlp_city_master';
	}
    
}
