<?php
  require('includes/common.php');
	
 	include_once $config['SiteClassPath']."class.Staff.php";
	include_once $config['SiteClassPath']."class.BillingReg.php";
	include_once $config['SiteClassPath']."class.split_page_results.php";
	
	$objStaff		= new Staff();
	$objStaff->chkSLogin($objArray);
	$objStaff->chkStaffLogin($objArray);
	
	$objBillingReg	= new BillingReg();
	$objBillingReg->company($_POST);
	if(isset($_POST['billno']) && isset($_POST['companyname']))
	{ echo "Hiiiiii";exit;
	$objBillingReg->PayBill($_POST);
	}
		 
  $objSmarty->assign('IncludeTpl', 'bill_payment.tpl');
  $objSmarty->assign('OverallSiteTitle', $config['SiteTitle'].'- TASCA CRM');
  $objSmarty->assign('robots','index,follow');
  $objSmarty->assign('key_word','');
  $objSmarty->assign('generator','');
  $objSmarty->assign('author','rsureshit@hotmail.com');
  $objSmarty->assign('document-state','dynamic');
  $objSmarty->assign('address',$config['SiteGlobalPath']);
   
 $objSmarty->assign('IncludeJS', 
'<script type="text/javascript" src="' . $config['SiteGlobalPath'] . 'assets/bac07538/jquery.js?1475323904"></script>'. "\n" .
'<script type="text/javascript" src="' . $config['SiteGlobalPath'] . 'assets/bac07538/jquery.rating.js?1475323904"></script>'. "\n" .
'<script type="text/javascript" src="' . $config['SiteGlobalPath'] . 'js/X2Widget.js?1475323904"></script>'. "\n" .
'<script type="text/javascript" src="' . $config['SiteGlobalPath'] . 'js/lib/dropzone/dropzone.js?1475323904"></script>'. "\n" .
'<script type="text/javascript" src="' . $config['SiteGlobalPath'] . 'js/auxlib.js?1475323904"></script>'. "\n" .
'<script type="text/javascript" src="' . $config['SiteGlobalPath'] . 'js/FileUploader.js?1475323904"></script>'. "\n" .
'<script type="text/javascript" src="' . $config['SiteGlobalPath'] . 'assets/bac07538/jui/js/jquery-ui.js?1475323904"></script>'. "\n" .
'<script type="text/javascript" src="' . $config['SiteGlobalPath'] . 'js/X2QuickCRUD.js?1475323904"></script>'. "\n" .
'<script type="text/javascript" src="' . $config['SiteGlobalPath'] . 'js/X2QuickCreate.js?1475323904"></script>'. "\n" .
'<script type="text/javascript" src="' . $config['SiteGlobalPath'] . 'js/X2QuickRead.js?1475323904"></script>'. "\n" .
'<script type="text/javascript" src="' . $config['SiteGlobalPath'] . 'js/clockWidget.js?1475323904"></script>'. "\n" .
'<script type="text/javascript" src="' . $config['SiteGlobalPath'] . 'js/fullcalendar-1.6.1/fullcalendar/fullcalendar.js?1475323904"></script>'. "\n" .
'<script type="text/javascript" src="' . $config['SiteGlobalPath'] . 'js/X2Forms.js?1475323904"></script>'. "\n" .
'<script type="text/javascript" src="' . $config['SiteGlobalPath'] . 'js/Attachments.js?1475323904"></script>'. "\n" .
'<script type="text/javascript" src="' . $config['SiteGlobalPath'] . 'js/LayoutManager.js?1475323904"></script>'. "\n" .
'<script type="text/javascript" src="' . $config['SiteGlobalPath'] . 'js/media.js?1475323904"></script>'. "\n" .
'<script type="text/javascript" src="' . $config['SiteGlobalPath'] . 'js/modernizr.custom.66175.js?1475323904"></script>'. "\n" .
'<script type="text/javascript" src="' . $config['SiteGlobalPath'] . 'js/widgets.js?1475323904"></script>'. "\n" .
'<script type="text/javascript" src="' . $config['SiteGlobalPath'] . 'js/qtip/jquery.qtip.js?1475323904"></script>'. "\n" .
'<script type="text/javascript" src="' . $config['SiteGlobalPath'] . 'assets/73f25c87/jquery.maskMoney.js?1475323904"></script>'. "\n" .
'<script type="text/javascript" src="' . $config['SiteGlobalPath'] . 'js/X2GridView/X2GridViewTopPagerManager.js?1475323904"></script>'. "\n" .
'<script type="text/javascript" src="' . $config['SiteGlobalPath'] . 'assets/bac07538/jui/js/jquery-ui-i18n.min.js?1475323904"></script>'. "\n" .
'<script type="text/javascript" src="' . $config['SiteGlobalPath'] . 'assets/a4847a0b/js/calendar.js?1475323904"></script>'. "\n" .
'<script type="text/javascript" src="' . $config['SiteGlobalPath'] . 'js/recordView/RecordView.js?1475323904"></script>'. "\n" .
'<script type="text/javascript" src="' . $config['SiteGlobalPath'] . 'js/recordView/FormView.js?1475323904"></script>'. "\n" .
'<script type="text/javascript" src="' . $config['SiteGlobalPath'] . 'js/Relationships.js?1475323904"></script>'. "\n" .

'<script type="text/javascript" src="' . $config['SiteGlobalPath'] . 'js/sortableWidgets/SortableWidgetManager.js?1475323904"></script>'. "\n" .
'<script type="text/javascript" src="' . $config['SiteGlobalPath'] . 'js/sortableWidgets/TwoColumnSortableWidgetManager.js?1475323904"></script>'. "\n" .
'<script type="text/javascript" src="' . $config['SiteGlobalPath'] . 'js/sortableWidgets/RecordViewWidgetManager.js?1475323904"></script>'. "\n" .
'<script type="text/javascript" src="' . $config['SiteGlobalPath'] . 'js/sortableWidgets/SortableWidget.js?1475323904"></script>'. "\n" .
'<script type="text/javascript" src="' . $config['SiteGlobalPath'] . 'js/sortableWidgets/GridViewWidget.js?1475323904"></script>'. "\n" .'

<script type="text/javascript" src="' . $config['SiteGlobalPath'] . 'dhtmlxMessage/codebase/dhtmlxmessage.js"></script>'. "\n" .'
<script type="text/javascript" src="' . $config['SiteGlobalPath'] . 'auto-complete/jquery.metadata.js"></script>'. "\n" .'
<script type="text/javascript" src="' . $config['SiteGlobalPath'] . 'auto-complete/jquery.auto-complete.js?<?= mktime()?"></script>'. "\n" .'
<script type="text/javascript" src="' . $config['SiteGlobalPath'] . 'js/jstorage.min.js?1475323904"></script>'. "\n" .
   
			'<script src="' . $config['SiteGlobalPath'] . 'js1/dhtmlxcommon.js" type="text/javascript"></script>'. "\n" .
			'<script src="' . $config['SiteGlobalPath'] . 'codebase/dhtmlxwindows.js" type="text/javascript"></script>'. "\n" .
			'<script src="' . $config['SiteGlobalPath'] . 'codebase/dhtmlxmessage.js" type="text/javascript"></script>'. "\n" .
			'<script src="' . $config['SiteGlobalPath'] . 'codebase/dhtmlxcontainer.js" type="text/javascript"></script>'. "\n" .
			'<link rel="stylesheet" href="' . $config['SiteGlobalPath'] . 'css/dhtmlxgrid.css" type="text/css" media="all"/>'. "\n" .
			'<link rel="stylesheet" href="' . $config['SiteGlobalPath'] . 'css/dhtmlxgrid_dhx_skyblue.css" type="text/css" media="all"/>'. "\n" .
			'<link rel="stylesheet" href="' . $config['SiteGlobalPath'] . 'css/autosuggest_inquisitor.css" type="text/css" media="print"/>'. "\n" .
			'<script src="' . $config['SiteGlobalPath'] . 'js1/scp.js" type="text/javascript"></script>');
   


 $objSmarty->assign('IncludeCSS', 
 
    '<link rel="stylesheet" href="' . $config['SiteGlobalPath'] . 'codebase/skins/dhtmlxmessage_dhx_skyblue.css" type="text/css" media="all"/>'. "\n" .
    '<link rel="stylesheet" href="' . $config['SiteGlobalPath'] . 'codebase/skins/dhtmlxwindows_dhx_skyblue.css" type="text/css" media="all"/>'. "\n" .
    '<link rel="stylesheet" href="' . $config['SiteGlobalPath'] . 'codebase/dhtmlxwindows.css" type="text/css" media="all"/>'. "\n" .
    '<link rel="stylesheet" href="' . $config['SiteGlobalPath'] . 'css/autosuggest_inquisitor.css" type="text/css" media="print"/>'. "\n" .
  
  
'<link rel="stylesheet" type="text/css" href="' . $config['SiteGlobalPath'] . 'js/lib/dropzone/dropzone.css?1475323904" />'. "\n" .
'<link rel="stylesheet" type="text/css" href="' . $config['SiteGlobalPath'] . 'themes/css/components/FileUploader.css?1475323904" />'. "\n" .
'<link rel="stylesheet" type="text/css" href="' . $config['SiteGlobalPath'] . 'js/lib/spectrum/spectrum.css?1475323904" />'. "\n" .
'<link rel="stylesheet" type="text/css" href="' . $config['SiteGlobalPath'] . 'themes/css/gridview/styles.css?1475323904" />'. "\n" .
/*'<link rel="stylesheet" type="text/css" href="' . $config['SiteGlobalPath'] . 'themes/css/gridview/responsiveStyles.css?1475323904&amp;1475323904" />'. "\n" .*/
'<link rel="stylesheet" type="text/css" href="' . $config['SiteGlobalPath'] . 'assets/bac07538/jui/css/base/jquery-ui.css?1475323904" />'. "\n" .
'<link rel="stylesheet" type="text/css" href="' . $config['SiteGlobalPath'] . 'assets/ea18ceed/jquery-ui-timepicker-addon.css?1475323904" />'. "\n" .
/*'<link rel="stylesheet" type="text/css" href="' . $config['SiteGlobalPath'] . 'assets/64aa4f17/pager.css?1475323904" />'. "\n" .*/
'<link rel="stylesheet" type="text/css" href="' . $config['SiteGlobalPath'] . 'themes/css/components/clockWidget.css?1475323904" />'. "\n" .
'<link rel="stylesheet" type="text/css" href="' . $config['SiteGlobalPath'] . 'js/fullcalendar-1.6.1/fullcalendar/fullcalendar.css?1475323904" />'. "\n" .
'<link rel="stylesheet" type="text/css" href="' . $config['SiteGlobalPath'] . 'themes/css/components/smallCalendar.css?1475323904" />'. "\n" .
'<link rel="stylesheet" type="text/css" href="' . $config['SiteGlobalPath'] . 'css/normalize.css?1475323904" media="all" />'. "\n" .
'<link rel="stylesheet" type="text/css" href="' . $config['SiteGlobalPath'] . 'themes/css/print.css?1475323904" media="print" />'. "\n" .
'<link rel="stylesheet" type="text/css" href="' . $config['SiteGlobalPath'] . 'themes/css/screen.css?1475323904" />'. "\n" .
'<link rel="stylesheet" type="text/css" href="' . $config['SiteGlobalPath'] . 'themes/css/auxlib.css?1475323904" />'. "\n" .
'<link rel="stylesheet" type="text/css" href="' . $config['SiteGlobalPath'] . 'themes/css/jquery-ui.css?1475323904" />'. "\n" .
'<link rel="stylesheet" type="text/css" href="' . $config['SiteGlobalPath'] . 'themes/css/dragtable.css?1475323904" />'. "\n" .
'<link rel="stylesheet" type="text/css" href="' . $config['SiteGlobalPath'] . 'themes/css/main.css?1475323904" />'. "\n" .
'<link rel="stylesheet" type="text/css" href="' . $config['SiteGlobalPath'] . 'themes/css/ui-elements.css?1475323904" />'. "\n" .
'<link rel="stylesheet" type="text/css" href="' . $config['SiteGlobalPath'] . 'themes/css/layout.css?1475323904" />'. "\n" .
'<link rel="stylesheet" type="text/css" href="' . $config['SiteGlobalPath'] . 'themes/css/details.css?1475323904" />'. "\n" .
'<link rel="stylesheet" type="text/css" href="' . $config['SiteGlobalPath'] . 'themes/css/x2forms.css?1475323904" />'. "\n" .
'<link rel="stylesheet" type="text/css" href="' . $config['SiteGlobalPath'] . 'themes/css/form.css?1475323904" />'. "\n" .
'<link rel="stylesheet" type="text/css" href="' . $config['SiteGlobalPath'] . 'themes/css/publisher.css?1475323904" />'. "\n" .
'<link rel="stylesheet" type="text/css" href="' . $config['SiteGlobalPath'] . 'themes/css/sortableWidgets.css?1475323904" />'. "\n" .
'<link rel="stylesheet" type="text/css" href="' . $config['SiteGlobalPath'] . 'themes/css/components/sortableWidget/views/gridViewWidget.css?1475323904" />'. "\n" .
'<link rel="stylesheet" type="text/css" href="' . $config['SiteGlobalPath'] . 'js/qtip/jquery.qtip.css?1475323904" />'. "\n" .
'<link rel="stylesheet" type="text/css" href="' . $config['SiteGlobalPath'] . 'js/checklistDropdown/jquery.multiselect.css?1475323904" />'. "\n" .
'<link rel="stylesheet" type="text/css" href="' . $config['SiteGlobalPath'] . 'themes/css/rating/jquery.rating.css?1475323904" />'. "\n" .
'<link rel="stylesheet" type="text/css" href="' . $config['SiteGlobalPath'] . 'themes/css/fontAwesome/css/font-awesome.css?1475323904" />'. "\n" .
'<link rel="stylesheet" type="text/css" href="' . $config['SiteGlobalPath'] . 'themes/css/bootstrap/bootstrap.css?1475323904" />'. "\n" .
'<link rel="stylesheet" type="text/css" href="' . $config['SiteGlobalPath'] . 'themes/css/css-loaders/load8.css?1475323904" />'. "\n" .
'<link rel="stylesheet" type="text/css" href="' . $config['SiteGlobalPath'] . 'themes/css/recordView.css?1475323904" />'. "\n" .
'<link rel="stylesheet" type="text/css" href="' . $config['SiteGlobalPath'] . 'themes/css/responsiveLayout.css?1475323904" />'. "\n" .
'<link rel="stylesheet" type="text/css" href="' . $config['SiteGlobalPath'] . 'themes/css/responsiveUIElements.css?1475323904" />'. "\n" .
'<link rel="stylesheet" type="text/css" href="' . $config['SiteGlobalPath'] . 'themes/css/responsiveX2Forms.css?1475323904" />'. "\n" .
'<link rel="stylesheet" type="text/css" href="' . $config['SiteGlobalPath'] . 'themes/css/components/sortableWidget/views/inlineRelationshipsWidget.css?1475323904" />'. "\n" .
'<link rel="stylesheet" type="text/css" href="' . $config['SiteGlobalPath'] . 'themes/css/components/sortableWidget/recordViewWidgets/TransactionalViewWidget.css?1475323904" />'. "\n" .'

<link rel="stylesheet" type="text/css" href="' . $config['SiteGlobalPath'] . 'codebase/skins/dhtmlxmessage_dhx_skyblue.css" />'. "\n" .'
<link rel="stylesheet" type="text/css" href="' . $config['SiteGlobalPath'] . 'auto-complete/jquery.auto-complete.css?<?= mktime() ?" />'. "\n" .'
<link rel="stylesheet" type="text/css" href="' . $config['SiteGlobalPath'] . 'themes/css/global.css?1475323904" />');

  /*Display page*/
  $objSmarty->assign('HeaderTpl', 'header.tpl');
  $objSmarty->assign('FooterTpl', 'footer.tpl');  
 
  $objSmarty->display('pagetemplate.tpl');
?>