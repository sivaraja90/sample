<?php
#####Class For Adding Content Management ######
class EnquiryReg extends MysqlFns{

 /* class constructor */
 function EnquiryReg(){
 $this->LDDisplayPath= $config['SiteGlobalPath']."class.EnquiryReg.php";
  global $config;
  global $objSmarty,$config;
  $tbl = $config['DBPrefix'];
  $this->MysqlFns();
  $this->Limit = 10;
  $enq_id = base64_decode($_GET["enquiry_id"]);
  /*******************************Enquriy Id Auto Increment*********************************************************/
			$SelQuerys	= 'SELECT max(enquiry_id) as last FROM `'.$tbl.'enquriy_master` Limit 0,1';
			$EnqDetail	= $this->ExecuteQuery($SelQuerys, 'select');
			if($EnqDetail[0]['last']!="")
			{
			$EnqDetail[0]['enquiry_id'] = stripslashes($EnqDetail[0]['last']);
			$e_id1 = preg_replace("/[^0-9\.]/", '', $EnqDetail[0]['enquiry_id']);
			$e_id1= $e_id1 + 1;
			$str = str_split($EnqDetail[0]['last'], 3);
			$e_id = $str[0]. "" .$e_id1;
			}
			else
			{
			$e_id = "ENQ1001";
			}
			$objSmarty->assign('e_id', $e_id);

  /*******************************Sales Qoute Auto Increment*********************************************************/
			$SelQuerys1	= 'SELECT max(sales_quote_no) as last FROM `'.$tbl.'sales_quote_master` Limit 0,1';
			$SaleDetail	= $this->ExecuteQuery($SelQuerys1, 'select');
			$SaleDetail[0]['sales_quote_no'] = stripslashes($SaleDetail[0]['last']);
			$s_quote1 = preg_replace("/[^0-9\.]/", '', $SaleDetail[0]['sales_quote_no']);
			$s_quote1= $s_quote1 + 1;
			$str = str_split($SaleDetail[0]['last'],3);//CUS
			$s_quote = $str[0]. "" .$s_quote1;
			$objSmarty->assign('s_quote', $s_quote);
/*******************************Auto Suggest For Company Name**********************************************************************/
			$f1 = "company_name.txt";
			$uploadpath = $config['QuotePath'];
			//chmod($uploadpath.$f1,"777");
			$myfile = fopen($f1, "w") or die("Unable to open file!");
			$SelQuery1	= 'SELECT DISTINCT company_name FROM `'.$tbl.'customer_master` WHERE created_by = "'.$_SESSION[UserName].'" AND status="1"';
			$CusList	= $this->ExecuteQuery($SelQuery1, 'select');
			//print_r($CusList);exit;
			if(!empty($CusList) && is_array($CusList))
			foreach($CusList as $key=>$value)
			{
			$CusList[$key]['CName'] = stripslashes($CusList[$key]['company_name']);
			$names = $names.$CusList[$key]['CName'].",";
			}
			fwrite($myfile, $names);
			fclose($myfile);

/*******************************Auto Suggest For Area**********************************************************************/
			$f2 = "area.txt";
			$uploadpath = $config['QuotePath'];
			//chmod($uploadpath.$f1,"777");
			$myfilearea = fopen($f2, "w") or die("Unable to open file!");
			$SelQuery2	= 'SELECT DISTINCT area FROM `'.$tbl.'customer_address_details` WHERE status="1"';
			$AreaList	= $this->ExecuteQuery($SelQuery2, 'select');
			if(!empty($AreaList) && is_array($AreaList))
			foreach($AreaList as $key=>$value)
			{
			$AreaList[$key]['area'] = stripslashes($AreaList[$key]['area']);
			$namesarea = $namesarea.$AreaList[$key]['area'].",";
			}
			fwrite($myfilearea, $namesarea);
			fclose($myfilearea);

 /*******************************Auto Suggest For Assign To**********************************************************************/
			$f3 = "assign.txt";
			$uploadpath = $config['QuotePath'];
			//chmod($uploadpath.$f1,"777");
			$myfileassign = fopen($f3, "w") or die("Unable to open file!");
			$SelQuery2	= 'SELECT DISTINCT username FROM `'.$tbl.'user_master` WHERE user_status="1"';
			$AssignList	= $this->ExecuteQuery($SelQuery2, 'select');
			if(!empty($AssignList) && is_array($AssignList))
			foreach($AssignList as $key=>$value)
			{
			$AssignList[$key]['assign_to'] = stripslashes($AssignList[$key]['username']);
			$namesassign = $namesassign.$AssignList[$key]['assign_to'].",";
			}
			fwrite($myfileassign, $namesassign);
			fclose($myfileassign);
/***************************************Lapsed Time******************************************************************/
			$SelQuery3 = 'SELECT TIMEDIFF(timestamp(snooze_date,snooze_time), NOW()) AS Time ,enquiry_id FROM '.$tbl.'enquriy_master WHERE enquiry_status = "Open" AND
			 status= "1"';
			$LapsedList	= $this->ExecuteQuery($SelQuery3, 'select');
			//print_r($LapsedList);exit;
			$objSmarty->assign('LapsedList', $LapsedList);

}
 /*************************************************Enquiry Insert/*****************************************************/
  function InsertEnquiry($objArray="")
 {
 global $objSmarty,$config,$_POST;
$tbl = $config['DBPrefix'];

			if(!$objArray['company_name']){
			$objSmarty->assign('ErrorMessage', 'Name of the Company should not be blank');
			return false;
			}elseif(!$objArray['enquiry_id']){
			$objSmarty->assign('ErrorMessage', 'Id of the Customer should not be blank');
			return false;
			}elseif(!$objArray[''.$tbl.'group']){
			$objSmarty->assign('ErrorMessage', 'ARKA Group should not be blank');
			return false;
			}elseif(!$objArray['enquiry_through']){
			$objSmarty->assign('ErrorMessage', 'Enquiry Through should not be blank');
			return false;
			}elseif(!$objArray['customer_name']){
			$objSmarty->assign('ErrorMessage', 'Name of the Customer should not be blank');
			return false;
			}elseif(isset($objArray['enquiry_status']))
			{

			if($objArray['enquiry_status'] == "Open")
				{
					   if(!$objArray['snooze_date']){
						$objSmarty->assign('ErrorMessage', 'Snooze Date should not be blank');
						return false;
						}
				}
			 else
			 {
					   if(!$objArray['closed_date']){
						$objSmarty->assign('ErrorMessage', 'Closed Date should not be blank');
						return false;
					   }
			 }
			}elseif(!$objArray['enquiry_type']){
			$objSmarty->assign('ErrorMessage', 'Enquiry Type should not be blank');
			return false;
			}elseif(!$objArray['assign_to']){
			$objSmarty->assign('ErrorMessage', 'Assign To should not be blank');
			return false;
			}elseif(!$objArray['designation']){
			$objSmarty->assign('ErrorMessage', 'Designation should not be blank');
			return false;
			}elseif(!$objArray['mail_id']){
			$objSmarty->assign('ErrorMessage', 'Email should not be blank');
			return false;
			}elseif(!$objArray['address']){
			$objSmarty->assign('ErrorMessage', 'Address should not be blank');
			return false;
			}elseif(!$objArray['area']){
			$objSmarty->assign('ErrorMessage', 'Area Field should not be blank');
			return false;
			}elseif(!$objArray['city']){
			$objSmarty->assign('ErrorMessage', 'City Field should not be blank');
			return false;
			}elseif(!$objArray['pincode']){
			$objSmarty->assign('ErrorMessage', 'Pincode Field should not be blank');
			return false;
			}
			elseif(!$objArray['open_status']){
			$objSmarty->assign('ErrorMessage', 'Open Status should not be blank');
			return false;
			}


				if($objArray['assign_to'] == $_SESSION[UserName])
				{
		  			$Assign = 1;
				}
				else
				{
					$Assign = 0;
				}
			$objSmarty->assign('enquiry_id', $objArray['enquiry_id']);
			if($objArray['enquiry_id'] && $objArray['customer_name']){

 $InsQuery = 'INSERT INTO '.$tbl.'enquriy_master(`enquiry_id`,`customer_id`,`customer_name`,`'.$tbl.'group`,`salutation`,`enquiry_type`,`assign_to`,`mobile_no`,`mobile_no1`,`mobile_no2`,`created_by`,`snooze_date`,`closed_date`,`po_no`,`po_date`,`address`,`address1`,`area`,`landmark`,`remarks`,`company_name`,`enquiry_through`,`enquiry_status`,`open_status`,`area_code`,`phone_no`,`extension`,`reference_id`,`designation`,`requirement`,`city`,`pincode`,`branch`,`PG`,`SSG`,`Storage`,`email_id`,`email_id1`,`created_date`,`created_time`,`accept_status`,`status`) VALUES("'.trim(addslashes($objArray['enquiry_id'])).'","'.trim(addslashes($objArray['customer_id'])).'","'.trim(addslashes($objArray['customer_name'])).'","'.trim(addslashes($objArray[''.$tbl.'group'])).'","'.trim(addslashes($objArray['salutation'])).'","'.trim(addslashes($objArray['enquiry_type'])).'","'.trim(addslashes($objArray['assign_to'])).'","'.trim(addslashes($objArray['mobile_no'])).'","'.trim(addslashes($objArray['mobile_no1'])).'","'.trim(addslashes($objArray['mobile_no3'])).'","'.trim(addslashes($objArray['created_by'])).'","'.trim(addslashes($objArray['snooze_date'])).'","'.trim(addslashes($objArray['closed_date'])).'","'.trim(addslashes($objArray['po_no'])).'","'.trim(addslashes($objArray['po_date'])).'","'.trim(addslashes($objArray['address'])).'","'.trim(addslashes($objArray['address1'])).'","'.trim(addslashes($objArray['area'])).'","'.trim(addslashes($objArray['landmark'])).'","'.trim(addslashes($objArray['remarks'])).'","'.trim(addslashes($objArray['company_name'])).'","'.trim(addslashes($objArray['enquiry_through'])).'","'.trim(addslashes($objArray['enquiry_status'])).'","'.trim(addslashes($objArray['open_status'])).'","'.trim(addslashes($objArray['area_code'])).'","'.trim(addslashes($objArray['phone_no'])).'","'.trim(addslashes($objArray['extension'])).'","'.trim(addslashes($objArray['reference_id'])).'","'.trim(addslashes($objArray['designation'])).'","'.trim(addslashes($objArray['requirement'])).'","'.trim(addslashes($objArray['city'])).'","'.trim(addslashes($objArray['pincode'])).'","'.trim(addslashes($objArray['branch'])).'","'.trim(addslashes($objArray['pg'])).'","'.trim(addslashes($objArray['ssg'])).'","'.trim(addslashes($objArray['storage'])).'","'.trim(addslashes($objArray['mail_id'])).'","'.trim(addslashes($objArray['mail_id1'])).'","'.trim(addslashes($objArray['created_date'])).'","'.trim(addslashes($objArray['created_time'])).'","'.$Assign.'","1")';
$this->ExecuteQuery($InsQuery, 'insert');


 $InsQuery2 = 'INSERT INTO '.$tbl.'enquriy_followup(`enquiry_id`,`customer_id`,`enquiry_type`,`'.$tbl.'group`,`created_by`,`snooze_date`,`enquiry_status`,`open_status`,`requirement`,`assign_to`,`created_date`,`created_time`,`status`) VALUES("'.trim(addslashes($objArray['enquiry_id'])).'","'.trim(addslashes($objArray['customer_id'])).'","'.trim(addslashes($objArray['enquiry_type'])).'","'.trim(addslashes($objArray[''.$tbl.'group'])).'","'.trim(addslashes($objArray['created_by'])).'","'.trim(addslashes($objArray['snooze_date'])).'","'.trim(addslashes($objArray['enquiry_status'])).'","'.trim(addslashes($objArray['open_status'])).'","'.trim(addslashes($objArray['requirement'])).'","'.trim(addslashes($objArray['assign_to'])).'","'.trim(addslashes($objArray['created_date'])).'","'.trim(addslashes($objArray['created_time'])).'","1")';
$this->ExecuteQuery($InsQuery2, 'insert');


//Success Message
header('Location:' .$_SERVER['PHP_SELF'].'?&succs_msg_for_insert');
return true;
 }
}


/*************************************************View Customer/***************************************************************/
function ViewEnquiry()
 {
 		 global $objSmarty,$config;
		  $tbl = $config['DBPrefix'];
		  if($_SESSION['DESIGNATION']=='MD' || $_SESSION['DESIGNATION']=='Administrator')
		  {
		  	$SelQuery = 'SELECT DISTINCT * FROM  '.$tbl.'enquriy_master  JOIN (SELECT TIMEDIFF(timestamp(snooze_date,snooze_time), NOW()) AS Time , enquiry_id FROM '.$tbl.'enquriy_master WHERE status= "1") Date ON '.$tbl.'enquriy_master.enquiry_id = Date.enquiry_id ORDER BY '.$tbl.'enquriy_master.enquiry_id DESC ';
		  }
		  else
		  {
		  if(isset($_GET['searchvalue']))
		  	{
				if($_GET['searchvalue'] == "my_enquiries")
				{
		  			$WhereClause = 'AND created_by ="'.$_SESSION[UserName].'"';
				}
				elseif($_GET['searchvalue'] == "assign_to_me")
				{
					 $WhereClause = 'AND assign_to ="'.$_SESSION[UserName].'"';
				}
				elseif($_GET['searchvalue'] == "assign_to_others")
				{
					 $WhereClause = 'AND assign_to <>"'.$_SESSION[UserName].'" AND created_by ="'.$_SESSION[UserName].'"';
				}
				elseif($_GET['searchvalue'] == "all_my_enquiries")
				{
					 $WhereClause = 'AND created_by ="'.$_SESSION[UserName].'" AND assign_to ="'.$_SESSION[UserName].'"';
				}
			}
			  elseif(isset($_GET['linkvalue']))
		  	{
		  			$WhereClause = 'AND assign_to ="'.$_SESSION[UserName].'" AND enquiry_status ="'.$_GET['linkvalue'].'"';
			}
			elseif(isset($_GET['acceptstatus']))
		  	{
		  			$WhereClause = 'AND accept_status ="'.$_GET['acceptstatus'].'" AND assign_to ="'.$_SESSION[UserName].'"';
			}
			else
			{
					$WhereClause='AND created_by ="'.$_SESSION[UserName].'" OR assign_to ="'.$_SESSION[UserName].'"';
			}
			$SelQuery = 'SELECT DISTINCT * FROM  '.$tbl.'enquriy_master  JOIN (SELECT TIMEDIFF(timestamp(snooze_date,snooze_time), NOW()) AS Time , enquiry_id FROM '.$tbl.'enquriy_master WHERE status= "1"'.$WhereClause.') Date ON '.$tbl.'enquriy_master.enquiry_id = Date.enquiry_id ORDER BY '.$tbl.'enquriy_master.enquiry_id DESC ';
			}
			$ListView = $this->ExecuteQuery($SelQuery, "select");
			$objSmarty->assign('ListView', $ListView);
			return $ListView;

 }
 /******************** List Enquiry Status/  **************************/
 function ViewEnquiryStatus()
 {

 		 global $objSmarty,$config;
		  $tbl = $config['DBPrefix'];
		  if(isset($_GET['searchvalue1']) && isset($_GET['enq_type']))
		  	{
				if($_GET['enq_type'] == "assign_to_me")
				{
		  			$WhereClause = 'AND enquiry_status="'.$_GET['searchvalue1'].'" AND assign_to ="'.$_SESSION[UserName].'"';
				}
				elseif($_GET['enq_type'] == "assign_to_others")
				{
					 $WhereClause = 'AND enquiry_status="'.$_GET['searchvalue1'].'"  AND assign_to <>"'.$_SESSION[UserName].'" AND created_by ="'.$_SESSION[UserName].'"';
				}
				elseif($_GET['enq_type'] == "my_enquiries")
				{
					 $WhereClause = 'AND enquiry_status="'.$_GET['searchvalue1'].'" AND created_by ="'.$_SESSION[UserName].'"';
				}
				elseif($_GET['enq_type'] == "all_my_enquiries")
				{
					 $WhereClause = 'AND enquiry_status="'.$_GET['searchvalue1'].'" AND created_by ="'.$_SESSION[UserName].'" AND assign_to ="'.$_SESSION[UserName].'"';
				}
			}
			$SelQuery = 'SELECT * FROM  '.$tbl.'enquriy_master WHERE status="1"'.$WhereClause;
			$ListView = $this->ExecuteQuery($SelQuery, "select");
			$objSmarty->assign('ListView', $ListView);
			return $ListView;


 }
 /**************************************Service Invoice/**********************************************************************/
  function ServiceInvoice($objArray)
 {
global $objSmarty,$config;
$tbl = $config['DBPrefix'];

			$SelQuery = 'SELECT SUM(material_estimate + labour_estimate) AS sub FROM `'.$tbl.'service_quote_details` WHERE enquiry_id="'.$_GET['enquiry_id'].'" AND revised_version="REV1001" ';
			$SubView = $this->ExecuteQuery($SelQuery, "select");
			$objSmarty->assign('SubView', $SubView);

			$SelQuery1 = 'SELECT * FROM `'.$tbl.'service_quote_details` WHERE enquiry_id="'.$_GET['enquiry_id'].'" AND revised_version="'.$_GET['revised_version'].'"';
			$InvoiceView = $this->ExecuteQuery($SelQuery1, "select");
			$objSmarty->assign('InvoiceView', $InvoiceView);


 }

