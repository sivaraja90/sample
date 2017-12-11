<?php /* Smarty version 2.6.25, created on 2017-01-27 13:39:41
         compiled from phoneEdit.tpl */ ?>

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
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                          <h5 style="padding-left:40%;">Edit Phone Details</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                               
                            </div>
                        </div>
                        <div class="ibox-content"><body onLoad="doOnLoad();">
                      <form method="post"  name="phoneUpdate" id="phoneUpdate"class="form-horizontal">
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
							     <div class="col-md-3"><input type="text" id="mobileNo"  name="mobileNo" class="form-control" onKeyUp="numericFilter(this)" onBlur="chk_exist_mob(this);"  maxlength="10" value="<?php echo $this->_tpl_vars['ListDet']['mobile_no']; ?>
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
" readonly="true" autocomplete="Off">
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
  											  <?php if ($this->_tpl_vars['ListDet']['purpose'] == 'Employee'): ?>
											   <option value="<?php echo $this->_tpl_vars['ListDet']['purpose']; ?>
" selected="selected"><?php echo $this->_tpl_vars['ListDet']['purpose']; ?>
</option>
											  <option id="Device" name="Device" value="Device" >Device</option>
											  <?php elseif ($this->_tpl_vars['ListDet']['purpose'] == 'Device'): ?>
								               <option value="<?php echo $this->_tpl_vars['ListDet']['purpose']; ?>
" selected="selected"><?php echo $this->_tpl_vars['ListDet']['purpose']; ?>
</option>
											  <option id="Employee" name="Employee" value="Employee" >Employee</option>
											  	<?php endif; ?>
											</select>
							   </div>
							   </div>
							   <div id="errid_proof_name"> 
								<label class="col-sm-2 control-label" style="text-align:left; margin-left:15%">Id Proof Name:</label>
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
							   			</div></hr>	<?php endforeach; endif; unset($_from); ?>		
							  	<br />
							   <div align="center">
                                         
                                       <button class="btn btn-primary" type="submit" id="updatePhone" onClick="phoneUpdate();">UPDATE PHONE</button>
									<button class="btn btn-white" id="back" type="button">CANCEL</button>
                                      </div>
									
                                    </form>
                        </body>
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
		<link rel="stylesheet" type="text/css" href="css/datepickier_main.css">
	 	    <link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
	  		<link rel="stylesheet" href="./codebase/dhtmlxcalendar.css" type="text/css">
			<link rel="stylesheet" href="./codebase/dhtmlxcalendar_dhx_skyblue.css" type="text/css"> 
			<link rel="stylesheet" href="./codebase/skins/dhtmlxmessage_dhx_skyblue.css" type="text/css">
			<link rel="stylesheet" type="text/css" href="css/datepicker.css">
			
		<script type="text/javascript">
		
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
		
       	function getval()
        {
		var validity,date2;
		validity=document.getElementById("validity").value;
		purchaseDate=document.getElementById("purchaseDate").value;
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
        function phoneUpdate(){ 
			var fields=["simId","simNo","mobileNo","serviceNo","network","validity","simType","circle","purpose","id_proof_name","purchaseDate","plan_name","modifyBy","modifyDate","modifyTime"];
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
              FormName= document.phoneUpdate;
  			  FormName.method= "POST";
              FormName.submit(); 
			 }
 $(document).ready(function() {
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
	
	   /* $(\'.datepicker\').datepicker({
                todayBtn: "linked",
				format:\'yyyy-mm-dd\',
                keyboardNavigation: false,
                forceParse: false,
                calendarWeeks: true,
                autoclose: true
            });*/	 
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