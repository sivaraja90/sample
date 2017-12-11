<?php
  require('includes/common.php');
	
 	include_once $config['SiteClassPath']."class.Staff.php";
	include_once $config['SiteClassPath']."class.EnquiryReg.php";
	include_once $config['SiteClassPath']."class.split_page_results.php";
	
	$objStaff		= new Staff();
	$objStaff->chkSLogin($objArray);
	$objStaff->chkStaffLogin($objArray);
	$objStaff->RolesLists($objArray);
	
	$ObjEnquiryReg	= new EnquiryReg();
	$ObjEnquiryReg->UsernameList($objArray);
	
	if(isset($_GET['enquiry_id'])){
	$ObjEnquiryReg->ViewSales($_GET['enquiry_id']);
	$ObjEnquiryReg->ViewProject($_GET['enquiry_id']);
	$ObjEnquiryReg->ViewService($_GET['enquiry_id'],$_GET['sl_no']);
	$ObjEnquiryReg->ViewFollow($_GET['enquiry_id']);
	$ObjEnquiryReg->ViewEdit($_GET['enquiry_id']);
	}
	
	if(isset($_POST['hdAction']))
	{
		$ObjEnquiryReg->UpdateAssign($_POST);
	}
	
	if((isset($_GET['sl_no'])) && (isset($_GET['enquiry_id'])))
	{
		$ObjEnquiryReg->DeleteFollowUp($_GET['sl_no'],$_GET['enquiry_id']);
	}
		if((isset($_GET['sl_no'])) && (isset($_GET['sales_quote_no']))&& (isset($_GET['enq_id'])))
	{
		$ObjEnquiryReg->DeleteSalesEditDetails($_GET['sl_no'],$_GET['sales_quote_no'],$_GET['enq_id']);
	}
			if((isset($_GET['enqu_id'])) && (isset($_GET['sale_quote_no']))&& (isset($_GET['rev_version'])))
	{
		$ObjEnquiryReg->SaleApprove($_GET['enqu_id'],$_GET['sale_quote_no'],$_GET['rev_version']);
	}

	if((isset($_GET['service_quote_no'])) && (isset($_GET['sl_no']))&& (isset($_GET['enq_id'])))
	{
	
		$ObjEnquiryReg->DeleteServiceEditDetails($_GET['service_quote_no'],$_GET['sl_no'],$_GET['enq_id']);
	}
	if((isset($_GET['sl_no'])) && (isset($_GET['project_quote_no'])) &&(isset($_GET['enq_id'])))
	{
	
		$ObjEnquiryReg->DeleteProjectEditDetails($_GET['sl_no'],$_GET['project_quote_no'],$_GET['enq_id']);
	}
     	
	if(isset($_GET['succs_msg_for_sale']))
	 {
	  $objSmarty->assign('SuccessMessage', 'Sales Details Deleted Successfully');
	 }
	 	if(isset($_GET['succs_msg_for_ser']))
	 {
	  $objSmarty->assign('SuccessMessage', 'Service Details Deleted Successfully');
	 }	if(isset($_GET['succs_msg_for_pro']))
	 {
	  $objSmarty->assign('SuccessMessage', 'Project Details Deleted Successfully');
	 }
	 if(isset($_GET['succs_msg_for_insert']))
	 {
	  $objSmarty->assign('SuccessMessage', 'Updated Successfully');
	 }

	$ObjEnquiryReg->HideAddButton($objArray);
	$ObjEnquiryReg->HideAddSales($objArray);
	$ObjEnquiryReg->HideAddService($objArray);

 $objSmarty->assign('IncludeTpl', 'enquiry_detail_view.tpl');
  $objSmarty->assign('OverallSiteTitle', $config['SiteTitle'].'- EnquiryDetail');
  $objSmarty->assign('robots','index,follow');
  $objSmarty->assign('key_word','');
  $objSmarty->assign('generator','');
  $objSmarty->assign('author','rsureshit@hotmail.com');
  $objSmarty->assign('document-state','dynamic');
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
   '<script src="' . $config['SiteGlobalPath'] . 'codebase/dhtmlxwindows.js" type="text/javascript"></script>'. "\n" .
   '<script src="' . $config['SiteGlobalPath'] . 'codebase/dhtmlxcontainer.js" type="text/javascript"></script>'. "\n" .
   '<script src="' . $config['SiteGlobalPath'] . 'js/dhtmlxcontainer.js" type="text/javascript"></script>'. "\n" .
   '<script src="' . $config['SiteGlobalPath'] . 'js/dhtmlxtabbar.js" type="text/javascript"></script>'. "\n" .
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
  
    
  '<link rel="stylesheet" href="' . $config['SiteGlobalPath'] . 'css/dhtmlxtabbar.css" type="text/css" media="all"/>'. "\n" .  
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