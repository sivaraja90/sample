<?php /* Smarty version 2.6.25, created on 2016-07-30 17:10:48
         compiled from sales_mail_detail_view.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "left.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

 <body class="hold-transition skin-blue sidebar-mini">
  <div class="content-wrapper">
	<section class="content-header">
          <h4>
            <small><a href="mail_list.php"><i class="fa fa-list"> <label class="font" style="font-family:Arial, Helvetica, sans-serif">
List Mail</label></i></a></small>&ensp;&ensp;&ensp;
          </h4>
         </section>
        <!-- Main content -->
          <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box box-info">
                <div class="box-header">

								<?php $_from = $this->_tpl_vars['SalesMail']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['View']):
?>
									<table width="110%">
									<tr>
									 <td>Created:<?php echo $this->_tpl_vars['View']['created_date']; ?>
&nbsp;&nbsp;<?php echo $this->_tpl_vars['View']['created_time']; ?>
</td>
					                  <td align="justify">

									 <h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Sales Mail Details</h4></td>
									 <td>Mail Send:<?php echo $this->_tpl_vars['View']['timestamp']; ?>
</td>

									</tr>
									</table>
									<?php endforeach; endif; unset($_from); ?>
									</div>

				<form class="form-horizontal" id="sales_mail_details" name="sales_mail_details">
				<input type="hidden" name="hdAction" />
				<br><br>
					 <div class="box-body">

				<?php $_from = $this->_tpl_vars['SalesMail']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['salMail']):
?>
					<div class="col-md-6">
									<div class="form-group">
										<label class="col-sm-4 thick"><b>Enquiry Id</b></label>
										<div class="col-sm-6">
										 <?php echo $this->_tpl_vars['salMail']['enquiry_id']; ?>

										</div>
									</div>
				</div>
				<div class="col-md-6">
									<div class="form-group">
										<label class="col-sm-4 thick" style="margin-left:75px;"><b>Sales Order No</b></label>
										<div class="col-sm-6">
										 <?php echo $this->_tpl_vars['salMail']['sales_order_no']; ?>

										</div>
									</div>
				</div>
				</div>
			<?php endforeach; endif; unset($_from); ?>
<br>
					<table  class="table table-bordered table-striped">
					<?php $_from = $this->_tpl_vars['SalesMail']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['salMail']):
?>
					<tr>
					<th style="width:15%;">Mail From</th>
					<td><?php echo $this->_tpl_vars['salMail']['mail_from']; ?>
</td>
					</tr>
					<tr>
					<th>Mail CC</th>
					<td><?php echo $this->_tpl_vars['salMail']['mail_cc']; ?>
</td>
					</tr>
					<tr>
					<th>Subject</th>
					<td><?php echo $this->_tpl_vars['salMail']['mail_subject']; ?>
</td>
					</tr>
					<tr>
					<th>Message</th>
					<td><?php echo $this->_tpl_vars['salMail']['message']; ?>
</td>
					</tr>
					<?php if ($this->_tpl_vars['salMail']['mail_attachment1'] != ""): ?>
					<tr>
					<th>Attachment 1</th>
					<td><a href="./images/mail/<?php echo $this->_tpl_vars['salMail']['mail_attachment1']; ?>
" target="_blank"><?php echo $this->_tpl_vars['salMail']['mail_attachment1']; ?>
</a> </td>
					</tr>
					<?php endif; ?>
					<?php if ($this->_tpl_vars['salMail']['mail_attachment2'] != ""): ?>
					<tr>
					<th>Attachment 2</th>
					<td><a href="./images/mail/<?php echo $this->_tpl_vars['salMail']['mail_attachment2']; ?>
" target="_blank"><?php echo $this->_tpl_vars['salMail']['mail_attachment2']; ?>
</a></td>
					</tr>
					<?php endif; ?>
					<?php if ($this->_tpl_vars['salMail']['mail_attachment3'] != ""): ?>
					<tr>
					<th>Attachment 3</th>
					<td><a href="./images/mail/<?php echo $this->_tpl_vars['salMail']['mail_attachment3']; ?>
" target="_blank"><?php echo $this->_tpl_vars['salMail']['mail_attachment3']; ?>
</a></td>
					</tr>
					<?php endif; ?>
					<?php endforeach; endif; unset($_from); ?>
					</table>
					</form>
</div>
</div>
</div>
</div>
</div>
  </body>