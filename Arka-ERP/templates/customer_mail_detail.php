{include file="left.tpl"}
{literal}
	<script type="text/javascript" src='./dhtmlxMessage/codebase/dhtmlxmessage.js'></script>
	<script type='text/javascript' src='./auto-complete/jquery.metadata.js'></script>
	<script type='text/javascript' src='./auto-complete/jquery.auto-complete.js?<?= mktime() ?>'></script>
	<script type='text/javascript' src='./auto-complete/js.js?<?= mktime() ?>'></script>
	<link rel="stylesheet" href= "./codebase/skins/dhtmlxmessage_dhx_skyblue.css" type="text/css" media="all"/> 
	<link rel='stylesheet' type='text/css' href='auto-complete/jquery.auto-complete.css?<?= mktime() ?>' />
	<style>
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
label,td.thick
{
font-weight:bold;
}
label.font
{
font-weight: normal;
}
</style>
<script>
</script>
<script>	
function encrypt(){		
var source = "./customer_detail_view.php?customer_id"=;
var encode = base64Encode( source );
document.getElementById("demo").innerHTML = encode;
}
	</script>
	<script>

$(document).ready(function(){
    $("#ContactHeader").click(function(){
       window.location.reload();
    });
}); 

$(document).ready(function(){
    $("#AddressHeader").click(function(){
       window.location.reload();
    });
}); 
	  
	  $(document).ready(function(){
    $("#AddressEditHeader").click(function(){
       window.location.reload();
    });
}); 

  $(document).ready(function(){
    $("#ContactEditHeader").click(function(){
       window.location.reload();
    });
}); 

$(document).ready(function(){
    $("#EnquiryEditHeader").click(function(){
       window.location.reload();
    });
}); 

$(document).ready(function(){
    $("#SalesEditHeader").click(function(){
       window.location.reload();
    });
}); 

$(document).ready(function(){
    $("#ServiceEditHeader").click(function(){
       window.location.reload();
    });
}); 

$(document).ready(function(){
    $("#ProjectEditHeader").click(function(){
       window.location.reload();
    });
}); 
}
</script>
{/literal}
 <body class="hold-transition skin-blue sidebar-mini" onLoad="doOnLoad();">
  <div class="content-wrapper">
	<section class="content-header">
          <h4>
            <small class="active"><a href="customer_list.php"><i class="fa fa-list"> <label class="font" style="font-family:Arial, Helvetica, sans-serif">
List Customers</label></i></a></small>&ensp;&ensp;&ensp;
            <small><a href="customer_reg.php"><i class="fa fa-user-plus"> <label class="font" style="font-family:Arial, Helvetica, sans-serif">
Create Customer</label></i></a></small>
          </h4>
          <ul class="breadcrumb">
            <li>Status : Active</li>
          </ul>
        </section>

        <!-- Main content -->
          <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box box-info">
                <div class="box-header">
				{foreach from=$Master item=View}
				<table width="110%">
				<tr>
				 <td>Created:{$View.created_date}&nbsp;&nbsp;{$View.created_time}</td>
                  <td align="justify">
				 <h4>{$View.company_name}&nbsp;&nbsp;[{$View.customer_id}]</h4></td>
				<td> Modified:{$View.timestamp_values}</td>
				</tr>
				</table>
				{/foreach}
				</div>
				
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
				<form class="form-horizontal">
                  <div class="box-body">
				  {foreach from=$Master item=View}
				  	<div class="col-md-6">
                    <div class="form-group">
                      <label class="col-sm-4 thick">Enquiry Through</label>
                      <div class="col-sm-6">
                       {$View.enquiry_through}
                      </div>
                    </div>
					
					{if $View.tin_no neq "" AND $View.tin_no neq "0"}
					<div class="form-group">
                      <label class="col-sm-4 thick">Tin No</label>
                      <div class="col-sm-6">
                        {$View.tin_no}
                      </div>
                    </div>
					{/if}
					
					{if $View.cst_no neq "" AND $View.cst_no neq "0"}
					<div class="form-group">
                      <label class="col-sm-4 thick">Cst No</label>
                      <div class="col-sm-6">
                        {$View.cst_no}
                      </div>
                    </div>
					{/if}
					
					{if $View.remarks neq ""}
					<div class="form-group">
                      <label class="col-sm-4 thick">Remarks</label>
                      <div class="col-sm-6">
                        {$View.remarks}
                      </div>
                    </div>
					{/if}
					</div>
					<!--*****************************************************-->
					<div class="col-md-6">
					 <div class="form-group">
                      <label class="col-sm-4 thick">Place Type</label>
                      <div class="col-sm-6">
                       {$View.place_type}
                      </div>
                    </div>
					
					{if $View.service_tax_no neq "" AND $View.service_tax_no neq "0"}
					<div class="form-group">
                      <label class="col-sm-4 thick">Service Tax No</label>
                      <div class="col-sm-6">
                       {$View.service_tax_no}
                      </div>
                    </div>
					{/if}
					
					<div class="form-group">
                      <label class="col-sm-4 thick">Created By</label>
                      <div class="col-sm-6">
                        {$View.created_by}
                      </div>
                    </div>
					</div>
					{/foreach}
					</div>
					</form>
					
				<div class="clear"></div>
				<div style="margin-top: 10px; margin-bottom: 10px;border: 0px;"><center>
						  <input type="button" class="btn  btn-danger btn-xs" value="Add Contact"  data-toggle="modal" data-target="#Contact" onClick="doOnLoad();">&nbsp;&nbsp;
						  <input type="button" class="btn  btn-danger btn-xs" value="Add Address" data-toggle="modal" data-target="#Address">&nbsp;&nbsp;
						  </center>
						  </div>

