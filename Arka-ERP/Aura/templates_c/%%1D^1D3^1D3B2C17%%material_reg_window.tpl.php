<?php /* Smarty version 2.6.25, created on 2016-01-21 12:25:22
         compiled from material_reg_window.tpl */ ?>
<!-- SEARCH FORM START -->
<div id="std">            
<!-- SEARCH FORM END -->
<?php echo '
<script type="text/javascript">
function closeit(val,val2,val3,val4,val5){
//var from_window=parent.document.forms[0].name;

	parent.document.forms[\'inwardReg\'].elements[\'material_name\'].value=val;
	parent.document.forms[\'inwardReg\'].elements[\'material_code\'].value=val2;
	parent.document.forms[\'inwardReg\'].elements[\'material_type\'].value=val3;
	parent.document.forms[\'inwardReg\'].elements[\'materialSpecification\'].value=val4;
	parent.document.forms[\'inwardReg\'].elements[\'material_category\'].value=val5;
	parent.dhxWins.window("w2").close();
/*	var supplier_name = document.getElementById("supplier_name");
    var id = supplier_name.options[supplier_name.selectedIndex].value;
	alert(\'hi\');*/

}


</script>
'; ?>


 <table width="100%" border="1PX solid black" cellspacing=1 cellpadding=2>
    <form name="CusMgmt" method="post" >
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
	        <th width="50" align="center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Material Name</th>
			<th width="50" align="center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Material Code</th>
			<th width="50" align="center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Material Type</th>
			<th width="50" align="center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Material Specification</th>
			<th width="50" align="center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Material Category</th>
	       
        </tr>
		  <tr >
                <!--<td align="center" bgcolor="#CCFFFF">&nbsp;</td>-->
              <!--  <td align="center" bgcolor="#CCFFFF"><input type="text" id="material_name" name="material_name" size="23" autocomplete="Off"></td>
				<td align="center" bgcolor="#CCFFFF"><input type="text" id="material_code" name="material_code" size="15" autocomplete="Off"></td>
				<td align="center" bgcolor="#CCFFFF"><input type="text" id="material_type" name="material_type" size="16" autocomplete="Off"></td>
				<td align="center" bgcolor="#CCFFFF"><input type="text" id="material_specification" name="material_specification" size="18" autocomplete="Off"></td>
				<td align="center" bgcolor="#CCFFFF"><input type="text" id="material_category" name="material_category" size="15" autocomplete="Off"></td>
				<input id="search" name="search" value="" size="10" class="btn" type="submit" style="visibility:hidden">
            </tr>-->
			
        <?php $_from = $this->_tpl_vars['PageList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ListDet']):
?>
            <tr >          
<!--                <td align="center" title="">
                  <a href="#."  onClick="closeit('<?php echo $this->_tpl_vars['ListDet']['supplier_name']; ?>
','<?php echo $this->_tpl_vars['ListDet']['supplier_code']; ?>
');"><?php echo $this->_tpl_vars['ListDet']['sl_no']; ?>
</a></td>-->
			    <td  align="left"><a  href="#." onClick="closeit('<?php echo $this->_tpl_vars['ListDet']['m_name']; ?>
','<?php echo $this->_tpl_vars['ListDet']['m_code']; ?>
','<?php echo $this->_tpl_vars['ListDet']['m_type']; ?>
','<?php echo $this->_tpl_vars['ListDet']['description']; ?>
','<?php echo $this->_tpl_vars['ListDet']['m_cat']; ?>
');"><?php echo $this->_tpl_vars['i']++; ?>
</a></td>
                <td  align="left"><a  href="#." onClick="closeit('<?php echo $this->_tpl_vars['ListDet']['m_name']; ?>
','<?php echo $this->_tpl_vars['ListDet']['m_code']; ?>
','<?php echo $this->_tpl_vars['ListDet']['m_type']; ?>
','<?php echo $this->_tpl_vars['ListDet']['description']; ?>
','<?php echo $this->_tpl_vars['ListDet']['m_cat']; ?>
');"><?php echo $this->_tpl_vars['ListDet']['m_name']; ?>
</a></td>
				<td align="left"><a  href="#." onClick="closeit('<?php echo $this->_tpl_vars['ListDet']['m_name']; ?>
','<?php echo $this->_tpl_vars['ListDet']['m_code']; ?>
','<?php echo $this->_tpl_vars['ListDet']['m_type']; ?>
','<?php echo $this->_tpl_vars['ListDet']['description']; ?>
','<?php echo $this->_tpl_vars['ListDet']['m_cat']; ?>
');"><?php echo $this->_tpl_vars['ListDet']['m_code']; ?>
</a></td>
				<td align="left"><a  href="#." onClick="closeit('<?php echo $this->_tpl_vars['ListDet']['m_name']; ?>
','<?php echo $this->_tpl_vars['ListDet']['m_code']; ?>
','<?php echo $this->_tpl_vars['ListDet']['m_type']; ?>
','<?php echo $this->_tpl_vars['ListDet']['description']; ?>
','<?php echo $this->_tpl_vars['ListDet']['m_cat']; ?>
');"><?php echo $this->_tpl_vars['ListDet']['m_type']; ?>
</a></td>
				<td align="left"><a  href="#." onClick="closeit('<?php echo $this->_tpl_vars['ListDet']['m_name']; ?>
','<?php echo $this->_tpl_vars['ListDet']['m_code']; ?>
','<?php echo $this->_tpl_vars['ListDet']['m_type']; ?>
','<?php echo $this->_tpl_vars['ListDet']['description']; ?>
','<?php echo $this->_tpl_vars['ListDet']['m_cat']; ?>
');"><?php echo $this->_tpl_vars['ListDet']['description']; ?>
</a></td>
				<td align="left"><a  href="#." onClick="closeit('<?php echo $this->_tpl_vars['ListDet']['m_name']; ?>
','<?php echo $this->_tpl_vars['ListDet']['m_code']; ?>
','<?php echo $this->_tpl_vars['ListDet']['m_type']; ?>
','<?php echo $this->_tpl_vars['ListDet']['description']; ?>
','<?php echo $this->_tpl_vars['ListDet']['m_cat']; ?>
');"><?php echo $this->_tpl_vars['ListDet']['m_cat']; ?>
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
