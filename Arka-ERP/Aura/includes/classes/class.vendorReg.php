<?php
#####Class For Adding Content Management ######
class vendorReg extends MysqlFns{
 
 /* class constructor */
 function SupplierReg(){
 $this->LDDisplayPath= $config['SiteGlobalPath']."class.vendorReg.php";
  global $config;
  global $objSmarty;
  $this->MysqlFns();
  $this->Limit = 20;
   $this->Keyword = '';
  $this->Operator = '';
  $this->PerPage = '';

   $SelQuerys	= 'SELECT max(supplier_code) as last FROM `arka_supplier_reg_master` Limit 0,1';
 //  echo $SelQuery;
   $CusDetail	= $this->ExecuteQuery($SelQuerys, 'select');
 //  	echo $DevDetail[0]['last'];
   $CusDetail[0]['supplier_code'] = stripslashes($CusDetail[0]['last']);
  	$s_code1 = preg_replace("/[^0-9\.]/", '', $CusDetail[0]['supplier_code']);
	$s_code1= $s_code1 + 1;
	$str = str_split($CusDetail[0]['last'], 2);
	$s_code = $str[0]. "" .$s_code1;
    $objSmarty->assign('supplier_code', $s_code);
	
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
 
 
 /* Delete the Static Page */
 function DeleteCus($CusIdent){
  global $objSmarty;
  foreach ( $CusIdent as $ConId ){
   if($ConId){
    $DelQuery = 'DELETE FROM `arka_site_reg_master` WHERE `site_id` ='.$ConId;
	$this->ExecuteQuery($DelQuery, 'delete');
   }
  }
  $objSmarty->assign('Keyword', $this->Keyword);
  $objSmarty->assign('Operator', $this->Operator);
  $objSmarty->assign('Offset', $this->Offset);
  $objSmarty->assign('PerPage', $this->PerPage);
  return true;
 }
 
/*	function DeleteID($id)
	{
  		global $objSmarty;
  		$DelQuery = 'update  `arka_supplier_reg_master` set `record_status` = 0 WHERE `customer_id`="'.$_GET['customer_id'].'" '; 
  		$this->ExecuteQuery($DelQuery, 'delete');
  		$objSmarty->assign('SuccessMessage1', 'Deleted Successfully');
 	}*/
 /* Insert the content for  Static Pages */
 
 function InsertSupplierContent($objArray){
   global $objSmarty,$_POST;


   if(!$objArray['supplierCode']){
    $objSmarty->assign('ErrorMessage', 'Supplier Code should not be blank');
	return false;
   }elseif(!$objArray['panNo']){
    $objSmarty->assign('ErrorMessage', 'PAN No should not be blank');
	return false;
	}elseif(!$objArray['gst_no']){
    $objSmarty->assign('ErrorMessage', 'GST No should not be blank');
	return false;
	}elseif(!$objArray['contactPerson']){
    $objSmarty->assign('ErrorMessage', 'ContactPerson should not be blank');
	return false;
   }elseif(!$objArray['designation']){
    $objSmarty->assign('ErrorMessage', 'Designation should not be blank');
	return false;
   }elseif(!$objArray['mobile']){
    $objSmarty->assign('ErrorMessage', 'Mobile  should not be blank');
	return false;
   }elseif(!$objArray['city']){
    $objSmarty->assign('ErrorMessage', 'City should not be blank');
	return false;
   }elseif(!$objArray['state']){
    $objSmarty->assign('ErrorMessage', 'State should not be blank');
	return false;
   }elseif(!$objArray['email']){
    $objSmarty->assign('ErrorMessage', 'Email should not be blank');
	return false;
   }elseif(!$objArray['pincode']){
    $objSmarty->assign('ErrorMessage', 'Pincode should not be blank');
	return false;
   }
  /* if($this->chk_previous_data($objArray))
   */
   
  // if($this->ChkDupliCust($objArray))
  // $objSmarty->assign('supplier_code', $objArray['supplierCode']);
   if($objArray['gst_no']){
						   $InsQuery = 'INSERT INTO `arka_supplier_reg_master`(`supplier_code`,
										   `gst_no`,
										   `address1`,
											`address2`,
											`city`, 
											`state`,
											`pincode`,
											`pan_no`,
											`contact_person`, 
											`designation`,
											`mobile`,
											`phone`,
											`email`,
											`created_date`,
											`created_time`,
											`created_by`,
											`record_status`)
							  VALUES
											  ("'.trim(addslashes($objArray['supplierCode'])).'",
											  "'.trim(addslashes($objArray['gst_no'])).'",
											  "'.trim(addslashes($objArray['address'])).'",
											  "'.trim(addslashes($objArray['address2'])).'",
											  "'.trim(addslashes($objArray['city'])).'",
											  "'.trim(addslashes($objArray['state'])).'",
											  "'.trim(addslashes($objArray['pincode'])).'",
											  "'.trim(addslashes($objArray['panNo'])).'",
											  "'.trim(addslashes($objArray['contactPerson'])).'",
											  "'.trim(addslashes($objArray['designation'])).'",
											  "'.trim(addslashes($objArray['mobile'])).'",
											  "'.trim(addslashes($objArray['phone'])).'",
											  "'.trim(addslashes($objArray['email'])).'",
											  "'.trim(addslashes($objArray['createdDate'])).'",
											  "'.trim(addslashes($objArray['createdTime'])).'",
											  "'.trim(addslashes($objArray['createdBy'])).'","1")';
  	 $this->ExecuteQuery($InsQuery, 'insert');
	 header('Location:' .$_SERVER['PHP_SELF'].'?server_response=success&supplier_code='.$objArray['supplierCode'].'&window_action=true');
	
	$oFCKeditor->Value		= '';
	$objSmarty->assign('Ss_code',$objArray['s_code']);
	$objSmarty->assign('s_code', '');
	$url_addtnal_data=base64_encode("New Supplier Added Successfully");
    header('location:'.$_SERVER['PHP_SELF']."?sm=".$url_addtnal_data."&supplier_id=".$objArray['s_code']);
	//PrePopulate($objArray, 'CusDetail');
	  }
 }
/* else 
 {
 
 $UpQuery = 'UPDATE `arka_supplier_reg_master` SET `supplier_name` = "'.trim($objArray['sname']).'",`vat_no` = "'.trim($objArray['vat_no']).'",`service_tax_no` = "'.trim($objArray['service_tax_no']).'",`pan_no` = "'.trim($objArray['pan_no']).'",`cst_no` = "'.trim($objArray['cst_no']).'",`address1` = "'.trim($objArray['address1']).'", `address2` = "'.trim($objArray['address2']).'", `city` = "'.trim($objArray['city']).'", `state` = "'.trim($objArray['state']).'", `pincode` = "'.trim($objArray['pincode']).'", `contact_person` = "'.trim($objArray['contactperson']).'", `designation` = "'.trim($objArray['designation']).'", `mobile` = "'.trim($objArray['mobile']).'", `phone` = "'.trim(addslashes($objArray['phone'])).'", `email` = "'.trim(addslashes($objArray['email'])).'", `created_date` = "'.trim(addslashes($objArray['cr_date'])).'",`created_time` ="'.trim(addslashes($objArray['crtime'])).'", `status` = "1" WHERE `supplier_code` ="'.trim($objArray['s_code']).'"';
	$this->ExecuteQuery($UpQuery, 'update');

	//$this->GetSupplierView($objArray);
	$url_addtnal_data=base64_encode("Supplier Details Updated Successfully");
    header('location:'.$_SERVER['PHP_SELF']."?sm=".$url_addtnal_data."&supplier_id=".$objArray['s_code']);
	return true;

 
   // $url_addtnal_data=base64_encode("Supplier Details Already Exists");
   // header('location:'.$_SERVER['PHP_SELF']."?em=".$url_addtnal_data);
 }
 */
 //
 /*else
 {
     $objSmarty->assign('ErrorMessage', 'Supplier Details Already Exists');
	 
     //$url_addtnal_data=base64_encode("Supplier Details Already Exists");
   //  header('location:'.$_SERVER['PHP_SELF']."?em=".$url_addtnal_data."&supplier_id=".$objArray['s_code']);
 }*/
 
 
  /* Edit the Static Page */
 function EditVendor($objArray){ 
  global $objSmarty,$_POST;
 // $CusIdent=$_REQUEST['s_code'];
  $objSmarty->assign('Keyword', $this->Keyword);
  $objSmarty->assign('Operator', $this->Operator);
  $objSmarty->assign('Offset', $this->Offset);
  $objSmarty->assign('PerPage', $this->PerPage);
  
   if(!$objArray['supplierCode']){
	$objSmarty->assign('ErrorMessage', 'Supplier Code should not be blank');
	return false;
   }/*elseif(!$objArray['sname']){
	$objSmarty->assign('ErrorMessage', 'Supplier Code should not be blank');
	return false;
   }*/elseif(!$objArray['vatNo']){
	$objSmarty->assign('ErrorMessage', 'vat No should not be blank');
	return false;
   }elseif(!$objArray['serviceTaxNo']){
	$objSmarty->assign('ErrorMessage', 'ServiceTax No should not be blank');	
	return false;
   }elseif(!$objArray['city']){
	$objSmarty->assign('ErrorMessage', 'City should not be blank');	
	return false;
   }elseif(!$objArray['state']){
	$objSmarty->assign('ErrorMessage', 'State should not be blank');
	return false;
   }elseif(!$objArray['pincode']){
	$objSmarty->assign('ErrorMessage', 'pin Code should not be blank');
	return false;
   }/*elseif(!preg_match("/^[0-9]{6}$/",$objArray['pincode'])){
	$objSmarty->assign('ErrorMessage', 'Supplier Code should not be blank');
	return false;
   }*/elseif(!$objArray['panNo']){
	$objSmarty->assign('ErrorMessage', 'pan No should not be blank');
	return false;
   }elseif(!$objArray['cstNo']){
	$objSmarty->assign('ErrorMessage', 'cst No should not be blank');	
	return false;
   }elseif(!$objArray['contactPerson']){
	$objSmarty->assign('ErrorMessage', 'contactPerson should not be blank');	
	return false;
   }elseif(!$objArray['designation']){
	$objSmarty->assign('ErrorMessage', 'designation should not be blank');
	return false;
   }elseif(!$objArray['mobile']){
	$objSmarty->assign('ErrorMessage', 'mobile should not be blank');
	return false;
   }elseif(!$objArray['email']){
	$objSmarty->assign('ErrorMessage', 'email  should not be blank');
	return false;
   }/*elseif(!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/", $objArray['email'])){
	$url_addtnal_data=base64_encode("Email is not valid");
    header('location:'.$_SERVER['PHP_SELF']."?em=".$url_addtnal_data."&supplier_id=".$objArray['s_code']);		
	return false;
   }*/elseif(!$objArray['createdDate']){
	$objSmarty->assign('ErrorMessage', 'created Date should not be blank');
	return false;
   }elseif(!$objArray['createdTime']){
	$objSmarty->assign('ErrorMessage', 'created Time should not be blank');
	return false;
   } alert("hiiii");
 /*  if($this->ChkDupliCust($objArray)) 
    $objSmarty->assign('s_code', $objArray['s_code']);
   if($objArray['s_code'] && $objArray['sname'])*/
   if($objArray['supplierCode']){
  	$UpQuery = 'UPDATE `arka_supplier_reg_master` SET `vat_no` = "'.trim($objArray['vatNo']).'",`servicetax_no` = "'.trim($objArray['serviceTaxNo']).'",`pan_no` = "'.trim($objArray['panNo']).'",`cst_no` = "'.trim($objArray['cstNo']).'",`address` = "'.trim($objArray['address']).'", `address2` = "'.trim($objArray['address2']).'", `city` = "'.trim($objArray['city']).'", `state` = "'.trim($objArray['state']).'", `pincode` = "'.trim($objArray['pincode']).'", `contact_person` = "'.trim($objArray['contactPerson']).'", `designation` = "'.trim($objArray['designation']).'", `mobile_no` = "'.trim($objArray['mobile']).'", `phone_no` = "'.trim(addslashes($objArray['phone'])).'", `email` = "'.trim(addslashes($objArray['email'])).'", `created_date` = "'.trim(addslashes($objArray['createdDate'])).'",`created_time` ="'.trim(addslashes($objArray['createdTime'])).'", `record_status` = "1" WHERE `supplier_code` ="'.trim($objArray['supplierCode']).'"';
	$this->ExecuteQuery($UpQuery, 'update');
 header('Location:' .$_SERVER['PHP_SELF'].'?server_response=success&supplier_code='.$objArray['supplierCode'].'&window_action=true');
	//$this->GetSupplierView($objArray);
	/*$url_addtnal_data=base64_encode("Supplier Details Updated Successfully");
    header('location:'.$_SERVER['PHP_SELF']."?sm=".$url_addtnal_data."&supplier_id=".$objArray['s_code']);
	return true;*/
}
   }
  
