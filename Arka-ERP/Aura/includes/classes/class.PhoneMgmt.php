
<?php
 
##### Class For Adding Content Management ######
class PhoneMgmt extends MysqlFns{
 
 /* class constructor */
 
 function PhoneMgmt(){
 $this->LDDisplayPath= $config['SiteGlobalPath']."class.PhoneMgmt.php";
  global $config;
  global $objSmarty;
  $this->MysqlFns();
  $this->Limit = 20;
 /*  $this->Keyword = '';
  $this->Operator = '';
  $this->PerPage = '';
*/

 $SelQuerys	= 'SELECT max(sim_id) as last FROM `arka_phone_master` Limit 0,1';
   $PhoneDetail	= $this->ExecuteQuery($SelQuerys, 'select');
   
   if($PhoneDetail[0]['last']!="")
   {
			$PhoneDetail[0]['sim_id'] = stripslashes($PhoneDetail[0]['last']);
			$sim_id1 = preg_replace("/[^0-9\.]/", '', $PhoneDetail[0]['sim_id']);
			$sim_id1= $sim_id1 + 1;
			$str = str_split($PhoneDetail[0]['last'], 3);
			$sim_id = $str[0]. "" .$sim_id1;
   } else
   {
   		   $sim_id = "SIM10001";
   }
	$objSmarty->assign('sim_id', $sim_id);
}


function GetPhonePostpaidCalculate($objArray='')  {
  global $objSmarty;

		$simId = $_GET["simId"];
		//echo"$simId";
		
//********************************************************************Check the current date*********************************************
		$SelQuery = 'SELECT * FROM `arka_phone_postpaid_details` WHERE month(due_date) = month(curdate()) AND year(due_date)= year(curdate()) AND sim_id= "'.$_GET["simId"].'"';
		$RecordList		= $this->ExecuteQuery($SelQuery, "select");
		 $total_records = count($RecordList);
		 if ( ($total_records > 0) )  {
		// echo("Due Date not in current month");
		 }
		 elseif ( ($total_records == 0) )
		 {
		 	
			// echo ("No Records");
		 	 $SelQuery1 = 'SELECT max(sl_no) as sno, max(bill_date) as b_date, max(due_date) as d_date FROM `arka_phone_postpaid_details` WHERE sim_id = "'.$_GET["simId"].'"';
			$MaxRecord		= $this->ExecuteQuery($SelQuery1, "select");
			$tot_records = count($MaxRecord);
		//	echo ($MaxRecord[0]['sno']);
			 $b_date = $MaxRecord[0]['bill_Date'];
			 $d_date = $MaxRecord[0]['due_Date'];
			  if ($d_date <= date("Y-m-d"))
			{
			$InsQuery = 'INSERT INTO `arka_phone_postpaid_details`(`sim_id`,`customer_id`,`b_date`,`d_date`,`payment_mode`,`payment_status`,`payment_ref`,`status`) VALUES("'.$simId.'","'.$_SESSION['CustomerId'].'",DATE_ADD("'.$b_date.'", INTERVAL 1 MONTH),DATE_ADD("'.$d_date.'", INTERVAL 1 MONTH),"NA","Pending","NA","1")';
			$UpQuery = 'UPDATE `arka_phone_postpaid_details` SET `bill_date`= DATE_ADD("'.$b_date.'", INTERVAL 1 MONTH),`due_date`= DATE_ADD("'.$d_date.'", INTERVAL 1 MONTH),`payment_status`="Pending" WHERE sim_id ="'.$_GET["simId"].'"';
  	 		$this->ExecuteQuery($UpQuery, 'insert');
			}		
		
		 }
		
		$SelQuery2 = 'SELECT arka_phone_master.*,arka_phone_postpaid_details.* FROM `arka_phone_master`, arka_phone_postpaid_details WHERE arka_phone_master.sim_id="'.$_GET["sim_id"].'" AND arka_phone_master.sim_id=arka_phone_postpaid_details.sim_id AND arka_phone_postpaid_details.sim_id=arka_phone_master.sim_id ORDER BY arka_phone_postpaid_details.bill_date DESC';
		//echo $SelQuery;
		$DList		= $this->ExecuteQuery($SelQuery2, "select");
		$total_records = count($DList);
		$record_per_page = $this->Limit;
		
		$listing_split = new MsplitPageResults($SelQuery2, $this->Limit);
  if ( ($listing_split->number_of_rows > 0) )  {
   $objSmarty->assign('LinkPage',$listing_split->display_count(TEXT_DISPLAY_NUMBER_OF_RESULT));
   $objSmarty->assign('PerPageNavigation',TEXT_RESULT_PAGE1 . ' ' . $listing_split->display_links($this->Limit, get_all_get_params(array('page', 'info', 'x', 'y')))); 
   $PageList = $this->ExecuteQuery($listing_split->sql_query, 'selectassoc');
  // echo $PageList;
  }
  if(!empty($PageList) && is_array($PageList))
   foreach($PageList as $key=>$value){
    $PageList[$key]['simId'] = stripslashes($PageList[$key]['simId']);
		}
	
  $objSmarty->assign('i', $listing_split->i);
  $objSmarty->assign('PageList', $PageList);
  return $PageList;
  
		
		
	}	
function InsertPhoneContent($objArray)
 { 
   global $objSmarty, $_POST;
 
   if(!$objArray['simId']){
    $objSmarty->assign('ErrorMessage', 'Sim Id should not be blank');
	return false;
   }elseif(!$objArray['simNo']){
    $objSmarty->assign('ErrorMessage', 'Sim No should not be blank');
	return false;
   }elseif(!$objArray['mobileNo']) {
    $objSmarty->assign('ErrorMessage', 'Mobile No should not be blank');
	return false;
   }elseif(!$objArray['serviceNo']){
    $objSmarty->assign('ErrorMessage', 'Service No should not be blank');
	return false;
   }elseif(!$objArray['network']){
    $objSmarty->assign('ErrorMessage', 'Network should not be blank');
	return false;
   }elseif(!$objArray['validity']){
    $objSmarty->assign('ErrorMessage', 'Validity should not be blank');
	return false;
   }elseif(!$objArray['simType']){
    $objSmarty->assign('ErrorMessage', 'Sim Type should not be blank');
	return false;
   }elseif(!$objArray['purchaseDate']){
    $objSmarty->assign('ErrorMessage', 'Purchase Date should not be blank');
	return false;
   }elseif(!$objArray['id_proof_name']){
    $objSmarty->assign('ErrorMessage', 'Id Proof Name should not be blank');
	return false;
   }elseif(!$objArray['purpose']){
    $objSmarty->assign('ErrorMessage', 'purpose should not be blank');
	return false;
   }elseif(!$objArray['plan_name']){
    $objSmarty->assign('ErrorMessage', ' plan name should not be blank');
	return false;
   }
   
   if($objArray['simId']){
  $InsQuery1 = 'INSERT IGNORE INTO `arka_phone_master`(`sim_id`,`customer_id`, `sim_no`, `mobile_no`, `service_no`,`network`,`validity`,`sim_type`,`circle`,`purchase_date`,`id_proof_name`,`purpose`,`plan_name`,`created_by`,`created_date`,`created_time`,`status`) VALUES("'.trim(addslashes($objArray['simId'])).'","'.$_SESSION['CustomerId'].'","'.trim(addslashes($objArray['simNo'])).'","'.trim(addslashes($objArray['mobileNo'])).'","'.trim(addslashes($objArray['serviceNo'])).'","'.trim(addslashes($objArray['network'])).'","'.trim(addslashes($objArray['validity'])).'","'.trim(addslashes($objArray['simType'])).'","'.trim(addslashes($objArray['circle'])).'","'.trim(addslashes($objArray['purchaseDate'])).'","'.trim(addslashes($objArray['id_proof_name'])).'","'.trim(addslashes($objArray['purpose'])).'","'.trim(addslashes($objArray['plan_name'])).'","'.trim(addslashes($objArray['created_by'])).'","'.trim(addslashes($objArray['created_date'])).'","'.trim(addslashes($objArray['created_time'])).'","1")';
  	 $this->ExecuteQuery($InsQuery1, 'insert');
	 
	 if($objArray['simType'] == "Postpaid" ){
	  header('Location: phone_postpaidReg.php?sim_id='.$objArray['simId']);
        }  
		 elseif($objArray['simType'] == "Prepaid" ){
	  header('Location: phone_prepaidReg.php?sim_id='.$objArray['simId']);
	  }
   /* $InsQuery2 = 'INSERT IGNORE INTO `arka_phone_postpaid_details`(`sim_id`, `mobile_no` ,`bill_date`,`due_date` ,`bill_amt`,`paid_amt` ,`paid_date`,`payment_mode` ,`payment_status` ,`payment_ref`,`status`) VALUES("'.trim(addslashes($objArray['simId'])).'","'.trim(addslashes($objArray['mobileNo'])).'","'.trim(addslashes($objArray['bill_Date'])).'","'.trim(addslashes($objArray['due_Date'])).'","'.trim(addslashes($objArray['bill_Amount'])).'","'.trim(addslashes($objArray['paid_Amount'])).'","'.trim(addslashes($objArray['paid_Date'])).'","'.trim(addslashes($objArray['payment_Mode'])).'","'.trim(addslashes($objArray['payment_Status'])).'","'.trim(addslashes($objArray['payment_Ref'])).'","1")';
  	 $this->ExecuteQuery($InsQuery2, 'insert');
	 
	
	  $InsQuery3 = 'INSERT IGNORE INTO `arka_phone_prepaid_details`(`sim_id`, `recharge_type` ,`recharge_amount`,`no_of_validity_days` ,`validity_upto`,`recharge_date` ,`created_date`,`created_time` ,`created_by` ,`status`) VALUES("'.trim(addslashes($objArray['simId'])).'","'.trim(addslashes($objArray['recharge_type'])).'","'.trim(addslashes($objArray['recharge_amount'])).'","'.trim(addslashes($objArray['no_of_validity_days'])).'","'.trim(addslashes($objArray['validity_upto'])).'","'.trim(addslashes($objArray['recharge_date'])).'","'.trim(addslashes($objArray['created_date'])).'","'.trim(addslashes($objArray['created_time'])).'","'.trim(addslashes($objArray['created_by'])).'","1")';
  	 $this->ExecuteQuery($InsQuery3, 'insert');
	 
	*/
		
   }
	
} 

function InsertPhonePostpaidContent($objArray)
 { 
   global $objSmarty, $_POST;
    
   if(!$objArray['simId']){
    $objSmarty->assign('ErrorMessage', 'Sim Id should not be blank');
	return false;
	
   }elseif(!$objArray['bill_Date']) {
    $objSmarty->assign('ErrorMessage', 'Bill Date should not be blank');
	return false;
   }elseif(!$objArray['due_Date']){
    $objSmarty->assign('ErrorMessage', 'Due Date should not be blank');
	return false;
   }/*elseif(!$objArray['bill_Amount']){
    $objSmarty->assign('ErrorMessage', 'Bill Amount should not be blank');
	return false;
   }*//*elseif(!$objArray['paid_Amount']){
    $objSmarty->assign('ErrorMessage', 'Paid Amount should not be blank');
	return false;
   }*/elseif(!$objArray['paidDate']){
    $objSmarty->assign('ErrorMessage', 'Paid Date should not be blank');
	return false;
   }elseif(!$objArray['payment_Mode']){
    $objSmarty->assign('ErrorMessage', 'Payment Mode should not be blank');
	return false;
	}elseif(!$objArray['created_date']){
    $objSmarty->assign('ErrorMessage', 'Created Date should not be blank');
	return false;
   }elseif(!$objArray['created_time']){
    $objSmarty->assign('ErrorMessage', 'Created Time should not be blank');
	return false;
   }elseif(!$objArray['payment_Status']){
    $objSmarty->assign('ErrorMessage', 'Payment Status should not be blank');
	return false;
   }elseif(!$objArray['payment_ref']){
    $objSmarty->assign('ErrorMessage', 'Payment Ref should not be blank');
	return false;
   }
   
   if($objArray['simId']){
   $InsQuery2 = 'INSERT IGNORE INTO `arka_phone_postpaid_details`(`sim_id`,`customer_id`,`bill_date`,`due_date` ,`bill_amt`,`paid_amt` ,`paid_date`,`payment_mode` ,`created_date`,`created_time`,`payment_status` ,`payment_ref`,`status`) VALUES("'.trim(addslashes($objArray['simId'])).'","'.$_SESSION['CustomerId'].'","'.trim(addslashes($objArray['bill_Date'])).'","'.trim(addslashes($objArray['due_Date'])).'","'.trim(addslashes($objArray['bill_amount'])).'","'.trim(addslashes($objArray['totalpaid_amount'])).'","'.trim(addslashes($objArray['paidDate'])).'","'.trim(addslashes($objArray['payment_Mode'])).'","'.trim(addslashes($objArray['created_date'])).'","'.trim(addslashes($objArray['created_time'])).'","'.trim(addslashes($objArray['payment_Status'])).'","'.trim(addslashes($objArray['payment_ref'])).'","1")';
  	 $this->ExecuteQuery($InsQuery2, 'insert');
	// header('Location:' .$_SERVER['PHP_SELF'].'?sim_id='.$objArray['simId'].'&server_success=insert succeed');
	  header('Location: phoneReg.php');
	 }
	
} 

function InsertPhonePrepaidContent($objArray)
 {
   global $objSmarty, $_POST;
    
   if(!$objArray['simId']){ 
    $objSmarty->assign('ErrorMessage', 'Sim Id should not be blank');
	return false;
   }elseif(!$objArray['recharge_type']){
    $objSmarty->assign('ErrorMessage', 'Recharge Type should not be blank');
	return false;
   }elseif(!$objArray['recharge_amount']) {
    $objSmarty->assign('ErrorMessage', 'Recharge Amount should not be blank');
	return false;
   }elseif(!$objArray['no_of_validity_days']){
    $objSmarty->assign('ErrorMessage', 'No Of Validity Days should not be blank');
	return false;
   }elseif(!$objArray['valid_upto']){
    $objSmarty->assign('ErrorMessage', 'Valid Upto should not be blank');
	return false;
   }elseif(!$objArray['recharge_date']){
    $objSmarty->assign('ErrorMessage', 'Recharge Date should not be blank');
	return false;
   }
   if($objArray['simId']){
  $InsQuery3 = 'INSERT IGNORE INTO `arka_phone_prepaid_details`(`sim_id`,`customer_id`, `recharge_type` ,`recharge_amount`,`no_of_validity_days` ,`validity_upto`,`recharge_date` ,`created_date`,`created_time` ,`created_by` ,`status`) VALUES("'.trim(addslashes($objArray['simId'])).'","'.$_SESSION['CustomerId'].'","'.trim(addslashes($objArray['recharge_type'])).'","'.trim(addslashes($objArray['recharge_amount'])).'","'.trim(addslashes($objArray['no_of_validity_days'])).'","'.trim(addslashes($objArray['valid_upto'])).'","'.trim(addslashes($objArray['recharge_date'])).'","'.trim(addslashes($objArray['created_date'])).'","'.trim(addslashes($objArray['created_time'])).'","'.trim(addslashes($objArray['created_by'])).'","1")';
  	 $this->ExecuteQuery($InsQuery3, 'insert');
/*	header('Location:' .$_SERVER['PHP_SELF'].'?sim_id='.$objArray['simId'].'&server_success=insert succeed');
*/	  header('Location: phoneReg.php');
	 }
	
} 

	
function InsertPhonePrepaidRecharge($objArray)
 {
   global $objSmarty, $_POST;
    
   if(!$objArray['simId']){ 
    $objSmarty->assign('ErrorMessage', 'Sim Id should not be blank');
	return false;
   }elseif(!$objArray['recharge_type']){
    $objSmarty->assign('ErrorMessage', 'Recharge Type should not be blank');
	return false;
   }elseif(!$objArray['recharge_amount']) {
    $objSmarty->assign('ErrorMessage', 'Recharge Amount should not be blank');
	return false;
   }elseif(!$objArray['no_of_validity_days']){
    $objSmarty->assign('ErrorMessage', 'No Of Validity Days should not be blank');
	return false;
   }elseif(!$objArray['valid_upto']){
    $objSmarty->assign('ErrorMessage', 'Valid Upto should not be blank');
	return false;
   }elseif(!$objArray['recharge_date']){
    $objSmarty->assign('ErrorMessage', 'Recharge Date should not be blank');
	return false;
   }
 
  $InsQuery3 = 'INSERT  INTO `arka_phone_prepaid_details`(`sim_id`, `customer_id`,`recharge_type` ,`recharge_amount`,`no_of_validity_days` ,`validity_upto`,`recharge_date` ,`created_date`,`created_time` ,`created_by` ,`status`) VALUES("'.trim(addslashes($objArray['simId'])).'","'.$_SESSION['CustomerId'].'","'.trim(addslashes($objArray['recharge_type'])).'","'.trim(addslashes($objArray['recharge_amount'])).'","'.trim(addslashes($objArray['no_of_validity_days'])).'","'.trim(addslashes($objArray['valid_upto'])).'","'.trim(addslashes($objArray['recharge_date'])).'","'.trim(addslashes($objArray['created_date'])).'","'.trim(addslashes($objArray['created_time'])).'","'.trim(addslashes($objArray['created_by'])).'","1")';
  	 $this->ExecuteQuery($InsQuery3, 'insert');
   header('Location:'.$_SERVER['PHP_SELF'].'?simId='.$objArray['simId'].'&server_insert=insertsucceed');
	// header('Location: phone_prepaidDetails.php');

	
} 

//*************************************************************************************************************************************************
function ChkDupliPhone($mobileNo,$purchaseDate,$serviceNo){
  global $objSmarty;
  if(!empty($mobileNo) || !empty($purchaseDate) || !empty($serviceNo) )
 // $WhereClause	= ' AND `id` != '.$Ident;
 	if ($purchaseDate != "1@1.com" && $serviceNo !="R")
		{
 	  $SelQuery2   = 'SELECT * FROM `arka_phone_master` WHERE (`status` != "0") AND (`mobile_no` = "'.$mobileNo.'" OR `purchase_date` = "'.$purchaseDate.'" OR `service_no` = "'.$serviceNo.'") Limit 0,1';
  $PhoneDetail		= $this->ExecuteQuery($SelQuery2, 'select');
  		if((!empty($PhoneDetail)) && is_array($PhoneDetail))
  			 return false;
		else
	   return true;
	 	}
		elseif($purchaseDate == "1@1.com" && $serviceNo !="R")
		{
		$SelQuery2		= 'SELECT * FROM `arka_phone_master` WHERE (`status` != "0") AND (`mobile_no` = "'.$mobile_no.'" OR  `service_no` = "'.$serviceNo.'" ) Limit 0,1';
  		$PhoneDetail		= $this->ExecuteQuery($SelQuery2, 'select');
  		if((!empty($PhoneDetail)) && is_array($PhoneDetail))
  			 return false;
		else
	   return true;
		
		}
		elseif($purchaseDate != "1@1.com" && $serviceNo =="R")
		{
		$SelQuery2		= 'SELECT * FROM `arka_phone_master` WHERE (`status` != "0") AND (`mobile_no` = "'.$mobileNo.'" OR  `purchase_date` = "'.$purchaseDate.'" ) Limit 0,1';
  		$PhoneDetail		= $this->ExecuteQuery($SelQuery2, 'select');
  		if((!empty($PhoneDetail)) && is_array($PhoneDetail))
  			 return false;
		else
	   return true;
		
		}elseif($purchaseDate == "1@1.com" && $serviceNo =="R")
		{
		$SelQuery2		= 'SELECT * FROM ` arka_phone_master` WHERE (`status` != "0") AND (`mobile_no` = "'.$mobileNo.'" ) Limit 0,1';
  		$PhoneDetail		= $this->ExecuteQuery($SelQuery2, 'select');
  		if((!empty($PhoneDetail)) && is_array($PhoneDetail))
  			 return false;
		else
	   return true;
		
		}
		
 }
  /************************************************************************ Edit the Customer Details*******************************************/
  
