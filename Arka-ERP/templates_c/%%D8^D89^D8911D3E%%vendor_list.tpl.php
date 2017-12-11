<?php /* Smarty version 2.6.25, created on 2017-03-02 18:44:56
         compiled from vendor_list.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "left.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
 <body class="hold-transition skin-blue sidebar-mini">
  <div class="content-wrapper">
	<section class="content-header">
         	<h4>
         <small><a href="vendor_list.php"><i class="fa fa-list"> <label style="font-family:Arial, Helvetica, sans-serif"> List Vendors</label></i></a></small>&ensp;&ensp;&ensp;
         <small><a href="vendor_reg.php"><i class="fa fa-user-plus"> <label style="font-family:Arial, Helvetica, sans-serif"> Create Vendor</label></i></a></small>
		 </h4>
        </section>

        <!-- Main content -->
          <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box box-info">
                <div class="box-header">
                  <center><h3 class="box-title">Vendors Lists</h3></center>
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
				<form name="vendor_list" id="vendor_list" method="post">
                  <table id="example1" class="table table-bordered table-striped ">
                    <thead>
                      <tr>
					  <th>Sl No</th>
                        <th>Vendors Id</th>
                        <th>Vendors Company Name</th>
                        <th>Area</th>
                        <th>City</th>
						<th>Phone No</th>
						<th>Mobile No</th>
						<th>Email Id</th>
						<th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
					<?php $_from = $this->_tpl_vars['ListView']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['View']):
?>
					<?php if ($this->_tpl_vars['View']['status'] == '0'): ?> 
                      <tr id="<?php echo $this->_tpl_vars['i']++; ?>
">
					  <td align="left"><a href="#" onClick="Javascript:viewCats('<?php echo $this->_tpl_vars['View']['vendor_id']; ?>
')"><strike><?php echo $this->_tpl_vars['i']; ?>
</strike></a></td>
					            <td align="left"><a href="#" onClick="Javascript:viewCats('<?php echo $this->_tpl_vars['View']['vendor_id']; ?>
')"><strike><?php echo $this->_tpl_vars['View']['vendor_id']; ?>
</strike></a></td>
								<td align="left"><a href="#" onClick="Javascript:viewCats('<?php echo $this->_tpl_vars['View']['vendor_id']; ?>
')"><strike><?php echo $this->_tpl_vars['View']['vendor_company_name']; ?>
</strike></a></td>
								<td align="left"><a href="#" onClick="Javascript:viewCats('<?php echo $this->_tpl_vars['View']['vendor_id']; ?>
')"><strike><?php echo $this->_tpl_vars['View']['area']; ?>
</strike></a></td>
								<td align="left"><a href="#" onClick="Javascript:viewCats('<?php echo $this->_tpl_vars['View']['vendor_id']; ?>
')"><strike><?php echo $this->_tpl_vars['View']['city']; ?>
</strike></a></td>
					<td align="left"><a href="#" onClick="Javascript:viewCats('<?php echo $this->_tpl_vars['View']['vendor_id']; ?>
')"><strike><?php echo $this->_tpl_vars['View']['area_code']; ?>
<?php echo $this->_tpl_vars['View']['phone_no']; ?>
<?php echo $this->_tpl_vars['View']['extension']; ?>
</strike></a></td>
								<td align="left"><a href="#" onClick="Javascript:viewCats('<?php echo $this->_tpl_vars['View']['vendor_id']; ?>
')"><strike><?php echo $this->_tpl_vars['View']['mobile_no']; ?>
</strike></a></td>
								<td align="left"><a href="#" onClick="Javascript:viewCats('<?php echo $this->_tpl_vars['View']['vendor_id']; ?>
')"><strike><?php echo $this->_tpl_vars['View']['mail_id']; ?>
</strike></a></td>
								
								<td class="left">
								<?php $_from = $this->_tpl_vars['RList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['roles']):
?>
								<?php if ($this->_tpl_vars['roles']['role_name'] == 'Delete Vendor'): ?>
								&nbsp;&nbsp; &nbsp;&nbsp;<a href="#" onClick="Javascript:repeatCats('<?php echo $this->_tpl_vars['View']['vendor_id']; ?>
','<?php echo $this->_tpl_vars['View']['sl_no']; ?>
')"><i class="fa fa-reply-all"></i></a>
								<?php endif; ?>
								<?php endforeach; endif; unset($_from); ?></td> 
                      </tr>
					  <?php else: ?>
					  <tr id="<?php echo $this->_tpl_vars['i']++; ?>
">
					  <td align="left"><a href="#" onClick="Javascript:viewCats('<?php echo $this->_tpl_vars['View']['vendor_id']; ?>
')"><?php echo $this->_tpl_vars['i']; ?>
</a></td>
					            <td align="left"><a href="#" onClick="Javascript:viewCats('<?php echo $this->_tpl_vars['View']['vendor_id']; ?>
')"><?php echo $this->_tpl_vars['View']['vendor_id']; ?>
</a></td>
								<td align="left"><a href="#" onClick="Javascript:viewCats('<?php echo $this->_tpl_vars['View']['vendor_id']; ?>
')"><?php echo $this->_tpl_vars['View']['vendor_company_name']; ?>
</a></td>
								<td align="left"><a href="#" onClick="Javascript:viewCats('<?php echo $this->_tpl_vars['View']['vendor_id']; ?>
')"><?php echo $this->_tpl_vars['View']['area']; ?>
</a></td>
								<td align="left"><a href="#" onClick="Javascript:viewCats('<?php echo $this->_tpl_vars['View']['vendor_id']; ?>
')"><?php echo $this->_tpl_vars['View']['city']; ?>
</a></td>
							    <td align="left"><a href="#" onClick="Javascript:viewCats('<?php echo $this->_tpl_vars['View']['vendor_id']; ?>
')"><?php echo $this->_tpl_vars['View']['area_code']; ?>
-<?php echo $this->_tpl_vars['View']['phone_no']; ?>
-<?php echo $this->_tpl_vars['View']['extension']; ?>
</a></td>
								<td align="left"><a href="#" onClick="Javascript:viewCats('<?php echo $this->_tpl_vars['View']['vendor_id']; ?>
')"><?php echo $this->_tpl_vars['View']['mobile_no']; ?>
</a></td>
								<td align="left"><a href="#" onClick="Javascript:viewCats('<?php echo $this->_tpl_vars['View']['vendor_id']; ?>
')"><?php echo $this->_tpl_vars['View']['mail_id']; ?>
</a></td>
								
								<td align="left">
								
								<?php $_from = $this->_tpl_vars['RList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['roles']):
?>
						<?php if ($this->_tpl_vars['roles']['role_name'] == 'Edit Vendor'): ?>
								&nbsp;&nbsp; &nbsp;&nbsp;<a href="#" onClick="Javascript:editCats('<?php echo $this->_tpl_vars['View']['vendor_id']; ?>
')"><i class="fa fa-edit"></i></a><?php endif; ?>
								<?php if ($this->_tpl_vars['roles']['role_name'] == 'Delete Vendor'): ?>
								&nbsp;&nbsp; &nbsp;&nbsp;<a href="#" onClick="Javascript:deleteCats('<?php echo $this->_tpl_vars['View']['vendor_id']; ?>
')"><i class="fa fa-trash"></i></a>
								<?php endif; ?>
								<?php endforeach; endif; unset($_from); ?>
								</td> 
                      </tr>
						<?php endif; ?>
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
  FormName		= document.vendor_list;
  FormName.action= "vendor_list.php?vendor_id="+CatIdent;
  FormName.submit();
 }
 }
  function repeatCats(y,z){
  if(confirm("Are you sure to Retrive this Content?")){
  FormName		= document.vendor_list;
  FormName.action= "vendor_list.php?vendor_id="+y+"&retrive="+z;
  FormName.submit();
 }
 }
  
function editCats(CatIdent) 
{
   var ven_id = btoa(CatIdent);
   FormName		= document.vendor_list;
    FormName.action ="vendor_edit.php?vendor_id="+ven_id; 
  FormName.submit();
}
  
  function viewCats(CatIdent) {
  var ven_id = btoa(CatIdent);    
  FormName		= document.vendor_list;
  FormName.action ="vendor_detail_view.php?vendor_id="+ven_id;          
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
