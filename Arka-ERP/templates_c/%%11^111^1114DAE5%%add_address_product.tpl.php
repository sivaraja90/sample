<?php /* Smarty version 2.6.25, created on 2016-01-20 17:28:42
         compiled from add_address_product.tpl */ ?>
<?php echo $this->_tpl_vars['IncludeJS']; ?>

<?php echo $this->_tpl_vars['IncludeCSS']; ?>



				<form name="customer_list" id="customer_list" method="post">
                  <table id="example1" class="table table-bordered table-striped" style="font-size:13px; font-family:'Times New Roman', Times, serif;">
                    <thead>
                      <tr>
                        <th>Item Code</th>
                        <th>Baan Company</th>
                        <th>Item Name</th>
                        <th>Item Description</th>
                        <th>Features</th>
						<th>Tin No</th>
						<th>Mobile No</th>
						<th>Email Id</th>
						<th>Action</th>
						
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
						 <td><a href="#">1</a></td>
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
 </html>
