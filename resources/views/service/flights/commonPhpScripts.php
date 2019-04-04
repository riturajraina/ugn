<?php
    function renderTravellersSelection($data)
    {
        $total              = $data['total'];
        
        $type               = $data['type'];
        
        $hiddenFieldName    = $data['hiddenFieldName'];
        
        $startIndex         = !empty($data['startIndex']) || @$data['startIndex'] === 0 
                              ? $data['startIndex'] : 1;
        
        $selectedValue      = !empty($data['selectedValue']) 
                              ? $data['selectedValue'] : null;
        
        $activeClassIndex   = !empty($selectedValue) 
                              ? $selectedValue : $startIndex; 
        
        for ($i=$startIndex;$i<=$total;$i++) {
            echo '<li class="page-item ' . ($i == $activeClassIndex ? 'active' : '') 
                    . '" id="' . $type . '_' . $i . '">
                    <a class="page-link" href="javascript:void(0);"
                    onclick="javascript:putValue(\'' . $hiddenFieldName . '\', '
                    . '\'' . $i . '\', 
                    \'' . $type . '_' . $i . '\', \'' . $type . '\');">
                        ' . $i . '
                    </a>
                </li>';
        }
    }
    
    $seatingClassCount = 0;
    
    function renderSeatingClassHTML($selectedValue = 'economy')
    {
        $classArray     =   [
            'economy'           =>  'Economy',
            'premiumEconomy'    =>  'Premium Economy',
            'business'          =>  'Business',
            'first'             =>  'First Class',
            
        ];
        
        
        $GLOBALS['seatingClassCount']  = count($classArray);
        
        $seatingClassCounter = 0;
        
        foreach ($classArray as $key=>$value) {
            echo '<div class="radio">'
                    . '<label>
                        <input type="radio" name="seatingClass" 
                        id = "seating_' . $seatingClassCounter . '"
                        value="' . $key . '" '
                        . 'onclick="javascript:changeSeatingClass(\'' . $value . '\');"
                        ' . ($key == $selectedValue ? 'checked' : '') . '
                        >
                            ' . $value . '
                      </label>
                      <input type="hidden" id = "seatingLabel_' . $seatingClassCounter++ . '" value="' . $value . '">
                 </div>';
        }
    }
?>
