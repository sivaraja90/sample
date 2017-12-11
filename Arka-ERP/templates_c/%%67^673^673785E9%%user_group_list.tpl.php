<?php /* Smarty version 2.6.25, created on 2016-07-04 17:18:40
         compiled from user_group_list.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "left.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

 <body class="hold-transition skin-blue sidebar-mini">
  <div class="content-wrapper">
	<section class="content-header">
          <h4>
         <small class="active"><a href="user_group_list.php"><i class="fa fa-list"> <label style="font-family:Arial, Helvetica, sans-serif">
		 List User Groups</label></i></a></small>&ensp;&ensp;&ensp;
         <small><a href="user_group_reg.php"><i class="fa fa-user-plus"> <label style="font-family:Arial, Helvetica, sans-serif">
		 Create User Group</label></i></a></small>
		 </h4>
         <!-- <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Tables</a></li>
            <li class="active">Data tables</li>
          </ol>-->
        </section>

        <!-- Main content -->
          <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box box-info">
                <div class="box-header">
                 <center><h3 class="box-title">User Group Lists</h3></center>
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
				<form name="GroupList" id="GroupList" method="post">
                  <table id="example1" class="table table-bordered table-striped ">
                    <thead>
					
                      <tr>
					  	<th>Sl No</th>
                        <th>Group Id</th>
                        <th>Group Name</th>
                        <th>Description</th>
                        <th>Creatd Date</th>
						<th>Created Time</th>
						<th>Action</th>
                      </tr>

                    </thead>
                    <tbody>
					<?php $_from = $this->_tpl_vars['ListView']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['View']):
?>
                      <tr  id="<?php echo $this->_tpl_vars['i']++; ?>
">
								<td align="left"><a href="#" onClick="Javascript:viewCats('<?php echo $this->_tpl_vars['View']['group_id']; ?>
')"><?php echo $this->_tpl_vars['i']; ?>
</a></td>
								<td align="left"><a href="#" onClick="Javascript:viewCats('<?php echo $this->_tpl_vars['View']['group_id']; ?>
')"><?php echo $this->_tpl_vars['View']['group_id']; ?>
</a></td>
								<td align="left"><a href="#" onClick="Javascript:viewCats('<?php echo $this->_tpl_vars['View']['group_id']; ?>
')"><?php echo $this->_tpl_vars['View']['group_name']; ?>
</a></td>
								<td align="left"><a href="#" onClick="Javascript:viewCats('<?php echo $this->_tpl_vars['View']['group_id']; ?>
')"><?php echo $this->_tpl_vars['View']['description']; ?>
</a></td>
								<td align="left"><a href="#" onClick="Javascript:viewCats('<?php echo $this->_tpl_vars['View']['group_id']; ?>
')"><?php echo $this->_tpl_vars['View']['created_date']; ?>
</a></td>
								<td align="left"><a href="#" onClick="Javascript:viewCats('<?php echo $this->_tpl_vars['View']['group_id']; ?>
')"><?php echo $this->_tpl_vars['View']['created_time']; ?>
</a></td>
								<td align="left"><a href="#" onClick="Javascript:editCats('<?php echo $this->_tpl_vars['View']['group_id']; ?>
')"><i class="fa fa-edit"></i></a>
								&nbsp;&nbsp; &nbsp;&nbsp;<a href="#" onClick="Javascript:deleteCats('<?php echo $this->_tpl_vars['View']['group_id']; ?>
')"><i class="fa fa-trash"></i></a></td>
                      </tr>
						<?php endforeach; endif; unset($_from); ?>
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
  FormName		= document.GroupList;
  FormName.action= "user_group_list.php?group_id="+CatIdent;
  FormName.submit();
 }
 }
function editCats(CatIdent) {
   var usrgrp_id = btoa(CatIdent);
   FormName		= document.GroupList;
  FormName.action =\'user_group_edit.php?group_id=\'+usrgrp_id;          
  FormName.submit();
}
  function viewCats(CatIdent) {
  var usrgrp_id = btoa(CatIdent);  
  FormName		= document.GroupList;
  FormName.action =\'user_group_detail_view.php?group_id=\'+usrgrp_id;          
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
