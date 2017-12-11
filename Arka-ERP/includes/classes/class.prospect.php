<?php

#####Class For Adding Content Management ######
class prospect extends MysqlFns{
 /* class constructor */

 function prospect(){
 $this->LDDisplayPath= $config['SiteGlobalPath']."class.prospect.php";
   global $objSmarty,$config;
	$tbl = $config['DBPrefix'];
  $this->MysqlFns();
  $prs_id = base64_decode($_GET["prospect_id"]);


  /**************************************Customer Id Auto Increment*********************************************************/
			$SelQuerys	= 'SELECT max(prospect_id) as last FROM `'.$tbl.'prospect_master` Limit 0,1';
			$PrsDetail	= $this->ExecuteQuery($SelQuerys, 'select');

			if($PrsDetail[0]['last']!="")
			{
			$PrsDetail[0]['prospect_id'] = stripslashes($PrsDetail[0]['last']);
			$p_id1 = preg_replace("/[^0-9\.]/", '', $PrsDetail[0]['prospect_id']);
			$p_id1= $p_id1 + 1;
			$str = str_split($PrsDetail[0]['last'], 3);
			$p_id = $str[0]. "" .$p_id1;
			}
			else
			{
			$p_id = "PRS1001";
			}
			$objSmarty->assign('p_id', $p_id);
 }
 /*****function InsertCustomer()****/
 /*****function ViewCustomer()******/
 /*****function ListCustomer()******/
 /*****function DateStamp()*********/
 /*****function TimeStamp()*********/
 /*****function EditCustomer()******/
 /*************************************************Insert Customer***************************************************************/
 function InsertProspect($objArray="")
 { 
 global $objSmarty,$config,$_POST;
$tbl = $config['DBPrefix'];

			if(!$objArray['cmpny_name']){
			$objSmarty->assign('ErrorMessage', 'Company Name should not be blank');
			return false;
			}
			$objSmarty->assign('prospect_id', $objArray['prospect_id']);
			if($objArray['prospect_id'] ){

$InsQuery = 'INSERT INTO '.$tbl.'prospect_master(`prospect_id`,`company_name`,`created_by`,`created_date`,`created_time`,`address`,`mobile_no`,`contact_person`,`mail_id`,`status`) VALUES("'.trim(addslashes($objArray['prospect_id'])).'","'.trim(addslashes($objArray['cmpny_name'])).'","'.trim(addslashes($objArray['created_by'])).'","'.trim(addslashes($objArray['created_date'])).'","'.trim(addslashes($objArray['created_time'])).'","'.trim(addslashes($objArray['address'])).'","'.trim(addslashes($objArray['mobile_no'])).'","'.trim(addslashes($objArray['contact_person'])).'","'.trim(addslashes($objArray['mail_id'])).'","1")';
$this->ExecuteQuery($InsQuery, 'insert');


//Success Message
header('Location:' .$_SERVER['PHP_SELF'].'?succs_msg_for_insert');
return true;
 }
}
/*************************************************Detail Customer***************************************************************/
/*************************************************View Customer***************************************************************/
function Viewprospect($objArray)
 {
		$pros_id = base64_decode($_GET["prospect_id"]);
 		 global $objSmarty,$config;
		$tbl = $config['DBPrefix'];
			$SelQuery = 'SELECT * FROM `'.$tbl.'prospect_master` WHERE prospect_id="'.$pros_id.'"';
			$ListView1 = $this->ExecuteQuery($SelQuery, "select");
			$objSmarty->assign('ListView1', $ListView1);
			

 }
 /**********************************************List Contact*********************************************************************/
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



 function ListProspect()
 {
 		 global $objSmarty,$config;
$tbl = $config['DBPrefix'];
			 $SelQuery = 'SELECT * FROM `'.$tbl.'prospect_master` WHERE status = "1"';
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
			$DelQuery = 'update `'.$tbl.'prospect_master` set `status` = 0 WHERE `prospect_id` ="'.$CatIdent.'"';
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
function Editprospect($objArray="")
 {
 global $objSmarty,$_config,$_REQUEST,$_POST;
  global $objSmarty,$config ;
  $tbl = $config['DBPrefix'];

			if(!$objArray['cmpny_name']){
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
			$objSmarty->assign('prospect_id', $objArray['prospect_id']);
			if($objArray['prospect_id']){

$UpQuery = 'UPDATE `'.$tbl.'prospect_master` SET `prospect_id` = "'.trim($objArray['prospect_id']).'", `company_name` = "'.trim($objArray['cmpny_name']).'", `mail_id` = "'.trim($objArray['mail_id']).'",`address` = "'.trim($objArray['address']).'", `mobile_no` = "'.trim($objArray['mobile_no']).'", `contact_person` = "'.trim($objArray['contact_person']).'",`status` = "1" WHERE `prospect_id` ="'.trim($objArray['prospect_id']).'"';
$this->ExecuteQuery($UpQuery, 'update');

/*$UpQuery1 = 'UPDATE `'.$tbl.'customer_contact_details` SET `customer_id` = "'.trim($objArray['customer_id']).'", `company_name` = "'.trim($objArray['company_name']).'", `created_by` = "'.trim($objArray['created_by']).'",`enquiry_through` = "'.trim($objArray['enquiry_through']).'", `reference` = "'.trim($objArray['reference']).'", `place_type` = "'.trim($objArray['place_type']).'", `remarks` = "'.trim($objArray['remarks']).'",`status` = "1" WHERE `customer_id` ="'.trim($objArray['customer_id']).'"';
$this->ExecuteQuery($UpQuery1, 'update');

$UpQuery2 = 'UPDATE `'.$tbl.'customer_address_details` SET `customer_id` = "'.trim($objArray['customer_id']).'", `company_name` = "'.trim($objArray['company_name']).'", `created_by` = "'.trim($objArray['created_by']).'",`enquiry_through` = "'.trim($objArray['enquiry_through']).'", `reference` = "'.trim($objArray['reference']).'", `place_type` = "'.trim($objArray['place_type']).'", `remarks` = "'.trim($objArray['remarks']).'",`status` = "1" WHERE `customer_id` ="'.trim($objArray['customer_id']).'"';
$this->ExecuteQuery($UpQuery2, 'update');*/
header('Location:' .$_SERVER['PHP_SELF'].'?succs_msg_for_insert'."&"."prospect_id=".$_GET['prospect_id']);
return true;
}
}

/**************************************************Add Contact*************************************************************/


}
?>
