<?php
  require('includes/common.php');
  $objSmarty->assign('IncludeTpl', 'logout.tpl');
  $objSmarty->assign('OverallSiteTitle', $config['SiteTitle'].'-::-ARKA ERP');
  $objSmarty->assign('robots','index,follow');
  $objSmarty->assign('key_word','');
  $objSmarty->assign('generator','');
  $objSmarty->assign('author','rsureshit@hotmail.com');
  $objSmarty->assign('document-state','dynamic');
 // $objSmarty->assign('address','http://www.adroitsolutionz.com/tickets/');
 // $objSmarty->assign('address','http://localhost/Tickets/');
   $objSmarty->assign('address',$config['SiteGlobalPath']);
  
  /*Display page*/
  
  $objSmarty->display('pagetemplate.tpl');
?>
<?php
	//Start session
	session_start();
	
		$_SESSION['User_ID']	= $StaffLogin	= $SelResult[0]['user_id'];
		$_SESSION['USER_GROUP']	= $StaffGroup	= $SelResult[0]['user_group'];
		$_SESSION['DEPT']		= $StaffGroup	= $SelResult[0]['department'];
		$_SESSION['DESIGNATION']		= $StaffGroup	= $SelResult[0]['designation'];
		$_SESSION['UserName']	= $StaffLogin	= $SelResult[0]['username'];
		$_SESSION['Mobile']		= $StaffLogin	= $SelResult[0]['mobile'];
		$_SESSION['Email']		= $StaffLogin	= $SelResult[0]['email_id'];
		$_SESSION['Phone']		= $StaffLogin	= $SelResult[0]['phone'];
	//	$_SESSION['Type']	= $StaffLogin	= $SelResult[0]['type'];
		$_SESSION['Department']	= $StaffLogin	= $SelResult[0]['department'];
		$_SESSION['CDate']	= $StaffLogin	= $SelResult[0]['created_date'];
		
	//Unset the variables stored in session
	/* unset($_SESSION['User_ID']);
	unset($_SESSION['USER_GROUP']);
	unset($_SESSION['DEPT']);
	unset($_SESSION['DEPT']);
	*/
?>
<?php
session_unset();
session_destroy();
header( 'Location: ./index.php' ) ;
?> 