<?php

#####Class For Adding Content Management ######
class ServiceOrder extends MysqlFns{

 /* class constructor */
 function ServiceOrder(){
 $this->LDDisplayPath= $config['SiteGlobalPath']."class.ServiceOrder.php";
	global $config;global $objSmarty,$config;
	$tbl = $config['DBPrefix'];
	$this->MysqlFns();
	$this->Limit = 20;
	$service_id = base64_decode($_GET["service_order_no"]);
	$service_quot = base64_decode($_GET["service_quote_no"]);

   /**************************************Sales Quote No Auto Increment*********************************************************/

			$SelQuerys1	= 'SELECT max(service_order_no) as last FROM `'.$tbl.'service_master` Limit 0,1';
			$SaleDetail	= $this->ExecuteQuery($SelQuerys1, 'select');

			  if($ServiceDetail[0]['last']!="")
			{
			$ServiceDetail[0]['service_order_no'] = stripslashes($ServiceDetail[0]['last']);
			$service_order_no1 = preg_replace("/[^0-9\.]/", '', $ServiceDetail[0]['service_order_no']);
			$service_order_no1= $service_order_no1 + 1;
			$str = str_split($ServiceDetail[0]['last'], 3);
			$service_order_no = $str[0]. "" .$service_order_no1;
			}
			else
			{
			$service_order_no = "SRO1001";
			}
			$objSmarty->assign('service_order_no', $service_order_no);
			/*************************************Invoice Number Auto Increment*************************************************************************/
			$SelQuerys	= 'SELECT max(invoice_no) as last FROM `'.$tbl.'service_payment_master` Limit 0,1';
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

	/*************************************Sale Revised Version************************************************************************************/
			$SelQuerys1	= 'SELECT max(service_revised) as last FROM `'.$tbl.'service_master_details` WHERE service_order_no="'.$_GET["service_order_no"].'" Limit 0,1';
			$SaleDetail	= $this->ExecuteQuery($SelQuerys1, 'select');
			$SaleDetail[0]['service_order_no'] = stripslashes($SaleDetail[0]['last']);
			$r_version1 = preg_replace("/[^0-9\.]/", '', $SaleDetail[0]['service_order_no']);
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
  /********************************************Validation for Static Pages****************************************************************/
 function ChkDupliSale($service_order_no, $Ident=''){
global $objSmarty,$config,$_POST;
$tbl = $config['DBPrefix'];
		$SelQuery	= 'SELECT * FROM `'.$tbl.'service_master` WHERE `service_order_no` = "'.$service_order_no.'" Limit 0,1';
		$serviceDetail = $this->ExecuteQuery($SelQuery, 'select');

		if(!empty($serviceDetail) && is_array($serviceDetail))
		   return false;
		else
		  return true;
 }

/*************************************************View Sales Quote/***************************************************************/
function ViewServiceOrderQuote($objArray="")
 {
 $service_id = base64_decode($_GET["service_order_no"]);
global $objSmarty,$config;
$tbl = $config['DBPrefix'];
$SelQuery = 'SELECT * FROM `'.$tbl.'service_master`,`'.$tbl.'service_master_details` WHERE '.$tbl.'service_master.service_order_no='.$tbl.'service_master_details.service_order_no AND '.$tbl.'service_master.service_order_no="'.$service_id.'"';
			$ListDetail1 = $this->ExecuteQuery($SelQuery, "select");
			$objSmarty->assign('ListDetail1', $ListDetail1);
			return $ListDetail1;

 }
 /*******************************************View ServiceOrder Quote/*********************************************************************/
  function ViewServiceOrderQuote2($objArray="")
 {
 $service_id = base64_decode($_GET["service_order_no"]);
global $objSmarty,$config;
$tbl = $config['DBPrefix'];
 $SelQuery = 'SELECT * FROM `'.$tbl.'service_master_details` WHERE service_order_no="'.$service_id.'"';
			$ListDetail2 = $this->ExecuteQuery($SelQuery, "select");
			$objSmarty->assign('ListDetail2', $ListDetail2);
			return $ListDetail2;

 }

 /*********************************Payment/*************************************************/
 function ViewPaymentInvoice($objArray="")
 {

 		 global $objSmarty,$config;
			$tbl = $config['DBPrefix'];
 $service_id = base64_decode($_GET["service_order_no"]);
			//print($sales_id);

			$SelQuery1 = 'SELECT *  FROM `'.$tbl.'service_payment_master` WHERE `service_order_no` ="'.$_GET["service_order_no"].'" AND status="1"';
			$invoice1 = $this->ExecuteQuery($SelQuery1, "select");
			$objSmarty->assign('invoice1', $invoice1);

					$SelQuery1 = 'SELECT * FROM `'.$tbl.'service_payment_details` WHERE `service_order_no` ="'.$_GET['service_order_no'].'" AND status="1"';
			$payment = $this->ExecuteQuery($SelQuery1, "select");
			$objSmarty->assign('payment', $payment);
return $invoice1;
}
/***********************Service/*********************************************************/
 function ViewServiceInvoiceQuote($objArray="")
 {
 $service_id = base64_decode($_GET["service_order_no"]);
global $objSmarty,$config;
$tbl = $config['DBPrefix'];
//$SelQuery = 'SELECT * FROM `'.$tbl.'service_payment_master`,`'.$tbl.'service_payment_details` WHERE service_order_no="'.$service_id.'" AND '.tbl.'service_payment_master.$invoice_no="'.$tbl.'service_payment_details.$invoice_no."';

$SelQuery = 'SELECT  * FROM `'.$tbl.'service_payment_master` WHERE '.$tbl.'service_payment_master.service_order_no="'.$service_id.'"';


			$InDetail = $this->ExecuteQuery($SelQuery, "select");
			$objSmarty->assign('InDetail', $InDetail);
			return $InDetail;
 }
 /**********************************Payment/***********************************************/
function ViewPayment($objArray="")
 {
 		 global $objSmarty,$config;
			$tbl = $config['DBPrefix'];
		    $sales_id = base64_decode($_GET["service_order_no"]);
			//print($sales_id);
		$SelQuery1 = 'SELECT '.$tbl.'service_payment_details.*,'.$tbl.'service_payment_master.invoice_date FROM `'.$tbl.'service_payment_details`,`'.$tbl.'service_payment_master` WHERE  '.$tbl.'service_payment_details.invoice_no = '.$tbl.'service_payment_master.invoice_no AND '.$tbl.'service_payment_master.service_order_no = "'.$sales_id.'" AND '.$tbl.'service_payment_master.status="1" GROUP BY  '.$tbl.'service_payment_details.sl_no';
			$payment = $this->ExecuteQuery($SelQuery1, "select");
			$objSmarty->assign('payment', $payment);
			return $payment;
 }
 /************************************Service Order/********************************************************/
 function ViewServiceOrderQuote1($objArray="")
 {
  $service_id = base64_decode($_GET["service_order_no"]);
global $objSmarty,$config;
$tbl = $config['DBPrefix'];
		$SelQuery	= 'SELECT * FROM `'.$tbl.'service_master` WHERE '.$tbl.'service_master.service_order_no="'.$service_id.'" Limit 0,1';
			$ListDetail = $this->ExecuteQuery($SelQuery, "select");
			$objSmarty->assign('ListDetail', $ListDetail);
			return $ListDetail;

 }

 /*************************************************List Sales Quote/***************************************************************/

 function ListServiceOrder()
 {
global $objSmarty,$config;
$tbl = $config['DBPrefix'];
$SelQuery = 'SELECT * FROM '.$tbl.'service_master WHERE status="1" ORDER BY service_order_no DESC';
			$ListView = $this->ExecuteQuery($SelQuery, "select");
			$objSmarty->assign('ListView', $ListView);
			return $ListView;

 }
 /**********************************************Delete Contact/*********************************************************************/
  function DeleteServiceEditDetails($CatIdent)
 { $service_id = base64_decode($_GET["service_order_no"]);
 		 global $objSmarty,$config;
		 $tbl = $config['DBPrefix'];
			 $DelQuery = 'DELETE FROM `'.$tbl.'service_master` WHERE `service_order_no` ="'.$service_id.'"';
			$this->ExecuteQuery($DelQuery, 'delete');

			 $DelQuery = 'DELETE FROM `'.$tbl.'service_master_details` WHERE `service_order_no` ="'.$service_id.'"';
			$this->ExecuteQuery($DelQuery, 'delete');
			//print_r($CusIdent);
        header('Location:' .$_SERVER['PHP_SELF'].'?succs_msg_for_del');
			return true;

 }

  /****************************************************Time Stamp Value As Date And Time Form Master/****************************************/

  function DateStamp()
 {global $objSmarty,$config;
$tbl = $config['DBPrefix'];
$service_id = base64_decode($_GET["service_order_no"]);
$SelQuery = 'SELECT Date(timestamp) as Date from '.$tbl.'service_master WHERE service_order_no="'.$service_id.'"';
			 $Date_Stamp = $this->ExecuteQuery($SelQuery, "select");
			  //print $Date;
			 $objSmarty->assign('Date_Stamp', $Date_Stamp);
			 return $Date_Stamp;

}

  function TimeStamp()
  {global $objSmarty,$config;
$tbl = $config['DBPrefix'];
$service_id = base64_decode($_GET["service_order_no"]);
$SelQuery1 = 'SELECT  Time(timestamp) as Time from '.$tbl.'service_master WHERE service_order_no="'.$service_id.'"';
			 $Time_Stamp = $this->ExecuteQuery($SelQuery1, "select");
			 $objSmarty->assign('Time_Stamp', $Time_Stamp);
			 return $Time_Stamp;


 }
function Created_date()
 {global $objSmarty,$config;
$tbl = $config['DBPrefix'];
 $service_id = base64_decode($_GET["service_order_no"]);
 $SelQuery = 'SELECT * From '.$tbl.'service_master WHERE service_order_no="'.$service_id.'"';
			 $created_Date = $this->ExecuteQuery($SelQuery, "select");
			  //print $Date;
			 $objSmarty->assign('created_Date', $created_Date);
			 return $created_Date;

}
// **********************      Insert Service Make Payment/ *****************************************  /////////////////
 function InsertServiceMakepayment($objArray="")
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
			$objSmarty->assign('service_order_no', $objArray['service_order_no']);

 $InsQuery = 'INSERT INTO `'.$tbl.'service_payment_details`(`service_order_no`,`invoice_no`,`invoice_amount`,`pending_amount`,`paid_amount`,`payment_status`,`payment_mode`,`payment_ref`,`created_by`,`created_date`,`created_time`,`timestamp`,`status`) VALUES("'.trim(addslashes($objArray['service_order_no'])).'","'.trim(addslashes($objArray['invoice_no'])).'","'.trim(addslashes($objArray['invoice_amount'])).'","'.trim(addslashes($objArray['pending_amount'])).'","'.trim(addslashes($objArray['paid_amount'])).'","'.trim(addslashes($objArray['payment_status'])).'","'.trim(addslashes($objArray['payment_mode'])).'","'.trim(addslashes($objArray['payment_ref'])).'","'.trim(addslashes($objArray['created_by'])).'","'.trim(addslashes($objArray['created_date'])).'","'.trim(addslashes($objArray['created_time'])).'","'.trim(addslashes($objArray['timestamp'])).'","1")';
$this->ExecuteQuery($InsQuery, 'insert');

$SelQuery = 'SELECT * FROM `'.$tbl.'service_payment_master` WHERE status = "1" AND service_order_no="'.trim(addslashes($objArray['service_order_no'])).'" AND invoice_no="'.trim(addslashes($objArray['invoice_no'])).'"';
$ViewContact = $this->ExecuteQuery($SelQuery, "select");

$PaidAmount=$ViewContact[0]['paid_amount'];
$paidamount=trim(addslashes($objArray['paid_amount']));
$PAID= $PaidAmount + $paidamount;

if($ViewContact[0]['service_order_no']==$objArray['service_order_no'])
{
$UpQuery3 = 'UPDATE `'.$tbl.'service_payment_master` SET  `invoice_no`="'.trim(addslashes($objArray['invoice_no'])).'",`service_order_no`="'.trim(addslashes($objArray['service_order_no'])).'",`invoice_amount`="'.trim(addslashes($objArray['invoice_amount'])).'",`pending_amount`="'.trim(addslashes($objArray['pending_amount'])).'", `paid_amount`="'.$PAID.'", `payment_status`="'.trim(addslashes($objArray['payment_status'])).'",`created_by`="'.trim(addslashes($objArray['created_by'])).'",`created_date`="'.trim(addslashes($objArray['created_date'])).'",`created_time`="'.trim(addslashes($objArray['created_time'])).'",`timestamp`="'.trim(addslashes($objArray['timestamp'])).'" WHERE `service_order_no`="'.trim(addslashes($objArray['service_order_no'])).'" AND `invoice_no`="'.trim(addslashes($objArray['invoice_no'])).'"';
$this->ExecuteQuery($UpQuery3, 'update');
}
else
{
$InsQuery1 = 'INSERT INTO `'.$tbl.'service_payment_master`(`service_order_no`,`invoice_no`,`invoice_amount`,`pending_amount`,`paid_amount`,`payment_status`,`created_by`,`created_date`,`created_time`,`timestamp`,`status`) VALUES("'.trim(addslashes($objArray['service_order_no'])).'","'.trim(addslashes($objArray['invoice_no'])).'","'.trim(addslashes($objArray['invoice_amount'])).'","'.trim(addslashes($objArray['pending_amount'])).'","'.trim(addslashes($objArray['payment_status'])).'","'.trim(addslashes($objArray['payment_status'])).'","'.trim(addslashes($objArray['created_by'])).'","'.trim(addslashes($objArray['created_date'])).'","'.trim(addslashes($objArray['created_time'])).'","'.trim(addslashes($objArray['timestamp'])).'","1")';
$this->ExecuteQuery($InsQuery1, 'insert');
}
header('Location:' .$_SERVER['PHP_SELF'].'?enquiry_id='.trim(addslashes($objArray['enquiry_id'])).'&service_order_no='.trim(addslashes($objArray['service_order_no'])).'&succs_msg_for_insert');
return true;
}
/*********************************************Ajax Invoice Details/********************************************/
function AjaxGetInvoiceDetails($objArray="")
 {
global $objSmarty,$config;
$tbl = $config['DBPrefix'];

		$SelQuery = 'SELECT * FROM '.$tbl.'service_payment_master WHERE invoice_no ="'.$_GET['invoice_no'].'"' ;
		 $LDList		= $this->ExecuteQuery($SelQuery, "select");

		echo "|CUSID|".$LDList[0]['invoice_amount'];
		echo "|CUSID|".$LDList[0]['pending_amount'];
		echo "|CUSID|".$LDList[0]['paid_amount'];

}



