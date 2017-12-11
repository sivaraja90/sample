<?php
  require('includes/common.php');

 	include_once $config['SiteClassPath']."class.Staff.php";
	include_once $config['SiteClassPath']."class.material_reg_window.php";
	include_once $config['SiteClassPath']."class.split_page_results.php";
	
	
	$objStaff		= new Staff();
	$objStaff->chkStaffLogin($objArray);
	$objStaff->Roleslists();
	$objmaterial_reg_window= new material_reg_window();
	//$objSiteMgmt->GetSLists($objArray);
    $objmaterial_reg_window->GetmaterialLists($objArray);
  
  $objSmarty->assign('IncludeTpl', 'material_reg_window.tpl');
  $objSmarty->assign('OverallSiteTitle', $config['SiteTitle'].'-::- ERP');
  $objSmarty->assign('robots','index,follow');
  $objSmarty->assign('key_word','');
  $objSmarty->assign('generator','');
  $objSmarty->assign('author','rsureshit@hotmail.com');
  $objSmarty->assign('document-state','dynamic');
// $objSmarty->assign('address','http://localhost/alf/');
 $objSmarty->assign('address',$config['SiteGlobalPath']);
 $objSmarty->assign("LDList",$LDList[0]);

  
 
  $objSmarty->assign('IncludeCSS',
					'<link rel="stylesheet" href="' . $config['SiteGlobalPath'] . 'css/bootstrap.min.css" type="text/css" media="all"/>'. "\n" .
			        '<link rel="stylesheet" href="' . $config['SiteGlobalPath'] . 'font-awesome/css/font-awesome.css" type="text/css" media="all"/>'. "\n" .
			        '<link rel="stylesheet" href="' . $config['SiteGlobalPath'] . 'css/plugins/toastr/toastr.min.css" type="text/css" media="all"/>'. "\n" .
					'<link rel="stylesheet" href="' . $config['SiteGlobalPath'] . 'js/plugins/gritter/jquery.gritter.css" type="text/css" media="all"/>'. "\n" .
					'<link rel="stylesheet" href="' . $config['SiteGlobalPath'] . 'css/animate.css" type="text/css" media="all"/>'. "\n" .
					'<link rel="stylesheet" href="' . $config['SiteGlobalPath'] . 'css/style.css" type="text/css" media="all"/>'. "\n" .
					'<link rel="stylesheet" href="' . $config['SiteGlobalPath'] . 'css/plugins/dataTables/dataTables.bootstrap.css" type="text/css" media="all"/>'. "\n".
					'<link rel="stylesheet" href="' . $config['SiteGlobalPath'] . 'css/plugins/dataTables/dataTables.responsive.css" type="text/css" media="all"/>'. "\n".
					'<link rel="stylesheet" href="' . $config['SiteGlobalPath'] . 'css/plugins/datapicker/datepicker3.css" type="text/css" media="all"/>'. "\n" .
					'<link rel="stylesheet" href="' . $config['SiteGlobalPath'] . 'css/plugins/ionRangeSlider/ion.rangeSlider.css" type="text/css" media="all"/>'. "\n" .
					'<link rel="stylesheet" href="' . $config['SiteGlobalPath'] . 'css/plugins/ionRangeSlider/ion.rangeSlider.skinFlat.css" type="text/css" media="all"/>'. "\n" .
					'<link rel="stylesheet" href="' . $config['SiteGlobalPath'] . 'css/plugins/switchery/switchery.css" type="text/css" media="all"/>'. "\n" .
					'<link rel="stylesheet" href="' . $config['SiteGlobalPath'] . 'css/plugins/jasny/jasny-bootstrap.min.css" type="text/css" media="all"/>'. "\n" .
					'<link rel="stylesheet" href="' . $config['SiteGlobalPath'] . 'css/plugins/nouslider/jquery.nouislider.css" type="text/css" media="all"/>'. "\n" .
					'<link rel="stylesheet" href="' . $config['SiteGlobalPath'] . 'css/plugins/iCheck/custom.css" type="text/css" media="all"/>'. "\n" .
					'<link rel="stylesheet" href="' . $config['SiteGlobalPath'] . 'css/plugins/chosen/chosen.css" type="text/css" media="all"/>'. "\n" .
					'<link rel="stylesheet" href="' . $config['SiteGlobalPath'] . 'css/plugins/colorpicker/bootstrap-colorpicker.min.css" type="text/css" media="all"/>'. "\n" .
					'<link rel="stylesheet" href="' . $config['SiteGlobalPath'] . 'css/plugins/cropper/cropper.min.css" type="text/css" media="all"/>'. "\n" .
					'<link rel="stylesheet" href="' . $config['SiteGlobalPath'] . 'css/plugins/dataTables/dataTables.tableTools.min.css" type="text/css" media="all"/>'. "\n" .
					'<link rel="stylesheet" href="' . $config['SiteGlobalPath'] . 'css/plugins/dataTables/dataTables.tableTools.min.css" type="text/css" media="print"/>' );
			
            $objSmarty->assign('IncludeJS', 
					'<script src="'. $config['SiteGlobalPath'] . 'js/jquery-2.1.1.js" type="text/javascript"></script>'. "\n" . 
                    '<script src="'. $config['SiteGlobalPath'] . 'js/bootstrap.min.js" type="text/javascript"></script>'. "\n" . 
                    '<script src="'. $config['SiteGlobalPath'] . 'js/plugins/validate/jquery.validate.min.js" type="text/javascript"></script>'. "\n" . 
					'<script src="'. $config['SiteGlobalPath'] . 'js/plugins/metisMenu/jquery.metisMenu.js" type="text/javascript"></script>'. "\n" . 
					'<script src="'. $config['SiteGlobalPath'] . 'js/plugins/slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>'. "\n" . 
					'<script src="'. $config['SiteGlobalPath'] . 'js/plugins/jeditable/jquery.jeditable.js" type="text/javascript"></script>'. "\n" . 
					'<script src="'. $config['SiteGlobalPath'] . 'js/plugins/dataTables/jquery.dataTables.js" type="text/javascript"></script>'. "\n" . 
					'<script src="'. $config['SiteGlobalPath'] . 'js/plugins/dataTables/dataTables.bootstrap.js" type="text/javascript"></script>'. "\n" . 
					'<script src="'. $config['SiteGlobalPath'] . 'js/plugins/dataTables/dataTables.responsive.js" type="text/javascript"></script>'. "\n" . 
					'<script src="'. $config['SiteGlobalPath'] . 'js/plugins/dataTables/dataTables.tableTools.min.js" type="text/javascript"></script>'. "\n" . 
					'<script src="'. $config['SiteGlobalPath'] . 'js/inspinia.js" type="text/javascript"></script>'. "\n" . 
					'<script src="'. $config['SiteGlobalPath'] . 'js/plugins/pace/pace.min.js" type="text/javascript"></script>'. "\n" . 
					'<script src="'. $config['SiteGlobalPath'] . 'js/plugins/chosen/chosen.jquery.js" type="text/javascript"></script>'. "\n" . 
					'<script src="'. $config['SiteGlobalPath'] . 'js/plugins/jsKnob/jquery.knob.js" type="text/javascript"></script>'. "\n" . 
					'<script src="'. $config['SiteGlobalPath'] . 'js/plugins/jasny/jasny-bootstrap.min.js" type="text/javascript"></script>'. "\n" . 
					'<script src="'. $config['SiteGlobalPath'] . 'js/plugins/datapicker/bootstrap-datepicker.js" type="text/javascript"></script>'. "\n" . 
					'<script src="'. $config['SiteGlobalPath'] . 'js/plugins/nouslider/jquery.nouislider.min.js" type="text/javascript"></script>'. "\n" . 
					'<script src="'. $config['SiteGlobalPath'] . 'js/plugins/switchery/switchery.js" type="text/javascript"></script>'. "\n" . 
					'<script src="'. $config['SiteGlobalPath'] . 'js/plugins/ionRangeSlider/ion.rangeSlider.min.js" type="text/javascript"></script>'. "\n" . 
                    '<script src="'. $config['SiteGlobalPath'] . 'js/plugins/iCheck/icheck.min.js" type="text/javascript"></script>'. "\n" . 
					'<script src="'. $config['SiteGlobalPath'] . 'js/plugins/metisMenu/jquery.metisMenu.js" type="text/javascript"></script>'. "\n" . 
					'<script src="'. $config['SiteGlobalPath'] . 'js/plugins/colorpicker/bootstrap-colorpicker.min.js" type="text/javascript"></script>'. "\n" . 
					'<script src="'. $config['SiteGlobalPath'] . 'js/plugins/cropper/cropper.min.js" type="text/javascript"></script>'. "\n" . 
					'<script src=" '. $config['SiteGlobalPath'] . 'js/plugins/pace/pace.min.js" type="text/javascript"></script>' );
		     /*Display page*/
  $objSmarty->assign('HeaderTpl', 'left1.tpl');
//  $objSmarty->assign('FooterTpl', 'footer.tpl');
  
  $objSmarty->display('pagetemplate.tpl');
?>