<?php /* Smarty version 2.6.25, created on 2016-01-22 15:04:07
         compiled from cus_tab3.tpl */ ?>
<?php echo $this->_tpl_vars['IncludeJS']; ?>

<?php echo $this->_tpl_vars['IncludeCSS']; ?>

<?php echo '
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
'; ?>




				<form name="customer_list" id="customer_list" method="post">
                  <table id="example1" class="table table-bordered table-striped" style="font-size:13px; font-family:'Times New Roman', Times, serif;">
                    <thead>
					<tr>
								
								<th>Area</th>
								<th>Address</th>
								<th>Address 1</th>
								<th>Landmark</th>
								<th>City</th>
								<th>Pincode</th>
								<th>Action</th>
					</tr>

                    </thead>
                    <tbody>
					
                     <?php $_from = $this->_tpl_vars['Address']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['Contact']):
?>
					<tr>
								
								<td align="center"><a href="#" onClick="Javascript:viewCats('<?php echo $this->_tpl_vars['Contact']['customer_id']; ?>
')"><?php echo $this->_tpl_vars['Contact']['area']; ?>
</a></td>
								<td align="center"><a href="#" onClick="Javascript:viewCats('<?php echo $this->_tpl_vars['Contact']['customer_id']; ?>
')"><?php echo $this->_tpl_vars['Contact']['address']; ?>
</a></td>
								<td align="center"><a href="#" onClick="Javascript:viewCats('<?php echo $this->_tpl_vars['Contact']['customer_id']; ?>
')"><?php echo $this->_tpl_vars['Contact']['address1']; ?>
</a></td>
								<td align="center"><a href="#" onClick="Javascript:viewCats('<?php echo $this->_tpl_vars['Contact']['customer_id']; ?>
')"><?php echo $this->_tpl_vars['Contact']['landmark']; ?>
</a></td>								
								<td align="center"><a href="#" onClick="Javascript:viewCats('<?php echo $this->_tpl_vars['Contact']['customer_id']; ?>
')"><?php echo $this->_tpl_vars['Contact']['city']; ?>
</a></td>
								<td class="center"><a href="#" onClick="Javascript:viewCats('<?php echo $this->_tpl_vars['Contact']['customer_id']; ?>
')"><?php echo $this->_tpl_vars['Contact']['pincode']; ?>
</a></td>
								<td class="center">&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" onClick="Javascript:editCats('<?php echo $this->_tpl_vars['Contact']['area']; ?>
')"><i class="fa fa-edit"></i></a>
								&nbsp;&nbsp; &nbsp;&nbsp;<a href="#" onClick="Javascript:deleteCats('<?php echo $this->_tpl_vars['Contact']['area']; ?>
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
  FormName.action= "cus_tab.php?area="+CatIdent;
  FormName.submit();
 }
 }
function editCats(CatIdent) {
    
  FormName		= document.ContactList;
  FormName.action =\'cus_edit.php?area=\'+CatIdent;          
  FormName.submit();

 }
 function viewCats(CatIdent) {
    
  FormName		= document.ContactList;
  FormName.action =\'cus_detail_view.php?area=\'+CatIdent;          
  FormName.submit();

 }
    </script>
	'; ?>

  </body>
