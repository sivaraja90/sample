<?php /* Smarty version 2.6.25, created on 2017-01-24 13:49:34
         compiled from user_group_reg.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'user_group_reg.tpl', 49, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "left.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
  <body class="hold-transition skin-blue sidebar-mini" >
    <div class="wrapper">
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
		<h4>
         <small><a href="user_group_list.php"><i class="fa fa-list"> <label style="font-family:Arial, Helvetica, sans-serif">
		 List User Groups</label></i></a></small>&ensp;&ensp;&ensp;
         <small class="active"><a href="user_group_reg.php"><i class="fa fa-user-plus"> <label style="font-family:Arial, Helvetica, sans-serif">
		 Create User Group</label></i></a></small>
		 </h4>

        </section>

        <!-- Main content -->
        <section class="content">

          <!-- SELECT2 EXAMPLE -->
          <div class="box box-info">
            <div class="box-header with-border" align="center">
              <h3 class="box-title">User Group Management</h3>
              <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
              </div>
            </div><!-- /.box-header -->
			
			<form class="form-horizontal" name="userGroupReg">
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
                  <div class="box-body ">
				   <div class="col-md-6">
                    <div class="form-group">			 
                      <label class="col-sm-4 control-label">Group Id</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" id="group_id" name="group_id" value="<?php echo $this->_tpl_vars['g_id']; ?>
" readonly="true" tabindex="1" placeholder="Group Id" readonly="true">
						<input type="hidden" class="form-control" id="timestamp" name="timestamp" value="<?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d &amp; %I:%M:%S %p') : smarty_modifier_date_format($_tmp, '%Y-%m-%d &amp; %I:%M:%S %p')); ?>
">
						<input type="hidden" class="form-control" id="created_date" name="created_date" value="<?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d') : smarty_modifier_date_format($_tmp, '%Y-%m-%d')); ?>
">
						<input type="hidden" class="form-control" id="created_time" name="created_time" value="<?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%I:%M:%S %p') : smarty_modifier_date_format($_tmp, '%I:%M:%S %p')); ?>
">
                      </div>
                    </div>
					  <div class="form-group">			 
                      <label class="col-sm-4 control-label">Group Name</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" id="group_name" name="group_name" tabindex="2" value="<?php echo $this->_supers['post']['group_name']; ?>
" placeholder="Group Name" autocomplete="Off" onKeyUp="textFilter(this);">
                      </div>
                    </div>
					 <div class="form-group">			 
                      <label class="col-sm-4 control-label">Description</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" id="description" name="description" tabindex="3" value="<?php echo $this->_supers['post']['description']; ?>
" placeholder="Desription" autocomplete="Off" onKeyUp="textFilter(this);">
                      </div>
                    </div>
				  </div>
				  <div class="form-group">
						   <div class="col-md-4">&nbsp;</div>
						   <div class="col-md-4">&nbsp;</div>
						   </div>
						   
						   				<h3 class="m-t-none m-b">Roles Creation</h3>
                                                <div class="hr-line-dashed"></div>	   
                                 
                                  <div class="form-group">
                                  <div class="col-md-4"> 
					<select class="form-control input-lg" multiple="multiple" name="exam16[]" id="exam16" size="15" value="<?php echo $this->_tpl_vars['exam16']; ?>
" autocomplete="Off" tabindex="4">
													<?php $_from = $this->_tpl_vars['RoleList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ListDet']):
?>
														<option value="<?php echo $this->_tpl_vars['ListDet']['role_name']; ?>
"><?php echo $this->_tpl_vars['ListDet']['role_name']; ?>
</option>	
													<?php endforeach; endif; unset($_from); ?>
                                            </select>
											</div>
                                            <div class="col-md-1 top-buffer" >
											<br /><br /><br /><br /><br /><br />
											<input type="button" class="btn btn-sm btn-primary m-t-n-xs" name="add" value=">>" onClick="moveOptionLeftToRight(this.form.exam16,this.form.dexam16)" id="roleadd" autocomplete="Off" ><br><br>
   				                                   <input type="button" class="btn btn-sm btn-primary m-t-n-xs" name="remove" value="<<" onClick="moveOptionRightToLeft(this.form.dexam16, this.form.exam16)" id="roleremove" autocomplete="Off" >
											</div>
                                            <div class="col-md-4">
		<select class="form-control input-lg" multiple="multiple" name="dexam16[]" id="dexam16" size="15" value="<?php echo $this->_tpl_vars['dexam16']; ?>
" autocomplete="Off" tabindex="5">
                                              </select>
											 </div>
                                        </div>

					<!--**********************************************************-->

				</div>
				 <div class="box-footer"><center>
                   <input type="button" class="btn btn-info pull-center" value="CREATE USER GROUP"  onClick="validate_fields();listbox_selectall('dexam16', true)" >&nbsp;&nbsp;
                    <button type="submit" class="btn btn-info pull-center" id="back" >CANCEL</button></center>
                  </div>
				  </form>
				  </div>
                

      <div class="control-sidebar-bg"></div>
    </div>
	<?php echo '	
<script>
 $(document).ready(function() {	
$("#back").click(function(){

window.history.back();

});
});

function ValidateEmail(inputText)  
		{  
		var mailformat = /^\\w+([\\.-]?\\w+)*@\\w+([\\.-]?\\w+)*(\\.\\w{2,3})+$/;  
		if(inputText.value.match(mailformat))  
		{  
			document.form1.text1.focus();  
			return true;  
		}  
		else  
		{  
			alert("You have entered an invalid email address!");  
			document.form1.text1.focus();  
			return false;  
		}  
} 

		 
function numericFilter(data) 
{
   data.value = data.value.replace(/[^.0-9]/ig,"");
}	
function textFilter(data)
{
   data.value = data.value.replace(/[^ .a-z]/ig,"");
}
			
//*************************************swapping start*********************************************//
function moveOptionLeftToRight(objSourceElement,objTargetElement)
{ 
	var aryTempSourceOptions = new Array();
	var x = 0;
	
	for (var i = 0; i < objSourceElement.length; i++){
		if (objSourceElement.options[i].selected){
			if(objTargetElement.options.length > 0 && objTargetElement.options[0].text == \'None\'){
				objTargetElement.options.length = 0;		
			}
			var intTargetLen = objTargetElement.length++;
			if((objSourceElement.options[i].text=="Other")&&(objSourceElement.name=="exam16[]"))
			{
				statuschng1(\'specdosh\',objSourceElement.name,objSourceElement.options[i].value)
			}
			
			objTargetElement.options[intTargetLen].text = objSourceElement.options[i].text;
			objTargetElement.options[intTargetLen].value = objSourceElement.options[i].value;
		
			
		}else{			
			var objTempValues = new Object();
			objTempValues.text = objSourceElement.options[i].text;
			objTempValues.value = objSourceElement.options[i].value;
			aryTempSourceOptions[x] = objTempValues;
			x++;
		}
	}
	objSourceElement.length = aryTempSourceOptions.length;	
	for (var i = 0; i < aryTempSourceOptions.length; i++) {
		objSourceElement.options[i].text = aryTempSourceOptions[i].text;
		objSourceElement.options[i].value = aryTempSourceOptions[i].value;
		objSourceElement.options[i].selected = false;
	}
	
}
function moveOptionRightToLeft(objSourceElement, objTargetElement){
	var aryTempSourceOptions = new Array();
	var x = 0;
	if(objSourceElement.options.length > 0 && objSourceElement.options[0].text == \'None\'){
		return false;
	}
	for (var i = 0; i < objSourceElement.length; i++){
		if (objSourceElement.options[i].selected){
			var intTargetLen = objTargetElement.length++;
			objTargetElement.options[intTargetLen].text = objSourceElement.options[i].text;
			objTargetElement.options[intTargetLen].value = objSourceElement.options[i].value;
			
		}else{			
			var objTempValues = new Object();
			objTempValues.text = objSourceElement.options[i].text;
			objTempValues.value = objSourceElement.options[i].value;
			aryTempSourceOptions[x] = objTempValues;
			x++;
		}
	}
	objSourceElement.length = aryTempSourceOptions.length;	
	for (var i = 0; i < aryTempSourceOptions.length; i++){
		objSourceElement.options[i].text = aryTempSourceOptions[i].text;
		objSourceElement.options[i].value = aryTempSourceOptions[i].value;
		objSourceElement.options[i].selected = false;
	}
	if(objSourceElement.options.length == 0){
		objSourceElement.options.length = 1;
		objSourceElement.options[0].text = \'None\';
		objSourceElement.options[0].selected = false;
	}
}


$(document).on("click", ".fa-edit", function () {
     var roleId = $(this).data(\'id\');
     $(".modal-body #hdnGroupId").val(roleId);
});

function listbox_selectall(listID, isSelect) {
        var listbox = document.getElementById(listID);
        for(var count=0; count < listbox.options.length; count++) {
            listbox.options[count].selected = isSelect;
    }
}

function validate_fields()
{									  
               var fields=["group_name","description","dexam16"]; 
				for(i=0;i<fields.length;i++)
				{
				current_iteration = document.getElementById(fields[i]).value;
				document.getElementById(fields[i]).style.borderColor="";
                  if(current_iteration=="")
						{
						document.getElementById(fields[i]).focus();
						document.getElementById(fields[i]).style.borderColor="red";
						if(i==0)
						{
						var group_name  =  document.getElementById("group_name").value;
						if(group_name=="")
						{
						dhtmlx.alert({
								title: "Error !",
								type:"alert-error",
								text: "Please Enter Group Name",
											});
									return false;
						}
						}
						if(i==1)
						{
						var description =  document.getElementById("description").value;
						if(description=="")
						{
						dhtmlx.alert({
								title: "Error !",
								type:"alert-error",
								text: "Please Enter Description",
											});
									return false;
						}
						}	
						if(i==2)
						{
						var dexam16 =  document.getElementById("dexam16").value;
						if(dexam16=="")
						{
						dhtmlx.alert({
								title: "Error !",
								type:"alert-error",
								text: "Please Select Roles",
											});
									return false;
						}
						}								
						return false;
						
						}	
				}
			  FormName= document.userGroupReg;
  			  FormName.method= "POST";
              FormName.submit(); 		
	          
 }

</script><style>
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

   <script type="text/javascript" src=\'./dhtmlxMessage/codebase/dhtmlxmessage.js\'></script>
	<script type=\'text/javascript\' src=\'./auto-complete/jquery.metadata.js\'></script>
	<script type=\'text/javascript\' src=\'./auto-complete/jquery.auto-complete.js?<?= mktime() ?>\'></script>
	<script type=\'text/javascript\' src=\'./auto-complete/js.js?<?= mktime() ?>\'></script>
	<link rel="stylesheet" href= "./codebase/skins/dhtmlxmessage_dhx_skyblue.css" type="text/css" media="all"/> 
	<link rel=\'stylesheet\' type=\'text/css\' href=\'auto-complete/jquery.auto-complete.css?<?= mktime() ?>\' />
	

'; ?>

  </body>
</html>