<?php /* Smarty version 2.6.25, created on 2017-11-30 16:51:21
         compiled from enquiry_detail_view.tpl */ ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "left.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php echo '
<script type="text/javascript" src=\'./dhtmlxMessage/codebase/dhtmlxmessage.js\'></script>
<!--<script type=\'text/javascript\' src=\'./auto-complete/jquery-1.3.2.js\'></script>
--><script type=\'text/javascript\' src=\'./auto-complete/jquery.metadata.js\'></script>
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
	label,td.thick
{
font-weight:bold;
}
label.thin
{
font-weight:normal;
}
</style>
<script>
function Assign1() {
var as = document.getElementById(\'assign_to\').value;
var a2 = as.toLowerCase();
document.getElementById(\'assign_to\').value = a2;
}
</script>
<script>
function validate(data)
     {
			var accept = document.getElementById("accept");
			if( accept.value == "Reassign")
			{
				document.getElementById("assign_to").style.display = "inherit";
			}
			  else
			  {
			  FormName		= document.EnqDet;
  			  FormName.method	= "POST";
              FormName.submit();
			  return true;
			  }
		}
		function reassign(data)
        {
			  var assign = document.getElementById("assign_to").value;
			  FormName		= document.EnqDet;
  			  FormName.method	= "POST";
              FormName.submit();
		}
function Assign() {
var as = document.getElementById(\'assign_to\').value;
var a2 = as.toLowerCase();
document.getElementById(\'assign_to\').value = a2;
}
</script>
'; ?>

 <body class="hold-transition skin-blue sidebar-mini">
  <div class="content-wrapper">
	<section class="content-header">

          <h4>
            <small><a href="enquiry_list.php"><i class="fa fa-list"> <label class="thin" style="font-family:Arial, Helvetica, sans-serif">
List Enquiries</label></i></a></small>&ensp;&ensp;&ensp;
            <small><a href="enquiry_reg.php"><i class="fa fa-user-plus"> <label class="thin" style="font-family:Arial, Helvetica, sans-serif">
Create Enquriy</label></i></a></small>
          </h4>
          <ul class="breadcrumb">
            <li>Status : Active</li>
          </ul>
        </section>

        <!-- Main content -->
          <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box box-info">
                <div class="box-header">
				 <?php $_from = $this->_tpl_vars['ListEdit']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['Edit']):
?>
				<table width="113%">
				<tr>
				 <td>Created:<?php echo $this->_tpl_vars['Edit']['created_date']; ?>
&nbsp;&nbsp;<?php echo $this->_tpl_vars['Edit']['created_time']; ?>
</td>
				 <td><h4><?php echo $this->_tpl_vars['Edit']['company_name']; ?>
[<?php echo $this->_tpl_vars['Edit']['enquiry_id']; ?>
]</h4></td><td>Modified:<?php echo $this->_tpl_vars['Edit']['timestamp_value']; ?>
</td>
				 </tr>
				 </table>
					<?php endforeach; endif; unset($_from); ?>
					 <?php $_from = $this->_tpl_vars['ListEdit']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['Edit']):
?>
				<form class="form-horizontal" name="EnqDet">
				<input type="hidden" name="hdAction" />
				   <div class="box-body">
				   <div class="col-md-6">
                    <div class="form-group">
                      <label class="col-sm-4 thick">Customer Id</label>
                      <div class="col-sm-6">
                       <?php echo $this->_tpl_vars['Edit']['customer_id']; ?>

                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 thick">Enquiry Through</label>
                      <div class="col-sm-6">
                        <?php echo $this->_tpl_vars['Edit']['enquiry_through']; ?>

                      </div>
                    </div>
					 <div class="form-group">
                      <label class="col-sm-4 thick">Created By</label>
                      <div class="col-sm-6">
                        <?php echo $this->_tpl_vars['Edit']['created_by']; ?>

                      </div>
                    </div>
		     		 <div class="form-group">
                      <label class="col-sm-4 thick">Enquiry Type</label>
                      <div class="col-sm-6">
                        <?php echo $this->_tpl_vars['Edit']['enquiry_type']; ?>

                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-4 thick">Arka Group</label>
                      <div class="col-sm-6">
                        <?php echo $this->_tpl_vars['Edit']['arka_group']; ?>

                      </div>
                    </div>
					</div>
					<div class="col-md-6">
					 <div class="form-group">
                      <label class="col-sm-4 thick">Customer Name</label>
                      <div class="col-sm-6">
                        <?php echo $this->_tpl_vars['Edit']['customer_name']; ?>

                      </div>
                    </div>
					 <div class="form-group">
                      <label class="col-sm-4 thick">Enquiry Status</label>
                      <div class="col-sm-6">
                        <?php if ($this->_tpl_vars['Edit']['enquiry_status'] == 'Open' && $this->_tpl_vars['Edit']['open_status'] == ""): ?><?php echo $this->_tpl_vars['Edit']['enquiry_status']; ?>
<?php elseif ($this->_tpl_vars['Edit']['enquiry_status'] == 'Open' && $this->_tpl_vars['Edit']['open_status'] != ""): ?><?php echo $this->_tpl_vars['Edit']['enquiry_status']; ?>
-<?php echo $this->_tpl_vars['Edit']['open_status']; ?>
<?php elseif ($this->_tpl_vars['Edit']['enquiry_status'] != 'Open'): ?><?php echo $this->_tpl_vars['Edit']['enquiry_status']; ?>
<?php endif; ?>
                      </div>
                    </div>
				


					<div class="form-group">
                      <label class="col-sm-4 thick">Assign To</label>
                      <div class="col-sm-6">
                        <?php echo $this->_tpl_vars['Edit']['assign_to']; ?>
<?php if ($this->_tpl_vars['Edit']['reassign'] != ""): ?>&nbsp;(Re Assigned)<?php endif; ?>
                      </div>
                    </div>
					<?php if ($this->_tpl_vars['Edit']['assign_to'] == $this->_supers['session']['UserName'] && $this->_tpl_vars['Edit']['reassign'] == ""): ?>
					 <div class="form-group">
                      <label class="col-sm-4 thick">Action</label>
                       <div class="col-sm-4">
					   	<select id="accept" name="accept" class="form-control" autocomplete="off" onChange="validate(this);" value="<?php echo $this->_supers['post']['accept']; ?>
">

						<?php if ($this->_tpl_vars['Edit']['accept_status'] == '1'): ?>
						<option>----Select----</option>
						<option value="Reassign">Re Assign</option>
						<?php else: ?>
						<option>----Select----</option>
						<option value="1">Accept</option>
						<option value="0">Not Accept</option>
						<?php endif; ?>
						</select>

					</div>

					 <!--<input type="text" class="col-sm-4" onBlur="Assign1();" id="assign_to" name="assign_to" style="display:none;" placeholder="Re Assign" value="<?php echo $this->_supers['post']['assign_to']; ?>
">-->

                    <select id="assign_to" name="assign_to" class="col-sm-4" value="<?php echo $this->_supers['post']['assign_to']; ?>
" style="display:none;"  >
						<option value="">----Select------</option>
						 <?php $_from = $this->_tpl_vars['UserListAssign']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['asslist']):
?>
					<option value="<?php echo $this->_tpl_vars['asslist']['username']; ?>
"><?php echo $this->_tpl_vars['asslist']['username']; ?>
</option>
					<?php endforeach; endif; unset($_from); ?>
					</select>
					
					<input type="button" class="btn btn-info pull-center" onClick="Assign1();reassign(this.value);Assign();" value=">>">


					</div>
					<?php endif; ?>
					</div>
					</form>
					<div class="modal fade" id="requirement" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content" style="width:750px;">
        <div class="modal-header" style="background-color:#00CCFF;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">requirement</h4>
        </div>
		<div class="box-footer" align="right" style="margin-bottom:-55px; margin-right:50px;" >

		<input type="button" class="btn btn-info pull-center" onClick="assign_val();" value="submit">


					</div>
		<div id="standard_bar" style="width:600px;height:80px;border:solid 1px #cfcfcf;" align="left"></div>
		<div class="box-footer" align="right">

</div>
		<iframe height="490px" width="100%" id="Contact"  src="./enquiry_requirement.php" style="border:1px;"></iframe>
        <div class="modal-body">

        </div>

      </div>
    </div>
  </div>
  </div>
  </div>

				<div class="clear"></div>
				<?php if ($this->_tpl_vars['Edit']['assign_to'] == $this->_supers['session']['UserName'] && $this->_tpl_vars['Edit']['reassign'] == ""): ?>
				<div style="margin-top: 5px; margin-bottom: 10px;border: 0px;"><center>
				
							<?php if ($this->_tpl_vars['Edit']['enquiry_status'] == 'Open'): ?>
					<input type="button" class="btn  btn-danger btn-xs" value="Add Follow Ups" data-toggle="modal" data-target="#Follow" >&nbsp;&nbsp;
							<?php endif; ?>
							<?php if ($this->_tpl_vars['Edit']['enquiry_type'] == 'Sales' && $this->_tpl_vars['HideAdd2']['0']['sales_quote_no'] == ''): ?>
				<input type="button" class="btn  btn-danger btn-xs" value="Add Sales Quote" onClick="window.detail.location.reload();"  data-toggle="modal" data-target="#SalesAdd">&nbsp;&nbsp;
							<?php elseif ($this->_tpl_vars['Edit']['enquiry_type'] == 'Service' && $this->_tpl_vars['HideAdd3']['0']['service_quote_no'] == ''): ?>
							<input type="button" class="btn  btn-danger btn-xs" value="Add Service Quote" data-toggle="modal" data-target="#Service">&nbsp;&nbsp;
							<?php elseif ($this->_tpl_vars['Edit']['enquiry_type'] == 'Project' && $this->_tpl_vars['HideAdd']['0']['project_quote_no'] == ''): ?>
					<input type="button" class="btn  btn-danger btn-xs" value="Add Project Quote"  id="projectButton"data-toggle="modal" data-target="#Project">&nbsp;&nbsp;
							<?php endif; ?>
						  </center>
						  </div>
						  <?php endif; ?>
						  <?php endforeach; endif; unset($_from); ?>
<div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
				  <?php if ($this->_tpl_vars['Edit']['enquiry_type'] == 'Sales'): ?>
                  <li class="active"><a href="#sales" data-toggle="tab">Sales Quote</a></li>
				  <?php elseif ($this->_tpl_vars['Edit']['enquiry_type'] == 'Service'): ?>
				  <li class="active"><a href="#service" data-toggle="tab">Service Quote</a></li>
				  <?php elseif ($this->_tpl_vars['Edit']['enquiry_type'] == 'Project'): ?>
				  <li class="active"><a href="#contact" data-toggle="tab">Project Quote</a></li>
				  <?php endif; ?>
				  <li><a href="#follow" data-toggle="tab">Follow Ups</a></li>
                </ul>
                <div class="tab-content">
                  <!-- Font Awesome Icons -->


				<?php if ($this->_tpl_vars['Edit']['enquiry_type'] == 'Sales'): ?>
				 <div class="tab-pane active" id="sales">
				<form name="SalesList" id="SalesList" method="post">
                  <table id="example2" class="table table-bordered table-striped" style="font-size:13px; , Times, serif;">
                    <thead>
					<tr>
								<th><center>Sl.No</center></th>
								<th><center>Place Order</center></th>
								<th><center>Sales Quote No</center></th>
								<th><center>Revised Version</center> </th>
								<th><center>Contact Person</center></th>
								<th><center>Sub Total</center></th>
								<th><center>Vat Percentage</center></th>
								<th><center>Total</center></th>
								<th><center>Print</center></th>
								<th><center>Email</center></th>
								<th><center>Revise</center></th>
								<th><center>Action</center></th>
					</tr>
                    </thead>
                    <tbody>
					<input type="hidden" value="<?php echo $this->_tpl_vars['Edit']['enquiry_type']; ?>
" />
                     <?php $_from = $this->_tpl_vars['ListSale']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['listSales']):
