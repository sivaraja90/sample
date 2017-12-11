<?php
  require('includes/common.php');
  	include_once $config['SiteClassPath']."class.Staff.php";
	include_once $config['SiteClassPath']."class.CustomerMgmt.php";
	
	$objStaff		= new Staff();
	$objStaff->chkSLogin($objArray);
		$objStaff->chkStaffLogin($objArray);
	$objStaff->RolesLists($objArray);
	
	$ObjCustomerMgmt = new CustomerMgmt(); 
	 


/************************************************ Start Of Company Validation*****************************************/		
	   if(isset($_GET['q'])&& isset($_GET['cmp_validation']))
        { 
            $ObjCustomerMgmt->Ajax_Validate_Existing_Cmp();
        }	
		
		
		

?>