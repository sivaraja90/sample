<?php 
	require_once "./includes/common.php";
	require_once $config['SiteClassPath']."class.Staff.php";
	require_once $config['SiteClassPath']."class.login.php";
	require_once $config['SiteClassPath']."class.split_page_results.php";
	
	$objStaff	= new Staff();
	$objStaff->RolesLists($objArray);
	if(!isset($_SESSION['username'])){ 			
	  if($objStaff->chkStaffLogin($_POST))
	  		if($_SESSION['USER_GROUP'] =='MD')
	  	  			Redirect("dashBoard.php");
			elseif($_SESSION['USER_GROUP'] =='Admin')
	  	  			Redirect("dashboard.php");
			elseif($_SESSION['USER_GROUP'] =='Developement' || $_SESSION['USER_GROUP'] =='Testing' || $_SESSION['USER_GROUP'] =='Support')
	  	  			Redirect("dashBoard3.php");
			elseif($_SESSION['USER_GROUP'] =='Customer_Owner')
	  	  			Redirect("dashBoard4.php");
			elseif($_SESSION['USER_GROUP'] =='Customer_Admin')
	  	  			Redirect("dashBoard4.php");
			elseif($_SESSION['USER_GROUP'] =='Customer_User')
	  	  			Redirect("dashBoard4.php");	
			elseif($_SESSION['USER_GROUP'] =='demo')
	  	  			Redirect("dashBoard_demo.php?this=1001");	
		    elseif($_SESSION['USER_GROUP'] =='RRPL MD Group')
	  	  			Redirect("dashBoard4.php");	
			elseif($_SESSION['USER_GROUP'] =='RRPL Admin Group')
	  	  			Redirect("dashBoard4.php");	
			elseif($_SESSION['USER_GROUP'] =='RRPL Site Incharge Group')
	  	  			Redirect("dashBoard4.php");	
			elseif($_SESSION['USER_GROUP'] =='RRPL Site Operators Group')
	  	  			Redirect("dashBoard4.php");	
					
							
					
	}
	else
	{
	  Redirect("./index.php");
	}
	
	 $objSmarty->assign('IncludeCSS',
			                    '<link rel="stylesheet" href="' . $config['SiteGlobalPath'] . 'css/bootstrap.min.css" type="text/css" media="all"/>'. "\n" .
								'<link rel="stylesheet" href="' . $config['SiteGlobalPath'] . 'css/bootstrap.css" type="text/css" media="all"/>'. "\n" .
								'<link rel="stylesheet" href="' . $config['SiteGlobalPath'] . 'css/style.min.css" type="text/css" media="all"/>'. "\n" .
			                    '<link rel="stylesheet" href="' . $config['SiteGlobalPath'] . 'font-awesome/css/font-awesome.css" type="text/css" media="all"/>'. "\n" .
			                    '<link rel="stylesheet" href="' . $config['SiteGlobalPath'] . 'css/plugins/iCheck/custom.css" type="text/css" media="all"/>'. "\n" .
								'<link rel="stylesheet" href="' . $config['SiteGlobalPath'] . 'css/animate.css" type="text/css" media="all"/>'. "\n" .
								'<link rel="stylesheet" href="' . $config['SiteGlobalPath'] . 'css/style.css" type="text/css" media="print"/>' ); 
			
     $objSmarty->assign('IncludeJS','<script src="' . $config['SiteGlobalPath'] . 'js/jquery-2.1.1.js"  type="text/javascript"></script>'. "\n" . 
                               		'<script src="' . $config['SiteGlobalPath'] . 'js/bootstrap.min.js"  type="text/javascript"></script>' );
							   
							   
	//$Onload="document.login.txtuname.focus();";
	//$objSmarty->assign("Onload", $Onload);
	$objSmarty->display("./index.tpl");
		
	
		
?>
