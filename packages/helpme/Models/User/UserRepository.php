<?php

namespace Helpme\Models\User;

//use Illuminate\Support\Facades\Auth;

class UserRepository
{
	protected $_dbUser;

	protected $error;

    public function __construct()
	{
		$this->_dbUser	= new DbHlpUser();
		$this->error	=	null;
	}

	public function getError()
	{
		return $this->error;
	}

	public function convertCommaSeparatedToArray($string)
	{
		$array			=	array();

		if (stristr($string, ',')) {
			$array		=	explode(',', $string);
		} else {
			$array		=	array($string);
		}

		$returnArray	=	array();

		foreach ($array as $value) {
			if (stristr($value, '=')) {
				$valueArray						=	explode('=', $value);
				$returnArray[$valueArray['0']]	=	$valueArray['1'];
			}
		}

		return $returnArray;
	}

	/****/

	/**
     * Returns the list of users
     *
     * @return \Illuminate\Http\Response
     */
    public function getUserList($where = null)
    {
        $userList			=	null;

		if (!empty($where)) {
			$where			=	$this->convertCommaSeparatedToArray($where);
		}

		if (count($where)) {
			$columns		=	array_keys($where);

			$tableColumns	=	$this->_dbUser->getTableColumns();

			$diffArray		=	array_diff($columns, $tableColumns);

			if (is_array($diffArray) && count($diffArray)) {
				//throw new \Helpme\Exceptions\InvalidColumnsException();
				throw new \Helpme\Exceptions\ApiException('client', 400, 'invalid_columns', 'Invalid columns');
			}
			$userList = $this->_dbUser::where($where)->orderBy('fname', 'asc')->get(array('fname', 'lname', 'email', 'created_at', 'updated_at', 'rights', 'pk_user_id'));
		} else {
            $userList = $this->_dbUser::orderBy('fname', 'asc')->get(array('fname', 'lname', 'email', 'created_at', 'updated_at', 'rights', 'pk_user_id'));
        }

		//echo '<br>,before conversion to array, userlist : <pre>' . print_r($userList, true) . '</pre>';

		$userList = $userList->toArray();

		//echo '<br>userList : <pre>' . print_r($userList, true) . '</pre>';

		return $userList;
    }


    
    /**
     * Deletes a user
     *
     * @param  int  $id
     * @return null
     */
    public function delete($data)
    {
        $this->_dbUser::findOrFail($data['pk_user_id'])->delete();
    }

	/****/
	
}

