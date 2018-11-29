<?php
    namespace App\Helpers;
    
    class SelectOptionsManager
    {
        public function __construct()
        {
            
        }
        
        public static function showSelectOptions($optionsArray, $selectedValue = null, $showEmptyOption = true, $cssClass = null)
        {
			$optionsHtml = $showEmptyOption ? '<option ' . (!empty($cssClass) ? 'class = ' . $cssClass : '') . ' value=""> Select </option>' : '';

            foreach ($optionsArray as $key => $value) {
                $optionsHtml .= '<option ' . (!empty($cssClass) ? 'class = ' . $cssClass : '') 
                                . ' value = "' . $key . '"' 
                                . ($selectedValue == $key ? ' selected ' : '')
                                . '>' . $value 
                                . '</option>';
            }
            return $optionsHtml;
        }
    }