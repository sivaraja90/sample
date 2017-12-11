<?php /* Smarty version 2.6.25, created on 2017-03-16 16:25:04
         compiled from customer_reg.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'customer_reg.tpl', 632, false),)), $this); ?>
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
<script type="text/javascript">
function closeit(val){
	document.forms[\'add_customer\'].elements[\'enquiry_through\'].value=val;
	}

function closeit1(val){
	parent.document.forms[\'add_customer\'].elements[\'place_type\'].value=val;
}

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
    document.execCommand(\'Stop\')
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
xmlhttp.open("GET","ajax_company_name_exist.php?name="+cmp_name.value+"&cmp_validation=yes",true);

xmlhttp.send();
}
<!---/*************************************************************************************************-->

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
function doOnLoad()
			{
			var myCalendar;
			myCalendar = new dhtmlXCalendarObject({input: "d_o_b", button: "calendar_icon1"});
			retrieve_select_bxs();
		}

function numericFilter(data)
{
   data.value = data.value.replace(/[^.0-9^.+,-]/ig,"");
}
function text_filter(data)
{
   data.value = data.value.replace(/[^ .a-z]/ig,"");

}

</script>
	<script>
       function validate_fields()
        {
		var fields=["company_name","salutation","customer_fname","enquiry_through","mail_id","area","city"];
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
						
						if(i==2)
						{
						var customer_fname  =  document.getElementById("customer_fname").value;
						if(customer_fname=="")
						{
						dhtmlx.alert({
								title: "Error !",
								type:"alert-error",
								text: "Please Enter First Name",
											});
									return false;
						}
						}
					/*	if(i==3)
						{
						var customer_lname  =  document.getElementById("customer_lname").value;
						if(customer_lname=="")
						{
						dhtmlx.alert({
								title: "Error !",
								type:"alert-error",
								text: "Please Enter Last Name",
											});
									return false;
						}
						}*/
						if(i==3)
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
						/*if(i==5)
						{
						var place_type  =  document.getElementById("place_type").value;
						if(place_type=="")
						{
						dhtmlx.alert({
								title: "Error !",
								type:"alert-error",
								text: "Please Enter Place Type",
											});
									return false;
						}
						}
						if(i==6)
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
						}*/

                if(i==4)
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
							/*if(i==8)
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
						}*/
						if(i==5)
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
						if(i==6)
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
						/*if(i==11)
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
						}*/
						return false;
				}
				}
			  FormName		= document.add_customer;
  			  FormName.method	= "POST";
              FormName.submit();
		}
		</script>
		<script>


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
	  }
	  else
	  {
			dhtmlx.alert({
			title: "Phone No",
			type:"alert-error",
			text: "You Can\'t Enter More Than 2 Phone Number "});
	  }
}



