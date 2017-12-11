<?php /* Smarty version 2.6.25, created on 2017-11-30 18:14:43
         compiled from product_list.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "left.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
 <body class="hold-transition skin-blue sidebar-mini">
  <div class="content-wrapper">
	<section class="content-header">
          <h4>
		     <small><a href="product_list.php"><i class="fa fa-list"> <label style="font-family:Arial, Helvetica, sans-serif">
List Products</label></i></a></small>&ensp;&ensp;&ensp;
            <small><a href="product_reg.php"><i class="fa fa-user-plus"> <label style="font-family:Arial, Helvetica, sans-serif">
Create Product</label></i></a></small>
   		 </h4>
         </section>
        <!-- Main content -->
          <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box box-info">
                <div class="box-header">
                 <center><h3 class="box-title">Product  Lists</h3></center>
                </div><!-- /.box-header -->
                <div class="box-body">
				<form name="product_list" id="product_list" method="post">
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
                  <table id="example1" class="table table-bordered table-striped ">
                    <thead>
                      <tr>
					  <th>Sl No</th>
                        <th>Item Code</th>
						<th>Item Name</th>
<!--                        <th>Baan Company</th>
-->                     <th>Consumer Basic</th>
						<th>WH</th>
						<th>ED</th>
						<th>Category Code</th>
						<th>Price Date</th>
						 <?php $_from = $this->_tpl_vars['RList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['roles']):
?>
						<?php if ($this->_tpl_vars['roles']['role_name'] == 'Edit Product'): ?>
						<th>Action</th>
						<?php endif; ?>
						<?php endforeach; endif; unset($_from); ?>
                      </tr>
                    </thead>
                    <tbody>
                     <?php $_from = $this->_tpl_vars['ListPro']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['View']):
?>
					 <tr id="<?php echo $this->_tpl_vars['i']++; ?>
">
					            <td align="left"><a href="#" onClick="Javascript:viewCats('<?php echo $this->_tpl_vars['View']['item_code']; ?>
')"><?php echo $this->_tpl_vars['i']; ?>
</a></td> 
								<td align="left"><a href="#" onClick="Javascript:viewCats('<?php echo $this->_tpl_vars['View']['item_code']; ?>
')"><?php echo $this->_tpl_vars['View']['item_code']; ?>
</a></td>
								<td align="left"><a href="#" onClick="Javascript:viewCats('<?php echo $this->_tpl_vars['View']['item_code']; ?>
')"><?php echo $this->_tpl_vars['View']['item_name']; ?>
</a></td>
<!--								<td align="left"><a href="#" onClick="Javascript:viewCats('<?php echo $this->_tpl_vars['View']['item_code']; ?>
')"><?php echo $this->_tpl_vars['View']['baan_company']; ?>
</a></td>
-->								<td align="left"><a href="#" onClick="Javascript:viewCats('<?php echo $this->_tpl_vars['View']['item_code']; ?>
')"><?php echo $this->_tpl_vars['View']['consumer_basic']; ?>
</a></td>	
						 		<td align="left"><a href="#" onClick="Javascript:viewCats('<?php echo $this->_tpl_vars['View']['item_code']; ?>
')"><?php echo $this->_tpl_vars['View']['ware_house']; ?>
</a></td>
								<td align="left"><a href="#" onClick="Javascript:viewCats('<?php echo $this->_tpl_vars['View']['item_code']; ?>
')"><?php echo $this->_tpl_vars['View']['ed']; ?>
</a></td>
								<td align="left"><a href="#" onClick="Javascript:viewCats('<?php echo $this->_tpl_vars['View']['item_code']; ?>
')"><?php echo $this->_tpl_vars['View']['item_category_code']; ?>
</a></td>
								<td align="left"><a href="#" onClick="Javascript:viewCats('<?php echo $this->_tpl_vars['View']['item_code']; ?>
')"><?php echo $this->_tpl_vars['View']['price_date']; ?>
</a></td>
					<?php $_from = $this->_tpl_vars['RList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['roles']):
?>
	      			 <?php if ($this->_tpl_vars['roles']['role_name'] == 'Edit Product'): ?>
    							<td class="center"><a href="#" onClick="Javascript:editCats('<?php echo $this->_tpl_vars['View']['item_code']; ?>
')"><i class="fa fa-edit"></i></a>
					<?php endif; ?>
					<?php endforeach; endif; unset($_from); ?>	 
					<?php $_from = $this->_tpl_vars['RList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['roles']):
?>
				   <?php if ($this->_tpl_vars['roles']['role_name'] == 'Delete Product'): ?>
								&nbsp;&nbsp; &nbsp;&nbsp;
								<a href="#" onClick="Javascript:deleteCats('<?php echo $this->_tpl_vars['View']['item_code']; ?>
')"><i class="fa fa-trash"></i></a></td>
												<?php endif; ?>
				<?php endforeach; endif; unset($_from); ?></td>
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
	FormName		= document.product_list;
	FormName.action= "product_list.php?item_code="+CatIdent;
	FormName.submit();
	}
}
function editCats(CatIdent) {
	var prod_id = btoa(CatIdent); 
	FormName		= document.product_list;
	FormName.action =\'product_edit.php?item_code=\'+prod_id;          
	FormName.submit();
}
function viewCats(CatIdent) {
	var prod_id = btoa(CatIdent); 
	FormName		= document.product_list;
	FormName.action =\'product_detail_view.php?item_code=\'+prod_id;          
	FormName.submit();
}
    </script>
	'; ?>

  </body>