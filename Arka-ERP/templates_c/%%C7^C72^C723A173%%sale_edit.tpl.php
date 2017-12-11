<?php /* Smarty version 2.6.25, created on 2017-11-30 16:51:22
         compiled from sale_edit.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'sale_edit.tpl', 370, false),)), $this); ?>
<?php echo $this->_tpl_vars['IncludeCSS']; ?>

<?php echo $this->_tpl_vars['IncludeJS']; ?>

<?php echo '
<script type="text/javascript" src=\'./dhtmlxMessage/codebase/dhtmlxmessage.js\'></script>
	<script type=\'text/javascript\' src=\'./auto-complete/jquery.metadata.js\'></script>
	<script type=\'text/javascript\' src=\'./auto-complete/jquery.auto-complete.js?<?= mktime() ?>\'></script>
	<script type=\'text/javascript\' src=\'./auto-complete/js.js?<?= mktime() ?>\'></script>
	<link rel="stylesheet" href= "./codebase/skins/dhtmlxmessage_dhx_skyblue.css" type="text/css" media="all"/> 
	<link rel=\'stylesheet\' type=\'text/css\' href=\'auto-complete/jquery.auto-complete.css?<?= mktime() ?>\' />
	<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css"/>
	<style>
	th {
    font-style: normal;
	font-weight:100;
	font-size:14px;
	margin-right:90px;
}
table { 
    border-spacing: 2px;
    border-collapse:collapse;
	
}
html, body {
	padding: 0;
	margin: 0;
	overflow: hidden;
}
#Sale {
	position: absolute;
	left: 0;
	top: 0;
	right: -30px;
	bottom: 0;	
	padding-right: 15px;
	overflow-y: scroll;
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
			//window.location.reload(true);
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
		
		var fields=["quote_date","payment","delivery","validity","item_type","item_category","item_code","unit_basic","quantity","vat_value","vat_per","sub_total","total"];
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
											
						if(i==3)
						{
						 var e = document.getElementById("item_type");
            var optionSelIndex = e.options[e.selectedIndex].value;
            var optionSelectedText = e.options[e.selectedIndex].text;
            if (optionSelIndex == 0) {
               dhtmlx.alert({
								title: "Error !",
								type:"alert-error",
								text: "Please Select Item Type",	
											});		
								return false;	
           					 }
						}
						

				}
			  FormName		= document.SalesReg;
  			  FormName.method	= "POST";
              FormName.submit();
		}
</script>
<script>
function getvalue()
{				
	var quantity = document.getElementById(\'quantity\').value;
					var unit1 = document.getElementById(\'unit_basic\').value;
					var cost = (quantity * unit1);
					var tax = document.getElementById(\'vat_per\').value;
					if(tax != " " )
					{
							var tax_value = (cost * tax)/100;
							var stotal = document.getElementById(\'sub_total\').value=cost;
							var tvalue = document.getElementById(\'vat_value\').value=tax_value;
							var tot = (stotal + +tvalue);
							document.getElementById(\'total\').value=Math.round(tot);
							
					}
					
}
</script>
<script>
function getvalue2()
{ 				
	var quantity = document.getElementById(\'quantity\').value;
					var unit1 = document.getElementById(\'unit_basic\').value;
					var cost = (quantity * unit1);
					var tax = document.getElementById(\'vat_per2\').value;
					if(tax != " " )
					{
							var tax_value = (cost * tax)/100;
							var stotal = document.getElementById(\'sub_total\').value=cost;
							var tvalue = document.getElementById(\'vat_value\').value=tax_value;
							var tot = (stotal + +tvalue);
							document.getElementById(\'total\').value=Math.round(tot);
					}
					
}
function getvalue4()
{
var pro_per = document.getElementById(\'profit_per\').value;
if(pro_per!="")
{
var item_base = document.getElementById(\'item_basic\').value;
var pro_tax=(item_base * pro_per)/100;
var pro_val = document.getElementById(\'profit_value\').value=pro_tax;
var tot = (+item_base + +pro_val);
document.getElementById(\'unit_basic\').value=Math.round(tot);
}
}
function getvalue3()
{ 				
	var quantity = document.getElementById(\'quantity\').value;
					var unit1 = document.getElementById(\'unit_basic\').value;
					var cost = (quantity * unit1);
					var tax = document.getElementById(\'vat_per3\').value;
					if(tax == "0" )
					{
							var tax_value = "0";
							var stotal = document.getElementById(\'sub_total\').value=cost;
							var tvalue = document.getElementById(\'vat_value\').value=tax_value;
							var tot = (stotal + +tvalue);
							document.getElementById(\'total\').value=Math.round(tot);
					}
					
}
/**************************************************************************/
function Fill_Add_of_Clr()
{

var product_desc=document.getElementById("product_desc").value;
//alert(product_desc);
var cnt_dtl_ary="";
//var customer_name =document.getElementById("").value
if (product_desc=="")
  {
  document.getElementById("item_code").value="";
  return;
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
	
	x=x.replace("|$|","");
	document.getElementById("hdn_add_dtls").value=x;
	var add_dtls_length=x.split("_").length;
	var add_dtls=x.split("_");
	//alert(cnt_dtls);
	
         document.getElementById("item_code").value=add_dtls[0];
		 document.getElementById("item_basic").value=add_dtls[1];
		 document.getElementById("item_category").value=add_dtls[2];
	   }
       
    }
  }
