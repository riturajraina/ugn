<?php
    namespace App\Helpers;
    
    class RadioOptionsManager
    {
        public function __construct()
        {
            
        }
        
        public static function getRadioSelectOptions($radioName, $optionsArray, $selectedValue = null, $showEmptyOption = true, $cssClass = null, $jsFunction=null, $anchorValue = false)
        {
			$optionsHtml	=	null;

			$i				=	0;

			$selectedValue	=	!empty($selectedValue) ? strtolower($selectedValue) : null;

			foreach ($optionsArray as $key => $value) {
				$key	=	strtolower($key);
				if (empty($selectedValue) && !$showEmptyOption && $i ==0) {
					$optionsHtml	.=	(empty($optionsHtml) ? null : '&nbsp;') . '<input type="radio"' . ($anchorValue == true ? 'onclick="javascript:window.location.href=\'' . env('APP_URL') . '/' . $value . '\'"' : null ) . ' name="' . $radioName . '" value="' . $key . '" class="' . $cssClass . '"' . (!empty($jsFunction) ? 'javascript:"' . $jsFunction . '"' : null) . ' checked>&nbsp;' . $value;
				} else {
					$optionsHtml	.=	(empty($optionsHtml) ? null : '&nbsp;') . '<input type="radio" ' . ($anchorValue == true ? 'onclick="javascript:window.location.href=\'' . env('APP_URL') . '/' . $value . '\'"' : null ) . ' name="' . $radioName . '" value="' . $key . '" class="' . $cssClass . '"' . (!empty($jsFunction) ? 'javascript:"' . $jsFunction . '"' : null) . ' ' . ($key == $selectedValue ? 'checked' : null) . '>&nbsp;' . $value;
				}
				$i++;
			}
			
            return $optionsHtml;
        }
    }