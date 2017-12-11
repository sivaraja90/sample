<?php
#####Class For Adding Content Management ######
class ServiceQuoteReg extends MysqlFns{
 
 /* class constructor */
 function ServiceQuoteReg(){
 $this->LDDisplayPath= $config['SiteGlobalPath']."class.ServiceQuoteReg.php";
  global $config;
  global $objSmarty,$config;
  $tbl = $config['DBPrefix'];
  $this->MysqlFns();
  $this->Limit = 20;
  	
	$enq_id = base64_decode($_GET["enquiry_id"]);
	$salesrevise_id = base64_decode($_GET["revised_version"]);
	$salesenqty_id = base64_decode($_GET["enquiry_type"]);
  /*******************************Customer Id Auto Increment*********************************************************/
			$SelQuerys	= 'SELECT max(service_quote_no) as last FROM `'.$tbl.'service_quote_master` Limit 0,1';
			$ServiceDetail	= $this->ExecuteQuery($SelQuerys, 'select');
			if($ServiceDetail[0]['last']!="")
			{
			$ServiceDetail[0]['service_quote_no'] = stripslashes($ServiceDetail[0]['last']);
			$service_quote_no1 = preg_replace("/[^0-9\.]/", '', $ServiceDetail[0]['service_quote_no']);
			$service_quote_no1= $service_quote_no1 + 1;
			$str = str_split($ServiceDetail[0]['last'],3);//CUS
			$service_quote_no = $str[0]. "" .$service_quote_no1;
			}
			else
			{
			$service_quote_no = "SRQ1001";
			}
			if(isset($_GET['service_quote_no'])){
			$objSmarty->assign('service_quote_no', $_GET['service_quote_no']);
			}
			else{
				$objSmarty->assign('service_quote_no', $service_quote_no);
			}
			 
			  
			
/*************************************Sale Revised Version************************************************************************************/
            
			$SelQuerys1= 'SELECT max(revised_version) as last FROM `'.$tbl.'service_quote_details` WHERE service_quote_no="'.$_GET["service_quote_no"].'" Limit 0,1';
			$ServiceDetail	= $this->ExecuteQuery($SelQuerys1, 'select');
			if($ServiceDetail[0]['last']!="")
			{
			$ServiceDetail[0]['revised_version'] = stripslashes($ServiceDetail[0]['last']);
			$r_version1 = preg_replace("/[^0-9\.]/", '', $ServiceDetail[0]['revised_version']);
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
			$str = str_split($ServiceDetail[0]['last'],3);
			$r_version = $str[0]. "" .$mid. "" .$r_version1;
			}

			else
			{
			$r_version = "REV1001";
			}if(isset($_GET['revised_version']))
			{	$selection = $_GET['revised_version'];
				$objSmarty->assign('r_version',++$selection);
			}
			else
			{
				$objSmarty->assign('r_version', $r_version);
			}
			$revised_version = $_GET["revised_version"];
				}

 //******************************************************************************************
 function ChkDupliServ($service_quote_no, $Ident=''){
global $objSmarty,$config,$_POST;
$tbl = $config['DBPrefix'];
		$SelQuery	= 'SELECT * FROM `'.$tbl.'service_quote_master` WHERE `service_quote_no` = "'.$service_quote_no.'" Limit 0,1';
		$ServiceDetail = $this->ExecuteQuery($SelQuery, 'select');
  
		if(!empty($ServiceDetail) && is_array($ServiceDetail))
		   return false;
		else
		  return true;
 }

