<?php /* Smarty version 2.6.25, created on 2016-10-21 20:14:20
         compiled from worklog.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'worklog.tpl', 142, false),)), $this); ?>
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
	font-size:26px;
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
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
<script>
function validate_mail()
{
		var fields=["work_desc","summary","remarks"];
				for(i=0;i<fields.length;i++)
				{
				//alert(fields[i]);
				current_iteration = document.getElementById(fields[i]).value;
				document.getElementById(fields[i]).style.borderColor="";
						
						if(current_iteration=="")
						{
						 dhtmlx.alert({
								title: "Error !",
								type:"alert-error",
								text: "Please Fill " +fields[i],	
									  });	
									  
						document.getElementById(fields[i]).focus();
						document.getElementById(fields[i]).style.borderColor="red";
						return false;
						}
}
FormName		= document.WorkLog;
FormName.method	= "POST";
FormName.submit();

}
function doonload()
{
var enq = document.getElementById("enquiry_id").value;
var decode = base64Decode( enq );
document.getElementById("demo").innerHTML = decode;

}

</script>
'; ?>

<body onLoad="doonload"> 
<div id="Work">
<form name="WorkLog" id="WorkLog" method="post" enctype="multipart/form-data">
		<input type="hidden" name="hdAction">
			<input type="hidden" id="enquiry_id" name="enquiry_id"  value="<?php echo $this->_supers['get']['enquiry_id']; ?>
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

			<table  class="table table-bordered table-striped">
			<?php $_from = $this->_tpl_vars['ListWork']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['work']):
?>
				<tr>
				<th class="col-sm-2 control-th" style="font-size:large;">WorkLog Id</th>	
				<td class="col-sm-5"><input type="text" id="worklog_id" name="worklog_id" value="<?php echo $this->_tpl_vars['work']['worklog_id']; ?>
"></td>
				<th class="col-sm-2 control-th" style="font-size:large;">WorkLog Status</th>
				<td class="col-sm-5"><select name="worklog_status" id="worklog_status" value="<?php echo $this->_tpl_vars['work']['worklog_status']; ?>
"/>
					<?php if ($this->_tpl_vars['work']['worklog_status'] == 'Pending'): ?>
						<option value="Pending" selected="selected">Pending</option>
						<option value="In Progress"> In Progress </option>
						<option value="Completed"> Completed </option>
					<?php elseif ($this->_tpl_vars['work']['worklog_status'] == 'In Progress'): ?>
						<option value="Pending">Pending</option>
						<option value="In Progress" selected="selected"> In Progress </option>
						<option value="Completed"> Completed </option>
					<?php elseif ($this->_tpl_vars['work']['worklog_status'] == 'Completed'): ?>
						<option value="Pending">Pending</option>
						<option value="In Progress"> In Progress </option>
						<option value="Completed"  selected="selected"> Completed </option>
					<?php else: ?>
						<option value="0">--Select--</option>
						<option value="Pending">Pending</option>
						<option value="In Progress"> In Progress </option>
						<option value="Completed"> Completed </option>
						
				<?php endif; ?>
				</select></td>
				</tr>				
				<tr>
				<th class="col-sm-2 control-th" style="font-size:large;">Work Descp</th>
				<td class="col-sm-5"><input type="text" id="work_desc" name="work_desc" value="<?php echo $this->_supers['post']['work_desc']; ?>
"></td>
				<th class="col-sm-2 control-th" style="font-size:large;">Summary</th>
				<td class="col-sm-5"><input type="text" id="summary" name="summary"  value="<?php echo $this->_supers['post']['summary']; ?>
"></td>
				</tr>
				</table>
				<table  class="table table-bordered table-striped">
				<tr>
				<th class="col-sm-2 control-th" style="font-size:large;">Remarks</th>
				<td><textarea class="ckeditor" id="remarks" name="remarks" style="width:515px;" value="<?php echo $this->_supers['post']['remarks']; ?>
"><?php echo $this->_supers['post']['remarks']; ?>
</textarea></td>
				</tr>
				<?php endforeach; endif; unset($_from); ?>
				<tr>
				 <input type="hidden" class="form-control" id="created_by" name="created_by" value="<?php echo $this->_supers['session']['UserName']; ?>
">
				 <input type="hidden" class="form-control" id="created_date" name="created_date" value="<?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d') : smarty_modifier_date_format($_tmp, '%Y-%m-%d')); ?>
">
				<input type="hidden" class="form-control" id="created_time" name="created_time" value="<?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%I:%M:%S %p') : smarty_modifier_date_format($_tmp, '%I:%M:%S %p')); ?>
">
				 </tr>
				</table>
				
				
				<center>
					<input type="button" class="btn btn-info pull-center" value="Work Status"  onClick="validate_mail();">&nbsp;&nbsp;
                   	</center>

				
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
