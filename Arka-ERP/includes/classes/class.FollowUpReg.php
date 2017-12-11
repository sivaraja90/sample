<?php
#####Class For Adding Content Management ######
class FollowUpReg extends MysqlFns{
 
 /* class constructor */
 function FollowUpReg(){
 $this->LDDisplayPath= $config['SiteGlobalPath']."class.FollowUpReg.php";
  global $config;global $objSmarty,$config;
$tbl = $config['DBPrefix'];
$this->MysqlFns();
  $this->Limit = 20;
  	$enquiry_id = base64_decode($_GET["enquiry_id"]);

}			

 
/**********************************************Insert Sales Quote/**************************************************************/
function InsertFollowUp($objArray="")
 {
 $enquiry_id = base64_decode($_GET["enquiry_id"]);
//print_r($enquiry_id);exit;
global $objSmarty,$config,$_POST;
$tbl = $config['DBPrefix'];
$SelQuerys6	= 'SELECT * FROM `'.$tbl.'enquriy_master` WHERE `enquiry_id`="'.$enquiry_id.'"';  
	$EnqDetail	= $this->ExecuteQuery($SelQuerys6, 'select');
if(!$objArray['enquiry_id']){
			$objSmarty->assign('ErrorMessage', 'Enquriy Id should not be blank');
			return false;
    		 }elseif(!$objArray['created_by']){
			$objSmarty->assign('ErrorMessage', 'Created By should not be blank');
			return false;
			}elseif(!$objArray['created_date']){
			$objSmarty->assign('ErrorMessage', 'Created Date should not be blank');
			return false;
			}
			$objSmarty->assign('enquiry_id', $objArray['enquiry_id']);
			if($objArray['enquiry_id'] && $objArray['enquiry_id']){
			
		//	echo"i am here.....";

 if($objArray['enquiry_status'] == "Closed With Out Order")
 {
 $InsQuery = 'INSERT INTO `'.$tbl.'enquriy_followup`(`enquiry_id`,`arka_group`,`enquiry_status`,`customer_id`,`enquiry_type`,`closed_date`,`requirement`,`assign_to`,`reassign`,`created_by`,`created_date`,`created_time`, `remarks`, `status`) VALUES("'.trim(addslashes($objArray['enquiry_id'])).'","'.trim(addslashes($objArray['arka_group'])).'","'.trim(addslashes($objArray['enquiry_status'])).'","'.trim(addslashes($objArray['customer_id'])).'","'.trim(addslashes($objArray['enquiry_type'])).'","'.trim(addslashes($objArray['closed_date4'])).'","'.trim(addslashes($objArray['requirement'])).'","'.trim(addslashes($objArray['assign_to'])).'","'.trim(addslashes($objArray['reassign'])).'","'.trim(addslashes($objArray['created_by'])).'","'.trim(addslashes($objArray['created_date'])).'","'.trim(addslashes($objArray['created_time'])).'","'.trim(addslashes($objArray['remarks'])).'","1")';
$this->ExecuteQuery($InsQuery, 'insert');
 if($objArray['enquiry_status'] == "Closed With Order")
 {
  $UpQuery2 = 'Update `'.$tbl.'enquriy_master` SET `enquiry_status` = "'.trim($objArray['enquiry_status']).'",`remarks`= "'.trim($objArray['remarks']).'",`po_date` = "'.trim(   $objArray['po_date']).'",`po_no`= "'.trim($objArray['po_no']).'",`service_tax_no` = "'.trim($objArray['service_tax_no']).'",`cst_no`= "'.trim($objArray['cst_no']).'",`tin_no` = "'.trim($objArray['tin_no']).'",`status`="1" WHERE `enquiry_id`="'.trim(addslashes($objArray['enquiry_id'])).'"';
$this->ExecuteQuery($UpQuery2, 'update');
 }
 elseif($objArray['enquiry_status'] != "Closed With Order")
 {
 $UpQuery2 = 'Update `'.$tbl.'enquriy_master` SET `enquiry_status` = "'.trim($objArray['enquiry_status']).'",`remarks`= "'.trim($objArray['remarks']).'",`po_date` = "'.trim($objArray['po_date']).'",`po_no`= "'.trim($objArray['po_no']).'",`snooze_date`="'.trim(addslashes($objArray['snooze_date'])).'",`snooze_time`="'.$st.'",`status`="1" WHERE `enquiry_id`="'.trim(addslashes($objArray['enquiry_id'])).'"';
 $this->ExecuteQuery($UpQuery2, 'update');
 }
 
}
 else
 
 	{		
 $InsQuery = 'INSERT INTO `'.$tbl.'enquriy_followup`(`enquiry_id`,`arka_group`,`enquiry_status`,`customer_id`,`enquiry_type`,`snooze_date`,`snooze_time`,`closed_date`, `closed_time`, `po_date`, `po_no`,`requirement`,`assign_to`,`reassign`,`created_by`,`created_date`,`created_time`, `remarks`, `status`) VALUES("'.trim(addslashes($objArray['enquiry_id'])).'","'.trim(addslashes($objArray['arka_group'])).'","'.trim(addslashes($objArray['enquiry_status'])).'","'.trim(addslashes($objArray['customer_id'])).'","'.trim(addslashes($objArray['enquiry_type'])).'","'.trim(addslashes($objArray['snooze_date'])).'","'.$st.'","'.trim(addslashes($objArray['closed_date'])).'","'.$ct.'","'.trim(addslashes($objArray['po_date'])).'","'.trim(addslashes($objArray['po_no'])).'","'.trim(addslashes($objArray['requirement'])).'","'.trim(addslashes($objArray['assign_to'])).'","'.trim(addslashes($objArray['reassign'])).'","'.trim(addslashes($objArray['created_by'])).'","'.trim(addslashes($objArray['created_date'])).'","'.trim(addslashes($objArray['created_time'])).'","'.trim(addslashes($objArray['remarks'])).'","1")';
$this->ExecuteQuery($InsQuery, 'insert');
 if($objArray['enquiry_status'] == "Closed With Order")
 {
   $UpQuery3 = 'Update `'.$tbl.'customer_master` SET `service_tax_no` = "'.trim($objArray['service_tax_no']).'",`cst_no`= "'.trim($objArray['cst_no']).'",`tin_no` = "'.trim(   $objArray['tin_no']).'",`status`="1" WHERE `customer_id` ="'.$EnqDetail[0]['customer_id'].'"';  
 $this->ExecuteQuery($UpQuery3, 'update');
 
  $UpQuery2 = 'Update `'.$tbl.'enquriy_master` SET `enquiry_status` = "'.trim($objArray['enquiry_status']).'",`remarks`= "'.trim($objArray['remarks']).'",`po_date` = "'.trim(   $objArray['po_date']).'",`po_no`= "'.trim($objArray['po_no']).'",`service_tax_no` = "'.trim($objArray['service_tax_no']).'",`cst_no`= "'.trim($objArray['cst_no']).'",`tin_no` = "'.trim($objArray['tin_no']).'",`status`="1" WHERE `enquiry_id`="'.trim(addslashes($objArray['enquiry_id'])).'"';
$this->ExecuteQuery($UpQuery2, 'update');
 }
 elseif($objArray['enquiry_status'] != "Closed With Order")
 {
 $UpQuery2 = 'Update `'.$tbl.'enquriy_master` SET `enquiry_status` = "'.trim($objArray['enquiry_status']).'",`remarks`= "'.trim($objArray['remarks']).'",`po_date` = "'.trim($objArray['po_date']).'",`po_no`= "'.trim($objArray['po_no']).'",`snooze_date`="'.trim(addslashes($objArray['snooze_date'])).'",`snooze_time`="'.$st.'",`status`="1" WHERE `enquiry_id`="'.trim(addslashes($objArray['enquiry_id'])).'"';
 $this->ExecuteQuery($UpQuery2, 'update');
 }
 }
 


if( $objArray['enquiry_status'] == "Closed With Order" && $objArray['enquiry_type'] == "Project" ){
			
			$SelQuerys4	= 'SELECT max(project_order_no) as last FROM `'.$tbl.'project_master` Limit 0,1';
			$ProjectDetail	= $this->ExecuteQuery($SelQuerys4, 'select');
			  if($ProjectDetail[0]['last']!="")
			{
			$ProjectDetail[0]['project_order_no'] = stripslashes($ProjectDetail[0]['last']);
			$p_quote1 = preg_replace("/[^0-9\.]/", '', $ProjectDetail[0]['project_order_no']);
			$p_quote1= $p_quote + 1;
			$str = str_split($ProjectDetail[0]['last'], 3);
			$p_quote = $str[0]. "" .$p_quote1;
			}
			else
			{
			$p_quote = "PRO1001";
			}
			$objSmarty->assign('p_quote', $p_quote);
			
			$SelMax	= 'SELECT max(revised_version) as Rev FROM `'.$tbl.'project_quote_master` WHERE enquiry_id="'.$enquiry_id.'"';
			$ProjectMax	= $this->ExecuteQuery($SelMax, 'select');
			$objSmarty->assign('ProjectMax', $ProjectMax);
			
 $InsQuery2 = 'INSERT INTO `'.$tbl.'project_master`(`project_quote_no`,`revised_version`,`company_name`,`customer_id`,`quote_date`,`enquiry_id`,`mobile_no`,`email_id`,`email_id1`,`area_code`,`phone_no`,`extension`, `address1`,`address2`, `area`,`city`,`pincode`, `created_by`,`created_date`, `created_time`,`total`,`sub_total`, `remarks`,`status`,`po_no`,`po_date`) SELECT '.$tbl.'project_quote_master.project_quote_no,'.$tbl.'project_quote_master.revised_version,'.$tbl.'project_quote_master.company_name,'.$tbl.'project_quote_master.customer_id,
'.$tbl.'project_quote_master.quote_date,'.$tbl.'project_quote_master.enquiry_id,'.$tbl.'project_quote_master.mobile_no,'.$tbl.'project_quote_master.email,
'.$tbl.'project_quote_master.email1,'.$tbl.'project_quote_master.area_code,'.$tbl.'project_quote_master.phone_no,'.$tbl.'project_quote_master.extension,'.$tbl.'project_quote_master.address,'.$tbl.'project_quote_master.address1,'.$tbl.'project_quote_master.area,'.$tbl.'project_quote_master.city,'.$tbl.'project_quote_master.pincode, 
'.$tbl.'project_quote_master.created_by,'.$tbl.'project_quote_master.created_date,'.$tbl.'project_quote_master.created_time, '.$tbl.'project_quote_master.total,'.$tbl.'project_quote_master.sub_total, '.$tbl.'project_quote_master.remarks,'.$tbl.'project_quote_master.status,'.$tbl.'enquriy_followup.po_no,'.$tbl.'enquriy_followup.po_date FROM '.$tbl.'project_quote_master,'.$tbl.'enquriy_followup WHERE '.$tbl.'project_quote_master.enquiry_id = '.$tbl.'enquriy_followup.enquiry_id AND '.$tbl.'enquriy_followup.enquiry_status = "Closed With Order" AND '.$tbl.'project_quote_master.enquiry_id="'.$enquiry_id.'" AND '.$tbl.'project_quote_master.revised_version="'.$ProjectMax[0]['Rev'].'"';

$this->ExecuteQuery($InsQuery2, 'insert');
 $UpQuery4 = 'UPDATE `'.$tbl.'project_master` SET `project_order_no` = "'.$p_quote.'" WHERE `enquiry_id` ="'.trim($objArray['enquiry_id']).'"'; 
  $this->ExecuteQuery($UpQuery4, 'update');
  
$InsQuery21 = 'INSERT INTO `'.$tbl.'project_master_details`(`project_quote_no`,`description`,`sqft`,`material`,`material_value`,`labour_value`,`labour_estimate`,`material_estimate`,`enquiry_id`,`revised_version`,`material_tax_per`,`material_tax_value`,`total_material`,`labour`,`labour_tax_per`,`labour_tax_value`,`total_labour`,`total`,`created_by`,`created_date`,`created_time`,`remarks`,`status`) SELECT '.$tbl.'project_quote_details.project_quote_no,'.$tbl.'project_quote_details.product_description,'.$tbl.'project_quote_details.sqft,'.$tbl.'project_quote_details.material,'.$tbl.'project_quote_details.material_value,'.$tbl.'project_quote_details.labour_value,'.$tbl.'project_quote_details.labour_estimate,'.$tbl.'project_quote_details.material_estimate,'.$tbl.'project_quote_details.enquiry_id,'.$tbl.'project_quote_details.revised_version,'.$tbl.'project_quote_details.material_tax_per,'.$tbl.'project_quote_details.material_tax_value,'.$tbl.'project_quote_details.total_material,'.$tbl.'project_quote_details.labour,'.$tbl.'project_quote_details.labour_tax_per,'.$tbl.'project_quote_details.labour_tax_value,'.$tbl.'project_quote_details.total_labour,'.$tbl.'project_quote_details.total,'.$tbl.'project_quote_details.created_by,'.$tbl.'project_quote_details.created_date,'.$tbl.'project_quote_details.created_time,'.$tbl.'project_quote_details.remarks,'.$tbl.'project_quote_details.status FROM `'.$tbl.'project_quote_details` WHERE `enquiry_id`="'.$enquiry_id.'" AND '.$tbl.'project_quote_details.revised_version="'.$ProjectMax[0]['Rev'].'"';
$this->ExecuteQuery($InsQuery21, 'insert');
 $UpQuery41 = 'UPDATE `'.$tbl.'project_master_details` SET `project_order_no` = "'.$p_quote.'" WHERE `enquiry_id` ="'.trim($objArray['enquiry_id']).'"'; 
  $this->ExecuteQuery($UpQuery41, 'update');
}
elseif( $objArray['enquiry_status'] == "Closed With Order" && $objArray['enquiry_type'] == "Sales" )
{
if($this->ChkDupliSa(trim(addslashes($objArray['sales_order_no'])))){
			$SelQuerys2	= 'SELECT max(sales_order_no) as last FROM `'.$tbl.'sales_master` Limit 0,1';
			$SaleDetail	= $this->ExecuteQuery($SelQuerys2, 'select');
			  if($SaleDetail[0]['last']!="")
			{
			$SaleDetail[0]['sales_order_no'] = stripslashes($SaleDetail[0]['last']);
			$s_order1 = preg_replace("/[^0-9\.]/", '', $SaleDetail[0]['sales_order_no']);
			$s_order1= $s_order1 + 1;
			$str = str_split($SaleDetail[0]['last'], 2);
			$s_order = $str[0]. "" .$s_order1;
			}
			else
			{
			$s_order = "SO1001";
			}
			
			$objSmarty->assign('s_order', $s_order);
			
			$SalRev	= 'SELECT max(revised_version) as Rev FROM `'.$tbl.'sales_quote_master` WHERE enquiry_id="'.$enquiry_id.'"';
			$SaleMax	= $this->ExecuteQuery($SalRev, 'select');
			$objSmarty->assign('SaleMax', $SaleMax);

	$InsQuery2 = 'INSERT INTO `'.$tbl.'sales_master`(`sales_quote_no`,`sales_quote_revise_no`,`company_name`,`customer_id`,`customer_name`,`quote_date`,`enquiry_id`,`mobile_no`,`email_id`,`email_id1`,`area_code`,`phone_no`,`extension`, `address1`, `address2`, `area`,`city`,`pincode`, `created_by`,`created_date`, `created_time`,`total`,`sub_total`, `remarks`,`status`,`po_no`,`po_date`) SELECT '.$tbl.'sales_quote_master.sales_quote_no,'.$tbl.'sales_quote_master.revised_version,'.$tbl.'sales_quote_master.company_name,'.$tbl.'sales_quote_master.customer_id,'.$tbl.'sales_quote_master.customer_name,'.$tbl.'sales_quote_master.quote_date,'.$tbl.'sales_quote_master.enquiry_id,'.$tbl.'sales_quote_master.mobile_no,'.$tbl.'sales_quote_master.email_id,'.$tbl.'sales_quote_master.email_id1,'.$tbl.'sales_quote_master.area_code,'.$tbl.'sales_quote_master.phone_no,'.$tbl.'sales_quote_master.extension,
'.$tbl.'sales_quote_master.address,'.$tbl.'sales_quote_master.address1,'.$tbl.'sales_quote_master.area,'.$tbl.'sales_quote_master.city,'.$tbl.'sales_quote_master.pincode,
'.$tbl.'sales_quote_master.created_by,'.$tbl.'sales_quote_master.created_date,'.$tbl.'sales_quote_master.created_time,'.$tbl.'sales_quote_master.total,'.$tbl.'sales_quote_master.sub_total,'.$tbl.'sales_quote_master.remarks,'.$tbl.'sales_quote_master.status,'.$tbl.'enquriy_followup.po_no,'.$tbl.'enquriy_followup.po_date FROM '.$tbl.'sales_quote_master,'.$tbl.'enquriy_followup WHERE '.$tbl.'sales_quote_master.enquiry_id = '.$tbl.'enquriy_followup.enquiry_id AND '.$tbl.'enquriy_followup.enquiry_status = "Closed With Order" AND '.$tbl.'sales_quote_master.enquiry_id="'.$enquiry_id.'" AND '.$tbl.'sales_quote_master.revised_version="'.$SaleMax[0]['Rev'].'"';
	$this->ExecuteQuery($InsQuery2, 'insert');
	
	$UpQuery = 'UPDATE `'.$tbl.'sales_master` SET `sales_order_no`= "'.$s_order.'" WHERE `enquiry_id` ="'.trim($objArray['enquiry_id']).'"'; 
    $this->ExecuteQuery($UpQuery, 'update');


 $InsQuery3 = 'INSERT INTO `'.$tbl.'sales_details`(`sales_quote_no`,`enquiry_id`,`item_type`,`item_code`,`item_description`,`sales_revised_version`, `quantity`, `unit_basic`,`sub_total`,`vat_value`,`vat_per`, `total`, `created_by`, `created_date`, `created_time`,`remarks`,`status`) SELECT `sales_quote_no`,`enquiry_id`,`item_type`,`item_code`,`product_description`,`revised_version`, `quantity`, `unit_basic`,`sub_total`,`vat_value`,`vat_per`, `total`,`created_by`,`created_date`, `created_time`,`remarks`,`status` FROM `'.$tbl.'sales_quote_details`  WHERE `enquiry_id`="'.trim(addslashes($objArray['enquiry_id'])).'" AND '.$tbl.'sales_quote_details.revised_version="'.$SaleMax[0]['Rev'].'"';
$this->ExecuteQuery($InsQuery3, 'insert');
	  $UpQuery1 = 'UPDATE `'.$tbl.'sales_details` SET `sales_order_no` = "'.$s_order.'" WHERE `enquiry_id` ="'.trim($objArray['enquiry_id']).'"'; 
  $this->ExecuteQuery($UpQuery1, 'update');

}
}
elseif( $objArray['enquiry_status'] == "Closed With Order" && $objArray['enquiry_type'] == "Service" ){
			$SelQuerys3	= 'SELECT max(service_order_no) as last FROM `'.$tbl.'service_master` Limit 0,1';
			$ServiceDetail	= $this->ExecuteQuery($SelQuerys3, 'select');
			  if($ServiceDetail[0]['last']!="")
			{
			$ServiceDetail[0]['service_order_no'] = stripslashes($ServiceDetail[0]['last']);
			$service_order_no1 = preg_replace("/[^0-9\.]/", '', $ServiceDetail[0]['service_order_no']);
			$service_order_no1= $service_order_no1 + 1;
			$str = str_split($ServiceDetail[0]['last'], 3);
			$service_order_no = $str[0]. "" .$service_order_no1;
			}
			else
			{
			$service_order_no = "SRO1001";
			}
			$objSmarty->assign('service_order_no', $service_order_no);
			
			$SerRev	= 'SELECT max(revised_version) as Rev FROM `'.$tbl.'service_quote_master` WHERE enquiry_id="'.$enquiry_id.'"';
			$SerMax	= $this->ExecuteQuery($SerRev, 'select');
			$objSmarty->assign('SerMax', $SerMax);
 $InsQuery2 = 'INSERT INTO `'.$tbl.'service_master`(`service_quote_no`,`service_quote_revise_no`,`company_name`,`customer_id`,`service_quote_date`,`enquiry_id`,`mobile_no`,`email_id`,`email_id1`,`area_code`,`phone_no`,`extension`, `address1`,`address2`, `area`,`city`,`pincode`, `created_by`,`created_date`, `created_time`,`total`, `remarks`,`status`,`po_no`,`po_date`) SELECT '.$tbl.'service_quote_master.service_quote_no,'.$tbl.'service_quote_master.revised_version,'.$tbl.'service_quote_master.company_name,'.$tbl.'service_quote_master.customer_id,
'.$tbl.'service_quote_master.service_quote_date,'.$tbl.'service_quote_master.enquiry_id,'.$tbl.'service_quote_master.mobile_no,'.$tbl.'service_quote_master.email,
'.$tbl.'service_quote_master.email1,'.$tbl.'service_quote_master.area_code,'.$tbl.'service_quote_master.phone_no,'.$tbl.'service_quote_master.extension,'.$tbl.'service_quote_master.address,'.$tbl.'service_quote_master.address1,'.$tbl.'service_quote_master.area,'.$tbl.'service_quote_master.city,'.$tbl.'service_quote_master.pincode, 
'.$tbl.'service_quote_master.created_by,'.$tbl.'service_quote_master.created_date,'.$tbl.'service_quote_master.created_time,'.$tbl.'service_quote_master.total,'.$tbl.'service_quote_master.remarks,'.$tbl.'service_quote_master.status,'.$tbl.'enquriy_followup.po_no,'.$tbl.'enquriy_followup.po_date FROM '.$tbl.'service_quote_master,'.$tbl.'enquriy_followup WHERE '.$tbl.'service_quote_master.enquiry_id = '.$tbl.'enquriy_followup.enquiry_id AND '.$tbl.'enquriy_followup.enquiry_status = "Closed With Order" AND '.$tbl.'service_quote_master.enquiry_id="'.$enquiry_id.'" AND '.$tbl.'service_quote_master.revised_version="'.$SerMax[0]['Rev'].'"';
$this->ExecuteQuery($InsQuery2, 'insert'); 

 $UpQuery3 = 'UPDATE `'.$tbl.'service_master` SET `service_order_no` = "'.$service_order_no.'" WHERE `enquiry_id` ="'.trim($objArray['enquiry_id']).'"'; 
  $this->ExecuteQuery($UpQuery3, 'update');
  
  $InsQuery21 = 'INSERT INTO '.$tbl.'service_master_details(`service_quote_no`,`description`,`sqft`,`material`,`material_value`,`labour_value`,`labour_estimate`,`material_estimate`,`enquiry_id`,`service_revised`,`material_tax_per`,`material_tax_value`,`total_material`,`labour`,`labour_tax_per`,`labour_tax_value`,`total_labour`,`total`,`created_by`,`created_date`,`created_time`,`remarks`,`status`) SELECT '.$tbl.'service_quote_details.service_quote_no,'.$tbl.'service_quote_details.material_description,'.$tbl.'service_quote_details.sqft,'.$tbl.'service_quote_details.material,'.$tbl.'service_quote_details.material_value,'.$tbl.'service_quote_details.labour_value,'.$tbl.'service_quote_details.labour_estimate,'.$tbl.'service_quote_details.material_estimate,'.$tbl.'service_quote_details.enquiry_id,'.$tbl.'service_quote_details.revised_version,'.$tbl.'service_quote_details.material_tax_per,'.$tbl.'service_quote_details.material_tax_value,'.$tbl.'service_quote_details.total_material,'.$tbl.'service_quote_details.labour,'.$tbl.'service_quote_details.labour_tax_per,'.$tbl.'service_quote_details.labour_tax_value,'.$tbl.'service_quote_details.total_labour,'.$tbl.'service_quote_details.total,'.$tbl.'service_quote_details.created_by,'.$tbl.'service_quote_details.created_date,'.$tbl.'service_quote_details.created_time,'.$tbl.'service_quote_details.remarks,'.$tbl.'service_quote_details.status FROM `'.$tbl.'service_quote_details` WHERE `enquiry_id`="'.$enquiry_id.'" AND '.$tbl.'service_quote_details.revised_version="'.$SerMax[0]['Rev'].'"';   
  
$this->ExecuteQuery($InsQuery21, 'insert');

 $UpQuery31 = 'UPDATE `'.$tbl.'service_master_details` SET `service_order_no` = "'.$service_order_no.'" WHERE `enquiry_id` ="'.trim($objArray['enquiry_id']).'"'; 
  $this->ExecuteQuery($UpQuery31, 'update');


}

//Success Message
header('Location:' .$_SERVER['PHP_SELF'].'?enquiry_id='.$_GET['enquiry_id'].'&succs_msg_for_insert');
return true;


}
}
/*************************************************View Sales Quote***************************************************************/
function ViewSalesQuote()
 {
global $objSmarty,$config;
$tbl = $config['DBPrefix'];
$SelQuery = 'SELECT '.$tbl.'sales_quote_master.*, '.$tbl.'sales_quote_details.* FROM `'.$tbl.'sales_quote_master`, `'.$tbl.'sales_quote_details` WHERE '.$tbl.'sales_quote_master.sales_quote_no='.$tbl.'sales_quote_details.sales_quote_no  AND  '.$tbl.'sales_quote_master.sales_quote_no="'.$_GET['sales_quote_no'].'"';
			$ListDetail = $this->ExecuteQuery($SelQuery, "select");
			$objSmarty->assign('ListDetail', $ListDetail);
			return $ListDetail;

 }
 /*************************************************View Edit Sales Quote***************************************************************/
function ViewEdit($objArray='')
 {
global $objSmarty,$config;
$tbl = $config['DBPrefix'];
$SelQuery = 'SELECT * FROM `'.$tbl.'sales_quote_master`, `'.$tbl.'sales_quote_details` WHERE '.$tbl.'sales_quote_master.sales_quote_no="'.$_GET['sales_quote_no'].'" AND '.$tbl.'sales_quote_details.sales_quote_no="'.$_GET['sales_quote_no'].'"';
			$ListEdit = $this->ExecuteQuery($SelQuery, "select");
			$objSmarty->assign('ListEdit', $ListEdit);
			return $ListEdit;

 }

