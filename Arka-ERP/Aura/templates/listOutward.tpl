<!-- SEARCH FORM START -->
<div id="std">
<div id="nav">
        <ul id="main_nav">
            {foreach from=$RList item=roles}
			{if $roles.role_name eq 'List Inwards'}
             <li><a href="javascript: void(0)" title="List Inward" ><img src="images/icons/logs.gif" alt="List" border=0>&nbsp;List&nbsp;&nbsp;</a></li>
			 {/if}
	    {/foreach}
                 
            <li> <a href="list_inward.php"><img src="images/icons/refresh.gif" alt="Refresh" border=0>&nbsp;Refresh&nbsp;&nbsp;</a></li>
            {foreach from=$RList item=r}
		{if $r.role_name eq 'Add New Inward'}
            <li><a href="inward_reg.php" title="New Inward Registration" ><img src="images/add_icon.gif" alt="">&nbsp;New Inward&nbsp;</a></li>
                {/if}
		{/foreach} 

        </ul>
         
    </div>
	<div id="sub_nav">
            <h2 align="center">ALWEL - LIST OF INWARDS</h2>
        </div>
    <div class="clear"></div>

</div>
{literal}

<script type="text/javascript" src='./dhtmlxMessage/codebase/dhtmlxmessage.js'></script>
<script type="text/javascript">


    function getval()
        {

		
		var from_date,to_date;
		from_date=document.getElementById("from_date").value;
		to_date=document.getElementById("to_date").value;
		if(from_date=="" || to_date=="")
		{
		//alert("Please Specify Date");
		
		dhtmlx.alert({
		title: "Error !",
                type:"alert-error",
		text: "Please Specify Date !",
		});		
		
		return false;
		}
		else
		{
        window.open('xl_conv_stock_module.inc.php?switch_case='+"inward_list"+"&"+"from_date="+from_date+"&"+"to_date="+to_date,'popUpWindow','height=150,width=300,left=100,top=100,resizable=yes,scrollbars=yes,toolbar=no,menubar=no,location=no,directories=no,status=yes,url=no')

		}
        }


	var myCalendar;
function doOnLoad() {
    
    var date;date=new Date();
    myCalendar = new dhtmlXCalendarObject(["from_date","to_date"]);
   
}


function deleteCats(CatIdent){
dhtmlx.confirm({
    title: "Close",
    type:"confirm-warning",
    text: "Are you sure to delete it?",
    callback: function(result) 
	{
	if(result==true)
	    {

  FormName		= document.inward_list;
  FormName.action	= "list_inward.php?deleid="+CatIdent;
  FormName.submit();

 		}  
	}
});
 
 }


function showList(str,name)
{

if (str=="")
  {
  document.getElementById("txtHint").value="";
  return;
  }
if (window.XMLHttpRequest)
  {
  xmlhttp=new XMLHttpRequest();
  }
else
  {
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
	
	var x;
        if(xmlhttp.responseText)
	   {
            alert(xmlhttp.responseText);  
	x=xmlhttp.responseText;
	document.getElementById("listing").innerHTML=x;

	   }
	 else 
	   {
	   document.getElementById(prefx+"_"+"htsc_grouping").innerHTML="<option value='0'>Please select region</option>";

	   }  
       
    }
  }
xmlhttp.open("GET","listing_ajax.php?txt_bx="+name+"&"+"q="+str,true);
xmlhttp.send();
}

function submitter(MyForm)
{
	document.inward_list.method="POST";
	document.inward_list.page.value=MyForm;	
	document.inward_list.submit(); 

}


</script>



<script type="text/javascript">

    var options = {
        script:"ajax.php?api=tickets&f=search&limit=10&",
        varname:"input",
        shownoresults:false,
        maxresults:10,
        callback: function (obj) { document.getElementById('query').value = obj.id; document.forms[0].submit();}
    };
    var autosug = new bsn.AutoSuggest('query', options);
</script>
{/literal}
<!-- SEARCH FORM END -->
<body onLoad="doOnLoad();">
<div style="margin-bottom:20px">
<br>
  <form method="post" name="inward_list">
    	      <input type="hidden" name="page"> 

{if $smarty.session.Region eq Chennai}

