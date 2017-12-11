{$IncludeCSS}
{$IncludeJS}
{literal}
<script type="text/javascript" src='./dhtmlxMessage/codebase/dhtmlxmessage.js'></script>
	<!--<script type='text/javascript' src='./auto-complete/jquery-1.3.2.js'></script>-->
	<script type='text/javascript' src='./auto-complete/jquery.metadata.js'></script>
	<script type='text/javascript' src='./auto-complete/jquery.auto-complete.js?<?= mktime() ?>'></script>
	<script type='text/javascript' src='./auto-complete/js.js?<?= mktime() ?>'></script>
	<link rel="stylesheet" href= "./codebase/skins/dhtmlxmessage_dhx_skyblue.css" type="text/css" media="all"/> 
	<link rel='stylesheet' type='text/css' href='auto-complete/jquery.auto-complete.css?<?= mktime() ?>' />
	<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css"/>
	<!--<link rel="stylesheet" href="'https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
	<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css"/>-->
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
			myCalendar = new dhtmlXCalendarObject({input: "quote_date", button: "calendar_icon1"});
			retrieve_select_bxs();
			window.location.reload(true);
		}
		function doReLoad() 
		{
		 var mypopup = window.open("http://192.168.1.222/arkaerp/enquiry_detail_view.php","Add Sales Quote");
         mypopup.location.reload(); 
		}

