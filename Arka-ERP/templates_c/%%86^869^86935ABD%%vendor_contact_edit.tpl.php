<?php /* Smarty version 2.6.25, created on 2017-01-27 11:12:04
         compiled from vendor_contact_edit.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'vendor_contact_edit.tpl', 466, false),)), $this); ?>
<?php echo $this->_tpl_vars['IncludeCSS']; ?>

<?php echo $this->_tpl_vars['IncludeJS']; ?>

<?php echo '
<script type="text/javascript" src=\'./dhtmlxMessage/codebase/dhtmlxmessage.js\'></script>
	<script type=\'text/javascript\' src=\'./auto-complete/jquery-1.3.2.js\'></script>
	<script type=\'text/javascript\' src=\'./auto-complete/jquery.metadata.js\'></script>
	<script type=\'text/javascript\' src=\'./auto-complete/jquery.auto-complete.js?<?= mktime() ?>\'></script>
	<script type=\'text/javascript\' src=\'./auto-complete/js.js?<?= mktime() ?>\'></script>
	<link rel="stylesheet" href= "./codebase/skins/dhtmlxmessage_dhx_skyblue.css" type="text/css" media="all"/> 
	<link rel=\'stylesheet\' type=\'text/css\' href=\'auto-complete/jquery.auto-complete.css?<?= mktime() ?>\' />
	<link rel="stylesheet" href="\'https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
	<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css"/>
	<style>
	th {
    font-style: normal;
	font-weight:100;
	font-size:14px;
	margin-right:100px;
}
table { 
    border-spacing: 2px;
    border-collapse: separate;
}
td{ padding:10px;
width:50px;

}
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
html, body {
	padding: 0;
	margin: 0;
	overflow: hidden;
}
#vendor {
	position: absolute;
	left: 0;
	top: 0;
	right: -30px;
	bottom: 0;	
	padding-right: 15px;
	overflow-y: scroll;
}

</style>

<script>
function doOnLoad() 
			{
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
		var fields=["salutation","customer_fname","customer_lname","d_o_b","designation","area","mail_id"];
				for(i=0;i<fields.length;i++)
				{
				current_iteration = document.getElementById(fields[i]).value;
				document.getElementById(fields[i]).style.borderColor="";
						if(current_iteration=="")
						{
						document.getElementById(fields[i]).focus();
						document.getElementById(fields[i]).style.borderColor="red";
						if(i==1)
						{
						var customer_fname  =  document.getElementById("customer_fname").value;
						if(customer_fname=="")
						{
						dhtmlx.alert({
								title: "Error !",
								type:"alert-error",
								text: "Please Enter Customer First Name",
											});
									return false;
						}
						}
						if(i==2)
						{
						var customer_lname  =  document.getElementById("customer_lname").value;
						if(customer_lname=="")
						{
						dhtmlx.alert({
								title: "Error !",
								type:"alert-error",
								text: "Please Enter Customer Last Name",
											});
									return false;
						}
						}
						
						if(i==3)
						{
						var d_o_b  =  document.getElementById("d_o_b").value;
						if(d_o_b=="")
						{
						dhtmlx.alert({
								title: "Error !",
								type:"alert-error",
								text: "Please Enter  DOB",
											});
									return false;
						}
						}
						if(i==4)
						{
						var designation  =  document.getElementById("designation").value;
						if(designation=="")
						{
						dhtmlx.alert({
								title: "Error !",
								type:"alert-error",
								text: "Please Enter  Designation",
											});
									return false;
						}
						}
						
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
						var con_ph  =  document.getElementById("phone_no").value;
						var con_mo = document.getElementById("mobile_no").value;
								if (con_ph=="" && con_mo=="")
								{
								dhtmlx.alert({
								title: "Error !",
								type:"alert-error",
								text: "Please Enter Mobile No or Phone No ",
											});
									return false;
								}
						var mail_id  =  document.getElementById("mail_id").value;
						if(mail_id=="")
						{
						dhtmlx.alert({
								title: "Error !",
								type:"alert-error",
								text: "Please Enter E-mail Id",
											});
									return false;
						}
						
						if(mail_id !="")
						{
						var mail_id  =  document.getElementById("mail_id").value;
						var atpos  =  mail_id.indexOf("@");
						var dotpos = mail_id.lastIndexOf(".");
								if (atpos< 1 || dotpos<atpos+2 || dotpos+2>=mail_id.length)
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
						/*if(i==7)
						{
						var con_ph  =  document.getElementById("phone_no").value;
						var con_mo = document.getElementById("mobile_no").value;
								if (con_ph=="" && con_mo=="")
								{
								dhtmlx.alert({
								title: "Error !",
								type:"alert-error",
								text: "Please Enter Mobile No or Phone No ",
											});
									return false;
								}
								else
								{

								}
						}*/
						return false;					
				}	
				}
			  FormName		= document.add_contact;
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
<div id="vendor">
		<form class="form-horizontal" name="add_contact">
			<input type="hidden" name="hdAction" />
			<input type="hidden" id="vendor_id" name="vendor_id"  value="<?php echo $this->_supers['get']['vendor_id']; ?>
