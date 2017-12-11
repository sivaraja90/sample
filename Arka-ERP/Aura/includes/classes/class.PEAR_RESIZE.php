<?

  class PEARImageResize extends MysqlFns {

	function PEARImageResize($ImagePath, $ThumbPath, $Size){
	 // if(is_dir('E:/wamp/php/PEAR/'))//local
	  //ini_set('include_path','E:/wamp/php/PEAR/');//local
	  if(is_dir($_SERVER['DOCUMENT_ROOT'].'/PEAR/'))//server
	  ini_set('include_path','.;'.$_SERVER['DOCUMENT_ROOT'].'/PEAR/');//server
	  require_once 'Image/Transform.php';
	  global $objSmarty;

	  //create transform driver object
	  $it = Image_Transform::factory('GD');
	  if (PEAR::isError($it)) {
	    //$error[] = $it->getMessage();
		$errmsg = ErrorMessage($error,'400');
		$objSmarty->assign('errmsg', $errmsg);
		return false;
	  }
	  //load the original file

	  $ret = $it->load($ImagePath);
	  if (PEAR::isError($ret)) {
    	//$error[] = $it->getMessage();
		//echo $ImagePath;
		$errmsg = ErrorMessage($error,'400');
		$objSmarty->assign('errmsg', $errmsg);
		return false;
	  }

//scale it to $Size px
	  $ret = $it->scaleByLength($Size);
	  if (PEAR::isError($ret)) {
		$error[] = $it->getMessage();
		$errmsg = ErrorMessage($error,'400');
		$objSmarty->assign('errmsg', $errmsg);
		return false;
	  }

//save it into a different file
	  $ret = $it->save($ThumbPath);
	  if (PEAR::isError($ret)) {
		$error[] = $it->getMessage();
		$errmsg = ErrorMessage($error,'400');
		$objSmarty->assign('errmsg', $errmsg);
		return false;
	  }

	}
	
//$this->PEARImageResize($DesFdr.DS.$ObjUpload->filename, $DesFdr.DS.'S_'.$ObjUpload->filename, 150);
	}
?>