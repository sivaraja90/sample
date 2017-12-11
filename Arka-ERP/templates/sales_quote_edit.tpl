{include file="left.tpl"}
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

function clear_err_email_id()
{
document.getElementById("error_email_id").innerHTML = "";
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
var fields=["sales_quote_no","quote_date","revised_version","customer_name","customer_id","contact_name","enquiry_id","po_date","po_no","mobile_no","item_type","email","phone_no","address","item_code","address1","unit_basic","area","vat_value","city","quantity","landmark","vat_percentage","pincode","sub_total","total"];
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
					}
			  FormName	= document.edit_salesquote;
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
  FormName.action ='vendor_details_view.php?search_value='+str;          
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
  FormName.action ='vendor_details_view.php?search_value='+str;          
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
function getvalue()
{
var unitbasic = document.getElementById('unit_basic').value;					
var quantity = document.getElementById('quantity').value;
var sub1 = (unitbasic * quantity);

var tax = document.getElementById('vat_percentage').value;
					if(tax != "")
					{
							var tax_value = (sub1 * tax)/100;
							document.getElementById('sub_total').value=sub1;
							document.getElementById('vat_value').value=tax_value;
							var total1 = (+tax_value + +sub1);
							document.getElementById('total').value=total1;
					}
					
}
function Event()
{
var select = document.getElementById("item_type");
if( select.value == "Product")
{
document.getElementById("product_desc").style.display = "inherit";
document.getElementById("material_name").style.display = "none";
}

else
{
document.getElementById("material_name").style.display = "inherit";
document.getElementById("product_desc").style.display = "none";
}
}
/**************************************************************************/
function Fill_Add_of_Clr()
{

var product_desc=document.getElementById("product_desc").value;
//alert(product_desc);
var cnt_dtl_ary="";
//var customer_name =document.getElementById("").value
if (product_desc=="")
  {
  document.getElementById("item_code").value="";
  return;
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
	
	x=x.replace("|$|","");
	document.getElementById("hdn_add_dtls").value=x;
	var add_dtls_length=x.split("_").length;
	var add_dtls=x.split("_");
	//alert(cnt_dtls);
         document.getElementById("item_code").value=add_dtls[0];
		 document.getElementById("unit_basic").value=add_dtls[1];
		 document.getElementById("item_category").value=add_dtls[2];
	   }
       
    }
  }
xmlhttp.open("GET","ajax_sale.php?product_desc="+product_desc,true);
xmlhttp.send();

}
/*************************************************************************************/

function Fill_Add_of_Clr1()
{

var material_name=document.getElementById("material_name").value;
//alert(material_name);
var cnt_dtl_ary="";
//var customer_name =document.getElementById("").value
if (material_name=="")
  {
  document.getElementById("item_code").value="";
  return;
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
	
	x=x.replace("|$|","");
	document.getElementById("hdn_add_dtls").value=x;
	var add_dtls_length=x.split("_").length;
	var add_dtls=x.split("_");
	//alert(cnt_dtls);
         document.getElementById("item_code").value=add_dtls[0];
		 document.getElementById("unit_basic").value=add_dtls[1];
		 document.getElementById("item_category").value=add_dtls[2];
	   }
       
    }
  }
