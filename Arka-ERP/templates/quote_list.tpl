{include file="left.tpl"}
 <body class="hold-transition skin-blue sidebar-mini">
  <div class="content-wrapper">
	<section class="content-header">
        		<h4>
          <small><a href="quote_list.php"><i class="fa fa-list"> <label style="font-family:Arial, Helvetica, sans-serif">
			List Quotes</label></i></a></small>&ensp;&ensp;&ensp;
            <small><a href="quote_reg.php"><i class="fa fa-user-plus"> <label style="font-family:Arial, Helvetica, sans-serif">
			Create Quote</label></i></a></small>
		 </h4>

        </section>

        <!-- Main content -->
          <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box box-info">
                <div class="box-header">
                 <center><h3 class="box-title">Quote Lists</h3></center>
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
				<form name="quote_list" id="quote_list" method="post">
                  <table id="example1" class="table table-bordered table-striped ">
                    <thead>
                      <tr>
					  <th>Sl No</th>
                        <th>Quote Id</th>
						<th>Quote Status</th>
                        <th>Supplier Code</th>
                        <th>Supplier Company</th>
						<th>Contact Person</th>
						<!--<th>Print</th>-->
						<th>Mail</th>
						{foreach from=$RList item=roles}
						{if $roles.role_name eq 'Edit Quote'}
						<th>Action</th>
						{/if}
						{/foreach}
                      </tr>

                    </thead>
                    <tbody>
					{foreach from=$ListView5 item=View}
					 <tr id="{$i++}">
					 <td align="left"><a href="#" onClick="Javascript:viewCats('{$View.quote_id}')">{$i}</a></td>
								<td align="left"><a href="#" onClick="Javascript:viewCats('{$View.quote_id}')">{$View.quote_id}</a></td>
								<td align="left"><a href="#" onClick="Javascript:viewCats('{$View.quote_id}')">{$View.quote_status}</a></td>
								<td align="left"><a href="#" onClick="Javascript:viewCats('{$View.quote_id}')">{$View.supplier_code}</a></td>
								<td align="left"><a href="#" onClick="Javascript:viewCats('{$View.quote_id}')">{$View.supplier_company_name}</a></td>
								<td align="left"><a href="#" onClick="Javascript:viewCats('{$View.quote_id}')">{$View.contact_fname} &nbsp;&nbsp;{$View.contact_lname}</a></td>
								<!--<td align="left"><a href="#" onClick="Javascript:PrintCats('{$View.quote_id}','{$View.supplier_code}')" target="_blank"><i class="fa fa-print" ></i></a></td>-->
								<td align="left"><a href="#"  data-toggle="modal" data-target="#MailCats{$View.quote_id}" onClick="Popup();"><i class="fa fa-envelope"></i></a></td>
								
								<td align="left">
								{foreach from=$RList item=roles}
						{if $roles.role_name eq 'Edit Quote'}
								&nbsp;&nbsp; &nbsp;&nbsp;<a href="#" onClick="Javascript:editCats('{$View.quote_id}')"><i class="fa fa-edit"></i></a>{/if}
								{if $roles.role_name eq 'Delete Quote'}
								&nbsp;&nbsp; &nbsp;&nbsp;<a href="#" onClick="Javascript:deleteCats('{$View.quote_id}')"><i class="fa fa-trash"></i></a>
								{/if}
								{/foreach}
								</td> 
								
									<div class="modal fade" id="MailCats{$View.quote_id}" role="dialog" style="top: 10px; left: -280px;">
							<div class="modal-dialog">
							<!-- Modal content-->
							<div class="modal-content" style="width:1100px;">
							<div class="modal-header" style="background-color:#00CCFF;">
							<button type="button" class="close" data-dismiss="modal" onClick="window.location.reload();">&times;</button>
							<h4 class="modal-title">Send Mail</h4>
							</div>
							<iframe height="850px" width="100%" align="left" id="PoMail"  src="./quote_mail.php?quote_id={$View.quote_id}&supplier_code={$View.supplier_code}" style="border:1px;"></iframe>
							</div>
							</div>
							</div>
                    </tr>
					
              {/foreach}
                      </tr>
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
  FormName		= document.quote_list;
  FormName.action= "quote_list.php?quote_id="+CatIdent;
  FormName.submit();
 }
 }
function editCats(CatIdent) {
   var quot_id = btoa(CatIdent);
   FormName		= document.quote_list;
   FormName.action ='quote_edit.php?quote_id='+quot_id;          
   FormName.submit();
}

  function viewCats(CatIdent) {
   var quot_id = btoa(CatIdent);     
  FormName		= document.quote_list;
  FormName.action ='quote_detail_view.php?quote_id='+quot_id;          
  FormName.submit();

 }
 	  function Popup()
		{
    		document.getElementById('PoMail').contentDocument.location.reload(true);
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
    </script>
	{/literal}
  </body>

