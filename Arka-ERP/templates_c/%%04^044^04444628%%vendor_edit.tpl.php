<?php /* Smarty version 2.6.25, created on 2017-01-07 15:15:33
         compiled from vendor_edit.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'vendor_edit.tpl', 179, false),)), $this); ?>
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
function numericFilter(data) 
{
   data.value = data.value.replace(/[^.0-9^.+,-]/ig,"");
}	
function text_filter(data)
{
   data.value = data.value.replace(/[^ .a-z]/ig,"");
   
}

       function validate_fields()
        {	
		var fields=["vendor_id","company_name","service_tax","tin_no","cst_no"];
				for(i=0;i<fields.length;i++)
				{
				//alert(fields[i]);
				current_iteration = document.getElementById(fields[i]).value;
				document.getElementById(fields[i]).style.borderColor="";
						if(current_iteration=="")
						{
						document.getElementById(fields[i]).focus();
						document.getElementById(fields[i]).style.borderColor="red";
						 if(i==1)
						{
						var company_name  =  document.getElementById("company_name").value;
						if(company_name=="")
						{
						dhtmlx.alert({
								title: "Error !",
								type:"alert-error",
								text: "Please Enter Company Name",
											});
									return false;
						}
						}
						 if(i==2)
						{
						var service_tax  =  document.getElementById("service_tax").value;
						if(service_tax=="")
						{
						dhtmlx.alert({
								title: "Error !",
								type:"alert-error",
								text: "Please Enter Service Tax",
											});
									return false;
						}
						}
						 if(i==4)
						{
						var tin_no  =  document.getElementById("tin_no").value;
						if(tin_no=="")
						{
						dhtmlx.alert({
								title: "Error !",
								type:"alert-error",
								text: "Please Enter Tin No",
											});
									return false;
						}
						}
						 if(i==5)
						{
						var cst_no  =  document.getElementById("cst_no").value;
						if(cst_no=="")
						{
						dhtmlx.alert({
								title: "Error !",
								type:"alert-error",
								text: "Please Enter Cst No",
											});
									return false;
						}
						}

              return false;
						}

				} 			  
			FormName	= document.edit_vendor;
  			  FormName.method	= "POST";
              FormName.submit();
		}
		
</script>
'; ?>

  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
		<h4>
         <small><a href="vendor_list.php"><i class="fa fa-list"> <label style="font-family:Arial, Helvetica, sans-serif">
		 List Vendors</label></i></a></small>&ensp;&ensp;&ensp;
         <small><a href="vendor_reg.php"><i class="fa fa-user-plus"> <label style="font-family:Arial, Helvetica, sans-serif">
		 Create Vendor</label></i></a></small>
		 </h4>
       </section>

        <!-- Main content -->
        <section class="content">

          <!-- SELECT2 EXAMPLE -->
          <div class="box box-info">
            <div class="box-header with-border" align="center" >
              <h3 class="box-title">Vendor Edit</h3>
              <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
              </div>
            </div><!-- /.box-header -->
			
			<form class="form-horizontal" name="edit_vendor">
			 <input type="hidden" name="hdAction" />
					<input type="hidden" id="c_id" name="c_id" size="25" value="<?php echo $this->_tpl_vars['c_id']; ?>
" readonly="true" >
					<input type="hidden" id="mobile_fld_cnt" name="mobile_fld_cnt"  value="2"  >
					<input type="hidden" id="phone_fld_cnt" name="phone_fld_cnt"  value="2"  >
					<input type="hidden" id="email_fld_cnt" name="email_fld_cnt"  value="2"  >
					<input type="hidden" id="hdn_salutation" name="hdn_salutation" value="<?php echo $this->_supers['post']['salutaion']; ?>
">
					<input type="hidden" id="hdn_order_status" name="hdn_order_status" value="<?php echo $this->_supers['post']['order_status']; ?>
">
					<input type="hidden" id="hdn_customer_status" name="hdn_customer_status" value="<?php echo $this->_supers['post']['customer_status']; ?>
">
					<input type="hidden" id="hdn_customer_type" name="hdn_customer_type" value="<?php echo $this->_supers['post']['customer_type']; ?>
">
					
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
				  <?php $_from = $this->_tpl_vars['ListEdit']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['View']):
?>
				   <div class="col-md-6">
                    <div class="form-group">			 
                      <label class="col-sm-3 control-label">Vendor Id</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="vendor_id" name="vendor_id" value="<?php echo $this->_tpl_vars['View']['vendor_id']; ?>
" tabindex="1" placeholder="Vendor Id" readonly="true">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Service Tax</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="service_tax" name="service_tax" value="<?php echo $this->_tpl_vars['View']['service_tax']; ?>
" tabindex="3" placeholder="Service Tax">
						<input type="hidden" class="form-control" id="created_by" name="created_by"value="<?php echo $this->_supers['session']['UserName']; ?>
">
	                    <input type="hidden" class="form-control" id="created_date" name="created_date" value="<?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d') : smarty_modifier_date_format($_tmp, '%Y-%m-%d')); ?>
">
						<input type="hidden" class="form-control" id="created_time" name="created_time" value="<?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%I:%M:%S %p') : smarty_modifier_date_format($_tmp, '%I:%M:%S %p')); ?>
" >
                      </div>
                    </div>
					 <div class="form-group">
                      <label class="col-sm-3 control-label">Tin No</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="tin_no" name="tin_no" value="<?php echo $this->_tpl_vars['View']['tin_no']; ?>
" tabindex="5" placeholder="Tin No">
                      </div>
                    </div>
					</div>
					<!--**********************************************************-->
                      <div class="col-md-6">
					  <div class="form-group">
                      <label class="col-sm-3 control-label">Company Name</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="company_name" name="company_name" value="<?php echo $this->_tpl_vars['View']['vendor_company_name']; ?>
" tabindex="2"  placeholder="Vendor Company Name" onKeyUp="text_filter(this);">
                      </div>
                    </div>
					 
					  <div class="form-group">
                      <label class="col-sm-3 control-label">Cst No</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="cst_no" name="cst_no" value="<?php echo $this->_tpl_vars['View']['cst_no']; ?>
" tabindex="4" placeholder="Cst No">
                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-3 control-label">Remarks</label>
                      <div class="col-sm-5">
                       <textarea class="form-control" id="remarks" name="remarks" tabindex="6" placeholder="Remarks"><?php echo $this->_tpl_vars['View']['remarks']; ?>
</textarea>
                      </div>
					  
                    </div>
					</div>
					<?php endforeach; endif; unset($_from); ?>
                    </div>
					
					 <div class="box-footer"><center>
                     <input type="button" class="btn btn-info pull-center" value="UPDATE" onClick="validate_fields();" >&nbsp;&nbsp;
                     <a href="./vendor_list.php" button type="submit" class="btn btn-info pull-center" onClick="GoBack()" >CANCEL</a></center>
                  </div>
                  </div>
				 </form>
      <div class="control-sidebar-bg"></div>
    </div>
	</div>
	
  </body>