<!--*************************************************Add Contact***********************************************************-->
							<div class="modal fade" id="Contact" role="dialog">
							<div class="modal-dialog">
							<!-- Modal content-->
							<div class="modal-content" style="width:700px;">
							<div class="modal-header" style="background-color:#00CCFF;" id="ContactHeader">
							<button type="button" class="close" data-dismiss="modal" onClick="window.location.reload();">&times;</button>
							<h4 class="modal-title">Add Contact</h4>
							</div>
						<iframe height="490px" width="100%" id="Contact"  src="./cus_contact.php?customer_id={$View.customer_id}" scrolling="auto" style="border:1px;"></iframe>
							</div>
							</div>
							</div>
<!--*************************************************Add Address***********************************************************-->
							<div class="modal fade" id="Address" role="dialog">
							<div class="modal-dialog">
							<!-- Modal content-->
							<div class="modal-content" style="width:700px;">
							<div class="modal-header" id="AddressHeader" style="background-color:#00CCFF;">
							<button type="button" class="close" data-dismiss="modal" onClick="window.location.reload();">&times;</button>
							<h4 class="modal-title">Add Address</h4>
							</div>
						<iframe height="490px" width="100%" id="Address"  src="./cus_address.php?customer_id={$View.customer_id}" scrolling="auto" style="border:1px;"></iframe>
							</div>
							</div>
							</div>
			<!--************************************************************************************-->
              <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
					<li class="active"><a href="#contact" data-toggle="tab">Contact</a></li>
					<li><a href="#address" data-toggle="tab">Address</a></li>
					<li><a href="#enquiry" data-toggle="tab">Enquiry</a></li>
					<li><a href="#sales" data-toggle="tab">Sales</a></li>
					<li><a href="#service" data-toggle="tab">Service</a></li>
					<li><a href="#project" data-toggle="tab">Project</a></li>
					<li><a href="#mail" data-toggle="tab">Mail</a></li>
                </ul>
                <div class="tab-content">
			<!--*************************************************Contact List***********************************************************-->
                  <div class="tab-pane active" id="contact">
                    <form name="ContactList" id="ContactList" method="post">
                  <table id="example1" class="table table-bordered table-striped" style="font-size:13px;, Times, serif;">
                    <thead>
                      <tr>
					  <th><center>Sl No</center></th>
                        <th><center>Customer Name</center></th>
                        <th><center>Mobile No</center></th>
                        <th><center>Created By</center></th>
                        <th><center>Designation</center></th>
						<th><center>Email Id</center></th>
						<th><center>Action</center></th>
                      </tr>
                    </thead>
                    <tbody>	
					{foreach from=$ViewContact item=Contact}
					{if $Contact.status eq '0'} 
					<tr id="{$i++}">
								<input type="hidden" value="{$Contact.status}" />
								<input type="hidden" id="cc_id" name="cc_id" value="{$Contact.customer_id}" />
			<td align="center"><a href="#" onClick="Javascript:viewCats('{$Contact.sl_no}')"><strike>{$i}</strike></a></td>
		<td align="center"><a href="#" onClick="Javascript:viewCats('{$Contact.sl_no}')"><strike>{$Contact.salutation}.{$Contact.first_name}{$Contact.last_name}</strike></a></td>
		<td align="center"><a href="#" onClick="Javascript:viewCats('{$Contact.sl_no}')"><strike>{$Contact.mobile_no}</strike></a></td>
		<td align="center"><a href="#" onClick="Javascript:viewCats('{$Contact.sl_no}')"><strike>{$Contact.created_by}</strike></a></td>
		<td align="center"><a href="#" onClick="Javascript:viewCats('{$Contact.sl_no}')"><strike>{$Contact.designation}</strike></a></td>
		<td align="center"><a href="#" onClick="Javascript:viewCats('{$Contact.sl_no}')"><strike>{$Contact.mail_id}</strike></a></td>
	    <td align="center"><a href="#" onClick="Javascript:repeatCats('{$Contact.sl_no}','{$Contact.customer_id}')"><i class="fa fa-reply-all"></i></a></td>
							</tr>
							{else}
					<tr id="{$i++}">
								<input type="hidden" value="{$Contact.status}" />
								<input type="hidden" id="cc_id" name="cc_id" value="{$Contact.customer_id}" />
						<td align="center"><a href="#" onClick="Javascript:viewCats('{$Contact.sl_no}')">{$i}</a></td>
						<td align="center"><a href="#" onClick="Javascript:viewCats('{$Contact.sl_no}')">{$Contact.salutation}.{$Contact.first_name}{$Contact.last_name}</a></td>
						<td align="center"><a href="#" onClick="Javascript:viewCats('{$Contact.sl_no}')">{$Contact.mobile_no}</a></td>
						<td align="center"><a href="#" onClick="Javascript:viewCats('{$Contact.sl_no}')">{$Contact.created_by}</a></td>
						<td align="center"><a href="#" onClick="Javascript:viewCats('{$Contact.sl_no}')">{$Contact.designation}</a></td>
					<td align="center"><a href="#" onClick="Javascript:viewCats('{$Contact.sl_no}')">{$Contact.mail_id}</a></td>
			<td align="center"><a href="#" data-toggle="modal" data-target="#EditContact{$Contact.sl_no}"> <i class="fa fa-edit"></i></a>
							&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" onClick="Javascript:deleteCat('{$Contact.sl_no}','{$Contact.customer_id}')"><i class="fa fa-trash"></i></a></td>
							<!--*****************************************************************-->
							<div class="modal fade" id="EditContact{$Contact.sl_no}" role="dialog">
								<div class="modal-dialog">
							<div class="modal-content" style="width:700px;">
							<div class="modal-header" id="ContactEditHeader" style="background-color:#00CCFF;">
						<button type="button" class="close" onClick="window.location.reload();" data-dismiss="modal">&times;</button>
							<h4 class="modal-title">Edit Contact</h4>
									</div>
							<iframe height="490px" width="100%" id="EditContact"  src="./cus_con_edit.php?sl_no={$Contact.sl_no}" scrolling="auto" style="border:1px;"></iframe>
										</div>
								</div>
							</div>   
							<!--*****************************************************************-->
                    </tr>
					{/if}	
                   {foreachelse}
					<tr>
					<td height="20" colspan="12" align="center"><img src="images/warning.gif" border="0">&nbsp;No Records Found</td>
					</tr>
					{/foreach}
					</tbody>
                    </tfoot>
                  </table>
				 </form>
				 
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
  function deleteCat(CatIdent,CusIdent){
   var po5=document.getElementById("cc_id").value;
   var ct_id = btoa(po5);
   if(confirm("Are you sure to Delete this Content?")){
   FormName	= document.ContactList;
   FormName.action= "customer_detail_view.php?sl_no="+CatIdent+"&customer_id="+ct_id;
   FormName.submit();
 }
 }
  function repeatCats(Slno,Cus1){
  var po5=document.getElementById("cc_id").value;
  var ct_id = btoa(po5);
  if(confirm("Are you sure to Retrive this Content?")){
  FormName	= document.ContactList;
  FormName.action= "customer_detail_view.php?retrive="+Slno+"&customer_id="+ct_id;
  FormName.submit();
 }
 }
    </script>
	{/literal}
