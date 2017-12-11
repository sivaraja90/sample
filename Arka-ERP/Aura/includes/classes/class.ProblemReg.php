<?php
#####Class For Adding Content Management ######
class ProblemReg extends MysqlFns{
 
 /* class constructor */
 function ProblemReg(){
 $this->LDDisplayPath= $config['SiteGlobalPath']."class.ProblemReg.php";
  global $config;
  global $objSmarty;
  $this->MysqlFns();
  $this->Limit = 20;
   $this->Keyword = '';
  $this->Operator = '';
  $this->PerPage = '';

   $SelQuerys	= 'SELECT max(problem_id) as last FROM `arka_problem_tickets` Limit 0,1';
 //  echo $SelQuery;
   $ProDetail	= $this->ExecuteQuery($SelQuerys, 'select');
 //  	echo $DevDetail[0]['last'];
   $ProDetail[0]['problem_id'] = stripslashes($ProDetail[0]['last']);
  	$p_id1 = preg_replace("/[^0-9\.]/", '', $ProDetail[0]['problem_id']);
	$p_id1= $c_id1 + 1;
	$str = str_split($ProDetail[0]['last'], 1);
	$p_id = $str[0]. "" .$p_id1;
   $objSmarty->assign('p_id', $_id);
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
 	function GetProblemView($objArray='')  {
		global $objSmarty;
		$objSmarty->assign('p_id',$_GET['tkt_id']);
		$SelQuery = 'SELECT * FROM `arka_problem_tickets` WHERE problem_id ="'.$_GET['tkt_id'].'"' ;
		//echo $SelQuery;
		$LDList		= $this->ExecuteQuery($SelQuery, "select");
		$total_records = count($LDList);
		$record_per_page = $this->Limit;
		
		$objSmarty->assign("TList1",$_GET['tkt_id']);
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
				$PageList[$key]['Pid'] = stripslashes($PageList[$key]['problem_id']);
				$PageList[$key]['Summary'] = stripslashes($PageList[$key]['summary']);
				$objSmarty->assign('Pid',$PageList[$key]['pro']);
				$objSmarty->assign('Summary',$PageList[$key]['summary']);
			}		
			$objSmarty->assign('i', $listing_split->i);
			$objSmarty->assign('PageList', $PageList);
			echo $PageList;
			return $PageList;
	}	

