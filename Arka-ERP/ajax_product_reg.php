<?php
   require('includes/common.php');
	include_once $config['SiteClassPath']."class.Staff.php";
   	include_once $config['SiteClassPath']."class.ProductReg.php";
    //include_once $config['SiteClassPath']."class.split_page_results.php";	
	
	$objStaff		= new Staff();
	$objStaff->chkSLogin($objArray);
	
    $ObjProductReg	= new ProductReg();

		
	 if(isset($_GET['item_category']))
	{
		
        $ObjProductReg->AjaxGetCategoryDetails($_GET);		
	}

?>