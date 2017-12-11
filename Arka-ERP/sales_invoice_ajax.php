<?php 

/*$host="Localhost";
$uname="root";
$pwd="";
$conn=mysql_connect($host,$uname,$pwd);
$db_select=mysql_select_db('alf',$conn);
*/
$hostname_arkaerp = "localhost";
$database_arkaerp = "arkaerp";
$username_arkaerp = "root";
$password_arkaerp = "";
$arkaerp = mysql_connect($hostname_arkaerp, $username_arkaerp, $password_arkaerp) or trigger_error(mysql_error(),E_USER_ERROR);
$db_select=mysql_select_db('arkaerp',$arkaerp);
/*$hostname_arka = "localhost";
$database_arka = "arkascada";
$username_arka = "root";
$password_arka = "";
$arka = mysql_connect($hostname_arka, $username_arka, $password_arka) or trigger_error(mysql_error(),E_USER_ERROR);
$db_select=mysql_select_db('arkascada',$arka);
*/
$query='SELECT * FROM `arka_sales_payment_master` WHERE `invoice_no`="'.$_GET['q'].'" ';

$exe_query=mysql_query($query,$arkaerp);

while($row = mysql_fetch_array($exe_query))
{
   


$invoice_name_array= '<option value="'.$row["invoice_no"].'">'.$row["invoice_no"].'</option>';
echo  $invoice_name_array.'|$|'.$row["invoice_no"];

}


mysql_close($arkaerp);


?>