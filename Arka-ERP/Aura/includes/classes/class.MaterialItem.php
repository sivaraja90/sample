<?php
  $dev_id = $_GET["dev_id"];
#####Class For Adding Content Management ######
class MaterialItem extends MysqlFns{
 
 /* class constructor */
 function MaterialItem(){
 $this->LDDisplayPath= $config['SiteGlobalPath']."class.MaterialItem.php";
  global $config;
  global $objSmarty;
  $this->MysqlFns();
  $this->Limit = 250;

   $SelQuery	= 'SELECT max(m_code) as last FROM `arka_material_reg_master` Limit 0,1';
 //  echo $SelQuery;
   $DevDetail	= $this->ExecuteQuery($SelQuery, 'select');
 //  	echo $DevDetail[0]['last'];
   $DevDetail[0]['m_code'] = stripslashes($DevDetail[0]['last']);
  	$m_c1 = preg_replace("/[^0-9\.]/", '', $DevDetail[0]['m_code']);
	$m_c1= $m_c1 + 1;
	$str = str_split($DevDetail[0]['last'], 1);
	$m_c = $str[0]. "" .$m_c1;
   $objSmarty->assign('m_c', $m_c);
 }


/* Get the Static Content list */
 	function GetTurbineView($objArray='')  {
		global $objSmarty;
		$objSmarty->assign('tur_id',$_GET['tur_id']);
		$SelQuery = 'SELECT * FROM `arka_turbine_reg_master`WHERE turbine_id ="'.$_GET['tur_id'].'"' ;
		//echo $SelQuery;
		$LDList		= $this->ExecuteQuery($SelQuery, "select");
		$total_records = count($LDList);
		$record_per_page = $this->Limit;
		
		$objSmarty->assign("TList1",$_GET['tur_id']);
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
				$PageList[$key]['Title'] = stripslashes($PageList[$key]['turbine_id']);
				$PageList[$key]['Image'] = stripslashes($PageList[$key]['turbine_name']);
				$objSmarty->assign('Title',$PageList[$key]['tur_id']);
				$objSmarty->assign('Image',$PageList[$key]['turbine_name']);
			}		
			$objSmarty->assign('i', $listing_split->i);
			$objSmarty->assign('PageList', $PageList);
			echo $PageList;
			return $PageList;
	}	
 function GetMaterialDetails($objArray='')  
	{
		global $objSmarty;
		$SelQuery = 'SELECT * FROM `arka_material_reg_master` WHERE m_code ="'.$_GET['m_code'].'"' ;
		$PageList3		= $this->ExecuteQuery($SelQuery, "select");
        $objSmarty->assign('PageList3', $PageList3);
	}	
	/*function DeleteID($id)
	{
  		global $objSmarty;
  		$DelQuery = 'update  `arka_material_reg_master` set `record_status` = 0 WHERE `m_code`="'.$_GET['m_code'].'" '; 
  		$this->ExecuteQuery($DelQuery, 'delete');
  		$objSmarty->assign('SuccessMessage1', 'Deleted Successfully');
 	}*/
