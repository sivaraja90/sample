<?php /* Smarty version 2.6.25, created on 2016-01-11 17:36:48
         compiled from emp_test.tpl */ ?>
<?php echo $this->_tpl_vars['IncludeJS']; ?>

<?php echo $this->_tpl_vars['IncludeCSS']; ?>



				<form name="customer_list" id="customer_list" method="post">
                 <table id="example1" class="table table-bordered table-striped "style="font-size:13px; font-family:'Times New Roman', Times, serif;" >
                    <thead>
                      <tr>
                        <th>Employee Id</th>
                        <th>Employee Name</th>
                        <th>Company Code</th>
                        <th>Designation</th>
						<th>Department</th>
                        <th>Joining Date</th>
												
                      </tr>

                    </thead>
                    <tbody>
					
                      <tr>
                        <td><a href="#">Trident</a></td>
                        <td><a href="#">Internet Explorer 4.0</a></td>
                        <td><a href="#">Win 95+</a></td>
                        <td><a href="#"> 4</a></td>
                        <td><a href="#">X</a></td>
						 <td><a href="#">Win 95+</a></td>
                        
                      </tr>
						 <tr>
                        <td><a href="#">Trident</a></td>
                        <td><a href="#">Internet Explorer 4.0 </a></td>
                        <td><a href="#">Win 95+</a></td>
                        <td> <a href="#">4</a></td>
                        <td><a href="#">X</a></td>
						 <td><a href="#">Win 95+</a></td>
                                              </tr>

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
