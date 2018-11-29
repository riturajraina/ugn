<?php

namespace Helpme\Models\Country;

use Illuminate\Support\Facades\Auth;

class CountryRepository
{
	protected $_dbCountry;

    public function __construct()
	{
		$this->_dbCountry = new DbHlpCountryMaster();
	}

	/****/

	/**
     * Returns the list of countries
     *
     * @return \Illuminate\Http\Response
     */
    public function getCountryList()
    {
		$countries = $this->_dbCountry::orderBy('country_name', 'asc')->get();

		return $countries;
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
		$this->_dbCountry->country_name = $data['countryName'];
		$this->_dbCountry->created_at	= date('Y-m-d H:i:s');
		$this->_dbCountry->updated_at	= date('Y-m-d H:i:s');
		$this->_dbCountry->fk_user_id	= Auth::user()->pk_user_id;
		$this->_dbCountry->save();
    }

    
    /**
     * Deletes a task
     *
     * @param  int  $id
     * @return null
     */
    public function delete($data)
    {
        $this->_dbCountry::findOrFail($data['pk_country_id'])->delete();
    }

	/****/
}

