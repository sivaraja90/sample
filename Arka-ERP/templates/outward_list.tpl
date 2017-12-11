<!-- SEARCH FORM START -->
{literal}
<script type="text/javascript" src='./dhtmlxMessage/codebase/dhtmlxmessage.js'></script>
	<script type='text/javascript' src='./auto-complete/jquery-1.3.2.js'></script>
	<script type='text/javascript' 

src='./auto-complete/jquery.metadata.js'></script>
	<script type='text/javascript' src='./auto-complete/jquery.auto-complete.js?<?=mktime() ?>'></script>
	<script type='text/javascript' src='./auto-complete/js.js?<?= mktime()?>'></script>
	<link rel='stylesheet' type='text/css' href='auto-complete/jquery.auto-complete.css?<?= mktime() ?>' />

<script type="text/javascript">
function deleteCats(CatIdent){   
 if(confirm("Are you sure to Delete this Content?")){
  FormName		= document.PhoneMgmt; 
   //var gate = document.getElementById('gate_entry_id').value;
  FormName.action= "phone_list.php?phone_no="+CatIdent;
  
  FormName.submit();
 }
 } 
/*function deleteCats(CatIdent){
  
dhtmlx.confirm({
    title: "Close",
    type:"confirm-warning",
    text: "Are you sure to delete it?",
    callback: function(result) 
	{
	if(result==true)
	    {
  FormName		= document.PhoneMgmt;
  FormName.action	= "list_phones.php?deleid="+CatIdent;
  FormName.submit();
		}  
	}
});  
  
 }*/
function editCats(CatIdent) {
    
  FormName		= document.PhoneMgmt;
  FormName.action ='phone_details.php?phone_no='+CatIdent;          
  FormName.submit();

 }
 
  function viewCats(CatIdent)  
  {
  FormName		= document.PhoneMgmt;
  FormName.action ='phone_details_only_view.php?phone_no='+CatIdent;          
  FormName.submit();

 }
 
  function createWindow(CatIdent) {window.open("./phone_print.php?phone_no="+CatIdent+"&inputkey=U2FsdGVkX19hEKlbJkJbRppYm9wYxZQ8BnSOcROA3Rw");
   /* dhxWins = new dhtmlXWindows();
    dhxWins.setImagePath("./codebase/imgs/");
    dhxWins.attachViewportTo("winVP");
    win = dhxWins.createWindow("w1",20, 0, 870, 600);
    win.setText("Sales Details Sheet");
    win.attachURL("./sales_print.php?sales_quote_no="+CatIdent);
	win.denyMove();*/
}


 
 
 function submitter(MyForm)
{
	document.CusMgmt.method="POST";
	document.CusMgmt.page.value=MyForm;	
	document.CusMgmt.submit(); 

}

</script>


