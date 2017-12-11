<?php
#####Class For Adding Content Management ######
class ProductMaterialEntry extends MysqlFns{
 
 /* class constructor */
 function ProductMaterialEntry(){
 $this->LDDisplayPath= $config['SiteGlobalPath']."class.ProductMaterialEntry.php";
  global $config;
  global $objSmarty;
  $this->MysqlFns();
  $this->Limit = 50;
		 
}	 
 
 /* Insert the content for  Static Pages */
 function InsertproductMaterialEntry($objArray)
 {
  global $objSmarty, $_POST;
  
if(!empty($objArray['select_id']) && is_array($objArray['select_id']))
      {
          foreach($objArray['select_id'] as $key=>$value)
          {
		//  echo $value;exit;
  if(!$objArray['material_name'][$value]){
    $objSmarty->assign('ErrorMessage', 'Material Name should not be blank');
	return false;
	}elseif(!$objArray['prod_sl_no'][$value]){
    $objSmarty->assign('ErrorMessage', 'Product Sl No should not be blank');
	return false;
   }elseif(!$objArray['model'][$value]){
    $objSmarty->assign('ErrorMessage', 'Model should not be blank');
	return false;
   }elseif(!$objArray['make'][$value]){
    $objSmarty->assign('ErrorMessage', 'Make should not be blank');
	return false;
   }elseif(!$objArray['spec'][$value]){
    $objSmarty->assign('ErrorMessage', 'Spec should not be blank');
	return false;
   }elseif(!$objArray['product_id']){
    $objSmarty->assign('ErrorMessage', 'Product ID Not Set For Materials');
	return false;
   }
   $InsQuery2 = 'INSERT INTO `arka_product_material_details`(`model_name`,`product_id`,`material_name`,`prod_sl_no`, `model`,`make`,`spec`,`created_date`, `created_time`, `created_by`,`status`) VALUES("'.trim(addslashes($objArray['model_name'])).'","'.trim(addslashes($objArray['product_id'])).'","'.trim(addslashes($objArray['material_name'][$value])).'","'.trim(addslashes($objArray['prod_sl_no'][$value])).'","'.trim(addslashes($objArray['model'][$value])).'","'.trim(addslashes($objArray['make'][$value])).'","'.trim(addslashes($objArray['spec'][$value])).'","'.trim(addslashes($objArray['created_date'][$value])).'","'.trim(addslashes($objArray['created_time'][$value])).'","'.trim(addslashes($objArray['created_by'][$value])).'","1")'; 
	$this->ExecuteQuery($InsQuery2, 'insert');
	$objSmarty->assign('SuccessMessage1', 'Material Details  Inserted Successfully');

	 header('Location:' .$_SERVER['PHP_SELF'].'?server_response=success&product_id='.$objArray['product_id'].'&window_action=true');
	}
 }
 
}
 
