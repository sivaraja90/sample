<?php

#####Class For Adding Content Management ######
class SalesOrder extends MysqlFns{

 /* class constructor */
 function SalesOrder(){
 $this->LDDisplayPath= $config['SiteGlobalPath']."class.SalesOrder.php";
	global $config;global $objSmarty,$config;
	$tbl = $config['DBPrefix'];
	$this->MysqlFns();
	$this->Limit = 20;
	$sales_id = base64_decode($_GET["sales_order_no"]);
   /**************************************Sales Quote No Auto Increment/*********************************************************/

			$SelQuerys1	= 'SELECT max(sales_order_no) as last FROM `'.$tbl.'sales_master` Limit 0,1';
			$SaleDetail	= $this->ExecuteQuery($SelQuerys1, 'select');
			  if($SaleDetail[0]['last']!="")
			{
			$SaleDetail[0]['sales_order_no'] = stripslashes($SaleDetail[0]['last']);
			$s_quote1 = preg_replace("/[^0-9\.]/", '', $SaleDetail[0]['sales_order_no']);
			$s_quote1= $s_quote1 + 1;
			$str = str_split($SaleDetail[0]['last'], 3);
			$s_quote = $str[0]. "" .$s_quote1;
			}
			else
			{
			$s_quote = "SO1001";
			}
			$objSmarty->assign('s_quote', $s_quote);
			/*************************************Invoice Number Auto Increment/*************************************************************************/
			$SelQuerys	= 'SELECT max(invoice_no) as last FROM `'.$tbl.'sales_payment_master` Limit 0,1';
			$CusDetail	= $this->ExecuteQuery($SelQuerys, 'select');

			if($CusDetail[0]['last']!="")
			{
			$CusDetail[0]['invoice_no'] = stripslashes($CusDetail[0]['last']);
			$c_id1 = preg_replace("/[^0-9\.]/", '', $CusDetail[0]['invoice_no']);
			$c_id1= $c_id1 + 1;
			$str = str_split($CusDetail[0]['last'], 3);
			$c_id = $str[0]. "" .$c_id1;
			}
			else
			{
			$c_id = "INV1001";
			}
			$objSmarty->assign('c_id', $c_id);

	/*************************************Sale Revised Version/************************************************************************************/
			$SelQuerys1	= 'SELECT max(sales_revised_version) as last FROM `'.$tbl.'sales_details` WHERE sales_order_no="'.$_GET["sales_order_no"].'" Limit 0,1';
			$SaleDetail	= $this->ExecuteQuery($SelQuerys1, 'select');
			$SaleDetail[0]['sales_revised_version'] = stripslashes($SaleDetail[0]['last']);
			$r_version1 = preg_replace("/[^0-9\.]/", '', $SaleDetail[0]['sales_revised_version']);
			$r_version1= $r_version1 + 1;
			/*$str = str_split($SaleDetail[0]['last'],3);//CUS
			$r_version = $str[0]. "" .$r_version1;*/
			$len = strlen($r_version1);
			if($len==1)
				{
				 	$mid = "00";
				}
			elseif($len==2)
				{
				$mid = "00";
				}
			$str = str_split($SaleDetail[0]['last'],3);
			//print_r($str);
			$r_version = $str[0]. "" .$mid. "" .$r_version1;
			$objSmarty->assign('r_version', $r_version);

 }
  /********************************************Validation for Static Pages/****************************************************************/
 function ChkDupliSale($sales_order_no, $Ident=''){
global $objSmarty,$config,$_POST;
$tbl = $config['DBPrefix'];
		$SelQuery	= 'SELECT * FROM `'.$tbl.'sales_master` WHERE `sales_order_no` = "'.$sales_order_no.'" Limit 0,1';
		$SalesDetail = $this->ExecuteQuery($SelQuery, 'select');

		if(!empty($SalesDetail) && is_array($SalesDetail))
		   return false;
		else
		  return true;
 }

/*************************************************View Sales Quote/***************************************************************/
function ViewSalesOrderQuote($objArray="")
 {
 $sales_id = base64_decode($_GET["sales_order_no"]);
// print_r($sales_id); exit;
global $objSmarty,$config;
$tbl = $config['DBPrefix'];
 $SelQuery = 'SELECT  * FROM `'.$tbl.'sales_master`,`'.$tbl.'sales_details` WHERE '.$tbl.'sales_master.sales_order_no='.$tbl.'sales_details.sales_order_no AND '.$tbl.'sales_master.sales_order_no="'.$sales_id.'" GROUP BY '.$tbl.'sales_master.sales_order_no';
			$ListDetail = $this->ExecuteQuery($SelQuery, "select");
			$objSmarty->assign('ListDetail', $ListDetail);
			return $ListDetail;

 }
 /******************************************Sales Master/******************************************************/
 function SaleOrderMaster($objArray="")
 {
		global $objSmarty,$config;
		$tbl = $config['DBPrefix'];
		$sales_id = base64_decode($_GET["sales_order_no"]);
		$SelQuery = 'SELECT * FROM `'.$tbl.'sales_details` WHERE '.$tbl.'sales_details.sales_order_no="'.$sales_id.'"';
		$MasterList = $this->ExecuteQuery($SelQuery, "select");
		$objSmarty->assign('MasterList', $MasterList);
		return $MasterList;

 }
 /****************************************View Enquiry Type*****************************************************************/
  function EnqType($objArray="")
 {
		global $objSmarty,$config;
		$tbl = $config['DBPrefix'];
	 $SelQuery = 'SELECT * FROM `'.$tbl.'enquriy_master` WHERE enquiry_id="'.$_GET["enquiry_id"].'"';
		$enquiry = $this->ExecuteQuery($SelQuery, "select");
		$objSmarty->assign('enquiry', $enquiry);
		return $enquiry;

 }
 /**********************************************Edit Followup*********************************************************************/
 function EditContact($ConIdent)
 {
			global $objSmarty,$config;
			$tbl = $config['DBPrefix'];
			$SelQuery = 'SELECT * FROM `'.$tbl.'sales_master` WHERE status = "1" AND sl_no="'.$ConIdent.'" ';
			$ViewContact = $this->ExecuteQuery($SelQuery, "select");
			$objSmarty->assign('ViewContact', $ViewContact);
			return $ViewContact;
			header('Location:' .$_SERVER['PHP_SELF'].'?succs_msg_for_insert');

 }
  /**********************************************Edit FollowUp*********************************************************************/
 function EditDetails($objArray='')
 {
  global $objSmarty,$_config,$_POST;
  global $objSmarty,$config;
  $tbl = $config['DBPrefix'];
			if(!$objArray['enquiry_id']){
			$objSmarty->assign('ErrorMessage', 'Enquiry Id should not be blank');
			return false;
			}elseif((!$objArray['sales_quote_no'])){
			$objSmarty->assign('ErrorMessage', 'Sales Quote Number should not be blank');
			return false;
			}elseif(!$objArray['quantity']){
			$objSmarty->assign('ErrorMessage', 'Quantity should not be blank');
			return false;
			}elseif(!$objArray['vat_per']){
			$objSmarty->assign('ErrorMessage', 'Vat Percentage should not be blank');
			return false;
			}elseif(!$objArray['unit_basic']){
			$objSmarty->assign('ErrorMessage', 'Unit basic Field should not be blank');
			return false;
			}elseif(!$objArray['sub_total']){
			$objSmarty->assign('ErrorMessage', 'Sub Total Field should not be blank');
			return false;
			}elseif(!$objArray['total']){
			$objSmarty->assign('ErrorMessage', 'Total Field should not be blank');
			return false;
			}

			$objSmarty->assign('sales_order_no', $objArray['sales_order_no']);


 $UpQuery = 'UPDATE `'.$tbl.'sales_details` SET `sales_order_no` = "'.trim($objArray['sales_order_no']).'", `salutation` = "'.trim($objArray['salutation']).'", `first_name` = "'.trim($objArray['customer_fname']).'",`last_name` = "'.trim($objArray['customer_lname']).'", `mobile_no` = "'.trim($objArray['mobile_no']).'", `mobile_no1` = "'.trim($objArray['mobile_no1']).'", `mobile_no2` = "'.trim($objArray['mobile_no2']).'",`area_code` = "'.trim($objArray['area_code']).'", `area_code1` = "'.trim($objArray['area_code1']).'",`extension` = "'.trim($objArray['extension']).'", `extension1` = "'.trim($objArray['extension1']).'",`phone_no` = "'.trim($objArray['phone_no']).'", `phone_no1` = "'.trim($objArray['phone_no1']).'",`created_by` = "'.trim($objArray['created_by']).'", `designation` = "'.trim($objArray['designation']).'",`mail_id` = "'.trim($objArray['mail_id']).'", `mail_id1` = "'.trim($objArray['mail_id1']).'",`area` = "'.trim($objArray['area']).'", `d_o_b` = "'.trim($objArray['d_o_b']).'", `remarks` = "'.trim($objArray['remarks']).'",`status` = "1" WHERE `sl_no` ="'.trim($objArray['s_no']).'"';
$this->ExecuteQuery($UpQuery, 'update');

header('Location:' .$_SERVER['PHP_SELF'].'?succs_msg_for_insert'."&"."sl_no=".$_GET['sl_no']);
return true;

}
 /*************************************************List Sales Quote/***************************************************************/