<table width="100%" border="0" cellspacing=1 cellpadding=2>
 <tr>
                <th  width="25%" style="padding-left:13%">Region :</th>
                <td width="30%" ><select name="select_region" id="select_region" onChange="document.inward_list.submit();">
				<option value="0">--Select Region--</option>
				<option value="Tirunelveli">Tirunelveli</option>
				<option value="Coimbatore">Coimbatore</option>
				</select></td>
    <!--  	    <td width="15%">&nbsp;</td>
				<td width="14%">&nbsp;</td>
				<td width="14%">&nbsp;</td>
                <td ><input type="text" id="from_date" name="from_date" value="" placeholder="From Date" size="25" readonly="true" autocomplete="Off"></td>
                <td ><input type="text" id="to_date" name="to_date" value="" placeholder="To Date" size="25" readonly="true" autocomplete="Off"></td>				 	
	            <td colspan="2" align="right"><img src="images/xls.gif" alt="xls" border=0 onClick="getval();" style="cursor:pointer;" ></td>
				<td >&nbsp;</td>   -->
				<td  width="50%" align="right">{$LinkPage}{$PerPageNavigation}</td>
</tr>
</table>
{/if}

{if $smarty.session.Region neq Chennai}

<table width="100%" border="0" cellspacing=1 cellpadding=2>
 <tr>
				<td>From Date</td>
                <td ><input type="text" id="from_date" name="from_date" value="" placeholder="From Date" size="25" readonly="true" autocomplete="Off"></td>
				<td>To Date</td>
                <td ><input type="text" id="to_date" name="to_date" value="" placeholder="To Date" size="25" readonly="true" autocomplete="Off"></td>				 	
	            <td  align="right"><img src="images/xls.gif" alt="xls" border=0 onClick="getval();" style="cursor:pointer;" ></td>
				<td  >{$LinkPage}{$PerPageNavigation}</td>
</tr>
</table>
{/if}




<table width="100%" border="0" cellspacing=1 cellpadding=2 style="margin-top:-20px;">
<tr>
{if $SuccessMessage neq ""}<td class="succs_text"  style="min-width:50%">{$SuccessMessage}</td>{/if}
{if $ErrorMessage neq ""}<td class="errtxt"  style="min-width:50%">	{$ErrorMessage}</td>{/if}		
                <td width="15%" >&nbsp;</td>
 				<td width="15%" >&nbsp;</td>
				<td width="14%" >&nbsp;</td>
				<td width="14%" >&nbsp;</td>
