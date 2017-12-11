{include file="left.tpl"}
{literal}
<script type="text/javascript" src='./dhtmlxMessage/codebase/dhtmlxmessage.js'></script>
	<script type='text/javascript' src='./auto-complete/jquery.metadata.js'></script>
	<script type='text/javascript' src='./auto-complete/jquery.auto-complete.js?<?= mktime() ?>'></script>
	<script type='text/javascript' src='./auto-complete/js.js?<?= mktime() ?>'></script>
	<link rel="stylesheet" href= "./codebase/skins/dhtmlxmessage_dhx_skyblue.css" type="text/css" media="all"/> 
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
<script>
function retrieve_select_bxs()
{
var data_array = ["hdn_salutation","hdn_order_status","hdn_customer_status","hdn_customer_type","hdn_snooze_hour","hdn_snooze_time","hdn_snooze_meridian"];
var data_fields=["salutation","order_status","customer_status","customer_type","snooze_hour","snooze_time","meridian"];
var array_len=data_array.length;
	for(var i=0;i<=array_len;i++)
	{
	   var sel_val=document.getElementById(data_array[i]).value;
	   var field_len = document.getElementById(data_fields[i]).length;
	   var sel_bx_val=document.getElementById(data_fields[i]).length;
	   for(var j=0;j<sel_bx_val;j++)
	   {
	       cur_val=document.getElementById(data_fields[i]);
		   if(cur_val.options[j].value==sel_val)
		   {
		     cur_val.options[j].selected = true; 
		   }
	   }
	}
}
function cancel () {
    document.execCommand('Stop')
}

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
	
						switch("error_"+mob_no.id)
						{
						case "error_mobile":
						document.getElementById("error_mobile").innerHTML = x;
						break;
						case "error_mobile2":
						document.getElementById("error_mobile2").innerHTML = x;
						break;
						case "error_mobile3":
						document.getElementById("error_mobile3").innerHTML = x;
						break;
						case "error_mobile4":
						document.getElementById("error_mobile4").innerHTML = x;
						break;
						case "error_mobile5":
						document.getElementById("error_mobile5").innerHTML = x;
						break;
						}

	   }  
       
    }
  }
xmlhttp.open("GET","ajax_validate_exist_data.php?q="+mob_no.value+"&mob_validation=yes",true);

xmlhttp.send();
}

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



function chk_exist_email(email){
dhtmlx.alert({
    title: "Mail",
    type:"alert-error",
    text: "Mail Already Exists!",
    callback: function(result) 
	{
				if(result==true)
				{

if (email.value=="")
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
			document.getElementById("error_email_id").innerHTML = x;

	   }  
       
    }
  }
xmlhttp.open("GET","ajax_validate_exist_data.php?q="+email.value+"&email_validation=yes",true);

xmlhttp.send();
   }	
	}
});
 
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
case "error_mobile4":
document.getElementById("error_mobile4").innerHTML = "";
break;
case "error_mobile5":
document.getElementById("error_mobile5").innerHTML = "";
break;
}


}


function clear_err_email_id()
{
document.getElementById("error_email_id").innerHTML = "";
}


		
		function doOnLoad() {
			var myCalendar;
			myCalendar = new dhtmlXCalendarObject({input: "quote_date", button: "calendar_icon1"});
			retrieve_select_bxs();
		}
		
/*function runMe()
{
 document.cookie = name+"=index%3d1; expires=whenever;path=/";
 window.history.back()
}*/	
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
		
		var fields=["sales_quote_no","quote_date","revised_id","company_name","customer_id","contact_name","mobile_no","profile_image","email","area_code","phone_no","extension","address","area","city","pincode","product_description","unit_basic","quantity","vat_value","vat_percentage","sub_total","total","remarks"];
				for(i=0;i<fields.length;i++)
				{
				//alert(fields[i]);
				current_iteration = document.getElementById(fields[i]).value;
				document.getElementById(fields[i]).style.borderColor="";
						if(current_iteration=="")
						{
				//		alert("Please Fill! "+fields[i]);
						document.getElementById(fields[i]).focus();
						document.getElementById(fields[i]).style.borderColor="red";
						return false;
						}
											
						if(i==8)
						{
						
						var atpos  =  current_iteration.indexOf("@");
						var dotpos = current_iteration.lastIndexOf(".");
								if (atpos< 1 || dotpos<atpos+2 || dotpos+2>=current_iteration.length) 
								{
								dhtmlx.alert({
								title: "Error !",
								type:"alert-error",
								text: "Please verify  Mail Id",	
											});										
									return false;
								}
								else
								{

								}						
						}

				}
			  FormName		= document.add_sales_quote;
  			  FormName.method	= "POST";
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

