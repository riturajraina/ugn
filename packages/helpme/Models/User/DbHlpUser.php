<?php

namespace Helpme\Models\User;

use Illuminate\Database\Eloquent\Model;

class DbHlpUser extends Model
{
	public function __construct()
	{
		$this->table = 'users';
	}

	public function getColumns()
	{
		DB::select('SHOW COLUMNS ' . $this->_dbUser->getTable());
	}

	public function getTableColumns() 
	{
        return $this->getConnection()->getSchemaBuilder()->getColumnListing($this->getTable());
    }
    
}
