<?php
	/*	Class Function for Admin	*/
	class Admin extends MysqlFns
	{
	/* class constructor */
	function Admin(){
	  $this->MysqlFns();
	  $this->uploadPath='';
	}
	
	function chkLogin(){
	  global $_SESSION;
	  if(isset($_SESSION['AdminLogin']) && !empty($_SESSION['AdminLogin']))
	    return true;
	  else
	    Redirect("index.php");
	}
	
	function changePassword(){
	  global $objSmarty;
	  if($_POST['txtNewPwd']==$_POST['txtConPwd'] ) {
		  if($this->chkPassword($_POST['txtCurPwd'], $_SESSION['AdminId'])){
			$UpQuery = "UPDATE `arka_admin_tbl` SET `password` = '".addslashes($_POST['txtNewPwd'])."' WHERE `ident` = '".$_SESSION['AdminId']."'";
			$UpResult	= $this->ExecuteQuery($UpQuery, "update");
			$objSmarty->assign("SuccessMessage", "Password has been updated successfully");
		  }
		  else{
			$objSmarty->assign("ErrorMessage", "Invalid Current Password");
			return false;
		  }
		  }
	  else {
	  $objSmarty->assign("ErrorMessage", "New Password must match with Confirm Password");
	  return false;
	  }
	}

	function chkPassword($CurPwd, $AdminId){
	  $SelQuery	= "SELECT `ident` FROM `arka_admin_tbl` WHERE `password` = '".$CurPwd."' AND `ident` = '".$AdminId."' LIMIT 0,1";
	  $SelResult	= $this->ExecuteQuery($SelQuery, "selectassoc");
	  if(!empty($SelResult) && !empty($SelResult[0]['ident'])){	
	    return true;
	  }
	  else
	    return false;
	}

	function chkAdminLogin($objArray){
	  global $objSmarty;
	  $Login		= addslashes($objArray["txtloginname"]);
	  $Password	= addslashes($objArray["txtloginpassword"]);
	  if(empty($Login)) {
	    return false;
	  }
	  if(empty($Password)) {
	    $objSmarty->assign("ErrorMessage", "Invalid Password");
		return false;
	  }
	  $SelQuery	= "SELECT `ident`, `login_name` FROM arka_admin_tbl WHERE `login_name` = '".$Login."' AND `password` = '".$Password."' LIMIT 0,1";
	  $SelResult	= $this->ExecuteQuery($SelQuery, "selectassoc");
	  if(!empty($SelResult) && !empty($SelResult[0]['ident'])) {
	 //   session_register("AdminLogin");
		$_SESSION['AdminLogin']	= $AdminLogin	= $SelResult[0]['login_name'];
		$_SESSION['AdminId']	= $AdminId		= $SelResult[0]['ident'];
		return true;
	  }else {
	    $objSmarty->assign("ErrorMessage", "Invalid Login");
		return false;
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