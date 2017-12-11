<?php /* Smarty version 2.6.25, created on 2017-03-01 12:51:12
         compiled from po_detail_view.tpl */ ?>
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
	<!--<script type=\'text/javascript\' src=\'./auto-complete/jquery-1.3.2.js\'></script>-->
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
            <small class="active"><a href="po_list.php"><i class="fa fa-list"> <label class="font" style="font-family:Arial, Helvetica, sans-serif">
List Po</label></i></a></small>&ensp;&ensp;&ensp;
            <small><a href="po_reg.php"> <i class="fa fa-user-plus"> <label class="font" style="font-family:Arial, Helvetica, sans-serif">
Create Po</label></i></a></small>

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
				<?php $_from = $this->_tpl_vars['ListViews']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['View']):
?>
				<table width="113%">
				<tr>
				 <td>Created:<?php echo $this->_tpl_vars['View']['created_date']; ?>
&nbsp;&nbsp;<?php echo $this->_tpl_vars['View']['created_time']; ?>
</td>
                  <td><!--<h4 class="box-title">&nbsp;&nbsp;&nbsp;&nbsp;PO Detailed View</h4>-->
				 <h4><?php echo $this->_tpl_vars['View']['supplier_company_name']; ?>
&nbsp;[<?php echo $this->_tpl_vars['View']['po_no']; ?>
]</h4></td>
				<td style="margin-left:-1000px;"> Modified:<?php echo $this->_tpl_vars['Date_Stamp']['0']['Date']; ?>
&nbsp;&nbsp;<?php echo $this->_tpl_vars['Time_Stamp']['0']['Time']; ?>
</td>
				</tr>
				</table>
				<?php endforeach; endif; unset($_from); ?>

				<form class="form-horizontal" id="detail_view_po" name="detail_view_po">
				<input type="hidden" name="hdAction" />

				  <?php $_from = $this->_tpl_vars['ListViews']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['EditList']):
?>
				  <div class="box-body">
				   <div class="col-md-6">
					<div class="form-group">
                      <label class="col-sm-4 thick">PO Status</label>
                      <div class="col-sm-6">
                       <?php echo $this->_tpl_vars['EditList']['po_status']; ?>

                      </div>
					  </div>

					 <div class="form-group">
                      <label class="col-sm-4 thick">Contact Person</label>
                      <div class="col-sm-6">
					 <?php echo $this->_tpl_vars['EditList']['salutation']; ?>
&nbsp;<?php echo $this->_tpl_vars['EditList']['contact_person']; ?>

					  </div>
					  </div>

				<div class="form-group">
                      <label class="col-sm-4 thick">Quote Refer Id</label>
                      <div class="col-sm-6">
                        <?php echo $this->_tpl_vars['EditList']['quote_ref_id']; ?>

                      </div>
					  </div>

					  <div class="form-group">
                      <label class="col-sm-4 thick">Supplier Name</label>
                      <div class="col-sm-6">
                        <?php echo $this->_tpl_vars['EditList']['supplier_company_name']; ?>

                      </div>
					  </div>

					    <?php if ($this->_tpl_vars['EditList']['deliver_to'] != ""): ?>
					    <div class="form-group">
                      <label class="col-sm-4 thick">Deliver To</label>
                        <div class="col-sm-6">
						<?php echo $this->_tpl_vars['EditList']['deliver_to']; ?>

                      </div>
					   </div>
					   <?php endif; ?>

					   <?php if ($this->_tpl_vars['EditList']['supplier_mobile_no'] != 0 && $this->_tpl_vars['EditList']['supplier_mobile_no'] != ""): ?>
					<div class="form-group">
                      <label class="col-sm-4 thick">Mobile No </label>
                      <div class="col-sm-6">
                        <?php echo $this->_tpl_vars['EditList']['supplier_mobile_no']; ?>

                      </div>
                    </div>
					<?php endif; ?>

					 <?php if ($this->_tpl_vars['EditList']['phone_no'] != "" && $this->_tpl_vars['EditList']['phone_no'] != '0'): ?>
					    <div class="form-group">
                      <label class="col-sm-4 thick">Phone No</label>
                        <div class="col-sm-6">
						<?php echo $this->_tpl_vars['EditList']['area_code']; ?>
 &nbsp;<?php echo $this->_tpl_vars['EditList']['phone_no']; ?>
