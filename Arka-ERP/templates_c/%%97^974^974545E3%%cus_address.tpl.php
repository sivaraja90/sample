<?php /* Smarty version 2.6.25, created on 2017-11-30 18:21:46
         compiled from cus_address.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'cus_address.tpl', 219, false),)), $this); ?>
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
  
function numericFilter(data) 
{
   data.value = data.value.replace(/[^.0-9^.+,-]/ig,"");
}	
function text_filter(data)
{
   data.value = data.value.replace(/[^ .a-z]/ig,"");
   
}
       function validate_fields()
        {	
		
		var fields=["address","area","landmark","city","pincode"];
				for(i=0;i<fields.length;i++)
				{
				//alert(fields[i]);
				current_iteration = document.getElementById(fields[i]).value;
				document.getElementById(fields[i]).style.borderColor="";
					if(current_iteration=="")
						{
						document.getElementById(fields[i]).focus();
						document.getElementById(fields[i]).style.borderColor="red";
						if(i==0)
						{
						var address  =  document.getElementById("address").value;
						if(address=="")
						{
						dhtmlx.alert({
								title: "Error !",
								type:"alert-error",
								text: "Please Enter Address",
											});
									return false;
						}
						}
						if(i==1)
						{
						var area  =  document.getElementById("area").value;
						if(area=="")
						{
						dhtmlx.alert({
								title: "Error !",
								type:"alert-error",
								text: "Please Enter Area",
											});
									return false;
						}
						}
						if(i==2)
						{
						var landmark  =  document.getElementById("landmark").value;
						if(landmark=="")
						{
						dhtmlx.alert({
								title: "Error !",
								type:"alert-error",
								text: "Please Enter Landmark",
											});
									return false;
						}
						}
						if(i==3)
						{
						var city  =  document.getElementById("city").value;
						if(city=="")
						{
						dhtmlx.alert({
								title: "Error !",
								type:"alert-error",
								text: "Please Enter City",
											});
									return false;
						}
						}
						if(i==4)
						{
						var pincode  =  document.getElementById("pincode").value;
						if(pincode=="")
						{
						dhtmlx.alert({
								title: "Error !",
								type:"alert-error",
								text: "Please Enter Pincode",
											});
									return false;
						}
						}
						return false;
						}
											
				}
			  FormName		= document.add_address;
  			  FormName.method	= "POST";
              FormName.submit();
		}
		
		
</script>

'; ?>


		<form class="form-horizontal" name="add_address">
			<input type="hidden" name="hdAction" />
			<input type="hidden" id="customer_id" name="customer_id"  value="<?php echo $this->_supers['get']['customer_id']; ?>
"  >
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
					
<table class="col-md-6" >
<tr class="form-group">
	<td class="col-sm-3">

				<tr class="form-group">
					<th class="col-sm-5 control-th" style="margin-bottom:-30px;">Address</th>
						<td>
						<input type="text" class="form-control" id="address" name="address" placeholder="Address" tabindex="1" autocomplete="Off"><td><!--&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>--></td>
						</td>
					<th class="col-sm-5 control-th">Address1</th>
						<td>
						<input type="text" class="form-control" id="address1" name="address1" placeholder="Address1" tabindex="2" autocomplete="Off"> <td><!--&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>--></td>
						</td>
				</tr> 
				<tr class="form-group">
					<th class="col-sm-5 control-th">Area</th>
						<td>
						<input type="text" class="form-control" id="area" name="area" placeholder="Area" tabindex="3" onKeyUp="text_filter(this);" autocomplete="Off"><td><!--&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>--></td>
						</td>
					<th class="col-sm-5 control-th">Land Mark</th>
						<td>
						<input type="text" class="form-control" id="landmark" name="landmark" placeholder="Land Mark" tabindex="4" autocomplete="Off"><td><!--&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>--></td>
						<input type="hidden" class="form-control" id="timestamp" name="timestamp" value="<?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d &amp; %I:%M:%S %p') : smarty_modifier_date_format($_tmp, '%Y-%m-%d &amp; %I:%M:%S %p')); ?>
">
						<input type="hidden" class="form-control" id="created_date" name="created_date" value="<?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d') : smarty_modifier_date_format($_tmp, '%Y-%m-%d')); ?>
">
						<input type="hidden" class="form-control" id="created_time" name="created_time" value="<?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%I:%M:%S %p') : smarty_modifier_date_format($_tmp, '%I:%M:%S %p')); ?>
">
						</td>
				</tr>
				<tr class="form-group">
					<th class="col-sm-5 control-th">City</th>
						<td>
						<input type="text" class="form-control" id="city" name="city" placeholder="City" tabindex="5" onKeyUp="text_filter(this);" autocomplete="Off">
						</td> <td>&nbsp;</td>
					<th class="col-sm-4 control-th">Pincode</th>
						<td>
						<input type="text" class="form-control" id="pincode" name="pincode" placeholder="Pincode" tabindex="6" maxlength="6" onBlur="chk_exist_pin(this);" onKeyUp="numericFilter(this);" autocomplete="Off"> <td><!--&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>--></td>
						</td>
				</tr>
				<tr class="form-group">
					<th class="col-sm-5 control-th">Remarks</th>
						<td>
						<textarea class="form-control" id="remarks" name="remarks" placeholder="Remarks" tabindex="7" autocomplete="Off"></textarea><td><!--&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>--></td>
						</td>
					<th class="col-sm-5 control-th" >Created By</th>
						<td>
						<input type="text" class="form-control" id="created_by" name="created_by" value="<?php echo $this->_supers['session']['UserName']; ?>
" placeholder="Created By" tabindex="8" readonly="true"><td><!--&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>--></td>
						</td>
				</tr>
</td>
</tr>
</table>
					</form>
					<div class="box-footer">
					<center>
                    <!--<button type="submit" class="btn btn-info pull-center" onClick="validate_fields();">ADD CUSTOMER</button>-->
					<input type="button" class="btn btn-info pull-center" value="ADD"  onClick="validate_fields();">&nbsp;&nbsp;
					</center>
                  </div>

					

                 
				  