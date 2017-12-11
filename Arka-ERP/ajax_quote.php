<?php
   require('includes/common.php');
	include_once $config['SiteClassPath']."class.Staff.php";
   	include_once $config['SiteClassPath']."class.QuoteReg.php";
    //include_once $config['SiteClassPath']."class.split_page_results.php";	
	
	$objStaff		= new Staff();
	$objStaff->chkSLogin($objArray);
	
    $ObjQuoteReg	= new QuoteReg();

		
	if(isset($_GET['supplier_company_name'])&& isset($_GET['area']))
	{
        $ObjQuoteReg->AjaxGetAddressDetails($_GET);		
	}
	else if(isset($_GET['supplier_company_name']))
	{
		
        $ObjQuoteReg->AjaxGetVendorDetails($_GET);		
	}
		if(isset($_GET['product_desc']))
		{  
			$ObjQuoteReg->SelectProduct($_GET);	  
		}
	

?>