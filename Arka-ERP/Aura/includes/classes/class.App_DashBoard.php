<?php
#####Class For Adding Content Management ######
class App_DashBoard extends MysqlFns{
 
 /* class constructor */
 function App_DashBoard(){
 $this->LDDisplayPath= $config['SiteGlobalPath']."class.App_DashBoard.php";
  global $config;
  global $objSmarty;
  $this->MysqlFns();
  $this->Limit = 20;
 }
 
  //**************************************************************************************************************************************************************
function GetAnnual(){
  global $objSmarty;
  	
	$GetQuery = "DELETE FROM vestas_prod_active_total WHERE TOTAL REGEXP '^[[:digit:]]{9}'";
	$PageList		= $this->ExecuteQuery($GetQuery, "delete");
	//echo CUS1002;
	$GetQuery1 = "SELECT DATE(M_TIMESTAMP) AS PASSDATE FROM vestas_prod_active_total WHERE YEAR(M_TIMESTAMP) = YEAR(CURDATE()) GROUP BY DATE(M_TIMESTAMP)";
	$DateList		= $this->ExecuteQuery($GetQuery1, "select");
	if(!empty($DateList) && is_array($DateList))
	foreach($DateList as $datekey=>$value){
 	$DateList[$datekey]['PASSDATE'] = stripslashes($DateList[$datekey]['PASSDATE']);
		$GetQuerys1 = "SELECT turbine_id FROM arka_turbine_reg_master WHERE customer_id = '".CUS1002."'";
		$TurbineList		= $this->ExecuteQuery($GetQuerys1, "select");
		
			if(!empty($TurbineList) && is_array($TurbineList))
				foreach($TurbineList as $tkey=>$value){
					$TurbineList[$tkey]['Tid']	 = stripslashes($TurbineList[$tkey]['turbine_id']);			
				
   	$GetQuery2 =  "SELECT (B.bigValue-A.smallValue) as totalValue FROM (SELECT total as smallValue FROM  `vestas_prod_active_total` WHERE MACHINE_ID='".$TurbineList[$tkey]['Tid']."' AND M_TIMESTAMP > '".$DateList[$datekey]['PASSDATE']."' AND M_TIMESTAMP < DATE_ADD('".$DateList[$datekey]['PASSDATE']."', INTERVAL 1 DAY ) ORDER BY M_TIMESTAMP LIMIT 1) as A, (SELECT total as bigValue FROM  `vestas_prod_active_total` WHERE MACHINE_ID='".$TurbineList[$tkey]['Tid']."' AND M_TIMESTAMP >  '".$DateList[$datekey]['PASSDATE']."' AND M_TIMESTAMP < DATE_ADD( '".$DateList[$datekey]['PASSDATE']."', INTERVAL 1 DAY ) ORDER BY M_TIMESTAMP DESC LIMIT 1) as B";
				$PageList2		= $this->ExecuteQuery($GetQuery2, "select");
	
	if(!empty($PageList2) && is_array($PageList2))
			foreach($PageList2 as $key=>$value)
			{
				$AnnualTotal = $AnnualTotal + (stripslashes($PageList2[$key]['totalValue']));
			}
		}
	
}
//	echo '{"TotalList":'.json_encode($TotalList)."}";
	//*****vishal echo '{"AnnualTotal":[{"AnnualTotal":"'.json_encode($AnnualTotal).'"'."}]}";
	//$objSmarty->assign('AnnualTotal', $AnnualTotal);
return $AnnualTotal;
 }
 //**************************************************************************************************************************************************************					
function GetLastMonth(){
   global $objSmarty;
	$GetQuery = "DELETE FROM vestas_prod_active_total WHERE TOTAL REGEXP '^[[:digit:]]{9}'";
	$PageList		= $this->ExecuteQuery($GetQuery, "delete");
	//echo CUS1002;
	$GetQuery1 = "SELECT DATE(M_TIMESTAMP) AS PASSDATE FROM vestas_prod_active_total WHERE MONTH(M_TIMESTAMP) = MONTH(CURDATE()- INTERVAL 1 MONTH) GROUP BY DATE(M_TIMESTAMP)";
	$DateList		= $this->ExecuteQuery($GetQuery1, "select");
	if(!empty($DateList) && is_array($DateList))
	foreach($DateList as $datekey=>$value){
 	$DateList[$datekey]['PASSDATE'] = stripslashes($DateList[$datekey]['PASSDATE']);
		$GetQuerys1 = "SELECT turbine_id FROM arka_turbine_reg_master WHERE customer_id = '".CUS1002."'";
		$TurbineList		= $this->ExecuteQuery($GetQuerys1, "select");
		
			if(!empty($TurbineList) && is_array($TurbineList))
				foreach($TurbineList as $tkey=>$value){
					$TurbineList[$tkey]['Tid']	 = stripslashes($TurbineList[$tkey]['turbine_id']);			
				
   	$GetQuery2 =  "SELECT (B.bigValue-A.smallValue) as totalValue FROM (SELECT total as smallValue FROM  `vestas_prod_active_total` WHERE MACHINE_ID='".$TurbineList[$tkey]['Tid']."' AND M_TIMESTAMP > '".$DateList[$datekey]['PASSDATE']."' AND M_TIMESTAMP < DATE_ADD('".$DateList[$datekey]['PASSDATE']."', INTERVAL 1 DAY ) ORDER BY M_TIMESTAMP LIMIT 1) as A, (SELECT total as bigValue FROM  `vestas_prod_active_total` WHERE MACHINE_ID='".$TurbineList[$tkey]['Tid']."' AND M_TIMESTAMP >  '".$DateList[$datekey]['PASSDATE']."' AND M_TIMESTAMP < DATE_ADD( '".$DateList[$datekey]['PASSDATE']."', INTERVAL 1 DAY ) ORDER BY M_TIMESTAMP DESC LIMIT 1) as B";
				$PageList2		= $this->ExecuteQuery($GetQuery2, "select");
	
	if(!empty($PageList2) && is_array($PageList2))
			foreach($PageList2 as $key=>$value)
			{
				$LastMonthTotal = $LastMonthTotal + (stripslashes($PageList2[$key]['totalValue']));
			}
		}
	
}
	//$objSmarty->assign('LastMonthTotal', $LastMonthTotal);
	//echo '{"LastMonthTotal":'.json_encode($LastMonthTotal)."}";
	//************vishal	echo '{"LastMonthTotal":[{"LastMonthTotal":"'.json_encode($LastMonthTotal).'"'."}]}";
            return $LastMonthTotal;
                    }
					
