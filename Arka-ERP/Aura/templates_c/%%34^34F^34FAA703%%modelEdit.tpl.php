<?php /* Smarty version 2.6.25, created on 2015-11-26 13:26:30
         compiled from modelEdit.tpl */ ?>
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
           
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                          <h5 style="padding-left:40%;">Edit Model Details</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                               
                            </div>
                        </div>
                        <div class="ibox-content">
                            <form role="form" method="post" name="model" id="model">
							<input type="hidden" name="hdAction" id="hdAction">
										 <?php $_from = $this->_tpl_vars['MasterList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ListDet']):
?>
											   <div class="row">
											   <input type="hidden"  id="model_id"  name="model_id" value="<?php echo $this->_tpl_vars['ListDet']['model_id']; ?>
" />
											   <div class="col-md-4"><label>Model Name</label> </div>
											   <div class="col-md-6"><input type="text" id="modelName" name="modelName" class="form-control" value="<?php echo $this->_tpl_vars['ListDet']['model_name']; ?>
" autocomplete="Off"></div>
											    
											   <div class="row">
											   <div class="col-md-4">&nbsp;</div>
											   <div class="col-md-4">&nbsp;</div>
											   </div>
											   
											  <?php endforeach; endif; unset($_from); ?>
								 <h3 class="m-t-none m-b" align="center">Product materials</h3>
                                                <div class="hr-line-dashed"></div>	   
                                 
                                        <div class="row">
                                            <div class="col-md-4"> 
											<select class="form-control input-lg" multiple="" name="exam16[]" id="exam16" size="10" >
													<?php $_from = $this->_tpl_vars['PageList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ListPag']):
?>
														<option value="<?php echo $this->_tpl_vars['ListPag']['material_name']; ?>
"><?php echo $this->_tpl_vars['ListPag']['material_name']; ?>
</option>	
													 <?php endforeach; endif; unset($_from); ?>
                                            </select>
											</div>
                                            <div class="col-md-1 top-buffer" >
											<br /><br /><br /><br /><br /><br />
											<input type="button" class="btn btn-sm btn-primary m-t-n-xs" name="add" value=">>" onClick="moveOptionLeftToRight(this.form.exam16,this.form.dexam16)" id="modeladd"><br><br>
   				                                   <input type="button" class="btn btn-sm btn-primary m-t-n-xs" name="remove" value="<<" onClick="moveOptionRightToLeft(this.form.dexam16, this.form.exam16)" id="modelremove">
											</div>
                                            <div class="col-md-4">
											 
											 <select class="form-control input-lg" multiple="" name="dexam16[]" id="dexam16" size="10" >
													<?php $_from = $this->_tpl_vars['ModelMapping']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['MappingMod']):
?>   
													<option value="<?php echo $this->_tpl_vars['MappingMod']['material_name']; ?>
"><?php echo $this->_tpl_vars['MappingMod']['material_name']; ?>
</option>
													<?php endforeach; endif; unset($_from); ?>  
                                              </select>
											 </div>
                                        </div>
                                   												   			   
												   
													   <div class="row">
													   <div class="col-md-4">&nbsp;</div>
													   <div class="col-md-4">&nbsp;</div>
                                                       </div>
													   
                                                      <div class="row">
											
													   
											   <div class="col-md-8">
												<input type="button" name="button" id="" class="btn btn-sm btn-primary pull-right m-t-n-xs" value="Update model" onClick="listbox_selectall('dexam16',true);validatemodelUpdation();" autocomplete="Off">
												 </div> 
												 <button class="btn btn-sm btn-primary m-t-n-xs" type="button" id="back">CANCEL</button>                              
											   </div>
                                          <div>
                                                        </div></div>
														
                                                    </form></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>`
		<?php echo '
		
<script type="text/javascript">
 $(document).ready(function() {	
$("#back").click(function(){

window.history.back();

});
});
function validatemodelUpdation()
{								  
                var fields=["model_id","modelName"]; 
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
	          FormName= document.model;
  			  FormName.method= "POST";
              FormName.submit(); 
							
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
     var model_id= $(this).data(\'id\');
     $(".modal-body #hdnmodel_id").val(model_id);
});

function listbox_selectall(listID, isSelect) {
        var listbox = document.getElementById(listID);
        for(var count=0; count < listbox.options.length; count++) {
            listbox.options[count].selected = isSelect;
    }
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

        