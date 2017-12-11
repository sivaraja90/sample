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
label.thick
{
	font-weight: bold;
}
</style>
	<link rel="stylesheet" href= "./codebase/skins/dhtmlxmessage_dhx_skyblue.css" type="text/css" media="all"/> 
	<link rel='stylesheet' type='text/css' href='auto-complete/jquery.auto-complete.css?<?= mktime() ?>' />
{/literal}
<body class="hold-transition skin-blue sidebar-mini">
  <div class="content-wrapper">
	<section class="content-header">
          <h4>
            <small class="active"><a href="employee_list.php"><i class="fa fa-list"> <label class="font" style="font-family:Arial, Helvetica, sans-serif">
List Employees</label></i></a></small>&ensp;&ensp;&ensp;
            <small><a href="employee_reg.php"> <i class="fa fa-user-plus"> <label class="font" style="font-family:Arial, Helvetica, sans-serif">
Create Employee</label></i></a></small>
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
               {foreach from=$ListView item=Edit}
				 <table width="110%">
				<tr>
				 <td>Created:{$Edit.created_date}&nbsp;&nbsp;{$Edit.created_time}</td>
				 <td>
				 <h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{$Edit.company_name}&nbsp;&nbsp;[{$Edit.emp_id}]</h4></td>
				<td style="margin-left:-1000px;"> Modified:{$Date_Stamp.0.Date}&nbsp;&nbsp;{$Time_Stamp.0.Time}</td>
				 </tr>
				 </table>
				 {/foreach}
				<form class="form-horizontal" id="detail_view_employee" name="detail_view_employee">
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
				  {foreach from=$ListView item=EditList}
				   <div class="col-md-6">
					 <div class="form-group">
                      <label class="col-sm-4 thick">Contact Person</label>
                      <div class="col-sm-6">
					  {$EditList.salutation}.
					  {$EditList.emp_first_name}
					{$EditList.emp_last_name}
                      </div>
                    </div>
 				  <div class="form-group">
                      <label class="col-sm-4 thick">Father Name </label>
                      <div class="col-sm-6">
			         {$EditList.father_name}
                      </div>
                    </div>
					{if $EditList.d_o_b neq ""}
					  <div class="form-group">
                      <label class="col-sm-4 thick">DOB</label>
                      <div class="col-sm-6">
						{$EditList.d_o_b}
                      </div>
                      </div>
					  {/if}
					{if $EditList.mobile!="" AND $EditList.mobile!="0"}
					<div class="form-group">
                      <label class="col-sm-4 thick">Mobile No </label>
                      <div class="col-sm-6">
                       {$EditList.mobile}
                      </div>
                    </div> 
					{/if}
					  {if $EditList.phone1 neq "" AND $EditList.phone1 neq "0" AND $EditList.area_code neq "" AND $EditList.area_code neq "0"}
					  <div class="form-group">
                      <label class="col-sm-4 thick">Phone No</label>
					    <div class="col-sm-6">
						{$EditList.area_code}&nbsp;-&nbsp;
					  {$EditList.phone1}
                      {$EditList.extension}
                       </div>
					 </div>	
					 {/if}
					   <div class="form-group">
                      <label class="col-sm-4 thick">Qualification</label>
                      <div class="col-sm-6">
						 {$EditList.qualification}
                      </div>
					   </div>
				<div class="form-group">
                      <label class="col-sm-4 thick">Department</label>
                      <div class="col-sm-6">
						 {$EditList.department}
                      </div>
					  </div>
					<div class="form-group">
                      <label class="col-sm-4 thick">Address</label>
                      <div class="col-sm-6">
						{$EditList.address1}
                      </div>
					  </div>
					  {if $EditList.area neq ""}
					  <div class="form-group">
                      <label class="col-sm-4 thick">Area</label>
                      <div class="col-sm-6">
						{$EditList.area}
                      </div>
					  </div>
					  {/if}
					  {if $EditList.residence_mobile neq "" AND $EditList.residence_mobile neq "0"}
					  <div class="form-group">
                      <label class="col-sm-4 thick">Residence Mobile</label>
                      <div class="col-sm-6">
					  {$EditList.residence_mobile}
                      </div>
                    </div>
					{/if}
					{if $EditList.personal_mail neq ""}
					<div class="form-group">
                      <label class="col-sm-4 thick">Personal Mail</label>
                      <div class="col-sm-6">
                        {$EditList.personal_mail}
                      </div>
                    </div>
					{/if}
					  </div>
					  <!--**************************************************************-->
					  <div class="col-md-6">
					   <div class="form-group">
                      <label class="col-sm-4 thick">Company Code</label>
                      <div class="col-sm-6">
					    {$EditList.company_code}
                      </div>
					  </div>
					  <div class="form-group">
                      <label class="col-sm-4 thick">Mother Name</label>
                      <div class="col-sm-6">
					    {$EditList.mother_name}
					 </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-4 thick">Sex</label>
                      <div class="col-sm-6">
					  {$EditList.sex}
                      </div>
                    </div>
					{if $EditList.mobile_1 !="" AND $EditList.mobile_1 !="0"}
					 <div class="form-group">
                      <label class="col-sm-4 thick">Mobile No 1 </label>
                      <div class="col-sm-6">
						 {$EditList.mobile_1}
                      </div>
					  </div>
					  {/if}
					   {if $EditList.phone_no!= "" AND $EditList.phone_no !="0" AND $EditList.area_code1 neq "" AND $EditList.area_code1!="0"}
						 <div class="form-group">
                      <label class="col-sm-4 thick">Phone No 1</label>
					  <div class="col-sm-6">
					  {$EditList.area_code1} &nbsp;-&nbsp;
					  {$EditList.phone_no}
					  {$EditList.extension1}
                        </div>
					 </div>
					 {/if}	
					 <div class="form-group">
                      <label class="col-sm-4 thick">Designation</label>
                      <div class="col-sm-6">
					  {$EditList.designation}
                      </div>
                     </div>
					 {if $EditList.no_of_year_exp!="" AND $EditList.no_of_year_exp!="0"}
					  <div class="form-group">
                      <label class="col-sm-4 thick">No of year Exper</label>
                      <div class="col-sm-6">
                          {$EditList.no_of_year_exp}
                      </div>
					   </div>
					   {/if}
					   {if $EditList.joining_date!=""}
					   <div class="form-group">
                      <label class="col-sm-4 thick">Joining Date</label>
                      <div class="col-sm-6">
                         {$EditList.joining_date}
                      </div>
                    </div>
					{/if}
					   {if $EditList.address2 neq ""}
					 <div class="form-group">
                      <label class="col-sm-4 thick">Address1</label>
                      <div class="col-sm-6">
					  {$EditList.address2}
                      </div>
                    </div>
					{/if}
						<div class="form-group">
                      <label class="col-sm-4 thick">Pincode</label>
                      <div class="col-sm-6">
                        {$EditList.pincode}
                      </div>
					  </div>
					{if $EditList.company_mail neq ""}
					   <div class="form-group">
                      <label class="col-sm-4 thick">Company Mail</label>
                      <div class="col-sm-6">
					  {$EditList.company_mail}
						{$EditList.profile_image}
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
					{/foreach}		
                    </div>
					</form>
					<div class="clear"></div>
					 </div>
					<!-- /.box-header -->
                </div><!-- /.box-body -->
            </div> <!-- /.col -->
          </div> <!-- /.row -->
        </section> <!-- /.content -->
      </div><!-- /.content-wrapper -->
            <!-- Control Sidebar -->
      <!-- /.control-sidebar -->
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"> </div>
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