"  >
			
					<input type="hidden" id="mobile_fld_cnt" name="mobile_fld_cnt"  value="2"  >
					<input type="hidden" id="phone_fld_cnt" name="phone_fld_cnt"  value="2"  >
					<input type="hidden" id="email_fld_cnt" name="email_fld_cnt"  value="2"  >
					<input type="hidden" id="hdn_salutation" name="hdn_salutation" value="<?php echo $this->_tpl_vars['Contact']['salutaion']; ?>
">
					<input type="hidden" id="hdn_order_status" name="hdn_order_status" value="<?php echo $this->_tpl_vars['Contact']['order_status']; ?>
">
					<input type="hidden" id="hdn_customer_status" name="hdn_customer_status" value="<?php echo $this->_tpl_vars['Contact']['customer_status']; ?>
">
					<input type="hidden" id="hdn_customer_type" name="hdn_customer_type" value="<?php echo $this->_tpl_vars['Contact']['customer_type']; ?>
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
				   <table class="col-md-6">
				   <?php $_from = $this->_tpl_vars['EditContact']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['Contact']):
?>
				   <input type="hidden" id="sl_no" name="sl_no" value="<?php echo $this->_tpl_vars['Contact']['sl_no']; ?>
" />
				   <input type="hidden" id="v_name" name="v_name" value="<?php echo $this->_tpl_vars['Contact']['vendor_id']; ?>
"/>
					<tr class="form-group">
                      <th class="col-sm-4 control-th">Contact Person</th>
                      <td class="col-sm-2">
					  <select name="salutation" id="salutation" class="form-control" tabindex="3" value="<?php echo $this->_tpl_vars['Contact']['salutation']; ?>
" style="width:70px;" >
					  <option>Mr</option>
					  <option>Mrs</option>
					  <option>Miss</option>
					  </select>
					  </td>
					  <td class="col-sm-3">
                        <input type="text" class="form-control" id="customer_fname" name="customer_fname" placeholder="First name" value="<?php echo $this->_tpl_vars['Contact']['vendor_contact_person_fname']; ?>
" tabindex="4" style="margin-left:-105px; width:150px;" onKeyUp="text_filter(this);">
					  </td>
					  <td class="col-sm-3">
						<input type="text" class="form-control" id="customer_lname" name="customer_lname" placeholder="Last name" value="<?php echo $this->_tpl_vars['Contact']['vendor_contact_person_lname']; ?>
" style="margin-left:-25px; width:150px;" tabindex="5" onKeyUp="text_filter(this);"><td><!--&nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>&nbsp;&nbsp;--></td>
                      </td>
                    </tr>
				 <tr class="form-group">
                      <th class="col-sm-4 control-th">Mobile No </th>
                      <td class="col-sm-2">
                        <input type="text" class="form-control" id="mobile_no" name="mobile_no" placeholder="Mobile No" value="<?php echo $this->_tpl_vars['Contact']['mobile_no']; ?>