function add_more_mobile()
{
  var cnt_mobile=document.getElementById("mobile_fld_cnt").value;
	  if(cnt_mobile!=4)
	  {
		  document.getElementById("mobile_fld_cnt").value=parseInt(cnt_mobile)+1;
		  document.getElementById("hdn_mobile"+cnt_mobile).removeAttribute("style");
		  document.getElementById("hdn_adjacent"+cnt_mobile).removeAttribute("style");
	  }
	  else
	 {
		dhtmlx.alert({
		title: "Mobile No",
		type:"alert-error",
		text: "You Can't Enter More Than 3 Mobile Number "});
	  }
}

function add_more_phone(){

    
  var cnt_phone=document.getElementById("phone_fld_cnt").value;
	  if(cnt_phone!=3)
	  {
		  document.getElementById("phone_fld_cnt").value=parseInt(cnt_phone)+1;
		  document.getElementById("hdn_phone"+cnt_phone).removeAttribute("style");
		//  document.getElementById("hdn_adjacent"+cnt_phone).removeAttribute("style");
	  }
	  else
	  {
			dhtmlx.alert({
			title: "Phone No",
			type:"alert-error",
			text: "Can't Enter More Than 2 Phone Number "});
	  }
}



function add_more_email()
{
  var cnt_email=document.getElementById("email_fld_cnt").value;
 // alert(cnt_email);
	  if(cnt_email!=3)
	  {
		  document.getElementById("email_fld_cnt").value=parseInt(cnt_email)+1;
		 // alert("hdn_email");
		  document.getElementById("hdn_email"+cnt_email).removeAttribute("style");
		  document.getElementById("hdn_email"+cnt_email+"_adjacent").removeAttribute("style");
	  }
	  else
		{
			dhtmlx.alert({
			title: "Email Id",
			type:"alert-error",
			text: "You Can't Enter More Than 2 Mail Id "});
	  }
}
</script>
<script>
function getvalue()
{					var quantity = document.getElementById('quantity').value;
					var price = document.getElementById('vat_value').value;
					var cost = (quantity * price);
					var tax = document.getElementById('vat_percentage').value;
					if(tax != "")
					{
							var tax_value = (cost * tax)/100;
							document.getElementById('sub_total').value=tax_value;
							var total = (+tax_value + +cost);
							document.getElementById('total').value=total;
					}
					
}
</script>
{/literal}
	<body class="hold-transition skin-blue sidebar-mini" onLoad="doOnLoad();">
    <div class="wrapper">
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
				<h4>
         <small><a href="sales_quote_list.php"><i class="fa fa-list">
		 List Sales Quote</i></a></small>&ensp;&ensp;&ensp;
         <small class="active"><a href="sales_quote_reg.php"><i class="fa fa-user-plus">
		 Create Sales Quote</i></a></small>
		 </h4>