 /*************************************Enquiry/**********************************************************/
 function GetEnquiryType($objArray)
 {
 		 global $objSmarty,$config;
		 $tbl = $config['DBPrefix'];
		 $enq_id = base64_decode($_GET["enquiry_id"]);
		 $SelQuery = 'SELECT * FROM `'.$tbl.'enquriy_master` WHERE enquiry_id="'.$enq_id.'"';
			$EnqTypView = $this->ExecuteQuery($SelQuery, "select");
			$objSmarty->assign('EnqTypView', $EnqTypView);
			//print_r($ListView);exit;
			return $EnqTypView;

 }

 // **********************      Insert Service Invoice/ *****************************************  /////////////////
 function InsertServiceInvoice($objArray="")
 {
global $objSmarty,$config,$_POST;
$tbl = $config['DBPrefix'];

/*$revision = $_GET['revised_version'];
$Revise = ++$revision;*/

if(!$objArray['invoice_no']){
			$objSmarty->assign('ErrorMessage', 'Invoice No should not be blank');
			return false;
			}elseif(!$objArray['service_order_no']){
			$objSmarty->assign('ErrorMessage', 'Service Order Number should not be blank');
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
			$objSmarty->assign('invoice_no', $objArray['invoice_no']);

$InsQuery = 'INSERT INTO `'.$tbl.'service_payment_master`(`invoice_no`,`service_order_no`,`invoice_amount`,`invoice_date`,`payment_status`,`created_by`,`created_date`,`created_time`,`timestamp`,`status`) VALUES("'.trim(addslashes($objArray['invoice_no'])).'","'.trim(addslashes($objArray['service_order_no'])).'","'.trim(addslashes($objArray['invoice_amount'])).'","'.trim(addslashes($objArray['invoice_date'])).'","'.trim(addslashes($objArray['payment_status'])).'","'.trim(addslashes($objArray['created_by'])).'","'.trim(addslashes($objArray['created_date'])).'","'.trim(addslashes($objArray['created_time'])).'","'.trim(addslashes($objArray['timestamp'])).'","1")';
$this->ExecuteQuery($InsQuery, 'insert');

$UpQuery3 = 'UPDATE `'.$tbl.'service_master` SET `invoice_no`="'.trim(addslashes($objArray['invoice_no'])).'",`invoice_date`="'.trim(addslashes($objArray['invoice_date'])).'" WHERE `service_order_no`="'.$_GET['service_order_no'].'" AND `enquiry_id`="'.$_GET['enquiry_id'].'"';
$this->ExecuteQuery($UpQuery3, 'update');

header('Location:' .$_SERVER['PHP_SELF'].'?enquiry_id='.trim(addslashes($objArray['enquiry_id'])).'&service_order_no='.trim(addslashes($objArray['service_order_no'])).'&succs_msg_for_insert');
return true;
}



 /*****************************Delete Order/**********************************************/
  function DeleteOrder($CatIdent,$CusIdent)
	{
	global $objSmarty,$config;
   $tbl = $config['DBPrefix'];
  $service_id = base64_decode($_GET["service_order_no"]);
 $DelQuery2 = 'DELETE  FROM '.$tbl.'service_followup WHERE sl_no = "'.$CatIdent.'" AND service_order_no = "'.$service_id.'"';
		$this->ExecuteQuery($DelQuery2, 'delete');
		$objSmarty->assign('SuccessMessage1', 'Deleted Successfully');
		 header('Location:' .$_SERVER['PHP_SELF'].'?service_order_no='.$CusIdent.'&succs_msg_for_del');
		}
 /***************************************************Service Print/****************************************************************************************/
 function ServicePrint($objArray)
 {
 		global $objSmarty,$config;
			$tbl = $config['DBPrefix'];
			$service_id = base64_decode($_GET["service_order_no"]);
		    $SelQuery4 = 'SELECT * FROM `'.$tbl.'service_master_details` WHERE service_order_no="'.$service_id.'" AND status="1"';
			$MailView = $this->ExecuteQuery($SelQuery4, "select");
			$objSmarty->assign('MailView', $MailView);
			return $MailView;
}

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
 /********************************Enquiry/******************************************************/
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
			//print_r($DelAddress);exit;
			return $DelAddress;

 }

