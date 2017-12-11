<?php /* Smarty version 2.6.25, created on 2016-07-20 17:01:30
         compiled from quote_edit.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'quote_edit.tpl', 581, false),)), $this); ?>
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
			myCalendar = new dhtmlXCalendarObject({input: "quote_date", button: "calendar_icon1"});
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
		
		var fields=["quote_id","enquiry_refference_id","quote_date","quote_status","supplier_code","supplier_company_name","contact_person","address","area","pincode","item_code","item_quantity","item_specification","email"];
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
							if(i==8)
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
						if(i==18)
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
			  FormName		= document.quote_edit;
  			  FormName.method	= "POST";
              FormName.submit();
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
  
		
</script>
<script>
function Fill_Name_of_Clr()
{
var supplier_company_name= document.getElementById("supplier_company_name").value;
var cnt_dtl_ary="";
if (supplier_company_name=="")
  {
  document.getElementById("contact_person").value="";
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
  	x ="<option>--Select Company Name--</option>"
	x= x + xmlhttp.responseText;
	document.getElementById("contact_person").innerHTML=x;
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
			split_id=x.split("|SUPID|");
			document.getElementById("supplier_code").value=split_id[1];
			document.getElementById("contact_person").innerHTML=x;
			
	
	   }
	 else 
	   {
	   document.getElementById("contact_person").innerHTML="<option value=\'0\'>Please select Company Name</option>";	   
	   }  
       
    }
  }
xmlhttp.open("GET","ajax_quote.php?supplier_company_name="+supplier_company_name,true);
xmlhttp.send();


}
/*************************************************************************/
function split_cnt_dtls(val)
{
var val=document.getElementById("contact_person").value;
var hdn_cnt_dtls=document.getElementById("hdn_cnt_dtls").value;

var split_cnt_dtl=hdn_cnt_dtls.split(",");
var split_cnt_dtl_len=hdn_cnt_dtls.split(",").length;
var emp_name;


var mobile = new Object;
var area = new Object;
var email = new Object;
var area_code = new Object;
var phone = new Object;
var extn = new Object;


	for(i=1;i<split_cnt_dtl_len;i++)
	{
		var split_cnt_dtl_len2=split_cnt_dtl[i].split("_").length;	
		var split_cnt_dtl2=split_cnt_dtl[i].split("_");
		
		emp_name=split_cnt_dtl2[0];
     	mobile[emp_name] = split_cnt_dtl2[1];
		area[emp_name] = split_cnt_dtl2[2];
		email[emp_name] = split_cnt_dtl2[3];
		area_code[emp_name] = split_cnt_dtl2[4];
		phone[emp_name] = split_cnt_dtl2[5];
		extn[emp_name] = split_cnt_dtl2[6];
		
	}
	document.getElementById("mobile_no").value=mobile[val];
	document.getElementById("area").value=area[val];
	document.getElementById("email").value=email[val];	
	document.getElementById("area_code").value=area_code[val];
	document.getElementById("phone_no").value=phone[val];	
	document.getElementById("extension").value=extn[val];	

	Fill_Add();
}
function Fill_Add()
{
var area=document.getElementById("area").value;
var supplier_company_name=document.getElementById("supplier_company_name").value;
var cnt_dtl_ary="";
if (area=="")
  {
  document.getElementById("contact_person").value="";
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
	
         document.getElementById("address").value=add_dtls[0];
		 document.getElementById("address1").value=add_dtls[1];
         document.getElementById("landmark").value=add_dtls[2];
		 document.getElementById("city").value=add_dtls[3];	
		 document.getElementById("pincode").value=add_dtls[4];		 
        
	   
	   
	   }
	 else 
	   {
	   document.getElementById("contact_person").innerHTML="<option value=\'0\'>Please select Company Name</option>";	   
	   }  
       
    }
  }
xmlhttp.open("GET","ajax_quote.php?area="+area+"&supplier_company_name="+supplier_company_name,true);
xmlhttp.send();


}

/**************************************************************************/
function Fill_Add_of_Clr()
{

var product_desc=document.getElementById("product_desc").value;
//alert(product_desc);
var cnt_dtl_ary="";
//var contact_person =document.getElementById("").value

if (product_desc=="")
  {
  document.getElementById("item_code").value="";
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
         document.getElementById("item_code").value=add_dtls[0];

	   }
       
    }
  }
xmlhttp.open("GET","ajax_quote.php?product_desc="+product_desc,true);
xmlhttp.send();

}
/*************************************************************************************/

