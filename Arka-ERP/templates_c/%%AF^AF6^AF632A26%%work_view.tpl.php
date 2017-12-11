<?php /* Smarty version 2.6.25, created on 2016-10-21 20:04:33
         compiled from work_view.tpl */ ?>
<?php echo $this->_tpl_vars['IncludeJS']; ?>

<?php echo $this->_tpl_vars['IncludeCSS']; ?>

<?php echo '

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
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
	th {
    font-style: normal;
	font-weight:200;
	font-size:14px;
	margin-right:90px;
}
table { 
    border-spacing: 2px;
    border-collapse:collapse;
	
}
td
{ padding:10px;

}
</style>
<script type="text/javascript" src="../ckeditor/ckeditor.js"></script>
'; ?>

<body onLoad="doonload"> 
<div id="Work">
<form name="WorkLog" id="WorkLog" method="post" enctype="multipart/form-data">
		<input type="hidden" name="hdAction">
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
			<?php $_from = $this->_tpl_vars['ListWork']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['work']):
?>
			<table>
			<td>
			<tr>
			<table  class="table table-bordered table-striped">
				<tr>
				<th><b>WorkLog Id</b></th>	
				<td><?php echo $this->_tpl_vars['work']['worklog_id']; ?>
</td>
				<th><b>WorkLog Status</b></th>
				<td><?php echo $this->_tpl_vars['work']['worklog_status']; ?>
</td>
				</tr>				
				</table>
				</tr>
				<tr>
				<table  class="table table-bordered table-striped">
				<tr id="<?php echo $this->_tpl_vars['i']++; ?>
">
				<th><b>Sl No</b></th>
				<th><b>Remarks</b></th>
				<th><b>Summary</b></th>
				<th><b>Work Description<b></th></th>
				</tr>
				<tr>
				<td><?php echo $this->_tpl_vars['i']; ?>
</td>
				<td><?php echo $this->_tpl_vars['work']['remarks']; ?>
</td>
				<td><?php echo $this->_tpl_vars['work']['summary']; ?>
</td>
				<td><?php echo $this->_tpl_vars['work']['work_descp']; ?>
</td>
				</tr>
				</table>
				</tr>
				</td>
				</table>
				<?php endforeach; endif; unset($_from); ?>
				
				

				
				</form>
				</body>
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