 /*}
  else 
 {
 
     $SelQuery2		= 'SELECT `supplier_name`,`address1`,`address2`,`city`,`state`,`pincode`,`contact_person`,`designation`,`mobile`,`phone`,`email`,`created_date` FROM `arka_supplier_reg_master` WHERE `supplier_code` = "'.$objArray['s_code'].'"  Limit 0,1';
     $CusDetail		= $this->ExecuteQuery($SelQuery2, 'select');
 
     $SelQuery3		= 'SELECT `supplier_name`,`address1`,`address2`,`city`,`state`,`pincode`,`contact_person`,`designation`,`mobile`,`phone`,`email`,`created_date` FROM `arka_supplier_reg_master` WHERE `supplier_name` = "'.$objArray['sname'].'" AND `address1` = "'.$objArray['address1'].'" AND `address2` = "'.$objArray['address2'].'" AND `city` = "'.$objArray['city'].'" AND `state` = "'.$objArray['state'].'" AND `pincode` = "'.$objArray['pincode'].'" AND `contact_person` = "'.$objArray['contactperson'].'" AND `designation` = "'.$objArray['designation'].'" AND  `mobile` = "'.$objArray['mobile'].'" AND `phone` = "'.$objArray['phone'].'" AND `email` = "'.$objArray['email'].'" AND `created_date` = "'.$objArray['cr_date'].'"  Limit 0,1';
  $CusDetail2		= $this->ExecuteQuery($SelQuery3, 'select');
  
  if($CusDetail==$CusDetail2)
  {
   $url_addtnal_data=base64_encode("Supplier Details Already Exists");
    header('location:'.$_SERVER['PHP_SELF']."?em=".$url_addtnal_data."&supplier_id=".$objArray['s_code']);
	return false;
  }
  else
  {
  
  
     	$UpQuery = 'UPDATE `arka_supplier_reg_master` SET `supplier_name` = "'.trim($objArray['sname']).'",`vat_no` = "'.trim($objArray['vat_no']).'",`service_tax_no` = "'.trim($objArray['service_tax_no']).'",`pan_no` = "'.trim($objArray['pan_no']).'",`cst_no` = "'.trim($objArray['cst_no']).'",`address1` = "'.trim($objArray['address1']).'", `address2` = "'.trim($objArray['address2']).'", `city` = "'.trim($objArray['city']).'", `state` = "'.trim($objArray['state']).'", `pincode` = "'.trim($objArray['pincode']).'", `contact_person` = "'.trim($objArray['contactperson']).'", `designation` = "'.trim($objArray['designation']).'", `mobile` = "'.trim($objArray['mobile']).'", `phone` = "'.trim(addslashes($objArray['phone'])).'", `email` = "'.trim(addslashes($objArray['email'])).'", `created_date` = "'.trim(addslashes($objArray['cr_date'])).'",`created_time` ="'.trim(addslashes($objArray['crtime'])).'", `status` = "1" WHERE `supplier_code` ="'.trim($objArray['s_code']).'"';
	$this->ExecuteQuery($UpQuery, 'update');
  
  
  	$url_addtnal_data=base64_encode("Supplier Details Updated Successfully");

    header('location:'.$_SERVER['PHP_SELF']."?sm=".$url_addtnal_data."&supplier_id=".$objArray['s_code']);
	return true;
  }
  
 }
 
 }*/
 
 
 /* Validation for Static Pages */
 function ChkDupliCust($c_id){
  global $objSmarty;
  if(!empty($c_id))
  echo $c_id;
 // $WhereClause	= ' AND `id` != '.$Ident;
 $SelQuery2		= 'SELECT * FROM `arka_supplier_reg_master` WHERE `supplier_code` = "'.$c_id['cst_no'].'" Limit 0,1';
  $CusDetail		= $this->ExecuteQuery($SelQuery2, 'select');
  if(!empty($CusDetail) && is_array($CusDetail))
   return false;
  else
   return true;
 }
 
 
 function chk_previous_data($c_id){
  global $objSmarty;
  
  if(!empty($c_id))
 // $WhereClause	= ' AND `id` != '.$Ident;
  $SelQuery2		= 'SELECT * FROM `arka_supplier_reg_master` WHERE `vat_no` = "'.$c_id['vat_no'].'" AND `record_status`=1 AND `supplier_code`!= "'.$c_id['s_code'].'"  AND `record_status`=1 AND `supplier_code`!= "'.$c_id['s_code'].'" AND `record_status`=1 AND `supplier_code`!= "'.$c_id['s_code'].'" OR `cst_no` = "'.$c_id['cst_no'].'" AND `record_status`=1 AND `supplier_code`!= "'.$c_id['s_code'].'"  Limit 0,1';
  $CusDetail		= $this->ExecuteQuery($SelQuery2, 'select');
  if(!empty($CusDetail) && is_array($CusDetail))
   return false;
  else
   return true;
 }
 
 
 /* Delete the Static Page */
 function DeleteID($id){
  global $objSmarty;
  $UpQuery1 = 'update `arka_supplier_reg_master` set record_status ="0" WHERE `pan_no`="'.$_REQUEST['pan_no'].'"';
 // echo($DelQuery);
  $this->ExecuteQuery($UpQuery1, 'delete');
  // $InsQuery4 = 'INSERT INTO `arka_deleted_records`(`deleted_data`, `deleted_table`, `deleted_by`) VALUES("'.$_REQUEST['deleid'].'","tasca_supplier_reg_master","'.$_SESSION['UserName'].'")';
	// $this->ExecuteQuery($InsQuery4, 'insert');
  $objSmarty->assign('SuccessMessage1', 'Deleted Successfully');
 // $this->GetSupplierLists();
 }
 /*Roles list */
 