?>
					<tr id="<?php echo $this->_tpl_vars['j']++; ?>
">
					<input type="hidden" value="<?php echo $this->_tpl_vars['listSales']['sl_no']; ?>
" />
					<input type="hidden" value="<?php echo $this->_tpl_vars['listSales']['customer_id']; ?>
" />
								<input type="hidden" value="<?php echo $this->_tpl_vars['listSales']['sales_quote_no']; ?>
" />
								<input type="hidden" value="<?php echo $this->_tpl_vars['listSales']['enquiry_id']; ?>
" />
								<input type="hidden" value="<?php echo $this->_tpl_vars['listSales']['revised_version']; ?>
" />

					<td align="center"><a href="#" data-toggle="modal" data-target="#ViewSales"><?php echo $this->_tpl_vars['j']; ?>
</a></td>
					<td align="center"><input type="checkbox" id="ch_box" name="ch_box" value=""></td>
					<td align="center"><a href="#" data-toggle="modal" data-target="#ViewSales<?php echo $this->_tpl_vars['listSales']['revised_version']; ?>
"><?php echo $this->_tpl_vars['listSales']['sales_quote_no']; ?>
</a></td>
					<td align="center"><a href="#" data-toggle="modal" data-target="#ViewSales<?php echo $this->_tpl_vars['listSales']['revised_version']; ?>
