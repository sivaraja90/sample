<?php /* Smarty version 2.6.25, created on 2017-03-02 18:40:22
         compiled from po_list.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "left.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
 <body class="hold-transition skin-blue sidebar-mini">
  <div class="content-wrapper">
	<section class="content-header">
		<h4>
        <small><a href="po_list.php"><i class="fa fa-list"> <label style="font-family:Arial, Helvetica, sans-serif">
		List PO</label></i></a></small>&ensp;&ensp;&ensp;
		<small><a href="po_reg.php"><i class="fa fa-user-plus"> <label style="font-family:Arial, Helvetica, sans-serif">
		Create PO</label></i></a></small>
		</h4>

        </section>

        <!-- Main content -->
          <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box box-info">
                <div class="box-header">
                  <center><h3 class="box-title">Po Lists</h3></center>
                </div>

				<!-- /.box-header -->
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
				<form name="po_list" id="po_list" method="post">
					  <table id="example1" class="table table-bordered table-striped ">
                    <thead>
                      <tr>
					  <th>Sl No</th>
                        <th>PO No</th>
						<th>Contact Person</th>
                        <th>Company Name</th>
						<th>Supplier Code</th>
						<th>PO Status</th>
						<th>Print</th>
						<th>Mail</th>
						<?php $_from = $this->_tpl_vars['RList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['roles']):
?>
						<?php if ($this->_tpl_vars['roles']['role_name'] == 'Edit Po'): ?>
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
					 <td align="left"><a href="#" onClick="Javascript:viewCats('<?php echo $this->_tpl_vars['View']['po_no']; ?>
')"><?php echo $this->_tpl_vars['i']; ?>
</a></td>
								<td align="left"><a href="#" onClick="Javascript:viewCats('<?php echo $this->_tpl_vars['View']['po_no']; ?>
')"><?php echo $this->_tpl_vars['View']['po_no']; ?>
</a></td>
								<td align="left"><a href="#" onClick="Javascript:viewCats('<?php echo $this->_tpl_vars['View']['po_no']; ?>
')"><?php echo $this->_tpl_vars['View']['salutation']; ?>
&nbsp;<?php echo $this->_tpl_vars['View']['contact_person']; ?>
</a></td>
								<td align="left"><a href="#" onClick="Javascript:viewCats('<?php echo $this->_tpl_vars['View']['po_no']; ?>
')"><?php echo $this->_tpl_vars['View']['supplier_company_name']; ?>
</a></td>
								<td align="left"><a href="#" onClick="Javascript:viewCats('<?php echo $this->_tpl_vars['View']['po_no']; ?>
')"><?php echo $this->_tpl_vars['View']['supplier_code']; ?>
</a></td>
								<td align="left"><a href="#" onClick="Javascript:viewCats('<?php echo $this->_tpl_vars['View']['po_no']; ?>
')"><?php echo $this->_tpl_vars['View']['po_status']; ?>
</a></td>
   								<td align="left"><a href="#" onClick="Javascript:PrintCats('<?php echo $this->_tpl_vars['View']['po_no']; ?>
','<?php echo $this->_tpl_vars['View']['supplier_code']; ?>
')" target="_blank"><i class="fa fa-print" ></i></a></td>
								<td align="left"><a href="#"  data-toggle="modal" data-target="#MailCats<?php echo $this->_tpl_vars['View']['po_no']; ?>
" onClick="Popup();"><i class="fa fa-envelope"></i></a></td>
								
								<td align="left">
								<?php $_from = $this->_tpl_vars['RList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['roles']):
?>
						<?php if ($this->_tpl_vars['roles']['role_name'] == 'Edit Po'): ?>
								&nbsp;&nbsp; &nbsp;&nbsp;<a href="#" onClick="Javascript:editCats('<?php echo $this->_tpl_vars['View']['po_no']; ?>
')"><i class="fa fa-edit"></i></a><?php endif; ?>
								<?php if ($this->_tpl_vars['roles']['role_name'] == 'Delete Po'): ?>
								&nbsp;&nbsp; &nbsp;&nbsp;<a href="#" onClick="Javascript:deleteCats('<?php echo $this->_tpl_vars['View']['po_no']; ?>
')"><i class="fa fa-trash"></i></a>
								<?php endif; ?>
								<?php endforeach; endif; unset($_from); ?>
								</td> 
                               </tr>
							<div class="modal fade" id="MailCats<?php echo $this->_tpl_vars['View']['po_no']; ?>
" role="dialog" style="top: 10px; left: -280px;">
							<div class="modal-dialog">
							<!-- Modal content-->
							<div class="modal-content" style="width:1100px;">
							<div class="modal-header" style="background-color:#00CCFF;">
							<button type="button" class="close" data-dismiss="modal" onClick="window.location.reload();">&times;</button>
							<h4 class="modal-title">Send Mail</h4>
							</div>
							<iframe height="850px" width="100%" align="left" id="PoMail"  src="./po_mail.php?po_no=<?php echo $this->_tpl_vars['View']['po_no']; ?>
&supplier_code=<?php echo $this->_tpl_vars['View']['supplier_code']; ?>
" style="border:1px;"></iframe>
							</div>
							</div>
							</div>
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
  FormName		= document.po_list;
  FormName.action= "po_list.php?po_no="+CatIdent;
  FormName.submit();
 }
 }
function editCats(CatIdent) {
   var po_id = btoa(CatIdent);  
   FormName		= document.po_list;
  FormName.action =\'po_edit.php?po_no=\'+po_id;          
  FormName.submit();
}
function MailCats(PoIdent,subCode) {
  
   FormName		= document.po_list;
  FormName.action =\'po_mail.php?po_no=\'+PoIdent+\'&vendor_id=\'+subCode;          
  FormName.submit();
}
function PrintCats(PoIdent,subCode) {
   var po_id = btoa(PoIdent);  
   var v_id = btoa(subCode);  
   FormName		= document.po_list;
  FormName.action =\'po_print.php?po_no=\'+po_id+\'&vendor_id=\'+v_id;          
  FormName.submit();
}
	  function Popup()
		{
    		document.getElementById(\'PoMail\').contentDocument.location.reload(true);
		} 
  function viewCats(CatIdent) {
	 var po_id = btoa(CatIdent);    
  	 FormName		= document.po_list;
  	 FormName.action =\'po_detail_view.php?po_no=\'+po_id;          
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