   function ProjectInvoice($objArray)
 {
global $objSmarty,$config;
$tbl = $config['DBPrefix'];

			$SelQuery = 'SELECT SUM(material_estimate + labour_estimate) AS sub FROM `'.$tbl.'project_quote_details` WHERE enquiry_id="'.$_GET['enquiry_id'].'"';
			$SubView1 = $this->ExecuteQuery($SelQuery, "select");
			$objSmarty->assign('SubView1', $SubView1);

			$SelQuery1 = 'SELECT * FROM `'.$tbl.'project_quote_details` WHERE enquiry_id="'.$_GET['enquiry_id'].'"';
			$InvoiceView1 = $this->ExecuteQuery($SelQuery1, "select");
			$objSmarty->assign('InvoiceView1', $InvoiceView1);


 }

  /*************************************************View Followup Detail/***************************************************************/
  function ViewFollowup($objArray)
 {global $objSmarty, $config;
$tbl = $config['DBPrefix'];

			$SelQuery = 'SELECT * FROM '.$tbl.'enquriy_followup WHERE sl_no="'.$_GET['sl_no'].'"';
			$UserList		= $this->ExecuteQuery($SelQuery, "select");
			$objSmarty->assign('UserList', $UserList);
			return $UserList;
 }
 
 function UsernameList($objArray)
 {
 global $objSmarty, $config;
$tbl = $config['DBPrefix'];

			$SelQuery = 'SELECT * FROM '.$tbl.'user_master WHERE user_status="1"';
			$UserListAssign		= $this->ExecuteQuery($SelQuery, "select");
			$objSmarty->assign('UserListAssign', $UserListAssign);
			return $UserListAssign;
 }
  /*************************************************View Edit Customer/***************************************************************/

function UpdateAssign($objArray="")
 { 
 		 global $objSmarty,$config;
		 $tbl = $config['DBPrefix'];
		 $enq_id = base64_decode($_GET["enquiry_id"]);
			if($objArray[accept] == 'Reassign')
			{
	 echo $InsQuery2 = 'INSERT INTO '.$tbl.'enquriy_followup(`enquiry_id`,`customer_id`,`snooze_date`,`po_no`,`po_date`,`snooze_time`,`closed_date`,`closed_time`,`requirement`,`enquiry_status`,`enquiry_type`,`open_status`,`status`,`created_date`,`created_time`,`created_by`,`remarks`)SELECT '.$tbl.'enquriy_followup.enquiry_id,'.$tbl.'enquriy_followup.customer_id,'.$tbl.'enquriy_followup.snooze_date,'.$tbl.'enquriy_followup.po_no,'.$tbl.'enquriy_followup.po_date,'.$tbl.'enquriy_followup.snooze_time,'.$tbl.'enquriy_followup.closed_date,'.$tbl.'enquriy_followup.closed_time,'.$tbl.'enquriy_followup.requirement,'.$tbl.'enquriy_followup.enquiry_status,'.$tbl.'enquriy_followup.open_status,'.$tbl.'enquriy_followup.enquiry_type,'.$tbl.'enquriy_followup.status, '.$tbl.'enquriy_followup.created_date,'.$tbl.'enquriy_followup.created_time,'.$tbl.'enquriy_followup.created_by,'.$tbl.'enquriy_followup.remarks FROM '.$tbl.'enquriy_followup WHERE enquiry_id="'.$enq_id.'" ORDER BY  timestamp_value DESC LIMIT 1';
			$ListView1 = $this->ExecuteQuery($InsQuery2, "insert");
		
		echo $UpQuery1 = 'update '.$tbl.'enquriy_followup set `assign_to` ="'.$objArray['assign_to'].'" , `reassign` ="'.$objArray['created_by'].'"  WHERE enquiry_id="'.$enq_id.'" ORDER BY  timestamp_value DESC LIMIT 1';
		$ListView1 = $this->ExecuteQuery($UpQuery1, "update");
		$objSmarty->assign('ListView1', $ListView1);


		$UpQuery = 'update '.$tbl.'enquriy_master set `accept_status` ="0" ,`assign_to` ="'.$objArray['assign_to'].'" ,`reassign`="Reassignd" WHERE `enquiry_id` ="'.$enq_id.'"';
		$ListView = $this->ExecuteQuery($UpQuery, "update");
		$objSmarty->assign('ListView', $ListView);
			header('Location: ./enquiry_detail_view.php?enquiry_id='.$_GET['enquiry_id'].'');
			return $ListView;
			}
			else{
		    $UpQuery = 'update '.$tbl.'enquriy_master set `accept_status` ="'.$objArray['accept'].'" WHERE `enquiry_id` ="'.$enq_id.'"';
			$ListView = $this->ExecuteQuery($UpQuery, "update");
			$objSmarty->assign('ListView', $ListView);
			/*header('Location: ./enquiry_detail_view.php?enquiry_id='.$_GET['enquiry_id'].'');
			return $ListView;*/
			header('Location: ./enquiry_detail_view.php?enquiry_id='.$_GET['enquiry_id'].'');

			return $ListView;

 }
 }
 /***************************************************User Nmae/*******************************************************************/
  function UserLists(){
	global $objSmarty,$config;
	$tbl = $config['DBPrefix'];
		$SelQuery1	= 'SELECT * FROM '.$tbl.'user_master WHERE `username` = "'.$SESSION['user_name'].'"';
		$UserList		= $this->ExecuteQuery($SelQuery1, "select");
		$objSmarty->assign('UserList', $UserList);
	}

/*************************************************View Edit Customer/***************************************************************/
function ViewEdit($objArray)
 {
 $enq_id = base64_decode($_GET["enquiry_id"]);
 //print_r($enq_id); exit;
 		 global $objSmarty,$config;
		 $tbl = $config['DBPrefix'];
			$SelQuery = 'SELECT * FROM `'.$tbl.'enquriy_master` WHERE enquiry_id="'.$enq_id.'"';
			$ListEdit = $this->ExecuteQuery($SelQuery, "select");
			$objSmarty->assign('ListEdit', $ListEdit);
			//print_r($ListView);exit;
			return $ListEdit;

 }
 /*************************************************View Edit Project/***************************************************************/
 function ViewProject($objArray)
 {
 		 $enq_id = base64_decode($_GET["enquiry_id"]);
 		 global $objSmarty,$config;
		 $tbl = $config['DBPrefix'];
			$SelQuery3= 'SELECT * FROM `'.$tbl.'project_quote_master` WHERE enquiry_id="'.$enq_id.'" ORDER BY project_quote_no ASC,revised_version DESC';
			$ListProj = $this->ExecuteQuery($SelQuery3, "select");
			//base64_decode($_GET["enquiry_id"]);
			$objSmarty->assign('ListProj', $ListProj);

	       $SelQuery1= 'SELECT * FROM `'.$tbl.'project_quote_details` WHERE status="1" AND enquiry_id="'.$enq_id.'" ORDER BY project_quote_no ASC,revised_version DESC';
			$ListProj2 = $this->ExecuteQuery($SelQuery1, "select");
			$objSmarty->assign('ListProj2', $ListProj2);
			
			$SelQuery2 = 'SELECT * FROM '.$tbl.'enquriy_followup WHERE enquiry_id="'.$enq_id.'" ORDER BY sl_no DESC Limit 0, 1';
			$Prostatus = $this->ExecuteQuery($SelQuery2, "select");
			$objSmarty->assign('Prostatus', $Prostatus);
			//print_r($Prostatus);exit;

 }
  /*************************************************View Edit Service/***************************************************************/
 function ViewService($objArray="")
 {
 		 $enq_id = base64_decode($_GET['enquiry_id']);
		// $s_n = base64_decode($CusIdent);
 		 global $objSmarty,$config;
		 $tbl = $config['DBPrefix'];
			$SelQuery= 'SELECT * FROM `'.$tbl.'service_quote_master` WHERE status="1" AND enquiry_id="'.$enq_id.'" ORDER BY service_quote_no ASC,revised_version DESC';
			$ListServ = $this->ExecuteQuery($SelQuery, "select");
			//print_r($ListServ);
			$objSmarty->assign('ListServ', $ListServ);


			$SelQuery1= 'SELECT * FROM `'.$tbl.'service_quote_details` WHERE status="1" AND enquiry_id="'.$enq_id.'" ORDER BY service_quote_no ASC,revised_version DESC';
			$ListSer2 = $this->ExecuteQuery($SelQuery1, "select");
			$objSmarty->assign('ListSer2', $ListSer2);
			
				
			$SelQuery2 = 'SELECT * FROM '.$tbl.'enquriy_followup WHERE enquiry_id="'.$enq_id.'" ORDER BY sl_no DESC Limit 0, 1';
			$Serstatus = $this->ExecuteQuery($SelQuery2, "select");
			$objSmarty->assign('Serstatus', $Serstatus);
			}

function ViewService2($objArray="")
{
		$enq_id = base64_decode($_GET['enquiry_id']);
			global $objSmarty,$config;
		 $tbl = $config['DBPrefix'];
			$SelQuery1= 'SELECT * FROM `'.$tbl.'service_quote_details` WHERE status="1" AND enquiry_id="'.$enq_id.'"  AND sl_no="'.$_GET['sl_no'].'" ORDER BY service_quote_no ASC,revised_version DESC';
			$ListSer2 = $this->ExecuteQuery($SelQuery1, "select");
			$objSmarty->assign('ListSer2', $ListSer2);


 }
 /***********View Sales/***********************************************************************************************************/
 function ViewSales($objArray)
 {
 		$enq_id = base64_decode($_GET["enquiry_id"]);
		//print_r($enq_id); exit;
 		global $objSmarty,$config;
		$tbl = $config['DBPrefix'];
			$SelQuery = 'SELECT * FROM '.$tbl.'sales_quote_master WHERE enquiry_id="'.$enq_id.'" ORDER BY sales_quote_no ASC,revised_version DESC';
			$ListSale = $this->ExecuteQuery($SelQuery, "select");
			$objSmarty->assign('ListSale', $ListSale);
			
			$SelQuery1 = 'SELECT * FROM '.$tbl.'enquriy_followup WHERE enquiry_id="'.$enq_id.'" ORDER BY sl_no DESC LIMIT 0,1';
			$Liststatus = $this->ExecuteQuery($SelQuery1, "select");
			$objSmarty->assign('Liststatus', $Liststatus);


 }
  /***********View Sales/***********************************************************************************************************/
 function SaleApprove($CatIdent,$SalId,$RevNo)
 {
 		$enq_id = base64_decode($_GET["enqu_id"]);
		//print_r($enq_id); exit;
 		global $objSmarty,$config;
		$tbl = $config['DBPrefix'];
		$UPQuery = 'UPDATE '.$tbl.'sales_quote_master SET approve_status = "1" WHERE enquiry_id="'.$enq_id.'" AND sales_quote_no="'.$SalId.'" AND revised_version= "'.$RevNo.'"';
		$ListSale = $this->ExecuteQuery($UPQuery, "update");
		$objSmarty->assign('ListSale', $ListSale);
		header('Location:' .$_SERVER['PHP_SELF'].'?succs_msg_for_del'.'&'.'enquiry_id='.$_GET["enqu_id"]);


 }
 /**********************************************Delete Contact/*********************************************************************/
 function DeleteMaster($CatIdent)
 {
 		 global $objSmarty,$config;
			$tbl = $config['DBPrefix'];
			$DelQuery = 'update `'.$tbl.'enquriy_master` set `status` = 0 WHERE `enquiry_id` ="'.$CatIdent.'"';
			$this->ExecuteQuery($DelQuery, 'update');
            header('Location:' .$_SERVER['PHP_SELF'].'?succs_msg_for_del');

 }

