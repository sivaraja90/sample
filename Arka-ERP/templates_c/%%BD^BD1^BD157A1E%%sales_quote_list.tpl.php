<?php /* Smarty version 2.6.25, created on 2017-11-29 17:09:30
         compiled from sales_quote_list.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "left.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
 <body class="hold-transition skin-blue sidebar-mini">
  <div class="content-wrapper">
	<section class="content-header">
          <h4>
         <small  class="active"><a href="sales_order_list.php"><i class="fa fa-list"> <label style="font-family:Arial, Helvetica, sans-serif">
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
				<body onLoad="doOnLoad();">
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
						 <?php $_from = $this->_tpl_vars['RList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['roles']):
?>
						<?php if ($this->_tpl_vars['roles']['role_name'] == 'Delete Sales'): ?>
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
					  <input type="hidden" value="<?php echo $this->_tpl_vars['View']['customer_id']; ?>
"/>
					  <input type="hidden" value="<?php echo $this->_tpl_vars['View']['sales_quote_no']; ?>
"/>
					  <input type="hidden" value="<?php echo $this->_tpl_vars['View']['arka_group']; ?>
"/>
					  <input type="hidden" value="<?php echo $this->_tpl_vars['View']['enquiry_id']; ?>
"/>
					  			<td align="left"><a href="#" onClick="Javascript:viewCats('<?php echo $this->_tpl_vars['View']['sales_order_no']; ?>
')"><?php echo $this->_tpl_vars['i']; ?>
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
 <td align="center"><a href="#" data-toggle="popover" data-content="<a href='reload.php?sales_order_no=<?php echo $this->_tpl_vars['View']['sales_order_no']; ?>
&amp;revised_version=<?php echo $this->_tpl_vars['View']['revised_version']; ?>
&enquiry_id=<?php echo $this->_tpl_vars['View']['enquiry_id']; ?>
&PPage=Original' target='_blank'>Original Print</a> <br><a href='reload.php?sales_order_no=<?php echo $this->_tpl_vars['View']['sales_order_no']; ?>
&amp;revised_version=<?php echo $this->_tpl_vars['View']['revised_version']; ?>
&enquiry_id=<?php echo $this->_tpl_vars['View']['enquiry_id']; ?>
&PPage=Duplicate' target='_blank'>Duplicate Print</a><br><a href='reload.php?sales_order_no=<?php echo $this->_tpl_vars['View']['sales_order_no']; ?>
&amp;revised_version=<?php echo $this->_tpl_vars['View']['revised_version']; ?>
&enquiry_id=<?php echo $this->_tpl_vars['View']['enquiry_id']; ?>
&PPage=Triplicate' target='_blank'>Triplicate Print</a><br><a href='reload.php?sales_order_no=<?php echo $this->_tpl_vars['View']['sales_order_no']; ?>
&amp;revised_version=<?php echo $this->_tpl_vars['View']['revised_version']; ?>
&enquiry_id=<?php echo $this->_tpl_vars['View']['enquiry_id']; ?>
&PPage=Quadruplicate' target='_blank'>Quadruplicate Print</a>"
  data-html="true"><i class="fa fa-print"></i></a></td>
								<td align="center"><a href="#" data-toggle="modal" data-target="#SalesMail<?php echo $this->_tpl_vars['View']['sales_quote_revise_no']; ?>
" onClick="Popup();"><i class="fa fa-envelope"></i></a></td>
						<?php $_from = $this->_tpl_vars['RList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['roles']):
?>
					   <?php if ($this->_tpl_vars['roles']['role_name'] == 'Delete Sales'): ?>
								
								<td align="left">&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" onClick="Javascript:deleteCats('<?php echo $this->_tpl_vars['View']['sales_order_no']; ?>
')"><i class="fa fa-trash"></i></a></td>
						<?php endif; ?>
						<?php endforeach; endif; unset($_from); ?>
						</tr>
						    <div class="modal fade" id="SalesMail<?php echo $this->_tpl_vars['View']['sales_quote_revise_no']; ?>
" role="dialog" style="top: 10px; left: -280px;">
							<div class="modal-dialog">
							<!-- Modal content-->
							<div class="modal-content" style="width:1100px;">
							<div class="modal-header" style="background-color:#00CCFF;">
							<button type="button" class="close" data-dismiss="modal" onClick="window.location.reload();" >&times;</button>
							<h4 class="modal-title">Send Mail</h4>
							</div>
								<iframe align="left" width="1100" height="850" id="SalesMail"  src="./sales_order_mail.php?revised_version=<?php echo $this->_tpl_vars['View']['sales_quote_revise_no']; ?>
&sales_order_no=<?php echo $this->_tpl_vars['View']['sales_order_no']; ?>
&sales_quote_no=<?php echo $this->_tpl_vars['View']['sales_quote_no']; ?>
" style="border:1px;"></iframe>
							</div>
							</div>
							</div>
					    <?php endforeach; endif; unset($_from); ?>

                    </tfoot>
                  </table>
				  </form>
				  </body>
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
.bs-example{
    	margin: 150px 50px;
    }
</style>

<script type="text/javascript">
$(document).ready(function(){
    $(\'[data-toggle="popover"]\').popover({
        placement : \'right\'
        
    });
});
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
       var sale_id = btoa(CatIdent);
      if(confirm("Are you sure to Delete this Content?")){
      FormName		= document.sales_quote_list;
      FormName.action= "sales_quote_list.php?sales_order_no="+sale_id;
      FormName.submit();
 }
 }

  function viewCats(CatIdent) {

  var sales_id = btoa(CatIdent);
  FormName		= document.sales_quote_list;
  FormName.action ="sales_detail_view.php?sales_order_no="+sales_id;
  FormName.submit();

 }

 function Popup()
		{
    		document.getElementById(\'SalesMail\').contentDocument.location.reload(true);
		}
    </script>

'; ?>

  </body>