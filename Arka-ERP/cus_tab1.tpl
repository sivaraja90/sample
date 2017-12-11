{$IncludeJS}
{$IncludeCSS}


				<form name="customer_list" id="customer_list" method="post">
                  <table id="example1" class="table table-bordered table-striped" style="font-size:13px; font-family:'Times New Roman', Times, serif;">
                    <thead>
                      <tr>
                        <th>Customer Id</th>
                        <th>Customer Name</th>
                        <th>Area</th>
                        <th>Address</th>
						<th>Address 1</th>
                        <th>Landmark</th>
						<th>City</th>
						<th>Pincode</th>
						<th>Remark</th>
						
                      </tr>

                    </thead>
                    <tbody>
                     {foreach from=$Address item=Contact}
					<tr>
								<td align="center">{$Contact.customer_id}</td>
								<td align="center">{$Contact.company_name}</td>
								<td align="center">{$Contact.area}</td>
								<td align="center">{$Contact.address}</td>
								<td align="center">{$Contact.address1}</td>
								<td align="center">{$Contact.landmark}</td>								
								<td align="center">{$Contact.city}</td>
								<td class="center">{$Contact.pincode}</td>
								<td align="center">{$Contact.remarks}</td> 
                    </tr>
					
					 
					  {foreachelse}
					<tr>
								<td height="20" colspan="12" align="center"><img src="images/warning.gif" border="0">&nbsp;No Records Found</td>
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