 function ToAddress()
 {
 		 global $objSmarty,$config;
			$tbl = $config['DBPrefix'];
			 $service_id = base64_decode($_GET["service_order_no"]);
		 $SelQuery1 = 'SELECT * FROM `'.$tbl.'service_master` WHERE service_order_no ="'.$service_id.'" AND status="1"';
			$AddressView = $this->ExecuteQuery($SelQuery1, "select");
			//print_r($AddressView);exit;
			$objSmarty->assign('AddressView', $AddressView);
			return $AddressView;

 }
 /****************************FollowUp/********************************************/
 function followup_list()
{
 global $objSmarty,$config;
			$tbl = $config['DBPrefix'];
			$service_id = base64_decode($_GET["service_order_no"]);
  $SelQuery = 'SELECT * from '.$tbl.'service_followup WHERE service_order_no="'.$service_id.'"';
 $follow = $this->ExecuteQuery($SelQuery, "select");
			//print_r($AddressView);exit;
			$objSmarty->assign('follow', $follow);
			return $follow;
}

/*********************************Address/************************************************************/
 function ToAddress2()
 {
 		 global $objSmarty,$config;
			$tbl = $config['DBPrefix'];
			$service_id = base64_decode($_GET["service_order_no"]);
	    	 $SelQuery1 = 'SELECT * FROM `'.$tbl.'service_master` WHERE service_order_no ="'.$_GET['service_order_no'].'" AND status="1"';
			$AddressView = $this->ExecuteQuery($SelQuery1, "select");
			//print_r($AddressView);exit;
			$objSmarty->assign('AddressView', $AddressView);
			return $AddressView;

 }
 function InsertServiceOrderFollowUp($objArray="")
 {
global $objSmarty,$config,$_POST;
$tbl = $config['DBPrefix'];

/*$revision = $_GET['revised_version'];
$Revise = ++$revision;*/


if(!$objArray['service_order_no']){
			$objSmarty->assign('ErrorMessage', 'Service Order No should not be blank');
			return false;
			}elseif(!$objArray['service_order_date']){
			$objSmarty->assign('ErrorMessage', 'Service Order Date should not be blank');
			return false;
			}elseif(!$objArray['service_quote_no']){
			$objSmarty->assign('ErrorMessage', 'Service Quote No should not be blank');
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
              } elseif(!$objArray['created_by']){
			$objSmarty->assign('ErrorMessage', 'Created By should not be blank');
			return false;
			}
			$objSmarty->assign('service_order_no', $objArray['service_order_no']);
			if($objArray['service_order_no'] && $objArray['service_order_no']){

$InsQuery = 'INSERT INTO `'.$tbl.'service_followup`(`service_order_no`,`service_order_date`,`service_quote_no`,`service_quote_date`,`enquiry_id`,`customer_id`,`revised_no`,`order_status`,`po_no`,`po_date`,`snooze_date`,`closed_date`,`created_by`,`created_date`, `created_time`,`timestamp`, `remarks`,`status`) VALUES("'.trim(addslashes($objArray['service_order_no'])).'","'.trim(addslashes($objArray['service_order_date'])).'","'.trim(addslashes($objArray['service_quote_no'])).'","'.trim(addslashes($objArray['service_quote_date'])).'","'.trim(addslashes($objArray['enquiry_id'])).'","'.trim(addslashes($objArray['customer_id'])).'","'.trim(addslashes($objArray['revised_no'])).'","'.trim(addslashes($objArray['order_status'])).'","'.trim(addslashes($objArray['po_no'])).'","'.trim(addslashes($objArray['po_date'])).'","'.trim(addslashes($objArray['snooze_date'])).'","'.trim(addslashes($objArray['closed_date'])).'","'.trim(addslashes($objArray['created_by'])).'","'.trim(addslashes($objArray['created_date'])).'","'.trim(addslashes($objArray['created_time'])).'","'.trim(addslashes($objArray['timestamp'])).'","'.trim(addslashes($objArray['remarks'])).'","1")';
$this->ExecuteQuery($InsQuery, 'insert');

 $UpQuery3 = 'UPDATE `'.$tbl.'service_master` SET `order_status`="'.trim(addslashes($objArray['order_status'])).'", `created_date`="'.trim(addslashes($objArray['created_date'])).'", `created_time`="'.trim(addslashes($objArray['created_time'])).'",`timestamp`="'.trim(addslashes($objArray['timestamp'])).'" WHERE `service_order_no`="'.$_GET['service_order_no'].'" AND `enquiry_id`="'.$_GET['enquiry_id'].'"';
$this->ExecuteQuery($UpQuery3, 'update');
}
header('Location:' .$_SERVER['PHP_SELF'].'?enquiry_id='.trim(addslashes($objArray['enquiry_id'])).'&service_order_no='.trim(addslashes($objArray['service_order_no'])).'&revised_no='.trim(addslashes($objArray['revised_no'])).'&succs_msg_for_insert');
return true;
}

// **********************      Insert Sales Order Mail/ *****************************************  /////////////////
 function InsertServiceOrderMail($objArray, $objFiles){
 {
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
			return false;
			}elseif(!$objArray['message']){
			$objSmarty->assign('ErrorMessage', 'Message should not be blank');
			return false;	}
			$objSmarty->assign('email_id1', $objArray['email_id1']);

$InsQuery = 'INSERT INTO `'.$tbl.'service_order_mail`(`enquiry_id`,`service_order_no`,`mail_from`,`mail_to`,`mail_cc`,`mail_subject`,`message`,`mail_attachment1`,`mail_attachment2`,`mail_attachment3`,`created_by`,`created_date`,`created_time`,`timestamp`,`status`) VALUES("'.trim(addslashes($objArray['enquiry_id'])).'","'.trim(addslashes($objArray['service_order_no'])).'","'.trim(addslashes($objArray['mail_from'])).'","'.trim(addslashes($objArray['mail_id2'])).'","'.trim(addslashes($objArray['cc'])).'","'.trim(addslashes($objArray['subject'])).'","'.trim(addslashes($objArray['message'])).'","'.$f1.'","'.$f2.'","'.$f3.'","'.trim(addslashes($objArray['created_by'])).'","'.trim(addslashes($objArray['created_date'])).'","'.trim(addslashes($objArray['created_time'])).'","'.trim(addslashes($objArray['timestamp'])).'","1")';
$this->ExecuteQuery($InsQuery, 'insert');

		$SelQuery = 'SELECT * From '.$tbl.'user_master WHERE username="'.trim(addslashes($objArray['created_by'])).'"';
		$UserMas = $this->ExecuteQuery($SelQuery, "select");
		$objSmarty->assign('UserMas', $UserMas);
	/************************************Query for Customer Name************************************/
		$SelQuery1 = 'SELECT * From '.$tbl.'service_master WHERE service_order_no="'.$_GET['service_order_no'].'"';
		$SerMas = $this->ExecuteQuery($SelQuery1, "select");
		$objSmarty->assign('SerMas', $SerMas);




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
	  $Mail = $_POST['mail_id2'];
	  $ccMail = $_POST['cc'];

	   if($Mail != '')
	  {
				$To = $Mail;
	  }
	  else

	  {
	   // $To = "rsureshit@hotmail.com";
	  }
		$From = $UserMas[0]['email_id'];
		$ccarr = $ccMail;
		$Subject =' Welcome to '.$config['SiteTitle'] .','.$SerMas[0]['customer_name'].$_POST['subject'] ;
		Send($To, $Message, $From, $Subject,$ccarr);
		header('Location:' .$_SERVER['PHP_SELF'].'?succs_msg'."&"."service_order_no=".$_GET['service_order_no']."&"."service_quote_revise_no=".$_GET['service_quote_revise_no']);


}
}

