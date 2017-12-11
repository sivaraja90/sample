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
function doOnLoad() 
			{
			
			var myCalendar;
			var myCalendar1;
			var myCalendar2;
			var myCalendar3;
			var enq;
			 var enc = document.getElementById("alternate").value;
			var dec = atob(enc);
			var mec = dec ;
			 document.getElementById("enquiry_id").value= mec;
			myCalendar = new dhtmlXCalendarObject({input: "date_of", button: "calendar_icon"});
			myCalendar1 = new dhtmlXCalendarObject({input: "snooze_date", button: "calendar_icon1"});
			myCalendar2 = new dhtmlXCalendarObject({input: "closed_date", button: "calendar_icon2"});
			myCalendar3 = new dhtmlXCalendarObject({input: "po_date", button: "calendar_icon3"});
			myCalendar4 = new dhtmlXCalendarObject({input: "closed_date4", button: "calendar_icon4"});
		}

</script>
<script>
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
		var res=document.getElementById("enquiry_status").value;
  if(res == "Open"  ) {
		var fields=["enquiry_status","open_status","snooze_date","created_by","created_date"];
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
			  FormName		= document.add_address;
  			  FormName.method	= "POST";
              FormName.submit();
		}
		else if(res == "Loss" )
		{
		
		var fields=["enquiry_status","open_status","closed_date4","created_by","created_date","created_time"];
				for(i=0;i<fields.length;i++)
				{
				//alert(fields[i]);
				current_iteration = document.getElementById(fields[i]).value;   
				document.getElementById(fields[i]).style.borderColor="";
						if(current_iteration=="")
						{
				    // alert("Please Fill! "+fields[i]);
						document.getElementById(fields[i]).focus();
						document.getElementById(fields[i]).style.borderColor="red";
						return false;
						}
											
						

				}
			  FormName		= document.add_address;
  			  FormName.method	= "POST";
              FormName.submit();
		
		}
		else{
		var fields=["enquiry_status","open_status","closed_date","service_tax_no","cst_no","tin_no","created_by","created_date","created_time"];
				for(i=0;i<fields.length;i++)
				{
				//alert(fields[i]);
				current_iteration = document.getElementById(fields[i]).value;   
				document.getElementById(fields[i]).style.borderColor="";
						if(current_iteration=="")
						{
				    // alert("Please Fill! "+fields[i]);
						document.getElementById(fields[i]).focus();
						document.getElementById(fields[i]).style.borderColor="red";
						return false;
						}
											
				}
			  FormName		= document.add_address;
  			  FormName.method	= "POST";
              FormName.submit();
		}
		}
