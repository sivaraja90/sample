<?php /* Smarty version 2.6.25, created on 2017-09-13 10:56:50
         compiled from inwardDetails.tpl */ ?>

        </div>
           
        <div class="wrapper wrapper-content animated fadeInRight" >
           
          
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                          <h5 style="padding-left:40%;">Inward Details</h5>
                            
                        </div>
                        <div class="ibox-content">
                            <form method="post" class="form-horizontal" name="sback" id="sback">
							<div class="ibox-title" >
                          <h5  style="padding-left:40%;">Material Info:</h5>
						  </div>
							 <?php $_from = $this->_tpl_vars['PageList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ListInward']):
?>
							 
							   <div class="form-group">
							  <div id="errinwardEntryId"> 
							   <label class="col-sm-2 control-label" style="text-align:left;">Inward Entry Id:</label>
                               <div class="col-md-2  control-label" style="text-align:left;"><td><?php echo $this->_tpl_vars['ListInward']['inward_entry_id']; ?>
</td></div></div>
							   <div id="errdateofEntry">  
							   <label class="col-sm-2 control-label" style="text-align:left; margin-left:15%">Date of Entry:</label>
							   <div class="col-md-2 control-label" style="text-align:left;"><td><?php echo $this->_tpl_vars['ListInward']['date_of_entry']; ?>
</td></div></div>
							   </div>
							   <!--<div class="form-group">
							   <div id="errdcNo"> <label class="col-sm-2 control-label" style="text-align:left;">DC No:</label>
                               <div class="col-md-2 control-label" style="text-align:left;"><td><?php echo $this->_tpl_vars['ListInward']['dc_no']; ?>
</td></div></div>
							<div id="errdcDate"> 
							<label class="col-sm-2 control-label" style="text-align:left;margin-left:15%">DC Date:</label>
							<div class="col-md-2 control-label" style="text-align:left;"><td><?php echo $this->_tpl_vars['ListInward']['dc_date']; ?>
</td></div></div>
							</div>-->
							<div class="form-group">
							   <div id="errinvoiceNo"> <label class="col-sm-2 control-label" style="text-align:left;">Invoice No:</label>
                               <div class="col-md-2 control-label" style="text-align:left;"><td><?php echo $this->_tpl_vars['ListInward']['invoice_no']; ?>
</td></div></div>
							<div id="errinvoiceDate"> 
							<label class="col-sm-2 control-label" style="text-align:left;margin-left:15%">Invoice Date:</label>
							<div class="col-md-2 control-label" style="text-align:left;"><td><?php echo $this->_tpl_vars['ListInward']['invoice_date']; ?>
</td></div></div>
							</div>
							<div class="form-group">
							   <div id="errsupplierName"> <label class="col-sm-2 control-label" style="text-align:left;">Supplier Name:</label>
                               <div class="col-md-2 control-label" style="text-align:left;"><td><?php echo $this->_tpl_vars['ListInward']['supplier_name']; ?>
</td></div></div>
							<div id="errsupplierCode"> 
							<label class="col-sm-2 control-label" style="text-align:left;margin-left:15%">Supplier Code:</label>
							<div class="col-md-2 control-label" style="text-align:left;"><td><?php echo $this->_tpl_vars['ListInward']['supplier_code']; ?>
</td></div></div>
							</div>
							<div class="form-group">
							   <div id="errfrieghtCharges"> <label class="col-sm-2 control-label" style="text-align:left;">Frieght Charges:</label>
                               <div class="col-md-2 control-label" style="text-align:left;"><td><?php echo $this->_tpl_vars['ListInward']['frieght_charges']; ?>
</td></div></div>
							   <div id="errcreatedBy"> 
							<label class="col-sm-2 control-label" style="text-align:left;margin-left:15%">Created By:</label>
							<div class="col-md-2 control-label" style="text-align:left;"><td><?php echo $this->_supers['session']['UserName']; ?>
