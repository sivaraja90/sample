{include file="left.tpl"}
{literal}
<script type="text/javascript" src='./dhtmlxMessage/codebase/dhtmlxmessage.js'></script>
	<script type='text/javascript' src='./auto-complete/jquery-1.3.2.js'></script>
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
			myCalendar = new dhtmlXCalendarObject({input: "price_date", button: "calendar_icon1"});
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


       function validate_fields()
        {
		var fields=["item_code","item_name","item_category","item_category_code","item_description","consumer_basic"];
				for(i=0;i<fields.length;i++)
				{
				//alert(fields[i]);
				current_iteration = document.getElementById(fields[i]).value;
				document.getElementById(fields[i]).style.borderColor="";
						if(current_iteration=="")
						{
						document.getElementById(fields[i]).focus();
						document.getElementById(fields[i]).style.borderColor="red";
						if(i==0)
						{
						var item_code  =  document.getElementById("item_code").value;
						if(item_code=="")
						{
						dhtmlx.alert({
								title: "Error !",
								type:"alert-error",
								text: "Please Enter Item Code",
											});
									return false;
						}
						}
						if(i==1)
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
						if(i==2)
						{
						var item_category  =  document.getElementById("item_category").value;
						if(item_category=="")
						{
						dhtmlx.alert({
								title: "Error !",
								type:"alert-error",
								text: "Please Enter category",
											});
									return false;
						}
						}
						if(i==3)
						{
						var item_category_code  =  document.getElementById("item_category_code").value;
						if(item_category_code=="")
						{
						dhtmlx.alert({
								title: "Error !",
								type:"alert-error",
								text: "Please Enter category Code",
											});
									return false;
						}
						}
						if(i==4)
						{
						var item_description  =  document.getElementById("item_description").value;
						if(item_description=="")
						{
						dhtmlx.alert({
								title: "Error !",
								type:"alert-error",
								text: "Please Enter Item description",
											});
									return false;
						}
						}
						if(i==5)
						{
						var consumer_basic  =  document.getElementById("consumer_basic").value;
						if(consumer_basic=="")
						{
						dhtmlx.alert({
								title: "Error !",
								type:"alert-error",
								text: "Please Enter Consumer Basic",
											});
									return false;
						}
						}
						/*if(i==6)
						{
						var baan_company  =  document.getElementById("baan_company").value;
						if(baan_company=="")
						{
						dhtmlx.alert({
								title: "Error !",
								type:"alert-error",
								text: "Please Enter Baan company",
											});
									return false;
						}
						}
						if(i==7)
						{
						var dimensions  =  document.getElementById("dimensions").value;
						if(dimensions=="")
						{
						dhtmlx.alert({
								title: "Error !",
								type:"alert-error",
								text: "Please Enter Dimensions",
											});
									return false;
						}
						}
						if(i==8)
						{
						var total  =  document.getElementById("total").value;
						if(total=="")
						{
						dhtmlx.alert({
								title: "Error !",
								type:"alert-error",
								text: "Please Enter Total",
											});
									return false;
						}
						}
                       if(i==9)
						{
						var ed  =  document.getElementById("ed").value;
						if(ed=="")
						{
						dhtmlx.alert({
								title: "Error !",
								type:"alert-error",
								text: "Please Enter ED",
											});
									return false;
						}
						}
                         if(i==10)
						{
						var wh  =  document.getElementById("wh").value;
						if(wh=="")
						{
						dhtmlx.alert({
								title: "Error !",
								type:"alert-error",
								text: "Please Enter WH",
											});
									return false;
						}
						}*/
						return false;
						}

				}
			  FormName	= document.edit_product;
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
  FormName.action ='customer_details_view.php?search_value='+str;
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
  FormName.action ='customer_details_view.php?search_value='+str;
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
		text: "You Can't Enter More Than 3 Mobile Number "});
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
			text: "Can't Enter More Than 2 Phone Number "});
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
			text: "You Can't Enter More Than 2 Mail Id "});
	  }
}
function GoBack()
{
window.history.back();
}
</script>
<script>
function image_hide(){
$('#allow').show();
$('#allow1').hide();
}
</script>

