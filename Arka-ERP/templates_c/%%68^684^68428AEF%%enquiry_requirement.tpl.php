<?php /* Smarty version 2.6.25, created on 2017-11-30 16:46:42
         compiled from enquiry_requirement.tpl */ ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<title><?php if ($this->_tpl_vars['OverallSiteTitle'] != ''): ?><?php echo $this->_tpl_vars['OverallSiteTitle']; ?>
<?php else: ?>ARKA -::- <?php endif; ?> <?php echo $this->_tpl_vars['AddSiteTitle']; ?>
</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<?php echo $this->_tpl_vars['IncludeJS']; ?>

<?php echo $this->_tpl_vars['IncludeCSS']; ?>

<?php echo '
	
<script>

	  $(document).ready(function() {
    $(\'#example1\').DataTable( {
        "lengthMenu": [[5, 10, 25, 50, -1], [5, 10, 25, 50, "All"]]
    } );
} );

</script>
'; ?>

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
		<?php $_from = $this->_tpl_vars['PageList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ListDet']):
?>
			<tr>
				<td><input type="checkbox" name="checkbox" id="checkbox[<?php echo $this->_tpl_vars['ListDet']['item_code']; ?>
]"  onClick="closeit('<?php echo $this->_tpl_vars['ListDet']['item_code']; ?>
');"></td>

				<td><?php echo $this->_tpl_vars['ListDet']['item_code']; ?>
</td>
				<td><?php echo $this->_tpl_vars['ListDet']['item_name']; ?>
</td>
			</tr>
		<?php endforeach; endif; unset($_from); ?>
	
	</tbody>					  
</table>
</div>
</form>
   <?php echo '
    <script>
      $.widget.bridge(\'uibutton\', $.ui.button);
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

'; ?>

  </body>
</html>