{include file="left.tpl"}
 <body class="hold-transition skin-blue sidebar-mini">
  <div class="content-wrapper">
	<section class="content-header">
          <h4>
         <small  class="active"><a href="#"><i class="fa fa-list">
		 List Sales Quote</i></a></small>&ensp;&ensp;&ensp;
         <small><a href="sales_quote_reg.php"><i class="fa fa-user-plus">
		 Create Sales Quote</i></a></small>
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
              <div class="box">
                <div class="box-header">
                 <center> <h3 class="box-title">Sales Quote Lists</h3></center>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped ">
                    <thead>
                      <tr>
                        <th>Sales Qoute No</th>
                        <th>Revised No</th>
                        <th>Company Name</th>
						<th>Contact Person</th>
                        <th>Mobile No</th>
						<th>Area</th>
						<th>Mail Id</th>
						<th>Action</th>
						
                      </tr>

                    </thead>
                    <tbody>
					
                    {foreach from=$ListView item=View}
                      <tr>
					  <td align="center"><a href="#" onClick="Javascript:viewCats('{$View.sales_quote_no}')">{$View.sales_quote_no}</a></td>
								<td align="center"><a href="#" onClick="Javascript:viewCats('{$View.sales_quote_no}')">{$View.revised_no}</a></td>
								<td align="center"><a href="#" onClick="Javascript:viewCats('{$View.sales_quote_no}')">{$View.company_name}</a></td>
								<td align="center"><a href="#" onClick="Javascript:viewCats('{$View.sales_quote_no}')">{$View.contact_person}</a></td>
								<td align="center"><a href="#" onClick="Javascript:viewCats('{$View.vendor_id}')">{$View.mobile_no}</a></td>
								<td align="center"><a href="#" onClick="Javascript:viewCats('{$View.sales_quote_no}')">{$View.area}</a></td>
								<td align="center"><a href="#" onClick="Javascript:viewCats('{$View.sales_quote_no}')">{$View.email_id}</a></td>
								<td class="center"><a href="#" onClick="Javascript:editCats('{$View.sales_quote_no}')"><i class="fa fa-edit"></i></a>
								&nbsp;&nbsp; &nbsp;&nbsp;<a href="#" onClick="Javascript:deleteCats('{$View.sales_quote_no}')"><i class="fa fa-trash"></i></a></td> 
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
  FormName		= document.quote_list;
  FormName.action= "sales_quote_list.php?sales_quote_no="+CatIdent;
  FormName.submit();
 }
 }
function editCats(CatIdent) 
{
 
   FormName		= document.quote_list;
    FormName.action ="sales_quote_edit.php?sales_quote_no="+CatIdent; 
  FormName.submit();
}
  
  function viewCats(CatIdent) {
    
  FormName		= document.quote_list;
  FormName.action ="sales_quote_detail_view.php?sales_quote_no="+CatIdent;          
  FormName.submit();

 }
    </script>
	{/literal}
  </body>

