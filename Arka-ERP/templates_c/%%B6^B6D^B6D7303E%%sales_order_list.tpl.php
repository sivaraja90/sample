<?php /* Smarty version 2.6.25, created on 2016-05-24 20:21:51
         compiled from sales_order_list.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "left.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
 <body class="hold-transition skin-blue sidebar-mini">
  <div class="content-wrapper">
	<section class="content-header">
          <h4>
         <small  class="active"><a href="sales_quote_list.php"><i class="fa fa-list"> <label style="font-family:Arial, Helvetica, sans-serif">
		 List Sales Order</label></i></a></small>&ensp;&ensp;&ensp;
         </h4>
         </section>

        <!-- Main content -->
          <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                 <center> <h3 class="box-title">Sales Order Lists</h3></center>
                </div><!-- /.box-header -->
                <div class="box-body">
				<form name="sales_quote_list" id="sales_quote_list" method="post">
                  <table id="example1" class="table table-bordered table-striped ">
                    <thead>
                      <tr>
					    <th>Serial No</th>
                        <th>Sales order No</th>
                        <th>Revised Version</th>
                        <th>Sales Quote No</th>
						<th>Contact Person</th>
                        <th>Mobile No</th>
						<th>Area</th>
						<th>Print</th>
						<th>Email</th>
						<th>Action</th>
						
                      </tr>
                    </thead>
                    <tbody>
					
                    <?php $_from = $this->_tpl_vars['ListView']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['View']):
?>
                      <tr>
					  			<td align="left"><a href="#" onClick="Javascript:viewCats('<?php echo $this->_tpl_vars['View']['sl_no']; ?>
')"><?php echo $this->_tpl_vars['View']['sl_no']; ?>
</a></td>
					            <td align="left"><a href="#" onClick="Javascript:viewCats('<?php echo $this->_tpl_vars['View']['sales_order_no']; ?>
')"><?php echo $this->_tpl_vars['View']['sales_order_no']; ?>
</a></td>
								<td align="left"><a href="#" onClick="Javascript:viewCats('<?php echo $this->_tpl_vars['View']['sales_order_no']; ?>
')"><?php echo $this->_tpl_vars['View']['sales_quote_revise_no']; ?>
</a></td>
								<td align="left"><a href="#" onClick="Javascript:viewCats('<?php echo $this->_tpl_vars['View']['sales_order_no']; ?>
')"><?php echo $this->_tpl_vars['View']['sales_quote_no']; ?>
</a></td>
								<td align="left"><a href="#" onClick="Javascript:viewCats('<?php echo $this->_tpl_vars['View']['sales_order_no']; ?>
')"><?php echo $this->_tpl_vars['View']['customer_name']; ?>
</a></td>
								<td align="left"><a href="#" onClick="Javascript:viewCats('<?php echo $this->_tpl_vars['View']['sales_order_no']; ?>
')"><?php echo $this->_tpl_vars['View']['mobile_no']; ?>
</a></td>
								<td align="left"><a href="#" onClick="Javascript:viewCats('<?php echo $this->_tpl_vars['View']['sales_order_no']; ?>
')"><?php echo $this->_tpl_vars['View']['area']; ?>
</a></td>
								<td align="left"><a href="#" onClick="Javascript:deleteCats('<?php echo $this->_tpl_vars['View']['sales_order_no']; ?>
')"><i class="fa fa-trash"></i></a></td>
								<td align="center"><a href="./test.php" target="_blank">Test</a></td>
								 <td align="center"><a href="sales_print.php?enquiry_id=<?php echo $this->_tpl_vars['View']['enquiry_id']; ?>
&sales_order_no=<?php echo $this->_tpl_vars['View']['sales_order_no']; ?>
&enquiry_type=<?php echo $this->_tpl_vars['ListView']['0']['enquiry_type']; ?>
&revised_version=<?php echo $this->_tpl_vars['View']['sales_quote_revise_no']; ?>
" target="_blank"><i class="fa fa-print"></i></a></td>
								<td align="center"><a href="#" data-toggle="modal" data-target="#SalesMail('<?php echo $this->_tpl_vars['View']['customer_id']; ?>
','<?php echo $this->_tpl_vars['View']['sales_quote_revise_no']; ?>
')"><i class="fa fa-envelope"></i></a></td>
						                      </tr>
					 
					  
					    <?php endforeach; endif; unset($_from); ?>

                    </tfoot>
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
  FormName		= document.sales_quote_list;
  FormName.action= "sales_quote_list.php?sales_order_no="+CatIdent;
  FormName.submit();
 }
 }
function editCats(CatIdent) 
{
   FormName		= document.sales_quote_list;
    FormName.action ="sales_quote_edit.php?sales_order_no="+CatIdent; 
  FormName.submit();
}
  
  function viewCats(CatIdent) {
    var order_id = btoa(CatIdent);
  FormName		= document.sales_quote_list;
  FormName.action ="sales_detail_view.php?sales_order_no="+order_id;          
  FormName.submit();

 }
    </script>
	'; ?>

  </body>
