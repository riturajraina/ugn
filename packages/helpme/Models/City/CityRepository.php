<?php

namespace Helpme\Models\City;

use Illuminate\Support\Facades\Auth;

class CityRepository
{
	protected $_dbCity;

    public function __construct()
	{
		$this->_dbCity = new DbHlpCityMaster();
	}

	/****/

	/**
     * Returns the list of cities
     *
     * @return \Illuminate\Http\Response
     */
    public function getCityList($stateId = null)
    {
        $cityList = null;

        if (!empty($stateId)) {
            $cityList = $this->_dbCity::where(array('fk_state_id' => $stateId))->orderBy('city_name', 'asc')->pluck('city_name', 'pk_city_id');
        } else {
            $cityList = $this->_dbCity::orderBy('city_name', 'asc')->pluck('city_name', 'pk_city_id');
        }

		$cityList = $cityList->toArray();

		//echo '<br>cityList : <pre>' . print_r($cityList, true) . '</pre>';

		return $cityList;
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
		$this->_dbCity->city_name	= $data['cityName'];
		$this->_dbCity->created_at	= date('Y-m-d H:i:s');
		$this->_dbCity->updated_at	= date('Y-m-d H:i:s');
		$this->_dbCity->fk_user_id	= Auth::user()->pk_user_id;
		$this->_dbCity->save();
    }

    
    /**
     * Deletes a task
     *
     * @param  int  $id
     * @return null
     */
    public function delete($data)
    {
        $this->_dbCity::findOrFail($data['pk_city_id'])->delete();
    }

	/****/
}

