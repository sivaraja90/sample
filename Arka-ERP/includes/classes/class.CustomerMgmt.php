<?php

#####Class For Adding Content Management ######
class CustomerMgmt extends MysqlFns{
 /* class constructor */

 function CustomerMgmt(){
 $this->LDDisplayPath= $config['SiteGlobalPath']."class.CustomerMgmt.php";
   global $objSmarty,$config;
	$tbl = $config['DBPrefix'];
  $this->MysqlFns();
  $cust_id = base64_decode($_GET["customer_id"]);


  /**************************************Customer Id Auto Increment*********************************************************/
			$SelQuerys	= 'SELECT max(customer_id) as last FROM `'.$tbl.'customer_master` Limit 0,1';
			$CusDetail	= $this->ExecuteQuery($SelQuerys, 'select');

			if($CusDetail[0]['last']!="")
			{
			$CusDetail[0]['customer_id'] = stripslashes($CusDetail[0]['last']);
			$c_id1 = preg_replace("/[^0-9\.]/", '', $CusDetail[0]['customer_id']);
			$c_id1= $c_id1 + 1;
			$str = str_split($CusDetail[0]['last'], 3);
			$c_id = $str[0]. "" .$c_id1;
			}
			else
			{
			$c_id = "CUS1001";
			}
			$objSmarty->assign('c_id', $c_id);
 }
 /*****function InsertCustomer()****/
 /*****function ViewCustomer()******/
 /*****function ListCustomer()******/
 /*****function DateStamp()*********/
 /*****function TimeStamp()*********/
 /*****function EditCustomer()******/
 /*************************************************Insert Customer***************************************************************/
 function InsertCustomer($objArray="")
 {
 global $objSmarty,$config,$_POST;
$tbl = $config['DBPrefix'];

			if(!$objArray['company_name']){
			$objSmarty->assign('ErrorMessage', 'Company Name should not be blank');
			return false;
			}elseif(!$objArray['customer_fname']){
			$objSmarty->assign('ErrorMessage', 'Name of the Customer should not be blank');
			return false;
			}elseif(!$objArray['enquiry_through']){
			$objSmarty->assign('ErrorMessage', 'Enquiry Through should not be blank');
			return false;
			}/*elseif(!$objArray['place_type']){
			$objSmarty->assign('ErrorMessage', 'Place Type Field should not be blank');
			return false;
			}elseif(!$objArray['designation']){
			$objSmarty->assign('ErrorMessage', 'Designation should not be blank');
			return false;
			}*/elseif(!$objArray['mail_id']){
			$objSmarty->assign('ErrorMessage', 'Email should not be blank');
			return false;
			}/*elseif(!$objArray['address']){
			$objSmarty->assign('ErrorMessage', 'Address should not be blank');
			return false;
			}elseif(!$objArray['address1']){
			$objSmarty->assign('ErrorMessage', 'Address1 should not be blank');
			return false;
			}*/elseif(!$objArray['area']){
			$objSmarty->assign('ErrorMessage', 'Area Field should not be blank');
			return false;
			}elseif(!$objArray['city']){
			$objSmarty->assign('ErrorMessage', 'City Field should not be blank');
			return false;
			}/*elseif(!$objArray['pincode']){
			$objSmarty->assign('ErrorMessage', 'Pincode Field should not be blank');
			return false;
			}*/
			$objSmarty->assign('customer_id', $objArray['customer_id']);
			if($objArray['customer_id'] && $objArray['customer_fname']){

$InsQuery = 'INSERT INTO '.$tbl.'customer_master(`customer_id`,`company_name`,`created_by`,`created_date`,`created_time`,`enquiry_through`,`reference`,`place_type`,`status`) VALUES("'.trim(addslashes($objArray['customer_id'])).'","'.trim(addslashes($objArray['company_name'])).'","'.trim(addslashes($objArray['created_by'])).'","'.trim(addslashes($objArray['created_date'])).'","'.trim(addslashes($objArray['created_time'])).'","'.trim(addslashes($objArray['enquiry_through'])).'","'.trim(addslashes($objArray['reference'])).'","'.trim(addslashes($objArray['place_type'])).'","1")';
$this->ExecuteQuery($InsQuery, 'insert');

$InsQuery2 = 'INSERT INTO '.$tbl.'customer_contact_details(`customer_id`,`salutation`,`first_name`,`last_name`,`mobile_no`,`mobile_no1`,`mobile_no2`,`area_code`, `area_code1`,`extension`,`extension1`,`phone_no`,`phone_no1`,`created_by`,`created_date`,`created_time`, `designation`, `mail_id`, `mail_id1`,`area`,`d_o_b`,`remarks`, `status`) VALUES("'.trim(addslashes($objArray['customer_id'])).'","'.trim(addslashes($objArray['salutation'])).'","'.trim(addslashes($objArray['customer_fname'])).'","'.trim(addslashes($objArray['customer_lname'])).'","'.trim(addslashes($objArray['mobile_no'])).'","'.trim(addslashes($objArray['mobile_no1'])).'","'.trim(addslashes($objArray['mobile_no2'])).'","'.trim(addslashes($objArray['area_code'])).'","'.trim(addslashes($objArray['area_code1'])).'","'.trim(addslashes($objArray['extension'])).'","'.trim(addslashes($objArray['extension1'])).'","'.trim(addslashes($objArray['phone_no'])).'","'.trim(addslashes($objArray['phone_no1'])).'","'.trim(addslashes($objArray['created_by'])).'","'.trim(addslashes($objArray['created_date'])).'","'.trim(addslashes($objArray['created_time'])).'","'.trim(addslashes($objArray['designation'])).'","'.trim(addslashes($objArray['mail_id'])).'","'.trim(addslashes($objArray['mail_id1'])).'","'.trim(addslashes($objArray['area'])).'","'.trim(addslashes($objArray['d_o_b'])).'","'.trim(addslashes($objArray['remarks'])).'","1")';
$this->ExecuteQuery($InsQuery2, 'insert');

$InsQuery3 = 'INSERT INTO '.$tbl.'customer_address_details(`customer_id`,`address`,`address1`, `area`, `landmark`, `city`, `pincode`, `remarks`, `created_date`, `created_time`, `status`,`created_by`) VALUES("'.trim(addslashes($objArray['customer_id'])).'","'.trim(addslashes($objArray['address'])).'","'.trim(addslashes($objArray['address1'])).'","'.trim(addslashes($objArray['area'])).'","'.trim(addslashes($objArray['landmark'])).'","'.trim(addslashes($objArray['city'])).'","'.trim(addslashes($objArray['pincode'])).'","'.trim(addslashes($objArray['remarks'])).'","'.trim(addslashes($objArray['created_date'])).'","'.trim(addslashes($objArray['created_time'])).'","1","'.trim(addslashes($objArray['created_by'])).'")';
$this->ExecuteQuery($InsQuery3, 'insert');
//Success Message
header('Location:' .$_SERVER['PHP_SELF'].'?succs_msg_for_insert');
return true;
 }
}
/*************************************************Detail Customer***************************************************************/
/*************************************************View Customer***************************************************************/
function ViewCustomer($objArray)
 {
		$cust_id = base64_decode($_GET["customer_id"]);
 		 global $objSmarty,$config;
		$tbl = $config['DBPrefix'];
			$SelQuery = 'SELECT * FROM `'.$tbl.'customer_master` WHERE customer_id="'.$cust_id.'"';
			$ListView = $this->ExecuteQuery($SelQuery, "select");
			$objSmarty->assign('Master', $ListView);
			return $Master;

 }
 /**********************************************List Contact*********************************************************************/
 function ListContact($objArray='')
 {
 			$cust_id = base64_decode($_GET["customer_id"]);
			global $objSmarty,$config;
			$tbl = $config['DBPrefix'];
			$SelQuery = 'SELECT * FROM `'.$tbl.'customer_contact_details` WHERE customer_id="'.$cust_id.'" ';
			$ViewContact = $this->ExecuteQuery($SelQuery, "select");
			$objSmarty->assign('ViewContact', $ViewContact);
			return $ViewContact;

 }
/**********************************************List Address*********************************************************************/
 function ListAddress($objArray)
 {		$cust_id = base64_decode($_GET["customer_id"]);
 		 global $objSmarty,$config;
		 $tbl = $config['DBPrefix'];
			$SelQuery = 'SELECT * FROM `'.$tbl.'customer_address_details` WHERE  customer_id="'.$cust_id.'"';
			$Address = $this->ExecuteQuery($SelQuery, "select");
			$objSmarty->assign('Address', $Address);
			return $Address;
 }

/*************************************************List Enquiry***************************************************************/
function ViewEnquiry($objArray)
 {
      $cust_id = base64_decode($_GET["customer_id"]);
 		 global $objSmarty,$config;
		$tbl = $config['DBPrefix'];
			$SelQuery = 'SELECT * FROM `'.$tbl.'enquriy_master` WHERE customer_id="'.$cust_id.'"';
			$EnqMaster = $this->ExecuteQuery($SelQuery, "select");
			$objSmarty->assign('EnqMaster', $EnqMaster);
			return $EnqMaster;

 }
 /*************************************************List Sales***************************************************************/
function ViewSales($objArray)
 {
     $cust_id = base64_decode($_GET["customer_id"]);
 		 global $objSmarty,$config;
		$tbl = $config['DBPrefix'];
			$SelQuery = 'SELECT * FROM `'.$tbl.'sales_master` WHERE customer_id="'.$cust_id.'"';
			$SalMaster = $this->ExecuteQuery($SelQuery, "select");
			$objSmarty->assign('SalMaster', $SalMaster);
			return $SalMaster;

 }
 /*************************************************List Mail***************************************************************/
function ViewMail($objArray)
 {
     $cust_id = base64_decode($_GET["customer_id"]);
 		 global $objSmarty,$config;
		$tbl = $config['DBPrefix'];
		 $SelQuery1 = 'SELECT * FROM '.$tbl.'enquriy_master WHERE customer_id="'.$cust_id.'"';
			$EnqMaster = $this->ExecuteQuery($SelQuery1, "select");
			$objSmarty->assign('EnqMaster', $EnqMaster);
			//print_r($EnqMaster);exit;

			$SelQuery = 'SELECT '.$tbl.'sales_order_mail.*,'.$tbl.'service_order_mail.*,'.$tbl.'project_order_mail.*,'.$tbl.'enquiry_mail.* FROM '.$tbl.'enquiry_mail,
			'.$tbl.'sales_order_mail,'.$tbl.'service_order_mail,'.$tbl.'project_order_mail WHERE '.$tbl.'enquiry_mail.enquiry_id = "'.$EnqMaster[0]['enquiry_id'].'"
			AND '.$tbl.'enquiry_mail.enquiry_id='.$tbl.'sales_order_mail.enquiry_id='.$tbl.'service_order_mail.enquiry_id='.$tbl.'project_order_mail.enquiry_id';
			$overAllMaster = $this->ExecuteQuery($SelQuery, "select");
			$objSmarty->assign('overAllMaster', $overAllMaster);
			return $overAllMaster;



 }

