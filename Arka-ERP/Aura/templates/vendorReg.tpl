
        </div>
          
        <div class="wrapper wrapper-content animated fadeInRight">
           <div class="row">
          {if $SuccessMessage1 neq ""}
			<div class="isa_success">
			<i class="fa fa-check"></i>
			{$SuccessMessage1}		 
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
                          <h5  style="padding-left:40%;">Vendor Registration Form</h5>
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
						
                        <div class="ibox-content">
                        <form method="post" class="form-horizontal" name="vendorReg">
						<input type="hidden" name="hdAction" id="hdAction" />
							<div class="" style="height:40px;">
                        	<h5  style="padding-left:40%; font-size:14px;">Supplier Details:</h5>
							</div>
							
							<div class="form-group">
							<label class="col-sm-2 control-label" style="text-align:left;">Supplier Code:</label>
							<div class="col-md-4" id="errsupplierCode"> <input type="text"  id="supplierCode"  name="supplierCode" class="form-control" maxlength="19" value="{$smarty.post.supplierCode}" autocomplete="off"></div>
							  
							<!--<label class="col-sm-2 control-label" style="text-align:left;">Supplier Name:</label>
							<div class="col-md-4" id="errsupplierName"> <input type="text"  id="supplierName"  name="supplierName" class="form-control" maxlength="19" value="{$smarty.post.supplierName}" autocomplete="off"></div>-->
							
							<label class="col-sm-2 control-label" style="text-align:left; ">PAN No:</label>
							<div class="col-md-4" id="errpanNo"> <input type="text"  id="panNo"  name="panNo" class="form-control" maxlength="19" value="{$smarty.post.panNo}" autocomplete="off"></div></div>

                               <div class="form-group">
							     <label class="col-sm-2 control-label" style="text-align:left;">GST No:</label>
							   <div class="col-md-4" id="errgst_no"> <input type="text"  id="gst_no"  name="gst_no" class="form-control" maxlength="19" value="{$smarty.post.gst_no}" autocomplete="off"></div>
							  
							   <label class="col-sm-2 control-label" style="text-align:left; ">Contact Person:</label>
							   <div class="col-md-4" id="errcontactPerson"> <input type="text"  id="contactPerson"  name="contactPerson" class="form-control" maxlength="19" value="{$smarty.post.contactPerson}" autocomplete="off"></div>
							   </div>
							    <div class="form-group">
							   <label class="col-sm-2 control-label" style="text-align:left; ">Address:</label>
							   <div class="col-md-4" id="erraddress"> <input type="text"  id="address"  name="address" class="form-control" maxlength="19" value="{$smarty.post.address}" autocomplete="off"></div>
							   
								<label class="col-sm-2 control-label" style="text-align:left; ">Designation:</label>
							   <div class="col-md-4" id="errdesignation"> <input type="text"  id="designation"  name="designation" class="form-control" maxlength="19" value="{$smarty.post.designation}" autocomplete="off"></div>
							    </div>
							   	 <div class="form-group">
							<label class="col-sm-2 control-label" style="text-align:left; ">Address2:</label>	
							<div class="col-md-4" id="erraddress2"> <input type="text"  id="address2"  name="address2" class="form-control" maxlength="19" value="{$smarty.post.address2}" autocomplete="off"></div>
														<label class="col-sm-2 control-label" style="text-align:left; ">Mobile:</label>
							<div class="col-md-4" id="errmobile"> <input type="text"  id="mobile"  name="mobile" class="form-control" maxlength="10" value="{$smarty.post.mobile}" onBlur="chk_exist_mob(this);" autocomplete="off" onkeyup="numericFilter(this);"></div>
							   </div>
							<div class="form-group">
							   <label class="col-sm-2 control-label" style="text-align:left;">City</label>
							   <div class="col-md-4" id="errcity"> <input type="text"  id="city"  name="city" class="form-control" maxlength="19" value="{$smarty.post.city}" autocomplete="off"></div>
							   
							   <label class="col-sm-2 control-label" style="text-align:left; ">Phone:</label>
							   <div class="col-md-4" id="errphone"> <input type="text"  id="phone"  name="phone" class="form-control" maxlength="11" value="{$smarty.post.phone}" autocomplete="off" onkeyup="numericFilter(this);"></div>
							  </div>
							   <div class="form-group">
							   <label class="col-sm-2 control-label" style="text-align:left;">State</label>
                               <div class="col-md-4"  id="errstate"> <input type="text" id="state" name="state" class="form-control" value="{$smarty.post.state}" autocomplete="off">						</div>
							   
							   <label class="col-sm-2 control-label" style="text-align:left; ">Email:</label>
							   <div class="col-md-4" id="erremail"> <input type="text"  id="email"  name="email" class="form-control" maxlength="19" value="{$smarty.post.email}" autocomplete="off" onblur="ValidateEmail(this);"></div>
							  </div>
							   <div class="form-group">
							   <label class="col-sm-2 control-label" style="text-align:left; ">Pincode:</label>
							   <div class="col-md-4" id="errpincode"> <input type="text"  id="pincode"  name="pincode" class="form-control" maxlength="6" value="{$smarty.post.pincode}" onBlur="chk_exist_pincode(this);" autocomplete="off" onkeyup="numericFilter(this);"></div>
							  
								<label class="col-sm-2 control-label" style="text-align:left; ">Created Date:</label>
							   <div class="col-md-4" id="errcreatedDate"> <input type="text"  id="createdDate"  name="createdDate" class="form-control" maxlength="19" value="{$smarty.now|date_format:'%Y-%m-%d'}" readonly="true"></div>
							    </div>
							   <div class="form-group">
							  <label class="col-sm-2 control-label" style="text-align:left; ">Created Time:</label>
							   <div class="col-md-4" id="errcreatedTime"> <input type="text" id="createdTime" name="createdTime" class="form-control" maxlength="19" value="{$smarty.now|date_format:'%I:%M:%S %p'}" readonly="true"></div>
							   <label class="col-sm-2 control-label" style="text-align:left; ">Created By:</label>
							   <div class="col-md-4" id="errcreatedBy"> <input type="text"  id="createdBy"  name="createdBy" class="form-control" maxlength="19" value="{$smarty.session.UserName}" readonly="true"></div>
							   </div>
							   
							    
							    <hr/>
							    				 
								 <div align="center">
                                         
                                        <button class="btn btn-primary" type="submit" id="addVendor">ADD</button>
										<button class="btn btn-primary" type="button" id="resetVendor">RESET</button>
										<button class="btn btn-white" type="submit" id="back" >CANCEL</button>
                                      </div>
									  </form>
							   
							   
					
                        </div>
                    </div>
                </div>
            </div>
        </div>
		</div>
{literal}		
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
			
$("#addVendor").click(function(){
				var fields=["supplierCode","gst_no","contactPerson","address","designation","address2","mobile","city","phone","state","email","pincode","createdDate"];
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
              FormName= document.vendorReg;
  			  FormName.method= "POST";
              FormName.submit(); 
			                 });

$("#back").click(function(){

window.history.back();

});

		
		 });
		 
		 // calendar in datepicker
			/*$(function(createdDate) {
				//alert("test");
				$( "#createdDate" ).datepicker({
					altField: "#validity",
					altFormat: "yy-mm-dd"
				});
			});
*/			
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

<script type="text/javascript" src='./dhtmlxMessage/codebase/dhtmlxmessage.js'></script>
<script type='text/javascript' src='./auto-complete/jquery.metadata.js'></script>
<script type='text/javascript' src='./auto-complete/jquery.auto-complete.js?<?= mktime() ?>'></script>
<script type='text/javascript' src='./auto-complete/js.js?<?= mktime() ?>'></script>
<link rel="stylesheet" href= "./codebase/skins/dhtmlxmessage_dhx_skyblue.css" type="text/css" media="all"/> 
<link rel='stylesheet' type='text/css' href='auto-complete/jquery.auto-complete.css?<?= mktime() ?>' />

{/literal}