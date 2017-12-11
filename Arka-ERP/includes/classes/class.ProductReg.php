<?php
#####Class For Adding Content Management ######
class ProductReg extends MysqlFns{
	 /* class constructor */
	function ProductReg(){
		$this->LDDisplayPath= $config['SiteGlobalPath']."class.ProductReg.php";
		global $config;
		global $objSmarty,$config;
		$tbl = $config['DBPrefix'];
		$this->MysqlFns();
		$this->Limit = 20;
		$prd_id = base64_decode($_GET["item_code"]);
		/**************************************Item Code Auto Increment*********************************************************/
		
		$SelQuerys	= 'SELECT max(item_code) as last FROM '.$tbl.'product_master Limit 0,1';
		$ProDetail	= $this->ExecuteQuery($SelQuerys, 'select');
		if($ProDetail[0]['last']!="")
		{
		$ProDetail[0]['item_code'] = stripslashes($ProDetail[0]['last']);
		$p_id1 = preg_replace("/[^0-9\.]/", '', $ProDetail[0]['item_code']);
		$p_id1= $p_id1 + 1;
		$str = str_split($ProDetail[0]['last'], 3);
		$p_id = $str[0]. "" .$p_id1;
		}
		else
		{
		$p_id = "PDT1001";
		}
		$objSmarty->assign('p_id', $p_id);
		/*******************************Auto Suggest For Company Name**********************************************************************/			
		$f1 = "category.txt";
		$uploadpath = $config['QuotePath'];
		//chmod($uploadpath.$f1,"777");
		$myfile = fopen($f1, "w") or die("Unable to open file!");
		$SelQuery1	= 'SELECT DISTINCT category_name FROM `'.$tbl.'category_master` WHERE status="1"';
		$CusList	= $this->ExecuteQuery($SelQuery1, 'select');
		if(!empty($CusList) && is_array($CusList))
		foreach($CusList as $key=>$value)
		{
		$CusList[$key]['CName'] = stripslashes($CusList[$key]['category_name']);
		$names = $names.$CusList[$key]['CName'].",";
		}
		fwrite($myfile, $names);
		fclose($myfile);
	}
	 /**********************************************Insert Product**************************************************************/
	function InsertProduct($objArray, $objFiles){
		global $objSmarty, $config , $_POST;
		$tbl = $config['DBPrefix'];
		list ($name,$format) = split("[.]", $objFiles['image']['name'],2);
		$uploadpath = $config['ProductImagePath']; 
		if($objFiles['image']["name"] <> "")
		{	
			
			    $errors     = array();
   				$maxsize    = 5242880;
   				$acceptable = array(
				'image/jpeg','image/jpg','image/gif','image/png');
		if(($_FILES['image']['size'] >= $maxsize) || ($_FILES["image"]["size"] == 0)) {
		$errors2[] = 'File --2-- too large. File must be less than 5 MB';
		}
		
		if((!in_array($_FILES['image']['type'], $acceptable)) && (!empty($_FILES["image"]["type"])))
		 {echo"format";
		$errors3[] = 'File --2-- Only PDF, JPG, JPEG, GIF and PNG types are accepted';
		}
		
		if(count($errors2)  === 0 && count($errors3)  === 0) 
		{
			if((!file_exists($config['ProductImagePath'] . $_FILES["image"]["name"])))
			{  
				$f1 = $objFiles['image']['name'];
				if(move_uploaded_file($objFiles['image']['tmp_name'], $uploadpath.$f1))
				chmod($uploadpath.$f1,"777");
				
			}
			elseif((file_exists($config['ProductImagePath'] . $_FILES["image"]["name"]))) 
		
			{	$f1 = explode(".", $_FILES['image']['name']);
				$newfilename = round(microtime(true)) . '.' . end($f1);
				if(move_uploaded_file($objFiles['image']['tmp_name'], $uploadpath.$newfilename))
				chmod($uploadpath.$newfilename,"777");
				$f1=$newfilename;  
			}
		}
					else {
        	foreach($errors2 as $error2) 
			{
            $objSmarty->assign('ErrorMessage', $error2);
			return false;			
        	}
			foreach($errors3 as $errors2) 
			{
            $objSmarty->assign('ErrorMessage', $errors2);
			return false;
			
        	}
		
		}
	}
		if(!$objArray['item_code']){
		$objSmarty->assign('ErrorMessage', 'Item Code should not be blank');
		return false;
		}elseif(!$objArray['item_name']){
		$objSmarty->assign('ErrorMessage', 'Item Name should not be blank');
		return false;
		}elseif((!$objArray['item_description'])){
		$objSmarty->assign('ErrorMessage', 'Item Description should not be blank');
		return false;
/*		}elseif(!$objArray['baan_company']){
		$objSmarty->assign('ErrorMessage', 'Baan Company should not be blank');
		return false;
		}elseif(!$objArray['wh']){
		$objSmarty->assign('ErrorMessage', 'Wh should not be blank');
		return false;
		}elseif(!$objArray['ed']){
		$objSmarty->assign('ErrorMessage', 'ED should not be blank');
		return false;
		}elseif(!$objArray['total']){
		$objSmarty->assign('ErrorMessage', 'Total should not be blank');
		return false;
*/		}elseif(!$objArray['consumer_basic']){
		$objSmarty->assign('ErrorMessage', 'Consumer Basic should not be blank');
		return false;
		}
		$objSmarty->assign('item_code', $objArray['item_code']);
		if($objArray['item_code'] && $objArray['item_name']){  
			$InsQuery = 'INSERT INTO `'.$tbl.'product_master` (`item_code`, `item_category_code`, `item_description`,`pkg`, `consumer_basic`, `features`, `dimensions`, `total`, `remarks`, `price_date`,`item_name`,`item_category`,`item_color`,`baan_company`,`image`,`ware_house`,`ed`,`created_by`, `created_date`,`created_time`,`status`) VALUES("'.trim(addslashes($objArray['item_code'])).'","'.trim(addslashes($objArray['item_category_code'])).'","'.trim(addslashes($objArray['item_description'])).'","'.trim(addslashes($objArray['pkg'])).'","'.trim(addslashes($objArray['consumer_basic'])).'","'.trim(addslashes($objArray['features'])).'","'.trim(addslashes($objArray['dimensions'])).'","'.trim(addslashes($objArray['total'])).'","'.trim(addslashes($objArray['remarks'])).'","'.trim(addslashes($objArray['price_date'])).'","'.trim(addslashes($objArray['item_name'])).'","'.trim(addslashes($objArray['item_category'])).'","'.trim(addslashes($objArray['item_color'])).'","'.trim(addslashes($objArray['baan_company'])).'","'.$f1.'","'.trim(addslashes($objArray['wh'])).'","'.trim(addslashes($objArray['ed'])).'","'.trim(addslashes($objArray['created_by'])).'","'.trim(addslashes($objArray['created_date'])).'","'.trim(addslashes($objArray['created_time'])).'","1")';  
			$this->ExecuteQuery($InsQuery, 'insert');
			//Success Message
			header('Location:' .$_SERVER['PHP_SELF'].'?succs_msg_for_insert');
			return true;
		}
	}
	/*************************************************View Product***************************************************************/
	function ViewProduct()
	{
		global $objSmarty,$config;
		$tbl = $config['DBPrefix'];
		$SelQuery2 = 'SELECT * FROM `'.$tbl.'product_master` WHERE `item_code`="'.$_GET['item_code'].'"';
		$ListView = $this->ExecuteQuery($SelQuery2, "select");
		$objSmarty->assign('ListView', $ListView);
		return $ListView;
	}
	 /*************************************************List Product***************************************************************/
	function ListProduct()
	{
		global $objSmarty,$config;
		$tbl = $config['DBPrefix'];
		$SelQuery = 'SELECT * FROM `'.$tbl.'product_master` WHERE status ="1"';
		$ListPro = $this->ExecuteQuery($SelQuery, "select");
		$objSmarty->assign('ListPro', $ListPro);
		return $ListPro;
	}
	 /*************************************************List Reg file***************************************************************/
	function ItemCode()
	{
		global $objSmarty,$config;
		$tbl = $config['DBPrefix'];
		$SelQuery = 'SELECT * FROM `'.$tbl.'category_master` WHERE status ="1"';
		$ListView = $this->ExecuteQuery($SelQuery, "select");
		$objSmarty->assign('ListView', $ListView);
		return $ListView;
	} 
	  /**********************************************Delete Product*********************************************************************/
	function DeleteProduct($CatIdent)
	{
		global $objSmarty,$config;
		$tbl = $config['DBPrefix'];
		$DelQuery = 'update `'.$tbl.'product_master` set `status` = 0 WHERE `item_code` ="'.$CatIdent.'"';
		$this->ExecuteQuery($DelQuery, 'update');
		header('Location:' .$_SERVER['PHP_SELF'].'?succs_msg_for_del');  
	}
	  /********************************************************List from Customer Master*******************************************/
	 