&nbsp;<?php echo $this->_tpl_vars['EditList']['extension']; ?>

                      </div>
					   </div>
					   <?php endif; ?>

					<div class="form-group">
                      <label class="col-sm-4 thick">Address</label>
                      <div class="col-sm-6">
                       <?php echo $this->_tpl_vars['EditList']['supplier_address']; ?>

                      </div>
					  </div>

					  <?php if ($this->_tpl_vars['EditList']['supplier_address1'] != ""): ?>
					  <div class="form-group">
                      <label class="col-sm-4 thick">Address1</label>
                      <div class="col-sm-6">
                        <?php echo $this->_tpl_vars['EditList']['supplier_address1']; ?>

                      </div>
					  </div>
					  	 <?php endif; ?>


                   	</div>
					<!--**********************************************************-->
                      <div class="col-md-6">
					  <div class="form-group">
                      <label class="col-sm-4 thick">PO Date</label>
                      <div class="col-sm-6">
                       <?php echo $this->_tpl_vars['EditList']['po_date']; ?>

					   </div>
                    </div>

					<div class="form-group">
                      <label class="col-sm-4 thick">Quote Date</label>
                       <div class="col-sm-6">
                        <?php echo $this->_tpl_vars['EditList']['quote_date']; ?>

                      </div>
                    </div>

					<div class="form-group">
                      <label class="col-sm-4 thick">Supplier Code</label>
                      <div class="col-sm-6">
                        <?php echo $this->_tpl_vars['EditList']['supplier_code']; ?>

                      </div>
					  </div>

					  <?php if ($this->_tpl_vars['EditList']['supplier_email'] != ""): ?>
					<div class="form-group">
                      <label class="col-sm-4 thick">Supplier Mail Id</label>
                        <div class="col-sm-6">
                  <?php echo $this->_tpl_vars['EditList']['supplier_email']; ?>

                      </div>
					   </div>
					   <?php endif; ?>

					   <?php if ($this->_tpl_vars['EditList']['payment_status'] != ""): ?>
					<div class="form-group">
                      <label class="col-sm-4 thick">Payment Status</label>
                        <div class="col-sm-6">
                  <?php echo $this->_tpl_vars['EditList']['payment_status']; ?>

                      </div>
					   </div>
					   <?php endif; ?>

					   <?php if ($this->_tpl_vars['EditList']['area'] != ""): ?>
					   <div class="form-group">
                      <label class="col-sm-4 thick">Area</label>
                        <div class="col-sm-6">
                  <?php echo $this->_tpl_vars['EditList']['area']; ?>

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

					</div>
                    </div>
					<?php endforeach; endif; unset($_from); ?>
					<div class="clear"></div>

				<div style="margin-top: 10px; margin-bottom: 10px;border: 0px;">
				<center>
	         <input type="button" class="btn  btn-danger btn-xs" value="Add Follow Ups" data-toggle="modal" data-target="#Follow" >
			 <?php $_from = $this->_tpl_vars['Deltype']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['View']):
?>
			  <?php if ($this->_tpl_vars['View']['deliver_to'] == 'Others'): ?>
			&nbsp;<input type="button" class="btn  btn-danger btn-xs" value="Add Address" data-toggle="modal" data-target="#Address">
				<?php endif; ?>
				<?php endforeach; endif; unset($_from); ?>
				</center>
				</div>

				<div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#product" data-toggle="tab">Product</a></li>
                  <li><a href="#follow_up" data-toggle="tab">Follow Ups</a></li>
				  <li><a href="#address_detail" data-toggle="tab">Delivery Address</a></li>
                </ul>
				<div class="tab-content">
					<div class="tab-pane active" id="product">
				<form name="ProductList" id="ProductList" >
				<input type="hidden" id="sl_no" name="sl_no" value="<?php echo $this->_tpl_vars['sl_no']; ?>