  function EditPhone($objArray){ 
   global $objSmarty, $_POST;
    
   if(!$objArray['simId']){
    $objSmarty->assign('ErrorMessage','Sim Id should not be blank');
	return false;
   }elseif(!$objArray['simNo']){
    $objSmarty->assign('ErrorMessage','Sim No should not be blank');
	return false;
   }elseif(!$objArray['mobileNo']) {
    $objSmarty->assign('ErrorMessage','Mobile No should not be blank');
	return false;
   }elseif(!$objArray['serviceNo']){
    $objSmarty->assign('ErrorMessage', 'Service No should not be blank');
	return false;
   }elseif(!$objArray['network']){
    $objSmarty->assign('ErrorMessage', 'Network should not be blank');
	return false;
   }elseif(!$objArray['validity']){
    $objSmarty->assign('ErrorMessage', 'Validity should not be blank');
	return false;
   }elseif(!$objArray['simType']){
    $objSmarty->assign('ErrorMessage', 'Sim Type should not be blank');
	return false;
   }elseif(!$objArray['circle']){
    $objSmarty->assign('ErrorMessage', 'Circle  should not be blank');
	return false;
   }elseif(!$objArray['purpose']){
    $objSmarty->assign('ErrorMessage', 'Purpose  should not be blank');
	return false;
   }elseif(!$objArray['id_proof_name']){
    $objSmarty->assign('ErrorMessage', 'Id Proof Name should not be blank');
	return false;
   } elseif(!$objArray['purchaseDate']){
    $objSmarty->assign('ErrorMessage', 'Purchase Date should not be blank');
	return false;
   }elseif(!$objArray['plan_name']){
    $objSmarty->assign('ErrorMessage', 'plan_name should not be blank');
	return false;
   }
   if($objArray['simId']){
   	$UpQuery1 = 'UPDATE `arka_phone_master` SET `sim_id` = "'.trim($objArray['simId']).'",`customer_id`="'.$_SESSION['CustomerId'].'",`sim_no` = "'.trim($objArray['simNo']).'",`service_no` = "'.trim($objArray['serviceNo']).'",`mobile_no` = "'.trim($objArray['mobileNo']).'",`network` = "'.trim($objArray['network']).'",`validity` = "'.trim($objArray['validity']).'",`sim_type` = "'.trim($objArray['simType']).'",`circle` = "'.trim($objArray['circle']).'",`purpose` = "'.trim($objArray['purpose']).'",`id_proof_name` = "'.trim($objArray['id_proof_name']).'",`purchase_date` = "'.trim($objArray['purchaseDate']).'",`plan_name` = "'.trim($objArray['plan_name']).'",`modify_by` = "'.trim($objArray['modifyBy']).'",`modify_time` = "'.trim($objArray['modifyTime']).'",`modify_date` = "'.trim($objArray['modifyDate']).'" WHERE `sim_id` = "'.trim($objArray['simId']).'"';
	$this->ExecuteQuery($UpQuery1, 'update');
	 header('Location:' .$_SERVER['PHP_SELF'].'?simId='.$objArray['simId'].'&server_success=update succeed');	

   }
  }
  
  
 function EditPhonePostpaid($objArray){ 
   global $objSmarty, $_POST;
    
   if(!$objArray['simId']){
    $objSmarty->assign('ErrorMessage','Sim Id should not be blank');
	return false;
   }/*elseif(!$objArray['sim_no']){
    $objSmarty->assign('ErrorMessage','Sim No should not be blank');
	return false;
   }*//*elseif(!$objArray['mobileNo']) {
    $objSmarty->assign('ErrorMessage','Mobile No should not be blank');
	return false;
   }elseif(!$objArray['serviceNo']){
    $objSmarty->assign('ErrorMessage', 'Service No should not be blank');
	return false;
   }elseif(!$objArray['network']){
    $objSmarty->assign('ErrorMessage', 'Network should not be blank');
	return false;
   }elseif(!$objArray['validity']){
    $objSmarty->assign('ErrorMessage', 'Validity should not be blank');
	return false;
   }elseif(!$objArray['simType']){
    $objSmarty->assign('ErrorMessage', 'Sim Type should not be blank');
	return false;
   }elseif(!$objArray['circle']){
    $objSmarty->assign('ErrorMessage', 'Circle  should not be blank');
	return false;
   }elseif(!$objArray['purpose']){
    $objSmarty->assign('ErrorMessage', 'Purpose  should not be blank');
	return false;
   }elseif(!$objArray['id_proof_name']){
    $objSmarty->assign('ErrorMessage', 'Id Proof Name should not be blank');
	return false;
   } elseif(!$objArray['purchaseDate']){
    $objSmarty->assign('ErrorMessage', 'Purchase Date should not be blank');
	return false;
   }elseif(!$objArray['plan_name']){
    $objSmarty->assign('ErrorMessage', 'plan_name should not be blank');
	return false;
   }*/elseif(!$objArray['bill_Date']){
    $objSmarty->assign('ErrorMessage', 'Bill Date should not be blank');
	return false;
   }elseif(!$objArray['due_Date']){
    $objSmarty->assign('ErrorMessage', 'Due Date should not be blank');
	return false;
   }elseif(!$objArray['bill_Amount']){
    $objSmarty->assign('ErrorMessage', 'Bill Amount should not be blank');
	return false;
   }elseif(!$objArray['paid_Amount']){
    $objSmarty->assign('ErrorMessage', 'Paid Amount should not be blank');
	return false;
   }elseif(!$objArray['paid_Date']){
    $objSmarty->assign('ErrorMessage', 'Paid Date should not be blank');
	return false;
   }elseif(!$objArray['payment_Mode']){
    $objSmarty->assign('ErrorMessage', 'Payment Mode should not be blank');
	return false;
	}elseif(!$objArray['modifyDate']){
    $objSmarty->assign('ErrorMessage', 'Modify Date should not be blank');
	return false;
   }elseif(!$objArray['modifyTime']){
    $objSmarty->assign('ErrorMessage', 'Modify Time should not be blank');
	return false;
   }elseif(!$objArray['payment_Status']){
    $objSmarty->assign('ErrorMessage', 'Payment Status should not be blank');
	return false;
   }elseif(!$objArray['payment_Ref']){
    $objSmarty->assign('ErrorMessage', 'Payment_Ref should not be blank');
	return false;
   }
   if($objArray['simId']){
  	$UpQuery1 = 'UPDATE `arka_phone_master` SET `sim_id` = "'.trim($objArray['simId']).'",`customer_id` = "'.$_SESSION['CustomerId'].'",`sim_no` = "'.trim($objArray['sim_no']).'",`service_no` = "'.trim($objArray['serviceNo']).'",`mobile_no` = "'.trim($objArray['mobileNo']).'",`network` = "'.trim($objArray['network']).'",`validity` = "'.trim($objArray['validity']).'",`sim_type` = "'.trim($objArray['simType']).'",`circle` = "'.trim($objArray['circle']).'",`purpose` = "'.trim($objArray['purpose']).'",`id_proof_name` = "'.trim($objArray['id_proof_name']).'",`purchase_date` = "'.trim($objArray['purchaseDate']).'",`plan_name` = "'.trim($objArray['plan_name']).'",`modify_by` = "'.trim($objArray['modifyBy']).'",`modify_time` = "'.trim($objArray['modifyTime']).'",`modify_date` = "'.trim($objArray['modifyDate']).'" WHERE `sim_id` = "'.trim($objArray['simId']).'"';
	$this->ExecuteQuery($UpQuery1, 'update');

  	$UpQuery2 = 'UPDATE `arka_phone_postpaid_details` SET `sim_id` = "'.trim($objArray['simId']).'",`customer_id`="'.$_SESSION['CustomerId'].'",`bill_date` = "'.trim($objArray['bill_Date']).'", `due_date` = "'.trim($objArray['due_Date']).'",`bill_amt` = "'.trim($objArray['bill_Amount']).'",`paid_amt` = "'.trim($objArray['paid_Amount']).'",`paid_date` = "'.trim($objArray['paid_Date']).'",`payment_mode` = "'.trim($objArray['payment_Mode']).'",`payment_status` = "'.trim($objArray['payment_Status']).'",`payment_ref` = "'.trim($objArray['payment_Ref']).'" WHERE `sim_id` = "'.trim($objArray['simId']).'"';
	$this->ExecuteQuery($UpQuery2, 'update');
 header('Location:' .$_SERVER['PHP_SELF'].'?sim_id='.$objArray['simId'].'&server_success=update succeed');	

   }
   }
   