 /**********************************************Delete Sales/*********************************************************************/

 function DeleteSalesEditDetails($CatIdent,$CusIdent,$EnqIdent)
 {
 		 global $objSmarty,$config;
		 $tbl = $config['DBPrefix'];
		 $enq_id = base64_decode($_GET["enquiry_id"]);
		 $DelQuery = 'DELETE FROM `'.$tbl.'sales_quote_details` WHERE sales_quote_no="'.$CusIdent.'"';
			$this->ExecuteQuery($DelQuery, 'delete');

			$DelQuery1 = 'DELETE FROM `'.$tbl.'sales_quote_master` WHERE `sl_no` ="'.$CatIdent.'" AND sales_quote_no="'.$CusIdent.'"';
			$this->ExecuteQuery($DelQuery1, 'delete');

			//print_r($CusIdent);
        header('Location:' .$_SERVER['PHP_SELF'].'?enquiry_id='.$_GET["enq_id"].'&succs_msg_for_sale');
			return true;
 }
  function DeleteServiceEditDetails($CusIdent,$ServIdent,$EnqIdent)
 {
 		 global $objSmarty,$config;
		 $tbl = $config['DBPrefix'];
		 $enq_id = base64_decode($_GET["enq_id"]);

			$DelQuery = 'DELETE FROM `'.$tbl.'service_quote_details` WHERE service_quote_no="'.$CusIdent.'"';
			$DelSer = $this->ExecuteQuery($DelQuery, 'delete');

			$DelQuery1 = 'DELETE FROM `'.$tbl.'service_quote_master` WHERE `sl_no` ="'.$ServIdent.'"  AND `service_quote_no`="'.$CusIdent.'"';
			$this->ExecuteQuery($DelQuery1, 'delete');


        header('Location:' .$_SERVER['PHP_SELF'].'?enquiry_id='.$_GET["enq_id"].'&succs_msg_for_del');
			return true;

 }
 function DeleteProjectEditDetails($CatIdent,$CusIdent,$EnqIdent)
 {
 		 global $objSmarty,$config;
		 $tbl = $config['DBPrefix'];
		 $enq_id = base64_decode($_GET["enquiry_id"]);
		 $DelQuery = 'DELETE FROM `'.$tbl.'project_quote_details` WHERE project_quote_no="'.$CusIdent.'"';
			$DelPro = $this->ExecuteQuery($DelQuery, 'delete');

		 $DelQuery = 'DELETE FROM `'.$tbl.'project_quote_master` WHERE `sl_no` ="'.$CatIdent.'" AND `project_quote_no`="'.$CusIdent.'"';
			$this->ExecuteQuery($DelQuery, 'delete');
			//print_r($CatIdent);
        header('Location:' .$_SERVER['PHP_SELF'].'?enquiry_id='.$_GET["enq_id"].'&succs_msg_for_pro');
			return true;


 }
 /****************************************************Delete Followup/****************************************/

