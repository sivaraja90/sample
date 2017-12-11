<?php /* Smarty version 2.6.25, created on 2016-12-25 18:01:53
         compiled from phone_prepaidReg.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'phone_prepaidReg.tpl', 112, false),)), $this); ?>

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
                          <h5  style="padding-left:40%;">Phone Registration Form</h5>
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
						
						
                        <div class="ibox-content"><body onLoad="doOnLoad();">
                            <form method="post" class="form-horizontal" name="phonePrepaidReg">
                             <input type="hidden"  id="hdAction"  name="hdAction" />
							 
							   	 <input type="hidden"  id="simId"  name="simId" class="form-control" readonly="true" value="<?php echo $this->_supers['get']['sim_id']; ?>
" autocomplete="off">
							   
							   
							 
							   	
                            <div class="form-group">
							  
							  <label class="col-sm-2 control-label" style="text-align:left;">Recharge Type:</label>
                               <div class="col-md-4" id="errnetwork"><select class="form-control" name="recharge_type" id="recharge_type" value="<?php echo $this->_tpl_vars['recharge_type']; ?>
" autocomplete="off">
							   				  <option value="-Select-" >-Select-</option>
  											  <option value="Talk_Time" >Talk_Time</option>
											  <option value="SMS" >SMS</option>
											  <option value="2G">2G</option>
											  <option value="3G">3G</option>
											</select>
							   
							   </div>
							   <label class="col-sm-2 control-label" style="text-align:left; ">Recharge Amount:</label>
								<div class="col-md-4" id="errbill_Date"><input type="text"  id="recharge_amount"  name="recharge_amount" class="form-control" value="<?php echo $this->_tpl_vars['recharge_amount']; ?>
" autocomplete="off"> 
							   
							   </div>
								
							   							    
							   </div>	
							   
							   
                             
							   <div class="form-group" >
							   <label class="col-sm-2 control-label" style="text-align:left; ">No_Of_Validity_Day's:</label>
							<div class="col-md-4" id="errvalidity"><input type="text"  id="no_of_validity_days"  name="no_of_validity_days"class="form-control" value="<?php echo $this->_tpl_vars['no_of_validity_days']; ?>
" autocomplete="off">
								
								</div>
							
							  <label class="col-sm-2 control-label" style="text-align:left; ">Recharge Date:</label>
								<div class="col-md-4" id="errbill_Amount"><input type="text"  id="recharge_date"  name="recharge_date" class="form-control" value="<?php echo $this->_tpl_vars['recharge_date']; ?>
" readonly="true" autocomplete="off" onBlur="validDate();">
							
							   
							   </div>
							 
								
							   							    
							   </div>	
							   <div class="form-group" >
							<label class="col-sm-2 control-label" style="text-align:left; ">Valid_upto:</label>
							<div class="col-md-4" id="errdue_Date"><input type="text"  id="valid_upto"  name="valid_upto"class="form-control" value="<?php echo $this->_tpl_vars['valid_upto']; ?>
" autocomplete="off" readonly="true">
							
								</div>
							 
					<label class="col-sm-2 control-label" style="text-align:left; ">Created By:</label>
								<div class="col-md-4"  id="errcreatedBy"><input type="text"  id="created_by"  name="created_by" class="form-control" value="<?php echo $this->_supers['session']['UserName']; ?>
" readonly="true" autocomplete="off">
								
								</div>
							   							    
							   </div>
							   	
                              <div class="form-group">
							  
							  <label class="col-sm-2 control-label" style="text-align:left;">Created Time:</label>
                               <div class="col-md-4"  id="errcreatedTime"><input type="text" id="created_time"  name="created_time" value="<?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%I:%M:%S %p') : smarty_modifier_date_format($_tmp, '%I:%M:%S %p')); ?>
" class="form-control" readonly="true" autocomplete="off">
							  
							   </div>
							   
								<label class="col-sm-2 control-label" style="text-align:left; ">Created Date:</label>
								<div class="col-md-4" id="errcreatedDate"><input type="text"  id="created_date"  name="created_date" value="<?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d') : smarty_modifier_date_format($_tmp, '%Y-%m-%d')); ?>
" class="form-control" readonly="true" autocomplete="off">
								
								</div>
							   							    
							   </div>	
							   
				  	<br />
							   <div align="center">
                                         
                                        <button class="btn btn-primary" type="button" id="addPhone">ADD PHONE</button>
										<button class="btn btn-white" type="submit" id="back" >CANCEL</button>
                                      </div>
                                    </form>
                        </body>
						</div>
						</div>
                    </div>
                </div>
            </div>
        </div>
	<?php echo '

<link rel="stylesheet" type="text/css" href="css/datepickier_main.css">
	 	    <link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
	  		<link rel="stylesheet" href="./codebase/dhtmlxcalendar.css" type="text/css">
			<link rel="stylesheet" href="./codebase/dhtmlxcalendar_dhx_skyblue.css" type="text/css"> 
			<link rel="stylesheet" href="./codebase/skins/dhtmlxmessage_dhx_skyblue.css" type="text/css">
			<link rel="stylesheet" type="text/css" href="css/datepicker.css">
		<script type="text/javascript" src="dhtmlxMessage/codebase/dhtmlxcalendar.js" ></script>
<script type="text/javascript" src="./codebase/dhtmlxcalendar.js"></script>
<script type="text/javascript" src="./codebase/dhtmlxcommon.js"></script>
		<script src="jquery/jquery.ui.datepicker.js"></script>
<script>
 function getval()
        {
		var recharge_date,valid_upto;
		recharge_date=document.getElementById("recharge_date").value;
		valid_upto=document.getElementById("valid_upto").value;
		if(recharge_date=="" || valid_upto=="")
		{
			alert("Please Specify Date");
			return false;
		}
		
        }	
	var myCalendar;
function doOnLoad() {
    
    var recharge_date;
	recharge_date=new Date();
    myCalendar = new dhtmlXCalendarObject(["recharge_date"]);
	myCalendar = new dhtmlXCalendarObject(["valid_upto"]);
   
}	
			/*$(function(recharge_date) {
				//alert("test");
				$( "#recharge_date" ).datepicker({
					altField: "#validity",
					altFormat: "yy-mm-dd"
				});
			});
			$(function(valid_upto) {
				//alert("test");
				$( "#valid_upto" ).datepicker({
					altField: "#validity",
					altFormat: "yy-mm-dd"
				});
			});*/
			
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
				var fields=["simId","recharge_type","recharge_amount","no_of_validity_days","valid_upto","recharge_date"];
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
              FormName= document.phonePrepaidReg;
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

