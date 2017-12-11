<?php
#####Class For Adding Content Management ######
class StockInward extends MysqlFns{
 
 /* class constructor */
 function StockInward(){
 $this->LDDisplayPath= $config['SiteGlobalPath']."class.StockInward.php";
  global $config;
  global $objSmarty;
  $this->MysqlFns();
  $this->Limit = 15;
   $this->Keyword = '';
  $this->Operator = '';
  $this->PerPage = '';
  
	 $f = "materialname.txt";
		$uploadpath = $config['QuotePath'];
		//chmod($uploadpath.$f1,"777");
		$myfile = fopen($f, "w") or die("Unable to open file!");
		$SelQuery	= 'SELECT DISTINCT item_name FROM `arka_product_master` WHERE status="1"';
		$MatList	= $this->ExecuteQuery($SelQuery, 'select');
		//print_r($MatList);exit;
		if(!empty($MatList) && is_array($MatList))
		foreach($MatList as $key=>$value)
		{
		$MatList[$key]['MCode'] = stripslashes($MatList[$key]['item_name']);
		$names = $names.$MatList[$key]['MCode'].",";
		}
		fwrite($myfile, $names);
		fclose($myfile);

  
    //$SelQuerys	= 'SELECT max(inward_entry_id) as last FROM `arka_inward_master` WHERE `region`="'.$_SESSION['Region'].'" Limit 0,1';
 //  echo $SelQuery;
      $SelQuerys	= 'SELECT max(inward_entry_id) as last FROM `arka_inward_master` WHERE `record_status`="1" Limit 0,1';
   $IwdDetail	= $this->ExecuteQuery($SelQuerys, 'select');
   
   if($IwdDetail[0]['last']!="")
   {
   $IwdDetail[0]['inward_entry_id'] = stripslashes($IwdDetail[0]['last']);
  	$c_id1 = preg_replace("/[^0-9\.]/", '', $IwdDetail[0]['inward_entry_id']);
	$c_id1= $c_id1 + 1;
	$str = str_split($IwdDetail[0]['last'], 3);
	$inward_entry_id = $str[0]. "" .$c_id1;
   }
   else
   {
   $inward_entry_id = "IWD1001";
   }
	$objSmarty->assign('inward_entry_id', $inward_entry_id);
 }
 
 
 
  /* Insert the content for  Static Pages */
 
