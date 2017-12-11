<?php /* Smarty version 2.6.25, created on 2015-11-17 15:04:05
         compiled from maintenanceReg.tpl */ ?>


        </div>
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Maintenance Registration</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="./maintenanceReg.php">Maintenance Management</a>
                        </li>
                        <li>
                          <a href="#">Registration Form</a>  
                        </li>
					</ol>
                </div>
                
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
                          <h5  style="padding-left:40%;">Maintenance Registration Form</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                        <!--   <a class="dropdown-toggle" data-toggle="dropdown" href="#">
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
                            <form method="post" class="form-horizontal" name="maintenanceReg" id="maintenanceReg">
                            <input type="hidden"  id="hdAction"  name="hdAction"/>
							   <div class="form-group">
							  
							   
							   <label class="col-sm-2 control-label" style="text-align:left;">Maintenance ID:<span style="color:#FF0000"><sup>*</sup></span></label>
                               <div class="col-md-4"  id="errMaintenanceId"> <input type="text"  id="MaintenanceId"  name="MaintenanceId"class="form-control" readonly="true" value="<?php echo $this->_tpl_vars['m_id']; ?>
  " autocomplete="Off"></div>
							   
							   <label class="col-sm-2 control-label" style="text-align:left; ">Date:<span style="color:#FF0000"><sup>*</sup></span></label>
							   <div class="col-md-4" id="errDate"><input type="text"  id="Date"  name="Date" class="form-control"   maxlength="15" value="<?php echo $this->_tpl_vars['Date1']; ?>
" autocomplete="Off"></div>
							   
							   </div>	
                              <div class="form-group">
							    <label class="col-sm-2 control-label" style="text-align:left;"> Site Name:<span style="color:#FF0000"><sup>*</sup></span></label>
                               <div class="col-md-4" id="errSiteName"><input type="text" id="siteName"  name="siteName" class="form-control" onkeyup="numericFilter(this)" maxlength="10" value="<?php echo $this->_supers['post']['siteName']; ?>
" autocomplete="Off">
							   
							   </div>
							
										<label class="col-sm-2 control-label" style="text-align:left;"> Site Location:<span style="color:#FF0000"><sup>*</sup></span></label>
										<div class="col-md-4" id="errSiteLocation"><input type="text"  required  id="siteLocation"  name="siteLocation" class="form-control" onkeyup="numericFilter(this)" maxlength="30" value="<?php echo $this->_supers['post']['siteLocation']; ?>
" autocomplete="Off">
									
										</div>
							   </div>	
                            <div class="form-group">
							  
							  <label class="col-sm-2 control-label" style="text-align:left;">Nature Of Work:<span style="color:#FF0000"><sup>*</sup></span></label>
                               <div class="col-md-4" id="errNatureOfWork"><input type="text" id="Work"  name="Work"class="form-control" onkeyup="numericFilter(this)" maxlength="10" value="<?php echo $this->_supers['post']['Work']; ?>
" autocomplete="Off">
							   
							   </div>
							  
								<label class="col-sm-2 control-label" style="text-align:left; ">WTG No:<span style="color:#FF0000"><sup>*</sup></span>
								</label>
								<div class="col-md-4" id="errWTGNo"><input type="text"  id="WTGNo"  name="WTGNo" class="form-control" maxlength="25" value="<?php echo $this->_supers['post']['WTGNo']; ?>
" autocomplete="Off"> 
								
								</div>
							   							    
							   </div>	
                              <div class="form-group">
							  <label class="col-sm-2 control-label" style="text-align:left; ">Work Person:<span style="color:#FF0000"><sup>*</sup></span></label>
								<div class="col-md-4" id="errWorkPerson"><input type="text"  id="WorkPerson"  name="WorkPerson"class="form-control" maxlength="25" value="<?php echo $this->_supers['post']['WorkPerson']; ?>
" autocomplete="Off">
							
								</div>
							
							  <label class="col-sm-2 control-label" style="text-align:left;">Work Status:<span style="color:#FF0000"><sup>*</sup></span></label>
                               <div class="col-md-4" id="errWorkStatus"><select class="form-control" id="WorkStatus" name="WorkStatus" value="<?php echo $this->_supers['post']['WorkStatus']; ?>
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
                               <div class="col-md-4"  id="errRemarks"><input type="textarea" id="remarks"  name="remarks"class="form-control" maxlength="30" value="<?php echo $this->_supers['post']['remarks']; ?>
" autocomplete="Off">
							   
							   </div>
							 
								<label class="col-sm-2 control-label" style="text-align:left; ">If Any Spare Consumption:</label>
								<div class="col-md-4"   id="errConsumption"> <select class="form-control" id="consumption" name="consumption" value="<?php echo $this->_supers['post']['consumption']; ?>
"  autocomplete="Off">
							   <option value="select">-Select Consumption-</option>
  <option value="Yes">Yes</option>
  <option value="No">No</option>
								</select>
								</div>
							   							    
							   </div>	
                              		
                              	
							  	<br />
							   <div align="center">
                                         
                                        <button class="btn btn-primary" type="button" id="addMaintenance">ADD</button>
										<button class="btn btn-white" type="button" id="back">CANCEL</button>
                                      </div>
                                    </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</div>
		
		
<?php echo '		
<script>
        $(document).ready(function() {	
			
$("#addMaintenance").click(function(){
				var fields=["MaintenanceID","Date","siteName","siteLocation","Work","WTGNo","WorkPerson","WorkStatus","remarks","consumption"];
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
              FormName= document.maintenanceReg;
  			  FormName.method= "POST";
              FormName.submit(); 
			                 });
});
$("#back").click(function(){

window.history.back();

});

		
		 		
/*  function ValidateEmail(inputText)  
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
	$(function(Date1) {
				//alert("test");
				$( "#Date" ).datepicker({
					altField: "#validity",
					altFormat: "yy-mm-dd"
				});
			});

function numericFilter(data) 
{
   data.value = data.value.replace(/[^.a-z]/ig,"");
}	
function textFilter(data)
{
   data.value = data.value.replace(/[^ .0-9]/ig,"");
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

<script src="dhtmlxMessage/codebase/dhtmlxcalendar.js" type="text/javascript"></script>
<script src="codebase/dhtmlxcalendar.js" type="text/javascript"></script>
<script src="codebase/dhtmlxcommon.js" type="text/javascript"></script>


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
	 <link rel="codebase/dhtmlxcalendar.css" type="text/css">
	 <link rel="codebase/dhtmlxcalendar_dhx_skyblue.css" type="text/css">
	 <link rel="codebase/skins/dhtmlxmessage_dhx_skyblue.css" type="text/css">
	 
	</style>
'; ?>