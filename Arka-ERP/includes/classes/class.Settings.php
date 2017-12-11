<?
#####Class For Adding Content Management ######
		

class Settings extends MysqlFns{
 
 /* class constructor */
  function Settings(){
	global $config;
	$this->MysqlFns();
	$this->Limit = 20;
  }
######################################################Retrive  Notification Settings ##########################################
  function Get_member_all_notifications()
  {
  global $objSmarty;
		$selectQry_evt_cat = 'SELECT * FROM `tbl_event_categories_mail_notifications` WHERE `notifier_id` = "' .EscapeInj($_SESSION['member_id']).'"';
		$ResQry_evt_cat	= $this->ExecuteQuery($selectQry_evt_cat, "selectassoc");
			/*----------------------------------------------------------------------------------------------------------------------*/
		
		$selectQry_plan_not = 'SELECT * FROM `tbl_plan_notifications` WHERE `notifier_id` = "' .EscapeInj($_SESSION['member_id']).'"';
		$ResQry_plan_not	= $this->ExecuteQuery($selectQry_plan_not, "selectassoc");

/*----------------------------------------------------------------------------------------------------------------------*/	
	
		$selectQry_profile_not = 'SELECT * FROM `tbl_profile_notification` WHERE `notifier_id` = "' .EscapeInj($_SESSION['member_id']).'"';
		$ResQry_profile_not	= $this->ExecuteQuery($selectQry_profile_not, "selectassoc");
		
/*----------------------------------------------------------------------------------------------------------------------*/	
		
		$selectQry_site_not = 'SELECT * FROM `tbl_site_notifications` WHERE `notifier_id` = "' .EscapeInj($_SESSION['member_id']).'"';
		$ResQry_site_not	= $this->ExecuteQuery($selectQry_site_not, "selectassoc");
		
/*----------------------------------------------------------------------------------------------------------------------*/	
		$selectQry_message_format = 'SELECT * FROM `tbl_message_formatting` WHERE `notifier_id` = "' .EscapeInj($_SESSION['member_id']).'"';
		$ResQry_message_format	= $this->ExecuteQuery($selectQry_message_format, "selectassoc");
		
/*----------------------------------------------------------------------------------------------------------------------*/	
		$Result  =  array_merge($ResQry_evt_cat, $ResQry_plan_not, $ResQry_profile_not, $ResQry_site_not, $ResQry_message_format);
		$objSmarty->assign('Result', $Result);

		//$d = $c[0]['event_categories_mail_notifications_id'];
  }
  
 ###################################################### Update Notification Settings ##########################################
  
