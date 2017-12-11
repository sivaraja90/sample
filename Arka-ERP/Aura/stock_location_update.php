<?php

  require('includes/common.php');
   require('Connections/ARKA.php');
  	include_once $config['SiteClassPath']."class.Staff.php";
//  	include_once $config['SiteClassPath']."class.Customer.php";
//	include_once $config['SiteClassPath']."class.stock_mngmnt.php";
//	include_once $config['SiteClassPath']."class.split_page_results.php";

//include('is_autheticated.php');
$loca=$_REQUEST['loc'];//echo $loca;
$matcode=$_REQUEST['mcode']; // echo $matcode; 
$quantity=$_REQUEST['qty'];

//echo "update arka_stock_master set location='".$loca."' where item_category_code ='".$matcode."'";
mysql_query("update arka_stock_master set location='".$loca."',quantity='".$quantity."' where item_category_code ='".$matcode."'");
/*if($n==0)
{
$sql="update book_receipt set bar_code='".$bar_code."',shelf_rack='".$shelf_rack."' where id='".$branch_id."'";
mysql_query($sql);
echo "1";
}else
{
echo "0";
}*/
?>