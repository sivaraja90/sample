<?php /* Smarty version 2.6.25, created on 2016-01-20 12:59:04
         compiled from user_contact.tpl */ ?>
<?php echo $this->_tpl_vars['IncludeJS']; ?>

<?php echo $this->_tpl_vars['IncludeCSS']; ?>



				<form name="user_list" id="user_list" method="post">
                  <table id="example1" class="table table-bordered table-striped" style="font-size:13px; font-family:'Times New Roman', Times, serif;">
                    <thead>
                      <tr>
                        <th>User Id</th>
                        <th>Employee Id</th>
                        <th>User Name</th>
                        <th>Password</th>
                        <th>Company Name</th>
						<th>Created By</th>
						<th>User Group</th>
						<th>Company Code</th>
						
                      </tr>

                    </thead>
                    <tbody>
					
                      <tr>
                        <td><a href="#">Trident</a></td>
                        <td><a href="#">Internet
                          Explorer 4.0</a></td>
                        <td><a href="#">Win 95+</a></td>
                        <td><a href="#"> 4</a></td>
                        <td><a href="#">X</a></td>
						 <td><a href="#">Win 95+</a></td>
                        <td><a href="#">5</a></td>
                        <td><a href="#">X</a></td>
						</tr>
						<tr>
                        <td><a href="#">Trident</a></td>
                        <td><a href="#">Internet
                          Explorer 4.0</a></td>
                        <td><a href="#">Win 95+</a></td>
                        <td><a href="#">4</a></td>
                        <td><a href="#">X</a></td>
						<td><a href="#">Win 95+</a></td>
						<td><a href="#">5</a></td>
						<td><a href="#">X</a></td>
						</tr>
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
    </script>
	'; ?>

  </body>