   function EditPhonePrepaid($objArray){ 
   global $objSmarty, $_POST;
    
   if(!$objArray['simId']){
    $objSmarty->assign('ErrorMessage','Sim Id should not be blank');
	return false;
   }elseif(!$objArray['simNo']){
    $objSmarty->assign('ErrorMessage','Sim No should not be blank');
	return false;
   }elseif(!$objArray['mobileNo']) {
    $objSmarty->assign('ErrorMessage','Mobile No should not be blank');
	return false;
   }elseif(!$objArray['serviceNo']){
    $objSmarty->assign('ErrorMessage', 'Service No should not be blank');
	return false;
   }elseif(!$objArray['network']){
    $objSmarty->assign('ErrorMessage', 'Network should not be blank');
	return false;
   }elseif(!$objArray['validity']){
    $objSmarty->assign('ErrorMessage', 'Validity should not be blank');
	return false;
   }elseif(!$objArray['simType']){
    $objSmarty->assign('ErrorMessage', 'Sim Type should not be blank');
	return false;
   }elseif(!$objArray['circle']){
    $objSmarty->assign('ErrorMessage', 'Circle  should not be blank');
	return false;
   }elseif(!$objArray['purpose']){
    $objSmarty->assign('ErrorMessage', 'Purpose  should not be blank');
	return false;
   }elseif(!$objArray['id_proof_name']){
    $objSmarty->assign('ErrorMessage', 'Id Proof Name should not be blank');
	return false;
   } elseif(!$objArray['purchaseDate']){
    $objSmarty->assign('ErrorMessage', 'Purchase Date should not be blank');
	return false;
   }elseif(!$objArray['plan_name']){
    $objSmarty->assign('ErrorMessage', 'plan_name should not be blank');
	return false;
   }elseif(!$objArray['recharge_type']){
    $objSmarty->assign('ErrorMessage', 'Recharge Type should not be blank');
	return false;
   }elseif(!$objArray['recharge_amount']) {
    $objSmarty->assign('ErrorMessage', 'Recharge Amount should not be blank');
	return false;
   }elseif(!$objArray['no_of_validity_days']){
    $objSmarty->assign('ErrorMessage', 'No Of Validity Days should not be blank');
	return false;
   }elseif(!$objArray['valid_upto']){
    $objSmarty->assign('ErrorMessage', 'Valid Upto should not be blank');
	return false;
   }elseif(!$objArray['recharge_date']){
    $objSmarty->assign('ErrorMessage', 'Recharge Date should not be blank');
	return false;
   }
   if($objArray['simId']){
   	$UpQuery1 = 'UPDATE `arka_phone_master` SET `sim_id` = "'.trim($objArray['simId']).'",`customer_id`="'.$_SESSION['CustomerId'].'",`sim_no` = "'.trim($objArray['simNo']).'",`service_no` = "'.trim($objArray['serviceNo']).'", `mobile_no` = "'.trim($objArray['mobileNo']).'",`network` = "'.trim($objArray['network']).'",`validity` = "'.trim($objArray['validity']).'",`sim_type` = "'.trim($objArray['simType']).'",`circle` = "'.trim($objArray['circle']).'",`purpose` = "'.trim($objArray['purpose']).'",`id_proof_name` = "'.trim($objArray['id_proof_name']).'",`purchase_date` = "'.trim($objArray['purchaseDate']).'",`plan_name` = "'.trim($objArray['plan_name']).'",`modify_by` = "'.trim($objArray['modifyBy']).'",`modify_time` = "'.trim($objArray['modifyTime']).'",`modify_date` = "'.trim($objArray['modifyDate']).'" WHERE `sim_id` = "'.trim($objArray['simId']).'"';
	$this->ExecuteQuery($UpQuery1, 'update');

  	$UpQuery2 = 'UPDATE `arka_phone_prepaid_ details` SET `sim_id` = "'.trim($objArray['simId']).'",`customer_id`="'.$_SESSION['CustomerId'].'"`recharge_type` = "'.trim($objArray['recharge_type']).'",`recharge_amount` = "'.trim($objArray['recharge_amount']).'", `no_of_validity_days` = "'.trim($objArray['no_of_validity_days']).'",`validity_upto` = "'.trim($objArray['valid_upto']).'",`recharge_date` = "'.trim($objArray['recharge_date']).'",`modify_by` = "'.trim($objArray['modifyBy']).'",`modify_time` = "'.trim($objArray['modifyTime']).'",`modify_date` = "'.trim($objArray['modifyDate']).'" WHERE `sim_id` = "'.trim($objArray['simId']).'"';
	$this->ExecuteQuery($UpQuery2, 'update');
 header('Location:' .$_SERVER['PHP_SELF'].'?simId='.$objArray['simId'].'&server_success=update succeed');	

   }
   }

//****************************************************************************************************************************************************

function GetPhonePostpaidList($objArray='')  { 
		global $objSmarty;

		if($_SESSION['CustomerId'] == 'CUS1001')
		{
		 $SelQuery = 'SELECT arka_phone_master.*, arka_phone_postpaid_details.*FROM `arka_phone_master` ,`arka_phone_postpaid_details` WHERE arka_phone_master.status ="1" AND arka_phone_master.sim_id= arka_phone_postpaid_details.sim_id ';
		 /* $SelQuery = 'SELECT arka_phone_master.*, arka_phone_postpaid_details.*,FROM `arka_phone_master` ,`arka_phone_postpaid_details` WHERE arka_phone_master.status ="1" AND arka_phone_master.sim_id= arka_phone_postpaid_details.sim_id';*/
		 }
		else
		{
		 $SelQuery = 'SELECT arka_phone_master.*, arka_phone_postpaid_details.*FROM `arka_phone_master` ,`arka_phone_postpaid_details` WHERE arka_phone_master.status ="1" AND arka_phone_master.sim_id= arka_phone_postpaid_details.sim_id AND arka_phone_postpaid_details.customer_id="'.$_SESSION['CustomerId'].'"' ;
		 }
		$PostpaidList		= $this->ExecuteQuery($SelQuery, "select");
        $objSmarty->assign('PostpaidList', $PostpaidList);
				

	
		
	}	
	function GetPhonePrepaidList($objArray='')  { 
		global $objSmarty;

		if($_SESSION['CustomerId'] == 'CUS1001')
		{
	 $SelQuery = 'SELECT arka_phone_master.*, arka_phone_prepaid_details.*FROM `arka_phone_master` ,`arka_phone_prepaid_details` WHERE arka_phone_master.status ="1" AND arka_phone_master.sim_id= arka_phone_prepaid_details.sim_id';
		 /* $SelQuery = 'SELECT arka_phone_master.*, arka_phone_postpaid_details.*,FROM `arka_phone_master` ,`arka_phone_postpaid_details` WHERE arka_phone_master.status ="1" AND arka_phone_master.sim_id= arka_phone_postpaid_details.sim_id';*/
		 }
		else
		{
		 $SelQuery = 'SELECT arka_phone_master.*, arka_phone_prepaid_details.*FROM `arka_phone_master` ,`arka_phone_prepaid_details` WHERE arka_phone_master.status ="1" AND arka_phone_master.sim_id= arka_phone_prepaid_details.sim_id AND arka_phone_prepaid_details.customer_id="'.$_SESSION['CustomerId'].'"' ;
		 }
		$PrepaidList		= $this->ExecuteQuery($SelQuery, "select");
        $objSmarty->assign('PrepaidList', $PrepaidList);
				

	
		
	}	
function GetPhonePrepaidDetails($objArray='')  {
		global $objSmarty;
		$SelQuery = 'SELECT * FROM `arka_phone_master` WHERE sim_id="'.$_GET['simId'].'" ' ;
		$PageList		= $this->ExecuteQuery($SelQuery, "select");
        $objSmarty->assign('PageList', $PageList);
		
		
	}	
	function GetPhonePostpaidGET($objArray='')  {
		global $objSmarty;
		$SelQuery5 = 'SELECT * FROM `arka_phone_master` WHERE sim_id="'.$_GET['simId'].'" AND sim_type ="Postpaid"' ;
		$PageList5		= $this->ExecuteQuery($SelQuery5, "select");
        $objSmarty->assign('PageList5', $PageList5);
		
		
	}	

