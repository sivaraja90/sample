{include file="left.tpl"}
<body class="hold-transition skin-blue sidebar-mini">
  <div class="content-wrapper">
	<section class="content-header">
		<h4>
        <small><a href="employee_list.php"><i class="fa fa-list"> <label style="font-family:Arial, Helvetica, sans-serif">
		List Employees</label></i></a></small>&ensp;&ensp;&ensp;
		<small><a href="employee_reg.php"><i class="fa fa-user-plus"> <label style="font-family:Arial, Helvetica, sans-serif">
		Create Employee</label></i></a></small>
		</h4>
        </section>
        <!-- Main content -->
          <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box box-info">
                <div class="box-header">
                  <center><h3 class="box-title">Employee Lists</h3></center>
                </div><!-- /.box-header -->
		 {if $SuccessMessage neq ""}
			<div class="isa_success">
			<i class="fa fa-check"></i>
			{$SuccessMessage}
			</div>
		 {/if}
		 {if $ErrorMessage neq ""}
			<div class="isa_error">
			<i class="fa fa-times"></i>
			{$ErrorMessage}
			</div>
		 {/if}
		   <div class="box-body">
				<form name="employee_list" id="employee_list" method="post">
		                   <table id="example1" class="table table-bordered table-striped ">
                    <thead>
                      <tr>
					  <th>Sl No</th>
                        <th>Employee Id</th>
                        <th>Employee Name</th>
                        <th>Company Code</th>
                        <th>Designation</th>
						<th>Department</th>
                        <th>Joining Date</th>
						{foreach from=$RList item=roles}
						{if $roles.role_name eq 'Edit Employee'}
						<th>Action</th>
						{/if}
						{/foreach}
                      </tr>
                    </thead>
                    <tbody>
					{foreach from=$ListView item=View}
					 <tr id="{$i++}">
					 <td align="left"><a href="#" onClick="Javascript:viewCats('{$View.emp_id}')">{$i}</a></td>
								<td align="left"><a href="#" onClick="Javascript:viewCats('{$View.emp_id}')">{$View.emp_id}</a></td>
					<td align="left"><a href="#" onClick="Javascript:viewCats('{$View.emp_id}')">{$View.salutation}.{$View.emp_first_name} {$View.emp_last_name}</a></td>
								<td align="left"><a href="#" onClick="Javascript:viewCats('{$View.emp_id}')">{$View.company_code}</a></td>
								<td align="left"><a href="#" onClick="Javascript:viewCats('{$View.emp_id}')">{$View.designation}</a></td>
								<td align="left"><a href="#" onClick="Javascript:viewCats('{$View.emp_id}')">{$View.department}</a></td>
								<td align="left"><a href="#" onClick="Javascript:viewCats('{$View.emp_id}')">{$View.joining_date}</a></td>
								
								<td align="left">
								 {foreach from=$RList item=roles}
						{if $roles.role_name eq 'Edit Employee'}
								&nbsp;&nbsp; &nbsp;&nbsp;<a href="#" onClick="Javascript:editCats('{$View.emp_id}')"><i class="fa fa-edit"></i></a>{/if}
								{if $roles.role_name eq 'Delete Employee'}
								&nbsp;&nbsp; &nbsp;&nbsp;<a href="#" onClick="Javascript:deleteCats('{$View.emp_id}')"><i class="fa fa-trash"></i></a>{/if}
								{/foreach}
								</td>
                    </tr>
					  {foreachelse}
					<tr>
					<td height="20" colspan="12" align="center"><img src="images/warning.gif" border="0">&nbsp;No Records Found</td>
					</tr>
              {/foreach}
					</tbody>
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
	FormName		= document.employee_list;
	FormName.action= "employee_list.php?emp_id="+CatIdent;
	FormName.submit();
	}
}
function editCats(CatIdent) {
	var empl_id = btoa(CatIdent);
	FormName		= document.employee_list;
	FormName.action ='employee_edit.php?emp_id='+empl_id;
	FormName.submit();
}
function viewCats(CatIdent) {
	var empl_id = btoa(CatIdent);
	FormName		= document.employee_list;
	FormName.action ='employee_detail_view.php?emp_id='+empl_id;
	FormName.submit();
}
</script>
<style>
	.isa_success
	{
	color:#4F8A10;
	background-color:#DFF2BF;
	}
	.isa_error
	{
	color:#D8000C;
	background-color:#FFBABA;
	}
	.isa_success i,.isa_error i
	{
	margin:10px 22px;
	font-size:2em;
	vertical-align:middle;
	}
</style>
{/literal}
 </body>
