<?php

namespace Helpme\Models\State;

use Illuminate\Database\Eloquent\Model;

class DbHlpStateMaster extends Model
{
	public function __construct()
	{
		$this->table = 'hlp_state_master';
	}
    
}
