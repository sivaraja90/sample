<?php /* Smarty version 2.6.25, created on 2016-01-20 15:10:44
         compiled from supplier_reg_window.tpl */ ?>
<!-- SEARCH FORM START -->
<div id="std">            
<!-- SEARCH FORM END -->
<?php echo '
<script type="text/javascript">
function closeit(val,val2){
	parent.document.forms[\'inwardReg\'].elements[\'supplier_name\'].value=val;
	parent.document.forms[\'inwardReg\'].elements[\'supplier_code\'].value=val2;
	parent.dhxWins.window("w1").close();
//	parent.dhxWins.window("w1").close();
/*	var supplier_name = document.getElementById("supplier_name");
    var id = supplier_name.options[supplier_name.selectedIndex].value;
	alert(\'hi\');*/
	
}
</script>
'; ?>


 <table width="100%" border="1PX solid black" cellspacing=1 cellpadding=2>
    <form name="SiteMgmt" method="post" >
    <!--<input type="hidden" name="a" value="search" >-->
					<tr>
				    <td colspan="2" align="right"><?php echo $this->_tpl_vars['LinkPage']; ?>
<?php echo $this->_tpl_vars['PerPageNavigation']; ?>
</td>
				    </tr>
    <tr><td>
       <table width="100%" border="1PX solid black" cellspacing=0 cellpadding=1 class="dtable" >
        <tr >
	        <th width="30" align="center">&nbsp;&nbsp;S No.</th>
	        <th width="70" align="center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Supplier Name</th>
			<th width="30" align="center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Supplier Code</th>
	       
        </tr>
		 <!-- <tr>
                <td align="center" bgcolor="#CCFFFF">&nbsp;</td>
                <td align="center" bgcolor="#CCFFFF"><input type="text" id="supplier_name" name="supplier_name" size="45" autocomplete="Off"><input id="search" name="search" value="" size="10" class="btn" type="submit" style="visibility:hidden"></td>
				<td align="center" bgcolor="#CCFFFF"><input type="text" id="supplier_code" name="supplier_code" size="23" autocomplete="Off"><input id="search" name="search" value="" size="10" class="btn" type="submit" style="visibility:hidden"></td>
            </tr>-->
			
        <?php $_from = $this->_tpl_vars['PageList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ListCus']):
?>
            <tr >          
                <td align="center" title="">
                  <a href="#."  onClick="closeit('<?php echo $this->_tpl_vars['ListCus']['supplier_name']; ?>
','<?php echo $this->_tpl_vars['ListCus']['supplier_code']; ?>
');"><?php echo $this->_tpl_vars['i']++; ?>
</a></td>
                <td align="left"><a  href="#." onClick="closeit('<?php echo $this->_tpl_vars['ListCus']['supplier_name']; ?>
','<?php echo $this->_tpl_vars['ListCus']['supplier_code']; ?>
');"><?php echo $this->_tpl_vars['ListCus']['supplier_name']; ?>
</a></td>
				<td align="left"><a  href="#." onClick="closeit('<?php echo $this->_tpl_vars['ListCus']['supplier_name']; ?>
','<?php echo $this->_tpl_vars['ListCus']['supplier_code']; ?>
');"><?php echo $this->_tpl_vars['ListCus']['supplier_code']; ?>
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