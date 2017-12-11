<?php
  require('includes/common.php');
  $objSmarty->assign('IncludeTpl', 'logout.tpl');
  $objSmarty->assign('OverallSiteTitle', $config['SiteTitle'].'-::-');
  $objSmarty->assign('robots','index,follow');
  $objSmarty->assign('key_word','');
  $objSmarty->assign('generator','');
  $objSmarty->assign('author','rsureshit@hotmail.com');
  $objSmarty->assign('document-state','dynamic');
   $objSmarty->assign('address',$config['SiteGlobalPath']);
  
  $objSmarty->display('pagetemplate.tpl');
?>
<?php
	//Start session
	session_start();
	
	//Unset the variables stored in session
	unset($_SESSION['SESS_USERNAME']);
	//unset($_SESSION['SESS_FIRST_NAME']);
	//unset($_SESSION['SESS_LAST_NAME']);
session_destroy();
header( 'Location: ../index.php' ) ;
?> 