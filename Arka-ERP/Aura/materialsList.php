<?php
  require('includes/common.php');
  	include_once $config['SiteClassPath']."class.Staff.php";
//	include_once $config['SiteClassPath']."class.Turbine.php";
	include_once $config['SiteClassPath']."class.MaterialItem.php";
	include_once $config['SiteClassPath']."class.split_page_results.php";
	
	$objStaff		= new Staff();
	$objStaff->chkStaffLogin($objArray);
	$objStaff->RolesLists($objArray);
	
	//$ObjTurbine	= new Turbine();
//	$ObjTurbine->GetTurbine($objArray);
	
	$ObjMaterialItem	= new MaterialItem();
	//$ObjMaterialItem->RoleList();
	$ObjMaterialItem->GetMaterialLists($objArray);
	
     if(isset($_REQUEST['deleid'])){
	 $ObjMaterialItem->DeleteID2($_REQUEST['deleid']);
	 }
  
  $objSmarty->assign('IncludeTpl', 'materialsList.tpl');
  $objSmarty->assign('OverallSiteTitle', $config['SiteTitle'].'-::-ERP');
  $objSmarty->assign('robots','index,follow');
  $objSmarty->assign('key_word','');
  $objSmarty->assign('generator','');
  $objSmarty->assign('author','rsureshit@hotmail.com');
  $objSmarty->assign('document-state','dynamic');
  
  //$objSmarty->assign('address','http://localhost/alf/');
  $objSmarty->assign('address', $config['SiteGlobalPath']);
 $objSmarty->assign("LDList",$LDList[0]);
  
  $objSmarty->assign('IncludeJS', 
   '<script src="' . $config['SiteGlobalPath'] . 'js/ajax.js" type="text/javascript"></script>'. "\n" .
   '<script src="' . $config['SiteGlobalPath'] . 'js/scp.js" type="text/javascript"></script>'. "\n" . 
   '<script src="' . $config['SiteGlobalPath'] . 'js/tabber.js" type="text/javascript"></script>'. "\n" . 
   '<script src="' . $config['SiteGlobalPath'] . 'js/calendar.js" type="text/javascript"></script>'. "\n" . 
   '<script src="' . $config['SiteGlobalPath'] . 'js/autolock.js" type="text/javascript"></script>'. "\n" .
   '<script src="' . $config['SiteGlobalPath'] . 'js/jquery.loadmask.js" type="text/javascript"></script>'. "\n" .
   '<script src="' . $config['SiteGlobalPath'] . 'js/jquery.js" type="text/javascript"></script>'. "\n" .
   '<script src="' . $config['SiteGlobalPath'] . 'js/page_change.js" type="text/javascript"></script>'. "\n" .
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
  '<link rel="stylesheet" href="' . $config['SiteGlobalPath'] . 'dhtmlxMessage/codebase/skins/dhtmlxmessage_dhx_skyblue.css" type="text/css" media="all"/>'. "\n" .     
  '<link rel="stylesheet" href="' . $config['SiteGlobalPath'] . 'codebase/skins/dhtmlxwindows_dhx_skyblue.css" type="text/css" media="all"/>'. "\n" .
  '<link rel="stylesheet" href="' . $config['SiteGlobalPath'] . 'css/dhtmlxgrid.css" type="text/css" media="all"/>'. "\n" .
  '<link rel="stylesheet" href="' . $config['SiteGlobalPath'] . 'css/dhtmlxgrid_dhx_skyblue.css" type="text/css" media="all"/>'. "\n" .
  '<link rel="stylesheet" href="' . $config['SiteGlobalPath'] . 'css/autosuggest_inquisitor.css" type="text/css" media="print"/>' ); 
  
  
  /*Display page*/
   $objSmarty->assign('HeaderTpl', 'header.tpl');
  $objSmarty->assign('FooterTpl', 'footer.tpl');  
  
  $objSmarty->display('pagetemplate.tpl');
?>