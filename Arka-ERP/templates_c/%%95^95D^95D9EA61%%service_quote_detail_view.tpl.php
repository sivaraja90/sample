<?php /* Smarty version 2.6.25, created on 2016-07-30 16:53:41
         compiled from service_quote_detail_view.tpl */ ?>
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
	label,td.thick
{
font-weight:bold;
}
label.font
{
font-weight: normal;
}
</style>
<script type="text/javascript" src=\'./dhtmlxMessage/codebase/dhtmlxmessage.js\'></script>
	<script type=\'text/javascript\' src=\'./auto-complete/jquery.metadata.js\'></script>
	<script type=\'text/javascript\' src=\'./auto-complete/jquery.auto-complete.js?<?= mktime() ?>\'></script>
	<script type=\'text/javascript\' src=\'./auto-complete/js.js?<?= mktime() ?>\'></script>
	<link rel="stylesheet" href= "./codebase/skins/dhtmlxmessage_dhx_skyblue.css" type="text/css" media="all"/>
	<link rel=\'stylesheet\' type=\'text/css\' href=\'auto-complete/jquery.auto-complete.css?<?= mktime() ?>\' />
'; ?>


 <body class="hold-transition skin-blue sidebar-mini">
  <div class="content-wrapper">
	<section class="content-header">
          <h4>
            <small class="active"><a href="service_order_list.php"><i class="fa fa-list"> <label class="font" style="font-family:Arial, Helvetica, sans-serif">
List Service Order</label></i></a></small>&ensp;&ensp;&ensp;
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
&nbsp;&nbsp;<?php echo $this->_tpl_vars['View']['created_time']; ?>
</td>
                  <td><!--<h4 class="box-title"><center>Service Order Detailed View</center></h4>-->
				 <h4><?php echo $this->_tpl_vars['View']['company_name']; ?>
&nbsp;[<?php echo $this->_tpl_vars['View']['service_order_no']; ?>
]</h4></td>
				<td style="margin-left:-1000px;"> Modified:&nbsp;<?php echo $this->_tpl_vars['Date_Stamp']['0']['Date']; ?>
