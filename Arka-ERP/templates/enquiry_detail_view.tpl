
{include file="left.tpl"}
{literal}
<script type="text/javascript" src='./dhtmlxMessage/codebase/dhtmlxmessage.js'></script>
<!--<script type='text/javascript' src='./auto-complete/jquery-1.3.2.js'></script>
--><script type='text/javascript' src='./auto-complete/jquery.metadata.js'></script>
<script type='text/javascript' src='./auto-complete/jquery.auto-complete.js?<?= mktime() ?>'></script>
<script type='text/javascript' src='./auto-complete/js.js?<?= mktime() ?>'></script>
<link rel="stylesheet" href= "./codebase/skins/dhtmlxmessage_dhx_skyblue.css" type="text/css" media="all"/>
<link rel='stylesheet' type='text/css' href='auto-complete/jquery.auto-complete.css?<?= mktime() ?>' />
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
</style>
<script>
function Assign1() {
var as = document.getElementById('assign_to').value;
var a2 = as.toLowerCase();
document.getElementById('assign_to').value = a2;
}
</script>
<script>
function validate(data)
     {
			var accept = document.getElementById("accept");
			if( accept.value == "Reassign")
			{
				document.getElementById("assign_to").style.display = "inherit";
			}
			  else
			  {
			  FormName		= document.EnqDet;
  			  FormName.method	= "POST";
              FormName.submit();
			  return true;
			  }
		}
		function reassign(data)
        {
			  var assign = document.getElementById("assign_to").value;
			  FormName		= document.EnqDet;
  			  FormName.method	= "POST";
              FormName.submit();
		}
function Assign() {
var as = document.getElementById('assign_to').value;
var a2 = as.toLowerCase();
document.getElementById('assign_to').value = a2;
}
</script>
{/literal}
 <body class="hold-transition skin-blue sidebar-mini">
  <div class="content-wrapper">
	<section class="content-header">

          <h4>
            <small><a href="enquiry_list.php"><i class="fa fa-list"> <label class="thin" style="font-family:Arial, Helvetica, sans-serif">
List Enquiries</label></i></a></small>&ensp;&ensp;&ensp;
            <small><a href="enquiry_reg.php"><i class="fa fa-user-plus"> <label class="thin" style="font-family:Arial, Helvetica, sans-serif">
Create Enquriy</label></i></a></small>
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
				 {foreach from=$ListEdit item=Edit}
				<table width="113%">
				<tr>
				 <td>Created:{$Edit.created_date}&nbsp;&nbsp;{$Edit.created_time}</td>
				 <td><h4>{$Edit.company_name}[{$Edit.enquiry_id}]</h4></td><td>Modified:{$Edit.timestamp_value}</td>
				 </tr>
				 </table>
					{/foreach}
					 {foreach from=$ListEdit item=Edit}
				<form class="form-horizontal" name="EnqDet">
				<input type="hidden" name="hdAction" />
				   <div class="box-body">
				   <div class="col-md-6">
                    <div class="form-group">
                      <label class="col-sm-4 thick">Customer Id</label>
                      <div class="col-sm-6">
                       {$Edit.customer_id}
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 thick">Enquiry Through</label>
                      <div class="col-sm-6">
                        {$Edit.enquiry_through}
                      </div>
                    </div>
					 <div class="form-group">
                      <label class="col-sm-4 thick">Created By</label>
                      <div class="col-sm-6">
                        {$Edit.created_by}
                      </div>
                    </div>
		     		 <div class="form-group">
                      <label class="col-sm-4 thick">Enquiry Type</label>
                      <div class="col-sm-6">
                        {$Edit.enquiry_type}
                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-4 thick">Arka Group</label>
                      <div class="col-sm-6">
                        {$Edit.arka_group}
                      </div>
                    </div>
					</div>
					<div class="col-md-6">
					 <div class="form-group">
                      <label class="col-sm-4 thick">Customer Name</label>
                      <div class="col-sm-6">
                        {$Edit.customer_name}
                      </div>
                    </div>
					 <div class="form-group">
                      <label class="col-sm-4 thick">Enquiry Status</label>
                      <div class="col-sm-6">
                        {if $Edit.enquiry_status eq "Open" && $Edit.open_status eq ""}{$Edit.enquiry_status}{elseif $Edit.enquiry_status eq "Open" && $Edit.open_status neq ""}{$Edit.enquiry_status}-{$Edit.open_status}{elseif $Edit.enquiry_status neq "Open" }{$Edit.enquiry_status}{/if}
                      </div>
                    </div>
				


					<div class="form-group">
                      <label class="col-sm-4 thick">Assign To</label>
                      <div class="col-sm-6">
                        {$Edit.assign_to}{if $Edit.reassign neq ""}&nbsp;(Re Assigned){/if}
                      </div>
                    </div>
					{if $Edit.assign_to eq $smarty.session.UserName && $Edit.reassign eq ""}
					 <div class="form-group">
                      <label class="col-sm-4 thick">Action</label>
                       <div class="col-sm-4">
					   	<select id="accept" name="accept" class="form-control" autocomplete="off" onChange="validate(this);" value="{$smarty.post.accept}">

						{if $Edit.accept_status eq "1"}
						<option>----Select----</option>
						<option value="Reassign">Re Assign</option>
						{else if $Edit.accept_status eq "0"}
						<option>----Select----</option>
						<option value="1">Accept</option>
						<option value="0">Not Accept</option>
						{/if}
						</select>

					</div>

					 <!--<input type="text" class="col-sm-4" onBlur="Assign1();" id="assign_to" name="assign_to" style="display:none;" placeholder="Re Assign" value="{$smarty.post.assign_to}">-->

                    <select id="assign_to" name="assign_to" class="col-sm-4" value="{$smarty.post.assign_to}" style="display:none;"  >
						<option value="">----Select------</option>
						 {foreach from=$UserListAssign item=asslist}
					<option value="{$asslist.username}">{$asslist.username}</option>
					{/foreach}
					</select>
					
					<input type="button" class="btn btn-info pull-center" onClick="Assign1();reassign(this.value);Assign();" value=">>">


					</div>
					{/if}
					</div>
					</form>
					<div class="modal fade" id="requirement" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content" style="width:750px;">
        <div class="modal-header" style="background-color:#00CCFF;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">requirement</h4>
        </div>
		<div class="box-footer" align="right" style="margin-bottom:-55px; margin-right:50px;" >

		<input type="button" class="btn btn-info pull-center" onClick="assign_val();" value="submit">


					</div>
		<div id="standard_bar" style="width:600px;height:80px;border:solid 1px #cfcfcf;" align="left"></div>
		<div class="box-footer" align="right">

