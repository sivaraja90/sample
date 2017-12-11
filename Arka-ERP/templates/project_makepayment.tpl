{$IncludeCSS}
{$IncludeJS}
{literal}
<script type="text/javascript" src='./dhtmlxMessage/codebase/dhtmlxmessage.js'></script>
	<script type='text/javascript' src='./auto-complete/jquery-1.3.2.js'></script>
	<script type='text/javascript' src='./auto-complete/jquery.metadata.js'></script>
	<script type='text/javascript' src='./auto-complete/jquery.auto-complete.js?<?= mktime() ?>'></script>
	<script type='text/javascript' src='./auto-complete/js.js?<?= mktime() ?>'></script>
	<link rel="stylesheet" href= "./codebase/skins/dhtmlxmessage_dhx_skyblue.css" type="text/css" media="all"/> 
	<link rel='stylesheet' type='text/css' href='auto-complete/jquery.auto-complete.css?<?= mktime() ?>' />
	<link rel="stylesheet" href="'https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />
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
    border-collapse:collapse;
	
}
td
{ padding:10px;

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
function Fill_Name_of_Clr()
{
var invoice_no= document.getElementById("invoice_no").value;
//var area= document.getElementById("area").value;
var cnt_dtl_ary="";
//var customer_name =document.getElementById("").value
if (invoice_no=="")
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
	//if(xmlhttp.responseText.indexOf("|$|")!=-1)
        if(xmlhttp.responseText)
	   {	

 // 	x ="<option>--Select Customer Name--</option>"
	x= x + xmlhttp.responseText;
	//alert(x);
//	document.getElementById("customer_name").innerHTML=x;
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
/*			document.getElementById("invoice_amount").value=split_id[1];
			document.getElementById("pending_amount").value=split_id[2];*/
			if(split_id[1] == split_id[3])
			{
			document.getElementById("invoice_amount").value=split_id[1];
			document.getElementById("pending_amount").value=split_id[2];
			document.getElementById("pen_amount").value=split_id[2];
			document.getElementById("PA_amount").value=split_id[3];
			}
     else if ( split_id[3]==0)
	 {
         document.getElementById("invoice_amount").value=split_id[1];
			document.getElementById("pending_amount").value=split_id[1];
			document.getElementById("pen_amount").value=split_id[1];
			document.getElementById("PA_amount").value=split_id[3];

}	else{
document.getElementById("invoice_amount").value=split_id[1];
			document.getElementById("pending_amount").value=split_id[2];
			document.getElementById("pen_amount").value=split_id[2];
			document.getElementById("PA_amount").value=split_id[3];
	   }
	   }
	 else 
	   {
	   document.getElementById("customer_name").innerHTML="<option value='0'>Please select Company Name</option>";	   
	   }  
       
    }
  }
xmlhttp.open("GET","ajax_invoice.php?invoice_no="+invoice_no,true);
xmlhttp.send();
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
	var res=document.getElementById("invoice_no").value;
		var fields=["invoice_no","invoice_amount","paid_amount","payment_mode"];
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
											
				}
			  FormName		= document.make_payment;
  			  FormName.method	= "POST";
              FormName.submit();
		}

$(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false
        });
      });

</script>
<script>
function payment_modechange(){
var res=document.getElementById("payment_mode").value;
  if(res == "Cash") {
    $('#disp').hide();
	}
	else{
	$('#disp').show();
	}
	}
</script>
<script>
function status_change(){
var res2=document.getElementById("pending_amount").value;
var res3=document.getElementById("status1").value;
var res4=document.getElementById("status2").value;
if(res2 == "0"){
document.getElementById('payment_status').value=res3;
}else
{
document.getElementById('payment_status').value=res4;
}
}
</script>
<script>
function calc()
{
var amount_paid = document.getElementById('paid_amount').value;
var amount_invoice = document.getElementById('invoice_amount').value;
var amount_pa = document.getElementById('PA_amount').value;
if(amount_pa == "0"){
var cost = (+amount_invoice - +amount_paid);
document.getElementById('pending_amount').value=cost;
}
	else{
	var amount_paid = document.getElementById('paid_amount').value;
	var amount_pen=document.getElementById('pen_amount').value;
	var cost2 = (+amount_pen - +amount_paid);
document.getElementById('pending_amount').value=cost2;
}
	}
	</script>
	{/literal}
		<body>
		<form class="form-horizontal" name="make_payment">
			<input type="hidden" name="hdAction" />
			<input type="hidden" id="customer_id" name="customer_id"  value="{$smarty.get.customer_id}"  >
					<input type="hidden" id="mobile_fld_cnt" name="mobile_fld_cnt"  value="2"  >
					<input type="hidden" id="phone_fld_cnt" name="phone_fld_cnt"  value="2"  >
					<input type="hidden" id="email_fld_cnt" name="email_fld_cnt"  value="2"  >
					<input type="hidden" id="hdn_cnt_dtls" name="hdn_cnt_dtls" value="">
					<input type="hidden" id="hdn_salutation" name="hdn_salutation" value="{$smarty.post.salutaion}">
					<input type="hidden" id="hdn_order_status" name="hdn_order_status" value="{$smarty.post.order_status}">
					<input type="hidden" id="hdn_customer_status" name="hdn_customer_status" value="{$smarty.post.customer_status}">
					<input type="hidden" id="hdn_customer_type" name="hdn_customer_type" value="{$smarty.post.customer_type}">
					
					{foreach from=$AddressView item=View}
			<input type="hidden" id="customer_id" name="customer_id"  value="{$View.customer_id}">
			<input type="hidden" id="enquiry_id" name="enquiry_id" value="{$View.enquiry_id}">
				<input type="hidden" id="project_quote_no" name="project_quote_no" value="{$View.project_quote_no}">	
				<input type="hidden" id="quote_date" name="quote_date" value="{$View.quote_date}">
					<input type="hidden" id="project_order_no" name="project_order_no" value="{$View.project_order_no}">
						<input type="hidden" id="project_order_date" name="project_order_date" value="{$View.project_order_date}">
						<input type="hidden" id="po_no" name="po_no" value="{$View.po_no}">
						<input type="hidden" id="po_date" name="po_date" value="{$View.po_date}">
						<input type="hidden"  id="revise_version" name="revise_version" value="{$View.revise_version}" >
 	
			
						{/foreach}
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
					
