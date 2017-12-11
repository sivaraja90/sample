<?php
#####Class For Adding Content Management ######
class QuoteReg extends MysqlFns{
 
 /* class constructor */
 function QuoteReg(){
 $this->LDDisplayPath= $config['SiteGlobalPath']."class.QuoteReg.php";
  global $config;
global $objSmarty, $config;
$tbl = $config['DBPrefix'];
 
  $this->MysqlFns();
  $this->Limit = 20;
  $quot_id = base64_decode($_GET["quote_id"]);
   /**************************************User Id Auto Increment*********************************************************/
  			$SelQuerys	= 'SELECT max(quote_id) as last FROM `'.$tbl.'quote_request_master`  Limit 0,1';
			$QODetail	= $this->ExecuteQuery($SelQuerys, 'select');
			if($QODetail[0]['last']!="")
			{
			$QODetail[0]['quote_id'] = stripslashes($QODetail[0]['last']);
			$qo_id1 = preg_replace("/[^0-9\.]/", '', $QODetail[0]['quote_id']);
			
			$qo_id1= $qo_id1 + 1;
			$str = str_split($QODetail[0]['last'], 2);
			$qo_id = $str[0]. "" .$qo_id1;
			}
			else
			{
			$qo_id = "QO1001";
			}
			$objSmarty->assign('qo_id', $qo_id);
			/*******************************Auto Suggest For Company Name**********************************************************************/			
			$f1 = "vendor_company1.txt";
			$uploadpath = $config['QuotePath'];
			$myfile = fopen($f1, "w") or die("Unable to open file!");
			$SelQuery1	= 'SELECT DISTINCT vendor_company_name FROM `'.$tbl.'vendor_master` WHERE status="1"';
			$CusList	= $this->ExecuteQuery($SelQuery1, 'select');
			
			if(!empty($CusList) && is_array($CusList))
			foreach($CusList as $key=>$value)
			{
			$CusList[$key]['CName'] = stripslashes($CusList[$key]['vendor_company_name']);
			$names = $names.$CusList[$key]['CName'].",";
			}
			fwrite($myfile, $names);
			fclose($myfile);
			
			
 }
 
