<?php
#####Class For Adding Content Management ######
class stock_outward extends MysqlFns{
 /* class constructor */
 function stock_outward(){
 $this->LDDisplayPath= $config['SiteGlobalPath']."class.stock_outward.php";
   global $config;
  global $objSmarty;
  $this->MysqlFns();
  $this->Limit = 50;
    $SelQuerys	= 'SELECT max(outward_entry_no) as last FROM `arka_outward_master` WHERE `record_status`="1" Limit 0,1';
   $OwdDetail	= $this->ExecuteQuery($SelQuerys, 'select');
   
   if($OwdDetail[0]['last']!="")
   {
   $OwdDetail[0]['outward_entry_no'] = stripslashes($OwdDetail[0]['last']);
  	$c_id1 = preg_replace("/[^0-9\.]/", '', $OwdDetail[0]['outward_entry_no']);
	$c_id1= $c_id1 + 1;
	$str = str_split($OwdDetail[0]['last'], 3);
	$outward_entry_no = $str[0]. "" .$c_id1;
   }
   else
   {
   $outward_entry_no = "OWD1001";
   }
	$objSmarty->assign('outward_entry_no', $outward_entry_no);
	
	
	  $f1 = "location.txt";
			$uploadpath = $config['QuotePath'];
			//chmod($uploadpath.$f1,"777");
			$myfile = fopen($f1, "w") or die("Unable to open file!");
			$SelQueryz	= 'SELECT DISTINCT location FROM `arka_stock_master` WHERE record_status="1"';
			$LocList	= $this->ExecuteQuery($SelQueryz, 'select');
			//print_r($LocList);exit;
			if(!empty($LocList) && is_array($LocList))
			foreach($LocList as $key=>$value)
			{
			$LocList[$key]['Loc'] = stripslashes($LocList[$key]['location']);
			$names = $names.$LocList[$key]['Loc'].",";
			}
			fwrite($myfile, $names);
			fclose($myfile);

 }
 
 

 
  /* Insert the content for  Static Pages */
 
 public function InsertStockContent($objArray){ 
   global $objSmarty,$_POST; 
//$config['time'] = '%I:%M:%S %p';
//$tim = {$smarty.now|date_format:'%H:%M:%S'}
//echo  $date->format( 'h:i:s A' );
//$objSmarty->assign('Time', $date->format( 'h:i:s A' ));


 //if($this->ChkDupliCust(trim(addslashes($objArray['c_id']))))
/*   if(!$objArray['selection_reg']){
    $objSmarty->assign('ErrorMessage', 'Selection region Field should be selected properly');
	return false;
   }elseif(!$objArray['sites']){
    $objSmarty->assign('ErrorMessage', 'Sites Field should be selected properly');
	return false;
   }else*/
   if(!$objArray['outward_entry_no']){
    $objSmarty->assign('ErrorMessage', 'Outward Entry No should not be blank');
	return false;
   }elseif(!$objArray['to_name']){
    $objSmarty->assign('ErrorMessage', 'To Name should not be blank');
	return false;
   }elseif(!$objArray['to_address']){
    $objSmarty->assign('ErrorMessage', 'To Address field should not be blank');
	return false;
   }elseif(!$objArray['date_of_entry']){
    $objSmarty->assign('ErrorMessage', 'Date Of Entry field should not be blank');
	return false;
   }elseif(!$objArray['purpose']){
    $objSmarty->assign('ErrorMessage', 'Purpose Field should be selected properly');
	return false;
   }elseif(!$objArray['vehicle_no']){
    $objSmarty->assign('ErrorMessage', 'Vehicle No should not be blank');
	return false;
	}elseif(!$objArray['location']){
    $objSmarty->assign('ErrorMessage', 'Location should not be blank');
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
   }
   if($this->ChkDupliCust(trim(addslashes($objArray['outward_entry_no']))))
   {
   $InsQuery = 'INSERT INTO `arka_outward_master`(
						   `sites`,
						   `gst_no`,
						   `outward_entry_no`, 
						    `material_name`,  
							`to_name`, 
							`to_address`,
							 `date_of_entry`,
							 `purpose`,
							`vehicle_no`,
							`record_status`)
					 VALUES("'.trim(addslashes($objArray['sites'])).'",
							"'.trim(addslashes($objArray['gst_no'])).'",
							"'.trim(addslashes($objArray['outward_entry_no'])).'",   
							"'.trim(addslashes($objArray['item_name'])).'",
							"'.trim(addslashes($objArray['to_name'])).'",
							"'.trim(addslashes($objArray['to_address'])).'",
							"'.trim(addslashes($objArray['date_of_entry'])).'",
							"'.trim(addslashes($objArray['purpose'])).'",
							"'.trim(addslashes($objArray['vehicle_no'])).'","1")';
  	 $this->ExecuteQuery($InsQuery, 'insert');
	 	       // header('Location:' .$_SERVER['PHP_SELF'].'?server_response=success&outward_entry_no='.$objArray['outward_entry_no'].'&window_action=true');	
   }
    else
   {
 $update_query_to_outward_master='UPDATE `arka_outward_master` 
					 SET
						  `gst_no` ="'.trim(addslashes($objArray['gst_no'])).'",
						  `material_name` ="'.trim(addslashes($objArray['item_name'])).'",
						  `to_name` ="'.trim(addslashes($objArray['to_name'])).'",
						  `to_address`="'.trim(addslashes($objArray['to_address'])).'",
						  `purpose`="'.trim(addslashes($objArray['purpose'])).'",
						  `vehicle_no` ="'.trim(addslashes($objArray['vehicle_no'])).'" 
 					 WHERE
  `outward_entry_no` ="'.$objArray['outward_entry_no'].'"';
$this->ExecuteQuery($update_query_to_outward_master,"update");   
   }
   $InsQuery2 = 'INSERT INTO `arka_outward_details`(`outward_entry_no`,
						   `item_category_code`,
						   `material_name`,
						   `material_category`,
						   `material_code`,
						   `material_price`,
						   `quantity`,
						   `location`,
						   `remarks`,
						   `record_status`
						  ) 
					 VALUES("'.trim(addslashes($objArray['outward_entry_no'])).'",
						   "'.trim(addslashes($objArray['item_category_code'])).'",
						   "'.trim(addslashes($objArray['item_name'])).'",
						   "'.trim(addslashes($objArray['item_category'])).'",
						   "'.trim(addslashes($objArray['item_code'])).'",
						   "'.trim(addslashes($objArray['materialPrice'])).'",
						   "'.trim(addslashes($objArray['quantity'])).'",
						   "'.trim(addslashes($objArray['location'])).'",
						   "'.trim(addslashes($objArray['remarks'])).'",
						   "1"
  						 )';
  	 $this->ExecuteQuery($InsQuery2, 'insert');	
   
   //$oFCKeditor->Value		= '';
