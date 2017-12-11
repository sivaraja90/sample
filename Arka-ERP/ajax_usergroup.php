<?php
   require('includes/common.php');
	include_once $config['SiteClassPath']."class.Staff.php";
   	include_once $config['SiteClassPath']."class.UserMgmt.php";
    //include_once $config['SiteClassPath']."class.split_page_results.php";	
	
	$objStaff		= new Staff();
	$objStaff->chkSLogin($objArray);
	
    $ObjUserMgmt	= new UserMgmt();

		
	if(isset($_GET['user_group'])&& isset($_GET['username']))
	{
        $ObjUserMgmt->AjaxGetAddressDetails($_GET);		
	}
	else if(isset($_GET['user_group']))
	{
        $ObjUserMgmt->AjaxGetUserGroupDetails($_GET);		
	}

?>