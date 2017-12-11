<?php /* Smarty version 2.6.25, created on 2016-02-09 17:38:29
         compiled from followup1.tpl */ ?>
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
function GoBack()
{
window.history.back();
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
function doOnLoad() 
			{
			var myCalendar;
			var myCalendar1;
			var myCalendar2;
			myCalendar = new dhtmlXCalendarObject({input: "date_of", button: "calendar_icon"});
			myCalendar1 = new dhtmlXCalendarObject({input: "snooze_date", button: "calendar_icon1"});
			myCalendar2 = new dhtmlXCalendarObject({input: "closed_date", button: "calendar_icon2"});
			myCalendar3 = new dhtmlXCalendarObject({input: "created_date", button: "calendar_icon3"});
			retrieve_select_bxs();
			
		}
/*function runMe()
{
 document.cookie = name+"=index%3d1; expires=whenever;path=/";
 window.history.back()
}*/	
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
		
		var fields=["enquiry_id","enquiry_status","created_by","created_date","remarks"];
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
											
						/*if(i==20)
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
						}*/

				}
			  FormName		= document.add_address;
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
  FormName.action =\'customer_details_view.php?search_value=\'+str;          
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
		// document.getElementById("hdn_email"+cnt_email).removeAttribute("style");
		// document.getElementById("hdn_email"+cnt_email+"_adjacent").removeAttribute("style");
	  }
	  else
		{
			dhtmlx.alert({
			title: "Email Id",
			type:"alert-error",
			text: "You Can\'t Enter More Than 2 Mail Id "});
	  }
}
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


 
function enquiryStatus(){
alert("hiiiii");
var res=document.getElementById("enquiry_status").value;
  if(res == "Pending") {alert("this.value");
   
    $(\'#snzDate\').show();
	
    $(\'#closedDate\').hide();
	 
	}
  if(res == "Closed With Out Order") {
     
    $(\'#closedDate\').show();
	 
    $(\'#snzDate\').hide();
	
	}
   if(res == "Not Intrested") {
   
    $(\'#snzDate\').show();
	
  
    $(\'#closedDate\').hide();
	 
	}
	  if(res == "Closed With Order") {
   
    $(\'#closedDate\').show();
	
    $(\'#snzDate\').hide();
	
	}
   
}
</script>

'; ?>


		<form class="form-horizontal" name="add_address"><body onLoad="doOnLoad();">
			<input type="hidden" name="hdAction" />
			<input type="hidden" id="customer_id" name="customer_id"  value="<?php echo $this->_supers['get']['customer_id']; ?>
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
					
<table class="col-md-6" >
<tr class="form-group">
	<td class="col-sm-3">
		<tr class="form-group">	
				<th class="col-sm-2 control-th">Enquiry ID</th>
						<td class="col-sm-5">
						<input type="text" class="form-control" id="enquiry_id" name="enquiry_id" value="<?php echo $this->_tpl_vars['enq_id']; ?>
" placeholder="Enquriy ID"  tabindex="1"/>
						</td>
						<td class="col-sm-5">
						<font class="error" color="#f56954"><b>*</b>&nbsp;</font>
						</td>
						
				<th class="col-sm-2 control-th"> Enquiry Status</th>
						<td class="col-sm-5" >
						<!--<input type="text" class="form-control" id="enquriy_status" name="enquriy_status" placeholder="Enquriy Status " tabindex="2"/>-->
						<select id="enquiry_status" name="enquiry_status" class="form-control"  value="<?php echo $this->_supers['post']['enquiry_status']; ?>
" tabindex="2" onChange="enquiryStatus();">
						<option>----Select-----</option>
						<option value="Pending">Pending</option>
						<option value="Closed With Out Order">Closed With Out Order</option>
						<option value="Closed With Order">Closed With Order</option>
						<option value="Not Intrested">Not Intrested</option>
						</select>
						</td>
			</tr>
				
						<tr class="form-group" id="snzDate" style="display:none">
					<th class="col-sm-2 control-th" >Snooze Date</th>
						<td class="col-sm-5" >
						<input type="text" class="form-control" id="snooze_date" name="snooze_date" placeholder="snooze date " tabindex="9" >
						<td >&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font><a href="#"><img id="calendar_icon1" src="codebase/calendar.png"></a></td>
						</td>
				
					<th class="col-sm-2 control-th" >Snooze Time</th>
						<td class="col-sm-5">
						<input type="text" class="form-control" id="snooze_time" name="snooze_time" placeholder="snooze_time" tabindex="9" onClick="doOnLoad();" value="">
						<td >&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font></td>
						</td>
		  </tr>
		         <tr class="form-group" id="closedDate" style="display:none" >
					<th class="col-sm-2 control-th" >Closed Date</th>
						<td class="col-sm-5" >
						<input type="text" class="form-control" id="closed_date" name="closed_date" placeholder="closed date" tabindex="9" >
						<td >&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font><a href="#"><img id="calendar_icon2" src="codebase/calendar.png"></a></td>
						</td>
				
					<th class="col-sm-2 control-th" >Closed Time</th>
						<td class="col-sm-5" >
						<input type="text" class="form-control" id="closed_time" name="closed_time" placeholder="closed time"  onClick="doOnLoad();" value="">
						<td >&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font></td>
						</td>
		  </tr>  
		   
		   <tr class="form-group">
					<th class="col-sm-2 control-th">Created By</th>
						<td class="col-sm-5">
						<input type="text" class="form-control" id="created_by" name="created_by" placeholder=" created by" tabindex="9" onKeyUp="text_filter(this);">
						<td>&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font></td>
						</td>
					<th class="col-sm-2 control-th">Created Date</th>
						<td class="col-sm-5">
						<input type="text" class="form-control" id="created_date" name="created_date" placeholder="created date" tabindex="9" onKeyUp="text_filter(this);">
						<td>&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font><a href="#"><img id="calendar_icon3" src="codebase/calendar.png"></a></td>
						</td>
						</tr>
		  <tr class="form-group">
					<!--<th class="col-sm-2 control-th">Timestamp</th>
						<td class="col-sm-5">
						<input type="text" class="form-control" id="timestamp_value" name="timestamp_value" tabindex="9" onKeyUp="text_filter(this);">
						<td>&nbsp;<font class="error" color="#f56954"><b>*</b>&nbsp;</font></td>
						</td>-->
				
					<th class="col-sm-2 control-th">Remarks</th>
						<td class="col-sm-5">
					 <textarea class="form-control" id="remarks" name="remarks" value="<?php echo $this->_supers['post']['remarks']; ?>
" placeholder="Remarks" tabindex="26" autocomplete="off"></textarea> 
						</td>
		    </tr> 
		 
				
		   
	</td>
	</tr>
</table>
					</body>
					</form>
					<div class="box-footer">
					<center>
                    <!--<button type="submit" class="btn btn-info pull-center" onClick="validate_fields();">ADD CUSTOMER</button>-->
					<input type="button" class="btn btn-info pull-center" value="ADD"  onClick="validate_fields();">&nbsp;&nbsp;
                    <input type="button" class="btn btn-info pull-center" value="CANCEL"  data-dismiss="modal">&nbsp;&nbsp;
					</center>
                  </div>
				  <div class="nav-tabs-custom">
				<div class="tab-content">
                  <!-- Font Awesome Icons -->
                  <div class="tab-pane active" id="follow">
                    <form name="FollowList" id="FollowList" method="post">
                  <table id="example1" class="table table-bordered table-striped" style="font-size:13px; font-family:'Times New Roman', Times, serif;">
									 
                    <thead>
                      <tr>
                        <th ><center>Customer Id</center></th>
                        <th ><center> Name</center></th>
						<th ><center>Mobile No</center></th>
                        <th ><center>Created By</center></th>
                        <th ><center>Designation</center></th>
						<th ><center>Email Id</center></th>
						<th ><center>Created Date &amp;Time</center></th>
						<th ><center>Action</center></th>
						
                      </tr>

                    </thead>
                    <tbody>	
					<?php $_from = $this->_tpl_vars['ListView2']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['Contact']):
?>
					
					<tr>
								<input type="hidden" value="<?php echo $this->_tpl_vars['Contact']['sl_no']; ?>
" />
								<input type="hidden" value="<?php echo $this->_tpl_vars['Contact']['customer_id']; ?>
" />
								<td align="center"><a href="#" onClick="Javascript:viewCats('<?php echo $this->_tpl_vars['Contact']['customer_id']; ?>
')"><?php echo $this->_tpl_vars['Contact']['customer_id']; ?>
</a></td>
								<td align="center"><a href="#" onClick="Javascript:viewCats('<?php echo $this->_tpl_vars['Contact']['customer_id']; ?>
')"><?php echo $this->_tpl_vars['Contact']['customer_name']; ?>
</a></td>
								<td align="center"><a href="#" onClick="Javascript:viewCats('<?php echo $this->_tpl_vars['Contact']['customer_id']; ?>
')"><?php echo $this->_tpl_vars['Contact']['mobile_no']; ?>
</a></td>
								<td align="center"><a href="#" onClick="Javascript:viewCats('<?php echo $this->_tpl_vars['Contact']['customer_id']; ?>
')"><?php echo $this->_tpl_vars['Contact']['created_by']; ?>
</a></td>
								<td align="center"><a href="#" onClick="Javascript:viewCats('<?php echo $this->_tpl_vars['Contact']['customer_id']; ?>
')"><?php echo $this->_tpl_vars['Contact']['designation']; ?>
</a></td>
								<td align="center"><a href="#" onClick="Javascript:viewCats('<?php echo $this->_tpl_vars['Contact']['customer_id']; ?>
')"><?php echo $this->_tpl_vars['Contact']['email_id']; ?>
</a></td>
								<td class="center"><a href="#" onClick="Javascript:viewCats('<?php echo $this->_tpl_vars['Contact']['customer_id']; ?>
')"><?php echo $this->_tpl_vars['Contact']['created_date']; ?>
&amp;<?php echo $this->_tpl_vars['Contact']['created_time']; ?>
</a></td>
	<td class="center">&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" data-toggle="modal" data-target="#EditContact"><i class="fa fa-edit"></i></a>
						&nbsp;&nbsp; &nbsp;&nbsp;<a href="#" onClick="Javascript:deleteCat('<?php echo $this->_tpl_vars['Contact']['sl_no']; ?>
','<?php echo $this->_tpl_vars['Contact']['customer_id']; ?>
')"><i class="fa fa-trash"></i></a></td>   
                    </tr>
					  <?php endforeach; else: ?>
					<tr>
								<td height="20" colspan="12" align="center"><img src="images/warning.gif" border="0">&nbsp;No Records Found</td>
					</tr>
					<?php endif; unset($_from); ?>
              
					</tbody>
                    </tfoot>
                  </table><!-- /#ion-icons -->
				  </form>
				  </table>
				  </div>
				  </div>	
      </div>
				  