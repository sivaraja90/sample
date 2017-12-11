<?php 
	ob_start();
	session_start();
	error_reporting(E_ERROR | E_WARNING | E_PARSE);

	define('PREVNEXT_BUTTON_PREV', '<b>&lt;&lt;</b>');
	define('PREVNEXT_BUTTON_NEXT', '<b>&gt;&gt;</b>');
	define('TEXT_DISPLAY_NUMBER_OF_RESULT', '<b>%d</b> to <b>%d</b> (of <b>%d</b>)');
	define('TEXT_DISPLAY_NUMBER_OF_RESULT1', 'Showing <b>%d</b> - <b>%d</b> of <b>%d</b> Results');
	define('TEXT_RESULT_PAGE1', ' Result Pages:');
	define('TEXT_RESULT_PAGE', 'Showing:');
	define('TEXT_RESULT_PAGE2', 'Results');
	define('PREVNEXT_TITLE_PREVIOUS_PAGE', 'Previous Page');
	define('PREVNEXT_TITLE_NEXT_PAGE', 'Next Page');
	define('PREVNEXT_TITLE_PAGE_NO', 'Page %d');
	define('PREVNEXT_TITLE_PREV_SET_OF_NO_PAGE', 'Previous Set of %d Pages');
	define('PREVNEXT_TITLE_NEXT_SET_OF_NO_PAGE', 'Next Set of %d Pages');
	define('PREVNEXT_BUTTON_PREV1', ' &laquo; Prev ');
	define('PREVNEXT_BUTTON_NEXT1', ' Next &raquo; ');
	define('PREVNEXT_BUTTON_LAST', ' LAST &raquo; ');
	define( 'DS', DIRECTORY_SEPARATOR );
	
	if(file_exists('config.php'))
	  require_once 'config.php';
	else
	  require_once '..'.DS.'config.php';

	if(is_dir($_SERVER['DOCUMENT_ROOT'].DS.'PEAR'.DS))
	  ini_set('include_path', $_SERVER['DOCUMENT_ROOT'].DS.'PEAR'.DS);

	require_once $config['SiteClassPath']."class.SqlFunctions.php";
	require_once $config['SiteClassPath']."class.upload.php";
	require_once $config['SiteLocalPath']."includes/Smarty/Smarty.class.php";
	require_once $config['SiteLocalPath']."includes/EmailNotificationSend.php";
	require_once $config['SiteLocalPath']."includes/libmail.php";
	

	
	$objSmarty	= new Smarty();
	$objSmarty->assign('SiteGlobalPath',$config['SiteGlobalPath']);
	if(strpos($_SERVER['REQUEST_URI'],'admin')){
	  $objSmarty->template_dir	= $config['SiteLocalPath'] . DS . 'admin' . DS . 'temp_as';
	  $objSmarty->compile_dir	= $config['SiteLocalPath'] . DS . 'admin' . DS . 'temp_as_c';
	} else {
	  $objSmarty->template_dir	= $config['SiteLocalPath'] . DS . 'templates';
	  $objSmarty->compile_dir	= $config['SiteLocalPath'] . DS . 'templates_c';
	}
	$ObjMysqlFns	= new MysqlFns();
	global $objSmarty, $config;

	
	function CartContent(){
	  return count($_SESSION['mycart']);
	}
	
	function Redirect($Url)  {
	 header("Location:".$Url);
	 exit;
	}
	
	function ErrorMessage($error,$width) {
		$Message = "<div class='err_tbl' style = 'width:".$width."px'>";
		
		$Message .="<ul>";
		$Message .= "<li class='err_hdr'>Please check</li>";
		for($i=0;$i<count($error);$i++)
		{
		 $Message .= "<li class='err_text'>$error[$i]</li>";
		}
		$Message .="</ul></div>";
		
		return $Message;
	}
	
	function SuccessMessage($Success,$width) {
		$Message = "<div class='err_tbl' style = 'width:".$width."px'>";
		
		$Message .="<ul>";
		for($i=0;$i<count($Success);$i++)
		{
		 $Message .= "<li class='suc_text'>$Success[$i]</li>";
		}
		$Message .="</ul></div>";
		
		return $Message;
	}
	
	function createRandom($length){
		
		$chars = "abcdefghijkmnopqrstuvwxyz023456789";
		srand((double)microtime()*1000000);
		$i = 0;
		$pass = '' ;
	
		while ($i <= $length) {
	
			$num = rand() % 33;
			$tmp = substr($chars, $num, 1);
			$new_string = $new_string . $tmp;
			$i++;
	
		}
    	return $new_string;
	} 		

	function not_null($value) {
	 if (is_array($value)) {
	  if (sizeof($value) > 0) {
	   return true;
	  } else {
	   return false;
	  }
	 } else {
	  if ( (is_string($value) || is_int($value)) && ($value != '') && ($value != 'NULL') && (strlen(trim($value)) > 0)) {
	   return true;
	  } else {
	   return false;
	  }
	 }
	}

	function href_link($page = '', $parameters = '', $connection = 'NONSSL')  {
	  if ($parameters == '') {
		$link = $link . $page . '?' . SID;
	  } else {
		$link = $link . $page . '?' . $parameters . '&' . SID;
	  }

	  while ( (substr($link, -1) == '&') || (substr($link, -1) == '?') ) $link = substr($link, 0, -1);

	  return $link;
	}
  
  function get_all_get_params($exclude_array = '') {
    global $HTTP_GET_VARS;

    if (!is_array($exclude_array)) $exclude_array = array();

    $get_url = '';
    if (is_array($HTTP_GET_VARS) && (sizeof($HTTP_GET_VARS) > 0)) {
      reset($HTTP_GET_VARS);
      while (list($key, $value) = each($HTTP_GET_VARS)) {
        if ( (strlen($value) > 0) && ($key != temp_session_name()) && ($key != 'error') && (!in_array($key, $exclude_array)) && ($key != 'x') && ($key != 'y') ) {
          $get_url .= $key . '=' . rawurlencode(stripslashes($value)) . '&';
        }
      }
    }
    return $get_url;
  }

  function temp_session_name($name = '') {
    if (!empty($name)) {
      return session_name($name);
    } else {
      return session_name();
    }
  }
  
  function TrimAddSlashes($string){
	if (is_string($string)) {
      if(get_magic_quotes_gpc())
		return trim($string);
	  else
		return trim(addslashes($string));
    } elseif (is_array($string)) {
      reset($string);
      while (list($key, $value) = each($string)) {
        $string[$key] = TrimAddSlashes($value);
      }
      return $string;
    } else {
      return $string;
    }
  }

  function TrimStripSlashes($string){
	if (is_string($string)) {
      if(get_magic_quotes_gpc())
		return trim($string);
	  else
		return trim(stripslashes($string));
    } elseif (is_array($string)) {
      reset($string);
      while (list($key, $value) = each($string)) {
        $string[$key] = TrimStripSlashes($value);
      }
      return $string;
    } else {
      return $string;
    }
  }

  function EscapeInj($String){
	global $ObjMysqlFns;

	if(function_exists(mysql_real_escape_string)){
	  if(get_magic_quotes_gpc())
		$String = mysql_real_escape_string(stripslashes($String), $ObjMysqlFns->ConLink);
	  else
	    $String = mysql_real_escape_string($String, $ObjMysqlFns->ConLink);
	}
	elseif(function_exists(mysql_escape_string)){
	  if(get_magic_quotes_gpc())
		$String = mysql_escape_string(stripslashes($String));
	  else
		$String = mysql_escape_string($String);
	}
	return $String;
  }
  
  function FnsReadFile($filePath){
    if(file_exists($filePath)){
	  $fileContRes=fopen($filePath,'r');
	  $fileCont=fread($fileContRes,filesize($filePath));
	  fclose($fileContRes);
	  unset($filePath);
	  return $fileCont;
	}
  }

  foreach($config as $key=>$value)
	$objSmarty->assign("gl_".$key,$value);

  $userAgent=strtoupper($_SERVER['HTTP_USER_AGENT']);
	
  if(strstr($userAgent,'FIREFOX')!="")
	$objSmarty->assign('userAgent','firefox');
  elseif(strpos($userAgent,'MSIE 6.0') || (strpos($userAgent,'MSIE 5.5'))){
	$objSmarty->assign('userAgent','msie');
  } elseif(strpos($userAgent,'SAFARI'))
	$objSmarty->assign('userAgent','safari');
  else
	$objSmarty->assign('userAgent','other');
	
	
  if(strpos($userAgent,'MSIE')){
	$objSmarty->assign('block','block');
	$block='block';
  } else{
	$objSmarty->assign('block','table-row');
	$objSmarty->assign('blocktable','table');
	$block='table-row';
	$blocktable='table';
  }
  
 
?>