	function GetprepaidDetails($objArray='')  {
		global $objSmarty;
		$SelQuery = 'SELECT * FROM `arka_phone_prepaid_details` WHERE sim_id="'.$_GET['simId'].'" AND status ="1" ' ;
		$PrepaidList1		= $this->ExecuteQuery($SelQuery, "select");
        $objSmarty->assign('PrepaidList1', $PrepaidList1);
		//print_r($PrepaidList1);
		return $PrepaidList1;
	}	
	function GetPhonePostpaidDetails($objArray='')  {
		global $objSmarty;
		 $SelQuery = 'SELECT arka_phone_master.*, arka_phone_postpaid_details.* FROM `arka_phone_master` ,`arka_phone_postpaid_details` WHERE arka_phone_master.sim_id="'.$_GET['simId'].'" AND  arka_phone_postpaid_details.sim_id= arka_phone_master.sim_id' ;
		$PageList2		= $this->ExecuteQuery($SelQuery, "select");
        $objSmarty->assign('PageList2', $PageList2);
				
	
		
	}	
	function GetPhonePaymentLists($objArray='')  {
		global $objSmarty;
		$phno = $_GET["simId"];
//********************************************************************Check the current date*********************************************
		$SelQuery = 'SELECT * FROM `arka_phone_postpaid_details` WHERE month(due_date) = month(curdate()) AND year(due_date)= year(curdate()) AND sim_id= "'.$_GET["simId"].'"';
		$RecordList		= $this->ExecuteQuery($SelQuery, "select");
		 $total_records = count($RecordList);
		 if ( ($total_records > 0) )  {
		// echo("Due Date not in current month");
		 }
		 elseif ( ($total_records == 0) )
		 {
		 	
			// echo ("No Records");   
		 	 $SelQuery1 = 'SELECT max(sl_no) as sno, max(bill_date) as b_date, max(due_date) as d_date FROM `arka_phone_postpaid_details` WHERE sim_id = "'.$_GET["simId"].'"';
			$MaxRecord		= $this->ExecuteQuery($SelQuery1, "select");
			$tot_records = count($MaxRecord);
		 //	echo ($MaxRecord[0]['sno']);
			 $b_dt = $MaxRecord[0]['b_date'];
			 $d_dt = $MaxRecord[0]['d_date'];
			 
			if ($d_dt <= date("Y-m-d"))
			{
	       $InsQuery = 'INSERT INTO `arka_phone_postpaid_details`(`sim_id`, `bill_date`,`due_date`,`payment_mode`,`payment_status`,`payment_ref`,`status`) VALUES("'.$phno.'",DATE_ADD("'.$b_dt.'", INTERVAL 1 MONTH),DATE_ADD("'.$d_dt.'", INTERVAL 1 MONTH),"NA","Pending","NA","1")';
  	 		$this->ExecuteQuery($InsQuery, 'insert');
			$UpQuery = 'UPDATE `arka_phone_master` SET `bill_date`= DATE_ADD("'.$b_dt.'", INTERVAL 1 MONTH),`due_date`= DATE_ADD("'.$d_dt.'", INTERVAL 1 MONTH),`payment_status`="Pending" WHERE sim_id ="'.$_GET["simId"].'"';
  	 		$this->ExecuteQuery($UpQuery, 'insert');
			}		
		
		 }
		
		 $SelQuery2 = 'SELECT arka_phone_master.*,arka_phone_postpaid_details.* FROM `arka_phone_master`, `arka_phone_postpaid_details` WHERE arka_phone_master.sim_id="'.$_GET["simId"].'" AND arka_phone_master.sim_id=arka_phone_postpaid_details.sim_id AND arka_phone_postpaid_details.sim_id=arka_phone_master.sim_id ORDER BY arka_phone_postpaid_details.bill_date DESC';
		//echo $SelQuery;
		$DList		= $this->ExecuteQuery($SelQuery2, "select");
		  $objSmarty->assign('DList', $DList);
          // print_r($DList);
		 return $DList;
  
		
		
	}	

 
 
