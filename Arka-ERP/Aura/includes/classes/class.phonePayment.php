<?php
#####Class For Adding Content Management ######
class phonePayment extends MysqlFns{
 
 /* class constructor */
 function phonePayment(){
 $this->LDDisplayPath= $config['SiteGlobalPath']."class.phonePayment.php";
  global $config;
  global $objSmarty;
  $this->MysqlFns();
  $this->Limit = 20;
   $this->Keyword = '';
  $this->Operator = '';
  $this->PerPage = '';
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




/* Get the Device Payment Details list */
 	function GetPhonePaymentDetails($objArray='')  {
		global $objSmarty;
		$whereClause ='';
		$objSmarty->assign('sim_id',$_GET["sim_id"]);
		$SelQuery3 = 'SELECT * FROM `arka_phone_postpaid_details` WHERE arka_phone_postpaid_details.sim_id ="'.$_GET["sim_id"].'" AND payment_status="Pending"';
		$PageList		= $this->ExecuteQuery($SelQuery3, "select");
		 if(!empty($PageList) && is_array($PageList))
  	 foreach($PageList as $key=>$value){
    	$PageList[$key]['paid_amt'] = stripslashes($DPList[$key]['paid_amt']);
		$PageList[$key]['bill_amt'] = stripslashes($DPList[$key]['bill_amt']);
		$objSmarty->assign('PageList', $PageList);
 	 return $PageList;
		}
	
	}	
	
	 /* Pay Device Amount, Payment status for the Static Pages */
 function GetProcessPayments($objArray){
 
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
		}
		
	function GetPhonepaymentList($objArray='')  { 
		global $objSmarty;

		if($_SESSION['CustomerId'] == 'CUS1001')
		{
		 $SelQuery = 'SELECT arka_phone_master.*, arka_phone_postpaid_details.*FROM `arka_phone_master` ,`arka_phone_postpaid_details` WHERE arka_phone_master.status ="1" AND arka_phone_master.sim_id= arka_phone_postpaid_details.sim_id AND arka_phone_master.mobile_no="'.$_GET["mobile_no"].'" ';
		 }
		/*else
		{
		 $SelQuery = 'SELECT arka_phone_master.*, arka_phone_postpaid_details.*FROM `arka_phone_master` ,`arka_phone_postpaid_details` WHERE arka_phone_master.status ="1" AND arka_phone_master.sim_id= arka_phone_postpaid_details.sim_id AND customer_id="'.$_SESSION['CustomerId'].'"' ;
		 }*/
		
		$PageList1		= $this->ExecuteQuery($SelQuery, "select");
        $objSmarty->assign('PageList1', $PageList1);
				

	
		
	}		
 
}

?>