"><?php echo $this->_tpl_vars['listSales']['revised_version']; ?>
</a></td>
					<td align="center"><a href="#" data-toggle="modal" data-target="#ViewSales<?php echo $this->_tpl_vars['listSales']['revised_version']; ?>
"><?php echo $this->_tpl_vars['listSales']['customer_name']; ?>
</a></td>
					<td align="center"><a href="#" data-toggle="modal" data-target="#ViewSales<?php echo $this->_tpl_vars['listSales']['revised_version']; ?>
"><?php echo $this->_tpl_vars['listSales']['sub_total']; ?>
</a></td>
					<td align="center"><a href="#" data-toggle="modal" data-target="#ViewSales<?php echo $this->_tpl_vars['listSales']['revised_version']; ?>
"><?php echo $this->_tpl_vars['listSales']['vat_per']; ?>
</a></td>
					<td align="center"><a href="#" data-toggle="modal" data-target="#ViewSales<?php echo $this->_tpl_vars['listSales']['revised_version']; ?>
"><?php echo $this->_tpl_vars['listSales']['total']; ?>
</a></td>
          <td align="center"><a href="#" onClick="Javascript:SalPrint('<?php echo $this->_tpl_vars['listSales']['enquiry_id']; ?>
','<?php echo $this->_tpl_vars['listSales']['sales_quote_no']; ?>
','<?php echo $this->_tpl_vars['ListEdit']['0']['enquiry_type']; ?>
','<?php echo $this->_tpl_vars['listSales']['revised_version']; ?>
')" target="_blank"><i class="fa fa-print" ></i></a></td>
					<td align="center"><a href="#" data-toggle="modal" data-target="#SalesMail<?php echo $this->_tpl_vars['listSales']['customer_id']; ?>
" onClick="Popup();"><i class="fa fa-envelope"></i></a></td>
					<td align="center"><a href="#" data-toggle="modal" data-target="#RevSales<?php echo $this->_tpl_vars['listSales']['sales_quote_no']; ?>
" onClick="window.RDetail.location.reload();"><i class="fa fa-retweet"></i></a></td>
			  	<td align="center">&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" data-toggle="modal" data-target="#EditSales<?php echo $this->_tpl_vars['listSales']['revised_version']; ?>
" onClick="window.Edetail.location.reload();"><i class="fa fa-edit"></i></a>
					&nbsp;&nbsp; &nbsp;&nbsp;<a href="#" onClick="Javascript:salesdeleteCat('<?php echo $this->_tpl_vars['listSales']['sl_no']; ?>
','<?php echo $this->_tpl_vars['listSales']['sales_quote_no']; ?>
','<?php echo $this->_tpl_vars['listSales']['enquiry_id']; ?>
')"><i class="fa fa-trash"></i></a></td>
<!--****************************************Edit Sales********************************************************-->
						<div class="modal fade" id="EditSales<?php echo $this->_tpl_vars['listSales']['revised_version']; ?>
" role="dialog">
							<div class="modal-dialog">
							<!-- Modal content-->
							<div class="modal-content" style="width:700px;">
							<div class="modal-header" id="EditSalesHeader"  style="background-color:#00CCFF;">
							<button type="button" class="close" data-dismiss="modal" onClick="window.location.reload();">&times;</button>
							<h4 class="modal-title">Edit Sales</h4>
							</div>
									<iframe height="490px" width="100%" id="EditSales" name="Edetail"  src="./sale_edit.php?sales_quote_no=<?php echo $this->_tpl_vars['listSales']['sales_quote_no']; ?>
&revised_version=<?php echo $this->_tpl_vars['listSales']['revised_version']; ?>
" style="border:1px;"></iframe>
							</div>
							</div>
							</div>
<!--********************************************View sales detail**********************************************-->
							<div class="modal fade" id="ViewSales<?php echo $this->_tpl_vars['listSales']['revised_version']; ?>
" role="dialog">
							<div class="modal-dialog">
							<!-- Modal content-->
							<div class="modal-content" style="width:700px;">
							<div class="modal-header" id="ViewSalesUpHeader" style="background-color:#00CCFF;">
							<button type="button" class="close" data-dismiss="modal" onClick="window.location.reload();">&times;</button>
							<h4 class="modal-title">View Sales</h4>
							</div>
						<iframe height="490px" width="100%" id="ViewSales"  src="./sale_view.php?revised_version=<?php echo $this->_tpl_vars['listSales']['revised_version']; ?>
&sales_quote_no=<?php echo $this->_tpl_vars['listSales']['sales_quote_no']; ?>
" style="border:1px;"></iframe>
							</div>
							</div>
							</div>
<!--*******************************************Revise************************************************************************--->

							<div class="modal fade" id="RevSales<?php echo $this->_tpl_vars['listSales']['sales_quote_no']; ?>
" role="dialog">
							<div class="modal-dialog">
							<!-- Modal content-->
							<div class="modal-content" style="width:700px;">
							<div class="modal-header" id="ViewReviseSalesHeader" style="background-color:#00CCFF;">
							<button type="button" class="close" data-dismiss="modal" onClick="window.location.reload();">&times;</button>
							<h4 class="modal-title">Revise Sales</h4>
							</div>
									<iframe height="490px" width="100%" id="RevSales" name="RDetail"  src="./sale_revise.php?sales_quote_no=<?php echo $this->_tpl_vars['listSales']['sales_quote_no']; ?>
&revised_version=<?php echo $this->_tpl_vars['listSales']['revised_version']; ?>
" style="border:1px;"></iframe>
							</div>
							</div>
							</div>
<!--  *************************************************Mail********************************************************* -->
							<div class="modal fade" id="SalesMail<?php echo $this->_tpl_vars['listSales']['customer_id']; ?>