//	$objSmarty->assign('Cc_id',$objArray['c_id']);
//	$objSmarty->assign('c_id', '');
//	$objSmarty->assign('SuccessMessage', 'Outward Details Added Successfully');
//	$url_addtnal_data=base64_encode("Outward Details Added Successfully");
   // header('location:'.$_SERVER['PHP_SELF']."?sm=".$url_addtnal_data."&outward_entry_no=".$objArray['outward_entry_no']);
	
//	$this->list_inward_details();
    
	
	
  	 $SelQuery_on_stock	= 'SELECT * FROM `arka_stock_master` 
						 WHERE
							  `item_category_code` ="'.trim(addslashes($objArray['item_category_code'])).'" && 
							  `material_category` ="'.trim(addslashes($objArray['item_category'])).'" &&
							  `material_name` ="'.trim(addslashes($objArray['item_name'])).'" && 
							  `material_code` ="'.trim(addslashes($objArray['item_code'])).'"&&
							  `unit_price` ="'.trim(addslashes($objArray['materialPrice'])).'"';
	  $RList		= $this->ExecuteQuery($SelQuery_on_stock, "select"); 
   

	if(!empty($RList) && is_array($RList)){
	  if($objArray['quantity'] <= $RList[0]['quantity']){
	   
	  $update_quantity=$RList[0]['quantity']-$objArray['quantity'];  //echo $update_quantity; 
	  $update_total=$update_quantity*$RList[0]['unit_price'];  //echo $update_total;  
 	 $update_query='UPDATE `arka_stock_master`
						 SET
						 		`quantity` ="'.trim(addslashes($update_quantity)).'",
							    `total`="'.trim(addslashes($update_total)).'" 
						WHERE
							   `item_category_code` ="'.$RList[0]['item_category_code'].'" &&
							   `material_category` ="'.$RList[0]['material_category'].'" &&
							   `material_name` ="'.$RList[0]['material_name'].'" && 
							   `material_code` ="'.$RList[0]['material_code'].'" && 
							   `unit_price` ="'.$RList[0]['unit_price'].'"';  
$this->ExecuteQuery($update_query,"update");  
}
else
{
$objSmarty->assign('ErrorMessage', 'Quantity should not be greater than stock quantity!');
return false;

}
}

  // if($this->ChkDupliCust(trim(addslashes($objArray['outward_entry_no']))))
      
  /* else
   {
$update_query_to_outward_master='UPDATE `arka_outward_master` SET `tin_no` ="'.trim(addslashes($objArray['tin_no'])).'",`cst_no`="'.trim(addslashes($objArray['cst_no'])).'",`st_no` ="'.trim(addslashes($objArray['st_no'])).'",`dc_no`="'.trim(addslashes($objArray['dc_no'])).'",`to_name` ="'.trim(addslashes($objArray['to_name'])).'",`to_address`="'.trim(addslashes($objArray['to_address'])).'",`dc_date` ="'.trim(addslashes($objArray['dc_date'])).'",`purpose`="'.trim(addslashes($objArray['purpose'])).'",`vehicle_no` ="'.trim(addslashes($objArray['vehicle_no'])).'" WHERE `outward_entry_no` ="'.$objArray['outward_entry_no'].'"';
$this->ExecuteQuery($update_query_to_outward_master,"update");   
   
   
	
   $InsQuery2 = 'INSERT INTO `arka_outward_details`(`outward_entry_no`,`material_type`, `material_name`, `material_category`,`material_code`,`material_price`,`quantity`,`remarks`,`status`,`region`) VALUES("'.trim(addslashes($objArray['outward_entry_no'])).'","'.trim(addslashes($objArray['material_type'])).'","'.trim(addslashes($objArray['material_name'])).'","'.trim(addslashes($objArray['material_category'])).'","'.trim(addslashes($objArray['material_code'])).'","'.trim(addslashes($objArray['price'])).'","'.trim(addslashes($objArray['quantity'])).'","'.trim(addslashes($objArray['remarks'])).'",1,"'.$_SESSION['Region'].'")';
  	 $this->ExecuteQuery($InsQuery2, 'insert');	


       
	   else
	   {
	   $objSmarty->assign('ErrorMessage', 'Quantity should be less than or equal to stock available');
	   return false;
	   }
	  }*/
	  header('Location:' .$_SERVER['PHP_SELF'].'?server_response=success&outward_entry_no='.$objArray['outward_entry_no'].'&window_action=true');	

   }

  /*Roles list */
 
 function RolesLists(){
	global $objSmarty;
	 $SelQuery1	= 'SELECT role_name FROM arka_group_mapping WHERE `group_name` = "'.$_SESSION['USER_GROUP'].'" AND `status` <> 0 ORDER BY sl_no';
	  $RList		= $this->ExecuteQuery($SelQuery1, "select");
		
  if(!empty($RList) && is_array($RList))
   foreach($RList as $key=>$value){
    $RList[$key]['role_id'] = stripslashes($RList[$key]['role_id']);
	$RList[$key]['role_name'] = stripslashes($RList[$key]['role_name']);
	$objSmarty->assign('RList', $RList);
  return $RList;
		} 
//return true;
	}
 
 

  /* Get the Static Content list */
 function GetStockLists($objArray=''){
  global $objSmarty;

  //$objSmarty->assign('title',$_GET['title']);
  $whereClause = 'WHERE `status`=1 AND `location`="'.$_SESSION['location'].'" ORDER BY outward_entry_no';
  
  if($_POST['search'] == ''){
  			if($_POST['outward_entry_no'])
	   			$whereClause = ' WHERE (`outward_entry_no` like "%'.$_POST['outward_entry_no'].'%") AND `status`=1 AND `select_region`="'.$_SESSION['Region'].'" ORDER BY outward_entry_no';	
	   		elseif($_POST['date'])
	   			$whereClause = ' WHERE (`date_of_entry` like "%'.$_POST['date'].'%") `status`=1 AND `select_region`="'.$_SESSION['Region'].'" ORDER BY outward_entry_no';				
			elseif($_POST['dc_no'])
				$whereClause = ' WHERE (`dc_no` like "%'.$_POST['dc_no'].'%") `status`=1 AND `select_region`="'.$_SESSION['Region'].'" ORDER BY outward_entry_no';
			elseif($_POST['to_name'])
				$whereClause = ' WHERE (`to_name` like "%'.$_POST['to_name'].'%") `status`=1 AND `select_region`="'.$_SESSION['Region'].'" ORDER BY outward_entry_no';
			elseif($_POST['dc_date'])
				$whereClause = ' WHERE (`dc_date` like "%'.$_POST['dc_date'].'%") `status`=1 AND `select_region`="'.$_SESSION['Region'].'" ORDER BY outward_entry_no';
			elseif($_POST['purpose'])
				$whereClause = ' WHERE (`purpose` like "%'.$_POST['purpose'].'%") `status`=1 AND `select_region`="'.$_SESSION['Region'].'" ORDER BY outward_entry_no';
															
				
/*   $objSmarty->assign('customer_id',$_POST['customer_id']);
   $objSmarty->assign('customer_name',$_POST['customer_name']);
   $objSmarty->assign('customer_type',$_POST['customer_type']);
   $objSmarty->assign('category',$_POST['category']);
   $objSmarty->assign('address1',$_POST['address1']);
   $objSmarty->assign('city',$_POST['city']);
   $objSmarty->assign('state',$_POST['state']);
   $objSmarty->assign('contact_person',$_POST['contact_person']);
   $objSmarty->assign('mobile',$_POST['mobile']);
   $objSmarty->assign('email',$_POST['email']);
   $objSmarty->assign('status',$_POST['status']);
   $objSmarty->assign('account_manager',$_POST['account_manager']);
   $objSmarty->assign('delivery_manager',$_POST['delivery_manager']);*/
   
  }
  $SelQuery		= 'SELECT * FROM `arka_outward_master` WHERE record_status="1"';
  
  $listing_split = new MsplitPageResults($SelQuery, $this->Limit);
  if ( ($listing_split->number_of_rows > 0) )  {
   $objSmarty->assign('LinkPage',$listing_split->display_count(TEXT_DISPLAY_NUMBER_OF_RESULT));
   $objSmarty->assign('PerPageNavigation',TEXT_RESULT_PAGE1 . ' ' . $listing_split->display_links_submit($this->Limit, get_all_get_params(array('page', 'info', 'x', 'y')))); 
   $PageList = $this->ExecuteQuery($listing_split->sql_query, 'selectassoc');
   
  }
/*  if(!empty($PageList) && is_array($PageList))

   foreach($PageList as $key=>$value){
    $PageList[$key]['ID'] = stripslashes($PageList[$key]['customer_id']);
	$PageList[$key]['Cname'] = stripslashes($PageList[$key]['customer_name']);
	$PageList[$key]['Ctype'] = stripslashes($PageList[$key]['customer_type']);
	$PageList[$key]['Ccategory'] = stripslashes($PageList[$key]['category']);
	$PageList[$key]['Cadd'] = stripslashes($PageList[$key]['address1']);
	$PageList[$key]['Ccity'] = stripslashes($PageList[$key]['city']);
	$PageList[$key]['Cstate'] = stripslashes($PageList[$key]['state']);
	$PageList[$key]['Ccontact'] = stripslashes($PageList[$key]['contact_person']);
	$PageList[$key]['Cmobile'] = stripslashes($PageList[$key]['mobile']);
	$PageList[$key]['Cemail'] = stripslashes($PageList[$key]['email']);
	$PageList[$key]['Cstatus'] = stripslashes($PageList[$key]['status']);
	$PageList[$key]['Caccount'] = stripslashes($PageList[$key]['account_manager']);
	$PageList[$key]['Cdelivery'] = stripslashes($PageList[$key]['delivery_manager']);
	
	 if($PageList[$key]['Cstatus'] == 1){
	 $PageList[$key]['Cstatus'] ='Active';
	}
	elseif($PageList[$key]['Cstatus'] == 0){
	 $PageList[$key]['Cstatus'] ='InActive';
	}
   }*/

  $objSmarty->assign('i', $listing_split->i);
  $objSmarty->assign('PageList', $PageList);
  return $PageList;
 
}
 
  /************************************Vendor Details/********************************************/

