<?php 
/*   Global Variables   */
	if(!defined('DS'))
		define('DS',DIRECTORY_SEPARATOR);

	if(!defined("_MAINSITEPATH_"))
		define("_MAINSITEPATH_",dirname(__FILE__).DS);

	$config['SiteGlobalPath']		= "http://adroitsolutionz.com/arkaerp/"; 
	//$config['SiteGlobalPath']		= "http://localhost/Universalerp/";
	$config['SiteLocalPath']		= _MAINSITEPATH_ ;
	$config['SiteClassPath']		= $config['SiteLocalPath'].'includes'.DS.'classes'.DS;
	$config['UserImagePath']		= $config['SiteLocalPath'].'images'.DS.'user'.DS;
	$config['ProductImagePath']		= $config['SiteLocalPath'].'images'.DS.'product'.DS;
	$config['EmployeeImagePath']	= $config['SiteLocalPath'].'images'.DS.'employee'.DS;
	$config['MailImagePath']	    = $config['SiteLocalPath'].'images'.DS.'mail'.DS;
	$config['SiteLink']				= "<a href='".$config['SiteGlobalPath']."'>arkaerp.tasca.in</a>";
	

/*   Global Site Variables   */
	$config['SiteTitle']	  	= "TASCA - ARKA ERP";
	$config['SiteMail']			= "info@arkaerp.co.in";
	$config['AdminMail']		= "admin@arkaerp.co.in";
	$config['SiteName']			= "arkaerp.tasca.in";
	$config['DBPrefix']			= "arka_";


	$config['DBHost']		= "localhost";
	$config['DBUser']		= "root";
	$config['DBPassword']	= "";
	$config['DBName']		= "arkaerp";
	
	
	define('DB_HOST', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASSWORD', '');
    define('DB_DATABASE', 'arkaerp'); 
	


	/*$config['DBHost']		= "arkavts.db.10615255.hostedresource.com";
	$config['DBUser']		= "arkavts";
	$config['DBPassword']	= "Arka@2015";
	$config['DBName']		= "arkavts"; 
	
	define('DB_HOST', 'arkavts.db.10615255.hostedresource.com');
    define('DB_USER', 'arkavts');
    define('DB_PASSWORD', 'Arka@2015');
    define('DB_DATABASE', 'arkavts');
	*/

?>