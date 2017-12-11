<?php
#####Class For Adding Content Management ######
class Outward extends MysqlFns{
 
 /* class constructor */
function Outward(){
 $this->LDDisplayPath= $config['SiteGlobalPath']."class.Outward.php";
  global $config;
  global $objSmarty;
  $this->MysqlFns();
  $this->Limit = 50;

   $SelQuerys	= 'SELECT max(outward_entry_no) as last FROM `arka_outward_master` Limit 0,1';
   $OutwardDetail	= $this->ExecuteQuery($SelQuerys, 'select');
   
   if($OutwardDetail[0]['last']!="")
   {
			$OutwardDetail[0]['outward_entry_no'] = stripslashes($OutwardDetail[0]['last']);
			$in_id1 = preg_replace("/[^0-9\.]/", '', $OutwardDetail[0]['outward_entry_no']);
			$in_id1= $in_id1 + 1;
			$str = str_split($OutwardDetail[0]['last'], 3);
			$in_id = $str[0]. "" .$in_id1;
   } else
   {
   		   $in_id = "CUS10001";
   }
	$objSmarty->assign('in_id', $in_id);
		 
	//******************************************************************customer Name***********************************************************************************
	$f1 = "customer_name.txt";
	$uploadpath = $config['QuotePath'];
	//chmod($uploadpath.$f1,"777");
	$myfile = fopen($f1, "w") or die("Unable to open file!");
	$SelQuery1	= 'SELECT DISTINCT company_name FROM `arka_customer_master` WHERE status="1"';
   	$CusList	= $this->ExecuteQuery($SelQuery1, 'select');
	if(!empty($CusList) && is_array($CusList))
			foreach($CusList as $key=>$value)
			{
				$CusList[$key]['CName'] = stripslashes($CusList[$key]['company_name']);
				$names = $names.$CusList[$key]['CName'].",";
			}
	fwrite($myfile, $names);
	fclose($myfile);
	
		  $f2 = "location.txt";
			$uploadpath = $config['QuotePath'];
			//chmod($uploadpath.$f1,"777");
			$myfile2 = fopen($f2, "w") or die("Unable to open file!");
			$SelQueryz	= 'SELECT DISTINCT location FROM `arka_stock_master` WHERE record_status="1"';
			$LocList	= $this->ExecuteQuery($SelQueryz, 'select');
			//print_r($LocList);
			if(!empty($LocList) && is_array($LocList))
			foreach($LocList as $key=>$value)
			{
			$LocList[$key]['Loc'] = stripslashes($LocList[$key]['location']);
			$names2 = $names2.$LocList[$key]['Loc'].",";
			}
			fwrite($myfile2, $names2);
			fclose($myfile2);

}
//**********************************************************************************************************************************************************************


function InsertOutwardContent($objArray='')
 { 
   global $objSmarty, $_POST;
    if(!$objArray['tinNo']){
    $objSmarty->assign('ErrorMessage', 'Tin Number should not be blank');
	return false;
   }elseif(!$objArray['stNO']){
    $objSmarty->assign('ErrorMessage', 'St Number should not be blank');
	return false;
   }elseif(!$objArray['cstNo']){
    $objSmarty->assign('ErrorMessage', 'Cst Number should not be blank');
	return false;
   }elseif(!$objArray['outwardEntryNo']){
    $objSmarty->assign('ErrorMessage', 'Outward Entry Number should not be blank');
	return false;
   }elseif(!$objArray['dateofEntry']){
    $objSmarty->assign('ErrorMessage', 'Date of Entry should not be blank');
	return false;
   }elseif(!$objArray['toName']){
    $objSmarty->assign('ErrorMessage', 'To Name should not be blank');
	return false;
   }elseif(!$objArray['purpose']){
    $objSmarty->assign('ErrorMessage', 'Purpose should not be blank');
	return false;
   }elseif(!$objArray['toAddress']){
    $objSmarty->assign('ErrorMessage', 'To Address should not be blank');
	return false;
   }elseif(!$objArray['vehicleNo']){
    $objSmarty->assign('ErrorMessage', 'Vehicle Number should not be blank');
	return false;
   }elseif(!$objArray['materialName']){
    $objSmarty->assign('ErrorMessage', 'Material Name should not be blank');
	return false;
   }elseif(!$objArray['materialCode']){
    $objSmarty->assign('ErrorMessage', 'Material Code should not be blank');
	return false;
   }elseif(!$objArray['materialType']){
    $objSmarty->assign('ErrorMessage', 'Material Type should not be blank');
	return false;
   }elseif(!$objArray['materialCategory']){
    $objSmarty->assign('ErrorMessage', 'Material Category should not be blank');
	return false;
   }elseif(!$objArray['quantity']){
    $objSmarty->assign('ErrorMessage', 'Quantity should not be blank');
	return false;
   }elseif(!$objArray['availableQuantity']){
    $objSmarty->assign('ErrorMessage', 'Available Quantity should not be blank');
	return false;
   }elseif(!$objArray['materialPrice']){
    $objSmarty->assign('ErrorMessage', 'Material Price should not be blank');
	return false;
   }
   
   if($objArray['outwardEntryNo']){
    $InsQuery = 'INSERT IGNORE INTO `arka_outward_master`(`outward_entry_no`, `dc_no`, `to_name`, `to_address`, `date_of_entry`, `dc_date`, `purpose`, `vehicle_no`, `select_region`, `sites`, `tin_no`,`cst_no`,`st_no`,`record_status`) VALUES("'.trim(addslashes($objArray['outwardEntryNo'])).'","'.trim(addslashes($objArray['dcNo'])).'","'.trim(addslashes($objArray['toName'])).'","'.trim(addslashes($objArray['toAddress'])).'","'.trim(addslashes($objArray['dateofEntry'])).'","'.trim(addslashes($objArray['dcDate'])).'","'.trim(addslashes($objArray['purpose'])).'","'.trim(addslashes($objArray['vehicleNo'])).'","'.trim(addslashes($objArray['selectRegion'])).'","'.trim(addslashes($objArray['sites'])).'","'.trim(addslashes($objArray['tinNo'])).'","'.trim(addslashes($objArray['cstNo'])).'","'.trim(addslashes($objArray['stNo'])).'","1")';
  	 $this->ExecuteQuery($InsQuery, 'insert');
	 header('Location:' .$_SERVER['PHP_SELF'].'?server_response=success&outward_entry_no='.$objArray['outward_entry_no'].'&window_action=true');	
		
	}
	
	} 
	
	

//*************************************************************************************************************************************************
function ChkDupliCust($mobile,$email,$customer_name){
  global $objSmarty;
  if(!empty($mobile) || !empty($email) || !empty($customer_name) )
 // $WhereClause	= ' AND `id` != '.$Ident;
 	if ($email != "1@1.com" && $customer_name !="R")
		{
 	  $SelQuery2		= 'SELECT * FROM `arka_cus_reg_master` WHERE (`status` != "0") AND (`mobile` = "'.$mobile.'" OR `email` = "'.$email.'" OR `customer_name` = "'.$customer_name.'") Limit 0,1';
  $CusDetail		= $this->ExecuteQuery($SelQuery2, 'select');
  		if((!empty($CusDetail)) && is_array($CusDetail))
  			 return false;
		else
	   return true;
	 	}
		elseif($email == "1@1.com" && $customer_name !="R")
		{
		$SelQuery2		= 'SELECT * FROM `arka_cus_reg_master` WHERE (`status` != "0") AND (`mobile` = "'.$mobile.'" OR  `customer_name` = "'.$customer_name.'" ) Limit 0,1';
  		$CusDetail		= $this->ExecuteQuery($SelQuery2, 'select');
  		if((!empty($CusDetail)) && is_array($CusDetail))
  			 return false;
		else
	   return true;
		
		}
		elseif($email != "1@1.com" && $customer_name =="R")
		{
		$SelQuery2		= 'SELECT * FROM `arka_cus_reg_master` WHERE (`status` != "0") AND (`mobile` = "'.$mobile.'" OR  `email` = "'.$email.'" ) Limit 0,1';
  		$CusDetail		= $this->ExecuteQuery($SelQuery2, 'select');
  		if((!empty($CusDetail)) && is_array($CusDetail))
  			 return false;
		else
	   return true;
		
		}elseif($email == "1@1.com" && $customer_name =="R")
		{
		$SelQuery2		= 'SELECT * FROM `arka_cus_reg_master` WHERE (`status` != "0") AND (`mobile` = "'.$mobile.'" ) Limit 0,1';
  		$CusDetail		= $this->ExecuteQuery($SelQuery2, 'select');
  		if((!empty($CusDetail)) && is_array($CusDetail))
  			 return false;
		else
	   return true;
		
		}
		
 }
  /************************************************************************ Edit the Outward Material Details*******************************************/
 function EditOutward($objArray='') {
   global $objSmarty, $_POST;
    
    if(!$objArray['outwardEntryNo']){
    $objSmarty->assign('ErrorMessage', 'Outward Entry Number should not be blank');
	return false;
   }elseif(!$objArray['dateofEntry']){
    $objSmarty->assign('ErrorMessage', 'Date of Entry should not be blank');
	return false;
   }elseif(!$objArray['toName']){
    $objSmarty->assign('ErrorMessage', 'To Name should not be blank');
	return false;
   }elseif(!$objArray['purpose']){
    $objSmarty->assign('ErrorMessage', 'Purpose should not be blank');
	return false;
   }elseif(!$objArray['toAddress']){
    $objSmarty->assign('ErrorMessage', 'To Address should not be blank');
	return false;
   }elseif(!$objArray['vehicleNo']){
    $objSmarty->assign('ErrorMessage', 'Vehicle Number should not be blank');
	return false;
   }elseif(!$objArray['item_name']){
    $objSmarty->assign('ErrorMessage', 'Material Name should not be blank');
	return false;
   }elseif(!$objArray['item_code']){
    $objSmarty->assign('ErrorMessage', 'Material Code should not be blank');
	return false;
   }elseif(!$objArray['item_category']){
    $objSmarty->assign('ErrorMessage', 'Material Category should not be blank');
	return false;
   }elseif(!$objArray['item_category_code']){
    $objSmarty->assign('ErrorMessage', 'Material Category Code should not be blank');
	return false;
   }elseif(!$objArray['quantity']){
    $objSmarty->assign('ErrorMessage', 'Quantity should not be blank');
	return false;
   }elseif(!$objArray['availableQuantity']){
    $objSmarty->assign('ErrorMessage', 'Available Quantity should not be blank');
	return false;
   }elseif(!$objArray['materialPrice']){
    $objSmarty->assign('ErrorMessage', 'Material Price should not be blank');
	return false;
   }
  if($objArray['outwardEntryNo']){
											$UpQuery1 = 'UPDATE `arka_outward_master` 
														 SET
															`outward_entry_no` ="'.trim($objArray['outwardEntryNo']).'",
															`to_name` = "'.trim($objArray['toName']).'", 
															`to_address` = "'.trim($objArray['toAddress']).'",
															`date_of_entry` = "'.trim($objArray['dateofEntry']).'",
															`purpose` = "'.trim($objArray['purpose']).'", 
															`vehicle_no` = "'.trim($objArray['vehicleNo']).'"
															
													   WHERE 
															`outward_entry_no` = "'.trim($objArray['outwardEntryNo']).'"';
	$this->ExecuteQuery($UpQuery1, 'update');
						
										$InsQuery2 = 'INSERT INTO `arka_outward_details`(`outward_entry_no`,
															 `item_category_code`,
															 `material_name`,
															 `material_category`,
															 `material_code`,
															 `material_price`,
															 `quantity`,
															 `record_status`
															) 
													VALUES
															("'.trim(addslashes($objArray['outwardEntryNo'])).'",
															"'.trim(addslashes($objArray['item_category_code'])).'",
															"'.trim(addslashes($objArray['item_name'])).'",
															"'.trim(addslashes($objArray['item_category'])).'",
															"'.trim(addslashes($objArray['item_code'])).'",
															"'.trim(addslashes($objArray['materialPrice'])).'",
															"'.trim(addslashes($objArray['quantity'])).'",
															1
															)';
									$this->ExecuteQuery($InsQuery2, 'insert');	
							   
}
 $SelQuery_on_stock	= 'SELECT * FROM `arka_stock_master` WHERE   `material_name` ="'.trim(addslashes($objArray['item_name'])).'" && `material_code` ="'.trim(addslashes($objArray['item_code'])).'"';
	  $RList		= $this->ExecuteQuery($SelQuery_on_stock, "select");
 
