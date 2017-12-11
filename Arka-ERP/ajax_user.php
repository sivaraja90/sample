<?php
   require('includes/common.php');
	include_once $config['SiteClassPath']."class.Staff.php";
   	include_once $config['SiteClassPath']."class.UserMgmt.php";
    //include_once $config['SiteClassPath']."class.split_page_results.php";	
	
	$objStaff		= new Staff();
	$objStaff->chkSLogin($objArray);
		$objStaff->chkStaffLogin($objArray);
	$objStaff->RolesLists($objArray);
	
    $ObjUserMgmt	= new UserMgmt();

		
	if(isset($_GET['company_name'])&& isset($_GET['emp_id']))
	{
        $ObjUserMgmt->AjaxGetAddressDetails($_GET);		
	}
	else if(isset($_GET['company_name']))
	{
        $ObjUserMgmt->AjaxGetEmployeeDetails($_GET);		
	}

?>