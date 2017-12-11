<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
/*
$hostname = "localhost";
$database = "alf";
$username = "root";
$password = "";
$db = mysql_connect($hostname, $username, $password) or trigger_error(mysql_error(),E_USER_ERROR);
*/
/*	$config['DBHost']		= "localhost";
	$config['DBUser']		= "root";
	$config['DBPassword']	= "";
	$config['DBName']		= "alf"; */

/*$hostname_arka = "192.168.1.206";
$database_arka = "universal_erp";
$username_arka = "root";
$password_arka = "";
$arka = mysql_connect($hostname_arka, $username_arka, $password_arka) or trigger_error(mysql_error(),E_USER_ERROR);
mysql_select_db($database_arka, $arka);*/
$hostname_arkaerp = "arkavts.db.10615255.hostedresource.com";
$database_arkaerp = "arkavts";
$username_arkaerp = "arkavts";
$password_arkaerp = "Arka@2015";
$arkaerp = mysqli_connect($hostname_arkaerp, $username_arkaerp, $password_arkaerp) or trigger_error(mysqli_error(),E_USER_ERROR);

/*$hostname_arka = "166.62.10.227";
$database_arka = "arkawindscada";
$username_arka = "windscada";
$password_arka = "ArkaScada@15";
$arka = mysql_connect($hostname_arka, $username_arka, $password_arka) or trigger_error(mysql_error(),E_USER_ERROR);
*/
?>