function add_more_email()
{
  var cnt_email=document.getElementById("email_fld_cnt").value;
	  if(cnt_email!=3)
	  {
		  document.getElementById("email_fld_cnt").value=parseInt(cnt_email)+1;
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
      <div class="content-wrapper">
        <section class="content-header">
          <h4>
		  <?php $_from = $this->_tpl_vars['RList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['roles']):
?>
				<?php if ($this->_tpl_vars['roles']['role_name'] == 'List Customer'): ?>&ensp;
            <small><a href="customer_list.php"><i class="fa fa-list"> <label style="font-family:Arial, Helvetica, sans-serif">
			List Customers</label></i></a></small>&ensp;&ensp;&ensp;
			<?php endif; ?>
			<?php if ($this->_tpl_vars['roles']['role_name'] == 'Add Customer'): ?>
			<small><a href="customer_reg.php"><i class="fa fa-user-plus"> <label style="font-family:Arial, Helvetica, sans-serif">
			Create Customer</label></i></a></small>
			<?php endif; ?>
			<?php endforeach; endif; unset($_from); ?>
          </h4>
        </section>
        <section class="content">
          <div class="box box-info">
            <div class="box-header with-border" align="center">
              <h3 class="box-title">Customer Registration</h3>
              <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
              </div>
            </div><!-- /.box-header -->

			<form class="form-horizontal" name="add_customer">
			<input type="hidden" name="hdAction" />
					<input type="hidden" id="c_id" name="c_id" size="25" value="<?php echo $this->_tpl_vars['c_id']; ?>
"  >
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
                      <label class="col-sm-3 control-label">Customer Id</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="customer_id" name="customer_id" value="<?php echo $this->_tpl_vars['c_id']; ?>
" placeholder="Customer Id" readonly="true"  autocomplete="off" tabindex="1">
                      </div>
					  &nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>
                    </div>
					<div class="form-group">
                      <label class="col-sm-3 control-label" >ContactPerson</label>
                      <div class="col-sm-2" style="width:99px;">
					  <select id="salutation" name="salutation" class="form-control" tabindex="3" autocomplete="off" >
					  <option value="Mr">Mr</option>
					  <option value="Mrs">Mrs</option>
					  <option value="Miss">Miss</option>
					  </select>
					  </div>
					  <div class="form-group">
					  <div class="col-sm-3 ">
                        <input type="text" class="form-control" id="customer_fname" name="customer_fname" placeholder="First name" value="<?php echo $this->_supers['post']['customer_fname']; ?>
" tabindex="3" style="margin-left:-25px; width:130px;" onKeyUp="text_filter(this);" autocomplete="off">
					</div>
					<div class="col-sm-3 ">
						<input type="text" class="form-control" id="customer_lname" name="customer_lname" placeholder="Last name" value="<?php echo $this->_supers['post']['customer_lname']; ?>
" style="width:130px; margin-left:-30px;" tabindex="4" onKeyUp="text_filter(this);" autocomplete="off">
                      </div>
					  &nbsp;&nbsp;<font class="error" color="#f56954" style="margin-left:-13px;"><b>*</b>&nbsp;</font>
                    </div>
				</div>
				<div class="form-group" style=" margin-top:-15px;">
                      <label class="col-sm-3 control-label">Place Type</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="place_type" name="place_type" value="<?php echo $this->_supers['post']['place_type']; ?>
" placeholder="Place Type" tabindex="6"  data-toggle="modal" data-target="#Place_Type"  autocomplete="off" >
                      </div>
					  <!--&nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>-->
                      </div>
					  <div class="form-group">
                      <label class="col-sm-3 control-label">Designation</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="designation" name="designation" value="<?php echo $this->_supers['post']['designation']; ?>
" placeholder="Designation" tabindex="8" onKeyUp="text_filter(this);" autocomplete="off">
						<input type="hidden" class="form-control" id="timestamp" name="timestamp" value="<?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d &amp; %I:%M:%S %p') : smarty_modifier_date_format($_tmp, '%Y-%m-%d &amp; %I:%M:%S %p')); ?>
">
						<input type="hidden" class="form-control" id="created_date" name="created_date" value="<?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d') : smarty_modifier_date_format($_tmp, '%Y-%m-%d')); ?>
">
						<input type="hidden" class="form-control" id="created_time" name="created_time" value="<?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%I:%M:%S %p') : smarty_modifier_date_format($_tmp, '%I:%M:%S %p')); ?>
">

                      </div>
					 <!-- &nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>-->
                      </div>

					 <div class="form-group">
                      <label class="col-sm-3 control-label">Email Id</label>
                      <div class="col-sm-5">
                        <input type="email" class="form-control" id="mail_id" name="mail_id" placeholder="Email Id" tabindex="10" value="<?php echo $this->_supers['post']['mail_id']; ?>
" onKeyUp="clear_err_email_id();" autocomplete="off" >
                      </div>
					  <input type="button" class="btn btn-danger btn-xs" value="ADD MAIL"  onClick="add_more_email();">
					  &nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>
					   </div>
					   <div class="form-group" id="hdn_email2" style="display:none">
                      <label class="col-sm-3 control-label">Email Id 2</label>
                      <div class="col-sm-5">
                        <input type="email" class="form-control" id="mail_id1" name="mail_id1" placeholder="Email Id 1" value="<?php echo $this->_supers['post']['mail_id1']; ?>
"  onKeyUp="clear_err_email_id();" autocomplete="off" >
                      </div>
					  </div>

					 <div class="form-group">
                      <label class="col-sm-3 control-label">Phone No</label>
					    <div class="col-sm-2">
					    <input type="text" class="form-control" id="area_code" name="area_code" placeholder="Area Code" maxlength="6" value="<?php echo $this->_supers['post']['area_code']; ?>
" tabindex="14" onKeyUp="numericFilter(this);" autocomplete="off" >
					  </div>
                      <div class="col-sm-2">
                        <input type="text" class="form-control" id="phone_no" name="phone_no" placeholder="Phone No" maxlength="10" value="<?php echo $this->_supers['post']['phone_no']; ?>
" style="margin-left:-24px;" tabindex="15"onKeyUp="numericFilter(this);" autocomplete="off" >
                      </div>
                      <div class="col-sm-2">
                        <input type="text" class="form-control" id="extension" name="extension" placeholder="Extension" maxlength="4" value="<?php echo $this->_supers['post']['extension']; ?>
" tabindex="16" onKeyUp="numericFilter(this);" autocomplete="off" style="margin-left:-46px;">
                       </div>

					 <!-- &nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>-->
					 <div class="col-sm-2">
					  <input type="button" class="btn btn-danger btn-xs" value="ADD PHONE" onClick="add_more_phone();" style="margin-left:-60px;">
					   </div>
					   </div>
					<div class="form-group" id="hdn_phone2" style="display:none;">
                      <label class="col-sm-3 control-label">Phone No 1</label>
					  <div class="col-sm-2">
					    <input type="text" class="form-control" id="area_code1" name="area_code1" maxlength="6" value="<?php echo $this->_supers['post']['area_code1']; ?>
" placeholder="Area Code 1"  onKeyUp="numericFilter(this);" autocomplete="off" >
					  </div>
                      <div class="col-sm-2">
                        <input type="text" class="form-control" id="phone_no1" name="phone_no1" maxlength="10" value="<?php echo $this->_supers['post']['phone_no1']; ?>
" placeholder="Phone No 1"  onKeyUp="numericFilter(this);" autocomplete="off" style="margin-left:-24px;">
                      </div>
                      <div class="col-sm-2">
                        <input type="text" class="form-control" id="extension1" name="extension1" maxlength="4" value="<?php echo $this->_supers['post']['extension1']; ?>
" placeholder="extension 1"  onKeyUp="numericFilter(this);" autocomplete="off" style="margin-left:-46px;" >
                       </div>
					   </div>

					 <div class="form-group">
                      <label class="col-sm-3 control-label">Address</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="address" name="address" placeholder="Address" value="<?php echo $this->_supers['post']['address']; ?>
" tabindex="18" autocomplete="off">

                      </div>
					 <!-- &nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>-->
                    </div>
					<div class="form-group">
                      <label class="col-sm-3 control-label">Area</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="area" name="area" placeholder="Area" value="<?php echo $this->_supers['post']['area']; ?>
" tabindex="20" onKeyUp="text_filter(this);" autocomplete="off">
                      </div>
					  &nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>
                    </div>
					<div class="form-group">
                      <label class="col-sm-3 control-label">City</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="city" name="city" placeholder="City" value="<?php echo $this->_supers['post']['city']; ?>
" tabindex="22" onKeyUp="text_filter(this);" autocomplete="off">

                      </div>
					  &nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>
					  </div>

					</div>
					<!--**********************************************************-->
                     <div class="col-md-6">
                    <div class="form-group">
					<p id="error_cmp_name" align="center" style="color: #FF0000;"></p>
                      <label class="col-sm-3 control-label">Company Name</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="company_name" name="company_name" value="<?php echo $this->_supers['post']['company_name']; ?>
" placeholder="Company Name" tabindex="2" autocomplete="off" onKeyUp="clear_err_name_of_cmp();text_filter(this);" onBlur="chk_exist_cmp(this);">
                      </div>
					  <font class="error" color="#f56954"><b>*</b>&nbsp;</font>

                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Enquiry Through</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="enquiry_through" name="enquiry_through" value="<?php echo $this->_supers['post']['enquiry_through']; ?>
" placeholder="Enquiry Through" value="TESTING" tabindex="5" data-toggle="modal" data-target="#Enquiry_Through" autocomplete="off">
                      </div>
					  &nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>
                    </div>
					<div class="form-group">
                      <label class="col-sm-3 control-label">Reference</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="reference" name="reference" value="<?php echo $this->_supers['post']['reference']; ?>
" placeholder="Reference" tabindex="7" autocomplete="off">
                      </div>
                    </div>

					<div class="form-group">
                      <label class="col-sm-3 control-label">DOB</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="d_o_b" name="d_o_b"  placeholder="Date" tabindex="9" value="<?php echo $this->_supers['post']['d_o_b']; ?>
" readonly="true" onClick="doOnLoad();"  autocomplete="off" >
                      </div>
					 <a href="#"><img id="calendar_icon1" src="codebase/calendar.png"></a>
                    </div>

					<div class="form-group">
                      <label class="col-sm-3 control-label">Mobile No </label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="mobile_no" name="mobile_no" placeholder="Mobile No" maxlength="10" value="<?php echo $this->_supers['post']['mobile_no']; ?>
" tabindex="11" onKeyUp="numericFilter(this);clear_err_mobile(this.id);"  onBlur="chk_exist_mob(this);" autocomplete="off">
                      </div>
					  <input type="button" class="btn btn-danger btn-xs" value="ADD MOBILE"  onClick="add_more_mobile();">
                    </div>
					<div class="form-group" id="hdn_mobile2" style="display:none;">
                      <label class="col-sm-3 control-label">Mobile No 2 </label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="mobile_no1" name="mobile_no1" maxlength="10" value="<?php echo $this->_supers['post']['mobile_no2']; ?>
" placeholder="Mobile No 2"  onKeyUp="numericFilter(this);clear_err_mobile(this.id);"  onBlur="chk_exist_mob(this);" autocomplete="off">
                      </div>
                    </div>
					<div class="form-group" id="hdn_mobile3" style="display:none;">
                      <label class="col-sm-3 control-label">Mobile No 3</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="mobile_no2" name="mobile_no2" maxlength="10" value="<?php echo $this->_supers['post']['mobile_no3']; ?>
" placeholder="Mobile No 3" onKeyUp="numericFilter(this);clear_err_mobile(this.id);"  onBlur="chk_exist_mob(this);" autocomplete="off">
                      </div>
                    </div>

					<div class="form-group" style="display:none">
                      <label class="col-sm-3 control-label">Created By</label>
                      <div class="col-sm-5">
                       <input type="text" class="form-control" id="created_by" name="created_by" value="<?php echo $this->_supers['session']['UserName']; ?>
" readonly="true" autocomplete="off" >
                      </div>
                    </div>

					  <div class="form-group">
                      <label class="col-sm-3 control-label">Address1</label>
                      <div class="col-sm-5">
                     <input type="text" class="form-control" id="address1" name="address1" value="<?php echo $this->_supers['post']['address1']; ?>
" placeholder="Address1" tabindex="17" autocomplete="off">
                      </div>
					  </div>
					  <div class="form-group">
                      <label class="col-sm-3 control-label">Land Mark</label>
                      <div class="col-sm-5">
                    <input type="text" class="form-control" id="landmark" name="landmark" value="<?php echo $this->_supers['post']['landmark']; ?>
" placeholder="Land Mark" tabindex="19" autocomplete="off">
                      </div>
                    </div>

					<div class="form-group">
                      <label class="col-sm-3 control-label">Pincode</label>
					  <div class="col-sm-5">
					   <input type="text" class="form-control" id="pincode" name="pincode" placeholder="Pincode" value="<?php echo $this->_supers['post']['pincode']; ?>
" tabindex="21" maxlength="6" onBlur="chk_exist_pin(this)" onKeyUp="numericFilter(this);" autocomplete="off">
					  </div>
					 <!-- &nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>-->
					  </div>
						<div class="form-group">
                      <label class="col-sm-3 control-label">Remarks</label>
                      <div class="col-sm-5">
					 <textarea class="form-control" id="remarks" name="remarks" value="<?php echo $this->_supers['post']['remarks']; ?>
" placeholder="Remarks" tabindex="10" autocomplete="off" value="<?php echo $this->_supers['post']['remarks']; ?>
"></textarea>
                      </div>
                    </div>

	<div class="modal fade" id="Enquiry_Through" role="dialog">
    <div class="modal-dialog2" id="modal2">
      <!-- Modal content-->
      <div class="modal-content" style="width:300px;">
        <div class="modal-header" style="background-color:#00CCFF;">
          <button type="button" class="close" id="enq_close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Enquiry Through</h4>
        </div>
        <div class="modal-body">
<table class="table table-bordered table-striped">
					<tbody>
					<tr>
					<td><input type="text" class="form-control" id="search" name="search"  placeholder="Search"></td>
					</tr>
                    <?php $_from = $this->_tpl_vars['EnqThru']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['Enq']):
?>
                      <tr>
                        <td align="center"><a id="enqid"  href="#." onClick="closeit('<?php echo $this->_tpl_vars['Enq']['description']; ?>
');" data-dismiss="modal"><?php echo $this->_tpl_vars['Enq']['description']; ?>
</a></td>
					   </tr>
					     <?php endforeach; else: ?>
						<tr>
									<td height="20" colspan="2" align="center"><img src="images/warning.gif" border="0">&nbsp;No Records Found</td>
						</tr>
					<?php endif; unset($_from); ?>
					  </tbody>
                  </table>

        </div>
      </div>
    </div>
  </div>

	<div class="modal fade" id="Place_Type" role="dialog" >
    <div class="modal-dialog1">
      <!-- Modal content-->
      <div class="modal-content" style="width:300px;">
        <div class="modal-header" style="background-color:#00CCFF;">
 <button type="button" class="close" id="enq_close" data-dismiss="modal">&times;</button>
      <h4 class="modal-title">Place Type</h4>
        </div>
        <div class="modal-body">
<table class="table table-bordered table-striped ">
					<tbody>
					<tr>
					<td><input type="text" class="form-control" id="search" name="search" placeholder="Search"></td>
					</tr>
					 <?php $_from = $this->_tpl_vars['cusreg']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['cus']):
?>
                      <tr >
                        <td align="center"><a  href="#." onClick="closeit1('<?php echo $this->_tpl_vars['cus']['place_type']; ?>
');" data-dismiss="modal"><?php echo $this->_tpl_vars['cus']['place_type']; ?>
</a></td>
					   </tr>
					     <?php endforeach; else: ?>
						<tr>
									<td height="20" colspan="2" align="center"><img src="images/warning.gif" border="0">&nbsp;No Records Found</td>
						</tr>
					<?php endif; unset($_from); ?>
					  </tbody>

                  </table>
				  <div class="modal modal infos-footer">

                    <button type="button" class="btn btn-outline pull-center" data-dismiss="modal">Close</button>

                  </div>
        </div>
      </div>
    </div>
  </div>

                  </div>
                   </div>
				   <div class="box-footer">
					<center>
                    <!--<button type="submit" class="btn btn-info pull-center" onClick="validate_fields();">ADD CUSTOMER</button>-->
					<input type="button" class="btn btn-info pull-center" value="ADD"  onClick="validate_fields();" tabindex="24"  >&nbsp;&nbsp;
                    <a href="customer_list.php" class="btn btn-info pull-center" value="CANCEL"  onClick="cancel();" tabindex="25" >CANCEL</a>
					</center>
                  </div>
				   </section>
      <div class="control-sidebar-bg"></div>
    </div>
</div>
</body>
</html>