 function ListSalesOrder()
 {
global $objSmarty,$config;
$tbl = $config['DBPrefix'];
$SelQuery = 'SELECT * FROM '.$tbl.'sales_master WHERE status=1 ORDER BY sales_order_no DESC';
//$SelQuery = 'SELECT * FROM '.$tbl.'sales_master WHERE sales_order_no ="'.$_GET['sales_order_no'].'" AND status=1';
			$ListView = $this->ExecuteQuery($SelQuery, "select");
			$objSmarty->assign('ListView', $ListView);
			return $ListView;

 }
 /**********************************************Delete Contact/*********************************************************************/
  function DeleteSalesEditDetails($CatIdent)
 {
 		 global $objSmarty,$config;
		 $tbl = $config['DBPrefix'];
		 $sales_id = base64_decode($_GET["sales_order_no"]);
		 $DelQuery = 'DELETE FROM `'.$tbl.'sales_master` WHERE `sales_order_no` ="'.$sales_id.'"';
		 $this->ExecuteQuery($DelQuery, 'delete');
		 $DelQuery = 'DELETE FROM `'.$tbl.'sales_details` WHERE `sales_order_no` ="'.$sales_id.'"';
		 $this->ExecuteQuery($DelQuery, 'delete');
			//print_r($CusIdent);
        header('Location:' .$_SERVER['PHP_SELF'].'?succs_msg_for_del');
			return true;


 }
 /**************************************Delete/*************************************************************/
 function DeleteOrder($CatIdent,$CusIdent)
	{
	global $objSmarty,$config;
   $tbl = $config['DBPrefix'];
   $sales_id = base64_decode($_GET["sales_order_no"]);
  $DelQuery2 = 'DELETE  FROM '.$tbl.'sales_followup WHERE sl_no = "'.$CatIdent.'" AND sales_order_no = "'.$sales_id.'"';
		$this->ExecuteQuery($DelQuery2, 'delete');
		$objSmarty->assign('SuccessMessage1', 'Deleted Successfully');
		 header('Location:' .$_SERVER['PHP_SELF'].'?sales_order_no='.$CusIdent.'&succs_msg_for_del');
		}
  /****************************************************Time Stamp Value As Date And Time Form Master/****************************************/

