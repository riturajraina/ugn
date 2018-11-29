<?php
    namespace App\Helpers;
    
    class FormInputManager
    {
        public function __construct()
        {
            
        }
        
		public function getInput($fieldName)
		{
			$inputValue	=	Input::old($fieldName);
			$inputValue	=	empty($inputValue) ? (!empty(@$_REQUEST[$fieldName]) ? $_REQUEST[$fieldName] : '') : $inputValue;
		}
    }