  function DeleteFollowUp($FolIdent1,$UPIdent)
 {
 		 global $objSmarty,$config;
		 $tbl = $config['DBPrefix'];
		 $enq_id = base64_decode($_GET["enquiry_id"]);
			 $DelQuery = 'DELETE FROM `'.$tbl.'enquriy_followup` WHERE `sl_no` ="'.$FolIdent1.'"';
			$this->ExecuteQuery($DelQuery, 'delete');
			$UpQuery ='update `'.$tbl.'enquriy_master` set enquiry_status ="Pending"  where status = "1" and enquiry_id="'.$enq_id.'" ';
			$this->ExecuteQuery($UpQuery, 'update');
			//print_r($CatIdent);
           header('Location:' .$_SERVER['PHP_SELF'].'?enquiry_id='.$_GET["enquiry_id"].'&succs_msg_for_del');
			return true;


 }

/*********************************************Enquiry through values/***********************/

function Enquirythrough()
{
 global $objSmarty,$config;
$tbl = $config['DBPrefix'];
			 $SelEnq = 'SELECT * from '.$tbl.'enquiry_through WHERE status="1"';
			 $EnqThru = $this->ExecuteQuery($SelEnq, "select");
			 $objSmarty->assign('EnqThru', $EnqThru);
			// return $Time_Stamp;


}
/*********************************************hide button while exit from popup after insert a data/***********************/
function HideAddButton($objArray)
 { 			$enq_id = base64_decode($_GET["enquiry_id"]);
			global $objSmarty,$config;
			$tbl = $config['DBPrefix'];
			$SelQuery = 'SELECT * FROM `'.$tbl.'project_quote_master` WHERE enquiry_id ="'.$enq_id.'" AND status="1"';
			$HideAdd= $this->ExecuteQuery($SelQuery, 'select');
			//print_r($ReviseQuote);
			$objSmarty->assign('HideAdd', $HideAdd);
			return $HideAdd;


 }
 function HideAddSales($objArray)
 { 			$enq_id = base64_decode($_GET["enquiry_id"]);
			global $objSmarty,$config;
			$tbl = $config['DBPrefix'];
			$SelQuery = 'SELECT * FROM `'.$tbl.'sales_quote_master` WHERE enquiry_id ="'.$enq_id.'" AND status="1"';
			$HideAdd2= $this->ExecuteQuery($SelQuery, 'select');
			//print_r($ReviseQuote);
			$objSmarty->assign('HideAdd2', $HideAdd2);
			return $HideAdd2;


 }

