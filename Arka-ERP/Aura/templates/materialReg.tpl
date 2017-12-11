
        </div>
           
        <div class="wrapper wrapper-content animated fadeInRight">
           <div class="row">
          {if $SuccessMessage neq ""}
			<div class="isa_success">
			<i class="fa fa-check"></i>
			{$SuccessMessage}		 
			</div>
		 {/if}
		  {if $ErrorMessage neq ""}
			<div class="isa_error">
			<i class="fa fa-check"></i>
			{$ErrorMessage}		 
			</div>
		 {/if}
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
                          <h5  style="padding-left:40%;">Material Registration Form</h5>
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
						
                        <div class="ibox-content"><body onLoad="doOnLoad();">
                        <form method="post" class="form-horizontal" name="materialReg" enctype="multipart/form-data">
						<input type="hidden" id="hdAction" name="hdAction" />
							<div class="" style="height:40px;">
                        	<h5  style="padding-left:40%; font-size:14px;">Material Information:</h5>
							</div>
							<div class="form-group">
							<label class="col-sm-2 control-label" style="text-align:left;">Material Type:</label>
							<div class="col-md-4" id="errmaterialType">
                        	<select class="form-control" name="materialType" id="materialType" value="{$smarty.post.materialType}" autocomplete="off">
  							<option value="0" >----- Select Type -----</option>
							<option value="Electrical" >Electrical</option>
							<option value="Electronics">Electronics</option>
							<option value="Mechanical">Mechanical</option>
							</select>
							</div>
							<label class="col-sm-2 control-label" style="text-align:left; ">Price:</label>
							<div class="col-md-4" id="errPrice"> <input type="text"  id="price"  name="price" class="form-control" maxlength="19" value="{$smarty.post.price}" autocomplete="off" onKeyUp="numericFilter(this);"></div>
							   </div>
							    <div class="form-group"> 
							   <label class="col-sm-2 control-label" style="text-align:left;">Material Category:</label>
							   <div class="col-md-4" id="errmaterialCategory">
                               <select class="form-control" name="materialCategory" id="materialCategory" value="{$smarty.post.materialCategory}" autocomplete="off">
  											  <option value="0" >----- Select Category -----</option>
											  <option value="Tools" >Tools</option>
											  <option value="Spares">Spares</option>
											  <option value="Insurance">Insurance</option>
											</select>
							   </div>
							   <label class="col-sm-2 control-label" style="text-align:left; ">Date:</label>
							   <div class="col-md-4" id="errdate"> <input type="text"  id="date"  name="date" class="form-control" maxlength="19" value="{$smarty.post.date}" readonly="true" autocomplete="off"></div>
							   </div>
							   <div class="form-group">
							   <label class="col-sm-2 control-label" style="text-align:left;">Material Code:</label>
                               <div class="col-md-4"  id="errmaterialCode"> <input type="text" id="materialCode" name="materialCode" class="form-control" value="{$smarty.post.materialCode}" autocomplete="off">						</div>
							   
							   <label class="col-sm-2 control-label" style="text-align:left; ">Material Name:</label>
							   <div class="col-md-4" id="errmaterialName"> <input type="text"  id="materialName"  name="materialName" class="form-control" maxlength="19" value="{$smarty.post.materialName}" autocomplete="off"></div>
							   </div>
							   <div class="form-group">
							   <label class="col-sm-2 control-label" style="text-align:left; ">Material Description:</label>
							   <div class="col-md-4" id="errmaterialDescription"> <textarea  id="materialDescription"  name="materialDescription" class="form-control" rows="3" cols="10" autocomplete="off">{$smarty.post.materialDescription}</textarea></div>
  							   <label class="col-sm-2 control-label" style="text-align:left;">Material Image:</label>
							   <div class="col-md-4" id="errmaterialImage"> <input type="file"  id="materialImage"  name="materialImage" class="form-control" maxlength="19" value="{$smarty.post.materialImage}" autocomplete="off"></div>
							   </div>
							    
							   
							    				 
								 <div align="center">
                                         
                                        <button class="btn btn-primary" type="button" id="addMaterial">ADD</button>
										<button class="btn btn-primary" type="button" id="resetMaterial">RESET</button>
										<button class="btn btn-white" type="submit" id="back" >CANCEL</button>
                                      </div>
									  </form>
							   
							   
					
                        </div>
						</body>
                    </div>
                </div>
            </div>
        </div>
		</div>
{literal}
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
		var date;
		date=document.getElementById("date").value;
		if(date=="" )
		{
			alert("Please Specify Date");
			return false;
		}
		
        }	
	var myCalendar;
function doOnLoad() {
    
    var date;
	date=new Date();
    myCalendar = new dhtmlXCalendarObject(["date"]);
   
}	
        $(document).ready(function() {	
			
$("#addMaterial").click(function(){
				var fields=["materialType","price","materialCategory","date","materialCode","materialName","materialDescription"];
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
              FormName= document.materialReg;
  			  FormName.method= "POST";
              FormName.submit(); 
			                 });

$("#back").click(function(){

window.history.back();

});

		
		 });
		 
		 // calendar in datepicker
			$(function(date) {
				//alert("test");
				$( "#date" ).datepicker({
					altField: "#validity",
					altFormat: "yy-mm-dd"
				});
			});
			
// picker closed
		 
		
 function ValidateEmail(inputText)  
{  
var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;  
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
	
	    $('.datepicker').datepicker({
                todayBtn: "linked",
				format:'yyyy-mm-dd',
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
{/literal}