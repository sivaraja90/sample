<?php /* Smarty version 2.6.25, created on 2016-07-30 15:56:44
         compiled from mail_list.tpl */ ?>
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
'; ?>


 <body class="hold-transition skin-blue sidebar-mini">
  <div class="content-wrapper">
	<section class="content-header">
          <h4>
         <small><a href="mail_list.php"><i class="fa fa-list"> <label style="font-family:Arial, Helvetica, sans-serif">
		 List Mail</i></a></small>&ensp;&ensp;&ensp;

		 </h4>
        </section>


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

        <!-- Main content -->
          <section class="content">
          <div class="row">
            <div class="col-xs-12">
			<div class="box box-info">
                <div class="box-header">
                 <center> <h3 class="box-title">Mail Lists</h3></center>
                </div><!-- /.box-header -->


	<!--******************************************************************************************************-->
 	<div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
				<li class="active"><a href="#enquiryMail" data-toggle="tab">Enquiry Mail</a></li>
                <li ><a href="#salesOrderMail" data-toggle="tab">Sales Order Mail</a></li>
				<li><a href="#serviceOrderMail" data-toggle="tab">Service Order Mail</a></li>
				<li><a href="#projectOrderMail" data-toggle="tab">Project Order Mail</a></li>
                </ul>
                <div class="tab-content">
                  <!-- Enquiry Mail Content -->
                  <div class="tab-pane active" id="enquiryMail">
                    <form name="EnqMail" id="EnqMail" method="post">
                  <table id="example1" class="table table-bordered table-striped" style="font-size:13px; , Times, serif;">

                    <thead>
                      <tr>
					 <th width="5%"><center>Sl.No</center></th>
                        <th width="20%"><center>Mail To</center></th>
                        <th width="40%"><center>Subject</center></th>
                        <th width="15%"><center>Date & Time</center></th>
						<th width="5%"><center>Action</center></th>
                      </tr>
                    </thead>
                    <tbody>
						<?php $_from = $this->_tpl_vars['enquiryMail']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['enqMail']):
?>
					<tr id="<?php echo $this->_tpl_vars['i']++; ?>
">
					<input type="hidden" value="<?php echo $this->_tpl_vars['enqMail']['enquiry_id']; ?>
" />
					<td align="center"><a href="#"onClick="Javascript:viewEnq('<?php echo $this->_tpl_vars['enqMail']['enquiry_id']; ?>
','<?php echo $this->_tpl_vars['enqMail']['sl_no']; ?>
')"><?php echo $this->_tpl_vars['i']; ?>
</a></td>
					<td align="center"><a href="#"onClick="Javascript:viewEnq('<?php echo $this->_tpl_vars['enqMail']['enquiry_id']; ?>
','<?php echo $this->_tpl_vars['enqMail']['sl_no']; ?>
')"><?php echo $this->_tpl_vars['enqMail']['mail_to']; ?>
</a></td>
					<td align="center"><a href="#"onClick="Javascript:viewEnq('<?php echo $this->_tpl_vars['enqMail']['enquiry_id']; ?>
','<?php echo $this->_tpl_vars['enqMail']['sl_no']; ?>
')"><?php echo $this->_tpl_vars['enqMail']['mail_subject']; ?>
</a></td>
					<td align="center"><a href="#"onClick="Javascript:viewEnq('<?php echo $this->_tpl_vars['enqMail']['enquiry_id']; ?>
','<?php echo $this->_tpl_vars['enqMail']['sl_no']; ?>
')"><?php echo $this->_tpl_vars['enqMail']['timestamp_value']; ?>
</a></td>
					<td align="center">&nbsp;&nbsp; &nbsp;&nbsp;<a href="#" onClick="Javascript:enqdeleteCat('<?php echo $this->_tpl_vars['enqMail']['sl_no']; ?>