 function HideAddService($objArray)
 { 			$enq_id = base64_decode($_GET["enquiry_id"]);
			global $objSmarty,$config;
			$tbl = $config['DBPrefix'];
			$SelQuery = 'SELECT * FROM `'.$tbl.'service_quote_master` WHERE enquiry_id ="'.$enq_id.'" AND status="1"';
			$HideAdd3= $this->ExecuteQuery($SelQuery, 'select');
			//print_r($ReviseQuote);
			$objSmarty->assign('HideAdd3', $HideAdd3);
			return $HideAdd3;


 }
 /*************************************************View Edit Customer/***************************************************************/
function EditEnquiry($objArray="")
 {
		global $objSmarty,$config,$_POST,$_REQUEST;
		$tbl = $config['DBPrefix'];

			if(!$objArray['company_name']){
			$objSmarty->assign('ErrorMessage', 'Name of the Company should not be blank');
			return false;
			}elseif(!$objArray['enquiry_id']){
			$objSmarty->assign('ErrorMessage', 'Id of the Customer should not be blank');
			return false;
			}elseif(!$objArray[''.$tbl.'group']){
			$objSmarty->assign('ErrorMessage', 'Arka Group should not be blank');
			return false;
			}elseif(!$objArray['enquiry_through']){
			$objSmarty->assign('ErrorMessage', 'Enquiry Through should not be blank');
			return false;
			}elseif(!$objArray['customer_name']){
			$objSmarty->assign('ErrorMessage', 'Name of the Customer should not be blank');
			return false;
			}elseif(isset($objArray['enquiry_status']))
			{

			if($objArray['enquiry_status'] == "Open")
				{
					/*if(!$objArray['snooze_hours']){
						$objSmarty->assign('ErrorMessage', 'Snooze Hour should not be blank');
						return false;
					   }elseif(!$objArray['snooze_minutes']){
						$objSmarty->assign('ErrorMessage', 'Snooze Minute should not be blank');
						return false;
					   }elseif(!$objArray['snooze_seconds']){
						$objSmarty->assign('ErrorMessage', 'Snooze Seconds should not be blank');
						return false;
					   }*/
					   if(!$objArray['snooze_date']){
						$objSmarty->assign('ErrorMessage', 'Snooze Date should not be blank');
						return false;
						}
					/*  $st = $objArray['snooze_hours'].":".$objArray['snooze_minutes'].":".$objArray['snooze_seconds']; */

					/*  $ct = "NA";*/

			 }
			 else
			 {
					  /*if(!$objArray['closed_hours']){
						$objSmarty->assign('ErrorMessage', 'Closed Hours should not be blank');
						return false;
					   }elseif(!$objArray['closed_minutes']){
						$objSmarty->assign('ErrorMessage', 'Closed Minutes should not be blank');
						return false;
					   }elseif(!$objArray['closed_minutes']){
						$objSmarty->assign('ErrorMessage', 'Closed Seconds should not be blank');
						return false;
					   }*/
					   if(!$objArray['closed_date']){
						$objSmarty->assign('ErrorMessage', 'Closed Date should not be blank');
						return false;
					   }
					 /* $ct = $objArray['closed_hours'].":".$objArray['closed_minutes'].":".$objArray['closed_seconds']; */
			 		/*$st = "NA";*/
			 }
			}elseif(!$objArray['enquiry_type']){
			$objSmarty->assign('ErrorMessage', 'Enquiry Type should not be blank');
			return false;
			}elseif(!$objArray['reference_id']){
			$objSmarty->assign('ErrorMessage', 'Reference Id should not be blank');
			return false;
			}elseif(!$objArray['assign_to']){
			$objSmarty->assign('ErrorMessage', 'Assign To should not be blank');
			return false;
			}/*elseif((!$objArray['mobile_no'])){
			$objSmarty->assign('ErrorMessage', 'Mobile Number should not be blank');
			return false;
			}*/elseif(!$objArray['designation']){
			$objSmarty->assign('ErrorMessage', 'Designation should not be blank');
			return false;
			}elseif(!$objArray['mail_id']){
			$objSmarty->assign('ErrorMessage', 'Email should not be blank');
			return false;
			}/*elseif(!$objArray['landmark']){
			$objSmarty->assign('ErrorMessage', 'Landmark should not be blank');
			return false;
			}*/elseif(!$objArray['address']){
			$objSmarty->assign('ErrorMessage', 'Address should not be blank');
			return false;
			}elseif(!$objArray['area']){
			$objSmarty->assign('ErrorMessage', 'Area Field should not be blank');
			return false;
			}elseif(!$objArray['city']){
			$objSmarty->assign('ErrorMessage', 'City Field should not be blank');
			return false;
			}elseif(!$objArray['pincode']){
			$objSmarty->assign('ErrorMessage', 'Pincode Field should not be blank');
			return false;
			}
			$objSmarty->assign('enquiry_id', $objArray['enquiry_id']);
			if($objArray['enquiry_id'] && $objArray['customer_name']){

			$SelQuery = 'SELECT requirement FROM `'.$tbl.'enquriy_master` WHERE enquiry_id ="'.$_GET['enquiry_id'].'" AND status="1"';
			$Select = $this->ExecuteQuery($SelQuery, 'select');
			$t1 = $Select;
			//print_r($t1);exit;
			$t2 = $objArray['requirement'];
			if($t1 = $t2)
				{
$UpQuery = 'UPDATE `'.$tbl.'enquriy_master` SET `enquiry_id` = "'.trim($objArray['enquiry_id']).'",`'.$tbl.'group` = "'.trim($objArray[''.$tbl.'group']).'", `customer_name` = "'.trim($objArray['customer_name']).'", `enquiry_type` = "'.trim($objArray['enquiry_type']).'",`assign_to` = "'.trim($objArray['assign_to']).'", `mobile_no` = "'.trim($objArray['mobile_no']).'",`remarks` = "'.trim($objArray['remarks']).'",`company_code` = "'.trim($objArray['company_code']).'",`mobile_no1` = "'.trim($objArray['mobile_no1']).'",`po_no` = "'.trim($objArray['po_no']).'",`po_date` = "'.trim($objArray['po_date']).'", `mobile_no2` = "'.trim($objArray['mobile_no2']).'", `created_by` = "'.trim($objArray['created_by']).'",`snooze_date` = "'.trim($objArray['snooze_date']).'", `closed_date` = "'.trim($objArray['closed_date']).'", `address` = "'.trim($objArray['address']).'", `address1` = "'.trim($objArray['address1']).'",`area` = "'.trim($objArray['area']).'",`landmark` = "'.trim($objArray['landmark']).'", `remarks` = "'.trim($objArray['remarks']).'", `company_name` = "'.trim($objArray['company_name']).'",`enquiry_through` = "'.trim($objArray['enquiry_through']).'", `enquiry_status` = "'.trim($objArray['enquiry_status']).'", `open_status` = "'.trim($objArray['open_status']).'", `reference_id` = "'.trim($objArray['reference_id']).'", `designation` = "'.trim($objArray['designation']).'",`requirement` = "'.trim($objArray['requirement']).'",`city` = "'.trim($objArray['city']).'", `pincode` = "'.trim($objArray['pincode']).'", `email_id` = "'.trim($objArray['mail_id']).'", `email_id1` = "'.trim($objArray['mail_id1']).'" , `branch` = "'.trim($objArray['branch']).'", `PG` = "'.trim($objArray['pg']).'", `SSG` = "'.trim($objArray['ssg']).'", `Storage` = "'.trim($objArray['storage']).'", `status` = "1" WHERE `enquiry_id` ="'.trim($objArray['enquiry_id']).'"';
$this->ExecuteQuery($UpQuery, 'update');
				}
			else
				{

				$str = $objArray['requirement'];
 $InsQuery2 = 'INSERT INTO '.$tbl.'enquriy_followup(`enquiry_id`,`customer_id`,`enquiry_type`,`created_by`,`snooze_date`,`enquiry_status`,`open_status`,`requirement`,`created_date`,`created_time`,`status`) VALUES("'.trim(addslashes($objArray['enquiry_id'])).'","'.trim(addslashes($objArray['customer_id'])).'","'.trim(addslashes($objArray['enquiry_type'])).'","'.trim(addslashes($objArray['created_by'])).'","'.trim(addslashes($objArray['snooze_date'])).'","'.trim(addslashes($objArray['enquiry_status'])).'","'.trim(addslashes($objArray['open_status'])).'","'.$str.'","'.trim(addslashes($objArray['created_date'])).'","'.trim(addslashes($objArray['created_time'])).'","1")';
$this->ExecuteQuery($InsQuery2, 'insert');


$UpQuery = 'UPDATE `'.$tbl.'enquriy_master` SET `enquiry_id` = "'.trim($objArray['enquiry_id']).'",`'.$tbl.'group` = "'.trim($objArray[''.$tbl.'group']).'", `customer_name` = "'.trim($objArray['customer_name']).'", `enquiry_type` = "'.trim($objArray['enquiry_type']).'",`assign_to` = "'.trim($objArray['assign_to']).'", `mobile_no` = "'.trim($objArray['mobile_no']).'",`remarks` = "'.trim($objArray['remarks']).'",`company_code` = "'.trim($objArray['company_code']).'",`mobile_no1` = "'.trim($objArray['mobile_no1']).'",`po_no` = "'.trim($objArray['po_no']).'",`po_date` = "'.trim($objArray['po_date']).'", `mobile_no2` = "'.trim($objArray['mobile_no2']).'", `created_by` = "'.trim($objArray['created_by']).'",`snooze_date` = "'.trim($objArray['snooze_date']).'", `closed_date` = "'.trim($objArray['closed_date']).'", `address` = "'.trim($objArray['address']).'", `address1` = "'.trim($objArray['address1']).'",`area` = "'.trim($objArray['area']).'",`landmark` = "'.trim($objArray['landmark']).'", `remarks` = "'.trim($objArray['remarks']).'", `company_name` = "'.trim($objArray['company_name']).'",`enquiry_through` = "'.trim($objArray['enquiry_through']).'", `enquiry_status` = "'.trim($objArray['enquiry_status']).'",`open_status` = "'.trim($objArray['open_status']).'", `reference_id` = "'.trim($objArray['reference_id']).'", `designation` = "'.trim($objArray['designation']).'",`requirement` = "'.trim($objArray['requirement']).'",`city` = "'.trim($objArray['city']).'", `pincode` = "'.trim($objArray['pincode']).'", `email_id` = "'.trim($objArray['mail_id']).'", `email_id1` = "'.trim($objArray['mail_id1']).'" , `branch` = "'.trim($objArray['branch']).'", `PG` = "'.trim($objArray['pg']).'", `SSG` = "'.trim($objArray['ssg']).'", `Storage` = "'.trim($objArray['storage']).'",`status` = "1" WHERE `enquiry_id` ="'.trim($objArray['enquiry_id']).'"';
$this->ExecuteQuery($UpQuery, 'update');
}
header('Location:' .$_SERVER['PHP_SELF'].'?succs_msg_for_insert'."&"."enquiry_id=".$_GET['enquiry_id']);
return true;
}
}


