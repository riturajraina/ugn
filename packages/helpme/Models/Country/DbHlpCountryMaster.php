<?php

namespace Helpme\Models\Country;

use Illuminate\Database\Eloquent\Model;

class DbHlpCountryMaster extends Model
{
	public function __construct()
	{
		$this->table = 'hlp_country_master';
	}
    
}