{/literal}
  <body class="hold-transition skin-blue sidebar-mini" onLoad="doOnLoad();">
    <div class="wrapper">
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
		<h4>
         <small><a href="product_list.php"><i class="fa fa-list"> <label style="font-family:Arial, Helvetica, sans-serif">
		 List Products</label></i></a></small>&ensp;&ensp;&ensp;
         <small class="active"><a href="product_reg.php"><i class="fa fa-user-plus"> <label style="font-family:Arial, Helvetica, sans-serif">
		 Create Product</label></i></a></small>
		 </h4>
        </section>

        <!-- Main content -->
        <section class="content">

          <!-- SELECT2 EXAMPLE -->
          <div class="box box-default">
            <div class="box-header with-border" align="center">
              <h3 class="box-title">Product Edit</h3>
              <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
              </div>
            </div><!-- /.box-header -->

			<form class="form-horizontal" name="edit_product" enctype="multipart/form-data" >
			<input type="hidden" name="hdAction" />



					<input type="hidden" id="mobile_fld_cnt" name="mobile_fld_cnt"  value="2"  >
					<input type="hidden" id="phone_fld_cnt" name="phone_fld_cnt"  value="2"  >
					<input type="hidden" id="email_fld_cnt" name="email_fld_cnt"  value="2"  >
					<input type="hidden" id="hdn_salutation" name="hdn_salutation" value="{$ListDet.salutaion}">
					<input type="hidden" id="hdn_order_status" name="hdn_order_status" value="{$ListDet.order_status}">
					<input type="hidden" id="hdn_customer_status" name="hdn_customer_status" value="{$ListDet.customer_status}">
					<input type="hidden" id="hdn_customer_type" name="hdn_customer_type" value="{$ListDet.customer_type}">
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
					{foreach from=$PageList item=ListDet}
                  <div class="box-body">
				   <div class="col-md-6">

                    <div class="form-group">
                      <label class="col-sm-3 control-label">Item Code</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="item_code" value="{$ListDet.item_code}" name="item_code" tabindex="1" placeholder="Item Code" readonly="true">
                      </div>
					  <!--&nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>-->
                    </div>
					<div class="form-group">
                      <label class="col-sm-3 control-label">Category</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="item_category" name="item_category" value="{$ListDet.item_category}" tabindex="3" placeholder="Item Category">
                      </div>
					  <!--&nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>-->
                    </div>
					<div class="form-group">
                      <label class="col-sm-3 control-label">Description</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="item_description" name="item_description" value="{$ListDet.item_description}" tabindex="5" placeholder="Item Description">
                      </div>
					  <!--&nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>-->
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Consumer Basic</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="consumer_basic" name="consumer_basic" value="{$ListDet.consumer_basic}" tabindex="7" placeholder="Consumer Basic">
                      </div>
					  <!--&nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>-->
                    </div>


					 <div class="form-group">
                      <label class="col-sm-3 control-label">Features</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="features" name="features" value="{$ListDet.features}" tabindex="9" placeholder="Features">
                      </div>
					  <!--&nbsp;&nbsp;<font class="error" color="#f56954">&nbsp;</font>-->
                    </div>
					 <div class="form-group">
                      <label class="col-sm-3 control-label">Dimensions</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="dimensions" name="dimensions" value="{$ListDet.dimensions}" tabindex="11" placeholder="Dimentions">
                      </div>
					  <!--&nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>-->
                    </div>

					 <div class="form-group">
                      <label class="col-sm-3 control-label">Total</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="total" name="total" value="{$ListDet.total}" tabindex="13" placeholder="Total" onKeyUp="numericFilter(this);">
                      </div>
					  <!--&nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>-->
                    </div>

					<div class="form-group">
                      <label class="col-sm-3 control-label">Remarks</label>
                      <div class="col-sm-5">
                        <textarea class="form-control" id="remarks" name="remarks" placeholder="Remarks" tabindex="15">{$ListDet.remarks}</textarea>
                      </div>
					  <!--&nbsp;&nbsp;<font class="error" color="#f56954">&nbsp;</font>-->
                    </div>
					</div>
					<!--**********************************************************-->
                     <div class="col-md-6">
					 <div class="form-group">
                      <label class="col-sm-3 control-label">Item Name</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="item_name" name="item_name" value="{$ListDet.item_name}" tabindex="2" placeholder="Item Name">
                      </div>
					 <!-- &nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>-->
                    </div>

					<div class="form-group">
                      <label class="col-sm-3 control-label">Category code</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="item_category_code" value="{$ListDet.item_category_code}" tabindex="4" name="item_category_code" placeholder="Item category code">
                      </div>
					  <!--&nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>-->
                    </div>
					<div class="form-group">
                      <label class="col-sm-3 control-label">Color</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="item_color" name="item_color" value="{$ListDet.item_color}" tabindex="6" placeholder="Item Color">
                      </div>
					  <!--&nbsp;&nbsp;<font class="error" color="#f56954">&nbsp;</font>-->
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Baan Company</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="baan_company" name="baan_company" value="{$ListDet.baan_company}" tabindex="8" placeholder="Baan Company">
                      </div>
					 <!-- &nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>-->
                    </div>
					<div class="form-group">
                      <label class="col-sm-3 control-label">Image</label>
                      <div class="col-sm-5" id="allow" style="display:none;">
						 <input type="file" id="image" value="{$smarty.post.image}" name="image" tabindex="12" autocomplete="off"></div>
						 <div class="col-sm-5" id="allow1">
						 <input type="text" id="image1" value="{$ListDet.image}" name="image1" tabindex="12" autocomplete="off" size="18" readonly="true">&nbsp;&nbsp;<div class="fa fa-pencil-square-o" id="" onClick="image_hide();"> </div>
                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-3 control-label">PKG</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="pkg" name="pkg" value="{$ListDet.pkg}" tabindex="12" placeholder="123" onKeyUp="numericFilter(this);">
                      </div>
					  <!--&nbsp;&nbsp;<font class="error" color="#f56954">&nbsp;</font>-->
                    </div>
					<div class="form-group">
                      <label class="col-sm-3 control-label">Price Date</label>
                     <div class="col-sm-5">
                        <input type="text" class="form-control" id="price_date" name="price_date"  value="{$ListDet.price_date}" placeholder="Date" tabindex="14" onClick="doOnLoad();"  readonly="true">
                      </div>
					 <!-- &nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>-->
					  <a href="#"><img id="calendar_icon1" src="codebase/calendar.png"></a>
                    </div>
					 <div class="form-group">
                      <label class="col-sm-3 control-label">ED</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="ed" value="{$ListDet.ed}" name="ed" tabindex="16" placeholder="ED" onKeyUp="numericFilter(this);">
						<input type="hidden" class="form-control" id="timestamp" name="timestamp" value="{$smarty.now|date_format:'%Y-%m-%d &amp; %I:%M:%S %p'}">

                      </div>
					 <!-- &nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>-->
                    </div>
					  <div class="form-group">
                      <label class="col-sm-3 control-label">Wh</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="wh" value="{$ListDet.ware_house}" name="wh" tabindex="18" placeholder="Wh">
						<input type="hidden" class="form-control" id="created_by"  name="created_by" placeholder="Created By" value="{$ListDet.created_by}"  readonly="true" >
                      </div>
					  <!--&nbsp;&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font>-->
                    </div>
					</div>
                    </div>
					{/foreach}
					<br/>
					<div class="box-footer"><center>
                    <!--<button type="submit" class="btn btn-info pull-center" onClick="validate_fields();">ADD CUSTOMER</button>-->
					<input type="button" class="btn btn-info pull-center" value="UPDATE"  onClick="validate_fields();" >&nbsp;&nbsp;
                    <button type="submit" class="btn btn-info pull-center" onClick="GoBack();" >CANCEL</button></center>
                  </div>
                  </div>
				  </section><!-- /.box-body -->
                  <!-- /.box-footer -->
                </form>

      <div class="control-sidebar-bg"></div>
    </div>
	</div>
  </body>
</html>
