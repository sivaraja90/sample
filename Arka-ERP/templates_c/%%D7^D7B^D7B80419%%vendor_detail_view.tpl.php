<?php /* Smarty version 2.6.25, created on 2016-07-30 16:56:49
         compiled from vendor_detail_view.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "left.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php echo '
	<script type="text/javascript" src=\'./dhtmlxMessage/codebase/dhtmlxmessage.js\'></script>
	<script type=\'text/javascript\' src=\'./auto-complete/jquery.metadata.js\'></script>
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
label.font
{
font-weight: normal;
}
</style>
'; ?>

 <body class="hold-transition skin-blue sidebar-mini">
  <div class="content-wrapper">
	<section class="content-header">
          <h4>
            <small class="active"><a href="vendor_list.php"><i class="fa fa-list"> <label class="font" style="font-family:Arial, Helvetica, sans-serif">
List Vendors</label></i></a></small>&ensp;&ensp;&ensp;
            <small><a href="vendor_reg.php"><i class="fa fa-user-plus"> <label class="font" style="font-family:Arial, Helvetica, sans-serif">
Create Vendor</label></i></a></small>
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
				<?php $_from = $this->_tpl_vars['ListViewinfo']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['View']):
?>
				<table width="113%">
				<tr>
				 <td>Created:<?php echo $this->_tpl_vars['View']['created_date']; ?>
&nbsp;&nbsp;<?php echo $this->_tpl_vars['View']['created_time']; ?>
</td>
                  <td><!--<h4 class="box-title">&nbsp;&nbsp;&nbsp;&nbsp;Vendor Detailed View</h4>-->
				 <h4><?php echo $this->_tpl_vars['View']['vendor_company_name']; ?>
&nbsp;[<?php echo $this->_tpl_vars['View']['vendor_id']; ?>
]</h4></td>
				<td style="margin-left:-1000px;"> Modified:<?php echo $this->_tpl_vars['Date_Stamp']['0']['Date']; ?>
&nbsp;&nbsp;<?php echo $this->_tpl_vars['Time_Stamp']['0']['Time']; ?>
</td>
				</tr>
				</table>
				<?php endforeach; endif; unset($_from); ?>
				</div>

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
		 <form class="form-horizontal">
                  <div class="box-body">
				  <?php $_from = $this->_tpl_vars['ListViews']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['View']):
?>
				  	<div class="col-md-6">
					<?php if ($this->_tpl_vars['View']['tin_no'] != "" && $this->_tpl_vars['View']['tin_no'] != '0'): ?>
                    <div class="form-group">
                      <label class="col-sm-4 thick">Tin No</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" id="tin_no" value="<?php echo $this->_tpl_vars['View']['tin_no']; ?>
" placeholder="Tin No" readonly="true">
                      </div>
                    </div>
					<?php endif; ?>
					</div>
					<div class="col-md-6">
					<?php if ($this->_tpl_vars['View']['cst_no'] != "" && $this->_tpl_vars['View']['cst_no'] != '0'): ?>
					 <div class="form-group">
                      <label class="col-sm-4 thick">CST No</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" id="cst_no" value="<?php echo $this->_tpl_vars['View']['cst_no']; ?>
" placeholder="CST No " readonly="true">
                      </div>
                    </div>
					<?php endif; ?>
					</div>
					<?php endforeach; endif; unset($_from); ?>
					</div>
					</form>

				<div class="clear"></div>
				<div style="margin-top: 10px; margin-bottom: 10px;border: 0px;"><center>
						  <input type="button" class="btn  btn-danger btn-xs" value="Add Contact" data-toggle="modal" data-target="#Contact">&nbsp;&nbsp;
						  <input type="button" class="btn  btn-danger btn-xs" value="Add Address" data-toggle="modal" data-target="#Address">&nbsp;&nbsp;
						  <input type="button" class="btn  btn-danger btn-xs" value="Add Bank" data-toggle="modal" data-target="#Bank">&nbsp;&nbsp;
						  </center>
						  </div>

<!--*************************************************Add Contact***********************************************************-->
							<div class="modal fade" id="Contact" role="dialog">
							<div class="modal-dialog">
							<!-- Modal content-->
							<div class="modal-content" style="width:700px;">
							<div class="modal-header" id="VendorAddContactHeader" style="background-color:#00CCFF;">
							<button type="button" class="close" data-dismiss="modal" onClick="window.location.reload();">&times;</button>
							<h4 class="modal-title">Add Contact</h4>
							</div>
									<iframe height="490px" width="100%" id="Contact"  src="./vendor_contact.php?vendor_id=<?php echo $this->_tpl_vars['View']['vendor_id']; ?>
" style="border:1px;"></iframe>
							</div>
							</div>
							</div>
<!--*************************************************Add Address***********************************************************-->
							<div class="modal fade" id="Address" role="dialog">
							<div class="modal-dialog">
							<!-- Modal content-->
							<div class="modal-content" style="width:700px;">
							<div class="modal-header" VendorAddAddressHeader style="background-color:#00CCFF;">
							<button type="button" class="close" data-dismiss="modal" onClick="window.location.reload();">&times;</button>
							<h4 class="modal-title">Add Address</h4>
							</div>
									<iframe height="490px" width="100%" id="Address"  src="./vendor_address.php?vendor_id=<?php echo $this->_tpl_vars['View']['vendor_id']; ?>
" style="border:1px;"></iframe>
							</div>
							</div>
							</div>
<!--*************************************************Add Bank***********************************************************-->
							<div class="modal fade" id="Bank" role="dialog">
							<div class="modal-dialog">
							<!-- Modal content-->
							<div class="modal-content" style="width:700px;">
							<div class="modal-header" VendorAddBankHeader style="background-color:#00CCFF;">
							<button type="button" class="close" data-dismiss="modal" onClick="window.location.reload();">&times;</button>
							<h4 class="modal-title">Add Bank</h4>
							</div>
									<iframe height="490px" width="100%" id="Bank"  src="./vendor_bank.php?vendor_id=<?php echo $this->_tpl_vars['View']['vendor_id']; ?>
" style="border:1px;"></iframe>
							</div>
							</div>
							</div>


             <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#contact" data-toggle="tab">Contact</a></li>
                  <li><a href="#address" data-toggle="tab">Address</a></li>
				  <li><a href="#bank" data-toggle="tab">Bank</a></li>
                </ul>
                <div class="tab-content">
                  <!-- Font Awesome Icons -->
                  <div class="tab-pane active" id="contact">
                    <form name="ContactList" id="ContactList" method="post">
                  <table id="example1" class="table table-bordered table-striped" style="font-size:13px;, Times, serif;">
                    <thead>
                      <tr>
					    <th>Sl No</th>
                        <th>Contact Person</th>
                        <th>Mobile No</th>
                        <th>Designation</th>
						<th>Email Id</th>
						 <th>Created By</th>
						<th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
					<?php $_from = $this->_tpl_vars['ListContact']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['Contact']):
?>
					<?php if ($this->_tpl_vars['Contact']['status'] == '0'): ?>
					<tr id="<?php echo $this->_tpl_vars['i']++; ?>
">
								<input type="hidden" value="<?php echo $this->_tpl_vars['Contact']['sl_no']; ?>
" />
								<input type="hidden" value="<?php echo $this->_tpl_vars['Contact']['vendor_id']; ?>
" />
				           <td><a href="#" onClick="Javascript:viewCats('<?php echo $this->_tpl_vars['Contact']['sl_no']; ?>
')"><strike><?php echo $this->_tpl_vars['i']; ?>
</strike></a></td>
								<td><a href="#" data-toggle="modal" data-target="#viewCats"><strike><?php echo $this->_tpl_vars['Contact']['salutation']; ?>
.<?php echo $this->_tpl_vars['Contact']['vendor_contact_person_fname']; ?>
<?php echo $this->_tpl_vars['Contact']['vendor_contact_person_lname']; ?>
</strike></a></td>
								<td><a href="#" data-toggle="modal" data-target="#viewCats"><strike><?php echo $this->_tpl_vars['Contact']['mobile_no']; ?>
</strike></a></td>
								<td><a href="#" data-toggle="modal" data-target="#viewCats"><strike><?php echo $this->_tpl_vars['Contact']['designation']; ?>
</strike></a></td>
								<td><a href="#" data-toggle="modal" data-target="#viewCats"><strike><?php echo $this->_tpl_vars['Contact']['mail_id']; ?>
</strike></a></td>
								<td><a href="#" data-toggle="modal" data-target="#viewCats"><strike><?php echo $this->_tpl_vars['Contact']['created_by']; ?>
</strike></a></td>
							<td>
							&nbsp;&nbsp; &nbsp;&nbsp;<a href="#" onClick="Javascript:repeatCats('<?php echo $this->_tpl_vars['Contact']['sl_no']; ?>
','<?php echo $this->_tpl_vars['Contact']['vendor_id']; ?>
')"><i class="fa fa-reply-all"></i></a></td>
							</tr>
							<?php else: ?>
							<tr id="<?php echo $this->_tpl_vars['i']++; ?>
">
								<input type="hidden" value="<?php echo $this->_tpl_vars['Contact']['sl_no']; ?>
" />
								<input type="hidden" value="<?php echo $this->_tpl_vars['Contact']['vendor_id']; ?>
" />
				           <td><a href="#" onClick="Javascript:viewCats('<?php echo $this->_tpl_vars['Contact']['sl_no']; ?>
')"><?php echo $this->_tpl_vars['i']; ?>
</a></td>
								<td><a href="#" data-toggle="modal" data-target="#viewCats<?php echo $this->_tpl_vars['Contact']['vendor_id']; ?>
"><?php echo $this->_tpl_vars['Contact']['salutation']; ?>
.<?php echo $this->_tpl_vars['Contact']['vendor_contact_person_fname']; ?>
<?php echo $this->_tpl_vars['Contact']['vendor_contact_person_lname']; ?>
</a></td>
								<td><a href="#" data-toggle="modal" data-target="#viewCats<?php echo $this->_tpl_vars['Contact']['vendor_id']; ?>
"><?php echo $this->_tpl_vars['Contact']['mobile_no']; ?>
</a></td>
								<td><a href="#" data-toggle="modal" data-target="#viewCats<?php echo $this->_tpl_vars['Contact']['vendor_id']; ?>
"><?php echo $this->_tpl_vars['Contact']['designation']; ?>
</a></td>
								<td><a href="#" data-toggle="modal" data-target="#viewCats<?php echo $this->_tpl_vars['Contact']['vendor_id']; ?>
"><?php echo $this->_tpl_vars['Contact']['mail_id']; ?>
</a></td>
								<td><a href="#" data-toggle="modal" data-target="#viewCats<?php echo $this->_tpl_vars['Contact']['vendor_id']; ?>
"><?php echo $this->_tpl_vars['Contact']['created_by']; ?>
</a></td>
							<td>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" data-toggle="modal" data-target="#EditContact<?php echo $this->_tpl_vars['Contact']['sl_no']; ?>
"> <i class="fa fa-edit"></i></a>
							&nbsp;&nbsp; &nbsp;&nbsp;<a href="#" onClick="Javascript:deleteCat('<?php echo $this->_tpl_vars['Contact']['sl_no']; ?>
','<?php echo $this->_tpl_vars['Contact']['vendor_id']; ?>
')"><i class="fa fa-trash"></i></a></td>

							<div class="modal fade" id="EditContact<?php echo $this->_tpl_vars['Contact']['sl_no']; ?>
" role="dialog">
								<div class="modal-dialog">

										<div class="modal-content" style="width:700px;">
												<div class="modal-header" id="VendorEditContactHeader" style="background-color:#00CCFF;">
												<button type="button" class="close" data-dismiss="modal" onClick="window.location.reload();">&times;</button>
															<h4 class="modal-title">Edit Contact</h4>
												</div>
											<iframe height="490px" width="100%" id="EditContact"  src="./vendor_contact_edit.php?sl_no=<?php echo $this->_tpl_vars['Contact']['sl_no']; ?>
" style="border:1px;"></iframe>
										</div>
								</div>
							</div>
                    </tr>
					<?php endif; ?>

					  <?php endforeach; else: ?>
					<tr>
								<td height="20" colspan="12" align="center"><img src="images/warning.gif" border="0">&nbsp;No Records Found</td>
					</tr>
					<?php endif; unset($_from); ?>
					</tbody>
                    </tfoot>
                  </table>
				  <!--*************************************************Edit Contact***********************************************************-->

				 </form>

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

  function deleteCat(CatIdent,VenIdent){
  var vend_id = btoa(VenIdent);
  if(confirm("Are you sure to Delete this Content?")){
  FormName	= document.ContactList;
  FormName.action= "vendor_detail_view.php?sl_no="+CatIdent+"&vendor_id="+vend_id;
  FormName.submit();
   }
 }
 function repeatCats(Slno,Cus1){
 var vend_id = btoa(Cus1);
  if(confirm("Are you sure to Retrive this Content?")){
  FormName	= document.ContactList;
  FormName.action= "vendor_detail_view.php?retrive="+Slno+"&vendor_id="+vend_id;
  FormName.submit();
 }
 }
    </script>
	'; ?>

</div>

<div class="tab-pane" id="bank">
                    <form name="BankList" id="BankList" method="post">
                  <table id="example1" class="table table-bordered table-striped" style="font-size:13px;, Times, serif;">
                    <thead>
                      <tr>
					    <th>Sl No</th>
                        <th>Account No</th>
                        <th>Holder Name</th>
                        <th>Bank Name</th>
						<th>Branch</th>
						<th>IFSC Code</th>
						 <th>Area</th>
						<th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
					<?php $_from = $this->_tpl_vars['ListBank']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['Bank']):
?>
					<?php if ($this->_tpl_vars['Bank']['status'] == '0'): ?>
					<tr id="<?php echo $this->_tpl_vars['i']++; ?>
">
								<input type="hidden" value="<?php echo $this->_tpl_vars['Bank']['sl_no']; ?>
" />
								<input type="hidden" value="<?php echo $this->_tpl_vars['Bank']['vendor_id']; ?>
" />
				           <td><a href="#" onClick="Javascript:ViewBan('<?php echo $this->_tpl_vars['Bank']['sl_no']; ?>
')"><strike><?php echo $this->_tpl_vars['i']; ?>
</strike></a></td>
								<td><a href="#" data-toggle="modal" data-target="#ViewBan"><strike><?php echo $this->_tpl_vars['Bank']['account_no']; ?>
</strike></a></td>
								<td><a href="#" data-toggle="modal" data-target="#ViewBan"><strike><?php echo $this->_tpl_vars['Bank']['account_holder_name']; ?>
</strike></a></td>
								<td><a href="#" data-toggle="modal" data-target="#ViewBan"><strike><?php echo $this->_tpl_vars['Bank']['bank_name']; ?>
</strike></a></td>
								<td><a href="#" data-toggle="modal" data-target="#ViewBan"><strike><?php echo $this->_tpl_vars['Bank']['branch']; ?>
</strike></a></td>
								<td><a href="#" data-toggle="modal" data-target="#ViewBan"><strike><?php echo $this->_tpl_vars['Bank']['ifsc_code']; ?>
</strike></a></td>
								<td><a href="#" data-toggle="modal" data-target="#ViewBan"><strike><?php echo $this->_tpl_vars['Bank']['area']; ?>
</strike></a></td>
							<td>
							&nbsp;&nbsp; &nbsp;&nbsp;<a href="#" onClick="Javascript:repeatBan('<?php echo $this->_tpl_vars['Bank']['sl_no']; ?>
','<?php echo $this->_tpl_vars['Bank']['vendor_id']; ?>
')"><i class="fa fa-reply-all"></i></a></td>
							</tr>
							<?php else: ?>
							<tr id="<?php echo $this->_tpl_vars['j']++; ?>
">
								<input type="hidden" value="<?php echo $this->_tpl_vars['Bank']['sl_no']; ?>
" />
								<input type="hidden" value="<?php echo $this->_tpl_vars['Bank']['vendor_id']; ?>
" />
				           <td><a href="#" onClick="Javascript:ViewBan('<?php echo $this->_tpl_vars['Bank']['sl_no']; ?>
')"><?php echo $this->_tpl_vars['j']; ?>
</a></td>
								<td><a href="#" data-toggle="modal" data-target="#ViewBan<?php echo $this->_tpl_vars['View']['vendor_id']; ?>
"><?php echo $this->_tpl_vars['Bank']['account_no']; ?>
</a></td>
								<td><a href="#" data-toggle="modal" data-target="#ViewBan<?php echo $this->_tpl_vars['View']['vendor_id']; ?>
"><?php echo $this->_tpl_vars['Bank']['account_holder_name']; ?>
</a></td>
								<td><a href="#" data-toggle="modal" data-target="#ViewBan<?php echo $this->_tpl_vars['View']['vendor_id']; ?>
"><?php echo $this->_tpl_vars['Bank']['bank_name']; ?>
</a></td>
								<td><a href="#" data-toggle="modal" data-target="#ViewBan<?php echo $this->_tpl_vars['View']['vendor_id']; ?>
"><?php echo $this->_tpl_vars['Bank']['branch']; ?>
</a></td>
								<td><a href="#" data-toggle="modal" data-target="#ViewBan<?php echo $this->_tpl_vars['View']['vendor_id']; ?>
"><?php echo $this->_tpl_vars['Bank']['ifsc_code']; ?>
</a></td>
								<td><a href="#" data-toggle="modal" data-target="#ViewBan<?php echo $this->_tpl_vars['View']['vendor_id']; ?>
"><?php echo $this->_tpl_vars['Bank']['area']; ?>
</a></td>
							<td>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" data-toggle="modal" data-target="#EditBank<?php echo $this->_tpl_vars['Bank']['sl_no']; ?>
"> <i class="fa fa-edit"></i></a>
							&nbsp;&nbsp; &nbsp;&nbsp;<a href="#" onClick="Javascript:deleteBan('<?php echo $this->_tpl_vars['Bank']['sl_no']; ?>
','<?php echo $this->_tpl_vars['Bank']['vendor_id']; ?>
')"><i class="fa fa-trash"></i></a></td>

							<div class="modal fade" id="EditBank<?php echo $this->_tpl_vars['Bank']['sl_no']; ?>
" role="dialog">
								<div class="modal-dialog">

										<div class="modal-content" style="width:700px;">
												<div class="modal-header" id="VendorEditBankHeader" style="background-color:#00CCFF;">
												<button type="button" class="close" data-dismiss="modal" onClick="window.location.reload();">&times;</button>
															<h4 class="modal-title">Edit Bank</h4>
												</div>
											<iframe height="490px" width="100%" id="EditBank"  src="./vendor_bank_edit.php?sl_no=<?php echo $this->_tpl_vars['Bank']['sl_no']; ?>
" style="border:1px;"></iframe>
										</div>
								</div>
							</div>

                    </tr>
					<?php endif; ?>

					  <?php endforeach; else: ?>
					<tr>
								<td height="20" colspan="12" align="center"><img src="images/warning.gif" border="0">&nbsp;No Records Found</td>
					</tr>
					<?php endif; unset($_from); ?>
					</tbody>
                    </tfoot>
                  </table>
				  <!--*************************************************Edit Contact***********************************************************-->

				 </form>

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

  function deleteBan(CatIdent,VenIdent){
   var vend_id = btoa(VenIdent);

  if(confirm("Are you sure to Delete this Content?")){
  FormName	= document.BankList;
  FormName.action= "vendor_detail_view.php?sl_no="+CatIdent+"&vendor_id3="+vend_id;
  FormName.submit();
   }
 }
 function repeatBan(Slno,Cus1){
 var vend_id = btoa(Cus1);
  if(confirm("Are you sure to Retrive this Content1?")){
  FormName	= document.BankList;
  FormName.action= "vendor_detail_view.php?retrive="+Slno+"&vendor_id3="+vend_id;
  FormName.submit();
 }
 }
    </script>
	'; ?>

</div>
                  <!-- glyphicons-->
                  <div class="tab-pane" id="address">
				<form name="AddressList" id="AddressList" method="post">
                  <table id="example1" class="table table-bordered table-striped" style="font-size:13px;, Times, serif;">
                    <thead>
					<tr>
					            <th>Sl No</th>
								<th>Area</th>
								<th>Address</th>
								<th>Address 1</th>
								<th>Landmark</th>
								<th>City</th>
								<th>Pincode</th>
								<th>Action</th>
					</tr>
                    </thead>
                    <tbody>
                     <?php $_from = $this->_tpl_vars['ListAddress']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['Contact']):
?>
					 <?php if ($this->_tpl_vars['Contact']['status'] == '0'): ?>
					<tr id="<?php echo $this->_tpl_vars['q']++; ?>
">
					             <input type="hidden" value="<?php echo $this->_tpl_vars['Contact']['sl_no']; ?>
" />
								<input type="hidden" value="<?php echo $this->_tpl_vars['Contact']['vendor_id']; ?>
" />
								<td><a href="#" data-toggle="modal" data-target="#ViewAddress"><strike><?php echo $this->_tpl_vars['q']; ?>
</a></strike></td>
								<td><a href="#" data-toggle="modal" data-target="#ViewAddress"><strike><?php echo $this->_tpl_vars['Contact']['area']; ?>
</strike></a></td>
								<td><a href="#" data-toggle="modal" data-target="#ViewAddress"><strike><?php echo $this->_tpl_vars['Contact']['address']; ?>
</strike></a></td>
								<td><a href="#" data-toggle="modal" data-target="#ViewAddress"><strike><?php echo $this->_tpl_vars['Contact']['address1']; ?>
</strike></a></td>
								<td><a href="#" data-toggle="modal" data-target="#ViewAddress"><strike><?php echo $this->_tpl_vars['Contact']['landmark']; ?>
</strike></a></td>
								<td><a href="#" data-toggle="modal" data-target="#ViewAddress"><strike><?php echo $this->_tpl_vars['Contact']['city']; ?>
</strike></a></td>
								<td><a href="#" data-toggle="modal" data-target="#ViewAddress"><strike><?php echo $this->_tpl_vars['Contact']['pincode']; ?>
</strike></a></td>
	<td>
						&nbsp;&nbsp; &nbsp;&nbsp;<a href="#" onClick="Javascript:repeatCats1('<?php echo $this->_tpl_vars['Contact']['sl_no']; ?>
','<?php echo $this->_tpl_vars['Contact']['vendor_id']; ?>
')"><i class="fa fa-reply-all"></i></a></td>
							</tr>

						<?php else: ?>
								<tr id="<?php echo $this->_tpl_vars['q']++; ?>
">
					             <input type="hidden" value="<?php echo $this->_tpl_vars['Contact']['sl_no']; ?>
" />
								<input type="hidden" value="<?php echo $this->_tpl_vars['Contact']['vendor_id']; ?>
" />
								<td><a href="#" data-toggle="modal" data-target="#ViewAddress<?php echo $this->_tpl_vars['View']['vendor_id']; ?>
"><?php echo $this->_tpl_vars['q']; ?>
</a></td>
								<td><a href="#" data-toggle="modal" data-target="#ViewAddress<?php echo $this->_tpl_vars['View']['vendor_id']; ?>
"><?php echo $this->_tpl_vars['Contact']['area']; ?>
</a></td>
								<td><a href="#" data-toggle="modal" data-target="#ViewAddress<?php echo $this->_tpl_vars['View']['vendor_id']; ?>
"><?php echo $this->_tpl_vars['Contact']['address']; ?>
</a></td>
								<td><a href="#" data-toggle="modal" data-target="#ViewAddress<?php echo $this->_tpl_vars['View']['vendor_id']; ?>
"><?php echo $this->_tpl_vars['Contact']['address1']; ?>
</a></td>
								<td><a href="#" data-toggle="modal" data-target="#ViewAddress<?php echo $this->_tpl_vars['View']['vendor_id']; ?>
"><?php echo $this->_tpl_vars['Contact']['landmark']; ?>
</a></td>
								<td><a href="#" data-toggle="modal" data-target="#ViewAddress<?php echo $this->_tpl_vars['View']['vendor_id']; ?>
"><?php echo $this->_tpl_vars['Contact']['city']; ?>
</a></td>
								<td><a href="#" data-toggle="modal" data-target="#ViewAddress<?php echo $this->_tpl_vars['View']['vendor_id']; ?>
"><?php echo $this->_tpl_vars['Contact']['pincode']; ?>
</a></td>
								<td>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" data-toggle="modal" data-target="#EditAddress<?php echo $this->_tpl_vars['Contact']['sl_no']; ?>
"><i class="fa fa-edit"></i></a>
								&nbsp;&nbsp; &nbsp;&nbsp;<a href="#" onClick="Javascript:deleteCat1('<?php echo $this->_tpl_vars['Contact']['sl_no']; ?>
','<?php echo $this->_tpl_vars['Contact']['vendor_id']; ?>
')"><i class="fa fa-trash"></i></a></td>


								<div class="modal fade" id="EditAddress<?php echo $this->_tpl_vars['Contact']['sl_no']; ?>
" role="dialog">
								<div class="modal-dialog">
								<!-- Modal content-->
									<div class="modal-content" style="width:700px;">
											<div class="modal-header" id="VendorEditAddressHeader" style="background-color:#00CCFF;">
													<button type="button" class="close" data-dismiss="modal" onClick="window.location.reload();">&times;</button>
													<h4 class="modal-title">Edit Address</h4>
											</div>
											<iframe height="490px" width="100%" id="EditAddress"  src="./vendor_address_edit.php?sl_no=<?php echo $this->_tpl_vars['Contact']['sl_no']; ?>
" style="border:1px;"></iframe>
									</div>
								</div>
							</div>

                    </tr>
					<?php endif; ?>

					  <?php endforeach; else: ?>
					<tr>
								<td height="20" colspan="12" align="center"><img src="images/warning.gif" border="0">&nbsp;No Records Found</td>
					</tr>
					<?php endif; unset($_from); ?>

					</tbody>
                    </tfoot>
                  </table>
				   <!--*************************************************Edit Contact***********************************************************-->

				 </form>

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

  function deleteCat1(Addident,VenIdent1){
    var vend_id = btoa(VenIdent1);

  if(confirm("Are you sure to Delete this Content?")){
  FormName	= document.AddressList;
  FormName.action= "vendor_detail_view.php?sl_no="+Addident+"&vendor_id1="+vend_id;
  FormName.submit();
   }
 }
 function repeatCats1(Slno1,Cus2){
  var vend_id = btoa(Cus2);
  if(confirm("Are you sure to Retrive this Content?")){
  FormName	= document.AddressList;
  FormName.action= "vendor_detail_view.php?retrive1="+Slno1+"&vendor_id1="+vend_id;
  FormName.submit();
 }
 }
 $(document).ready(function(){
    $("#VendorAddContactHeader").click(function(){
       window.location.reload();
    });
});

$(document).ready(function(){
    $("#VendorAddAddressHeader").click(function(){
       window.location.reload();
    });
});
$(document).ready(function(){
    $("#VendorAddBankHeader").click(function(){
       window.location.reload();
    });
});

$(document).ready(function(){
    $("#VendorEditContactHeader").click(function(){
       window.location.reload();
    });
});

$(document).ready(function(){
    $("#VendorEditAddressHeader").click(function(){
       window.location.reload();
    });
});

    </script>
	'; ?>

				 </div><!-- /#ion-icons -->
</div>
</div><!-- /.row -->
</div>
</section><!-- /.content -->
 <div class="control-sidebar-bg"></div>
</div><!-- /.content-wrapper -->
  </body>
 </html>