function runMe()
{
 document.cookie = name+"=index%3d1; expires=whenever;path=/";
 window.history.back()
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
{					var quantity = document.getElementById('quantity').value;
					var unit1 = document.getElementById('unit_basic').value;
					var cost = (quantity * unit1);
					var tax = document.getElementById('vat_per').value;
					if(tax != "")
					{
							var tax_value = (cost * tax)/100;
							var stotal = document.getElementById('sub_total').value=cost;
							var tvalue = document.getElementById('vat_value').value=tax_value;
							var tot = (stotal + +tvalue);
							document.getElementById('total').value=Math.round(tot);
					}
					
}
function getvalue2()
{					var quantity = document.getElementById('quantity').value;
					var unit1 = document.getElementById('unit_basic').value;
					var cost = (quantity * unit1);
					var tax = document.getElementById('vat_per2').value;
					if(tax != "")
					{
							var tax_value = (cost * tax)/100;
							var stotal = document.getElementById('sub_total').value=cost;
							var tvalue = document.getElementById('vat_value').value=tax_value;
							var tot = (stotal + +tvalue);
							document.getElementById('total').value=Math.round(tot);
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
		 document.getElementById("unit_basic").value=add_dtls[1];
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
		 document.getElementById("unit_basic").value=add_dtls[1];
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

{/literal}
<!--<head>
<meta http-equiv="refresh" content="10">
</head>-->
<body onLoad="doOnLoad();">
<div id="Sale">

		<form class="form-horizontal" name="SalesReg">
			<input type="hidden" name="hdAction" />
			
					<input type="hidden" id="mobile_fld_cnt" name="mobile_fld_cnt"  value="2"  >
					<input type="hidden" id="phone_fld_cnt" name="phone_fld_cnt"  value="2"  >
					<input type="hidden" id="email_fld_cnt" name="email_fld_cnt"  value="2"  >
					<input type="hidden" id="hdn_add_dtls" name="hdn_add_dtls" value=""  >
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
				<th class="col-sm-2 control-th">Quote No</th>
					
						<td class="col-sm-5">
						<input type="text" class="form-control" id="sales_quote_no" name="sales_quote_no" value="{$s_quote}" placeholder="Sales Quote No" readonly="true" tabindex="1"/>                  
						{if $SelectList neq ""}
						{foreach from=$LDList2 item=Select}
						<input type="hidden" class="form-control" id="mobile_no" name="mobile_no" maxlength="10" value="{$Select.mobile_no}" >
						<input type="hidden" class="form-control" id="revised_version" name="revised_version" value="{$r_version}">
						<input type="hidden" class="form-control" id="enquiry_id" name="enquiry_id"  value="{$Select.enquiry_id}"  >
						<input type="hidden" class="form-control" id="customer_id" name="customer_id"  value="{$Select.customer_id}"  >
						<input type="hidden" class="form-control" id="email" name="email" value="{$Select.email_id}"  >
						<input type="hidden" class="form-control" id="email1" name="email1" value="{$Select.email_id1}"  >
						<input type="hidden" class="form-control" id="area_code" name="area_code" value="{$Select.area_code}" >
						<input type="hidden" class="form-control" id="phone_no" name="phone_no" value="{$Select.phone_no}"  >
						<input type="hidden" class="form-control" id="extension" name="extension" value="{$Select.extension}"  >
						<input type="hidden" class="form-control" id="address" name="address" value="{$Select.address}" >
						<input type="hidden" class="form-control" id="address1" name="address1" value="{$Select.address1}" >
						<input type="hidden" class="form-control" id="landmark" name="landmark" value="{$Select.landmark}">
						<input type="hidden" class="form-control" id="city" name="city" value="{$Select.city}">
						<input type="hidden" class="form-control" id="pincode" name="pincode" value="{$Select.pincode}" >
						<input type="hidden" class="form-control" id="created_by" name="created_by" tabindex="25"  value="{$smarty.session.UserName}">
						<input type="hidden" class="form-control" id="company_name" name="company_name" value="{$Select.company_name}" >
						<input type="hidden" class="form-control" id="contact_name" name="contact_name"  value="{$Select.customer_name}">
						<input type="hidden" class="form-control" id="area" name="area" value="{$Select.area}" placeholder="Area" >
						<input type="hidden" class="form-control" id="salutation" name="salutation" value="{$Select.salutation}" >
						 {/foreach}
						 {/if}
						 {if $SelectList eq ""}
						 
						<input type="hidden" class="form-control" id="mobile_no" name="mobile_no" maxlength="10" value="{$Select.mobile_no}" >
						<input type="hidden" class="form-control" id="revised_version" name="revised_version" value="{$r_version}"  >
						<input type="hidden" class="form-control" id="enquiry_id" name="enquiry_id"  value="{$Select.enquiry_id}"  >
						<input type="hidden" class="form-control" id="customer_id" name="customer_id"  value="{$Select.customer_id}"  >
						<input type="hidden" class="form-control" id="email" name="email" value="{$Select.email_id}"  >
						<input type="hidden" class="form-control" id="email1" name="email1" value="{$Select.email_id1}"  >
						<input type="hidden" class="form-control" id="area_code" name="area_code" value="{$Select.area_code}" >
						<input type="hidden" class="form-control" id="phone_no" name="phone_no" value="{$Select.phone_no}"  >
						<input type="hidden" class="form-control" id="extension" name="extension" value="{$Select.extension}"  >
						<input type="hidden" class="form-control" id="address" name="address" value="{$Select.address}" >
						<input type="hidden" class="form-control" id="address1" name="address1" value="{$Select.address1}" >
						<input type="hidden" class="form-control" id="landmark" name="landmark" value="{$Select.landmark}">
						<input type="hidden" class="form-control" id="city" name="city" value="{$Select.city}">
						<input type="hidden" class="form-control" id="pincode" name="pincode" value="{$Select.pincode}" >
						<input type="hidden" class="form-control" id="created_by" name="created_by" tabindex="25"  value="{$smarty.session.UserName}">
						<input type="hidden" class="form-control" id="company_name" name="company_name" value="{$Select.company_name}" >
						<input type="hidden" class="form-control" id="contact_name" name="contact_name"  value="{$Select.customer_name}">
						<input type="hidden" class="form-control" id="area" name="area" value="{$Select.area}" placeholder="Area" >
						<input type="hidden" class="form-control" id="salutation" name="salutation" value="{$Select.salutation}" >

						 {/if}
						</td>
						
						<td>
						<!--<font class="error" color="#f56954"><b>*</b></font>-->
						</td>
						<th class="col-sm-2 control-th">Quote Date</th>
						<td class="col-sm-5">
			<input type="text" class="form-control" id="quote_date" name="quote_date" placeholder="Quote Date" value="{$LDList2.0.quote_date}" tabindex="2" readonly="true" />
						<input type="hidden" class="form-control" id="timestamp" name="timestamp" value="{$smarty.now|date_format:'%Y-%m-%d &amp; %I:%M:%S %p'}">
						<input type="hidden" class="form-control" id="created_date" name="created_date" value="{$smarty.now|date_format:'%Y-%m-%d'}">
						<input type="hidden" class="form-control" id="created_time" name="created_time" value="{$smarty.now|date_format:'%I:%M:%S %p'}">
						</td>
						<td >
						<a href="#"><img id="calendar_icon1" src="codebase/calendar.png"></a><!--<font class="error" color="#f56954"><b>*</b></font>-->
						</td>
						</tr>
						<tr class="form-group">
						<th class="col-sm-2 control-th">Payment</th>
						<td class="col-sm-5">
						<input type="text" class="form-control" id="payment" name="payment" placeholder="ex :  50%" autocomplete="off" value="{$SaleTerm.0.payment}" tabindex="3"/>					
						</td>
						<td class="col-sm-5">
						<!--<font class="error" color="#f56954"><b>*</b>&nbsp;</font>-->
						</td>	
						<th class="col-sm-2 control-th">Delivery</th>
						<td class="col-sm-5">
						<input type="text" class="form-control" id="delivery" name="delivery"  placeholder="ex : 2 to 3" autocomplete="off" value="{$SaleTerm.0.delivery}" tabindex="4"/>					
						</td>
						<td class="col-sm-5">
						<!--<font class="error" color="#f56954"><b>*</b>&nbsp;</font>-->
						</td>
						</tr>
						<tr class="form-group">
						<th class="col-sm-2 control-th">Validity</th>
						<td class="col-sm-5">
						<input type="text" class="form-control" id="validity" name="validity"  placeholder="ex : 30" autocomplete="off" value="{$SaleTerm.0.validity}" tabindex="5"/>					
						</td>
						<td class="col-sm-5">
						<!--<font class="error" color="#f56954"><b>*</b>&nbsp;</font>-->
						</td>
		 				 <th class="col-sm-2 control-th">Item Type</th>
						<td class="col-sm-5">
						<select id="item_type" name="item_type" class="form-control"  onChange="Event();" tabindex="6">
						<option value="0"> -- Select Item Type -- </option>	
						<option value="Product">Product</option>
						<option value="Material">Material</option>			
						</select> 
						</td>
						<td><!--<font class="error" color="#f56954"><b>*</b></font>--></td>
						</tr>
						<tr class="form-group">
						<th class="col-sm-2 control-th">Product Desc</th>
						<td class="col-sm-5">
						<input type="text" class="form-control" id="product_desc" name="product_desc" placeholder="Product Desc" value="{$smarty.post.product_desc}" tabindex="7" onKeyUp="text_filter(this);" tabindex="11" onClick="Check();">
						<input type="text" class="form-control" id="material_name" name="material_name" placeholder="Material Name" value="{$smarty.post.material_name}" tabindex="8" onClick="Check();" onKeyUp="text_filter(this);" style="display:none">
						</td>
						<td><!--<font class="error" color="#f56954"><b>*</b></font>--></td>
						<th class="col-sm-2 control-th">Item Code</th>
						<td class="col-sm-5">
						<input type="text" class="form-control" id="item_code" name="item_code" placeholder="Item Code" tabindex="9" readonly="true" value="{$smarty.post.item_code}" onKeyUp="text_filter(this);" tabindex="15">
						<td><!--<font class="error" color="#f56954"><b>*</b></font>--></td>
						</td>
						</tr>
						<tr class="form-group">
						 <th class="col-sm-2 control-th">Item Category</th>
						<td class="col-sm-5">
						<input type="text" class="form-control" id="item_category" name="item_category" readonly="true" placeholder="Item Category" value="{$smarty.post.item_category}" tabindex="10" onKeyUp="text_filter(this);">
						<td><!--&nbsp;<font class="error" color="#f56954"><b>*</b></font>--></td>
						</td>				
						<th class="col-sm-2 control-th">Unit Basic</th>
						<td class="col-sm-5">
						<input type="text" class="form-control" id="unit_basic" name="unit_basic" placeholder="Unti Basic" tabindex="11" value="{$smarty.post.unit_basic}" onKeyUp="numericFilter(this);getvalue()" readonly="true">
						<td><!--<font class="error" color="#f56954"><b>*</b></font>--></td>
						</td>
						</tr>
						<tr class="form-group">
						<th class="col-sm-2 control-th">Quantity</th>
						<td class="col-sm-5">
						<input type="text" class="form-control" id="quantity" name="quantity" placeholder="Quantity" tabindex="12" value="{$smarty.post.quantity}" onKeyUp="numericFilter(this);getvalue()" autocomplete="Off">
						<td><!--<font class="error" color="#f56954"><b>*</b></font>--></td>
						</td>
						<th class="col-sm-2 control-th">Tax%</th>
						<td class="col-sm-5">
						<!--<input type="checkbox" id="vat_per" name="vat_per" value="{$smarty.post.vat_per}" onSelect="getvalue();" tabindex="13">&nbsp;(2%)
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="checkbox" id="vat_per2" name="vat_per2" value="{$smarty.post.vat_per2}" onSelect="getvalue2();" tabindex="13">&nbsp;(14.5%)
						</td>-->
						<input type="text" class="form-control" id="vat_per" name="vat_per" placeholder="vat Per" tabindex="13" value="{$smarty.post.vat_per}" onKeyUp="numericFilter(this);getvalue()" autocomplete="Off">
						<td><!--<font class="error" color="#f56954"><b>*</b></font>--></td>
						</td>
						</tr>
						<tr class="form-group">
						<th class="col-sm-2 control-th">Vat Value</th>
						<td class="col-sm-5">
						<input type="text" class="form-control" id="vat_value" name="vat_value" placeholder="Vat Value" value="{$smarty.post.vat_value}" onKeyUp="numericFilter(this);" autocomplete="Off" tabindex="14">
						<td><!--<font class="error" color="#f56954"><b>*</b></font>--></td>
						</td>
					<th class="col-sm-2 control-th">Sub Total</th>
						<td class="col-sm-5">
						<input type="text" class="form-control" id="sub_total" name="sub_total" placeholder="Sub Total" value="{$smarty.post.sub_total}" onKeyUp="numericFilter(this);" autocomplete="Off" tabindex="15">
						<td><!--<font class="error" color="#f56954"><b>*</b></font>--></td>
						</td>
						</tr>
						<tr class="form-group">
						<th class="col-sm-2 control-th">Total</th>
						<td class="col-sm-5">
						<input type="text" class="form-control" id="total" name="total" placeholder="Total" value="{$smarty.post.total}" onKeyUp="numericFilter(this);" autocomplete="Off" tabindex="16">
						<td><!--<font class="error" color="#f56954"><b>*</b></font>--></td>
						</td>
						<th class="col-sm-2 control-th">Remarks</th>
						<td class="col-sm-5">
					 <textarea class="form-control" id="remarks" name="remarks" value="{$smarty.post.remarks}" placeholder="Remarks" tabindex="17" autocomplete="off"></textarea> 
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
				<input type="hidden" id="sNo" name="sNo" value="{$sl_no}">
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
					
                     {foreach from=$SelectList item=details_list}
					 
					<tr id="{$i++}">
					<input type="hidden" value="{$details_list.sales_quote_no}">
					            <td align="center"><a href="#" onClick="Javascript:viewCats('{$details_list.customer_id}')">{$i}</a></td>
								<td align="center"><a href="#" onClick="Javascript:viewCats('{$details_list.customer_id}')">{$details_list.product_description}</a></td>
								<!--<td align="center"><a href="#" onClick="Javascript:viewCats('{$details_list.customer_id}')">{$details_list.sales_quote_no}</a></td>-->
								<td align="center"><a href="#" onClick="Javascript:viewCats('{$details_list.customer_id}')">{$details_list.unit_basic}</a></td>
								<td align="center"><a href="#" onClick="Javascript:viewCats('{$details_list.customer_id}')">{$details_list.quantity}</a></td>								
								<td align="center"><a href="#" onClick="Javascript:viewCats('{$details_list.customer_id}')">{$details_list.sub_total}</a></td>
								<td class="center"><a href="#" onClick="Javascript:viewCats('{$details_list.customer_id}')">{$details_list.vat_per}</a></td>
								<td class="center"><a href="#" onClick="Javascript:viewCats('{$details_list.customer_id}')">{$details_list.vat_value}</a></td>
								<td class="center"><a href="#" onClick="Javascript:viewCats('{$details_list.customer_id}')">{$details_list.total}</a></td>
								<td class="center">&nbsp;&nbsp; &nbsp;&nbsp;<a href="#" onClick="Javascript:deleteCat('{$details_list.sl_no}','{$smarty.get.sales_quote_no}','{$smarty.get.revised_version}','{$details_list.enquiry_id}','{$details_list.total}','{$details_list.sub_total}')"><i class="fa fa-trash"></i></a></td>
								
                    </tr>
					 {foreachelse}
					<tr>
								<td height="20" colspan="12" align="center"><img src="images/warning.gif" border="0">&nbsp;No Records Found</td>
					</tr>
					{/foreach}
					</tbody>
                    </tfoot>
                  </table>
				 </form><!---finished----->
				
				 {literal}

    <script>
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
	  
  function deleteCat(CatIdent,CusIdent,Rev,Enq,Total,Sub){
  if(confirm("Are you sure to Delete this Content?")){
   
  FormName		= document.SalesList;
  FormName.action= "sales.php?sl_no="+CatIdent+"&sales_quote_no="+CusIdent+"&revised_version="+Rev+"&enquiry_id="+Enq+"&total="+Total+"&sub_total="+Sub;
  FormName.submit();
 }
 }

 function viewCats(CusIdent) {
    
  FormName		= document.SalesList;
  FormName.action ='service.php?customer_id='+CusIdent;          
  FormName.submit();

 }
    </script>
	{/literal}
</div>
</body>
</div>
                 
					

                 
				  