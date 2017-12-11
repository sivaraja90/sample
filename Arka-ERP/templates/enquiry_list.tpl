{include file="left.tpl"}

 <body class="hold-transition skin-blue sidebar-mini">
  <div class="content-wrapper">
	<section class="content-header">
          <h4>  {foreach from=$RList item=roles}	
			{if $roles.role_name eq 'List Enquiry'} 	&ensp;	
            <small><a href="enquiry_list.php"><i class="fa fa-list"> <label class="thin" style="font-family:Arial, Helvetica, sans-serif">
			List Enquiries</label></i></a></small>&ensp;&ensp;&ensp;
			{/if}
			{if $roles.role_name eq 'Add Enquiry'}
            <small><a href="enquiry_reg.php"><i class="fa fa-user-plus"> <label class="thin" style="font-family:Arial, Helvetica, sans-serif">
			Create Enquiry</label></i></a></small>
			{/if}
			{/foreach}
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
              <div class="box box-info">
                <div class="box-header">
                  <center><h3 class="box-title">Enquiry Lists</h3></center>
                </div><!-- /.box-header -->
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
				<form name="enquiry_list" id="enquiry_list" method="post">
		 <div class="col-md-6">
		 <div class="form-group">
                      <label class="col-sm-4 thick">List Enquiries</label>
                  <div class="col-sm-5">
					<select id="enquiry_types" name="enquiry_types" class="form-control" tabindex="1" onChange="GetEnquiry(this.value)">
					{if $smarty.post.enquiry_types eq "my_enquiries"}
						<option value="0" style="background-color:#0099FF">--Select--</option>
						<option value="my_enquiries" selected="selected" style="background-color:#CCCCCC">My Enquiries</option>
						<option value="all_my_enquiries" style="background-color:#CCCCCC"> All My Enquiries </option>
						<option value="assign_to_me" style="background-color:#CCCCCC"> Assign to Me </option>
						<option value="assign_to_others" style="background-color:#CCCCCC"> Assign to Others </option>
					{elseif $smarty.post.enquiry_types eq "assign_to_me"}
						<option value="0" style="background-color:#0099FF">--Select--</option>
						<option value="assign_to_me" selected="selected" style="background-color:#CCCCCC"> Assign to Me </option>
						<option value="all_my_enquiries" style="background-color:#CCCCCC"> All My Enquiries </option>	
						<option value="my_enquiries" style="background-color:#CCCCCC">My Enquiries</option>
						<option value="assign_to_others" style="background-color:#CCCCCC"> Assign to Others </option>
						
					{elseif $smarty.post.enquiry_types eq "assign_to_others"}
						<option value="0" style="background-color:#0099FF">--Select--</option>
						<option value="assign_to_others" selected="selected" style="background-color:#CCCCCC"> Assign to Others </option>
						<option value="all_my_enquiries" style="background-color:#CCCCCC"> All My Enquiries </option>	
						<option value="my_enquiries" style="background-color:#CCCCCC">My Enquiries</option>
						<option value="assign_to_me" style="background-color:#CCCCCC"> Assign to Me </option>
						
				{elseif $smarty.post.enquiry_types eq "all_my_enquiries"}	
						<option value="0" style="background-color:#0099FF">--Select--</option>
						<option value="all_my_enquiries" selected="selected" style="background-color:#CCCCCC"> All My Enquiries </option>
						<option value="assign_to_others"  style="background-color:#CCCCCC"> Assign to Others </option>
						<option value="my_enquiries" style="background-color:#CCCCCC">My Enquiries</option>
						<option value="assign_to_me" style="background-color:#CCCCCC"> Assign to Me </option>
						
					{else}
						<option value="0"  selected="selected" style="background-color:#0099FF">--Select--</option>
						<option value="assign_to_others" style="background-color:#CCCCCC"> Assign to Others </option>	
						<option value="my_enquiries" style="background-color:#CCCCCC">My Enquiries</option>
						<option value="assign_to_me" style="background-color:#CCCCCC"> Assign to Me </option>
						<option value="all_my_enquiries" style="background-color:#CCCCCC"> All My Enquiries </option>	
					{/if}
									
						</select>
                      </div>
					  </div>
					  
                    </div> 
					 <div class="col-md-6">
					 <div class="form-group">
                      <label class="col-sm-4 thick">Enquiry Status </label>
						<div class="col-sm-5">
						<select id="enquiry_status1" name="enquiry_status1" class="form-control" tabindex="" onChange="GetEnquiryStatus(this.value)">
						{if $smarty.post.enquiry_status1 eq "Open"}
						<option value="0">--Select--</option>
						<option value="Open" selected="selected">Open</option>
						<option value="Won">Won</option>
						<option value="Loss">Loss</option>
						{elseif $smarty.post.enquiry_status1 eq "Won"}
						<option value="0">--Select--</option>
						<option value="Open" >Open</option>
						<option value="Won" selected="selected">Won</option>
						<option value="Loss">Loss</option>
						
						{elseif $smarty.post.enquiry_status1 eq "Loss"}
						<option value="0">--Select--</option>
						
						<option value="Open" >Open</option>
						<option value="Won" >Won</option>
						<option value="Loss" selected="selected">Loss</option>
						
						{else}
						<option value="0" selected="selected">--Select--</option>
						<option value="Open" >Open</option>
						<option value="Won" >Won</option>
						<option value="Loss" >Loss</option>
						{/if}
						</select>
                      </div>
					  
					<!--&nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>-->
                    </div>
					</div>
					<br> <br> <br> 
					 <table width="100%" border="0" cellspacing=1 cellpadding=2 style="margin-top:-1.5%">
					<tr>
				    	<td colspan="6" align="right">{$LinkPage}{$PerPageNavigation}</td>
				    </tr>
					<td colspan="2" align="right"><img src="images/yellow.png" alt="lapsed"/>&nbsp;&nbsp;Lapsed&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/progress.gif" alt="Open"/>&nbsp;&nbsp;Open&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/status_icon_ok.png" alt="Won"/>&nbsp;&nbsp;Won&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/red.png" alt="Loss"/>&nbsp;&nbsp;Loss</td>
					</table>
					
					

