{include file="left.tpl"}

 <body class="hold-transition skin-blue sidebar-mini">
  <div class="content-wrapper">
	<section class="content-header">
          <h4>
         <small><a href="project_order_list.php"><i class="fa fa-list"> <label style="font-family:Arial, Helvetica, sans-serif"> 
		 List Project Order</i></a></small>&ensp;&ensp;&ensp;
        <!-- <small><a href="project_quote_reg.php"><i class="fa fa-user-plus">
		 Create Project Quote</i></a></small>-->
		 </h4>
        </section>

        <!-- Main content -->
          <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                 <center> <h3 class="box-title">Project Order Lists</h3></center>
                </div><!-- /.box-header -->
                <div class="box-body">
				<form name="project_list" id="project_list" method="post">
                  <table id="example1" class="table table-bordered table-striped ">
                    <thead>
                      <tr>
					  <th>Sl No</th>
                        <th>Project Qoute No</th>
						<th>Project Order No</th>
                        <th>Revised Version</th>
                        <th>Company Name</th>
                        <th>Mobile No</th>
						<th>Area</th>
						<!--<th>Mail Id</th>-->
						<th>Print</th>
						<th>Email</th>
						 {foreach from=$RList item=roles}
						{if $roles.role_name eq 'Delete Project'}
						<th>Action</th>
						{/if}
						{/foreach}
                      </tr>
                    </thead>
                    <tbody>
                    {foreach from=$ListView item=View}
                      <tr id="{$i++}">
					  <td align="left"><a href="#" onClick="Javascript:viewCats('{$View.project_order_no}')">{$i}</a></td>
						<td align="left"><a href="#" onClick="Javascript:viewCats('{$View.project_order_no}')">{$View.project_quote_no}</a></td>
						<td align="left"><a href="#" onClick="Javascript:viewCats('{$View.project_order_no}')">{$View.project_order_no}</a></td>
						<td align="left"><a href="#" onClick="Javascript:viewCats('{$View.project_order_no}')">{$View.revised_version}</a></td>
						<td align="left"><a href="#" onClick="Javascript:viewCats('{$View.project_order_no}')">{$View.company_name}</a></td>
						<td align="left"><a href="#" onClick="Javascript:viewCats('{$View.project_order_no}')">{$View.mobile_no}</a></td>
						<td align="left"><a href="#" onClick="Javascript:viewCats('{$View.project_order_no}')">{$View.area}</a></td>
						<!--<td align="left"><a href="#" onClick="Javascript:viewCats('{$View.project_order_no}')">{$View.email_id}</a></td>-->
<td align="center"><a href="#" data-toggle="popover" data-content="<a href='reload2.php?project_order_no={$View.project_order_no}&amp;revised_version={$View.revised_version}&enquiry_id={$View.enquiry_id}&PPage=Original' target='_blank'>Original Print</a> <br><a href='reload2.php?project_order_no={$View.project_order_no}&amp;revised_version={$View.revised_version}&enquiry_id={$View.enquiry_id}&PPage=Duplicate' target='_blank'>Duplicate Print</a><br><a href='reload2.php?project_order_no={$View.project_order_no}&amp;revised_version={$View.revised_version}&enquiry_id={$View.enquiry_id}&PPage=Triplicate' target='_blank'>Triplicate Print</a><br><a href='reload2.php?project_order_no={$View.project_order_no}&amp;revised_version={$View.revised_version}&enquiry_id={$View.enquiry_id}&PPage=Quadruplicate' target='_blank'>Quadruplicate Print</a>"
  data-html="true"><i class="fa fa-print"></i></a></td>
	    <td align="center"><a href="#" data-toggle="modal" data-target="#ProjectMail{$View.revised_version}"  onClick="Popup();"><i class="fa fa-envelope"></i></a></td>
						{foreach from=$RList item=roles}
				   		{if $roles.role_name eq 'Delete Project'}
      <td align="lfet"><a href="#" onClick="Javascript:deleteCats('{$View.project_order_no}')"><i class="fa fa-trash"></i></a></td> 
	  	  				{/if}
						{/foreach}
					 </tr>
					 <div class="modal fade" id="ProjectMail{$View.revised_version}" role="dialog" style="top: 10px; left: -280px;">
							<div class="modal-dialog">
							<!-- Modal content-->
							<div class="modal-content" style="width:1100px;">
							<div class="modal-header" style="background-color:#00CCFF;">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title">Send Mail</h4>
							</div>
									<iframe height="850"  align="left" width="1100" id="ProjectMail"  src="./project_order_mail.php?revised_version={$View.revised_version}&project_quote_no={$View.project_quote_no}" style="border:1px;"></iframe>
							</div>
							</div>
							</div>
					{/foreach}
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
  if(confirm("Are you sure to Delete this Content?")){
  FormName		= document.project_list;
  FormName.action= "project_quote_list.php?project_order_no="+CatIdent;
  FormName.submit();
 }
 }

  function viewCats(CatIdent) {
  var proj_id = btoa(CatIdent);     
  FormName		= document.project_list;
  FormName.action ="project_quote_detail_view.php?project_order_no="+proj_id;          
  FormName.submit();

 }
 function PrintCats(CatIdent,CusIdent,FolIdent) {
  var enq_id = btoa(CatIdent);  
  var project_id = btoa(CusIdent); 
  var rev_id = btoa(FolIdent);   
  
 // alert(sales_id);
  FormName		= document.project_list;
  FormName.action ="project_order_print.php?enquiry_id="+enq_id+"&project_order_no="+project_id+"&revised_version="+rev_id;
  FormName.submit();

 }
 function Popup() 
{
	document.getElementById('ProjectMail').contentDocument.location.reload(true);
} 
    </script>
	{/literal}
  </body>

