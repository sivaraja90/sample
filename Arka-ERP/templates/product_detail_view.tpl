{include file="left.tpl"}
{literal}
	<script type="text/javascript" src='./dhtmlxMessage/codebase/dhtmlxmessage.js'></script>
	<script type='text/javascript' src='./auto-complete/jquery-1.3.2.js'></script>
	<script type='text/javascript' src='./auto-complete/jquery.metadata.js'></script>
	<script type='text/javascript' src='./auto-complete/jquery.auto-complete.js?<?= mktime() ?>'></script>
	<script type='text/javascript' src='./auto-complete/js.js?<?= mktime() ?>'></script>
	<link rel="stylesheet" href= "./codebase/skins/dhtmlxmessage_dhx_skyblue.css" type="text/css" media="all"/> 
	<link rel='stylesheet' type='text/css' href='auto-complete/jquery.auto-complete.css?<?= mktime() ?>' />
{/literal}
 <body class="hold-transition skin-blue sidebar-mini">
  <div class="content-wrapper">
	<section class="content-header">
          <h4>
            <small class="active"><a href="product_list.php"><i class="fa fa-list"> <label class="font" style="font-family:Arial, Helvetica, sans-serif">
List Products</label></i></a></small>&ensp;&ensp;&ensp;
            <small><a href="product_reg.php"><i class="fa fa-user-plus"> <label class="font" style="font-family:Arial, Helvetica, sans-serif">
Create Product</label></i></a></small>
          </h4>
          <ul class="breadcrumb">
            <li>Status : Active</li>
          </ul>
        </section>
        <!-- Main content -->
          <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box box-info">
                <div class="box-header">
				{foreach from=$ListMas item=View}
			    <table width="118%">
				<tr>
				 <td>Created :{$View.created_date}&nbsp;&nbsp;{$View.created_time}</td>
                  <td><h4 class="box-title">&nbsp;&nbsp;&nbsp;&nbsp;Product Detailed View</h4>
				 <h4>&nbsp;</h4></td>
				<td style="margin-left:-1000px;"> Modified :{$Date_Stamp.0.Date}&nbsp;&nbsp;{$Time_Stamp.0.Time}</td>
				</tr>
				</table>
				{/foreach}
				<form class="form-horizontal" name="product_detail">
				<input type="hidden" name="hdAction" />
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
				   {foreach from=$ListMas item=ListDet}	
				   <div class="col-md-6">
                    <div class="form-group">			 
                      <label class="col-sm-4  thick">Item Code</label>
                      <div class="col-sm-6">
                        {$ListDet.item_code}
                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-4  thick">Category</label>
                      <div class="col-sm-6">
						{$ListDet.item_category}
                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-4  thick">Description</label>
                      <div class="col-sm-6">
                       {$ListDet.item_description}
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4  thick">Consumer Basic</label>
                      <div class="col-sm-6">
                       {$ListDet.consumer_basic}
                      </div>
                    </div>
					{if $ListDet.features!=""}
					 <div class="form-group">
                      <label class="col-sm-4  thick">Features</label>
                      <div class="col-sm-6">
                        {$ListDet.features}
                      </div>
                    </div>
					{/if}
					{if $ListDet.dimensions!=""}
					 <div class="form-group">
                      <label class="col-sm-4  thick">Dimensions</label>
                      <div class="col-sm-6">
                        {$ListDet.dimensions}
                      </div>
                    </div>
					{/if}
					 <div class="form-group">
                      <label class="col-sm-4  thick">Total</label>
                      <div class="col-sm-6">
                        {$ListDet.total}
                      </div>
                    </div>
					{if $EditList.remarks !=""}
					<div class="form-group">
                      <label class="col-sm-4  thick">Remarks</label>
                      <div class="col-sm-6">
						{$ListDet.remarks}
                      </div>
                    </div>
					{/if}
					</div>
					<!--**********************************************************-->
                     <div class="col-md-6">
					 <div class="form-group">
                      <label class="col-sm-4  thick">Item Name</label>
                      <div class="col-sm-6">
						{$ListDet.item_name}
                      </div>
					  </div>
					<div class="form-group">
                      <label class="col-sm-4  thick">Category code</label>
                      <div class="col-sm-6">
                        {$ListDet.item_category_code}
                      </div>
                    </div>
					{if $EditList.item_color !=""}
					<div class="form-group">
                      <label class="col-sm-4  thick"> Item Color</label>
                      <div class="col-sm-6">
						{$ListDet.item_color}
                      </div>
                    </div>
					{/if}
                    <div class="form-group">			 
                      <label class="col-sm-4  thick">Baan Company</label>
                      <div class="col-sm-6">
						{$ListDet.baan_company}
                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-4  thick">Price Date</label>
                     <div class="col-sm-6">
                       {$ListDet.price_date}
                      </div>
                    </div> 
					<div class="form-group">
                      <label class="col-sm-4  thick">Wh</label>
                      <div class="col-sm-6">
						{$ListDet.ware_house}
                      </div>
                    </div>
					{if $ListDet.ed!=""}
					<div class="form-group">
                      <label class="col-sm-4  thick">ED</label>
                      <div class="col-sm-6">
                        {$ListDet.ed}		
                      </div>
                    </div>
					{/if}
					<div class="form-group" style="visibility:hidden">
                      <label class="col-sm-4  thick">Created By</label>
                      <div class="col-sm-6">
                       {$ListDet.created_by}
                      </div>
                    </div>
					</div>
                    </div>
					{/foreach}
					</form>
					</div>
					</div>
				<div class="clear"></div>
						<!-- /.box-header -->
                </div><!-- /.box-body -->
            </div><!-- /.col -->
          </div> <!-- /.row -->
        </section> <!-- /.content -->
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
</script>
<style>
	label,td.thick
	{
	font-weight: bold;
	}
	label.font
	{
	font-weight: normal;
	}
</style>
{/literal}
	</body>
   </html>