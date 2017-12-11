<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<title>{if $OverallSiteTitle neq ''}{$OverallSiteTitle}{else}ARKA -::- {/if} {$AddSiteTitle}</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
{$IncludeJS}
{$IncludeCSS}
{literal}
	
<script>

	  $(document).ready(function() {
    $('#example1').DataTable( {
        "lengthMenu": [[5, 10, 25, 50, -1], [5, 10, 25, 50, "All"]]
    } );
} );

</script>
{/literal}
</head>
	<body class="hold-transition skin-blue sidebar-mini" onLoad="doOnLoad();">
<form name="Enquiry_req" id="Enquiry_req">
<input type="hidden" name="hdAction" />
<div class="col-xs-12">
<table id="example1" class="table table-bordered table-striped" style="width:98%;">
<!--<div>
<a href="#"><i class="fa fa-refresh"></i></a> 
</div>-->
		<thead>
		<th style="width:20px;">Select</th>
		<th style="width:150px;">Product Code</th>
		<th>Product Name</th>
</thead>
	<tbody>
		{foreach from=$PageList item=ListDet}
			<tr>
				<td><input type="checkbox" name="checkbox" id="checkbox[{$ListDet.item_code}]"  onClick="closeit('{$ListDet.item_code}');"></td>

				<td>{$ListDet.item_code}</td>
				<td>{$ListDet.item_name}</td>
			</tr>
		{/foreach}
	
	</tbody>					  
</table>
</div>
</form>
   {literal}
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
<script>
function Remove_Product(childelemnt)
{
var child = parent.document.getElementById(childelemnt);
var parent_div = parent.document.getElementById("standard_bar");
parent_div.removeChild(child);
}
function closeit(val)
{

	if(document.getElementById("checkbox["+val+"]").checked==true)
	{
	var std_bar_obj=parent.document.getElementById("standard_bar");
	var btn = parent.document.createElement("DIV");
	btn.setAttribute("id", val);
	btn.innerHTML=val+",";
	btn.setAttribute("class", "selected_prdts");
	btn.setAttribute("onClick", "Remove_Product(this.id)");
    std_bar_obj.appendChild(btn);
	
	var cls_btn = parent.document.createElement("DIV");
	cls_btn.setAttribute("id", "close_"+val);
	cls_btn.setAttribute("onmouseover", "Focus_Close("+val+")");
	cls_btn.setAttribute("onmouseout", "DeFocus_Close("+val+")");
	}
	else if(document.getElementById("checkbox["+val+"]").checked==false)
	{
   	Remove_Product(val);
	
	}
		
	
}

</script>

{/literal}
  </body>
</html>