</div>
  <!--*************************************************Address List***********************************************************-->
                  <!-- glyphicons-->
                  <div class="tab-pane" id="address">
				<form name="AddressList" id="AddressList" method="post">
                  <table id="example1" class="table table-bordered table-striped" style="font-size:13px;, Times, serif;">
                    <thead>
					<tr>       
					            <th><center>Sl No</center></th>
								<th><center>Area</center></th>
								<th><center>Address</center></th>
								<th><center>Address 1</center></th>
								<th><center>Landmark</center></th>
								<th><center>City</center></th>
								<th><center>Pincode</center></th>
								<th><center>Action</center></th>
					</tr>
                    </thead>
                    <tbody>
                     {foreach from=$Address item=Contact}
					 {if $Contact.status eq '0'} 
					 <tr id="{$r++}">
					             <input type="hidden" value="{$Contact.sl_no}" />
								<input type="hidden" id="cus_id" name="cus_id" value="{$Contact.customer_id}" />
								<td align="center"><a href="#" onClick="Javascript:viewCats('{$Contact.customer_id}')"><strike>{$r}</strike></a></td>
								<td align="center"><a href="#" onClick="Javascript:viewCats('{$Contact.customer_id}')"><strike>{$Contact.area}</strike></a></td>
								<td align="center"><a href="#" onClick="Javascript:viewCats('{$Contact.customer_id}')"><strike>{$Contact.address}</strike></a></td>
								<td align="center"><a href="#" onClick="Javascript:viewCats('{$Contact.customer_id}')"><strike>{$Contact.address1}</strike></a></td>
								<td align="center"><a href="#" onClick="Javascript:viewCats('{$Contact.customer_id}')"><strike>{$Contact.landmark}</strike></a></td>								
								<td align="center"><a href="#" onClick="Javascript:viewCats('{$Contact.customer_id}')"><strike>{$Contact.city}</strike></a></td>
								<td align="center"><a href="#" onClick="Javascript:viewCats('{$Contact.customer_id}')"><strike>{$Contact.pincode}</strike></a></td>
								<td align="center">&nbsp;&nbsp;&nbsp;&nbsp;
								&nbsp;&nbsp; &nbsp;&nbsp;<a href="#" onClick="Javascript:repeatCats1('{$Contact.sl_no}','{$Contact.customer_id}')"><i class="fa fa-reply-all"></i></a></td> 
								{else}
					<tr id="{$r++}">
					             <input type="hidden" value="{$Contact.sl_no}" />
								<input type="hidden" id="cus_id" name="cus_id" value="{$Contact.customer_id}" />
								<td align="center"><a href="#" onClick="Javascript:viewCats('{$Contact.customer_id}')">{$r}</a></td>
								<td align="center"><a href="#" onClick="Javascript:viewCats('{$Contact.customer_id}')">{$Contact.area}</a></td>
								<td align="center"><a href="#" onClick="Javascript:viewCats('{$Contact.customer_id}')">{$Contact.address}</a></td>
								<td align="center"><a href="#" onClick="Javascript:viewCats('{$Contact.customer_id}')">{$Contact.address1}</a></td>
								<td align="center"><a href="#" onClick="Javascript:viewCats('{$Contact.customer_id}')">{$Contact.landmark}</a></td>								
								<td align="center"><a href="#" onClick="Javascript:viewCats('{$Contact.customer_id}')">{$Contact.city}</a></td>
								<td align="center"><a href="#" onClick="Javascript:viewCats('{$Contact.customer_id}')">{$Contact.pincode}</a></td>
                               <td align="center">&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" data-toggle="modal" data-target="#EditAddress{$Contact.sl_no}"><i class="fa fa-edit"></i></a>
