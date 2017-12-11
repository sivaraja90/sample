<?php /* Smarty version 2.6.25, created on 2017-01-20 16:53:58
         compiled from employee_edit.tpl */ ?>
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
/*function retrieve_select_bxs()
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
}*/

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

function doOnLoad()
{
	var myCalendar;
	myCalendar = new dhtmlXCalendarObject({input: "created_date", button: "calendar"});
	retrieve_select_bxs();
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

function validate_fields()
{
		var fields=["emp_id","company_name","salutation","emp_first_name","emp_last_name","company_code","father_name","mother_name","d_o_b","sex","image","qualification","department","designation","joining_date","residence_mobile","address1","area","pincode","personal_mail","company_mail","no_of_year_exp","created_by"];
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
						if(optionSelIndex == 0)
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
						if(optionSelIndex == 0)
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
						if(i==14)
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
						if(i==15)
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
						if(i==16)
						{
						var address1  =  document.getElementById("address1").value;
						if(address1=="")
						{
						dhtmlx.alert({
								title: "Error !",
								type:"alert-error",
								text: "Please Enter Address1",
											});
									return false;
						}
						}
						if(i==17)
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
						if(i==18)
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
						if(i==19)
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
						if(i==20)
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
						if(i==21)
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
						
							 if(i==22)
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
								if(i==19 || i==20)
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
<script>
function image_hide(){
$(\'#allow\').show();
$(\'#allow1\').hide();
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
		List Employees</label></i></a></small>&nbsp;&nbsp;&nbsp;
		<small><a href="employee_reg.php"><i class="fa fa-user-plus"> <label style="font-family:Arial, Helvetica, sans-serif">
		Create Employee</label></i></a></small>
		</h4>
       </section>
        <!-- Main content -->
        <section class="content">
          <!-- SELECT2 EXAMPLE -->
          <div class="box box-info">
            <div class="box-header with-border" align="center">
              <h3 class="box-title">Employee Edit</h3>
              <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
              </div>
            </div>
			<form class="form-horizontal" name="add_employee" enctype="multipart/form-data">
			        <input type="hidden" name="hdAction" />
<!--					<input type="hidden" id="c_id" name="c_id" size="25" value="<?php echo $this->_tpl_vars['c_id']; ?>
" readonly="true" >
					<input type="hidden" id="mobile_fld_cnt" name="mobile_fld_cnt"  value="2"  >
					<input type="hidden" id="phone_fld_cnt" name="phone_fld_cnt"  value="2"  >
					<input type="hidden" id="email_fld_cnt" name="email_fld_cnt"  value="2"  >
					<input type="hidden" id="hdn_salutation" name="hdn_salutation" value="<?php echo $this->_supers['post']['salutaion']; ?>
">
					<input type="hidden" id="hdn_order_status" name="hdn_order_status" value="<?php echo $this->_supers['post']['order_status']; ?>
">
					<input type="hidden" id="hdn_customer_status" name="hdn_customer_status" value="<?php echo $this->_supers['post']['customer_status']; ?>
">
					<input type="hidden" id="hdn_customer_type" name="hdn_customer_type" value="<?php echo $this->_supers['post']['customer_type']; ?>
">
-->			       <?php if ($this->_tpl_vars['SuccessMessage'] != ""): ?>
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
				    <?php $_from = $this->_tpl_vars['ListView']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['EditList']):
?>
				   <div class="col-md-6">
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Employee Id</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="emp_id" name="emp_id" value="<?php echo $this->_tpl_vars['EditList']['emp_id']; ?>
" tabindex="1" placeholder="Employee Id" autocomplete="off">
                      </div>
                    </div>
					 <div class="form-group">
                      <label class="col-sm-3 control-label">Contact Person</label>
                      <div class="col-sm-2" style="width:100px;">
					  <select id="salutation" name="salutation" class="form-control"  tabindex="3" autocomplete="off" >
					  <option>Mr</option>
					  <option>Mrs</option>
					  <option>Miss</option>
					  </select>
					  </div>
					  <div class="form-group">
					  <div class="col-sm-3">
                        <input type="text" class="form-control" id="emp_first_name" name="emp_first_name" placeholder="First name" value="<?php echo $this->_tpl_vars['EditList']['emp_first_name']; ?>
" tabindex="4" style="margin-left:-25px; width:142px;" onKeyUp="text_filter(this)" autocomplete="off">
					</div>
					<div class="col-sm-3">
						<input type="text" class="form-control" id="emp_last_name" name="emp_last_name" placeholder="Last name" value="<?php echo $this->_tpl_vars['EditList']['emp_last_name']; ?>
" tabindex="5" style="width:130px;margin-left:-8px;" onKeyUp="text_filter(this)" autocomplete="off">
                      </div>
                    </div>
					</div>
				<div class="form-group" style=" margin-top:-15px;">
                      <label class="col-sm-3 control-label">Father Name </label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="father_name" name="father_name" value="<?php echo $this->_tpl_vars['EditList']['father_name']; ?>
" tabindex="7" placeholder="Father Name" onKeyUp="text_filter(this)" autocomplete="off">
                      </div>
                    </div>
					  <div class="form-group">
                      <label class="col-sm-3 control-label">DOB</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="d_o_b" name="d_o_b" value="<?php echo $this->_tpl_vars['EditList']['d_o_b']; ?>
" placeholder="Date" tabindex="9"   readonly="true" autocomplete="off" >
                      </div>
					  <a href="#"><img id="calendar_icon1" src="codebase/calendar.png"></a>
                    </div>
					<div class="form-group">
                      <label class="col-sm-3 control-label">Mobile No </label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="mobile" name="mobile" value="<?php echo $this->_tpl_vars['EditList']['mobile']; ?>
" placeholder="Mobile No" maxlength="10" tabindex="11" onKeyUp="numericFilter(this);clear_err_mobile(this.id);"  onBlur="chk_exist_mob(this);" autocomplete="off">
                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-3 control-label">Qualification</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="qualification" name="qualification" value="<?php echo $this->_tpl_vars['EditList']['qualification']; ?>
" tabindex="13" placeholder="Qualification" autocomplete="off">
                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-3 control-label">Department</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="department" name="department" value="<?php echo $this->_tpl_vars['EditList']['department']; ?>
" tabindex="17" placeholder="Department" autocomplete="off">
                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-3 control-label">Joining Date</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="joining_date" name="joining_date" value="<?php echo $this->_tpl_vars['EditList']['joining_date']; ?>
" tabindex="19" placeholder="Date" readonly="true" autocomplete="off">
                      </div>
					   <a href="#"><img id="calendar_icon2" src="./codebase/calendar.png"></a>
                    </div>
					<div class="form-group">
                      <label class="col-sm-3 control-label">Address</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="address1" name="address1" value="<?php echo $this->_tpl_vars['EditList']['address1']; ?>
" tabindex="21" placeholder="Address1" autocomplete="off">
                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-3 control-label">Area</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="area" name="area" value="<?php echo $this->_tpl_vars['EditList']['area']; ?>
" tabindex="23" placeholder="Area" onKeyUp="text_filter(this)" autocomplete="off">
                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-3 control-label">Personal Mail</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="personal_mail" name="personal_mail" value="<?php echo $this->_tpl_vars['EditList']['personal_mail']; ?>
" tabindex="25" placeholder="Personal Mail" autocomplete="off">
                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-3 control-label">No of year Exper</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="no_of_year_exp" name="no_of_year_exp" value="<?php echo $this->_tpl_vars['EditList']['no_of_year_exp']; ?>
" tabindex="27" placeholder="Experience" autocomplete="off">
                      </div>
                    </div>
					
					<!--<div class="form-group">
                      <label class="col-sm-3 control-label">Remarks</label>
                      <div class="col-sm-5" >
                      <textarea class="form-control" id="remarks" name="remarks" tabindex="29" placeholder="remarks" value="" autocomplete="off" ><?php echo $this->_tpl_vars['EditList']['remarks']; ?>
</textarea>
                      </div>
                    </div>-->
					</div>
					<!--**********************************************************-->
                     <div class="col-md-6">
					 <div class="form-group">
                      <label class="col-sm-3 control-label">Company Name</label>
						<div class="col-sm-5">
						<select id="company_name" name="company_name" class="form-control" value="<?php echo $this->_tpl_vars['EditList']['comapany_name']; ?>
" tabindex="2">
						<?php if ($this->_tpl_vars['EditList']['company_name'] == 'Asian Engineering'): ?>
								<option selected="selected">Asian Engineering</option>
								<option value="Universal Infrastructure Systems">Universal Infrastructure Systems</option>
								<option value="Arka Automaations LTD">Arka Automaations LTD</option>
								<option value="Adroit Solutionz">Adroit Solutionz</option>
								<option value="Vinotronix Solutions">Vinotronix Solutions</option>
						
						<?php elseif ($this->_tpl_vars['EditList']['company_name'] == 'Universal Infrastructure Systems'): ?>
								<option value="Asian Engineering">Asian Engineering</option>
								<option selected="selected">Universal Infrastructure Systems</option>
								<option value="Arka Automaations LTD">Arka Automaations LTD</option>
								<option value="Adroit Solutionz">Adroit Solutionz</option>
								<option value="Vinotronix Solutions">Vinotronix Solutions</option>
						<?php elseif ($this->_tpl_vars['EditList']['company_name'] == 'Arka Automaations LTD'): ?>
								<option value="Asian Engineering" selected="selected">Asian Engineering</option>
								<option value="Universal Infrastructure Systems">Universal Infrastructure Systems</option>
								<option selected="selected">Arka Automaations LTD</option>
								<option value="Adroit Solutionz">Adroit Solutionz</option>
								<option value="Vinotronix Solutions">Vinotronix Solutions</option>
						<?php elseif ($this->_tpl_vars['EditList']['company_name'] == 'Adroit Solutionz'): ?>
								<option value="Asian Engineering" selected="selected">Asian Engineering</option>
								<option value="Universal Infrastructure Systems">Universal Infrastructure Systems</option>
								<option value="Arka Automaations LTD">Arka Automaations LTD</option>
								<option selected="selected">Adroit Solutionz</option>
								<option value="Vinotronix Solutions">Vinotronix Solutions</option>
						<?php elseif ($this->_tpl_vars['EditList']['company_name'] == 'Vinotronix Solutions'): ?>
								<option value="Asian Engineering" selected="selected">Asian Engineering</option>
								<option value="Universal Infrastructure Systems">Universal Infrastructure Systems</option>
								<option value="Arka Automaations LTD">Arka Automaations LTD</option>
								<option value="Adroit Solutionz">Adroit Solutionz</option>
								<option selected="selected">Vinotronix Solutions</option>
						<?php endif; ?>
						</select>
			</div>
			</div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Company Code</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="company_code"  name="company_code" value="<?php echo $this->_tpl_vars['EditList']['company_code']; ?>
" tabindex="6" placeholder="Company Code" autocomplete="off">
                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-3 control-label">Mother Name</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="mother_name" name="mother_name" value="<?php echo $this->_tpl_vars['EditList']['mother_name']; ?>
" tabindex="8" placeholder="Mother Name" onKeyUp="text_filter(this)" autocomplete="off">
                      </div>
                    </div>
					 <div class="form-group">
                      <label class="col-sm-3 control-label">Sex </label>
						<div class="col-sm-5">
						  <select id="sex" name="sex" class="form-control" tabindex="10" value="<?php echo $this->_tpl_vars['EditList']['sex']; ?>
" >
						<option id"<?php echo $this->_tpl_vars['EditList']['sex']; ?>
" value="<?php echo $this->_tpl_vars['EditList']['sex']; ?>
" selected="selected"><?php echo $this->_tpl_vars['EditList']['sex']; ?>
</option>
						<option value="0">----Select------</option>
						<option value="Male">Male</option>
					  <option value="Female">Female </option>
						</select>
                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-3 control-label">Profile Image</label>
                      <div class="col-sm-5" id="allow" style="display:none;">
						 <input type="file" id="image1" value="<?php echo $this->_tpl_vars['EditList']['image']; ?>
" name="image1" tabindex="12" autocomplete="off"></div>
						 <div class="col-sm-5" id="allow1">
						 <input type="text" id="image" value="<?php echo $this->_tpl_vars['EditList']['image']; ?>
" name="image" tabindex="12" autocomplete="off" size="18" readonly="true">&nbsp;&nbsp;<div class="fa fa-pencil-square-o" id="" onClick="image_hide();"> </div>
                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-3 control-label">Phone No</label>
					    <div class="col-sm-2">
					    <input type="text" class="form-control" id="area_code" name="area_code" value="<?php echo $this->_tpl_vars['EditList']['area_code']; ?>
" placeholder="Area Code" maxlength="6" tabindex="14" onKeyUp="numericFilter(this);" autocomplete="off" >
					  </div>
                      <div class="col-sm-2">
                        <input type="text" class="form-control" id="phone1" name="phone1" value="<?php echo $this->_tpl_vars['EditList']['phone1']; ?>
" placeholder="Phone No" maxlength="10" tabindex="15"onKeyUp="numericFilter(this);" autocomplete="off" style="margin-left:-23px;">
                      </div>
                      <div class="col-sm-2">
                        <input type="text" class="form-control" id="extension" name="extension" value="<?php echo $this->_tpl_vars['EditList']['extension']; ?>
" placeholder="Extension" maxlength="4" tabindex="16" onKeyUp="numericFilter(this);" autocomplete="off" style="margin-left:-45px;">
                       </div>
					   </div>
					<div class="form-group">
                      <label class="col-sm-3 control-label">Designation</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="designation" name="designation" value="<?php echo $this->_tpl_vars['EditList']['designation']; ?>
" tabindex="18" placeholder="Designation" autocomplete="off"   >
                      </div>
                    </div>
					 <div class="form-group">
                      <label class="col-sm-3 control-label">Residence Mobile</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="residence_mobile" name="residence_mobile" maxlength="10" value="<?php echo $this->_tpl_vars['EditList']['residence_mobile']; ?>
" tabindex="20" placeholder="Residence Mibile"  onKeyUp="numericFilter(this);clear_err_mobile(this.id);"  onBlur="chk_exist_mob(this);" autocomplete="off">
                      </div>
                    </div>

					<div class="form-group">
                      <label class="col-sm-3 control-label">Address1</label>
                      <div class="col-sm-5">
                       <input type="text" class="form-control" id="address2" name="address2" value="<?php echo $this->_tpl_vars['EditList']['address2']; ?>
"  tabindex="22" placeholder="Address2" autocomplete="off">
                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-3 control-label">Pincode</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="pincode" name="pincode" maxlength="6" value="<?php echo $this->_tpl_vars['EditList']['pincode']; ?>
" tabindex="24" placeholder="Pincode" onKeyUp="numericFilter(this);" onBlur="chk_exist_pin(this);" autocomplete="off">
                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-3 control-label">Company Mail</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="company_mail" name="company_mail" value="<?php echo $this->_tpl_vars['EditList']['company_mail']; ?>
" tabindex="26" placeholder="Company Mail" onKeyUp="clear_err_email_id();" autocomplete="off">
                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-3 control-label">Created By</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="created_by" name="created_by" value="<?php echo $this->_tpl_vars['EditList']['created_by']; ?>
" tabindex="28" readonly="true">
						<input type="hidden" class="form-control" id="created_time" name="created_time"  placeholder="Time" Value="<?php echo $this->_tpl_vars['EditList']['created_time']; ?>
">
						<input type="hidden" class="form-control" id="created_date" name="created_date"  placeholder="Date" value="<?php echo $this->_tpl_vars['EditList']['created_date']; ?>
" >
                      </div>
                    </div>
					</div>
					</div>
					  <?php endforeach; endif; unset($_from); ?>
					<div class="box-footer"><center>
                    <input type="button" class="btn btn-info pull-center" value="UPDATE EMPLOYEE" onClick="validate_fields();">&nbsp;&nbsp;
                    <button type="submit" class="btn btn-info pull-center" onClick="GoBack();" >CANCEL</button><center>
                  </div>
                  </div><!-- /.box-body -->
                </form>
     <!-- /.control-sidebar -->
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
    </div>
  </body>
</html>