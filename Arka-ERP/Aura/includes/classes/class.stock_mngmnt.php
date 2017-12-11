<?php
#####Class For Adding Content Management ######
class stock_management extends MysqlFns{
 
 /* class constructor */
 function stock_management(){
 $this->LDDisplayPath= $config['SiteGlobalPath']."class.StockInward.php";
  global $config;
  global $objSmarty;
  $this->MysqlFns();
  $this->Limit = 15;
   $this->Keyword = '';
  $this->Operator = '';
  $this->PerPage = '';

 }
 
 
  /* Insert the content for  Static Pages */
 
 function InsertStockContent($objArray){
   global $objSmarty,$_POST;
   
//$config['time'] = '%I:%M:%S %p';
//$tim = {$smarty.now|date_format:'%H:%M:%S'}
//echo  $date->format( 'h:i:s A' );
//$objSmarty->assign('Time', $date->format( 'h:i:s A' ));

 //if($this->ChkDupliCust(trim(addslashes($objArray['c_id'])))){
	      if(!$objArray['material_type']){
    $objSmarty->assign('ErrorMessage', 'Material Type should be selected properly');
	return false;
   }elseif(!$objArray['material_category']){
    $objSmarty->assign('ErrorMessage', 'Material Category should be selected properly');
	return false;
   }elseif(!$objArray['material_name']){
    $objSmarty->assign('ErrorMessage', 'Material Name should not be blank');
	return false;
   }elseif(!$objArray['price']){
    $objSmarty->assign('ErrorMessage', 'Price should not be blank');
	return false;
   }/*elseif(!preg_match("/^[0-9]{1,}$/",$objArray['price']))
   {
   $objSmarty->assign('ErrorMessage','Please Verify the Price Once');
   return false;
   }*/elseif(!$objArray['material_code']){
    $objSmarty->assign('ErrorMessage', 'Material Code should not be blank');
	return false;
   }elseif(!$objArray['quantity']){
    $objSmarty->assign('ErrorMessage', 'Quantity should not be blank');
	return false;
   }elseif(!preg_match("/^[0-9]{1,}$/",$objArray['quantity'])){
   $objSmarty->assign('ErrorMessage','Quantity Should Be Numbers');
   return false;
   }
	

   if($this->ChkDupliCust(trim(addslashes($objArray['inward_entry_id']))))
   {
   
   if(!$objArray['inward_entry_id']){
    $objSmarty->assign('ErrorMessage', 'Inward Entry Id should not be blank');
	return false;
   }elseif(!$objArray['supplier_name']){
    $objSmarty->assign('ErrorMessage', 'Supplier Name should not be blank');
	return false;
   }elseif(!$objArray['dc_no']){
    $objSmarty->assign('ErrorMessage', 'DC No should not be blank');
	return false;
   }elseif(!$objArray['invoice_no']){
    $objSmarty->assign('ErrorMessage', 'Invoice No should not be blank');
	return false;
   }elseif(!$objArray['date_of_entry']){
    $objSmarty->assign('ErrorMessage', 'Date Of Entry should not be blank');
	return false;
   }elseif(!$objArray['supplier_code']){
    $objSmarty->assign('ErrorMessage', 'Supplier Code should not be blank');
	return false;
   }elseif(!$objArray['dc_date']){
    $objSmarty->assign('ErrorMessage', 'DC Date should not be blank');
	return false;
   }elseif(!$objArray['invoice_date']){
    $objSmarty->assign('ErrorMessage', 'Invoice Date should not be blank');
	return false;
   }elseif(!$objArray['frieght_charges']){
    $objSmarty->assign('ErrorMessage', 'Frieght charges should not be blank');
	return false;
   }elseif(!$objArray['total']){
    $objSmarty->assign('ErrorMessage', 'Total should not be blank');
	return false;
   }
   
   
   
   $InsQuery = 'INSERT INTO `arka_inward_master`(`inward_entry_id`, `dc_no`, `dc_date`, `date_of_entry`, `invoice_no`, `invoice_date`,`supplier_name`,`supplier_code`,`invoice_amount`,`tax`,`frieght_charges`,`total`) VALUES("'.trim(addslashes($objArray['inward_entry_id'])).'","'.trim(addslashes($objArray['dc_no'])).'","'.trim(addslashes($objArray['dc_date'])).'","'.trim(addslashes($objArray['date_of_entry'])).'","'.trim(addslashes($objArray['invoice_no'])).'","'.trim(addslashes($objArray['invoice_date'])).'","'.trim(addslashes($objArray['supplier_name'])).'","'.trim(addslashes($objArray['supplier_code'])).'","'.trim(addslashes($objArray['invoice_amount'])).'","'.trim(addslashes($objArray['tax'])).'","'.trim(addslashes($objArray['frieght_charges'])).'","'.trim(addslashes($objArray['total'])).'")';
  	 $this->ExecuteQuery($InsQuery, 'insert');
	 $objSmarty->assign('hide_master_details',$objArray['total']);
	}
	

   $InsQuery2 = 'INSERT INTO `arka_inward_details`(`material_type`, `material_category`, `inward_entry_id`, `material_name`, `material_specification`, `price`, `warranty`, `created_by`, `material_code`,`quantity`,`warranty_period`,`other_info`) VALUES("'.trim(addslashes($objArray['material_type'])).'","'.trim(addslashes($objArray['material_category'])).'","'.trim(addslashes($objArray['inward_entry_id'])).'","'.trim(addslashes($objArray['material_name'])).'","'.trim(addslashes($objArray['material_specification'])).'","'.trim(addslashes($objArray['price'])).'","'.trim(addslashes($objArray['warranty'])).'","'.trim(addslashes($objArray['created_by'])).'","'.trim(addslashes($objArray['material_code'])).'","'.trim(addslashes($objArray['quantity'])).'","'.trim(addslashes($objArray['warranty_period'])).'","'.trim(addslashes($objArray['other_info'])).'")';
  	 $this->ExecuteQuery($InsQuery2, 'insert');	
	
	 $SelQuery_on_stock	= 'SELECT * FROM `arka_stock_master` WHERE `material_type` ="'.trim(addslashes($objArray['material_type'])).'" && `material_category` ="'.trim(addslashes($objArray['material_category'])).'" &&  `material_name` ="'.trim(addslashes($objArray['material_name'])).'" && `material_code` ="'.trim(addslashes($objArray['material_code'])).'"';
	  $RList		= $this->ExecuteQuery($SelQuery_on_stock, "select");

if(!is_null($RList[0]['material_code']))
	  {
	  
	  $update_quantity=$objArray['quantity']+$RList[0]['quantity'];
	  $update_total=$objArray['total']+$RList[0]['total'];
$update_query='UPDATE `arka_stock_master` SET `quantity` ="'.trim(addslashes($update_quantity)).'",`total`="'.trim(addslashes($update_total)).'" WHERE `material_type` ="'.$RList[0]['material_type'].'" && `material_category` ="'.$RList[0]['material_category'].'"';
$this->ExecuteQuery($update_query,"update");
	  }
	else
	{
  $InsQuery_to_stock_master = 'INSERT INTO `arka_stock_master`(`material_type`, `material_category`, `material_code`, `material_name`, `quantity`, `unit_price`,`total`) VALUES("'.trim(addslashes($objArray['material_type'])).'","'.trim(addslashes($objArray['material_category'])).'","'.trim(addslashes($objArray['material_code'])).'","'.trim(addslashes($objArray['material_name'])).'","'.trim(addslashes($objArray['quantity'])).'","'.trim(addslashes($objArray['price'])).'","'.trim(addslashes($objArray['total'])).'")';
  	 $this->ExecuteQuery($InsQuery_to_stock_master, 'insert');
	}

	 
	$oFCKeditor->Value		= '';
	$objSmarty->assign('Cc_id',$objArray['c_id']);
	$objSmarty->assign('c_id', '');
	$objSmarty->assign('SuccessMessage', 'Inward Master Added Successfully');
	$this->GetInwardDetailsView();
	
	
	header ('HTTP/1.1 303 See Other');
	return true;
	
	//PrePopulate($objArray, 'CusDetail');
	  
 // }
 }
 
 
  /*Roles list */
 