 /*************************************************List Sales Quote***************************************************************/
 
 function ListSalesQuote()
 {
global $objSmarty,$config;
$tbl = $config['DBPrefix'];
$SelQuery = 'SELECT '.$tbl.'sales_quote_master.*, '.$tbl.'sales_quote_details.* FROM `'.$tbl.'sales_quote_master`, `'.$tbl.'sales_quote_details` WHERE '.$tbl.'sales_quote_master.status = "1" AND '.$tbl.'sales_quote_master.sales_quote_no='.$tbl.'sales_quote_details.sales_quote_no';
			$ListView = $this->ExecuteQuery($SelQuery, "select");
			$objSmarty->assign('ListView', $ListView);
			return $ListView;

 }
 /*************************************************List Followup***************************************************************/
function ViewList($objArray)
 { 
 		 global $objSmarty,$config;
		 
$tbl = $config['DBPrefix'];

		// $SelQuery3 = 'SELECT * FROM `'.$tbl.'enquriy_master` WHERE enquiry_id="'.$_GET['enquiry_id'].'"';
		$SelQuery2 = 'SELECT '.$tbl.'enquriy_followup.*, '.$tbl.'enquriy_master.* FROM `'.$tbl.'enquriy_followup`, `'.$tbl.'enquriy_master` WHERE '.$tbl.'enquriy_followup.status = "1" ';
		
			$ListViewdet = $this->ExecuteQuery($SelQuery2, "select");
			
			$objSmarty->assign('ListViewdet', $ListViewdet);
			/*echo $ListViewdet;*/
			return $ListViewdet;

 }

