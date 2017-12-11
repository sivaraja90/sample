<?
#####Class For Adding Content Management ######
		

class Center_Home extends MysqlFns{
 
 /* class constructor */
  function Center_Home(){
	global $config;
	$this->MysqlFns();
	$this->Limit = 20;
  }
  
  function Fetch_Places(){
  /*global $objSmarty;
  $Select_Qry = 'SELECT `internet_place_id`, `internet_place_name`, `internet_place_description`, `internet_place_add`, `internet_place_when_takeplace`, `internet_place_volunteers`, `internet_place_status` FROM `tbl_internet_insert_place` WHERE `email_address`="' . EscapeInj($EmailId) . '"';
	$ArrMembers = $this->ExecuteQuery($selectQry, 'selectassoc');*/
  }
  
}
?>
  