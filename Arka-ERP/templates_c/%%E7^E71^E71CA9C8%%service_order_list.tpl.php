<?php /* Smarty version 2.6.25, created on 2016-05-03 10:52:24
         compiled from service_order_list.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "left.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

 <body class="hold-transition skin-blue sidebar-mini">
  <div class="content-wrapper">
	<section class="content-header">
          <h4>
            <small><a href="service_quote_list.php"><i class="fa fa-list"> <label style="font-family:Arial, Helvetica, sans-serif">
			List Service Order</label></i></a></small>&ensp;&ensp;&ensp;
            <!--<small><a href="service_quote_reg.php"><i class="fa fa-user-plus">
			Create Service</i></a></small>-->
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
                  <center><h3 class="box-title">Service Order Lists</h3></center>
                </div><!-- /.box-header -->
                <div class="box-body">
				<form name="service_list" id="service_list" method="post">
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
					  <th><center>Sl No</center></th>
                        <th><center>Service Order No</center></th>
                        <th><center>Enquiry ID</center></th>
                        <th><center>Company Name</center></th>
						 <th><center>Area</center></th>
						<th><center>Mail ID</center></th>
						<th><center>Print</center></th>
						<th><center>Email</center></th>
						<th><center>Action</center></th>
                      </tr>

                    </thead>
                    <tbody>
					<?php $_from = $this->_tpl_vars['ListView']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['View']):
?>
                        <tr <?php echo $this->_tpl_vars['i']++; ?>
>
                        <td align="center"><a href="#" onClick="Javascript:viewCats('<?php echo $this->_tpl_vars['View']['service_order_no']; ?>
')"><?php echo $this->_tpl_vars['i']; ?>
</a></td>
                        <td align="center"><a href="#" onClick="Javascript:viewCats('<?php echo $this->_tpl_vars['View']['service_order_no']; ?>
')"><?php echo $this->_tpl_vars['View']['service_order_no']; ?>
</a></td>
                        <td align="center"><a href="#" onClick="Javascript:viewCats('<?php echo $this->_tpl_vars['View']['service_order_no']; ?>
')"><?php echo $this->_tpl_vars['View']['enquiry_id']; ?>
</a></td>
                        <td align="center"><a href="#" onClick="Javascript:viewCats('<?php echo $this->_tpl_vars['View']['service_order_no']; ?>
')"><?php echo $this->_tpl_vars['View']['company_name']; ?>
</a></td>
                        <td align="center"><a href="#" onClick="Javascript:viewCats('<?php echo $this->_tpl_vars['View']['service_order_no']; ?>
')"><?php echo $this->_tpl_vars['View']['area']; ?>
</a></td>
						<td align="center"><a href="#" onClick="Javascript:viewCats('<?php echo $this->_tpl_vars['View']['service_order_no']; ?>
')"><?php echo $this->_tpl_vars['View']['email_id']; ?>
</a></td>
						
						<td align="center"><a href="./service_order_print.php?enquiry_id=<?php echo $this->_tpl_vars['Contact']['enquiry_id']; ?>
& service_order_no=<?php echo $this->_tpl_vars['Contact']['service_order_no']; ?>
" target="_blank" onClick="Javascript:PrintCat('<?php echo $this->_tpl_vars['Contact']['enquiry_id']; ?>
','<?php echo $this->_tpl_vars['Contact']['service_order_no']; ?>
')"><i class="fa fa-print" ></i></a></td>
								<td align="center"><a href="#" data-toggle="modal" data-target="#ServiceMail<?php echo $this->_tpl_vars['Contact']['customer_id']; ?>
"><i class="fa fa-envelope"></i></a></td>

						<td class="center">&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" onClick="Javascript:editCats('<?php echo $this->_tpl_vars['View']['service_order_no']; ?>
')"><i class="fa fa-edit"></i></a>
								&nbsp;&nbsp; &nbsp;&nbsp;<a href="#" onClick="Javascript:deleteCats('<?php echo $this->_tpl_vars['View']['service_order_no']; ?>
')"><i class="fa fa-trash"></i></a></td> 
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
  FormName		= document.service_list;
  FormName.action= "service_quote_list.php?service_order_no="+CatIdent;
  FormName.submit();
 }
 }
function editCats(CatIdent) {
   FormName		= document.service_list;
  FormName.action =\'service_quote_edit.php?service_order_no=\'+CatIdent;          
  FormName.submit();
}


 
  function viewCats(CatIdent) {
    
  FormName		= document.service_list;
  FormName.action =\'service_quote_detail_view.php?service_order_no=\'+CatIdent;          
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