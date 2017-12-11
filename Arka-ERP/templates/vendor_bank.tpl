{$IncludeCSS}
{$IncludeJS}
{literal}
<script type="text/javascript" src='./dhtmlxMessage/codebase/dhtmlxmessage.js'></script>
	<script type='text/javascript' src='./auto-complete/jquery.metadata.js'></script>
	<script type='text/javascript' src='./auto-complete/jquery.auto-complete.js?<?= mktime() ?>'></script>
	<script type='text/javascript' src='./auto-complete/js.js?<?= mktime() ?>'></script>
	<link rel="stylesheet" href= "./codebase/skins/dhtmlxmessage_dhx_skyblue.css" type="text/css" media="all"/> 
	<link rel='stylesheet' type='text/css' href='auto-complete/jquery.auto-complete.css?<?= mktime() ?>' />
	<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css"/>
	<style>
	th {
    font-style: normal;
	font-weight:100;
	font-size:14px;
	margin-right:90px;
}
table { 
    border-spacing: 2px;
    border-collapse:collapse;
	
}
html, body {
	padding: 0;
	margin: 0;
	overflow: hidden;
}
#Sale {
	position: absolute;
	left: 0;
	top: 0;
	right: -30px;
	bottom: 0;	
	padding-right: 15px;
	overflow-y: scroll;
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
		
		var fields=["account_no","acc_holder","bank_name","branch","area","pincode","ifsc_code"];
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
						var account_no  =  document.getElementById("account_no").value;
						if(account_no=="")
						{
						dhtmlx.alert({
								title: "Error !",
								type:"alert-error",
								text: "Please Enter Account No",
											});
									return false;
						}
						}
						if(i==1)
						{
						var acc_holder  =  document.getElementById("acc_holder").value;
						if(acc_holder=="")
						{
						dhtmlx.alert({
								title: "Error !",
								type:"alert-error",
								text: "Please Enter Account Holder Name",
											});
									return false;
						}
						}
						if(i==2)
						{
						var bank_name  =  document.getElementById("bank_name").value;
						if(bank_name=="")
						{
						dhtmlx.alert({
								title: "Error !",
								type:"alert-error",
								text: "Please Enter Bank Name",
											});
									return false;
						}
						}
						if(i==3)
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
							if(i==4)
						{
						var area  =  document.getElementById("area").value;
						if(area=="")
						{
						dhtmlx.alert({
								title: "Error !",
								type:"alert-error",
								text: "Please Enter Area",
											});
									return false;
						}
						}
						if(i==5)
						{
						var pincode  =  document.getElementById("pincode").value;
						if(pincode=="")
						{
						dhtmlx.alert({
								title: "Error !",
								type:"alert-error",
								text: "Please Enter Pincode",
											});
									return false;
						}
						}
						if(i==6)
						{
						var ifsc_code  =  document.getElementById("ifsc_code").value;
						if(ifsc_code=="")
						{
						dhtmlx.alert({
								title: "Error !",
								type:"alert-error",
								text: "Please Enter IFSC Code",
											});
									return false;
						}
						}
						return false;
						}
				}
			  FormName		= document.vendor_bank;
  			  FormName.method	= "POST";
              FormName.submit();
		}
</script>
{/literal}
<body>
<div id="Sale">

		<form class="form-horizontal" name="vendor_bank">
			<input type="hidden" name="hdAction" />
					<input type="hidden" id="mobile_fld_cnt" name="mobile_fld_cnt"  value="2"  >
					<input type="hidden" id="phone_fld_cnt" name="phone_fld_cnt"  value="2"  >
					<input type="hidden" id="email_fld_cnt" name="email_fld_cnt"  value="2"  >
					<input type="hidden" id="hdn_add_dtls" name="hdn_add_dtls" value=""  >
					<input type="hidden" id="hdn_salutation" name="hdn_salutation" value="{$smarty.post.salutaion}">
					<input type="hidden" id="hdn_order_status" name="hdn_order_status" value="{$smarty.post.order_status}">
					<input type="hidden" id="hdn_customer_status" name="hdn_customer_status" value="{$smarty.post.customer_status}">
					<input type="hidden" id="hdn_customer_type" name="hdn_customer_type" value="{$smarty.post.customer_type}">
					<input type="hidden" id="vendor_id" name="vendor_id" value="{$smarty.get.vendor_id}">
					<input type="hidden" id="timestamp" name="timestamp" value="{$smarty.now|date_format:'%Y-%m-%d &amp; %I:%M:%S %p'}">
					<input type="hidden" id="created_date" name="created_date" value="{$smarty.now|date_format:'%Y-%m-%d'}">
					<input type="hidden" id="created_time" name="created_time" value="{$smarty.now|date_format:'%I:%M:%S %p'}">
					<input type="hidden" id="created_by" name="created_by" value="{$smarty.session.UserName}">
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
					
<table class="col-md-6" cellpadding="10">
				<tr class="form-group">
					<th class="col-sm-5 control-th" style="margin-bottom:-30px;">Account No</th>
						<td>
		<input type="text" class="form-control" id="account_no" name="account_no" placeholder="Account No" onKeyUp="numericFilter(this);" autocomplete="off" tabindex="1"><td></td>
						</td>
					<th class="col-sm-5 control-th">Holder Name</th>
						<td>
<input type="text" class="form-control" id="acc_holder" name="acc_holder" placeholder="Account Holder Name" onKeyUp="text_filter(this);" autocomplete="off" tabindex="2"> <td></td>
						</td>
				</tr> 
				<tr class="form-group">
					<th class="col-sm-5 control-th">Bank Name</th>
						<td>
<input type="text"class="form-control" id="bank_name" name="bank_name" placeholder="Bank Name" onKeyUp="text_filter(this);" autocomplete="off" tabindex="3"><td></td>
						</td>
						<th class="col-sm-5 control-th">Branch</th>
						<td>
    <input type="text" class="form-control" id="branch" name="branch" placeholder="Branch" onKeyUp="text_filter(this);" autocomplete="off" tabindex="4"><td></td>
						</td>
				  </tr>
				<tr class="form-group">
						<th class="col-sm-5 control-th">Area</th>
						<td>
						<input type="text" class="form-control" id="area" name="area" placeholder="Area" autocomplete="off" tabindex="5" onKeyUp="text_filter(this);"><td></td>
						</td>
				<th class="col-sm-5 control-th" style="margin-bottom:-30px;">Pincode</th>
						<td>
<input type="text" class="form-control" id="pincode" name="pincode" placeholder="Pincode" autocomplete="off" maxlength="6" onKeyUp="numericFilter(this);" tabindex="6" ><td></td>
						</td>
				</tr>
				<tr class="form-group">
				<th class="col-sm-5 control-th">IFSC Code</th>
						<td>
						<input type="text" class="form-control" id="ifsc_code" name="ifsc_code" autocomplete="off" placeholder="IFSC Code" tabindex="7">
						</td><td>&nbsp;</td>
					<th class="col-sm-5 control-th">Remarks</th>
						<td>
						<textarea class="form-control" id="remark" name="remark" placeholder="Remarks" tabindex="8" autocomplete="Off"></textarea></td><td></td>
				</tr>
</table>
					<div class="box-footer" id="close">
					<center>
					<input type="button" class="btn btn-info pull-center" value="SUBMIT"  onClick="validate_fields();">
					</center>
					</div>
					</form>
				 {literal}
    <script>
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
	{/literal}
</div>
</body>
</div>
                 
					

                 
				  