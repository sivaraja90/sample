{$IncludeJS}
{$IncludeCSS}
{literal}

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
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
	th {
    font-style: normal;
	font-weight:200;
	font-size:26px;
	margin-right:90px;
}
table { 
    border-spacing: 2px;
    border-collapse:collapse;
	
}
td
{ padding:10px;

}
</style>
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
{/literal}
<body onLoad="doonload"> 
<div id="Work">
<form name="WorkLog" id="WorkLog" method="post" enctype="multipart/form-data">
		<input type="hidden" name="hdAction">
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
{foreach from=$ListWork item=work}
			<table  class="table table-bordered table-striped">
				<tr>
				<th class="col-sm-2 control-th" style="font-size:large;">WorkLog Id</th>	
				<td class="col-sm-5">{$work.worklog_id}</td>
				<th class="col-sm-2 control-th" style="font-size:large;">WorkLog Status</th>
				<td class="col-sm-5">{$work.worklog_status}</td>
				</tr>				
				<tr>
				<th class="col-sm-2 control-th" style="font-size:large;">Work Descp</th>
				<td class="col-sm-5">{$work.work_descp}</td>
				<th class="col-sm-2 control-th" style="font-size:large;">Summary</th>
				<td class="col-sm-5">{$work.summary}</td>
				</tr>
				</table>
				<table  class="table table-bordered table-striped">
				<tr>
				<th class="col-sm-2 control-th" style="font-size:large;">Remarks</th>
				<td class="col-sm-5">{$smarty.post.remarks}</td>
				</tr>
				{/foreach}
				</table>
				
				
				<center>
					<input type="button" class="btn btn-info pull-center" value="Work Status"  onClick="validate_mail();">&nbsp;&nbsp;
                   	</center>

				
				</form>
				</body>
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