 /*************************************************Service Insert/*****************************************************/
   function InsertService($objArray="")
 {
 global $objSmarty,$config,$_POST;
// $salesrevise_id = base64_decode($_GET["revised_version"]);
$tbl = $config['DBPrefix'];
$selection = $_GET['revised_version'];
$rev = base64_decode($selection);
$Revise = ++$rev;

 if($this->ChkDupliServ(trim(addslashes($objArray['service_quote_no'])))){
			if(!$objArray['service_quote_no']){
			$objSmarty->assign('ErrorMessage', 'Service Quote Number should not be blank');
			return false;
			}elseif(!$objArray['payment']){
			$objSmarty->assign('ErrorMessage', 'Payment should not be blank');
			return false;
			}elseif(!$objArray['delivery']){
			$objSmarty->assign('ErrorMessage', 'Delivery should not be blank');
			return false;
			}elseif(!$objArray['validity']){
			$objSmarty->assign('ErrorMessage', 'Validity should not be blank');
			return false;
			}elseif(!$objArray['customer_id']){
			$objSmarty->assign('ErrorMessage', 'Customer Id should not be blank');
			return false;
			}elseif(!$objArray['mobile_no']){
			$objSmarty->assign('ErrorMessage', 'Mobile Number should not be blank');
			return false;
			}elseif(!$objArray['city']){
			$objSmarty->assign('ErrorMessage', 'City should not be blank');
			return false;
			}elseif(!$objArray['material_tax_per']){
			$objSmarty->assign('ErrorMessage', 'Material Tax Percentage should not be blank');
			return false;
			}elseif(!$objArray['labour_tax_per']){
			$objSmarty->assign('ErrorMessage', 'Labour Tax Percentage should not be blank');
			return false;
			}elseif(!$objArray['created_by']){
			$objSmarty->assign('ErrorMessage', 'Created By should not be blank');
			return false;
			}
					
			$objSmarty->assign('service_quote_no', $objArray['service_quote_no']);
			if($objArray['service_quote_no'] && $objArray['customer_id']){
			
	
 $InsQuery = 'INSERT INTO '.$tbl.'service_quote_master(`service_quote_no`,`service_quote_date`,`salutation`,`revised_version`,`customer_id`,`customer_name`,`enquiry_id`,`company_name`,`mobile_no`,`address`,`address1`,`area`,`city`,`pincode`,`phone_no`,`extension`,`area_code`,`email`,`email1`,`total`,`created_by`,`created_date`,`created_time`,`timestamp`,`remarks`,`status`) VALUES("'.trim(addslashes($objArray['service_quote_no'])).'","'.trim(addslashes($objArray['quote_date'])).'","'.trim(addslashes($objArray['salutation'])).'","'.trim(addslashes($objArray['revised_version'])).'","'.trim(addslashes($objArray['customer_id'])).'","'.trim(addslashes($objArray['customer_name'])).'","'.trim(addslashes($objArray['enquiry_id'])).'","'.trim(addslashes($objArray['company_name'])).'","'.trim(addslashes($objArray['mobile_no'])).'","'.trim(addslashes($objArray['address'])).'","'.trim(addslashes($objArray['address1'])).'","'.trim(addslashes($objArray['area'])).'","'.trim(addslashes($objArray['city'])).'","'.trim(addslashes($objArray['pincode'])).'","'.trim(addslashes($objArray['phone_no'])).'","'.trim(addslashes($objArray['extension'])).'","'.trim(addslashes($objArray['area_code'])).'","'.trim(addslashes($objArray['email'])).'","'.trim(addslashes($objArray['email1'])).'","'.trim(addslashes($objArray['total'])).'","'.trim(addslashes($objArray['created_by'])).'","'.trim(addslashes($objArray['created_date'])).'","'.trim(addslashes($objArray['created_time'])).'","'.trim(addslashes($objArray['timestamp'])).'","'.trim(addslashes($objArray['remarks'])).'","1")';
$this->ExecuteQuery($InsQuery, 'insert');

 $InsQuery2 = 'INSERT INTO '.$tbl.'service_quote_details(`service_quote_no`,`revised_version`,`enquiry_id`,`material_description`,`sqft`,`material`,`labour`,`material_value`,`labour_value`,`material_estimate`,`labour_estimate`,`total_labour_cost`,`total_material_cost`,`total_material`,`total_labour`,`total`,`labour_tax_value`,`material_tax_value`,`labour_tax_per`,`material_tax_per`,`created_by`,`created_date`,`created_time`,`time_stamp`,`remarks`,`status`) VALUES("'.trim(addslashes($objArray['service_quote_no'])).'","'.trim(addslashes($objArray['revised_version'])).'","'.trim(addslashes($objArray['enquiry_id'])).'","'.trim(addslashes($objArray['product_description'])).'","'.trim(addslashes($objArray['sqft'])).'","'.trim(addslashes($objArray['material'])).'","'.trim(addslashes($objArray['labour'])).'","'.trim(addslashes($objArray['material_value'])).'","'.trim(addslashes($objArray['labour_value'])).'","'.trim(addslashes($objArray['total_material'])).'","'.trim(addslashes($objArray['total_labour'])).'","'.trim(addslashes($objArray['total_labour_cost'])).'","'.trim(addslashes($objArray['total_material_cost'])).'","'.trim(addslashes($objArray['total_material'])).'","'.trim(addslashes($objArray['total_labour'])).'","'.trim(addslashes($objArray['total'])).'","'.trim(addslashes($objArray['labour_tax_value'])).'","'.trim(addslashes($objArray['material_tax_value'])).'","'.trim(addslashes($objArray['labour_tax_per'])).'","'.trim(addslashes($objArray['material_tax_per'])).'","'.trim(addslashes($objArray['created_by'])).'","'.trim(addslashes($objArray['created_date'])).'","'.trim(addslashes($objArray['created_time'])).'","'.trim(addslashes($objArray['timestamp'])).'","'.trim(addslashes($objArray['remarks'])).'","1")';
$this->ExecuteQuery($InsQuery2, 'insert');	

 $InsQuery3 = 'INSERT INTO '.$tbl.'service_terms_master(`service_quote_no`,`revised_version`,`payment`,`delivery`,`validity`,`created_by`,`created_date`,`created_time`,`time_stamp`,`remarks`,`status`) VALUES("'.trim(addslashes($objArray['service_quote_no'])).'","'.trim(addslashes($objArray['revised_version'])).'","'.trim(addslashes($objArray['payment'])).'","'.trim(addslashes($objArray['delivery'])).'","'.trim(addslashes($objArray['validity'])).'","'.trim(addslashes($objArray['created_by'])).'","'.trim(addslashes($objArray['created_date'])).'","'.trim(addslashes($objArray['created_time'])).'","'.trim(addslashes($objArray['timestamp'])).'","'.trim(addslashes($objArray['remarks'])).'","1")';
$this->ExecuteQuery($InsQuery3, 'insert');	


$SelQuery	= 'SELECT SUM(total) AS tot FROM `'.$tbl.'service_quote_details` WHERE `service_quote_no` = "'.trim(addslashes($objArray['service_quote_no'])).'" AND revised_version = "'.trim(addslashes($objArray['revised_version'])).'" AND status="1"';
$ServiceDetail = $this->ExecuteQuery($SelQuery, 'select');
$objSmarty->assign('ServiceDetail', $ServiceDetail);

$SelQuery1 = 'SELECT SUM(material_estimate + labour_estimate) AS sub FROM `'.$tbl.'service_quote_details` WHERE enquiry_id="'.trim(addslashes($objArray['enquiry_id'])).'" AND revised_version="'.trim(addslashes($objArray['revised_version'])).'"  AND status="1"';
		$SubView = $this->ExecuteQuery($SelQuery1, "select");
		$objSmarty->assign('SubView', $SubView);
	
		
		$SelQuery2 = 'SELECT * FROM `'.$tbl.'service_quote_details` WHERE enquiry_id="'.$enq_id.'" AND revised_version= "'.$selection.'"';
		$InvoiceView = $this->ExecuteQuery($SelQuery2, "select");
		$objSmarty->assign('InvoiceView', $InvoiceView);
		
$UpQuery = 'UPDATE `'.$tbl.'service_quote_master` SET `total` = "'.$ServiceDetail[0]['tot'].'" , `sub_total` = "'.$SubView[0]['sub'].'"WHERE `service_quote_no` = "'.trim(addslashes($objArray['service_quote_no'])).'"AND `revised_version` ="'.trim(addslashes($objArray['revised_version'])).'"';
$ServiceUp = $this->ExecuteQuery($UpQuery, 'update');
}
header('Location:' .$_SERVER['PHP_SELF'].'?enquiry_id='.trim(addslashes($objArray['enquiry_id'])).'&service_quote_no='.trim(addslashes($objArray['service_quote_no'])).'&revised_version='.trim(addslashes($objArray['revised_version'])).'&succs_msg_for_insert');
return true;
}

else
{
 $InsQuery2 = 'INSERT INTO '.$tbl.'service_quote_details(`service_quote_no`,`revised_version`,`enquiry_id`,`material_description`,`sqft`,`material`,`labour`,`material_value`,`labour_value`,`material_estimate`,`labour_estimate`,`total_labour_cost`,`total_material_cost`,`total_material`,`total_labour`,`total`,`labour_tax_value`,`material_tax_value`,`labour_tax_per`,`material_tax_per`,`created_by`,`created_date`,`created_time`,`time_stamp`,`remarks`,`status`) VALUES("'.trim(addslashes($objArray['service_quote_no'])).'","'.trim(addslashes($objArray['revised_version'])).'","'.trim(addslashes($objArray['enquiry_id'])).'","'.trim(addslashes($objArray['product_description'])).'","'.trim(addslashes($objArray['sqft'])).'","'.trim(addslashes($objArray['material'])).'","'.trim(addslashes($objArray['labour'])).'","'.trim(addslashes($objArray['material_value'])).'","'.trim(addslashes($objArray['labour_value'])).'","'.trim(addslashes($objArray['total_material'])).'","'.trim(addslashes($objArray['total_labour'])).'","'.trim(addslashes($objArray['total_labour_cost'])).'","'.trim(addslashes($objArray['total_material_cost'])).'","'.trim(addslashes($objArray['total_material'])).'","'.trim(addslashes($objArray['total_labour'])).'","'.trim(addslashes($objArray['total'])).'","'.trim(addslashes($objArray['labour_tax_value'])).'","'.trim(addslashes($objArray['material_tax_value'])).'","'.trim(addslashes($objArray['labour_tax_per'])).'","'.trim(addslashes($objArray['material_tax_per'])).'","'.trim(addslashes($objArray['created_by'])).'","'.trim(addslashes($objArray['created_date'])).'","'.trim(addslashes($objArray['created_time'])).'","'.trim(addslashes($objArray['timestamp'])).'","'.trim(addslashes($objArray['remarks'])).'","1")';
$this->ExecuteQuery($InsQuery2, 'insert');

$UpQuery1 ='UPDATE `'.$tbl.'service_terms_master`  SET `payment` = "'.trim($objArray['payment']).'" , `delivery` = "'.trim($objArray['delivery']).'" ,`validity` = "'.trim($objArray['validity']).'",`created_by` ="'.trim($objArray['created_by']).'" WHERE `service_quote_no` = "'.trim(addslashes($objArray['service_quote_no'])).'" AND revised_version = "'.trim(addslashes($objArray['revised_version'])).'"';
$this->ExecuteQuery($UpQuery1, 'update');

$SelQuery1	= 'SELECT SUM(total) AS tot FROM `'.$tbl.'service_quote_details` WHERE `service_quote_no` = "'.trim(addslashes($objArray['service_quote_no'])).'" AND revised_version = "'.trim(addslashes($objArray['revised_version'])).'" AND status="1"';
$ServiceDetail = $this->ExecuteQuery($SelQuery1, 'select');
$objSmarty->assign('ServiceDetail', $ServiceDetail);


 $SelQuery = 'SELECT SUM(material_estimate + labour_estimate) AS sub FROM `'.$tbl.'service_quote_details` WHERE enquiry_id="'.$_GET["enquiry_id"].'" AND revised_version="'.$_GET["revised_version"].'"  AND status="1"';
		$SubView = $this->ExecuteQuery($SelQuery, "select");
		$objSmarty->assign('SubView', $SubView);
		
		$enq_id = base64_decode($_GET["enquiry_id"]);
		
		$SelQuery1 = 'SELECT * FROM `'.$tbl.'service_quote_details` WHERE enquiry_id="'.$enq_id.'" AND revised_version= "'.$selection.'"';
		$InvoiceView = $this->ExecuteQuery($SelQuery1, "select");
		$objSmarty->assign('InvoiceView', $InvoiceView);

	
$UpQuery = 'UPDATE `'.$tbl.'service_quote_master` SET `total` = "'.$ServiceDetail[0]['tot'].'" , `sub_total` = "'.$SubView[0]['sub'].'"WHERE `service_quote_no` = "'.$_GET["service_quote_no"].'"AND `revised_version` ="'.$_GET["revised_version"].'"';
$ServiceUp = $this->ExecuteQuery($UpQuery, 'update');
}
header('Location:' .$_SERVER['PHP_SELF'].'?enquiry_id='.trim(addslashes($objArray['enquiry_id'])).'&service_quote_no='.trim(addslashes($objArray['service_quote_no'])).'&revised_version='.trim(addslashes($objArray['revised_version'])).'&succs_msg_for_insert');
return true;
}
/*************************************************View Edit Customer***************************************************************/
function ViewEdit($objArray)
 {
 		 global $objSmarty,$config;
$tbl = $config['DBPrefix'];
			
			$SelQuery = 'SELECT * FROM `'.$tbl.'service_quote_master`, `'.$tbl.'service_quote_details` WHERE '.$tbl.'service_quote_master.service_quote_no="'.$_GET['service_quote_no'].'" AND '.$tbl.'service_quote_details.service_quote_no="'.$_GET['service_quote_no'].'"';
			$ListView = $this->ExecuteQuery($SelQuery, "select");
			$objSmarty->assign('ListView', $ListView);
			return $ListView;

 }
 
