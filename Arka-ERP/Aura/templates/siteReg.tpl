   </div>
           <!-- <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Site Registration</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="./siteReg.php">Site Management</a>
                        </li>
                        <li>
                            <a href="#">Add Site</a>
                        </li>

                    </ol>
                </div>
                <div class="col-lg-2">
                </div>-->
				
        <div class="wrapper wrapper-content animated fadeInRight">
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
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                           <h5  style="padding-left:40%;">Site Registration Form</h5>
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
                            <form method="post" class="form-horizontal" name="siteReg" id="siteReg">
                            <input type="hidden"  id="hdAction"  name="hdAction" />
							   <div class="form-group">
										<div id="errCustomerName">
										<label class="col-sm-2 control-label" style="text-align:left;">Customer Name: </label>
										<div class="col-md-4">
								<input type="text" id="customer_name" name="customer_name" size="29" placeholder="Search" value="{$smarty.post.customer_name}" class="form-control" autocomplete="Off"  data-toggle="modal" data-target="#myModal"readonly="true">						   
							<!--<select id="customer_name"  name="customer_name" class="form-control" value="{$ListCus.customer_name}" autocomplete="Off"   onchange="myFunction">
						        <option value="select" selected="selected">-select- </option>
								{foreach from=$CusList item=ListCus}	
							    <option value="{$ListCus.customer_name}">{$ListCus.customer_name} </option>
							    {/foreach}
						     </select>-->	
				
	 <input type="hidden" id="image" name="image" tabindex="12" value="{$smarty.post.image}" autocomplete="off">
									</div>	
									 </div>
									 <div id="errCustomerId">
										<label class="col-sm-2 control-label" style="text-align:left;">Customer Id: </label>
										<div class="col-md-4">
										<input type="text"  id="customer_id"  name="customer_id" class="form-control" value="{$smarty.post.customer_id}" autocomplete="Off" onDblClick="customer_validation();" readonly="true">
										</div>
									 </div>	
							 </div>
							 	<hr />
							 <div class="form-group">		
							 <div id="errSiteId">
										<label class="col-sm-2 control-label" style="text-align:left;">Site Id: </label>
										<div class="col-md-4"><input type="text"  id="siteId"  name="siteId" class="form-control" readonly="true" value="{$si_id}" autocomplete="Off">
										</div>
										</div>	
							  <div id="errSiteName"> 
									    <label class="col-sm-2 control-label" style="text-align:left;">Site Name:</label>
									    <div class="col-md-4"><input type="text" id="siteName"  name="siteName" class="form-control" value="{$siteName}" autocomplete="Off">
									    </div>
									    </div>			  
							   </div>
							      <div class="form-group">
							  
							   <div id="errAddress"> 
										<label class="col-sm-2 control-label" style="text-align:left;">Address1:</label>
										<div class="col-md-4"><input type="text"  id="address1"  name="address1" class="form-control" value="{$address1}"  autocomplete="Off">
										</div>
										</div>
							    <div id="errVillage">  <label class="col-sm-2 control-label" style="text-align:left;">Village:</label>
                               <div class="col-md-4"><input type="text" id="village"  name="village" class="form-control" value="{$village}"  autocomplete="Off">
							   </div>
							   </div>
							   					
							   </div>
							   <div class="form-group">
							   <div id="errCity">
							        <label class="col-sm-2 control-label" style="text-align:left;">City:</label>
									<div class="col-md-4"><input type="text" id="city" name="city" class="form-control" value="{$city}"  autocomplete="Off">
							   </div>
							   </div>
							   <div id="errState">
							        <label class="col-sm-2 control-label" style="text-align:left;">State:</label>
									<div class="col-md-4"><input type="text" id="state" name="state" class="form-control" value="{$state}"  autocomplete="Off">
							   </div>
							   </div>
							   
							   </div>
							   
							   <div class="form-group">
							   	<div id="errPincode">
							        <label class="col-sm-2 control-label" style="text-align:left;">Pincode:</label>
									<div class="col-md-4"><input type="text" id="pincode" name="pincode" class="form-control"  onkeyup="numericFilter(this)"  onBlur="chk_exist_pincode(this);" maxlength="6" value="{$pincode}"  autocomplete="Off">
							   </div>
							   </div>
							   <div id="errDistrict">
							        <label class="col-sm-2 control-label" style="text-align:left;">District:</label>
									<div class="col-md-4"><input type="text" id="district" name="district" class="form-control" value="{$district}"  autocomplete="Off">
							   </div>
							   </div>
							   </div>
							   
					        <div class="form-group">
							  
							  <div id="errContactPerson"> 
							   <label class="col-sm-2 control-label" style="text-align:left;">Contact Person:</label>
										<div class="col-md-4"><input type="text"  id="contactPerson"  name="contactPerson"class="form-control" value="{$contactPerson}"  autocomplete="Off">
										</div>
										</div>
							   <div id="errDesignation">  
							   <label class="col-sm-2 control-label" style="text-align:left;">Designation:</label>
							   <div class="col-md-4"><input type="text" id="designation"  name="designation"class="form-control" value="{$designation}"  autocomplete="Off">
							   </div>
							   </div>
							   
							  </div>			  
							 
							  <div class="form-group" >
							  <div id="errMobile">  <label class="col-sm-2 control-label"style="text-align:left;">Mobile:</label>
                               <div class="col-md-4"><input type="text"  id="mobile"  name="mobile"class="form-control" onkeyup="numericFilter(this)" onBlur="chk_exist_mob(this);" maxlength="10"  value="{$mobile}"  autocomplete="Off">
							   </div>
							   </div>
							   <div id="errPhone">  
										<label class="col-sm-2 control-label" style="text-align:left;">Phone:</label>
										<div class="col-md-4"><input type="text"  id="phone"  name="phone"class="form-control" onkeyup="numericFilter(this)" value="{$phone}" maxlength="11" autocomplete="Off">
										</div>
										</div>							   
							   </div>
							   
							      <div class="form-group">
							   <div id="errEmail"> <label class="col-sm-2 control-label" style="text-align:left;">Email:</label>
                               <div class="col-md-4" id="errEmail"><input type="text" required id="email"  name="email" class="form-control" onblur="ValidateEmail(this)"maxlength="30" value="{$email}"  autocomplete="Off">
							   </div>
							   </div>	
							   <div id="errRegion">
										<label class="col-sm-2 control-label" style="text-align:left;">Region:</label>
										<div class="col-md-4"><input type="text"  id="region"  name="region"class="form-control" value="{$region}"  autocomplete="Off">
										</div>
										</div>						   
							   </div>
							     <div class="form-group">
								 <div id="errNoOfTurbines"><label class="col-sm-2 control-label" style="text-align:left;">No. Of Turbines:</label>
										<div class="col-md-4"><input type="text"  id="noOfTurbines"  name="noOfTurbines" class="form-control" value="{$noOfTurbines}"  autocomplete="Off">
										</div>
										</div>	
										
							   <div id="errCreatedBy"> <label class="col-sm-2 control-label" style="text-align:left;">Created BY:</label>
                               <div class="col-md-4"><input type="text"  id="createdBy"  name="createdBy"  value="{$smarty.session.UserName} "  readonly="true" class="form-control">
							   </div>
							   </div>	
							   					   
							   </div>
							   
							   
								 
							      <div class="form-group">
							   <div id="errCreatedDate"> <label class="col-sm-2 control-label" style="text-align:left;">Created Date:</label>
                               <div class="col-md-4"><input type="text"  id="createdDate"  name="createdDate" readonly="true" value="{$smarty.now|date_format:'%Y-%m-%d'}" class="form-control">
							   </div>
							   </div>	
							   <div id="errCreatedTime">
										<label class="col-sm-2 control-label" style="text-align:left;">Created Time:</label>
										<div class="col-md-4"><input type="text"  id="createdTime"  name="createdTime" value="{$smarty.now|date_format:'%I:%M:%S %p'}" readonly="true" class="form-control">
										</div>
										</div>						   
							   </div>
							     
							  
							   <div align="center">
                                        <button class="btn btn-primary" type="button" id="addSite">ADD SITE</button>
										<button class="btn btn-white" type="button" id="back">CANCEL</button>
                                      </div>
                                    </form>
									
									
									<div class="modal inmodal" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog">
                                <div class="modal-content animated bounceInRight">
                                        
                                        <div class="modal-body">
										<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
										<h2 class="modal-title" align="center">Customer Details</h2>
                                           <div id="std">            
