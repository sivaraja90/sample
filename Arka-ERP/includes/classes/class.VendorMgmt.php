<?php
#####Class For Adding Content Management ######
class VendorMgmt extends MysqlFns{
 
 /* class constructor */
 function VendorMgmt(){
 $this->LDDisplayPath= $config['SiteGlobalPath']."class.VendorMgmt.php";
global $objSmarty,$config;
$tbl = $config['DBPrefix'];
$this->MysqlFns();
$vend_id = base64_decode($_GET["po_no"]);
    /**************************************vendor Id Auto Increment*********************************************************/
			$SelQuerys	= 'SELECT max(vendor_id) as last FROM `'.$tbl.'vendor_master` Limit 0,1';
			$VenDetail	= $this->ExecuteQuery($SelQuerys, 'select');
		
			if($VenDetail[0]['last']!="")
			{
			$VenDetail[0]['vendor_id'] = stripslashes($VenDetail[0]['last']);
			$c_id1 = preg_replace("/[^0-9\.]/", '', $VenDetail[0]['vendor_id']);
			$c_id1= $c_id1 + 1;
			$str = str_split($VenDetail[0]['last'], 2);
			$c_id = $str[0]. "" .$c_id1;
			}
			else
			{
			$c_id = "VR1001";
			}
			$objSmarty->assign('c_id', $c_id);
			
			
 }
 /*****function InsertVendor()******/
 /*****function AddBank()******/
 /*****function EditBank()******/
 /*****function Viewvendor()*******/
 /*****function ViewEdit()******/
 /*****function EditVendor()******/
 /*****function Listvendor()******/
 /*****function ListMaster()******/
 /*****function DeleteMaster()******/
 /*****function ListContact()******/
 /*****function ListAddress()******/
 /*****function EditContact()******/
  /*****function EditAddressdetail()******/
 /*************************************************Insert vendor/***************************************************************/
 function InsertVendor($objArray="")
 {
global $objSmarty,$config,$_POST;
$tbl = $config['DBPrefix'];

			if(!$objArray['vendor_fname']){
			$objSmarty->assign('ErrorMessage', 'Name of the vendor should not be blank');
			return false;
			}elseif((!$objArray['mobile_no']) && (!$objArray['phone_no'])){
			$objSmarty->assign('ErrorMessage', 'Mobile Number or Phone No should not be blank');
			return false;
			}elseif(!$objArray['designation']){
			$objSmarty->assign('ErrorMessage', 'Designation should not be blank');
			return false;
			}elseif(!$objArray['mail_id']){
			$objSmarty->assign('ErrorMessage', 'Email should not be blank');
			return false;
			}elseif(!$objArray['address']){
			$objSmarty->assign('ErrorMessage', 'Address should not be blank');
			return false;
			}elseif(!$objArray['service_tax']){
			$objSmarty->assign('ErrorMessage', 'Service Tax should not be blank');
			return false;
			}elseif(!$objArray['cst_no']){
			$objSmarty->assign('ErrorMessage', 'Cst No should not be blank');
			return false;
			}elseif(!$objArray['area']){
			$objSmarty->assign('ErrorMessage', 'Area Field should not be blank');
			return false;
			}elseif(!$objArray['tin_no']){
			$objSmarty->assign('ErrorMessage', 'Tin No Field should not be blank');
			return false;
			}elseif(!$objArray['city']){
			$objSmarty->assign('ErrorMessage', 'City Field should not be blank');
			return false;
			}elseif(!$objArray['pincode']){
			$objSmarty->assign('ErrorMessage', 'Pincode Field should not be blank');
			return false;
			}elseif(!$objArray['company_name']){
			$objSmarty->assign('ErrorMessage', 'Company Name Field should not be blank');
			return false;
			}
			$objSmarty->assign('vendor_id', $objArray['vendor_id']);
			if($objArray['vendor_id'] && $objArray['vendor_id']){

 $InsQuery = 'INSERT INTO `'.$tbl.'vendor_master`(`vendor_id`,`vendor_company_name`,`service_tax`,`cst_no`,`tin_no`,`created_by`,`created_date`,`created_time`,`remarks`,`status`) VALUES("'.trim(addslashes($objArray['vendor_id'])).'","'.trim(addslashes($objArray['company_name'])).'","'.trim(addslashes($objArray['service_tax'])).'","'.trim(addslashes($objArray['cst_no'])).'","'.trim(addslashes($objArray['tin_no'])).'","'.trim(addslashes($objArray['created_by'])).'","'.trim(addslashes($objArray['created_date'])).'","'.trim(addslashes($objArray['created_time'])).'","'.trim(addslashes($objArray['remarks'])).'","1")';
$this->ExecuteQuery($InsQuery, 'insert');

 $InsQuery2 = 'INSERT  
INTO`'.$tbl.'vendor_contact_details`(`vendor_id`,`salutation`,`vendor_contact_person_fname`,`vendor_contact_person_lname`,`mobile_no`,`mobile_no1`,`mobile_no2`,`area_code`, `area_code1`,`extension`,`extension1`,`phone_no`,`phone_no1`,`area`,`created_by`,`created_date`,`created_time`, `designation`, `mail_id`, `mail_id1`,`d_o_b`,`remarks`, `status`) 
VALUES("' .trim(addslashes($objArray['vendor_id'])).'","'.trim(addslashes($objArray['salutation'])).'","'.trim(addslashes($objArray[ 'vendor_fname'])).'","'.trim(addslashes($objArray['vendor_lname'])).'","'.trim(addslashes($objArray['mobile_no'])).'","'.trim(addslashes($objArray['mobile_no2'])).'","'.trim(addslashes($objArray['mobile_no3'])).'","'.trim(addslashes($objArray['area_code'])).'","'.trim(addslashes($objArray['area_code1'])).'","'.trim(addslashes($objArray['extension'])).'","'.trim(addslashes($objArray['extension1'])).'","'.trim(addslashes($objArray['phone_no'])).'","'.trim(addslashes($objArray['phone_no1'])).'","'.trim(addslashes($objArray['area'])).'","'.trim(addslashes($objArray['created_by'])).'","'.trim(addslashes($objArray['created_date'])).'","'.trim(addslashes($objArray['created_time'])).'","'.trim(addslashes($objArray['designation'])).'","'.trim(addslashes($objArray['mail_id'])).'","'.trim(addslashes($objArray['mail_id1'])).'","'.trim(addslashes($objArray['d_o_b'])).'","'.trim(addslashes($objArray['remarks'])).'","1")';
$this->ExecuteQuery($InsQuery2, 'insert');	

 $InsQuery3 = 'INSERT INTO `'.$tbl.'vendor_address_details`(`vendor_id`,`address`,`address1`, `area`, `landmark`, `city`, `pincode`, `remarks`, `created_date`, `created_time`, `status`,`created_by`) VALUES("'.trim(addslashes($objArray['vendor_id'])).'","'.trim(addslashes($objArray['address'])).'","'.trim(addslashes($objArray['address1'])).'","'.trim(addslashes($objArray['area'])).'","'.trim(addslashes($objArray['landmark'])).'","'.trim(addslashes($objArray['city'])).'","'.trim(addslashes($objArray['pincode'])).'","'.trim(addslashes($objArray['remarks'])).'","'.trim(addslashes($objArray['created_date'])).'","'.trim(addslashes($objArray['created_time'])).'","1","'.trim(addslashes($objArray['created_by'])).'")';
$this->ExecuteQuery($InsQuery3, 'insert');		 
//Success Message
header('Location:' .$_SERVER['PHP_SELF'].'?succs_msg_for_insert');
return true;
 }
}
/*************************************************Add Bank/******************************************************************/
function AddBank($objArray="")
{
global $objSmarty,$config,$_POST;
$tbl = $config['DBPrefix'];

            if(!$objArray['account_no']){
			$objSmarty->assign('ErrorMessage', 'Account Number should not be blank');
			return false;
			}elseif(!$objArray['acc_holder']){
			$objSmarty->assign('ErrorMessage', 'Holder Name should not be blank');
			return false;
			}elseif(!$objArray['bank_name']){
			$objSmarty->assign('ErrorMessage', 'Bank Name should not be blank');
			return false;
			}elseif(!$objArray['branch']){
			$objSmarty->assign('ErrorMessage', 'Branch should not be blank');
			return false;
			}elseif(!$objArray['area']){
			$objSmarty->assign('ErrorMessage', 'Area should not be blank');
			return false;
			}
			elseif(!$objArray['pincode']){
			$objSmarty->assign('ErrorMessage', 'Pincode should not be blank');
			return false;
			}
			elseif(!$objArray['ifsc_code']){
			$objSmarty->assign('ErrorMessage', 'IFSC should not be blank');
			return false;
			}
			
			$objSmarty->assign('vendor_id', $objArray['vendor_id']);
			if($objArray['vendor_id'] && $objArray['vendor_id']){

 $InsQuery = 'INSERT INTO `'.$tbl.'vendor_bank_details`(`vendor_id`,`account_no`,`account_holder_name`,`bank_name`,`branch`,`area`,`pincode`,`ifsc_code`,`created_by`,`created_date`,`created_time`,`remarks`,`status`) VALUES("'.trim(addslashes($objArray['vendor_id'])).'","'.trim(addslashes($objArray['account_no'])).'","'.trim(addslashes($objArray['acc_holder'])).'","'.trim(addslashes($objArray['bank_name'])).'","'.trim(addslashes($objArray['branch'])).'","'.trim(addslashes($objArray['area'])).'","'.trim(addslashes($objArray['pincode'])).'","'.trim(addslashes($objArray['ifsc_code'])).'","'.trim(addslashes($objArray['created_by'])).'","'.trim(addslashes($objArray['created_date'])).'","'.trim(addslashes($objArray['created_time'])).'","'.trim(addslashes($objArray['remark'])).'","1")'; 
$this->ExecuteQuery($InsQuery, 'insert');
		 
//Success Message
header('Location:' .$_SERVER['PHP_SELF'].'?succs_msg_for_insert');
return true;
 }
}
/************************************************View Bank/*****************************************************************/
function ViewBank()
 { 
 $vend_id = base64_decode($_GET["vendor_id"]);
 global $objSmarty,$config;
$tbl = $config['DBPrefix'];
			 $SelQuery = 'SELECT * FROM '.$tbl.'vendor_bank_details WHERE vendor_id="'.$vend_id.'"';
			$ListBank = $this->ExecuteQuery($SelQuery, "select");
			$objSmarty->assign('ListBank', $ListBank);
			return $ListBank;

 }
 /************************************************Edit Bank/*****************************************************************/
function EditBankDetails()
 {
 global $objSmarty,$config;
$tbl = $config['DBPrefix'];
			$SelQuery = 'SELECT * FROM '.$tbl.'vendor_bank_details WHERE sl_no="'.$_GET['sl_no'].'"';
			$EditBank = $this->ExecuteQuery($SelQuery, "select");
			$objSmarty->assign('EditBank', $EditBank);
			return $EditBank;

 }
  /******************************Delete Bank/************************************************************************************/
 function DeleteBank($CatIdent,$VenIdent)
 {      
      global $objSmarty,$config;
       $test = $_GET['vendor_id3'];
      $vend_id = base64_decode($_GET["vendor_id3"]);
		 $tbl = $config['DBPrefix'];
	   $DelQuery = 'update `'.$tbl.'vendor_bank_details` set `status` = 0 WHERE `sl_no` ="'.$CatIdent.'" AND `vendor_id` ="'.$vend_id.'"';
			$this->ExecuteQuery($DelQuery ,'update');
			
			       header('Location:'.$_SERVER['PHP_SELF'].'?succs_msg_for_det2'."&"."vendor_id=".$test);
		   
 }
 function RetriveBank($Slno,$Cus1)
 {
		     global $objSmarty,$config;
			   $test = $_GET['vendor_id3'];
			  $vend_id = base64_decode($_GET["vendor_id3"]);
 			$tbl = $config['DBPrefix'];
			$UpQuery = 'update '.$tbl.'vendor_bank_details set `status` = 1 WHERE sl_no="'.$Slno.'" AND `vendor_id` ="'.$vend_id.'"'; 
			$this->ExecuteQuery($UpQuery, 'update');
            header('Location:' .$_SERVER['PHP_SELF'].'?succs_msg_for_ret2'."&"."vendor_id=".$test);

 }
 
/*************************************************View vendor/***************************************************************/
function Viewvendor()
 {
 $vend_id = base64_decode($_GET["vendor_id"]);
 global $objSmarty,$config;
$tbl = $config['DBPrefix'];
			 $SelQuery = 'SELECT * FROM '.$tbl.'vendor_master WHERE vendor_id="'.$vend_id.'"';
			$ListViews = $this->ExecuteQuery($SelQuery, "select");
			$objSmarty->assign('ListViews', $ListViews);
			return $ListViews;

 }
 /*******************************************************************************************Login User Roles list/ *********************************************/
  function RolesLists(){
	 global $objSmarty,$config;
  $tbl = $config['DBPrefix'];

	 $SelQuery1	= 'SELECT * FROM `'.$tbl.'user_group_mapping` WHERE `group_name` = "'.$_SESSION['USER_GROUP'].'" AND `status` <> 0 ORDER BY sl_no';
	  $RList		= $this->ExecuteQuery($SelQuery1, "select");

  if(!empty($RList) && is_array($RList))
   foreach($RList as $key=>$value){
    $RList[$key]['role_id'] = stripslashes($RList[$key]['role_id']);
	$RList[$key]['role_name'] = stripslashes($RList[$key]['role_name']);
	$objSmarty->assign('RList', $RList);
  return $RList;
		}
	}
 /*************************************************View Edit Vendor/***************************************************************/
function ViewEdit($objArray)
 {
 $vend_id = base64_decode($_GET["vendor_id"]);
 global $objSmarty,$config;
$tbl = $config['DBPrefix'];
			$SelQuery = 'SELECT * FROM '.$tbl.'vendor_master WHERE vendor_id="'.$vend_id.'"';
			$ListEdit = $this->ExecuteQuery($SelQuery, "select");
			$objSmarty->assign('ListEdit', $ListEdit);
			return $ListEdit;

 }
  /*************************************************View Edit Vendor/***************************************************************/
function EditAddressDetails($objArray)
 {global $objSmarty,$config;
$tbl = $config['DBPrefix'];
			$SelQuery = 'SELECT * FROM '.$tbl.'vendor_address_details WHERE sl_no="'.$_GET['sl_no'].'"';
			$EditAddress = $this->ExecuteQuery($SelQuery, "select");
			$objSmarty->assign('EditAddress', $EditAddress);
			return $EditAddress;

 }
 /*************************************************List vendor/***************************************************************/
 
