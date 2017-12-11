<?php /* Smarty version 2.6.25, created on 2017-09-12 11:29:01
         compiled from outwardDetails.tpl */ ?>

        </div>
           
        <div class="wrapper wrapper-content animated fadeInRight" >
            <div class="row">
            
                
            </div>
            <div class="row">
                
                
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                          <h5 style="padding-left:40%;">Outward Details</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                               
                            </div>
                        </div>
                        <div class="ibox-content">
                            <form method="post" class="form-horizontal" name="sback" id="sback">
							 <?php $_from = $this->_tpl_vars['MatList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ListOutward']):
?>
							 <div class="ibox-title">
                          <h5  style="padding-left:40%;">Material Info:</h5>
						  </div>
							   <div class="form-group">
							  <div id="errinwardEntryId"> 
							   <label class="col-sm-2 control-label" style="text-align:left;">Outward Entry No:</label>
                               <div class="col-md-2  control-label" style="text-align:left;"><td><?php echo $this->_tpl_vars['ListOutward']['outward_entry_no']; ?>
</td></div></div>
							   <div id="errdateofEntry">  
							   <label class="col-sm-2 control-label" style="text-align:left; margin-left:15%">Date Of Entry:</label>
							   <div class="col-md-2 control-label" style="text-align:left;"><td><?php echo $this->_tpl_vars['ListOutward']['date_of_entry']; ?>
</td></div></div>
							   </div>
							   <!--<div class="form-group">
							   <div id="errdcNo"> <label class="col-sm-2 control-label" style="text-align:left;">DC No:</label>
                               <div class="col-md-2 control-label" style="text-align:left;"><td><?php echo $this->_tpl_vars['ListOutward']['dc_no']; ?>
</td></div></div>
							<div id="errdcDate"> 
							<label class="col-sm-2 control-label" style="text-align:left;margin-left:15%">DC Date:</label>
							<div class="col-md-2 control-label" style="text-align:left;"><td><?php echo $this->_tpl_vars['ListOutward']['dc_date']; ?>
</td></div></div>
							</div>-->
							<div class="form-group">
							   <div id="errinvoiceNo"> <label class="col-sm-2 control-label" style="text-align:left;">To Name:</label>
                               <div class="col-md-2 control-label" style="text-align:left;"><td><?php echo $this->_tpl_vars['ListOutward']['to_name']; ?>
</td></div></div>
							<div id="errinvoiceDate"> 
							<label class="col-sm-2 control-label" style="text-align:left;margin-left:15%">Purpose:</label>
							<div class="col-md-2 control-label" style="text-align:left;"><td><?php echo $this->_tpl_vars['ListOutward']['purpose']; ?>
</td></div></div>
							</div>
							<div class="form-group">
							   <div id="errsupplierName"> <label class="col-sm-2 control-label" style="text-align:left;">To Address:</label>
                               <div class="col-md-2 control-label" style="text-align:left;"><td><?php echo $this->_tpl_vars['ListOutward']['to_address']; ?>
</td></div></div>
							<div id="errsupplierCode"> 
							<label class="col-sm-2 control-label" style="text-align:left;margin-left:15%">Vehicle No:</label>
							<div class="col-md-2 control-label" style="text-align:left;"><td><?php echo $this->_tpl_vars['ListOutward']['vehicle_no']; ?>
</td></div></div>
							</div>
							<div class="form-group">
							   <div id="errsupplierName"> <label class="col-sm-2 control-label" style="text-align:left;">Created By:</label>
                               <div class="col-md-2 control-label" style="text-align:left;"><td><?php echo $this->_supers['session']['UserName']; ?>
</td></div></div>
							</div>
							<?php endforeach; endif; unset($_from); ?>
							<br />

							<table align="center" cellspacing="0" cellpadding="3"  width="100%" border=0>

	
				 <?php if ($this->_tpl_vars['SuccessMessage_on_delete'] != "" && $this->_tpl_vars['ErrorMessage'] == ""): ?>
	<tr> 
		<td class="succs_text" width=50%> <?php echo $this->_tpl_vars['SuccessMessage_on_delete']; ?>
</td>
		<td  width=50%></td>
	 </tr>

             <?php endif; ?> 