 /*************************************************List Service***************************************************************/
function ViewService($objArray)
 {
     $cust_id = base64_decode($_GET["customer_id"]);
 		 global $objSmarty,$config;
		$tbl = $config['DBPrefix'];
			$SelQuery = 'SELECT * FROM `'.$tbl.'service_master` WHERE customer_id="'.$cust_id.'"';
			$SerMaster = $this->ExecuteQuery($SelQuery, "select");
			$objSmarty->assign('SerMaster', $SerMaster);
			return $SerMaster;

 }
  /*************************************************View Project***************************************************************/
function ViewProject($objArray)
 {
       $cust_id = base64_decode($_GET["customer_id"]);
 		 global $objSmarty,$config;
		$tbl = $config['DBPrefix'];
			$SelQuery = 'SELECT * FROM `'.$tbl.'project_master` WHERE customer_id="'.$cust_id.'"';
			$ProMaster = $this->ExecuteQuery($SelQuery, "select");
			$objSmarty->assign('ProMaster', $ProMaster);
			return $ProMaster;

 }
/*************************************************View Edit Customer***************************************************************/
function ViewEdit($objArray)
 {
 	 $cust_id = base64_decode($_GET["customer_id"]);
// echo $cust_id;exit;
 		 global $objSmarty,$config;
			$tbl = $config['DBPrefix'];
			$SelQuery = 'SELECT * FROM `'.$tbl.'customer_master` WHERE customer_id="'.$cust_id.'"';
			$ListView = $this->ExecuteQuery($SelQuery, "select");
			$objSmarty->assign('ListView', $ListView);
			return $ListView;

 }
 /************************************************View FollowUp******************************************************************/
 function ViewFollow($objArray)
 {
 		 global $objSmarty,$config;
			$tbl = $config['DBPrefix'];
			$SelQuery5 = 'SELECT * FROM `'.$tbl.'enquiry_followup` WHERE enquiry_id="'.$_GET['enquiry_id'].'"';
			$ListView3 = $this->ExecuteQuery($SelQuery5, "select");
			$objSmarty->assign('ListView3', $ListView3);
			return $ListView3;

 }
 /*************************************************List Customer ***************************************************************/

