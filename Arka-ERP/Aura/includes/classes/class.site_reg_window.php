<?php
#####Class For Adding Content Management ######
class site_reg_window extends MysqlFns{
 
 /* class constructor */
 function site_reg_window(){
 $this->LDDisplayPath= $config['SiteGlobalPath']."class.site_reg_window.php";
  global $config;
  global $objSmarty;
  $this->MysqlFns();
  $this->Limit = 20;
   $this->Keyword = '';
  $this->Operator = '';
  $this->PerPage = '';
}
 
 
 /* Get the Static Content list */
 function GetCLists($objArray='')  {
  global $objSmarty;

  //$objSmarty->assign('title',$_GET['title']);
  $whereClause = ' order by customer_id';
   if($_POST['search'] == ''){
  			if($_POST['customer_name'])
	   			$whereClause = ' WHERE (`customer_name` like "%'.$_POST['customer_name'].'%")';
   			elseif($_POST['customer_id'])
	   			$whereClause = ' WHERE (`customer_id` like "%'.$_POST['customer_id'].'%")';
			
			$objSmarty->assign('CName',$_POST['customer_name']);
     
  }
   $SelQuery		= 'SELECT * FROM `arka_cus_reg_master` where record_status="1"'.$whereClause;
  $listing_split = new MsplitPageResults($SelQuery, $this->Limit);
  if ( ($listing_split->number_of_rows > 0) )  {
   $objSmarty->assign('LinkPage',$listing_split->display_count(TEXT_DISPLAY_NUMBER_OF_RESULT));
   $objSmarty->assign('PerPageNavigation',TEXT_RESULT_PAGE1 . ' ' . $listing_split->display_links($this->Limit, get_all_get_params(array('page', 'info', 'x', 'y')))); 
   $PageList = $this->ExecuteQuery($listing_split->sql_query, 'selectassoc');
  }
 /* if(!empty($PageList) && is_array($PageList))

   foreach($PageList as $key=>$value){
    $PageList[$key]['CName'] = stripslashes($PageList[$key]['State_Name']);
   }
*/
  $objSmarty->assign('i', $listing_split->i);
  $objSmarty->assign('PageList', $PageList);
  return $PageList;
 
}
 
}

?>