	function GetPostpaidDetails($objArray='')  {
		global $objSmarty;
		$SelQuery = 'SELECT * FROM `arka_phone_postpaid_details` WHERE sim_id="'.$_GET['sim_id'].'" AND status ="1" '  ;
		$PostpaidList		= $this->ExecuteQuery($SelQuery, "select");
        $objSmarty->assign('PostpaidList', $PostpaidList);
	
	}
	function GetPhonePostpaidDetailsMaster($objArray='')  {
		global $objSmarty;
		 $SelQuery5 = 'SELECT arka_phone_master.*, arka_phone_postpaid_details.* FROM `arka_phone_master` ,`arka_phone_postpaid_details` WHERE arka_phone_master.sim_id="'.$_GET['sim_id'].'" AND  arka_phone_postpaid_details.sim_id= arka_phone_master.sim_id' ;
		$PageList5		= $this->ExecuteQuery($SelQuery5, "select");
        $objSmarty->assign('PageList5', $PageList5);
				
	
		
	}		
function DeleteID($id)
{
  global $objSmarty;
  $DelQuery = 'update  `arka_phone_master`  set `status`= 0 WHERE  `sim_id`="'.$_GET['simId'].'" '; 
  $this->ExecuteQuery($DelQuery, 'delete');
  $objSmarty->assign('SuccessMessage', 'Deleted Successfully');
}
 function DeleteID2($CatIdent,$SoIdent){
  global $objSmarty;
 $DelQuery2 = 'update  `arka_phone_prepaid_details`  set `status`= 0 WHERE  `sim_id`="'.$_GET['simId'].'" AND sl_no="'.$_GET['sno'].'" '; 
  $this->ExecuteQuery($DelQuery2, 'delete');
  header('Location:' .$_SERVER['PHP_SELF'].'?simId='.$_GET['simId'].'&server_response=success');	
 // $objSmarty->assign('SuccessMessage', 'Deleted Successfully');
 }
 