 function ListCustomer()
 {
 		 global $objSmarty,$config;
$tbl = $config['DBPrefix'];
			 $SelQuery = 'SELECT '.$tbl.'customer_master.*, '.$tbl.'customer_contact_details.customer_id,'.$tbl.'customer_contact_details.mobile_no,'.$tbl.'customer_contact_details.phone_no,'.$tbl.'customer_contact_details.area_code,'.$tbl.'customer_contact_details.extension,'.$tbl.'customer_contact_details.area,'.$tbl.'customer_contact_details.mail_id  FROM `'.$tbl.'customer_master`, `'.$tbl.'customer_contact_details` WHERE '.$tbl.'customer_master.customer_id='.$tbl.'customer_contact_details.customer_id GROUP BY '.$tbl.'customer_master.customer_id ORDER BY '.$tbl.'customer_master.customer_id DESC';
			$ListView = $this->ExecuteQuery($SelQuery, "select");
			//print_r($ListView);exit;
			$objSmarty->assign('ListView', $ListView);
			return $ListView;

 }

  /**********************************************Delete Contact*********************************************************************/
 function DeleteMaster($CatIdent)
 {
 		 global $objSmarty,$config;
			$tbl = $config['DBPrefix'];
			$DelQuery = 'update `'.$tbl.'customer_master` set `status` = 0 WHERE `customer_id` ="'.$CatIdent.'"';
			$this->ExecuteQuery($DelQuery, 'update');
            header('Location:' .$_SERVER['PHP_SELF'].'?succs_msg_for_del');

 }
 /**********************************************Retrive Contact*********************************************************************/
  function RetriveMaster($CatIdent,$CatIdent1)
 {
 		 global $objSmarty,$config;
			$tbl = $config['DBPrefix'];
			echo $UpQuery = 'update `'.$tbl.'customer_master` set `status` = 1 WHERE `customer_id` ="'.$CatIdent.'" AND sl_no="'.$CatIdent1.'"';
			$this->ExecuteQuery($UpQuery, 'update');
            header('Location:' .$_SERVER['PHP_SELF'].'?succs_msg_for_ret');

 }

