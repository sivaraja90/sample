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
            <small class="active"><a href="prospect_list.php"><i class="fa fa-list"> <label class="font" style="font-family:Arial, Helvetica, sans-serif">
List Prospect</label></i></a></small>&ensp;&ensp;&ensp;
            <small><a href="prospect.php"><i class="fa fa-user-plus"> <label class="font" style="font-family:Arial, Helvetica, sans-serif">
Create Prospect</label></i></a></small></h4>
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
                  <center><h3 class="box-title">Prospect View</h3></center>
                </div>
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
				<form class="form-horizontal" name="prospect_detail">
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
				   {foreach from=$ListView1 item=ListDet}	
				   <div class="col-md-6">
                    <div class="form-group">			 
                      <label class="col-sm-4  thick">Prospect Id</label>
                      <div class="col-sm-6">
                        {$ListDet.prospect_id}
                      </div>
                    </div>
					
					<div class="form-group">
                      <label class="col-sm-4  thick">Contact Person</label>
                      <div class="col-sm-6">
                       {$ListDet.contact_person}
                      </div>
                    </div>
                   
					 <div class="form-group">
                      <label class="col-sm-4  thick">Address</label>
                      <div class="col-sm-6">
                        {$ListDet.address}
                      </div>
                    </div>
					 <div class="form-group">
                      <label class="col-sm-4  thick">Created By</label>
                      <div class="col-sm-6">
                        {$ListDet.created_by}
                      </div>
                    </div>
					
					</div>
					
					
					 <div class="col-md-6">
					 
					 <div class="form-group" >
                      <label class="col-sm-4  thick">Company Name</label>
                      <div class="col-sm-6">
						{$ListDet.company_name}
                      </div>
                    </div>
					 <div class="form-group">
                      <label class="col-sm-4  thick">Contact No</label>
                      <div class="col-sm-6">
                       {$ListDet.mobile_no}
                      </div>
                    </div>
					</div>
					 <div class="form-group">
                      <label class="col-sm-4  thick">Mail Id</label>
                      <div class="col-sm-6">
                      {$ListDet.mail_id}
                      </div>
					  </div>
					 
                    
					
					 </div>
                  
					{/foreach}
					</form>
					 </div>
				  </div>
               </div><!-- /.box-body -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
            <!-- Control Sidebar -->
      <!-- /.control-sidebar -->
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
    
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