 /* Edit the Static Page */
 function EditpdtMaterial($objArray){
  global $objSmarty;
  if($this->ChkDuplicate(trim(addslashes($objArray['product_id'])))){
  if(!$objArray['material_name']){
    $objSmarty->assign('ErrorMessage', 'Material Name should not be blank');
   }elseif(!$objArray['prod_sl_no']){
    $objSmarty->assign('ErrorMessage', 'Product Sl No should not be blank');
   }elseif(!$objArray['model']){
    $objSmarty->assign('ErrorMessage', 'Model should not be blank');
   }elseif(!$objArray['make']){
    $objSmarty->assign('ErrorMessage', 'Make should not be blank');
   }elseif(!$objArray['spec']){
    $objSmarty->assign('ErrorMessage', 'Spec should not be blank');
   }

  
	 if($objArray['product_id']){
   	$UpQuery1 = 'UPDATE `arka_product_material_details` SET `material_name` ="'.trim($objArray['material_name']).'",`prod_sl_no` = "'.trim($objArray['prod_sl_no']).'",`model` = "'.trim($objArray['model']).'"`make` = "'.trim($objArray['make']).'",`spec` = "'.trim($objArray['spec']).'" WHERE product_id="'.$_GET['product_id'].'" ' ;
	$this->ExecuteQuery($UpQuery1, 'update');
//exit;
//print_r($InsQuery);
	$this->ExecuteQuery($InsQuery, 'insert');
	}
	$objSmarty->assign('SuccessMessage', 'Product Material Updated Successfully');
	return true;
   }
  
  else{
  
	   $objSmarty->assign('product_id', $objArray['product_id']);
   $objSmarty->assign('ErrorMessage', 'Product Material Already Exists');
  }
 }
 
 
 function Getmaterials($model_id){
 //print_r($_POST);
  global $objSmarty;
    $SelQuery1        = "SELECT DISTINCT sl_no,material_name FROM  arka_prod_materials where material_name not in(SELECT material_name FROM arka_model_details where model_id='".$model_id."') AND `status` ='1'  order by 	sl_no";
    $PageList = $this->ExecuteQuery($SelQuery1, 'selectassoc');
  
  if(!empty($PageList) && is_array($PageList))
   foreach($PageList as $key=>$value){
  // $PageList[$key]['role_id'] = stripslashes($PageList[$key]['role_id']);*/
	$PageList[$key]['material_name'] = stripslashes($PageList[$key]['material_name']);
	/*$PageList[$key]['category'] = stripslashes($PageList[$key]['category']);*/
	
   }

  $objSmarty->assign('i', $listing_split->i);
  $objSmarty->assign('PageList', $PageList);
  return $PageList;

 }
 function GetpdtMaterialDetails($objArray='')  {
		global $objSmarty;
		$SelQuery = 'SELECT * FROM `arka_product_material_details` WHERE product_id="'.$_GET['product_id'].'" ' ;
		$PrdMtrlList		= $this->ExecuteQuery($SelQuery, "select");
        $objSmarty->assign('PrdMtrlList', $PrdMtrlList);
	}
	 
 function GetManagement($objArray=''){
 //print_r($_POST);
  global $objSmarty;
    $SelQuery1        = "SELECT sl_no FROM arka_prod_materials where category not in(SELECT role_name FROM arka_model_details where model_id='".$_POST['CatIdent']."') group by sl_no";
    $MgmtList = $this->ExecuteQuery($SelQuery1, 'selectassoc');
  
  if(!empty($MgmtList) && is_array($MgmtList))
   foreach($MgmtList as $key=>$value){
	$MgmtList[$key]['sl_no'] = stripslashes($MgmtList[$key]['sl_no']);
	
   }

  $objSmarty->assign('i', $listing_split->i);
  $objSmarty->assign('MgmtList', $MgmtList);
  return $MgmtList;

 }
 
 /*
   function Getmaterials(){
 //print_r($_POST);
  global $objSmarty;
    $SelQuery1        = "SELECT  material_name FROM arka_prod_materials where sl_no  order by sl_no";
    $PageList = $this->ExecuteQuery($SelQuery1, 'selectassoc');
  
  if(!empty($PageList) && is_array($PageList))
   foreach($PageList as $key=>$value){
   
	$PageList[$key]['material_name'] = stripslashes($PageList[$key]['material_name']);
	
	
   }*/
/*
  $objSmarty->assign('i', $listing_split->i);
  $objSmarty->assign('PageList', $PageList);
  return $PageList;

 }*/
 function viewGetMaterials(){
  global $objSmarty;
//print_r($_POST);
  //$objSmarty->assign('title',$_GET['title']);
 
    $SelQuery		= 'SELECT model_name FROM arka_model_details where model_id="'.$_POST['CatIdent'].'"';
    $viewlist = $this->ExecuteQuery($SelQuery, 'selectassoc');
  
  if(!empty($viewlist) && is_array($viewlist))
   foreach($viewlist as $key=>$value){
   
   	
	 $viewlist[$key]['material_name'] = stripslashes($viewlist[$key]['material_name']);
	
   }

 // $objSmarty->assign('i', $listing_split->i);
  $objSmarty->assign('viewlist', $viewlist);
  return $viewlist;

 }
 