" role="dialog" style="top: 10px; left: -280px;">
							<div class="modal-dialog">
							<!-- Modal content-->
							<div class="modal-content" style="width:1100px;">
							<div class="modal-header" style="background-color:#00CCFF;">
							<button type="button" class="close" data-dismiss="modal" onClick="window.location.reload();">&times;</button>
							<h4 class="modal-title">Send Mail</h4>
							</div>
									<iframe height="850px" width="100%" align="left" id="SalesMail"  src="./sales_mail.php?enquiry_id=<?php echo $this->_tpl_vars['listSales']['enquiry_id']; ?>
&enquiry_type=<?php echo $this->_tpl_vars['Edit']['enquiry_type']; ?>
&customer_id=<?php echo $this->_tpl_vars['listSales']['customer_id']; ?>
" style="border:1px;"></iframe>
							</div>
							</div>
							</div>
                    </tr>
					  <?php endforeach; else: ?>
					<tr>
								<td height="20" colspan="12" align="center"><img src="images/warning.gif" border="0">&nbsp;No Records Found</td>
					</tr>
					<?php endif; unset($_from); ?>
					</tbody>
                    </tfoot>
                  </table>
				 </form>
				 </div>
<?php echo '
    <script>
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
	  function Popup()
		{
    		document.getElementById(\'SalesMail\').contentDocument.location.reload(true);
		}

  function salesdeleteCat(CatIdent,CusIdent,EnqIdent){
  var enq_id = btoa(EnqIdent);
  if(confirm("Are you sure to Delete this Content?")){
  FormName		= document.SalesList;
  FormName.action= "enquiry_detail_view.php?sl_no="+CatIdent+"&sales_quote_no="+CusIdent+"&enq_id="+enq_id;
  FormName.submit();
 }
 }

  function SalPrint(CatIdent,SalId,EnqType,RevNo) {
  var enq_id = btoa(CatIdent);
  var sale_no = btoa(SalId);
  var enq_type = btoa(EnqType);
  var rev_no = btoa(RevNo);
  FormName		= document.SalesList;
  FormName.action =\'sales_print.php?enquiry_id=\'+enq_id+"&sales_quote_no="+sale_no+"&enquiry_type="+enq_type+"&revised_version="+rev_no;
  FormName.submit();

 }

    </script>
	'; ?>


				  <?php elseif ($this->_tpl_vars['Edit']['enquiry_type'] == 'Service'): ?>
				 <div class="tab-pane active" id="service">
				<form name="ServiceList" id="ServiceList" method="post">

                  <table id="example2" class="table table-bordered table-striped" style="font-size:13px; , Times, serif;">
                    <thead>
					<tr>
								<th><center>Sl.No</center></th>
								<th><center>Place Order</center> </th>
								<th><center>Service Quote No</center></th>
								<th><center>Revised Version</center></th>
								<th><center>Sub Total</center></th>
								<th><center>Tot Material</center></th>
								<th><center>Tot Labour</center></th>
								<th><center>Total</center></th>
								<th><center>Print</center></th>
								<th><center>Email</center></th>
								<th><center>Revise</center></th>
								<th><center>Action</center></th>
					</tr>
                    </thead>
                    <tbody>
					<input type="hidden" value="<?php echo $this->_tpl_vars['Edit']['enquiry_type']; ?>
"/>
                     <?php $_from = $this->_tpl_vars['ListServ']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['serviceList']):
?>
					<tr id="<?php echo $this->_tpl_vars['k']++; ?>
">
					<input type="hidden" value="<?php echo $this->_tpl_vars['serviceList']['sl_no']; ?>
"/>
					<input type="hidden" value="<?php echo $this->_tpl_vars['serviceList']['service_quote_no']; ?>
"/>
					<input type="hidden" value="<?php echo $this->_tpl_vars['serviceList']['enquiry_id']; ?>
"/>
					<input type="hidden" value="<?php echo $this->_tpl_vars['serviceList']['revised_version']; ?>
"/>

							<td align="center"><a href="#" data-toggle="modal" data-target="#ViewService<?php echo $this->_tpl_vars['serviceList']['revised_version']; ?>
"><?php echo $this->_tpl_vars['k']; ?>
</a></td>
							<td align="center"><input type="checkbox" id="ch_box1" name="ch_box1" value=""></td>
							<td align="center"><a href="#" data-toggle="modal" data-target="#ViewService<?php echo $this->_tpl_vars['serviceList']['revised_version']; ?>
"><?php echo $this->_tpl_vars['serviceList']['service_quote_no']; ?>
</a></td>
							<td align="center"><a href="#" data-toggle="modal" data-target="#ViewService<?php echo $this->_tpl_vars['serviceList']['revised_version']; ?>
"><?php echo $this->_tpl_vars['serviceList']['revised_version']; ?>
</a></td>
							<td align="center"><a href="#" data-toggle="modal" data-target="#ViewService<?php echo $this->_tpl_vars['serviceList']['revised_version']; ?>
"><?php echo $this->_tpl_vars['serviceList']['sub_total']; ?>
</a></td>
							<td align="center"><a href="#" data-toggle="modal" data-target="#ViewService<?php echo $this->_tpl_vars['serviceList']['revised_version']; ?>
"><?php echo $this->_tpl_vars['ListSer2']['0']['total_material']; ?>
</a></td>
							<td align="center"><a href="#" data-toggle="modal" data-target="#ViewService<?php echo $this->_tpl_vars['serviceList']['revised_version']; ?>
"><?php echo $this->_tpl_vars['ListSer2']['0']['total_labour']; ?>
</a></td>
							<td align="center"><a href="#" data-toggle="modal" data-target="#ViewService<?php echo $this->_tpl_vars['serviceList']['revised_version']; ?>
"><?php echo $this->_tpl_vars['serviceList']['total']; ?>
</a></td>
							<td align="center"><a href="" onClick="Javascript:SerPrint('<?php echo $this->_tpl_vars['serviceList']['enquiry_id']; ?>
','<?php echo $this->_tpl_vars['serviceList']['service_quote_no']; ?>
','<?php echo $this->_tpl_vars['ListEdit']['0']['enquiry_type']; ?>
','<?php echo $this->_tpl_vars['serviceList']['revised_version']; ?>
')" target="_blank"><i class="fa fa-print"></i></a></td>

							<td align="center"><a href="#" data-toggle="modal" data-target="#serviceMail<?php echo $this->_tpl_vars['serviceList']['customer_id']; ?>
" onClick="up();"><i class="fa fa-envelope"></i></a></td>
							<td align="center"><a href="#" data-toggle="modal" data-target="#ServiceRevise<?php echo $this->_tpl_vars['serviceList']['service_quote_no']; ?>
