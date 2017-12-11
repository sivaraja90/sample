<?php
#####Class For Adding Content Management ######
class ProjectQuoteReg extends MysqlFns{
 
 /* class constructor */
 function projectQuoteReg()
 {
	 $this->LDDisplayPath= $config['SiteGlobalPath']."class.ProjectQuoteReg.php";
	  global $config;global $objSmarty,$config;
	$tbl = $config['DBPrefix'];
	$this->MysqlFns();
  	$this->Limit = 20;
	//$project_quote_id = base64_decode($_GET["project_quote_no"]);
	//$enq_id = base64_decode($_GET["enquiry_id"]);
	//$salesrevise_id = base64_decode($_GET["revised_version"]);
	//$salesenqty_id = base64_decode($_GET["enquiry_type"]);

   /**************************************project Quote No Auto Increment*********************************************************/
		
			$SelQuerys1	= 'SELECT max(project_quote_no) as last FROM `'.$tbl.'project_quote_master` Limit 0,1';
			$ProjectDetail	= $this->ExecuteQuery($SelQuerys1, 'select');
			 if($ProjectDetail[0]['last']!="")
			{
			$ProjectDetail[0]['project_quote_no'] = stripslashes($ProjectDetail[0]['last']);
			$p_quote1 = preg_replace("/[^0-9\.]/", '', $ProjectDetail[0]['project_quote_no']);
			$p_quote1= $p_quote1 + 1;
			$str = str_split($ProjectDetail[0]['last'],2);//SQ
			$p_quote = $str[0]. "" .$p_quote1;
			}
			else
			{
			$p_quote = "PR1001";
			}
			if(isset($_GET['project_quote_no'])){
			$objSmarty->assign('p_quote', $_GET['project_quote_no']);
			}
			else
			{
				$objSmarty->assign('p_quote', $p_quote);
				
			}
			  $project_quote_no = $_GET["project_quote_no"];
			 
  
			 
			  
	/*************************************Sale Revised Version************************************************************************************/			
			$SelQuerys1	= 'SELECT max(revised_version) as last FROM `'.$tbl.'project_quote_details` WHERE project_quote_no="'.$_GET["project_quote_no"].'" Limit 0,1';
			$ProjectDetail	= $this->ExecuteQuery($SelQuerys1, 'select');
			if($ProjectDetail[0]['last']!="")
			{
			$ProjectDetail[0]['revised_version'] = stripslashes($ProjectDetail[0]['last']);
			$r_version1 = preg_replace("/[^0-9\.]/", '', $ProjectDetail[0]['revised_version']);
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
			$str = str_split($ProjectDetail[0]['last'],3);
			$r_version = $str[0]. "" .$mid. "" .$r_version1;
			}

			else
			{
			$r_version = "REV1001";
			}
			if(isset($_GET['revised_version']))
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
 function ChkDupliProj($project_quote_no, $Ident=''){
global $objSmarty,$config,$_POST;
$tbl = $config['DBPrefix'];
//print_r($project_quote_no);exit;
		$SelQuery	= 'SELECT * FROM `'.$tbl.'project_quote_master` WHERE `project_quote_no` = "'.$project_quote_no.'" Limit 0,1';
		$ProjectDetail = $this->ExecuteQuery($SelQuery, 'select');
  
		if(!empty($ProjectDetail) && is_array($ProjectDetail))
		   return false;
		else
		  return true;
 }
 /**************************************Revised Version No Validation*************************************************************************/
function ChkDupliRev($revised_version,$Ident3=''){
global $objSmarty,$config,$_POST;
$tbl = $config['DBPrefix'];
		$SelQuery3	= 'SELECT * FROM `'.$tbl.'project_quote_master` WHERE `revised_version` = "'.$revised_version.'" Limit 0,1';
		$ProjectDetail1 = $this->ExecuteQuery($SelQuery3, 'select');
  
		if(!empty($ProjectDetail1) && is_array($ProjectDetail1))
		   return false;
		else
		  return true;
 }

 /**********************************************Insert project Quote/**************************************************************/
function InsertProjectQuote($objArray="")
 {
global $objSmarty,$config,$_POST;
$tbl = $config['DBPrefix'];
$selection = $_GET['revised_version'];
//$Revise = ++$selection;

 if($this->ChkDupliProj(trim(addslashes($objArray['project_quote_no'])))){
 $mat = $objArray['total_material'];
 $lab = $objArray['total_labour'];
 
 
if(!$objArray['project_quote_no']){
			$objSmarty->assign('ErrorMessage', 'project Quote No should not be blank');
			return false;
			}elseif(!$objArray['customer_id']){
			$objSmarty->assign('ErrorMessage', 'Customer Id should not be blank');
			return false;
			}elseif(!$objArray['quote_date']){
			$objSmarty->assign('ErrorMessage', 'Quote Date should not be blank');
			return false;
			}elseif(!$objArray['email']){
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
			}elseif(!$objArray['pincode']){
			$objSmarty->assign('ErrorMessage', 'Pincode should not be blank');
			return false;
			}elseif(!$objArray['product_description']){
			$objSmarty->assign('ErrorMessage', 'Product Description should not be blank');
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
			}elseif(!$objArray['created_by']){
			$objSmarty->assign('ErrorMessage', 'Created By should not be blank');
			return false;
			}
			$objSmarty->assign('project_quote_no', $objArray['project_quote_no']);
			if($objArray['project_quote_no'] && $objArray['project_quote_no']){
			
  $InsQuery = 'INSERT INTO `'.$tbl.'project_quote_master`(`project_quote_no`,`salutation`,`revised_version`,`company_name`,`customer_id`,`customer_name`,`quote_date`,`enquiry_id`,`mobile_no`,`payment`,`delivery`,`validity`,`email`,`email1`,`area_code`,`phone_no`,`extension`, `address`, `address1`, `area`,`city`,`pincode`, `created_by`,`created_date`, `created_time`, `remarks`,`status`) VALUES("'.trim(addslashes($objArray['project_quote_no'])).'","'.trim(addslashes($objArray['salutation'])).'","'.trim(addslashes($objArray['revised_version'])).'","'.trim(addslashes($objArray['company_name'])).'","'.trim(addslashes($objArray['customer_id'])).'","'.trim(addslashes($objArray['customer_name'])).'","'.trim(addslashes($objArray['quote_date'])).'","'.trim(addslashes($objArray['enquiry_id'])).'","'.trim(addslashes($objArray['mobile_no'])).'","'.trim(addslashes($objArray['payment'])).'","'.trim(addslashes($objArray['delivery'])).'","'.trim(addslashes($objArray['validity'])).'","'.trim(addslashes($objArray['email'])).'","'.trim(addslashes($objArray['email1'])).'","'.trim(addslashes($objArray['area_code'])).'","'.trim(addslashes($objArray['phone_no'])).'","'.trim(addslashes($objArray['extension'])).'","'.trim(addslashes($objArray['address'])).'","'.trim(addslashes($objArray['address1'])).'","'.trim(addslashes($objArray['area'])).'","'.trim(addslashes($objArray['city'])).'","'.trim(addslashes($objArray['pincode'])).'","'.trim(addslashes($objArray['created_by'])).'","'.trim(addslashes($objArray['created_date'])).'","'.trim(addslashes($objArray['created_time'])).'","'.trim(addslashes($objArray['remarks'])).'","1")';
$this->ExecuteQuery($InsQuery, 'insert');

 $InsQuery2 = 'INSERT INTO `'.$tbl.'project_quote_details`(`project_quote_no`,`material_estimate`,`labour_estimate`, `revised_version`,`product_description`,`sqft`,`material`,`material_tax_per`,`material_tax_value`,`enquiry_id`,`total_material`,`labour`,`labour_tax_per`,`labour_tax_value`,`total_labour`, `total`, `created_by`, `created_date`, `created_time`, `remarks`,`status`) VALUES("'.trim(addslashes($objArray['project_quote_no'])).'","'.trim(addslashes($objArray['total_material'])).'","'.trim(addslashes($objArray['total_labour'])).'","'.trim(addslashes($objArray['revised_version'])).'","'.trim(addslashes($objArray['product_description'])).'","'.trim(addslashes($objArray['sqft'])).'","'.trim(addslashes($objArray['material'])).'","'.trim(addslashes($objArray['material_tax_per'])).'","'.trim(addslashes($objArray['material_tax_value'])).'","'.trim(addslashes($objArray['enquiry_id'])).'","'.trim(addslashes($objArray['total_material'])).'","'.trim(addslashes($objArray['labour'])).'","'.trim(addslashes($objArray['labour_tax_per'])).'","'.trim(addslashes($objArray['labour_tax_value'])).'","'.trim(addslashes($objArray['total_labour'])).'","'.trim(addslashes($objArray['total'])).'","'.trim(addslashes($objArray['created_by'])).'","'.trim(addslashes($objArray['created_date'])).'","'.trim(addslashes($objArray['created_time'])).'","'.trim(addslashes($objArray['remarks'])).'","1")';
$this->ExecuteQuery($InsQuery2, 'insert');

 $InsQuery3 = 'INSERT INTO '.$tbl.'project_term(`project_quote_no`,`revised_version`,`payment`,`delivery`,`validity`,`created_by`,`created_date`,`created_time`,`time_stamp`,`status`) VALUES("'.trim(addslashes($objArray['project_quote_no'])).'","'.trim(addslashes($objArray['revised_version'])).'","'.trim(addslashes($objArray['payment'])).'","'.trim(addslashes($objArray['delivery'])).'","'.trim(addslashes($objArray['validity'])).'","'.trim(addslashes($objArray['created_by'])).'","'.trim(addslashes($objArray['created_date'])).'","'.trim(addslashes($objArray['created_time'])).'","'.trim(addslashes($objArray['timestamp'])).'","1")';
$this->ExecuteQuery($InsQuery3, 'insert');	


$SelQuery = 'SELECT SUM(total) AS tot FROM `'.$tbl.'project_quote_details` WHERE `project_quote_no` = "'.trim(addslashes($objArray['project_quote_no'])).'" AND revised_version = "'.trim(addslashes($objArray['revised_version'])).'" AND status="1"';
$ServiceDetail = $this->ExecuteQuery($SelQuery, 'select');
$objSmarty->assign('ServiceDetail', $ServiceDetail); 

$SelQuery1 = 'SELECT SUM(material_estimate + labour_estimate) AS sub FROM `'.$tbl.'project_quote_details` WHERE enquiry_id="'.trim(addslashes($objArray['enquiry_id'])).'" AND revised_version="'.trim(addslashes($objArray['revised_version'])).'"  AND status="1"';
		$SubView = $this->ExecuteQuery($SelQuery1, "select");
		$objSmarty->assign('SubView', $SubView);
		
		$SelQuery2 = 'SELECT * FROM `'.$tbl.'project_quote_details` WHERE `project_quote_no` = "'. $_GET['project_quote_no'].'" AND revised_version= "'.$Revise.'"';
		$InvoiceView = $this->ExecuteQuery($SelQuery2, "select");
		$objSmarty->assign('InvoiceView', $InvoiceView);
		
$UpQuery = 'UPDATE `'.$tbl.'project_quote_master` SET `total` = "'.$ServiceDetail[0]['tot'].'" , `sub_total` = "'.$SubView[0]['sub'].'"WHERE `project_quote_no` = "'.trim(addslashes($objArray['project_quote_no'])).'"AND `revised_version` ="'.trim(addslashes($objArray['revised_version'])).'"';
$ServiceUp = $this->ExecuteQuery($UpQuery, 'update');

}
header('Location:' .$_SERVER['PHP_SELF'].'?enquiry_id='.trim(addslashes($objArray['enquiry_id'])).'&project_quote_no='.trim(addslashes($objArray['project_quote_no'])).'&revised_version='.trim(addslashes($objArray['revised_version'])).'&succs_msg_for_insert');return true;
 }
else
{
 $InsQuery2 = 'INSERT INTO `'.$tbl.'project_quote_details`(`project_quote_no`,`material_estimate`,`labour_estimate`, `revised_version`,`product_description`,`sqft`,`material`,`material_tax_per`,`material_tax_value`,`enquiry_id`,`total_material`,`labour`,`labour_tax_per`,`labour_tax_value`,`total_labour`, `total`, `created_by`, `created_date`, `created_time`, `remarks`,`status`) VALUES("'.trim(addslashes($objArray['project_quote_no'])).'","'.trim(addslashes($objArray['total_material'])).'","'.trim(addslashes($objArray['total_labour'])).'","'.trim(addslashes($objArray['revised_version'])).'","'.trim(addslashes($objArray['product_description'])).'","'.trim(addslashes($objArray['sqft'])).'","'.trim(addslashes($objArray['material'])).'","'.trim(addslashes($objArray['material_tax_per'])).'","'.trim(addslashes($objArray['material_tax_value'])).'","'.trim(addslashes($objArray['enquiry_id'])).'","'.trim(addslashes($objArray['total_material'])).'","'.trim(addslashes($objArray['labour'])).'","'.trim(addslashes($objArray['labour_tax_per'])).'","'.trim(addslashes($objArray['labour_tax_value'])).'","'.trim(addslashes($objArray['total_labour'])).'","'.trim(addslashes($objArray['total'])).'","'.trim(addslashes($objArray['created_by'])).'","'.trim(addslashes($objArray['created_date'])).'","'.trim(addslashes($objArray['created_time'])).'","'.trim(addslashes($objArray['remarks'])).'","1")';
$this->ExecuteQuery($InsQuery2, 'insert');

$UpQuery1 ='UPDATE `'.$tbl.'project_term`  SET `payment` = "'.trim($objArray['payment']).'" , `delivery` = "'.trim($objArray['delivery']).'" ,`validity` = "'.trim($objArray['validity']).'",`created_by` ="'.trim($objArray['created_by']).'" WHERE `project_quote_no` = "'.trim(addslashes($objArray['project_quote_no'])).'" AND revised_version = "'.trim(addslashes($objArray['revised_version'])).'"';
$this->ExecuteQuery($UpQuery1, 'update');

$SelQuery1	= 'SELECT SUM(total) AS tot FROM `'.$tbl.'project_quote_details` WHERE `project_quote_no` = "'.trim(addslashes($objArray['project_quote_no'])).'" AND revised_version = "'.trim(addslashes($objArray['revised_version'])).'" AND status="1"';
$ServiceDetail = $this->ExecuteQuery($SelQuery1, 'select');
//print_r($ServiceDetail);
$objSmarty->assign('ServiceDetail', $ServiceDetail);

$SelQuery = 'SELECT SUM(material_estimate + labour_estimate) AS sub FROM `'.$tbl.'project_quote_details` WHERE enquiry_id="'.$_GET['enquiry_id'].'" AND revised_version="'.trim(addslashes($objArray['revised_version'])).'"  AND status="1"';
		$SubView = $this->ExecuteQuery($SelQuery, "select");
		$objSmarty->assign('SubView', $SubView);
		//print_r($SubView);
		$SelQuery2 = 'SELECT * FROM `'.$tbl.'project_quote_details` WHERE `project_quote_no` = "'. $_GET['project_quote_no'].'" AND revised_version= "'.$selection.'"';
		$InvoiceView = $this->ExecuteQuery($SelQuery2, "select");
		$objSmarty->assign('InvoiceView', $InvoiceView);
		
$UpQuery = 'UPDATE `'.$tbl.'project_quote_master` SET `total` = "'.$ServiceDetail[0]['tot'].'" , `sub_total` = "'.$SubView[0]['sub'].'"WHERE `project_quote_no` = "'.$_GET['project_quote_no'].'"AND `revised_version` ="'.trim(addslashes($objArray['revised_version'])).'"';
$ServiceUp = $this->ExecuteQuery($UpQuery, 'update');

header('Location:' .$_SERVER['PHP_SELF'].'?enquiry_id='.trim(addslashes($objArray['enquiry_id'])).'&project_quote_no='.trim(addslashes($objArray['project_quote_no'])).'&revised_version='.trim(addslashes($objArray['revised_version'])).'&succs_msg_for_insert');
return true;
 }
}
/********************************Revise Project Quote/*************************************************************/
function InsertProjectReviseQuote($objArray="")
 { 
global $objSmarty,$config,$_POST,$_REQUEST;
$tbl = $config['DBPrefix'];
$selection = $_GET['revised_version'];
$Revise = ++$selection;

if($this->ChkDupliRev(trim(addslashes($objArray['revised_version'])))){
if(!$objArray['project_quote_no']){
			$objSmarty->assign('ErrorMessage', 'project Quote No should not be blank');
			return false;
			}elseif(!$objArray['revised_version']){
			$objSmarty->assign('ErrorMessage', 'Revised Version should not be blank');
			return false;
			}elseif(!$objArray['company_name']){
			$objSmarty->assign('ErrorMessage', 'Company Name should not be blank');
			return false;
			}elseif(!$objArray['customer_id']){
			$objSmarty->assign('ErrorMessage', 'Customer Id should not be blank');
			return false;
			}elseif(!$objArray['quote_date']){
			$objSmarty->assign('ErrorMessage', 'Quote Date should not be blank');
			return false;
			}/*elseif(!$objArray['mobile_no']){
			$objSmarty->assign('ErrorMessage', 'Mobile No should not be blank');
			return false;
			}*/elseif(!$objArray['email']){
			$objSmarty->assign('ErrorMessage', 'Email Id should not be blank');
			return false;
			}elseif(!$objArray['area_code']){
			$objSmarty->assign('ErrorMessage', 'Area Code should not be blank');
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
			}elseif(!$objArray['product_description']){
			$objSmarty->assign('ErrorMessage', 'Product Description should not be blank');
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
			}/*elseif(!$objArray['created_by']){
			$objSmarty->assign('ErrorMessage', 'Created By should not be blank');
			return false;
			}*/
			$objSmarty->assign('project_quote_no', $objArray['project_quote_no']);
			if($objArray['project_quote_no'] && $objArray['project_quote_no']){
			
		 $InsQuery = 'INSERT INTO '.$tbl.'project_quote_master(`project_quote_no`,`quote_date`,`salutation`,`revised_version`,`customer_id`,`customer_name`,`enquiry_id`,`company_name`,`mobile_no`,`address`,`address1`,`area`,`city`,`pincode`,`phone_no`,`extension`,`area_code`,`email`,`email1`,`total`,`created_by`,`created_date`,`created_time`,`timestamp`,`remarks`,`status`) VALUES("'.trim(addslashes($objArray['project_quote_no'])).'","'.trim(addslashes($objArray['quote_date'])).'","'.trim(addslashes($objArray['salutation'])).'","'.trim(addslashes($objArray['revised_version'])).'","'.trim(addslashes($objArray['customer_id'])).'","'.trim(addslashes($objArray['customer_name'])).'","'.trim(addslashes($objArray['enquiry_id'])).'","'.trim(addslashes($objArray['company_name'])).'","'.trim(addslashes($objArray['mobile_no'])).'","'.trim(addslashes($objArray['address'])).'","'.trim(addslashes($objArray['address1'])).'","'.trim(addslashes($objArray['area'])).'","'.trim(addslashes($objArray['city'])).'","'.trim(addslashes($objArray['pincode'])).'","'.trim(addslashes($objArray['phone_no'])).'","'.trim(addslashes($objArray['extension'])).'","'.trim(addslashes($objArray['area_code'])).'","'.trim(addslashes($objArray['email'])).'","'.trim(addslashes($objArray['email1'])).'","'.trim(addslashes($objArray['total'])).'","'.trim(addslashes($objArray['created_by'])).'","'.trim(addslashes($objArray['created_date'])).'","'.trim(addslashes($objArray['created_time'])).'","'.trim(addslashes($objArray['timestamp'])).'","'.trim(addslashes($objArray['remarks'])).'","1")';
$this->ExecuteQuery($InsQuery, 'insert');

 $InsQuery2 ='INSERT INTO '.$tbl.'project_quote_details(`project_quote_no`, `revised_version`,`enquiry_id`,`product_description`,`sqft`,`material`,`labour`,`material_value`,`labour_value`,`material_estimate`,`labour_estimate`,`total_material`,`total_labour`,`total`,`labour_tax_value`,`material_tax_value`,`labour_tax_per`,`material_tax_per`,`created_by`,`created_date`,`created_time`,`time_stamp`,`remarks`,`status`) VALUES("'.trim(addslashes($objArray['project_quote_no'])).'","'.trim(addslashes($objArray['revised_version'])).'","'.trim(addslashes($objArray['enquiry_id'])).'","'.trim(addslashes($objArray['product_description'])).'","'.trim(addslashes($objArray['sqft'])).'","'.trim(addslashes($objArray['material'])).'","'.trim(addslashes($objArray['labour'])).'","'.trim(addslashes($objArray['material_value'])).'","'.trim(addslashes($objArray['labour_value'])).'","'.trim(addslashes($objArray['total_material'])).'","'.trim(addslashes($objArray['total_labour'])).'","'.trim(addslashes($objArray['total_material'])).'","'.trim(addslashes($objArray['total_labour'])).'","'.trim(addslashes($objArray['total'])).'","'.trim(addslashes($objArray['labour_tax_value'])).'","'.trim(addslashes($objArray['material_tax_value'])).'","'.trim(addslashes($objArray['labour_tax_per'])).'","'.trim(addslashes($objArray['material_tax_per'])).'","'.trim(addslashes($objArray['created_by'])).'","'.trim(addslashes($objArray['created_date'])).'","'.trim(addslashes($objArray['created_time'])).'","'.trim(addslashes($objArray['timestamp'])).'","'.trim(addslashes($objArray['remarks'])).'","1")';
$this->ExecuteQuery($InsQuery2, 'insert');	

 $InsQuery3= 'INSERT INTO `'.$tbl.'project_term` (`project_quote_no`,`revised_version`,`payment`,`delivery`,`validity`,`created_by`, `created_date`, `created_time`,`status`) VALUES("'.trim(addslashes($objArray['project_quote_no'])).'","'.trim(addslashes($objArray['revised_version'])).'","'.trim(addslashes($objArray['payment'])).'","'.trim(addslashes($objArray['delivery'])).'","'.trim(addslashes($objArray['validity'])).'","'.trim(addslashes($objArray['created_by'])).'","'.trim(addslashes($objArray['created_date'])).'","'.trim(addslashes($objArray['created_time'])).'","1")';
 $this->ExecuteQuery($InsQuery3, 'insert');

 $SelQuery	= 'SELECT SUM(total) AS tot FROM `'.$tbl.'project_quote_details` WHERE `project_quote_no` = "'. $_GET['project_quote_no'].'" AND revised_version = "'.$Revise.'" AND status="1"';
$ServiceDetail = $this->ExecuteQuery($SelQuery, 'select');
$objSmarty->assign('ServiceDetail', $ServiceDetail);
//print_r($ServiceDetail);

 $SelQuery5 = 'SELECT SUM(material_estimate + labour_estimate) AS sub FROM `'.$tbl.'project_quote_details` WHERE `project_quote_no` = "'. $_GET['project_quote_no'].'"  AND revised_version= "'.$Revise.'"  AND status="1"';
$SubView = $this->ExecuteQuery($SelQuery5, 'select');
		$objSmarty->assign('SubView', $SubView);
			//print_r($SubView);exit;
$SelQuery1 = 'SELECT * FROM `'.$tbl.'project_quote_details` WHERE `project_quote_no` = "'. $_GET['project_quote_no'].'" AND revised_version= "'.$Revise.'"';
		$InvoiceView = $this->ExecuteQuery($SelQuery1, "select");
		$objSmarty->assign('InvoiceView', $InvoiceView);
			
 $UpQuery = 'UPDATE `'.$tbl.'project_quote_master` SET `total` = "'.$ServiceDetail[0]['tot'].'" , `sub_total` = "'.$SubView[0]['sub'].'"WHERE `project_quote_no` = "'.$_GET['project_quote_no'].'"AND `revised_version` ="'.$Revise.'"';
$ServiceUp = $this->ExecuteQuery($UpQuery, 'update');
}
}
else
{
$InsQuery2 ='INSERT INTO '.$tbl.'project_quote_details(`project_quote_no`, `revised_version`,`enquiry_id`,`product_description`,`sqft`,`material`,`labour`,`material_value`,`labour_value`,`material_estimate`,`labour_estimate`,`total_material`,`total_labour`,`total`,`labour_tax_value`,`material_tax_value`,`labour_tax_per`,`material_tax_per`,`created_by`,`created_date`,`created_time`,`time_stamp`,`remarks`,`status`) VALUES("'.trim(addslashes($objArray['project_quote_no'])).'","'.trim(addslashes($objArray['revised_version'])).'","'.trim(addslashes($objArray['enquiry_id'])).'","'.trim(addslashes($objArray['product_description'])).'","'.trim(addslashes($objArray['sqft'])).'","'.trim(addslashes($objArray['material'])).'","'.trim(addslashes($objArray['labour'])).'","'.trim(addslashes($objArray['material_value'])).'","'.trim(addslashes($objArray['labour_value'])).'","'.trim(addslashes($objArray['total_material'])).'","'.trim(addslashes($objArray['total_labour'])).'","'.trim(addslashes($objArray['total_material'])).'","'.trim(addslashes($objArray['total_labour'])).'","'.trim(addslashes($objArray['total'])).'","'.trim(addslashes($objArray['labour_tax_value'])).'","'.trim(addslashes($objArray['material_tax_value'])).'","'.trim(addslashes($objArray['labour_tax_per'])).'","'.trim(addslashes($objArray['material_tax_per'])).'","'.trim(addslashes($objArray['created_by'])).'","'.trim(addslashes($objArray['created_date'])).'","'.trim(addslashes($objArray['created_time'])).'","'.trim(addslashes($objArray['timestamp'])).'","'.trim(addslashes($objArray['remarks'])).'","1")';
$this->ExecuteQuery($InsQuery2, 'insert');	

$UpQuery1 ='UPDATE `'.$tbl.'project_term`  SET `payment` = "'.trim($objArray['payment']).'" , `delivery` = "'.trim($objArray['delivery']).'" ,`validity` = "'.trim($objArray['validity']).'",`created_by` ="'.trim($objArray['created_by']).'" WHERE `project_quote_no` = "'.trim(addslashes($objArray['project_quote_no'])).'" AND revised_version = "'.$Revise.'"';
$this->ExecuteQuery($UpQuery1, 'update');

$SelQuery1	= 'SELECT SUM(total) AS tot FROM `'.$tbl.'project_quote_details` WHERE `project_quote_no` = "'.trim(addslashes($objArray['project_quote_no'])).'" AND revised_version = "'.$Revise.'" AND status="1"';
$ServiceDetail = $this->ExecuteQuery($SelQuery1, 'select');
$objSmarty->assign('ServiceDetail', $ServiceDetail); 

$SelQuery5 = 'SELECT SUM(material_estimate + labour_estimate) AS sub FROM `'.$tbl.'project_quote_details` WHERE project_quote_no="'.$_GET['project_quote_no'].'" AND revised_version="'.$Revise.'"  AND status="1"';
		$SubView = $this->ExecuteQuery($SelQuery5, "select");
		$objSmarty->assign('SubView', $SubView);
		
		$SelQuery1 = 'SELECT * FROM `'.$tbl.'project_quote_details` WHERE `project_quote_no` = "'. $_GET['project_quote_no'].'" AND revised_version= "'.$Revise.'"';
		$InvoiceView = $this->ExecuteQuery($SelQuery1, "select");
		$objSmarty->assign('InvoiceView', $InvoiceView);
		
$UpQuery = 'UPDATE `'.$tbl.'project_quote_master` SET `total` = "'.$ServiceDetail[0]['tot'].'" , `sub_total` = "'.$SubView[0]['sub'].'"WHERE `project_quote_no` = "'.$_GET['project_quote_no'].'"AND `revised_version` ="'.$Revise.'"';
$ServiceUp = $this->ExecuteQuery($UpQuery, 'update');
}
header('Location:' .$_SERVER['PHP_SELF'].'?&project_quote_no='.trim(addslashes($objArray['project_quote_no'])).'&revised_version='.$_GET['revised_version'].'&succs_msg_for_insert');return true;

$SelQuery = 'SELECT MAX(revised_version) AS r_version FROM '.$tbl.'project_quote_details WHERE project_quote_no="'.$_GET['project_quote_no'].'"';
$Material = $this->ExecuteQuery($SelQuery, "select");
$objSmarty->assign('Material', $Material);
}

//******************************************************************************************
 function ChkDupliServ($project_quote_no, $Ident=''){
global $objSmarty,$config,$_POST;
$tbl = $config['DBPrefix'];
		$SelQuery	= 'SELECT * FROM `'.$tbl.'project_quote_details` WHERE `project_quote_no` = "'.$project_quote_no.'" Limit 0,1';
		$ProjectDetail = $this->ExecuteQuery($SelQuery, 'select');
  
		if(!empty($ServiceDetail) && is_array($ProjectDetail))
		   return false;
		else
		  return true;
 }
 /*************************************************Service Insert/*****************************************************/
   function AddProject($objArray="")
 { 
 global $objSmarty,$config,$_POST;
$tbl = $config['DBPrefix'];
  $selection = $_GET['revised_version'];
//$Revise = ++$selection;
			if(!$objArray['product_description']){
			$objSmarty->assign('ErrorMessage', 'Product Description should not be blank');
			return false;
			}elseif(!$objArray['total_material']){
			$objSmarty->assign('ErrorMessage', 'Total Material should not be blank');
			return false;
			}elseif((!$objArray['material_tax_per'])){
			$objSmarty->assign('ErrorMessage', 'Material Tax Percentage should not be blank');
			return false;
			}elseif(!$objArray['total_material_cost']){
			$objSmarty->assign('ErrorMessage', 'Total Material Cost should not be blank');
			return false;
			}elseif(!$objArray['total_labour']){
			$objSmarty->assign('ErrorMessage', 'Total Labour should not be blank');
			return false;
			}elseif(!$objArray['labour_tax_per']){
			$objSmarty->assign('ErrorMessage', 'Labour Tax Percentage should not be blank');
			return false;
			}
					
			$objSmarty->assign('project_quote_no', $objArray['project_quote_no']);
			if($objArray['project_quote_no']){
			
$InsQuery2 = 'INSERT INTO '.$tbl.'project_quote_details(`project_quote_no`,`revised_version`,
`enquiry_id`,`product_description`,`sqft`,`material`,`labour`,`material_value`,`labour_value`,`material_estimate`,`labour_estimate`,`total_material`,`total_labour`,`total`,`labour_tax_value`,`material_tax_value`,`labour_tax_per`,`material_tax_per`,`created_by`,`created_date`,`created_time`,`time_stamp`,`remarks`,`status`) VALUES("'.trim(addslashes($objArray['project_quote_no'])).'","'.trim(addslashes($objArray['revised_version'])).'","'.trim(addslashes($objArray['enquiry_id'])).'","'.trim(addslashes($objArray['product_description'])).'","'.trim(addslashes($objArray['sqft'])).'","'.trim(addslashes($objArray['material'])).'","'.trim(addslashes($objArray['labour'])).'","'.trim(addslashes($objArray['material_value'])).'","'.trim(addslashes($objArray['labour_value'])).'","'.trim(addslashes($objArray['total_material'])).'","'.trim(addslashes($objArray['total_labour'])).'","'.trim(addslashes($objArray['total_material'])).'","'.trim(addslashes($objArray['total_labour'])).'","'.trim(addslashes($objArray['total'])).'","'.trim(addslashes($objArray['labour_tax_value'])).'","'.trim(addslashes($objArray['material_tax_value'])).'","'.trim(addslashes($objArray['labour_tax_per'])).'","'.trim(addslashes($objArray['material_tax_per'])).'","'.trim(addslashes($objArray['created_by'])).'","'.trim(addslashes($objArray['created_date'])).'","'.trim(addslashes($objArray['created_time'])).'","'.trim(addslashes($objArray['timestamp'])).'","'.trim(addslashes($objArray['remarks'])).'","1")';
$this->ExecuteQuery($InsQuery2, 'insert');	

 $UpQuery1 ='UPDATE `'.$tbl.'project_term`  SET `payment` = "'.trim($objArray['payment']).'" , `delivery` = "'.trim($objArray['delivery']).'" ,`validity` = "'.trim($objArray['validity']).'"  WHERE `project_quote_no` ="'.$_GET['project_quote_no'].'" AND `revised_version` ="'.$selection.'"';
$this->ExecuteQuery($UpQuery1, 'update');

 $SelQuery5	= 'SELECT SUM(total) AS tot FROM `'.$tbl.'project_quote_details` WHERE `project_quote_no` = "'. $_GET['project_quote_no'].'" AND revised_version="'.$selection.'" AND status="1"';
$ProjectDetailtot = $this->ExecuteQuery($SelQuery5, 'select');
$objSmarty->assign('ProjectDetailtot', $ProjectDetailtot);

 $SelQuery6 = 'SELECT SUM(material_estimate + labour_estimate) AS sub FROM `'.$tbl.'project_quote_details` WHERE project_quote_no="'.$_GET['project_quote_no'].'" AND revised_version="'.$selection.'"  AND status="1"' ;
		$SubView = $this->ExecuteQuery($SelQuery6, "select");
		$objSmarty->assign('SubView', $SubView);
			
 $SelQuery7 = 'SELECT * FROM `'.$tbl.'project_quote_details` WHERE enquiry_id="'.trim(addslashes($objArray['enquiry_id'])).'" AND revised_version="'.$selection.'"';
		$InvoiceView = $this->ExecuteQuery($SelQuery7, "select");
		$objSmarty->assign('InvoiceView', $InvoiceView);
		
 $UpQuery = 'UPDATE `'.$tbl.'project_quote_master` SET `total` = "'.$ProjectDetailtot[0]['tot'].'" , `sub_total` = "'.$SubView[0]['sub'].'"WHERE `project_quote_no` = "'.$_GET['project_quote_no'].'"AND `revised_version` ="'.$selection.'"';
$ServiceUp = $this->ExecuteQuery($UpQuery, 'update');

header('Location:'.$_SERVER['PHP_SELF'].'?&project_quote_no='.trim(addslashes($objArray['project_quote_no'])).'&revised_version='.trim(addslashes($objArray['revised_version'])).'&succs_msg_for_insert');
return true;

}
}
/*************************************************Revise List/****************************************************************/
  function Select_Revise()
{
		global $objSmarty,$config;
		$tbl = $config['DBPrefix'];
		if($_GET['revised_version'] != "")
		{
		$SelQuery = 'SELECT * from '.$tbl.'project_quote_details WHERE project_quote_no="'.$_GET['project_quote_no'].'" AND revised_version ="'.$_GET['revised_version'].'"';
		$Revise = $this->ExecuteQuery($SelQuery, "select");
		$objSmarty->assign('Revise', $Revise);
		}
		else
		{
		$SelQuery1 = 'SELECT * from '.$tbl.'project_quote_details WHERE project_quote_no="'.$_GET['project_quote_no'].'" AND status="1"';
		$ReviseIn = $this->ExecuteQuery($SelQuery1, "select");
		$objSmarty->assign('ReviseIn', $ReviseIn);
		}
		
		//print_r($Revise);exit;
		return $Revise;
} 
/*****************************************************Select Terms/***********************************************************/
   function SelectProjectTerm($objArray="")
 {
			global $objSmarty,$config;
			$tbl = $config['DBPrefix'];
			if($_GET['revised_version'] != "")
			{
			$SelQuery = 'SELECT * FROM `'.$tbl.'project_term` WHERE project_quote_no ="'.$_GET['project_quote_no'].'" AND revised_version ="'.$_GET['revised_version'].'" AND `status` = 1';
			$ProjectTerm = $this->ExecuteQuery($SelQuery, 'select');
			$objSmarty->assign('ProjectTerm', $ProjectTerm);
			}
			else
			{
			$SelQuery1 = 'SELECT * FROM `'.$tbl.' project_term` WHERE project_quote_no ="'.$_GET['project_quote_no'].'" AND `status` = 1';
			$ProjectTerm1 = $this->ExecuteQuery($SelQuery1, 'select');
			$objSmarty->assign('ProjectTerm1', $ProjectTerm1);
			}
 }
 /***************************************************************Project Quote List/**************************/
 function list_projectIns_details($objArray='')
 {
 global $objSmarty,$config;
$tbl = $config['DBPrefix'];
 $select_query='SELECT * FROM `'.$tbl.'project_quote_details` WHERE project_quote_no = "'.$_GET['project_quote_no'].'" AND revised_version = "'.$_GET['revised_version'].'" AND `status`=1';
 $SelectList= $this->ExecuteQuery($select_query, "select");
 $objSmarty->assign('SelectList',$SelectList);
 //print_r($SelectList);exit;
 return $SelectList;
 }
  /********************************************Select Enquiry Id/****************************************************************/
  function SelectId($objArray=""){
global $objSmarty,$config,$_POST;
$tbl = $config['DBPrefix'];
		$SelQuery	= 'SELECT * FROM `'.$tbl.'project_quote_master` WHERE `project_quote_no` = "'.$_GET['project_quote_no'].'"';
		$RevDetail = $this->ExecuteQuery($SelQuery, 'select');
		$objSmarty->assign('RevDetail' , $RevDetail);

  
 }
/*************************************************Select project Quote***************************************************************/
 function SelectMaster($objArray)
 { 
			global $objSmarty,$config;
			$tbl = $config['DBPrefix'];
			$SelQuery = 'SELECT * FROM `'.$tbl.'enquriy_master` WHERE `status` = 1 AND `enquiry_id` ="'.$_GET['enquiry_id'].'"';
			$ListMstr = $this->ExecuteQuery($SelQuery, 'select');
			$objSmarty->assign('ListMstr', $ListMstr);
			return $ListMstr;
 }
 
