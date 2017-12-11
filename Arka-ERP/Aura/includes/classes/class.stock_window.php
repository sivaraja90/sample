<?php
#####Class For Adding Content Management ######
class stock_window extends MysqlFns{
 
 /* class constructor */
 function stock_window(){
 $this->LDDisplayPath= $config['SiteGlobalPath']."class.stock_window.php";
  global $config;
  global $objSmarty;
  $this->MysqlFns();
  $this->Limit = 20;
   $this->Keyword = '';
  $this->Operator = '';
  $this->PerPage = '';
}
 
 
 /* Get the Static Content list */
 function GetSLists($objArray='')  {
  global $objSmarty;

  //$objSmarty->assign('title',$_GET['title']);
  $whereClause = ' order by material_name';
   if($_POST['search'] == ''){
  			if($_POST['material_name'])
	   			$whereClause = ' WHERE (`material_name` like "%'.$_POST['material_name'].'%")';
   			elseif($_POST['material_code'])
	   			$whereClause = ' WHERE (`material_code` like "%'.$_POST['material_code'].'%")';
			elseif($_POST['material_type'])
	   			$whereClause = ' WHERE (`material_type` like "%'.$_POST['material_type'].'%")';
			elseif($_POST['material_category'])
	   			$whereClause = ' WHERE (`material_category` like "%'.$_POST['material_category'].'%")';
			elseif($_POST['quantity'])
	   			$whereClause = ' WHERE (`quantity` like "%'.$_POST['availableQuantity'].'%")';
			elseif($_POST['unit_price'])
	   			$whereClause = ' WHERE (`unit_price` like "%'.$_POST['materialPrice'].'%")';			
			$objSmarty->assign('MName',$_POST['material_name']);
     
  }
   $SelQuery		= 'SELECT * FROM `universal_stock_master` '.$whereClause;
  $listing_split = new MsplitPageResults($SelQuery, $this->Limit);
  if ( ($listing_split->number_of_rows > 0) )  {
   $objSmarty->assign('LinkPage',$listing_split->display_count(TEXT_DISPLAY_NUMBER_OF_RESULT));
   $objSmarty->assign('PerPageNavigation',TEXT_RESULT_PAGE1 . ' ' . $listing_split->display_links($this->Limit, get_all_get_params(array('page', 'info', 'x', 'y')))); 
   $PageList2 = $this->ExecuteQuery($listing_split->sql_query, 'selectassoc');
  }
 /* if(!empty($PageList) && is_array($PageList))

   foreach($PageList as $key=>$value){
    $PageList[$key]['CName'] = stripslashes($PageList[$key]['State_Name']);
   }
*/
  $objSmarty->assign('i', $listing_split->i);
  $objSmarty->assign('PageList2', $PageList2);
  return $PageList2;
 
}
 
}

?>


