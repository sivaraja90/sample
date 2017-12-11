<?php
#####Class For Adding Content Management ######
class SupplierReg extends MysqlFns{
 
 /* class constructor */
 function SupplierReg(){
 $this->LDDisplayPath= $config['SiteGlobalPath']."class.SupplierReg.php";
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
 
  /* Get the Static Content list */
 	function GetSupplierView($objArray='')  {
		global $objSmarty;
		$objSmarty->assign('s_code',$_GET['supplier_id']);
		$SelQuery = 'SELECT * FROM `arka_supplier_reg_master` WHERE supplier_code ="'.$_GET['supplier_id'].'"' ;
		//echo $SelQuery;
		$LDList		= $this->ExecuteQuery($SelQuery, "select");
		$total_records = count($LDList);
		$record_per_page = $this->Limit;
		
		$objSmarty->assign("TList1",$_GET['supplier_id']);
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
				$PageList[$key]['Scode'] = stripslashes($PageList[$key]['supplier_code']);
				$PageList[$key]['Sname'] = stripslashes($PageList[$key]['supplier_name']);
				$objSmarty->assign('Scode',$PageList[$key]['supplier_code']);
				$objSmarty->assign('Sname',$PageList[$key]['supplier_name']);
			}		
			$objSmarty->assign('i', $listing_split->i);
			$objSmarty->assign('PageList', $PageList);
			echo $PageList;
			return $PageList;
	}	