function Fill_Add_of_Clr1()
{

var material_name=document.getElementById("material_name").value;
//alert(material_name);
var cnt_dtl_ary="";
//var contact_person =document.getElementById("").value
if (material_name=="")
  {
  document.getElementById("item_code").value="";
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
         document.getElementById("item_code").value=add_dtls[0];

	   }
       
    }
  }
xmlhttp.open("GET","ajax_quote.php?material_name="+material_name,true);
xmlhttp.send();

}
/*****************************************************/
function Event()
{
var select = document.getElementById("item_type");
if( select.value == "Product")
{
document.getElementById("product_desc").style.display = "inherit";
document.getElementById("material_name").style.display = "none";
}

else
{
document.getElementById("material_name").style.display = "inherit";
document.getElementById("product_desc").style.display = "none";
}
}
function GoBack()
{
window.history.back();
}
</script>
'; ?>

	<body class="hold-transition skin-blue sidebar-mini" onLoad="doOnLoad();">
   
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
				<h4>
         <small><a href="quote_list.php"><i class="fa fa-list"> <label style="font-family:Arial, Helvetica, sans-serif">
		 List Quotes</label></i></a></small>&ensp;&ensp;&ensp;
         <small class="active"><a href="quote_reg.php"><i class="fa fa-user-plus"> <label style="font-family:Arial, Helvetica, sans-serif">
		 Create Quote</label></i></a></small>
		 </h4>
        </section>
        <!-- Main content -->
        <section class="content">
          <!-- SELECT2 EXAMPLE -->
          <div class="box box-info">
            <div class="box-header with-border" align="center">
              <h3 class="box-title">Quote Edit</h3>
              <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
              </div>
            </div><!-- /.box-header -->
			<form class="form-horizontal" name="quote_edit">
			<input type="hidden" name="hdAction" />
			<input type="hidden" id="hdn_cnt_dtls" name="hdn_cnt_dtls" value="">
					<input type="hidden" id="hdn_add_dtls" name="hdn_add_dtls" value="">
					<input type="hidden" id="hdn_add_dtls1" name="hdn_add_dtls1" value="">
					<input type="hidden" id="hdn_add_dtls1" name="hdn_add_dtls1" value="">
					<input type="hidden" id="c_id" name="c_id" size="25" value="<?php echo $this->_tpl_vars['c_id']; ?>
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
					 <?php $_from = $this->_tpl_vars['ListView']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['View']):
?>
                  <div class="box-body">
				   <div class="col-md-6">
				   <div class="form-group">			 
                      <label class="col-sm-3 control-label">Quote Id</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="quote_id" name="quote_id" value="<?php echo $this->_tpl_vars['View']['quote_id']; ?>
" placeholder="Quote Id" tabindex="1" readonly="TURE" autocomplete="off">
                      </div>
                    </div>
					 <div class="form-group">
                      <label class="col-sm-3 control-label">Quote Date</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="quote_date" name="quote_date"  value="<?php echo $this->_tpl_vars['View']['quote_date']; ?>
" placeholder="Quote Date" onClick="doOnLoad();" tabindex="3" readonly="ture" autocomplete="off">
						<input type="hidden" class="form-control" id="timestamp" name="timestamp" value="<?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d &amp; %I:%M:%S %p') : smarty_modifier_date_format($_tmp, '%Y-%m-%d &amp; %I:%M:%S %p')); ?>
">
						<input type="hidden" class="form-control" id="created_date" name="created_date" value="<?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d') : smarty_modifier_date_format($_tmp, '%Y-%m-%d')); ?>
">
						<input type="hidden" class="form-control" id="created_time" name="created_time" value="<?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%I:%M:%S %p') : smarty_modifier_date_format($_tmp, '%I:%M:%S %p')); ?>
">
                      </div>
					  <!--&nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>-->
					  <a href="#"><img id="calendar_icon1" src="codebase/calendar.png"></a>
                    </div>
					
					<div class="form-group">
                      <label class="col-sm-3 control-label">Suplier Company</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="supplier_company_name" name="supplier_company_name"  value="<?php echo $this->_tpl_vars['View']['supplier_company_name']; ?>
" placeholder="Supplier Company Name" tabindex="5" autocomplete="off" onKeyUp="text_filter(this);"> 
                      </div>
                    </div>
					
					<div class="form-group">
                      <label class="col-sm-3 control-label">Contact Person</label>
                      <div class="col-sm-5">
					  <input type="text" class="form-control" id="contact_person"  value="<?php echo $this->_tpl_vars['View']['contact_fname']; ?>
