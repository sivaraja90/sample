<?php /* Smarty version 2.6.25, created on 2016-12-21 13:51:52
         compiled from customerEdit.tpl */ ?>

	<?php echo '

	<script>
	
	$(document).ready(function(){
    $("#all").load(function(){
        $("#new2").hide();
    });
});
	</script>
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
        $("#upDateCustomer").click(function(){
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
              FormName= document.customerUpdate;
			  		<!--alert("hiiii");-->
  			  FormName.method= "POST";
              FormName.submit(); 
			                 });

$("#back").click(function(){

window.history.back();

});
$("#edit").click(function(){
var h= document.getElementById("image").value="";

 $("#new").hide();
 $("#edit").hide();
 $("#new2").show();

});
		
		 });
	</script>	
		<script type="text/javascript">
		
       
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
<script type="text/javascript" src=\'./dhtmlxMessage/codebase/dhtmlxmessage.js\'></script>
<script type=\'text/javascript\' src=\'./auto-complete/jquery.metadata.js\'></script>
<script type=\'text/javascript\' src=\'./auto-complete/jquery.auto-complete.js?<?= mktime() ?>\'></script>
<script type=\'text/javascript\' src=\'./auto-complete/js.js?<?= mktime() ?>\'></script>
<link rel="stylesheet" href= "./codebase/skins/dhtmlxmessage_dhx_skyblue.css" type="text/css" media="all"/> 
<link rel=\'stylesheet\' type=\'text/css\' href=\'auto-complete/jquery.auto-complete.css?<?= mktime() ?>\' />


  '; ?>

           
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
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                          <h5 style="padding-left:40%;">Edit Customer Details</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                               
                            </div>
                        </div>
                        <div class="ibox-content">
						
                            <form method="post"  name="customerUpdate" id="customerUpdate" class="form-horizontal">
							<input type="hidden"  id="hdAction"  name="hdAction" />
                            <?php $_from = $this->_tpl_vars['PageList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ListDet']):
?>
							   <div class="form-group">
							  <div id="errcustomerId"> 
				<label class="col-sm-2 control-label" style="text-align:left;">Customer ID:</label>
				<div class="col-md-3"><input type="text" id="customerId"  name="customerId"class="form-control" readonly="true" value="<?php echo $this->_tpl_vars['ListDet']['customer_id']; ?>
" autocomplete="Off"></div></div>
							   <div id="errcustomerName">  
							   <label class="col-sm-2 control-label" style="text-align:left; margin-left:15%">Customer Name:</label>
							   <div class="col-md-3"> <input type="text" id="customerName"  name="customerName" class="form-control" value="<?php echo $this->_tpl_vars['ListDet']['customer_name']; ?>
 " maxlength="25"  onkeyup="textFilter(this)" maxlength="15" autocomplete="Off" ></div>
							   </div>
							   </div>	
                              <div class="form-group">
							   <div id="errmobileNo"> <label class="col-sm-2 control-label" style="text-align:left;"> Mobile No:</label>
                               <div class="col-md-3"><input type="text" id="mobileNo"  name="mobileNo" class="form-control" value="<?php echo $this->_tpl_vars['ListDet']['mobile']; ?>
" onkeyup="numericFilter(this)" onBlur="chk_exist_mob(this);" maxlength="10" autocomplete="Off">
							   </div>
							   </div>
							   <div id="erreMail"> 
										<label class="col-sm-2 control-label" style="text-align:left;margin-left:15%"> Email:</label>
										<div class="col-md-3"><input type="text"  id="eMail"  name="eMail"class="form-control" value="<?php echo $this->_tpl_vars['ListDet']['email']; ?>
"onblur="ValidateEmail(this)" maxlength="30" autocomplete="Off">
										</div>
										</div>
							   </div>	
                            <div class="form-group">
							  <div id="errcustomerType">  
							  <label class="col-sm-2 control-label" style="text-align:left;">Phone:</label>
                               <div class="col-md-3"><input type="text" id="phone"  name="phone"class="form-control" value="<?php echo $this->_tpl_vars['ListDet']['phone']; ?>
" onkeyup="numericFilter(this)" maxlength="10" autocomplete="Off">
							   </div>
							   </div>
							   <div id="errcustomerPerson"> 
								<label class="col-sm-2 control-label" style="text-align:left; margin-left:15%">Designation:</label>
								<div class="col-md-3"><input type="text"  id="designation"  name="designation"class="form-control" value="<?php echo $this->_tpl_vars['ListDet']['designation']; ?>
" maxlength="25" autocomplete="Off">
								</div>
								</div>
							   							    
							   </div>	
                              <div class="form-group">
							  <div id="errcustomerType">  
							  <label class="col-sm-2 control-label" style="text-align:left;">Customer Type:</label>
                               <div class="col-md-3">
							   <select class="form-control" id="customerType"  name="customerType" autocomplete="Off" >
							  <?php if ($this->_tpl_vars['ListDet']['customer_type'] == 'AMC'): ?>
							      <option value="<?php echo $this->_tpl_vars['ListDet']['customer_type']; ?>
"  selected="selected"><?php echo $this->_tpl_vars['ListDet']['customer_type']; ?>
</option>
								  <option value="Sales">Sales</option>
								  <option value="Demo">Demo</option>
								  <option value="Sales + AMC">Sales + AMC</option>
								  <option value="OutSourcing">OutSourcing</option>
							  <?php elseif ($this->_tpl_vars['ListDet']['customer_type'] == 'Sales'): ?>
								  <option value="<?php echo $this->_tpl_vars['ListDet']['customer_type']; ?>
