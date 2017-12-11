<?php /* Smarty version 2.6.25, created on 2017-01-07 15:42:21
         compiled from user_role_edit.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'user_role_edit.tpl', 140, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "left.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php echo '
   <script type="text/javascript" src=\'./dhtmlxMessage/codebase/dhtmlxmessage.js\'></script>
	<script type=\'text/javascript\' src=\'./auto-complete/jquery.metadata.js\'></script>
	<script type=\'text/javascript\' src=\'./auto-complete/jquery.auto-complete.js?<?= mktime() ?>\'></script>
	<script type=\'text/javascript\' src=\'./auto-complete/js.js?<?= mktime() ?>\'></script>
	<link rel="stylesheet" href= "./codebase/skins/dhtmlxmessage_dhx_skyblue.css" type="text/css" media="all"/> 
	<link rel=\'stylesheet\' type=\'text/css\' href=\'auto-complete/jquery.auto-complete.css?<?= mktime() ?>\' />
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

		'; ?>

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
			<?php if ($this->_tpl_vars['SuccessMessage'] != ""): ?>
			<div class="isa_success">
			<i class="fa fa-check"></i>
			<?php echo $this->_tpl_vars['SuccessMessage']; ?>
		 
			</div>
		 <?php endif; ?>
		  <?php if ($this->_tpl_vars['ErrorMessage'] != ""): ?>
			<div class="isa_error">
			<i class="fa fa-times"></i>
			<?php echo $this->_tpl_vars['ErrorMessage']; ?>
		 
			</div>
		 <?php endif; ?>
		 		
                  <div class="box-body">
				  <?php $_from = $this->_tpl_vars['ListMas']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['View']):
?>
				   <div class="col-md-6">
                    <div class="form-group">			 
                      <label class="col-sm-3 control-label">Role Name</label>
                      <div class="col-sm-5">
					  <input type="hidden" class="form-control" id="role_id" name="role_id" tabindex="1" value="<?php echo $this->_tpl_vars['View']['role_id']; ?>
" placeholder="Role Id">
                        <input type="text" class="form-control" id="role_name" name="role_name" tabindex="1" value="<?php echo $this->_tpl_vars['View']['role_name']; ?>
" placeholder="Role Name">
						
                      </div>
                    </div>
					  </div>
					<!--**********************************************************-->
                     <div class="col-md-6">
                    <div class="form-group">			 
                      <label class="col-sm-3 control-label">Category</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="category" name="category" tabindex="2" value="<?php echo $this->_tpl_vars['View']['category']; ?>
" placeholder="Category">
						<input type="hidden" class="form-control" id="timestamp" name="timestamp" value="<?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d &amp; %I:%M:%S %p') : smarty_modifier_date_format($_tmp, '%Y-%m-%d &amp; %I:%M:%S %p')); ?>
">
						<input type="hidden" class="form-control" id="created_time" name="created_time"  placeholder="Time" Value="<?php echo ((is_array($_tmp=$this->_tpl_vars['EditList']['now'])) ? $this->_run_mod_handler('date_format', true, $_tmp, '%I:%M:%S %p') : smarty_modifier_date_format($_tmp, '%I:%M:%S %p')); ?>
">
						<input type="hidden" class="form-control" id="created_date" name="created_date"  placeholder="Date" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['EditList']['now'])) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d') : smarty_modifier_date_format($_tmp, '%Y-%m-%d')); ?>
" >
						
                      </div>
                    </div>
                    </div>
					<?php endforeach; endif; unset($_from); ?>
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