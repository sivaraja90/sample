<?php /* Smarty version 2.6.25, created on 2016-08-07 11:00:05
         compiled from quote_pro_detail.tpl */ ?>
<?php echo $this->_tpl_vars['IncludeCSS']; ?>

<?php echo $this->_tpl_vars['IncludeJS']; ?>

<?php echo '
<script type="text/javascript" src=\'./dhtmlxMessage/codebase/dhtmlxmessage.js\'></script>
	<script type=\'text/javascript\' src=\'./auto-complete/jquery-1.3.2.js\'></script>
	<script type=\'text/javascript\' src=\'./auto-complete/jquery.metadata.js\'></script>
	<script type=\'text/javascript\' src=\'./auto-complete/jquery.auto-complete.js?<?= mktime() ?>\'></script>
	<script type=\'text/javascript\' src=\'./auto-complete/js.js?<?= mktime() ?>\'></script>
	<link rel="stylesheet" href="\'https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
	<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css"/>
	<style>
	th {
    font-style: normal;
	font-weight:100;
	font-size:14px;
	margin-right:100px;
}
table { 
    border-spacing: 2px;
    border-collapse: separate;
}
td
{ padding:10px;
}
html, body {
	padding: 0;
	margin: 0;
	overflow: hidden;
}
#SaleViews {
	position: absolute;
	left: 0;
	top: 0;
	right: -30px;
	bottom: 0;	
	padding-right: 15px;
	overflow-y: scroll;
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
.col-sm-4
{
width:30%;
}
.col-sm-2
{
 width:20%;
 margin-left:10%;
 font-weight:100;
 font-size:14px;
 font-style:normal;
}

</style>

'; ?>


	<body  class="hold-transition skin-blue sidebar-mini">
	<div id="SaleViews">
		<form class="form-horizontal" name="add_contact">
			<input type="hidden" name="hdAction" />
			<input type="hidden" id="customer_id" name="customer_id"  value="<?php echo $this->_supers['get']['customer_id']; ?>
"  >
			
					<input type="hidden" id="mobile_fld_cnt" name="mobile_fld_cnt"  value="2"  >
					<input type="hidden" id="phone_fld_cnt" name="phone_fld_cnt"  value="2"  >
					<input type="hidden" id="email_fld_cnt" name="email_fld_cnt"  value="2"  >
					<input type="hidden" id="hdn_salutation" name="hdn_salutation" value="<?php echo $this->_tpl_vars['Contact']['salutaion']; ?>
">
					<input type="hidden" id="hdn_order_status" name="hdn_order_status" value="<?php echo $this->_tpl_vars['Contact']['order_status']; ?>
">
					<input type="hidden" id="hdn_customer_status" name="hdn_customer_status" value="<?php echo $this->_tpl_vars['Contact']['customer_status']; ?>
">
					<input type="hidden" id="hdn_customer_type" name="hdn_customer_type" value="<?php echo $this->_tpl_vars['Contact']['customer_type']; ?>
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
							
				  
				   <table class="col-md-6">
				    <input type="hidden" value="<?php echo $this->_tpl_vars['Edit']['sl_no']; ?>
" />
					<input type="hidden" id="c_name" name="c_name" value="<?php echo $this->_tpl_vars['Edit']['customer_id']; ?>
"/>
				   <?php $_from = $this->_tpl_vars['ProList2']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['Edit']):
?>
				  	
					<tr class="form-group">			 
                        <th class="col-sm-4 control-th" style="font-weight:bold;">Quote Id</th>
                      <td class="col-sm-2">
                       <?php echo $this->_tpl_vars['Edit']['quote_id']; ?>

                   </td>
                        <th class="col-sm-4 control-th" style="font-weight:bold;">Created Date</th>
                       <td class="col-sm-2">
                        <?php echo $this->_tpl_vars['Edit']['created_date']; ?>
																	
                     </td>
					 </tr>
                   
						<tr class="form-group">			 
                        <th class="col-sm-4 control-th" style="font-weight:bold;">Item Code</th>
                      <td class="col-sm-2">
                       <?php echo $this->_tpl_vars['Edit']['item_code']; ?>

                   </td>
                        <th class="col-sm-4 control-th" style="font-weight:bold;">Item Name</th>
                       <td class="col-sm-2">
                         <?php echo $this->_tpl_vars['Edit']['item_name']; ?>
																	
                     </td>
					 </tr>
					 
					 <tr class="form-group">			 
                        <th class="col-sm-4 control-th" style="font-weight:bold;">Item Type</th>
                      <td class="col-sm-2">
                       <?php echo $this->_tpl_vars['Edit']['item_type']; ?>

                   </td>
                        <th class="col-sm-4 control-th" style="font-weight:bold;">Item Spec</th>
                       <td class="col-sm-2">
                           <?php echo $this->_tpl_vars['Edit']['item_specification']; ?>
																
                     </td>
					</tr>
						 <tr class="form-group">			 
                        <th class="col-sm-4 control-th" style="font-weight:bold;">Created By</th>
                      <td class="col-sm-2">
                       <?php echo $this->_tpl_vars['Edit']['created_by']; ?>

                   </td>
                        <th class="col-sm-4 control-th" style="font-weight:bold;">Quantity</th>
                       <td class="col-sm-2">
                           <?php echo $this->_tpl_vars['Edit']['item_quantity']; ?>
																
                     </td>
					</tr>
					 
					
					<?php endforeach; endif; unset($_from); ?>
					</table>
				<br>
<br>

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
 
				 
					</form>
				  </div>
				 </body>