<?php /* Smarty version 2.6.25, created on 2016-01-29 13:14:31
         compiled from productReg.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'productReg.tpl', 70, false),)), $this); ?>
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
                
                
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                          <h5  style="padding-left:40%;">Product Registration Form</h5>
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
                        <div class="ibox-content"><body  onload="doOnLoad();">
                            <form method="post" class="form-horizontal" name="product_reg" id="product_reg">
                            <input type="hidden"  id="hdAction"  name="hdAction" />
							<div class="form-group">
							     <label class="col-sm-2 control-label" style="text-align:left;">Scada ID:<span style="color:#FF0000"><sup>*</sup></span></label>
                              <div class="col-md-4"  id="err_scada_Id"> <input type="text"  id="scada_Id"  name="scada_Id" class="form-control"  value="<?php echo $this->_tpl_vars['scada_Id']; ?>
" onKeyUp="numericFilter(this)" autocomplete="Off" ></div>
							       <label class="col-sm-2 control-label" style="text-align:left;">Product ID:<span style="color:#FF0000"><sup>*</sup></span></label>
                               <div class="col-md-4"  id="err_product_Id"> <input type="text"  id="product_id"  name="product_id"class="form-control"   readonly="true" value="<?php echo $this->_tpl_vars['p_id']; ?>
" autocomplete="Off"></div>
							   
							   </div>	
							   <div class="form-group">
							   <label class="col-sm-2 control-label" style="text-align:left; ">Production Batch:<span style="color:#FF0000"><sup>*</sup></span></label>
							   <div class="col-md-4" id="err_production_batch"><input type="text"  id="production_batch"  name="production_batch" class="form-control" value="<?php echo $this->_tpl_vars['production_batch']; ?>
" autocomplete="Off"></div>
							    <label class="col-sm-2 control-label" style="text-align:left;"> Production date:<span style="color:#FF0000"><sup>*</sup></span></label>
                               <div class="col-md-4" id="err_production_date"><input type="text" id="production_date"  name="production_date" class="form-control" value="<?php echo $this->_tpl_vars['production_date']; ?>
" readonly="true" autocomplete="Off">
							   
							   </div>
							   
					     </div>	
                         <div class="form-group">
							<label class="col-sm-2 control-label" style="text-align:left;"> Tested date:<span style="color:#FF0000"><sup>*</sup></span></label>
							<div class="col-md-4" id="err_tested_date"><input type="text"  required  id="tested_date"  name="tested_date" class="form-control" value="<?php echo $this->_tpl_vars['tested_date']; ?>
" readonly="true" autocomplete="Off">
			                </div>
							<label class="col-sm-2 control-label" style="text-align:left;">Created date:<span style="color:#FF0000"><sup>*</sup></span></label>
                            <div class="col-md-4" id="err_created_date"><input type="text" id="created_date"  name="created_date" value="<?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d') : smarty_modifier_date_format($_tmp, '%Y-%m-%d')); ?>
" class="form-control" readonly="true" autocomplete="Off">  
						    </div>
					     </div>	
                         <div class="form-group">
						    <label class="col-sm-2 control-label" style="text-align:left; ">Created time:<span style="color:#FF0000"><sup>*</sup></span></label>
							<div class="col-md-4" id="err_created_time"><input type="text"  id="created_time"  name="created_time" value="<?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%I:%M:%S %p') : smarty_modifier_date_format($_tmp, '%I:%M:%S %p')); ?>
" class="form-control" readonly="true" autocomplete="Off" >
							</div>
						    <label class="col-sm-2 control-label" style="text-align:left;">Created By:<span style="color:#FF0000"><sup>*</sup></span></label>
                            <div class="col-md-4"  id="err_created_by"><input type="text" id="created_by"  name="created_by" class="form-control" value="<?php echo $this->_supers['session']['UserName']; ?>
" readonly="true" autocomplete="Off">
							</div>
					     </div>	
					<br/>
					
					 <div class="form-group">
						    <label class="col-sm-2 control-label" style="text-align:left; ">Model Name:<span style="color:#FF0000"><sup>*</sup></span></label>
					            <div class="col-md-4" id="errmodelName"><select id="modelName"  name="modelName" class="form-control" value="<?php echo $this->_tpl_vars['modelName']; ?>
" autocomplete="Off">
						        <option value="select" selected="selected">-select- </option>
								<?php $_from = $this->_tpl_vars['ModelList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ListMod']):
?>	
							    <option value="<?php echo $this->_tpl_vars['ListMod']['model_name']; ?>
"><?php echo $this->_tpl_vars['ListMod']['model_name']; ?>
 </option>
							    <?php endforeach; endif; unset($_from); ?>
								</select>	</div>
					     </div>	
					
					 <!--
						   <div class="row">
						   <div class="col-md-4">&nbsp;</div>
						   <div class="col-md-4">&nbsp;</div>
						   </div>													   												   													   
												<h3 class="m-t-none m-b" align="center">Product materials</h3>
                                                <div class="hr-line-dashed"></div>	   
                                 
                                        <div class="row">
                                            <div class="col-md-4"> 
											 <label class="col-sm-2 control-label" style="text-align:left;">Model Name:<span style="color:#FF0000"><sup>*</sup></span>-->
												
											<!--<select class="form-control input-lg" multiple="" name="exam16[]" id="exam16" size="10" value="<?php echo $this->_tpl_vars['exam16']; ?>
">
													/*<?php $_from = $this->_tpl_vars['PageList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ListDet']):
?>*/
														<option value="<?php echo $this->_tpl_vars['ListDet']['material_name']; ?>
