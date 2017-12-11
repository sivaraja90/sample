{include file="left.tpl"}
{literal}
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
<script>

function PassValidate() {
        var password = document.getElementById("password").value;
        var confirmPassword = document.getElementById("re_password").value;
        if (password != confirmPassword) {
            alert("Passwords do not match.");
            return false;
        }
        return true;
    }

function doOnLoad() {
		Fill_Name_of_Clr();
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
		
		var fields=["company_name","user_name","sex","image","user_group","password","re_password"];
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
						var e = document.getElementById("company_name");
                        var optionSelIndex = e.options[e.selectedIndex].value;
                        var optionSelectedText = e.options[e.selectedIndex].text;
						if(optionSelIndex == 0)
						{
						dhtmlx.alert({
								title: "Error !",
								type:"alert-error",
								text: "Please Select Company Name",
											});
									return false;
						}
						}
						
						if(i==1)
						{
						var user_name  =  document.getElementById("user_name").value;
						if(user_name=="")
						{
						dhtmlx.alert({
								title: "Error !",
								type:"alert-error",
								text: "Please Enter User Name",
											});
									return false;
						}
						}
						
						
						if(i==2)
						{
						var sex  =  document.getElementById("sex").value;
						if(sex=="")
						{
						dhtmlx.alert({
								title: "Error !",
								type:"alert-error",
								text: "Please Select Sex",
											});
									return false;
						}
						}
						
						if(i==3)
						{
                        var image  =  document.getElementById("image").value;
						if(image=="")
						{
						dhtmlx.alert({
								title: "Error !",
								type:"alert-error",
								text: "Please Enter Image",
											});
									return false;
						}
						}
						
						if(i==4)
						{
                        var user_group  =  document.getElementById("user_group").value;
						if(user_group=="")
						{
						dhtmlx.alert({
								title: "Error !",
								type:"alert-error",
								text: "Please Enter User Group",
											});
									return false;
						}
						}
						
						if(i==5)
						{
                        var password  =  document.getElementById("password").value;
						if(password=="")
						{
						dhtmlx.alert({
								title: "Error !",
								type:"alert-error",
								text: "Please Enter Password",
											});
									return false;
						}
						}
						
						if(i==6)
						{
                        var re_password  =  document.getElementById("re_password").value;
						if(re_password=="")
						{
						dhtmlx.alert({
								title: "Error !",
								type:"alert-error",
								text: "Please Enter Re-Password",
											});
									return false;
						}
						}
						
						if(i==7)
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
				
               return false;
			   }
			}
			  FormName	= document.edit_user;
  			  FormName.method	= "POST";
              FormName.submit();
		}

function Fill_Name_of_Clr()
{
var company_name= document.getElementById("company_name").value;
var cnt_dtl_ary="";
if (company_name=="")
  {
  document.getElementById("employee_name").value="";
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
  	x ="<option>--Select Customer Name--</option>"
	x= x + xmlhttp.responseText;
	document.getElementById("employee_name").innerHTML=x;
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
			split_id=x.split("|COMP|");
			document.getElementById("company_code").value=split_id[1];
			document.getElementById("employee_name").innerHTML=x;
	   }
	 else
	   {
	   document.getElementById("employee_name").innerHTML="<option value='0'>Please select Company Name</option>";
	   }
    }
  }
xmlhttp.open("GET","ajax_user.php?company_name="+company_name,true);
xmlhttp.send();
}

function split_cnt_dtls(val)
{
var val=document.getElementById("employee_name").value;
var hdn_cnt_dtls=document.getElementById("hdn_cnt_dtls").value;
var split_cnt_dtl=hdn_cnt_dtls.split(",");
var split_cnt_dtl_len=hdn_cnt_dtls.split(",").length;
var emp_name;
var var_emp_id = new Object;
	for(i=1;i<split_cnt_dtl_len;i++)
	{
		var split_cnt_dtl_len2=split_cnt_dtl[i].split("_").length;
		var split_cnt_dtl2=split_cnt_dtl[i].split("_");
		emp_name=split_cnt_dtl2[0];
		var_emp_id[emp_name] = split_cnt_dtl2[1];
	}
	document.getElementById("emp_id").value=var_emp_id[val];
	Fill_Add_of_Clr();
}

