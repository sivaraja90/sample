<?php
  require('includes/common.php');
	
 	include_once $config['SiteClassPath']."class.Staff.php";
	include_once $config['SiteClassPath']."class.PaymentReg.php";
	include_once $config['SiteClassPath']."class.split_page_results.php";
	
	$objStaff		= new Staff();
	$objStaff->chkSLogin($objArray);
	$objStaff->chkStaffLogin($objArray);
	$objStaff->RolesLists($objArray);
	
	
	$ObjPaymentReg	= new PaymentReg();
//	$ObjDashboard->RolesLists();
	// $ObjDashboard->myCurl($objArray);

  $objSmarty->assign('IncludeTpl', 'payment_procedure.tpl');
  $objSmarty->assign('OverallSiteTitle', $config['SiteTitle'].'- PaymentProcedure');
  $objSmarty->assign('robots','index,follow');
  $objSmarty->assign('key_word','');
  $objSmarty->assign('generator','');
  $objSmarty->assign('author','rsureshit@hotmail.com');
  $objSmarty->assign('document-state','dynamic');
  $objSmarty->assign('address',$config['SiteGlobalPath']);

 
  $objSmarty->assign('IncludeJS', 
   '<script src="' . $config['SiteGlobalPath'] . 'codebase/dhtmlxcalendar.js" type="text/javascript"></script>'. "\n" . 
   '<script src="' . $config['SiteGlobalPath'] . 'plugins/jQuery/jQuery-2.1.4.min.js" type="text/javascript"></script>'. "\n" .
   '<script src="' . $config['SiteGlobalPath'] . 'plugins/select2/select2.full.min.js" type="text/javascript"></script>'. "\n" .
   '<script src="' . $config['SiteGlobalPath'] . 'plugins/input-mask/jquery.inputmask.js" type="text/javascript"></script>'. "\n" .
   '<script src="' . $config['SiteGlobalPath'] . 'plugins/iCheck/icheck.min.js" type="text/javascript"></script>'. "\n" .
   '<script src="' . $config['SiteGlobalPath'] . 'plugins/timepicker/bootstrap-timepicker.min.js" type="text/javascript"></script>'. "\n" .
   '<script src="' . $config['SiteGlobalPath'] . 'plugins/colorpicker/bootstrap-colorpicker.min.js" type="text/javascript"></script>'. "\n" .
   '<script src="' . $config['SiteGlobalPath'] . 'plugins/input-mask/jquery.inputmask.extensions.js" type="text/javascript"></script>'. "\n" .
   '<script src="' . $config['SiteGlobalPath'] . 'plugins/input-mask/jquery.inputmask.date.extensions.js" type="text/javascript"></script>'. "\n" .
   '<script src="' . $config['SiteGlobalPath'] . 'https://code.jquery.com/ui/1.11.4/jquery-ui.min.js" type="text/javascript"></script>'. "\n" . 
   '<script src="' . $config['SiteGlobalPath'] . 'bootstrap/js/bootstrap.min.js" type="text/javascript"></script>'. "\n" . 
   '<script src="' . $config['SiteGlobalPath'] . 'https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js" type="text/javascript"></script>'. "\n" . 
   '<script src="' . $config['SiteGlobalPath'] . 'plugins/morris/morris.min.js" type="text/javascript"></script>'. "\n" .
   '<script src="' . $config['SiteGlobalPath'] . 'plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>'. "\n" .
   '<script src="' . $config['SiteGlobalPath'] . 'plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>'. "\n" .
   '<script src="' . $config['SiteGlobalPath'] . 'plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>'. "\n" .
   '<script src="' . $config['SiteGlobalPath'] . 'plugins/knob/jquery.knob.js" type="text/javascript"></script>'. "\n" .
   '<script src="' . $config['SiteGlobalPath'] . 'https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js" type="text/javascript"></script>'. "\n" .
   '<script src="' . $config['SiteGlobalPath'] . 'plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>'. "\n" .
   '<script src="' . $config['SiteGlobalPath'] . 'plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>'. "\n" .
   '<script src="' . $config['SiteGlobalPath'] . 'plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>'. "\n" .
   '<script src="' . $config['SiteGlobalPath'] . 'plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>'. "\n" .                  
   '<script src="' . $config['SiteGlobalPath'] . 'plugins/fastclick/fastclick.min.js" type="text/javascript"></script>'. "\n" .   
   '<script src="' . $config['SiteGlobalPath'] . 'dist/js/app.min.js" type="text/javascript"></script>'. "\n" .   
   '<script src="' . $config['SiteGlobalPath'] . 'dist/js/pages/dashboard.js" type="text/javascript"></script>'. "\n" .   
   '<script src="' . $config['SiteGlobalPath'] . 'dist/js/demo.js" type="text/javascript"></script>'. "\n" .                 
   '<script src="' . $config['SiteGlobalPath'] . 'js/page_change.js" type="text/javascript"></script>'. "\n" .  
   '<script src="' . $config['SiteGlobalPath'] . 'js/dhtmlxcommon.js" type="text/javascript"></script>'. "\n" .
   '<script src="' . $config['SiteGlobalPath'] . 'js/dhtmlxgrid.js" type="text/javascript"></script>'. "\n" .
   '<script src="' . $config['SiteGlobalPath'] . 'js/dhtmlxgridcell.js" type="text/javascript"></script>'. "\n" .
   '<script src="' . $config['SiteGlobalPath'] . 'codebase/dhtmlxwindows.js" type="text/javascript"></script>'. "\n" .
   '<script src="' . $config['SiteGlobalPath'] . 'codebase/dhtmlxlayout.js" type="text/javascript"></script>'. "\n" .
   '<script src="' . $config['SiteGlobalPath'] . 'codebase/dhtmlxcontainer.js" type="text/javascript"></script>'. "\n" .
   '<script src="' . $config['SiteGlobalPath'] . 'js/jquery.min.js" type="text/javascript"></script>'. "\n" .
   '<script src="' . $config['SiteGlobalPath'] . 'js/topNav.js" type="text/javascript"></script>'. "\n" .
   '<script src="' . $config['SiteGlobalPath'] . 'js/bsn.AutoSuggest_2.1.3.js" type="text/javascript"></script>');
   
  $objSmarty->assign('IncludeCSS',
  '<link rel="stylesheet" href="' . $config['SiteGlobalPath'] . 'codebase/dhtmlxcalendar.css" type="text/css" media="all"/>'. "\n" .
  '<link rel="stylesheet" href="' . $config['SiteGlobalPath'] . 'codebase/dhtmlxcalendar_dhx_skyblue.css" type="text/css" media="all"/>'. "\n" .
  '<link rel="stylesheet" href="' . $config['SiteGlobalPath'] . 'bootstrap/css/bootstrap.min.css" type="text/css" media="all"/>'. "\n" .
  '<link rel="stylesheet" href="' . $config['SiteGlobalPath'] . 'plugins/select2/select2.min.css" type="text/css" media="all"/>'. "\n" .
  '<link rel="stylesheet" href="' . $config['SiteGlobalPath'] . 'plugins/timepicker/bootstrap-timepicker.min.css" type="text/css" media="all"/>'. "\n" .
  '<link rel="stylesheet" href="' . $config['SiteGlobalPath'] . 'plugins/colorpicker/bootstrap-colorpicker.min.css" type="text/css" media="all"/>'. "\n" .
  '<link rel="stylesheet" href="' . $config['SiteGlobalPath'] . 'https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />'. "\n" .
  '<link rel="stylesheet" href="' . $config['SiteGlobalPath'] . 'https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />'. "\n" .
  '<link rel="stylesheet" href="' . $config['SiteGlobalPath'] . 'dist/css/AdminLTE.min.css" type="text/css" media="all"/>'. "\n" .
  '<link rel="stylesheet" href="' . $config['SiteGlobalPath'] . 'dist/css/skins/_all-skins.min.css" type="text/css" media="all"/>'. "\n" .
  '<link rel="stylesheet" href="' . $config['SiteGlobalPath'] . 'plugins/iCheck/flat/blue.css" type="text/css" media="all"/>'. "\n" .
  '<link rel="stylesheet" href="' . $config['SiteGlobalPath'] . 'plugins/morris/morris.css" type="text/css" media="all"/>'. "\n" .
  '<link rel="stylesheet" href="' . $config['SiteGlobalPath'] . 'plugins/jvectormap/jquery-jvectormap-1.2.2.css" type="text/css" media="all"/>'. "\n" .
  '<link rel="stylesheet" href="' . $config['SiteGlobalPath'] . 'plugins/datepicker/datepicker3.css" type="text/css" media="all"/>'. "\n" .
  '<link rel="stylesheet" href="' . $config['SiteGlobalPath'] . 'plugins/daterangepicker/daterangepicker-bs3.css" type="text/css" media="all"/>'. "\n" .
  '<link rel="stylesheet" href="' . $config['SiteGlobalPath'] . 'plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" type="text/css" media="all"/>'. "\n" .            
  '<link rel="stylesheet" href="' . $config['SiteGlobalPath'] . 'css/dhtmlxgrid.css" type="text/css" media="all"/>'. "\n" .
  '<link rel="stylesheet" href="' . $config['SiteGlobalPath'] . 'codebase/skins/dhtmlxlayout_dhx_skyblue.css" type="text/css" media="all"/>'. "\n" .
  '<link rel="stylesheet" href="' . $config['SiteGlobalPath'] . 'codebase/dhtmlxlayout.css" type="text/css" media="all"/>'. "\n" .
  '<link rel="stylesheet" href="' . $config['SiteGlobalPath'] . 'codebase/dhtmlxwindows.css" type="text/css" media="all"/>'. "\n" .
  '<link rel="stylesheet" href="' . $config['SiteGlobalPath'] . 'codebase/skins/dhtmlxwindows_dhx_skyblue.css" type="text/css" media="all"/>'. "\n" .
  '<link rel="stylesheet" href="' . $config['SiteGlobalPath'] . 'css/dhtmlxgrid_dhx_skyblue.css" type="text/css" media="all"/>'. "\n" .
  '<link rel="stylesheet" href="' . $config['SiteGlobalPath'] . 'css/autosuggest_inquisitor.css" type="text/css" media="print"/>' ); 
  
  /*Display page*/
  $objSmarty->assign('HeaderTpl', 'header.tpl');
  $objSmarty->assign('FooterTpl', 'footer.tpl');  
 
  $objSmarty->display('pagetemplate.tpl');
?>