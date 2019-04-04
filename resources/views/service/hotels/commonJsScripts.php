<script language="javascript" type="text/javascript">
    
    var initialAdultTravellerSelectedId     = 'adults_1';
    
    var initialChildrenTravellerSelectId    = 'children_0';
    
    var initialInfantTravellerSelectId      = 'infants_0';
    
    var initialRoomsSelectId                = 'rooms_1';
    
    
    
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
                
            case 'rooms' :
                document.getElementById(initialRoomsSelectId).className = "page-item";
                initialRoomsSelectId = currentId;
                break;
        }
        
        //alert("Element " + elementId + " Value : " + document.getElementById(elementId).value);
        
        var adultCount = parseInt(document.getElementById('adults').value);
        var childrenCount = parseInt(document.getElementById('children').value);
        var infantsCount = parseInt(document.getElementById('infants').value);
        
        var roomsCount  =   parseInt(document.getElementById('rooms').value);
        
        var travellerExample = adultCount + childrenCount + infantsCount + " Traveller(s), " + roomsCount + " room(s)";
        
        document.getElementById('exampleTravellerInput').value = travellerExample;
    }

   function fetchCityList(searchText, elementId, ajaxContainerId) {
       //alert("Called");
       if (searchText.length < 3)
       {
           //alert("called, length : " + searchText.length);
           document.getElementById(ajaxContainerId).style.display = 'none';
           return false;
       }

       document.getElementById(ajaxContainerId).style.display = '';

       var xmlhttp;

       if (window.XMLHttpRequest) {
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

       xmlhttp.open("GET","<?php echo env('APP_URL');?>/citylist/" + searchText + "/" + elementId + "/" + ajaxContainerId, true);

       xmlhttp.send();

   }


    /********From here script for Javascript Calendar************/
   var myCalendar;

   function doOnLoad() {
           myCalendarStartDate = new dhtmlXCalendarObject({input: "checkInDate",
               button: "calendar_icon_dob_start"});
           myCalendarEndDate   = new dhtmlXCalendarObject({input: "checkOutDate",
               button: "calendar_icon_dob_end"});
   }

   doOnLoad();
   
</script>