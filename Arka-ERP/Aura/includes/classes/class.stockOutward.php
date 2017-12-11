<?php
#####Class For Adding Content Management ######
class stockOutward extends MysqlFns{
 
 /* class constructor */
function stockOutward(){
 $this->LDDisplayPath= $config['SiteGlobalPath']."class.stockOutward.php";
  global $config;
  global $objSmarty;
  $this->MysqlFns();
  $this->Limit = 50;

   $SelQuerys	= 'SELECT max(inward_entry_id) as last FROM `arka_inward_master` Limit 0,1';
   $InwardDetail	= $this->ExecuteQuery($SelQuerys, 'select');
   
   if($InwardDetail[0]['last']!="")
   {
			$InwardDetail[0]['inwardEntry_id'] = stripslashes($InwardDetail[0]['last']);
			$in_id1 = preg_replace("/[^0-9\.]/", '', $InwardDetail[0]['inwardEntry_id']);
			$in_id1= $in_id1 + 1;
			$str = str_split($InwardDetail[0]['last'], 3);
			$in_id = $str[0]. "" .$in_id1;
   } else
   {
   		   $in_id = "CUS10001";
   }
	$objSmarty->assign('in_id', $in_id);
		 
	//******************************************************************customer Name***********************************************************************************
	$f1 = "customer_name.txt";
	$uploadpath = $config['QuotePath'];
	//chmod($uploadpath.$f1,"777");
	$myfile = fopen($f1, "w") or die("Unable to open file!");
	$SelQuery1	= 'SELECT DISTINCT company_name FROM `universal_customer_master` WHERE status="1"';
   	$CusList	= $this->ExecuteQuery($SelQuery1, 'select');
	if(!empty($CusList) && is_array($CusList))
			foreach($CusList as $key=>$value)
			{
				$CusList[$key]['CName'] = stripslashes($CusList[$key]['customer_name']);
				$names = $names.$CusList[$key]['CName'].",";
			}
	fwrite($myfile, $names);
	fclose($myfile);
}
//**********************************************************************************************************************************************************************


function InsertCustomerContent($objArray='')
 {
   global $objSmarty, $_POST;
    
   if(!$objArray['customerId']){
    $objSmarty->assign('ErrorMessage', 'Customer ID should not be blank');
	return false;
   }elseif(!$objArray['customerName']){
    $objSmarty->assign('ErrorMessage', 'Customer Name should not be blank');
	return false;
   }elseif((!$objArray['mobileNo']) && (!$objArray['phone'])){
    $objSmarty->assign('ErrorMessage', 'Mobile or Phone Number should not be blank');
	return false;
   }elseif(!$objArray['designation']){
    $objSmarty->assign('ErrorMessage', 'Designation should not be blank');
	return false;
   }elseif(!$objArray['eMail']){
    $objSmarty->assign('ErrorMessage', 'Email should not be blank');
	return false;
   }elseif(!$objArray['customerType']){
    $objSmarty->assign('ErrorMessage', 'Customer Type should not be blank');
	return false;
   }elseif(!$objArray['address1']){
    $objSmarty->assign('ErrorMessage', 'Address1 should not be blank');
	return false;
   }elseif(!$objArray['contactPerson']){
    $objSmarty->assign('ErrorMessage', 'Contact Person should not be blank');
	return false;
   }elseif(!$objArray['city']){
    $objSmarty->assign('ErrorMessage', 'City should not be blank');
	return false;
   }elseif(!$objArray['state']){
    $objSmarty->assign('ErrorMessage', 'State Field should not be blank');
	return false;
   }elseif(!$objArray['pinCode']){
    $objSmarty->assign('ErrorMessage', 'PinCode Field should not be blank');
	return false;
   }
   
   if($objArray['customerId']){
    $InsQuery = 'INSERT IGNORE INTO `arka_cus_reg_master`(`customer_id`, `customer_name`, `mobile`, `email`, `phone`, `customer_type`, `contact_person`, `address1`, `address2`, `designation`, `city`,`state`,`pincode`,`created_by`,`created_date`,`created_time`,`status`) VALUES("'.trim(addslashes($objArray['customerId'])).'","'.trim(addslashes($objArray['customerName'])).'","'.trim(addslashes($objArray['mobileNo'])).'","'.trim(addslashes($objArray['eMail'])).'","'.trim(addslashes($objArray['phone'])).'","'.trim(addslashes($objArray['customerType'])).'","'.trim(addslashes($objArray['contactPerson'])).'","'.trim(addslashes($objArray['address1'])).'","'.trim(addslashes($objArray['address2'])).'","'.trim(addslashes($objArray['designation'])).'","'.trim(addslashes($objArray['city'])).'","'.trim(addslashes($objArray['state'])).'","'.trim(addslashes($objArray['pinCode'])).'","'.trim(addslashes($objArray['createdBy'])).'","'.trim(addslashes($objArray['createdDate'])).'","'.trim(addslashes($objArray['createdTime'])).'","1")';
  	 $this->ExecuteQuery($InsQuery, 'insert');
	 header('Location:' .$_SERVER['PHP_SELF'].'?server_response=success&cust_id='.$objArray['customer_id'].'&window_action=true');	
		
	}
	
	} 
	
	

//*************************************************************************************************************************************************
function ChkDupliCust($mobile,$email,$customer_name){
  global $objSmarty;
  if(!empty($mobile) || !empty($email) || !empty($customer_name) )
 // $WhereClause	= ' AND `id` != '.$Ident;
 	if ($email != "1@1.com" && $customer_name !="R")
		{
 	  $SelQuery2		= 'SELECT * FROM `arka_cus_reg_master` WHERE (`status` != "0") AND (`mobile` = "'.$mobile.'" OR `email` = "'.$email.'" OR `customer_name` = "'.$customer_name.'") Limit 0,1';
  $CusDetail		= $this->ExecuteQuery($SelQuery2, 'select');
  		if((!empty($CusDetail)) && is_array($CusDetail))
  			 return false;
		else
	   return true;
	 	}
		elseif($email == "1@1.com" && $customer_name !="R")
		{
		$SelQuery2		= 'SELECT * FROM `arka_cus_reg_master` WHERE (`status` != "0") AND (`mobile` = "'.$mobile.'" OR  `customer_name` = "'.$customer_name.'" ) Limit 0,1';
  		$CusDetail		= $this->ExecuteQuery($SelQuery2, 'select');
  		if((!empty($CusDetail)) && is_array($CusDetail))
  			 return false;
		else
	   return true;
		
		}
		elseif($email != "1@1.com" && $customer_name =="R")
		{
		$SelQuery2		= 'SELECT * FROM `arka_cus_reg_master` WHERE (`status` != "0") AND (`mobile` = "'.$mobile.'" OR  `email` = "'.$email.'" ) Limit 0,1';
  		$CusDetail		= $this->ExecuteQuery($SelQuery2, 'select');
  		if((!empty($CusDetail)) && is_array($CusDetail))
  			 return false;
		else
	   return true;
		
		}elseif($email == "1@1.com" && $customer_name =="R")
		{
		$SelQuery2		= 'SELECT * FROM `arka_cus_reg_master` WHERE (`status` != "0") AND (`mobile` = "'.$mobile.'" ) Limit 0,1';
  		$CusDetail		= $this->ExecuteQuery($SelQuery2, 'select');
  		if((!empty($CusDetail)) && is_array($CusDetail))
  			 return false;
		else
	   return true;
		
		}
		
 }
  /************************************************************************ Edit the Customer Details*******************************************/
 function EditCustomer($objArray='') {
   global $objSmarty, $_POST;
    
   if(!$objArray['customerId']){
    $objSmarty->assign('ErrorMessage', 'Customer ID should not be blank');
	return false;
   }elseif(!$objArray['customerName']){
    $objSmarty->assign('ErrorMessage', 'Customer Name should not be blank');
	return false;
   }elseif((!$objArray['mobileNo']) && (!$objArray['phone'])){
    $objSmarty->assign('ErrorMessage', 'Mobile or Phone Number should not be blank');
	return false;
   }elseif(!$objArray['designation']){
    $objSmarty->assign('ErrorMessage', 'Designation should not be blank');
	return false;
   }elseif(!$objArray['eMail']){
    $objSmarty->assign('ErrorMessage', 'Email should not be blank');
	return false;
   }elseif(!$objArray['customerType']){
    $objSmarty->assign('ErrorMessage', 'Customer Type should not be blank');
	return false;
   }elseif(!$objArray['address1']){
    $objSmarty->assign('ErrorMessage', 'Address1 should not be blank');
	return false;
   }elseif(!$objArray['contactPerson']){
    $objSmarty->assign('ErrorMessage', 'Contact Person should not be blank');
	return false;
   }elseif(!$objArray['city']){
    $objSmarty->assign('ErrorMessage', 'City should not be blank');
	return false;
   }elseif(!$objArray['state']){
    $objSmarty->assign('ErrorMessage', 'State Field should not be blank');
	return false;
   }elseif(!$objArray['pinCode']){
    $objSmarty->assign('ErrorMessage', 'PinCode Field should not be blank');
	return false;
   }
   if($objArray['customerId']){
   	$UpQuery1 = 'UPDATE `arka_cus_reg_master` SET `customer_name` ="'.trim($objArray['customerName']).'",`mobile` = "'.trim($objArray['mobileNo']).'", `email` = "'.trim($objArray['eMail']).'", `phone` = "'.trim($objArray['phone']).'",`customer_type` = "'.trim($objArray['customerType']).'",`contact_person` = "'.trim($objArray['contactPerson']).'",`address1` = "'.trim($objArray['address1']).'", `address2` = "'.trim($objArray['address2']).'", `designation` = "'.trim($objArray['designation']).'", `city` = "'.trim($objArray['city']).'", `state` = "'.trim($objArray['state']).'",`pincode` = "'.trim($objArray['pinCode']).'" WHERE `customer_id` = "'.trim($objArray['customerId']).'"';
	$this->ExecuteQuery($UpQuery1, 'update');
	 header('Location:' .$_SERVER['PHP_SELF'].'?customer_id='.$objArray['customerId'].'&server_success=update succeed');	

   }
   }
// **********************************************************************************************************************************************
function GetCustomerList($objArray='')  {
		global $objSmarty;
		$SelQuery = 'SELECT * FROM `arka_cus_reg_master` WHERE record_status="1" ORDER BY customer_id' ;
		$PageList		= $this->ExecuteQuery($SelQuery, "select");
        $objSmarty->assign('PageList', $PageList);
	}	
	
function GetCustomerDetail($objArray='')  {
		global $objSmarty;
		$SelQuery = 'SELECT * FROM `arka_cus_reg_master` WHERE customer_id="'.$_GET['customer_id'].'" ' ;
		$PageList		= $this->ExecuteQuery($SelQuery, "select");
        $objSmarty->assign('PageList', $PageList);
	}	
 /*******************************************************************************************Login User Roles list *********************************************/
  function RolesLists(){
	global $objSmarty;
	 $SelQuery1	= 'SELECT * FROM arka_group_mapping WHERE `group_name` = "'.$_SESSION['USER_GROUP'].'" AND `record_status` <> 0 ORDER BY sl_no';
	  $RList		= $this->ExecuteQuery($SelQuery1, "select");
		
  if(!empty($RList) && is_array($RList))
   foreach($RList as $key=>$value){
    $RList[$key]['role_id'] = stripslashes($RList[$key]['role_id']);
	$RList[$key]['role_name'] = stripslashes($RList[$key]['role_name']);
	$objSmarty->assign('RList', $RList);
  return $RList;
		} 
	}
	function deleteCustomer($delData){
	 global $objSmarty;
 
    $DelQuery = 'update `arka_cus_reg_master` set `record_status`=0 WHERE `customer_id` ="'.$delData.'"';
	$this->ExecuteQuery($DelQuery, 'delete');
	return true;
  }
  //*********************************************************delete
  /*function DeleteCus($CusIdent){
  global $objSmarty;
  foreach ( $CusIdent as $ConId ){
   if($ConId){
    $DelQuery = 'DELETE FROM `arka_cus_reg_master` WHERE `customer_id` ='.$ConId;
	$this->ExecuteQuery($DelQuery, 'delete');
   }
  }
  $objSmarty->assign('Keyword', $this->Keyword);
  $objSmarty->assign('Operator', $this->Operator);
  $objSmarty->assign('Offset', $this->Offset);
  $objSmarty->assign('PerPage', $this->PerPage);
  return true;
 }
  function DeleteID($deleid){
  global $objSmarty;
  $DelQuery = 'UPDATE `arka_cus_reg_master` set status ="0" WHERE `customer_id`="'.$_REQUEST['deleid'].'"';
 // echo($DelQuery);
  $this->ExecuteQuery($DelQuery, 'delete');
  /* $InsQuery4 = 'INSERT INTO `prime_deleted_records`(`deleted_data`, `deleted_table`, `deleted_by`) VALUES("'.$_REQUEST['deleid'].'","prime_site_reg_master","'.$_SESSION['UserName'].'")';
	 $this->ExecuteQuery($InsQuery4, 'insert');
  $objSmarty->assign('SuccessMessage', 'Deleted Successfully');
  //$this->GetSiteLists();
 }*/
 }
?>