</td></div></div>

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
        <!--<table align="center" class="dtable" cellspacing="1" cellpadding="3" width="100%" border="1PX solid black">-->
        <table align="center" class="table table-bordered" cellspacing="1" cellpadding="3" width="100%" border="1PX solid black">
		<tr>
		    <th width="80" ><center>Material Name</center></th>
			<th width="80" ><center>Material Code</center></th>
			 <th width="80"><center>Material Category</center></th>
	        <th width="50"><center>Material Category Code</center></th>
	        <th width="50"><center>Item Description</center></th>
			<th width="50" ><center>Price</center></th>
            <th width="40" ><center>Quantity</center></th>
			<th width="40" ><center>GST %</center></th>
			<th width="40" ><center>Total</center></th>
        </tr>
             <?php $_from = $this->_tpl_vars['inward_details_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['details_list']):
?>        
                <tr>
    <?php $this->assign('quantity', ($this->_tpl_vars['details_list']['quantity'])); ?>
	<?php $this->assign('total_price', ($this->_tpl_vars['details_list']['quantity']*$this->_tpl_vars['details_list']['price'])); ?>
	<?php $this->assign('invoice_amount', ($this->_tpl_vars['total_price'])); ?>
	            <td class="nohover" align="center" style="background-color:<?php echo '<?='; ?>
$row['priority_color']<?php echo '?>'; ?>
;">  <a ><?php echo $this->_tpl_vars['details_list']['material_name']; ?>
</a></td>
				<td class="nohover" align="center" style="background-color:<?php echo '<?='; ?>
$row['priority_color']<?php echo '?>'; ?>
;">  <a ><?php echo $this->_tpl_vars['details_list']['material_code']; ?>
</a></td>
				<td align="center">  <a ><?php echo $this->_tpl_vars['details_list']['material_category']; ?>
</a>&nbsp;</td>
                <td align="center">  <a ><?php echo $this->_tpl_vars['details_list']['item_category_code']; ?>
</a>&nbsp;</td>
                <td align="center" style="background-color:<?php echo '<?='; ?>
$row['priority_color']<?php echo '?>'; ?>
;">  <a ><?php echo $this->_tpl_vars['details_list']['item_description']; ?>
</a></td>
				<td  align="center">  <a ><?php echo $this->_tpl_vars['details_list']['price']; ?>
</a></td>
				<td  align="center">  <a ><?php echo $this->_tpl_vars['details_list']['quantity']; ?>
</a></td>
				<td  align="center">  <a ><?php echo $this->_tpl_vars['details_list']['gst']; ?>
</a></td>
				<td  align="right">  <a ><?php echo $this->_tpl_vars['details_list']['total_amount_fc']; ?>
</a></td>
            </tr>
			<?php $this->assign('total_invoice_amount', $this->_tpl_vars['invoice_amount']+$this->_tpl_vars['total_invoice_amount']); ?>
			<?php endforeach; endif; unset($_from); ?>
  				<tr style=" border-left: none">
				<td style="border: none">&nbsp;</td>
				<td style="border: none">&nbsp;</td>
				<td style="border: none">&nbsp;</td>
				<td style="border: none">&nbsp;</td>
				<td style="border: none">&nbsp;</td>
				<td style="border: none">&nbsp;</td>
				<td style="border: none">&nbsp;</td>
				<td ><a >Sub Total:&nbsp;&nbsp;</a></td>
				<td align="right"><a><?php echo $this->_tpl_vars['execute_query']['0']['sum_total']; ?>
</a></td>
				</tr>
				<!--<tr style=" border-left: none">
				<td style="border: none">&nbsp;</td>
				<td style="border: none">&nbsp;</td>
				<td style="border: none">&nbsp;</td>
				<td style="border: none">&nbsp;</td>
				<td style="border: none">&nbsp;</td>
				<td style="border: none">&nbsp;</td>
				<td style="border: none">&nbsp;</td>
				<td><a >GST:&nbsp;&nbsp;</a></td>
				<?php $this->assign('total_rvat_amount', ($this->_tpl_vars['total_invoice_amount']/20)); ?>	
				<td align="right"> <a >&nbsp;<?php echo $this->_tpl_vars['total_rvat_amount']; ?>
</a></td>
				</tr>-->
 				<tr style=" border-left: none">
				<td style="border: none">&nbsp;</td>
				<td style="border: none">&nbsp;</td>
				<td style="border: none">&nbsp;</td>
				<td style="border: none">&nbsp;</td>
				<td style="border: none">&nbsp;</td>
				<td style="border: none">&nbsp;</td>
				<td style="border: none">&nbsp;</td>
				<td><a >Invoice Amt:&nbsp;&nbsp;</a></td>
			<?php $this->assign('tax_per', ($this->_tpl_vars['execute_query']['0']['sum_total']+$this->_tpl_vars['execute_query1']['0']['frieght_charges'])); ?>
			<?php $this->assign('f_amt', ($this->_tpl_vars['tax_per'])); ?>

<!--				<?php $this->assign('total_invoice_amount_with_tax', ($this->_tpl_vars['total_hcess_amount']+$this->_tpl_vars['total_cess_amount']+$this->_tpl_vars['total_rvat_amount']+$this->_tpl_vars['total_invoice_amount']+$this->_tpl_vars['total_service_amount'])); ?>	
-->				<td align="right"> <a >&nbsp;<?php echo $this->_tpl_vars['f_amt']; ?>
</a></td>
				</tr>
				<!--<tr style=" border-left: none">
				<td style="border: none">&nbsp;</td>
				<td style="border: none">&nbsp;</td>
				<td style="border: none">&nbsp;</td>
				<td style="border: none">&nbsp;</td>
				<td style="border: none">&nbsp;</td>
				<td style="border: none">&nbsp;</td>
				<td style="border: none">&nbsp;</td>
				<td><a >Frieght Charges:&nbsp;&nbsp;</a></td>
				<?php $this->assign('freight_charges', ($this->_tpl_vars['total_invoice_amount']+$this->_tpl_vars['total_rvat_amount'])); ?>
				<?php $this->assign('total_Freight_amount_with_tax', ($this->_tpl_vars['freight_charges']-$this->_tpl_vars['total_invoice_amount_with_tax'])); ?>	
				<td align="right"> <a >&nbsp;<?php echo $this->_tpl_vars['total_Freight_amount_with_tax']; ?>
</a></td>
				</tr>-->				
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