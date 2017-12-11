{$IncludeCSS}
{$IncludeJS}
{literal}
<script type="text/javascript" src='./dhtmlxMessage/codebase/dhtmlxmessage.js'></script>
	<script type='text/javascript' src='./auto-complete/jquery.metadata.js'></script>
	<script type='text/javascript' src='./auto-complete/jquery.auto-complete.js?<?= mktime() ?>'></script>
	<script type='text/javascript' src='./auto-complete/js.js?<?= mktime() ?>'></script>
	<link rel="stylesheet" href= "./codebase/skins/dhtmlxmessage_dhx_skyblue.css" type="text/css" media="all"/> 
	<link rel='stylesheet' type='text/css' href='auto-complete/jquery.auto-complete.css?<?= mktime() ?>' />
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
		
		var fields=["quote_date","payment","delivery","validity","item_type","item_code","unit_basic","quantity","vat_value","vat_per","sub_total","total"];
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
			  FormName		= document.SaleRev;
  			  FormName.method	= "POST";
              FormName.submit();
		}
</script>
<script>
function getvalue()
{				
	var quantity = document.getElementById('quantity').value;
					var unit1 = document.getElementById('unit_basic').value;
					var cost = (quantity * unit1);
					var tax = document.getElementById('vat_per').value;
					if(tax != " " )
					{
							var tax_value = (cost * tax)/100;
							var stotal = document.getElementById('sub_total').value=cost;
							var tvalue = document.getElementById('vat_value').value=tax_value;
							var tot = (stotal + +tvalue);
							document.getElementById('total').value=Math.round(tot);
							
					}
					
}
</script>
<script>
function getvalue2()
{ 				
	var quantity = document.getElementById('quantity').value;
					var unit1 = document.getElementById('unit_basic').value;
					var cost = (quantity * unit1);
					var tax = document.getElementById('vat_per2').value;
					if(tax != " " )
					{
							var tax_value = (cost * tax)/100;
							var stotal = document.getElementById('sub_total').value=cost;
							var tvalue = document.getElementById('vat_value').value=tax_value;
							var tot = (stotal + +tvalue);
							document.getElementById('total').value=Math.round(tot);
					}
					
}
function getvalue4()
{
var pro_per = document.getElementById('profit_per').value;
if(pro_per!="")
{
var item_base = document.getElementById('item_basic').value;
var pro_tax=(item_base * pro_per)/100;
var pro_val = document.getElementById('profit_value').value=pro_tax;
var tot = (+item_base + +pro_val);
document.getElementById('unit_basic').value=Math.round(tot);
}
}
function getvalue3()
{ 				
	var quantity = document.getElementById('quantity').value;
					var unit1 = document.getElementById('unit_basic').value;
					var cost = (quantity * unit1);
					var tax = document.getElementById('vat_per3').value;
					if(tax == "0" )
					{
							var tax_value = "0";
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

{/literal}
<body onLoad="doOnLoad();">
<div id="Revise">

		<form class="form-horizontal" name="SaleRev"><body onLoad="doOnLoad();">
			<input type="hidden" name="hdAction" />
			
					<input type="hidden" id="mobile_fld_cnt" name="mobile_fld_cnt"  value="2"  >
					<input type="hidden" id="phone_fld_cnt" name="phone_fld_cnt"  value="2"  >
					<input type="hidden" id="email_fld_cnt" name="email_fld_cnt"  value="2"  >
					<input type="hidden" id="hdn_add_dtls" name="hdn_add_dtls" value="{$smarty.post.hdn_add_dtls}"  >
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
					
<table class="col-md-6">

<tr class="form-group">
	<td class="col-sm-3">
		<tr class="form-group">	
				<th class="col-sm-2 control-th">Quote No</th>
					
						<td class="col-sm-5">
						<input type="text" class="form-control" id="sales_quote_no" name="sales_quote_no" value="{$smarty.get.sales_quote_no}" placeholder="Sales Quote No" readonly="true" tabindex="1"/>                  
						{foreach from=$SalesQuote item=Select}
						<input type="hidden" class="form-control" id="mobile_no" name="mobile_no" maxlength="10" value="{$Select.mobile_no}" >
						<input type="hidden" class="form-control" id="revised_version" name="revised_version" value="{$r_version}"  >
						<input type="hidden" class="form-control" id="enquiry_id" name="enquiry_id"  value="{$Select.enquiry_id}"  >
						<input type="hidden" class="form-control" id="email" name="email" value="{$Select.email_id}"  >
						<input type="hidden" class="form-control" id="customer_id" name="customer_id" value="{$Select.customer_id}"  >
						<input type="hidden" class="form-control" id="customer_name" name="customer_name" value="{$Select.customer_name}"  >
						<input type="hidden" class="form-control" id="company_name" name="company_name" value="{$Select.company_name}"  >
						<input type="hidden" class="form-control" id="salutation" name="salutation" value="{$Select.salutation}"  >
						<!--<input type="hidden" class="form-control" id="payment" name="payment" value="{$Select.payment}"  >
						<input type="hidden" class="form-control" id="delivery" name="delivery" value="{$Select.delivery}"  >
						<input type="hidden" class="form-control" id="validity" name="validity" value="{$Select.validity}"  >-->
						
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
						<input type="hidden" class="form-control" id="area" name="area" value="{$Select.area}" placeholder="Area" >
						
						{/foreach}
						</td>
						<td class="col-sm-5">
						<!--<font class="error" color="#f56954"><b>*</b>&nbsp;</font>-->
						</td>
						<th class="col-sm-2 control-th">Quote Date</th>
						<td class="col-sm-5">
						<input type="text" class="form-control" id="quote_date" name="quote_date" placeholder="Quote Date" value="{$Select.quote_date}" tabindex="3" readonly="true"/>
						<input type="hidden" class="form-control" id="timestamp" name="timestamp" value="{$smarty.now|date_format:'%Y-%m-%d &amp; %I:%M:%S %p'}">
						
						</td>
						<td class="col-sm-5">
						<a href="#"><img id="calendar_icon1" src="codebase/calendar.png"></a><!--<font class="error" color="#f56954"><b>*</b>&nbsp;</font>-->
						</td>
						
						</tr>
						
						<tr class="form-group">
						<th class="col-sm-2 control-th">Rev Ver</th>
						<td class="col-sm-5">
						<input type="text" class="form-control" id="revised_version" name="revised_version"  value="{$r_version}" readonly="true" tabindex="2">
						<td><!--&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>--></td>
						</td>
						
						<th class="col-sm-2 control-th">Payment</th>
						<td class="col-sm-5">
						<input type="text" class="form-control" id="payment" name="payment" placeholder="ex :  50%" autocomplete="off" tabindex="4" value="{$RevTerm.0.payment}"/>					
						</td>
						<td class="col-sm-5">
						<!--<font class="error" color="#f56954"><b>*</b>&nbsp;</font>-->
						</td>
						</tr>
						<tr class="form-group">	
						<th class="col-sm-2 control-th">Delivery</th>
						<td class="col-sm-5">
						<input type="text" class="form-control" id="delivery" name="delivery"  placeholder="ex : 2 to 3" autocomplete="off" tabindex="5" value="{$RevTerm.0.delivery}"/>					
						</td>
						<td class="col-sm-5">
						<!--<font class="error" color="#f56954"><b>*</b>&nbsp;</font>-->
						</td>
						<th class="col-sm-2 control-th">Validity</th>
						<td class="col-sm-5">
						<input type="text" class="form-control" id="validity" name="validity"  placeholder="ex : 30" autocomplete="off" tabindex="6" value="{$RevTerm.0.validity}"/>					
						</td>
						<td class="col-sm-5">
						<!--<font class="error" color="#f56954"><b>*</b>&nbsp;</font>-->
						</td>
						</tr>
						<tr class="form-group">
						<th class="col-sm-2 control-th">Product Desc</th>

						<td class="col-sm-5">
						<input type="text" class="form-control" id="product_desc" name="product_desc" placeholder="Product Desc" value="{$smarty.post.product_desc}" onChange="split_cnt_dtls(this.value);"  tabindex="8" onKeyUp="text_filter(this);" onClick="Check();" onKeyPress="doOnload();">
						
						<input type="text" class="form-control" id="material_name" name="material_name" placeholder="Material Name" value="{$smarty.post.material_name}" onChange="split_cnt_dtls1(this.value);"  tabindex="8" onKeyUp="text_filter(this);" style="display:none" onClick="Check();">
						</td>
						<td><!--&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>--></td>
		 				 <th class="col-sm-2 control-th">Item Type</th>
						<td class="col-sm-5">
						<select id="item_type" name="item_type" class="form-control" tabindex="7" onChange="Event();" >
						<option value="0"> -- Select Item Type -- </option>	
						<option value="Product">Product</option>
						<option value="Material">Material</option>			
						</select> 
						<td><!--&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>--></td>
						</td>
						
						</tr>
						<tr class="form-group">
						<th class="col-sm-2 control-th">Item Code</th>
						<td class="col-sm-5">
						<input type="text" class="form-control" id="item_code" name="item_code" autocomplete="off" tabindex="9" value="{$smarty.post.item_code}" onKeyUp="text_filter(this);" readonly="true">
						<td><!--&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>--></td>
						</td>

						<th class="col-sm-2 control-th">Item Basic</th>
						<td class="col-sm-5">
						<input type="text" class="form-control" id="item_basic" name="item_basic" placeholder="Item Basic" tabindex="11" value="{$smarty.post.item_basic}" onKeyUp="numericFilter(this);getvalue()" autocomplete="Off">
						<td><!--<font class="error" color="#f56954"><b>*</b></font>--></td>
						</td>
						</tr>
						<tr class="form-group">
						<th class="col-sm-2 control-th">Profit %</th>
						<td class="col-sm-5">
						<input type="text" class="form-control" id="profit_per" name="profit_per" placeholder="Profit Per" tabindex="11" value="{$smarty.post.profit_per}" onKeyUp="numericFilter(this);getvalue4();" autocomplete="Off">
						<input type="hidden" class="form-control" id="profit_value" name="profit_value" placeholder="Profit Value" tabindex="11" value="{$smarty.post.profit_value}" onKeyUp="numericFilter(this);" autocomplete="Off">
						
						<td><!--<font class="error" color="#f56954"><b>*</b></font>--></td>
						</td>
						<th class="col-sm-2 control-th">Unit Basic</th>
						<td class="col-sm-5">
						<input type="text" class="form-control" id="unit_basic" name="unit_basic" placeholder="Unti Basic" tabindex="11" value="{$smarty.post.unit_basic}" onKeyUp="numericFilter(this);getvalue()" autocomplete="Off">
						<td><!--<font class="error" color="#f56954"><b>*</b></font>--></td>
						</td>
						</tr>
						<tr class="form-group">
						<th class="col-sm-2 control-th">Quantity</th>
						<td class="col-sm-5">
						<input type="text" class="form-control" id="quantity" name="quantity" placeholder="Quantity" tabindex="12" value="{$smarty.post.quantity}" onKeyUp="numericFilter(this);" autocomplete="Off">
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
					 	<input type="hidden" class="form-control" id="created_date" name="created_date" value="{$smarty.now|date_format:'%Y-%m-%d'}">
						<input type="hidden" class="form-control" id="created_time" name="created_time" value="{$smarty.now|date_format:'%I:%M:%S %p'}">
						</td>
		              </tr> 
</td>
</tr>
</table>
					</body>
					
					<div class="box-footer">
					<center>
					<input type="button" class="btn btn-info pull-center" value="SUBMIT" onClick="validate_fields();">&nbsp;&nbsp;
					</center>
					</div>
				</form>
				<form class="form-horizontal" name="SalesRevise" id="SalesRevise" method="post" >
 					<div class="tab pane">
					<table id="example2" class="table table-bordered table-striped" style="font-size:13px; font-family:'Times New Roman', Times, serif;">
                    <thead>
					<tr>
					            <th><center>Sl No</center></th>
								<th><center>Item Name</center></th>
								<th><center>Unit Basic</center></th>
								<th><center>Quantity</center></th>
								<th><center>SubTotal</center></th>
								<th><center>Total</center></th>
								<th><center>Action</center></th>
						      
					</tr>
                    </thead>							
                    <tbody>
                     {foreach from=$SelectList item=Contact}
					<tr id="{$i++}">        
					<input type="hidden" value="{$Contact.sl_no}" />
								<input type="hidden" value="{$Contact.sales_quote_no}" />
					            <td align="center"><a href="#" onClick="Javascript:viewCats('{$Contact.enquiry_id}')">{$i}</a></td>
								<td align="center"><a href="#" onClick="Javascript:viewCats('{$Contact.enquiry_id}')">{if $Contact.product_description neq ""}{$Contact.product_description}{else}{$Contact.material_description}{/if}</a></td>
								
								<td align="center"><a href="#" onClick="Javascript:viewCats('{$Contact.enquiry_id}')">{$Contact.unit_basic}</a></td>
								<td align="center"><a href="#" onClick="Javascript:viewCats('{$Contact.enquiry_id}')">{$Contact.quantity}</a></td>
								<td align="center"><a href="#" onClick="Javascript:viewCats('{$Contact.enquiry_id}')">{$Contact.sub_total}</a></td>
								<td align="center"><a href="#" onClick="Javascript:viewCats('{$Contact.enquiry_id}')">{$Contact.total}</a></td>						
								 <td align="center"> &nbsp;&nbsp;&nbsp;&nbsp;<a href="#" onClick="Javascript:deleteCat('{$Contact.sl_no}','{$smarty.get.revised_version}','{$smarty.get.sales_quote_no}','{$Contact.total}','{$Contact.sub_total}','{$Contact.profit_per}')"><i class="fa fa-trash"></i></a></td>
								
                    </tr>
					
					 
					  {foreachelse}
					<tr>
								<td height="20" colspan="12" align="center"><img src="images/warning.gif" border="0">&nbsp;No Records Found</td>
					</tr>
					{/foreach}
					</tbody>
                    </tfoot>
                  </table>
				  </div>
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
	  
  function deleteCat(CatIdent,CusIdent,Sale,Total,Sub,Pro){
  if(confirm("Are you sure to Delete this Content?")){
  FormName	= document.SalesRevise;
   FormName.action= "sale_revise.php?sl_no="+CatIdent+"&revised_version="+CusIdent+"&sales_quote_no="+Sale+"&total="+Total+"&sub_total="+Sub+"&pro="+Pro;
    FormName.submit();
 }
 }
 function viewCats(CusIdent) {
    
  FormName		= document.SalesRevise;
  FormName.action ='enquiry_detail_view.php?enquiry_id='+CusIdent;          
  FormName.submit();

 }
    </script>
	{/literal}
	</div>
	</body>
	</div>
