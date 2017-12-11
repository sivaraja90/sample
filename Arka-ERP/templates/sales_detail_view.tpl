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
label.font
{
font-weight:normal
}
</style>
<script type="text/javascript" src='./dhtmlxMessage/codebase/dhtmlxmessage.js'></script>
<script type='text/javascript' src='./auto-complete/jquery.metadata.js'></script>
	<script type='text/javascript' src='./auto-complete/jquery.auto-complete.js?<?= mktime() ?>'></script>
	<script type='text/javascript' src='./auto-complete/js.js?<?= mktime() ?>'></script>
	<link rel="stylesheet" href= "../codebase/skins/dhtmlxmessage_dhx_skyblue.css" type="text/css" media="all"/>
	<link rel='stylesheet' type='text/css' href='../auto-complete/jquery.auto-complete.css?<?= mktime() ?>' />
{/literal}

 <body class="hold-transition skin-blue sidebar-mini">
  <div class="content-wrapper">
	<section class="content-header">
          <h4>
            <small  class="active"><a href="sales_order_list.php"><i class="fa fa-list"> <label class="font" style="font-family:Arial, Helvetica, sans-serif">
		 List Sales Order</label></i></a></small>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
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
				<table width="113%">
				<tr>
				 <td>Created:&nbsp;{$View.created_date}&nbsp;&nbsp; {$View.created_time}</td>
                  <td>
				 <h4>{$View.company_name}&nbsp;[{$View.sales_order_no}]</h4></td>
				<td style="margin-left:-1000px;"> Modified:&nbsp;{$Date_Stamp.0.Date}&nbsp;&nbsp;{$Time_Stamp.0.Time}</td>
				</tr>
				</table>
				{/foreach}
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
                      <label class="col-sm-4 thick">Sales Quote No</label>
                      <div class="col-sm-6">
					{$EditList.sales_quote_no}
                      </div>
			          </div>
					  <div class="form-group">
                      <label class="col-sm-4 thick">Item Type</label>
                      <div class="col-sm-6">
					    {$EditList.item_type}
                      </div>
					  </div>
					 <div class="form-group">
                      <label class="col-sm-4 thick">Customer Id</label>
                      <div class="col-sm-6">
					    {$EditList.customer_id}
                      </div>
					  </div>
                    <div class="form-group">
                      <label class="col-sm-4 thick">Po No</label>
                      <div class="col-sm-6">
					    {$EditList.po_no}
                      </div>
					  </div>
					  <div class="form-group">
                      <label class="col-sm-4 thick">Enquiry Id</label>
                      <div class="col-sm-6">
					    {$EditList.enquiry_id}
                      </div>
					  </div>
					  <div class="form-group">
                      <label class="col-sm-4 thick">Mobile No</label>
                      <div class="col-sm-6">
					    {$EditList.mobile_no}
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

					  <div class="form-group">
                      <label class="col-sm-4 thick">Address</label>
                      <div class="col-sm-6">
					    {$EditList.address1}
                      </div>
					  </div>

					  <div class="form-group">
                      <label class="col-sm-4 thick">Area</label>
                      <div class="col-sm-6">
					    {$EditList.area}
                      </div>
					  </div>
					  <div class="form-group">
                      <label class="col-sm-4 thick">Pincode</label>
                      <div class="col-sm-6">
					    {$EditList.pincode}
                      </div>
					  </div>
					  <div class="form-group">
                      <label class="col-sm-4 thick">Created By</label>
                      <div class="col-sm-6">
					    {$EditList.created_by}
                      </div>
					  </div>
					   <div class="form-group">
                      <label class="col-sm-4 thick">Arka Group</label>
                      <div class="col-sm-6">
					    {$EditList.arka_group}
                      </div>
					  </div>
					</div>
					<!--**********************************************************-->
					    <div class="col-md-6">
						<div class="form-group">
                      <label class="col-sm-4 thick">Quote Date</label>
                      <div class="col-sm-6">
						 {$EditList.quote_date}
                      </div>
					   </div>
						<div class="form-group">
                      <label class="col-sm-4 thick">Sales Order Date</label>
                      <div class="col-sm-6">
						 {$EditList.sales_order_date}
                      </div>
					   </div>
					   <div class="form-group">
                      <label class="col-sm-4 thick">Customer Name</label>
                      <div class="col-sm-6">
						 {$EditList.customer_name}
                      </div>
					   </div>
					   <div class="form-group">
                      <label class="col-sm-4 thick">Po Date</label>
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
                      <label class="col-sm-4 thick">Revised No</label>
                      <div class="col-sm-6">
						 {$EditList.sales_quote_revise_no}
                      </div>
					   </div>

					   {if $EditList.phone_no neq ""}
					   <div class="form-group">
                      <label class="col-sm-4 thick">Phone No</label>
                      <div class="col-sm-6">
						 {$EditList.area_code}&nbsp;{$EditList.phone_no}&nbsp;{$EditList.extension}
                      </div>
					   </div>
					   {/if}

					   {if $EditList.email_id1 neq ""}
					     <div class="form-group">
                      <label class="col-sm-4 thick">Email Id1</label>
                      <div class="col-sm-6">
						 {$EditList.email_id1}
                      </div>
					   </div>
					  {/if}

					  {if $EditList.address2 neq ""}
					   <div class="form-group">
                      <label class="col-sm-4 thick">Address1</label>
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

					   <div class="form-group">
                      <label class="col-sm-4 thick">Remarks</label>
                      <div class="col-sm-6">
						 {$EditList.remarks}
                      </div>
					   </div>
					</div>
					{/foreach}
					</div>
					</form>
						<!-- /.box-header -->
				<div class="clear"></div>
				<div style="margin-top:-10px; margin-bottom: 10px;border: 0px;"><center>
				<input type="button" class="btn  btn-danger btn-xs" value="Add Follow Ups" data-toggle="modal" data-target="#Follow{$View.sales_order_no}">&nbsp;&nbsp;
				<input type="button" class="btn  btn-danger btn-xs" value="Generate Invoice" data-toggle="modal" data-target="#GenerateInvoice{$View.sales_order_no}">&nbsp;&nbsp;
				<input type="button" class="btn  btn-danger btn-xs" value="Make Payment" data-toggle="modal" data-target="#Makepayment{$View.sales_order_no}">&nbsp;&nbsp;
						  </center>
						  </div>

		<!-- ************************  Add FollowUp ****************************-->
		<div class="modal fade" id="Follow{$View.sales_order_no}" role="dialog">
		<div class="modal-dialog">

			<div class="modal-content" style="width:765px;">
				<div class="modal-header" id="FollowUpHeader" style="background-color:#00CCFF;">
					<button type="button" class="close" data-dismiss="modal" onClick="window.location.reload();">&times;</button>
					<h4 class="modal-title">Add Follow Ups</h4>
				</div>
		<iframe height="490px" width="100%" id="Follow" name="salFoll"  src="./salesfollow.php?sales_order_no={$View.sales_order_no}&enquiry_id={$View.enquiry_id}" style="border:1px;"></iframe>
			</div>
		</div>
	</div>
	<!-- *************************** Generate Invoice **************************** -->
	<div class="modal fade" id="GenerateInvoice{$View.sales_order_no}" role="dialog">
		<div class="modal-dialog">

			<div class="modal-content" style="width:765px;">
				<div class="modal-header" id="InvoiceHeader" style="background-color:#00CCFF;">
					<button type="button" class="close" data-dismiss="modal" onClick="window.location.reload();">&times;</button>
					<h4 class="modal-title">Generate Invoice</h4>
				</div>
					<iframe height="490px" width="100%" id="GenerateInvoice"  src="./sales_invoice.php?sales_order_no={$View.sales_order_no}&enquiry_id={$View.enquiry_id}" style="border:1px;"></iframe>
			</div>
		</div>
	</div>
	<!-- ********************  Make Payment  *****************  -->
	<div class="modal fade" id="Makepayment{$View.sales_order_no}" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content" style="width:765px;">
				<div class="modal-header" id="PaymentHeader" style="background-color:#00CCFF;">
					<button type="button" class="close" data-dismiss="modal" onClick="window.location.reload();">&times;</button>
					<h4 class="modal-title">Make Payment</h4>
				</div>
					<iframe height="490px" width="100%" id="MakePayment" src="./sales_makepayment.php?sales_order_no={$View.sales_order_no}&enquiry_id={$View.enquiry_id}" style="border:1px;"></iframe>
			</div>
		</div>
	</div>

	<!--******************************************************************************************************-->
	<div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
				<li class="active"><a href="#sales" data-toggle="tab">Sales Order</a></li>
                  <li ><a href="#follow" data-toggle="tab">Follow Ups</a></li>
				  <li><a href="#invoice" data-toggle="tab">Invoice</a></li>
				  <li><a href="#payment" data-toggle="tab">Payment</a></li>
                </ul>
                <div class="tab-content">
                  <!-- FollowUp Content -->
                  <div class="tab-pane" id="follow">
                    <form name="FollowList" id="FollowList" method="post">
                  <table id="example1" class="table table-bordered table-striped" style="font-size:13px; , Times, serif;">

                    <thead>
                      <tr>
					 <th><center>Sl.No</center></th>
                        <th><center>Customer Id</center></th>
                        <th><center>Order Status</center></th>
						<th><center>Snooze Date &amp; Time</center></th>
						<th><center>Closed Date &amp;Time</center></th>
                        <th><center>Created By</center></th>
						<th><center>Timestamp</center></th>
						<th><center>Action</center></th>
                      </tr>
                    </thead>
                    <tbody>
						{foreach from=$follow item=Contact}
					<tr id="{$i++}">
								<input type="hidden" value="{$Contact.sl_no}" />
								<input type="hidden" value="{$Contact.customer_id}" />
								<input type="hidden" value="{$Contact.enquiry_id}" />
								<input type="hidden" value="{$Contact.service_order_no}" />
								<td align="center"><a href="#" data-toggle="modal" data-target="#ViewContact{$Contact.sales_order_no}">{$i}</a></td>
								<td align="center"><a href="#" data-toggle="modal" data-target="#ViewContact{$Contact.sales_order_no}">{$Contact.customer_id}</a></td>
								<td align="center"><a href="#" data-toggle="modal" data-target="#ViewContact{$Contact.sales_order_no}">{$Contact.order_status}</a></td>
								<td align="center"><a href="#" data-toggle="modal" data-target="#ViewContact{$Contact.sales_order_no}">{if $Contact.snooze_date eq '0000-00-00'} NA {elseif $Contact.snooze_date neq '0000-00-00'}{$Contact.snooze_date}{/if} &nbsp;&nbsp;{if $Contact.snooze_time eq '00:00:00'} NA {elseif $Contact.snooze_time  neq '00:00:00'}{$Contact.snooze_time}{/if}</a></td>
								<td align="center"><a href="#" data-toggle="modal" data-target="#ViewContact{$Contact.sales_order_no}">{if $Contact.closed_date eq '0000-00-00'} NA {elseif $Contact.closed_date neq '0000-00-00'}{$Contact.closed_date}{/if}&nbsp;&nbsp;{if $Contact.closed_time eq '00:00:00'} NA {elseif $Contact.closed_time neq '00:00:00'}{$Contact.closed_time}{/if}</a></td>
								<td align="center"><a href="#" data-toggle="modal" data-target="#ViewContact{$Contact.sales_order_no}">{$Contact.created_by}</a></td>
								<td align="center"><a href="#" data-toggle="modal" data-target="#ViewContact{$Contact.sales_order_no}">{$Contact.timestamp}</a></td>
								<td class="center" align="center">&nbsp;&nbsp; &nbsp;&nbsp;<a href="#" onClick="Javascript:deleteCat1('{$Contact.sl_no}','{$Contact.sales_order_no}')"><i class="fa fa-trash"></i></a></td>
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
function deleteCat1(CatIdent,CusIdent){
var sales_id = btoa(CusIdent);
  if(confirm("Are you sure to Delete this Content?")){
  FormName		= document.FollowList;
  FormName.action= "sales_detail_view.php?sl_no="+CatIdent+"&sales_order_no="+sales_id;
  FormName.submit();
 }
 }
 </script>
 {/literal}
					<!-- Invoice Tab Content  -->
					<div class="tab-pane" id="invoice">
                    <form name="InvoiceList" id="InvoiceList" method="post">
                  <table id="example1" class="table table-bordered table-striped" style="font-size:13px; , Times, serif;">

                    <thead>
                      <tr>
					 <th><center>Sl.No</center></th>
                        <th><center>Invoice Number</center></th>
                        <th><center>Sales Order Number</center></th>
						<th><center>Invoice Amount</center></th>
						<th><center>Paid Amount</center></th>
						<th><center>Invoice Date</center></th>
                        <th><center>Payment Status</center></th>
                      </tr>

                    </thead>
                    <tbody>
						{foreach from=$invoice item=invo}
					<tr id="{$k++}">
								<input type="hidden" value="{$Contact.sl_no}" />
								<input type="hidden" value="{$Contact.customer_id}" />
								<input type="hidden" value="{$Contact.enquiry_id}" />
								<input type="hidden" value="{$Contact.service_order_no}" />
								<td align="center"><a href="#" data-toggle="modal" data-target="#ViewContact{$Contact.sales_order_no}">{$k}</a></td>
								<td align="center"><a href="#" data-toggle="modal" data-target="#ViewContact{$Contact.sales_order_no}">{$invo.invoice_no}</a></td>
								<td align="center"><a href="#" data-toggle="modal" data-target="#ViewContact{$Contact.sales_order_no}">{$invo.sales_order_no}</a></td>
								<td align="center"><a href="#" data-toggle="modal" data-target="#ViewContact{$Contact.sales_order_no}">{$invo.invoice_amount}</a></td>
								<td align="center"><a href="#" data-toggle="modal" data-target="#ViewContact{$Contact.sales_order_no}">{$invo.paid_amount}</a></td>
								<td align="center"><a href="#" data-toggle="modal" data-target="#ViewContact{$Contact.sales_order_no}">{$invo.invoice_date}</a></td>
								<td align="center"><a href="#" data-toggle="modal" data-target="#ViewContact{$Contact.sales_order_no}">{$invo.payment_status}</a></td>
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

					<!--Payment List-->
					<div class="tab-pane" id="payment">
				<form name="SalesList" id="SalesList" method="post">
                  <table id="example2" class="table table-bordered table-striped" style="font-size:13px; , Times, serif;">
                    <thead>
					<tr>
						<th><center>Sl.No</center></th>
                        <th><center>Invoice Number</center></th>
                        <th><center>Sales Order Number</center></th>
						<th><center>Invoice Amount</center></th>
						<th><center>Invoice Date</center></th>
						<th><center>Pending Amount</center></th>
						<th><center>Paid Amount</center></th>
						<th><center>Timestamp</center></th>
                        <th><center>Payment Status</center></th>
					</tr>
                    </thead>
                    <tbody>
                     {foreach from=$payment item=listSales}
					<tr id="{$p++}">
					            <input type="hidden" value="{$Contact.sl_no}" />
								<input type="hidden" value="{$Contact.customer_id}" />
								<input type="hidden" value="{$Contact.enquiry_id}" />
								<input type="hidden" value="{$Contact.sales_order_no}" />

								<td align="center"><a href="#" data-toggle="modal" data-target="#ViewContact{$listSales.sales_order_no}">{$p}</a></td>
								<td align="center"><a href="#" data-toggle="modal" data-target="#ViewContact{$listSales.sales_order_no}">{$listSales.invoice_no}</a></td>
								<td align="center"><a href="#" data-toggle="modal" data-target="#ViewContact{$listSales.sales_order_no}">{$listSales.sales_order_no}</a></td>								                                <td align="center"><a href="#" data-toggle="modal" data-target="#ViewContact{$listSales.sales_order_no}">{$listSales.invoice_amount}</a></td>
								<td align="center"><a href="#" data-toggle="modal" data-target="#ViewContact{$listSales.sales_order_no}">{$listSales.invoice_date}</a></td>
								<td align="center"><a href="#" data-toggle="modal" data-target="#ViewContact{$listSales.sales_order_no}">{$listSales.pending_amount}</a></td>
								<td align="center"><a href="#" data-toggle="modal" data-target="#ViewContact{$listSales.sales_order_no}">{$listSales.paid_amount}</a></td>
								<td align="center"><a href="#" data-toggle="modal" data-target="#ViewContact{$listSales.sales_order_no}">{$listSales.timestamp}</a></td>
								<td align="center"><a href="#" data-toggle="modal" data-target="#ViewContact{$listSales.sales_order_no}">{$listSales.payment_status}</a></td>
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
                               <!--Sales Order List-->
					<div class="tab-pane active" id="sales">
				<form name="SalesList" id="SalesList" method="post">
                  <table id="example2" class="table table-bordered table-striped" style="font-size:13px; , Times, serif;">
                    <thead>
					<tr>
								<th><center>Sl.No</center></th>
								<th><center>Sales Order No</center></th>
								<th><center>Revised Version</center> </th>
								<th><center>Item Description</center></th>
								<th><center>Sub Total</center></th>
								<th><center>Total</center></th>
					</tr>
                    </thead>
                    <tbody>
                     {foreach from=$MasterList item=listSales}
					<tr id="{$j++}">
					<td align="center"><a href="#" data-toggle="modal" data-target="#ViewSales">{$j}</a></td>
					<td align="center"><a href="#" data-toggle="modal" data-target="#ViewSales{$listSales.sales_quote_no}">{$listSales.sales_order_no}</a></td>
					<td align="center"><a href="#" data-toggle="modal" data-target="#ViewSales{$listSales.sales_quote_no}">{$listSales.sales_revised_version}</a></td>
					<td align="center"><a href="#" data-toggle="modal" data-target="#ViewSales{$listSales.sales_quote_no}">{$listSales.item_description}</a></td>
					<td align="center"><a href="#" data-toggle="modal" data-target="#ViewSales{$listSales.sales_quote_no}">{$listSales.sub_total}</a></td>
					<td align="center"><a href="#" data-toggle="modal" data-target="#ViewSales{$listSales.sales_quote_no}">{$listSales.total}</a></td>

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
					</div>
					</div>
				</div>
                </div><!-- /.box-body -->
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
	<style>
label,td.thick
{
font-weight:bold;
}
	</style>
	{/literal}
  </body>
 </html>
