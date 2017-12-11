<?php /* Smarty version 2.6.25, created on 2017-06-21 15:32:52
         compiled from prospect_edit.tpl */ ?>
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
	var fields=["prospect_id"];
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
	FormName		= document.edit_prospect;
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
         <small><a href="prospect_list.php"><i class="fa fa-list"> <label style="font-family:Arial, Helvetica, sans-serif">
		 List Prospect</label></i></a></small>&ensp;&ensp;&ensp;
         <small><a href="prospect.php"><i class="fa fa-user-plus"> <label style="font-family:Arial, Helvetica, sans-serif">
		 Create Prospect</label></i></a></small>
		 </h4>
        </section>
        <!-- Main content -->
        <section class="content">
          <!-- SELECT2 EXAMPLE -->
              <div class="box box-info">
            <div class="box-header with-border" align="center">
              <h3 class="box-title">Prospect Edit</h3>
              <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
              </div>
            </div><!-- /.box-header -->
			<form class="form-horizontal" id="edit_prospect" name="edit_prospect">
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
		 <?php $_from = $this->_tpl_vars['ListView1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['EditList']):
?>
				   <div class="col-md-6">
                   		 
                   <div class="form-group">
                      <label class="col-sm-3 control-label">Prospect Id</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="prospect_id" name="prospect_id" value="<?php echo $this->_tpl_vars['EditList']['prospect_id']; ?>
" placeholder="Prospect Id" readonly="true"  autocomplete="off" tabindex="1">
                      </div>
					  &nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>
                    </div>
					
				
					  <div class="form-group">
                      <label class="col-sm-3 control-label">Contact Person</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="contact_person" name="contact_person" value="<?php echo $this->_tpl_vars['EditList']['contact_person']; ?>
" placeholder="Contact Person" tabindex="8" onKeyUp="text_filter(this);" autocomplete="off">
						

                      </div>
					 <!-- &nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>-->
                      </div>
					 <div class="form-group">
                      <label class="col-sm-3 control-label">Address</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="address" name="address" placeholder="Address" value="<?php echo $this->_tpl_vars['EditList']['address']; ?>
" tabindex="18" autocomplete="off">

                      </div>
					 <!-- &nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>-->
                    </div>
					
					

					</div>
					<!--**********************************************************-->
                     <div class="col-md-6">
                    <div class="form-group">
					<p id="error_cmp_name" align="center" style="color: #FF0000;"></p>
                      <label class="col-sm-3 control-label">Company Name</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="cmpny_name" name="cmpny_name" value="<?php echo $this->_tpl_vars['EditList']['company_name']; ?>
" placeholder="Company Name" tabindex="2" autocomplete="off" onKeyUp="clear_err_name_of_cmp();text_filter(this);" onBlur="chk_exist_cmp(this);">
                      </div>
					  <font class="error" color="#f56954"><b>*</b>&nbsp;</font>

                    </div>
                    
				
					<div class="form-group">
                      <label class="col-sm-3 control-label">Contact No </label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="mobile_no" name="mobile_no" placeholder="Contact No" maxlength="10" value="<?php echo $this->_tpl_vars['EditList']['mobile_no']; ?>
" tabindex="11" onKeyUp="numericFilter(this);"   autocomplete="off">
                      </div>
					  </div>
					  
					 <div class="form-group">
				<label class="col-sm-3 control-label">Mail Id</label>
				<div class="col-sm-5">
				<input type="email" class="form-control" id="mail_id" name="mail_id" placeholder="Email Id" onKeyup="validateForm();" value="<?php echo $this->_tpl_vars['EditList']['mail_id']; ?>
"  >

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
</div>