function Fill_Add_of_Clr()
{
var emp_id=document.getElementById("emp_id").value;
var company_name=document.getElementById("company_name").value;
var cnt_dtl_ary="";
if (emp_id=="")
  {
  document.getElementById("employee_name").value="";
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
         document.getElementById("designation").value=add_dtls[0];
		 document.getElementById("department").value=add_dtls[1];
         document.getElementById("mail_id").value=add_dtls[2];
		 document.getElementById("area_code").value=add_dtls[3];
 		 document.getElementById("phone_no").value=add_dtls[4];
		 document.getElementById("extension").value=add_dtls[5];
		 document.getElementById("mobile_no").value=add_dtls[6];
		 document.getElementById("area").value=add_dtls[7];
		 document.getElementById("emp_first_name").value=add_dtls[8];
		 document.getElementById("emp_last_name").value=add_dtls[9];
         document.getElementById("salutation").value=add_dtls[10];
	   }
	 else
	   {
	   document.getElementById("employee_name").innerHTML="<option value='0'>Please select Company Name</option>";
	   }
    }
  }
xmlhttp.open("GET","ajax_user.php?emp_id="+emp_id+"&company_name="+company_name,true);
xmlhttp.send();
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
  <body class="hold-transition skin-blue sidebar-mini onLoad="doOnLoad();"">
    <div class="wrapper">
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
		<h4>
         <small><a href="user_list.php"><i class="fa fa-list"> <label style="font-family:Arial, Helvetica, sans-serif">
		 List Users</label></i></a></small>&ensp;&ensp;&ensp;
         <small><a href="user_reg.php"><i class="fa fa-user-plus"> <label style="font-family:Arial, Helvetica, sans-serif">
		 Create User</label></i></a></small>
		 </h4>
        </section>
        <!-- Main content -->
        <section class="content">
          <!-- SELECT2 EXAMPLE -->
          <div class="box box-info">
            <div class="box-header with-border" align="center">
              <h3 class="box-title">User Edit</h3>
              <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
              </div>
            </div><!-- /.box-header -->
		<form class="form-horizontal" name="edit_user" enctype="multipart/form-data" method="post">
			        <input type="hidden" name="hdAction" />
					<input type="hidden" id="c_id" name="c_id" size="25" value="{$c_id}" >
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
				   {foreach from=$ListEdit item=View}
				   <div class="col-md-6">
                    
						<input type="hidden" class="form-control" id="area" name="area" value="{$smarty.post.area}" placeholder="Area" autocomplete="off">
						<input type="hidden" class="form-control" id="emp_id" name="emp_id" value="{$smarty.post.emp_id}"  placeholder="Emp Id" autocomplete="off">

					
					<div class="form-group">
                      <label class="col-sm-3 control-label">Company Name</label>
						<div class="col-sm-5">
						<select id="company_name" name="company_name" class="form-control" value="{$View.company_name}" tabindex="1">
						{if $View.company_name eq "Asian Engineering"}
								<option selected="selected">Asian Engineering</option>
								<option value="Universal Infrastructure Systems">Universal Infrastructure Systems</option>
								<option value="Arka Automaations LTD">Arka Automaations LTD</option>
								<option value="Adroit Solutionz">Adroit Solutionz</option>
								<option value="Vinotronix Solutions">Vinotronix Solutions</option>
						
						{elseif $View.company_name eq "Universal Infrastructure Systems"}
								<option value="Asian Engineering">Asian Engineering</option>
								<option selected="selected">Universal Infrastructure Systems</option>
								<option value="Arka Automaations LTD">Arka Automaations LTD</option>
								<option value="Adroit Solutionz">Adroit Solutionz</option>
								<option value="Vinotronix Solutions">Vinotronix Solutions</option>
						{elseif $View.company_name eq "Arka Automaations LTD"}
								<option value="Asian Engineering" selected="selected">Asian Engineering</option>
								<option value="Universal Infrastructure Systems">Universal Infrastructure Systems</option>
								<option selected="selected">Arka Automaations LTD</option>
								<option value="Adroit Solutionz">Adroit Solutionz</option>
								<option value="Vinotronix Solutions">Vinotronix Solutions</option>
						{elseif $View.company_name eq "Adroit Solutionz"}
								<option value="Asian Engineering" selected="selected">Asian Engineering</option>
								<option value="Universal Infrastructure Systems">Universal Infrastructure Systems</option>
								<option value="Arka Automaations LTD">Arka Automaations LTD</option>
								<option selected="selected">Adroit Solutionz</option>
								<option value="Vinotronix Solutions">Vinotronix Solutions</option>
						{elseif $View.company_name eq "Vinotronix Solutions"}
								<option value="Asian Engineering" selected="selected">Asian Engineering</option>
								<option value="Universal Infrastructure Systems">Universal Infrastructure Systems</option>
								<option value="Arka Automaations LTD">Arka Automaations LTD</option>
								<option value="Adroit Solutionz">Adroit Solutionz</option>
								<option selected="selected">Vinotronix Solutions</option>
						{/if}
						</select>
			</div>
			</div>
					<div class="form-group">
                      <label class="col-sm-3 control-label">Employee Name</label>
                      <div class="col-sm-2" style="width:100px;">
					  <select id="salutation" name="salutation" class="form-control" value="{$View.salutation}" tabindex="3" autocomplete="0ff" >
					  <option>Mr</option>
					  <option>Mrs</option>
					  <option>Miss</option>
					  </select>
					  </div>
					  <div class="form-group">
					  <div class="col-sm-3">
                        <input type="text" class="form-control" id="contact_fname" name="contact_fname" tabindex="4" placeholder="First name" value= "{$View.contact_fname}" tabindex="4" style="margin-left:-25px; width:142px;" onKeyUp="text_filter(this)"  autocomplete="Off">
					</div>
					<div class="col-sm-3" >
					<input type="text" class="form-control" id="contact_lname" name="contact_lname" tabindex="5" placeholder="Last name" value="{$View.contact_lname}"  tabindex="5" style="margin-left:-8px;width:130px;" onKeyUp="text_filter(this)"  autocomplete="Off">
                      </div>
                    </div>
				</div>
					
				<div class="form-group">
                      <label class="col-sm-3 control-label">Designation</label>
                      <div class="col-sm-5">
                       <input type="text" class="form-control" id="designation" name="designation" value="{$View.designation}" tabindex="7" placeholder="Designation" autocomplete="off" onKeyUp="text_filter(this);">
                      </div>
                    </div>
					 <div class="form-group">
                      <label class="col-sm-3 control-label">Mobile No</label>
                      <div class="col-sm-5">
						 <input type="text" class="form-control" id="mobile_no" name="mobile_no" value="{$View.mobile}" maxlength="10"  tabindex="9" placeholder="Mobile No" onKeyUp="numericFilter(this);clear_err_mobile(this.id);"   onBlur="chk_exist_mob(this);" autocomplete="off">
                      </div>
                    </div>
					<div class="form-group" id="hdn_mobile2" style="display:none;">
                      <label class="col-sm-3 control-label">Mobile No 2 </label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="mobile_no2" name="mobile_no2" value="{$smarty.post.mobile_no2}" maxlength="10" placeholder="Mobile No 2"  onKeyUp="numericFilter(this);clear_err_mobile(this.id);"  onBlur="chk_exist_mob(this);" autocomplete="off">
                      </div>
                    </div>
					<div class="form-group" id="hdn_mobile3" style="display:none;">
                      <label class="col-sm-3 control-label">Mobile No 3</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="mobile_no3" name="mobile_no3" value="{$smarty.post.mobile_no3}" maxlength="10" placeholder="Mobile No 3" onKeyUp="numericFilter(this);clear_err_mobile(this.id);"  onBlur="chk_exist_mob(this);" autocomplete="off">
                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-3 control-label">Email Id</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="mail_id" name="mail_id" value="{$View.email_id}" tabindex="11" placeholder="mail_id" autocomplete="off">
                      </div>
					   </div>
					  <div class="form-group" id="hdn_email2" style="display:none">
                      <label class="col-sm-3 control-label">Email Id 2</label>
                      <div class="col-sm-5">
                        <input type="email" class="form-control" id="mail_id1" name="mail_id1" placeholder="Email Id 1" value="{$View.email_id1}" autocomplete="off">
                      </div>
					  </div>
					<div class="form-group" >
                      <label class="col-sm-3 control-label">Password</label>
                      <div class="col-sm-5">
                        <input type="password" class="form-control" id="password" name="password" value="{$View.password}" tabindex="15" placeholder="Password" autocomplete="off">
                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-3 control-label">Re Password</label>
                      <div class="col-sm-5">
                        <input type="password" class="form-control" id="re_password" name="re_password" value="{$View.re_password}" tabindex="17" placeholder="Re Password" autocomplete="off">
                      </div>
                    </div>
					</div>
					<!--**********************************************************-->
                     <div class="col-md-6">
                    <div class="form-group">
                      <label class="col-sm-3 control-label">User Name</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="user_name" name="user_name" value="{$View.username}" tabindex="2" placeholder="User Name" autocomplete="off" onKeyUp="text_filter(this);">
                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-3 control-label">Company Code</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="company_code" name="company_code" value="{$View.company_code}" tabindex="4" autocomplete="off">
                      </div>
                    </div>
					 <div class="form-group">
                      <label class="col-sm-3 control-label">Sex </label>
						<div class="col-sm-5">
						<select id="sex" name="sex" class="form-control" tabindex="6">
						{if $View.sex eq 'Male'}
						 <option value="{$View.sex}"  selected="selected">{$View.sex}</option>
						   <option value="Female">Female</option>
						   {elseif $View.sex eq 'Female'}
						   <option value="{$View.sex}"  selected="selected">{$View.sex}</option>
						    <option value="Male">Male</option>
							{/if}
						</select>
                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-3 control-label">Department</label>
                      <div class="col-sm-5">
						 <input type="text" class="form-control" id="department" name="department"  value="{$View.department}" tabindex="8" placeholder="Department" autocomplete="off">
                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-3 control-label">Profile Image</label>
                      <div class="col-sm-5" id="allow" style="display:none;">
						 <input type="file" id="image" value="{$View.image}" name="image" tabindex="12" autocomplete="off"></div>
						 <div class="col-sm-5" id="allow1">
						 <input type="text" id="image1" value="{$View.image}" name="image1" tabindex="12" autocomplete="off" size="18" readonly="true">&nbsp;&nbsp;<div class="fa fa-pencil-square-o" id="" onClick="image_hide();"> </div>
                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-3 control-label">Phone No</label>
					    <div class="col-sm-2">
					    <input type="text" class="form-control" id="area_code" name="area_code" value="{$View.area}" placeholder="Area Code" maxlength="6" tabindex="12" onKeyUp="numericFilter(this);" autocomplete="off">
					  </div>
                      <div class="col-sm-2">
                        <input type="text" class="form-control" id="phone_no" name="phone_no" value="{$View.phone}" placeholder="Phone No" maxlength="7" tabindex="13" onKeyUp="numericFilter(this);" autocomplete="off" style="margin-left:-23px;">
                      </div>
                      <div class="col-sm-2">
                        <input type="text" class="form-control" id="extension" name="extension" value="{$View.extension}" placeholder="Extension" maxlength="3" tabindex="14" onKeyUp="numericFilter(this);" autocomplete="off" style="margin-left:-45px;">
                       </div>
					   </div>
					   <div class="form-group" id="hdn_phone2" style="display:none;">
                      <label class="col-sm-3 control-label">Phone No 1</label>
					  <div class="col-sm-2">
					    <input type="text" class="form-control" id="area_code1" name="area_code1" placeholder="Area Code 1"  onKeyUp="numericFilter(this);" autocomplete="off">
					  </div>
                      <div class="col-sm-2">
                        <input type="text" class="form-control" id="phone_no1" name="phone_no1" placeholder="Phone No 1"  onKeyUp="numericFilter(this);" autocomplete="off">
                      </div>
                      <div class="col-sm-2">
                        <input type="text" class="form-control" id="extension1" name="extension1" placeholder="extension 1"  onKeyUp="numericFilter(this);" autocomplete="off">
                       </div>
					   </div>
					   <div class="form-group">
                      <label class="col-sm-3 control-label">User Group</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="user_group" name="user_group" value="{$View.user_group}" tabindex="16" placeholder="User Group" autocomplete="off">
                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-3 control-label">Remarks</label>
                      <div class="col-sm-5">
                        <textarea class="form-control" id="remarks" name="remarks"  tabindex="18" placeholder="Remarks" autocomplete="off">{$View.remarks}</textarea>
                      </div>
                    </div>
					 <div class="form-group">
                        <input type="hidden" class="form-control" id="created_by" name="created_by"  value="{$View.created_by}" tabindex="22" readonly="true" autocomplete="off">
						  <input type="hidden" class="form-control" id="created_date" name="created_date" value="{$smarty.now|date_format:'%Y-%m-%d'}">
						<input type="hidden" class="form-control" id="created_time" name="created_time" value="{$smarty.now|date_format:'%I:%M:%S %p'}">
						 <input type="hidden" class="form-control" id="timestamp_value" name="timestamp_value" value="{$smarty.now|date_format:'%Y-%m-%d &amp; %I:%M:%S %p'}" tabindex="22" placeholder="Timestamp Value">
					                      </div>
                    </div>
					</div>
					{/foreach}
					 <div class="box-footer"><center>
                   <input type="button" class="btn btn-info pull-center" value="UPDATE USER"  onClick="validate_fields();PassValidate();" />&nbsp;&nbsp;
                   <button type="submit" class="btn btn-info pull-center" onClick="GoBack();" >CANCEL</button></center>
                  </div>
				  </div>
				   </form>
                  </div>
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
    </div>
  </body>
</html>
