<?php

namespace Helpme\Models\State;

use Illuminate\Support\Facades\Auth;

class StateRepository
{
	protected $_dbState;

    public function __construct()
	{
		$this->_dbState = new DbHlpStateMaster();
	}

	/****/

	/**
     * Returns the list of cities
     *
     * @return \Illuminate\Http\Response
     */
    public function getStateList()
    {
		//$stateList = $this->_dbState::select('pk_state_id', 'state_name')->orderBy('state_name', 'asc')->get();

		$stateList = $this->_dbState::orderBy('state_name', 'asc')->pluck('state_name', 'pk_state_id');

		$stateList = $stateList->toArray();

		return $stateList;
    }

    /**
     * Saves a task
     *
	 * @param  $data
     * @return null
     */
    public function save($data)
    {
		$this->middleware('auth');
		$this->_dbState->state_name	= $data['stateName'];
		$this->_dbState->created_at	= date('Y-m-d H:i:s');
		$this->_dbState->updated_at	= date('Y-m-d H:i:s');
		$this->_dbState->fk_user_id	= Auth::user()->pk_user_id;
		$this->_dbState->save();
    }

    
    /**
     * Deletes a task
     *
     * @param  int  $id
     * @return null
     */
    public function delete($data)
    {
        $this->_dbState::findOrFail($data['pk_state_id'])->delete();
    }

	/****/
}

