<?php /* Smarty version 2.6.25, created on 2017-01-24 13:44:29
         compiled from employe_reg.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'employe_reg.tpl', 653, false),)), $this); ?>
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


function numericFilter(data)
{
   data.value = data.value.replace(/[^.0-9^.+,-]/ig,"");
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
  		   }

function text_filter(data)
{
   data.value = data.value.replace(/[^ .a-z]/ig,"");
}

       function validate_fields()
        {
		var fields=["emp_id","company_name","salutation","emp_first_name","emp_last_name","company_code","father_name","mother_name","d_o_b","sex","image","qualification","department","mobile_1","designation","joining_date","residence_mobile","address1","area","pincode","personal_mail","company_mail","no_of_year_exp","created_by"];
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
						if(i==3)
						{
						var emp_first_name  =  document.getElementById("emp_first_name").value;
						if(emp_first_name=="")
						{
						dhtmlx.alert({
								title: "Error !",
								type:"alert-error",
								text: "Please Enter Employee First Name",
											});
									return false;
						}
						}
						if(i==4)
						{
						var emp_last_name =  document.getElementById("emp_last_name").value;
						if(emp_last_name=="")
						{
						dhtmlx.alert({
								title: "Error !",
								type:"alert-error",
								text: "Please Enter Employee Last Name",
											});
									return false;
						}
						}
						if(i==5)
						{
						var company_code  =  document.getElementById("company_code").value;
						if(company_code=="")
						{
						dhtmlx.alert({
								title: "Error !",
								type:"alert-error",
								text: "Please Enter Company Code",
											});
									return false;
						}
						}
						if(i==6)
						{
						var father_name  =  document.getElementById("father_name").value;
						if(father_name=="")
						{
						dhtmlx.alert({
								title: "Error !",
								type:"alert-error",
								text: "Please Enter Father Name",
											});
									return false;
						}
						}
						if(i==7)
						{
						var mother_name  =  document.getElementById("mother_name").value;
						if(mother_name=="")
						{
						dhtmlx.alert({
								title: "Error !",
								type:"alert-error",
								text: "Please Enter Mother Name",
											});
									return false;
						}
						}
						if(i==8)
						{
						var d_o_b  =  document.getElementById("d_o_b").value;
						if(d_o_b=="")
						{
						dhtmlx.alert({
								title: "Error !",
								type:"alert-error",
								text: "Please Enter Date Of Birth",
											});
									return false;
						}
						}
						if(i==9)
						{
						var s = document.getElementById("sex");
                        var optionSelIndex = s.options[s.selectedIndex].value;
                        var optionSelectedText = s.options[s.selectedIndex].text;
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
						if(i==10)
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
						if(i==11)
						{
						var qualification  =  document.getElementById("qualification").value;
						if(qualification=="")
						{
						dhtmlx.alert({
								title: "Error !",
								type:"alert-error",
								text: "Please Enter Qualification",
											});
									return false;
						}
						}
						if(i==12)
						{
						var department  =  document.getElementById("department").value;
						if(department=="")
						{
						dhtmlx.alert({
								title: "Error !",
								type:"alert-error",
								text: "Please Enter Department",
											});
									return false;
						}
						}
						 if(i==13)
						{
						var con_ph  =  document.getElementById("phone1").value;
						var con_mo = document.getElementById("mobile_1").value;
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
						if(i==14)
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
						if(i==15)
						{
						var joining_date  =  document.getElementById("joining_date").value;
						if(joining_date=="")
						{
						dhtmlx.alert({
								title: "Error !",
								type:"alert-error",
								text: "Please Enter Joining Date",
											});
									return false;
						}
						}
						if(i==16)
						{
						var residence_mobile  =  document.getElementById("residence_mobile").value;
						if(residence_mobile=="")
						{
						dhtmlx.alert({
								title: "Error !",
								type:"alert-error",
								text: "Please Enter Residence Mobile",
											});
									return false;
						}
						}
						if(i==17)
						{
						var address1  =  document.getElementById("address1").value;
						if(address1=="")
						{
						dhtmlx.alert({
								title: "Error !",
								type:"alert-error",
								text: "Please Enter Address",
											});
									return false;
						}
						}
						if(i==18)
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
						if(i==19)
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
						if(i==20)
						{
						var personal_mail  =  document.getElementById("personal_mail").value;
						if(personal_mail=="")
						{
						dhtmlx.alert({
								title: "Error !",
								type:"alert-error",
								text: "Please Enter Personal Mail",
											});
									return false;
						}
						}
						if(i==21)
						{
						var company_mail  =  document.getElementById("company_mail").value;
						if(company_mail=="")
						{
						dhtmlx.alert({
								title: "Error !",
								type:"alert-error",
								text: "Please Enter Company Mail",
											});
									return false;
						}
						}
						if(i==22)
						{
						var no_of_year_exp  =  document.getElementById("no_of_year_exp").value;
						if(no_of_year_exp=="")
						{
						dhtmlx.alert({
								title: "Error !",
								type:"alert-error",
								text: "Please Enter No Of Year Experience",
											});
									return false;
						}
						}
						
							
								if(i==20 || i==21)
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
						
						return false;
						}

						}
						
			  FormName		= document.add_employee;
  			  FormName.method	= "POST";
              FormName.submit();
		}

function add_more_mobile()
{
  var cnt_mobile=document.getElementById("mobile_fld_cnt").value;
	  if(cnt_mobile!=3)
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
		text: "You Can\'t Enter More Than 2 Mobile Number "});
	  }
}

function add_more_phone(){
  var cnt_phone=document.getElementById("phone_fld_cnt").value;
	  if(cnt_phone!=3)
	  {
		  document.getElementById("phone_fld_cnt").value=parseInt(cnt_phone)+1;
		  document.getElementById("hdn_phone"+cnt_phone).removeAttribute("style");
	  }
	  else
	  {
			dhtmlx.alert({
			title: "Phone No",
			type:"alert-error",
			text: "You Can\'t Enter More Than 2 Phone Number "});
	  }
}



function GoBack()
{
window.history.back();
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
        <small><a href="employee_list.php"><i class="fa fa-list"> <label style="font-family:Arial, Helvetica, sans-serif">
		List Employees</label></i></a></small>&ensp;&ensp;&ensp;
		<small><a href="employee_reg.php"><i class="fa fa-user-plus"> <label style="font-family:Arial, Helvetica, sans-serif">
		Create Employee</label></i></a></small>
		</h4>
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
			<form class="form-horizontal" name="add_employee" enctype="multipart/form-data">
			        <input type="hidden" name="hdAction" />
					<input type="hidden" id="mobile_fld_cnt" name="mobile_fld_cnt"  value="2"  >
					<input type="hidden" id="phone_fld_cnt" name="phone_fld_cnt"  value="2"  >
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
                       <input type="text" class="form-control" id="emp_id" name="emp_id" value="<?php echo $this->_tpl_vars['e_id']; ?>
" tabindex="1" placeholder="Employee Id" autocomplete="0ff" readonly="true">
                      </div>
                    </div>
					 <div class="form-group">
                      <label class="col-sm-3 control-label">Employee Name</label>
                      <div class="col-sm-2" style="width:100px;">
					  <select id="salutation" name="salutation" class="form-control" tabindex="3" autocomplete="0ff" >
					  <option>Mr</option>
					  <option>Mrs</option>
					  <option>Miss</option>
					  </select>
					  </div>
					  <div class="form-group">
					  <div class="col-sm-3">
                        <input type="text" class="form-control" id="emp_first_name" name="emp_first_name" tabindex="4" placeholder="First name" value= "<?php echo $this->_supers['post']['emp_first_name']; ?>
" tabindex="4" style="margin-left:-25px; width:142px;" onKeyUp="text_filter(this)" autocomplete="Off">
					</div>
					<div class="col-sm-3" >
					<input type="text" class="form-control" id="emp_last_name" name="emp_last_name" tabindex="5" placeholder="Last name" value="<?php echo $this->_supers['post']['emp_last_name']; ?>
"  tabindex="5" style="margin-left:-8px;width:130px;" onKeyUp="text_filter(this)" autocomplete="Off">
                      </div>
                    </div>
				</div>
				<div class="form-group" style=" margin-top:-15px;">
                      <label class="col-sm-3 control-label">Father Name </label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="father_name" name="father_name" value="<?php echo $this->_supers['post']['father_name']; ?>
" tabindex="7" placeholder="Father Name" onKeyUp="text_filter(this)" autocomplete="Off">
                      </div>
                    </div>
					  <div class="form-group">
                      <label class="col-sm-3 control-label">DOB</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="d_o_b" name="d_o_b" value="<?php echo $this->_supers['post']['d_o_b']; ?>
" placeholder="Date" tabindex="9"   readonly="true" autocomplete="0ff" >
                      </div>
					  <a href="#"><img id="calendar_icon1" src="codebase/calendar.png"></a>
                    </div>
					<div class="form-group">
                      <label class="col-sm-3 control-label">Mobile No </label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="mobile_1" name="mobile_1" value="<?php echo $this->_supers['post']['mobile_1']; ?>
" placeholder="Mobile No" maxlength="10" tabindex="11" onKeyUp="numericFilter(this);clear_err_mobile(this.id);" onBlur="chk_exist_mob(this);" autocomplete="Off">
                      </div>
					 <input type="button" class="btn btn-danger btn-xs" value="ADD MOBILE"  onClick="add_more_mobile();">
                    </div>
					<div class="form-group" id="hdn_mobile2" style="display:none;">
                      <label class="col-sm-3 control-label">Mobile No 2 </label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="mobile_2" name="mobile_2" value="<?php echo $this->_supers['post']['mobile_2']; ?>
"  maxlength="10" placeholder="Mobile No 2"  onKeyUp="numericFilter(this);clear_err_mobile(this.id);"  onBlur="chk_exist_mob(this);" autocomplete="Off">
                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-3 control-label">Qualification</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="qualification" name="qualification" value="<?php echo $this->_supers['post']['qualification']; ?>
" tabindex="13" placeholder="Qualification" autocomplete="Off" onKeyUp="text_filter(this);">
                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-3 control-label">Department</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="department" name="department" value="<?php echo $this->_supers['post']['department']; ?>
" tabindex="17" placeholder="Department" autocomplete="0ff">
                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-3 control-label">Joining Date</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="joining_date" name="joining_date" value="<?php echo $this->_supers['post']['joining_date']; ?>
" tabindex="19" placeholder="Date" readonly="true" autocomplete="0ff">
                      </div>
					   <a href="#"><img id="calendar_icon2" src="./codebase/calendar.png"></a>
                    </div>
					<div class="form-group">
                      <label class="col-sm-3 control-label">Address</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="address1" name="address1" value="<?php echo $this->_supers['post']['address1']; ?>
" tabindex="21" placeholder="Address" autocomplete="Off">
                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-3 control-label">Area</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="area" name="area" value="<?php echo $this->_supers['post']['area']; ?>
" tabindex="23" placeholder="Area" onKeyUp="text_filter(this)" autocomplete="0ff">
                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-3 control-label">No of year Exper</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="no_of_year_exp" name="no_of_year_exp" value="<?php echo $this->_supers['post']['no_of_year_exp']; ?>
" onKeyUp="numericFilter(this);"  tabindex="25" placeholder="Experience" autocomplete="Off">
                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-3 control-label">Created By</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="created_by" name="created_by" value="<?php echo $this->_supers['session']['UserName']; ?>
" readonly="true" tabindex="28">
						<input type="hidden" class="form-control" id="created_time" name="created_time" placeholder="Time" Value="<?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%I:%M:%S %p') : smarty_modifier_date_format($_tmp, '%I:%M:%S %p')); ?>
">
						<input type="hidden" class="form-control" id="created_date" name="created_date" placeholder="Date" value="<?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d') : smarty_modifier_date_format($_tmp, '%Y-%m-%d')); ?>
" >
                      </div>
                    </div>
					<!--<div class="form-group">
                      <label class="col-sm-3 control-label">Remarks</label>
                      <div class="col-sm-5" >
                      <textarea class="form-control" id="remarks" name="remarks" tabindex="27" placeholder="Remarks" value="<?php echo $this->_supers['post']['remarks']; ?>
" autocomplete="0ff" ></textarea>
                      </div>
                    </div>-->
					</div>
					<!--**********************************************************-->
                     <div class="col-md-6">
					 <div class="form-group">
                      <label class="col-sm-3 control-label">Company Name</label>
						<div class="col-sm-5">
						<select id="company_name" name="company_name" class="form-control" value="<?php echo $this->_supers['post']['company_name']; ?>
"  tabindex="2">
						<option value="">----Select------</option>
						<option value="Universal Infrastructure Systems">Universal Infrastructure Systems</option>
						<option value="Asian Engineering">Asian Engineering</option>
						<option value="Arka Automaations LTD">Arka Automaations LTD</option>
						<option value="Adroit Solutionz">Adroit Solutionz</option>
						<option value="Vinotonix Solutions">Vinotronix Solutions</option>
						</select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Company Code</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="company_code"  name="company_code" value="<?php echo $this->_supers['post']['company_code']; ?>
" tabindex="6" placeholder="Company Code" autocomplete="Off">
                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-3 control-label">Mother Name</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="mother_name" name="mother_name" value="<?php echo $this->_supers['post']['mother_name']; ?>
" tabindex="8" placeholder="Mother Name" onKeyUp="text_filter(this)" autocomplete="Off">
                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-3 control-label">Sex </label>
						<div class="col-sm-5">
						<select id="sex" name="sex" class="form-control" value="<?php echo $this->_supers['post']['sex']; ?>
"  tabindex="10">
						<option value="">----Select------</option>
						<option value="Male">Male</option>
						<option value="Female">Female</option>
						</select>
                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-3 control-label">Profile Image</label>
                      <div class="col-sm-5">
						 <input type="file"  id="image" value="<?php echo $this->_supers['post']['image']; ?>
"   name="image" tabindex="12" autocomplete="0ff" >
                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-3 control-label">Phone No</label>
					    <div class="col-sm-2">
					    <input type="text" class="form-control" id="area_code" name="area_code" value="<?php echo $this->_supers['post']['area_code']; ?>
" placeholder="Area Code" maxlength="6" tabindex="14" onKeyUp="numericFilter(this);" autocomplete="Off">
					  </div>
                      <div class="col-sm-2">
                        <input type="text" class="form-control" id="phone1" name="phone1" value="<?php echo $this->_supers['post']['phone1']; ?>
" placeholder="Phone No" maxlength="10" tabindex="15" onKeyUp="numericFilter(this);" autocomplete="Off" style="margin-left:-23px;">
                      </div>
                      <div class="col-sm-2">
                        <input type="text" class="form-control" id="extension" name="extension" value="<?php echo $this->_supers['post']['extension']; ?>
" placeholder="Extension" maxlength="4" tabindex="16" onKeyUp="numericFilter(this);" autocomplete="Off" style="margin-left:-46px;">
                       </div>
					  <div class="col-sm-2">
					  <input type="button" class="btn btn-danger btn-xs" value="ADD PHONE"  onClick="add_more_phone();" style="margin-left:-55px;">
					   </div>
					   </div>
					   <div class="form-group" id="hdn_phone2" style="display:none;">
                      <label class="col-sm-3 control-label">Phone No 1</label>
					  <div class="col-sm-2">
					    <input type="text" class="form-control" id="area_code1" name="area_code1" value="<?php echo $this->_supers['post']['area_code1']; ?>
" placeholder="Area Code 1" onKeyUp="numericFilter(this);" autocomplete="0ff" maxlength="6">
					  </div>
                      <div class="col-sm-2">
                       <input type="text" class="form-control" id="phone_2" name="phone_2" value="<?php echo $this->_supers['post']['phone_2']; ?>
" placeholder="Phone No 1" onKeyUp="numericFilter(this);" style="margin-left:-23px;" autocomplete="Off" maxlength="10">
                      </div>
                      <div class="col-sm-2">
                        <input type="text" class="form-control" id="extension1" name="extension1" value="<?php echo $this->_supers['post']['extension1']; ?>
" placeholder="extension 1" onKeyUp="numericFilter(this);" autocomplete="0ff" style="margin-left:-46px;" maxlength="4" >
                       </div>
					   </div>
					<div class="form-group">
                      <label class="col-sm-3 control-label">Designation</label>
                      <div class="col-sm-5">
     <input type="text" class="form-control" id="designation" name="designation" value="<?php echo $this->_supers['post']['designation']; ?>
" tabindex="18" placeholder="Designation" autocomplete="Off" onKeyUp="text_filter(this);">
                      </div>
                    </div>
					 <div class="form-group">
                      <label class="col-sm-3 control-label">Residence Mobile</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="residence_mobile" name="residence_mobile" maxlength="10" value="<?php echo $this->_supers['post']['residence_mobile']; ?>
" tabindex="20" placeholder="Residence Mobile"  onKeyUp="numericFilter(this);clear_err_mobile(this.id);"  onBlur="chk_exist_mob(this);" autocomplete="Off">
				</div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-3 control-label">Address1</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="address2" name="address2" value="<?php echo $this->_supers['post']['address2']; ?>
"  tabindex="22" placeholder="Address1"  autocomplete="Off">
                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-3 control-label">Pincode</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="pincode" name="pincode" maxlength="6" value="<?php echo $this->_supers['post']['pincode']; ?>
" tabindex="24" placeholder="Pincode" onKeyUp="numericFilter(this);" onBlur="chk_exist_pin(this);" autocomplete="0ff">
                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-3 control-label">Personal Mail</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="personal_mail" name="personal_mail" value="<?php echo $this->_supers['post']['personal_mail']; ?>
" tabindex="26" placeholder="Personal Mail" autocomplete="Off">
                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-3 control-label">Company Mail</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="company_mail" name="company_mail" value="<?php echo $this->_supers['post']['company_mail']; ?>
" tabindex="29" placeholder="Company Mail" onKeyUp="clear_err_email_id();" autocomplete="Off">
                      </div>
                    </div>
					
					</div>
					</div>
					<div class="box-footer"><center>
                    <input type="button" class="btn btn-info pull-center" value="ADD EMPLOYEE" onClick="validate_fields();" >&nbsp;&nbsp;
                    <button type="submit" class="btn btn-info pull-center" onClick="GoBack();" >CANCEL</button><center>
                  </div><!-- /.box-body -->
                  </div><!-- /.box-footer -->
                </form>
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
    </div>
  </body>