 /*************************************************************Select Follow/************************************/
 function ViewFollow($objArray)
 {
 			$enq_id = base64_decode($_GET["enquiry_id"]);
 		 	global $objSmarty,$config;
		 	$tbl = $config['DBPrefix'];
		 	$SelQuery = 'SELECT * FROM `'.$tbl.'enquriy_followup` WHERE enquiry_id="'.$enq_id.'"';
			$ListView2 = $this->ExecuteQuery($SelQuery, "select");
			$objSmarty->assign('ListView2', $ListView2);
			//print_r($ListView2);exit;
			return $ListView2;

 }

/*********************************************Ajax Customer Details/********************************************/
function AjaxGetCustomerDetails($objArray="")
 {
global $objSmarty,$config;
$tbl = $config['DBPrefix'];

		$SelQuery = 'SELECT * FROM '.$tbl.'customer_master WHERE company_name ="'.$_GET['company_name'].'"' ;
		 $LDList		= $this->ExecuteQuery($SelQuery, "select");
		//print_r($LDList);
		$SelQuery_Cnt_Dtls = 'SELECT * FROM '.$tbl.'customer_contact_details WHERE customer_id ="'.$LDList[0]['customer_id'].'" AND status ="1"' ;
		$LDList_Cnt_Dtls   = $this->ExecuteQuery($SelQuery_Cnt_Dtls, "select");

	foreach($LDList_Cnt_Dtls as $keys=>$value)
	{
        $Cstmr_Dtls_array = '<option value="'.$LDList_Cnt_Dtls[$keys]["first_name"]. " " .$LDList_Cnt_Dtls[$keys]["last_name"].'">'.$LDList_Cnt_Dtls[$keys]["salutation"]. " . " .$LDList_Cnt_Dtls[$keys]["first_name"]." " .$LDList_Cnt_Dtls[$keys]["last_name"]." ( ".$LDList_Cnt_Dtls[$keys]["area"]." ) ".'</option>';
	 echo $Cstmr_Dtls_array."|$|".$LDList_Cnt_Dtls[$keys]["first_name"]. " " .$LDList_Cnt_Dtls[$keys]["last_name"]."_".$LDList_Cnt_Dtls[$keys]["designation"]."_".$LDList_Cnt_Dtls[$keys]["mobile_no"]."_".$LDList_Cnt_Dtls[$keys]["area"]."_".$LDList_Cnt_Dtls[$keys]["mail_id"]."_".$LDList_Cnt_Dtls[$keys]["mail_id1"]."_".$LDList_Cnt_Dtls[$keys]["area_code"]."_".$LDList_Cnt_Dtls[$keys]["phone_no"]."_".$LDList_Cnt_Dtls[$keys]["extension"]."_".$LDList_Cnt_Dtls[$keys]["salutation"]."|$|";
		}
		echo "|CUSID|".$LDList[0]['customer_id'];
		//print_r($Cstmr_Dtls_array);
}
/************************************Address Details/********************************************/

function AjaxGetAddressDetails()
 {
global $objSmarty,$config;
$tbl = $config['DBPrefix'];

		 $SelQuery = 'SELECT * FROM '.$tbl.'customer_master WHERE company_name ="'.$_GET['company_name'].'"' ;
		 $LDList		= $this->ExecuteQuery($SelQuery, "select");

		//print_r($LDList);
		$SelQuery_Add_Dtls = 'SELECT * FROM '.$tbl.'customer_address_details WHERE customer_id ="'.$LDList[0]['customer_id'].'" AND `area` ="'.$_GET['area'].'"' ;
		$LDList_Add_Dtls   = $this->ExecuteQuery($SelQuery_Add_Dtls, "select");
		//print_r($LDList_Add_Dtls);
		foreach($LDList_Add_Dtls as $keys=>$value)
		{
         echo $LDList_Add_Dtls[$keys]["address"]."_".$LDList_Add_Dtls[$keys]["address1"]."_".$LDList_Add_Dtls[$keys]["landmark"]."_".$LDList_Add_Dtls[$keys]["city"]."_".$LDList_Add_Dtls[$keys]["pincode"]."_".$LDList_Cnt_Dtls[$keys]["mobile_no"]."_".$LDList_Cnt_Dtls[$keys]["area"]."|$|";
		}

}

