{$IncludeCSS}
{$IncludeJS}
{literal}
<script type="text/javascript" src='./dhtmlxMessage/codebase/dhtmlxmessage.js'></script>
	<script type='text/javascript' src='./auto-complete/jquery-1.3.2.js'></script>
	<script type='text/javascript' src='./auto-complete/jquery.metadata.js'></script>
	<script type='text/javascript' src='./auto-complete/jquery.auto-complete.js?<?= mktime() ?>'></script>
	<script type='text/javascript' src='./auto-complete/js.js?<?= mktime() ?>'></script>
	<link rel="stylesheet" href="'https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
	<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css"/>
	<style>
	th {
    font-style: normal;
	font-weight:100;
	font-size:14px;
	margin-right:100px;
}
table { 
    border-spacing: 2px;
    border-collapse: separate;
}
td
{ padding:10px;
width:50px;
}
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
.col-sm-4
{
width:30%;
}
.col-sm-2
{
 width:20%;
 margin-left:10%;
 font-weight:100;
 font-size:14px;
 font-style:normal;
}
</style>
{/literal}
	<body  class="hold-transition skin-blue sidebar-mini">
		<form class="form-horizontal" name="EnqDet">
				<input type="hidden" name="hdAction" />
<table id="example1" class="table table-bordered table-striped" style="font-size:13px; , Times, serif;">
{foreach from=$UserList item=List}
					<tr class="form-group">
						<th class="col-sm-2 control-th" style="font-weight:bold;">Enquiry Id</th>
						<td class="col-sm-4">
						{$List.enquiry_id}					
						</td>
						<th class="col-sm-2 control-th" style="font-weight:bold;">Customer Id</th>
						<td class="col-sm-4">
						{$List.customer_id}					
						</td>
						</tr>
						<tr class="form-group">
						<th class="col-sm-2 control-th" style="font-weight:bold;">Enquiry Status</th>
						<td class="col-sm-4">
						{$List.enquiry_status}
						</td>
						<th class="col-sm-2 control-th" style="font-weight:bold;">Enquiry Type</th>
						<td class="col-sm-4">
						{$List.enquiry_type}
						</td>
						</tr>
						<tr class="form-group">
						 <th class="col-sm-2 control-th" style="font-weight:bold;">Po Date</th>
						<td class="col-sm-4">
						{if $List.po_date neq "0000-00-00"}
						{$List.po_date}
						{else}
						NA
						{/if}
						</td>				
						<th class="col-sm-2 control-th" style="font-weight:bold;">Po No</th>
						<td class="col-sm-4">
						{if $List.po_no neq ""}
						{$List.po_no}
						{else}
						NA
						{/if}
						</td>
						</tr>
						<tr class="form-group">
						<th class="col-sm-2 control-th" style="font-weight:bold;">Snooze Date</th>
						<td class="col-sm-4">
						{if $List.snooze_date neq "0000-00-00"}
						{$List.snooze_date}
						{else}
						NA
						{/if}
						</td>
						<th class="col-sm-2 control-th" style="font-weight:bold;">Snooze Time</th>
						<td class="col-sm-4">
						{if $List.snooze_time neq "00:00:00"}
						{$List.snooze_time}
						{else}
						NA
						{/if}
						</tr>
						<tr class="form-group">
						<th class="col-sm-2 control-th" style="font-weight:bold;">Closed Date</th>
						<td class="col-sm-4">
						{if $List.closed_date neq "0000-00-00"}
						{$List.closed_date}
						{else}
						NA
						{/if}
					<th class="col-sm-2 control-th" style="font-weight:bold;">Closed Time</th>
						<td class="col-sm-4">
						{if $List.closed_time neq "00:00:00"}
						{$List.closed_time}
						{else}
						NA
						{/if}
						</tr>
						<tr class="form-group">
						<th class="col-sm-2 control-th" style="font-weight:bold;">Assign To</th>
						<td class="col-sm-4">
						{$List.assign_to}
						<th class="col-sm-2 control-th" style="font-weight:bold;">Re Assign</th>
						<td class="col-sm-4">
					 {$List.reassign}
						</td>
		              </tr> 
					  </table>
					  <table id="example1" class="table table-bordered table-striped" style="font-size:13px; , Times, serif;">
					  <tr>
						<th class="col-sm-2 control-th"><strong>Requirments </strong>&nbsp;- &nbsp;{$List.requirement}</th>
						</tr>
						<tr>
						<th class="col-sm-2 control-th"><strong>Remarks</strong>&nbsp; - &nbsp;{$List.remarks}</th>
		              </tr> 					 
					  </table>
{/foreach}
</form>
</body>