<?php /* Smarty version 2.6.25, created on 2016-07-05 16:53:30
         compiled from project_order_followup.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'project_order_followup.tpl', 505, false),)), $this); ?>
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
	var res=document.getElementById("order_status").value;
  if(res == "Closed With Payment" ) {
		var fields=["project_order_no","project_order_date","project_quote_no","project_quote_date","revised_no","order_status","snooze_date","closed_date","created_by"];
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
											
				}
			  FormName		= document.add_address;
  			  FormName.method	= "POST";
              FormName.submit();
		}
		else{
		var fields=["project_order_no","project_order_date","project_quote_no","project_quote_date","revised_no","order_status","snooze_date","created_by"];
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
											
				}
			  FormName		= document.add_address;
  			  FormName.method	= "POST";
              FormName.submit();
			  }
			  }
			  
$(function () {
        $("#example1").DataTable();
        $(\'#example2\').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false
        });
      });

function orderStatus(){
var res=document.getElementById("order_status").value;
 
  if(res == "Closed With Payment") {
    $(\'#closedDate\').show();
	$(\'#closed\').show();
	$(\'#closedD\').show();
	}
	 else{
    $(\'#closedDate\').hide();
	$(\'#closed\').hide();
	$(\'#closedD\').hide();
	}
}
</script>
'; ?>


		<form class="form-horizontal" name="add_address"><body onLoad="doOnLoad();">
			<input type="hidden" name="hdAction" />
			<?php $_from = $this->_tpl_vars['AddressView']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['View']):
?>
			<input type="hidden" id="customer_id" name="customer_id"  value="<?php echo $this->_tpl_vars['View']['customer_id']; ?>
">
			<input type="hidden" id="enquiry_id" name="enquiry_id" value="<?php echo $this->_tpl_vars['View']['enquiry_id']; ?>
">
				<input type="hidden" id="project_quote_no" name="project_quote_no" value="<?php echo $this->_tpl_vars['View']['project_quote_no']; ?>
">	
				<input type="hidden" id="project_quote_date" name="project_quote_date" value="<?php echo $this->_tpl_vars['View']['quote_date']; ?>
">
					<input type="hidden" id="project_order_no" name="project_order_no" value="<?php echo $this->_tpl_vars['View']['project_order_no']; ?>
">
						<input type="hidden" id="project_order_date" name="project_order_date" value="<?php echo $this->_tpl_vars['View']['project_order_date']; ?>
">
						<input type="hidden" id="po_no" name="po_no" value="<?php echo $this->_tpl_vars['View']['po_no']; ?>
">
						<input type="hidden" id="po_date" name="po_date" value="<?php echo $this->_tpl_vars['View']['po_date']; ?>
">
						<input type="hidden" class="form-control" id="revised_no" name="revised_no" value="<?php echo $this->_tpl_vars['View']['revised_version']; ?>
" >
 	
			
						<?php endforeach; endif; unset($_from); ?>
					<input type="hidden" id="mobile_fld_cnt" name="mobile_fld_cnt"  value="2"  >
					<input type="hidden" id="phone_fld_cnt" name="phone_fld_cnt"  value="2"  >
					<input type="hidden" id="email_fld_cnt" name="email_fld_cnt"  value="2"  >
					<input type="hidden" id="hdn_salutation" name="hdn_salutation" value="<?php echo $this->_supers['post']['salutaion']; ?>
">
					<input type="hidden" id="hdn_order_status" name="hdn_order_status" value="<?php echo $this->_supers['post']['order_status']; ?>
">
					<input type="hidden" id="hdn_customer_status" name="hdn_customer_status" value="<?php echo $this->_supers['post']['customer_status']; ?>
">
					<input type="hidden" id="hdn_customer_type" name="hdn_customer_type" value="<?php echo $this->_supers['post']['customer_type']; ?>
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
					
<table class="col-md-6">
<tr class="form-group">
	<td class="col-sm-3">
		
		<tr class="form-group">	
					<th class="col-sm-2 control-th" >Enquiry Id</th>
						<td class="col-sm-5" >
            <input type="text" class="form-control" id="enquiry_id" name="enquiry_id" placeholder="enquiry_id" tabindex="1" value="<?php echo $this->_tpl_vars['View']['enquiry_id']; ?>
" readonly="true"><td></td>
						</td>
				<th class="col-sm-2 control-th"> Order Status</th>
						<td class="col-sm-5" >
						<select id="order_status" name="order_status" class="form-control"  value="<?php echo $this->_supers['post']['order_status']; ?>
" tabindex="2" onChange="orderStatus();">
						<option>----Select-----</option>
						<option value="Pending">Pending</option>
						<option value="Vendor PO Rised">Vendor PO Rised</option>
						<option value="Material In Transit">Material In Transit</option>
						<option value="Partial Material Delivered">Partial Material Delivered</option>
						<option value="Full Material Delivered">Full Material Delivered</option>
						<option value="Closed With Payment">Closed With Payment</option>
						<option value="Closed WithOut Payment">Closed WithOut Payment</option>
						</select>
						</td><td></td>
				<input type="hidden" class="form-control" id="enquiry_type" name="enquiry_type" value="<?php echo $this->_tpl_vars['EnqTypView']['0']['enquiry_type']; ?>
" readonly="true">
			</tr>
				
				<tr class="form-group" >
					<th class="col-sm-2 control-th" >Snooze Date</th>
						<td class="col-sm-5" >
	<input type="text" class="form-control" id="snooze_date" name="snooze_date" placeholder="snooze date " tabindex="3" value="<?php echo $this->_supers['post']['snooze_date']; ?>
" readonly="true">
						<td><a href="#"><img id="calendar_icon1" src="codebase/calendar.png"></a></td>
						</td>
						<th class="col-sm-2 control-th">Created By</th>
						<td class="col-sm-5">
						<input type="text" class="form-control" id="created_by" name="created_by" placeholder=" created by" tabindex="11" onKeyUp="text_filter(this);" value="<?php echo $this->_supers['session']['UserName']; ?>
" readonly="true">
						<td></td>
						</td>
						<input type="hidden" class="form-control" id="timestamp" name="timestamp" value="<?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d &amp; %I:%M:%S %p') : smarty_modifier_date_format($_tmp, '%Y-%m-%d &amp; %I:%M:%S %p')); ?>
">
						<input type="hidden" class="form-control" id="created_date" name="created_date" value="<?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d') : smarty_modifier_date_format($_tmp, '%Y-%m-%d')); ?>
">
						<input type="hidden" class="form-control" id="created_time" name="created_time" value="<?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%I:%M:%S %p') : smarty_modifier_date_format($_tmp, '%I:%M:%S %p')); ?>
">
					</tr>
		   
		         <tr class="form-group">
					<th class="col-sm-2 control-th" id="closedDate" style="display:none">Closed Date</th>
						<td class="col-sm-5" id="closed" style="display:none;">
	<input type="text" class="form-control" id="closed_date" name="closed_date" placeholder="closed date" tabindex="7" value="<?php echo $this->_supers['post']['closed_date']; ?>
" readonly="true"></td>
						<td id="closedD" style="display:none;" ><a href="#"><img id="calendar_icon2" src="codebase/calendar.png"></a></td>
		   
					<th class="col-sm-2 control-th">Remarks</th>
						<td class="col-sm-5">
					 <textarea class="form-control" id="remarks"  name="remarks" value="<?php echo $this->_supers['post']['remarks']; ?>
" placeholder="Remarks" tabindex="12" autocomplete="off" value="<?php echo $this->_supers['post']['remarks']; ?>
"></textarea> 
						</td>
		             </tr> 
	</td>
	</tr>
</table>
					</body>
					</form>
					<div class="box-footer">
		<center><input type="button" class="btn btn-info pull-center" value="Submit"  onClick="validate_fields();"></center> 
                  </div>
				  