<?php /* Smarty version 2.6.25, created on 2015-11-16 16:05:04
         compiled from maintenanceDetails.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'maintenanceDetails.tpl', 52, false),)), $this); ?>


        </div>
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Maintenance Registration</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="./customerList.php">Management</a>
                        </li>
                        <li>
                            <a href="#">Details Maintenance</a>
                        </li>

                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
        <div class="wrapper wrapper-content animated fadeInRight" >
            <div class="row">
            
                
            </div>
            <div class="row">
                
                
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                          <h5 style="padding-left:40%;">Maintenance Details</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                               
                            </div>
                        </div>
                        <div class="ibox-content">
                            <form method="post" class="form-horizontal" name="maintenanceReg" id="maintenanceReg">
                                                      <?php $_from = $this->_tpl_vars['PageList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ListDet']):
?>
						    <input type="hidden"  id="hdAction"  name="hdAction" />
		
							   <div class="form-group">
							   <label class="col-sm-2 control-label" style="text-align:left;">Maintenance ID:<span style="color:#FF0000"><sup>*</sup></span></label>
                               <div class="col-md-4"  id="errMaintenanceId"> <input type="text"  id="MaintenanceId"  name="MaintenanceId"class="form-control" readonly="true" value="<?php echo $this->_tpl_vars['m_id']; ?>
  " autocomplete="Off"></div>
							   
							   <label class="col-sm-2 control-label" style="text-align:left; ">Date:<span style="color:#FF0000"><sup>*</sup></span></label>
							   <div class="col-md-4" id="errDate"><input type="text"  id="Date"  name="Date"class="form-control" onkeyup="textFilter(this)"  maxlength="15" value="<?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d') : smarty_modifier_date_format($_tmp, '%Y-%m-%d')); ?>
" autocomplete="Off"></div>
							   
							   </div>	
                              <div class="form-group">
							    <label class="col-sm-2 control-label" style="text-align:left;"> Site Name:<span style="color:#FF0000"><sup>*</sup></span></label>
                               <div class="col-md-4" id="errSiteName"><input type="text" id="siteName"  name="siteName" class="form-control" onkeyup="numericFilter(this)" maxlength="10" value="<?php echo $this->_supers['post']['mobileNo']; ?>
" autocomplete="Off">
							   
							   </div>
							
										<label class="col-sm-2 control-label" style="text-align:left;"> Site Location:<span style="color:#FF0000"><sup>*</sup></span></label>
										<div class="col-md-4" id="errSiteLocation"><input type="text"  required  id="siteLocation"  name="siteLocation"class="form-control" onblur="ValidateEmail(this)"maxlength="30" value="<?php echo $this->_supers['post']['eMail']; ?>
" autocomplete="Off">
									
										</div>
							   </div>	
                            <div class="form-group">
							  
							  <label class="col-sm-2 control-label" style="text-align:left;">Nature Of Work:<span style="color:#FF0000"><sup>*</sup></span></label>
                               <div class="col-md-4" id="errNatureOfWork"><input type="text" id="Work"  name="Work"class="form-control" onkeyup="numericFilter(this)" maxlength="10" value="<?php echo $this->_supers['post']['phone']; ?>
" autocomplete="Off">
							   
							   </div>
							  
								<label class="col-sm-2 control-label" style="text-align:left; ">WTG No:<span style="color:#FF0000"><sup>*</sup></span>
								</label>
								<div class="col-md-4" id="errWTGNo"><input type="text"  id="WTGNo"  name="WTGNo" class="form-control" maxlength="25" value="<?php echo $this->_supers['post']['designation']; ?>
" autocomplete="Off"> 
								
								</div>
							   							    
							   </div>	
                              <div class="form-group">
							  <label class="col-sm-2 control-label" style="text-align:left; ">Work Person:<span style="color:#FF0000"><sup>*</sup></span></label>
								<div class="col-md-4" id="errWorkPerson"><input type="text"  id="WorkPerson"  name="WorkPerson"class="form-control" maxlength="25" value="<?php echo $this->_supers['post']['contactPerson']; ?>
" autocomplete="Off">
							
								</div>
							
							  <label class="col-sm-2 control-label" style="text-align:left;">Work Status:<span style="color:#FF0000"><sup>*</sup></span></label>
                               <div class="col-md-4" id="errWorkStatus"><select class="form-control" id="WorkStatus" name="WorkStatus" value="<?php echo $this->_supers['post']['customerType']; ?>
"  autocomplete="Off">
							   <option value="select">-Select Status-</option>
  <option value="Hold">Hold</option>
  <option value="Finished">Finished</option>
 <!-- <option value="Sales">Sales</option>
  <option value="Demo">Demo</option>
  <option value="Sales + AMC">Sales + AMC</option>
  <option value="OutSourcing">OutSourcing</option>-->
  
</select> 
  
							   
							   </div>
							   </div>							   						   						   
                              <div class="form-group">
							
							  <label class="col-sm-2 control-label" style="text-align:left;">Remarks:<span style="color:#FF0000"><sup>*</sup></span></label>
                               <div class="col-md-4"  id="errRemarks"><input type="textarea" id="remarks"  name="remarks"class="form-control" maxlength="30" value="<?php echo $this->_supers['post']['address1']; ?>
" autocomplete="Off">
							   
							   </div>
							 
								<label class="col-sm-2 control-label" style="text-align:left; ">If Any Spare Consumption:</label>
								<div class="col-md-4"   id="errConsumption"> <select class="form-control" id="consumption" name="consumption" value="<?php echo $this->_supers['post']['customerType']; ?>
"  autocomplete="Off">
							   <option value="select">-Select Consumption-</option>
  <option value="Yes">Yes</option>
  <option value="No">No</option>
  </select>
  
								
								</div>
							   		</div>					    
							    
							 
							<?php endforeach; endif; unset($_from); ?>
							 
							   <div align="center">
                                         

									<button class="btn btn-primary" id="back"  type="button">BACK</button>
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
		});
		
		
		$("#back").click(function(){

        window.history.back();

        });

		

		
/* function ValidateEmail(inputText)  
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
} */
	 
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
<script>
	$(function(Date1) {
				//alert("test");
				$( "#Date" ).datepicker({
					altField: "#validity",
					altFormat: "yy-mm-dd"
				});
			});
 </script>
		 
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