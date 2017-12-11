<?php
  $s_no = $_GET["s_no"];
##### Class For Adding Content Management ######
class UsersReg extends MysqlFns{
 
 /* class constructor */
 function UsersReg(){
 $this->LDDisplayPath= $config['SiteGlobalPath']."class.UsersReg.php";
  global $config;
  global $objSmarty;
  $this->MysqlFns();
  $this->Limit = 20;
   $this->Keyword = '';
  $this->Operator = '';
  $this->PerPage = '';
  
  /******************************************************************User ID File write in Constructor**************************************/	
	$f1 = "user_id.txt";
	$uploadpath = $config['QuotePath'];
	//chmod($uploadpath.$f1,"777");
	$myfile = fopen($f1, "w") or die("Unable to open file!");
	$SelQuery1	= 'SELECT user_id FROM `arka_user_master`';
   	$UIDList	= $this->ExecuteQuery($SelQuery1, 'select');
	if(!empty($UIDList) && is_array($UIDList))
			foreach($UIDList as $key=>$value)
			{
				$UIDList[$key]['UID'] = stripslashes($UIDList[$key]['user_id']);
				$ids = $ids.$UIDList[$key]['UID'].",";
			}
	fwrite($myfile, $ids);
	fclose($myfile);

  
  /******************************************************************Department File write in Constructor**************************************/	
	$f2 = "department.txt";
	$uploadpath = $config['QuotePath'];
	//chmod($uploadpath.$f1,"777");
	$myfile = fopen($f2, "w") or die("Unable to open file!");
	$SelQuery2	= 'SELECT department FROM `arka_user_master`';
   	$DeptList	= $this->ExecuteQuery($SelQuery2, 'select');
	if(!empty($DeptList) && is_array($DeptList))
			foreach($DeptList as $key=>$value)
			{
				$DeptList[$key]['Dept'] = stripslashes($DeptList[$key]['department']);
				$dept = $dept.$DeptList[$key]['Dept'].",";
			}
	fwrite($myfile, $dept);
	fclose($myfile);

 /******************************************************************User Name File write in Constructor**************************************/	
	$f3 = "username.txt";
	$uploadpath = $config['QuotePath'];
	//chmod($uploadpath.$f1,"777");
	$myfile = fopen($f3, "w") or die("Unable to open file!");
	$SelQuery3	= 'SELECT username FROM `arka_user_master`';
   	$UnameList	= $this->ExecuteQuery($SelQuery3, 'select');
	if(!empty($UnameList) && is_array($UnameList))
			foreach($UnameList as $key=>$value)
			{
				$UnameList[$key]['Uname'] = stripslashes($UnameList[$key]['username']);
				$uname = $uname.$UnameList[$key]['Uname'].",";
			}
	fwrite($myfile, $uname);
	fclose($myfile);
 /******************************************************************User Name File write in Constructor**************************************/	
	$f4 = "user_email.txt";
	$uploadpath = $config['QuotePath'];
	//chmod($uploadpath.$f1,"777");
	$myfile = fopen($f4, "w") or die("Unable to open file!");
	$SelQuery4	= 'SELECT email_id FROM `arka_user_master`';
   	$EmailList	= $this->ExecuteQuery($SelQuery4, 'select');
	if(!empty($EmailList) && is_array($EmailList))
			foreach($EmailList as $key=>$value)
			{
				$EmailList[$key]['Email'] = stripslashes($EmailList[$key]['email_id']);
				$email = $email.$EmailList[$key]['Email'].",";
			}
	fwrite($myfile, $email);
	fclose($myfile);

   
 }
 /* Get the Static Content list */
 	function GetUserView($objArray='')  {
		global $objSmarty;
	//	$objSmarty->assign('dev_id',$_GET['dev_id']);
		$SelQuery = 'SELECT * FROM `arka_user_master`WHERE user_id ="'.$_GET['user_id'].'"' ;
		//echo $SelQuery;
		$LDList		= $this->ExecuteQuery($SelQuery, "select");
		$total_records = count($LDList);
		$record_per_page = $this->Limit;
		
	//	$objSmarty->assign("TList1",$_GET['dev_id']);
		/*$LDList[0]['title'] 		= stripslashes($LDList[0]['title']);
		$LDList[1]['txttitle'] 		= stripslashes($LDList[1]['txttitle']);
		$LDList[2]['image'] 		= stripslashes($LDList[2]['image']);*/
		 if(!empty($LDList) && is_array($LDList))
		{
			$objSmarty->assign("LDList2",$LDList);
			$objSmarty->assign("LDDisp", $this->LDDisplayPath);
			return $LDList2;
		}
		else{
			return false;
		}
		$objPage->set_page_data($_SERVER['PHP_SELF'],$total_records,$record_per_page,$scroll,true,true,true);
		$listing_split = new MsplitPageResults($SelQuery, $this->Limit);
		
		if ( ($listing_split->number_of_rows > 0) )  
		{
			$objSmarty->assign('LinkPage',$listing_split->display_count(TEXT_DISPLAY_NUMBER_OF_RESULT));
			$objSmarty->assign('PerPageNavigation',TEXT_RESULT_PAGE1 . ' ' . $listing_split->display_links($this->Limit, get_all_get_params(array('page', 'info', 'x', 'y')))); 
			$PageList = $this->ExecuteQuery($listing_split->SelQuery, 'selectassoc');
		}
		if(!empty($PageList) && is_array($PageList))
			foreach($PageList as $key=>$value)
			{
				$PageList[$key]['Title'] = stripslashes($PageList[$key]['device_id']);
				$PageList[$key]['Image'] = stripslashes($PageList[$key]['device_name']);
				$objSmarty->assign('Title',$PageList[$key]['dev_id']);
				$objSmarty->assign('Image',$PageList[$key]['device_name']);
			}		
			$objSmarty->assign('i', $listing_split->i);
			$objSmarty->assign('PageList', $PageList);
			echo $PageList;
			return $PageList;
	}	


