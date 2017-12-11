{include file="left.tpl"}
 <body class="hold-transition skin-blue sidebar-mini">
  <div class="content-wrapper">
	<section class="content-header">
          <h4>
         <small class="active"><a href="user_list.php"><i class="fa fa-list"> <label style="font-family:Arial, Helvetica, sans-serif">
		 List Users</label></i></a></small>&ensp;&ensp;&ensp;
         <small><a href="user_reg.php"><i class="fa fa-user-plus"> <label style="font-family:Arial, Helvetica, sans-serif">
		 Create User</label></i></a></small>
		 </h4>
        </section>
        <!-- Main content -->
          <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box box-info">
                <div class="box-header">
                 <center> <h3 class="box-title"> User Lists</h3></center>
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
					<form  name="user_list" id="user_list" method="post">
                  <table id="example1" class="table table-bordered table-striped ">
                    <thead>
                      <tr>
					  <th>Sl No</th>
						<th>Employee Name</th>
                        <th>Designation</th>
                        <th>Company Code</th>
						<th>User Group</th>
						<th>Mobile No</th>
						<th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
					{foreach from=$ListView item=View}
                      <tr id="{$i++}">
					  <td align="left"><a href="#" onClick="Javascript:viewCats('{$View.s_no}')">{$i}</a></td>
							<td align="left"><a href="#" onClick="Javascript:viewCats('{$View.s_no}')">{$View.salutation}.{$View.contact_fname} {$View.contact_lname}</a></td>
							<td align="left"><a href="#" onClick="Javascript:viewCats('{$View.s_no}')">{$View.designation}</a></td>
							<td align="left"><a href="#" onClick="Javascript:viewCats('{$View.s_no}')">{$View.company_code}</a></td>
							<td align="left"><a href="#" onClick="Javascript:viewCats('{$View.s_no}')">{$View.user_group}</a></td>
							<td align="left"><a href="#" onClick="Javascript:viewCats('{$View.s_no}')">{$View.mobile}</a></td>
							<td align="left"><a href="#" onClick="Javascript:editCats('{$View.s_no}')"><i class="fa fa-edit"></i></a>
							&nbsp;&nbsp; &nbsp;&nbsp;<a href="#" onClick="Javascript:deleteCats('{$View.s_no}')"><i class="fa fa-trash"></i></a></td>
				  </tr>
				  {foreachelse}
					<tr>
					<td height="20" colspan="12" align="center"><img src="images/warning.gif" border="0">&nbsp;No Records Found</td>
					</tr>
						 {/foreach}
                    </tfoot>
                  </table>
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
  FormName	= document.user_list;
  FormName.action= "user_list.php?s_no="+CatIdent;
  FormName.submit();
 }
 }
function editCats(CatIdent)
{
   var usr_id = btoa(CatIdent);
   FormName	= document.user_list;
    FormName.action ="user_edit.php?s_no="+usr_id;
  FormName.submit();
}

  function viewCats(CatIdent) {
  var usr_id = btoa(CatIdent);
  FormName	= document.user_list;
  FormName.action ="user_detail_view.php?s_no="+usr_id;
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