&nbsp;&nbsp; &nbsp;&nbsp;<a href="#" onClick="Javascript:deleteCats1('{$Contact.sl_no}','{$Contact.customer_id}')"><i class="fa fa-trash"></i></a></td> 
								<!--*************************************************-->
								<div class="modal fade" id="EditAddress{$Contact.sl_no}" role="dialog">
								<div class="modal-dialog">
								<div class="modal-content" style="width:700px;">
								<div class="modal-header" id="AddressEditHeader" style="background-color:#00CCFF;">
							<button type="button" class="close" data-dismiss="modal" onClick="window.location.reload();">&times;</button>
								<h4 class="modal-title">Edit Address</h4>
								</div>
			<iframe height="490px" width="100%" id="EditAddress"  src="./cus_address_edit.php?sl_no={$Contact.sl_no}"  scrolling="auto" style="border:1px;"></iframe>
									</div>
								</div>
							</div>
								<!--****************************************************-->
                    </tr>
					{/if}
					   {foreachelse}
					<tr>
				<td height="20" colspan="12" align="center"><img src="images/warning.gif" border="0">&nbsp;No Records Found</td>
					</tr>
					{/foreach}
					</tbody>
                    </tfoot>
                  </table>
				 </form>
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
function deleteCats1(ConIdent1,CusIdent1){
  var po4=document.getElementById("cus_id").value;
  var cust_id = btoa(po4); 
  if(confirm("Are you sure to Delete this Content?")){
  FormName	= document.AddressList;
  FormName.action= "customer_detail_view.php?s_no="+ConIdent1+"&customer_id="+cust_id;
  FormName.submit();
 }
 }
