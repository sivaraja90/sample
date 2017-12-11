{include file="left.tpl"}
{literal}
<script type="text/javascript">
function closeit(val){
	parent.document.forms['addEnquiry'].elements['enquiry_through'].value=val;
	document.getElementById("enq_close").data-dismiss="modal";
	
}
</script>
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

<script type="text/javascript">
function closeit(val){
	parent.document.forms['addEnquiry'].elements['enquiry_through'].value=val;
	parent.dhxWins.window("w1").close();
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
</script>
<script>
function doOnLoad() 
			{
			var myCalendar1;
			var myCalendar2;
			myCalendar1 = new dhtmlXCalendarObject({input: "snooze_date", button: "calendar_icon1"});
			myCalendar2 = new dhtmlXCalendarObject({input: "closed_date", button: "calendar_icon2"});
		}
		
</script>
<script>
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
				var fields=["company_name","customer_name","arka_group","enquiry_type","snooze_date","enquiry_through","assign_to","requirement","branch","pg"];

		//var fields=["company_name","customer_name","enquiry_through","enquiry_status","reference_id","assign_to","designation","address","area","requirement","city","pincode","mail_id","branch","pg"];
				
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
						
						if(i==1)
						{
						var customer_name  =  document.getElementById("customer_name").value;
						/*var e = document.getElementById("customer_name");alert(e);
                        var optionSelIndex = e.options[e.selectedIndex].value;alert(optionSelIndex);
                        var optionSelectedText = e.options[e.selectedIndex].text;*/
                         if (customer_name == 0)
						{
						dhtmlx.alert({
								title: "Error !",
								type:"alert-error",
								text: "Please Select Contact Person",
											});
									return false;
						}
						}
						if(i==2)
						{
						var arka_group  =  document.getElementById("arka_group").value;
						if(arka_group=="0")
						{
						dhtmlx.alert({
								title: "Error !",
								type:"alert-error",
								text: "Please Select Arka Group",
											});
									return false;
						}
						}
						if(i==3)
						{
						var enquiry_type  =  document.getElementById("enquiry_type").value;
						if(enquiry_type=="0")
						{
						dhtmlx.alert({
								title: "Error !",
								type:"alert-error",
								text: "Please Select Enquiry Type",
											});
									return false;
						}
						}
						if(i==4)
						{
						var snooze_date  =  document.getElementById("snooze_date").value;
						var customer_name  =  document.getElementById("customer_name").value;
						if(snooze_date=="")
						{
						dhtmlx.alert({
								title: "Error !",
								type:"alert-error",
								text: "Please Enter Snooze Date",
											});
									return false;
						}
						}

                if(i==5)
						{

						var con_ph  =  document.getElementById("phone_no").value;
						var con_mo = document.getElementById("mobile_no").value;
						var mail = document.getElementById("mail_id").value;
								if (con_ph=="" && con_mo=="" && mail=="")
								{
								dhtmlx.alert({
								title: "Error !",
								type:"alert-error",
								text: "Please Enter Mobile No or Phone No or Mail Id",
											});
									return false;
								}
								else
								{

								}
						if(mail!="")
						{

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
						if(i==5)
						{
						var enquiry_through  =  document.getElementById("enquiry_through").value;
						if(enquiry_through=="")
						{
						dhtmlx.alert({
								title: "Error !",
								type:"alert-error",
								text: "Please Enter Enquiry Through",
											});
									return false;
						}
						}
							if(i==6)
						{
						var assign_to  =  document.getElementById("assign_to").value;
						if(assign_to=="")
						{
						dhtmlx.alert({
								title: "Error !",
								type:"alert-error",
								text: "Please Enter Assign To",
											});
									return false;
						}
						}
						if(i==7)
						{
						var requirement  =  document.getElementById("requirement").value;
						if(requirement=="")
						{
						dhtmlx.alert({
								title: "Error !",
								type:"alert-error",
								text: "Please Enter Requirement",
											});
									return false;
						}
						}
						if(i==8)
						{
						var branch  =  document.getElementById("branch").value;
						if(branch=="")
						{
						dhtmlx.alert({
								title: "Error !",
								type:"alert-error",
								text: "Please Enter Branch",
											});
									return false;
						}
						}
						if(i==9)
						{
						var pg  =  document.getElementById("pg").value;
						if(pg=="")
						{
						dhtmlx.alert({
								title: "Error !",
								type:"alert-error",
								text: "Please Enter PG",
											});
									return false;
						}
						}
						
				return false;
				}
				}
				
			  FormName		= document.addEnquiry;
  			  FormName.method	= "POST";
              FormName.submit();
		}
		
		
 
