<?php /* Smarty version 2.6.25, created on 2016-01-19 18:40:37
         compiled from test.tpl */ ?>
<?php echo $this->_tpl_vars['IncludeJS']; ?>

<?php echo $this->_tpl_vars['IncludeCSS']; ?>



				<form name="customer_list" id="customer_list" method="post">
                  <table id="example1" class="table table-bordered table-striped" style="font-size:13px; font-family:'Times New Roman', Times, serif;">
                    <thead>
                      <tr>
                        <th>Customer Id</th>
                        <th>Customer Name</th>
                        <th>Mobile No</th>
                        <th>Created By</th>
                        <th>Designation</th>
						<th>Phone No</th>
						<th>Email Id</th>
						<th>Created Date &amp;Time</th>
						
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
                        <td><a href="#"> 4</a></td>
                        <td><a href="#">X</a></td>
						</tr>
						<tr>
                        <td><a href="#">Trident</a></td>
                        <td><a href="#">Internet
                          Explorer 4.0</a></td>
                        <td><a href="#">Win 95+</a></td>
                        <td><a href="#">4</a></td>
                        <td><a href="#">X</a></td>
						<td><a href="#">4</a></td>
						<td><a href="#">4</a></td>
						<td><a href="#">1</a></td>
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