  function update_notifications_settings()
  {
  	  global $objSmarty;
	/*----------------------------------------------------------------------------------------------------------------------*/		
	        $UpdateQry_evt_cat = 'UPDATE `tbl_event_categories_mail_notifications` SET 

            `Animals_Pets` = "' .EscapeInj($_REQUEST['Animals_Pets']).'",
            `Art_Antiques_Crafts` = "' .EscapeInj($_REQUEST['Art_Antiques_Crafts']).'",
            `Museums_Zooms_Attracing` = "' .EscapeInj($_REQUEST['Museums_Zooms_Attracing']).'",
            `Books_Poetry_Literature` = "' .EscapeInj($_REQUEST['Books_Poetry_Literature']).'",
            `Business_Finance_Investing` = "' .EscapeInj($_REQUEST['Business_Finance_Investing']).'",
            `Community_Neighborhood` = "' .EscapeInj($_REQUEST['Community_Neighborhood']).'",
            `Conferences_Conventions` = "' .EscapeInj($_REQUEST['Conferences_Conventions']).'",
            `Charities_Fundraisers` = "' .EscapeInj($_REQUEST['Charities_Fundraisers']).'",
            `Family_Fun_Kids` = "' .EscapeInj($_REQUEST['Family_Fun_Kids']).'",
            `Food_Cuisine_Wine` = "' .EscapeInj($_REQUEST['Food_Cuisine_Wine']).'",
            `Festivals_Fairs_Parades` = "' .EscapeInj($_REQUEST['Festivals_Fairs_Parades']).'",
            `Music_Concerts` = "' .EscapeInj($_REQUEST['Music_Concerts']).'"
		
		WHERE `notifier_id` = "' .EscapeInj($_SESSION['member_id']).'"';
		$ResQry_evt_cat	= $this->ExecuteQuery($UpdateQry_evt_cat, "update");
		
	/*----------------------------------------------------------------------------------------------------------------------*/	
		
		$UpdateQry_plan_not = 'UPDATE `tbl_plan_notifications` SET 
			`individual_mail_updates_rsvps`	= "' .EscapeInj($_REQUEST['individual_mail_updates_rsvps']).'",
            `individual_mail_updates_sign_unsigns_up`= "' .EscapeInj($_REQUEST['individual_mail_updates_sign_unsigns_up']).'",
            `daily_updates_digest_rsvps`= "' .EscapeInj($_REQUEST['daily_updates_digest_rsvps']).'",
            `individual_email_updates_plans_comments_add`= "' .EscapeInj($_REQUEST['individual_email_updates_plans_comments_add']).'",
            `daily_digest_comments_added_plan`= "' .EscapeInj($_REQUEST['daily_digest_comments_added_plan']).'",
            `remainder_before_attending_anytask_time_place_tasks_signedup`= "' .EscapeInj($_REQUEST['remainder_before_attending_anytask_time_place_tasks_signedup']).'",
            `email_toknow_assigned_unassigned_unassigned_task`= "' .EscapeInj($_REQUEST['email_toknow_assigned_unassigned_unassigned_task']).'",
            `individual_email_updates_adds_comments_to_plan`= "' .EscapeInj($_REQUEST['individual_email_updates_adds_comments_to_plan']).'",
            `daily_digest_with_comments_added_toplan`= "' .EscapeInj($_REQUEST['daily_digest_with_comments_added_toplan']).'"
		
		WHERE `notifier_id` = "' .EscapeInj($_SESSION['member_id']).'"';
		$ResQry_plan_not	= $this->ExecuteQuery($UpdateQry_plan_not, "update");
		
		/*----------------------------------------------------------------------------------------------------------------------*/
			
		$UpdateQry_profile_not = 'UPDATE `tbl_profile_notification` SET

            `send_email_sends_connection_request` = "' .EscapeInj($_REQUEST['send_email_sends_connection_request']).'",
            `send_email_confirms_connection` ="' .EscapeInj($_REQUEST['send_email_confirms_connection']).'",
            `send_email_accepts_invitation_joins_center` ="' .EscapeInj($_REQUEST['send_email_accepts_invitation_joins_center']).'",
            `send_email_message_via_site` = "' .EscapeInj($_REQUEST['send_email_message_via_site']).'" 
		
		WHERE `notifier_id` = "' .EscapeInj($_SESSION['member_id']).'"';
		$ResQry_profile_not	= $this->ExecuteQuery($UpdateQry_profile_not, "update");
		
		/*----------------------------------------------------------------------------------------------------------------------*/	
		
		$UpdateQry_site_not = 'UPDATE `tbl_site_notifications` SET 
            `info_abt_pro_features_plan_tips` = "' .EscapeInj($_REQUEST['info_abt_pro_features_plan_tips']).'",
            `send_invitations_participate_research_studies` = "' .EscapeInj($_REQUEST['send_invitations_participate_research_studies']).'",
            `send_tokens_appreciations_mail_deserving` = "' .EscapeInj($_REQUEST['send_tokens_appreciations_mail_deserving']).'",
            `send_weekly_listings_event` = "' .EscapeInj($_REQUEST['send_weekly_listings_event']).'"
			
		WHERE `notifier_id` = "' .EscapeInj($_SESSION['member_id']).'"';
		$ResQry_site_not	= $this->ExecuteQuery($UpdateQry_site_not, "update");
		
      /*----------------------------------------------------------------------------------------------------------------------*/
	  	
		     $UpdateQry_evt_cat = 'UPDATE `tbl_message_formatting` SET `mails_in_html_format_or_plain_text` = "' .EscapeInj($_REQUEST['mails_in_html_format_or_plain_text']).'" 
			
		      WHERE `notifier_id` =  "' .EscapeInj($_SESSION['member_id']).'"';
		     $ResQry_evt_cat	= $this->ExecuteQuery($UpdateQry_evt_cat, "update");
			 
      /*----------------------------------------------------------------------------------------------------------------------*/	
            
	}
  ################################################################################################################################# 
}
?>