 function InsertStockContent($objArray){ 
   global $objSmarty,$_POST;
   
   if(!$objArray['inward_entry_id']){
    $objSmarty->assign('ErrorMessage', 'Inward Entry Id should not be blank');
	return false;
/*   }elseif(!$objArray['supplier_name']){
    $objSmarty->assign('ErrorMessage', 'Supplier Name should not be blank');
	return false;
   }elseif(!$objArray['invoice_no']){
    $objSmarty->assign('ErrorMessage', 'Invoice No should not be blank');
	return false;
*/   }elseif(!$objArray['date_of_entry']){
    $objSmarty->assign('ErrorMessage', 'Date Of Entry should not be blank');
	return false;
/*   }elseif(!$objArray['supplier_code']){
    $objSmarty->assign('ErrorMessage', 'Supplier Code should not be blank');
	return false;
   }elseif(!$objArray['invoice_date']){
    $objSmarty->assign('ErrorMessage', 'Invoice Date should not be blank');
	return false;
*/   }elseif(!$objArray['location']){
    $objSmarty->assign('ErrorMessage', 'Location should not be blank');
	return false;
   }elseif(!$objArray['item_description']){
    $objSmarty->assign('ErrorMessage', 'Material Description should not be blank');
	$objSmarty->assign('make_read_only', 'readonly');
	return false;
   }elseif(!$objArray['item_category']){
    $objSmarty->assign('ErrorMessage', 'Material Category should not be blank');
	$objSmarty->assign('make_read_only', 'readonly');
	return false;
   }elseif(!$objArray['item_name']){
    $objSmarty->assign('ErrorMessage', 'Material Name should not be blank');
	$objSmarty->assign('make_read_only', 'readonly');
	return false;
   }elseif(!$objArray['price']){
    $objSmarty->assign('ErrorMessage', 'Price should not be blank');
	$objSmarty->assign('make_read_only', 'readonly');
	return false;
   }elseif(!$objArray['item_code']){
    $objSmarty->assign('ErrorMessage', 'Material Code should not be blank');
	$objSmarty->assign('make_read_only', 'readonly');
	return false;
   }elseif(!$objArray['quantity']){
    $objSmarty->assign('ErrorMessage', 'Quantity should not be blank');
	$objSmarty->assign('make_read_only', 'readonly');
	return false;
/*   }elseif(!$objArray['gst']){
    $objSmarty->assign('ErrorMessage', 'GST should not be blank');
	$objSmarty->assign('make_read_only', 'readonly');
	return false;
*/   }
   elseif(!preg_match("/^[0-9]{1,}$/",$objArray['quantity'])){
   $objSmarty->assign('ErrorMessage','Quantity Should Be Numbers');
   $objSmarty->assign('make_read_only', 'readonly');
   return false;
   }


	
	$tot_tax_amt=$res_tax_amt + $man_tax_amt + $excd_tax_amt + $exc_tax_amt +$cst_tax_amt + $ser_tax_amt +$cess_tax_amt +$hcess_tax_amt;//echo $tot_tax_amt;echo "<br />";
	$total_invoice_amount_with_tax=$sub_total+$tot_tax_amt + $objArray['frieght_charges'];	//echo $total_invoice_amount_with_tax;echo "<br />";
  
  
    if($this->ChkDupliCust(trim(addslashes($objArray['inward_entry_id']))))
   {  echo
   $InsQuery = 'INSERT INTO `arka_inward_master`(`inward_entry_id`, `material_name`, `date_of_entry`, `invoice_no`, `invoice_date`,`invoice_amount`,`tax`,`frieght_charges`,`location`,`total`,`record_status`,`region`,`tax_percentage`,`supplier_name`,`supplier_code`,`created_by`) VALUES("'.trim(addslashes($objArray['inward_entry_id'])).'","'.trim(addslashes($objArray['item_name'])).'","'.trim(addslashes($objArray['date_of_entry'])).'","'.trim(addslashes($objArray['invoice_no'])).'","'.trim(addslashes($objArray['invoice_date'])).'","'.trim(addslashes($sub_total)).'","'.trim(addslashes($tot_tax_amt)).'","'.trim(addslashes($objArray['frieght_charges'])).'","'.trim(addslashes($objArray['location'])).'","'.trim(addslashes($total_invoice_amount_with_tax)).'",1,"'.trim(addslashes($objArray['selection_reg'])).'","'.trim(addslashes($ct)).'","'.trim(addslashes($objArray['supplier_name'])).'","'.trim(addslashes($objArray['supplier_code'])).'","'.trim(addslashes($objArray['created_by'])).'")';   
  	 $this->ExecuteQuery($InsQuery, 'insert');
	 	       
	// header('Location:' .$_SERVER['PHP_SELF'].'?server_response=success&inward_entry_id='.$objArray['inward_entry_id'].'&window_action=true');	
	// $objSmarty->assign('hide_master_details',$objArray['total']);
	
	}
	else
	{  echo
	 $SelQuery_on_inward_master	= 'SELECT * FROM `arka_inward_details` WHERE `inward_entry_id` ="'.trim(addslashes($objArray['inward_entry_id'])).'" ';
	  $RList_from_inward_master		= $this->ExecuteQuery($SelQuery_on_inward_master, "select");	
$invoice_amount=$objArray['price']*$objArray['quantity'];
$tot_tax_amt2 = $RList_from_inward_master['total_amount_fc'];
/*$tot_tax_amt2=$objArray['tot']+$objArray['gst_cal'];*/
$tot_tax_amt3=$tot_tax_amt2+$objArray['frieght_charges']; // echo $tot_tax_amt3; 
$update_invoice_amt_for_master=$RList_from_inward_master[0]['invoice_amount']+$invoice_amount;	
$update_tax_amount_for_current_data=$invoice_amount*$total_percentage/100;
$update_tax_amount_for_all_data=$update_invoice_amt_for_master*$total_percentage/100;
//$update_tax_for_master=$RList_from_inward_master[0]['tax']+$update_tax_amount_for_current_data;	
$update_total_for_master=$update_invoice_amt_for_master+$objArray['frieght_charges']+$update_tax_amount_for_all_data;
//if($RList_from_inward_master[0]['total']!=0)                      //this is for updating master table after all master details deleted
//{

echo $SelQuery_on_inward_master	= 'SELECT SUM(tot) As sub ,SUM(total) As with_gst,SUM(gst_cal) As gst_val,SUM(total_amount_fc) As grant_tot,SUM(frieght_charges) As fr_charge  FROM `arka_inward_details` WHERE `inward_entry_id` ="'.trim(addslashes($objArray['inward_entry_id'])).'" ';
	  $RList_from_inward_master		= $this->ExecuteQuery($SelQuery_on_inward_master, "select");	
	  $objSmarty->assign('RList_from_inward_master', $RList_from_inward_master);
	  
$sub_total = $RList_from_inward_master[0]['sub']; //echo $sub_total;
$total = $RList_from_inward_master[0]['with_gst'];
$gst_value = $RList_from_inward_master[0]['gst_val'];
$grant_total =  $RList_from_inward_master[0]['grant_tot'];
//$freight_c = $RList_from_inward_master['fr_charge'];
//$grant_tot=$update_total_for_master+$objArray['frieght_charges']; // echo $grant_tot;  echo
echo  $update_query_for_inward_master='UPDATE `arka_inward_master` SET
											 `date_of_entry` ="'.trim(addslashes($objArray['date_of_entry'])).'",
											 `invoice_no` ="'.trim(addslashes($objArray['invoice_no'])).'",
											 `supplier_name` ="'.trim(addslashes($objArray['supplier_name'])).'",
											 `material_name` ="'.trim(addslashes($objArray['item_name'])).'",
											 `supplier_code` ="'.trim(addslashes($objArray['supplier_code'])).'",
											 `invoice_date` ="'.trim(addslashes($objArray['invoice_date'])).'",
											 `location` ="'.trim(addslashes($objArray['location'])).'",
											 `total` ="'.$total.'",
											 `grant_total` ="'.$grant_total.'",
											 `invoice_amount`="'.$sub_total.'",
											 `tax`="'.$gst_value.'",
											 `tax_percentage`="'.trim(addslashes($objArray['gst'])).'"
									WHERE
											  `inward_entry_id` ="'.trim(addslashes($objArray['inward_entry_id'])).'"';  
											  $this->ExecuteQuery($update_query_for_inward_master,"update"); 
//echo $total_percentage;
/*$update_query_for_inward_master='UPDATE `arka_inward_master` SET `total` ="'.$update_total_for_master.'",`invoice_amount`="'.$update_invoice_amt_for_master.'",`tax`="'.$update_tax_for_master.'" WHERE `inward_entry_id` ="'.trim(addslashes($objArray['inward_entry_id'])).'"';*/
//}
/*else
{
$update_tax_deductables_for_master=$update_invoice_amt_for_master;	
$update_tax_for_master=$update_tax_deductables_for_master*$RList_from_inward_master[0]['tax_percentage']/100;
$update_total_for_master2=$update_tax_for_master+$invoice_amount+$RList_from_inward_master[0]['frieght_charges'];
$update_query_for_inward_master='UPDATE `arka_inward_master` SET `total` ="'.$update_total_for_master2.'",`invoice_amount`="'.$update_invoice_amt_for_master.'",`tax`="'.$update_tax_for_master.'",`dc_no` ="'.trim(addslashes($objArray['dc_no'])).'",`dc_date` ="'.trim(addslashes($objArray['dc_date'])).'",`invoice_no` ="'.trim(addslashes($objArray['invoice_no'])).'",`supplier_name` ="'.trim(addslashes($objArray['supplier_name'])).'",`supplier_code` ="'.trim(addslashes($objArray['supplier_code'])).'",`invoice_date` ="'.trim(addslashes($objArray['invoice_date'])).'",`frieght_charges` ="'.trim(addslashes($objArray['frieght_charges'])).'" WHERE `inward_entry_id` ="'.trim(addslashes($objArray['inward_entry_id'])).'"';
}*/

   }
	$tot_tax_amt1=$objArray['tot']+$objArray['gst_cal'];  //echo($tot_tax_amt1); echo $objArray['gst_cal']; echo $objArray['frieght_charges'];
	$tot_tax_amt2=$tot_tax_amt1;// echo($tot_tax_amt2); 
	
//$total_to_inward_details=$objArray['price']*$objArray['quantity'];
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
	
	 $SelQuery_on_stock	= 'SELECT * FROM `arka_stock_master` WHERE `item_category_code` ="'.trim(addslashes($objArray['item_category_code'])).'" && `material_category` ="'.trim(addslashes($objArray['item_category'])).'" &&  `material_name` ="'.trim(addslashes($objArray['item_name'])).'" && `material_code` ="'.trim(addslashes($objArray['item_code'])).'" && `unit_price` ="'.trim(addslashes($objArray['price'])).'"&& `supplier_code` ="'.trim(addslashes($objArray['supplier_code'])).'"&& `supplier_name` ="'.trim(addslashes($objArray['supplier_name'])).'"';
	  $RList		= $this->ExecuteQuery($SelQuery_on_stock, "select");
	
	 $SelQuery_on_inward_master	= 'SELECT SUM(tot) As sub ,SUM(total) As with_gst,SUM(gst_cal) As gst_val,SUM(total_amount_fc) As grant_tot,SUM(frieght_charges) As fr_charge  FROM `arka_inward_details` WHERE `inward_entry_id` ="'.trim(addslashes($objArray['inward_entry_id'])).'" ';
	  $RList_from_inward_master		= $this->ExecuteQuery($SelQuery_on_inward_master, "select");	
	  $objSmarty->assign('RList_from_inward_master', $RList_from_inward_master);
$sub_total = $RList_from_inward_master[0]['sub'];//echo $sub_total;exit;
$total = $RList_from_inward_master[0]['with_gst'];
$gst_value = $RList_from_inward_master[0]['gst_val'];
$grant_total =  $RList_from_inward_master[0]['grant_tot'];
$freight_c = $RList_from_inward_master[0]['fr_charge'];
//$grant_tot=$update_total_for_master+$objArray['frieght_charges']; // echo $grant_tot;  echo
echo $update_query_for_inward_master='UPDATE `arka_inward_master` SET
 											
											 `date_of_entry` ="'.trim(addslashes($objArray['date_of_entry'])).'",
											 `invoice_no` ="'.trim(addslashes($objArray['invoice_no'])).'",
											 `supplier_name` ="'.trim(addslashes($objArray['supplier_name'])).'",
											 `supplier_code` ="'.trim(addslashes($objArray['supplier_code'])).'",
											 `material_name` ="'.trim(addslashes($objArray['item_name'])).'",
											 `invoice_date` ="'.trim(addslashes($objArray['invoice_date'])).'",
											 `location` ="'.trim(addslashes($objArray['location'])).'",
											 `total` ="'.$total.'",
											 `grant_total` ="'.$with_gst.'",
											 `invoice_amount`="'.$sub_total.'",
											 `tax`="'.$gst_value.'",
											 `tax_percentage`="'.trim(addslashes($objArray['gst'])).'"
									WHERE
											  `inward_entry_id` ="'.trim(addslashes($objArray['inward_entry_id'])).'"';     
//echo $total_percentage;
/*$update_query_for_inward_master='UPDATE `arka_inward_master` SET `total` ="'.$update_total_for_master.'",`invoice_amount`="'.$update_invoice_amt_for_master.'",`tax`="'.$update_tax_for_master.'" WHERE `inward_entry_id` ="'.trim(addslashes($objArray['inward_entry_id'])).'"';*/
//}
/*else
{
$update_tax_deductables_for_master=$update_invoice_amt_for_master;	
$update_tax_for_master=$update_tax_deductables_for_master*$RList_from_inward_master[0]['tax_percentage']/100;
$update_total_for_master2=$update_tax_for_master+$invoice_amount+$RList_from_inward_master[0]['frieght_charges'];
$update_query_for_inward_master='UPDATE `arka_inward_master` SET `total` ="'.$update_total_for_master2.'",`invoice_amount`="'.$update_invoice_amt_for_master.'",`tax`="'.$update_tax_for_master.'",`dc_no` ="'.trim(addslashes($objArray['dc_no'])).'",`dc_date` ="'.trim(addslashes($objArray['dc_date'])).'",`invoice_no` ="'.trim(addslashes($objArray['invoice_no'])).'",`supplier_name` ="'.trim(addslashes($objArray['supplier_name'])).'",`supplier_code` ="'.trim(addslashes($objArray['supplier_code'])).'",`invoice_date` ="'.trim(addslashes($objArray['invoice_date'])).'",`frieght_charges` ="'.trim(addslashes($objArray['frieght_charges'])).'" WHERE `inward_entry_id` ="'.trim(addslashes($objArray['inward_entry_id'])).'"';
}*/
$this->ExecuteQuery($update_query_for_inward_master,"update");

if(!empty($RList) && is_array($RList))
	  {
	  
	  $update_quantity=$objArray['quantity']+$RList[0]['quantity'];
	  $update_total=$RList[0]['unit_price']*$update_quantity;
 $update_query='UPDATE `arka_stock_master` SET `quantity` ="'.trim(addslashes($update_quantity)).'",`total`="'.trim(addslashes($update_total)).'" WHERE `material_code` ="'.$RList[0]['material_code'].'" && `unit_price` ="'.$RList[0]['unit_price'].'" && `supplier_code` ="'.$RList[0]['supplier_code'].'" && `supplier_name` ="'.$RList[0]['supplier_name'].'" && `location` ="'.$RList[0]['location'].'"';
$this->ExecuteQuery($update_query,"update");
	  }
	else
	{
  	$total=$objArray['price']*$objArray['quantity'];
					 $InsQuery_to_stock_master = 'INSERT INTO `arka_stock_master`(`inward_entry_id`,
													 `location`,
													 `material_category`,
													 `material_name`, 
													 `item_category_code`,
													 `material_code`, 
													 `supplier_code`,
													 `supplier_name`, 
													 `invoice_no`, 
													 `invoice_date`, 
													 `quantity`,
													 `unit_price`,
													 `total`,
													 `record_status`)
											VALUES
													   ("'.trim(addslashes($objArray['inward_entry_id'])).'",
													   "'.trim(addslashes($objArray['location'])).'",
													   "'.trim(addslashes($objArray['item_category'])).'",
													   "'.trim(addslashes($objArray['item_name'])).'",
													   "'.trim(addslashes($objArray['item_category_code'])).'",
													   "'.trim(addslashes($objArray['item_code'])).'",
													   "'.trim(addslashes($objArray['supplier_code'])).'",
													   "'.trim(addslashes($objArray['supplier_name'])).'",
													    "'.trim(addslashes($objArray['invoice_no'])).'",
														 "'.trim(addslashes($objArray['invoice_date'])).'",
													   "'.trim(addslashes($objArray['quantity'])).'",
													   "'.trim(addslashes($objArray['price'])).'",
													   "'.trim(addslashes($total)).'",1)';
						 $this->ExecuteQuery($InsQuery_to_stock_master, 'insert');
	}

