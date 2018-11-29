<?php

namespace Helpme\Models\Category;

use Illuminate\Database\Eloquent\Model;

class DbHlpCategoryMaster extends Model
{
	public function __construct()
	{
		$this->table = 'hlp_category_master';
	}
    
}
