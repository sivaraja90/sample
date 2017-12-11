<?php
   require('includes/common.php');
	include_once $config['SiteClassPath']."class.Staff.php";
   	include_once $config['SiteClassPath']."class.EnquiryReg.php";
    //include_once $config['SiteClassPath']."class.split_page_results.php";	
	
	$objStaff		= new Staff();
	$objStaff->chkSLogin($objArray);
	$objStaff->chkStaffLogin($objArray);
	$objStaff->RolesLists($objArray);

	
    $ObjEnquiryReg	= new EnquiryReg();

		
	if(isset($_GET['company_name'])&& isset($_GET['area']))
	{
        $ObjEnquiryReg->AjaxGetAddressDetails($_GET);		
	}
	else if(isset($_GET['company_name']))
	{
		
        $ObjEnquiryReg->AjaxGetCustomerDetails($_GET);		
	}

?>