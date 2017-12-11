<?php /* Smarty version 2.6.25, created on 2016-07-02 15:15:10
         compiled from address.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'address.tpl', 298, false),)), $this); ?>
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
    border-collapse:separate;
	
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
function doOnLoad() 
			{
			var myCalendar;
			var myCalendar1;
			var myCalendar2;
			var myCalendar3;
			myCalendar = new dhtmlXCalendarObject({input: "date_of", button: "calendar_icon"});
			myCalendar1 = new dhtmlXCalendarObject({input: "po_date", button: "calendar_icon1"});
			
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




       function validate_fields()
       {
		var fields=["address","area","city","pincode","created_by","created_date","created_time"];
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


 
function enquiryStatus(){
var res=document.getElementById("enquiry_status").value;
  if(res == "Pending") {
   
    $(\'#snzDate\').show();
	
    $(\'#closedDate\').hide();
	$(\'#PoNo\').hide();
	
	 
	}
  if(res == "Closed With Out Order") {
    
    $(\'#closedDate\').show();
	 
    $(\'#snzDate\').hide();
	$(\'#PoNo\').hide();
	
	
	
	}
   if(res == "Not Intrested") {
   
    $(\'#snzDate\').show();
    $(\'#closedDate\').hide();
	$(\'#PoNo\').hide();
	
	 
	}
	  if(res == "Closed With Order") {
   
    $(\'#closedDate\').show();
	$(\'#PoNo\').show();
   
    $(\'#snzDate\').hide();
	
	}
   
}
</script>
'; ?>


		<form class="form-horizontal" name="add_address"><body onLoad="doOnLoad();">
		
			<input type="hidden" name="hdAction" />
			<?php $_from = $this->_tpl_vars['ListView3']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['View']):
?>
			<input type="hidden" id="customer_id" name="customer_id"  value="<?php echo $this->_tpl_vars['View']['customer_id']; ?>
">
			<input type="hidden" id="requirement" name="requirement"  value="<?php echo $this->_tpl_vars['View']['requirement']; ?>
">											
			<input type="hidden" id="enquiry_id" name="enquiry_id" value="<?php echo $this->_tpl_vars['View']['enquiry_id']; ?>
">
 			<input type="hidden" id="company_name" name="company_name" value="<?php echo $this->_tpl_vars['View']['company_name']; ?>
">
			<input type="hidden" id="company_code" name="company_code" value="<?php echo $this->_tpl_vars['View']['company_code']; ?>
">
			<input type="hidden" id="arka_group" name="arka_group" value="<?php echo $this->_tpl_vars['View']['arka_group']; ?>
">
			<input type="hidden" id="salutation" name="salutation" value="<?php echo $this->_tpl_vars['View']['salutation']; ?>
">
			<input type="hidden" id="customer_name" name="customer_name" value="<?php echo $this->_tpl_vars['View']['customer_name']; ?>
">
			<!--<input type="hidden" id="enquiry_status" name="enquiry_status" value="<?php echo $this->_tpl_vars['View']['enquiry_status']; ?>
">-->
			<input type="hidden" id="enquiry_type" name="enquiry_type" value="<?php echo $this->_tpl_vars['View']['enquiry_type']; ?>
">
			<input type="hidden" id="enquiry_through" name="enquiry_through" value="<?php echo $this->_tpl_vars['View']['enquiry_through']; ?>
">
			<input type="hidden" id="address" name="address" value="<?php echo $this->_tpl_vars['View']['address']; ?>
">
            <input type="hidden" id="address1" name="address1" value="<?php echo $this->_tpl_vars['View']['address1']; ?>
">
			<input type="hidden" id="landmark" name="landmark" value="<?php echo $this->_tpl_vars['View']['landmark']; ?>
">
			<input type="hidden" id="area" name="area" value="<?php echo $this->_tpl_vars['View']['area']; ?>
">
			<input type="hidden" id="city" name="city" value="<?php echo $this->_tpl_vars['View']['city']; ?>
">
			<input type="hidden" id="pincode" name="pincode" value="<?php echo $this->_tpl_vars['View']['pincode']; ?>
">
			<input type="hidden" id="mobile_no" name="mobile_no" value="<?php echo $this->_tpl_vars['View']['mobile_no']; ?>
">
			<input type="hidden" id="area_code" name="area_code" value="<?php echo $this->_tpl_vars['View']['area_code']; ?>
">
			<input type="hidden" id="phone_no" name="phone_no" value="<?php echo $this->_tpl_vars['View']['phone_no']; ?>
">
			<input type="hidden" id="assign_to" name="assign_to" value="<?php echo $this->_tpl_vars['View']['assign_to']; ?>
">
			<input type="hidden" id="reassign" name="reassign" value="<?php echo $this->_tpl_vars['View']['reassign']; ?>
">
			<input type="hidden" id="extension" name="extension" value="<?php echo $this->_tpl_vars['View']['extension']; ?>
">
			<input type="hidden" id="email_id" name="email_id" value="<?php echo $this->_tpl_vars['View']['email_id']; ?>
">
		    <input type="hidden" id="designation" name="designation" value="<?php echo $this->_tpl_vars['View']['designation']; ?>
">
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
					
<table class="col-md-6" cellpadding="10">
<tr class="form-group">
	<td class="col-sm-3">
	
		<tr class="form-group">	
				<th class="col-sm-5 control-th">Address</th>
						<td class="col-sm-5">
						<input type="hidden" class="form-control" id="po_no" name="po_no" value="<?php echo $this->_supers['get']['po_no']; ?>
" />
						<input type="text" class="form-control" id="address" name="address" value="<?php echo $this->_supers['post']['address']; ?>
"  tabindex="1" autocomplete="Off" placeholder="address">
						</td>
						<td class="col-sm-5">
						</td>
						
			<th class="col-sm-5 control-th">Address1</th>
						<td class="col-sm-5">
						<input type="text" class="form-control" id="address1" name="address1" value="<?php echo $this->_supers['post']['address1']; ?>
"  tabindex="1" autocomplete="Off" placeholder="address1">
						</td>
						<td class="col-sm-5">
						</td>
						</tr>
									
            <tr class="form-group">	
			<th class="col-sm-5 control-th">Area</th>
						<td class="col-sm-5">
						<input type="text" class="form-control" id="area" name="area" value="<?php echo $this->_supers['post']['area']; ?>
"  tabindex="1" autocomplete="Off" placeholder="area" onKeyUp="text_filter(this);">
						</td>
						<td class="col-sm-5">
						</td>
		<th class="col-sm-5 control-th">City</th>
						<td class="col-sm-5">
						<input type="text" class="form-control" id="city" name="city" value="<?php echo $this->_supers['post']['city']; ?>
"  tabindex="1" autocomplete="Off" placeholder="city" onKeyUp="text_filter(this);">
						</td>
						<td class="col-sm-5">
						</td>
						</tr>
		<tr class="form-group">	
			<th class="col-sm-5 control-th">Pincode</th>
						<td class="col-sm-5">
						<input type="text" class="form-control" id="pincode" name="pincode" value="<?php echo $this->_supers['post']['pincode']; ?>
"  tabindex="1" maxlength="6" autocomplete="Off" onKeyUp="numericFilter(this);" placeholder="pincode">
						<input type="hidden" class="form-control" id="timestamp" name="timestamp" value="<?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d &amp; %I:%M:%S %p') : smarty_modifier_date_format($_tmp, '%Y-%m-%d &amp; %I:%M:%S %p')); ?>
">
						<input type="hidden" class="form-control" id="created_date" name="created_date" value="<?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d') : smarty_modifier_date_format($_tmp, '%Y-%m-%d')); ?>
">
						<input type="hidden" class="form-control" id="created_time" name="created_time" value="<?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%I:%M:%S %p') : smarty_modifier_date_format($_tmp, '%I:%M:%S %p')); ?>
">
						<input type="hidden" class="form-control" id="created_by" name="created_by" tabindex="21" value="<?php echo $this->_supers['session']['UserName']; ?>
" readonly="true" autocomplete="off" >
						</td>
						<td class="col-sm-5">
						</td>
						</tr>				
	</td>
	</tr>
</table>
					<div class="box-footer">
					<center>
					<input type="button" class="btn btn-info pull-center" value="ADD" onClick="validate_fields();">&nbsp;&nbsp;
                    <input type="button" class="btn btn-info pull-center" value="CANCEL" >&nbsp;&nbsp;
					</center>
					</div>
      		        </body>
					</form>
					
					
				  