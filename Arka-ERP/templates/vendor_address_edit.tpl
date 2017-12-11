{$IncludeCSS}
{$IncludeJS}
{literal}
	<link rel="stylesheet" href="'https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
	<style>
	th {
    font-style: normal;
	font-weight:100;
	font-size:14px;
	margin-right:100px;
}
table { 
    border-spacing: 2px;
    border-collapse: collapse;
}
td
{
 padding:10px;
}
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

<script>


function chk_exist_pin(pin)
{

if (pin.value=="")
  {
  return false;
  }
  
		if(pin.value.length==6)
								{
								return true;
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
  


function chk_exist_cmp(cmp_name)
{

if (cmp_name.value=="")
  {
  return false;
  }  
  
if (window.XMLHttpRequest)
  {
  xmlhttp=new XMLHttpRequest();
  }
else
  {
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
	
	var x;
       if(xmlhttp.responseText)
	   {
  
			x=xmlhttp.responseText;
			document.getElementById("error_cmp_name").innerHTML = x;

	   }  
       
    }
  }
xmlhttp.open("GET","ajax_validate_exist_data.php?q="+cmp_name.value+"&cmp_validation=yes",true);

xmlhttp.send();
}


function GoBack()
{
window.history.back();
}
function clear_err_name_of_cmp()
{
document.getElementById("error_cmp_name").innerHTML = "";
}
function clear_err_mobile(mob)
{
switch("error_"+mob)
{
case "error_mobile":
document.getElementById("error_mobile").innerHTML = "";
break;
case "error_mobile2":
document.getElementById("error_mobile2").innerHTML = "";
break;
case "error_mobile3":
document.getElementById("error_mobile3").innerHTML = "";
break;
}

}

function numericFilter(data) 
{
   data.value = data.value.replace(/[^.0-9^.+,-]/ig,"");
}	
function text_filter(data)
{
   data.value = data.value.replace(/[^ .a-z]/ig,"");
   
}
function validate_phone(data)
{
		if(data.value.length==10)
								{
								return true;
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

       function validate_fields()
        {	
		
		var fields=["vendor_id","address","area","landmark","city","pincode"];
		
				for(i=0;i<fields.length;i++)
				{
				current_iteration = document.getElementById(fields[i]).value;
				document.getElementById(fields[i]).style.borderColor="";
					if(current_iteration=="")
						{
						document.getElementById(fields[i]).focus();
						document.getElementById(fields[i]).style.borderColor="red";
						if(i==0)
						{
						var vendor_id  =  document.getElementById("vendor_id").value;
						if(vendor_id=="")
						{
						dhtmlx.alert({
								title: "Error !",
								type:"alert-error",
								text: "Please Enter Vendor Id",
											});
									return false;
						}
						}
						if(i==1)
						{
						var address  =  document.getElementById("address").value;
						if(address=="")
						{
						dhtmlx.alert({
								title: "Error !",
								type:"alert-error",
								text: "Please Enter Address",
											});
									return false;
						}
						}
						if(i==2)
						{
						var area  =  document.getElementById("area").value;
						if(area=="")
						{
						dhtmlx.alert({
								title: "Error !",
								type:"alert-error",
								text: "Please Enter Area",
											});
									return false;
						}
						}
						if(i==3)
						{
						var landmark  =  document.getElementById("landmark").value;
						if(landmark=="")
						{
						dhtmlx.alert({
								title: "Error !",
								type:"alert-error",
								text: "Please Enter Landmark",
											});
									return false;
						}
						}
						if(i==4)
						{
						var city  =  document.getElementById("city").value;
						if(city=="")
						{
						dhtmlx.alert({
								title: "Error !",
								type:"alert-error",
								text: "Please Enter City",
											});
									return false;
						}
						}
						if(i==5)
						{
						var pincode  =  document.getElementById("pincode").value;
						if(pincode=="")
						{
						dhtmlx.alert({
								title: "Error !",
								type:"alert-error",
								text: "Please Enter Pincode",
											});
									return false;
						}
						}
						return false;
						}
											
						}
			  FormName	= document.add_address;
  			  FormName.method = "POST";
              FormName.submit();
		}
		
function validateForm() {
    var x = document.forms["myForm"]["email"].value;
    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
    if (atpos< 1 || dotpos<atpos+2 || dotpos+2>=x.length) {
        alert("Not a valid e-mail address");
        return false;
    }
}		

 function csearch() {
  var str =	document.getElementById("customersearch").value;
//  alert(str);
  if (str=="") {
    document.getElementById("customersearch").value="";
    return;
  }
  FormName		= document.cussearch;
  FormName.action ='customer_details_view.php?search_value='+str;          
  FormName.submit();
 
}
 function msearch() {
  var str =	document.getElementById("mobilesearch").value;
//  alert(str);
  if (str=="") {
    document.getElementById("mobilesearch").value="";
    return;
  }
  FormName		= document.mobsearch;
  FormName.action ='customer_details_view.php?search_value='+str;          
  FormName.submit();
 
}
</script>
{/literal}
	<body class="hold-transition skin-blue sidebar-mini">
		<form class="form-horizontal" name="add_address">
			<input type="hidden" name="hdAction" />
					<input type="hidden" id="mobile_fld_cnt" name="mobile_fld_cnt"  value="2"  >
					<input type="hidden" id="phone_fld_cnt" name="phone_fld_cnt"  value="2"  >
					<input type="hidden" id="email_fld_cnt" name="email_fld_cnt"  value="2"  >
					<input type="hidden" id="hdn_salutation" name="hdn_salutation" value="{$Contact.salutaion}">
					<input type="hidden" id="hdn_order_status" name="hdn_order_status" value="{$Contact.order_status}">
					<input type="hidden" id="hdn_customer_status" name="hdn_customer_status" value="{$Contact.customer_status}">
					<input type="hidden" id="hdn_customer_type" name="hdn_customer_type" value="{$Contact.customer_type}">
							{if $SuccessMessage neq ""}
							<div class="isa_success">
							<i class="fa fa-check"></i>
							{$SuccessMessage}		 
							</div>
							{/if}
							{if $ErrorMessage neq ""}
							<div class="isa_error">
							<i class="fa fa-times"></i>
							{$ErrorMessage}		 
							</div>
							{/if}
				   <table class="col-md-6">
				   {foreach from=$EditAddress item=Contact}
				   <input type="hidden" id="sl_no" name="sl_no" value="{$Contact.sl_no}" />
				   <input type="hidden" id="vendor_id" name="vendor_id" value="{$Contact.vendor_id}"/>
					<tr class="form-group">
                      <th class="col-sm-4 control-th">vendorId</th>
                      <td class="col-sm-6">
                        <input type="text" class="form-control" id="vendor_id" value="{$Contact.vendor_id}" name="vendor_id" tabindex="1" placeholder="Vendor Id" readonly="true" >
                      </td>
					   <td><!--<font class="error" color="#f56954"><b>*</b>&nbsp;</font>--></td>
				  <th class="col-sm-4 control-th">Area</th>
					    <td class="col-sm-6">
					    <input type="text" class="form-control" id="area" name="area" value="{$Contact.area}" placeholder="Area" tabindex="2" onKeyUp="text_filter(this);" >
					      </td>
					   <td><!--<font class="error" color="#f56954"><b>*</b>&nbsp;</font>--></td>
                      
					</tr> 
                     <tr class="form-group">
                      <th class="col-sm-4 control-th">Address</th>
                      <td class="col-sm-6">
                        <input type="text" class="form-control" id="address" name="address"  placeholder="Address" tabindex="3" value="{$Contact.address}" onClick="doOnLoad();"  autocomplete="off" >
                      </td>
					   <td><!--<font class="error" color="#f56954"><b>*</b>&nbsp;</font>--></td>
                   
                      <th class="col-sm-4 control-th">Address1</th>
                      <td class="col-sm-6">
                        <input type="text" class="form-control" id="address1" name="address1" value="{$Contact.address1}" placeholder="Address1" tabindex="4" onKeyUp="text_filter(this);">
						<input type="hidden" class="form-control" id="timestamp" name="timestamp" value="{$smarty.now|date_format:'%Y-%m-%d &amp; %I:%M:%S %p'}">
               									</td>
						 <td><!--<font class="error" color="#f56954"><b>*</b>&nbsp;</font>--></td>
                      </tr> 
					 <tr class="form-group">
                    
					
                      <th class="col-sm-4 control-th">LandMark</th>
                      <td class="col-sm-6">
                        <input type="text" class="form-control" id="landmark" name="landmark" value="{$Contact.landmark}" placeholder="Land Mark" tabindex="5" >
                   </td>
					 <td><!--<font class="error" color="#f56954"><b>*</b>&nbsp;</font>--></td>
					     <th class="col-sm-4 control-th">City</th>
                      <td class="col-sm-6">
                        <input type="text" class="form-control" id="city" name="city" tabindex="6" value="{$Contact.city}" placeholder="City" >
                      </td>
					  <td><!--<font class="error" color="#f56954"><b>*</b>&nbsp;</font>--></td>
					</tr> 
					   <tr class="form-group" >
                  
					 
                      <th class="col-sm-4 control-th">Pincode</th>
                      <td class="col-sm-6">
                        <input type="text" class="form-control" id="pincode" name="pincode" value="{$Contact.pincode}" placeholder="Pincode" tabindex="7" maxlength="6" onKeyUp="numericFilter(this);" >
                      </td>
					  <td><!--<font class="error" color="#f56954"><b>*</b>&nbsp;</font>--></td>
					   <th class="col-sm-4 control-th">Remarks</th>
                      <td class="col-sm-6">
                        <textarea class="form-control" id="remarks" name="remarks" placeholder="Remarks" tabindex="8">{$Contact.remarks}</textarea>
                      					  </td>
										  <td><!--<font class="error" color="#f56954"><b>*</b>&nbsp;</font>--></td>
					  </tr>
					<tr class="form-group">
                     <th class="col-sm-5 control-th" style="margin-bottom:-30px;">Created By</th>
						<td>
						<input type="text" class="form-control" id="created_by" name="created_by" value="{$smarty.session.UserName}" placeholder="Created By" tabindex="9" readonly="true"><td><!--&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>--></td>
						</td>
                    </tr>
					{/foreach}
					</table>
					</form>
					<div class="box-footer">
					<center>
                  	<input type="button" class="btn btn-info pull-center" value="UPDATE"  onClick="validate_fields();">&nbsp;&nbsp;
                    <input type="button" class="btn btn-info pull-center" value="CANCEL" data-dismiss="modal" >&nbsp;&nbsp;
					</center>
                  </div>
				 </body>