&nbsp;&nbsp;<?php echo $this->_tpl_vars['Time_Stamp']['0']['Time']; ?>
</td>
				</tr>
				</table>
				<?php endforeach; endif; unset($_from); ?>
				<br>

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
                      <label class="col-sm-4 thick">Service Quote No</label>
                      <div class="col-sm-6">
					<?php echo $this->_tpl_vars['EditList']['service_quote_no']; ?>

                      </div>
			          </div>

					   <div class="form-group">
					   <label class="col-sm-4 thick">Service Quote Date</label>
                      <div class="col-sm-6">
					  <?php echo $this->_tpl_vars['EditList']['service_quote_date']; ?>

                      </div>
					   </div>

					    <div class="form-group">
					   <label class="col-sm-4 thick">Revised No</label>
                      <div class="col-sm-6">
					  <?php echo $this->_tpl_vars['EditList']['service_quote_revise_no']; ?>

                      </div>
					   </div>

					    <div class="form-group">
                      <label class="col-sm-4 thick">Customer Id</label>
                      <div class="col-sm-6">
					<?php echo $this->_tpl_vars['EditList']['customer_id']; ?>

                      </div>
			          </div>

					   <div class="form-group">
                      <label class="col-sm-4 thick">Enquiry Id</label>
                      <div class="col-sm-6">
					<?php echo $this->_tpl_vars['EditList']['enquiry_id']; ?>

                      </div>
			          </div>

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

					  <?php if ($this->_tpl_vars['EditList']['email_id'] != ""): ?>
						<div class="form-group">
                      <label class="col-sm-4 thick">Email id</label>
                      <div class="col-sm-6">
					<?php echo $this->_tpl_vars['EditList']['email_id']; ?>

                      </div>
			          </div>
					  <?php endif; ?>

					  <?php if ($this->_tpl_vars['EditList']['email_id1'] != ""): ?>
					   <div class="form-group">
						<label class="col-sm-4 thick">Email Id2</label>
                      <div class="col-sm-6">
						 <?php echo $this->_tpl_vars['EditList']['email_id1']; ?>

                      </div>
					  </div>
					  <?php endif; ?>
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
						 <label class="col-sm-4 thick">Po No</label>
                      <div class="col-sm-6">
                        <?php echo $this->_tpl_vars['EditList']['po_no']; ?>

                      </div>
                    </div>

						<div class="form-group">
						<label class="col-sm-4 thick">Po Date</label>
                      <div class="col-sm-6">
						 <?php echo $this->_tpl_vars['EditList']['po_date']; ?>

                      </div>
					  </div>

					  	<div class="form-group">
						<label class="col-sm-4 thick">Order Date</label>
                      <div class="col-sm-6">
						 <?php echo $this->_tpl_vars['EditList']['service_order_date']; ?>

                      </div>
					  </div>

					  <?php if ($this->_tpl_vars['EditList']['mobile_no'] != "" && $this->_tpl_vars['EditList']['mobile_no'] != '0'): ?>
					  <div class="form-group">
						 <label class="col-sm-4 thick">Mobile No</label>
                      <div class="col-sm-6">
                        <?php echo $this->_tpl_vars['EditList']['mobile_no']; ?>

                      </div>
                    </div>
					<?php endif; ?>

					<div class="form-group">
						 <label class="col-sm-4 thick">Order Status</label>
                      <div class="col-sm-6">
                        <?php echo $this->_tpl_vars['EditList']['order_status']; ?>

                      </div>
                    </div>

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

					  <?php if ($this->_tpl_vars['EditList']['phone_no'] != "" && $this->_tpl_vars['EditList']['phone_no'] != '0'): ?>
					   <div class="form-group">
						<label class="col-sm-4 thick">phone No</label>
                      <div class="col-sm-6">
						 <?php echo $this->_tpl_vars['EditList']['area_code']; ?>
 <?php echo $this->_tpl_vars['EditList']['phone_no']; ?>
 <?php echo $this->_tpl_vars['EditList']['extension']; ?>

                      </div>
					  </div>
					  <?php endif; ?>

					   <?php if ($this->_tpl_vars['EditList']['remarks'] != ""): ?>
					   <div class="form-group">
						<label class="col-sm-4 thick">Remarks</label>
                      <div class="col-sm-6">
						 <?php echo $this->_tpl_vars['EditList']['remarks']; ?>

                      </div>
					  </div>
					  <?php endif; ?>

					  <div class="form-group">
                      <label class="col-sm-4 thick">Created By</label>
                      <div class="col-sm-6">
					<?php echo $this->_tpl_vars['EditList']['created_by']; ?>

                      </div>
			          </div>

					</div>
					<?php endforeach; endif; unset($_from); ?>
					</div>
					<div style="margin-top: 10px; margin-bottom: 10px;border: 0px;"><center>

							<input type="button" class="btn  btn-danger btn-xs" value="Add Follow Ups" data-toggle="modal" data-target="#Follow">&nbsp;&nbsp;
			<input type="button" class="btn  btn-danger btn-xs" value="Generate Invoice" data-toggle="modal" data-target="#GenerateInvoice<?php echo $this->_tpl_vars['View']['service_order_no']; ?>
">&nbsp;&nbsp;
				<input type="button" class="btn  btn-danger btn-xs" value="Make Payment" data-toggle="modal" data-target="#Makepayment<?php echo $this->_tpl_vars['View']['service_order_no']; ?>
">&nbsp;&nbsp;

						  </center>
						  </div>


	  <!--*******************************************Add FollowUps**********************************************************-->
<div class="modal fade" id="Follow" role="dialog">
		<div class="modal-dialog">

			<div class="modal-content" style="width:765px;">
				<div class="modal-header" id="FollowUpHeader" style="background-color:#00CCFF;">
					<button type="button" class="close" data-dismiss="modal" onClick="window.location.reload();">&times;</button>
					<h4 class="modal-title">Add Follow Ups</h4>
				</div>
					<iframe height="490px" width="100%" id="Follow"  src="./service_order_followup.php?service_order_no=<?php echo $this->_tpl_vars['View']['service_order_no']; ?>
