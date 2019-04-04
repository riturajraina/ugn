<?php
    function renderTaxiRadio($serviceType=null)
    {
        $radioHtml      =   '';
        
        $checkedValue   =   !empty($serviceType) ? $serviceType : 'p2p';
        
        $radioArray     =   [
                                'City Taxi'     =>  'p2p',
                                'Outstation'    =>  'outstation',
                                'Rentals'       =>  'rental',
                            ];
        
        foreach ($radioArray as $radioLable => $radioValue) {
            $radioHtml .=   '<div class="form-check form-check-inline mr-4">
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="serviceType" 
                                        id="serviceType_' . $radioValue . '" 
                                        value="' . $radioValue . '" 
                                        ' . ($checkedValue == $radioValue ? 'checked' : '') . '
                                        >
                                        ' . $radioLable . '
                                    </label>
                                </div>
                            </div>';
        }
        
        return $radioHtml;
    }
?>
