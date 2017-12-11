<?php
#####Class For Adding Content Management ######
class UserroleReg extends MysqlFns{
 
 /* class constructor */
 function UserroleReg(){
 $this->LDDisplayPath= $config['SiteGlobalPath']."class.UserroleReg.php";
  global $config;global $objSmarty,$config;
$tbl = $config['DBPrefix'];
  $this->MysqlFns();
  $this->Limit = 20;
  $ussrol_id = base64_decode($_GET["role_id"]);
  /**************************************Role Id Auto Increment*********************************************************/
			$SelQuerys	= 'SELECT max(role_id) as last FROM `'.$tbl.'user_role_master` Limit 0,1';
			$RoleDetail	= $this->ExecuteQuery($SelQuerys, 'select');
			$RoleDetail[0]['role_id'] = stripslashes($RoleDetail[0]['last']);
			$r_id1 = preg_replace("/[^0-9\.]/", '', $RoleDetail[0]['role_id']);
			$r_id1= $r_id1 + 1;
			$str = str_split($RoleDetail[0]['last'],2);//CUS
			$r_id = $str[0]. "" .$r_id1;
			$objSmarty->assign('r_id', $r_id);
}
 
  /*****function InsertRole()****/
 /*****function ViewRole()******/
 /*****function ListRole()******/
 /*****function DateStamp()*********/
 /*****function TimeStamp()*********/
 /*****function EditRole()******/
 /*************************************************Insert Role/***************************************************************/
 function InsertRole($objArray="")
 {global $objSmarty,$config,$_POST;
$tbl = $config['DBPrefix'];

			if(!$objArray['role_name']){
			$objSmarty->assign('ErrorMessage', 'Name of the Role should not be blank');
			return false;
			}elseif((!$objArray['category'])){
			$objSmarty->assign('ErrorMessage', 'Category should not be blank');
			return false;
			}
			$objSmarty->assign('role_id', $objArray['role_id']);
			if($objArray['role_id'] && $objArray['role_name']){

$InsQuery = 'INSERT INTO `'.$tbl.'user_role_master`(`role_id`,`role_name`,`category`,`created_date`,`created_time`,`status`) VALUES("'.trim(addslashes($objArray['role_id'])).'","'.trim(addslashes($objArray['role_name'])).'","'.trim(addslashes($objArray['category'])).'","'.trim(addslashes($objArray['created_date'])).'","'.trim(addslashes($objArray['created_time'])).'","1")';
$this->ExecuteQuery($InsQuery, 'insert');
//Success Message
header('Location:' .$_SERVER['PHP_SELF'].'?succs_msg_for_insert');
return true;
 }
}

 /*************************************************List Role/***************************************************************/
 function ListRole($objArray="")
 {global $objSmarty,$config,$_POST;
$tbl = $config['DBPrefix'];

			$SelQuery = 'SELECT * FROM `'.$tbl.'user_role_master` WHERE status="1"';
			$ListView = $this->ExecuteQuery($SelQuery, "select");
			$objSmarty->assign('ListView', $ListView);
			return $ListView;
 }
 /********************************************************List from Role Master/*******************************************/
 
  function ListMaster()
 { 
 $ussrol_id = base64_decode($_GET["role_id"]); 
 global $objSmarty,$config;    
$tbl = $config['DBPrefix'];
			 $SelQuery = 'SELECT * FROM `'.$tbl.'user_role_master` WHERE status = "1" AND role_id="'.$ussrol_id.'"';
			$ListMas = $this->ExecuteQuery($SelQuery, "select");
			$objSmarty->assign('ListMas', $ListMas);
			return $ListMas;

 }
 
  /**********************************************Delete Contact/*********************************************************************/
 function DeleteMaster($CatIdent)
 {global $objSmarty,$config;
$tbl = $config['DBPrefix'];
			$DelQuery = 'update `'.$tbl.'user_role_master` set `status` = 0 WHERE `role_id` ="'.$CatIdent.'"';
			$this->ExecuteQuery($DelQuery, 'update');
            header('Location:' .$_SERVER['PHP_SELF'].'?succs_msg_for_del');  

 }
 
 /****************************************************Time Stamp Value As Date And Time Form Master/****************************************/
 
  function DateStamp()
 {global $objSmarty,$config;
$tbl = $config['DBPrefix'];
$ussrol_id = base64_decode($_GET["role_id"]);
			 $SelQuery = 'SELECT Date(time_stamp_value) as Date from '.$tbl.'user_role_master WHERE role_id="'.$ussrol_id.'"';
			 $Date_Stamp = $this->ExecuteQuery($SelQuery, "select");
			  //print $Date;
			 $objSmarty->assign('Date_Stamp', $Date_Stamp);
			 return $Date_Stamp;
			 
}

  function TimeStamp()
  {global $objSmarty,$config;
$tbl = $config['DBPrefix'];
$ussrol_id = base64_decode($_GET["role_id"]);
			 $SelQuery1 = 'SELECT  Time(time_stamp_value) as Time from '.$tbl.'user_role_master WHERE role_id="'.$ussrol_id.'"';
			 $Time_Stamp = $this->ExecuteQuery($SelQuery1, "select");
			 $objSmarty->assign('Time_Stamp', $Time_Stamp);
			 return $Time_Stamp;
			

 }

 /*************************************************Edit Role/***************************************************************/
function EditRole($objArray="")
 { 
  $ussrol_id = base64_decode($_GET["role_id"]); 
 global $objSmarty,$_REQUEST,$_POST;
global $objSmarty,$config;
$tbl = $config['DBPrefix'];
			if(!$objArray['role_name']){
			$objSmarty->assign('ErrorMessage', 'Name of the Role should not be blank');
			return false;
			}elseif((!$objArray['category'])){
			$objSmarty->assign('ErrorMessage', 'Category should not be blank');
			return false;
			}
			$objSmarty->assign('role_id', $objArray['role_id']);
			if($objArray['role_id'] && $objArray['role_name']){

$UpQuery = 'UPDATE `'.$tbl.'user_role_master` SET `role_name` = "'.trim($objArray['role_name']).'", `category` = "'.trim($objArray['category']).'",`status` = "1" WHERE `role_id` ="'.$ussrol_id.'"';
$this->ExecuteQuery($UpQuery, 'update');

header('Location:' .$_SERVER['PHP_SELF'].'?succs_msg_for_update'."&"."role_id=".$_GET['role_id']);
return true;
}
}
 
}


?>