" name="contact_person" placeholder="Contact Person" tabindex="7" autocomplete="off" onKeyUp="text_filter(this);">
  </div>
				
				</div> <!--<div class="form-group"  style="margin-top:-15px;">-->
				<div class="form-group">
                      <label class="col-sm-3 control-label">Area</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="area" name="area"  value="<?php echo $this->_tpl_vars['View']['area']; ?>
" placeholder="Area" tabindex="9" onKeyUp="text_filter(this);" autocomplete="off">
                      </div>
                    </div>
					 <div class="form-group" >
                      <label class="col-sm-3 control-label">Address</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="address" name="address"  value="<?php echo $this->_tpl_vars['View']['address']; ?>
" placeholder="Address" tabindex="13" autocomplete="off">
                      </div>
                    </div>
					
					 <div class="form-group" >
                      <label class="col-sm-3 control-label">Landmark</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="landmark" name="landmark"  value="<?php echo $this->_tpl_vars['View']['landmark']; ?>
" placeholder="Landmark" tabindex="15" autocomplete="off">
                      </div>
                    </div>
					   <div class="form-group">
                      <label class="col-sm-3 control-label">Email Id</label>
                      <div class="col-sm-5">
                        <input type="email" class="form-control" id="email" name="email"  value="<?php echo $this->_tpl_vars['View']['email_id']; ?>
" placeholder="Email Id" tabindex="18" onKeyUp="clear_err_email_id();" autocomplete="off">
                      </div>
					   </div>
					  
					  <div class="form-group" style="display:none;">
                      <label class="col-sm-3 control-label">Created By</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="created_by" name="created_by"  value="<?php echo $this->_supers['session']['UserName']; ?>
"  readonly="true" tabindex="" autocomplete="off">
                      </div>
                    </div>
					<div class="form-group"></div> 
					<div class="form-group"	style="border-bottom: 1px solid #d6d2d2;margin-top:-4px;"></div>
					  <div class="form-group">
                      <label class="col-sm-3 control-label">Item Type</label>
                      <div class="col-sm-5">
                       
						<select id="item_type" name="item_type" class="form-control" tabindex="20" autocomplete="off" value="<?php echo $this->_supers['post']['item_type']; ?>
" onChange="Event();">
					  <option value="Product">Product</option>
					  <option value="Material">Material</option>
					  </select>
                      </div>
					  </div> 
					  <div class="form-group">
                      <label class="col-sm-3 control-label">Item Code</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="item_code" name="item_code"  value="<?php echo $this->_supers['post']['item_code']; ?>
" placeholder="Item Code" tabindex="22" autocomplete="off" readonly="true">
                      </div>
					   </div> 
					 <div class="form-group">
                      <label class="col-sm-3 control-label">Item Specification</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="item_specification" name="item_specification"  value="<?php echo $this->_supers['post']['item_specification']; ?>
" placeholder="Item Specification" tabindex="24" autocomplete="off">
                      </div>
					   </div> 
					   
					</div>
					<!--**********************************************************-->
                         <div class="col-md-6">
						<div class="form-group">
                      <label class="col-sm-3 control-label">Enquiry refer Id</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="enquiry_refference_id"  value="<?php echo $this->_tpl_vars['View']['enquiry_reff_id']; ?>
" name="enquiry_refference_id" placeholder="Enquiry refference Id" tabindex="2" autocomplete="off">
                      </div>
                    </div>
					 <div class="form-group">
                      <label class="col-sm-3 control-label">Quote Status</label>
                      <div class="col-sm-5">
						<select id="quote_status" name="quote_status" class="form-control" tabindex="4" autocomplete="off" value="<?php echo $this->_tpl_vars['View']['quote_status']; ?>
">
						<option id="<?php echo $this->_tpl_vars['View']['quote_status']; ?>
" value="<?php echo $this->_tpl_vars['View']['quote_status']; ?>
" selected="selected"><?php echo $this->_tpl_vars['View']['quote_status']; ?>
</option>
						<option value="0">-----Select------</option>
					  <option value="Pending">Pending</option>
					  <option value="Quote Received">Quote Received</option>
					   <option value="Mail Sent">Mail Sent</option>
					  </select>
                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-3 control-label">Supplier Code</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="supplier_code"  value="<?php echo $this->_tpl_vars['View']['supplier_code']; ?>