 /**********************************************Insert Quote/**************************************************************/
function InsertQuote($objArray="")
 {
global $objSmarty,$config,$_POST;
$tbl = $config['DBPrefix'];
  if($this->ChkDupliQo(trim(addslashes($objArray['quote_id'])))){
if(!$objArray['quote_date']){
			$objSmarty->assign('ErrorMessage', 'Quote Date should not be blank');
			return false;
			}elseif(!$objArray['enquiry_refference_id']){
			$objSmarty->assign('ErrorMessage', 'Enquiry refer Id should not be blank');
			return false;
			}elseif(!$objArray['supplier_code']){
			$objSmarty->assign('ErrorMessage', 'Supplier Code should not be blank');
			return false;
			}elseif(!$objArray['supplier_company_name']){
			$objSmarty->assign('ErrorMessage', 'Suplier Company should not be blank');
			return false;
			}elseif(!$objArray['contact_person']){
			$objSmarty->assign('ErrorMessage', 'Contact Name should not be blank');
			return false;
			}elseif((!$objArray['mobile_no']) && (!$objArray['phone_no'])){
			$objSmarty->assign('ErrorMessage', 'Mobile No or Phone No should not be blank');
			return false;
			}elseif(!$objArray['address']){
			$objSmarty->assign('ErrorMessage', 'Address should not be blank');
			return false;
			}elseif(!$objArray['area']){
			$objSmarty->assign('ErrorMessage', 'Area should not be blank');
			return false;
			}elseif(!$objArray['pincode']){
			$objSmarty->assign('ErrorMessage', 'Pincode should not be blank');
			return false;
			}elseif(!$objArray['item_type']){
			$objSmarty->assign('ErrorMessage', 'Iten Type should not be blank');
			return false;
			}elseif(!$objArray['item_quantity']){
			$objSmarty->assign('ErrorMessage', 'Item Quantity should not be blank');
			return false;
			}elseif(!$objArray['item_code']){
			$objSmarty->assign('ErrorMessage', 'Item Quantity should not be blank');
			return false;
			}elseif(!$objArray['item_specification']){
			$objSmarty->assign('ErrorMessage', 'Item Specification should not be blank');
			return false;
			}elseif(!$objArray['email']){
			$objSmarty->assign('ErrorMessage', 'Email Id should not be blank');
			return false;
			}
			$objSmarty->assign('quote_id', $objArray['quote_id']);
			if($objArray['quote_id'] && $objArray['quote_id'])
			{

  $InsQuery = 'INSERT INTO `'.$tbl.'quote_request_master`(`quote_id`,`quote_date`,`supplier_code`,`supplier_company_name`,  `contact_fname`, `enquiry_reff_id`, `address`,`address1`,`mobile_no`,`email_id`,`area`,`city`,`pincode`,`area_code`,`phone_no`,`extension`,`quote_status`,`landmark`, `created_by`, `created_date`, `created_time`, `timestamp_value`,`remarks`,`status`) VALUES("'.trim(addslashes($objArray['quote_id'])).'","'.trim(addslashes($objArray['quote_date'])).'","'.trim(addslashes($objArray['supplier_code'])).'","'.trim(addslashes($objArray['supplier_company_name'])).'","'.trim(addslashes($objArray['contact_person'])).'","'.trim(addslashes($objArray['enquiry_refference_id'])).'","'.trim(addslashes($objArray['address'])).'","'.trim(addslashes($objArray['address1'])).'","'.trim(addslashes($objArray['mobile_no'])).'","'.trim(addslashes($objArray['email'])).'","'.trim(addslashes($objArray['area'])).'","'.trim(addslashes($objArray['city'])).'","'.trim(addslashes($objArray['pincode'])).'","'.trim(addslashes($objArray['area_code'])).'","'.trim(addslashes($objArray['phone_no'])).'","'.trim(addslashes($objArray['extension'])).'","'.trim(addslashes($objArray['quote_status'])).'","'.trim(addslashes($objArray['landmark'])).'","'.trim(addslashes($objArray['created_by'])).'","'.trim(addslashes($objArray['created_date'])).'","'.trim(addslashes($objArray['created_time'])).'","'.trim(addslashes($objArray['timestamp'])).'","'.trim(addslashes($objArray['remarks'])).'","1")';
$this->ExecuteQuery($InsQuery, 'insert');
if($objArray['item_type']='Product')
{
 $InsQuery2 = 'INSERT INTO `'.$tbl.'quote_details`(`quote_id`,`item_type`,`item_name`, `item_code`, `item_quantity`, `item_specification`, `created_by`, `created_date`, `created_time`, `timestamp_value`,`remarks`,`status`) VALUES("'.trim(addslashes($objArray['quote_id'])).'","'.trim(addslashes($objArray['item_type'])).'","'.trim(addslashes($objArray['product_desc'])).'","'.trim(addslashes($objArray['item_code'])).'","'.trim(addslashes($objArray['item_quantity'])).'","'.trim(addslashes($objArray['item_specification'])).'","'.trim(addslashes($objArray['created_by'])).'","'.trim(addslashes($objArray['created_date'])).'","'.trim(addslashes($objArray['created_time'])).'","'.trim(addslashes($objArray['timestamp'])).'","'.trim(addslashes($objArray['remarks'])).'","1")';
$this->ExecuteQuery($InsQuery2, 'insert');
}
 elseif($objArray['item_type']='Material')
 {
  $InsQuery2 = 'INSERT INTO `'.$tbl.'quote_details`(`quote_id`, `item_type`,`item_name`, `item_code`, `item_quantity`, `item_specification`, `created_by`, `created_date`, `created_time`, `timestamp_value`,`remarks`,`status`) VALUES("'.trim(addslashes($objArray['quote_id'])).'","'.trim(addslashes($objArray['item_type'])).'","'.trim(addslashes($objArray['material_name'])).'","'.trim(addslashes($objArray['item_code'])).'","'.trim(addslashes($objArray['item_quantity'])).'","'.trim(addslashes($objArray['item_specification'])).'","'.trim(addslashes($objArray['created_by'])).'","'.trim(addslashes($objArray['created_date'])).'","'.trim(addslashes($objArray['created_time'])).'","'.trim(addslashes($objArray['timestamp'])).'","'.trim(addslashes($objArray['remarks'])).'","1")';
$this->ExecuteQuery($InsQuery2, 'insert');

 }
 }
 }
 else
 {
   $UpQuery = 'UPDATE `'.$tbl.'quote_request_master` SET `quote_id` = "'.trim($objArray['quote_id']).'",`quote_date` = "'.trim($objArray['quote_date']).'",`enquiry_reff_id` = "'.trim($objArray['enquiry_refference_id']).'",`supplier_code` = "'.trim($objArray['supplier_code']).'",`supplier_company_name` = "'.trim($objArray['supplier_company_name']).'",`contact_fname` = "'.trim($objArray['contact_person']).'",`mobile_no` = "'.trim($objArray['mobile_no']).'", `address` = "'.trim($objArray['address']).'",`address1` = "'.trim($objArray['address1']).'",`area` = "'.trim($objArray['area']).'",`city` = "'.trim($objArray['city']).'", `area_code` = "'.trim($objArray['area_code']).'",`phone_no` = "'.trim($objArray['phone_no']).'",`extension` = "'.trim($objArray['extension']).'",`landmark` = "'.trim($objArray['landmark']).'",`pincode` = "'.trim($objArray['pincode']).'",`mobile_no` = "'.trim($objArray['mobile_no']).'",`quote_status` = "'.trim($objArray['quote_status']).'",`email_id` = "'.trim($objArray['email']).'", `remarks` = "'.trim($objArray['remarks']).'",`created_by` = "'.trim($objArray['created_by']).'", `created_date` = "'.trim($objArray['created_date']).'", `created_time` = "'.trim($objArray['created_time']).'", `timestamp_value` = "'.trim($objArray['timestamp']).'",`status` = "1" WHERE `quote_id` ="'.trim($objArray['quote_id']).'"'; 
  $this->ExecuteQuery($UpQuery, 'update');
if($objArray['item_type']='Product')
{
 $InsQuery2 = 'INSERT INTO `'.$tbl.'quote_details`(`quote_id`,`item_type`,`item_name`, `item_code`, `item_quantity`, `item_specification`, `created_by`, `created_date`, `created_time`, `timestamp_value`,`remarks`,`status`) VALUES("'.trim(addslashes($objArray['quote_id'])).'","'.trim(addslashes($objArray['item_type'])).'","'.trim(addslashes($objArray['product_desc'])).'","'.trim(addslashes($objArray['item_code'])).'","'.trim(addslashes($objArray['item_quantity'])).'","'.trim(addslashes($objArray['item_specification'])).'","'.trim(addslashes($objArray['created_by'])).'","'.trim(addslashes($objArray['created_date'])).'","'.trim(addslashes($objArray['created_time'])).'","'.trim(addslashes($objArray['timestamp'])).'","'.trim(addslashes($objArray['remarks'])).'","1")';
$this->ExecuteQuery($InsQuery2, 'insert');
}
 elseif($objArray['item_type']='Material')
 {
  $InsQuery2 = 'INSERT INTO `'.$tbl.'quote_details`(`quote_id`,`item_type`, `item_name`, `item_code`, `item_quantity`, `item_specification`, `created_by`, `created_date`, `created_time`, `timestamp_value`,`remarks`,`status`) VALUES("'.trim(addslashes($objArray['quote_id'])).'","'.trim(addslashes($objArray['item_type'])).'","'.trim(addslashes($objArray['material_name'])).'","'.trim(addslashes($objArray['item_code'])).'","'.trim(addslashes($objArray['item_quantity'])).'","'.trim(addslashes($objArray['item_specification'])).'","'.trim(addslashes($objArray['created_by'])).'","'.trim(addslashes($objArray['created_date'])).'","'.trim(addslashes($objArray['created_time'])).'","'.trim(addslashes($objArray['timestamp'])).'","'.trim(addslashes($objArray['remarks'])).'","1")';
$this->ExecuteQuery($InsQuery2, 'insert');

 }
 }
 
//Success Message
header('Location:' .$_SERVER['PHP_SELF'].'?succs_msg_for_insert'."&"."quote_id=".$_POST['quote_id']);
return true;
 }




/*********************/
  function ChkDupliQo($quote_id, $Ident=''){
  
global $objSmarty,$config,$_POST;
$tbl = $config['DBPrefix'];
		$SelQuery	= 'SELECT * FROM `'.$tbl.'quote_request_master` WHERE `quote_id` = "'.$quote_id.'" Limit 0,1';
		$QoDetail = $this->ExecuteQuery($SelQuery, 'select');
  
		if(!empty($QoDetail) && is_array($QoDetail))
		   return false;
		else
		  return true;
 }
/*************************************************View Quote/***************************************************************/
function ViewQuote()
 {
 $quot_id = base64_decode($_GET["quote_id"]);
global $objSmarty,$config;
$tbl = $config['DBPrefix'];
/*$SelQuery = 'SELECT '.$tbl.'quote_request_master.*, '.$tbl.'quote_details.* FROM `'.$tbl.'quote_request_master`, `'.$tbl.'quote_details` WHERE '.$tbl.'quote_request_master.quote_id='.$tbl.'quote_details.quote_id  AND  '.$tbl.'quote_request_master.quote_id="'.$_GET['quote_id'].'"';*/
$SelQuery = 'SELECT * FROM `'.$tbl.'quote_details` WHERE '.$tbl.'quote_details.quote_id="'.$quot_id.'"';
			$ListViews = $this->ExecuteQuery($SelQuery, "select");
			$objSmarty->assign('ListViews', $ListViews);
			return $ListViews;

 }
 /*******************************************Master/***************************************************/
 function ViewQuoteMaster()
 {
 $quot_id = base64_decode($_GET["quote_id"]);
global $objSmarty,$config;
$tbl = $config['DBPrefix'];
$SelQuery = 'SELECT * FROM `'.$tbl.'quote_request_master` WHERE '.$tbl.'quote_request_master.quote_id="'.$quot_id.'"';
			$ListView4 = $this->ExecuteQuery($SelQuery, "select");
			$objSmarty->assign('ListView4', $ListView4);
			return $ListView4;

 }