 /*************************************************Select Service Quote/***************************************************************/
 function SelectMaster1($objArray="")
 {
 		   global $objSmarty,$config;
			$tbl = $config['DBPrefix'];
			$project_quote_id = base64_decode($_GET["project_quote_no"]);
			$enq_id = base64_decode($_GET["enquiry_id"]); 
			if(isset($_GET['enquiry_id']) && isset($_GET['project_quote_no']))
			{
			$SelQuery = 'SELECT * FROM `'.$tbl.'project_quote_master` WHERE `status` = 1 AND `enquiry_id` ="'.$enq_id.'" AND project_quote_no="'.$project_quote_id.'"';
			}
			elseif(isset($enq_id))
			{
		 	 $SelQuery = 'SELECT * FROM `'.$tbl.'enquriy_master` WHERE `status` = 1 AND `enquiry_id` ="'.$enq_id.'"';
			}
			
			$LDList2 = $this->ExecuteQuery($SelQuery, 'select');
			 $objSmarty->assign('LDList2', $LDList2);

 }

/****************************************************List ProjectQuote****************************************/
 function ListProjectQuote($objArray)
 {
/* 	$project_quote_id = base64_decode($_GET["project_quote_no"]);
	$enq_id = base64_decode($_GET["enquiry_id"]);
	$salesrevise_id = base64_decode($_GET["revised_version"]);
	$salesenqty_id = base64_decode($_GET["enquiry_type"]);
*/
 		 global $objSmarty,$config;
$tbl = $config['DBPrefix'];
			$SelQuery2 = 'SELECT '.$tbl.'project_quote_master.*, '.$tbl.'project_quote_details.* FROM `'.$tbl.'project_quote_master`, `'.$tbl.'project_quote_details` WHERE '.$tbl.'project_quote_master.status = "1" AND '.$tbl.'project_quote_master.project_quote_no='.$tbl.'project_quote_details.project_quote_no ';
			$ListView = $this->ExecuteQuery($SelQuery2, "select");
			$objSmarty->assign('ListView', $ListView);
			return $ListView;

 } 
 /****************************************************View ProjectQuote Detail****************************************/
 function ViewProjectQuote()
 {
global $objSmarty,$config;
$tbl = $config['DBPrefix'];
$SelQuery = 'SELECT '.$tbl.'project_quote_master.*, '.$tbl.'project_quote_details.* FROM `'.$tbl.'project_quote_master`, `'.$tbl.'project_quote_details` WHERE '.$tbl.'project_quote_master.status = "1" AND '.$tbl.'project_quote_master.project_quote_no='.$tbl.'project_quote_details.project_quote_no  AND  '.$tbl.'project_quote_master.project_quote_no="'.$_GET['project_quote_no'].'"';
			$ListDetail = $this->ExecuteQuery($SelQuery, "select");
			$objSmarty->assign('ListDetail', $ListDetail);
			return $ListDetail;

 }
 /****************************************************Time Stamp Value As Date And Time Form Master****************************************/
 function DateStamp()
 {global $objSmarty,$config;
$tbl = $config['DBPrefix'];
$SelQuery = 'SELECT Date(timestamp) as Date from '.$tbl.'project_quote_master WHERE project_quote_no="'.$_GET['project_quote_no'].'"';
			 $Date_Stamp = $this->ExecuteQuery($SelQuery, "select");
			  //print $Date;
			 $objSmarty->assign('Date_Stamp', $Date_Stamp);
			 return $Date_Stamp;
			 
}

