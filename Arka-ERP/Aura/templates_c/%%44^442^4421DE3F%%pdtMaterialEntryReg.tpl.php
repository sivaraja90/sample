<?php /* Smarty version 2.6.25, created on 2016-02-06 10:50:23
         compiled from pdtMaterialEntryReg.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'pdtMaterialEntryReg.tpl', 72, false),)), $this); ?>
   </div>
           
        <div class="wrapper wrapper-content animated fadeInRight">
           <div class="row">
          <?php if ($this->_tpl_vars['SuccessMessage1'] != ""): ?>
			<div class="isa_success">
			<i class="fa fa-check"></i>
			<?php echo $this->_tpl_vars['SuccessMessage1']; ?>
		 
			</div>
		 <?php endif; ?>
		  <?php if ($this->_tpl_vars['ErrorMessage'] != ""): ?>
			<div class="isa_error">
			<i class="fa fa-check"></i>
			<?php echo $this->_tpl_vars['ErrorMessage']; ?>
		 
			</div>
		 <?php endif; ?>
			<!--<div class="isa_error">
			<i class="fa fa-times-circle"></i>
			Customer inserted Successfully......
			</div>-->
            <div class="row">
                
                
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                          <h5  style="padding-left:40%;">Product material Registration Form</h5>
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
						
						<form name="product_material" id="product_material" method="post"> 
						<input type="hidden" name="hdAction" />
						<table class="table table-striped table-bordered table-hover dataTables-example" border="1px solid" >
								<tr>
								<th><center>Sl No.</center></th>
								<th><center>Material Name</center></th>
								<th><center>Material Serial_No</center></th>
                                <th><center>Model</center></th>
								<th><center>Make</center></th>
                                <th><center>Specification</center></th>
                                
						        </tr>
								<?php $_from = $this->_tpl_vars['PageList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ListDet']):
?>
                    <tr class="gradeX" <?php echo $this->_tpl_vars['i']++; ?>
>
					<td><input type="hidden" type="checkbox" id="checkbox[<?php echo $this->_tpl_vars['ListDet']['material_name']; ?>
]"  name="select_id[]" value="<?php echo $this->_tpl_vars['ListDet']['material_name']; ?>
" checked="checked" class="chk" ><?php echo $this->_tpl_vars['i']; ?>
</td>
					<input type="hidden" id="model_name" name="model_name" value="<?php echo $this->_supers['get']['model_name']; ?>
"  />
			    <input type="hidden" id="product_id" name="product_id" value="<?php echo $this->_supers['get']['product_id']; ?>
"/>
			<td><input type="text" id="material_name[<?php echo $this->_tpl_vars['ListDet']['material_name']; ?>
]" name="material_name" value="<?php echo $this->_tpl_vars['ListDet']['material_name']; ?>
" class="form-control-2" readonly="true"></td>	
			<td><input type="text" id="prod_sl_no[<?php echo $this->_tpl_vars['ListDet']['material_name']; ?>
]" name="prod_sl_no" value="" class="form-control-2" ></td>	
			<td><input type="text" id="model[<?php echo $this->_tpl_vars['ListDet']['material_name']; ?>
]" name="model" value="" class="form-control-2" ></td>	
			<td><input type="text" id="make[<?php echo $this->_tpl_vars['ListDet']['material_name']; ?>
]" name="make" value="" class="form-control-2" ></td>	
			<td><input type="text" id="spec[<?php echo $this->_tpl_vars['ListDet']['material_name']; ?>
]" name="spec" value="" class="form-control-2" ></td>	
		  	<input type="hidden" id="created_date[<?php echo $this->_tpl_vars['ListDet']['material_name']; ?>
]" name="created_date"  value="<?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d') : smarty_modifier_date_format($_tmp, '%Y-%m-%d')); ?>
">		        
		    <input type="hidden" id="created_time[<?php echo $this->_tpl_vars['ListDet']['material_name']; ?>
]" name="created_time" value="<?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%I:%M:%S %p') : smarty_modifier_date_format($_tmp, '%I:%M:%S %p')); ?>
">          	
            <input type="hidden" id="created_by[<?php echo $this->_tpl_vars['ListDet']['material_name']; ?>
]" name="created_by" value="<?php echo $this->_supers['session']['UserName']; ?>
">
							  </tr>
						 <?php endforeach; endif; unset($_from); ?>
						 </table>
						 <br/>
						 <br/>
						 
						 				<div align="center">
                                         
                                        <button class="btn btn-primary" type="submit" id="addMaterialDetails" name="addMaterialDetails" onclick="validate_fields();" >ADD Material Details</button>
										<button class="btn btn-white" type="button" id="back" name="back">CANCEL</button>
                                      </div>
			</form>

         </div>
						</div>
						</div>
						</div>
						</div>           
<?php echo '		
<script type="text/javascript">

 $(document).ready(function() {	
$("#addMaterialDetails").click(function(){
						<!--getValueUsingClass();-->
			                 });

	
$("#back").click(function(){

window.history.back();

});

 $(\'.datepicker\').datepicker({
                todayBtn: "linked",
				format:\'yyyy-mm-dd\',
                keyboardNavigation: false,
                forceParse: false,
                calendarWeeks: true,
                autoclose: true
            });	
		
		 });
function getValueUsingClass(){
	var chkArray = [];

	/* look for all checkboes that have a class \'chk\' attached to it and check if it was checked */
	$(".chk:checked").each(function() {
			validate_fields();

	});
	 
		 }

function validate_fields()
        {
		alert("hiiiii");
		
	var fields=["prod_sl_no","model","make","spec"];
				for(i=0;i<fields.length;i++)
				
				{  
				alert(fields[i]);
				current_iteration = document.getElementByName(fields[i]).value;
				
				document.getElementByName(fields[i]).style.borderColor="";
						if(current_iteration=="")
						{			
						document.getElementByName(fields[i]).focus();
						document.getElementByName(fields[i]).style.borderColor="red";									
									return false;
						}	

				}				
              FormName= document.product_material;
  			  FormName.method= "POST";
              FormName.submit(); 
		   
        }  

function numericFilter(data) 
{
   data.value = data.value.replace(/[^.0-9]/ig,"");
}	
function textFilter(data)
{
   data.value = data.value.replace(/[^ .a-z]/ig,"");
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

		
 
   