 function Listvendor()
 {
 global $objSmarty,$config;
$tbl = $config['DBPrefix'];
  $SelQuery = 'SELECT '.$tbl.'vendor_master.*,'.$tbl.'vendor_address_details.area,'.$tbl.'vendor_address_details.city,'.$tbl.'vendor_contact_details.area_code,'.$tbl.'vendor_contact_details.phone_no,'.$tbl.'vendor_contact_details.extension,'.$tbl.'vendor_contact_details.mobile_no,'.$tbl.'vendor_contact_details.mail_id FROM `'.$tbl.'vendor_master`,`'.$tbl.'vendor_contact_details`, `'.$tbl.'vendor_address_details` WHERE  '.$tbl.'vendor_master.vendor_id='.$tbl.'vendor_contact_details.vendor_id AND '.$tbl.'vendor_master.vendor_id='.$tbl.'vendor_address_details.vendor_id GROUP BY '.$tbl.'vendor_master.vendor_id ORDER BY '.$tbl.'vendor_master.vendor_id DESC';
			$ListView = $this->ExecuteQuery($SelQuery, "select");
			$objSmarty->assign('ListView', $ListView);
			return $ListView;

 }
 /**********************************************Delete Contact/*********************************************************************/
 function DeleteMaster($CatIdent)
 {
 		 global $objSmarty,$config;
			$tbl = $config['DBPrefix'];
			$DelQuery = 'update `'.$tbl.'vendor_master` set `status` = 0 WHERE `vendor_id` ="'.$CatIdent.'"';
			$this->ExecuteQuery($DelQuery, 'update');
            header('Location:' .$_SERVER['PHP_SELF'].'?succs_msg_for_del');  

 }
 /*******************************Retrive Master/********************************************************/
  function RetriveMaster($CatIdent,$CatIdent1)
 {
 		 global $objSmarty,$config;
			$tbl = $config['DBPrefix'];
$UpQuery = 'update `'.$tbl.'vendor_master` set `status` = 1 WHERE `vendor_id` ="'.$CatIdent.'" AND sl_no="'.$CatIdent1.'"';
			$this->ExecuteQuery($UpQuery, 'update');
            header('Location:' .$_SERVER['PHP_SELF'].'?succs_msg_for_ret');  

 }
 /**********************************************List Address/*********************************************************************/
 function ListAddress($objArray)
 { 
 			$vend_id = base64_decode($_GET["vendor_id"]);
 		 	global $objSmarty,$config;
		 	$tbl = $config['DBPrefix']; 
			$SelQuery = 'SELECT * FROM `'.$tbl.'vendor_address_details` WHERE vendor_id="'.$vend_id.'"'; 
			$ListAddress = $this->ExecuteQuery($SelQuery, "select");
			$objSmarty->assign('ListAddress', $ListAddress);
			return $ListAddress;
 }
 