</div>
		<iframe height="490px" width="100%" id="Contact"  src="./enquiry_requirement.php" style="border:1px;"></iframe>
        <div class="modal-body">

        </div>

      </div>
    </div>
  </div>
  </div>
  </div>

				<div class="clear"></div>
				{if $Edit.assign_to eq $smarty.session.UserName && $Edit.reassign eq ""}
				<div style="margin-top: 5px; margin-bottom: 10px;border: 0px;"><center>
				
							{if $Edit.enquiry_status eq 'Open'}
					<input type="button" class="btn  btn-danger btn-xs" value="Add Follow Ups" data-toggle="modal" data-target="#Follow" >&nbsp;&nbsp;
							{/if}
							{if $Edit.enquiry_type eq 'Sales' && $HideAdd2.0.sales_quote_no eq ''}
				<input type="button" class="btn  btn-danger btn-xs" value="Add Sales Quote" onClick="window.detail.location.reload();"  data-toggle="modal" data-target="#SalesAdd">&nbsp;&nbsp;
							{elseif $Edit.enquiry_type eq 'Service' && $HideAdd3.0.service_quote_no eq ''}
							<input type="button" class="btn  btn-danger btn-xs" value="Add Service Quote" data-toggle="modal" data-target="#Service">&nbsp;&nbsp;
							{elseif $Edit.enquiry_type eq 'Project' && $HideAdd.0.project_quote_no eq ''}
					<input type="button" class="btn  btn-danger btn-xs" value="Add Project Quote"  id="projectButton"data-toggle="modal" data-target="#Project">&nbsp;&nbsp;
							{/if}
						  </center>
						  </div>
						  {/if}
						  {/foreach}