&enquiry_id=<?php echo $this->_tpl_vars['View']['enquiry_id']; ?>
" style="border:1px;"></iframe>
			</div>
		</div>
	</div>
	<!-- *******************************Generate Invoice******************************  -->
	<div class="modal fade" id="GenerateInvoice<?php echo $this->_tpl_vars['View']['service_order_no']; ?>
" role="dialog">
		<div class="modal-dialog">

			<div class="modal-content" style="width:765px;">
				<div class="modal-header" id="FollowUpHeader" style="background-color:#00CCFF;">
					<button type="button" class="close" data-dismiss="modal" onClick="window.location.reload();">&times;</button>
					<h4 class="modal-title">Generate Invoice</h4>
				</div>
					<iframe height="490px" width="100%" id="GenerateInvoice"  src="./service_invoice.php?service_order_no=<?php echo $this->_tpl_vars['View']['service_order_no']; ?>
&enquiry_id=<?php echo $this->_tpl_vars['View']['enquiry_id']; ?>
" style="border:1px;"></iframe>
			</div>
		</div>
	</div>


	<!-- ********************  Make Payment  *****************  -->
	<div class="modal fade" id="Makepayment<?php echo $this->_tpl_vars['View']['service_order_no']; ?>
" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content" style="width:765px;">
				<div class="modal-header" id="FollowUpHeader" style="background-color:#00CCFF;">
					<button type="button" class="close" data-dismiss="modal" onClick="window.location.reload();">&times;</button>
					<h4 class="modal-title">Make Payment</h4>
				</div>
					<iframe height="490px" width="100%" id="MakePayment" src="./service_makepayment.php?service_order_no=<?php echo $this->_tpl_vars['View']['service_order_no']; ?>
&enquiry_id=<?php echo $this->_tpl_vars['View']['enquiry_id']; ?>
" style="border:1px;"></iframe>
			</div>
		</div>
	</div>

	<!--******************************************************************************************************-->
	<div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
				<li class="active"><a href="#service" data-toggle="tab">Service Order</a></li>
                  <li ><a href="#follow" data-toggle="tab">Follow Ups</a></li>
				   <li><a href="#invoice" data-toggle="tab">Invoice</a></li>
				  <li><a href="#sales" data-toggle="tab">Payment</a></li>
                </ul>
                <div class="tab-content">
                  <!-- Follow Up List -->
                  <div class="tab-pane " id="follow">
                    <form name="FollowList" id="FollowList" method="post">
                  <table id="example1" class="table table-bordered table-striped" style="font-size:13px; , Times, serif;">

                    <thead>
                      <tr>
					 <th><center>Sl.No</center></th>
                        <th><center>Customer Id</center></th>
						<th><center>Order Status</center></th>
						<th><center>Created By</center></th>
                        <th><center>Snooze Date &amp;  Time</center></th>
						<th><center>Closed Date &amp;Time</center></th>
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

								<td align="center"><a href="#" data-toggle="modal" data-target="#ViewContact<?php echo $this->_tpl_vars['Contact']['service_order_no']; ?>
"><?php echo $this->_tpl_vars['i']; ?>
</a></td>
								<td align="center"><a href="#" data-toggle="modal" data-target="#ViewContact<?php echo $this->_tpl_vars['Contact']['service_order_no']; ?>
"><?php echo $this->_tpl_vars['Contact']['customer_id']; ?>
</a></td>
								<td align="center"><a href="#" data-toggle="modal" data-target="#ViewContact<?php echo $this->_tpl_vars['Contact']['service_order_no']; ?>
"><?php echo $this->_tpl_vars['Contact']['order_status']; ?>
</a></td>
							    <td align="center"><a href="#" data-toggle="modal" data-target="#ViewContact<?php echo $this->_tpl_vars['Contact']['service_order_no']; ?>
