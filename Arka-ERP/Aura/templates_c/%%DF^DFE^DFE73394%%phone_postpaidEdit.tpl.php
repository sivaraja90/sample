<?php /* Smarty version 2.6.25, created on 2016-12-20 15:23:45
         compiled from phone_postpaidEdit.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'phone_postpaidEdit.tpl', 134, false),)), $this); ?>

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
                          <h5 style="padding-left:40%;">Edit Phone postpaid Details</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                               
                            </div>
                        </div>
                        <div class="ibox-content">
                            <form method="post"  name="phonePostpaidUpdate" id="phonePostpaidUpdate"class="form-horizontal">
							<input type="hidden"  id="hdAction"  name="hdAction" />
							<input type="hidden" value="<?php echo $this->_supers['get']['sim_id']; ?>
" id="simId" name="simId"  />
							<?php $_from = $this->_tpl_vars['PageList5']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['List']):
?>
							<input type="hidden" value="<?php echo $this->_tpl_vars['List']['sim_no']; ?>
" id="sim_no" name="sim_no"  />
							<input type="hidden" value="<?php echo $this->_tpl_vars['List']['mobile_no']; ?>
" id="mobileNo" name="mobileNo"  />
                             <input type="hidden" value="<?php echo $this->_tpl_vars['List']['service_no']; ?>
" id="serviceNo" name="serviceNo"  />
							 <input type="hidden" value="<?php echo $this->_tpl_vars['List']['network']; ?>
" id="network" name="network"  />
							<input type="hidden" value="<?php echo $this->_tpl_vars['List']['validity']; ?>
" id="validity" name="validity"  />
                             <input type="hidden" value="<?php echo $this->_tpl_vars['List']['sim_type']; ?>
" id="simType" name="simType"  />
							 <input type="hidden" value="<?php echo $this->_tpl_vars['List']['id_proof_name']; ?>
" id="id_proof_name" name="id_proof_name"  />
							<input type="hidden" value="<?php echo $this->_tpl_vars['List']['purpose']; ?>
" id="purpose" name="purpose"  />
                             <input type="hidden" value="<?php echo $this->_tpl_vars['List']['plan_name']; ?>
" id="plan_name" name="plan_name"  />
							 <input type="hidden" value="<?php echo $this->_tpl_vars['List']['circle']; ?>
" id="circle" name="circle"  />
							<input type="hidden" value="<?php echo $this->_tpl_vars['List']['purchase_date']; ?>
" id="purchaseDate" name="purchaseDate"  />
                             <input type="hidden" value="<?php echo $this->_tpl_vars['List']['modify_by']; ?>
" id="modifyBy" name="modifyBy"  />
							 <input type="hidden" value="<?php echo $this->_tpl_vars['List']['modify_time']; ?>
" id="modifyTime" name="modifyTime"  />
							 <input type="hidden" value="<?php echo $this->_tpl_vars['List']['modify_date']; ?>
" id="modifyDate" name="modifyDate"  />
							 <?php endforeach; endif; unset($_from); ?>
							 <?php $_from = $this->_tpl_vars['PostpaidList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ListPostpaid']):
?>
							<div class="form-group">
							  <div id="errpurchaseDate">  
							  <label class="col-sm-2 control-label" style="text-align:left;">Bill Date:</label>
                               <div class="col-md-3"><input type="text" id="bill_Date"  name="bill_Date"class="form-control" value="<?php echo $this->_tpl_vars['ListPostpaid']['bill_date']; ?>
" autocomplete="Off">
							   </div>
							   </div>
							   <div id="errmodifyBy"> 
								<label class="col-sm-2 control-label" style="text-align:left; margin-left:15%">Due Date:</label>
								<div class="col-md-3"><input type="text"  id="due_Date"  name="due_Date"class="form-control"  value="<?php echo $this->_tpl_vars['ListPostpaid']['due_date']; ?>
" readonly="true" autocomplete="Off">
								</div>
								</div>
							   							    
							   </div>	
							   
							   <div class="form-group">
							  <div id="errpurchaseDate">  
							  <label class="col-sm-2 control-label" style="text-align:left;">Bill Amount:</label>
                               <div class="col-md-3"><input type="text" id="bill_Amount"  name="bill_Amount"class="form-control" value="<?php echo $this->_tpl_vars['ListPostpaid']['bill_amt']; ?>
" autocomplete="Off">
							   </div>
							   </div>
							   <div id="errmodifyBy"> 
								<label class="col-sm-2 control-label" style="text-align:left; margin-left:15%">Paid Amount:</label>
								<div class="col-md-3"><input type="text"  id="paid_Amount"  name="paid_Amount"class="form-control"  value="<?php echo $this->_tpl_vars['ListPostpaid']['paid_amt']; ?>
" readonly="true" autocomplete="Off">
								</div>
								</div>
							   							    
							   </div>	
							   
							     <div class="form-group">
							  <div id="errpaid_Date">  
							  <label class="col-sm-2 control-label" style="text-align:left;">Paid Date:</label>
                               <div class="col-md-3"><input type="text" id="paid_Date"  name="paid_Date"class="form-control" value="<?php echo $this->_tpl_vars['ListPostpaid']['paid_date']; ?>
" autocomplete="Off">
							   </div>
							   </div>
							   <div id="errpayment_Mode"> 
								<label class="col-sm-2 control-label" style="text-align:left; margin-left:15%">Payment Mode:</label>
								<div class="col-md-3"><select class="form-control"  id="payment_Mode"  name="payment_Mode"   autocomplete="Off">
								               <?php if ($this->_tpl_vars['ListPostpaid']['payment_mode'] == 'Cash'): ?>
											    <option value="<?php echo $this->_tpl_vars['ListPostpaid']['payment_mode']; ?>
" selected="selected"><?php echo $this->_tpl_vars['ListPostpaid']['payment_mode']; ?>
</option>
											  <option id="Cheque" name="Cheque" value="Cheque" >Cheque</option>
											  <option id="Online" name="Online" value="Online" >Online</option>
											   <?php elseif ($this->_tpl_vars['ListPostpaid']['payment_mode'] == 'Cheque'): ?>
											    <option value="<?php echo $this->_tpl_vars['ListPostpaid']['payment_mode']; ?>
" selected="selected"><?php echo $this->_tpl_vars['ListPostpaid']['payment_mode']; ?>
</option>
											    <option id="Cash" name="Cash" value="Cash" >Cash</option>
												<option id="Online" name="Online" value="Online" >Online</option>
												<?php elseif ($this->_tpl_vars['ListPostpaid']['payment_mode'] == 'Online'): ?>
												<option value="<?php echo $this->_tpl_vars['ListPostpaid']['payment_mode']; ?>
" selected="selected"><?php echo $this->_tpl_vars['ListPostpaid']['payment_mode']; ?>
</option>
											    <option id="Cash" name="Cash" value="Cash" >Cash</option>
												<option id="Cheque" name="Cheque" value="Cheque" >Cheque</option>
													<?php endif; ?>
											</select>
								</div>
								</div>
							   							    
							   </div>	
							
							     <div class="form-group">
							  <div id="errpurchaseDate">  
							  <label class="col-sm-2 control-label" style="text-align:left;">Payment Status:</label>
                               <div class="col-md-3"><input type="text" id="payment_Status"  name="payment_Status"class="form-control" value="<?php echo $this->_tpl_vars['ListPostpaid']['payment_status']; ?>
" autocomplete="Off">
							   </div>
							   </div>
							   <div id="errmodifyBy"> 
								<label class="col-sm-2 control-label" style="text-align:left; margin-left:15%">Payment Ref:</label>
								<div class="col-md-3"><input type="text"  id="payment_Ref"  name="payment_Ref"class="form-control"  value="<?php echo $this->_tpl_vars['ListPostpaid']['payment_ref']; ?>
" readonly="true"autocomplete="Off">
								</div>
								</div>
							   							    
							   </div>	
							    <div class="form-group">
							 
								<div id="errmodifyBy"> 
							     <label class="col-sm-2 control-label" style="text-align:left;"> Modify By :</label>
								<div class="col-md-3"><input type="text"  id="modifyBy"  name="modifyBy"class="form-control" value="<?php echo $this->_supers['session']['UserName']; ?>
" autocomplete="off">
								</div>
								</div>
								<div id="errmodifyDate"> 
								<label class="col-sm-2 control-label" style="text-align:left; margin-left:15%">Modify Date:</label>
								<div class="col-md-3"><input type="text"  id="modifyDate"  name="modifyDate"class="form-control" value="<?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d') : smarty_modifier_date_format($_tmp, '%Y-%m-%d')); ?>
" autocomplete="Off">
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
			var fields=["bill_Date","due_Date","bill_Amount","paid_Amount","payment_Mode"];
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
              FormName= document.phonePostpaidUpdate;
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