<?php /* Smarty version 2.6.25, created on 2016-07-06 18:58:18
         compiled from user_role_detail_view.tpl */ ?>
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
		'; ?>

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
				  <?php $_from = $this->_tpl_vars['ListMas']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['View']):
?>
				  <table width="118%">
				<tr>
				 <td >Created:<?php echo $this->_tpl_vars['View']['created_date']; ?>
&nbsp;&nbsp;<?php echo $this->_tpl_vars['View']['created_time']; ?>
</td>
				 <td><h4 class="box-title">&nbsp;&nbsp;&nbsp;&nbsp;User Role Detailed View</h4>
				 <h4></h4></td>
				<td style="margin-left:-1000px;"> Modified:<?php echo $this->_tpl_vars['Date_Stamp']['0']['Date']; ?>
&nbsp;&nbsp;<?php echo $this->_tpl_vars['Time_Stamp']['0']['Time']; ?>
</td>
				 </tr>
				 </table>
				 <?php endforeach; endif; unset($_from); ?>
				 <form class="form-horizontal" name="userRoleEdit">
			<input type="hidden" name="hdAction" />
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
                      <label class="col-sm-4 thick">Role Name</label>
                      <div class="col-sm-6">
                        <?php echo $this->_tpl_vars['View']['role_name']; ?>

                      </div>
                    </div>
					</div>
<!--************************************************************************************-->
					<div class="col-md-6">
					 <div class="form-group">
                      <label class="col-sm-4 thick">Category</label>
                      <div class="col-sm-6">
                       <?php echo $this->_tpl_vars['View']['category']; ?>

                      </div>
                    </div>
					<?php endforeach; endif; unset($_from); ?>
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