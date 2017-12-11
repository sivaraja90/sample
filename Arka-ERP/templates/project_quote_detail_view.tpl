{include file="left.tpl"}
{literal}
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
font-weight:normal
}

</style>
<script type="text/javascript" src='./dhtmlxMessage/codebase/dhtmlxmessage.js'></script>
<script type='text/javascript' src='./auto-complete/jquery.metadata.js'></script>
	<script type='text/javascript' src='./auto-complete/jquery.auto-complete.js?<?= mktime() ?>'></script>
	<script type='text/javascript' src='./auto-complete/js.js?<?= mktime() ?>'></script>
	<link rel="stylesheet" href= "./codebase/skins/dhtmlxmessage_dhx_skyblue.css" type="text/css" media="all"/> 
	<link rel='stylesheet' type='text/css' href='auto-complete/jquery.auto-complete.css?<?= mktime() ?>' />
	<script>
		$(document).on("click", ".fa-trash", function () {
     var project_order_no = $(this).data('id');
     $(".modal-body #hdnDelproject_order_no").val(project_order_no);
});

</script>
{/literal}

 <body class="hold-transition skin-blue sidebar-mini">
  <div class="content-wrapper">
	<section class="content-header">
          <h4>
            <small><a href="project_order_list.php"><i class="fa fa-list"> <label class="font" style="font-family:Arial, Helvetica, sans-serif">
List Project Order</label></i></a></small>&ensp;&ensp;&ensp;
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
				{foreach from=$created_Date item=View}
				<table width="110%">
				<tr>
				 <td>Created:&nbsp;{$View.created_date}&nbsp;&nbsp;{$View.created_time}</td>
                  <td>
				 <h4>{$View.company_name}&nbsp;[{$View.project_order_no}]</h4></td>
				<td style="margin-left:-1000px;"> Modified:&nbsp;{$Date_Stamp.0.Date}&nbsp;&nbsp;{$Time_Stamp.0.Time}</td>
				</tr>
				</table>
				{/foreach}
				<br>

				<form class="form-horizontal">
				<input type="hidden" name="hdAction" />
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
				
                  <div class="box-body">
				  {foreach from=$ListDetail item=EditList}
				   <div class="col-md-6">
				    <div class="form-group">			 
                      <label class="col-sm-4 thick">Project Quote No</label>
                      <div class="col-sm-6">
					{$EditList.project_quote_no}
                      </div>
			          </div>
                    <div class="form-group">			 
                      <label class="col-sm-4 thick">PO No</label>
                      <div class="col-sm-6">
					{$EditList.po_no}
                      </div>
			          </div>
					  
					  {if $EditList.project_order_date neq "" AND $EditList.project_order_date neq "0"}
					 <div class="form-group">
                      <label class="col-sm-4 thick">Order Date</label>
                      <div class="col-sm-6">
                        {$EditList.project_order_date}
                      </div>
                    </div>
					{/if}
					
					  <div class="form-group">			 
                      <label class="col-sm-4 thick">Enquiry Id</label>
                      <div class="col-sm-6">
					{$EditList.enquiry_id}
                      </div>
			          </div>
					  
					  {if $EditList.phone_no neq "" AND $EditList.phone_no neq "0"}
					  <div class="form-group">			 
                      <label class="col-sm-4 thick">Phone No</label>
                      <div class="col-sm-6">
					{$EditList.area_code}&nbsp;{$EditList.phone_no}&nbsp;{$EditList.extension}
                      </div>
			          </div>
					  {/if}
					  
					  {if $EditList.address1 neq ""}
					   <div class="form-group">			 
                      <label class="col-sm-4 thick">Address 1</label>
                      <div class="col-sm-6">
					{$EditList.address1}
                      </div>
			          </div>
					  {/if}
					  
					  {if $EditList.area neq ""} 
					  <div class="form-group">			 
                      <label class="col-sm-4 thick">Area</label>
                      <div class="col-sm-6">
					{$EditList.area}
                      </div>
			          </div>
					  {/if}
					  
					  <div class="form-group">			 
                      <label class="col-sm-4 thick">Pincode</label>
                      <div class="col-sm-6">
					{$EditList.pincode}
                      </div>
			          </div> 
					  
					  {if $EditList.email_id neq ""}
					  <div class="form-group">			 
                      <label class="col-sm-4 thick">Email Id</label>
                      <div class="col-sm-6">
					{$EditList.email_id}
                      </div>
			          </div> 
					 {/if}
					 
					</div>
					<!--**********************************************************-->
					    <div class="col-md-6">
						
						 <div class="form-group">			 
                      <label class="col-sm-4 thick">Project Quote Date</label>
                      <div class="col-sm-6">
					{$EditList.quote_date}
                      </div>
			          </div>
					  
						<div class="form-group">
						<label class="col-sm-4 thick">PO Date</label>
                      <div class="col-sm-6">
					  {$EditList.po_date}
                      </div>
					  </div>
					  
					<div class="form-group">
                      <label class="col-sm-4 thick">Order Status</label>
                      <div class="col-sm-6">
						 {$EditList.order_status}
                      </div>
					   </div>
					   
                       <div class="form-group">			 
                      <label class="col-sm-4 thick">Customer Id</label>
                      <div class="col-sm-6">
					{$EditList.customer_id}
                      </div>
			          </div>	
					  	
						{if $EditList.mobile_no neq "" AND $EditList.mobile_no neq "0"}
					<div class="form-group">			 
                      <label class="col-sm-4 thick">Mobile No</label>
                      <div class="col-sm-6">
					{$EditList.mobile_no}
                      </div>
			          </div>
					  {/if}
					  	
						{if $EditList.address2 neq ""}
					   <div class="form-group">			 
                      <label class="col-sm-4 thick">Address 2</label>
                      <div class="col-sm-6">
					{$EditList.address2}
                      </div>
			          </div>
					  {/if}
					   
					  <div class="form-group">			 
                      <label class="col-sm-4 thick">City</label>
                      <div class="col-sm-6">
					{$EditList.city}
                      </div>
			          </div> 
					     
					  {if $EditList.email_id1 neq ""}
					  <div class="form-group">			 
                      <label class="col-sm-4 thick">Email Id1</label>
                      <div class="col-sm-6">
					{$EditList.email_id1}
                      </div>
			          </div> 
					  {/if}
					  
					   <div class="form-group">			 
                      <label class="col-sm-4 thick">Created By</label>
                      <div class="col-sm-6">
					{$EditList.created_by}
                      </div>
			          </div> 
					  </div>
					{/foreach}
					</div>
					</form>
