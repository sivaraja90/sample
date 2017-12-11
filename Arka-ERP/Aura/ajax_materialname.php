<?php
   require('includes/common.php');
	include_once $config['SiteClassPath']."class.Staff.php";
   	include_once $config['SiteClassPath']."class.StockInward.php";
	include_once $config['SiteClassPath']."class.Inward.php";
    //include_once $config['SiteClassPath']."class.split_page_results.php";	
	
	$objStaff		= new Staff();
	$objStaff->chkSLogin($objArray);
	
    $ObjStockInward	= new StockInward();
	$ObjInward	= new Inward();
	if(isset($_GET['item_name']))
	{
        $ObjStockInward->AjaxGetMaterialDetails($_GET);		
	}
	

?>