 //Create FCK Editor
 function CreateFCKeditor($value = ''){
  global $config, $objSmarty;

  include($config['FckEditorPath'] . '/fckeditor.php');
  $sBasePath = $config['SiteFCKEditorBasePath'];

  $oFCKeditor 			= new FCKeditor('content') ;
  $oFCKeditor->BasePath	= $sBasePath ;
  $oFCKeditor->Width		= 600 ;
  $oFCKeditor->Height		= 450 ;
  $oFCKeditor->Value		= $value;
  $objSmarty->assign('Editor', $oFCKeditor->Create());
 }
 
 /* Get the Static Content list */
 function GetUsersLists($objArray='')  {
  global $objSmarty;

  //$objSmarty->assign('title',$_GET['title']);
  $whereClause = '';
  if($_POST['search'] == ''){
  			if($_POST['customer_id'])
	   			$whereClause = ' WHERE (`customer_id` like "%'.$_POST['customer_id'].'%")';
	   		elseif($_POST['customer_name'])
	   			$whereClause = ' WHERE (`customer_name` like "%'.$_POST['customer_name'].'%")';
			elseif($_POST['user_id'])
				$whereClause = ' WHERE (`user_id` like "%'.$_POST['user_id'].'%")';
			elseif($_POST['user_group'])
				$whereClause = ' WHERE (`user_group` like "%'.$_POST['user_group'].'%")';
			elseif($_POST['department'])
				$whereClause = ' WHERE (`department` like "%'.$_POST['department'].'%")';
			elseif($_POST['username'])
				$whereClause = ' WHERE (`username` like "%'.$_POST['username'].'%")';
			elseif($_POST['mobile'])
				$whereClause = ' WHERE (`mobile` like "%'.$_POST['mobile'].'%")';
			elseif($_POST['email_id'])
				$whereClause = ' WHERE (`email_id` like "%'.$_POST['email_id'].'%")';
			elseif($_POST['modified_date'])
				$whereClause = ' WHERE (`modified_date` like "%'.$_POST['modified_date'].'%")';
			elseif($_POST['status'])
				$whereClause = ' WHERE (`status` like "%'.$_POST['status'].'%")';
			
				
   $objSmarty->assign('customer_id',$_POST['customer_id']);
   $objSmarty->assign('customer_name',$_POST['customer_name']);
   $objSmarty->assign('user_id',$_POST['user_id']);
   $objSmarty->assign('user_group',$_POST['user_group']);
   $objSmarty->assign('department',$_POST['department']);
   $objSmarty->assign('username',$_POST['username']);
   $objSmarty->assign('mobile',$_POST['mobile']);
   $objSmarty->assign('email_id',$_POST['email_id']);
   $objSmarty->assign('modified_date',$_POST['modified_date']);
   $objSmarty->assign('status',$_POST['status']);
   
  }
  $SelQuery		= 'SELECT * FROM `arka_user_master`'.$whereClause;
  $listing_split = new MsplitPageResults($SelQuery, $this->Limit);
  if ( ($listing_split->number_of_rows > 0) )  {
   $objSmarty->assign('LinkPage',$listing_split->display_count(TEXT_DISPLAY_NUMBER_OF_RESULT));
   $objSmarty->assign('PerPageNavigation',TEXT_RESULT_PAGE1 . ' ' . $listing_split->display_links($this->Limit, get_all_get_params(array('page', 'info', 'x', 'y')))); 
   $UList = $this->ExecuteQuery($listing_split->sql_query, 'selectassoc');
  }
  if(!empty($UList) && is_array($UList))

   foreach($UList as $key=>$value){
    $UList[$key]['ID'] = stripslashes($UList[$key]['customer_id']);
	$UList[$key]['Cname'] = stripslashes($UList[$key]['customer_name']);
	$UList[$key]['UID'] = stripslashes($UList[$key]['user_id']);
	$UList[$key]['Uugroup'] = stripslashes($UList[$key]['user_group']);
	$UList[$key]['Udepartment'] = stripslashes($UList[$key]['department']);
	$UList[$key]['Uusername'] = stripslashes($UList[$key]['username']);
	$UList[$key]['Umobile'] = stripslashes($UList[$key]['mobile']);
	$UList[$key]['Uemail_id'] = stripslashes($UList[$key]['email_id']);
	$UList[$key]['Umodified_date'] = stripslashes($UList[$key]['modified_date']);
	$UList[$key]['Ustatus'] = stripslashes($UList[$key]['status']);
	 if($UList[$key]['Ustatus'] == 1){
	 $UList[$key]['Ustatus'] ='Active';
	}
	elseif($UList[$key]['Ustatus'] == 0){
	 $UList[$key]['Ustatus'] ='InActive';
	}
   }

  $objSmarty->assign('i', $listing_split->i);
  $objSmarty->assign('UList', $UList);
  return $UList;
 
}

function GetStaffLists($objArray='')  {
  global $objSmarty;
  $whereClause = ' WHERE `customer_name` = "arka Cares" or  `customer_name` ="arka Power Products"';
  if($_POST['search'] == ''){
  			if($_POST['staff_name'])
	   			$whereClause = ' WHERE (`username` like "%'.$_POST['staff_name'].'%")';
	   		elseif($_POST['mobile'])
	   			$whereClause = ' WHERE (`mobile` like "%'.$_POST['mobile'].'%")';
			elseif($_POST['email'])
				$whereClause = ' WHERE (`email_id` like "%'.$_POST['email'].'%")';
				
   $objSmarty->assign('staff_name',$_POST['staff_name']);
   $objSmarty->assign('mobile',$_POST['mobile']);
   $objSmarty->assign('email',$_POST['email']);
  }
  $SelQuery		= 'SELECT * FROM `arka_user_master`'.$whereClause;
  $listing_split = new MsplitPageResults($SelQuery, $this->Limit);
  if ( ($listing_split->number_of_rows > 0) )  {
   $objSmarty->assign('LinkPage',$listing_split->display_count(TEXT_DISPLAY_NUMBER_OF_RESULT));
   $objSmarty->assign('PerPageNavigation',TEXT_RESULT_PAGE1 . ' ' . $listing_split->display_links($this->Limit, get_all_get_params(array('page', 'info', 'x', 'y')))); 
   $SList = $this->ExecuteQuery($listing_split->sql_query, 'selectassoc');
  }
  if(!empty($SList) && is_array($SList))

   foreach($SList as $key=>$value){
    $SList[$key]['UName'] = stripslashes($SList[$key]['username']);
	$SList[$key]['Mobile'] = stripslashes($SList[$key]['mobile']);
	$SList[$key]['Email'] = stripslashes($SList[$key]['email_id']);
   }
  $objSmarty->assign('i', $listing_split->i);
  $objSmarty->assign('SList', $SList);
  return $SList;
 
}
 /* Delete the Static Page */
 function DeleteCus($CusIdent){
  global $objSmarty;
 $DelQuery = 'DELETE FROM `arka_user_master` WHERE `user_id` ="'.$CusIdent.'"';
	$this->ExecuteQuery($DelQuery, 'delete');
  return true;
 }
 
