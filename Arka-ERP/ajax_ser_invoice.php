<?php
   require('includes/common.php');
	include_once $config['SiteClassPath']."class.Staff.php";
   	include_once $config['SiteClassPath']."class.ServiceOrder.php";
    //include_once $config['SiteClassPath']."class.split_page_results.php";	
	
	$objStaff		= new Staff();
	$objStaff->chkSLogin($objArray);
	
    $ObjServiceOrder	= new ServiceOrder();

		
	/*if(isset($_GET['company_name'])&& isset($_GET['area']))
	{
        $ObjEnquiryReg->AjaxGetAddressDetails($_GET);		
	}*/
	 if(isset($_GET['invoice_no']))
	{
		
        $ObjServiceOrder->AjaxGetInvoiceDetails($_GET);		
	}

?>