  function TimeStamp()
  {global $objSmarty,$config;
$tbl = $config['DBPrefix'];
$SelQuery1 = 'SELECT  Time(timestamp) as Time from '.$tbl.'project_quote_master WHERE project_quote_no="'.$_GET['project_quote_no'].'"';
			 $Time_Stamp = $this->ExecuteQuery($SelQuery1, "select");
			 $objSmarty->assign('Time_Stamp', $Time_Stamp);
			 return $Time_Stamp;
			

 } 
  /*************************************************View Edit Project Quote***************************************************************/
function ViewEdit($objArray='')
 {
global $objSmarty,$config;
$tbl = $config['DBPrefix'];
$SelQuery = 'SELECT * FROM `'.$tbl.'project_quote_master`, `'.$tbl.'project_quote_details` WHERE '.$tbl.'project_quote_master.status = "1" AND '.$tbl.'project_quote_master.project_quote_no="'.$_GET['project_quote_no'].'" AND '.$tbl.'project_quote_details.project_quote_no="'.$_GET['project_quote_no'].'"';
			$ListView = $this->ExecuteQuery($SelQuery, "select");
			$objSmarty->assign('ListView', $ListView);
			return $ListView;

 }
 
/*********************************************List Project*************************************************/
 function ListProject($objArray='')
 {
			global $objSmarty,$config;
			$tbl = $config['DBPrefix'];
			//$SelQuery = 'SELECT * FROM `'.$tbl.'project_quote_details` WHERE status = "1" AND enquiry_id="'.$_GET['enquiry_id'].'" ';
			$SelQuery3 = 'SELECT '.$tbl.'project_quote_master.*, '.$tbl.'project_quote_details.* FROM `'.$tbl.'project_quote_master`,`'.$tbl.'project_quote_details` WHERE '.$tbl.'project_quote_master.project_quote_no='.$tbl.'project_quote_details.project_quote_no  AND  '.$tbl.'project_quote_master.enquiry_id="'.$_GET['enquiry_id'].'"';
			$ViewContact = $this->ExecuteQuery($SelQuery3, "select");
			$objSmarty->assign('ViewContact', $ViewContact);
			return $ViewContact;

 }
 function ListProject1($objArray='')
 {
			global $objSmarty,$config;
			$tbl = $config['DBPrefix'];
			//$SelQuery = 'SELECT * FROM `'.$tbl.'project_quote_details` WHERE status = "1" AND enquiry_id="'.$_GET['enquiry_id'].'" ';
			$SelQuery = 'SELECT '.$tbl.'project_quote_master.*, '.$tbl.'project_quote_details.* FROM `'.$tbl.'project_quote_master`,`'.$tbl.'project_quote_details` WHERE '.$tbl.'project_quote_master.project_quote_no='.$tbl.'project_quote_details.project_quote_no  AND  '.$tbl.'project_quote_master.enquiry_id="'.$_GET['enquiry_id'].'"';
			$ViewContact1 = $this->ExecuteQuery($SelQuery, "select");
			$objSmarty->assign('ViewContact1', $ViewContact1);
			return $ViewContact1;

 }
 
