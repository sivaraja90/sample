<?php
#####Class For Adding Content Management ######
class UsergroupReg extends MysqlFns{
 
 /* class constructor */
 function UsergroupReg(){
 $this->LDDisplayPath= $config['SiteGlobalPath']."class.UsergroupReg.php";
  global $config;
  global $objSmarty,$config;
  $tbl = $config['DBPrefix'];
$this->MysqlFns();
  $this->Limit = 20;
 $usrgroup_id = base64_decode($_GET["group_id"]);
 /**************************************Group Id Auto Increment*********************************************************/
			$SelQuerys	= 'SELECT max(group_id) as last FROM `'.$tbl.'user_group_master` Limit 0,1';
			$Group	= $this->ExecuteQuery($SelQuerys, 'select');
			if ($Group[0]['last'] != "")
			{ 
			$Group[0]['group_id'] = stripslashes($Group[0]['last']);
			$g_id1 = preg_replace("/[^0-9\.]/", '', $Group[0]['group_id']);
			$g_id1= $g_id1 + 1;
			$str = str_split($Group[0]['last'],2);//CUS
			$g_id = $str[0]. "" .$g_id1;
			}
			else
			{
			$g_id = "GR1001";
			}
			$objSmarty->assign('g_id', $g_id);
 } 
 
 /*************************************************View Group/***************************************************************/
function ListGroup($objArray)
 {
global $objSmarty,$config;
$tbl = $config['DBPrefix'];
$SelQuery = 'SELECT  * FROM `'.$tbl.'user_group_master` WHERE status = "1"';
			/*$SelQuery = 'SELECT * FROM `'.$tbl.'user_group_master` WHERE group_id="'.$_GET['group_id'].'"';*/
			$ListView = $this->ExecuteQuery($SelQuery, "select");
			$objSmarty->assign('ListView', $ListView);
			return $ListView;

 }	
  /*************************************************View Group***************************************************************/
function GroupReg($objArray)
 {global $objSmarty,$config;
$tbl = $config['DBPrefix'];
//$SelQuery = 'SELECT  * FROM `'.$tbl.'user_group_master` WHERE status = "1"';
			$SelQuery = 'SELECT * FROM `'.$tbl.'user_group_master` WHERE group_id="'.$_GET['group_id'].'"';
			$ListView = $this->ExecuteQuery($SelQuery, "select");
			$objSmarty->assign('ListView', $ListView);
			return $ListView;

 }
  /*************************************************Insert Group/***************************************************************/
 function InsertRole($objArray)
 {global $objSmarty,$config;
$tbl = $config['DBPrefix'];
if(!$objArray['group_id']){
			$objSmarty->assign('ErrorMessage', 'Group Id should not be blank');
			return false;
			}elseif((!$objArray['group_name'])){
			$objSmarty->assign('ErrorMessage', 'Group Name should not be blank');
			return false;
			}elseif(!$objArray['description']){
			$objSmarty->assign('ErrorMessage', 'Description should not be blank');
			return false;
			}
			$objSmarty->assign('group_id', $objArray['group_id']);
			if($objArray['group_id'] && $objArray['group_name']){

$InsQuery = 'INSERT INTO `'.$tbl.'user_group_master`(`group_id`,`group_name`,`description`,`created_date`,`created_time`,`status`) VALUES("'.trim(addslashes($objArray['group_id'])).'","'.trim(addslashes($objArray['group_name'])).'","'.trim(addslashes($objArray['description'])).'","'.trim(addslashes($objArray['created_date'])).'","'.trim(addslashes($objArray['created_time'])).'","1")';
$this->ExecuteQuery($InsQuery, 'insert');

	
	  $role = $objArray['dexam16'];
	  //print_r($role);exit;
	foreach($role as $key=>$value){
	//print_r($value);exit;
    $InsQuery = 'INSERT INTO `'.$tbl.'user_group_mapping`(`group_id`, `group_name`, `role_name`,`created_date`,`created_time`, `status`) VALUES("'.trim(addslashes($objArray['group_id'])).'","'.trim(addslashes($objArray['group_name'])).'","'.$value.'","'.trim(addslashes($objArray['created_date'])).'","'.trim(addslashes($objArray['created_time'])).'","1")';
//exit;
//print_r($InsQuery); exit;
	$this->ExecuteQuery($InsQuery, 'insert');
	}
	$objSmarty->assign('SuccessMessage', 'New User Group Inserted Successfully');
	}
  else{
   $objSmarty->assign('group_name', $objArray['group_name']);
   $objSmarty->assign('ErrorMessage', 'Group Name Already Exists');
   PrePopulate($objArray, 'CatDetail');
  }
   header('Location:' .$_SERVER['PHP_SELF'].'?success&group_id='.$objArray['group_id'].'&window_action=true');
  }


