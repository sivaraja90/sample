<?php
  require('includes/common.php');
  	include_once $config['SiteClassPath']."class.Staff.php";
	include_once $config['SiteClassPath']."class.VendorMgmt.php";
	
	$objStaff		= new Staff();
	$objStaff->chkSLogin($objArray);
	
	$ObjVendorMgmt = new VendorMgmt(); 
	 


/************************************************ Start Of Company Validation*****************************************/		
	   if(isset($_GET['name'])&& isset($_GET['cmp_validation']))
        { 
            $ObjVendorMgmt->Ajax_Validate_Existing_Cmp();
        }	
		
		
		

?>