xmlhttp.open("GET","ajax_sale.php?product_desc="+product_desc,true);
xmlhttp.send();

}
/*************************************************************************************/

function Fill_Add_of_Clr1()
{

var material_name=document.getElementById("material_name").value;
//alert(material_name);
var cnt_dtl_ary="";
//var customer_name =document.getElementById("").value
if (material_name=="")
  {
  document.getElementById("item_code").value="";
  return;
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
	
	x=x.replace("|$|","");
	document.getElementById("hdn_add_dtls").value=x;
	var add_dtls_length=x.split("_").length;
	var add_dtls=x.split("_");
	//alert(cnt_dtls);
         document.getElementById("item_code").value=add_dtls[0];
		 document.getElementById("item_basic").value=add_dtls[1];
		 document.getElementById("item_category").value=add_dtls[2];
	   }
       
    }
  }
xmlhttp.open("GET","ajax_sale.php?material_name="+material_name,true);
xmlhttp.send();

}

/***************************************************************************************/
function Check()
{
var select = document.getElementById("item_type");
if(select.value == "0")
{
dhtmlx.alert({
			title: "Item Type",
			type:"alert-error",
			text: "Please Select Item Type"});
}
else
{

}
}
/****************************************************************************************/
function Event()
{
var select = document.getElementById("item_type");
if( select.value == "Product")
{
document.getElementById("product_desc").style.display = "inherit";
document.getElementById("material_name").style.display = "none";
}

else
{
document.getElementById("material_name").style.display = "inherit";
document.getElementById("product_desc").style.display = "none";
}
}
</script>

'; ?>

<body onLoad="doOnLoad();">
<div id="SalesEdit">

		<form class="form-horizontal" name="SalesReg"><body onLoad="doOnLoad();">
			<input type="hidden" name="hdAction" />
			
					<input type="hidden" id="mobile_fld_cnt" name="mobile_fld_cnt"  value="2"  >
					<input type="hidden" id="phone_fld_cnt" name="phone_fld_cnt"  value="2"  >
					<input type="hidden" id="email_fld_cnt" name="email_fld_cnt"  value="2"  >
					<input type="hidden" id="hdn_add_dtls" name="hdn_add_dtls" value="<?php echo $this->_supers['post']['hdn_add_dtls']; ?>
"  >
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
				<th class="col-sm-2 control-th">Quote No</th>
						<td class="col-sm-5">
						<input type="text" class="form-control" id="sales_quote_no" name="sales_quote_no" value="<?php echo $this->_supers['get']['sales_quote_no']; ?>
" placeholder="Sales Quote No" readonly="true" tabindex="1"/>
						<input type="hidden" id="revised_version" name="revised_version" value="<?php echo $this->_supers['get']['revised_version']; ?>
"/>
						<input type="hidden" id="enquiry_id" name="enquiry_id" value="<?php echo $this->_tpl_vars['RevDetail']['0']['enquiry_id']; ?>
"/>
						<input type="hidden" id="created_by" name="created_by" value="<?php echo $this->_tpl_vars['LDList2']['0']['created_by']; ?>
"/>

						</td>	
						<td class="col-sm-5">
						</td>
						<th class="col-sm-2 control-th">Quote Date</th>
						<td class="col-sm-5">
						<input type="text" class="form-control" id="quote_date" name="quote_date" placeholder="Quote Date" value="<?php echo $this->_tpl_vars['LDList2']['0']['quote_date']; ?>