	/*$oFCKeditor->Value		= '';*/
	$objSmarty->assign('Cc_id',$objArray['c_id']);
	$objSmarty->assign('c_id', '');
	$objSmarty->assign('make_read_only', 'readonly');
	$objSmarty->assign('hide_tax_details', '1');
	$objSmarty->assign('posted_tax_details', $objArray['tax_percentage']);
	$objSmarty->assign('SuccessMessage', 'Inward Details Added Successfully');
	$this->GetInwardDetailsView();
	header('Location:' .$_SERVER['PHP_SELF'].'?server_response=success&inward_entry_id='.$objArray['inward_entry_id'].'&window_action=true');
	return true;
	
 }
 
 
  function delete_inward_details($delete_array)
 {
global $objSmarty;
$objSmarty->assign('hide_tax_details', '1');
 $objSmarty->assign('make_read_only', 'readonly');
 if(isset($delete_array['ticks']))
 {
 $delete_element=implode(",",$delete_array['ticks']);
 foreach($delete_array['ticks'] as $key=>$value)
 {
 $del_query='DELETE FROM `arka_inward_details` WHERE `sl_no`="'.$value.'"';
 $query_exec=$this->ExecuteQuery($del_query,'delete');
 }
 $this->list_inward_details();
 $objSmarty->assign('SuccessMessage_on_delete', 'Inward Details Deleted Successfully');
 return true;
 }
 else
 {
 $SelQuery_on_details	= 'SELECT material_type,material_category,material_code,material_name,price,quantity,total,supplier_name,supplier_code,region FROM `arka_inward_details` WHERE `sl_no` = "'.$_GET['sl_no'].'" ';
 $RList		= $this->ExecuteQuery($SelQuery_on_details, "select");
 $SelQuery_on_stock	= 'SELECT material_type,material_category,material_code,material_name,unit_price,quantity,supplier_name,supplier_code FROM `arka_stock_master` WHERE material_type="'.$RList[0]['material_type'].'" AND material_category="'.$RList[0]['material_category'].'" AND material_code="'.$RList[0]['material_code'].'" AND material_name="'.$RList[0]['material_name'].'" AND unit_price="'.$RList[0]['price'].'" AND supplier_name="'.$RList[0]['supplier_name'].'" AND supplier_code="'.$RList[0]['supplier_code'].'" AND region="'.$RList[0]['region'].'"';
 $RList2		= $this->ExecuteQuery($SelQuery_on_stock, "select");

 if(!is_null($RList2) && $RList2[0]['quantity'] >= $RList[0]['quantity'])
 {
 $update_quantity=$RList2[0]['quantity']-$RList[0]['quantity'];
 $update_total=$RList2[0]['unit_price']*$update_quantity;
 $update_query='UPDATE `arka_stock_master` SET `quantity` ="'.$update_quantity.'",`total`="'.$update_total.'" WHERE `material_code` ="'.$RList[0]['material_code'].'" && `unit_price` ="'.$RList[0]['price'].'" && `material_type` ="'.$RList[0]['material_type'].'" && `material_name` ="'.$RList[0]['material_name'].'"&& `material_category` ="'.$RList[0]['material_category'].'"&& `supplier_code` ="'.$RList[0]['supplier_code'].'"&& `supplier_name` ="'.$RList[0]['supplier_name'].'"';
$this->ExecuteQuery($update_query,"update");

  $SelQuery_for_inward_master	= 'SELECT `invoice_amount`,`tax`,`tax_percentage`,`frieght_charges`,`total` ,`inward_entry_id` FROM `arka_inward_master` WHERE `inward_entry_id` = (SELECT `inward_entry_id` FROM arka_inward_details WHERE `sl_no` = '.$_GET['sl_no'].')';

 $RList_from_detail		= $this->ExecuteQuery($SelQuery_for_inward_master, "select");
 $update_invoice_amount=$RList_from_detail[0]['invoice_amount']-$RList[0]['total'];
 if($update_invoice_amount!=0)
 {
 //echo "at first if";
 $update_tax_amount_for_current_data=$RList[0]['total']*$RList_from_detail[0]['tax_percentage']/100;
 $update_tax_for_master=$RList_from_detail[0]['tax']-$update_tax_amount_for_current_data;
 $update_total_amount_on_inward_master=$RList_from_detail[0]['total']-($update_tax_amount_for_current_data+$RList[0]['total']);
 }
 else
 {
 //echo "at first else";
 $update_tax_for_master=0;
 $update_total_amount_on_inward_master=0;
 }

  $update_query2 = 'UPDATE `arka_inward_master` SET `invoice_amount` ="'.$update_invoice_amount.'",`tax` ="'.$update_tax_for_master.'",`total`="'.$update_total_amount_on_inward_master.'" WHERE `inward_entry_id` ="'.$RList_from_detail[0]['inward_entry_id'].'"';
$this->ExecuteQuery($update_query2,"update");

    $InsQuery4 = 'INSERT INTO `arka_deleted_records`(`deleted_data`, `deleted_table`, `deleted_by`) VALUES("'.$_REQUEST['deleid'].'","arka_inward_details","'.$_SESSION['UserName'].'")';
	 $this->ExecuteQuery($InsQuery4, 'insert');
  $del_query='UPDATE `arka_inward_details` SET `status` =0 WHERE `sl_no`="'.$_GET['sl_no'].'"';
 $query_exec=$this->ExecuteQuery($del_query,'update');
 
  $objSmarty->assign('SuccessMessage_on_delete', 'Inward Details Deleted Successfully');
    $url_addtnal_data=base64_encode("Inward Details Deleted Successfully");
    header('location:'.$_SERVER['PHP_SELF']."?sm_on_del=".$url_addtnal_data."&inward_entry_id=".$_REQUEST['inward_entry_id']);
 return true;
 }
 else
 {
 $objSmarty->assign('ErrorMessage_on_delete', 'Sorry ! Delete Process Canceled Due To Less Stocks Available');
 return true;
 }
 }
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
 
  /************************************Material Details/********************************************/

function AjaxGetMaterialDetails()
 {
global $objSmarty,$config;
$tbl = $config['DBPrefix'];
		 $SelQuery = 'SELECT * FROM `arka_product_master` WHERE item_name ="'.$_GET['item_name'].'" ';
		 $LDList   = $this->ExecuteQuery($SelQuery, "select");
		foreach($LDList as $keys=>$value)
		{
		 echo $LDList[$keys]["item_code"]."_".$LDList[$keys]["item_category"]."_".$LDList[$keys]["item_category_code"]."_".$LDList[$keys]["item_description"]."_".$LDList[$keys]["consumer_basic"]."|$|";
		}
}
 
 
 
function Getsupplier($objArray='')
 {
 	global $objSmarty;
	 $whereClause = '';
  /* if($_POST['search'] == ''){
  			if($_POST['supplier_name'])
	   			$whereClause = ' WHERE (`supplier_name` like "%'.$_POST['supplier_name'].'%")';
   			elseif($_POST['supplier_code'])	
                $whereClause = ' WHERE (`supplier_code` like "%'.$_POST['supplier_code'].'%")';
		}*/
	$SelQuery3	= 'SELECT * FROM `arka_vendor_master` WHERE status="1"';
	 $listing_split2 = new MsplitPageResults($SelQuery3, $this->Limit);
  if ( ($listing_split2->number_of_rows > 0) )  {
   $objSmarty->assign('LinkPage2',$listing_split2->display_count(TEXT_DISPLAY_NUMBER_OF_RESULT));
   $objSmarty->assign('PerPageNavigation2',TEXT_RESULT_PAGE1 . ' ' . $listing_split2->display_links($this->Limit, get_all_get_params(array('page', 'info', 'x', 'y')))); 
	  $PageList5 = $this->ExecuteQuery($SelQuery3, 'selectassoc');
 }   
 $objSmarty->assign('j', $listing_split2->j);
 $objSmarty->assign('PageList5', $PageList5); 
// print_r($PageList5);
 return $PageList5;
 }
 
 
  /* Get the Static Content list */
 	function GetStockInwardView($objArray='')  {
		global $objSmarty;
		$objSmarty->assign('c_id',$_GET['inward_entry_id']);
		$SelQuery = 'SELECT * FROM `arka_inward_master` WHERE inward_entry_id ="'.$_GET['inward_entry_id'].'"' ;
		//echo $SelQuery;
		$LDList		= $this->ExecuteQuery($SelQuery, "select");
		$SelQuery_on_tax_details = 'SELECT * FROM `arka_inward_tax_details` WHERE inward_entry_id ="'.$_GET['inward_entry_id'].'"' ;
		$LDList_on_tax_details		= $this->ExecuteQuery($SelQuery_on_tax_details, "select");
		$total_records = count($LDList);
		$record_per_page = $this->Limit;
		
		$objSmarty->assign("TList1",$_GET['cust_id']);
		/*$LDList[0]['title'] 		= stripslashes($LDList[0]['title']);
		$LDList[1]['txttitle'] 		= stripslashes($LDList[1]['txttitle']);
		$LDList[2]['image'] 		= stripslashes($LDList[2]['image']);*/
		 if(!empty($LDList) && is_array($LDList))
		{
			$objSmarty->assign("LDList2",$LDList);
			$objSmarty->assign("LDList_on_tax_details",$LDList_on_tax_details);
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

    
   		foreach($objArray['ConId'] as $key => $value)
		{


   if(!$objArray[$value]['material_type_edit']){
    $objSmarty->assign('ErrorMessage_on_edit', 'Material Type should not be blank');
	return false;
   }elseif(!$objArray[$value]['material_category_edit']){
    $objSmarty->assign('ErrorMessage_on_edit', 'Material Category should not be blank');
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
	
	
		 $SelQuery_on_stock	= 'SELECT * FROM `arka_stock_master` WHERE `material_type` ="'.trim(addslashes($objArray[$value]['material_type_edit'])).'" && `material_category` ="'.trim(addslashes($objArray[$value]['material_category_edit'])).'" &&  `material_name` ="'.trim(addslashes($objArray[$value]['material_name_edit'])).'" &&  `unit_price` ="'.trim(addslashes($objArray[$value]['price_edit'])).'" && `material_code` ="'.trim(addslashes($objArray[$value]['material_code_edit'])).'"';
	  $RList		= $this->ExecuteQuery($SelQuery_on_stock, "select");
		
	$SelQuery_on_details	= 'SELECT * FROM `arka_inward_details` WHERE `sl_no` ="'.trim(addslashes($value)).'"';
	$dtl_List		= $this->ExecuteQuery($SelQuery_on_details, "select");	
	if($dtl_List[0]['quantity']>$objArray[$value]['quantity_edit'])
	{
	$dfrnce_for_cmprsn=$dtl_List[0]['quantity']-$objArray[$value]['quantity_edit'];
	}
	elseif($objArray[$value]['quantity_edit']>$dtl_List[0]['quantity'])
	{
	$dfrnce_for_cmprsn=$objArray[$value]['quantity_edit']-$dtl_List[0]['quantity'];
	}
	elseif($objArray[$value]['quantity_edit']==$dtl_List[0]['quantity'])
	{
	$dfrnce_for_cmprsn=0;
	}
	
		
  if($RList[0]['material_type'])
  {
  
   if($dfrnce_for_cmprsn <= $RList[0]['quantity'] )
   {
    

	if($dtl_List[0]['quantity']==$objArray[$value]['quantity_edit'])
	{ 
	   	
	$UpQuery = 'UPDATE `arka_inward_details` SET `material_type` = "'.$objArray[$value]['material_type_edit'].'", `material_category` = "'.$objArray[$value]['material_category_edit'].'",`material_code` = "'.$objArray[$value]['material_code_edit'].'", `material_specification` = "'.$objArray[$value]['material_specification_edit'].'", `material_name` = "'.$objArray[$value]['material_name_edit'].'", `price` = "'.$objArray[$value]['price_edit'].'", `quantity` = "'.$objArray[$value]['quantity_edit'].'" WHERE `sl_no` ="'.$value.'"';
	$this->ExecuteQuery($UpQuery, 'update');

	}
	elseif($dtl_List[0]['quantity'] < $objArray[$value]['quantity_edit'])
	{
	$differnce_from_detail=$objArray[$value]['quantity_edit']-$dtl_List[0]['quantity'];
	$quantity=$RList[0]['quantity']+$differnce_from_detail;
	$update_total=$quantity*$RList[0]['unit_price'];
	$UpQuery_on_stock = 'UPDATE `arka_stock_master` SET `material_type` = "'.$objArray[$value]['material_type_edit'].'", `material_category` = "'.$objArray[$value]['material_category_edit'].'", `material_name` = "'.$objArray[$value]['material_name_edit'].'",`material_code` = "'.$objArray[$value]['material_code_edit'].'", `unit_price` = "'.$objArray[$value]['price_edit'].'", `quantity` = "'.$quantity.'", `total` = "'.$update_total.'" WHERE `sl_no` ="'.$RList[0]['sl_no'].'"';
	$this->ExecuteQuery($UpQuery_on_stock, 'update');
	
	
		$UpQuery = 'UPDATE `arka_inward_details` SET `material_type` = "'.$objArray[$value]['material_type_edit'].'", `material_category` = "'.$objArray[$value]['material_category_edit'].'",`material_code` = "'.$objArray[$value]['material_code_edit'].'", `material_specification` = "'.$objArray[$value]['material_specification_edit'].'", `material_name` = "'.$objArray[$value]['material_name_edit'].'", `price` = "'.$objArray[$value]['price_edit'].'", `quantity` = "'.$objArray[$value]['quantity_edit'].'" WHERE `sl_no` ="'.$value.'"';
	$this->ExecuteQuery($UpQuery, 'update');

	
	}
	elseif($dtl_List[0]['quantity'] > $objArray[$value]['quantity_edit'])
	{
	$differnce_from_detail=$dtl_List[0]['quantity']-$objArray[$value]['quantity_edit'];
	$quantity=$RList[0]['quantity']-$differnce_from_detail;
	$update_total=$quantity*$RList[0]['unit_price'];
	$UpQuery_on_stock = 'UPDATE `arka_stock_master` SET `material_type` = "'.$objArray[$value]['material_type_edit'].'", `material_category` = "'.$objArray[$value]['material_category_edit'].'", `material_name` = "'.$objArray[$value]['material_name_edit'].'",`material_code` = "'.$objArray[$value]['material_code_edit'].'", `unit_price` = "'.$objArray[$value]['price_edit'].'", `quantity` = "'.$quantity.'", `total` = "'.$update_total.'" WHERE `sl_no` ="'.$RList[0]['sl_no'].'"';
	$this->ExecuteQuery($UpQuery_on_stock, 'update');
	
	
		$UpQuery = 'UPDATE `arka_inward_details` SET `material_type` = "'.$objArray[$value]['material_type_edit'].'", `material_category` = "'.$objArray[$value]['material_category_edit'].'",`material_code` = "'.$objArray[$value]['material_code_edit'].'", `material_specification` = "'.$objArray[$value]['material_specification_edit'].'", `material_name` = "'.$objArray[$value]['material_name_edit'].'", `price` = "'.$objArray[$value]['price_edit'].'", `quantity` = "'.$objArray[$value]['quantity_edit'].'" WHERE `sl_no` ="'.$value.'"';
	$this->ExecuteQuery($UpQuery, 'update');

	
	}
		
  }
  else
  {
  $objSmarty->assign('ErrorMessage_on_edit', 'Sorry "'.$RList[0]['quantity'].'"stock only available');
  $this->GetInwardDetailsView();
  return false;
  }
   } 
   
  else
  {
  $objSmarty->assign('ErrorMessage_on_edit', 'Sorry the stock is not available');
  $this->GetInwardDetailsView();
  return false;
  }
   		
   }
   
	
  }
  else
  {
  $objSmarty->assign('ErrorMessage_on_edit', 'Please select a check box to update');
  $this->GetInwardDetailsView();
  return false;
  }	
  
  //	$objSmarty->assign('SuccessMessage_on_edit', 'Inward Details Updated Successfully');
	//$this->GetInwardDetailsView();
	$url_addtnal_data=base64_encode("Inward Details Updated Successfully");
    header('location:'.$_SERVER['PHP_SELF']."?sm_on_del=".$url_addtnal_data."&inward_entry_id=".$_GET['inward_entry_id']);
  	
 }
 
 
 
  function list_inward_details()
 {
 global $objSmarty;
 $objSmarty->assign('listing_id',$_REQUEST['inward_entry_id']);
 
  $select_query2='SELECT SUM(tot) AS s_tot FROM `arka_inward_details` WHERE inward_entry_id = "'.$_REQUEST['inward_entry_id'].'" && `record_status`=1';
 $execute_query2		= $this->ExecuteQuery($select_query2, "select");//echo $execute_query[0]['s_tot'];
  $objSmarty->assign('execute_query2',$execute_query2);
 
   $select_query3='SELECT SUM(gst_cal) AS gst_cal_tot FROM `arka_inward_details` WHERE inward_entry_id = "'.$_REQUEST['inward_entry_id'].'" && `record_status`=1';
 $execute_query3		= $this->ExecuteQuery($select_query3, "select");  //echo $execute_query3[0]['gst_cal_tot'];
  $objSmarty->assign('execute_query3',$execute_query3);
  
   $select_query4='SELECT SUM(total) AS sum_total FROM `arka_inward_details` WHERE inward_entry_id = "'.$_REQUEST['inward_entry_id'].'" && `record_status`=1';
 $execute_query4		= $this->ExecuteQuery($select_query4, "select");  //echo $execute_query4[0]['sum_total'];
  $objSmarty->assign('execute_query4',$execute_query4);
  
   $select_query6='SELECT frieght_charges FROM `arka_inward_master` WHERE inward_entry_id = "'.$_REQUEST['inward_entry_id'].'" && `record_status`=1';
 $execute_query6		= $this->ExecuteQuery($select_query6, "select");  //echo $execute_query4[0]['sum_total'];
  $objSmarty->assign('execute_query6',$execute_query6);
 
    $select_query5='SELECT SUM(total_amount_fc	) AS total_fc_amount FROM `arka_inward_details` WHERE inward_entry_id = "'.$_REQUEST['inward_entry_id'].'" && `record_status`=1';
 $execute_query5		= $this->ExecuteQuery($select_query5, "select");  //echo $execute_query5[0]['total_fc_amount'];
  $objSmarty->assign('execute_query5',$execute_query5);


 
 $select_query='SELECT * FROM `arka_inward_details` WHERE inward_entry_id = "'.$_REQUEST['inward_entry_id'].'" && `record_status`=1';
 $execute_query		= $this->ExecuteQuery($select_query, "select");
 $objSmarty->assign('inward_details_list',$execute_query);
 $row_count=count($execute_query);
 if(!$row_count==00)
 $objSmarty->assign('hide_criteria','fgj');
 else
 $objSmarty->assign('hide_criteria','');
 
 }
 
 
 
 
  /* Get the Static Content list */
 function GetStockLists($objArray=''){
  global $objSmarty;

  //$objSmarty->assign('title',$_GET['title']);
  $whereClause = 'where `status` =1 && `region`="'.$_SESSION['Region'].'" ORDER BY inward_entry_id';
  
  if($_POST['search'] == ''){
  			if($_POST['inward_entry_id'])
	   			$whereClause = ' WHERE (`inward_entry_id` like "%'.$objArray['inward_entry_id'].'%") AND `status` =1 && `region`="'.$_SESSION['Region'].'" ORDER BY inward_entry_id';	
	   		elseif($_POST['date_of_entry'])
	   			$whereClause = ' WHERE (`date_of_entry` like "%'.$objArray['date_of_entry'].'%") AND `status` =1 && `region`="'.$_SESSION['Region'].'" ORDER BY inward_entry_id';
			elseif($_POST['dc_date'])
	   			$whereClause = ' WHERE (`dc_date` like "%'.$objArray['dc_date'].'%") AND `status` =1 && `region`="'.$_SESSION['Region'].'" ORDER BY inward_entry_id';								
			elseif($_POST['dc_no'])
				$whereClause = ' WHERE (`dc_no` like "%'.$objArray['dc_no'].'%") AND `status` =1 && `region`="'.$_SESSION['Region'].'" ORDER BY inward_entry_id';
			elseif($_POST['supplier_name'])
				$whereClause = ' WHERE (`supplier_name` like "%'.$objArray['supplier_name'].'%") AND `status` =1 && `region`="'.$_SESSION['Region'].'" ORDER BY inward_entry_id';
			elseif($_POST['invoice_date'])
				$whereClause = ' WHERE (`invoice_date` like "%'.$objArray['invoice_date'].'%") AND `status` =1 && `region`="'.$_SESSION['Region'].'" ORDER BY inward_entry_id';
			elseif($_POST['invoice_amt'])
				$whereClause = ' WHERE (`invoice_amount` like "%'.$objArray['invoice_amt'].'%") AND `status` =1 && `region`="'.$_SESSION['Region'].'" ORDER BY inward_entry_id';
			elseif($_POST['tax_value'])
				$whereClause = ' WHERE (`tax` like "%'.$objArray['tax_value'].'%") AND `status` =1 && `region`="'.$_SESSION['Region'].'" ORDER BY inward_entry_id';
			elseif($_POST['total'])
				$whereClause = ' WHERE (`total` like "%'.$objArray['total'].'%") AND `status` =1 && `region`="'.$_SESSION['Region'].'" ORDER BY inward_entry_id';
			elseif($_POST['region'])
				$whereClause = ' WHERE (`region` like "%'.$objArray['region'].'%") AND `status` =1 && `region`="'.$_SESSION['Region'].'" ORDER BY inward_entry_id';
			elseif($_POST['status'])
				$whereClause = ' WHERE (`status` like "%'.$objArray['status'].'%") AND `status` =1 && `region`="'.$_SESSION['Region'].'" ORDER BY inward_entry_id';																
				
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
  $SelQuery		= 'SELECT * FROM `arka_inward_master`'.$whereClause;
  $listing_split3 = new MsplitPageResults($SelQuery, $this->Limit);
  if ( ($listing_split3->number_of_rows > 0) )  {
   $objSmarty->assign('LinkPage3',$listing_split3->display_count(TEXT_DISPLAY_NUMBER_OF_RESULT));
   $objSmarty->assign('PerPageNavigation3',TEXT_RESULT_PAGE1 . ' ' . $listing_split3->display_links_submit($this->Limit, get_all_get_params(array('page', 'info', 'x', 'y')))); 
   $PageList = $this->ExecuteQuery($listing_split3->sql_query, 'selectassoc');
   
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

  $objSmarty->assign('k', $listing_split->k);
  $objSmarty->assign('PageList', $PageList);
  return $PageList;
 
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
			$objSmarty->assign('LinkPage5',$listing_split->display_count(TEXT_DISPLAY_NUMBER_OF_RESULT));
			$objSmarty->assign('PerPageNavigation5',TEXT_RESULT_PAGE1 . ' ' . $listing_split->display_links($this->Limit, get_all_get_params(array('page', 'info', 'x', 'y')))); 
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
			$objSmarty->assign('m', $listing_split->m);
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
 

 /* Delete the Static Page */
 function DeleteID($deleid){
  global $objSmarty;
  
  $SelQuery_on_inward_detail		= 'SELECT * FROM `arka_inward_details` WHERE `inward_entry_id` = "'.$deleid.'" AND `status`=1';
  $Detail_on_inward_detail		= $this->ExecuteQuery($SelQuery_on_inward_detail, 'select');

 // print_r($Detail_on_inward_detail); 
 foreach($Detail_on_inward_detail as $key=>$value)
  {
     $SelQuery_on_stock		= 'SELECT * FROM `arka_stock_master` WHERE `region` = "'.$Detail_on_inward_detail[$key]['region'].'" && `material_type` = "'.$Detail_on_inward_detail[$key]['material_type'].'"&& `material_category` = "'.$Detail_on_inward_detail[$key]['material_category'].'"&& `material_name` = "'.$Detail_on_inward_detail[$key]['material_name'].'"&& `material_code` = "'.$Detail_on_inward_detail[$key]['material_code'].'"&& `supplier_code` = "'.$Detail_on_inward_detail[$key]['supplier_code'].'"&& `supplier_name` = "'.$Detail_on_inward_detail[$key]['supplier_name'].'"&& `unit_price` = "'.$Detail_on_inward_detail[$key]['price'].'"';
  $Detail_on_stock		= $this->ExecuteQuery($SelQuery_on_stock, 'select'); 
 // print_r($Detail_on_stock);
  if($Detail_on_stock[0]['quantity']>=$Detail_on_inward_detail[$key]['quantity'])
  {
 $process_flag=1;
 // echo $Detail_on_stock[0]['quantity'];
 // echo $Detail_on_inward_detail[$key]['quantity'];
  $SelQuery_on_stock		= 'SELECT * FROM `arka_stock_master` WHERE `region` = "'.$Detail_on_inward_detail[$key]['region'].'" && `material_type` = "'.$Detail_on_inward_detail[$key]['material_type'].'"&& `material_category` = "'.$Detail_on_inward_detail[$key]['material_category'].'"&& `material_name` = "'.$Detail_on_inward_detail[$key]['material_name'].'"&& `material_code` = "'.$Detail_on_inward_detail[$key]['material_code'].'"&& `supplier_code` = "'.$Detail_on_inward_detail[$key]['supplier_code'].'"&& `supplier_name` = "'.$Detail_on_inward_detail[$key]['supplier_name'].'"&& `unit_price` = "'.$Detail_on_inward_detail[$key]['price'].'"';
  $Detail_on_stock		= $this->ExecuteQuery($SelQuery_on_stock, 'select'); 
  $update_quantity=$Detail_on_stock[0]['quantity']-$Detail_on_inward_detail[$key]['quantity'];
  $update_total=$update_quantity*$Detail_on_stock[0]['unit_price'];
   $UpQuery_on_stock = 'UPDATE `arka_stock_master` set `quantity`="'.$update_quantity.'",`total`="'.$update_total.'"  WHERE `material_type` = "'.$Detail_on_inward_detail[$key]['material_type'].'"&& `material_category` = "'.$Detail_on_inward_detail[$key]['material_category'].'"&& `material_name` = "'.$Detail_on_inward_detail[$key]['material_name'].'"&& `material_code` = "'.$Detail_on_inward_detail[$key]['material_code'].'"&& `supplier_code` = "'.$Detail_on_inward_detail[$key]['supplier_code'].'"&& `supplier_name` = "'.$Detail_on_inward_detail[$key]['supplier_name'].'"&& `unit_price` = "'.$Detail_on_inward_detail[$key]['price'].'"';
  $this->ExecuteQuery($UpQuery_on_stock, 'update');
  
  $InsQuery_to_temp_tbl = 'INSERT INTO `arka_temporary_inward_stock_master`(`region`,`inward_entry_id`,`material_type`,`material_category`,`material_code`,`material_name`,`material_specification`,`supplier_name`,`supplier_code`,`price`,`quantity`) VALUES("'.trim(addslashes($Detail_on_inward_detail[$key]['region'])).'","'.trim(addslashes($Detail_on_inward_detail[$key]['inward_entry_id'])).'","'.trim(addslashes($Detail_on_inward_detail[$key]['material_type'])).'","'.trim(addslashes($Detail_on_inward_detail[$key]['material_category'])).'","'.trim(addslashes($Detail_on_inward_detail[$key]['material_code'])).'","'.trim(addslashes($Detail_on_inward_detail[$key]['material_name'])).'","'.trim(addslashes($Detail_on_inward_detail[$key]['material_specification'])).'","'.trim(addslashes($Detail_on_inward_detail[$key]['supplier_name'])).'","'.trim(addslashes($Detail_on_inward_detail[$key]['supplier_code'])).'","'.trim(addslashes($Detail_on_inward_detail[$key]['price'])).'","'.trim(addslashes($Detail_on_inward_detail[$key]['quantity'])).'")';
 $this->ExecuteQuery($InsQuery_to_temp_tbl, 'insert');  
  
 
  }
  else
  {
 
  $SelQuery_on_temp_tbl		= 'SELECT * FROM `arka_temporary_inward_stock_master` WHERE `inward_entry_id` = "'.$_REQUEST['deleid'].'"';
  $Detail_on_inward_stock_master = $this->ExecuteQuery($SelQuery_on_temp_tbl, 'select');
   foreach($Detail_on_inward_stock_master as $key=>$value)
  {
     $SelQuery_on_stock		= 'SELECT * FROM `arka_stock_master` WHERE `region` = "'.$Detail_on_inward_stock_master[$key]['region'].'" && `material_type` = "'.$Detail_on_inward_stock_master[$key]['material_type'].'"&& `material_category` = "'.$Detail_on_inward_stock_master[$key]['material_category'].'"&& `material_name` = "'.$Detail_on_inward_stock_master[$key]['material_name'].'"&& `material_code` = "'.$Detail_on_inward_stock_master[$key]['material_code'].'"&& `supplier_code` = "'.$Detail_on_inward_stock_master[$key]['supplier_code'].'"&& `supplier_name` = "'.$Detail_on_inward_stock_master[$key]['supplier_name'].'"&& `unit_price` = "'.$Detail_on_inward_stock_master[$key]['price'].'"';
  $Detail_on_stock		= $this->ExecuteQuery($SelQuery_on_stock, 'select'); 
  
  $update_quantity=$Detail_on_stock[0]['quantity']+$Detail_on_inward_stock_master[$key]['quantity'];
  $update_total=$update_quantity*$Detail_on_stock[0]['unit_price'];
   $UpQuery_on_stock = 'UPDATE `arka_stock_master` set `quantity`="'.$update_quantity.'",`total`="'.$update_total.'"  WHERE `material_type` = "'.$Detail_on_inward_stock_master[$key]['material_type'].'"&& `material_category` = "'.$Detail_on_inward_stock_master[$key]['material_category'].'"&& `material_name` = "'.$Detail_on_inward_stock_master[$key]['material_name'].'"&& `material_code` = "'.$Detail_on_inward_stock_master[$key]['material_code'].'"&& `supplier_code` = "'.$Detail_on_inward_stock_master[$key]['supplier_code'].'"&& `supplier_name` = "'.$Detail_on_inward_stock_master[$key]['supplier_name'].'"&& `unit_price` = "'.$Detail_on_inward_stock_master[$key]['price'].'"';
  $this->ExecuteQuery($UpQuery_on_stock, 'update');
  
  }
 $DelQuery = 'DELETE FROM `arka_temporary_inward_stock_master` WHERE `inward_entry_id`="'.$_REQUEST['deleid'].'"';
 $this->ExecuteQuery($DelQuery, 'delete');
  $objSmarty->assign('ErrorMessage', 'Less No Of Stocks Only Available!!! Please Return the Stocks taken as Outward');
  return false;
  
  }	
   
  }


  $DelQuery = 'UPDATE `arka_inward_master` set status ="0" WHERE `inward_entry_id`="'.$_REQUEST['deleid'].'"';
  $this->ExecuteQuery($DelQuery, 'update');
  $DelQuery2 = 'UPDATE `arka_inward_details` set status ="0" WHERE `inward_entry_id`="'.$_REQUEST['deleid'].'"';
  $this->ExecuteQuery($DelQuery2, 'update');

  $current_date=date("Y-m-d");
   $InsQuery4 = 'INSERT INTO `arka_deleted_records`(`deleted_data`, `deleted_table`, `deleted_by`,`deleted_date`) VALUES("'.$_REQUEST['deleid'].'","arka_inward_master","'.$_SESSION['UserName'].'","'.$current_date.'")';
   $DelQuery = 'DELETE FROM `arka_temporary_inward_stock_master` WHERE `inward_entry_id`="'.$_REQUEST['deleid'].'"';
 $this->ExecuteQuery($DelQuery, 'delete');
	 $this->ExecuteQuery($InsQuery4, 'insert');
	// $objSmarty->assign('SuccessMessage', 'Inward Details Deleted Successfully');
	    $url_addtnal_data=base64_encode("Inward Details Deleted Successfully");
    header('location:'.$_SERVER['PHP_SELF']."?sm=".$url_addtnal_data);
  

	
	
	
 }

 
 
 /*function listing_ajax($objarray)
 {

   global $objSmarty;

	//if($_POST['inward_entry_id'])
	   			//$whereClause = ' WHERE (`inward_entry_id` like "%'.$_POST['inward_entry_id'].'%") AND `status` =1 ORDER BY inward_entry_id';	
switch($_GET['name']){
    case date_of_entry:
  $whereClause = ' WHERE (`date_of_entry` like "%'.$objarray['date_of_entry'].'%") AND `record_status` =1 ORDER BY inward_entry_id';
  break;
 case dc_no:
$whereClause = ' WHERE (`dc_no` like "%'.$objarray['dc_no'].'%") AND `record_status` =1 ORDER BY inward_entry_id';
  break;
     case supplier_name:
$whereClause = ' WHERE (`supplier_name` like "%'.$objarray['supplier_name'].'%") AND `record_status` =1 ORDER BY inward_entry_id';
  break;
         case supplier_code:
$whereClause = ' WHERE (`supplier_code` like "%'.$objarray['supplier_code'].'%") AND `record_status` =1 ORDER BY inward_entry_id';
  break;
             case total:
$whereClause = ' WHERE (`total` like "%'.$objarray['total'].'%") AND `record_status` =1 ORDER BY inward_entry_id';
  break;
                 case region:
$whereClause = ' WHERE (`region` like "%'.$objarray['region'].'%") AND `record_status` =1 ORDER BY inward_entry_id';																
  break;
default :
$whereClause = ''; 

}
  $SelQuery		= 'SELECT * FROM `arka_inward_master`'.$whereClause;
  
  $listing_split = new MsplitPageResults($SelQuery, $this->Limit);
  if ( ($listing_split->number_of_rows > 0) )  {
   $objSmarty->assign('LinkPage6',$listing_split->display_count(TEXT_DISPLAY_NUMBER_OF_RESULT));
   $objSmarty->assign('PerPageNavigation6',TEXT_RESULT_PAGE1 . ' ' . $listing_split->display_links($this->Limit, get_all_get_params(array('page', 'info', 'x', 'y')))); 
   $PageList = $this->ExecuteQuery($listing_split->sql_query, 'selectassoc');
   
  }



  
 // $objSmarty->assign('i', $listing_split->i);
  //$objSmarty->assign('PageList', $PageList);
  return $PageList;    
     
    
 }
*/ 
 
 
 
 function InsertStockContent_from_edit_page($objArray){
   global $objSmarty,$_POST;
   
//$config['time'] = '%I:%M:%S %p';
//$tim = {$smarty.now|date_format:'%H:%M:%S'}
//echo  $date->format( 'h:i:s A' );
//$objSmarty->assign('Time', $date->format( 'h:i:s A' ));

 //if($this->ChkDupliCust(trim(addslashes($objArray['c_id'])))){

	if(!$objArray['selection_reg'])
	{
	$objSmarty->assign('ErrorMessage', 'Region Should be Selected Properly');
	return false;
	}elseif(!$objArray['tax_percentage']){
    $objSmarty->assign('ErrorMessage', 'Percentage should not be blank');
	return false;
   }
   elseif(!$objArray['inward_entry_id']){
    $objSmarty->assign('ErrorMessage', 'Inward Entry Id should not be blank');
	return false;
   }elseif(!$objArray['supplier_name']){
    $objSmarty->assign('ErrorMessage', 'Supplier Name should not be blank');
	return false;
   }/*elseif(!$objArray['dc_no']){
    $objSmarty->assign('ErrorMessage', 'DC No should not be blank');
	return false;
   }elseif(!$objArray['invoice_no']){
    $objSmarty->assign('ErrorMessage', 'Invoice No should not be blank');
	return false;
   }*/elseif(!$objArray['date_of_entry']){
    $objSmarty->assign('ErrorMessage', 'Date Of Entry should not be blank');
	
	return false;
   }elseif(!$objArray['supplier_code']){
    $objSmarty->assign('ErrorMessage', 'Supplier Code should not be blank');
	
	return false;
   }/*elseif(!$objArray['dc_date']){
    $objSmarty->assign('ErrorMessage', 'DC Date should not be blank');
	return false;
   }elseif(!$objArray['invoice_date']){
    $objSmarty->assign('ErrorMessage', 'Invoice Date should not be blank');
	return false;
   }elseif(!$objArray['frieght_charges']){
    $objSmarty->assign('ErrorMessage', 'Frieght charges should not be blank');
	return false;
   }*//*elseif(!$objArray['total']){
    $objSmarty->assign('ErrorMessage', 'Total should not be blank');
	return false;
   }*/elseif(!$objArray['material_type']){
    $objSmarty->assign('ErrorMessage', 'Material Type should be selected properly');
	$objSmarty->assign('make_read_only', 'readonly');
	return false;
   }elseif(!$objArray['material_category']){
    $objSmarty->assign('ErrorMessage', 'Material Category should be selected properly');
	$objSmarty->assign('make_read_only', 'readonly');
	
	return false;
   }elseif(!$objArray['material_name']){
    $objSmarty->assign('ErrorMessage', 'Material Name should not be blank');
	$objSmarty->assign('make_read_only', 'readonly');
	
	return false;
   }/*elseif(!$objArray['price']){
    $objSmarty->assign('ErrorMessage', 'Price should not be blank');
	$objSmarty->assign('make_read_only', 'readonly');
	return false;
   }elseif(!preg_match("/^[0-9]{1,}$/",$objArray['price']))
   {
   $objSmarty->assign('ErrorMessage','Please Verify the Price Once');
   return false;
   }*/elseif(!$objArray['material_code']){
    $objSmarty->assign('ErrorMessage', 'Material Code should not be blank');
	$objSmarty->assign('make_read_only', 'readonly');
	
	return false;
   }elseif(!$objArray['quantity']){
    $objSmarty->assign('ErrorMessage', 'Quantity should not be blank');
	$objSmarty->assign('make_read_only', 'readonly');
	
	return false;
   }elseif(!preg_match("/^[0-9]{1,}$/",$objArray['quantity'])){
   $objSmarty->assign('ErrorMessage','Quantity Should Be Numbers');
   $objSmarty->assign('make_read_only', 'readonly');
   
   return false;
   }
 $DelQuery = 'DELETE FROM `arka_inward_tax_details` WHERE `inward_entry_id`="'.$objArray['inward_entry_id'].'"';
 $this->ExecuteQuery($DelQuery, 'delete');
  foreach($objArray['tax_percentage'] as $key=>$value)
   {
  $total_percentage=$total_percentage+$value;

 $InsQuery = 'INSERT INTO `arka_inward_tax_details`(`inward_entry_id`, `tax_name`, `tax_percentage`) VALUES("'.trim(addslashes($objArray['inward_entry_id'])).'","'.$key.'","'.$value.'")';
 $this->ExecuteQuery($InsQuery, 'insert'); 
  }  


	 $SelQuery_on_inward_master	= 'SELECT * FROM `arka_inward_master` WHERE `inward_entry_id` ="'.trim(addslashes($objArray['inward_entry_id'])).'" ';
	  $RList_from_inward_master		= $this->ExecuteQuery($SelQuery_on_inward_master, "select");	
$invoice_amount=$objArray['price']*$objArray['quantity'];
$update_invoice_amt_for_master=$RList_from_inward_master[0]['invoice_amount']+$invoice_amount;	
$update_tax_amount_for_current_data=$invoice_amount*$total_percentage/100;
$update_tax_amount_for_all_data=$update_invoice_amt_for_master*$total_percentage/100;
//$update_tax_for_master=$RList_from_inward_master[0]['tax']+$update_tax_amount_for_current_data;	
$update_total_for_master=$update_invoice_amt_for_master+$objArray['frieght_charges']+$update_tax_amount_for_all_data;

$update_query_for_inward_master='UPDATE `arka_inward_master` SET `dc_no` ="'.trim(addslashes($objArray['dc_no'])).'",`dc_date` ="'.trim(addslashes($objArray['dc_date'])).'",`invoice_no` ="'.trim(addslashes($objArray['invoice_no'])).'",`supplier_name` ="'.trim(addslashes($objArray['supplier_name'])).'",`supplier_code` ="'.trim(addslashes($objArray['supplier_code'])).'",`invoice_date` ="'.trim(addslashes($objArray['invoice_date'])).'",`frieght_charges` ="'.trim(addslashes($objArray['frieght_charges'])).'",`total` ="'.$update_total_for_master.'",`invoice_amount`="'.$update_invoice_amt_for_master.'",`tax`="'.$update_tax_amount_for_all_data.'",`tax_percentage`="'.$total_percentage.'" WHERE `inward_entry_id` ="'.trim(addslashes($objArray['inward_entry_id'])).'"';

$this->ExecuteQuery($update_query_for_inward_master,"update");
   
	
$total_to_inward_details=$objArray['price']*$objArray['quantity'];
   $InsQuery2 = 'INSERT INTO `arka_inward_details`(`material_type`, `material_category`, `inward_entry_id`, `material_name`, `material_specification`, `price`, `created_by`, `material_code`,`quantity`,`warranty_period`,`status`,`total`,`region`,`supplier_name`,`supplier_code`) VALUES("'.trim(addslashes($objArray['material_type'])).'","'.trim(addslashes($objArray['material_category'])).'","'.trim(addslashes($objArray['inward_entry_id'])).'","'.trim(addslashes($objArray['material_name'])).'","'.trim(addslashes($objArray['material_specification'])).'","'.trim(addslashes($objArray['price'])).'","'.$_SESSION['UserName'].'","'.trim(addslashes($objArray['material_code'])).'","'.trim(addslashes($objArray['quantity'])).'","'.trim(addslashes($objArray['warranty_period'])).'",1,"'.trim(addslashes($total_to_inward_details)).'","'.trim(addslashes($objArray['selection_reg'])).'","'.trim(addslashes($objArray['supplier_name'])).'","'.trim(addslashes($objArray['supplier_code'])).'")';
  	 $this->ExecuteQuery($InsQuery2, 'insert');	
	
	 $SelQuery_on_stock	= 'SELECT * FROM `arka_stock_master` WHERE `material_type` ="'.trim(addslashes($objArray['material_type'])).'" && `material_category` ="'.trim(addslashes($objArray['material_category'])).'" &&  `material_name` ="'.trim(addslashes($objArray['material_name'])).'" && `material_code` ="'.trim(addslashes($objArray['material_code'])).'" && `unit_price` ="'.trim(addslashes($objArray['price'])).'"&& `supplier_code` ="'.trim(addslashes($objArray['supplier_code'])).'"&& `supplier_name` ="'.trim(addslashes($objArray['supplier_name'])).'"';
	  $RList		= $this->ExecuteQuery($SelQuery_on_stock, "select");
	

if(!is_null($RList[0]['material_code']))
	  {
	  
	  $update_quantity=$objArray['quantity']+$RList[0]['quantity'];
	  $update_total=$RList[0]['unit_price']*$update_quantity;
$update_query='UPDATE `arka_stock_master` SET `quantity` ="'.trim(addslashes($update_quantity)).'",`total`="'.trim(addslashes($update_total)).'" WHERE `material_code` ="'.$RList[0]['material_code'].'" && `unit_price` ="'.$RList[0]['unit_price'].'" && `supplier_code` ="'.$RList[0]['supplier_code'].'" && `supplier_name` ="'.$RList[0]['supplier_name'].'"';
$this->ExecuteQuery($update_query,"update");
	  }
	else
	{
  	$total=$objArray['price']*$objArray['quantity'];
  $InsQuery_to_stock_master = 'INSERT INTO `arka_stock_master`(`material_type`, `material_category`, `material_code`, `material_name`, `supplier_name`, `supplier_code`, `quantity`, `unit_price`,`total`) VALUES("'.trim(addslashes($objArray['material_type'])).'","'.trim(addslashes($objArray['material_category'])).'","'.trim(addslashes($objArray['material_code'])).'","'.trim(addslashes($objArray['material_name'])).'","'.trim(addslashes($objArray['supplier_name'])).'","'.trim(addslashes($objArray['supplier_code'])).'","'.trim(addslashes($objArray['quantity'])).'","'.trim(addslashes($objArray['price'])).'","'.trim(addslashes($total)).'")';
  	 $this->ExecuteQuery($InsQuery_to_stock_master, 'insert');
	}

	 
/*	$oFCKeditor->Value		= '';*/
	$objSmarty->assign('Cc_id',$objArray['c_id']);
	$objSmarty->assign('c_id', '');
	$objSmarty->assign('make_read_only', 'readonly');
	$objSmarty->assign('hide_tax_details', '1');
	$objSmarty->assign('posted_tax_details', $objArray['tax_percentage']);
	$objSmarty->assign('SuccessMessage', 'Inward Details Added Successfully');
	$this->GetInwardDetailsView();
	
  /*  $url_addtnal_data=base64_encode("Inward Details Added Successfully");
    header('location:'.$_SERVER['PHP_SELF']."?sm=".$url_addtnal_data."&inward_entry_id=".$objArray['inward_entry_id']."&make_read_only="."make_read_only"."&dc_no=".$objArray['dc_no']."&invoice_no=".$objArray['invoice_no']."&frieght_charges=".$objArray['frieght_charges']."&dc_date=".$objArray['dc_date']."&invoice_date=".$objArray['invoice_date']);*/
	return true;
	
	//PrePopulate($objArray, 'CusDetail');
	  
 // }
 }
 
 
 
 }
 ?>