" maxlength="10" tabindex="6" style="width:150;" onKeyUp="numericFilter(this);clear_err_mobile(this.id);"  onBlur="chk_exist_mob(this);"><td><input type="button" class="btn btn-danger btn-xs" value="ADD MOBILE"  onClick="add_more_mobile();" style="margin-right:-100px;"><!--&nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>&nbsp;&nbsp;--></td>
                     </td>
                    </tr>
					<tr class="form-group" id="hdn_mobile2" style="display:none;">
                      <th class="col-sm-4 control-th">Mobile No 2 </th>
                      <td class="col-sm-6">
                        <input type="text" class="form-control" id="mobile_no2" name="mobile_no2" maxlength="10" placeholder="Mobile No 2" value="<?php echo $this->_tpl_vars['Contact']['mobile_no2']; ?>
"  onKeyUp="numericFilter(this);clear_err_mobile(this.id);"  onBlur="chk_exist_mob(this);">
                      </td>
                    </tr>
					<tr class="form-group" id="hdn_mobile3" style="display:none;">
                      <th class="col-sm-4 control-th">Mobile No 3</th>
                      <td class="col-sm-6">
                        <input type="text" class="form-control" id="mobile_no3" name="mobile_no3" value="<?php echo $this->_tpl_vars['Contact']['mobile_no3']; ?>
" maxlength="10" placeholder="Mobile No 3" onKeyUp="numericFilter(this);clear_err_mobile(this.id);"  onBlur="chk_exist_mob(this);">
                      </td>
                    </tr>
					 <tr class="form-group">
                      <th class="col-sm-4 control-th">Created By</th>
                      <td class="col-sm-6">
                        <input type="text" class="form-control" id="created_by" value="<?php echo $this->_tpl_vars['Contact']['created_by']; ?>
" name="created_by" placeholder="Created By" readonly="true" tabindex="7">
                      </td>
					</tr> 
                     <tr class="form-group">
                      <th class="col-sm-4 control-th">D O B</th>
                      <td class="col-sm-4">
                        <input type="text" class="form-control" id="d_o_b" name="d_o_b"  placeholder="Date" tabindex="8" value="<?php echo $this->_tpl_vars['Contact']['d_o_b']; ?>
" onClick="doOnLoad();"  autocomplete="off" ></td>
						<td><!--<font class="error" color="#f56954" style="margin-right:20px;"><b>*</b></font>--><a href="#"><img id="calendar_icon1" src="codebase/calendar.png"></a>
                      </td>
                    </tr>
					<tr class="form-group">
                      <th class="col-sm-4 control-th">Designation</th>
                      <td class="col-sm-6">
                        <input type="text" class="form-control" id="designation" name="designation" value="<?php echo $this->_tpl_vars['Contact']['designation']; ?>
" placeholder="Designation" tabindex="9" onKeyUp="text_filter(this);">
						<input type="hidden" class="form-control" id="timestamp" name="timestamp" value="<?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d &amp; %I:%M:%S %p') : smarty_modifier_date_format($_tmp, '%Y-%m-%d &amp; %I:%M:%S %p')); ?>
">
               			<td><!--&nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>--></td>
						</td>
                      </tr> 
					  <tr class="form-group">
                      <th class="col-sm-4 control-th">Area</th>
                      <td class="col-sm-6">
                        <input type="text" class="form-control" id="area" name="area" value="<?php echo $this->_tpl_vars['Contact']['area']; ?>
" placeholder="Area" tabindex="10">
               			<td><!--&nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>--></td>
						</td>
                      </tr> 
					 <tr class="form-group">
                      <th class="col-sm-4 control-th">Phone No</th>
					    <td class="col-sm-3">
					    <input type="text" class="form-control" id="area_code" name="area_code" value="<?php echo $this->_tpl_vars['Contact']['area_code']; ?>
