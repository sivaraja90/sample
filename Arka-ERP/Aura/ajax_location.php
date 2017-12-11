<?php
   require('includes/common.php');
	include_once $config['SiteClassPath']."class.Staff.php";
   	include_once $config['SiteClassPath']."class.stock_outward.php";
    //include_once $config['SiteClassPath']."class.split_page_results.php";	
	
	$objStaff		= new Staff();
	$objStaff->chkSLogin($objArray);
	$objStaff->Roleslists();
	
    $Objstock_outward	= new stock_outward();

		
	if(isset($_GET['location']))
	{
        $Objstock_outward->AjaxGetLocationDetails($_GET);		
	}
	if(isset($_GET['item_code']))
	{
        $Objstock_outward->AjaxGetMaterialDetails($_GET);		
	}
	

?>