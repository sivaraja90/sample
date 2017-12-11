<?php
#####Class For Adding Content Management ######
class MaterialReg extends MysqlFns{
	/* class constructor */
	function MaterialReg(){
		$this->LDDisplayPath= $config['SiteGlobalPath']."class.MaterialReg.php";
		global $config; 
		global $objSmarty, $config;
		$tbl = $config['DBPrefix'];
		$this->MysqlFns();
		$this->Limit = 20;
		$mat_id = base64_decode($_GET["material_code"]);
		/**************************************Customer Id Auto Increment*********************************************************/
		$SelQuerys	= 'SELECT max(material_code) as last FROM `'.$tbl.'material_master` Limit 0,1';
		//  echo $SelQuery;
		$MatDetail	= $this->ExecuteQuery($SelQuerys, 'select');
		if($MatDetail[0]['last']!="")
		{
		$MatDetail[0]['material_code'] = stripslashes($MatDetail[0]['last']);
		$PageList1 = preg_replace("/[^0-9\.]/", '', $MatDetail[0]['material_code']);
		$PageList1= $PageList + 1;
		$str = str_split($MatDetail[0]['last'], 3);
		$PageList = $str[0]. "" .$PageList1;
		}
		else
		{
		$PageList = "MAT1001";
		}
		$objSmarty->assign('PageList', $PageList);
	}
	/*****function InsertMaterial()****/
	/*****function ViewMaterial()******/
	/*****function ViewEditMaterial()******/
	/*****function DeletedMaterial()******/
	/*****Time Stamp Value()*****/
	/***** As Date And Time()****/
	/***** fuction EditMaterial()****/
	/*************************************************Insert Material***************************************************************/
	function InsertmaterialContent($objArray){
		global $objSmarty, $config,$_POST;
		$tbl = $config['DBPrefix'];
		if(!$objArray['material_code']){
		$objSmarty->assign('ErrorMessage', 'Material Code should not be blank');
		return false;
		}elseif(!$objArray['mat_name']){
		$objSmarty->assign('ErrorMessage', 'Material Name should not be blank');
		return false;
		}elseif(!$objArray['material_price']){
		$objSmarty->assign('ErrorMessage', 'Material Price should not be blank');
		return false;
		}elseif(!$objArray['material_type']){
		$objSmarty->assign('ErrorMessage', 'material Type should not be blank');
		return false;
		}elseif(!$objArray['specification']){
		$objSmarty->assign('ErrorMessage', 'Specification should not be blank');
		return false;
		}elseif(!$objArray['created_by']){
		$objSmarty->assign('ErrorMessage', 'Created by should be blank');
		return false;
		}
		$objSmarty->assign('material_code', $objArray['material_code']);
		if($objArray['material_code'] && $objArray['mat_name']){
		$InsQuery = 'INSERT INTO `'.$tbl.'material_master`(`material_code`, `material_name`, `material_make`,`material_category`, `material_price`, `material_type`,`specification`, `remarks`, `created_date`, `created_time`, `created_by`, `status`) VALUES("'.trim(addslashes($objArray['material_code'])).'","'.trim(addslashes($objArray['mat_name'])).'","'.trim(addslashes($objArray['material_make'])).'","'.trim(addslashes($objArray['material_category'])).'","'.trim(addslashes($objArray['material_price'])).'","'.trim(addslashes($objArray['material_type'])).'","'.trim(addslashes($objArray['specification'])).'","'.trim(addslashes($objArray['remarks'])).'","'.trim(addslashes($objArray['created_date'])).'","'.trim(addslashes($objArray['created_time'])).'","'.trim(addslashes($objArray['created_by'])).'","1")';
		$this->ExecuteQuery($InsQuery, 'insert');
		$objSmarty->assign('SuccessMessage', 'Material code  Successfully');
		header('Location:' .$_SERVER['PHP_SELF'].'?server_response');
		return true;
		}
	}
	/*************************************************View Material***************************************************************/
	function GetMateralView()  {
		$mat_id = base64_decode($_GET["material_code"]);
		global $objSmarty,$config;
		$tbl = $config['DBPrefix'];
		$SelQuery = 'SELECT * FROM `'.$tbl.'material_master` WHERE material_code="'.$mat_id.'" AND status="1"';
		$ListViews		= $this->ExecuteQuery($SelQuery, "select");
		$objSmarty->assign("ListViews",$ListViews);
		return $ListViews;
	}
	/*************************************************View Material***************************************************************/
	function ListMaterial()  {
		$mat_id = base64_decode($_GET["material_code"]);
		global $objSmarty,$config;
		$tbl = $config['DBPrefix'];
		$SelQuery = 'SELECT * FROM `'.$tbl.'material_master` WHERE status="1"';
		$ListViews		= $this->ExecuteQuery($SelQuery, "select");
		$objSmarty->assign("ListViews",$ListViews);
		return $ListViews;
	}
	/*************************************************View Edit Material***************************************************************/
	function ViewEdit($objArray)
	{
		$mat_id = base64_decode($_GET["material_code"]);
		global $objSmarty,$config;
		$tbl = $config['DBPrefix'];
		$SelQuery = 'SELECT * FROM `'.$tbl.'material_master` WHERE material_code="'.$mat_id.'"';
		$ListView = $this->ExecuteQuery($SelQuery, "select");
		$objSmarty->assign('ListView', $ListView);
		return $ListView;
	}
	/**********************************************Delete Contact*********************************************************************/
	function DeleteMaster($CatIdent)
	{ 
		global $objSmarty,$config;
		$tbl = $config['DBPrefix'];
		$mat_id = base64_decode($_GET["material_code"]);
		$DelQuery = 'update `'.$tbl.'material_master` set `status` = 0 WHERE `material_code` ="'.$mat_id.'"';
		$this->ExecuteQuery($DelQuery, 'update');
		header('Location:' .$_SERVER['PHP_SELF'].'?succs_msg_for_del');  
	}
	/****************************************************Time Stamp Value As Date And Time Form Master****************************************/
	function DateStamp()
	{ 
		global $objSmarty,$config;
		$tbl = $config['DBPrefix'];
		$mat_id = base64_decode($_GET["material_code"]);
		$SelQuery = 'SELECT Date(timestamp_value) as Date from '.$tbl.'material_master WHERE material_code="'.$mat_id.'"';
		$Date_Stamp = $this->ExecuteQuery($SelQuery, "select");
		//print $Date;
		$objSmarty->assign('Date_Stamp', $Date_Stamp);
		return $Date_Stamp;
	}
	
