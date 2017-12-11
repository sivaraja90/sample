
<?php 
	  require_once "./includes/common.php";
	  require_once $config['SiteClassPath']."class.Staff.php";
	//  require_once $config['SiteClassPath']."class.CustomerLogin.php";
	
		$objStaff	= new Staff();
		$objStaff->chkStaffLogin($objArray);
	$objStaff->RolesLists($objArray);
	if(!isset($_SESSION['StaffLogin'])){ 			
	  if($objStaff->chkStaffLogin($_POST))
	    Redirect("dashboard.php");
	}
	else{
	  Redirect("index.php");
	}
	
	
	$Onload="document.registrtion.email.focus();";
	$objSmarty->assign("Onload", $Onload);
	$objSmarty->display("registration.tpl");
		
			
?>