	  if(!empty($RList) && is_array($RList))
	  {
	  $update_quantity=$RList[0]['quantity']-$objArray['quantity'];
	  $update_total=$update_quantity*$RList[0]['materialPrice'];
 $update_query='UPDATE `arka_stock_master` SET `quantity` ="'.trim(addslashes($update_quantity)).'",`total`="'.trim(addslashes($update_total)).'" WHERE `item_category_code` ="'.$RList[0]['item_category_code'].'" && `material_category` ="'.$RList[0]['material_category'].'" && `material_name` ="'.$RList[0]['material_name'].'" && `material_code` ="'.$RList[0]['material_code'].'" && `unit_price` ="'.$RList[0]['unit_price'].'"';
$this->ExecuteQuery($update_query,"update");
}
	$this->list_outward_details();
	 header('Location:' .$_SERVER['PHP_SELF'].'?outward_entry_no='.$objArray['outwardEntryNo'].'&server_success=update succeed');	

   }
   
// **********************************************************************************************************************************************
function GetOutwardList($objArray='')  {
		global $objSmarty;
		$SelQuery = 'SELECT * FROM `arka_outward_master` WHERE record_status="1" ';
		$PageList		= $this->ExecuteQuery($SelQuery, "select");
        $objSmarty->assign('PageList', $PageList);
	}	
	
	
	
	
	 /* Get the Static Content list */
 function GetmaterialLists($objArray='')  {  
  global $objSmarty;

  //$objSmarty->assign('title',$_GET['title']);
  $whereClause = '';  
   if($_POST['search'] == ''){
  			if($_POST['item_name'])
	   			$whereClause = ' WHERE (`material_name` like "%'.$_POST['item_name'].'%")';
   			elseif($_POST['item_code'])	
                $whereClause = ' WHERE (`material_code` like "%'.$_POST['item_code'].'%")';
			elseif($_POST['item_category'])	
                $whereClause = ' WHERE (`material_category` like "%'.$_POST['item_category'].'%")';
			elseif($_POST['item_category_code'])	
                $whereClause = ' WHERE (`item_category_code` like "%'.$_POST['item_category_code'].'%")';
			elseif($_POST['item_description'])	
                $whereClause = ' WHERE (`item_description` like "%'.$_POST['item_description'].'%")';			
  }
   $SelQuery		= 'SELECT * FROM `arka_stock_master`'.$whereClause;
  $listing_split = new MsplitPageResults($SelQuery, $this->Limit);
  if ( ($listing_split->number_of_rows > 0) )  {
   $objSmarty->assign('LinkPage',$listing_split->display_count(TEXT_DISPLAY_NUMBER_OF_RESULT));
   $objSmarty->assign('PerPageNavigation',TEXT_RESULT_PAGE1 . ' ' . $listing_split->display_links($this->Limit, get_all_get_params(array('page', 'info', 'x', 'y')))); 
   $PageListMat = $this->ExecuteQuery($listing_split->sql_query, 'selectassoc');
  }
  /*if(!empty($PageList) && is_array($PageList))

   foreach($PageList as $key=>$value){
    $PageList[$key]['SName'] = stripslashes($PageList[$key]['State_Name']);
   }*/

  $objSmarty->assign('i', $listing_split->i);
  $objSmarty->assign('PageListMat', $PageListMat);
  return $PageListMat;
 
}

	
function GetOutwardDetail($objArray='')  { 
		global $objSmarty;
		$SelQuery = 'SELECT * FROM `arka_outward_master` WHERE outward_entry_no="'.$_GET['outward_entry_no'].'" ' ;
		$MatList		= $this->ExecuteQuery($SelQuery, "select");
        $objSmarty->assign('MatList', $MatList);
	}	
	
