<?php

namespace Helpme\Models\Task;

use Illuminate\Database\Eloquent\Model;

class DbHlpTaskMaster extends Model
{
	protected $table = 'hlp_task_master';
	protected $primaryKey = 'pk_task_id';

	public function __construct()
	{

	}
    
}