 /* Insert the content for  Static Pages */
 function InsertUserContent($objArray){

  global $objSmarty;
  $objSmarty->assign('Keyword', $this->Keyword);
  $objSmarty->assign('Operator', $this->Operator);
  $objSmarty->assign('Offset', $this->Offset);
  $objSmarty->assign('PerPage', $this->PerPage);
  
if(!$objArray['cname']){
    $objSmarty->assign('ErrorMessage', 'Customer Name should not be blank');
	return false;
   }elseif(!$objArray['user_status']){
    $objSmarty->assign('ErrorMessage', 'User Status should not be blank');
	return false;
   }elseif(!$objArray['u_id']){
    $objSmarty->assign('ErrorMessage', 'User ID should not be blank');
	return false;
   }elseif(!$objArray['username']){
    $objSmarty->assign('ErrorMessage', 'Username should not be blank');
	return false;
   }elseif(!$objArray['email_id']){
    $objSmarty->assign('ErrorMessage', 'Email_ID Name should not be blank');
	return false;
   }elseif(!$objArray['password']){
    $objSmarty->assign('ErrorMessage', 'Password should not be blank');
	return false;
   }elseif(!$objArray['user_group']){
    $objSmarty->assign('ErrorMessage', 'Support Group should not be blank');
	return false;
   }elseif(!$objArray['mobile']){
    $objSmarty->assign('ErrorMessage', 'Mobile  should not be blank');
	return false;
   }
   //echo $objArray['user_status'];
    if($this->ChkDupliUsr(trim(addslashes($objArray['u_id'])))){
  
   $objSmarty->assign('u_id', $objArray['u_id']);
   if($objArray['u_id'] && $objArray['password'] ){
   $InsQuery = 'INSERT INTO `arka_user_master`(`user_id`, `username`, `department`, `user_group`, `mobile`, `phone`,`email_id`, `password`, `type`, `customer_name`,`created_date`, `created_time`, `modified_date`, `modified_time`, `user_status`) VALUES("'.trim(addslashes($objArray['u_id'])).'","'.trim(addslashes($objArray['username'])).'","'.trim(addslashes($objArray['department'])).'","'.trim(addslashes($objArray['user_group'])).'","'.trim(addslashes($objArray['mobile'])).'","'.trim(addslashes($objArray['phone'])).'","'.trim(addslashes($objArray['email_id'])).'","'.trim(addslashes($objArray['password'])).'","'.trim(addslashes($objArray['c_type'])).'","'.trim(addslashes($objArray['cname'])).'","'.trim(addslashes($objArray['cr_date'])).'","'.trim(addslashes($objArray['cr_time'])).'","'.trim(addslashes($objArray['mode_date'])).'","'.trim(addslashes($objArray['mod_time'])).'","'.trim(addslashes($objArray['user_status'])).'")';
	$this->ExecuteQuery($InsQuery, 'insert');
	$objSmarty->assign('u_id',$objArray['u_id']);
	//$oFCKeditor->Value		= '';
	$objSmarty->assign('u_id', '');
        header('Location:' .$_SERVER['PHP_SELF'].'?succs_msg_for_insert');
	
   }
  }
  else{
   $objSmarty->assign('u_id', $objArray['u_id']);
   $objSmarty->assign('ErrorMessage', 'User ID Already Exists, Please Choose Another User ID');
  // PrePopulate($objArray, 'UsrDetails');
  }
 }
 
