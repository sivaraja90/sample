{$IncludeCSS}
{$IncludeJS}
{literal}
<script type="text/javascript" src='./dhtmlxMessage/codebase/dhtmlxmessage.js'></script>
	<script type='text/javascript' src='./auto-complete/jquery-1.3.2.js'></script>
	<script type='text/javascript' src='./auto-complete/jquery.metadata.js'></script>
	<script type='text/javascript' src='./auto-complete/jquery.auto-complete.js?<?= mktime() ?>'></script>
	<script type='text/javascript' src='./auto-complete/js.js?<?= mktime() ?>'></script>
	<link rel="stylesheet" href= "./codebase/skins/dhtmlxmessage_dhx_skyblue.css" type="text/css" media="all"/> 
	<link rel='stylesheet' type='text/css' href='auto-complete/jquery.auto-complete.css?<?= mktime() ?>' />
	<link rel="stylesheet" href="'https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
	<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css"/>
	<style>
	th {
    font-style: normal;
	font-weight:100;
	font-size:14px;
	margin-right:100px;
}
table { 
    border-spacing: 2px;
    border-collapse:collapse;
	
}
td
{ padding:10px;

}
.isa_success
{
color:#4F8A10;
background-color:#DFF2BF;
}
.isa_error
{
color:#D8000C;
background-color:#FFBABA;
}
.isa_success i,.isa_error i
{
margin:10px 22px;
font-size:2em;
vertical-align:middle;

}
</style>
<script>
function doOnLoad() 
	{	
  var enq_id = btoa(document.getElementById('enquiry_id').value);
  var sal_ord_no = btoa(document.getElementById('sales_order_no').value);
 // var enq_type = btoa(document.getElementById('enquiry_type').value);
  var rev_no = btoa(document.getElementById('revised_version').value);
  var page = document.getElementById('ppage').value;

if(page == 'Original')
	{ 
  window.location ="sales_order_print.php?enquiry_id="+enq_id+"&sales_order_no="+sal_ord_no+"&revised_version="+rev_no;
  //location.target = "_blank";
	}
else if(page == 'Duplicate')
   {
  window.location ="sales_order_print1.php?enquiry_id="+enq_id+"&sales_order_no="+sal_ord_no+"&revised_version="+rev_no; target="_blank";
   }
else if(page == 'Triplicate')
   {
  window.location ="sales_order_print2.php?enquiry_id="+enq_id+"&sales_order_no="+sal_ord_no+"&revised_version="+rev_no; target="_blank";
  }
else if(page == 'Quadruplicate')
  {
  window.location ="sales_order_print3.php?enquiry_id="+enq_id+"&sales_order_no="+sal_ord_no+"&revised_version="+rev_no; 
  }
}

</script>


{/literal}

		<form class="form-horizontal" name="Reload"><body onLoad="doOnLoad();">
<table class="col-md-6" >
<tr class="form-group">
					<input type="hidden" id="sales_order_no" name="sales_order_no" value="{$smarty.get.sales_order_no}"/>
					<input type="hidden" id="revised_version" name="revised_version" value="{$smarty.get.revised_version}"/>
					<input type="hidden" id="enquiry_type" name="enquiry_type" value="{$smarty.get.enquiry_type}"/>
					<input type="hidden" id="enquiry_id" name="enquiry_id"  value="{$smarty.get.enquiry_id}"/>
					<input type="hidden" id="ppage" name="ppage"  value="{$smarty.get.PPage}"/>
</tr>
		

</table>
					</body>
					</form>
					
