<?php /* Smarty version 2.6.25, created on 2017-08-03 18:10:44
         compiled from customerReg.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'customerReg.tpl', 158, false),)), $this); ?>

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
                          <h5  style="padding-left:40%;">Customer Registration Form</h5>
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
                        <div class="ibox-content"><body onLoad="doOnload();">
                            <form method="post" class="form-horizontal" name="customerReg" id="customerReg" enctype="multipart/form-data">
                            <input type="hidden"  id="hdAction"  name="hdAction" />
							   <div class="form-group">
							  
							   
							   <label class="col-sm-2 control-label" style="text-align:left;">Customer ID:<span style="color:#FF0000"><sup>*</sup></span></label>
                               <div class="col-md-4"  id="errCustomerId"> <input type="text"  id="customerId"  name="customerId" class="form-control" readonly="true" value="<?php echo $this->_tpl_vars['c_id']; ?>
  " autocomplete="Off"></div>
							   
							   <label class="col-sm-2 control-label" style="text-align:left; ">Customer Name:<span style="color:#FF0000"><sup>*</sup></span></label>
							   <div class="col-md-4" id="errCustomerName"><input type="text"  id="customerName"  name="customerName"class="form-control" onKeyUp="textFilter(this)"  maxlength="35" value="<?php echo $this->_supers['post']['customerName']; ?>
" autocomplete="Off"></div>
							   
							   </div>	
                              <div class="form-group">
							    <label class="col-sm-2 control-label" style="text-align:left;"> Mobile No:<span style="color:#FF0000"><sup>*</sup></span></label>
                               <div class="col-md-4" id="errMobileNo"><input type="text" id="mobileNo"  name="mobileNo" class="form-control" onKeyUp="numericFilter(this);" onBlur="chk_exist_mob(this);" maxlength="10" value="<?php echo $this->_supers['post']['mobileNo']; ?>
" autocomplete="Off">
							   
							   </div>
							
										<label class="col-sm-2 control-label" style="text-align:left;"> Email:<span style="color:#FF0000"><sup>*</sup></span></label>
										<div class="col-md-4" id="errEmail"><input type="text"  required  id="eMail"  name="eMail"class="form-control" onBlur="ValidateEmail(this)"maxlength="30" value="<?php echo $this->_supers['post']['eMail']; ?>
" autocomplete="Off">
									
										</div>
							   </div>	
                            <div class="form-group">
							  
							  <label class="col-sm-2 control-label" style="text-align:left;">Phone:<span style="color:#FF0000"><sup>*</sup></span></label>
                               <div class="col-md-4" id="errPhone"><input type="text" id="phone"  name="phone"class="form-control" onKeyUp="numericFilter(this);" maxlength="11" value="<?php echo $this->_supers['post']['phone']; ?>
" autocomplete="Off">
							   
							   </div>
							  
								<label class="col-sm-2 control-label" style="text-align:left; ">Designation:<span style="color:#FF0000"><sup>*</sup></span>
								</label>
								<div class="col-md-4" id="errDesignation"><input type="text"  id="designation"  name="designation"class="form-control" maxlength="25" value="<?php echo $this->_supers['post']['designation']; ?>
" autocomplete="Off"> 
								
								</div>
							   							    
							   </div>	
                              <div class="form-group">
							
							  <label class="col-sm-2 control-label" style="text-align:left;">Customer Type:<span style="color:#FF0000"><sup>*</sup></span></label>
                               <div class="col-md-4" id="errCustomerType"><select class="form-control" id="customerType" name="customerType" value="<?php echo $this->_supers['post']['customerType']; ?>
"  autocomplete="Off">
							   <option value="select">-Select-</option>
  <option value="Own Family">Own Family</option>
  <option value="AMC">AMC</option>
  <option value="Sales">Sales</option>
  <option value="Demo">Demo</option>
  <option value="Sales + AMC">Sales + AMC</option>
  <option value="OutSourcing">OutSourcing</option>
  
</select>
  
							   
							   </div>
							 
								<label class="col-sm-2 control-label" style="text-align:left; ">Contact Person:<span style="color:#FF0000"><sup>*</sup></span></label>
								<div class="col-md-4" id="errContactPerson"><input type="text"  id="contactPerson"  name="contactPerson"class="form-control" maxlength="25" value="<?php echo $this->_supers['post']['contactPerson']; ?>
" autocomplete="Off">
							
								</div>
							   							    
							   </div>							   						   						   
                              <div class="form-group">
							
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
								<div class="col-md-4" id="errPincode"><input type="text"  id="pinCode"  name="pinCode"class="form-control" onKeyUp="numericFilter(this);" onBlur="chk_exist_pincode(this);" maxlength="6" value="<?php echo $this->_supers['post']['pinCode']; ?>
" autocomplete="Off">
								
								</div>
							   							    
							   </div>		
                              <div class="form-group">
							
							  <label class="col-sm-2 control-label" style="text-align:left;">State:</label>
                               <div class="col-md-4"  id="errstate">
							   <input type="text" id="state"  name="state" class="form-control" maxlength="25" value="<?php echo $this->_supers['post']['state']; ?>
" autocomplete="Off">
							   </div> 
							   <label class="col-sm-2 control-label" style="text-align:left;">Logo Image:</label>
                               <div class="col-md-4">
						 		<input type="file" id="image" name="image"  value="<?php echo $this->_supers['post']['image']; ?>
" autocomplete="off">
							   	</div>
								
							   							    
							   </div>	
							 
							<input type="hidden" id="createdBy"  name="createdBy" class="form-control" value="<?php echo $this->_supers['session']['UserName']; ?>
" readonly="true" autocomplete="Off" >
							
                             <div class="form-group">
							   
							   
							<!-- <label class="col-sm-2 control-label" style="text-align:left;">Created Date:</label> -->
                               <div class="col-md-4"  id="errCreatedDate">
							<input type="hidden" id="createdDate"  name="createdDate" class="form-control" readonly="true" value="<?php echo ((is_array($_tmp='+2 days')) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d %H:%M:%S') : smarty_modifier_date_format($_tmp, '%Y-%m-%d %H:%M:%S')); ?>
" autocomplete="Off"></div>
							<!--  <label class="col-sm-2 control-label" style="text-align:left;">Created Time:</label> -->
                               <div class="col-md-4"  id="errCreatedTime">
							<input type="hidden" id="createdTime"  name="createdTime" class="form-control" readonly="true" value="<?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%H:%M:%S ') : smarty_modifier_date_format($_tmp, '%H:%M:%S ')); ?>
" autocomplete="Off"></div>
						</div>	  
						
						
						
						
									  
							  	<br />
							   <div align="center">
                                         
                                        <button class="btn btn-primary" type="submit" id="addCustomer">ADD CUSTOMER</button>
										<button class="btn btn-white" type="button" id="back">CANCEL</button>
                                      </div>
                                    </form></body>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		</div>
<?php echo '		
<script>

function chk_exist_mob(mob_no)
{

if (mob_no.value=="")
  {
  return false;
  }
  
		if(mob_no.value.length==10)
								{ 
								
								}
		else
								{
								dhtmlx.alert({
								title: "Error !",
								type:"alert-error",
								text: "Mobile Number Should be 10 Digits",	
											});		
								return false;									
								}	  

}

function chk_exist_pincode(pincode)
{

if (pincode.value=="")
  {
  return false;
  }
  
		if(pincode.value.length==6)
								{ 
								
								}
		else
								{
								dhtmlx.alert({
								title: "Error !",
								type:"alert-error",
								text: "Pincode Should be 6 Digits",	
											});		
								return false;									
								}	  

}








        $(document).ready(function() {	
			
$("#addCustomer").click(function(){
				var fields=["customerId","customerName","mobileNo","eMail","phone","designation","customerType","contactPerson","address1","city","state"];
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
              FormName= document.customerReg;
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
fuction doOnload()
{
var current = "$smarty.now|date_format:\'%Y-%m-%d\'";
var onehour ="\'+1 HOUR\'|date_format:\'%Y-%m-%d\'";
var diff = current - one hour;
}
		 </script>
		 <script>
function numericFilter(data) 
{
   data.value = data.value.replace(/[^.0-9^.+,-]/ig,"");
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
<script type="text/javascript" src=\'./dhtmlxMessage/codebase/dhtmlxmessage.js\'></script>
<script type=\'text/javascript\' src=\'./auto-complete/jquery.metadata.js\'></script>
<script type=\'text/javascript\' src=\'./auto-complete/jquery.auto-complete.js?<?= mktime() ?>\'></script>
<script type=\'text/javascript\' src=\'./auto-complete/js.js?<?= mktime() ?>\'></script>
<link rel="stylesheet" href= "./codebase/skins/dhtmlxmessage_dhx_skyblue.css" type="text/css" media="all"/> 
<link rel=\'stylesheet\' type=\'text/css\' href=\'auto-complete/jquery.auto-complete.css?<?= mktime() ?>\' />

'; ?>