<div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
				  {if $Edit.enquiry_type eq 'Sales'}
                  <li class="active"><a href="#sales" data-toggle="tab">Sales Quote</a></li>
				  {elseif $Edit.enquiry_type eq 'Service'}
				  <li class="active"><a href="#service" data-toggle="tab">Service Quote</a></li>
				  {elseif $Edit.enquiry_type eq 'Project'}
				  <li class="active"><a href="#contact" data-toggle="tab">Project Quote</a></li>
				  {/if}
				  <li><a href="#follow" data-toggle="tab">Follow Ups</a></li>
                </ul>
                <div class="tab-content">
                  <!-- Font Awesome Icons -->


				{if $Edit.enquiry_type eq 'Sales'}
				 <div class="tab-pane active" id="sales">
				<form name="SalesList" id="SalesList" method="post">
                  <table id="example2" class="table table-bordered table-striped" style="font-size:13px; , Times, serif;">
                    <thead>
					<tr>
								<th><center>Sl.No</center></th>
								<th><center>Place Order</center></th>
								<th><center>Sales Quote No</center></th>
								<th><center>Revised Version</center> </th>
								<th><center>Contact Person</center></th>
								<th><center>Sub Total</center></th>
								<th><center>Vat Percentage</center></th>
								<th><center>Total</center></th>
								<th><center>Print</center></th>
								<th><center>Email</center></th>
								<th><center>Revise</center></th>
								<th><center>Action</center></th>
					</tr>
                    </thead>
                    <tbody>
					<input type="hidden" value="{$Edit.enquiry_type}" />
                     {foreach from=$ListSale item=listSales}
					<tr id="{$j++}">
					<input type="hidden" value="{$listSales.sl_no}" />
					<input type="hidden" value="{$listSales.customer_id}" />
								<input type="hidden" value="{$listSales.sales_quote_no}" />
								<input type="hidden" value="{$listSales.enquiry_id}" />
								<input type="hidden" value="{$listSales.revised_version}" />

					<td align="center"><a href="#" data-toggle="modal" data-target="#ViewSales">{$j}</a></td>
					<td align="center"><input type="checkbox" id="ch_box" name="ch_box" value=""></td>
					<td align="center"><a href="#" data-toggle="modal" data-target="#ViewSales{$listSales.revised_version}">{$listSales.sales_quote_no}</a></td>
					<td align="center"><a href="#" data-toggle="modal" data-target="#ViewSales{$listSales.revised_version}">{$listSales.revised_version}</a></td>
					<td align="center"><a href="#" data-toggle="modal" data-target="#ViewSales{$listSales.revised_version}">{$listSales.customer_name}</a></td>
					<td align="center"><a href="#" data-toggle="modal" data-target="#ViewSales{$listSales.revised_version}">{$listSales.sub_total}</a></td>
					<td align="center"><a href="#" data-toggle="modal" data-target="#ViewSales{$listSales.revised_version}">{$listSales.vat_per}</a></td>
					<td align="center"><a href="#" data-toggle="modal" data-target="#ViewSales{$listSales.revised_version}">{$listSales.total}</a></td>
          <td align="center"><a href="#" onClick="Javascript:SalPrint('{$listSales.enquiry_id}','{$listSales.sales_quote_no}','{$ListEdit.0.enquiry_type}','{$listSales.revised_version}')" target="_blank"><i class="fa fa-print" ></i></a></td>
					<td align="center"><a href="#" data-toggle="modal" data-target="#SalesMail{$listSales.customer_id}" onClick="Popup();"><i class="fa fa-envelope"></i></a></td>
					<td align="center"><a href="#" data-toggle="modal" data-target="#RevSales{$listSales.sales_quote_no}" onClick="window.RDetail.location.reload();"><i class="fa fa-retweet"></i></a></td>
			  	<td align="center">&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" data-toggle="modal" data-target="#EditSales{$listSales.revised_version}" onClick="window.Edetail.location.reload();"><i class="fa fa-edit"></i></a>
					&nbsp;&nbsp; &nbsp;&nbsp;<a href="#" onClick="Javascript:salesdeleteCat('{$listSales.sl_no}','{$listSales.sales_quote_no}','{$listSales.enquiry_id}')"><i class="fa fa-trash"></i></a></td>
<!--****************************************Edit Sales********************************************************-->
						<div class="modal fade" id="EditSales{$listSales.revised_version}" role="dialog">
							<div class="modal-dialog">
							<!-- Modal content-->
							<div class="modal-content" style="width:700px;">
							<div class="modal-header" id="EditSalesHeader"  style="background-color:#00CCFF;">
							<button type="button" class="close" data-dismiss="modal" onClick="window.location.reload();">&times;</button>
							<h4 class="modal-title">Edit Sales</h4>
							</div>
									<iframe height="490px" width="100%" id="EditSales" name="Edetail"  src="./sale_edit.php?sales_quote_no={$listSales.sales_quote_no}&revised_version={$listSales.revised_version}" style="border:1px;"></iframe>
							</div>
							</div>
							</div>
<!--********************************************View sales detail**********************************************-->
							<div class="modal fade" id="ViewSales{$listSales.revised_version}" role="dialog">
							<div class="modal-dialog">
							<!-- Modal content-->
							<div class="modal-content" style="width:700px;">
							<div class="modal-header" id="ViewSalesUpHeader" style="background-color:#00CCFF;">
							<button type="button" class="close" data-dismiss="modal" onClick="window.location.reload();">&times;</button>
							<h4 class="modal-title">View Sales</h4>
							</div>
						<iframe height="490px" width="100%" id="ViewSales"  src="./sale_view.php?revised_version={$listSales.revised_version}&sales_quote_no={$listSales.sales_quote_no}" style="border:1px;"></iframe>
							</div>
							</div>
							</div>
<!--*******************************************Revise************************************************************************--->

							<div class="modal fade" id="RevSales{$listSales.sales_quote_no}" role="dialog">
							<div class="modal-dialog">
							<!-- Modal content-->
							<div class="modal-content" style="width:700px;">
							<div class="modal-header" id="ViewReviseSalesHeader" style="background-color:#00CCFF;">
							<button type="button" class="close" data-dismiss="modal" onClick="window.location.reload();">&times;</button>
							<h4 class="modal-title">Revise Sales</h4>
							</div>
									<iframe height="490px" width="100%" id="RevSales" name="RDetail"  src="./sale_revise.php?sales_quote_no={$listSales.sales_quote_no}&revised_version={$listSales.revised_version}" style="border:1px;"></iframe>
							</div>
							</div>
							</div>
