<?php /* Smarty version 2.6.25, created on 2016-03-16 17:08:43
         compiled from sales_quote_detail_view.tpl */ ?>
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
</style>
	<link rel="stylesheet" href= "./codebase/skins/dhtmlxmessage_dhx_skyblue.css" type="text/css" media="all"/> 
	<link rel=\'stylesheet\' type=\'text/css\' href=\'auto-complete/jquery.auto-complete.css?<?= mktime() ?>\' />
'; ?>


 <body class="hold-transition skin-blue sidebar-mini">
  <div class="content-wrapper">
	<section class="content-header">
          <h4>
            <small><a href="sales_quote_list.php"><i class="fa fa-list"> <label style="font-family:Arial, Helvetica, sans-serif">
List Sales Order</i></a></small>&ensp;&ensp;&ensp;
           <!-- <small><a href="sales_quote_reg.php"><i class="fa fa-user-plus">
Create Sales Quote</i></a></small>-->
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
				<table width="118%">
				<tr>
				 <td>Created:<?php echo $this->_tpl_vars['View']['created_date']; ?>
&nbsp;&amp;&nbsp; <?php echo $this->_tpl_vars['View']['created_time']; ?>
</td>
                  <td><h4 class="box-title">&nbsp;&nbsp;&nbsp;&nbsp;Sales Order Detailed View</h4>
				 <h4><?php echo $this->_tpl_vars['View']['company_name']; ?>
&nbsp;&nbsp;&nbsp;[<?php echo $this->_tpl_vars['View']['sales_order_no']; ?>
]</h4></td>
				<td style="margin-left:-1000px;"> Modified:<?php echo $this->_tpl_vars['Date_Stamp']['0']['Date']; ?>
&nbsp;&amp;&nbsp;<?php echo $this->_tpl_vars['Time_Stamp']['0']['Time']; ?>
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
                      <label class="col-sm-4 control-label">Sales Quote No</label>
                      <div class="col-sm-6">
					<?php echo $this->_tpl_vars['EditList']['sales_quote_no']; ?>

                      </div>
			          </div>
					 <div class="form-group">
                      <label class="col-sm-4 control-label">Item Type</label>
                      <div class="col-sm-6">
					    <?php echo $this->_tpl_vars['EditList']['item_type']; ?>

                      </div>
					  </div>
                    
					</div>
					<!--**********************************************************-->
					    <div class="col-md-6">
						<div class="form-group">
                      <label class="col-sm-4 control-label">Quote Date</label>
                      <div class="col-sm-6">
						 <?php echo $this->_tpl_vars['EditList']['quote_date']; ?>

                      </div>
					   </div>
						<div class="form-group">
                      <label class="col-sm-4 control-label">Sales Order Date</label>
                      <div class="col-sm-6">
						 <?php echo $this->_tpl_vars['EditList']['sales_order_date']; ?>

                      </div>
					   </div>
					</div>
					<?php endforeach; endif; unset($_from); ?>
					</div>
					</form>
</div>
						<!-- /.box-header -->
                
				<div class="clear"></div>
				<div style="margin-top: 10px; margin-bottom: 10px;border: 0px;"><center>
							
							<input type="button" class="btn  btn-danger btn-xs" value="Add Follow Ups" data-toggle="modal" data-target="#Follow">&nbsp;&nbsp;
						
						  </center>
						  </div>
						  <div class="modal fade" id="Follow" role="dialog">
		<div class="modal-dialog">

			<div class="modal-content" style="width:765px;">
				<div class="modal-header" style="background-color:#00CCFF;">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Add Follow Ups</h4>
				</div>
					<iframe height="490px" width="100%" id="Follow"  src="./salesfollow.php?enquiry_id=<?php echo $this->_supers['get']['enquiry_id']; ?>
" style="border:1px;"></iframe>
			</div>
		</div>
	</div>
	
	<!--******************************************************************************************************-->
	<div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#follow" data-toggle="tab">Follow Ups</a></li>
                </ul>
                <div class="tab-content">
                  <!-- Font Awesome Icons -->
                  <div class="tab-pane active" id="follow">
                    <form name="FollowList" id="FollowList" method="post">
                  <table id="example1" class="table table-bordered table-striped" style="font-size:13px; , Times, serif;">
									 
                    <thead>
                      <tr>
					 <!-- <th>S No</th>-->
					 <th><center>Sl.No</center></th>
						<th><center>Company Name</center></th>
                        <th><center>Customer Id</center></th>
                        <th><center> Sqft</center></th>
						<th><center>Material</center></th>
                        <th><center>Labour</center></th>
						<th><center>Action</center></th>
						
                      </tr>

                    </thead>
                    <tbody>	
					<?php $_from = $this->_tpl_vars['ListDetail']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
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
"><?php echo $this->_tpl_vars['Contact']['company_name']; ?>
</a></td>
								
								<!--<td align="center"><a href="#" data-toggle="modal" data-target="#ViewContact<?php echo $this->_tpl_vars['Contact']['enquiry_id']; ?>