</tr>
</table>

 <table width="100%" border="0" cellspacing=1 cellpadding=2 style="margin-top:-1%">
 
	  <tr><td>
       <table width="100%" border="0" cellspacing=0 cellpadding=2 class="dtable" align="center">
        <tr>
		
	        <th width="20">Sl.No</th>
	        <th width="30">Inward Entry ID</th>
			<th width="30">DC Date</th>
	        <th width="50">DC No</th>
			<th width="100">Supplier Name</th>
			<th width="40" >Invoice Date</th>
			<th width="40" >Invoice Amount</th>
			<th width="20" >Tax %</th>
			<th width="30" >Tax Values</th>
            <th width="40" >Total Price</th>
			<th width="40" >Region</th>
			
		{foreach from=$RList item=roles}
			{if $roles.role_name eq 'Modify Inwards'}
			<th width="10" align="center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Action</th>
			 {/if}
		{/foreach}	
			
        </tr>
        
			 <tr class="<?=$class?> " id="<?=$row['ticket_id']?>">
			 
                <td bgcolor="#CCFFFF" align="center"></td>
                <td bgcolor="#CCFFFF" align="center"><input type="text" id="inward_entry_id" name="inward_entry_id" value="" autocomplete="off" size="15"></td>
                
				<td bgcolor="#CCFFFF" align="center"><input type="text" id="dc_date" name="dc_date" value="" autocomplete="off" onKeyUp="showList(this.value,this.id)" size="15"></td>
                <td bgcolor="#CCFFFF" align="center"><input type="text" id="dc_no" name="dc_no" value="" autocomplete="off" autocomplete="off" onkeyup="showList(this.value,this.id)" size="18"></td>
		<td bgcolor="#CCFFFF" align="center"><input type="text" id="supplier_name" onKeyUp="showList(this.value,this.id)" autocomplete="off" name="supplier_name" value="" size="25"></td>
                <td bgcolor="#CCFFFF" align="center"><input type="text" id="invoice_date" name="invoice_date" value="" onKeyUp="showList(this.value,this.id)" autocomplete="off" size="10"></td>
				 <td bgcolor="#CCFFFF" align="center"><input type="text" id="invoice_amt" name="invoice_amt" value="" onKeyUp="showList(this.value,this.id)" autocomplete="off" size="10"></td>
				 <td bgcolor="#CCFFFF" align="center"><input type="text" id="tax_per" name="tax_per" value="" autocomplete="off" onKeyUp="showList(this.value,this.id)" size="11"></td>
				  <td bgcolor="#CCFFFF" align="center"><input type="text" id="tax_value" name="tax_value" value="" onKeyUp="showList(this.value,this.id)" autocomplete="off" size="8"></td>
                <td bgcolor="#CCFFFF" align="center"><input type="text" id="total" name="total" value="" onKeyUp="showList(this.value,this.id)" autocomplete="off" size="15"></td>
		<td bgcolor="#CCFFFF" align="center"><input type="text" id="region" name="region" value="" onKeyUp="showList(this.value,this.id)" autocomplete="off" size="15"></td>
				<input id="search" name="search" value="" size="10" class="btn" type="submit" style="visibility:hidden" > 
				
		{foreach from=$RList item=roles}
			{if $roles.role_name eq 'Modify Inwards'}
				<td align="center" bgcolor="#CCFFFF"><img src="images/icons/smallSearchIcon.gif" alt="Search" style="padding: 0px 10px 4px 5px; vertical-align:middle" /></td>
			{/if}
		{/foreach}
				
            </tr>




         <div id="listing">
        {foreach from=$PageList item=ListDet}
            <tr >          

                <td align="left"> <a title="Click to See Stock Details" href="inward_details_only_view.php?inward_entry_id={$ListDet.inward_entry_id}"> {$i++}</a></td>
				<!--<td><a title=" Ticket" href="tickets.php?id=<?=$row['ticket_id']?>">{$ListDet.customer_type}</a>&nbsp;</td>-->
                <td align="left"> &nbsp;&nbsp;<a title="Click to See Stock Details" href="inward_details_only_view.php?inward_entry_id={$ListDet.inward_entry_id}"> {$ListDet.inward_entry_id}&nbsp;</a></td>
				<td align="left"> <a title="Click to See Stock Details" href="inward_details_only_view.php?inward_entry_id={$ListDet.inward_entry_id}">&nbsp;&nbsp; {$ListDet.dc_date}&nbsp;</a></td>
                <td  align="left" > <a title="Click to See Stock Details" href="inward_details_only_view.php?inward_entry_id={$ListDet.inward_entry_id}">&nbsp;&nbsp; {$ListDet.dc_no}</a></td>
				<td  align="left" > <a title="Click to See Stock Details" href="inward_details_only_view.php?inward_entry_id={$ListDet.inward_entry_id}">&nbsp;&nbsp; {$ListDet.supplier_name}</a></td>

                <td  align="left"> <a title="Click to See Stock Details" href="inward_details_only_view.php?inward_entry_id={$ListDet.inward_entry_id}">&nbsp;&nbsp; {$ListDet.invoice_date}</a></td>
				 <td  align="left"> <a title="Click to See Stock Details" href="inward_details_only_view.php?inward_entry_id={$ListDet.inward_entry_id}">&nbsp;&nbsp; {$ListDet.invoice_amount}</a></td>
				 	<td align="left"> <a title="Click to See Stock Details" href="inward_details_only_view.php?inward_entry_id={$ListDet.inward_entry_id}">&nbsp;&nbsp; {$ListDet.tax_percentage}&nbsp;</a></td>
				  <td  align="left"> <a title="Click to See Stock Details" href="inward_details_only_view.php?inward_entry_id={$ListDet.inward_entry_id}">&nbsp;&nbsp; {$ListDet.tax}</a></td>
                <td  align="left"> <a title="Click to See Stock Details" href="inward_details_only_view.php?inward_entry_id={$ListDet.inward_entry_id}">&nbsp;&nbsp; {$ListDet.total}</a></td>
				


				<td  align="left" ><a title="Click to See Stock Details" href="inward_details_only_view.php?inward_entry_id={$ListDet.inward_entry_id}"> &nbsp;&nbsp; {$ListDet.region}</a></td>


		{foreach from=$RList item=roles}
		 {if $roles.role_name eq 'Modify Inwards'}
				<td align="left" > &nbsp;&nbsp;
				<a title="Click to Edit Inward Stock Details" href="inward_details.php?inward_entry_id={$ListDet.inward_entry_id}"><img src="images/edit.gif" border="0"></a>&nbsp;&nbsp;
				<a title="Click to Delete Stock Details" href="#"><img src="images/delete.png" border="0" onClick="Javascript:deleteCats('{$ListDet.inward_entry_id}')"></a>
				
               			
				
				 </td>
		{/if}
		{/foreach}	

																			
            </tr>
			{foreachelse}
			<tr>
			<td height="20" colspan="13" align="center"><img src="images/warning.gif" border="0">&nbsp;No Records Found</td>
			</tr>
              {/foreach}	
         </div>

       </table>
    </td></tr>
    </form>
 </table>
 <br>
</div>
</div>
</div>