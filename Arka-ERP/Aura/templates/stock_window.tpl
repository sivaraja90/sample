<!-- SEARCH FORM START -->
<div id="std">            
<!-- SEARCH FORM END -->
{literal}
<script type="text/javascript">
function closeit(val,val2,val3,val4,val5,val6){
	parent.document.forms['outwardReg'].elements['material_name'].value=val;
	parent.document.forms['outwardReg'].elements['material_code'].value=val2;
	parent.document.forms['outwardReg'].elements['material_type'].value=val3;
	parent.document.forms['outwardReg'].elements['material_category'].value=val4;
	parent.document.forms['outwardReg'].elements['availableQuantity'].value=val5;
	parent.document.forms['outwardReg'].elements['materialPrice'].value=val6;
	parent.dhxWins.window("w1").close();
//	parent.dhxWins.window("w1").close();
/*	var supplier_name = document.getElementById("supplier_name");
    var id = supplier_name.options[supplier_name.selectedIndex].value;
	alert('hi');*/
	
}
</script>
{/literal}

 <table width="100%" border="1PX solid black" cellspacing=1 cellpadding=2>
    <form name="SiteMgmt" method="post" >
    <!--<input type="hidden" name="a" value="search" >-->
					<tr>
				    <td colspan="2" align="right">{$LinkPage}{$PerPageNavigation}</td>
				    </tr>
    <tr><td>
       <table width="100%" border="1PX solid black" cellspacing=0 cellpadding=1 class="dtable" >
        <tr >
	        <th width="30" >&nbsp;&nbsp;S No.</th>
	        <th width="50" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Material Name</th>
			<th width="50" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Material Code</th>
	       <th width="50">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Material Type</th>
		   <th width="50">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Material Category</th>
		   <th width="50" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Quantity</th>
		   <th width="50" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Price</th>
		   
        </tr>
		 <!-- <tr>
                <td align="center" bgcolor="#CCFFFF">&nbsp;</td>
                <td align="center" bgcolor="#CCFFFF"><input type="text" id="supplier_name" name="supplier_name" size="45" autocomplete="Off"><input id="search" name="search" value="" size="10" class="btn" type="submit" style="visibility:hidden"></td>
				<td align="center" bgcolor="#CCFFFF"><input type="text" id="supplier_code" name="supplier_code" size="23" autocomplete="Off"><input id="search" name="search" value="" size="10" class="btn" type="submit" style="visibility:hidden"></td>
            </tr>-->
			
        {foreach from=$PageList item=ListCus}
            <tr >          
                <td align="center" title="">
                  <a href="#."  onClick="closeit('{$ListCus.material_name}','{$ListCus.material_code}','{$ListCus.material_type}','{$ListCus.material_category}','{$ListCus.quantity}','{$ListCus.unit_price}');">{$i++}</a></td>
                <td align="left"><a href="#."  onClick="closeit('{$ListCus.material_name}','{$ListCus.material_code}','{$ListCus.material_type}','{$ListCus.material_category}','{$ListCus.quantity}','{$ListCus.unit_price}');">{$ListCus.material_name}</a></td>
				<td align="left"><a href="#."  onClick="closeit('{$ListCus.material_name}','{$ListCus.material_code}','{$ListCus.material_type}','{$ListCus.material_category}','{$ListCus.quantity}','{$ListCus.unit_price}');">{$ListCus.material_code}</a></td>
				<td align="left"><a href="#."  onClick="closeit('{$ListCus.material_name}','{$ListCus.material_code}','{$ListCus.material_type}','{$ListCus.material_category}','{$ListCus.quantity}','{$ListCus.unit_price}');">{$ListCus.material_type}</a></td>
				<td align="left"><a href="#."  onClick="closeit('{$ListCus.material_name}','{$ListCus.material_code}','{$ListCus.material_type}','{$ListCus.material_category}','{$ListCus.quantity}','{$ListCus.unit_price}');">{$ListCus.material_category}</a></td>
				<td align="left"><a href="#."  onClick="closeit('{$ListCus.material_name}','{$ListCus.material_code}','{$ListCus.material_type}','{$ListCus.material_category}','{$ListCus.quantity}','{$ListCus.unit_price}');">{$ListCus.quantity}</a></td>
				<td align="left"><a href="#."  onClick="closeit('{$ListCus.material_name}','{$ListCus.material_code}','{$ListCus.material_type}','{$ListCus.material_category}','{$ListCus.quantity}','{$ListCus.unit_price}');">{$ListCus.unit_price}</a></td>
			
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
