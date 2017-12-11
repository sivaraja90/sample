<?php /* Smarty version 2.6.25, created on 2016-07-30 17:56:38
         compiled from project_quote_list.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "left.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

 <body class="hold-transition skin-blue sidebar-mini">
  <div class="content-wrapper">
	<section class="content-header">
          <h4>
         <small><a href="project_quote_list.php"><i class="fa fa-list"> <label style="font-family:Arial, Helvetica, sans-serif"> 
		 List Project Order</i></a></small>&ensp;&ensp;&ensp;
        <!-- <small><a href="project_quote_reg.php"><i class="fa fa-user-plus">
		 Create Project Quote</i></a></small>-->
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
              <div class="box">
                <div class="box-header">
                 <center> <h3 class="box-title">Project Order Lists</h3></center>
                </div><!-- /.box-header -->
                <div class="box-body">
				<form name="project_list" id="project_list" method="post">
                  <table id="example1" class="table table-bordered table-striped ">
                    <thead>
                      <tr>
					  <th>Sl No</th>
                        <th>Project Qoute No</th>
						<th>Project Order No</th>
                        <th>Revised Version</th>
                        <th>Company Name</th>
                        <th>Mobile No</th>
						<th>Area</th>
						<th>Mail Id</th>
						<th>Print</th>
						<th>Email</th>
						<th>Action</th>
						
                      </tr>

                    </thead>
                    <tbody>
					
                    <?php $_from = $this->_tpl_vars['ListView']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['View']):
?>
                      <tr id="<?php echo $this->_tpl_vars['i']++; ?>
">
					  <td align="left"><a href="#" onClick="Javascript:viewCats('<?php echo $this->_tpl_vars['View']['project_order_no']; ?>
')"><?php echo $this->_tpl_vars['i']; ?>
</a></td>
						<td align="left"><a href="#" onClick="Javascript:viewCats('<?php echo $this->_tpl_vars['View']['project_order_no']; ?>
')"><?php echo $this->_tpl_vars['View']['project_quote_no']; ?>
</a></td>
						<td align="left"><a href="#" onClick="Javascript:viewCats('<?php echo $this->_tpl_vars['View']['project_order_no']; ?>
')"><?php echo $this->_tpl_vars['View']['project_order_no']; ?>
</a></td>
						<td align="left"><a href="#" onClick="Javascript:viewCats('<?php echo $this->_tpl_vars['View']['project_order_no']; ?>
')"><?php echo $this->_tpl_vars['View']['revised_version']; ?>
</a></td>
						<td align="left"><a href="#" onClick="Javascript:viewCats('<?php echo $this->_tpl_vars['View']['project_order_no']; ?>
')"><?php echo $this->_tpl_vars['View']['company_name']; ?>
</a></td>
						<td align="left"><a href="#" onClick="Javascript:viewCats('<?php echo $this->_tpl_vars['View']['project_order_no']; ?>
')"><?php echo $this->_tpl_vars['View']['mobile_no']; ?>
</a></td>
						<td align="left"><a href="#" onClick="Javascript:viewCats('<?php echo $this->_tpl_vars['View']['project_order_no']; ?>
')"><?php echo $this->_tpl_vars['View']['area']; ?>
</a></td>
						<td align="left"><a href="#" onClick="Javascript:viewCats('<?php echo $this->_tpl_vars['View']['project_order_no']; ?>
')"><?php echo $this->_tpl_vars['View']['email_id']; ?>
</a></td>
<td align="left"><a href="#" onClick="Javascript:PrintCats('<?php echo $this->_tpl_vars['View']['enquiry_id']; ?>
','<?php echo $this->_tpl_vars['View']['project_order_no']; ?>
','<?php echo $this->_tpl_vars['View']['revised_version']; ?>
')" target="_blank"><i class="fa fa-print"></i></a></td>
	    <td align="left"><a href="#" data-toggle="modal" data-target="#ProjectMail<?php echo $this->_tpl_vars['View']['revised_version']; ?>
" onClick="Popup();"><i class="fa fa-envelope"></i></a></td>
      <td align="lfet"><a href="#" onClick="Javascript:deleteCats('<?php echo $this->_tpl_vars['View']['project_order_no']; ?>
')"><i class="fa fa-trash"></i></a></td> 
					 </tr>
					 <div class="modal fade" id="ProjectMail<?php echo $this->_tpl_vars['View']['revised_version']; ?>
" role="dialog">
							<div class="modal-dialog">
							<!-- Modal content-->
							<div class="modal-content" style="width:700px;">
							<div class="modal-header" style="background-color:#00CCFF;">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title">Send Mail</h4>
							</div>
				<iframe align="left" height="850" width="1100" id="EditProject"  src=".//project_order_mail.php?revised_version=<?php echo $this->_tpl_vars['View']['revised_version']; ?>
&project_quote_no=<?php echo $this->_tpl_vars['View']['project_quote_no']; ?>
" style="border:1px;"></iframe>

							</div>
							</div>
							</div>
					<?php endforeach; endif; unset($_from); ?>
</tbody>
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
  FormName		= document.project_list;
  FormName.action= "project_quote_list.php?project_order_no="+CatIdent;
  FormName.submit();
 }
 }
function editCats(CatIdent) 
{
 
  FormName		= document.project_list;
  FormName.action ="project_order_edit.php?project_order_no="+CatIdent; 
  FormName.submit();
}
  
  function viewCats(CatIdent) {
  var proj_id = btoa(CatIdent);     
  FormName		= document.project_list;
  FormName.action ="project_quote_detail_view.php?project_order_no="+proj_id;          
  FormName.submit();

 }
 function PrintCats(CatIdent,CusIdent,FolIdent) {
  var enq_id = btoa(CatIdent);  
  var project_id = btoa(CusIdent); 
  var rev_id = btoa(FolIdent);   
  
 // alert(sales_id);
  FormName		= document.project_list;
  FormName.action ="project_order_print.php?enquiry_id="+enq_id+"&project_order_no="+project_id+"&revised_version="+rev_id;
  FormName.submit();

 }
    </script>
<script>
function Popup() 
{
	document.getElementById(\'ProjectMail\').contentDocument.location.reload(true);
} 
</script>

	'; ?>

  </body>