 /**********************************************Delete Contact*********************************************************************/
 function DeleteMaster($CatIdent)
 {
 		 global $objSmarty,$config;
			$tbl = $config['DBPrefix'];
			$DelQuery = 'update `'.$tbl.'enquriy_master` set `status` = 0 WHERE `enquiry_id` ="'.$CatIdent.'"';
			$this->ExecuteQuery($DelQuery, 'update');
          //  header('Location:' .$_SERVER['PHP_SELF'].'?succs_msg_for_del');  

 }
  function DeleteServiceEditDetails($CatIdent, $CusIdent)
 {
 		 global $objSmarty,$config;
		 $tbl = $config['DBPrefix'];
		 $DelQuery = 'DELETE FROM `'.$tbl.'service_quote_details` WHERE `sl_no` ="'.$CatIdent.'" AND `service_quote_no`="'.$CusIdent.'"';
			$this->ExecuteQuery($DelQuery, 'delete');
         header('Location:' .$_SERVER['PHP_SELF'].'?service_quote_no='.$CusIdent.'&enquiry_id="'.$_GET['enquiry_id'].'"&revised_version="'.$_GET['revised_version'].'"&succs_msg_for_del');
			return true;
		   
  
 }
  /**********************************************View Service Detail*********************************************************************/
 function ViewServiceQuoteDetail()
 {
global $objSmarty,$config;
$tbl = $config['DBPrefix'];  
$SelQuery = 'SELECT '.$tbl.'service_master.*, '.$tbl.'service_master_details.* FROM `'.$tbl.'service_master`, `'.$tbl.'service_master_details` WHERE '.$tbl.'service_master.service_order_no='.$tbl.'service_master_details.service_order_no  AND  '.$tbl.'service_master.enquiry_id="'.$_GET['enquiry_id'].'"'; 
			$ListDetails = $this->ExecuteQuery($SelQuery, "select"); 
			$objSmarty->assign('ListDetails', $ListDetails);
			return $ListDetails;

 }
 /*************************************************Select Service Quote/***************************************************************/
 function SelectMaster1($objArray="")
 {         $enquiry = base64_decode($_GET["enquiry_id"]);
		   
 		   global $objSmarty,$config;
			$tbl = $config['DBPrefix'];
			if(isset($_GET['enquiry_id']) && isset($_GET['service_quote_no']))
			{
			$SelQuery = 'SELECT * FROM `'.$tbl.'service_quote_master` WHERE `status` = 1 AND `enquiry_id` ="'.$enquiry.'" AND service_quote_no="'.$_GET["service_quote_no"].'"';
			}
			elseif(isset($_GET['enquiry_id']))
			{
		 	 $SelQuery = 'SELECT * FROM `'.$tbl.'enquriy_master` WHERE `status` = 1 AND `enquiry_id` ="'.$enquiry.'"';
			}
			
			$LDList2 = $this->ExecuteQuery($SelQuery, 'select');
			 $objSmarty->assign('LDList2', $LDList2);

 }
 /****************************************************Time Stamp Value As Date And Time Form Master****************************************/
 
  function DateStamp()
 {
 		 global $objSmarty,$config;
$tbl = $config['DBPrefix'];
			 $SelQuery = 'SELECT Date(timestamp) as Date from '.$tbl.'service_quote_master WHERE service_quote_no="'.$_GET['service_quote_no'].'"';
			 $Date_Stamp = $this->ExecuteQuery($SelQuery, "select");
			  //print $Date;
			 $objSmarty->assign('Date_Stamp', $Date_Stamp);
			 return $Date_Stamp;
			 
}

