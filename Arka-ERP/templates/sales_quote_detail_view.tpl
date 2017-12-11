{include file="left.tpl"}
{literal}
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
	<link rel="stylesheet" href= "./codebase/skins/dhtmlxmessage_dhx_skyblue.css" type="text/css" media="all"/> 
	<link rel='stylesheet' type='text/css' href='auto-complete/jquery.auto-complete.css?<?= mktime() ?>' />
{/literal}

 <body class="hold-transition skin-blue sidebar-mini">
  <div class="content-wrapper">
	<section class="content-header">
          <h4>
            <small><a href="sales_quote_list.php"><i class="fa fa-list"> <label style="font-family:Arial, Helvetica, sans-serif">
List Sales Order</i></a></small>&ensp;&ensp;&ensp;
           <!-- <small><a href="sales_quote_reg.php"><i class="fa fa-user-plus">
Create Sales Quote</i></a></small>-->
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
				{foreach from=$created_Date item=View}
				<table width="118%">
				<tr>
				 <td>Created:{$View.created_date}&nbsp;&amp;&nbsp; {$View.created_time}</td>
                  <td><h4 class="box-title">&nbsp;&nbsp;&nbsp;&nbsp;Sales Order Detailed View</h4>
				 <h4>{$View.company_name}&nbsp;&nbsp;&nbsp;[{$View.sales_order_no}]</h4></td>
				<td style="margin-left:-1000px;"> Modified:{$Date_Stamp.0.Date}&nbsp;&amp;&nbsp;{$Time_Stamp.0.Time}</td>
				</tr>
				</table>
				{/foreach}
				<form class="form-horizontal">
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
				  {foreach from=$ListDetail item=EditList}
				   <div class="col-md-6">
                    <div class="form-group">			 
                      <label class="col-sm-4 control-label">Sales Quote No</label>
                      <div class="col-sm-6">
					{$EditList.sales_quote_no}
                      </div>
			          </div>
					 <div class="form-group">
                      <label class="col-sm-4 control-label">Item Type</label>
                      <div class="col-sm-6">
					    {$EditList.item_type}
                      </div>
					  </div>
                    
					</div>
					<!--**********************************************************-->
					    <div class="col-md-6">
						<div class="form-group">
                      <label class="col-sm-4 control-label">Quote Date</label>
                      <div class="col-sm-6">
						 {$EditList.quote_date}
                      </div>
					   </div>
						<div class="form-group">
                      <label class="col-sm-4 control-label">Sales Order Date</label>
                      <div class="col-sm-6">
						 {$EditList.sales_order_date}
                      </div>
					   </div>
					</div>
					{/foreach}
					</div>
					</form>
