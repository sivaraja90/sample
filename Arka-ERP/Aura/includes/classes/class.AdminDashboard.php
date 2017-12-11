<?php
#####Class For Adding Content Management ######
class DashBoard extends MysqlFns{
 
 /* class constructor */
 function DashBoard()
 {
	 $this->LDDisplayPath= $config['SiteGlobalPath']."class.DashBoard.php";
	  global $config;
	  global $objSmarty;
	  $this->MysqlFns();
	  $this->Limit = 20;
 }

//**************************************************************************************************************************************************************
function GetStatus($objArray='')  {
		global $objSmarty;
		 $SelQuerys	= 'SELECT DISTINCT make,customer_name FROM `arka_turbine_reg_master` WHERE `record_status` ="1"';
	  $DasDetail	= $this->ExecuteQuery($SelQuerys, 'select');
	  $objSmarty->assign('DasDetail', $DasDetail);
		
		foreach($DasDetail as $count=>$value)
			{
 		$DasDetail[$count]['Make'] = stripslashes($DasDetail[$count]['make']);		
		$DasDetail[$count]['Customer_name'] = stripslashes($DasDetail[$count]['customer_name']);			
		
			 if($DasDetail[$count]['Make'] =='Vestas')
			 { 
			 if($DasDetail[$count]['Customer_name'] =='Gamesa')
			 {
	  $SelQuerysCus	= 'SELECT DISTINCT customer_id FROM `arka_turbine_reg_master` WHERE `record_status` ="1" AND customer_name="Gamesa"';
	  $CusIdsDetail	= $this->ExecuteQuery($SelQuerysCus, 'select');
	  $objSmarty->assign('CusIdsDetail', $CusIdsDetail);
		
		 $RunQuery = 'SELECT count(*) as runcount FROM `vestas_overview_view` WHERE (vestas_overview_view.STATUS="225" OR vestas_overview_view.STATUS="15") AND ((CONVERT_TZ(vestas_overview_view.M_TIMESTAMP, "+00:00", "+12:30") = CONVERT_TZ(NOW(),"+00:00" , "+12:30")) OR (CONVERT_TZ(NOW(),"+00:00" , "+12:30") <= CONVERT_TZ(vestas_overview_view.M_TIMESTAMP, "+00:00", "+13:00")))  AND vestas_overview_view.MACHINE_ID IN
(SELECT turbine_id FROM arka_turbine_reg_master  WHERE `record_status` ="1" AND `customer_name` = "Gamesa")' ;
		$RunList		= $this->ExecuteQuery($RunQuery, "select");
        $objSmarty->assign('RunList', $RunList);
		//print_r($RunList);
	//	echo $RunList[0][runcount];
		
		 $No_CommQuery = 'SELECT count(*) as no_comm_count FROM `vestas_overview_view`
WHERE (((vestas_overview_view.STATUS="225" OR vestas_overview_view.STATUS="15") OR (vestas_overview_view.STATUS<>"225" OR vestas_overview_view.STATUS<>"15") )
AND (CONVERT_TZ(NOW(),"+00:00" , "+12:30") > (CONVERT_TZ(vestas_overview_view.M_TIMESTAMP , "+00:00", "+13:00")) AND vestas_overview_view.STATUS <> "0" )) 
AND vestas_overview_view.MACHINE_ID IN(SELECT turbine_id FROM arka_turbine_reg_master  WHERE `record_status` ="1" AND `customer_name` = "Gamesa")';
		$No_CommList		= $this->ExecuteQuery($No_CommQuery, "select");
        $objSmarty->assign('No_CommList', $No_CommList);
				//echo $No_CommList[0][no_comm_count];

		
		 $GridQuery = 'SELECT count(*) as gridcount FROM `vestas_overview_view` WHERE vestas_overview_view.STATUS="0"  AND vestas_overview_view.MACHINE_ID IN(SELECT turbine_id FROM arka_turbine_reg_master  WHERE `record_status` ="1" AND `customer_name` = "Gamesa") ' ;
		$GridList		= $this->ExecuteQuery($GridQuery, "select");
        $objSmarty->assign('GridList', $GridList);
			//	echo $GridList[0][gridcount];


		$OtherQuery = 'SELECT count(*) as othercount FROM `vestas_overview_view` WHERE (((CONVERT_TZ(vestas_overview_view.M_TIMESTAMP, "+00:00", "+12:30") = CONVERT_TZ(NOW(), "+00:00", "+12:30")) OR (CONVERT_TZ(NOW(), "+00:00", "+12:30")< CONVERT_TZ(`vestas_overview_view`.M_TIMESTAMP,  "+00:00",  "+13:00"))) AND ((vestas_overview_view.STATUS <> "225") AND (vestas_overview_view.STATUS <> "0")))  AND vestas_overview_view.MACHINE_ID IN(SELECT turbine_id FROM arka_turbine_reg_master  WHERE `record_status` ="1" AND `customer_name` = "Gamesa")' ;
		$OtherList		= $this->ExecuteQuery($OtherQuery, "select");
        $objSmarty->assign('OtherList', $OtherList);
			//	echo $OtherList[0][othercount];

		
		 $TotalQuery = 'SELECT count(*) as totalcount FROM `vestas_overview_view` WHERE  vestas_overview_view.MACHINE_ID IN
(SELECT turbine_id FROM arka_turbine_reg_master  WHERE `record_status` ="1" AND `customer_name` = "Gamesa") ' ;
		$TotalList		= $this->ExecuteQuery($TotalQuery, "select");
        $objSmarty->assign('TotalList', $TotalList);
				//echo $TotalList[0][totalcount];

			}
			elseif($DasDetail[$count]['Customer_name'] =='Leap Green Energy')
			 { 
	  $SelQuerysCus2	= 'SELECT DISTINCT customer_id FROM `arka_turbine_reg_master` WHERE `record_status` ="1" AND customer_name="Leap Green Energy"';
	  $CusIdsDetail2	= $this->ExecuteQuery($SelQuerysCus2, 'select');
	  $objSmarty->assign('CusIdsDetail2', $CusIdsDetail2);
			 
		 $RunQuery = 'SELECT count(*) as runcount FROM `vestas_overview_view` WHERE (vestas_overview_view.STATUS="225" OR vestas_overview_view.STATUS="15") AND ((CONVERT_TZ(vestas_overview_view.M_TIMESTAMP, "+00:00", "+12:30") = CONVERT_TZ(NOW(),"+00:00" , "+12:30")) OR (CONVERT_TZ(NOW(),"+00:00" , "+12:30") <= CONVERT_TZ(vestas_overview_view.M_TIMESTAMP, "+00:00", "+13:00"))) AND vestas_overview_view.MACHINE_ID IN
(SELECT turbine_id FROM arka_turbine_reg_master  WHERE `record_status` ="1" AND `customer_name` = "Leap Green Energy")' ;
		$RunList1		= $this->ExecuteQuery($RunQuery, "select");
        $objSmarty->assign('RunList1', $RunList1);
		//echo $RunList[0][runcount];
		
		 $No_CommQuery = 'SELECT count(*) as no_comm_count FROM `vestas_overview_view`
WHERE (((vestas_overview_view.STATUS="225" OR vestas_overview_view.STATUS="15") OR (vestas_overview_view.STATUS<>"225" OR vestas_overview_view.STATUS<>"15") )
AND (CONVERT_TZ(NOW(),"+00:00" , "+12:30") > (CONVERT_TZ(vestas_overview_view.M_TIMESTAMP , "+00:00", "+13:00")) AND vestas_overview_view.STATUS <> "0" )) AND vestas_overview_view.MACHINE_ID IN(SELECT turbine_id FROM arka_turbine_reg_master  WHERE `record_status` ="1" AND `customer_name` = "Leap Green Energy")';
		$No_CommList1		= $this->ExecuteQuery($No_CommQuery, "select");
        $objSmarty->assign('No_CommList1', $No_CommList1);
				//echo $No_CommList[0][no_comm_count];

		
		 $GridQuery = 'SELECT count(*) as gridcount FROM `vestas_overview_view` WHERE vestas_overview_view.STATUS="0"  AND vestas_overview_view.MACHINE_ID IN(SELECT turbine_id FROM arka_turbine_reg_master  WHERE `record_status` ="1" AND `customer_name` = "Leap Green Energy")' ;
		$GridList1		= $this->ExecuteQuery($GridQuery, "select");
        $objSmarty->assign('GridList1', $GridList1);
			//	echo $GridList[0][gridcount];

		
/*		$GridQuery = 'SELECT count(*) as gridcount FROM `vestas_overview_view`,`arka_turbine_reg_master` WHERE vestas_overview_view.STATUS="0"  AND (DATE(CONVERT_TZ(vestas_overview_view.M_TIMESTAMP, "+00:00", "+12:30")) <> DATE(DATE_ADD(NOW(),INTERVAL "12:30" HOUR_MINUTE))) AND vestas_overview_view.MACHINE_ID = arka_turbine_reg_master.turbine_id  ' ;
		$GridList		= $this->ExecuteQuery($GridQuery, "select");
        $objSmarty->assign('GridList', $GridList);
		
*/		
		$OtherQuery = 'SELECT count(*) as othercount FROM `vestas_overview_view` WHERE (((CONVERT_TZ(vestas_overview_view.M_TIMESTAMP, "+00:00", "+12:30") = CONVERT_TZ(NOW(), "+00:00", "+12:30")) OR (CONVERT_TZ(NOW(), "+00:00", "+12:30")< CONVERT_TZ(`vestas_overview_view`.M_TIMESTAMP,  "+00:00",  "+13:00"))) AND ((vestas_overview_view.STATUS <> "225") AND (vestas_overview_view.STATUS <> "0")))  AND vestas_overview_view.MACHINE_ID IN(SELECT turbine_id FROM arka_turbine_reg_master  WHERE `record_status` ="1" AND `customer_name` = "Leap Green Energy") ' ;
		$OtherList1		= $this->ExecuteQuery($OtherQuery, "select");
        $objSmarty->assign('OtherList1', $OtherList1);
			//	echo $OtherList[0][othercount];

		
		 $TotalQuery = 'SELECT count(*) as totalcount FROM `vestas_overview_view` WHERE  vestas_overview_view.MACHINE_ID IN
(SELECT turbine_id FROM arka_turbine_reg_master  WHERE `record_status` ="1" AND `customer_name` = "Leap Green Energy")' ;
		$TotalList1		= $this->ExecuteQuery($TotalQuery, "select");
        $objSmarty->assign('TotalList1', $TotalList1);
				//echo $TotalList[0][totalcount];

			}
			}
		elseif($DasDetail[$count]['Make'] =='NEPC')
			{
			if($DasDetail[$count]['Customer_name'] =='RRPL')
			{
	  $SelQuerysCus3	= 'SELECT DISTINCT customer_id FROM `arka_turbine_reg_master` WHERE `record_status` ="1" AND customer_name="RRPL"';
	  $CusIdsDetail3	= $this->ExecuteQuery($SelQuerysCus3, 'select');
	  $objSmarty->assign('CusIdsDetail3', $CusIdsDetail3);
			
			$RunQuery = 'SELECT count(*) as runcount FROM `nepc_std_data_view` WHERE nepc_std_data_view.STATUS="49"  AND ((CONVERT_TZ(nepc_std_data_view.M_SERVER_TIMESTAMP, "+00:00", "+12:30") = CONVERT_TZ(NOW(),"+00:00" , "+12:30")) OR (CONVERT_TZ(NOW(),"+00:00" , "+12:30") <= CONVERT_TZ(nepc_std_data_view.M_SERVER_TIMESTAMP, "+00:00", "+13:00"))) AND nepc_std_data_view.MACHINE_ID IN(SELECT turbine_id FROM arka_turbine_reg_master  WHERE `record_status` ="1" AND `customer_name` = "RRPL")' ;
		$RunList2		= $this->ExecuteQuery($RunQuery, "select");
        $objSmarty->assign('RunList2', $RunList2);
		//echo $RunList1[0]['runcount'];
		
	 $No_CommQuery = 'SELECT count(*) as no_comm_count FROM `nepc_std_data_view` WHERE ((nepc_std_data_view.STATUS="49" OR nepc_std_data_view.STATUS<>"19") AND (CONVERT_TZ(NOW(),"+00:00" , "+12:30") > (CONVERT_TZ(nepc_std_data_view.M_SERVER_TIMESTAMP , "+00:00", "+13:00"))) AND nepc_std_data_view.STATUS <> "0" ) AND nepc_std_data_view.MACHINE_ID IN(SELECT turbine_id FROM arka_turbine_reg_master  WHERE `record_status` ="1" AND `customer_name` = "RRPL")';
		$No_CommList2		= $this->ExecuteQuery($No_CommQuery, "select");
        $objSmarty->assign('No_CommList2', $No_CommList2);
//echo $GridList1[0]['no_comm_count'];

		$GridQuery = 'SELECT count(*) as gridcount FROM `nepc_std_data_view` WHERE nepc_std_data_view.STATUS="19"  AND nepc_std_data_view.MACHINE_ID IN(SELECT turbine_id FROM arka_turbine_reg_master  WHERE `record_status` ="1" AND `customer_name` = "RRPL")  ' ;
		$GridList2		= $this->ExecuteQuery($GridQuery, "select");
        $objSmarty->assign('GridList2', $GridList2);
	//	echo $No_CommList1[0][gridcount];

	   $CommFailQuery = 'SELECT count(*) as commFail FROM `nepc_std_data_view` WHERE nepc_std_data_view.STATUS="101"  AND nepc_std_data_view.MACHINE_ID IN(SELECT turbine_id FROM arka_turbine_reg_master  WHERE `record_status` ="1" AND `customer_name` = "RRPL") ' ;
		$CommList2		= $this->ExecuteQuery($CommFailQuery, "select");
        $objSmarty->assign('CommList2', $CommList2);
		
	   $OtherQuery = 'SELECT count(*) as othercount FROM `nepc_std_data_view` WHERE (((CONVERT_TZ(nepc_std_data_view.M_SERVER_TIMESTAMP, "+00:00", "+12:30") = CONVERT_TZ(NOW(), "+00:00", "+12:30")) OR (CONVERT_TZ(NOW(), "+00:00", "+12:30")< CONVERT_TZ(`nepc_std_data_view`.M_SERVER_TIMESTAMP,  "+00:00",  "+13:00"))) AND ((nepc_std_data_view.STATUS <> "49") AND (nepc_std_data_view.STATUS <> "19") AND (nepc_std_data_view.STATUS <> "101") AND (nepc_std_data_view.STATUS <> "0" OR nepc_std_data_view.STATUS = "0"))) AND nepc_std_data_view.MACHINE_ID IN(SELECT turbine_id FROM arka_turbine_reg_master  WHERE `record_status` ="1" AND `customer_name` = "RRPL") ' ;
		$OtherList2		= $this->ExecuteQuery($OtherQuery, "select");
        $objSmarty->assign('OtherList2', $OtherList2);
		//echo $OtherList1[0][othercount];
		
      $TotalQuery = 'SELECT count(*) as totalcount FROM `nepc_std_data_view` WHERE  nepc_std_data_view.MACHINE_ID IN(SELECT turbine_id FROM arka_turbine_reg_master  WHERE `record_status` ="1" AND `customer_name` = "RRPL") ' ;
		$TotalList1		= $this->ExecuteQuery($TotalQuery, "select");
        $objSmarty->assign('TotalList1', $TotalList1);
//echo $TotalList1[0][totalcount];		
	     }
		}
		
	   }	
	}
 
	
}

?>