<!-- SEARCH FORM END -->
{literal}
<script type="text/javascript">
function closeit(val,val2){
	parent.document.forms['siteReg'].elements['customer_name'].value=val;
	parent.document.forms['siteReg'].elements['customer_id'].value=val2;
	parent.document.forms['siteReg'].elements['image'].value=val2;
	parent.dhxWins.window("w1").close();
//	parent.dhxWins.window("w1").close();
/*	var supplier_name = document.getElementById("supplier_name");
    var id = supplier_name.options[supplier_name.selectedIndex].value;
	alert('hi');*/
	
}
 $(document).ready(function() {	
 $("#table").click(function(){
					
					 $("#myModal").hide();
				});
 
 
      });
</script>
{/literal}

 <table class="table table-bordered">
    <form name="SiteMgmt" method="post" >
    <!--<input type="hidden" name="a" value="search" >-->
					<tr>
				    <td colspan="2" align="right">{$LinkPage}{$PerPageNavigation}</td>
				    </tr>
    <tr><td>
       <table width="100%" border="1PX solid black" cellspacing=0 cellpadding=1 class="table table-bordered"  id="table">
        <tr >
	        <th width="30" align="center">&nbsp;&nbsp;S No.</th>
	        <th width="70" align="center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Customer Name</th>
			<th width="30" align="center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Customer Id</th>
	       
        </tr>
		 <!-- <tr>
                <td align="center" bgcolor="#CCFFFF">&nbsp;</td>
                <td align="center" bgcolor="#CCFFFF"><input type="text" id="supplier_name" name="supplier_name" size="45" autocomplete="Off"><input id="search" name="search" value="" size="10" class="btn" type="submit" style="visibility:hidden"></td>
				<td align="center" bgcolor="#CCFFFF"><input type="text" id="supplier_code" name="supplier_code" size="23" autocomplete="Off"><input id="search" name="search" value="" size="10" class="btn" type="submit" style="visibility:hidden"></td>
            </tr>-->
			
        {foreach from=$PageList item=ListCus}
            <tr id="data" >          
                <td align="center" title="">
                  <a href="#."  onClick="closeit('{$ListCus.customer_name}','{$ListCus.customer_id}');">{$i++}</a></td>
                <td align="left"><a  href="#." onClick="closeit('{$ListCus.customer_name}','{$ListCus.customer_id}');">{$ListCus.customer_name}</a></td>
				<td align="left"><a  href="#." onClick="closeit('{$ListCus.customer_name}','{$ListCus.customer_id}');">{$ListCus.customer_id}</a></td>
			
            </tr>
			{foreachelse}
			<tr>
			<td height="20" colspan="11" align="center"><img src="images/warning.gif" border="0">&nbsp;No Records Found</td>
			</tr>
              {/foreach}	

       </table>
	  
    </td></tr>
         
       
    </form>
 </table>
 <center><button type="button" class="btn btn-primary" data-dismiss="modal">Close</button></center>