					 //**************************************************************************************************************************************************************
function GetCurrentMonth(){
   global $objSmarty;
	$GetQuery = "DELETE FROM vestas_prod_active_total WHERE TOTAL REGEXP '^[[:digit:]]{9}'";
	$PageList		= $this->ExecuteQuery($GetQuery, "delete");
	//echo CUS1002;
	$GetQuery1 = "SELECT DATE(M_TIMESTAMP) AS PASSDATE FROM vestas_prod_active_total WHERE MONTH(M_TIMESTAMP) = MONTH(CURDATE()) GROUP BY DATE(M_TIMESTAMP)";
	$DateList		= $this->ExecuteQuery($GetQuery1, "select");
	if(!empty($DateList) && is_array($DateList))
	foreach($DateList as $datekey=>$value){
 	$DateList[$datekey]['PASSDATE'] = stripslashes($DateList[$datekey]['PASSDATE']);
		$GetQuerys1 = "SELECT turbine_id FROM arka_turbine_reg_master WHERE customer_id = '".CUS1002."'";
		$TurbineList		= $this->ExecuteQuery($GetQuerys1, "select");
		
			if(!empty($TurbineList) && is_array($TurbineList))
				foreach($TurbineList as $tkey=>$value){
					$TurbineList[$tkey]['Tid']	 = stripslashes($TurbineList[$tkey]['turbine_id']);			
				
   	$GetQuery2 =  "SELECT (B.bigValue-A.smallValue) as totalValue FROM (SELECT total as smallValue FROM  `vestas_prod_active_total` WHERE MACHINE_ID='".$TurbineList[$tkey]['Tid']."' AND M_TIMESTAMP > '".$DateList[$datekey]['PASSDATE']."' AND M_TIMESTAMP < DATE_ADD('".$DateList[$datekey]['PASSDATE']."', INTERVAL 1 DAY ) ORDER BY M_TIMESTAMP LIMIT 1) as A, (SELECT total as bigValue FROM  `vestas_prod_active_total` WHERE MACHINE_ID='".$TurbineList[$tkey]['Tid']."' AND M_TIMESTAMP >  '".$DateList[$datekey]['PASSDATE']."' AND M_TIMESTAMP < DATE_ADD( '".$DateList[$datekey]['PASSDATE']."', INTERVAL 1 DAY ) ORDER BY M_TIMESTAMP DESC LIMIT 1) as B";
				$PageList2		= $this->ExecuteQuery($GetQuery2, "select");
	
	if(!empty($PageList2) && is_array($PageList2))
			foreach($PageList2 as $key=>$value)
			{
				$CurMonthTotal = $CurMonthTotal + (stripslashes($PageList2[$key]['totalValue']));
			}
		}
	
}
	//$objSmarty->assign('CurMonthTotal', $CurMonthTotal);
	//echo '{"CurMonthTotal":'.json_encode($CurMonthTotal)."}";
	//******Vishal  echo '{"CurMonthTotal":[{"CurMonthTotal":"'.json_encode($CurMonthTotal).'"'."}]}";
	return $CurMonthTotal;
 }
 