 /*************************************************View Group/***************************************************************/
 
function EditRole($objArray="")
{global $objSmarty,$config;
$tbl = $config['DBPrefix'];
 $usrgroup_id = base64_decode($_GET["group_id"]);
if(!$objArray['group_id']){
    $objSmarty->assign('ErrorMessage', 'Group ID should not be blank');
   }
   elseif(!$objArray['group_name']){
    $objSmarty->assign('ErrorMessage', 'Group Name should not be blank');
   }
   elseif(!$objArray['description']){
    $objSmarty->assign('ErrorMessage', 'Group Description should not be blank');
   }
   $objSmarty->assign('group_id', $objArray['group_id']);
   if($objArray['group_id'] && $objArray['group_name']){
   	$UpQuery = 'UPDATE `'.$tbl.'user_group_master` SET `group_name` = "'.trim($objArray['group_name']).'", `description` = "'.trim($objArray['description']).'" WHERE `group_id` ="'.$usrgroup_id.'"';
	$this->ExecuteQuery($UpQuery, 'update');

	$DelQuery = 'DELETE FROM `'.$tbl.'user_group_mapping` WHERE `group_id` ="'.trim($objArray['group_id']).'"';
	$this->ExecuteQuery($DelQuery, 'delete');
   	$objSmarty->assign('SuccessMessage', 'Group Deleted Successfully');

	  $arrs = $objArray['dexam16'];
	  
	foreach($arrs as $key=>$value){
    $InsQuery = 'INSERT INTO `'.$tbl.'user_group_mapping`(`group_id`, `group_name`, `role_name`,`created_date`,`created_time`, `status`) VALUES("'.trim(addslashes($objArray['group_id'])).'","'.trim(addslashes($objArray['group_name'])).'","'.$value.'","'.trim(addslashes($objArray['created_date'])).'","'.trim(addslashes($objArray['created_time'])).'","1")';
	$this->ExecuteQuery($InsQuery, 'insert');
	}
	$objSmarty->assign('SuccessMessage', 'Group Updated Successfully');
	return true;
   }

  else{
   $objSmarty->assign('group_id', $objArray['group_id']);
   $objSmarty->assign('group_name', $objArray['group_name']);
   $objSmarty->assign('ErrorMessage', 'Group ID Already Exists');
  }

}
/*************************************Delete/********************************************************************/
 function DeleteMaster($CatIdent)
 {global $objSmarty,$config;
$tbl = $config['DBPrefix'];
			$DelQuery = 'update `'.$tbl.'user_group_master` set `status` = 0 WHERE `group_id` ="'.$CatIdent.'"';
			$this->ExecuteQuery($DelQuery, 'update');
			
			$DelQuery1 = 'update `'.$tbl.'user_group_mapping` set `status` = 0 WHERE `group_id` ="'.$CatIdent.'"';
			$this->ExecuteQuery($DelQuery1, 'update');

            header('Location:' .$_SERVER['PHP_SELF'].'?succs_msg_for_del');  

 }
/************************************Roles/**************************************************************************************/
	function RoleList($objArray="")
 {global $objSmarty,$config;
$tbl = $config['DBPrefix'];
$SelQuery = 'SELECT  * FROM `'.$tbl.'user_role_master` WHERE status = "1"';
			$RoleList = $this->ExecuteQuery($SelQuery, "select");
			$objSmarty->assign('RoleList', $RoleList);
			return $RoleList;

 }
  /*************************************************Role Edit/***************************************************************/
  function GetRoles($objArray=''){
 //print_r($_POST);
 global $objSmarty,$config;
 $usrgroup_id = base64_decode($_GET["group_id"]);
$tbl = $config['DBPrefix'];
$SelQuery1        = 'SELECT DISTINCT role_id,role_name,category FROM '.$tbl.'user_role_master where role_name not in(SELECT role_name FROM '.$tbl.'user_group_mapping
  where group_id="'.$usrgroup_id.'") order by role_id';
    $PageList = $this->ExecuteQuery($SelQuery1, 'selectassoc');

