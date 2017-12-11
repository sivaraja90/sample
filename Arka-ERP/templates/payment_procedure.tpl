{include file="left.tpl"}
{literal}
<script type="text/javascript" src='./dhtmlxMessage/codebase/dhtmlxmessage.js'></script>
	<script type='text/javascript' src='./auto-complete/jquery-1.3.2.js'></script>
	<script type='text/javascript' src='./auto-complete/jquery.metadata.js'></script>
	<script type='text/javascript' src='./auto-complete/jquery.auto-complete.js?<?= mktime() ?>'></script>
	<script type='text/javascript' src='./auto-complete/js.js?<?= mktime() ?>'></script>
	<link rel='stylesheet' type='text/css' href='auto-complete/jquery.auto-complete.css?<?= mktime() ?>' />
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



function chk_exist_email(email)
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

function activate_snz_elemnt(data)
{
		//	myCalendar = new dhtmlXCalendarObject({input: "crdate", button: "calendar_icon"});
			myCalendar = new dhtmlXCalendarObject({input: "snooze_date", button: "calendar_icon1"});
			myCalendar1 = new dhtmlXCalendarObject({input: "closedDate", button: "follow_up_icon1"});
		if(data=="Pending")
		{
		 document.getElementById("snooze_date").disabled=false;
		 document.getElementById("snooze_hour").disabled=false;
		 document.getElementById("snooze_minute").disabled=false;
		 document.getElementById("meridian").disabled=false;
		 document.getElementById("closedDate").disabled=true;
		 document.getElementById("closed_hour").disabled=true;
		 document.getElementById("closed_minute").disabled=true;
		 document.getElementById("closed_meridian").disabled=true;
		 document.getElementById('follow_up_icon1').style.display='none';
		 document.getElementById("assign_to").disabled=false;
		 document.getElementById("requirements").disabled=false;
		 document.getElementById("others").disabled=false;
		 document.getElementById('calendar_icon1').style.display='inherit';
		 document.getElementById('search_icon').style.display='inherit';
		 document.getElementById("requirements").disabled=false;
		document.getElementById("pro_purchase").disabled=false;
		document.getElementById("pro_search_icon").style.display='inline';
//		 myCalendar.setPosition("right");
		 
		}
		else if(data=="Closed With Order")
		{
		 document.getElementById("snooze_date").disabled=false;
		 document.getElementById("snooze_hour").disabled=false;
		 document.getElementById("snooze_minute").disabled=false;
		 document.getElementById("meridian").disabled=false;
		 document.getElementById("closedDate").disabled=true;
		 document.getElementById("closed_hour").disabled=true;
		 document.getElementById("closed_minute").disabled=true;
		 document.getElementById("closed_meridian").disabled=true;
		 document.getElementById('follow_up_icon1').style.display='none';
		 document.getElementById("assign_to").disabled=false;
		 document.getElementById("requirements").disabled=false;
		 document.getElementById("others").disabled=false;
		 document.getElementById('calendar_icon1').style.display='inherit';
		 document.getElementById('search_icon').style.display='inherit';
		 document.getElementById("competitor").readOnly=false;
//		 myCalendar.setPosition("right");
		 
		}
		else if(data=="Closed With Order and Accounts")
		{
		 document.getElementById("snooze_date").disabled=true;
		 document.getElementById("snooze_hour").disabled=true;
		 document.getElementById("snooze_minute").disabled=true;
		 document.getElementById("meridian").disabled=true;
		 document.getElementById("assign_to").disabled=true;
		 document.getElementById("closedDate").disabled=false;
		 document.getElementById("closed_hour").disabled=false;
		 document.getElementById("closed_minute").disabled=false;
		 document.getElementById("closed_meridian").disabled=false;
		 document.getElementById('follow_up_icon1').style.display='inline';
		 document.getElementById("requirements").disabled=false;
		 document.getElementById("others").disabled=false;
		 document.getElementById('calendar_icon1').style.display='none';
		 document.getElementById('search_icon').style.display='inherit';
		 document.getElementById("competitor").readOnly=false;
//		 myCalendar.setPosition("right");
		 
		}
		else if(data=="Closed Without Order")
		{
		 document.getElementById("snooze_date").disabled=true;
		 document.getElementById("snooze_hour").disabled=true;
		 document.getElementById("snooze_minute").disabled=true;
		 document.getElementById("meridian").disabled=true;
		 document.getElementById("closedDate").disabled=false;
		 document.getElementById("closed_hour").disabled=false;
		 document.getElementById("closed_minute").disabled=false;
		 document.getElementById("closed_meridian").disabled=false;
		 document.getElementById('follow_up_icon1').style.display='inline';
		 document.getElementById("assign_to").disabled=false;
		 document.getElementById("requirements").disabled=false;
		 document.getElementById("others").disabled=false;
		 document.getElementById('calendar_icon1').style.display='none';
		 document.getElementById('search_icon').style.display='inherit';
		 document.getElementById("competitor").readOnly=false;
//		 myCalendar.setPosition("right");
		 
		}
		else if(data=="Not Intrested")
		{
		 document.getElementById("snooze_date").disabled=true;
		 document.getElementById("snooze_hour").disabled=true;
		 document.getElementById("snooze_minute").disabled=true;

		 document.getElementById("meridian").disabled=true;
		 document.getElementById("closedDate").disabled=false;
		 document.getElementById("closed_hour").disabled=false;
		 document.getElementById("closed_minute").disabled=false;
		 document.getElementById("closed_meridian").disabled=false;
		 document.getElementById('follow_up_icon1').style.display='inline';
		 document.getElementById("assign_to").disabled=false;
		 document.getElementById("requirements").disabled=false;
		 document.getElementById("others").disabled=false;
		 document.getElementById('calendar_icon1').style.display='none';
		 document.getElementById('search_icon').style.display='inherit';
		 document.getElementById("competitor").readOnly=false;
//		 myCalendar.setPosition("right");
		 
		}
		
}		