function repeatCats1(x,y){
  var po4=document.getElementById("cus_id").value;
  var cust_id = btoa(po4); 
  if(confirm("Are you sure to Retrive this Content?")){
  FormName	= document.AddressList;
  FormName.action= "customer_detail_view.php?retrive1="+x+"&customer_id="+cust_id;
  FormName.submit();
 }
 }
    </script>
	{/literal}
	</div>
      <!--*************************************************Enquiry List***********************************************************-->
		    <div class="tab-pane" id="enquiry">
				<form name="EnquiryList" id="EnquiryList" method="post">
                  <table id="example1" class="table table-bordered table-striped" style="font-size:13px;, Times, serif;">
                    <thead>
					<tr>       
					            <th><center>Sl No</center></th>
								<th><center>Enquiry Id</center></th>
								<th><center>Enquiry Type</center></th>
								<th><center>Enquiry Status</center></th>
								<th><center>Created Date&amp;Time</center></th>
								<th><center>Timestamp</center></th>
					</tr>
                    </thead>
                    <tbody>
                     {foreach from=$EnqMaster item=Contact}
					 {if $Contact.status eq '0'} 	
					 <tr id="{$j++}">
					             <input type="hidden" value="{$Contact.sl_no}" />
								<input type="hidden" value="{$Contact.customer_id}" />
								<input type="hidden" id="enquiry_id" name="enquiry_id" value="{$Contact.enquiry_id}" />
								<input type="hidden" id="en_id1" name="en_id1" value="{$en_id1}"/>
								<td align="center"><a href="#" onClick="Javascript:viewCats3('{$Contact.enquiry_id}','{$Contact.sl_no}')"><strike>{$j}</strike></a></td>
								<td align="center"><a href="#" onClick="Javascript:viewCats3('{$Contact.enquiry_id}','{$Contact.sl_no}')"><strike>{$Contact.enquiry_id}</strike></a></td>
								<td align="center"><a href="#" onClick="Javascript:viewCats3('{$Contact.enquiry_id}','{$Contact.sl_no}')"><strike>{$Contact.enquiry_type}</strike></a></td>
								<td align="center"><a href="#" onClick="Javascript:viewCats3('{$Contact.enquiry_id}','{$Contact.sl_no}')"><strike>{$Contact.enquiry_status}</strike></a></td>
								<td align="center"><a href="#" onClick="Javascript:viewCats3('{$Contact.enquiry_id}','{$Contact.sl_no}')"><strike>{$Contact.created_date} &amp;{$Contact.created_time}</strike></a></td>								
								<td align="center"><a href="#" onClick="Javascript:viewCats3('{$Contact.enquiry_id}','{$Contact.sl_no})"><strike>{$Contact.timestamp_value}</strike></a></td>
								{else}
					<tr id="{$j++}">
					             <input type="hidden" value="{$Contact.sl_no}" />
								<input type="hidden" value="{$Contact.customer_id}" />
								<input type="hidden" id="enquiry_id" name="enquiry_id" value="{$Contact.enquiry_id}" />
								<input type="hidden" id="en_id1" name="en_id1" value="{$en_id1}"/>
								<td align="center"><a href="#" onClick="Javascript:viewCats3('{$Contact.enquiry_id}','{$Contact.sl_no}')">{$j}</a></td>
								<td align="center"><a href="#" onClick="Javascript:viewCats3('{$Contact.enquiry_id}','{$Contact.sl_no}')">{$Contact.enquiry_id}</a></td>
								<td align="center"><a href="#" onClick="Javascript:viewCats3('{$Contact.enquiry_id}','{$Contact.sl_no}')">{$Contact.enquiry_type}</a></td>
								<td align="center"><a href="#" onClick="Javascript:viewCats3('{$Contact.enquiry_id}','{$Contact.sl_no}')">{$Contact.enquiry_status}</a></td>
		<td align="center"><a href="#" onClick="Javascript:viewCats3('{$Contact.enquiry_id}','{$Contact.sl_no}')">{$Contact.created_date} &amp;{$Contact.created_time}</a></td>								
			<td align="center"><a href="#" onClick="Javascript:viewCats3('{$Contact.enquiry_id}','{$Contact.sl_no}')">{$Contact.timestamp_value}</a></td>
						</tr>
					{/if}
					{foreachelse}
					<tr>
			        <td height="20" colspan="12" align="center"><img src="images/warning.gif" border="0">&nbsp;No Records Found</td>
					</tr>
					{/foreach}
					</tbody>
                    </tfoot>
                  </table>
				 </form>
	             </div>
{literal}
<script>
function viewCats3(CusIdent,CatIdent) 
{
 var enq_id = btoa(CusIdent); 
 var s_n=btoa(CatIdent);
  FormName		= document.EnquiryList;
  FormName.action ='enquiry_detail_view.php?enquiry_id='+enq_id+"&s_no1="+s_n;          
  FormName.submit();
 }
 </script>
 {/literal}
				
	    <!--*************************************************Sales List***********************************************************-->
	   <div class="tab-pane" id="sales">
				<form name="SalesList" id="SalesList" method="post">
                  <table id="example1" class="table table-bordered table-striped" style="font-size:13px;, Times, serif;">
                    <thead>
					<tr>       
					            <th><center>Sl No</center></th>
								<th><center>Sales Order No</center></th>
								<th><center>Po No</center></th>
								<th><center>Po Date</center></th>
								<th><center>Created Date&amp;Time</center></th>
								<th><center>Timestamp</center></th>
					</tr>
                    </thead>
                    <tbody>
                     {foreach from=$SalMaster item=Contact}
					 {if $Contact.status eq '0'} 	
					 <tr id="{$k++}">
					             <input type="hidden" value="{$Contact.sl_no}" />
								<input type="hidden" value="{$Contact.customer_id}" />
								<input type="hidden" value="{$Contact.enquiry_id}" />
								<input type="hidden" value="{$Contact.sales_order_no}"/>
								<td align="center"><a href="#" onClick="Javascript:viewCats4('{$Contact.sales_order_no}','{$Contact.sl_no}')"><strike>{$k}</strike></a></td>
								<td align="center"><a href="#" onClick="Javascript:viewCats4('{$Contact.sales_order_no}','{$Contact.sl_no}')"><strike>{$Contact.sales_order_no}</strike></a></td>
								<td align="center"><a href="#" onClick="Javascript:viewCats4('{$Contact.sales_order_no}','{$Contact.sl_no}')"><strike>{$Contact.po_no}</strike></a></td>
								<td align="center"><a href="#" onClick="Javascript:viewCats4('{$Contact.sales_order_no}','{$Contact.sl_no}')"><strike>{$Contact.po_date}</strike></a></td>
								<td align="center"><a href="#" onClick="Javascript:viewCats4('{$Contact.sales_order_no}','{$Contact.sl_no}')"><strike>{$Contact.Created_date} &amp;{$Contact.Created_time}</strike></a></td>								
								<td align="center"><a href="#" onClick="Javascript:viewCats4('{$Contact.sales_order_no}','{$Contact.sl_no}')"><strike>{$Contact.timestamp_value}</strike></a></td>
								{else}
					<tr id="{$k++}">
					             <input type="hidden" value="{$Contact.sl_no}" />
								<input type="hidden" value="{$Contact.customer_id}" />
								<input type="hidden"  value="{$Contact.sales_order_no}"/>
								<td align="center"><a href="#" onClick="Javascript:viewCats4('{$Contact.sales_order_no}','{$Contact.sl_no}')">{$k}</a></td>
								<td align="center"><a href="#" onClick="Javascript:viewCats4('{$Contact.sales_order_no}','{$Contact.sl_no}')">{$Contact.sales_order_no}</a></td>
								<td align="center"><a href="#" onClick="Javascript:viewCats4('{$Contact.sales_order_no}','{$Contact.sl_no}')">{$Contact.po_no}</a></td>
								<td align="center"><a href="#" onClick="Javascript:viewCats4('{$Contact.sales_order_no}','{$Contact.sl_no}')">{$Contact.po_date}</a></td>
							    <td align="center"><a href="#" onClick="Javascript:viewCats4('{$Contact.sales_order_no}','{$Contact.sl_no}')">{$Contact.created_date} &amp;{$Contact.created_time}</a></td>								
								<td align="center"><a href="#" onClick="Javascript:viewCats4('{$Contact.sales_order_no}','{$Contact.sl_no}')">{$Contact.timestamp_value}</a></td>
	                </tr>
					{/if}
					   {foreachelse}
					<tr>
								<td height="20" colspan="12" align="center"><img src="images/warning.gif" border="0">&nbsp;No Records Found</td>
					</tr>
					{/foreach}
					</tbody>
                    </tfoot>
                  </table>
				 </form>
	   </div><!-- /#ion-icons -->
	   {literal}
	   <script>
	   function viewCats4(CatIdent,CusIdent) {
        var sal_id = btoa(CatIdent); 
		var no=btoa(CusIdent);
  FormName		= document.SalesList;
  FormName.action ='sales_detail_view.php?sales_order_no='+sal_id+"&s_no2="+no;          
  FormName.submit();
 }
	  </script>
	  {/literal}
	     <!--*************************************************Service List***********************************************************-->
				  <div class="tab-pane" id="service">
				<form name="ServiceList" id="ServiceList" method="post">
                  <table id="example1" class="table table-bordered table-striped" style="font-size:13px;, Times, serif;">
                    <thead>
					<tr>       
					            <th><center>Sl No</center></th>
								<th><center>Service Order No</center></th>
								<th><center>Po No</center></th>
								<th><center>Po Date</center></th>
								<th><center>Created Date&amp;Time</center></th>
								<th><center>Timestamp</center></th>
					</tr>
                    </thead>
                    <tbody>
                     {foreach from=$SerMaster item=Contact}
					 {if $Contact.status eq '0'} 	
					 <tr id="{$l++}">
					             <input type="hidden" value="{$Contact.sl_no}" />
								<input type="hidden" value="{$Contact.customer_id}" />
								<input type="hidden" value="{$Contact.enquiry_id}" />
								<input type="hidden" id="ser_no" name="ser_no" value="{$Contact.service_order_no}"/>
								<input type="hidden" id="ser_nos" name="ser_nos" value="{$ser_id}"/>
								<td align="center"><a href="#" onClick="Javascript:viewCats1('{$Contact.service_order_no}','{$Contact.sl_no}')"><strike>{$l}</strike></a></td>
								<td align="center"><a href="#" onClick="Javascript:viewCats1('{$Contact.service_order_no}','{$Contact.sl_no}')"><strike>{$Contact.service_order_no}</strike></a></td>
								<td align="center"><a href="#" onClick="Javascript:viewCats1('{$Contact.service_order_no}','{$Contact.sl_no}')"><strike>{$Contact.po_no}</strike></a></td>
								<td align="center"><a href="#" onClick="Javascript:viewCats1('{$Contact.service_order_no}','{$Contact.sl_no}')"><strike>{$Contact.po_date}</strike></a></td>
								<td align="center"><a href="#" onClick="Javascript:viewCats1('{$Contact.service_order_no}','{$Contact.sl_no}')"><strike>{$Contact.created_date} &amp;{$Contact.created_time}</strike></a></td>								
								<td align="center"><a href="#" onClick="Javascript:viewCats1('{$Contact.service_order_no}','{$Contact.sl_no}')"><strike>{$Contact.timestamp_value}</strike></a></td>
								{else}
					<tr id="{$l++}">
					             <input type="hidden" value="{$Contact.sl_no}" />
								<input type="hidden" value="{$Contact.customer_id}" />
								<input type="hidden" id="ser_no" name="ser_no" value="{$Contact.service_order_no}"/>
								<input type="hidden" id="ser_nos" name="ser_nos" value="{$ser_id}"/>
								<td align="center"><a href="#" onClick="Javascript:viewCats1('{$Contact.service_order_no}','{$Contact.sl_no}')">{$l}</a></td>
								<td align="center"><a href="#" onClick="Javascript:viewCats1('{$Contact.service_order_no}','{$Contact.sl_no}')">{$Contact.service_order_no}</a></td>
								<td align="center"><a href="#" onClick="Javascript:viewCats1('{$Contact.service_order_no}','{$Contact.sl_no}')">{$Contact.po_no}</a></td>
								<td align="center"><a href="#" onClick="Javascript:viewCats1('{$Contact.service_order_no}','{$Contact.sl_no}')">{$Contact.po_date}</a></td>
							    <td align="center"><a href="#" onClick="Javascript:viewCats1('{$Contact.service_order_no}','{$Contact.sl_no}')">{$Contact.created_date} &amp;{$Contact.created_time}</a></td>								
								<td align="center"><a href="#" onClick="Javascript:viewCats1('{$Contact.service_order_no}','{$Contact.sl_no}')">{$Contact.timestamp_value}</a></td>
				    </tr>
					{/if}
					  {foreachelse}
					<tr>
								<td height="20" colspan="12" align="center"><img src="images/warning.gif" border="0">&nbsp;No Records Found</td>
					</tr>
					{/foreach}
					</tbody>
                    </tfoot>
                  </table>
				 </form>
                  </div>
				  {literal}
				  <script>