 /*************************************************View Edit Quote/***************************************************************/
function ListMast($objArray)
 { 
 $quot_id = base64_decode($_GET["quote_id"]);   
global $objSmarty, $config;
$tbl = $config['DBPrefix'];
			$SelQuery = 'SELECT '.$tbl.'quote_request_master.* FROM `'.$tbl.'quote_request_master` WHERE '.$tbl.'quote_request_master.quote_id="'.$quot_id.'"';
			$ListView = $this->ExecuteQuery($SelQuery, "select");
			$objSmarty->assign('ListView', $ListView);
			return $ListView;

 }
 
 function ListDetails($objArray)
 { 
 $quot_id = base64_decode($_GET["quote_id"]);
global $objSmarty, $config;
$tbl = $config['DBPrefix'];
			$SelQuery = 'SELECT '.$tbl.'quote_details.* FROM `'.$tbl.'quote_details` WHERE '.$tbl.'quote_details.quote_id="'.$quot_id.'"';
			$ListView1 = $this->ExecuteQuery($SelQuery, "select");
			$objSmarty->assign('ListView1', $ListView1);

			return $ListView1;

 }
 /*************************************************List Quote/***************************************************************/
 
function ListQuote()
{
global $objSmarty, $config;
$tbl = $config['DBPrefix'];
		
			$SelQuery='SELECT * FROM `'.$tbl.'quote_request_master` WHERE status="1" ORDER BY quote_id DESC';
			$ListView5 = $this->ExecuteQuery($SelQuery, "select");
			$objSmarty->assign('ListView5', $ListView5);
			return $ListView5;

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

 /**********************************************Delete Contact/*********************************************************************/
 function DeleteMaster($CatIdent)
 {global $objSmarty,$config;
$tbl = $config['DBPrefix'];
$DelQuery = 'update `'.$tbl.'quote_request_master` set `status` = 0 WHERE `quote_id` ="'.$CatIdent.'"';
			$this->ExecuteQuery($DelQuery, 'update');
            header('Location:' .$_SERVER['PHP_SELF'].'?succs_msg_for_del');  

 }
 
  /*************************************function Delete/********************************************************************/
 function DeleteQuoteDetail($CatIdent,$CusIdent)
 {
 $slno = base64_decode($CatIdent);
print_r($CatIdent);	
print_r($CusIdent);
global $objSmarty, $config;
$tbl = $config['DBPrefix'];
$DelQuery = 'DELETE FROM `'.$tbl.'quote_details` WHERE `sl_no`="'.$slno.'"';
			$this->ExecuteQuery($DelQuery, 'delete');
			header('Location:' .$_SERVER['PHP_SELF'].'?succs_msg_for_del'."&"."quote_id=".$CusIdent);
  }
 /****************************************************Time Stamp Value As Date And Time Form Master/****************************************/
 
  function DateStamp()
 {global $objSmarty,$config;
$tbl = $config['DBPrefix'];
$quot_id = base64_decode($_GET["quote_id"]);  
$SelQuery = 'SELECT Date(timestamp_value) as Date from '.$tbl.'quote_request_master WHERE quote_id="'.$quot_id.'"';
			 $Date_Stamp = $this->ExecuteQuery($SelQuery, "select");
			  //print $Date;
			 $objSmarty->assign('Date_Stamp', $Date_Stamp);
			 return $Date_Stamp;
			 
}

  function TimeStamp()
  {global $objSmarty,$config;
$tbl = $config['DBPrefix'];
$quot_id = base64_decode($_GET["quote_id"]);  
$SelQuery1 = 'SELECT  Time(timestamp_value) as Time from '.$tbl.'quote_request_master WHERE quote_id="'.$quot_id.'"';
			 $Time_Stamp = $this->ExecuteQuery($SelQuery1, "select");
			 $objSmarty->assign('Time_Stamp', $Time_Stamp);
			 return $Time_Stamp;
			

 }

  /*************************************************Edit Quote/***************************************************************/
function EditQuote($objArray ,$objFiles){
  $quot_id = base64_decode($_GET["quote_id"]);
  global $objSmarty, $config, $_POST;
  $tbl = $config['DBPrefix'];
   if(!$objArray['quote_date']){
			$objSmarty->assign('ErrorMessage', 'Quote Date should not be blank');
			return false;
			}elseif(!$objArray['enquiry_refference_id']){
			$objSmarty->assign('ErrorMessage', 'Enquiry refer Id should not be blank');
			return false;
			}elseif(!$objArray['supplier_code']){
			$objSmarty->assign('ErrorMessage', 'Supplier Code should not be blank');
			return false;
			}elseif(!$objArray['supplier_company_name']){
			$objSmarty->assign('ErrorMessage', 'Suplier Company should not be blank');
			return false;
			}elseif(!$objArray['contact_person']){
			$objSmarty->assign('ErrorMessage', 'First Name should not be blank');
			return false;
			}elseif((!$objArray['mobile_no']) && (!$objArray['phone_no'])){
			$objSmarty->assign('ErrorMessage', 'Mobile No or Phone No should not be blank');
			return false;
			}elseif(!$objArray['address']){
			$objSmarty->assign('ErrorMessage', 'Address should not be blank');
			return false;
			}elseif(!$objArray['area']){
			$objSmarty->assign('ErrorMessage', 'Area should not be blank');
			return false;
			}elseif(!$objArray['city']){
			$objSmarty->assign('ErrorMessage', 'City should not be blank');
			return false;
			}elseif(!$objArray['pincode']){
			$objSmarty->assign('ErrorMessage', 'Pincode should not be blank');
			return false;
			}elseif(!$objArray['item_type']){
			$objSmarty->assign('ErrorMessage', 'Iten Type should not be blank');
			return false;
			}elseif(!$objArray['item_quantity']){
			$objSmarty->assign('ErrorMessage', 'Item Quantity should not be blank');
			return false;
			}elseif(!$objArray['item_code']){
			$objSmarty->assign('ErrorMessage', 'Item Quantity should not be blank');
			return false;
			}elseif(!$objArray['item_specification']){
			$objSmarty->assign('ErrorMessage', 'Item Specification should not be blank');
			return false;
			}elseif(!$objArray['email']){
			$objSmarty->assign('ErrorMessage', 'Email Id should not be blank');
			return false;
			}
  
  $objSmarty->assign('quote_id', $objArray['quote_id']);
			if($objArray['quote_id']){
 
 $UpQuery = 'UPDATE `'.$tbl.'quote_request_master` SET `quote_id` = "'.trim($objArray['quote_id']).'",`quote_date` = "'.trim($objArray['quote_date']).'",`enquiry_reff_id` = "'.trim($objArray['enquiry_refference_id']).'",`supplier_code` = "'.trim($objArray['supplier_code']).'",`supplier_company_name` = "'.trim($objArray['supplier_company_name']).'",`contact_fname` = "'.trim($objArray['contact_person']).'",`mobile_no` = "'.trim($objArray['mobile_no']).'", `address` = "'.trim($objArray['address']).'",`address1` = "'.trim($objArray['address1']).'",`area` = "'.trim($objArray['area']).'",`city` = "'.trim($objArray['city']).'",`pincode` = "'.trim($objArray['pincode']).'",`mobile_no` = "'.trim($objArray['mobile_no']).'", `area_code` = "'.trim($objArray['area_code']).'",`phone_no` = "'.trim($objArray['phone_no']).'",`extension` = "'.trim($objArray['extension']).'",`quote_status` = "'.trim($objArray['quote_status']).'",`email_id` = "'.trim($objArray['email']).'",`landmark`="'.trim($objArray['landmark']).'", `remarks` = "'.trim($objArray['remarks']).'",`created_by` = "'.trim($objArray['created_by']).'", `created_date` = "'.trim($objArray['created_date']).'", `created_time` = "'.trim($objArray['created_time']).'", `timestamp_value` = "'.trim($objArray['timestamp']).'",`status` = "1" WHERE `quote_id` ="'.$quot_id.'"'; 
  $this->ExecuteQuery($UpQuery, 'update');
  
 if($objArray['item_type']='Product')
{
 $InsQuery2 = 'INSERT INTO `'.$tbl.'quote_details`(`quote_id`,`item_type`,`item_name`, `item_code`, `item_quantity`, `item_specification`, `created_by`, `created_date`, `created_time`, `timestamp_value`,`remarks`,`status`) VALUES("'.trim(addslashes($objArray['quote_id'])).'","'.trim(addslashes($objArray['item_type'])).'","'.trim(addslashes($objArray['product_desc'])).'","'.trim(addslashes($objArray['item_code'])).'","'.trim(addslashes($objArray['item_quantity'])).'","'.trim(addslashes($objArray['item_specification'])).'","'.trim(addslashes($objArray['created_by'])).'","'.trim(addslashes($objArray['created_date'])).'","'.trim(addslashes($objArray['created_time'])).'","'.trim(addslashes($objArray['timestamp'])).'","'.trim(addslashes($objArray['remarks'])).'","1")';
$this->ExecuteQuery($InsQuery2, 'insert');
}
 elseif($objArray['item_type']='Material')
 {
  $InsQuery2 = 'INSERT INTO `'.$tbl.'quote_details`(`quote_id`, `item_type`,`item_name`, `item_code`, `item_quantity`, `item_specification`, `created_by`, `created_date`, `created_time`, `timestamp_value`,`remarks`,`status`) VALUES("'.trim(addslashes($objArray['quote_id'])).'","'.trim(addslashes($objArray['item_type'])).'","'.trim(addslashes($objArray['material_name'])).'","'.trim(addslashes($objArray['item_code'])).'","'.trim(addslashes($objArray['item_quantity'])).'","'.trim(addslashes($objArray['item_specification'])).'","'.trim(addslashes($objArray['created_by'])).'","'.trim(addslashes($objArray['created_date'])).'","'.trim(addslashes($objArray['created_time'])).'","'.trim(addslashes($objArray['timestamp'])).'","'.trim(addslashes($objArray['remarks'])).'","1")';
$this->ExecuteQuery($InsQuery2, 'insert');

 }

header('Location:' .$_SERVER['PHP_SELF'].'?succs_msg_for_insert'."&"."quote_id=".$_GET['quote_id']);
					return true;
 
 }
 }
 /*********************************************************************/
 function AjaxGetVendorDetails($objArray="")
 {
global $objSmarty,$config;
$tbl = $config['DBPrefix'];

		$SelQuery = 'SELECT * FROM '.$tbl.'vendor_master WHERE vendor_company_name ="'.$_GET['supplier_company_name'].'"' ;
		 $LDList		= $this->ExecuteQuery($SelQuery, "select");	
		//print_r($LDList);
		$SelQuery_Cnt_Dtls = 'SELECT * FROM '.$tbl.'vendor_contact_details WHERE vendor_id ="'.$LDList[0]['vendor_id'].'" AND status ="1"' ;
		$LDList_Cnt_Dtls   = $this->ExecuteQuery($SelQuery_Cnt_Dtls, "select");	
		
		/*For area*/
		$SelQuery_Add_Dtls = 'SELECT * FROM '.$tbl.'vendor_address_details WHERE vendor_id ="'.$LDList[0]['vendor_id'].'" AND status ="1"' ;
		$LDList_Add_Dtls   = $this->ExecuteQuery($SelQuery_Add_Dtls, "select");	

	foreach($LDList_Cnt_Dtls as $keys=>$value)	
	{
        $Cstmr_Dtls_array = '<option value="'.$LDList_Cnt_Dtls[$keys]["vendor_contact_person_fname"]. " " .$LDList_Cnt_Dtls[$keys]["vendor_contact_person_lname"].'">'.$LDList_Cnt_Dtls[$keys]["salutation"]. " . ".$LDList_Cnt_Dtls[$keys]["vendor_contact_person_fname"]. " " .$LDList_Cnt_Dtls[$keys]["vendor_contact_person_lname"]." ( ".$LDList_Add_Dtls[$keys]["area"]." ) ".'</option>';
		
	 echo $Cstmr_Dtls_array."|$|".$LDList_Cnt_Dtls[$keys]["vendor_contact_person_fname"]. " " .$LDList_Cnt_Dtls[$keys]["vendor_contact_person_lname"]."_".$LDList_Cnt_Dtls[$keys]["mobile_no"]."_".$LDList_Add_Dtls[$keys]["area"]."_".$LDList_Cnt_Dtls[$keys]["mail_id"]."_".$LDList_Cnt_Dtls[$keys]["area_code"]."_".$LDList_Cnt_Dtls[$keys]["phone_no"]."_".$LDList_Cnt_Dtls[$keys]["extension"]."|$|";
		}
		echo "|SUPID|".$LDList[0]['vendor_id'];
		//print_r($Cstmr_Dtls_array);
}
/********************************************************************************/

function AjaxGetAddressDetails()
 {
global $objSmarty,$config;
$tbl = $config['DBPrefix'];

		 $SelQuery = 'SELECT * FROM '.$tbl.'vendor_master WHERE vendor_company_name ="'.$_GET['supplier_company_name'].'"' ;
		 $LDList		= $this->ExecuteQuery($SelQuery, "select");	
		
		//print_r($LDList);
		$SelQuery_Add_Dtls = 'SELECT * FROM '.$tbl.'vendor_address_details WHERE vendor_id ="'.$LDList[0]['vendor_id'].'" AND `area` ="'.$_GET['area'].'"' ;
		$LDList_Add_Dtls   = $this->ExecuteQuery($SelQuery_Add_Dtls, "select");	
		//print_r($LDList_Add_Dtls);		
		foreach($LDList_Add_Dtls as $keys=>$value)	
		{
         echo $LDList_Add_Dtls[$keys]["address"]."_".$LDList_Add_Dtls[$keys]["address1"]."_".$LDList_Add_Dtls[$keys]["landmark"]."_".$LDList_Add_Dtls[$keys]["city"]."_".$LDList_Add_Dtls[$keys]["pincode"]."_".$LDList_Cnt_Dtls[$keys]["mobile_no"]."_".$LDList_Cnt_Dtls[$keys]["area"]."|$|";
}
}
/******************************Product Auto Suggest/******************/
   function SelectProduct($objArray="")
  {
			global $objSmarty,$config;
			$tbl = $config['DBPrefix'];

			$SelQuery = 'SELECT * FROM '.$tbl.'product_master WHERE item_description="'.$_GET['product_desc'].'"';
			$Product = $this->ExecuteQuery($SelQuery, "select");
			$objSmarty->assign('Product', $Product);
			//print_r($Product);
				foreach($Product as $keys=>$value)	
					{
					echo $Product[$keys]["item_code"]."_".$Product[$keys]["total"]."_".$Product[$keys]["item_description"]."|$|";
					}
}
/***************************Material Auto Suggest/******************************************/
  function SelectMaterial($objArray="")
  {
			global $objSmarty,$config;
			$tbl = $config['DBPrefix'];

			$SelQuery = 'SELECT * FROM '.$tbl.'material_master WHERE material_name="'.$_GET['material_name'].'"';
			$Material = $this->ExecuteQuery($SelQuery, "select");
			$objSmarty->assign('Material', $Material);
				foreach($Material as $keys=>$value)	
					{
					echo $Material[$keys]["material_code"]."_".$Material[$keys]["material_price"]."_".$Material[$keys]["material_category"]."|$|";
					}
 }  
 /********************************Quote View/****************************************************************/
function GetQuoteView($objArray="")  {

		 global $objSmarty,$_REQUEST,$_POST;
		global $objSmarty, $config;
		$tbl = $config['DBPrefix'];
		$objSmarty->assign('q_id',$_GET['quote_id']);
	 $SelQuery = 'SELECT DISTINCT * FROM `'.$tbl.'quote_request_master` WHERE quote_id ="'.$_GET['quote_id'].'"' ;
		//echo $SelQuery;
		$LDList3		= $this->ExecuteQuery($SelQuery, "select");
		 if(!empty($LDList3) && is_array($LDList3))
		{
			$objSmarty->assign("LDList2",$LDList3);
			return $LDList2;
		}
		else{
			return false;
		}
		}	

function SelectProDetail($objArray="")
 {
 
	global $objSmarty,$config;
	$tbl = $config['DBPrefix'];
	$SelQuery = 'SELECT * FROM `'.$tbl.'quote_details` WHERE quote_id="'.$_GET['quote_id'].'" AND sl_no="'.$_GET['sl_no'].'" AND status="1"';
	$ProList2 = $this->ExecuteQuery($SelQuery, 'select');
	$objSmarty->assign('ProList2', $ProList2);
	//print_r($SalesList2);exit;
			
 }
 /******************************PO Mail**********************************************************/
function InsertMail($objArray, $objFiles){
 {echo "Mail Sent";
global $objSmarty,$config,$_POST;
$tbl = $config['DBPrefix'];
	list ($name,$format) = split("[.]", $objFiles['attachments1']['name'],2);
	list ($name,$format) = split("[.]", $objFiles['attachments2']['name'],2);
	list ($name,$format) = split("[.]", $objFiles['attachments3']['name'],2);

		$uploadpath = $config['MailImagePath'];
				if($objFiles['attachments1']["name"] <> "")
		{
			    $errors     = array();
   				$maxsize    = 5242880;
   				$acceptable = array(
				'image/jpeg','image/jpg','image/gif','image/png','application/pdf','text/plain','application/msword','application/vnd.openxmlformats-officedocument.presentationml.presentation','application/vnd.openxmlformats-officedocument.wordprocessingml.document',
				'application/x-zip-compressed','application/vnd.ms-excel','application/vnd.ms-powerpoint','video/pps','application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		if(($_FILES['attachments1']['size'] >= $maxsize) || ($_FILES["attachments1"]["size"] == 0)) {
		$errors[] = 'File --1-- too large. File must be less than 2 megabytes';
		}
		
		if((!in_array($_FILES['attachments1']['type'], $acceptable)) && (!empty($_FILES["attachments1"]["type"])))
		 {echo"format";
		$errors1[] = 'File --1-- Only PDF, JPG, JPEG, TXT, DOC, DOCX, XLS, XLSX, ZIP, PPT, PPTX, GIF and PNG types are accepted';
		}
		
		if(count($errors)  === 0 && count($errors1)  === 0) 
		{
			if((!file_exists($config['MailImagePath'] . $_FILES["attachments1"]["name"])))
			{
				$f1 = $objFiles['attachments1']['name'];
				if(move_uploaded_file($objFiles['attachments1']['tmp_name'], $uploadpath.$f1))
				chmod($uploadpath.$f1,"777");
			}
			elseif((file_exists($config['MailImagePath'] . $_FILES["attachments1"]["name"])))
			{
				$f1 = explode(".", $_FILES['attachments1']['name']);
				$random_digit=rand(0000,9999);
				$newfilename = $random_digit.'.'.end($f1);
				if(move_uploaded_file($objFiles['attachments1']['tmp_name'], $uploadpath.$newfilename))
				chmod($uploadpath.$newfilename,"777");
				$f1=$newfilename;
			}
		   } 
			else {
        	foreach($errors as $error) 
			{
            $objSmarty->assign('ErrorMessage', $error);
			return false;			
        }
		foreach($errors1 as $error1) 
			{
            $objSmarty->assign('ErrorMessage', $error1);
			return false;
			
        }
		
		}
	}
		if($objFiles['attachments2']["name"] <> "")
		{
			    $errors     = array();
   				$maxsize    = 5242880;
   				$acceptable = array(
				'image/jpeg','image/jpg','image/gif','image/png','application/pdf','text/plain','application/msword','application/vnd.openxmlformats-officedocument.presentationml.presentation','application/vnd.openxmlformats-officedocument.wordprocessingml.document',
				'application/x-zip-compressed','application/vnd.ms-excel','application/vnd.ms-powerpoint','video/pps','application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		if(($_FILES['attachments2']['size'] >= $maxsize) || ($_FILES["attachments2"]["size"] == 0)) {
		$errors2[] = 'File --2-- too large. File must be less than 5 MB';
		}
		
		if((!in_array($_FILES['attachments2']['type'], $acceptable)) && (!empty($_FILES["attachments2"]["type"])))
		 {echo"format";
		$errors3[] = 'File --2-- Only PDF, JPG, JPEG, TXT, DOC, DOCX, XLS, XLSX, ZIP, PPT, PPTX, GIF and PNG types are accepted';
		}
		
		if(count($errors2)  === 0 && count($errors3)  === 0) 
		{
	if((!file_exists($config['MailImagePath'] . $_FILES["attachments2"]["name"])))
			{
				$f2 = $objFiles['attachments2']['name'];
				if(move_uploaded_file($objFiles['attachments2']['tmp_name'], $uploadpath.$f2))
				chmod($uploadpath.$f2,"755");
			}
			elseif((file_exists($config['MailImagePath'] . $_FILES["attachments2"]["name"])))
			{
				$f2 = explode(".", $_FILES['attachments2']['name']);
				$random_digit=rand(0000,9999);
				$newfilename = $random_digit.'.'.end($f2);
				if(move_uploaded_file($objFiles['attachments2']['tmp_name'], $uploadpath.$newfilename))
				chmod($uploadpath.$newfilename,"755");
				$f2=$newfilename;
			}
		}
		
			else {
        	foreach($errors2 as $error2) 
			{
            $objSmarty->assign('ErrorMessage', $error2);
			return false;			
        	}
			foreach($errors3 as $errors2) 
			{
            $objSmarty->assign('ErrorMessage', $errors2);
			return false;
			
        	}
		
		}
	}
	
			if($objFiles['attachments3']["name"] <> "")
		{
			    $errors     = array();
   				$maxsize    = 5242880;
   				$acceptable = array(
				'image/jpeg','image/jpg','image/gif','image/png','application/pdf','text/plain','application/msword','application/vnd.openxmlformats-officedocument.presentationml.presentation','application/vnd.openxmlformats-officedocument.wordprocessingml.document',
				'application/x-zip-compressed','application/vnd.ms-excel','application/vnd.ms-powerpoint','video/pps','application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		if(($_FILES['attachments3']['size'] >= $maxsize) || ($_FILES["attachments3"]["size"] == 0)) {
		$errors4[] = 'File --3-- too large. File must be less than 5 MB';
		}
		
		if((!in_array($_FILES['attachments3']['type'], $acceptable)) && (!empty($_FILES["attachments3"]["type"])))
		 {echo"format";
		$errors5[] = 'File --3-- Only PDF, JPG, JPEG, TXT, DOC, DOCX, XLS, XLSX, ZIP, PPT, PPTX, GIF and PNG types are accepted';
		}
		
		if(count($errors4)  === 0 && count($errors5)  === 0) 
		{

			if((!file_exists($config['MailImagePath'] . $_FILES["attachments3"]["name"])))
			{
				$f3 = $objFiles['attachments3']['name'];
				if(move_uploaded_file($objFiles['attachments3']['tmp_name'], $uploadpath.$f3))
				chmod($uploadpath.$f3,"777");
			}
			elseif((file_exists($config['MailImagePath'] . $_FILES["attachments3"]["name"])))
			{
				$f3 = explode(".", $_FILES['attachments3']['name']);
				$random_digit=rand(0000,9999);
				$newfilename = $random_digit.'.'.end($f3);
				if(move_uploaded_file($objFiles['attachments3']['tmp_name'], $uploadpath.$newfilename))
				chmod($uploadpath.$newfilename,"755");
				$f3=$newfilename;
			}
		}
					else {
        	foreach($errors4 as $error2) 
			{
            $objSmarty->assign('ErrorMessage', $error2);
			return false;			
        	}
			foreach($errors5 as $errors3) 
			{
            $objSmarty->assign('ErrorMessage', $errors3);
			return false;
			
        	}
		
		}
	}
	

 			if(!$objArray['mail_id2']){
			$objSmarty->assign('ErrorMessage', 'Mail To should not be blank');
			return false;
			}elseif(!$objArray['cc']){
			$objSmarty->assign('ErrorMessage', 'CC should not be blank');
			return false;
			}elseif(!$objArray['subject']){
			$objSmarty->assign('ErrorMessage', 'Subject should not be blank');
			return false;			}
			$objSmarty->assign('mail_id2', $objArray['mail_id2']);

$InsQuery = 'INSERT INTO `'.$tbl.'quote_mail`(`quote_id`,`vendor_id`,mail_from,`mail_to`,`mail_cc`,`mail_subject`,`message`,`mail_attachment1`,`mail_attachment2`,`mail_attachment3`,`created_by`,`created_date`,`created_time`,`status`) VALUES("'.trim(addslashes($objArray['quote_id'])).'","'.trim(addslashes($objArray['vendor_id'])).'","'.trim(addslashes($objArray['mail_from'])).'","'.trim(addslashes($objArray['mail_id2'])).'","'.trim(addslashes($objArray['cc'])).'","'.trim(addslashes($objArray['subject'])).'","'.trim(addslashes($objArray['message'])).'","'.$f1.'","'.$f2.'","'.$f3.'","'.trim(addslashes($objArray['created_by'])).'","'.trim(addslashes($objArray['created_date'])).'","'.trim(addslashes($objArray['created_time'])).'","1")';
$this->ExecuteQuery($InsQuery, 'insert');

		$SelQuery = 'SELECT * From '.$tbl.'user_master WHERE username="'.trim(addslashes($objArray['created_by'])).'"';
		$UserMas = $this->ExecuteQuery($SelQuery, "select");
		$objSmarty->assign('UserMas', $UserMas);
	/************************************Query for Customer Name************************************/
		$SelQuery1 = 'SELECT * From '.$tbl.'quote_request_master WHERE quote_id="'.$_GET['quote_id'].'"';
		$EnqMail = $this->ExecuteQuery($SelQuery1, "select");
		$objSmarty->assign('EnqMail', $EnqMail);
	/*********************************************************************************************/
/*		$SelQuery2 = 'SELECT * From '.$tbl.'sales_order_mail WHERE quote_id="'.$_GET['quote_id'].'"';
		$Salemail = $this->ExecuteQuery($SelQuery2, "select");
		$objSmarty->assign('SalMail', $Salemail);*/




  $EmailHtml = "";
  $EmailHtml .= '<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="center" valign="top" bgcolor="#ffffff" style="background-color:#ffffff;"><br>
    <br>
    <table width="600" border="0" cellspacing="0" cellpadding="0">

      <tr>
        <td align="left" valign="top" bgcolor="#ffffff" style="background-color:#ffffff;"><table width="570" border="0" align="center" cellpadding="0" cellspacing="0" style="margin-bottom:15px;">

          </table>
          <table width="570" border="0" align="center" cellpadding="0" cellspacing="0" style="margin-bottom:15px;">
          <tr><td width="180" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif; color:#4e4e4e; font-size:13px; padding-right:10px;">
		  <img src="http://www.arkagroup.co.in/erp/images/logo.png" width="75" height="75" style="display:block;">
            <h3>Welcome To ARKA group ERP</h3>
            <p>Dear Customer,</p>
			<p>'.$_POST['message'].'</p>


			<p>Please Click Attachments for download</p>
			<a href="http://www.arkagroup.co.in/erp/images/mail/'.$f1.'" download='.$f1.'>'.$f1.'</a><br>
			<a href="http://www.arkagroup.co.in/erp/images/mail/'.$f2.'" download='.$f2.'>'.$f2.'</a><br>
			<a href="http://www.arkagroup.co.in/erp/images/mail/'.$f3.'" download='.$f3.'>'.$f3.'</a><br>


		<center>
		<p>Thanking you once again.</p>
		<p>Sincerely, ARKA Group,</p></center>
			</td>
			</tr>
            </table>
          <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0" style="margin-bottom:20px;">
            <tr>
              <td width="50%" align="left" valign="middle" style="padding:10px;"><table width="75%" border="0" cellspacing="0" cellpadding="4">
                <tr>
                  <td align="left" valign="top" style="font-family:Verdana, Geneva, sans-serif; font-size:14px; color:#000000;"><b>Follow Us On</b></td>
                  </tr>
                <tr>
                  <td align="left" valign="top" style="font-family:Verdana, Geneva, sans-serif; font-size:12px; color:#000000;"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td width="33%" align="left" valign="middle"><img src="http://www.tasca.in/images/tweet48.png" width="48" height="48"></td>
                      <td width="34%" align="left" valign="middle"><img src="http://www.tasca.in/images/in48.png" width="48" height="48"></td>
                      <td width="33%" align="left" valign="middle"><img src="http://www.tasca.in/images/face48.png" width="48" height="48"></td>
                      </tr>
                    </table></td>
                  </tr>
                </table></td>
              <td width="50%" align="left" valign="middle" style="color:#595959; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:10px;"> <b>Company Address</b><br> Company URL: <a href="http://www.arkagroup.co.in" target="_blank"  style="color:#595959; text-decoration:none;">http://www.arkagroup.co.in</a><br>
<br>
<b>Hours:</b> Mon-Fri 9:30-5:30, Sat. 9:30-3:00, Sun. Closed <br>
                <b>Customer Support:</b> <a href="mailto:arkagroup@gmail.com" style="color:#595959; text-decoration:none;">arkagroup@gmail.com</a></td>
              </tr>
          </table></td>
      </tr>
      </table>
    <br>
    <br></td>
  </tr>
</table>
</body>
</html>';
	  $ArrReplace = array($config['SiteTitle'], $config['SiteGlobalPath']);
	  $Message = str_replace($ArrFind, $ArrReplace, $EmailHtml);
	  $Mail = $_POST['email_id1'];
	  $ccMail = $_POST['cc'];

	   if($Mail != '')
	  {
				$To = $Mail;
	  }
	  else

	  {
	    //$To = "rsureshit@hotmail.com";
	  }
		$From = $UserMas[0]['email_id'];
		//echo $From;exit;
		$ccarr = $ccMail;
		$Subject =' Welcome to '.$config['SiteTitle'] .','.$EnqMail[0]['vendor_name'].$_POST['subject'] ;
		Send($To, $Message, $From, $Subject,$ccarr);
header('Location:' .$_SERVER['PHP_SELF'].'?succs_msg_for_insert'."&"."quote_id=".$_GET['quote_id']."&"."supplier_code=".$_GET['supplier_code']);

return true;

}
}			
/****************************************Vendor List************************************************/

function SalesMailList()
{
 			global $objSmarty,$config;
			$tbl = $config['DBPrefix'];
			$SelQuery = 'SELECT * from '.$tbl.'vendor_contact_details WHERE vendor_id="'.$_GET["supplier_code"].'"';
			$EnqpoMailview = $this->ExecuteQuery($SelQuery, "select");
			$objSmarty->assign('EnqpoMailview', $EnqpoMailview);
			
}
}
?>