function DeleteID($id){
  global $objSmarty;
  $DelQuery = 'update `arka_outward_master` set `record_status` = 0 WHERE `outward_entry_no`="'.$_GET['outward_entry_no'].'" '; 
 $this->ExecuteQuery($DelQuery, 'delete');
  
   $DelQuery2 = 'update `arka_outward_details` set `record_status` = 0 WHERE `outward_entry_no`="'.$_GET['outward_entry_no'].'" '; 
  $this->ExecuteQuery($DelQuery, 'delete');
  
    $SelQuery_on_outward_detail		= 'SELECT * FROM `arka_outward_details` WHERE `outward_entry_no` = "'.$_GET['outward_entry_no'].'"';
  $Detail_on_outward_detail		= $this->ExecuteQuery($SelQuery_on_outward_detail, 'select');

 foreach($Detail_on_outward_detail as $key=>$value)
  {  
    $SelQuery_on_stock		= 'SELECT * FROM `arka_stock_master` WHERE `item_category_code` = "'.$Detail_on_outward_detail[$key]['item_category_code'].'"&& `material_category` = "'.$Detail_on_outward_detail[$key]['item_category'].'"&& `material_name` = "'.$Detail_on_outward_detail[$key]['item_name'].'"&& `material_code` = "'.$Detail_on_outward_detail[$key]['item_code'].'"&& `unit_price` = "'.$Detail_on_outward_detail[$key]['materialPrice'].'"';
  $Detail_on_stock		= $this->ExecuteQuery($SelQuery_on_stock, 'select');
  
   if(isset($Detail_on_stock[0]['item_name']))
  {
  $process_flag=1;
  }
  else
  {
  $objSmarty->assign('ErrorMessage', 'Sorry No such Stock Available,Please Contact Admin!!!');
  return false;
  }
 }
 if($process_flag==1)
  {

  foreach($Detail_on_outward_detail as $key=>$value)
  {
    $SelQuery_on_stock		= 'SELECT * FROM `arka_stock_master` WHERE `item_category_code` = "'.$Detail_on_outward_detail[$key]['item_category_code'].'"&& `material_category` = "'.$Detail_on_outward_detail[$key]['item_category'].'"&& `material_name` = "'.$Detail_on_outward_detail[$key]['item_name'].'"&& `material_code` = "'.$Detail_on_outward_detail[$key]['item_code'].'"&& `unit_price` = "'.$Detail_on_outward_detail[$key]['materialPrice'].'"';
  $Detail_on_stock		= $this->ExecuteQuery($SelQuery_on_stock, 'select');   
  
  $update_quantity=$Detail_on_stock[0]['quantity']+$Detail_on_outward_detail[$key]['quantity'];
  $update_total=$update_quantity*$Detail_on_stock[0]['unit_price'];
							$UpQuery_on_stock = 'UPDATE `arka_stock_master`
													set 
													`quantity`="'.$update_quantity.'",
													`total`="'.$update_total.'"
													WHERE 
													`item_category_code` = "'.$Detail_on_outward_detail[$key]['item_category_code'].'"&&
													`material_category` = "'.$Detail_on_outward_detail[$key]['item_category'].'"&& 
													`material_name` = "'.$Detail_on_outward_detail[$key]['item_name'].'"&& 
													`material_code` = "'.$Detail_on_outward_detail[$key]['item_code'].'"&& 
													`unit_price` = "'.$Detail_on_outward_detail[$key]['materialPrice'].'"';
  $this->ExecuteQuery($UpQuery_on_stock, 'update');

  }
  $objSmarty->assign('SuccessMessage1', 'Deleted Successfully');
 }
 }
 /*******************************************************************************************Login User Roles list *********************************************/
  function RolesLists(){
	global $objSmarty;
	 $SelQuery1	= 'SELECT * FROM arka_group_mapping WHERE `group_name` = "'.$_SESSION['USER_GROUP'].'" AND `status` <> 0 ORDER BY sl_no';
	  $RList		= $this->ExecuteQuery($SelQuery1, "select");
		
  if(!empty($RList) && is_array($RList))
   foreach($RList as $key=>$value){
    $RList[$key]['role_id'] = stripslashes($RList[$key]['role_id']);
	$RList[$key]['role_name'] = stripslashes($RList[$key]['role_name']);
	$objSmarty->assign('RList', $RList);
  return $RList;
		} 
	}
