<?php
  require('includes/common.php');
	include_once $config['SiteClassPath']."class.Staff.php";
	include_once $config['SiteClassPath']."class.EmployeeReg.php";
	include_once $config['SiteClassPath']."class.split_page_results.php";
	
	$objStaff		= new Staff();
	$objStaff->chkSLogin($objArray);
	$objStaff->chkStaffLogin($objArray);
	
	
	$ObjEmployeeReg	= new EmployeeReg();
	$ObjEmployeeReg->GetemployeeView($objArray);
	$ObjEmployeeReg->RolesLists($objArray);
if(isset($_GET['emp_id']))
{
	$ObjEmployeeReg->DeleteMaster($_GET['emp_id']);
}
if(isset($_GET['succs_msg_for_del']))
{
	$objSmarty->assign('SuccessMessage', 'Employee record deleted Successfully');
}

	$objSmarty->assign('IncludeTpl', 'employee_list.tpl');
	$objSmarty->assign('OverallSiteTitle', $config['SiteTitle'].'- Employee List');
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