 /* Get the Static Content list */
 function GetSupplierLists($objArray='')  {
  global $objSmarty;

  //$objSmarty->assign('title',$_GET['title']);
  $whereClause = 'WHERE status =1 ORDER BY supplier_code';
  if($_POST['search'] == ''){
  			if($_POST['supplier_code'])
	   			$whereClause = ' WHERE (`supplier_code` like "%'.$_POST['supplier_code'].'%") AND `status` =1 ORDER BY supplier_code';
	   		elseif($_POST['supplier_name'])
	   			$whereClause = ' WHERE (`supplier_name` like "%'.$_POST['supplier_name'].'%") AND `status` =1 ORDER BY supplier_code';
			elseif($_POST['address'])
				$whereClause = ' WHERE (`address1` like "%'.$_POST['address'].'%") AND `status` =1 ORDER BY supplier_code';
			elseif($_POST['city'])
				$whereClause = ' WHERE (`city` like "%'.$_POST['city'].'%") AND `status` =1 ORDER BY supplier_code';
			elseif($_POST['state'])
				$whereClause = ' WHERE (`state` like "%'.$_POST['state'].'%") AND `status` =1 ORDER BY state';
			elseif($_POST['pincode'])
				$whereClause = ' WHERE (`pincode` like "%'.$_POST['pincode'].'%") AND `status` =1 ORDER BY supplier_code';
			elseif($_POST['contact_person'])
				$whereClause = ' WHERE (`contact_person` like "%'.$_POST['contact_person'].'%") AND `status` =1 ORDER BY state';
			elseif($_POST['mobile'])
				$whereClause = ' WHERE (`mobile` like "%'.$_POST['mobile'].'%") AND `status` =1 ORDER BY supplier_code';
			elseif($_POST['email'])
				$whereClause = ' WHERE (`email` like "%'.$_POST['email'].'%") AND `status` =1 ORDER BY supplier_code';
			elseif($_POST['status'])
				$whereClause = ' WHERE (`status`like "%'.$_POST['status'].'%") AND `status` =1 ORDER BY supplier_code';
		/*	elseif($_POST['site_manager'])
				$whereClause = ' WHERE (`site_manager` like "%'.$_POST['site_manager'].'%") ORDER BY site_id';
			elseif($_POST['regional_manager'])
				$whereClause = ' WHERE (`regional_manager` like "%'.$_POST['regional_manager'].'%") ORDER BY site_id';*/
				
   $objSmarty->assign('supplier_code',$_POST['supplier_code']);
   $objSmarty->assign('supplier_name',$_POST['supplier_name']);
   $objSmarty->assign('address',$_POST['address']);
   $objSmarty->assign('city',$_POST['city']);
    $objSmarty->assign('contact_person',$_POST['contact_person']);
   $objSmarty->assign('pincode',$_POST['pincode']);
   $objSmarty->assign('mobile',$_POST['mobile']);
   $objSmarty->assign('email',$_POST['email']);
   $objSmarty->assign('status',$_POST['status']);

   /*
   $objSmarty->assign('site_manager',$_POST['site_manager']);
   $objSmarty->assign('regional_manager',$_POST['regional_manager']);
   */
  }
  $SelQuery		= 'SELECT * FROM `arka_supplier_reg_master`'.$whereClause;
  $listing_split = new MsplitPageResults($SelQuery, $this->Limit);
  if ( ($listing_split->number_of_rows > 0) )  {
   $objSmarty->assign('LinkPage',$listing_split->display_count(TEXT_DISPLAY_NUMBER_OF_RESULT));
   $objSmarty->assign('PerPageNavigation',TEXT_RESULT_PAGE1 . ' ' . $listing_split->display_links_submit($this->Limit, get_all_get_params(array('page', 'info', 'x', 'y')))); 
   $PageList = $this->ExecuteQuery($listing_split->sql_query, 'selectassoc');
  }
  if(!empty($PageList) && is_array($PageList))

   foreach($PageList as $key=>$value){
    $PageList[$key]['Scode'] = stripslashes($PageList[$key]['supplier_code']);
	$PageList[$key]['Sname'] = stripslashes($PageList[$key]['supplier_name']);
	$PageList[$key]['Sadd'] = stripslashes($PageList[$key]['address1']);
	$PageList[$key]['Scity'] = stripslashes($PageList[$key]['city']);
	$PageList[$key]['Sstate'] = stripslashes($PageList[$key]['state']);
	$PageList[$key]['Scontact'] = stripslashes($PageList[$key]['contact_person']);
	$PageList[$key]['Smobile'] = stripslashes($PageList[$key]['mobile']);
	$PageList[$key]['Semail'] = stripslashes($PageList[$key]['email']);
	$PageList[$key]['Sstatus'] = stripslashes($PageList[$key]['status']);

	
	 if($PageList[$key]['Sstatus'] == 1){
	 $PageList[$key]['Sstatus'] ='Active';
	}
	elseif($PageList[$key]['Sstatus'] == 0){
	 $PageList[$key]['Sstatus'] ='InActive';
	}
   }

  $objSmarty->assign('i', $listing_split->i);
  $objSmarty->assign('PageList', $PageList);
  return $PageList;
 
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
 
 /* Insert the content for  Static Pages */
 
 function InsertSupplierContent($objArray){
   global $objSmarty,$_POST;


   if(!$objArray['s_code']){
    $objSmarty->assign('ErrorMessage', 'Supplier Code should not be blank');
	return false;
   }elseif(!$objArray['sname']){
    $objSmarty->assign('ErrorMessage', 'Supplier Name should not be blank');
	return false;
   }elseif(!$objArray['vat_no']){
    $objSmarty->assign('ErrorMessage', 'VAT No should not be blank');
	return false;
   }elseif(!$objArray['service_tax_no']){
    $objSmarty->assign('ErrorMessage', 'Service Tax No should not be blank');
	return false;
   }elseif(!$objArray['city']){
    $objSmarty->assign('ErrorMessage', 'City should not be blank');
	return false;
   }elseif(!$objArray['state']){
    $objSmarty->assign('ErrorMessage', 'State should not be blank');
	return false;
   }elseif(!$objArray['pincode']){
    $objSmarty->assign('ErrorMessage', 'Pincode should not be blank');
	return false;
   }elseif(!preg_match("/^[0-9]{6}$/",$objArray['pincode'])){
    $objSmarty->assign('ErrorMessage', 'Pincode should be numeric and 6 Digits');
	return false;
   }elseif(!$objArray['pan_no']){
    $objSmarty->assign('ErrorMessage', 'PAN No should not be blank');
	return false;
   }elseif(!$objArray['cst_no']){
    $objSmarty->assign('ErrorMessage', 'CST No should not be blank');
	return false;
   }elseif(!$objArray['contactperson']){
    $objSmarty->assign('ErrorMessage', 'ContactPerson should not be blank');
	return false;
   }elseif(!$objArray['designation']){
    $objSmarty->assign('ErrorMessage', 'Designation should not be blank');
	return false;
   }elseif(!$objArray['mobile']){
    $objSmarty->assign('ErrorMessage', 'Mobile  should not be blank');
	return false;
   }elseif(!$objArray['email']){
    $objSmarty->assign('ErrorMessage', 'Email should not be blank');
	return false;
   }elseif(!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/", $objArray['email'])){
    $objSmarty->assign('ErrorMessage', 'Email is not valid');
	return false;
   }elseif(!$objArray['crdate']){
    $objSmarty->assign('ErrorMessage', 'Created Date should not be blank');
	return false;
   }elseif(!$objArray['created']){
    $objSmarty->assign('ErrorMessage', 'Created by should not be blank');
	return false;
   }
   if($this->chk_previous_data($objArray))
   {
   
   if($this->ChkDupliCust($objArray)){
   $objSmarty->assign('s_code', $objArray['s_code']);
   if($objArray['s_code'] && $objArray['sname']){
   $InsQuery = 'INSERT INTO `arka_supplier_reg_master`(`supplier_code`, `supplier_name`,`vat_no`,`service_tax_no`, `address1`, `address2`, `city`, `state`,`pincode`,`pan_no`,`cst_no`, `contact_person`, `designation`, `mobile`, `phone`, `email`, `created_date`, `created_time`, `created_by`, `status`) VALUES("'.trim(addslashes($objArray['s_code'])).'","'.trim(addslashes($objArray['sname'])).'","'.trim(addslashes($objArray['vat_no'])).'","'.trim(addslashes($objArray['service_tax_no'])).'","'.trim(addslashes($objArray['address1'])).'","'.trim(addslashes($objArray['address2'])).'","'.trim(addslashes($objArray['city'])).'","'.trim(addslashes($objArray['state'])).'","'.trim(addslashes($objArray['pincode'])).'","'.trim(addslashes($objArray['pan_no'])).'","'.trim(addslashes($objArray['cst_no'])).'","'.trim(addslashes($objArray['contactperson'])).'","'.trim(addslashes($objArray['designation'])).'","'.trim(addslashes($objArray['mobile'])).'","'.trim(addslashes($objArray['phone'])).'","'.trim(addslashes($objArray['email'])).'","'.trim(addslashes($objArray['crdate'])).'","'.trim(addslashes($objArray['crtime'])).'","'.trim(addslashes($objArray['created'])).'","1")';
  	 $this->ExecuteQuery($InsQuery, 'insert');
	 $this->SupplierReg();


	$oFCKeditor->Value		= '';
	$objSmarty->assign('Ss_code',$objArray['s_code']);
	$objSmarty->assign('s_code', '');
	$url_addtnal_data=base64_encode("New Supplier Added Successfully");
    header('location:'.$_SERVER['PHP_SELF']."?sm=".$url_addtnal_data."&supplier_id=".$objArray['s_code']);
	//PrePopulate($objArray, 'CusDetail');
	  }
 }
 else 
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
 }
 else
 {
     $objSmarty->assign('ErrorMessage', 'Supplier Details Already Exists');
	 
     //$url_addtnal_data=base64_encode("Supplier Details Already Exists");
   //  header('location:'.$_SERVER['PHP_SELF']."?em=".$url_addtnal_data."&supplier_id=".$objArray['s_code']);
 }
 }
 
 /* Edit the Static Page */
 function EditSupplier($objArray){
  global $objSmarty,$_REQUEST;
  $CusIdent=$_REQUEST['s_code'];
  $objSmarty->assign('Keyword', $this->Keyword);
  $objSmarty->assign('Operator', $this->Operator);
  $objSmarty->assign('Offset', $this->Offset);
  $objSmarty->assign('PerPage', $this->PerPage);
  
   if(!$objArray['s_code']){
	$url_addtnal_data=base64_encode("Supplier Code should not be blank");
    header('location:'.$_SERVER['PHP_SELF']."?em=".$url_addtnal_data."&supplier_id=".$objArray['s_code']);
	return false;
   }elseif(!$objArray['sname']){
	$url_addtnal_data=base64_encode("Supplier Name should not be blank");
    header('location:'.$_SERVER['PHP_SELF']."?em=".$url_addtnal_data."&supplier_id=".$objArray['s_code']);	
	return false;
   }elseif(!$objArray['vat_no']){
	$url_addtnal_data=base64_encode("VAT No should not be blank");
    header('location:'.$_SERVER['PHP_SELF']."?em=".$url_addtnal_data."&supplier_id=".$objArray['s_code']);	
	return false;
   }elseif(!$objArray['service_tax_no']){
	$url_addtnal_data=base64_encode("Service Tax No should not be blank");
    header('location:'.$_SERVER['PHP_SELF']."?em=".$url_addtnal_data."&supplier_id=".$objArray['s_code']);	
	return false;
   }elseif(!$objArray['city']){
	$url_addtnal_data=base64_encode("City should not be blank");
    header('location:'.$_SERVER['PHP_SELF']."?em=".$url_addtnal_data."&supplier_id=".$objArray['s_code']);	
	return false;
   }elseif(!$objArray['state']){
	$url_addtnal_data=base64_encode("State should not be blank");
    header('location:'.$_SERVER['PHP_SELF']."?em=".$url_addtnal_data."&supplier_id=".$objArray['s_code']);	
	return false;
   }elseif(!$objArray['pincode']){
	$url_addtnal_data=base64_encode("Pincode should not be blank");
    header('location:'.$_SERVER['PHP_SELF']."?em=".$url_addtnal_data."&supplier_id=".$objArray['s_code']);	
	return false;
   }elseif(!preg_match("/^[0-9]{6}$/",$objArray['pincode'])){
	$url_addtnal_data=base64_encode("Pincode should be numeric and 6 Digits");
    header('location:'.$_SERVER['PHP_SELF']."?em=".$url_addtnal_data."&supplier_id=".$objArray['s_code']);	
	return false;
   }elseif(!$objArray['pan_no']){
	$url_addtnal_data=base64_encode("PAN No should not be blank");
    header('location:'.$_SERVER['PHP_SELF']."?em=".$url_addtnal_data."&supplier_id=".$objArray['s_code']);	
	return false;
   }elseif(!$objArray['cst_no']){
	$url_addtnal_data=base64_encode("CST No should not be blank");
    header('location:'.$_SERVER['PHP_SELF']."?em=".$url_addtnal_data."&supplier_id=".$objArray['s_code']);	
	return false;
   }elseif(!$objArray['contactperson']){
	$url_addtnal_data=base64_encode("ContactPerson should not be blank");
    header('location:'.$_SERVER['PHP_SELF']."?em=".$url_addtnal_data."&supplier_id=".$objArray['s_code']);	
	return false;
   }elseif(!$objArray['designation']){
	$url_addtnal_data=base64_encode("Designation should not be blank");
    header('location:'.$_SERVER['PHP_SELF']."?em=".$url_addtnal_data."&supplier_id=".$objArray['s_code']);	
	return false;
   }elseif(!$objArray['mobile']){
	$url_addtnal_data=base64_encode("Mobile  should not be blank");
    header('location:'.$_SERVER['PHP_SELF']."?em=".$url_addtnal_data."&supplier_id=".$objArray['s_code']);	
	return false;
   }elseif(!$objArray['email']){
	$url_addtnal_data=base64_encode("Email should not be blank");
    header('location:'.$_SERVER['PHP_SELF']."?em=".$url_addtnal_data."&supplier_id=".$objArray['s_code']);	
	return false;
   }elseif(!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/", $objArray['email'])){
	$url_addtnal_data=base64_encode("Email is not valid");
    header('location:'.$_SERVER['PHP_SELF']."?em=".$url_addtnal_data."&supplier_id=".$objArray['s_code']);		
	return false;
   }elseif(!$objArray['cr_date']){
	$url_addtnal_data=base64_encode("Created Date should not be blank");
    header('location:'.$_SERVER['PHP_SELF']."?em=".$url_addtnal_data."&supplier_id=".$objArray['s_code']);	
	return false;
   }elseif(!$objArray['created']){
	$url_addtnal_data=base64_encode("Created by should not be blank");
    header('location:'.$_SERVER['PHP_SELF']."?em=".$url_addtnal_data."&supplier_id=".$objArray['s_code']);	
	return false;
   }
   if($this->ChkDupliCust($objArray)) {
    $objSmarty->assign('s_code', $objArray['s_code']);
   if($objArray['s_code'] && $objArray['sname']){
   	$UpQuery = 'UPDATE `arka_supplier_reg_master` SET `supplier_name` = "'.trim($objArray['sname']).'",`vat_no` = "'.trim($objArray['vat_no']).'",`service_tax_no` = "'.trim($objArray['service_tax_no']).'",`pan_no` = "'.trim($objArray['pan_no']).'",`cst_no` = "'.trim($objArray['cst_no']).'",`address1` = "'.trim($objArray['address1']).'", `address2` = "'.trim($objArray['address2']).'", `city` = "'.trim($objArray['city']).'", `state` = "'.trim($objArray['state']).'", `pincode` = "'.trim($objArray['pincode']).'", `contact_person` = "'.trim($objArray['contactperson']).'", `designation` = "'.trim($objArray['designation']).'", `mobile` = "'.trim($objArray['mobile']).'", `phone` = "'.trim(addslashes($objArray['phone'])).'", `email` = "'.trim(addslashes($objArray['email'])).'", `created_date` = "'.trim(addslashes($objArray['cr_date'])).'",`created_time` ="'.trim(addslashes($objArray['crtime'])).'", `status` = "1" WHERE `supplier_code` ="'.trim($objArray['s_code']).'"';
	$this->ExecuteQuery($UpQuery, 'update');

	//$this->GetSupplierView($objArray);
	$url_addtnal_data=base64_encode("Supplier Details Updated Successfully");
    header('location:'.$_SERVER['PHP_SELF']."?sm=".$url_addtnal_data."&supplier_id=".$objArray['s_code']);
	return true;

   }
  
 }
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
 
 }
 
 /* Display the Static Page */
 function GetSupplierById(){
  global $objSmarty;
/*  $objSmarty->assign('Keyword', $this->Keyword);
  $objSmarty->assign('Operator', $this->Operator);
  $objSmarty->assign('Offset', $this->Offset);
  $objSmarty->assign('PerPage', $this->PerPage);*/
  $SelQuery3	= 'SELECT max(supplier_code) FROM `arka_supplier_reg_master` Limit 0,1';
  $CusDetail		= $this->ExecuteQuery($SelQuery3, 'select');
  $CusDetail[0]['customer_id'] = stripslashes($CusDetail[0]['customer_detail']);
  $objSmarty->assign('hdevice_id', stripslashes($CusDetail[0]['customer_id']));
  $val = intval(substr($CusDetail[0]['customer_id'],0,4), 5);
  $objSmarty->assign('c_id', $CusDetail[0]['customer_id']);
 /* 
  $DevDetail[0]['type'] = stripslashes($DevDetail[0]['type']);
  $objSmarty->assign('type', $DevDetail[0]['type']);
  
  $DevDetail[0]['model'] = stripslashes($DevDetail[0]['model']);
  $objSmarty->assign('model', $DevDetail[0]['model']);
  
  $DevDetail[0]['txttitle'] = stripslashes($DevDetail[0]['txttitle']);
  $objSmarty->assign('txttitle', $DevDetail[0]['txttitle']);
  
  $DevDetail[0]['image'] = stripslashes($DevDetail[0]['image']);
  $objSmarty->assign('image', $DevDetail[0]['image']);
  
  $DevDetail[0]['image_view'] = stripslashes($DevDetail[0]['image_view']);
  $objSmarty->assign('image_view', $DevDetail[0]['image_view']);
  
  $DevDetail[0]['image_model1'] = stripslashes($DevDetail[0]['image_model1']);
  $objSmarty->assign('image_model1', $DevDetail[0]['image_model1']);
  
   $DevDetail[0]['image_model2'] = stripslashes($DevDetail[0]['image_model2']);
  $objSmarty->assign('image_model2', $DevDetail[0]['image_model2']);
  
   $DevDetail[0]['image_model3'] = stripslashes($DevDetail[0]['image_model3']);
  $objSmarty->assign('image_model3', $DevDetail[0]['image_model3']);
  
  $DevDetail[0]['content'] = stripslashes($DevDetail[0]['content']);
  $oFCKeditor->Value = $DevDetail[0]['content'];
  $objSmarty->assign('content', $DevDetail[0]['content']);
  $objSmarty->assign('Editor', '$Editor');
  return $DevDetail[0]['content'];*/
 }
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
  $SelQuery2		= 'SELECT * FROM `arka_supplier_reg_master` WHERE `vat_no` = "'.$c_id['vat_no'].'" AND `status`=1 AND `supplier_code`!= "'.$c_id['s_code'].'"  AND `status`=1 AND `supplier_code`!= "'.$c_id['s_code'].'" AND `status`=1 AND `supplier_code`!= "'.$c_id['s_code'].'" OR `cst_no` = "'.$c_id['cst_no'].'" AND `status`=1 AND `supplier_code`!= "'.$c_id['s_code'].'"  Limit 0,1';
  $CusDetail		= $this->ExecuteQuery($SelQuery2, 'select');
  if(!empty($CusDetail) && is_array($CusDetail))
   return false;
  else
   return true;
 }
 