" name="supplier_code" placeholder="Supplier Code" tabindex="6" autocomplete="off">
                      </div>
                    </div>
					
					<div class="form-group">
                      <label class="col-sm-3 control-label">Mobile No </label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="mobile_no" name="mobile_no"  value="<?php echo $this->_tpl_vars['View']['mobile_no']; ?>
" placeholder="Mobile No" tabindex="8" onKeyUp="numericFilter(this);clear_err_mobile(this.id);"  onBlur="chk_exist_mob(this);" autocomplete="off" maxlength="10">
                      </div>
					<!--&nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>-->
					  </div>
					  
					  <div class="form-group">
                      <label class="col-sm-3 control-label">Phone No</label>
                       <div class="col-sm-2">
                        <input type="text" class="form-control" id="area_code" name="area_code" value="<?php echo $this->_tpl_vars['View']['area_code']; ?>
" placeholder="Area Code" tabindex="10" onKeyUp="numericFilter(this);" autocomplete="off" >
					  </div>
                      <div class="col-sm-2">
                        <input type="text" class="form-control" id="phone_no" name="phone_no" value="<?php echo $this->_tpl_vars['View']['phone_no']; ?>
" placeholder="Phone No" tabindex="11"onKeyUp="numericFilter(this);" autocomplete="off"  style="margin-left:-25px;">
                      </div>
                      <div class="col-sm-2">
                        <input type="text" class="form-control" id="extension" name="extension" value="<?php echo $this->_tpl_vars['View']['extension']; ?>
" placeholder="Extension" tabindex="12" onKeyUp="numericFilter(this);" autocomplete="off" style="margin-left:-45px;">
                      </div>
					  <!--&nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>-->
                    </div>
					
					   <div class="form-group">
                      <label class="col-sm-3 control-label">City</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="city" name="city"  value="<?php echo $this->_tpl_vars['View']['city']; ?>
" placeholder="City" tabindex="14" autocomplete="off" onKeyUp="text_filter(this);">
                      </div>
					  <!--&nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font> -->
					  </div>
					  
					  <div class="form-group">
                      <label class="col-sm-3 control-label">Address1</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="address1" name="address1"  value="<?php echo $this->_tpl_vars['View']['address1']; ?>
" placeholder="Address1" tabindex="17" autocomplete="off">
                      </div>
					  <!--&nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>--> 
					  </div>
					  
					   <div class="form-group">
                      <label class="col-sm-3 control-label">Pincode</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="pincode" name="pincode"  value="<?php echo $this->_tpl_vars['View']['pincode']; ?>
" placeholder="Pincode" tabindex="19" onBlur="chk_exist_pin(this)" onKeyUp="numericFilter(this);" autocomplete="off" maxlength="6">
                      </div>  <!--&nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>--></div> 
					  
					   <div class="form-group"></div> 
					    <div class="form-group"	style="border-bottom: 1px solid #d6d2d2;margin-top:-2px;"></div>
					 
					  <div class="form-group">
                      <label class="col-sm-3 control-label">Item Name</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="product_desc" name="product_desc" placeholder="Product Desc" value="<?php echo $this->_supers['post']['product_desc']; ?>
" onChange="split_cnt_dtls2(this.value);"  tabindex="21" onKeyUp="text_filter(this);">
						<input type="text" class="form-control" id="material_name" name="material_name" placeholder="Material Name" value="<?php echo $this->_supers['post']['material_name']; ?>
" onChange="split_cnt_dtls1(this.value);"  tabindex="21" onKeyUp="text_filter(this);" style="display:none">
                      </div> <!--&nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>--></div> 
					   <div class="form-group">
                      <label class="col-sm-3 control-label">Item Quantity</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="item_quantity" name="item_quantity"  value="<?php echo $this->_supers['post']['item_quantity']; ?>
" placeholder="Item Quantity" tabindex="23" autocomplete="off" onKeyUp="numericFilter(this);">
                      </div><!-- &nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>--></div>
					 
					   <div class="form-group">
                      <label class="col-sm-3 control-label">Remarks</label>
                      <div class="col-sm-5">
                        <textarea class="form-control" id="remarks" name="remarks" placeholder="Remarks" tabindex="25" autocomplete="off"><?php echo $this->_supers['post']['remarks']; ?>
</textarea>
                      </div>
					  <!--&nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>-->
                    </div>
					
					   <div class="form-group" id="hdn_email2" style="display:none">
                      <label class="col-sm-3 control-label">Email Id 2</label>
                      <div class="col-sm-5">
                        <input type="email" class="form-control" id="email1" name="email1"  value="<?php echo $this->_tpl_vars['View']['email_id1']; ?>