</script>
<script>

function Fill_Name_of_Clr()
{
var company_name= document.getElementById("company_name").value;
//var area= document.getElementById("area").value;
//alert(area);
var cnt_dtl_ary="";
//var customer_name =document.getElementById("").value
if (company_name=="")
  {
  document.getElementById("customer_name").value="";
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
	//if(xmlhttp.responseText.indexOf("|$|")!=-1)
        if(xmlhttp.responseText)
	   {
  	x ="<option>--Select Customer Name--</option>"
	x= x + xmlhttp.responseText;
//	alert(x);
	document.getElementById("customer_name").innerHTML=x;
	var cnt_dtls_length=x.split("|$|").length;
	var cnt_dtls=x.split("|$|");
	
	for(i=0;i<cnt_dtls_length;i++)
		{
			if((i%2)>0)
			{
			    cnt_dtl_ary=cnt_dtl_ary+","+cnt_dtls[i];
			}
			
		}
			document.getElementById("hdn_cnt_dtls").value=cnt_dtl_ary;
			split_id=x.split("|CUSID|");
			document.getElementById("customer_id").value=split_id[1];
			document.getElementById("customer_name").innerHTML=x;
	
	   }
	 else 
	   {
	   document.getElementById("customer_name").innerHTML="<option value='0'>Please select Company Name</option>";	   
	   }  
       
    }
  }
xmlhttp.open("GET","ajax_enquiry.php?company_name="+company_name,true);
xmlhttp.send();


}

function split_cnt_dtls(val)
{
var val=document.getElementById("customer_name").value;
var hdn_cnt_dtls=document.getElementById("hdn_cnt_dtls").value;
var split_cnt_dtl=hdn_cnt_dtls.split(",");
var split_cnt_dtl_len=hdn_cnt_dtls.split(",").length;
var emp_name;

var var_designation = new Object;
var mobile = new Object;
var area = new Object;
var email = new Object;
var email1 = new Object;
var area_code = new Object;
var phone = new Object;
var extn = new Object;


	for(i=1;i<split_cnt_dtl_len;i++)
	{
		var split_cnt_dtl_len2=split_cnt_dtl[i].split("_").length;	
		var split_cnt_dtl2=split_cnt_dtl[i].split("_");
		emp_name=split_cnt_dtl2[0];
		var_designation[emp_name] = split_cnt_dtl2[1];
		mobile[emp_name] = split_cnt_dtl2[2];
		area[emp_name] = split_cnt_dtl2[3];
		email[emp_name] = split_cnt_dtl2[4];
		email1[emp_name] = split_cnt_dtl2[5];
		area_code[emp_name] = split_cnt_dtl2[6];
		phone[emp_name] = split_cnt_dtl2[7];
		extn[emp_name] = split_cnt_dtl2[8];
		
	}
	document.getElementById("designation").value=var_designation[val];
	document.getElementById("mobile_no").value=mobile[val];
	document.getElementById("area").value=area[val];
	document.getElementById("mail_id").value=email[val];	
	document.getElementById("mail_id1").value=email1[val];	
	document.getElementById("area_code").value=area_code[val];
	document.getElementById("phone_no").value=phone[val];	
	document.getElementById("extension").value=extn[val];	

	Fill_Add_of_Clr();
}
function Fill_Add_of_Clr()
{

var area=document.getElementById("area").value;
//alert(area);
var company_name=document.getElementById("company_name").value;
var cnt_dtl_ary="";
//var customer_name =document.getElementById("").value
if (area=="")
  {
  document.getElementById("customer_name").value="";
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
         document.getElementById("address").value=add_dtls[0];
		 document.getElementById("address1").value=add_dtls[1];
         document.getElementById("landmark").value=add_dtls[2];
		 document.getElementById("city").value=add_dtls[3];	
		 document.getElementById("pincode").value=add_dtls[4];		 
        
	   
	   
	   }
	 else 
	   {
	   document.getElementById("customer_name").innerHTML="<option value='0'>Please select Company Name</option>";	   
	   }  
       
    }
  }
