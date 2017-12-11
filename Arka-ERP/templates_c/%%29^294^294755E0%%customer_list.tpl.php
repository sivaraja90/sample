<?php /* Smarty version 2.6.25, created on 2017-11-30 18:21:39
         compiled from customer_list.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "left.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
 <body class="hold-transition skin-blue sidebar-mini">
  <div class="content-wrapper">
	<section class="content-header">
          <h4>
             <?php $_from = $this->_tpl_vars['RList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['roles']):
?> 		
			<?php if ($this->_tpl_vars['roles']['role_name'] == 'Add Customer'): ?>
            <small><a href="customer_reg.php"><i class="fa fa-user-plus"> <label class="font" style="font-family:Arial, Helvetica, sans-serif">
Create Customer</label></i></a></small>
<?php endif; ?>

				<?php if ($this->_tpl_vars['roles']['role_name'] == 'List Customer'): ?>&ensp;
            <small class="active"><a href="customer_list.php"><i class="fa fa-list"> <label class="font" style="font-family:Arial, Helvetica, sans-serif">
List Customers</label></i></a></small>&ensp;&ensp;&ensp;
<?php endif; ?>
			<?php endforeach; endif; unset($_from); ?>
          </h4>
        </section>

        <!-- Main content -->
			<section class="content">
			<div class="row">
			<div class="col-xs-12">
			<div class="box box-info">
			<div class="box-header">
			<center><h3 class="box-title">Customer Lists</h3></center>
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
				<form name="customer_list" id="customer_list" method="post">
                  <table id="example1" class="table table-responsive table-striped">
                    <thead>
                      <tr>
					  <th>Sl No</th>
                        <th>Customer Id</th>
                        <th>Company Name</th>
                        <th>Mobile No</th>
                        <th>Enquiry Through</th>
						<th>Area</th>
						<th>Email Id</th>
						 <?php $_from = $this->_tpl_vars['RList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['roles']):
?>
						<?php if ($this->_tpl_vars['roles']['role_name'] == 'Edit Customer'): ?>
						<th>Action</th>
						<?php endif; ?>
				<?php endforeach; endif; unset($_from); ?>
                      </tr>
                    </thead>
                    <tbody>
					<?php $_from = $this->_tpl_vars['ListView']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['View']):
?>
						<?php if ($this->_tpl_vars['View']['status'] == '0'): ?>
			<tr id="<?php echo $this->_tpl_vars['i']++; ?>
">
			<td align="left"><a href="#" onClick="Javascript:viewCats('<?php echo $this->_tpl_vars['View']['customer_id']; ?>
')"><strike><?php echo $this->_tpl_vars['i']; ?>
</strike></a></td>
				<td align="left"><a href="#" onClick="Javascript:viewCats('<?php echo $this->_tpl_vars['View']['customer_id']; ?>
')"><strike><?php echo $this->_tpl_vars['View']['customer_id']; ?>
</strike></a></td>
				<td align="left"><a href="#" onClick="Javascript:viewCats('<?php echo $this->_tpl_vars['View']['customer_id']; ?>
')"><strike><?php echo $this->_tpl_vars['View']['company_name']; ?>
</strike></a></td>
				<td align="left"><a href="#" onClick="Javascript:viewCats('<?php echo $this->_tpl_vars['View']['customer_id']; ?>
')"><strike><?php echo $this->_tpl_vars['View']['mobile_no']; ?>
</strike></a></td>
				<td align="left"><a href="#" onClick="Javascript:viewCats('<?php echo $this->_tpl_vars['View']['customer_id']; ?>
')"><strike><?php echo $this->_tpl_vars['View']['enquiry_through']; ?>
</strike></a></td>
				<td align="left"><a href="#" onClick="Javascript:viewCats('<?php echo $this->_tpl_vars['View']['customer_id']; ?>
')"><strike><?php echo $this->_tpl_vars['View']['area']; ?>
</strike></a></td>
				<td align="left"><a href="#" onClick="Javascript:viewCats('<?php echo $this->_tpl_vars['View']['customer_id']; ?>
')"><strike><?php echo $this->_tpl_vars['View']['mail_id']; ?>
</strike></a></td>
				<td align="center">
					<?php $_from = $this->_tpl_vars['RList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['roles']):
?>
	      			 <?php if ($this->_tpl_vars['roles']['role_name'] == 'Edit Customer'): ?>
				&nbsp;&nbsp; &nbsp;&nbsp;<a href="#" onClick="Javascript:repeatCats('<?php echo $this->_tpl_vars['View']['customer_id']; ?>
','<?php echo $this->_tpl_vars['View']['sl_no']; ?>
')"><i class="fa fa-reply-all"></i></a>
										   <?php endif; ?>
					<?php endforeach; endif; unset($_from); ?>	 
					<?php $_from = $this->_tpl_vars['RList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['roles']):
?>
				   <?php if ($this->_tpl_vars['roles']['role_name'] == 'Delete Customer'): ?>

				&nbsp;&nbsp; &nbsp;&nbsp;<a href="#" onClick="Javascript:repeatCats('<?php echo $this->_tpl_vars['View']['customer_id']; ?>
','<?php echo $this->_tpl_vars['View']['sl_no']; ?>
')"><i class="fa fa-lock"></i></a>
				<?php endif; ?>
				<?php endforeach; endif; unset($_from); ?></td>
			</tr>
						<?php else: ?>
					 		<tr id="<?php echo $this->_tpl_vars['i']++; ?>
">
							<td align="left"><a href="#" onClick="Javascript:viewCats('<?php echo $this->_tpl_vars['View']['customer_id']; ?>
')"><?php echo $this->_tpl_vars['i']; ?>
</a></td>
								<td align="left"><a href="#" onClick="Javascript:viewCats('<?php echo $this->_tpl_vars['View']['customer_id']; ?>
')"><?php echo $this->_tpl_vars['View']['customer_id']; ?>
</a></td>
								<td align="left"><a href="#" onClick="Javascript:viewCats('<?php echo $this->_tpl_vars['View']['customer_id']; ?>
')"><?php echo $this->_tpl_vars['View']['company_name']; ?>
</a></td>
								<td align="left"><a href="#" onClick="Javascript:viewCats('<?php echo $this->_tpl_vars['View']['customer_id']; ?>
')"><?php echo $this->_tpl_vars['View']['mobile_no']; ?>
</a></td>
								<td align="left"><a href="#" onClick="Javascript:viewCats('<?php echo $this->_tpl_vars['View']['customer_id']; ?>
')"><?php echo $this->_tpl_vars['View']['enquiry_through']; ?>
</a></td>
								<td align="left"><a href="#" onClick="Javascript:viewCats('<?php echo $this->_tpl_vars['View']['customer_id']; ?>
')"><?php echo $this->_tpl_vars['View']['area']; ?>
</a></td>
								<td align="left"><a href="#" onClick="Javascript:viewCats('<?php echo $this->_tpl_vars['View']['customer_id']; ?>
')"><?php echo $this->_tpl_vars['View']['mail_id']; ?>
</a></td>
								
								<td align="center">
								<?php $_from = $this->_tpl_vars['RList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['roles']):
?>
								<?php if ($this->_tpl_vars['roles']['role_name'] == 'Edit Customer'): ?>
								<a href="#" onClick="Javascript:editCats('<?php echo $this->_tpl_vars['View']['customer_id']; ?>
')"><i class="fa fa-edit"></i></a>&nbsp;&nbsp; &nbsp;&nbsp;
								<?php endif; ?>
								<?php endforeach; endif; unset($_from); ?>	
								<?php $_from = $this->_tpl_vars['RList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['roles']):
?>
								<?php if ($this->_tpl_vars['roles']['role_name'] == 'Delete Customer'): ?>
								<a href="#" onClick="Javascript:deleteCats('<?php echo $this->_tpl_vars['View']['customer_id']; ?>
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
      </div>
      <div class="control-sidebar-bg"></div>
<?php echo '

    <script>
      $(function () {
       
        $(\'#example1\').DataTable({
          "paging": true,
          "lengthChange": true,
          "searching": true,
          "ordering": true,
          "info": true,
          "autoWidth": false,
        "scrollX": true
        });
      });
function deleteCats(CatIdent){
  if(confirm("Are you sure to Delete this Content?")){
  FormName		= document.customer_list;
  FormName.action= "customer_list.php?customer_id="+CatIdent;
  FormName.submit();
 }
 }
function repeatCats(x,y){
  if(confirm("Are you sure to Retrive this Content?")){
  FormName		= document.customer_list;
  FormName.action= "customer_list.php?customer_id="+x+"&retrive="+y;
  FormName.submit();
 }
 }
function editCats(CatIdent) {
   var cid = btoa(CatIdent);
   FormName		= document.customer_list;
   FormName.action =\'customer_edit.php?customer_id=\'+cid;
   FormName.submit();
}
function viewCats(CatIdent) {
  var cid = btoa(CatIdent);
  FormName		= document.customer_list;
  FormName.action =\'customer_detail_view.php?customer_id=\'+cid;
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