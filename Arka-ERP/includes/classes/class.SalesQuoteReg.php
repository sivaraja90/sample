<?php

#####Class For Adding Content Management ######
class SalesQuoteReg extends MysqlFns{
 
 /* class constructor */
 function SalesQuoteReg(){
 $this->LDDisplayPath= $config['SiteGlobalPath']."class.SalesQuoteReg.php";
	global $config;
$enq_id = base64_decode($_GET["enquiry_id"]); 
global $objSmarty,$config;
	$tbl = $config['DBPrefix'];
	$this->MysqlFns();
	$this->Limit = 20;
	
	$enq_id = base64_decode($_GET["enquiry_id"]);
	$salesrevise_id = base64_decode($_GET["revised_version"]);

   /**************************************Sales Quote No Auto Increment*********************************************************/
   
			$SelQuerys1	= 'SELECT max(sales_quote_no) as last FROM `'.$tbl.'sales_quote_master` Limit 0,1';
			$SaleDetail	= $this->ExecuteQuery($SelQuerys1, 'select');
			if($SaleDetail[0]['last']!="")
			{
			$SaleDetail[0]['sales_quote_no'] = stripslashes($SaleDetail[0]['last']);
			$s_quote1 = preg_replace("/[^0-9\.]/", '', $SaleDetail[0]['sales_quote_no']);
			$s_quote1= $s_quote1 + 1;
			$str = str_split($SaleDetail[0]['last'],2);//SQ
			$s_quote = $str[0]. "" .$s_quote1;
			}
			else
			{
			$s_quote = "SQ1001";
			}
			if(isset($_GET['sales_quote_no'])){
			$objSmarty->assign('s_quote', $_GET['sales_quote_no']);
			}
			else{
				$objSmarty->assign('s_quote', $s_quote);
			}
			  $sales_quote_no = $_GET["sales_quote_no"];
	/*************************************Sale Revised Version/************************************************************************************/			
			$SelQuerys2	= 'SELECT max(revised_version) as last FROM `'.$tbl.'sales_quote_details` WHERE sales_quote_no="'.$_GET["sales_quote_no"].'" Limit 0,1';
			$RevDetail	= $this->ExecuteQuery($SelQuerys2, 'select');
			if($RevDetail[0]['last']!="")
			{
			$RevDetail[0]['revised_version'] = stripslashes($RevDetail[0]['last']);
			$r_version1 = preg_replace("/[^0-9\.]/", '', $RevDetail[0]['revised_version']);
			$r_version1= $r_version1 + 1;
			$len = strlen($r_version1);
			if($len==1)
				{
				 	$mid = "00";
				}
			elseif($len==2)
				{
				$mid = "00";
				}
			$str = str_split($RevDetail[0]['last'],3);
			$r_version = $str[0]. "" .$mid. "" .$r_version1;
			}
			else
			{
			$r_version = "REV1001";
			}
			if(isset($_GET['revised_version']))
			{	$revision = $_GET['revised_version'];
				$objSmarty->assign('r_version',++$revision);
			}
			else
			{
				$objSmarty->assign('r_version', $r_version);
			}
			

			$revised_version = $_GET["revised_version"];

/***********************************************************************************************/		
		$f1 = "products.txt";
			$uploadpath = $config['QuotePath'];
			$myfile = fopen($f1, "w") or die("Unable to open file!");
			$SelQuery1	= 'SELECT item_name FROM `'.$tbl.'product_master` WHERE status="1"';
			$CusList	= $this->ExecuteQuery($SelQuery1, 'select');
			
			if(!empty($CusList) && is_array($CusList))
			foreach($CusList as $key=>$value)
			{
			$CusList[$key]['item_name'] = stripslashes($CusList[$key]['item_name']);
			$names = $names.$CusList[$key]['item_name'].",";
			}
			fwrite($myfile, $names);
			fclose($myfile);
			
/*************************************************************************************************/
		$f2 = "material.txt";
			$uploadpath = $config['QuotePath'];
			$myfileMat = fopen($f2, "w") or die("Unable to open file!");
			$SelQuery2	= 'SELECT material_name FROM `'.$tbl.'material_master` WHERE status="1"';
			$MatList	= $this->ExecuteQuery($SelQuery2, 'select');
			//print_r($MatList);exit;
			
			if(!empty($MatList) && is_array($MatList))
			foreach($MatList as $key=>$value)
			{
			$MatList[$key]['material_name'] = stripslashes($MatList[$key]['material_name']);
			$Mat = $Mat.$MatList[$key]['material_name'].",";
			}
			fwrite($myfileMat, $Mat);
			fclose($myfileMat);	
 }
  /********************************************Validation for Sales Quote No/****************************************************************/
 function ChkDupliSale($sales_quote_no, $Ident=''){
//
$enq_id = base64_decode($_GET["enquiry_id"]); 
global $objSmarty,$config,$_POST;
$tbl = $config['DBPrefix'];
		$SelQuery	= 'SELECT * FROM `'.$tbl.'sales_quote_master` WHERE `sales_quote_no` = "'.$_GET["sales_quote_no"].'" Limit 0,1';
		$SalesDetail = $this->ExecuteQuery($SelQuery, 'select');
  
		if(!empty($SalesDetail) && is_array($SalesDetail))
		   return false;
		else
		  return true;
 }
 
  /********************************************Validation for Revised Version No/****************************************************************/
  function ChkDupliRev($revised_version, $Ident=''){

$enq_id = base64_decode($_GET["enquiry_id"]); 
global $objSmarty,$config,$_POST;
$tbl = $config['DBPrefix'];
		$SelQuery	= 'SELECT * FROM `'.$tbl.'sales_quote_master` WHERE `revised_version` = "'.$revised_version.'" Limit 0,1';
		$RevDetail = $this->ExecuteQuery($SelQuery, 'select');
  
		if(!empty($RevDetail) && is_array($RevDetail))
		   return false;
		else
		  return true;
 }
 