<table class="col-md-6" >
<tr class="form-group">
	<td class="col-sm-3">
		<tr class="form-group">	
				<th class="col-sm-2 control-th" >Invoice No</th>
						<td class="col-sm-2">
						<input type="hidden" value="" id="PA_amount">
			<select id="invoice_no" name="invoice_no" class="form-control"  value="{$smarty.post.invoice_no}" tabindex="1" onChange="Fill_Name_of_Clr();">
						<option>----Select-----</option>
						{foreach from=$invoice1 item=No}
						<option value="{$No.invoice_no}" >{$No.invoice_no}</option>
						{/foreach}
						</select>
						</td>
						<td class="col-sm-5">
						</td>
						
				<th class="col-sm-2 control-th" >Invoice Amount</th>
						<td class="col-sm-5" >
						<input type="text" class="form-control" id="invoice_amount" name="invoice_amount" placeholder="Invoice Amount" tabindex="2" value="{$smarty.post.invoice_amount}" readonly="true">
						</td>
						{foreach from=$invoice1 item=No}
						<input type="hidden" id="calculation" value="{$No.invoice_amount}">
						{/foreach} 
						<input type="hidden" class="form-control" id="enquiry_type" name="enquiry_type" value="{$EnqTypView.0.enquiry_type}" readonly="true">
						</tr>
		  
			<tr class="form-group">
					<th class="col-sm-2 control-th" >Pending Amount</th>
						<td class="col-sm-5" >
						<input type="text" class="form-control" id="pending_amount" name="pending_amount" placeholder="Pending Amount" tabindex="3" value="{$smarty.post.pending_amount}" readonly="true">
						<input type="hidden" value="" id="pen_amount">
						</td>
				    <td class="col-sm-5">
						</td>
					<th class="col-sm-2 control-th" >Paid Amount</th>
						<td class="col-sm-2">
						<input type="text" class="form-control" id="paid_amount" name="paid_amount" placeholder="Paid Amount" value="{$smarty.post.paid_amount}" tabindex="4" onKeyUp="calc();status_change();numericFilter(this);" autocomplete="Off">
						 </td>
		  </tr>
		   
		  <tr class="form-group">
		  <th class="col-sm-2 control-th">Payment Status</th>
						<td class="col-sm-5">
					 <input type="text" class="form-control" id="payment_status"  name="payment_status" value="Pending" tabindex="5" autocomplete="off" readonly="true"> 
					 <input type="hidden" id="status1" value="Paid">
					 <input type="hidden" id="status2" value="Pending">
						</td>
						 <td class="col-sm-5">
						</td>
						<th class="col-sm-2 control-th" >Payment Mode</th>
						<td class="col-sm-2">
						<select id="payment_mode" name="payment_mode" class="form-control"  value="{$smarty.post.payment_mode}" tabindex="6" onChange="payment_modechange();">
						<option>----Select-----</option>
						<option value="Cash">Cash</option>
						<option value="Cheque">Cheque</option>
						<option value="NEFT/RTGS">NEFT/RTGS</option>
						</select>
						 </td>
		                 </tr>
		    <tr class="form-group" id="disp" style="display:none;">
		  <th class="col-sm-2 control-th">Payment Reference</th>
						<td class="col-sm-5">
					 <input type="text" class="form-control" id="payment_ref"  name="payment_ref" placeholder="Payment Ref" value="{$smarty.post.payment_mode}" tabindex="7" autocomplete="off"></textarea> 
						</td>
						 <td class="col-sm-5">
						</td>
						<input type="hidden" class="form-control" id="timestamp" name="timestamp" value="{$smarty.now|date_format:'%Y-%m-%d &amp; %I:%M:%S %p'}">
						<input type="hidden" class="form-control" id="created_date" name="created_date" value="{$smarty.now|date_format:'%Y-%m-%d'}">
						<input type="hidden" class="form-control" id="created_time" name="created_time" value="{$smarty.now|date_format:'%I:%M:%S %p'}">
					    <input type="hidden" class="form-control" id="created_by" name="created_by" value="{$smarty.session.UserName}">
		    </tr> 
	</td>
	</tr>
</table>
					</form>
					</body>
					<div class="box-footer">
					<center>
					<input type="button" class="btn btn-info pull-center" value="Submit"  onClick="validate_fields();">&nbsp;&nbsp;
					</center> 
                  </div>
				  