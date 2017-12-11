<?php /* Smarty version 2.6.25, created on 2016-02-17 11:35:29
         compiled from employee_reg.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "left.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php echo '
<script type="text/javascript" src=\'./dhtmlxMessage/codebase/dhtmlxmessage.js\'></script>
<script type=\'text/javascript\' src=\'./auto-complete/jquery.metadata.js\'></script>
<script type=\'text/javascript\' src=\'./auto-complete/jquery.auto-complete.js?<?= mktime() ?>\'></script>
<script type=\'text/javascript\' src=\'./auto-complete/js.js?<?= mktime() ?>\'></script>
<link rel="stylesheet" href= "./codebase/skins/dhtmlxmessage_dhx_skyblue.css" type="text/css" media="all"/> 
<link rel=\'stylesheet\' type=\'text/css\' href=\'auto-complete/jquery.auto-complete.css?<?= mktime() ?>\' />
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


	
		function doOnLoad() {
		var myCalendar;
		var myCalendar1;
			myCalendar = new dhtmlXCalendarObject({input: "d_o_b", button: "calendar_icon1"});
			myCalendar1 = new dhtmlXCalendarObject({input: "joining_date", button: "calendar_icon2"});
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
		var fields=["emp_id","company_name","salutation","emp_first_name","emp_last_name","company_code","father_name","mother_name","d_o_b","sex","marital_status","mobile","area_code","phone_no","extension","qualification","joining_date","address","address1","area","pincode","personal_mail","company_mail","no_of_year_exp","residence_mobile","remarks"]; 	
				for(i=0;i<fields.length;i++)
				{
				//alert(fields[i]);
				current_iteration = document.getElementById(fields[i]).value;
				document.getElementById(fields[i]).style.borderColor="";
						if(current_iteration=="")
						{
						//alert("Please Fill! "+fields[i]);exit;
						document.getElementById(fields[i]).focus();
						document.getElementById(fields[i]).style.borderColor="red";
						return false;
						}
								}
			  FormName		= document.add_employee;
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
  FormName.action =\'customer_details_view.php?search_value=\'+str;          
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
  FormName.action =\'employee_details_view.php?search_value=\'+str;          
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
		text: "You Can\'t Enter More Than 3 Mobile Number "});
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
			text: "Can\'t Enter More Than 2 Phone Number "});
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
			text: "You Can\'t Enter More Than 2 Mail Id "});
	  }
}
</script>
'; ?>


  <body class="hold-transition skin-blue sidebar-mini" onLoad="doOnLoad();">
    <div class="wrapper">
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
		<h4>
        <small><a href="employee_list.php"><i class="fa fa-list">
		List Employee</i></a></small>
		<small><a href="employee_reg.php"><i class="fa fa-user-plus">
		Create Employee</i></a></small>
		</h4>
            
         
        <!--  <ol class="breadcrumb">
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
              <h3 class="box-title">Employee Registration</h3>
              <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
              </div>
            </div>
			<form class="form-horizontal" name="add_employee">
			        <input type="hidden" name="hdAction" />
					<input type="hidden" name="hdAction" />
				<?php if ($this->_tpl_vars['SuccessMessage'] != ""): ?>
				<div class="isa_success">
				<i class="fa fa-check"></i>
				<?php echo $this->_tpl_vars['SuccessMessage']; ?>
		 
				</div>
				<?php endif; ?>
				<?php if ($this->_tpl_vars['ErrorMessage'] != ""): ?>
				<div class="isa_error">
				<i class="fa fa-times"></i>
				<?php echo $this->_tpl_vars['ErrorMessage']; ?>
		 
				</div>
				<?php endif; ?>
			       <div class="box-body">
				   <div class="col-md-6">
                    <div class="form-group">			 
                      <label class="col-sm-3 control-label">Employee Id</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="emp_id" name="emp_id" value="<?php echo $this->_supers['post']['emp_id']; ?>
" tabindex="1" placeholder="Employee Id">
                      </div>
					  &nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>
                    </div>
					 <div class="form-group">
                      <label class="col-sm-3 control-label">Contact Person</label>
                      <div class="col-sm-2">
					  <select id="salutation" name="salutation" class="form-control"  tabindex="3" >
					  <option>Mr</option>
					  <option>Mrs</option>
					  <option>Miss</option>
					  </select>
					  </div>
					
					  <div class="form-group">
					  <div class="col-sm-3">
                        <input type="text" class="form-control" id="emp_first_name" name="emp_first_name" placeholder="First name" value="<?php echo $this->_supers['post']['emp_first_name']; ?>
" tabindex="4" style="margin-left:-25px; width:150px;" onKeyUp="text_filter(this)">
					</div>
					<div class="col-sm-3">
						<input type="text" class="form-control" id="emp_last_name" name="emp_last_name" placeholder="Last name" value="<?php echo $this->_supers['post']['emp_last_name']; ?>
" tabindex="5" style="width:130px;" onKeyUp="text_filter(this)">
                      </div>
					  &nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>
                    </div>
					 
				</div>
				<div class="form-group" style=" margin-top:-15px;">
                      <label class="col-sm-3 control-label">Father Name </label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="father_name" name="father_name" value="<?php echo $this->_supers['post']['father_name']; ?>
" tabindex="7" placeholder="Father Name" onKeyUp="text_filter(this)">
                      </div>
                    </div>
					  <div class="form-group">
                      <label class="col-sm-3 control-label">DOB</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="d_o_b" name="d_o_b" value="<?php echo $this->_supers['post']['d_o_b']; ?>
" placeholder="Date" tabindex="9"   readonly="true" >
                      </div>
					  &nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>
					  <a href="#"><img id="calendar_icon1" src="codebase/calendar.png"></a>
                    </div>
					<div class="form-group">
                      <label class="col-sm-3 control-label">Marital Status</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="marital_status" name="marital_status"  value="<?php echo $this->_supers['post']['marital_status']; ?>
" tabindex="11" placeholder="Marital Status" onKeyUp="text_filter(this)">
                      </div>
					  &nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>
                    </div>					
					<div class="form-group">
                      <label class="col-sm-3 control-label">Mobile No </label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="mobile" name="mobile" value="<?php echo $this->_supers['post']['mobile']; ?>
" placeholder="Mobile No" maxlength="10" tabindex="13" onKeyUp="numericFilter(this);clear_err_mobile(this.id);"  onBlur="chk_exist_mob(this);">
                      </div>
					&nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>
					 <input type="button" class="btn btn-danger btn-xs" value="ADD MOBILE"  onClick="add_more_mobile();">
                    </div>
					<div class="form-group" id="hdn_mobile2" style="display:none;">
                      <label class="col-sm-3 control-label">Mobile No 2 </label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="mobile_1" name="mobile_1" value="<?php echo $this->_supers['post']['mobile_1']; ?>
" maxlength="10" placeholder="Mobile No 2"  onKeyUp="numericFilter(this);clear_err_mobile(this.id);"  onBlur="chk_exist_mob(this);">
                      </div>
                    </div>
					<div class="form-group" id="hdn_mobile3" style="display:none;">
                      <label class="col-sm-3 control-label">Mobile No 3</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="mobile_2" name="mobile_2" value="<?php echo $this->_supers['post']['mobile_2']; ?>
" maxlength="10" placeholder="Mobile No 3" onKeyUp="numericFilter(this);clear_err_mobile(this.id);"  onBlur="chk_exist_mob(this);">
                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-3 control-label">Qualification</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="qualification" name="qualification" value="<?php echo $this->_supers['post']['qualification']; ?>
" tabindex="17" placeholder="Qualification">
                      </div>
					  &nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>
                    </div>
					<div class="form-group">
                      <label class="col-sm-3 control-label">Department</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="department" name="department" value="TESTING" tabindex="19" placeholder="Department" data-toggle="modal" data-target="#Department"  readonly="true">
                      </div>
					  &nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>
                    </div>					
					<div class="form-group">
                      <label class="col-sm-3 control-label">Address</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="address" name="address" value="<?php echo $this->_supers['post']['address2']; ?>
" tabindex="21" placeholder="Address1">
                      </div>
					  &nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>
                    </div>
					<div class="form-group">
                      <label class="col-sm-3 control-label">Area</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="area" name="area" value="<?php echo $this->_supers['post']['area']; ?>
" tabindex="23" placeholder="Area" onKeyUp="text_filter(this)">
                      </div>
					  &nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>
                    </div>
					<div class="form-group">
                      <label class="col-sm-3 control-label">Personal Mail</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="personal_mail" name="personal_mail" value="<?php echo $this->_supers['post']['personal_mail']; ?>
" tabindex="25" placeholder="Personal Mail">
                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-3 control-label">No of year Exper</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="no_of_year_exp" name="no_of_year_exp" value="<?php echo $this->_supers['post']['no_of_year_exp']; ?>
" tabindex="27" placeholder="Experience">
                      </div>
					  &nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>
                    </div>
					<div class="form-group">
                      <label class="col-sm-3 control-label">Created By</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="created_by" name="created_by" value="<?php echo $this->_supers['post']['created_by']; ?>
" tabindex="29" placeholder="Created By">
                      </div>
                    </div>
					</div>
					<!--**********************************************************-->
                     <div class="col-md-6">
					 <div class="form-group">
                      <label class="col-sm-3 control-label">Company Name</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="company_name"  name="company_name" value="<?php echo $this->_supers['post']['company_name']; ?>
" tabindex="2" placeholder="Company Name">
                      </div>
					  &nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Company Code</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="company_code"  name="company_code" value="<?php echo $this->_supers['post']['company_code']; ?>
" tabindex="6" placeholder="Company Code">
                      </div>
					  &nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>
                    </div>
					<div class="form-group">
                      <label class="col-sm-3 control-label">Mother Name</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="mother_name" name="mother_name" value="<?php echo $this->_supers['post']['mother_name']; ?>
" tabindex="8" placeholder="Mother Name" onKeyUp="text_filter(this)">
                      </div>
                    </div> 
					 <div class="form-group">
                      <label class="col-sm-3 control-label">Sex</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="sex" name="sex" value="<?php echo $this->_supers['post']['sex']; ?>
" tabindex="10" placeholder="Sex">
                      </div>
					  &nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>
                    </div>
					<div class="form-group">
                      <label class="col-sm-3 control-label">Profile Image</label>
                      <div class="col-sm-5">
						 <input type="file" id="image" name="image" id="profile_image" value="<?php echo $this->_supers['post']['profile_image']; ?>
"   name="profile_image" tabindex="12" >
                      </div>
					   &nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>	
                    </div>
					<div class="form-group">
                      <label class="col-sm-3 control-label">Phone No</label>
					    <div class="col-sm-2">
					    <input type="text" class="form-control" id="area_code" name="area_code" value="<?php echo $this->_supers['post']['area_code']; ?>
" placeholder="Area Code" tabindex="14" onKeyUp="numericFilter(this);" >
					  </div>
                      <div class="col-sm-2">
                        <input type="text" class="form-control" id="phone_no" name="phone_no" value="<?php echo $this->_supers['post']['phone_no']; ?>
" placeholder="Phone No" tabindex="15"onKeyUp="numericFilter(this);" >
                      </div>
                      <div class="col-sm-2">
                        <input type="text" class="form-control" id="extension" name="extension" value="<?php echo $this->_supers['post']['extension']; ?>
" placeholder="Extension" tabindex="16" onKeyUp="numericFilter(this);" >
                       </div>
					    
					  &nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>
					  <input type="button" class="btn btn-danger btn-xs" value="ADD PHONE"  onClick="add_more_phone();">
					   </div>
					   <div class="form-group" id="hdn_phone2" style="display:none;">
                      <label class="col-sm-3 control-label">Phone No 1</label>
					  <div class="col-sm-2">
					    <input type="text" class="form-control" id="area_code1" name="area_code1" value="<?php echo $this->_supers['post']['area_code1']; ?>
" placeholder="Area Code 1" onKeyUp="numericFilter(this);" >
					  </div>
                      <div class="col-sm-2">
                        <input type="text" class="form-control" id="phone_no1" name="phone_no1" value="<?php echo $this->_supers['post']['phone_no1']; ?>
" placeholder="Phone No 1" onKeyUp="numericFilter(this);" >
                      </div>
                      <div class="col-sm-2">
                        <input type="text" class="form-control" id="extension1" name="extension1" value="<?php echo $this->_supers['post']['extension1']; ?>
" placeholder="extension 1" onKeyUp="numericFilter(this);" >
                       </div>
					   </div>
					<div class="form-group">
                      <label class="col-sm-3 control-label">Joining Date</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="joining_date" name="joining_date" value="<?php echo $this->_supers['post']['joining_date']; ?>
" tabindex="18" placeholder="Date" readonly="true">
                      </div>
					  &nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>
					   <a href="#"><img id="calendar_icon2" src="./codebase/calendar.png"></a>
                    </div>
					<div class="form-group">
                      <label class="col-sm-3 control-label">Designation</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="designation" name="designation" value="<?php echo $this->_supers['post']['designation']; ?>
" tabindex="20" placeholder="Designation" onKeyUp="text_filter(this)" data-toggle="modal" data-target="#Designation" value="TESTING" readonly="true">
                      </div>
					  &nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>
                    </div>
					<div class="form-group">
                      <label class="col-sm-3 control-label">Address1</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="address1" name="address1" value="<?php echo $this->_supers['post']['address1']; ?>
"  tabindex="22" placeholder="Address2">
                      </div>
                    </div>
					 <div class="form-group">
                      <label class="col-sm-3 control-label">Pincode</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="pincode" name="pincode" maxlength="6" value="<?php echo $this->_supers['post']['pincode']; ?>
" tabindex="24" placeholder="Pincode" onKeyUp="numericFilter(this);" onBlur="chk_exist_pin(this);">
                      </div>
					  &nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>
                    </div>
					<div class="form-group">
                      <label class="col-sm-3 control-label">Company Mail</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="company_mail" name="company_mail" value="<?php echo $this->_supers['post']['company_mail']; ?>
" tabindex="26" placeholder="Company Mail" onKeyUp="clear_err_email_id();">
                      </div>
					  &nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>
                    </div>
					  <div class="form-group">
                      <label class="col-sm-3 control-label">Residence Mibile</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="residence_mobile" name="residence_mobile" maxlength="10" value="<?php echo $this->_supers['post']['residence_mobile']; ?>
" tabindex="28" placeholder="Residence Mibile"  onKeyUp="numericFilter(this);clear_err_mobile(this.id);"  onBlur="chk_exist_mob(this);">
						<input type="hidden" class="form-control" id="created_date" name="created_date" value="<?php echo $this->_supers['post']['created_date']; ?>
" onClick="doOnLoad();" tabindex="28" placeholder="Date">
						 <input type="hidden" class="form-control" id="created_time" name="created_time" value="<?php echo $this->_supers['post']['created_time']; ?>
" tabindex="29" placeholder="Time">
                      </div>
                    </div> 				
					
					<div class="form-group">
                      <label class="col-sm-3 control-label">Remarks</label>
                      <div class="col-sm-5" >
                      <textarea class="form-control" id="remarks" name="remarks" tabindex="30" placeholder="Remarks" value="<?php echo $this->_supers['post']['remarks']; ?>
" ></textarea>
                      </div>
					  &nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>
                    </div>
					
<div class="modal fade" id="Designation" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content" style="width:300px;">
        <div class="modal-header" style="background-color:#00CCFF;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Designation</h4>
        </div>
        <div class="modal-body">
<table class="table table-bordered table-striped ">
					<tbody>
					<tr>
					<td><input type="text" class="form-control" id="search" name="search" placeholder="Search"></td>
					</tr>
					
                      <tr>
                        <td align="center">Designation</td>
					   </tr>
					   <tr>
                        <td align="center">Designation</td>
					   </tr>
					   <tr>
                        <td align="center">Designation</td>
					   </tr>
					   <tr>
                        <td align="center">Designation</td>
					   </tr><tr>
                        <td align="center">Designation</td>
					   </tr>

					  </tbody>
                  </table>

        </div>
		</div>
		</div>
		</div>
		<div class="modal fade" id="Department" role="dialog">
    <div class="modal-dialog">
	
      <!-- Modal content-->
      <div class="modal-content" style="width:300px;">
        <div class="modal-header" style="background-color:#00CCFF;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Department</h4>
        </div>
        <div class="modal-body">
<table class="table table-bordered table-striped ">
					<tbody>
					<tr>
					<td><input type="text" class="form-control" id="search" name="search" placeholder="Search"></td>
					</tr>
					
                      <tr>
                        <td align="center">Department</td>
					   </tr>
					   <tr>
                        <td align="center">Department</td>
					   </tr>
					   <tr>
                        <td align="center">Department</td>
					   </tr>
					   <tr>
                        <td align="center">Department</td>
					   </tr><tr>
                        <td align="center">Department</td>
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
                    <input type="button" class="btn btn-info pull-center" value="ADD EMPLOYEE" onClick="validate_fields();">&nbsp;&nbsp;
                    <button type="submit" class="btn btn-info pull-center">CANCEL</button><center>
                  </div>
                  </div><!-- /.box-body -->
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