xmlhttp.open("GET","ajax_enquiry.php?area="+area+"&company_name="+company_name,true);
xmlhttp.send();

}
</script>
{/literal}
	<body class="hold-transition skin-blue sidebar-mini" onLoad="doOnLoad();">
    <div class="wrapper">
      <div class="content-wrapper">
        <section class="content-header">
          <h4>
		   {foreach from=$RList item=roles}		
			{if $roles.role_name eq 'List Enquiry'}&ensp;
            <small><a href="enquiry_list.php"><i class="fa fa-list"> <label style="font-family:Arial, Helvetica, sans-serif">
			List Enquiries</label></i></a></small>&ensp;&ensp;&ensp;
			{/if}

				{if $roles.role_name eq 'Add Enquiry'}
			<small><a href="enquiry_reg.php"><i class="fa fa-user-plus"> <label style="font-family:Arial, Helvetica, sans-serif">
			Create Enquiry</label></i></a></small>{/if}
			{/foreach}

          </h4>
        </section>
        <section class="content">
          <div class="box box-info">
            <div class="box-header Closed With Order-border" align="center">
              <h3 class="box-title">Enquiry Edit</h3>
              <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
              </div>
            </div><!-- /.box-header -->
			
			<form class="form-horizontal" name="addEnquiry">
			<input type="hidden" name="hdAction" />
					
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
		 {/if}		<input type="hidden" id="hdn_customer_type" name="hdn_customer_type" value="{$Edit.customer_type}">
					<input type="hidden" id="c_id" name="c_id" size="25" value="{$c_id}"  >
					<input type="hidden" id="mobile_fld_cnt" name="mobile_fld_cnt"  value="2"  >
					<input type="hidden" id="phone_fld_cnt" name="phone_fld_cnt"  value="2"  >
					<input type="hidden" id="email_fld_cnt" name="email_fld_cnt"  value="2"  >
					<input type="hidden" id="hdn_cnt_dtls" name="hdn_cnt_dtls" value="">
					<input type="hidden" id="hdn_add_dtls" name="hdn_add_dtls" value="">
					<input type="hidden" id="hdn_salutation" name="hdn_salutation" value="{$Edit.salutaion}">
					<input type="hidden" id="hdn_order_status" name="hdn_order_status" value="{$Edit.order_status}">
					<input type="hidden" id="hdn_customer_status" name="hdn_customer_status" value="{$Edit.customer_status}">
					<input type="hidden" id="hdn_customer_type" name="hdn_customer_type" value="{$Edit.customer_type}">
                  <div class="box-body">
				  {foreach from=$ListEdit item=Edit}
				   <div class="col-md-6">
				    <div class="form-group">			 
                      <label class="col-sm-3 control-label ">Enquiry Id</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="enquiry_id" name="enquiry_id" placeholder="Enquiry Id" value="{$Edit.enquiry_id}" tabindex="1"  value="test">
                      </div>
                    </div>
					                    
					<div class="form-group">			 
                      <label class="col-sm-3 control-label">Customer Id</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="customer_id" name="customer_id" value="{$Edit.customer_id}" placeholder="Customer Id" tabindex="3">
                      </div>
                    </div>
					
					<div class="form-group">
                      <label class="col-sm-3 control-label">Contact Person</label>
                  <div class="col-sm-5">
					<select id="customer_name" name="customer_name" class="form-control" onChange="split_cnt_dtls(this.value);" tabindex="5" >
					<option id"{$Edit.customer_name}" value="{$Edit.customer_name}" selected="selected">{$Edit.customer_name}({$Edit.area})</option>
						<option> -- Select Customer Name -- </option>				
						</select>
                      </div>
                    </div>
					 
					<div class="form-group">
                      <label class="col-sm-3 control-label">Mobile No </label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="mobile_no" name="mobile_no" placeholder="Mobile No" value="{$Edit.mobile_no}" maxlength="10" tabindex="7" onKeyUp = "numericFilter(this);clear_err_mobile(this.id);"  onBlur="chk_exist_mob(this);">
                      </div>
                    </div>
				
				<div class="form-group">
				<label class="col-sm-3 control-label">Email Id</label>
				<div class="col-sm-5">
				<input type="email" class="form-control" id="mail_id" name="mail_id" placeholder="Email Id" value="{$Edit.email_id}" tabindex="11" onKeyUp="clear_err_email_id();">
				</div>
				</div> 																		
				
				<div class="form-group" id="hdn_email2" style="display:none" >
				<label class="col-sm-3 control-label">Email Id 2</label>
				<div class="col-sm-5">
				<input type="email" class="form-control" id="mail_id1" name="mail_id1" placeholder="Email Id 1" value="{$Edit.email_id1}" tabindex=""  onKeyUp="clear_err_email_id();" >
				</div>
				</div>
				
				<div class="form-group" id="snzDate">
                      <label class="col-sm-3 control-label">Snooze Date</label> 
                      <div class="col-sm-5">
            <input type="text" class="form-control" id="snooze_date" name="snooze_date" placeholder ="Snooze Date"  value="{$Edit.snooze_date}" tabindex="13" readonly="true">
                      </div>
					  <a href="#"><img id="calendar_icon1" src="codebase/calendar.png"></a>
                    </div>
					
					<div class="form-group" id="closedDate" style="display:none"> 
                      <label class="col-sm-3 control-label">Closed Date</label> 
                      <div class="col-sm-5">
        <input type="text" class="form-control" id="closed_date" name="closed_date"  placeholder ="Closed Date" value="{$Edit.closed_date}" tabindex ="" onClick="doOnLoad();" >
                      </div>
					  <a href="#"><img id="calendar_icon2" src="codebase/calendar.png"></a>
                    </div>
					
					 <div class="form-group" style="display:none">
                      <label class="col-sm-3 control-label">Created By</label>
                      <div class="col-sm-5">
                        <input type="hidden" class="form-control" id="created_by" name="created_by"  value="{$smarty.session.UserName}" tabindex="" readonly="true" >
                      </div>
                    </div>
					
					 <div class="form-group">
                      <label class="col-sm-3 control-label">Address</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="address" name="address" placeholder="Address" value="{$Edit.address}" tabindex="17">
                      </div>
                    </div>
					
					<div class="form-group">
                      <label class="col-sm-3 control-label">Address1</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="address1" name="address1" placeholder="Address1" value="{$Edit.address1}" tabindex="19">
                      </div> 
					  </div> 
  					  
					<div class="form-group">
                      <label class="col-sm-3 control-label">Area</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="area" name="area" placeholder="Area" tabindex="21" value="{$Edit.area}" onKeyUp="text_filter(this);">
                      </div>
                    </div>
					
					<div class="form-group">
                      <label class="col-sm-3 control-label">Land Mark</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="landmark" name="landmark" placeholder="Land Mark" value="{$Edit.landmark}" tabindex="23">
                      </div>
                    </div>
					
					<div class="form-group">
                      <label class="col-sm-3 control-label">City</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="city" name="city" placeholder="City" tabindex="25" value="{$Edit.city}" onKeyUp="text_filter(this);">
                      </div>
					  </div>

					<div class="form-group">
					<label class="col-sm-3 control-label">Pincode</label>
					<div class="col-sm-5">
					<input type="text" class="form-control" id="pincode" name="pincode" placeholder="Pincode" tabindex="27" value="{$Edit.pincode}" maxlength="6" onBlur="chk_exist_pin(this)" onKeyUp="numericFilter(this);">
					</div>
					</div>
					
					<div class="form-group">
                      <label class="col-sm-3 control-label">PG</label>
                      <div class="col-sm-5">
					  <select id="pg" name="pg" class="form-control" tabindex="12" value="{$Edit.PG}" onChange="pg_select();">
						<option id"{$Edit.pg}" value="{$Edit.pg}" selected="selected">{$Edit.PG}</option>
						<option value="0">----Select------</option>
					    <option value="SSG" >SSG</option>
						<option value="Storage">Storage</option>
					</select>                     
					</div>
                    </div>
					
					</div>
					<!--**********************************************************-->
                     <div class="col-md-6">
                    
						<div class="form-group">			 
                      <label class="col-sm-3 control-label">Company Name</label>
                      <div class="col-sm-5">
   <input type="text" class="form-control" id="company_name" name="company_name" value="{$Edit.company_name}"  placeholder="Company Name" tabindex="2" onKeyUp="text_filter(this);">
                      </div>
                    </div>
					
					<div class="form-group">
                      <label class="col-sm-3 control-label">ARKA Group </label>
						<div class="col-sm-5">
						<select id="arka_group" name="arka_group" class="form-control" value="{$Edit.arka_group}"  tabindex="4">
			{if $Edit.arka_group eq "Universal Infrastructure Systems"}
			<option selected="selected">Universal Infrastructure Systems</option>
			<option value="Asian Engineering">Asian Engineering</option>
			<option value="Arka Automaations LTD">Arka Automaations LTD</option>
			<option value="Adroit Solutionz">Adroit Solutionz</option>
			{elseif $Edit.arka_group eq  "Asian Engineering"}
			<option value="Universal Infrastructure Systems">Universal Infrastructure Systems</option>
			<option selected="selected">Asian Engineering</option>
			<option value="Arka Automaations LTD">Arka Automaations LTD</option>
			<option value="Adroit Solutionz">Adroit Solutionz</option>
			{elseif $Edit.arka_group eq  "Arka Automaations LTD"}
			<option value="Universal Infrastructure Systems">Universal Infrastructure Systems</option>
			<option value="Asian Engineering">Asian Engineering</option>
			<option selected="selected">Arka Automaations LTD</option>
			<option value="Adroit Solutionz">Adroit Solutionz</option>
			{elseif $Edit.arka_group eq  "Adroit Solutionz"}
			<option value="Universal Infrastructure Systems">Universal Infrastructure Systems</option>
			<option value="Asian Engineering">Asian Engineering</option>
			<option value="Arka Automaations LTD">Arka Automaations LTD</option>
			<option selected="selected">Adroit Solutionz</option>
						{/if}
						</select>
                      </div>
                    </div>
					
				<div class="form-group">
                      <label class="col-sm-3 control-label">Designation</label>
                      <div class="col-sm-5">
      <input type="text" class="form-control" id="designation" name="designation" placeholder="Designation" value="{$Edit.designation}" tabindex="6" onKeyUp="text_filter(this);">
						<input type="hidden" class="form-control" id="timestamp" name="timestamp" value="{$smarty.now|date_format:'%Y-%m-%d &amp; %I:%M:%S %p'}">
						<input type="hidden" class="form-control" id="created_date" name="created_date" value="{$smarty.now|date_format:'%Y-%m-%d'}">
						<input type="hidden" class="form-control" id="created_time" name="created_time" value="{$smarty.now|date_format:'%I:%M:%S %p'}">
                      </div>
                      </div>
					  
					<div class="form-group">
                      <label class="col-sm-3 control-label">Phone No</label>
					    <div class="col-sm-2">
         <input type="text" class="form-control" id="area_code" name="area_code" placeholder="Area Code" value="{$Edit.area_code}" tabindex="8" onKeyUp="numericFilter(this);" >
					  </div>
                      <div class="col-sm-2">
                        <input type="text" class="form-control" id="phone_no" name="phone_no" placeholder="Phone No" value="{$Edit.phone_no}" maxlength="9" tabindex="9" style="width:60px; margin-left:-25px;" onKeyUp="numericFilter(this);" >
                      </div>
                      <div class="col-sm-2">
                        <input type="text" class="form-control" id="extension" name="extension" placeholder="Extension" value="{$Edit.extension}" tabindex="10" onKeyUp="numericFilter(this);" style="margin-left:-45px;" >
                       </div>
					   </div>
					   
					   	<div class="form-group">
                      <label class="col-sm-3 control-label">Enquiry Type </label>
						<div class="col-sm-5">
						<select id="enquiry_type" name="enquiry_type" class="form-control" tabindex="12" value="{$Edit.enquiry_type}" >
						<option id"{$Edit.enquiry_type}" value="{$Edit.enquiry_type}" selected="selected">{$Edit.enquiry_type}</option>
						<option value="0">----Select------</option>
						<option>Sales</option>
						<option>Service</option>
						<option>Project</option>
						</select>
                      </div>
					  </div>
					<div class="form-group" id="closedTime" style="display:none">
                      <label class="col-sm-3 control-label">Closed Time</label> 
                      <div class="col-sm-2">
          < input type="text" class="form-control" id="closed_hours" name="closed_time"  placeholder="Hours" maxlength="8" tabindex="14" value="{$Edit.closed_hours}"  tabindex="11">
						</div>
						<div class="col-sm-2">
					    <input type="text" class="form-control" id="closed_minutes" name="closed_minutes" placeholder="Minutes" maxlength="59" value="{$Edit.closed_minutes}" tabindex="" style="margin-left:-20px;" onKeyUp="numericFilter(this);" >
					  </div>
                      <div class="col-sm-2">
                        <input type="text" class="form-control" id="closed_seconds" name="closed_seconds" placeholder="Seconds" value="{$Edit.closed_seconds}" maxlength="59" tabindex="" style="margin-left:-40px;" onKeyUp="numericFilter(this);" >
                      </div>
                    </div>
					
					<div class="form-group">
                      <label class="col-sm-3 control-label">Enquiry Status</label>
                      <div class="col-sm-5">
						<select id="enquiry_status" name="enquiry_status" class="form-control" tabindex="16" value="{$Edit.enquiry_status}" >
						<option id"{$Edit.enquiry_status}" value="{$Edit.enquiry_status}" selected="selected">{$Edit.enquiry_status}</option>
						<option value="0">----Select-----</option>
						<option value="Open" >Open</option>
						<option value="Won" >Won</option>
						<option value="Loss" >Loss</option>
						</select>
						
                      </div>
					
                    </div>
					
					<div class="form-group">
                      <label class="col-sm-3 control-label">Open Status</label>
					  <div class="col-sm-5" id="selval" >
						<select id="open_status" name="open_status" class="form-control" tabindex="16" value="{$Edit.open_status}" >
						<option id"{$Edit.open_status}" value="{$Edit.open_status}" selected="selected">{$Edit.open_status}</option>
						<option value="0">----Select-----</option>
						<option value="Hot" >Hot</option>
						<option value="Warm" >Warm</option>
						<option value="Cold" >Cold</option>
						<option value="Defered" >Defered</option>
						</select>
						
                      </div>
				   </div>
					 
					  
					   <div class="form-group">
						  <label class="col-sm-3 control-label">Enquiry Through</label>
						  <div class="col-sm-5">
							<input type="text" class="form-control" id="enquiry_through" name="enquiry_through" value="{$Edit.enquiry_through}" placeholder="Enquiry Through"  tabindex="18" data-toggle="modal" data-target="#Enquiry" >
						  </div>
						</div>
						
					 <div class="form-group">
                      <label class="col-sm-3 control-label">Reference Id</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="reference_id" name="reference_id" placeholder="Reference Id" value="{$Edit.reference_id}" tabindex="20" >
                      </div>
                    </div>
					
					 <div class="form-group">
                      <label class="col-sm-3 control-label">Assign To</label>
                      <div class="col-sm-5">