 /* Get the Static Content list */
 	function GetPhone($objArray='')  {
		global $objSmarty;
		$objSmarty->assign('network',$_GET["network"]);
		 $SelQuery2 = 'SELECT arka_phone_master.* FROM `arka_phone_master` WHERE arka_phone_master.network="'.$_GET["network"].'"';
		$PageList2		= $this->ExecuteQuery($SelQuery2, "select");
		 if(!empty($LDList) && is_array($LDList))
  	 foreach($PageList2 as $key=>$value){
	 	//echo "Hi";
    	$PageList2[$key]['network'] = stripslashes($PageList2[$key]['network']);
		$PageList2[$key]['service_provider'] = stripslashes($PageList2[$key]['service_provider']);
		//$PageList2[$key]['next_bill_date'] = stripslashes($PageList2[$key]['next_bill_date']);
		//$PageList2[$key]['last_bill_payment_status'] = stripslashes($PageList2[$key]['last_bill_payment_status']);
		$objSmarty->assign('PageList2', $PageList2);
 	 	return $PageList2;
		}
	
	}	
	
	
	/* Get the Device Payment Details list */
 	function GetPhonePayments($objArray='')  {
		global $objSmarty;
		
		// $SelQuery5 = 'SELECT arka_phone_master.*, arka_phone_postpaid_details.* FROM `arka_phone_master` ,`arka_phone_postpaid_details` WHERE arka_phone_master.sim_id="'.$_GET['sim_id'].'" AND  arka_phone_postpaid_details.sim_id= arka_phone_master.sim_id' ;
	 $SelQuery3 = 'SELECT * FROM arka_phone_postpaid_details WHERE  sim_id ="'.$_GET["simId"].'" AND bill_amt="0" ';
		//$SelQuery3 = 'SELECT arka_phone_master.*,arka_phone_postpaid_details.* FROM `arka_phone_master`,`arka_phone_postpaid_details` WHERE arka_phone_master.network ="'.$_GET['network'].'" AND arka_phone_postpaid_details.payment_status="Pending" AND arka_phone_postpaid_details.sim_id="'.$_GET['simId'].'"';
		$DPList1		= $this->ExecuteQuery($SelQuery3, "select");
		$objSmarty->assign('DPList1', $DPList1);
		return $DPList1;

	}	
	