</div>
						<!-- /.box-header -->
                
				<div class="clear"></div>
				<div style="margin-top: 10px; margin-bottom: 10px;border: 0px;"><center>
							
							<input type="button" class="btn  btn-danger btn-xs" value="Add Follow Ups" data-toggle="modal" data-target="#Follow">&nbsp;&nbsp;
						
						  </center>
						  </div>
						  <div class="modal fade" id="Follow" role="dialog">
		<div class="modal-dialog">

			<div class="modal-content" style="width:765px;">
				<div class="modal-header" style="background-color:#00CCFF;">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Add Follow Ups</h4>
				</div>
					<iframe height="490px" width="100%" id="Follow"  src="./salesfollow.php?enquiry_id={$smarty.get.enquiry_id}" style="border:1px;"></iframe>
			</div>
		</div>
	</div>
	
	<!--******************************************************************************************************-->
	<div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#follow" data-toggle="tab">Follow Ups</a></li>
                </ul>
                <div class="tab-content">
                  <!-- Font Awesome Icons -->
                  <div class="tab-pane active" id="follow">
                    <form name="FollowList" id="FollowList" method="post">
                  <table id="example1" class="table table-bordered table-striped" style="font-size:13px; , Times, serif;">
									 
                    <thead>
                      <tr>
					 <!-- <th>S No</th>-->
					 <th><center>Sl.No</center></th>
						<th><center>Company Name</center></th>
                        <th><center>Customer Id</center></th>
                        <th><center> Sqft</center></th>
						<th><center>Material</center></th>
                        <th><center>Labour</center></th>
						<th><center>Action</center></th>
						
                      </tr>

                    </thead>
                    <tbody>	
					{foreach from=$ListDetail item=Contact}
					
					<tr id="{$i++}">
								<input type="hidden" value="{$Contact.sl_no}" />
								<input type="hidden" value="{$Contact.customer_id}" />
								<input type="hidden" value="{$Contact.enquiry_id}" />
								<input type="hidden" value="{$Contact.service_order_no}" />
								
								<td align="center"><a href="#" data-toggle="modal" data-target="#ViewContact{$Contact.service_order_no}">{$i}</a></td>
								<td align="center"><a href="#" data-toggle="modal" data-target="#ViewContact{$Contact.service_order_no}">{$Contact.company_name}</a></td>
								
								<!--<td align="center"><a href="#" data-toggle="modal" data-target="#ViewContact{$Contact.enquiry_id}">{if $Contact.snooze_date eq '0000-00-00'} NA {elseif $Contact.snooze_date neq '0000-00-00'}{$Contact.snooze_date}{/if}</a></td>-->
								<!--<td align="center"><a href="#" data-toggle="modal" data-target="#ViewContact{$Contact.enquiry_id}">{if $Contact.snooze_time eq '00:00:00'} NA {elseif $Contact.snooze_time  neq '00:00:00'}{$Contact.snooze_time}{/if}</a></td>
								
								<td align="center"><a href="#" data-toggle="modal" data-target="#ViewContact{$Contact.enquiry_id}">{if $Contact.closed_date eq '0000-00-00'} NA {elseif $Contact.closed_date neq '0000-00-00'}{$Contact.closed_date}{/if}</a></td>
								<td align="center"><a href="#" data-toggle="modal" data-target="#ViewContact{$Contact.enquiry_id}">{if $Contact.closed_time eq '00:00:00'} NA {elseif $Contact.closed_time neq '00:00:00'}{$Contact.closed_time}{/if}</a></td>-->
								<td align="center"><a href="#" data-toggle="modal" data-target="#ViewContact{$Contact.service_order_no}">{$Contact.customer_id}</a></td>
								<td align="center"><a href="#" data-toggle="modal" data-target="#ViewContact{$Contact.service_order_no}">{$Contact.sqft}</a></td>
								<td align="center"><a href="#" data-toggle="modal" data-target="#ViewContact{$Contact.service_order_no}">{$Contact.material}</a></td>
								<td align="center"><a href="#" data-toggle="modal" data-target="#ViewContact{$Contact.service_order_no}">{$Contact.labour}</a></td>
	<td class="center">&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" data-toggle="modal" data-target="#EditContact"><i class="fa fa-edit"></i></a>
						&nbsp;&nbsp; &nbsp;&nbsp;<a href="#" onClick="Javascript:deleteCat('{$Contact.sl_no}','{$Contact.service_order_no}')"><i class="fa fa-trash"></i></a></td>
						                    </tr>
					  {foreachelse}
					<tr>
								<td height="20" colspan="12" align="center"><img src="images/warning.gif" border="0">&nbsp;No Records Found</td>
					</tr>
					{/foreach}
					
              <div class="modal fade" id="ViewContact{$Contact.service_order_no}" role="dialog">
							<div class="modal-dialog">
							<!-- Modal content-->
							<div class="modal-content" style="width:700px;">
							<div class="modal-header" style="background-color:#00CCFF;">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title">View Followup</h4>
							</div>
									<iframe height="490px" width="100%" id="ViewContact"  src="./salesfollow_view.php?service_order_no={$Contact.service_order_no}" style="border:1px;"></iframe>
							</div>
							</div>
							</div>
							
							<div class="modal fade" id="EditContact" role="dialog">
							<div class="modal-dialog">
							<!-- Modal content-->
							<div class="modal-content" style="width:700px;">
							<div class="modal-header" style="background-color:#00CCFF;">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title">Edit Contact</h4>
							</div>
									<iframe height="490px" width="100%" id="EditContact"  src="./cus_edit.php?sl_no={$Contact.sl_no}" style="border:1px;"></iframe>
							</div>
							</div>
							</div>
							

					</tbody>
                    </tfoot>
                  </table><!-- /#ion-icons -->
				  </form>
				
				
                </div><!-- /.box-body -->
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
	  
    </script>
	{/literal}
  </body>
 </html>

