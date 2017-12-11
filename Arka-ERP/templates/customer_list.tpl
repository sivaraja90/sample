{include file="left.tpl"}
 <body class="hold-transition skin-blue sidebar-mini">
  <div class="content-wrapper">
	<section class="content-header">
          <h4>
             {foreach from=$RList item=roles} 		
			{if $roles.role_name eq 'Add Customer'}
            <small><a href="customer_reg.php"><i class="fa fa-user-plus"> <label class="font" style="font-family:Arial, Helvetica, sans-serif">
Create Customer</label></i></a></small>
{/if}

				{if $roles.role_name eq 'List Customer'}&ensp;
            <small class="active"><a href="customer_list.php"><i class="fa fa-list"> <label class="font" style="font-family:Arial, Helvetica, sans-serif">
List Customers</label></i></a></small>&ensp;&ensp;&ensp;
{/if}
			{/foreach}
          </h4>
        </section>

        <!-- Main content -->
			<section class="content">
			<div class="row">
			<div class="col-xs-12">
			<div class="box box-info">
			<div class="box-header">
			<center><h3 class="box-title">Customer Lists</h3></center>
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
				<form name="customer_list" id="customer_list" method="post">
                  <table id="example1" class="table table-responsive table-striped">
                    <thead>
                      <tr>
					  <th>Sl No</th>
                        <th>Customer Id</th>
                        <th>Company Name</th>
                        <th>Mobile No</th>
                        <th>Enquiry Through</th>
						<th>Area</th>
						<th>Email Id</th>
						 {foreach from=$RList item=roles}
						{if $roles.role_name eq 'Edit Customer'}
						<th>Action</th>
						{/if}
				{/foreach}
                      </tr>
                    </thead>
                    <tbody>
					{foreach from=$ListView item=View}
						{if $View.status eq '0'}
			<tr id="{$i++}">
			<td align="left"><a href="#" onClick="Javascript:viewCats('{$View.customer_id}')"><strike>{$i}</strike></a></td>
				<td align="left"><a href="#" onClick="Javascript:viewCats('{$View.customer_id}')"><strike>{$View.customer_id}</strike></a></td>
				<td align="left"><a href="#" onClick="Javascript:viewCats('{$View.customer_id}')"><strike>{$View.company_name}</strike></a></td>
				<td align="left"><a href="#" onClick="Javascript:viewCats('{$View.customer_id}')"><strike>{$View.mobile_no}</strike></a></td>
				<td align="left"><a href="#" onClick="Javascript:viewCats('{$View.customer_id}')"><strike>{$View.enquiry_through}</strike></a></td>
				<td align="left"><a href="#" onClick="Javascript:viewCats('{$View.customer_id}')"><strike>{$View.area}</strike></a></td>
				<td align="left"><a href="#" onClick="Javascript:viewCats('{$View.customer_id}')"><strike>{$View.mail_id}</strike></a></td>
				<td align="center">
					{foreach from=$RList item=roles}
	      			 {if $roles.role_name eq 'Edit Customer'}
				&nbsp;&nbsp; &nbsp;&nbsp;<a href="#" onClick="Javascript:repeatCats('{$View.customer_id}','{$View.sl_no}')"><i class="fa fa-reply-all"></i></a>
										   {/if}
					{/foreach}	 
					{foreach from=$RList item=roles}
				   {if $roles.role_name eq 'Delete Customer'}

				&nbsp;&nbsp; &nbsp;&nbsp;<a href="#" onClick="Javascript:repeatCats('{$View.customer_id}','{$View.sl_no}')"><i class="fa fa-lock"></i></a>
				{/if}
				{/foreach}</td>
			</tr>
						{else}
					 		<tr id="{$i++}">
							<td align="left"><a href="#" onClick="Javascript:viewCats('{$View.customer_id}')">{$i}</a></td>
								<td align="left"><a href="#" onClick="Javascript:viewCats('{$View.customer_id}')">{$View.customer_id}</a></td>
								<td align="left"><a href="#" onClick="Javascript:viewCats('{$View.customer_id}')">{$View.company_name}</a></td>
								<td align="left"><a href="#" onClick="Javascript:viewCats('{$View.customer_id}')">{$View.mobile_no}</a></td>
								<td align="left"><a href="#" onClick="Javascript:viewCats('{$View.customer_id}')">{$View.enquiry_through}</a></td>
								<td align="left"><a href="#" onClick="Javascript:viewCats('{$View.customer_id}')">{$View.area}</a></td>
								<td align="left"><a href="#" onClick="Javascript:viewCats('{$View.customer_id}')">{$View.mail_id}</a></td>
								
								<td align="center">
								{foreach from=$RList item=roles}
								{if $roles.role_name eq 'Edit Customer'}
								<a href="#" onClick="Javascript:editCats('{$View.customer_id}')"><i class="fa fa-edit"></i></a>&nbsp;&nbsp; &nbsp;&nbsp;
								{/if}
								{/foreach}	
								{foreach from=$RList item=roles}
								{if $roles.role_name eq 'Delete Customer'}
								<a href="#" onClick="Javascript:deleteCats('{$View.customer_id}')"><i class="fa fa-trash"></i></a>
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
      </div>
      <div class="control-sidebar-bg"></div>
{literal}

    <script>
      $(function () {
       
        $('#example1').DataTable({
          "paging": true,
          "lengthChange": true,
          "searching": true,
          "ordering": true,
          "info": true,
          "autoWidth": false,
        "scrollX": true
        });
      });
function deleteCats(CatIdent){
  if(confirm("Are you sure to Delete this Content?")){
  FormName		= document.customer_list;
  FormName.action= "customer_list.php?customer_id="+CatIdent;
  FormName.submit();
 }
 }
function repeatCats(x,y){
  if(confirm("Are you sure to Retrive this Content?")){
  FormName		= document.customer_list;
  FormName.action= "customer_list.php?customer_id="+x+"&retrive="+y;
  FormName.submit();
 }
 }
function editCats(CatIdent) {
   var cid = btoa(CatIdent);
   FormName		= document.customer_list;
   FormName.action ='customer_edit.php?customer_id='+cid;
   FormName.submit();
}
function viewCats(CatIdent) {
  var cid = btoa(CatIdent);
  FormName		= document.customer_list;
  FormName.action ='customer_detail_view.php?customer_id='+cid;
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