  //**************************************************************************************************************************************************************
function GetToday(){
    global $objSmarty;
	$GetQuery = "DELETE FROM vestas_prod_active_total WHERE TOTAL REGEXP '^[[:digit:]]{9}'";
	$PageList		= $this->ExecuteQuery($GetQuery, "delete");
	//echo CUS1002;
	$GetQuery1 = "SELECT DATE(M_TIMESTAMP) AS PASSDATE FROM vestas_prod_active_total WHERE DATE(M_TIMESTAMP) = DATE(CURDATE()) GROUP BY DATE(M_TIMESTAMP)";
	$DateList		= $this->ExecuteQuery($GetQuery1, "select");
	if(!empty($DateList) && is_array($DateList))
	foreach($DateList as $datekey=>$value){
 	$DateList[$datekey]['PASSDATE'] = stripslashes($DateList[$datekey]['PASSDATE']);
		$GetQuerys1 = "SELECT turbine_id FROM arka_turbine_reg_master WHERE customer_id = '".CUS1002."'";
		$TurbineList		= $this->ExecuteQuery($GetQuerys1, "select");
		
			if(!empty($TurbineList) && is_array($TurbineList))
				foreach($TurbineList as $tkey=>$value){
					$TurbineList[$tkey]['Tid']	 = stripslashes($TurbineList[$tkey]['turbine_id']);			
				
   	$GetQuery2 =  "SELECT (B.bigValue-A.smallValue) as totalValue FROM (SELECT total as smallValue FROM  `vestas_prod_active_total` WHERE MACHINE_ID='".$TurbineList[$tkey]['Tid']."' AND M_TIMESTAMP > '".$DateList[$datekey]['PASSDATE']."' AND M_TIMESTAMP < DATE_ADD('".$DateList[$datekey]['PASSDATE']."', INTERVAL 1 DAY ) ORDER BY M_TIMESTAMP LIMIT 1) as A, (SELECT total as bigValue FROM  `vestas_prod_active_total` WHERE MACHINE_ID='".$TurbineList[$tkey]['Tid']."' AND M_TIMESTAMP >  '".$DateList[$datekey]['PASSDATE']."' AND M_TIMESTAMP < DATE_ADD( '".$DateList[$datekey]['PASSDATE']."', INTERVAL 1 DAY ) ORDER BY M_TIMESTAMP DESC LIMIT 1) as B";
				$PageList2		= $this->ExecuteQuery($GetQuery2, "select");
	
	if(!empty($PageList2) && is_array($PageList2))
			foreach($PageList2 as $key=>$value)
			{
				$CurDateTotal = $CurDateTotal + (stripslashes($PageList2[$key]['totalValue']));
			}
		}
	
}
	//$objSmarty->assign('CurDateTotal', $CurDateTotal);
//	echo '{"CurDateTotal":'.json_encode($CurDateTotal)."}";
//******vishal echo '{"CurDateTotal":[{"CurDateTotal":"'.json_encode($CurDateTotal).'"'."}]}";
return $CurDateTotal;
	
 }
 