	function ListMaster()
	{
		$prd_id = base64_decode($_GET["item_code"]); 
		global $objSmarty, $config;
		$tbl = $config['DBPrefix'];   
		$SelQuery = 'SELECT * FROM '.$tbl.'product_master WHERE status = "1" AND item_code="'.$prd_id.'"';  
		$ListMas = $this->ExecuteQuery($SelQuery, "select");   
		$objSmarty->assign('ListMas', $ListMas);  
		return $ListMas;
	}
	  /****************************************************Time Stamp Value As Date And Time Form Master****************************************/
	function DateStamp()
	{
		global $objSmarty,$config;
		$tbl = $config['DBPrefix'];
		$prd_id = base64_decode($_GET["item_code"]);
		$SelQuery = 'SELECT Date(timestamp_value) as Date from '.$tbl.'product_master WHERE item_code="'.$prd_id.'"';
		$Date_Stamp = $this->ExecuteQuery($SelQuery, "select");
		//print $Date;
		$objSmarty->assign('Date_Stamp', $Date_Stamp);
		return $Date_Stamp;
	}
	
	function TimeStamp()
	{
		global $objSmarty,$config;
		$tbl = $config['DBPrefix'];
		$prd_id = base64_decode($_GET["item_code"]);
		$SelQuery1 = 'SELECT  Time(timestamp_value) as Time from '.$tbl.'product_master WHERE item_code="'.$prd_id.'"';
		$Time_Stamp = $this->ExecuteQuery($SelQuery1, "select");
		$objSmarty->assign('Time_Stamp', $Time_Stamp);
		return $Time_Stamp;
	}
	 /**********************************************Edit Product**************************************************************/
	 function EditProduct($objArray,$objFiles){
		global $objSmarty, $config , $_POST;
		global $objSmarty,$config;
		$tbl = $config['DBPrefix'];
		$prd_id = base64_decode($_GET["item_code"]);
		echo "here";
		list ($name,$format) = split("[.]", $objFiles['image']['name'],2);
		$uploadpath = $config['ProductImagePath']; 
		if($objFiles['image']["name"] <> "")
		{	
			
			    $errors     = array();
   				$maxsize    = 5242880;
   				$acceptable = array(
				'image/jpeg','image/jpg','image/gif','image/png');
		if(($_FILES['image']['size'] >= $maxsize) || ($_FILES["image"]["size"] == 0)) {
		$errors2[] = 'File --2-- too large. File must be less than 5 MB';
		}
		
		if((!in_array($_FILES['image']['type'], $acceptable)) && (!empty($_FILES["image"]["type"])))
		 {echo"format";
		$errors3[] = 'File --2-- Only PDF, JPG, JPEG, GIF and PNG types are accepted';
		}
		
		if(count($errors2)  === 0 && count($errors3)  === 0) 
		{
			if((!file_exists($config['ProductImagePath'] . $_FILES["image"]["name"])))
			{  
				$f1 = $objFiles['image']['name'];
				if(move_uploaded_file($objFiles['image']['tmp_name'], $uploadpath.$f1))
				chmod($uploadpath.$f1,"777");
				
			}
			elseif((file_exists($config['ProductImagePath'] . $_FILES["image"]["name"]))) 
		
			{	$f1 = explode(".", $_FILES['image']['name']);
				$newfilename = round(microtime(true)) . '.' . end($f1);
				if(move_uploaded_file($objFiles['image']['tmp_name'], $uploadpath.$newfilename))
				chmod($uploadpath.$newfilename,"777");
				$f1=$newfilename;  
			}
		}
					else {
        	foreach($errors2 as $error2) 
			{
            $objSmarty->assign('ErrorMessage', $error2);
			return false;			
        	}
			foreach($errors3 as $errors2) 
			{
            $objSmarty->assign('ErrorMessage', $errors2);
			return false;
			
        	}
		
		}
	}
		if(!$objArray['item_code']){
		$objSmarty->assign('ErrorMessage', 'Item Code should not be blank');
		return false;
		}elseif(!$objArray['item_name']){
		$objSmarty->assign('ErrorMessage', 'Item Name should not be blank');
		return false;
		}elseif((!$objArray['item_description'])){
		$objSmarty->assign('ErrorMessage', 'Item Description should not be blank');
		return false;
		}/*elseif(!$objArray['baan_company']){
		$objSmarty->assign('ErrorMessage', 'Baan Company should not be blank');
		return false;
		}elseif(!$objArray['wh']){
		$objSmarty->assign('ErrorMessage', 'Wh should not be blank');
		return false;
		}elseif(!$objArray['ed']){
		$objSmarty->assign('ErrorMessage', 'ED should not be blank');
		return false;
		}elseif(!$objArray['total']){
		$objSmarty->assign('ErrorMessage', 'Total should not be blank');
		return false;
		}*/elseif(!$objArray['consumer_basic']){
		$objSmarty->assign('ErrorMessage', 'Consumer Basic should not be blank');
		return false;
		}/*elseif(!$objArray['dimensions']){
		$objSmarty->assign('ErrorMessage', 'Dimension should not be blank');
		return false;
		}*/
		$objSmarty->assign('item_code', $objArray['item_code']);
		$SelQuery = 'SELECT * FROM `'.$tbl.'product_master` WHERE item_code="'.$prd_id.'"';    
	$ListView = $this->ExecuteQuery($SelQuery, "select");   
	 $first=$ListView[0]['image'];
	 $first1=$f1;
	if($first1 == ""){
			if($objArray['item_code'] && $objArray['item_name']){   
		echo	$UpQuery = 'UPDATE `'.$tbl.'product_master` SET `item_code` = "'.trim($objArray['item_code']).'",`item_name` = "'.trim($objArray['item_name']).'",`pkg` = "'.trim($objArray['pkg']).'",`item_description` = "'.trim($objArray['item_description']).'",`item_category` = "'.trim($objArray['item_category']).'",`item_color` = "'.trim($objArray['item_color']).'",`baan_company` = "'.trim($objArray['baan_company']).'",`image`= "'.$ListView[0]['image'].'",`ware_house` = "'.trim($objArray['wh']).'",`ed` = "'.trim($objArray['ed']).'",`total` = "'.trim($objArray['total']).'",`features` = "'.trim($objArray['features']).'",`consumer_basic` = "'.trim($objArray['consumer_basic']).'",`item_category_code` = "'.trim($objArray['item_category_code']).'",`dimensions` = "'.trim($objArray['dimensions']).'",`price_date` = "'.trim($objArray['price_date']).'",`remarks` = "'.trim($objArray['remarks']).'",`status` = "1" WHERE `item_code` ="'.trim($objArray['item_code']).'"';   
			$this->ExecuteQuery($UpQuery, 'update');
			
		}
	}
	else{
echo	$UpQuery = 'UPDATE `'.$tbl.'product_master` SET `item_code` = "'.trim($objArray['item_code']).'",`item_name` = "'.trim($objArray['item_name']).'",`pkg` = "'.trim($objArray['pkg']).'",`item_description` = "'.trim($objArray['item_description']).'",`item_category` = "'.trim($objArray['item_category']).'",`item_color` = "'.trim($objArray['item_color']).'",`baan_company` = "'.trim($objArray['baan_company']).'",`image`= "'.$f1.'",`ware_house` = "'.trim($objArray['wh']).'",`ed` = "'.trim($objArray['ed']).'",`total` = "'.trim($objArray['total']).'",`features` = "'.trim($objArray['features']).'",`consumer_basic` = "'.trim($objArray['consumer_basic']).'",`item_category_code` = "'.trim($objArray['item_category_code']).'",`dimensions` = "'.trim($objArray['dimensions']).'",`price_date` = "'.trim($objArray['price_date']).'",`remarks` = "'.trim($objArray['remarks']).'",`status` = "1" WHERE `item_code` ="'.trim($objArray['item_code']).'"';  
			$this->ExecuteQuery($UpQuery, 'update');
			
	}
	/*header('Location:' .$_SERVER['PHP_SELF'].'?item_code='.$objArray['item_code'].'&server_success=update succeed');*/
			header('Location:' .$_SERVER['PHP_SELF'].'?succs_msg_for_update'."&"."item_code=".$_GET['item_code']);
/*			header('Location:' .$_SERVER['PHP_SELF'].'?succs_msg_for_insert'."&"."item_code=".$_GET['item_code']);*/
			return true;
	}
	function ProductDetail($objArray='')  
	{
		$prd_id = base64_decode($_GET["item_code"]);
		global $objSmarty, $config;
		$tbl = $config['DBPrefix'];
		$SelQuery3 = 'SELECT * FROM `'.$tbl.'product_master` WHERE item_code="'.$prd_id.'" ' ;
		$PageList		= $this->ExecuteQuery($SelQuery3, "select");
		$objSmarty->assign('PageList', $PageList);
	}
	/**********************************************************************************/
	function AjaxGetCategoryDetails()
	{
		global $objSmarty, $config;
		$tbl = $config['DBPrefix'];
		$SelQuery = 'SELECT * FROM '.$tbl.'category_master WHERE category_name ="'.$_GET['item_category'].'"' ;
		$LDList		= $this->ExecuteQuery($SelQuery, "select");	
		//print_r($LDList);
		foreach($LDList as $keys=>$value)	
		{
			echo $LDList[$keys]["category_code"];
		}
		echo "|CUSID|".$LDList[0]['category_code'];
	}
}
?>