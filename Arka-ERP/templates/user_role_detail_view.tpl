{include file="left.tpl"}
{literal}
   <script type="text/javascript" src='./dhtmlxMessage/codebase/dhtmlxmessage.js'></script>
	<script type='text/javascript' src='./auto-complete/jquery.metadata.js'></script>
	<script type='text/javascript' src='./auto-complete/jquery.auto-complete.js?<?= mktime() ?>'></script>
	<script type='text/javascript' src='./auto-complete/js.js?<?= mktime() ?>'></script>
	<link rel="stylesheet" href= "./codebase/skins/dhtmlxmessage_dhx_skyblue.css" type="text/css" media="all"/> 
	<link rel='stylesheet' type='text/css' href='auto-complete/jquery.auto-complete.css?<?= mktime() ?>' />
<script>
     
$(document).ready(function() {	
$("#back").click(function GoBack() {
    window.history.go(-1);
});
});
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
	font-weight: bold;
	}
	label.font
{
font-weight: normal;
}
</style>
		{/literal}
  <body class="hold-transition skin-blue sidebar-mini" onLoad="doOnLoad();">
    <div class="wrapper">
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
		<h4>
         <small class="active"><a href="user_role_list.php"><i class="fa fa-list"> <label class="font" style="font-family:Arial, Helvetica, sans-serif">
		 List User Roles</label></i></a></small>&ensp;&ensp;&ensp;
         <small class="active"><a href="user_role_reg.php"><i class="fa fa-user-plus"> <label class="font" style="font-family:Arial, Helvetica, sans-serif">
		 Create User Role</label></i></a></small>
		 </h4>
		 <ul class="breadcrumb">
		  
            <li>Status : Active</li>
          </ul>
        </section>
        <!-- Main content -->
        <section class="content">
          <!-- SELECT2 EXAMPLE -->
         <div class="row">
            <div class="col-xs-12">
			 <div class="box box-info">
        	 <div class="box-header  with-border"  >
				  {foreach from=$ListMas item=View}
				  <table width="118%">
				<tr>
				 <td >Created:{$View.created_date}&nbsp;&nbsp;{$View.created_time}</td>
				 <td><h4 class="box-title">&nbsp;&nbsp;&nbsp;&nbsp;User Role Detailed View</h4>
				 <h4></h4></td>
				<td style="margin-left:-1000px;"> Modified:{$Date_Stamp.0.Date}&nbsp;&nbsp;{$Time_Stamp.0.Time}</td>
				 </tr>
				 </table>
				 {/foreach}
				 <form class="form-horizontal" name="userRoleEdit">
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
				  {foreach from=$ListMas item=View}
				  	<div class="col-md-6">
                    <div class="form-group">
                      <label class="col-sm-4 thick">Role Name</label>
                      <div class="col-sm-6">
                        {$View.role_name}
                      </div>
                    </div>
					</div>
<!--************************************************************************************-->
					<div class="col-md-6">
					 <div class="form-group">
                      <label class="col-sm-4 thick">Category</label>
                      <div class="col-sm-6">
                       {$View.category}
                      </div>
                    </div>
					{/foreach}
					</div>
						</div>
				 <!--<div class="box-footer"><center>
                  <a href="./user_role_list.php" button type="submit" class="btn btn-info pull-center" onClick="GoBack()">BACK</button></a></center>
                  </div>-->
				  </form>
				  </div>
				  </section>
      <div class="control-sidebar-bg"></div>
    </div>
	</div>
  </body>
</html>