<!--      <input type="text" class="form-control" id="assign_to" name="assign_to" placeholder="Assign To" value="{$Edit.assign_to}" tabindex="22" onKeyUp="text_filter(this);">-->
	   <select id="assign_to" name="assign_to" class="form-control" value="{$Edit.assign_to}" tabindex="8" >
                        <!--<input type="text" class="form-control" id="assign_to" name="assign_to" onBlur="Assign();" placeholder="Assign To" value="{$smarty.post.assign_to}" tabindex="8" onKeyUp="text_filter(this);">-->
						<option id"{$Edit.assign_to}" value="{$Edit.assign_to}" selected="selected">{$Edit.assign_to}</option>
						<option value="0">----Select------</option>
						 {foreach from=$UserListAssign item=asslist}
					<option value="{$asslist.username}">{$asslist.username}</option>
					{/foreach}
					</select>
                      </div>
                    </div>
					
						<div class="form-group">
						<label class="col-sm-3 control-label">requirement</label>
						<div class="col-sm-5">
						<input type="text" class="form-control" id="requirement" name="requirement" placeholder="Requirement" autocomplete="off" value="{$Edit.requirement}" tabindex="24"  data-toggle="modal" data-target="#Requirement"  >
						</div> 
						</div>
					 
					 <div class="form-group">
                      <label class="col-sm-3 control-label">Branch</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="branch" name="branch" placeholder="Branch" value="{$Edit.branch}" tabindex="10">
                      </div>
                    </div>
					
					  <div class="form-group">
                      <label class="col-sm-3 control-label">Remarks</label>
                      <div class="col-sm-5">
                        <textarea class="form-control" id="remarks" name="remarks" placeholder="Remarks" value="" tabindex="26">{$Edit.remarks}</textarea>
                      </div>
                    </div>		
							 
					<div class="form-group" style="display:none;" id="disp_1">
                      <label class="col-sm-3 control-label">SSG</label>
                      <div class="col-sm-5">
						<select id="ssg" name="ssg" class="form-control" value="{$smarty.post.ssg}"  tabindex="4">
															<option value="0">----Select------</option>
															<option value="HPS" >HPS</option>
															<option value="MF" >MF</option>
															<option value="Boltlus">Boltlus</option>
															<option value="Mobile">Mobile</option>
															<option value="FAMI">FAMI</option>
															</select>
                      </div>
                    </div>
					<div class="form-group" style="display:none;" id="disp_2">
                      <label class="col-sm-3 control-label">Storage</label>
                      <div class="col-sm-5">
						<select id="storage" name="storage" class="form-control" value="{$smarty.post.storage}"  tabindex="4" >
															<option value="0">----Select------</option>
															<option value="Deshis" >Deshis</option>
															<option value="OPOS" >OPOS</option>
															<option value="Service">Service</option>
															<option value="Interrior">Interrior</option>
															</select>
                      </div>
                    </div>
 		 
					  {/foreach}
					 
	<div class="modal fade" id="Enquiry" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content" style="width:300px;">
        <div class="modal-header" style="background-color:#00CCFF;">
          <button type="button" class="close" id="enq_close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Enquiry Through</h4>
        </div>
        <div class="modal-body">
