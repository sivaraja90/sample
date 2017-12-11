<?php
   require('includes/common.php');
	include_once $config['SiteClassPath']."class.Staff.php";
   	include_once $config['SiteClassPath']."class.PoReg.php";
    //include_once $config['SiteClassPath']."class.split_page_results.php";	
	
	$objStaff		= new Staff();
	$objStaff->chkSLogin($objArray);
	$objStaff->chkStaffLogin($objArray);
	$objStaff->RolesLists($objArray);

	
    $ObjPoReg = new PoReg();

		
	if(isset($_GET['supplier_company'])&& isset($_GET['area']))
	{
        $ObjPoReg->AjaxGetAddressDetails($_GET);		
	}
	elseif(isset($_GET['supplier_company']))
	{
        $ObjPoReg->AjaxGetVendorDetails($_GET);		
	}
		if(isset($_GET['product_desc']))
		{
			$ObjPoReg->SelectProduct($_GET);		
		}
	elseif(isset($_GET['material_name']))
		{
			$ObjPoReg->SelectMaterial($_GET);		
		}

?>