 /**********************************************Edit Contact/*********************************************************************/
 function EditContact($ConIdent)
 {
			global $objSmarty,$config;
			$tbl = $config['DBPrefix'];
			$SelQuery = 'SELECT * FROM `'.$tbl.'vendor_contact_details` WHERE status = "1" AND sl_no="'.$ConIdent.'" ';
			$EditContact = $this->ExecuteQuery($SelQuery, "select");
			$objSmarty->assign('EditContact', $EditContact);
			return $EditContact;

 }
 /**********************************************List Contact/*********************************************************************/
 function ListContact($objArray='')
 {
 			$vend_id = base64_decode($_GET["vendor_id"]);
			global $objSmarty,$config;
			$tbl = $config['DBPrefix'];
			$SelQuery = 'SELECT * FROM `'.$tbl.'vendor_contact_details` WHERE vendor_id="'.$vend_id.'"';
			$ListContact = $this->ExecuteQuery($SelQuery, "select");
			$objSmarty->assign('ListContact', $ListContact);
			return $ListContact;

 }
 /**********************************************Delete Contact/*********************************************************************/
 function DeleteContact($CatIdent,$VenIdent)

 {     
      global $objSmarty,$config;
       $test = $_GET['vendor_id'];
      $vend_id = base64_decode($_GET["vendor_id"]);

			$tbl = $config['DBPrefix'];
			$DelQuery = 'update `'.$tbl.'vendor_contact_details` set `status` = 0 WHERE `sl_no` ="'.$CatIdent.'"  AND `vendor_id` ="'.$vend_id.'"';
			$this->ExecuteQuery($DelQuery ,'update');
			
			header('Location:'.$_SERVER['PHP_SELF'].'?succs_msg_for_det'."&"."vendor_id=".$test);
			return true;
			
		   
 }
 function RetriveContact($Slno,$Cus1)
 {
   global $objSmarty,$config;
		 	$test = $_GET['vendor_id'];
		 	$vend_id = base64_decode($_GET["vendor_id"]);
			$tbl = $config['DBPrefix'];
			$UpQuery = 'update '.$tbl.'vendor_contact_details set `status` = 1 WHERE sl_no="'.$Slno.'" AND `vendor_id` ="'.$vend_id.'"'; 
			$this->ExecuteQuery($UpQuery, 'update');
header('Location:'.$_SERVER['PHP_SELF'].'?succs_msg_for_ret'."&"."vendor_id=".$test);
			return true;

 }
 