"><i class="fa fa-retweet"></i></a></td>
				<td align="center">&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" data-toggle="modal" data-target="#EditService<?php echo $this->_tpl_vars['serviceList']['revised_version']; ?>
"><i class="fa fa-edit"></i></a>
&nbsp;&nbsp; &nbsp;&nbsp;<a href="#" onClick="Javascript:servicedeleteCat1('<?php echo $this->_tpl_vars['serviceList']['service_quote_no']; ?>
','<?php echo $this->_tpl_vars['serviceList']['sl_no']; ?>
','<?php echo $this->_tpl_vars['serviceList']['enquiry_id']; ?>
')"><i class="fa fa-trash"></i></a></td>

						<div class="modal fade" id="EditService<?php echo $this->_tpl_vars['serviceList']['revised_version']; ?>
" role="dialog">
							<div class="modal-dialog">
							<!-- Modal content-->
							<div class="modal-content" style="width:700px;">
							<div class="modal-header" id="ServiceEditHeader" style="background-color:#00CCFF;">
							<button type="button" class="close" data-dismiss="modal" onClick="window.location.reload();">&times;</button>
							<h4 class="modal-title">Edit Service</h4>
							</div>
								<iframe height="490px" width="100%" id="EditService"  src="./service_edit.php?service_quote_no=<?php echo $this->_tpl_vars['serviceList']['service_quote_no']; ?>
&revised_version=<?php echo $this->_tpl_vars['serviceList']['revised_version']; ?>
" style="border:1px;"></iframe>
							</div>
							</div>
							</div>
							<!--View service details -->
<div class="modal fade" id="ViewService<?php echo $this->_tpl_vars['serviceList']['revised_version']; ?>
" role="dialog">
							<div class="modal-dialog">
							<!-- Modal content-->
							<div class="modal-content" style="width:700px;">
							<div class="modal-header" style="background-color:#00CCFF;">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title">View Service</h4>
							</div>
									<iframe height="490px" width="100%" id="ViewService"  src="./service_view.php?revised_version=<?php echo $this->_tpl_vars['serviceList']['revised_version']; ?>
&service_quote_no=<?php echo $this->_tpl_vars['serviceList']['service_quote_no']; ?>
" style="border:1px;"></iframe>
							</div>
							</div>
							</div>
							<!--         Revise Service           -->
							<div class="modal fade" id="ServiceRevise<?php echo $this->_tpl_vars['serviceList']['service_quote_no']; ?>
" role="dialog">
							<div class="modal-dialog">
							<!-- Modal content-->
							<div class="modal-content" style="width:700px;">
							<div class="modal-header" id="ServiceReviseHeader" style="background-color:#00CCFF;">
							<button type="button" class="close" data-dismiss="modal" onClick="window.location.reload();">&times;</button>
							<h4 class="modal-title">Service Quote Revise</h4>
							</div>
									<iframe height="490px" width="100%" id="ServiceRevise"  src="./service_revise.php?service_quote_no=<?php echo $this->_tpl_vars['serviceList']['service_quote_no']; ?>
&revised_version=<?php echo $this->_tpl_vars['serviceList']['revised_version']; ?>
" style="border:1px;"></iframe>
							</div>
							</div>
							</div>
						<!--    Mail  -->
							<div class="modal fade" id="serviceMail<?php echo $this->_tpl_vars['serviceList']['customer_id']; ?>
" role="dialog" style=" top: 10px; left: -280px;">
							<div class="modal-dialog">
							<!-- Modal content-->
							<div class="modal-content" style="width:1100px;">
							<div class="modal-header" id="ServiceMailHeader" style="background-color:#00CCFF;">
							<button type="button" class="close" data-dismiss="modal" onClick="window.location.reload();">&times;</button>
							<h4 class="modal-title">Send Mail</h4>
							</div>
									<iframe height="850px" align="left" width="100%" id="serviceMail"  src="./service_mail.php?customer_id=<?php echo $this->_tpl_vars['serviceList']['customer_id']; ?>
&enquiry_id=<?php echo $this->_tpl_vars['serviceList']['enquiry_id']; ?>
&enquiry_type=<?php echo $this->_tpl_vars['Edit']['enquiry_type']; ?>
" style="border:1px;"></iframe>
							</div>
							</div>
							</div>

                    </tr>

					  <?php endforeach; else: ?>
					<tr>
								<td height="20" colspan="12" align="center"><img src="images/warning.gif" border="0">&nbsp;No Records Found</td>
					</tr>
					<?php endif; unset($_from); ?>
					</tbody>
                    </tfoot>
                  </table>
				 </form>
				 </div>


<?php echo '
<script>
function servicedeleteCat1(CusIdent,ServIdent,EnqIdent){
var enq_id = btoa(EnqIdent);
  if(confirm("Are you sure to Delete this Content?")){
  FormName		= document.ServiceList;
  FormName.action= "enquiry_detail_view.php?service_quote_no="+CusIdent+"&sl_no="+ServIdent+"&enq_id="+enq_id;
  FormName.submit();
 }
 }

  function SerPrint(CatIdent,SalId,EnqType,RevNo) {
  var enq_id = btoa(CatIdent);
  var serv_no = btoa(SalId);
  var enq_type = btoa(EnqType);
  var rev_no = btoa(RevNo);
  FormName		= document.ServiceList;
  FormName.action =\'service_print.php?enquiry_id=\'+enq_id+"&service_quote_no="+serv_no+"&enquiry_type="+enq_type+"&revised_version="+rev_no;
  FormName.submit();

 }
function up()
		{
    		document.getElementById(\'serviceMail\').contentDocument.location.reload(true);
		}

</script>

    <script>
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

     </script>
	'; ?>


				 <?php elseif ($this->_tpl_vars['Edit']['enquiry_type'] == 'Project'): ?>
				 <div class="tab-pane active" id="contact">
				<form name="ProjectList" id="ProjectList" method="post">
                  <table id="example2" class="table table-bordered table-striped" style="font-size:13px; , Times, serif;">
                    <thead>
					<tr>
								<th><center>Sl No</center></th>
								<th><center>Place Order</center></th>
					            <th><center>Project Quote No</center></th>
								<th><center>Revised Version</center></th>
								<th><center>Sub Total</center></th>
								<th><center>Material Tax</center></th>
								<th><center>Labour Tax</center></th>
								<th><center>Total</center></th>
								<th><center>Print</center></th>
								<th><center>Email</center></th>
								<th><center>Revise</center></th>
								<th><center>Action</center></th>
					</tr>
                    </thead>
                    <tbody>
						<input type="hidden" value="<?php echo $this->_tpl_vars['Edit']['enquiry_type']; ?>
"/>
                     <?php $_from = $this->_tpl_vars['ListProj']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['view']):