" tabindex="2" readonly="true" autocomplete="Off"/>
						<input type="hidden" class="form-control" id="created_date" name="created_date" value="<?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d') : smarty_modifier_date_format($_tmp, '%Y-%m-%d')); ?>
">
						<input type="hidden" class="form-control" id="created_time" name="created_time" value="<?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%I:%M:%S %p') : smarty_modifier_date_format($_tmp, '%I:%M:%S %p')); ?>
">
						</td>
						<td class="col-sm-5">
						<a href="#"><img id="calendar_icon1" src="codebase/calendar.png"></a>
						</td>
						
						</tr>
						<tr class="form-group">
						<th class="col-sm-2 control-th">Payment</th>
						<td class="col-sm-5">
						<input type="text" class="form-control" id="payment" name="payment"  value="<?php echo $this->_tpl_vars['SaleTerm']['0']['payment']; ?>
" tabindex="3" autocomplete="Off"/>					
						</td>
						<td class="col-sm-5">
						</td>	
						<th class="col-sm-2 control-th">Delivery</th>
						<td class="col-sm-5">
						<input type="text"  class="form-control" id="delivery" name="delivery" value="<?php echo $this->_tpl_vars['SaleTerm']['0']['delivery']; ?>
" tabindex="4" autocomplete="Off"/>					
						</td>
						<td class="col-sm-5">
						</td>
						</tr>
						<tr class="form-group">	
						<th class="col-sm-2 control-th">Validity</th>
						<td class="col-sm-5">
						<input type="text"  class="form-control" id="validity" name="validity" value="<?php echo $this->_tpl_vars['SaleTerm']['0']['validity']; ?>
" tabindex="5" autocomplete="Off"/>					
						</td>
						<td class="col-sm-5">
						</td>
						 <th class="col-sm-2 control-th">Item Type</th>
						<td class="col-sm-5">
						<select id="item_type" name="item_type" class="form-control"  onChange="Event();" tabindex="6">
						<option value="0"> -- Select Item Type -- </option>	
						<option value="Product">Product</option>
						<option value="Material">Material</option>			
						</select> 
						</td>
						<td></tr>
						<tr class="form-group">
						<th class="col-sm-2 control-th">Product Desc</th>
						<td class="col-sm-5">
						<input type="text" class="form-control" id="product_desc" name="product_desc" placeholder="Product Desc" value="<?php echo $this->_supers['post']['product_desc']; ?>
" tabindex="7" onKeyUp="text_filter(this);" tabindex="11" onClick="Check();">
						<input type="text" class="form-control" id="material_name" name="material_name" placeholder="Material Name" value="<?php echo $this->_supers['post']['material_name']; ?>
" tabindex="8" onClick="Check();" onKeyUp="text_filter(this);" style="display:none">
						</td>
						<td><!--<font class="error" color="#f56954"><b>*</b></font>--></td>
						<th class="col-sm-2 control-th">Item Code</th>
						<td class="col-sm-5">
						<input type="text" class="form-control" id="item_code" name="item_code" placeholder="Item Code" tabindex="9" readonly="true" value="<?php echo $this->_supers['post']['item_code']; ?>
" onKeyUp="text_filter(this);" >
						<td><!--<font class="error" color="#f56954"><b>*</b></font>--></td>
						</td>
						</tr>
						<tr class="form-group">
						 <th class="col-sm-2 control-th">Item Category</th>
						<td class="col-sm-5">
						<input type="text" class="form-control" id="item_category" name="item_category" readonly="true" placeholder="Item Category" value="<?php echo $this->_supers['post']['item_category']; ?>
" tabindex="10" onKeyUp="text_filter(this);">
						<td><!--&nbsp;<font class="error" color="#f56954"><b>*</b></font>--></td>
						</td>				
						<th class="col-sm-2 control-th">Item Basic</th>
						<td class="col-sm-5">
						<input type="text" class="form-control" id="item_basic" name="item_basic" placeholder="Item Basic" tabindex="11" value="<?php echo $this->_supers['post']['item_basic']; ?>
" onKeyUp="numericFilter(this);getvalue()" autocomplete="Off">
						<td><!--<font class="error" color="#f56954"><b>*</b></font>--></td>
						</td>
						</tr>
						<tr class="form-group">
						<th class="col-sm-2 control-th">Profit %</th>
						<td class="col-sm-5">
						<input type="text" class="form-control" id="profit_per" name="profit_per" placeholder="Profit Per" tabindex="11" value="<?php echo $this->_supers['post']['profit_per']; ?>
