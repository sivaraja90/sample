<?php /* Smarty version 2.6.25, created on 2017-11-30 16:46:41
         compiled from enquiry_reg.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'enquiry_reg.tpl', 940, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "left.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php echo '
<script>
function closeit(val){
//alert(val);
					document.forms[\'addEnquiry\'].elements[\'enquiry_through\'].value=val;
					}

function closeWin() {
    				myWindow.close();
					}

</script>

<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>-->
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
$(document).ready(function() {
 $("#EnqHide").click(function(){
					 $("#Enquiry").hide();
				});


      });

function testMethods1(){
var d1 = new Date();
var d1t0 = d1.getTime()/1000;
 var d1t1 = (d1.getTime()-d1.getMilliseconds())/1000;
  var d1t2 = parseInt(d1.getTime()/1000);
  var msg = \'Testing various methods:\' +\'\\n1) Date.getTime()/1000 = \'+d1t0 +\'\\n2) (Date.getTime()-Date.getMilliseconds())/1000 = \'+d1t1 +\'\\n3) parseInt(Date.getTime()/1000) = \'+d1t2 alert(msg) return false }
   </script>


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

function Assign2() {
var as = document.getElementById(\'assign_to\').value;

var a2 = as.toLowerCase();
document.getElementById(\'assign_to\').value = a2;
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
function doOnLoad()
			{
			var myCalendar;
			var myCalendar1;
			var myCalendar2;
			var myCalendar3;
			myCalendar = new dhtmlXCalendarObject({input: "date_of", button: "calendar_icon"});
			myCalendar1 = new dhtmlXCalendarObject({input: "snooze_date", button: "calendar_icon1"});
			myCalendar2 = new dhtmlXCalendarObject({input: "closed_date", button: "calendar_icon2"});
			myCalendar3 = new dhtmlXCalendarObject({input: "po_date", button: "calendar_icon3"});
			retrieve_select_bxs();
			Fill_Name_of_Clr();

		}
function numericFilter(data)
{
   data.value = data.value.replace(/[^.0-9^.+,-]/ig,"");
}

function HourFilter(data)
{

   if(data.value<=23)
								{
								return true;
								}
		else
								{
								data.value = ""
								dhtmlx.alert({
								title: "Error !",
								type:"alert-error",
								text: "Enter Hour between 0 to 23 ",
											});
								return false;
								}


}
function MinuteFilter(data)
{
if(data.value<=59)
								{
								return true;
								}
		else
								{
								data.value = ""
								dhtmlx.alert({
								title: "Error !",
								type:"alert-error",
								text: "Enter Minute between 0 to 59 ",
											});
								return false;
								}


}
function SecondFilter(data)
{
if(data.value<=59)
								{
								return true;
								}
		else
								{
								data.value = ""
								dhtmlx.alert({
								title: "Error !",
								type:"alert-error",
								text: "Enter Second between 0 to 59 ",
											});
								return false;
								}


}
function text_filter(data)
{
   data.value = data.value.replace(/[^ .a-z]/ig,"");

}
function validate_fields()
        {
		var fields=["company_name","customer_name","arka_group","enquiry_type","snooze_date","enquiry_through","assign_to","requirement","branch","pg","open_status"];
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
						var n = document.getElementById("customer_name");
                        var optionSelIndex = n.options[n.selectedIndex].value;
                        var optionSelectedText = n.options[n.selectedIndex].text;
						if(optionSelIndex == "")
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
						var g = document.getElementById("arka_group");
                        var optionSelIndex = g.options[g.selectedIndex].value;
                        var optionSelectedText = g.options[g.selectedIndex].text;
						if(optionSelIndex == "")
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
						var t = document.getElementById("enquiry_type");
                        var optionSelIndex = t.options[t.selectedIndex].value;
                        var optionSelectedText = t.options[t.selectedIndex].text;
						if(optionSelIndex == "")
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
						var p = document.getElementById("pg");
                        var optionSelIndex = p.options[p.selectedIndex].value;
                        var optionSelectedText = p.options[p.selectedIndex].text;
						if(optionSelIndex == "")
				
						{
						dhtmlx.alert({
								title: "Error !",
								type:"alert-error",
								text: "Please Enter PG",
											});
									return false;
						}
						}
						if(i==10)
						{
						var Open  =  document.getElementById("open_status").value;
						if(open_status=="0")
						{
						dhtmlx.alert({
								title: "Error !",
								type:"alert-error",
								text: "Please Select Open Status",
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
			split_id=x.split("|CUSID|");
			document.getElementById("customer_id").value=split_id[1];
			document.getElementById("customer_name").innerHTML=x;

	   }
	 else
	   {
	   document.getElementById("customer_name").innerHTML="<option value=\'0\'>Please select Company Name</option>";
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
var sal = new Object;


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
		sal[emp_name] = split_cnt_dtl2[9];

	}
	document.getElementById("designation").value=var_designation[val];
	document.getElementById("mobile_no").value=mobile[val];
	document.getElementById("area").value=area[val];
	document.getElementById("mail_id").value=email[val];
	document.getElementById("mail_id1").value=email1[val];
	document.getElementById("area_code").value=area_code[val];
	document.getElementById("phone_no").value=phone[val];
	document.getElementById("extension").value=extn[val];
	document.getElementById("salutation").value=sal[val];

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
	   document.getElementById("customer_name").innerHTML="<option value=\'0\'>Please select Company Name</option>";
	   }

    }
  }
xmlhttp.open("GET","ajax_enquiry.php?area="+area+"&company_name="+company_name,true);
xmlhttp.send();

}

function createProductWindow(call_from)
{



  dhxWins = new dhtmlXWindows();
    dhxWins.setImagePath("./codebase/imgs/");
    dhxWins.attachViewportTo("winVP");
	var p = 0;
			dhxWins.forEachWindow(function(){p++;});
			if(p>2)
			 {
				alert("Too many windows");
				return;
			 }

	window_flag=1;

/*  win = dhxWins.createWindow("w3",300, 0, 600, 500);
    win.setText("Product List");
    win.attachURL("./cstmr_remrk_prdt_lst.php");*/

    win = dhxWins.createWindow("w2",260, 0, 1000, 800);
    win.setText("Product List");
    win.attachURL("./enquiry_product_list.php?call_from="+call_from);
	win.denyMove();




}
function Enbl_Othrs()
{
            document.getElementById("requirement").value.toUpperCase();
			if(document.getElementById("requirement").value.indexOf("Other")>-1||document.getElementById("requirement").value.indexOf("other")>-1)
			{
			document.getElementById("others").readOnly = false;
			}
			else
			{
			document.getElementById("others").value = "";
			document.getElementById("others").readOnly = true;
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
			<?php if ($this->_tpl_vars['roles']['role_name'] == 'List Enquiry'): ?>&ensp;
            <small><a href="enquiry_list.php"><i class="fa fa-list"> <label style="font-family:Arial, Helvetica, sans-serif">
			List Enquiries</label></i></a></small>&ensp;&ensp;&ensp;
			<?php endif; ?>

				<?php if ($this->_tpl_vars['roles']['role_name'] == 'Add Enquiry'): ?>
			<small><a href="enquiry_reg.php"><i class="fa fa-user-plus"> <label style="font-family:Arial, Helvetica, sans-serif">
			Create Enquiry</label></i></a></small><?php endif; ?>
			<?php endforeach; endif; unset($_from); ?>

          </h4>
        </section>
        <section class="content">
          <div class="box box-info">
            <div class="box-header Closed With Order-border" align="center">
              <h3 class="box-title">Enquiry Registration</h3>
              <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
              </div>
            </div><!-- /.box-header -->

			<form class="form-horizontal" name="addEnquiry">
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
		 <?php endif; ?>		<input type="hidden" id="hdn_customer_type" name="hdn_customer_type" value="<?php echo $this->_supers['post']['customer_type']; ?>
">
					<input type="hidden" id="c_id" name="c_id" size="25" value="<?php echo $this->_tpl_vars['c_id']; ?>
"  >
					<input type="hidden" id="mobile_fld_cnt" name="mobile_fld_cnt"  value="2"  >
					<input type="hidden" id="phone_fld_cnt" name="phone_fld_cnt"  value="2"  >
					<input type="hidden" id="email_fld_cnt" name="email_fld_cnt"  value="2"  >
					<input type="hidden" id="hdn_cnt_dtls" name="hdn_cnt_dtls" value="">
					<input type="hidden" id="hdn_add_dtls" name="hdn_add_dtls" value="">
					<input type="hidden" id="hdn_salutation" name="hdn_salutation" value="<?php echo $this->_supers['post']['salutaion']; ?>
">
					<input type="hidden" id="hdn_order_status" name="hdn_order_status" value="<?php echo $this->_supers['post']['order_status']; ?>
">
					<input type="hidden" id="hdn_customer_status" name="hdn_customer_status" value="<?php echo $this->_supers['post']['customer_status']; ?>
">
					<input type="hidden" id="hdn_customer_type" name="hdn_customer_type" value="<?php echo $this->_supers['post']['customer_type']; ?>
">
                  <div class="box-body">
				   <div class="col-md-6">
				    <div class="form-group">
                      <label class="col-sm-3 control-label ">Enquiry Id</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="enquiry_id" name="enquiry_id" placeholder="Enquiry Id" value="<?php echo $this->_tpl_vars['e_id']; ?>
" value="test" readonly="true" tabindex="1">
                      </div>
					 <!-- &nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>-->
                    </div>

					<div class="form-group">
                      <label class="col-sm-3 control-label">Customer Id</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="customer_id" name="customer_id" value="<?php echo $this->_supers['post']['customer_id']; ?>
" placeholder="Customer Id" readonly="true">
						<input type="hidden" class="form-control" id="salutation" name="salutation" value="<?php echo $this->_supers['post']['salutation']; ?>
" placeholder="Salutation" readonly="true">
                      </div>
					  <!--&nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>-->
                    </div>
					<div class="form-group">
                      <label class="col-sm-3 control-label">Contact Person</label>
                  <div class="col-sm-5">
					<select id="customer_name" name="customer_name" class="form-control" onChange="split_cnt_dtls(this.value);" tabindex="3" value="<?php echo $this->_supers['post']['customer_name']; ?>
">
						<option value=""> -- Select Customer Name -- </option>
						</select>
                      </div>

					 <!-- &nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>-->
					  <!-- <input type="button" class="btn btn-danger btn-xs" value="ADD Contact" data-toggle="modal" data-target="#Contact">-->
                    </div>

					<div class="form-group">
                      <label class="col-sm-3 control-label">Mobile No </label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="mobile_no" name="mobile_no" placeholder="Mobile No" readonly="true" value="<?php echo $this->_supers['post']['mobile_no']; ?>
" maxlength="10" onKeyUp = "numericFilter(this);clear_err_mobile(this.id);"  onBlur="chk_exist_mob(this);">
                      </div>
					<!--&nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>-->

                    </div>
										<div class="form-group">
																<label class="col-sm-3 control-label">Phone No</label>
												<div class="col-sm-2">
											<input type="text" class="form-control" id="area_code" name="area_code" placeholder="Area Code" readonly="true" onKeyUp="numericFilter(this);" >
											</div>
																<div class="col-sm-2">
																	<input type="text" class="form-control" id="phone_no" name="phone_no" placeholder="Phone No" readonly="true" maxlength="9" style="margin-left:-25px;" onKeyUp="numericFilter(this);" >
																</div>
																<div class="col-sm-2">
																	<input type="text" class="form-control" id="extension" name="extension" placeholder="Extension" readonly="true" onKeyUp="numericFilter(this);" style="margin-left:-45px;">
																 </div>
											 </div>

				<div class="form-group">
				<label class="col-sm-3 control-label">Email Id</label>
				<div class="col-sm-5">
				<input type="email" class="form-control" id="mail_id" name="mail_id" placeholder="Email Id" readonly="true" value="<?php echo $this->_supers['post']['mail_id']; ?>
" onKeyUp="clear_err_email_id();" >

				</div>
				</div>
				<div class="form-group" id="hdn_email2" style="display:none" >
				<label class="col-sm-3 control-label">Email Id 2</label>
				<div class="col-sm-5">
				<input type="email" class="form-control" id="mail_id1" name="mail_id1" placeholder="Email Id 1" value="<?php echo $this->_supers['post']['mail_id1']; ?>
" onKeyUp="clear_err_email_id();" >
				</div>
				</div>
					<div class="form-group" id="PODate" style="display:none">
                      <label class="col-sm-3 control-label">PO Date</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="po_date" name="po_date" placeholder ="Po Date" onClick="doOnLoad();" value="<?php echo $this->_supers['post']['po_date']; ?>
">
                      </div>
					  <!--&nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>-->
					  <a href="#"><img id="calendar_icon3" src="codebase/calendar.png"></a>
                    </div>
					<div class="form-group" id="closedDate" style="display:none">
                      <label class="col-sm-3 control-label">Closed Date</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="closed_date" name="closed_date"  placeholder ="Closed Date" value="<?php echo $this->_supers['post']['closed_date']; ?>
" onClick="doOnLoad();" readonly="true">
                      </div>
					  <!--&nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>-->
					  <a href="#"><img id="calendar_icon2" src="codebase/calendar.png"></a>
                    </div>
					 <div class="form-group" style="display:none">
                      <label class="col-sm-3 control-label">Created By</label>
                      <div class="col-sm-5">
                        <input type="hidden" class="form-control" id="created_by" name="created_by"  value="<?php echo $this->_supers['session']['UserName']; ?>
" readonly="true" >
                      </div>
					  <!--&nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>-->
                    </div>

					 <div class="form-group">
                      <label class="col-sm-3 control-label">Address</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="address" name="address" placeholder="Address" value="<?php echo $this->_supers['post']['address']; ?>
" readonly="true">

                      </div>
					  <!--&nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>-->
                    </div>

					<div class="form-group">
                      <label class="col-sm-3 control-label">Address1</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="address1" name="address1" placeholder="Address1" value="<?php echo $this->_supers['post']['address1']; ?>
" readonly="true">
                      </div>
					  <!--&nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>-->
					  </div>
					<div class="form-group">
                      <label class="col-sm-3 control-label">Area</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="area" name="area" placeholder="Area" value="<?php echo $this->_supers['post']['area']; ?>
" onKeyUp="text_filter(this);" readonly="true">
                      </div>
					 <!-- &nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>-->
                    </div>
					  <div class="form-group">
                      <label class="col-sm-3 control-label">Land Mark</label>
                      <div class="col-sm-5">
                      <input type="text" class="form-control" id="landmark" name="landmark" placeholder="Land Mark" value="<?php echo $this->_supers['post']['landmark']; ?>
" readonly="true">
                      </div>
					  <!--&nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>-->
                    </div>
					<div class="form-group">
                      <label class="col-sm-3 control-label">City</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="city" name="city" placeholder="City" value="<?php echo $this->_supers['post']['city']; ?>
" onKeyUp="text_filter(this);" readonly="true">
                      </div>
					  <!--&nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>-->
					  </div>

					<div class="form-group">
					<label class="col-sm-3 control-label">Pincode</label>
					<div class="col-sm-5">
					<input type="text" class="form-control" id="pincode" name="pincode" placeholder="Pincode" value="<?php echo $this->_supers['post']['pincode']; ?>
" maxlength="6" onBlur="chk_exist_pin(this)" onKeyUp="numericFilter(this);" readonly="true">
					</div>
					<!--&nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>-->
					</div>

                       <div class="form-group">
                      <label class="col-sm-3 control-label">PG</label>
                      <div class="col-sm-5">
                   <select id="pg" name="pg" class="form-control" value="<?php echo $this->_supers['post']['pg']; ?>
"  tabindex="11" onChange="pg_select();">
															<option value="">----Select------</option>
															<option value="SSG" >SSG</option>
															<option value="Storage" >Storage</option>
															</select>                     
															 </div>
                    </div>
					
					</div>
					<!--**********************************************************-->
                     <div class="col-md-6">

						<div class="form-group">
                      <label class="col-sm-3 control-label">Company Name</label>
                      <div class="col-sm-5">
                      <input type="text" class="form-control" id="company_name" name="company_name" value="<?php echo $this->_supers['post']['company_name']; ?>
" placeholder="Company Name" tabindex="2" onKeyUp="text_filter(this);">
                      </div>
					  <!--&nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>-->
                    </div>
					<div class="form-group">
                      <label class="col-sm-3 control-label">Designation</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="designation" name="designation" placeholder="Designation" readonly="true" value="<?php echo $this->_supers['post']['designation']; ?>
" onKeyUp="text_filter(this);">
						<input type="hidden" class="form-control" id="timestamp" name="timestamp" value="<?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d &amp; %I:%M:%S %p') : smarty_modifier_date_format($_tmp, '%Y-%m-%d &amp; %I:%M:%S %p')); ?>
">
						<input type="hidden" class="form-control" id="created_date" name="created_date" value="<?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d') : smarty_modifier_date_format($_tmp, '%Y-%m-%d')); ?>
">
						<input type="hidden" class="form-control" id="created_time" name="created_time" value="<?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%I:%M:%S %p') : smarty_modifier_date_format($_tmp, '%I:%M:%S %p')); ?>
">
                      </div>
					  <!--&nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>-->
                      </div>


					<div class="form-group" id="closedTime" style="display:none">
					<label class="col-sm-3 control-label">Closed Time</label>
					<div class="col-sm-2">
					<input type="text" class="form-control" id="closed_hours" name="closed_time"  placeholder="Hours" value="<?php echo $this->_supers['post']['closed_hours']; ?>
" onKeyUp="HourFilter(this);" onClick="doOnLoad();" autocomplete="OFF" >
					</div>
					<div class="col-sm-2">
					<input type="text" class="form-control" id="closed_minutes" name="closed_minutes" placeholder="Minutes"  value="<?php echo $this->_supers['post']['closed_minutes']; ?>
" style="margin-left:-25px;" onKeyUp="MinuteFilter(this);" autocomplete="OFF" >
					</div>
					<div class="col-sm-2">
					<input type="text" class="form-control" id="closed_seconds" name="closed_seconds" placeholder="Seconds" value="00" style="margin-left:-45px;" onKeyUp="SecondFilter(this);" autocomplete="OFF" readonly="true">
					</div>
					<!--&nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>-->
					</div>

					<div class="form-group">
                      <label class="col-sm-3 control-label">Enquiry Status</label>
                      <div class="col-sm-5">
						<input type="text" id="enquiry_status" name="enquiry_status" class="form-control" value="Open" readonly="true" >
                      </div>
                    </div>
					
					<div class="form-group">
                      <label class="col-sm-3 control-label">Open Status</label>
                      <div class="col-sm-5">
						<select id="open_status" name="open_status" class="form-control"  >
						<option value="0">----Select-----</option>
						<option value="Hot" >Hot</option>
						<option value="Warm" >Warm</option>
						<option value="Cold" >Cold</option>
						<option value="Defered" >Defered</option>
						</select>
                      </div>
                    </div>

																<div class="form-group">
																						<label class="col-sm-3 control-label">ARKA Group </label>
																	<div class="col-sm-5">
																	<select id="arka_group" name="arka_group" class="form-control" value="<?php echo $this->_supers['post']['arka_group']; ?>
" tabindex="4">
																	<option value="">----Select------</option>
																	<option value="Universal Infrastructure Systems">Universal Infrastructure Systems</option>
																	<option value="Asian Engineering">Asian Engineering</option>
																	
																<option value="ARKA Automaations LTD">ARKA Automaations LTD</option>
															</select>
																						</div>
																<!--&nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>-->
																					</div>

																<div class="form-group">
																				<label class="col-sm-3 control-label">Enquiry Type </label>
															<div class="col-sm-5">
															<select id="enquiry_type" name="enquiry_type" class="form-control" value="<?php echo $this->_supers['post']['enquiry_type']; ?>
"  tabindex="5">
															<option value="">----Select------</option>
															<option value="Sales" >Sales</option>
															<option value="Service" >Service</option>
															<option value="Project" >Project</option>
															</select>
																				</div>
														<!--&nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>-->
																			</div>
																			<div class="form-group" id="snzDate">
																										<label class="col-sm-3 control-label">Snooze Date</label>
																										<div class="col-sm-5">
																											<input type="text" class="form-control" id="snooze_date" name="snooze_date" placeholder ="Snooze Date" onClick="doOnLoad();" value="<?php echo $this->_supers['post']['snooze_date']; ?>
" tabindex="6" readonly="true">
																										</div>
																				 <!-- &nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>-->
																					<a href="#"><img id="calendar_icon1" src="codebase/calendar.png"></a>
																									</div>
					<div class="form-group" id="PoNo" style="display:none">
                      <label class="col-sm-3 control-label">PO No</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="po_no" name="po_no" placeholder="Po No" value="<?php echo $this->_supers['post']['po_no']; ?>
" onClick="doOnLoad();" value="HH-MM-SS" tabindex="11">
                      </div>
                    </div>

					   <div class="form-group">
						  <label class="col-sm-3 control-label">Enquiry Through</label>
						  <div class="col-sm-5">
							<input type="text" class="form-control" id="enquiry_through" name="enquiry_through" value="<?php echo $this->_supers['post']['enquiry_through']; ?>
" placeholder="Enquiry Through" value="TESTING" tabindex="6" data-toggle="modal" data-target="#Enquiry_Through" autocomplete="Off">
						  </div>
						</div>
					 <div class="form-group">
                      <label class="col-sm-3 control-label">Reference Id</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="reference_id" name="reference_id" placeholder="Reference Id" value="<?php echo $this->_supers['post']['reference_id']; ?>
" tabindex="7" value="TESTING" autocomplete="Off">
                      </div>

                    </div>
					 <div class="form-group">
                      <label class="col-sm-3 control-label">Assign To</label>
                      <div class="col-sm-5">
					 
					  <select id="assign_to" name="assign_to" class="form-control" onBlur="Assign();" value="<?php echo $this->_supers['post']['assign_to']; ?>
" tabindex="8" >
                        <!--<input type="text" class="form-control" id="assign_to" name="assign_to" onBlur="Assign();" placeholder="Assign To" value="<?php echo $this->_supers['post']['assign_to']; ?>
" tabindex="8" onKeyUp="text_filter(this);">-->
						<option value="">----Select------</option>
						 <?php $_from = $this->_tpl_vars['UserListAssign']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['asslist']):
?>
					<option value="<?php echo $this->_tpl_vars['asslist']['username']; ?>
"><?php echo $this->_tpl_vars['asslist']['username']; ?>
</option>
					<?php endforeach; endif; unset($_from); ?>
					</select>
						
                      </div>
                    </div>
						<div class="form-group">
						<label class="col-sm-3 control-label">Requirement</label>
						<div class="col-sm-5">
						<input type="text" class="form-control" id="requirement" name="requirement" value="<?php echo $this->_supers['post']['requirement']; ?>
" autocomplete="off" placeholder="requirement"  tabindex="9"  data-toggle="modal" data-target="#Requirement" autocomplete="Off">
						</div>
						</div>

					  <div class="form-group">
                      <label class="col-sm-3 control-label">Branch</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="branch" name="branch" placeholder="Branch" value="<?php echo $this->_supers['post']['branch']; ?>
" tabindex="10">
                      </div>
                    </div>
					
					<div class="form-group">
                      <label class="col-sm-3 control-label">Remarks</label>
                      <div class="col-sm-5">
                        <textarea class="form-control" id="remarks" name="remarks" placeholder="Remarks" value="<?php echo $this->_supers['post']['remarks']; ?>
" tabindex="12"></textarea>
                      </div>
                    </div>
                    
					<div class="form-group" style="display:none;" id="disp_1">
                      <label class="col-sm-3 control-label">SSG</label>
                      <div class="col-sm-5">
						<select id="ssg" name="ssg" class="form-control" value="<?php echo $this->_supers['post']['ssg']; ?>
"  tabindex="4">
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
						<select id="storage" name="storage" class="form-control" value="<?php echo $this->_supers['post']['storage']; ?>
"  tabindex="4" >
															<option value="0">----Select------</option>
															<option value="Deshis" >Deshis</option>
															<option value="OPOS" >OPOS</option>
															<option value="Service">Service</option>
															<option value="Interrior">Interrior</option>
															</select>
                      </div>
                    </div>
 
	<div class="modal fade" id="Enquiry_Through" role="dialog">
    <div class="modal-dialog" id="modal2">
      <!-- Modal content-->
      <div class="modal-content" style="width:300px;">
        <div class="modal-header" style="background-color:#00CCFF;">
          <button type="button" class="close" id="enq_close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Enquiry Through</h4>
        </div>
        <div class="modal-body">
<table class="table table-bordered table-striped " id="table">
					<tbody>
<!--					<tr>
					<td><input type="text" class="form-control" id="search" name="search" placeholder="Search"></td>
					</tr>-->
						 <?php $_from = $this->_tpl_vars['EnqThru']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['Enq']):