"><?php echo $this->_tpl_vars['Contact']['created_by']; ?>
</a></td>
								<td align="center"><a href="#" data-toggle="modal" data-target="#ViewContact<?php echo $this->_tpl_vars['Contact']['service_order_no']; ?>
"><?php if ($this->_tpl_vars['Contact']['snooze_date'] == '0000-00-00'): ?> NA <?php elseif ($this->_tpl_vars['Contact']['snooze_date'] != '0000-00-00'): ?><?php echo $this->_tpl_vars['Contact']['snooze_date']; ?>
<?php endif; ?> &nbsp;&nbsp;<?php if ($this->_tpl_vars['Contact']['snooze_time'] == '00:00:00'): ?> NA <?php elseif ($this->_tpl_vars['Contact']['snooze_time'] != '00:00:00'): ?><?php echo $this->_tpl_vars['Contact']['snooze_time']; ?>
<?php endif; ?></a></td>
										<td align="center"><a href="#" data-toggle="modal" data-target="#ViewContact<?php echo $this->_tpl_vars['Contact']['service_order_no']; ?>
"><?php if ($this->_tpl_vars['Contact']['closed_date'] == '0000-00-00'): ?> NA <?php elseif ($this->_tpl_vars['Contact']['closed_date'] != '0000-00-00'): ?><?php echo $this->_tpl_vars['Contact']['closed_date']; ?>
<?php endif; ?>&nbsp;&nbsp;<?php if ($this->_tpl_vars['Contact']['closed_time'] == '00:00:00'): ?> NA <?php elseif ($this->_tpl_vars['Contact']['closed_time'] != '00:00:00'): ?><?php echo $this->_tpl_vars['Contact']['closed_time']; ?>
<?php endif; ?></a></td>
								<td align="center"><a href="#" data-toggle="modal" data-target="#ViewContact<?php echo $this->_tpl_vars['Contact']['service_order_no']; ?>
"><?php echo $this->_tpl_vars['Contact']['timestamp']; ?>
</a></td>

						<td align="left"><!--&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" data-toggle="modal" data-target="#EditContact"><i class="fa fa-edit"></i></a>-->
						&nbsp;&nbsp; &nbsp;&nbsp;<a href="#" onClick="Javascript:deleteCat('<?php echo $this->_tpl_vars['Contact']['sl_no']; ?>
','<?php echo $this->_tpl_vars['Contact']['service_order_no']; ?>
')"><i class="fa fa-trash"></i></a></td>
					 </tr>
                <?php endforeach; else: ?>
					<tr>
				<td height="20" colspan="12" align="center"><img src="./images/warning.gif" border="0">&nbsp;No Records Found</td>
					</tr>
					<?php endif; unset($_from); ?></tbody>
                    </tfoot>
                  </table><!-- /#ion-icons -->
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

  function deleteCat(CatIdent,CusIdent){
   var serv_id = btoa(CusIdent);
  if(confirm("Are you sure to Delete this Content?")){
  FormName		= document.FollowList;
  FormName.action= "service_quote_detail_view.php?sl_no="+CatIdent+"&service_order_no="+serv_id;
  FormName.submit();
 }
 }

    </script>
	'; ?>

			    </div>
				<div class="tab-pane active" id="service">
                    <form name="ServiceList" id="ServiceList" method="post">
                  <table id="example1" class="table table-bordered table-striped" style="font-size:13px; , Times, serif;">

                    <thead>
                      <tr>
					 <th><center>Sl.No</center></th>
						<th><center>Service Quote No</center></th>
                        <th><center>Revised Version</center></th>
						<th><center>Mat Estimate</center></th>
						<th><center>Lab Estimate</center></th>
                        <th><center>Total</center></th>
                      </tr>
                    </thead>
                    <tbody>
					<?php $_from = $this->_tpl_vars['ListDetail2']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['Contact']):
?>
					<tr id="<?php echo $this->_tpl_vars['j']++; ?>
">
								<input type="hidden" value="<?php echo $this->_tpl_vars['Contact']['sl_no']; ?>
