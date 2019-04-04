<script language="javascript" type="text/javascript">
    
    var initialAdultTravellerSelectedId     = 'adults_1';
    
    var initialChildrenTravellerSelectId    = 'children_0';
    
    var initialInfantTravellerSelectId      = 'infants_0';
    
    function putValue(elementId, elementValue, currentId, type)
    {
        document.getElementById(elementId).value        = elementValue;
        
        document.getElementById(currentId).className    = "page-item active";
        
        switch (type) {
            case 'adults' :
                document.getElementById(initialAdultTravellerSelectedId).className = "page-item";
                initialAdultTravellerSelectedId = currentId;
                break;
                
            case 'children' :
                document.getElementById(initialChildrenTravellerSelectId).className = "page-item";
                initialChildrenTravellerSelectId = currentId;
                break;
                
            case 'infants' :
                document.getElementById(initialInfantTravellerSelectId).className = "page-item";
                initialInfantTravellerSelectId = currentId;
                break;
        }
        
        //alert("Element " + elementId + " Value : " + document.getElementById(elementId).value);
        
        var adultCount = parseInt(document.getElementById('adults').value);
        var childrenCount = parseInt(document.getElementById('children').value);
        var infantsCount = parseInt(document.getElementById('infants').value);
        
        var travellerExample = adultCount + childrenCount + infantsCount + " Traveller(s), ";
        
        var i = 0;
        
        var seatingCount = <?php echo $GLOBALS['seatingClassCount'];?>;
        
        var seatingClass = 'Economy';
        
        for (i=0;i < seatingCount; i++) {
            if (document.getElementById("seating_" + i).checked == true) {
                seatingClass = document.getElementById("seatingLabel_" + i).value;
            }
        }
        
        travellerExample = travellerExample + seatingClass;
        
        document.getElementById('exampleTravellerInput').value = travellerExample;
    }
    
    function changeSeatingClass(seatingClassValue)
    {
        var originalValue = document.getElementById('exampleTravellerInput').value;
        
        originalValue = originalValue.substring(0, originalValue.indexOf(','));
        
        document.getElementById('exampleTravellerInput').value = originalValue + ', ' + seatingClassValue;
    }

    window.onkeyup = function (event) {
       if (event.keyCode == 27) {
           document.getElementById('ajaxContainerSourceCity').style.display="none";
           document.getElementById('ajaxContainerDestinationCity').style.display="none";
       }
    }
 
    

   function fetchAirportList(searchText, elementId, ajaxContainerId) {
       //alert("Called");
       if (searchText.length < 3)
       {
           //alert("called, length : " + searchText.length);
           document.getElementById(ajaxContainerId).style.display = 'none';
           return false;
       }

       document.getElementById(ajaxContainerId).style.display = '';

       var xmlhttp;

       if(window.XMLHttpRequest) {
           xmlhttp = new XMLHttpRequest();
       }
       else
       {
           xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
       }

       xmlhttp.onreadystatechange=function()
       {
           if(xmlhttp.readyState==4 && xmlhttp.status==200)
           {
               document.getElementById(ajaxContainerId).innerHTML=xmlhttp.responseText;
           }
       }

       xmlhttp.open("GET","<?php echo env('APP_URL');?>/airportcodelistajax/" + searchText + "/" + elementId + "/" + ajaxContainerId, true);

       xmlhttp.send();

   }


    /********From here script for Javascript Calendar************/
  /* var myCalendar;
   function doOnLoad() {
           myCalendarStartDate = new dhtmlXCalendarObject({input: "departureDate",
               button: "calendar_icon_dob_start"});
           myCalendarEndDate   = new dhtmlXCalendarObject({input: "arrivalDate",
               button: "calendar_icon_dob_end"});
   }
   doOnLoad();*/


   
</script>