 /****************************************company name exists*************************/
function Ajax_Validate_Existing_Cmp()
{
  global $objSmarty,$config;
  $tbl = $config['DBPrefix'];
  $SelQuery		= 'SELECT * FROM `'.$tbl.'vendor_master` WHERE `vendor_company_name`="'.$_GET['name'].'"'; 

  $CmpDetail		= $this->ExecuteQuery($SelQuery, 'select');
  if(!empty($CmpDetail) && is_array($CmpDetail))
  {
  echo "Company Details Exists";
  return false;
  }
}
 /**********************************************Delete Address/*********************************************************************/
 function DeleteAddress($Addident,$VenIdent1)
 {
  global $objSmarty,$config;
	 	$test = $_GET['vendor_id1'];
	 	$vend_id = base64_decode($test);
		 $tbl = $config['DBPrefix'];
	    $DelQuery = 'update `'.$tbl.'vendor_address_details` set `status` = 0 WHERE `sl_no` ="'.$Addident.'"  AND `vendor_id` ="'.$vend_id.'"';
		$this->ExecuteQuery($DelQuery, 'update');
          header('Location:'.$_SERVER['PHP_SELF'].'?succs_msg_for_det1'."&"."vendor_id=".$test);
			return true;
		   
 }
 function RetriveAddress($Slno1,$Cus2)
 	{
 		 global $objSmarty,$config;
		 	$test = $_GET['vendor_id1'];
		 	$vend_id = base64_decode($_GET["vendor_id1"]);

			$tbl = $config['DBPrefix'];
			$UpQuery1 = 'update `'.$tbl.'vendor_address_details` set `status` = 1 WHERE sl_no="'.$Slno1.'" AND `vendor_id` ="'.$vend_id.'"';
			$this->ExecuteQuery($UpQuery1, 'update');
            header('Location:' .$_SERVER['PHP_SELF'].'?succs_msg_for_ret1'."&"."vendor_id=".$test);

 }
 