 /****************************************************Time Stamp Value As Date And Time Form Master****************************************/

  function DateStamp()
 {
 		 global $objSmarty,$config;
$tbl = $config['DBPrefix'];
			 $SelQuery = 'SELECT Date(timestamp_values) as Date from '.$tbl.'customer_master WHERE customer_id="'.$_GET['customer_id'].'"';
			 $Date_Stamp = $this->ExecuteQuery($SelQuery, "select");
			  //print $Date;
			 $objSmarty->assign('Date_Stamp', $Date_Stamp);
			 return $Date_Stamp;

}

  function TimeStamp()
  {
   global $objSmarty,$config;
$tbl = $config['DBPrefix'];
			 $SelQuery1 = 'SELECT  Time(timestamp_values) as Time from '.$tbl.'customer_master WHERE customer_id="'.$_GET['customer_id'].'"';
			 $Time_Stamp = $this->ExecuteQuery($SelQuery1, "select");
			 $objSmarty->assign('Time_Stamp', $Time_Stamp);
			 return $Time_Stamp;


 }
  /****************************************************Place Type And Enquiry Through Values****************************************/

 function placetype()
{
 global $objSmarty,$config;
$tbl = $config['DBPrefix'];
			 $SelEnq = 'SELECT * from '.$tbl.'place_type WHERE status="1"';
			 $cusreg = $this->ExecuteQuery($SelEnq, "select");
			 $objSmarty->assign('cusreg', $cusreg);
			// return $Time_Stamp;

}
function Enquirythrough()
{
 global $objSmarty,$config;
$tbl = $config['DBPrefix'];
			 $SelEnq = 'SELECT * from '.$tbl.'enquiry_through WHERE status="1"';
			 $EnqThru = $this->ExecuteQuery($SelEnq, "select");
			 $objSmarty->assign('EnqThru', $EnqThru);
			// return $Time_Stamp;

}
/****************************************company name exists*************************/
function Ajax_Validate_Existing_Cmp()
{
  global $objSmarty,$config;
  $tbl = $config['DBPrefix'];
  $SelQuery		= 'SELECT * FROM `'.$tbl.'customer_master` WHERE `company_name`="'.$_GET['name'].'"';

  $CmpDetail		= $this->ExecuteQuery($SelQuery, 'select');
  if(!empty($CmpDetail) && is_array($CmpDetail))
  {
  echo "Company Details Exists";
  return false;
  }
}
 /*************************************************Edit Customer***************************************************************/
function EditCustomer($objArray="")
 {
 global $objSmarty,$_config,$_REQUEST,$_POST;
  global $objSmarty,$config ;
  $tbl = $config['DBPrefix'];

			if(!$objArray['enquiry_through']){
			$objSmarty->assign('ErrorMessage', 'Enquiry Through should not be blank');
			return false;
			}elseif(!$objArray['place_type']){
			$objSmarty->assign('ErrorMessage', 'Place Type Field should not be blank');
			return false;
			}elseif(!$objArray['company_name']){
			$objSmarty->assign('ErrorMessage', 'Company Name Field should not be blank');
			return false;
			/*}elseif(!$objArray['tin_no']){
			$objSmarty->assign('ErrorMessage', 'Tin No Field should not be blank');
			return false;
			}elseif(!$objArray['cst_no']){
			$objSmarty->assign('ErrorMessage', 'Cst No Field should not be blank');
			return false;
			}elseif(!$objArray['service_tax_no']){
			$objSmarty->assign('ErrorMessage', 'Service Tax No Field should not be blank');
			return false;*/

			}
			$objSmarty->assign('customer_id', $objArray['customer_id']);
			if($objArray['customer_id'] && $objArray['company_name']){

$UpQuery = 'UPDATE `'.$tbl.'customer_master` SET `customer_id` = "'.trim($objArray['customer_id']).'", `company_name` = "'.trim($objArray['company_name']).'", `created_by` = "'.trim($objArray['created_by']).'",`enquiry_through` = "'.trim($objArray['enquiry_through']).'", `reference` = "'.trim($objArray['reference']).'", `place_type` = "'.trim($objArray['place_type']).'",`status` = "1" WHERE `customer_id` ="'.trim($objArray['customer_id']).'"';
$this->ExecuteQuery($UpQuery, 'update');

/*$UpQuery1 = 'UPDATE `'.$tbl.'customer_contact_details` SET `customer_id` = "'.trim($objArray['customer_id']).'", `company_name` = "'.trim($objArray['company_name']).'", `created_by` = "'.trim($objArray['created_by']).'",`enquiry_through` = "'.trim($objArray['enquiry_through']).'", `reference` = "'.trim($objArray['reference']).'", `place_type` = "'.trim($objArray['place_type']).'", `remarks` = "'.trim($objArray['remarks']).'",`status` = "1" WHERE `customer_id` ="'.trim($objArray['customer_id']).'"';
$this->ExecuteQuery($UpQuery1, 'update');

$UpQuery2 = 'UPDATE `'.$tbl.'customer_address_details` SET `customer_id` = "'.trim($objArray['customer_id']).'", `company_name` = "'.trim($objArray['company_name']).'", `created_by` = "'.trim($objArray['created_by']).'",`enquiry_through` = "'.trim($objArray['enquiry_through']).'", `reference` = "'.trim($objArray['reference']).'", `place_type` = "'.trim($objArray['place_type']).'", `remarks` = "'.trim($objArray['remarks']).'",`status` = "1" WHERE `customer_id` ="'.trim($objArray['customer_id']).'"';
$this->ExecuteQuery($UpQuery2, 'update');*/
header('Location:' .$_SERVER['PHP_SELF'].'?succs_msg_for_insert'."&"."customer_id=".$_GET['customer_id']);
return true;
}
}

/**************************************************Add Contact*************************************************************/
 function InsertContact($objArray="")
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
			}elseif(!$objArray['area_code']){
			$objSmarty->assign('ErrorMessage', 'Area Code Field should not be blank');
			return false;
			}/*elseif(!$objArray['phone_no']){
			$objSmarty->assign('ErrorMessage', 'Phone No Field should not be blank');
			return false;
			}elseif(!$objArray['area']){
			$objSmarty->assign('ErrorMessage', 'Area Field should not be blank');
			return false;
			}
			elseif(!$objArray['extension']){
			$objSmarty->assign('ErrorMessage', 'Extension Field should not be blank');
			return false;
			}*/

			$objSmarty->assign('customer_id', $objArray['customer_id']);



 $InsQuery = 'INSERT INTO `'.$tbl.'customer_contact_details`(`customer_id`,`salutation`,`first_name`,`last_name`,`mobile_no`,`mobile_no1`,`mobile_no2`,`area_code`, `area_code1`,`extension`,`extension1`,`phone_no`,`phone_no1`,`created_by`,`created_date`,`created_time`, `designation`, `mail_id`, `mail_id1`,`area`,`d_o_b`,`remarks`, `status`) VALUES("'.trim(addslashes($objArray['customer_id'])).'","'.trim(addslashes($objArray['salutation'])).'","'.trim(addslashes($objArray['customer_fname'])).'","'.trim(addslashes($objArray['customer_lname'])).'","'.trim(addslashes($objArray['mobile_no'])).'","'.trim(addslashes($objArray['mobile_no1'])).'","'.trim(addslashes($objArray['mobile_no2'])).'","'.trim(addslashes($objArray['area_code'])).'","'.trim(addslashes($objArray['area_code1'])).'","'.trim(addslashes($objArray['extension'])).'","'.trim(addslashes($objArray['extension1'])).'","'.trim(addslashes($objArray['phone_no'])).'","'.trim(addslashes($objArray['phone_no1'])).'","'.trim(addslashes($objArray['created_by'])).'","'.trim(addslashes($objArray['created_date'])).'","'.trim(addslashes($objArray['created_time'])).'","'.trim(addslashes($objArray['designation'])).'","'.trim(addslashes($objArray['mail_id'])).'","'.trim(addslashes($objArray['mail_id1'])).'","'.trim(addslashes($objArray['area'])).'","'.trim(addslashes($objArray['d_o_b'])).'","'.trim(addslashes($objArray['remarks'])).'","1")';
