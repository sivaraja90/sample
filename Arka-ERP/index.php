
<?php 

	  require_once "./includes/common.php";
	  require_once $config['SiteClassPath']."class.Staff.php";
	//  require_once $config['SiteClassPath']."class.CustomerLogin.php";
	//echo("eee"); exit;
		$objStaff	= new Staff();  
	if(!isset($_SESSION['StaffLogin'])){ 			
	  if($objStaff->chkStaffLogin($_POST))   
	   Redirect("dashboard.php"); 
	}
	else{
	
	  Redirect("index.php");
	}
	
	
	$Onload="document.stafflogin.email.focus();";
	$objSmarty->assign("Onload", $Onload);
	$objSmarty->display("index.tpl");
		
			
?>