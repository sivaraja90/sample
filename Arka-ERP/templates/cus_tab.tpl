{$IncludeJS}
{$IncludeCSS}
{literal}
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
{/literal}


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
					{foreach from=$ViewContact item=Contact}
					 
					<tr>
								
								<td align="center"><a href="#" onClick="Javascript:viewCats('{$Contact.sl_no}')">{$Contact.first_name}{$Contact.last_name}</a></td>
								<td align="center"><a href="#" onClick="Javascript:viewCats('{$Contact.sl_no}')">{$Contact.mobile_no}</a></td>
								<td align="center"><a href="#" onClick="Javascript:viewCats('{$Contact.sl_no}')">{$Contact.created_by}</a></td>
								<td align="center"><a href="#" onClick="Javascript:viewCats('{$Contact.sl_no}')">{$Contact.designation}</a></td>
								<td align="center"><a href="#" onClick="Javascript:viewCats('{$Contact.sl_no}')">{$Contact.mail_id}</a></td>
								<td class="center"><a href="#" onClick="Javascript:viewCats('{$Contact.sl_no}')">{$Contact.created_date}&amp;{$Contact.created_time}</a></td>
								<td class="center"><a href="#" onClick="Javascript:viewCats('{$Contact.sl_no}')">{$Contact_Date.0.Date}&amp;{$Contact_Time.0.Time}</a></td>
								<td class="center">&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" data-toggle="modal" data-target="#Contact"><i class="fa fa-edit" ></i></a>
								&nbsp;&nbsp; &nbsp;&nbsp;<a href="#" onClick="Javascript:deleteCats('{$Contact.sl_no}')"><i class="fa fa-trash"></i></a></td>  
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
  FormName.action= "cus_tab.php?sl_no="+CatIdent;
  FormName.submit();
 }
 }
function editCats(CatIdent) {
    
  FormName		= document.ContactList;
  FormName.action ='cus_edit.php?sl_no='+CatIdent;          
  FormName.submit();

 }
 function viewCats(CatIdent) {
    
  FormName		= document.ContactList;
  FormName.action ='cus_detail_view.php?sl_no='+CatIdent;          
  FormName.submit();

 }
    </script>
	{/literal}
  </body>