?>
					<tr id="<?php echo $this->_tpl_vars['l']++; ?>
">
					<input type="hidden" value="<?php echo $this->_tpl_vars['view']['sl_no']; ?>
" />
					<input type="hidden" id="pNO" name="pNo" value="<?php echo $this->_tpl_vars['view']['project_quote_no']; ?>
"/>
					<input type="hidden"  value="<?php echo $this->_tpl_vars['view']['enquiry_id']; ?>
"/>
					<input type="hidden" id="customer_id" name="customer_id" value="<?php echo $this->_tpl_vars['view']['customer_id']; ?>
"/>
					<input type="hidden" value="<?php echo $this->_tpl_vars['ListView']['0']['enquiry_type']; ?>
"/>
					<input type="hidden" value="<?php echo $this->_tpl_vars['ListProj2']['0']['sl_no']; ?>
"/>
								<td align="center"><a href="#" data-toggle="modal" data-target="#ViewProject<?php echo $this->_tpl_vars['view']['revised_version']; ?>
"><?php echo $this->_tpl_vars['l']; ?>
</a></td>
								<td align="center"><input type="checkbox" id="ch_box2" name="ch_box2" value=""></td>
								<td align="center"><a href="#" data-toggle="modal" data-target="#ViewProject<?php echo $this->_tpl_vars['view']['revised_version']; ?>
"><?php echo $this->_tpl_vars['view']['project_quote_no']; ?>
</a></td>
								<td align="center"><a href="#" data-toggle="modal" data-target="#ViewProject<?php echo $this->_tpl_vars['view']['revised_version']; ?>
"><?php echo $this->_tpl_vars['view']['revised_version']; ?>
</a></td>
								<td align="center"><a href="#" data-toggle="modal" data-target="#ViewProject<?php echo $this->_tpl_vars['view']['revised_version']; ?>
"><?php echo $this->_tpl_vars['view']['sub_total']; ?>
</a></td>
								<td align="center"><a href="#" data-toggle="modal" data-target="#ViewProject<?php echo $this->_tpl_vars['view']['revised_version']; ?>
"><?php echo $this->_tpl_vars['ListProj2']['0']['material_tax_value']; ?>
</a></td>
								<td align="center"><a href="#" data-toggle="modal" data-target="#ViewProject<?php echo $this->_tpl_vars['view']['revised_version']; ?>
"><?php echo $this->_tpl_vars['ListProj2']['0']['labour_tax_value']; ?>
</a></td>
								<td align="center"><a href="#" data-toggle="modal" data-target="#ViewProject<?php echo $this->_tpl_vars['view']['revised_version']; ?>
"><?php echo $this->_tpl_vars['view']['total']; ?>
</a></td>
			<td align="center"><a href="#" onClick="Javascript:ProjPrint('<?php echo $this->_tpl_vars['view']['enquiry_id']; ?>
','<?php echo $this->_tpl_vars['view']['project_quote_no']; ?>
','<?php echo $this->_tpl_vars['ListEdit']['0']['enquiry_type']; ?>
','<?php echo $this->_tpl_vars['view']['revised_version']; ?>
')" target="_blank"><i class="fa fa-print" ></i></a></td>

								<td align="center"><a href="#" data-toggle="modal" data-target="#projectMail<?php echo $this->_tpl_vars['view']['customer_id']; ?>
" onClick="Pop();"><i class="fa fa-envelope"></i></a></td>
								<td align="center"><a href="#" data-toggle="modal" data-target="#projectRevise<?php echo $this->_tpl_vars['view']['project_quote_no']; ?>
"><i class="fa fa-retweet"></i></a></td>
								<td align="center">&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" data-toggle="modal" data-target="#EditProject<?php echo $this->_tpl_vars['view']['revised_version']; ?>
"><i class="fa fa-edit"></i></a>
						&nbsp;&nbsp; &nbsp;&nbsp;<a href="#" onClick="Javascript:projectdeleteCat('<?php echo $this->_tpl_vars['view']['sl_no']; ?>
','<?php echo $this->_tpl_vars['view']['project_quote_no']; ?>
','<?php echo $this->_tpl_vars['view']['enquiry_id']; ?>
')"><i class="fa fa-trash"></i></a></td>

