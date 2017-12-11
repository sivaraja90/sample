<?php /* Smarty version 2.6.25, created on 2016-12-22 13:25:36
         compiled from ebslotReg.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'ebslotReg.tpl', 119, false),)), $this); ?>

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
                          <h5  style="padding-left:40%;">EB Slot Registration Form</h5>
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
                            <form method="post" class="form-horizontal" name="ebslotReg" id="ebslotReg">
                            <input type="hidden"  id="hdAction"  name="hdAction" />
							   <div class="form-group">
							  
							   
							   <label class="col-sm-2 control-label" style="text-align:left;">Slot Name:<span style="color:#FF0000"><sup>*</sup></span></label>
                               <div class="col-md-4"  id="errSlotName"> <input type="text"  id="slot_name"  name="slot_name" class="form-control" value="<?php echo $this->_tpl_vars['slot_name']; ?>
" autocomplete="Off" tabindex="1"></div>
							   
							   <label class="col-sm-2 control-label" style="text-align:left; ">Description:<span style="color:#FF0000"><sup>*</sup></span></label>
							   <div class="col-md-4" id="errDescription"><input type="text"  id="description"  name="description"class="form-control" onkeyup="textFilter(this)"  maxlength="15" value="<?php echo $this->_supers['post']['customerName']; ?>
" autocomplete="Off" tabindex="2"></div>
							   </div>	
                             
							  <div class="form-group">
							    <label class="col-sm-2 control-label" style="text-align:left;"> MF Price:<span style="color:#FF0000"><sup>*</sup></span></label>
                               <div class="col-md-4" id="errMFPrice"><input type="text" id="mf_price"  name="mf_price" class="form-control" onkeyup="numericFilter(this)" maxlength="10" value="<?php echo $this->_supers['post']['mobileNo']; ?>
" autocomplete="Off" tabindex="3">
							   
							   </div>
							
									<!--	<label class="col-sm-2 control-label" style="text-align:left;"> Email:<span style="color:#FF0000"><sup>*</sup></span></label>
										<div class="col-md-4" id="errEmail"><input type="text"  required  id="eMail"  name="eMail"class="form-control" onblur="ValidateEmail(this)"maxlength="30" value="<?php echo $this->_supers['post']['eMail']; ?>
" autocomplete="Off">
									
										</div>
							   </div>	-->
                       <!--     <div class="form-group">
							  
							  <label class="col-sm-2 control-label" style="text-align:left;">Phone:<span style="color:#FF0000"><sup>*</sup></span></label>
                               <div class="col-md-4" id="errPhone"><input type="text" id="phone"  name="phone"class="form-control" onkeyup="numericFilter(this)" maxlength="10" value="<?php echo $this->_supers['post']['phone']; ?>
" autocomplete="Off">
							   
							   </div>
							  
								<label class="col-sm-2 control-label" style="text-align:left; ">Designation:<span style="color:#FF0000"><sup>*</sup></span>
								</label>
								<div class="col-md-4" id="errDesignation"><input type="text"  id="designation"  name="designation"class="form-control" maxlength="25" value="<?php echo $this->_supers['post']['designation']; ?>
" autocomplete="Off"> 
								
								</div>
							   							    
							   </div>	
                              <div class="form-group">  -->
							
							  <label class="col-sm-2 control-label" style="text-align:left;">From:<span style="color:#FF0000"><sup>*</sup></span></label>
                               <div class="col-md-4" id="errFrom"><select class="form-control" id="from" name="from" value="<?php echo $this->_supers['post']['from']; ?>
"  autocomplete="Off" tabindex="4">
							   <option value="select">-Select-</option>
  <option value="00">00</option><option value="01">01</option> <option value="02">02</option><option value="03">03</option><option value="04">04</option><option value="05">05</option><option value="06">06</option> <option value="07">07</option><option value="08">08</option>  <option value="09">09</option>  <option value="10">10</option>  <option value="11">11</option><option value="12">12</option><option value="13">13</option> <option value="14">14</option><option value="15">15</option> <option value="16">16</option>  <option value="17">17</option> <option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option>
</select>
  
							   
							   </div>
							   </div>
							   
							  <div class="form-group">
								<label class="col-sm-2 control-label" style="text-align:left; ">To:<span style="color:#FF0000"><sup>*</sup></span></label>
								<div class="col-md-4" id="errTo"><select class="form-control"  id="to"  name="to"  value="<?php echo $this->_supers['post']['to']; ?>
" autocomplete="Off" tabindex="5">
								<option value="select">-Select-</option>
  <option value="00">00</option><option value="01">01</option> <option value="02">02</option><option value="03">03</option><option value="04">04</option><option value="05">05</option><option value="06">06</option> <option value="07">07</option><option value="08">08</option>  <option value="09">09</option>  <option value="10">10</option>  <option value="11">11</option><option value="12">12</option><option value="13">13</option> <option value="14">14</option><option value="15">15</option> <option value="16">16</option>  <option value="17">17</option> <option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option>
</select>
							
								</div>
							   <div id="errCreatedBy"> <label class="col-sm-2 control-label" style="text-align:left;">Created BY:</label>
                              <div class="col-md-4"><input type="text"  id="createdBy"  name="createdBy"  value="<?php echo $this->_supers['session']['UserName']; ?>
 "  readonly="true" class="form-control" tabindex="6">
							   </div>
							   </div>	
							   					   
							   </div>
							   
							   
								 
							      <div class="form-group">
							   <div id="errCreatedDate"> <label class="col-sm-2 control-label" style="text-align:left;">Created Date:</label>
                               <div class="col-md-4"><input type="text"  id="createdDate"  name="createdDate" readonly="true" value="<?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d') : smarty_modifier_date_format($_tmp, '%Y-%m-%d')); ?>
" class="form-control" tabindex="7">
							   </div>
							   </div>	
							   <div id="errCreatedTime">
										<label class="col-sm-2 control-label" style="text-align:left;">Created Time:</label>
										<div class="col-md-4"><input type="text"  id="createdTime"  name="createdTime" value="<?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%I:%M:%S %p') : smarty_modifier_date_format($_tmp, '%I:%M:%S %p')); ?>
" readonly="true" class="form-control" tabindex="8">
										</div>
										</div>						   
							   </div>
							     
				    
							   							   						   						   
                        <!--      <div class="form-group">
							
							  <label class="col-sm-2 control-label" style="text-align:left;">Address1:<span style="color:#FF0000"><sup>*</sup></span></label>
                               <div class="col-md-4"  id="errAddress1"><input type="text" id="address1"  name="address1"class="form-control" maxlength="30" value="<?php echo $this->_supers['post']['address1']; ?>
" autocomplete="Off">
							   
							   </div>
							 
								<label class="col-sm-2 control-label" style="text-align:left; ">Address2:</label>
								<div class="col-md-4"  id="errAddress2"><input type="text"  id="address2"  name="address2"class="form-control" maxlength="30" value="<?php echo $this->_supers['post']['address2']; ?>
"  autocomplete="Off"> 
								
								</div>
							   							    
							   </div>	
                              <div class="form-group">
							  
							  <label class="col-sm-2 control-label" style="text-align:left;">City:</label>
                               <div class="col-md-4"  id="errCity"><input type="text" id="city"  name="city"class="form-control" value="<?php echo $this->_supers['post']['city']; ?>
" autocomplete="Off">
							  
							   </div>
							   
								<label class="col-sm-2 control-label" style="text-align:left; ">Pincode:</label>
								<div class="col-md-4" id="errPincode"><input type="text"  id="pinCode"  name="pinCode"class="form-control" onkeyup="numericFilter(this)" maxlength="6" value="<?php echo $this->_supers['post']['pinCode']; ?>
" autocomplete="Off">
								
								</div>
							   							    
							   </div>		
                              <div class="form-group">
							
							  <label class="col-sm-2 control-label" style="text-align:left;">State:</label>
                               <div class="col-md-4"  id="errstate"><input type="text" id="state"  name="state" class="form-control" maxlength="25" value="<?php echo $this->_supers['post']['state']; ?>
" autocomplete="Off">
							  
							   </div>
							  <label class="col-sm-2 control-label" style="text-align:left;">Created By:</label>
                               <div class="col-md-4"  id="errcreatedBy">
							<input type="text" id="createdBy"  name="createdBy" class="form-control" value="<?php echo $this->_supers['session']['UserName']; ?>
" readonly="true" autocomplete="Off" >
							</div>
								
							   							    
							   </div>	
                               	
                             <div class="form-group">
							   -->
							   
							<!-- <label class="col-sm-2 control-label" style="text-align:left;">Created Date:</label> -->
                             <!--  <div class="col-md-4"  id="errCreatedDate">
							<input type="hidden" id="createdDate"  name="createdDate" class="form-control" readonly="true" value="<?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d') : smarty_modifier_date_format($_tmp, '%Y-%m-%d')); ?>
" autocomplete="Off"></div>
							  <label class="col-sm-2 control-label" style="text-align:left;">Created Time:</label> 
                               <div class="col-md-4"  id="errCreatedTime">
						<!--	<input type="hidden" id="createdTime"  name="createdTime" class="form-control" readonly="true" value="<?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%I:%M:%S %p') : smarty_modifier_date_format($_tmp, '%I:%M:%S %p')); ?>
" autocomplete="Off"></div>
						</div>	  
						-->
						
						
						
									  
							  	<br />
							   <div align="center">
                                         
                                        <button class="btn btn-primary" type="button" id="addslot">ADD EB SLOT</button>
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
			
$("#addslot").click(function(){
				var fields=["slot_name","description","mf_price","from","to",];
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
              FormName= document.ebslotReg;
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