function validDate1() {
    var result = new Date(document.getElementById("recharge_date").value);
	var numberOfDaysToAdd = document.getElementById("no_of_validity_days").value;
	var rte=result.getDate();
	var rte1=result.getMonth() + 1;
	var rte2=result.getFullYear();
   var ree=+rte + +numberOfDaysToAdd ;
	//alert(result);
	var someFormattedDate = rte2 + \'-\'+ rte1 + \'-\'+ ree;
document.getElementById("valid_upto").value=someFormattedDate;
  //  return result;
}

function validDate()
{
var d = new Date(document.getElementById("recharge_date").value);
var numberOfDaysToAdd = document.getElementById("no_of_validity_days").value;
d.setDate(d.getDate() + +numberOfDaysToAdd);
var dd = d.getDate();
var mm = d.getMonth() + 1;
var y = d.getFullYear();
var someFormattedDate = y + \'-\'+ mm + \'-\'+ dd;
document.getElementById("valid_upto").value = someFormattedDate;
}
		 
function numericFilter(data) 
{
   data.value = data.value.replace(/[^.0-9]/ig,"");
}	
function textFilter(data)
{
   data.value = data.value.replace(/[^ .a-z]/ig,"");
}		 
	
	    /*$(\'.datepicker\').datepicker({
                todayBtn: "linked",
				format:\'yyyy-mm-dd\',
                keyboardNavigation: false,
                forceParse: false,
                calendarWeeks: true,
                autoclose: true
            });	*/
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