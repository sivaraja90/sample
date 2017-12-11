<?php /* Smarty version 2.6.25, created on 2017-11-30 17:24:22
         compiled from quote_list.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "left.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
 <body class="hold-transition skin-blue sidebar-mini">
  <div class="content-wrapper">
	<section class="content-header">
        		<h4>
          <small><a href="quote_list.php"><i class="fa fa-list"> <label style="font-family:Arial, Helvetica, sans-serif">
			List Quotes</label></i></a></small>&ensp;&ensp;&ensp;
            <small><a href="quote_reg.php"><i class="fa fa-user-plus"> <label style="font-family:Arial, Helvetica, sans-serif">
			Create Quote</label></i></a></small>
		 </h4>

        </section>

        <!-- Main content -->
          <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box box-info">
                <div class="box-header">
                 <center><h3 class="box-title">Quote Lists</h3></center>
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
				<form name="quote_list" id="quote_list" method="post">
                  <table id="example1" class="table table-bordered table-striped ">
                    <thead>
                      <tr>
					  <th>Sl No</th>
                        <th>Quote Id</th>
						<th>Quote Status</th>
                        <th>Supplier Code</th>
                        <th>Supplier Company</th>
						<th>Contact Person</th>
						<!--<th>Print</th>-->
						<th>Mail</th>
						<?php $_from = $this->_tpl_vars['RList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['roles']):
?>
						<?php if ($this->_tpl_vars['roles']['role_name'] == 'Edit Quote'): ?>
						<th>Action</th>
						<?php endif; ?>
						<?php endforeach; endif; unset($_from); ?>
                      </tr>

                    </thead>
                    <tbody>
					<?php $_from = $this->_tpl_vars['ListView5']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['View']):
?>
					 <tr id="<?php echo $this->_tpl_vars['i']++; ?>
">
					 <td align="left"><a href="#" onClick="Javascript:viewCats('<?php echo $this->_tpl_vars['View']['quote_id']; ?>
')"><?php echo $this->_tpl_vars['i']; ?>
</a></td>
								<td align="left"><a href="#" onClick="Javascript:viewCats('<?php echo $this->_tpl_vars['View']['quote_id']; ?>
')"><?php echo $this->_tpl_vars['View']['quote_id']; ?>
</a></td>
								<td align="left"><a href="#" onClick="Javascript:viewCats('<?php echo $this->_tpl_vars['View']['quote_id']; ?>
')"><?php echo $this->_tpl_vars['View']['quote_status']; ?>
</a></td>
								<td align="left"><a href="#" onClick="Javascript:viewCats('<?php echo $this->_tpl_vars['View']['quote_id']; ?>
')"><?php echo $this->_tpl_vars['View']['supplier_code']; ?>
</a></td>
								<td align="left"><a href="#" onClick="Javascript:viewCats('<?php echo $this->_tpl_vars['View']['quote_id']; ?>
')"><?php echo $this->_tpl_vars['View']['supplier_company_name']; ?>
</a></td>
								<td align="left"><a href="#" onClick="Javascript:viewCats('<?php echo $this->_tpl_vars['View']['quote_id']; ?>
')"><?php echo $this->_tpl_vars['View']['contact_fname']; ?>
 &nbsp;&nbsp;<?php echo $this->_tpl_vars['View']['contact_lname']; ?>
</a></td>
								<!--<td align="left"><a href="#" onClick="Javascript:PrintCats('<?php echo $this->_tpl_vars['View']['quote_id']; ?>
','<?php echo $this->_tpl_vars['View']['supplier_code']; ?>
')" target="_blank"><i class="fa fa-print" ></i></a></td>-->
								<td align="left"><a href="#"  data-toggle="modal" data-target="#MailCats<?php echo $this->_tpl_vars['View']['quote_id']; ?>
" onClick="Popup();"><i class="fa fa-envelope"></i></a></td>
								
								<td align="left">
								<?php $_from = $this->_tpl_vars['RList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['roles']):
?>
						<?php if ($this->_tpl_vars['roles']['role_name'] == 'Edit Quote'): ?>
								&nbsp;&nbsp; &nbsp;&nbsp;<a href="#" onClick="Javascript:editCats('<?php echo $this->_tpl_vars['View']['quote_id']; ?>
')"><i class="fa fa-edit"></i></a><?php endif; ?>
								<?php if ($this->_tpl_vars['roles']['role_name'] == 'Delete Quote'): ?>
								&nbsp;&nbsp; &nbsp;&nbsp;<a href="#" onClick="Javascript:deleteCats('<?php echo $this->_tpl_vars['View']['quote_id']; ?>
')"><i class="fa fa-trash"></i></a>
								<?php endif; ?>
								<?php endforeach; endif; unset($_from); ?>
								</td> 
								
									<div class="modal fade" id="MailCats<?php echo $this->_tpl_vars['View']['quote_id']; ?>
" role="dialog" style="top: 10px; left: -280px;">
							<div class="modal-dialog">
							<!-- Modal content-->
							<div class="modal-content" style="width:1100px;">
							<div class="modal-header" style="background-color:#00CCFF;">
							<button type="button" class="close" data-dismiss="modal" onClick="window.location.reload();">&times;</button>
							<h4 class="modal-title">Send Mail</h4>
							</div>
							<iframe height="850px" width="100%" align="left" id="PoMail"  src="./quote_mail.php?quote_id=<?php echo $this->_tpl_vars['View']['quote_id']; ?>
&supplier_code=<?php echo $this->_tpl_vars['View']['supplier_code']; ?>
" style="border:1px;"></iframe>
							</div>
							</div>
							</div>
                    </tr>
					
              <?php endforeach; endif; unset($_from); ?>
                      </tr>
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
  FormName		= document.quote_list;
  FormName.action= "quote_list.php?quote_id="+CatIdent;
  FormName.submit();
 }
 }
function editCats(CatIdent) {
   var quot_id = btoa(CatIdent);
   FormName		= document.quote_list;
   FormName.action =\'quote_edit.php?quote_id=\'+quot_id;          
   FormName.submit();
}

  function viewCats(CatIdent) {
   var quot_id = btoa(CatIdent);     
  FormName		= document.quote_list;
  FormName.action =\'quote_detail_view.php?quote_id=\'+quot_id;          
  FormName.submit();

 }
 	  function Popup()
		{
    		document.getElementById(\'PoMail\').contentDocument.location.reload(true);
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
    </script>
	'; ?>

  </body>
