<?php
#####Class For Adding Content Management ######
class UserGroup extends MysqlFns{
 
 /* class constructor */
 function UserGroup(){
  global $config;
  global $objSmarty;

  $this->MysqlFns();
  $this->Limit = 5;
  
   $SelQuery	= 'SELECT max(group_id) as last FROM `arka_group_master` Limit 0,1';
 //  echo $SelQuery;
   $GroupDetail	= $this->ExecuteQuery($SelQuery, 'select');
 //  	echo $DevDetail[0]['last'];
   $GroupDetail[0]['group_id'] = stripslashes($GroupDetail[0]['last']);
  	$g_id1 = preg_replace("/[^0-9\.]/", '', $GroupDetail[0]['group_id']);
	$g_id1= $g_id1 + 1;
	$str = str_split($GroupDetail[0]['last'], 2);
	$g_id = $str[0]. "" .$g_id1;
   $objSmarty->assign('g_id', $g_id);
  // echo  $g_id;
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
 function GetGroupLists($objArray='')  {
  global $objSmarty;
  //$objSmarty->assign('title',$_GET['title']);
  $whereClause = 'order by group_id';
  if($_POST['search'] == 'Search'){
   $whereClause = ' WHERE `group_name` like "%'.$_POST['group_name'].'%" order by group_id';
   $objSmarty->assign('group_name',$_POST['group_name']);
  }
  $SelQuery		= 'SELECT * FROM `arka_group_master`'.$whereClause;
  $listing_split = new MsplitPageResults($SelQuery, $this->Limit);
  if ( ($listing_split->number_of_rows > 0) )  {
   $objSmarty->assign('LinkPage',$listing_split->display_count(TEXT_DISPLAY_NUMBER_OF_RESULT));
   $objSmarty->assign('PerPageNavigation',TEXT_RESULT_PAGE1 . ' ' . $listing_split->display_links($this->Limit, get_all_get_params(array('page', 'info', 'x', 'y')))); 
   $PageList = $this->ExecuteQuery($listing_split->sql_query, 'selectassoc');
  }
  if(!empty($PageList) && is_array($PageList))
   foreach($PageList as $key=>$value){
    $PageList[$key]['group_id'] = stripslashes($PageList[$key]['group_id']);
	$PageList[$key]['group_name'] = stripslashes($PageList[$key]['group_name']);
	$PageList[$key]['group_desc'] = stripslashes($PageList[$key]['group_desc']);
	$PageList[$key]['status'] = stripslashes($PageList[$key]['status']);
	if($PageList[$key]['status'] == 0){
	 $PageList[$key]['status'] ='Inactive';
	}
	else{
	 $PageList[$key]['status'] ='Active';
	}
   }
  $objSmarty->assign('i', $listing_split->i);
  $objSmarty->assign('PageList', $PageList);
  return $PageList;
 }
 /* Delete the Static Page */
/* function DeleteCat($CatIdent){
  global $objSmarty;
  foreach ( $CatIdent as $ConId ){
   if($ConId){
    $DelQuery = 'DELETE FROM `arka_group_master` WHERE `group_id` ='.$ConId;
	$this->ExecuteQuery($DelQuery, 'delete');
   }
  }
  $objSmarty->assign('Keyword', $this->Keyword);
  $objSmarty->assign('Operator', $this->Operator);
  $objSmarty->assign('Offset', $this->Offset);
  $objSmarty->assign('PerPage', $this->PerPage);
  return true;
 }*/
 /* Insert the content for  Static Pages */
 function InsertUserGroupContent($objArray){
  global $objSmarty;
  if($this->ChkDuplicate(trim(addslashes($objArray['groupName'])))){
   if(!$objArray['groupName']){
    $objSmarty->assign('ErrorMessage', 'Group Name should not be blank');
   }elseif(!$objArray['description']){
    $objSmarty->assign('ErrorMessage', 'Group Description should not be blank');
   }
   $objSmarty->assign('groupName', $objArray['groupName']);
   if($objArray['groupName'] && $objArray['description']){
   $InsQuery = 'INSERT INTO `arka_group_master`(`group_id`, `group_name`, `group_description`, `record_status`, `created_date`, `created_time`) VALUES("'.trim(addslashes($objArray['groupId'])).'","'.trim(addslashes($objArray['groupName'])).'","'.trim(addslashes($objArray['description'])).'","1","'.trim($objArray['cr_dt']).'","'.trim($objArray['cr_ti']).'")';
	$this->ExecuteQuery($InsQuery, 'insert');
		 header('Location:' .$_SERVER['PHP_SELF'].'?server_response=success&group_id='.$objArray['groupId'].'&window_action=true');	

	  $arrs = $objArray['dexam16'];
	  
	foreach($arrs as $key=>$value){
   $InsQuery = 'INSERT INTO `arka_group_mapping`(`group_id`, `group_name`, `role_name`, `record_status`) VALUES("'.trim(addslashes($objArray['groupId'])).'","'.trim(addslashes($objArray['groupName'])).'","'.$value.'","1")';
	$this->ExecuteQuery($InsQuery, 'insert');
	}
	
	$objSmarty->assign('Gname',$objArray['group_name']);
	//$oFCKeditor->Value		= '';
	$objSmarty->assign('group_name', '');
	$objSmarty->assign('SuccessMessage', 'New User Group Inserted Successfully');
	$this->UserGroup();
   }
  }
  else{
   $objSmarty->assign('group_name', $objArray['group_name']);
   $objSmarty->assign('ErrorMessage', 'Group Name Already Exists');
   PrePopulate($objArray, 'CatDetail');
  }
 }
 
 /* Edit the Static Page */
 function EditUserGroup($objArray){
  global $objSmarty,$_POST;
	 
  if($this->ChkDuplicate(trim(addslashes($objArray['group_id'])),$CatIdent)){
   if(!$objArray['groupId']){
    $objSmarty->assign('ErrorMessage', 'Group ID should not be blank');
   }
   elseif(!$objArray['groupName2']){
    $objSmarty->assign('ErrorMessage', 'Group Name should not be blank');
   }
   elseif(!$objArray['description2']){
    $objSmarty->assign('ErrorMessage', 'Group Description should not be blank');
   }
   $objSmarty->assign('groupId', $objArray['groupId']);
   if($objArray['groupId'] && $objArray['groupName2']){
   	$UpQuery = 'UPDATE `arka_group_master` SET `group_name` = "'.trim($objArray['groupName2']).'", `group_description` = "'.trim($objArray['description2']).'" WHERE `group_id` ="'.trim($objArray['groupId']).'"';
	$this->ExecuteQuery($UpQuery, 'update');
			 header('Location:' .$_SERVER['PHP_SELF'].'?server_response=success&group_id='.$objArray['groupId'].'&window_action=true');	


	$DelQuery = 'DELETE FROM `arka_group_mapping` WHERE `group_id` ="'.trim($objArray['groupId']).'"';
	$this->ExecuteQuery($DelQuery, 'delete');
   	$objSmarty->assign('SuccessMessage', 'Group Deleted Successfully');

	  $arrs = $objArray['dexam16'];
	  
	foreach($arrs as $key=>$value){
    $InsQuery = 'INSERT INTO `arka_group_mapping`(`group_id`, `group_name`, `role_name`, `record_status`) VALUES("'.trim(addslashes($objArray['groupId'])).'","'.trim(addslashes($objArray['groupName2'])).'","'.$value.'","1")';
//exit;
//print_r($InsQuery);
	$this->ExecuteQuery($InsQuery, 'insert');
	}
	$objSmarty->assign('SuccessMessage', 'Group Updated Successfully');
	return true;
   }
  }
  else{
   $objSmarty->assign('groupId', $objArray['groupId']);
   $objSmarty->assign('groupName2', $objArray['groupName2']);
   $objSmarty->assign('ErrorMessage', 'Group ID Already Exists');
  }
 }
 
 
 function GetRoles($groupId){
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

 }
 
 function GetManagement($objArray=''){
 //print_r($_POST);
  global $objSmarty;
    $SelQuery1        = "SELECT category FROM arka_role_master where category not in(SELECT role_name FROM arka_group_mapping where group_id='".$_POST['CatIdent']."') group by category";
    $MgmtList = $this->ExecuteQuery($SelQuery1, 'selectassoc');
  
  if(!empty($MgmtList) && is_array($MgmtList))
   foreach($MgmtList as $key=>$value){
	$MgmtList[$key]['category'] = stripslashes($MgmtList[$key]['category']);
	
   }

  $objSmarty->assign('i', $listing_split->i);
  $objSmarty->assign('MgmtList', $MgmtList);
  return $MgmtList;

 }
 
 function viewGetRoles(){
  global $objSmarty;
//print_r($_POST);
  //$objSmarty->assign('title',$_GET['title']);
 
    $SelQuery		= 'SELECT * FROM arka_group_mapping where group_id="'.$_POST['CatIdent'].'"';
    $viewlist = $this->ExecuteQuery($SelQuery, 'selectassoc');
  
  if(!empty($viewlist) && is_array($viewlist))
   foreach($viewlist as $key=>$value){
   
   	 $viewlist[$key]['role_id '] = stripslashes($viewlist[$key]['role_id ']);
	 $viewlist[$key]['role_name'] = stripslashes($viewlist[$key]['role_name']);
	
   }

 // $objSmarty->assign('i', $listing_split->i);
  $objSmarty->assign('viewlist', $viewlist);
  return $viewlist;

 }
 
 /* Display the Static Page */
 function GetGroupById($CatIdent){
  global $objSmarty;
  $objSmarty->assign('Keyword', $this->Keyword);
  $objSmarty->assign('Operator', $this->Operator);
  $objSmarty->assign('Offset', $this->Offset);
  $objSmarty->assign('PerPage', $this->PerPage);
  $SelQuery		= 'SELECT * FROM `arka_group_master` WHERE `group_id` = "'.$CatIdent.'" Limit 0,1';
  $CatDetail		= $this->ExecuteQuery($SelQuery, 'select');
  $CatDetail[0]['group_id'] = stripslashes($CatDetail[0]['group_id']);
  $objSmarty->assign('hgroup_id', stripslashes($CatDetail[0]['group_id']));
  $objSmarty->assign('group_id', $CatDetail[0]['group_id']);
  
  $CatDetail[0]['group_name'] = stripslashes($CatDetail[0]['group_name']);
  $objSmarty->assign('group_name', $CatDetail[0]['group_name']);
  
  $CatDetail[0]['group_description'] = stripslashes($CatDetail[0]['group_description']);
  $objSmarty->assign('group_description', $CatDetail[0]['group_description']);
  
  $CatDetail[0]['status'] = stripslashes($CatDetail[0]['status']);
  $objSmarty->assign('status', $CatDetail[0]['status']);
  
   $CatDetail[0]['ident'] = stripslashes($CatDetail[0]['ident']);
  $objSmarty->assign('ident', $CatDetail[0]['ident']);
  
  $CatDetail[0]['created_date'] = stripslashes($CatDetail[0]['created_date']);
  $objSmarty->assign('created_date', $CatDetail[0]['created_date']);
  
    
  /*$CatDetail[0]['content'] = stripslashes($CatDetail[0]['content']);
  $oFCKeditor->Value = $CatDetail[0]['content'];
  $objSmarty->assign('content', $CatDetail[0]['content']);
  $objSmarty->assign('Editor', '$Editor');
  return $CatDetail[0]['content'];*/
 }
 /* Validation for Static Pages */
 function ChkDuplicate($group_name, $Ident=''){
  global $objSmarty;
  if(!empty($Ident))
  // $WhereClause	= ' AND `id` != '.$Ident;
  $SelQuery		= 'SELECT * FROM `arka_group_master` WHERE `group_name` = "'.$group_name.'" Limit 0,1';
  $CatDetail		= $this->ExecuteQuery($SelQuery, 'select');
  if(!empty($CatDetail) && is_array($CatDetail))
   return false;
  else
   return true;
 }
 /* Delete the Static Page */
 function DeleteID($id){
  global $objSmarty;
  $DelQuery = 'update  `arka_group_master`  set `record_status`= 0 WHERE  `group_id`="'.$_GET['group_id'].'" '; 
  $this->ExecuteQuery($DelQuery, 'delete');
  $DelQueryz = 'update `arka_group_mapping`  set `record_status`= 0 WHERE `group_id`="' .$_GET['group_id'].'"'; 
  $this->ExecuteQuery($DelQueryz, 'delete');
  $objSmarty->assign('SuccessMessage1', 'Deleted Successfully');
 }
 
 /* Activate, Deactivate and Delete for the Static Pages */
 function ActiveContent($objArray){
  global $objSmarty;
  if(!empty($objArray['ConId']) && is_array($objArray['ConId']))
   $BanIds		= implode(',' , $objArray['ConId']);
  else
   $objSmarty->assign('ErrorMessage', 'No User Group Selected');
  if(!empty($BanIds))
   switch($objArray['Submit']){
    case 'Delete':
	 $DelQuery = 'DELETE FROM `arka_group_master` WHERE `ident` IN (' . $BanIds . ')' ;
	 $this->ExecuteQuery($DelQuery, 'delete');
//	 $DelQueryz = 'DELETE FROM `arka_group_mapping` WHERE `group_id` IN (' . $BanIds . ')' ;
 // 	 $this->ExecuteQuery($DelQueryz, 'delete');
	 $objSmarty->assign('SuccessMessage', 'Deleted Successfully');
	 break;
	case 'Active':
	 $UpQuery = 'UPDATE `arka_group_master` SET `status` =1 WHERE `ident` IN (' . $BanIds . ')' ;
	 $this->ExecuteQuery($UpQuery, 'update');
	 $objSmarty->assign('SuccessMessage', 'The Contents Activated Successfully');
	 break;
	case 'InActive':
	 $UpQuery = 'UPDATE `arka_group_master` SET `status` =0 WHERE `ident` IN (' . $BanIds . ')' ;
	 $this->ExecuteQuery($UpQuery, 'update');
	 $objSmarty->assign('SuccessMessage', 'The Contents In-Activated Successfully');
	 break;
   }
 }
 function GetUserGroupList($objArray='')  {
		global $objSmarty;
		$SelQuery = 'SELECT * FROM `arka_group_master` WHERE record_status="1"' ;
		$PageList		= $this->ExecuteQuery($SelQuery, "select");
        $objSmarty->assign('PageList', $PageList);
	}	
	
function GetUserGroupDetails($objArray='')  {
		global $objSmarty;
		$SelQuery = 'SELECT group_name, group_id, group_description FROM `arka_group_master` WHERE group_id="'.$_GET['group_id'].'" ' ;
		$MasterList		= $this->ExecuteQuery($SelQuery, "select");
        $objSmarty->assign('MasterList', $MasterList);
	}	
	function GetGroupMap($groupId)  {
		global $objSmarty;
		$SelQuery = "SELECT * FROM `arka_group_mapping` WHERE `group_id`='".$groupId."'" ;
		$groupMapping		= $this->ExecuteQuery($SelQuery, "select");
        $objSmarty->assign('groupMapping',$groupMapping);
	}	
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
}
?>