	 /* Pay Device Amount, Payment status for the Static Pages */
 function GetProcessPayments($objArray=''){
  global $objSmarty;
   if(!empty($objArray['ConId']) && is_array($objArray['ConId']))
   {
   		

      foreach ($objArray['ConId'] as $Ids){
		   if($Ids)
		   {
		   		 // echo $paid_amt = trim(addslashes($objArray['paying_amt']));
				$pay_amnt = $objArray['pay_amts'];
				$SelQuery4	= 'SELECT * FROM `arka_phone_postpaid_details` WHERE sl_no = "'.$Ids.'" Limit 0,1';
	   			$PayDetails	= $this->ExecuteQuery($SelQuery4, 'select');
				$objSmarty->assign('PayDetails', $PayDetails);
				
					   $bill_amt = stripslashes($PayDetails[0]['bill_amt']);
					   $paid_amt = stripslashes($PayDetails[0]['paid_amt']);
				       $var=$objArray['pay_amts'] + $paid_amt;
					   $payment_due = $bill_amt-$var;
					   $d_p_amt = $d_p_amt + $d_pay_amnt;					   
					    if($payment_due<=0)
			   				$p_status ="Paid";
						else
							$p_status ="Pending";
					   $objSmarty->assign('bill_amt', $bill_amt);
					   $objSmarty->assign('payment_due', $payment_due);
					   $objSmarty->assign('p_status', $p_status);
			 
				$UpQuery = 'UPDATE `arka_phone_postpaid_details` SET `paid_amt` = "'.$var.'",`paid_date` = "'.trim(addslashes($objArray['paid_date'])).'",`payment_mode` = "'.trim(addslashes($objArray['pay_mode'])).'",`payment_ref` = "'.trim(addslashes($objArray['p_ref_no'])).'",`pending_amt` = "'.$payment_due.'",`payment_status` = "'.$p_status.'" WHERE sl_no="'.$Ids.'"' ;
					$this->ExecuteQuery($UpQuery, 'update');
					}
  			 }
					header('Location:' .$_SERVER['PHP_SELF'].'?simId='.$_GET['simId'].'&succs_msg_for_insert2');
					// $objSmarty->assign('SuccessMessage', 'Payment Transcation Successfully Completed');
			
}
  	else
   $objSmarty->assign('ErrorMessage', 'No Mobile Number Selected');
		}
 
 
 
 
//*************************************************************************************************************
 function RolesLists(){
	global $objSmarty;
	 $SelQuery1	= 'SELECT * FROM arka_group_mapping WHERE `group_name` = "'.$_SESSION['USER_GROUP'].'" AND `record_status` <> 0 ORDER BY sl_no';
	  $RList		= $this->ExecuteQuery($SelQuery1, "select");
		
  if(!empty($RList) && is_array($RList))
   foreach($RList as $key=>$value){
    $RList[$key]['role_id'] = stripslashes($RList[$key]['role_id']);
	$RList[$key]['role_name'] = stripslashes($RList[$key]['role_name']);
	$objSmarty->assign('RList', $RList);
  return $RList;
		} 
	}
//******************************************************************************************************************
/* function DeleteID($id){
  global $objSmarty;
  $DelQuery = 'DELETE FROM `arka_phone_master`,`arka_phone_details` WHERE `sim_id`='.$sim_id; 
  $this->ExecuteQuery($DelQuery, 'delete');
  $objSmarty->assign('SuccessMessage', 'Deleted Successfully');
 }*/
 
