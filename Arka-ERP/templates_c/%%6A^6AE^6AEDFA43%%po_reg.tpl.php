<?php /* Smarty version 2.6.25, created on 2017-01-24 13:56:18
         compiled from po_reg.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'po_reg.tpl', 796, false),)), $this); ?>

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
			var myCalendar1;
			myCalendar = new dhtmlXCalendarObject({input: "po_date", button: "calendar_icon1"});
			myCalendar1 = new dhtmlXCalendarObject({input: "quote_date", button: "calendar_icon2"});
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
		
	var fields=["po_no","po_date","supplier_company","contact_person","payment_status","po_status","quote_date","quote_ref_id","deliver_to","item_type","product_desc","item_quantity","item_specification","item_price","item_tax_per","item_tax_value","item_total_price"];
	
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
						var po_date  =  document.getElementById("po_date").value;
						if(po_date=="")
						{
						dhtmlx.alert({
								title: "Error !",
								type:"alert-error",
								text: "Please Enter Po Date",
											});
									return false;
						}
						}
						if(i==2)
						{
						var supplier_company  =  document.getElementById("supplier_company").value;
						if(supplier_company=="")
						{
						dhtmlx.alert({
								title: "Error !",
								type:"alert-error",
								text: "Please Enter Supplier Company",
											});
									return false;
						}
						}	
						if(i==3)
						{
						 var c = document.getElementById("contact_person");
                         var optionSelIndex = c.options[c.selectedIndex].value;
                         var optionSelectedText = c.options[c.selectedIndex].text;
                         if (optionSelIndex == "") {
                           dhtmlx.alert({
								title: "Error !",
								type:"alert-error",
								text: "Please Select Contact Person",
											});
								return false;
           					 }
						}	
							if(i==4)
						{
						 var s = document.getElementById("payment_status");
                         var optionSelIndex = s.options[s.selectedIndex].value;
                         var optionSelectedText = s.options[s.selectedIndex].text;
                         if (optionSelIndex == "") {
                           dhtmlx.alert({
								title: "Error !",
								type:"alert-error",
								text: "Please Select Payment Status",
											});
								return false;
           					 }
						}		
							if(i==5)
						{
						 var p = document.getElementById("po_status");
                         var optionSelIndex = p.options[p.selectedIndex].value;
                         var optionSelectedText = p.options[p.selectedIndex].text;
                         if (optionSelIndex == "") {
                           dhtmlx.alert({
								title: "Error !",
								type:"alert-error",
								text: "Please Select PO Status",
											});
								return false;
           					 }
						}	
						if(i==6)
						{
						var quote_date  =  document.getElementById("quote_date").value;
                         if (quote_date == "") {
                           dhtmlx.alert({
								title: "Error !",
								type:"alert-error",
								text: "Please Select Quote Date",
											});
								return false;
           					 }
						}	
						if(i==7)
						{
						var quote_ref_id  =  document.getElementById("quote_ref_id").value;
                         if (quote_ref_id == "") {
                           dhtmlx.alert({
								title: "Error !",
								type:"alert-error",
								text: "Please Enter Quote Reference Id",
											});
								return false;
           					 }
						}	
						if(i==8)
						{
						var d = document.getElementById("deliver_to");
                         var optionSelIndex = d.options[d.selectedIndex].value;
                         var optionSelectedText = d.options[d.selectedIndex].text;
                         if (optionSelIndex == "") {
                           dhtmlx.alert({
								title: "Error !",
								type:"alert-error",
								text: "Please Select Deliver To",
											});
								return false;
           					 }
						}	
						if(i==9)
						{
						var r = document.getElementById("item_type");
                         var optionSelIndex = r.options[r.selectedIndex].value;
                         var optionSelectedText = r.options[r.selectedIndex].text;
                         if (optionSelIndex == "") {
                           dhtmlx.alert({
								title: "Error !",
								type:"alert-error",
								text: "Please Select Item Type",
											});
								return false;
           					 }
						}		
						if(i==10)
						{
						
                        var product_desc  =  document.getElementById("product_desc").value;
                         if (product_desc == "") {
                           dhtmlx.alert({
								title: "Error !",
								type:"alert-error",
								text: "Please Enter Item Name",
											});
								return false;
           					 }
						}
						if(i==11)
						{
						
                        var item_quantity  =  document.getElementById("item_quantity").value;
                         if (item_quantity == "") {
                           dhtmlx.alert({
								title: "Error !",
								type:"alert-error",
								text: "Please Enter Item Quantity",
											});
								return false;
           					 }
						}
						if(i==12)
						{
						
                        var item_specification  =  document.getElementById("item_specification").value;
                         if (item_specification == "") {
                           dhtmlx.alert({
								title: "Error !",
								type:"alert-error",
								text: "Please Enter Item Specification",
											});
								return false;
           					 }
						}
						if(i==13)
						{
						
                        var item_price  =  document.getElementById("item_price").value;
                         if (item_price == "") {
                           dhtmlx.alert({
								title: "Error !",
								type:"alert-error",
								text: "Please Enter Item Price",
											});
								return false;
           					 }
						}
						if(i==14)
						{
						
                        var item_tax_per  =  document.getElementById("item_tax_per").value;
                         if (item_tax_per == "") {
                           dhtmlx.alert({
								title: "Error !",
								type:"alert-error",
								text: "Please Enter Item Tax Percentage",
											});
								return false;
           					 }
						}
						if(i==15)
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
				}
			  FormName		= document.po_reg;
  			  FormName.method	= "POST";
              FormName.submit();
		}
		
		
</script>
<script>
function getvalue()
{					var quantity = document.getElementById(\'item_quantity\').value;
					var price = document.getElementById(\'item_price\').value;
					var cost = (quantity * price);
					document.getElementById(\'item_sub\').value=cost;
					var tax = document.getElementById(\'item_tax_per\').value;
					if(tax != "")
					{
							var tax_value = (cost * tax)/100;
							document.getElementById(\'item_tax_value\').value=tax_value;
							var total = (+tax_value + +cost);
							document.getElementById(\'item_total_price\').value=Math.round(total);
					}
					
}
</script>
<script>
function GoBack()
{
window.history.back();
}
</script>
<script>
function Fill_Name_of_Clr()
{
var supplier_company= document.getElementById("supplier_company").value;
var cnt_dtl_ary="";
if (supplier_company=="")
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
  	x ="<option value=\'\'>--Select Company Name--</option>"
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
xmlhttp.open("GET","ajax_po.php?supplier_company="+supplier_company,true);
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
	document.getElementById("supplier_mail").value=email[val];	
	document.getElementById("area_code").value=area_code[val];
	document.getElementById("phone_no").value=phone[val];	
	document.getElementById("extension").value=extn[val];	
	//document.getElementById("contact_person").innerHTML=x;

	Fill_Add();
	document.getElementById("contact_person").innerHTML=x;
}
function Fill_Add()
{
var area=document.getElementById("area").value;
var supplier_company=document.getElementById("supplier_company").value;
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
xmlhttp.open("GET","ajax_po.php?area="+area+"&supplier_company="+supplier_company,true);
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
		 document.getElementById("item_price").value=add_dtls[1];   

	   }
       
    }
  }
xmlhttp.open("GET","ajax_po.php?product_desc="+product_desc,true);
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
		 document.getElementById("item_quantity").value=add_dtls[1];

	   }
       
    }
  }
xmlhttp.open("GET","ajax_po.php?material_name="+material_name,true);
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

</script>

'; ?>

  <body class="hold-transition skin-blue sidebar-mini" onLoad="doOnLoad();">
    <div class="wrapper">
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
				<h4>
        <small><a href="po_list.php"><i class="fa fa-list"> <label style="font-family:Arial, Helvetica, sans-serif">
		List PO</label></i></a></small>&ensp;&ensp;&ensp;
        <small class="active"><a href="po_reg.php"><i class="fa fa-user-plus"> <label style="font-family:Arial, Helvetica, sans-serif">
		Create PO</label></i></a></small>
		</h4>
        </section>

        <!-- Main content -->
        <section class="content">

          <!-- SELECT2 EXAMPLE -->
          <div class="box box-info">
            <div class="box-header with-border" align="center">
              <h3 class="box-title">PO Registration</h3>
              <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
              </div>
            </div><!-- /.box-header -->
			
			<form class="form-horizontal" name="po_reg">
			<input type="hidden" name="hdAction" />
					<input type="hidden" id="c_id" name="c_id" size="25" value="<?php echo $this->_tpl_vars['c_id']; ?>
" readonly="true" >
					<input type="hidden" id="mobile_fld_cnt" name="mobile_fld_cnt"  value="2"  >
					<input type="hidden" id="hdn_add_dtls" name="hdn_add_dtls" value="">
					<input type="hidden" id="hdn_add_dtls1" name="hdn_add_dtls1" value="">
					<input type="hidden" id="phone_fld_cnt" name="phone_fld_cnt"  value="2"  >
					<input type="hidden" id="email_fld_cnt" name="email_fld_cnt"  value="2"  >
					<input type="hidden" id="hdn_salutation" name="hdn_salutation" value="<?php echo $this->_supers['post']['salutaion']; ?>
">
					<input type="hidden" id="hdn_cnt_dtls" name="hdn_cnt_dtls" value="<?php echo $this->_supers['post']['hdn_cnt_dtls']; ?>
">
					<input type="hidden" id="hdn_order_status" name="hdn_order_status" value="<?php echo $this->_supers['post']['order_status']; ?>
">
					<input type="hidden" id="hdn_customer_status" name="hdn_customer_status" value="<?php echo $this->_supers['post']['customer_status']; ?>
">
					<input type="hidden" id="hdn_customer_type" name="hdn_customer_type" value="<?php echo $this->_supers['post']['customer_type']; ?>
">
					<input type="hidden" id="hdn_customer_type" name="hdn_customer_type" value="<?php echo $this->_supers['post']['customer_type']; ?>
">
				<?php $_from = $this->_tpl_vars['Comtype1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['View']):
?>					
					<input type="hidden" id="company_name" name="company_name" value="<?php echo $this->_tpl_vars['View']['company_name']; ?>
">
					<input type="hidden" id="del_address" name="address" value="<?php echo $this->_tpl_vars['View']['del_address']; ?>
">
					<input type="hidden" id="del_address1" name="address1" value="<?php echo $this->_tpl_vars['View']['del_address1']; ?>
">
					<input type="hidden" id="del_area" name="area" value="<?php echo $this->_tpl_vars['View']['del_area']; ?>
">
					<input type="hidden" id="del_city" name="city" value="<?php echo $this->_tpl_vars['View']['del_city']; ?>
">
					<input type="hidden" id="del_pincode" name="pincode" value="<?php echo $this->_tpl_vars['View']['del_pincode']; ?>
">
			<?php endforeach; endif; unset($_from); ?>
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
				   <?php if ($this->_tpl_vars['LDList2'] == ""): ?>
                    <div class="form-group">			 
                      <label class="col-sm-3 control-label">PO No</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="po_no" name="po_no" tabindex="1" value="<?php echo $this->_tpl_vars['po_no']; ?>
" placeholder="PO No" autocomplete="off" readonly="true">
                      </div>
                    </div>
					
					<div class="form-group">
                      <label class="col-sm-3 control-label">SupplierCompany</label>
					  <div class="col-sm-5">
                        <input type="text" class="form-control" id="supplier_company" name="supplier_company" placeholder="Supplier company" value="<?php echo $this->_supers['post']['supplier_fname']; ?>
" tabindex="3"  onKeyUp="text_filter(this);" autocomplete="off">
					</div>
                    </div>
					
					 <div class="form-group">
                      <label class="col-sm-3 control-label">Contact Person</label>
					 <div class="col-sm-5">
								   	<select id="contact_person" name="contact_person" class="form-control" onChange="split_cnt_dtls(this.value);" tabindex="5" value="<?php echo $this->_supers['post']['contact_person']; ?>
">
						<option value=""> -- Select Vendor Name -- </option>				
						</select>
					  </div>
                    </div>
					
				<div class="form-group">
                      <label class="col-sm-3 control-label">PO Status</label>
                      <div class="col-sm-5">
						<select id="po_status" name="po_status"  class="form-control" tabindex="7" value="<?php echo $this->_supers['post']['po_status']; ?>
" autocomplete="off" >
					  <option value="">---Select---</option>
					  <option value="Pending">Pending</option>
					  <option value="Mail Sent">Mail Sent</option>
					  <option value="Order Placed">Order Placed</option>
					  <option value="Material in Tansist">Material in Transist</option>
					  <option value="Partial Material Received">Partial Material Received</option>
					   <option value="Full Material Received">Full Material Received</option>
					  </select>
                      </div>
                    </div>
				<div class="form-group"  >
                      <label class="col-sm-3 control-label">Quote Refer Id</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="quote_ref_id" name="quote_ref_id" tabindex="9" value="<?php echo $this->_supers['post']['quote_ref_id']; ?>
" placeholder="Quote Reference Id" autocomplete="off">					<input type="hidden" class="form-control" id="timestamp" name="timestamp" value="<?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d &amp; %I:%M:%S %p') : smarty_modifier_date_format($_tmp, '%Y-%m-%d &amp; %I:%M:%S %p')); ?>
">
						<input type="hidden" class="form-control" id="created_date" name="created_date" value="<?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d') : smarty_modifier_date_format($_tmp, '%Y-%m-%d')); ?>
">
						<input type="hidden" class="form-control" id="created_time" name="created_time" value="<?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%I:%M:%S %p') : smarty_modifier_date_format($_tmp, '%I:%M:%S %p')); ?>
">
                      </div>
					  </div>
					  
					<div class="form-group" >
                      <label class="col-sm-3 control-label">Mobile No </label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="mobile_no" name="mobile_no" placeholder="Mobile No" value="<?php echo $this->_supers['post']['mobile_no']; ?>
" maxlength="10" tabindex="13" onKeyUp="numericFilter(this);clear_err_mobile(this.id);"  onBlur="chk_exist_mob(this);" autocomplete="off" readonly="true">
                      </div>
                    </div>
					  	<div class="form-group">
                      <label class="col-sm-3 control-label">Address</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="address" name="address" value="<?php echo $this->_supers['post']['address']; ?>
" tabindex="15" placeholder="Address" autocomplete="off" readonly="true">
                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-3 control-label">Area</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="area" name="area" value="<?php echo $this->_supers['post']['area']; ?>
" tabindex="17" placeholder="Area" autocomplete="off" readonly="true">
                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-3 control-label">Delivered To</label>
                      <div class="col-sm-5">
						<select id="deliver_to" name="deliver_to"  class="form-control" tabindex="19" value="<?php echo $this->_supers['post']['deliver_to']; ?>
" autocomplete="off" >
					  <option value="">---Select---</option>
					  <option value="Asian Engineering">Asian Engineering</option>
					  <option value="Universal Infrastructure Systems">Universal Infrastructure Systems</option>
					   <option value="Others">Others</option>
					  </select>
                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-3 control-label">City</label>
                      <div class="col-sm-5">
                     <input type="text" class="form-control" id="city" name="city" tabindex="21" value="<?php echo $this->_supers['post']['city']; ?>
" placeholder="City" autocomplete="off" readonly="true">
                      </div>
                    </div>
					
					<div class="form-group" style="border-bottom: 1px solid #d6d2d2;"></div>
					  <div class="form-group" style="display:none;">			 
                      <label class="col-sm-3 control-label">Created By</label>
                      <div class="col-sm-5">
                   <input type="text" class="form-control" id="created_by" name="created_by" tabindex="23" value="<?php echo $this->_supers['session']['UserName']; ?>
" readonly="true" autocomplete="off" >
                      </div>
                    </div>
					<?php endif; ?>
				<?php if ($this->_tpl_vars['LDList2'] != ""): ?>
				<?php $_from = $this->_tpl_vars['LDList2']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['master']):
?>
					<div class="form-group">			 
                      <label class="col-sm-3 control-label">PO No</label>
                      <div class="col-sm-5">
                      <input type="text" class="form-control" id="po_no" name="po_no" tabindex="1" value="<?php echo $this->_tpl_vars['master']['po_no']; ?>
" placeholder="PO No" autocomplete="off" readonly="true">
                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-3 control-label">SupplierCompany</label>
					  <div class="col-sm-5">
                        <input type="text" class="form-control" id="supplier_company" name="supplier_company" placeholder="Supplier company" value="<?php echo $this->_tpl_vars['master']['supplier_company_name']; ?>
" tabindex="3"  onKeyUp="text_filter(this);" autocomplete="off">
					</div>
                    </div>
					
					 <div class="form-group">
                      <label class="col-sm-3 control-label">Contact Person</label>
					  <div class="col-sm-5">
                        <input type="text" class="form-control" id="contact_person" name="contact_person" placeholder="Contact Person" value="<?php echo $this->_tpl_vars['master']['contact_person']; ?>
" tabindex="5"  onKeyUp="text_filter(this);" autocomplete="off">
					</div>
                    </div>
					
				<div class="form-group">
                      <label class="col-sm-3 control-label">PO Status</label>
                      <div class="col-sm-5">
						<select id="po_status" name="po_status" class="form-control" tabindex="7" value="<?php echo $this->_tpl_vars['master']['po_status']; ?>
" >
						<option id"<?php echo $this->_tpl_vars['master']['po_status']; ?>
" value="<?php echo $this->_tpl_vars['master']['po_status']; ?>
" selected="selected"><?php echo $this->_tpl_vars['master']['po_status']; ?>
</option>
						<option value="">----Select------</option>
						<option value="Pending">Pending</option>
					  <option value="Mail Sent">Mail Sent</option>
					  <option value="Order Placed">Order Placed</option>
					  <option value="Material in Transist">Material in Transist</option>
					  <option value="Partial Material Received">Partial Material Received</option>
					   <option value="Full Material Received">Full Material Received</option>
						</select>
                      </div>
                    </div>
				<div class="form-group"  >
                      <label class="col-sm-3 control-label">Quote Refer Id</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="quote_ref_id" name="quote_ref_id" tabindex="9" value="<?php echo $this->_tpl_vars['master']['quote_ref_id']; ?>
" placeholder="Quote Reference Id" autocomplete="off">					<input type="hidden" class="form-control" id="timestamp" name="timestamp" value="<?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d &amp; %I:%M:%S %p') : smarty_modifier_date_format($_tmp, '%Y-%m-%d &amp; %I:%M:%S %p')); ?>
">
						<input type="hidden" class="form-control" id="created_date" name="created_date" value="<?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d') : smarty_modifier_date_format($_tmp, '%Y-%m-%d')); ?>
">
						<input type="hidden" class="form-control" id="created_time" name="created_time" value="<?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%I:%M:%S %p') : smarty_modifier_date_format($_tmp, '%I:%M:%S %p')); ?>
">
                      </div>
					  </div>
					  
					<div class="form-group" >
                      <label class="col-sm-3 control-label">Mobile No </label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="mobile_no" name="mobile_no" placeholder="Mobile No" value="<?php echo $this->_tpl_vars['master']['supplier_mobile_no']; ?>
" maxlength="10" tabindex="13" onKeyUp="numericFilter(this);clear_err_mobile(this.id);"  onBlur="chk_exist_mob(this);" autocomplete="off" readonly="true">
                      </div>
                    </div>

					  	<div class="form-group">
                      <label class="col-sm-3 control-label">Address</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="address" name="address" value="<?php echo $this->_tpl_vars['master']['supplier_address']; ?>
" tabindex="15" placeholder="Address" autocomplete="off" readonly="true">
                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-3 control-label">Area</label>
                      <div class="col-sm-5">
                       <input type="text" class="form-control" id="area" name="area" value="<?php echo $this->_tpl_vars['master']['area']; ?>
" tabindex="17" placeholder="Area" autocomplete="off" readonly="true">  
                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-3 control-label">Delivered To</label>
                      <div class="col-sm-5">
						<select id="deliver_to" name="deliver_to" class="form-control" tabindex="19" value="<?php echo $this->_tpl_vars['master']['deliver_to']; ?>
" >
						<option id"<?php echo $this->_tpl_vars['master']['deliver_to']; ?>
" value="<?php echo $this->_tpl_vars['master']['deliver_to']; ?>
" selected="selected"><?php echo $this->_tpl_vars['master']['deliver_to']; ?>
</option>
					  <option value="">---Select---</option>
					  <option value="Asian Engineering">Asian Engineering</option>
					  <option value="Universal Infrastructure">Universal Infrastructure Systems</option>
					   <option value="Others">Others</option>
					  </select>
                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-3 control-label">City</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="city" name="city" tabindex="21" value="<?php echo $this->_tpl_vars['master']['city']; ?>
" placeholder="City" autocomplete="off" readonly="true">
                      </div>
                    </div>
					<div class="form-group" style="border-bottom: 1px solid #d6d2d2;"></div>
					  
					  <div class="form-group" style="display:none;">			 
                      <label class="col-sm-3 control-label">Created By</label>
                      <div class="col-sm-5">
                    <input type="text" class="form-control" id="created_by" name="created_by" tabindex="21" value="<?php echo $this->_supers['session']['UserName']; ?>
" readonly="true" autocomplete="off" >
                      </div>
                    </div>
					<?php endforeach; endif; unset($_from); ?>
					<?php endif; ?>
					<div class="form-group">
                      <label class="col-sm-3 control-label">Item Type</label>
                      <div class="col-sm-5">
                      <select id="item_type" name="item_type" class="form-control" tabindex="22" onChange="Event();" autocomplete="off" value="<?php echo $this->_supers['post']['item_type']; ?>
">
					  <option value="" >----Select----</option>
					  <option value="Product">Product</option>
					  <option value="Material">Material</option>
					  </select>
                      </div>
                    </div>
					
					<div class="form-group">
                      <label class="col-sm-3 control-label">Item Code</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="item_code" name="item_code" tabindex="24" value="<?php echo $this->_supers['post']['item_code']; ?>
" placeholder="Item Code" autocomplete="off" readonly="true">
                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-3 control-label">Item Specfication</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="item_specification" name="item_specification" value="<?php echo $this->_supers['post']['item_specification']; ?>
" tabindex="26" placeholder="Item Specification" autocomplete="off">
                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-3 control-label">Item Tax  %</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="item_tax_per" name="item_tax_per" value="<?php echo $this->_supers['post']['item_tax_per']; ?>
" onKeyUp="getvalue();numericFilter(this);"  tabindex="28" placeholder="Item Tax Percentage" autocomplete="off">
                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-3 control-label">Item Total Price</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="item_total_price" name="item_total_price" tabindex="30" placeholder="Item Total Price" autocomplete="off" readonly="true">
                      </div>
                    </div>
					
                   	</div>
					<!--**********************************************************-->
                      <div class="col-md-6">
					  <?php if ($this->_tpl_vars['LDList2'] == ""): ?>
					  <div class="form-group">
                      <label class="col-sm-3 control-label">PO Date</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="po_date" name="po_date"  placeholder="PO Date" tabindex="2" value="<?php echo $this->_supers['post']['po_date']; ?>
" onClick="doOnLoad();"  readonly="true" autocomplete="off"/>
                      </div>
					  <a href="#"><img id="calendar_icon1" src="codebase/calendar.png"></a>
                    </div>
					
					
					<div class="form-group">
                      <label class="col-sm-3 control-label">Supplier Code</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="supplier_code" name="supplier_code" tabindex="4" value="<?php echo $this->_supers['post']['supplier_code']; ?>
" placeholder="Supplier Code" autocomplete="off" readonly="true">
                      </div>
                    </div>
					
					
					<div class="form-group">
                      <label class="col-sm-3 control-label">Payment Status</label>
                      <div class="col-sm-5">
						<select id="payment_status" name="payment_status"  class="form-control" tabindex="6" value="<?php echo $this->_supers['post']['payment_status']; ?>
" autocomplete="off"placeholder="Payment Status">
					  <option value="">---Select---</option>
					  <option value="Pending">Pending</option>
					  <option value="Partial Paid">Partial Paid</option>
					  <option value="Paid">Paid</option>
					  </select>
                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-3 control-label">Quote Date</label>
                       <div class="col-sm-5">
                        <input type="text" class="form-control" id="quote_date" name="quote_date"  placeholder="Quote Date" tabindex="8" value="<?php echo $this->_supers['post']['quote_date']; ?>
" onClick="doOnLoad();" readonly="true" autocomplete="off"/>
                      </div>
					  <a href="#"><img id="calendar_icon2" src="codebase/calendar.png"></a>
                    </div>
					
					<div class="form-group"> <label class="col-sm-3 control-label">Phone No</label>
					    <div class="col-sm-2">
					    <input type="text" class="form-control" id="area_code" name="area_code" value="<?php echo $this->_supers['post']['area_code']; ?>
" placeholder="Area Code" tabindex="10" onKeyUp="numericFilter(this);" autocomplete="off" readonly="true">
					  </div>
                      <div class="col-sm-2">
                        <input type="text" class="form-control" id="phone_no" name="phone_no" value="<?php echo $this->_supers['post']['phone_no']; ?>
" placeholder="Phone No" tabindex="11"onKeyUp="numericFilter(this);" autocomplete="off" readonly="true" style="margin-left:-25px;">
                      </div>
                      <div class="col-sm-2">
                        <input type="text" class="form-control" id="extension" name="extension" value="<?php echo $this->_supers['post']['extension']; ?>
" placeholder="Extension" tabindex="12" onKeyUp="numericFilter(this);" autocomplete="off" readonly="true" style="margin-left:-45px;">
                       </div>
                    </div>
					
					<div class="form-group">
                      <label class="col-sm-3 control-label">Supplier Mail Id</label>
                        <div class="col-sm-5">
                  <input type="email" class="form-control" id="supplier_mail" name="supplier_mail" placeholder="Supplier Mail Id" tabindex="14" value="<?php echo $this->_supers['post']['supplier_mail']; ?>
"  onKeyUp="clear_err_email_id();" autocomplete="off"  readonly="true">
                      </div>
					   </div> 
					   <div class="form-group" id="hdn_email2" style="display:none">
                      <label class="col-sm-3 control-label">Supplier Mail Id</label>
                      <div class="col-sm-5">
                        <input type="email" class="form-control" id="supplier_mail1" name="supplier_mail1" placeholder="Supplier Mail Id"  value="<?php echo $this->_supers['post']['supplier_mail1']; ?>
"  onKeyUp="clear_err_email_id();" autocomplete="off"  readonly="true">
                      </div>
					  </div>
					<div class="form-group">
                      <label class="col-sm-3 control-label">Address1</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="address1" name="address1" tabindex="16" value="<?php echo $this->_supers['post']['address1']; ?>
" placeholder="Address1" autocomplete="off" readonly="true">
                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-3 control-label">Landmark</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="landmark" name="landmark" tabindex="18" value="<?php echo $this->_supers['post']['landmark']; ?>
" placeholder="Landmark" autocomplete="off" readonly="true">
                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-3 control-label">Pincode</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="pincode" name="pincode" value="<?php echo $this->_supers['post']['pincode']; ?>
" tabindex="20" placeholder="Pincode" autocomplete="off" maxlength="6" onKeyUp="numericFilter(this);" readonly="true"/>
                      </div>
                    </div>
					<div class="form-group"></div><div class="form-group"></div><div class="form-group"></div>
					<?php endif; ?>
					<?php if ($this->_tpl_vars['LDList2'] != ""): ?>
				<?php $_from = $this->_tpl_vars['LDList2']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['master']):
?>
					<div class="form-group">
                      <label class="col-sm-3 control-label">PO Date</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="po_date" name="po_date"  placeholder="PO Date" tabindex="1" value="<?php echo $this->_tpl_vars['master']['po_date']; ?>
" onClick="doOnLoad();"  readonly="true" autocomplete="off"/>
                      </div>
					  <a href="#"><img id="calendar_icon1" src="codebase/calendar.png"></a>
                    </div>
					
					
					<div class="form-group">
                      <label class="col-sm-3 control-label">Supplier Code</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="supplier_code" name="supplier_code" tabindex="3" value="<?php echo $this->_tpl_vars['master']['supplier_code']; ?>
" placeholder="Supplier Code" autocomplete="off">
                      </div>
                    </div>
					
					
					<div class="form-group">
                      <label class="col-sm-3 control-label">Payment Status</label>
                      <div class="col-sm-5">
						 <select id="payment_status" name="payment_status" class="form-control" tabindex="12" value="<?php echo $this->_tpl_vars['master']['payment_status']; ?>
" >
						<option id"<?php echo $this->_tpl_vars['master']['payment_status']; ?>
" value="<?php echo $this->_tpl_vars['master']['payment_status']; ?>
" selected="selected"><?php echo $this->_tpl_vars['master']['payment_status']; ?>
</option>
						<option value="">----Select------</option>
						<option>Pending</option>
						<option>Partial Paid</option>
						<option>Paid</option>
						</select>
                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-3 control-label">Quote Date</label>
                       <div class="col-sm-5">
                        <input type="text" class="form-control" id="quote_date" name="quote_date"  placeholder="quote_date" tabindex="9" value="<?php echo $this->_tpl_vars['master']['quote_date']; ?>
" onClick="doOnLoad();" readonly="true" autocomplete="off"/>
                      </div>
					  <a href="#"><img id="calendar_icon2" src="codebase/calendar.png"></a>
                    </div>
					
					<div class="form-group">
                      <label class="col-sm-3 control-label">Phone No</label>
                       <div class="col-sm-2">
                        <input type="text" class="form-control" id="area_code" name="area_code" value="<?php echo $this->_tpl_vars['master']['area_code']; ?>
" placeholder="Area Code" tabindex="13" onKeyUp="numericFilter(this);" autocomplete="off" readonly="true" >
					  </div>
                      <div class="col-sm-2">
                        <input type="text" class="form-control" id="phone_no" name="phone_no" value="<?php echo $this->_tpl_vars['master']['phone_no']; ?>
" placeholder="Phone No" tabindex="14"onKeyUp="numericFilter(this);" autocomplete="off"  readonly="true" style="margin-left:-25px;">
                      </div>
                      <div class="col-sm-2">
                        <input type="text" class="form-control" id="extension" name="extension" value="<?php echo $this->_tpl_vars['master']['extension']; ?>
" placeholder="Extension" tabindex="15" onKeyUp="numericFilter(this);" autocomplete="off" readonly="true"  style="margin-left:-45px;">
                      </div>
                    </div>
					
					<div class="form-group">
                      <label class="col-sm-3 control-label">Supplier Mail Id</label>
                        <div class="col-sm-5">
                  <input type="email" class="form-control" id="supplier_mail" name="supplier_mail" placeholder="Supplier Mail Id" tabindex="11" value="<?php echo $this->_tpl_vars['master']['supplier_email']; ?>
"  onKeyUp="clear_err_email_id();" autocomplete="off"  readonly="true">
                      </div>
					   </div> 
					   <div class="form-group" id="hdn_email2" style="display:none">
                      <label class="col-sm-3 control-label">Supplier Mail Id</label>
                      <div class="col-sm-5">
                        <input type="email" class="form-control" id="supplier_mail1" name="supplier_mail1" placeholder="Supplier Mail Id"  value="<?php echo $this->_tpl_vars['master']['supplier_email']; ?>
"  onKeyUp="clear_err_email_id();" autocomplete="off" readonly="true">
                      </div>
					  </div>
					<div class="form-group">
                      <label class="col-sm-3 control-label">Address1</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="address1" name="address1" tabindex="13" value="<?php echo $this->_tpl_vars['master']['supplier_address1']; ?>
" placeholder="Address1" autocomplete="off" readonly="true">
                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-3 control-label">Landmark</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="landmark" name="landmark" tabindex="15" value="<?php echo $this->_tpl_vars['master']['landmark']; ?>
" placeholder="Landmark" autocomplete="off" readonly="true">
                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-3 control-label">Pincode</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="pincode" name="pincode" value="<?php echo $this->_tpl_vars['master']['pincode']; ?>
" tabindex="16" placeholder="Pincode" autocomplete="off" maxlength="6" readonly="true">
                      </div>
                    </div>
					<div class="form-group"></div><div class="form-group"></div><div class="form-group"></div>
					<?php endforeach; endif; unset($_from); ?>
					<?php endif; ?>
					
					<div class="form-group" style="border-bottom: 1px solid #d6d2d2;margin-top:-4px;"></div>
					<div class="form-group">
                      <label class="col-sm-3 control-label">Item Name</label>
                      <div class="col-sm-5">
                       <input type="text" class="form-control" id="product_desc" name="product_desc" placeholder="Product Desc" value="<?php echo $this->_supers['post']['product_desc']; ?>
" tabindex="23" onKeyUp="text_filter(this);">
						<input type="text" class="form-control" id="material_name" name="material_name" placeholder="Material Name" value="<?php echo $this->_supers['post']['material_name']; ?>
" tabindex="4" onKeyUp="text_filter(this);" style="display:none">
                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-3 control-label">Item Quantity</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="item_quantity" name="item_quantity" tabindex="25" onKeyUp="getvalue();numericFilter(this);"  value="<?php echo $this->_supers['post']['item_quantity']; ?>
" placeholder="Item Quantity" autocomplete="off">
                      </div>
                    </div>
					 <div class="form-group">
                      <label class="col-sm-3 control-label">Item Price</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="item_price" name="item_price" value="<?php echo $this->_supers['post']['item_price']; ?>
" onKeyUp="getvalue();numericFilter(this);"  tabindex="27" placeholder="Item Price" autocomplete="off">
                      </div>
                    </div>
					 	
					<div class="form-group">
                      <label class="col-sm-3 control-label">Item Tax Value</label>
                      <div class="col-sm-5">
				<input type="text" class="form-control" id="item_tax_value" name="item_tax_value" tabindex="29" placeholder="Item Tax Value" autocomplete="off" readonly="true">
				<input type="hidden" class="form-control" id="item_sub" name="item_sub" tabindex="29" placeholder="Item Sub" autocomplete="off" readonly="true">
                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-3 control-label">Remarks</label>
                      <div class="col-sm-5">
                        <textarea class="form-control" id="remarks" name="remarks" placeholder="Remarks" tabindex="31" autocomplete="off"><?php echo $this->_supers['post']['remarks']; ?>
</textarea>
                      </div>
                    </div>
					
					</div>
                    </div>
					 <div class="box-footer"><center>
					<input type="button" class="btn btn-info pull-center" value="ADD PO"  onClick="validate_fields();" >&nbsp;&nbsp;
                    <button type="submit" class="btn btn-info pull-center" onClick="GoBack();" >CANCEL</button></center>
                  </div>
				   </form>
                  </div>
				  </section>
      <div class="control-sidebar-bg"></div>
    </div>
	</div>
  </body>
</html>