<!--          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Forms</a></li>
            <li class="active">Advanced Elements</li>
          </ol>-->
        </section>
        <!-- Main content -->
        <section class="content">
          <!-- SELECT2 EXAMPLE -->
          <div class="box box-info">
            <div class="box-header with-border" align="center">
              <h3 class="box-title">Sales Quote Registration</h3>
              <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
              </div>
            </div><!-- /.box-header -->
			<form class="form-horizontal" name="add_sales_quote">
			<input type="hidden" name="hdAction" />
					<input type="hidden" id="c_id" name="c_id" size="25" value="{$c_id}" readonly="true" >
					<input type="hidden" id="mobile_fld_cnt" name="mobile_fld_cnt"  value="2"  >
					<input type="hidden" id="phone_fld_cnt" name="phone_fld_cnt"  value="2"  >
					<input type="hidden" id="email_fld_cnt" name="email_fld_cnt"  value="2"  >
					<input type="hidden" id="hdn_salutation" name="hdn_salutation" value="{$smarty.post.salutaion}">
					<input type="hidden" id="hdn_order_status" name="hdn_order_status" value="{$smarty.post.order_status}">
					<input type="hidden" id="hdn_customer_status" name="hdn_customer_status" value="{$smarty.post.customer_status}">
					<input type="hidden" id="hdn_customer_type" name="hdn_customer_type" value="{$smarty.post.customer_type}">
					<!--{if $SuccessMessage neq ""}
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
					{/if}-->
                  <div class="box-body">
				   <div class="col-md-6">
				   <div class="form-group">			 
                      <label class="col-sm-3 control-label">Sales Quote No</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="sales_quote_no" name="sales_quote_no" value="{$c_id}" placeholder="Sales Quote No" tabindex="1">
                      </div>
					    &nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>
                    </div>
					 <div class="form-group">
                      <label class="col-sm-3 control-label">Revised No</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="revised_id" name="revised_id" value="{$smarty.post.revised_id}" placeholder="Revised No"  tabindex="3" >
                      </div>
					  &nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>
                    </div>
					<div class="form-group">
                      <label class="col-sm-3 control-label">Customer Id</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="customer_id" name="customer_id" value="{$smarty.post.customer_id}" placeholder="Customer Id" tabindex="5">
                      </div>
					    &nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>
                    </div>
				<div class="form-group">
                      <label class="col-sm-3 control-label">Mobile No</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="mobile_no" name="mobile_no" maxlength="10" value="{$smarty.post.mobile_no}" placeholder="Mobile No" tabindex="7"onKeyUp="numericFilter(this);clear_err_mobile(this.id);"  onBlur="chk_exist_mob(this);">
                      </div>
					    &nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>
                    </div>
					<div class="form-group">
                      <label class="col-sm-3 control-label">Email Id</label>
                      <div class="col-sm-5">
                        <input type="email" class="form-control" id="email" name="email" value="{$smarty.post.email}" placeholder="Email Id" tabindex="9" onKeyUp="clear_err_email_id();" >
                      </div>
					  &nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>
					  <input type="button" class="btn btn-danger btn-xs" value="ADD MAIL"  onClick="add_more_email();">
					   </div> 
					   <div class="form-group" id="hdn_email2" style="display:none">
                      <label class="col-sm-3 control-label">Email Id 2</label>
                      <div class="col-sm-5">
                        <input type="email" class="form-control" id="email1" name="email1" value="{$smarty.post.email1}" placeholder="Email Id 1"  onKeyUp="clear_err_email_id();" >
                      </div>
					  </div>
					<div class="form-group" style=" margin-top:0px;">
                      <label class="col-sm-3 control-label">Address</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="address" name="address" value="{$smarty.post.address}" placeholder="Address" tabindex="13">
                      </div>
					    &nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>
                    </div>
				<div class="form-group">
                      <label class="col-sm-3 control-label">Area</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="area" name="area" value="{$smarty.post.area}" placeholder="Area" tabindex="15">
                      </div>
					    &nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>
                    </div>
					 <div class="form-group">
                      <label class="col-sm-3 control-label">Pincode</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="pincode" name="pincode" value="{$smarty.post.pincode}" placeholder="Pincode" tabindex="17" onBlur="chk_exist_pin(this)" maxlength="6" onKeyUp="numericFilter(this);" >
                      </div>  &nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font></div>
					   <div class="form-group" >
                      <label class="col-sm-3 control-label">Unit Basic</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="unit_basic" name="unit_basic" value="{$smarty.post.unit_basic}" placeholder="Unit Basic" tabindex="19">
                      </div>
					    &nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>
					   </div>
					   <div class="form-group">
                      <label class="col-sm-3 control-label">Vat Value</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="vat_value" name="vat_value" value="{$smarty.post.vat_value}" placeholder="Vat Value"  onKeyUp="getvalue();numericFilter(this);" tabindex="21">
                      </div>
					    &nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>
					   </div>
					   <div class="form-group">
                      <label class="col-sm-3 control-label">Sub Total</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="sub_total" name="sub_total" value="{$smarty.post.sub_total}" placeholder="Sub Total" tabindex="23">
                      </div>
					    &nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>
					  </div>
					  <div class="form-group">
                      <label class="col-sm-3 control-label">Created By</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="created_by" name="created_by" tabindex="25" placeholder="Created By" value="{$smarty.post.created_by}" >
						<input type="hidden" class="form-control" id="created_date" name="created_date" value="{$smarty.now|date_format:'%Y-%m-%d'}" placeholder="Date" >
						<input type="hidden" class="form-control" id="created_time" name="created_time" value="{$smarty.now|date_format:'%I:%M:%S %p'}"  placeholder="Time">
						 <input type="hidden" class="form-control" id="timestamp_value" name="timestamp_value" value="{$smarty.now|date_format:'%Y-%m-%d &amp; %I:%M:%S %p'}"  placeholder="Timestamp Value">
                      </div>
					  &nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>
                    </div>
					</div>
					<!--**********************************************************-->
                     <div class="col-md-6">
					 <div class="form-group">
                      <label class="col-sm-3 control-label">Quote Date</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="quote_date" name="quote_date" value="{$smarty.post.quote_date}" placeholder="Quote Date" tabindex="2">
                      </div>
					   &nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>
					  <a href="#"><img id="calendar_icon1" src="codebase/calendar.png"></a>
                    </div>
					 <div class="form-group">
                      <label class="col-sm-3 control-label">Company Name</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="company_name" name="company_name" value="{$smarty.post.company_name}" placeholder="Company Name" tabindex="4" >
                      </div>
					  </div>
					  <div class="form-group">
                      <label class="col-sm-3 control-label">Contact Person</label>
                  <div class="col-sm-5">
						<input type="text" class="form-control" id="contact_name" name="contact_name" placeholder="Contact Name" value="{$smarty.post.contact_name}" tabindex="6" onKeyUp="text_filter(this);">
                      </div>
  					  <input type="button" class="btn btn-danger btn-xs" value="ADD Contact" data-toggle="modal" data-target="#Contact">
					  &nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>
                    </div>
                    
					<div class="form-group">
                      <label class="col-sm-3 control-label">Profile Image </label>
                      <div class="col-sm-5">
                        <input type="file"  id="profile_image" name="profile_image" maxlength="25" value="{$smarty.post.profile_image}" placeholder="Profile Image" tabindex="8">
                      </div>
					&nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>
					  </div>
					  <div class="form-group">
                      <label class="col-sm-3 control-label">Phone No</label>
					    <div class="col-sm-2">
					    <input type="text" class="form-control" id="area_code" name="area_code" value="{$smarty.post.area_code}" placeholder="Area Code" tabindex="10" onKeyUp="numericFilter(this);" autocomplete="off" >
					  </div>
                      <div class="col-sm-2">
                        <input type="text" class="form-control" id="phone_no" name="phone_no" value="{$smarty.post.phone_no}" placeholder="Phone No" tabindex="11"onKeyUp="numericFilter(this);" autocomplete="off" >
                      </div>
                      <div class="col-sm-2">
                        <input type="text" class="form-control" id="extension" name="extension" value="{$smarty.post.extension}" placeholder="Extension" tabindex="12" onKeyUp="numericFilter(this);" autocomplete="off" >
                       </div>
					    
					  &nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>
					  <input type="button" class="btn btn-danger btn-xs" value="ADD PHONE"  onClick="add_more_phone();">
					   </div>
					   <div class="form-group" id="hdn_phone2" style="display:none;">
                      <label class="col-sm-3 control-label">Phone No 1</label>
					  <div class="col-sm-2">
					    <input type="text" class="form-control" id="area_code1" name="area_code1" value="{$smarty.post.area_code1}" placeholder="Area Code 1" onKeyUp="numericFilter(this);" autocomplete="off" >
					  </div>
                      <div class="col-sm-2">
                        <input type="text" class="form-control" id="phone_no1" name="phone_no1" value="{$smarty.post.phone_no1}" placeholder="Phone No 1" onKeyUp="numericFilter(this);" >
                      </div>
                      <div class="col-sm-2">
                        <input type="text" class="form-control" id="extension1" name="extension1" value="{$smarty.post.extension1}" placeholder="extension 1" onKeyUp="numericFilter(this);" autocomplete="off" >
                       </div>
					   </div>
					   <div class="form-group">
                      <label class="col-sm-3 control-label">Address1</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="address1" name="address1" value="{$smarty.post.address1}" placeholder="Address1" tabindex="14">
                      </div>
					  &nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font> 
					  </div>
					  <div class="form-group">
                      <label class="col-sm-3 control-label">City</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="city" name="city" value="{$smarty.post.city}" placeholder="City" tabindex="16">
                      </div>
					  &nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font> 
					  </div>
					  <div class="form-group">
                      <label class="col-sm-3 control-label">Product Description</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="product_description" name="product_description" value="{$smarty.post.product_description}" placeholder="Product Description" tabindex="18" >
                      </div> &nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font></div>
					   <div class="form-group" style=" margin-top:-15px;" >
                      <label class="col-sm-3 control-label">Quantity</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="quantity" name="quantity" value="{$smarty.post.quantity}" placeholder="Quantity" tabindex="20">
                      </div>
					    &nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>
					   </div>
					   <div class="form-group">
                      <label class="col-sm-3 control-label">Vat Percentage</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="vat_percentage" name="vat_percentage" value="{$smarty.post.vat_percentage}" placeholder="Vat Percentage" onKeyUp="getvalue();numericFilter(this);" tabindex="22">
                      </div>
					    &nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>
					   </div>
					   <div class="form-group">
                      <label class="col-sm-3 control-label">Total</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="total" name="total" value="{$smarty.post.total}" placeholder="Total" tabindex="24">
                      </div> &nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font></div>
					  
					  <div class="form-group">
                      <label class="col-sm-3 control-label">Remarks</label>
                      <div class="col-sm-5">
                        <textarea class="form-control" id="remarks" name="remarks" value="{$smarty.post.remarks}" placeholder="Remarks" tabindex="26"></textarea>
                      </div>
					  &nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>
                    </div>
					