 function GetPhonepaymentList($objArray='')  { 
		global $objSmarty;
		if($_SESSION['CustomerId'] == 'CUS1001')
		{ 
		
	 $SelQuery = 'SELECT arka_phone_master.*, arka_phone_postpaid_details.*FROM `arka_phone_master` ,`arka_phone_postpaid_details` WHERE arka_phone_master.status ="1" AND arka_phone_master.sim_id= arka_phone_postpaid_details.sim_id AND arka_phone_postpaid_details.payment_status	= "Pending" AND arka_phone_master.sim_id="'.$_GET["simId"].'"'; 
		 } 
		else
		{
		 $SelQuery = 'SELECT arka_phone_master.*, arka_phone_postpaid_details.*FROM `arka_phone_master` ,`arka_phone_postpaid_details` WHERE arka_phone_master.status ="1" AND arka_phone_master.sim_id= arka_phone_postpaid_details.sim_id AND arka_phone_postpaid_details.payment_status	= "Pending" AND arka_phone_postpaid_details.customer_id="'.$_SESSION['CustomerId'].'"' ;
		 }
		
		$PageList1		= $this->ExecuteQuery($SelQuery, "select");
        $objSmarty->assign('PageList1', $PageList1);
				

	
		
	}	
	
	/* Get the Static Content list */
 function GetPhonePayment($objArray='')  {
  global $objSmarty;

  //$objSmarty->assign('title',$_GET['title']);
  $whereClause = ' order by sim_id';
   if($_POST['search'] == ''){
          /* if($_POST['mobile_no'])
	   			$whereClause = ' WHERE (`mobile_no` like "%'.$_POST['mobile_no'].'%")';*/
		  if($_POST['bill_date'])
	   			$whereClause = ' WHERE (`bill_date` like "%'.$_POST['bill_date'].'%")';
  			elseif($_POST['due_date'])
	   			$whereClause = ' WHERE (`due_date` like "%'.$_POST['due_date'].'%")';
   			elseif($_POST['bill_amt'])
	   			$whereClause = ' WHERE (`bill_amt` like "%'.$_POST['bill_amt'].'%")';
			elseif($_POST['paid_amt'])
	   			$whereClause = ' WHERE (`paid_amt` like "%'.$_POST['paid_amt'].'%")';
			
			$objSmarty->assign('SName',$_POST['bill_date']);
     
  }
   $SelQuery		= 'SELECT * FROM `arka_phone_postpaid_details` WHERE status="1"'.$whereClause;
  $listing_split = new MsplitPageResults($SelQuery, $this->Limit);
  if ( ($listing_split->number_of_rows > 0) )  {
   $objSmarty->assign('LinkPage',$listing_split->display_count(TEXT_DISPLAY_NUMBER_OF_RESULT));
   $objSmarty->assign('PerPageNavigation',TEXT_RESULT_PAGE1 . ' ' . $listing_split->display_links($this->Limit, get_all_get_params(array('page', 'info', 'x', 'y')))); 
   $PageList = $this->ExecuteQuery($listing_split->sql_query, 'selectassoc');
  }
 /* if(!empty($PageList) && is_array($PageList))

   foreach($PageList as $key=>$value){
    $PageList[$key]['CName'] = stripslashes($PageList[$key]['State_Name']);
   }
*/
  $objSmarty->assign('i', $listing_split->i);
  $objSmarty->assign('PageList', $PageList);
  return $PageList;
 
}

 /* Pay Device Amount, Payment status for the Static Pages */
/* function GetProcessPayments($objArray){
 
  global $objSmarty;
   if(!empty($objArray['ConId']) && is_array($objArray['ConId']))
   {
   		

      foreach ($objArray['ConId'] as $Ids){
		   if($Ids)
		   {		//echo $Ids;
		   		 //echo $paid_amt = trim(addslashes($objArray['paying_amt']));exit;
				$pay_amts = $objArray[$Ids];
				$SelQuery4	= 'SELECT * FROM `arka_phone_postpaid_details` WHERE sl_no = "'.$Ids.'" Limit 0,1';
	   			$PayDetails	= $this->ExecuteQuery($SelQuery4, 'select');
					   $bill_amt = stripslashes($PayDetails[0]['bill_amt']);
					   //echo $bill_amt;
					 $paid_amt = stripslashes($PayDetails[0]['paid_amt']);
					   $payment_due = $bill_amt-$paid_amt;
					   //echo $payment_due;exit;
					 //  $d_p_amt = $d_p_amt + $d_pay_amnt;					   
					    if($payment_due<=0)
			   				$p_status ="Paid";
						else
							$p_status ="Pending";
					   $objSmarty->assign('bill_amt', $bill_amt);
					   $objSmarty->assign('pending_amt', $pending_amt);
					   $objSmarty->assign('p_status', $p_status);
			 
					 $UpQuery = 'UPDATE `arka_phone_postpaid_details` SET `paid_amt` = "'.$pay_amts.'",`paid_date` = "'.trim(addslashes($objArray['paid_date'])).'",`payment_mode` = "'.trim(addslashes($objArray['pay_mode'])).'",`payment_ref` = "'.trim(addslashes($objArray['p_ref_no'])).'",`status` = "'.$p_status.'" WHERE sl_no="'.$Ids.'"' ;
					$this->ExecuteQuery($UpQuery, 'update');
					}
  			 }
					header('Location:' .$_SERVER['PHP_SELF'].'?succs_msg_for_insert');
					 //$objSmarty->assign('SuccessMessage', 'Payment Transcation Successfully Completed');
			
}
  	else
   $objSmarty->assign('ErrorMessage', 'No Mobile Number Selected');
		}*/

	
	
		
 
}

?>
