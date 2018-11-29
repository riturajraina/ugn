function checkEmptyString(str) {
    if ((!str || 0 === str.length) || (!str || /^\s*$/.test(str)) || str.length === 0 || !str.trim()) {
        return true;
    }
    
    return false;
}
function callAjax(url, elementId, htmlType = 'div', ajaxLoaderImageDiv = null, ajaxLoaderImage = null) {
    var xmlhttp		= new XMLHttpRequest();
    //alert("callajax url : " + url);
    var removeAjaxImage = false;
    if (!checkEmptyString(ajaxLoaderImageDiv) && !checkEmptyString(ajaxLoaderImage)) {
        document.getElementById(ajaxLoaderImageDiv).innerHTML = "<img src = '"+ ajaxLoaderImage +">";
        removeAjaxImage = true;
    }
    
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == XMLHttpRequest.DONE) {
           //alert("status : " + xmlhttp.status);
           response	= new Array();
           if (xmlhttp.status == 200) {
               //alert("status 200");
               response = JSON.parse(xmlhttp.responseText || "null");
           }
           else if (xmlhttp.status == 400) {
                //alert('There was an error 400');
                response['0'] = 'There was an error 400';

           }
           else {
                //alert('something else other than 200 was returned');
                response['0'] = 'Something else other than 200 was returned';
           }

		   //alert("response : " + JSON.stringify(response));

		   /**
		   code below is to avoid auto sort of JSON.parse...Rituraj 8/23/2017
		   var data = { 
				values: { /* your original object here  },
				/* keep a record of key order and include the keys as an array 
				   in your response. That way you can guarantee order. 
				keys: [11, 10, 7, 6, 12, 5, 4, 2, 1]
			};

			data.keys.forEach(function (key) {
			   var value = data.values[key];

			   /* do work here 
			});
		   **/

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
            if (removeAjaxImage) {
                document.getElementById(ajaxLoaderImageDiv).innerHTML = "";
            }
        }
    };

    //xmlhttp.open("GET", "ajax_info.txt", true);
    xmlhttp.open("GET", url, true);
    xmlhttp.send();
}

function showHideDiv(divId, divListObj = {}, show = true)
{
    document.getElementById(divId).style.display = (show == true ? 'block' : 'none');
    //var divObject = {};  // denotes an Object is being created
    for(div in divListObj) {
       //console.log(property + " = " + myObject[property]);
       //if (divId != divListObj[div])
       if (divId != div)
       {
           document.getElementById(divListObj[div]).style.display = (show == true ? 'none' : 'block');
       }
    }
}