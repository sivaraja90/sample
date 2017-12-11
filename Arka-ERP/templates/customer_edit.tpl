{include file="left.tpl"}
{literal}
<script type="text/javascript">
function closeit(val){
	parent.document.forms['edit_customer'].elements['enquiry_through'].value=val;
	document.getElementById("cus_editclose").data-dismiss="modal";

}

function closeit1(val){
	parent.document.forms['edit_customer'].elements['place_type'].value=val;
	document.getElementById("cus_editclose1").data-dismiss="modal";

}
</script>
<script type="text/javascript" src='./dhtmlxMessage/codebase/dhtmlxmessage.js'></script>
	<script type='text/javascript' src='./auto-complete/jquery.metadata.js'></script>
	<script type='text/javascript' src='./auto-complete/jquery.auto-complete.js?<?= mktime() ?>'></script>
	<script type='text/javascript' src='./auto-complete/js.js?<?= mktime() ?>'></script>
	<link rel="stylesheet" href= "./codebase/skins/dhtmlxmessage_dhx_skyblue.css" type="text/css" media="all"/>
	<link rel='stylesheet' type='text/css' href='auto-complete/jquery.auto-complete.css?<?= mktime() ?>' />
	<script>

$(document).ready(function() {
$("#back").click(function GoBack() {
    window.history.go(-1);
});
});
</script>
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
function closeit(val){
	parent.document.forms['edit_customer'].elements['enquiry_through'].value=val;
	parent.dhxWins.window("w1").close();
}

function closeit1(val){
	parent.document.forms['edit_customer'].elements['place_type'].value=val;
	parent.dhxWins.window("w2").close();
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

		var fields=["company_name","enquiry_through","place_type"];
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
						var company_name  =  document.getElementById("company_name").value;
						if(company_name=="")
						{
						dhtmlx.alert({
								title: "Error !",
								type:"alert-error",
								text: "Please Enter Company Name",
											});
									return false;
						}
						}
						
						if(i==1)
						{
						var enquiry_through  =  document.getElementById("enquiry_through").value;
						if(enquiry_through=="")
						{
						dhtmlx.alert({
								title: "Error !",
								type:"alert-error",
								text: "Please Enter Enquiry Through",
											});
									return false;
						}
						}
						if(i==2)
						{
						var place_type  =  document.getElementById("place_type").value;
						if(place_type=="")
						{
						dhtmlx.alert({
								title: "Error !",
								type:"alert-error",
								text: "Please Enter Place Type",
											});
									return false;
						}
						}
						return false;
						}

				}
			  FormName		= document.edit_customer;
  			  FormName.method	= "POST";
              FormName.submit();
		}

function createWindow() {
    dhxWins = new dhtmlXWindows();
    dhxWins.setImagePath("./codebase/imgs/");
  // dhxWins.enableAutoViewport(false);
    dhxWins.attachViewportTo("winVP");
    win = dhxWins.createWindow("w1",500, 100, 300, 400);
    win.setText("Enquirey Through");
    win.attachURL("./enquiry_through.php");
//	win.denyMove();
}
function createWindow1() {
    dhxWins = new dhtmlXWindows();
    dhxWins.setImagePath("./codebase/imgs/");
  // dhxWins.enableAutoViewport(false);
    dhxWins.attachViewportTo("winVP");
    win = dhxWins.createWindow("w1",500, 150, 300, 400);
    win.setText("Reference");
    win.attachURL("./reference.php");
//	win.denyMove();
}
function createWindow2() {
    dhxWins = new dhtmlXWindows();
    dhxWins.setImagePath("./codebase/imgs/");
  // dhxWins.enableAutoViewport(false);
    dhxWins.attachViewportTo("winVP");
    win = dhxWins.createWindow("w2",500, 200, 300, 400);
    win.setText("Place Type");
    win.attachURL("./place_type.php");
//	win.denyMove();
}