<?php if ($this->_tpl_vars['ErrorMessage_on_edit'] != ""): ?>
	<tr> 
		<td class="errtxt" width=50%><img src="images/warning.gif" alt="Error:" style="padding: 0px 10px 4px 5px; vertical-align:middle" />         		  <?php echo $this->_tpl_vars['ErrorMessage_on_edit']; ?>
</td>
		<td class="error" width=50%></td>
	 </tr>

             <?php endif; ?>
			 
	
<!--	 <tr>
        <td class="msg" width=50%>Material List</td>
		<td class="msg" width=50%>&nbsp;</td>
    </tr>-->
   
    <tr>
	
		<table align="center" class="table table-bordered" cellspacing="1" cellpadding="3" width="100%" border="1PX solid black">
			<tr>
			<th width="20" align="center" >SL.No </th>
			<th width="35" align="center">Material Code</th>
			<th width="35" align="center">Material Name</th>
			<th width="35" align="center">Material Category</th>
			<th width="20" align="center" >Material Category Code</th>
	        <th width="25" align="center">Quantity</th>
			<th width="25" align="center">Price</th>
			<th width="25" align="center">Total</th>
			<!--<th width="20" align="center">Action</th>-->
            </tr>
			
			<?php $this->assign('i', '1'); ?>
		             <?php $_from = $this->_tpl_vars['outward_details_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['details_list']):
?>        
                <tr>
				<td><?php echo $this->_tpl_vars['i']++; ?>
</td>
                <td align="center">  <a title="Material Type" ><?php echo $this->_tpl_vars['details_list']['material_code']; ?>
</a>&nbsp;</td>
				<td align="center">  <a title="Material Name" ><?php echo $this->_tpl_vars['details_list']['material_name']; ?>
</a>&nbsp;</td>
				<td align="center">  <a title="Material Category"><?php echo $this->_tpl_vars['details_list']['material_category']; ?>
</a></td>
                <td  align="center">  <a title="Material Code" ><?php echo $this->_tpl_vars['details_list']['item_category_code']; ?>
</a></td>
                <td  align="center">  <a title="Quantity" ><?php echo $this->_tpl_vars['details_list']['quantity']; ?>
</a></td>
				<td  align="center">  <a title="Price" ><?php echo $this->_tpl_vars['details_list']['material_price']; ?>
</a></td>
				<?php $this->assign('total_price', ($this->_tpl_vars['details_list']['quantity']*$this->_tpl_vars['details_list']['material_price'])); ?>
				<td  align="center">  <a title="Total" ><?php echo $this->_tpl_vars['total_price']; ?>
</a></td>
				</tr>
				<!--/*<td class="nohover" align="center"><a href="#"><img src="images/icons/delete.png" border="0" align="absmiddle" alt="Delete" onClick="Javascript:deleteCats('<?php echo $this->_tpl_vars['details_list']['outward_entry_no']; ?>
','<?php echo $this->_tpl_vars['details_list']['sl_no']; ?>
')"  title="Delete">	</a></td>*/-->	
				<!--<td class="nohover" align="center">	&nbsp;&nbsp; &nbsp;&nbsp;<a href="#" class="fa fa-trash" onClick="deleteCats('<?php echo $this->_tpl_vars['details_list']['outward_entry_no']; ?>
','<?php echo $this->_tpl_vars['details_list']['sl_no']; ?>
');"></a></td>-->

					 <?php endforeach; else: ?>
			<tr>
			<td height="10" colspan="16" align="center"><img src="images/warning.gif" border="0">&nbsp;<h5 style="color:#FF0000">NO Record Found...</h5></td>
			</tr>
															
            
			<?php endif; unset($_from); ?>
			</tr>
		</table>
		</table>
			
							<br />

							
							   <div align="center">
                                         

									<button class="btn btn-primary" id="back"  type="button">BACK</button>
                                      </div>
                                    </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<?php echo '
		<script type="text/javascript">
		
        $(document).ready(function() {	
		$(\'#side-menu\').metisMenu();
		$("#back").click(function(){

        window.history.back();

        });

		
		 });
		 
		 </script>
		 '; ?>