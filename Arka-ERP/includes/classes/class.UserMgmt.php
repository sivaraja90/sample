<?php
#####Class For Adding Content Management ######
class UserMgmt extends MysqlFns{
 /* class constructor */
 function UserMgmt(){
 $this->LDDisplayPath= $config['SiteGlobalPath']."class.UserMgmt.php";
  global $config;
  global $objSmarty, $config;
$tbl = $config['DBPrefix'];
$usrd_id = base64_decode($_GET["s_no"]);
  $this->MysqlFns();
    /**************************************User Id Auto Increment*********************************************************/
			$SelQuerys	= 'SELECT max(user_id) as last FROM `'.$tbl.'user_master` Limit 0,1';
			$UserDetail	= $this->ExecuteQuery($SelQuerys, 'select');
			if($UserDetail[0]['last']!="")
			{
			$UserDetail[0]['user_id'] = stripslashes($UserDetail[0]['last']);
			$c_id1 = preg_replace("/[^0-9\.]/", '', $UserDetail[0]['user_id']);
			$c_id1= $c_id1 + 1;
			$str = str_split($UserDetail[0]['last'], 3);
			$c_id = $str[0]. "" .$c_id1;
			}
			else
			{
			$c_id = "UR1001";
			}
			$objSmarty->assign('c_id', $c_id);
/*******************************Auto Suggest For Company Name**********************************************************************/
			$f1 = "user_group.txt";
			$uploadpath = $config['QuotePath'];
			$myfile = fopen($f1, "w") or die("Unable to open file!");
			$SelQuery1	= 'SELECT DISTINCT group_name FROM `'.$tbl.'user_group_master` WHERE status="1"';
			$CusList	= $this->ExecuteQuery($SelQuery1, 'select');
			if(!empty($CusList) && is_array($CusList))
			foreach($CusList as $key=>$value)
			{
			$CusList[$key]['UGroup'] = stripslashes($CusList[$key]['group_name']);
			$names = $names.$CusList[$key]['UGroup'].",";
			}
			fwrite($myfile, $names);
			fclose($myfile);
 }
 /*****function InsertUser()******/
 /*****function GetUserView()*******/
 /*****function ViewEdit()******/
 /*****function ListUser()******/
 /*****function EditUser()******/
 /*****function DeleteMaster()******/
 /*****function ListContact()******/
 /*************************************************Insert User/***************************************************************/
 function InsertUser($objArray, $objFiles){
global $objSmarty, $config,$_POST;
$tbl = $config['DBPrefix'];
	list ($name,$format) = split("[.]", $objFiles['image']['name'],2);
		$uploadpath = $config['UserImagePath'];
		if($objFiles['image']["name"] <> "")
		{

			    $errors     = array();
   				$maxsize    = 5242880;
   				$acceptable = array(
				'image/jpeg','image/jpg','image/gif','image/png');
		if(($_FILES['image']['size'] >= $maxsize) || ($_FILES["image"]["size"] == 0)) {
		$errors2[] = 'File --2-- too large. File must be less than 5 MB';
		}

		if((!in_array($_FILES['image']['type'], $acceptable)) && (!empty($_FILES["image"]["type"])))
		 {
		$errors3[] = 'File --2-- Only PDF, JPG, JPEG, GIF and PNG types are accepted';
		}

		if(count($errors2)  === 0 && count($errors3)  === 0)
		{
			if((!file_exists($config['UserImagePath'] . $_FILES["image"]["name"])))
			{
				$f1 = $objFiles['image']['name'];

				if(move_uploaded_file($objFiles['image']['tmp_name'], $uploadpath.$f1))
				chmod($uploadpath.$f1,"777");

			}
			elseif((file_exists($config['UserImagePath'] . $_FILES["image"]["name"])))

			{	$f1 = explode(".", $_FILES['image']['name']);

				$newfilename = round(microtime(true)) . '.' . end($f1);
				if(move_uploaded_file($objFiles['image']['tmp_name'], $uploadpath.$newfilename))
				chmod($uploadpath.$newfilename,"777");
				$f1=$newfilename;

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

			if(!$objArray['company_name']){
			$objSmarty->assign('ErrorMessage', 'Company Name should not be blank');
			return false;
			}
			elseif(!$objArray['company_code']){
			$objSmarty->assign('ErrorMessage', 'Company Code should not be blank');
			return false;
			}
			elseif(!$objArray['sex']){
			$objSmarty->assign('ErrorMessage', 'Sex should not be blank');
			return false;
			}
			elseif(!$objArray['designation']){
			$objSmarty->assign('ErrorMessage', 'Designation should not be blank');
			return false;
			}elseif(!$objArray['department']){
			$objSmarty->assign('ErrorMessage', 'Department should not be blank');
			return false;
			}elseif(!$objArray['mobile_no']){
			$objSmarty->assign('ErrorMessage', 'Mobile Number Should be blank');
			return false;
			}elseif(!$objArray['mail_id']){
			$objSmarty->assign('ErrorMessage', 'Email Id Field should not be blank');
			return false;
			}elseif(!$objArray['user_group']){
			$objSmarty->assign('ErrorMessage', 'User Group should not be blank');
			return false;
			}
			elseif(!$objArray['password']){
			$objSmarty->assign('ErrorMessage', 'Password Field should not be blank');
			return false;
			}
			elseif(!$objArray['re_password']){
			$objSmarty->assign('ErrorMessage', 'Re Password should not be blank');
			return false;
			}
			$objSmarty->assign('mail_id', $objArray['mail_id']);
			if($objArray['mail_id']){
 $InsQuery = 'INSERT INTO `'.$tbl.'user_master`(`user_id`,`username`,`company_name`,`company_code`,`salutation`,`contact_fname`,`contact_lname`,`emp_id`,`sex`, `designation`, `department`, `mobile`,`mobile1`,`image`,`email_id`,`email_id1`, `area`,`area1`,`phone`, `phone1`,`extension`,`extension1`,`user_group`,`password`,`re_password`,`created_by`,`created_date`, `created_time`,`remarks`,`user_status`) VALUES("'.trim(addslashes($objArray['user_id'])).'","'.trim(addslashes($objArray['user_name'])).'","'.trim(addslashes($objArray['company_name'])).'","'.trim(addslashes($objArray['company_code'])).'","'.trim(addslashes($objArray['salutation'])).'","'.trim(addslashes($objArray['emp_first_name'])).'","'.trim(addslashes($objArray['emp_last_name'])).'","'.trim(addslashes($objArray['emp_id'])).'","'.trim(addslashes($objArray['sex'])).'","'.trim(addslashes($objArray['designation'])).'","'.trim(addslashes($objArray['department'])).'","'.trim(addslashes($objArray['mobile_no'])).'","'.trim(addslashes($objArray['mobile_no1'])).'","'.$f1.'","'.trim(addslashes($objArray['mail_id'])).'","'.trim(addslashes($objArray['mail_id1'])).'","'.trim(addslashes($objArray['area_code'])).'","'.trim(addslashes($objArray['area_code1'])).'","'.trim(addslashes($objArray['phone_no'])).'","'.trim(addslashes($objArray['phone_no1'])).'","'.trim(addslashes($objArray['extension'])).'","'.trim(addslashes($objArray['extension1'])).'","'.trim(addslashes($objArray['user_group'])).'","'.trim(addslashes($objArray['password'])).'","'.trim(addslashes($objArray['re_password'])).'","'.trim(addslashes($objArray['created_by'])).'","'.trim(addslashes($objArray['created_date'])).'","'.trim(addslashes($objArray['created_time'])).'","'.trim(addslashes($objArray['remarks'])).'","1")';
$this->ExecuteQuery($InsQuery, 'insert');
//Success Message
header('Location:' .$_SERVER['PHP_SELF'].'?succs_msg_for_insert');
return true;
 }
}
/*************************************************View User/***************************************************************/
	function GetUserView()
	{
	global $objSmarty, $config;
$tbl = $config['DBPrefix'];
		$SelQuery = 'SELECT * FROM `'.$tbl.'user_master` WHERE user_status="1"';
		$ListView		= $this->ExecuteQuery($SelQuery, "select");
		$objSmarty->assign("ListView",$ListView);
		return $ListView;
		}
 /*************************************************View Edit User/***************************************************************/
function ViewEdit($objArray)
 {
 $usrd_id = base64_decode($_GET["s_no"]);
 global $objSmarty, $config;
			$tbl = $config['DBPrefix'];
			$SelQuery = 'SELECT * FROM '.$tbl.'user_master WHERE s_no="'.$usrd_id.'"';
			$ListEdit = $this->ExecuteQuery($SelQuery, "select");
			$objSmarty->assign('ListEdit', $ListEdit);
			return $ListEdit;
 }
 /*************************************************List User***************************************************************/
 function ListUser()
 {global $objSmarty, $config;
$tbl = $config['DBPrefix'];
			$SelQuery = 'SELECT '.$tbl.'user_master.* FROM `'.$tbl.'user_master` WHERE user_status="1" AND s_no="'.$_GET['s_no'].'"';
			$ListView = $this->ExecuteQuery($SelQuery, "select");
			$objSmarty->assign('ListView', $ListView);
			return $ListView;
}
   /**********************************************Delete Contact/*********************************************************************/
 function DeleteMaster($CatIdent)
 {global $objSmarty, $config;
$tbl = $config['DBPrefix'];
			$DelQuery = 'update `'.$tbl.'user_master` set `user_status` = 0 WHERE `s_no` ="'.$CatIdent.'"';
			$this->ExecuteQuery($DelQuery, 'update');
            header('Location:' .$_SERVER['PHP_SELF'].'?succs_msg_for_del');
 }
 /****************************************************Time Stamp Value As Date And Time Form Master/****************************************/
  function DateStamp()
 {global $objSmarty, $config;
$tbl = $config['DBPrefix'];
$usrd_id = base64_decode($_GET["s_no"]);
			 $SelQuery = 'SELECT Date(timestamp_value) as Date from '.$tbl.'user_master WHERE s_no="'.$usrd_id.'"';
			 $Date_Stamp = $this->ExecuteQuery($SelQuery, "select");
			  //print $Date;
			 $objSmarty->assign('Date_Stamp', $Date_Stamp);
			 return $Date_Stamp;
}
  function TimeStamp()
  {global $objSmarty, $config;
$tbl = $config['DBPrefix'];
$usrd_id = base64_decode($_GET["s_no"]);
			 $SelQuery1 = 'SELECT  Time(timestamp_value) as Time from '.$tbl.'user_master WHERE s_no="'.$usrd_id.'"';
			 $Time_Stamp = $this->ExecuteQuery($SelQuery1, "select");
			 $objSmarty->assign('Time_Stamp', $Time_Stamp);
			 return $Time_Stamp;
 }
 /******************************************User Profile**********************************************************************/
function GetUserProfile($objArray=''){
		global $objSmarty;
		global $objSmarty, $config,$_POST;
$tbl = $config['DBPrefix'];
		 $SelQuery = 'SELECT '.$tbl.'user_master.*, '.$tbl.'employee_master.* FROM `'.$tbl.'user_master`,`'.$tbl.'employee_master` WHERE  '.$tbl.'user_master.emp_id='.$tbl.'employee_master.emp_id AND '.$tbl.'user_master.username="'.$_SESSION['UserName'].'"';
		$PageList		= $this->ExecuteQuery($SelQuery, "select");
        $objSmarty->assign('PageList', $PageList);
	}
function GetUpdateProfile($objArray=''){
global $objSmarty;
		global $objSmarty, $config, $_POST;
		$tbl = $config['DBPrefix'];
		 $UpQuery1 = 'UPDATE '.$tbl.'user_master SET `password` = "'.$_POST['new_password'].'",`re_password`="'.$_POST['retype_new_password'].'",`created_date`="'.$_POST['created_date'].'",`created_time`="'.$_POST['created_time'].'",`timestamp_value`="'.$_POST['timestamp'].'" WHERE `s_no` = "'.$_POST['s_no'].'"';
 		$this->ExecuteQuery($UpQuery1, 'update');
	 	header('Location:' .$_SERVER['PHP_SELF'].'?s_no='.$_GET['s_no'].'&server_profile=update succeed');
	}
 /*************************************************Edit User/***************************************************************/
function EditUser($objArray ,$objFiles){
global $objSmarty, $config,$_POST;
$tbl = $config['DBPrefix'];

$usrd_id = base64_decode($_GET["s_no"]);
	list ($name,$format) = split("[.]", $objFiles['image']['name'],2);
		$uploadpath = $config['UserImagePath'];
		if($objFiles['image']["name"] <> "")
		{

			    $errors     = array();
   				$maxsize    = 5242880;
   				$acceptable = array(
				'image/jpeg','image/jpg','image/gif','image/png');
		if(($_FILES['image']['size'] >= $maxsize) || ($_FILES["image"]["size"] == 0)) {
		$errors2[] = 'File --2-- too large. File must be less than 5 MB';
		}

		if((!in_array($_FILES['image']['type'], $acceptable)) && (!empty($_FILES["image"]["type"])))
		 {echo"format";
		$errors3[] = 'File --2-- Only PDF, JPG, JPEG, GIF and PNG types are accepted';
		}

		if(count($errors2)  === 0 && count($errors3)  === 0)
		{
			if((!file_exists($config['UserImagePath'] . $_FILES["image"]["name"])))
			{
				$f1 = $objFiles['image']['name'];
				if(move_uploaded_file($objFiles['image']['tmp_name'], $uploadpath.$f1))
				chmod($uploadpath.$f1,"777");

			}
			elseif((file_exists($config['UserImagePath'] . $_FILES["image"]["name"])))

			{	$f1 = explode(".", $_FILES['image']['name']);
				$newfilename = round(microtime(true)) . '.' . end($f1);
				if(move_uploaded_file($objFiles['image']['tmp_name'], $uploadpath.$newfilename))
				chmod($uploadpath.$newfilename,"777");
				$f1=$newfilename;
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
		/*if(!$objArray['user_id']){
			$objSmarty->assign('ErrorMessage', 'User ID should not be blank');
			return false;
			}elseif(!$objArray['user_name']){
			$objSmarty->assign('ErrorMessage', 'Name of the user should not be blank');
			return false;
			}*/if(!$objArray['company_name']){
			$objSmarty->assign('ErrorMessage', 'Company Name should not be blank');
			return false;
			}elseif(!$objArray['company_code']){
			$objSmarty->assign('ErrorMessage', 'Company Code should not be blank');
			return false;
			}elseif(!$objArray['sex']){
			$objSmarty->assign('ErrorMessage', 'Sex should not be blank');
			return false;
			}elseif(!$objArray['designation']){
			$objSmarty->assign('ErrorMessage', 'Designation should not be blank');
			return false;
			}elseif(!$objArray['department']){
			$objSmarty->assign('ErrorMessage', 'Department should not be blank');
			return false;
			}elseif(!$objArray['mobile_no']){
			$objSmarty->assign('ErrorMessage', 'Mobile Number Should not be blank');
			return false;
			}elseif(!$objArray['mail_id']){
			$objSmarty->assign('ErrorMessage', 'Email Id Field should not be blank');
			return false;
			}elseif(!$objArray['user_group']){
			$objSmarty->assign('ErrorMessage', 'User Group should not be blank');
			return false;
			}elseif(!$objArray['password']){
			$objSmarty->assign('ErrorMessage', 'Password Field should not be blank');
			return false;
			}elseif(!$objArray['re_password']){
			$objSmarty->assign('ErrorMessage', 'Re Password should not be blank');
			return false;
			}
			$objSmarty->assign('company_name', $objArray['company_name']);
			$SelQuery = 'SELECT * FROM `'.$tbl.'user_master` WHERE s_no="'.$usrd_id.'"';
	$ListView = $this->ExecuteQuery($SelQuery, "select");
	 $first=$ListView[0]['image'];
	 $first1=$f1;
	if($first1 == ""){
			if($objArray['company_name']){
  $UpQuery = 'UPDATE `'.$tbl.'user_master` SET `user_id` = "'.trim($objArray['user_id']).'", `username` = "'.trim($objArray['user_name']).'", `company_name` = "'.trim($objArray['company_name']).'", `company_code` = "'.trim($objArray['company_code']).'", `salutation` = "'.trim($objArray['salutation']).'",`contact_fname` = "'.trim($objArray['contact_fname']).'",`contact_lname` = "'.trim($objArray['contact_lname']).'",`sex` = "'.trim($objArray['sex']).'",`designation` = "'.trim($objArray['designation']).'",`department` = "'.trim($objArray['department']).'", `mobile` = "'.trim($objArray['mobile_no']).'", `mobile1` = "'.trim($objArray['mobile_no1']).'",`image` = "'.$ListView[0]['image'].'",`email_id` = "'.trim($objArray['mail_id']).'",`phone` = "'.trim($objArray['phone_no']).'",`phone1` = "'.trim($objArray['phone_no1']).'",`extension` = "'.trim($objArray['extension']).'",`extension1` = "'.trim($objArray['extension1']).'",`user_group` = "'.trim($objArray['user_group']).'",`created_by` = "'.trim($objArray['created_by']).'",`password` = "'.trim($objArray['password']).'",`re_password` = "'.trim($objArray['re_password']).'", `remarks` = "'.trim($objArray['remarks']).'", `created_date` = "'.trim($objArray['created_date']).'", `created_time` = "'.trim($objArray['created_time']).'", `timestamp_value` = "'.trim($objArray['timestamp_value']).'",`user_status` = "1" WHERE `contact_fname` = "'.trim($objArray['contact_fname']).'"';
$this->ExecuteQuery($UpQuery, 'update');
header('Location:' .$_SERVER['PHP_SELF'].'?succs_msg_for_insert'."&"."s_no=".$_GET['s_no']);
}
}
else{
 $UpQuery = 'UPDATE `'.$tbl.'user_master` SET `user_id` = "'.trim($objArray['user_id']).'", `username` = "'.trim($objArray['user_name']).'", `company_name` = "'.trim($objArray['company_name']).'", `company_code` = "'.trim($objArray['company_code']).'", `salutation` = "'.trim($objArray['salutation']).'",`contact_fname` = "'.trim($objArray['contact_fname']).'",`contact_lname` = "'.trim($objArray['contact_lname']).'",`sex` = "'.trim($objArray['sex']).'",`designation` = "'.trim($objArray['designation']).'",`department` = "'.trim($objArray['department']).'", `mobile` = "'.trim($objArray['mobile_no']).'", `mobile1` = "'.trim($objArray['mobile_no1']).'",`image` = "'.$f1.'",`email_id` = "'.trim($objArray['mail_id']).'",`phone` = "'.trim($objArray['phone_no']).'",`phone1` = "'.trim($objArray['phone_no1']).'",`extension` = "'.trim($objArray['extension']).'",`extension1` = "'.trim($objArray['extension1']).'",`user_group` = "'.trim($objArray['user_group']).'",`created_by` = "'.trim($objArray['created_by']).'",`password` = "'.trim($objArray['password']).'",`re_password` = "'.trim($objArray['re_password']).'", `remarks` = "'.trim($objArray['remarks']).'", `created_date` = "'.trim($objArray['created_date']).'", `created_time` = "'.trim($objArray['created_time']).'", `timestamp_value` = "'.trim($objArray['timestamp_value']).'",`user_status` = "1" WHERE contact_fname = "'.trim($objArray['contact_fname']).'"';
$this->ExecuteQuery($UpQuery, 'update');
header('Location:' .$_SERVER['PHP_SELF'].'?succs_msg_for_insert'."&"."s_no=".$_GET['s_no']);
return true;
}
}
 /*********************************************Ajax Customer Details********************************************/
function AjaxGetEmployeeDetails($objArray="")
 {
global $objSmarty,$config;
$tbl = $config['DBPrefix'];
		$SelQuery = 'SELECT * FROM '.$tbl.'employee_master WHERE company_name ="'.$_GET['company_name'].'"' ;
		 $LDList		= $this->ExecuteQuery($SelQuery, "select");
		//print_r($LDList);
	foreach($LDList as $keys=>$value)
	{
        $Cstmr_Dtls_array = '<option value="'.$LDList[$keys]["emp_first_name"]. " " .$LDList[$keys]["emp_last_name"].'">'.$LDList[$keys]["salutation"]. " . " .$LDList[$keys]["emp_first_name"]." " .$LDList[$keys]["emp_last_name"]." ( ".$LDList[$keys]["emp_id"]." ) ".'</option>';
	 echo $Cstmr_Dtls_array."|$|".$LDList[$keys]["emp_first_name"]. " " .$LDList[$keys]["emp_last_name"]."_" .$LDList[$keys]["emp_id"]."_" .$LDList[$keys]["designation"]."_" .$LDList[$keys]["mobile"]."_" .$LDList[$keys]["mail_id"]."|$|";
		}
		echo "|COMP|".$LDList[0]['company_code'];
}
/********************************************************************************/
function AjaxGetAddressDetails()
 {
global $objSmarty,$config;
$tbl = $config['DBPrefix'];
		 $SelQuery = 'SELECT * FROM '.$tbl.'employee_master WHERE`emp_id` ="'.$_GET['emp_id'].'"';
		 $LDList		= $this->ExecuteQuery($SelQuery, "select");
		foreach($LDList as $keys=>$value)
		{
         echo $LDList[$keys]["designation"]."_".$LDList[$keys]["department"]."_".$LDList[$keys]["company_mail"]."_".$LDList[$keys]["area_code"]."_".$LDList[$keys]["phone_no"]."_".$LDList[$keys]["extension"]."_".$LDList[$keys]["mobile"]."_".$LDList[$keys]["area"]."_".$LDList[$keys]["emp_first_name"]."_".$LDList[$keys]["emp_last_name"]."_".$LDList[$keys]["salutation"]."|$|";
		}
}
}

?>
