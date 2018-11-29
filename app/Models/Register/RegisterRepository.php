<?php namespace App\Models\Register;
use App\Models\BaseRepository;

class RegisterRepository extends BaseRepository
{
	protected $_dbRegister;

    public function __construct() {
        $this->_dbRegister = new DbPrnUserMaster();
    }

	public function createUser($data)
	{
		$this->_dbRegister->email			= $data['email'];
		$this->_dbRegister->password		= $data['password'];
		$this->_dbRegister->fname			= $data['fname'];
		$this->_dbRegister->lname			= $data['lname'];
		$this->_dbRegister->fk_mobile_id	= $data['fk_mobile_id'];
		$this->_dbRegister->fk_address_id	= $data['fk_address_id'];
		$this->_dbRegister->fk_state_id		= $data['fk_state_id'];
		$this->_dbRegister->fk_country_id	= $data['fk_country_id'];
		$this->_dbRegister->fk_city_id		= $data['fk_city_id'];

		$this->_dbRegister->save();
		return true;

	}

}