" />
								<input type="hidden" value="<?php echo $this->_tpl_vars['Contact']['customer_id']; ?>
" />
								<input type="hidden" value="<?php echo $this->_tpl_vars['Contact']['enquiry_id']; ?>
" />
								<input type="hidden" value="<?php echo $this->_tpl_vars['Contact']['service_order_no']; ?>
" />

								<td align="center"><a href="#" data-toggle="modal" data-target="#ViewContact<?php echo $this->_tpl_vars['Contact']['service_order_no']; ?>
"><?php echo $this->_tpl_vars['j']; ?>
</a></td>
								<td align="center"><a href="#" data-toggle="modal" data-target="#ViewContact<?php echo $this->_tpl_vars['Contact']['service_order_no']; ?>
"><?php echo $this->_tpl_vars['Contact']['service_quote_no']; ?>
</a></td>
								<td align="center"><a href="#" data-toggle="modal" data-target="#ViewContact<?php echo $this->_tpl_vars['Contact']['service_order_no']; ?>
"><?php echo $this->_tpl_vars['Contact']['service_revised']; ?>
</a></td>
								<td align="center"><a href="#" data-toggle="modal" data-target="#ViewContact<?php echo $this->_tpl_vars['Contact']['service_order_no']; ?>
"><?php echo $this->_tpl_vars['Contact']['material_estimate']; ?>
</a></td>
								<td align="center"><a href="#" data-toggle="modal" data-target="#ViewContact<?php echo $this->_tpl_vars['Contact']['service_order_no']; ?>
"><?php echo $this->_tpl_vars['Contact']['labour_estimate']; ?>
</a></td>
								<td align="center"><a href="#" data-toggle="modal" data-target="#ViewContact<?php echo $this->_tpl_vars['Contact']['service_order_no']; ?>
"><?php echo $this->_tpl_vars['Contact']['total']; ?>
</a></td>
					 </tr>
					   <?php endforeach; else: ?>
					<tr>
								<td height="20" colspan="12" align="center"><img src="./images/warning.gif" border="0">&nbsp;No Records Found</td>
					</tr>
					<?php endif; unset($_from); ?>
					</tbody>
                    </tfoot>
                  </table><!-- /#ion-icons -->
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
                <div class="tab-pane" id="invoice">
                    <form name="FollowList" id="FollowList" method="post">
                  <table id="example1" class="table table-bordered table-striped" style="font-size:13px; , Times, serif;">

                    <thead>
                      <tr>
					 <th><center>Sl.No</center></th>
                        <th><center>Invoice Number</center></th>
                        <th><center>Service Order Number</center></th>
						<th><center>Invoice Amount</center></th>
						<th><center>Paid Amount</center></th>
						<th><center>Invoice Date</center></th>
                        <th><center>Payment Status</center></th>
                      </tr>

                    </thead>
                    <tbody>
						<?php $_from = $this->_tpl_vars['InDetail']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
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
								<td align="center"><a href="#" data-toggle="modal" data-target="#ViewContact<?php echo $this->_tpl_vars['invo']['service_order_no']; ?>
"><?php echo $this->_tpl_vars['k']; ?>
</a></td>
								<td align="center"><a href="#" data-toggle="modal" data-target="#ViewContact<?php echo $this->_tpl_vars['invo']['service_order_no']; ?>
"><?php echo $this->_tpl_vars['invo']['invoice_no']; ?>
</a></td>
								<td align="center"><a href="#" data-toggle="modal" data-target="#ViewContact<?php echo $this->_tpl_vars['invo']['service_order_no']; ?>
"><?php echo $this->_tpl_vars['invo']['service_order_no']; ?>
</a></td>
								<td align="center"><a href="#" data-toggle="modal" data-target="#ViewContact<?php echo $this->_tpl_vars['invo']['service_order_no']; ?>