<div class="modal fade" id="Item_Name" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content" style="width:300px;">
        <div class="modal-header" style="background-color:#00CCFF;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Item Name</h4>
        </div>
        <div class="modal-body">
<table class="table table-bordered table-striped ">
					<tbody>
					<tr>
					<td><input type="text" class="form-control" id="search" name="search" placeholder="Search"></td>
					</tr>
                      <tr>
                        <td align="center">Item Name</td>
					   </tr>
					   <tr>
                        <td align="center">Item Name</td>
					   </tr>
					   <tr>
                        <td align="center">Item Name</td>
					   </tr>
					   <tr>
                        <td align="center">Item Name</td>
					   </tr><tr>
                        <td align="center">Item Name</td>
					   </tr>
					  </tbody>
                  </table>

        </div>
        
      </div>
      
    </div>
  </div>
  
  <div class="modal fade" id="Item_type" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content" style="width:300px;">
        <div class="modal-header" style="background-color:#00CCFF;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Item Type</h4>
        </div>
        <div class="modal-body">
<table class="table table-bordered table-striped ">
					<tbody>
					<tr>
					<td><input type="text" class="form-control" id="search" name="search" placeholder="Search"></td>
					</tr>
                      <tr>
                        <td align="center">Item Type</td>
					   </tr>
					   <tr>
                        <td align="center">Item Type</td>
					   </tr>
					   <tr>
                        <td align="center">Item Type</td>
					   </tr>
					   <tr>
                        <td align="center">Item Type</td>
					   </tr><tr>
                        <td align="center">Item Type</td>
					   </tr>
					  </tbody>
                  </table>

        </div>
        
      </div>
      
    </div>
  </div>
					</div>
					</div>
					<div class="box-footer"><center>
                    <!--<button type="submit" class="btn btn-info pull-center" onClick="validate_fields();">ADD CUSTOMER</button>-->
					<input type="button" class="btn btn-info pull-center" value="ADD "  onClick="validate_fields();">&nbsp;&nbsp;
                    <button type="submit" class="btn btn-info pull-center">CANCEL</button></center>
                  </div>
                  </div> <!-- /.box-body -->
				  </form>
             
                   
      <div class="control-sidebar-bg"></div>
    </div>
  </body>
</html>
