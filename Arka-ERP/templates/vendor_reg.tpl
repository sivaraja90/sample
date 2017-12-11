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
function doOnLoad(){
		var myCalendar;
			myCalendar = new dhtmlXCalendarObject({input: "d_o_b", button: "calendar_icon1"});
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
	  function validate_fields()
        {	
		
		var fields=["vendor_id","company_name","salutation","vendor_fname","vendor_lname","address","mobile_no","area","city","pincode","designation","mail_id","cst_no","service_tax","tin_no"];
				for(i=0;i<fields.length;i++)
				{
				//alert(fields[i]);
				current_iteration = document.getElementById(fields[i]).value;
				document.getElementById(fields[i]).style.borderColor="";
						
						if(current_iteration=="")
						{
						document.getElementById(fields[i]).focus();
						document.getElementById(fields[i]).style.borderColor="red";
						 if(i==1)
						{
						var company_name  =  document.getElementById("company_name").value;
						if(company_name=="")
						{
						dhtmlx.alert({
								title: "Error !",
								type:"alert-error",
								text: "Please Enter Company Name",
											});
									return false;
						}
						}
						 if(i==3)
						{
						var vendor_fname  =  document.getElementById("vendor_fname").value;
						if(vendor_fname=="")
						{
						dhtmlx.alert({
								title: "Error !",
								type:"alert-error",
								text: "Please Enter vendor First Name",
											});
									return false;
						}
						}
						 if(i==4)
						{
						var vendor_lname  =  document.getElementById("vendor_lname").value;
						if(vendor_lname=="")
						{
						dhtmlx.alert({
								title: "Error !",
								type:"alert-error",
								text: "Please Enter vendor Last Name",
											});
									return false;
						}
						}
						 if(i==5)
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
						if(i==6)
						{
						var con_ph  =  document.getElementById("phone_no").value;
						var con_mo = document.getElementById("mobile_no").value;
								if (con_ph=="" && con_mo=="")
								{
								dhtmlx.alert({
								title: "Error !",
								type:"alert-error",
								text: "Please Enter Mobile No or Phone No",
											});
									return false;
								}
								else
								{

								}
								}
						 if(i==7)
						{
						var area  =  document.getElementById("area").value;
						if(area=="")
						{
						dhtmlx.alert({
								title: "Error !",
								type:"alert-error",
								text: "Please Enter vendor Area",
											});
									return false;
						}
						}
						 if(i==8)
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
						 if(i==9)
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
						 if(i==10)
						{
						var designation  =  document.getElementById("designation").value;
						if(designation=="")
						{
						dhtmlx.alert({
								title: "Error !",
								type:"alert-error",
								text: "Please Enter Designation",
											});
									return false;
						}
						}
						 if(i==11)
						{
						var mail_id  =  document.getElementById("mail_id").value;
						if(mail_id=="")
						{
						dhtmlx.alert({
								title: "Error !",
								type:"alert-error",
								text: "Please Enter Mail Id",
											});
									return false;
						}
						else
								{

								}
						if(mail_id!=""){
						var atpos  =  mail.indexOf("@");
						var dotpos = mail.lastIndexOf(".");
								if (atpos< 1 || dotpos<atpos+2 || dotpos+2>=mail.length)
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
						 if(i==12)
						{
						var cst_no  =  document.getElementById("cst_no").value;
						if(cst_no=="")
						{
						dhtmlx.alert({
								title: "Error !",
								type:"alert-error",
								text: "Please Enter CST NO",
											});
									return false;
						}
						}
						 if(i==13)
						{
						var service_tax  =  document.getElementById("service_tax").value;
						if(service_tax=="")
						{
						dhtmlx.alert({
								title: "Error !",
								type:"alert-error",
								text: "Please Enter Service Tax NO",
											});
									return false;
						}
						}
						 if(i==14)
						{
						var tin_no  =  document.getElementById("tin_no").value;
						if(tin_no=="")
						{
						dhtmlx.alert({
								title: "Error !",
								type:"alert-error",
								text: "Please Enter Tin NO",
											});
									return false;
						}
						}
				}
				}
			  FormName		= document.add_vendor;
  			  FormName.method	= "POST";
              FormName.submit();
		}
		 
  



function GoBack()
{
window.history.back();
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
function clear_err_name_of_cmp()
{

document.getElementById("error_cmp_name").innerHTML = "";
}
<!---/*************************************************************************************************-->

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
			//alert(x);
			document.getElementById("error_cmp_name").innerHTML = x;

	   }  
       
    }
  }
xmlhttp.open("GET","ajax_vendor_company_name_exist.php?name="+cmp_name.value+"&cmp_validation=yes",true);

xmlhttp.send();
}
<!---/*************************************************************************************************-->

</script>
{/literal}

  <body class="hold-transition skin-blue sidebar-mini" onLoad="doOnLoad();">
    <div class="wrapper">
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
	<h4>
         <small><a href="vendor_list.php"><i class="fa fa-list"> <label style="font-family:Arial, Helvetica, sans-serif">
		 List Vendors</label></i></a></small>&ensp;&ensp;&ensp;
         <small class="active"><a href="vendor_reg.php"><i class="fa fa-user-plus"> <label style="font-family:Arial, Helvetica, sans-serif">
		 Create Vendor</label></i></a></small>
		 </h4>
</section>

        <!-- Main content -->
        <section class="content">

          <!-- SELECT2 EXAMPLE -->
          <div class="box box-info">
            <div class="box-header with-border" align="center">
              <h3 class="box-title">Vendor Registration</h3>
              <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
              </div>
            </div><!-- /.box-header -->
			
			<form class="form-horizontal" name="add_vendor">
			        <input type="hidden" name="hdAction" />
					<input type="hidden" id="c_id" name="c_id" size="25" value="{$c_id}" >
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
				   <div class="col-md-6">
                    <div class="form-group">			 
                      <label class="col-sm-3 control-label">Vendor Id</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="vendor_id" name="vendor_id" value="{$c_id}"tabindex="1" placeholder="Vendor Id" readonly="true">
                      </div>
                    </div>
					 <div class="form-group">
                      <label class="col-sm-3 control-label">Contact Person</label>
                      <div class="col-sm-2" style="width:99px;">
					  <select id="salutation" name="salutation"  class="form-control"  tabindex="3" >
					  <option>Mr</option>
					  <option>Mrs</option>
					  <option>Miss</option>
					  </select>
					  </div>
					  <div class="form-group">
					  <div class="col-sm-3">
                        <input type="text" class="form-control" id="vendor_fname" name="vendor_fname" value="{$smarty.post.vendor_fname}" placeholder="First name" tabindex="4" style="margin-left:-25px; width:150px;" onKeyUp="text_filter(this)" autocomplete="off">
					</div>
					<div class="col-sm-3">
						<input type="text" class="form-control" id="vendor_lname" name="vendor_lname" value="{$smarty.post.vendor_lname}" placeholder="Last name" tabindex="5" style="margin-left:-10px;width:130px;" onKeyUp="text_filter(this)" autocomplete="off">
                      </div>
                    </div>
					</div>
					<div class="form-group" style=" margin-top:-15px;">
                      <label class="col-sm-3 control-label">Mobile No </label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="mobile_no" name="mobile_no" value="{$smarty.post.mobile_no}" placeholder="Mobile No" maxlength="10" tabindex="7" onKeyUp="numericFilter(this);clear_err_mobile(this.id);"  onBlur="chk_exist_mob(this);" autocomplete="off">
                      </div>
					 <input type="button" class="btn btn-danger btn-xs" value="ADD MOBILE"  onClick="add_more_mobile();">
                    </div>
					<div class="form-group" id="hdn_mobile2" style="display:none;">
                      <label class="col-sm-3 control-label">Mobile No 2 </label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="mobile_no2" name="mobile_no2" value="{$smarty.post.mobile_no2}" maxlength="10" placeholder="Mobile No 2"  onKeyUp="numericFilter(this);clear_err_mobile(this.id);"  onBlur="chk_exist_mob(this);" autocomplete="off">
                      </div>
                    </div>
					<div class="form-group" id="hdn_mobile3" style="display:none;">
                      <label class="col-sm-3 control-label">Mobile No 3</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="mobile_no3" name="mobile_no3" value="{$smarty.post.mobile_no3}" maxlength="10" placeholder="Mobile No 3" onKeyUp="numericFilter(this);clear_err_mobile(this.id);"  onBlur="chk_exist_mob(this);" autocomplete="off">
                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-3 control-label">Address</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="address" name="address" value="{$smarty.post.address}" tabindex="11" placeholder="Address" autocomplete="off">
                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-3 control-label">Area</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="area" name="area" tabindex="13" value="{$smarty.post.area}"  placeholder="Area" autocomplete="off" onKeyUp="text_filter(this);">
                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-3 control-label">Pincode</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="pincode" name="pincode" maxlength="6" tabindex="15" value="{$smarty.post.pincode}" placeholder="Pincode" onKeyUp="numericFilter(this);" onBlur="chk_exist_pin(this);" autocomplete="off">
                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-3 control-label">Designation</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="designation" name="designation" value="{$smarty.post.designation}" tabindex="17" placeholder="Designation" onKeyUp="text_filter(this)" autocomplete="off">
                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-3 control-label">Email Id</label>
                      <div class="col-sm-5">
                        <input type="email" class="form-control" id="mail_id" name="mail_id" value="{$smarty.post.mail_id}" placeholder="Email Id" tabindex="19" onKeyUp="clear_err_email_id();" autocomplete="off" >
                      </div>
					  <input type="button" class="btn btn-danger btn-xs" value="ADD MAIL"  onClick="add_more_email();">
					   </div> 
					   <div class="form-group" id="hdn_email2" style="display:none">
                      <label class="col-sm-3 control-label">Email Id 2</label>
                      <div class="col-sm-5">
                        <input type="email" class="form-control" id="mail_id1" name="mail_id1" value="{$smarty.post.mail_id1}" placeholder="Email Id 1"  onKeyUp="clear_err_email_id();"  autocomplete="off">
                      </div>
					  </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Service Tax</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="service_tax" name="service_tax" value="{$smarty.post.service_tax}" tabindex="21" placeholder="Service Tax" autocomplete="off">
                      </div>
                    </div>
					 <div class="form-group">
                      <label class="col-sm-3 control-label">Tin No</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="tin_no" name="tin_no" value="{$smarty.post.tin_no}" tabindex="23" placeholder="Tin No" autocomplete="off">
                      </div>
                    </div>
					</div>
					<!--**********************************************************-->
                      <div class="col-md-6">
					  <div class="form-group">
					  <p id="error_cmp_name" align="center" style="color: #FF0000;"></p>	
                      <label class="col-sm-3 control-label">Company Name</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="company_name" name="company_name" value="{$smarty.post.company_name}" tabindex="2"  placeholder="Vendor Company Name" autocomplete="off" onKeyUp="clear_err_name_of_cmp();text_filter(this);" onBlur="chk_exist_cmp(this);">
                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-3 control-label">DOB</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="d_o_b" name="d_o_b" value="{$smarty.post.d_o_b}"  placeholder="Date" onClick="doOnLoad();" tabindex="6" readonly="true"  autocomplete="Off">
                      </div>
					  
					  <a href="#"><img id="calendar_icon1" src="codebase/calendar.png"></a>
                    </div>
					<div class="form-group">
                      <label class="col-sm-3 control-label">Phone No</label>
					    <div class="col-sm-2">
					    <input type="text" class="form-control" id="area_code" name="area_code" value="{$smarty.post.area_code}" placeholder="Area Code" tabindex="8" onKeyUp="numericFilter(this);" autocomplete="off" maxlength="6">
					  </div>
                      <div class="col-sm-2">
                        <input type="text" class="form-control" id="phone_no" name="phone_no" value="{$smarty.post.phone_no}" placeholder="Phone No" tabindex="9"onKeyUp="numericFilter(this);" autocomplete="off" style="margin-left:-23px;" maxlength="10" >
                      </div>
                      <div class="col-sm-2">
                        <input type="text" class="form-control" id="extension" name="extension" value="{$smarty.post.extension}" placeholder="Extension" tabindex="10" onKeyUp="numericFilter(this);" autocomplete="off" style="margin-left:-46px;" maxlength="4">
                       </div>
					    
					 <div class="col-sm-2">
					  <input type="button" class="btn btn-danger btn-xs" value="ADD PHONE"  onClick="add_more_phone();" style="margin-left:-55px;">
					   </div>
					   </div>
					   <div class="form-group" id="hdn_phone2" style="display:none;">
                      <label class="col-sm-3 control-label">Phone No 1</label>
					  <div class="col-sm-2">
					    <input type="text" class="form-control" id="area_code1" name="area_code1" value="{$smarty.post.area_code1}" placeholder="Area Code 1"  onKeyUp="numericFilter(this);" autocomplete="off" maxlength="6" >
					  </div>
                      <div class="col-sm-2">
                        <input type="text" class="form-control" id="phone_no1" name="phone_no1" value="{$smarty.post.phone_no1}" placeholder="Phone No 1"  onKeyUp="numericFilter(this);" autocomplete="off" style="margin-left:-23px;" maxlength="10">
                      </div>
                      <div class="col-sm-2">
                        <input type="text" class="form-control" id="extension1" name="extension1" value="{$smarty.post.extension1}" placeholder="extension 1"  onKeyUp="numericFilter(this);" autocomplete="off" style="margin-left:-46px;" maxlength="4">
                       </div>
					   </div>
					<div class="form-group">
                      <label class="col-sm-3 control-label">Address1</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="address1" name="address1" value="{$smarty.post.address1}" tabindex="12" placeholder="Address1" autocomplete="off">
                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-3 control-label">City</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="city" name="city" value="{$smarty.post.city}" tabindex="14" placeholder="City" onKeyUp="text_filter(this)" autocomplete="off">
                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-3 control-label">Landmark</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="landmark" name="landmark" value="{$smarty.post.landmark}" tabindex="16" placeholder="Landmark" autocomplete="off">
                      </div>
                    </div>
					
					 <div class="form-group">
                      <label class="col-sm-3 control-label">Created By</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="created_by" name="created_by" readonly="true" value="{$smarty.session.UserName}" tabindex="18" autocomplete="off">
						<input type="hidden" class="form-control" id="created_date" name="created_date" value="{$smarty.now|date_format:'%Y-%m-%d'}" tabindex="8" placeholder="Date" >
						<input type="hidden" class="form-control" id="created_time" name="created_time" value="{$smarty.now|date_format:'%I:%M:%S %p'}" tabindex="20" placeholder="Time">
						 <input type="hidden" class="form-control" id="timestamp_value" name="timestamp_value" value="{$smarty.now|date_format:'%Y-%m-%d &amp; %I:%M:%S %p'}" tabindex="22" placeholder="Timestamp Value">
                      </div>
                      </div>
					  <div class="form-group">
                      <label class="col-sm-3 control-label">Cst No</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="cst_no" name="cst_no" value="{$smarty.post.cst_no}" tabindex="20" placeholder="Cst No" autocomplete="off">
                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-3 control-label">Remarks</label>
                      <div class="col-sm-5">
                       <textarea class="form-control" id="remarks" name="remarks" value="{$smarty.post.remarks}" tabindex="22" placeholder="Remarks" autocomplete="off"></textarea>
                      </div>
					   
                    </div>
					</div>
                    </div>
					 <div class="box-footer"><center>
                     <input type="button" class="btn btn-info pull-center" value="ADD VENDOR" onClick="validate_fields();" >&nbsp;&nbsp;
                     <input type="button" class="btn btn-info pull-center" value="CANCEL" onClick="GoBack();" ></center>
                  </div>
                  <!-- /.box-body -->
                </form>
				</div>
				
				</div>
			
				</section>
				 <div class="control-sidebar-bg"></div>
    </div>
	
  </body>
</html>

