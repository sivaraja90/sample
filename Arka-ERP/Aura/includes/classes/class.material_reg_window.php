<?php
#####Class For Adding Content Management ######
class material_reg_window extends MysqlFns{
 
 /* class constructor */
 function material_reg_window(){
 $this->LDDisplayPath= $config['SiteGlobalPath']."class.material_reg_window.php";
  global $config;
  global $objSmarty;
  $this->MysqlFns();
  $this->Limit = 10;
   $this->Keyword = '';
  $this->Operator = '';
  $this->PerPage = '';
}
 
 
 /* Get the Static Content list */
 function GetmaterialLists($objArray='')  {
  global $objSmarty;

  //$objSmarty->assign('title',$_GET['title']);
  $whereClause = '';
   if($_POST['search'] == ''){
  			if($_POST['item_name'])
	   			$whereClause = ' WHERE (`item_name` like "%'.$_POST['item_name'].'%")';
   			elseif($_POST['item_code'])	
                $whereClause = ' WHERE (`item_code` like "%'.$_POST['item_code'].'%")';
			elseif($_POST['item_category'])	
                $whereClause = ' WHERE (`item_category` like "%'.$_POST['item_category'].'%")';
			elseif($_POST['item_category_code'])	
                $whereClause = ' WHERE (`item_category_code` like "%'.$_POST['item_category_code'].'%")';
			elseif($_POST['item_description'])	
                $whereClause = ' WHERE (`item_description` like "%'.$_POST['item_description'].'%")';			
  }
   $SelQuery		= 'SELECT * FROM `arka_product_master`'.$whereClause;
  $listing_split = new MsplitPageResults($SelQuery, $this->Limit);
  if ( ($listing_split->number_of_rows > 0) )  {
   $objSmarty->assign('LinkPage',$listing_split->display_count(TEXT_DISPLAY_NUMBER_OF_RESULT));
   $objSmarty->assign('PerPageNavigation',TEXT_RESULT_PAGE1 . ' ' . $listing_split->display_links($this->Limit, get_all_get_params(array('page', 'info', 'x', 'y')))); 
   $PageList = $this->ExecuteQuery($listing_split->sql_query, 'selectassoc');
  }
  /*if(!empty($PageList) && is_array($PageList))

   foreach($PageList as $key=>$value){
    $PageList[$key]['SName'] = stripslashes($PageList[$key]['State_Name']);
   }*/

  $objSmarty->assign('i', $listing_split->i);
  $objSmarty->assign('PageList', $PageList);
  return $PageList;
 
}
 
}

?>


