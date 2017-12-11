{$IncludeCSS}
{$IncludeJS}
{literal}
<script type="text/javascript" src='./dhtmlxMessage/codebase/dhtmlxmessage.js'></script>
	<script type='text/javascript' src='./auto-complete/jquery-1.3.2.js'></script>
	<script type='text/javascript' src='./auto-complete/jquery.metadata.js'></script>
	<script type='text/javascript' src='./auto-complete/jquery.auto-complete.js?<?= mktime() ?>'></script>
	<script type='text/javascript' src='./auto-complete/js.js?<?= mktime() ?>'></script>
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
    border-collapse: separate;
}
td
{ padding:10px;
}
html, body {
	padding: 0;
	margin: 0;
	overflow: hidden;
}
#SaleViews {
	position: absolute;
	left: 0;
	top: 0;
	right: -30px;
	bottom: 0;	
	padding-right: 15px;
	overflow-y: scroll;
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
.col-sm-4
{
width:30%;
}
.col-sm-2
{
 width:20%;
 margin-left:10%;
 font-weight:100;
 font-size:14px;
 font-style:normal;
}

</style>

{/literal}

	<body  class="hold-transition skin-blue sidebar-mini">
	<div id="SaleViews">
		<form class="form-horizontal" name="add_contact">
			<input type="hidden" name="hdAction" />
			<input type="hidden" id="customer_id" name="customer_id"  value="{$smarty.get.customer_id}"  >
			
					<input type="hidden" id="mobile_fld_cnt" name="mobile_fld_cnt"  value="2"  >
					<input type="hidden" id="phone_fld_cnt" name="phone_fld_cnt"  value="2"  >
					<input type="hidden" id="email_fld_cnt" name="email_fld_cnt"  value="2"  >
					<input type="hidden" id="hdn_salutation" name="hdn_salutation" value="{$Contact.salutaion}">
					<input type="hidden" id="hdn_order_status" name="hdn_order_status" value="{$Contact.order_status}">
					<input type="hidden" id="hdn_customer_status" name="hdn_customer_status" value="{$Contact.customer_status}">
					<input type="hidden" id="hdn_customer_type" name="hdn_customer_type" value="{$Contact.customer_type}">
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
				    <input type="hidden" value="{$Edit.sl_no}" />
					<input type="hidden" id="c_name" name="c_name" value="{$Edit.customer_id}"/>
				   {foreach from=$ProList2 item=Edit}
				  	
					<tr class="form-group">			 
                        <th class="col-sm-4 control-th" style="font-weight:bold;">Po No</th>
                      <td class="col-sm-2">
                       {$Edit.po_no}
                   </td>
                        <th class="col-sm-4 control-th" style="font-weight:bold;">Created Date</th>
                       <td class="col-sm-2">
                        {$Edit.created_date}																	
                     </td>
					 </tr>
                   
						<tr class="form-group">			 
                        <th class="col-sm-4 control-th" style="font-weight:bold;">Item Code</th>
                      <td class="col-sm-2">
                       {$Edit.item_code}
                   </td>
                        <th class="col-sm-4 control-th" style="font-weight:bold;">Item Name</th>
                       <td class="col-sm-2">
                         {$Edit.item_name}																	
                     </td>
					 </tr>
					 
					 <tr class="form-group">			 
                        <th class="col-sm-4 control-th" style="font-weight:bold;">Item Type</th>
                      <td class="col-sm-2">
                       {$Edit.item_type}
                   </td>
                        <th class="col-sm-4 control-th" style="font-weight:bold;">Item Spec</th>
                       <td class="col-sm-2">
                           {$Edit.item_specification}																
                     </td>
					</tr>
						 <tr class="form-group">			 
                        <th class="col-sm-4 control-th" style="font-weight:bold;">Per Price</th>
                      <td class="col-sm-2">
                       {$Edit.item_price}
                   </td>
                        <th class="col-sm-4 control-th" style="font-weight:bold;">Quantity</th>
                       <td class="col-sm-2">
                           {$Edit.item_quantity}																
                     </td>
					</tr>
					 <tr class="form-group">			 
                        <th class="col-sm-4 control-th" style="font-weight:bold;">ITem %</th>
                      <td class="col-sm-2">
                       {$Edit.item_tax_per}
                   </td>
                        <th class="col-sm-4 control-th" style="font-weight:bold;">ITem % value</th>
                       <td class="col-sm-2">
                           {$Edit.item_tax_value}																
                     </td>
					</tr>
					 <tr class="form-group">			 
                        <th class="col-sm-4 control-th" style="font-weight:bold;">Sub Total</th>
                      <td class="col-sm-2">
                       {$Edit.item_sub}
                   </td>
                        <th class="col-sm-4 control-th" style="font-weight:bold;">Total</th>
                       <td class="col-sm-2">
                           {$Edit.item_total_price}																
                     </td>
					</tr>
					
					{/foreach}
					</table>
				<br>
<br>

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

</script>
{/literal} 
				 
					</form>
				  </div>
				 </body>