<?php /* Smarty version 2.6.25, created on 2016-07-20 12:22:15
         compiled from material_edit.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'material_edit.tpl', 119, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "left.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php echo '
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
<script>
function validate_fields()
{
	var fields=["material_code","material_make","material_category","mat_name","material_price","material_type","specification"];
	for(i=0;i<fields.length;i++)
	{
		//alert(fields[i]);
		current_iteration = document.getElementById(fields[i]).value;
		document.getElementById(fields[i]).style.borderColor="";
		if(current_iteration=="")
		{
			//		alert("Please Fill! "+fields[i]);
			document.getElementById(fields[i]).focus();
			document.getElementById(fields[i]).style.borderColor="red";
			return false;
		}
	}	
	FormName		= document.edit_material;
	FormName.method	= "POST";
	FormName.submit();
}
function GoBack()
{
	window.history.back();
}
function numericFilter(data){
	data.value=data.value.replace(/[^.0-9^.+,-]/ig,"");
}
function textfilter(data){
	data.value=data.value.replace(/[^.a-z]/ig,"");
}
</script>
'; ?>

  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
		<h4>
         <small><a href="material_list.php"><i class="fa fa-list"> <label style="font-family:Arial, Helvetica, sans-serif">
		 List Materials</label></i></a></small>&ensp;&ensp;&ensp;
         <small><a href="material_reg.php"><i class="fa fa-user-plus"> <label style="font-family:Arial, Helvetica, sans-serif">
		 Create Material</label></i></a></small>
		 </h4>
        </section>
        <!-- Main content -->
        <section class="content">
          <!-- SELECT2 EXAMPLE -->
              <div class="box box-info">
            <div class="box-header with-border" align="center">
              <h3 class="box-title">Material Edit</h3>
              <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
              </div>
            </div><!-- /.box-header -->
			<form class="form-horizontal" id="edit_material" name="edit_material">
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
		 <?php $_from = $this->_tpl_vars['ListView']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['EditList']):
?>
				   <div class="col-md-6">
                    <div class="form-group">			 
                      <label class="col-sm-4 control-label">Material Code</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="material_code" name="material_code" value="<?php echo $this->_tpl_vars['EditList']['material_code']; ?>
" tabindex="1" placeholder="Material Code" autocomplete="off">
                      </div>
                    </div>
				<div class="form-group">
                      <label class="col-sm-4 control-label">Make</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="material_make" name="material_make" value="<?php echo $this->_tpl_vars['EditList']['material_make']; ?>
" tabindex="3" placeholder="Material Make" autocomplete="off">
                      </div>
					  </div>
					  <div class="form-group">
                      <label class="col-sm-4 control-label">Price</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="material_price" name="material_price" value="<?php echo $this->_tpl_vars['EditList']['material_price']; ?>
" tabindex="5" placeholder="Material Price" autocomplete="off" onKeyUp="numericFilter(this);">
                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-4 control-label">Specification</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="specification" name="specification" value="<?php echo $this->_tpl_vars['EditList']['specification']; ?>
" tabindex="7" placeholder="Specification" autocomplete="off">
						
						<input type="hidden" class="form-control" id="timestamp_value" name="timestamp_value" value="<?php echo $this->_tpl_vars['EditList']['timestamp_value']; ?>
" placeholder="Timestamp">
						<input type="hidden" class="form-control" id="created_date" name="created_date" value="<?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d') : smarty_modifier_date_format($_tmp, '%Y-%m-%d')); ?>
">
						<input type="hidden" class="form-control" id="created_time" name="created_time" value="<?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%I:%M:%S %p') : smarty_modifier_date_format($_tmp, '%I:%M:%S %p')); ?>
">
                      </div>
                    </div>
						<div class="form-group">			 
                      <label class="col-sm-4 control-label">Created By</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="created_by" name="created_by" value="<?php echo $this->_tpl_vars['EditList']['created_by']; ?>
" tabindex="9" placeholder="Created By" readonly="true" autocomplete="off">
                      </div>
                    </div> 
                    </div>
					<!--**********************************************************-->
                      <div class="col-md-6">
					  <div class="form-group">
                      <label class="col-sm-4 control-label">Material Name</label>
                      <div class="col-sm-5">
                      <input type="text" class="form-control" id="mat_name" name="mat_name" value="<?php echo $this->_tpl_vars['EditList']['material_name']; ?>
" tabindex="2" placeholder="Material Name"  data-toggle="modal" value="TESTING" autocomplete="off" onKeyUp="textfilter(this);">
                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-4 control-label">Category</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="material_category" name="material_category" value="<?php echo $this->_tpl_vars['EditList']['material_category']; ?>
" tabindex="4"  placeholder="Material Category" autocomplete="off">
                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-4 control-label">Type</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="material_type" name="material_type" value="<?php echo $this->_tpl_vars['EditList']['material_type']; ?>
" placeholder="Material Type" tabindex="6" autocomplete="off">
                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-4 control-label">Remarks</label>
                      <div class="col-sm-5">
                        <textarea class="form-control" id="remarks" name="remarks" value="" placeholder="Remarks"  tabindex="8"><?php echo $this->_tpl_vars['EditList']['remarks']; ?>
</textarea>
                      </div>
                    </div>
                    </div>
					</div>
                    <?php endforeach; endif; unset($_from); ?>
					<div class="box-footer"><center>
                    <input type="button" value="EDIT MATERIAL" class="btn btn-info" onClick="validate_fields();" tabindex="10">&nbsp;&nbsp;
                    <button type="submit" class="btn btn-info" onClick="GoBack();" tabindex="11">CANCEL</button></center>
                  </div>
                  </div> 
                </form>
      <div class="control-sidebar-bg"></div>
    </div>
  </body>
