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
	<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css"/>
	<style>
	th {
    font-style: normal;
	font-weight:100;
	font-size:14px;
	margin-right:100px;
}
table { 
    border-spacing: 2px;
    border-collapse:collapse;
	
}
td
{ padding:10px;

}
.isa_success
{
color:#4F8A10;
background-color:#DFF2BF;
}
.isa_error
{
color:#D8000C;
background-color:#FFBABA;
}
.isa_success i,.isa_error i
{
margin:10px 22px;
font-size:2em;
vertical-align:middle;

}
</style>
<script>
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
			var myCalendar1;
			var myCalendar2;
			var myCalendar3;
			myCalendar = new dhtmlXCalendarObject({input: "date_of", button: "calendar_icon"});
			myCalendar1 = new dhtmlXCalendarObject({input: "snooze_date", button: "calendar_icon1"});
			myCalendar2 = new dhtmlXCalendarObject({input: "closed_date", button: "calendar_icon2"});
			myCalendar3 = new dhtmlXCalendarObject({input: "po_date", button: "calendar_icon3"});
			
		}
function numericFilter(data) 
{
   data.value = data.value.replace(/[^.0-9^.+,-]/ig,"");
}	
function text_filter(data)
{
   data.value = data.value.replace(/[^ .a-z]/ig,"");
   
}

function HourFilter(data) 
{

					   if(data.value<=23)
								{
								return true;
								}
		else
								{
								data.value = ""
								dhtmlx.alert({
								title: "Error !",
								type:"alert-error",
								text: "Enter Hour between 0 to 23 ",	
											});		
								return false;									
								}	
  
  
}	
function MinuteFilter(data) 
{
						if(data.value<=59)
								{
								return true;
								}
		else
								{
								data.value = ""
								dhtmlx.alert({
								title: "Error !",
								type:"alert-error",
								text: "Enter Minute between 0 to 59 ",	
											});		
								return false;									
								}	

   
}	
function SecondFilter(data) 
{
						if(data.value<=59)
								{
								return true;
								}
		else
								{
								data.value = ""
								dhtmlx.alert({
								title: "Error !",
								type:"alert-error",
								text: "Enter Second between 0 to 59 ",	
											});		
								return false;									
								}	

   
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
		var res=document.getElementById("enquiry_status").value;
  if(res == "Pending" || res =="Not Intrested" ) {
		var fields=["enquiry_status","snooze_date","snooze_hours","snooze_minutes","snooze_seconds","created_by","created_date","remarks"];
				for(i=0;i<fields.length;i++)
				//alert(fields[i]);
				{
				current_iteration = document.getElementById(fields[i]).value;
				document.getElementById(fields[i]).style.borderColor="";
						if(current_iteration=="")
						{
				//		alert("Please Fill! "+fields[i]);
						document.getElementById(fields[i]).focus();
						document.getElementById(fields[i]).style.borderColor="red";
						return false;
						}
											
						/*if(i==20)
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
						}*/

				}
			  FormName		= document.add_address;
  			  FormName.method	= "POST";
              FormName.submit();
		}
		 if(res == "Closed With Order" ) {
		var fields=["enquiry_status","po_date","po_no","closed_date","closed_hours","closed_minutes","closed_seconds","created_by","created_date","remarks"];
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
											
						/*if(i==20)
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
						}*/

				}
			  FormName		= document.add_address;
  			  FormName.method	= "POST";
              FormName.submit();
		}
		else{
		var fields=["enquiry_status","closed_date","closed_hours","closed_minutes","closed_seconds","created_by","created_date","created_time","remarks"];
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
											
						/*if(i==20)
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
						}*/

				}
			  FormName		= document.add_address;
  			  FormName.method	= "POST";
              FormName.submit();
		}
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
		// document.getElementById("hdn_email"+cnt_email).removeAttribute("style");
		// document.getElementById("hdn_email"+cnt_email+"_adjacent").removeAttribute("style");
	  }
	  else
		{
			dhtmlx.alert({
			title: "Email Id",
			type:"alert-error",
			text: "You Can't Enter More Than 2 Mail Id "});
	  }
}
$(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false
        });
      });


 
