{include file="left.tpl"}

 <body class="hold-transition skin-blue sidebar-mini">
  <div class="content-wrapper">
	<section class="content-header">
          <h4>
            <small><a href="#"><i class="fa fa-list">
List Customer</i></a></small>&ensp;&ensp;&ensp;
            <small><a href="customer_reg.php"><i class="fa fa-user-plus">
Create Customer</i></a></small>
          </h4>
         <!-- <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Tables</a></li>
            <li class="active">Data tables</li>
          </ol>-->
        </section>

        <!-- Main content -->
          <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box box-info">
                <div class="box-header">
                  <center><h3 class="box-title">Customer Lists</h3></center>
                </div><!-- /.box-header -->
				<p>
													<div align="center" style="margin-top: 10px; margin-bottom: 10px;border: 0px;">
													{foreach from=$RList item=roles}
															{if $roles.role_name eq 'Modify Customer'}
                                                      <!--  <input class="button" type='button' value='PO Upload' onClick="createPoUploadWindow()"/>	-->														
													   <!-- <input class="button" type='button' value='File Upload' onClick="createWindow3()"/>
															 {/if}
												 		{/foreach}
														<input class="button" type='button' value='Demo' onClick="redirectdemo2()"/>
														<input class="button" type='button' value='Service' onClick="redirectservice2()"/>
														{foreach from=$RList item=roles}
															{if $roles.role_name eq 'Modify Customer'}-->
														<input class="button" type='button' value='Add Contact'  onClick="createWindow()" />
														<input class="button" type='button' value='Add Address'  onClick="createWindow1()" />
														<input class="button" type='button' value='Remarks'  onClick="redirectremarks()" />
														<!--<input class="button" type='button' value='Sales'  onClick="redirectsales()" />
														<input class="button" type='button' value='Issues'  onClick="redirectissues()" />-->
														<input class="button" type='button' value='Payment Procedure'  onClick="redirectpayment_procedure()" />
															 <!--{/if}
												 		{/foreach}
														<input class="button" type='button' value='Cancel' onClick="history.go(-1)" />-->
													</div>
												</p>
                <div class="box-body">
				<form name="customer_list" id="customer_list" method="post">
                  <table id="example1" class="table table-bordered table-striped ">
                    <thead>
                      <tr>
                        <th>Customer Id</th>
                        <th>Company Name</th>
                        <th>Mobile No</th>
                        <th>Enquiry Through</th>
                        <th>Designation</th>
						<th>Address</th>
						<th>DOB</th>
						<th>Email Id</th>
						<th>Action</th>
						
                      </tr>

                    </thead>
                    <tbody>
					
                      <tr>
                        <td>Trident</td>
                        <td>Internet
                          Explorer 4.0</td>
                        <td>Win 95+</td>
                        <td> 4</td>
                        <td>X</td>
						 <td>Win 95+</td>
                        <td> 4</td>
                        <td>X</td>
						<td class="center">&nbsp;&nbsp;&nbsp;&nbsp;<a href="customer_edit.php"><i class="fa fa-edit"></i></a>
						&nbsp;&nbsp; &nbsp;&nbsp;<a href="#"><i class="fa fa-trash"></i></a></td>
                      </tr>
						<tr>
                        <td>Trident</td>
                        <td>Internet
                          Explorer 4.0</td>
                        <td>Win 95+</td>
                        <td> 4</td>
                        <td>X</td>
						<td> 4</td>
						<td> 4</td>
						<td> 1</td>
						<td class="center">&nbsp;&nbsp;&nbsp;&nbsp;<a href="customer_edit.php"><i class="fa fa-edit"></i></a>
						&nbsp;&nbsp; &nbsp;&nbsp;<a href="#"><i class="fa fa-trash"></i></a></td> 
                      </tr>
					</tbody>
                    </tfoot>
                  </table>
				 </form>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
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
  FormName		= document.customer_list;
  FormName.action= "customer_list.php?customer_id="+CatIdent;
  FormName.submit();
 }
 }
function editCats(CatIdent) {
    
  FormName		= document.customer_list;
  FormName.action ='customer_edit.php?customer_id='+CatIdent;          
  FormName.submit();

 }
 
  function viewCats(CatIdent) {
    
  FormName		= document.customer_list;
  FormName.action ='customer_details_view.php?customer_id='+CatIdent;          
  FormName.submit();

 }
    </script>
	{/literal}
  </body>