<table class="table table-bordered table-striped ">
					<tbody>
						 {foreach from=$EnqThru item=Enq}
                      <tr>
                        <td align="center"><a  href="#." onClick="closeit('{$Enq.description}');" data-dismiss="modal">{$Enq.description}</a></td>
					   </tr> 
					     {foreachelse}
						<tr>
									<td height="20" colspan="2" align="center"><img src="images/warning.gif" border="0">&nbsp;No Records Found</td>
						</tr>
					{/foreach}
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
			<iframe height="490px" width="100%" id="Contact"  src="./cus_contact.php?customer_id={$Customer.0.customer_id}" style="border:1px;"></iframe>
			</div>
			</div>
			</div>
  <div class="modal fade" id="Requirement" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content" style="width:750px;">
        <div class="modal-header" style="background-color:#00CCFF;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">requirement</h4>
        </div>
		<div class="box-footer" align="right" style="margin-bottom:-55px; margin-right:50px;" >
					
		<input type="button" class="btn btn-info pull-center" onClick="assign_val();" data-dismiss="modal" value="submit">
					</div>
		<div id="standard_bar"  style="width:600px;height:80px;border:solid 1px #cfcfcf;" align="left" value="{$ListView.0.requirement}"></div>
		<div class="box-footer" align="right">