function viewCats1(CatIdent,CusIdent) 
{
  var ser_id = btoa(CatIdent); 
  var s_n3=btoa(CusIdent);
  FormName		= document.ServiceList;
  FormName.action ='service_quote_detail_view.php?service_order_no='+ser_id+"&s_no3="+s_n3;          
  FormName.submit();
 }
 </script>
 {/literal}
   <!--*************************************************Address List***********************************************************-->
                  <!-- glyphicons-->
                  <div class="tab-pane" id="mail">
				<form name="MailList" id="MailList" method="post">
                  <table id="example1" class="table table-bordered table-striped" style="font-size:13px;, Times, serif;">
                    <thead>
					<tr>       
					            <th><center>Sl No</center></th>
								<th><center>ID</center></th>
								<th><center>Type</center></th>
								<th><center>Mail Id</center></th>
								<th><center>Attachment 1</center></th>
								<th><center>Attachment 2</center></th>
								<th><center>Attachment 3</center></th>
								<th><center>Action</center></th>
					</tr>
                    </thead>
                    <tbody>
                     {foreach from=$overAllMaster item=Contact}
					 {if $Contact.status eq '0'} 
					 <tr id="{$m++}">
					             <input type="hidden" value="{$Contact.sl_no}" />
								<input type="hidden" id="cus_id" name="cus_id" value="{$Contact.customer_id}" />
								<td align="center"><a href="#" onClick="Javascript:viewCats('{$Contact.customer_id}')"><strike>{$m}</strike></a></td>
								<td align="center"><a href="#" onClick="Javascript:viewCats('{$Contact.customer_id}')"><strike>{$Contact.area}</strike></a></td>
								<td align="center"><a href="#" onClick="Javascript:viewCats('{$Contact.customer_id}')"><strike>{$Contact.address}</strike></a></td>
								<td align="center"><a href="#" onClick="Javascript:viewCats('{$Contact.customer_id}')"><strike>{$Contact.address1}</strike></a></td>
								<td align="center"><a href="#" onClick="Javascript:viewCats('{$Contact.customer_id}')"><strike>{$Contact.landmark}</strike></a></td>								
								<td align="center"><a href="#" onClick="Javascript:viewCats('{$Contact.customer_id}')"><strike>{$Contact.city}</strike></a></td>
								<td align="center"><a href="#" onClick="Javascript:viewCats('{$Contact.customer_id}')"><strike>{$Contact.pincode}</strike></a></td>
								<td align="center">&nbsp;&nbsp;&nbsp;&nbsp;
								&nbsp;&nbsp; &nbsp;&nbsp;<a href="#" onClick="Javascript:repeatCats1('{$Contact.sl_no}','{$Contact.customer_id}')"><i class="fa fa-reply-all"></i></a></td> 
								{else}
					<tr id="{$r++}">
					             <input type="hidden" value="{$Contact.sl_no}" />
								<input type="hidden" id="cus_id" name="cus_id" value="{$Contact.customer_id}" />
								<td align="center"><a href="#" onClick="Javascript:viewCats('{$Contact.customer_id}')">{$r}</a></td>
								<td align="center"><a href="#" onClick="Javascript:viewCats('{$Contact.customer_id}')">{$Contact.area}</a></td>
								<td align="center"><a href="#" onClick="Javascript:viewCats('{$Contact.customer_id}')">{$Contact.address}</a></td>
								<td align="center"><a href="#" onClick="Javascript:viewCats('{$Contact.customer_id}')">{$Contact.address1}</a></td>
								<td align="center"><a href="#" onClick="Javascript:viewCats('{$Contact.customer_id}')">{$Contact.landmark}</a></td>								
								<td align="center"><a href="#" onClick="Javascript:viewCats('{$Contact.customer_id}')">{$Contact.city}</a></td>
								<td align="center"><a href="#" onClick="Javascript:viewCats('{$Contact.customer_id}')">{$Contact.pincode}</a></td>
                               <td align="center">&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" data-toggle="modal" data-target="#EditAddress{$Contact.sl_no}"><i class="fa fa-edit"></i></a>
