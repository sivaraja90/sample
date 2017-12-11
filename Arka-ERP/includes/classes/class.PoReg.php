<?php
#####Class For Adding Content Management ######
class PoReg extends MysqlFns{
 
 /* class constructor */
 function PoReg(){
 $this->LDDisplayPath= $config['SiteGlobalPath']."class.PoReg.php";
  global $config;
global $objSmarty, $config;
$tbl = $config['DBPrefix'];
 
  $this->MysqlFns();
  $this->Limit = 20;
  $por_id = base64_decode($_GET["po_no"]);
 /**************************************PO ID Auto Increment*********************************************************/ 
  			$SelQuerys	= 'SELECT max(po_no) as last FROM `'.$tbl.'po_master` Limit 0,1';
			$PODetail	= $this->ExecuteQuery($SelQuerys, 'select');
			if($PODetail[0]['last']!="")
			{
			$PODetail[0]['po_no'] = stripslashes($PODetail[0]['last']);
			$po_no1 = preg_replace("/[^0-9\.]/", '', $PODetail[0]['po_no']);
			$po_no1= $po_no1 + 1;
			$str = str_split($PODetail[0]['last'], 2);
			$po_no = $str[0]. "" .$po_no1;
			}
			else
			{
			$po_no = "PO1001";
			}
			$objSmarty->assign('po_no', $po_no);

 /********************function InsertPO******************************************/
$f1 = "po_company.txt";
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
 /*****************PO Reg/*************************/
  function InsertPO($objArray="")
 {
global $objSmarty, $config,$_POST;
$tbl = $config['DBPrefix'];
if($this->ChkDupliPo(trim(addslashes($objArray['po_no'])))){
			if(!$objArray['po_date']){
			$objSmarty->assign('ErrorMessage', 'PO Date should not be blank');
			return false;
			}elseif(!$objArray['po_status']){
			$objSmarty->assign('ErrorMessage', 'PO Status should not be blank');
			return false;
			}elseif(!$objArray['payment_status']){
			$objSmarty->assign('ErrorMessage', 'Payment Status should not be blank');
			return false;
			}elseif(!$objArray['quote_ref_id']){
			$objSmarty->assign('ErrorMessage', 'Qoute Reff Id should not be blank');
			return false;
			}elseif((!$objArray['mobile_no']) && (!$objArray['phone_no'])){
			$objSmarty->assign('ErrorMessage', 'Mobile Number or Phonr No should not be blank');
			return false;
			}elseif(!$objArray['address']){
			$objSmarty->assign('ErrorMessage', 'Address should not be blank');
			return false;
			}elseif(!$objArray['item_type']){
			$objSmarty->assign('ErrorMessage', 'Item Type should not be blank');
			return false;
			}elseif(!$objArray['item_tax_per']){
			$objSmarty->assign('ErrorMessage', 'Item Tax per should not be blank');
			return false;
			}elseif(!$objArray['item_tax_value']){
			$objSmarty->assign('ErrorMessage', 'Tax value should not be blank');
			return false;
			}elseif(!$objArray['item_price']){
			$objSmarty->assign('ErrorMessage', 'Item Price should not be blank');
			return false;
			}elseif(!$objArray['po_date']){
			$objSmarty->assign('ErrorMessage', 'PO Date should not be blank');
			return false;
			}elseif(!$objArray['city']){
			$objSmarty->assign('ErrorMessage', 'City Field should not be blank');
			return false;
			}elseif(!$objArray['supplier_code']){
			$objSmarty->assign('ErrorMessage', 'Supplier Code Field should not be blank');
			return false;
			}elseif(!$objArray['supplier_mail']){
			$objSmarty->assign('ErrorMessage', 'Supplier Mail should not be blank');
			return false;
			}elseif(!$objArray['item_code']){
			$objSmarty->assign('ErrorMessage', 'Item Code should not be blank');
			return false;
			}elseif(!$objArray['item_quantity']){
			$objSmarty->assign('ErrorMessage', 'Item Quantity Field should not be blank');
			return false;
			}elseif(!$objArray['item_specification']){
			$objSmarty->assign('ErrorMessage', 'Item Specification Field should not be blank');
			return false;
			}
			$objSmarty->assign('po_no', $objArray['po_no']);
			if($objArray['po_no'] && $objArray['contact_person']){

 $InsQuery = 'INSERT INTO `'.$tbl.'po_master`(`po_no`,`po_date`,`quote_ref_id`,`quote_date`,`supplier_company_name`,`contact_person`,`supplier_code`,`supplier_address`,`supplier_address1`,`area`,`city`,`deliver_to`,`supplier_email`,`supplier_mobile_no`,`phone_no`,`area_code`,`extension`,`po_status`,`payment_status`,`pincode`,`created_by`,`created_date`,`created_time`,`timestamp_value`,`remarks`,`status`) VALUES("'.trim(addslashes($objArray['po_no'])).'","'.trim(addslashes($objArray['po_date'])).'","'.trim(addslashes($objArray['quote_ref_id'])).'","'.trim(addslashes($objArray['quote_date'])).'","'.trim(addslashes($objArray['supplier_company'])).'","'.trim(addslashes($objArray['contact_person'])).'","'.trim(addslashes($objArray['supplier_code'])).'","'.trim(addslashes($objArray['address'])).'","'.trim(addslashes($objArray['address1'])).'","'.trim(addslashes($objArray['area'])).'","'.trim(addslashes($objArray['city'])).'","'.trim(addslashes($objArray['deliver_to'])).'","'.trim(addslashes($objArray['supplier_mail'])).'","'.trim(addslashes($objArray['mobile_no'])).'","'.trim(addslashes($objArray['phone_no'])).'","'.trim(addslashes($objArray['area_code'])).'","'.trim(addslashes($objArray['extension'])).'","'.trim(addslashes($objArray['po_status'])).'","'.trim(addslashes($objArray['payment_status'])).'","'.trim(addslashes($objArray['pincode'])).'","'.trim(addslashes($objArray['created_by'])).'","'.trim(addslashes($objArray['created_date'])).'","'.trim(addslashes($objArray['created_time'])).'","'.trim(addslashes($objArray['timestamp'])).'","'.trim(addslashes($objArray['remarks'])).'","1")';
$this->ExecuteQuery($InsQuery, 'insert');

 $SelCompany1 = 'SELECT * FROM '.$tbl.'group_address WHERE `company_name` ="'.trim(addslashes($objArray['deliver_to'])).'"';
	 $Comtype1 = $this->ExecuteQuery($SelCompany1, "select");

 $UpQuery4 = 'UPDATE `'.$tbl.'po_master` SET  `supplier_address` = "'.$Comtype1[0]['del_address'].'",`supplier_address1` = "'.$Comtype1[0]['del_address1'].'",`area` = "'.$Comtype1[0]['del_area'].'",`city` = "'.$Comtype1[0]['del_city'].'",`pincode` = "'.$Comtype1[0]['del_pincode'].'" WHERE `po_no` ="'.trim(addslashes($objArray['po_no'])).'"'; 
 $this->ExecuteQuery($UpQuery4, 'update');
 			
if($objArray['item_type']='Product')
{
$InsQuery1='INSERT INTO `'.$tbl.'po_details`(`po_no`,`item_type`,`item_name`,`item_price`,`item_quantity`,`item_sub`,`item_tax_per`,`item_tax_value`,`item_total_price`,`created_by`,`item_specification`,`item_code`,`created_date`,`created_time`,`timestamp_value`, `remarks`,`status`) VALUES("'.trim(addslashes($objArray['po_no'])).'","'.trim(addslashes($objArray['item_type'])).'","'.trim(addslashes($objArray['product_desc'])).'","'.trim(addslashes($objArray['item_price'])).'","'.trim(addslashes($objArray['item_quantity'])).'","'.trim(addslashes($objArray['item_sub'])).'","'.trim(addslashes($objArray['item_tax_per'])).'","'.trim(addslashes($objArray['item_tax_value'])).'","'.trim(addslashes($objArray['item_total_price'])).'","'.trim(addslashes($objArray['created_by'])).'","'.trim(addslashes($objArray['item_specification'])).'","'.trim(addslashes($objArray['item_code'])).'","'.trim(addslashes($objArray['created_date'])).'","'.trim(addslashes($objArray['created_time'])).'","'.trim(addslashes($objArray['timestamp'])).'","'.trim(addslashes($objArray['remarks'])).'","1")';
$this->ExecuteQuery($InsQuery1, 'insert');
}
 elseif($objArray['item_type']='Material')
 {
  $InsQuery1='INSERT INTO `'.$tbl.'po_details`(`po_no`,`item_type`,`item_name`,`item_price`,`item_quantity`,`item_tax_per`,`item_sub`,`item_tax_value`,`item_total_price`,`created_by`,`item_specification`,`item_code`,`created_date`,`created_time`,`timestamp_value`, `remarks`,`status`) VALUES("'.trim(addslashes($objArray['po_no'])).'","'.trim(addslashes($objArray['item_type'])).'","'.trim(addslashes($objArray['material_name'])).'","'.trim(addslashes($objArray['item_price'])).'","'.trim(addslashes($objArray['item_quantity'])).'","'.trim(addslashes($objArray['item_tax_per'])).'","'.trim(addslashes($objArray['item_sub'])).'","'.trim(addslashes($objArray['item_tax_value'])).'","'.trim(addslashes($objArray['item_total_price'])).'","'.trim(addslashes($objArray['created_by'])).'","'.trim(addslashes($objArray['item_specification'])).'","'.trim(addslashes($objArray['item_code'])).'","'.trim(addslashes($objArray['created_date'])).'","'.trim(addslashes($objArray['created_time'])).'","'.trim(addslashes($objArray['timestamp'])).'","'.trim(addslashes($objArray['remarks'])).'","1")';
$this->ExecuteQuery($InsQuery1, 'insert');

 }
 }
 
 }
 
  else
 {
  $UpQuery = 'UPDATE `'.$tbl.'po_master` SET `po_no` = "'.trim($objArray['po_no']).'",`quote_date` = "'.trim($objArray['quote_date']).'",`quote_ref_id` = "'.trim($objArray['quote_ref_id']).'",`supplier_code` = "'.trim($objArray['supplier_code']).'",`supplier_company_name` = "'.trim($objArray['supplier_company']).'",`contact_person` = "'.trim($objArray['contact_person']).'",`supplier_mobile_no` = "'.trim($objArray['mobile_no']).'", `supplier_address` = "'.trim($objArray['address']).'",`supplier_address1` = "'.trim($objArray['address1']).'",`area` = "'.trim($objArray['area']).'",`city` = "'.trim($objArray['city']).'", `area_code` = "'.trim($objArray['area_code']).'",`phone_no` = "'.trim($objArray['phone_no']).'",`extension` = "'.trim($objArray['extension']).'",`landmark` = "'.trim($objArray['landmark']).'",`pincode` = "'.trim($objArray['pincode']).'",`po_status` = "'.trim($objArray['po_status']).'",`payment_status` = "'.trim($objArray['payment_status']).'",`supplier_email` = "'.trim($objArray['supplier_mail']).'", `remarks` = "'.trim($objArray['remarks']).'",`created_by` = "'.trim($objArray['created_by']).'", `created_date` = "'.trim($objArray['created_date']).'", `created_time` = "'.trim($objArray['created_time']).'", `timestamp_value` = "'.trim($objArray['timestamp']).'",`status` = "1" WHERE `po_no` ="'.trim($objArray['po_no']).'"'; 
  $this->ExecuteQuery($UpQuery, 'update');
if($objArray['item_type']='Product')
{
$InsQuery1='INSERT INTO `'.$tbl.'po_details`(`po_no`,`item_type`,`item_name`,`item_price`,`item_quantity`,`item_tax_per`,`item_tax_value`,`item_total_price`,`created_by`,`item_specification`,`item_code`,`created_date`,`created_time`,`timestamp_value`, `remarks`,`status`) VALUES("'.trim(addslashes($objArray['po_no'])).'","'.trim(addslashes($objArray['item_type'])).'","'.trim(addslashes($objArray['product_desc'])).'","'.trim(addslashes($objArray['item_price'])).'","'.trim(addslashes($objArray['item_quantity'])).'","'.trim(addslashes($objArray['item_tax_per'])).'","'.trim(addslashes($objArray['item_tax_value'])).'","'.trim(addslashes($objArray['item_total_price'])).'","'.trim(addslashes($objArray['created_by'])).'","'.trim(addslashes($objArray['item_specification'])).'","'.trim(addslashes($objArray['item_code'])).'","'.trim(addslashes($objArray['created_date'])).'","'.trim(addslashes($objArray['created_time'])).'","'.trim(addslashes($objArray['timestamp'])).'","'.trim(addslashes($objArray['remarks'])).'","1")';
$this->ExecuteQuery($InsQuery1, 'insert');
}
 elseif($objArray['item_type']='Material')
 {
 $InsQuery1='INSERT INTO `'.$tbl.'po_details`(`po_no`,`item_type`,`item_name`,`item_price`,`item_quantity`,`item_tax_per`,`item_tax_value`,`item_total_price`,`created_by`,`item_specification`,`item_code`,`created_date`,`created_time`,`timestamp_value`, `remarks`,`status`) VALUES("'.trim(addslashes($objArray['po_no'])).'","'.trim(addslashes($objArray['item_type'])).'","'.trim(addslashes($objArray['material_name'])).'","'.trim(addslashes($objArray['item_price'])).'","'.trim(addslashes($objArray['item_quantity'])).'","'.trim(addslashes($objArray['item_tax_per'])).'","'.trim(addslashes($objArray['item_tax_value'])).'","'.trim(addslashes($objArray['item_total_price'])).'","'.trim(addslashes($objArray['created_by'])).'","'.trim(addslashes($objArray['item_specification'])).'","'.trim(addslashes($objArray['item_code'])).'","'.trim(addslashes($objArray['created_date'])).'","'.trim(addslashes($objArray['created_time'])).'","'.trim(addslashes($objArray['timestamp'])).'","'.trim(addslashes($objArray['remarks'])).'","1")';
$this->ExecuteQuery($InsQuery1, 'insert');

 }
 }
header('Location:' .$_SERVER['PHP_SELF'].'?succs_msg_for_insert'."&"."po_no=".$_POST['po_no']);
return true;
}
/**************************************************/
  function ChkDupliPo($po_no, $Ident=''){
  
global $objSmarty,$config,$_POST;
$tbl = $config['DBPrefix'];
		$SelQuery	= 'SELECT * FROM `'.$tbl.'po_master` WHERE `po_no` = "'.$po_no.'" Limit 0,1';
		$PODetail = $this->ExecuteQuery($SelQuery, 'select');
  
		if(!empty($PODetail) && is_array($PODetail))
		   return false;
		else
		  return true;
 }
/*********************************************Delivery Address/*************************************/
function DeliveryType()
{
$por_id = base64_decode($_GET["po_no"]);
 global $objSmarty,$config;
$tbl = $config['DBPrefix'];
			 $SelDelivery = 'SELECT * FROM '.$tbl.'po_master WHERE `po_no` ="'.$por_id.'" AND status="1"';
			 $Deltype = $this->ExecuteQuery($SelDelivery, "select");
			 $objSmarty->assign('Deltype',$Deltype);
			 return $Deltype;
}
/************************************Follow Up/************************************************************/
function FollowupType()
{
$por_id = base64_decode($_GET["po_no"]);
 global $objSmarty,$config;
$tbl = $config['DBPrefix'];
			 $SelFollow = 'SELECT * FROM '.$tbl.'po_followup WHERE `po_no` ="'.$por_id.'" AND status="1"';
			 $Foltype = $this->ExecuteQuery($SelFollow, "select");
			 $objSmarty->assign('Foltype',$Foltype);
			 return $Foltype;
}
/**********************************function ListView/*******************************************************/
function ListPO()
{
global $objSmarty, $config;
$tbl = $config['DBPrefix'];
		
			$SelQuery='SELECT '.$tbl.'po_master.* FROM `'.$tbl.'po_master`WHERE '.$tbl.'po_master.status="1" ORDER BY '.$tbl.'po_master.po_no DESC';
			$ListView = $this->ExecuteQuery($SelQuery, "select");
			$objSmarty->assign('ListView', $ListView);
			return $ListView;

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

/*************************************function Delete/********************************************************************/
 function DeletePO($objArray='')
 {
global $objSmarty, $config;
$tbl = $config['DBPrefix'];
			$DelQuery = 'update `'.$tbl.'po_master` set `status` = 0 where `po_no` ="'.$_GET['po_no'].'"';
			$this->ExecuteQuery($DelQuery, 'update');
			//$objSmarty->assign('SuccessMessage', 'PO Deleted Successfully');
			header('Location:' .$_SERVER['PHP_SELF'].'?succs_msg_for_del');
           

 }
  /*************************************function Delete/********************************************************************/
 function DeletePODetail($CatIdent,$CusIdent)
 {
 $slno = base64_decode($CatIdent);
print_r($CatIdent);	
print_r($CusIdent);
global $objSmarty, $config;
$tbl = $config['DBPrefix'];
$DelQuery = 'DELETE FROM `'.$tbl.'po_details` WHERE `sl_no`="'.$slno.'"';
			$this->ExecuteQuery($DelQuery, 'delete');
			header('Location:' .$_SERVER['PHP_SELF'].'?succs_msg_for_del'."&"."po_no=".$CusIdent);
           

 }
/************************************Function List Edit/*********************************************************/
function ListMast($objArray)
 { 
 $por_id = base64_decode($_GET["po_no"]);   
global $objSmarty, $config;
$tbl = $config['DBPrefix'];
			$SelQuery = 'SELECT '.$tbl.'po_master.* FROM `'.$tbl.'po_master` WHERE '.$tbl.'po_master.po_no="'.$por_id.'"';   
			$ListViews = $this->ExecuteQuery($SelQuery, "select");
			$objSmarty->assign('ListViews', $ListViews);
			return $ListViews;

 }
 /**********************************List/**********************************************************************/
 function ListDetails($objArray)
 {
 $por_id = base64_decode($_GET["po_no"]);
global $objSmarty, $config;
$tbl = $config['DBPrefix'];
			$SelQuery = 'SELECT * FROM `'.$tbl.'po_details` WHERE po_no="'.$por_id.'"';
			$ListView1 = $this->ExecuteQuery($SelQuery, "select");
			$objSmarty->assign('ListView1', $ListView1);
			return $ListView1;

 }
  /****************************************************Time Stamp Value As Date And Time Form Master/****************************************/
 
  function DateStamp()
 {
global $objSmarty, $config;
$tbl = $config['DBPrefix'];
$por_id = base64_decode($_GET["po_no"]);
			 $SelQuery = 'SELECT Date(timestamp_value) as Date from '.$tbl.'po_master WHERE po_no="'.$por_id.'"';
			 $Date_Stamp = $this->ExecuteQuery($SelQuery, "select");
			  //print $Date;
			 $objSmarty->assign('Date_Stamp', $Date_Stamp);
			 return $Date_Stamp;
			 
}

  function TimeStamp()
  {
global $objSmarty, $config;
$tbl = $config['DBPrefix'];
$por_id = base64_decode($_GET["po_no"]);
			 $SelQuery1 = 'SELECT  Time(timestamp_value) as Time from '.$tbl.'po_master WHERE po_no="'.$por_id.'"';
			 $Time_Stamp = $this->ExecuteQuery($SelQuery1, "select");
			 $objSmarty->assign('Time_Stamp', $Time_Stamp);
			 return $Time_Stamp;
			

 }
 /***********************************Function Edit/***************************************************************************/
 
 function EditPO($objArray="")
 {
global $objSmarty,$_REQUEST,$_POST;
global $objSmarty, $config;
$tbl = $config['DBPrefix'];
 
			if(!$objArray['po_no']){
			$objSmarty->assign('ErrorMessage', 'PO Number should not be blank');
			return false;
			}elseif(!$objArray['po_date']){
			$objSmarty->assign('ErrorMessage', 'PO Date should not be blank');
			return false;
			}elseif(!$objArray['po_status']){
			$objSmarty->assign('ErrorMessage', 'PO Status should not be blank');
			return false;
			}elseif(!$objArray['supplier_company']){
			$objSmarty->assign('ErrorMessage', 'Supplier Company Name should not be blank');
			return false;
			}elseif(!$objArray['quote_ref_id']){
			$objSmarty->assign('ErrorMessage', 'Qoute Reff Id should not be blank');
			return false;
			}elseif((!$objArray['mobile_no']) && (!$objArray['phone_no'])){
			$objSmarty->assign('ErrorMessage', 'Mobile Number or Phone No should not be blank');
			return false;
			}elseif(!$objArray['address']){
			$objSmarty->assign('ErrorMessage', 'Address should not be blank');
			return false;
			}elseif(!$objArray['item_type']){
			$objSmarty->assign('ErrorMessage', 'Item Type should not be blank');
			return false;
			}elseif(!$objArray['item_tax_per']){
			$objSmarty->assign('ErrorMessage', 'Item Tax per should not be blank');
			return false;
			}elseif(!$objArray['item_tax_value']){
			$objSmarty->assign('ErrorMessage', 'Tax value should not be blank');
			return false;
			}elseif(!$objArray['item_price']){
			$objSmarty->assign('ErrorMessage', 'Item Price should not be blank');
			return false;
			}elseif(!$objArray['po_date']){
			$objSmarty->assign('ErrorMessage', 'PO Date should not be blank');
			return false;
			}elseif(!$objArray['city']){
			$objSmarty->assign('ErrorMessage', 'City Field should not be blank');
			return false;
			}elseif(!$objArray['supplier_code']){
			$objSmarty->assign('ErrorMessage', 'Supplier Code Field should not be blank');
			return false;
			}elseif(!$objArray['supplier_mail']){
			$objSmarty->assign('ErrorMessage', 'Supplier Mail should not be blank');
			return false;
			}elseif(!$objArray['item_code']){
			$objSmarty->assign('ErrorMessage', 'Item Code should not be blank');
			return false;
			}elseif(!$objArray['item_quantity']){
			$objSmarty->assign('ErrorMessage', 'Item Quantity Field should not be blank');
			return false;
			}elseif(!$objArray['item_specification']){
			$objSmarty->assign('ErrorMessage', 'Item Specification Field should not be blank');
			return false;
			}
			$objSmarty->assign('po_no', $objArray['po_no']);
			if($objArray['po_no'] && $objArray['supplier_company']){
			

   $UpQuery = 'UPDATE `'.$tbl.'po_master` SET `po_no` = "'.trim($objArray['po_no']).'",`quote_date` = "'.trim($objArray['quote_date']).'",`quote_ref_id` = "'.trim($objArray['quote_ref_id']).'",`supplier_code` = "'.trim($objArray['supplier_code']).'",`supplier_company_name` = "'.trim($objArray['supplier_company']).'",`contact_person` = "'.trim($objArray['contact_person']).'",`supplier_mobile_no` = "'.trim($objArray['mobile_no']).'", `supplier_address` = "'.trim($objArray['address']).'",`supplier_address1` = "'.trim($objArray['address1']).'",`area` = "'.trim($objArray['area']).'",`deliver_to` = "'.trim($objArray['deliver_to']).'",`city` = "'.trim($objArray['city']).'", `area_code` = "'.trim($objArray['area_code']).'",`phone_no` = "'.trim($objArray['phone_no']).'",`extension` = "'.trim($objArray['extension']).'",`landmark` = "'.trim($objArray['landmark']).'",`pincode` = "'.trim($objArray['pincode']).'",`po_status` = "'.trim($objArray['po_status']).'",`payment_status` = "'.trim($objArray['payment_status']).'",`supplier_email` = "'.trim($objArray['supplier_mail']).'", `remarks` = "'.trim($objArray['remarks']).'",`created_by` = "'.trim($objArray['created_by']).'", `created_date` = "'.trim($objArray['created_date']).'", `created_time` = "'.trim($objArray['created_time']).'", `timestamp_value` = "'.trim($objArray['timestamp']).'",`status` = "1" WHERE `po_no` ="'.trim($objArray['po_no']).'"'; 
$this->ExecuteQuery($UpQuery, 'update');

if($objArray['item_type']='Product')
{
 $InsQuery2='INSERT INTO `'.$tbl.'po_details`(`po_no`,`item_type`,`item_name`,`item_price`,`item_quantity`,`item_sub`,`item_tax_per`,`item_tax_value`,`item_total_price`,`created_by`,`item_specification`,`item_code`,`created_date`,`created_time`,`timestamp_value`, `remarks`,`status`) VALUES("'.trim(addslashes($objArray['po_no'])).'","'.trim(addslashes($objArray['item_type'])).'","'.trim(addslashes($objArray['product_desc'])).'","'.trim(addslashes($objArray['item_price'])).'","'.trim(addslashes($objArray['item_quantity'])).'","'.trim(addslashes($objArray['item_sub'])).'","'.trim(addslashes($objArray['item_tax_per'])).'","'.trim(addslashes($objArray['item_tax_value'])).'","'.trim(addslashes($objArray['item_total_price'])).'","'.trim(addslashes($objArray['created_by'])).'","'.trim(addslashes($objArray['item_specification'])).'","'.trim(addslashes($objArray['item_code'])).'","'.trim(addslashes($objArray['created_date'])).'","'.trim(addslashes($objArray['created_time'])).'","'.trim(addslashes($objArray['timestamp'])).'","'.trim(addslashes($objArray['remarks'])).'","1")';
 $this->ExecuteQuery($InsQuery2, 'insert');
}
 elseif($objArray['item_type']='Material')
 {
  $InsQuery2='INSERT INTO `'.$tbl.'po_details`(`po_no`,`item_type`,`item_name`,`item_price`,`item_quantity`,`item_tax_per`,`item_tax_value`,`item_total_price`,`created_by`,`item_specification`,`item_code`,`created_date`,`created_time`,`timestamp_value`, `remarks`,`status`) VALUES("'.trim(addslashes($objArray['po_no'])).'","'.trim(addslashes($objArray['item_type'])).'","'.trim(addslashes($objArray['material_name'])).'","'.trim(addslashes($objArray['item_price'])).'","'.trim(addslashes($objArray['item_quantity'])).'","'.trim(addslashes($objArray['item_tax_per'])).'","'.trim(addslashes($objArray['item_tax_value'])).'","'.trim(addslashes($objArray['item_total_price'])).'","'.trim(addslashes($objArray['created_by'])).'","'.trim(addslashes($objArray['item_specification'])).'","'.trim(addslashes($objArray['item_code'])).'","'.trim(addslashes($objArray['created_date'])).'","'.trim(addslashes($objArray['created_time'])).'","'.trim(addslashes($objArray['timestamp'])).'","'.trim(addslashes($objArray['remarks'])).'","1")';
$this->ExecuteQuery($InsQuery2, 'insert');

 }
header('Location:' .$_SERVER['PHP_SELF'].'?succs_msg_for_insert'."&"."po_no=".$_GET['po_no']);
return true;

  }
 }
	/******************************************************************/
	function AjaxGetAddressDetails()
 {
global $objSmarty,$config;
$tbl = $config['DBPrefix'];

		 $SelQuery = 'SELECT * FROM '.$tbl.'vendor_master WHERE vendor_company_name ="'.$_GET['supplier_company'].'"' ;
		 $LDList		= $this->ExecuteQuery($SelQuery, "select");	
		
		//print_r($LDList);
		$SelQuery_Add_Dtls = 'SELECT * FROM '.$tbl.'Vendor_address_details WHERE vendor_id ="'.$LDList[0]['vendor_id'].'" AND `area` ="'.$_GET['area'].'"' ;
		$LDList_Add_Dtls   = $this->ExecuteQuery($SelQuery_Add_Dtls, "select");	
		//print_r($LDList_Add_Dtls);		
		foreach($LDList_Add_Dtls as $keys=>$value)	
		{
         echo $LDList_Add_Dtls[$keys]["address"]."_".$LDList_Add_Dtls[$keys]["address1"]."_".$LDList_Add_Dtls[$keys]["landmark"]."_".$LDList_Add_Dtls[$keys]["city"]."_".$LDList_Add_Dtls[$keys]["pincode"]."_".$LDList_Cnt_Dtls[$keys]["mobile_no"]."_".$LDList_Cnt_Dtls[$keys]["area"]."|$|";
}
}
/****************************************************************************************************************************************************/
function AjaxGetVendorDetails($objArray="")
 {
global $objSmarty,$config;
$tbl = $config['DBPrefix'];

		$SelQuery = 'SELECT * FROM '.$tbl.'vendor_master WHERE vendor_company_name ="'.$_GET['supplier_company'].'"' ;
		 $LDList		= $this->ExecuteQuery($SelQuery, "select");	
		//print_r($LDList);
		$SelQuery_Cnt_Dtls = 'SELECT * FROM '.$tbl.'vendor_contact_details WHERE vendor_id ="'.$LDList[0]['vendor_id'].'" AND status ="1"' ;
		$LDList_Cnt_Dtls   = $this->ExecuteQuery($SelQuery_Cnt_Dtls, "select");	
		
		/*For area*/
		$SelQuery_Add_Dtls = 'SELECT * FROM '.$tbl.'vendor_address_details WHERE vendor_id ="'.$LDList[0]['vendor_id'].'" AND status ="1"' ;
		$LDList_Add_Dtls   = $this->ExecuteQuery($SelQuery_Add_Dtls, "select");	

	foreach($LDList_Cnt_Dtls as $keys=>$value)	
	{
        $Cstmr_Dtls_array = '<option value="'.$LDList_Cnt_Dtls[$keys]["vendor_contact_person_fname"]. " " .$LDList_Cnt_Dtls[$keys]["vendor_contact_person_lname"].'">'.$LDList_Cnt_Dtls[$keys]["vendor_contact_person_fname"]. " " .$LDList_Cnt_Dtls[$keys]["vendor_contact_person_lname"]." ( ".$LDList_Add_Dtls[$keys]["area"]." ) ".'</option>';
		
	 echo $Cstmr_Dtls_array."|$|".$LDList_Cnt_Dtls[$keys]["vendor_contact_person_fname"]. " " .$LDList_Cnt_Dtls[$keys]["vendor_contact_person_lname"]."_".$LDList_Cnt_Dtls[$keys]["mobile_no"]."_".$LDList_Add_Dtls[$keys]["area"]."_".$LDList_Cnt_Dtls[$keys]["mail_id"]."_".$LDList_Cnt_Dtls[$keys]["area_code"]."_".$LDList_Cnt_Dtls[$keys]["phone_no"]."_".$LDList_Cnt_Dtls[$keys]["extension"]."|$|";
		}
		echo "|SUPID|".$LDList[0]['vendor_id'];
		//print_r($Cstmr_Dtls_array);
}
/******************************************************************************************************************************************************/
  function SelectProduct($objArray="")
  {
			global $objSmarty,$config;
			$tbl = $config['DBPrefix'];

			$SelQuery = 'SELECT * FROM '.$tbl.'product_master WHERE item_name="'.$_GET['product_desc'].'"';
			$Product = $this->ExecuteQuery($SelQuery, "select");
			$objSmarty->assign('Product', $Product);
		//print_r($Product);exit;
				foreach($Product as $keys=>$value)	
					{
					echo $Product[$keys]["item_code"]."_".$Product[$keys]["total"]."_".$Product[$keys]["item_description"]."|$|";  
					}
}
/***************************************************************  Material Auto Suggest ***********************************************************************/
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
 }  /********************************************** PO FollowUp/ **************************************************/
function InsertFollowUp($objArray="")
 { 
global $objSmarty,$config,$_POST;
$tbl = $config['DBPrefix'];
$por_id = base64_decode($_GET["po_no"]);
            if(!$objArray['po_no']){
			$objSmarty->assign('ErrorMessage', 'Po No should not be blank');
			return false;
			}elseif(!$objArray['po_status'])
			{$objSmarty->assign('ErrorMessage', 'Po Status should not be blank');
			return false;
			}elseif(!$objArray['po_date']){
			$objSmarty->assign('ErrorMessage', 'Po Date should not be blank');
			return false;
			}elseif(!$objArray['created_date']){
			$objSmarty->assign('ErrorMessage', 'Created Date should not be blank');
			return false;
			}elseif(!$objArray['remarks']){
			$objSmarty->assign('ErrorMessage', 'Remarks should not be blank');
			return false;
			}
			$objSmarty->assign('po_no', $objArray['po_no']);
			if($objArray['po_no'] && $objArray['po_no']){
			
		//	echo"i am here.....";
			
$InsQuery = 'INSERT INTO `'.$tbl.'po_followup`(`po_no`,`po_status`,`po_date`,`created_by`,`created_date`,`created_time`,`timestamp_value`, `remarks`, `status`) VALUES("'.trim(addslashes($objArray['po_no'])).'","'.trim(addslashes($objArray['po_status'])).'","'.trim(addslashes($objArray['po_date'])).'","'.trim(addslashes($objArray['created_by'])).'","'.trim(addslashes($objArray['created_date'])).'","'.trim(addslashes($objArray['created_time'])).'","'.trim(addslashes($objArray['timestamp'])).'","'.trim(addslashes($objArray['remarks'])).'","1")';
$this->ExecuteQuery($InsQuery, 'insert');

 $UpQuery2 = 'Update `'.$tbl.'po_master` SET `po_status` = "'.trim($objArray['po_status']).'" WHERE `po_no`="'.trim($objArray['po_no']).'"';
$this->ExecuteQuery($UpQuery2, 'update');
}
header('Location:' .$_SERVER['PHP_SELF'].'?succs_msg_for_insert'."&"."po_no=".trim($objArray['po_no']));
return true;

}
/*****************************************Add Address/************************************************************/
function InsertAddress($objArray="")
 {
global $objSmarty,$config,$_POST;
$tbl = $config['DBPrefix'];
$por_id = base64_decode($_GET["po_no"]);
            if(!$objArray['address']){
			$objSmarty->assign('ErrorMessage', 'Po No should not be blank');
			return false;
			}elseif(!$objArray['area'])
			{$objSmarty->assign('ErrorMessage', 'Po Status should not be blank');
			return false;
			}elseif(!$objArray['city']){
			$objSmarty->assign('ErrorMessage', 'Created By should not be blank');
			return false;
			}elseif(!$objArray['pincode']){
			$objSmarty->assign('ErrorMessage', 'Created Date should not be blank');
			return false;
			}
			$objSmarty->assign('po_no', $objArray['po_no']);
			if($objArray['po_no'] && $objArray['po_no']){
			
		//	echo"i am here.....";
			
echo  $UpQuery3 = 'Update `'.$tbl.'po_master` SET `supplier_address` = "'.trim($objArray['address']).'",`supplier_address1` = "'.trim($objArray['address1']).'",`area` = "'.trim($objArray['area']).'",`city` = "'.trim($objArray['city']).'",`pincode` = "'.trim($objArray['pincode']).'",`created_by` = "'.trim($objArray['created_by']).'",`created_date` = "'.trim($objArray['created_date']).'",`created_time` = "'.trim($objArray['created_time']).'",`timestamp_value` = "'.trim($objArray['timestamp']).'" WHERE `po_no`="'.$por_id.'"';
$this->ExecuteQuery($UpQuery3, 'update');
}
header('Location:' .$_SERVER['PHP_SELF'].'?succs_msg_for_insert'."&"."po_no=".$por_id);
return true;
}
 /**************************************Get the Static Content list/************************************************************/
 	function GetPoView($objArray="")  {
		 global $objSmarty,$_REQUEST,$_POST;
		global $objSmarty, $config;
		$tbl = $config['DBPrefix'];
		$objSmarty->assign('c_id',$_GET['po_no']);
		$SelQuery = 'SELECT * FROM `'.$tbl.'po_master` WHERE po_no ="'.$_GET['po_no'].'"' ;
		//echo $SelQuery;
		$LDList		= $this->ExecuteQuery($SelQuery, "select");
		 if(!empty($LDList) && is_array($LDList))
		{
			$objSmarty->assign("LDList2",$LDList);
			return $LDList2;
		}
		else{
			return false;
		}
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

$InsQuery = 'INSERT INTO `'.$tbl.'po_mail`(`po_no`,`vendor_id`,mail_from,`mail_to`,`mail_cc`,`mail_subject`,`message`,`mail_attachment1`,`mail_attachment2`,`mail_attachment3`,`created_by`,`created_date`,`created_time`,`status`) VALUES("'.trim(addslashes($objArray['po_no'])).'","'.trim(addslashes($objArray['vendor_id'])).'","'.trim(addslashes($objArray['mail_from'])).'","'.trim(addslashes($objArray['mail_id2'])).'","'.trim(addslashes($objArray['cc'])).'","'.trim(addslashes($objArray['subject'])).'","'.trim(addslashes($objArray['message'])).'","'.$f1.'","'.$f2.'","'.$f3.'","'.trim(addslashes($objArray['created_by'])).'","'.trim(addslashes($objArray['created_date'])).'","'.trim(addslashes($objArray['created_time'])).'","1")';
$this->ExecuteQuery($InsQuery, 'insert');

		$SelQuery = 'SELECT * From '.$tbl.'user_master WHERE username="'.trim(addslashes($objArray['created_by'])).'"';
		$UserMas = $this->ExecuteQuery($SelQuery, "select");
		$objSmarty->assign('UserMas', $UserMas);
	/************************************Query for Customer Name************************************/
		$SelQuery1 = 'SELECT * From '.$tbl.'po_master WHERE po_no="'.$_GET['po_no'].'"';
		$EnqMail = $this->ExecuteQuery($SelQuery1, "select");
		$objSmarty->assign('EnqMail', $EnqMail);
	/*********************************************************************************************/
/*		$SelQuery2 = 'SELECT * From '.$tbl.'sales_order_mail WHERE po_no="'.$_GET['po_no'].'"';
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
header('Location:' .$_SERVER['PHP_SELF'].'?succs_msg_for_insert'."&"."po_no=".$_GET['po_no']."&"."supplier_code=".$_GET['supplier_code']);

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
 /***********************************************Sales Print/*********************************************/
 function PoPrint($objArray)
 {
 $p_id = base64_decode($_GET["po_no"]);
$enq_id = base64_decode($_GET["vendor_id"]);
 		 global $objSmarty,$config;
			$tbl = $config['DBPrefix'];
	 $SelQuery4 = 'SELECT '.$tbl.'product_master.*,'.$tbl.'po_details.* FROM `'.$tbl.'product_master`,`'.$tbl.'po_details` WHERE '.$tbl.'po_details.item_name='.$tbl.'product_master.item_name AND '.$tbl.'po_details.po_no="'.$p_id.'" AND '.$tbl.'po_details.status="1"';
			$MailView = $this->ExecuteQuery($SelQuery4, "select");
			$objSmarty->assign('MailView', $MailView);
			return $MailView;

 }
 /*****************************************************************************************************/
   function PoMgmt($objArray="")
 {
			global $objSmarty,$config;
			$tbl = $config['DBPrefix'];
			$enq_id = base64_decode($_GET["po_no"]);
			$SelQuery = 'SELECT * FROM `'.$tbl.'po_master` WHERE po_no="'.$enq_id.'" AND `status` = 1';
			$Enquiryt = $this->ExecuteQuery($SelQuery, 'select');
			$objSmarty->assign('Enquiryt', $Enquiryt);


		$SelQuery1 = 'SELECT * FROM `'.$tbl.'group_address` WHERE company_name = "'.$Enquiryt[0]['deliver_to'].'" AND status="1"';
		$DelAddress = $this->ExecuteQuery($SelQuery1, 'select');
		$objSmarty->assign('DelAddress', $DelAddress);
		return $DelAddress;
 }
  function ToAddress()
 {
 $p_id = base64_decode($_GET["po_no"]);
 		 global $objSmarty,$config;
			$tbl = $config['DBPrefix'];
		$p_id = base64_decode($_GET["po_no"]);
			 $SelQuery1 = 'SELECT * FROM `'.$tbl.'po_master` WHERE  po_no ="'.$p_id.'" AND status="1"';
			$AddressView = $this->ExecuteQuery($SelQuery1, "select");
			//print_r($AddressView);exit;
			$objSmarty->assign('AddressView', $AddressView);
			return $AddressView;

 }
  function ToAddress3()
 {
 $p_id = base64_decode($_GET["po_no"]);
 		 global $objSmarty,$config;
			$tbl = $config['DBPrefix'];
		//	$p_id = base64_decode($_GET["po_no"]);
		 $SelQuery1 = 'SELECT * FROM `'.$tbl.'po_details` WHERE  po_no ="'.$p_id.'" AND status="1"';
			$AddressView3 = $this->ExecuteQuery($SelQuery1, "select");
			//print_r($AddressView);exit;
			$objSmarty->assign('AddressView3', $AddressView3);
			return $AddressView3;

 }
 function add_Total()
{
 global $objSmarty,$config;
			$tbl = $config['DBPrefix'];
		$p_id = base64_decode($_GET["po_no"]);
  $SelQuery = 'SELECT sum(item_total_price) as Total from '.$tbl.'po_details WHERE po_no="'.$p_id.'"';
 $AddView = $this->ExecuteQuery($SelQuery, "select");
			//print_r($AddView);exit;
			$objSmarty->assign('AddView', $AddView);
			return $AddView;
}
function sub_Total()
{
 global $objSmarty,$config;
			$tbl = $config['DBPrefix'];
			$p_id = base64_decode($_GET["po_no"]);
			
			$SelQuery = 'SELECT  sum(item_sub) as s_Total from '.$tbl.'po_details WHERE po_no="'.$p_id.'"';
			$Adds = $this->ExecuteQuery($SelQuery, "select");
//			print_r($Adds[0][s_total]);exit;
			$objSmarty->assign('Adds', $Adds);
			return $Adds;
}
function tax_Total()
{
 global $objSmarty,$config;
			$tbl = $config['DBPrefix'];
			$p_id = base64_decode($_GET["po_no"]);
  $SelQuery = 'SELECT sum(item_tax_value) as tax from '.$tbl.'po_details WHERE po_no="'.$p_id.'"';
 $Add_tax = $this->ExecuteQuery($SelQuery, "select");
			//print_r($AddressView);exit;
			$objSmarty->assign('Add_tax', $Add_tax);
			return $Add_tax;
}
 function GetAccDetails($objArray="")
 {
			global $objSmarty,$config;
			$tbl = $config['DBPrefix'];
			$enq_id = base64_decode($_GET["po_no"]);
			$SelQuery = 'SELECT * FROM `'.$tbl.'po_master` WHERE po_no="'.$enq_id.'" AND `status` = 1';
			$Enquiryt = $this->ExecuteQuery($SelQuery, 'select');
			$objSmarty->assign('Enquiryt', $Enquiryt);


		$SelQuery1 = 'SELECT * FROM `'.$tbl.'company_master` WHERE company_name = "'.$Enquiryt[0]['deliver_to'].'" AND status="1"';
		$BankDetails = $this->ExecuteQuery($SelQuery1, 'select');
		$objSmarty->assign('BankDetails', $BankDetails);
		return $BankDetails;
 }
 function GetNumbers()
 {
 		 global $objSmarty,$config;
			$tbl = $config['DBPrefix'];
			$sales_id = base64_decode($_GET["vendor_id"]);
	        $SelQuery1 = 'SELECT * FROM `'.$tbl.'vendor_master` WHERE  vendor_id ="'.$sales_id.'" AND status="1"';
		    $AddressView2 = $this->ExecuteQuery($SelQuery1, "select");
			$objSmarty->assign('AddressView2', $AddressView2);
			return $AddressView2;
 }
   function SelectProDetail($objArray="")
 {
 
	global $objSmarty,$config;
	$tbl = $config['DBPrefix'];
	$SelQuery = 'SELECT * FROM `'.$tbl.'po_details` WHERE po_no="'.$_GET['po_no'].'" AND sl_no="'.$_GET['sl_no'].'" AND status="1"';
	$ProList2 = $this->ExecuteQuery($SelQuery, 'select');
	$objSmarty->assign('ProList2', $ProList2);
	//print_r($SalesList2);exit;
			
 }


}
?>


