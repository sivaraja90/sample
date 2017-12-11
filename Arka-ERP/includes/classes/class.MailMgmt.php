<?php

#####Class For Adding Content Management ######
class MailMgmt extends MysqlFns{

 /* class constructor */
 	function MailMgmt(){
    $this->LDDisplayPath= $config['SiteGlobalPath']."class.MailMgmt.php";
	global $config;global $objSmarty,$config;
	$tbl = $config['DBPrefix'];
	$this->MysqlFns();
	$this->Limit = 20;


 }

/***************************************Enquiry Mail List/**********************************************************/
function EnquiryMail()
{
 global $objSmarty,$config;
			$tbl = $config['DBPrefix'];
			//$sales_id = base64_decode($_GET["sales_order_no"]);
			$SelQuery = 'SELECT * from `'.$tbl.'enquiry_mail` WHERE status="1" AND created_by="'.$_SESSION['UserName'].'"';
			$enquiryMail = $this->ExecuteQuery($SelQuery, "select");
			//print_r($AddressView);exit;
			$objSmarty->assign('enquiryMail', $enquiryMail);
			return $enquiryMail;
}
/****************************Enqyuiry Details************************************************************/
function EnquiryDetailMail()
{
 global $objSmarty,$config;
			$sno = base64_decode($_GET["sl_no"]);
			$enq_id = base64_decode($_GET["enquiry_id"]);
			$tbl = $config['DBPrefix'];
			$SelQuery = 'SELECT * from `'.$tbl.'enquiry_mail` WHERE status="1" AND enquiry_id="'.$enq_id.'" AND sl_no="'.$sno.'"';
			$enqMailDetail = $this->ExecuteQuery($SelQuery, "select");
			//print_r($enqMailDetail);exit;
			$objSmarty->assign('enqMailDetail', $enqMailDetail);
			return $enqMailDetail;
}
/****************************Service Details************************************************************/
function SerDetailMail()
{
 global $objSmarty,$config;
			$sno = base64_decode($_GET["sl_no"]);
			$enq_id = base64_decode($_GET["enquiry_id"]);
			$tbl = $config['DBPrefix'];
			$SelQuery = 'SELECT * from `'.$tbl.'service_order_mail` WHERE status="1" AND enquiry_id="'.$enq_id.'" AND sl_no="'.$sno.'"';
			$SerMailDetail = $this->ExecuteQuery($SelQuery, "select");
			//print_r($enqMailDetail);exit;
			$objSmarty->assign('SerMailDetail', $SerMailDetail);
			return $SerMailDetail;
}

/****************************Service Details************************************************************/
function ProDetailMail()
{
 global $objSmarty,$config;
			$sno = base64_decode($_GET["sl_no"]);
			$enq_id = base64_decode($_GET["enquiry_id"]);
			$tbl = $config['DBPrefix'];
			$SelQuery = 'SELECT * from `'.$tbl.'project_order_mail` WHERE status="1" AND enquiry_id="'.$enq_id.'" AND sl_no="'.$sno.'"';
			$ProjectMail = $this->ExecuteQuery($SelQuery, "select");
			//print_r($enqMailDetail);exit;
			$objSmarty->assign('ProjectMail', $ProjectMail);
			return $ProjectMail;
}
 function SalOrderMail()
{
 global $objSmarty,$config;
			$tbl = $config['DBPrefix'];
			//$sales_id = base64_decode($_GET["sales_order_no"]);
			$SelQuery = 'SELECT * from `'.$tbl.'sales_order_mail` WHERE status="1" AND created_by="'.$_SESSION['UserName'].'"';
			$salordMail = $this->ExecuteQuery($SelQuery, "select");
			//print_r($salordMail);exit;
			$objSmarty->assign('salordMail', $salordMail);
			return $salordMail;
}
function ServOrderMail()
{
 global $objSmarty,$config;
			$tbl = $config['DBPrefix'];
			//$sales_id = base64_decode($_GET["sales_order_no"]);
			$SelQuery = 'SELECT * from `'.$tbl.'service_order_mail` WHERE status="1" AND created_by="'.$_SESSION['UserName'].'"';
			$serordMail = $this->ExecuteQuery($SelQuery, "select");
			//print_r($AddressView);exit;
			$objSmarty->assign('serordMail', $serordMail);
			return $serordMail;
}
function ProjOrderMail()
{
 global $objSmarty,$config;
			$tbl = $config['DBPrefix'];
			//$sales_id = base64_decode($_GET["sales_order_no"]);
			$SelQuery = 'SELECT * from `'.$tbl.'project_order_mail` WHERE status="1" AND created_by="'.$_SESSION['UserName'].'"';
			$projordMail = $this->ExecuteQuery($SelQuery, "select");
			//print_r($AddressView);exit;
			$objSmarty->assign('projordMail', $projordMail);
			return $projordMail;
}
/*************************************************List Mail/***************************************************************/

function ListEnqMailDet()
{
global $objSmarty,$config;
$tbl = $config['DBPrefix'];
$SelQuery = 'SELECT * from `'.$tbl.'enquiry_mail` WHERE status="1"';
$enquiryMail = $this->ExecuteQuery($SelQuery, "select");
//print_r($enquiryMail);exit;
$objSmarty->assign('enquiryMail', $enquiryMail);
return $enquiryMail;
}
/*************************************************List Mail/***************************************************************/

function DeleteMail()
{
global $objSmarty,$config;
$tbl = $config['DBPrefix'];
$SelQuery = 'UPDATE `'.$tbl.'enquiry_mail` SET status="0" WHERE sl_no="'.$_GET['sl_no'].'" AND enquiry_id="'.$_GET['enquiry_id'].'"';
$UpdateMail = $this->ExecuteQuery($SelQuery, "select");
$objSmarty->assign('UpdateMail', $UpdateMail);
}
/*************************************************List Sales Mail Details/***************************************************************/

function ListSalesMailDet()
{
global $objSmarty,$config;
$tbl = $config['DBPrefix'];
$SelQuery = 'SELECT * from `'.$tbl.'sales_order_mail` WHERE status="1"';
$SalesMail = $this->ExecuteQuery($SelQuery, "select");
//print_r($SalesMail);exit;
$objSmarty->assign('SalesMail', $SalesMail);
return $enquiryMail;
}
/*******************************Delete Enquirymail *******************/
function DeleteEnquiryMail($id)
{
global $objSmarty, $config;
$tbl = $config['DBPrefix'];
$DelQuery = 'update `'.$tbl.'enquiry_mail` set `status` = 0 WHERE `sl_no` ="'.$_GET["sl_no"].'" AND `enquiry_id` ="'.$_GET["enquiry_id"].'" ';
$this->ExecuteQuery($DelQuery, 'update');

header('Location:' .$_SERVER['PHP_SELF'].'?succs_msg_for_insert');   
}
/*******************************Delete Sales mail *******************/
function DeleteSalesMail($id)
{
global $objSmarty, $config;
$tbl = $config['DBPrefix'];
$DelQuery = 'update `'.$tbl.'sales_order_mail` set `status` = 0 WHERE `sl_no` ="'.$_GET["sl_no"].'" AND `enquiry_id` ="'.$_GET["enquiry_id"].'" ';
$this->ExecuteQuery($DelQuery, 'update');
header('Location:' .$_SERVER['PHP_SELF'].'?succs_msg_for_insert');
}
/*******************************Delete Service mail *******************/
function DeleteServiceMail($id)
{
global $objSmarty, $config;
$tbl = $config['DBPrefix'];
$DelQuery = 'update `'.$tbl.'service_order_mail` set `status` = 0 WHERE `sl_no` ="'.$_GET["sl_no"].'" AND `enquiry_id` ="'.$_GET["enquiry_id"].'" ';
$this->ExecuteQuery($DelQuery, 'update');
header('Location:' .$_SERVER['PHP_SELF'].'?succs_msg_for_insert');
}
/*******************************Delete Project mail *******************/
function DeleteProjectMail($id)
{
global $objSmarty, $config;
$tbl = $config['DBPrefix'];
$DelQuery = 'update `'.$tbl.'project_order_mail` set `status` = 0 WHERE `sl_no` ="'.$_GET["sl_no"].'" AND `enquiry_id` ="'.$_GET["enquiry_id"].'" ';
$this->ExecuteQuery($DelQuery, 'update');
header('Location:' .$_SERVER['PHP_SELF'].'?succs_msg_for_insert');
}
}
?>
