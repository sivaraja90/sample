{include file="left.tpl"}
{literal}
   <script type="text/javascript" src='./dhtmlxMessage/codebase/dhtmlxmessage.js'></script>
	<script type='text/javascript' src='./auto-complete/jquery.metadata.js'></script>
	<script type='text/javascript' src='./auto-complete/jquery.auto-complete.js?<?= mktime() ?>'></script>
	<script type='text/javascript' src='./auto-complete/js.js?<?= mktime() ?>'></script>
	<link rel="stylesheet" href= "./codebase/skins/dhtmlxmessage_dhx_skyblue.css" type="text/css" media="all"/> 
	<link rel='stylesheet' type='text/css' href='auto-complete/jquery.auto-complete.css?<?= mktime() ?>' />
<script>
       function validate_fields()
        {	
		var fields=["role_name","category"];
				for(i=0;i<fields.length;i++)
				{
				//alert(fields[i]);
				current_iteration = document.getElementById(fields[i]).value;
				document.getElementById(fields[i]).style.borderColor="";
						if(current_iteration=="")
						{
						document.getElementById(fields[i]).focus();
						document.getElementById(fields[i]).style.borderColor="red";
						if(i==0)
						{
						var role_name  =  document.getElementById("role_name").value;
						if(role_name=="")
						{
						dhtmlx.alert({
								title: "Error !",
								type:"alert-error",
								text: "Please Enter Role Name",
											});
									return false;
						}
						}
						if(i==1)
						{
						var category =  document.getElementById("category").value;
						if(category=="")
						{
						dhtmlx.alert({
								title: "Error !",
								type:"alert-error",
								text: "Please Enter Category",
											});
									return false;
						}
						}
						return false;
						}

				}
			  FormName		= document.RoleReg;
  			  FormName.method	= "POST";
              FormName.submit();
		}
	
function GoBack()
{
window.history.back();
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
</style>

		{/literal}
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
		<h4>
         <small><a href="user_role_list.php"><i class="fa fa-list"> <label style="font-family:Arial, Helvetica, sans-serif">
		 List User Roles</label></i></a></small>&ensp;&ensp;&ensp;
         <small class="active"><a href="user_role_reg.php"><i class="fa fa-user-plus"> <label style="font-family:Arial, Helvetica, sans-serif">
		 Create User Role</label></i></a></small>
		 </h4>
        </section>
        <!-- Main content -->
        <section class="content">
          <!-- SELECT2 EXAMPLE -->
          <div class="box box-info">
            <div class="box-header with-border" align="center">
              <h3 class="box-title">User Role Edit</h3>
              <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
              </div>
            </div><!-- /.box-header -->
			
			<form class="form-horizontal" name="RoleReg">
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
		 		
                  <div class="box-body">
				  {foreach from=$ListMas item=View}
				   <div class="col-md-6">
                    <div class="form-group">			 
                      <label class="col-sm-3 control-label">Role Name</label>
                      <div class="col-sm-5">
					  <input type="hidden" class="form-control" id="role_id" name="role_id" tabindex="1" value="{$View.role_id}" placeholder="Role Id">
                        <input type="text" class="form-control" id="role_name" name="role_name" tabindex="1" value="{$View.role_name}" placeholder="Role Name">
						
                      </div>
                    </div>
					  </div>
					<!--**********************************************************-->
                     <div class="col-md-6">
                    <div class="form-group">			 
                      <label class="col-sm-3 control-label">Category</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="category" name="category" tabindex="2" value="{$View.category}" placeholder="Category">
						<input type="hidden" class="form-control" id="timestamp" name="timestamp" value="{$smarty.now|date_format:'%Y-%m-%d &amp; %I:%M:%S %p'}">
						<input type="hidden" class="form-control" id="created_time" name="created_time"  placeholder="Time" Value="{$EditList.now|date_format:'%I:%M:%S %p'}">
						<input type="hidden" class="form-control" id="created_date" name="created_date"  placeholder="Date" value="{$EditList.now|date_format:'%Y-%m-%d'}" >
						
                      </div>
                    </div>
                    </div>
					{/foreach}
				 </div>
				 
				 <div class="box-footer"><center>
                   <input type="button" class="btn btn-info pull-center" value="UPDATE USER ROLE"  onClick="validate_fields();" >&nbsp;&nbsp;
                    <button type="submit" class="btn btn-info pull-center" onClick="GoBack();">CANCEL</button></center>
                  </div>

				  </form>
				  </div>
				  </section>
      <div class="control-sidebar-bg"></div>
    </div>
	</div>
  </body>
</html>
