<?php /* Smarty version 2.6.25, created on 2015-09-23 13:55:29
         compiled from scadaReg.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'scadaReg.tpl', 100, false),)), $this); ?>
  </div>
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Scada Registration</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="scadaReg.php">Scada Management</a>
                        </li>
                        <li>
                            <a href="#">Add Scada </a>
                        </li>

                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
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
                          <h5  style="padding-left:40%;">Scada Registration Form</h5>
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
                            <form method="post" class="form-horizontal" name="scada_reg" id="scada_reg">
                            <input type="hidden"  id="hdAction"  name="hdAction" />
							<div class="form-group">
							  
							
							   <label class="col-sm-2 control-label" style="text-align:left; ">Turbine Name:<span style="color:#FF0000"><sup>*</sup></span></label>
							   <div class="col-md-4" id="err_turbine_name"><input type="text"  id="turbine_name"  name="turbine_name" class="form-control" value="<?php echo $this->_tpl_vars['turbine_name']; ?>
"></div>
							   
							   
							    <label class="col-sm-2 control-label" style="text-align:left;">Turbine ID:<span style="color:#FF0000"><sup>*</sup></span></label>
                               <div class="col-md-4"  id="err_turbine_Id"> <input type="text"  id="turbine_id"  name="turbine_id"class="form-control"   value="<?php echo $this->_tpl_vars['turbine_id']; ?>
" ></div>
							   
							   </div>	<hr/>
							   <div class="form-group">
							  
							
							   <label class="col-sm-2 control-label" style="text-align:left;">Scada ID:<span style="color:#FF0000"><sup>*</sup></span></label>
                               <div class="col-md-4"  id="err_scada_Id"> <input type="text"  id="scada_Id"  name="scada_Id"class="form-control"  readonly="true" value="<?php echo $this->_tpl_vars['s_id']; ?>
" ></div>
							   
							   <label class="col-sm-2 control-label" style="text-align:left; ">Production Batch:<span style="color:#FF0000"><sup>*</sup></span></label>
							   <div class="col-md-4" id="err_production_batch"><input type="text"  id="production_batch"  name="production_batch" class="form-control" value="<?php echo $this->_tpl_vars['production_batch']; ?>
"></div>
							   
							   </div>	
                              <div class="form-group">
							    <label class="col-sm-2 control-label" style="text-align:left;"> Production date:<span style="color:#FF0000"><sup>*</sup></span></label>
                               <div class="col-md-4" id="err_production_date"><input type="date" id="production_date"  name="production_date" class="form-control" value="<?php echo $this->_tpl_vars['production_date']; ?>
" >
							   
							   </div>
							
										<label class="col-sm-2 control-label" style="text-align:left;"> Tested date:<span style="color:#FF0000"><sup>*</sup></span></label>
										<div class="col-md-4" id="err_tested_date"><input type="date"  required  id="tested_date"  name="tested_date" class="form-control" value="<?php echo $this->_tpl_vars['tested_date']; ?>
">
									
										</div>
							   </div>	
                            <div class="form-group">
							  
							  <label class="col-sm-2 control-label" style="text-align:left;">Created date:<span style="color:#FF0000"><sup>*</sup></span></label>
                               <div class="col-md-4" id="err_created_date"><input type="text" id="created_date"  name="created_date" value="<?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d') : smarty_modifier_date_format($_tmp, '%Y-%m-%d')); ?>
" class="form-control" readonly="true">
							   
							   </div>
							  
								<label class="col-sm-2 control-label" style="text-align:left; ">Created time:<span style="color:#FF0000"><sup>*</sup></span>
								</label>
								<div class="col-md-4" id="err_created_time"><input type="text"  id="created_time"  name="created_time" value="<?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%I:%M:%S %p') : smarty_modifier_date_format($_tmp, '%I:%M:%S %p')); ?>
" class="form-control" readonly="true"  >
								
								</div>
							   							    
							   </div>	
                             				   						   						   
                              <div class="form-group">
							
							  <label class="col-sm-2 control-label" style="text-align:left;">Created By:<span style="color:#FF0000"><sup>*</sup></span></label>
                               <div class="col-md-4"  id="err_created_by"><input type="text" id="created_by"  name="created_by" class="form-control" value="<?php echo $this->_supers['session']['UserName']; ?>
" readonly="true" >

							   
							   </div>
							 
								
							   							    
							   </div>	
                              
							      
							      
							  	<br />
							   <div align="center">
                                         
                                        <button class="btn btn-primary" type="button" id="addscada">ADD SCADA</button>
										<button class="btn btn-white" type="submit" id="back">CANCEL</button>
                                      </div>
                                    </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	<?php echo '	
<script>
        $(document).ready(function() {	
$("#addscada").click(function(){
				var fields=["turbine_id","turbine_name","scada_Id","production_batch","production_date","tested_date"];
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
              FormName= document.scada_reg;
  			  FormName.method= "POST";
              FormName.submit(); 
			                 });
										  
/*$("#mobileNo").keyUp(function(){
numericFilter();
}*/        $("#back").click(function(){

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
	
	    $(\'.datepicker\').datepicker({
                todayBtn: "linked",
				format:\'yyyy-mm-dd\',
                keyboardNavigation: false,
                forceParse: false,
                calendarWeeks: true,
                autoclose: true
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
</style>
'; ?>