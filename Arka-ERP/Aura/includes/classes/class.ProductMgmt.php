<?php
#####Class For Adding Content Management ######
class ProductMgmt extends MysqlFns{
 
 /* class constructor */
function ProductMgmt(){
 $this->LDDisplayPath= $config['SiteGlobalPath']."class.ProductMgmt.php";
  global $config;
  global $objSmarty;
  $this->MysqlFns();
  $this->Limit = 50;

 $SelQuerys	= 'SELECT max(product_id) as last FROM `arka_product_mgmt` Limit 0,1';
   $ProductDetail	= $this->ExecuteQuery($SelQuerys, 'select');
   
   if($ProductDetail[0]['last']!="")
   {
			$ProductDetail[0]['product_id'] = stripslashes($ProductDetail[0]['last']);
			$p_id1 = preg_replace("/[^0-9\.]/", '', $ProductDetail[0]['product_id']);
			$p_id1= $p_id1 + 1;
			$str = str_split($ProductDetail[0]['last'], 4);
			$p_id = $str[0]. "" .$p_id1 ;
   } else
   {
   		   $p_id = "AURA1001";
   }
	$objSmarty->assign('p_id', $p_id);
}
//*************************************************************************InsertProduct***************************************************

function InsertProductContent($objArray)
 { 
   global $objSmarty, $_POST;
   
 	if(!$objArray['scada_Id']){
    $objSmarty->assign('ErrorMessage', 'Scada ID should not be blank');
	return false;
   }elseif(!$objArray['product_id']){
    $objSmarty->assign('ErrorMessage', 'Product ID should not be blank');
	return false;
   }elseif(!$objArray['production_batch']){
    $objSmarty->assign('ErrorMessage', 'Production Batch should not be blank');
	return false;
   }elseif(!$objArray['production_date']) {
    $objSmarty->assign('ErrorMessage', 'Production Date should not be blank');
	return false;
   }elseif(!$objArray['tested_date']){
    $objSmarty->assign('ErrorMessage', 'Tested Date should not be blank');
	return false;
   }elseif(!$objArray['modelName']){
    $objSmarty->assign('ErrorMessage', 'Model Name should not be blank');
	return false;
   }
   
   
   if($objArray['product_id']){
    $InsQuery = 'INSERT IGNORE INTO `arka_product_mgmt`(`scada_id`,`product_id`,`model_name`,`Production_batch`, `Production_date`, `Tested_date`,`Created_by`,`Created_date`,`Created_time`,`status`) VALUES("'.trim(addslashes($objArray['scada_Id'])).'","'.trim(addslashes($objArray['product_id'])).'","'.trim(addslashes($objArray['modelName'])).'","'.trim(addslashes($objArray['production_batch'])).'","'.trim(addslashes($objArray['production_date'])).'","'.trim(addslashes($objArray['tested_date'])).'","'.trim(addslashes($objArray['created_by'])).'","'.trim(addslashes($objArray['created_date'])).'","'.trim(addslashes($objArray['created_time'])).'","1")';
  	 $this->ExecuteQuery($InsQuery, 'insert');

	/*  $SelQuerys   = 'SELECT material_name FROM `arka_model_details` WHERE model_name="'.trim(addslashes($objArray['modelName'])).'" ';
  	 $ModelDetail		= $this->ExecuteQuery($SelQuerys, 'select');
	  if(!empty($ModelDetail) && is_array($ModelDetail))
   		foreach($ModelDetail as $key=>$value){  
			$ModelDetail[$key]['material_name'] = stripslashes($ModelDetail[$key]['material_name']); 			
   $InsQuery2 = 'INSERT INTO `arka_product_material_details`(`material_name`,`scada_id`, `product_id`, `model_name`, `status`) VALUES("'.$ModelDetail[$key]['material_name'].'","'.trim(addslashes($objArray['scada_Id'])).'","'.trim(addslashes($objArray['product_id'])).'","'.trim(addslashes($objArray['modelName'])).'","0")';
	$this->ExecuteQuery($InsQuery2, 'insert');
	}
	*/
	//header('Location: pdtMaterialEntryReg.php?product_id='.$objArray['product_id'].'&model_name='.$objArray['modelName']);

	
	$objSmarty->assign('Pname',$objArray['material_name']);
	//$oFCKeditor->Value= '';
	$objSmarty->assign('material_name', '');
	$objSmarty->assign('SuccessMessage', 'New User Group Inserted Successfully');
	$this->ProductMgmt();
   	header('Location: pdtMaterialEntryReg.php?product_id='.$objArray['product_id'].'&model_name='.$objArray['modelName']);
}
  
  else{
   $objSmarty->assign('material_name', $objArray['material_name']);
   $objSmarty->assign('ErrorMessage', 'Material Name Already Exists');
   PrePopulate($objArray, 'CatDetail');
  }
 }
//*************************************************************************************************************************************************
function ChkDupliProduct($Tested_date,$Production_batch,$Production_date){
  global $objSmarty;
  if(!empty($Tested_date) || !empty($Production_batch) || !empty($Production_date) )
 // $WhereClause	= ' AND `id` != '.$Ident;
 	if ($Production_batch != "1@1.com" && $Production_date !="R")
		{
 	  $SelQuery2   = 'SELECT * FROM `arka_product_mgmt` WHERE (`status` != "0") AND (`Tested_date` = "'.$Tested_date.'" OR `Production_batch` = "'.$Production_batch.'" OR `Production_date` = "'.$Production_date.'") Limit 0,1';
  $ProductDetail		= $this->ExecuteQuery($SelQuery2, 'select');
  		if((!empty($ProductDetail)) && is_array($ProductDetail))
  			 return false;
		else
	   return true;
	 	}
		elseif($Production_batch == "1@1.com" && $Production_date !="R")
		{
		$SelQuery2		= 'SELECT * FROM `arka_product_mgmt` WHERE (`status` != "0") AND (`Tested_date` = "'.$Tested_date.'" OR  `Production_date` = "'.$Production_date.'" ) Limit 0,1';
  		$ProductDetail		= $this->ExecuteQuery($SelQuery2, 'select');
  		if((!empty($ProductDetail)) && is_array($ProductDetail))
  			 return false;
		else
	   return true;
		
		}
		elseif($Production_batch != "1@1.com" && $Production_date =="R")
		{
		$SelQuery2		= 'SELECT * FROM `arka_product_mgmt` WHERE (`status` != "0") AND (`Tested_date` = "'.$Tested_date.'" OR  `Production_batch` = "'.$Production_batch.'" ) Limit 0,1';
  		$ProductDetail		= $this->ExecuteQuery($SelQuery2, 'select');
  		if((!empty($ProductDetail)) && is_array($ProductDetail))
  			 return false;
		else
	   return true;
		
		}elseif($Production_batch == "1@1.com" && $Production_date =="R")
		{
		$SelQuery2		= 'SELECT * FROM ` arka_product_mgmt` WHERE (`status` != "0") AND (`Tested_date` = "'.$Tested_date.'" ) Limit 0,1';
  		$ProductDetail		= $this->ExecuteQuery($SelQuery2, 'select');
  		if((!empty($ProductDetail)) && is_array($ProductDetail))
  			 return false;
		else
	   return true;
		
		}
		
 }
  /************************************************************************ Edit the Customer Details*******************************************/
 function EditProduct($objArray) {
   global $objSmarty, $_POST;
    
   if(!$objArray['scada_Id']){
    $objSmarty->assign('ErrorMessage', 'Scada ID should not be blank');
	return false;
   }
   elseif(!$objArray['product_id']){
    $objSmarty->assign('ErrorMessage', 'Product ID should not be blank');
	return false;
   }elseif(!$objArray['production_batch']){
    $objSmarty->assign('ErrorMessage', 'Production Batch should not be blank');
	return false;
   }elseif(!$objArray['production_date']) {
    $objSmarty->assign('ErrorMessage', 'Production Date should not be blank');
	return false;
   }elseif(!$objArray['tested_date']){
    $objSmarty->assign('ErrorMessage', 'Tested Date should not be blank');
	return false;
   }elseif(!$objArray['modelName']){
    $objSmarty->assign('ErrorMessage', 'Model Name should not be blank');
	return false;
   }
   if($objArray['product_id']){
   	$UpQuery1 = 'UPDATE `arka_product_mgmt` SET `scada_id` = "'.trim($objArray['scada_Id']).'",`product_id` = "'.trim($objArray['product_id']).'",`Production_batch` = "'.trim($objArray['production_batch']).'",`Production_date` = "'.trim($objArray['production_date']).'", `Tested_date` = "'.trim($objArray['tested_date']).'", `model_name` = "'.trim($objArray['modelName']).'",`Modify_date` = "'.trim($objArray['modify_date']).'",`Modify_time` = "'.trim($objArray['modify_time']).'",`Modify_by` = "'.trim($objArray['modify_by']).'" WHERE `product_id` = "'.trim($objArray['product_id']).'"';
	$this->ExecuteQuery($UpQuery1, 'update');
header('Location: productEdit.php?product_id='.$objArray['product_id']);
   }
   }

//******************************************************************************************************************************************************* 
/* function GetScadaList($objArray='')  {
		global $objSmarty;
		if($_SESSION['CustomerId'] =='CUS1001')
			$SelQuery = 'SELECT * FROM `arka_product_mgmt` WHERE status="1"' ;
		else
			$SelQuery = 'SELECT * FROM `arka_product_mgmt` WHERE status="1"' ;
			
		$PageList		= $this->ExecuteQuery($SelQuery, "select");
        $objSmarty->assign('PageList', $PageList);
	}	
	
function GetScadaDetails($objArray='')  {
		global $objSmarty;
		$SelQuery = 'SELECT * FROM `arka_product_mgmt` WHERE scada_id="'.$_GET['scada_id'].'" ' ;
		$PageList		= $this->ExecuteQuery($SelQuery, "select");
        $objSmarty->assign('PageList', $PageList);
	}	
*/
  function Getmaterials(){
 //print_r($_POST);
  global $objSmarty;
    $SelQuery1        = "SELECT DISTINCT material_name FROM arka_prod_materials where sl_no AND status='1' order by sl_no";
    $PageList = $this->ExecuteQuery($SelQuery1, 'selectassoc');
  
  if(!empty($PageList) && is_array($PageList))
   foreach($PageList as $key=>$value){
   
	$PageList[$key]['material_name'] = stripslashes($PageList[$key]['material_name']);
	
	
   }

  $objSmarty->assign('i', $listing_split->i);
  $objSmarty->assign('PageList', $PageList);
  return $PageList;

 }
 
  
 function GetProductList($objArray='')  
 {
		global $objSmarty;
		if($_SESSION['CustomerId'] == 'CUS1001')
		{
			$SelQuery = 'SELECT * FROM `arka_product_mgmt` WHERE status="1"' ;
		}
		else
		{
			$SelQuery = 'SELECT * FROM `arka_product_mgmt` WHERE status="1" AND customer_id="'.$_SESSION['CustomerId'].'"' ;		
		}
		$PageList		= $this->ExecuteQuery($SelQuery, "select");
        $objSmarty->assign('PageList', $PageList);
}	
	
function GetProductDetails($objArray='')  {
		global $objSmarty;
		$SelQuery = 'SELECT * FROM `arka_product_mgmt` WHERE product_id="'.$_GET['product_id'].'" ' ;
		$PageList		= $this->ExecuteQuery($SelQuery, "select");
        $objSmarty->assign('PageList', $PageList);
				
	
		
	}
	/*function GetProductMaterialDetails($objArray='')  {
		global $objSmarty;
		$SelQuery = 'SELECT * FROM `arka_product_material_details` WHERE product_id="'.$_GET['product_id'].'" ' ;
		$ProdMat		= $this->ExecuteQuery($SelQuery, "select");
        $objSmarty->assign('ProdMat', $ProdMat);
				
	
		
	}	*/	
	function GetproductMaterial($objArray='')  {
		global $objSmarty;
		$SelQuery = 'SELECT * FROM `arka_prod_materials`' ;
		$MtrlList		= $this->ExecuteQuery($SelQuery, "select");
        $objSmarty->assign('MtrlList', $MtrlList);
	}	
	
	
	function GetpdtMappingDetails($objArray='')  {
		global $objSmarty;
		$SelQuery = 'SELECT * FROM `arka_product_mgmt` WHERE turbine_id="'.$_GET['turbine_id'].'" ' ;
		$PageList		= $this->ExecuteQuery($SelQuery, "select");
        $objSmarty->assign('PageList', $PageList);
	}
	function GetpdtMtrlDetails($objArray='')  {
		global $objSmarty;
		$SelQuery = 'SELECT * FROM `arka_product_material_details` WHERE product_id="'.$_GET['product_id'].'" ' ;
		$MtrlDet		= $this->ExecuteQuery($SelQuery, "select");
        $objSmarty->assign('MtrlDet', $MtrlDet);
	}
	