<br>

					<table id="example1" class="table table-striped ">
					
                    <thead align="left">
                      <tr>
					  <th>Status</th>
					   <th>Sl No</th>
                        <th>Enq Id</th>
                        <th>Company Name</th>
                        <th>Enquiry Status</th>
						<th>Enquiry Type</th>
						 <th>Last Touch Point</th>
						  <th>Assign To</th>
						<!-- <th>Snooze Time</th>-->
						 {foreach from=$RList item=roles}
						{if $roles.role_name eq 'Edit Enquiry'}
						 <th>Action</th>
						 {/if}
						 {/foreach}
                      </tr>
                    </thead>
                    <tbody>
					{foreach from=$ListView item=View}
                        <tr {$i++}>
						
						{if $View.Time lt '00:00:00' &&  $View.enquiry_status eq "Open"}
						<td align="left"><img src="images/yellow.png" alt="lapsed"/></td>

						{elseif $View.enquiry_status eq "Open"}
						<td align="left"><img src="images/progress.gif" alt="Open"/></td>
						{elseif $View.enquiry_status eq "Loss"}
						<td align="left"><img src="images/red.png" alt="Loss"/></td>
						{elseif $View.enquiry_status eq "Won"}
						<td align="left"><img src="images/status_icon_ok.png" alt="Won"/></td>
						
						
						{/if}
						
                        <td align="left"><a href="#" onClick="Javascript:viewCats('{$View.enquiry_id}')">{$i}</a></td>
                        <td align="left"><a href="#" onClick="Javascript:viewCats('{$View.enquiry_id}')">{$View.enquiry_id}</a></td>
                        <td align="left"><a href="#" onClick="Javascript:viewCats('{$View.enquiry_id}')">{$View.company_name}</a></td>
                        <td align="left"><a href="#" onClick="Javascript:viewCats('{$View.enquiry_id}')">{if  $View.enquiry_status eq "Open" && $View.open_status neq ""}{$View.enquiry_status}-{$View.open_status}{elseif $View.enquiry_status eq "Open" && $View.open_status eq ""}{$View.enquiry_status}{elseif $View.enquiry_status neq "Open"}{$View.enquiry_status}{/if}</a></td>
						
						 <td align="left"><a href="#" onClick="Javascript:viewCats('{$View.enquiry_id}')">{$View.enquiry_type}</a></td>
                        <td align="left"><a href="#" onClick="Javascript:viewCats('{$View.enquiry_id}')">{$View.snooze_date}</a></td>
						<td align="left"><a href="#" onClick="Javascript:viewCats('{$View.enquiry_id}')">{$View.assign_to}</a></td>
						{if $View.enquiry_status eq "Open"}
						<td align="center">
						 {foreach from=$RList item=roles}
						{if $roles.role_name eq 'Edit Enquiry'}
						&nbsp;&nbsp; &nbsp;&nbsp;<a href="#" onClick="Javascript:editCats('{$View.enquiry_id}')"><i class="fa fa-edit"></i></a>{/if}
						{if $roles.role_name eq 'Delete Enquiry'}
						&nbsp;&nbsp; &nbsp;&nbsp;<a href="#" onClick="Javascript:deleteCats('{$View.enquiry_id}')"><i class="fa fa-trash"></i></a>
						{/if}
						{/foreach}
						</td> 
						{elseif $View.enquiry_status neq "Open"}
						<td align="left"><a href="#" onClick="Javascript:viewCats('{$View.enquiry_id}')"><i class="fa fa-lock" aria-hidden="true"></i></a>
</td>
						{/if}
                      </tr>
					  {/foreach}
                 </tbody>
                  </table>
				 </form>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!--.content-wrapper -->
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
  FormName		= document.enquiry_list;
  FormName.action= "enquiry_list.php?enquiry_id="+CatIdent;
  FormName.submit();
 }
 }
function editCats(CatIdent) {

   var cid = btoa(CatIdent);
   FormName		= document.enquiry_list;
   FormName.action ='enquiry_edit.php?enquiry_id='+cid;          
   FormName.submit();
}

function GetEnquiry(x)
{
  document.getElementById("enquiry_status1").selectedIndex ="0";
  FormName		= document.enquiry_list;
  FormName.action ='enquiry_list.php?searchvalue='+x;          
  FormName.submit();
}
function GetEnquiryStatus(y)
{
  var x = document.getElementById("enquiry_types").value;
  FormName		= document.enquiry_list;
  FormName.action ="enquiry_list.php?searchvalue1="+y+"&enq_type="+x;          
  FormName.submit();
}
 
  function viewCats(CatIdent) {
  var enq_id = btoa(CatIdent);   
  FormName		= document.enquiry_list;
  FormName.action ='enquiry_detail_view.php?enquiry_id='+enq_id;          
  FormName.submit();

 }
    </script>
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
	{/literal}
  </body>