  function DateStamp()
 {global $objSmarty,$config;
$tbl = $config['DBPrefix'];
$sales_id = base64_decode($_GET["sales_order_no"]);
$SelQuery = 'SELECT Date(timestamp) as Date from '.$tbl.'sales_master WHERE sales_order_no="'.$sales_id.'"';
			 $Date_Stamp = $this->ExecuteQuery($SelQuery, "select");
			  //print $Date;
			 $objSmarty->assign('Date_Stamp', $Date_Stamp);
			 return $Date_Stamp;

}

  function TimeStamp()
  {global $objSmarty,$config;
$tbl = $config['DBPrefix'];
$sales_id = base64_decode($_GET["sales_order_no"]);
$SelQuery1 = 'SELECT  Time(timestamp) as Time from '.$tbl.'sales_master WHERE sales_order_no="'.$sales_id.'"';
			 $Time_Stamp = $this->ExecuteQuery($SelQuery1, "select");
			 $objSmarty->assign('Time_Stamp', $Time_Stamp);
			 return $Time_Stamp;


 }
function Created_date()
 {global $objSmarty,$config;
$tbl = $config['DBPrefix'];
$sales_id = base64_decode($_GET["sales_order_no"]);
$SelQuery = 'SELECT * From '.$tbl.'sales_master WHERE sales_order_no="'.$sales_id.'"';
			 $created_Date = $this->ExecuteQuery($SelQuery, "select");
			  //print $Date;
			 $objSmarty->assign('created_Date', $created_Date);
			 return $created_Date;

}
 /*************************************************View Edit Sales Order Quote***************************************************************/
function ViewEdit($objxArray='')
 {
					global $objSmarty,$config;
					$tbl = $config['DBPrefix'];
					$sales_id = base64_decode($_GET["sales_order_no"]);
					$SelQuery = 'SELECT * FROM `'.$tbl.'sales_master`, `'.$tbl.'sales_details` WHERE '.$tbl.'sales_master.sales_order_no='.$tbl.'sales_details.sales_order_no AND '.$tbl.'sales_master.sales_order_no="'.$sales_id.'"';
					$ListEdit = $this->ExecuteQuery($SelQuery, "select");
					$objSmarty->assign('ListEdit', $ListEdit);
					return $ListEdit;
 }

 /***********************************************Sales Print/*********************************************/
 function SalesPrint($objArray)
 {
 $sales_id = base64_decode($_GET["sales_order_no"]);
$enq_id = base64_decode($_GET["enquiry_id"]);
 		 global $objSmarty,$config;
			$tbl = $config['DBPrefix'];
	 $SelQuery4 = 'SELECT '.$tbl.'sales_details.* FROM `'.$tbl.'sales_details` WHERE '.$tbl.'sales_details.enquiry_id="'.$enq_id.'" AND '.$tbl.'sales_details.sales_order_no="'.$sales_id.'" AND '.$tbl.'sales_details.status="1"';
			$MailView = $this->ExecuteQuery($SelQuery4, "select");
			$objSmarty->assign('MailView', $MailView);
			return $MailView;

 }
 /**********************************************From Address/*************************************/
  function Enquiry($objArray="")
 {
			global $objSmarty,$config;
			$tbl = $config['DBPrefix'];
			$enq_id = base64_decode($_GET["enquiry_id"]);
			$SelQuery = 'SELECT * FROM `'.$tbl.'enquriy_master` WHERE enquiry_id="'.$enq_id.'" AND `status` = 1';
			$Enquiryt = $this->ExecuteQuery($SelQuery, 'select');
			$objSmarty->assign('Enquiryt', $Enquiryt);


		$SelQuery1 = 'SELECT * FROM `'.$tbl.'group_address` WHERE company_name = "'.$Enquiryt[0]['arka_group'].'" AND status="1"';
		$DelAddress = $this->ExecuteQuery($SelQuery1, 'select');
		$objSmarty->assign('DelAddress', $DelAddress);
		return $DelAddress;
 }
 function ToAddress()
 {
 $sales_id = base64_decode($_GET["sales_order_no"]);
 		 global $objSmarty,$config;
			$tbl = $config['DBPrefix'];
		//	$sales_id = base64_decode($_GET["sales_order_no"]);
			 $SelQuery1 = 'SELECT * FROM `'.$tbl.'sales_master` WHERE  sales_order_no ="'.$sales_id.'" AND status="1"';
			$AddressView = $this->ExecuteQuery($SelQuery1, "select");
			//print_r($AddressView);exit;
			$objSmarty->assign('AddressView', $AddressView);
			return $AddressView;

 }
  function ToAddress3()
 {
 $sales_id = base64_decode($_GET["sales_order_no"]);
 		 global $objSmarty,$config;
			$tbl = $config['DBPrefix'];
		//	$sales_id = base64_decode($_GET["sales_order_no"]);
		 $SelQuery1 = 'SELECT * FROM `'.$tbl.'sales_details` WHERE  sales_order_no ="'.$sales_id.'" AND status="1"';
			$AddressView3 = $this->ExecuteQuery($SelQuery1, "select");
			//print_r($AddressView);exit;
			$objSmarty->assign('AddressView3', $AddressView3);
			return $AddressView3;

 }

function add_Total()
{
 global $objSmarty,$config;
			$tbl = $config['DBPrefix'];
		$sales_id = base64_decode($_GET["sales_order_no"]);
  $SelQuery = 'SELECT sum(total) as Total from '.$tbl.'sales_details WHERE sales_order_no="'.$sales_id.'"';
 $AddView = $this->ExecuteQuery($SelQuery, "select");
			//print_r($AddressView);exit;
			$objSmarty->assign('AddView', $AddView);
			return $AddView;
}
function sub_Total()
{
 global $objSmarty,$config;
			$tbl = $config['DBPrefix'];
			$sales_id = base64_decode($_GET["sales_order_no"]);
  $SelQuery = 'SELECT sum(sub_total) as s_Total from '.$tbl.'sales_details WHERE sales_order_no="'.$sales_id.'"';
 $Adds = $this->ExecuteQuery($SelQuery, "select");
			//print_r($AddressView);exit;
			$objSmarty->assign('Adds', $Adds);
			return $Adds;
}
function tax_Total()
{
 global $objSmarty,$config;
			$tbl = $config['DBPrefix'];
			$sales_id = base64_decode($_GET["sales_order_no"]);
  $SelQuery = 'SELECT sum(vat_value) as tax from '.$tbl.'sales_details WHERE sales_order_no="'.$sales_id.'"';
 $Add_tax = $this->ExecuteQuery($SelQuery, "select");
			//print_r($AddressView);exit;
			$objSmarty->assign('Add_tax', $Add_tax);
			return $Add_tax;
}

/****************************Add Followup/***************************************************/
function ToAddress2()
 {
 //$sales_id = base64_decode($_GET["sales_order_no"]);
 		 global $objSmarty,$config;
			$tbl = $config['DBPrefix'];
			 $SelQuery1 = 'SELECT * FROM `'.$tbl.'sales_master` WHERE  sales_order_no ="'.$_GET['sales_order_no'].'" AND status="1"';
			$AddressView = $this->ExecuteQuery($SelQuery1, "select");
			$objSmarty->assign('AddressView', $AddressView);
			return $AddressView;
 }
 /****************************Get Tax No/***************************************************/
function GetNumbers()
 {
 		 global $objSmarty,$config;
			$tbl = $config['DBPrefix'];
			$sales_id = base64_decode($_GET["sales_order_no"]);
			 $SelQuery1 = 'SELECT * FROM `'.$tbl.'sales_master` WHERE  sales_order_no ="'.$sales_id.'" AND status="1"';
			$AddressView = $this->ExecuteQuery($SelQuery1, "select");

		 $SelQuery1 = 'SELECT * FROM `'.$tbl.'customer_master` WHERE  customer_id ="'.$AddressView[0]['customer_id'].'" AND status="1"';
			$AddressView2 = $this->ExecuteQuery($SelQuery1, "select");
			$objSmarty->assign('AddressView2', $AddressView2);
			return $AddressView2;
 }