','<?php echo $this->_tpl_vars['enqMail']['enquiry_id']; ?>
')"><i class="fa fa-trash"></i></a></td>

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
function viewEnq(CatIdent,SliD) {
  var Enq = btoa(CatIdent);
  var sno = btoa(SliD);
  FormName		= document.EnqMail;
  FormName.action ="enquiry_mail_details.php?sl_no="+sno+"&enquiry_id="+Enq;
  FormName.submit();
 }

  function enqdeleteCat(CatIdent,EnqIdent){

  if(confirm("Are you sure to Delete this Content?")){
  FormName		= document.EnqMail;
  FormName.action= "mail_list.php?sl_no="+CatIdent+"&enquiry_id="+EnqIdent;
  FormName.submit();
 }
 }

    </script>
	'; ?>



					 <!-- Sales Order Mail Content -->
                 <div class="tab-pane" id="salesOrderMail">
                    <form name="SalesOrderMail" id="SalesOrderMail" method="post">
                  <table id="example1" class="table table-bordered table-striped" style="font-size:13px; , Times, serif;">

                    <thead>
                      <tr>
					 <th width="5%"><center>Sl.No</center></th>
                        <th width="20%"><center>Mail To</center></th>
                        <th width="40%"><center>Subject</center></th>
                        <th width="15%"><center>Date & Time</center></th>
						<th width="5%"><center>Action</center></th>
                      </tr>
                    </thead>
                    <tbody>
					<?php $_from = $this->_tpl_vars['salordMail']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['salorderMail']):
?>
					<tr id="<?php echo $this->_tpl_vars['l']++; ?>
">
					<input type="hidden" value="<?php echo $this->_tpl_vars['salorderMail']['enquiry_id']; ?>
" />
					<td align="center"><a href="#" onClick="Javascript:viewSal('<?php echo $this->_tpl_vars['salorderMail']['enquiry_id']; ?>
','<?php echo $this->_tpl_vars['salorderMail']['sl_no']; ?>
')"><?php echo $this->_tpl_vars['l']; ?>
</a></td>
					<td align="center"><a href="#"  onClick="Javascript:viewSal('<?php echo $this->_tpl_vars['salorderMail']['enquiry_id']; ?>
','<?php echo $this->_tpl_vars['salorderMail']['sl_no']; ?>
')"><?php echo $this->_tpl_vars['salorderMail']['mail_to']; ?>
</a></td>
					<td align="center"><a href="#" onClick="Javascript:viewSal('<?php echo $this->_tpl_vars['salorderMail']['enquiry_id']; ?>
','<?php echo $this->_tpl_vars['salorderMail']['sl_no']; ?>
')"><?php echo $this->_tpl_vars['salorderMail']['mail_subject']; ?>
</a></td>
					<td align="center"><a href="#" onClick="Javascript:viewSal('<?php echo $this->_tpl_vars['salorderMail']['enquiry_id']; ?>
','<?php echo $this->_tpl_vars['salorderMail']['sl_no']; ?>
')"><?php echo $this->_tpl_vars['salorderMail']['timestamp']; ?>
</a></td>
					<td class="center" align="center">&nbsp;&nbsp; &nbsp;&nbsp;<a href="#" onClick="Javascript:saldeleteCat('<?php echo $this->_tpl_vars['salorderMail']['sl_no']; ?>
','<?php echo $this->_tpl_vars['salorderMail']['enquiry_id']; ?>
')"><i class="fa fa-trash"></i></a></td>
					</tr>
					  <?php endforeach; else: ?>          
					<tr>
					<td height="20" colspan="12" align="center"><img src="./images/warning.gif" border="0">&nbsp;No Records Found</td>
					</tr>
					<?php endif; unset($_from); ?>


					</tbody>
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