"><?php if ($this->_tpl_vars['Contact']['snooze_date'] == '0000-00-00'): ?> NA <?php elseif ($this->_tpl_vars['Contact']['snooze_date'] != '0000-00-00'): ?><?php echo $this->_tpl_vars['Contact']['snooze_date']; ?>
<?php endif; ?></a></td>-->
								<!--<td align="center"><a href="#" data-toggle="modal" data-target="#ViewContact<?php echo $this->_tpl_vars['Contact']['enquiry_id']; ?>
"><?php if ($this->_tpl_vars['Contact']['snooze_time'] == '00:00:00'): ?> NA <?php elseif ($this->_tpl_vars['Contact']['snooze_time'] != '00:00:00'): ?><?php echo $this->_tpl_vars['Contact']['snooze_time']; ?>
<?php endif; ?></a></td>
								
								<td align="center"><a href="#" data-toggle="modal" data-target="#ViewContact<?php echo $this->_tpl_vars['Contact']['enquiry_id']; ?>
"><?php if ($this->_tpl_vars['Contact']['closed_date'] == '0000-00-00'): ?> NA <?php elseif ($this->_tpl_vars['Contact']['closed_date'] != '0000-00-00'): ?><?php echo $this->_tpl_vars['Contact']['closed_date']; ?>
<?php endif; ?></a></td>
								<td align="center"><a href="#" data-toggle="modal" data-target="#ViewContact<?php echo $this->_tpl_vars['Contact']['enquiry_id']; ?>
"><?php if ($this->_tpl_vars['Contact']['closed_time'] == '00:00:00'): ?> NA <?php elseif ($this->_tpl_vars['Contact']['closed_time'] != '00:00:00'): ?><?php echo $this->_tpl_vars['Contact']['closed_time']; ?>
<?php endif; ?></a></td>-->
								<td align="center"><a href="#" data-toggle="modal" data-target="#ViewContact<?php echo $this->_tpl_vars['Contact']['service_order_no']; ?>
"><?php echo $this->_tpl_vars['Contact']['customer_id']; ?>
</a></td>
								<td align="center"><a href="#" data-toggle="modal" data-target="#ViewContact<?php echo $this->_tpl_vars['Contact']['service_order_no']; ?>
"><?php echo $this->_tpl_vars['Contact']['sqft']; ?>
</a></td>
								<td align="center"><a href="#" data-toggle="modal" data-target="#ViewContact<?php echo $this->_tpl_vars['Contact']['service_order_no']; ?>
"><?php echo $this->_tpl_vars['Contact']['material']; ?>
</a></td>
								<td align="center"><a href="#" data-toggle="modal" data-target="#ViewContact<?php echo $this->_tpl_vars['Contact']['service_order_no']; ?>
"><?php echo $this->_tpl_vars['Contact']['labour']; ?>
</a></td>
	<td class="center">&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" data-toggle="modal" data-target="#EditContact"><i class="fa fa-edit"></i></a>
						&nbsp;&nbsp; &nbsp;&nbsp;<a href="#" onClick="Javascript:deleteCat('<?php echo $this->_tpl_vars['Contact']['sl_no']; ?>
','<?php echo $this->_tpl_vars['Contact']['service_order_no']; ?>
')"><i class="fa fa-trash"></i></a></td>
						                    </tr>
					  <?php endforeach; else: ?>
					<tr>
								<td height="20" colspan="12" align="center"><img src="images/warning.gif" border="0">&nbsp;No Records Found</td>
					</tr>
					<?php endif; unset($_from); ?>
					
              <div class="modal fade" id="ViewContact<?php echo $this->_tpl_vars['Contact']['service_order_no']; ?>
" role="dialog">
							<div class="modal-dialog">
							<!-- Modal content-->
							<div class="modal-content" style="width:700px;">
							<div class="modal-header" style="background-color:#00CCFF;">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title">View Followup</h4>
							</div>
									<iframe height="490px" width="100%" id="ViewContact"  src="./salesfollow_view.php?service_order_no=<?php echo $this->_tpl_vars['Contact']['service_order_no']; ?>
" style="border:1px;"></iframe>
							</div>
							</div>
							</div>
							
							<div class="modal fade" id="EditContact" role="dialog">
							<div class="modal-dialog">
							<!-- Modal content-->
							<div class="modal-content" style="width:700px;">
							<div class="modal-header" style="background-color:#00CCFF;">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title">Edit Contact</h4>
							</div>
									<iframe height="490px" width="100%" id="EditContact"  src="./cus_edit.php?sl_no=<?php echo $this->_tpl_vars['Contact']['sl_no']; ?>
" style="border:1px;"></iframe>
							</div>
							</div>
							</div>
							

					</tbody>
                    </tfoot>
                  </table><!-- /#ion-icons -->
				  </form>
				
				
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