<!--  *************************************************Mail********************************************************* -->
							<div class="modal fade" id="SalesMail{$listSales.customer_id}" role="dialog" style="top: 10px; left: -280px;">
							<div class="modal-dialog">
							<!-- Modal content-->
							<div class="modal-content" style="width:1100px;">
							<div class="modal-header" style="background-color:#00CCFF;">
							<button type="button" class="close" data-dismiss="modal" onClick="window.location.reload();">&times;</button>
							<h4 class="modal-title">Send Mail</h4>
							</div>
									<iframe height="850px" width="100%" align="left" id="SalesMail"  src="./sales_mail.php?enquiry_id={$listSales.enquiry_id}&enquiry_type={$Edit.enquiry_type}&customer_id={$listSales.customer_id}" style="border:1px;"></iframe>
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
                    </tfoot>
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
	  function Popup()
		{
    		document.getElementById('SalesMail').contentDocument.location.reload(true);
		}

  function salesdeleteCat(CatIdent,CusIdent,EnqIdent){
  var enq_id = btoa(EnqIdent);
  if(confirm("Are you sure to Delete this Content?")){
  FormName		= document.SalesList;
  FormName.action= "enquiry_detail_view.php?sl_no="+CatIdent+"&sales_quote_no="+CusIdent+"&enq_id="+enq_id;
  FormName.submit();
 }
 }

  function SalPrint(CatIdent,SalId,EnqType,RevNo) {
  var enq_id = btoa(CatIdent);
  var sale_no = btoa(SalId);
  var enq_type = btoa(EnqType);
  var rev_no = btoa(RevNo);
  FormName		= document.SalesList;
  FormName.action ='sales_print.php?enquiry_id='+enq_id+"&sales_quote_no="+sale_no+"&enquiry_type="+enq_type+"&revised_version="+rev_no;
  FormName.submit();

 }

    </script>
	{/literal}

				  {elseif $Edit.enquiry_type eq 'Service'}
				 <div class="tab-pane active" id="service">
				<form name="ServiceList" id="ServiceList" method="post">

                  <table id="example2" class="table table-bordered table-striped" style="font-size:13px; , Times, serif;">
                    <thead>
					<tr>
								<th><center>Sl.No</center></th>
								<th><center>Place Order</center> </th>
								<th><center>Service Quote No</center></th>
								<th><center>Revised Version</center></th>
								<th><center>Sub Total</center></th>
								<th><center>Tot Material</center></th>
								<th><center>Tot Labour</center></th>
								<th><center>Total</center></th>
								<th><center>Print</center></th>
								<th><center>Email</center></th>
								<th><center>Revise</center></th>
								<th><center>Action</center></th>
					</tr>
                    </thead>
                    <tbody>
					<input type="hidden" value="{$Edit.enquiry_type}"/>
                     {foreach from=$ListServ item=serviceList}
					<tr id="{$k++}">
					<input type="hidden" value="{$serviceList.sl_no}"/>
					<input type="hidden" value="{$serviceList.service_quote_no}"/>
					<input type="hidden" value="{$serviceList.enquiry_id}"/>
					<input type="hidden" value="{$serviceList.revised_version}"/>

							<td align="center"><a href="#" data-toggle="modal" data-target="#ViewService{$serviceList.revised_version}">{$k}</a></td>
							<td align="center"><input type="checkbox" id="ch_box1" name="ch_box1" value=""></td>
							<td align="center"><a href="#" data-toggle="modal" data-target="#ViewService{$serviceList.revised_version}">{$serviceList.service_quote_no}</a></td>
							<td align="center"><a href="#" data-toggle="modal" data-target="#ViewService{$serviceList.revised_version}">{$serviceList.revised_version}</a></td>
							<td align="center"><a href="#" data-toggle="modal" data-target="#ViewService{$serviceList.revised_version}">{$serviceList.sub_total}</a></td>
							<td align="center"><a href="#" data-toggle="modal" data-target="#ViewService{$serviceList.revised_version}">{$ListSer2.0.total_material}</a></td>
							<td align="center"><a href="#" data-toggle="modal" data-target="#ViewService{$serviceList.revised_version}">{$ListSer2.0.total_labour}</a></td>
							<td align="center"><a href="#" data-toggle="modal" data-target="#ViewService{$serviceList.revised_version}">{$serviceList.total}</a></td>
							<td align="center"><a href="" onClick="Javascript:SerPrint('{$serviceList.enquiry_id}','{$serviceList.service_quote_no}','{$ListEdit.0.enquiry_type}','{$serviceList.revised_version}')" target="_blank"><i class="fa fa-print"></i></a></td>

							<td align="center"><a href="#" data-toggle="modal" data-target="#serviceMail{$serviceList.customer_id}" onClick="up();"><i class="fa fa-envelope"></i></a></td>
							<td align="center"><a href="#" data-toggle="modal" data-target="#ServiceRevise{$serviceList.service_quote_no}"><i class="fa fa-retweet"></i></a></td>
				<td align="center">&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" data-toggle="modal" data-target="#EditService{$serviceList.revised_version}"><i class="fa fa-edit"></i></a>
