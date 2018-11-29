<?php

namespace Helpme\Models\Bank;

use Illuminate\Support\Facades\Auth;

class BankRepository
{
	protected $_dbBank;

    public function __construct()
	{
		$this->_dbBank = new DbHlpBankMaster();
	}

	/****/

	/**
     * Returns the list of banks
     *
     * @return \Illuminate\Http\Response
     */
    public function getBankList($bankName = null)
    {
        $bankList = null;

        if (!empty($bankName)) {
            $bankList = $this->_dbBank::where('bank_name', 'like', '%' . $bankName . '%')->orderBy('bank_name', 'asc')->pluck('bank_name', 'pk_bank_id');
        } else {
            $bankList = $this->_dbBank::orderBy('bank_name', 'asc')->pluck('bank_name', 'pk_bank_id');
        }

		$bankList = $bankList->toArray();


		return $bankList;
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
		$this->_dbBank->bank_name	= $data['bankName'];
		$this->_dbBank->created_at	= date('Y-m-d H:i:s');
		$this->_dbBank->updated_at	= date('Y-m-d H:i:s');
		$this->_dbBank->fk_user_id	= Auth::user()->pk_user_id;
		$this->_dbBank->save();
    }

    
    /**
     * Deletes a task
     *
     * @param  int  $id
     * @return null
     */
    public function delete($data)
    {
        $this->_dbBank::findOrFail($data['pk_bank_id'])->delete();
    }

	/****/
}

