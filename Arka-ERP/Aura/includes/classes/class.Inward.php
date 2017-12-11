<?php
#####Class For Adding Content Management ######
class Inward extends MysqlFns{
 
 /* class constructor */
function Inward(){
 $this->LDDisplayPath= $config['SiteGlobalPath']."class.Inward.php";
  global $config;
  global $objSmarty;
  $this->MysqlFns();
  $this->Limit = 50;

   $SelQuerys	= 'SELECT max(inward_entry_id) as last FROM `arka_inward_master` Limit 0,1';
   $InwardDetail	= $this->ExecuteQuery($SelQuerys, 'select');
   
   if($InwardDetail[0]['last']!="")
   {
			$InwardDetail[0]['inwardEntry_id'] = stripslashes($InwardDetail[0]['last']);
			$in_id1 = preg_replace("/[^0-9\.]/", '', $InwardDetail[0]['inwardEntry_id']);
			$in_id1= $in_id1 + 1;
			$str = str_split($InwardDetail[0]['last'], 3);
			$in_id = $str[0]. "" .$in_id1;
   } else
   {
   		   $in_id = "IE10001";
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
}
//**********************************************************************************************************************************************************************


function InsertStockContent($objArray='')
 {
   global $objSmarty, $_POST;
    
   if(!$objArray['inwordEntryId']){
    $objSmarty->assign('ErrorMessage', 'Inword Entry ID should not be blank');
	return false;
   }elseif(!$objArray['dateofEntry']){
    $objSmarty->assign('ErrorMessage', 'Date of Entry should not be blank');
	return false;
   }elseif(!$objArray['invoiceNo']){
    $objSmarty->assign('ErrorMessage', 'Invoice Number should not be blank');
	return false;
   }elseif(!$objArray['invoiceDate']){
    $objSmarty->assign('ErrorMessage', 'Invoice Date should not be blank');
	return false;
   }elseif(!$objArray['supplierName']){
    $objSmarty->assign('ErrorMessage', 'Supplier Name should not be blank');
	return false;
   }elseif(!$objArray['supplierCode']){
    $objSmarty->assign('ErrorMessage', 'Supplier Code should not be blank');
	return false;
   }elseif(!$objArray['frieghtCharges']){
    $objSmarty->assign('ErrorMessage', 'Frieght Charges should not be blank');
	return false;
   /*}elseif(!$objArray['resellerVat']){
    $objSmarty->assign('ErrorMessage', 'Reseller Vat should not be blank');
	return false;
   }elseif(!$objArray['exciseDuty']){
    $objSmarty->assign('ErrorMessage', 'Excise Duty should not be blank');
	return false;
   }elseif(!$objArray['serviceTax']){
    $objSmarty->assign('ErrorMessage', 'Service Tax should not be blank');
	return false;
   }elseif(!$objArray['cess']){
    $objSmarty->assign('ErrorMessage', 'Cess should not be blank');
	return false;
   }elseif(!$objArray['manufacturerVat']){
    $objSmarty->assign('ErrorMessage', 'Manufacturer Vat should not be blank');
	return false;
   }elseif(!$objArray['hCess']){
    $objSmarty->assign('ErrorMessage', 'HCess should not be blank');
	return false;
   }elseif(!$objArray['exciseDutyVat']){
    $objSmarty->assign('ErrorMessage', 'Excise Duty Vat should not be blank');
	return false;
   }elseif(!$objArray['cst']){
    $objSmarty->assign('ErrorMessage', 'Cst should not be blank');
	return false;*/
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
   }elseif(!$objArray['materialSpecification']){
    $objSmarty->assign('ErrorMessage', 'Material Specification should not be blank');
	return false;
   }elseif(!$objArray['price']){
    $objSmarty->assign('ErrorMessage', 'Price should not be blank');
	return false;
   }elseif(!$objArray['quantity']){
    $objSmarty->assign('ErrorMessage', 'Quantity should not be blank');
	return false;
   }elseif(!$objArray['warrantyPeriod']){
    $objSmarty->assign('ErrorMessage', 'Warranty Period should not be blank');
	return false;
   }
   
   if($objArray['inward_entry_id']){
    $InsQuery = 'INSERT IGNORE INTO `arka_inward_master`(`inward_entry_id`, `date_of_entry`, `invoice_no`, `supplier_name`, `supplier_code`, `invoice_date`,`frieght_charges`,`record_status`) VALUES("'.trim(addslashes($objArray['inwordEntryId'])).'","'.trim(addslashes($objArray['dateofEntry'])).'","'.trim(addslashes($objArray['invoiceNo'])).'","'.trim(addslashes($objArray['supplierName'])).'","'.trim(addslashes($objArray['supplierCode'])).'","'.trim(addslashes($objArray['invoiceDate'])).'","'.trim(addslashes($objArray['frieghtCharges'])).'","1")';
  	 $this->ExecuteQuery($InsQuery, 'insert');
	 header('Location:' .$_SERVER['PHP_SELF'].'?server_response=success&inward_entry_id='.$objArray['inward_entry_id'].'&window_action=true');	
		
	}
	
	} 
	
	

//*************************************************************************************************************************************************
function ChkDupliCust($mobile,$email,$company_name){
  global $objSmarty;
  if(!empty($mobile) || !empty($email) || !empty($company_name) )
 // $WhereClause	= ' AND `id` != '.$Ident;
 	if ($email != "1@1.com" && $company_name !="R")
		{
 	  $SelQuery2		= 'SELECT * FROM `arka_cus_reg_master` WHERE (`status` != "0") AND (`mobile` = "'.$mobile.'" OR `email` = "'.$email.'" OR `company_name` = "'.$company_name.'") Limit 0,1';
  $CusDetail		= $this->ExecuteQuery($SelQuery2, 'select');
  		if((!empty($CusDetail)) && is_array($CusDetail))
  			 return false;
		else
	   return true;
	 	}
		elseif($email == "1@1.com" && $company_name !="R")
		{
		$SelQuery2		= 'SELECT * FROM `arka_cus_reg_master` WHERE (`status` != "0") AND (`mobile` = "'.$mobile.'" OR  `company_name` = "'.$company_name.'" ) Limit 0,1';
  		$CusDetail		= $this->ExecuteQuery($SelQuery2, 'select');
  		if((!empty($CusDetail)) && is_array($CusDetail))
  			 return false;
		else
	   return true;
		
		}
		elseif($email != "1@1.com" && $company_name =="R")
		{
		$SelQuery2		= 'SELECT * FROM `arka_cus_reg_master` WHERE (`status` != "0") AND (`mobile` = "'.$mobile.'" OR  `email` = "'.$email.'" ) Limit 0,1';
  		$CusDetail		= $this->ExecuteQuery($SelQuery2, 'select');
  		if((!empty($CusDetail)) && is_array($CusDetail))
  			 return false;
		else
	   return true;
		
		}elseif($email == "1@1.com" && $company_name =="R")
		{
		$SelQuery2		= 'SELECT * FROM `arka_cus_reg_master` WHERE (`status` != "0") AND (`mobile` = "'.$mobile.'" ) Limit 0,1';
  		$CusDetail		= $this->ExecuteQuery($SelQuery2, 'select');
  		if((!empty($CusDetail)) && is_array($CusDetail))
  			 return false;
		else
	   return true;
		
		}
		
 }
  /************************************************************************ Edit the Inward Details*******************************************/
 function EditInward($objArray='') {
   global $objSmarty, $_POST;
    
   if(!$objArray['inward_entry_id']){
    $objSmarty->assign('ErrorMessage', 'Inward Entry ID should not be blank');
	return false;
   }elseif(!$objArray['date_of_entry']){
    $objSmarty->assign('ErrorMessage', 'Date of Entry should not be blank');
	return false;
/*   }elseif(!$objArray['invoice_no']){
    $objSmarty->assign('ErrorMessage', 'Invoice Number should not be blank');
	return false;
   }elseif(!$objArray['invoice_date']){
    $objSmarty->assign('ErrorMessage', 'Invoice Date should not be blank');
	return false;
   }elseif(!$objArray['supplier_name']){
    $objSmarty->assign('ErrorMessage', 'Supplier Name should not be blank');
	return false;
   }elseif(!$objArray['supplier_code']){
    $objSmarty->assign('ErrorMessage', 'Supplier Code should not be blank');
	return false;
   }elseif(!$objArray['frieght_charges']){
    $objSmarty->assign('ErrorMessage', 'Frieght Charges should not be blank');
	return false;
*/	}elseif(!$objArray['location']){
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
   }elseif(!$objArray['item_description']){
    $objSmarty->assign('ErrorMessage', 'Material Description should not be blank');
	return false;
   }elseif(!$objArray['price']){
    $objSmarty->assign('ErrorMessage', 'Price should not be blank');
	return false;
   }elseif(!$objArray['quantity']){
    $objSmarty->assign('ErrorMessage', 'Quantity should not be blank');
	return false;
/*   }elseif(!$objArray['warranty_period']){
    $objSmarty->assign('ErrorMessage', 'Warranty Period should not be blank');
	return false;
*/   }
   if($objArray['inward_entry_id']){
			echo $SelQuery_on_inward_master	= 'SELECT SUM(tot) As sub ,SUM(total) As with_gst,SUM(gst_cal) As gst_val,SUM(total_amount_fc) As grant_tot,SUM(frieght_charges) As fr_charge  FROM `arka_inward_details` WHERE `inward_entry_id` ="'.trim(addslashes($objArray['inward_entry_id'])).'" ';
	 		 $RList_from_inward_master		= $this->ExecuteQuery($SelQuery_on_inward_master, "select");	
	  		$objSmarty->assign('RList_from_inward_master', $RList_from_inward_master);
			$sub_total = $RList_from_inward_master[0]['sub']; //echo $sub_total;
			$total = $RList_from_inward_master[0]['with_gst'];
			$gst_value = $RList_from_inward_master[0]['gst_val'];
			$grant_total =  $RList_from_inward_master[0]['grant_tot'];




   	$UpQuery1 = 'UPDATE `arka_inward_master` SET
	  				`date_of_entry` = "'.trim($objArray['date_of_entry']).'",
	  				`invoice_no` = "'.trim($objArray['invoice_no']).'",
	   				`supplier_name` = "'.trim($objArray['supplier_name']).'",
	   				`supplier_code` = "'.trim($objArray['supplier_code']).'",
	   				`invoice_date` = "'.trim($objArray['invoice_date']).'",
	  				`frieght_charges` = "'.trim($objArray['frieght_charges']).'",
				    `total` ="'.$total.'",
					`grant_total` ="'.$grant_total.'",
				    `invoice_amount`="'.$sub_total.'",
					`tax`="'.$gst_value.'",
					`tax_percentage`="'.trim(addslashes($objArray['gst'])).'"
	   				 WHERE 
					`inward_entry_id` = "'.trim($objArray['inward_entry_id']).'"';
	$this->ExecuteQuery($UpQuery1, 'update');
	
	 $total_to_inward_details=$objArray['price']*$objArray['quantity'];
	 

/*  $InsQuery2 = 'INSERT INTO 
  			`arka_inward_details
 			 `(`material_type`,
 			  `material_category`,
  			 `inward_entry_id`, 
  			 `material_name`,
   			 `material_specification`,
   			 `price`, 
   			 `created_by`,
   			 `material_code`,
   			 `quantity`,
   			 `warranty_period`,
  			 `record_status`,
  			 `total`,
  			 `supplier_name`,
   			`supplier_code`) 
  			 VALUES
  			 ("'.trim(addslashes($objArray['material_type'])).'",
   			  "'.trim(addslashes($objArray['material_category'])).'",
 			  "'.trim(addslashes($objArray['inward_entry_id'])).'",
   			  "'.trim(addslashes($objArray['material_name'])).'",
   			  "'.trim(addslashes($objArray['material_specification'])).'",
  			  "'.trim(addslashes($objArray['price'])).'",
   		  	  "'.trim(addslashes($objArray['created_by'])).'",
  			  "'.trim(addslashes($objArray['material_code'])).'",
  			  "'.trim(addslashes($objArray['quantity'])).'",
  			  "'.trim(addslashes($objArray['warranty_period'])).'",
 			  1,
  			  "'.trim(addslashes($total_to_inward_details)).'",
  			  "'.trim(addslashes($objArray['supplier_name'])).'",
  			  "'.trim(addslashes($objArray['supplier_code'])).'")';
  		$this->ExecuteQuery($InsQuery2, 'insert');	
*/

	$tot_tax_amt1=$objArray['tot']+$objArray['gst_cal'];  echo($tot_tax_amt1); echo $objArray['gst_cal']; echo $objArray['frieght_charges'];
	$tot_tax_amt2=$tot_tax_amt1; echo($tot_tax_amt2); 

							  $InsQuery2 = 'INSERT INTO `arka_inward_details`(`item_category_code`, 
												  `material_category`, 
												  `inward_entry_id`,
												   `material_name`, 
												  `item_description`,
												   `price`, 
												   `created_by`,
													`material_code`,
													`quantity`,
													`frieght_charges`,
													`location`,
													`tot`,
													`gst`,
													`gst_cal`,
													`total_amount_fc`,
													`warranty_period`,
													`record_status`,
													`total`,
													`region`,
													`supplier_name`,
													`supplier_code`) 
										 VALUES
													("'.trim(addslashes($objArray['item_category_code'])).'",
													"'.trim(addslashes($objArray['item_category'])).'",
													"'.trim(addslashes($objArray['inward_entry_id'])).'",
													"'.trim(addslashes($objArray['item_name'])).'",
													"'.trim(addslashes($objArray['item_description'])).'",
													"'.trim(addslashes($objArray['price'])).'",
													"'.trim(addslashes($objArray['created_by'])).'",
													"'.trim(addslashes($objArray['item_code'])).'",
													"'.trim(addslashes($objArray['quantity'])).'",
													"'.trim(addslashes($objArray['frieght_charges'])).'",
													"'.trim(addslashes($objArray['location'])).'",
													"'.trim(addslashes($objArray['tot'])).'",
													"'.trim(addslashes($objArray['gst'])).'",
													"'.trim(addslashes($objArray['gst_cal'])).'",
													"'.trim(addslashes($tot_tax_amt2)).'",
													"'.trim(addslashes($objArray['warranty_period'])).'",
													1,
													"'.trim(addslashes($tot_tax_amt1)).'",
													"'.trim(addslashes($objArray['selection_reg'])).'",
													"'.trim(addslashes($objArray['supplier_name'])).'",
													"'.trim(addslashes($objArray['supplier_code'])).'")';
													 $this->ExecuteQuery($InsQuery2, 'insert');	
													 

 	$total=$objArray['price']*$objArray['quantity'];
 
$InsQuery_to_stock_master = 'INSERT INTO `arka_stock_master`(
									`location`,
									`item_category_code`,
									`material_category`,
									`material_code`,
									`material_name`,
									`supplier_name`, 
									`supplier_code`, 
									`quantity`, 
									`unit_price`,
									`total`,
									`record_status`)
							VALUES
									(
									"'.trim(addslashes($objArray['location'])).'",
									"'.trim(addslashes($objArray['item_category_code'])).'",
									"'.trim(addslashes($objArray['item_category'])).'",
									"'.trim(addslashes($objArray['item_code'])).'",
									"'.trim(addslashes($objArray['item_name'])).'",
									"'.trim(addslashes($objArray['supplier_name'])).'",
									"'.trim(addslashes($objArray['supplier_code'])).'",
									"'.trim(addslashes($objArray['quantity'])).'",
									"'.trim(addslashes($objArray['price'])).'",
									"'.$total.'",
									"1")';
									 $this->ExecuteQuery($InsQuery_to_stock_master, 'insert');

   }
   	 header('Location:' .$_SERVER['PHP_SELF'].'?inward_entry_id='.$objArray['inward_entry_id'].'&server_success=update succeed');	
   }