function viewSal(CatIdent,SliD) { 
  var Enq = btoa(CatIdent);
  var sno = btoa(SliD);    
  FormName		= document.SalesOrderMail;
  FormName.action ="sales_mail_detail_view.php?sl_no="+sno+"&enquiry_id="+Enq;
  FormName.submit();
 }

  function saldeleteCat(CatIdent,EnqIdent){   
  //var enq_id = btoa(EnqIdent);  
  if(confirm("Are you sure to Delete this Content?")){
  FormName		= document.SalesOrderMail;
  FormName.action= "mail_list.php?sl_no="+CatIdent+"&enquiry_id="+EnqIdent;
  FormName.submit();
 }
 }
    </script>
	'; ?>


					 <!-- Service Order Mail Content -->
                 <div class="tab-pane" id="serviceOrderMail">
                    <form name="ServiceOrderMail" id="ServiceOrderMail" method="post">
                  <table id="example1" class="table table-bordered table-striped" style="font-size:13px; , Times, serif;">

                    <thead>
                      <tr>
					 <th width="5%"><center>Sl.No</center></th>
                        <th width="20%"><center>Mail To</center></th>
                        <th width="40%"><center>Subject</center></th>
                        <th width="15%"><center>Date & Time</center></th>
						<th width="5%"><center>Action</center></th>
                      </tr>
                    </thead>
                    <tbody>
						<?php $_from = $this->_tpl_vars['serordMail']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['serorderMail']):
?>
					<tr id="<?php echo $this->_tpl_vars['m']++; ?>
">
								<input type="hidden" value="<?php echo $this->_tpl_vars['serorderMail']['enquiry_id']; ?>
" />
								<td align="center"><a href="#"onClick="Javascript:viewSer('<?php echo $this->_tpl_vars['serorderMail']['enquiry_id']; ?>
','<?php echo $this->_tpl_vars['serorderMail']['sl_no']; ?>
')"><?php echo $this->_tpl_vars['m']; ?>
</a></td>
								<td align="center"><a href="#"onClick="Javascript:viewSer('<?php echo $this->_tpl_vars['serorderMail']['enquiry_id']; ?>
','<?php echo $this->_tpl_vars['serorderMail']['sl_no']; ?>
')"><?php echo $this->_tpl_vars['serorderMail']['mail_to']; ?>
</a></td>
								<td align="center"><a href="#"onClick="Javascript:viewSer('<?php echo $this->_tpl_vars['serorderMail']['enquiry_id']; ?>
','<?php echo $this->_tpl_vars['serorderMail']['sl_no']; ?>
')"><?php echo $this->_tpl_vars['serorderMail']['mail_subject']; ?>
</a></td>
								<td align="center"><a href="#"onClick="Javascript:viewSer('<?php echo $this->_tpl_vars['serorderMail']['enquiry_id']; ?>
','<?php echo $this->_tpl_vars['serorderMail']['sl_no']; ?>
')"><?php echo $this->_tpl_vars['serorderMail']['timestamp']; ?>
</a></td>
								<td class="center" align="center">&nbsp;&nbsp; &nbsp;&nbsp;<a href="#" onClick="Javascript:serdeleteCat('<?php echo $this->_tpl_vars['serorderMail']['sl_no']; ?>
','<?php echo $this->_tpl_vars['serorderMail']['enquiry_id']; ?>
')"><i class="fa fa-trash"></i></a></td>
					</tr>
					  <?php endforeach; else: ?>
					<tr>
								<td height="20" colspan="12" align="center"><img src="./images/warning.gif" border="0">&nbsp;No Records Found</td>
					</tr>
					<?php endif; unset($_from); ?>


					</tbody>
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
function viewSer(CatIdent,SliD) {
  var Enq = btoa(CatIdent);
  var sno = btoa(SliD);
  FormName		= document.ServiceOrderMail;
  FormName.action ="service_mail_details.php?enquiry_id="+Enq+"&sl_no="+sno;
  FormName.submit();
 }

  function serdeleteCat(CatIdent,EnqIdent){
  //var enq_id = btoa(EnqIdent);
  if(confirm("Are you sure to Delete this Content?")){
  FormName		= document.ServiceOrderMail;
  FormName.action= "mail_list.php?sl_no="+CatIdent+"&enquiry_id="+EnqIdent;
  FormName.submit();
 }
 } </script>