<script language="javascript">
function popUp(URL) {
day = new Date();
id = day.getTime();
eval("page" + id + " = window.open(URL, '" + id + "', 

'toolbar=0,scrollbars=0,location=0,statusbar=0,menubar=0,resizable=0,width=1366,height=7

68');");
}



</script>
{/literal}

	<ul id="sub_nav">
	{foreach from=$RList item=r}
		{if $r.role_name eq 'List Phone'}
            <li><a href="./phone_list.php" title="List Phone" ><img src="icons/open_tickets.gif" alt="add" border=0 >List</a></li>
		{/if}
		{/foreach}	
		{foreach from=$RList item=r}
		{if $r.role_name eq 'Add New Phone'}
			<li><a href="./phone_reg.php " title="New Phone"><img src="images/add_icon.gif" alt="add" border=0>Create Phone Quote </a></li>
		{/if}
		{/foreach}
		<li> <a href="./phone_list.php"><img src="images/refresh.gif" alt="Refresh" border=0></a></li>
            <li align="center"><h2 align="center">List of Phones</h2></li>
	</ul>
	</div>
    <div class="clear"></div>
	
<!-- SEARCH FORM END -->

<div style="margin-bottom:20px">
</br>
 <table width="100%" border="0" cellspacing=1 cellpadding=2 style="margin-top:-1.5%">
    <form name="PhoneMgmt" method="post" >
	<input type="hidden" name="page">
	<tr>
				    <td colspan="2" align="right"><a href="#" onclick="window.open('sales_xls.php?get_sites=sites','popUpWindow','height=150,width=300,left=100,top=100,resizable=yes,scrollbars=yes,toolbar=no,menubar=no,location=no,directories=no,status=yes,url=no');"><img src="images/xls.gif" alt="xls" border=0></a>&nbsp;{$LinkPage}{$PerPageNavigation}</td>
				    </tr>
    <tr><td>
       <table width="100%" border="0" cellspacing=1 cellpadding=2 class="dtable" id="dtable" align="center">
        <tr ><th width="8px">Status</th>
	        <th width="30">Sl No</th>
	        <th width="50">Phone No</th>
			<th width="30">Service Provider</th>
	        <th width="50">Last Bill Date</th>
			<th width="50">Last Due Date</th>
			<th width="30">Last Bill Payment Status</th>
			<th width="10">Status</th>
			<!--<th width="60">Print</th>
		{foreach from=$RList item=roles}
			{if $roles.role_name eq 'Edit Phone'}
			<th width="10">Action</th>
			 {/if}
		{/foreach}-->
        </tr>
		
		  <tr >
		  		
		  		<td align="center" bgcolor="#CCFFFF">&nbsp;<img src="images/icons/smallSearchIcon.gif" alt="Search" style="padding: 0px 10px 4px 5px; vertical-align:middle" /></td>
                <td align="center" bgcolor="#CCFFFF"><input type="text" id="phone_no" name="phone_no" size="25" autocomplete="Off"></td>
                <td align="center" bgcolor="#CCFFFF"><input type="text" id="service_provider" name="service_provider" size="25" autocomplete="Off"></td>
				<td align="center" bgcolor="#CCFFFF"><input type="text" id="next_bill_date" name="next_bill_date" size="25" autocomplete="Off"></td>
				<td align="center" bgcolor="#CCFFFF"><input type="text" id="next_due_date" name="next_due_date" size="25" autocomplete="Off"></td>
                <td align="center" bgcolor="#CCFFFF"><input type="text" id="last_bill_payment_status" name="last_bill_payment_status" size="15" autocomplete="Off"></td>
				<td align="center" bgcolor="#CCFFFF"><input type="text" id="status" name="status" size="8" autocomplete="Off">
				<td align="center" bgcolor="#CCFFFF"><input type="text" id="status" name="status" size="8" autocomplete="Off">
				<!--<td align="center" bgcolor="#CCFFFF">&nbsp;</td>-->
				<!--<input id="search" name="search" value="" size="10" class="btn" type="submit" style="visibility:hidden" ></td>-->
				
		<!--{foreach from=$RList item=roles}
			{if $roles.role_name eq 'Edit Phone'}
				<td align="center" bgcolor="#CCFFFF"><img src="images/icons/settings.gif" alt="Search" style="padding: 0px 10px 4px 5px; vertical-align:middle" /></td>
			{/if}
		{/foreach}-->
				
            </tr>
			
        {foreach from=$PageList item=ListDet}
            <tr > 
                <td>{if $ListDet.last_bill_payment_status eq "Paid"}
				   <img src="images/status_icon_ok.png" alt="Paid"/>
				   {elseif $ListDet.last_bill_payment_status eq "Pending"}
				   <img src="images/red.png" alt="Pending"/>
				   {/if}
                </td>  
                <td align="left"><a href="#" onclick="Javascript:viewCats('{$ListDet.phone_no}')">{$i++}</a></td>  
				<td align="left"><a href="#" onclick="Javascript:viewCats('{$ListDet.phone_no}')">{$ListDet.phone_no}</a></td>  
				<td align="left"><a href="#" onclick="Javascript:viewCats('{$ListDet.phone_no}')">{$ListDet.service_provider}</a></td>  
				<td align="left"><a href="#" onclick="Javascript:viewCats('{$ListDet.phone_no}')">{$ListDet.next_bill_date}</a></td>  
                
                
				{if $ListDet.next_due_date=='0000-00-00'}
				<td align="left"><a href="#" onclick="Javascript:viewCats('{$ListDet.phone_no}')">{$ListDet.phone_no}NA</a></td> {/if} 
				
				{if $ListDet.next_due_date !='0000-00-00'}
				<td align="left"><a href="#" onclick="Javascript:viewCats('{$ListDet.phone_no}')">{$ListDet.next_due_date}</a></td> {/if} 
				<td align="left"><a href="#" onclick="Javascript:viewCats('{$ListDet.phone_no}')">{$ListDet.last_bill_payment_status}</a></td> 
								
				{if $ListDet.status==1}
				<td align="left"> <a href="#" onClick="Javascript:viewCats('{$ListDet.phone_no}')">Active</a></td> {/if}
				
				{if $ListDet.status==0}
				<td align="left"><a href="#" onClick="Javascript:viewCats('{$ListDet.phone_no}')">InActive</a></td> {/if}
				
				
				<!--<td align="center"><a href="#"  onclick="createWindow('{$ListDet.phone_no}','{$ListDet.sl_no}');"><img src="images/icons/print.png" title="Quote" alt="Search" style="padding: 0px 10px 4px 5px; vertical-align:middle" /></a> </td>	
					{foreach from=$RList item=roles}
		 {if $roles.role_name eq 'Edit Phone'}
<td align="center"><a href="#"><img src="images/icons/edit.gif" border="0" align="middle" alt="Edit" title="Edit {$ListDet.phone_no}" onClick="Javascript:editCats('{$ListDet.phone_no}','{$ListDet.sl_no}')"></a>
                &nbsp;&nbsp;
                <a href="#"><img src="images/icons/delete.png" border="0" align="middle" alt="Delete" title="Delete {$ListDet.phone_no}" onClick="Javascript:deleteCats('{$ListDet.phone_no}','{$ListDet.sl_no}')"></a></td>			
				 {/if}
			 {/foreach}	-->
            </tr>
			{foreachelse}
			<tr>
			<td height="20" colspan="11" align="left"><img src="images/warning.gif" border="0">&nbsp;No Records Found</td>
			</tr>
              {/foreach}	       </table>
			  </td></tr>
         
    </form>
 </table>
  <input id="search" name="search" value=""  class="btn" type="submit" style="visibility:hidden">
</div>
</div>