// **********************************************************************************************************************************************
function GetInwardList($objArray='')  {

		global $objSmarty;
		$SelQuery = 'SELECT * FROM `arka_inward_master` WHERE record_status="1" ';
		$PageList		= $this->ExecuteQuery($SelQuery, "select");
        $objSmarty->assign('PageList', $PageList);
	}	
	
function GetInwardDetail($objArray='')  {
		global $objSmarty;
		$SelQuery = 'SELECT * FROM `arka_inward_master` WHERE inward_entry_id="'.$_GET['inward_entry_id'].'" ' ;
		$PageList		= $this->ExecuteQuery($SelQuery, "select");
        $objSmarty->assign('PageList', $PageList);
	}	
	
	
  function Getsupplier($objArray='')
 { 
 	global $objSmarty, $_POST;
	// $whereClause = ''; 
   if($_POST['search'] == ''){ 
  			if($_POST['vendor_company_name'])
	   			$whereClause = ' WHERE (`vendor_company_name` like "%'.$_POST['vendor_company_name'].'%")'; 
   			elseif($_POST['vendor_id'])
                $whereClause = ' WHERE (`vendor_id` like "%'.$_POST['vendor_id'].'%")';
		}
	$SelQuery3	= 'SELECT * FROM `arka_vendor_master` WHERE status="1"';
	 $listing_split7 = new MsplitPageResults($SelQuery3, $this->Limit);
  if ( ($listing_split7->number_of_rows > 0) )  {
   $objSmarty->assign('LinkPage',$listing_split7->display_count(TEXT_DISPLAY_NUMBER_OF_RESULT));
   $objSmarty->assign('PerPageNavigation',TEXT_RESULT_PAGE1 . ' ' . $listing_split7->display_links($this->Limit, get_all_get_params(array('page', 'info', 'x', 'y')))); 
	  $PageList5 = $this->ExecuteQuery($listing_split7->sql_query, 'selectassoc');
 }
 $objSmarty->assign('j', $listing_split7->j);
 $objSmarty->assign('PageList5', $PageList5);
 return $PageList5;
 }
  /*function Getsupplier($objArray='')
 {
 	global $objSmarty;
	$SelQuery	= 'SELECT * FROM `arka_supplier_details`'.$whereClause ;
	  $PageList5		= $this->ExecuteQuery($SelQuery, 'select');
		$objSmarty->assign('PageList5', $PageList5);
 }*/
 function GetmaterialLists($objArray='')  { 
  global $objSmarty;

  //$objSmarty->assign('title',$_GET['title']);
  $whereClause = '';
   if($_POST['search'] == ''){
  			if($_POST['item_name'])
	   			$whereClause = ' WHERE (`item_name` like "%'.$_POST['item_name'].'%")';
   			elseif($_POST['item_code'])	
                $whereClause = ' WHERE (`item_code` like "%'.$_POST['item_code'].'%")';
			elseif($_POST['item_category'])	
                $whereClause = ' WHERE (`item_category` like "%'.$_POST['item_category'].'%")';
			elseif($_POST['item_category_code'])	
                $whereClause = ' WHERE (`item_category_code` like "%'.$_POST['item_category_code'].'%")';
			elseif($_POST['item_description'])	
                $whereClause = ' WHERE (`item_description` like "%'.$_POST['item_description'].'%")';			
  }
   $SelQuery5		= 'SELECT * FROM `arka_product_master`'.$whereClause;
  $listing_split = new MsplitPageResults($SelQuery5, $this->Limit);
  if ( ($listing_split->number_of_rows > 0) )  {
   $objSmarty->assign('LinkPage',$listing_split->display_count(TEXT_DISPLAY_NUMBER_OF_RESULT));
   $objSmarty->assign('PerPageNavigation',TEXT_RESULT_PAGE1 . ' ' . $listing_split->display_links($this->Limit, get_all_get_params(array('page', 'info', 'x', 'y')))); 
   $PageList3 = $this->ExecuteQuery($listing_split->sql_query, 'selectassoc');
  }
  /*if(!empty($PageList) && is_array($PageList))

   foreach($PageList as $key=>$value){
    $PageList[$key]['SName'] = stripslashes($PageList[$key]['State_Name']);
   }*/

  $objSmarty->assign('i', $listing_split->i);
  $objSmarty->assign('PageList3', $PageList3);
  return $PageList3;
 
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
	function deleteInward($delData){
	 global $objSmarty;
 
    $DelQuery = 'update `arka_cus_reg_master` set `record_status`=0 WHERE `customer_id` ="'.$delData.'"';
	$this->ExecuteQuery($DelQuery, 'delete');
	return true;
  }
  
  function GetInwardDetailsView($objArray='') 
  {
		global $objSmarty;
		$objSmarty->assign('c_id',$_GET['inward_entry_id']);
		$SelQuery = 'SELECT * FROM `arka_inward_details` WHERE inward_entry_id ="'.$_GET['inward_entry_id'].'" &&`record_status`=1' ;
		//echo $SelQuery;
		$LDList		= $this->ExecuteQuery($SelQuery, "select");
		$total_records = count($LDList);
		$record_per_page = $this->Limit;
		
		$objSmarty->assign("TList1",$_GET['cust_id']);
		/*$LDList[0]['title'] 		= stripslashes($LDList[0]['title']);
		$LDList[1]['txttitle'] 		= stripslashes($LDList[1]['txttitle']);
		$LDList[2]['image'] 		= stripslashes($LDList[2]['image']);*/
		
		
		   $select_query='SELECT SUM(total) AS sum_total FROM `arka_inward_details` WHERE inward_entry_id = "'.$_REQUEST['inward_entry_id'].'" && `record_status`=1';
			 $execute_query		= $this->ExecuteQuery($select_query, "select");  //echo $execute_query[0]['sum_total'];
 			 $objSmarty->assign('execute_query',$execute_query);
			    
		   $select_query1='SELECT frieght_charges FROM `arka_inward_master` WHERE inward_entry_id = "'.$_REQUEST['inward_entry_id'].'" && `record_status`=1';
			 $execute_query1		= $this->ExecuteQuery($select_query1, "select");  //echo $execute_query1[0]['sum_total'];
 			 $objSmarty->assign('execute_query1',$execute_query1);


		 if(!empty($LDList) && is_array($LDList))
		{
			$objSmarty->assign("inward_details_list",$LDList);
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
			$PageLis6 = $this->ExecuteQuery($listing_split->SelQuery, 'selectassoc');
		}
		if(!empty($PageLis6) && is_array($PageLis6))
			foreach($PageLis6 as $key=>$value)
			{
				$PageLis6[$key]['Cid'] = stripslashes($PageLis6[$key]['customer_id']);
				$PageLis6[$key]['Cname'] = stripslashes($PageLis6[$key]['company_name']);
				$objSmarty->assign('Cid',$PageLis6[$key]['customer_id']);
				$objSmarty->assign('Cname',$PageLis6[$key]['company_name']);
			}		
			$objSmarty->assign('k', $listing_split->k);
			$objSmarty->assign('PageLis6', $PageLis6);
			echo $PageLis6;
			return $PageLis6;
	}	
 
  //*********************************************************delete
  function DeleteCus($CusIdent){
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
 
  function DeleteID($deleid)
  {
  global $objSmarty;
  $DelQuery = 'UPDATE `arka_inward_master` set `record_status` = 0 WHERE `inward_entry_id`="'.$_GET['inward_entry_id'].'" ';
  $this->ExecuteQuery($DelQuery, 'delete');
  
  $DelQuery2 = 'UPDATE `arka_inward_details` set `record_status` ="0" WHERE `inward_entry_id`="'.$_GET['inward_entry_id'].'"';
  $this->ExecuteQuery($DelQuery2, 'update');
  
   /*$SelQuery_on_inward_detail		= 'SELECT * FROM `arka_inward_details` WHERE `inward_entry_id` = "'.$_GET['inward_entry_id'].'"';
  $Detail_on_inward_detail		= $this->ExecuteQuery($SelQuery_on_inward_detail, 'select');

 // print_r($Detail_on_inward_detail); 
 foreach($Detail_on_inward_detail as $key=>$value)
  {
     $SelQuery_on_stock		= 'SELECT * FROM `arka_stock_master` WHERE `location` = "'.$Detail_on_inward_detail[$key]['location'].'" && `item_category_code` = "'.$Detail_on_inward_detail[$key]['item_category_code'].'"&& `material_category` = "'.$Detail_on_inward_detail[$key]['item_category'].'"&& `material_name` = "'.$Detail_on_inward_detail[$key]['item_name'].'"&& `material_code` = "'.$Detail_on_inward_detail[$key]['item_code'].'"&& `supplier_code` = "'.$Detail_on_inward_detail[$key]['supplier_code'].'"&& `supplier_name` = "'.$Detail_on_inward_detail[$key]['supplier_name'].'"&& `unit_price` = "'.$Detail_on_inward_detail[$key]['price'].'"';
  $Detail_on_stock		= $this->ExecuteQuery($SelQuery_on_stock, 'select'); 
 // print_r($Detail_on_stock);
  if($Detail_on_stock[0]['quantity']>=$Detail_on_inward_detail[$key]['quantity'])
  {
 $process_flag=1;
// echo $Detail_on_stock[0]['quantity'];
// echo $Detail_on_inward_detail[$key]['quantity'];
  $SelQuery_on_stock		= 'SELECT * FROM `arka_stock_master` WHERE `location` = "'.$Detail_on_inward_detail[$key]['location'].'" && `item_category_code` = "'.$Detail_on_inward_detail[$key]['item_category_code'].'"&& `material_category` = "'.$Detail_on_inward_detail[$key]['item_category'].'"&& `material_name` = "'.$Detail_on_inward_detail[$key]['item_name'].'"&& `material_code` = "'.$Detail_on_inward_detail[$key]['item_code'].'"&& `supplier_code` = "'.$Detail_on_inward_detail[$key]['supplier_code'].'"&& `supplier_name` = "'.$Detail_on_inward_detail[$key]['supplier_name'].'"&& `unit_price` = "'.$Detail_on_inward_detail[$key]['price'].'"';
  $Detail_on_stock		= $this->ExecuteQuery($SelQuery_on_stock, 'select'); 
  
  $update_quantity=$Detail_on_stock[0]['quantity']-$Detail_on_inward_detail[$key]['quantity'];
  $update_total=$update_quantity*$Detail_on_stock[0]['unit_price'];
  
   $UpQuery_on_stock = 'UPDATE `arka_stock_master` set `quantity`="'.$update_quantity.'",`total`="'.$update_total.'"  WHERE `location` = "'.$Detail_on_inward_detail[$key]['location'].'" && `item_category_code` = "'.$Detail_on_inward_detail[$key]['item_category_code'].'"&& `material_category` = "'.$Detail_on_inward_detail[$key]['item_category'].'"&& `material_name` = "'.$Detail_on_inward_detail[$key]['item_name'].'"&& `material_code` = "'.$Detail_on_inward_detail[$key]['item_code'].'"&& `supplier_code` = "'.$Detail_on_inward_detail[$key]['supplier_code'].'"&& `supplier_name` = "'.$Detail_on_inward_detail[$key]['supplier_name'].'"&& `unit_price` = "'.$Detail_on_inward_detail[$key]['price'].'"';
 $this->ExecuteQuery($UpQuery_on_stock, 'update');
  
  $InsQuery_to_temp_tbl = 'INSERT INTO `arka_temporary_inward_stock_master`(`location`,`item_category_code`,`material_type`,`material_category`,`material_code`,`material_name`,`material_specification`,`supplier_name`,`supplier_code`,`price`,`quantity`) VALUES("'.trim(addslashes($Detail_on_inward_detail[$key]['region'])).'","'.trim(addslashes($Detail_on_inward_detail[$key]['item_category_code'])).'","'.trim(addslashes($Detail_on_inward_detail[$key]['material_type'])).'","'.trim(addslashes($Detail_on_inward_detail[$key]['material_category'])).'","'.trim(addslashes($Detail_on_inward_detail[$key]['material_code'])).'","'.trim(addslashes($Detail_on_inward_detail[$key]['material_name'])).'","'.trim(addslashes($Detail_on_inward_detail[$key]['material_specification'])).'","'.trim(addslashes($Detail_on_inward_detail[$key]['supplier_name'])).'","'.trim(addslashes($Detail_on_inward_detail[$key]['supplier_code'])).'","'.trim(addslashes($Detail_on_inward_detail[$key]['price'])).'","'.trim(addslashes($Detail_on_inward_detail[$key]['quantity'])).'")';
 $this->ExecuteQuery($InsQuery_to_temp_tbl, 'insert');  
  
 
  }
  else
  {
 
  $SelQuery_on_temp_tbl		= 'SELECT * FROM `arka_temporary_inward_stock_master` WHERE `inward_entry_id` = "'.$_GET['inward_entry_id'].'"';
  $Detail_on_inward_stock_master = $this->ExecuteQuery($SelQuery_on_temp_tbl, 'select');*
   foreach($Detail_on_inward_stock_master as $key=>$value)
  {
    $SelQuery_on_stock		= 'SELECT * FROM `arka_stock_master` WHERE `location` = "'.$Detail_on_inward_stock_master[$key]['location'].'" && `item_category_code` = "'.$Detail_on_inward_stock_master[$key]['item_category_code'].'"&& `material_category` = "'.$Detail_on_inward_stock_master[$key]['item_category'].'"&& `material_name` = "'.$Detail_on_inward_stock_master[$key]['item_name'].'"&& `material_code` = "'.$Detail_on_inward_stock_master[$key]['item_code'].'"&& `supplier_code` = "'.$Detail_on_inward_stock_master[$key]['supplier_code'].'"&& `supplier_name` = "'.$Detail_on_inward_stock_master[$key]['supplier_name'].'"&& `unit_price` = "'.$Detail_on_inward_stock_master[$key]['price'].'"';
  $Detail_on_stock		= $this->ExecuteQuery($SelQuery_on_stock, 'select'); 
  
  $update_quantity=$Detail_on_stock[0]['quantity']+$Detail_on_inward_stock_master[$key]['quantity'];
  $update_total=$update_quantity*$Detail_on_stock[0]['unit_price'];
  $UpQuery_on_stock = 'UPDATE `arka_stock_master` set `quantity`="'.$update_quantity.'",`total`="'.$update_total.'"  WHERE `location` = "'.$Detail_on_inward_stock_master[$key]['location'].'" && `item_category_code` = "'.$Detail_on_inward_stock_master[$key]['item_category_code'].'"&& `material_category` = "'.$Detail_on_inward_stock_master[$key]['item_category'].'"&& `material_name` = "'.$Detail_on_inward_stock_master[$key]['item_name'].'"&& `material_code` = "'.$Detail_on_inward_stock_master[$key]['item_code'].'"&& `supplier_code` = "'.$Detail_on_inward_stock_master[$key]['supplier_code'].'"&& `supplier_name` = "'.$Detail_on_inward_stock_master[$key]['supplier_name'].'"&& `unit_price` = "'.$Detail_on_inward_stock_master[$key]['price'].'"';
  $this->ExecuteQuery($UpQuery_on_stock, 'update');
  
  }
// $DelQuery = 'DELETE FROM `arka_temporary_inward_stock_master` WHERE `inward_entry_id`="'.$_GET['inward_entry_id'].'"';
$this->ExecuteQuery($DelQuery, 'delete');
  $objSmarty->assign('ErrorMessage', 'Less No Of Stocks Only Available!!! Please Return the Stocks taken as Outward');
  return false;
  
  }	
   
  }

$current_date=date("Y-m-d");
   $InsQuery4 = 'INSERT INTO `arka_deleted_records`(`deleted_data`, `deleted_table`, `deleted_by`,`deleted_date`) VALUES("'.$_GET['inward_entry_id'].'","arka_inward_master","'.$_SESSION['UserName'].'","'.$current_date.'")';
 //  $DelQuery = 'DELETE FROM `arka_temporary_inward_stock_master` WHERE `inward_entry_id`="'.$_GET['inward_entry_id'].'"';
 $this->ExecuteQuery($DelQuery, 'delete');
	 $this->ExecuteQuery($InsQuery4, 'insert');
	// $objSmarty->assign('SuccessMessage', 'Inward Details Deleted Successfully');
	   // $url_addtnal_data=base64_encode("Inward Details Deleted Successfully");*/
    header('location:'.$_SERVER['PHP_SELF']."?url_addtnal_data");
 }
 
 }
?>