" placeholder="Email Id 1"  onKeyUp="clear_err_email_id();" autocomplete="off" >
                      </div>
					  </div>
					  
					</div>
					</div>
					<?php endforeach; endif; unset($_from); ?>
					
					<div class="box-footer"><center>
                    <!--<button type="submit" class="btn btn-info pull-center" onClick="validate_fields();">ADD CUSTOMER</button>-->
					<input type="button" class="btn btn-info pull-center" value="UPDATE"  onClick="validate_fields();" >&nbsp;&nbsp;
                    <button type="submit" class="btn btn-info pull-center" onClick="GoBack();" >CANCEL</button><center>
                  </div>
				 </form>
				 
<div class="tab-pane" id="sales">
				<form name="SalesList" id="SalesList" method="post">
				<input type="hidden"  value="<?php echo $this->_tpl_vars['sl_no']; ?>
">
                  <table id="example2" class="table table-bordered table-striped" style="font-size:13px;, Times, serif;">
                    <thead>
					<tr> 
					            <th><center>Sl No</center></th>
								<th><center>Item Code</center></th>
								<th><center>Item Name</center> </th>
								<th><center>Item Type</center></th>
								<th><center>Item Spec</center></th>
								<th><center>Quantity</center></th>
								<th><center>Action</center></th>
								
					</tr>
                    </thead>
                    <tbody>
                     		<?php $_from = $this->_tpl_vars['ListView1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['details_list']):
?>
					 	<tr id="<?php echo $this->_tpl_vars['i']++; ?>
">
						<input type="hidden" id="sl_no" name="sl_no" value="<?php echo $this->_tpl_vars['details_list']['sl_no']; ?>
" />
								<input type="hidden" value="<?php echo $this->_tpl_vars['details_list']['item_code']; ?>
" />
					            <td align="center"><a href="#" onClick="Javascript:viewCats('<?php echo $this->_tpl_vars['details_list']['item_code']; ?>
')"><?php echo $this->_tpl_vars['i']; ?>
</a></td>
								<td align="center"><a href="#" onClick="Javascript:viewCats('<?php echo $this->_tpl_vars['details_list']['item_code']; ?>
')"><?php echo $this->_tpl_vars['details_list']['item_code']; ?>
</a></td>
								<td align="center"><a href="#" onClick="Javascript:viewCats('<?php echo $this->_tpl_vars['details_list']['item_code']; ?>
')"><?php echo $this->_tpl_vars['details_list']['item_name']; ?>
</a></td>
								<td align="center"><a href="#" onClick="Javascript:viewCats('<?php echo $this->_tpl_vars['details_list']['item_code']; ?>
')"><?php echo $this->_tpl_vars['details_list']['item_type']; ?>
</a></td>								
								<td align="center"><a href="#" onClick="Javascript:viewCats('<?php echo $this->_tpl_vars['details_list']['item_code']; ?>
')"><?php echo $this->_tpl_vars['details_list']['item_specification']; ?>
</a></td>
								<td align="center"><a href="#" onClick="Javascript:viewCats('<?php echo $this->_tpl_vars['details_list']['item_code']; ?>
')"><?php echo $this->_tpl_vars['details_list']['item_quantity']; ?>
</a></td>
							<td align="center">&nbsp;&nbsp; &nbsp;&nbsp;<a href="#" onClick="Javascript:deleteCat('<?php echo $this->_tpl_vars['details_list']['sl_no']; ?>
','<?php echo $this->_tpl_vars['details_list']['quote_id']; ?>
')"><i class="fa fa-trash"></i></a></td>
								
                    </tr>
										  <?php endforeach; else: ?>
					<tr>
								<td height="20" colspan="12" align="center"><img src="images/warning.gif" border="0">&nbsp;No Records Found</td>
					</tr>

					<?php endif; unset($_from); ?>
					</tbody>
                    </tfoot>
                  </table>
				 </form>
				 <?php echo '

    <script>
      $(function () {
        $("#example1").DataTable();
        $(\'#example2\').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false
        });
      });
	    function deleteCat(CatIdent,CusIdent){
		var qid = btoa(CatIdent);
		var qid1 = btoa(CusIdent);  
  if(confirm("Are you sure to Delete this Content?")){
  FormName	= document.SalesList;
  FormName.action= "quote_edit.php?sl_no="+qid+"&quote_id="+qid1;
  FormName.submit();
 }
 }  
    </script>
	'; ?>

	</div>
					</section>
      <div class="control-sidebar-bg"></div>
    </div>
	
  </body>
</html>