   /********************************************Select Enquiry Id/****************************************************************/
  function SelectId($objArray=""){

$enq_id = base64_decode($_GET["enquiry_id"]); 
global $objSmarty,$config,$_POST;
$tbl = $config['DBPrefix'];
		$SelQuery	= 'SELECT * FROM `'.$tbl.'sales_quote_master` WHERE `sales_quote_no` = "'.$_GET["sales_quote_no"].'"';
		$RevDetail = $this->ExecuteQuery($SelQuery, 'select');
		$objSmarty->assign('RevDetail' , $RevDetail);

  
 }
 /**********************************************Insert Sales Quote/**************************************************************/
function InsertSalesQuote($objArray="")
 {
$enq_id = base64_decode($_GET["enquiry_id"]); 
global $objSmarty,$config,$_POST;
$tbl = $config['DBPrefix'];

$revision = $_GET['revised_version'];
$Revise = ++$revision;

  if($this->ChkDupliSale(trim(addslashes($objArray['sales_quote_no'])))){
if(!$objArray['sales_quote_no']){
			$objSmarty->assign('ErrorMessage', 'Sales Quote Date should not be blank');
			return false;
			}elseif(!$objArray['quote_date']){
			$objSmarty->assign('ErrorMessage', 'Quote Date should not be blank');
			return false;
			}elseif(!$objArray['revised_version']){
			$objSmarty->assign('ErrorMessage', 'Revised Id should not be blank');
			return false;
			}elseif(!$objArray['company_name']){
			$objSmarty->assign('ErrorMessage', 'Company Name should not be blank');
			return false;
			}elseif(!$objArray['customer_id']){
			$objSmarty->assign('ErrorMessage', 'Customer Id should not be blank');
			return false;
			}elseif(!$objArray['contact_name']){
			$objSmarty->assign('ErrorMessage', 'Contact Person should not be blank');
			return false;
			}/*elseif(!$objArray['mobile_no']){
			$objSmarty->assign('ErrorMessage', 'Mobile No should not be blank');
			return false;
			}*/elseif(!$objArray['email']){
			$objSmarty->assign('ErrorMessage', 'Email Id should not be blank');
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
			}if(($objArray['item_type']=="Product"))
			{
			if(!$objArray['product_desc']){
			$objSmarty->assign('ErrorMessage', 'Product Description should not be blank');
			return false;
			}else{
			$objSmarty->assign('ErrorMessage', 'Material Description should not be blank');
			}
			}elseif(!$objArray['unit_basic']){
			$objSmarty->assign('ErrorMessage', 'Unit Basic should not be blank');
			return false;
			}elseif(!$objArray['quantity']){
			$objSmarty->assign('ErrorMessage', 'Quantity should not be blank');
			return false;
			}elseif(!$objArray['vat_value']){
			$objSmarty->assign('ErrorMessage', 'Vat Value should not be blank');
			return false;
			}elseif(!$objArray['vat_per']){
			$objSmarty->assign('ErrorMessage', 'Vat Percentage should not be blank');
			return false;
			}elseif(!$objArray['sub_total']){
			$objSmarty->assign('ErrorMessage', 'Sub Total should not be blank');
			return false;
			}elseif(!$objArray['total']){
			$objSmarty->assign('ErrorMessage', 'Total should not be blank');
			return false;
			}elseif(!$objArray['remarks']){
			$objSmarty->assign('ErrorMessage', 'Remarks should not be blank');
			return false;
			}
			$objSmarty->assign('sales_quote_no', $objArray['sales_quote_no']);
			if($objArray['sales_quote_no'] && $objArray['sales_quote_no']){
	
$InsQuery = 'INSERT INTO `'.$tbl.'sales_quote_master`(`sales_quote_no`,`salutation`,`item_type`,`quote_date`,`enquiry_id`,`revised_version`,`customer_id`, `company_name`, `customer_name`,`mobile_no`, `address`, `address1`, `area`,`city`,`pincode`,`phone_no`,`extension`,`area_code`,`email_id`,`item_basic`,`profit_per`,`profit_value`,`email_id1`,`sub_total`,`vat_value`,`vat_per`,`total`,`landmark`,`created_by`,`created_date`, `created_time`, `remarks`,`status`) VALUES("'.trim(addslashes($objArray['sales_quote_no'])).'","'.trim(addslashes($objArray['salutation'])).'","'.trim(addslashes($objArray['item_type'])).'","'.trim(addslashes($objArray['quote_date'])).'","'.trim(addslashes($objArray['enquiry_id'])).'","'.trim(addslashes($objArray['revised_version'])).'","'.trim(addslashes($objArray['customer_id'])).'","'.trim(addslashes($objArray['company_name'])).'","'.trim(addslashes($objArray['contact_name'])).'","'.trim(addslashes($objArray['mobile_no'])).'","'.trim(addslashes($objArray['address'])).'","'.trim(addslashes($objArray['address1'])).'","'.trim(addslashes($objArray['area'])).'","'.trim(addslashes($objArray['city'])).'","'.trim(addslashes($objArray['pincode'])).'","'.trim(addslashes($objArray['phone_no'])).'","'.trim(addslashes($objArray['extension'])).'","'.trim(addslashes($objArray['area_code'])).'","'.trim(addslashes($objArray['email'])).'","'.trim(addslashes($objArray['item_basic'])).'","'.trim(addslashes($objArray['profit_per'])).'","'.trim(addslashes($objArray['profit_value'])).'","'.trim(addslashes($objArray['email1'])).'","'.trim(addslashes($objArray['sub_total'])).'","'.trim(addslashes($objArray['vat_value'])).'","'.trim(addslashes($objArray['vat_per'])).'","'.trim(addslashes($objArray['total'])).'","'.trim(addslashes($objArray['landmark'])).'","'.trim(addslashes($objArray['created_by'])).'","'.trim(addslashes($objArray['created_date'])).'","'.trim(addslashes($objArray['created_date'])).'","'.trim(addslashes($objArray['remarks'])).'","1")';
$this->ExecuteQuery($InsQuery, 'insert');

$InsQuery2 = 'INSERT INTO `'.$tbl.'sales_quote_details`(`sales_quote_no`,`item_type`,`item_code`,`revised_version`,`enquiry_id`,`product_description`,`material_description`, `quantity`, `unit_basic`,`sub_total`,`vat_value`,`vat_per`,`item_basic`,`profit_per`,`profit_value`, `total`, `created_by`, `created_date`, `created_time`,`remarks`,`status`) VALUES("'.trim(addslashes($objArray['sales_quote_no'])).'","'.trim(addslashes($objArray['item_type'])).'","'.trim(addslashes($objArray['item_code'])).'","'.trim(addslashes($objArray['revised_version'])).'","'.trim(addslashes($objArray['enquiry_id'])).'","'.trim(addslashes($objArray['product_desc'])).'","'.trim(addslashes($objArray['material_name'])).'","'.trim(addslashes($objArray['quantity'])).'","'.trim(addslashes($objArray['unit_basic'])).'","'.trim(addslashes($objArray['sub_total'])).'","'.trim(addslashes($objArray['vat_value'])).'","'.trim(addslashes($objArray['vat_per'])).'","'.trim(addslashes($objArray['item_basic'])).'","'.trim(addslashes($objArray['profit_per'])).'","'.trim(addslashes($objArray['profit_value'])).'","'.trim(addslashes($objArray['total'])).'","'.trim(addslashes($objArray['created_by'])).'","'.trim(addslashes($objArray['created_date'])).'","'.trim(addslashes($objArray['created_time'])).'","'.trim(addslashes($objArray['remarks'])).'","1")';
$this->ExecuteQuery($InsQuery2, 'insert');

$InsQuery3= 'INSERT INTO `'.$tbl.'sale_term`(`sales_quote_no`,`revised_version`,`payment`,`delivery`,`validity`,`created_by`, `created_date`, `created_time`,`status`) VALUES("'.trim(addslashes($objArray['sales_quote_no'])).'","'.trim(addslashes($objArray['revised_version'])).'","'.trim(addslashes($objArray['payment'])).'","'.trim(addslashes($objArray['delivery'])).'","'.trim(addslashes($objArray['validity'])).'","'.trim(addslashes($objArray['created_by'])).'","'.trim(addslashes($objArray['created_date'])).'","'.trim(addslashes($objArray['created_time'])).'","1")';
$this->ExecuteQuery($InsQuery3, 'insert');


$Sub_Total = 'SELECT  SUM(sub_total) AS Sub FROM `'.$tbl.'sales_quote_details` WHERE sales_quote_no = "'.trim(addslashes($objArray['sales_quote_no'])).'" AND revised_version = "'.trim(addslashes($objArray['revised_version'])).'" AND `status`=1';
 $SelectSub = $this->ExecuteQuery($Sub_Total, "select");
 $objSmarty->assign('SelectSub', $SelectSub);

 $Tax_value = 'SELECT  SUM(vat_value) AS Tax FROM `'.$tbl.'sales_quote_details` WHERE sales_quote_no = "'.trim(addslashes($objArray['sales_quote_no'])).'" AND revised_version = "'.trim(addslashes($objArray['revised_version'])).'" AND `status`=1';
 $SelectTax = $this->ExecuteQuery($Tax_value, "select");
 $objSmarty->assign('SelectTax', $SelectTax);
 
 $Total_value = 'SELECT  SUM(total) AS Total FROM `'.$tbl.'sales_quote_details` WHERE sales_quote_no = "'.trim(addslashes($objArray['sales_quote_no'])).'" AND revised_version = "'.trim(addslashes($objArray['revised_version'])).'" AND `status`=1';
 $SelectTotal = $this->ExecuteQuery($Total_value, "select");
 $objSmarty->assign('SelectTotal', $SelectTotal);
 
$Profit_value = 'SELECT COUNT(profit_per) AS Count , SUM(profit_per) AS Profit FROM `'.$tbl.'sales_quote_details` WHERE sales_quote_no = "'.trim(addslashes($objArray['sales_quote_no'])).'" AND revised_version = "'.trim(addslashes($objArray['revised_version'])).'" AND `status`=1';
$SelectPro = $this->ExecuteQuery($Profit_value, "select");
$objSmarty->assign('SelectPro', $SelectPro);
$Count= $SelectPro[0]['Count'];
$Profit= $SelectPro[0]['Profit'];
$Avg = $Profit/$Count;

$UpQuery ='UPDATE `'.$tbl.'sales_quote_master`  SET `total` = "'.$SelectTotal[0]['Total'].'" , `sub_total` = "'.$SelectSub[0]['Sub'].'" ,`profit_per` = "'.$Avg.'" ,`vat_value` = "'.$SelectTax[0]['Tax'].'" WHERE `sales_quote_no` ="'.trim(addslashes($objArray['sales_quote_no'])).'" AND `revised_version` ="'.trim(addslashes($objArray['revised_version'])).'"';
$this->ExecuteQuery($UpQuery, 'update');

}
header('Location:' .$_SERVER['PHP_SELF'].'?enquiry_id='.trim(addslashes($objArray['enquiry_id'])).'&sales_quote_no='.trim(addslashes($objArray['sales_quote_no'])).'&revised_version='.trim(addslashes($objArray['revised_version'])).'&succs_msg_for_insert');
return true;
 }

else
{
$InsQuery2 = 'INSERT INTO `'.$tbl.'sales_quote_details`(`sales_quote_no`,`item_type`,`item_code`,`revised_version`,`enquiry_id`,`product_description`,`material_description`, `quantity`, `unit_basic`,`sub_total`,`vat_value`,`vat_per`,`item_basic`,`profit_per`,`profit_value`, `total`, `created_by`, `created_date`, `created_time`,`remarks`,`status`) VALUES("'.trim(addslashes($objArray['sales_quote_no'])).'","'.trim(addslashes($objArray['item_type'])).'","'.trim(addslashes($objArray['item_code'])).'","'.trim(addslashes($objArray['revised_version'])).'","'.trim(addslashes($objArray['enquiry_id'])).'","'.trim(addslashes($objArray['product_desc'])).'","'.trim(addslashes($objArray['material_name'])).'","'.trim(addslashes($objArray['quantity'])).'","'.trim(addslashes($objArray['unit_basic'])).'","'.trim(addslashes($objArray['sub_total'])).'","'.trim(addslashes($objArray['vat_value'])).'","'.trim(addslashes($objArray['vat_per'])).'","'.trim(addslashes($objArray['item_basic'])).'","'.trim(addslashes($objArray['profit_per'])).'","'.trim(addslashes($objArray['profit_value'])).'","'.trim(addslashes($objArray['total'])).'","'.trim(addslashes($objArray['created_by'])).'","'.trim(addslashes($objArray['created_date'])).'","'.trim(addslashes($objArray['created_time'])).'","'.trim(addslashes($objArray['remarks'])).'","1")';
$this->ExecuteQuery($InsQuery2, 'insert');

$UpQuery1 ='UPDATE `'.$tbl.'sale_term`  SET `payment` = "'.trim($objArray['payment']).'" , `delivery` = "'.trim($objArray['delivery']).'" ,`validity` = "'.trim($objArray['validity']).'",`created_by` ="'.trim($objArray['created_by']).'"  WHERE `sales_quote_no` ="'.trim(addslashes($objArray['sales_quote_no'])).'" AND `revised_version` ="'.trim(addslashes($objArray['revised_version'])).'"';
$this->ExecuteQuery($UpQuery1, 'update');

$Sub_Total = 'SELECT  SUM(sub_total) AS Sub FROM `'.$tbl.'sales_quote_details` WHERE sales_quote_no = "'.trim(addslashes($objArray['sales_quote_no'])).'" AND revised_version = "'.trim(addslashes($objArray['revised_version'])).'" AND `status`=1';
$SelectSub = $this->ExecuteQuery($Sub_Total, "select");
$objSmarty->assign('SelectSub', $SelectSub);

$Tax_value = 'SELECT  SUM(vat_value) AS Tax FROM `'.$tbl.'sales_quote_details` WHERE sales_quote_no = "'.trim(addslashes($objArray['sales_quote_no'])).'" AND revised_version = "'.trim(addslashes($objArray['revised_version'])).'" AND `status`=1';
$SelectTax = $this->ExecuteQuery($Tax_value, "select");
$objSmarty->assign('SelectTax', $SelectTax);
 
$Total_value = 'SELECT  SUM(total) AS Total FROM `'.$tbl.'sales_quote_details` WHERE sales_quote_no = "'.trim(addslashes($objArray['sales_quote_no'])).'" AND revised_version = "'.trim(addslashes($objArray['revised_version'])).'" AND `status`=1';
$SelectTotal = $this->ExecuteQuery($Total_value, "select");
$objSmarty->assign('SelectTotal', $SelectTotal);

$Profit_value = 'SELECT COUNT(profit_per) AS Count, SUM(profit_per) AS Profit FROM `'.$tbl.'sales_quote_details` WHERE sales_quote_no = "'.trim(addslashes($objArray['sales_quote_no'])).'" AND revised_version = "'.trim(addslashes($objArray['revised_version'])).'" AND `status`=1';
$SelectPro = $this->ExecuteQuery($Profit_value, "select");
$objSmarty->assign('SelectPro', $SelectPro);
$Count= $SelectPro[0]['Count'];
$Profit= $SelectPro[0]['Profit'];
$Avg = $Profit/$Count;

 $UpQuery ='UPDATE `'.$tbl.'sales_quote_master`  SET `total` = "'.$SelectTotal[0]['Total'].'" , `sub_total` = "'.$SelectSub[0]['Sub'].'" ,`profit_per` = "'.$Avg.'" ,`vat_value` = "'.$SelectTax[0]['Tax'].'" WHERE `sales_quote_no` ="'.trim(addslashes($objArray['sales_quote_no'])).'" AND `revised_version` ="'.trim(addslashes($objArray['revised_version'])).'"';
 $this->ExecuteQuery($UpQuery, 'update');

header('Location:' .$_SERVER['PHP_SELF'].'?enquiry_id='.trim(addslashes($objArray['enquiry_id'])).'&sales_quote_no='.trim(addslashes($objArray['sales_quote_no'])).'&revised_version='.trim(addslashes($objArray['revised_version'])).'&succs_msg_for_insert');
return true;

}
}
/*************************************************Select Sales Quote/***************************************************************/
 function SelectMaster($objArray="")
 {
 		   
$enq_id = base64_decode($_GET["enquiry_id"]); 
global $objSmarty,$config;
			$tbl = $config['DBPrefix'];
			if(isset($_GET["enquiry_id"]) && isset($_GET['sales_quote_no']))
			{
		$SelQuery = 'SELECT * FROM `'.$tbl.'sales_quote_master` WHERE `status` = 1 AND `enquiry_id` ="'.$enq_id.'" AND sales_quote_no="'.$_GET['sales_quote_no'].'"';
			}
			elseif(isset($enq_id))
			{
		 	$SelQuery = 'SELECT * FROM `'.$tbl.'enquriy_master` WHERE `status` = 1 AND `enquiry_id` ="'.$enq_id.'"';
			}
			
			$LDList2 = $this->ExecuteQuery($SelQuery, 'select');
			 $objSmarty->assign('LDList2', $LDList2);

 }
/**********************************************Sale Term/****************************************/
  function Sale_Term($objArray="")
 {
		//
		global $objSmarty,$config;
		$tbl = $config['DBPrefix'];
		$SelQuery = 'SELECT * FROM `'.$tbl.'sale_term` WHERE sales_quote_no = "'.$_GET["sales_quote_no"].'" AND `status`=1';
		$SaleTerm = $this->ExecuteQuery($SelQuery, 'select');
		$objSmarty->assign('SaleTerm', $SaleTerm);

 }
 /*****************Enq Type/*****************************************************************************************************/
  function pro_enq_Type()
{

$enq_id = base64_decode($_GET["enquiry_id"]); 
global $objSmarty,$config;
		$tbl = $config['DBPrefix'];
		
		$SelQuery = 'SELECT * from '.$tbl.'enquriy_master WHERE enquiry_id="'.$enq_id.'"';
		$Enq_type = $this->ExecuteQuery($SelQuery, "select");
		$objSmarty->assign('Enq_type', $Enq_type);
		return $Enq_type;
}  
 /*****************Select Type/*****************************************************************************************************/
  function Select_Revise()
{
		
$enq_id = base64_decode($_GET["enquiry_id"]); 
global $objSmarty,$config;
		$tbl = $config['DBPrefix'];
		
		$SelQuery = 'SELECT * from '.$tbl.'sales_quote_details WHERE sales_quote_no="'.$_GET['sales_quote_no'].'"';
		$Revise = $this->ExecuteQuery($SelQuery, "select");
		$objSmarty->assign('Revise', $Revise);
		return $Revise;
} 
 /*************************************************Select Total***************************************************************/

function SelectTotal($objArray="")
{
		
$enq_id = base64_decode($_GET["enquiry_id"]); 
global $objSmarty,$config;
		$tbl = $config['DBPrefix'];
				
		$SelQuery = 'SELECT sum(total) as Total from '.$tbl.'sales_quote_details WHERE sales_quote_no="'.$_GET['sales_quote_no'].'"';
		$total_value = $this->ExecuteQuery($SelQuery, "select");
		$objSmarty->assign('total_value', $total_value);
		return $total_value;
			 
}
 /*******************************************************************************************Sales Print/*********************************************/
 function SalesPrint($objArray)
 {
		$sale_id = base64_decode($_GET["sales_quote_no"]);       
		$enq_id = base64_decode($_GET["enquiry_id"]);   
		$salesrevise_id = base64_decode($_GET["revised_version"]);   
global $objSmarty,$config;
		$tbl = $config['DBPrefix'];  
		$SelQuery2 = 'SELECT '.$tbl.'product_master.*,'.$tbl.'sales_quote_details.* FROM `'.$tbl.'product_master`,`'.$tbl.'sales_quote_details` WHERE '.$tbl.'sales_quote_details.product_description='.$tbl.'product_master.item_name AND '.$tbl.'sales_quote_details.enquiry_id="'.$enq_id.'" AND '.$tbl.'sales_quote_details.sales_quote_no="'.$sale_id.'" AND '.$tbl.'sales_quote_details.revised_version="'.$salesrevise_id.'" AND '.$tbl.'sales_quote_details.status="1"';  
		$MailView = $this->ExecuteQuery($SelQuery2, "select");  //print_r($MailView); exit;
		$objSmarty->assign('MailView', $MailView);
		return $MailView;

 }
 