"><?php echo $this->_tpl_vars['ListDet']['material_name']; ?>
</option>	
													/*<?php endforeach; endif; unset($_from); ?>*/
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
													  
                                              </select>-->
											<!-- </div>
                                        </div>
                                   												   
													   
													   <div class="row">
													   <div class="col-md-4">&nbsp;</div>
													   <div class="col-md-4">&nbsp;</div>
                                                       </div>
													   -->
												<!--	   
                                                        <div align="right">
                                         <div class="row"> 
                                         <div class="col-md-3"> 
										 <input type="button"  value="Submit" onClick="validateProductMaterials();"> 
										  <button  type="button" id="back">CANCEL</button>
							        </div>
									 </div>
									 </div>--> <div align="center">
                                         
                                        <button class="btn btn-primary" type="button" id="addCustomer" onClick="validateProductMaterials();"><!--<a href="./pdtMaterialEntryReg.php">-->ADD Product</button><!--</a>-->
										<button class="btn btn-white" type="button" id="back">CANCEL</button>
                                      </div>
                                    </form>
                        </div>
						</body>
                    </div>
                </div>
            </div>
        </div>
		
	<?php echo '	
<script>
// calendar in datepicker
function getval()
        {
		var production_date,tested_date;
		production_date=document.getElementById("production_date").value;
		tested_date=document.getElementById("tested_date").value;
		if(production_date=="" || tested_date=="")
		{
			alert("Please Specify Date");
			return false;
		}
		
        }	
	var myCalendar;
function doOnLoad() { 
    
    var production_date;
	production_date=new Date();
    myCalendar = new dhtmlXCalendarObject(["production_date"]);
	myCalendar = new dhtmlXCalendarObject(["tested_date"]);
   
}	
			/*$(function(production_date) {
				//alert("test");
				$( "#production_date" ).datepicker({
					altField: "#validity",
					altFormat: "dd-mm-yyyy"
				});
			});
			$(function(tested_date) {
				//alert("test");
				$( "#tested_date" ).datepicker({
					altField: "#validity",
					altFormat: "dd-mm-yyyy"
				});
			});*/
// picker closed
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
	
	    /*$(\'.datepicker\').datepicker({
                todayBtn: "linked",
				format:\'dd-mm-yyyy\',
                keyboardNavigation: false,
                forceParse: false,
                calendarWeeks: true,
                autoclose: true
            });	*/ 
			
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

function validateProductMaterials()
{								  
               var fields=["scada_Id","product_id","production_batch","production_date","tested_date","modelName","created_date","created_time"]; 
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
			  FormName= document.product_reg;
  			  FormName.method= "POST";
              FormName.submit(); 		
	          
 }</script>
<script type="text/javascript" src="dhtmlxMessage/codebase/dhtmlxcalendar.js" ></script>
<script type="text/javascript" src="./codebase/dhtmlxcalendar.js"></script>
<script type="text/javascript" src="./codebase/dhtmlxcommon.js"></script>
<script src="jquery/jquery.ui.datepicker.js"></script>

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

}   </style> 
        
         	<link rel="stylesheet" type="text/css" href="css/datepickier_main.css">
	 	    <link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
	  		<link rel="stylesheet" href="./codebase/dhtmlxcalendar.css" type="text/css">
			<link rel="stylesheet" href="./codebase/dhtmlxcalendar_dhx_skyblue.css" type="text/css"> 
			<link rel="stylesheet" href="./codebase/skins/dhtmlxmessage_dhx_skyblue.css" type="text/css">
			<link rel="stylesheet" type="text/css" href="css/datepicker.css">

'; ?>