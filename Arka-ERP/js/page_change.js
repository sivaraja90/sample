// JavaScript Document
 // get the current URL
			var url = window.location.toString();
 			url.match(/\?(.+)$/);
 			var params = RegExp.$1;
 			var params = params.split("?");
 			var queryStringList = {};
 			var tmp = params[0].split("=");
 			queryStringList[tmp[0]] = unescape(tmp[1]);
			// print all querystring in key value pairs
     		//var first ="";
 			for(var i in queryStringList)
 			var first=queryStringList[i];
			//alert(first);
 			//document.write(first);		 	
		
function makeObject(){
	var x;
	var browser = navigator.appName;
	if(browser == "Microsoft Internet Explorer"){
		x = new ActiveXObject("Microsoft.XMLHTTP");
	}else{
		x = new XMLHttpRequest();
	}
	return x;
}
//common for all ajax
var request = makeObject();

function chang_page(val){
	//Customer Management 1-5
  if(val == '1'){
	request.open('get', 'customer_reg.php');
  }else if(val == '2'){
	request.open('get', 'list_customer.php');
  }else if(val == '3'){
	request.open('get', 'list_customer_body.php');
  }else if(val == '4'){
	request.open('get', 'customer_details.php');
  }else if(val == '41'){
	request.open('get', 'customer_entitlement.php');
  }else if(val == '5'){
	request.open('get', 'device_details.php');
  }else if(val == '6'){
	request.open('get', 'device_reg.php');
  }else if(val == '7'){
	request.open('get', 'list_device.php');
  }else if(val == '8'){
	request.open('get', 'device_payment_details.php');
  }else if(val == '9'){
	request.open('get', 'device_payment.php');
  }else if(val == '10'){
	request.open('get', 'products.php');
  }//Problem Management 11-15
  else if(val == '11'){
	request.open('get', 'problem_details.php');
  }else if(val == '12'){
	request.open('get', 'problem_list.php');
  }else if(val == '13'){
	request.open('get', 'problem_solution.php');
  }else if(val == '14'){
	request.open('get', 'problem_worklog.php');
  }else if(val == '15'){
	request.open('get', 'problem_payment.php');
  }else if(val == '16'){
	request.open('get', 'problem_reg.php');
  }//Product Management 16-20
  else if(val == '100'){
	request.open('get', 'storage.php?title=record storage');
  }else if(val == '17'){
	request.open('get', 'lifting.php?title=goods lift');
  }else if(val == '18'){
	request.open('get', 'lifting.php?title=lift table');
  }else if(val == '19'){
	request.open('get', 'lifting.php?title=jib crane');
  }else if(val == '20'){
	request.open('get', 'lifting.php?title=dock leveler');
  }//User Management
  else if(val == '21'){
	request.open('get', 'list_users.php');
  }else if(val == '22'){
	request.open('get', 'lifting.php?title=stackers');
  }  else if(val == '23'){
	request.open('get', 'shopfloor.php?title=tool storage cabinet');
  }else if(val == '24'){
	request.open('get', 'shopfloor.php?title=work bench');
  }else if(val == '25'){
	request.open('get', 'shopfloor.php?title=mobile workstation');
  }else if(val == '26'){
	request.open('get', 'shopfloor.php?title=personal locker unit');
  }else if(val == '51'){
	request.open('get', 'customer_device_status_body.php');
  }else if(val == '52'){
	request.open('get', 'customer_device_details.php');
  }
	request.onreadystatechange = display_location;
	request.send('null') 
	return false;
}

function display_location(){
	if(request.readyState < 4)
	{
		var answer = request.responseText
		document.getElementById('std').mask("Processing your request. Please wait...");	
	//	$('#std').mask("Processing your request. Please wait...");	
	//document.getElementById('std').innerHTML = "Processing your request. Please wait...<br>";
		
	}
	if(request.readyState == 4)
	{
		var answer = request.responseText;
		document.getElementById('std').innerHTML = answer
		document.getElementById('std').unmask();
	//	$("#std").unmask();	
		request.readyState ==0;
	}
	if(request.readyState == 0)
	{
		var answer = request.responseText;
		document.getElementById('std').innerHTML = answer
		document.getElementById('std').unmask();
		//$("#std").unmask();	
		request.readyState ==0;
	}
}