 function ToAddress($SalIdent)
 {
		 $sale_id = base64_decode($_GET["sales_quote_no"]); 			 
		$salesrevise_id = base64_decode($_GET["revised_version"]);  
		$enq_id = base64_decode($_GET["enquiry_id"]); 
global $objSmarty,$config;
		$tbl = $config['DBPrefix'];
		$SelQuery1 = 'SELECT * FROM `'.$tbl.'sales_quote_master` WHERE sales_quote_no ="'.$sale_id.'" AND revised_version="'.$salesrevise_id.'" AND status="1"';
		$AddressView = $this->ExecuteQuery($SelQuery1, "select");
		$objSmarty->assign('AddressView', $AddressView);
		return $AddressView;
 }
  /*******************************Sales Print/***************************************************/
 function add_Total()
{
	$sale_id = base64_decode($_GET["sales_quote_no"]); 			
	$enq_id = base64_decode($_GET["enquiry_id"]); 
	$salesrevise_id = base64_decode($_GET["revised_version"]);
global $objSmarty,$config;
	$tbl = $config['DBPrefix'];
	$SelQuery = 'SELECT sum(total) as Total from '.$tbl.'sales_quote_details WHERE sales_quote_no="'.$sale_id.'" AND revised_version="'.$salesrevise_id.'"';
	$AddView = $this->ExecuteQuery($SelQuery, "select");
	
	$objSmarty->assign('AddView', $AddView);
	return $AddView;
}  
function sub_Total()
{
		$sale_id = base64_decode($_GET["sales_quote_no"]); 			
		$enq_id = base64_decode($_GET["enquiry_id"]); 
		$salesrevise_id = base64_decode($_GET["revised_version"]);
global $objSmarty,$config;
		$tbl = $config['DBPrefix'];
		$SelQuery = 'SELECT sum(sub_total) as s_Total from '.$tbl.'sales_quote_details WHERE sales_quote_no="'.$sale_id.'" AND revised_version="'.$salesrevise_id.'"';
		$Adds = $this->ExecuteQuery($SelQuery, "select");
		$objSmarty->assign('Adds', $Adds);
		return $Adds;
}  
function tax_Total()
{
	$sale_id = base64_decode($_GET["sales_quote_no"]); 			
	$enq_id = base64_decode($_GET["enquiry_id"]); 
	$salesrevise_id = base64_decode($_GET["revised_version"]);
global $objSmarty,$config;
	$tbl = $config['DBPrefix'];
	
	$SelQuery = 'SELECT sum(vat_value) as tax from '.$tbl.'sales_quote_details WHERE sales_quote_no="'.$sale_id.'" AND revised_version="'.$_GET["revised_version"].'"';
	$Add_tax = $this->ExecuteQuery($SelQuery, "select");
			$objSmarty->assign('Add_tax', $Add_tax);
			return $Add_tax;
}  

/********************************************************Terms Master/******************************************************/
function SalesTerms(){

$enq_id = base64_decode($_GET["enquiry_id"]); 
$enq_type = base64_decode($_GET["enquiry_type"]);
global $objSmarty,$config;
$tbl = $config['DBPrefix'];
	$SelQuery = 'SELECT * FROM '.$tbl.'terms_master WHERE status="1" AND type="'.$enq_type.'" ' ;
	$sale_term = $this->ExecuteQuery($SelQuery, "select");
	$objSmarty->assign('sale_term', $sale_term);
	return $sale_term;
}

/********************************************************Sales Quote Terms******************************************************/
function Terms(){

$enq_id = base64_decode($_GET["enquiry_id"]); 
global $objSmarty,$config;
$tbl = $config['DBPrefix'];
 	$SelQuery = 'SELECT * FROM '.$tbl.'sales_terms WHERE status="1" AND type="'.$_GET['enquiry_type'].'" ' ;
	$sale_term = $this->ExecuteQuery($SelQuery, "select");
	$objSmarty->assign('sale_term', $sale_term);
	return $sale_term;
}
/*************************************************View Sales Quote***************************************************************/
function ViewSalesQuote($objArray="")
 {

$enq_id = base64_decode($_GET["enquiry_id"]); 
global $objSmarty,$config;
$tbl = $config['DBPrefix'];
$SelQuery = 'SELECT '.$tbl.'sales_quote_master.*, '.$tbl.'sales_quote_details.* FROM `'.$tbl.'sales_quote_master`,`'.$tbl.'sales_quote_details` WHERE '.$tbl.'sales_quote_master.sales_quote_no='.$tbl.'sales_quote_details.sales_quote_no  AND  '.$tbl.'sales_quote_master.enquiry_id="'.$enq_id.'"';
$ListDetail = $this->ExecuteQuery($SelQuery, "select");
$objSmarty->assign('ListDetail', $ListDetail);
}
 /*************************************************View Add Sales Quote***************************************************************/
 function ViewAddSalesDetail()
 {
 		 
$enq_id = base64_decode($_GET["enquiry_id"]); 
global $objSmarty,$config;
		  $tbl = $config['DBPrefix'];
		 $SelQuery = 'SELECT * FROM  '.$tbl.'sales_quote_details WHERE status="1" && sales_quote_no="'.$_GET['sales_quote_no'].'"';
			$ListAddSaleView = $this->ExecuteQuery($SelQuery, "select");
			$objSmarty->assign('ListAddSaleView', $ListAddSaleView);
			return $ListAddSaleView;

 }
 /*************************************************View Edit Sales Quote***************************************************************/
function ViewEdit($objArray='')
 {

$enq_id = base64_decode($_GET["enquiry_id"]); 
global $objSmarty,$config;
$tbl = $config['DBPrefix'];
 $SelQuery = 'SELECT * FROM `'.$tbl.'sales_quote_master`, `'.$tbl.'sales_quote_details` WHERE '.$tbl.'sales_quote_master.sales_quote_no="'.$_GET['sales_quote_no'].'" AND '.$tbl.'sales_quote_details.sales_quote_no="'.$_GET['sales_quote_no'].'" AND '.$tbl.'sales_quote_master.revised_version = '.$tbl.'sales_quote_details.revised_version AND '.$tbl.'sales_quote_master.revised_version="'.$_GET['revised_version'].'"';
			$ListEdit = $this->ExecuteQuery($SelQuery, "select");
			$objSmarty->assign('ListEdit', $ListEdit);
			return $ListEdit;
 }

