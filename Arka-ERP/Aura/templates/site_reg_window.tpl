<!-- SEARCH FORM START -->
<div id="std">            
<!-- SEARCH FORM END -->
{literal}
<script type="text/javascript">
function closeit(val,val2){
	parent.document.forms['siteReg'].elements['customer_name'].value=val;
	parent.document.forms['siteReg'].elements['customer_id'].value=val2;
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
	        <th width="30" align="center">&nbsp;&nbsp;S No.</th>
	        <th width="70" align="center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Customer Name</th>
			<th width="30" align="center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Customer Id</th>
	       
        </tr>
		 <!-- <tr>
                <td align="center" bgcolor="#CCFFFF">&nbsp;</td>
                <td align="center" bgcolor="#CCFFFF"><input type="text" id="supplier_name" name="supplier_name" size="45" autocomplete="Off"><input id="search" name="search" value="" size="10" class="btn" type="submit" style="visibility:hidden"></td>
				<td align="center" bgcolor="#CCFFFF"><input type="text" id="supplier_code" name="supplier_code" size="23" autocomplete="Off"><input id="search" name="search" value="" size="10" class="btn" type="submit" style="visibility:hidden"></td>
            </tr>-->
			
        {foreach from=$PageList item=ListCus}
            <tr >          
                <td align="center" title="">
                  <a href="#."  onClick="closeit('{$ListCus.customer_name}','{$ListCus.customer_id}');">{$i++}</a></td>
                <td align="left"><a  href="#." onClick="closeit('{$ListCus.customer_name}','{$ListCus.customer_id}');">{$ListCus.customer_name}</a></td>
				<td align="left"><a  href="#." onClick="closeit('{$ListCus.customer_name}','{$ListCus.customer_id}');">{$ListCus.customer_id}</a></td>
			
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