function EnqStat()
{
var status = document.getElementById("enquiry_status").value;
var enq_stat = document.getElementById("en_sat_type").value;
alert(enq_stat);
if(status == "Won" && enq_stat=="")
{
				dhtmlx.alert({
								title: "Error !",
								type:"alert-error",
								text: "Please Add Quote!!",	
								
											});		
											
										
										window.parent.location.href = "./enquiry_detail_view.php?enquiry_id="+document.getElementById("alternate").value;
								}	 
								
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


 
function enquiryStatus(){ 
alert("hai");
var res=document.getElementById("enquiry_status").value;
  if(res == "Open") {
    $('#opn_status').show();
    $('#snzDate').show();
	
    $('#closedDate').hide();
	$('#PoNo').hide();
	$('#servicetx').hide();
	$('#tinno').hide();
	 
	}
  if(res == "Loss") {
     $('#opn_status').hide();
    $('#closedDate').show();
    $('#snzDate').hide();
	$('#PoNo').hide();
	$('#servicetx').hide();
	$('#tinno').hide();

	
	
	}
  if(res == "Won") {
    $('#opn_status').hide();
    $('#closedDate').hide();
	$('#PoNo').show();
    $('#servicetx').show();
	$('#tinno').show();
    $('#snzDate').hide();
	
	}
   
}

</script>

{/literal}

		<form class="form-horizontal" name="add_address"><body onLoad="doOnLoad();">
		
			<input type="hidden" name="hdAction" />
			<input type="hidden" id="en_sat_type" name="en_sat_type"  value="{$EnqStat.[0].enquiry_id}">
			{foreach from=$ListView3 item=View}
			<input type="hidden" id="customer_id" name="customer_id"  value="{$View.customer_id}">
			<input type="hidden" id="requirement" name="requirement"  value="{$View.requirement}">											
 			<input type="hidden" id="company_name" name="company_name" value="{$View.company_name}">
			<input type="hidden" id="company_code" name="company_code" value="{$View.company_code}">
			<input type="hidden" id="arka_group" name="arka_group" value="{$View.arka_group}">
			<input type="hidden" id="salutation" name="salutation" value="{$View.salutation}">
			<input type="hidden" id="customer_name" name="customer_name" value="{$View.customer_name}">
			<!--<input type="hidden" id="enquiry_status" name="enquiry_status" value="{$View.enquiry_status}">-->
			<input type="hidden" id="enquiry_type" name="enquiry_type" value="{$View.enquiry_type}">
			<input type="hidden" id="enquiry_through" name="enquiry_through" value="{$View.enquiry_through}">
			<input type="hidden" id="address" name="address" value="{$View.address}">
            <input type="hidden" id="address1" name="address1" value="{$View.address1}">
			<input type="hidden" id="landmark" name="landmark" value="{$View.landmark}">
			<input type="hidden" id="area" name="area" value="{$View.area}">
			<input type="hidden" id="city" name="city" value="{$View.city}">
			<input type="hidden" id="pincode" name="pincode" value="{$View.pincode}">
			<input type="hidden" id="mobile_no" name="mobile_no" value="{$View.mobile_no}">
			<input type="hidden" id="area_code" name="area_code" value="{$View.area_code}">
			<input type="hidden" id="phone_no" name="phone_no" value="{$View.phone_no}">
			<input type="hidden" id="assign_to" name="assign_to" value="{$View.assign_to}">
			<input type="hidden" id="reassign" name="reassign" value="{$View.reassign}">
			<input type="hidden" id="extension" name="extension" value="{$View.extension}">
			<input type="hidden" id="email_id" name="email_id" value="{$View.email_id}">
		    <input type="hidden" id="designation" name="designation" value="{$View.designation}">
						{/foreach}
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
					
<table class="col-md-6" >
<tr class="form-group">
	<td class="col-sm-3">
		
		<tr class="form-group">	
				<th class="col-sm-2 control-th">Enquiry ID</th>
						<td class="col-sm-5">
						<input type="hidden" class="form-control" id="alternate" name="alternate" value="{$smarty.get.enquiry_id}">
						<input type="text" class="form-control" id="enquiry_id" name="enquiry_id" value="" tabindex="1" readonly="true">
						</td>
						<td class="col-sm-5"></td>
				<th class="col-sm-2 control-th"> Enquiry Status</th>
						<td class="col-sm-5" >
						<select id="enquiry_status" name="enquiry_status" class="form-control"  value="{$smarty.post.enquiry_status}" tabindex="2" onChange="enquiryStatus();EnqStat();">
						<option>----Select-----</option>
						<option value="Open" >Open</option>
						<option value="Won" >Won</option>
						<option value="Loss" >Loss</option>
						</select>
						</td><td></td>
			  </tr>
			  <tr class="form-group" id="opn_status" style="display:none" >
		      <th class="col-sm-2 control-th" >Open Status</th>
						<td class="col-sm-5" >
       <select id="open_status" name="open_status" class="form-control" tabindex="16" value="{$Edit.open_status}" >
						<option id"{$Edit.open_status}" value="{$Edit.open_status}" selected="selected">{$Edit.open_status}</option>
						<option value="0">----Select-----</option>
						<option value="Hot" >Hot</option>
						<option value="Warm" >Warm</option>
						<option value="Cold" >Cold</option>
						<option value="Defered" >Defered</option>
						</select>					
						
					
						</td>
		                 </tr>
				
		    <tr class="form-group" id="PoNo" style="display:none" >
		      <th class="col-sm-2 control-th" >PO Date</th>
						<td class="col-sm-5" >
       <input type="text" class="form-control" id="po_date" name="po_date" placeholder="Po Date"  onClick="doOnLoad();" value="{$smarty.post.po_date}" tabindex="3" readonly="true" autocomplete="Off">					
						<td><a href="#"><img id="calendar_icon3" src="codebase/calendar.png"></a></td>
						</td>
						<th class="col-sm-2 control-th" >PO No</th>
						<td class="col-sm-5" >
						 <input type="text" class="form-control" id="po_no" name="po_no" placeholder="Po No" value="{$smarty.post.po_no}" tabindex="4" onClick="doOnLoad();" value="HH-MM-SS" tabindex="11" autocomplete="Off">
						<td></td>
						</td>
		                 </tr> 
		  
		  <tr class="form-group" id="servicetx" style="display:none" >
						<th class="col-sm-2 control-th" >Service Tax No</th>
						<td class="col-sm-5" >
	     <input type="text" class="form-control" id="service_tax_no" name="service_tax_no" placeholder="Service Tax No" value="{$smarty.post.service_tax_no}" autocomplete="Off" tabindex="5">					
						<td></td>
						</td>
						<th class="col-sm-2 control-th" >CST</th>
						<td class="col-sm-5" >
		<input type="text" class="form-control" id="cst_no" name="cst_no" placeholder="CST No" tabindex="6" value="{$smarty.post.cst_no}" autocomplete="Off">
						<td></td></td>
		              </tr>
		    
		  <tr class="form-group" id="tinno" style="display:none" >
						<th class="col-sm-2 control-th" >Tin No</th>
						<td class="col-sm-5" >
		<input type="text" class="form-control" id="tin_no" name="tin_no" placeholder="Tin No" value="{$smarty.post.tin_no}" autocomplete="Off" tabindex="7" autocomplete="Off"><td></td></td>
						<th class="col-sm-2 control-th" >Closed Date</th>
						<td class="col-sm-5" >
						<input type="text" class="form-control" id="closed_date" name="closed_date" placeholder="Closed Date"  onClick="doOnLoad();" value="{$smarty.post.closed_date}" readonly="true" tabindex="8" autocomplete="Off">					
						<td><a href="#"><img id="calendar_icon2" src="codebase/calendar.png"></a></td>
						</td>
		      </tr>  
			  
		   <tr class="form-group">
					<th class="col-sm-2 control-th">Created By</th>
						<td class="col-sm-5">
						<input type="text" class="form-control" id="created_by" name="created_by" placeholder=" created by" tabindex="9" onKeyUp="text_filter(this);" value="{$smarty.session.UserName}" readonly="true">
						<td></td>
						</td>
						<input type="hidden" class="form-control" id="timestamp" name="timestamp" value="{$smarty.now|date_format:'%Y-%m-%d &amp; %I:%M:%S %p'}">
						<input type="hidden" class="form-control" id="created_date" name="created_date" value="{$smarty.now|date_format:'%Y-%m-%d'}">
						<input type="hidden" class="form-control" id="created_time" name="created_time" value="{$smarty.now|date_format:'%I:%M:%S %p'}">
					<th class="col-sm-2 control-th">Remarks</th>
						<td class="col-sm-5">
					 <textarea class="form-control" id="remarks" name="remarks" value="{$smarty.post.remarks}" placeholder="Remarks" tabindex="10" autocomplete="off" value="{$smarty.post.remarks}"></textarea> 
						</td>
		            </tr>
					 
	 			<tr class="form-group" id="closedDate" style="display:none" >
					<th class="col-sm-2 control-th" >Closed Date</th>
						<td class="col-sm-5" >
						<input type="text" class="form-control" id="closed_date4" name="closed_date4" placeholder="Closed Date"  onClick="doOnLoad();" value="{$smarty.post.closed_date}" readonly="true" autocomplete="Off">					
						<td><a href="#"><img id="calendar_icon4" src="codebase/calendar.png"></a></td></td>
		      </tr>
		  
				<tr class="form-group" id="snzDate" style="display:none">
				<th class="col-sm-2 control-th" >Last Touch Point</th>
					<td class="col-sm-5" >
		<input type="text" class="form-control" id="snooze_date" name="snooze_date" placeholder="Last Touch Point " tabindex="9" value="{$smarty.post.snooze_date}" readonly="true" autocomplete="Off">
					<td><a href="#"><img id="calendar_icon1" src="codebase/calendar.png"></a></td>
					</td>
		       </tr>
	</td>
	</tr>
</table>
					</body>
					</form>
					<div class="box-footer">
					<center>
					<input type="button" class="btn btn-info pull-center" value="Submit" onClick="validate_fields();">&nbsp;&nbsp;
					</center> 
                  </div>
