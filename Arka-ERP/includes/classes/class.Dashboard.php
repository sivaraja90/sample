<?php
#####Class For Adding Content Management ######
class Dashboard extends MysqlFns{
 
 /* class constructor */
 function Dashboard(){
 $this->LDDisplayPath= $config['SiteGlobalPath']."class.Dashboard.php";
  global $config;
  global $objSmarty;
  $this->MysqlFns();
  $this->Limit = 20;
 }
 function Sales()
 {
global $objSmarty,$config,$_POST;
$tbl = $config['DBPrefix'];
		$SelQuery = "SELECT SUM(total) AS Total FROM ".$tbl."sales_master WHERE YEAR(created_date) = YEAR(DATE_SUB(CURDATE(), INTERVAL -1 MONTH)) AND created_by ='".$_SESSION[UserName]."'";
		$SalAnnual = $this->ExecuteQuery($SelQuery, 'select');
		$objSmarty->assign('SalAnnual', $SalAnnual);

		$SelQuery1 = "SELECT SUM(total) AS Total FROM ".$tbl."sales_master WHERE MONTH(created_date) = MONTH(DATE( CURRENT_DATE()))  AND created_by ='".$_SESSION[UserName]."'";
		$SalCurMon = $this->ExecuteQuery($SelQuery1, 'select');
		$objSmarty->assign('SalCurMon', $SalCurMon);
		
		$SelQuery2 = "SELECT SUM(total) AS Total FROM ".$tbl."sales_master WHERE MONTH(created_date) = MONTH(DATE( CURRENT_DATE()  - INTERVAL 1 MONTH)) AND created_by ='".$_SESSION[UserName]."'";
		$SalLastMon = $this->ExecuteQuery($SelQuery2, 'select');
		$objSmarty->assign('SalLastMon', $SalLastMon);
 }
  function GetAnnualEnquiry()
{ 
 global $objSmarty,$config,$_POST;
$tbl = $config['DBPrefix'];
		$SelQuery = "SELECT COUNT(created_date) AS DATE FROM ".$tbl."enquriy_master WHERE YEAR(created_date) = YEAR(DATE_SUB(CURDATE(), INTERVAL -1 MONTH)) AND created_by ='".$_SESSION[UserName]."'";
		$EnqAnnual = $this->ExecuteQuery($SelQuery, 'select'); 
		$objSmarty->assign('EnqAnnual', $EnqAnnual);

		$SelQuery1 = "SELECT COUNT(created_date) AS Month FROM ".$tbl."enquriy_master WHERE MONTH(created_date) = MONTH(DATE( CURRENT_DATE())) AND created_by ='".$_SESSION[UserName]."'";
		$EnqCurMon = $this->ExecuteQuery($SelQuery1, 'select');
		$objSmarty->assign('EnqCurMon', $EnqCurMon);
		
		$SelQuery2 = "SELECT COUNT(created_date) AS Month FROM ".$tbl."enquriy_master WHERE MONTH(created_date) = MONTH(DATE( CURRENT_DATE()  - INTERVAL 1 MONTH)) AND created_by ='".$_SESSION[UserName]."'";
		$EnqLastMon = $this->ExecuteQuery($SelQuery2, 'select');
		$objSmarty->assign('EnqLastMon', $EnqLastMon);

}
 
 function Service()
 {
 global $objSmarty,$config,$_POST;
$tbl = $config['DBPrefix'];
		$SelQuery = "SELECT SUM(total) AS Total FROM ".$tbl."service_master WHERE YEAR(created_date) = YEAR(DATE_SUB(CURDATE(), INTERVAL -1 MONTH)) AND created_by ='".$_SESSION[UserName]."'";
		$SerAnnual = $this->ExecuteQuery($SelQuery, 'select');
		$objSmarty->assign('SerAnnual', $SerAnnual);

		$SelQuery1 = "SELECT SUM(total) AS Total FROM ".$tbl."service_master WHERE MONTH(created_date) = MONTH(DATE( CURRENT_DATE())) AND created_by ='".$_SESSION[UserName]."'";
		$SerCurMon = $this->ExecuteQuery($SelQuery1, 'select');
		$objSmarty->assign('SerCurMon', $SerCurMon);
		
		$SelQuery2 = "SELECT SUM(total) AS Total FROM ".$tbl."service_master WHERE MONTH(created_date) = MONTH(DATE( CURRENT_DATE()  - INTERVAL 1 MONTH)) AND created_by ='".$_SESSION[UserName]."'";
		$SerLastMon = $this->ExecuteQuery($SelQuery2, 'select');
		$objSmarty->assign('SerLastMon', $SerLastMon);

 
 }
 
 function Project()
 {
 global $objSmarty,$config,$_POST;
$tbl = $config['DBPrefix'];
		$SelQuery = "SELECT SUM(total) AS Total FROM ".$tbl."project_master WHERE YEAR(created_date) = YEAR(DATE_SUB(CURDATE(), INTERVAL -1 MONTH)) AND created_by ='".$_SESSION[UserName]."'";
		$ProAnnual = $this->ExecuteQuery($SelQuery, 'select');
		$objSmarty->assign('ProAnnual', $ProAnnual);

		$SelQuery1 = "SELECT SUM(total) AS Total FROM ".$tbl."project_master WHERE MONTH(created_date) = MONTH(DATE( CURRENT_DATE())) AND created_by ='".$_SESSION[UserName]."'";
		$ProCurMon = $this->ExecuteQuery($SelQuery1, 'select');
		$objSmarty->assign('ProCurMon', $ProCurMon);
		
		$SelQuery2 = "SELECT SUM(total) AS Total FROM ".$tbl."project_master WHERE MONTH(created_date) = MONTH(DATE( CURRENT_DATE()  - INTERVAL 1 MONTH)) AND created_by ='".$_SESSION[UserName]."'";
		$ProLastMon = $this->ExecuteQuery($SelQuery2, 'select');
		$objSmarty->assign('ProLastMon', $ProLastMon);

 
 }	
 
 function graphSales()
  	{
	global $objSmarty,$config,$_POST;
$tbl = $config['DBPrefix'];
$SelQuery = "SELECT COUNT(sales_order_no) AS sales FROM ".$tbl."sales_master WHERE MONTH(created_date) = MONTH(CURDATE()) AND created_by ='".$_SESSION[UserName]."'";
$GraphSales = $this->ExecuteQuery($SelQuery, 'select');
		$objSmarty->assign('GraphSales', $GraphSales);
		
		$SelQuery2 = "SELECT COUNT(sales_order_no) AS sales2 FROM ".$tbl."sales_master WHERE MONTH(created_date) = MONTH(CURDATE()  - INTERVAL 1 MONTH) AND created_by ='".$_SESSION[UserName]."'";
$GraphSales2 = $this->ExecuteQuery($SelQuery2, 'select');
		$objSmarty->assign('GraphSales2', $GraphSales2);


 	}
}

?>


