<?php /* Smarty version 2.6.25, created on 2016-04-25 13:53:49
         compiled from service_quote_edit.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'service_quote_edit.tpl', 791, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "left.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
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
			myCalendar = new dhtmlXCalendarObject({input: "quote_date", button: "calendar_icon1"});
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
		var fields=["service_quote_no","service_order_no","revised_no","quote_date","customer_id","company_name","enquiry_id","description","mobile_no","email","address1","sqft","address2","material","area","labour","pincode","material_value","phone_no","material_estimate","material_tax_per","material_tax_value","total_material","labour_estimate","labour_value","labour_tax_value","labour_tax_per","total","total_labour","remarks"]; 	
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
								
								if(i==33)
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
						}
						
			  FormName		= document.add_service;
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
		text: "You Can\'t Enter More Than 2 Mobile Number "});
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
<script>
/*function getvalue()
{					var quantity = document.getElementById(\'material\').value;
					var price = document.getElementById(\'sqft\').value;
					var cost = (quantity * price);
					document.getElementById(\'material_value\').value=cost;
					var total_material = document.getElementById(\'total_material\').value;
					var total_est = (cost * total_material);
					document.getElementById(\'material_estimate\').value=total_est;
					var tax = document.getElementById(\'material_tax_per\').value;
					
					if(tax != "")
					{
							var tax_value = (total_est * tax)/100;
							document.getElementById(\'material_tax_value\').value=tax_value;
							var total1 = (+tax_value + +total_est);
							document.getElementById(\'total_material_cost\').value=total1;
					}
					
}	*/
/*function getvalue1()
{					var quantity = document.getElementById(\'labour\').value;
					var price = document.getElementById(\'sqft\').value;
					var cost = (quantity * price);
					document.getElementById(\'labour_value\').value=cost;
					var total_labour = document.getElementById(\'total_labour\').value;
					var total_est = (cost * total_labour);
					document.getElementById(\'labour_estimate\').value=total_est;
					var tax = document.getElementById(\'labour_tax_per\').value;
					
					if(tax != "")
					{
							var tax_value = (total_est * tax)/100;
							document.getElementById(\'labour_tax_value\').value=tax_value;
							var total2 = (+tax_value + +total_est);
							document.getElementById(\'total_labour_cost\').value=total2;
					}
					
					var total_cost = (+total1 + +total2);
					document.getElementById(\'total\').value=total_cost;
					
}	*/
function getvalue()
{

var S1 = document.getElementById(\'sqft\').value;	
var M1 = document.getElementById(\'material\').value;	
var L1 = document.getElementById(\'labour\').value;	
var sub_total1=(S1*M1);
var sub_total2=(S1*L1);
document.getElementById(\'total_material\').value=sub_total1;
document.getElementById(\'total_labour\').value=sub_total2;
var subtotal=(+sub_total1 + +sub_total2);
document.getElementById(\'sub_total\').value=subtotal;
}
function getvalue1()
{
var tax1 = document.getElementById(\'material_tax_per\').value;
var S1 = document.getElementById(\'sqft\').value;
var M1 = document.getElementById(\'material\').value;	
var sub_total1=(S1*M1);
document.getElementById(\'total_material\').value=sub_total1;
if(tax1 != "")
					{
							var tax_value1 = (sub_total1 * tax1)/100;
							document.getElementById(\'material_tax_value\').value=tax_value1;
							var material_tax_value1 = document.getElementById(\'material_tax_value\').value;
							var total1=(+material_tax_value + +total_material);
							
					}
					
}
function getvalue2()
{
var tax2 = document.getElementById(\'labour_tax_per\').value;
var S1 = document.getElementById(\'sqft\').value;
var L1 = document.getElementById(\'labour\').value;
var sub_total2=(S1*L1);
document.getElementById(\'total_labour\').value=sub_total2;					
if(tax2 != "")
					{
							var tax_value2 = (sub_total2 * tax2)/100;
							document.getElementById(\'labour_tax_value\').value=tax_value2;
							var labour_tax_value1 = document.getElementById(\'labour_tax_value\').value;
							var total2=(+labour_tax_value + +total_labour);
							
					}				

}
function getvalue3()
{
var tax1 = document.getElementById(\'material_tax_per\').value;
var S1 = document.getElementById(\'sqft\').value;
var M1 = document.getElementById(\'material\').value;	
var sub_total1=(S1*M1);
document.getElementById(\'total_material\').value=sub_total1;
var tax_value1 = (sub_total1 * tax1)/100;
document.getElementById(\'material_tax_value\').value=tax_value1;
var material_tax_value1 = document.getElementById(\'material_tax_value\').value;
var total1=(+material_tax_value1 + +sub_total1);
var estimate1=(+total_material + +material_tax_value);
document.getElementById(\'material_estimate\').value=estimate1;

var tax2 = document.getElementById(\'labour_tax_per\').value;
var S1 = document.getElementById(\'sqft\').value;
var L1 = document.getElementById(\'labour\').value;
var sub_total2=(S1*L1);
document.getElementById(\'total_labour\').value=sub_total2;
var tax_value2 = (sub_total2 * tax2)/100;
document.getElementById(\'labour_tax_value\').value=tax_value2;
var labour_tax_value1 = document.getElementById(\'labour_tax_value\').value;
var total2=(+labour_tax_value1 + +sub_total2);
var estimate2=(+total_labour + +labour_tax_value);
document.getElementById(\'labour_estimate\').value=estimate2;

var total_value=(+total1 + +total2);	
document.getElementById(\'total\').value=total_value;
/*var total_tax=(+tax_value1 + +tax_value2);
document.getElementById(\'tax_value\').value=total_tax;*/
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
        <small><a href="service_quote_list.php"><i class="fa fa-list"> <label style="font-family:Arial, Helvetica, sans-serif">
		List Service Order</label></i></a></small>&ensp;&ensp;&ensp;
		<!--<small><a href="service_quote_reg.php"><i class="fa fa-user-plus">
		Create Service</i></a></small>-->
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
              <h3 class="box-title">Service Order Edit</h3>
              <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
              </div>
            </div>
			<form class="form-horizontal" name="add_service">
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
				   <?php $_from = $this->_tpl_vars['ListEdit']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['View']):
?>
				   <div class="col-md-6">
                    <div class="form-group">			 
                      <label class="col-sm-3 control-label">Service Quote No</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="service_quote_no" name=" service_quote_no" value="<?php echo $this->_tpl_vars['View']['service_quote_no']; ?>
" tabindex="1" placeholder="Service Quote No" autocomplete="0ff">
                      </div>
					  &nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>
                    </div>
					 <div class="form-group">
                      <label class="col-sm-3 control-label">Revised Number</label>
                      <div class="col-sm-5">
					  <input type="text" id="revised_no" name="revised_no" class="form-control" value="<?php echo $this->_tpl_vars['View']['service_quote_revise_no']; ?>
"  tabindex="3" placeholder="Revised Number" autocomplete="0ff" >
					  </div>		 
				</div>
				<div class="form-group" style=" margin-top:0px;">
                      <label class="col-sm-3 control-label">Customer Id </label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="customer_id" name="customer_id" value="<?php echo $this->_tpl_vars['View']['customer_id']; ?>
" tabindex="7" placeholder="Customer Id" autocomplete="0ff">
                      </div>
                    </div>
					
					<div class="form-group" style=" margin-top:0px;">
                      <label class="col-sm-3 control-label">Enquiry Id </label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="enquiry_id" name="enquiry_id" value="<?php echo $this->_tpl_vars['View']['enquiry_id']; ?>
" tabindex="7" placeholder="Enquiry Id" autocomplete="0ff">
                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-3 control-label">Mobile No </label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="mobile_no" name="mobile_no" value="<?php echo $this->_tpl_vars['View']['mobile_no']; ?>
" placeholder="Mobile No" maxlength="10" tabindex="11" onKeyUp="numericFilter(this);clear_err_mobile(this.id);"  onBlur="chk_exist_mob(this);">
                      </div>
					&nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>
					<!-- <input type="button" class="btn btn-danger btn-xs" value="ADD MOBILE"  onClick="add_more_mobile();">-->
                    </div>
					<div class="form-group">
                      <label class="col-sm-3 control-label">Address</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="address1" name="address1" value="<?php echo $this->_tpl_vars['View']['address1']; ?>
" tabindex="21" placeholder="Address1" autocomplete="0ff">
                      </div>
					  &nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>
                    </div>
					
					<div class="form-group">
                      <label class="col-sm-3 control-label">Address1</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="address2" name="address2" value="<?php echo $this->_tpl_vars['View']['address2']; ?>
"  placeholder="Address2" autocomplete="0ff">
                      </div>
                    </div>
					
					<div class="form-group">
                      <label class="col-sm-3 control-label">Area</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="area" name="area" value="<?php echo $this->_tpl_vars['View']['area']; ?>
" tabindex="23" placeholder="Area" onKeyUp="text_filter(this)" autocomplete="0ff">
                      </div>
					  &nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>
                    </div>
					  
					  <div class="form-group">
                      <label class="col-sm-3 control-label">Pincode</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="pincode" name="pincode" maxlength="6" value="<?php echo $this->_tpl_vars['View']['pincode']; ?>
" tabindex="24" placeholder="Pincode" onKeyUp="numericFilter(this);" onBlur="chk_exist_pin(this);" autocomplete="0ff">
                      </div>
					  &nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>
                    </div>
					
					<div class="form-group">
                      <label class="col-sm-3 control-label">Phone No</label>
					    <!--<div class="col-sm-2">
					    <input type="text" class="form-control" id="area_code" name="area_code" value="<?php echo $this->_tpl_vars['View']['area']; ?>
" placeholder="Area Code" tabindex="13" onKeyUp="numericFilter(this);" autocomplete="off" >
					  </div>-->
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="phone_no" name="phone_no" value="<?php echo $this->_tpl_vars['View']['phone_no']; ?>
" placeholder="Phone No" tabindex="14"onKeyUp="numericFilter(this);" autocomplete="off" >
                      </div>
                      <!--<div class="col-sm-2">
                        <input type="text" class="form-control" id="extension" name="extension" value="<?php echo $this->_tpl_vars['View']['extension']; ?>
" placeholder="Extension" tabindex="15" onKeyUp="numericFilter(this);" autocomplete="off" >
                       </div>-->
					    
					  &nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>
					  <input type="button" class="btn btn-danger btn-xs" value="ADD PHONE"  onClick="add_more_phone();">
					   </div>
					   
					   <div class="form-group" id="hdn_phone2" style="display:none;">
                      <label class="col-sm-3 control-label">Phone No 1</label>
					  <!--<div class="col-sm-2">
					    <input type="text" class="form-control" id="area_code1" name="area_code1" value="<?php echo $this->_tpl_vars['View']['service_quote_no']; ?>
" placeholder="Area Code 1" onKeyUp="numericFilter(this);" autocomplete="off" >
					  </div>-->
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="phone_no1" name="phone_no1" value="<?php echo $this->_tpl_vars['View']['phone_no1']; ?>
" placeholder="Phone No 1" onKeyUp="numericFilter(this);" >
                      </div>
                      <!--<div class="col-sm-2">
                        <input type="text" class="form-control" id="extension1" name="extension1" value="<?php echo $this->_tpl_vars['View']['service_quote_no']; ?>
" placeholder="extension 1" onKeyUp="numericFilter(this);" autocomplete="off" >
                       </div>-->
					   </div>
					   
					   
					   
					   
					 <div class="form-group">
                      <label class="col-sm-3 control-label">Material Tax Per</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="material_tax_per" name="material_tax_per" value="<?php echo $this->_tpl_vars['View']['material_tax_per']; ?>
" placeholder="Material Tax Percentage" onKeyUp="getvalue1();numericFilter(this);" tabindex="21">
                      </div>
					    &nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>
					   </div>
					   
					   <div class="form-group" >
                      <label class="col-sm-3 control-label">Total Material</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="total_material" name="total_material" value="<?php echo $this->_tpl_vars['View']['total_material']; ?>
" placeholder="Total Material" tabindex="23" onKeyUp="getvalue();">
                      </div>
					    &nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>
					   </div>
					   
					  <div class="form-group">
                      <label class="col-sm-3 control-label">Labour Value</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="labour_value" name="labour_value" value="<?php echo $this->_tpl_vars['View']['labour_value']; ?>
" placeholder="Labour Value" onKeyUp="numericFilter(this);" tabindex="25">
                      </div>
					    &nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>
					   </div>
					   
					    <div class="form-group">
                      <label class="col-sm-3 control-label">Labour Tax Per</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="labour_tax_per" name="labour_tax_per" value="<?php echo $this->_tpl_vars['View']['labour_tax_per']; ?>
" placeholder="Labour Tax Percentage" onKeyUp="getvalue2();numericFilter(this);" tabindex="27">
                      </div>
					    &nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>
					   </div>
					   
					    <div class="form-group" >
                      <label class="col-sm-3 control-label">Total Labour</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="total_labour" name="total_labour" value="<?php echo $this->_tpl_vars['View']['total_labour']; ?>
" placeholder="Total Labour" tabindex="29" onKeyUp="getvalue();">
                      </div>
					    &nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>
					   </div>
					   
					
					   
					  <div class="form-group">
                      <label class="col-sm-3 control-label">Created By</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="created_by" name="created_by" tabindex="31" placeholder="Created By" value="<?php echo $this->_supers['session']['UserName']; ?>
" >
						<input type="hidden" class="form-control" id="created_date" name="created_date" value="<?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d') : smarty_modifier_date_format($_tmp, '%Y-%m-%d')); ?>
" placeholder="Date" >
						<input type="hidden" class="form-control" id="created_time" name="created_time" value="<?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%I:%M:%S %p') : smarty_modifier_date_format($_tmp, '%I:%M:%S %p')); ?>
"  placeholder="Time">
						 <input type="hidden" class="form-control" id="timestamp_value" name="timestamp_value" value="<?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d &amp; %I:%M:%S %p') : smarty_modifier_date_format($_tmp, '%Y-%m-%d &amp; %I:%M:%S %p')); ?>
"  placeholder="Timestamp Value">
                      </div>
					  &nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>
                    </div>
					</div>
					<!--**********************************************************-->
                     <div class="col-md-6">
					 <div class="form-group">
                      <label class="col-sm-3 control-label">Service Order No</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="service_order_no" name="service_order_no" value="<?php echo $this->_tpl_vars['View']['service_order_no']; ?>
" placeholder="Service Order No"  tabindex="2">
                      </div>
					   &nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>
					   </div>
					   
					 <div class="form-group">
                      <label class="col-sm-3 control-label">Service OrderDate</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="quote_date" name="quote_date" value="<?php echo $this->_tpl_vars['View']['service_order_date']; ?>
" placeholder="Service Order Date" onClick="doOnLoad();" tabindex="2">
                      </div>
					   &nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>
					  <a href="#"><img id="calendar_icon1" src="codebase/calendar.png"></a>
                    </div>
                    <!--<div class="form-group">
                      <label class="col-sm-3 control-label">Revised Version</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="revised_version"  name="revised_version" value="<?php echo $this->_tpl_vars['View']['service_quote_revise_no']; ?>
" tabindex="6" placeholder="Revised Version" autocomplete="0ff">
                      </div>
					  &nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>
                    </div>-->
					<div class="form-group">
                      <label class="col-sm-3 control-label">Company Name</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="company_name" name="company_name" value="<?php echo $this->_tpl_vars['View']['company_name']; ?>
" tabindex="8" placeholder="Company Name" autocomplete="0ff">
                      </div>
                    </div> 
					
					<div class="form-group">
                      <label class="col-sm-3 control-label">Description</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="description" name="description" value="<?php echo $this->_tpl_vars['View']['description']; ?>
" tabindex="8" placeholder="Description" autocomplete="0ff">
                      </div>
                    </div> 
					
					<div class="form-group">
                      <label class="col-sm-3 control-label">Email Id</label>
                      <div class="col-sm-5">
                        <input type="email" class="form-control" id="email" name="email" value="<?php echo $this->_tpl_vars['View']['email_id']; ?>
" placeholder="Email Id" tabindex="9" onKeyUp="clear_err_email_id();" autocomplete="0ff">
                      </div>
					  &nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>
					  <input type="button" class="btn btn-danger btn-xs" value="ADD MAIL"  onClick="add_more_email();">
					   </div> 
					   
					   <div class="form-group" id="hdn_email2" style="display:none">
                      <label class="col-sm-3 control-label">Email Id 2</label>
                      <div class="col-sm-5">
                        <input type="email" class="form-control" id="email1" name="email1" value="<?php echo $this->_tpl_vars['View']['email_id1']; ?>
" placeholder="Email Id 1"  onKeyUp="clear_err_email_id();" autocomplete="0ff">
                      </div>
					  </div>
					  
					<div class="form-group" >
                      <label class="col-sm-3 control-label">Sqft</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="sqft" name="sqft" value="<?php echo $this->_tpl_vars['View']['sqft']; ?>
" placeholder="Sqft" tabindex="17" onKeyUp="getvalue();getvalue3();">
                      </div>
					    &nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>
					   </div>
					   
					<div class="form-group" >
                      <label class="col-sm-3 control-label">Material</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="material" name="material" value="<?php echo $this->_tpl_vars['View']['material']; ?>
" placeholder="Material" tabindex="18" autocomplete="0ff" onKeyUp="getvalue();">
                      </div>
					    &nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>
					   </div>
					   
					   <div class="form-group" >
                      <label class="col-sm-3 control-label">Labour</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="labour" name="labour" value="<?php echo $this->_tpl_vars['View']['labour']; ?>
" placeholder="Labour" tabindex="22" autocomplete="0ff" onKeyUp="getvalue();">
                      </div>
					    &nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>
					   </div>
					   
					   
					   <div class="form-group">
                      <label class="col-sm-3 control-label">Material Value</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="material_value" name="material_value" value="<?php echo $this->_tpl_vars['View']['material_value']; ?>
" placeholder="Material Value" onKeyUp="numericFilter(this);" tabindex="19">
                      </div>
					    &nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>
					   </div>
					   
					   <div class="form-group">
                      <label class="col-sm-3 control-label">Material Estimate</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="material_estimate" name="material_estimate" value="<?php echo $this->_tpl_vars['View']['material_estimate']; ?>
" placeholder="Material Estimate" onKeyUp="numericFilter(this);" tabindex="20" autocomplete="0ff">
                      </div>
					    &nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>
					   </div>
					   
					    <div class="form-group">
                      <label class="col-sm-3 control-label">Material TaxValue</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="material_tax_value" name="material_tax_value" value="<?php echo $this->_tpl_vars['View']['material_tax_value']; ?>
" placeholder="Material Tax Value" onKeyUp="numericFilter(this);" tabindex="20" autocomplete="0ff">
                      </div>
					    &nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>
					   </div>
					    
					    
					   
					   <div class="form-group">
                      <label class="col-sm-3 control-label">Labour Estimate</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="labour_estimate" name="labour_estimate" value="<?php echo $this->_tpl_vars['View']['labour_estimate']; ?>
" placeholder="Labour Estimate" onKeyUp="numericFilter(this);" tabindex="20" autocomplete="0ff">
                      </div>
					    &nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>
					   </div>
					   
					   <div class="form-group">
                      <label class="col-sm-3 control-label">Labour Tax Value</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="labour_tax_value" name="labour_tax_value" value="<?php echo $this->_tpl_vars['View']['labour_tax_value']; ?>
" placeholder="Labour Tax Value" onKeyUp="numericFilter(this);" tabindex="24" autocomplete="0ff">
                      </div>
					    &nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>
					   </div>
					   
					 	  <div class="form-group">
                      <label class="col-sm-3 control-label">Total</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="total" name="total" value="<?php echo $this->_tpl_vars['View']['total']; ?>
" placeholder="Total" tabindex="26" autocomplete="0ff">
                      </div> &nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font></div>
					  
					  <div class="form-group">
                      <label class="col-sm-3 control-label">Remarks</label>
                      <div class="col-sm-5">
                        <textarea class="form-control" id="remarks" name="remarks" placeholder="Remarks" tabindex="28" autocomplete="0ff"><?php echo $this->_tpl_vars['View']['remark']; ?>
</textarea>
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
                    <?php endforeach; endif; unset($_from); ?>
					</div>
					<div class="box-footer"><center>
                    <input type="button" class="btn btn-info pull-center" value="UPDATE" onClick="validate_fields();">&nbsp;&nbsp;
                    <button type="submit" class="btn btn-info pull-center" onClick="GoBack();">CANCEL</button></center>
                  </div>
                 <!-- /.box-body -->
                  <!--<div class="box-footer">
                    <button type="submit" class="btn btn-default">Add Employee</button>
                    <button type="submit" class="btn btn-info pull-right">Sign in</button>
                  </div>--><!-- /.box-footer -->
                </form>
				</div>
				</section>

      <div class="control-sidebar-bg"></div>
    </div>
	</div>
  </body>