&nbsp;&nbsp; &nbsp;&nbsp;<a href="#" onClick="Javascript:deleteCats1('{$Contact.sl_no}','{$Contact.customer_id}')"><i class="fa fa-trash"></i></a></td> 
								<!--*************************************************-->
								<div class="modal fade" id="EditAddress{$Contact.sl_no}" role="dialog">
								<div class="modal-dialog">
								<div class="modal-content" style="width:700px;">
								<div class="modal-header" id="AddressEditHeader" style="background-color:#00CCFF;">
							<button type="button" class="close" data-dismiss="modal" onClick="window.location.reload();">&times;</button>
								<h4 class="modal-title">Edit Address</h4>
								</div>
			<iframe height="490px" width="100%" id="EditAddress"  src="./cus_address_edit.php?sl_no={$Contact.sl_no}"  scrolling="auto" style="border:1px;"></iframe>
									</div>
								</div>
							</div>
								<!--****************************************************-->
                    </tr>
					{/if}
					   {foreachelse}
					<tr>
				<td height="20" colspan="12" align="center"><img src="images/warning.gif" border="0">&nbsp;No Records Found</td>
					</tr>
					{/foreach}
					</tbody>
                    </tfoot>
                  </table>
				 </form>
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
function deleteCats1(ConIdent1,CusIdent1){
  var po4=document.getElementById("cus_id").value;
  var cust_id = btoa(po4); 
  if(confirm("Are you sure to Delete this Content?")){
  FormName	= document.AddressList;
  FormName.action= "customer_detail_view.php?s_no="+ConIdent1+"&customer_id="+cust_id;
  FormName.submit();
 }
 }