$this->ExecuteQuery($InsQuery, 'insert');
//Success Message
header('Location:' .$_SERVER['PHP_SELF'].'?succs_msg_for_insert');
return true;
}
 /****************************************************Add Address**************************************************************************/

  function InsertAddress($objArray="")
 {
 global $objSmarty,$_POST,$config;
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
			}/*elseif(!$objArray['remarks']){
			$objSmarty->assign('ErrorMessage', 'Remarks Field should not be blank');
			return false;
			}*/
			$objSmarty->assign('customer_id', $objArray['customer_id']);
$InsQuery = 'INSERT INTO `'.$tbl.'customer_address_details`(`customer_id`,`address`,`address1`, `area`, `landmark`, `city`, `pincode`, `remarks`, `created_date`, `created_time`, `status`,`created_by`) VALUES("'.trim(addslashes($objArray['customer_id'])).'","'.trim(addslashes($objArray['address'])).'","'.trim(addslashes($objArray['address1'])).'","'.trim(addslashes($objArray['area'])).'","'.trim(addslashes($objArray['landmark'])).'","'.trim(addslashes($objArray['city'])).'","'.trim(addslashes($objArray['pincode'])).'","'.trim(addslashes($objArray['remarks'])).'","'.trim(addslashes($objArray['created_date'])).'","'.trim(addslashes($objArray['created_time'])).'","1","'.trim(addslashes($objArray['created_by'])).'")';
$this->ExecuteQuery($InsQuery, 'insert');
//Success Message
header('Location:' .$_SERVER['PHP_SELF'].'?succs_msg_for_insert');
return true;
}