 /*************************************************List Sales Quote***************************************************************/
 
 function ListSalesQuote()
 {

$enq_id = base64_decode($_GET["enquiry_id"]); 
global $objSmarty,$config;
$tbl = $config['DBPrefix'];
$SelQuery = 'SELECT '.$tbl.'sales_quote_master.*, '.$tbl.'sales_quote_details.* FROM `'.$tbl.'sales_quote_master`, `'.$tbl.'sales_quote_details` WHERE '.$tbl.'sales_quote_master.status = "1" AND '.$tbl.'sales_quote_master.sales_quote_no='.$tbl.'sales_quote_details.sales_quote_no';
			$ListView = $this->ExecuteQuery($SelQuery, "select");
			$objSmarty->assign('ListView', $ListView);
			return $ListView;

 }
 /**********************************************Delete Contact*********************************************************************/
 function DeleteMaster($CatIdent)
 {

$enq_id = base64_decode($_GET["enquiry_id"]); 
global $objSmarty,$config;
$tbl = $config['DBPrefix'];
$DelQuery = 'update `'.$tbl.'sales_quote_master` set `status` = 0 WHERE `sales_quote_no` ="'.$CatIdent.'"';
			$this->ExecuteQuery($DelQuery, 'update');
            header('Location:' .$_SERVER['PHP_SELF'].'?succs_msg_for_del');  

 }
 /**********************************************Delete Slaes/*********************************************************************/
 function DeleteSales($CatIdent,$CusIdent,$Rev,$Enq,$Total,$Sub,$Pro)
 {
 //print_r($Pro);exit;
		//
$enq_id = base64_decode($_GET["enquiry_id"]); 
global $objSmarty,$config;
		$tbl = $config['DBPrefix'];
		$revision = $_GET['revised_version'];


		$DelQuery = 'DELETE FROM `'.$tbl.'sales_quote_details` WHERE `sl_no` ="'.$CatIdent.'" ';
		$this->ExecuteQuery($DelQuery, 'update');
		
				
		$SelQuery = 'SELECT * FROM '.$tbl.'sales_quote_master WHERE sales_quote_no = "'.$CusIdent.'" AND revised_version = "'.$Rev.'"';
		$SelectSub = $this->ExecuteQuery($SelQuery, "select");
		$objSmarty->assign('SelectSub', $SelectSub);
		//print_r($SelectSub);exit;
		$Profit_value = 'SELECT COUNT(profit_per) AS Count, SUM(profit_per) AS Profit FROM `'.$tbl.'sales_quote_details` WHERE sales_quote_no = "'.$_GET['sales_quote_no'].'" AND revised_version = "'.$Rev.'" AND `status`=1';
		$SelectPro = $this->ExecuteQuery($Profit_value, "select");
		$objSmarty->assign('SelectPro', $SelectPro);
		$Count= $SelectPro[0]['Count'];
		$Profit= $SelectPro[0]['Profit'];
		$Avg = $Profit/$Count;

		$master_var1 = $SelectSub[0]['total'];
		$master_var2 = $SelectSub[0]['sub_total'];
		$master_var3 = $Avg;

		$total = $master_var1 - $Total;
		$sub_total = $master_var2 - $Sub;
		$profit_val = $master_var3;
		
	$UpQuery ='UPDATE `'.$tbl.'sales_quote_master`  SET `total` = "'.$total.'" , `sub_total` = "'.$sub_total.'" ,  `profit_per` = "'.$profit_val.'" WHERE `sales_quote_no` ="'.$CusIdent.'" AND `revised_version` ="'.$Rev.'"';
		$this->ExecuteQuery($UpQuery, 'update');

		header('Location:' .$_SERVER['PHP_SELF'].'?sales_quote_no='.$CusIdent.'&revised_version='.$Rev.'&enquiry_id='.$Enq.'&succs_msg_for_del');

 }
 
