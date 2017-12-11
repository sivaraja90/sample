<?php   
	/*	Class Function for Admin	*/
	class Staff extends MysqlFns
	{
	static $Gname,$Uid,$Cid; 
	/* class constructor */
function Staff(){  
	 global $objSmarty, $config;
	 $tbl = $config['DBPrefix'];
	include_once "class.split_page_results.php";
    $this->MysqlFns();
	
	//echo Staff::PREFIX;
		  
 date_default_timezone_set('Asia/Kolkata');
if (date_default_timezone_get()) {
}

/*******************************Auto Suggest For Company Name**********************************************************************/			
			$f1 = "mobile.txt";  
			$uploadpath = $config['QuotePath'];
			//chmod($uploadpath.$f1,"777");
			$myfile1 = fopen($f1, "w") or die("Unable to open file!");  
			$SelQuery	= 'SELECT DISTINCT mobile_no FROM `'.$tbl.'customer_contact_details` WHERE status="1"';   
			$CusMob	= $this->ExecuteQuery($SelQuery, 'select');  
			if(!empty($CusMob) && is_array($CusMob))
			foreach($CusMob as $key=>$value)
			{
			$CusMob[$key]['CMob'] = stripslashes($CusMob[$key]['mobile_no']);
			$namesMob = $namesMob.$CusMob[$key]['CMob'].",";
			}
			fwrite($myfile1, $namesMob);
			fclose($myfile1);

/*******************************Auto Suggest For Company Name**********************************************************************/			
			$f2 = "company_name.txt";
			$uploadpath = $config['QuotePath'];
			//chmod($uploadpath.$f1,"777");
			$myfile = fopen($f2, "w") or die("Unable to open file!");
			$SelQuery1	= 'SELECT DISTINCT company_name FROM `'.$tbl.'customer_master` WHERE status="1"';
			$CusList	= $this->ExecuteQuery($SelQuery1, 'select');
			if(!empty($CusList) && is_array($CusList))
			foreach($CusList as $key=>$value)
			{
			$CusList[$key]['CName'] = stripslashes($CusList[$key]['company_name']);
			$names = $names.$CusList[$key]['CName'].",";
			}
			fwrite($myfile, $names);
			fclose($myfile);
/************************************Select Pending enquiry Status******************************************************/
			$SelQuery = 'SELECT COUNT(enquiry_status) AS count FROM `'.$tbl.'enquriy_master` WHERE enquiry_status="Pending" AND status="1" AND assign_to="'.$_SESSION[UserName].'"';
			$PendingCnt = $this->ExecuteQuery($SelQuery, "select");
			$objSmarty->assign('PendingCnt', $PendingCnt);

/************************************Select Pending enquiry Id******************************************************/
			$SelQuery1 = 'SELECT  enquiry_id , company_name FROM `'.$tbl.'enquriy_master` WHERE enquiry_status="Pending" AND status="1" AND assign_to="'.$_SESSION[UserName].'" ORDER BY enquiry_id DESC LIMIT 0,4';
			$Enquiry = $this->ExecuteQuery($SelQuery1, "select");
			$objSmarty->assign('Enquiry', $Enquiry);

/****************************************Select Resent Customer*************************************************************************/
			$SelQuery2 = 'SELECT max(customer_id) AS id FROM `'.$tbl.'customer_master` WHERE status="1"';
			$Customer = $this->ExecuteQuery($SelQuery2, "select");
			
			$SelQuery3 = 'SELECT * FROM `'.$tbl.'customer_master` WHERE status="1" AND customer_id ="'.$Customer[0]['id'].'"';
			$Customer1 = $this->ExecuteQuery($SelQuery3, "select");
			$objSmarty->assign('Customer1', $Customer1);
/****************************************Select Resent Enquiry*************************************************************************/
			$SelQuery4 = 'SELECT max(enquiry_id) AS Enq FROM '.$tbl.'enquriy_master WHERE status="1"';
			$EnqMas = $this->ExecuteQuery($SelQuery4, "select");

			
			$SelQuery5 = 'SELECT * FROM '.$tbl.'enquriy_master WHERE status="1" AND enquiry_id ="'.$EnqMas[0]['Enq'].'"';
			$EnqMas1 = $this->ExecuteQuery($SelQuery5, "select");
			$objSmarty->assign('EnqMas1', $EnqMas1);
/****************************************Select Resent Enquiry*************************************************************************/
			$SelQuery6 = 'SELECT max(sales_order_no) AS sale FROM '.$tbl.'sales_master WHERE status="1"';
			$SalMas = $this->ExecuteQuery($SelQuery6, "select");
			
			$SelQuery7 = 'SELECT * FROM '.$tbl.'sales_master WHERE status="1" AND sales_order_no ="'.$SalMas[0]['sale'].'"';
			$SalMas1 = $this->ExecuteQuery($SelQuery7, "select");
						//print_r($SalMas1);
			$objSmarty->assign('SalMas1', $SalMas1);
/****************************************Select Resent Enquiry*************************************************************************/
			$SelQuery8 = 'SELECT max(service_order_no) AS Ser FROM '.$tbl.'service_master WHERE status="1"';
			$SerMas = $this->ExecuteQuery($SelQuery8, "select");
			
			$SelQuery9 = 'SELECT * FROM '.$tbl.'service_master WHERE status="1" AND service_order_no ="'.$SerMas[0]['Ser'].'"';
			$SerMas1 = $this->ExecuteQuery($SelQuery9, "select");
			$objSmarty->assign('SerMas1', $SerMas1);
/****************************************Select Resent Enquiry*************************************************************************/
			$SelQuery10 = 'SELECT max(project_order_no) AS Pro FROM '.$tbl.'project_master WHERE status="1"';
			$ProMas = $this->ExecuteQuery($SelQuery10, "select");
			
			$SelQuery11 = 'SELECT * FROM '.$tbl.'project_master WHERE status="1" AND project_order_no ="'.$ProMas[0]['Pro'].'"';
			$ProMas1 = $this->ExecuteQuery($SelQuery11, "select");
			$objSmarty->assign('ProMas1', $ProMas1);
/****************************************Select Count Of Accept*************************************************************************/
			$SelQuery12 = 'SELECT COUNT(accept_status) AS accept FROM `'.$tbl.'enquriy_master` WHERE accept_status="0" AND status="1"  AND assign_to="'.$_SESSION[UserName].'"';
			$ACnt = $this->ExecuteQuery($SelQuery12, "select");
			$objSmarty->assign('ACnt', $ACnt);
/****************************************Select Count Of Not Accepted*************************************************************************/						
			$SelQuery13 = 'SELECT enquiry_id , assign_to FROM '.$tbl.'enquriy_master WHERE accept_status="0" AND status="1" AND assign_to="'.$_SESSION[UserName].'" ORDER BY enquiry_id DESC LIMIT 0,4';
			$Accept = $this->ExecuteQuery($SelQuery13, "select");
			//print_r($Accept);exit;
			$objSmarty->assign('Accept', $Accept);
			
/****************************************Select Elapsed Date and Time**************************************************************************/
/*			$SelQuery14 = 'SELECT DISTINCT enquiry_id FROM `'.$tbl.'enquriy_followup` WHERE status="1"  AND created_by ="'.$_SESSION[UserName].'"';
			$Follow = $this->ExecuteQuery($SelQuery14, "select");
			//print_r($Follow);exit;
			$objSmarty->assign('Follow', $Follow);
			
			echo $SelQuery15 = 'SELECT MAX(timestamp(snooze_date,snooze_time)) - GETDATE() , "MINUTE") elapsed FROM '.$tbl.'enquriy_followup WHERE 
			enquiry_status <> "Closed With Order" AND enquiry_id="'.$Follow[0]['enquiry_id'].'"';
			$Followup = $this->ExecuteQuery($SelQuery15, "select");
			$objSmarty->assign('Followup', $Followup);
			print_r($Followup);exit;*/

			
	}
	
 function GetCustomerDetails($objArray='')  {
 
 		 global $objSmarty,$config;
		  $tbl = $config['DBPrefix'];
		  if($_GET['m_search'] != '')
		  {		
		$SelQuery = 'SELECT * FROM `'.$tbl.'customer_contact_details` WHERE customer_id like "%'.$_GET['m_search'].'%"  OR mobile_no like "%'.$_GET['m_search'].'%" AND status="1" LIMIT 0,1' ;
		$LDList		= $this->ExecuteQuery($SelQuery, "select");
		$objSmarty->assign("LDList",$LDList);
		
		$SeleQuery1 = 'SELECT * FROM `'.$tbl.'customer_master` WHERE customer_id="'.$LDList[0]['customer_id'].'" ';
		$SeleQuery2 = 'SELECT * FROM `'.$tbl.'customer_contact_details` WHERE customer_id="'.$LDList[0]['customer_id'].'" ';
		$SeleQuery3 = 'SELECT * FROM `'.$tbl.'customer_address_details` WHERE customer_id="'.$LDList[0]['customer_id'].'" ';
		$SeleQuery4 = 'SELECT * FROM `'.$tbl.'enquiry_master` WHERE customer_id="'.$LDList[0]['customer_id'].'" ';
		
		
		
		}
		elseif($_GET['c_search'] != '')
		{
		$SeleQuery = 'SELECT * FROM `'.$tbl.'customer_master`  WHERE customer_id like "%'.$_GET['c_search'].'%"  OR company_name like "%'.$_GET['c_search'].'%" AND status="1" LIMIT 0,1' ;
		$LDList		= $this->ExecuteQuery($SelQuery, "select");
		$objSmarty->assign("LDList",$LDList);

		
		$SeleQuery1 = 'SELECT * FROM `'.$tbl.'customer_master` WHERE customer_id="'.$LDList[0]['customer_id'].'" ';
		$SeleQuery2 = 'SELECT * FROM `'.$tbl.'customer_contact_details` WHERE customer_id="'.$LDList[0]['customer_id'].'" ';
		$SeleQuery3 = 'SELECT * FROM `'.$tbl.'customer_address_details` WHERE customer_id="'.$LDList[0]['customer_id'].'" ';
		$SeleQuery4 = 'SELECT * FROM `'.$tbl.'enquiry_master` WHERE customer_id="'.$LDList[0]['customer_id'].'" ';

		}
		$Master			= $this->ExecuteQuery($SeleQuery1, "select");
		$ViewContact	= $this->ExecuteQuery($SeleQuery2, "select");
		$Address		= $this->ExecuteQuery($SeleQuery3, "select");
		$Enquiry		= $this->ExecuteQuery($SeleQuery5, "select");
		$objSmarty->assign("Master",$Master);
		$objSmarty->assign("ViewContact",$ViewContact);
		$objSmarty->assign("Address",$Address);
		$objSmarty->assign("Enquiry",$Enquiry);
		
	
	}	
	
	function chkSLogin($objArray){
	  global $_SESSION;
	  if(isset($_SESSION['User_ID']) && isset($_SESSION['UserName']))
	    return true;
	  else
	    Redirect("index.php");
	}
	
	
function changePassword(){
	  global $objSmarty;
	  if($this->chkPassword($_POST['txtCurPwd'], $_SESSION['StaffId'])){
	    $UpQuery = "UPDATE `goyal_user_master` SET `password` = '".addslashes($_POST['txtpword'])."' WHERE `user_group` = ". $_SESSION['StaffId'];
		$UpResult	= $this->ExecuteQuery($UpQuery, "update");
		$objSmarty->assign("SuccessMessage", "Password has been updated successfully");
	  }
	  else{ 
	    $objSmarty->assign("ErrorMessage", "Invalid Current Password");
		return false;
	  }
	}

function chkPassword($CurPwd, $StaffId){
	  $SelQuery	= "SELECT `user_group ` FROM `goyal_user_master` WHERE `password` = '".$CurPwd."' AND `user_group ` = '".$StaffId."' LIMIT 0,1";
	  $SelResult	= $this->ExecuteQuery($SelQuery, "selectassoc");
	  if(!empty($SelResult) && !empty($SelResult[0]['category'])){	
	    return true;
	  }
	  else
	    return false;
	}
	
function chkStaffLogin($objArray){

	  global $objSmarty, $config;
	  $tbl = $config['DBPrefix'];
	  if ($_POST["email"] &&  $_POST["password"])
	  {
	  $Login	= $_POST["email"];	
	  $Password	= $_POST["password"];
	 
		$SelQuery	= "SELECT * FROM ".$tbl."user_master WHERE `email_id` = '".($_POST["email"])."' AND `password` = '" .($_POST["password"]). "' LIMIT 0,1";
	  	$SelResult	= $this->ExecuteQuery($SelQuery, "select");
		
	 	if(!empty($SelResult)) {
		
		$_SESSION['User_ID']	= $StaffLogin	= $SelResult[0]['user_id'];
		$_SESSION['USER_GROUP']	= $StaffGroup	= $SelResult[0]['user_group'];
		$_SESSION['DEPT']		= $StaffGroup	= $SelResult[0]['department'];
		$_SESSION['DESIGNATION']= $StaffGroup	= $SelResult[0]['designation'];
		$_SESSION['UserName']	= $StaffLogin	= $SelResult[0]['username'];
		$_SESSION['Mobile']		= $StaffLogin	= $SelResult[0]['mobile'];
		$_SESSION['Email']	= $StaffLogin	= $SelResult[0]['email_id'];
		$_SESSION['Phone']		= $StaffLogin	= $SelResult[0]['phone'];
		$_SESSION['Department']	= $StaffLogin	= $SelResult[0]['department'];
		$_SESSION['CDate']		= $StaffLogin	= $SelResult[0]['created_date'];
		$_SESSION['Image']		= $StaffLogin	= $SelResult[0]['image'];
		$_SESSION['Sex']		= $StaffLogin	= $SelResult[0]['sex'];
		//print_r($_SESSION['Image']);exit;
		$Gname	= $_SESSION['USER_GROUP'];
	//	$objSmarty->assign('SelResult', $SelResult);
		return true;
	  		}
	  	else {
	    $objSmarty->assign('ErrorMessage', "Invalid User Name or Password !");
	//	$objSmarty->assign('ErrorMessage', 'Email should not be blank');
		return false;
	  }
	  }
	}
	 function RolesLists(){
	global $objSmarty, $config;
	 $tbl = $config['DBPrefix'];
	 $SelQuery1	= 'SELECT * FROM '.$tbl.'user_group_mapping WHERE `group_name` = "'.$_SESSION['USER_GROUP'].'" AND `status` <> 0 ORDER BY sl_no';
	  $RList		= $this->ExecuteQuery($SelQuery1, "select");
//	print_r($RList);exit;
  if(!empty($RList) && is_array($RList))
   foreach($RList as $key=>$value){
    $RList[$key]['group_id'] = stripslashes($RList[$key]['group_id']);
	$RList[$key]['role_name'] = stripslashes($RList[$key]['role_name']);
	$objSmarty->assign('RList', $RList);
  return $RList;
		} 
	}
	

	
		
}
?>