&nbsp;&nbsp; &nbsp;&nbsp;<a href="#" onClick="Javascript:servicedeleteCat1('{$serviceList.service_quote_no}','{$serviceList.sl_no}','{$serviceList.enquiry_id}')"><i class="fa fa-trash"></i></a></td>

						<div class="modal fade" id="EditService{$serviceList.revised_version}" role="dialog">
							<div class="modal-dialog">
							<!-- Modal content-->
							<div class="modal-content" style="width:700px;">
							<div class="modal-header" id="ServiceEditHeader" style="background-color:#00CCFF;">
							<button type="button" class="close" data-dismiss="modal" onClick="window.location.reload();">&times;</button>
							<h4 class="modal-title">Edit Service</h4>
							</div>
								<iframe height="490px" width="100%" id="EditService"  src="./service_edit.php?service_quote_no={$serviceList.service_quote_no}&revised_version={$serviceList.revised_version}" style="border:1px;"></iframe>
							</div>
							</div>
							</div>
							<!--View service details -->
<div class="modal fade" id="ViewService{$serviceList.revised_version}" role="dialog">
							<div class="modal-dialog">
							<!-- Modal content-->
							<div class="modal-content" style="width:700px;">
							<div class="modal-header" style="background-color:#00CCFF;">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title">View Service</h4>
							</div>
									<iframe height="490px" width="100%" id="ViewService"  src="./service_view.php?revised_version={$serviceList.revised_version}&service_quote_no={$serviceList.service_quote_no}" style="border:1px;"></iframe>
							</div>
							</div>
							</div>
							<!--         Revise Service           -->
							<div class="modal fade" id="ServiceRevise{$serviceList.service_quote_no}" role="dialog">
							<div class="modal-dialog">
							<!-- Modal content-->
							<div class="modal-content" style="width:700px;">
							<div class="modal-header" id="ServiceReviseHeader" style="background-color:#00CCFF;">
							<button type="button" class="close" data-dismiss="modal" onClick="window.location.reload();">&times;</button>
							<h4 class="modal-title">Service Quote Revise</h4>
							</div>
									<iframe height="490px" width="100%" id="ServiceRevise"  src="./service_revise.php?service_quote_no={$serviceList.service_quote_no}&revised_version={$serviceList.revised_version}" style="border:1px;"></iframe>
							</div>
							</div>
							</div>
						<!--    Mail  -->
							<div class="modal fade" id="serviceMail{$serviceList.customer_id}" role="dialog" style=" top: 10px; left: -280px;">
							<div class="modal-dialog">
							<!-- Modal content-->
							<div class="modal-content" style="width:1100px;">
							<div class="modal-header" id="ServiceMailHeader" style="background-color:#00CCFF;">
							<button type="button" class="close" data-dismiss="modal" onClick="window.location.reload();">&times;</button>
							<h4 class="modal-title">Send Mail</h4>
							</div>
									<iframe height="850px" align="left" width="100%" id="serviceMail"  src="./service_mail.php?customer_id={$serviceList.customer_id}&enquiry_id={$serviceList.enquiry_id}&enquiry_type={$Edit.enquiry_type}" style="border:1px;"></iframe>
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
                    </tfoot>
                  </table>
				 </form>
				 </div>


{literal}
<script>
function servicedeleteCat1(CusIdent,ServIdent,EnqIdent){
var enq_id = btoa(EnqIdent);
  if(confirm("Are you sure to Delete this Content?")){
  FormName		= document.ServiceList;
  FormName.action= "enquiry_detail_view.php?service_quote_no="+CusIdent+"&sl_no="+ServIdent+"&enq_id="+enq_id;
  FormName.submit();
 }
 }

  function SerPrint(CatIdent,SalId,EnqType,RevNo) {
  var enq_id = btoa(CatIdent);
  var serv_no = btoa(SalId);
  var enq_type = btoa(EnqType);
  var rev_no = btoa(RevNo);
  FormName		= document.ServiceList;
  FormName.action ='service_print.php?enquiry_id='+enq_id+"&service_quote_no="+serv_no+"&enquiry_type="+enq_type+"&revised_version="+rev_no;
  FormName.submit();

 }
function up()
		{
    		document.getElementById('serviceMail').contentDocument.location.reload(true);
		}

