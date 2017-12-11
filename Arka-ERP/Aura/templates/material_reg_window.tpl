<!-- SEARCH FORM START -->
<div id="std">            
<!-- SEARCH FORM END -->
{literal}
<script type="text/javascript">
function closeit(val,val2,val3,val4,val5){
//var from_window=parent.document.forms[0].name;

	parent.document.forms['inwardReg'].elements['material_name'].value=val;
	parent.document.forms['inwardReg'].elements['material_code'].value=val2;
	parent.document.forms['inwardReg'].elements['material_type'].value=val3;
	parent.document.forms['inwardReg'].elements['materialSpecification'].value=val4;
	parent.document.forms['inwardReg'].elements['material_category'].value=val5;
	parent.dhxWins.window("w2").close();
/*	var supplier_name = document.getElementById("supplier_name");
    var id = supplier_name.options[supplier_name.selectedIndex].value;
	alert('hi');*/

}


</script>
{/literal}

 <table width="100%" border="1PX solid black" cellspacing=1 cellpadding=2>
    <form name="CusMgmt" method="post" >
    <!--<input type="hidden" name="a" value="search" >-->
					<tr>
				    <td colspan="2" align="right">{$LinkPage}{$PerPageNavigation}</td>
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
			
        {foreach from=$PageList item=ListDet}
            <tr >          
<!--                <td align="center" title="">
                  <a href="#."  onClick="closeit('{$ListDet.supplier_name}','{$ListDet.supplier_code}');">{$ListDet.sl_no}</a></td>-->
			    <td  align="left"><a  href="#." onClick="closeit('{$ListDet.m_name}','{$ListDet.m_code}','{$ListDet.m_type}','{$ListDet.description}','{$ListDet.m_cat}');">{$i++}</a></td>
                <td  align="left"><a  href="#." onClick="closeit('{$ListDet.m_name}','{$ListDet.m_code}','{$ListDet.m_type}','{$ListDet.description}','{$ListDet.m_cat}');">{$ListDet.m_name}</a></td>
				<td align="left"><a  href="#." onClick="closeit('{$ListDet.m_name}','{$ListDet.m_code}','{$ListDet.m_type}','{$ListDet.description}','{$ListDet.m_cat}');">{$ListDet.m_code}</a></td>
				<td align="left"><a  href="#." onClick="closeit('{$ListDet.m_name}','{$ListDet.m_code}','{$ListDet.m_type}','{$ListDet.description}','{$ListDet.m_cat}');">{$ListDet.m_type}</a></td>
				<td align="left"><a  href="#." onClick="closeit('{$ListDet.m_name}','{$ListDet.m_code}','{$ListDet.m_type}','{$ListDet.description}','{$ListDet.m_cat}');">{$ListDet.description}</a></td>
				<td align="left"><a  href="#." onClick="closeit('{$ListDet.m_name}','{$ListDet.m_code}','{$ListDet.m_type}','{$ListDet.description}','{$ListDet.m_cat}');">{$ListDet.m_cat}</a></td>
			
            </tr>
			{foreachelse}
			<tr>
			<td height="20" colspan="11" align="center"><img src="images/warning.gif" border="0">&nbsp;No Records Found</td>
			</tr>
          {/foreach}	

       </table>
	  
    </td></tr>
         
       
    </form>
 </table>
</div>