 /* Get the Static Content list */
 function GetProblemLists($objArray='')  {
  global $objSmarty;

  //$objSmarty->assign('title',$_GET['title']);
  $whereClause = 'ORDER BY reported_date';
  if($_POST['search'] == ''){
  			if($_POST['ticket_id'])
	   			$whereClause = ' WHERE (`problem_id` like "%'.$_POST['ticket_id'].'%") ORDER BY reported_date';
	   		elseif($_POST['device_id'])
	   			$whereClause = ' WHERE (`device_id` like "%'.$_POST['device_id'].'%") ORDER BY reported_date';
			elseif($_POST['summary'])
				$whereClause = ' WHERE (`summary` like "%'.$_POST['summary'].'%") ORDER BY reported_date';
			elseif($_POST['reported_by'])
				$whereClause = ' WHERE (`reporter_name` like "%'.$_POST['reported_by'].'%") ORDER BY reported_date';
			elseif($_POST['customer_id'])
				$whereClause = ' WHERE (`customer_id` like "%'.$_POST['customer_id'].'%") ORDER BY reported_date';
			elseif($_POST['priority'])
				$whereClause = ' WHERE (`priority` like "%'.$_POST['priority'].'%") ORDER BY reported_date';
			elseif($_POST['status'])
				$whereClause = ' WHERE (`status` like "%'.$_POST['status'].'%") ORDER BY reported_date';
			elseif($_POST['assigned_to'])
				$whereClause = ' WHERE (`assigned_to` like "%'.$_POST['assigned_to'].'%") ORDER BY reported_date';
			elseif($_POST['owner_group'])
				$whereClause = ' WHERE (`owner_group` like "%'.$_POST['owner_group'].'%") ORDER BY reported_date';
			elseif($_POST['reported_date'])
				$whereClause = ' WHERE (`reported_date` like "%'.$_POST['reported_date'].'%") ORDER BY reported_date';
			elseif($_POST['closed_date'])
				$whereClause = ' WHERE (`closed_date`like "%'.$_POST['closed_date'].'%") ORDER BY reported_date';
			elseif($_POST['service_plan'])
				$whereClause = ' WHERE (`service_plan` like "%'.$_POST['service_plan'].'%") ORDER BY reported_date';
			elseif($_POST['pay_status'])
				$whereClause = ' WHERE (`pay_status` like "%'.$_POST['pay_status'].'%") ORDER BY reported_date';
				
   $objSmarty->assign('problem_id',$_POST['problem_id']);
   $objSmarty->assign('device_id',$_POST['device_id']);
   $objSmarty->assign('summary',$_POST['summary']);
   $objSmarty->assign('reporter_name',$_POST['reported_by']);
   $objSmarty->assign('customer_id',$_POST['customer_id']);
   $objSmarty->assign('priority',$_POST['priority']);
   $objSmarty->assign('status',$_POST['status']);
   $objSmarty->assign('assigned_to',$_POST['assigned_to']);
   $objSmarty->assign('owner_group',$_POST['owner_group']);
   $objSmarty->assign('reported_date',$_POST['reported_date']);
    $objSmarty->assign('reported_time',$_POST['reported_time']);
   $objSmarty->assign('closed_date',$_POST['closed_date']);
   $objSmarty->assign('service_plan',$_POST['service_plan']);
   $objSmarty->assign('pay_status',$_POST['pay_status']);
   
  }
  $SelQuery		= 'SELECT * FROM `arka_problem_tickets`'.$whereClause;
  $listing_split = new MsplitPageResults($SelQuery, $this->Limit);
  if ( ($listing_split->number_of_rows > 0) )  {
   $objSmarty->assign('LinkPage',$listing_split->display_count(TEXT_DISPLAY_NUMBER_OF_RESULT));
   $objSmarty->assign('PerPageNavigation',TEXT_RESULT_PAGE1 . ' ' . $listing_split->display_links($this->Limit, get_all_get_params(array('page', 'info', 'x', 'y')))); 
   $PageList = $this->ExecuteQuery($listing_split->sql_query, 'selectassoc');
  }
  if(!empty($PageList) && is_array($PageList))

   foreach($PageList as $key=>$value){
    $PageList[$key]['PId'] = stripslashes($PageList[$key]['problem_id']);
	$PageList[$key]['DId'] = stripslashes($PageList[$key]['device_id']);
	$PageList[$key]['Summary'] = stripslashes($PageList[$key]['summary']);
	$PageList[$key]['RName'] = stripslashes($PageList[$key]['reporter_name']);
	$PageList[$key]['CId'] = stripslashes($PageList[$key]['customer_id']);
	$PageList[$key]['Priority'] = stripslashes($PageList[$key]['priority']);
	$PageList[$key]['Status'] = stripslashes($PageList[$key]['status']);
	$PageList[$key]['Assgned'] = stripslashes($PageList[$key]['assigned_to']);
	$PageList[$key]['OwnerG'] = stripslashes($PageList[$key]['owner_group']);
	$PageList[$key]['RepDate'] = stripslashes($PageList[$key]['reported_date']);
	$PageList[$key]['RepTime'] = stripslashes($PageList[$key]['reported_time']);
	$PageList[$key]['CDate'] = stripslashes($PageList[$key]['closed_date']);
	$PageList[$key]['SPlan'] = stripslashes($PageList[$key]['service_plan']);
	$PageList[$key]['PayStatus'] = stripslashes($PageList[$key]['pay_status']);
 
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
    $DelQuery = 'DELETE FROM `arka_cus_reg_master` WHERE `id` ='.$ConId;
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
 
 function InsertCustomerContent($objArray){
   global $objSmarty,$_POST;
//$config['time'] = '%I:%M:%S %p';
//$tim = {$smarty.now|date_format:'%H:%M:%S'}
//echo  $date->format( 'h:i:s A' );
//$objSmarty->assign('Time', $date->format( 'h:i:s A' ));

  $objSmarty->assign('Keyword', $this->Keyword);
  $objSmarty->assign('Operator', $this->Operator);
  $objSmarty->assign('Offset', $this->Offset);
  $objSmarty->assign('PerPage', $this->PerPage);
 //if($this->ChkDupliCust(trim(addslashes($objArray['c_id'])))){
   if(!$objArray['c_id']){
    $objSmarty->assign('ErrorMessage', 'Customer ID should not be blank');
	return false;
   }elseif(!$objArray['cname']){
    $objSmarty->assign('ErrorMessage', 'Customer Name should not be blank');
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
   }elseif(!$objArray['category']){
    $objSmarty->assign('ErrorMessage', 'Category Name should not be blank');
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
   }elseif(!$objArray['customer_type']){
    $objSmarty->assign('ErrorMessage', 'Customer Type should not be blank');
	return false;
   }elseif(!$objArray['crdate']){
    $objSmarty->assign('ErrorMessage', 'Created Date should not be blank');
	return false;
   }elseif(!$objArray['created']){
    $objSmarty->assign('ErrorMessage', 'Created by should not be blank');
	return false;
   }elseif(!$objArray['delivery_mgr']){
    $objSmarty->assign('ErrorMessage', 'Delivery Manager should not be blank');
	return false;
   }elseif(!$objArray['acc_mgr']){
    $objSmarty->assign('ErrorMessage', 'Account Manager should not be blank');
	return false;
   }
   $objSmarty->assign('c_id', $objArray['c_id']);
   if($objArray['c_id'] && $objArray['cname']){
   $InsQuery = 'INSERT INTO `arka_cus_reg_master`(`customer_id`, `customer_name`, `address1`, `address2`, `city`, `state`,`pincode`, `category`, `contact_person`, `designation`, `mobile`, `phone`, `email`, `customer_type`, `created_date`, `created_time`, `created_by`, `delivery_manager`, `account_manager`, `status`) VALUES("'.trim(addslashes($objArray['c_id'])).'","'.trim(addslashes($objArray['cname'])).'","'.trim(addslashes($objArray['address1'])).'","'.trim(addslashes($objArray['address2'])).'","'.trim(addslashes($objArray['city'])).'","'.trim(addslashes($objArray['state'])).'","'.trim(addslashes($objArray['pincode'])).'","'.trim(addslashes($objArray['category'])).'","'.trim(addslashes($objArray['contactperson'])).'","'.trim(addslashes($objArray['designation'])).'","'.trim(addslashes($objArray['mobile'])).'","'.trim(addslashes($objArray['phone'])).'","'.trim(addslashes($objArray['email'])).'","'.trim(addslashes($objArray['customer_type'])).'","'.trim(addslashes($objArray['crdate'])).'","'.trim(addslashes($objArray['crtime'])).'","'.trim(addslashes($objArray['created'])).'","'.trim(addslashes($objArray['delivery_mgr'])).'","'.trim(addslashes($objArray['acc_mgr'])).'","1")';
  	 $this->ExecuteQuery($InsQuery, 'insert');
	 $this->CustomerReg();

	 $InsQuery2 = 'INSERT INTO `arka_cus_entitle_status`(`customer_id`, `customer_name`, `customer_type`, `account_manager`, `delivery_manager`, `entitled`,`current_used`, `status`) VALUES("'.trim(addslashes($objArray['c_id'])).'","'.trim(addslashes($objArray['cname'])).'","'.trim(addslashes($objArray['customer_type'])).'","'.trim(addslashes($objArray['acc_mgr'])).'","'.trim(addslashes($objArray['delivery_mgr'])).'","0","0","1")';
	 $this->ExecuteQuery($InsQuery2, 'insert');
	 
	$oFCKeditor->Value		= '';
	$objSmarty->assign('Cc_id',$objArray['c_id']);
	$objSmarty->assign('c_id', '');
	$objSmarty->assign('SuccessMessage', 'New Customer and Entitled Added Successfully');
	//PrePopulate($objArray, 'CusDetail');
	  }
 // }
 }
 
 /* Edit the Static Page */
 function EditCustomer($objArray){
  global $objSmarty,$_REQUEST;
  $CusIdent=$_REQUEST['c_id'];
  $objSmarty->assign('Keyword', $this->Keyword);
  $objSmarty->assign('Operator', $this->Operator);
  $objSmarty->assign('Offset', $this->Offset);
  $objSmarty->assign('PerPage', $this->PerPage);
 // if($this->ChkDupliCust(trim(addslashes($objArray['c_id'])),$CusIdent)) {
   if(!$objArray['c_id']){
    $objSmarty->assign('ErrorMessage', 'Customer ID should not be blank');
	return false;
   }elseif(!$objArray['cname']){
    $objSmarty->assign('ErrorMessage', 'Customer Name should not be blank');
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
   }elseif(!$objArray['category']){
    $objSmarty->assign('ErrorMessage', 'Category Name should not be blank');
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
   }elseif(!$objArray['customer_type']){
    $objSmarty->assign('ErrorMessage', 'Customer Type should not be blank');
	return false;
   }elseif(!$objArray['cr_date']){
    $objSmarty->assign('ErrorMessage', 'Created Date should not be blank');
	return false;
   }elseif(!$objArray['created']){
    $objSmarty->assign('ErrorMessage', 'Created by should not be blank');
	return false;
   }elseif(!$objArray['delivery_mgr']){
    $objSmarty->assign('ErrorMessage', 'Delivery Manager should not be blank');
	return false;
   }elseif(!$objArray['account_mgr']){
    $objSmarty->assign('ErrorMessage', 'Account Manager should not be blank');
	return false;
   }  
    $objSmarty->assign('c_id', $objArray['c_id']);
   if($objArray['c_id'] && $objArray['cname']){
   	$UpQuery = 'UPDATE `arka_cus_reg_master` SET `address1` = "'.trim($objArray['address1']).'", `address2` = "'.trim($objArray['address2']).'", `city` = "'.trim($objArray['city']).'", `state` = "'.trim($objArray['state']).'", `pincode` = "'.trim($objArray['pincode']).'", `category` = "'.trim($objArray['category']).'", `contact_person` = "'.trim($objArray['contactperson']).'", `designation` = "'.trim($objArray['designation']).'", `mobile` = "'.trim($objArray['mobile']).'", `phone` = "'.trim(addslashes($objArray['phone'])).'", `email` = "'.trim(addslashes($objArray['email'])).'", `customer_type` = "'.trim(addslashes($objArray['customer_type'])).'", `created_date` = "'.trim(addslashes($objArray['cr_date'])).'", `delivery_manager` = "'.trim(addslashes($objArray['delivery_mgr'])).'", `account_manager` = "'.trim(addslashes($objArray['account_mgr'])).'" ,`created_time` ="'.trim(addslashes($objArray['crtime'])).'", `status` = "1" WHERE `customer_id` ="'.trim($objArray['c_id']).'"';
	$this->ExecuteQuery($UpQuery, 'update');

	$this->GetCustomerView($objArray);
	//PrePopulate($objArray, 'PageList');
	
	$UpQuery2 = 'UPDATE `arka_cus_entitle_status` SET `customer_type` = "'.trim($objArray['customer_type']).'", `account_manager` = "'.trim($objArray['account_mgr']).'", `delivery_manager` = "'.trim($objArray['delivery_mgr']).'" WHERE `customer_id` ="'.trim($objArray['c_id']).'"';
	$this->ExecuteQuery($UpQuery2, 'update');
	$objSmarty->assign('SuccessMessage', 'Customer Details Updated Successfully');
	return true;

   }
  
 // }
 }
 
 /* Display the Static Page */
 function GetCustomerById(){
  global $objSmarty;
/*  $objSmarty->assign('Keyword', $this->Keyword);
  $objSmarty->assign('Operator', $this->Operator);
  $objSmarty->assign('Offset', $this->Offset);
  $objSmarty->assign('PerPage', $this->PerPage);*/
  $SelQuery3	= 'SELECT max(customer_id) FROM `arka_cus_reg_master` Limit 0,1';
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
  $SelQuery2		= 'SELECT * FROM `arka_cus_reg_master` WHERE `customer_id` = "'.$c_id.'" Limit 0,1';
  $CusDetail		= $this->ExecuteQuery($SelQuery2, 'select');
  if(!empty($CusDetail) && is_array($CusDetail))
   return false;
  else
   return true;
 }
 /* Delete the Static Page */
 function DeleteID($id){
  global $objSmarty;
  $DelQuery = 'DELETE FROM `arka_reg_cus_reg_master` WHERE `customer_id`='.$c_id; 
  $this->ExecuteQuery($DelQuery, 'delete');
  $objSmarty->assign('SuccessMessage', 'Deleted Successfully');
 }
 /*Roles list */
 
 function RolesLists(){
	global $objSmarty;
	 $SelQuery1	= 'SELECT role_name FROM arka_group_mapping WHERE `group_name` = "'.$_SESSION['USER_GROUP'].'" ORDER BY sl_no';
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
	 $DelQuery = 'DELETE FROM `arka_cus_reg_master` WHERE `id` IN ( '.$BanIds.' )' ;
	 $this->ExecuteQuery($DelQuery, 'delete');
	 $objSmarty->assign('SuccessMessage', 'Deleted Successfully');
	 break;
	case 'Active':
	 $UpQuery = 'UPDATE `arka_cust_reg_master` SET `status` =1 WHERE `id` IN (' . $BanIds . ')' ;
	 $this->ExecuteQuery($UpQuery, 'update');
	 $objSmarty->assign('SuccessMessage', 'The Contents Activated Successfully');
	 break;
	case 'InActive':
	 $UpQuery = 'UPDATE `arka_cus_reg_master` SET `status` =0 WHERE `id` IN (' . $BanIds . ')' ;
	 $this->ExecuteQuery($UpQuery, 'update');
	 $objSmarty->assign('SuccessMessage', 'The Contents In-Activated Successfully');
	 break;
   }
 }
}

?>