 /* Edit the Static Page */
 function EditUser($objArray){
  global $objSmarty,$_REQUEST;

  $CusIdent=$_REQUEST['u_id'];
  
if(!$objArray['cname']){
    $objSmarty->assign('ErrorMessage', 'Customer Name should not be blank');
	return false;
   }elseif(!$objArray['user_status']){
    $objSmarty->assign('ErrorMessage', 'User Status should not be blank');
	return false;
   }elseif(!$objArray['u_id']){
    $objSmarty->assign('ErrorMessage', 'User ID should not be blank');
	return false;
   }elseif(!$objArray['username']){
    $objSmarty->assign('ErrorMessage', 'Username should not be blank');
	return false;
   }elseif(!$objArray['email_id']){
    $objSmarty->assign('ErrorMessage', 'Email_ID Name should not be blank');
	return false;
   }elseif(!$objArray['password']){
    $objSmarty->assign('ErrorMessage', 'Password should not be blank');
	return false;
   }elseif(!$objArray['user_group']){
    $objSmarty->assign('ErrorMessage', 'Support Group should not be blank');
	return false;
   }elseif(!$objArray['mobile']){
    $objSmarty->assign('ErrorMessage', 'Mobile  should not be blank');
	return false;
   }
   //echo $objArray['user_status'];
    $objSmarty->assign('u_id', $objArray['u_id']);
   if($objArray['u_id'] && $objArray['username'] && $objArray['password']){
   	$UpQuery = 'UPDATE `arka_user_master` SET `user_status`= "'.trim($objArray['user_status']).'",`username` = "'.trim($objArray['username']).'", `department` = "'.trim($objArray['department']).'", `user_group` = "'.trim($objArray['user_group']).'", `mobile` = "'.trim($objArray['mobile']).'", `phone` = "'.trim($objArray['phone']).'", `email_id` = "'.trim($objArray['email_id']).'", `password` = "'.trim($objArray['password']).'", `modified_date` = "'.trim($objArray['mod_date']).'", `modified_time` = "'.trim($objArray['mod_time']).'" WHERE `user_id` ="'.trim($objArray['u_id']).'"';
	$this->ExecuteQuery($UpQuery, 'update');
        header('Location:' .$_SERVER['PHP_SELF'].'?succs_msg_for_update'."&"."user_id=".$objArray['u_id']);
	
	//PrePopulate($objArray, 'LDList');
	return true;
	
   }
  }
 
 
 /* Display the Static Page */
 function GetUserById(){
  global $objSmarty;
/*  $objSmarty->assign('Keyword', $this->Keyword);
  $objSmarty->assign('Operator', $this->Operator);
  $objSmarty->assign('Offset', $this->Offset);
  $objSmarty->assign('PerPage', $this->PerPage);*/
  $SelQuery		= 'SELECT max(user_id) FROM `arka_user_master` Limit 0,1';
  $UsrDetails		= $this->ExecuteQuery($SelQuery, 'select');
  $UsrDetails[0]['user_id'] = stripslashes($UsrDetails[0]['customer_detail']);
  $objSmarty->assign('hdevice_id', stripslashes($UsrDetails[0]['user_id']));
  $val = intval(substr($UsrDetails[0]['customer_id'],0,4), 5);
  $objSmarty->assign('c_id', $UsrDetails[0]['customer_id']);
 /* 
  $DevDetail[0]['type'] = stripslashes($DevDetail[0]['type']);
  $objSmarty->assign('type', $DevDetail[0]['type']);
  
  $DevDetail[0]['model'] = stripslashes($DevDetail[0]['model']);
  $objSmarty->assign('model', $DevDetail[0]['model']);
  
  $DevDetail[0]['txttitle'] = stripslashes($DevDetail[0]['txttitle']);
  $objSmarty->assign('txttitle', $DevDetail[0]['txttitle']);
  
  $DevDetail[0]['image'] = stripslashes($DevDetail[0]['image']);
  $objSmarty->assign('image', $DevDetail[0]['image']);
  
  $DevDetail[0]['image_view'] = stripslashes($DevDetail[0]['image_view']);
  $objSmarty->assign('image_view', $DevDetail[0]['image_view']);
  
  $DevDetail[0]['image_model1'] = stripslashes($DevDetail[0]['image_model1']);
  $objSmarty->assign('image_model1', $DevDetail[0]['image_model1']);
  
   $DevDetail[0]['image_model2'] = stripslashes($DevDetail[0]['image_model2']);
  $objSmarty->assign('image_model2', $DevDetail[0]['image_model2']);
  
   $DevDetail[0]['image_model3'] = stripslashes($DevDetail[0]['image_model3']);
  $objSmarty->assign('image_model3', $DevDetail[0]['image_model3']);
  
  $DevDetail[0]['content'] = stripslashes($DevDetail[0]['content']);
  $oFCKeditor->Value = $DevDetail[0]['content'];
  $objSmarty->assign('content', $DevDetail[0]['content']);
  $objSmarty->assign('Editor', '$Editor');
  return $DevDetail[0]['content'];*/
 }
 /* Validation for Static Pages */
 function ChkDupliUsr($u_id, $Ident=''){
  global $objSmarty;
  if(!empty($Ident))
 // $WhereClause	= ' AND `id` != '.$Ident;
 $SelQuerys		= 'SELECT * FROM `arka_user_master` WHERE `user_id` = "'.$u_id.'" Limit 0,1';
  $UsrDetails		= $this->ExecuteQuery($SelQuerys, 'select');
  if(!empty($UsrDetails) && is_array($UsrDetails))
   return false;
  else
   return true;
 }
 
 
 /* Delete the Static Page */
 function DeleteID($id){
  global $objSmarty;
  $DelQuery = 'DELETE FROM `arka_user_master` WHERE `customer_id`='.$c_id; 
  $this->ExecuteQuery($DelQuery, 'delete');
  $objSmarty->assign('SuccessMessage', 'Deleted Successfully');
 }
 /*Roles list */
 
