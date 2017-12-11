<?php
#####Class For Adding Content Management ######
class VendorReg extends MysqlFns{
 
 /* class constructor */
 function VendorReg(){
 $this->LDDisplayPath= $config['SiteGlobalPath']."class.VendorReg.php";
  global $config;
  global $objSmarty;
  $this->MysqlFns();
  $this->Limit = 20;
 }
 
 function myCurl($url)
{
    $cookie_file_path = tempnam ("tmp", "CURLCOOKIE");

    $curl = curl_init();
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($curl, CURLOPT_HEADER, 0);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($curl, CURLOPT_AUTOREFERER, 0);
    curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 60);
    curl_setopt($curl, CURLOPT_TIMEOUT, 60);
    curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
    curl_setopt($curl, CURLOPT_COOKIEFILE, $cookie_file_path);
    curl_setopt($curl, CURLOPT_COOKIEJAR, $cookie_file_path);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($curl, CURLOPT_COOKIESESSION, TRUE);
    curl_setopt($curl, CURLOPT_COOKIE, session_name() . '=' . session_id());
    curl_setopt($curl, CURLOPT_URL, $url);

    $a = curl_exec ($curl);
    return $a;
}
  /* Get the Static Content list */
 	function GetSiteView($objArray='')  {
		global $objSmarty;
		$objSmarty->assign('s_id',$_GET['sit_id']);
		$SelQuery = 'SELECT * FROM `prime_site_reg_master` WHERE site_id ="'.$_GET['sit_id'].'"' ;
		//echo $SelQuery;
		$LDList		= $this->ExecuteQuery($SelQuery, "select");
		$total_records = count($LDList);
		$record_per_page = $this->Limit;
		
		$objSmarty->assign("TList1",$_GET['sit_id']);
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
				$PageList[$key]['Sid'] = stripslashes($PageList[$key]['site_id']);
				$PageList[$key]['Sname'] = stripslashes($PageList[$key]['site_name']);
				$objSmarty->assign('Sid',$PageList[$key]['site_id']);
				$objSmarty->assign('Sname',$PageList[$key]['site_name']);
			}		
			$objSmarty->assign('i', $listing_split->i);
			$objSmarty->assign('PageList', $PageList);
			echo $PageList;
			return $PageList;
	}	

 /* Get the Static Content list */
 function GetSiteLists($objArray='')  {
  global $objSmarty;

  //$objSmarty->assign('title',$_GET['title']);
  $whereClause = 'WHERE status =1 ORDER BY site_id';
  if($_POST['search'] == ''){
  			if($_POST['turbines'])
	   			$whereClause = ' WHERE (`no_of_turbines` like "%'.$_POST['turbines'].'%") AND `status` =1 ORDER BY site_id';
	   		elseif($_POST['site_name'])
	   			$whereClause = ' WHERE (`site_name` like "%'.$_POST['site_name'].'%") AND `status` =1 ORDER BY site_id';
			elseif($_POST['region'])
				$whereClause = ' WHERE (`region` like "%'.$_POST['region'].'%") AND `status` =1 ORDER BY site_id';
			elseif($_POST['district'])
				$whereClause = ' WHERE (`district` like "%'.$_POST['district'].'%") AND `status` =1 ORDER BY site_id';
			elseif($_POST['address1'])
				$whereClause = ' WHERE (`address1` like "%'.$_POST['address1'].'%") AND `status` =1 ORDER BY site_id';
			elseif($_POST['city'])
				$whereClause = ' WHERE (`city` like "%'.$_POST['city'].'%") AND `status` =1 ORDER BY site_id';
			elseif($_POST['state'])
				$whereClause = ' WHERE (`state` like "%'.$_POST['state'].'%") AND `status` =1 ORDER BY site_id';
			elseif($_POST['contact_person'])
				$whereClause = ' WHERE (`contact_person` like "%'.$_POST['contact_person'].'%") AND `status` =1 ORDER BY site_id';
			elseif($_POST['mobile'])
				$whereClause = ' WHERE (`mobile` like "%'.$_POST['mobile'].'%") AND `status` =1 ORDER BY site_id';
			elseif($_POST['email'])
				$whereClause = ' WHERE (`email` like "%'.$_POST['email'].'%") AND `status` =1 ORDER BY site_id';
			elseif($_POST['date'])
				$whereClause = ' WHERE (`created_date` like "%'.$_POST['date'].'%") AND `status` =1 ORDER BY site_id';
			elseif($_POST['status'])
				$whereClause = ' WHERE (`status`like "%'.$_POST['status'].'%") AND `status` =1 ORDER BY site_id';
		/*	elseif($_POST['site_manager'])
				$whereClause = ' WHERE (`site_manager` like "%'.$_POST['site_manager'].'%") ORDER BY site_id';
			elseif($_POST['regional_manager'])
				$whereClause = ' WHERE (`regional_manager` like "%'.$_POST['regional_manager'].'%") ORDER BY site_id';*/
				
   $objSmarty->assign('site_id',$_POST['site_id']);
   $objSmarty->assign('site_name',$_POST['site_name']);
   $objSmarty->assign('region',$_POST['region']);
   $objSmarty->assign('district',$_POST['district']);
   $objSmarty->assign('address1',$_POST['address1']);
   $objSmarty->assign('city',$_POST['city']);
   $objSmarty->assign('state',$_POST['state']);
   $objSmarty->assign('contact_person',$_POST['contact_person']);
   $objSmarty->assign('mobile',$_POST['mobile']);
   $objSmarty->assign('email',$_POST['email']);
   $objSmarty->assign('status',$_POST['status']);
   /*
   $objSmarty->assign('site_manager',$_POST['site_manager']);
   $objSmarty->assign('regional_manager',$_POST['regional_manager']);
   */
  }
  $SelQuery		= 'SELECT * FROM `prime_site_reg_master`'.$whereClause;
  $listing_split = new MsplitPageResults($SelQuery, $this->Limit);
  if ( ($listing_split->number_of_rows > 0) )  {
   $objSmarty->assign('LinkPage',$listing_split->display_count(TEXT_DISPLAY_NUMBER_OF_RESULT));
   $objSmarty->assign('PerPageNavigation',TEXT_RESULT_PAGE1 . ' ' . $listing_split->display_links($this->Limit, get_all_get_params(array('page', 'info', 'x', 'y')))); 
   $PageList = $this->ExecuteQuery($listing_split->sql_query, 'selectassoc');
  }
  if(!empty($PageList) && is_array($PageList))

   foreach($PageList as $key=>$value){
    $PageList[$key]['ID'] = stripslashes($PageList[$key]['site_id']);
	$PageList[$key]['Sname'] = stripslashes($PageList[$key]['site_name']);
	$PageList[$key]['SRegion'] = stripslashes($PageList[$key]['region']);
	$PageList[$key]['Sdistrict'] = stripslashes($PageList[$key]['district']);
	$PageList[$key]['Sadd'] = stripslashes($PageList[$key]['address1']);
	$PageList[$key]['Scity'] = stripslashes($PageList[$key]['city']);
	$PageList[$key]['Sstate'] = stripslashes($PageList[$key]['state']);
	$PageList[$key]['Scontact'] = stripslashes($PageList[$key]['contact_person']);
	$PageList[$key]['Smobile'] = stripslashes($PageList[$key]['mobile']);
	$PageList[$key]['Semail'] = stripslashes($PageList[$key]['email']);
	$PageList[$key]['Sstatus'] = stripslashes($PageList[$key]['status']);
    $PageList[$key]['sum_up'] += stripslashes($PageList[$key]['no_of_turbines']);
	//echo $PageList[$key]['sum_up'];
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
    $DelQuery = 'DELETE FROM `prime_site_reg_master` WHERE `site_id` ='.$ConId;
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
 
 function InsertSiteContent($objArray){
   global $objSmarty,$_POST;
//$config['time'] = '%I:%M:%S %p';
//$tim = {$smarty.now|date_format:'%H:%M:%S'}
//echo  $date->format( 'h:i:s A' );
//$objSmarty->assign('Time', $date->format( 'h:i:s A' ));

  
 //if($this->ChkDupliCust(trim(addslashes($objArray['c_id'])))){
   if(!$objArray['s_id']){
    $objSmarty->assign('ErrorMessage', 'Site ID should not be blank');
	return false;
   }elseif(!$objArray['sname']){
    $objSmarty->assign('ErrorMessage', 'Site Name should not be blank');
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
   }elseif(!$objArray['district']){
    $objSmarty->assign('ErrorMessage', 'District should not be blank');
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
   }elseif(!$objArray['region']){
    $objSmarty->assign('ErrorMessage', 'Region should not be blank');
	return false;
   }elseif(!$objArray['crdate']){
    $objSmarty->assign('ErrorMessage', 'Created Date should not be blank');
	return false;
   }elseif(!$objArray['created']){
    $objSmarty->assign('ErrorMessage', 'Created by should not be blank');
	return false;
   }elseif(!$objArray['no_of_turbines']){
    $objSmarty->assign('ErrorMessage', 'No of turbines should not be blank');
	return false;
   }elseif(!preg_match("/^[0-9]{1,}$/",$objArray['no_of_turbines'])){
    $objSmarty->assign('ErrorMessage', 'No of turbines should be numeric');
	return false;
   }
   $objSmarty->assign('s_id', $objArray['s_id']);
   if($objArray['s_id'] && $objArray['sname']){
   $InsQuery = 'INSERT INTO `prime_site_reg_master`(`site_id`, `site_name`, `address1`,`village`, `city`, `state`,`pincode`, `district`, `contact_person`, `designation`, `mobile`, `phone`, `email`, `region`, `created_date`, `created_time`, `created_by`, `status`,`no_of_turbines`) VALUES("'.trim(addslashes($objArray['s_id'])).'","'.trim(addslashes($objArray['sname'])).'","'.trim(addslashes($objArray['address1'])).'","'.trim(addslashes($objArray['village'])).'","'.trim(addslashes($objArray['city'])).'","'.trim(addslashes($objArray['state'])).'","'.trim(addslashes($objArray['pincode'])).'","'.trim(addslashes($objArray['district'])).'","'.trim(addslashes($objArray['contactperson'])).'","'.trim(addslashes($objArray['designation'])).'","'.trim(addslashes($objArray['mobile'])).'","'.trim(addslashes($objArray['phone'])).'","'.trim(addslashes($objArray['email'])).'","'.trim(addslashes($objArray['region'])).'","'.trim(addslashes($objArray['crdate'])).'","'.trim(addslashes($objArray['crtime'])).'","'.trim(addslashes($objArray['created'])).'","1","'.trim(addslashes($objArray['no_of_turbines'])).'")';
  	 $this->ExecuteQuery($InsQuery, 'insert');
	 $this->SiteReg();

/*	 $InsQuery2 = 'INSERT INTO `prime_cus_entitle_status`(`customer_id`, `customer_name`, `customer_type`, `account_manager`, `delivery_manager`, `entitled`,`current_used`, `status`) VALUES("'.trim(addslashes($objArray['s_id'])).'","'.trim(addslashes($objArray['sname'])).'","'.trim(addslashes($objArray['region'])).'","'.trim(addslashes($objArray['reg_mgr'])).'","'.trim(addslashes($objArray['site_mgr'])).'","0","0","1")';
	 $this->ExecuteQuery($InsQuery2, 'insert');*/

	$oFCKeditor->Value		= '';
	$objSmarty->assign('Ss_id',$objArray['s_id']);
	$objSmarty->assign('s_id', '');
	$objSmarty->assign('SuccessMessage', 'New Site Added Successfully');
	//PrePopulate($objArray, 'CusDetail');
        return true;
	  }
          else
          {
           return false;
          }
 // }
 }
 
 /* Edit the Static Page */
 function EditSite($objArray){
  global $objSmarty,$_REQUEST;
  $CusIdent=$_REQUEST['s_id'];
  $objSmarty->assign('Keyword', $this->Keyword);
  $objSmarty->assign('Operator', $this->Operator);
  $objSmarty->assign('Offset', $this->Offset);
  $objSmarty->assign('PerPage', $this->PerPage);
 // if($this->ChkDupliCust(trim(addslashes($objArray['c_id'])),$CusIdent)) {
   if(!$objArray['s_id']){
    $objSmarty->assign('ErrorMessage', 'Site ID should not be blank');
	return false;
   }elseif(!$objArray['sname']){
    $objSmarty->assign('ErrorMessage', 'Site Name should not be blank');
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
   }elseif(!$objArray['district']){
    $objSmarty->assign('ErrorMessage', 'District should not be blank');
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
   }elseif(!$objArray['region']){
    $objSmarty->assign('ErrorMessage', 'Region should not be blank');
	return false;
   }elseif(!$objArray['cr_date']){
    $objSmarty->assign('ErrorMessage', 'Created Date should not be blank');
	return false;
   }elseif(!$objArray['created']){
    $objSmarty->assign('ErrorMessage', 'Created by should not be blank');
	return false;
   } 
    $objSmarty->assign('s_id', $objArray['s_id']);
   if($objArray['s_id'] && $objArray['sname']){
   	$UpQuery = 'UPDATE `prime_site_reg_master` SET `address1` = "'.trim($objArray['address1']).'", `village` = "'.trim($objArray['village']).'", `city` = "'.trim($objArray['city']).'", `state` = "'.trim($objArray['state']).'", `pincode` = "'.trim($objArray['pincode']).'", `district` = "'.trim($objArray['district']).'", `contact_person` = "'.trim($objArray['contactperson']).'", `designation` = "'.trim($objArray['designation']).'", `mobile` = "'.trim($objArray['mobile']).'", `phone` = "'.trim(addslashes($objArray['phone'])).'", `email` = "'.trim(addslashes($objArray['email'])).'", `region` = "'.trim(addslashes($objArray['region'])).'", `created_date` = "'.trim(addslashes($objArray['cr_date'])).'",`created_time` ="'.trim(addslashes($objArray['crtime'])).'", `status` = "1" WHERE `site_id` ="'.trim($objArray['s_id']).'"';
	$this->ExecuteQuery($UpQuery, 'update');
	$this->GetSiteView($objArray);
	$objSmarty->assign('SuccessMessage', 'Site Details Updated Successfully');
	return true;

   }
  

 // }
 }
 
 /* Display the Static Page */
 function GetSiteById(){
  global $objSmarty;
/*  $objSmarty->assign('Keyword', $this->Keyword);
  $objSmarty->assign('Operator', $this->Operator);
  $objSmarty->assign('Offset', $this->Offset);
  $objSmarty->assign('PerPage', $this->PerPage);*/
  $SelQuery3	= 'SELECT max(site_id) FROM `prime_site_reg_master` Limit 0,1';
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
 // $WhereClause	= ' AND `id` != '.$Ident;
  $SelQuery2		= 'SELECT * FROM `prime_site_reg_master` WHERE `customer_id` = "'.$c_id.'" Limit 0,1';
  $CusDetail		= $this->ExecuteQuery($SelQuery2, 'select');
  if(!empty($CusDetail) && is_array($CusDetail))
   return false;
  else
   return true;
 }
 /* Delete the Static Page */
 function DeleteID($deleid){
  global $objSmarty;
  $DelQuery = 'UPDATE `prime_site_reg_master` set status ="0" WHERE `site_id`="'.$_REQUEST['deleid'].'"';
 // echo($DelQuery);
  $this->ExecuteQuery($DelQuery, 'delete');
   $InsQuery4 = 'INSERT INTO `prime_deleted_records`(`deleted_data`, `deleted_table`, `deleted_by`) VALUES("'.$_REQUEST['deleid'].'","prime_site_reg_master","'.$_SESSION['UserName'].'")';
	 $this->ExecuteQuery($InsQuery4, 'insert');
  $objSmarty->assign('SuccessMessage', 'Deleted Successfully');
  $this->GetSiteLists();
 }
 /*Roles list */
 
 function RolesLists(){
	global $objSmarty;
	 $SelQuery1	= 'SELECT role_name FROM prime_group_mapping WHERE `group_name` = "'.$_SESSION['USER_GROUP'].'" AND `status` <> 0 ORDER BY sl_no';
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
	 $DelQuery = 'DELETE FROM `prime_site_reg_master` WHERE `id` IN ( '.$BanIds.' )' ;
	 $this->ExecuteQuery($DelQuery, 'delete');
	 $objSmarty->assign('SuccessMessage', 'Deleted Successfully');
	 break;
	case 'Active':
	 $UpQuery = 'UPDATE `prime_site_reg_master` SET `status` =1 WHERE `id` IN (' . $BanIds . ')' ;
	 $this->ExecuteQuery($UpQuery, 'update');
	 $objSmarty->assign('SuccessMessage', 'The Contents Activated Successfully');
	 break;
	case 'InActive':
	 $UpQuery = 'UPDATE `prime_site_reg_master` SET `status` =0 WHERE `id` IN (' . $BanIds . ')' ;
	 $this->ExecuteQuery($UpQuery, 'update');
	 $objSmarty->assign('SuccessMessage', 'The Contents In-Activated Successfully');
	 break;
   }
 }
 /*Detail View of Vendor Contact*/
  function ViewVendor()
 {
global $objSmarty,$config;
$tbl = $config['DBPrefix'];
 $SelQuery2 = 'SELECT * FROM `'.$tbl.'vendor_contact_details` WHERE vendor_id ="'.$_GET['vendor_id'].'"' ;
// $SelQuery2 = 'SELECT * FROM `'.$tbl.'quote_details` WHERE '.$tbl.'quote_details.quote_id';
			$ListView = $this->ExecuteQuery($SelQuery2, "select");
			$objSmarty->assign('ListView', $ListView);
			return $ListView;

 }
 function ViewVendorAddress()
 {
global $objSmarty,$config;
$tbl = $config['DBPrefix'];
 $SelQuery2 = 'SELECT * FROM `'.$tbl.'vendor_address_details` WHERE vendor_id ="'.$_GET['vendor_id'].'"' ;
// $SelQuery2 = 'SELECT * FROM `'.$tbl.'quote_details` WHERE '.$tbl.'quote_details.quote_id';
			$ListView2 = $this->ExecuteQuery($SelQuery2, "select");
			$objSmarty->assign('ListView2', $ListView2);
			return $ListView2;

 }
}

?>