  function DeleteRev($CatIdent,$Sale,$CusIdent,$Total,$Sub,$Pro)
 {
		
$enq_id = base64_decode($_GET["enquiry_id"]); 
global $objSmarty,$config;
		$tbl = $config['DBPrefix'];
		$revision = $_GET['revised_version'];
		$Revision = ++$revision;


		$DelQuery = 'DELETE FROM `'.$tbl.'sales_quote_details` WHERE `sl_no` ="'.$CatIdent.'" ';
		$this->ExecuteQuery($DelQuery, 'update');
		
		$SelQuery = 'SELECT * FROM '.$tbl.'sales_quote_master WHERE sales_quote_no = "'.$_GET['sales_quote_no'].'" AND revised_version = "'.$Revision.'"';
		$SelectSub = $this->ExecuteQuery($SelQuery, "select");
		$objSmarty->assign('SelectSub', $SelectSub);
		
		$Profit_value = 'SELECT COUNT(profit_per) AS Count, SUM(profit_per) AS Profit FROM `'.$tbl.'sales_quote_details` WHERE sales_quote_no = "'.$_GET['sales_quote_no'].'" AND revised_version = "'.$Revision.'" AND `status`=1';
		$SelectPro = $this->ExecuteQuery($Profit_value, "select");
		$objSmarty->assign('SelectPro', $SelectPro);
		$Count= $SelectPro[0]['Count'];
		$Profit= $SelectPro[0]['Profit'];
		$Avg = $Profit/$Count;

		$master_var1 = $SelectSub[0]['total'];
		$master_var2 = $SelectSub[0]['sub_total'];
		$master_var3 = $Avg;
		

		$total = $master_var1 - $Total;
		$sub_total = $master_var2 - $Sub;
		$profit_val = $master_var3;
		
	$UpQuery ='UPDATE `'.$tbl.'sales_quote_master`  SET `total` = "'.$total.'" , `sub_total` = "'.$sub_total.'" ,  `profit_per` = "'.$profit_val.'" WHERE `sales_quote_no` ="'.$_GET['sales_quote_no'].'" AND `revised_version` ="'.$Revision.'"';

$this->ExecuteQuery($UpQuery, 'update');
 
		
		
		header('Location:' .$_SERVER['PHP_SELF'].'?sales_quote_no='.$_GET["sales_quote_no"].'&revised_version='.$_GET['revised_version'].'&succs_msg_for_del');

 }
 
  function DeleteSalesEdit($CatIdent,$CusIdent,$Rive,$Total,$Sub,$Pro)
 {
 
		
$enq_id = base64_decode($_GET["enquiry_id"]); 
global $objSmarty,$config;
		$tbl = $config['DBPrefix'];
		$revision = $_GET['revised_version'];


		$DelQuery = 'DELETE FROM `'.$tbl.'sales_quote_details` WHERE `sl_no` ="'.$CatIdent.'" ';
		$this->ExecuteQuery($DelQuery, 'update');
		
		 $SelQuery = 'SELECT * FROM '.$tbl.'sales_quote_master WHERE sales_quote_no = "'.$_GET['sales_quote_no'].'" AND revised_version = "'.$Rive.'"';
		$SelectSub = $this->ExecuteQuery($SelQuery, "select");
		$objSmarty->assign('SelectSub', $SelectSub);

	 $Profit_value = 'SELECT COUNT(profit_per) AS Count, SUM(profit_per) AS Profit FROM `'.$tbl.'sales_quote_details` WHERE sales_quote_no = "'.$_GET['sales_quote_no'].'" AND revised_version = "'.$revision.'" AND `status`=1';
		$SelectPro = $this->ExecuteQuery($Profit_value, "select");
		$objSmarty->assign('SelectPro', $SelectPro);
		$Count= $SelectPro[0]['Count'];
		$Profit= $SelectPro[0]['Profit'];
		$Avg = $Profit/$Count;

		$master_var1 = $SelectSub[0]['total'];
		$master_var2 = $SelectSub[0]['sub_total'];
		$master_var3 = $Avg;
		

		$total = $master_var1 - $Total;
		$sub_total = $master_var2 - $Sub;
		$profit_val = $master_var3;
				
	$UpQuery ='UPDATE `'.$tbl.'sales_quote_master`  SET `total` = "'.$total.'" , `sub_total` = "'.$sub_total.'" ,  `profit_per` = "'.$profit_val.'" WHERE `sales_quote_no` ="'.$_GET['sales_quote_no'].'" AND `revised_version` ="'.$revision.'"';
		$this->ExecuteQuery($UpQuery, 'update');
		
		 header('Location:' .$_SERVER['PHP_SELF'].'?sales_quote_no='.$CusIdent.'&revised_version='.$Rive.'&succs_msg_for_del');

 }
 
 
 /**********************************************List Sales View/*********************************************************************/
  function ListSales()
 {
  //print_r($_GET[sales_quote_no]); exit;
$enq_id = base64_decode($_GET["enquiry_id"]); 
global $objSmarty,$config;
		$tbl = $config['DBPrefix'];  
			 $SelQuery = 'SELECT * FROM  '.$tbl.'sales_quote_master WHERE revised_version ="'.$_GET['revised_version'].'" AND sales_quote_no="'.$_GET['sales_quote_no'].'" AND status="1"'; 
			$ListView2 = $this->ExecuteQuery($SelQuery, "select");
			$objSmarty->assign('ListView2', $ListView2);
			return $ListView2;
            //header('Location:' .$_SERVER['PHP_SELF'].'?succs_msg_for_del');  

 }
 
/*************************************************Revised Quote List/*************************************/
 function Revised_List($objArray='')
 {

$enq_id = base64_decode($_GET["enquiry_id"]); 
global $objSmarty,$config;
$tbl = $config['DBPrefix'];
$revision = $_GET['revised_version'];
 $select_query='SELECT * FROM `'.$tbl.'sales_quote_details` WHERE sales_quote_no = "'.$_GET["sales_quote_no"].'" AND revised_version = "'.++$revision.'" AND `status`=1';
 $SelectList		= $this->ExecuteQuery($select_query, "select");
  $objSmarty->assign('SelectList',$SelectList);
  //print_r($SelectList);exit;
 return $SelectList;
 }
 
/***************************************************************Sales Quote List/**************************/
 function list_sales_details($objArray='')
 {
  
 
$enq_id = base64_decode($_GET["enquiry_id"]); 
global $objSmarty,$config;
$tbl = $config['DBPrefix']; 
 $select_query='SELECT * FROM `'.$tbl.'sales_quote_details` WHERE sales_quote_no = "'.$_GET['sales_quote_no'].'" AND revised_version = "'.$_GET['revised_version'].'" AND `status`=1';  
 $SelectList		= $this->ExecuteQuery($select_query, "select");   
 $objSmarty->assign('SelectList',$SelectList);
 //print_r($SelectList);exit;
 return $SelectList;
 }
 
/******************************************Get List/***************************************************************/ 
function GetSalesView($objArray='')  {
		
$enq_id = base64_decode($_GET["enquiry_id"]); 
global $objSmarty,$config;
		$tbl = $config['DBPrefix'];
		$objSmarty->assign('c_id',$_GET['sales_quote_no']);
	 $SelQuery = 'SELECT * FROM `'.$tbl.'sales_quote_master` WHERE sales_quote_no ="'.$_GET["sales_quote_no"].'"' ;
		$LDList		= $this->ExecuteQuery($SelQuery, "select");
		$total_records = count($LDList);
		$record_per_page = $this->Limit;
		
		$objSmarty->assign("TList1",$_GET['cust_id']);
		 if(!empty($LDList) && is_array($LDList))
		{
			$objSmarty->assign("LDList2",$LDList);
			$objSmarty->assign("LDDisp", $this->LDDisplayPath);
			return $LDList2;
		}
		else{
			return false;
		}
		$objPage->set_page_data($_SERVER['PHP_SELF'],$total_records,$record_per_page,$scroll,true,true,true);
		$listing_split = new MsplitPageResults($SelQuery, $this->Limit);
		
		if ( ($listing_split->number_of_rows > 0) )  
		{
			$objSmarty->assign('LinkPage',$listing_split->display_count(TEXT_DISPLAY_NUMBER_OF_RESULT));
			$objSmarty->assign('PerPageNavigation',TEXT_RESULT_PAGE1 . ' ' . $listing_split->display_links($this->Limit, get_all_get_params(array('page', 'info', 'x', 'y')))); 
			$PageList = $this->ExecuteQuery($listing_split->SelQuery, 'selectassoc');
		}
		if(!empty($PageList) && is_array($PageList))
			foreach($PageList as $key=>$value)
			{
				$PageList[$key]['Cid'] = stripslashes($PageList[$key]['customer_id']);
				$PageList[$key]['Cname'] = stripslashes($PageList[$key]['customer_name']);
				$objSmarty->assign('Cid',$PageList[$key]['customer_id']);
				$objSmarty->assign('Cname',$PageList[$key]['customer_name']);
			}		
			$objSmarty->assign('i', $listing_split->i);
			$objSmarty->assign('PageList', $PageList);
			
			return $PageList;
	}	
	