">
                  <table id="example1" class="table table-bordered table-striped" style="font-size:13px;, Times, serif;">
                    <thead>
					<tr>
					            <th><center>Sl No</center></th>
								<th><center>Item Code</center></th>
								<th><center>Item Name</center> </th>
								<th><center>Item Type</center></th>
								<th><center>Item Spec</center></th>
								<th><center>Quantity</center></th>

					</tr>
                    </thead>
                    <tbody>
                     		<?php $_from = $this->_tpl_vars['ListView1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['details_list']):
?>
					 	<tr id="<?php echo $this->_tpl_vars['i']++; ?>
">
						<input type="hidden" value="<?php echo $this->_tpl_vars['details_list']['sl_no']; ?>
" />
								<input type="hidden" value="<?php echo $this->_tpl_vars['details_list']['sl_no']; ?>
" />
					            <td align="center"><a href="#"  data-toggle="modal" data-target="#Product<?php echo $this->_tpl_vars['details_list']['sl_no']; ?>
"><?php echo $this->_tpl_vars['i']; ?>
</a></td>
								<td align="center"><a href="#"  data-toggle="modal" data-target="#Product<?php echo $this->_tpl_vars['details_list']['sl_no']; ?>
"><?php echo $this->_tpl_vars['details_list']['item_code']; ?>
</a></td>
								<td align="center"><a href="#"  data-toggle="modal" data-target="#Product<?php echo $this->_tpl_vars['details_list']['sl_no']; ?>
"><?php echo $this->_tpl_vars['details_list']['item_name']; ?>
</a></td>
								<td align="center"><a href="#"  data-toggle="modal" data-target="#Product<?php echo $this->_tpl_vars['details_list']['sl_no']; ?>
"><?php echo $this->_tpl_vars['details_list']['item_type']; ?>
</a></td>
								<td align="center"><a href="#"  data-toggle="modal" data-target="#Product<?php echo $this->_tpl_vars['details_list']['sl_no']; ?>
"><?php echo $this->_tpl_vars['details_list']['item_specification']; ?>
</a></td>
								<td align="center"><a href="#"  data-toggle="modal" data-target="#Product<?php echo $this->_tpl_vars['details_list']['sl_no']; ?>
"><?php echo $this->_tpl_vars['details_list']['item_quantity']; ?>
</a></td>
									<!--********************************* Po Product Detail ************************************************ -->
	  <div class="modal fade" id="Product<?php echo $this->_tpl_vars['details_list']['sl_no']; ?>
" role="dialog">
		<div class="modal-dialog">

			<div class="modal-content" style="width:765px;">
				<div class="modal-header" style="background-color:#00CCFF;">
					<button type="button" class="close" data-dismiss="modal" onClick="window.location.reload();">&times;</button>
					<h4 class="modal-title">Product Detail</h4>
				</div>
					<iframe height="490px" width="100%" id="Product"  src="./po_pro_detail.php?po_no=<?php echo $this->_tpl_vars['details_list']['po_no']; ?>
&sl_no=<?php echo $this->_tpl_vars['details_list']['sl_no']; ?>
" style="border:1px;"></iframe>
			</div>
		</div>
	</div>



                    </tr>
					 <?php endforeach; else: ?>
					<tr>
								<td height="20" colspan="12" align="center"><img src="images/warning.gif" border="0">&nbsp;No Records Found</td>
					</tr>
					<?php endif; unset($_from); ?>
					</tbody>
                  </table>
				 </form>
				 </div>
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



                    <div class="tab-pane" id="follow_up">
				<form name="FollowList" id="FollowList">
				<input type="hidden" id="" name="" value="">
                  <table id="example2" class="table table-bordered table-striped" style="font-size:13px;, Times, serif;">
                    <thead>
					<tr>
					            <th><center>Sl No</center></th>
								<th><center>Po Status</center></th>
								<th><center>Po No</center> </th>
								<th><center>Po Date</center></th>
								<th><center>Created Date & Time</center></th>
								<th><center>Remarks</center></th>
								<th><center>Created By</center></th>
								<th><center>Timestamp</center></th>
					</tr>
                    </thead>
                    <tbody>
                     		<?php $_from = $this->_tpl_vars['Foltype']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['details_list']):
?>
					 	<tr id="<?php echo $this->_tpl_vars['j']++; ?>
">
						<input type="hidden" value="<?php echo $this->_tpl_vars['details_list']['sl_no']; ?>
" />
								<input type="hidden" value="<?php echo $this->_tpl_vars['details_list']['sl_no']; ?>
" />
					            <td align="center"><a href="#"  data-toggle="modal" data-target="#RevSales<?php echo $this->_tpl_vars['details_list']['sl_no']; ?>
"><?php echo $this->_tpl_vars['j']; ?>
</a></td>
								<td align="center"><a href="#"  data-toggle="modal" data-target="#RevSales<?php echo $this->_tpl_vars['details_list']['sl_no']; ?>
"><?php echo $this->_tpl_vars['details_list']['po_status']; ?>
</a></td>
								<td align="center"><a href="#"  data-toggle="modal" data-target="#RevSales<?php echo $this->_tpl_vars['details_list']['sl_no']; ?>
"><?php echo $this->_tpl_vars['details_list']['po_no']; ?>
</a></td>
								<td align="center"><a href="#"  data-toggle="modal" data-target="#RevSales<?php echo $this->_tpl_vars['details_list']['sl_no']; ?>
"><?php echo $this->_tpl_vars['details_list']['po_date']; ?>
</a></td>
								<td align="center"><a href="#"  data-toggle="modal" data-target="#RevSales<?php echo $this->_tpl_vars['details_list']['sl_no']; ?>
"><?php echo $this->_tpl_vars['details_list']['created_date']; ?>
&amp;	<?php echo $this->_tpl_vars['details_list']['created_time']; ?>
</a></td>
								<td align="center"><a href="#"  data-toggle="modal" data-target="#RevSales<?php echo $this->_tpl_vars['details_list']['sl_no']; ?>
"><?php echo $this->_tpl_vars['details_list']['remarks']; ?>
</a></td>
								<td align="center"><a href="#"  data-toggle="modal" data-target="#RevSales<?php echo $this->_tpl_vars['details_list']['sl_no']; ?>