" onKeyUp="numericFilter(this);getvalue4();" autocomplete="Off">
						<input type="hidden" class="form-control" id="profit_value" name="profit_value" placeholder="Profit Value" tabindex="11" value="<?php echo $this->_supers['post']['profit_value']; ?>
" onKeyUp="numericFilter(this);" autocomplete="Off">
						
						<td><!--<font class="error" color="#f56954"><b>*</b></font>--></td>
						</td>
						<th class="col-sm-2 control-th">Unit Basic</th>
						<td class="col-sm-5">
						<input type="text" class="form-control" id="unit_basic" name="unit_basic" placeholder="Unti Basic" tabindex="11" value="<?php echo $this->_supers['post']['unit_basic']; ?>
" onKeyUp="numericFilter(this);getvalue()" autocomplete="Off">
						<td><!--<font class="error" color="#f56954"><b>*</b></font>--></td>
						</td>
						</tr>
						<tr class="form-group">
						<th class="col-sm-2 control-th">Quantity</th>
						<td class="col-sm-5">
						<input type="text" class="form-control" id="quantity" name="quantity" placeholder="Quantity" tabindex="12" value="<?php echo $this->_supers['post']['quantity']; ?>
" onKeyUp="numericFilter(this);" autocomplete="Off">
						<td><!--<font class="error" color="#f56954"><b>*</b></font>--></td>
						</td>
						<th class="col-sm-2 control-th">Tax%</th>
						<td class="col-sm-5">
						  <input type="radio" name="vat_per"  onClick="getvalue();" value="5" id="vat_per" >&nbsp;&nbsp;5%&nbsp;
						  <input type="radio" name="vat_per"  onClick="getvalue2();" value="14.5" id="vat_per2" >&nbsp;&nbsp;14.5%&nbsp;
						  <input type="radio" name="vat_per"  onClick="getvalue3();" value="0" id="vat_per3" >&nbsp;&nbsp;0%
						</td>
						<td></td>
						</tr>
						<tr class="form-group">
						<th class="col-sm-2 control-th">Vat Value</th>
						<td class="col-sm-5">
						<input type="text" class="form-control" id="vat_value" name="vat_value" placeholder="Vat Value" value="<?php echo $this->_supers['post']['vat_value']; ?>
" onKeyUp="numericFilter(this);" autocomplete="Off" tabindex="14">
						<td><!--<font class="error" color="#f56954"><b>*</b></font>--></td>
						</td>
					<th class="col-sm-2 control-th">Sub Total</th>
						<td class="col-sm-5">
						<input type="text" class="form-control" id="sub_total" name="sub_total" placeholder="Sub Total" value="<?php echo $this->_supers['post']['sub_total']; ?>
" onKeyUp="numericFilter(this);" autocomplete="Off" tabindex="15">
						<td><!--<font class="error" color="#f56954"><b>*</b></font>--></td>
						</td>
						</tr>
						<tr class="form-group">
						<th class="col-sm-2 control-th">Total</th>
						<td class="col-sm-5">
						<input type="text" class="form-control" id="total" name="total" placeholder="Total" value="<?php echo $this->_supers['post']['total']; ?>
" onKeyUp="numericFilter(this);" autocomplete="Off" tabindex="16">
						<td><!--<font class="error" color="#f56954"><b>*</b></font>--></td>
						</td>
						<th class="col-sm-2 control-th">Remarks</th>
						<td class="col-sm-5">
					 <textarea class="form-control" id="remarks" name="remarks" value="<?php echo $this->_supers['post']['remarks']; ?>
" placeholder="Remarks" tabindex="17" autocomplete="off"></textarea> 
						</td>
		              </tr> 
</td>
</tr>
</table>
					
					<div class="box-footer" id="close">
					<center>
					<input type="button" class="btn btn-info pull-center" value="SUBMIT"  onClick="validate_fields();">
					</center>
					</div>
					</form>
					
					 
					 <div class="tab-pane" id="sales">
				<form name="SalesList" id="SalesList" method="post">
				<input type="hidden" id="sNo" name="sNo" value="<?php echo $this->_tpl_vars['sl_no']; ?>