  /*************************************************Edit Quote/***************************************************************/
function EditSalesQuote($objArray=""){
  
$enq_id = base64_decode($_GET["enquiry_id"]); 
global $objSmarty,$config,$_POST;
  $tbl = $config['DBPrefix'];
  
$revision = $_GET['revised_version'];
//$Revise = ++$revision;
  
  			if(!$objArray['sales_quote_no']){
			$objSmarty->assign('ErrorMessage', 'Sales Quote no should not be blank');
			return false;
			}elseif(!$objArray['quote_date']){
			$objSmarty->assign('ErrorMessage', 'Quote Date should not be blank');
			return false;
			}elseif(!$objArray['item_type']){
			$objSmarty->assign('ErrorMessage', 'Unit Basic should not be blank');
			return false;
			}elseif(!$objArray['quantity']){
			$objSmarty->assign('ErrorMessage', 'Quantity should not be blank');
			return false;
			}elseif(!$objArray['vat_per']){
			$objSmarty->assign('ErrorMessage', 'Vat Percentage should not be blank');
			return false;
			}
  
  $objSmarty->assign('sales_quote_no', $objArray['sales_quote_no']);
			if($objArray['sales_quote_no'] && $objArray['sales_quote_no']){

if($objArray['item_type']='Product')
{
$InsQuery2 = 'INSERT INTO `'.$tbl.'sales_quote_details`(`sales_quote_no`,`item_type`,`item_code`,`revised_version`,`enquiry_id`,`product_description`,`material_description`, `quantity`, `unit_basic`,`sub_total`,`vat_value`,`vat_per`,`item_basic`,`profit_per`,`profit_value`, `total`, `created_by`, `created_date`, `created_time`,`remarks`,`status`) VALUES("'.trim(addslashes($objArray['sales_quote_no'])).'","'.trim(addslashes($objArray['item_type'])).'","'.trim(addslashes($objArray['item_code'])).'","'.trim(addslashes($objArray['revised_version'])).'","'.trim(addslashes($objArray['enquiry_id'])).'","'.trim(addslashes($objArray['product_desc'])).'","'.trim(addslashes($objArray['material_name'])).'","'.trim(addslashes($objArray['quantity'])).'","'.trim(addslashes($objArray['unit_basic'])).'","'.trim(addslashes($objArray['sub_total'])).'","'.trim(addslashes($objArray['vat_value'])).'","'.trim(addslashes($objArray['vat_per'])).'","'.trim(addslashes($objArray['item_basic'])).'","'.trim(addslashes($objArray['profit_per'])).'","'.trim(addslashes($objArray['profit_value'])).'","'.trim(addslashes($objArray['total'])).'","'.trim(addslashes($objArray['created_by'])).'","'.trim(addslashes($objArray['created_date'])).'","'.trim(addslashes($objArray['created_time'])).'","'.trim(addslashes($objArray['remarks'])).'","1")';
$this->ExecuteQuery($InsQuery2, 'insert');

$UpQuery1 ='UPDATE `'.$tbl.'sale_term`  SET `payment` = "'.trim($objArray['payment']).'" , `delivery` = "'.trim($objArray['delivery']).'" ,`validity` = "'.trim($objArray['validity']).'",`created_by` ="'.trim($objArray['created_by']).'"  WHERE `sales_quote_no` ="'.trim(addslashes($objArray['sales_quote_no'])).'" AND `revised_version` ="'.trim(addslashes($objArray['revised_version'])).'"';
$this->ExecuteQuery($UpQuery1, 'update');

$Sub_Total = 'SELECT  SUM(sub_total) AS Sub FROM `'.$tbl.'sales_quote_details` WHERE sales_quote_no = "'.trim(addslashes($objArray['sales_quote_no'])).'" AND revised_version = "'.trim(addslashes($objArray['revised_version'])).'" AND `status`=1';
$SelectSub = $this->ExecuteQuery($Sub_Total, "select");
$objSmarty->assign('SelectSub', $SelectSub);

$Tax_value = 'SELECT  SUM(vat_value) AS Tax FROM `'.$tbl.'sales_quote_details` WHERE sales_quote_no = "'.trim(addslashes($objArray['sales_quote_no'])).'" AND revised_version = "'.trim(addslashes($objArray['revised_version'])).'" AND `status`=1';
$SelectTax = $this->ExecuteQuery($Tax_value, "select");
$objSmarty->assign('SelectTax', $SelectTax);
 
$Total_value = 'SELECT  SUM(total) AS Total FROM `'.$tbl.'sales_quote_details` WHERE sales_quote_no = "'.trim(addslashes($objArray['sales_quote_no'])).'" AND revised_version = "'.trim(addslashes($objArray['revised_version'])).'" AND `status`=1';
$SelectTotal = $this->ExecuteQuery($Total_value, "select");
$objSmarty->assign('SelectTotal', $SelectTotal);

$Profit_value = 'SELECT COUNT(profit_per) AS Count, SUM(profit_per) AS Profit FROM `'.$tbl.'sales_quote_details` WHERE sales_quote_no = "'.trim(addslashes($objArray['sales_quote_no'])).'" AND revised_version = "'.trim(addslashes($objArray['revised_version'])).'" AND `status`=1';
$SelectPro = $this->ExecuteQuery($Profit_value, "select");
$objSmarty->assign('SelectPro', $SelectPro);
$Count= $SelectPro[0]['Count'];
$Profit= $SelectPro[0]['Profit'];
$Avg = $Profit/$Count;


$UpQuery ='UPDATE `'.$tbl.'sales_quote_master`  SET `total` = "'.$SelectTotal[0]['Total'].'" , `sub_total` = "'.$SelectSub[0]['Sub'].'" ,`profit_per` = "'.$Avg.'", `approve_status`="0",`vat_value` = "'.$SelectTax[0]['Tax'].'" WHERE `sales_quote_no` ="'.trim(addslashes($objArray['sales_quote_no'])).'" AND `revised_version` ="'.trim(addslashes($objArray['revised_version'])).'"';
 $this->ExecuteQuery($UpQuery, 'update');
 }
 else
 {
$InsQuery2 = 'INSERT INTO `'.$tbl.'sales_quote_details`(`sales_quote_no`,`item_type`,`item_code`,`revised_version`,`enquiry_id`,`product_description`,`material_description`, `quantity`, `unit_basic`,`sub_total`,`vat_value`,`vat_per`,`item_basic`,`profit_per`,`profit_value`, `total`, `created_by`, `created_date`, `created_time`,`remarks`,`status`) VALUES("'.trim(addslashes($objArray['sales_quote_no'])).'","'.trim(addslashes($objArray['item_type'])).'","'.trim(addslashes($objArray['item_code'])).'","'.trim(addslashes($objArray['revised_version'])).'","'.trim(addslashes($objArray['enquiry_id'])).'","'.trim(addslashes($objArray['product_desc'])).'","'.trim(addslashes($objArray['material_name'])).'","'.trim(addslashes($objArray['quantity'])).'","'.trim(addslashes($objArray['unit_basic'])).'","'.trim(addslashes($objArray['sub_total'])).'","'.trim(addslashes($objArray['vat_value'])).'","'.trim(addslashes($objArray['vat_per'])).'","'.trim(addslashes($objArray['item_basic'])).'","'.trim(addslashes($objArray['profit_per'])).'","'.trim(addslashes($objArray['profit_value'])).'","'.trim(addslashes($objArray['total'])).'","'.trim(addslashes($objArray['created_by'])).'","'.trim(addslashes($objArray['created_date'])).'","'.trim(addslashes($objArray['created_time'])).'","'.trim(addslashes($objArray['remarks'])).'","1")';
$this->ExecuteQuery($InsQuery2, 'insert');

$UpQuery1 ='UPDATE `'.$tbl.'sale_term`  SET `payment` = "'.trim($objArray['payment']).'" , `delivery` = "'.trim($objArray['delivery']).'" ,`validity` = "'.trim($objArray['validity']).'",`created_by` ="'.trim($objArray['created_by']).'"  WHERE `sales_quote_no` ="'.trim(addslashes($objArray['sales_quote_no'])).'" AND `revised_version` ="'.trim(addslashes($objArray['revised_version'])).'"';
$this->ExecuteQuery($UpQuery1, 'update');

$Sub_Total = 'SELECT  SUM(sub_total) AS Sub FROM `'.$tbl.'sales_quote_details` WHERE sales_quote_no = "'.trim(addslashes($objArray['sales_quote_no'])).'" AND revised_version = "'.trim(addslashes($objArray['revised_version'])).'" AND `status`=1';
$SelectSub = $this->ExecuteQuery($Sub_Total, "select");
$objSmarty->assign('SelectSub', $SelectSub);

$Tax_value = 'SELECT  SUM(vat_value) AS Tax FROM `'.$tbl.'sales_quote_details` WHERE sales_quote_no = "'.trim(addslashes($objArray['sales_quote_no'])).'" AND revised_version = "'.trim(addslashes($objArray['revised_version'])).'" AND `status`=1';
$SelectTax = $this->ExecuteQuery($Tax_value, "select");
$objSmarty->assign('SelectTax', $SelectTax);
 
$Total_value = 'SELECT  SUM(total) AS Total FROM `'.$tbl.'sales_quote_details` WHERE sales_quote_no = "'.trim(addslashes($objArray['sales_quote_no'])).'" AND revised_version = "'.trim(addslashes($objArray['revised_version'])).'" AND `status`=1';
$SelectTotal = $this->ExecuteQuery($Total_value, "select");
$objSmarty->assign('SelectTotal', $SelectTotal);

$Profit_value = 'SELECT COUNT(profit_per) AS Count, SUM(profit_per) AS Profit FROM `'.$tbl.'sales_quote_details` WHERE sales_quote_no = "'.trim(addslashes($objArray['sales_quote_no'])).'" AND revised_version = "'.trim(addslashes($objArray['revised_version'])).'" AND `status`=1';
$SelectPro = $this->ExecuteQuery($Profit_value, "select");
$objSmarty->assign('SelectPro', $SelectPro);
$Count= $SelectPro[0]['Count'];
$Profit= $SelectPro[0]['Profit'];
$Avg = $Profit/$Count;


$UpQuery ='UPDATE `'.$tbl.'sales_quote_master`  SET `total` = "'.$SelectTotal[0]['Total'].'" , `approve_status`="0",`sub_total` = "'.$SelectSub[0]['Sub'].'" ,`profit_per` = "'.$Avg.'" ,`vat_value` = "'.$SelectTax[0]['Tax'].'" WHERE `sales_quote_no` ="'.trim(addslashes($objArray['sales_quote_no'])).'" AND `revised_version` ="'.trim(addslashes($objArray['revised_version'])).'"';
 $this->ExecuteQuery($UpQuery, 'update');
 }

header('Location:' .$_SERVER['PHP_SELF'].'?&sales_quote_no='.trim(addslashes($objArray['sales_quote_no'])).'&revised_version='.trim(addslashes($objArray['revised_version'])).'&succs_msg_for_insert'); 
 }
 }
   function SelectProduct($objArray="")
  {   
			
$enq_id = base64_decode($_GET["enquiry_id"]); 
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
/*******************************************Edit Sales Revise/****************************************************************/
function EditSalesRevise($objArray="")
{

$enq_id = base64_decode($_GET["enquiry_id"]); 
global $objSmarty,$config,$_POST;
$tbl = $config['DBPrefix'];

$revision = $_GET['revised_version'];
$Revise = ++$revision;

  if($this->ChkDupliRev(trim(addslashes($objArray['revised_version'])))){
  			if(!$objArray['sales_quote_no']){
			$objSmarty->assign('ErrorMessage', 'Sales Quote no should not be blank');
			return false;
			}elseif(!$objArray['quote_date']){
			$objSmarty->assign('ErrorMessage', 'Quote Date should not be blank');
			return false;
			}elseif(!$objArray['customer_id']){
			$objSmarty->assign('ErrorMessage', 'Customer Id should not be blank');
			return false;
			}elseif(!$objArray['total']){
			$objSmarty->assign('ErrorMessage', 'Total  should not be blank');
			return false;
			}elseif(!$objArray['revised_version']){
			$objSmarty->assign('ErrorMessage', 'Revised Version  should not be blank');
			return false;
			}
 
  $objSmarty->assign('sales_quote_no', $objArray['sales_quote_no']);
	if($objArray['sales_quote_no'] && $objArray['sales_quote_no']){

$InsQuery = 'INSERT INTO `'.$tbl.'sales_quote_master`(`sales_quote_no`,`salutation`,`item_type`,`quote_date`,`enquiry_id`,`revised_version`,`customer_id`, `company_name`, `customer_name`,`mobile_no`, `address`, `address1`, `area`,`city`,`pincode`,`phone_no`,`extension`,`area_code`,`email_id`,`item_basic`,`profit_per`,`profit_value`,`email_id1`,`sub_total`,`vat_value`,`vat_per`,`total`,`landmark`,`created_by`,`created_date`, `created_time`, `remarks`,`status`) VALUES("'.trim(addslashes($objArray['sales_quote_no'])).'","'.trim(addslashes($objArray['salutation'])).'","'.trim(addslashes($objArray['item_type'])).'","'.trim(addslashes($objArray['quote_date'])).'","'.trim(addslashes($objArray['enquiry_id'])).'","'.trim(addslashes($objArray['revised_version'])).'","'.trim(addslashes($objArray['customer_id'])).'","'.trim(addslashes($objArray['company_name'])).'","'.trim(addslashes($objArray['customer_name'])).'","'.trim(addslashes($objArray['mobile_no'])).'","'.trim(addslashes($objArray['address'])).'","'.trim(addslashes($objArray['address1'])).'","'.trim(addslashes($objArray['area'])).'","'.trim(addslashes($objArray['city'])).'","'.trim(addslashes($objArray['pincode'])).'","'.trim(addslashes($objArray['phone_no'])).'","'.trim(addslashes($objArray['extension'])).'","'.trim(addslashes($objArray['area_code'])).'","'.trim(addslashes($objArray['email'])).'","'.trim(addslashes($objArray['item_basic'])).'","'.trim(addslashes($objArray['profit_per'])).'","'.trim(addslashes($objArray['profit_value'])).'","'.trim(addslashes($objArray['email1'])).'","'.trim(addslashes($objArray['sub_total'])).'","'.trim(addslashes($objArray['vat_value'])).'","'.trim(addslashes($objArray['vat_per'])).'","'.trim(addslashes($objArray['total'])).'","'.trim(addslashes($objArray['landmark'])).'","'.trim(addslashes($objArray['created_by'])).'","'.trim(addslashes($objArray['created_date'])).'","'.trim(addslashes($objArray['created_time'])).'","'.trim(addslashes($objArray['remarks'])).'","1")';
$this->ExecuteQuery($InsQuery, 'insert');


$InsQuery2 = 'INSERT INTO `'.$tbl.'sales_quote_details`(`sales_quote_no`,`item_type`,`item_code`,`revised_version`,`enquiry_id`,`product_description`,`material_description`, `quantity`, `unit_basic`,`sub_total`,`vat_value`,`vat_per`,`item_basic`,`profit_per`,`profit_value`, `total`, `created_by`, `created_date`, `created_time`,`remarks`,`status`) VALUES("'.trim(addslashes($objArray['sales_quote_no'])).'","'.trim(addslashes($objArray['item_type'])).'","'.trim(addslashes($objArray['item_code'])).'","'.trim(addslashes($objArray['revised_version'])).'","'.trim(addslashes($objArray['enquiry_id'])).'","'.trim(addslashes($objArray['product_desc'])).'","'.trim(addslashes($objArray['material_name'])).'","'.trim(addslashes($objArray['quantity'])).'","'.trim(addslashes($objArray['unit_basic'])).'","'.trim(addslashes($objArray['sub_total'])).'","'.trim(addslashes($objArray['vat_value'])).'","'.trim(addslashes($objArray['vat_per'])).'","'.trim(addslashes($objArray['item_basic'])).'","'.trim(addslashes($objArray['profit_per'])).'","'.trim(addslashes($objArray['profit_value'])).'","'.trim(addslashes($objArray['total'])).'","'.trim(addslashes($objArray['created_by'])).'","'.trim(addslashes($objArray['created_date'])).'","'.trim(addslashes($objArray['created_time'])).'","'.trim(addslashes($objArray['remarks'])).'","1")';
$this->ExecuteQuery($InsQuery2, 'insert');


$InsQuery3= 'INSERT INTO `'.$tbl.'sale_term`(`sales_quote_no`,`revised_version`,`payment`,`delivery`,`validity`,`created_by`, `created_date`, `created_time`,`status`) VALUES("'.trim(addslashes($objArray['sales_quote_no'])).'","'.trim(addslashes($objArray['revised_version'])).'","'.trim(addslashes($objArray['payment'])).'","'.trim(addslashes($objArray['delivery'])).'","'.trim(addslashes($objArray['validity'])).'","'.trim(addslashes($objArray['created_by'])).'","'.trim(addslashes($objArray['created_date'])).'","'.trim(addslashes($objArray['created_time'])).'","1")';
$this->ExecuteQuery($InsQuery3, 'insert');

 $Sub_Total = 'SELECT  SUM(sub_total) AS Sub FROM `'.$tbl.'sales_quote_details` WHERE sales_quote_no = "'.trim(addslashes($objArray['sales_quote_no'])).'" AND revised_version = "'.$Revise.'" AND `status`=1';
 $SelectSub = $this->ExecuteQuery($Sub_Total, "select");
 $objSmarty->assign('SelectSub', $SelectSub);

 $Tax_value = 'SELECT  SUM(vat_value) AS Tax FROM `'.$tbl.'sales_quote_details` WHERE sales_quote_no = "'.trim(addslashes($objArray['sales_quote_no'])).'" AND revised_version = "'.$Revise.'" AND `status`=1';
 $SelectTax = $this->ExecuteQuery($Tax_value, "select");
 $objSmarty->assign('SelectTax', $SelectTax);
 
  $Total_value = 'SELECT  SUM(total) AS Total FROM `'.$tbl.'sales_quote_details` WHERE sales_quote_no = "'.trim(addslashes($objArray['sales_quote_no'])).'" AND revised_version = "'.$Revise.'" AND `status`=1';
 $SelectTotal = $this->ExecuteQuery($Total_value, "select");
 $objSmarty->assign('SelectTotal', $SelectTotal);

$Profit_value = 'SELECT COUNT(profit_per) AS Count, SUM(profit_per) AS Profit FROM `'.$tbl.'sales_quote_details` WHERE sales_quote_no = "'.trim(addslashes($objArray['sales_quote_no'])).'" AND revised_version = "'.trim(addslashes($objArray['revised_version'])).'" AND `status`=1';
$SelectPro = $this->ExecuteQuery($Profit_value, "select");
$objSmarty->assign('SelectPro', $SelectPro);
$Count= $SelectPro[0]['Count'];
$Profit= $SelectPro[0]['Profit'];
$Avg = $Profit/$Count;


$UpQuery ='UPDATE `'.$tbl.'sales_quote_master`  SET `total` = "'.$SelectTotal[0]['Total'].'" , `sub_total` = "'.$SelectSub[0]['Sub'].'" ,`profit_per` = "'.$Avg.'" ,`vat_value` = "'.$SelectTax[0]['Tax'].'" WHERE `sales_quote_no` ="'.trim(addslashes($objArray['sales_quote_no'])).'" AND revised_version = "'.$Revise.'"';
$this->ExecuteQuery($UpQuery, 'update');
}
}

else
{

$InsQuery2 = 'INSERT INTO `'.$tbl.'sales_quote_details`(`sales_quote_no`,`item_type`,`item_code`,`revised_version`,`enquiry_id`,`product_description`,`material_description`, `quantity`, `unit_basic`,`sub_total`,`vat_value`,`vat_per`,`item_basic`,`profit_per`,`profit_value`, `total`, `created_by`, `created_date`, `created_time`,`remarks`,`status`) VALUES("'.trim(addslashes($objArray['sales_quote_no'])).'","'.trim(addslashes($objArray['item_type'])).'","'.trim(addslashes($objArray['item_code'])).'","'.trim(addslashes($objArray['revised_version'])).'","'.trim(addslashes($objArray['enquiry_id'])).'","'.trim(addslashes($objArray['product_desc'])).'","'.trim(addslashes($objArray['material_name'])).'","'.trim(addslashes($objArray['quantity'])).'","'.trim(addslashes($objArray['unit_basic'])).'","'.trim(addslashes($objArray['sub_total'])).'","'.trim(addslashes($objArray['vat_value'])).'","'.trim(addslashes($objArray['vat_per'])).'","'.trim(addslashes($objArray['item_basic'])).'","'.trim(addslashes($objArray['profit_per'])).'","'.trim(addslashes($objArray['profit_value'])).'","'.trim(addslashes($objArray['total'])).'","'.trim(addslashes($objArray['created_by'])).'","'.trim(addslashes($objArray['created_date'])).'","'.trim(addslashes($objArray['created_time'])).'","'.trim(addslashes($objArray['remarks'])).'","1")';
$this->ExecuteQuery($InsQuery2, 'insert');

 $UpQuery1 ='UPDATE `'.$tbl.'sale_term`  SET `payment` = "'.trim($objArray['payment']).'" , `delivery` = "'.trim($objArray['delivery']).'" ,`validity` = "'.trim($objArray['validity']).'",`created_by` ="'.trim($objArray['created_by']).'"  WHERE `sales_quote_no` ="'.trim(addslashes($objArray['sales_quote_no'])).'" AND `revised_version` ="'.$Revise.'"';
$this->ExecuteQuery($UpQuery1, 'update');

 $Sub_Total = 'SELECT  SUM(sub_total) AS Sub FROM `'.$tbl.'sales_quote_details` WHERE sales_quote_no = "'.trim(addslashes($objArray['sales_quote_no'])).'" AND revised_version = "'.$Revise.'" AND `status`=1';
 $SelectSub = $this->ExecuteQuery($Sub_Total, "select");
 $objSmarty->assign('SelectSub', $SelectSub);

 $Tax_value = 'SELECT  SUM(vat_value) AS Tax FROM `'.$tbl.'sales_quote_details` WHERE sales_quote_no = "'.trim(addslashes($objArray['sales_quote_no'])).'" AND revised_version = "'.$Revise.'" AND `status`=1';
 $SelectTax = $this->ExecuteQuery($Tax_value, "select");
 $objSmarty->assign('SelectTax', $SelectTax);
 
  $Total_value = 'SELECT  SUM(total) AS Total FROM `'.$tbl.'sales_quote_details` WHERE sales_quote_no = "'.trim(addslashes($objArray['sales_quote_no'])).'" AND revised_version = "'.$Revise.'" AND `status`=1';
 $SelectTotal = $this->ExecuteQuery($Total_value, "select");
 $objSmarty->assign('SelectTotal', $SelectTotal);

$Profit_value = 'SELECT COUNT(profit_per) AS Count, SUM(profit_per) AS Profit FROM `'.$tbl.'sales_quote_details` WHERE sales_quote_no = "'.trim(addslashes($objArray['sales_quote_no'])).'" AND revised_version = "'.trim(addslashes($objArray['revised_version'])).'" AND `status`=1';
$SelectPro = $this->ExecuteQuery($Profit_value, "select");
$objSmarty->assign('SelectPro', $SelectPro);
$Count= $SelectPro[0]['Count'];
$Profit= $SelectPro[0]['Profit'];
$Avg = $Profit/$Count;


echo $UpQuery ='UPDATE `'.$tbl.'sales_quote_master`  SET `total` = "'.$SelectTotal[0]['Total'].'" , `sub_total` = "'.$SelectSub[0]['Sub'].'" ,`profit_per` = "'.$Avg.'" ,`vat_value` = "'.$SelectTax[0]['Tax'].'" WHERE `sales_quote_no` ="'.trim(addslashes($objArray['sales_quote_no'])).'" AND revised_version = "'.$Revise.'"';exit;
$this->ExecuteQuery($UpQuery, 'update');
}

header('Location:' .$_SERVER['PHP_SELF'].'?&sales_quote_no='.trim(addslashes($objArray['sales_quote_no'])).'&revised_version='.$_GET['revised_version'].'&succs_msg_for_insert');
 
	$SelQuery = 'SELECT MAX(revised_version) AS r_version FROM '.$tbl.'sales_quote_details WHERE sales_quote_no="'.$_GET['sales_quote_no'].'"';
	$Material = $this->ExecuteQuery($SelQuery, "select");
	$objSmarty->assign('Material', $Material);

 }
 		
  function SelectMaterial($objArray="")
  {
			
$enq_id = base64_decode($_GET["enquiry_id"]); 
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
 /**********************************************View Sales Detail/******************************************************/
  function SelectSalesDetail($objArray="")
 {
			
$enq_id = base64_decode($_GET["enquiry_id"]); 
global $objSmarty,$config;
			$tbl = $config['DBPrefix'];
			$SelQuery = 'SELECT * FROM `'.$tbl.'sales_quote_details` WHERE revised_version="'.$_GET['revised_version'].'" AND sales_quote_no="'.$_GET['sales_quote_no'].'" AND status="1"';
			$SalesList2 = $this->ExecuteQuery($SelQuery, 'select');
			$objSmarty->assign('SalesList2', $SalesList2);
			
 }
  /**********************************************View Sales Detail/******************************************************/
  function SelectQuote($objArray="")
 {
			
$enq_id = base64_decode($_GET["enquiry_id"]); 
global $objSmarty,$config;
			$tbl = $config['DBPrefix'];
			$SelQuery = 'SELECT * FROM `'.$tbl.'sales_quote_master` WHERE sales_quote_no="'.$_GET["sales_quote_no"].'" AND `status` = 1 LIMIT 0,1' ;
			$SalesQuote = $this->ExecuteQuery($SelQuery, 'select');
			$objSmarty->assign('SalesQuote', $SalesQuote);
			return $SalesQuote;
 }
 /**********************************************Enquiry List/************************************************************/
 function Enquiry($objArray="")
 {
			
$enq_id = base64_decode($_GET["enquiry_id"]); 
global $objSmarty,$config;
			$tbl = $config['DBPrefix'];
			$SelQuery = 'SELECT * FROM `'.$tbl.'enquriy_master` WHERE enquiry_id="'.$enq_id.'" AND `status` = 1';
			$Enquiryt = $this->ExecuteQuery($SelQuery, 'select');
			$objSmarty->assign('Enquiryt', $Enquiryt);
			
					
		$SelQuery1 = 'SELECT * FROM `'.$tbl.'group_address` WHERE company_name = "'.$Enquiryt[0]['arka_group'].'" AND status="1"';
		$DelAddress = $this->ExecuteQuery($SelQuery1, 'select');
		$objSmarty->assign('DelAddress', $DelAddress);
		return $DelAddress;
 }
 /**********************************************Revised List/************************************************************/ 
  function Revised_Sale($objArray="")
 {
$sale_id = base64_decode($_GET["sales_quote_no"]); 			
$enq_id = base64_decode($_GET["enquiry_id"]); 
$salesrevise_id = base64_decode($_GET["revised_version"]);
global $objSmarty,$config;
			$tbl = $config['DBPrefix'];
			$revision = $_GET['revised_version'];
			$Revise = ++$revision;
			$SelQuery = 'SELECT * FROM `'.$tbl.'sale_term` WHERE  sales_quote_no="'.$sale_id.'" AND  revised_version="'.$Revise.'" AND `status` = 1';
			$RevTerm = $this->ExecuteQuery($SelQuery, 'select');
			$objSmarty->assign('RevTerm', $RevTerm);
			
		 $SelQuery1 = 'SELECT * FROM `'.$tbl.'sale_term` WHERE  sales_quote_no="'.$sale_id.'" AND  revised_version="'.$salesrevise_id.'" AND `status` = 1';
			$Rev_Term = $this->ExecuteQuery($SelQuery1, 'select');
			$objSmarty->assign('Rev_Term', $Rev_Term);
			
 }
   function Revis_Sale($objArray="")
 {

  			global $objSmarty,$config;
			$tbl = $config['DBPrefix'];
			$revision = $_GET['revised_version'];

			$SelQuery = 'SELECT * FROM `'.$tbl.'sale_term` WHERE  sales_quote_no="'.$_GET['sales_quote_no'].'" AND  revised_version="'.$revision.'" AND `status` = 1';
			$RevTerm = $this->ExecuteQuery($SelQuery, 'select');
			$objSmarty->assign('RevTerm', $RevTerm);

			
 }
 
 }
?>


