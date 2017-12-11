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
	label,td.thick
{
font-weight:bold;
}
label.font
{
font-weight: normal;
}
</style>
<script type="text/javascript" src='./dhtmlxMessage/codebase/dhtmlxmessage.js'></script>
	<!--<script type='text/javascript' src='./auto-complete/jquery-1.3.2.js'></script>-->
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
            <small class="active"><a href="po_list.php"><i class="fa fa-list"> <label class="font" style="font-family:Arial, Helvetica, sans-serif">
List Po</label></i></a></small>&ensp;&ensp;&ensp;
            <small><a href="po_reg.php"> <i class="fa fa-user-plus"> <label class="font" style="font-family:Arial, Helvetica, sans-serif">
Create Po</label></i></a></small>

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
				{foreach from=$ListViews item=View}
				<table width="113%">
				<tr>
				 <td>Created:{$View.created_date}&nbsp;&nbsp;{$View.created_time}</td>
                  <td><!--<h4 class="box-title">&nbsp;&nbsp;&nbsp;&nbsp;PO Detailed View</h4>-->
				 <h4>{$View.supplier_company_name}&nbsp;[{$View.po_no}]</h4></td>
				<td style="margin-left:-1000px;"> Modified:{$Date_Stamp.0.Date}&nbsp;&nbsp;{$Time_Stamp.0.Time}</td>
				</tr>
				</table>
				{/foreach}

				<form class="form-horizontal" id="detail_view_po" name="detail_view_po">
				<input type="hidden" name="hdAction" />

				  {foreach from=$ListViews item=EditList}
				  <div class="box-body">
				   <div class="col-md-6">
					<div class="form-group">
                      <label class="col-sm-4 thick">PO Status</label>
                      <div class="col-sm-6">
                       {$EditList.po_status}
                      </div>
					  </div>

					 <div class="form-group">
                      <label class="col-sm-4 thick">Contact Person</label>
                      <div class="col-sm-6">
					 {$EditList.salutation}&nbsp;{$EditList.contact_person}
					  </div>
					  </div>

				<div class="form-group">
                      <label class="col-sm-4 thick">Quote Refer Id</label>
                      <div class="col-sm-6">
                        {$EditList.quote_ref_id}
                      </div>
					  </div>

					  <div class="form-group">
                      <label class="col-sm-4 thick">Supplier Name</label>
                      <div class="col-sm-6">
                        {$EditList.supplier_company_name}
                      </div>
					  </div>

					    {if $EditList.deliver_to neq ""}
					    <div class="form-group">
                      <label class="col-sm-4 thick">Deliver To</label>
                        <div class="col-sm-6">
						{$EditList.deliver_to}
                      </div>
					   </div>
					   {/if}

					   {if $EditList.supplier_mobile_no!=0 AND $EditList.supplier_mobile_no!=""}
					<div class="form-group">
                      <label class="col-sm-4 thick">Mobile No </label>
                      <div class="col-sm-6">
                        {$EditList.supplier_mobile_no}
                      </div>
                    </div>
					{/if}

					 {if $EditList.phone_no neq "" AND $EditList.phone_no neq "0" }
					    <div class="form-group">
                      <label class="col-sm-4 thick">Phone No</label>
                        <div class="col-sm-6">
						{$EditList.area_code} &nbsp;{$EditList.phone_no}&nbsp;{$EditList.extension}
                      </div>
					   </div>
					   {/if}

					<div class="form-group">
                      <label class="col-sm-4 thick">Address</label>
                      <div class="col-sm-6">
                       {$EditList.supplier_address}
                      </div>
					  </div>

					  {if $EditList.supplier_address1 neq ""}
					  <div class="form-group">
                      <label class="col-sm-4 thick">Address1</label>
                      <div class="col-sm-6">
                        {$EditList.supplier_address1}
                      </div>
					  </div>
					  	 {/if}


                   	</div>
					<!--**********************************************************-->
                      <div class="col-md-6">
					  <div class="form-group">
                      <label class="col-sm-4 thick">PO Date</label>
                      <div class="col-sm-6">
                       {$EditList.po_date}
					   </div>
                    </div>

					<div class="form-group">
                      <label class="col-sm-4 thick">Quote Date</label>
                       <div class="col-sm-6">
                        {$EditList.quote_date}
                      </div>
                    </div>

					<div class="form-group">
                      <label class="col-sm-4 thick">Supplier Code</label>
                      <div class="col-sm-6">
                        {$EditList.supplier_code}
                      </div>
					  </div>

					  {if $EditList.supplier_email neq ""}
					<div class="form-group">
                      <label class="col-sm-4 thick">Supplier Mail Id</label>
                        <div class="col-sm-6">
                  {$EditList.supplier_email}
                      </div>
					   </div>
					   {/if}

					   {if $EditList.payment_status neq ""}
					<div class="form-group">
                      <label class="col-sm-4 thick">Payment Status</label>
                        <div class="col-sm-6">
                  {$EditList.payment_status}
                      </div>
					   </div>
					   {/if}

					   {if $EditList.area neq ""}
					   <div class="form-group">
                      <label class="col-sm-4 thick">Area</label>
                        <div class="col-sm-6">
                  {$EditList.area}
                      </div>
					   </div>
					   {/if}

					   <div class="form-group">
                      <label class="col-sm-4 thick">City</label>
                        <div class="col-sm-6">
                  {$EditList.city}
                      </div>
					   </div>

						 <div class="form-group">
                      <label class="col-sm-4 thick">Pincode</label>
                      <div class="col-sm-6">
                        {$EditList.pincode}
                      </div>
					  </div>

					   <div class="form-group">
                      <label class="col-sm-4 thick">Created By</label>
                      <div class="col-sm-6">
						{$EditList.created_by}
                      </div>
                    </div>

					</div>
                    </div>
					{/foreach}
					<div class="clear"></div>

				<div style="margin-top: 10px; margin-bottom: 10px;border: 0px;">
				<center>
	         <input type="button" class="btn  btn-danger btn-xs" value="Add Follow Ups" data-toggle="modal" data-target="#Follow" >
			 {foreach from=$Deltype item=View}
			  {if $View.deliver_to eq 'Others'}
			&nbsp;<input type="button" class="btn  btn-danger btn-xs" value="Add Address" data-toggle="modal" data-target="#Address">
				{/if}
				{/foreach}
				</center>
				</div>

				<div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#product" data-toggle="tab">Product</a></li>
                  <li><a href="#follow_up" data-toggle="tab">Follow Ups</a></li>
				  <li><a href="#address_detail" data-toggle="tab">Delivery Address</a></li>
                </ul>
				<div class="tab-content">
					<div class="tab-pane active" id="product">
				<form name="ProductList" id="ProductList" >
				<input type="hidden" id="sl_no" name="sl_no" value="{$sl_no}">
                  <table id="example1" class="table table-bordered table-striped" style="font-size:13px;, Times, serif;">
                    <thead>
					<tr>
					            <th><center>Sl No</center></th>
								<th><center>Item Code</center></th>
								<th><center>Item Name</center> </th>
								<th><center>Item Type</center></th>
								<th><center>Item Spec</center></th>
								<th><center>Quantity</center></th>

					</tr>
                    </thead>
                    <tbody>
                     		{foreach from=$ListView1 item=details_list}
					 	<tr id="{$i++}">
						<input type="hidden" value="{$details_list.sl_no}" />
								<input type="hidden" value="{$details_list.sl_no}" />
					            <td align="center"><a href="#"  data-toggle="modal" data-target="#Product{$details_list.sl_no}">{$i}</a></td>
								<td align="center"><a href="#"  data-toggle="modal" data-target="#Product{$details_list.sl_no}">{$details_list.item_code}</a></td>
								<td align="center"><a href="#"  data-toggle="modal" data-target="#Product{$details_list.sl_no}">{$details_list.item_name}</a></td>
								<td align="center"><a href="#"  data-toggle="modal" data-target="#Product{$details_list.sl_no}">{$details_list.item_type}</a></td>
								<td align="center"><a href="#"  data-toggle="modal" data-target="#Product{$details_list.sl_no}">{$details_list.item_specification}</a></td>
								<td align="center"><a href="#"  data-toggle="modal" data-target="#Product{$details_list.sl_no}">{$details_list.item_quantity}</a></td>
									<!--********************************* Po Product Detail ************************************************ -->
	  <div class="modal fade" id="Product{$details_list.sl_no}" role="dialog">
		<div class="modal-dialog">

			<div class="modal-content" style="width:765px;">
				<div class="modal-header" style="background-color:#00CCFF;">
					<button type="button" class="close" data-dismiss="modal" onClick="window.location.reload();">&times;</button>
					<h4 class="modal-title">Product Detail</h4>
				</div>
					<iframe height="490px" width="100%" id="Product"  src="./po_pro_detail.php?po_no={$details_list.po_no}&sl_no={$details_list.sl_no}" style="border:1px;"></iframe>
			</div>
		</div>
	</div>



                    </tr>
					 {foreachelse}
					<tr>
								<td height="20" colspan="12" align="center"><img src="images/warning.gif" border="0">&nbsp;No Records Found</td>
					</tr>
					{/foreach}
					</tbody>
                  </table>
				 </form>
				 </div>
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


                    <div class="tab-pane" id="follow_up">
				<form name="FollowList" id="FollowList">
				<input type="hidden" id="" name="" value="">
                  <table id="example2" class="table table-bordered table-striped" style="font-size:13px;, Times, serif;">
                    <thead>
					<tr>
					            <th><center>Sl No</center></th>
								<th><center>Po Status</center></th>
								<th><center>Po No</center> </th>
								<th><center>Po Date</center></th>
								<th><center>Created Date & Time</center></th>
								<th><center>Remarks</center></th>
								<th><center>Created By</center></th>
								<th><center>Timestamp</center></th>
					</tr>
                    </thead>
                    <tbody>
                     		{foreach from=$Foltype item=details_list}
					 	<tr id="{$j++}">
						<input type="hidden" value="{$details_list.sl_no}" />
								<input type="hidden" value="{$details_list.sl_no}" />
					            <td align="center"><a href="#"  data-toggle="modal" data-target="#RevSales{$details_list.sl_no}">{$j}</a></td>
								<td align="center"><a href="#"  data-toggle="modal" data-target="#RevSales{$details_list.sl_no}">{$details_list.po_status}</a></td>
								<td align="center"><a href="#"  data-toggle="modal" data-target="#RevSales{$details_list.sl_no}">{$details_list.po_no}</a></td>
								<td align="center"><a href="#"  data-toggle="modal" data-target="#RevSales{$details_list.sl_no}">{$details_list.po_date}</a></td>
								<td align="center"><a href="#"  data-toggle="modal" data-target="#RevSales{$details_list.sl_no}">{$details_list.created_date}&amp;	{$details_list.created_time}</a></td>
								<td align="center"><a href="#"  data-toggle="modal" data-target="#RevSales{$details_list.sl_no}">{$details_list.remarks}</a></td>
								<td align="center"><a href="#"  data-toggle="modal" data-target="#RevSales{$details_list.sl_no}">{$details_list.created_by}</a></td>
								<td align="center"><a href="#"  data-toggle="modal" data-target="#RevSales{$details_list.sl_no}">{$details_list.timestamp_value}</a></td>

                    </tr>
					 {foreachelse}
					<tr>
								<td height="20" colspan="12" align="center"><img src="images/warning.gif" border="0">&nbsp;No Records Found</td>
					</tr>
					{/foreach}
					</tbody>
                  </table>
				 </form>
				 </div>
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


                  <div class="tab-pane" id="address_detail">
				<form name="AddressList" id="AddressList" >
				<input type="hidden" id="" name="" value="">
                  <table id="example2" class="table table-bordered table-striped" style="font-size:13px;, Times, serif;">
                    <thead>
					<tr>
					            <th><center>Sl No</center></th>
								<th><center>Address</center></th>
								<th><center>Address1</center> </th>
								<th><center>Area</center></th>
								<th><center>City</center></th>
								<th><center>Pincode</center></th>

					</tr>
                    </thead>
                    <tbody>
                     		{foreach from=$Deltype item=details_list}
					 	<tr id="{$k++}">
						<input type="hidden" value="{$details_list.sl_no}" />
								<input type="hidden" value="{$details_list.sl_no}" />
					            <td align="center"><a href="#"  data-toggle="modal" data-target="#RevSales{$details_list.sl_no}">{$k}</a></td>
								<td align="center"><a href="#"  data-toggle="modal" data-target="#RevSales{$details_list.sl_no}">{$details_list.supplier_address}</a></td>
								<td align="center"><a href="#"  data-toggle="modal" data-target="#RevSales{$details_list.sl_no}">{$details_list.supplier_address1}</a></td>
								<td align="center"><a href="#"  data-toggle="modal" data-target="#RevSales{$details_list.sl_no}">{$details_list.area}</a></td>
								<td align="center"><a href="#"  data-toggle="modal" data-target="#RevSales{$details_list.sl_no}">{$details_list.city}</a></td>
								<td align="center"><a href="#"  data-toggle="modal" data-target="#RevSales{$details_list.sl_no}">{$details_list.pincode}</a></td>

                    </tr>
					 {foreachelse}
					<tr>
								<td height="20" colspan="12" align="center"><img src="images/warning.gif" border="0">&nbsp;No Records Found</td>
					</tr>
					{/foreach}					</tbody>
                  </table>
				 </form>
				  </div>
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

				 </div>
				 </div>
					</form>

				

				 </div><!--/.box-header-->
                </div><!-- /.box-info -->
            </div> <!-- /.col -->
          </div> <!-- /.row -->
        </section> <!-- /.content -->
      </div><!-- /.content-wrapper -->
            <!-- Control Sidebar -->
      <!-- /.control-sidebar -->
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"> </div>
	  <!--********************************* Follow Up ************************************************ -->
	  <div class="modal fade" id="Follow" role="dialog">
		<div class="modal-dialog">

			<div class="modal-content" style="width:765px;">
				<div class="modal-header" style="background-color:#00CCFF;">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Add Follow Ups</h4>
				</div>
					<iframe height="490px" width="100%" id="Follow"  src="./po_followup.php?po_no={$smarty.get.po_no}" style="border:1px;"></iframe>
			</div>
		</div>
	</div>
<!--********************************* Address ************************************************ -->
	  <div class="modal fade" id="Address" role="dialog">
		<div class="modal-dialog">

			<div class="modal-content" style="width:765px;">
				<div class="modal-header" style="background-color:#00CCFF;">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Delivery Address</h4>
				</div>
					<iframe height="490px" width="100%" id="Address"  src="./address.php?po_no={$smarty.get.po_no}" style="border:1px;"></iframe>
			</div>
		</div>
	</div>

  </body>
