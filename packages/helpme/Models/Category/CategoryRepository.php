<?php

namespace Helpme\Models\Category;

use Illuminate\Support\Facades\Auth;

class CategoryRepository
{
	protected $_dbCategory;

    public function __construct()
	{
		$this->_dbCategory = new DbHlpCategoryMaster();
	}

	/****/

	/**
     * Returns the list of categories
     *
     * @return \Illuminate\Http\Response
     */
    public function getCategoryList()
    {
		$countries = $this->_dbCategory::orderBy('category_text', 'asc')->get();

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
		$this->_dbCategory->city_name	= $data['category_text'];
		$this->_dbCategory->created_at	= date('Y-m-d H:i:s');
		$this->_dbCategory->updated_at	= date('Y-m-d H:i:s');
		$this->_dbCategory->fk_user_id	= Auth::user()->pk_user_id;
		$this->_dbCategory->save();
    }

    
    /**
     * Deletes a task
     *
     * @param  int  $id
     * @return null
     */
    public function delete($data)
    {
        $this->_dbCategory::findOrFail($data['pk_city_id'])->delete();
    }

	/****/
}