 /**********************************************Delete Contact*********************************************************************/
 function DeleteMaster($CatIdent)
 {global $objSmarty,$config;
$tbl = $config['DBPrefix'];
$DelQuery = 'update `'.$tbl.'sales_quote_master` set `status` = 0 WHERE `sales_quote_no` ="'.$CatIdent.'"';
			$this->ExecuteQuery($DelQuery, 'update');
            header('Location:' .$_SERVER['PHP_SELF'].'?succs_msg_for_del');  

 }
 
 
 /****************************************************Time Stamp Value As Date And Time Form Master****************************************/
 
  function DateStamp()
 {global $objSmarty,$config;
$tbl = $config['DBPrefix'];
$SelQuery = 'SELECT Date(timestamp_value) as Date from '.$tbl.'sales_quote_master WHERE sales_quote_no="'.$_GET['sales_quote_no'].'"';
			 $Date_Stamp = $this->ExecuteQuery($SelQuery, "select");
			  //print $Date;
			 $objSmarty->assign('Date_Stamp', $Date_Stamp);
			 return $Date_Stamp;
			 
}

  function TimeStamp()
  {global $objSmarty,$config;
$tbl = $config['DBPrefix'];
$SelQuery1 = 'SELECT  Time(timestamp_value) as Time from '.$tbl.'sales_quote_master WHERE sales_quote_no="'.$_GET['sales_quote_no'].'"';
			 $Time_Stamp = $this->ExecuteQuery($SelQuery1, "select");
			 $objSmarty->assign('Time_Stamp', $Time_Stamp);
			 return $Time_Stamp;
			

 }
 
function ViewEnquiry($objArray)
 {
 		 global $objSmarty,$config;
		 $tbl = $config['DBPrefix'];
		 $SelQuery = 'SELECT * FROM `'.$tbl.'enquriy_followup` WHERE enquiry_id="'.$_GET['enquiry_id'].'" ORDER BY sl_no DESC';
			$ListView2 = $this->ExecuteQuery($SelQuery, "select");
			$objSmarty->assign('ListView2', $ListView2);
			//print_r($ListView);exit;
			return $ListView2;

 }
 /********************************************Followup/***********************************************************/
 function ViewEnquirymaster($objArray)
 {
 		 global $objSmarty,$config;
		 $tbl = $config['DBPrefix'];
		 $enq_id = base64_decode($_GET["enquiry_id"]);
	 $SelQuery5 = 'SELECT * FROM `'.$tbl.'enquriy_master` WHERE enquiry_id="'.$enq_id.'" ' ;
			$ListView3 = $this->ExecuteQuery($SelQuery5, "select");
			$objSmarty->assign('ListView3', $ListView3);
			//print_r($ListView3);exit;
			return $ListView3;

 }
function ViewEnquirymaster1($objArray)
 {
 		 global $objSmarty,$config;
		 $tbl = $config['DBPrefix'];
		 $SelQuery6 = 'SELECT * FROM `'.$tbl.'enquriy_followup` WHERE sl_no="'.$_GET['sl_no'].'"';
			$ListView4 = $this->ExecuteQuery($SelQuery6, "select");
			$objSmarty->assign('ListView4', $ListView4);
			//print_r($ListView);exit;
			return $ListView4;

 }
   /*************************************************Enquiry Type/***************************************************************/
 function GetEnquiryType($objArray)
 {
 		 global $objSmarty,$config;
		 $tbl = $config['DBPrefix'];
		  $enq_id = base64_decode($_GET["enquiry_id"]);
		 $SelQuery = 'SELECT * FROM `'.$tbl.'enquriy_master` WHERE enquiry_id="'.$_GET["enquiry_id"].'"';
			$EnqTypView = $this->ExecuteQuery($SelQuery, "select");
			$objSmarty->assign('EnqTypView', $EnqTypView);
			//print_r($EnqTypView);exit;
			return $EnqTypView;

 }
  /*************************************************Edit Quote***************************************************************/
function EditFollowUp($objArray){
  global $objSmarty, $config, $_POST;
  $tbl = $config['DBPrefix'];
  
 if(!$objArray['enquiry_id']){
			$objSmarty->assign('ErrorMessage', 'Enquriy Id should not be blank');
			return false;
			 }elseif(!$objArray['created_by']){
			$objSmarty->assign('ErrorMessage', 'Created By should not be blank');
			return false;
			}elseif(!$objArray['created_date']){
			$objSmarty->assign('ErrorMessage', 'Created Date should not be blank');
			return false;
			}elseif(!$objArray['remarks']){
			$objSmarty->assign('ErrorMessage', 'Remarks should not be blank');
			return false;
			}
						$objSmarty->assign('enquiry_id', $objArray['enquiry_id']);
			if($objArray['enquiry_id'] && $objArray['enquiry_id']){
			
   $UpQuery = 'UPDATE `'.$tbl.'enquriy_followup` SET `enquiry_id` = "'.trim($objArray['enquiry_id']).'",`enquiry_status`="'.trim($objArray['enquiry_status']).'",`snooze_date` = "'.trim($objArray['snooze_date']).'",`snooze_time` = "'.$st.'",`closed_date` = "'.trim($objArray['closed_date']).'",`closed_time` = "'.$ct.'",`assign_to`="'.trim($objArray['assign_to']).'",`reassign`="'.trim($objArray['reassign']).'",`created_by` = "'.trim($objArray['created_by']).'",`created_date` = "'.trim($objArray['created_date']).'",`created_time` ="'.trim($objArray['created_time']).'",`remarks` = "'.trim($objArray['remarks']).'",`status` = "1" WHERE `enquiry_id` ="'.trim($objArray['enquiry_id']).'"';
  $this->ExecuteQuery($UpQuery, 'update');
 
  
   $UpQuery1 = 'UPDATE `'.$tbl.'enquriy_master` SET `enquiry_status` = "'.trim($objArray['enquiry_status']).'", `timestamp_value` = "'.trim($objArray['timestamp_value']).'",`status` = "1" WHERE `enquiry_id` ="'.trim($objArray['enquiry_id']).'"'; 
 $this->ExecuteQuery($UpQuery1, 'update');

header('Location:' .$_SERVER['PHP_SELF'].'?succs_msg_for_insert'."&"."sl_no=".$_GET['sl_no']);
					return true;
 
 }
 /*****************************************/
 }
 function EditContact($objArray='')
 {
			global $objSmarty,$config;
			$tbl = $config['DBPrefix'];
			$SelQuery = 'SELECT * FROM `'.$tbl.'enquriy_followup` WHERE status = "1" AND sl_no="'.$_GET["sl_no"].'"';
			 /*$SelQuery = 'SELECT * FROM `'.$tbl.'customer_contact_details`,`'.$tbl.'enquriy_followup` WHERE '.$tbl.'customer_contact_details.customer_id='.$tbl.'enquriy_followup.customer_id AND '.$tbl.'customer_contact_details.customer_id="'.$_GET["customer_id"].'"';*/
			$ViewContact = $this->ExecuteQuery($SelQuery, "select");
			$objSmarty->assign('ViewContact', $ViewContact);
			return $ViewContact;
			//header('Location:' .$_SERVER['PHP_SELF'].'?succs_msg_for_insert');

 }
 /*********************/
  function ChkDupliSa($sales_order_no, $Ident=''){
  
global $objSmarty,$config,$_POST;
$tbl = $config['DBPrefix'];
		$SelQuery	= 'SELECT * FROM `'.$tbl.'sales_master` WHERE `sales_order_no` = "'.$sales_order_no.'" Limit 0,1';
		$SaDetail = $this->ExecuteQuery($SelQuery, 'select');
  
		if(!empty($SaDetail) && is_array($SaDetail))
		   return false;
		else
		  return true;
 }
   function EnquiryStatus($objArray){
  
global $objSmarty,$config,$_POST;
$tbl = $config['DBPrefix'];
		$enq_id = base64_decode($_GET["enquiry_id"]);
		$SelQuery	= 'SELECT * FROM `'.$tbl.'enquriy_master` WHERE `enquiry_id` = "'.$enq_id.'"';
		$EnqMat = $this->ExecuteQuery($SelQuery, 'select');
		$objSmarty->assign('EnqMat', $EnqMat);
		if($EnqMat[0]['28']== "Sales")
		{
		$enq_id = base64_decode($_GET["enquiry_id"]);
		$SelQuery1	= 'SELECT * FROM `'.$tbl.'sales_quote_master` WHERE `enquiry_id` = "'.$enq_id.'"';
		$EnqStat = $this->ExecuteQuery($SelQuery1, 'select');
		$objSmarty->assign('EnqStat', $EnqStat);
		}
		elseif($EnqMat[0]['28']== "Service")
		{
		$enq_id = base64_decode($_GET["enquiry_id"]);
		$SelQuery1	= 'SELECT * FROM `'.$tbl.'service_quote_master` WHERE `enquiry_id` = "'.$enq_id.'"';
		$EnqStat = $this->ExecuteQuery($SelQuery1, 'select');
		$objSmarty->assign('EnqStat', $EnqStat);
		}
		elseif($EnqMat[0]['28']== "Project")
		{
		$enq_id = base64_decode($_GET["enquiry_id"]);
		$SelQuery1	= 'SELECT * FROM `'.$tbl.'project_quote_master` WHERE `enquiry_id` = "'.$enq_id.'"';
		$EnqStat = $this->ExecuteQuery($SelQuery1, 'select');
		$objSmarty->assign('EnqStat', $EnqStat);
		}
		
  
  		 }
 }
?>



