<?php /* Smarty version 2.6.25, created on 2017-01-07 16:19:17
         compiled from customer_edit.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'customer_edit.tpl', 252, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "left.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php echo '
<script type="text/javascript">
function closeit(val){
	parent.document.forms[\'edit_customer\'].elements[\'enquiry_through\'].value=val;
	document.getElementById("cus_editclose").data-dismiss="modal";

}

function closeit1(val){
	parent.document.forms[\'edit_customer\'].elements[\'place_type\'].value=val;
	document.getElementById("cus_editclose1").data-dismiss="modal";

}
</script>
<script type="text/javascript" src=\'./dhtmlxMessage/codebase/dhtmlxmessage.js\'></script>
	<script type=\'text/javascript\' src=\'./auto-complete/jquery.metadata.js\'></script>
	<script type=\'text/javascript\' src=\'./auto-complete/jquery.auto-complete.js?<?= mktime() ?>\'></script>
	<script type=\'text/javascript\' src=\'./auto-complete/js.js?<?= mktime() ?>\'></script>
	<link rel="stylesheet" href= "./codebase/skins/dhtmlxmessage_dhx_skyblue.css" type="text/css" media="all"/>
	<link rel=\'stylesheet\' type=\'text/css\' href=\'auto-complete/jquery.auto-complete.css?<?= mktime() ?>\' />
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
	parent.document.forms[\'edit_customer\'].elements[\'enquiry_through\'].value=val;
	parent.dhxWins.window("w1").close();
}

function closeit1(val){
	parent.document.forms[\'edit_customer\'].elements[\'place_type\'].value=val;
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
'; ?>

	<body class="hold-transition skin-blue sidebar-mini" onLoad="doOnLoad();">
    <div class="wrapper">
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
           <h4>
           		  <?php $_from = $this->_tpl_vars['RList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['roles']):
?>
				<?php if ($this->_tpl_vars['roles']['role_name'] == 'List Customer'): ?>&ensp;
            <small><a href="customer_list.php"><i class="fa fa-list"> <label style="font-family:Arial, Helvetica, sans-serif">
			List Customers</label></i></a></small>&ensp;&ensp;&ensp;
			<?php endif; ?>
			<?php if ($this->_tpl_vars['roles']['role_name'] == 'Add Customer'): ?>
			<small><a href="customer_reg.php"><i class="fa fa-user-plus"> <label style="font-family:Arial, Helvetica, sans-serif">
			Create Customer</label></i></a></small>
			<?php endif; ?>
			<?php endforeach; endif; unset($_from); ?>
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
	<input type="hidden" class="form-control" id="created_by" name="created_by" value="<?php echo $this->_supers['session']['UserName']; ?>
" readonly="true">
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
			<?php $_from = $this->_tpl_vars['ListView']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['View']):
?>
				   <div class="col-md-6">
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Customer Id</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="customer_id" name="customer_id" placeholder="Customer Id" value="<?php echo $this->_tpl_vars['View']['customer_id']; ?>
" tabindex="1" readonly="true" autocomplete="off">

                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-3 control-label">Enquiry Through</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="enquiry_through" name="enquiry_through" value="<?php echo $this->_tpl_vars['View']['enquiry_through']; ?>
" placeholder="Enquiry Through"
						value="TESTING" tabindex="3" data-toggle="modal"  data-target="#Enquiry" value="TESTING" readonly="true" autocomplete="off">
                      </div>
                    </div>
										<div class="form-group">
					                      <label class="col-sm-3 control-label">Reference</label>
					                      <div class="col-sm-5">
					        <input type="text" class="form-control"  id="reference" name="reference" value="<?php echo $this->_tpl_vars['View']['reference']; ?>
" placeholder="Reference" tabindex="5" value="TESTING" autocomplete="off"/>
					                      </div>
					                    </div>

					</div>
					<!--**********************************************************-->
                     <div class="col-md-6">
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Company Name</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="company_name" name="company_name" value="<?php echo $this->_tpl_vars['View']['company_name']; ?>
" placeholder="Company Name" tabindex="2" autocomplete="off" onKeyUp="text_filter(this);">
                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-3 control-label">Place Type</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="place_type" name="place_type" value="<?php echo $this->_tpl_vars['View']['place_type']; ?>
" placeholder="Place Type" tabindex="4"  data-toggle="modal" data-target="#Place_Type" readonly="true" value="TESTING"  autocomplete="off">
						<input type="hidden" class="form-control" id="timestamp" name="timestamp" value="<?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d &amp; %I:%M:%S %p') : smarty_modifier_date_format($_tmp, '%Y-%m-%d &amp; %I:%M:%S %p')); ?>
">
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
                     <?php $_from = $this->_tpl_vars['EnqThru']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['Enq']):
?>
                      <tr>
                        <td align="center"><a  href="#." onClick="closeit('<?php echo $this->_tpl_vars['Enq']['description']; ?>
');" data-dismiss="modal"><?php echo $this->_tpl_vars['Enq']['description']; ?>
</a></td>
					   </tr>
					     <?php endforeach; else: ?>
						<tr>
									<td height="20" colspan="2" align="center"><img src="images/warning.gif" border="0">&nbsp;No Records Found</td>
						</tr>
					<?php endif; unset($_from); ?>
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

                      <?php $_from = $this->_tpl_vars['cusreg']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['cus']):
?>
                      <tr >
                        <td align="center"><a  href="#." onClick="closeit1('<?php echo $this->_tpl_vars['cus']['place_type']; ?>
');" data-dismiss="modal"><?php echo $this->_tpl_vars['cus']['place_type']; ?>
</a></td>
					   </tr>
					     <?php endforeach; else: ?>
						<tr>
									<td height="20" colspan="2" align="center"><img src="images/warning.gif" border="0">&nbsp;No Records Found</td>
						</tr>
					<?php endif; unset($_from); ?>

					  </tbody>
                  </table>

        </div>
      </div>
    </div>
  </div>
  </div>

					<?php endforeach; endif; unset($_from); ?>
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