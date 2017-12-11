<?php /* Smarty version 2.6.25, created on 2017-10-04 17:16:40
         compiled from stockDetails.tpl */ ?>

        </div>
           
        <div class="wrapper wrapper-content animated fadeInRight" >
           
          
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                          <h5 style="padding-left:40%;">Stock Details</h5>
                            
                        </div>
                        <div class="ibox-content">
                            <form method="post" class="form-horizontal" name="sback" id="sback">
							 <?php $_from = $this->_tpl_vars['StockList13']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ListInward']):
?>
							 
							   <div class="form-group">
							  <div id="errinwardEntryId"> 
							   <label class="col-sm-2 control-label" style="text-align:left;">Item Category Code:</label>
                               <div class="col-md-2  control-label" style="text-align:left;"><td><?php echo $this->_tpl_vars['ListInward']['item_category_code']; ?>
</td></div></div>
							   <div id="errdateofEntry">  
							   <label class="col-sm-2 control-label" style="text-align:left; margin-left:15%">Material Category:</label>
							   <div class="col-md-2 control-label" style="text-align:left;"><td><?php echo $this->_tpl_vars['ListInward']['material_category']; ?>
</td></div></div>
							   </div>
							<div class="form-group">
							   <div id="errinvoiceNo"> <label class="col-sm-2 control-label" style="text-align:left;">Material Name:</label>
                               <div class="col-md-2 control-label" style="text-align:left;"><td><?php echo $this->_tpl_vars['ListInward']['material_name']; ?>
</td></div></div>
							<div id="errinvoiceDate"> 
							<label class="col-sm-2 control-label" style="text-align:left;margin-left:15%">Material Code:</label>
							<div class="col-md-2 control-label" style="text-align:left;"><td><?php echo $this->_tpl_vars['ListInward']['material_code']; ?>
</td></div></div>
							</div>
							<div class="form-group">
							   <div id="errsupplierName"> <label class="col-sm-2 control-label" style="text-align:left;">Location:</label>
                               <div class="col-md-2 control-label" style="text-align:left;"><td><?php echo $this->_tpl_vars['ListInward']['location']; ?>
</td></div></div>
							<div id="errsupplierCode"> 
							<label class="col-sm-2 control-label" style="text-align:left;margin-left:15%">Quantity:</label>
							<div class="col-md-2 control-label" style="text-align:left;"><td><?php echo $this->_tpl_vars['ListInward']['quantity']; ?>
</td></div></div>
							</div>
							<div class="form-group">
							   <div id="errfrieghtCharges"> <label class="col-sm-2 control-label" style="text-align:left;">Unit Price:</label>
                               <div class="col-md-2 control-label" style="text-align:left;"><td><?php echo $this->_tpl_vars['ListInward']['unit_price']; ?>
</td></div></div>
							   <div id="errsupplierCode"> 
							<label class="col-sm-2 control-label" style="text-align:left;margin-left:15%">Total Price:</label>
							<div class="col-md-2 control-label" style="text-align:left;"><td><?php echo $this->_tpl_vars['ListInward']['total']; ?>
</td></div></div>

							   </div>
							   <div class="form-group">
							   <div id="errcreatedBy"> 
							   <div id="errfrieghtCharges"> <label class="col-sm-2 control-label" style="text-align:left;">Created By:</label>
							   <div class="col-md-2 control-label" style="text-align:left;"><td><?php echo $this->_supers['session']['UserName']; ?>
</td></div></div>
								</div>
							</div>
							<br />

	<table align="center" cellspacing="0" cellpadding="3" width="100%" border=0 class="table table-bordered">
 			<?php if ($this->_tpl_vars['ErrorMessage_on_not_selection'] != ""): ?>
	<tr> 
		<td class="errtxt" width=50%><img src="images/warning.gif" alt="Error:" style="padding: 0px 10px 4px 5px; vertical-align:middle" />         		  <?php echo $this->_tpl_vars['ErrorMessage_on_not_selection']; ?>
</td>
		<td class="error" width=50%></td>
	 </tr>

             <?php endif; ?>
			 
			
			 <?php if ($this->_tpl_vars['SuccessMessage_on_delete'] != ""): ?>
	<tr> 
		<td class="succs_text" width=50%> <?php echo $this->_tpl_vars['SuccessMessage_on_delete']; ?>
</td>
		<td  width=50%></td>
	 </tr>

             <?php endif; ?> 
			 
			 
					 <?php if ($this->_tpl_vars['ErrorMessage_on_delete'] != ""): ?>
	<tr> 
		<td class="errtxt" width=50%> <?php echo $this->_tpl_vars['ErrorMessage_on_delete']; ?>
</td>
		<td  width=50%></td>
	 </tr>

             <?php endif; ?> 	 
 
</table>
		</td>
		</tr>
		</table>
							<?php endforeach; endif; unset($_from); ?>
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