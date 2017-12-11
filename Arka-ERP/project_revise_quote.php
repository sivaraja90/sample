<?php
  require('includes/common.php');
 	include_once $config['SiteClassPath']."class.Staff.php";
	include_once $config['SiteClassPath']."class.ProjectQuoteReg.php";
	include_once $config['SiteClassPath']."class.split_page_results.php";
	
	$objStaff		= new Staff();
	$objStaff->chkSLogin($objArray);
		$objStaff->chkStaffLogin($objArray);
	$objStaff->RolesLists($objArray);
	
	$ObjProjectQuoteReg	= new ProjectQuoteReg();
	
   if(isset($_POST['hdAction']))
	{
	$ObjProjectQuoteReg->InsertProjectReviseQuote($_POST);
	}
	
	if(isset($_GET['project_quote_no']) && isset($_GET['revised_version']))
	{
	$ObjProjectQuoteReg->Revised_List(($_GET['project_quote_no']) && $_GET['revised_version']);
	$ObjProjectQuoteReg->Revised_Project($_GET['project_quote_no'] , $_GET['revised_version']);
	}
	
	if(isset($_GET['project_quote_no']))
	{
		$ObjProjectQuoteReg->SelectQuote(($_GET['project_quote_no']));
	}
	
	if(isset($_GET['succs_msg_for_insert']))
         {
          $objSmarty->assign('SuccessMessage', 'New project Quote Added Successfully');
         } 
	
	if((isset($_GET['sl_no'])) && (isset($_GET['revised_version'])) && (isset($_GET['project_quote_no'])) && (isset($_GET['total'])) && (isset($_GET['sub_total'])))
	{ 

		$ObjProjectQuoteReg->DeleteRev($_GET['sl_no'],$_GET['revised_version'], $_GET['project_quote_no'] , $_GET['total'] , $_GET['sub_total']);
	
	} 
		
	if(isset($_GET['succs_msg_for_del']))
         {
          $objSmarty->assign('SuccessMessage', 'Project Deleted Successfully');
         } 
		
  $objSmarty->assign('IncludeTpl', 'project_revise_quote.tpl');
  $objSmarty->assign('OverallSiteTitle', $config['SiteTitle'].'- Project');
  $objSmarty->assign('robots','index,follow');
  $objSmarty->assign('key_word','');
  $objSmarty->assign('generator','');
  $objSmarty->assign('author','rsureshit@hotmail.com');
  $objSmarty->assign('document-state','dynamic');
  $objSmarty->assign('address',$config['SiteGlobalPath']);

 
 
   $objSmarty->assign('IncludeJS', 
   '<script src="' . $config['SiteGlobalPath'] . 'codebase/dhtmlxcalendar.js" type="text/javascript"></script>'. "\n" .
   '<script src="' . $config['SiteGlobalPath'] . 'plugins/jQuery/jQuery-2.1.4.min.js" type="text/javascript"></script>'. "\n" .
   '<script src="' . $config['SiteGlobalPath'] . 'bootstrap/js/bootstrap.min.js" type="text/javascript"></script>'. "\n" . 
   '<script src="' . $config['SiteGlobalPath'] . 'plugins/iCheck/icheck.min.js" type="text/javascript"></script>'. "\n" .
   '<script src="' . $config['SiteGlobalPath'] . 'plugins/datatables/jquery.dataTables.min.js" type="text/javascript"></script>'. "\n" .
   '<script src="' . $config['SiteGlobalPath'] . 'plugins/datatables/dataTables.bootstrap.min.js" type="text/javascript"></script>'. "\n" .
   '<script src="' . $config['SiteGlobalPath'] . 'plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>'. "\n" .
   '<script src="' . $config['SiteGlobalPath'] . 'plugins/fastclick/fastclick.min.js" type="text/javascript"></script>'. "\n" .
   '<script src="' . $config['SiteGlobalPath'] . 'dist/js/app.min.js" type="text/javascript"></script>'. "\n" .
   '<script src="' . $config['SiteGlobalPath'] . 'dist/js/demo.js" type="text/javascript"></script>');
   
  $objSmarty->assign('IncludeCSS',
'<link rel="stylesheet" href="' . $config['SiteGlobalPath'] . 'codebase/dhtmlxcalendar.css" type="text/css" media="all"/>'. "\n" .
'<link rel="stylesheet" href="' . $config['SiteGlobalPath'] . 'codebase/dhtmlxcalendar_dhx_skyblue.css" type="text/css" media="all"/>'. "\n" .
'<link rel="stylesheet" href="' . $config['SiteGlobalPath'] . 'bootstrap/css/bootstrap.min.css" type="text/css" media="all"/>'. "\n" .
'<link rel="stylesheet" href="' . $config['SiteGlobalPath'] . 'https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />'. "\n" .
'<link rel="stylesheet" href="' . $config['SiteGlobalPath'] . 'https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />'. "\n" .
'<link rel="stylesheet" href="' . $config['SiteGlobalPath'] . 'plugins/datatables/dataTables.bootstrap.css" type="text/css" media="all"/>'. "\n" .
'<link rel="stylesheet" href="' . $config['SiteGlobalPath'] . 'codebase/skins/dhtmlxlayout_dhx_skyblue.css" type="text/css" media="all"/>'. "\n" .
'<link rel="stylesheet" href="' . $config['SiteGlobalPath'] . 'dist/css/AdminLTE.min.css" type="text/css" media="all"/>'. "\n" .
'<link rel="stylesheet" href="' . $config['SiteGlobalPath'] . 'dist/css/skins/_all-skins.min.css" type="text/css" media="all"/>');   
  
  
  /*Display page*/

 
  $objSmarty->display('pagetemplate.tpl');
?>