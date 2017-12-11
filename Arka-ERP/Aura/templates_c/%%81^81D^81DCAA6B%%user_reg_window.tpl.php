<?php /* Smarty version 2.6.25, created on 2015-12-19 16:44:24
         compiled from user_reg_window.tpl */ ?>
<!-- SEARCH FORM START -->
<div id="std">            
<!-- SEARCH FORM END -->
<?php echo '
<script type="text/javascript">
function closeit(val,val1,val2,val3,val4){
    parent.document.forms[\'userReg\'].elements[\'site_name\'].value=val;
	parent.document.forms[\'userReg\'].elements[\'site_id\'].value=val1;
	parent.document.forms[\'userReg\'].elements[\'customer_name\'].value=val2;
	parent.document.forms[\'userReg\'].elements[\'customer_id\'].value=val3;
   parent.document.forms[\'userReg\'].elements[\'contact_person\'].value=val4;
parent.dhxWins.window("w1").close();
//	parent.dhxWins.window("w1").close();
/*	var supplier_name = document.getElementById("supplier_name");
    var id = supplier_name.options[supplier_name.selectedIndex].value;
	alert(\'hi\');*/
	
}
</script>
'; ?>


 <table width="100%" border="1PX solid black" cellspacing=1 cellpadding=2>
    <form name="UserMgmt" method="post" >
    <!--<input type="hidden" name="a" value="search" >-->
					<tr>
				    <td colspan="2" align="right"><?php echo $this->_tpl_vars['LinkPage']; ?>
<?php echo $this->_tpl_vars['PerPageNavigation']; ?>
</td>
				    </tr>
    <tr><td>
       <table width="100%" border="1PX solid black" cellspacing=0 cellpadding=1 class="dtable" >
        <tr>
	        <th width="120" align="center">&nbsp;S No.</th>
			<th width="150" align="center">&nbsp;Site Name</th>
			<th width="150" align="center">&nbsp;Site Id</th>
	        <th width="380" align="center">&nbsp;Customer Name</th>
			<th width="350" align="center">&nbsp;Customer Id</th>
	       	<th width="350" align="center">&nbsp;Contact Person</th>

        </tr>
		 <!-- <tr>
                <td align="center" bgcolor="#CCFFFF">&nbsp;</td>
                <td align="center" bgcolor="#CCFFFF"><input type="text" id="supplier_name" name="supplier_name" size="45" autocomplete="Off"><input id="search" name="search" value="" size="10" class="btn" type="submit" style="visibility:hidden"></td>
				<td align="center" bgcolor="#CCFFFF"><input type="text" id="supplier_code" name="supplier_code" size="23" autocomplete="Off"><input id="search" name="search" value="" size="10" class="btn" type="submit" style="visibility:hidden"></td>
            </tr>-->
			
        <?php $_from = $this->_tpl_vars['PageList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ListCus']):
?>
            <tr>          
                <td align="center" title="">
                  <a href="#."  onClick="closeit('<?php echo $this->_tpl_vars['ListCus']['site_name']; ?>
','<?php echo $this->_tpl_vars['ListCus']['site_id']; ?>
','<?php echo $this->_tpl_vars['ListCus']['customer_name']; ?>
','<?php echo $this->_tpl_vars['ListCus']['customer_id']; ?>
','<?php echo $this->_tpl_vars['ListCus']['contact_person']; ?>
');"><?php echo $this->_tpl_vars['i']++; ?>
</a></td>
    <td align="left"><a  href="#." onClick="closeit('<?php echo $this->_tpl_vars['ListCus']['site_name']; ?>
','<?php echo $this->_tpl_vars['ListCus']['site_id']; ?>
','<?php echo $this->_tpl_vars['ListCus']['customer_name']; ?>
','<?php echo $this->_tpl_vars['ListCus']['customer_id']; ?>
','<?php echo $this->_tpl_vars['ListCus']['contact_person']; ?>
');"><?php echo $this->_tpl_vars['ListCus']['site_name']; ?>
</a></td>
				<td align="left"><a  href="#." onClick="closeit('<?php echo $this->_tpl_vars['ListCus']['site_name']; ?>
','<?php echo $this->_tpl_vars['ListCus']['site_id']; ?>
','<?php echo $this->_tpl_vars['ListCus']['customer_name']; ?>
','<?php echo $this->_tpl_vars['ListCus']['customer_id']; ?>
','<?php echo $this->_tpl_vars['ListCus']['contact_person']; ?>
');"><?php echo $this->_tpl_vars['ListCus']['site_id']; ?>
</a></td>
			   <td align="left"><a  href="#." onClick="closeit('<?php echo $this->_tpl_vars['ListCus']['site_name']; ?>
','<?php echo $this->_tpl_vars['ListCus']['site_id']; ?>
','<?php echo $this->_tpl_vars['ListCus']['customer_name']; ?>
','<?php echo $this->_tpl_vars['ListCus']['customer_id']; ?>
','<?php echo $this->_tpl_vars['ListCus']['contact_person']; ?>
');"><?php echo $this->_tpl_vars['ListCus']['customer_name']; ?>
</a></td>
				<td align="left"><a  href="#." onClick="closeit('<?php echo $this->_tpl_vars['ListCus']['site_name']; ?>
','<?php echo $this->_tpl_vars['ListCus']['site_id']; ?>
','<?php echo $this->_tpl_vars['ListCus']['customer_name']; ?>
','<?php echo $this->_tpl_vars['ListCus']['customer_id']; ?>
','<?php echo $this->_tpl_vars['ListCus']['contact_person']; ?>
');"><?php echo $this->_tpl_vars['ListCus']['customer_id']; ?>
</a></td>
			<td align="left"><a  href="#." onClick="closeit('<?php echo $this->_tpl_vars['ListCus']['site_name']; ?>
','<?php echo $this->_tpl_vars['ListCus']['site_id']; ?>
','<?php echo $this->_tpl_vars['ListCus']['customer_name']; ?>
','<?php echo $this->_tpl_vars['ListCus']['customer_id']; ?>
'),'<?php echo $this->_tpl_vars['ListCus']['contact_person']; ?>
';"><?php echo $this->_tpl_vars['ListCus']['contact_person']; ?>
</a></td>
            </tr>
			<?php endforeach; else: ?>
			<tr>
			<td height="20" colspan="11" align="center"><img src="images/warning.gif" border="0">&nbsp;No Records Found</td>
			</tr>
              <?php endif; unset($_from); ?>	

       </table>
	  
    </td></tr>
         
       
    </form>
 </table>
</div>
