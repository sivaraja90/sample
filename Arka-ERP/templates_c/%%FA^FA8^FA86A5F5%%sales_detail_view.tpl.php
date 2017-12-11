<?php /* Smarty version 2.6.25, created on 2017-11-29 17:09:47
         compiled from sales_detail_view.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "left.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php echo '
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
<script type="text/javascript" src=\'./dhtmlxMessage/codebase/dhtmlxmessage.js\'></script>
<script type=\'text/javascript\' src=\'./auto-complete/jquery.metadata.js\'></script>
	<script type=\'text/javascript\' src=\'./auto-complete/jquery.auto-complete.js?<?= mktime() ?>\'></script>
	<script type=\'text/javascript\' src=\'./auto-complete/js.js?<?= mktime() ?>\'></script>
	<link rel="stylesheet" href= "../codebase/skins/dhtmlxmessage_dhx_skyblue.css" type="text/css" media="all"/>
	<link rel=\'stylesheet\' type=\'text/css\' href=\'../auto-complete/jquery.auto-complete.css?<?= mktime() ?>\' />
'; ?>


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
				<?php $_from = $this->_tpl_vars['created_Date']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['View']):
?>
				<table width="113%">
				<tr>
				 <td>Created:&nbsp;<?php echo $this->_tpl_vars['View']['created_date']; ?>
&nbsp;&nbsp; <?php echo $this->_tpl_vars['View']['created_time']; ?>
</td>
                  <td>
				 <h4><?php echo $this->_tpl_vars['View']['company_name']; ?>
&nbsp;[<?php echo $this->_tpl_vars['View']['sales_order_no']; ?>
]</h4></td>
				<td style="margin-left:-1000px;"> Modified:&nbsp;<?php echo $this->_tpl_vars['Date_Stamp']['0']['Date']; ?>
&nbsp;&nbsp;<?php echo $this->_tpl_vars['Time_Stamp']['0']['Time']; ?>
</td>
				</tr>
				</table>
				<?php endforeach; endif; unset($_from); ?>
				<form class="form-horizontal">
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

                  <div class="box-body">
				  <?php $_from = $this->_tpl_vars['ListDetail']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['EditList']):
?>
				   <div class="col-md-6">
                    <div class="form-group">
                      <label class="col-sm-4 thick">Sales Quote No</label>
                      <div class="col-sm-6">
					<?php echo $this->_tpl_vars['EditList']['sales_quote_no']; ?>

                      </div>
			          </div>
					  <div class="form-group">
                      <label class="col-sm-4 thick">Item Type</label>
                      <div class="col-sm-6">
					    <?php echo $this->_tpl_vars['EditList']['item_type']; ?>

                      </div>
					  </div>
					 <div class="form-group">
                      <label class="col-sm-4 thick">Customer Id</label>
                      <div class="col-sm-6">
					    <?php echo $this->_tpl_vars['EditList']['customer_id']; ?>

                      </div>
					  </div>
                    <div class="form-group">
                      <label class="col-sm-4 thick">Po No</label>
                      <div class="col-sm-6">
					    <?php echo $this->_tpl_vars['EditList']['po_no']; ?>

                      </div>
					  </div>
					  <div class="form-group">
                      <label class="col-sm-4 thick">Enquiry Id</label>
                      <div class="col-sm-6">
					    <?php echo $this->_tpl_vars['EditList']['enquiry_id']; ?>

                      </div>
					  </div>
					  <div class="form-group">
                      <label class="col-sm-4 thick">Mobile No</label>
                      <div class="col-sm-6">
					    <?php echo $this->_tpl_vars['EditList']['mobile_no']; ?>

                      </div>
					  </div>

					  <?php if ($this->_tpl_vars['EditList']['email_id'] != ""): ?>
					   <div class="form-group">
                      <label class="col-sm-4 thick">Email Id</label>
                      <div class="col-sm-6">
					    <?php echo $this->_tpl_vars['EditList']['email_id']; ?>

                      </div>
					  </div>
					  <?php endif; ?>

					  <div class="form-group">
                      <label class="col-sm-4 thick">Address</label>
                      <div class="col-sm-6">
					    <?php echo $this->_tpl_vars['EditList']['address1']; ?>

                      </div>
					  </div>

					  <div class="form-group">
                      <label class="col-sm-4 thick">Area</label>
                      <div class="col-sm-6">
					    <?php echo $this->_tpl_vars['EditList']['area']; ?>

                      </div>
					  </div>
					  <div class="form-group">
                      <label class="col-sm-4 thick">Pincode</label>
                      <div class="col-sm-6">
					    <?php echo $this->_tpl_vars['EditList']['pincode']; ?>

                      </div>
					  </div>
					  <div class="form-group">
                      <label class="col-sm-4 thick">Created By</label>
                      <div class="col-sm-6">
					    <?php echo $this->_tpl_vars['EditList']['created_by']; ?>

                      </div>
					  </div>
					   <div class="form-group">
                      <label class="col-sm-4 thick">Arka Group</label>
                      <div class="col-sm-6">
					    <?php echo $this->_tpl_vars['EditList']['arka_group']; ?>

                      </div>
					  </div>
					</div>
					<!--**********************************************************-->
					    <div class="col-md-6">
						<div class="form-group">
                      <label class="col-sm-4 thick">Quote Date</label>
                      <div class="col-sm-6">
						 <?php echo $this->_tpl_vars['EditList']['quote_date']; ?>

                      </div>
					   </div>
						<div class="form-group">
                      <label class="col-sm-4 thick">Sales Order Date</label>
                      <div class="col-sm-6">
						 <?php echo $this->_tpl_vars['EditList']['sales_order_date']; ?>

                      </div>
					   </div>
					   <div class="form-group">
                      <label class="col-sm-4 thick">Customer Name</label>
                      <div class="col-sm-6">
						 <?php echo $this->_tpl_vars['EditList']['customer_name']; ?>

                      </div>
					   </div>
					   <div class="form-group">
                      <label class="col-sm-4 thick">Po Date</label>
                      <div class="col-sm-6">
						 <?php echo $this->_tpl_vars['EditList']['po_date']; ?>

                      </div>
					   </div>
					    <div class="form-group">
                      <label class="col-sm-4 thick">Order Status</label>
                      <div class="col-sm-6">
						 <?php echo $this->_tpl_vars['EditList']['order_status']; ?>

                      </div>
					   </div>
					   <div class="form-group">
                      <label class="col-sm-4 thick">Revised No</label>
                      <div class="col-sm-6">
						 <?php echo $this->_tpl_vars['EditList']['sales_quote_revise_no']; ?>

                      </div>
					   </div>

					   <?php if ($this->_tpl_vars['EditList']['phone_no'] != ""): ?>
					   <div class="form-group">
                      <label class="col-sm-4 thick">Phone No</label>
                      <div class="col-sm-6">
						 <?php echo $this->_tpl_vars['EditList']['area_code']; ?>
&nbsp;<?php echo $this->_tpl_vars['EditList']['phone_no']; ?>
&nbsp;<?php echo $this->_tpl_vars['EditList']['extension']; ?>

                      </div>
					   </div>
					   <?php endif; ?>

					   <?php if ($this->_tpl_vars['EditList']['email_id1'] != ""): ?>
					     <div class="form-group">
                      <label class="col-sm-4 thick">Email Id1</label>
                      <div class="col-sm-6">
						 <?php echo $this->_tpl_vars['EditList']['email_id1']; ?>

                      </div>
					   </div>
					  <?php endif; ?>

					  <?php if ($this->_tpl_vars['EditList']['address2'] != ""): ?>
					   <div class="form-group">
                      <label class="col-sm-4 thick">Address1</label>
                      <div class="col-sm-6">
						 <?php echo $this->_tpl_vars['EditList']['address2']; ?>

                      </div>
					   </div>
					   <?php endif; ?>

					   <div class="form-group">
                      <label class="col-sm-4 thick">City</label>
                      <div class="col-sm-6">
						 <?php echo $this->_tpl_vars['EditList']['city']; ?>

                      </div>
					   </div>

					   <div class="form-group">
                      <label class="col-sm-4 thick">Remarks</label>
                      <div class="col-sm-6">
						 <?php echo $this->_tpl_vars['EditList']['remarks']; ?>

                      </div>
					   </div>
					</div>
					<?php endforeach; endif; unset($_from); ?>
					</div>
					</form>
						<!-- /.box-header -->
				<div class="clear"></div>
				<div style="margin-top:-10px; margin-bottom: 10px;border: 0px;"><center>
				<input type="button" class="btn  btn-danger btn-xs" value="Add Follow Ups" data-toggle="modal" data-target="#Follow<?php echo $this->_tpl_vars['View']['sales_order_no']; ?>
">&nbsp;&nbsp;
				<input type="button" class="btn  btn-danger btn-xs" value="Generate Invoice" data-toggle="modal" data-target="#GenerateInvoice<?php echo $this->_tpl_vars['View']['sales_order_no']; ?>
">&nbsp;&nbsp;
				<input type="button" class="btn  btn-danger btn-xs" value="Make Payment" data-toggle="modal" data-target="#Makepayment<?php echo $this->_tpl_vars['View']['sales_order_no']; ?>
">&nbsp;&nbsp;
						  </center>
						  </div>

		<!-- ************************  Add FollowUp ****************************-->
		<div class="modal fade" id="Follow<?php echo $this->_tpl_vars['View']['sales_order_no']; ?>
" role="dialog">
		<div class="modal-dialog">

			<div class="modal-content" style="width:765px;">
				<div class="modal-header" id="FollowUpHeader" style="background-color:#00CCFF;">
					<button type="button" class="close" data-dismiss="modal" onClick="window.location.reload();">&times;</button>
					<h4 class="modal-title">Add Follow Ups</h4>
				</div>
		<iframe height="490px" width="100%" id="Follow" name="salFoll"  src="./salesfollow.php?sales_order_no=<?php echo $this->_tpl_vars['View']['sales_order_no']; ?>
&enquiry_id=<?php echo $this->_tpl_vars['View']['enquiry_id']; ?>
" style="border:1px;"></iframe>
			</div>
		</div>
	</div>
	<!-- *************************** Generate Invoice **************************** -->
	<div class="modal fade" id="GenerateInvoice<?php echo $this->_tpl_vars['View']['sales_order_no']; ?>
" role="dialog">
		<div class="modal-dialog">

			<div class="modal-content" style="width:765px;">
				<div class="modal-header" id="InvoiceHeader" style="background-color:#00CCFF;">
					<button type="button" class="close" data-dismiss="modal" onClick="window.location.reload();">&times;</button>
					<h4 class="modal-title">Generate Invoice</h4>
				</div>
					<iframe height="490px" width="100%" id="GenerateInvoice"  src="./sales_invoice.php?sales_order_no=<?php echo $this->_tpl_vars['View']['sales_order_no']; ?>
&enquiry_id=<?php echo $this->_tpl_vars['View']['enquiry_id']; ?>
" style="border:1px;"></iframe>
			</div>
		</div>
	</div>
	<!-- ********************  Make Payment  *****************  -->
	<div class="modal fade" id="Makepayment<?php echo $this->_tpl_vars['View']['sales_order_no']; ?>
" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content" style="width:765px;">
				<div class="modal-header" id="PaymentHeader" style="background-color:#00CCFF;">
					<button type="button" class="close" data-dismiss="modal" onClick="window.location.reload();">&times;</button>
					<h4 class="modal-title">Make Payment</h4>
				</div>
					<iframe height="490px" width="100%" id="MakePayment" src="./sales_makepayment.php?sales_order_no=<?php echo $this->_tpl_vars['View']['sales_order_no']; ?>
&enquiry_id=<?php echo $this->_tpl_vars['View']['enquiry_id']; ?>
" style="border:1px;"></iframe>
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
						<?php $_from = $this->_tpl_vars['follow']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['Contact']):
?>
					<tr id="<?php echo $this->_tpl_vars['i']++; ?>
">
								<input type="hidden" value="<?php echo $this->_tpl_vars['Contact']['sl_no']; ?>
" />
								<input type="hidden" value="<?php echo $this->_tpl_vars['Contact']['customer_id']; ?>
" />
								<input type="hidden" value="<?php echo $this->_tpl_vars['Contact']['enquiry_id']; ?>
" />
								<input type="hidden" value="<?php echo $this->_tpl_vars['Contact']['service_order_no']; ?>
" />
								<td align="center"><a href="#" data-toggle="modal" data-target="#ViewContact<?php echo $this->_tpl_vars['Contact']['sales_order_no']; ?>
"><?php echo $this->_tpl_vars['i']; ?>
</a></td>
								<td align="center"><a href="#" data-toggle="modal" data-target="#ViewContact<?php echo $this->_tpl_vars['Contact']['sales_order_no']; ?>
"><?php echo $this->_tpl_vars['Contact']['customer_id']; ?>
</a></td>
								<td align="center"><a href="#" data-toggle="modal" data-target="#ViewContact<?php echo $this->_tpl_vars['Contact']['sales_order_no']; ?>
"><?php echo $this->_tpl_vars['Contact']['order_status']; ?>
</a></td>
								<td align="center"><a href="#" data-toggle="modal" data-target="#ViewContact<?php echo $this->_tpl_vars['Contact']['sales_order_no']; ?>
"><?php if ($this->_tpl_vars['Contact']['snooze_date'] == '0000-00-00'): ?> NA <?php elseif ($this->_tpl_vars['Contact']['snooze_date'] != '0000-00-00'): ?><?php echo $this->_tpl_vars['Contact']['snooze_date']; ?>
<?php endif; ?> &nbsp;&nbsp;<?php if ($this->_tpl_vars['Contact']['snooze_time'] == '00:00:00'): ?> NA <?php elseif ($this->_tpl_vars['Contact']['snooze_time'] != '00:00:00'): ?><?php echo $this->_tpl_vars['Contact']['snooze_time']; ?>
<?php endif; ?></a></td>
								<td align="center"><a href="#" data-toggle="modal" data-target="#ViewContact<?php echo $this->_tpl_vars['Contact']['sales_order_no']; ?>
"><?php if ($this->_tpl_vars['Contact']['closed_date'] == '0000-00-00'): ?> NA <?php elseif ($this->_tpl_vars['Contact']['closed_date'] != '0000-00-00'): ?><?php echo $this->_tpl_vars['Contact']['closed_date']; ?>
<?php endif; ?>&nbsp;&nbsp;<?php if ($this->_tpl_vars['Contact']['closed_time'] == '00:00:00'): ?> NA <?php elseif ($this->_tpl_vars['Contact']['closed_time'] != '00:00:00'): ?><?php echo $this->_tpl_vars['Contact']['closed_time']; ?>
<?php endif; ?></a></td>
								<td align="center"><a href="#" data-toggle="modal" data-target="#ViewContact<?php echo $this->_tpl_vars['Contact']['sales_order_no']; ?>
"><?php echo $this->_tpl_vars['Contact']['created_by']; ?>
</a></td>
								<td align="center"><a href="#" data-toggle="modal" data-target="#ViewContact<?php echo $this->_tpl_vars['Contact']['sales_order_no']; ?>
"><?php echo $this->_tpl_vars['Contact']['timestamp']; ?>
</a></td>
								<td class="center" align="center">&nbsp;&nbsp; &nbsp;&nbsp;<a href="#" onClick="Javascript:deleteCat1('<?php echo $this->_tpl_vars['Contact']['sl_no']; ?>
','<?php echo $this->_tpl_vars['Contact']['sales_order_no']; ?>
')"><i class="fa fa-trash"></i></a></td>
					</tr>
					  <?php endforeach; else: ?>
					<tr>
								<td height="20" colspan="12" align="center"><img src="./images/warning.gif" border="0">&nbsp;No Records Found</td>
					</tr>
					<?php endif; unset($_from); ?>
					</tbody>
					</table>
					</form>
					</div>
<?php echo '
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
 '; ?>

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
						<?php $_from = $this->_tpl_vars['invoice']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['invo']):
?>
					<tr id="<?php echo $this->_tpl_vars['k']++; ?>
">
								<input type="hidden" value="<?php echo $this->_tpl_vars['Contact']['sl_no']; ?>
" />
								<input type="hidden" value="<?php echo $this->_tpl_vars['Contact']['customer_id']; ?>
" />
								<input type="hidden" value="<?php echo $this->_tpl_vars['Contact']['enquiry_id']; ?>
" />
								<input type="hidden" value="<?php echo $this->_tpl_vars['Contact']['service_order_no']; ?>
" />
								<td align="center"><a href="#" data-toggle="modal" data-target="#ViewContact<?php echo $this->_tpl_vars['Contact']['sales_order_no']; ?>
"><?php echo $this->_tpl_vars['k']; ?>
</a></td>
								<td align="center"><a href="#" data-toggle="modal" data-target="#ViewContact<?php echo $this->_tpl_vars['Contact']['sales_order_no']; ?>
"><?php echo $this->_tpl_vars['invo']['invoice_no']; ?>
</a></td>
								<td align="center"><a href="#" data-toggle="modal" data-target="#ViewContact<?php echo $this->_tpl_vars['Contact']['sales_order_no']; ?>
"><?php echo $this->_tpl_vars['invo']['sales_order_no']; ?>
</a></td>
								<td align="center"><a href="#" data-toggle="modal" data-target="#ViewContact<?php echo $this->_tpl_vars['Contact']['sales_order_no']; ?>
"><?php echo $this->_tpl_vars['invo']['invoice_amount']; ?>
</a></td>
								<td align="center"><a href="#" data-toggle="modal" data-target="#ViewContact<?php echo $this->_tpl_vars['Contact']['sales_order_no']; ?>
"><?php echo $this->_tpl_vars['invo']['paid_amount']; ?>
</a></td>
								<td align="center"><a href="#" data-toggle="modal" data-target="#ViewContact<?php echo $this->_tpl_vars['Contact']['sales_order_no']; ?>
"><?php echo $this->_tpl_vars['invo']['invoice_date']; ?>
</a></td>
								<td align="center"><a href="#" data-toggle="modal" data-target="#ViewContact<?php echo $this->_tpl_vars['Contact']['sales_order_no']; ?>
"><?php echo $this->_tpl_vars['invo']['payment_status']; ?>
</a></td>
				   </tr>
					  <?php endforeach; else: ?>
					<tr>
								<td height="20" colspan="12" align="center"><img src="./images/warning.gif" border="0">&nbsp;No Records Found</td>
					</tr>
					<?php endif; unset($_from); ?>
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
                     <?php $_from = $this->_tpl_vars['payment']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['listSales']):
?>
					<tr id="<?php echo $this->_tpl_vars['p']++; ?>
">
					            <input type="hidden" value="<?php echo $this->_tpl_vars['Contact']['sl_no']; ?>
" />
								<input type="hidden" value="<?php echo $this->_tpl_vars['Contact']['customer_id']; ?>
" />
								<input type="hidden" value="<?php echo $this->_tpl_vars['Contact']['enquiry_id']; ?>
" />
								<input type="hidden" value="<?php echo $this->_tpl_vars['Contact']['sales_order_no']; ?>
" />

								<td align="center"><a href="#" data-toggle="modal" data-target="#ViewContact<?php echo $this->_tpl_vars['listSales']['sales_order_no']; ?>
"><?php echo $this->_tpl_vars['p']; ?>
</a></td>
								<td align="center"><a href="#" data-toggle="modal" data-target="#ViewContact<?php echo $this->_tpl_vars['listSales']['sales_order_no']; ?>
"><?php echo $this->_tpl_vars['listSales']['invoice_no']; ?>
</a></td>
								<td align="center"><a href="#" data-toggle="modal" data-target="#ViewContact<?php echo $this->_tpl_vars['listSales']['sales_order_no']; ?>
"><?php echo $this->_tpl_vars['listSales']['sales_order_no']; ?>
</a></td>								                                <td align="center"><a href="#" data-toggle="modal" data-target="#ViewContact<?php echo $this->_tpl_vars['listSales']['sales_order_no']; ?>
"><?php echo $this->_tpl_vars['listSales']['invoice_amount']; ?>
</a></td>
								<td align="center"><a href="#" data-toggle="modal" data-target="#ViewContact<?php echo $this->_tpl_vars['listSales']['sales_order_no']; ?>
"><?php echo $this->_tpl_vars['listSales']['invoice_date']; ?>
</a></td>
								<td align="center"><a href="#" data-toggle="modal" data-target="#ViewContact<?php echo $this->_tpl_vars['listSales']['sales_order_no']; ?>
"><?php echo $this->_tpl_vars['listSales']['pending_amount']; ?>
</a></td>
								<td align="center"><a href="#" data-toggle="modal" data-target="#ViewContact<?php echo $this->_tpl_vars['listSales']['sales_order_no']; ?>
"><?php echo $this->_tpl_vars['listSales']['paid_amount']; ?>
</a></td>
								<td align="center"><a href="#" data-toggle="modal" data-target="#ViewContact<?php echo $this->_tpl_vars['listSales']['sales_order_no']; ?>
"><?php echo $this->_tpl_vars['listSales']['timestamp']; ?>
</a></td>
								<td align="center"><a href="#" data-toggle="modal" data-target="#ViewContact<?php echo $this->_tpl_vars['listSales']['sales_order_no']; ?>
"><?php echo $this->_tpl_vars['listSales']['payment_status']; ?>
</a></td>
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
                     <?php $_from = $this->_tpl_vars['MasterList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['listSales']):
?>
					<tr id="<?php echo $this->_tpl_vars['j']++; ?>
">
					<td align="center"><a href="#" data-toggle="modal" data-target="#ViewSales"><?php echo $this->_tpl_vars['j']; ?>
</a></td>
					<td align="center"><a href="#" data-toggle="modal" data-target="#ViewSales<?php echo $this->_tpl_vars['listSales']['sales_quote_no']; ?>
"><?php echo $this->_tpl_vars['listSales']['sales_order_no']; ?>
</a></td>
					<td align="center"><a href="#" data-toggle="modal" data-target="#ViewSales<?php echo $this->_tpl_vars['listSales']['sales_quote_no']; ?>
"><?php echo $this->_tpl_vars['listSales']['sales_revised_version']; ?>
</a></td>
					<td align="center"><a href="#" data-toggle="modal" data-target="#ViewSales<?php echo $this->_tpl_vars['listSales']['sales_quote_no']; ?>
"><?php echo $this->_tpl_vars['listSales']['item_description']; ?>
</a></td>
					<td align="center"><a href="#" data-toggle="modal" data-target="#ViewSales<?php echo $this->_tpl_vars['listSales']['sales_quote_no']; ?>
"><?php echo $this->_tpl_vars['listSales']['sub_total']; ?>
</a></td>
					<td align="center"><a href="#" data-toggle="modal" data-target="#ViewSales<?php echo $this->_tpl_vars['listSales']['sales_quote_no']; ?>
"><?php echo $this->_tpl_vars['listSales']['total']; ?>
</a></td>

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

    </script>
	'; ?>

					</div>
					</div>
				</div>
                </div><!-- /.box-body -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <div class="control-sidebar-bg"></div>
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

    </script>
	<style>
label,td.thick
{
font-weight:bold;
}
	</style>
	'; ?>

  </body>
 </html>