<?php

namespace Helpme\Models\Bank;

use Illuminate\Database\Eloquent\Model;

class DbHlpBankMaster extends Model
{
	public function __construct()
	{
		$this->table = 'hlp_bank_master';
	}
    
}