/*function list_outward_details($objArray='')  {
		global $objSmarty;
		$SelQuery = 'SELECT * FROM `arka_outward_details` WHERE outward_entry_no="'.$_GET['outward_entry_no'].'" ' ;
		$outward_details_list		= $this->ExecuteQuery($SelQuery, "select");
        $objSmarty->assign('outward_details_list', $outward_details_list);
	}*/	
function list_outward_details()
 { 
 global $objSmarty;
 
$select_query='SELECT * FROM `arka_outward_details` WHERE outward_entry_no = "'.$_REQUEST['outward_entry_no'].'" AND `record_status`=1';

 $execute_query1		= $this->ExecuteQuery($select_query, "select");
 $objSmarty->assign('outward_details_list',$execute_query1);
 
 $row_count=count($execute_query1);
 if(!$row_count==00)
 $objSmarty->assign('hide_criteria','fgj');
 else
 $objSmarty->assign('hide_criteria','');
 
 }
 
 
 function lista_outward_details()
 { 
 global $objSmarty;
 
 $select_query='SELECT * FROM `arka_outward_details` WHERE outward_entry_no = "'.$_REQUEST['outward_entry_no'].'" AND `record_status`=1';
 $execute_query		= $this->ExecuteQuery($select_query, "select");
 $objSmarty->assign('outward_details_list',$execute_query);
 
 $row_count=count($execute_query);
 if(!$row_count==00)
 $objSmarty->assign('hide_criteria','fgj');
 else
 $objSmarty->assign('hide_criteria','');
 
 }
	function deleteOutward($delData){
	 global $objSmarty;
 
    $DelQuery = 'update `arka_outward_master` set `record_status`=0 WHERE `outward_entry_no` ="'.$delData.'"';
	$this->ExecuteQuery($DelQuery, 'delete');
	return true;
  }
  //*********************************************************delete
  /*function DeleteCus($CusIdent){
  global $objSmarty;
  foreach ( $CusIdent as $ConId ){
   if($ConId){
    $DelQuery = 'DELETE FROM `arka_cus_reg_master` WHERE `customer_id` ='.$ConId;
	$this->ExecuteQuery($DelQuery, 'delete');
   }
  }
  $objSmarty->assign('Keyword', $this->Keyword);
  $objSmarty->assign('Operator', $this->Operator);
  $objSmarty->assign('Offset', $this->Offset);
  $objSmarty->assign('PerPage', $this->PerPage);
  return true;
 }
  function DeleteID($deleid){
  global $objSmarty;
  $DelQuery = 'UPDATE `arka_cus_reg_master` set status ="0" WHERE `customer_id`="'.$_REQUEST['deleid'].'"';
 // echo($DelQuery);
  $this->ExecuteQuery($DelQuery, 'delete');
  /* $InsQuery4 = 'INSERT INTO `prime_deleted_records`(`deleted_data`, `deleted_table`, `deleted_by`) VALUES("'.$_REQUEST['deleid'].'","prime_site_reg_master","'.$_SESSION['UserName'].'")';
	 $this->ExecuteQuery($InsQuery4, 'insert');
  $objSmarty->assign('SuccessMessage', 'Deleted Successfully');
  //$this->GetSiteLists();
 }*/
 }
?>