 /**********************************************Edit Project*********************************************************************/
 function EditProject($ConIdent)
 {
			global $objSmarty,$config;
			$tbl = $config['DBPrefix'];
			$SelQuery = 'SELECT * FROM `'.$tbl.'project_quote_details` WHERE status = "1" AND sl_no="'.$ConIdent.'" ';
			$ViewContact = $this->ExecuteQuery($SelQuery, "select");
			$objSmarty->assign('ViewContact', $ViewContact);
			return $ViewContact;
			header('Location:' .$_SERVER['PHP_SELF'].'?succs_msg_for_insert');

 }
/******************************************** Delete Project*******************************/
  function DeleteProject($CatIdent,$CusIdent)
 {
 		 global $objSmarty,$config;
		 $tbl = $config['DBPrefix'];
			 $DelQuery = 'update `'.$tbl.'project_quote_master` set `status` = 0 WHERE `enquiry_id` ="'.$CatIdent.'"';
			$this->ExecuteQuery($DelQuery, 'update');
           header('Location:' .$_SERVER['PHP_SELF'].'?project_quote_no='.$CusIdent);
			return true;
 }
  /*******************************************Delete Project/*****************************************************************/
 function DeleteProjectIns($CatIdent,$CusIdent,$Rev,$Enq,$Total,$Sub)
 {
		global $objSmarty,$config;
		$tbl = $config['DBPrefix'];
		$selection = $_GET['revised_version'];
		
$SelQuery2 = 'SELECT SUM(material_estimate + labour_estimate) AS Sub FROM `'.$tbl.'project_quote_details` WHERE project_quote_no="'.$_GET['project_quote_no'].'" AND revised_version="'.$selection.'" AND `sl_no` ="'.$CatIdent.'" AND status="1"';
		$SubView = $this->ExecuteQuery($SelQuery2, "select");
		$objSmarty->assign('SubView', $SubView);


		$DelQuery = 'DELETE FROM `'.$tbl.'project_quote_details` WHERE `sl_no` ="'.$CatIdent.'" ';
		$this->ExecuteQuery($DelQuery, 'update');
		
				
		$SelQuery = 'SELECT * FROM '.$tbl.'project_quote_master WHERE project_quote_no = "'.$_GET['project_quote_no'].'" AND revised_version = "'.$selection.'"';
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
		$sub_total = $master_var2 - $detail_var;
		
		$UpQuery ='UPDATE `'.$tbl.'project_quote_master`  SET `total` = "'.$total.'" , `sub_total` = "'.$sub_total.'" WHERE `project_quote_no` ="'.$_GET['project_quote_no'].'" 
		AND `revised_version` ="'.$selection.'"';
		$this->ExecuteQuery($UpQuery, 'update');

		header('Location:' .$_SERVER['PHP_SELF'].'?project_quote_no='.$CusIdent.'&revised_version='.$Rev.'&enquiry_id='.$Enq.'&succs_msg_for_del');

 }
 /**************************Delete Revision/******************************************/
  function DeleteRev($CatIdent,$Project,$CusIdent,$Total,$Sub)
 {
		global $objSmarty,$config;
		$tbl = $config['DBPrefix'];
		$selection = $_GET['revised_version'];
		$Revision = ++$selection;
		
 $SelQuery2 = 'SELECT SUM(material_estimate + labour_estimate) AS Sub FROM `'.$tbl.'project_quote_details` WHERE project_quote_no="'.$_GET['project_quote_no'].'" AND revised_version="'.$Revision.'" AND `sl_no` ="'.$CatIdent.'" AND status="1"';
		$SubView = $this->ExecuteQuery($SelQuery2, "select");
		$objSmarty->assign('SubView', $SubView);

		$DelQuery = 'DELETE FROM `'.$tbl.'project_quote_details` WHERE `sl_no` ="'.$CatIdent.'" ';
		$this->ExecuteQuery($DelQuery, 'update');
		
		$SelQuery = 'SELECT * FROM '.$tbl.'project_quote_master WHERE project_quote_no = "'.$_GET['project_quote_no'].'" AND revised_version = "'.$Revision.'"';
		$SelectSub = $this->ExecuteQuery($SelQuery, "select");
		$objSmarty->assign('SelectSub', $SelectSub);

		$master_var1 = $SelectSub[0]['total'];
		$master_var2 = $SelectSub[0]['sub_total'];
        $detail_var= $SubView[0]['Sub'];
		
		$total = $master_var1 - $Total;
		$sub_total = $master_var2 - $detail_var;
		
 $UpQuery ='UPDATE `'.$tbl.'project_quote_master`  SET `total` = "'.$total.'" , `sub_total` = "'.$sub_total.'" WHERE `project_quote_no` ="'.$_GET['project_quote_no'].'" AND `revised_version` ="'.$Revision.'"';

$this->ExecuteQuery($UpQuery, 'update');
 
		header('Location:' .$_SERVER['PHP_SELF'].'?project_quote_no='.$_GET["project_quote_no"].'&revised_version='.$_GET['revised_version'].'&succs_msg_for_del');

 }
 /**********************************Delete Project/***********************************************************************/
  function DeleteProjectEdit($CatIdent,$CusIdent,$Rive,$Total,$Sub)
 {
 
		global $objSmarty,$config;
		$tbl = $config['DBPrefix'];
		$selection = $_GET['revised_version'];
		 
		 $SelQuery2 = 'SELECT SUM(material_estimate + labour_estimate) AS Sub FROM `'.$tbl.'project_quote_details` WHERE project_quote_no="'.$_GET['project_quote_no'].'" AND revised_version="'.$_GET['revised_version'].'" AND `sl_no` ="'.$CatIdent.'" AND status="1"';
		$SubView = $this->ExecuteQuery($SelQuery2, "select");
		$objSmarty->assign('SubView', $SubView);

		$DelQuery = 'DELETE FROM `'.$tbl.'project_quote_details` WHERE `sl_no` ="'.$CatIdent.'" ';
		$this->ExecuteQuery($DelQuery, 'update');
		
		 $SelQuery = 'SELECT * FROM '.$tbl.'project_quote_master WHERE project_quote_no = "'.$_GET['project_quote_no'].'" AND revised_version = "'.$Rive.'"';
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
		$sub_total = $master_var2 - $detail_var;
		
		$UpQuery ='UPDATE `'.$tbl.'project_quote_master`  SET `total` = "'.$total.'" , `sub_total` = "'.$sub_total.'" WHERE `project_quote_no` ="'.$_GET['project_quote_no'].'" 
		AND `revised_version` ="'.$selection.'"';
		$this->ExecuteQuery($UpQuery, 'update');
		
		 header('Location:' .$_SERVER['PHP_SELF'].'?project_quote_no='.$CusIdent.'&revised_version='.$Rive.'&succs_msg_for_del');

 }
 
