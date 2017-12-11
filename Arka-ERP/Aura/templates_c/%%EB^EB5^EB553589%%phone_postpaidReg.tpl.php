<?php /* Smarty version 2.6.25, created on 2016-12-20 14:26:00
         compiled from phone_postpaidReg.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'phone_postpaidReg.tpl', 184, false),)), $this); ?>

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
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                          <h5  style="padding-left:40%;">PhonePostpaid Registration Form</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                             <!--    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
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
						
						
                        <div class="ibox-content"><body onLoad="doOnLoad();doOnLoad1();">
                            <form method="post" class="form-horizontal" name="phonePostpaidReg">
                             <input type="hidden"  id="hdAction"  name="hdAction" />
							  
							   	<input type="hidden"  id="simId"  name="simId" class="form-control" readonly="true" value="<?php echo $this->_supers['get']['sim_id']; ?>
" autocomplete="off">
							   	<input type="hidden"  id="mobileNo"  name="mobileNo" class="form-control" readonly="true" value="<?php echo $this->_supers['get']['mobile_no']; ?>
" autocomplete="off">
							 <input type="text" id="bill_amount" name="bill_amount" >
							 
							   <div class="form-group">
							  <label class="col-sm-2 control-label" style="text-align:left; ">Bill Date:</label>
								<div class="col-md-4" id="errbill_Date"><input type="text"  id="bill_Date"  name="bill_Date" class="form-control" value="<?php echo $this->_tpl_vars['bill_Date']; ?>
" readonly="true" autocomplete="off" onBlur="Due(this.value);"> 
							   
							   </div>
							 
								<label class="col-sm-2 control-label" style="text-align:left; ">Due Date:</label>
							<div class="col-md-4" id="errdue_Date"><input type="text"  id="due_Date"  name="due_Date"class="form-control" value="<?php echo $this->_tpl_vars['due_Date']; ?>
" readonly="true" autocomplete="off">
							
								</div>
							   							    
							   </div>	
							   <div class="form-group" >
							
							  <label class="col-sm-2 control-label" style="text-align:left; ">Plan Amount:</label>
								<div class="col-md-4" id="errplan_Amount"><input type="text"  id="plan_Amount"  name="plan_Amount" class="form-control" value="<?php echo $this->_tpl_vars['plan_Amount']; ?>
" autocomplete="off">
							
							   
							   </div>
							 
								<label class="col-sm-2 control-label" style="text-align:left; ">Tax Amount:</label>
								<div class="col-md-4" id="errtax_Amount"><input type="text"  id="tax_Amount"  name="tax_Amount" class="form-control" value="<?php echo $this->_tpl_vars['tax_Amount']; ?>
" autocomplete="off" onKeyUp="amount_calc();">
							
								</div>
							   							    
							   </div>	
							   <div class="form-group">
							
							  <label class="col-sm-2 control-label" style="text-align:left; ">Total Paid Amount:</label>
								<div class="col-md-4" id="errtotalpaid_amount"><input type="text"  id="totalpaid_amount"  name="totalpaid_amount"class="form-control" value="<?php echo $this->_tpl_vars['totalpaid_amount']; ?>
" readonly="true" autocomplete="off">
							   
							   </div>
							    <label class="col-sm-2 control-label" style="text-align:left; ">Paid Date:</label>
								<div class="col-md-4" id="errpaidDate"><input type="text"  id="paidDate"  name="paidDate"class="form-control" value="<?php echo $this->_tpl_vars['paidDate']; ?>
" readonly="true" autocomplete="off">
							   
							   </div>
							   </div>
							  <div class="form-group">
								<label class="col-sm-2 control-label" style="text-align:left; ">Payment Mode:</label>
								<div class="col-md-4" id="errpayment_Mode"><select class="form-control" id="payment_Mode"  name="payment_Mode" value="<?php echo $this->_tpl_vars['payment_Mode']; ?>
" autocomplete="off">
								  			  <option value="Select" >Select</option>
											  <option id="Cash" name="Cash" value="Cash" >Cash</option>
											  <option id="Cheque" name="Cheque" value="Cheque" >Cheque</option>
											  <option id="debitcard" name="debitcard" value="debitcard" >Debit Card</option>
											  <option id="creditcard" name="creditcard" value="creditcard" >Credit Card</option>
											</select>
								</div>	
								 <label class="col-sm-2 control-label" style="text-align:left; ">Payment Ref:</label>
								<div class="col-md-4" id="errpayment_ref"><input type="text"  id="payment_ref"  name="payment_ref"class="form-control" value="<?php echo $this->_tpl_vars['payment_ref']; ?>
" autocomplete="off">
							   
							   </div>
							   </div>
							   
							   
							 <!--  siva  -->
							   <div class="form-group" id="check">
							   <label class="col-sm-2 control-label" style="text-align:left; ">Cheque Number:</label>
							   <div class="col-md-4" id="errcheque_number"><input type="text" id="cheque_number" name="cheque_number" class="form-control">
							   </div>
        					    <label class="col-sm-2 control-label" style="text-align:left;">Bank Name:</label>
								<div  class="col-md-4" id="errbank_name"><input type="text" id="bank_name" name="bank_name" class="form-control">
							
								</div>
	</div>
	<div class="form-group" id="debitcarddetail">
							   <label class="col-sm-2 control-label" style="text-align:left; ">Debit Card Details:</label>
							   <br > <br >
							   <label class="col-sm-2 control-label" style="text-align:left; ">Debit Card:</label>
							   <div class="col-md-4" id="errdebit_Card"><select class="form-control" id="debit_Card"  name="debit_Card" value="<?php echo $this->_tpl_vars['debit_Card']; ?>
" autocomplete="off">
								  			  <option value="Select" >Select</option>
											  <option id="visacard" name="visacard" value="visacard" >VISA Debit Card issued in India(All Banks)</option>
											  <option id="mastercard" name="mastercard" value="mastercard" >MasterCard Debit Card issued in India(All Banks)</option>
											  <option id="maestrocard" name="maestrocard" value="maestrocard" >Maestro Debit Card</option>
											  <option id="rupaycard" name="rupaycard" value="rupaycard" >Rupay Debit Card</option>
											</select>
								</div>				    
        					   <label class="col-sm-2 control-label" style="text-align:left;">Card Number:</label>
								<div class="col-md-4" id="errdcard_number"><input type="text" id="dcard_number" name="dcard_number" class="form-control">
								</div>
	
	 
	</div>
								<!-- credit card details  -->
								
	<div class="form-group" id="creditcarddetail">
							   <label class="col-sm-2 control-label" style="text-align:left; ">Credit Card Details:</label>
							   <br > <br >
							   <label class="col-sm-2 control-label" style="text-align:left; ">Credit Card:</label>
							   <div class="col-md-4" id="errdebit_Card"><select class="form-control" id="debit_Card"  name="debit_Card" value="<?php echo $this->_tpl_vars['debit_Card']; ?>
" autocomplete="off">
								  			  <option value="Select" >Select</option>
											  <option id="visacreditcard" name="visacreditcard" value="visacreditcard" >VISA Credit Card</option>
											  <option id="mastercreditcard" name="mastercreditcard" value="mastercreditcard" >MasterCard Credit Card</option>
											  <option id="maestrocard" name="maestrocard" value="americanexp" >American Express</option>
											  <option id="americanexpezeclick" name="americanexpezeclick" value="americanexpezeclick" >American Express ezeclick</option>
											  <option id="dinersclubcard" name="dinersclubcard" value="dinersclubcard" >Diners Clubcard</option>
											</select>
								</div>				    
        					   <label class="col-sm-2 control-label" style="text-align:left;">Card Number:</label>
								<div class="col-md-4" id="errccard_number"><input type="text" id="ccard_number" name="ccard_number" class="form-control">
								</div>
	
	 
	</div>
	
	<!--  siva  -->
	
							   <div class="form-group">
							  <label class="col-sm-2 control-label" style="text-align:left; ">Payment Status:</label>
								<div class="col-md-4" id="errpayment_Status"><select class="form-control" id="payment_Status" name="payment_Status" value="<?php echo $this->_tpl_vars['payment_Status']; ?>
" autocomplete="off">
								<option value="Select" >Select</option>
											  <option id="paid" name="paid" value="Paid" >Paid</option>
											  <option id="pending" name="pending" value="Pending" >pending</option>
											</select>
							   </div>
								<label class="col-sm-2 control-label" style="text-align:left; ">Status:</label>
								<div class="col-md-4" id="errstatus"><input type="text"  id="status"  name="status"class="form-control" value="<?php echo $this->_tpl_vars['status']; ?>
" autocomplete="off">
							
								</div>
							   							    
							   </div>	
							   
							   
					<!--</div>-->				   						   						   
                              <div class="form-group">
							
							 
							   
								<!--<label class="col-sm-2 control-label" style="text-align:left; ">Created By:</label>-->
								<div class="col-md-4"  id="errcreatedBy"><input type="hidden"  id="createdBy"  name="createdBy" class="form-control" value="<?php echo $this->_supers['session']['UserName']; ?>
" readonly="true" autocomplete="off">
								
								</div>
							   <!--	<label class="col-sm-2 control-label" style="text-align:left; ">Created Date:</label>-->
								<div class="col-md-4" id="errcreatedDate"><input type="hidden"  id="created_date"  name="created_date" value="<?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d') : smarty_modifier_date_format($_tmp, '%Y-%m-%d')); ?>
" class="form-control" readonly="true" autocomplete="off">
								
								</div>						    
							   </div>
							   	
                              <div class="form-group">
							  
							  <!--<label class="col-sm-2 control-label" style="text-align:left;">Created Time:</label>-->
                               <div class="col-md-4"  id="errcreatedTime"><input type="hidden" id="created_time"  name="created_time" value="<?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%I:%M:%S %p') : smarty_modifier_date_format($_tmp, '%I:%M:%S %p')); ?>
" class="form-control" readonly="true" autocomplete="off">
							  
							   </div>
							   
												    
							   </div>	
							   
				  	<br />
							   <div align="center">
                                         
                                        <button class="btn btn-primary" type="button" id="addPhone">ADD PHONE</button>
										<button class="btn btn-white" type="submit" id="back" >CANCEL</button>
                                      </div>
                                    </form></body>
                        </div>
						</div>
                    </div>
                </div>
            </div>
        </div>
	<?php echo '
		
		<script type="text/javascript" src="./codebase/dhtmlxcalendar.js"></script>
		<script type="text/javascript" src="./codebase/dhtmlxcommon.js"></script>
		<script src="jquery/jquery.ui.datepicker.js"></script>
		<!--<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>-->
		
		<script type="text/javascript">
		// payment mode  
        $(function () {
            $("#payment_Mode").change(function () {
                if ($(this).val() == "Cheque") {
                    $("#check").show();
					$("#bank_name").show();
                } else {
                    $("#check").hide();
                }
				
				if ($(this).val() == "debitcard") {
                    $("#debitcarddetail").show();
					$("#bank_name").show();
                } else {
                    $("#debitcarddetail").hide();
                }
				if ($(this).val() == "creditcard") {
                    $("#creditcarddetail").show();
					$("#bank_name").show();
					
                } else {
                    $("#creditcarddetail").hide();
                }
				
            });
        });
		//payment mode closed
		
			
    </script>
	<script>
	function Due(txt)
		{
		
		 var splitd_data=txt.split("-");
		 year=parseInt(splitd_data[0]);
		 month=parseInt(splitd_data[1])+1;
		 day=parseInt(splitd_data[2])-1;
		  if(day == 0)
		 	{		
			var read = splitd_data[1];
					if(read == 01 || read == 12 || read == 02 || read == 04 || read == 06 || read == 08 || read == 10)
					{
						day = 31;
						var today=year+"-"+month+"-"+day;
						document.getElementById(\'due_Date\').value=today;
												
					}
					else if(read == 05 || read == 07|| read == 09 || read == 11)
					{
						day = 30;
						var today=year+"-"+month+"-"+day;
						document.getElementById(\'due_Date\').value=today;
						
					}
					else if(read == 03)
					{
						day = 28;
						var today=year+"-"+month+"-"+day;
						document.getElementById(\'due_Date\').value=today;
						
					}
					
			}
		
        else if (month > 12)
           { 
            month = 1;
            year = year + 1;
			var today = year + "-" + month + "-" + day;
			}
			else 
			{
					var today = year + "-" + month + "-" + day;
			}
		document.getElementById(\'due_Date\').value = today;
		}
		</script>
	<script>
function amount_calc()
{
var plan=document.getElementById(\'plan_Amount\').value;
var tax=document.getElementById(\'tax_Amount\').value;
var tot = +plan + +tax;
var tot1 = +plan + +tax;
document.getElementById(\'totalpaid_amount\').value=tot;
document.getElementById(\'bill_amount\').value=tot1;
}
	</script>

<script>
	// dhtml Calendar
	 function getval()
        {
		
		var bill_Date,due_Date,paid_Date;
		date=document.getElementById("bill_Date").value;
		due_date=document.getElementById("due_Date").value;
		paid_date=document.getElementById("paidDate").value;
		if(bill_Date=="" || due_Date=="" || paidDate=="")
		{
		alert("Please Specify Date");
		return false;
		}
		
        }	
	var myCalendar;
	function doOnLoad() {
	
    var validity;
	var value =document.getElementById("payment_Mode");
	validity=new Date();
    myCalendar = new dhtmlXCalendarObject(["bill_Date"]);
	myCalendar = new dhtmlXCalendarObject(["due_Date"]);
	myCalendar = new dhtmlXCalendarObject(["paidDate"]);
	
 if(value=="Cheque")
					{
						document.getElementById("check").style.display="inherit";
						
					}
					else
					{
						document.getElementById("check").style.display="none";
						
					}
					
 if(value=="debitcard")
					{
						document.getElementById("debitcarddetail").style.display="inherit";
						
					}
					else
					{
						document.getElementById("debitcarddetail").style.display="none";
						
					}
 if(value=="creditcard")
					{
						document.getElementById("creditcarddetail").style.display="inherit";
						
					}
					else
					{
						document.getElementById("creditcarddetail").style.display="none";
						
					}
					
}	
</script>
<script>

//calendar in picker format
/*
			$(function(bill_Date) {
				//alert("test");
				$( "#bill_Date" ).datepicker({
					altField: "#validity",
					altFormat: "yyyy-mm-dd"
				});
			});
			$(function(due_Date) {
				//alert("test");
				$( "#due_Date" ).datepicker({
					altField: "#validity",
					altFormat: "yyyy-mm-dd"
				});
			});
			$(function(paid_Date) {
				//alert("test");
				$( "#paid_Date" ).datepicker({
					altField: "#validity",
					altFormat: "yyyy-mm-dd"
				});
			});
			*/
			//picker end

        $(document).ready(function() {	
		/* Vishal
		$("#simType").onchange(fuction(){
		            if(value=="Postpaid")
					{
						document.getElementById("Postpaid").style.display="inherit";
						document.getElementById("Prepaid").style.display="none";
					}
					elseif(value=="Prepaid")
					{
						document.getElementById("Prepaid").style.display="none";
						document.getElementById("Postpaid").style.display="inherit";
					}
				});
			*/
        $("#addPhone").click(function(){
				var fields=["simId","bill_Date","due_Date","plan_Amount","totalpaid_amount","paidDate","payment_Mode","payment_Status","payment_ref"];
				for(i=0;i<fields.length;i++)
				{
		
				current_iteration = document.getElementById(fields[i]).value;
			//alert(fields[i]);
				document.getElementById(fields[i]).style.borderColor="";
						if(current_iteration=="")
						{			
						document.getElementById(fields[i]).focus();
						document.getElementById(fields[i]).style.borderColor="red";									
									return false;
						}	

				}	
              FormName= document.phonePostpaidReg;
  			  FormName.method= "POST";
              FormName.submit(); 
			                 });
										  
/*$("#mobileNo").keyUp(function(){
numericFilter();
}*/       $("#back").click(function(){

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
/*  Vishal  
 <.....here i am comment because of check how to hide a few text boxes while select a value 
function  validateSimType($type)
	{
		if($type="postpaid")
		{	
			document.getElementById("Postpaid").style="display:inherit";
			document.getElementById("Prepaid").style="display:none";
		}
		elseif($type="Prepaid")	
		{
			document.getElementById("Prepaid").style="display:inherit";
			document.getElementById("Postpaid").style="display:none";
		}
		
	}	
	$(document).ready(function() {
$(\'#simType\').change(function(){
if($(\'#simType\').val() == \'Prepaid\')
   {
   $(\'#hide\').css(\'display\', \'none\');
      }*/
	  $(document).ready(function(){
    $(\'#simType\').on(\'change\', function() {
      if ( this.value == \'Postpaid\')
      {
        $("#errbill_Date1").show();
	    $("#errdue_Date1").show();
        $("#errbill_Amount1").show();

      }
      else
      {
        $("#errbill_Date1").hide();
		$("#errdue_Date1").hide();
        $("#errbill_Amount1").hide();

      }
    });
});
       </script>
	    
			<link rel="stylesheet" type="text/css" href="css/datepickier_main.css">
	 	    <link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
	  		<link rel="stylesheet" href="./codebase/dhtmlxcalendar.css" type="text/css">
			<link rel="stylesheet" href="./codebase/dhtmlxcalendar_dhx_skyblue.css" type="text/css"> 
			<link rel="stylesheet" href="./codebase/skins/dhtmlxmessage_dhx_skyblue.css" type="text/css">
			<link rel="stylesheet" type="text/css" href="css/datepicker.css">
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