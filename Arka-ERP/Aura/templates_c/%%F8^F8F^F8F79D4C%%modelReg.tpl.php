<?php /* Smarty version 2.6.25, created on 2016-01-22 13:40:23
         compiled from modelReg.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'modelReg.tpl', 47, false),)), $this); ?>
 </div>
 	<div class="wrapper wrapper-content animated fadeInRight">
    	<div class="row">
        	<?php if ($this->_tpl_vars['SuccessMessage'] != ""): ?>
			<div class="isa_success">
			<i class="fa fa-check"></i>
			<?php echo $this->_tpl_vars['SuccessMessage']; ?>
		 
			</div>
		 	<?php endif; ?>
		    <?php if ($this->_tpl_vars['ErrorMessage'] != ""): ?>
			<div class="isa_error">
			<i class="fa fa-check"></i>
			<?php echo $this->_tpl_vars['ErrorMessage']; ?>
		 
			</div>
		    <?php endif; ?>
                
       </div>
       	<div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins" >
                        <div class="ibox-title">
                          <h5  style="padding-left:40%;"> Model Registration Form</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
<!--                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                    <i class="fa fa-wrench"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-user">
                                    <li><a href="#">Config option 1</a>
                                    </li>
                                    <li><a href="#">Config option 2</a>
                                    </li>
                                </ul>
                                <a class="close-link">
                                    <i class="fa fa-times"></i>
                                </a>-->
                            </div>
                        </div>
                        <div class="ibox-content"> 

						<form role="form" method="post" id="modelReg" name="modelReg"action="">
						<div id="modelAdd" name="modelAdd">
							<input type="hidden"  id="hdAction"  name="hdAction" />
							<input type="hidden"  id="model_id"  name="model_id" value="<?php echo $this->_tpl_vars['m_id']; ?>
" />
							<input type="hidden"  id="cr_dt"  name="cr_dt" value="<?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d') : smarty_modifier_date_format($_tmp, '%Y-%m-%d')); ?>
" />
							<input type="hidden"  id="cr_ti"  name="cr_ti" value="<?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%I:%M:%S %p') : smarty_modifier_date_format($_tmp, '%I:%M:%S %p')); ?>
" />
							<input type="hidden"  id="cr_by"  name="cr_by" value="<?php echo $this->_supers['session']['UserName']; ?>
" />
						  
						  
						   <div class="row">
						   <div class="col-md-4"><label> Model Name</label> </div>
						   <div class="col-md-4"><input type="text" placeholder=" model Name" id="modelName" name="modelName" class="form-control" value="<?php echo $this->_supers['post']['modelName']; ?>
"autocomplete="Off"></div>
						   </div>
						   
						   <div class="row">
						   <div class="col-md-4">&nbsp;</div>
						   <div class="col-md-4">&nbsp;</div>
						   </div>
						   
						 					   												   													   
												<h3 class="m-t-none m-b" align="center">Product materials</h3>
                                                <div class="hr-line-dashed"></div>	   
                                 
                                        <div class="row">
                                            <div class="col-md-4"> 
											
											<input type="hidden"  id="hdAction3"  name="hdAction3" />
											<select class="form-control input-lg" multiple="" name="exam16[]" id="exam16" size="10"  value="<?php echo $this->_tpl_vars['exam16']; ?>
">
													<?php $_from = $this->_tpl_vars['PageList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ListDet']):
?>
													
														<option value="<?php echo $this->_tpl_vars['ListDet']['material_name']; ?>
"    ondblclick="deleteCats('<?php echo $this->_tpl_vars['ListDet']['material_name']; ?>
');" ><?php echo $this->_tpl_vars['ListDet']['material_name']; ?>
</option>	
													<?php endforeach; endif; unset($_from); ?>
													
												<option value=<input type="text" id="modeMtrladd" name="modelMtrladd" data-toggle="modal" data-target="#myModal"  style="font-size:16px;color:#000000">Create Mtrl</option>	
												
                                            </select>
										
											</div>
                                            <div class="col-md-1 top-buffer" >
											<br /><br /><br /><br /><br /><br />
											<input type="button" class="btn btn-sm btn-primary m-t-n-xs" name="add" value=">>" onClick="moveOptionLeftToRight(this.form.exam16,this.form.dexam16)" id="roleadd"><br><br>
   				                                   <input type="button" class="btn btn-sm btn-primary m-t-n-xs" name="remove" value="<<" onClick="moveOptionRightToLeft(this.form.dexam16, this.form.exam16)" id="roleremove">
											</div>
                                            <div class="col-md-4">
											 <select class="form-control input-lg" multiple="" name="dexam16[]" id="dexam16" size="10" value="<?php echo $this->_tpl_vars['dexam16']; ?>
">
													  
                                              </select>
											 </div>
                                        </div>		   
													   
													   <div class="row">
													   <div class="col-md-4">&nbsp;</div>
													   <div class="col-md-4">&nbsp;</div>
                                                       </div>
													   
                                                        <div align="right">
                                         <div class="row"> 
                                         <div class="col-md-3"> 
										 <input type="button" class="btn btn-sm btn-primary pull-center m-t-n-xs" value="Create model" onClick="listbox_selectall('dexam16',true);validatemodelCreation();"> 
										  <button class="btn btn-sm btn-primary m-t-n-xs" type="button" id="back">CANCEL</button> 
	                                 </div>
										 
										 <br />
                                      </div>
                                          <div>
										 
											</div>
											</div>
														
                              														
														
                                                   <!--<button class="btn btn-sm btn-primary pull-right m-t-n-xs"  onclick="validateUserGroupCreation();"><strong>Add Role</strong></button>-->
                                                        </div>    </div > </form>
														<!-- < div  id="materialAdd" style="display:none" class="ibox-content" >
														<form  method="post" id="mtrlReg" name="mtrlReg"action="">
														<div class="row" class="ibox float-e-margins" >  <h4  style="padding-left:40%;">Material Registration Form</h4><hr/></div>
														
														  <div class="row">
														<input type="hidden"  id="hdAction2"  name="hdAction2" />
						   <div class="col-md-4"><label> Material Name</label> </div>
						   <div class="col-md-4"><input type="text" placeholder=" Material Name" id="material_name" name="material_name" class="form-control" value="<?php echo $this->_supers['post']['material_name']; ?>
"autocomplete="Off"></div>
						   </div><br/>
						  	
													  <div align="center">
                                         
                                        <button class="btn btn-primary" type="button" id="modeMtrladd" value="Add Mtrl" onClick="validateMaterial();">ADD Material</button>
										<button class="btn btn-white" type="button" id="back1">CANCEL</button>
                                      </div>  </form>
									  </div>-->
									  <div class="modal inmodal" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog">
                                <div class="modal-content animated bounceInRight">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                            
                                            <h4 class="modal-title">Material Registration Form.</h4>
                                           
                                        </div>
                                        <div class="modal-body">
                                            <form  method="post" id="mtrlReg" name="mtrlReg"action="">
														
														
														  <div class="row">
														<input type="hidden"  id="hdAction2"  name="hdAction2" />
						   <div class="col-md-4"><label> Material Name</label> </div>
						   <div class="col-md-4"><input type="text" placeholder=" Material Name" id="material_name" name="material_name" class="form-control" value="<?php echo $this->_supers['post']['material_name']; ?>
"autocomplete="Off"></div>
						   </div><br/>
						  	
													  <div align="center">
                                         
                                        <button class="btn btn-primary" type="button" id="modeMtrladd" value="Add Mtrl" onClick="validateMaterial();">ADD Material</button>
										<button class="btn btn-white" type="button" id="back1">CANCEL</button>
                                      </div>  </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                                         
                                        </div>
                                    </div>
                                </div>
                            </div>
									  
									  
									  
									  	
                                                   
                    </div>
                </div>
            </div>
        </div>
	<?php echo '	
<script>
 $(document).ready(function() {	
$("#back").click(function(){

window.history.back();

});
});
$("#modeMtrladd").click(function(){
document.getElementById(\'materialAdd\').style.display=\'inherit\';


$("#modelAdd").hide();


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
	
	    $(\'.datepicker\').datepicker({
                todayBtn: "linked",
				format:\'yyyy-mm-dd\',
                keyboardNavigation: false,
                forceParse: false,
                calendarWeeks: true,
                autoclose: true
            });	 
			
			$(document).on("click", ".fa-trash", function () {
     var material_name = $(this).data(\'id\');
     $(".modal-body #hdnDelmaterial_name").val(material_name);
});

		
function deleteCats(CatIdent){
 if(confirm("Are you sure to Delete this Material?")){
  FormName		= document.modelReg;
   //var gate = document.getElementById(\'gate_entry_id\').value;
  FormName.action= "./modelDelete.php?material_name="+CatIdent;
  FormName.submit();
 }
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
		/*	if(objSourceElement.name=="exam6[]")
			{
					partnrchnges(\'partnersubcaste\',objTargetElement);
			}*/
			
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

function validatemodelCreation()
{									  
               var fields=["modelName"]; 
				for(i=0;i<fields.length;i++)
				{
				current_iteration = document.getElementById(fields[i]).value;
				document.getElementById(fields[i]).style.borderColor="";
						if(current_iteration=="")
						{			
						document.getElementById(fields[i]).focus();
						document.getElementById(fields[i]).style.borderColor="red";									
						return false;
						
						}	
				}
			  FormName= document.modelReg;
  			  FormName.method= "POST";
              FormName.submit(); 		
	          
 }
 function validateMaterial()
{									  
               var fields=["material_name"]; 
				for(i=0;i<fields.length;i++)
				{
				current_iteration = document.getElementById(fields[i]).value;
				document.getElementById(fields[i]).style.borderColor="";
						if(current_iteration=="")
						{			
						document.getElementById(fields[i]).focus();
						document.getElementById(fields[i]).style.borderColor="red";									
						return false;
						
						}	
				}
			  FormName= document.mtrlReg;
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
'; ?>