?>
                      <tr>
                        <td align="center"><a  id="enqid" href="#." onClick="closeit('<?php echo $this->_tpl_vars['Enq']['description']; ?>
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
			<div class="modal fade" id="Contact" role="dialog">
			<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content" style="width:700px;">
			<div class="modal-header" style="background-color:#00CCFF;">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">Add Contact</h4>
			</div>
			<iframe height="490px" width="100%" id="Contact"  src="./cus_contact.php?customer_id=<?php echo $this->_tpl_vars['Customer']['0']['customer_id']; ?>
" style="border:1px;"></iframe>
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
		<div id="standard_bar"  style="width:600px;height:80px;border:solid 1px #cfcfcf;" align="left"></div>
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
					<input type="button" class="btn btn-info pull-center" value="ADD" onClick="validate_fields();" tabindex="13" >&nbsp;&nbsp;
          <input type="button" class="btn btn-info pull-center" value="CANCEL" onClick="GoBack();" tabindex="14" >&nbsp;&nbsp;
					</center>
                  </div>
                   </div>
                </form>
      <div class="control-sidebar-bg"></div>

</div>
<?php echo '
<script type="text/javascript">
$(\'#enquiry_status\').on(\'change\', function() {
  if(this.value == "Pending") {
    $(\'#snzDate\').show();
    $(\'#closedDate\').hide();
	$(\'#PoNo\').hide();
    $(\'#PODate\').hide();
	}
  if(this.value == "Closed With Out Order") {
    $(\'#closedDate\').show();
    $(\'#snzDate\').hide();
	$(\'#PoNo\').hide();
    $(\'#PODate\').hide();
	}
   if(this.value == "Not Intrested") {
    $(\'#snzDate\').show();
    $(\'#closedDate\').hide();
	$(\'#PoNo\').hide();
    $(\'#PODate\').hide();
	}
	  if(this.value == "Closed With Order") {
    $(\'#closedDate\').show();
	$(\'#PoNo\').show();
    $(\'#PODate\').show();
    $(\'#snzDate\').hide();
	}

});

</script>
<script>
function pg_select()
{
var pg_val=document.getElementById("pg").value;
  if(pg_val == "SSG") {
    $(\'#disp_1\').show();
	 $(\'#disp_2\').hide();
    	}
  if(pg_val == "Storage") {
    $(\'#disp_2\').show();
	 $(\'#disp_1\').hide();
   }
  
}
</script>
<script>

function TrimColon(text)
{
    return text.toString().replace(/^(.*?):*$/, \'$1\');
}
</script>
<script>
function assign_val()
{
	var prod_list=$("#standard_bar").text();

		//prod_list = prod_list.replace(/^/g,",");

	if(document.forms[\'addEnquiry\'].elements[\'requirement\']!=undefined)
		{
		//	alert(prod_list);
			document.forms[\'addEnquiry\'].elements[\'requirement\'].focus();
			/*var  call_from=document.getElementById("call_from").value;
			if(call_from!="")
			{
				parent.document.forms[\'addEnquiry\'].elements[call_from].value = parent.document.forms[\'addEnquiry\'].elements[call_from].value+prod_list;
				parent.dhxWins.window("w2").close();
				return true;
			}*/
			document.forms[\'addEnquiry\'].elements[\'requirement\'].value = document.forms[\'addEnquiry\'].elements[\'requirement\'].value+prod_list;


			//parent.document.forms[\'addEnquiry\'].elements[\'pro_purchase\'].value = parent.document.forms[\'addEnquiry\'].elements[\'pro_purchase\'].value+prod_list;
		}


}
</script>
'; ?>

</body>
</html>