 function RolesLists(){
	global $objSmarty;
	 $SelQuery1	= 'SELECT role_name FROM arka_group_mapping WHERE `group_name` = "'.$_SESSION['USER_GROUP'].'" ORDER BY sl_no';
	  $RList		= $this->ExecuteQuery($SelQuery1, "select");
		
  if(!empty($RList) && is_array($RList))
   foreach($RList as $key=>$value){
    $RList[$key]['role_id'] = stripslashes($RList[$key]['role_id']);
	$RList[$key]['role_name'] = stripslashes($RList[$key]['role_name']);
	$objSmarty->assign('RList', $RList);
  return $RList;
		} 
//return true;
	}
 
 /* Activate, Deactivate and Delete for the Static Pages */
 function ActiveContent($objArray){
  global $objSmarty;
  if(!empty($objArray['ConId']) && is_array($objArray['ConId']))
   $BanIds		= implode(',' , $objArray['ConId']);
  else
   $objSmarty->assign('ErrorMessage', 'No Content Selected');
  if(!empty($BanIds))
   switch($objArray['Submit']){
    case 'Delete':
	 $DelQuery = 'DELETE FROM `arka_user_master` WHERE `id` IN ( '.$BanIds.' )' ;
	 $this->ExecuteQuery($DelQuery, 'delete');
	 $objSmarty->assign('SuccessMessage', 'Deleted Successfully');
	 break;
	case 'Active':
	 $UpQuery = 'UPDATE `arka_user_master` SET `user_status` =1 WHERE `id` IN (' . $BanIds . ')' ;
	 $this->ExecuteQuery($UpQuery, 'update');
	 $objSmarty->assign('SuccessMessage', 'The Contents Activated Successfully');
	 break;
	case 'InActive':
	 $UpQuery = 'UPDATE `arka_user_master` SET `user_status` =0 WHERE `id` IN (' . $BanIds . ')' ;
	 $this->ExecuteQuery($UpQuery, 'update');
	 $objSmarty->assign('SuccessMessage', 'The Contents In-Activated Successfully');
	 break;
   }
 }


function GetCustTrackLists()
{
	global $objSmarty;
	
    $SelQuery_User = 'SELECT username,department FROM `arka_user_master` WHERE user_status ="1"' ;	
	$UserList		   = $this->ExecuteQuery($SelQuery_User, "select");	
	
	
	$Customer_cnt=array();
	$Remark_cnt=array();
	$Demo_cnt=array();
	$Product_cnt=array();
	$session_user_name=array();	
	
			foreach($UserList as $key=>$value)
			{
			
					$session_user     = $UserList[$key]['username']." [ ".$UserList[$key]['department']." ]";
					
					$SelQuery_Cstmr = 'SELECT count(customer_id) as count FROM `arka_customer_reg_master` WHERE created_by ="'.$session_user.'" AND `status`="1" AND MONTH(created_date) = MONTH(CURDATE())' ;	
					$CustomerList   = $this->ExecuteQuery($SelQuery_Cstmr, "select");	
					$Customer_cnt   = array_merge($Customer_cnt,$CustomerList); 
					
					$SelQuery3 = 'SELECT count(customer_id) as count FROM `arka_customer_remarks_details` WHERE created_by ="'.$session_user.'" AND `status`="1" AND MONTH(created_date) = MONTH(CURDATE())' ;
					$RemarkList   = $this->ExecuteQuery($SelQuery3, "select");	
					$Remark_cnt   = array_merge($Remark_cnt,$RemarkList); 
					
					$SelQuery4 = 'SELECT count(demo_id) as count FROM `arka_demo_master` WHERE created_by ="'.$session_user.'" AND `delete_status`="1" AND MONTH(created_date) = MONTH(CURDATE())';	
					$DemoList   = $this->ExecuteQuery($SelQuery4, "select");	
					$Demo_cnt   = array_merge($Demo_cnt,$DemoList); 	
					
					$SelQuery5 = 'SELECT count(customer_id) as count FROM `arka_product_quote` WHERE created_by ="'.$session_user.'" AND `status`="1" AND MONTH(created_date) = MONTH(CURDATE())';		
					$ProductList   = $this->ExecuteQuery($SelQuery5, "select");	
					$Product_cnt   = array_merge($Product_cnt,$ProductList); 
					
					$session_user     = array($session_user);
					$session_user_name=array_merge($session_user_name,$session_user);	
								
			}


		  if(!empty($UserList) && is_array($UserList))
		    {	
			$objSmarty->assign('UserList', $UserList);
			$objSmarty->assign('Customer_cnt', $Customer_cnt);
			$objSmarty->assign('Remark_cnt', $Remark_cnt);
			$objSmarty->assign('Demo_cnt', $Demo_cnt);
			$objSmarty->assign('Product_cnt', $Product_cnt);
			$objSmarty->assign('session_user_name',$session_user_name);
			
		  	return $UserList;
			} 	
}
}

?>


