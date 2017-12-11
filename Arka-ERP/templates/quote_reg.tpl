{include file="left.tpl"}
{literal}
<script type="text/javascript">

</script>
<script type="text/javascript" src='./dhtmlxMessage/codebase/dhtmlxmessage.js'></script>
	<script type='text/javascript' src='./auto-complete/jquery.metadata.js'></script>
	<script type='text/javascript' src='./auto-complete/jquery.auto-complete.js?<?= mktime() ?>'></script>
	<script type='text/javascript' src='./auto-complete/js.js?<?= mktime() ?>'></script>
	<link rel="stylesheet" href= "./codebase/skins/dhtmlxmessage_dhx_skyblue.css" type="text/css" media="all"/>
	<link rel='stylesheet' type='text/css' href='auto-complete/jquery.auto-complete.css?<?= mktime() ?>' />
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
			retrieve_select_bxs();
			Fill_Name_of_Clr();
			Fill_Add();
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

		var fields=["quote_id","enquiry_refference_id","quote_date","quote_status","supplier_company_name","contact_person","item_type","item_code","item_quantity","item_specification"];
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
						var enquiry_refference_id  =  document.getElementById("enquiry_refference_id").value;
						if(enquiry_refference_id=="")
						{
						dhtmlx.alert({
								title: "Error !",
								type:"alert-error",
								text: "Please Enter Enquiry Refference Id",
											});
									return false;
						}
						}
							if(i==2)
						{
						var quote_date  =  document.getElementById("quote_date").value;
						if(quote_date=="")
						{
						dhtmlx.alert({
								title: "Error !",
								type:"alert-error",
								text: "Please Select Quote Date",
											});
									return false;
						}
						}
						if(i==3)
						{
						 var e = document.getElementById("quote_status");
                         var optionSelIndex = e.options[e.selectedIndex].value;
                         var optionSelectedText = e.options[e.selectedIndex].text;
                        if (optionSelIndex == "") {
                       dhtmlx.alert({
								title: "Error !",
								type:"alert-error",
								text: "Please Select Quote Status",
											});
								return false;
           					 }
						}
						if(i==4)
						{
						var supplier_company_name  =  document.getElementById("supplier_company_name").value;
						if(supplier_company_name=="")
						{
						dhtmlx.alert({
								title: "Error !",
								type:"alert-error",
								text: "Please Enter Supplier Company Name",
											});
									return false;
						}
						}
						
						if(i==5)
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
						if(i==6)
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

							if(i==7)
						{
						 var d = document.getElementById("item_type");
            var optionSelIndex = d.options[d.selectedIndex].value;
            var optionSelectedText = d.options[d.selectedIndex].text;
            if (optionSelIndex == 0) {
               dhtmlx.alert({
								title: "Error !",
								type:"alert-error",
								text: "Please Select Item Type",
											});
								return false;
           					 }
						}
                        if(i==8)
						{
						var item_name  =  document.getElementById("item_name").value;
						if(item_name=="")
						{
						dhtmlx.alert({
								title: "Error !",
								type:"alert-error",
								text: "Please Enter Item Name",
											});
									return false;
						}
						}
						 if(i==9)
						{
						var item_quantity  =  document.getElementById("item_quantity").value;
						if(item_quantity=="")
						{
						dhtmlx.alert({
								title: "Error !",
								type:"alert-error",
								text: "Please Enter Item Quantity",
											});
									return false;
						}
						}
						 if(i==10)
						{
						var item_specification  =  document.getElementById("item_specification").value;
						if(item_specification=="")
						{
						dhtmlx.alert({
								title: "Error !",
								type:"alert-error",
								text: "Please Enter Item specification",
											});
									return false;
						}
						}
				return false;
				}
				}
			  FormName		= document.add_quote;
  			  FormName.method	= "POST";
              FormName.submit();
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
  	x ="<option value=''>--Select Company Name--</option>"
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
	   document.getElementById("contact_person").innerHTML="<option value='0'>Please select Company Name</option>";
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
	//document.getElementById("contact_person").innerHTML=x;
	Fill_Add();	
	document.getElementById("contact_person").innerHTML=x;


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
	   document.getElementById("contact_person").innerHTML="<option value='0'>Please select Company Name</option>";
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
xmlhttp.open("GET","ajax_quote_mat.php?material_name="+material_name,true);
xmlhttp.send();

}
function Check()
{
var select = document.getElementById("item_type");
if(select.value == "0")
{
dhtmlx.alert({
			title: "Item Type",
			type:"alert-error",
			text: "Please Select Item Type"});
}
else
{

}
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
{/literal}
	<body class="hold-transition skin-blue sidebar-mini" onLoad="doOnLoad();">
    <div class="wrapper">
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
              <h3 class="box-title">Quote Registration</h3>
              <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
              </div>
            </div><!-- /.box-header -->
			<form class="form-horizontal" name="add_quote">
			<input type="hidden" name="hdAction" />

					<input type="hidden" id="hdn_cnt_dtls" name="hdn_cnt_dtls" value="">
					<input type="hidden" id="hdn_add_dtls" name="hdn_add_dtls" value="">
					<input type="hidden" id="hdn_add_dtls1" name="hdn_add_dtls1" value="">
					<input type="hidden" id="mobile_fld_cnt" name="mobile_fld_cnt"  value="2"  >
					<input type="hidden" id="phone_fld_cnt" name="phone_fld_cnt"  value="2"  >
					<input type="hidden" id="email_fld_cnt" name="email_fld_cnt"  value="2"  >
					<input type="hidden" id="hdn_salutation" name="hdn_salutation" value="{$smarty.post.salutaion}">
					<input type="hidden" id="hdn_order_status" name="hdn_order_status" value="{$smarty.post.order_status}">
					<input type="hidden" id="hdn_customer_status" name="hdn_customer_status" value="{$smarty.post.customer_status}">
					<input type="hidden" id="hdn_customer_type" name="hdn_customer_type" value="{$smarty.post.customer_type}">
					{if $SuccessMessage neq ""}
					<div class="isa_success">
					<i class="fa fa-check"></i>
					{$SuccessMessage}
					</div>
					{/if}
					{if $ErrorMessage neq ""}
					<div class="isa_error">
					<i class="fa fa-times"></i>
					{$ErrorMessage}
					</div>
					{/if}
                  <div class="box-body">
				   <div class="col-md-6">
				    {if $LDList2 eq ""}
				   <div class="form-group">
                      <label class="col-sm-3 control-label">Quote Id</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="quote_id" name="quote_id" value="{$qo_id}" placeholder="Quote Id" tabindex="1" readonly="true">
                      </div>
                    </div>

					 <div class="form-group">
                      <label class="col-sm-3 control-label">Quote Date</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="quote_date" name="quote_date" value="{$smarty.post.quote_date}" placeholder="Quote Date" onClick="doOnLoad();" tabindex="3" readonly="ture" autocomplete="off">
                      </div>
					  <a href="#"><img id="calendar_icon1" src="codebase/calendar.png"></a>
                    </div>
					<div class="form-group">
                      <label class="col-sm-3 control-label">Suplier Company</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="supplier_company_name" name="supplier_company_name" value="{$smarty.post.supplier_company_name}" placeholder="Supplier Company Name" tabindex="5" autocomplete="off" onKeyUp="text_filter(this);">
                      </div>
                    </div>

					<div class="form-group">
                      <label class="col-sm-3 control-label">Contact Person</label>
                      <div class="col-sm-5">
								   	<select id="contact_person" name="contact_person" class="form-control" onChange="split_cnt_dtls(this.value);" tabindex="7" value="{$smarty.post.contact_person}">
						<option value="0"> -- Select Vendor Name -- </option>
						</select>
					  </div>
				</div>
				<div class="form-group">
					 <label class="col-sm-3 control-label">Phone No</label>
					    <div class="col-sm-2">
					    <input type="text" class="form-control" id="area_code" name="area_code" value="{$smarty.post.area_code}" placeholder="Area Code" tabindex="9" onKeyUp="numericFilter(this);" autocomplete="off"  readonly="true">
					  </div>
                      <div class="col-sm-2">
                        <input type="text" class="form-control" id="phone_no" name="phone_no" value="{$smarty.post.phone_no}" placeholder="Phone No" tabindex="10"onKeyUp="numericFilter(this);" autocomplete="off"  readonly="true" style="margin-left:-25px;">
                      </div>
                      <div class="col-sm-2">
                        <input type="text" class="form-control" id="extension" name="extension" value="{$smarty.post.extension}" placeholder="Extension" tabindex="11" onKeyUp="numericFilter(this);" autocomplete="off" readonly="true" style="margin-left:-45px;">
                       </div>
					   </div>
					 <div class="form-group" style=" margin-top:0px;">
                      <label class="col-sm-3 control-label">Address</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="address" name="address" value="{$smarty.post.address}" placeholder="Address" tabindex="13" autocomplete="off" readonly="true">
                      </div>
                    </div>

					  <div class="form-group">
                      <label class="col-sm-3 control-label">Area</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="area" name="area" value="{$smarty.post.area}" placeholder="Area" tabindex="15" autocomplete="off" readonly="true">
                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-3 control-label">City</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="city" name="city" value="{$smarty.post.city}" placeholder="City" tabindex="17"   autocomplete="off" readonly="true">
                      </div></div>

					   <div class="form-group"  style="display:none;">
                      <label class="col-sm-3 control-label">Created By</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="created_by" name="created_by" value="{$smarty.session.UserName}"  readonly="true" autocomplete="off">
						<input type="hidden" class="form-control" id="created_date" name="created_date" value="{$smarty.now|date_format:'%Y-%m-%d'}" placeholder="Date" >
						<input type="hidden" class="form-control" id="created_time" name="created_time" value="{$smarty.now|date_format:'%I:%M:%S %p'}"  placeholder="Time">
						 <input type="hidden" class="form-control" id="timestamp" name="timestamp" value="{$smarty.now|date_format:'%Y-%m-%d &amp; %I:%M:%S %p'}"  placeholder="Timestamp Value">
                      </div>
					  <div class="form-group" ></div>
                    </div> {/if }
					    {if $LDList2 neq ""}
{foreach from=$LDList2 item=master_dtls}
<div class="form-group">
                      <label class="col-sm-3 control-label">Quote Id</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="quote_id" name="quote_id" value="{$master_dtls.quote_id}" placeholder="Quote Id" tabindex="1" autocomplete="off" readonly="true">
                      </div>
                    </div>

					 <div class="form-group">
                      <label class="col-sm-3 control-label">Quote Date</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="quote_date" name="quote_date" value="{$master_dtls.quote_date}" placeholder="Quote Date" onClick="doOnLoad();" tabindex="3" readonly="ture" autocomplete="off">
                      </div>
					  <a href="#"><img id="calendar_icon1" src="codebase/calendar.png"></a>
                    </div>
					<div class="form-group">
                      <label class="col-sm-3 control-label">Suplier Company</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="supplier_company_name" name="supplier_company_name" value="{$master_dtls.supplier_company_name}" placeholder="Supplier Company Name" tabindex="5" autocomplete="off" onKeyUp="text_filter(this);">
                      </div>
                    </div>

					<div class="form-group">
                      <label class="col-sm-3 control-label">Contact Person</label>
                      <div class="col-sm-5">
								   	<input type="text" id="contact_person" name="contact_person" class="form-control" onChange="split_cnt_dtls(this.value);" tabindex="7" value="{$master_dtls.contact_fname}" onKeyUp="text_filter(this);">
					  </div>
				</div>
				<div class="form-group">
					 <label class="col-sm-3 control-label">Phone No</label>
					    <div class="col-sm-2">
					    <input type="text" class="form-control" id="area_code" name="area_code" value="{$master_dtls.area_code}" placeholder="Area Code" tabindex="9" onKeyUp="numericFilter(this);" autocomplete="off" readonly="true">
					  </div>
                      <div class="col-sm-2">
                        <input type="text" class="form-control" id="phone_no" name="phone_no" value="{$master_dtls.phone_no}" placeholder="Phone No" tabindex="10"onKeyUp="numericFilter(this);" autocomplete="off" readonly="true" style="margin-left:-25px;">
                      </div>
                      <div class="col-sm-2">
                        <input type="text" class="form-control" id="extension" name="extension" value="{$master_dtls.extension}" placeholder="Extension" tabindex="11" onKeyUp="numericFilter(this);" autocomplete="off" readonly="true" readonly="true" style="margin-left:-45px;">
                       </div>
					   </div>
					 <div class="form-group" style=" margin-top:0px;">
                      <label class="col-sm-3 control-label">Address</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="address" name="address" value="{$master_dtls.address}" placeholder="Address" tabindex="13" autocomplete="off" readonly="true">
                      </div>
                    </div>

					  <div class="form-group">
                      <label class="col-sm-3 control-label">Area</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="area" name="area" value="{$master_dtls.area}" placeholder="Area" tabindex="15" autocomplete="off" readonly="true">
                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-3 control-label">City</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="city" name="city" value="{$master_dtls.city}" placeholder="City" tabindex="17"   autocomplete="off" readonly="true">
                      </div>  </div>

					   <div class="form-group"  style="display:none;">
                      <label class="col-sm-3 control-label">Created By</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="created_by" name="created_by" value="{$smarty.session.UserName}"  readonly="true" tabindex="22" autocomplete="off">
						<input type="hidden" class="form-control" id="created_date" name="created_date" value="{$smarty.now|date_format:'%Y-%m-%d'}" placeholder="Date" >
						<input type="hidden" class="form-control" id="created_time" name="created_time" value="{$smarty.now|date_format:'%I:%M:%S %p'}"  placeholder="Time">
						 <input type="hidden" class="form-control" id="timestamp" name="timestamp" value="{$smarty.now|date_format:'%Y-%m-%d &amp; %I:%M:%S %p'}"  placeholder="Timestamp Value">
                      </div><div class="form-group" ></div>
                    </div>{/foreach}{/if}
					<div class="form-group"	style="border-bottom: 1px solid #d6d2d2;margin-top:-5px;"></div>
					<div class="form-group">
                      <label class="col-sm-3 control-label">Item Type</label>
                      <div class="col-sm-5">
						<select id="item_type" name="item_type" class="form-control" tabindex="19" onChange="Event();" autocomplete="off" value="{$smarty.post.item_type}">
					  <option value="0" selected="selected">----Select----</option>
					  <option value="Product">Product</option>
					  <option value="Material">Material</option>
					  </select>
                      </div>
					  </div>

					  <div class="form-group">
                      <label class="col-sm-3 control-label">Item Code</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="item_code" name="item_code" value="{$smarty.post.item_code}" placeholder="Item Code" tabindex="21" autocomplete="off" readonly="true">
                      </div>
					   </div>

					  <div class="form-group">
                      <label class="col-sm-3 control-label">Item Specification</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="item_specification" name="item_specification" value="{$smarty.post.item_specification}" placeholder="Item Specification" tabindex="23" autocomplete="off">
                      </div>
					   </div>

						</div>

					<!--**********************************************************-->
                     <div class="col-md-6">
					 {if $LDList2 eq ""}
					<div class="form-group">
                      <label class="col-sm-3 control-label">Enquiry refer Id</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="enquiry_refference_id" name="enquiry_refference_id" value="{$smarty.post.enquiry_refference_id}" placeholder="Enquiry refference Id" tabindex="2" autocomplete="off">
                      </div>
                    </div>
					 <div class="form-group">
                      <label class="col-sm-3 control-label">Quote Status</label>
                      <div class="col-sm-5">
						<select id="quote_status" name="quote_status" class="form-control" tabindex="4" autocomplete="off" value="{$smarty.post.quote_status}">

					  <option value="" >----Select----</option>
					  <option value="Pending">Pending</option>
					  <option value="Quote Received">Quote Received</option>
					  <option value="Mail Sent">Mail Sent</option>
					  </select>
                      </div>
					  </div>
					  <div class="form-group">
                      <label class="col-sm-3 control-label">Supplier Code</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="supplier_code" name="supplier_code" value="{$smarty.post.supplier_code}" placeholder="Supplier Code" tabindex="6" autocomplete="off" readonly="true">
                      </div>
                    </div>

					<div class="form-group">
                      <label class="col-sm-3 control-label">Mobile No </label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="mobile_no" name="mobile_no" maxlength="10" value="{$smarty.post.mobile_no}" placeholder="Mobile No" tabindex="8" onKeyUp="numericFilter(this);clear_err_mobile(this.id);"  onBlur="chk_exist_mob(this);" autocomplete="off" readonly="true">
                      </div>
					  </div>
					  	<div class="form-group">
                      <label class="col-sm-3 control-label">Email Id</label>
                      <div class="col-sm-5">
                        <input type="email" class="form-control" id="email" name="email" value="{$smarty.post.email}" placeholder="Email Id" tabindex="12" onKeyUp="clear_err_email_id();" autocomplete="off" readonly="true">
                      </div>
					   </div>

					   <div class="form-group">
                      <label class="col-sm-3 control-label">Address1</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="address1" name="address1" value="{$smarty.post.address1}" placeholder="Address1" tabindex="14" autocomplete="off" readonly="true">
                      </div>
					  </div>
						 <div class="form-group">
                      <label class="col-sm-3 control-label">Landmark</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="landmark" name="landmark" value="{$smarty.post.landmarks}" placeholder="LandMark" tabindex="16" autocomplete="off" readonly="true">
                      </div>
					   </div>

      				  <div class="form-group" >
                      <label class="col-sm-3 control-label">Pincode</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="pincode" name="pincode" value="{$smarty.post.pincode}" placeholder="Pincode" tabindex="18" onBlur="chk_exist_pin(this)" maxlength="6" onKeyUp="numericFilter(this);" autocomplete="off" readonly="true">

                      </div>  </div>
					  {/if}
					  {if $LDList2 neq ""}
{foreach from=$LDList2 item=master_dtls}
					  	<div class="form-group">
                      <label class="col-sm-3 control-label">Enquiry refer Id</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="enquiry_refference_id" name="enquiry_refference_id" value="{$master_dtls.enquiry_reff_id}" placeholder="Enquiry refference Id" tabindex="2" autocomplete="off">
                      </div>
                    </div>
					 <div class="form-group">
                      <label class="col-sm-3 control-label">Quote Status</label>
                      <div class="col-sm-5">
						<select id="quote_status" name="quote_status" class="form-control" tabindex="4" autocomplete="off" value="{$master_dtls.quote_status}">
					  <option id"{$master_dtls.quote_status}" value="{$master_dtls.quote_status}" selected="selected">{$master_dtls.quote_status}</option>
					  <option value="" >----Select----</option>
					  <option value="Pending">Pending</option>
					  <option value="Quote Received">Quote Received</option>
					  <option value="Mail Sent">Mail Sent</option>
					  </select>
                      </div>
					  </div>
					  <div class="form-group">
                      <label class="col-sm-3 control-label">Supplier Code</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="supplier_code" name="supplier_code" value="{$master_dtls.supplier_code}" placeholder="Supplier Code" tabindex="6" autocomplete="off" readonly="true">
                      </div>
                    </div>

					<div class="form-group">
                      <label class="col-sm-3 control-label">Mobile No </label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="mobile_no" name="mobile_no" maxlength="10" value="{$master_dtls.mobile_no}" placeholder="Mobile No" tabindex="8" onKeyUp="numericFilter(this);clear_err_mobile(this.id);"  onBlur="chk_exist_mob(this);" autocomplete="off" readonly="true">
                      </div>
					  </div>
					  	<div class="form-group">
                      <label class="col-sm-3 control-label">Email Id</label>
                      <div class="col-sm-5">
                        <input type="email" class="form-control" id="email" name="email" value="{$master_dtls.email_id}" placeholder="Email Id" tabindex="12" onKeyUp="clear_err_email_id();" autocomplete="off" readonly="true">
                      </div>
					   </div>

					   <div class="form-group">
                      <label class="col-sm-3 control-label">Address1</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="address1" name="address1" value="{$master_dtls.address1}" placeholder="Address1" tabindex="14" autocomplete="off" readonly="true">
                      </div>
					  </div>
						 <div class="form-group">
                      <label class="col-sm-3 control-label">Landmark</label>
                      <div class="col-sm-5">
                        <input type="email" class="form-control" id="landmark" name="landmark" value="{$master_dtls.landmark}" placeholder="LandMark" tabindex="16" onKeyUp="clear_err_email_id();" autocomplete="off" readonly="true">
                      </div>
					   </div>

      				  <div class="form-group" >
                      <label class="col-sm-3 control-label">Pincode</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="pincode" name="pincode" value="{$master_dtls.pincode}" placeholder="Pincode" tabindex="18" onBlur="chk_exist_pin(this)" maxlength="6" onKeyUp="numericFilter(this);" autocomplete="off" readonly="true">
                      </div>  </div>
					  {/foreach}
					  {/if}

						  <div class="form-group" style="border-bottom: 1px solid #d6d2d2;margin-top:-3px;"></div>

					  <div class="form-group">
                      <label class="col-sm-3 control-label">Item Name</label>
                      <div class="col-sm-5">
                       <input type="text" class="form-control" id="product_desc" name="product_desc" placeholder="Product Desc" onClick="Check();" value="{$smarty.post.product_desc}" tabindex="20" onKeyUp="text_filter(this);">
						<input type="text" class="form-control" id="material_name" name="material_name" placeholder="Material Name" onClick="Check();" value="{$smarty.post.material_name}" tabindex="4" onKeyUp="text_filter(this);" style="display:none">
                      </div> </div>


					   <div class="form-group">
                      <label class="col-sm-3 control-label">Item Quantity</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="item_quantity" name="item_quantity" value="{$smarty.post.item_quantity}" placeholder="Item Quantity" tabindex="22" autocomplete="off" onKeyUp="numericFilter(this);">
                      </div> </div>

					<div class="form-group">
                      <label class="col-sm-3 control-label">Remarks</label>
                      <div class="col-sm-5">
                      <textarea class="form-control" id="remarks" name="remarks" value="{$smarty.post.remarks}" placeholder="Remarks" tabindex="24" autocomplete="off"></textarea>
                      </div>
                    </div>
					</div>
					</div>
					<div class="box-footer"><center>
					<input type="button" class="btn btn-info pull-center" value="ADD "  onClick="validate_fields();" >&nbsp;&nbsp;
                    <button type="submit" class="btn btn-info pull-center" onClick="GoBack();" >CANCEL</button></center>
                  </div>
                  </div> <!-- /.box-body -->
				  </form>

      <div class="control-sidebar-bg"></div>
    </div>
  </body>
</html>