function AjaxGetLocationDetails()
 {    
global $objSmarty;

		 $SelQuery = 'SELECT * FROM `arka_stock_master` WHERE location ="'.$_GET['location'].'" ' ; 
		 $LDLocList		= $this->ExecuteQuery($SelQuery, "select");
		
		foreach($LDLocList as $keys=>$value)    
		{
		
     //  echo   $LDLocList[$keys]["material_code"]."_";
	     $htsc_array =$htsc_array.' 
		  '.'<option value="'.$LDLocList[$keys]["material_code"].'">'.$LDLocList[$keys]["material_code"].'</option>';
		}
 '<option value="0" selected="selected">--Select--</option>';
echo  $htsc_array;
}
  /************************************Vendor Details/********************************************/

function AjaxGetMaterialDetails()
 {    
global $objSmarty;

		 $SelQuery = 'SELECT * FROM `arka_stock_master` WHERE material_code ="'.$_GET['item_code'].'" ' ; 
		 $LDLocList		= $this->ExecuteQuery($SelQuery, "select");
		
		foreach($LDLocList as $keys=>$value)    
		{  $htsc_array =$htsc_array.' 
		  '.'<option value="'.$LDLocList[$keys]["material_code"].'">'.$LDLocList[$keys]["material_code"].'</option>';
       echo   $LDLocList[$keys]["material_name"]."_".$LDLocList[$keys]["material_category"]."_".$LDLocList[$keys]["item_category_code"]."_".$LDLocList[$keys]["unit_price"]."_".$LDLocList[$keys]["quantity"]."_";
	   
		}
echo  $htsc_array;
}
 
 
 /* Get the Static Content list */
 	function GetStockOutwardView($objArray='')  {
		global $objSmarty;
		$objSmarty->assign('c_id',$_GET['outward_entry_no']);
		$SelQuery = 'SELECT * FROM `arka_outward_master` WHERE outward_entry_no ="'.$_GET['outward_entry_no'].'"' ;
		//echo $SelQuery;
		$LDList		= $this->ExecuteQuery($SelQuery, "select");
		$total_records = count($LDList);
		$record_per_page = $this->Limit;
		
		$objSmarty->assign("TList1",$_GET['cust_id']);
		/*$LDList[0]['title'] 		= stripslashes($LDList[0]['title']);
		$LDList[1]['txttitle'] 		= stripslashes($LDList[1]['txttitle']);
		$LDList[2]['image'] 		= stripslashes($LDList[2]['image']);*/
		 if(!empty($LDList) && is_array($LDList))
		{
			$objSmarty->assign("LDList2",$LDList);
			$objSmarty->assign("LDDisp", $this->LDDisplayPath);
			return $LDList2;
		}
		else{
			return false;
		}
		$objPage->set_page_data($_SERVER['PHP_SELF'],$total_records,$record_per_page,$scroll,true,true,true);
		$listing_split = new MsplitPageResults($SelQuery, $this->Limit);
		
		if ( ($listing_split->number_of_rows > 0) )  
		{
			$objSmarty->assign('LinkPage',$listing_split->display_count(TEXT_DISPLAY_NUMBER_OF_RESULT));
			$objSmarty->assign('PerPageNavigation',TEXT_RESULT_PAGE1 . ' ' . $listing_split->display_links($this->Limit, get_all_get_params(array('page', 'info', 'x', 'y')))); 
			$PageList = $this->ExecuteQuery($listing_split->SelQuery, 'selectassoc');
		}
		if(!empty($PageList) && is_array($PageList))
			foreach($PageList as $key=>$value)
			{
				$PageList[$key]['Cid'] = stripslashes($PageList[$key]['customer_id']);
				$PageList[$key]['Cname'] = stripslashes($PageList[$key]['customer_name']);
				$objSmarty->assign('Cid',$PageList[$key]['customer_id']);
				$objSmarty->assign('Cname',$PageList[$key]['customer_name']);
			}		
			$objSmarty->assign('i', $listing_split->i);
			$objSmarty->assign('PageList', $PageList);
			
			return $PageList;
	}	
 
  function GetSLists($objArray='')  {
  global $objSmarty;

  //$objSmarty->assign('title',$_GET['title']);
  $whereClause = ' order by material_name';
   if($_POST['search'] == ''){
  			if($_POST['item_name'])
	   			$whereClause = ' WHERE (`material_name` like "%'.$_POST['item_name'].'%")';
   			elseif($_POST['item_code'])
	   			$whereClause = ' WHERE (`material_code` like "%'.$_POST['item_code'].'%")';
			elseif($_POST['item_category'])
	   			$whereClause = ' WHERE (`material_category` like "%'.$_POST['item_category'].'%")';
			elseif($_POST['item_category_code'])
	   			$whereClause = ' WHERE (`item_category_code` like "%'.$_POST['item_category_code'].'%")';
			elseif($_POST['quantity'])
	   			$whereClause = ' WHERE (`quantity` like "%'.$_POST['availableQuantity'].'%")';
			elseif($_POST['unit_price'])
	   			$whereClause = ' WHERE (`unit_price` like "%'.$_POST['materialPrice'].'%")';			
			$objSmarty->assign('MName',$_POST['material_name']);
     
  }
   $SelQuery		= 'SELECT * FROM `arka_stock_master` '.$whereClause;
  $listing_split = new MsplitPageResults($SelQuery, $this->Limit);
  if ( ($listing_split->number_of_rows > 0) )  {
   $objSmarty->assign('LinkPage',$listing_split->display_count(TEXT_DISPLAY_NUMBER_OF_RESULT));
   $objSmarty->assign('PerPageNavigation',TEXT_RESULT_PAGE1 . ' ' . $listing_split->display_links($this->Limit, get_all_get_params(array('page', 'info', 'x', 'y')))); 
   $PageList2 = $this->ExecuteQuery($listing_split->sql_query, 'selectassoc');
  }
 /* if(!empty($PageList) && is_array($PageList))

   foreach($PageList as $key=>$value){
    $PageList[$key]['CName'] = stripslashes($PageList[$key]['State_Name']);
   }
*/
  $objSmarty->assign('i', $listing_split->i);
  $objSmarty->assign('PageList2', $PageList2);
  return $PageList2;
 
}
 
  /* Edit the Static Page */
 function EditStockInward($objArray){
  global $objSmarty,$_REQUEST;


   if(!empty($objArray['ConId']) && is_array($objArray['ConId']))
   {
   
    
   		foreach($objArray['ConId'] as $key=> $value)
		{

   if(!$objArray[$value]['material_type_edit']){
    $objSmarty->assign('ErrorMessage_on_edit', 'Material Type should be selected properly');
	return false;
   }elseif(!$objArray[$value]['material_category_edit']){
    $objSmarty->assign('ErrorMessage_on_edit', 'Material Category should be selected properly');
	return false;
   }elseif(!$objArray[$value]['material_code_edit']){
    $objSmarty->assign('ErrorMessage_on_edit', 'Material Code should not be blank');
	return false;
   }elseif(!$objArray[$value]['material_name_edit']){
    $objSmarty->assign('ErrorMessage_on_edit', 'Material Name should not be blank');
	return false;
   }elseif(!$objArray[$value]['quantity_edit']){
    $objSmarty->assign('ErrorMessage_on_edit', 'Quantity should not be blank');
	return false;
   }
		
	
	
	
	   	 $SelQuery_on_stock	= 'SELECT * FROM `arka_stock_master` WHERE `material_type` ="'.trim(addslashes($objArray[$value]['material_type_edit'])).'" && `material_category` ="'.trim(addslashes($objArray[$value]['material_category_edit'])).'" &&  `material_name` ="'.trim(addslashes($objArray[$value]['material_name_edit'])).'" && `material_code` ="'.trim(addslashes($objArray[$value]['material_code_edit'])).'"';
	  $RList		= $this->ExecuteQuery($SelQuery_on_stock, "select");
		
    if(!is_null($RList[0]['quantity']))
	{
	
	if($RList[0]['quantity']>$objArray[$value]['quantity_edit'])
	{
	
	$SelQuery_on_outwd_dtl	= 'SELECT * FROM `arka_outward_details` WHERE `sl_no` ="'.trim(addslashes($value)).'" ';
	  $outwd_dtl_List		= $this->ExecuteQuery($SelQuery_on_outwd_dtl, "select");
	
	if($objArray[$value]['quantity_edit'] > $outwd_dtl_List[0]['quantity'])
	  {
	  $difference=$outwd_dtl_List[0]['quantity']-$objArray[$value]['quantity_edit'];
	  $update_quantity=$RList[0]['quantity']-$difference;
	  $update_total=$update_quantity*$RList[0]['unit_price'];
$update_query='UPDATE `arka_stock_master` SET `quantity` ="'.trim(addslashes($update_quantity)).'",`total`="'.trim(addslashes($update_total)).'" WHERE `material_type` ="'.$RList[0]['material_type'].'" && `material_category` ="'.$RList[0]['material_category'].'"';
$this->ExecuteQuery($update_query,"update");
	  
  
   	$UpQuery = 'UPDATE `arka_outward_details` SET `material_type` = "'.$objArray[$value]['material_type_edit'].'", `material_category` = "'.$objArray[$value]['material_category_edit'].'",`material_code` = "'.$objArray[$value]['material_code_edit'].'", `material_name` = "'.$objArray[$value]['material_name_edit'].'",  `quantity` = "'.$objArray[$value]['quantity_edit'].'" WHERE `sl_no` ="'.$value.'"';
	$this->ExecuteQuery($UpQuery, 'update');
	$objSmarty->assign('SuccessMessage_on_edit', 'Inward Details Updated Successfully');
	$this->list_inward_details();
	
	}
   elseif($objArray[$value]['quantity_edit'] < $outwd_dtl_List[0]['quantity'])
    {
	  $difference=$outwd_dtl_List[0]['quantity']-$objArray[$value]['quantity_edit'];
	  $update_quantity=$RList[0]['quantity']+$difference;
	  $update_total=$update_quantity*$RList[0]['unit_price'];
$update_query='UPDATE `arka_stock_master` SET `quantity` ="'.trim(addslashes($update_quantity)).'",`total`="'.trim(addslashes($update_total)).'" WHERE `material_type` ="'.$RList[0]['material_type'].'" && `material_category` ="'.$RList[0]['material_category'].'"';
$this->ExecuteQuery($update_query,"update");
	  
  
   	$UpQuery = 'UPDATE `arka_outward_details` SET `material_type` = "'.$objArray[$value]['material_type_edit'].'", `material_category` = "'.$objArray[$value]['material_category_edit'].'",`material_code` = "'.$objArray[$value]['material_code_edit'].'", `material_name` = "'.$objArray[$value]['material_name_edit'].'",  `quantity` = "'.$objArray[$value]['quantity_edit'].'" WHERE `sl_no` ="'.$value.'"';
	$this->ExecuteQuery($UpQuery, 'update');
	$objSmarty->assign('SuccessMessage_on_edit', 'Inward Details Updated Successfully');
	$this->list_inward_details();
	
	
	}	
	
	}
	else
	{
	$objSmarty->assign('ErrorMessage_on_edit', 'Quantity should be less than the stock');
	$this->list_inward_details();
	return false;
	}
	
	}
	
	
	
	   	$UpQuery = 'UPDATE `arka_outward_details` SET `material_type` = "'.$objArray[$value]['material_type_edit'].'", `material_category` = "'.$objArray[$value]['material_category_edit'].'",`material_code` = "'.$objArray[$value]['material_code_edit'].'", `material_name` = "'.$objArray[$value]['material_name_edit'].'",  `quantity` = "'.$objArray[$value]['quantity_edit'].'" WHERE `sl_no` ="'.$value.'"';
	$this->ExecuteQuery($UpQuery, 'update');
	$objSmarty->assign('SuccessMessage_on_edit', 'Inward Details Updated Successfully');
	$this->list_inward_details();
	return true;
	
		
   }
   
	
  }
  else
  $objSmarty->assign('ErrorMessage_on_edit', 'Please select a check box to update');
		

 }
 
 
 	 
 
 
 function list_inward_details()
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
 
 
 
 
   function ChkDupliCust($c_id){
  global $objSmarty;
  if(!empty($c_id))
 // $WhereClause	= ' AND `id` != '.$Ident;
  $SelQuery2		= 'SELECT * FROM `arka_outward_master` WHERE `outward_entry_no` = "'.$c_id.'" AND record_status="1" Limit 0,1';
  $CusDetail		= $this->ExecuteQuery($SelQuery2, 'select');
  if(!empty($CusDetail) && is_array($CusDetail))
   return false;
  else
   return true;
 }
 
 
 
 
  function delete_inward_details($delete_array)
 {

 global $objSmarty;
 $SelQuery_on_details	= 'SELECT item_category_code,material_category,material_code,material_name,material_price,quantity FROM `arka_outward_details` WHERE `sl_no` = "'.$_GET['deleid'].'" ';
 $RList		= $this->ExecuteQuery($SelQuery_on_details, "select");
 $SelQuery_on_stock	= 'SELECT item_category_code,material_category,material_code,material_name,unit_price,quantity,region FROM `arka_stock_master` WHERE item_category_code="'.$RList[0]['item_category_code'].'" AND material_category="'.$RList[0]['item_category'].'" AND material_code="'.$RList[0]['item_code'].'" AND material_name="'.$RList[0]['item_name'].'" AND unit_price="'.$RList[0]['material_price'].'"';
 $RList2		= $this->ExecuteQuery($SelQuery_on_stock, "select");
$update_quantity=$RList2[0]['quantity']+$RList[0]['quantity'];
$update_total=$update_quantity*$RList2[0]['unit_price'];

$update_query='UPDATE `arka_stock_master` SET `quantity` ="'.trim(addslashes($update_quantity)).'",`total`="'.trim(addslashes($update_total)).'" WHERE `item_category_code` ="'.$RList[0]['item_category_code'].'" && `material_category` ="'.$RList[0]['item_category'].'" && `material_name` ="'.$RList[0]['item_name'].'" && `material_code` ="'.$RList[0]['item_code'].'" && `unit_price` ="'.$RList2[0]['unit_price'].'"';
$this->ExecuteQuery($update_query,"update");

  $del_query='UPDATE `arka_outward_details` SET `status`=0 WHERE `sl_no`="'.$_GET['deleid'].'"';
 $query_exec=$this->ExecuteQuery($del_query,'delete');
 // $objSmarty->assign('SuccessMessage_on_delete', 'Outward Details Deleted Successfully');
    $url_addtnal_data=base64_encode("Outward Details Deleted Successfully");
    header('location:'.$_SERVER['PHP_SELF']."?sm_on_del=".$url_addtnal_data."&outward_entry_no=".$delete_array['outward_entry_no']);
 return true;
 
 }
 
 
 
 function GetInwardDetailsView($objArray='') 
  {
		global $objSmarty;
		$objSmarty->assign('c_id',$_GET['outward_entry_id']);
		$SelQuery = 'SELECT * FROM `arka_outward_details` WHERE outward_entry_no ="'.$_GET['outward_entry_id'].'"' ;
		//echo $SelQuery;
		$LDList		= $this->ExecuteQuery($SelQuery, "select");
		$total_records = count($LDList);
		$record_per_page = $this->Limit;
		
		$objSmarty->assign("TList1",$_GET['cust_id']);
		/*$LDList[0]['title'] 		= stripslashes($LDList[0]['title']);
		$LDList[1]['txttitle'] 		= stripslashes($LDList[1]['txttitle']);
		$LDList[2]['image'] 		= stripslashes($LDList[2]['image']);*/
		 if(!empty($LDList) && is_array($LDList))
		{
			$objSmarty->assign("LDList_details_tbl",$LDList);
			$objSmarty->assign("LDDisp", $this->LDDisplayPath);
			return $LDList2;
		}
		else{
			return false;
		}
		$objPage->set_page_data($_SERVER['PHP_SELF'],$total_records,$record_per_page,$scroll,true,true,true);
		$listing_split = new MsplitPageResults($SelQuery, $this->Limit);
		
		if ( ($listing_split->number_of_rows > 0) )  
		{
			$objSmarty->assign('LinkPage',$listing_split->display_count(TEXT_DISPLAY_NUMBER_OF_RESULT));
			$objSmarty->assign('PerPageNavigation',TEXT_RESULT_PAGE1 . ' ' . $listing_split->display_links($this->Limit, get_all_get_params(array('page', 'info', 'x', 'y')))); 
			$PageList = $this->ExecuteQuery($listing_split->SelQuery, 'selectassoc');
		}
		if(!empty($PageList) && is_array($PageList))
			foreach($PageList as $key=>$value)
			{
				$PageList[$key]['Cid'] = stripslashes($PageList[$key]['customer_id']);
				$PageList[$key]['Cname'] = stripslashes($PageList[$key]['customer_name']);
				$objSmarty->assign('Cid',$PageList[$key]['customer_id']);
				$objSmarty->assign('Cname',$PageList[$key]['customer_name']);
			}		
			$objSmarty->assign('i', $listing_split->i);
			$objSmarty->assign('PageList', $PageList);
			echo $PageList;
			return $PageList;
	}	
 
 
   /* Delete the Static Page 
 function DeleteID($deleid){
  global $objSmarty;
  $DelQuery = 'UPDATE `arka_outward_master` set status ="0" WHERE `outward_entry_no`="'.$_REQUEST['deleid'].'"';
 // echo($DelQuery);
  $this->ExecuteQuery($DelQuery, 'delete');
   $InsQuery4 = 'INSERT INTO `arka_deleted_records`(`deleted_data`, `deleted_table`, `deleted_by`) VALUES("'.$_REQUEST['deleid'].'","arka_outward_master","'.$_SESSION['UserName'].'")';
	 $this->ExecuteQuery($InsQuery4, 'insert');
    $url_addtnal_data=base64_encode("Outward Details Deleted Successfully");
    header('location:'.$_SERVER['PHP_SELF']."?sm=".$url_addtnal_data);
  
 }*/
 
 
 
  /* Delete the Static Page */
 function DeleteID($deleid){
  global $objSmarty;
  
  $SelQuery_on_outward_detail		= 'SELECT * FROM `arka_outward_details` WHERE `outward_entry_no` = "'.$deleid.'" AND `status`=1';
  $Detail_on_outward_detail		= $this->ExecuteQuery($SelQuery_on_outward_detail, 'select');
// print_r($Detail_on_outward_detail);

 // print_r($Detail_on_outward_detail); 
 foreach($Detail_on_outward_detail as $key=>$value)
  {
     $SelQuery_on_stock		= 'SELECT * FROM `arka_stock_master` WHERE `region` = "'.$Detail_on_outward_detail[$key]['region'].'" && `material_type` = "'.$Detail_on_outward_detail[$key]['material_type'].'"&& `material_category` = "'.$Detail_on_outward_detail[$key]['material_category'].'"&& `material_name` = "'.$Detail_on_outward_detail[$key]['material_name'].'"&& `material_code` = "'.$Detail_on_outward_detail[$key]['material_code'].'"&& `unit_price` = "'.$Detail_on_outward_detail[$key]['material_price'].'"';
  $Detail_on_stock		= $this->ExecuteQuery($SelQuery_on_stock, 'select'); 
 // print_r($Detail_on_stock);
  if(isset($Detail_on_stock[0]['material_name']))
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
     $SelQuery_on_stock		= 'SELECT * FROM `arka_stock_master` WHERE `region` = "'.$Detail_on_outward_detail[$key]['region'].'" && `material_type` = "'.$Detail_on_outward_detail[$key]['material_type'].'"&& `material_category` = "'.$Detail_on_outward_detail[$key]['material_category'].'"&& `material_name` = "'.$Detail_on_outward_detail[$key]['material_name'].'"&& `material_code` = "'.$Detail_on_outward_detail[$key]['material_code'].'"&& `unit_price` = "'.$Detail_on_outward_detail[$key]['material_price'].'"';
  $Detail_on_stock		= $this->ExecuteQuery($SelQuery_on_stock, 'select');   
  
  $update_quantity=$Detail_on_stock[0]['quantity']+$Detail_on_outward_detail[$key]['quantity'];
  $update_total=$update_quantity*$Detail_on_stock[0]['unit_price'];
   $UpQuery_on_stock = 'UPDATE `arka_stock_master` set `quantity`="'.$update_quantity.'",`total`="'.$update_total.'"  WHERE `region` = "'.$Detail_on_outward_detail[$key]['region'].'" && `material_type` = "'.$Detail_on_outward_detail[$key]['material_type'].'"&& `material_category` = "'.$Detail_on_outward_detail[$key]['material_category'].'"&& `material_name` = "'.$Detail_on_outward_detail[$key]['material_name'].'"&& `material_code` = "'.$Detail_on_outward_detail[$key]['material_code'].'"&& `unit_price` = "'.$Detail_on_outward_detail[$key]['material_price'].'"';
  $this->ExecuteQuery($UpQuery_on_stock, 'update');

  }
  $DelQuery = 'UPDATE `arka_outward_master` set status ="0" WHERE `outward_entry_no`="'.$_REQUEST['deleid'].'"';
  $this->ExecuteQuery($DelQuery, 'update');
    $DelQuery2 = 'UPDATE `arka_outward_details` set status ="0" WHERE `outward_entry_no`="'.$_REQUEST['deleid'].'"';
  $this->ExecuteQuery($DelQuery2, 'update');

  $current_date=date("Y-m-d");
   $InsQuery4 = 'INSERT INTO `arka_deleted_records`(`deleted_data`, `deleted_table`, `deleted_by`,`deleted_date`) VALUES("'.$_REQUEST['deleid'].'","arka_outward_master","'.$_SESSION['UserName'].'","'.$current_date.'")';
  
	 $this->ExecuteQuery($InsQuery4, 'insert');
	 $objSmarty->assign('SuccessMessage', 'Outward Details Deleted Successfully');
  }
    $url_addtnal_data=base64_encode("Inward Details Deleted Successfully");
   header('location:'.$_SERVER['PHP_SELF']."?sm=".$url_addtnal_data);
 }
 
 }
 ?>