  function RoleList(){
	global $objSmarty;
	 $SelQuery1	= 'SELECT role_name FROM arka_group_mapping WHERE `group_name` = "'.$_SESSION['USER_GROUP'].'" ORDER BY sl_no';
	  $RL		= $this->ExecuteQuery($SelQuery1, "select");

  if(!empty($RL) && is_array($RL))
   foreach($RL as $key=>$value){
    $RL[$key]['role_id'] = stripslashes($RL[$key]['role_id']);
	$RL[$key]['role_name'] = stripslashes($RL[$key]['role_name']);
	$objSmarty->assign('RList', $RL);
  return $RL;
		}
	}
	
 function GetVendorDetails($objArray='')  
	{
		global $objSmarty;
		$SelQuery4 = 'SELECT * FROM `arka_supplier_reg_master` WHERE pan_no ="'.$_GET['panNo'].'"' ;
		$PageList2		= $this->ExecuteQuery($SelQuery4, "select");
        $objSmarty->assign('PageList2', $PageList2);
	}	
	function GetVendorList($objArray='')  
	{
		global $objSmarty;
		$SelQuery5 = 'SELECT * FROM `arka_supplier_reg_master` WHERE record_status="1" ORDER BY supplier_code' ;
		$PageList		= $this->ExecuteQuery($SelQuery5, "select");
        $objSmarty->assign('PageList', $PageList);
	}	
	
  }

?>


