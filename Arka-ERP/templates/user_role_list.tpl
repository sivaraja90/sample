{include file="left.tpl"}

 <body class="hold-transition skin-blue sidebar-mini">
  <div class="content-wrapper">
	<section class="content-header">
          <h4>
         <small class="active"><a href="user_role_list.php"><i class="fa fa-list"> <label style="font-family:Arial, Helvetica, sans-serif">
		 List User Roles</label></i></a></small>&ensp;&ensp;&ensp;
         <small><a href="user_role_reg.php"><i class="fa fa-user-plus"> <label style="font-family:Arial, Helvetica, sans-serif"> 
		 Create User Role</label></i></a></small>
		 </h4>
        </section>

        <!-- Main content -->
          <section class="content">
          <div class="row ">
            <div class="col-xs-12">
              <div class="box box-info">
                <div class="box-header">
                 <center> <h3 class="box-title">User Role Lists</h3></center>
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
				<form name="role_list" id="role_list" method="post">
                  <table id="example1" class="table table-bordered table-striped ">
                    <thead>
                      <tr>
					 	<th>Sl No</th>
                        <th>Role Name</th>
                        <th>Category</th>
						<th>Creatd Date</th>
						<th>Created Time</th>
						<th>Action</th>
						
                      </tr>

                    </thead>
					
                    <tbody>
					{foreach from=$ListView item=View}

                      <tr  id="{$i++}">
										<td align="left"><a href="#" onClick="Javascript:viewCats('{$View.role_id}')">{$i}</a></td>
										<td align="left"><a href="#" onClick="Javascript:viewCats('{$View.role_id}')">{$View.role_name}</a></td>
										<td align="left"><a href="#" onClick="Javascript:viewCats('{$View.role_id}')">{$View.category}</a></td>
										<td align="left"><a href="#" onClick="Javascript:viewCats('{$View.role_id}')">{$View.created_date}</a></td>
										<td align="left"><a href="#" onClick="Javascript:viewCats('{$View.role_id}')">{$View.created_time}</a></td>
										<td align="left"><a href="#" onClick="Javascript:editCats('{$View.role_id}')"><i class="fa fa-edit"></i></a>
								&nbsp;&nbsp; &nbsp;&nbsp;<a href="#" onClick="Javascript:deleteCats('{$View.role_id}')"><i class="fa fa-trash"></i></a></td> 
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
  FormName		= document.role_list;
  FormName.action= "user_role_list.php?role_id="+CatIdent;
  FormName.submit();
 }
 }
function editCats(CatIdent) {
	var usrrol_id = btoa(CatIdent);
   FormName		= document.role_list;
  FormName.action ='user_role_edit.php?role_id='+usrrol_id;          
  FormName.submit();
}


 
  function viewCats(CatIdent) {
  var usrrol_id = btoa(CatIdent);   
  FormName		= document.role_list;
  FormName.action ='user_role_detail_view.php?role_id='+usrrol_id;          
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