xmlhttp.open("GET","ajax_sale.php?material_name="+material_name,true);
xmlhttp.send();

}
function GoBack()
{
window.history.back();
}
</script>
{/literal}
  <body class="hold-transition skin-blue sidebar-mini" onLoad="doOnLoad();">
    <div class="wrapper">
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
		<h4>
         <small><a href="sales_quote_list.php"><i class="fa fa-list"> <label style="font-family:Arial, Helvetica, sans-serif">
		 List Sales Order</label></i></a></small>&ensp;&ensp;&ensp;
         <!--<small><a href="sales_quote_reg.php"><i class="fa fa-user-plus">
		 Create Sales Quote</i></a></small>-->
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
            <div class="box-header with-border" align="center" >
              <h3 class="box-title">Sales Order Edit</h3>
              <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
              </div>
            </div><!-- /.box-header -->
			<form class="form-horizontal" name="edit_salesquote">
			 <input type="hidden" name="hdAction" />
					<input type="hidden" id="c_id" name="c_id" size="25" value="{$c_id}" readonly="true" >
					<input type="hidden" id="mobile_fld_cnt" name="mobile_fld_cnt"  value="2"  >
					<input type="hidden" id="phone_fld_cnt" name="phone_fld_cnt"  value="2"  >
					<input type="hidden" id="email_fld_cnt" name="email_fld_cnt"  value="2"  >
					<input type="hidden" id="hdn_salutation" name="hdn_salutation" value="{$smarty.post.salutaion}">
					<input type="hidden" id="hdn_order_status" name="hdn_order_status" value="{$smarty.post.order_status}">
					<input type="hidden" id="hdn_customer_status" name="hdn_customer_status" value="{$smarty.post.customer_status}">
					<input type="hidden" id="hdn_customer_type" name="hdn_customer_type" value="{$smarty.post.customer_type}">
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
                  <div class="box-body">
				  {foreach from=$ListEdit item=View}
				   <div class="col-md-6">
				   <div class="form-group">			 
                      <label class="col-sm-3 control-label">Sales Quote No</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="sales_quote_no" name="sales_quote_no" value="{$View.sales_quote_no}" placeholder="Sales Quote No" tabindex="1" autocomplete="off" readonly="true" autocomplete="off">
                      </div>
					    <!--&nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>-->
                    </div>
					
					 <div class="form-group">
                      <label class="col-sm-3 control-label">Revised Version</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="revised_version" name="revised_version" value="{$View.sales_quote_revise_no}" placeholder="Revised Version"  tabindex="3" autocomplete="off" >
                      </div>
					 <!-- &nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>-->
                    </div>
					<div class="form-group">
                      <label class="col-sm-3 control-label">Customer Id</label>
                      <div class="col-sm-5">
                   <input type="text" class="form-control" id="customer_id" name="customer_id" value="{$View.customer_id}" placeholder="Customer Id" tabindex="5" autocomplete="off" >
                      </div>
					    <!--&nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>-->
                    </div>
					<div class="form-group">
                      <label class="col-sm-3 control-label">Enquiry Id</label>
                      <div class="col-sm-5">
                   <input type="text" class="form-control" id="enquiry_id" name="enquiry_id" value="{$View.enquiry_id}" placeholder="Enquiry Id" tabindex="5" autocomplete="off" >
                      </div>
					    <!--&nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>-->
                    </div>
					<div class="form-group">
                      <label class="col-sm-3 control-label">Po No</label>
                      <div class="col-sm-5">
                   <input type="text" class="form-control" id="po_no" name="po_no" value="{$View.po_no}" placeholder="Po No" tabindex="5" autocomplete="off" >
                      </div>
					    <!--&nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>-->
                    </div>
				<div class="form-group">
                      <label class="col-sm-3 control-label">Mobile No</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="mobile_no" name="mobile_no" maxlength="10" value="{$View.mobile_no}" placeholder="Mobile No" tabindex="7"onKeyUp="numericFilter(this);clear_err_mobile(this.id);"  onBlur="chk_exist_mob(this);" autocomplete="off">
                      </div>
					    <!--&nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>-->
                    </div>
					<div class="form-group">
                      <label class="col-sm-3 control-label">Email Id</label>
                      <div class="col-sm-5">
                        <input type="email" class="form-control" id="email" name="email" value="{$View.email_id}" placeholder="Email Id" tabindex="9" onKeyUp="clear_err_email_id();" autocomplete="off" >
                      </div>
					  <!--&nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>-->
					  <input type="button" class="btn btn-danger btn-xs" value="ADD MAIL"  onClick="add_more_email();">
					   </div> 
					   <div class="form-group" id="hdn_email2" style="display:none">
                      <label class="col-sm-3 control-label">Email Id 2</label>
                      <div class="col-sm-5">
                        <input type="email" class="form-control" id="email1" name="email1" value="{$View.email_id1}" placeholder="Email Id 1"  onKeyUp="clear_err_email_id();" autocomplete="off" >
                      </div>
					  </div>
					<div class="form-group" style=" margin-top:0px;">
                      <label class="col-sm-3 control-label">Address</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="address" name="address" value="{$View.address1}" placeholder="Address" tabindex="13" autocomplete="off">
                      </div>
					   <!-- &nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>-->
                    </div>
					<div class="form-group">
                      <label class="col-sm-3 control-label">Address1</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="address1" name="address1" value="{$View.address2}" placeholder="Address1" tabindex="14" autocomplete="off">
                      </div>
					  <!--&nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font> -->
					  </div>
					  <div class="form-group">
                      <label class="col-sm-3 control-label">Area</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="area" name="area" value="{$View.area}" placeholder="Area" onKeyUp="text_filter(this);" tabindex="15" autocomplete="off">
                      </div>
					    <!--&nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>-->
                    </div>
					  <div class="form-group">
                      <label class="col-sm-3 control-label">City</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="city" name="city" value="{$View.city}" placeholder="City" tabindex="16" autocomplete="off">
                      </div>
					 <!-- &nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font> -->
					  </div>
					  <div class="form-group">
                      <label class="col-sm-3 control-label">Landmark</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="landmark" name="landmark" value="{$View.landmark}" placeholder="Landmark" tabindex="16" autocomplete="off">
                      </div>
					  <!--&nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font> -->
					  </div>
				
					 <div class="form-group">
                      <label class="col-sm-3 control-label">Pincode</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="pincode" name="pincode" value="{$View.pincode}" placeholder="Pincode" tabindex="17" onBlur="chk_exist_pin(this)" maxlength="6" onKeyUp="numericFilter(this);" autocomplete="off" >
                      </div>  <!--&nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>--></div>
					 
					  <div class="form-group">
                      <label class="col-sm-3 control-label">Created By</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="created_by" name="created_by" tabindex="25" placeholder="Created By" value="{$View.created_by}"  autocomplete="off" readonly="true" >
						<input type="hidden" class="form-control" id="created_date" name="created_date" value="{$smarty.now|date_format:'%Y-%m-%d'}" placeholder="Date" >
						<input type="hidden" class="form-control" id="created_time" name="created_time" value="{$smarty.now|date_format:'%I:%M:%S %p'}"  placeholder="Time">
						 <input type="hidden" class="form-control" id="timestamp_value" name="timestamp_value" value="{$smarty.now|date_format:'%Y-%m-%d &amp; %I:%M:%S %p'}"  placeholder="Timestamp Value">
                      </div>
					 <!-- &nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>-->
                    </div>
					<div class="form-group">
                      <label class="col-sm-3 control-label">Remarks</label>
                      <div class="col-sm-5">
                        <textarea class="form-control" id="remarks" name="remarks"  placeholder="Remarks" tabindex="26" autocomplete="off">{$View.remark}</textarea>
                      </div>
					  <!--&nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>-->
                    </div>
					</div>
					<!--**********************************************************-->
                     <div class="col-md-6">
					 <div class="form-group">
                      <label class="col-sm-3 control-label">Sales Order No</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="sales_order_no" name="sales_order_no" value="{$View.sales_order_no}" placeholder="Sales Order No" tabindex="2" autocomplete="off" readonly="true">
                      </div>
					  <!-- &nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>-->
					       </div>
					 <div class="form-group">
                      <label class="col-sm-3 control-label">Quote Date</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="quote_date" name="quote_date" value="{$View.sales_order_date}" placeholder="Quote Date" tabindex="2" autocomplete="off" readonly="true">
                      </div>
					  <!-- &nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>-->
					  <a href="#"><img id="calendar_icon1" src="codebase/calendar.png"></a>
                    </div>
					 <div class="form-group">
                      <label class="col-sm-3 control-label">Customer Name</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="customer_name" name="customer_name" value="{$View.customer_name}" placeholder="Customer Name" tabindex="4" autocomplete="off" >
                      </div>
					  </div>
					  <div class="form-group">
                      <label class="col-sm-3 control-label">Contact Person</label>
                  <div class="col-sm-5">
						<input type="text" class="form-control" id="contact_name" name="contact_name" placeholder="Contact Name" value="{$View.contact_person}" tabindex="6" onKeyUp="text_filter(this);" autocomplete="off">
                      </div>
  					  <input type="button" class="btn btn-danger btn-xs" value="ADD Contact" data-toggle="modal" data-target="#Contact">
					  <!--&nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>-->
                    </div>
					<div class="form-group">
                      <label class="col-sm-3 control-label">Po Date</label>
                  <div class="col-sm-5">
						<input type="text" class="form-control" id="po_date" name="po_date" placeholder="Po Date" value="{$View.po_date}" tabindex="6" autocomplete="off">
                      </div>
  					  <!--<input type="button" class="btn btn-danger btn-xs" value="ADD Contact" data-toggle="modal" data-target="#Contact">-->
					 <!-- &nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>-->
                    </div>
					  <div class="form-group">
                      <label class="col-sm-3 control-label">Phone No</label>
					  <!--  <div class="col-sm-2">
					    <input type="text" class="form-control" id="area_code" name="area_code" value="{$View.area_code}" placeholder="Area Code" tabindex="10" onKeyUp="numericFilter(this);" autocomplete="off"  >
					  </div>-->
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="phone_no" name="phone_no" value="{$View.phone_no}" placeholder="Phone No" tabindex="11"onKeyUp="numericFilter(this);" autocomplete="off">
                      </div>
                      <!--<div class="col-sm-2">
                        <input type="text" class="form-control" id="extension" name="extension" value="{$View.extension}" placeholder="Extension" tabindex="12" onKeyUp="numericFilter(this);" autocomplete="off" >
                       </div>-->
					  <!--&nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>-->
					  <input type="button" class="btn btn-danger btn-xs" value="ADD PHONE"  onClick="add_more_phone();">
					   </div>
					   <div class="form-group" id="hdn_phone2" style="display:none;">
                      <label class="col-sm-3 control-label">Phone No 1</label>
					 <!-- <div class="col-sm-2">
					    <input type="text" class="form-control" id="area_code1" name="area_code1" value="{$View.area_code1}" placeholder="Area Code 1" onKeyUp="numericFilter(this);" autocomplete="off" >
					  </div>-->
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="phone_no1" name="phone_no1" value="{$View.phone_no1}" placeholder="Phone No 1" onKeyUp="numericFilter(this);" >
                      </div>
                      <!--<div class="col-sm-2">
                        <input type="text" class="form-control" id="extension1" name="extension1" value="{$View.extension1}" placeholder="extension 1" onKeyUp="numericFilter(this);" autocomplete="off" >
                       </div>-->
					   </div>
					   
					  <div class="form-group">
                      <label class="col-sm-3 control-label">Item Type</label>
                      <div class="col-sm-5">
                        <!--<input type="text" class="form-control" id="product_description" name="product_description" value="{$View.item_description}" placeholder="Product Description" tabindex="18" autocomplete="off" >-->
						<!--<select id="item_type" name="item_type" class="form-control" tabindex="5" onChange="Event();" >-->
						<select id="item_type" name="item_type" class="form-control" tabindex="5" >
						<option> -- Select Customer Name -- </option>	
						<option value="Product">Product</option>
						<option value="Material">Material</option>			
						</select> 
                      </div> <!--&nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>--></div>
					  <div class="form-group">
                      <label class="col-sm-3 control-label">Item Description</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="product_description" name="product_description" value="{$View.item_description}" placeholder="Product Description" tabindex="18" autocomplete="off" >
						<!--<input type="text" class="form-control" id="product_desc" name="product_desc" placeholder="Product Desc" value="{$View.item_description}" onChange="split_cnt_dtls(this.value);"  tabindex="4" onKeyUp="text_filter(this);">
						
						<input type="text" class="form-control" id="material_name" name="material_name" placeholder="Material Name" value="{$View.item_description}" onChange="split_cnt_dtls1(this.value);"  tabindex="4" onKeyUp="text_filter(this);" style="display:none">-->
                      </div> <!--&nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>-->
					  </div>
					   <div class="form-group" >
                      <label class="col-sm-3 control-label">Item Code</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="item_code" name="item_code" value="{$View.item_code}" placeholder="Item Code" tabindex="19" autocomplete="off">
                      </div>
					    <!--&nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>-->
					   </div>
					   <div class="form-group" >
                      <label class="col-sm-3 control-label">Unit Basic</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="unit_basic" name="unit_basic" value="{$View.unit_basic}" placeholder="Unit Basic" tabindex="19" autocomplete="off" onKeyUp="getvalue();">
                      </div>
					    <!--&nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>-->
					   </div>
					   <div class="form-group">
                      <label class="col-sm-3 control-label">Vat Value</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="vat_value" name="vat_value" value="{$View.vat_value}" placeholder="Vat Value"  onKeyUp="getvalue();numericFilter(this);" tabindex="21" autocomplete="off">
                      </div>
					    <!--&nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>-->
					   </div>
					   <div class="form-group">
                      <label class="col-sm-3 control-label">Quantity</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="quantity" name="quantity" value="{$View.quantity}" placeholder="Quantity" tabindex="20" autocomplete="off" onKeyUp="getvalue();">
                      </div>
					    <!--&nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>-->
					   </div>
					   <div class="form-group">
                      <label class="col-sm-3 control-label">Vat Percentage</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="vat_percentage" name="vat_percentage" value="{$View.vat_per}" placeholder="Vat Percentage" onKeyUp="getvalue();numericFilter(this);" tabindex="22" autocomplete="off">
                      </div>
					    <!--&nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>-->
					   </div>
					   <div class="form-group">
                      <label class="col-sm-3 control-label">Sub Total</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="sub_total" name="sub_total" value="{$View.sub_total}" placeholder="Sub Total" tabindex="23" autocomplete="off">
                      </div>
					    <!--&nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>-->
					  </div>
					   
					   <div class="form-group">
                      <label class="col-sm-3 control-label">Total</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="total" name="total" value="{$View.total}" placeholder="Total" tabindex="24" autocomplete="off">
                      </div> <!--&nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>--></div>
					  
					  
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
  <div class="modal fade" id="Contact" role="dialog">
			<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content" style="width:700px;">
			<div class="modal-header" style="background-color:#00CCFF;">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">Add Contact</h4>
			</div>
			<iframe height="490px" width="100%" id="Contact"  src="./cus_contact.php" style="border:1px;"></iframe>
			</div>
			</div>
			</div>
					</div>
					{/foreach}
					</div>
					<div class="box-footer"><center>
                    <!--<button type="submit" class="btn btn-info pull-center" onClick="validate_fields();">ADD CUSTOMER</button>-->
					<input type="button" class="btn btn-info pull-center" value="UPDATE"  onClick="validate_fields();">&nbsp;&nbsp;
                    <button type="submit" class="btn btn-info pull-center" onClick="GoBack();">CANCEL</button></center>
                  </div>
                  </div> <!-- /.box-body -->
				  </form>
      <div class="control-sidebar-bg"></div>
    </div>
	</div>
  </body>

