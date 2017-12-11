<?php /* Smarty version 2.6.25, created on 2015-12-30 16:32:54
         compiled from pdtMappingReg.tpl */ ?>
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
                          <h5  style="padding-left:40%;">Mapping Registration Form</h5>
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
                        <div class="ibox-content"><body onload="doOnLoad();">
                            <form method="post" class="form-horizontal" name="pdtMappingReg" id="pdtMappingReg">
                            <input type="hidden"  id="hdAction"  name="hdAction" />
							<input type="hidden"  id="sl_no"  name="sl_no" class="form-control" value="" autocomplete="Off">
							<div class="form-group">
							  
							
							   <label class="col-sm-2 control-label" style="text-align:left; ">Turbine ID:<span style="color:#FF0000"></span></label>
							   <div class="col-md-4" id="err_turbine_id"><input type="text"  id="turbine_id"  name="turbine_id" class="form-control" value="<?php echo $this->_supers['post']['turbine_id']; ?>
" autocomplete="Off"></div>
							   
							   
							    <label class="col-sm-2 control-label" style="text-align:left;">Location:<span style="color:#FF0000"></span></label>
                               <div class="col-md-4"  id="err_location"> <input type="text"  id="location"  name="location" class="form-control" value="<?php echo $this->_supers['post']['location']; ?>
" autocomplete="Off"></div>
							   
							   </div>	
							   <div class="form-group">
							  
							
							   <label class="col-sm-2 control-label" style="text-align:left;">HTSC:<span style="color:#FF0000"></span></label>
                               <div class="col-md-4"  id="err_htsc"> <input type="text"  id="htsc"  name="htsc"class="form-control" value="<?php echo $this->_supers['post']['htsc']; ?>
" autocomplete="Off"></div>
							  
						    <label class="col-sm-2 control-label" style="text-align:left; ">Site Name:<span style="color:#FF0000"></label>
					            <div class="col-md-4" id="err_production_batch"><select id="site_name"  name="site_name" class="form-control" value="<?php echo $this->_tpl_vars['Listsite']['site_name']; ?>
" autocomplete="Off">
						        <option value="select" selected="selected">-select- </option>
								<?php $_from = $this->_tpl_vars['SiteList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['Listsite']):
?>	
							    <option value="<?php echo $this->_tpl_vars['Listsite']['site_name']; ?>
"><?php echo $this->_tpl_vars['Listsite']['site_name']; ?>
 </option>
							    <?php endforeach; endif; unset($_from); ?>
								</select>	</div>
					     </div>	
							   
							   
							   
							   	
                              <div class="form-group">
							    <label class="col-sm-2 control-label" style="text-align:left;"> Scada ID:<span style="color:#FF0000"></span></label>
                               <div class="col-md-4" id="err_production_date"><input type="text" id="scadaId"  name="scadaId" class="form-control" value="<?php echo $this->_supers['post']['scadaId']; ?>
" autocomplete="Off">
							   
							   </div>
							
										<label class="col-sm-2 control-label" style="text-align:left;"> Product ID:<span style="color:#FF0000"></span></label>
										<div class="col-md-4" id="err_tested_date"><input type="text"  required  id="productId"  name="productId" class="form-control" value="<?php echo $this->_supers['post']['productId']; ?>
" autocomplete="Off">
									
										</div>
							   </div>	
                            <div class="form-group">
							 
							  <label class="col-sm-2 control-label" style="text-align:left;">Install Date:<span style="color:#FF0000"></span></label>
                               <div class="col-md-4" id="err_created_date"><input type="text" id="installDate"  name="installDate" value="<?php echo $this->_supers['post']['installDate']; ?>
" readonly="true" class="form-control" autocomplete="Off">
							   
							   </div>
							  
								<label class="col-sm-2 control-label" style="text-align:left; ">Install By:<span style="color:#FF0000"></span>
								</label>
								<div class="col-md-4" id="err_created_time"><!--<input type="text"  id="installBy"  name="installBy" value="<?php echo $this->_supers['post']['installBy']; ?>
" class="form-control" autocomplete="Off">-->
								<select id="installBy"  name="installBy" class="form-control" value="<?php echo $this->_supers['post']['installBy']; ?>
" autocomplete="Off">
						        <option value="select" selected="selected">-select- </option>
							    <option value="Arka Group">Arka Group </option>
							     <option value="Customer Group">Customer Group </option>
								</select>
								</div>
							   							    
							   </div>	
                             				   						   						   
                             
							      
							  	<br />
							   <div align="center">
                                         
                                        <button class="btn btn-primary" type="button" id="pdtmapping">ADD Product</button>
										<button class="btn btn-white" type="submit" id="back">CANCEL</button>
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
<script>
//calendar in picker format
function getval()
        {
		var installDate;
		installDate=document.getElementById("installDate").value;
		if(installDate=="" )
		{
			alert("Please Specify Date");
			return false;
		}
		
        }	
	var myCalendar;
function doOnLoad() {
    
    var installDate;
	installDate=new Date();
    myCalendar = new dhtmlXCalendarObject(["installDate"]);
   
}	
			/*$(function(installDate) {
				//alert("test");
				$( "#installDate" ).datepicker({
					altField: "#validity",
					altFormat: "yy-mm-dd"
				});
			});*/
			
			//picker end


        $(document).ready(function() {	
$("#pdtmapping").click(function(){
				var fields=["turbine_id","location","htsc","site_name","scadaId","productId","installDate","installBy"];
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
              FormName= document.pdtMappingReg;
  			  FormName.method= "POST";
              FormName.submit(); 
			                 });
										  
/*$("#mobileNo").keyUp(function(){
numericFilter();
}*/        $("#back").click(function(){

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