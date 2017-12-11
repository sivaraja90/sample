{include file="left.tpl"}
 <body class="hold-transition skin-blue sidebar-mini">
  <div class="content-wrapper">
	<section class="content-header">
          <h4>
            <small><a href="material_list.php"><i class="fa fa-list"> <label style="font-family:Arial, Helvetica, sans-serif">
List Materials</label></i></a></small>&ensp;&ensp;&ensp;
            <small><a href="material_reg.php"><i class="fa fa-user-plus"> <label style="font-family:Arial, Helvetica, sans-serif">
Create Material</label></i></a></small>
          </h4>
        </section>
        <!-- Main content -->
          <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box box-info">
                <div class="box-header">
                  <center><h3 class="box-title">Material Lists</h3></center>
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
				<form name="material_list" id="material_list" method="post">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
					  <th>Sl No</th>
                        <th>Material Code</th>
                        <th>Material Name</th>
                        <th>Price</th>
						<th>Type</th>
						<th>Specification</th>
						<th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
					{foreach from=$ListViews item=View}
					 <tr id="{$i++}">
					 <td align="left"><a href="#" onClick="Javascript:viewCats('{$View.material_code}')">{$i}</a></td>
								<td align="left"><a href="#" onClick="Javascript:viewCats('{$View.material_code}')">{$View.material_code}</a></td>
								<td align="left"><a href="#" onClick="Javascript:viewCats('{$View.material_code}')">{$View.material_name}</a></td>
								<td align="left"><a href="#" onClick="Javascript:viewCats('{$View.material_code}')">{$View.material_price}</a></td>
								<td align="left"><a href="#" onClick="Javascript:viewCats('{$View.material_code}')">{$View.material_type}</a></td>
								<td align="left"><a href="#" onClick="Javascript:viewCats('{$View.material_code}')">{$View.specification}</a></td>
								<td align="left"><a href="#" onClick="Javascript:editCats('{$View.material_code}')"><i class="fa fa-edit"></i></a>
								&nbsp;&nbsp; &nbsp;&nbsp;<a href="#" onClick="Javascript:deleteCats('{$View.material_code}')"><i class="fa fa-trash"></i></a></td> 
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
      </div>
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
	var po_id = btoa(CatIdent);
	if(confirm("Are you sure to Delete this Content?")){
	FormName		= document.material_list;
	FormName.action= "material_list.php?material_code="+po_id;
	FormName.submit();
	}
}
function editCats(CatIdent) {
	var po_id = btoa(CatIdent);
	FormName		= document.material_list;
	FormName.action ='material_edit.php?material_code='+po_id;          
	FormName.submit();
}
function viewCats(CatIdent) {
	var po_id = btoa(CatIdent); 
	FormName		= document.material_list;
	FormName.action ='material_detail_view.php?material_code='+po_id;          
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

