{include file="left.tpl"}

 <body class="hold-transition skin-blue sidebar-mini">
  <div class="content-wrapper">
	<section class="content-header">
          <h4>
            <small><a href="service_order_list.php"><i class="fa fa-list"> <label style="font-family:Arial, Helvetica, sans-serif">
			List Service Order</label></i></a></small>&ensp;&ensp;&ensp;
            <!--<small><a href="service_quote_reg.php"><i class="fa fa-user-plus">
			Create Service</i></a></small>-->
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
                  <center><h3 class="box-title">Service Order Lists</h3></center>
                </div><!-- /.box-header -->
                <div class="box-body">
				<form name="service_list" id="service_list" method="post">
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
                  <table id="example1" class="table table-bordered table-striped ">
                    <thead>
                      <tr>
					  <th>Sl No</th>
                        <th>Service Order No</th>
                        <th>Enquiry ID</th>
                        <th>Company Name</th>
						 <th>Area</th>
						<th>Mail ID</th>
						<th>Print</th>
						<th>Email</th>
						 {foreach from=$RList item=roles}
						{if $roles.role_name eq 'Delete Service'}
						<th>Action</th>
						{/if}
						{/foreach}
                      </tr>
                    </thead>
                    <tbody>
					{foreach from=$ListView item=View}
                        <tr id="{$i++}">
                        <td align="left"><a href="#" onClick="Javascript:viewCats('{$View.service_order_no}')">{$i}</a></td>
                        <td align="left"><a href="#" onClick="Javascript:viewCats('{$View.service_order_no}')">{$View.service_order_no}</a></td>
                        <td align="left"><a href="#" onClick="Javascript:viewCats('{$View.service_order_no}')">{$View.enquiry_id}</a></td>
                        <td align="left"><a href="#" onClick="Javascript:viewCats('{$View.service_order_no}')">{$View.company_name}</a></td>
                        <td align="left"><a href="#" onClick="Javascript:viewCats('{$View.service_order_no}')">{$View.area}</a></td>
						<td align="left"><a href="#" onClick="Javascript:viewCats('{$View.service_order_no}')">{$View.email_id}</a></td>
						
						 <td align="center"><a href="#" data-toggle="popover" data-content="<a href='reload1.php?service_order_no={$View.service_order_no}&amp;revised_version={$View.revised_version}&enquiry_id={$View.enquiry_id}&PPage=Original' target='_blank'>Original Print</a> <br><a href='reload1.php?service_order_no={$View.service_order_no}&amp;revised_version={$View.revised_version}&enquiry_id={$View.enquiry_id}&PPage=Duplicate' target='_blank'>Duplicate Print</a><br><a href='reload1.php?service_order_no={$View.service_order_no}&amp;revised_version={$View.revised_version}&enquiry_id={$View.enquiry_id}&PPage=Triplicate' target='_blank'>Triplicate Print</a><br><a href='reload1.php?service_order_no={$View.service_order_no}&amp;revised_version={$View.revised_version}&enquiry_id={$View.enquiry_id}&PPage=Quadruplicate' target='_blank'>Quadruplicate Print</a>"
  data-html="true"><i class="fa fa-print"></i></a></td>
					<td align="center"><a href="#" data-toggle="modal" data-target="#ServiceMail{$View.service_order_no}" onClick="Popup();"><i class="fa fa-envelope"></i></a></td>
					<td align="left">
						{foreach from=$RList item=roles}
				   		{if $roles.role_name eq 'Delete Service'}

								 &nbsp;&nbsp;<a href="#" onClick="Javascript:deleteCats('{$View.service_order_no}')"><i class="fa fa-trash"></i></a></td> 
						{/if}
						{/foreach}

								 <!--/.******************************Mail Service ************************************-->
							<div class="modal fade" id="ServiceMail{$View.service_order_no}" role="dialog" style="top: 10px; left: -280px;">
							<div class="modal-dialog">
							<!-- Modal content-->
							<div class="modal-content" style="width:1100px;">
							<div class="modal-header" id="ServiceMailQuoteHeader" style="background-color:#00CCFF;">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title">Send Mail</h4>
							</div>
							<iframe align="left" height="850" width="1100" id="EditProject"  src="./service_order_mail.php?service_order_no={$View.service_order_no}&service_quote_revise_no={$View.service_quote_revise_no}" style="border:1px;"></iframe>
							</div>
							</div>
							</div>
                      </tr>
					  
						
					  {/foreach}
					  
					 
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

<style>
.bs-example{
    	margin: 150px 50px;
    }
</style>

<script type="text/javascript">
$(document).ready(function(){
    $('[data-toggle="popover"]').popover({
        placement : 'right'
        
    });
});
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
  var serv_id = btoa(CatIdent); 
  if(confirm("Are you sure to Delete this Content?")){
  FormName		= document.service_list;
  FormName.action= "service_quote_list.php?service_order_no="+serv_id;
  FormName.submit();
 }
 }
  function viewCats(CatIdent) {
   var serv_id = btoa(CatIdent);    
  FormName		= document.service_list;
  FormName.action ='service_quote_detail_view.php?service_order_no='+serv_id;          
  FormName.submit();

 }

	function Popup() 
	{ 
		document.getElementById('EditProject').contentDocument.location.reload(true);
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