 function ViewFollowDetails($objArray)
 {
 		 global $objSmarty,$config;
			$tbl = $config['DBPrefix'];
	$SelQuery4 = 'SELECT * FROM `'.$tbl.'enquriy_followup` WHERE status="1"';
			$ListView2 = $this->ExecuteQuery($SelQuery4, "select");
			$objSmarty->assign('ListView2', $ListView2);
			return $ListView2;

 }
/************************************************************************Enquiry Sales Mail/*******************************************/
function SalesMailList()
{
 			global $objSmarty,$config;
			$tbl = $config['DBPrefix'];
 		 $SelQuery = 'SELECT * from '.$tbl.'customer_contact_details WHERE customer_id="'.$_GET["customer_id"].'"';
		 $EnqSalmailview = $this->ExecuteQuery($SelQuery, "select");
			//print_r($EnqSalmailview);exit;
			$objSmarty->assign('EnqSalmailview', $EnqSalmailview);
			//print_r($Sermailview);exit;
			return $EnqSalmailview;
}

/************************************************************************Enquiry Sales Mail/*******************************************/
function ServiceMailList()
{
 			global $objSmarty,$config;
			$tbl = $config['DBPrefix'];
		$SelQuery = 'SELECT * from '.$tbl.'customer_contact_details WHERE customer_id="'.$_GET["customer_id"].'"';
		 $EnqSermailview = $this->ExecuteQuery($SelQuery, "select");
			//print_r($AddressView);exit;
			$objSmarty->assign('EnqSermailview', $EnqSermailview);
			//print_r($Sermailview);exit;
			return $EnqSermailview;
}
/************************************************************************Enquiry Sales Mail/*******************************************/
function ViewProjectMail()
{
 			global $objSmarty,$config;
			$tbl = $config['DBPrefix'];
			$SelQuery = 'SELECT * from '.$tbl.'customer_contact_details WHERE customer_id="'.$_GET["customer_id"].'"';
			$EnqPromailview = $this->ExecuteQuery($SelQuery, "select");
			$objSmarty->assign('EnqPromailview', $EnqPromailview);
		
			
}

