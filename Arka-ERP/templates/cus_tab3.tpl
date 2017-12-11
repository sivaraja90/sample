{$IncludeJS}
{$IncludeCSS}
{literal}
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
{/literal}



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
					
                     {foreach from=$Address item=Contact}
					<tr>
								
								<td align="center"><a href="#" onClick="Javascript:viewCats('{$Contact.customer_id}')">{$Contact.area}</a></td>
								<td align="center"><a href="#" onClick="Javascript:viewCats('{$Contact.customer_id}')">{$Contact.address}</a></td>
								<td align="center"><a href="#" onClick="Javascript:viewCats('{$Contact.customer_id}')">{$Contact.address1}</a></td>
								<td align="center"><a href="#" onClick="Javascript:viewCats('{$Contact.customer_id}')">{$Contact.landmark}</a></td>								
								<td align="center"><a href="#" onClick="Javascript:viewCats('{$Contact.customer_id}')">{$Contact.city}</a></td>
								<td class="center"><a href="#" onClick="Javascript:viewCats('{$Contact.customer_id}')">{$Contact.pincode}</a></td>
								<td class="center">&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" onClick="Javascript:editCats('{$Contact.area}')"><i class="fa fa-edit"></i></a>
								&nbsp;&nbsp; &nbsp;&nbsp;<a href="#" onClick="Javascript:deleteCats('{$Contact.area}')"><i class="fa fa-trash"></i></a></td> 
								
                    </tr>
					
					 
					  {foreachelse}
					<tr>
								<td height="20" colspan="12" align="center"><img src="images/warning.gif" border="0">&nbsp;No Records Found</td>
					</tr>
					{/foreach}
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
	    function deleteCats(CatIdent){
  if(confirm("Are you sure to Delete this Content?")){
  FormName		= document.ContactList;
  FormName.action= "cus_tab.php?area="+CatIdent;
  FormName.submit();
 }
 }
function editCats(CatIdent) {
    
  FormName		= document.ContactList;
  FormName.action ='cus_edit.php?area='+CatIdent;          
  FormName.submit();

 }
 function viewCats(CatIdent) {
    
  FormName		= document.ContactList;
  FormName.action ='cus_detail_view.php?area='+CatIdent;          
  FormName.submit();

 }
    </script>
	{/literal}
  </body>

