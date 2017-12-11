<?php /* Smarty version 2.6.25, created on 2015-09-22 19:44:48
         compiled from scadaEdit.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'scadaEdit.tpl', 90, false),)), $this); ?>

        </div>
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Scada Registration</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="./scadaList.php">Scada Management</a>
                        </li>
                        <li>
                            <a href="#">Edit Scada</a>
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
                          <h5 style="padding-left:40%;">Edit Scada Details</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                               
                            </div>
                        </div>
                        <div class="ibox-content">
                            <form method="post" id="scadaUpdate" name="scadaUpdate"class="form-horizontal">
							<input type="hidden"  id="hdAction"  name="hdAction" />
                              <?php $_from = $this->_tpl_vars['PageList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ListDet']):
?>
							   <div class="form-group">
							  
							  <div id="err_scada_Id"> 
<label class="col-sm-2 control-label" style="text-align:left;">Turbine_ID:</label>
<div class="col-md-3"><input type="text" id="turbine_id"  name="turbine_id"class="form-control"  maxlength="10" value="<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
" ></div></div>
							   <div id="err_production_batch">  
							   <label class="col-sm-2 control-label" style="text-align:left; margin-left:15%">Turbine_name:</label>
							   <div class="col-md-3"><input type="text" id="turbine_name"  name="turbine_name"class="form-control" value="<?php echo $this->_tpl_vars['ListDet']['turbine_name']; ?>
"></div>
							   </div>
							   </div>	
							   <div class="form-group">
							  
							  <div id="err_scada_Id"> 
<label class="col-sm-2 control-label" style="text-align:left;">Scada_ID:</label>
<div class="col-md-3"><input type="text" id="scada_Id"  name="scada_Id"class="form-control"  maxlength="10" value="<?php echo $this->_tpl_vars['ListDet']['Scada_Id']; ?>
" readonly="true"></div></div>
							   <div id="err_production_batch">  
							   <label class="col-sm-2 control-label" style="text-align:left; margin-left:15%">Production_batch:</label>
							   <div class="col-md-3"><input type="text" id="production_batch"  name="production_batch"class="form-control" value="<?php echo $this->_tpl_vars['ListDet']['Production_batch']; ?>
"></div>
							   </div>
							   </div>	
                              <div class="form-group">
							   <div id="err_production_date"> <label class="col-sm-2 control-label" style="text-align:left;"> Production_date:</label>
                               <div class="col-md-3"><input type="date" id="production_date"  name="production_date" class="form-control" value="<?php echo $this->_tpl_vars['ListDet']['Production_date']; ?>
">
							   </div>
							   </div>
							   <div id="err_tested_date"> 
										<label class="col-sm-2 control-label" style="text-align:left;margin-left:15%"> Tested_date:</label>
										<div class="col-md-3"><input type="date"  id="tested_date"  name="tested_date"class="form-control" value="<?php echo $this->_tpl_vars['ListDet']['Tested_date']; ?>
">
										</div>
										</div>
							   </div>	
                            <div class="form-group">
							  <div id="err_modify_date">  
							  <label class="col-sm-2 control-label" style="text-align:left;">Modify_date:</label>
                               <div class="col-md-3"><input type="text" id="modify_date"  name="modify_date"class="form-control" value="<?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d') : smarty_modifier_date_format($_tmp, '%Y-%m-%d')); ?>
" readonly="true">
							   </div>
							   </div>
							   <div id="err_modify_time"> 
								<label class="col-sm-2 control-label" style="text-align:left; margin-left:15%">Modify time:</label>
								<div class="col-md-3"><input type="text"  id="modify_time"  name="modify_time"class="form-control" value="<?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%I:%M:%S%p') : smarty_modifier_date_format($_tmp, '%I:%M:%S%p')); ?>
" readonly="true">
								</div>
								</div>
							   							    
							   </div>	
                             	   						   
                              <div class="form-group" >
							  <div id="err_modify_by">  
							  <label class="col-sm-2 control-label" style="text-align:left;">Modify by:</label>
                               <div class="col-md-3"><input type="text" id="modify_by"  name="modify_by"class="form-control"  value="<?php echo $this->_supers['session']['UserName']; ?>
" readonly="true">
							   </div>
							   </div>
							   		
                              </div>
							  <?php endforeach; endif; unset($_from); ?>
							  	<br />
							   <div align="center">
                                         
                                        <button class="btn btn-primary" type="button" id="upDateScada">UPDATE</button>
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

$("#upDateScada").click(function(){ 
				var fields=["turbine_id","turbine_name","scada_Id","production_batch","production_date","tested_date"];
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
              FormName= document.scadaUpdate;
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

        