<!--/*****************************************************************************************************************-->

	<div class="modal fade" id="projectRevise<?php echo $this->_tpl_vars['view']['project_quote_no']; ?>
" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content" style="width:765px;">
        <div class="modal-header" id="ProjectReviseHeader" style="background-color:#00CCFF;">
          <button type="button" class="close" data-dismiss="modal" onClick="window.location.reload();">&times;</button>
          <h4 class="modal-title">Add Project Revise</h4>
        </div>
	<iframe height="490px" width="100%" id="projectRevise"  src="./project_revise_quote.php?project_quote_no=<?php echo $this->_tpl_vars['view']['project_quote_no']; ?>
&revised_version=<?php echo $this->_tpl_vars['view']['revised_version']; ?>
" style="border:1px;"></iframe>
		</div>
		</div>
		</div>
<!---/***********************************************************************************************************************-->
	<div class="modal fade" id="EditProject<?php echo $this->_tpl_vars['view']['revised_version']; ?>
" role="dialog">
							<div class="modal-dialog">
							<!-- Modal content-->
							<div class="modal-content" style="width:700px;">
							<div class="modal-header" id="ProjectEditHeader" style="background-color:#00CCFF;">
							<button type="button" class="close" data-dismiss="modal" onClick="window.location.reload();">&times;</button>
							<h4 class="modal-title">Edit Project</h4>
							</div>
									<iframe height="490px" width="100%" id="EditProject"  src="./project_quote_edit.php?project_quote_no=<?php echo $this->_tpl_vars['view']['project_quote_no']; ?>
&revised_version=<?php echo $this->_tpl_vars['view']['revised_version']; ?>
" style="border:1px;"></iframe>
							</div>
							</div>
							</div>

<!--******************************************************MAil Project***********************************************-->
		<div class="modal fade" id="projectMail<?php echo $this->_tpl_vars['view']['customer_id']; ?>
" role="dialog" style=" top:10px; left:-280px;">
							<div class="modal-dialog">
							<!-- Modal content-->
							<div class="modal-content" style="width:1100px;">
							<div class="modal-header" id="ProjectMailHeader" style="background-color:#00CCFF;">
							<button type="button" class="close" data-dismiss="modal" onClick="window.location.reload();">&times;</button>
							<h4 class="modal-title">Send Mail</h4>
							</div>
									<iframe height="850px"  align="left" width="100%" id="projectMail"  src="./project_mail.php?customer_id=<?php echo $this->_tpl_vars['view']['customer_id']; ?>
&enquiry_type=<?php echo $this->_tpl_vars['Edit']['enquiry_type']; ?>
&enquiry_id=<?php echo $this->_tpl_vars['view']['enquiry_id']; ?>
" style="border:1px;"></iframe>
							</div>
							</div>
							</div>
	<!--**************************************View Project****************************************************-->

		<div class="modal fade" id="ViewProject<?php echo $this->_tpl_vars['view']['revised_version']; ?>
" role="dialog">
							<div class="modal-dialog">
							<!-- Modal content-->
							<div class="modal-content" style="width:700px;">
							<div class="modal-header" style="background-color:#00CCFF;">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title">View Project</h4>
							</div>
							<iframe height="490px" width="100%" id="ViewProject"  src="./project_view.php?revised_version=<?php echo $this->_tpl_vars['view']['revised_version']; ?>
&project_quote_no=<?php echo $this->_tpl_vars['view']['project_quote_no']; ?>
" style="border:1px;"></iframe>
							</div>
							</div>
							</div>
                    </tr>


					  <?php endforeach; else: ?>
					<tr>
								<td height="20" colspan="12" align="center"><img src="images/warning.gif" border="0">&nbsp;No Records Found</td>
					</tr>
					<?php endif; unset($_from); ?>
					</tbody>
                    </tfoot>

                  </table>

				 </form>
				 </div>
<?php echo '

    <script>
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
	  function Pop()
		{
    		document.getElementById(\'projectMail\').contentDocument.location.reload(true);
		}

  function projectdeleteCat(CatIdent,CusIdent,EnqIdent){
  var enq_id = btoa(EnqIdent);
  if(confirm("Are you sure to Delete this Content?")){
  FormName		= document.ProjectList;
  FormName.action= "enquiry_detail_view.php?sl_no="+CatIdent+"&project_quote_no="+CusIdent+"&enq_id="+enq_id;
  FormName.submit();
 }
 }
 function ProjPrint(CatIdent,ProjId,EnqType,RevNo) {
  var enq_id = btoa(CatIdent);
  var proj_no = btoa(ProjId);
  var enq_type = btoa(EnqType);
  var rev_no = btoa(RevNo);
  FormName		= document.ProjectList;
  FormName.action =\'project_print.php?enquiry_id=\'+enq_id+"&project_quote_no="+proj_no+"&enquiry_type="+enq_type+"&revised_version="+rev_no;
  FormName.submit();

 }

    </script>
	<script type="text/javascript">
 function dynInput(cbox) {
  if (cbox.checked) {
    var input = document.getElementById("check1").value;
    input.type = "textarea";
    var div = document..getElementById("check1").value;
    div.id = cbox.value;
    div.innerHTML = document.getElementById("check1").value + cbox.value;
	// div.innerHTML = document.getElementById("check2").value + cbox.name;
    div.appendChild(input);
    document.getElementById("check1").appendChild(div);
  } else {
    document.getElementById(cbox.value).remove();
  }
}

</script>
	'; ?>

			<?php endif; ?>

	<div class="modal fade" id="SalesAdd" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content" style="width:765px;">
        <div class="modal-header" style="background-color:#00CCFF;" id="salesHeader">
          <button type="button" class="close" data-dismiss="modal" onClick="window.location.reload();">&times;</button>
          <h4 class="modal-title">Add Sales</h4>
        </div>
	<iframe height="490px" name="detail" width="100%" id="SalesAdd"  src="./Sales.php?enquiry_id=<?php echo $this->_supers['get']['enquiry_id']; ?>
" style="border:1px;" ></iframe>
		</div>
		</div>
		</div>

	<div class="modal fade" id="Service" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content" style="width:705px;">
        <div class="modal-header" style="background-color:#00CCFF;"  id="serviceHeader">
          <button type="button" class="close" data-dismiss="modal" onClick="window.location.reload();">&times;</button>
          <h4 class="modal-title">Add Service Quote</h4>
        </div>
        	<iframe height="540px" width="100%" id="Service"  src="./Service.php?enquiry_id=<?php echo $this->_supers['get']['enquiry_id']; ?>
" style="border:1px;"></iframe>

		</div>
		</div>
		</div>

<div class="modal fade" id="Project" role="dialog">
		<div class="modal-dialog">
		<!-- Modal content-->
			<div class="modal-content" style="width:705px;">
				<div class="modal-header" style="background-color:#00CCFF;" id="projectHeader">
					<button type="button" class="close" data-dismiss="modal" onClick="window.location.reload();">&times;</button>

					<h4 class="modal-title">Add Project</h4>
				</div>
					<iframe height="540px" width="100%" id="Project"  src="./project.php?enquiry_id=<?php echo $this->_supers['get']['enquiry_id']; ?>
" style="border:1px;"></iframe>

			</div>
		</div>
	</div>

	<div class="modal fade" id="Follow" role="dialog">
		<div class="modal-dialog">

			<div class="modal-content" style="width:765px;">
				<div class="modal-header" style="background-color:#00CCFF;">
					<button type="button" class="close" data-dismiss="modal" onClick="window.location.reload();">&times;</button>
					<h4 class="modal-title">Add Follow Ups</h4>
				</div>
					<iframe height="490px" width="100%" id="Follow"  src="./enfollow.php?enquiry_id=<?php echo $this->_supers['get']['enquiry_id']; ?>
" style="border:1px;"></iframe>
			</div>
		</div>
	</div>


					<div class="tab-pane" id="follow">
                    <form name="FollowList" id="FollowList" method="post">
                  <table id="example1" class="table table-bordered table-striped" style="font-size:13px; , Times, serif;">

                    <thead>
                      <tr>
					 <!-- <th>S No</th>-->
					  <th><center>Sl.No</center></th>
						<th><center>Enquiry Status</center></th>
						
            <th><center>Last Touch Point<!--&amp;Time--></center></th>
						<th><center>Closed Date<!--&amp;Time--></center></th>
            <th><center>Created By</center></th>
						<th><center>Timestamp Value</center></th>
						<th><center>Assign To</center></th>
            <th><center>Re Assign</center></th>
						<th><center>Action</center></th>

                      </tr>

                    </thead>
                    <tbody>
					<?php $_from = $this->_tpl_vars['ListView2']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['Contact']):
?>

					<tr id="<?php echo $this->_tpl_vars['i']++; ?>
">
								<input type="hidden" value="<?php echo $this->_tpl_vars['Contact']['sl_no']; ?>
" />
								<input type="hidden" value="<?php echo $this->_tpl_vars['Contact']['customer_id']; ?>
" />
								<input type="hidden" value="<?php echo $this->_tpl_vars['Contact']['enquiry_id']; ?>
" />

										<td align="center"><a href="#" data-toggle="modal" data-target="#ViewContact<?php echo $this->_tpl_vars['Contact']['sl_no']; ?>
"><?php echo $this->_tpl_vars['i']; ?>
</a></td>
										<td align="center"><a href="#" data-toggle="modal" data-target="#ViewContact<?php echo $this->_tpl_vars['Contact']['sl_no']; ?>
"><?php if ($this->_tpl_vars['Contact']['enquiry_status'] == 'Open' && $this->_tpl_vars['Contact']['open_status'] == ""): ?><?php echo $this->_tpl_vars['Contact']['enquiry_status']; ?>
<?php elseif ($this->_tpl_vars['Contact']['enquiry_status'] == 'Open' && $this->_tpl_vars['Contact']['open_status'] != ""): ?><?php echo $this->_tpl_vars['Contact']['enquiry_status']; ?>
-<?php echo $this->_tpl_vars['Contact']['open_status']; ?>
<?php elseif ($this->_tpl_vars['Contact']['enquiry_status'] != 'Open'): ?><?php echo $this->_tpl_vars['Contact']['enquiry_status']; ?>
<?php endif; ?></a></td>
									

										<td align="center"><a href="#" data-toggle="modal" data-target="#ViewContact<?php echo $this->_tpl_vars['Contact']['sl_no']; ?>
"><?php if ($this->_tpl_vars['Contact']['snooze_date'] == '0000-00-00'): ?> NA <?php elseif ($this->_tpl_vars['Contact']['snooze_date'] != '0000-00-00'): ?><?php echo $this->_tpl_vars['Contact']['snooze_date']; ?>
<?php endif; ?> <!--&nbsp;&nbsp;<?php if ($this->_tpl_vars['Contact']['snooze_time'] == '00:00:00'): ?> NA <?php elseif ($this->_tpl_vars['Contact']['snooze_time'] != '00:00:00'): ?><?php echo $this->_tpl_vars['Contact']['snooze_time']; ?>
<?php endif; ?>--></a></td>
										<td align="center"><a href="#" data-toggle="modal" data-target="#ViewContact<?php echo $this->_tpl_vars['Contact']['sl_no']; ?>
"><?php if ($this->_tpl_vars['Contact']['closed_date'] == '0000-00-00'): ?> NA <?php elseif ($this->_tpl_vars['Contact']['closed_date'] != '0000-00-00'): ?><?php echo $this->_tpl_vars['Contact']['closed_date']; ?>
<?php endif; ?><!--&nbsp;&nbsp;<?php if ($this->_tpl_vars['Contact']['closed_time'] == '00:00:00'): ?> NA <?php elseif ($this->_tpl_vars['Contact']['closed_time'] != '00:00:00'): ?><?php echo $this->_tpl_vars['Contact']['closed_time']; ?>
<?php endif; ?>--></a></td>
										<td align="center"><a href="#" data-toggle="modal" data-target="#ViewContact<?php echo $this->_tpl_vars['Contact']['sl_no']; ?>
"><?php echo $this->_tpl_vars['Contact']['created_by']; ?>
</a></td>
										<td align="center"><a href="#" data-toggle="modal" data-target="#ViewContact<?php echo $this->_tpl_vars['Contact']['sl_no']; ?>
"><?php echo $this->_tpl_vars['Contact']['timestamp_value']; ?>
</a></td>
										<td align="center"><a href="#" data-toggle="modal" data-target="#ViewContact<?php echo $this->_tpl_vars['Contact']['sl_no']; ?>
"><?php echo $this->_tpl_vars['Contact']['assign_to']; ?>
</a></td>
										<td align="center"><a href="#" data-toggle="modal" data-target="#ViewContact<?php echo $this->_tpl_vars['Contact']['sl_no']; ?>
"><?php echo $this->_tpl_vars['Contact']['reassign']; ?>
</a></td>
										<td align="center">

					 <a href="#" onClick="Javascript:deleteCat('<?php echo $this->_tpl_vars['Contact']['sl_no']; ?>
','<?php echo $this->_tpl_vars['Contact']['enquiry_id']; ?>
')"><i class="fa fa-trash"></i></a></td>

					  <div class="modal fade" id="ViewContact<?php echo $this->_tpl_vars['Contact']['sl_no']; ?>
" role="dialog">
							<div class="modal-dialog">
							<!-- Modal content-->
							<div class="modal-content" style="width:700px;">
							<div class="modal-header" id="ViewFollowUpHeader" style="background-color:#00CCFF;">
							<button type="button" class="close" data-dismiss="modal" onClick="window.location.reload();">&times;</button>
							<h4 class="modal-title">View Follow Up</h4>
							</div>
								<iframe height="490px" width="100%" id="ViewContact"  src="./cus_view.php?sl_no=<?php echo $this->_tpl_vars['Contact']['sl_no']; ?>
" style="border:1px;"></iframe>
							</div>
							</div>
							</div>
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
				   </div><!-- /.tab-content -->
<?php echo '
    <script>
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

  function deleteCat(FolIdent1,UPIdent){
  var enq_id = btoa(UPIdent);
  if(confirm("Are you sure to Delete this Content?")){
  FormName		= document.FollowList;
  FormName.action= "enquiry_detail_view.php?sl_no="+FolIdent1+"&enquiry_id="+enq_id;
  FormName.submit();
 }
 }

     </script>
	'; ?>

            </div>
			</div>
			</div>


			</div>    <!-- /.box-header -->

			</div>     <!-- /.box  -->
             <!-- /.col -->
           <!-- /.row -->
        </section><!-- /.content -->
		</div>
      <!-- /.content-wrapper -->

     <div class="control-sidebar-bg"></div>
<?php echo '
    <script>
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

    </script>
	'; ?>

	</body>
    </html>