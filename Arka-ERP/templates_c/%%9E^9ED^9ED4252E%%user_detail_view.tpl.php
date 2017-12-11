<?php /* Smarty version 2.6.25, created on 2017-01-10 12:27:30
         compiled from user_detail_view.tpl */ ?>
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
	<link rel="stylesheet" href= "./codebase/skins/dhtmlxmessage_dhx_skyblue.css" type="text/css" media="all"/>
	<link rel=\'stylesheet\' type=\'text/css\' href=\'auto-complete/jquery.auto-complete.css?<?= mktime() ?>\' />
'; ?>

 <body class="hold-transition skin-blue sidebar-mini">
  <div class="content-wrapper">
	<section class="content-header">
          <h4>
            <small class="active"><a href="user_list.php"><i class="fa fa-list"> <label class="font" style="font-family:Arial, Helvetica, sans-serif">
List Users</label></i></a></small>&ensp;&ensp;&ensp;
            <small><a href="user_reg.php"><i class="fa fa-user-plus"> <label class="font" style="font-family:Arial, Helvetica, sans-serif">
Create User</label></i></a></small></h4>
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
 				    <?php $_from = $this->_tpl_vars['ListEdit']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['View']):
?>
				<table width="110%">
				<tr>
				 <td>Created:<?php echo $this->_tpl_vars['View']['created_date']; ?>
&nbsp;&nbsp;<?php echo $this->_tpl_vars['View']['created_time']; ?>
</td>
                  <td>
				 <h4><?php echo $this->_tpl_vars['View']['company_name']; ?>
&nbsp;<?php echo $this->_tpl_vars['View']['user_id']; ?>
</h4></td>
				<td style="margin-left:-1000px;"> Modified:<?php echo $this->_tpl_vars['Date_Stamp']['0']['Date']; ?>
&nbsp;&nbsp;<?php echo $this->_tpl_vars['Time_Stamp']['0']['Time']; ?>
</td>
				</tr>
				</table>
				<?php endforeach; endif; unset($_from); ?>
				<form class="form-horizontal" name="user_details">
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
				<?php $_from = $this->_tpl_vars['ListEdit']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['EditList']):
?>
                  <div class="box-body">
				   <div class="col-md-6">
					  <div class="form-group">
                      <label class="col-sm-4 thick">User Name</label>
                      <div class="col-sm-6">
					  <?php echo $this->_tpl_vars['EditList']['username']; ?>

                      </div>
                    </div>
					 <div class="form-group">
                      <label class="col-sm-4 thick">Customer Name</label>
                      <div class="col-sm-6">
					  <?php echo $this->_tpl_vars['EditList']['salutation']; ?>
.
					  <?php echo $this->_tpl_vars['EditList']['contact_fname']; ?>

					<?php echo $this->_tpl_vars['EditList']['contact_lname']; ?>

                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-4 thick">Designation</label>
                      <div class="col-sm-6">
					    <?php echo $this->_tpl_vars['EditList']['designation']; ?>

                      </div>
					  </div>
					  <?php if ($this->_tpl_vars['EditList']['mobile'] != "" && $this->_tpl_vars['EditList']['mobile'] != '0'): ?>
					    <div class="form-group">
                      <label class="col-sm-4 thick">Mobile No</label>
                      <div class="col-sm-6">
			         <?php echo $this->_tpl_vars['EditList']['mobile']; ?>

                      </div>
                    </div>
					<?php endif; ?>
					<?php if ($this->_tpl_vars['EditList']['mobile1'] != '0' && $this->_tpl_vars['EditList']['mobile1'] != ""): ?>
					<div class="form-group">
                      <label class="col-sm-4 thick">Mobile No 1</label>
                      <div class="col-sm-6">
			         <?php echo $this->_tpl_vars['EditList']['mobile1']; ?>

                      </div>
                    </div>
					<?php endif; ?>
					<?php if ($this->_tpl_vars['EditList']['mobile2'] != '0' && $this->_tpl_vars['EditList']['mobile2'] != ""): ?>
					<div class="form-group">
                      <label class="col-sm-4 thick">Mobile No 2</label>
                      <div class="col-sm-6">
			         <?php echo $this->_tpl_vars['EditList']['mobile2']; ?>

                      </div>
                    </div>
					<?php endif; ?>
					 <?php if ($this->_tpl_vars['EditList']['email_id'] != ""): ?>
					    <div class="form-group">
                      <label class="col-sm-4 thick">Email Id</label>
                      <div class="col-sm-6">
					    <?php echo $this->_tpl_vars['EditList']['email_id']; ?>

					 </div>
                    </div>
					<?php endif; ?>
					<?php if ($this->_tpl_vars['EditList']['remarks'] != ""): ?>
					 <div class="form-group">
                      <label class="col-sm-4 thick">Remarks</label>
                      <div class="col-sm-6" >
					  <?php echo $this->_tpl_vars['EditList']['remarks']; ?>

                      </div>
					  </div>
					  <?php endif; ?>
					<div class="form-group" style="visibility:hidden">
                      <label class="col-sm-4 thick">Created By</label>
                      <div class="col-sm-6">
					    <?php echo $this->_tpl_vars['EditList']['created_by']; ?>

					 </div>
					 </div>
					</div>
					<!--**********************************************************-->
					    <div class="col-md-6">
					  <div class="form-group">
                      <label class="col-sm-4 thick">Company Code</label>
                      <div class="col-sm-6">
						 <?php echo $this->_tpl_vars['EditList']['company_code']; ?>

                      </div>
					   </div>
					<div class="form-group">
                      <label class="col-sm-4 thick">Sex</label>
                      <div class="col-sm-6">
						 <?php echo $this->_tpl_vars['EditList']['sex']; ?>

                      </div>
					   </div>
					   <div class="form-group">
                      <label class="col-sm-4 thick">Department</label>
                      <div class="col-sm-6">
					  <?php echo $this->_tpl_vars['EditList']['department']; ?>

                      </div>
                    </div>
					<?php if ($this->_tpl_vars['EditList']['phone'] != '0' && $this->_tpl_vars['EditList']['phone'] != ""): ?>
					 <div class="form-group">
                      <label class="col-sm-4 thick">Phone No</label>
                      <div class="col-sm-6">
					  <?php echo $this->_tpl_vars['EditList']['area']; ?>

					  <?php echo $this->_tpl_vars['EditList']['phone']; ?>

					  <?php echo $this->_tpl_vars['EditList']['extension']; ?>

                    </div>
                    </div>
					<?php endif; ?>
						 <div class="form-group">
                      <label class="col-sm-4 thick">User Group</label>
                      <div class="col-sm-6">
						<?php echo $this->_tpl_vars['EditList']['user_group']; ?>

                      </div>
                      </div>
						<?php if ($this->_tpl_vars['EditList']['email_id1'] != ""): ?>
					    <div class="form-group">
                      <label class="col-sm-4 thick">Email Id 1</label>
                      <div class="col-sm-6">
					    <?php echo $this->_tpl_vars['EditList']['email_id1']; ?>

					 </div>
                    </div>
					<?php endif; ?>
					</div>
                    </div>
					<?php endforeach; endif; unset($_from); ?>
					</form>
					 </div>
				<div class="clear"></div>
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