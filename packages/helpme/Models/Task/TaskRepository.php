<?php

namespace Helpme\Models\Task;

class TaskRepository
{
	protected $_dbTask;

    public function __construct()
	{
		$this->_dbTask = new DbHlpTaskMaster();
	}

	/****/

	/**
     * Returns the list of tasks created
     *
     * @return \Illuminate\Http\Response
     */
    public function getTaskList()
    {
		$tasks = $this->_dbTask::orderBy('created_at', 'desc')->get(array('name', 'pk_task_id'));

		//$tasks = $this->_dbTask::orderBy('created_at', 'asc')->pluck('name', 'pk_task_id');

		return $tasks;
    }

    /**
     * Saves a task
     *
	 * @param  $data
     * @return null
     */
    public function save($data)
    {
		$this->_dbTask->name = $data['taskName'];
		$this->_dbTask->fk_user_id = $data['fk_user_id'];
		$this->_dbTask->save();
    }

    
    /**
     * Deletes a task
     *
     * @param  int  $id
     * @return null
     */
    public function delete($data)
    {
        $this->_dbTask::findOrFail($data['id'])->delete();
    }

	/****/
}

