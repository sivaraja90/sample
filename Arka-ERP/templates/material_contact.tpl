{$IncludeJS}
{$IncludeCSS}


				<form name="customer_list" id="customer_list" method="post">
                 <table id="example1" class="table table-bordered table-striped "style="font-size:13px; font-family:'Times New Roman', Times, serif;" >
                    <thead>
                      <tr>
                        <th>Material Code</th>
                        <th>Material Name</th>
                        <th>Material Make</th>
                        <th>Material category</th>
						<th>Material Price</th>
                        <th>Material Type</th>
						<th>Specification</th>
						<th>Created Date</th>
												
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
                        <td><a href="#">5</a></td>
						<td><a href="#">1</a></td>
                      </tr>
						 <tr>
                        <td><a href="#">Trident</a></td>
                        <td><a href="#">Internet Explorer 4.0 </a></td>
                        <td><a href="#">Win 95+</a></td>
                        <td> <a href="#">4</a></td>
                        <td><a href="#">X</a></td>
						 <td><a href="#">Win 95+</a></td>
						 <td><a href="#">5</a></td>
						<td><a href="#">1</a></td>
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
{literal}

    <script>
      $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false
        });
      });
    </script>
	{/literal}
  </body>