 /*****************************************Delete Revised**************************************************/
   function DeletePro($CatIdent,$CusIdent)
 {
 		 global $objSmarty,$config;
		 $tbl = $config['DBPrefix'];
		 $DelQuery ='DELETE FROM `'.$tbl.'project_quote_details` WHERE sl_no ="'.$CatIdent.'" AND project_quote_no="'.$CusIdent.'"'; 
		 $this->ExecuteQuery($DelQuery, 'delete');
           header('Location:' .$_SERVER['PHP_SELF'].'?project_quote_no='.$CusIdent.'&succs_msg_for_del');
			return true;
 }
 /*************************************************Revised Quote List/*************************************/
 function Revised_List($objArray='')
 {
 global $objSmarty,$config;
$tbl = $config['DBPrefix'];
$selection = $_GET['revised_version'];
 $select_query='SELECT * FROM `'.$tbl.'project_quote_details` WHERE project_quote_no = "'.$_GET['project_quote_no'].'" AND revised_version = "'.++$selection.'" AND `status`=1';
 $SelectList		= $this->ExecuteQuery($select_query, "select");
 $objSmarty->assign('SelectList',$SelectList);
 return $SelectList;
 }
 /************************************************Select Project/********************************************************************/
  function SelectQuote($objArray="")
 {
			global $objSmarty,$config;
			$tbl = $config['DBPrefix'];
			$SelQuery = 'SELECT * FROM `'.$tbl.'project_quote_master` WHERE project_quote_no="'.$_GET['project_quote_no'].'" AND `status` = 1 LIMIT 0,1' ;
			$ProjectQuote = $this->ExecuteQuery($SelQuery, 'select');
			$objSmarty->assign('ProjectQuote', $ProjectQuote);
			return $ProjectQuote;
 }
 /**********************************************Revised List/************************************************************/ 
  function Revised_Project($objArray="")
 {
			global $objSmarty,$config;
			$tbl = $config['DBPrefix'];
			$selection = $_GET['revised_version'];
			$Revise = ++$selection;
			$SelQuery = 'SELECT * FROM `'.$tbl.'project_term` WHERE  project_quote_no="'.$_GET['project_quote_no'].'" AND  revised_version="'.$Revise.'" AND `status` = 1';
			$RevTerm = $this->ExecuteQuery($SelQuery, 'select');
			$objSmarty->assign('RevTerm', $RevTerm);
			
			$SelQuery1 = 'SELECT * FROM `'.$tbl.'project_term` WHERE  project_quote_no="'.$_GET['project_quote_no'].'" AND  revised_version="'.$_GET['revised_version'].'" AND `status` = 1';
			$Rev_Term = $this->ExecuteQuery($SelQuery1, 'select');
			$objSmarty->assign('Rev_Term', $Rev_Term);
			
 }
 /************************************List Project***************************************************/
 function list_project_details()
 {
 global $objSmarty;
 global $objSmarty,$config;
$tbl = $config['DBPrefix'];
$select_query='SELECT * FROM `'.$tbl.'project_quote_details` WHERE `status`=1';
 $project_details_list		= $this->ExecuteQuery($select_query, "select");
 $objSmarty->assign('project_details_list',$project_details_list);
 return $project_details_list;
 }
 /************************************List Project***************************************************/
 function list_project_details1()
 { 

 global $objSmarty,$config;
$tbl = $config['DBPrefix'];
 $selQuery='SELECT DISTINCT project_quote_no , quote_date FROM `'.$tbl.'project_quote_master` WHERE project_quote_no = "'.$_GET['project_quote_no'].'" AND `status`=1'; 
 $ListDetail		= $this->ExecuteQuery($selQuery, "select");
 $objSmarty->assign('ListDetail',$ListDetail);

 $select_query='SELECT * FROM `'.$tbl.'project_quote_details` WHERE project_quote_no = "'.$_GET['project_quote_no'].'" AND `status`=1';
 $ListDetail2		= $this->ExecuteQuery($select_query, "select");
 $objSmarty->assign('ListDetail2',$ListDetail2);
 return $ListDetail2;
 
 }
/********************************Get Project/ **************************************************************/
	function GetProjectView($objArray='')  {
		global $objSmarty,$config;
		$tbl = $config['DBPrefix'];
		$objSmarty->assign('c_id',$_GET['project_quote_no']);
		$SelQuery = 'SELECT * FROM `'.$tbl.'project_quote_master` WHERE project_quote_no ="'.$_GET['project_quote_no'].'"' ;
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
	/*****************************************Delete Project*******************************************************************/
function ProjectDelete($CatIdent,$CusIdent,$Rev,$Enq)
 { 
		global $objSmarty,$config;
		$tbl = $config['DBPrefix'];
		//print_r($Rev);exit;
		$DelQuery = 'DELETE FROM `'.$tbl.'project_quote_details` WHERE `sl_no` ="'.$CatIdent.'" ';
		$this->ExecuteQuery($DelQuery, 'update');
header('Location:' .$_SERVER['PHP_SELF'].'?project_quote_no='.$CusIdent.'&revised_version='.$Rev.'&enquiry_id='.$Enq.'&succs_msg_for_del');
 }
 
 
	/****************************************************View Project Detail/*************************************************************************/
  function SelectProjectDetail($objArray="")
 {
 $project_quote_id = base64_decode($_GET["project_quote_no"]);
			global $objSmarty,$config;
			$tbl = $config['DBPrefix'];
			$SelQuery = 'SELECT * FROM `'.$tbl.'project_quote_details` WHERE revised_version="'.$_GET['revised_version'].'" AND project_quote_no="'.$_GET['project_quote_no'].'" AND status="1"';
			$ProjectList2 = $this->ExecuteQuery($SelQuery, 'select');
			$objSmarty->assign('ProjectList2', $ProjectList2);
			return $ProjectList2;
 }
 /**********************************Select Detail/***************************************************/
 function SelectProjectDetail1($objArray="")
 {
			global $objSmarty,$config;
			$tbl = $config['DBPrefix'];
			if($_GET['revised_version'] != "")
			{
			$SelQuery = 'SELECT * FROM `'.$tbl.'project_quote_master` WHERE project_quote_no ="'.$_GET['project_quote_no'].'" AND revised_version ="'.$_GET['revised_version'].'"  AND `status` = 1';
			$ServiceIn = $this->ExecuteQuery($SelQuery, 'select');
			$objSmarty->assign('ServiceIn', $ServiceIn);
			}
			else
			{
			$SelQuery1 = 'SELECT * FROM `'.$tbl.'project_quote_master` WHERE project_quote_no ="'.$_GET['project_quote_no'].'"  AND `status` = 1';
			$ServiceIn1 = $this->ExecuteQuery($SelQuery1, 'select');
			$objSmarty->assign('ServiceIn1', $ServiceIn1);
			}
 }
 /******************************Project Details/***********************************************************/
 function ListProjectViewDetail($objArray="")
{
			$project_quote_id = base64_decode($_GET["project_quote_no"]);
			global $objSmarty,$config;
			$tbl = $config['DBPrefix'];
			$SelQuery = 'SELECT * FROM `'.$tbl.'project_quote_master` WHERE revised_version ="'.$_GET['revised_version'].'" AND project_quote_no="'.$_GET['project_quote_no'].'" AND `status` = 1';
			$ProjectList3 = $this->ExecuteQuery($SelQuery, 'select');
			$objSmarty->assign('ProjectList3', $ProjectList3);
			return $ProjectList3;
 }
/******************************************************************************************/
 function SelectProduct($objArray="")
  {
			global $objSmarty,$config;
			$tbl = $config['DBPrefix'];

			$SelQuery = 'SELECT * FROM '.$tbl.'product_master WHERE item_description="'.$_GET['product_description'].'"';
			$Product = $this->ExecuteQuery($SelQuery, "select");
			$objSmarty->assign('Product', $Product);
			//print_r($Product);
				
}
/*******************************************************************************************Project Print/*********************************************/
 function ProjectPrint($objArray)
 {
  	$project_quote_id = base64_decode($_GET["project_quote_no"]);   
	$salesrevise_id = base64_decode($_GET["revised_version"]);
	 		global $objSmarty,$config;
			$tbl = $config['DBPrefix'];
			$SelQuery4 = 'SELECT * FROM `'.$tbl.'project_quote_details` WHERE project_quote_no="'.$project_quote_id.'" AND revised_version="'.$salesrevise_id.'" AND status="1"';
			$MailView = $this->ExecuteQuery($SelQuery4, "select");
			$objSmarty->assign('MailView', $MailView);
			return $MailView;

 }
 function ToAddress($SalIdent)
 {   
 	$project_quote_id = base64_decode($_GET["project_quote_no"]);   
	$enq_id = base64_decode($_GET["enquiry_id"]);
	$salesrevise_id = base64_decode($_GET["revised_version"]);
	$salesenqty_id = base64_decode($_GET["enquiry_type"]);     
		global $objSmarty,$config;
		$tbl = $config['DBPrefix'];
		$SelQuery1 = 'SELECT * FROM `'.$tbl.'project_quote_master` WHERE project_quote_no ="'.$project_quote_id.'" AND revised_version="'.$salesrevise_id.'" AND status="1"';
		$AddressView = $this->ExecuteQuery($SelQuery1, "select");
		$objSmarty->assign('AddressView', $AddressView);
		return $AddressView;
 }
  /**********************************************Revised List/************************************************************/ 
  function Revised_Sale($objArray="")
 {
			global $objSmarty,$config;
			$tbl = $config['DBPrefix'];
			$revision = $_GET['revised_version'];
			$Revise = ++$revision;
			$SelQuery = 'SELECT * FROM `'.$tbl.'project_term` WHERE  project_quote_no="'.$_GET['project_quote_no'].'" AND  revised_version="'.$Revise.'" AND `status` = 1';
			$RevTerm = $this->ExecuteQuery($SelQuery, 'select');
			$objSmarty->assign('RevTerm', $RevTerm);
			
			$SelQuery1 = 'SELECT * FROM `'.$tbl.'project_term` WHERE  project_quote_no="'.$_GET['project_quote_no'].'" AND  revised_version="'.$_GET['revised_version'].'" AND `status` = 1';
			$Rev_Term = $this->ExecuteQuery($SelQuery1, 'select');
			$objSmarty->assign('Rev_Term', $Rev_Term);
			
 }
 function add_Total()
{
	global $objSmarty,$config;
	$tbl = $config['DBPrefix'];
	$SelQuery = 'SELECT sum(total) as Total from '.$tbl.'project_quote_details WHERE project_quote_no="'.$_GET['project_quote_no'].'" AND revised_version="'.$_GET['revised_version'].'"';
	$AddView = $this->ExecuteQuery($SelQuery, "select");
	
	$objSmarty->assign('AddView', $AddView);
	return $AddView;
}  
/******************************************Service Invoice/***************************************************************************/
function ServiceInvoice($objArray)
 {
 	$enq_id = base64_decode($_GET["enquiry_id"]);
	$salesrevise_id = base64_decode($_GET["revised_version"]);
	global $objSmarty,$config;
$tbl = $config['DBPrefix'];
			
		$SelQuery = 'SELECT SUM(material_estimate + labour_estimate) AS sub FROM `'.$tbl.'project_quote_details` WHERE enquiry_id="'.$enq_id.'" AND revised_version="'.$salesrevise_id.'" ';
			$InvoiceView1 = $this->ExecuteQuery($SelQuery, "select");
			$objSmarty->assign('SubView1', $InvoiceView1);
			
			$SelQuery1 = 'SELECT * FROM `'.$tbl.'project_quote_details` WHERE enquiry_id="'.$enq_id.'" AND revised_version="'.$salesrevise_id.'"';
			$InvoiceView1 = $this->ExecuteQuery($SelQuery1, "select");
			//print_r($InvoiceView);exit;
			$objSmarty->assign('InvoiceView1', $InvoiceView1);


 }
function tax_Total()
{ 
	$project_quote_id = base64_decode($_GET["project_quote_no"]);
	$salesrevise_id = base64_decode($_GET["revised_version"]);
	global $objSmarty,$config;
	$tbl = $config['DBPrefix'];
	$SelQuery = 'SELECT sum(vat_value) as tax from '.$tbl.'project_quote_details WHERE project_quote_no="'.$project_quote_id.'" AND revised_version="'.$salesrevise_id.'"';     
	$Add_tax = $this->ExecuteQuery($SelQuery, "select");  
			$objSmarty->assign('Add_tax', $Add_tax);
			return $Add_tax;
}  
/************************************Enquiry/**************************************************************/
function Enquiry($objArray="")
 {
 	$project_quote_id = base64_decode($_GET["project_quote_no"]);
	$enq_id = base64_decode($_GET["enquiry_id"]);    
	$salesrevise_id = base64_decode($_GET["revised_version"]);
	$salesenqty_id = base64_decode($_GET["enquiry_type"]);

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
 function pro_enq_Type()
{
		global $objSmarty,$config;
		$tbl = $config['DBPrefix'];
		
		$SelQuery = 'SELECT * from '.$tbl.'enquriy_master WHERE enquiry_id="'.$_GET['enquiry_id'].'"';
		$Enq_type = $this->ExecuteQuery($SelQuery, "select");
		$objSmarty->assign('Enq_type', $Enq_type);
		return $Enq_type;
}  
function SalesTerms(){
$salesenqty_id = base64_decode($_GET["enquiry_type"]);
global $objSmarty,$config;
$tbl = $config['DBPrefix'];
 	$SelQuery = 'SELECT * FROM '.$tbl.'terms_master WHERE status="1" AND type="'.$salesenqty_id.'" ' ;
	$sale_term = $this->ExecuteQuery($SelQuery, "select");
	$objSmarty->assign('sale_term', $sale_term);
	return $sale_term;
}

 }

?>


