<?php /* Smarty version 2.6.25, created on 2016-12-25 17:37:35
         compiled from phoneReg.tpl */ ?>

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
                            <form method="post" class="form-horizontal" name="phoneReg">
                             <input type="hidden"  id="hdAction"  name="hdAction" />
							 <input type="hidden"  id="created_date"  name="created_date" />
							 <input type="hidden"  id="created_time"  name="created_time" />
							 <input type="hidden"  id="created_by"  name="created_by" />
							   
							   	 <div class="form-group">
							   <label class="col-sm-2 control-label" style="text-align:left;">Sim ID:</label>
                               <div class="col-md-4"  id="errsimId"><input type="text"  id="simId"  name="simId" class="form-control" readonly="true" value="<?php echo $this->_tpl_vars['sim_id']; ?>
" autocomplete="off" tabindex="1"></div>
							   
							   <label class="col-sm-2 control-label" style="text-align:left; ">Sim No:</label>
							   <div class="col-md-4" id="errsimNo"><input type="text"  id="simNo"  name="simNo" class="form-control" maxlength="19" value="<?php echo $this->_tpl_vars['simNo']; ?>
" autocomplete="off" tabindex="2"></div>
							   
							   </div>
							   	
                              <div class="form-group">
							    <label class="col-sm-2 control-label" style="text-align:left;">Mobile No:</label>
                               <div class="col-md-4" id="errmobileNo"><input type="text" id="mobileNo"  name="mobileNo" class="form-control" onKeyUp="numericFilter(this)" onBlur="chk_exist_mob(this);"  maxlength="10" value="<?php echo $this->_tpl_vars['mobileNo']; ?>
" autocomplete="off" tabindex="3"> 
							   
							   </div>
							
										<label class="col-sm-2 control-label" style="text-align:left;">Service No:</label>
										<div class="col-md-4" id="errserviceNo"><input type="text"  required  id="serviceNo"  name="serviceNo"class="form-control" value="<?php echo $this->_tpl_vars['serviceNo']; ?>
" autocomplete="off" tabindex="4">
									
										</div>
							   </div>
							   	
                            <div class="form-group">
							 
							  <label class="col-sm-2 control-label" style="text-align:left;">Network:</label>
                               <div class="col-md-4" id="errnetwork">
							   <select class="form-control" name="network" id="network" value="<?php echo $this->_tpl_vars['network']; ?>
" autocomplete="off" tabindex="5">
  											  <option value="Select" >Select</option>
											  <option value="AirTel" >AirTel</option>
											  <option value="AirCel">AirCel</option>
											  <option value="Vodofone">Vodofone</option>
											  <option value="Relaince">Relaince</option>
											  <option value="Bsnl" >Bsnl</option>
											  <option value="TataDocomo">TataDocomo</option>
											  <option value="Idea">Idea</option>
											  
											</select>
							   
							   </div>
							  
								<label class="col-sm-2 control-label" style="text-align:left; ">Validity:</label>
							<div class="col-md-4" id="errvalidity"><input type="text" id="validity"  name="validity"class="form-control" readonly="true" value="<?php echo $this->_tpl_vars['validity']; ?>
"  placeholder='Click Here To Select Validity Date !' autocomplete="off" tabindex="6">
								
								</div>
							   							    
							   </div>	
							   
							   
                              <div class="form-group">
						
							  <label class="col-sm-2 control-label" style="text-align:left;">Sim Type:</label>
                               <div class="col-md-4" id="errsimType"><select class="form-control" id="simType" name="simType"  value="<?php echo $this->_tpl_vars['simType']; ?>
" autocomplete="off" tabindex="7">
  											  <option value="Select" >Select</option>
											  <option id="Prepaid" name="Prepaid" value="Prepaid" >Prepaid</option>
											  <option id="Postpaid" name="Postpaid" value="Postpaid" >Postpaid</option>
											</select>
							   
							   </div>
							 
								<label class="col-sm-2 control-label" style="text-align:left; ">Circle:</label>
								<div class="col-md-4" id="errcircle"><input type="text"  id="circle"  name="circle"class="form-control" value="<?php echo $this->_tpl_vars['circle']; ?>
" autocomplete="off" tabindex="8">
							
								</div>
							   							    
							   </div>
							   <div class="form-group">
						
							  <label class="col-sm-2 control-label" style="text-align:left;">Purpose:</label>
                               <div class="col-md-4" id="errsimType"><select class="form-control" id="purpose" name="purpose" onChange="change(this)" value="<?php echo $this->_tpl_vars['purpose']; ?>
