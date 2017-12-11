<?php /* Smarty version 2.6.25, created on 2016-01-21 17:15:10
         compiled from phone_postpaidBillpayment.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'phone_postpaidBillpayment.tpl', 107, false),)), $this); ?>
<!-- SEARCH FORM START -->
<div id="std">            
<!-- SEARCH FORM END -->
<?php echo '

<script type="text/javascript">

function SetChecked(val){
 ptr=document.ConMgmt;
 len=ptr.elements.length;
 var i=0;
 for(i=0; i<len; i++)
  if (ptr.elements[i].name==\'ConId[]\')
   ptr.elements[i].checked=val;
}
function numericFilter(pay_amts) {
   pay_amts.value = pay_amts.value.replace(/[^\\0-9]/ig, "");

}
/*function post(){
			FormName = document.add_customer;
  			FormName.method	= "POST";
            FormName.submit();
		}*/
		
function closeit(){
//	parent.document.forms[\'add_customer\'].elements[\'delivery_mgr\'].value=val;
	parent.dhxWins.window("w1").close();
}
</script>
'; ?>


<table border="0PX solid black" >
	 <form name="ConMgmt" method="post">
<input type="hidden" name="hdAction" />
<tr>
				    <td colspan="2" align="right"><?php echo $this->_tpl_vars['LinkPage']; ?>
<?php echo $this->_tpl_vars['PerPageNavigation']; ?>
</td>
				    </tr>
	<tr><td>				
	<table width="100%" border="1PX solid black" cellspacing=0  class="dtable" >
            <tr>
					   <th>Payment Mode:</th>
						<td><select name="pay_mode" id="pay_mode"style="height: 18px;">
						<option>-- Mode --</option>
						<option value="Cash" >Cash</option>
						<option value="Cheque" >Cheque</option>
						</select>
						</td>
						<th class="tcolor">Payment Ref No:</th>
						<td align="center"><input type="text" id="p_ref_no" name="p_ref_no" size="20" value="" autocompleate="Off">
						<input type="hidden" id="simId" name="simId" size="25" value="" autocomplete="Off">
						</td>
            </tr>
			
				
		</table>
		 </td></tr>
	<?php if ($this->_tpl_vars['ErrorMessage'] != ""): ?>
	  <tr> 
		<td class="errtxt"><img src="images/warning.gif" alt="Error:" style="padding: 0px 10px 4px 5px; vertical-align:middle" /><?php echo $this->_tpl_vars['ErrorMessage']; ?>
</td>
		<td  width=50%></td>
	  </tr>
	  <tr>
	<td>&nbsp;</td>
	</tr>
   	<?php endif; ?>
	<?php if ($this->_tpl_vars['SuccessMessage'] != ""): ?>
   <tr> 
		<td class="succs_text" width=50%><?php echo $this->_tpl_vars['SuccessMessage']; ?>
</td>
		<td width=100%></td>
   </tr>
	<tr>
		<td>&nbsp;</td>
	</tr>
    <tr>
	<?php endif; ?>
    <tr>
    
	 <td >
	 
	<table  border="1PX solid black" cellspacing=0 class="dtable">
	
	   <tr>
	   		<th width="80" >Check box</th>
	        <th width="80" >Mobile No</th>
			<th width="80">Bill Date</th>
			<th width="80">Due Date</th>
	        <th width="80">Bill Amount</th>
			<th width="80">Paid Amt</th>
			<th width="80">Pending Amt</th>
			<th width="90">Payment Amt</th>
        </tr>
			<?php $_from = $this->_tpl_vars['PageList1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ListDet3']):
?>	
           
            <tr>
				 <input type="hidden" id="simId" name="simId" value="" autocomplete="Off">
				<td align="center"><input type="checkbox" name="ConId[]" id="ConId<?php echo $this->_tpl_vars['ListDet3']['sl_no']; ?>
"  value="<?php echo $this->_tpl_vars['ListDet3']['sl_no']; ?>
" ></td>
				
				<td align="center" size="20"><?php echo $this->_tpl_vars['ListDet3']['mobile_no']; ?>
</td>
				<td align="center"><?php echo $this->_tpl_vars['ListDet3']['bill_date']; ?>
</td>
				<td align="center"><?php echo $this->_tpl_vars['ListDet3']['due_date']; ?>
</td>
                <td align="center" size="20" ><?php echo $this->_tpl_vars['ListDet3']['bill_amt']; ?>
</td>
				<!--<input type="hidden" id="bill_amt" name="bill_amt" size="20" value="<?php echo $this->_tpl_vars['ListDet3']['bill_amt']; ?>
" readonly="true"></td>-->
				<td align="center"><?php echo $this->_tpl_vars['ListDet3']['paid_amt']; ?>
</td>
				<td align="center"><?php echo $this->_tpl_vars['ListDet3']['pending_amt']; ?>
</td>
				<td align="center" ><input  type="text" id="pay_amts" name="<?php echo $this->_tpl_vars['ListDet3']['sl_no']; ?>
"   value="" onKeyUp="numericFilter(this);" autoComplete="Off" ></td>
                <input type="hidden" id="paid_date" name="paid_date" size="20" value="<?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d') : smarty_modifier_date_format($_tmp, '%Y-%m-%d')); ?>
" readonly="true">
			
			   
            </tr>
       <?php endforeach; endif; unset($_from); ?>
       </table>
     </td>
    
    </tr>
<br>
<table align="center" cellspacing="0" cellpadding="3" width="100%" border=0>
 
  <tr> <td align="center">
        <div class="tabber">
        <!--   <div id="reply" class="tabbertab" align="left">-->
                <p>
                        <p>
                            <div align="center" style="margin-top: 10px; margin-bottom: 10px;border: 0px;">
                                <input class="button" type="submit" name="Submit" value="Make Payment" >
                                <input class="button" type='reset' value='Reset' />
                                <input class="button" type='button' value='Cancel' onClick="closeit()" />
                            </div>
                        </p>
                                    
                </p>
            </div>
    </td>
 </tr>
</table>
</form>
</table>
</div>