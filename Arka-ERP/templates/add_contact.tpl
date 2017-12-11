{$IncludeCSS}
{$IncludeJS}
{literal}
<script type="text/javascript" src='./dhtmlxMessage/codebase/dhtmlxmessage.js'></script>
	<script type='text/javascript' src='./auto-complete/jquery-1.3.2.js'></script>
	<script type='text/javascript' src='./auto-complete/jquery.metadata.js'></script>
	<script type='text/javascript' src='./auto-complete/jquery.auto-complete.js?<?= mktime() ?>'></script>
	<script type='text/javascript' src='./auto-complete/js.js?<?= mktime() ?>'></script>
	<link rel="stylesheet" href= "./codebase/skins/dhtmlxmessage_dhx_skyblue.css" type="text/css" media="all"/> 
	<link rel='stylesheet' type='text/css' href='auto-complete/jquery.auto-complete.css?<?= mktime() ?>' />
	<link rel="stylesheet" href="'https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
	<style>
	th {
    font-style: normal;
	font-weight:100;
	font-size:14px;
	margin-right:100px;
}
table { 
    border-spacing: 2px;
    border-collapse: separate;
}
td{ padding:10px;
width:50px;

}

</style>
<script>
function retrieve_select_bxs()
{
var data_array = ["hdn_salutation","hdn_order_status","hdn_customer_status","hdn_customer_type","hdn_snooze_hour","hdn_snooze_time","hdn_snooze_meridian"];
var data_fields=["salutation","order_status","customer_status","customer_type","snooze_hour","snooze_time","meridian"];
var array_len=data_array.length;
	for(var i=0;i<=array_len;i++)
	{
	   var sel_val=document.getElementById(data_array[i]).value;
	   var field_len = document.getElementById(data_fields[i]).length;
	   var sel_bx_val=document.getElementById(data_fields[i]).length;
	   for(var j=0;j<sel_bx_val;j++)
	   {
	       cur_val=document.getElementById(data_fields[i]);
		   if(cur_val.options[j].value==sel_val)
		   {
		     cur_val.options[j].selected = true; 
		   }
	   }
	}
}

function chk_exist_mob(mob_no)
{

if (mob_no.value=="")
  {
  return false;
  }
  
		if(mob_no.value.length==10)
								{
								
								}
		else
								{
								dhtmlx.alert({
								title: "Error !",
								type:"alert-error",
								text: "Mobile Number Should be 10 Digits",	
											});		
								return false;									
								}	  
  
if (window.XMLHttpRequest)
  {
  xmlhttp=new XMLHttpRequest();
  }
else
  {
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
	
	var x;
       if(xmlhttp.responseText)
	   {
  
	x=xmlhttp.responseText;
	
						switch("error_"+mob_no.id)
						{
						case "error_mobile":
						document.getElementById("error_mobile").innerHTML = x;
						break;
						case "error_mobile2":
						document.getElementById("error_mobile2").innerHTML = x;
						break;
						case "error_mobile3":
						document.getElementById("error_mobile3").innerHTML = x;
						break;
						case "error_mobile4":
						document.getElementById("error_mobile4").innerHTML = x;
						break;
						case "error_mobile5":
						document.getElementById("error_mobile5").innerHTML = x;
						break;
						}

	   }  
       
    }
  }
xmlhttp.open("GET","ajax_validate_exist_data.php?q="+mob_no.value+"&mob_validation=yes",true);

xmlhttp.send();
}
function chk_exist_pin(pin)
{

if (pin.value=="")
  {
  return false;
  }
  
		if(pin.value.length==6)
								{
								return true;
								}
		else
								{
								dhtmlx.alert({
								title: "Error !",
								type:"alert-error",
								text: "Pincode Should be 6 Digits",	
											});		
								return false;									
								}
	}	  
  


function chk_exist_cmp(cmp_name)
{

if (cmp_name.value=="")
  {
  return false;
  }  
  
if (window.XMLHttpRequest)
  {
  xmlhttp=new XMLHttpRequest();
  }
else
  {
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)

    {
	
	var x;
       if(xmlhttp.responseText)
	   {
  
			x=xmlhttp.responseText;
			document.getElementById("error_cmp_name").innerHTML = x;

	   }  
       
    }
  }
xmlhttp.open("GET","ajax_validate_exist_data.php?q="+cmp_name.value+"&cmp_validation=yes",true);

xmlhttp.send();
}