/**************************************************Edit Contact*************************************************************/
 function EditCustomerDetails($objArray="")
 {
 global $objSmarty,$config,$_POST;
 $tbl = $config['DBPrefix'];

			if(!$objArray['customer_fname']){
			$objSmarty->assign('ErrorMessage', 'Name of the Customer should not be blank');
			return false;
			}elseif((!$objArray['mobile_no'])){
			$objSmarty->assign('ErrorMessage', 'Mobile Number should not be blank');
			return false;
			}elseif(!$objArray['designation']){
			$objSmarty->assign('ErrorMessage', 'Designation should not be blank');
			return false;
			}elseif(!$objArray['mail_id']){
			$objSmarty->assign('ErrorMessage', 'Email should not be blank');
			return false;
			}elseif(!$objArray['area']){
			$objSmarty->assign('ErrorMessage', 'Area Field should not be blank');
			return false;
			}
			$objSmarty->assign('customer_id', $objArray['customer_id']);


 $UpQuery = 'UPDATE `'.$tbl.'customer_contact_details` SET `customer_id` = "'.trim($objArray['customer_id']).'", `salutation` = "'.trim($objArray['salutation']).'", `first_name` = "'.trim($objArray['customer_fname']).'",`last_name` = "'.trim($objArray['customer_lname']).'", `mobile_no` = "'.trim($objArray['mobile_no']).'", `mobile_no1` ="'.trim($objArray['mobile_no1']).'", `mobile_no2` = "'.trim($objArray['mobile_no2']).'",`area_code` = "'.trim($objArray['area_code']).'", `area_code1` = "'.trim($objArray['area_code1']).'", `extension` = "'.trim($objArray['extension']).'", `extension1` = "'.trim($objArray['extension1']).'", `phone_no` = "'.trim($objArray['phone_no']).'",`phone_no1` = "'.trim($objArray['phone_no1']).'", `designation` = "'.trim($objArray['designation']).'",`mail_id` = "'.trim($objArray['mail_id']).'",`mail_id1` = "'.trim($objArray['mail_id1']).'",`area` = "'.trim($objArray['area']).'",`d_o_b` = "'.trim($objArray['d_o_b']).'",`created_time` = "'.trim($objArray['created_time']).'",`created_date` = "'.trim($objArray['created_date']).'",`timestamp_values` = "'.trim($objArray['timestamp']).'",`created_by` = "'.trim($objArray['created_by']).'",`remarks` = "'.trim($objArray['remarks']).'",`status` = "1" WHERE `sl_no` ="'.$_GET['sl_no'].'"';
$this->ExecuteQuery($UpQuery, 'update');

header('Location:' .$_SERVER['PHP_SELF'].'?succs_msg_for_insert'."&"."sl_no=".$_GET['sl_no']);
return true;
}
   /**********************************************Edit Customer Contact*********************************************************************/
 function EditCustomerContact($objArray='')
 {

			global $objSmarty,$config;
			$tbl = $config['DBPrefix'];
			$SelQuery = 'SELECT * FROM `'.$tbl.'customer_contact_details` WHERE status = "1" AND sl_no="'.$_GET["sl_no"].'"';
			$ViewContact2 = $this->ExecuteQuery($SelQuery, "select");
			$objSmarty->assign('ViewContact2', $ViewContact2);
			return $ViewContact2;
			//header('Location:' .$_SERVER['PHP_SELF'].'?succs_msg_for_insert');

 }
