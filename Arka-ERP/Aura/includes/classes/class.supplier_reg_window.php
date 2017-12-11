<?php
#####Class For Adding Content Management ######
class supplier_reg_window extends MysqlFns{
 
 /* class constructor */
 function supplier_reg_window(){
 $this->LDDisplayPath= $config['SiteGlobalPath']."class.supplier_reg_window.php";
  global $config;
  global $objSmarty;
  $this->MysqlFns();
  $this->Limit = 20;
   $this->Keyword = '';
  $this->Operator = '';
  $this->PerPage = '';
}
 
 
 /* Get the Static Content list */
 function Getsupplier($objArray='')
 {
 	global $objSmarty;
	$SelQuery	= 'SELECT * FROM arka_supplier_details WHERE `supplier_code` = "'.$objArray['supplier_code'].'" ';
	  $suplierList		= $this->ExecuteQuery($SelQuery, 'select');
		$objSmarty->assign('suplierList', $suplierList);
 }
}

?>