" placeholder="Area Code" tabindex="11" style="width:75px;" onKeyUp="numericFilter(this);" ></td>
                        <td class="col-sm-2"><input type="text" class="form-control" id="phone_no" name="phone_no" value="<?php echo $this->_tpl_vars['Contact']['phone_no']; ?>
" placeholder="Phone No" maxlength="10" style="width:100px; margin-left:-100px;" tabindex="12"onKeyUp="numericFilter(this);" ></td>
                     <td class="col-sm-2"><input type="text" class="form-control" id="extension" name="extension" placeholder="Extension" value="<?php echo $this->_tpl_vars['Contact']['extension']; ?>
" tabindex="13" style="width:100px; margin-left:-70px;" onKeyUp="numericFilter(this);" ></td>
   					 <td class="col-sm-2"> <!--<font class="error" color="#f56954" style="margin-right:-90px;"><b>*</b>&nbsp;</font>--><input type="button" class="btn btn-danger btn-xs" value="ADD PHONE" onClick="add_more_phone();" style="margin-left:-105px;">
					   </td>
					   </tr>
					   <tr class="form-group" id="hdn_phone2" style="display:none;">
                      <th class="col-sm-4 control-th">Phone No 1</th>
					  <td class="col-sm-2">
					    <input type="text" class="form-control" id="area_code1" name="area_code1" value="<?php echo $this->_tpl_vars['Contact']['area_code1']; ?>
" placeholder="Area Code 1" style="width:75px;" onKeyUp="numericFilter(this);" >
					  </td>
                      <td class="col-sm-2">
                        <input type="text" class="form-control" id="phone_no1" name="phone_no1" value="<?php echo $this->_tpl_vars['Contact']['phone_no1']; ?>
" placeholder="Phone No 1" style="width:100px; margin-left:-100px;" onKeyUp="numericFilter(this);" >
                      </td>
                      <td class="col-sm-2">
                        <input type="text" class="form-control" id="extension1" name="extension1" value="<?php echo $this->_tpl_vars['Contact']['extension1']; ?>
" placeholder="extension 1" style="width:100px; margin-left:-70px;" onKeyUp="numericFilter(this);" >
                       </td>
					   </tr>
					   <tr class="form-group">
                      <th class="col-sm-4 control-th">Email Id</th>
                      <td class="col-sm-6">
                        <input type="email" class="form-control" id="mail_id" name="mail_id" value="<?php echo $this->_tpl_vars['Contact']['mail_id']; ?>
" placeholder="Email Id" tabindex="14" onKeyUp="clear_err_email_id();" >
						<td><input type="button" class="btn btn-danger btn-xs" value="ADD MAIL"  onClick="add_more_email();" style="margin-right:-90px;"><!--&nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;--></td>
                   </td>
					</tr> 
					   <tr class="form-group" id="hdn_email2" style="display:none">
                      <th class="col-sm-4 control-th">Email Id 2</th>
                      <td class="col-sm-6">
                     <input type="email" class="form-control" id="mail_id1" name="mail_id1" value="<?php echo $this->_tpl_vars['Contact']['mail_id1']; ?>
" placeholder="Email Id 1"  onKeyUp="clear_err_email_id();" >
                      </td>
					  </tr>
					<tr class="form-group">
                      <th class="col-sm-4 control-th">Remarks</th>
                      <td class="col-sm-6">
                        <textarea class="form-control" id="remarks" name="remarks" placeholder="Remarks" tabindex="15"><?php echo $this->_tpl_vars['Contact']['remarks']; ?>
</textarea>
                      <td><!--&nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>--></td>
					  </td>
                    </tr>
					<?php endforeach; endif; unset($_from); ?>
					</table>
					</form>
					<div class="box-footer">
					<center>
					<input type="button" class="btn btn-info pull-center" value="UPDATE"  onClick="validate_fields();">&nbsp;&nbsp;
                    <input type="button" class="btn btn-info pull-center" value="CANCEL" data-dismiss="modal" >&nbsp;&nbsp;
					</center>
                  </div>
				  </div>
				 </body>