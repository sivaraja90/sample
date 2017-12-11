{$IncludeCSS}
{$IncludeJS}
{literal}
<script type="text/javascript" src='./dhtmlxMessage/codebase/dhtmlxmessage.js'></script>
	<script type='text/javascript' src='./auto-complete/jquery-1.3.2.js'></script>
	<script type='text/javascript' src='./auto-complete/jquery.metadata.js'></script>
	<script type='text/javascript' src='./auto-complete/jquery.auto-complete.js?<?= mktime() ?>'></script>
	<script type='text/javascript' src='./auto-complete/js.js?<?= mktime() ?>'></script>
<link rel="stylesheet" href= "./codebase/skins/dhtmlxmessage_dhx_skyblue.css" type="text/css" media="all"/> 
	<link rel='stylesheet' type='text/css' href='auto-complete/jquery.auto-complete.css?<?= mktime() ?>' />
	<link rel="stylesheet" href="'https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
	<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css"/>
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
td{ padding:10px;

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
  
function numericFilter(data) 
{
   data.value = data.value.replace(/[^.0-9^.+,-]/ig,"");
}	
function text_filter(data)
{
   data.value = data.value.replace(/[^ .a-z]/ig,"");
   
}

       function validate_fields()
        {	
		
		var fields=["customer_id","address","area","landmark","city","pincode"];
		
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
						var customer_id  =  document.getElementById("customer_id").value;
						if(customer_id=="")
						{
						dhtmlx.alert({
								title: "Error !",
								type:"alert-error",
								text: "Please Enter Customer ID",
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
				   {foreach from=$ViewContact item=Contact}
				   <input type="hidden" id="sNo" name="sNo" value="{$Contact.sl_no}" />
				   <input type="hidden" value="{$Contact.customer_id}"/>
					<tr class="form-group">
                      <th class="col-sm-4 control-th">CustomerId</th>
                      <td class="col-sm-6">
                        <input type="text" class="form-control" id="customer_id" value="{$Contact.customer_id}" name="customer_id" tabindex="1" placeholder="Customer Id" readonly="true" >
                      </td>
					   <td><!--<font class="error" color="#f56954"><b>*</b>&nbsp;</font>--></td>
					
                      <th class="col-sm-4 control-th">CreatedBy</th>
                      <td class="col-sm-6">
                        <input type="text" class="form-control" id="created_by" value="{$Contact.created_by}" name="created_by" tabindex="2" placeholder="Created By" readonly="true">
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
                      <th class="col-sm-4 control-th">Area</th>
					    <td class="col-sm-6">
					    <input type="text" class="form-control" id="area" name="area" value="{$Contact.area}" placeholder="Area" tabindex="5" onKeyUp="text_filter(this);" >
					      </td>
					   <td><!--<font class="error" color="#f56954"><b>*</b>&nbsp;</font>--></td>
					   
                      <th class="col-sm-4 control-th">LandMark</th>
                      <td class="col-sm-6">
                        <input type="text" class="form-control" id="landmark" name="landmark" value="{$Contact.landmark}" placeholder="Land Mark" tabindex="6" >
                   </td>
					 <td><!--<font class="error" color="#f56954"><b>*</b>&nbsp;</font>--></td>
					</tr> 
					   <tr class="form-group" >
                      <th class="col-sm-4 control-th">City</th>
                      <td class="col-sm-6">
                        <input type="text" class="form-control" id="city" name="city" tabindex="7" value="{$Contact.city}" placeholder="City" >
                      </td>
					  <td><!--<font class="error" color="#f56954"><b>*</b>&nbsp;</font>--></td>
					 
                      <th class="col-sm-4 control-th">Pincode</th>
                      <td class="col-sm-6">
                        <input type="text" class="form-control" id="pincode" name="pincode" value="{$Contact.pincode}" placeholder="Pincode" tabindex="8" maxlength="6" onKeyUp="numericFilter(this);" onBlur="chk_exist_pin(this);">
                      </td>
					  <td><!--<font class="error" color="#f56954"><b>*</b>&nbsp;</font>--></td>
					  </tr>
					<tr class="form-group">
                      <th class="col-sm-4 control-th">Remarks</th>
                      <td class="col-sm-6">
                        <textarea class="form-control" id="remarks" name="remarks" placeholder="Remarks" tabindex="9">{$Contact.remarks}</textarea>
                      					  </td>
										  <td><!--<font class="error" color="#f56954"><b>*</b>&nbsp;</font>--></td>
                    </tr>
					{/foreach}
					</table>
					</form>
					<div class="box-footer">
					<center>
                  	<input type="button" class="btn btn-info pull-center" value="UPDATE"  onClick="validate_fields();">&nbsp;&nbsp;
                   
					</center>
                  </div>
				 </body>