function enquiryStatus(){
var res=document.getElementById("enquiry_status").value;
  if(res == "Pending") {
   
    $('#snzDate').show();
	
    $('#closedDate').hide();
	$('#PoNo').hide();
	$('#PODate').hide();
	 
	}
  if(res == "Closed With Out Order") {
     
    $('#closedDate').show();
	 
    $('#snzDate').hide();
	$('#PoNo').hide();
	$('#PODate').hide();	
	
	
	}
   if(res == "Not Intrested") {
   
    $('#snzDate').show();
    $('#closedDate').hide();
	$('#PoNo').hide();
	$('#PODate').hide();
	 
	}
	  if(res == "Closed With Order") {
   
    $('#closedDate').show();
	$('#PoNo').show();
    $('#PODate').show();
    $('#snzDate').hide();
	
	}
   
}
  function deleteCat(CatIdent){
 if(confirm("Are you sure to Delete this Content?")){
  FormName		= document.FollowList;
  FormName.action= "enquiry_detail_view.php?enquiry_id="+CatIdent;
  FormName.submit();
 }
 }
function editCats(CatIdent) {
    
  FormName		= document.FollowList;
  FormName.action ='customer_edit.php?enquiry_id='+CatIdent;          
  FormName.submit();

 }
 
  function viewCats(CatIdent) {
    
  FormName		= document.FollowList;
  FormName.action ='enquiry_detail_view.php?enquiry_id='+CatIdent;          
  FormName.submit();

 }
</script>

{/literal}

		<form class="form-horizontal" name="add_address"><body onLoad="doOnLoad();">
			<input type="hidden" name="hdAction" />
			<input type="hidden" id="customer_id" name="customer_id"  value="{$smarty.get.customer_id}"  >
					<input type="hidden" id="mobile_fld_cnt" name="mobile_fld_cnt"  value="2"  >
					<input type="hidden" id="phone_fld_cnt" name="phone_fld_cnt"  value="2"  >
					<input type="hidden" id="email_fld_cnt" name="email_fld_cnt"  value="2"  >
					<input type="hidden" id="hdn_salutation" name="hdn_salutation" value="{$smarty.post.salutaion}">
					<input type="hidden" id="hdn_order_status" name="hdn_order_status" value="{$smarty.post.order_status}">
					<input type="hidden" id="hdn_customer_status" name="hdn_customer_status" value="{$smarty.post.customer_status}">
					<input type="hidden" id="hdn_customer_type" name="hdn_customer_type" value="{$smarty.post.customer_type}">
							{if $SuccessMessage neq ""}
							<div class="isa_success">
							<i class="fa fa-check"></i>
							{$SuccessMessage}		 
							</div>
							{/if}
							{if $ErrorMessage neq ""}
							<div class="isa_error">
							<i class="fa fa-times"></i>
							{$ErrorMessage}		 
							</div>
							{/if}
					
