<?php
  require('includes/common.php');
	
 	include_once $config['SiteClassPath']."class.Staff.php";
	include_once $config['SiteClassPath']."class.CustomerMgmt.php";
	include_once $config['SiteClassPath']."class.split_page_results.php";
	
	$objStaff		= new Staff();
	$objStaff->chkSLogin($objArray);
		$objStaff->chkStaffLogin($objArray);
	$objStaff->RolesLists($objArray);
	
	$ObjCustomerMgmt	= new CustomerMgmt();
	if(isset($_GET['customer_id']))
	{
		$ObjCustomerMgmt->ViewCustomer($_GET['customer_id']);
		$ObjCustomerMgmt->ListContact($_GET['customer_id']);
		$ObjCustomerMgmt->ListAddress($_GET['customer_id']);
		$ObjCustomerMgmt->ViewEnquiry($_GET['customer_id']);
		$ObjCustomerMgmt->ViewSales($_GET['customer_id']);
		$ObjCustomerMgmt->ViewService($_GET['customer_id']);
		$ObjCustomerMgmt->ViewProject($_GET['customer_id']);
	}

	if((isset($_GET['sl_no'])) && (isset($_GET['customer_id'])))
	{
		$ObjCustomerMgmt->DeleteContact($_GET['sl_no'],$_GET['customer_id']);
	}
	if(isset($_GET['retrive']) && isset($_GET['customer_id']))
	{   
		$ObjCustomerMgmt->RetriveMaster1($_GET['retrive'],$_GET['customer_id']);
	}
	if((isset($_GET['s_no'])) && (isset($_GET['customer_id'])))
	{
		$ObjCustomerMgmt->DeleteAddress($_GET['s_no'],$_GET['customer_id']);
	}
	if(isset($_GET['retrive1']) && isset($_GET['customer_id']))
	{   
		$ObjCustomerMgmt->RetriveMaster2($_GET['retrive1'],$_GET['customer_id']);
	}
	
	if(isset($_GET['succs_msg_for_det']))
	 {
	  $objSmarty->assign('SuccessMessage', 'Contact Deleted Successfully');
	 }
	 if(isset($_GET['succs_msg_for_det1']))
	 {
	  $objSmarty->assign('SuccessMessage', 'Address Deleted Successfully');
	 }
	  if(isset($_GET['succs_msg_for_ret']))
     {
          $objSmarty->assign('SuccessMessage', 'Customer Retrived Successfully');
     }  
     if(isset($_GET['succs_msg_for_ret1']))
     {
          $objSmarty->assign('SuccessMessage', 'Address Retrived Successfully');
     }  
	 $ObjCustomerMgmt->ViewMail($objArray);
  $objSmarty->assign('IncludeTpl', 'customer_detail_view.tpl');
  $objSmarty->assign('OverallSiteTitle', $config['SiteTitle'].'- Customer Details');
  $objSmarty->assign('robots','index,follow');
  $objSmarty->assign('key_word','');
  $objSmarty->assign('generator','');
  $objSmarty->assign('author','rsureshit@hotmail.com');
  $objSmarty->assign('document-state','dynamic');
  $objSmarty->assign('address',$config['SiteGlobalPath']);

 
   $objSmarty->assign('IncludeJS', 
   '<script src="' . $config['SiteGlobalPath'] . 'js/ajax.js" type="text/javascript"></script>'. "\n" .
   '<script src="' . $config['SiteGlobalPath'] . 'js/scp.js" type="text/javascript"></script>'. "\n" . 
   '<script src="' . $config['SiteGlobalPath'] . 'js/tabber.js" type="text/javascript"></script>'. "\n" . 
   '<script src="' . $config['SiteGlobalPath'] . 'js/autolock.js" type="text/javascript"></script>'. "\n" .
   '<script src="' . $config['SiteGlobalPath'] . 'js/jquery.loadmask.js" type="text/javascript"></script>'. "\n" .
   '<script src="' . $config['SiteGlobalPath'] . 'js/jquery.js" type="text/javascript"></script>'. "\n" .
   '<script src="' . $config['SiteGlobalPath'] . 'js/page_change.js" type="text/javascript"></script>'. "\n" .
   '<script src="' . $config['SiteGlobalPath'] . 'js/dhtmlxcontainer.js" type="text/javascript"></script>'. "\n" .
   '<script src="' . $config['SiteGlobalPath'] . 'js/dhtmlxcommon.js" type="text/javascript"></script>'. "\n" .
   '<script src="' . $config['SiteGlobalPath'] . 'js/dhtmlxgrid.js" type="text/javascript"></script>'. "\n" .
   '<script src="' . $config['SiteGlobalPath'] . 'js/dhtmlxgridcell.js" type="text/javascript"></script>'. "\n" .
   '<script src="' . $config['SiteGlobalPath'] . 'js/topNav.js" type="text/javascript"></script>'. "\n" .
   '<script src="' . $config['SiteGlobalPath'] . 'js/bsn.AutoSuggest_2.1.3.js" type="text/javascript"></script>'. "\n" .
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
  
    
  '<link rel="stylesheet" href="' . $config['SiteGlobalPath'] . 'css/tabs.css" type="text/css" media="all"/>'. "\n" .
'<link rel="stylesheet" href="' . $config['SiteGlobalPath'] . 'bootstrap/css/bootstrap.min.css" type="text/css" media="all"/>'. "\n" .
'<link rel="stylesheet" href="' . $config['SiteGlobalPath'] . 'https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />'. "\n" .
'<link rel="stylesheet" href="' . $config['SiteGlobalPath'] . 'https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />'. "\n" .
'<link rel="stylesheet" href="' . $config['SiteGlobalPath'] . 'plugins/datatables/dataTables.bootstrap.css" type="text/css" media="all"/>'. "\n" .
'<link rel="stylesheet" href="' . $config['SiteGlobalPath'] . 'codebase/skins/dhtmlxlayout_dhx_skyblue.css" type="text/css" media="all"/>'. "\n" .
'<link rel="stylesheet" href="' . $config['SiteGlobalPath'] . 'dist/css/AdminLTE.min.css" type="text/css" media="all"/>'. "\n" .
'<link rel="stylesheet" href="' . $config['SiteGlobalPath'] . 'dist/css/skins/_all-skins.min.css" type="text/css" media="all"/>'); 
  
  
  /*Display page*/
  $objSmarty->assign('HeaderTpl', 'header.tpl');
  $objSmarty->assign('FooterTpl', 'footer.tpl');  
  $objSmarty->display('pagetemplate.tpl');
?>