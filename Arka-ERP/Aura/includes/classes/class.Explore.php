<?
#####Class For Adding Content Management ######
		

class Explore extends MysqlFns{
 
 /* class constructor */
  function Explore(){
	global $config;
	$this->MysqlFns();
	$this->Limit = 5;
  }
  
############################################# Get All event Categories ######################################################
  function Get_all_event_categories()
  {
  		global $objSmarty;
		$selectQry_evt_subcat1  = 'SELECT * FROM `tbl_events_category` WHERE `category_id` = "1"';
		$event_categories_primary 	= $this->ExecuteQuery($selectQry_evt_subcat1, "selectassoc");
		$objSmarty->assign('event_categories_primary', $event_categories_primary);
		
		$selectQry_evt_subcat2  = 'SELECT * FROM `tbl_events_category` WHERE `category_id` = "2"';
		$event_categories_secondary 	= $this->ExecuteQuery($selectQry_evt_subcat2, "selectassoc");
		$objSmarty->assign('event_categories_secondary', $event_categories_secondary);
  }
##############################################################################################################################
 function Selected_Explore_Categories()
  {
  	    global $objSmarty;
		
		$WHERECLAUSE = ' WHERE `draft` != "1"';
		
		if(!empty($_REQUEST["location"]))
		{
			$WHERECLAUSE .= ' AND `events_where` LIKE "%'.EscapeInj($_REQUEST["location"]).'%"';
		}
		if(!empty($_REQUEST["primary_event_category"]) || !empty($_REQUEST["secondary_event_category"]))
		{
			$WHERECLAUSE .= ' AND(';
			if(!empty($_REQUEST["primary_event_category"]))
			{
				$count_pri = count($_REQUEST["primary_event_category"]);
				for($i=0; $i<$count_pri; $i++)
				{
					if($i == 0)
					{
					$WHERECLAUSE .= ' `events_primary_cat` = "'.EscapeInj($_REQUEST["primary_event_category"][$i]).'"';
					}
					else
					{
					$WHERECLAUSE .= ' OR `events_primary_cat` = "'.EscapeInj($_REQUEST["primary_event_category"][$i]).'"';
					}
				}
				   if(empty($_REQUEST["secondary_event_category"]))
					{
						$WHERECLAUSE .= ')';
					}
				
			}
			
			
			if(!empty($_REQUEST["secondary_event_category"]))
			{
				$count_sec = count($_REQUEST["secondary_event_category"]);
				for($j=0; $j<$count_sec; $j++)
				{
					if(empty($_REQUEST["primary_event_category"]) && $j==0)
					{
					$WHERECLAUSE .= ' `events_secondary_cat` = "'.EscapeInj($_REQUEST["secondary_event_category"][$j]).'"';
					}
					else
					{
					$WHERECLAUSE .= ' OR `events_secondary_cat` = "'.EscapeInj($_REQUEST["secondary_event_category"][$j]).'"';
					}
				}
				if(empty($_REQUEST["primary_event_category"]))
				{
					$WHERECLAUSE .= ')';
				}
			}
			
			if(!empty($_REQUEST["primary_event_category"]) && !empty($_REQUEST["secondary_event_category"]))
			{
				$WHERECLAUSE .= ')';
			}
			
			
		}
		if(!empty($_REQUEST["cal_dt"]))
		{
				$date_form = $_REQUEST["cal_dt"];
				list($month1, $day1, $year) = split("/", $date_form);
				if($day1 <= 9){$str = strlen($day1);if($str == 2){$day = $day1;}else{$day = '0'.$day1;}}else{$day = $day1;}
				if($month1 <= 9){$str1 = strlen($month1);if($str1 == 2){$month = $month1;}else{$month = '0'.$month1;}}else{$month = $month1;}
				$d1 = $year.'-'.$month.'-'.$day;
			$WHERECLAUSE .= ' AND `events_start_date` = "'.EscapeInj($d1).'"';
		}
		if(!empty($_REQUEST["keyword_filter"]))
		{
			$WHERECLAUSE .= ' AND (`events_title` = "'.EscapeInj($_REQUEST["keyword_filter"]).'" OR `events_tag` LIKE "%'.EscapeInj($_REQUEST["keyword_filter"]).'%")';
		}
		//echo $WHERECLAUSE;
		$selectQry_evt_display  	= 'SELECT * FROM `tbl_events` '.$WHERECLAUSE.'';
		$listing_split = new MsplitPageResults($selectQry_evt_display, $this->Limit);

	  if(($listing_split->number_of_rows > 0))  {
	    $objSmarty->assign("LinkPage",$listing_split->display_count(TEXT_DISPLAY_NUMBER_OF_RESULT));
		$objSmarty->assign("PerPageNavigation",TEXT_RESULT_PAGE1 . ' ' . $listing_split->display_links($this->Limit, get_all_get_params(array('page', 'info', 'x', 'y')))); 
		$event_display	= $this->ExecuteQuery($listing_split->sql_query, "selectassoc");
		$objSmarty->assign("event_display",$event_display);
		$objSmarty->assign('i', $listing_split->i);
		}
  }
}
?>