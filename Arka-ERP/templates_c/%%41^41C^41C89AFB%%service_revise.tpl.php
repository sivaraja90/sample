<?php /* Smarty version 2.6.25, created on 2016-08-05 13:16:42
         compiled from service_revise.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'service_revise.tpl', 281, false),)), $this); ?>
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
html, body {
	padding: 0;
	margin: 0;
	overflow: hidden;
}
#Revise {
	position: absolute;
	left: 0;
	top: 0;
	right: -30px;
	bottom: 0;	
	padding-right: 15px;
	overflow-y: scroll;
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
function doOnLoad() 
			{
			var myCalendar;
			myCalendar = new dhtmlXCalendarObject({input: "quote_date", button: "calendar_icon1"});
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
		
		var fields=["quote_date","payment","delivery","validity","product_description","total_material","material_tax_per","total_material_cost","total_labour","labour_tax_per","total_labour_cost","total"];
				for(i=0;i<fields.length;i++)
				{
				//alert(fields[i]);
				current_iteration = document.getElementById(fields[i]).value;
				document.getElementById(fields[i]).style.borderColor="";
						if(current_iteration=="")
						{
						dhtmlx.alert({
								title: "Error !",
								type:"alert-error",
								text: "Please Fill "+fields[i],	
									 });
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
		
</script>
<script>
function getvalue()
{					var quantity = document.getElementById(\'material\').value;
					var item = document.getElementById(\'item_type\').value;
					var price = document.getElementById(\'sqft\').value;
					var cost = (quantity * price); 
					//alert(item);
					if(item==\'Sqft\')
					{
					var total_material = document.getElementById(\'total_material\').value=cost;
					}
					else
					{
					var total_material = document.getElementById(\'total_material\').value;
					}
					var tax = document.getElementById(\'material_tax_per\').value;
					
					if(tax != "")
					{//alert(\'Tax\');
							var tax_value = (total_material * tax)/100;
							document.getElementById(\'material_tax_value\').value=tax_value;
							var total1 = (+tax_value + +total_material);
							document.getElementById(\'total_material_cost\').value=total1;
					}
					getvalue2();
					
}

function Event()
{
var test = document.getElementById("item_type").value;

if( test == "Lumsum")
{
document.getElementById("labour").disabled =true;
document.getElementById("material").disabled =true;
document.getElementById("sqft").disabled =true;
document.getElementById("total_material").disabled =false;
document.getElementById("total_labour").disabled =false;
document.getElementById("labour").value ="";
document.getElementById("material").value ="";
document.getElementById("sqft").value ="";
document.getElementById("total_material").value ="";
document.getElementById("total_labour").value ="";
document.getElementById("material_tax_per").value ="";
document.getElementById("labour_tax_per").value ="";
document.getElementById("total_material_cost").value ="";
document.getElementById("total_labour_cost").value ="";
}
else
{
document.getElementById("labour").disabled =false;
document.getElementById("material").disabled =false;
document.getElementById("sqft").disabled =false;
document.getElementById("total_material").disabled =false;
document.getElementById("total_labour").disabled =false;
document.getElementById("material_tax_per").value ="";
document.getElementById("labour_tax_per").value ="";
document.getElementById("labour").value ="";
document.getElementById("material").value ="";
document.getElementById("sqft").value ="";
document.getElementById("total_material").value ="";
document.getElementById("total_labour").value ="";
document.getElementById("total_material_cost").value ="";
document.getElementById("total_labour_cost").value ="";

}
}
function getvalue1()
{
					var item = document.getElementById(\'item_type\').value;
					var quantity = document.getElementById(\'labour\').value;
					var price = document.getElementById(\'sqft\').value;
					var cost = (quantity * price);
					
					if(item==\'Sqft\')
					{
					var total_labour = document.getElementById(\'total_labour\').value=cost;
					}
					else
					{
					var total_labour = document.getElementById(\'total_labour\').value;
					}
					var tax = document.getElementById(\'labour_tax_per\').value;
					
					if(tax != "")
					{
							var tax_value = (total_labour * tax)/100;
							document.getElementById(\'labour_tax_value\').value=tax_value;
							var total2 = (+tax_value + +total_labour);
							document.getElementById(\'total_labour_cost\').value=total2;
					}
					
					 getvalue2();
}	

function doOnLoad() 
			{
			var myCalendar;
			myCalendar = new dhtmlXCalendarObject({input: "quote_date", button: "calendar_icon"});
			
		}
function getvalue2()
{
var Total1 = document.getElementById(\'total_material_cost\').value;
var Total2 = document.getElementById(\'total_labour_cost\').value;
var total_val = +Total1 + +Total2;
document.getElementById(\'total\').value=total_val;
}
</script>

'; ?>

<body  class="hold-transition skin-blue sidebar-mini" onLoad="doOnLoad();">
<div id="Revise">
		<form class="form-horizontal" name="add_address">
			<input type="hidden" name="hdAction" />

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
				<th class="col-sm-2 control-th">Service Quote No </th>
						<td class="col-sm-5">
						<input type="text" class="form-control" id="service_quote_no" name="service_quote_no"  value="<?php echo $this->_supers['get']['service_quote_no']; ?>
" readonly="true"  tabindex="1" placeholder="Service Quote No">  </td>	
						<?php $_from = $this->_tpl_vars['ServiceQuote']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['reviseMaster']):
?>
					<input type="hidden" class="form-control" id="customer_name" name="customer_name" value="<?php echo $this->_tpl_vars['reviseMaster']['customer_name']; ?>
"  >
						<input type="hidden" class="form-control" id="company_name" name="company_name" value="<?php echo $this->_tpl_vars['reviseMaster']['company_name']; ?>
"  >
						<input type="hidden" class="form-control" id="salutation" name="salutation" value="<?php echo $this->_tpl_vars['reviseMaster']['salutation']; ?>
"  >
						<input type="hidden" class="form-control" id="enquiry_id" name="enquiry_id"value="<?php echo $this->_tpl_vars['reviseMaster']['enquiry_id']; ?>
" >
						<input type="hidden" class="form-control" id="customer_id" name="customer_id" value="<?php echo $this->_tpl_vars['reviseMaster']['customer_id']; ?>
" readonly="true">
						<input type="hidden" class="form-control" id="revised_version" name="revised_version" value="<?php echo $this->_tpl_vars['r_version']; ?>
"/>
						<input type="hidden" class="form-control" id="mobile_no" name="mobile_no" value="<?php echo $this->_tpl_vars['reviseMaster']['mobile_no']; ?>
">
						<input type="hidden" class="form-control" id="address" name="address" value="<?php echo $this->_tpl_vars['reviseMaster']['address']; ?>
">
						<input type="hidden" class="form-control" id="address1" name="address1" value="<?php echo $this->_tpl_vars['reviseMaster']['address1']; ?>
">
						<input type="hidden" class="form-control" id="city" name="city" value="<?php echo $this->_tpl_vars['reviseMaster']['city']; ?>
">
						<input type="hidden" class="form-control" id="area_code" name="area_code" value="<?php echo $this->_tpl_vars['reviseMaster']['area_code']; ?>
">
						<input type="hidden" class="form-control" id="phone_no" name="phone_no" value="<?php echo $this->_tpl_vars['reviseMaster']['phone_no']; ?>
" >
						<input type="hidden" class="form-control" id="extension" name="extension" value="<?php echo $this->_tpl_vars['reviseMaster']['extension']; ?>
">
						<input type="hidden" class="form-control" id="created_by" name="created_by" tabindex="25"  value="<?php echo $this->_supers['session']['UserName']; ?>
"/>
						<input type="hidden" class="form-control" id="company_name" name="company_name" value="<?php echo $this->_tpl_vars['reviseMaster']['company_name']; ?>
">
						<input type="hidden" class="form-control" id="area" name="area" value="<?php echo $this->_tpl_vars['reviseMaster']['area']; ?>
" >
						<input type="hidden" class="form-control" id="pincode" name="pincode" maxlength="6" value="<?php echo $this->_tpl_vars['reviseMaster']['pincode']; ?>
">
						<input type="hidden" class="form-control" id="email" name="email" value="<?php echo $this->_tpl_vars['reviseMaster']['email']; ?>
">
						<input type="hidden" class="form-control" id="email1" name="email1" value="<?php echo $this->_tpl_vars['reviseMaster']['email1']; ?>
" />
						
						 <?php endforeach; endif; unset($_from); ?>
						
						
						<td><!--&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>--></td>
						<th class="col-sm-2 control-th">Revised Version</th>
						<td class="col-sm-5">
						<input type="text" class="form-control" id="revised_version" name="revised_version" value="<?php echo $this->_tpl_vars['r_version']; ?>
" readonly="true" tabindex="2">
						</td>
						</tr>
						<tr class="form-group">	
						<th class="col-sm-2 control-th">Quote Date</th>
						<td class="col-sm-5">
						<input type="text" class="form-control" id="quote_date" name="quote_date" value="<?php echo $this->_tpl_vars['reviseMaster']['service_quote_date']; ?>
" placeholder="Quote Date" onClick="doOnLoad();" tabindex="3" readonly="">
						<input type="hidden" class="form-control" id="timestamp" name="timestamp" value="<?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d &amp; %I:%M:%S %p') : smarty_modifier_date_format($_tmp, '%Y-%m-%d &amp; %I:%M:%S %p')); ?>
">
						<input type="hidden" class="form-control" id="created_date" name="created_date" value="<?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d') : smarty_modifier_date_format($_tmp, '%Y-%m-%d')); ?>
">
						<input type="hidden" class="form-control" id="created_time" name="created_time" value="<?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%I:%M:%S %p') : smarty_modifier_date_format($_tmp, '%I:%M:%S %p')); ?>
">
						
						</td>
						<td class="col-sm-5">
						<a href="#"><img id="calendar_icon1" src="codebase/calendar.png"></a><!--<font class="error" color="#f56954"><b>*</b>&nbsp;</font>-->
						</td>
						<th class="col-sm-2 control-th">Payment</th>
						<td class="col-sm-5">
						<input type="text" class="form-control" placeholder="ex :  50%" id="payment" name="payment" value="<?php echo $this->_tpl_vars['RevTerm']['0']['payment']; ?>
"  tabindex="3" autocomplete="Off">
						
						<td></td>
						</td> </tr>
			
					<tr class="form-group" >
					
						<th class="col-sm-2 control-th">Delivery</th>
						<td class="col-sm-5">
						 <input type="text" class="form-control" placeholder="ex : 2 to 3 Weeks" id="delivery" name="delivery" value="<?php echo $this->_tpl_vars['RevTerm']['0']['delivery']; ?>
" tabindex="4" autocomplete="Off">
						<td><!--&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>--></td>
						<th class="col-sm-2 control-th">Validity</th>
						<td class="col-sm-5">
					<select id="validity" name="validity" class="form-control" value="<?php echo $this->_tpl_vars['RevTerm']['0']['validity']; ?>
" tabindex="5" >
						<option value="0"> -- Select Validity days -- </option>	
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7">7</option>
						<option value="8">8</option>
						<option value="9">9</option>
						<option value="10">10</option>
						<option value="11">11</option>
						<option value="12">12</option>
						<option value="13">13</option>
						<option value="14">14</option>
						<option value="15">15</option>
						<option value="16">16</option>
						<option value="17">17</option>
						<option value="18">18</option>
						<option value="19">19</option>
						<option value="20">20</option>
						<option value="21">21</option>
						<option value="22">22</option>
						<option value="23">23</option>
						<option value="24">24</option>
						<option value="25">25</option>
						<option value="26">26</option>
						<option value="27">27</option>
						<option value="28">28</option>
						<option value="29">29</option>
						<option value="30">30</option>
						<option value="31">31</option>
									
						</select> 					
						<td><!--&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>--></td>
						</td>
</tr>
					<tr class="form-group" >

						<th class="col-sm-2 control-th">Pay Type</th>
						<td class="col-sm-5">
						<select id="item_type" name="item_type" class="form-control"  onChange="Event();getvalue();getvalue1();" tabindex="6">
						<option value="0"> -- Select Item Type -- </option>	
						<option value="Sqft">Sqft</option>
						<option value="Lumsum">Lumsum</option>			
						</select> 
						<td><!--&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>--></td>
						</td>
					<th class="col-sm-2 control-th">Product Desc</th>
						<td class="col-sm-5">
						 <input type="text" class="form-control" id="product_description" name="product_description" value="<?php echo $this->_supers['post']['material_description']; ?>
" tabindex="4" autocomplete="Off">
						<td><!--&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>--></td>
						</td>
						</tr> 
						<tr class="form-group" >
						
						<th class="col-sm-2 control-th">Sqft</th>
						<td class="col-sm-5">
						<input type="text" class="form-control" id="sqft" name="sqft" value="<?php echo $this->_supers['post']['sqft']; ?>
" disabled="disabled"  tabindex="6" autocomplete="Off" onKeyUp="numericFilter(this);">
						
						<td><!--&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>--></td>
						</td>
						<th class="col-sm-2 control-th"> Material / sqft</th>
						<td class="col-sm-5">
						<input type="text" class="form-control" id="material" name="material" disabled="disabled" value="<?php echo $this->_supers['post']['material']; ?>
"  tabindex="7" autocomplete="Off" onKeyUp="numericFilter(this);" >
						
						<td><!--&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>--></td>
						</td>
					
		  </tr>
						<tr class="form-group" >
						<th class="col-sm-2 control-th">Mat Tax %</th>
						<td class="col-sm-5" id="mat_sqft">
						<input type="text" class="form-control" id="material_tax_per" name="material_tax_per" value="<?php echo $this->_supers['post']['material_tax_per']; ?>
" onKeyUp="getvalue();numericFilter(this);" tabindex="9" autocomplete="Off"><td><!--&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>--></td>
						</td>
											
						<th class="col-sm-2 control-th">Mat Sqft Cost</th>
						<td class="col-sm-5">
						<input type="text" class="form-control" id="total_material" name="total_material" value="<?php echo $this->_supers['post']['total_material']; ?>
" onKeyUp="getvalue();" tabindex="8" autocomplete="Off">
						
						<td><!--&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>--></td>
						</td>
												
		  </tr>
		  <tr class="form-group">
		  
						<th class="col-sm-2 control-th" >Total Mat Cost</th>
						<td class="col-sm-5">
						<input type="text" class="form-control" id="total_material_cost" name="total_material_cost" value="<?php echo $this->_supers['post']['total_material_cost']; ?>
" tabindex="13" autocomplete="Off" onKeyUp="getvalue2();">
						<input type="hidden" class="form-control" id="timestamp" name="timestamp" value="<?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d &amp; %I:%M:%S %p') : smarty_modifier_date_format($_tmp, '%Y-%m-%d &amp; %I:%M:%S %p')); ?>
">
						<input type="hidden" class="form-control" id="created_date" name="created_date" value="<?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d') : smarty_modifier_date_format($_tmp, '%Y-%m-%d')); ?>
">
						<input type="hidden" class="form-control" id="created_time" name="created_time" value="<?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%I:%M:%S %p') : smarty_modifier_date_format($_tmp, '%I:%M:%S %p')); ?>
">
						<input type="hidden" class="form-control" id="material_value" name="material_value" value="<?php echo $this->_supers['post']['material_value']; ?>
" placeholder="Material  Value" tabindex="10">
						 <input type="hidden" class="form-control" id="material_tax_value" name="material_tax_value" value="<?php echo $this->_supers['post']['material_tax_value']; ?>
" placeholder="Material Tax Value" tabindex="11">
						 <input type="hidden" class="form-control" id="material_estimate" name="material_estimate" value="<?php echo $this->_supers['post']['material_estimate']; ?>
" placeholder="Material Estimate" tabindex="12">
						<td  ><!--&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>--></td>
						</td>
						
						 <th class="col-sm-2 control-th"> Labour / sqft</th>
						<td class="col-sm-5">
						 <input type="text" class="form-control" id="labour" name="labour" value="<?php echo $this->_supers['post']['labour']; ?>
" disabled="disabled" tabindex="14" autocomplete="Off" onKeyUp="getvalue1();numericFilter(this);">
						
						<td ><!--&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>--></td>
					</td>
					
						</tr>
						 <tr class="form-group" >	
							 <th class="col-sm-2 control-th">Lab Tax %</th>
						<td class="col-sm-5">
						<input type="text" class="form-control" id="labour_tax_per" name="labour_tax_per" value="<?php echo $this->_supers['post']['labour_tax_per']; ?>
"  onKeyUp="getvalue1();numericFilter(this);" tabindex="16" autocomplete="Off">
						<td><!--&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>--></td>
						</td>
						
					<th class="col-sm-2 control-th">Lab Sqft Cost</th>
						<td class="col-sm-5">
						<input type="text" class="form-control" id="total_labour" name="total_labour" value="<?php echo $this->_supers['post']['total_labour']; ?>
"  tabindex="15"  autocomplete="Off" onKeyUp="getvalue1();numericFilter(this);">
						
						<td><!--&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>--></td>
						</td>
										
					</tr>
				
				<tr class="form-group">
			
						<th class="col-sm-2 control-th">Total Lab Cost</th>
						<td class="col-sm-5">
						<input type="text" class="form-control" id="total_labour_cost" name="total_labour_cost" value="<?php echo $this->_supers['post']['total_labour_cost']; ?>
"   tabindex="20" autocomplete="Off" onKeyUp="getvalue2();">
						<input type="hidden" class="form-control" id="labour_value" name="labour_value" value="<?php echo $this->_supers['post']['labour_value']; ?>
" placeholder="Labour Value" tabindex="17">
						<input type="hidden" class="form-control" id="labour_tax_value" name="labour_tax_value" value="<?php echo $this->_supers['post']['labour_tax_value']; ?>
"  tabindex="18">
						<input type="hidden" class="form-control" id="labour_estimate" name="labour_estimate" value="<?php echo $this->_supers['post']['labour_estimate']; ?>
"   tabindex="19">
						
						<td><!--&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>--></td>
						</td>	
						 <th class="col-sm-2 control-th">Total</th>
						<td class="col-sm-5">
						<input type="text" class="form-control" id="total" name="total"  tabindex="21" value="<?php echo $this->_supers['post']['total']; ?>
" onKeyUp="numericFilter(this);" autocomplete="Off">
						<td><!--&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>--></td>
						</td>				
						
					
</tr>
	
	</td>
	</tr>
	</table>
  				 
					</form>
					<div class="box-footer">
					<center>
                    
					<input type="button" class="btn btn-info pull-center" value="SUBMIT"  onClick="validate_fields();">&nbsp;&nbsp;
					</center>
					</div>
					<div class="tab-pane" id="Service">
				<form name="ServiceList" id="ServiceList" method="post">
                  <table id="example2" class="table table-bordered table-striped" style="font-size:13px; font-family:'Times New Roman', Times, serif;">
				  
                    <thead>
					<tr>
					            <th>Sl No</th>
								<th>Material Description</th>
								<th>Sqft</th>
								<th>Material</th>
								<th>Labour </th>
								<th>Total Material</th>
								<th>Total Labour</th>
								<th>Total </th>
						      <th>Action</th>
					</tr>
                    </thead>
                    <tbody>
                   	<?php $_from = $this->_tpl_vars['SelectList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['Contact']):
?>
					<tr id="<?php echo $this->_tpl_vars['i']++; ?>
">        
					            <td align="center"><a href="#" onClick="Javascript:viewCats('<?php echo $this->_tpl_vars['Contact']['customer_id']; ?>
')"><?php echo $this->_tpl_vars['i']; ?>
</a></td>
								<td align="center"><a href="#" onClick="Javascript:viewCats('<?php echo $this->_tpl_vars['Contact']['customer_id']; ?>
')"><?php echo $this->_tpl_vars['Contact']['material_description']; ?>
</a></td>
								<td align="center"><a href="#" onClick="Javascript:viewCats('<?php echo $this->_tpl_vars['Contact']['customer_id']; ?>
')"><?php echo $this->_tpl_vars['Contact']['sqft']; ?>
</a></td>
								<td align="center"><a href="#" onClick="Javascript:viewCats('<?php echo $this->_tpl_vars['Contact']['customer_id']; ?>
')"><?php echo $this->_tpl_vars['Contact']['material']; ?>
</a></td>
								<td align="center"><a href="#" onClick="Javascript:viewCats('<?php echo $this->_tpl_vars['Contact']['customer_id']; ?>
')"><?php echo $this->_tpl_vars['Contact']['labour']; ?>
</a></td>
								<td align="center"><a href="#" onClick="Javascript:viewCats('<?php echo $this->_tpl_vars['Contact']['customer_id']; ?>
')"><?php echo $this->_tpl_vars['Contact']['total_material']; ?>
</a></td>								
								<td align="center"><a href="#" onClick="Javascript:viewCats('<?php echo $this->_tpl_vars['Contact']['customer_id']; ?>
')"><?php echo $this->_tpl_vars['Contact']['total_labour']; ?>
</a></td>
								<td align="center"><a href="#" onClick="Javascript:viewCats('<?php echo $this->_tpl_vars['Contact']['customer_id']; ?>
')"><?php echo $this->_tpl_vars['Contact']['total']; ?>
</a></td>
								
							<td align="center"> &nbsp;&nbsp;&nbsp;&nbsp;<a href="#" onClick="Javascript:deleteCat('<?php echo $this->_tpl_vars['Contact']['sl_no']; ?>
','<?php echo $this->_supers['get']['revised_version']; ?>
','<?php echo $this->_supers['get']['service_quote_no']; ?>
','<?php echo $this->_tpl_vars['Contact']['total']; ?>
','<?php echo $this->_tpl_vars['Contact']['sub_total']; ?>
')"><i class="fa fa-trash"></i></a></td>	 
								
                    </tr>
					 <?php endforeach; else: ?>
					<tr>
								<td height="20" colspan="12" align="center"><img src="images/warning.gif" border="0">&nbsp;No Records Found</td>
					</tr>
					<?php endif; unset($_from); ?>
					</tbody>
                    </tfoot>
                  </table>
				 </form>
				 			 <?php echo '

    <script>
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
	  

function deleteCat(CatIdent,CusIdent,Service,Total,Sub){
  if(confirm("Are you sure to Delete this Content?")){
  FormName	= document.ServiceList;
   FormName.action= "service_revise.php?sl_no="+CatIdent+"&revised_version="+CusIdent+"&service_quote_no="+Service+"&total="+Total+"&sub_total="+Sub;
    FormName.submit();
 }
 }
     </script>
	<style>

table {
    /* make the border continuous (without gaps between columns) */
    border-collapse: collapse;
}
</style>
	'; ?>
 
				 </div>
                  </div>
					
</body>
                 
				  