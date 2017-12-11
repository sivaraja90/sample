<?php
 class Upload extends MysqlFns
	{
	var $file, $filename, $destination, $permissions, $extensions, $tmp_filename, $message_location, $error = array();
	
		function Upload($file = '', $destination = '', $permissions = 0777, $extensions = '') 
		{
		  
			  $this->set_file($file);
			  $this->set_destination($destination);
			  $this->set_permissions($permissions);
			  $this->set_extensions($extensions);
			  $this->MysqlFns();
			  if (not_null($this->file) && not_null($this->destination)) 
			  {		
			  		if( $this->ChkImageSize() ) 
					{
						if ( ($this->parse() == true) && ($this->save() == true)) 
						{
						  return true;
						} 
						else 
						{
						  return false;
						}
					}
			  }
		}
	
		function parse() 
		{
		
			  if (isset($_FILES[$this->file])) 
			  {
				$file = array('name' => $_FILES[$this->file]['name'],
							  'type' => $_FILES[$this->file]['type'],
							  'size' => $_FILES[$this->file]['size'],
							  'tmp_name' => $_FILES[$this->file]['tmp_name']);
			  } 
			  elseif (isset($GLOBALS['HTTP_POST_FILES'][$this->file])) 
			  {
				global $HTTP_POST_FILES;
		
				$file = array('name' => $HTTP_POST_FILES[$this->file]['name'],
							  'type' => $HTTP_POST_FILES[$this->file]['type'],
							  'size' => $HTTP_POST_FILES[$this->file]['size'],
							  'tmp_name' => $HTTP_POST_FILES[$this->file]['tmp_name']);
			  } 
			  else 
			  {
				$file = array('name' => (isset($GLOBALS[$this->file . '_name']) ? $GLOBALS[$this->file . '_name'] : ''),
							  'type' => (isset($GLOBALS[$this->file . '_type']) ? $GLOBALS[$this->file . '_type'] : ''),
							  'size' => (isset($GLOBALS[$this->file . '_size']) ? $GLOBALS[$this->file . '_size'] : ''),
							  'tmp_name' => (isset($GLOBALS[$this->file]) ? $GLOBALS[$this->file] : ''));
			  }
			  
			  if ( not_null($file['tmp_name']) && ($file['tmp_name'] != 'none') && is_uploaded_file($file['tmp_name']) ) 
			  {
					if (sizeof($this->extensions) > 0) 
					{
						  if (!in_array(strtolower(substr($file['name'], strrpos($file['name'], '.')+1)), $this->extensions)) 
						  {
							$this->error[]='File type not allowed';
							/*ERROR_FILETYPE_NOT_ALLOWED*/
							return false;
						  }
					 }
				$this->set_file($file);
				$this->set_filename($file['name']);
				$this->set_tmp_filename($file['tmp_name']);
				return $this->check_destination();
			  } 
				$this->error[]='No file uploaded';
				/*WARNING_NO_FILE_UPLOADED*/
				return false;
		}
		  
	  function filename()
	  {
	  	global $config;
		return $this->filename;
		
	  }
	  
	  function save() 
	  {
	     
	  		global $config;
			if (substr($this->destination, -1) != '/') $this->destination .= '/';
			
				  if (move_uploaded_file($this->file['tmp_name'], $this->destination . $this->filename)) 
				  {
					chmod($this->destination . $this->filename, $this->permissions);
					
					
					
				  } 
				  else 
				  {
					/*ERROR_FILE_NOT_SAVED*/
					//echo "ERROR_FILE_NOT_SAVED";
					//return '';
				  }
			  
	 }
	 
	function set_file($file) 
	{		
		 $this->file = $file;
	}
	
	function set_destination($destination) 
	{
		 $this->destination = $destination;
	}
	
	function set_permissions($permissions) 
	{
		 $this->permissions = octdec($permissions);
	}
	function get_filetype($filename)
	{
		$img_type = substr(strrchr($filename, "."), 1); 
		return $img_type;
	}
	function set_filename($filename) 
	{
		 $img_type = $this->get_filetype($filename);
		 $this->filename = md5(rand() * time()) . ".$img_type";
	}
	
	function set_tmp_filename($filename) 
	{
		$this->tmp_filename = $filename;
	}
	
	function set_extensions($extensions) 
	{
			  if (not_null($extensions)) 
			  {
					if (is_array($extensions)) 
					{
					  $this->extensions = $extensions;
					} 
					else 
					{
					  $this->extensions = array($extensions);
					}
			  } 
			  else 
			  {
				$this->extensions = array();
			  }
	
	}
	
	
	function check_destination() 
	{
		  if (!is_writeable($this->destination)) 
		  {
				if (is_dir($this->destination)) 
				{		
				/*ERROR_DESTINATION_NOT_WRITEABLE*/
				$this->error[]='Destination is not writable';
				} 
				else 
				{	 
				/*ERROR_DESTINATION_DOES_NOT_EXIST*/
				$this->error[]='Destination does not exists';
				}
				return false;
		   } 
			else 
			{
				return true;
			}
	
	}
	
		function ChkImageSize()
		{	
				if($_FILES[$this->file]['size'] > 60000000 )
				{
				return false;
				}
				else
				{
				return true;
				}
		}
		
	} //end of class
?>