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
	<link rel="stylesheet" href= "./codebase/skins/dhtmlxmessage_dhx_skyblue.css" type="text/css" media="all"/>
	<link rel='stylesheet' type='text/css' href='auto-complete/jquery.auto-complete.css?<?= mktime() ?>' />
{/literal}
 <body class="hold-transition skin-blue sidebar-mini">
  <div class="content-wrapper">
	<section class="content-header">
          <h4>
            <small class="active"><a href="user_list.php"><i class="fa fa-list"> <label class="font" style="font-family:Arial, Helvetica, sans-serif">
List Users</label></i></a></small>&ensp;&ensp;&ensp;
            <small><a href="user_reg.php"><i class="fa fa-user-plus"> <label class="font" style="font-family:Arial, Helvetica, sans-serif">
Create User</label></i></a></small></h4>
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
 				    {foreach from=$ListEdit item=View}
				<table width="110%">
				<tr>
				 <td>Created:{$View.created_date}&nbsp;&nbsp;{$View.created_time}</td>
                  <td>
				 <h4>{$View.company_name}&nbsp;{$View.user_id}</h4></td>
				<td style="margin-left:-1000px;"> Modified:{$Date_Stamp.0.Date}&nbsp;&nbsp;{$Time_Stamp.0.Time}</td>
				</tr>
				</table>
				{/foreach}
				<form class="form-horizontal" name="user_details">
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
				{foreach from=$ListEdit item=EditList}
                  <div class="box-body">
				   <div class="col-md-6">
					  <div class="form-group">
                      <label class="col-sm-4 thick">User Name</label>
                      <div class="col-sm-6">
					  {$EditList.username}
                      </div>
                    </div>
					 <div class="form-group">
                      <label class="col-sm-4 thick">Customer Name</label>
                      <div class="col-sm-6">
					  {$EditList.salutation}.
					  {$EditList.contact_fname}
					{$EditList.contact_lname}
                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-4 thick">Designation</label>
                      <div class="col-sm-6">
					    {$EditList.designation}
                      </div>
					  </div>
					  {if $EditList.mobile!="" AND $EditList.mobile!="0"}
					    <div class="form-group">
                      <label class="col-sm-4 thick">Mobile No</label>
                      <div class="col-sm-6">
			         {$EditList.mobile}
                      </div>
                    </div>
					{/if}
					{if $EditList.mobile1!="0" AND $EditList.mobile1!="" }
					<div class="form-group">
                      <label class="col-sm-4 thick">Mobile No 1</label>
                      <div class="col-sm-6">
			         {$EditList.mobile1}
                      </div>
                    </div>
					{/if}
					{if $EditList.mobile2!="0" AND $EditList.mobile2!="" }
					<div class="form-group">
                      <label class="col-sm-4 thick">Mobile No 2</label>
                      <div class="col-sm-6">
			         {$EditList.mobile2}
                      </div>
                    </div>
					{/if}
					 {if $EditList.email_id !=""}
					    <div class="form-group">
                      <label class="col-sm-4 thick">Email Id</label>
                      <div class="col-sm-6">
					    {$EditList.email_id}
					 </div>
                    </div>
					{/if}
					{if $EditList.remarks neq ""}
					 <div class="form-group">
                      <label class="col-sm-4 thick">Remarks</label>
                      <div class="col-sm-6" >
					  {$EditList.remarks}
                      </div>
					  </div>
					  {/if}
					<div class="form-group" style="visibility:hidden">
                      <label class="col-sm-4 thick">Created By</label>
                      <div class="col-sm-6">
					    {$EditList.created_by}
					 </div>
					 </div>
					</div>
					<!--**********************************************************-->
					    <div class="col-md-6">
					  <div class="form-group">
                      <label class="col-sm-4 thick">Company Code</label>
                      <div class="col-sm-6">
						 {$EditList.company_code}
                      </div>
					   </div>
					<div class="form-group">
                      <label class="col-sm-4 thick">Sex</label>
                      <div class="col-sm-6">
						 {$EditList.sex}
                      </div>
					   </div>
					   <div class="form-group">
                      <label class="col-sm-4 thick">Department</label>
                      <div class="col-sm-6">
					  {$EditList.department}
                      </div>
                    </div>
					{if $EditList.phone!="0" AND $EditList.phone!="" }
					 <div class="form-group">
                      <label class="col-sm-4 thick">Phone No</label>
                      <div class="col-sm-6">
					  {$EditList.area}
					  {$EditList.phone}
					  {$EditList.extension}
                    </div>
                    </div>
					{/if}
						 <div class="form-group">
                      <label class="col-sm-4 thick">User Group</label>
                      <div class="col-sm-6">
						{$EditList.user_group}
                      </div>
                      </div>
						{if $EditList.email_id1 !=""}
					    <div class="form-group">
                      <label class="col-sm-4 thick">Email Id 1</label>
                      <div class="col-sm-6">
					    {$EditList.email_id1}
					 </div>
                    </div>
					{/if}
					</div>
                    </div>
					{/foreach}
					</form>
					 </div>
				<div class="clear"></div>
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
