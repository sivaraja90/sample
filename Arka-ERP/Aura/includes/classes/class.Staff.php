<?php
	/*	Class Function for Admin	*/
	class Staff extends MysqlFns
	{
	static $Gname,$Uid,$Cid; 
	/* class constructor */
	function Staff(){
	include_once "class.split_page_results.php";
	  $this->MysqlFns();
	 /*  $this->GetCustomerCount();
	    $this->GetFollowupCount();
		 $this->GetDemoCount();
		 $this->GetQuoteCount();
		 $this->GetViewedCustomers();
		 $this->GetRemarksCount();
		 
		 
	$cus_name_cmp_name = "comp_cus_name.txt";
	$uploadpath = $config['QuotePath'];
	$myfile7 = fopen($cus_name_cmp_name, "w") or die("Unable to open file!");
	$SelQuery7	= 'SELECT name_of_caller,company_name FROM `prime_customer_reg_master` WHERE status="1"';
   	$CusNameList	= $this->ExecuteQuery($SelQuery7, 'select');
	if(!empty($CusNameList) && is_array($CusNameList))
			foreach($CusNameList as $key=>$value)
			{
				$CusNameList[$key]['CallerName'] = stripslashes($CusNameList[$key]['name_of_caller']);
				$CusNameList[$key]['Comp_Name'] = stripslashes($CusNameList[$key]['company_name']);
				$caller = $caller.$CusNameList[$key]['CallerName'].",".$CusNameList[$key]['CallerName']."[".$CusNameList[$key]['Comp_Name']."]".",".$CusNameList[$key]['Comp_Name'].",";
			}
	fwrite($myfile7, $caller);
	fclose($myfile7);		 
	*/	 
		 
 date_default_timezone_set('Asia/Kolkata');
if (date_default_timezone_get()) {
 //   echo 'date_default_timezone_set: ' . date_default_timezone_get() . '<br />';
}

		 
	//******************************************************************customer Name******************************
	$f1 = "customer_name.txt";
	$uploadpath = $config['QuotePath'];
	//chmod($uploadpath.$f1,"777");
	$myfile = fopen($f1, "w") or die("Unable to open file!");
	$SelQuery1	= 'SELECT DISTINCT company_name FROM `arka_customer_master` WHERE status="1"';
   	$CusList	= $this->ExecuteQuery($SelQuery1, 'select');
	if(!empty($CusList) && is_array($CusList))
			foreach($CusList as $key=>$value)
			{
				$CusList[$key]['CName'] = stripslashes($CusList[$key]['company_name']);
				$names = $names.$CusList[$key]['CName'].",";
			}
	fwrite($myfile, $names);
	fclose($myfile);
	
	
	
	
	}
	
	function chkSLogin($objArray){
	  global $_SESSION;
	  if(isset($_SESSION['User_ID']) && isset($_SESSION['UserName']))
	    return true;
	  else
	    Redirect("index.php");
	}
	
	
	 /* Get the Currnet Month New Customer Count */
 	function GetCustomerCount($objArray='')  {
		global $objSmarty;
		$session_user = $_SESSION['UserName']." [ ".$_SESSION['Department']." ]";
					if(trim($session_user)=="M S Ahmed [ Management ]" || trim($session_user)=="Prime Power Products [ Administration ]")
					{
						$SelQuery = 'SELECT count(customer_id) as count,created_date FROM `prime_customer_reg_master` WHERE `status`="1" AND MONTH(created_date) = MONTH(CURDATE())' ;
					}
					else
					{
						$SelQuery = 'SELECT count(customer_id) as count,created_date FROM `prime_customer_reg_master` WHERE `status`="1" AND created_by ="'.$session_user.'" AND MONTH(created_date) = MONTH(CURDATE())' ;					
					}
		$Count		= $this->ExecuteQuery($SelQuery, "select");
					
		
		 if(!empty($Count) && is_array($Count))
		{
			$objSmarty->assign("Count2",$Count);
			$objSmarty->assign("CountDisp", $this->CountDisplayPath);
			return $Count2;
		}
		else
		{
			return false;
		}
	}	
	
	
 /* Get the Currnet Month New Customer Count */
 	function GetRemarksCount($objArray='')  {
		global $objSmarty;
		$session_user = $_SESSION['UserName']." [ ".$_SESSION['DEPT']." ]";
					if(trim($session_user)=="M S Ahmed [ Mgmt ]" || trim($session_user)=="Prime Power Products [ adm ]")
					{
						$SelQuery = 'SELECT count(customer_id) as count, snooze_date, closed_date FROM `prime_remarks_details` WHERE `status`="1" AND order_status = "Pending" AND  snooze_date < closed_date' ;
					}
					else
					{
						$SelQuery = 'SELECT count(customer_id) as count,snooze_date, closed_date FROM `prime_remarks_details` WHERE `status`="1" AND order_status = "Pending" AND  snooze_date < closed_date' ;					
					}
		$Count		= $this->ExecuteQuery($SelQuery, "select");
					
		
		 if(!empty($Count) && is_array($Count))
		{
			$objSmarty->assign("Count5",$Count);
						
						$Count[$key]['emp_follow_up_status'] = "";
						$TIMESTAMP_snz_dt=strtotime($Count[$key]['snooze_date']);
						$TIMESTAMP_flw_up_dt=strtotime($Count[$key]['closed_date']);
						if($TIMESTAMP_flw_up_dt>$TIMESTAMP_snz_dt)
						{
							$Count[$key]['emp_follow_up_status'] = "late";
						}	
						
			$objSmarty->assign("CountDisp", $this->CountDisplayPath);
			return $Count5;
		}
		else
		{
			return false;
		}
	}	
	 /* Get the Currnet Month Follow Up Count */
	function GetFollowupCount($objArray='')  {
		global $objSmarty;
		$session_user = $_SESSION['UserName']." [ ".$_SESSION['Department']." ]";

					if(trim($session_user)=="M S Ahmed [ Management ]" || trim($session_user)=="Prime Power Products [ Administration ]")
					{
							$SelQuery3 = 'SELECT count(customer_id) as count,created_date FROM `prime_customer_remarks_details` WHERE `status`="1" AND MONTH(created_date) = MONTH(CURDATE())' ;
					}
					else
					{
							$SelQuery3 = 'SELECT count(customer_id) as count,created_date FROM `prime_customer_remarks_details` WHERE `status`="1" AND created_by ="'.$session_user.'" AND MONTH(created_date) = MONTH(CURDATE())' ;				
					}

		$FollowCount		= $this->ExecuteQuery($SelQuery3, "select");
		 if(!empty($FollowCount) && is_array($FollowCount))
		{
			$objSmarty->assign("FollowCount2",$FollowCount);
			$objSmarty->assign("FollowCountDisp", $this->FollowCountDisplayPath);
			return $FollowCount2;
		}
		else{
			return false;
		}
	}	
	
	 /* Get the Currnet Month Follow Up Count */
	function GetDemoCount($objArray='')  {
		global $objSmarty;
		$session_user = $_SESSION['UserName']." [ ".$_SESSION['Department']." ]";
		
					if(trim($session_user)=="M S Ahmed [ Management ]" || trim($session_user)=="Prime Power Products [ Administration ]")
					{
						$SelQuery4 = 'SELECT count(demo_id) as count,created_date FROM `prime_demo_master` WHERE `delete_status`="1" AND MONTH(created_date) = MONTH(CURDATE())';
					}
					else
					{
						$SelQuery4 = 'SELECT count(demo_id) as count,created_date FROM `prime_demo_master` WHERE `delete_status`="1" AND created_by ="'.$session_user.'" AND MONTH(created_date) = MONTH(CURDATE())';			
					}		

		$DemoCount		= $this->ExecuteQuery($SelQuery4, "select");
		 if(!empty($DemoCount) && is_array($DemoCount))
		{
			
			$objSmarty->assign("DemoCount2",$DemoCount);
			$objSmarty->assign("DemoCountDisp", $this->DemoCountDisplayPath);
			return $DemoCount2;
		}
		else{
			return false;
		}
	}	
	 /* Get the Currnet Month Follow Up Count */
	function GetQuoteCount($objArray='')  {
		global $objSmarty;
		$session_user = $_SESSION['UserName']." [ ".$_SESSION['Department']." ]";
		
					if(trim($session_user)=="M S Ahmed [ Management ]" || trim($session_user)=="Prime Power Products [ Administration ]")
					{
		$SelQuery5 = 'SELECT count(customer_id) as count,created_date FROM `prime_product_quote` WHERE `status`="1" AND MONTH(created_date) = MONTH(CURDATE())';
					}
					else
					{
		$SelQuery5 = 'SELECT count(customer_id) as count,created_date FROM `prime_product_quote` WHERE `status`="1" AND created_by ="'.$session_user.'" AND MONTH(created_date) = MONTH(CURDATE())';			
					}			

		$QuoteCount		= $this->ExecuteQuery($SelQuery5, "select");
		 if(!empty($QuoteCount) && is_array($QuoteCount))
		{
			
			$objSmarty->assign("QuoteCount2",$QuoteCount);
			$objSmarty->assign("QuoteCountDisp", $this->QuoteCountDisplayPath);
			return $QuoteCount2;
		}
		else{
			return false;
		}
	}	
	
	function changePassword(){
	  global $objSmarty;
	  if($this->chkPassword($_POST['txtCurPwd'], $_SESSION['StaffId'])){
	    $UpQuery = "UPDATE `arka_user_master` SET `password` = '".addslashes($_POST['txtpword'])."' WHERE `user_group` = ". $_SESSION['StaffId'];
		$UpResult	= $this->ExecuteQuery($UpQuery, "update");
		$objSmarty->assign("SuccessMessage", "Password has been updated successfully");
	  }
	  else{ 
	    $objSmarty->assign("ErrorMessage", "Invalid Current Password");
		return false;
	  }
	}

	function chkPassword($CurPwd, $StaffId){
	  $SelQuery	= "SELECT `user_group ` FROM `arka_user_master` WHERE `password` = '".$CurPwd."' AND `user_group ` = '".$StaffId."' LIMIT 0,1";
	  $SelResult	= $this->ExecuteQuery($SelQuery, "selectassoc");
	  if(!empty($SelResult) && !empty($SelResult[0]['category'])){	
	    return true;
	  }
	  else
	    return false;
	}
	
	function chkStaffLogin($objArray){
	  global $objSmarty;
	  if ($_POST["userName"] &&  $_POST["password"])
	  {
	  $Login	= $_POST["userName"];	
	  $Password	= $_POST["password"];

		$SelQuery	= "SELECT * FROM arka_user_master WHERE `username` = '".($_POST["userName"])."' AND `password` = '" .($_POST["password"]). "' LIMIT 0,1";
	  	$SelResult	= $this->ExecuteQuery($SelQuery, "select");
	 	if(!empty($SelResult)) {

		$_SESSION['User_ID']	= $StaffLogin	= $SelResult[0]['user_id'];
		$_SESSION['USER_GROUP']	= $StaffGroup	= $SelResult[0]['user_group'];
		$_SESSION['DEPT']	= $StaffGroup	= $SelResult[0]['department'];
		$_SESSION['UserName']	= $StaffLogin	= $SelResult[0]['username'];
		$_SESSION['Mobile']	= $StaffLogin	= $SelResult[0]['mobile'];
		$_SESSION['Email']	= $StaffLogin	= $SelResult[0]['email_id'];
		$_SESSION['Phone']	= $StaffLogin	= $SelResult[0]['phone'];
		$_SESSION['CustomerId']	= $StaffLogin	= $SelResult[0]['customer_id'];
		$_SESSION['CustomerLogo']	= $StaffLogin	= $SelResult[0]['logo_image'];
		$_SESSION['Department']	= $StaffLogin	= $SelResult[0]['department'];
		$Gname	= $_SESSION['USER_GROUP'];
	
		//session_register("User_ID");
		return true;
	  		}
	  	else {
	    $objSmarty->assign('ErrorMessage', "Invalid User Name or Password !");
	//	$objSmarty->assign('ErrorMessage', 'Email should not be blank');
		return false;
	  }
	  }
	}
	

/*******************************************************************************************Login User Roles list *********************************************/
  function RolesLists(){
	global $objSmarty;
	 $SelQuery1	= 'SELECT * FROM arka_user_group_mapping WHERE `group_name` = "'.$_SESSION['USER_GROUP'].'" AND `status` <> 0 ORDER BY sl_no';
	  $RList		= $this->ExecuteQuery($SelQuery1, "select");
		
  if(!empty($RList) && is_array($RList))
   foreach($RList as $key=>$value){
    $RList[$key]['group_id'] = stripslashes($RList[$key]['group_id']);
	$RList[$key]['role_name'] = stripslashes($RList[$key]['role_name']);
	$objSmarty->assign('RList', $RList);
	
  return $RList;
		} 
	}
	
	
	function UpdateSiteConfig(){
	  if(!get_magic_quotes_gpc()){
	    $_POST['SiteTitle']=addslashes($_POST['SiteTitle']);
		$_POST['TADescription']=addslashes($_POST['TADescription']);
		$_POST['TAKeywords']=addslashes($_POST['TAKeywords']);
	  }
	  $Upd1="UPDATE `tbl_admin_configuration` SET `const_value`='".$_POST['SiteTitle']."' WHERE `ident`='1' AND `const_name`='SITE_NAME'";
	  $this->ExecuteQuery($Upd1,'update');
	  $Upd2="UPDATE `tbl_admin_configuration` SET `const_value`='".$_POST['TADescription']."' WHERE `ident`='2' AND `const_name`='META_DESC'";
	  $this->ExecuteQuery($Upd2,'update');
	  $Upd3="UPDATE `tbl_admin_configuration` SET `const_value`='".$_POST['TAKeywords']."' WHERE `ident`='3' AND `const_name`='META_KEY'";
	  $this->ExecuteQuery($Upd3,'update');
	  
	}
	
	function GetSiteConfig(){
	  global $objSmarty;
	  $SelQry="SELECT * FROM `tbl_admin_configuration` ";
	  
	  $Result=$this->ExecuteQuery($SelQry,'selectassoc');
	  
	  if(count($Result)>0)
	    foreach($Result as $Value)
		  $Result1[$Value['const_name']]=$Value['const_value'];

	  $objSmarty->assign('Result1',$Result1);	  
	}
	
/*	function GetViewedCustomers(){
	  global $objSmarty;
	  $SelQry="SELECT * FROM `prime_viewed_customers` WHERE `viewed_date` = CURDATE() AND `user_id` = '".$_SESSION['User_ID']."'";
	  $Result=$this->ExecuteQuery($SelQry,'selectassoc');
	  
	  if(count($Result)>0)
	    foreach($Result as $key=>$Value)
		  $Result1[$key]['viewed_cstmr_id']=$Value['viewed_cstmr_id'];
	  $objSmarty->assign('Result1',$Result);	  
	}*/
	
	
 function GetViewedCustomers()  {
  global $objSmarty;
	$this->Limit=10;
  $whereClause = 'ORDER BY sl_no';
   if($_POST['search'] == ''){
  			if($_POST['viewed_cstmr_id'])
	   			$whereClause = ' WHERE (`viewed_cstmr_id` like "%'.$_POST['viewed_cstmr_id'].'%")';
                        else if($_POST['viewed_cstmr_name'])
                                $whereClause = ' WHERE (`viewed_cstmr_name` like "%'.$_POST['viewed_cstmr_name'].'%")';
                        else if($_POST['viewed_cmpny_name'])
                                $whereClause = ' WHERE (`viewed_cmpny_name` like "%'.$_POST['viewed_cmpny_name'].'%")';
  }
  $SelQuery		= 'SELECT * FROM `prime_viewed_customers`'.$whereClause;
 
  $listing_split = new MsplitPageResults($SelQuery, $this->Limit);
  if ( ($listing_split->number_of_rows > 0) )  {
   $objSmarty->assign('LinkPage',$listing_split->display_count(TEXT_DISPLAY_NUMBER_OF_RESULT));
   $objSmarty->assign('PerPageNavigation',TEXT_RESULT_PAGE1 . ' ' . $listing_split->display_links($this->Limit, get_all_get_params(array('page', 'info', 'x', 'y')))); 
   $PageList = $this->ExecuteQuery($listing_split->sql_query, 'selectassoc');
  }
  if(!empty($PageList) && is_array($PageList))

   foreach($PageList as $key=>$value){
    $PageList[$key]['viewed_cstmr_name'] = stripslashes($PageList[$key]['viewed_cstmr_name']);
	$PageList[$key]['viewed_cstmr_id'] = stripslashes($PageList[$key]['viewed_cstmr_id']);
	$PageList[$key]['viewed_cmpny_name'] = stripslashes($PageList[$key]['viewed_cmpny_name']);
	
   }

  $objSmarty->assign('i', $listing_split->i);
  $objSmarty->assign('PageList', $PageList);
  return $PageList;
 
}	
		
}
?>