 /* Delete the Static Page */
 function DeleteID($deleid){
  global $objSmarty;
  $DelQuery = 'UPDATE `arka_supplier_reg_master` set status ="0" WHERE `supplier_code`="'.$_REQUEST['deleid'].'"';
 // echo($DelQuery);
  $this->ExecuteQuery($DelQuery, 'delete');
   $InsQuery4 = 'INSERT INTO `arka_deleted_records`(`deleted_data`, `deleted_table`, `deleted_by`) VALUES("'.$_REQUEST['deleid'].'","tasca_supplier_reg_master","'.$_SESSION['UserName'].'")';
	 $this->ExecuteQuery($InsQuery4, 'insert');
  $objSmarty->assign('SuccessMessage', 'Deleted Successfully');
  $this->GetSupplierLists();
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
	 $DelQuery = 'DELETE FROM `arka_site_reg_master` WHERE `id` IN ( '.$BanIds.' )' ;
	 $this->ExecuteQuery($DelQuery, 'delete');
	 $objSmarty->assign('SuccessMessage', 'Deleted Successfully');
	 break;
	case 'Active':
	 $UpQuery = 'UPDATE `arka_site_reg_master` SET `status` =1 WHERE `id` IN (' . $BanIds . ')' ;
	 $this->ExecuteQuery($UpQuery, 'update');
	 $objSmarty->assign('SuccessMessage', 'The Contents Activated Successfully');
	 break;
	case 'InActive':
	 $UpQuery = 'UPDATE `arka_site_reg_master` SET `status` =0 WHERE `id` IN (' . $BanIds . ')' ;
	 $this->ExecuteQuery($UpQuery, 'update');
	 $objSmarty->assign('SuccessMessage', 'The Contents In-Activated Successfully');
	 break;
   }
 }
}

?>


