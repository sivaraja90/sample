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

$hostname_arkaerp = "localhost";
$database_arkaerp = "arkaerp";
$username_arkaerp = "root";
$password_arkaerp = "";
$arkaerp = mysql_connect($hostname_arkaerp, $username_arkaerp, $password_arkaerp) or trigger_error(mysql_error(),E_USER_ERROR);


/*$hostname_arkaerp = "arkavts.db.10615255.hostedresource.com";
$database_arkaerp = "arkavts";
$username_arkaerp = "arkavts";
$password_arkaerp = "Arka@2015";
$arkaerp = mysql_connect($hostname_arkaerp, $username_arkaerp, $password_arkaerp) or trigger_error(mysql_error(),E_USER_ERROR);
*/
?>