 //**************************************************************************************************************************************************************
function GetSCADATurbines()  {
		global $objSmarty;
		if(CUS1002 =='CUS1001')
			$SelQuery = 'SELECT `arka_cus_reg_master`.customer_id, `arka_turbine_reg_master`.turbine_id, `arka_turbine_reg_master`.customer_id,`arka_turbine_reg_master`.turbine_htsc_no, `arka_turbine_reg_master`.location_no, `arka_turbine_reg_master`.village_name, `arka_turbine_reg_master`.site_name,`arka_turbine_reg_master`.make,`vestas_overview_view`.*, CONVERT_TZ(vestas_overview_view.M_TIMESTAMP,  "+00:00",  "+12:30" ) AS TZ FROM `arka_cus_reg_master`, `arka_turbine_reg_master`,`vestas_overview_view` WHERE `vestas_overview_view`.MACHINE_ID = `arka_turbine_reg_master`.turbine_id AND  `arka_turbine_reg_master`.customer_id = `arka_cus_reg_master`.customer_id ORDER BY `arka_turbine_reg_master`.turbine_id' ;
		else
			$SelQuery = 'SELECT `arka_cus_reg_master`.customer_id, `arka_turbine_reg_master`.turbine_id, `arka_turbine_reg_master`.customer_id,`arka_turbine_reg_master`.turbine_htsc_no, `arka_turbine_reg_master`.location_no, `arka_turbine_reg_master`.village_name, `arka_turbine_reg_master`.site_name,`arka_turbine_reg_master`.make,`vestas_overview_view`.*, CONVERT_TZ(vestas_overview_view.M_TIMESTAMP,  "+00:00",  "+12:30" ) AS TZ FROM `arka_cus_reg_master`, `arka_turbine_reg_master`,`vestas_overview_view` WHERE `vestas_overview_view`.MACHINE_ID = `arka_turbine_reg_master`.turbine_id AND `arka_cus_reg_master`.customer_id ="'.CUS1002.'" AND `arka_turbine_reg_master`.customer_id = `arka_cus_reg_master`.customer_id ORDER BY `arka_turbine_reg_master`.turbine_id' ;
		$SCADAList		= $this->ExecuteQuery($SelQuery, "select");
        $objSmarty->assign('SCADAList', $SCADAList);
		
	}	
//**************************************************************************************************************************************************************
function GetRun($objArray='')  {
		global $objSmarty;
		$RunQuery = 'SELECT count(*) as runcount FROM `vestas_overview_view`,`arka_turbine_reg_master` WHERE (vestas_overview_view.STATUS="225" OR vestas_overview_view.STATUS="15") AND vestas_overview_view.MACHINE_ID = arka_turbine_reg_master.turbine_id AND arka_turbine_reg_master.customer_id="CUS1002" ' ;
		$RunList		= $this->ExecuteQuery($RunQuery, "select");
		if(!empty($RunList) && is_array($RunList))
		foreach($RunList as $key=>$value)
			{
				$Run = $Run + (stripslashes($RunList[$key]['totalValue']));
			}
     //   $objSmarty->assign('RunList', $RunList);
		
	// ****Vishal	echo '{"RunList":'.json_encode($RunList)."}";
	
	return $Run;
		
	}
		
		
function GetGrid($objArray='')  {
		global $objSmarty;
		$GridQuery = 'SELECT count(*) as gridcount FROM `vestas_overview_view`,`arka_turbine_reg_master` WHERE vestas_overview_view.STATUS="0" AND vestas_overview_view.MACHINE_ID = arka_turbine_reg_master.turbine_id AND arka_turbine_reg_master.customer_id="CUS1002" ' ;
		$GridList		= $this->ExecuteQuery($GridQuery, "select");
		if(!empty($GridList) && is_array($GridList))
		foreach($GridList as $key=>$value)
			{
				$Grid= $Grid + (stripslashes($GridList[$key]['totalValue']));
			}
      //  $objSmarty->assign('GridList', $GridList);
		//**Vishal   echo '{"GridList":'.json_encode($GridList)."}";
	     return  $Grid;                         
						       }
										  
function GetOther($objArray=''){
		global $objSmarty;
		$OtherQuery = 'SELECT count(*) as othercount FROM `vestas_overview_view`,`arka_turbine_reg_master` WHERE (vestas_overview_view.STATUS<>"225" AND vestas_overview_view.STATUS<>"15" AND vestas_overview_view.STATUS<>"0")  AND vestas_overview_view.MACHINE_ID = arka_turbine_reg_master.turbine_id AND arka_turbine_reg_master.customer_id="CUS1002" ' ;
		$OtherList		= $this->ExecuteQuery($OtherQuery, "select");
		if(!empty($OtherList) && is_array($OtherList))
		foreach($OtherList as $key=>$value)
			{
				$Other= $Other + (stripslashes($OtherList[$key]['totalValue']));
			}
    //    $objSmarty->assign('OtherList', $OtherList);
		//***Vishal echo '{"OtherList":'.json_encode($OtherList)."}";
		 return  $Other;                 
						       }
										  
function GetTotal($objArray=''){
		global $objSmarty;
		$TotalQuery = 'SELECT count(*) as totalcount FROM `vestas_overview_view`,`arka_turbine_reg_master` WHERE  vestas_overview_view.MACHINE_ID = arka_turbine_reg_master.turbine_id AND arka_turbine_reg_master.customer_id="CUS1002"' ;
		$TotalList		= $this->ExecuteQuery($TotalQuery, "select");
		if(!empty($TotalList) && is_array($TotalList))
		foreach($TotalList as $key=>$value)
			{
				$Total= $Total + (stripslashes($TotalList[$key]['totalValue']));
			}
		
    //    $objSmarty->assign('TotalList', $TotalList);
   //*****vishal		echo '{"TotalList":'.json_encode($TotalList)."}";
	    return $Total;
					           }	
 //**************************************************************************************************************************************************************
function GetTurbineDetails($objArray='')  {
		global $objSmarty;
		$SelQuery = 'SELECT * FROM `arka_turbine_reg_master` WHERE turbine_id="'.$_GET['turbine_id'].'" ' ;
		$PageList		= $this->ExecuteQuery($SelQuery, "select");
        $objSmarty->assign('PageList', $PageList);
	}	
 //**************************************************************************************************************************************************************	
 function RolesLists(){
	global $objSmarty;
	 $SelQuery1	= 'SELECT * FROM arka_group_mapping WHERE `group_name` = "'.$_SESSION['USER_GROUP'].'" AND `record_status` <> 0 ORDER BY sl_no';
	  $RList		= $this->ExecuteQuery($SelQuery1, "select");
		
  if(!empty($RList) && is_array($RList))
   foreach($RList as $key=>$value){
    $RList[$key]['role_id'] = stripslashes($RList[$key]['role_id']);
	$RList[$key]['role_name'] = stripslashes($RList[$key]['role_name']);
	$objSmarty->assign('RList', $RList);
  return $RList;
		} 
	}
}

?>