<table class="col-md-6" >
<tr class="form-group">
	<td class="col-sm-3">
		<tr class="form-group">	

				<th class="col-sm-2 control-th">Enquiry ID</th>
						<td class="col-sm-5">
						<input type="text" class="form-control" id="enquiry_id" name="enquiry_id" value="{$smarty.get.enquiry_id}"  tabindex="1"/ readonly="true">
						</td>
						<td class="col-sm-5">
						<!--<font class="error" color="#f56954"><b>*</b>&nbsp;</font>-->
						</td>

				<th class="col-sm-2 control-th"> Enquiry Status</th>
						<td class="col-sm-5" >
						<!--<input type="text" class="form-control" id="enquriy_status" name="enquriy_status" placeholder="Enquriy Status " tabindex="2"/>-->
						<select id="enquiry_status" name="enquiry_status" class="form-control"  value="{$smarty.post.enquiry_status}" tabindex="2" onChange="enquiryStatus();">
						<option>----Select-----</option>
						<option value="Pending">Pending</option>
						<option value="Closed With Out Order">Closed With Out Order</option>
						<option value="Closed With Order">Closed With Order</option>
						<option value="Not Intrested">Not Intrested</option>
						</select>
						</td><td ><!--&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>--></td>
						<!--{foreach from=$EnqTypView item=ListEnqTyp}			-->
						<input type="hidden" class="form-control" id="enquiry_type" name="enquiry_type" value="{$EnqTypView.0.enquiry_type}" readonly="true">
						<!--{/foreach}-->
			</tr>
				
						<tr class="form-group" id="snzDate" style="display:none">
					<th class="col-sm-2 control-th" >Snooze Date</th>
						<td class="col-sm-5" >
						<input type="text" class="form-control" id="snooze_date" name="snooze_date" placeholder="snooze date " tabindex="9" value="{$smarty.post.snooze_date}" readonly="true">
						<td ><!--&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>--><a href="#"><img id="calendar_icon1" src="codebase/calendar.png"></a></td>
						</td>
				
					<th class="col-sm-2 control-th" >Snooze Time</th>
						<td class="col-sm-2">
						<input type="text"  class="form-control" id="snooze_hours" name="snooze_hours" placeholder="Hours"  value="{$smarty.post.snooze_hours}"  onKeyUp="HourFilter(this);" style="width:68px;" tabindex="11" autocomplete="OFF" >
						 </td>
						 <td class="col-sm-2" >
						 <input type="text" class="form-control" id="snooze_minutes" name="snooze_minutes" placeholder="minutes"  value="{$smarty.post.snooze_minutes}" tabindex="8" style="width:68px; margin-left:-115px;" onKeyUp="MinuteFilter(this);" autocomplete="OFF" >
						 </td>
						 <td class="col-sm-2" >
						  <input type="text" class="form-control" id="snooze_seconds" name="snooze_seconds" placeholder="Seconds" value="{$smarty.post.snooze_seconds}"tabindex="9" style="width:68px; margin-left:-65px;" onKeyUp="SecondFilter(this);" autocomplete="OFF" >
						<td ><!--<font class="error" color="#f56954"><b>*</b>&nbsp;</font>--></td>
						</td>
		  </tr>
		    <tr class="form-group" id="PoNo" style="display:none" >
			<th class="col-sm-2 control-th" >PO Date</th>
						<td class="col-sm-5" >
						<input type="text" class="form-control" id="po_date" name="po_date" placeholder="Po Date"  onClick="doOnLoad();" value="{$smarty.post.po_date}">					
						<td ><!--&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>--><a href="#"><img id="calendar_icon3" src="codebase/calendar.png"></a></td>
						</td>
				

						<th class="col-sm-2 control-th" >PO No</th>
						<td class="col-sm-5" >
						 <input type="text"  class="form-control" id="po_no" name="po_no" placeholder="Po No" value="{$smarty.post.po_no}" tabindex="20" onClick="doOnLoad();" value="HH-MM-SS" tabindex="11">
						<td ><!--&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>--></td>
						</td>
		  </tr>  
		         <tr class="form-group" id="closedDate" style="display:none" >
					<th class="col-sm-2 control-th" >Closed Date</th>
						<td class="col-sm-5" >
						<input type="text" class="form-control" id="closed_date" name="closed_date" placeholder="closed date" tabindex="9" value="{$smarty.post.closed_date}" readonly="true">
						<td ><!--&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>--><a href="#"><img id="calendar_icon2" src="codebase/calendar.png"></a></td>
						</td>
				
					<th class="col-sm-2 control-th" >Closed Time</th>
						<td class="col-sm-2">
						<input type="text" class="form-control" id="closed_hours" name="closed_hours"  placeholder="Hours"  tabindex="16" value="{$smarty.post.closed_hours}" onKeyUp="HourFilter(this);" style="width:68px;" onClick="doOnLoad();" autocomplete="OFF" >
						 </td>
						 <td class="col-sm-2" >
						 <input type="text" class="form-control" id="closed_minutes" name="closed_minutes" placeholder="Minutes"  value="{$smarty.post.closed_minutes}" tabindex="8" style="width:68px; margin-left:-115px;" onKeyUp="MinuteFilter(this);" autocomplete="OFF" >
						 </td>
						 <td class="col-sm-2" >
						  <input type="text" class="form-control" id="closed_seconds" name="closed_seconds" placeholder="Seconds" value="{$smarty.post.closed_seconds}" tabindex="9" style="width:68px; margin-left:-65px;" onKeyUp="SecondFilter(this);" autocomplete="OFF" >
						<td ><!--&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>--></td>
						</td>
		  </tr>  
		   
		   <tr class="form-group">
					<th class="col-sm-2 control-th">Created By</th>
						<td class="col-sm-5">
						<input type="text" class="form-control" id="created_by" name="created_by" placeholder=" created by" tabindex="9" onKeyUp="text_filter(this);" value="{$smarty.session.UserName}" readonly="true">
						<td><!--&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>--></td>
						</td>
						<input type="hidden" class="form-control" id="timestamp" name="timestamp" value="{$smarty.now|date_format:'%Y-%m-%d &amp; %I:%M:%S %p'}">
						<input type="hidden" class="form-control" id="created_date" name="created_date" value="{$smarty.now|date_format:'%Y-%m-%d'}">
						<input type="hidden" class="form-control" id="created_time" name="created_time" value="{$smarty.now|date_format:'%I:%M:%S %p'}">
					<!--<th class="col-sm-2 control-th">Requirement</th>
						<td class="col-sm-5">
						<input type="text" class="form-control" id="requirement" name="requirement" placeholder="Requirement " tabindex="9" value="" >
						<td>&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font></td>
						</td>-->
						
						
		  <!--<tr class="form-group">-->
					<!--<th class="col-sm-2 control-th">Timestamp</th>
						<td class="col-sm-5">
						<input type="text" class="form-control" id="timestamp_value" name="timestamp_value" tabindex="9" onKeyUp="text_filter(this);">
						<td>&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font></td>
						</td>-->
				 
					<th class="col-sm-2 control-th">Remarks</th>
						<td class="col-sm-5">
					 <textarea class="form-control" id="remarks"  name="remarks" value="{$smarty.post.remarks}" placeholder="Remarks" tabindex="26" autocomplete="off"></textarea> 
						</td>
		    </tr> 
		 
				
		   
	</td>
	</tr>