</div>
		<iframe height="490px" width="100%" id="Requirement"  src="./enquiry_requirement.php" style="border:1px;"></iframe>
        <div class="modal-body">
        </div>
      </div>
    </div>
  </div>
  </div>
</div>
					<div class="box-footer">
					<center>
					<input type="button" class="btn btn-info pull-center" value="UPDATE"  onClick="validate_fields();" >&nbsp;&nbsp;
                    <input type="button" class="btn btn-info pull-center" value="CANCEL" onClick="GoBack();" >&nbsp;&nbsp;
					</center>
                  </div>
                   </div>
                </form>
      <div class="control-sidebar-bg"></div>
    </div>
</div>
{literal}
<script type="text/javascript">
$('#enquiry_status').on('change', function() {
  if(this.value == "Open") {
    $('#snzTime').show();
    $('#snzDate').show();
    $('#closedTime').hide();
    $('#closedDate').hide();
	$('#PoNo').hide();
    $('#PODate').hide();	
	}
  if(this.value == "Loss") {
    $('#closedDate').show();
    $('#closedTime').show();
	$('#snzTime').hide();
    $('#snzDate').hide();
	$('#PoNo').hide();
    $('#PODate').hide();	
	}
  /* if(this.value == "Not Intrested") {
    $('#snzTime').show();
    $('#snzDate').show();
    $('#closedTime').hide();
    $('#closedDate').hide();
	$('#PoNo').hide();
    $('#PODate').hide();	
	}*/
	  if(this.value == "Won") {
    $('#closedDate').show();
    $('#closedTime').show();
	$('#PoNo').show();
    $('#PODate').show();
	$('#snzTime').hide();
    $('#snzDate').hide();
	}
   
});
$('#closed_time').keyup(function() {
  var foo = $(this).val().split(":").join(""); // remove hyphens
  if (foo.length < 9) {
    foo = foo.match(new RegExp('.{1,2}', 'g')).join(":");
  }
  $(this).val(foo);
});

