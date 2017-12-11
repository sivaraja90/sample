{$IncludeJS}
{$IncludeCSS}


				<form name="po_list" id="po_list" method="post">
                 <table  id="example1" class="table table-bordered table-striped "style="font-size:13px; font-family:'Times New Roman', Times, serif;" >
                    <thead>
                      <tr>
                        <th>PO No</th>
                        <th>Contact Person</th>
                        <th>PO Date</th>
                        <th>Company Name</th>
						<th>Quote Reference Id</th>
                        <th>PO Status</th>
						<th>Supplier Code</th>						
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
                        
                      </tr>
						 <tr>
                        <td><a href="#">Trident</a></td>
                        <td><a href="#">Internet Explorer 4.0 </a></td>
                        <td><a href="#">Win 95+</a></td>
                        <td> <a href="#">4</a></td>
                        <td><a href="#">X</a></td>
						 <td><a href="#">Win 95+</a></td>
						 <td><a href="#">5</a></td>
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

