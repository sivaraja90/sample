<?php
#####Class For Adding Content Management ######
class Content extends MysqlFns{
 
 /* class constructor */
 function Content(){
  global $config;
  $this->MysqlFns();
  $this->Limit = 20;
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
 function GetContentLists($objArray='')  {
  global $objSmarty;

  $whereClause = '';
  if($_POST['search'] == 'Search'){
   $whereClause = ' WHERE `title` like "%'.$_POST['title'].'%"';
   $objSmarty->assign('title',$_POST['title']);
  }
  $SelQuery		= 'SELECT * FROM `tbl_staticpages`'.$whereClause;
  $listing_split = new MsplitPageResults($SelQuery, $this->Limit);
  if ( ($listing_split->number_of_rows > 0) )  {
   $objSmarty->assign('LinkPage',$listing_split->display_count(TEXT_DISPLAY_NUMBER_OF_RESULT));
   $objSmarty->assign('PerPageNavigation',TEXT_RESULT_PAGE1 . ' ' . $listing_split->display_links($this->Limit, get_all_get_params(array('page', 'info', 'x', 'y')))); 
   $PageList = $this->ExecuteQuery($listing_split->sql_query, 'selectassoc');
  }
  if(!empty($PageList) && is_array($PageList))
   foreach($PageList as $key=>$value){
    $PageList[$key]['Title'] = stripslashes($PageList[$key]['title']);
	$PageList[$key]['Ident'] = stripslashes($PageList[$key]['id']);
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
    $DelQuery = 'DELETE FROM `tbl_staticpages` WHERE `id` ='.$ConId;
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
 function InsertContent($objArray){
  global $objSmarty;
  $objSmarty->assign('Keyword', $this->Keyword);
  $objSmarty->assign('Operator', $this->Operator);
  $objSmarty->assign('Offset', $this->Offset);
  $objSmarty->assign('PerPage', $this->PerPage);
  if($this->ChkDuplicate(trim(addslashes($objArray['txttitle'])))){
   if(!$objArray['txttitle']){
    $objSmarty->assign('ErrorMessage', 'Title should not be blank');
   }
   elseif(!$objArray['content']){
    $objSmarty->assign('ErrorMessage', 'Content should not be blank');
   }
   $objSmarty->assign('txttitle', $objArray['txttitle']);
   if($objArray['txttitle'] && $objArray['content']){
    $InsQuery = 'INSERT INTO `tbl_staticpages`(`title`, `content`) VALUES("'.trim(addslashes($objArray['txttitle'])).'","'.trim(addslashes($objArray['content'])).'")';
	$this->ExecuteQuery($InsQuery, 'insert');
	$objSmarty->assign('CTitle',$objArray['txttitle']);
	$oFCKeditor->Value		= '';
	$objSmarty->assign('txttitle', '');
	$objSmarty->assign('SuccessMessage', 'New Content Inserted Successfully');
   }
  }
  else{
   $objSmarty->assign('txttitle', $objArray['txttitle']);
   $objSmarty->assign('ErrorMessage', 'Title Already Exists');
   PrePopulate($objArray, 'CatDetail');
  }
 }
 
 /* Edit the Static Page */
 function EditContent($objArray){
  global $objSmarty,$_REQUEST;
  $CatIdent=$_REQUEST['CatIdent'];
  $objSmarty->assign('Keyword', $this->Keyword);
  $objSmarty->assign('Operator', $this->Operator);
  $objSmarty->assign('Offset', $this->Offset);
  $objSmarty->assign('PerPage', $this->PerPage);
  if($this->ChkDuplicate(trim(addslashes($objArray['title'])),$CatIdent)){
   if(!$objArray['title']){
    $objSmarty->assign('ErrorMessage', 'Title should not be blank');
   }
   elseif(!$objArray['content']){
    $objSmarty->assign('ErrorMessage', 'Content should not be blank');
   }
   $objSmarty->assign('title', $objArray['title']);
   if($objArray['title'] && $objArray['content']){
   	$UpQuery = 'UPDATE `tbl_staticpages` SET `title` = "'.trim($objArray['title']).'", `content` = "'.trim(addslashes($objArray['content'])).'" WHERE `id` ='.$objArray['CatIdent'];
	$this->ExecuteQuery($UpQuery, 'update');
	$objSmarty->assign('SuccessMessage', 'Country Updated Successfully');
	return true;
   }
  }
  else{
   $objSmarty->assign('title', $objArray['title']);
   $objSmarty->assign('content', $objArray['content']);
   $objSmarty->assign('ErrorMessage', 'Title Already Exists');
  }
 }
 
 /* Display the Static Page */
 function GetContentById($CatIdent){
  global $objSmarty;
  $objSmarty->assign('Keyword', $this->Keyword);
  $objSmarty->assign('Operator', $this->Operator);
  $objSmarty->assign('Offset', $this->Offset);
  $objSmarty->assign('PerPage', $this->PerPage);
  $SelQuery		= 'SELECT * FROM `tbl_staticpages` WHERE `id` = '.$CatIdent.' Limit 0,1';
  $CatDetail		= $this->ExecuteQuery($SelQuery, 'select');
  $CatDetail[0]['title'] = stripslashes($CatDetail[0]['title']);
  $objSmarty->assign('htitle', stripslashes($CatDetail[0]['title']));
  $CatDetail[0]['content'] = stripslashes($CatDetail[0]['content']);
  $objSmarty->assign('title', $CatDetail[0]['title']);
  $oFCKeditor->Value = $CatDetail[0]['content'];
  $objSmarty->assign('Editor', '$Editor');
  return $CatDetail[0]['content'];
 }
 /* Validation for Static Pages */
 function ChkDuplicate($Title, $Ident=''){
  global $objSmarty;
  if(!empty($Ident))
   $WhereClause	= ' AND `id` != '.$Ident;
  $SelQuery		= 'SELECT * FROM `tbl_staticpages` WHERE `title` = "'.$Title.'" '.$WhereClause.' Limit 0,1';
  $CatDetail		= $this->ExecuteQuery($SelQuery, 'select');
  if(!empty($CatDetail) && is_array($CatDetail))
   return false;
  else
   return true;
 }
 /* Delete the Static Page */
 function DeleteID($id){
  global $objSmarty;
  $DelQuery = 'DELETE FROM `tbl_staticpages` WHERE `id`='.$id; 
  $this->ExecuteQuery($DelQuery, 'delete');
  $objSmarty->assign('SuccessMessage', 'Deleted Successfully');
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
	 $DelQuery = 'DELETE FROM `tbl_staticpages` WHERE `id` IN ( '.$BanIds.' )' ;
	 $this->ExecuteQuery($DelQuery, 'delete');
	 $objSmarty->assign('SuccessMessage', 'Deleted Successfully');
	 break;
	case 'Active':
	 $UpQuery = 'UPDATE `tbl_staticpages` SET `status` =1 WHERE `id` IN (' . $BanIds . ')' ;
	 $this->ExecuteQuery($UpQuery, 'update');
	 $objSmarty->assign('SuccessMessage', 'The Contents Activated Successfully');
	 break;
	case 'InActive':
	 $UpQuery = 'UPDATE `tbl_staticpages` SET `status` =0 WHERE `id` IN (' . $BanIds . ')' ;
	 $this->ExecuteQuery($UpQuery, 'update');
	 $objSmarty->assign('SuccessMessage', 'The Contents In-Activated Successfully');
	 break;
   }
 }
}
?>