 /****************************************************Time Stamp Value As Date And Time Form Master/****************************************/
 
  function DateStamp()
 {global $objSmarty,$config;
$tbl = $config['DBPrefix'];
$vend_id = base64_decode($_GET["vendor_id"]);
			 $SelQuery = 'SELECT Date(timestamp_value) as Date from '.$tbl.'vendor_master WHERE vendor_id="'.$vend_id.'"';
			 $Date_Stamp = $this->ExecuteQuery($SelQuery, "select");
			  //print $Date;
			 $objSmarty->assign('Date_Stamp', $Date_Stamp);
			 return $Date_Stamp;
			 
}

  function TimeStamp()
  {global $objSmarty,$config;
$tbl = $config['DBPrefix'];
$vend_id = base64_decode($_GET["vendor_id"]);
			 $SelQuery1 = 'SELECT  Time(timestamp_value) as Time from '.$tbl.'vendor_master WHERE vendor_id="'.$vend_id.'"';
			 $Time_Stamp = $this->ExecuteQuery($SelQuery1, "select");
			 $objSmarty->assign('Time_Stamp', $Time_Stamp);
			 return $Time_Stamp;
			

 }

 /***************************Vendor/***********************************************************/
  function ViewVendorinfo()
 {
global $objSmarty,$config;
$tbl = $config['DBPrefix'];
$vend_id = base64_decode($_GET["vendor_id"]);
 $SelQuery2 = 'SELECT * FROM `'.$tbl.'vendor_master` WHERE vendor_id ="'.$vend_id.'"' ;
// $SelQuery2 = 'SELECT * FROM `'.$tbl.'quote_details` WHERE '.$tbl.'quote_details.quote_id';
			$ListViewinfo = $this->ExecuteQuery($SelQuery2, "select");
			$objSmarty->assign('ListViewinfo', $ListViewinfo);
			return $ListViewinfo;

 }