">
                  <table id="example2" class="table table-bordered table-striped" style="font-size:13px;, Times, serif;">
                    <thead>
					<tr> 
					            <th>Sl No</th>
								<th>Product description</th>
								<th>Unit Basic </th>
								<th>Quantity</th>
								<th>Sub Total</th>
								<th>Tax%</th>
								<th>Vat Value</th>
								<th>Total</th>
								<th>Action</th>
								
					</tr>
                    </thead>
                    <tbody>
					
                     <?php $_from = $this->_tpl_vars['SelectList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['details_list']):
?>
					 
					<tr id="<?php echo $this->_tpl_vars['i']++; ?>
">
					<input type="hidden" value="<?php echo $this->_tpl_vars['details_list']['sales_quote_no']; ?>
">
					            <td align="center"><a href="#" onClick="Javascript:viewCats('<?php echo $this->_tpl_vars['details_list']['customer_id']; ?>
')"><?php echo $this->_tpl_vars['i']; ?>
</a></td>
								<td align="center"><a href="#" onClick="Javascript:viewCats('<?php echo $this->_tpl_vars['details_list']['customer_id']; ?>
')"><?php if ($this->_tpl_vars['details_list']['product_description'] != ""): ?><?php echo $this->_tpl_vars['details_list']['product_description']; ?>
<?php else: ?><?php echo $this->_tpl_vars['details_list']['material_description']; ?>
<?php endif; ?></a></td>
								<!--<td align="center"><a href="#" onClick="Javascript:viewCats('<?php echo $this->_tpl_vars['details_list']['customer_id']; ?>
')"><?php echo $this->_tpl_vars['details_list']['sales_quote_no']; ?>
</a></td>-->
								<td align="center"><a href="#" onClick="Javascript:viewCats('<?php echo $this->_tpl_vars['details_list']['customer_id']; ?>
')"><?php echo $this->_tpl_vars['details_list']['unit_basic']; ?>
</a></td>
								<td align="center"><a href="#" onClick="Javascript:viewCats('<?php echo $this->_tpl_vars['details_list']['customer_id']; ?>
')"><?php echo $this->_tpl_vars['details_list']['quantity']; ?>
</a></td>								
								<td align="center"><a href="#" onClick="Javascript:viewCats('<?php echo $this->_tpl_vars['details_list']['customer_id']; ?>
')"><?php echo $this->_tpl_vars['details_list']['sub_total']; ?>
</a></td>
								<td class="center"><a href="#" onClick="Javascript:viewCats('<?php echo $this->_tpl_vars['details_list']['customer_id']; ?>
')"><?php echo $this->_tpl_vars['details_list']['vat_per']; ?>
</a></td>
								<td class="center"><a href="#" onClick="Javascript:viewCats('<?php echo $this->_tpl_vars['details_list']['customer_id']; ?>
')"><?php echo $this->_tpl_vars['details_list']['vat_value']; ?>
</a></td>
								<td class="center"><a href="#" onClick="Javascript:viewCats('<?php echo $this->_tpl_vars['details_list']['customer_id']; ?>
')"><?php echo $this->_tpl_vars['details_list']['total']; ?>
</a></td>
								<td class="center">&nbsp;&nbsp; &nbsp;&nbsp;<a href="#" onClick="Javascript:deleteCat('<?php echo $this->_tpl_vars['details_list']['sl_no']; ?>
','<?php echo $this->_supers['get']['sales_quote_no']; ?>
','<?php echo $this->_supers['get']['revised_version']; ?>
','<?php echo $this->_tpl_vars['details_list']['enquiry_id']; ?>
','<?php echo $this->_tpl_vars['details_list']['total']; ?>
','<?php echo $this->_tpl_vars['details_list']['sub_total']; ?>
','<?php echo $this->_tpl_vars['details_list']['profit_per']; ?>
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
				 </form><!---finished----->
				
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
	  
  function deleteCat(CatIdent,CusIdent,Rev,Enq,Total,Sub,Pro){
  if(confirm("Are you sure to Delete this Content?")){
   
  FormName		= document.SalesList;
  FormName.action= "sale_edit.php?sl_no="+CatIdent+"&sales_quote_no="+CusIdent+"&revised_version="+Rev+"&enquiry_id="+Enq+"&total="+Total+"&sub_total="+Sub+"&pro="+Pro;
  FormName.submit();
 }
 }

     </script>
	'; ?>

</div>
</body>
</div>
                 
					

                 
				  