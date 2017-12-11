  <?php
  require('includes/common.php');
	
 	include_once $config['SiteClassPath']."class.Staff.php";
	include_once $config['SiteClassPath']."class.VendorMgmt.php";
	include_once $config['SiteClassPath']."class.split_page_results.php";
	
	$objStaff		= new Staff();
	$objStaff->chkSLogin($objArray);
	$objStaff->chkStaffLogin($objArray);
	$objStaff->RolesLists($objArray);

	
	$objVendorMgmt	= new VendorMgmt();
	
	if(isset($_GET['vendor_id']))
	{
		 $objVendorMgmt-> Viewvendor($_GET['vendor_id']); 
		 $objVendorMgmt-> ListAddress($_GET['vendor_id']); 
		 $objVendorMgmt->ListContact($_GET['vendor_id']);
		 $objVendorMgmt->ViewBank($_GET['vendor_id']);
         $objVendorMgmt->ViewVendorinfo($_GET['vendor_id']);
		 
	}
	if((isset($_GET['sl_no'])) && (isset($_GET['vendor_id'])))
	{
		$objVendorMgmt->DeleteContact($_GET['sl_no'],$_GET['vendor_id']);
	}
		if((isset($_GET['sl_no'])) && (isset($_GET['vendor_id3'])))
	{
		$objVendorMgmt->DeleteBank($_GET['sl_no'],$_GET['vendor_id3']);
	}
	if(isset($_GET['retrive']) && isset($_GET['vendor_id']))
	{  
		$objVendorMgmt->RetriveContact($_GET['retrive'],$_GET['vendor_id']);
	}
	if(isset($_GET['retrive']) && isset($_GET['vendor_id3']))
	{  
		$objVendorMgmt->RetriveBank($_GET['retrive'],$_GET['vendor_id3']);
	}	
	if((isset($_GET['sl_no'])) && (isset($_GET['vendor_id1'])))
	{
		$objVendorMgmt->DeleteAddress($_GET['sl_no'],$_GET['vendor_id1']);
	}
	if(isset($_GET['retrive1']) && isset($_GET['vendor_id1']))
	{ 
		$objVendorMgmt->RetriveAddress($_GET['retrive1'],$_GET['vendor_id1']);
	}
	if(isset($_GET['succs_msg_for_det']))
	 {
	  $objSmarty->assign('SuccessMessage', 'Contact Deleted Successfully');
	 }
	  if(isset($_GET['succs_msg_for_ret']))
         {
          $objSmarty->assign('SuccessMessage', 'Customer Retrived Successfully');
         }  
	if(isset($_GET['succs_msg_for_det1']))
	 {
	  $objSmarty->assign('SuccessMessage', 'Address Deleted Successfully');
	 }
	  if(isset($_GET['succs_msg_for_ret1']))
         {
          $objSmarty->assign('SuccessMessage', 'Address Retrived Successfully');
         }  
	if(isset($_GET['succs_msg_for_det2']))
	 {
	  $objSmarty->assign('SuccessMessage', 'Bank Deleted Successfully');
	 }
	  if(isset($_GET['succs_msg_for_ret2']))
         {
          $objSmarty->assign('SuccessMessage', 'Bank Retrived Successfully');
         }  
	$objVendorMgmt->DateStamp();
	$objVendorMgmt->TimeStamp();

  $objSmarty->assign('IncludeTpl', 'vendor_detail_view.tpl');
  $objSmarty->assign('OverallSiteTitle', $config['SiteTitle'].'- VendorDetail');
  $objSmarty->assign('robots','index,follow');
  $objSmarty->assign('key_word','');
  $objSmarty->assign('generator','');
  $objSmarty->assign('author','rsureshit@hotmail.com');
  $objSmarty->assign('document-state','dynamic');
  $objSmarty->assign('address',$config['SiteGlobalPath']);


   $objSmarty->assign('IncludeJS', 
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

