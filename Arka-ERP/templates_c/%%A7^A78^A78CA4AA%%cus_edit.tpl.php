<?php /* Smarty version 2.6.25, created on 2016-04-15 17:51:34
         compiled from cus_edit.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'cus_edit.tpl', 739, false),)), $this); ?>
<?php echo $this->_tpl_vars['IncludeCSS']; ?>

<?php echo $this->_tpl_vars['IncludeJS']; ?>

<?php echo '
<script type="text/javascript" src=\'./dhtmlxMessage/codebase/dhtmlxmessage.js\'></script>
	<script type=\'text/javascript\' src=\'./auto-complete/jquery-1.3.2.js\'></script>
	<script type=\'text/javascript\' src=\'./auto-complete/jquery.metadata.js\'></script>
	<script type=\'text/javascript\' src=\'./auto-complete/jquery.auto-complete.js?<?= mktime() ?>\'></script>
	<script type=\'text/javascript\' src=\'./auto-complete/js.js?<?= mktime() ?>\'></script>
	<link rel="stylesheet" href= "./codebase/skins/dhtmlxmessage_dhx_skyblue.css" type="text/css" media="all"/> 
	<link rel=\'stylesheet\' type=\'text/css\' href=\'auto-complete/jquery.auto-complete.css?<?= mktime() ?>\' />
	<link rel="stylesheet" href="\'https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />
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
			retrieve_select_bxs();
			
		}function chk_exist_mob(mob_no)
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
function RunMe()
{
			var snooze_time = document.getElementById("snooze_time").value;
			var values = snooze_time.split(\':\');
			var snooze_ho = values[0];
			var snooze_min = values[1];
			var snooze_sec = values[2];
			document.getElementById("snooze_hours").value=snooze_ho;
			document.getElementById("snooze_minutes").value=snooze_min;
			document.getElementById("snooze_seconds").value=snooze_sec;
			
if (closed_time != "")
{
			var closed_time = document.getElementById("closed_time").value;
			var values = snooze_time.split(\':\');
			var closed_ho = values[0];
			var closed_min = values[1];
			var closed_sec = values[2];
			document.getElementById("closed_hours").value=closed_ho;
			document.getElementById("closed_minutes").value=closed_min;
			document.getElementById("closed_seconds").value=closed_sec;


}

}
window.onload = RunMe;
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
		var res=document.getElementById("enquiry_status").value;
  if(res == "Pending" || res =="Not Intrested" ) {
		var fields=["enquiry_status","snooze_date","snooze_hours","snooze_minutes","snooze_seconds","created_by"];
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
		
		var fields=["enquiry_status","closed_date","closed_hours","closed_minutes","closed_seconds","created_by"];
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
  FormName.action =\'customer_details_view.php?search_value=\'+str;          
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
  FormName.action =\'customer_details_view.php?search_value=\'+str;          
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
		text: "You Can\'t Enter More Than 3 Mobile Number "});
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
			text: "Can\'t Enter More Than 2 Phone Number "});
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
			text: "You Can\'t Enter More Than 2 Mail Id "});
	  }
}
</script>
<script>
function enquiryStatus(){
var res=document.getElementById("enquiry_status").value;
  if(res == "Pending") {
   
    $(\'#snzDate\').show();
	
    $(\'#closedDate\').hide();
	$(\'#PoNo\').hide();
	$(\'#PODate\').hide();
	 
	}
  if(res == "Closed With Out Order") {
     
    $(\'#closedDate\').show();
	 
    $(\'#snzDate\').hide();
	$(\'#PoNo\').hide();
	$(\'#PODate\').hide();	
	
	
	}
   if(res == "Not Intrested") {
   
    $(\'#snzDate\').show();
    $(\'#closedDate\').hide();
	$(\'#PoNo\').hide();
	$(\'#PODate\').hide();
	 
	}
	  if(res == "Closed With Order") {
   
    $(\'#closedDate\').show();
	$(\'#PoNo\').show();
    $(\'#PODate\').show();
    $(\'#snzDate\').hide();
	
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
  FormName.action =\'customer_edit.php?enquiry_id=\'+CatIdent;          
  FormName.submit();

 }
 
  function viewCats(CatIdent) {
    
  FormName		= document.FollowList;
  FormName.action =\'enquiry_detail_view.php?enquiry_id=\'+CatIdent;          
  FormName.submit();

 }	
</script>
'; ?>


	<body class="hold-transition skin-blue sidebar-mini" onLoad="doOnLoad();">

		<form class="form-horizontal" name="add_address">
			<input type="hidden" name="hdAction" />
			<?php $_from = $this->_tpl_vars['ListView4']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['View']):
?>
			<input type="hidden" id="sl_no" name="sl_no" value="<?php echo $this->_tpl_vars['View']['sl_no']; ?>
">
			<input type="hidden" id="customer_id" name="customer_id"  value="<?php echo $this->_tpl_vars['View']['customer_id']; ?>
">
			<input type="hidden" id="requirement" name="requirement"  value="<?php echo $this->_tpl_vars['View']['requirement']; ?>
">
			<input type="hidden" id="assign_to" name="assign_to" value="<?php echo $this->_tpl_vars['View']['assign_to']; ?>
">
			<input type="hidden" id="reassign" name="reassign" value="<?php echo $this->_tpl_vars['View']['reassign']; ?>
">
			<input type="hidden" id="enquiry_id" name="enquiry_id"  value="<?php echo $this->_tpl_vars['View']['enquiry_id']; ?>
"  >
			<?php endforeach; endif; unset($_from); ?>
					<input type="hidden" id="mobile_fld_cnt" name="mobile_fld_cnt"  value="2"  >
					<input type="hidden" id="phone_fld_cnt" name="phone_fld_cnt"  value="2"  >
					<input type="hidden" id="email_fld_cnt" name="email_fld_cnt"  value="2"  >
					<input type="hidden" id="hdn_salutation" name="hdn_salutation" value="<?php echo $this->_tpl_vars['Contact']['salutaion']; ?>
">
					<input type="hidden" id="hdn_order_status" name="hdn_order_status" value="<?php echo $this->_tpl_vars['Contact']['order_status']; ?>
">
					<input type="hidden" id="hdn_customer_status" name="hdn_customer_status" value="<?php echo $this->_tpl_vars['Contact']['customer_status']; ?>
">
					<input type="hidden" id="hdn_customer_type" name="hdn_customer_type" value="<?php echo $this->_tpl_vars['Contact']['customer_type']; ?>
">
							<?php if ($this->_tpl_vars['SuccessMessage'] != ""): ?>
							<div class="isa_success">
							<i class="fa fa-check"></i>
							<?php echo $this->_tpl_vars['SuccessMessage']; ?>
		 
							</div>
							<?php endif; ?>
							<?php if ($this->_tpl_vars['ErrorMessage'] != ""): ?>
							<div class="isa_error">
							<i class="fa fa-times"></i>
							<?php echo $this->_tpl_vars['ErrorMessage']; ?>
		 
							</div>
							<?php endif; ?>
							
				   
				   <?php $_from = $this->_tpl_vars['ViewContact']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['Contact']):
?>
				  <table class="col-md-6" >
<tr class="form-group">
	<td class="col-sm-3">
		<tr class="form-group">	

				<th class="col-sm-2 control-th">Enquiry ID</th>
						<td class="col-sm-5">
						<input type="text" class="form-control" id="enquiry_id" name="enquiry_id" value="<?php echo $this->_tpl_vars['Contact']['enquiry_id']; ?>
"  tabindex="1"/ readonly="true">
						</td>
						<td class="col-sm-5">
						<!--<font class="error" color="#f56954"><b>*</b>&nbsp;</font>-->
						</td>

				<th class="col-sm-2 control-th"> Enquiry Status</th>
						<td class="col-sm-5" >
						<!--<input type="text" class="form-control" id="enquriy_status" name="enquriy_status" placeholder="Enquriy Status " tabindex="2"/>-->
						<select id="enquiry_status" name="enquiry_status" class="form-control"  value="<?php echo $this->_tpl_vars['Contact']['enquiry_status']; ?>
" tabindex="2" onChange="enquiryStatus();">
						<?php if ($this->_tpl_vars['Contact']['enquiry_status'] == 'Pending'): ?>
						<option value="Pending" selected="selected">Pending</option>
						<option value="Closed With Out Order">Closed With Out Order</option>
						<option value="Closed With Order">Closed With Order</option>
						<option value="Not Intrested">Not Intrested</option>
						<?php elseif ($this->_tpl_vars['Contact']['enquiry_status'] == 'Closed With Out Order'): ?>
						<option value="Pending">Pending</option>
						<option value="Closed With Out Order" selected="selected">Closed With Out Order</option>
						<option value="Closed With Order">Closed With Order</option>
						<option value="Not Intrested">Not Intrested</option>
						<?php elseif ($this->_tpl_vars['Contact']['enquiry_status'] == 'Closed With Order'): ?>
						<option value="Pending">Pending</option>
						<option value="Closed With Out Order">Closed With Out Order</option>
						<option value="Closed With Order" selected="selected">Closed With Order</option>
						<option value="Not Intrested">Not Intrested</option>
						<?php elseif ($this->_tpl_vars['Contact']['enquiry_status'] == 'Not Intrested'): ?>
						<option value="Pending">Pending</option>
						<option value="Closed With Out Order">Closed With Out Order</option>
						<option value="Closed With Order">Closed With Order</option>
						<option value="Not Intrested"  selected="selected">Not Intrested</option>
						<?php endif; ?>
						</select>
						</td><td ><!--&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>--></td>
						<!--<?php $_from = $this->_tpl_vars['EnqTypView']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ListEnqTyp']):
?>			-->
						<input type="hidden" class="form-control" id="enquiry_type" name="enquiry_type" value="<?php echo $this->_tpl_vars['EnqTypView']['0']['enquiry_type']; ?>
" readonly="true">
						<!--<?php endforeach; endif; unset($_from); ?>-->
			</tr>
				
						<tr class="form-group" id="snzDate" style="display:none">
					<th class="col-sm-2 control-th" >Snooze Date</th>
						<td class="col-sm-5" >
						<input type="text" class="form-control" id="snooze_date" name="snooze_date" placeholder="snooze date " tabindex="9" value="<?php echo $this->_tpl_vars['Contact']['snooze_date']; ?>
" readonly="true">
						<td ><!--&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>--><a href="#"><img id="calendar_icon1" src="codebase/calendar.png"></a></td>
						</td>
				
					<th class="col-sm-2 control-th" >Snooze Time</th>
						<td class="col-sm-2">
						<input type="text"  class="form-control" id="snooze_hours" name="snooze_hours" placeholder="Hours"  value="<?php echo $this->_tpl_vars['Contact']['snooze_hours']; ?>
"  onKeyUp="HourFilter(this);" style="width:68px;" tabindex="11" autocomplete="OFF" >
						 </td>
						 <td class="col-sm-2" >
						 <input type="text" class="form-control" id="snooze_minutes" name="snooze_minutes" placeholder="minutes"  value="<?php echo $this->_tpl_vars['Contact']['snooze_minutes']; ?>
" tabindex="8" style="width:68px; margin-left:-100px;" onKeyUp="MinuteFilter(this);" autocomplete="OFF" >
						 </td>
						 <td class="col-sm-2" >
						  <input type="text" class="form-control" id="snooze_seconds" name="snooze_seconds" placeholder="Seconds" value="<?php echo $this->_tpl_vars['Contact']['snooze_seconds']; ?>
"tabindex="9" style="width:68px; margin-left:-60px;" onKeyUp="SecondFilter(this);" autocomplete="OFF" >
						<td ><font class="error" color="#f56954"><b>*</b>&nbsp;</font></td>
						</td>
		  </tr>
		  
		    <tr class="form-group" id="PoNo" style="display:none" >
			<th class="col-sm-2 control-th" >PO Date</th>
						<td class="col-sm-5" >
						<input type="text" class="form-control" id="po_date" name="po_date" placeholder="Po Date"  onClick="doOnLoad();" value="<?php echo $this->_tpl_vars['Contact']['po_date']; ?>
">					
						<td ><!--&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>--><a href="#"><img id="calendar_icon3" src="codebase/calendar.png"></a></td>
						</td>
						<th class="col-sm-2 control-th" >PO No</th>
						<td class="col-sm-5" >
						 <input type="text"  class="form-control" id="po_no" name="po_no" placeholder="Po No" value="<?php echo $this->_tpl_vars['Contact']['po_no']; ?>
" tabindex="20" onClick="doOnLoad();" value="HH-MM-SS" tabindex="11">
						<td ><!--&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>--></td>
						</td>
		  </tr>  
		  
		         <tr class="form-group" id="closedDate" style="display:none" >
					<th class="col-sm-2 control-th" >Closed Date</th>
						<td class="col-sm-5" >
						<input type="text" class="form-control" id="closed_date" name="closed_date" placeholder="closed date" tabindex="9" value="<?php echo $this->_tpl_vars['Contact']['closed_date']; ?>
" readonly="true">
						<td ><!--&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>--><a href="#"><img id="calendar_icon2" src="codebase/calendar.png"></a></td>
						</td>
				
					<th class="col-sm-2 control-th" >Closed Time</th>
						<td class="col-sm-2">
						<input type="text" class="form-control" id="closed_hours" name="closed_hours"  placeholder="Hours"  tabindex="16" value="<?php echo $this->_tpl_vars['Contact']['closed_hours']; ?>
" onKeyUp="HourFilter(this);" style="width:68px;" onClick="doOnLoad();" autocomplete="OFF" >
						 </td>
						 <td class="col-sm-2" >
						 <input type="text" class="form-control" id="closed_minutes" name="closed_minutes" placeholder="Minutes"  value="<?php echo $this->_tpl_vars['Contact']['closed_minutes']; ?>
" tabindex="8" style="width:68px; margin-left:-100px;" onKeyUp="MinuteFilter(this);" autocomplete="OFF" >
						 </td>
						 <td class="col-sm-2" >
						  <input type="text" class="form-control" id="closed_seconds" name="closed_seconds" placeholder="Seconds" value="<?php echo $this->_tpl_vars['Contact']['closed_seconds']; ?>
" tabindex="9" style="width:68px; margin-left:-60px;" onKeyUp="SecondFilter(this);" autocomplete="OFF" >
						<td ><!--&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>--></td>
						</td>
		  </tr>  
		   
		   <tr class="form-group">
					<th class="col-sm-2 control-th">Created By</th>
						<td class="col-sm-5">
						<input type="text" class="form-control" id="created_by" name="created_by" placeholder=" created by" tabindex="9" onKeyUp="text_filter(this);" value="<?php echo $this->_supers['session']['UserName']; ?>
" readonly="true">
						<td><!--&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>--></td>
						</td>
						<input type="hidden" class="form-control" id="timestamp" name="timestamp" value="<?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d &amp; %I:%M:%S %p') : smarty_modifier_date_format($_tmp, '%Y-%m-%d &amp; %I:%M:%S %p')); ?>
">
						<input type="hidden" class="form-control" id="created_date" name="created_date" value="<?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d') : smarty_modifier_date_format($_tmp, '%Y-%m-%d')); ?>
">
						<input type="hidden" class="form-control" id="created_time" name="created_time" value="<?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%I:%M:%S %p') : smarty_modifier_date_format($_tmp, '%I:%M:%S %p')); ?>
">
					
					<th class="col-sm-2 control-th">Remarks</th>
						<td class="col-sm-5">
					 <textarea class="form-control" id="remarks"  name="remarks" value="<?php echo $this->_tpl_vars['Contact']['remarks']; ?>
" placeholder="Remarks" tabindex="26" autocomplete="off"></textarea> 
						</td>
		    </tr> 
		   
	</td>
	</tr>
</table>
					<?php endforeach; endif; unset($_from); ?>
					
					</form>
					<div class="box-footer">
					<center>
                    <!--<button type="submit" class="btn btn-info pull-center" onClick="validate_fields();">ADD CUSTOMER</button>-->
					<input type="button" class="btn btn-info pull-center" value="UPDATE"  onClick="validate_fields();">&nbsp;&nbsp;
                    <input type="button" class="btn btn-info pull-center" value="CANCEL" data-dismiss="modal" >&nbsp;&nbsp;
					</center>
                  </div>
				  
				 </body>