  if(!empty($PageList) && is_array($PageList))
   foreach($PageList as $key=>$value){
    $PageList[$key]['role_id'] = stripslashes($PageList[$key]['role_id']);
	$PageList[$key]['role_name'] = stripslashes($PageList[$key]['role_name']);
	$PageList[$key]['category'] = stripslashes($PageList[$key]['category']);
	 
   }

  $objSmarty->assign('i', $listing_split->i);
  $objSmarty->assign('PageList', $PageList);
  return $PageList;


 }
 
/* function GetRoles($groupId){
 //print_r($_POST);
  global $objSmarty;
    $SelQuery1        = "SELECT DISTINCT role_id,role_name,category FROM arka_role_master where role_name not in(SELECT role_name FROM arka_group_mapping where group_id='".$groupId."') order by role_id";
    $PageList = $this->ExecuteQuery($SelQuery1, 'selectassoc');
  
  if(!empty($PageList) && is_array($PageList))
   foreach($PageList as $key=>$value){
    $PageList[$key]['role_id'] = stripslashes($PageList[$key]['role_id']);
	$PageList[$key]['role_name'] = stripslashes($PageList[$key]['role_name']);
	$PageList[$key]['category'] = stripslashes($PageList[$key]['category']);
	
   }

  $objSmarty->assign('i', $listing_split->i);
  $objSmarty->assign('PageList', $PageList);
  return $PageList;

 }*/
 
 
 
 
 
 
 /*************************************************View Group/***************************************************************/
 function GetGroupMap($groupId)  {
 $usrgroup_id = base64_decode($_GET["group_id"]);
 global $objSmarty,$config;
$tbl = $config['DBPrefix'];
$SelQuery = 'SELECT * FROM '.$tbl.'user_group_mapping WHERE group_id="'.$usrgroup_id.'" ORDER BY role_name' ;
		$groupMapping		= $this->ExecuteQuery($SelQuery, "select");
        $objSmarty->assign('groupMapping',$groupMapping);
		return $groupMapping;
	}	
	
 /*************************************************View Group/***************************************************************/	
	function GetUserGroupDetails($objArray='')  {
	$usrgroup_id = base64_decode($_GET["group_id"]);
	global $objSmarty,$config;
$tbl = $config['DBPrefix'];
$SelQuery = 'SELECT * FROM `'.$tbl.'user_group_master` WHERE group_id="'.$usrgroup_id.'"' ;
/*$SelQuery = 'SELECT '.$tbl.'user_group_master.*, '.$tbl.'user_group_mapping.* FROM `'.$tbl.'user_group_master`, `'.$tbl.'user_group_mapping` WHERE '.$tbl.'user_group_mapping.status="1" AND '.$tbl.'user_group_master.group_id='.$tbl.'user_group_mapping.group_id  AND  '.$tbl.'user_group_master.group_id="'.$_GET['group_id'].'"';*/
		$MasterList		= $this->ExecuteQuery($SelQuery, "select");  
        $objSmarty->assign('MasterList', $MasterList);
		return $MasterList;
	}
/*************************************************View Date and Time Stamp/***************************************************************/
 function DateStamp()
 {global $objSmarty,$config;
$tbl = $config['DBPrefix'];
 $usrgroup_id = base64_decode($_GET["group_id"]);
$SelQuery = 'SELECT Date(time_stamp_value) as Date from '.$tbl.'user_group_master WHERE group_id="'.$usrgroup_id.'"';
			 $Date_Stamp = $this->ExecuteQuery($SelQuery, "select");
			  //print $Date;
			 $objSmarty->assign('Date_Stamp', $Date_Stamp);
			 return $Date_Stamp;
			 
}

  function TimeStamp()
  {global $objSmarty,$config;
$tbl = $config['DBPrefix'];
 $usrgroup_id = base64_decode($_GET["group_id"]);
$SelQuery1 = 'SELECT  Time(time_stamp_value) as Time from '.$tbl.'user_group_master WHERE group_id="'.$usrgroup_id.'"';
			 $Time_Stamp = $this->ExecuteQuery($SelQuery1, "select");
			 $objSmarty->assign('Time_Stamp', $Time_Stamp);
			 return $Time_Stamp;
			

 } 	
}
?>


