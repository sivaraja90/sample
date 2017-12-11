<?php /* Smarty version 2.6.25, created on 2016-08-07 10:55:08
         compiled from quote_detail_view.tpl */ ?>
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
font-weight:normal;
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
            <small class="active"><a href="quote_list.php"><i class="fa fa-list"> <label class="font" style="font-family:Arial, Helvetica, sans-serif">
List Quotes</label></i></a></small>&ensp;&ensp;&ensp;
            <small><a href="quote_reg.php"><i class="fa fa-user-plus"> <label class="font" style="font-family:Arial, Helvetica, sans-serif">
Create Quote</label></i></a></small>

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
				<?php $_from = $this->_tpl_vars['ListView4']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['View']):
?>
				<table width="113%">
				<tr>
				 <td>Created:&nbsp;<?php echo $this->_tpl_vars['View']['created_date']; ?>
&nbsp;&nbsp;<?php echo $this->_tpl_vars['View']['created_time']; ?>
</td>
                  <td><!--<h4 class="box-title">&nbsp;&nbsp;&nbsp;&nbsp;Quote Detailed View</h4>-->
				 <h4><?php echo $this->_tpl_vars['View']['supplier_company_name']; ?>
&nbsp;[<?php echo $this->_tpl_vars['View']['quote_id']; ?>
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
				<?php $_from = $this->_tpl_vars['ListView4']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['EditList']):
?>
                    <div class="box-body">
				   <div class="col-md-6">

					 <div class="form-group">
                      <label class="col-sm-4 thick">Quote Date</label>
                      <div class="col-sm-6">
					   <?php echo $this->_tpl_vars['EditList']['quote_date']; ?>

                       </div>
                    </div>


					 <div class="form-group">
                      <label class="col-sm-4 thick">Contact Person</label>
                      <div class="col-sm-6">
					  <?php echo $this->_tpl_vars['EditList']['contact_fname']; ?>

                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-4 thick">Address</label>
                      <div class="col-sm-6">
					    <?php echo $this->_tpl_vars['EditList']['address']; ?>

                      </div>
					  </div>

					  <?php if ($this->_tpl_vars['EditList']['address1'] != ""): ?>
					    <div class="form-group">
                      <label class="col-sm-4 thick">Address1</label>
                      <div class="col-sm-6">
					  <?php echo $this->_tpl_vars['EditList']['address1']; ?>

                      </div>
                    </div>
					<?php endif; ?>

						<div class="form-group">
                      <label class="col-sm-4 thick">City </label>
                      <div class="col-sm-6">
					   <?php echo $this->_tpl_vars['EditList']['city']; ?>

                       </div>
                    </div>

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
                      <label class="col-sm-4 thick">Created By</label>
                      <div class="col-sm-6">
                         <?php echo $this->_tpl_vars['EditList']['created_by']; ?>

                      </div>
                    </div>

					</div>

					<!--**********************************************************-->
					    <div class="col-md-6">
						<div class="form-group">
                      <label class="col-sm-4 thick">Quote Status</label>
                      <div class="col-sm-6">
						 <?php echo $this->_tpl_vars['EditList']['quote_status']; ?>

                      </div>
					   </div>

							 <div class="form-group">
                      <label class="col-sm-4 thick">Supplier Code</label>
                      <div class="col-sm-6">
					   <?php echo $this->_tpl_vars['EditList']['supplier_code']; ?>

                       </div>
                    </div>

						<div class="form-group">
                      <label class="col-sm-4 thick">Enquiry Reference Id</label>
                      <div class="col-sm-6">
                        <?php echo $this->_tpl_vars['EditList']['enquiry_reff_id']; ?>

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
                      <div class="col-sm-6" >
					  <?php echo $this->_tpl_vars['EditList']['pincode']; ?>

                      </div>
					  </div>

					  <?php if ($this->_tpl_vars['EditList']['mobile_no'] != "" && $this->_tpl_vars['EditList']['mobile_no'] != '0'): ?>
					 <div class="form-group">
                      <label class="col-sm-4 thick">Mobile No </label>
                      <div class="col-sm-6">
					   <?php echo $this->_tpl_vars['EditList']['mobile_no']; ?>

                       </div>
                    </div>
					<?php endif; ?>

					<?php if ($this->_tpl_vars['EditList']['email_id'] != ""): ?>
					  <div class="form-group">
                      <label class="col-sm-4 thick">Email Id</label>
                      <div class="col-sm-6" >
					  <?php echo $this->_tpl_vars['EditList']['email_id']; ?>

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

					   <br>




					</div>
					</div>
					<?php endforeach; endif; unset($_from); ?>

				<form name="SalesList" id="SalesList" method="post">
				<input type="hidden" id="sl_no" name="sl_no" value="<?php echo $this->_tpl_vars['sl_no']; ?>
