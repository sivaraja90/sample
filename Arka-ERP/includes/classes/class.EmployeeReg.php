<?php
#####Class For Adding Content Management ######
class EmployeeReg extends MysqlFns{
 /* class constructor */
 function EmployeeReg(){
 $this->LDDisplayPath= $config['SiteGlobalPath']."class.EmployeeReg.php";
  global $config; 
  $this->MysqlFns();
  $this->Limit = 20;
 global $objSmarty ,$config;
  $tbl = $config['DBPrefix'];
  $emplo_id = base64_decode($_GET["emp_id"]);
/**************************************Customer Id Auto Increment/*********************************************************/
 $SelQuerys	= 'SELECT max(emp_id) as last FROM '.$tbl.'employee_master WHERE status="1" Limit 0,1';
 		$EmpDetail	= $this->ExecuteQuery($SelQuerys, 'select');
		if($EmpDetail[0]['last']!="")
			{
			$EmpDetail[0]['emp_id'] = stripslashes($EmpDetail[0]['last']);
			$e_id1 = preg_replace("/[^0-9\.]/", '', $EmpDetail[0]['emp_id']);
			$e_id1= $e_id1 + 1;
			$str = str_split($EmpDetail[0]['last'], 3);
			$e_id = $str[0]. "" .$e_id1;
			}
			else
			{
			$e_id = "EMP1001";
			}
			$objSmarty->assign('e_id', $e_id);
 }
 /*****function InsertMaterial()****/
 /*****function ViewMaterial()******/
 /*****function ViewEditMaterial()******/
 /*****function DeletedMaterial()******/
 /*****Time Stamp Value()*****/
 /***** As Date And Time()****/
 /***** fuction EditMaterial()****/
 /*************************************************Insert Material/***************************************************************/
 function InsertEmployeeContent($objArray ,$objFiles){
 global $objSmarty, $config,$_POST;
$tbl = $config['DBPrefix'];
	list ($name,$format) = split("[.]", $objFiles['image1']['name'],2);
	
		$uploadpath = $config['EmployeeImagePath']; 
		if($objFiles['image1']["name"] <> "")
		{	
			
			    $errors     = array();
   				$maxsize    = 5242880;
   				$acceptable = array(
				'image/jpeg','image/jpg','image/gif','image/png');
		if(($_FILES['image1']['size'] >= $maxsize) || ($_FILES["image1"]["size"] == 0)) {
		$errors2[] = 'File --2-- too large. File must be less than 5 MB';
		}
		
		if((!in_array($_FILES['image1']['type'], $acceptable)) && (!empty($_FILES["image1"]["type"])))
		 {echo"format";
		$errors3[] = 'File --2-- Only PDF, JPG, JPEG, GIF and PNG types are accepted';
		}
		
		if(count($errors2)  === 0 && count($errors3)  === 0) 
		{
			if((!file_exists($config['EmployeeImagePath'] . $_FILES["image1"]["name"])))
			{  
				$f1 = $objFiles['image1']['name'];
				if(move_uploaded_file($objFiles['image1']['tmp_name'], $uploadpath.$f1))
				chmod($uploadpath.$f1,"777");
				
			}
			elseif((file_exists($config['EmployeeImagePath'] . $_FILES["image1"]["name"]))) 
		
			{	$f1 = explode(".", $_FILES['image1']['name']);
				$newfilename = round(microtime(true)) . '.' . end($f1);
				if(move_uploaded_file($objFiles['image1']['tmp_name'], $uploadpath.$newfilename))
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
	}elseif(!$objArray['salutation']){
    $objSmarty->assign('ErrorMessage', 'Salutation  should not be blank');
	return false;
    }elseif(!$objArray['emp_first_name']){
    $objSmarty->assign('ErrorMessage', 'First Name should not be blank');
	return false;
    }elseif(!$objArray['emp_last_name']){
    $objSmarty->assign('ErrorMessage', 'Last Naame should not be blank');
	return false;
    }elseif(!$objArray['company_code']){
    $objSmarty->assign('ErrorMessage', 'Company Code should not be blank');
	return false;
    }elseif(!$objArray['father_name']){
    $objSmarty->assign('ErrorMessage', 'Father Name should not be blank');
	return false;
	}elseif(!$objArray['mother_name']){
    $objSmarty->assign('ErrorMessage', 'Mother Name should not be blank');
	return false;
    }elseif(!$objArray['d_o_b']){
    $objSmarty->assign('ErrorMessage', 'DOB should be blank');
	return false;
    }elseif(!$objArray['sex']){
    $objSmarty->assign('ErrorMessage', 'Sex should be blank');
	return false;
    }elseif(!$objArray['qualification']){
    $objSmarty->assign('ErrorMessage', 'Qualification should not be blank');
	return false;
    }elseif(!$objArray['joining_date']){
    $objSmarty->assign('ErrorMessage', 'Joining Date should not be blank');
	return false;
    }elseif(!$objArray['department']){
    $objSmarty->assign('ErrorMessage', 'Department should not be blank');
	return false;
    }elseif(!$objArray['address1']){
    $objSmarty->assign('ErrorMessage', 'Address should not be blank');
	return false;
    }elseif(!$objArray['area']){
    $objSmarty->assign('ErrorMessage', 'Area should not be blank');
	return false;
    }elseif(!$objArray['pincode']){
    $objSmarty->assign('ErrorMessage', 'Pincode should not be blank');
	return false;
    }elseif(!$objArray['personal_mail']){
    $objSmarty->assign('ErrorMessage', 'Personal Mail should not be blank');
	return false;
    }elseif(!$objArray['company_mail']){
    $objSmarty->assign('ErrorMessage', 'Company Mail should not be blank');
	return false;
    }elseif(!$objArray['no_of_year_exp']){
    $objSmarty->assign('ErrorMessage', 'No Of Year Exp should not be blank');
	return false;
    }elseif(!$objArray['residence_mobile']){
    $objSmarty->assign('ErrorMessage', 'Residence Mobile should not be blank');
	return false;
    }elseif(!$objArray['created_by']){
    $objSmarty->assign('ErrorMessage', 'Created By should not be blank');
	return false;
    }
   $objSmarty->assign('emp_id', $objArray['emp_id']);
   if($objArray['emp_id'] && $objArray['company_name']){
 $InsQuery = 'INSERT INTO `'.$tbl.'employee_master`(`emp_id`, `company_name`, `salutation`, `emp_first_name`, `emp_last_name`, `company_code`, `father_name`, `mother_name`, `d_o_b`,`sex`, `image`,`mobile`, `mobile_1`, `area_code`, `phone1`, `extension`, `area_code1`, `phone_no`, `extension1`, `qualification`, `joining_date`, `department`, `designation`, `address1`, `address2`, `area`, `pincode`, `personal_mail`, `company_mail` , `no_of_year_exp`, `residence_mobile`,`created_by`, `remarks`, `created_date`, `created_time`, `status`) VALUES("'.trim(addslashes($objArray['emp_id'])).'","'.trim(addslashes($objArray['company_name'])).'","'.trim(addslashes($objArray['salutation'])).'","'.trim(addslashes($objArray['emp_first_name'])).'","'.trim(addslashes($objArray['emp_last_name'])).'","'.trim(addslashes($objArray['company_code'])).'","'.trim(addslashes($objArray['father_name'])).'","'.trim(addslashes($objArray['mother_name'])).'","'.trim(addslashes($objArray['d_o_b'])).'","'.trim(addslashes($objArray['sex'])).'","'.$f1.'","'.trim(addslashes($objArray['mobile_1'])).'","'.trim(addslashes($objArray['mobile_2'])).'","'.trim(addslashes($objArray['area_code'])).'","'.trim(addslashes($objArray['phone1'])).'","'.trim(addslashes($objArray['extension'])).'","'.trim(addslashes($objArray['area_code1'])).'","'.trim(addslashes($objArray['phone_2'])).'","'.trim(addslashes($objArray['extension1'])).'","'.trim(addslashes($objArray['qualification'])).'","'.trim(addslashes($objArray['joining_date'])).'","'.trim(addslashes($objArray['department'])).'","'.trim(addslashes($objArray['designation'])).'","'.trim(addslashes($objArray['address1'])).'","'.trim(addslashes($objArray['address2'])).'","'.trim(addslashes($objArray['area'])).'","'.trim(addslashes($objArray['pincode'])).'","'.trim(addslashes($objArray['personal_mail'])).'","'.trim(addslashes($objArray['company_mail'])).'","'.trim(addslashes($objArray['no_of_year_exp'])).'","'.trim(addslashes($objArray['residence_mobile'])).'","'.trim(addslashes($objArray['created_by'])).'","'.trim(addslashes($objArray['remarks'])).'","'.trim(addslashes($objArray['created_date'])).'","'.trim(addslashes($objArray['created_time'])).'","1")';
  	$this->ExecuteQuery($InsQuery, 'insert');
	//$objSmarty->assign('SuccessMessage', 'New Employee Added  Successfully');
	header('Location:' .$_SERVER['PHP_SELF'].'?server_response');
	return true;
   }
   }
    /*************************************************View Material/***************************************************************/
   	function GetemployeeView()  { 
	  global $objSmarty, $config;  
      $tbl = $config['DBPrefix'];
		$SelQuery = 'SELECT * FROM `'.$tbl.'employee_master` WHERE status="1" ORDER BY emp_id DESC';
		$ListView		= $this->ExecuteQuery($SelQuery, "select");
		$objSmarty->assign("ListView",$ListView);
		return $ListView;
 }
 /*************************************************View Edit Material/***************************************************************/
function ViewEdit($objArray)
 { 
 $emplo_id = base64_decode($_GET["emp_id"]);  
 global $objSmarty, $config;
 $tbl = $config['DBPrefix'];  
			$SelQuery = 'SELECT * FROM `'.$tbl.'employee_master` WHERE emp_id="'.$emplo_id.'"';    
			$ListView = $this->ExecuteQuery($SelQuery, "select");   
			$objSmarty->assign('ListView', $ListView);
			//print_r($ListView);exit;
			return $ListView;
 }
 /**********************************************Delete Contact/*********************************************************************/
 function DeleteMaster($CatIdent)
 {  
  global $objSmarty, $config;
  $tbl = $config['DBPrefix'];
			$DelQuery = 'update `'.$tbl.'employee_master` set `status` = 0 WHERE `emp_id` ="'.$CatIdent.'"';
			$this->ExecuteQuery($DelQuery, 'update');
            header('Location:' .$_SERVER['PHP_SELF'].'?succs_msg_for_del');  
			 }
  /****************************************************Time Stamp Value As Date And Time Form Master/****************************************/
  function DateStamp()
 {   
 global $objSmarty, $config;
  $tbl = $config['DBPrefix'];
$emplo_id = base64_decode($_GET["emp_id"]);
			 $SelQuery = 'SELECT Date(timestamp_value) as Date from '.$tbl.'employee_master WHERE emp_id="'.$emplo_id.'"';
			 $Date_Stamp = $this->ExecuteQuery($SelQuery, "select");
			  //print $Date;
			 $objSmarty->assign('Date_Stamp', $Date_Stamp);
			 return $Date_Stamp;
}

  function TimeStamp()
  {   
  global $objSmarty, $config;
  $tbl = $config['DBPrefix'];
  $emplo_id = base64_decode($_GET["emp_id"]);
			 $SelQuery1 = 'SELECT  Time(timestamp_value) as Time from '.$tbl.'employee_master WHERE emp_id="'.$emplo_id.'"';
			 $Time_Stamp = $this->ExecuteQuery($SelQuery1, "select");
			 $objSmarty->assign('Time_Stamp', $Time_Stamp);
			 return $Time_Stamp;
 }
 /*******************************************************************************************Login User Roles list/ *********************************************/
  function RolesLists(){
	 global $objSmarty,$config;
  $tbl = $config['DBPrefix'];

	 $SelQuery1	= 'SELECT * FROM `'.$tbl.'user_group_mapping` WHERE `group_name` = "'.$_SESSION['USER_GROUP'].'" AND `status` <> 0 ORDER BY sl_no';
	  $RList		= $this->ExecuteQuery($SelQuery1, "select");

  if(!empty($RList) && is_array($RList))
   foreach($RList as $key=>$value){
    $RList[$key]['role_id'] = stripslashes($RList[$key]['role_id']);
	$RList[$key]['role_name'] = stripslashes($RList[$key]['role_name']);
	$objSmarty->assign('RList', $RList);
  return $RList;
		}
	}
   /************************************************************************ Edit the Customer Details/*******************************************/
 function Editemployee($objArray,$objFiles){
global $objSmarty, $config;
$tbl = $config['DBPrefix'];
$emplo_id = base64_decode($_GET["emp_id"]); 
	list ($name,$format) = split("[.]", $objFiles['image1']['name'],2);
	
		$uploadpath = $config['EmployeeImagePath']; 
		if($objFiles['image1']["name"] <> "")
		{	
			
			    $errors     = array();
   				$maxsize    = 5242880;
   				$acceptable = array(
				'image/jpeg','image/jpg','image/gif','image/png');
		if(($_FILES['image1']['size'] >= $maxsize) || ($_FILES["image1"]["size"] == 0)) {
		$errors2[] = 'File --2-- too large. File must be less than 5 MB';
		}
		
		if((!in_array($_FILES['image1']['type'], $acceptable)) && (!empty($_FILES["image1"]["type"])))
		 {echo"format";
		$errors3[] = 'File --2-- Only PDF, JPG, JPEG, GIF and PNG types are accepted';
		}
		
		if(count($errors2)  === 0 && count($errors3)  === 0) 
		{
			if((!file_exists($config['EmployeeImagePath'] . $_FILES["image1"]["name"])))
			{  
				$f1 = $objFiles['image1']['name'];
				if(move_uploaded_file($objFiles['image1']['tmp_name'], $uploadpath.$f1))
				chmod($uploadpath.$f1,"777");
				
			}
			elseif((file_exists($config['EmployeeImagePath'] . $_FILES["image1"]["name"]))) 
		
			{	$f1 = explode(".", $_FILES['image1']['name']);
				$newfilename = round(microtime(true)) . '.' . end($f1);
				if(move_uploaded_file($objFiles['image1']['tmp_name'], $uploadpath.$newfilename))
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
	}elseif(!$objArray['salutation']){
    $objSmarty->assign('ErrorMessage', 'Salutation  should not be blank');
	return false;
    }elseif(!$objArray['emp_first_name']){
    $objSmarty->assign('ErrorMessage', 'First Name should not be blank');
	return false;
    }elseif(!$objArray['emp_last_name']){
    $objSmarty->assign('ErrorMessage', 'Last Naame should not be blank');
	return false;
    }elseif(!$objArray['company_code']){
    $objSmarty->assign('ErrorMessage', 'Company Code should not be blank');
	return false;
    }elseif(!$objArray['father_name']){
    $objSmarty->assign('ErrorMessage', 'Father Name should not be blank');
	return false;
	}elseif(!$objArray['mother_name']){
    $objSmarty->assign('ErrorMessage', 'Mother Name should not be blank');
	return false;
    }elseif(!$objArray['d_o_b']){
    $objSmarty->assign('ErrorMessage', 'DOB should not be blank');
	return false;
    }elseif(!$objArray['sex']){
    $objSmarty->assign('ErrorMessage', 'Sex should not be blank');
	return false;
    }elseif(!$objArray['qualification']){
    $objSmarty->assign('ErrorMessage', 'Qualification should not be blank');
	return false;
    }elseif(!$objArray['joining_date']){
    $objSmarty->assign('ErrorMessage', 'Joining Date should not be blank');
	return false;
    }elseif(!$objArray['department']){
    $objSmarty->assign('ErrorMessage', 'Department should not be blank');
	return false;
    }elseif(!$objArray['address1']){
    $objSmarty->assign('ErrorMessage', 'Address should not be blank');
	return false;
    }elseif(!$objArray['area']){
    $objSmarty->assign('ErrorMessage', 'Area should not be blank');
	return false;
    }elseif(!$objArray['pincode']){
    $objSmarty->assign('ErrorMessage', 'Pincode should not be blank');
	return false;
    }elseif(!$objArray['personal_mail']){
    $objSmarty->assign('ErrorMessage', 'Personal Mail should not be blank');
	return false;
    }elseif(!$objArray['company_mail']){
    $objSmarty->assign('ErrorMessage', 'Company Mail should not be blank');
	return false;
    }elseif(!$objArray['no_of_year_exp']){
    $objSmarty->assign('ErrorMessage', 'No Of Year Exp should not be blank');
	return false;
    }elseif(!$objArray['residence_mobile']){
    $objSmarty->assign('ErrorMessage', 'Residence Mobile should not be blank');
	return false;
    }elseif(!$objArray['created_by']){
    $objSmarty->assign('ErrorMessage', 'Created By should not be blank');
	return false;
   }
    $objSmarty->assign('company_name', $objArray['company_name']);
	$SelQuery = 'SELECT * FROM `'.$tbl.'employee_master` WHERE emp_id="'.$emplo_id.'"';    
	$ListView = $this->ExecuteQuery($SelQuery, "select");   
	 $first=$ListView[0]['image1'];
	 $first1=$f1;
	if($first1 == ""){
	 $UpQuery = 'UPDATE `'.$tbl.'employee_master` SET `company_name` = "'.trim($objArray['company_name']).'", `salutation` = "'.trim($objArray['salutation']).'", `emp_first_name` = "'.trim($objArray['emp_first_name']).'", `emp_last_name` = "'.trim($objArray['emp_last_name']).'", `company_code` = "'.trim($objArray['company_code']).'", `father_name` = "'.trim($objArray['father_name']).'", `mother_name` = "'.trim($objArray['mother_name']).'", `d_o_b` = "'.trim($objArray['d_o_b']).'", `sex` = "'.trim($objArray['sex']).'",`mobile_1` = "'.trim($objArray['mobile_1']).'", `mobile_2` = "'.trim($objArray['mobile_2']).'", `area_code` = "'.trim($objArray['area_code']).'", `phone1` = "'.trim($objArray['phone1']).'", `extension` = "'.trim($objArray['extension']).'",`qualification` = "'.trim($objArray['qualification']).'",  `joining_date` = "'.trim($objArray['joining_date']).'",  `department` = "'.trim($objArray['department']).'",  `designation` = "'.trim($objArray['designation']).'",  `address1` = "'.trim($objArray['address1']).'",  `address2` = "'.trim($objArray['address2']).'",  `area` = "'.trim($objArray['area']).'",  `pincode` = "'.trim($objArray['pincode']).'",  `personal_mail` = "'.trim($objArray['personal_mail']).'",`company_mail` = "'.trim($objArray['company_mail']).'",  `no_of_year_exp` = "'.trim($objArray['no_of_year_exp']).'",  `residence_mobile` = "'.trim($objArray['residence_mobile']).'",`created_by` = "'.trim($objArray['created_by']).'",`remarks` = "'.trim(addslashes($objArray['remarks'])).'",`status` = "1" WHERE `emp_id` ="'.trim($objArray['emp_id']).'"';
	$this->ExecuteQuery($UpQuery, 'update');
	}
else
 {
	 $UpQuery = 'UPDATE `'.$tbl.'employee_master` SET `company_name` = "'.trim($objArray['company_name']).'", `salutation` = "'.trim($objArray['salutation']).'", `emp_first_name` = "'.trim($objArray['emp_first_name']).'", `emp_last_name` = "'.trim($objArray['emp_last_name']).'", `company_code` = "'.trim($objArray['company_code']).'", `father_name` = "'.trim($objArray['father_name']).'", `mother_name` = "'.trim($objArray['mother_name']).'", `d_o_b` = "'.trim($objArray['d_o_b']).'", `sex` = "'.trim($objArray['sex']).'", `image` = "'.$f1.'",`mobile_1` = "'.trim($objArray['mobile_1']).'", `mobile_2` = "'.trim($objArray['mobile_2']).'", `area_code` = "'.trim($objArray['area_code']).'", `phone1` = "'.trim($objArray['phone1']).'", `extension` = "'.trim($objArray['extension']).'", `area_code1` = "'.trim($objArray['area_code1']).'", `phone_no` = "'.trim($objArray['phone_no']).'", `extension1` = "'.trim($objArray['extension1']).'",   `qualification` = "'.trim($objArray['qualification']).'",  `joining_date` = "'.trim($objArray['joining_date']).'",  `department` = "'.trim($objArray['department']).'",  `designation` = "'.trim($objArray['designation']).'",  `address1` = "'.trim($objArray['address1']).'",  `address2` = "'.trim($objArray['address2']).'",  `area` = "'.trim($objArray['area']).'",  `pincode` = "'.trim($objArray['pincode']).'",  `personal_mail` = "'.trim($objArray['personal_mail']).'",`company_mail` = "'.trim($objArray['company_mail']).'",  `no_of_year_exp` = "'.trim($objArray['no_of_year_exp']).'",  `residence_mobile` = "'.trim($objArray['residence_mobile']).'",`created_by` = "'.trim($objArray['created_by']).'",`remarks` = "'.trim(addslashes($objArray['remarks'])).'",`status` = "1" WHERE `emp_id` ="'.trim($objArray['emp_id']).'"';
	$this->ExecuteQuery($UpQuery, 'update');

	//echo $InsQuery = 'INSERT INTO `'.$tbl.'employee_master`(`image`)VALUES("'.$ListView[0]['image1'].'") WHERE `emp_id` ="'.trim($objArray['emp_id']).'"';
	
	/*echo $InsQuery ='INSERT INTO `'.$tbl.'employee_master`( image ) VALUES ( "'.$ListView[0]['image1'].'") WHERE `emp_id` ="'.trim($objArray['emp_id']).'"';
	$this->ExecuteQuery($InsQuery, 'insert');
*/	
	/*$UpQuery3 = 'Update `'.$tbl.'employee_master` SET `image` = "'.$ListView[0]['image1'].'" WHERE `emp_id` ="'.trim($objArray['emp_id']).'"';
	$this->ExecuteQuery($UpQuery, 'update');*/

/*echo $InsQuery = 'INSERT INTO `'.$tbl.'employee_master`(`image`)VALUES("'.$f1.'") WHERE `emp_id` ="'.trim($objArray['emp_id']).'"';
	$this->ExecuteQuery($InsQuery, 'insert');
*/	
	/*$UpQuery3 = 'Update `'.$tbl.'employee_master` SET `image` = "'.$ListView[0]['image1'].'" WHERE `emp_id` ="'.trim($objArray['emp_id']).'"';
	$this->ExecuteQuery($UpQuery, 'update');*/
}
//Success Message
header('Location:' .$_SERVER['PHP_SELF'].'?succs_msg_for_insert'."&"."emp_id=".$_GET['emp_id']);
return true;
}
   }
?>