 /* Display the Static Page */
 function Getmodel($CatIdent){
  global $objSmarty;
  $objSmarty->assign('Keyword', $this->Keyword);
  $objSmarty->assign('Operator', $this->Operator);
  $objSmarty->assign('Offset', $this->Offset);
  $objSmarty->assign('PerPage', $this->PerPage);
  $SelQuery		= 'SELECT * FROM `arka_model_details` WHERE `model_id` = "'.$CatIdent.'" Limit 0,1';
  $CatDetail		= $this->ExecuteQuery($SelQuery, 'select');
  $CatDetail[0]['model_id'] = stripslashes($CatDetail[0]['model_id']);
  $objSmarty->assign('model_id', stripslashes($CatDetail[0]['model_id']));
  $objSmarty->assign('model_id', $CatDetail[0]['model_id']);
  
  
  $CatDetail[0]['material_name'] = stripslashes($CatDetail[0]['material_name']);
  $objSmarty->assign('material_name', $CatDetail[0]['material_name']);
  
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
 function ChkDuplicate($model_id, $Ident=''){
  global $objSmarty;
  if(!empty($Ident))
  // $WhereClause	= ' AND `id` != '.$Ident;
  $SelQuery		= 'SELECT * FROM `arka_model_details` WHERE `model_id` = "'.$model_id.'" Limit 0,1';
  $CatDetail		= $this->ExecuteQuery($SelQuery, 'select');
  if(!empty($CatDetail) && is_array($CatDetail))
   return false;
  else
   return true;
 }
 /* Delete the Static Page */
 function DeleteID($model_id){
  global $objSmarty;
  $DelQuery = 'DELETE FROM `arka_model_details` WHERE `model_id`="' .$model_id. '"'; 
  $this->ExecuteQuery($DelQuery, 'delete');
  $DelQueryz = 'DELETE FROM `arka_model_master` WHERE `model_id`="' .$model_id. '"'; 
  $this->ExecuteQuery($DelQueryz, 'delete');
  $objSmarty->assign('SuccessMessage', 'Deleted Successfully');
 }
 /* Activate, Deactivate and Delete for the Static Pages */
 function ActiveContent($objArray){
  global $objSmarty;
  if(!empty($objArray['ConId']) && is_array($objArray['ConId']))
   $BanIds		= implode(',' , $objArray['ConId']);
  else
   $objSmarty->assign('ErrorMessage', 'No Model Selected');
  if(!empty($BanIds))
   switch($objArray['Submit']){
    case 'Delete':
	 $DelQuery = 'DELETE FROM `arka_model_master` WHERE `ident` IN (' . $BanIds . ')' ;
	 $this->ExecuteQuery($DelQuery, 'delete');
//	 $DelQueryz = 'DELETE FROM `arka_group_mapping` WHERE `group_id` IN (' . $BanIds . ')' ;
 // 	 $this->ExecuteQuery($DelQueryz, 'delete');
	 $objSmarty->assign('SuccessMessage', 'Deleted Successfully');
	 break;
	case 'Active':
	 $UpQuery = 'UPDATE `arka_model_master` SET `status` =1 WHERE `ident` IN (' . $BanIds . ')' ;
	 $this->ExecuteQuery($UpQuery, 'update');
	 $objSmarty->assign('SuccessMessage', 'The Contents Activated Successfully');
	 break;
	case 'InActive':
	 $UpQuery = 'UPDATE `arka_model_master` SET `status` =0 WHERE `ident` IN (' . $BanIds . ')' ;
	 $this->ExecuteQuery($UpQuery, 'update');
	 $objSmarty->assign('SuccessMessage', 'The Contents In-Activated Successfully');
	 break;
   }
 }
 function GetmodelList($objArray='')  {
		global $objSmarty;
		$SelQuery = 'SELECT * FROM `arka_model_details` WHERE status="1" AND model_name= "'.$_GET['model_name'].'" ' ;
		$PageList		= $this->ExecuteQuery($SelQuery, "select");
        $objSmarty->assign('PageList', $PageList);
	}	
	
function GetmodelDetails($objArray='')  {
		global $objSmarty;
		$SelQuery = 'SELECT * FROM `arka_model_master` WHERE model_id="'.$_GET['model_id'].'" ' ;
		$MasterList		= $this->ExecuteQuery($SelQuery, "select");
        $objSmarty->assign('MasterList', $MasterList);
	
	}	
	
	function GetModelMap($objArray='')  {
		global $objSmarty;
		$SelQuery = "SELECT * FROM `arka_model_details` WHERE `model_id`='".$_GET['model_id']."'" ;
		 $ModelMapping		= $this->ExecuteQuery($SelQuery, "select");
        $objSmarty->assign('ModelMapping', $ModelMapping);
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