"><?php echo $this->_tpl_vars['invo']['invoice_amount']; ?>
</a></td>								                                <td align="center"><a href="#" data-toggle="modal" data-target="#ViewContact<?php echo $this->_tpl_vars['invo']['service_order_no']; ?>
"><?php echo $this->_tpl_vars['invo']['paid_amount']; ?>
</a></td>
								<td align="center"><a href="#" data-toggle="modal" data-target="#ViewContact<?php echo $this->_tpl_vars['invo']['service_order_no']; ?>
"><?php echo $this->_tpl_vars['invo']['invoice_date']; ?>
</a></td>
								<td align="center"><a href="#" data-toggle="modal" data-target="#ViewContact<?php echo $this->_tpl_vars['invo']['service_order_no']; ?>
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

						<div class="tab-pane" id="sales">
				<form name="SalesList" id="SalesList" method="post">
                  <table id="example2" class="table table-bordered table-striped" style="font-size:13px; , Times, serif;">
                    <thead>
					<tr>
						<th><center>Sl.No</center></th>
                        <th><center>Invoice Number</center></th>
                        <th><center>Service Order Number</center></th>
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
    foreach ($_from as $this->_tpl_vars['listService']):
?>
					<tr id="<?php echo $this->_tpl_vars['p']++; ?>
">
					            <input type="hidden" value="<?php echo $this->_tpl_vars['Contact']['sl_no']; ?>
" />
								<input type="hidden" value="<?php echo $this->_tpl_vars['Contact']['customer_id']; ?>
" />
								<input type="hidden" value="<?php echo $this->_tpl_vars['Contact']['enquiry_id']; ?>
" />
								<input type="hidden" value="<?php echo $this->_tpl_vars['Contact']['service_order_no']; ?>
" />
								<td align="center"><a href="#" data-toggle="modal" data-target="#ViewContact<?php echo $this->_tpl_vars['listService']['service_order_no']; ?>
"><?php echo $this->_tpl_vars['p']; ?>
</a></td>
								<td align="center"><a href="#" data-toggle="modal" data-target="#ViewContact<?php echo $this->_tpl_vars['listService']['service_order_no']; ?>
"><?php echo $this->_tpl_vars['listService']['invoice_no']; ?>
</a></td>
							   <td align="center"><a href="#" data-toggle="modal" data-target="#ViewContact<?php echo $this->_tpl_vars['listService']['service_order_no']; ?>
"><?php echo $this->_tpl_vars['listService']['service_order_no']; ?>
</a></td>								                                <td align="center"><a href="#" data-toggle="modal" data-target="#ViewContact<?php echo $this->_tpl_vars['listService']['service_order_no']; ?>
"><?php echo $this->_tpl_vars['listService']['invoice_amount']; ?>
</a></td>
								<td align="center"><a href="#" data-toggle="modal" data-target="#ViewContact<?php echo $this->_tpl_vars['listService']['service_order_no']; ?>
"><?php echo $this->_tpl_vars['listService']['invoice_date']; ?>
</a></td>
								<td align="center"><a href="#" data-toggle="modal" data-target="#ViewContact<?php echo $this->_tpl_vars['listService']['service_order_no']; ?>
"><?php echo $this->_tpl_vars['listService']['pending_amount']; ?>
</a></td>
								<td align="center"><a href="#" data-toggle="modal" data-target="#ViewContact<?php echo $this->_tpl_vars['listService']['service_order_no']; ?>
"><?php echo $this->_tpl_vars['listService']['paid_amount']; ?>
</a></td>
							   <td align="center"><a href="#" data-toggle="modal" data-target="#ViewContact<?php echo $this->_tpl_vars['listService']['service_order_no']; ?>
"><?php echo $this->_tpl_vars['listService']['timestamp']; ?>
</a></td>
								<td align="center"><a href="#" data-toggle="modal" data-target="#ViewContact<?php echo $this->_tpl_vars['listService']['service_order_no']; ?>
"><?php echo $this->_tpl_vars['listService']['payment_status']; ?>
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
</div>
						<!-- /.box-header -->
                </form>
                </div><!-- /.box-body -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
            <!-- Control Sidebar -->
      <div class="control-sidebar-bg"></div>
  </body>
 </html>