 /****************************Bank Acc Details/***************************************************/
 function GetAccDetails($objArray="")
 {
			global $objSmarty,$config;
			$tbl = $config['DBPrefix'];
			$enq_id = base64_decode($_GET["enquiry_id"]);
			$SelQuery = 'SELECT * FROM `'.$tbl.'enquriy_master` WHERE enquiry_id="'.$enq_id.'" AND `status` = 1';
			$Enquiryt = $this->ExecuteQuery($SelQuery, 'select');
			$objSmarty->assign('Enquiryt', $Enquiryt);


		$SelQuery1 = 'SELECT * FROM `'.$tbl.'company_master` WHERE company_name = "'.$Enquiryt[0]['arka_group'].'" AND status="1"';
		$BankDetails = $this->ExecuteQuery($SelQuery1, 'select');
		$objSmarty->assign('BankDetails', $BankDetails);
		return $BankDetails;
 }
/****************************************Follow Up/*************************************/
function GetEnquiryType($objArray)
 {
 		 global $objSmarty,$config;
		 $tbl = $config['DBPrefix'];
		 $SelQuery = 'SELECT * FROM `'.$tbl.'enquriy_master` WHERE enquiry_id="'.$_GET['enquiry_id'].'"';
			$EnqTypView = $this->ExecuteQuery($SelQuery, "select");
			$objSmarty->assign('EnqTypView', $EnqTypView);
			//print_r($ListView);exit;
			return $EnqTypView;

 }
/***********************Insert FollowUp/***************************************/
 function InsertFollowUp($objArray="")
 {
global $objSmarty,$config,$_POST;
$tbl = $config['DBPrefix'];

if(!$objArray['sales_order_no']){
			$objSmarty->assign('ErrorMessage', 'Sales Order No should not be blank');
			return false;
			}elseif(!$objArray['sales_order_date']){
			$objSmarty->assign('ErrorMessage', 'Sales Order Date should not be blank');
			return false;
			}elseif(!$objArray['sales_quote_no']){
			$objSmarty->assign('ErrorMessage', 'Sales Quote No should not be blank');
			return false;
			}elseif(!$objArray['revised_no']){
			$objSmarty->assign('ErrorMessage', 'Revised No should not be blank');
			return false;
			}elseif(isset($objArray['order_status']))
			{

			if($objArray['order_status'] == "Closed With Payment")
				{
					   if(!$objArray['closed_date']){
						$objSmarty->assign('ErrorMessage', 'Closed Date should not be blank');
						return false;
					   }
					   elseif(!$objArray['snooze_date']){
						$objSmarty->assign('ErrorMessage', 'Snooze Date should not be blank');
						return false;
						}
			 		/*$ct = "NA";
					  $st = "NA";*/
			 }
			 else
			 {
					    if(!$objArray['snooze_date']){
						$objSmarty->assign('ErrorMessage', 'Snooze Date should not be blank');
						return false;
						}

			 }
			 }elseif(!$objArray['created_by']){
			$objSmarty->assign('ErrorMessage', 'Created By should not be blank');
			return false;
			}
			$objSmarty->assign('sales_order_no', $objArray['sales_order_no']);
			if($objArray['sales_order_no'] && $objArray['sales_order_no']){

$InsQuery = 'INSERT INTO `'.$tbl.'sales_followup`(`sales_order_no`,`sales_order_date`,`sales_quote_no`,`sales_quote_date`,`enquiry_id`,`customer_id`,`revised_no`,`order_status`,`po_no`,`po_date`,`snooze_date`,`closed_date`,`created_by`,`created_date`, `created_time`,`timestamp`, `remarks`,`status`) VALUES("'.trim(addslashes($objArray['sales_order_no'])).'","'.trim(addslashes($objArray['sales_order_date'])).'","'.trim(addslashes($objArray['sales_quote_no'])).'","'.trim(addslashes($objArray['sales_quote_date'])).'","'.trim(addslashes($objArray['enquiry_id'])).'","'.trim(addslashes($objArray['customer_id'])).'","'.trim(addslashes($objArray['revised_no'])).'","'.trim(addslashes($objArray['order_status'])).'","'.trim(addslashes($objArray['po_no'])).'","'.trim(addslashes($objArray['po_date'])).'","'.trim(addslashes($objArray['snooze_date'])).'","'.trim(addslashes($objArray['closed_date'])).'","'.trim(addslashes($objArray['created_by'])).'","'.trim(addslashes($objArray['created_date'])).'","'.trim(addslashes($objArray['created_time'])).'","'.trim(addslashes($objArray['timestamp'])).'","'.trim(addslashes($objArray['remarks'])).'","1")';
$this->ExecuteQuery($InsQuery, 'insert');

 $UpQuery3 = 'UPDATE `'.$tbl.'sales_master` SET `order_status`="'.trim(addslashes($objArray['order_status'])).'", `created_date`="'.trim(addslashes($objArray['created_date'])).'", `created_time`="'.trim(addslashes($objArray['created_time'])).'",`timestamp`="'.trim(addslashes($objArray['timestamp'])).'" WHERE `sales_order_no`="'.$_GET['sales_order_no'].'" AND `enquiry_id`="'.$_GET['enquiry_id'].'"';
$this->ExecuteQuery($UpQuery3, 'update');
}
header('Location:' .$_SERVER['PHP_SELF'].'?enquiry_id='.trim(addslashes($objArray['enquiry_id'])).'&sales_order_no='.trim(addslashes($objArray['sales_order_no'])).'&revised_no='.trim(addslashes($objArray['revised_no'])).'&succs_msg_for_insert');
return true;
}
// **********************      Insert Sales Invoice/ *****************************************  /////////////////
 function InsertSalesInvoice($objArray="")
 {
global $objSmarty,$config,$_POST;
$tbl = $config['DBPrefix'];

/*$revision = $_GET['revised_version'];
$Revise = ++$revision;*/

if(!$objArray['invoice_no']){
			$objSmarty->assign('ErrorMessage', 'Invoice No should not be blank');
			return false;
			}elseif(!$objArray['sales_order_no']){
			$objSmarty->assign('ErrorMessage', 'Sales Order Date should not be blank');
			return false;
			}elseif(!$objArray['invoice_amount']){
			$objSmarty->assign('ErrorMessage', 'Invoice Amount No should not be blank');
			return false;
			}elseif(!$objArray['invoice_date']){
			$objSmarty->assign('ErrorMessage', 'Invoice Date should not be blank');
			return false;
			}elseif(!$objArray['payment_status']){
			$objSmarty->assign('ErrorMessage', 'Payment Status should not be blank');
			return false;
			}
			$objSmarty->assign('sales_order_no', $objArray['sales_order_no']);

$InsQuery = 'INSERT INTO `'.$tbl.'sales_payment_master`(`invoice_no`,`sales_order_no`,`invoice_amount`,`invoice_date`,`payment_status`,`created_by`,`created_date`,`created_time`,`timestamp`,`status`) VALUES("'.trim(addslashes($objArray['invoice_no'])).'","'.trim(addslashes($objArray['sales_order_no'])).'","'.trim(addslashes($objArray['invoice_amount'])).'","'.trim(addslashes($objArray['invoice_date'])).'","'.trim(addslashes($objArray['payment_status'])).'","'.trim(addslashes($objArray['created_by'])).'","'.trim(addslashes($objArray['created_date'])).'","'.trim(addslashes($objArray['created_time'])).'","'.trim(addslashes($objArray['timestamp'])).'","1")';
$this->ExecuteQuery($InsQuery, 'insert');

 $UpQuery3 = 'UPDATE `'.$tbl.'sales_master` SET `invoice_no`="'.trim(addslashes($objArray['invoice_no'])).'",`invoice_date`="'.trim(addslashes($objArray['invoice_date'])).'" WHERE `sales_order_no`="'.$_GET['sales_order_no'].'" AND `enquiry_id`="'.$_GET['enquiry_id'].'"';
$this->ExecuteQuery($UpQuery3, 'update');

header('Location:' .$_SERVER['PHP_SELF'].'?enquiry_id='.trim(addslashes($objArray['enquiry_id'])).'&sales_order_no='.trim(addslashes($objArray['sales_order_no'])).'&succs_msg_for_insert');
return true;
}

// **********************      Insert Sales Make Payment/ *****************************************  /////////////////
 function InsertSalesMakepayment($objArray="")
 {
global $objSmarty,$config,$_POST;
$tbl = $config['DBPrefix'];

/*$revision = $_GET['revised_version'];
$Revise = ++$revision;*/

if(!$objArray['invoice_no']){
			$objSmarty->assign('ErrorMessage', 'Invoice No should not be blank');
			return false;
			}elseif(!$objArray['invoice_amount']){
			$objSmarty->assign('ErrorMessage', 'Invoice Amount should not be blank');
			return false;
			}elseif(!$objArray['paid_amount']){
			$objSmarty->assign('ErrorMessage', 'Paid Amount should not be blank');
			return false;
			}elseif(!$objArray['payment_status']){
			$objSmarty->assign('ErrorMessage', 'Payment Status should not be blank');
			return false;
			}elseif(!$objArray['payment_mode']){
			$objSmarty->assign('ErrorMessage', 'Payment Mode should not be blank');
			return false;
			}
			$objSmarty->assign('sales_order_no', $objArray['sales_order_no']);

 $InsQuery = 'INSERT INTO `'.$tbl.'sales_payment_details`(`invoice_no`,`sales_order_no`,`invoice_amount`,`pending_amount`,`paid_amount`,`payment_status`,`payment_mode`,`payment_ref`,`created_by`,`created_date`,`created_time`,`timestamp`,`status`) VALUES("'.trim(addslashes($objArray['invoice_no'])).'","'.trim(addslashes($objArray['sales_order_no'])).'","'.trim(addslashes($objArray['invoice_amount'])).'","'.trim(addslashes($objArray['pending_amount'])).'","'.trim(addslashes($objArray['paid_amount'])).'","'.trim(addslashes($objArray['payment_status'])).'","'.trim(addslashes($objArray['payment_mode'])).'","'.trim(addslashes($objArray['payment_ref'])).'","'.trim(addslashes($objArray['created_by'])).'","'.trim(addslashes($objArray['created_date'])).'","'.trim(addslashes($objArray['created_time'])).'","'.trim(addslashes($objArray['timestamp'])).'","1")';
$this->ExecuteQuery($InsQuery, 'insert');

 $SelQuery = 'SELECT * FROM `'.$tbl.'sales_payment_master` WHERE status = "1" AND sales_order_no="'.trim(addslashes($objArray['sales_order_no'])).'" AND invoice_no="'.trim(addslashes($objArray['invoice_no'])).'"';
$ViewContact = $this->ExecuteQuery($SelQuery, "select");
$objSmarty->assign('ViewContact', $ViewContact);

$PaidAmount=$ViewContact[0]['paid_amount'];
$paidamount=trim(addslashes($objArray['paid_amount']));
$PAID= $PaidAmount + $paidamount;

if($ViewContact[0]['sales_order_no']==$objArray['sales_order_no'])
{

$UpQuery3 = 'UPDATE `'.$tbl.'sales_payment_master` SET `invoice_no`="'.trim(addslashes($objArray['invoice_no'])).'",`pending_amount`="'.trim(addslashes($objArray['pending_amount'])).'",`sales_order_no`="'.trim(addslashes($objArray['sales_order_no'])).'", `paid_amount`="'.$PAID.'", `payment_status`="'.trim(addslashes($objArray['payment_status'])).'",`created_by`="'.trim(addslashes($objArray['created_by'])).'",`created_date`="'.trim(addslashes($objArray['created_date'])).'",`created_time`="'.trim(addslashes($objArray['created_time'])).'",`timestamp`="'.trim(addslashes($objArray['timestamp'])).'" WHERE  `sales_order_no`="'.trim(addslashes($objArray['sales_order_no'])).'" AND `invoice_no`="'.trim(addslashes($objArray['invoice_no'])).'" ';
$this->ExecuteQuery($UpQuery3, 'update');
}
else{
 $InsQuery1 = 'INSERT INTO `'.$tbl.'sales_payment_master`(`sales_order_no`,`invoice_no`,`invoice_amount`,`pending_amount`,`paid_amount`,`payment_status`,`created_by`,`created_date`,`created_time`,`timestamp`,`status`) VALUES("'.trim(addslashes($objArray['sales_order_no'])).'","'.trim(addslashes($objArray['invoice_no'])).'","'.trim(addslashes($objArray['invoice_amount'])).'","'.trim(addslashes($objArray['pending_amount'])).'","'.trim(addslashes($objArray['paid_amount'])).'","'.trim(addslashes($objArray['payment_status'])).'","'.trim(addslashes($objArray['created_by'])).'","'.trim(addslashes($objArray['created_date'])).'","'.trim(addslashes($objArray['created_time'])).'","'.trim(addslashes($objArray['timestamp'])).'","1")';
$this->ExecuteQuery($InsQuery1, 'insert');

}

header('Location:' .$_SERVER['PHP_SELF'].'?enquiry_id='.trim(addslashes($objArray['enquiry_id'])).'&sales_order_no='.trim(addslashes($objArray['sales_order_no'])).'&succs_msg_for_insert');
return true;
}
/*********************************************Ajax Invoice Details/********************************************/
function AjaxGetInvoiceDetails($objArray="")
 {
global $objSmarty,$config;
$tbl = $config['DBPrefix'];

		$SelQuery = 'SELECT * FROM '.$tbl.'sales_payment_master WHERE invoice_no ="'.$_GET['invoice_no'].'"' ;
		 $LDList		= $this->ExecuteQuery($SelQuery, "select");

		echo "|CUSID|".$LDList[0]['invoice_amount'];
		echo "|CUSID|".$LDList[0]['pending_amount'];
		echo "|CUSID|".$LDList[0]['paid_amount'];

}
/*********************Payment Invoice/************************************************/
  function ViewPaymentInvoice($objArray="")
 {

 		 global $objSmarty,$config;
			$tbl = $config['DBPrefix'];
 $service_id = base64_decode($_GET["sales_order_no"]);
			//print($sales_id);

			$SelQuery1 = 'SELECT *  FROM `'.$tbl.'sales_payment_master` WHERE `sales_order_no` ="'.$_GET["sales_order_no"].'" AND status="1"';
			$invoice1 = $this->ExecuteQuery($SelQuery1, "select");
			$objSmarty->assign('invoice1', $invoice1);

			$SelQuery1 = 'SELECT * FROM `'.$tbl.'sales_payment_details` WHERE `sales_order_no` ="'.$_GET['sales_order_no'].'" AND status="1"';
			$payment = $this->ExecuteQuery($SelQuery1, "select");
			$objSmarty->assign('payment', $payment);
return $invoice1;
}
//**************************************************   Get a value for pending Amount/************************************////
function GetSalesPayment($objArray="")
{

	global $objSmarty,$config,$_POST;

	$tbl = $config['DBPrefix'];
		if($_POST['pending_amount'] > "0")
				{
					$objSmarty->assign('pending_amount', '0');
				}
		if($_POST['pending_amount'] > "0")
				{
				//echo "hiii";

			 $SelQuery = 'SELECT * FROM `'.$tbl.'sales_payment_details` WHERE sales_order_no="'.$_GET['sales_order_no'].'" AND pending_amount > 0 ';
			$salespayView = $this->ExecuteQuery($SelQuery, "select");

			}
		$objSmarty->assign('salespayView', $salespayView);

}
// **********************      Insert Sales Order Mail/ *****************************************  /////////////////
 function InsertSalesOrderMail($objArray, $objFiles){
 {
global $objSmarty,$config,$_POST;
$tbl = $config['DBPrefix'];
	list ($name,$format) = split("[.]", $objFiles['attachment1']['name'],2);
	list ($name,$format) = split("[.]", $objFiles['attachment2']['name'],2);
	list ($name,$format) = split("[.]", $objFiles['attachment3']['name'],2);

		$uploadpath = $config['MailImagePath'];
		if($objFiles['attachment1']["name"] <> "")
		{
			    $errors     = array();
   				$maxsize    = 5242880;
   				$acceptable = array(
				'image/jpeg','image/jpg','image/gif','image/png','application/pdf','text/plain','application/msword','application/vnd.openxmlformats-officedocument.presentationml.presentation','application/vnd.openxmlformats-officedocument.wordprocessingml.document',
				'application/x-zip-compressed','application/vnd.ms-excel','application/vnd.ms-powerpoint','video/pps','application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		if(($_FILES['attachment1']['size'] >= $maxsize) || ($_FILES["attachment1"]["size"] == 0)) {
		$errors[] = 'File --1-- too large. File must be less than 2 megabytes';
		}

		if((!in_array($_FILES['attachment1']['type'], $acceptable)) && (!empty($_FILES["attachment1"]["type"])))
		 {
		$errors1[] = 'File --1-- Only PDF, JPG, JPEG, TXT, DOC, DOCX, XLS, XLSX, ZIP, PPT, PPTX, GIF and PNG types are accepted';
		}

		if(count($errors)  === 0 && count($errors1)  === 0)
		{
			if((!file_exists($config['MailImagePath'] . $_FILES["attachment1"]["name"])))
			{
				$f1 = $objFiles['attachment1']['name'];
				if(move_uploaded_file($objFiles['attachment1']['tmp_name'], $uploadpath.$f1))
				chmod($uploadpath.$f1,"777");
			}
			elseif((file_exists($config['MailImagePath'] . $_FILES["attachment1"]["name"])))
			{
				$f1 = explode(".", $_FILES['attachment1']['name']);
				$random_digit=rand(0000,9999);
				$newfilename = $random_digit.'.'.end($f1);
				if(move_uploaded_file($objFiles['attachment1']['tmp_name'], $uploadpath.$newfilename))
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
		if($objFiles['attachment2']["name"] <> "")
		{
			    $errors     = array();
   				$maxsize    = 5242880;
   				$acceptable = array(
				'image/jpeg','image/jpg','image/gif','image/png','application/pdf','text/plain','application/msword','application/vnd.openxmlformats-officedocument.presentationml.presentation','application/vnd.openxmlformats-officedocument.wordprocessingml.document',
				'application/x-zip-compressed','application/vnd.ms-excel','application/vnd.ms-powerpoint','video/pps','application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		if(($_FILES['attachment2']['size'] >= $maxsize) || ($_FILES["attachment2"]["size"] == 0)) {
		$errors2[] = 'File --2-- too large. File must be less than 5 MB';
		}

		if((!in_array($_FILES['attachment2']['type'], $acceptable)) && (!empty($_FILES["attachment2"]["type"])))
		 {echo"format";
		$errors3[] = 'File --2-- Only PDF, JPG, JPEG, TXT, DOC, DOCX, XLS, XLSX, ZIP, PPT, PPTX, GIF and PNG types are accepted';
		}

		if(count($errors2)  === 0 && count($errors3)  === 0)
		{
	if((!file_exists($config['MailImagePath'] . $_FILES["attachment2"]["name"])))
			{
				$f2 = $objFiles['attachment2']['name'];
				if(move_uploaded_file($objFiles['attachment2']['tmp_name'], $uploadpath.$f2))
				chmod($uploadpath.$f2,"755");
			}
			elseif((file_exists($config['MailImagePath'] . $_FILES["attachment2"]["name"])))
			{
				$f2 = explode(".", $_FILES['attachment2']['name']);
				$random_digit=rand(0000,9999);
				$newfilename = $random_digit.'.'.end($f2);
				if(move_uploaded_file($objFiles['attachment2']['tmp_name'], $uploadpath.$newfilename))
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

			if($objFiles['attachment3']["name"] <> "")
		{
			    $errors     = array();
   				$maxsize    = 5242880;
   				$acceptable = array(
				'image/jpeg','image/jpg','image/gif','image/png','application/pdf','text/plain','application/msword','application/vnd.openxmlformats-officedocument.presentationml.presentation','application/vnd.openxmlformats-officedocument.wordprocessingml.document',
				'application/x-zip-compressed','application/vnd.ms-excel','application/vnd.ms-powerpoint','video/pps','application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		if(($_FILES['attachment3']['size'] >= $maxsize) || ($_FILES["attachment3"]["size"] == 0)) {
		$errors4[] = 'File --3-- too large. File must be less than 5 MB';
		}

		if((!in_array($_FILES['attachment3']['type'], $acceptable)) && (!empty($_FILES["attachment3"]["type"])))
		 {
		$errors5[] = 'File --3-- Only PDF, JPG, JPEG, TXT, DOC, DOCX, XLS, XLSX, ZIP, PPT, PPTX, GIF and PNG types are accepted';
		}

		if(count($errors4)  === 0 && count($errors5)  === 0)
		{

			if((!file_exists($config['MailImagePath'] . $_FILES["attachment3"]["name"])))
			{
				$f3 = $objFiles['attachment3']['name'];
				if(move_uploaded_file($objFiles['attachment3']['tmp_name'], $uploadpath.$f3))
				chmod($uploadpath.$f3,"777");
			}
			elseif((file_exists($config['MailImagePath'] . $_FILES["attachment3"]["name"])))
			{
				$f3 = explode(".", $_FILES['attachment3']['name']);
				$random_digit=rand(0000,9999);
				$newfilename = $random_digit.'.'.end($f3);
				if(move_uploaded_file($objFiles['attachment3']['tmp_name'], $uploadpath.$newfilename))
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

 			if(!$objArray['email_id1']){
			$objSmarty->assign('ErrorMessage', 'Mail To should not be blank');
			return false;
			}elseif(!$objArray['cc']){
			$objSmarty->assign('ErrorMessage', 'CC should not be blank');
			return false;
			}elseif(!$objArray['subject']){
			$objSmarty->assign('ErrorMessage', 'Subject should not be blank');
			return false;			}
			$objSmarty->assign('email_id1', $objArray['email_id1']);

$InsQuery = 'INSERT INTO `'.$tbl.'sales_order_mail`(`enquiry_id`,`sales_order_no`,`mail_from`,`mail_to`,`mail_cc`,`mail_subject`,`message`,`mail_attachment1`,`mail_attachment2`,`mail_attachment3`,`created_by`,`created_date`,`created_time`,`timestamp`,`status`) VALUES("'.trim(addslashes($objArray['enquiry_id'])).'","'.trim(addslashes($objArray['sales_order_no'])).'","'.trim(addslashes($objArray['mail_from'])).'","'.trim(addslashes($objArray['email_id1'])).'","'.trim(addslashes($objArray['cc'])).'","'.trim(addslashes($objArray['subject'])).'","'.trim(addslashes($objArray['message'])).'","'.$f1.'","'.$f2.'","'.$f3.'","'.trim(addslashes($objArray['created_by'])).'","'.trim(addslashes($objArray['created_date'])).'","'.trim(addslashes($objArray['created_time'])).'","'.trim(addslashes($objArray['timestamp'])).'","1")';
$this->ExecuteQuery($InsQuery, 'insert');

		$SelQuery = 'SELECT * From '.$tbl.'user_master WHERE username="'.trim(addslashes($objArray['created_by'])).'"';
		$UserMas = $this->ExecuteQuery($SelQuery, "select");
		$objSmarty->assign('UserMas', $UserMas);
	/************************************Query for Customer Name************************************/
		$SelQuery1 = 'SELECT * From '.$tbl.'sales_master WHERE sales_order_no="'.$_GET['sales_order_no'].'"';
		$SalMas = $this->ExecuteQuery($SelQuery1, "select");
		$objSmarty->assign('SalMas', $SalMas);
	/*********************************************************************************************/
/*		$SelQuery2 = 'SELECT * From '.$tbl.'sales_order_mail WHERE sales_order_no="'.$_GET['sales_order_no'].'"';
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
		$ccarr = $ccMail;
		$Subject =' Welcome to '.$config['SiteTitle'] .','.$SalMas[0]['customer_name'].$_POST['subject'] ;
		Send($To, $Message, $From, $Subject,$ccarr);
		header('Location:' .$_SERVER['PHP_SELF'].'?succs_msg'."&"."revised_version=".$_GET['revised_version']."&"."sales_order_no=".$_GET['sales_order_no']."&"."sales_quote_no=".$_GET['sales_quote_no']);


}
}
/***************************************FollowUp List/**********************************************************/
function followup_list()
{
 global $objSmarty,$config;
			$tbl = $config['DBPrefix'];
			$sales_id = base64_decode($_GET["sales_order_no"]);
  $SelQuery = 'SELECT * from '.$tbl.'sales_followup WHERE sales_order_no="'.$sales_id.'"';
 $follow = $this->ExecuteQuery($SelQuery, "select");
			//print_r($AddressView);exit;
			$objSmarty->assign('follow', $follow);
			return $follow;
}
/***********************************List Invoice & Payment/***************************************************/
function invoice_list()
{
 global $objSmarty,$config;
 			$tbl = $config['DBPrefix'];
			$sales_id = base64_decode($_GET["sales_order_no"]);
  $SelQuery = 'SELECT * From '.$tbl.'sales_payment_master WHERE sales_order_no="'.$sales_id.'"';
 $invoice = $this->ExecuteQuery($SelQuery, "select");
			//print_r($AddressView);exit;
			$objSmarty->assign('invoice', $invoice);
			return $invoice;
}
function payment_list()
{
 global $objSmarty,$config;
 $tbl = $config['DBPrefix'];
			$sales_id = base64_decode($_GET["sales_order_no"]);

			$SelQuery1 = 'SELECT '.$tbl.'sales_payment_details.*,'.$tbl.'sales_payment_master.invoice_date FROM `'.$tbl.'sales_payment_details` , `'.$tbl.'sales_payment_master` WHERE '.$tbl.'sales_payment_master.invoice_no = '.$tbl.'sales_payment_details.invoice_no AND '.$tbl.'sales_payment_master.sales_order_no ="'.$sales_id.'" AND '.$tbl.'sales_payment_master.status="1" GROUP BY  '.$tbl.'sales_payment_details.sl_no';
			 $payment = $this->ExecuteQuery($SelQuery1, "select");
			//print_r($AddressView);exit;
			$objSmarty->assign('payment', $payment);
			return $payment;
}
/************************************************************************Mail/*******************************************/
function mail_list()
{
 global $objSmarty,$config;
			$tbl = $config['DBPrefix'];
  $SelQuery = 'SELECT * from '.$tbl.'sales_master WHERE sales_quote_no="'.$_GET['sales_quote_no'].'"';
 $mailview = $this->ExecuteQuery($SelQuery, "select");
			$objSmarty->assign('mailview', $mailview);
			return $mailview;
}
}
?>
