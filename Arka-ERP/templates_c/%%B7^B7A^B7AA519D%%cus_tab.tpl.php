<?php /* Smarty version 2.6.25, created on 2016-01-23 17:25:20
         compiled from cus_tab.tpl */ ?>
<?php echo $this->_tpl_vars['IncludeJS']; ?>

<?php echo $this->_tpl_vars['IncludeCSS']; ?>

<?php echo '
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
'; ?>



				<form name="ContactList" id="ContactList" method="post">
                  <table id="example1" class="table table-bordered table-striped" style="font-size:13px; font-family:'Times New Roman', Times, serif;">
									 
                    <thead>
                      <tr>
                        <th>Customer Name</th>
                        <th>Mobile No</th>
                        <th>Created By</th>
                        <th>Designation</th>
						<th>Email Id</th>
						<th>Created Date &amp;Time</th>
						<th>Modified Date &amp;Time</th>
						<th>Action</th>
						
                      </tr>

                    </thead>
                    <tbody>	
					<?php $_from = $this->_tpl_vars['ViewContact']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['Contact']):
?>
					 
					<tr>
								
								<td align="center"><a href="#" onClick="Javascript:viewCats('<?php echo $this->_tpl_vars['Contact']['sl_no']; ?>
')"><?php echo $this->_tpl_vars['Contact']['first_name']; ?>
<?php echo $this->_tpl_vars['Contact']['last_name']; ?>
</a></td>
								<td align="center"><a href="#" onClick="Javascript:viewCats('<?php echo $this->_tpl_vars['Contact']['sl_no']; ?>
')"><?php echo $this->_tpl_vars['Contact']['mobile_no']; ?>
</a></td>
								<td align="center"><a href="#" onClick="Javascript:viewCats('<?php echo $this->_tpl_vars['Contact']['sl_no']; ?>
')"><?php echo $this->_tpl_vars['Contact']['created_by']; ?>
</a></td>
								<td align="center"><a href="#" onClick="Javascript:viewCats('<?php echo $this->_tpl_vars['Contact']['sl_no']; ?>
')"><?php echo $this->_tpl_vars['Contact']['designation']; ?>
</a></td>
								<td align="center"><a href="#" onClick="Javascript:viewCats('<?php echo $this->_tpl_vars['Contact']['sl_no']; ?>
')"><?php echo $this->_tpl_vars['Contact']['mail_id']; ?>
</a></td>
								<td class="center"><a href="#" onClick="Javascript:viewCats('<?php echo $this->_tpl_vars['Contact']['sl_no']; ?>
')"><?php echo $this->_tpl_vars['Contact']['created_date']; ?>
&amp;<?php echo $this->_tpl_vars['Contact']['created_time']; ?>
</a></td>
								<td class="center"><a href="#" onClick="Javascript:viewCats('<?php echo $this->_tpl_vars['Contact']['sl_no']; ?>
')"><?php echo $this->_tpl_vars['Contact_Date']['0']['Date']; ?>
&amp;<?php echo $this->_tpl_vars['Contact_Time']['0']['Time']; ?>
</a></td>
								<td class="center">&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" data-toggle="modal" data-target="#Contact"><i class="fa fa-edit" ></i></a>
								&nbsp;&nbsp; &nbsp;&nbsp;<a href="#" onClick="Javascript:deleteCats('<?php echo $this->_tpl_vars['Contact']['sl_no']; ?>
')"><i class="fa fa-trash"></i></a></td>  
                    </tr>
					
					 
					  <?php endforeach; else: ?>
					<tr>
								<td height="20" colspan="12" align="center"><img src="images/warning.gif" border="0">&nbsp;No Records Found</td>
					</tr>
              <?php endif; unset($_from); ?>
					</tbody>
                    </tfoot>
                  </table>
				 </form>
     <!-- /.content-wrapper -->
            <!-- Control Sidebar -->
      <!-- /.control-sidebar -->
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
		   <div class="modal fade" id="Contact" role="dialog">
							<div class="modal-dialog">
							<!-- Modal content-->
							<div class="modal-content" style="width:700px;">
							<div class="modal-header" style="background-color:#00CCFF;">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title">Edit Contact</h4>
							</div>
									<iframe height="490px" width="100%" id="Contact"  src="./cus_edit.php?sl_no=<?php echo $this->_tpl_vars['Contact']['sl_no']; ?>
" style="border:1px;"></iframe>
							</div>
							</div>
							</div>
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
  FormName		= document.ContactList;
  FormName.action= "cus_tab.php?sl_no="+CatIdent;
  FormName.submit();
 }
 }
function editCats(CatIdent) {
    
  FormName		= document.ContactList;
  FormName.action =\'cus_edit.php?sl_no=\'+CatIdent;          
  FormName.submit();

 }
 function viewCats(CatIdent) {
    
  FormName		= document.ContactList;
  FormName.action =\'cus_detail_view.php?sl_no=\'+CatIdent;          
  FormName.submit();

 }
    </script>
	'; ?>

  </body>
