<?php
   require('includes/common.php');
	include_once $config['SiteClassPath']."class.Staff.php";
   	include_once $config['SiteClassPath']."class.SupplierReg.php";

	$objStaff		= new Staff();
	$objStaff->chkStaffLogin($objArray);
	
    $ObjSupplierReg	= new SupplierReg();
	$ObjSupplierReg->RolesLists();
	$ObjSupplierReg->GetSupplierView($objArray);
	//$ObjCustomerReg->GetCustomerLists($objArray);
	
	if(isset($_POST['hdAction']))
  		$ObjSupplierReg->InsertSupplierContent($_POST);
		
		
	  	if(isset($_GET['sm']))
	{ 
	$msg_got=base64_decode($_GET['sm']);            
	$objSmarty->assign('SuccessMessage', $msg_got);
	}	
	if(isset($_GET['em']))
	{ 
	$msg_got=base64_decode($_GET['em']);            
	$objSmarty->assign('ErrorMessage', $msg_got);
	}	
  
  $objSmarty->assign('IncludeTpl', 'supplierReg.tpl');
  $objSmarty->assign('OverallSiteTitle', $config['SiteTitle'].'-::- ERP');
   $objSmarty->assign('document-state','dynamic');
  
  //$objSmarty->assign('address','http://localhost/alf/');
 $objSmarty->assign('address',$config['SiteGlobalPath']);
  
  
 $objSmarty->assign('IncludeJS', 
   '<script src="' . $config['SiteGlobalPath'] . 'codebase/dhtmlxcalendar.js" type="text/javascript"></script>'. "\n" . 
   '<script src="' . $config['SiteGlobalPath'] . 'js/ajax.js" type="text/javascript"></script>'. "\n" .
   '<script src="' . $config['SiteGlobalPath'] . 'js/scp.js" type="text/javascript"></script>'. "\n" . 
   '<script src="' . $config['SiteGlobalPath'] . 'js/tabber.js" type="text/javascript"></script>'. "\n" . 
   '<script src="' . $config['SiteGlobalPath'] . 'js/calendar.js" type="text/javascript"></script>'. "\n" . 
   '<script src="' . $config['SiteGlobalPath'] . 'js/autolock.js" type="text/javascript"></script>'. "\n" .
   '<script src="' . $config['SiteGlobalPath'] . 'js/jquery.loadmask.js" type="text/javascript"></script>'. "\n" .
   '<script src="' . $config['SiteGlobalPath'] . 'js/jquery.js" type="text/javascript"></script>'. "\n" .
   '<script src="' . $config['SiteGlobalPath'] . 'js/page_change.js" type="text/javascript"></script>'. "\n" .
   '<script src="' . $config['SiteGlobalPath'] . 'codebase/common/dhtmlxcommon.js" type="text/javascript"></script>'. "\n" .
   '<script src="' . $config['SiteGlobalPath'] . 'codebase/dhtmlxwindows.js" type="text/javascript"></script>'. "\n" .
   '<script src="' . $config['SiteGlobalPath'] . 'codebase/dhtmlxcontainer.js" type="text/javascript"></script>'. "\n" .
   '<script src="' . $config['SiteGlobalPath'] . 'js/dhtmlxcommon.js" type="text/javascript"></script>'. "\n" .
   '<script src="' . $config['SiteGlobalPath'] . 'js/dhtmlxgrid.js" type="text/javascript"></script>'. "\n" .
   '<script src="' . $config['SiteGlobalPath'] . 'js/dhtmlxgridcell.js" type="text/javascript"></script>'. "\n" .
   '<script src="' . $config['SiteGlobalPath'] . 'js/topNav.js" type="text/javascript"></script>'. "\n" .
   '<script src="' . $config['SiteGlobalPath'] . 'js/bsn.AutoSuggest_2.1.3.js" type="text/javascript"></script>');
   
  $objSmarty->assign('IncludeCSS',
  '<link rel="stylesheet" href="' . $config['SiteGlobalPath'] . 'codebase/dhtmlxcalendar.css" type="text/css" media="all"/>'. "\n" .
  '<link rel="stylesheet" href="' . $config['SiteGlobalPath'] . 'codebase/dhtmlxcalendar_dhx_skyblue.css" type="text/css" media="all"/>'. "\n" .
  '<link rel="stylesheet" href="' . $config['SiteGlobalPath'] . 'css/main.css" type="text/css" media="all"/>'. "\n" .
  '<link rel="stylesheet" href="' . $config['SiteGlobalPath'] . 'css/jquery.loadmask.css" type="text/css" media="all"/>'. "\n" .
  '<link rel="stylesheet" href="' . $config['SiteGlobalPath'] . 'css/style.css" type="text/css" media="all"/>'. "\n" .
  '<link rel="stylesheet" href="' . $config['SiteGlobalPath'] . 'css/tabs.css" type="text/css" media="all"/>'. "\n" .
   '<link rel="stylesheet" href="' . $config['SiteGlobalPath'] . 'codebase/dhtmlxwindows.css" type="text/css" media="all"/>'. "\n" .
  '<link rel="stylesheet" href="' . $config['SiteGlobalPath'] . 'codebase/skins/dhtmlxwindows_dhx_skyblue.css" type="text/css" media="all"/>'. "\n" .
  '<link rel="stylesheet" href="' . $config['SiteGlobalPath'] . 'css/dhtmlxgrid.css" type="text/css" media="all"/>'. "\n" .
  '<link rel="stylesheet" href="' . $config['SiteGlobalPath'] . 'css/dhtmlxgrid_dhx_skyblue.css" type="text/css" media="all"/>'. "\n" .
  '<link rel="stylesheet" href="' . $config['SiteGlobalPath'] . 'css/autosuggest_inquisitor.css" type="text/css" media="print"/>' ); 
  
  /*Display page*/
  $objSmarty->assign('HeaderTpl', 'header.tpl');
  $objSmarty->assign('FooterTpl', 'footer.tpl');
  
  $objSmarty->display('pagetemplate.tpl');
?>