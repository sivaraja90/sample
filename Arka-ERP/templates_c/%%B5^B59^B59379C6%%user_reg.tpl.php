<?php /* Smarty version 2.6.25, created on 2017-01-24 13:45:29
         compiled from user_reg.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'user_reg.tpl', 638, false),)), $this); ?>
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
function PassValidate() {
        var password = document.getElementById("password").value;
        var confirmPassword = document.getElementById("re_password").value;
        if (password != confirmPassword) {
            alert("Passwords do not match.");
            return false;
        }
        return true;
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

function doOnLoad() 
		{
			Fill_Name_of_Clr();
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

       function validate_fields()
        {	
		var fields=["company_name","user_name","customer_name","sex","image","user_group","password","re_password"];
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
						var e = document.getElementById("company_name");
                        var optionSelIndex = e.options[e.selectedIndex].value;
                        var optionSelectedText = e.options[e.selectedIndex].text;
						if(optionSelIndex == "")
						{
						dhtmlx.alert({
								title: "Error !",
								type:"alert-error",
								text: "Please Select Company Name",
											});
									return false;
						}
						}
						
						if(i==1)
						{
						var user_name  =  document.getElementById("user_name").value;
						if(user_name=="")
						{
						dhtmlx.alert({
								title: "Error !",
								type:"alert-error",
								text: "Please Enter User Name",
											});
									return false;
						}
						}
						
						if(i==2)
						{
						var n = document.getElementById("customer_name");
                        var optionSelIndex = n.options[n.selectedIndex].value;
                        var optionSelectedText = n.options[n.selectedIndex].text;
						if(optionSelIndex == "")
						{
						dhtmlx.alert({
								title: "Error !",
								type:"alert-error",
								text: "Please Select Employee Name",
											});
									return false;
						}
						}
						
						if(i==3)
						{
						var m = document.getElementById("sex");
                        var optionSelIndex = m.options[m.selectedIndex].value;
                        var optionSelectedText = m.options[m.selectedIndex].text;
						if(optionSelIndex == "")
						{
						dhtmlx.alert({
								title: "Error !",
								type:"alert-error",
								text: "Please Select Sex",
											});
									return false;
						}
						}
						
						if(i==4)
						{
                        var image  =  document.getElementById("image").value;
						if(image=="")
						{
						dhtmlx.alert({
								title: "Error !",
								type:"alert-error",
								text: "Please Enter Image",
											});
									return false;
						}
						}
						
						if(i==5)
						{
                        var user_group  =  document.getElementById("user_group").value;
						if(user_group=="")
						{
						dhtmlx.alert({
								title: "Error !",
								type:"alert-error",
								text: "Please Enter User Group",
											});
									return false;
						}
						}
						
						if(i==6)
						{
                        var password  =  document.getElementById("password").value;
						if(password=="")
						{
						dhtmlx.alert({
								title: "Error !",
								type:"alert-error",
								text: "Please Enter Password",
											});
									return false;
						}
						}
						
						if(i==7)
						{
                        var re_password  =  document.getElementById("re_password").value;
						if(re_password=="")
						{
						dhtmlx.alert({
								title: "Error !",
								type:"alert-error",
								text: "Please Enter Re-Password",
											});
									return false;
						}
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
						 if(i==9)
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
				
               return false;
			}
              }
			   FormName		= document.add_user;
  			  FormName.method	= "POST";
              FormName.submit();
		}
		
function Fill_Name_of_Clr()
{
var company_name= document.getElementById("company_name").value;
var cnt_dtl_ary="";
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
        if(xmlhttp.responseText)
	   {
  	x ="<option value=\'\'>--Select Customer Name--</option>"
	x= x + xmlhttp.responseText;
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
			split_id=x.split("|COMP|");
			document.getElementById("company_code").value=split_id[1];
			document.getElementById("customer_name").innerHTML=x;
	   }
	 else 
	   {
	   document.getElementById("customer_name").innerHTML="<option value=\'0\'>Please select Company Name</option>";	   
	   }  
    }
  }
xmlhttp.open("GET","ajax_user.php?company_name="+company_name,true);
xmlhttp.send();
}

function split_cnt_dtls(val)
{

var val=document.getElementById("customer_name").value;
var hdn_cnt_dtls=document.getElementById("hdn_cnt_dtls").value;
var split_cnt_dtl=hdn_cnt_dtls.split(",");
var split_cnt_dtl_len=hdn_cnt_dtls.split(",").length;
var emp_name;
var var_emp_id = new Object;
	for(i=1;i<split_cnt_dtl_len;i++)
	{ 
		var split_cnt_dtl_len2=split_cnt_dtl[i].split("_").length;	
		var split_cnt_dtl2=split_cnt_dtl[i].split("_");
		emp_name=split_cnt_dtl2[0];
		var_emp_id[emp_name] = split_cnt_dtl2[1];
	}
	document.getElementById("emp_id").value=var_emp_id[val];
	Fill_Add_of_Clr();
}
function Fill_Add_of_Clr()
{
var emp_id=document.getElementById("emp_id").value;
var company_name=document.getElementById("company_name").value;
var cnt_dtl_ary="";
if (emp_id=="")
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
         document.getElementById("designation").value=add_dtls[0];
		 document.getElementById("department").value=add_dtls[1];
         document.getElementById("mail_id").value=add_dtls[2];
		 document.getElementById("area_code").value=add_dtls[3];		
 		 document.getElementById("phone_no").value=add_dtls[4];		 
		 document.getElementById("extension").value=add_dtls[5];
		 document.getElementById("mobile_no").value=add_dtls[6];	
		 document.getElementById("area").value=add_dtls[7];	
		 document.getElementById("emp_first_name").value=add_dtls[8];
		 document.getElementById("emp_last_name").value=add_dtls[9];
         document.getElementById("salutation").value=add_dtls[10];	 
	   }
	 else 
	   {
	   document.getElementById("customer_name").innerHTML="<option value=\'0\'>Please select Company Name</option>";	   
	   }  
    }
  }
xmlhttp.open("GET","ajax_user.php?emp_id="+emp_id+"&company_name="+company_name,true);
xmlhttp.send();
}

function GoBack()
{
window.history.back();
}
</script>
		'; ?>

  <body class="hold-transition skin-blue sidebar-mini" onLoad="doOnLoad();">
    <div class="wrapper">
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
		<h4>
         <small><a href="user_list.php"><i class="fa fa-list"> <label style="font-family:Arial, Helvetica, sans-serif">
		 List Users</label></i></a></small>&ensp;&ensp;&ensp;
         <small class="active"><a href="user_reg.php"><i class="fa fa-user-plus"> <label style="font-family:Arial, Helvetica, sans-serif">
		 Create User</label></i></a></small>
		 </h4>
      </section>
        <!-- Main content -->
        <section class="content">
          <!-- SELECT2 EXAMPLE -->
          <div class="box box-info">
            <div class="box-header with-border" align="center">
              <h3 class="box-title">User Registration</h3>
              <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
              </div>
            </div><!-- /.box-header -->
			<form class="form-horizontal" name="add_user" enctype="multipart/form-data">
			 <input type="hidden" name="hdAction" />
			 <input type="hidden" id="test" name="test" value="123">
 					<input type="hidden" id="c_id" name="c_id" size="25" value="<?php echo $this->_tpl_vars['c_id']; ?>
" readonly="true" >
					<input type="hidden" id="mobile_fld_cnt" name="mobile_fld_cnt"  value="2"  >
					<input type="hidden" id="phone_fld_cnt" name="phone_fld_cnt"  value="2"  >
					<input type="hidden" id="email_fld_cnt" name="email_fld_cnt"  value="2"  >
					<input type="hidden" id="hdn_salutation" name="hdn_salutation" value="<?php echo $this->_supers['post']['hdn_salutation']; ?>
">
					<input type="hidden" id="hdn_add_dtls" name="hdn_add_dtls" value="<?php echo $this->_supers['post']['hdn_add_dtls']; ?>
">
					<input type="hidden" id="hdn_cnt_dtls" name="hdn_cnt_dtls" value="<?php echo $this->_supers['post']['hdn_cnt_dtls']; ?>
">
					<input type="hidden" id="hdn_order_status" name="hdn_order_status" value="<?php echo $this->_supers['post']['order_status']; ?>
">
					<input type="hidden" id="hdn_customer_status" name="hdn_customer_status" value="<?php echo $this->_supers['post']['customer_status']; ?>
">
					<input type="hidden" id="hdn_customer_type" name="hdn_customer_type" value="<?php echo $this->_supers['post']['customer_type']; ?>
">
					<input type="hidden" id="salutation" name="salutation" value="<?php echo $this->_supers['post']['salutation']; ?>
">
					<input type="hidden" id="emp_first_name" name="emp_first_name" value="<?php echo $this->_supers['post']['emp_first_name']; ?>
">
					<input type="hidden" id="emp_last_name" name="emp_last_name" value="<?php echo $this->_supers['post']['emp_last_name']; ?>
">
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
                    <!--<div class="form-group">			 
                      <label class="col-sm-3 control-label">User Id</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="user_id" name="user_id" value="<?php echo $this->_supers['post']['user_id']; ?>
" tabindex="1" placeholder="User Id" autocomplete="off">
                      </div>
                    </div>-->
					<div class="form-group">
                      <label class="col-sm-3 control-label">Company Name </label>
						<div class="col-sm-5">
						<select id="company_name" name="company_name" class="form-control" onChange="Fill_Name_of_Clr();" value="<?php echo $this->_supers['post']['company_name']; ?>
"  tabindex="1">
						<option value="">----Select Company Name------</option>
						<option value="Universal Infrastructure Systems">Universal Infrastructure Systems</option>
						<option value="Asian Engineering">Asian Engineering</option>
						<option value="Arka Automaations LTD">Arka Automaations LTD</option>
						<option value="Adroit Solutionz">Adroit Solutionz</option>
						<option value="Vinotonix Solutions">Vinotronix Solutions</option>
					</select>
                      </div>
                    </div>
					
				<div class="form-group">
                      <label class="col-sm-3 control-label">Employee Name</label>
					  <div class="col-sm-5">
						<select id="customer_name" name="customer_name" class="form-control" onChange="split_cnt_dtls(this.value);" tabindex="3" value="<?php echo $this->_supers['post']['customer_name']; ?>
">
						<option value="" > -- Select Employee Name -- </option>				
						</select>
						 </div>
                    </div>
				<div class="form-group">
                      <label class="col-sm-3 control-label">Designation</label>
                      <div class="col-sm-5">
                       <input type="text" class="form-control" id="designation" name="designation" value="<?php echo $this->_supers['post']['designation']; ?>
" tabindex="5" placeholder="Designation" autocomplete="off" onKeyUp="text_filter(this);" readonly="true">
                      </div>
                    </div>
					 <div class="form-group">
                      <label class="col-sm-3 control-label">Mobile No</label>
                      <div class="col-sm-5">
						 <input type="text" class="form-control" id="mobile_no" name="mobile_no" value="<?php echo $this->_supers['post']['mobile_no']; ?>
" maxlength="10"  tabindex="7" placeholder="Mobile No" onKeyUp="numericFilter(this);clear_err_mobile(this.id);"   onBlur="chk_exist_mob(this);" autocomplete="off" readonly="true">
                      </div>
					  <input type="button" style="visibility:hidden" class="btn btn-danger btn-xs" value="ADD MOBILE"  onClick="add_more_mobile();">
                    </div>
					<div class="form-group" id="hdn_mobile2" style="display:none;">
                      <label class="col-sm-3 control-label">Mobile No 2 </label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="mobile_no2" name="mobile_no2" value="<?php echo $this->_supers['post']['mobile_no2']; ?>
" maxlength="10" placeholder="Mobile No 2"  onKeyUp="numericFilter(this);clear_err_mobile(this.id);"  onBlur="chk_exist_mob(this);" autocomplete="off">
                      </div>
                    </div>
					<div class="form-group" id="hdn_mobile3" style="display:none;">
                      <label class="col-sm-3 control-label">Mobile No 3</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="mobile_no3" name="mobile_no3" value="<?php echo $this->_supers['post']['mobile_no3']; ?>
" maxlength="10" placeholder="Mobile No 3" onKeyUp="numericFilter(this);clear_err_mobile(this.id);"  onBlur="chk_exist_mob(this);" autocomplete="off">
                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-3 control-label">Email Id</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="mail_id" name="mail_id" value="<?php echo $this->_supers['post']['mail_id']; ?>
" tabindex="9" placeholder="Email_id" autocomplete="off" readonly="true">
                      </div> 
					   <input type="button" style="visibility:hidden" class="btn btn-danger btn-xs" value="ADD MAIL"  onClick="add_more_email();">
					   </div>
					  <div class="form-group" id="hdn_email2" style="display:none">
                      <label class="col-sm-3 control-label">Email Id 2</label>
                      <div class="col-sm-5">
                        <input type="email" class="form-control" id="mail_id1" name="mail_id1" placeholder="Email Id 1"  autocomplete="off">
                      </div>
					  </div>
					 <div class="form-group">
                      <label class="col-sm-3 control-label">User Group</label>
                      <div class="col-sm-5">
					    <input type="text" class="form-control" id="user_group" name="user_group" value="<?php echo $this->_supers['post']['user_group']; ?>
" tabindex="11" placeholder="User Group" autocomplete="off"><input type="hidden" class="form-control" id="area" name="area" value="<?php echo $this->_supers['post']['area']; ?>
" tabindex="1" placeholder="Area" autocomplete="off">
						<input type="hidden" class="form-control" id="emp_id" name="emp_id" value="<?php echo $this->_supers['post']['emp_id']; ?>
" tabindex="1" placeholder="Emp Id" autocomplete="off">
                      </div>
                    </div>
					<div class="form-group" >
                      <label class="col-sm-3 control-label">Password</label>
                      <div class="col-sm-5">
                        <input type="password" class="form-control" id="password" name="password" value="<?php echo $this->_supers['post']['password']; ?>
" tabindex="15" placeholder="Password" autocomplete="off">
                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-3 control-label">Remarks</label>
                      <div class="col-sm-5">
                        <textarea class="form-control" id="remarks" name="remarks" tabindex="17" placeholder="Remarks" autocomplete="off"><?php echo $this->_supers['post']['remarks']; ?>
</textarea>
                      </div>
                    </div>
   					  </div>
					<!--**********************************************************-->
                     <div class="col-md-6">
                    <div class="form-group">			 
                      <label class="col-sm-3 control-label">User Name</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="user_name" name="user_name" value="<?php echo $this->_supers['post']['user_name']; ?>
" tabindex="2" placeholder="User Name" autocomplete="off" onKeyUp="text_filter(this);">
                      </div>
                    </div>
					 <div class="form-group">
                      <label class="col-sm-3 control-label">Company Code </label>
						<div class="col-sm-5">
						<input type="type"  class="form-control" id="company_code" name="company_code"  value="<?php echo $this->_supers['post']['company_code']; ?>
" tabindex="4" placeholder="Company Code" autocomplete="off" readonly="true">
                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-3 control-label">Sex</label>
                      <div class="col-sm-5">
						<select id="sex" name="sex" class="form-control" value="<?php echo $this->_supers['post']['sex']; ?>
"  tabindex="6">
						<option value="">----Select------</option>
						<option value="Male" >Male</option>
						<option value="Female" >Female</option>
						</select>
                      </div>
                    </div>
					 <div class="form-group">
                      <label class="col-sm-3 control-label">Department</label>
                      <div class="col-sm-5">
						 <input type="text" class="form-control" id="department" name="department"  value="<?php echo $this->_supers['post']['department']; ?>
" tabindex="8" placeholder="Department" autocomplete="off" readonly="true">
                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-3 control-label">Profile Image</label>
                      <div class="col-sm-5">
						 <input type="file" id="image" name="image" tabindex="10" value="<?php echo $this->_supers['post']['image']; ?>
" autocomplete="off">
                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-3 control-label">Phone No</label>
					    <div class="col-sm-2">
					    <input type="text" class="form-control" id="area_code" name="area_code" value="<?php echo $this->_supers['post']['area_code']; ?>
" placeholder="Area Code" tabindex="12" onKeyUp="numericFilter(this);" autocomplete="off" readonly="true">
					  </div>
                      <div class="col-sm-2">
                        <input type="text" class="form-control" id="phone_no" name="phone_no" value="<?php echo $this->_supers['post']['phone_no']; ?>
" placeholder="Phone No" tabindex="13"onKeyUp="numericFilter(this);" autocomplete="off" style="margin-left:-24px;" readonly="true">
                      </div>
                      <div class="col-sm-2">
                        <input type="text" class="form-control" id="extension" name="extension" value="<?php echo $this->_supers['post']['extension']; ?>
" placeholder="Extension" tabindex="14" onKeyUp="numericFilter(this);" autocomplete="off" style="margin-left:-45px;" readonly="true">
                       </div>
					   <div class="col-sm-2">
					  <input type="button" style="visibility:hidden" class="btn btn-danger btn-xs" value="ADD PHONE" onClick="add_more_phone();" style="margin-left:-60px;">
					   </div>
					   </div>
					   <div class="form-group" id="hdn_phone2" style="display:none;">
                      <label class="col-sm-3 control-label">Phone No 1</label>
					  <div class="col-sm-2">
					    <input type="text" class="form-control" id="area_code1" name="area_code1" placeholder="Area Code 1"  onKeyUp="numericFilter(this);" autocomplete="off">
					  </div>
                      <div class="col-sm-2">
                        <input type="text" class="form-control" id="phone_no1" name="phone_no1" placeholder="Phone No 1"  onKeyUp="numericFilter(this);" autocomplete="off" style="margin-left:-24px;">
                      </div>
                      <div class="col-sm-2">
                        <input type="text" class="form-control" id="extension1" name="extension1" placeholder="extension 1"  onKeyUp="numericFilter(this);" autocomplete="off" style="margin-left:-45px;">
                       </div>
					   </div>
					   <div class="form-group">
                      <label class="col-sm-3 control-label">Created By</label>
                      <div class="col-sm-5">
                 	<input type="text" class="form-control" id="created_by" name="created_by" value="<?php echo $this->_supers['session']['UserName']; ?>
" readonly="true" autocomplete="off" tabindex="16">
				 <input type="hidden" class="form-control" id="created_date" name="created_date" value="<?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d') : smarty_modifier_date_format($_tmp, '%Y-%m-%d')); ?>
">
						<input type="hidden" class="form-control" id="created_time" name="created_time" value="<?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%I:%M:%S %p') : smarty_modifier_date_format($_tmp, '%I:%M:%S %p')); ?>
">
						 <input type="hidden" class="form-control" id="timestamp_value" name="timestamp_value" value="<?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d &amp; %I:%M:%S %p') : smarty_modifier_date_format($_tmp, '%Y-%m-%d &amp; %I:%M:%S %p')); ?>
" placeholder="Timestamp Value">
					 </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-3 control-label">Re Password</label>
                      <div class="col-sm-5">
                        <input type="password" class="form-control" id="re_password" name="re_password" value="<?php echo $this->_supers['post']['re_password']; ?>
" tabindex="18" placeholder="Re Password" autocomplete="off">
                      </div>
                    </div>
				</div>
                    </div>
					 <div class="box-footer"><center>
                   <input type="button"  class="btn btn-info pull-center" value="ADD USER"  onClick="validate_fields();PassValidate();">&nbsp;&nbsp;
                    <button type="submit"  class="btn btn-info pull-center" onClick="GoBack();">CANCEL</button></center>
                  </div>
                  </div><!-- /.box-body -->
                 </form>
      <div class="control-sidebar-bg"></div>
    </div>
  </body>
</html>