</table>
<div class="modal fade" id="Requirment" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content" style="width:750px;">
        <div class="modal-header" style="background-color:#00CCFF;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Requirement</h4>
        </div>
        <div class="modal-body">
<table class="table table-bordered table-striped ">
<thead>
<th>Select</th>
<th>Sl No</th>
<th>Product Code</th>
<th>Product Name</th>
</thead>
					<tbody>
					<tr>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td><input type="text" class="form-control" id="search" name="search" placeholder="Search Code"></td>
					<td><input type="text" class="form-control" id="search1" name="search1" placeholder="Search Name"></td>
					</tr>
                      <tr>
					  	<td><input type="checkbox" id="checkbox" name="checkbox">
						<td>0</td>
						<td>OT</td>
                        <td align="center">Others</td>
					   </tr>
					   <tr>
                        <td><input type="checkbox" id="checkbox" name="checkbox">
						<td>1</td>
						<td>PR15</td>
                        <td align="center">WET and DRY VACUUM CLEANER -15 lts </td>
					   </tr>
					   <tr>
                        <td><input type="checkbox" id="checkbox" name="checkbox">
						<td>2</td>
						<td>PR30</td>
                        <td align="center">WET and DRY VACUUM CLEANER -30 lts </td>
					   </tr>
					   <tr>
                        <td><input type="checkbox" id="checkbox" name="checkbox">
						<td>3</td>
						<td>PR270</td>
                        <td align="center">WET and DRY VACUUM CLEANER -70 lts </td>
					   </tr><tr>
                        <td><input type="checkbox" id="checkbox" name="checkbox">
						<td>4</td>
						<td>PR380</td>
                        <td align="center">WET and DRY VACUUM CLEANER -80 lts </td>
					   </tr>
					   
						<tr>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td><textarea id="product_code" name="product_code" size="255" placeholder="Select Code" ></textarea></td>
						</tr>
					  </tbody>					  
                  </table>

        </div>
					<div class="box-footer">
					<center>
                    
					<input type="submit" class="btn btn-info pull-center" value="ADD">&nbsp;&nbsp;
                    <input type="button" class="btn btn-info pull-center" value="CANCEL" >&nbsp;&nbsp;
					</center>
					</div>
      </div>
    </div>
  </div>
					</body>
					</form>
					<div class="box-footer">
					<center>
                    <!--<button type="submit" class="btn btn-info pull-center" onClick="validate_fields();">ADD CUSTOMER</button>-->
					<input type="button" class="btn btn-info pull-center" value="Submit"  onClick="validate_fields();">&nbsp;&nbsp;
                  
					</center> 
                  </div>
				  