function chk_exist_email(email){
dhtmlx.alert({
    title: "Mail",
    type:"alert-error",
    text: "Mail Already Exists!",
    callback: function(result) 
	{
				if(result==true)
				{

if (email.value=="")
  {
  return false;
  }  
  
if (window.XMLHttpRequest)
  {
  xmlhttp=new XMLHttpRequest();
  }
else
  {
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
	
	var x;
       if(xmlhttp.responseText)
	   {
  
			x=xmlhttp.responseText;
			document.getElementById("error_email_id").innerHTML = x;

	   }  
       
    }
  }
xmlhttp.open("GET","ajax_validate_exist_data.php?q="+email.value+"&email_validation=yes",true);

xmlhttp.send();
   }	
	}
});
 
 }
function GoBack()
{
window.history.back();
}
function clear_err_name_of_cmp()
{
document.getElementById("error_cmp_name").innerHTML = "";
}
function clear_err_mobile(mob)
{
switch("error_"+mob)
{
case "error_mobile":
document.getElementById("error_mobile").innerHTML = "";
break;
case "error_mobile2":
document.getElementById("error_mobile2").innerHTML = "";
break;
case "error_mobile3":
document.getElementById("error_mobile3").innerHTML = "";
break;
}


}


function clear_err_email_id()
{
document.getElementById("error_email_id").innerHTML = "";
}
function doOnLoad() 
			{
			var myCalendar;
			myCalendar = new dhtmlXCalendarObject({input: "d_o_b", button: "calendar_icon1"});
			retrieve_select_bxs();
		}
		
/*function runMe()
{
 document.cookie = name+"=index%3d1; expires=whenever;path=/";
 window.history.back()
}*/	
function numericFilter(data) 
{
   data.value = data.value.replace(/[^.0-9^.+,-]/ig,"");
}	
function text_filter(data)
{
   data.value = data.value.replace(/[^ .a-z]/ig,"");
   
}
function validate_phone(data)
{
		if(data.value.length==10)
								{
								return true;
								}
		else
								{
								dhtmlx.alert({
								title: "Error !",
								type:"alert-error",
								text: "Mobile Number Should be 10 Digits",	
											});		
								return false;									
								}						
}	


		
       function validate_fields()
        {	
		
		var fields=["salutation","customer_fname","customer_lname","mobile_no","designation","area_code","phone_no","extension","mail_id","remarks"];
				for(i=0;i<fields.length;i++)
				{
				//alert(fields[i]);
				current_iteration = document.getElementById(fields[i]).value;
				document.getElementById(fields[i]).style.borderColor="";
						if(current_iteration=="")
						{
				//		alert("Please Fill! "+fields[i]);
						document.getElementById(fields[i]).focus();
						document.getElementById(fields[i]).style.borderColor="red";
						return false;
						}
											
						if(i==20)
						{
						
						var atpos  =  current_iteration.indexOf("@");
						var dotpos = current_iteration.lastIndexOf(".");
								if (atpos< 1 || dotpos<atpos+2 || dotpos+2>=current_iteration.length) 
								{
								dhtmlx.alert({
								title: "Error !",
								type:"alert-error",
								text: "Please verify  Mail Id",	
											});										
									return false;
								}
								else
								{

								}						
						}

				}
			  FormName		= document.add_contact;
  			  FormName.method	= "POST";
              FormName.submit();
		}
		
		
function validateForm() {
    var x = document.forms["myForm"]["email"].value;
    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
    if (atpos< 1 || dotpos<atpos+2 || dotpos+2>=x.length) {
        alert("Not a valid e-mail address");
        return false;
    }
}		
 function csearch() {
  var str =	document.getElementById("customersearch").value;
//  alert(str);
  if (str=="") {
    document.getElementById("customersearch").value="";
    return;
  }
  FormName		= document.cussearch;
  FormName.action ='customer_details_view.php?search_value='+str;          
  FormName.submit();
 
}
 function msearch() {
  var str =	document.getElementById("mobilesearch").value;
//  alert(str);
  if (str=="") {
    document.getElementById("mobilesearch").value="";
    return;
  }
  FormName		= document.mobsearch;
  FormName.action ='customer_details_view.php?search_value='+str;          
  FormName.submit();
 
}

function add_more_mobile()
{
  var cnt_mobile=document.getElementById("mobile_fld_cnt").value;
	  if(cnt_mobile!=4)
	  {
		  document.getElementById("mobile_fld_cnt").value=parseInt(cnt_mobile)+1;
		  document.getElementById("hdn_mobile"+cnt_mobile).removeAttribute("style");
		  document.getElementById("hdn_adjacent"+cnt_mobile).removeAttribute("style");
	  }
	  else
	 {
		dhtmlx.alert({
		title: "Mobile No",
		type:"alert-error",
		text: "You Can't Enter More Than 3 Mobile Number "});
	  }
}