 function RolesLists(){
	global $objSmarty;
	 $SelQuery1	= 'SELECT role_name FROM arka_user_group_mapping WHERE `group_name` = "'.$_SESSION['USER_GROUP'].'" AND `status` <> 0 ORDER BY sl_no';
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
 	function GetStockInwardView($objArray='')  {
		global $objSmarty;
		$objSmarty->assign('c_id',$_GET['stck_id']);
		$SelQuery = 'SELECT * FROM `arka_inward_master` WHERE inward_entry_id ="'.$_GET['stck_id'].'"' ;
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
			echo $PageList;
			return $PageList;
	}	
 
 
 
  /* Edit the Static Page */
 function EditStockInward($objArray){
  global $objSmarty,$_REQUEST;


   if(!empty($objArray['ConId']) && is_array($objArray['ConId']))
   {
   
    
   		foreach($objArray['ConId'] as $value)
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
   }elseif(!$objArray[$value]['material_specification_edit']){
    $objSmarty->assign('ErrorMessage_on_edit', 'Material Specification should not be blank');
	return false;
   }elseif(!$objArray[$value]['material_name_edit']){
    $objSmarty->assign('ErrorMessage_on_edit', 'Material Name should not be blank');
	return false;
   }elseif(!$objArray[$value]['price_edit']){
    $objSmarty->assign('ErrorMessage_on_edit', 'Price should not be blank');
	return false;
   }elseif(!$objArray[$value]['quantity_edit']){
    $objSmarty->assign('ErrorMessage_on_edit', 'Quantity should not be blank');
	return false;
   }
		
		

   	$UpQuery = 'UPDATE `arka_inward_details` SET `material_type` = "'.$objArray[$value]['material_type_edit'].'", `material_category` = "'.$objArray[$value]['material_category_edit'].'",`material_code` = "'.$objArray[$value]['material_code_edit'].'", `material_specification` = "'.$objArray[$value]['material_specification_edit'].'", `material_name` = "'.$objArray[$value]['material_name_edit'].'", `price` = "'.$objArray[$value]['price_edit'].'", `quantity` = "'.$objArray[$value]['quantity_edit'].'" WHERE `sl_no` ="'.$value.'"';
	$this->ExecuteQuery($UpQuery, 'update');
	$objSmarty->assign('SuccessMessage_on_edit', 'Inward Details Updated Successfully');
	$this->GetInwardDetailsView();
	return true;
		
		
   }
   
	
  }
  else
  $objSmarty->assign('ErrorMessage_on_edit', 'Please select a check box to update');
		

 }
 
 
 
  /* Get the Static Content list */
 function GetStockLists($objArray=''){
  global $objSmarty;

  //$objSmarty->assign('title',$_GET['title']);
// $whereClause = 'WHERE record_status="1"'; 
  
 									
				
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
   
 
  $SelQuery		= 'SELECT * FROM `arka_stock_master` WHERE record_status="1"  ORDER by sl_no ASC  ';
 
   $StockList12		= $this->ExecuteQuery($SelQuery, "select");
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

  $objSmarty->assign('StockList12', $StockList12);
  return $StockList12;
 
}
 
  function GetStockDetails($objArray=''){
  global $objSmarty;   
  $SelQuery		= 'SELECT * FROM `arka_stock_master` WHERE record_status="1" AND inward_entry_id ="'.$_GET['inward_entry_id'].'"';  
   $StockList13		= $this->ExecuteQuery($SelQuery, "select");
  $objSmarty->assign('StockList13', $StockList13);
  return $StockList13;
}

 
function GetInwardDetailsView($objArray='') 
  {
		global $objSmarty;
		$objSmarty->assign('c_id',$_GET['stck_id']);
		$SelQuery = 'SELECT * FROM `arka_inward_details` WHERE inward_entry_id ="'.$_GET['stck_id'].'"' ;
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
 
 
   function ChkDupliCust($c_id){
  global $objSmarty;
  if(!empty($c_id))
 // $WhereClause	= ' AND `id` != '.$Ident;
  $SelQuery2		= 'SELECT * FROM `arka_inward_master` WHERE `inward_entry_id` = "'.$c_id.'" Limit 0,1';
  $CusDetail		= $this->ExecuteQuery($SelQuery2, 'select');
  if(!empty($CusDetail) && is_array($CusDetail))
   return false;
  else
   return true;
 }
 

 
 
 }
 ?>
