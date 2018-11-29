<?php

namespace App\Helpers;

class CheckboxManager {

    public function __construct() {
        
    }

    public static function showCheckBox($name, $optionsArray, $selectedValues = array(), $cssClass = null, $lineBreak=true, 
    $required = false, $javaScript=null) {

        $optionsHtml = null;
        
        $idText = $name . '_';

        $name = !stristr($name, '[]') ? $name . '[]' : $name;

        $name = trim($name);
        
        $selectedValues = empty($selectedValues) ? array() : $selectedValues;
        
        $i=1;

        foreach ($optionsArray as $value => $text) {
            
            $optionsHtml    .= '<input type="checkbox" name = "' . $name . '" '
                            . ' id = "' . $idText . $i . '"' 
                            . (!empty($cssClass) ? 'class = "' . $cssClass . '"' : '') 
                            . (in_array($value, $selectedValues) ? ' checked' : '') 
                            . ' value = "' . $value . '" ' . ($required ? 'required' : '')
                            . (!empty($javaScript) ? $javaScript : '') . '>&nbsp;' . $text . '&nbsp;';
            $optionsHtml    .= $lineBreak ? '<br>' : '';
            
            $i++;
        }

        return $optionsHtml;
    }

}
