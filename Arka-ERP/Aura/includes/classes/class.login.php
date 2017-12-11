<?php
	/*	Class Function for Admin	*/
	class login extends MysqlFns
	{
	static $Gname,$Uid,$Cid; 
	/* class constructor */
	function login(){
	  $this->MysqlFns();
	  $this->uploadPath='';
	}
	
	function chklogin($objArray){
	  global $_SESSION;
	  if(isset($_SESSION['customerId']) && isset($_SESSION['CUSTOMER_NAME']))
	    return true;
	  else
	    Redirect("index.php");
	}
	
	function changePassword(){
	  global $objSmarty;
	  if($this->chkPassword($_POST['txtCurPwd'], $_SESSION['DecsId'])){
	    $UpQuery = "UPDATE `arka_user_master` SET `password` = '".addslashes($_POST['txtpword'])."' WHERE `user_group` = ". $_SESSION['DecsId'];
		$UpResult	= $this->ExecuteQuery($UpQuery, "update");
		$objSmarty->assign("SuccessMessage", "Password has been updated successfully");
	  }
	  else{ 
	    $objSmarty->assign("ErrorMessage", "Invalid Current Password");
		return false;
	  }
	}

	function chkPassword($CurPwd, $DecsId){
	  $SelQuery	= "SELECT `user_group ` FROM `arka_user_master` WHERE `password` = '".$CurPwd."' AND `user_group ` = '".$DecsId."' LIMIT 0,1";
	  $SelResult	= $this->ExecuteQuery($SelQuery, "selectassoc");
	  if(!empty($SelResult) && !empty($SelResult[0]['category'])){	
	    return true;
	  }
	  else
	    return false;
	}
	
		
	function chkCustomerLogin($objArray){
//	print_r($_POST);
	  global $objSmarty;
	   if ($_POST["cid"] &&  $_POST["uid"] &&  $_POST["pword"])
	  {
	   $Cusid	= $_POST["cid"];
  	  $Usrid	= $_POST["uid"];	
	  $Password	= $_POST["pword"];
	  
		
		$SelQuery1	= "SELECT * FROM arka_user_master WHERE `user_id` = '".($_POST["uid"])."' AND `password` = '" .($_POST["pword"]). "' AND customer_id ='".($_POST["cid"])."' LIMIT 0,1";
	  	$SelResult1	= $this->ExecuteQuery($SelQuery1, "select");
	 	if(!empty($SelResult1)) {
		$_SESSION['User_ID']	= $CustomerLogin	= $SelResult1[0]['user_id'];
		$_SESSION['USER_GROUP']	= $CustomerGroup	= $SelResult1[0]['user_group'];
		$_SESSION['USER_NAME']	= $UserName	= $SelResult1[0]['username'];
		$_SESSION['CUSTOMER_ID']= $CustomerLogin	    = $SelResult1[0]['customer_id'];
		$_SESSION['CUSTOMER_NAME']= $CustomerName	    = $SelResult1[0]['customer_name'];
		$_SESSION['PHONE']= $CustomerPhone	    = $SelResult1[0]['phone'];
		$_SESSION['MOBILE']= $CustomerMobile	    = $SelResult1[0]['mobile'];
		$_SESSION['EMAIL']= $CustomerEmail	    = $SelResult1[0]['email_id'];
		$_SESSION['TYPE']= $CustomerType	    = $SelResult1[0]['type'];
		$Gname	= $_SESSION['USER_GROUP'];
		$Uid	= $_SESSION['User_ID'];
		$Cid	= $_SESSION['CUSTOMER_ID'];
		//print_r($_SESSION['USER_GROUP']);
	//	session_register("User_ID");
		return true;
	  		}
	  	else {
	    $objSmarty->assign('ErrorMessage', "Invalid User Name or Password !");
		return false;
	  }
	  }
	}
	
	
	function UpdateSiteConfig(){
	  if(!get_magic_quotes_gpc()){
	    $_POST['SiteTitle']=addslashes($_POST['SiteTitle']);
		$_POST['TADescription']=addslashes($_POST['TADescription']);
		$_POST['TAKeywords']=addslashes($_POST['TAKeywords']);
	  }
	  $Upd1="UPDATE `tbl_admin_configuration` SET `const_value`='".$_POST['SiteTitle']."' WHERE `ident`='1' AND `const_name`='SITE_NAME'";
	  $this->ExecuteQuery($Upd1,'update');
	  $Upd2="UPDATE `tbl_admin_configuration` SET `const_value`='".$_POST['TADescription']."' WHERE `ident`='2' AND `const_name`='META_DESC'";
	  $this->ExecuteQuery($Upd2,'update');
	  $Upd3="UPDATE `tbl_admin_configuration` SET `const_value`='".$_POST['TAKeywords']."' WHERE `ident`='3' AND `const_name`='META_KEY'";
	  $this->ExecuteQuery($Upd3,'update');
	  
	}
	
	function GetSiteConfig(){
	  global $objSmarty;
	  $SelQry="SELECT * FROM `tbl_admin_configuration` ";
	  
	  $Result=$this->ExecuteQuery($SelQry,'selectassoc');
	  
	  if(count($Result)>0)
	    foreach($Result as $Value)
		  $Result1[$Value['const_name']]=$Value['const_value'];

	  $objSmarty->assign('Result1',$Result1);	  
	}
}
?>