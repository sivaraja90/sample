{include file="left.tpl"}
 <body class="hold-transition skin-blue sidebar-mini">
  <div class="content-wrapper">
	<section class="content-header">
         	<h4>
         <small><a href="vendor_list.php"><i class="fa fa-list"> <label style="font-family:Arial, Helvetica, sans-serif"> List Vendors</label></i></a></small>&ensp;&ensp;&ensp;
         <small><a href="vendor_reg.php"><i class="fa fa-user-plus"> <label style="font-family:Arial, Helvetica, sans-serif"> Create Vendor</label></i></a></small>
		 </h4>
        </section>

        <!-- Main content -->
          <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box box-info">
                <div class="box-header">
                  <center><h3 class="box-title">Vendors Lists</h3></center>
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
				<form name="vendor_list" id="vendor_list" method="post">
                  <table id="example1" class="table table-bordered table-striped ">
                    <thead>
                      <tr>
					  <th>Sl No</th>
                        <th>Vendors Id</th>
                        <th>Vendors Company Name</th>
                        <th>Area</th>
                        <th>City</th>
						<th>Phone No</th>
						<th>Mobile No</th>
						<th>Email Id</th>
						<th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
					{foreach from=$ListView item=View}
					{if $View.status eq '0'} 
                      <tr id="{$i++}">
					  <td align="left"><a href="#" onClick="Javascript:viewCats('{$View.vendor_id}')"><strike>{$i}</strike></a></td>
					            <td align="left"><a href="#" onClick="Javascript:viewCats('{$View.vendor_id}')"><strike>{$View.vendor_id}</strike></a></td>
								<td align="left"><a href="#" onClick="Javascript:viewCats('{$View.vendor_id}')"><strike>{$View.vendor_company_name}</strike></a></td>
								<td align="left"><a href="#" onClick="Javascript:viewCats('{$View.vendor_id}')"><strike>{$View.area}</strike></a></td>
								<td align="left"><a href="#" onClick="Javascript:viewCats('{$View.vendor_id}')"><strike>{$View.city}</strike></a></td>
					<td align="left"><a href="#" onClick="Javascript:viewCats('{$View.vendor_id}')"><strike>{$View.area_code}{$View.phone_no}{$View.extension}</strike></a></td>
								<td align="left"><a href="#" onClick="Javascript:viewCats('{$View.vendor_id}')"><strike>{$View.mobile_no}</strike></a></td>
								<td align="left"><a href="#" onClick="Javascript:viewCats('{$View.vendor_id}')"><strike>{$View.mail_id}</strike></a></td>
								
								<td class="left">
								{foreach from=$RList item=roles}
								{if $roles.role_name eq 'Delete Vendor'}
								&nbsp;&nbsp; &nbsp;&nbsp;<a href="#" onClick="Javascript:repeatCats('{$View.vendor_id}','{$View.sl_no}')"><i class="fa fa-reply-all"></i></a>
								{/if}
								{/foreach}</td> 
                      </tr>
					  {else}
					  <tr id="{$i++}">
					  <td align="left"><a href="#" onClick="Javascript:viewCats('{$View.vendor_id}')">{$i}</a></td>
					            <td align="left"><a href="#" onClick="Javascript:viewCats('{$View.vendor_id}')">{$View.vendor_id}</a></td>
								<td align="left"><a href="#" onClick="Javascript:viewCats('{$View.vendor_id}')">{$View.vendor_company_name}</a></td>
								<td align="left"><a href="#" onClick="Javascript:viewCats('{$View.vendor_id}')">{$View.area}</a></td>
								<td align="left"><a href="#" onClick="Javascript:viewCats('{$View.vendor_id}')">{$View.city}</a></td>
							    <td align="left"><a href="#" onClick="Javascript:viewCats('{$View.vendor_id}')">{$View.area_code}-{$View.phone_no}-{$View.extension}</a></td>
								<td align="left"><a href="#" onClick="Javascript:viewCats('{$View.vendor_id}')">{$View.mobile_no}</a></td>
								<td align="left"><a href="#" onClick="Javascript:viewCats('{$View.vendor_id}')">{$View.mail_id}</a></td>
								
								<td align="left">
								
								{foreach from=$RList item=roles}
						{if $roles.role_name eq 'Edit Vendor'}
								&nbsp;&nbsp; &nbsp;&nbsp;<a href="#" onClick="Javascript:editCats('{$View.vendor_id}')"><i class="fa fa-edit"></i></a>{/if}
								{if $roles.role_name eq 'Delete Vendor'}
								&nbsp;&nbsp; &nbsp;&nbsp;<a href="#" onClick="Javascript:deleteCats('{$View.vendor_id}')"><i class="fa fa-trash"></i></a>
								{/if}
								{/foreach}
								</td> 
                      </tr>
						{/if}
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
  FormName		= document.vendor_list;
  FormName.action= "vendor_list.php?vendor_id="+CatIdent;
  FormName.submit();
 }
 }
  function repeatCats(y,z){
  if(confirm("Are you sure to Retrive this Content?")){
  FormName		= document.vendor_list;
  FormName.action= "vendor_list.php?vendor_id="+y+"&retrive="+z;
  FormName.submit();
 }
 }
  
function editCats(CatIdent) 
{
   var ven_id = btoa(CatIdent);
   FormName		= document.vendor_list;
    FormName.action ="vendor_edit.php?vendor_id="+ven_id; 
  FormName.submit();
}
  
  function viewCats(CatIdent) {
  var ven_id = btoa(CatIdent);    
  FormName		= document.vendor_list;
  FormName.action ="vendor_detail_view.php?vendor_id="+ven_id;          
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

