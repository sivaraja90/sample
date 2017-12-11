<?php 
/*   Global Variables   */
	if(!defined('DS'))
		define('DS',DIRECTORY_SEPARATOR);	if(!defined("_MAINSITEPATH_"))
		define("_MAINSITEPATH_",dirname(__FILE__).DS);

   // $config['SiteGlobalPath']		= "http://192.168.1.206/Universal_ERP/Aura/";
	    $config['SiteGlobalPath']		= "http://arkaerp.tasca.in/Aura/";

	$config['SiteLocalPath']		= _MAINSITEPATH_ ;
	$config['SiteClassPath']		= $config['SiteLocalPath'].'includes'.DS.'classes'.DS;
	$config['SiteImagePath']		= $config['SiteLocalPath'].'images'.DS.'icons'.DS;
	$config['LogoImagePath']		= $config['SiteLocalPath'].'img'.DS.'CustomerLogo'.DS;
	$config['MaterialImagePath']	= $config['SiteLocalPath'].'img'.DS.'MaterialImages'.DS;
	/*$config['SiteLink']				= "<a href='".$config['SiteGlobalPath']."'>arkascada.net</a>";*/
	$config['SiteLink']				= "<a href='".$config['SiteGlobalPath']."'>arkaerp.tasca.in</a>";
	
/*   Global Site Variables   */

	$config['SiteTitle']	  	= "Arka";
	$config['SiteMail']			= "info@adroitsolutionz.com";
	$config['AdminMail']		= "admin@adroitsolutionz.com";
	$config['SiteName']			= "arkascada.in";

/*	$config['DBHost']		= "localhost";
	$config['DBUser']		= "root";
	$config['DBPassword']	= "";
	$config['DBName']		= "universal_erp";
	
	define('DB_HOST', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASSWORD','');
    define('DB_DATABASE', 'universal_erp');
*/



	$config['DBHost']		= "arkavts.db.10615255.hostedresource.com";
	$config['DBUser']		= "arkavts";
	$config['DBPassword']	= "Arka@2015";
	$config['DBName']		= "arkavts"; 
	
	define('DB_HOST', 'arkavts.db.10615255.hostedresource.com');
    define('DB_USER', 'arkavts');
    define('DB_PASSWORD', 'Arka@2015');
    define('DB_DATABASE', 'arkavts');


	/*$config['DBHost']		= "166.62.10.227";
	$config['DBUser']		= "windscada";
	$config['DBPassword']	= "ArkaScada@15";
	$config['DBName']		= "arkawindscada"; 
	
	define('DB_HOST', '166.62.10.227');
    define('DB_USER', 'windscada');
    define('DB_PASSWORD', 'ArkaScada@15');
    define('DB_DATABASE', 'arkawindscada');*/
	 

?>