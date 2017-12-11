<?php /* Smarty version 2.6.25, created on 2016-01-21 17:47:55
         compiled from addNewBill.tpl */ ?>
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
function post(){
			FormName = document.add_customer;
  			FormName.method	= "POST";
            FormName.submit();
		}
		
function closeit(){
//	parent.document.forms[\'add_customer\'].elements[\'delivery_mgr\'].value=val;
	parent.dhxWins.window("w1").close();
}
</script>
'; ?>


<table width="100%" cellpadding="2" cellspacing="0" border="0">
	 <form name="ConMgmt" method="post">
<input type="hidden" name="hdAction" />
	
	<?php if ($this->_tpl_vars['ErrorMessage'] != ""): ?>
	  <tr> 
		<td class="errtxt"><img src="images/warning.gif" alt="Error:" style="padding: 0px 10px 4px 5px; vertical-align:middle" /><?php echo $this->_tpl_vars['ErrorMessage']; ?>
</td>
		<td  width=50%></td>
	  </tr>
	  <tr>
	<td>&nbsp;</td></tr>
    <tr>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['SuccessMessage'] != ""): ?>
	  <tr > 
		<td class="succs_text" width=50%><?php echo $this->_tpl_vars['SuccessMessage']; ?>
</td>
		<td width=100%></td>
	  </tr>
	  <tr>
	<td>&nbsp;</td></tr>
    <tr>
	<?php endif; ?>
    <tr>
    
	 <td width=100% valign="top">
	 
	<table width="100%" border="" cellspacing=0 cellpadding=2 class="" align="center">
	
	   <tr>
	   		<th width="80">&nbsp;</th>
	        <th width="80">Phone #</th>
			<th width="80">Bill Date</th>
			<th width="80">Due Date</th>
	        <th width="80">Bill Amount</th>

        </tr>
				
           <?php $_from = $this->_tpl_vars['DPList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ListDet3']):
?> 
            <tr>
				
				<td align="center"><input type="checkbox" name="ConId[]" id="ConId<?php echo $this->_tpl_vars['ListDet3']['sl_no']; ?>
"  value="<?php echo $this->_tpl_vars['ListDet3']['sl_no']; ?>
"></td>
				<input type="hidden" id="mobile_no" name="mobile_no" size="20" value="<?php echo $this->_tpl_vars['ListDet3']['mobile_no']; ?>
" readonly="true">
				<td align="center" title="" nowrap><?php echo $this->_tpl_vars['ListDet3']['mobile_no']; ?>
</td>
				<td align="center" title="" nowrap><?php echo $this->_tpl_vars['ListDet3']['bill_date']; ?>
</td>
				<td align="center" title="" nowrap><?php echo $this->_tpl_vars['ListDet3']['due_date']; ?>
</td>
                <td nowrap><input class="txt" type="text" id="bill_amts" name="<?php echo $this->_tpl_vars['ListDet3']['sl_no']; ?>
" size="20" style="width:100%" value="" onKeyUp="numericFilter(this);" autoComplete="Off"></td>
            </tr> 
		   <?php endforeach; else: ?>
			<tr>
			<td height="20" colspan="5" align="center"><img src="images/warning.gif" border="0">&nbsp; No Records Found, All Bill Amounts are Added.</td>
			</tr>
              <?php endif; unset($_from); ?>
       </table>
     </td>
    
    </tr>
</table>

<table align="center" cellspacing="0" cellpadding="3" width="100%" border=0>
 
  <tr> <td align="center">
        <div class="tabber">
        <!--   <div id="reply" class="tabbertab" align="left">-->
                <p>
                        <p>
                            <div align="center" style="margin-top: 10px; margin-bottom: 10px;border: 0px;">
                                <input class="button" type="submit" name="Submit" value="Save" >
                                <input class="button" type='button' value='Cancel' onClick="closeit()" />
                            </div>
                        </p>
                    </form>                
                </p>
            </div>
    </td>
 </tr>
</table>
</div>