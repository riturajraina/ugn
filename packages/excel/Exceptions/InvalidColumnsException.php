<?php

/**
 * InvalidColumnsException: Exception for invalid value for engine type
 * @author Rituraj Raina
 */
namespace Excel\Exceptions;


class InvalidColumnsException extends ApiException{
    
    public function __construct($message = '')
    {
    	if($message == ''){
    		$message = 'Invalid columns';
    	}

        parent::__construct('client', 400, 'invalid_columns', $message);
    }
}
