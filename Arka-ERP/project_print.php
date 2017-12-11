<?php
  require('includes/common.php');
	
 	include_once $config['SiteClassPath']."class.Staff.php";
	include_once $config['SiteClassPath']."class.ProjectQuoteReg.php";
	include_once $config['SiteClassPath']."class.split_page_results.php";
	
	$objStaff		= new Staff();
	$objStaff->chkSLogin($objArray);
	$ObjProjectQuoteReg	= new ProjectQuoteReg();
		$objStaff->chkStaffLogin($objArray);
	$objStaff->RolesLists($objArray);
	if(isset($_GET['enquiry_id']) || isset($_GET['project_quote_no']) || isset($_GET['enquiry_type']) || isset($_GET['revised_version']))
	{
	$ObjProjectQuoteReg->ProjectPrint(($_GET['enquiry_id']));
	$ObjProjectQuoteReg->ToAddress(($_GET['project_quote_no']) && ($_GET['revised_version'])); 
	$ObjProjectQuoteReg->Revised_Sale(($_GET['project_quote_no']) && ($_GET['revised_version'])); 
	$ObjProjectQuoteReg->add_Total(($_GET['project_quote_no']) && ($_GET['revised_version']));
	$ObjProjectQuoteReg->SalesTerms(($_GET['enquiry_type']) && ($_GET['revised_version']));
	$ObjProjectQuoteReg->Enquiry(($_GET['enquiry_id']));
	$ObjProjectQuoteReg->pro_enq_Type(($_GET['enquiry_id']) && ($_GET['revised_version']));
	$ObjProjectQuoteReg->ServiceInvoice($_GET['project_quote_no']);
	}

  $objSmarty->assign('IncludeTpl', 'project_print.tpl');
  $objSmarty->assign('OverallSiteTitle', $config['SiteTitle'].'- EnquiryDetail');
  $objSmarty->assign('robots','index,follow');
  $objSmarty->assign('key_word','');
  $objSmarty->assign('generator','');
  $objSmarty->assign('author','rsureshit@hotmail.com');
  $objSmarty->assign('document-state','dynamic');
  $objSmarty->assign('address',$config['SiteGlobalPath']);

   $objSmarty->assign('IncludeJS', 
      '<script src="' . $config['SiteGlobalPath'] . 'dist/js/app.min.js"></script>');
     
   
  $objSmarty->assign('IncludeCSS',
   '<link rel="stylesheet" href="' . $config['SiteGlobalPath'] . 'bootstrap/css/bootstrap.min.css">'. "\n" .
   '<link rel="stylesheet" href="' . $config['SiteGlobalPath'] . 'https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">'. "\n" .
   '<link rel="stylesheet" href="' . $config['SiteGlobalPath'] . 'https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">'. "\n" .
   '<link rel="stylesheet" href="' . $config['SiteGlobalPath'] . 'dist/css/AdminLTE.min.css">'); 
   /*Display page*/
  /*$objSmarty->assign('HeaderTpl', 'header.tpl');
  $objSmarty->assign('FooterTpl', 'footer.tpl');  */
 
  $objSmarty->display('pagetemplate.tpl');
?>