<?php
   require('includes/common.php');
	include_once $config['SiteClassPath']."class.Staff.php";
   	include_once $config['SiteClassPath']."class.ProjectQuoteReg.php";
    //include_once $config['SiteClassPath']."class.split_page_results.php";	
	
	$objStaff		= new Staff();
	$objStaff->chkSLogin($objArray);
	
    $ObjProjectQuoteReg	= new ProjectQuoteReg();

	if(isset($_GET['product_description']))
		{
			$ObjProjectQuoteReg->SelectProduct($_GET);		
		}
	

?>