<?php
#####Class For Adding Content Management ######
class Users extends MysqlFns{
 
 /* class constructor */
function Users(){
 $this->LDDisplayPath= $config['SiteGlobalPath']."class.Users.php";
  global $config;
  global $objSmarty;
  $this->MysqlFns();
  $this->Limit = 50;

   $SelQuerys	= 'SELECT max(user_id) as last FROM `arka_user_master` Limit 0,1';
   $UserDetail	= $this->ExecuteQuery($SelQuerys, 'select');
   
   if($UserDetail[0]['last']!="")
   {
			$UserDetail[0]['user_id'] = stripslashes($UserDetail[0]['last']);
			$u_id1 = preg_replace("/[^0-9\.]/", '', $UserDetail[0]['user_id']);
			$u_id1= $u_id1 + 1;
			$str = str_split($UserDetail[0]['last'], 3);
			$u_id = $str[0]. "" .$u_id1;
   } else
   {
   		   $u_id = "USER10001";
   }
	$objSmarty->assign('u_id', $u_id);
}


function InsertUserContent($objArray)
 {
   global $objSmarty;
    
   if(!$objArray['customer_id']){
    $objSmarty->assign('ErrorMessage', 'Customer ID should not be blank');
	return false;
   }elseif(!$objArray['customer_name']){
    $objSmarty->assign('ErrorMessage', 'Customer Name should not be blank');
	return false;
   }elseif(!$objArray['contact_person']){
    $objSmarty->assign('ErrorMessage', 'Contact Person should not be blank');
	return false;
   }elseif(!$objArray['type']){
    $objSmarty->assign('ErrorMessage', 'Customer Type should not be blank');
	return false;
   }elseif(!$objArray['site_id']){
    $objSmarty->assign('ErrorMessage', 'Site Id Field should not be blank');
	return false;
   }elseif(!$objArray['site_name']){
    $objSmarty->assign('ErrorMessage', 'Site Name Field should not be blank');
	return false;
   }elseif(!$objArray['userName']){
    $objSmarty->assign('ErrorMessage', 'User Name Field should not be blank');
	return false;
   }elseif(!$objArray['password']){
    $objSmarty->assign('ErrorMessage', 'password Field should not be blank');
	return false;
   }elseif(!$objArray['department']){
    $objSmarty->assign('ErrorMessage', 'Department should not be blank');
	return false;
   }elseif(!$objArray['userGroup']){
    $objSmarty->assign('ErrorMessage', 'userGroup should not be blank');
	return false;
   }elseif((!$objArray['mobile']) && (!$objArray['phone'])){
    $objSmarty->assign('ErrorMessage', 'Mobile or Phone Number should not be blank');
	return false;
   }elseif(!$objArray['email']){
    $objSmarty->assign('ErrorMessage', 'Email should not be blank');
	return false;
   }elseif(!$objArray['password']){
    $objSmarty->assign('ErrorMessage', 'Password should not be blank');
	return false;
   }
   
   if($objArray['customer_id']){
   $InsQuery = 'INSERT IGNORE INTO `arka_user_master`(`customer_id`, `customer_name`, `contact_person`,`customer_type`, `logo_image`,`site_id`, `site_name`,`user_id`, `username`,  `password`, `department`, `user_group`, `mobile`,`phone`,`email_id`,`created_by`,`created_date`,`created_time`,`record_status`) VALUES("'.trim(addslashes($objArray['customer_id'])).'","'.trim(addslashes($objArray['customer_name'])).'","'.trim(addslashes($objArray['contact_person'])).'","'.trim(addslashes($objArray['type'])).'","'.trim(addslashes($objArray['logo_image'])).'","'.trim(addslashes($objArray['site_id'])).'","'.trim(addslashes($objArray['site_name'])).'","'.trim(addslashes($objArray['userId'])).'","'.trim(addslashes($objArray['userName'])).'","'.trim(addslashes($objArray['password'])).'","'.trim(addslashes($objArray['department'])).'","'.trim(addslashes($objArray['userGroup'])).'","'.trim(addslashes($objArray['mobile'])).'","'.trim(addslashes($objArray['phone'])).'","'.trim(addslashes($objArray['email'])).'","'.trim(addslashes($objArray['createdBy'])).'","'.trim(addslashes($objArray['createdDate'])).'","'.trim(addslashes($objArray['createdTime'])).'","1")';
  	 $this->ExecuteQuery($InsQuery, 'insert');
	 header('Location:' .$_SERVER['PHP_SELF'].'?server_response=success&user_id='.$objArray['userId'].'&window_action=true');	
		
	}
	
	} 
	
	

//*************************************************************************************************************************************************
function ChkDupliCust($mobile,$email,$customer_name){
  global $objSmarty;
  if(!empty($mobile) || !empty($email) || !empty($customer_name) )
 // $WhereClause	= ' AND `id` != '.$Ident;
 	if ($email != "1@1.com" && $customer_name !="R")
		{
 	  $SelQuery2		= 'SELECT * FROM `arka_user_master` WHERE (`status` != "0") AND (`mobile` = "'.$mobile.'" OR `email` = "'.$email.'" OR `customer_name` = "'.$customer_name.'") Limit 0,1';
  $UserDetail		= $this->ExecuteQuery($SelQuery2, 'select');
  		if((!empty($UserDetail)) && is_array($UserDetail))
  			 return false;
		else
	   return true;
	 	}
		elseif($email == "1@1.com" && $customer_name !="R")
		{
		$SelQuery2		= 'SELECT * FROM `arka_user_master` WHERE (`status` != "0") AND (`mobile` = "'.$mobile.'" OR  `customer_name` = "'.$customer_name.'" ) Limit 0,1';
  		$UserDetail		= $this->ExecuteQuery($SelQuery2, 'select');
  		if((!empty($UserDetail)) && is_array($UserDetail))
  			 return false;
		else
	   return true;
		
		}
		elseif($email != "1@1.com" && $customer_name =="R")
		{
		$SelQuery2		= 'SELECT * FROM `arka_user_master` WHERE (`status` != "0") AND (`mobile` = "'.$mobile.'" OR  `email` = "'.$email.'" ) Limit 0,1';
  		$UserDetail		= $this->ExecuteQuery($SelQuery2, 'select');
  		if((!empty($UserDetail)) && is_array($UserDetail))
  			 return false;
		else
	   return true;
		
		}elseif($email == "1@1.com" && $customer_name =="R")
		{
		$SelQuery2		= 'SELECT * FROM `arka_user_master` WHERE (`status` != "0") AND (`mobile` = "'.$mobile.'" ) Limit 0,1';
  		$UserDetail		= $this->ExecuteQuery($SelQuery2, 'select');
  		if((!empty($UserDetail)) && is_array($UserDetail))
  			 return false;
		else
	   return true;
		
		}
		
 }
  /************************************************************************ Edit the Customer Details*******************************************/
 function EditUser($objArray) {
   global $objSmarty,$_POST;
   if(!$objArray['customer_id']){
    $objSmarty->assign('ErrorMessage', 'Customer ID should not be blank');
	return false;
   }elseif(!$objArray['customer_name']){
    $objSmarty->assign('ErrorMessage', 'Customer Name should not be blank');
	return false;
   }elseif(!$objArray['contact_person']){
    $objSmarty->assign('ErrorMessage', 'Contact Person should not be blank');
	return false;
   }elseif(!$objArray['type']){
    $objSmarty->assign('ErrorMessage', 'Customer Type should not be blank');
	return false;
   }elseif(!$objArray['site_id']){
    $objSmarty->assign('ErrorMessage', 'Site Id Field should not be blank');
	return false;
   }elseif(!$objArray['site_name']){
    $objSmarty->assign('ErrorMessage', 'Site Name Field should not be blank');
	return false;
   }elseif(!$objArray['userName']){
    $objSmarty->assign('ErrorMessage', 'User Name Field should not be blank');
	return false;
   }elseif(!$objArray['password']){
    $objSmarty->assign('ErrorMessage', 'password Field should not be blank');
	return false;
   }elseif(!$objArray['department']){
    $objSmarty->assign('ErrorMessage', 'Department should not be blank');
	return false;
   }elseif(!$objArray['userGroup']){
    $objSmarty->assign('ErrorMessage', 'userGroup should not be blank');
	return false;
   }elseif((!$objArray['mobile']) && (!$objArray['phone'])){
    $objSmarty->assign('ErrorMessage', 'Mobile or Phone Number should not be blank');
	return false;
   }elseif(!$objArray['email']){
    $objSmarty->assign('ErrorMessage', 'Email should not be blank');
	return false;
   }elseif(!$objArray['password']){
    $objSmarty->assign('ErrorMessage', 'Password should not be blank');
	return false;
   }
   if($objArray['userId']){
   	$UpQuery1 = 'UPDATE `arka_user_master` SET `customer_id` = "'.trim($objArray['customer_id']).'", `customer_name` = "'.trim($objArray['customer_name']).'", `contact_person` = "'.trim($objArray['contact_person']).'", `customer_type` = "'.trim($objArray['type']).'",`site_id` = "'.trim($objArray['site_id']).'",`site_name` = "'.trim($objArray['site_name']).'",`username` = "'.trim($objArray['userName']).'", `department` = "'.trim($objArray['department']).'", `user_group` = "'.trim($objArray['userGroup']).'", `mobile` = "'.trim($objArray['mobile']).'",`phone` = "'.trim($objArray['phone']).'",`email_id` = "'.trim($objArray['email']).'",`password` = "'.trim($objArray['password']).'" WHERE `user_id` = "'.trim($objArray['userId']).'"';
 $this->ExecuteQuery($UpQuery1, 'update');
	 header('Location:' .$_SERVER['PHP_SELF'].'?user_id='.$objArray['userId'].'&server_success=update succeed');	

   }
   }
// **********************************************************************************************************************************************


function GetUserList($objArray='')  {
		global $objSmarty;
		$SelQuery = 'SELECT * FROM `arka_user_master` WHERE record_status="1"' ;
		$PageList		= $this->ExecuteQuery($SelQuery, "select");
        $objSmarty->assign('PageList', $PageList);
	}	
	
function GetUserDetails($objArray='')  {
		global $objSmarty;
		$SelQuery = 'SELECT * FROM `arka_user_master` WHERE user_id="'.$_GET['user_id'].'" ' ;
		$PageList		= $this->ExecuteQuery($SelQuery, "select");
        $objSmarty->assign('PageList', $PageList);
	}
function GetUserProfile($objArray=''){
		global $objSmarty;
		$SelQuery = 'SELECT * FROM `arka_user_master` WHERE username= "'.$_SESSION['UserName'].'"' ;
		$PageList		= $this->ExecuteQuery($SelQuery, "select");
        $objSmarty->assign('PageList', $PageList);
	}
function GetUpdateProfile($objArray=''){
		global $objSmarty, $_POST;
		//echo $_POST['user_id'];exit;
		echo $UpQuery1 = 'UPDATE `arka_user_master` SET `password` = "'.$_POST['new_password'].'" WHERE `user_id` = "'.$_POST['user_id'].'"';
 		$this->ExecuteQuery($UpQuery1, 'update');
	 	header('Location:' .$_SERVER['PHP_SELF'].'?user_id='.$objArray['user_id'].'&server_profile=update succeed');	
	}

	function GetUserGroup($objArray='')  {
		global $objSmarty;
		$SelQuery = 'SELECT * FROM `arka_group_master` WHERE `record_status`="1" ' ;
		$GroupList		= $this->ExecuteQuery($SelQuery, "select");
        $objSmarty->assign('GroupList', $GroupList);
	}	
	function DeleteID($id){
  global $objSmarty;
  $DelQuery = 'update  `arka_user_master`  set `record_status`= 0 WHERE  user_id="'.$_GET['user_id'].'" '; 
  $this->ExecuteQuery($DelQuery, 'delete');
  
   header('Location:' .$_SERVER['PHP_SELF'].'?succs_msg_for_del');

 }
 /*******************************************************************************************Login User Roles list *********************************************/
  function RolesLists(){
 // echo("rolelist");exit;
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
 }
?>