 /**************************************************Add Contact/*************************************************************/
 function InsertContact($objArray="")
 {
 global $objSmarty,$config,$_POST;
 $tbl = $config['DBPrefix'];
            
            if(!$objArray['customer_fname']){
			$objSmarty->assign('ErrorMessage', 'First Name should not be blank');
			return false;
			}elseif(!$objArray['customer_lname']){
			$objSmarty->assign('ErrorMessage', 'Last Name should not be blank');
			return false;
			}
			/*elseif((!$objArray['mobile_no'])){
			$objSmarty->assign('ErrorMessage', 'Mobile Number should not be blank');
			return false;
			}*/elseif(!$objArray['designation']){
			$objSmarty->assign('ErrorMessage', 'Designation should not be blank');
			return false;
			}elseif(!$objArray['mail_id']){
			$objSmarty->assign('ErrorMessage', 'Email should not be blank');
			return false;
			}/*elseif(!$objArray['area_code']){
			$objSmarty->assign('ErrorMessage', 'Area Code Field should not be blank');
			return false;
			}elseif(!$objArray['phone_no']){
			$objSmarty->assign('ErrorMessage', 'Phone No Field should not be blank');
			return false;
			}elseif(!$objArray['extension']){
			$objSmarty->assign('ErrorMessage', 'Extension Field should not be blank');
			return false;
			}*/
			
			$objSmarty->assign('vendor_id', $objArray['vendor_id']);

 $InsQuery = 'INSERT INTO `'.$tbl.'vendor_contact_details`(`vendor_id`,`salutation`,`vendor_contact_person_fname`,`vendor_contact_person_lname`,`mobile_no`,`mobile_no1`,`mobile_no2`,`area_code`, `area_code1`,`extension`,`extension1`,`phone_no`,`phone_no1`,`area`,`created_by`,`created_date`,`created_time`, `designation`, `mail_id`, `mail_id1`,`d_o_b`,`remarks`, `status`) VALUES("'.trim(addslashes($objArray['vendor_id'])).'","'.trim(addslashes($objArray['salutation'])).'","'.trim(addslashes($objArray['customer_fname'])).'","'.trim(addslashes($objArray['customer_lname'])).'","'.trim(addslashes($objArray['mobile_no'])).'","'.trim(addslashes($objArray['mobile_no1'])).'","'.trim(addslashes($objArray['mobile_no2'])).'","'.trim(addslashes($objArray['area_code'])).'","'.trim(addslashes($objArray['area_code1'])).'","'.trim(addslashes($objArray['extension'])).'","'.trim(addslashes($objArray['extension1'])).'","'.trim(addslashes($objArray['phone_no'])).'","'.trim(addslashes($objArray['phone_no1'])).'","'.trim(addslashes($objArray['area'])).'","'.trim(addslashes($objArray['created_by'])).'","'.trim(addslashes($objArray['created_date'])).'","'.trim(addslashes($objArray['created_time'])).'","'.trim(addslashes($objArray['designation'])).'","'.trim(addslashes($objArray['mail_id'])).'","'.trim(addslashes($objArray['mail_id1'])).'","'.trim(addslashes($objArray['d_o_b'])).'","'.trim(addslashes($objArray['remarks'])).'","1")';
$this->ExecuteQuery($InsQuery, 'insert');	 
//Success Message
header('Location:' .$_SERVER['PHP_SELF'].'?succs_msg_for_insert');
return true;
}



/****************************************************Add Address/**************************************************************************/
 