function copy_quote_val()
{
var checked_status=document.getElementById("same_as_quote").checked;
		if(checked_status==true)
		{
		document.getElementById("estimate_value").value=document.getElementById("quote_value").value;
		}
		else
		{
		document.getElementById("estimate_value").value="";
		}
return true;
}

/*function Check_Company_Name()
{
var cmp_name=document.getElementById("company_name").value;
document.getElementById("error_cmp_name").innerHTML = cmp_name+" Already Exists";
document.getElementById("company_name").focus();
document.getElementById("company_name").value="";
return false;
}*/

function clear_err_name_of_cmp()
{
document.getElementById("error_cmp_name").innerHTML = "";
}


/*function Check_Mobile_Name()
{
var mobile_no=document.getElementById("mobile").value;
document.getElementById("error_mobile_no").innerHTML = mobile_no+" Already Exists";
document.getElementById("mobile").focus();
return false;
}*/

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
			myCalendar = new dhtmlXCalendarObject({input: "d_o_b", button: "calendar_icon1"});
			retrieve_select_bxs();
		}
		
function runMe()
{
 document.cookie = name+"=index%3d1; expires=whenever;path=/";
 window.history.back()
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
		
		var fields=["created_by_whom","name_of_caller","designation","email_id","place","address1","city","enquiry_through","pincode","call_response","company_name","area","order_status","assign_to"];
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
											
						if(i==3)
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
						if(i==8)
						{
								if (current_iteration.length<6 || current_iteration.length>6) 
								{
								dhtmlx.alert({
								title: "Error !",
								type:"alert-error",
								text: "Pincode Must be 6 digits",	
											});									
									return false;
								}						
						}
				if(i==12)
						{
						   if(current_iteration=="Pending")
						   {
						      if(document.getElementById("snooze_date").value=="" || document.getElementById("snooze_hour").value=="" || document.getElementById("snooze_minute").value=="" || document.getElementById("meridian").value=="")
							  {
							  
							    dhtmlx.alert({
								title: "Error !",
								type:"alert-error",
								text: "Please select Snooze Details Properly",	
											});									
									return false;
							  }
							  if(document.getElementById("assign_to").value=="")
							  {
							  dhtmlx.alert({
								title: "Error !",
								type:"alert-error",
								text: "Assign To Should not be Blank",	
											});									
									return false;
							  }
							  if(document.getElementById("requirements").value=="")
							  {
							  dhtmlx.alert({
								title: "Error !",
								type:"alert-error",
								text: "Requirements Should not be Blank",	
											});									
									return false;
							  }							  
						   }
						
						}		
						
				
				}	
				if((document.getElementById("mobile").value =="") && (document.getElementById("phone").value==""))
				{
							dhtmlx.alert({
								title: "Error !",
								type:"alert-error",
								text: "Mobile or Phone Number any one is must",	
											});									
									return false;
				}
				if(document.getElementById("mobile").value !="")
				{		
					if (document.getElementById("mobile").value.length<10  || document.getElementById("mobile").value.length>10)
								{
								dhtmlx.alert({
								title: "Error !",
								type:"alert-error",
								text: "Mobile Number Must be 10 digits",	
											});									
									return false;
								}
				}
				if(document.getElementById("phone").value !="")
				{
					if (document.getElementById("phone").value.length<8 || document.getElementById("phone").value.length>8) 
								{
								dhtmlx.alert({
								title: "Error !",
								type:"alert-error",
								text: "Phone Number Must be 8 digits",	
											});									
									return false;
								}	
				}	

			  FormName		= document.add_customer;
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
		  alert("Sorry You cant create more than 3 Mobile Nos");
		  return true;
	  }
}

