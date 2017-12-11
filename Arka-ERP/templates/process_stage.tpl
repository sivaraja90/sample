<!-- SEARCH FORM START -->
<div id="std">            
<!-- SEARCH FORM END -->
{literal}
<script type="text/javascript">
function closeit(val){
	parent.document.forms['add_customer'].elements['enquiry_through'].value=val;
	/*var state = document.getElementById("state");
    var id = state.options[state.selectedIndex].value;
	dhxWins.window(id).hide();*/
        parent.dhxWins.window("w2").close();
	
}

function focus_process_stage()
{
document.getElementById("process_stage").focus();
return false;
}

</script>
{/literal}
<body onLoad="focus_process_stage();">
 <table width="100%" border="0" cellspacing=1 cellpadding=2>
    <form name="CusMgmt" method="post" >
    <!--<input type="hidden" name="a" value="search" >-->
					<tr>
				    <td colspan="2" align="right">{$LinkPage}{$PerPageNavigation}</td>
				    </tr>
    <tr><td>
       <table width="100%" border="0" cellspacing=0 cellpadding=1 class="dtable" >
        <tr >
	        <th width="30" align="center">&nbsp;&nbsp;S No.</th>
	        <th width="50" align="center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process Stage</th>
	       
        </tr>
		  <tr >
                <td align="center" bgcolor="#CCFFFF">&nbsp;</td>
                <td align="center" bgcolor="#CCFFFF"><input type="text" id="process_stage" name="process_stage" size="23" autocomplete="Off"><input id="search" name="search" value="" size="10" class="btn" type="submit" style="visibility:hidden"></td>
            </tr>
			
        {foreach from=$PageList item=ListDet}
            <tr >          
                <td align="center" title="">
                  <a href="#."  onClick="closeit('{$ListDet.process_stage}');">{$i++}</a></td>
                <td align="left"><a  href="#." onClick="closeit('{$ListDet.process_stage}');">{$ListDet.process_stage}</a></td>
			
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