/**********************************************Edit Address*********************************************************************/
 function EditAddress1($objArray='')
 {
  global $objSmarty,$_config,$_POST;
  global $objSmarty,$config;
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

			$objSmarty->assign('customer_id', $objArray['customer_id']);



 $UpQuery = 'UPDATE `'.$tbl.'customer_address_details` SET `customer_id` = "'.trim($objArray['customer_id']).'",`address` = "'.trim($objArray['address']).'", `address1` = "'.trim($objArray['address1']).'", `area` = "'.trim($objArray['area']).'",`landmark` = "'.trim($objArray['landmark']).'", `city` = "'.trim($objArray['city']).'",`pincode` = "'.trim($objArray['pincode']).'", `remarks` = "'.trim($objArray['remarks']).'",`status` = "1" WHERE `sl_no` ="'.trim($objArray['sNo']).'"';
$this->ExecuteQuery($UpQuery, 'update');

header('Location:' .$_SERVER['PHP_SELF'].'?succs_msg_for_insert'."&"."sl_no=".$_GET['sl_no']);
return true;

}
/**********************************************Edit Address*********************************************************************/
 function EditAddressdetail($objArray='')
 {
			global $objSmarty,$config;
			$tbl = $config['DBPrefix'];
			$SelQuery = 'SELECT * FROM `'.$tbl.'customer_address_details` WHERE status = "1" AND sl_no="'.$_GET['sl_no'].'" ';
			$ViewContact = $this->ExecuteQuery($SelQuery, "select");
			$objSmarty->assign('ViewContact', $ViewContact);
			return $ViewContact;
			header('Location:' .$_SERVER['PHP_SELF'].'?succs_msg_for_insert');

 }

 /**********************************************Edit// Contact*********************************************************************/
 function EditContact($objArray='')
 {
			global $objSmarty,$config;
			$tbl = $config['DBPrefix'];
			$SelQuery = 'SELECT * FROM `'.$tbl.'enquriy_followup` WHERE status = "1" AND sl_no="'.$_GET["sl_no"].'"';
			 /*$SelQuery = 'SELECT * FROM `'.$tbl.'customer_contact_details`,`'.$tbl.'enquriy_followup` WHERE '.$tbl.'customer_contact_details.customer_id='.$tbl.'enquriy_followup.customer_id AND '.$tbl.'customer_contact_details.customer_id="'.$_GET["customer_id"].'"';*/
			$ViewContact = $this->ExecuteQuery($SelQuery, "select");
			$objSmarty->assign('ViewContact', $ViewContact);
			return $ViewContact;
			//header('Location:' .$_SERVER['PHP_SELF'].'?succs_msg_for_insert');

 }


 /**********************************************Delete & Retrive Contact*********************************************************************/
 function DeleteContact($CatIdent,$CusIdent)
 {
 		 global $objSmarty,$config;
		 $tbl = $config['DBPrefix'];
			 $DelQuery = 'update `'.$tbl.'customer_contact_details` set `status` = 0 WHERE `sl_no` ="'.$CatIdent.'"';
			$this->ExecuteQuery($DelQuery, 'update');
           header('Location:' .$_SERVER['PHP_SELF'].'?succs_msg_for_det'."&"."customer_id=".$_GET['customer_id']);
 }
  function RetriveMaster1($Slno,$Cus1)
 {
 		 global $objSmarty,$config;
		$tbl = $config['DBPrefix'];
		$cust_id = base64_decode($_GET["customer_id"]);
			$UpQuery = 'update `'.$tbl.'customer_contact_details` set `status` = 1 WHERE sl_no="'.$Slno.'" AND `customer_id` ="'.$cust_id.'"';
			$this->ExecuteQuery($UpQuery, 'update');
            header('Location:' .$_SERVER['PHP_SELF'].'?succs_msg_for_ret'."&"."customer_id=".$_GET['customer_id']);
 }
 /********************************************Delete & Retrive Address ***************************/
 function DeleteAddress($ConIdent1,$CusIdent1)
 {
 		 global $objSmarty,$config;
		 $tbl = $config['DBPrefix'];
		 //$cust_id = base64_decode($_GET["customer_id"]);
			 $DelQuery1= 'update `'.$tbl.'customer_address_details` set `status` = 0 WHERE `sl_no` ="'.$ConIdent1.'"';
			$this->ExecuteQuery($DelQuery1, 'update');
           header('Location:' .$_SERVER['PHP_SELF'].'?succs_msg_for_det1'."&"."customer_id=".$_GET['customer_id']);
 }
  function RetriveMaster2($x,$y)
 {
 		 global $objSmarty,$config;
			$tbl = $config['DBPrefix'];
			$cust_id = base64_decode($_GET["customer_id"]);
			$UpQuery1 = 'update `'.$tbl.'customer_address_details` set `status` = 1 WHERE sl_no="'.$x.'" AND `customer_id` ="'.$cust_id.'"';
			$this->ExecuteQuery($UpQuery1, 'update');
            header('Location:' .$_SERVER['PHP_SELF'].'?succs_msg_for_ret1'."&"."customer_id=".$_GET['customer_id']);
 }
 /**********************************************Edit //Contact*********************************************************************/
 function EditDetails($objArray='')
 {
  global $objSmarty,$_config,$_POST;
  global $objSmarty,$config;
  $tbl = $config['DBPrefix'];
			if(!$objArray['enquiry_id']){
			$objSmarty->assign('ErrorMessage', 'enquiry_id should not be blank');
			return false;
			}elseif(isset($objArray['enquiry_status']))
			{

			if($objArray['enquiry_status'] == "Pending")
				{
					if(!$objArray['snooze_hours']){
						$objSmarty->assign('ErrorMessage', 'Snooze Hour should not be blank');
						return false;
					   }elseif(!$objArray['snooze_minutes']){
						$objSmarty->assign('ErrorMessage', 'Snooze Minute should not be blank');
						return false;
					   }elseif(!$objArray['snooze_seconds']){
						$objSmarty->assign('ErrorMessage', 'Snooze Seconds should not be blank');
						return false;
					   }elseif(!$objArray['snooze_date']){
						$objSmarty->assign('ErrorMessage', 'Snooze Date should not be blank');
						return false;
						}
					  $st = $objArray['snooze_hours'].":".$objArray['snooze_minutes'].":".$objArray['snooze_seconds'];

					  $ct = "NA";

			 }
			 else
			 {
					  if(!$objArray['closed_hours']){
						$objSmarty->assign('ErrorMessage', 'Closed Hours should not be blank');
						return false;
					   }elseif(!$objArray['closed_minutes']){
						$objSmarty->assign('ErrorMessage', 'Closed Minutes should not be blank');
						return false;
					   }elseif(!$objArray['closed_seconds']){
						$objSmarty->assign('ErrorMessage', 'Closed Seconds should not be blank');
						return false;
					   }elseif(!$objArray['closed_date']){
						$objSmarty->assign('ErrorMessage', 'Closed Date should not be blank');
						return false;
					   }
					  $ct = $objArray['closed_hours'].":".$objArray['closed_minutes'].":".$objArray['closed_seconds'];
			 		$st = "NA";
			 }
			 }elseif(!$objArray['po_date']){
			$objSmarty->assign('ErrorMessage', 'po_date should not be blank');
			return false;
			}elseif(!$objArray['po_no']){
			$objSmarty->assign('ErrorMessage', 'po_no should not be blank');
			return false;
			}
			$objSmarty->assign('customer_id', $objArray['customer_id']);


 $UpQuery = 'UPDATE `'.$tbl.'enquriy_followup` SET `enquiry_id` = "'.trim($objArray['enquiry_id']).'", `enquiry_status` = "'.trim($objArray['enquiry_status']).'", `snooze_date` = "'.trim($objArray['snooze_date']).'",`snooze_time` = "'.$st.'", `closed_date` = "'.trim($objArray['closed_date']).'", `closed_time` = "'.$ct.'", `po_date` = "'.trim($objArray['po_date']).'",`po_no` = "'.trim($objArray['po_no']).'", `created_date` = "'.trim($objArray['created_date']).'",`created_time` = "'.trim($objArray['created_time']).'", `timestamp_value` = "'.trim($objArray['timestamp']).'",`created_by` = "'.trim($objArray['created_by']).'",`remarks` = "'.trim($objArray['remarks']).'",`status` = "1" WHERE `enquiry_id` ="'.trim($objArray['enquiry_id']).'"';
$this->ExecuteQuery($UpQuery, 'update');

header('Location:' .$_SERVER['PHP_SELF'].'?succs_msg_for_insert'."&"."sl_no=".$_GET['sl_no']);
return true;

}
 /**********************************************edit// followup *********************************************************************/

  function EditContactdetail($objArray='')
 {
			global $objSmarty,$config;
			$tbl = $config['DBPrefix'];
			$SelQuery = 'SELECT * FROM `'.$tbl.'enquriy_followup` WHERE status = "1" AND sl_no="'.$_GET['sl_no'].'" ';
			$ViewContact = $this->ExecuteQuery($SelQuery, "select");
			$objSmarty->assign('ViewContact', $ViewContact);
			return $ViewContact;
			header('Location:' .$_SERVER['PHP_SELF'].'?succs_msg_for_insert');

 }
 /**********************************************List// Address*********************************************************************/
  function ListAddress1($objArray='')
 {
			global $objSmarty,$config;
			$tbl = $config['DBPrefix'];
			$SelQuery = 'SELECT * FROM `'.$tbl.'customer_address_details` WHERE status = "1" AND customer_id="'.$_GET['customer_id'].'" ';
			$ViewContact1 = $this->ExecuteQuery($SelQuery, "select");
			$objSmarty->assign('ViewContact1', $ViewContact1);
			return $ViewContact1;

 }

}
?>
