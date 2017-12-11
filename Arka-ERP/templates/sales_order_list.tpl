{include file="left.tpl"}
 <body class="hold-transition skin-blue sidebar-mini">
  <div class="content-wrapper">
	<section class="content-header">
          <h4>
         <small  class="active"><a href="sales_quote_list.php"><i class="fa fa-list"> <label style="font-family:Arial, Helvetica, sans-serif">
		 List Sales Order</label></i></a></small>&ensp;&ensp;&ensp;
         </h4>
         </section>

        <!-- Main content -->
          <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                 <center> <h3 class="box-title">Sales Order Lists</h3></center>
                </div><!-- /.box-header -->
                <div class="box-body">
				<form name="sales_quote_list" id="sales_quote_list" method="post">
                  <table id="example1" class="table table-bordered table-striped ">
                    <thead>
                      <tr>
					  <th>Serial No</th>
            <th>Sales order No</th>
            <th>Revised Version</th>
            <th>Sales Quote No</th>
						<th>Contact Person</th>
            <th>Mobile No</th>
						<th>Area</th>
						<th>Print</th>
						<th>Email</th>
						<th>Action</th>

                      </tr>
                    </thead>
                    <tbody>

                    {foreach from=$ListView item=View}
                      <tr>
					  			<td align="left"><a href="#" onClick="Javascript:viewCats('{$View.sl_no}')">{$View.sl_no}</a></td>
					            <td align="left"><a href="#" onClick="Javascript:viewCats('{$View.sales_order_no}')">{$View.sales_order_no}</a></td>
								<td align="left"><a href="#" onClick="Javascript:viewCats('{$View.sales_order_no}')">{$View.sales_quote_revise_no}</a></td>
								<td align="left"><a href="#" onClick="Javascript:viewCats('{$View.sales_order_no}')">{$View.sales_quote_no}</a></td>
								<td align="left"><a href="#" onClick="Javascript:viewCats('{$View.sales_order_no}')">{$View.customer_name}</a></td>
								<td align="left"><a href="#" onClick="Javascript:viewCats('{$View.sales_order_no}')">{$View.mobile_no}</a></td>
								<td align="left"><a href="#" onClick="Javascript:viewCats('{$View.sales_order_no}')">{$View.area}</a></td>
               <td align="center"><a href="#" data-toggle="popover" data-content="<a href='reload.php?sales_order_no={$view.sales_order_no}&amp;revised_version={$view.revised_version}&enquiry_id={$view.enquiry_id}&PPage=Orginal'>Original Print</a> <br><a href='reload.php?sales_order_no={$view.sales_order_no}&amp;revised_version={$view.revised_version}&enquiry_id={$view.enquiry_id}&PPage=Duplicate'>Duplicate Print</a><br><a href='reload.php?sales_order_no={$view.sales_order_no}&amp;revised_version={$view.revised_version}&enquiry_id={$view.enquiry_id}&PPage=Triplicate'>Triplicate Print</a><br><a href='reload.php?sales_order_no={$view.sales_order_no}&amp;revised_version={$view.revised_version}&enquiry_id={$view.enquiry_id}&PPage=Quadruplicate'>Quadruplicate Print</a>"
  data-html="true"><i class="fa fa-print"></i></a></td>
                <td align="center"><a href="#" data-toggle="modal" data-target="#SalesMail('{$View.customer_id}','{$View.sales_quote_revise_no}')"><i class="fa fa-envelope"></i></a></td>
								<td align="left"><a href="#" onClick="Javascript:deleteCats('{$View.sales_order_no}')"><i class="fa fa-trash"></i></a></td>


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

	   function deleteCats(CatIdent){  alert(CatIdent); exit;
  if(confirm("Are you sure to Delete this Content?")){
  FormName		= document.sales_quote_list;
  FormName.action= "sales_quote_list.php?sales_order_no="+CatIdent;
  FormName.submit();
 }
 }
function editCats(CatIdent)
{
   FormName		= document.sales_quote_list;
    FormName.action ="sales_quote_edit.php?sales_order_no="+CatIdent;
  FormName.submit();
}

  function viewCats(CatIdent) {
    var order_id = btoa(CatIdent);
  FormName		= document.sales_quote_list;
  FormName.action ="sales_detail_view.php?sales_order_no="+order_id;
  FormName.submit();

 }
    </script>
	<script type="text/javascript" src='./dhtmlxMessage/codebase/dhtmlxmessage.js'></script>
<!--<script type='text/javascript' src='./auto-complete/jquery-1.3.2.js'></script>
--><script type='text/javascript' src='./auto-complete/jquery.metadata.js'></script>
<script type='text/javascript' src='./auto-complete/jquery.auto-complete.js?<?= mktime() ?>'></script>
<script type='text/javascript' src='./auto-complete/js.js?<?= mktime() ?>'></script>
<link rel="stylesheet" href= "./codebase/skins/dhtmlxmessage_dhx_skyblue.css" type="text/css" media="all"/>
<link rel='stylesheet' type='text/css' href='auto-complete/jquery.auto-complete.css?<?= mktime() ?>' />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('[data-toggle="popover"]').popover({
        placement : 'right'
        
    });
});
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
	label,td.thick
{
font-weight:bold;
}
label.thin
{
font-weight:normal;
}
.bs-example{
    	margin: 150px 50px;
    }
</style>
	{/literal}
  </body>