</div>
						<!-- /.box-header -->
                
				<div class="clear"></div>
				<div style="margin-top:-10px; margin-bottom:10px;border: 0px;"><center>
			    <input type="button" class="btn  btn-danger btn-xs" value="Add Follow Ups" data-toggle="modal" data-target="#Followup"> &nbsp;&nbsp;
				<input type="button" class="btn  btn-danger btn-xs" value="Generate Invoice" data-toggle="modal" data-target="#GenerateInvoice{$View.project_order_no}"> &nbsp;&nbsp;  				<input type="button" class="btn  btn-danger btn-xs" value="Make Payment" data-toggle="modal" data-target="#Makepayment{$View.project_order_no}"> &nbsp;&nbsp;
						  </center>
						  </div>
					<!--*************************Generate FollowUp***********************************-->	  
		 <div class="modal fade" id="Followup" role="dialog">
		<div class="modal-dialog">

			<div class="modal-content" style="width:765px;">
				<div class="modal-header" id="ProjectFollowUpHeader" style="background-color:#00CCFF;">
					<button type="button" class="close" data-dismiss="modal" onClick="window.location.reload();">&times;</button>
					<h4 class="modal-title">Add Follow Ups</h4>
				</div>
			<iframe height="490px" width="100%" id="Followup"  src="./project_order_followup.php?project_order_no={$View.project_order_no}&enquiry_id={$EditList.enquiry_id}" style="border:1px;"></iframe>
			</div>
		</div>
	</div>
	
	<!-- *************************Generate Invoice  **************************-->
	<div class="modal fade" id="GenerateInvoice{$View.project_order_no}" role="dialog">
		<div class="modal-dialog">

			<div class="modal-content" style="width:765px;">
				<div class="modal-header" id="FollowUpHeader" style="background-color:#00CCFF;">
					<button type="button" class="close" data-dismiss="modal" onClick="window.location.reload();">&times;</button>
					<h4 class="modal-title">Generate Invoice</h4>
				</div>
					<iframe height="490px" width="100%" id="GenerateInvoice"  src="./project_invoice.php?project_order_no={$View.project_order_no}&enquiry_id={$View.enquiry_id}" style="border:1px;"></iframe>
			</div>
		</div>
	</div>
	
	
	<!-- ********************  Make Payment  *****************  -->
	<div class="modal fade" id="Makepayment{$View.project_order_no}" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content" style="width:765px;">
				<div class="modal-header" id="FollowUpHeader" style="background-color:#00CCFF;">
					<button type="button" class="close" data-dismiss="modal" onClick="window.location.reload();">&times;</button>
					<h4 class="modal-title">Make Payment</h4>
				</div>
					<iframe height="490px" width="100%" id="MakePayment" src="./project_makepayment.php?project_order_no={$View.project_order_no}&enquiry_id={$View.enquiry_id}" style="border:1px;"></iframe>
			</div>
		</div>
	</div>

	<!--******************************************************************************************************-->
	<div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
		 <li class="active"><a href="#project" data-toggle="tab">Project Order</a></li>
                  <li ><a href="#follow" data-toggle="tab">Follow Ups</a></li>
				   <li><a href="#invoice" data-toggle="tab">Invoice</a></li>
				  <li><a href="#payment" data-toggle="tab">Payment</a></li>
                </ul>
                <div class="tab-content">
                  <!-- Font Awesome Icons -->
              
				
				<div class="tab-pane active" id="project">
				<form name="SalesList" id="SalesList" method="post">
                  <table id="example2" class="table table-bordered table-striped" style="font-size:13px; , Times, serif;">
                    <thead>
					<tr>
								<th><center>Sl.No</center></th> 
								<th><center>Project Quote No</center></th>
								<th><center>Revised Version</center> </th>
								<th><center>Mat Estimate</center></th>
						        <th><center>Lab Estimate</center></th>
								<th><center>Total</center></th>
								
								
					</tr>
                    </thead>
                    <tbody>
                     {foreach from=$ListEdit item=listSales}
					<tr id="{$j++}">
					<td align="center"><a href="#" data-toggle="modal" data-target="#ViewSales">{$j}</a></td>
								<td align="center"><a href="#" data-toggle="modal" data-target="#ViewSales{$listSales.project_order_no}">{$listSales.project_quote_no}</a></td>
								<td align="center"><a href="#" data-toggle="modal" data-target="#ViewSales{$listSales.project_order_no}">{$listSales.revised_version}</a></td>
								<td align="center"><a href="#" data-toggle="modal" data-target="#ViewSales{$listSales.project_order_no}">{$listSales.material_estimate}</a></td>								
								<td align="center"><a href="#" data-toggle="modal" data-target="#ViewSales{$listSales.project_order_no}">{$listSales.labour_estimate}</a></td>
								<td align="center"><a href="#" data-toggle="modal" data-target="#ViewSales{$listSales.project_order_no}">{$listSales.total}</a></td>
								
						
                    </tr>
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
				 
				    <div class="tab-pane" id="follow">
                    <form name="FollowList" id="FollowList" method="post">
                  <table id="example1" class="table table-bordered table-striped" style="font-size:13px; , Times, serif;">
									 
                    <thead>
                      <tr>
					 <th><center>Sl.No</center></th>
						<th><center>Enquiry Id</center></th>
                        <th><center>Order Status</center></th>
						  <th><center>Snooze Date&amp;Time</center></th>
						<th><center>Closed Date&amp;Time</center></th>
						<th><center>Created By</center></th>
                        <th><center>Timestamp</center></th>
						<th><center>Action</center></th>
                      </tr>

                    </thead>
                    <tbody>	
					{foreach from=$ProOdrFollowupList item=FollowupList}
					
					<tr id="{$i++}">
					<input type="hidden" value="{$FollowupList.sl_no}" />
								<input type="hidden" value="{$FollowupList.customer_id}" />
								<input type="hidden" value="{$FollowupList.enquiry_id}" />
								<input type="hidden" value="{$FollowupList.project_order_no}" />
								<td align="center"><a href="#" data-toggle="modal" data-target="#ViewContact{$FollowupList.project_order_no}">{$i}</a></td>
								<td align="center"><a href="#" data-toggle="modal" data-target="#ViewContact{$FollowupList.project_order_no}">{$FollowupList.enquiry_id}</a></td>
								<td align="center"><a href="#" data-toggle="modal" data-target="#ViewContact{$FollowupList.project_order_no}">{$FollowupList.order_status}</a></td>
								<td align="center"><a href="#" data-toggle="modal" data-target="#ViewContact{$FollowupList.sl_no}">{if $FollowupList.snooze_date eq '0000-00-00'} NA {elseif $FollowupList.snooze_date neq '0000-00-00'}{$FollowupList.snooze_date}{/if} &nbsp;&nbsp;{if $FollowupList.snooze_time eq '00:00:00'} NA {elseif $FollowupList.snooze_time  neq '00:00:00'}{$FollowupList.snooze_time}{/if}</a></td>
										<td align="center"><a href="#" data-toggle="modal" data-target="#ViewContact{$FollowupList.sl_no}">{if $FollowupList.closed_date eq '0000-00-00'} NA {elseif $FollowupList.closed_date neq '0000-00-00'}{$FollowupList.closed_date}{/if}&nbsp;&nbsp;{if $FollowupList.closed_time eq '00:00:00'} NA {elseif $FollowupList.closed_time neq '00:00:00'}{$FollowupList.closed_time}{/if}</a></td>
								<td align="center"><a href="#" data-toggle="modal" data-target="#ViewContact{$FollowupList.project_order_no}">{$FollowupList.created_by}</a></td>
								<td align="center"><a href="#" data-toggle="modal" data-target="#ViewContact{$FollowupList.sl_no}">{$FollowupList.timestamp}</a></td>
       	<td class="center" align="center">
						&nbsp;&nbsp; &nbsp;&nbsp;<a href="#" onClick="Javascript:deleteCat('{$FollowupList.sl_no}','{$FollowupList.project_order_no}')"><i class="fa fa-trash"></i></a></td></tr>
					{foreachelse}
					<tr>
								<td height="20" colspan="12" align="center"><img src="images/warning.gif" border="0">&nbsp;No Records Found</td>
					</tr>
					{/foreach}
					</tr>
					</tbody>
					</table>
					</form>
				</div>
				
				{literal}
				<script>
	   function deleteCat(CatIdent,CusIdent){
	    var proj_id = btoa(CusIdent); 
  if(confirm("Are you sure to Delete this Content?")){
  FormName		= document.FollowList;
  FormName.action= "project_quote_detail_view.php?sl_no="+CatIdent+"&project_order_no="+proj_id;
  FormName.submit();
 }
 }				
	</script>
	{/literal} 
				 <div class="tab-pane" id="invoice">
                    <form name="InvoiceList" id="InvoiceList" method="post">
                  <table id="example1" class="table table-bordered table-striped" style="font-size:13px; , Times, serif;">
									 
                    <thead>
                      <tr>
					 <th><center>Sl.No</center></th>
                        <th><center>Invoice Number</center></th>
                        <th><center>Project Order Number</center></th>
						<th><center>Invoice Amount</center></th>
						<th><center>Paid Amount</center></th>
						<th><center>Invoice Date</center></th>
                        <th><center>Payment Status</center></th>
                      </tr>

                    </thead>
                    <tbody>	
						{foreach from=$invoice item=invo}
					<tr id="{$k++}">
								<input type="hidden" value="{$invo.sl_no}" />
								<input type="hidden" value="{$invo.customer_id}" />
								<input type="hidden" value="{$invo.enquiry_id}" />
								<input type="hidden" value="{$invo.project_order_no}" />
								<td align="center"><a href="#" data-toggle="modal" data-target="#ViewContact{$Contact.project_order_no}">{$k}</a></td>
								<td align="center"><a href="#" data-toggle="modal" data-target="#ViewContact{$Contact.project_order_no}">{$invo.invoice_no}</a></td>
								<td align="center"><a href="#" data-toggle="modal" data-target="#ViewContact{$Contact.project_order_no}">{$invo.project_order_no}</a></td>
								<td align="center"><a href="#" data-toggle="modal" data-target="#ViewContact{$Contact.project_order_no}">{$invo.invoice_amount}</a></td>
								<td align="center"><a href="#" data-toggle="modal" data-target="#ViewContact{$Contact.project_order_no}">{$invo.paid_amount}</a></td>
								<td align="center"><a href="#" data-toggle="modal" data-target="#ViewContact{$Contact.project_order_no}">{$invo.invoice_date}</a></td>
								<td align="center"><a href="#" data-toggle="modal" data-target="#ViewContact{$Contact.project_order_no}">{$invo.payment_status}</a></td>
				   </tr>
					  {foreachelse}
					<tr>
								<td height="20" colspan="12" align="center"><img src="./images/warning.gif" border="0">&nbsp;No Records Found</td>
					</tr>
					{/foreach}
					</tbody>
					</table>
					</form>
					</div>
					{literal}
					<script>
 </script>
 {/literal}
  <div class="tab-pane" id="payment">
                    <form name="PaymentList" id="PaymentList" method="post">
                  <table id="example1" class="table table-bordered table-striped" style="font-size:13px; , Times, serif;">
									 
                    <thead>
                      <tr>
					 <th><center>Sl.No</center></th>
                        <th><center>Invoice Number</center></th>
                        <th><center>Project Order Number</center></th>
						<th><center>Invoice Amount</center></th>
						<th><center>Invoice Date</center></th>
						<th><center>Pending Amount</center></th>
						<th><center>Paid Amount</center></th>
						<th><center>Timestamp</center></th>
                        <th><center>Payment Status</center></th>
                      </tr>

                    </thead>
                    <tbody>	
						{foreach from=$payment item=invo}
					<tr id="{$p++}">
								<input type="hidden" value="{$Contact.sl_no}" />
								<input type="hidden" value="{$Contact.customer_id}" />
								<input type="hidden" value="{$Contact.enquiry_id}" />
								<input type="hidden" value="{$Contact.project_order_no}" />
								<td align="center"><a href="#" data-toggle="modal" data-target="#ViewContact{$Contact.project_order_no}">{$p}</a></td>
								<td align="center"><a href="#" data-toggle="modal" data-target="#ViewContact{$Contact.project_order_no}">{$invo.invoice_no}</a></td>
								<td align="center"><a href="#" data-toggle="modal" data-target="#ViewContact{$Contact.project_order_no}">{$invo.project_order_no}</a></td>
								<td align="center"><a href="#" data-toggle="modal" data-target="#ViewContact{$Contact.project_order_no}">{$invo.invoice_amount}</a></td>
								<td align="center"><a href="#" data-toggle="modal" data-target="#ViewContact{$Contact.project_order_no}">{$invo.invoice_date}</a></td>
								<td align="center"><a href="#" data-toggle="modal" data-target="#ViewContact{$Contact.project_order_no}">{$invo.pending_amount}</a></td>
								<td align="center"><a href="#" data-toggle="modal" data-target="#ViewContact{$Contact.project_order_no}">{$invo.paid_amount}</a></td>
								<td align="center"><a href="#" data-toggle="modal" data-target="#ViewContact{$Contact.project_order_no}">{$invo.timestamp}</a></td>
								<td align="center"><a href="#" data-toggle="modal" data-target="#ViewContact{$Contact.project_order_no}">{$invo.payment_status}</a></td>
				   </tr>
					  {foreachelse}
					<tr>
								<td height="20" colspan="12" align="center"><img src="./images/warning.gif" border="0">&nbsp;No Records Found</td>
					</tr>
					{/foreach}
					</tbody>
					</table>
					</form>
					</div>
 
 
				</div><!--/.tab-content-->
                </div><!-- /.nav-tab-custom-->
				
							
					</div>		<!-- /.box-body -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <div class="control-sidebar-bg"></div>
	  

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
  </body>
 </html>