</div>
                                        </div>
                                        
                                    </div>
                                </div>
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
$("#addSite").click(function(){
var fields=["customer_id","customer_name","image","siteId","siteName","address1","village","city","state","pincode","district","contactPerson","designation","mobile","email","region","noOfTurbines"];				
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
	  		  FormName		= document.siteReg;
  			  FormName.method	= "POST";
              FormName.submit();				
			 });
										  
/*$("#mobileNo").keyUp(function(){
numericFilter();
}*/$("#back").click(function(){

window.history.back();

});

		
		 });
	
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
function text_filter(data)
{
   data.value = data.value.replace(/[^ .a-z]/ig,"");
}	
function cisearch() {
  var str =	document.getElementById("customer_id").value;
//  alert(str);
  if (str=="") {
    document.getElementById("customer_id").value="";
    return;
  }
  FormName		= document.cIsearch;
  FormName.action ='customerDetails.php?search_value='+str;          
  FormName.submit();
 
}

 function cnsearch() {
  var str =	document.getElementById("customer_name").value;
//  alert(str);
  if (str=="") {
    document.getElementById("customer_name").value="";
    return;
  }
  FormName		= document.cNsearch;
  FormName.action ='customerDetails.php?search_value='+str;          
  FormName.submit();
 
}	

function myFunction() {
    var x = document.getElementById("customer_name").value;
    document.getElementById("customer_id").innerHTML = "x";
}

function createWindow(parameter) {	
		dhxWins = new dhtmlXWindows();
		dhxWins.enableAutoViewport(true);
		dhxWins.attachViewportTo("std");
		dhxWins.setImagePath("./codebase/imgs/");
	
switch(parameter)
{

case "window_cus_name":
		w1 = dhxWins.createWindow("w1", 260, 100, 500, 250);
		w1.setText("dhtmlxWindow");
		w1.button("close").enable();
		w1.button("minmax1").disable();
		w1.progressOn();
		w1.setText("Customer List");
		w1.attachURL("./site_reg_window.php");
break;
	}	
	} 
</script>	
	<script type="text/javascript" src='./dhtmlxMessage/codebase/dhtmlxmessage.js'></script>
	<!--<script type='text/javascript' src='./auto-complete/jquery-1.3.2.js'></script>-->
	<script type='text/javascript' src='./auto-complete/jquery.metadata.js'></script>
	<script type='text/javascript' src='./auto-complete/jquery.auto-complete.js?<?= mktime() ?>'></script>
	<script type='text/javascript' src='./auto-complete/js.js?<?= mktime() ?>'></script>
	<link rel='stylesheet' type='text/css' href='auto-complete/jquery.auto-complete.css?<?= mktime() ?>' />
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
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
<script language="javascript">
/*function validate(MyForm){	
	if(!IsValid(MyForm.d_id.value,"Content Title")){
		MyForm.d_id.focus();
		return false;
	}
	MyForm.hdAction.value = 1;
}
*/
function customer_validation()
{
		dhtmlx.alert({
		title: "Error !",
                type:"alert-error",
		text: "Please select Customer Name First!",
		
});
return false;
}
</script>

<script type="text/javascript" src='./dhtmlxMessage/codebase/dhtmlxmessage.js'></script>
<script type='text/javascript' src='./auto-complete/jquery.metadata.js'></script>
<script type='text/javascript' src='./auto-complete/jquery.auto-complete.js?<?= mktime() ?>'></script>
<script type='text/javascript' src='./auto-complete/js.js?<?= mktime() ?>'></script>
<link rel="stylesheet" href= "./codebase/skins/dhtmlxmessage_dhx_skyblue.css" type="text/css" media="all"/> 
<link rel='stylesheet' type='text/css' href='auto-complete/jquery.auto-complete.css?<?= mktime() ?>' />

{/literal}		