  function InsertAddress($objArray="")
 {
 global $objSmarty,$config,$_POST;
 $tbl = $config['DBPrefix'];

			if((!$objArray['address'])){
			$objSmarty->assign('ErrorMessage', 'Address should not be blank');
			return false;
			}elseif(!$objArray['area']){
			$objSmarty->assign('ErrorMessage', 'Area should not be blank');
			return false;
			}elseif(!$objArray['landmark']){ 
			$objSmarty->assign('ErrorMessage', 'Landmark should not be blank');
			return false;
			}elseif(!$objArray['city']){
			$objSmarty->assign('ErrorMessage', 'City Field should not be blank');
			return false;
			}elseif(!$objArray['pincode']){
			$objSmarty->assign('ErrorMessage', 'Pincode Field should not be blank');
			return false;
			}/*elseif(!$objArray['remark']){
			$objSmarty->assign('ErrorMessage', 'remarks Field should not be blank');
			return false;
			}*/
			$objSmarty->assign('vendor_id', $objArray['vendor_id']);
			
$InsQuery = 'INSERT INTO `'.$tbl.'vendor_address_details`(`vendor_id`,`address`,`address1`, `area`, `landmark`, `city`, `pincode`, `remarks`, `created_date`, `created_time`, `status`,`created_by`) VALUES("'.trim(addslashes($objArray['vendor_id'])).'","'.trim(addslashes($objArray['address'])).'","'.trim(addslashes($objArray['address1'])).'","'.trim(addslashes($objArray['area'])).'","'.trim(addslashes($objArray['landmark'])).'","'.trim(addslashes($objArray['city'])).'","'.trim(addslashes($objArray['pincode'])).'","'.trim(addslashes($objArray['remarks'])).'","'.trim(addslashes($objArray['created_date'])).'","'.trim(addslashes($objArray['created_time'])).'","1","'.trim(addslashes($objArray['created_by'])).'")';
$this->ExecuteQuery($InsQuery, 'insert');		 
//Success Message
header('Location:' .$_SERVER['PHP_SELF'].'?succs_msg_for_insert');
return true;
}



/**********************************************Edit Contact/*********************************************************************/ 
 function EditDetails($objArray='')
 {
global $objSmarty,$config,$_POST;
$tbl = $config['DBPrefix'];
			if(!$objArray['customer_fname']){
			$objSmarty->assign('ErrorMessage', 'Name of the Customer should not be blank');
			return false;
			}/*elseif((!$objArray['mobile_no'])){
			$objSmarty->assign('ErrorMessage', 'Mobile Number should not be blank');
			return false;
			}*/elseif(!$objArray['designation']){
			$objSmarty->assign('ErrorMessage', 'Designation should not be blank');
			return false;
			}elseif(!$objArray['mail_id']){
			$objSmarty->assign('ErrorMessage', 'Email should not be blank');
			return false;
			}/*elseif(!$objArray['area_code']){
			$objSmarty->assign('ErrorMessage', 'Area Code Field should not be blank');
			return false;
			}elseif(!$objArray['phone_no']){
			$objSmarty->assign('ErrorMessage', 'Phone No Field should not be blank');
			return false;
			}elseif(!$objArray['extension']){
			$objSmarty->assign('ErrorMessage', 'Extension Field should not be blank');
			return false;
			}*/
			
			$objSmarty->assign('vendor_id', $objArray['vendor_id']);
			

 $UpQuery = 'UPDATE '.$tbl.'vendor_contact_details SET `vendor_id` = "'.trim($objArray['v_name']).'", `salutation` = "'.trim($objArray['salutation']).'", `vendor_contact_person_fname` = "'.trim($objArray['customer_fname']).'",`vendor_contact_person_lname` = "'.trim($objArray['customer_lname']).'", `mobile_no` = "'.trim($objArray['mobile_no']).'", `mobile_no1` = "'.trim($objArray['mobile_no1']).'", `mobile_no2` = "'.trim($objArray['mobile_no2']).'",`area_code` = "'.trim($objArray['area_code']).'", `area_code1` = "'.trim($objArray['area_code1']).'",`extension` = "'.trim($objArray['extension']).'", `extension1` = "'.trim($objArray['extension1']).'",`phone_no` = "'.trim($objArray['phone_no']).'", `phone_no1` = "'.trim($objArray['phone_no1']).'",`area`="'.trim($objArray['area']).'",`created_by` = "'.trim($objArray['created_by']).'", `designation` = "'.trim($objArray['designation']).'",`mail_id` = "'.trim($objArray['mail_id']).'", `mail_id1` = "'.trim($objArray['mail_id1']).'",`area` = "'.trim($objArray['area']).'", `d_o_b` = "'.trim($objArray['d_o_b']).'", `remarks` = "'.trim($objArray['remarks']).'",`status` = "1" WHERE `sl_no` ="'.trim($objArray['sl_no']).'"';
$this->ExecuteQuery($UpQuery, 'update');
header('Location:' .$_SERVER['PHP_SELF'].'?succs_msg_for_insert'."&"."sl_no=".$_GET['sl_no']);
return true;

}


