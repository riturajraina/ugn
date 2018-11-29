function checkEmptyStringGeo(str) {
    if ((!str || 0 === str.length) || (!str || /^\s*$/.test(str)) || str.length === 0 || !str.trim()) {
        return true;
    }
    
    return false;
}
function callAjaxGeo(url, elementId = null, htmlType = 'div', ajaxLoaderImageDiv = null, ajaxLoaderImage = null) {
    //alert("starting call ajax url : " + url);
	var xmlhttp		= new XMLHttpRequest();
	//alert("after xmlhttp call ajax url : " + url);
    
    var removeAjaxImage = false;
    if (!checkEmptyStringGeo(ajaxLoaderImageDiv) && !checkEmptyStringGeo(ajaxLoaderImage)) {
        document.getElementById(ajaxLoaderImageDiv).innerHTML = "<img src = '"+ ajaxLoaderImage +">";
        removeAjaxImage = true;
    }
    
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == XMLHttpRequest.DONE) {
           //alert("status : " + xmlhttp.status);
           response	= new Array();
           if (xmlhttp.status == 200) {
               //alert("status 200");
               //response = JSON.parse(xmlhttp.responseText || "null");

			   response = xmlhttp.responseText;
			   
			   if(response) {
					try {
						response = JSON.parse(response);
					} catch(e) {
						//alert(e); // error in the above string
						response = xmlhttp.responseText;
						//alert("coreajax response : " + response);
					}
				}

           }
           else if (xmlhttp.status == 400) {
                //alert('There was an error 400');
                response['0'] = 'There was an error 400';

           }
           else {
                //alert('something else other than 200 was returned');
                response['0'] = 'Something else other than 200 was returned';
           }
		   if (!checkEmptyStringGeo(elementId)) {
			   switch (htmlType)
			   {
					case 'option' :
							var select = document.getElementById(elementId);
							select.options.length = 0;
							for (var key in response) {
									var opt = document.createElement('option');
									opt.value = key;
									opt.innerHTML = response[key];
									select.appendChild(opt);
							}
							break;

					default:
							//document.getElementById(elementId).innerHTML = xmlhttp.responseText;
							var divHtml = '';
							for (var key in response) {
									divHtml += response[key];
							}
							document.getElementById(elementId).innerHTML = divHtml;
				}
		   } else {
			   //alert("coreajax return response " + response);
			   return response;
		   }
           
            if (removeAjaxImage) {
                document.getElementById(ajaxLoaderImageDiv).innerHTML = "";
            }
        }
    };

    xmlhttp.open("GET", url, true);
    xmlhttp.send();
}

function showHideDivGeo(divId, divListObj = {}, show = true)
{
    document.getElementById(divId).style.display = (show == true ? 'block' : 'none');
    //var divObject = {};  // denotes an Object is being created
    for(div in divListObj) {
       if (divId != div)
       {
           document.getElementById(divListObj[div]).style.display = (show == true ? 'none' : 'block');
       }
    }
}