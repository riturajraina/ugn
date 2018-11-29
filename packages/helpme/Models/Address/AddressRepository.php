<?php

namespace Helpme\Models\Address;

use Illuminate\Support\Facades\Auth;

class AddressRepository {

    protected $_dbAddress;

    public function __construct() {
        $this->_dbAddress = new DbHlpAddressMaster();
    }

    /*     * * */

    /**
     * Returns the address id of a previous entered address
     *
     * @return \Illuminate\Http\Response
     */
    public function getAddressId($data) {
        //$addressId = $this->_dbAddress::select('pk_address_id')->where(['address_line_1' => $data['address_line_1'], 'address_line_2' => $data['address_line_2']])->get();

        $addressId = $this->_dbAddress::where(['address_line_1' => $data['address_line_1'], 'address_line_2' => $data['address_line_2']])->pluck('pk_address_id');

        $addressId = $addressId->toArray();

        if (count($addressId)) {
            return $addressId['0'];
        }

        $addressId = $this->save($data);

        return $addressId;
    }

    /**
     * Saves a task
     *
     * @param  $data
     * @return null
     */
    public function save($data) {
        //$this->middleware('auth');
        $this->_dbAddress->address_line_1 = $data['address_line_1'];
        $this->_dbAddress->address_line_2 = $data['address_line_2'];
        $this->_dbAddress->created_at = date('Y-m-d H:i:s');
        $this->_dbAddress->updated_at = date('Y-m-d H:i:s');
        $this->_dbAddress->save();
        return $this->_dbAddress->pk_address_id;
    }

    /**
     * Deletes a task
     *
     * @param  int  $id
     * @return null
     */
    public function delete($data) {
        $this->_dbAddress::findOrFail($data['pk_address_id'])->delete();
    }
    
    public function getAddress($addressId) {
        $result = $this->_dbAddress::where([
            'pk_address_id' => $addressId
        ])->get(['address_line_1', 'address_line_2'])->toArray();
        
        if (count($result)) {
            return $result['0'];
        }
        
        return false;
    }

    /*     * * */
}
