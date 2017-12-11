<?php
//-------------------------------------------------------------------------------------------------------------------
 // file name   : class.InviteFriends.php
 // description : class to handle Invite Frineds Through Mail
 //
 // copyright(c), G-antssoft.com, 2006-2007, all rights reserved.
 //
 // author: G-antssoft.com infoway
 // last update: 02-12-2006
 //
 //
//-------------------------------------------------------------------------------------------------------------------

  class InviteFriends extends MysqlFns
  {
  	 function InviteFriends()
        {
        global $config;
        $this->MysqlFns();
		$this->Offset			= 0;
		$this->Limit			= 5;
		$this->Sort			    = 'ASC';
        }
	
	
	function  Signature()
	{
		global $objSmarty, $objPage;
		if(!empty($_SESSION['member_id'])){
		$SelQuery		= "Select first_name,email_address from ".tbl_members." where member_id='".$_SESSION['member_id']."'";	
		$Res_Members_Sig	= $this->ExecuteQuery($SelQuery, "select");
		$objSmarty->assign("Signature", $Res_Members_Sig[0]['first_name']);
		$objSmarty->assign('e_adress', $Res_Members_Sig[0]['email_address']);	
		$objSmarty->assign('in_date',  date("M d, Y"));			
		return true;
		}
	}
	
	function Insert_addressbookmail($Arr_mail)
	{
		global $objSmarty, $objPage;
		
		if(!empty($Arr_mail)){		
			
			if($_REQUEST['schedule_mode']=='now'){
				$date = getdate();		
				$currdate=date("Y/m/d/H/i/s", mktime($date[hours], $date[minutes], $date[seconds], $date[mon], $date[mday], $date[year]));
				$spldate= explode("/",$currdate);
				$edate=$spldate[1].'/'.$spldate[2].'/'.$spldate[0];
				$ehh=$spldate[3];
				$emm=$spldate[4];
				$ampm='';
				$status=1; 
			}
			elseif($_REQUEST['schedule_mode']=='on'){
				$edate=$_REQUEST['schedule_date'];
				$ehh=$_REQUEST['endhr'];
				$emm=$_REQUEST['endmin'];
				$ampm=$_REQUEST['endampm'];
				$status=0;
			 }
			elseif($_REQUEST['schedule_mode']=='days'){
				$date = getdate();		
				$currdate=date("Y/m/d/H/i/s", mktime($date[hours], $date[minutes], $date[seconds], $date[mon], $date[mday]+$_REQUEST['sendemaildays'], $date[year]));
				$spldate= explode("/",$currdate);
				$edate=$spldate[1].'/'.$spldate[2].'/'.$spldate[0];
				$ehh=$spldate[3];
				$emm=$spldate[4];
				$ampm='';			
				$status=0;
			 }
			 $email_arr = explode(",",$Arr_mail);
			
			 foreach($email_arr as $value){
			
				if(!empty($_SESSION['member_id'])){
				
					$SelQuery= "Select * from `tbl_import_contactus` where `email`='".$value."'";	
					$Chk= $this->ExecuteQuery($SelQuery, "select");
					if(count($Chk)==0)
					{
					$InsQuery	= "INSERT INTO `tbl_import_contactus` 
					(`member_id` ,`email`,`sender` ,`reply_email` ,`email_subject` ,`email_msg` ,`date` ,`hh` ,`mm` ,`ampm`,`status` )
					 VALUES (".$_SESSION['member_id'].", '".$value."','".addslashes($_REQUEST['from_name'])."', '".addslashes($_REQUEST['from_email'])."', '".addslashes($_REQUEST['subject'])."','".addslashes($_REQUEST['custom_message'])."', '".$edate."',
					  '".$ehh."','".$emm."','".$ampm."','".$status."');";	
					  
					$this->ExecuteQuery($InsQuery, "update");	
					}
				}		
			}
		}		
	}
	
	function Validate_email($email_arr)
	{
			
		foreach($email_arr as $value)//Checking fot the email validation
		{
									
				if($value=="")
				continue;
				if (!ereg('^([a-zA-Z0-9])+([\.a-zA-Z0-9_-])*@([a-zA-Z0-9_-])+(\.[a-zA-Z0-9_-]+)*\.([a-zA-Z]{2,6})$',$value))
						{
							return false;
							
						}
							}		
			/**/		
					return true;		
		}		
		
  }
?>