function repeatCats1(x,y){
  var po4=document.getElementById("cus_id").value;
  var cust_id = btoa(po4); 
  if(confirm("Are you sure to Retrive this Content?")){
  FormName	= document.AddressList;
  FormName.action= "customer_detail_view.php?retrive1="+x+"&customer_id="+cust_id;
  FormName.submit();
 }
 }
    </script>
	{/literal}
	</div>
				  <!--********************************************Project List***********************************************************************-->
				    <div class="tab-pane" id="project">
				<form name="ProjectList" id="ProjectList" method="post">
                  <table id="example1" class="table table-bordered table-striped" style="font-size:13px;, Times, serif;">
                    <thead>
					<tr>       
					            <th><center>Sl No</center></th>
								<th><center>Project Order No</center></th>
								<th><center>Po No</center></th>
								<th><center>Po Date</center></th>
								<th><center>Created Date&amp;Time</center></th>
								<th><center>Timestamp</center></th>
					</tr>
                    </thead>
                    <tbody>
                     {foreach from=$ProMaster item=Contact}
					 {if $Contact.status eq '0'} 	
					 <tr id="{$m++}">
					             <input type="hidden" value="{$Contact.sl_no}" />
								<input type="hidden" value="{$Contact.customer_id}" />
								<input type="hidden" value="{$Contact.enquiry_id}" />
								<input type="hidden" id="pro_no" name="pro_no" value="{$Contact.project_order_no}"/>
								<input type="hidden" id="pro_nos" name="pro_nos" value="{$pro_nos}"/>
								<td align="center"><a href="#" onClick="Javascript:viewCats2('{$Contact.project_order_no}','{$Contact.sl_no}')"><strike>{$m}</strike></a></td>
								<td align="center"><a href="#" onClick="Javascript:viewCats2('{$Contact.project_order_no}','{$Contact.sl_no}')"><strike>{$Contact.project_order_no}</strike></a></td>
								<td align="center"><a href="#" onClick="Javascript:viewCats2('{$Contact.project_order_no}','{$Contact.sl_no}')"><strike>{$Contact.po_no}</strike></a></td>
								<td align="center"><a href="#" onClick="Javascript:viewCats2('{$Contact.project_order_no}','{$Contact.sl_no}')"><strike>{$Contact.po_date}</strike></a></td>
								<td align="center"><a href="#" onClick="Javascript:viewCats2('{$Contact.project_order_no}','{$Contact.sl_no}')"><strike>{$Contact.created_date} &amp;{$Contact.created_time}</strike></a></td>								
								<td align="center"><a href="#" onClick="Javascript:viewCats2('{$Contact.project_order_no}','{$Contact.sl_no}')"><strike>{$Contact.timestamp_value}</strike></a></td>
								
								{else}
					<tr id="{$m++}">
					             <input type="hidden" value="{$Contact.sl_no}" />
								<input type="hidden" value="{$Contact.customer_id}" />
								<input type="hidden" id="pro_no" name="pro_no" value="{$Contact.project_order_no}"/>
								<input type="hidden" id="pro_nos" name="pro_nos" value="{$pro_nos}"/>
								<td align="center"><a href="#" onClick="Javascript:viewCats2('{$Contact.project_order_no}','{$Contact.sl_no}')">{$m}</a></td>
								<td align="center"><a href="#" onClick="Javascript:viewCats2('{$Contact.project_order_no}','{$Contact.sl_no}')">{$Contact.project_order_no}</a></td>
								<td align="center"><a href="#" onClick="Javascript:viewCats2('{$Contact.project_order_no}','{$Contact.sl_no}')">{$Contact.po_no}</a></td>
								<td align="center"><a href="#" onClick="Javascript:viewCats2('{$Contact.project_order_no}','{$Contact.sl_no}')">{$Contact.po_date}</a></td>
							    <td align="center"><a href="#" onClick="Javascript:viewCats2('{$Contact.project_order_no}','{$Contact.sl_no}')">{$Contact.created_date} &amp;{$Contact.created_time}</a></td>								
					            <td align="center"><a href="#" onClick="Javascript:viewCats2('{$Contact.project_order_no}','{$Contact.sl_no}')">{$Contact.timestamp_value}</a></td>
                    </tr>
					{/if}
					   {foreachelse}
					<tr>
								<td height="20" colspan="12" align="center"><img src="images/warning.gif" border="0">&nbsp;No Records Found</td>
					</tr>
					{/foreach}
					
					</tbody>
                    </tfoot>
                  </table>
				 </form>
				 </div>
				 {literal}
				 <script>
	 function viewCats2(CatIdent,CusIdent) {
        var pro_id = btoa(CatIdent); 
		var s_num=btoa(CusIdent);
  FormName		= document.ProjectList;
  FormName.action ='project_quote_detail_view.php?project_order_no='+pro_id+"&s_n4="+s_num;          
  FormName.submit();

 }
 </script>
 {/literal}
				 
                </div><!-- /.tab-content -->
              </div><!-- /.nav-tabs-custom -->
			  
				
				

 </div>
</div><!-- /.row -->
</div>
</section><!-- /.content -->
</div><!-- /.content-wrapper -->
            <!-- Control Sidebar -->
      <!-- /.control-sidebar -->
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
		  
      <div class="control-sidebar-bg"></div>
		 {literal} 
 <script>
 function doOnLoad() 
		{
   document.getElementById('Contact').contentWindow.location.reload(true);
}
    </script>
	{/literal}
  </body>
 </html>

