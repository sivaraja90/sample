<?php

#####Class For Adding Content Management ######
class ProjectOrder extends MysqlFns{
 
 /* class constructor */
 function ProjectOrder(){
 $this->LDDisplayPath= $config['SiteGlobalPath']."class.ProjectOrder.php";
	global $config;global $objSmarty,$config;
	$tbl = $config['DBPrefix'];
	$this->MysqlFns();
	$this->Limit = 20;
	$project_id = base64_decode($_GET["project_order_no"]);
   /**************************************Sales Quote No Auto Increment*********************************************************/
   
			$SelQuerys1	= 'SELECT max(project_order_no) as last FROM `'.$tbl.'project_master` Limit 0,1';
			$ProjectDetail	= $this->ExecuteQuery($SelQuerys1, 'select');
			  if($ProjectDetail[0]['last']!="")
			{
			$ProjectDetail[0]['project_order_no'] = stripslashes($ProjectDetail[0]['last']);
			$p_quote1 = preg_replace("/[^0-9\.]/", '', $ProjectDetail[0]['project_order_no']);
			$p_quote1= $p_quote + 1;
			$str = str_split($ProjectDetail[0]['last'], 3);
			$p_quote = $str[0]. "" .$p_quote1;
			}
			else
			{
			$p_quote = "PRO1001";
			}
			$objSmarty->assign('p_quote', $p_quote);
	/*************************************Invoice Number Auto Increment*************************************************************************/		
			$SelQuerys	= 'SELECT max(invoice_no) as last FROM `'.$tbl.'project_payment_master` Limit 0,1';
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
			$SelQuerys1	= 'SELECT max(revised_version) as last FROM `'.$tbl.'project_master_details` WHERE project_order_no="'.$_GET["project_order_no"].'" Limit 0,1';
			$SaleDetail	= $this->ExecuteQuery($SelQuerys1, 'select');
			$SaleDetail[0]['sales_revised_version'] = stripslashes($SaleDetail[0]['last']);
			$r_version1 = preg_replace("/[^0-9\.]/", '', $SaleDetail[0]['revised_version']);
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
 function ChkDupliSale($project_order_no, $Ident=''){
global $objSmarty,$config,$_POST;
$tbl = $config['DBPrefix'];
		$SelQuery	= 'SELECT * FROM `'.$tbl.'project_master` WHERE `project_order_no` = "'.$project_order_no.'" Limit 0,1';
		$SalesDetail = $this->ExecuteQuery($SelQuery, 'select');
  
		if(!empty($SalesDetail) && is_array($SalesDetail))
		   return false;
		else
		  return true;
 }
 
/*************************************************View Sales Quote/***************************************************************/
function ViewProjectOrderQuote($objArray="")
 {
 $project_id = base64_decode($_GET["project_order_no"]);
// print_r($project_id); exit;
global $objSmarty,$config;
$tbl = $config['DBPrefix'];
 $SelQuery = 'SELECT * FROM `'.$tbl.'project_master` WHERE '.$tbl.'project_master.project_order_no="'.$project_id.'"';
			$ListDetail = $this->ExecuteQuery($SelQuery, "select");
			$objSmarty->assign('ListDetail', $ListDetail);
			return $ListDetail;

 }

 /*****************************************************Project_Order Follow Up/*****************************************************/
 function InsertProjectOrderFollowUp($objArray="")
 {
global $objSmarty,$config,$_POST;
$tbl = $config['DBPrefix'];
if(!$objArray['project_order_no']){
			$objSmarty->assign('ErrorMessage', 'Project Order No should not be blank');
			return false;
			}elseif(!$objArray['enquiry_id']){
			$objSmarty->assign('ErrorMessage', 'Enquiry Id should not be blank');
			return false;
			}elseif(!$objArray['project_order_date']){
			$objSmarty->assign('ErrorMessage', 'Project Order Date should not be blank');
			return false;
			}elseif(!$objArray['project_quote_no']){
			$objSmarty->assign('ErrorMessage', 'Project Quote No should not be blank');
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
			}elseif(!$objArray['created_date']){
			$objSmarty->assign('ErrorMessage', 'Created Date should not be blank');
			return false;
			}elseif(!$objArray['remarks']){
			$objSmarty->assign('ErrorMessage', 'Remarks should not be blank');
			return false;
			}
						$objSmarty->assign('enquiry_id', $objArray['enquiry_id']);
			if($objArray['enquiry_id'] && $objArray['enquiry_id']){
			
			
			
		//	echo"i am here.....";
			
 
 $InsQuery = 'INSERT INTO `'.$tbl.'project_order_followup`(`project_order_no`,`project_order_date`,`project_quote_no`,`project_quote_date`,`enquiry_id`,`customer_id`,`revised_no`,`order_status`,`po_no`,`po_date`,`snooze_date`,`closed_date`,`created_by`,`created_date`, `created_time`,`timestamp`, `remarks`,`status`) VALUES("'.trim(addslashes($objArray['project_order_no'])).'","'.trim(addslashes($objArray['project_order_date'])).'","'.trim(addslashes($objArray['project_quote_no'])).'","'.trim(addslashes($objArray['project_quote_date'])).'","'.trim(addslashes($objArray['enquiry_id'])).'","'.trim(addslashes($objArray['customer_id'])).'","'.trim(addslashes($objArray['revised_no'])).'","'.trim(addslashes($objArray['order_status'])).'","'.trim(addslashes($objArray['po_no'])).'","'.trim(addslashes($objArray['po_date'])).'","'.trim(addslashes($objArray['snooze_date'])).'","'.trim(addslashes($objArray['closed_date'])).'","'.trim(addslashes($objArray['created_by'])).'","'.trim(addslashes($objArray['created_date'])).'","'.trim(addslashes($objArray['created_time'])).'","'.trim(addslashes($objArray['timestamp'])).'","'.trim(addslashes($objArray['remarks'])).'","1")';

$this->ExecuteQuery($InsQuery, 'insert');

 $UpQuery2 = 'Update `'.$tbl.'project_master` SET `order_status` = "'.trim($objArray['order_status']).'",`status`="1" WHERE `project_order_no`="'.$_GET['project_order_no'].'" AND `enquiry_id`="'.trim(addslashes($objArray['enquiry_id'])).'"';
$this->ExecuteQuery($UpQuery2, 'update');
header('Location:' .$_SERVER['PHP_SELF'].'?enquiry_id='.$_GET['enquiry_id'].'&succs_msg_for_insert');
return true;


}
}
 /*************************************************List Sales Quote/***************************************************************/
 
 function ListProjectOrder()
 {
global $objSmarty,$config;
$tbl = $config['DBPrefix'];
$SelQuery = 'SELECT * FROM '.$tbl.'project_master WHERE status="1" ORDER BY project_order_no DESC';
			$ListView = $this->ExecuteQuery($SelQuery, "select");
			$objSmarty->assign('ListView', $ListView);
			return $ListView;

 }

 /**********************************************Delete Contact/*********************************************************************/
  function DeleteProjectEditDetails($CatIdent)
 {
 		 global $objSmarty,$config;
		 $tbl = $config['DBPrefix'];
			 $DelQuery = 'DELETE FROM `'.$tbl.'project_master` WHERE `project_order_no` ="'.$_GET['project_order_no'].'"';
			$this->ExecuteQuery($DelQuery, 'delete');
			
			 $DelQuery = 'DELETE FROM `'.$tbl.'project_master_details` WHERE `project_order_no` ="'.$_GET['project_order_no'].'"';
			$this->ExecuteQuery($DelQuery, 'delete');
			//print_r($CusIdent);
        header('Location:' .$_SERVER['PHP_SELF'].'?succs_msg_for_del');
			return true;
		   
  
 }
 
  /****************************************************Time Stamp Value As Date And Time Form Master****************************************/
 
  function DateStamp()
 {global $objSmarty,$config;
$tbl = $config['DBPrefix'];
$project_id = base64_decode($_GET["project_order_no"]);
$SelQuery = 'SELECT Date(timestamp_value) as Date from '.$tbl.'project_master WHERE project_order_no="'.$project_id.'"';
			 $Date_Stamp = $this->ExecuteQuery($SelQuery, "select");
			  //print $Date;
			 $objSmarty->assign('Date_Stamp', $Date_Stamp);
			 return $Date_Stamp;
			 
}

  function TimeStamp()
  {global $objSmarty,$config;
$tbl = $config['DBPrefix'];
$project_id = base64_decode($_GET["project_order_no"]);
$SelQuery1 = 'SELECT  Time(timestamp_value) as Time from '.$tbl.'project_master WHERE project_order_no="'.$project_id.'"';
			 $Time_Stamp = $this->ExecuteQuery($SelQuery1, "select");
			 $objSmarty->assign('Time_Stamp', $Time_Stamp);
			 return $Time_Stamp;
			

 }
function Created_date()
 {global $objSmarty,$config;
$tbl = $config['DBPrefix'];
$project_id = base64_decode($_GET["project_order_no"]);
$SelQuery = 'SELECT * From '.$tbl.'project_master WHERE project_order_no="'.$project_id.'"';
			 $created_Date = $this->ExecuteQuery($SelQuery, "select");
			  //print $Date;
			 $objSmarty->assign('created_Date', $created_Date);
			 return $created_Date;
			 
}



 /*************************************************View Edit Sales Order Quote/***************************************************************/
function ViewProjectDetails($objArray='')
 {
 $project_id = base64_decode($_GET["project_order_no"]);
global $objSmarty,$config;
$tbl = $config['DBPrefix']; 
  $SelQuery = 'SELECT * FROM  `'.$tbl.'project_master_details` WHERE '.$tbl.'project_master_details.project_order_no ="'.$project_id.'" ';  
			$ListEdit = $this->ExecuteQuery($SelQuery, "select");
			$objSmarty->assign('ListEdit', $ListEdit);
			return $ListEdit;
 }

  /**************************************     List query for Project order Followup list/********************************************/
 function ViewProjectOrderFollowupList($objArray='')
 {
 $project_id = base64_decode($_GET["project_order_no"]);
global $objSmarty,$config;
$tbl = $config['DBPrefix']; 
 $SelQuery = 'SELECT * FROM `'.$tbl.'project_order_followup` WHERE '.$tbl.'project_order_followup.project_order_no="'.$project_id.'" ';  
			$ProOdrFollowupList = $this->ExecuteQuery($SelQuery, "select");
			$objSmarty->assign('ProOdrFollowupList', $ProOdrFollowupList);
			return $ProOdrFollowupList;
 }
 
	/*********************************Delete FollowUp/*********************************************************/
	function DeleteOrder($CatIdent,$CusIdent)
	{
	global $objSmarty,$config;
   $tbl = $config['DBPrefix'];
   $project_id = base64_decode($_GET["project_order_no"]);
echo  $DelQuery2 = 'DELETE  FROM '.$tbl.'project_order_followup WHERE sl_no = "'.$CatIdent.'" AND project_order_no = "'.$project_id.'"';exit;
		$this->ExecuteQuery($DelQuery2, 'delete');
		$objSmarty->assign('SuccessMessage1', 'Deleted Successfully');
		 header('Location:' .$_SERVER['PHP_SELF'].'?project_order_no='.$CusIdent.'&succs_msg_for_del');
		}

 /***************************************************Service Print/****************************************************************************************/
 function ProjectPrint($objArray)
 {
 		global $objSmarty,$config;
			$tbl = $config['DBPrefix'];
			 $project_id = base64_decode($_GET["project_order_no"]);
			$SelQuery4 = 'SELECT * FROM `'.$tbl.'project_master_details` WHERE project_order_no="'.$project_id.'" AND status="1"';
			$MailView = $this->ExecuteQuery($SelQuery4, "select");
			$objSmarty->assign('MailView', $MailView);
			return $MailView;

 }
/*******************************Account/******************************************************/ 
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
/**********************Address/**************************************************/ 
 function ToAddress()
 {
 		 global $objSmarty,$config;
			$tbl = $config['DBPrefix'];
			$project_id = base64_decode($_GET["project_order_no"]);
			 $SelQuery1 = 'SELECT * FROM `'.$tbl.'project_master` WHERE project_order_no ="'.$project_id.'" AND status="1"';
			$AddressView = $this->ExecuteQuery($SelQuery1, "select");
			//print_r($AddressView);exit;
			$objSmarty->assign('AddressView', $AddressView);
			return $AddressView;

 }
 /***************************Address/***********************************************/
 function ToAddress2()
 {
 		 global $objSmarty,$config;
			$tbl = $config['DBPrefix'];
			$project_id = base64_decode($_GET["project_order_no"]);
			 $SelQuery1 = 'SELECT * FROM `'.$tbl.'project_master` WHERE project_order_no ="'.$_GET['project_order_no'].'" AND status="1"';
			$AddressView = $this->ExecuteQuery($SelQuery1, "select");
			//print_r($AddressView);exit;
			$objSmarty->assign('AddressView', $AddressView);
			return $AddressView;

 }

/**************************Total/****************************************************/  
function pro_sub_Total()
{
 global $objSmarty,$config;
			$tbl = $config['DBPrefix'];
			$project_id = base64_decode($_GET["project_order_no"]);
  $SelQuery = 'SELECT sum(material_estimate + labour_estimate) as s_Total from '.$tbl.'project_master_details WHERE project_order_no="'.$project_id.'"';
 $Adds = $this->ExecuteQuery($SelQuery, "select");
			//print_r($AddressView);exit;
			$objSmarty->assign('Adds', $Adds);
			//return $Adds;
			
			  $SelQuery1 = 'SELECT sum(total) as Total from '.$tbl.'project_master_details WHERE project_order_no="'.$project_id.'"';
 			 $Adds1 = $this->ExecuteQuery($SelQuery1, "select");
			//print_r($AddressView);exit;
			$objSmarty->assign('Adds1', $Adds1);
			//return $Adds;
}  
function pro_tax_Total()
{
 global $objSmarty,$config;
			$tbl = $config['DBPrefix'];
			$project_id = base64_decode($_GET["project_order_no"]);
  $SelQuery = 'SELECT * from '.$tbl.'project_master_details WHERE project_order_no="'.$project_id.'"';
 $Add_tax = $this->ExecuteQuery($SelQuery, "select");
			//print_r($AddressView);exit;
			$objSmarty->assign('Add_tax', $Add_tax);
			return $Add_tax;
} 

 /***********************Enquiry/**********************************************/
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

 /****************************Add Followup/***************************************************/
function ToAddress1()
 {
 
 		 global $objSmarty,$config;
			$tbl = $config['DBPrefix'];
		//	$sales_id = base64_decode($_GET["project_order_no"]);
			 $SelQuery1 = 'SELECT * FROM `'.$tbl.'project_master` WHERE `project_order_no` ="'.$_GET['project_order_no'].'" AND status="1"';
			$AddressView = $this->ExecuteQuery($SelQuery1, "select");
			$objSmarty->assign('AddressView', $AddressView);
			return $AddressView;

 }
 /****************************Add Followup/***************************************************/ 
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
 /****************************Add Invoice/***************************************************/
function ViewInvoice($objArray="")
 {
 		 global $objSmarty,$config;
			$tbl = $config['DBPrefix'];
		    $sales_id = base64_decode($_GET["project_order_no"]);
			//print($sales_id);
			$SelQuery1 = 'SELECT * FROM `'.$tbl.'project_payment_master` WHERE `project_order_no` ="'.$sales_id.'" AND status="1"';
			$invoice = $this->ExecuteQuery($SelQuery1, "select");
			$objSmarty->assign('invoice', $invoice);
			return $invoice;
 }
 
 function ViewPayment($objArray="")
 {
 		 global $objSmarty,$config;
			$tbl = $config['DBPrefix'];
		    $project_id = base64_decode($_GET["project_order_no"]);
			//print($sales_id);
			$SelQuery1 = 'SELECT '.$tbl.'project_payment_details.*,'.$tbl.'project_payment_master.invoice_date FROM `'.$tbl.'project_payment_details` , `'.$tbl.'project_payment_master` WHERE '.$tbl.'project_payment_master.invoice_no = '.$tbl.'project_payment_details.invoice_no AND '.$tbl.'project_payment_master.project_order_no ="'.$project_id.'" AND '.$tbl.'project_payment_master.status="1" GROUP BY  '.$tbl.'project_payment_details.sl_no';
			$payment = $this->ExecuteQuery($SelQuery1, "select");
			$objSmarty->assign('payment', $payment);
			return $payment;
 }

 
 
 // **********************      Insert Project Invoice/ *****************************************  /////////////////
 function InsertProjectInvoice($objArray="")
 {
global $objSmarty,$config,$_POST;
$tbl = $config['DBPrefix'];

/*$revision = $_GET['revised_version'];
$Revise = ++$revision;*/

if(!$objArray['invoice_no']){
			$objSmarty->assign('ErrorMessage', 'Invoice No should not be blank');
			return false;
			}elseif(!$objArray['project_order_no']){
			$objSmarty->assign('ErrorMessage', 'Project Order No should not be blank');
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
			$objSmarty->assign('project_order_no', $objArray['project_order_no']);
			
 $InsQuery = 'INSERT INTO `'.$tbl.'project_payment_master`(`invoice_no`,`project_order_no`,`invoice_amount`,`invoice_date`,`payment_status`,`created_by`,`created_date`,`created_time`,`timestamp`,`status`) VALUES("'.trim(addslashes($objArray['invoice_no'])).'","'.trim(addslashes($objArray['project_order_no'])).'","'.trim(addslashes($objArray['invoice_amount'])).'","'.trim(addslashes($objArray['invoice_date'])).'","'.trim(addslashes($objArray['payment_status'])).'","'.trim(addslashes($objArray['created_by'])).'","'.trim(addslashes($objArray['created_date'])).'","'.trim(addslashes($objArray['created_time'])).'","'.trim(addslashes($objArray['timestamp'])).'","1")'; 
$this->ExecuteQuery($InsQuery, 'insert'); 

$UpQuery3 = 'UPDATE `'.$tbl.'project_master` SET `invoice_no`="'.trim(addslashes($objArray['invoice_no'])).'",`invoice_date`="'.trim(addslashes($objArray['invoice_date'])).'" WHERE `project_order_no`="'.$_GET['project_order_no'].'" AND `enquiry_id`="'.$_GET['enquiry_id'].'"';
$this->ExecuteQuery($UpQuery3, 'update');

header('Location:' .$_SERVER['PHP_SELF'].'?enquiry_id='.trim(addslashes($objArray['enquiry_id'])).'&project_order_no='.trim(addslashes($objArray['project_order_no'])).'&succs_msg_for_insert');  
return true;
}


// **********************      Insert Project Make Payment/ *****************************************  /////////////////
 function InsertProjectMakepayment($objArray="")
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
			$objSmarty->assign('project_order_no', $objArray['project_order_no']);
			
 $InsQuery = 'INSERT INTO `'.$tbl.'project_payment_details`(`project_order_no`,`invoice_no`,`invoice_amount`,`pending_amount`,`paid_amount`,`payment_status`,`payment_mode`,`payment_ref`,`created_by`,`created_date`,`created_time`,`timestamp`,`status`) VALUES("'.trim(addslashes($objArray['project_order_no'])).'","'.trim(addslashes($objArray['invoice_no'])).'","'.trim(addslashes($objArray['invoice_amount'])).'","'.trim(addslashes($objArray['pending_amount'])).'","'.trim(addslashes($objArray['paid_amount'])).'","'.trim(addslashes($objArray['payment_status'])).'","'.trim(addslashes($objArray['payment_mode'])).'","'.trim(addslashes($objArray['payment_ref'])).'","'.trim(addslashes($objArray['created_by'])).'","'.trim(addslashes($objArray['created_date'])).'","'.trim(addslashes($objArray['created_time'])).'","'.trim(addslashes($objArray['timestamp'])).'","1")';
$this->ExecuteQuery($InsQuery, 'insert');

$SelQuery = 'SELECT * FROM `'.$tbl.'project_payment_master` WHERE status = "1" AND project_order_no="'.trim(addslashes($objArray['project_order_no'])).'" AND invoice_no="'.trim(addslashes($objArray['invoice_no'])).'"';
$ViewContact = $this->ExecuteQuery($SelQuery, "select");
$objSmarty->assign('ViewContact', $ViewContact);

$PaidAmount=$ViewContact[0]['paid_amount'];
$paidamount=trim(addslashes($objArray['paid_amount']));
$PAID= $PaidAmount + $paidamount;

if($ViewContact[0]['project_order_no']==$objArray['project_order_no'])
{
 $UpQuery3 = 'UPDATE `'.$tbl.'project_payment_master` SET `invoice_no`="'.trim(addslashes($objArray['invoice_no'])).'",`pending_amount`="'.trim(addslashes($objArray['pending_amount'])).'",`project_order_no`="'.trim(addslashes($objArray['project_order_no'])).'", `paid_amount`="'.$PAID.'", `payment_status`="'.trim(addslashes($objArray['payment_status'])).'",`created_by`="'.trim(addslashes($objArray['created_by'])).'",`created_date`="'.trim(addslashes($objArray['created_date'])).'",`created_time`="'.trim(addslashes($objArray['created_time'])).'",`timestamp`="'.trim(addslashes($objArray['timestamp'])).'" WHERE  `project_order_no`="'.trim(addslashes($objArray['project_order_no'])).'" AND `invoice_no`="'.trim(addslashes($objArray['invoice_no'])).'" ';   
$this->ExecuteQuery($UpQuery3, 'update');

}
else
{
 $InsQuery1 = 'INSERT INTO `'.$tbl.'project_payment_master`(`project_order_no`,`invoice_no`,`invoice_amount`,`pending_amount`,`paid_amount`,`payment_status`,`created_by`,`created_date`,`created_time`,`timestamp`,`status`) VALUES("'.trim(addslashes($objArray['project_order_no'])).'","'.trim(addslashes($objArray['invoice_no'])).'","'.trim(addslashes($objArray['invoice_amount'])).'","'.trim(addslashes($objArray['pending_amount'])).'","'.trim(addslashes($objArray['paid_amount'])).'","'.trim(addslashes($objArray['payment_status'])).'","'.trim(addslashes($objArray['created_by'])).'","'.trim(addslashes($objArray['created_date'])).'","'.trim(addslashes($objArray['created_time'])).'","'.trim(addslashes($objArray['timestamp'])).'","1")';
$this->ExecuteQuery($InsQuery1, 'insert');
}

header('Location:' .$_SERVER['PHP_SELF'].'?enquiry_id='.trim(addslashes($objArray['enquiry_id'])).'&project_order_no='.trim(addslashes($objArray['project_order_no'])).'&succs_msg_for_insert');  
return true;
}
/********************************Invoice/**********************************************************/
function ViewPaymentInvoice($objArray="")
 {
 
 		 global $objSmarty,$config;
			$tbl = $config['DBPrefix'];
		    $sales_id = base64_decode($_GET["project_order_no"]);
			//print($sales_id);
			
			$SelQuery1 = 'SELECT * FROM `'.$tbl.'project_payment_master` WHERE `project_order_no` ="'.$_GET["project_order_no"].'" AND status="1"';
			$invoice1 = $this->ExecuteQuery($SelQuery1, "select");
			//print_r($invoice1);exit;
			$objSmarty->assign('invoice1', $invoice1);

$SelQuery1 = 'SELECT * FROM `'.$tbl.'project_payment_details` WHERE `project_order_no` ="'.$_GET['project_order_no'].'" AND status="1"';
			$payment = $this->ExecuteQuery($SelQuery1, "select");
			$objSmarty->assign('payment', $payment);
			
		return $invoice1;

 }
 function ViewPaymentInvoice1($Invident)
 {
 		 global $objSmarty,$config;
			$tbl = $config['DBPrefix'];
		    $sales_id = base64_decode($_GET["project_order_no"]);

 $SelQuery2 = 'SELECT * FROM `'.$tbl.'project_payment_master` WHERE `project_order_no` ="'.$_GET["project_order_no"].'" AND `invoice_no`="'.$Invident.'" AND status="1"';
			$invoice2 = $this->ExecuteQuery($SelQuery2, "select");
			//print_r($invoice2);
			$objSmarty->assign('invoice2', $invoice2);
			return $invoice2;
}
/*********************************************Ajax Invoice Details/********************************************/
function AjaxGetInvoiceDetails($objArray="")
 {
global $objSmarty,$config;
$tbl = $config['DBPrefix'];

		$SelQuery = 'SELECT * FROM '.$tbl.'project_payment_master WHERE invoice_no ="'.$_GET['invoice_no'].'"' ;
		 $LDList		= $this->ExecuteQuery($SelQuery, "select");	
		
		echo "|CUSID|".$LDList[0]['invoice_amount'];
		echo "|CUSID|".$LDList[0]['pending_amount'];
		echo "|CUSID|".$LDList[0]['paid_amount'];

}
// **********************      Insert Project Order Mail/ *****************************************  /////////////////
 function InsertProjectOrderMail($objArray, $objFiles){
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

 			if(!$objArray['email_id1']){
			$objSmarty->assign('ErrorMessage', 'Mail To should not be blank');
			return false;
			}elseif(!$objArray['cc']){
			$objSmarty->assign('ErrorMessage', 'CC should not be blank');
			return false;
			}elseif(!$objArray['subject']){
			$objSmarty->assign('ErrorMessage', 'Subject should not be blank');
			return false;  
			}elseif(!$objArray['message']){
			$objSmarty->assign('ErrorMessage', 'Subject should not be blank');
			return false;			}  
			$objSmarty->assign('email_id1', $objArray['email_id1']);
	
$InsQuery = 'INSERT INTO `'.$tbl.'project_order_mail`(`enquiry_id`,`project_order_no`,`mail_from`,`mail_to`,`mail_cc`,`mail_subject`,`message`,`mail_attachment1`,`mail_attachment2`,`mail_attachment3`,`created_by`,`created_date`,`created_time`,`timestamp`,`status`) VALUES("'.trim(addslashes($objArray['enquiry_id'])).'","'.trim(addslashes($objArray['project_order_no'])).'","'.trim(addslashes($objArray['mail_from'])).'","'.trim(addslashes($objArray['email_id1'])).'","'.trim(addslashes($objArray['cc'])).'","'.trim(addslashes($objArray['subject'])).'","'.trim(addslashes($objArray['message'])).'","'.$f1.'","'.$f2.'","'.$f3.'","'.trim(addslashes($objArray['created_by'])).'","'.trim(addslashes($objArray['created_date'])).'","'.trim(addslashes($objArray['created_time'])).'","'.trim(addslashes($objArray['timestamp'])).'","1")';  
$this->ExecuteQuery($InsQuery, 'insert');

$SelQuery = 'SELECT * From '.$tbl.'user_master WHERE username="'.trim(addslashes($objArray['created_by'])).'"';
		$UserMas = $this->ExecuteQuery($SelQuery, "select");
		$objSmarty->assign('UserMas', $UserMas);
	/************************************Query for Customer Name************************************/	
		$SelQuery1 = 'SELECT * From '.$tbl.'project_master WHERE project_order_no="'.$_GET['project_order_no'].'"';
		$ProMas = $this->ExecuteQuery($SelQuery1, "select");
		$objSmarty->assign('ProMas', $ProMas);
		
		

		
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
	   // $To = "rsureshit@hotmail.com";
	  }
		$From = $UserMas[0]['email_id'];
		$ccarr = $ccMail; 
		$Subject =' Welcome to '.$config['SiteTitle'] .','.$ProMas[0]['customer_name'].$_POST['subject'] ;
		Send($To, $Message, $From, $Subject,$ccarr);
		header('Location:' .$_SERVER['PHP_SELF'].'?succs_msg'."&"."revised_version=".$_GET['revised_version']."&"."project_quote_no=".$_GET['project_quote_no']);


}
}
/************************************************************************Mail/*******************************************/
function mail_list()
{
 global $objSmarty,$config;
			$tbl = $config['DBPrefix'];
			//$sales_id = base64_decode($_GET["project_order_no"]);
  $SelQuery = 'SELECT * from '.$tbl.'project_master WHERE project_quote_no="'.$_GET['project_quote_no'].'"';
 $mailview = $this->ExecuteQuery($SelQuery, "select");
			//print_r($AddressView);exit;
			$objSmarty->assign('mailview', $mailview); 
			return $mailview;
}
 function sendMail($objArray="")
 {


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
          <tr><td width="180" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif; color:#4e4e4e; font-size:13px; padding-right:10px;"><img src="http://www.tasca.in/tasca/micromak/images/microtek_logo.jpg" width="75" height="75" style="display:block;">
            <h3>Welcome To ARKA GROUPS ERP</h3></tr>
            <p>Dear Customer,</p>
	<p>On behalf of ARKA GROUPS, I would like to thank you for the tremendous purchase of the products done by you from us.</p>
    <p>It would be our good fortune to do business with you in the future and we look forward to implement a long-term relationship with such opportunities in the future. We assure you that our quality products will serve the needs of your customers? everytime and you will not find any complain in working with us.</p>
    <p>To help us achieve this, we invite you to take this short survey that will help us understand your world better. We value your participation and look forward to your responses.</p>
					
					
		<center><a href="http://192.168.1.222/arkaerp/invoice_print1.php?enquiry_id='.$_GET['enquiry_id'].'&inputkey=U2FsdGVkX19hEKlbJkJbRppYm9wYxZQ8BnSOcROA3Rw">	<img src="http://192.168.1.222/arkaerp/images/button1.png" width:22px; hight:30px;></a>
		<p>Thanking you once again.</p>
		<p>Sincerely, ARKA GROUPS,</p></center>
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
              <td width="50%" align="left" valign="middle" style="color:#595959; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:10px;"> <b>Company Address</b><br> Company URL: <a href="http://www.arkagroups.co.in" target="_blank"  style="color:#595959; text-decoration:none;">http://www.arkagroups.co.in</a><br>
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
	  $Mail = $_POST['mail_id'];
	  
	  //echo $email;
	 // echo $email2;
	   if($Mail != '')
	  {
				$To = $Mail;
				//echo $Mail;exit;
	  }
	  else
	  
	  {	   
	    $To = "vishal@gmail.com";
	  }
	   $From = "arka@gmail.com";
	$ccarr = array("arka@gmail.com","arka@gmail.com");
	//$ccarr = array("drameshcse92@gmail.com","ss.ganesh.0007@gmail.com");
	  $Subject = $config['SiteTitle'] . ' Welcome to '. $CusDet[$key]['CName'] ;
	  Send($To, $Message, $From, $Subject,$ccarr);

}
 }
?>