	function GetModel($objArray='')  {
		global $objSmarty;
		$SelQuery = 'SELECT * FROM `arka_model_master`';
		
		$ModelList		= $this->ExecuteQuery($SelQuery, "select");
        $objSmarty->assign('ModelList', $ModelList);
	 }	
	 function GetModel2($objArray='')  {
		global $objSmarty;
		$SelQuery = 'SELECT * FROM `arka_model_details`';
		
		$ModelList2		= $this->ExecuteQuery($SelQuery, "select");
        $objSmarty->assign('ModelList2', $ModelList2);
	 }	
	
	function DeleteID($id){
  global $objSmarty;
  $DelQuery = 'update  `arka_product_mgmt`  set `status`= 0 WHERE  product_id="'.$_GET['product_id'].'" '; 
  $this->ExecuteQuery($DelQuery, 'delete');
  $objSmarty->assign('SuccessMessage1', 'Deleted Successfully');
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
/*  ---------vishal-------
	public function getMaxScadaId()
	{
	$this->db->select_max('scada_id','ScadaID');
	$maxQuery = $this->db->get('arka_product_mgmt');
	$maxScadaId=$maxQuery->result();
	$maxScadaId=$maxScadaId[0]->ScadaID;
	$maxScadaIdNo= preg_replace ("/[^0-9\.]/",'',$maxScadaId);
	$maxScadaIdNo=$maxScadaIdNo + 1;
	$split= str_split ($maxScadaId,4);
	$maxScadaId =$split[0].$maxScadaIdNo;
	return $maxScadaId;
	
	
	
	} ------vishal------
	*/
	
	/*public function getMax_scada_id()
	{
	$this->db->select_max('scada_id','scada_id');
	$maxQuery = $this->db->get('arka_product_mgmt');
	$max_scada_id=$maxQuery->result();
	$max_scada_id=$max_scada_id[0]->scada_id;
	$max_scada_id_No= preg_replace ("/[^0-9\.]/",'',$max_scada_id);
	$max_scada_id_No=$max_scada_id_No + 1;
	$split= str_split ($max_scada_id,4);
	$max_scada_id =$split[0].$max_scada_id_No;
	return $max_scada_id;
	
	
	} 
    */
	/*   --------vishal---------
	function upDateScadaDetails($updateData)
	{
	$datestring = "%Y-%m-%d";
$time = time();
$timestring = "%h:%i:%s %a";
 
$date = mdate($datestring, $time);
$time = mdate($timestring, $time);
	 $ticketData = array('scada_id'=>$updateData['scada_id'],
		 'Production_batch'=>$updateData['production_batch'],
		 'Production_date'=>$updateData['production_date'],
		 'Tested_date'=>$updateData['tested_date'],
     	 'Modify_time'=>$time,
		 'Modify_date'=>$date,

		 'Status'=>'1'
	 );
	 
	 $this->db->where('scada_id',$updateData['scada_id']);
		$updateStatus = $this->db->update('arka_product_mgmt', $ticketData); 		
		
		if($updateStatus==1)
		{
	    redirect('scadaList_Controller/listScada');
		}
		
	}
    function getScadaList()
    {
		$query = $this->db->query("SELECT * FROM `arka_product_mgmt` WHERE `status` = '1'");
		$scada_list=$query->result();
        return $scada_list;
    }
	  function insertScadaDetails($scadaData)
    { 
	$datestring = "%Y-%m-%d";
$time = time();
$timestring = "%h:%i:%s %a";
 
$date = mdate($datestring, $time);
$time = mdate($timestring, $time);
       $postData = array('scada_id   '=>$scadaData['scada_id'],
		 'Production_batch  '=>$scadaData['production_batch'],
		 'Production_date'=>$scadaData['production_date'],
		 'Tested_date'=>$scadaData['tested_date'],
		 'Created_date'=>$scadaData['created_date'], 
		 'Created_time'=>$scadaData['created_time'],
		 'Created_by'=>$scadaData['created_by'],
		 'Created_time'=>$time,
		 'Created_date'=>$date,
		 'Status'=>'1'
				);
	
       $insertStatus = $this->db->insert('arka_product_mgmt', $postData);
	   if($insertStatus== 1 )
	   {
	   redirect('scadaReg_Controller/addScada');
	   }
    }
	
	function getScadaDetails($scada_id)
	{
        //$query = $this->db->get(' arka_product_mgmt', 1);
		$query = $this->db->query("SELECT * FROM `arka_product_mgmt` WHERE `scada_id`='".$scada_id."'");
		$scada_list=$query->result();
        return $scada_list;	
	
	}
	 
	function deleteScada($delData)
	{
	
	       $postData = array(
		   'status'=>"0"
				);
	
	$this->db->where('Sl_no', $delData['scada_id']);
	$deleteStatus = $this->db->update('arka_product_mgmt', $postData); 	
	   if($deleteStatus== 1 )
	   {
	   echo   '<div class="alert alert-success"> Scada Details Deleted Successfully.</div>';
	   }	
	
	} -------vishal-------*/

function deleteProduct($delData){
	 global $objSmarty;
 
    $DelQuery = 'update `arka_product_mgmt` set `status`=0 WHERE `scada_id` ="'.$delData.'"';
	$this->ExecuteQuery($DelQuery, 'delete');
	return true;
  }
}
 

?>