function add_more_phone()
{
  var cnt_phone=document.getElementById("phone_fld_cnt").value;
	  if(cnt_phone!=3)
	  {
		  document.getElementById("phone_fld_cnt").value=parseInt(cnt_phone)+1;
		  document.getElementById("hdn_phone"+cnt_phone).removeAttribute("style");
		//  document.getElementById("hdn_adjacent"+cnt_phone).removeAttribute("style");
	  }
	  else
	  {
		  alert("Sorry You cant create more than 2 Phone Nos");
		  return true;
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
		  alert("Sorry You cant create more than 2 Email Id");
		  return true;
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
            <small><a href="customer_list.php"><i class="fa fa-list">
			List Customer</i></a></small>&ensp;&ensp;&ensp;
			<small><a href="customer_reg.php"><i class="fa fa-user-plus">
			Create Customer</i></a></small>
          </h4>         
          <!--<ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Forms</a></li>
            <li class="active">Advanced Elements</li>
          </ol>-->
        </section>
        <!-- Main content -->
        <section class="content">
          <div class="box box-info">
            <div class="box-header with-border" align="center">
              <h3 class="box-title">Payment Procedure</h3>
              <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
              </div>
            </div><!-- /.box-header -->
			
		<form class="form-horizontal">
		<input type="hidden" name="hdAction" />
					<input type="hidden" id="c_id" name="c_id" size="25" value="{$c_id}" readonly="true" >
					<input type="hidden" id="mobile_fld_cnt" name="mobile_fld_cnt"  value="2"  >
					<input type="hidden" id="phone_fld_cnt" name="phone_fld_cnt"  value="2"  >
					<input type="hidden" id="email_fld_cnt" name="email_fld_cnt"  value="2"  >
					<input type="hidden" id="hdn_salutation" name="hdn_salutation" value="{$smarty.post.salutaion}">
					<input type="hidden" id="hdn_order_status" name="hdn_order_status" value="{$smarty.post.order_status}">
					<input type="hidden" id="hdn_customer_status" name="hdn_customer_status" value="{$smarty.post.customer_status}">
					<input type="hidden" id="hdn_customer_type" name="hdn_customer_type" value="{$smarty.post.customer_type}">

                  <div class="box-body">
				   <div class="col-md-6">
                    <div class="form-group">			 
                      <label class="col-sm-3 control-label">Created By</label>
                      <div class="col-sm-5">
                        <input type="text"  class="form-control" id="created_by" name="created_by" tabindex="1"  placeholder="Created By">
                      </div><font class="error" color="#f56954"><b>*</b></font>
                    </div>
					<div class="form-group">
                      <label class="col-sm-3 control-label">Company Name</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" name="company_name" id="company_name"   tabindex="3" placeholder="Company Name">
                      </div> <font class="error" color="#f56954"><b>*</b></font>
                    </div>
					<div class="form-group">
                      <label class="col-sm-3 control-label">Customer Name</label>
                      <div class="col-sm-5">
					 <!-- <select  id="combo_customer_name" name="combo_customer_name"  onChange="split_cnt_dtls(this.value)" tabindex="5">
						<option value="0" selected="selected"> -- Select Customer Name -- </option>
						</select>-->
                        <input type="text" class="form-control" id="customer_name"  name="customer_name" tabindex="5" placeholder="Customer Name">
                      </div> <font class="error" color="#f56954"><b>*</b></font> <input class="btn btn-danger btn-xs " type="button" value="ADD CONTACT"  />
                    </div>
					 <div class="form-group">
                      <label class="col-sm-3 control-label">Mobile No </label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="mobile_no" name="mobile_no" placeholder="Mobile No" tabindex="7" onKeyUp="numericFilter(this);clear_err_mobile(this.id);"  onBlur="chk_exist_mob(this);">
                      </div>
					&nbsp;<font class="error" color="#f56954"><b>*</b></font>
					  <input type="button" class="btn btn-danger btn-xs" value="ADD MOBILE"  onClick="add_more_mobile();">
                    </div>
					<div class="form-group" id="hdn_mobile2" style="display:none;">
                      <label class="col-sm-3 control-label">Mobile No 2 </label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="mobile_no2" name="mobile_no2" placeholder="Mobile No 2" tabindex="7" onKeyUp="numericFilter(this);clear_err_mobile(this.id);"  onBlur="chk_exist_mob(this);">
                      </div>
                    </div>
					<div class="form-group" id="hdn_mobile3" style="display:none;">
                      <label class="col-sm-3 control-label">Mobile No 3</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="mobile_no3" name="mobile_no3" placeholder="Mobile No 3" tabindex="7" onKeyUp="numericFilter(this);clear_err_mobile(this.id);"  onBlur="chk_exist_mob(this);">
                    </div>
					</div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Phone No</label>
                      <div class="col-sm-2">
                        <input type="text" class="form-control" id="phone_no" name="phone_no" placeholder="Phone No" tabindex="14"onKeyUp="numericFilter(this);" >
                      </div>
					  <div class="col-sm-2">
					    <input type="text" class="form-control" id="area_code" name="area_code" placeholder="Area Code" tabindex="10" onKeyUp="numericFilter(this);" >
					  </div>
                      <div class="col-sm-2">
                        <input type="text" class="form-control" id="extension" name="extension" placeholder="Extension" tabindex="10" onKeyUp="numericFilter(this);" >
                       </div>
					 <font class="error" color="#f56954"><b>*</b></font>
					<input type="button" class="btn btn-danger btn-xs" value="ADD PHONE"  onClick="add_more_phone();">
					   </div>
					   <div class="form-group" id="hdn_phone2" style="display:none;">
                      <label class="col-sm-3 control-label">Phone No 1</label>
                      <div class="col-sm-2">
                        <input type="text" class="form-control" id="phone_no1" name="phone_no1" placeholder="Phone No 1" tabindex="14"onKeyUp="numericFilter(this);" >
                      </div>
					  <div class="col-sm-2">
					    <input type="text" class="form-control" id="area_code1" name="area_code1" placeholder="Area Code 1" tabindex="10" onKeyUp="numericFilter(this);" >
					  </div>
                      <div class="col-sm-2">
                        <input type="text" class="form-control" id="extension1" name="extension1" placeholder="extension 1" tabindex="10" onKeyUp="numericFilter(this);" >
                       </div>
					   </div>
					 <div class="form-group">
                      <label class="col-sm-3 control-label">Area</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="area" name="area" tabindex="15" placeholder="Area">
                      </div><font class="error" color="#f56954"><b>*</b></font>
					  <input type="button" class="btn btn-danger btn-xs" value="ADD ADDRESS" >
                    </div>
					<div class="form-group">
                      <label class="col-sm-3 control-label">Address</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" name="address1" id="address1"  tabindex="17" placeholder="Address">
                      </div><font class="error" color="#f56954"><b>*</b></font>
                    </div>
					 <div class="form-group">
                      <label class="col-sm-3 control-label">City </label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" name="city" id="city"  tabindex="19" placeholder="Date">
                      </div><font class="error" color="#f56954"><b>*</b></font>
                    </div>
					 <div class="form-group">
                      <label class="col-sm-3 control-label">Pincode</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" name="pincode" id="pincode"    tabindex="21" placeholder="Pincode">
                      </div><font class="error" color="#f56954"><b>*</b></font>
                    </div>
					 <div class="form-group">
                      <label class="col-sm-3 control-label">Remarks</label>
                      <div class="col-sm-5">
                        <textarea class="form-control" name="remarks" id="remarks"  rows="5" cols="53" tabindex="23" placeholder="Remarks"></textarea>
                      </div><font class="error" color="#f56954"><b>*</b></font>
                    </div>
					<!--<div class="form-group">
                      <label class="col-sm-3 control-label">Department</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="department" name="department" tabindex="17" placeholder="Department" >
                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-3 control-label">Mobile No</label>
					  
					<!-- <input type="button" value="Add" onclick="var e = document.createElement('input'); e.type='text'; e.name = 'added'+this.rel; this.rel = parseFloat(this.rel)+1; this.parentNode.appendChild(e); return false;" />
-->
					 <!-- <button type="submit" >ADD </button>-->
					 <!--<button type="button" onClick="addInput(this.form);">Add</button>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="mobile_1" name="mobile_1" tabindex="19" placeholder="Mobile No">&nbsp;
						 <input type="text" class="hide"  id="mobile_1" name="mobile_2" tabindex="19" placeholder="Mobile No1" style="font-size:12px; padding-left:10px; width:193px;"> &nbsp;
						  <input type="text" class="hide" id="mobile_1" name="mobile_3" tabindex="19" placeholder="Mobile No2" style="font-size:12px; padding-left:10px; width:193px;"> 
                      </div>
                    </div>-->
					<!--<div class="form-group">
                      <label class="col-sm-3 control-label">Mobile No2</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="mobile_2" name="mobile_2" tabindex="21" placeholder="Mobile No">
                      </div>
                    </div>-->
					<!--<div class="form-group">
                      <label class="col-sm-3 control-label">Personal Mail</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="personal_mail" name="personal_mail" tabindex="23" placeholder="Personal Mail">
                      </div>
                    </div><div class="form-group">
                      <label class="col-sm-3 control-label">Company Mail</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="company_mail" name="company_mail" tabindex="25" placeholder="Company Mail">
                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-3 control-label">Address1</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="address1" name="address1" tabindex="27" placeholder="Address1">
                      </div>
                    </div><div class="form-group">
                      <label class="col-sm-3 control-label">Address2</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="address2" name="address2" tabindex="29" placeholder="Address2">
                      </div>
                    </div><div class="form-group">
                      <label class="col-sm-3 control-label">Area</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="area" name="area" tabindex="31" placeholder="Area">
                      </div>
                    </div>-->
					</div>
					<!--**********************************************************-->
                     <div class="col-md-6">
					 <div class="form-group">
                      <label class="col-sm-3 control-label">Created Date</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="created_date" name="created_date" tabindex="2" placeholder="Date">
                      </div><font class="error" color="#f56954"><b>*</b></font>
                    </div>
                    <div class="form-group">			 
                      <label class="col-sm-3 control-label">Invoice Submission Procedure</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="inv_sub_procedure" name="inv_sub_procedure" tabindex="4" placeholder="Procedure">
                      </div><font class="error" color="#f56954"><b>*</b></font>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Payment Mode</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="payment_mode" name="payment_mode" tabindex="6" placeholder="Payment Mode">
                      </div><font class="error" color="#f56954"><b>*</b></font>
                    </div>
					 <div class="form-group">
                      <label class="col-sm-3 control-label">Vendor Code </label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="vendor_code" name="vendor_code"  tabindex="8" placeholder="Vendor Code ">
                      </div><font class="error" color="#f56954"><b>*</b></font>
                    </div> 
					<div class="form-group">
                      <label class="col-sm-3 control-label">Website Registered</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="website_registerd" name="website_registerd" tabindex="10" placeholder="Website Registered">
                      </div><font class="error" color="#f56954"><b>*</b></font>
                    </div>  
					<div class="form-group">
                      <label class="col-sm-3 control-label">CST No</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="cst_no" name="cst_no" tabindex="12" placeholder="CST No">
                      </div><font class="error" color="#f56954"><b>*</b></font>
                    </div> 
					<div class="form-group">
                      <label class="col-sm-3 control-label">VAT No</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="vat_no" name="vat_no" tabindex="14" placeholder="VAT No">
                      </div><font class="error" color="#f56954"><b>*</b></font>
                    </div>
					<div class="form-group">
                      <label class="col-sm-3 control-label">TIN No</label>
                      <div class="col-sm-5">
                        <input type="password" class="form-control" id="tin_no" name="tin_no" tabindex="16" placeholder="TIN No">
                      </div><font class="error" color="#f56954"><b>*</b></font>
                    </div>
					<div class="form-group">
                      <label class="col-sm-3 control-label">PAN No</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="pan_no" name="pan_no" tabindex="18" placeholder="PAN No">
                      </div><font class="error" color="#f56954"><b>*</b></font>
                    </div>
					<div class="form-group">
                      <label class="col-sm-3 control-label">VAT Excemption</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="vat_excemption" name="vat_excemption" tabindex="20" placeholder="VAT Excemption">
                      </div><font class="error" color="#f56954"><b>*</b></font>
                    </div>
					<div class="form-group">
                      <label class="col-sm-3 control-label">Excemption Letter</label>
                      <div class="col-sm-5">
                        <input type="file"  id="excemption_letter" name="excemption_letter" tabindex="22" placeholder="Excemption Letter">
                      </div><font class="error" color="#f56954"><b>*</b></font>
					  </div>
                   <!-- </div><div class="form-group">
                      <label class="col-sm-3 control-label">Created Date</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="created_date" name="created_date" tabindex="24" placeholder="Date">
                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-3 control-label">Created Time</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="created_time" name="created_time" tabindex="26" placeholder="Time">
                      </div>
                    </div><div class="form-group">
                      <label class="col-sm-3 control-label">Remarks</label>
                      <div class="col-sm-5" >
                        <input type="text" class="form-control" id="remarks" name="remarks" tabindex="28" placeholder="Remarks" >
                      </div>
                    </div>-->
					<!--<div class="form-group">
                      <label class="col-sm-3 control-label">Status</label>
                      <div class="col-sm-5">
                        <input type="hidden" class="form-control" id="status" name="status" tabindex="30" placeholder="Status">
                      </div>
                    </div>-->
					</div>
	                  </div>
				  <div class="box-footer"><center>
                    <button type="submit" class="btn btn-info " >PAYMENT</button>&nbsp;&nbsp;	
                    <button type="submit" class="btn btn-info">CANCEL</button><center>
                  </div>
				  </div>
				  <!-- /.box-body -->
                  <!--<div class="box-footer">
                    <button type="submit" class="btn btn-default">Add Employee</button>
                    <button type="submit" class="btn btn-info pull-right">Sign in</button>
                  </div>--><!-- /.box-footer -->
                </form>
<!--            <div class="box-footer">
              Visit <a href="https://select2.github.io/">Select2 documentation</a> for more examples and information about the plugin.
            </div>-->
         <!-- /.box -->

          <!--<div class="row">
            <div class="col-md-6">

              <div class="box box-danger">
                <div class="box-header">
                  <h3 class="box-title">Input masks</h3>
                </div>
                <div class="box-body">
                   Date dd/mm/yyyy 
                  <div class="form-group">
                    <label>Date masks:</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
                    </div> /.input group 
                  </div> /.form group 

                   Date mm/dd/yyyy 
                  <div class="form-group">
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input type="text" class="form-control" data-inputmask="'alias': 'mm/dd/yyyy'" data-mask>
                    </div> /.input group 
                  </div> /.form group 

                   phone mask 
                  <div class="form-group">
                    <label>US phone mask:</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-phone"></i>
                      </div>
                      <input type="text" class="form-control" data-inputmask='"mask": "(999) 999-9999"' data-mask>
                    </div> /.input group 
                  </div> /.form group 

                   phone mask 
                  <div class="form-group">
                    <label>Intl US phone mask:</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-phone"></i>
                      </div>
                      <input type="text" class="form-control" data-inputmask="'mask': ['999-999-9999 [x99999]', '+099 99 99 9999[9]-9999']" data-mask>
                    </div> /.input group 
                  </div> /.form group 

                   IP mask 
                  <div class="form-group">
                    <label>IP mask:</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-laptop"></i>
                      </div>
                      <input type="text" class="form-control" data-inputmask="'alias': 'ip'" data-mask>
                    </div> /.input group 
                  </div> /.form group 

                </div> /.box-body 

              </div> /.box 

              <div class="box box-info">
                <div class="box-header">
                  <h3 class="box-title">Color & Time Picker</h3>
                </div>
                <div class="box-body">
                   Color Picker 
                  <div class="form-group">
                    <label>Color picker:</label>
                    <input type="text" class="form-control my-colorpicker1">
                  </div> /.form group 

                   Color Picker 
                  <div class="form-group">
                    <label>Color picker with addon:</label>
                    <div class="input-group my-colorpicker2">
                      <input type="text" class="form-control">
                      <div class="input-group-addon">
                        <i></i>
                      </div>
                    </div> /.input group 
                  </div> /.form group 

                   time Picker 
                  <div class="bootstrap-timepicker">
                    <div class="form-group">
                      <label>Time picker:</label>
                      <div class="input-group">
                        <input type="text" class="form-control timepicker">
                        <div class="input-group-addon">
                          <i class="fa fa-clock-o"></i>
                        </div>
                      </div> /.input group 
                    </div> /.form group 
                  </div>
                </div> /.box-body 
              </div> /.box 

            </div> /.col (left) 
            <div class="col-md-6">
              <div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title">Date picker</h3>
                </div>
                <div class="box-body">
                   Date range 
                  <div class="form-group">
                    <label>Date range:</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input type="text" class="form-control pull-right" id="reservation">
                    </div> /.input group 
                  </div> /.form group 

                   Date and time range 
                  <div class="form-group">
                    <label>Date and time range:</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-clock-o"></i>
                      </div>
                      <input type="text" class="form-control pull-right" id="reservationtime">
                    </div> /.input group 
                  </div> /.form group 

                   Date and time range 
                  <div class="form-group">
                    <label>Date range button:</label>
                    <div class="input-group">
                      <button class="btn btn-default pull-right" id="daterange-btn">
                        <i class="fa fa-calendar"></i> Date range picker
                        <i class="fa fa-caret-down"></i>
                      </button>
                    </div>
                  </div> /.form group 

                </div> /.box-body 
              </div> /.box 

               iCheck 
              <div class="box box-success">
                <div class="box-header">
                  <h3 class="box-title">iCheck - Checkbox &amp; Radio Inputs</h3>
                </div>
                <div class="box-body">
                   Minimal style 

                   checkbox 
                  <div class="form-group">
                    <label>
                      <input type="checkbox" class="minimal" checked>
                    </label>
                    <label>
                      <input type="checkbox" class="minimal">
                    </label>
                    <label>
                      <input type="checkbox" class="minimal" disabled>
                      Minimal skin checkbox
                    </label>
                  </div>

                   radio 
                  <div class="form-group">
                    <label>
                      <input type="radio" name="r1" class="minimal" checked>
                    </label>
                    <label>
                      <input type="radio" name="r1" class="minimal">
                    </label>
                    <label>
                      <input type="radio" name="r1" class="minimal" disabled>
                      Minimal skin radio
                    </label>
                  </div>

                   Minimal red style 

                   checkbox 
                  <div class="form-group">
                    <label>
                      <input type="checkbox" class="minimal-red" checked>
                    </label>
                    <label>
                      <input type="checkbox" class="minimal-red">
                    </label>
                    <label>
                      <input type="checkbox" class="minimal-red" disabled>
                      Minimal red skin checkbox
                    </label>
                  </div>

                   radio 
                  <div class="form-group">
                    <label>
                      <input type="radio" name="r2" class="minimal-red" checked>
                    </label>
                    <label>
                      <input type="radio" name="r2" class="minimal-red">
                    </label>
                    <label>
                      <input type="radio" name="r2" class="minimal-red" disabled>
                      Minimal red skin radio
                    </label>
                  </div>

                   Minimal red style 

                   checkbox 
                  <div class="form-group">
                    <label>
                      <input type="checkbox" class="flat-red" checked>
                    </label>
                    <label>
                      <input type="checkbox" class="flat-red">
                    </label>
                    <label>
                      <input type="checkbox" class="flat-red" disabled>
                      Flat green skin checkbox
                    </label>
                  </div>

                   radio 
                  <div class="form-group">
                    <label>
                      <input type="radio" name="r3" class="flat-red" checked>
                    </label>
                    <label>
                      <input type="radio" name="r3" class="flat-red">
                    </label>
                    <label>
                      <input type="radio" name="r3" class="flat-red" disabled>
                      Flat green skin radio
                    </label>
                  </div>
                </div> /.box-body 
                <div class="box-footer">
                  Many more skins available. <a href="http://fronteed.com/iCheck/">Documentation</a>
                </div>
              </div> /.box 
            </div> /.col (right) 
          </div>--><!-- /.row -->

<!--        </section> /.content 
      </div> /.content-wrapper 
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 2.3.0
        </div>
        <strong>Copyright &copy; 2014-2015 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights reserved.
      </footer>

       Control Sidebar 
      <aside class="control-sidebar control-sidebar-dark">
         Create the tabs 
        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
          <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
          <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
        </ul>
         Tab panes 
        <div class="tab-content">
           Home tab content 
          <div class="tab-pane" id="control-sidebar-home-tab">
            <h3 class="control-sidebar-heading">Recent Activity</h3>
            <ul class="control-sidebar-menu">
              <li>
                <a href="javascript::;">
                  <i class="menu-icon fa fa-birthday-cake bg-red"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>
                    <p>Will be 23 on April 24th</p>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <i class="menu-icon fa fa-user bg-yellow"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>
                    <p>New phone +1(800)555-1234</p>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>
                    <p>nora@example.com</p>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <i class="menu-icon fa fa-file-code-o bg-green"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>
                    <p>Execution time 5 seconds</p>
                  </div>
                </a>
              </li>
            </ul> /.control-sidebar-menu 

            <h3 class="control-sidebar-heading">Tasks Progress</h3>
            <ul class="control-sidebar-menu">
              <li>
                <a href="javascript::;">
                  <h4 class="control-sidebar-subheading">
                    Custom Template Design
                    <span class="label label-danger pull-right">70%</span>
                  </h4>
                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <h4 class="control-sidebar-subheading">
                    Update Resume
                    <span class="label label-success pull-right">95%</span>
                  </h4>
                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-success" style="width: 95%"></div>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <h4 class="control-sidebar-subheading">
                    Laravel Integration
                    <span class="label label-warning pull-right">50%</span>
                  </h4>
                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <h4 class="control-sidebar-subheading">
                    Back End Framework
                    <span class="label label-primary pull-right">68%</span>
                  </h4>
                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
                  </div>
                </a>
              </li>
            </ul> /.control-sidebar-menu 

          </div> /.tab-pane 
           Stats tab content 
          <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div> /.tab-pane 
           Settings tab content 
          <div class="tab-pane" id="control-sidebar-settings-tab">
            <form method="post">
              <h3 class="control-sidebar-heading">General Settings</h3>
              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Report panel usage
                  <input type="checkbox" class="pull-right" checked>
                </label>
                <p>
                  Some information about this general settings option
                </p>
              </div> /.form-group 

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Allow mail redirect
                  <input type="checkbox" class="pull-right" checked>
                </label>
                <p>
                  Other sets of options are available
                </p>
              </div> /.form-group 

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Expose author name in posts
                  <input type="checkbox" class="pull-right" checked>
                </label>
                <p>
                  Allow the user to show his name in blog posts
                </p>
              </div> /.form-group 

              <h3 class="control-sidebar-heading">Chat Settings</h3>

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Show me as online
                  <input type="checkbox" class="pull-right" checked>
                </label>
              </div> /.form-group 

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Turn off notifications
                  <input type="checkbox" class="pull-right">
                </label>
              </div> /.form-group 

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Delete chat history
                  <a href="javascript::;" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
                </label>
              </div> /.form-group 
            </form>
          </div> /.tab-pane 
        </div>
      </aside>--><!-- /.control-sidebar -->
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
    </div>
  </body>
</html>
