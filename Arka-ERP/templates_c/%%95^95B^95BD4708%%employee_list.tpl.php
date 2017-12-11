<?php /* Smarty version 2.6.25, created on 2017-03-02 18:49:48
         compiled from employee_list.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "left.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="content-wrapper">
	<section class="content-header">
		<h4>
        <small><a href="employee_list.php"><i class="fa fa-list"> <label style="font-family:Arial, Helvetica, sans-serif">
		List Employees</label></i></a></small>&ensp;&ensp;&ensp;
		<small><a href="employee_reg.php"><i class="fa fa-user-plus"> <label style="font-family:Arial, Helvetica, sans-serif">
		Create Employee</label></i></a></small>
		</h4>
        </section>
        <!-- Main content -->
          <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box box-info">
                <div class="box-header">
                  <center><h3 class="box-title">Employee Lists</h3></center>
                </div><!-- /.box-header -->
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
				<form name="employee_list" id="employee_list" method="post">
		                   <table id="example1" class="table table-bordered table-striped ">
                    <thead>
                      <tr>
					  <th>Sl No</th>
                        <th>Employee Id</th>
                        <th>Employee Name</th>
                        <th>Company Code</th>
                        <th>Designation</th>
						<th>Department</th>
                        <th>Joining Date</th>
						<?php $_from = $this->_tpl_vars['RList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['roles']):
?>
						<?php if ($this->_tpl_vars['roles']['role_name'] == 'Edit Employee'): ?>
						<th>Action</th>
						<?php endif; ?>
						<?php endforeach; endif; unset($_from); ?>
                      </tr>
                    </thead>
                    <tbody>
					<?php $_from = $this->_tpl_vars['ListView']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['View']):
?>
					 <tr id="<?php echo $this->_tpl_vars['i']++; ?>
">
					 <td align="left"><a href="#" onClick="Javascript:viewCats('<?php echo $this->_tpl_vars['View']['emp_id']; ?>
')"><?php echo $this->_tpl_vars['i']; ?>
</a></td>
								<td align="left"><a href="#" onClick="Javascript:viewCats('<?php echo $this->_tpl_vars['View']['emp_id']; ?>
')"><?php echo $this->_tpl_vars['View']['emp_id']; ?>
</a></td>
					<td align="left"><a href="#" onClick="Javascript:viewCats('<?php echo $this->_tpl_vars['View']['emp_id']; ?>
')"><?php echo $this->_tpl_vars['View']['salutation']; ?>
.<?php echo $this->_tpl_vars['View']['emp_first_name']; ?>
 <?php echo $this->_tpl_vars['View']['emp_last_name']; ?>
</a></td>
								<td align="left"><a href="#" onClick="Javascript:viewCats('<?php echo $this->_tpl_vars['View']['emp_id']; ?>
')"><?php echo $this->_tpl_vars['View']['company_code']; ?>
</a></td>
								<td align="left"><a href="#" onClick="Javascript:viewCats('<?php echo $this->_tpl_vars['View']['emp_id']; ?>
')"><?php echo $this->_tpl_vars['View']['designation']; ?>
</a></td>
								<td align="left"><a href="#" onClick="Javascript:viewCats('<?php echo $this->_tpl_vars['View']['emp_id']; ?>
')"><?php echo $this->_tpl_vars['View']['department']; ?>
</a></td>
								<td align="left"><a href="#" onClick="Javascript:viewCats('<?php echo $this->_tpl_vars['View']['emp_id']; ?>
')"><?php echo $this->_tpl_vars['View']['joining_date']; ?>
</a></td>
								
								<td align="left">
								 <?php $_from = $this->_tpl_vars['RList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['roles']):
?>
						<?php if ($this->_tpl_vars['roles']['role_name'] == 'Edit Employee'): ?>
								&nbsp;&nbsp; &nbsp;&nbsp;<a href="#" onClick="Javascript:editCats('<?php echo $this->_tpl_vars['View']['emp_id']; ?>
')"><i class="fa fa-edit"></i></a><?php endif; ?>
								<?php if ($this->_tpl_vars['roles']['role_name'] == 'Delete Employee'): ?>
								&nbsp;&nbsp; &nbsp;&nbsp;<a href="#" onClick="Javascript:deleteCats('<?php echo $this->_tpl_vars['View']['emp_id']; ?>
')"><i class="fa fa-trash"></i></a><?php endif; ?>
								<?php endforeach; endif; unset($_from); ?>
								</td>
                    </tr>
					  <?php endforeach; else: ?>
					<tr>
					<td height="20" colspan="12" align="center"><img src="images/warning.gif" border="0">&nbsp;No Records Found</td>
					</tr>
              <?php endif; unset($_from); ?>
					</tbody>
                  </table>
				 </form>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
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
	  
	  function deleteCats(CatIdent){ 
	if(confirm("Are you sure to Delete this Content?")){
	FormName		= document.employee_list;
	FormName.action= "employee_list.php?emp_id="+CatIdent;
	FormName.submit();
	}
}
function editCats(CatIdent) {
	var empl_id = btoa(CatIdent);
	FormName		= document.employee_list;
	FormName.action =\'employee_edit.php?emp_id=\'+empl_id;
	FormName.submit();
}
function viewCats(CatIdent) {
	var empl_id = btoa(CatIdent);
	FormName		= document.employee_list;
	FormName.action =\'employee_detail_view.php?emp_id=\'+empl_id;
	FormName.submit();
}
</script>
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
'; ?>

 </body>