/********************************Service Print/*******************************************/
function add_ser_Total()
{
 global $objSmarty,$config;
			$tbl = $config['DBPrefix'];
			$service_id = base64_decode($_GET["service_order_no"]);
  $SelQuery = 'SELECT sum(total) as Total from '.$tbl.'service_master_details WHERE service_order_no="'.$service_id.'"';
 $SerAddView = $this->ExecuteQuery($SelQuery, "select");
			//print_r($AddressView);exit;
			$objSmarty->assign('SerAddView', $SerAddView);
			return $SerAddView;
}
function Ser_sub_Total()
{
 global $objSmarty,$config;
			$tbl = $config['DBPrefix'];
			$service_id = base64_decode($_GET["service_order_no"]);
  $SelQuery = 'SELECT sum(material_estimate + labour_estimate) as s_Total from '.$tbl.'service_master_details WHERE service_order_no="'.$service_id.'"';
 $Adds = $this->ExecuteQuery($SelQuery, "select");
			//print_r($Adds);exit;
			$objSmarty->assign('Adds', $Adds);
			return $Adds;
}
function Ser_tax_Total()
{
 global $objSmarty,$config;
			$tbl = $config['DBPrefix'];
			$service_id = base64_decode($_GET["service_order_no"]);
  		$SelQuery = 'SELECT * from '.$tbl.'service_master_details WHERE service_order_no="'.$service_id.'"';
 		$Add_tax = $this->ExecuteQuery($SelQuery, "select");
			//print_r($AddressView);exit;
			$objSmarty->assign('Add_tax', $Add_tax);
			return $Add_tax;
}
/************************************************************************Service Mail/*******************************************/
function mail_list()
{
 global $objSmarty,$config;
			$tbl = $config['DBPrefix'];
		$SelQuery = 'SELECT * from '.$tbl.'service_master WHERE service_order_no="'.$_GET["service_order_no"].'"';
		 $Sermailview = $this->ExecuteQuery($SelQuery, "select");
			//print_r($Sermailview);exit;
			$objSmarty->assign('Sermailview', $Sermailview);
			//print_r($Sermailview);exit;
			return $Sermailview;
}
}
?>