"><?php echo $this->_tpl_vars['details_list']['created_by']; ?>
</a></td>
								<td align="center"><a href="#"  data-toggle="modal" data-target="#RevSales<?php echo $this->_tpl_vars['details_list']['sl_no']; ?>
"><?php echo $this->_tpl_vars['details_list']['timestamp_value']; ?>
</a></td>

                    </tr>
					 <?php endforeach; else: ?>
					<tr>
								<td height="20" colspan="12" align="center"><img src="images/warning.gif" border="0">&nbsp;No Records Found</td>
					</tr>
					<?php endif; unset($_from); ?>
					</tbody>
                  </table>
				 </form>
				 </div>
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



                  <div class="tab-pane" id="address_detail">
				<form name="AddressList" id="AddressList" >
				<input type="hidden" id="" name="" value="">
                  <table id="example2" class="table table-bordered table-striped" style="font-size:13px;, Times, serif;">
                    <thead>
					<tr>
					            <th><center>Sl No</center></th>
								<th><center>Address</center></th>
								<th><center>Address1</center> </th>
								<th><center>Area</center></th>
								<th><center>City</center></th>
								<th><center>Pincode</center></th>

					</tr>
                    </thead>
                    <tbody>
                     		<?php $_from = $this->_tpl_vars['Deltype']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['details_list']):
?>
					 	<tr id="<?php echo $this->_tpl_vars['k']++; ?>
">
						<input type="hidden" value="<?php echo $this->_tpl_vars['details_list']['sl_no']; ?>
" />
								<input type="hidden" value="<?php echo $this->_tpl_vars['details_list']['sl_no']; ?>
" />
					            <td align="center"><a href="#"  data-toggle="modal" data-target="#RevSales<?php echo $this->_tpl_vars['details_list']['sl_no']; ?>
"><?php echo $this->_tpl_vars['k']; ?>
</a></td>
								<td align="center"><a href="#"  data-toggle="modal" data-target="#RevSales<?php echo $this->_tpl_vars['details_list']['sl_no']; ?>
"><?php echo $this->_tpl_vars['details_list']['supplier_address']; ?>
</a></td>
								<td align="center"><a href="#"  data-toggle="modal" data-target="#RevSales<?php echo $this->_tpl_vars['details_list']['sl_no']; ?>
"><?php echo $this->_tpl_vars['details_list']['supplier_address1']; ?>
</a></td>
								<td align="center"><a href="#"  data-toggle="modal" data-target="#RevSales<?php echo $this->_tpl_vars['details_list']['sl_no']; ?>
"><?php echo $this->_tpl_vars['details_list']['area']; ?>
</a></td>
								<td align="center"><a href="#"  data-toggle="modal" data-target="#RevSales<?php echo $this->_tpl_vars['details_list']['sl_no']; ?>
"><?php echo $this->_tpl_vars['details_list']['city']; ?>
</a></td>
								<td align="center"><a href="#"  data-toggle="modal" data-target="#RevSales<?php echo $this->_tpl_vars['details_list']['sl_no']; ?>
"><?php echo $this->_tpl_vars['details_list']['pincode']; ?>
</a></td>

                    </tr>
					 <?php endforeach; else: ?>
					<tr>
								<td height="20" colspan="12" align="center"><img src="images/warning.gif" border="0">&nbsp;No Records Found</td>
					</tr>
					<?php endif; unset($_from); ?>					</tbody>
                  </table>
				 </form>
				  </div>
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
					</form>

				

				 </div><!--/.box-header-->
                </div><!-- /.box-info -->
            </div> <!-- /.col -->
          </div> <!-- /.row -->
        </section> <!-- /.content -->
      </div><!-- /.content-wrapper -->
            <!-- Control Sidebar -->
      <!-- /.control-sidebar -->
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"> </div>
	  <!--********************************* Follow Up ************************************************ -->
	  <div class="modal fade" id="Follow" role="dialog">
		<div class="modal-dialog">

			<div class="modal-content" style="width:765px;">
				<div class="modal-header" style="background-color:#00CCFF;">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Add Follow Ups</h4>
				</div>
					<iframe height="490px" width="100%" id="Follow"  src="./po_followup.php?po_no=<?php echo $this->_supers['get']['po_no']; ?>
" style="border:1px;"></iframe>
			</div>
		</div>
	</div>
<!--********************************* Address ************************************************ -->
	  <div class="modal fade" id="Address" role="dialog">
		<div class="modal-dialog">

			<div class="modal-content" style="width:765px;">
				<div class="modal-header" style="background-color:#00CCFF;">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Delivery Address</h4>
				</div>
					<iframe height="490px" width="100%" id="Address"  src="./address.php?po_no=<?php echo $this->_supers['get']['po_no']; ?>
" style="border:1px;"></iframe>
			</div>
		</div>
	</div>

  </body>