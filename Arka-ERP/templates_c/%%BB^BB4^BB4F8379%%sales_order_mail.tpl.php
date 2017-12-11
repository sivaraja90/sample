<?php /* Smarty version 2.6.25, created on 2017-11-29 17:09:34
         compiled from sales_order_mail.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'sales_order_mail.tpl', 145, false),)), $this); ?>
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
#SaleMail {
	position: absolute;
	left: 0;
	top: 0;
	right: -30px;
	bottom: 0;	
	padding-right: 15px;
	overflow-y: scroll;
}
</style>
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
<script type="text/javascript" src=\'./dhtmlxMessage/codebase/dhtmlxmessage.js\'></script>
<link rel="stylesheet" href= "./codebase/skins/dhtmlxmessage_dhx_skyblue.css" type="text/css" media="all"/> 

<script>
function validate_mail()
{
		var fields=["email_id1","cc"];
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

FormName		= document.SalesMailAdd;
FormName.method	= "POST";
FormName.submit();

}

function myFunction() {
    var x = document.getElementById("attachment1");
    x.disabled = true;
}

</script>
'; ?>

<div id="SaleMail">
<form name="SalesMailAdd" id="SalesMailAdd" method="post" enctype="multipart/form-data">
		<input type="hidden" name="hdAction">
		<?php $_from = $this->_tpl_vars['mailview']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['View']):
?>
			<input type="hidden" id="enquiry_id" name="enquiry_id"  value="<?php echo $this->_tpl_vars['View']['enquiry_id']; ?>
">
			<input type="hidden" id="sales_order_no" name="sales_order_no"  value="<?php echo $this->_tpl_vars['View']['sales_order_no']; ?>
">											
 			<input type="hidden" id="sales_quote_revise_no" name="sales_quote_revise_no" value="<?php echo $this->_tpl_vars['View']['sales_quote_revise_no']; ?>
">
 			<input type="hidden" class="form-control" id="mail_from" name="mail_from" value="<?php echo $this->_supers['session']['Email']; ?>
"  readonly="true" autocomplete="off">
		<?php endforeach; endif; unset($_from); ?>
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
				<?php $_from = $this->_tpl_vars['mailview']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['salMail']):
?>
				<tr class="taglist2">
				<td >&nbsp;</td>
				<?php if ($this->_tpl_vars['salMail']['email_id'] != ""): ?>
				<td><input type="checkbox" name="check2" id="check2" onClick="dynInput(this);" value="<?php echo $this->_tpl_vars['salMail']['email_id']; ?>
" />&nbsp;&nbsp;<?php echo $this->_tpl_vars['salMail']['email_id']; ?>
&nbsp;&nbsp;&nbsp;&nbsp;
				<?php endif; ?>
				<?php if ($this->_tpl_vars['salMail']['email_id1'] != ""): ?>
				<input type="checkbox" name="check1" id="check1" onClick="dynInput(this);" value="<?php echo $this->_tpl_vars['salMail']['email_id1']; ?>
" />&nbsp;&nbsp;<?php echo $this->_tpl_vars['salMail']['email_id1']; ?>
</td>
				<?php endif; ?>
				</tr>
				<?php endforeach; endif; unset($_from); ?>
				<tr>
				<th>To</th>		
				<td><textarea id="email_id1" name="email_id1" style="width:515px;" value="<?php echo $this->_supers['post']['email_id1']; ?>
"><?php echo $this->_supers['post']['email_id1']; ?>
</textarea></td>
			    </tr>	
				<tr>
				<th>cc</th>
				<td><input type="text" name="cc" id="cc" value="ss.ganesh.0007@gmail.com" style="width:515px;"/></td>
				</tr>
				<tr>
				<th>Subject</th>
				<td><textarea id="subject" name="subject" style="width:515px;" value="<?php echo $this->_supers['post']['subject']; ?>
"><?php echo $this->_supers['post']['subject']; ?>
</textarea></td>
				</tr>
				<tr>
				<th>Message</th>
				<td><textarea class="ckeditor" id="message" name="message" style="width:515px;" value="<?php echo $this->_supers['post']['message']; ?>
"><?php echo $this->_supers['post']['message']; ?>
</textarea></td>
				</tr>
				<tr>
				<th>Attachment 1</th>
				<td><input type="file" name="attachment1" id="attachment1" value="<?php echo $this->_supers['post']['attachment1']; ?>
"/>	</td>
				</tr>
				<tr>
				<th>Attachment 2</th> 
				<td><input type="file" name="attachment2" id="attachment2" value="<?php echo $this->_supers['post']['attachment2']; ?>
"/>	</td>
				</tr>
				<tr>
				<th>Attachment 3</th>
				<td><input type="file" name="attachment3" id="attachment3" value="<?php echo $this->_supers['post']['attachment3']; ?>
"/>	</td>
				</tr>
<!--				<tr>
				<th>Attachment 4</th> 
				<td><input type="file" name="attachment4" id="attachment4" value="<?php echo $this->_supers['post']['attachment4']; ?>
"/>	</td>
				</tr>
				<tr>
				<th>Attachment 5</th>
				<td><input type="file" name="attachment5" id="attachment5" value="<?php echo $this->_supers['post']['attachment5']; ?>
"/>	</td>
				</tr>
-->				<tr>
				 <input type="hidden" class="form-control" id="created_by" name="created_by" value="<?php echo $this->_supers['session']['UserName']; ?>
">
				 <input type="hidden" class="form-control" id="created_date" name="created_date" value="<?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d') : smarty_modifier_date_format($_tmp, '%Y-%m-%d')); ?>
">
				 <input type="hidden" class="form-control" id="created_time" name="created_time" value="<?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%I:%M:%S %p') : smarty_modifier_date_format($_tmp, '%I:%M:%S %p')); ?>
">
				 <input type="hidden" class="form-control" id="timestamp" name="timestamp" value="<?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d &amp; %I:%M:%S %p') : smarty_modifier_date_format($_tmp, '%Y-%m-%d &amp; %I:%M:%S %p')); ?>
">
				 </tr>
				 </table>
				<center>
					<input type="button" class="btn btn-info pull-center" value="Send Mail"  onClick="validate_mail(); ">&nbsp;&nbsp;
                   	</center>

				
				</form>
				</div>

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
	  
	  function updateTextArea() {  
   var allVals = [];
   $(\'.taglist2 :checked\').each(function(i) {
          
       allVals.push((i!=0?"\\r\\n":"")+ $(this).val());
   });
   $(\'#email_id1\').val(allVals).attr(\'rows\',allVals.length) ;
    
   }
   $(function() {
      $(\'.taglist2 input\').click(updateTextArea);
      updateTextArea();
});
    </script>
	'; ?>

  </body>