'; ?>

										 <!-- Project Order Mail Content -->
                 <div class="tab-pane" id="projectOrderMail">
                    <form name="ProjectOrderMail" id="ProjectOrderMail" method="post">
                  <table id="example1" class="table table-bordered table-striped" style="font-size:13px; , Times, serif;">

                    <thead>
                      <tr>
					 <th width="5%"><center>Sl.No</center></th>
                        <th width="20%"><center>Mail To</center></th>
                        <th width="40%"><center>Subject</center></th>
                        <th width="15%"><center>Date & Time</center></th>
						<th width="5%"><center>Action</center></th>
                      </tr>
                    </thead>
                    <tbody>
						<?php $_from = $this->_tpl_vars['projordMail']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['projorderMail']):
?>
					<tr id="<?php echo $this->_tpl_vars['k']++; ?>
">
					<input type="hidden" value="<?php echo $this->_tpl_vars['projorderMail']['enquiry_id']; ?>
" />
					<td align="center"><a href="#" onClick="Javascript:viewProject('<?php echo $this->_tpl_vars['projorderMail']['enquiry_id']; ?>
','<?php echo $this->_tpl_vars['projorderMail']['sl_no']; ?>
')"><?php echo $this->_tpl_vars['k']; ?>
</a></td>
					<td align="center"><a href="#" onClick="Javascript:viewProject('<?php echo $this->_tpl_vars['projorderMail']['enquiry_id']; ?>
','<?php echo $this->_tpl_vars['projorderMail']['sl_no']; ?>
')"><?php echo $this->_tpl_vars['projorderMail']['mail_to']; ?>
</a></td>
					<td align="center"><a href="#" onClick="Javascript:viewProject('<?php echo $this->_tpl_vars['projorderMail']['enquiry_id']; ?>
','<?php echo $this->_tpl_vars['projorderMail']['sl_no']; ?>
')"><?php echo $this->_tpl_vars['projorderMail']['mail_subject']; ?>
</a></td>
					<td align="center"><a href="#" onClick="Javascript:viewProject('<?php echo $this->_tpl_vars['projorderMail']['enquiry_id']; ?>
','<?php echo $this->_tpl_vars['projorderMail']['sl_no']; ?>
')"><?php echo $this->_tpl_vars['projorderMail']['timestamp']; ?>
</a></td>
					<td class="center" align="center">&nbsp;&nbsp; &nbsp;&nbsp;<a href="#" onClick="Javascript:deleteCatproject('<?php echo $this->_tpl_vars['projorderMail']['sl_no']; ?>
','<?php echo $this->_tpl_vars['projorderMail']['enquiry_id']; ?>
')"><i class="fa fa-trash"></i></a></td>
					</tr>
					  <?php endforeach; else: ?>             
					<tr>
								<td height="20" colspan="12" align="center"><img src="./images/warning.gif" border="0">&nbsp;No Records Found</td>
					</tr>
					<?php endif; unset($_from); ?>
					</tbody>
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


  function deleteCatproject(CatIdent,EnqIdent){
  //var enq_id = btoa(EnqIdent);
  if(confirm("Are you sure to Delete this Content?")){
  FormName		= document.ProjectOrderMail;
  FormName.action= "mail_list.php?sl_no="+CatIdent+"&enquiry_id="+EnqIdent;
  FormName.submit();
 }
 }
 function viewProject(CatIdent,SliD) {
  var Enq = btoa(CatIdent);
  var sno = btoa(SliD);
  FormName		= document.ProjectOrderMail;
  FormName.action ="project_mail_detail_view.php?enquiry_id="+Enq+"&sl_no="+sno;
  FormName.submit();
 }
 </script>
'; ?>

</div>

                    </tfoot>
                  </table>
				  </form>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
            <!-- Control Sidebar -->
      <div class="control-sidebar-bg"></div>

  </body>