</script>
{/literal}
	<body class="hold-transition skin-blue sidebar-mini" onLoad="doOnLoad();">
    <div class="wrapper">
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
           <h4>
           		  {foreach from=$RList item=roles}
				{if $roles.role_name eq 'List Customer'}&ensp;
            <small><a href="customer_list.php"><i class="fa fa-list"> <label style="font-family:Arial, Helvetica, sans-serif">
			List Customers</label></i></a></small>&ensp;&ensp;&ensp;
			{/if}
			{if $roles.role_name eq 'Add Customer'}
			<small><a href="customer_reg.php"><i class="fa fa-user-plus"> <label style="font-family:Arial, Helvetica, sans-serif">
			Create Customer</label></i></a></small>
			{/if}
			{/foreach}
          </h4>
        </section>
        <!-- Main content -->
        <section class="content">
          <div class="box box-info">
            <div class="box-header with-border" align="center">
              <h3 class="box-title">Customer Edit</h3>
              <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
              </div>
            </div><!-- /.box-header -->

			<form class="form-horizontal" name="edit_customer">
			<input type="hidden" name="hdAction" />
					<input type="hidden" id="c_id" name="c_id" size="25" value="{$c_id}" readonly="true" >
					<input type="hidden" id="mobile_fld_cnt" name="mobile_fld_cnt"  value="2"  >
					<input type="hidden" id="phone_fld_cnt" name="phone_fld_cnt"  value="2"  >
					<input type="hidden" id="email_fld_cnt" name="email_fld_cnt"  value="2"  >
					<input type="hidden" id="hdn_salutation" name="hdn_salutation" value="{$smarty.post.salutaion}">
					<input type="hidden" id="hdn_order_status" name="hdn_order_status" value="{$smarty.post.order_status}">
					<input type="hidden" id="hdn_customer_status" name="hdn_customer_status" value="{$smarty.post.customer_status}">
					<input type="hidden" id="hdn_customer_type" name="hdn_customer_type" value="{$smarty.post.customer_type}">
	<input type="hidden" class="form-control" id="created_by" name="created_by" value="{$smarty.session.UserName}" readonly="true">
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
			{foreach from=$ListView item=View}
				   <div class="col-md-6">
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Customer Id</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="customer_id" name="customer_id" placeholder="Customer Id" value="{$View.customer_id}" tabindex="1" readonly="true" autocomplete="off">

                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-3 control-label">Enquiry Through</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="enquiry_through" name="enquiry_through" value="{$View.enquiry_through}" placeholder="Enquiry Through"
						value="TESTING" tabindex="3" data-toggle="modal"  data-target="#Enquiry" value="TESTING" readonly="true" autocomplete="off">
                      </div>
                    </div>
										<div class="form-group">
					                      <label class="col-sm-3 control-label">Reference</label>
					                      <div class="col-sm-5">
					        <input type="text" class="form-control"  id="reference" name="reference" value="{$View.reference}" placeholder="Reference" tabindex="5" value="TESTING" autocomplete="off"/>
					                      </div>
					                    </div>

					</div>
					<!--**********************************************************-->
                     <div class="col-md-6">
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Company Name</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="company_name" name="company_name" value="{$View.company_name}" placeholder="Company Name" tabindex="2" autocomplete="off" onKeyUp="text_filter(this);">
                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-3 control-label">Place Type</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="place_type" name="place_type" value="{$View.place_type}" placeholder="Place Type" tabindex="4"  data-toggle="modal" data-target="#Place_Type" readonly="true" value="TESTING"  autocomplete="off">
						<input type="hidden" class="form-control" id="timestamp" name="timestamp" value="{$smarty.now|date_format:'%Y-%m-%d &amp; %I:%M:%S %p'}">
                      </div>
                      </div>


	<div class="modal fade" id="Enquiry" role="dialog">
    <div class="modal-dialog2">
      <!-- Modal content-->
      <div class="modal-content" style="width:300px;">
        <div class="modal-header" style="background-color:#00CCFF;">
          <button type="button" class="close" id="cus_editclose" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Enquiry Through</h4>
        </div>
        <div class="modal-body">
<table class="table table-bordered table-striped ">
					<tbody>
					<tr>
					<td><input type="text" class="form-control" id="search" name="search" placeholder="Search"></td>
					</tr>
                     {foreach from=$EnqThru item=Enq}
                      <tr>
                        <td align="center"><a  href="#." onClick="closeit('{$Enq.description}');" data-dismiss="modal">{$Enq.description}</a></td>
					   </tr>
					     {foreachelse}
						<tr>
									<td height="20" colspan="2" align="center"><img src="images/warning.gif" border="0">&nbsp;No Records Found</td>
						</tr>
					{/foreach}
					  </tbody>
                  </table>
        </div>
      </div>
    </div>
  </div>
	<div class="modal fade" id="Place_Type" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content" style="width:300px;">
        <div class="modal-header" style="background-color:#00CCFF;">
          <button type="button" class="close" id="cus_editclose1" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Place Type</h4>
        </div>
        <div class="modal-body">
<table class="table table-bordered table-striped ">
					<tbody>
					<tr>
					<td><input type="text" class="form-control" id="search" name="search" placeholder="Search"></td>
					</tr>

                      {foreach from=$cusreg item=cus}
                      <tr >
                        <td align="center"><a  href="#." onClick="closeit1('{$cus.place_type}');" data-dismiss="modal">{$cus.place_type}</a></td>
					   </tr>
					     {foreachelse}
						<tr>
									<td height="20" colspan="2" align="center"><img src="images/warning.gif" border="0">&nbsp;No Records Found</td>
						</tr>
					{/foreach}

					  </tbody>
                  </table>

        </div>
      </div>
    </div>
  </div>
  </div>

					{/foreach}
					</div>
					<div class="box-footer">
					<center>
					<input type="button" class="btn btn-info pull-center" value="UPDATE" tabindex="6" onClick="validate_fields();" >&nbsp;&nbsp;
                     <a href="./customer_list.php" button type="submit" class="btn btn-info pull-center" tabindex="7" onClick="GoBack()" >CANCEL</a></center>
                  </div>
                  </div>
                </form>

      <div class="control-sidebar-bg"></div>
    </div>
  </body>
</html>
