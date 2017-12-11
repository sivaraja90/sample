<?php
#####Class For Adding Content Management ######
class UserRole extends MysqlFns{
 
 /* class constructor */
 function UserRole(){
 $this->LDDisplayPath= $config['SiteGlobalPath']."class.UserRole.php";
  global $config;
  global $objSmarty;
  $this->MysqlFns();
  $this->Limit = 5;

   $SelQuery	= 'SELECT max(role_id) as last FROM `arka_role_master` ';
   $roleDetails	= $this->ExecuteQuery($SelQuery, 'select');
   if($roleDetails[0]['last']!="")
   {
		$roleDetails[0]['role_id'] = stripslashes($roleDetails[0]['last']);
		$r_id1 = preg_replace("/[^0-9\.]/", '', $roleDetails[0]['role_id']);
		$r_id1= $r_id1 + 1;
		$str = str_split($roleDetails[0]['last'], 2);
		$r_id = $str[0]. "" .$r_id1;
   } else
   {
   		   $r_id = "RL11";
   }
	$objSmarty->assign('r_id', $r_id);
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
 function GetRoleLists($objArray='')  {
  global $objSmarty;

  //$objSmarty->assign('title',$_GET['title']);
  $whereClause = 'order by role_id';
  if($_POST['search'] == 'Search'){
   $whereClause = ' WHERE `role_name` like "%'.$_POST['role_name'].'%" order by role_id';
   $objSmarty->assign('role_name',$_POST['role_name']);
  }
  $SelQuery		= 'SELECT * FROM `arka_role_master`'.$whereClause;
  $listing_split = new MsplitPageResults($SelQuery, $this->Limit);
  if ( ($listing_split->number_of_rows > 0) )  {
   $objSmarty->assign('LinkPage',$listing_split->display_count(TEXT_DISPLAY_NUMBER_OF_RESULT));
   $objSmarty->assign('PerPageNavigation',TEXT_RESULT_PAGE1 . ' ' . $listing_split->display_links($this->Limit, get_all_get_params(array('page', 'info', 'x', 'y')))); 
   $PageList = $this->ExecuteQuery($listing_split->sql_query, 'selectassoc');
  }
  if(!empty($PageList) && is_array($PageList))
   foreach($PageList as $key=>$value){
    $PageList[$key]['role_id'] = stripslashes($PageList[$key]['role_id']);
	$PageList[$key]['role_name'] = stripslashes($PageList[$key]['role_name']);
	$PageList[$key]['category'] = stripslashes($PageList[$key]['category']);
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
 function DeleteCat($CatIdent){
  global $objSmarty;
  foreach ( $CatIdent as $ConId ){
   if($ConId){
    $DelQuery = 'DELETE FROM `arka_role_master` WHERE `role_id` ='.$ConId;
	$this->ExecuteQuery($DelQuery, 'delete');
   }
  }
  $objSmarty->assign('Keyword', $this->Keyword);
  $objSmarty->assign('Operator', $this->Operator);
  $objSmarty->assign('Offset', $this->Offset);
  $objSmarty->assign('PerPage', $this->PerPage);
  return true;
 }
 /* Insert the content for  Static Pages */
 function InsertUserRoleContent($objArray){
  
 $timezone = new DateTimeZone("Asia/Kolkata" );
 $date = new DateTime();
 $date->setTimezone($timezone );
  global $objSmarty;
  $objSmarty->assign('Keyword', $this->Keyword);
  $objSmarty->assign('Operator', $this->Operator);
  $objSmarty->assign('Offset', $this->Offset);
  $objSmarty->assign('PerPage', $this->PerPage);
  if($this->ChkDuplicate(trim(addslashes($objArray['role_name'])))){
   if(!$objArray['role_name']){
    $objSmarty->assign('ErrorMessage', 'Role Name should not be blank');
   }
   elseif(!$objArray['category']){echo"category";
     $objSmarty->assign('ErrorMessage', 'Category should not be blank');
   }
   $objSmarty->assign('role_name', $objArray['role_name']);
   if($objArray['role_name'] && $objArray['category']){
   $InsQuery = 'INSERT INTO `arka_role_master`(`role_id`, `role_name`, `category`, `record_status`, `created_date`, `created_time`) VALUES("'.trim(addslashes($objArray['role_id'])).'","'.trim(addslashes($objArray['role_name'])).'","'.trim(addslashes($objArray['category'])).'","1","'.$date->format( 'Y-m-d' ).'","'.$date->format( 'h:i:s A' ).'")';
	$this->ExecuteQuery($InsQuery, 'insert');
	 header('Location:' .$_SERVER['PHP_SELF'].'?server_response=success&role_id='.$objArray['role_id'].'&window_action=true');
	$objSmarty->assign('Rname',$objArray['role_name']);
	//$oFCKeditor->Value		= '';
	$objSmarty->assign('role_name', '');
	$objSmarty->assign('SuccessMessage', 'New User Role Inserted Successfully');
	$this->UserRole();
   }
  }
  else{
   $objSmarty->assign('role_name', $objArray['role_name']);
   $objSmarty->assign('ErrorMessage', 'Role Name Already Exists');
   PrePopulate($objArray, 'CatDetail');
  }
 }
 
 /* Edit the Static Page */
 function EditUserRole($objArray){ 
 echo"hiiiiiiiiii";
  global $objSmarty,$_REQUEST;
  $CatIdent=$_REQUEST['CatIdent'];
  $timezone = new DateTimeZone("Asia/Kolkata" );
$date = new DateTime();
$date->setTimezone($timezone );

  $objSmarty->assign('Keyword', $this->Keyword);
  $objSmarty->assign('Operator', $this->Operator);
  $objSmarty->assign('Offset', $this->Offset);
  $objSmarty->assign('PerPage', $this->PerPage);
  if($this->ChkDuplicate(trim(addslashes($objArray['role_id'])),$CatIdent)){
   if(!$objArray['role_id']){
    $objSmarty->assign('ErrorMessage', 'Role ID should not be blank');
   }
   elseif(!$objArray['role_name']){
    $objSmarty->assign('ErrorMessage', 'Role Name should not be blank');
   }
   elseif(!$objArray['category']){
    $objSmarty->assign('ErrorMessage', 'Category should not be blank');
   }
   $objSmarty->assign('role_id', $objArray['role_id']);
   if($objArray['role_id'] && $objArray['role_name']){
   	$UpQuery = 'UPDATE `arka_role_master` SET `role_name` = "'.trim($objArray['role_name']).'", `category` = "'.trim($objArray['category']).'", `created_date` = "'.$date->format( 'Y-m-d' ).'", `created_time` = "'.$date->format( 'h:i:s A' ).'" WHERE `role_id` ="'.trim($objArray['role_id']).'"';
	$this->ExecuteQuery($UpQuery, 'update');
	 header('Location:' .$_SERVER['PHP_SELF'].'?server_success=success&role_id='.$objArray['role_id'].'&window_action=true');
	$objSmarty->assign('SuccessMessage', 'Role Updated Successfully');
	return true;
   }
  }
  else{
   $objSmarty->assign('role_id', $objArray['role_id']);
   $objSmarty->assign('role_name', $objArray['role_name']);
   $objSmarty->assign('ErrorMessage', 'Role ID Already Exists');
  }
 }
 
 /* Display the Static Page */
 function GetRoleById($CatIdent){
  global $objSmarty;
  $objSmarty->assign('Keyword', $this->Keyword);
  $objSmarty->assign('Operator', $this->Operator);
  $objSmarty->assign('Offset', $this->Offset);
  $objSmarty->assign('PerPage', $this->PerPage);
  $SelQuery		= 'SELECT * FROM `arka_role_master` WHERE `role_id` = "'.$CatIdent.'" Limit 0,1';
  $CatDetail		= $this->ExecuteQuery($SelQuery, 'select');
  $CatDetail[0]['role_id'] = stripslashes($CatDetail[0]['role_id']);
  $objSmarty->assign('hrole_id', stripslashes($CatDetail[0]['role_id']));
  $objSmarty->assign('role_id', $CatDetail[0]['role_id']);
  
  $CatDetail[0]['role_name'] = stripslashes($CatDetail[0]['role_name']);
  $objSmarty->assign('role_name', $CatDetail[0]['role_name']);
  
  $CatDetail[0]['category'] = stripslashes($CatDetail[0]['category']);
  $objSmarty->assign('category', $CatDetail[0]['category']);
  
  $CatDetail[0]['record_status'] = stripslashes($CatDetail[0]['record_status']);
  $objSmarty->assign('record_status', $CatDetail[0]['record_status']);
  
  $CatDetail[0]['created_date'] = stripslashes($CatDetail[0]['created_date']);
  $objSmarty->assign('created_date', $CatDetail[0]['created_date']);
  
    
  /*$CatDetail[0]['content'] = stripslashes($CatDetail[0]['content']);
  $oFCKeditor->Value = $CatDetail[0]['content'];
  $objSmarty->assign('content', $CatDetail[0]['content']);
  $objSmarty->assign('Editor', '$Editor');
  return $CatDetail[0]['content'];*/
 }
 /* Validation for Static Pages */
 function ChkDuplicate($role_name, $Ident=''){
  global $objSmarty;
  if(!empty($Ident))
  // $WhereClause	= ' AND `id` != '.$Ident;
  $SelQuery		= 'SELECT * FROM `arka_role_master` WHERE `role_name` = "'.$role_name.'" Limit 0,1';
  $CatDetail		= $this->ExecuteQuery($SelQuery, 'select');
  if(!empty($CatDetail) && is_array($CatDetail))
   return false;
  else
   return true;
 }
 /* Delete the Static Page */
function DeleteID($id){
  global $objSmarty;
  $DelQuery = 'update  `arka_role_master`  set `record_status`= 0 WHERE  role_id="'.$_GET['role_id'].'" '; 
  $this->ExecuteQuery($DelQuery, 'delete');
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
	 $DelQuery = 'DELETE FROM `arka_role_master` WHERE `ident` IN (' . $BanIds . ')' ;
	 $this->ExecuteQuery($DelQuery, 'delete');
	 $objSmarty->assign('SuccessMessage', 'Deleted Successfully');
	 break;
	case 'Active':
	 $UpQuery = 'UPDATE `arka_role_master` SET `record_status` =1 WHERE `ident` IN (' . $BanIds . ')' ;
	 $this->ExecuteQuery($UpQuery, 'update');
	 $objSmarty->assign('SuccessMessage', 'The Contents Activated Successfully');
	 break;
	case 'InActive':
	 $UpQuery = 'UPDATE `arka_role_master` SET `record_status` =0 WHERE `ident` IN (' . $BanIds . ')' ;
	 $this->ExecuteQuery($UpQuery, 'update');
	 $objSmarty->assign('SuccessMessage', 'The Contents In-Activated Successfully');
	 break;
   }
 }
 function GetUserRoleList($objArray='')  {
		global $objSmarty;
		$SelQuery = 'SELECT * FROM `arka_role_master` WHERE record_status="1"' ;
		$PageList		= $this->ExecuteQuery($SelQuery, "select");
        $objSmarty->assign('PageList', $PageList);
	}	
	
function GetUserRoleDetails($objArray='')  {
		global $objSmarty;
		$SelQuery = 'SELECT * FROM `arka_role_master` WHERE role_id="'.$_GET['role_id'].'" ' ;
		$PageList		= $this->ExecuteQuery($SelQuery, "select");
        $objSmarty->assign('PageList', $PageList);
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