">
                  <table id="example2" class="table table-bordered table-striped" style="font-size:13px;, Times, serif;">
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
                     		<?php $_from = $this->_tpl_vars['ListViews']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['details_list']):
?>
					 	<tr id="<?php echo $this->_tpl_vars['i']++; ?>
">
						<input type="hidden" value="<?php echo $this->_tpl_vars['details_list']['sl_no']; ?>
" />
								<input type="hidden" value="<?php echo $this->_tpl_vars['details_list']['sales_quote_no']; ?>
" />
					            <td align="center"><a href="#" data-toggle="modal" data-target="#Product<?php echo $this->_tpl_vars['details_list']['sl_no']; ?>
"><?php echo $this->_tpl_vars['i']; ?>
</a></td>
								<td align="center"><a href="#" data-toggle="modal" data-target="#Product<?php echo $this->_tpl_vars['details_list']['sl_no']; ?>
"><?php echo $this->_tpl_vars['details_list']['item_code']; ?>
</a></td>
								<td align="center"><a href="#" data-toggle="modal" data-target="#Product<?php echo $this->_tpl_vars['details_list']['sl_no']; ?>
"><?php echo $this->_tpl_vars['details_list']['item_name']; ?>
</a></td>
								<td align="center"><a href="#" data-toggle="modal" data-target="#Product<?php echo $this->_tpl_vars['details_list']['sl_no']; ?>
"><?php echo $this->_tpl_vars['details_list']['item_type']; ?>
</a></td>
								<td align="center"><a href="#" data-toggle="modal" data-target="#Product<?php echo $this->_tpl_vars['details_list']['sl_no']; ?>
"><?php echo $this->_tpl_vars['details_list']['item_specification']; ?>
</a></td>
								<td align="center"><a href="#" data-toggle="modal" data-target="#Product<?php echo $this->_tpl_vars['details_list']['sl_no']; ?>
"><?php echo $this->_tpl_vars['details_list']['item_quantity']; ?>
</a></td>
								<div class="modal fade" id="Product<?php echo $this->_tpl_vars['details_list']['sl_no']; ?>
" role="dialog">
		<div class="modal-dialog">

			<div class="modal-content" style="width:765px;">
				<div class="modal-header" style="background-color:#00CCFF;">
					<button type="button" class="close" data-dismiss="modal" onClick="window.location.reload();">&times;</button>
					<h4 class="modal-title">Product Detail</h4>
				</div>
					<iframe height="490px" width="100%" id="Product"  src="./quote_pro_detail.php?quote_id=<?php echo $this->_tpl_vars['details_list']['quote_id']; ?>
&sl_no=<?php echo $this->_tpl_vars['details_list']['sl_no']; ?>
" style="border:1px;"></iframe>
			</div>
		</div>
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


					</form>

</div>
						<!-- /.box-header -->

                </div><!-- /.box-body -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
            <!-- Control Sidebar -->
      <!-- /.control-sidebar -->
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
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
	'; ?>

  </body>
 </html>