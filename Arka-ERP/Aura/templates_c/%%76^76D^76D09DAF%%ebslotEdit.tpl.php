<?php /* Smarty version 2.6.25, created on 2016-02-06 16:16:48
         compiled from ebslotEdit.tpl */ ?>


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
            <div class="row">
                
                
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                          <h5 style="padding-left:40%;">Edit EB Slot Details</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                               
                            </div>
                        </div>
                        <div class="ibox-content">
                            <form method="post"  name="ebslotUpdate" id="ebslotUpdate" class="form-horizontal">
							<input type="hidden"  id="hdAction"  name="hdAction" />
                            <?php $_from = $this->_tpl_vars['PageList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ListDet']):
?>
							   <div class="form-group">
							  <div id="errSlotName"> 
<label class="col-sm-2 control-label" style="text-align:left;">Slot Name:</label>
<div class="col-md-3"><input type="text" id="slot_name"  name="slot_name"class="form-control" readonly="true" value="<?php echo $this->_tpl_vars['ListDet']['slot_name']; ?>
" autocomplete="Off"></div></div>
							   <div id="errDescription">  
							   <label class="col-sm-2 control-label" style="text-align:left; margin-left:15%">Description:</label>
							   <div class="col-md-3"><input type="text" id="description"   name="description" class="form-control" value="<?php echo $this->_tpl_vars['ListDet']['description']; ?>
 " maxlength="25"  onkeyup="textFilter(this)" maxlength="15" autocomplete="Off" ></div>
							   </div>
							   </div>	
                              <div class="form-group">
							   <div id="errMFPrice"> <label class="col-sm-2 control-label" style="text-align:left;"> MF Price:</label>
                              <div class="col-md-3"><input type="text" id="mf_price"  name="mf_price" class="form-control" value="<?php echo $this->_tpl_vars['ListDet']['mf_price']; ?>
" onkeyup="numericFilter(this)" maxlength="10" autocomplete="Off">
							   </div>
							   </div>
							   <div id="errFrom"> 
										<label class="col-sm-2 control-label" style="text-align:left;margin-left:15%"> From:</label>
										<div class="col-md-3"><input type="text"  id="from"  name="from"class="form-control" value="<?php echo $this->_tpl_vars['ListDet']['from']; ?>
"onblur="ValidateEmail(this)" maxlength="30" autocomplete="Off">
										</div>
										</div>
							   </div>	
                            <div class="form-group">
							  <div id="errTo">  
							  <label class="col-sm-2 control-label" style="text-align:left;">To:</label>
                               <div class="col-md-3"><input type="text" id="to"  name="to"class="form-control" value="<?php echo $this->_tpl_vars['ListDet']['to']; ?>
" onkeyup="numericFilter(this)" maxlength="10" autocomplete="Off">
							   </div>
							   </div>
							 <!--  <div id="errcustomerPerson"> 
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
" onkeyup="numericFilter(this)" maxlength="6" autocomplete="Off">
								</div>
								</div>
							   							    
							   </div>		
                              <div class="form-group">
							  <div id="errstate">  
							  <label class="col-sm-2 control-label" style="text-align:left;">State:</label>
                               <div class="col-md-3"><input type="text" id="state"  name="state"class="form-control" value="<?php echo $this->_tpl_vars['ListDet']['state']; ?>
" maxlength="25" autocomplete="Off">
							   </div>
							   </div>   -->
							   				    
							   </div>	
                          	     	<?php endforeach; endif; unset($_from); ?>
							  	<br/>
							  	 <div align="center">
                                         
                                        <button class="btn btn-primary" type="button" id="upDateslot">UPDATE</button>
										<button class="btn btn-white" type="button" name="back" id="back">CANCEL</button>
                                      </div>
									 
                                    </form>
                        </div>
                    </div>
					</div>
                </div>
            </div>
        </div>`
		
	<?php echo '	
		<script type="text/javascript">
		
        $(document).ready(function() {	
        $("#upDateslot").click(function(){
			var fields=["slot_name","description","mf_price","from","to"];
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
              FormName= document.ebslotUpdate;
			  		//alert(current_iteration);
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