</script>

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

				 {elseif $Edit.enquiry_type eq 'Project'}
				 <div class="tab-pane active" id="contact">
				<form name="ProjectList" id="ProjectList" method="post">
                  <table id="example2" class="table table-bordered table-striped" style="font-size:13px; , Times, serif;">
                    <thead>
					<tr>
								<th><center>Sl No</center></th>
								<th><center>Place Order</center></th>
					            <th><center>Project Quote No</center></th>
								<th><center>Revised Version</center></th>
								<th><center>Sub Total</center></th>
								<th><center>Material Tax</center></th>
								<th><center>Labour Tax</center></th>
								<th><center>Total</center></th>
								<th><center>Print</center></th>
								<th><center>Email</center></th>
								<th><center>Revise</center></th>
								<th><center>Action</center></th>
					</tr>
                    </thead>
                    <tbody>
						<input type="hidden" value="{$Edit.enquiry_type}"/>
                     {foreach from=$ListProj item=view}
					<tr id="{$l++}">
					<input type="hidden" value="{$view.sl_no}" />
					<input type="hidden" id="pNO" name="pNo" value="{$view.project_quote_no}"/>
					<input type="hidden"  value="{$view.enquiry_id}"/>
					<input type="hidden" id="customer_id" name="customer_id" value="{$view.customer_id}"/>
					<input type="hidden" value="{$ListView.0.enquiry_type}"/>
					<input type="hidden" value="{$ListProj2.0.sl_no}"/>
								<td align="center"><a href="#" data-toggle="modal" data-target="#ViewProject{$view.revised_version}">{$l}</a></td>
								<td align="center"><input type="checkbox" id="ch_box2" name="ch_box2" value=""></td>
								<td align="center"><a href="#" data-toggle="modal" data-target="#ViewProject{$view.revised_version}">{$view.project_quote_no}</a></td>
								<td align="center"><a href="#" data-toggle="modal" data-target="#ViewProject{$view.revised_version}">{$view.revised_version}</a></td>
								<td align="center"><a href="#" data-toggle="modal" data-target="#ViewProject{$view.revised_version}">{$view.sub_total}</a></td>
								<td align="center"><a href="#" data-toggle="modal" data-target="#ViewProject{$view.revised_version}">{$ListProj2.0.material_tax_value}</a></td>
								<td align="center"><a href="#" data-toggle="modal" data-target="#ViewProject{$view.revised_version}">{$ListProj2.0.labour_tax_value}</a></td>
								<td align="center"><a href="#" data-toggle="modal" data-target="#ViewProject{$view.revised_version}">{$view.total}</a></td>
			<td align="center"><a href="#" onClick="Javascript:ProjPrint('{$view.enquiry_id}','{$view.project_quote_no}','{$ListEdit.0.enquiry_type}','{$view.revised_version}')" target="_blank"><i class="fa fa-print" ></i></a></td>

								<td align="center"><a href="#" data-toggle="modal" data-target="#projectMail{$view.customer_id}" onClick="Pop();"><i class="fa fa-envelope"></i></a></td>
								<td align="center"><a href="#" data-toggle="modal" data-target="#projectRevise{$view.project_quote_no}"><i class="fa fa-retweet"></i></a></td>
								<td align="center">&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" data-toggle="modal" data-target="#EditProject{$view.revised_version}"><i class="fa fa-edit"></i></a>
						&nbsp;&nbsp; &nbsp;&nbsp;<a href="#" onClick="Javascript:projectdeleteCat('{$view.sl_no}','{$view.project_quote_no}','{$view.enquiry_id}')"><i class="fa fa-trash"></i></a></td>

