<?php

namespace Helpme\Models\District;

use Illuminate\Support\Facades\Auth;

class DistrictRepository
{
	protected $_dbDistrict;

    public function __construct()
	{
		$this->_dbDistrict = new DbHlpDistrictMaster();
	}

	/****/

	/**
     * Returns the list of districts
     *
     * @return \Illuminate\Http\Response
     */
    public function getDistrictList($stateId = null)
    {
        $districtList = null;

        if (!empty($stateId)) {
            $districtList = $this->_dbDistrict::where(array('fk_state_id' => $stateId))->orderBy('district_name', 'asc')->pluck('district_name', 'pk_district_id');
        } else {
            $districtList = $this->_dbDistrict::orderBy('district_name', 'asc')->pluck('district_name', 'pk_district_id');
        }

		$districtList = $districtList->toArray();


		return $districtList;
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
		$this->_dbDistrict->district_name	= $data['district_name'];
		$this->_dbDistrict->created_at	= date('Y-m-d H:i:s');
		$this->_dbDistrict->updated_at	= date('Y-m-d H:i:s');
		$this->_dbDistrict->fk_user_id	= Auth::user()->pk_user_id;
		$this->_dbDistrict->save();
    }

    
    /**
     * Deletes a task
     *
     * @param  int  $id
     * @return null
     */
    public function delete($data)
    {
        $this->_dbDistrict::findOrFail($data['pk_district_id'])->delete();
    }

	/****/
}

