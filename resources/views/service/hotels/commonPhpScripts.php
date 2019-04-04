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
    
?>
