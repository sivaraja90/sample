<?php
   require('includes/common.php');
	include_once $config['SiteClassPath']."class.Staff.php";
   	include_once $config['SiteClassPath']."class.SalesQuoteReg.php";
    //include_once $config['SiteClassPath']."class.split_page_results.php";	
	
	$objStaff		= new Staff();
	$objStaff->chkSLogin($objArray);
			$objStaff->chkStaffLogin($objArray);
	$objStaff->RolesLists($objArray);
	
    $ObjSalesQuoteReg	= new SalesQuoteReg();

		
	if(isset($_GET['product_desc']))
		{
			$ObjSalesQuoteReg->SelectProduct($_GET);		
		}
	elseif(isset($_GET['material_name']))
		{
			$ObjSalesQuoteReg->SelectMaterial($_GET);		
		}

?>