 // **********************      Insert Sales Mail /*****************************************  /////////////////
 function InsertMail($objArray, $objFiles){
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
			return false;			}
			$objSmarty->assign('mail_id2', $objArray['mail_id2']);

$InsQuery = 'INSERT INTO `'.$tbl.'enquiry_mail`(`enquiry_id`,`enquiry_type`,mail_from,`mail_to`,`mail_cc`,`mail_subject`,`message`,`mail_attachments1`,`mail_attachments2`,`mail_attachments3`,`created_by`,`created_date`,`created_time`,`status`) VALUES("'.trim(addslashes($objArray['enquiry_id'])).'","'.trim(addslashes($objArray['enquiry_type'])).'","'.trim(addslashes($objArray['mail_from'])).'","'.trim(addslashes($objArray['mail_id2'])).'","'.trim(addslashes($objArray['cc'])).'","'.trim(addslashes($objArray['subject'])).'","'.trim(addslashes($objArray['message'])).'","'.$f1.'","'.$f2.'","'.$f3.'","'.trim(addslashes($objArray['created_by'])).'","'.trim(addslashes($objArray['created_date'])).'","'.trim(addslashes($objArray['created_time'])).'","1")';
$this->ExecuteQuery($InsQuery, 'insert');

		$SelQuery = 'SELECT * From '.$tbl.'user_master WHERE username="'.trim(addslashes($objArray['created_by'])).'"';
		$UserMas = $this->ExecuteQuery($SelQuery, "select");
		$objSmarty->assign('UserMas', $UserMas);
	/************************************Query for Customer Name************************************/
		$SelQuery1 = 'SELECT * From '.$tbl.'enquriy_master WHERE enquiry_id="'.$_GET['enquiry_id'].'"';
		$EnqMail = $this->ExecuteQuery($SelQuery1, "select");
		$objSmarty->assign('EnqMail', $EnqMail);
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
		$Subject =' Welcome to '.$config['SiteTitle'] .','.$EnqMail[0]['customer_name'].$_POST['subject'] ;
		Send($To, $Message, $From, $Subject,$ccarr);
header('Location:' .$_SERVER['PHP_SELF'].'?succs_msg_for_insert'."&"."enquiry_id=".$_GET['enquiry_id']."&"."enquiry_type=".$_GET['enquiry_type']."&"."customer_id=".$_GET['customer_id']);

return true;

}
}
 /************************************* Requirement List/ *******************************************/
 function GetDemoProductLists($objArray='')  {
  global $objSmarty,$config;
  $tbl = $config['DBPrefix'];
   $SelQuery		= 'SELECT * FROM `'.$tbl.'product_master`';
   $PageList		= $this->ExecuteQuery($SelQuery, "select");
  if(!empty($PageList) && is_array($PageList))

   foreach($PageList as $key=>$value){
    $PageList[$key]['SName'] = stripslashes($PageList[$key]['product_code']);
   }

  $objSmarty->assign('i', $listing_split->i);
  $objSmarty->assign('PageList', $PageList);
  return $PageList;

}
/*******************************************************************************************Login User Roles list/ *********************************************/
  function RolesLists(){
	 global $objSmarty,$config;
  $tbl = $config['DBPrefix'];

	 $SelQuery1	= 'SELECT * FROM `'.$tbl.'group_mapping` WHERE `group_name` = "'.$_SESSION['USER_GROUP'].'" AND `status` <> 0 ORDER BY sl_no';
	  $RList		= $this->ExecuteQuery($SelQuery1, "select");

  if(!empty($RList) && is_array($RList))
   foreach($RList as $key=>$value){
    $RList[$key]['role_id'] = stripslashes($RList[$key]['role_id']);
	$RList[$key]['role_name'] = stripslashes($RList[$key]['role_name']);
	$objSmarty->assign('RList', $RList);
  return $RList;
		}
	}

 function projectToAddress1($ProIdent)
 {
			global $objSmarty,$config;
			$tbl = $config['DBPrefix'];
			$SelQuery1 = 'SELECT * FROM `'.$tbl.'project_quote_master` WHERE project_quote_no ="'.$ProIdent.'" AND status="1"';
			$AddressView = $this->ExecuteQuery($SelQuery1, "select");
			//print_r($AddressView);exit;
			$objSmarty->assign('AddressView', $AddressView);
			return $AddressView;

 }

}

?>