<!--/*****************************************************************************************************************-->

	<div class="modal fade" id="projectRevise{$view.project_quote_no}" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content" style="width:765px;">
        <div class="modal-header" id="ProjectReviseHeader" style="background-color:#00CCFF;">
          <button type="button" class="close" data-dismiss="modal" onClick="window.location.reload();">&times;</button>
          <h4 class="modal-title">Add Project Revise</h4>
        </div>
	<iframe height="490px" width="100%" id="projectRevise"  src="./project_revise_quote.php?project_quote_no={$view.project_quote_no}&revised_version={$view.revised_version}" style="border:1px;"></iframe>
		</div>
		</div>
		</div>
<!---/***********************************************************************************************************************-->
	<div class="modal fade" id="EditProject{$view.revised_version}" role="dialog">
							<div class="modal-dialog">
							<!-- Modal content-->
							<div class="modal-content" style="width:700px;">
							<div class="modal-header" id="ProjectEditHeader" style="background-color:#00CCFF;">
							<button type="button" class="close" data-dismiss="modal" onClick="window.location.reload();">&times;</button>
							<h4 class="modal-title">Edit Project</h4>
							</div>
									<iframe height="490px" width="100%" id="EditProject"  src="./project_quote_edit.php?project_quote_no={$view.project_quote_no}&revised_version={$view.revised_version}" style="border:1px;"></iframe>
							</div>
							</div>
							</div>

<!--******************************************************MAil Project***********************************************-->
		<div class="modal fade" id="projectMail{$view.customer_id}" role="dialog" style=" top:10px; left:-280px;">
							<div class="modal-dialog">
							<!-- Modal content-->
							<div class="modal-content" style="width:1100px;">
							<div class="modal-header" id="ProjectMailHeader" style="background-color:#00CCFF;">
							<button type="button" class="close" data-dismiss="modal" onClick="window.location.reload();">&times;</button>
							<h4 class="modal-title">Send Mail</h4>
							</div>
									<iframe height="850px"  align="left" width="100%" id="projectMail"  src="./project_mail.php?customer_id={$view.customer_id}&enquiry_type={$Edit.enquiry_type}&enquiry_id={$view.enquiry_id}" style="border:1px;"></iframe>
							</div>
							</div>
							</div>
	<!--**************************************View Project****************************************************-->

		<div class="modal fade" id="ViewProject{$view.revised_version}" role="dialog">
							<div class="modal-dialog">
							<!-- Modal content-->
							<div class="modal-content" style="width:700px;">
							<div class="modal-header" style="background-color:#00CCFF;">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title">View Project</h4>
							</div>
							<iframe height="490px" width="100%" id="ViewProject"  src="./project_view.php?revised_version={$view.revised_version}&project_quote_no={$view.project_quote_no}" style="border:1px;"></iframe>
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
                    </tfoot>

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
	  function Pop()
		{
    		document.getElementById('projectMail').contentDocument.location.reload(true);
		}

  function projectdeleteCat(CatIdent,CusIdent,EnqIdent){
  var enq_id = btoa(EnqIdent);
  if(confirm("Are you sure to Delete this Content?")){
  FormName		= document.ProjectList;
  FormName.action= "enquiry_detail_view.php?sl_no="+CatIdent+"&project_quote_no="+CusIdent+"&enq_id="+enq_id;
  FormName.submit();
 }
 }
 function ProjPrint(CatIdent,ProjId,EnqType,RevNo) {
  var enq_id = btoa(CatIdent);
  var proj_no = btoa(ProjId);
  var enq_type = btoa(EnqType);
  var rev_no = btoa(RevNo);
  FormName		= document.ProjectList;
  FormName.action ='project_print.php?enquiry_id='+enq_id+"&project_quote_no="+proj_no+"&enquiry_type="+enq_type+"&revised_version="+rev_no;
  FormName.submit();

 }

    </script>
	<script type="text/javascript">
 function dynInput(cbox) {
  if (cbox.checked) {
    var input = document.getElementById("check1").value;
    input.type = "textarea";
    var div = document..getElementById("check1").value;
    div.id = cbox.value;
    div.innerHTML = document.getElementById("check1").value + cbox.value;
	// div.innerHTML = document.getElementById("check2").value + cbox.name;
    div.appendChild(input);
    document.getElementById("check1").appendChild(div);
  } else {
    document.getElementById(cbox.value).remove();
  }
}

</script>
	{/literal}
			{/if}

	<div class="modal fade" id="SalesAdd" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content" style="width:765px;">
        <div class="modal-header" style="background-color:#00CCFF;" id="salesHeader">
          <button type="button" class="close" data-dismiss="modal" onClick="window.location.reload();">&times;</button>
          <h4 class="modal-title">Add Sales</h4>
        </div>
	<iframe height="490px" name="detail" width="100%" id="SalesAdd"  src="./Sales.php?enquiry_id={$smarty.get.enquiry_id}" style="border:1px;" ></iframe>
		</div>
		</div>
		</div>

	<div class="modal fade" id="Service" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content" style="width:705px;">
        <div class="modal-header" style="background-color:#00CCFF;"  id="serviceHeader">
          <button type="button" class="close" data-dismiss="modal" onClick="window.location.reload();">&times;</button>
          <h4 class="modal-title">Add Service Quote</h4>
        </div>
        	<iframe height="540px" width="100%" id="Service"  src="./Service.php?enquiry_id={$smarty.get.enquiry_id}" style="border:1px;"></iframe>

		</div>
		</div>
		</div>

<div class="modal fade" id="Project" role="dialog">
		<div class="modal-dialog">
		<!-- Modal content-->
			<div class="modal-content" style="width:705px;">
				<div class="modal-header" style="background-color:#00CCFF;" id="projectHeader">
					<button type="button" class="close" data-dismiss="modal" onClick="window.location.reload();">&times;</button>

					<h4 class="modal-title">Add Project</h4>
				</div>
					<iframe height="540px" width="100%" id="Project"  src="./project.php?enquiry_id={$smarty.get.enquiry_id}" style="border:1px;"></iframe>

			</div>
		</div>
	</div>

	<div class="modal fade" id="Follow" role="dialog">
		<div class="modal-dialog">

			<div class="modal-content" style="width:765px;">
				<div class="modal-header" style="background-color:#00CCFF;">
					<button type="button" class="close" data-dismiss="modal" onClick="window.location.reload();">&times;</button>
					<h4 class="modal-title">Add Follow Ups</h4>
				</div>
					<iframe height="490px" width="100%" id="Follow"  src="./enfollow.php?enquiry_id={$smarty.get.enquiry_id}" style="border:1px;"></iframe>
			</div>
		</div>
	</div>


					<div class="tab-pane" id="follow">
                    <form name="FollowList" id="FollowList" method="post">
                  <table id="example1" class="table table-bordered table-striped" style="font-size:13px; , Times, serif;">

                    <thead>
                      <tr>
					 <!-- <th>S No</th>-->
					  <th><center>Sl.No</center></th>
						<th><center>Enquiry Status</center></th>
						
            <th><center>Last Touch Point<!--&amp;Time--></center></th>
						<th><center>Closed Date<!--&amp;Time--></center></th>
            <th><center>Created By</center></th>
						<th><center>Timestamp Value</center></th>
						<th><center>Assign To</center></th>
            <th><center>Re Assign</center></th>
						<th><center>Action</center></th>

                      </tr>

                    </thead>
                    <tbody>
					{foreach from=$ListView2 item=Contact}

					<tr id="{$i++}">
								<input type="hidden" value="{$Contact.sl_no}" />
								<input type="hidden" value="{$Contact.customer_id}" />
								<input type="hidden" value="{$Contact.enquiry_id}" />

										<td align="center"><a href="#" data-toggle="modal" data-target="#ViewContact{$Contact.sl_no}">{$i}</a></td>
										<td align="center"><a href="#" data-toggle="modal" data-target="#ViewContact{$Contact.sl_no}">{if $Contact.enquiry_status eq "Open" && $Contact.open_status eq "" }{$Contact.enquiry_status}{elseif $Contact.enquiry_status eq "Open" && $Contact.open_status neq "" }{$Contact.enquiry_status}-{$Contact.open_status}{elseif $Contact.enquiry_status neq "Open" }{$Contact.enquiry_status}{/if}</a></td>
									

										<td align="center"><a href="#" data-toggle="modal" data-target="#ViewContact{$Contact.sl_no}">{if $Contact.snooze_date eq '0000-00-00'} NA {elseif $Contact.snooze_date neq '0000-00-00'}{$Contact.snooze_date}{/if} <!--&nbsp;&nbsp;{if $Contact.snooze_time eq '00:00:00'} NA {elseif $Contact.snooze_time  neq '00:00:00'}{$Contact.snooze_time}{/if}--></a></td>
										<td align="center"><a href="#" data-toggle="modal" data-target="#ViewContact{$Contact.sl_no}">{if $Contact.closed_date eq '0000-00-00'} NA {elseif $Contact.closed_date neq '0000-00-00'}{$Contact.closed_date}{/if}<!--&nbsp;&nbsp;{if $Contact.closed_time eq '00:00:00'} NA {elseif $Contact.closed_time neq '00:00:00'}{$Contact.closed_time}{/if}--></a></td>
										<td align="center"><a href="#" data-toggle="modal" data-target="#ViewContact{$Contact.sl_no}">{$Contact.created_by}</a></td>
										<td align="center"><a href="#" data-toggle="modal" data-target="#ViewContact{$Contact.sl_no}">{$Contact.timestamp_value}</a></td>
										<td align="center"><a href="#" data-toggle="modal" data-target="#ViewContact{$Contact.sl_no}">{$Contact.assign_to}</a></td>
										<td align="center"><a href="#" data-toggle="modal" data-target="#ViewContact{$Contact.sl_no}">{$Contact.reassign}</a></td>
										<td align="center">

					 <a href="#" onClick="Javascript:deleteCat('{$Contact.sl_no}','{$Contact.enquiry_id}')"><i class="fa fa-trash"></i></a></td>

					  <div class="modal fade" id="ViewContact{$Contact.sl_no}" role="dialog">
							<div class="modal-dialog">
							<!-- Modal content-->
							<div class="modal-content" style="width:700px;">
							<div class="modal-header" id="ViewFollowUpHeader" style="background-color:#00CCFF;">
							<button type="button" class="close" data-dismiss="modal" onClick="window.location.reload();">&times;</button>
							<h4 class="modal-title">View Follow Up</h4>
							</div>
								<iframe height="490px" width="100%" id="ViewContact"  src="./cus_view.php?sl_no={$Contact.sl_no}" style="border:1px;"></iframe>
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
                    </tfoot>
                  </table><!-- /#ion-icons -->
				  </form>
				   </div><!-- /.tab-content -->
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

  function deleteCat(FolIdent1,UPIdent){
  var enq_id = btoa(UPIdent);
  if(confirm("Are you sure to Delete this Content?")){
  FormName		= document.FollowList;
  FormName.action= "enquiry_detail_view.php?sl_no="+FolIdent1+"&enquiry_id="+enq_id;
  FormName.submit();
 }
 }

     </script>
	{/literal}
            </div>
			</div>
			</div>


			</div>    <!-- /.box-header -->

			</div>     <!-- /.box  -->
             <!-- /.col -->
           <!-- /.row -->
        </section><!-- /.content -->
		</div>
      <!-- /.content-wrapper -->

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
