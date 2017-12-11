{include file="left.tpl"}
 <body class="hold-transition skin-blue sidebar-mini">
  <div class="content-wrapper">
	<section class="content-header">
		<h4>
        <small><a href="po_list.php"><i class="fa fa-list"> <label style="font-family:Arial, Helvetica, sans-serif">
		List PO</label></i></a></small>&ensp;&ensp;&ensp;
		<small><a href="po_reg.php"><i class="fa fa-user-plus"> <label style="font-family:Arial, Helvetica, sans-serif">
		Create PO</label></i></a></small>
		</h4>

        </section>

        <!-- Main content -->
          <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box box-info">
                <div class="box-header">
                  <center><h3 class="box-title">Po Lists</h3></center>
                </div>

				<!-- /.box-header -->
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
				<form name="po_list" id="po_list" method="post">
					  <table id="example1" class="table table-bordered table-striped ">
                    <thead>
                      <tr>
					  <th>Sl No</th>
                        <th>PO No</th>
						<th>Contact Person</th>
                        <th>Company Name</th>
						<th>Supplier Code</th>
						<th>PO Status</th>
						<th>Print</th>
						<th>Mail</th>
						{foreach from=$RList item=roles}
						{if $roles.role_name eq 'Edit Po'}
						<th>Action</th>
						{/if}
						{/foreach}
                      </tr>

                    </thead>
                    <tbody>           
					{foreach from=$ListView item=View}
					 <tr id="{$i++}">
					 <td align="left"><a href="#" onClick="Javascript:viewCats('{$View.po_no}')">{$i}</a></td>
								<td align="left"><a href="#" onClick="Javascript:viewCats('{$View.po_no}')">{$View.po_no}</a></td>
								<td align="left"><a href="#" onClick="Javascript:viewCats('{$View.po_no}')">{$View.salutation}&nbsp;{$View.contact_person}</a></td>
								<td align="left"><a href="#" onClick="Javascript:viewCats('{$View.po_no}')">{$View.supplier_company_name}</a></td>
								<td align="left"><a href="#" onClick="Javascript:viewCats('{$View.po_no}')">{$View.supplier_code}</a></td>
								<td align="left"><a href="#" onClick="Javascript:viewCats('{$View.po_no}')">{$View.po_status}</a></td>
   								<td align="left"><a href="#" onClick="Javascript:PrintCats('{$View.po_no}','{$View.supplier_code}')" target="_blank"><i class="fa fa-print" ></i></a></td>
								<td align="left"><a href="#"  data-toggle="modal" data-target="#MailCats{$View.po_no}" onClick="Popup();"><i class="fa fa-envelope"></i></a></td>
								
								<td align="left">
								{foreach from=$RList item=roles}
						{if $roles.role_name eq 'Edit Po'}
								&nbsp;&nbsp; &nbsp;&nbsp;<a href="#" onClick="Javascript:editCats('{$View.po_no}')"><i class="fa fa-edit"></i></a>{/if}
								{if $roles.role_name eq 'Delete Po'}
								&nbsp;&nbsp; &nbsp;&nbsp;<a href="#" onClick="Javascript:deleteCats('{$View.po_no}')"><i class="fa fa-trash"></i></a>
								{/if}
								{/foreach}
								</td> 
                               </tr>
							<div class="modal fade" id="MailCats{$View.po_no}" role="dialog" style="top: 10px; left: -280px;">
							<div class="modal-dialog">
							<!-- Modal content-->
							<div class="modal-content" style="width:1100px;">
							<div class="modal-header" style="background-color:#00CCFF;">
							<button type="button" class="close" data-dismiss="modal" onClick="window.location.reload();">&times;</button>
							<h4 class="modal-title">Send Mail</h4>
							</div>
							<iframe height="850px" width="100%" align="left" id="PoMail"  src="./po_mail.php?po_no={$View.po_no}&supplier_code={$View.supplier_code}" style="border:1px;"></iframe>
							</div>
							</div>
							</div>
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
  FormName		= document.po_list;
  FormName.action= "po_list.php?po_no="+CatIdent;
  FormName.submit();
 }
 }
function editCats(CatIdent) {
   var po_id = btoa(CatIdent);  
   FormName		= document.po_list;
  FormName.action ='po_edit.php?po_no='+po_id;          
  FormName.submit();
}
function MailCats(PoIdent,subCode) {
  
   FormName		= document.po_list;
  FormName.action ='po_mail.php?po_no='+PoIdent+'&vendor_id='+subCode;          
  FormName.submit();
}
function PrintCats(PoIdent,subCode) {
   var po_id = btoa(PoIdent);  
   var v_id = btoa(subCode);  
   FormName		= document.po_list;
  FormName.action ='po_print.php?po_no='+po_id+'&vendor_id='+v_id;          
  FormName.submit();
}
	  function Popup()
		{
    		document.getElementById('PoMail').contentDocument.location.reload(true);
		} 
  function viewCats(CatIdent) {
	 var po_id = btoa(CatIdent);    
  	 FormName		= document.po_list;
  	 FormName.action ='po_detail_view.php?po_no='+po_id;          
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