function add_more_phone(){

    
  var cnt_phone=document.getElementById("phone_fld_cnt").value;
	  if(cnt_phone!=3)
	  {
		  document.getElementById("phone_fld_cnt").value=parseInt(cnt_phone)+1;
		  document.getElementById("hdn_phone"+cnt_phone).removeAttribute("style");
		//  document.getElementById("hdn_adjacent"+cnt_phone).removeAttribute("style");
	  }
	  else
	  {
			dhtmlx.alert({
			title: "Phone No",
			type:"alert-error",
			text: "Can't Enter More Than 2 Phone Number "});
	  }
}



function add_more_email()
{
  var cnt_email=document.getElementById("email_fld_cnt").value;
 // alert(cnt_email);
	  if(cnt_email!=3)
	  {
		  document.getElementById("email_fld_cnt").value=parseInt(cnt_email)+1;
		 // alert("hdn_email");
		  document.getElementById("hdn_email"+cnt_email).removeAttribute("style");
		  document.getElementById("hdn_email"+cnt_email+"_adjacent").removeAttribute("style");
	  }
	  else
		{
			dhtmlx.alert({
			title: "Email Id",
			type:"alert-error",
			text: "You Can't Enter More Than 2 Mail Id "});
	  }
}
</script>
	

{/literal}

		<form class="form-horizontal" name="add_contact">
			<input type="hidden" name="hdAction" />
					<input type="hidden" id="mobile_fld_cnt" name="mobile_fld_cnt"  value="2"  >
					<input type="hidden" id="phone_fld_cnt" name="phone_fld_cnt"  value="2"  >
					<input type="hidden" id="email_fld_cnt" name="email_fld_cnt"  value="2"  >
					<input type="hidden" id="hdn_salutation" name="hdn_salutation" value="{$smarty.post.salutaion}">
					<input type="hidden" id="hdn_order_status" name="hdn_order_status" value="{$smarty.post.order_status}">
					<input type="hidden" id="hdn_customer_status" name="hdn_customer_status" value="{$smarty.post.customer_status}">
					<input type="hidden" id="hdn_customer_type" name="hdn_customer_type" value="{$smarty.post.customer_type}">
				   <table class="col-md-6">
					<tr class="form-group">
                      <th class="col-sm-4 control-th">Contact Person</th>
                      <td class="col-sm-2">
					  <select id="salutation" name="salutation" class="form-control" tabindex="3" style="width:70px;" >
					  <option>Mr</option>
					  <option>Mrs</option>
					  <option>Miss</option>
					  </select>
					  </td>
					  <td class="col-sm-3">
                        <input type="text" class="form-control" id="customer_fname" name="customer_fname" placeholder="First name" tabindex="4" style="margin-left:-90px; width:150px;" onKeyUp="text_filter(this);">
						
					  </td>
					  <td class="col-sm-3">
						<input type="text" class="form-control" id="customer_lname" name="customer_lname" placeholder="Last name" style="margin-left:-25px; width:150px;" tabindex="5" onKeyUp="text_filter(this);"><td>&nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>&nbsp;&nbsp;</td>
                      </td>
					  
                    </tr>

				 <tr class="form-group">
                      <th class="col-sm-4 control-th">Mobile No </th>
                      <td class="col-sm-6">
                        <input type="text" class="form-control" id="mobile_no" name="mobile_no" placeholder="Mobile No" maxlength="10" tabindex="7" style="width:150;" onKeyUp="numericFilter(this);clear_err_mobile(this.id);"  onBlur="chk_exist_mob(this);"><td><input type="button" class="btn btn-danger btn-xs" value="ADD MOBILE"  onClick="add_more_mobile();" style="margin-right:-100px;">&nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>&nbsp;&nbsp;</td>
                     </td>
					  
                    </tr>
					<tr class="form-group" id="hdn_mobile2" style="display:none;">
                      <th class="col-sm-4 control-th">Mobile No 2 </th>
                      <td class="col-sm-6">
                        <input type="text" class="form-control" id="mobile_no2" name="mobile_no2" maxlength="10" placeholder="Mobile No 2"  onKeyUp="numericFilter(this);clear_err_mobile(this.id);"  onBlur="chk_exist_mob(this);">
                      </td>
                    </tr>
					<tr class="form-group" id="hdn_mobile3" style="display:none;">
                      <th class="col-sm-4 control-th">Mobile No 3</th>
                      <td class="col-sm-6">
                        <input type="text" class="form-control" id="mobile_no3" name="mobile_no3" maxlength="10" placeholder="Mobile No 3" onKeyUp="numericFilter(this);clear_err_mobile(this.id);"  onBlur="chk_exist_mob(this);">
                      </td>
                    </tr>
					 <tr class="form-group">
                      <th class="col-sm-4 control-th">Created By</th>
                      <td class="col-sm-6">
                        <input type="text" class="form-control" id="created_by" name="created_by" placeholder="Created By" readonly="true">
                      </td>
					</tr> 
                    
					<tr class="form-group">
                      <th class="col-sm-4 control-th">Designation</th>
                      <td class="col-sm-6">
                        <input type="text" class="form-control" id="designation" name="designation" placeholder="Designation" tabindex="12" onKeyUp="text_filter(this);">
						<input type="hidden" class="form-control" id="timestamp" name="timestamp" value="{$smarty.now|date_format:'%Y-%m-%d &amp; %I:%M:%S %p'}">
						<input type="hidden" class="form-control" id="created_date" name="created_date" value="{$smarty.now|date_format:'%Y-%m-%d'}">
						<input type="hidden" class="form-control" id="timestamp" name="timestamp" value="{$smarty.now|date_format:'%I:%M:%S %p'}">
               			<td>&nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font></td>
						</td>
                      </tr> 
					 <tr class="form-group">
                      <th class="col-sm-4 control-th">Phone No</th>
					    <td class="col-sm-2">
					    <input type="text" class="form-control" id="area_code" name="area_code" placeholder="Area Code" tabindex="19" style="width:75px;" onKeyUp="numericFilter(this);" >
					  </td>
                      <td class="col-sm-2">
                        <input type="text" class="form-control" id="phone_no" name="phone_no" placeholder="Phone No" maxlength="10" style="width:100px; margin-left:-80px;" tabindex="20"onKeyUp="numericFilter(this);" >
                      </td>
                      <td class="col-sm-2">
                        <input type="text" class="form-control" id="extension" name="extension" placeholder="Extension" tabindex="21" style="width:100px; margin-left:-50px;" onKeyUp="numericFilter(this);" >
   					   <td>&nbsp;&nbsp;<input type="button" class="btn btn-danger btn-xs" value="ADD PHONE"style="margin-right:-90px;" onClick="add_more_phone();">&nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font></td>
					   </td>
					  
					   </tr>
					   <tr class="form-group" id="hdn_phone2" style="display:none;">
                      <th class="col-sm-4 control-th">Phone No 1</th>
					  <td class="col-sm-2">
					    <input type="text" class="form-control" id="area_code1" name="area_code1" placeholder="Area Code 1" style="width:75px;" onKeyUp="numericFilter(this);" >
					  </td>
                      <td class="col-sm-2">
                        <input type="text" class="form-control" id="phone_no1" name="phone_no1" placeholder="Phone No 1" style="width:100px; margin-left:-80px;" onKeyUp="numericFilter(this);" >
                      </td>
                      <td class="col-sm-2">
                        <input type="text" class="form-control" id="extension1" name="extension1" placeholder="extension 1" style="width:100px; margin-left:-50px;" onKeyUp="numericFilter(this);" >
                       </td>
					   </tr>
					   <tr class="form-group">
                      <th class="col-sm-4 control-th">Email Id</th>
                      <td class="col-sm-6">
                        <input type="email" class="form-control" id="mail_id" name="mail_id" placeholder="Email Id" tabindex="22" onKeyUp="clear_err_email_id();" >
						<td><input type="button" class="btn btn-danger btn-xs" value="ADD MAIL"  onClick="add_more_email();" style="margin-right:-90px;">&nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</td>
                   </td>
					 
					</tr> 
					   <tr class="form-group" id="hdn_email2" style="display:none">
                      <th class="col-sm-4 control-th">Email Id 2</th>
                      <td class="col-sm-6">
                        <input type="email" class="form-control" id="mail_id1" name="mail_id1" placeholder="Email Id 1"  onKeyUp="clear_err_email_id();" >
                      </td>
					  </tr>
					<tr class="form-group">
                      <th class="col-sm-4 control-th">Remarks</th>
                      <td class="col-sm-6">
                        <textarea class="form-control" id="remarks" name="remarks" placeholder="Remarks" tabindex="19"></textarea>
                      <td>&nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font></td>
					  </td>
                    </tr>
					</table>
					</form>
					<!--<div class="box-footer">
					<center>
                   					<input type="button" class="btn btn-info pull-center" value="ADD"  onClick="validate_fields();">&nbsp;&nbsp;
          <button type="button" class="close" data-dismiss="modal">&times;</button>
					</center>
                  </div>-->
				  