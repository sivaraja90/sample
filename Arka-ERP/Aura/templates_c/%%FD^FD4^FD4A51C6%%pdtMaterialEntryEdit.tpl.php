<?php /* Smarty version 2.6.25, created on 2015-12-22 17:09:36
         compiled from pdtMaterialEntryEdit.tpl */ ?>
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
                          <h5 style="padding-left:40%;">Edit Product Material Details</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                               
                            </div>
                        </div>
                        <div class="ibox-content">
                           <form name="power_generation" id="power_generation" name="power_generation" method="post">
<input type="hidden" name="hdAction" />
<table class="table table-striped table-bordered table-hover dataTables-example" border="1px solid" >
								<tr>
								<th><center>Material Name</center></th>
								<th><center>Production Serial_No</center></th>
                                <th><center>Model</center></th>
								<th><center>Make</center></th>
                                <th><center>Spec</center></th>
                                
						        </tr>
								<?php $_from = $this->_tpl_vars['PrdMtrlList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ListPrdMtrl']):
?>
                    <tr class="gradeX" >
			
			<td><input type="text" id="material_name" name="material_name" class="form-control" value="<?php echo $this->_tpl_vars['ListPrdMtrl']['material_name']; ?>
" readonly="true"></td>	
		  	<td><input type="text" id="prod_sl_no" name="prod_sl_no" class="form-control" value="<?php echo $this->_tpl_vars['ListPrdMtrl']['prod_sl_no']; ?>
"></td>			        
		    <td><input type="text" id="model" name="model" class="form-control" value="<?php echo $this->_tpl_vars['ListPrdMtrl']['model']; ?>
"></td>	          	
            <td><input type="text" id="make" name="make" class="form-control" value="<?php echo $this->_tpl_vars['ListPrdMtrl']['make']; ?>
"></td>
			
			<td><input type="text" width="120px" id="spec" name="spec" class="form-control" value="<?php echo $this->_tpl_vars['ListPrdMtrl']['spec']; ?>
"></td>	
		  	<input type="hidden" id="created_date" name="created_date" value="">		        
		    <input type="hidden" id="created_time" name="created_time" value="">          	
            <input type="hidden" id="created_by" name="created_by" value="">
							  </tr>
						 <?php endforeach; endif; unset($_from); ?>
						 </table>
						 <br/>
						 <br/>
						 
						 <div align="center">
                                         
                                        <button class="btn btn-primary" type="button" id="addMaterialDetails">ADD Material Details</button>
										<button class="btn btn-white" type="button" id="back">CANCEL</button>
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
		 $(\'#side-menu\').metisMenu();

$("#addMaterialDetails").click(function(){ 
				var fields=["material_name","prod_sl_no","model","make","spec"];
				for(i=0;i<fields.length;i++)
				{
				
				current_iteration = document.getElementById(fields[i]).value;
				//alert(current_iteration);
				document.getElementById(fields[i]).style.borderColor="";
						if(current_iteration=="")
						{			
						document.getElementById(fields[i]).focus();
						document.getElementById(fields[i]).style.borderColor="red";									
									return false;
						}	

				}				
              FormName= document.power_generation;
  			  FormName.method= "POST";
              FormName.submit(); 
			              });
										  
/*$("#mobileNo").keyUp(function(){
numericFilter();
}*/
			$("#back").click(function(){

window.history.back();

});				  
        
		 });
		 
		 
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

        