/*function GetMaterialDetails($objArray='')  {
		global $objSmarty;
		$objSmarty->assign('tur_id',$_GET['tur_id']);
		$SelQuery = 'SELECT * FROM `arka_material_reg_master`WHERE m_code ="'.$_GET['m_code'].'"' ;
		//echo $SelQuery;
		$LDList		= $this->ExecuteQuery($SelQuery, "select");
		$total_records = count($LDList);
		$record_per_page = $this->Limit;
		
		$objSmarty->assign("TList1",$_GET['tur_id']);
		//$LDList[0]['title'] 		= stripslashes($LDList[0]['title']);
	//	$LDList[1]['txttitle'] 		= stripslashes($LDList[1]['txttitle']);
	//	$LDList[2]['image'] 		= stripslashes($LDList[2]['image']);
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
				$PageList[$key]['Title'] = stripslashes($PageList[$key]['turbine_id']);
				$PageList[$key]['Image'] = stripslashes($PageList[$key]['turbine_name']);
				$objSmarty->assign('Title',$PageList[$key]['tur_id']);
				$objSmarty->assign('Image',$PageList[$key]['turbine_name']);
			}		
			$objSmarty->assign('i', $listing_split->i);
			$objSmarty->assign('PageList', $PageList);
			echo $PageList;
			return $PageList;
	}	*/

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
 function GetMaterialLists($objArray='')  {
  global $objSmarty;
//  $whereClause = 'WHERE status =1';
  if($_POST['search'] == ''){
  			if($_POST['materialCode'])
	   			$whereClause = ' WHERE (`m_code` like "%'.$_POST['materialCode'].'%") AND `status` =1 ';
	   		elseif($_POST['materialName'])
	   			$whereClause = ' WHERE (`m_name` like "%'.$_POST['materialName'].'%") AND `status` =1 ';
			elseif($_POST['materialType'])
				$whereClause = ' WHERE (`m_type` like "%'.$_POST['materialType'].'%") AND `status` =1';
			elseif($_POST['materialCategory'])
				$whereClause = ' WHERE (`m_cat` like "%'.$_POST['materialCategory'].'%") AND `status` =1 ';
			elseif($_POST['price'])
				$whereClause = ' WHERE (`price` like "%'.$_POST['price'].'%") AND `status` =1 ';
			elseif($_POST['materialDescription'])
				$whereClause = ' WHERE (`description` like "%'.$_POST['materialDescription'].'%") AND `status` =1 ';
			elseif($_POST['date'])
				$whereClause = ' WHERE (`doe` like "%'.$_POST['date'].'%") AND `status` =1 ';
			elseif($_POST['status'])
				$whereClause = ' WHERE (`status` like "%'.$_POST['status'].'%") AND `status` =1 ';
   
   $objSmarty->assign('m_code',$_POST['materialCode']);
   $objSmarty->assign('m_name',$_POST['materialName']);
   $objSmarty->assign('m_type',$_POST['materialType']);
   $objSmarty->assign('m_cat',$_POST['materialCategory']);
   $objSmarty->assign('price',$_POST['price']);
   $objSmarty->assign('description',$_POST['materialDescription']);
   $objSmarty->assign('doe',$_POST['date']);
   $objSmarty->assign('status',$_POST['status']);
  }
  $SelQuery		= 'SELECT * FROM `arka_material_reg_master` WHERE status="1" ';
  $listing_split = new MsplitPageResults($SelQuery, $this->Limit);
  if ( ($listing_split->number_of_rows > 0) )  {
   $objSmarty->assign('LinkPage',$listing_split->display_count(TEXT_DISPLAY_NUMBER_OF_RESULT));
   $objSmarty->assign('PerPageNavigation',TEXT_RESULT_PAGE1 . ' ' . $listing_split->display_links_submit($this->Limit, get_all_get_params(array('page', 'info', 'x', 'y')))); 
   $PageList = $this->ExecuteQuery($listing_split->sql_query, 'selectassoc');
  }
  if(!empty($PageList) && is_array($PageList))
  {
   foreach($PageList as $key=>$value){
    $PageList[$key]['Mcd'] = stripslashes($PageList[$key]['m_code']);
	$PageList[$key]['Mname'] = stripslashes($PageList[$key]['m_name']);
	$PageList[$key]['Mtype'] = stripslashes($PageList[$key]['m_type']);
	$PageList[$key]['Mcat'] = stripslashes($PageList[$key]['m_cat']);
	$PageList[$key]['MPrice'] = stripslashes($PageList[$key]['price']);
	$PageList[$key]['MDesc'] = stripslashes($PageList[$key]['description']);
	$PageList[$key]['MDate'] = stripslashes($PageList[$key]['doe']);
	$PageList[$key]['MStatus'] = stripslashes($PageList[$key]['status']);
	}
  $objSmarty->assign('i', $listing_split->i);
  $objSmarty->assign('PageList', $PageList);
 // print_r($PageList);
  return $PageList;
  }
  elseif(empty($PageList) && is_array($PageList))
    $objSmarty->assign('ErrorMessage', 'No Records Found');
 }
 /* Delete the Static Page */
 function DeleteDev($DevIdent){
  global $objSmarty;
  foreach ( $DevIdent as $ConId ){
   if($ConId){
    $DelQuery = 'DELETE FROM `arka_turbine_reg_master` WHERE `id` ='.$ConId;
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
 function InsertMaterialContent($objArray,$objFiles){
  global $objSmarty,$config;
  $objSmarty->assign('Keyword', $this->Keyword);
  $objSmarty->assign('Operator', $this->Operator);
  $objSmarty->assign('Offset', $this->Offset);
  $objSmarty->assign('PerPage', $this->PerPage);
  if($this->ChkDupliMat(($objArray))){
	    list ($name,$format) = split("[.]", $objFiles['materialImage']['name'],2);
		   
		$uploadpath = $config['MaterialImagePath']; 
		if($objFiles['materialImage']["name"] <> "")
		{	
			if((!file_exists($config['MaterialImagePath'] . $_FILES["materialImage"]["name"])))
		{  $f1 = $objFiles['materialImage']['name'];
			if(move_uploaded_file($objFiles['materialImage']['tmp_name'], $uploadpath.$f1))
			chmod($uploadpath.$f1,"777");
			
		}
		elseif((file_exists($config['MaterialImagePath'] . $_FILES["materialImage"]["name"]))) 
		
		{	
			$f4 = explode(".", $_FILES['materialImage']['name']);
			$newfilename = round(microtime(true)) . '.' . end($f4);
			if(move_uploaded_file($objFiles['materialImage']['tmp_name'], $uploadpath.$newfilename))
			chmod($uploadpath.$newfilename,"777");
			$f1=$newfilename;
		}
		}
   if(!$objArray['materialCode']){
    $objSmarty->assign('ErrorMessage', 'Material Code should not be blank');
	return false;
   }elseif(!$objArray['materialName']){
    $objSmarty->assign('ErrorMessage', 'Material Name should not be blank');
	return false;
   }elseif(!$objArray['materialType']){
    $objSmarty->assign('ErrorMessage', 'Material Type should not be blank');
	return false;
   }elseif(!$objArray['materialCategory']){
    $objSmarty->assign('ErrorMessage', 'Material Category should not be blank');
	return false;
   }elseif($objArray['price']<0){
    $objSmarty->assign('ErrorMessage', 'Price should not be blank');
	return false;
   }elseif(!$objArray['materialDescription']){
    $objSmarty->assign('ErrorMessage', 'Description should not be blank');
	return false;
   }elseif(!$objArray['date']){
    $objSmarty->assign('ErrorMessage', 'Date should not be blank');
	return false;
   }
   $objSmarty->assign('m_code', $objArray['materialCode']);
   //*************************** Insert Turbine Reg Master *********************************************
   if($objArray['materialCode'] && $objArray['materialType'] && $objArray['materialName']){    
   $InsQuery = 'INSERT INTO `arka_material_reg_master` (`m_code`, `m_name`, `m_type`,`m_cat`, `price`, `description`, `doe`, `materialImage`, `status`) VALUES("'.trim(addslashes($objArray['materialCode'])).'","'.trim(addslashes($objArray['materialName'])).'","'.trim(addslashes($objArray['materialType'])).'","'.trim(addslashes($objArray['materialCategory'])).'","'.trim(addslashes($objArray['price'])).'","'.trim(addslashes($objArray['materialDescription'])).'","'.trim(addslashes($objArray['date'])).'","'.$f1.'","1")';  
	$this->ExecuteQuery($InsQuery, 'insert');
	$this->MaterialItem();
	$objSmarty->assign('Mcd',$objArray['m_code']);
	$oFCKeditor->Value		= '';
	$objSmarty->assign('m_code', '');
	$objSmarty->assign('SuccessMessage', 'New Material Added Successfully');
    $url_addtnal_data=base64_encode("New Material Added Successfully");
    header('location:'.$_SERVER['PHP_SELF']."?sm=".$url_addtnal_data);
  }
  }
  else{
   
    $url_addtnal_data=base64_encode("Material Code Already Exists");
    header('location:'.$_SERVER['PHP_SELF']."?em=".$url_addtnal_data);
   //PrePopulate($objArray, 'DevDetail');
  }
 }
 
 /* Edit the Static Page */
 function EditMaterial($objArray){
  global $objSmarty,$_REQUEST;
  $DevIdent=$_REQUEST['t_id'];
  $objSmarty->assign('Keyword', $this->Keyword);
  $objSmarty->assign('Operator', $this->Operator);
  $objSmarty->assign('Offset', $this->Offset);
  $objSmarty->assign('PerPage', $this->PerPage);
  
  	list ($name,$format) = split("[.]", $objFiles['materialImage']['name'],2);
	
		$uploadpath = $config['MaterialImagePath']; 
		if($objFiles['materialImage']["name"] <> "")
		{	
			if((!file_exists($config['MaterialImagePath'] . $_FILES["materialImage"]["name"])))
			{  
				$f1 = $objFiles['materialImage']['name'];
				if(move_uploaded_file($objFiles['materialImage']['tmp_name'], $uploadpath.$f1))
				chmod($uploadpath.$f1,"777");
			}
			elseif((file_exists($config['MaterialImagePath'] . $_FILES["materialImage"]["name"]))) 
			{
				$f1 = explode(".", $_FILES['materialImage']['name']);
				$newfilename = round(microtime(true)) . '.' . end($f1);
				if(move_uploaded_file($objFiles['materialImage']['tmp_name'], $uploadpath.$newfilename))
				chmod($uploadpath.$newfilename,"777");
				$f1=$newfilename;
			}
		}  
     if(!$objArray['materialCode']){
     $objSmarty->assign('ErrorMessage', 'Material Code should not be blank');	
	 return false;
   }elseif(!$objArray['materialName']){
    $objSmarty->assign('ErrorMessage', 'Material Name should not be blank');
	return false;
   }elseif(!$objArray['materialType']){
    $objSmarty->assign('ErrorMessage', 'Material Type should not be blank');
	return false;
   }elseif(!$objArray['materialCategory']){
    $objSmarty->assign('ErrorMessage', 'Material Category should not be blank');
	return false;
   }elseif(!$objArray['price']){
    $objSmarty->assign('ErrorMessage', 'Price should not be blank');
	return false;
   }elseif(!$objArray['materialDescription']){
    $objSmarty->assign('ErrorMessage', 'Description should not be blank');
	return false;
   }elseif(!$objArray['date']){
    $objSmarty->assign('ErrorMessage', 'Date should not be blank');
	return false;
   }
 $SelQueryx		= 'SELECT * FROM `arka_material_reg_master` WHERE `m_code` = "'.trim(addslashes($objArray['materialCode'])).'" AND `m_type` = "'.trim(addslashes($objArray['materialType'])).'" AND `m_cat` = "'.trim(addslashes($objArray['materialCategory'])).'" Limit 0,1' ;
  $DevDetail		= $this->ExecuteQuery($SelQueryx, 'select');
  if(!empty($DevDetail) && is_array($DevDetail))
{ 
	   if($objArray['materialCode'] && $objArray['materialType']  && $objArray['materialName']){
		$UpQuery = 'UPDATE `arka_material_reg_master` SET `m_code` = "'.trim(addslashes($objArray['materialCode'])).'", `m_name` = "'.trim(addslashes($objArray['materialName'])).'", `m_cat` = "'.trim(addslashes($objArray['materialCategory'])).'", `m_type` = "'.trim(addslashes($objArray['materialType'])).'",`doe` = "'.trim(addslashes($objArray['date'])).'",`price` = "'.trim(addslashes($objArray['price'])).'", `description` = "'.trim(addslashes($objArray['materialDescription'])).'" WHERE `m_code` ="'.trim(addslashes($_GET['m_code'])).'"';
	
		$this->ExecuteQuery($UpQuery, 'update');
	   }
	   }
	   else
	   {
	   
	   }
	     header('Location:'.$_SERVER['PHP_SELF'].'?server_response=success&m_code='.$objArray['materialCode'].'&window_action=true');
  }
 
 
 /* Insert the Turbine Payments */
 function InsertTurbinePayment($objArray){
  global $objSmarty;
  $objSmarty->assign('Keyword', $this->Keyword);
  $objSmarty->assign('Operator', $this->Operator);
  $objSmarty->assign('Offset', $this->Offset);
  $objSmarty->assign('PerPage', $this->PerPage);
  if($this->ChkDupliDeve(trim(addslashes($objArray['d_id'])))){
   if(!$objArray['d_id']){
    $objSmarty->assign('ErrorMessage', 'Turbine ID should not be blank');
	return false;
   }elseif(!$objArray['d_type']){
    $objSmarty->assign('ErrorMessage', 'Turbine Type should not be blank');
	return false;
   }elseif(!$objArray['d_name']){
    $objSmarty->assign('ErrorMessage', 'Turbine Name should not be blank');
	return false;
   }elseif(!$objArray['d_s_no']){
    $objSmarty->assign('ErrorMessage', 'Serial No should not be blank');
	return false;
   }elseif(!$objArray['dept']){
    $objSmarty->assign('ErrorMessage', 'Department Name should not be blank');
	return false;
   }elseif(!$objArray['v_name']){
    $objSmarty->assign('ErrorMessage', 'Vendor Name should not be blank');
	return false;
   }elseif(!$objArray['v_contact']){
    $objSmarty->assign('ErrorMessage', 'Vendor Contact should not be blank');
	return false;
   }elseif(!$objArray['support_type_name']){
    $objSmarty->assign('ErrorMessage', 'Support Type should not be blank');
	return false;
   }elseif(!$objArray['t_model']){
    $objSmarty->assign('ErrorMessage', 'Type Model should not be blank');
	return false;
   }elseif(!$objArray['service_plan_name']){
    $objSmarty->assign('ErrorMessage', 'Service Plan should not be blank');
	return false;
   }elseif(!$objArray['price']){
    $objSmarty->assign('ErrorMessage', 'Price should not be blank');
	return false;
   }elseif(!$objArray['st_date']){
    $objSmarty->assign('ErrorMessage', 'Start Date should not be blank');
	return false;
   }elseif(!$objArray['end_dt']){
    $objSmarty->assign('ErrorMessage', 'End Date should not be blank');
	return false;
   }elseif(!$objArray['years']){
    $objSmarty->assign('ErrorMessage', 'Years should not be blank');
	return false;
   }elseif(!$objArray['cusid']){
    $objSmarty->assign('ErrorMessage', 'Customer ID should not be blank');
	return false;
   }elseif(!$objArray['cname']){
    $objSmarty->assign('ErrorMessage', 'Customer Name should not be blank');
	return false;
   }elseif(!$objArray['c_person']){
    $objSmarty->assign('ErrorMessage', 'Contact Person should not be blank');
	return false;
   }elseif(!$objArray['c_type']){
    $objSmarty->assign('ErrorMessage', 'Customer Type should not be blank');
	return false;
   }
   $objSmarty->assign('d_id', $objArray['d_id']);
   //*************************** Insert Turbine Reg Master *********************************************
   if($objArray['d_id'] && $objArray['d_type'] && $objArray['d_name']){
   $InsQuery = 'INSERT INTO `arka_device_reg_master`(`device_id`, `device_type`, `device_name`, `device_serial_no`, `department`, `vendor_name`, `vendor_contact`, `support_type`, `type_model`, `service_plan`, `price`, `entitlement`, `start_date`, `renewed_date`, `end_date`, `no_of_years`, `additional_support`, `customer_id`, `customer_name`, `contact_person`, `customer_type`) VALUES("'.trim(addslashes($objArray['d_id'])).'","'.trim(addslashes($objArray['d_type'])).'","'.trim(addslashes($objArray['d_name'])).'","'.trim(addslashes($objArray['d_s_no'])).'","'.trim(addslashes($objArray['dept'])).'","'.trim(addslashes($objArray['v_name'])).'","'.trim(addslashes($objArray['v_contact'])).'","'.trim(addslashes($objArray['support_type_name'])).'","'.trim(addslashes($objArray['t_model'])).'","'.trim(addslashes($objArray['service_plan_name'])).'","'.trim(addslashes($objArray['price'])).'","'.trim(addslashes($objArray['entitlement'])).'","'.trim(addslashes($objArray['st_date'])).'","'.trim(addslashes($objArray['st_date'])).'","'.trim(addslashes($objArray['end_dt'])).'","'.trim(addslashes($objArray['years'])).'","'.trim(addslashes($objArray['add_support'])).'","'.trim(addslashes($objArray['cusid'])).'","'.trim(addslashes($objArray['cname'])).'","'.trim(addslashes($objArray['c_person'])).'","'.trim(addslashes($objArray['c_type'])).'")';
	$this->ExecuteQuery($InsQuery, 'insert');
	$this->TurbineItem();
	   //***************************Insert Turbine Payment details *********************************************
	$InsQuery2 = 'INSERT INTO `arka_dev_payment_details`(`device_id`, `service_plan`, `price`, `amt_due`, `d_payment_amt`, `d_payment_status`) VALUES("'.trim(addslashes($objArray['d_id'])).'","'.trim(addslashes($objArray['service_plan_name'])).'","'.trim(addslashes($objArray['price'])).'","'.trim(addslashes($objArray['price'])).'","0","Pending")';
	$this->ExecuteQuery($InsQuery2, 'insert');
	
	   //***************************Select Entitlement *********************************************
	   $SelQuery2	= 'SELECT entitled FROM `arka_cus_entitle_status` WHERE customer_id = "'.trim(addslashes($objArray['cusid'])).'" Limit 0,1';
	   $EntDetail	= $this->ExecuteQuery($SelQuery2, 'select');
	   $ent = stripslashes($EntDetail[0]['entitled']);
	   $ent= $ent + ($objArray['entitlement']);
	   $objSmarty->assign('ent', $ent);
	   
	   $UpQuery3 = 'UPDATE `arka_cus_entitle_status` SET `entitled` = "'.$ent.'" WHERE `customer_id` ="'.trim(addslashes($objArray['cusid'])).'"';
		$this->ExecuteQuery($UpQuery3, 'update');
	
	//***************************Customer Payment Details *********************************************
	   $SelQuery3	= 'SELECT * FROM `arka_cus_payment_details` WHERE customer_id = "'.trim(addslashes($objArray['cusid'])).'" Limit 0,1';
	   $PayDetail	= $this->ExecuteQuery($SelQuery3, 'select');
	   $nod = stripslashes($PayDetail[0]['no_of_device']);
	   $nod= $nod + 1;
	   $t_amt = stripslashes($PayDetail[0]['total_amt']);
	   $t_amt= $t_amt + ($objArray['price']);
	   $t_amt_due = stripslashes($PayDetail[0]['tot_amt_due']);
	   $t_amt_due= $t_amt_due + ($objArray['price']);
	   
	   $objSmarty->assign('nod', $nod);
	   $objSmarty->assign('t_amt', $t_tmt);
	   $objSmarty->assign('t_amt_due', $t_amt_due);
	   
	   $UpQuery4 = 'UPDATE `arka_cus_payment_details` SET `no_of_device` = "'.$nod.'",`total_amt` = "'.$t_amt.'",`tot_amt_due` = "'.$t_amt_due.'",`payment_status` = "'.$t_amt_due.'" WHERE `customer_id` ="'.trim(addslashes($objArray['cusid'])).'"';
		$this->ExecuteQuery($UpQuery4, 'update');
	
	
	$objSmarty->assign('Dd_id',$objArray['d_id']);
	$oFCKeditor->Value		= '';
	$objSmarty->assign('d_id', '');
	$objSmarty->assign('SuccessMessage', 'New Turbine Added Successfully');
	//PrePopulate($objArray, 'DevDetail');
   }
  }
  else{
   $objSmarty->assign('d_id', $objArray['d_id']);
   $objSmarty->assign('ErrorMessage', 'Turbine ID Already Exists');
   PrePopulate($objArray, 'DevDetail');
  }
 }
 
 /* Display the Static Page */
 function GetTurbineById(){
  global $objSmarty;
/*  $objSmarty->assign('Keyword', $this->Keyword);
  $objSmarty->assign('Operator', $this->Operator);
  $objSmarty->assign('Offset', $this->Offset);
  $objSmarty->assign('PerPage', $this->PerPage);*/
  $SelQuery		= 'SELECT max(device_id) FROM `arka_device_reg_master` Limit 0,1';
  $DevDetail		= $this->ExecuteQuery($SelQuery, 'select');
  $DevDetail[0]['device_id'] = stripslashes($DevDetail[0]['device_detail']);
  $objSmarty->assign('hdevice_id', stripslashes($DevDetail[0]['device_id']));
  $val = intval(substr($DevDetail[0]['device_id'],0,4), 5);
  $objSmarty->assign('d_id', $DevDetail[0]['device_id']);
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
 function ChkDupliMat($objarray){
  global $objSmarty;
  if(!empty($objarray))
  $SelQueryx		= 'SELECT * FROM `arka_material_reg_master` WHERE `m_code` = "'.$objarray['m_code'].'" AND `m_type` = "'.$objarray['m_type'].'" AND `m_cat` = "'.$objarray['m_cat'].'" OR `m_code` = "'.$objarray['m_code'].'" Limit 0,1';
  $DevDetail		= $this->ExecuteQuery($SelQueryx, 'select');
  if(!empty($DevDetail) && is_array($DevDetail))
   return false;
  else
   return true;
 }
 
 
 
  function ChkDupliMat2($objarray){
  global $objSmarty;
  if(!empty($objarray))
   $WhereClause	= '';
echo  $SelQueryx		= 'SELECT * FROM `arka_material_reg_master` WHERE `m_code` = "'.$objarray['materialCode'].'" AND `m_type` = "'.$objarray['materialType'].'" AND `m_cat` = "'.$objarray['materialCategory'].'" Limit 0,1' ;
  $DevDetail		= $this->ExecuteQuery($SelQueryx, 'select');
  if(!empty($DevDetail) && is_array($DevDetail))
   return false;
  else
   return true;
 }
 
 
 /* Delete the Static Page */

 function DeleteID($id){
  global $objSmarty;
  $DelQuery3 = 'DELETE FROM `arka_material_reg_master`  WHERE `m_name`="'.$_GET[$id].'"'; 
  $this->ExecuteQuery($DelQuery3, 'delete');
  $objSmarty->assign('SuccessMessage1', 'Deleted Successfully');
 }
 
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
	 $DelQuery = 'DELETE FROM `arka_device_reg_master` WHERE `id` IN ( '.$BanIds.' )' ;
	 $this->ExecuteQuery($DelQuery, 'delete');
	 $objSmarty->assign('SuccessMessage', 'Deleted Successfully');
	 break;
	case 'Active':
	 $UpQuery = 'UPDATE `arka_device_reg_master` SET `status` =1 WHERE `id` IN (' . $BanIds . ')' ;
	 $this->ExecuteQuery($UpQuery, 'update');
	 $objSmarty->assign('SuccessMessage', 'The Contents Activated Successfully');
	 break;
	case 'InActive':
	 $UpQuery = 'UPDATE `arka_device_reg_master` SET `status` =0 WHERE `id` IN (' . $BanIds . ')' ;
	 $this->ExecuteQuery($UpQuery, 'update');
	 $objSmarty->assign('SuccessMessage', 'The Contents In-Activated Successfully');
	 break;
   }
 }
  /* Pay Turbine Amount, Payment status for the Static Pages */
 function TurbinePayments($objArray){
  global $objSmarty;
   if(!empty($objArray['ConId']) && is_array($objArray['ConId']))
   {
   		foreach ($objArray['ConId'] as $DevIds){
				$SelQuery4	= 'SELECT * FROM `arka_dev_payment_details` WHERE device_id = "'.$DevIds.'" Limit 0,1';
	   			$PayDetails	= $this->ExecuteQuery($SelQuery4, 'select');
					   $d_amt_due = stripslashes($PayDetails[0]['amt_due']);
			   if($objArray[$DevIds]>$d_amt_due){
			   		$objSmarty->assign('ErrorMessage', 'Payment Should be Less than Amount Due');
					return false;
				}
				}

      foreach ($objArray['ConId'] as $DevIds){
		   if($DevIds)
		   {
		  		$d_pay_amnt = $objArray[$DevIds];
				$SelQuery4	= 'SELECT * FROM `arka_dev_payment_details` WHERE device_id = "'.$DevIds.'" Limit 0,1';
	   			$PayDetails	= $this->ExecuteQuery($SelQuery4, 'select');
					   $d_pr = stripslashes($PayDetails[0]['price']);
					   $d_amt_due = stripslashes($PayDetails[0]['amt_due']);
					   $d_p_amt = stripslashes($PayDetails[0]['d_payment_amt']);
					   $p_am_due = $d_amt_due-$d_pay_amnt;
					   $d_p_amt = $d_p_amt + $d_pay_amnt;					   
					    if($p_am_due==0)
			   				$p_status ="Paid";
						else
							$p_status ="Pending";
					   $objSmarty->assign('d_p_amt', $d_p_amn);
					   $objSmarty->assign('p_am_due', $p_am_due);
					   $objSmarty->assign('p_status', $p_status);
			 
					$UpQuery = 'UPDATE `arka_dev_payment_details` SET `d_payment_amt` = "'.$d_p_amt.'",`payment_date` = "'.trim(addslashes($objArray['up_date'])).'",`payment_time` = "'.trim(addslashes($objArray['up_time'])).'",`d_payment_status` = "'.$p_status.'",`amt_due` = "'.$p_am_due.'" WHERE `device_id` ="'.$DevIds.'"' ;
					$this->ExecuteQuery($UpQuery, 'update');
					}
  			 }
					
						$SelQuery5	= 'SELECT * FROM `arka_cus_payment_details` WHERE customer_id = "'.trim(addslashes($objArray['cusid'])).'" Limit 0,1';
	   					$PayDetails	= $this->ExecuteQuery($SelQuery5, 'select');
						
					   $tot_amt_due = stripslashes($PayDetails[0]['tot_amt_due']);
					   if($tot_amt_due==0)
							$tot_status ="Paid";
						else
							$tot_status ="Pending";	
						$objSmarty->assign('p_status', $p_status);	
						
						$UpQuery1 = 'UPDATE `arka_cus_payment_details` SET `total_amt` = "'.trim(addslashes($objArray['total'])).'",`tot_amt_due` = "'.trim(addslashes($objArray['amt_due'])).'",`payment_status` = "'.$tot_status.'" WHERE `customer_id` ="'.trim(addslashes($objArray['cusid'])).'"' ;
						$this->ExecuteQuery($UpQuery1, 'update');
					
					$InsQuery3 = 'INSERT INTO `arka_dev_payment_master`(`invoice_no`, `invoice_date`, `pay_ref_no`, `pay_mode`, `pay_to`, `payment_amt`, `payment_due`, `payment_status`) VALUES("'.trim(addslashes($objArray['inv_no'])).'","'.trim(addslashes($objArray['inv_date'])).'","'.trim(addslashes($objArray['p_ref_no'])).'","'.trim(addslashes($objArray['mode'])).'","'.trim(addslashes($objArray['pay_to'])).'","'.trim(addslashes($objArray['p_amt'])).'","'.trim(addslashes($objArray['amt_due'])).'","'.$tot_status.'")';
					$this->ExecuteQuery($InsQuery3, 'insert');
					
					 $objSmarty->assign('SuccessMessage', 'Payment Transcation Successfully Completed');
			
}
  	else
   $objSmarty->assign('ErrorMessage', 'No Turbine Selected');
		}
 	
	
	
	 /* Delete the Static Page */
/* function DeleteID2($deleid){
  global $objSmarty;
  $DelQuery = 'UPDATE `arka_material_reg_master` set status ="0" WHERE `m_code`="'.$_REQUEST['deleid'].'"';
 // echo($DelQuery);
  $this->ExecuteQuery($DelQuery, 'delete');
   $InsQuery4 = 'INSERT INTO `arka_deleted_records`(`deleted_data`, `deleted_table`, `deleted_by`) VALUES("'.$_REQUEST['deleid'].'","tasca_material_reg_master","'.$_SESSION['UserName'].'")';
	 $this->ExecuteQuery($InsQuery4, 'insert');
  $objSmarty->assign('SuccessMessage', 'Deleted Successfully');
  $this->GetMaterialLists();
 }*/
	
function DeleteID2($id){ 
  global $objSmarty;
   $DelQuery2 = 'update `arka_material_reg_master` set status ="0" WHERE `m_code`="'.$_GET['m_code'].'" '; 
	$this->ExecuteQuery($DelQuery2, 'delete');
	  $objSmarty->assign('SuccessMessage1', 'Deleted Successfully');
	}
}
?>


