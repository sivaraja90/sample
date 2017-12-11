<?php /* Smarty version 2.6.25, created on 2015-11-06 18:30:05
         compiled from phone_prepaidEdit.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'phone_prepaidEdit.tpl', 272, false),)), $this); ?>

        </div>
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Phone Registration</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="./phoneList.php">Phone Management</a>
                        </li>
                        <li>
                            <a href="#">Edit Phone Prepaid</a>
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
                          <h5 style="padding-left:40%;">Edit Phone Prepaid Details</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                               
                            </div>
                        </div>
                        <div class="ibox-content">
                            <form method="post"  name="phonePrepaidUpdate" id="phonePrepaidUpdate"class="form-horizontal">
							<input type="hidden"  id="hdAction"  name="hdAction" />
                              <?php $_from = $this->_tpl_vars['PageList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ListDet']):
?>
							  <div class="form-group">
							   <div id="errsimId"><label class="col-sm-2 control-label" style="text-align:left;">Sim ID:</label>
							   <div class="col-md-3"><input type="text"  id="simId"  name="simId" class="form-control" readonly="true" value="<?php echo $this->_tpl_vars['ListDet']['sim_id']; ?>
" autocomplete="off"></div>
							   </div>
							   <div id="errsimNo"><label class="col-sm-2 control-label" style="text-align:left; margin-left:15%">Sim No:</label>
							   <div class="col-md-3"><input type="text"  id="simNo"  name="simNo" class="form-control" maxlength="19" value="<?php echo $this->_tpl_vars['ListDet']['sim_no']; ?>
" autocomplete="off"></div>
							   </div>
							   </div>
							   	<div class="form-group">
							  
							  <div id="errmobileNo"><label class="col-sm-2 control-label" style="text-align:left;">Mobile No:</label>
							     <div class="col-md-3"><input type="text" id="mobileNo"  name="mobileNo" class="form-control" onKeyUp="numericFilter(this)"  maxlength="10" value="<?php echo $this->_tpl_vars['ListDet']['mobile_no']; ?>
" autocomplete="off"></div>
							   </div>
							   <div id="errserviceNo"> <label class="col-sm-2 control-label" style="text-align:left; margin-left:15%">Service No:</label>
							      <div class="col-md-3"><input type="text"  required  id="serviceNo"  name="serviceNo"class="form-control" value="<?php echo $this->_tpl_vars['ListDet']['service_no']; ?>
" autocomplete="off"></div>
							   </div>
							   </div>	
							  
					
                            <div class="form-group">
							  <div id="errnetwork">  
							  <label class="col-sm-2 control-label" style="text-align:left;">Network:</label>
                               <div class="col-md-3"><select class="form-control" name="network" id="network" autocomplete="Off" >
							   	<?php if ($this->_tpl_vars['ListDet']['network'] == 'AirTel'): ?>
						        	<option value="<?php echo $this->_tpl_vars['ListDet']['network']; ?>
" selected="selected"><?php echo $this->_tpl_vars['ListDet']['network']; ?>
</option>
								  <option value="AirCel">AirCel</option>
								  <option value="Vodofone">Vodofone</option>
								  <option value="Relaince">Relaince</option>
								  <option value="Bsnl">Bsnl</option>
								  <option value="TataDocomo">TataDocomo</option>
								  <option value="Idea">Idea</option>
								<?php elseif ($this->_tpl_vars['ListDet']['network'] == 'AirCel'): ?>
								<option value="<?php echo $this->_tpl_vars['ListDet']['network']; ?>
" selected="selected"><?php echo $this->_tpl_vars['ListDet']['network']; ?>
</option>
								  <option value="AirTel">AirTel</option>
								  <option value="Vodofone">Vodofone</option>
								  <option value="Relaince">Relaince</option>
								  <option value="Bsnl">Bsnl</option>
								  <option value="TataDocomo">TataDocomo</option>
								  <option value="Idea">Idea</option>
								  <?php elseif ($this->_tpl_vars['ListDet']['network'] == 'Vodofone'): ?>
								<option value="<?php echo $this->_tpl_vars['ListDet']['network']; ?>
" selected="selected"><?php echo $this->_tpl_vars['ListDet']['network']; ?>
</option>
								  <option value="AirTel">AirTel</option>
								  <option value="AirCel">AirCel</option>
								  <option value="Relaince">Relaince</option>
								  <option value="Bsnl">Bsnl</option>
								  <option value="TataDocomo">TataDocomo</option>
								  <option value="Idea">Idea</option>
								  <?php elseif ($this->_tpl_vars['ListDet']['network'] == 'Relaince'): ?>
								<option value="<?php echo $this->_tpl_vars['ListDet']['network']; ?>
" selected="selected"><?php echo $this->_tpl_vars['ListDet']['network']; ?>
</option>
								  <option value="AirTel">AirTel</option>
								    <option value="AirCel">AirCel</option>
								  <option value="Vodofone">Vodofone</option>
								  <option value="Bsnl">Bsnl</option>
								  <option value="TataDocomo">TataDocomo</option>
								  <option value="Idea">Idea</option>
								  <?php elseif ($this->_tpl_vars['ListDet']['network'] == 'Bsnl'): ?>
								<option value="<?php echo $this->_tpl_vars['ListDet']['network']; ?>
" selected="selected"><?php echo $this->_tpl_vars['ListDet']['network']; ?>
</option>
								  <option value="AirTel">AirTel</option>
								   <option value="AirCel">AirCel</option>
								  <option value="Vodofone">Vodofone</option>
								  <option value="Relaice">Relaince</option>
								  <option value="TataDocomo">TataDocomo</option>
								  <option value="Idea">Idea</option>
								  <?php elseif ($this->_tpl_vars['ListDet']['network'] == 'TataDocomo'): ?>
								<option value="<?php echo $this->_tpl_vars['ListDet']['network']; ?>
" selected="selected"><?php echo $this->_tpl_vars['ListDet']['network']; ?>
</option>
								  <option value="AirTel">AirTel</option>
								    <option value="AirCel">AirCel</option>
								  <option value="Vodofone">Vodofone</option>
								  <option value="Relaince">Relaince</option>
								  <option value="Bsnl">Bsnl</option>
								  <option value="Idea">Idea</option>
								  <?php elseif ($this->_tpl_vars['ListDet']['network'] == 'Idea'): ?>
								<option value="<?php echo $this->_tpl_vars['ListDet']['network']; ?>
" selected="selected"><?php echo $this->_tpl_vars['ListDet']['network']; ?>
</option>
								  <option value="AirTel">AirTel</option>
								   <option value="AirCel">AirCel</option>
								  <option value="Vodofone">Vodofone</option>
								  <option value="Relaince">Relaince</option>
								  <option value="Bsnl">Bsnl</option>
								  <option value="TataDocomo">TataDocomo</option>
								 <?php endif; ?>
				               </select>
							   </div>
							   </div>
							   <div id="errvalidity"> 
								<label class="col-sm-2 control-label" style="text-align:left; margin-left:15%">Validity:</label>
								<div class="col-md-3"><input type="text"  id="validity"  name="validity"class="form-control" value="<?php echo $this->_tpl_vars['ListDet']['validity']; ?>
" autocomplete="Off">
								</div>
								</div>
							   							    
							   </div>	
                              <div class="form-group">
							  <div id="errsimType">  
							  <label class="col-sm-2 control-label" style="text-align:left;">Sim Type:</label>
                               <div class="col-md-3">
							   <select class="form-control" id="simType" name="simType" autocomplete="off">
							   	<?php if ($this->_tpl_vars['ListDet']['sim_type'] == 'Prepaid'): ?>
								   <option value="<?php echo $this->_tpl_vars['ListDet']['sim_type']; ?>
" selected="selected"><?php echo $this->_tpl_vars['ListDet']['sim_type']; ?>
</option>
								   <option value="Postpaid">Postpaid</option>
								<?php elseif ($this->_tpl_vars['ListDet']['sim_type'] == 'Postpaid'): ?>
								  <option value="<?php echo $this->_tpl_vars['ListDet']['sim_type']; ?>
" selected="selected"><?php echo $this->_tpl_vars['ListDet']['sim_type']; ?>
</option>
							      <option value="Prepaid" >Prepaid</option>  
								<?php endif; ?>
								</select>
							   </div>
							   </div>
							   <div id="errcircle"> 
								<label class="col-sm-2 control-label" style="text-align:left; margin-left:15%">Circle:</label>
								<div class="col-md-3"><input type="text"  id="circle"  name="circle"class="form-control" value="<?php echo $this->_tpl_vars['ListDet']['circle']; ?>
" autocomplete="Off">
								</div>
								</div>
							   							    
							   </div>	
							   <div class="form-group">
							  <div id="errpurpose">  
							  <label class="col-sm-2 control-label" style="text-align:left;">Purpose:</label>
                               <div class="col-md-3"><select class="form-control" id="purpose" name="purpose" autocomplete="off">
  											  <?php if ($this->_tpl_vars['ListDet']['sim_type'] == 'Employee'): ?>
											   <option value="<?php echo $this->_tpl_vars['ListDet']['purpose']; ?>
" selected="selected"><?php echo $this->_tpl_vars['ListDet']['purpose']; ?>
</option>
											  <option id="Device" name="Device" value="Device" >Device</option>
											  <?php elseif ($this->_tpl_vars['ListDet']['sim_type'] == 'Device'): ?>
								               <option value="<?php echo $this->_tpl_vars['ListDet']['purpose']; ?>
" selected="selected"><?php echo $this->_tpl_vars['ListDet']['purpose']; ?>
</option>
											  <option id="Employee" name="Employee" value="Employee" >Employee</option>
											  	<?php endif; ?>
											</select>
							   </div>
							   </div>
							   <div id="errid_proof_name"> 
								<label class="col-sm-2 control-label" style="text-align:left; margin-left:15%">Id_Proof_Name:</label>
								<div class="col-md-3"><input type="text"  id="id_proof_name"  name="id_proof_name"class="form-control" value="<?php echo $this->_tpl_vars['ListDet']['id_proof_name']; ?>
" autocomplete="off"></div>
								</div>
								</div>
							   			<div class="form-group">
							  <div id="errpurchaseDate">  
							  <label class="col-sm-2 control-label" style="text-align:left;">Purchase Date:</label>
                               <div class="col-md-3"><input type="text" id="purchaseDate"  name="purchaseDate" class="form-control" value="<?php echo $this->_tpl_vars['ListDet']['purchase_date']; ?>
" readonly="true"  autocomplete="off">
							   </div>
							   </div>
							   <div id="errplan_name"> 
								<label class="col-sm-2 control-label" style="text-align:left; margin-left:15%">Plan Name:</label>
								<div class="col-md-3"><input type="text"  id="plan_name"  name="plan_name"class="form-control" value="<?php echo $this->_tpl_vars['ListDet']['plan_name']; ?>
" autocomplete="off">
								</div>
								</div>
							   			</div></hr>	
										
										<div class="form-group">
							  <div id="errrecharge_type">  
							  <label class="col-sm-2 control-label" style="text-align:left;">Recharge Type:</label>
                               <div class="col-md-3"><select class="form-control" name="recharge_type" id="recharge_type" autocomplete="off">
							               <?php if ($this->_tpl_vars['ListDet']['sim_type'] == 'Talk_Time'): ?>
											   <option value="<?php echo $this->_tpl_vars['ListDet']['recharge_type']; ?>
" selected="selected"><?php echo $this->_tpl_vars['ListDet']['recharge_type']; ?>
</option>
											  <option value="SMS" >SMS</option>
											  <option value="2G">2G</option>
											  <option value="3G">3G</option>
										   <?php elseif ($this->_tpl_vars['ListDet']['sim_type'] == 'SMS'): ?>
										       <option value="<?php echo $this->_tpl_vars['ListDet']['recharge_type']; ?>
" selected="selected"><?php echo $this->_tpl_vars['ListDet']['recharge_type']; ?>
</option>
  											  <option value="Talk_Time" >Talk_Time</option>
											  <option value="2G">2G</option>
											  <option value="3G">3G</option>
										  <?php elseif ($this->_tpl_vars['ListDet']['sim_type'] == '2G'): ?>
										   <option value="<?php echo $this->_tpl_vars['ListDet']['recharge_type']; ?>
" selected="selected"><?php echo $this->_tpl_vars['ListDet']['recharge_type']; ?>
</option>
  											  <option value="Talk_Time" >Talk_Time</option>
											  <option value="SMS" >SMS</option>
											  <option value="3G">3G</option>
										<?php elseif ($this->_tpl_vars['ListDet']['sim_type'] == '3G'): ?>
										     <option value="<?php echo $this->_tpl_vars['ListDet']['recharge_type']; ?>
" selected="selected"><?php echo $this->_tpl_vars['ListDet']['recharge_type']; ?>
</option>
  											  <option value="Talk_Time" >Talk_Time</option>
											  <option value="SMS" >SMS</option>
											  <option value="2G">2G</option>
											  
										<?php endif; ?>
											  
											</select>
							   </div>
							   </div>
							   <div id="errrecharge_amount"> 
								<label class="col-sm-2 control-label" style="text-align:left; margin-left:15%">Recharge Amount:</label>
								<div class="col-md-3"><input type="text"  id="recharge_amount"  name="recharge_amount" class="form-control" value="<?php echo $this->_tpl_vars['ListDet']['recharge_amount']; ?>
" autocomplete="off"> 
								</div>
								</div>
								
							   							    
							   </div>
							   <div class="form-group">
							  <div id="errno_of_validity_days">  
							  <label class="col-sm-2 control-label" style="text-align:left;">No_Of_Validity_Days:</label>
                               <div class="col-md-3"><input type="text"  id="no_of_validity_days"  name="no_of_validity_days"class="form-control" value="<?php echo $this->_tpl_vars['ListDet']['no_of_validity_days']; ?>
" autocomplete="off">
							   </div>
							   </div>
							   <div id="errrecharge_date"> 
								<label class="col-sm-2 control-label" style="text-align:left; margin-left:15%">Recharge Date:</label>
								<div class="col-md-3"><input type="text"  id="recharge_date"  name="recharge_date" class="form-control" value="<?php echo $this->_tpl_vars['ListDet']['recharge_date']; ?>
" readonly="true" autocomplete="off">
								</div>
								</div>
								
							   							    
							   </div>
							   <div class="form-group">
							  <div id="errvalid_upto">  
							  <label class="col-sm-2 control-label" style="text-align:left;">Valid_Upto:</label>
                               <div class="col-md-3"><input type="text"  id="valid_upto"  name="valid_upto"class="form-control" value="<?php echo $this->_tpl_vars['ListDet']['validity_upto']; ?>
" autocomplete="off" readonly="true">
							   </div>
							   </div>
							   
								<div id="errmodifyBy"> 
							     <label class="col-sm-2 control-label" style="text-align:left;margin-left:15%"> Modify By :</label>
								<div class="col-md-3"><input type="text"  id="modifyBy"  name="modifyBy"class="form-control" value="<?php echo $this->_supers['session']['UserName']; ?>
" autocomplete="off">
								</div>
								</div>
								</div>
								
							   							    
						   
                              
							   
                              <div class="form-group">
							  <div id="errmodifyTime">  
							  <label class="col-sm-2 control-label" style="text-align:left;">Modify Time:</label>
                               <div class="col-md-3"><input type="text" id="modifyTime"  name="modifyTime"class="form-control" value="<?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%I:%M:%S %p') : smarty_modifier_date_format($_tmp, '%I:%M:%S %p')); ?>
" autocomplete="Off">
							   </div>
							   </div>
							   <div id="errmodifyDate"> 
								<label class="col-sm-2 control-label" style="text-align:left; margin-left:15%">Modify Date:</label>
								<div class="col-md-3"><input type="text"  id="modifyDate"  name="modifyDate"class="form-control" value="<?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d') : smarty_modifier_date_format($_tmp, '%Y-%m-%d')); ?>
" autocomplete="Off">
								</div>
								</div>
								
							   							    
							   </div><?php endforeach; endif; unset($_from); ?>		
							  	<br />
							   <div align="center">
                                         
                                       <button class="btn btn-primary" type="button" id="updatePhone">UPDATE PHONE</button>
									<button class="btn btn-white" id="back" type="button">CANCEL</button>
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
        $("#updatePhone").click(function(){ 
			var fields=["simId","simNo","mobileNo","serviceNo","network","validity","simType","circle","purpose","id_proof_name","purchaseDate","plan_name","recharge_type","recharge_amount","no_of_validity_days","recharge_date","valid_upto","modifyBy","modifyDate","modifyTime"];
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
              FormName= document.phonePrepaidUpdate;
  			  FormName.method= "POST";
              FormName.submit(); 
			 });

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