  function TimeStamp()
  {
   global $objSmarty,$config;
$tbl = $config['DBPrefix'];
			 $SelQuery1 = 'SELECT  Time(timestamp) as Time from '.$tbl.'service_quote_master WHERE service_quote_no="'.$_GET['service_quote_no'].'"';
			 $Time_Stamp = $this->ExecuteQuery($SelQuery1, "select");
			 $objSmarty->assign('Time_Stamp', $Time_Stamp);
			 return $Time_Stamp;
			

 }
 /**************************************Revised Version No Validation*************************************************************************/
function ChkDupliRev($revised_version,$Ident3=''){
global $objSmarty,$config,$_POST;
$tbl = $config['DBPrefix'];
		$SelQuery3	= 'SELECT * FROM `'.$tbl.'service_quote_master` WHERE `revised_version` = "'.$revised_version.'" AND service_quote_no="'.$_GET['service_quote_no'].'" Limit 0,1';
		$ServiceDetail1 = $this->ExecuteQuery($SelQuery3, 'select');
  
		if(!empty($ServiceDetail1) && is_array($ServiceDetail1))
		   return false;
		else
		  return true;
 }
 
function ChkDupliQuo($service_quote_no,$Ident2=''){
global $objSmarty,$config,$_POST;
$tbl = $config['DBPrefix'];
		$SelQuery4	= 'SELECT * FROM `'.$tbl.'service_quote_details` WHERE `service_quote_no` = "'.$service_quote_no.'" Limit 0,1';
		$ServiceDetail2 = $this->ExecuteQuery($SelQuery4, 'select');
  
		if(!empty($ServiceDetail2) && is_array($ServiceDetail2))
		   return false;
		else
		  return true;
 }
 /*************************************************View Edit Customer/***************************************************************/
function ReviseService($objArray="")
 {
		global $objSmarty,$config,$_POST,$_REQUEST;
		$tbl = $config['DBPrefix'];
//		$enq_id = base64_decode($_GET["enquiry_id"]);
		$selection = $_GET['revised_version'];
		$Revise = ++$selection;
 if($this->ChkDupliRev(trim(addslashes($objArray['revised_version'])))){
			if(!$objArray['service_quote_no']){
			$objSmarty->assign('ErrorMessage', 'Service Quote Number should not be blank');
			return false;
			}elseif(!$objArray['material_tax_per']){
			$objSmarty->assign('ErrorMessage', 'Material Tax Percentage should not be blank');
			return false;
			}elseif(!$objArray['total_material']){
			$objSmarty->assign('ErrorMessage', 'Total Material should not be blank');
			return false;
			}elseif(!$objArray['labour_tax_per']){
			$objSmarty->assign('ErrorMessage', 'Labour Tax Percentage should not be blank');
			return false;
			}elseif(!$objArray['total_labour']){
			$objSmarty->assign('ErrorMessage', 'Total Labour should not be blank');
			return false;
			}elseif(!$objArray['total']){
			$objSmarty->assign('ErrorMessage', 'Total should not be blank');
			return false;
			}
			$objSmarty->assign('service_quote_no', $objArray['service_quote_no']);
			if($objArray['service_quote_no'] && $objArray['service_quote_no']){
		
		 $InsQuery = 'INSERT INTO '.$tbl.'service_quote_master(`service_quote_no`,`service_quote_date`,`salutation`,`revised_version`,`customer_id`,`customer_name`,`enquiry_id`,`company_name`,`mobile_no`,`address`,`address1`,`area`,`city`,`pincode`,`phone_no`,`extension`,`area_code`,`email`,`email1`,`total`,`created_by`,`created_date`,`created_time`,`timestamp`,`remarks`,`status`) VALUES("'.trim(addslashes($objArray['service_quote_no'])).'","'.trim(addslashes($objArray['quote_date'])).'","'.trim(addslashes($objArray['salutation'])).'","'.trim(addslashes($objArray['revised_version'])).'","'.trim(addslashes($objArray['customer_id'])).'","'.trim(addslashes($objArray['customer_name'])).'","'.trim(addslashes($objArray['enquiry_id'])).'","'.trim(addslashes($objArray['company_name'])).'","'.trim(addslashes($objArray['mobile_no'])).'","'.trim(addslashes($objArray['address'])).'","'.trim(addslashes($objArray['address1'])).'","'.trim(addslashes($objArray['area'])).'","'.trim(addslashes($objArray['city'])).'","'.trim(addslashes($objArray['pincode'])).'","'.trim(addslashes($objArray['phone_no'])).'","'.trim(addslashes($objArray['extension'])).'","'.trim(addslashes($objArray['area_code'])).'","'.trim(addslashes($objArray['email'])).'","'.trim(addslashes($objArray['email1'])).'","'.trim(addslashes($objArray['total'])).'","'.trim(addslashes($objArray['created_by'])).'","'.trim(addslashes($objArray['created_date'])).'","'.trim(addslashes($objArray['created_time'])).'","'.trim(addslashes($objArray['timestamp'])).'","'.trim(addslashes($objArray['remarks'])).'","1")';
$this->ExecuteQuery($InsQuery, 'insert');

 $InsQuery2 = 'INSERT INTO '.$tbl.'service_quote_details(`service_quote_no`,`revised_version`,`enquiry_id`,`material_description`,`sqft`,`material`,`labour`,`material_value`,`labour_value`,`material_estimate`,`labour_estimate`,`total_labour_cost`,`total_material_cost`,`total_material`,`total_labour`,`total`,`labour_tax_value`,`material_tax_value`,`labour_tax_per`,`material_tax_per`,`created_by`,`created_date`,`created_time`,`time_stamp`,`remarks`,`status`) VALUES("'.trim(addslashes($objArray['service_quote_no'])).'","'.trim(addslashes($objArray['revised_version'])).'","'.trim(addslashes($objArray['enquiry_id'])).'","'.trim(addslashes($objArray['product_description'])).'","'.trim(addslashes($objArray['sqft'])).'","'.trim(addslashes($objArray['material'])).'","'.trim(addslashes($objArray['labour'])).'","'.trim(addslashes($objArray['material_value'])).'","'.trim(addslashes($objArray['labour_value'])).'","'.trim(addslashes($objArray['total_material'])).'","'.trim(addslashes($objArray['total_labour'])).'","'.trim(addslashes($objArray['total_labour_cost'])).'","'.trim(addslashes($objArray['total_material_cost'])).'","'.trim(addslashes($objArray['total_material'])).'","'.trim(addslashes($objArray['total_labour'])).'","'.trim(addslashes($objArray['total'])).'","'.trim(addslashes($objArray['labour_tax_value'])).'","'.trim(addslashes($objArray['material_tax_value'])).'","'.trim(addslashes($objArray['labour_tax_per'])).'","'.trim(addslashes($objArray['material_tax_per'])).'","'.trim(addslashes($objArray['created_by'])).'","'.trim(addslashes($objArray['created_date'])).'","'.trim(addslashes($objArray['created_time'])).'","'.trim(addslashes($objArray['timestamp'])).'","'.trim(addslashes($objArray['remarks'])).'","1")';
$this->ExecuteQuery($InsQuery2, 'insert');

$InsQuery3= 'INSERT INTO `'.$tbl.'service_terms_master`(`service_quote_no`,`revised_version`,`payment`,`delivery`,`validity`,`created_by`, `created_date`, `created_time`,`status`) VALUES("'.trim(addslashes($objArray['service_quote_no'])).'","'.trim(addslashes($objArray['revised_version'])).'","'.trim(addslashes($objArray['payment'])).'","'.trim(addslashes($objArray['delivery'])).'","'.trim(addslashes($objArray['validity'])).'","'.trim(addslashes($objArray['created_by'])).'","'.trim(addslashes($objArray['created_date'])).'","'.trim(addslashes($objArray['created_time'])).'","1")';
 $this->ExecuteQuery($InsQuery3, 'insert');

$SelQuery	= 'SELECT SUM(total) AS tot FROM `'.$tbl.'service_quote_details` WHERE `service_quote_no` = "'. $_GET['service_quote_no'].'" AND revised_version = "'.$Revise.'" AND status="1"';
$ServiceDetail = $this->ExecuteQuery($SelQuery, 'select');
$objSmarty->assign('ServiceDetail', $ServiceDetail);


 $SelQuery5 = 'SELECT SUM(material_estimate + labour_estimate) AS sub FROM `'.$tbl.'service_quote_details` WHERE `service_quote_no` = "'.$_GET['service_quote_no'].'" AND revised_version= "'.$Revise.'"  AND status="1"';
$SubView = $this->ExecuteQuery($SelQuery5, 'select');
$objSmarty->assign('SubView', $SubView);
			
$SelQuery1 = 'SELECT * FROM `'.$tbl.'service_quote_details` WHERE enquiry_id="'.$_GET['enquiry_id'].'" AND revised_version= "'.$Revise.'"';
		$InvoiceView = $this->ExecuteQuery($SelQuery1, "select");
		$objSmarty->assign('InvoiceView', $InvoiceView);

			
 $UpQuery = 'UPDATE `'.$tbl.'service_quote_master` SET `total` = "'.$ServiceDetail[0]['tot'].'" , `sub_total` = "'.$SubView[0]['sub'].'"WHERE `service_quote_no` = "'.$_GET["service_quote_no"].'"AND `revised_version` ="'.$Revise.'"';
$ServiceUp = $this->ExecuteQuery($UpQuery, 'update');
}
}
else
{
 $InsQuery2 = 'INSERT INTO '.$tbl.'service_quote_details(`service_quote_no`,`revised_version`,`enquiry_id`,`material_description`,`sqft`,`material`,`labour`,`material_value`,`labour_value`,`material_estimate`,`labour_estimate`,`total_labour_cost`,`total_material_cost`,`total_material`,`total_labour`,`total`,`labour_tax_value`,`material_tax_value`,`labour_tax_per`,`material_tax_per`,`created_by`,`created_date`,`created_time`,`time_stamp`,`remarks`,`status`) VALUES("'.trim(addslashes($objArray['service_quote_no'])).'","'.trim(addslashes($objArray['revised_version'])).'","'.trim(addslashes($objArray['enquiry_id'])).'","'.trim(addslashes($objArray['product_description'])).'","'.trim(addslashes($objArray['sqft'])).'","'.trim(addslashes($objArray['material'])).'","'.trim(addslashes($objArray['labour'])).'","'.trim(addslashes($objArray['material_value'])).'","'.trim(addslashes($objArray['labour_value'])).'","'.trim(addslashes($objArray['total_material'])).'","'.trim(addslashes($objArray['total_labour'])).'","'.trim(addslashes($objArray['total_labour_cost'])).'","'.trim(addslashes($objArray['total_material_cost'])).'","'.trim(addslashes($objArray['total_material'])).'","'.trim(addslashes($objArray['total_labour'])).'","'.trim(addslashes($objArray['total'])).'","'.trim(addslashes($objArray['labour_tax_value'])).'","'.trim(addslashes($objArray['material_tax_value'])).'","'.trim(addslashes($objArray['labour_tax_per'])).'","'.trim(addslashes($objArray['material_tax_per'])).'","'.trim(addslashes($objArray['created_by'])).'","'.trim(addslashes($objArray['created_date'])).'","'.trim(addslashes($objArray['created_time'])).'","'.trim(addslashes($objArray['timestamp'])).'","'.trim(addslashes($objArray['remarks'])).'","1")';
$this->ExecuteQuery($InsQuery2, 'insert');


$UpQuery1 ='UPDATE `'.$tbl.'service_terms_master`  SET `payment` = "'.trim($objArray['payment']).'" , `delivery` = "'.trim($objArray['delivery']).'" ,`validity` = "'.trim($objArray['validity']).'",`created_by` ="'.trim($objArray['created_by']).'" WHERE `service_quote_no` = "'.trim(addslashes($objArray['service_quote_no'])).'" AND revised_version = "'.$Revise.'"';
$this->ExecuteQuery($UpQuery1, 'update');

$SelQuery1	= 'SELECT SUM(total) AS tot FROM `'.$tbl.'service_quote_details` WHERE `service_quote_no` = "'.trim(addslashes($objArray['service_quote_no'])).'" AND revised_version = "'.$Revise.'" AND status="1"';
$ServiceDetail = $this->ExecuteQuery($SelQuery1, 'select');
$objSmarty->assign('ServiceDetail', $ServiceDetail);


$SelQuery5 = 'SELECT SUM(material_estimate + labour_estimate) AS sub FROM `'.$tbl.'service_quote_details` WHERE `service_quote_no` = "'.$_GET['service_quote_no'].'" AND revised_version="'.$Revise.'"  AND status="1"';
		$SubView = $this->ExecuteQuery($SelQuery5, "select");
	$objSmarty->assign('SubView', $SubView);
		
		$enq_id = base64_decode($_GET["enquiry_id"]);
		$SelQuery1 = 'SELECT * FROM `'.$tbl.'service_quote_details` WHERE enquiry_id="'.$enq_id.'" AND revised_version= "'.$Revise.'"';
		$InvoiceView = $this->ExecuteQuery($SelQuery1, "select");
		$objSmarty->assign('InvoiceView', $InvoiceView);

		
$UpQuery = 'UPDATE `'.$tbl.'service_quote_master` SET `total` = "'.$ServiceDetail[0]['tot'].'" , `sub_total` = "'.$SubView[0]['sub'].'"WHERE `service_quote_no` = "'.$service_quote_id.'"AND `revised_version` ="'.$Revise.'"';
$ServiceUp = $this->ExecuteQuery($UpQuery, 'update');
}

header('Location:' .$_SERVER['PHP_SELF'].'?&service_quote_no='.trim(addslashes($objArray['service_quote_no'])).'&revised_version='.$_GET['revised_version'].'&succs_msg_for_insert');return true;

$SelQuery = 'SELECT MAX(revised_version) AS r_version FROM '.$tbl.'service_quote_details WHERE service_quote_no="'.$_GET['service_quote_no'].'"';
$Material = $this->ExecuteQuery($SelQuery, "select");
$objSmarty->assign('Material', $Material);

}
/*************************************Service Invoice/********************************************************/
function ServiceInvoice($objArray)
 {
   	$service_quote_id = base64_decode($_GET["service_quote_no"]);
	$enq_id = base64_decode($_GET["enquiry_id"]);
	$salesrevise_id = base64_decode($_GET["revised_version"]);
	$salesenqty_id = base64_decode($_GET["enquiry_type"]);

global $objSmarty,$config;
$tbl = $config['DBPrefix'];
		
		$enq_id = base64_decode($_GET["enquiry_id"]);
		$salesrevise_id = base64_decode($_GET["revised_version"]);	
		$SelQuery = 'SELECT SUM(material_estimate + labour_estimate) AS sub FROM `'.$tbl.'service_quote_details` WHERE enquiry_id="'.$enq_id.'" AND revised_version="'.$salesrevise_id.'" ';
			$SubView = $this->ExecuteQuery($SelQuery, "select");
			$objSmarty->assign('SubView', $SubView);
			
			$SelQuery1 = 'SELECT * FROM `'.$tbl.'service_quote_details` WHERE enquiry_id="'.$enq_id.'" AND revised_version="'.$salesrevise_id.'"';
			$InvoiceView = $this->ExecuteQuery($SelQuery1, "select");
			//print_r($InvoiceView);exit;
			$objSmarty->assign('InvoiceView', $InvoiceView);


 }
  /********************************************Select Enquiry Id/****************************************************************/
  function SelectId($objArray=""){
global $objSmarty,$config,$_POST;
$tbl = $config['DBPrefix'];
		$SelQuery	= 'SELECT * FROM `'.$tbl.'service_quote_master` WHERE `service_quote_no` = "'.$_GET['service_quote_no'].'"';
		$RevDetail = $this->ExecuteQuery($SelQuery, 'select');
		$objSmarty->assign('RevDetail' , $RevDetail);

  
 }
  /********************************************List Service Details /****************************************************************/
function list_service_details()
 { 

 global $objSmarty,$config;
$tbl = $config['DBPrefix'];
 $selQuery='SELECT DISTINCT service_quote_no , service_quote_date FROM `'.$tbl.'service_quote_master` WHERE service_quote_no = "'.$_GET['service_quote_no'].'" AND `status`=1'; 
 $ListDetail		= $this->ExecuteQuery($selQuery, "select");
 $objSmarty->assign('ListDetail',$ListDetail);

 $select_query='SELECT * FROM `'.$tbl.'service_quote_details` WHERE service_quote_no = "'.$_GET['service_quote_no'].'" AND `status`=1';
 $ListDetail2		= $this->ExecuteQuery($select_query, "select");
 $objSmarty->assign('ListDetail2',$ListDetail2);
 return $ListDetail2;
 
 }
 /***************************************************************Service Quote List/**************************/
 function list_serviceIns_details($objArray='')
 {
 global $objSmarty,$config;
$tbl = $config['DBPrefix'];
 $select_query='SELECT * FROM `'.$tbl.'service_quote_details` WHERE service_quote_no = "'.$_GET['service_quote_no'].'" AND revised_version = "'.$_GET['revised_version'].'" AND `status`=1';
 $SelectList		= $this->ExecuteQuery($select_query, "select");

 $objSmarty->assign('SelectList',$SelectList);
 //print_r($SelectList);exit;
 return $SelectList;
 }
 function Selection()
 {
 global $objSmarty,$config;
$tbl = $config['DBPrefix'];
 $selQuery='SELECT * FROM `'.$tbl.'service_quote_details` WHERE service_quote_no = "'.$_GET['service_quote_no'].'" AND `status`=1'; 
 $ListDetail5		= $this->ExecuteQuery($selQuery, "select");
 $objSmarty->assign('ListDetail5',$ListDetail5);
 return $ListDetail5;
}
/***********************************Service View/************************************************************/
function GetServiceView($objArray='')  {
		global $objSmarty,$config;
		$tbl = $config['DBPrefix'];
		$objSmarty->assign('c_id',$_GET['service_quote_no']);
		$SelQuery = 'SELECT * FROM `'.$tbl.'service_quote_master` WHERE service_quote_no ="'.$_GET['service_quote_no'].'"' ;
		//echo $SelQuery;
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
	/******************************************View service detail********************************************************************/	
 function ViewServiceDetail()
 {
 		 global $objSmarty,$config;
		$tbl = $config['DBPrefix'];
			$SelQuery = 'SELECT * FROM  '.$tbl.'service_quote_master WHERE service_quote_no ="'.$_GET['service_quote_no'].'"';
			$ListView2 = $this->ExecuteQuery($SelQuery, "select");
			$objSmarty->assign('ListView2', $ListView2);
			return $ListView2;

 }	
/******************************************Select service detail/********************************************************************/	
  function SelectServiceDetail($objArray="")
 {
			global $objSmarty,$config;
			$tbl = $config['DBPrefix'];
			if($_GET['revised_version'] != "")
			{
			$SelQuery = 'SELECT * FROM `'.$tbl.'service_quote_master` WHERE service_quote_no ="'.$_GET['service_quote_no'].'" AND revised_version ="'.$_GET['revised_version'].'"  AND  `status` = 1';
			$ServiceIn = $this->ExecuteQuery($SelQuery, 'select');
			$objSmarty->assign('ServiceIn', $ServiceIn);
//			print_r($ServiceIn);exit;
			return true;
			}
			else
			{
		    $SelQuery = 'SELECT * FROM `'.$tbl.'service_quote_master` WHERE service_quote_no ="'.$_GET['service_quote_no'].'"  AND `status` = 1';
			$ServiceIn = $this->ExecuteQuery($SelQuery, 'select');
			$objSmarty->assign('ServiceIn', $ServiceIn);
			return true;
			}
 }
 
 /*************************************************Revised Quote List/*************************************/
 function Revised_List($objArray='')
 {
 global $objSmarty,$config;
$tbl = $config['DBPrefix'];
$selection = $_GET['revised_version'];
 $select_query='SELECT * FROM `'.$tbl.'service_quote_details` WHERE service_quote_no = "'.$_GET['service_quote_no'].'" AND revised_version = "'.++$selection.'" AND `status`=1';
 $SelectList		= $this->ExecuteQuery($select_query, "select");
 $objSmarty->assign('SelectList',$SelectList);
 return $SelectList;
 }
 
 /*************************************************Select Service Term/*************************************/
   function SelectServiceTerm($objArray="")
 {
			global $objSmarty,$config;
			$tbl = $config['DBPrefix'];
			if($_GET['revised_version'] != "")
			{
			$SelQuery = 'SELECT * FROM `'.$tbl.'service_terms_master` WHERE service_quote_no ="'.$_GET['service_quote_no'].'" AND revised_version ="'.$_GET['revised_version'].'" AND `status` = 1';
			$ServiceTerm = $this->ExecuteQuery($SelQuery, 'select');
			$objSmarty->assign('ServiceTerm', $ServiceTerm);
			//print_r($ServiceTerm);exit;
			return true;
			}
			else
			{
			$SelQuery = 'SELECT * FROM `'.$tbl.'service_terms_master` WHERE service_quote_no ="'.$_GET['service_quote_no'].'" AND `status` = 1';
			$ServiceTerm = $this->ExecuteQuery($SelQuery, 'select');
			$objSmarty->assign('ServiceTerm', $ServiceTerm);
			return true;
			}
 }
 /*******************************************Delete Service/*****************************************************************/
 function DeleteServiceIns($CatIdent,$CusIdent,$Rev,$Enq,$Total,$Sub)
 {
		global $objSmarty,$config;
		$tbl = $config['DBPrefix'];
		$selection = $_GET['revised_version'];
		
 $SelQuery2 = 'SELECT SUM(material_estimate + labour_estimate) AS Sub FROM `'.$tbl.'service_quote_details` WHERE service_quote_no="'.$_GET['service_quote_no'].'" AND revised_version="'.$selection.'" AND `sl_no` ="'.$CatIdent.'" AND status="1"';
		$SubView = $this->ExecuteQuery($SelQuery2, "select");
		$objSmarty->assign('SubView', $SubView); 

		$DelQuery = 'DELETE FROM `'.$tbl.'service_quote_details` WHERE `sl_no` ="'.$CatIdent.'" ';
		$this->ExecuteQuery($DelQuery, 'update');
		
				
		$SelQuery = 'SELECT * FROM '.$tbl.'service_quote_master WHERE service_quote_no = "'.$_GET['service_quote_no'].'" AND revised_version = "'.$selection.'"';
		$SelectSub = $this->ExecuteQuery($SelQuery, "select");
		$objSmarty->assign('SelectSub', $SelectSub);

		$master_var1 = $SelectSub[0]['total'];
		$master_var2 = $SelectSub[0]['sub_total'];
		$detail_var= $SubView[0]['Sub'];
/*		echo $master_var1;echo "  ";
		echo $master_var2;echo "  ";
		
		echo $Total;echo "  ";
		echo $Sub;exit;*/
		$total = $master_var1 - $Total;
		if($total<="0")
		{
		$total="0";
		}

		$sub_total = $master_var2 - $detail_var;
		if($sub_total<="0")
		{
		$sub_total="0";
		}
		$UpQuery ='UPDATE `'.$tbl.'service_quote_master`  SET `total` = "'.$total.'" , `sub_total` = "'.$sub_total.'" WHERE `service_quote_no` ="'.$_GET['service_quote_no'].'" 
		AND `revised_version` ="'.$selection.'"';
		$this->ExecuteQuery($UpQuery, 'update');

		//header('Location:' .$_SERVER['PHP_SELF'].'?enquiry_id='.$_GET['enquiry_id'].'&succs_msg_for_del');

 }
 /**********************************************Delete Revised Version/************************************************************/
  function DeleteRev($CatIdent,$Service,$CusIdent,$Total,$Sub)
 {
		global $objSmarty,$config;
		$tbl = $config['DBPrefix'];
		$selection = $_GET['revised_version'];
		$Revision = ++$selection;
		
 $SelQuery2 = 'SELECT SUM(material_estimate + labour_estimate) AS Sub FROM `'.$tbl.'service_quote_details` WHERE service_quote_no="'.$_GET['service_quote_no'].'" AND revised_version="'.$Revision.'" AND `sl_no` ="'.$CatIdent.'" AND status="1"';
		$SubView = $this->ExecuteQuery($SelQuery2, "select");
		$objSmarty->assign('SubView', $SubView); 

		$DelQuery = 'DELETE FROM `'.$tbl.'service_quote_details` WHERE `sl_no` ="'.$CatIdent.'" ';
		$this->ExecuteQuery($DelQuery, 'update');
		
		$SelQuery = 'SELECT * FROM '.$tbl.'service_quote_master WHERE service_quote_no = "'.$_GET['service_quote_no'].'" AND revised_version = "'.$Revision.'"';
		$SelectSub = $this->ExecuteQuery($SelQuery, "select");
		$objSmarty->assign('SelectSub', $SelectSub);

		$master_var1 = $SelectSub[0]['total'];
		$master_var2 = $SelectSub[0]['sub_total'];
        $detail_var= $SubView[0]['Sub'];
		
		$total = $master_var1 - $Total;
		$sub_total = $master_var2 - $detail_var;
		
$UpQuery ='UPDATE `'.$tbl.'service_quote_master`  SET `total` = "'.$total.'" , `sub_total` = "'.$sub_total.'" WHERE `service_quote_no` ="'.$_GET['service_quote_no'].'" AND `revised_version` ="'.$Revision.'"';

$this->ExecuteQuery($UpQuery, 'update');
 
		header('Location:' .$_SERVER['PHP_SELF'].'?service_quote_no='.$_GET["service_quote_no"].'&revised_version='.$_GET['revised_version'].'&succs_msg_for_del');

 }
/**************************************************Delete Service/************************************************************/ 
  function DeleteServiceEdit($CatIdent,$CusIdent,$Rive,$Total,$Sub)
 {
 
		global $objSmarty,$config;
		$tbl = $config['DBPrefix'];
		$selection = $_GET['revised_version'];
		
 $SelQuery2 = 'SELECT SUM(material_estimate + labour_estimate) AS Sub FROM `'.$tbl.'service_quote_details` WHERE service_quote_no="'.$_GET['service_quote_no'].'" AND revised_version="'.$_GET['revised_version'].'" AND `sl_no` ="'.$CatIdent.'" AND status="1"';
		$SubView = $this->ExecuteQuery($SelQuery2, "select");
		$objSmarty->assign('SubView', $SubView); 
		
		$DelQuery = 'DELETE FROM `'.$tbl.'service_quote_details` WHERE `sl_no` ="'.$CatIdent.'" ';
		$this->ExecuteQuery($DelQuery, 'update');
		
		 $SelQuery = 'SELECT * FROM '.$tbl.'service_quote_master WHERE service_quote_no = "'.$_GET['service_quote_no'].'" AND revised_version = "'.$Rive.'"';
		$SelectSub = $this->ExecuteQuery($SelQuery, "select");
		$objSmarty->assign('SelectSub', $SelectSub);

		$master_var1 = $SelectSub[0]['total'];
        $master_var2 = $SelectSub[0]['sub_total'];
		
/*		echo $master_var1;echo "  ";
		echo $master_var2;echo "  ";
		
		echo $Total;echo "  ";
		echo $Sub;exit;*/
		$detail_var= $SubView[0]['Sub'];
		$total = $master_var1 - $Total;
    $sub_total = $master_var2 - $detail_var;
		
 $UpQuery ='UPDATE `'.$tbl.'service_quote_master`  SET `total` = "'.$total.'" , `sub_total` = "'.$sub_total.'" WHERE `service_quote_no` ="'.$_GET['service_quote_no'].'" AND `revised_version` ="'.$selection.'"';
		$this->ExecuteQuery($UpQuery, 'update');
		
		 header('Location:' .$_SERVER['PHP_SELF'].'?service_quote_no='.$CusIdent.'&revised_version='.$Rive.'&succs_msg_for_del');

 }
 
 /*****************************************************************************************************/
  function ServiceDelete($CatIdent,$CusIdent,$Rev,$Enq)
 { 
		global $objSmarty,$config;
		$tbl = $config['DBPrefix'];
		//print_r($Rev);exit;
		$DelQuery = 'DELETE FROM `'.$tbl.'service_quote_details` WHERE `sl_no` ="'.$CatIdent.'" ';
		$this->ExecuteQuery($DelQuery, 'update');
header('Location:' .$_SERVER['PHP_SELF'].'?service_quote_no='.$CusIdent.'&revised_version='.$Rev.'&enquiry_id='.$Enq.'&succs_msg_for_del');
 }
 
 /***************************************Select_Revise/**************************************************************/
 
   function Select_Revise()
{
		global $objSmarty,$config;
		$tbl = $config['DBPrefix'];
		if($_GET['revised_version'] != "")
		{
		$SelQuery = 'SELECT * from '.$tbl.'service_quote_details WHERE service_quote_no="'.$_GET['service_quote_no'].'" AND revised_version ="'.$_GET['revised_version'].'"';
		$Revise = $this->ExecuteQuery($SelQuery, "select");
		$objSmarty->assign('Revise', $Revise);
		}
		else
		{
		$SelQuery1 = 'SELECT * from '.$tbl.'service_quote_details WHERE service_quote_no="'.$_GET['service_quote_no'].'" AND status="1"';
		$ReviseIn = $this->ExecuteQuery($SelQuery1, "select");
		$objSmarty->assign('ReviseIn', $ReviseIn);
		}
} 
/*******************************************************************************************/
function select_s_total($CatIdent)
{
global $objSmarty,$config;
		$tbl = $config['DBPrefix'];
 $SelQuery2 = 'SELECT SUM(material_estimate + labour_estimate) AS Sub FROM `'.$tbl.'service_quote_details` WHERE service_quote_no="'.$_GET['service_quote_no'].'" AND revised_version="'.$_GET['revised_version'].'" AND `sl_no` ="'.$CatIdent.'" AND status="1"';
		$SubView = $this->ExecuteQuery($SelQuery2, "select");
		$objSmarty->assign('SubView', $SubView);
		}
 /***********************************************Service Edit Details/**********************************************************************/
 function EditService($objArray='')
 {
  global $objSmarty,$_config,$_POST;
  global $objSmarty,$config;
  $tbl = $config['DBPrefix'];
  $selection = $_GET['revised_version'];
//$Revise = ++$selection;
			if(!$objArray['product_description']){
			$objSmarty->assign('ErrorMessage', 'Material Description should not be blank');
			return false;
			}elseif(!$objArray['total_material']){
			$objSmarty->assign('ErrorMessage', 'Total Material Field should not be blank');
			return false;
			}elseif(!$objArray['total_labour']){
			$objSmarty->assign('ErrorMessage', 'Total Labour  Field should not be blank');
			return false;
			}
			
			$objSmarty->assign('service_quote_no', $objArray['service_quote_no']);
			if($objArray['service_quote_no'] && $objArray['service_quote_no']){
			
 $InsQuery2 = 'INSERT INTO '.$tbl.'service_quote_details(`service_quote_no`,`revised_version`,`enquiry_id`,`material_description`,`sqft`,`material`,`labour`,`material_value`,`labour_value`,`material_estimate`,`labour_estimate`,`total_labour_cost`,`total_material_cost`,`total_material`,`total_labour`,`total`,`labour_tax_value`,`material_tax_value`,`labour_tax_per`,`material_tax_per`,`created_by`,`created_date`,`created_time`,`time_stamp`,`remarks`,`status`) VALUES("'.trim(addslashes($objArray['service_quote_no'])).'","'.trim(addslashes($objArray['revised_version'])).'","'.trim(addslashes($objArray['enquiry_id'])).'","'.trim(addslashes($objArray['product_description'])).'","'.trim(addslashes($objArray['sqft'])).'","'.trim(addslashes($objArray['material'])).'","'.trim(addslashes($objArray['labour'])).'","'.trim(addslashes($objArray['material_value'])).'","'.trim(addslashes($objArray['labour_value'])).'","'.trim(addslashes($objArray['total_material'])).'","'.trim(addslashes($objArray['total_labour'])).'","'.trim(addslashes($objArray['total_labour_cost'])).'","'.trim(addslashes($objArray['total_material_cost'])).'","'.trim(addslashes($objArray['total_material'])).'","'.trim(addslashes($objArray['total_labour'])).'","'.trim(addslashes($objArray['total'])).'","'.trim(addslashes($objArray['labour_tax_value'])).'","'.trim(addslashes($objArray['material_tax_value'])).'","'.trim(addslashes($objArray['labour_tax_per'])).'","'.trim(addslashes($objArray['material_tax_per'])).'","'.trim(addslashes($objArray['created_by'])).'","'.trim(addslashes($objArray['created_date'])).'","'.trim(addslashes($objArray['created_time'])).'","'.trim(addslashes($objArray['timestamp'])).'","'.trim(addslashes($objArray['remarks'])).'","1")';
$this->ExecuteQuery($InsQuery2, 'insert');	

 $UpQuery1 ='UPDATE `'.$tbl.'service_terms_master`  SET `payment` = "'.trim($objArray['payment']).'" , `delivery` = "'.trim($objArray['delivery']).'" ,`validity` = "'.trim($objArray['validity']).'",`created_by` ="'.trim($objArray['created_by']).'"  WHERE `service_quote_no` ="'.$_GET['service_quote_no'].'" AND `revised_version` ="'.$selection.'"';
$this->ExecuteQuery($UpQuery1, 'update');

$SelQuery7	= 'SELECT SUM(total) AS tot FROM `'.$tbl.'service_quote_details` WHERE `service_quote_no` = "'. $_GET['service_quote_no'].'" AND revised_version="'.$selection.'" AND status="1"';
$ServiceDetail = $this->ExecuteQuery($SelQuery7, 'select');
$objSmarty->assign('ServiceDetail', $ServiceDetail);

 $SelQuery6 = 'SELECT SUM(material_estimate + labour_estimate) AS sub FROM `'.$tbl.'service_quote_details` WHERE service_quote_no="'.$_GET['service_quote_no'].'" AND revised_version="'.$selection.'"  AND status="1"' ;
		$SubView = $this->ExecuteQuery($SelQuery6, "select");
		$objSmarty->assign('SubView', $SubView);
	
	$enq_id = base64_decode($_GET["enquiry_id"]);
	$salesrevise_id = base64_decode($_GET["revised_version"]);		
$SelQuery1 = 'SELECT * FROM `'.$tbl.'service_quote_details` WHERE enquiry_id="'.$enq_id.'" AND revised_version="'.$salesrevise_id.'"';
		$InvoiceView = $this->ExecuteQuery($SelQuery1, "select");
		$objSmarty->assign('InvoiceView', $InvoiceView);
		
 $UpQuery = 'UPDATE `'.$tbl.'service_quote_master` SET `total` = "'.$ServiceDetail[0]['tot'].'" , `sub_total` = "'.$SubView[0]['sub'].'"WHERE `service_quote_no` = "'.$_GET['service_quote_no'].'"AND `revised_version` ="'.$selection.'"';
$ServiceUp = $this->ExecuteQuery($UpQuery, 'update');


header('Location:'.$_SERVER['PHP_SELF'].'?&service_quote_no='.trim(addslashes($objArray['service_quote_no'])).'&revised_version='.trim(addslashes($objArray['revised_version'])).'&succs_msg_for_insert');
return true;

}
}
 function ServiceRevQuote($objArray="")
 {
			global $objSmarty,$config;
			$tbl = $config['DBPrefix'];
			$SelQuery = 'SELECT * FROM `'.$tbl.'service_quote_master` WHERE service_quote_no="'.$_GET['service_quote_no'].'" AND `status` = 1';
			$ServiceQuote = $this->ExecuteQuery($SelQuery, 'select');
			$objSmarty->assign('ServiceQuote', $ServiceQuote);
			return $ServiceQuote;
 }
 /**********************************************Revised List/************************************************************/ 
  function Revised_Service($objArray="")
 {
			global $objSmarty,$config;
			$tbl = $config['DBPrefix'];
			$selection = $_GET['revised_version'];
			$Revise = ++$selection;
			$SelQuery = 'SELECT * FROM `'.$tbl.'service_terms_master` WHERE  service_quote_no="'.$_GET['service_quote_no'].'" AND  revised_version="'.$Revise.'" AND `status` = 1';
			$RevTerm = $this->ExecuteQuery($SelQuery, 'select');
			$objSmarty->assign('RevTerm', $RevTerm);
			
			$SelQuery1 = 'SELECT * FROM `'.$tbl.'service_terms_master` WHERE  service_quote_no="'.$_GET['service_quote_no'].'" AND  revised_version="'.$_GET['revised_version'].'" AND `status` = 1';
			$Rev_Term = $this->ExecuteQuery($SelQuery1, 'select');
			$objSmarty->assign('Rev_Term', $Rev_Term);
			
 }
   function Revised_Ser($objArray="")
 {
			global $objSmarty,$config;
			$tbl = $config['DBPrefix'];
			$revision = $_GET['revised_version'];
			$Revise = ++$revision;
			$SelQuery = 'SELECT * FROM `'.$tbl.'service_quote_details` WHERE  service_quote_no="'.$_GET['service_quote_no'].'" AND  revised_version="'.$Revise.'" AND `status` = 1';
			$RevTerm = $this->ExecuteQuery($SelQuery, 'select');
			$objSmarty->assign('RevTerm', $RevTerm);
			
			
 }
 /**********************************************View Sales Detail/******************************************************/
  function SelectQuote($objArray="")
 {
			global $objSmarty,$config;
			$tbl = $config['DBPrefix'];
			$SelQuery = 'SELECT * FROM `'.$tbl.'service_quote_master` WHERE service_quote_no="'.$_GET['service_quote_no'].'" AND `status` = 1 LIMIT 0,1' ;
			$ServiceQuote = $this->ExecuteQuery($SelQuery, 'select');
			$objSmarty->assign('ServiceQuote', $ServiceQuote);
			return $ServiceQuote;
 }
 /***********************************List Service/**********************************************************/
 function ListService($objArray="")
 {
 
 global $objSmarty,$config;
		$tbl = $config['DBPrefix'];
			$SelQuery = 'SELECT * FROM  '.$tbl.'service_quote_master WHERE revised_version ="'.$_GET['revised_version'].'" AND service_quote_no="'.$_GET['service_quote_no'].'" AND status="1"';
			$ListView2 = $this->ExecuteQuery($SelQuery, "select");
			$objSmarty->assign('ListView2', $ListView2);
			return $ListView2;

 }
  /**********************************************View Service Detail/******************************************************/
  function SelectServiceDetail1($objArray="")
 {
  
			global $objSmarty,$config;
			$tbl = $config['DBPrefix'];
			$SelQuery = 'SELECT * FROM `'.$tbl.'service_quote_details` WHERE revised_version="'.$_GET['revised_version'].'" AND service_quote_no="'.$_GET['service_quote_no'].'" AND status="1"';
			$ServiceList2 = $this->ExecuteQuery($SelQuery, 'select');
			$objSmarty->assign('ServiceList2', $ServiceList2);
			return $ServiceList2;
 }
 /*******************************************************************************************Service Print/*********************************************/
 function ServicePrint($objArray)
 {
    $service_quote_id = base64_decode($_GET["service_quote_no"]);
	$enq_id = base64_decode($_GET["enquiry_id"]);
	$salesrevise_id = base64_decode($_GET["revised_version"]);
	 		global $objSmarty,$config;
			$tbl = $config['DBPrefix'];
			$SelQuery4 = 'SELECT * FROM `'.$tbl.'service_quote_details` WHERE service_quote_no="'.$service_quote_id.'" AND revised_version="'.$salesrevise_id.'" AND status="1"';
			$MailView = $this->ExecuteQuery($SelQuery4, "select");
			$objSmarty->assign('SerList', $MailView);
			return $SerList;

 }
 
 function ServiceToAddress($SerIdent)
 {
   	$service_quote_id = base64_decode($_GET["service_quote_no"]);
	$enq_id = base64_decode($_GET["enquiry_id"]);
	$salesrevise_id = base64_decode($_GET["revised_version"]);
			global $objSmarty,$config;
			$tbl = $config['DBPrefix'];
			$SelQuery1 = 'SELECT * FROM `'.$tbl.'service_quote_master` WHERE service_quote_no ="'.$service_quote_id.'" AND revised_version="'.$salesrevise_id.'" AND status="1"'; 
			$AddressView = $this->ExecuteQuery($SelQuery1, "select");
			//print_r($AddressView);exit;
			$objSmarty->assign('AddressView', $AddressView);
			return $AddressView;

 }
 
 /****************************************************Service Term/******************************************************************************/
  function ServiceTerm($SerIdent)
 {
			global $objSmarty,$config;
			$tbl = $config['DBPrefix'];
			$service_quote_id = base64_decode($_GET["service_quote_no"]);
	$enq_id = base64_decode($_GET["enquiry_id"]);
	$salesrevise_id = base64_decode($_GET["revised_version"]);
 $SelQuery1 = 'SELECT * FROM `'.$tbl.'service_terms_master` WHERE service_quote_no ="'.$service_quote_id.'" AND revised_version="'.$salesrevise_id.'" AND status="1"'; 
			$SerTerm = $this->ExecuteQuery($SelQuery1, "select");
			//print_r($SerTerm);exit;
			$objSmarty->assign('SerTerm', $SerTerm);
			return $SerTerm;

 }
/***************************************************Add Total******************************************************************************/
 function add_ser_Total()
{
  	$service_quote_id = base64_decode($_GET["service_quote_no"]);
	$enq_id = base64_decode($_GET["enquiry_id"]);
	$salesrevise_id = base64_decode($_GET["revised_version"]);
	$salesenqty_id = base64_decode($_GET["enquiry_type"]);
	 global $objSmarty,$config;
			$tbl = $config['DBPrefix'];
 $SelQuery = 'SELECT sum(total) as Total from '.$tbl.'service_quote_details WHERE service_quote_no="'.$service_quote_id.'" AND  revised_version="'.$salesrevise_id.'"';
 $SerAddView = $this->ExecuteQuery($SelQuery, "select");
			//print_r($AddressView);exit;
			$objSmarty->assign('SerAddView', $SerAddView);
			return $SerAddView;
}  
/*********************************************Enq Type/***********************************************************************************/
 function pro_enq_Type()
{
  	
	$enq_id = base64_decode($_GET["enquiry_id"]);
	$salesrevise_id = base64_decode($_GET["revised_version"]);

 global $objSmarty,$config;
	$tbl = $config['DBPrefix']; 
	$SelQuery = 'SELECT * from '.$tbl.'enquriy_master WHERE enquiry_id="'.$enq_id.'"';
	$Enq_type = $this->ExecuteQuery($SelQuery, "select");
	$objSmarty->assign('Enq_type', $Enq_type);   
	
	
		$SelQuery1 = 'SELECT * FROM `'.$tbl.'group_address` WHERE company_name = "'.$Enq_type[0]['arka_group'].'" AND status="1"';  
		$DelAddress = $this->ExecuteQuery($SelQuery1, 'select');  
		$objSmarty->assign('DelAddress', $DelAddress);   
		return $DelAddress;

}
/*********************************************Terms Master/********************************************************************************/
function Terms_enq(){
$salesenqty_id = base64_decode($_GET["enquiry_type"]);   
global $objSmarty,$config;
$tbl = $config['DBPrefix'];  
 	$SelQuery = 'SELECT * FROM '.$tbl.'terms_master WHERE status="1" AND type="'.$salesenqty_id.'" ' ;   
	$SerTerm = $this->ExecuteQuery($SelQuery, "select");
	$objSmarty->assign('TermMas', $SerTerm);
	return $TermMas;
}
}
 

?>


