<script language="javascript" type="text/javascript">
    
    function saveAddress(address, lat, long, token) {
        var xmlhttp;
       
        //alert("saving address : " + address + ", latitude : " + lat + ", longitude : " + long);
       
        var url = "<?php echo env('APP_URL');?>/savecabaddress/" + address + "/" + lat + "/" + long;
        
        //var url = "<?php echo env('APP_URL');?>/savecabaddress";
        
        var postVars = "_token=" + token +"&address=" + address + "&lat=" + lat + "&long=" + long;
       
        //alert("\nUrl : " + url);
       
        var formData = new FormData(); 
        
        formData.append('address', address);
        
        formData.append('lat', lat);
        
        formData.append('long', long);
        
        formData.append('_token', token);
        
        //alert("postVars : " + postVars);

        if (window.XMLHttpRequest) {
           xmlhttp = new XMLHttpRequest();
        }
        else
        {
           xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        
        /*xmlhttp.open("POST", url, true);
        
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");*/
    
        xmlhttp.open("GET", url, true);

        xmlhttp.onreadystatechange=function()
        {
           if(xmlhttp.readyState==4 && xmlhttp.status==200)
           {
                alert(xmlHttp.responseText);
           }
        }

        xmlhttp.send();
        //xmlhttp.send(postVars);
        //xmlhttp.send(formData);
        
        //alert("Completed");
   }

   function fetchAddressList(searchText, elementId, ajaxContainerId, latitudeFieldId, longitudeFieldId) {
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

       xmlhttp.open("GET","<?php echo env('APP_URL');?>/addresslist/" + searchText + "/" + elementId + "/" + ajaxContainerId + "/" + latitudeFieldId + "/" + longitudeFieldId, true);

       xmlhttp.send();

   }


    
</script>