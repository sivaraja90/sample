<?php /* Smarty version 2.6.25, created on 2016-03-29 15:39:50
         compiled from vendor_contact_detail.tpl */ ?>
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
	<!--<link rel="stylesheet" href= "./codebase/skins/dhtmlxmessage_dhx_skyblue.css" type="text/css" media="all"/> 
	<link rel=\'stylesheet\' type=\'text/css\' href=\'auto-complete/jquery.auto-complete.css?<?= mktime() ?>\' />-->
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
<h4><center>Vendor Contact Details</center></h4>

		<form class="form-horizontal" name="add_contact">
			<input type="hidden" name="hdAction" />
			<input type="hidden" id="vendor_id" name="vendor_id"  value="<?php echo $this->_supers['get']['vendor_id']; ?>
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
					<input type="hidden" id="vendor_id" name="vendor_id" value="<?php echo $this->_tpl_vars['Edit']['vendor_id']; ?>
"/>
				   <?php $_from = $this->_tpl_vars['ListView']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['Edit']):
?>
				  	
					<tr class="form-group">			 
                        <th class="col-sm-4 control-th">Vendor Id</th>
                      <td class="col-sm-2">
                       <?php echo $this->_tpl_vars['Edit']['vendor_id']; ?>

                   </td>
                   		 
                        <th class="col-sm-4 control-th">Contact Person</th>
                       <td class="col-sm-2">	
                        <?php echo $this->_tpl_vars['Edit']['salutation']; ?>
&nbsp;<?php echo $this->_tpl_vars['Edit']['vendor_contact_person_fname']; ?>
&nbsp;<?php echo $this->_tpl_vars['Edit']['vendor_contact_person_lname']; ?>
														
                     </td>
					 </tr>
                   
						<tr class="form-group">			 
                        <th class="col-sm-4 control-th">Mobile No</th>		
                      <td class="col-sm-2">
                       <?php echo $this->_tpl_vars['Edit']['mobile_no']; ?>

                   </td>
				   <th class="col-sm-4 control-th">Phone No</th>
                       <td class="col-sm-2">
                          <?php echo $this->_tpl_vars['Edit']['area_code']; ?>
&nbsp;<?php echo $this->_tpl_vars['Edit']['phone_no']; ?>
&nbsp;<?php echo $this->_tpl_vars['Edit']['extension']; ?>
																
                     </td>
					 </tr>
					 
					  <tr class="form-group">
                   		 <?php if ($this->_tpl_vars['Edit']['mobile_no1'] != ""): ?>	
                        <th class="col-sm-4 control-th">Mobile No 1</th>
                       <td class="col-sm-2">
                         <?php echo $this->_tpl_vars['Edit']['mobile_no1']; ?>
																	
                     </td>
					 <?php endif; ?>
					 <?php if ($this->_tpl_vars['Edit']['mobile_no2'] != ""): ?>
                        <th class="col-sm-4 control-th">Mobile No 2</th>
                      <td class="col-sm-2">
                       <?php echo $this->_tpl_vars['Edit']['mobile_no2']; ?>

                   </td>
				   <?php endif; ?>
					</tr>
					 
					 <tr class="form-group">			 
                        <th class="col-sm-4 control-th">Designation</th>
                       <td class="col-sm-2">
                           <?php echo $this->_tpl_vars['Edit']['designation']; ?>
																
                     </td>
					 <th class="col-sm-4 control-th">Email Id</th>
                       <td class="col-sm-2">
                           <?php echo $this->_tpl_vars['Edit']['mail_id']; ?>
																
                     </td>
					 </tr>
					 
					 <tr class="form-group">	
					 <?php if ($this->_tpl_vars['Edit']['pnone_no1'] != ""): ?>		 
                        <th class="col-sm-4 control-th">Phone No 1</th>
                      <td class="col-sm-2">
                      <?php echo $this->_tpl_vars['Edit']['area_code1']; ?>
&nbsp;<?php echo $this->_tpl_vars['Edit']['phone_no1']; ?>
&nbsp;<?php echo $this->_tpl_vars['Edit']['extension1']; ?>

                   </td>
				   <?php endif; ?>
                         <?php if ($this->_tpl_vars['Edit']['mail_id1'] != ""): ?>
					 <th class="col-sm-4 control-th">Email Id 1</th>
                      <td class="col-sm-2">
                      <?php echo $this->_tpl_vars['Edit']['mail_id1']; ?>
	
                   </td>
				   <?php endif; ?>
					</tr>
						
					<?php endforeach; endif; unset($_from); ?>
					</table>
	
	
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
	  
  function deleteCat(CatIdent,CusIdent){
  if(confirm("Are you sure to Delete this Content?")){
  FormName		= document.ServiceList;
  FormName.action= "sale_view.php?sl_no="+CatIdent+"&customer_id="+CusIdent;
  FormName.submit();
 }
 }

 function viewCats(CusIdent) {
    
  FormName		= document.ServiceList;
  FormName.action =\'sales.php?customer_id=\'+CatIdent;          
  FormName.submit();

 }
    </script>
	'; ?>
 
				 
					</form>
				 </body>