"  selected="selected"><?php echo $this->_tpl_vars['ListDet']['customer_type']; ?>
</option>
								  <option value="AMC">AMC</option>
								  <option value="Demo">Demo</option>
								  <option value="Sales + AMC">Sales + AMC</option>
								  <option value="OutSourcing">OutSourcing</option>
								  <?php elseif ($this->_tpl_vars['ListDet']['customer_type'] == 'Demo'): ?>
								<option value="<?php echo $this->_tpl_vars['ListDet']['customer_type']; ?>
"  selected="selected"><?php echo $this->_tpl_vars['ListDet']['customer_type']; ?>
</option>
								  <option value="AMC">AMC</option>
								  <option value="Sales">Sales</option>
								  <option value="Sales + AMC">Sales + AMC</option>
								  <option value="OutSourcing">OutSourcing</option>
								  <?php elseif ($this->_tpl_vars['ListDet']['customer_type'] == 'Sales + AMC'): ?>
								<option value="<?php echo $this->_tpl_vars['ListDet']['customer_type']; ?>
"  selected="selected"><?php echo $this->_tpl_vars['ListDet']['customer_type']; ?>
</option>
								  <option value="AMC">AMC</option>
								  <option value="Sales">Sales</option>
								  <option value="Demo">Demo</option>
								  <option value="OutSourcing">OutSourcing</option>
								  <?php elseif ($this->_tpl_vars['ListDet']['customer_type'] == 'OutSourcing'): ?>
								<option value="<?php echo $this->_tpl_vars['ListDet']['customer_type']; ?>
"  selected="selected"><?php echo $this->_tpl_vars['ListDet']['customer_type']; ?>
</option>
								  <option value="AMC">AMC</option>
								  <option value="Sales">Sales</option>
								  <option value="Demo">Demo</option>
								  <option value="Sales + AMC">Sales + AMC</option>
								  
							<?php endif; ?> 
							</select>
							   </div>
							   </div>
							   <div id="errcontactPerson"> 
								<label class="col-sm-2 control-label" style="text-align:left; margin-left:15%">Contact Person:</label>
								<div class="col-md-3"><input type="text"  id="contactPerson"  name="contactPerson"class="form-control" value="<?php echo $this->_tpl_vars['ListDet']['contact_person']; ?>
" maxlength="15" autocomplete="Off">
								</div>
								</div>
							   							    
							   </div>							   						   						   
                              <div class="form-group">
							  <div id="erraddress1">  
							  <label class="col-sm-2 control-label" style="text-align:left;">Address1:</label>
                               <div class="col-md-3"><input type="text" id="address1"  name="address1"class="form-control" value="<?php echo $this->_tpl_vars['ListDet']['address1']; ?>
" maxlength="30" autocomplete="Off">
							   </div>
							   </div>
							   <div id="erraddress2"> 
								<label class="col-sm-2 control-label" style="text-align:left; margin-left:15%">Address2:</label>
								<div class="col-md-3"><input type="text"  id="address2"  name="address2"class="form-control" value="<?php echo $this->_tpl_vars['ListDet']['address2']; ?>
" maxlength="30" autocomplete="Off">
								</div>
								</div>
							   							    
							   </div>	
                              <div class="form-group">
							  <div id="errcity">  
							  <label class="col-sm-2 control-label" style="text-align:left;">City:</label>
                               <div class="col-md-3"><input type="text" id="city"  name="city"class="form-control" value="<?php echo $this->_tpl_vars['ListDet']['city']; ?>
" autocomplete="Off">
							   </div>
							   </div>
							   <div id="errpinCode"> 
								<label class="col-sm-2 control-label" style="text-align:left; margin-left:15%">Pincode:</label>
								<div class="col-md-3"><input type="text"  id="pinCode"  name="pinCode"class="form-control" value="<?php echo $this->_tpl_vars['ListDet']['pincode']; ?>
" onkeyup="numericFilter(this)" onBlur="chk_exist_pincode(this);" maxlength="6" autocomplete="Off">
								</div>
								</div>
							   							    
							   </div>		
                              <div class="form-group">
							  <div id="errstate">  
							  <label class="col-sm-2 control-label" style="text-align:left;">State:</label>
                               <div class="col-md-3"><input type="text" id="state"  name="state"class="form-control" value="<?php echo $this->_tpl_vars['ListDet']['state']; ?>
" maxlength="25" autocomplete="Off">
							   </div>
							   </div>
							    <div id="errstate">  
							   <label class="col-sm-2 control-label" style="text-align:left; margin-left:15%">Logo Image:</label>
                               <div class="col-md-3" id="new"><input type="text" readonly="true" id="image"  name="image" class="form-control" value="<?php echo $this->_tpl_vars['ListDet']['logo_image']; ?>
" maxlength="25" autocomplete="Off"></div><i class="fa fa-pencil-square-o" aria-hidden="true" id="edit"></i>
							   <div class="col-md-3" id="new2" style="display:none;"><input type="file" id="image1"  name="image1"    autocomplete="Off">
							   </div>
							   </div>
							   				    
							   </div>	
                          	     	<?php endforeach; endif; unset($_from); ?>
							  	<br/>
							  	 <div align="center">
                                         
                                        <button class="btn btn-primary" type="submit" id="upDateCustomer">UPDATE</button>
										<button class="btn btn-white" type="button" name="back" id="back">CANCEL</button>
                                      </div>
									 
                                    </form>
                        </div>
                    </div>
					</div>
                </div>
            </div>
        </div>