	function TimeStamp()
	{ 
		global $objSmarty,$config;
		$tbl = $config['DBPrefix'];
		$mat_id = base64_decode($_GET["material_code"]);
		$SelQuery1 = 'SELECT  Time(timestamp_value) as Time from '.$tbl.'material_master WHERE material_code="'.$mat_id.'"';
		$Time_Stamp = $this->ExecuteQuery($SelQuery1, "select");
		$objSmarty->assign('Time_Stamp', $Time_Stamp);
		return $Time_Stamp;
	}
	/************************************************************************ Edit the Customer Details*******************************************/
	function EditMaterial($objArray="")
	{
		global $objSmarty, $config,$_POST;
		$mat_id = base64_decode($_GET["material_code"]);
		$tbl = $config['DBPrefix'];
		if(!$objArray['material_code']){
		$objSmarty->assign('ErrorMessage', 'Material Code should not be blank');
		return false;
		}elseif(!$objArray['mat_name']){
		$objSmarty->assign('ErrorMessage', 'Material Name should not be blank');
		return false;
		}elseif(!$objArray['material_make']){
		$objSmarty->assign('ErrorMessage', 'Material Make should not be blank');
		return false;
		}elseif(!$objArray['material_category']){
		$objSmarty->assign('ErrorMessage', 'Material Category should not be blank');
		return false;
		}elseif(!$objArray['material_price']){
		$objSmarty->assign('ErrorMessage', 'Material Price should not be blank');
		return false;
		}elseif(!$objArray['material_type']){
		$objSmarty->assign('ErrorMessage', 'material Type should not be blank');
		return false;
		}elseif(!$objArray['specification']){
		$objSmarty->assign('ErrorMessage', 'Specification should not be blank');
		return false;
		}elseif(!$objArray['created_by']){
		$objSmarty->assign('ErrorMessage', 'Created by should be blank');
		return false;
		}
		$objSmarty->assign('material_code', $objArray['material_code']);
		$UpQuery = 'UPDATE `'.$tbl.'material_master` SET `material_code` = "'.trim($objArray['material_code']).'", `material_name` = "'.trim($objArray['mat_name']).'", `material_make` = "'.trim($objArray['material_make']).'", `material_category` = "'.trim($objArray['material_category']).'", `material_price` = "'.trim($objArray['material_price']).'", `material_type` = "'.trim($objArray['material_type']).'", `specification` = "'.trim($objArray['specification']).'", `remarks` = "'.trim(addslashes($objArray['remarks'])).'", `created_date` = "'.trim(addslashes($objArray['created_date'])).'",`created_time` ="'.trim(addslashes($objArray['created_time'])).'", `status` = "1" WHERE `material_code` ="'.$mat_id.'"';
		$this->ExecuteQuery($UpQuery, 'update');
		//Success Message
		header('Location:' .$_SERVER['PHP_SELF'].'?succs_msg_for_insert'."&"."material_code=".$_GET['material_code']);
		return true;
	}
}
 ?>