" autocomplete="off" tabindex="9">
  											  <option value="Select" >Select</option>
											  <option id="Prepaid" name="Employee" value="Employee" >Employee</option>
											  <option id="Postpaid" name="Device" value="Device" >Device</option>
											</select>
							   
							   </div>
							 
								<label class="col-sm-2 control-label" style="text-align:left; ">Id Proof Name:</label>
								<div class="col-md-4" id="errcircle"><input type="text"  id="id_proof_name"  name="id_proof_name"class="form-control" value="<?php echo $this->_tpl_vars['id_proof_name']; ?>
" autocomplete="off" tabindex="10">
							
								</div>
							   							    
							   </div>	
							   <div class="form-group">
						
							 <label class="col-sm-2 control-label" style="text-align:left;">Purchase Date:</label>
                               <div class="col-md-4"  id="errpurchaseDate"><input type="text" id="purchaseDate"  name="purchaseDate" class="form-control" value="<?php echo $this->_tpl_vars['purchaseDate']; ?>
" readonly="true" placeholder='Click Here To Select Purchase Date !'  autocomplete="off" tabindex="11">
							   
							   </div>
								<label class="col-sm-2 control-label" style="text-align:left; ">Plan Name:</label>
								<div class="col-md-4" id="errcircle"><input type="text"  id="plan_name"  name="plan_name"class="form-control" value="<?php echo $this->_tpl_vars['plan_name']; ?>
" autocomplete="off" tabindex="12">
							
								</div>
							   							    
							   </div>		
				
							   <div align="center">
                                         
                                        <button class="btn btn-primary" type="button" id="addPhone">ADD PHONE</button>
										<button class="btn btn-white" type="submit" id="back" >CANCEL</button>
                                      </div>
                                    </form>
                        </div>
						</div>
                    </div>
                </div>
            </div>
        </div>
		
	<?php echo '
	
	
	 
	 

<script type="text/javascript" src="dhtmlxMessage/codebase/dhtmlxcalendar.js" ></script>
<script type="text/javascript" src="./codebase/dhtmlxcalendar.js"></script>
<script type="text/javascript" src="./codebase/dhtmlxcommon.js"></script>
		<script src="jquery/jquery.ui.datepicker.js"></script>


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
	
		// dhtml Calendar
	 function getval()
        {
		
		var validity,purchaseDate;
		date=document.getElementById("validity").value;
		to_date=document.getElementById("purchaseDate").value;
		if(validity=="" || purchaseDate=="")
		{
		alert("Please Specify Date");
		return false;
		}
		
        }	
	var myCalendar;
	function doOnLoad() {
	
    var validity;
	validity=new Date();
    myCalendar = new dhtmlXCalendarObject(["validity"]);
	 myCalendar = new dhtmlXCalendarObject(["purchaseDate"]);

   
}	
//calendar closed
// calendar in datepicker
			/*$(function(validity) {
			//alert("test");
				$( "#validity" ).datepicker({
					altField: "#validity",
					altFormat: "yy-mm-dd"
				});
			});
			$(function(purchaseDate) {
				//alert("test");
				$( "#purchaseDate" ).datepicker({
					altField: "#validity",
					altFormat: "yy-mm-dd"
				});
			});*/
// picker closed
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
				var fields=["simId","simNo","mobileNo","serviceNo","network","validity","simType","circle","purchaseDate"];
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
              FormName= document.phoneReg;
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

<script type="text/javascript" src=\'./dhtmlxMessage/codebase/dhtmlxmessage.js\'></script>
<script type=\'text/javascript\' src=\'./auto-complete/jquery.metadata.js\'></script>
<script type=\'text/javascript\' src=\'./auto-complete/jquery.auto-complete.js?<?= mktime() ?>\'></script>
<script type=\'text/javascript\' src=\'./auto-complete/js.js?<?= mktime() ?>\'></script>
<link rel="stylesheet" href= "./codebase/skins/dhtmlxmessage_dhx_skyblue.css" type="text/css" media="all"/> 
<link rel=\'stylesheet\' type=\'text/css\' href=\'auto-complete/jquery.auto-complete.css?<?= mktime() ?>\' />


'; ?>