</script>
<script>
function pg_select()
{
var pg_val=document.getElementById("pg").value;
  if(pg_val == "SSG") {
    $('#disp_1').show();
	 $('#disp_2').hide();
    	}
  if(pg_val == "Storage") {
    $('#disp_2').show();
	 $('#disp_1').hide();
   }
  
}
</script>
<script>
function Remove_Product(childelemnt)
{
	var child = document.getElementById(childelemnt);
	var parent_div = document.getElementById("standard_bar");
	parent_div.removeChild(child);
}

function assign_val()
{	document.getElementById("requirement").value = "";
	var prod_list=$("#standard_bar").text();
	
		//prod_list = prod_list.replace(/^/g,",");
		
	if(document.forms['addEnquiry'].elements['requirement']!=undefined)
		{
		//	alert(prod_list);
			document.forms['addEnquiry'].elements['requirement'].focus();
			/*var  call_from=document.getElementById("call_from").value;
			if(call_from!="")
			{
				parent.document.forms['addEnquiry'].elements[call_from].value = parent.document.forms['addEnquiry'].elements[call_from].value+prod_list;
				parent.dhxWins.window("w2").close();
				return true;
			}*/
			document.forms['addEnquiry'].elements['requirement'].value = document.forms['addEnquiry'].elements['requirement'].value+prod_list;
		
			
			//parent.document.forms['addEnquiry'].elements['pro_purchase'].value = parent.document.forms['addEnquiry'].elements['pro_purchase'].value+prod_list;
		}
	
		
}
function close_window1()
{
parent.dhxWins.window("w2").close();
}
</script>
{/literal}
</body>
</html>