 /*************************************************Edit vendor/***************************************************************/
function EditVendor($objArray="")
 {
 global $objSmarty,$config,$_REQUEST;
$tbl = $config['DBPrefix'];

            if(!$objArray['company_name']){
			$objSmarty->assign('ErrorMessage', 'Company Name Field should not be blank');
			return false;
			}
			elseif(!$objArray['cst_no']){
			$objSmarty->assign('ErrorMessage', 'Cst No should not be blank');
			return false;
			}elseif(!$objArray['service_tax']){
			$objSmarty->assign('ErrorMessage', 'Service Tax should not be blank');
			return false;
			}
			elseif(!$objArray['tin_no']){
			$objSmarty->assign('ErrorMessage', 'Tin No Field should not be blank');
			return false;
			}
		   
			   $objSmarty->assign('vendor_id', $objArray['vendor_id']);
			if( $objArray['vendor_id']){

   $UpQuery = 'UPDATE `'.$tbl.'vendor_master` SET `vendor_id` ="'.trim($objArray['vendor_id']).'",`vendor_company_name` = "'.trim($objArray['company_name']).'",`cst_no` = "'.trim($objArray['cst_no']).'", `service_tax` = "'.trim($objArray['service_tax']).'", `tin_no` = "'.trim($objArray['tin_no']).'",`created_by` = "'.trim($objArray['created_by']).'", `created_date` ="'.trim($objArray['created_date']).'", `created_time` = "'.trim($objArray['created_time']).'",`remarks` = "'.trim($objArray['remarks']).'",`status` = "1" WHERE `vendor_id` ="'.trim($objArray['vendor_id']).'"';
   
     $this->ExecuteQuery($UpQuery, 'update');
   
header('Location:' .$_SERVER['PHP_SELF'].'?succs_msg_for_insert'."&"."vendor_id=".$_GET['vendor_id']);
					return true;
}
}


/**********************************************Edit Address/*********************************************************************/ 
 function EditAddress($objArray='')
 {
global $objSmarty,$config,$_POST;
$tbl = $config['DBPrefix'];


			if((!$objArray['address'])){
			$objSmarty->assign('ErrorMessage', 'Address should not be blank');
			return false;
			}elseif(!$objArray['area']){
			$objSmarty->assign('ErrorMessage', 'Area should not be blank');
			return false;
			}elseif(!$objArray['landmark']){
			$objSmarty->assign('ErrorMessage', 'Landark should not be blank');
			return false;
			}elseif(!$objArray['city']){
			$objSmarty->assign('ErrorMessage', 'City Field should not be blank');
			return false;
			}elseif(!$objArray['pincode']){
			$objSmarty->assign('ErrorMessage', 'Pincode Field should not be blank');
			return false;
			}/*elseif(!$objArray['remarks']){
			$objSmarty->assign('ErrorMessage', 'Remarks Field should not be blank');
			return false;
			}*/
			
			$objSmarty->assign('vendor_id', $objArray['vendor_id']);


 $UpQuery = 'UPDATE '.$tbl.'vendor_address_details SET `vendor_id` = "'.trim($objArray['vendor_id']).'",`address` = "'.trim($objArray['address']).'", `address1` = "'.trim($objArray['address1']).'", `area` = "'.trim($objArray['area']).'",`landmark` = "'.trim($objArray['landmark']).'", `city` = "'.trim($objArray['city']).'",`pincode` = "'.trim($objArray['pincode']).'", `remarks` = "'.trim($objArray['remarks']).'",`status` = "1" WHERE `sl_no` ="'.trim($objArray['sl_no']).'"';
$this->ExecuteQuery($UpQuery, 'update');

header('Location:' .$_SERVER['PHP_SELF'].'?succs_msg_for_insert'."&"."sl_no=".$_GET['sl_no']);
return true;

}

/**********************************************Edit Bank Details/*********************************************************************/ 
 function BankEdit($objArray='')
 {
global $objSmarty,$config,$_POST;
$tbl = $config['DBPrefix'];


			 if(!$objArray['account_no']){
			$objSmarty->assign('ErrorMessage', 'Account Number should not be blank');
			return false;
			}elseif(!$objArray['acc_holder']){
			$objSmarty->assign('ErrorMessage', 'Holder Name should not be blank');
			return false;
			}elseif(!$objArray['bank_name']){
			$objSmarty->assign('ErrorMessage', 'Bank Name should not be blank');
			return false;
			}elseif(!$objArray['branch']){
			$objSmarty->assign('ErrorMessage', 'Branch should not be blank');
			return false;
			}elseif(!$objArray['area']){
			$objSmarty->assign('ErrorMessage', 'Area should not be blank');
			return false;
			}elseif(!$objArray['pincode']){
			$objSmarty->assign('ErrorMessage', 'Pincode should not be blank');
			return false;
			}
			elseif(!$objArray['ifsc_code']){
			$objSmarty->assign('ErrorMessage', 'IFSC should not be blank');
			return false;
			}
			
			$objSmarty->assign('vendor_id', $objArray['vendor_id']);
			if($objArray['vendor_id'] && $objArray['vendor_id']){
			
			 $UpQuery = 'UPDATE '.$tbl.'vendor_bank_details SET `account_no` = "'.trim($objArray['account_no']).'",`account_holder_name` = "'.trim($objArray['acc_holder']).'", `bank_name` = "'.trim($objArray['bank_name']).'", `branch` = "'.trim($objArray['branch']).'",`area` = "'.trim($objArray['area']).'", `pincode` = "'.trim($objArray['pincode']).'",`ifsc_code` = "'.trim($objArray['ifsc_code']).'", `remarks` = "'.trim($objArray['remark']).'",`status` = "1" WHERE `sl_no` ="'.$_GET['sl_no'].'"';
$this->ExecuteQuery($UpQuery, 'update');

//Success Message
header('Location:' .$_SERVER['PHP_SELF'].'?succs_msg_for_update'."&"."sl_no=".$_GET['sl_no']);
return true;
 }
}
}

?>


