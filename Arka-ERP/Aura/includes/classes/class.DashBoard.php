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

function GetDashBoardAnnual()
{

  global $objSmarty;
  	 if($_SESSION['CustomerId'] == 'CUS1001'){

	$GetQuery1 = 'SELECT SUM(PRODUCTION) AS totalValue FROM arka_annual_production_hours WHERE status="1" AND MACHINE_ID IN(SELECT turbine_id FROM arka_turbine_reg_master  WHERE `record_status` ="1" AND `customer_id` = "'.$_GET['customer_id'].'")';
	$AnnualTotal2		= $this->ExecuteQuery($GetQuery1, "select");
	$objSmarty->assign('AnnualTotal2', $AnnualTotal2);

}
else
{

      $GetQuerys1 = 'SELECT arka_turbine_reg_master.turbine_id , SUM(arka_annual_production_hours.PRODUCTION) AS totalValue FROM arka_turbine_reg_master,arka_annual_production_hours WHERE record_status="1" AND customer_id = "'.$_SESSION['CustomerId'].'" AND arka_annual_production_hours.MACHINE_ID = arka_turbine_reg_master.turbine_id AND arka_turbine_reg_master.record_status="1" AND arka_annual_production_hours.status="1"';
		$AnnualTotal2		= $this->ExecuteQuery($GetQuerys1, "select");
		//print_r($AnnualTotal2);
		$objSmarty->assign('AnnualTotal2', $AnnualTotal2);
		
		/*$GetQuerys1 = 'SELECT turbine_id FROM arka_turbine_reg_master WHERE record_status="1" AND customer_id = "'.$_SESSION['CustomerId'].'"';
		$TurbineList		= $this->ExecuteQuery($GetQuerys1, "select");
		$objSmarty->assign('TurbineList', $TurbineList);
		foreach($TurbineList as $key=>$value)
		{
		$GetQuerys2 = 'SELECT SUM(PRODUCTION) AS totalValue FROM arka_annual_production_hours WHERE status="1" AND MACHINE_ID="'.$TurbineList[$key]['turbine_id'].'"' ;
		$AnnualTotal2		= $this->ExecuteQuery($GetQuerys2, "select");
		$objSmarty->assign('AnnualTotal2', $AnnualTotal2);
		}
*/
}
 }
 //**************************************************************************************************************************************************************					
function GetLastMonth(){
   global $objSmarty;
  if($_SESSION['CustomerId'] == 'CUS1001'){
	$GetQuery1 = 'SELECT SUM(PRODUCTION) AS totalValue FROM arka_month_production_hours WHERE status="1" AND MONTH(DOM)=MONTH(NOW() - INTERVAL 1 MONTH) AND MACHINE_ID IN(SELECT turbine_id FROM arka_turbine_reg_master  WHERE `record_status` ="1" AND `customer_id` = "'.$_GET['customer_id'].'")';
	$LastMonthTotal		= $this->ExecuteQuery($GetQuery1, "select");
	$objSmarty->assign('LastMonthTotal', $LastMonthTotal);
}
else
{   

		 $GetQuerys2 = 'SELECT SUM(arka_month_production_hours.PRODUCTION) AS totalValue, arka_turbine_reg_master.turbine_id  FROM arka_month_production_hours , arka_turbine_reg_master WHERE  arka_month_production_hours.status="1" AND arka_month_production_hours.MACHINE_ID = arka_turbine_reg_master.turbine_id AND arka_turbine_reg_master.record_status = "1" AND arka_turbine_reg_master.customer_id = "'.$_SESSION['CustomerId'].'" AND MONTH(arka_month_production_hours.DOM)=MONTH(NOW() - INTERVAL 1 MONTH)';
		 $LastMonthTotal		= $this->ExecuteQuery($GetQuerys2, "select");
		$objSmarty->assign('LastMonthTotal', $LastMonthTotal);
		/* 
		$GetQuerys1 = 'SELECT turbine_id FROM arka_turbine_reg_master WHERE record_status="1" AND customer_id = "'.$_SESSION['CustomerId'].'"';
		$TurbineList		= $this->ExecuteQuery($GetQuerys1, "select");
		$objSmarty->assign('TurbineList', $TurbineList);
		foreach($TurbineList as $key=>$value)
		{
		$GetQuerys2 = 'SELECT SUM(PRODUCTION) AS totalValue FROM arka_month_production_hours WHERE status="1" AND MACHINE_ID="'.$TurbineList[$key]['turbine_id'].'" AND MONTH(DOM)=MONTH(NOW() - INTERVAL 1 MONTH)' ;
		$LastMonthTotal		= $this->ExecuteQuery($GetQuerys2, "select");
		$objSmarty->assign('LastMonthTotal', $LastMonthTotal);
		}
*/
}
}
					

					 					 //**************************************************************************************************************************************************************
function GetCurrentMonth(){
   global $objSmarty;
   if($_SESSION['CustomerId'] == 'CUS1001'){
	$GetQuery1 = 'SELECT SUM(PRODUCTION) AS totalValue FROM arka_month_production_hours WHERE status="1" AND MONTH(DOM)=MONTH(NOW()) AND MACHINE_ID IN(SELECT turbine_id FROM arka_turbine_reg_master  WHERE `record_status` ="1" AND `customer_id` = "'.$_GET['customer_id'].'")';
	$CurMonthTotal		= $this->ExecuteQuery($GetQuery1, "select");
	$objSmarty->assign('CurMonthTotal', $CurMonthTotal);
}
else
{       
        $GetQuerys2 = 'SELECT SUM(arka_month_production_hours.PRODUCTION) AS totalValue, arka_turbine_reg_master.turbine_id  FROM arka_month_production_hours , arka_turbine_reg_master WHERE  arka_month_production_hours.status="1" AND arka_month_production_hours.MACHINE_ID = arka_turbine_reg_master.turbine_id AND arka_turbine_reg_master.record_status = "1" AND arka_turbine_reg_master.customer_id = "'.$_SESSION['CustomerId'].'" AND MONTH(arka_month_production_hours.DOM)=MONTH(NOW())';
		$CurMonthTotal		= $this->ExecuteQuery($GetQuerys2, "select");
		$objSmarty->assign('CurMonthTotal', $CurMonthTotal);
		/*$GetQuerys1 = 'SELECT turbine_id FROM arka_turbine_reg_master WHERE record_status="1" AND customer_id = "'.$_SESSION['CustomerId'].'"';
		$TurbineList		= $this->ExecuteQuery($GetQuerys1, "select");
		$objSmarty->assign('TurbineList', $TurbineList);
		foreach($TurbineList as $key=>$value)
		{
		$GetQuerys2 = 'SELECT SUM(PRODUCTION) AS totalValue FROM arka_month_production_hours WHERE status="1" AND MACHINE_ID="'.$TurbineList[$key]['turbine_id'].'" AND MONTH(DOM)=MONTH(NOW())' ;
		$CurMonthTotal		= $this->ExecuteQuery($GetQuerys2, "select");
		$objSmarty->assign('CurMonthTotal', $CurMonthTotal);
		}*/

}
}

  //**************************************************************************************************************************************************************
function GetToday(){
    global $objSmarty;
	   if($_SESSION['CustomerId'] == 'CUS1001'){
	   
	   
	$GetQuery1 = 'SELECT SUM(PRODUCTION) AS totalValue  FROM arka_today_production_hrs WHERE status="1" AND DATE(DOM)=DATE(NOW())  AND MACHINE_ID IN(SELECT turbine_id FROM arka_turbine_reg_master  WHERE `record_status` ="1" AND `customer_id` = "'.$_GET['customer_id'].'") ';
	$CurDateTotal		= $this->ExecuteQuery($GetQuery1, "select");
	$objSmarty->assign('CurDateTotal', $CurDateTotal);
}
else
{
       		$GetQuerys2 = 'SELECT SUM(arka_today_production_hrs.PRODUCTION) AS totalValue, arka_turbine_reg_master.turbine_id  FROM arka_today_production_hrs , arka_turbine_reg_master WHERE  arka_today_production_hrs.status="1" AND arka_today_production_hrs.MACHINE_ID = arka_turbine_reg_master.turbine_id AND arka_turbine_reg_master.record_status = "1" AND arka_turbine_reg_master.customer_id = "'.$_SESSION['CustomerId'].'" AND DATE(arka_today_production_hrs.DOM)=DATE(NOW())';
        $CurDateTotal		= $this->ExecuteQuery($GetQuerys2, "select");
		$objSmarty->assign('CurDateTotal', $CurDateTotal);

		/*$GetQuerys1 = 'SELECT turbine_id FROM arka_turbine_reg_master WHERE record_status="1" AND customer_id = "'.$_SESSION['CustomerId'].'"';
		$TurbineList		= $this->ExecuteQuery($GetQuerys1, "select");
		$objSmarty->assign('TurbineList', $TurbineList);
		foreach($TurbineList as $key=>$value)
		{
		$GetQuerys2 = 'SELECT SUM(PRODUCTION) AS totalValue FROM arka_today_production_hrs WHERE status="1" AND MACHINE_ID="'.$TurbineList[$key]['turbine_id'].'" ';
		$CurDateTotal		= $this->ExecuteQuery($GetQuerys2, "select");
		$objSmarty->assign('CurDateTotal', $CurDateTotal);
		}*/

}
 }
 
 
 //****************************************************************************************************************************************hours

 function GetAnnualHours(){

  global $objSmarty;
  	   if($_SESSION['CustomerId'] == 'CUS1001')
{
		$GetQuery1 = 'SELECT SUM(HOURS) AS Hours FROM arka_annual_production_hours WHERE status="1" AND MACHINE_ID IN(SELECT turbine_id FROM arka_turbine_reg_master  WHERE `record_status` ="1" AND `customer_id` = "'.$_GET['customer_id'].'")';
		$AnnualTotalHours		= $this->ExecuteQuery($GetQuery1, "select");
		$objSmarty->assign('AnnualTotalHours', $AnnualTotalHours);
}
else
{

 		
        $GetQuerys2 = 'SELECT arka_turbine_reg_master.turbine_id , SUM(arka_annual_production_hours.HOURS) AS Hours FROM arka_turbine_reg_master, arka_annual_production_hours WHERE record_status="1" AND customer_id = "'.$_SESSION['CustomerId'].'" AND arka_annual_production_hours.MACHINE_ID = arka_turbine_reg_master.turbine_id AND arka_turbine_reg_master.record_status="1" AND arka_annual_production_hours.status="1"';
		$AnnualTotalHours		= $this->ExecuteQuery($GetQuerys2, "select");
		$objSmarty->assign('AnnualTotalHours', $AnnualTotalHours);
		/*$GetQuerys1 = 'SELECT turbine_id FROM arka_turbine_reg_master WHERE record_status="1" AND customer_id = "'.$_SESSION['CustomerId'].'"';
		$TurbineList		= $this->ExecuteQuery($GetQuerys1, "select");
		$objSmarty->assign('TurbineList', $TurbineList);
		foreach($TurbineList as $key=>$value)
		{
		$GetQuerys2 = 'SELECT SUM(HOURS) AS Hours FROM arka_annual_production_hours WHERE status="1" AND MACHINE_ID="'.$TurbineList[$key]['turbine_id'].'" ';
		$AnnualTotalHours		= $this->ExecuteQuery($GetQuerys2, "select");
		$objSmarty->assign('AnnualTotalHours', $AnnualTotalHours);
		}*/

}
}
 //**************************************************************************************************************************************************************					
function GetLastMonthHours(){
   global $objSmarty;
  	   if($_SESSION['CustomerId'] == 'CUS1001')
{
		$GetQuery1 = 'SELECT SUM(HOURS) AS Hours FROM arka_month_production_hours WHERE status="1" AND MONTH(DOM)=MONTH(NOW() - INTERVAL 1 MONTH) AND MACHINE_ID IN(SELECT turbine_id FROM arka_turbine_reg_master  WHERE `record_status` ="1" AND `customer_id` = "'.$_GET['customer_id'].'")';
		$LastMonthTotalHours		= $this->ExecuteQuery($GetQuery1, "select");
		$objSmarty->assign('LastMonthTotalHours', $LastMonthTotalHours);
}
else
{ 

		$GetQuerys2 = 'SELECT SUM(arka_month_production_hours.HOURS) AS Hours, arka_turbine_reg_master.turbine_id  FROM arka_month_production_hours , arka_turbine_reg_master WHERE  arka_month_production_hours.status="1" AND arka_month_production_hours.MACHINE_ID = arka_turbine_reg_master.turbine_id AND arka_turbine_reg_master.record_status = "1" AND arka_turbine_reg_master.customer_id = "'.$_SESSION['CustomerId'].'" AND MONTH(arka_month_production_hours.DOM)=MONTH(NOW() - INTERVAL 1 MONTH)';
		$LastMonthTotalHours		= $this->ExecuteQuery($GetQuerys2, "select");
		$objSmarty->assign('LastMonthTotalHours', $LastMonthTotalHours);
		/*$GetQuerys1 = 'SELECT turbine_id FROM arka_turbine_reg_master WHERE record_status="1" AND customer_id = "'.$_SESSION['CustomerId'].'"';
		$TurbineList		= $this->ExecuteQuery($GetQuerys1, "select");
		$objSmarty->assign('TurbineList', $TurbineList);
		foreach($TurbineList as $key=>$value)
		{
		$GetQuerys2 = 'SELECT SUM(HOURS) AS Hours FROM arka_month_production_hours WHERE status="1" AND MACHINE_ID="'.$TurbineList[$key]['turbine_id'].'" AND MONTH(DOM)=MONTH(NOW() - INTERVAL 1 MONTH)';
		$LastMonthTotalHours		= $this->ExecuteQuery($GetQuerys2, "select");
		$objSmarty->assign('LastMonthTotalHours', $LastMonthTotalHours);
		}*/

}
}                    
					
					 //**************************************************************************************************************************************************************
function GetCurrentMonthHours(){
   global $objSmarty;
if($_SESSION['CustomerId'] == 'CUS1001')
{
		$GetQuery1 = 'SELECT SUM(HOURS) AS Hours FROM arka_month_production_hours WHERE status="1" AND MONTH(DOM)=MONTH(NOW()) AND MACHINE_ID IN(SELECT turbine_id FROM arka_turbine_reg_master  WHERE `record_status` ="1" AND `customer_id` = "'.$_GET['customer_id'].'")';
		$CurMonthTotalHours		= $this->ExecuteQuery($GetQuery1, "select");
		$objSmarty->assign('CurMonthTotalHours', $CurMonthTotalHours);
}
else
{

		  $GetQuerys2 = 'SELECT SUM(arka_month_production_hours.HOURS) AS Hours, arka_turbine_reg_master.turbine_id  FROM arka_month_production_hours , arka_turbine_reg_master WHERE  arka_month_production_hours.status="1" AND arka_month_production_hours.MACHINE_ID = arka_turbine_reg_master.turbine_id AND arka_turbine_reg_master.record_status = "1" AND arka_turbine_reg_master.customer_id = "'.$_SESSION['CustomerId'].'" AND MONTH(arka_month_production_hours.DOM)=MONTH(NOW())';
		  
		  $CurMonthTotalHours		= $this->ExecuteQuery($GetQuerys2, "select");
		$objSmarty->assign('CurMonthTotalHours', $CurMonthTotalHours);
		/*$GetQuerys1 = 'SELECT turbine_id FROM arka_turbine_reg_master WHERE record_status="1" AND customer_id = "'.$_SESSION['CustomerId'].'"';
		$TurbineList		= $this->ExecuteQuery($GetQuerys1, "select");
		$objSmarty->assign('TurbineList', $TurbineList);
		foreach($TurbineList as $key=>$value)
		{
		$GetQuerys2 = 'SELECT SUM(HOURS) AS Hours FROM arka_month_production_hours WHERE status="1" AND MACHINE_ID="'.$TurbineList[$key]['turbine_id'].'" AND MONTH(DOM)=MONTH(NOW())';
		$CurMonthTotalHours		= $this->ExecuteQuery($GetQuerys2, "select");
		$objSmarty->assign('CurMonthTotalHours', $CurMonthTotalHours);
		}*/

}
}
/**************************************************************************************************************************************************************/
function GetTodayHours(){
    global $objSmarty;
if($_SESSION['CustomerId'] == 'CUS1001')
{
		$GetQuery1 = 'SELECT SUM(HOURS) AS Hours FROM arka_today_production_hrs WHERE status="1" AND DATE(DOM)=DATE(NOW()) AND MACHINE_ID IN(SELECT turbine_id FROM arka_turbine_reg_master  WHERE `record_status` ="1" AND `customer_id` = "'.$_GET['customer_id'].'") ';
		$TodayTotalHours		= $this->ExecuteQuery($GetQuery1, "select");
		$objSmarty->assign('TodayTotalHours', $TodayTotalHours);
}
else
{       

      $GetQuerys2 = 'SELECT SUM(arka_today_production_hrs.HOURS) AS Hours, arka_turbine_reg_master.turbine_id  FROM arka_today_production_hrs , arka_turbine_reg_master WHERE  arka_today_production_hrs.status="1" AND arka_today_production_hrs.MACHINE_ID = arka_turbine_reg_master.turbine_id AND arka_turbine_reg_master.record_status = "1" AND arka_turbine_reg_master.customer_id = "'.$_SESSION['CustomerId'].'" AND DATE(arka_today_production_hrs.DOM)=DATE(NOW())';
        $TodayTotalHours		= $this->ExecuteQuery($GetQuerys2, "select");
		$objSmarty->assign('TodayTotalHours', $TodayTotalHours);
		/*$GetQuerys1 = 'SELECT turbine_id FROM arka_turbine_reg_master WHERE record_status="1" AND customer_id = "'.$_SESSION['CustomerId'].'"';
		$TurbineList		= $this->ExecuteQuery($GetQuerys1, "select");
		$objSmarty->assign('TurbineList', $TurbineList);
		foreach($TurbineList as $key=>$value)
		{
		$GetQuerys2 = 'SELECT SUM(HOURS) AS Hours FROM arka_today_production_hrs WHERE status="1" AND MACHINE_ID="'.$TurbineList[$key]['turbine_id'].'" AND MONTH(DOM)=MONTH(NOW())';
		$TodayTotalHours		= $this->ExecuteQuery($GetQuerys2, "select");
		$objSmarty->assign('TodayTotalHours', $TodayTotalHours);
		}*/

}
}
/********************************************************************************************************************************************************/
 function GetAlarmLog()  
 {

		global $objSmarty;
	//	$this1 = $_GET['id'];
		 $query_rs1 = 'select * from vestas_alarm_log,arka_turbine_reg_master where MACHINE_ID="1001"  and DATE(M_TIMESTAMP) = DATE(CURDATE())';
 		$AlarmList		= $this->ExecuteQuery($query_rs1, "select");
	/*	print_r ($AlarmList);exit;*/
	
	if(!empty($AlarmList) && is_array($AlarmList))
	
	foreach($AlarmList as $alarmkey=>$value){
 		//$ts = stripslashes($AlarmList[$alarmkey]['M_TIMESTAMP']);
		$ts = $AlarmList[$alarmkey]['M_TIMESTAMP'];
	
		   $ts_rs1 = "SELECT CONVERT_TZ('$ts', '+00:00', '+12:30') AS TZ";
	       $Timezone		= $this->ExecuteQuery($ts_rs1, "select");
		   if(!empty($Timezone) && is_array($Timezone))
				foreach($Timezone as $timekey=>$value)
 					$Timezone[$timekey]['TZ'] = stripslashes($Timezone[$timekey]['TZ']);
					
	        		$tz = $Timezone[$timekey]['TZ'];
	        		//echo $tz;
				$e_id = stripslashes($AlarmList[$alarmkey]['ERROR_ID']);
			
	 if(($e_id <> '56484') && ($e_id <> '24145') && ($e_id <> '57332') && ($e_id <> '34376') && ($e_id <> '54235') && ($e_id <> '55164'))
	 	{
			 $e_id = stripslashes($AlarmList[$alarmkey]['ERROR_ID']);
		}
		else
		{
			if($AlarmList[$alarmkey]['DT9']<>'20' && $AlarmList[$alarmkey]['DT9']<>'94') 
				$e_id = $AlarmList[$alarmkey]['DT9'] - $AlarmList[$alarmkey]['DT3'];
			elseif($AlarmList[$alarmkey]['DT9']=='94')
				$e_id = $AlarmList[$alarmkey]['DT11'];
			else
				$e_id = $AlarmList[$alarmkey]['DT8'];
		
			if($e_id =='223' && $AlarmList[$alarmkey]['DT9'] <> '20')
				echo $e_id = $e_id - $AlarmList[$alarmkey]['DT11'];
			else
				echo $e_id;
		}	
			$query_rs2 = "select * from vestas_error_details where ERROR_ID =$e_id";
			$ErrorDesc		= $this->ExecuteQuery($query_rs2, "select");
		   if(!empty($ErrorDesc) && is_array($ErrorDesc))
		   			foreach($ErrorDesc as $desckey=>$value)
 						$ErrorDesc[$desckey]['DESCRIPTION'] = stripslashes($ErrorDesc[$desckey]['DESCRIPTION']);
						
						$desc =$ErrorDesc[$desckey]['DESCRIPTION'];
	 					//echo $desc;
						$InsQuery = 'INSERT  INTO `vestas_temp_alarm_log`(`MACHINE_ID`, `ERROR_ID`, `DESCRIPTION`, `M_TIMESTAMP`) VALUES("1001","'.$e_id.'","'.$desc.'","'.$tz.'")';
  	                 $this->ExecuteQuery($InsQuery, 'insert');
						
	}
	
	
	
}

 
 //**********************************************************************************************************************************************************
function GetSCADATurbines()  {
		global $objSmarty;
		
	  $SelQuerys	= 'SELECT DISTINCT make FROM `arka_turbine_reg_master` WHERE `record_status` ="1"';
	  $DasDetail	= $this->ExecuteQuery($SelQuerys, 'select');
	  $objSmarty->assign('DasDetail', $DasDetail);
		
		foreach($DasDetail as $count=>$value)
			{
 				 $DasDetail[$count]['Make'] = stripslashes($DasDetail[$count]['make']);			
		if($_SESSION['CustomerId'] =='CUS1001'){ 	
			 if($DasDetail[$count]['Make'] =='Vestas'){
			 
								$SelQuery2 = 'SELECT  `arka_turbine_reg_master`.turbine_id,  `arka_turbine_reg_master`.customer_name,  `arka_turbine_reg_master`.turbine_htsc_no, `arka_turbine_reg_master`.location_no,  `arka_turbine_reg_master`.site_name,  `arka_turbine_reg_master`.make,  `vestas_overview_view` . *, `vestas_error_details`.*,CONVERT_TZ(`vestas_overview_view`.M_TIMESTAMP,  "+00:00",  "+12:30" ) AS TZ, CONVERT_TZ(`vestas_overview_view`.M_TIMESTAMP,  "+00:00",  "+12:30" ) AS VDATE, CONVERT_TZ(`vestas_overview_view`.M_TIMESTAMP,  "+00:00",  "+13:00") AS VDT FROM  `arka_turbine_reg_master`,  `vestas_overview_view`,`vestas_error_details` WHERE  `vestas_overview_view`.MACHINE_ID =  `arka_turbine_reg_master`.turbine_id AND  `arka_turbine_reg_master`.make =  "Vestas" AND `arka_turbine_reg_master`.customer_id =  "'.$_GET['customer_id'].'" AND vestas_overview_view.STATUS = vestas_error_details.ERROR_ID  ORDER BY  `arka_turbine_reg_master`.turbine_id' ;	

								if(vestas_overview_view.STATUS == vestas_error_details.ERROR_ID)	
								{
								$SelQuery = 'SELECT  `arka_turbine_reg_master`.turbine_id,  `arka_turbine_reg_master`.customer_name,  `arka_turbine_reg_master`.turbine_htsc_no, `arka_turbine_reg_master`.location_no,  `arka_turbine_reg_master`.site_name,  `arka_turbine_reg_master`.make,  `vestas_overview_view` . *, `vestas_error_details`.*,CONVERT_TZ(`vestas_overview_view`.M_TIMESTAMP,  "+00:00",  "+12:30" ) AS TZ, CONVERT_TZ(`vestas_overview_view`.M_TIMESTAMP,  "+00:00",  "+12:30" ) AS VDATE, CONVERT_TZ(`vestas_overview_view`.M_TIMESTAMP,  "+00:00",  "+13:00") AS VDT FROM  `arka_turbine_reg_master`,  `vestas_overview_view`,`vestas_error_details` WHERE  `vestas_overview_view`.MACHINE_ID =  `arka_turbine_reg_master`.turbine_id AND  `arka_turbine_reg_master`.make =  "Vestas" AND `arka_turbine_reg_master`.customer_id =  "'.$_GET['customer_id'].'" AND vestas_overview_view.STATUS = vestas_error_details.ERROR_ID  ORDER BY  `arka_turbine_reg_master`.turbine_id' ;	
								}
								else{
								$SelQuery = 'SELECT  `arka_turbine_reg_master`.turbine_id,  `arka_turbine_reg_master`.customer_name,  `arka_turbine_reg_master`.turbine_htsc_no, `arka_turbine_reg_master`.location_no,  `arka_turbine_reg_master`.site_name,  `arka_turbine_reg_master`.make,  `vestas_overview_view` . *,CONVERT_TZ(`vestas_overview_view`.M_TIMESTAMP,  "+00:00",  "+12:30" ) AS TZ, CONVERT_TZ(`vestas_overview_view`.M_TIMESTAMP,  "+00:00",  "+12:30" ) AS VDATE, CONVERT_TZ(`vestas_overview_view`.M_TIMESTAMP,  "+00:00",  "+13:00") AS VDT FROM  `arka_turbine_reg_master`,  `vestas_overview_view` WHERE  `vestas_overview_view`.MACHINE_ID =  `arka_turbine_reg_master`.turbine_id AND  `arka_turbine_reg_master`.make =  "Vestas" AND `arka_turbine_reg_master`.customer_id =  "'.$_GET['customer_id'].'" ORDER BY  `arka_turbine_reg_master`.turbine_id' ;
								}
			$VestasList		= $this->ExecuteQuery($SelQuery, "select");
        	$objSmarty->assign('VestasList', $VestasList);	
					}
				elseif($DasDetail[$count]['Make'] =='NEPC'){
				/*$SelQuery2 = 'SELECT`arka_turbine_reg_master`.turbine_id, `arka_turbine_reg_master`.customer_id, `arka_turbine_reg_master`.customer_name, `arka_turbine_reg_master`.turbine_htsc_no,`arka_turbine_reg_master`.location_no,  `arka_turbine_reg_master`.site_name,`arka_turbine_reg_master`.make,`nepc_std_data_view`.*, CONVERT_TZ(`nepc_std_data_view`.M_TIMESTAMP,  "+00:00",  "+00:00" ) AS TZ, DATE(CONVERT_TZ(`nepc_std_data_view`.M_TIMESTAMP,  "+00:00",  "+00:00" )) AS VDATE FROM  `arka_turbine_reg_master`,`nepc_std_data_view` WHERE `nepc_std_data_view`.MACHINE_ID = `arka_turbine_reg_master`.turbine_id AND  `arka_turbine_reg_master`.make = "NEPC" ORDER BY `arka_turbine_reg_master`.turbine_id' ;*/
								$SelQuery2 = 'SELECT`arka_turbine_reg_master`.turbine_id, `arka_turbine_reg_master`.customer_id, `arka_turbine_reg_master`.customer_name, `arka_turbine_reg_master`.turbine_htsc_no,`arka_turbine_reg_master`.location_no,  `arka_turbine_reg_master`.site_name,`arka_turbine_reg_master`.make,`nepc_std_data_view`.*, CONVERT_TZ(`nepc_std_data_view`.M_SERVER_TIMESTAMP,  "+00:00",  "+12:30" ) AS TZ, CONVERT_TZ(`nepc_std_data_view`.M_SERVER_TIMESTAMP,  "+00:00",  "+12:30" ) AS VDATE , CONVERT_TZ(`nepc_std_data_view`.M_SERVER_TIMESTAMP,  "+00:00",  "+13:00") AS VDT FROM  `arka_turbine_reg_master`,`nepc_std_data_view` WHERE `nepc_std_data_view`.MACHINE_ID = `arka_turbine_reg_master`.turbine_id AND  `arka_turbine_reg_master`.make = "NEPC" AND `arka_turbine_reg_master`.customer_id =  "'.$_GET['customer_id'].'" ORDER BY `arka_turbine_reg_master`.turbine_id' ;

				$NepcList		= $this->ExecuteQuery($SelQuery2, "select");
        		$objSmarty->assign('NepcList', $NepcList);	
				}
				elseif($DasDetail[$count]['Make'] =='TTG'){
				$SelQuery3 = 'SELECT`arka_turbine_reg_master`.turbine_id, `arka_turbine_reg_master`.customer_id, `arka_turbine_reg_master`.customer_name, `arka_turbine_reg_master`.turbine_htsc_no,`arka_turbine_reg_master`.location_no,  `arka_turbine_reg_master`.site_name,`arka_turbine_reg_master`.make,`ttg_std_data_view`.*, CONVERT_TZ(`ttg_std_data_view`.M_TIMESTAMP,  "+00:00",  "+12:30" ) AS TZ, DATE(CONVERT_TZ(`ttg_std_data_view`.M_TIMESTAMP,  "+00:00",  "+12:30" )) AS VDATE FROM  `arka_turbine_reg_master`,`ttg_std_data_view` WHERE `ttg_std_data_view`.MACHINE_ID = `arka_turbine_reg_master`.turbine_id AND  `arka_turbine_reg_master`.make = "TTG" ORDER BY `arka_turbine_reg_master`.turbine_id' ;
				$TTGList		= $this->ExecuteQuery($SelQuery3, "select");
        		$objSmarty->assign('TTGList', $TTGList);	
				}
				elseif($DasDetail[$count]['Make'] =='Pioneer'){
				$SelQuery4 = 'SELECT`arka_turbine_reg_master`.turbine_id, `arka_turbine_reg_master`.customer_id, `arka_turbine_reg_master`.customer_name, `arka_turbine_reg_master`.turbine_htsc_no,`arka_turbine_reg_master`.location_no,  `arka_turbine_reg_master`.site_name,`arka_turbine_reg_master`.make,`pioneer_std_data_view`.*, CONVERT_TZ(`pioneer_std_data_view`.M_TIMESTAMP,  "+00:00",  "+12:30" ) AS TZ, DATE(CONVERT_TZ(`pioneer_std_data_view`.M_TIMESTAMP,  "+00:00",  "+12:30" )) AS VDATE FROM  `arka_turbine_reg_master`,`pioneer_std_data_view` WHERE `pioneer_std_data_view`.MACHINE_ID = `arka_turbine_reg_master`.turbine_id AND  `arka_turbine_reg_master`.make = "Pioneer" ORDER BY `arka_turbine_reg_master`.turbine_id' ;
				$PioneerList		= $this->ExecuteQuery($SelQuery4, "select");
        		$objSmarty->assign('PioneerList', $PioneerList);	
				}
				}
		else{
		 if($DasDetail[$count]['Make'] =='Vestas' ){
			$SelQuery2 = 'SELECT  `arka_turbine_reg_master`.turbine_id,  `arka_turbine_reg_master`.customer_name,  `arka_turbine_reg_master`.turbine_htsc_no, `arka_turbine_reg_master`.location_no,  `arka_turbine_reg_master`.site_name,  `arka_turbine_reg_master`.make,  `vestas_overview_view` . *, `vestas_error_details`.*,CONVERT_TZ(`vestas_overview_view`.M_TIMESTAMP,  "+00:00",  "+12:30" ) AS TZ, CONVERT_TZ(`vestas_overview_view`.M_TIMESTAMP,  "+00:00",  "+12:30" ) AS VDATE, CONVERT_TZ(`vestas_overview_view`.M_TIMESTAMP,  "+00:00",  "+13:00") AS VDT FROM `arka_turbine_reg_master`,`vestas_overview_view`,vestas_error_details  WHERE `vestas_overview_view`.MACHINE_ID = `arka_turbine_reg_master`.turbine_id AND `arka_turbine_reg_master`.make = "Vestas" AND `arka_turbine_reg_master`.customer_id ="'.$_SESSION['CustomerId'].'" AND vestas_overview_view.STATUS = vestas_error_details.ERROR_ID  ORDER BY `arka_turbine_reg_master`.turbine_id' ;
			if(vestas_overview_view.STATUS == vestas_error_details.ERROR_ID)	
								{
								$SelQuery = 'SELECT  `arka_turbine_reg_master`.turbine_id,  `arka_turbine_reg_master`.customer_name,  `arka_turbine_reg_master`.turbine_htsc_no, `arka_turbine_reg_master`.location_no,  `arka_turbine_reg_master`.site_name,  `arka_turbine_reg_master`.make,  `vestas_overview_view` . *, `vestas_error_details`.*,CONVERT_TZ(`vestas_overview_view`.M_TIMESTAMP,  "+00:00",  "+12:30" ) AS TZ, CONVERT_TZ(`vestas_overview_view`.M_TIMESTAMP,  "+00:00",  "+12:30" ) AS VDATE, CONVERT_TZ(`vestas_overview_view`.M_TIMESTAMP,  "+00:00",  "+13:00") AS VDT FROM  `arka_turbine_reg_master`,  `vestas_overview_view`,`vestas_error_details` WHERE  `vestas_overview_view`.MACHINE_ID =  `arka_turbine_reg_master`.turbine_id  AND `arka_turbine_reg_master`.customer_id ="'.$_SESSION['CustomerId'].'"AND  `arka_turbine_reg_master`.make =  "Vestas" AND vestas_overview_view.STATUS = vestas_error_details.ERROR_ID  ORDER BY  `arka_turbine_reg_master`.turbine_id' ;	
								}
								else{
								$SelQuery = 'SELECT  `arka_turbine_reg_master`.turbine_id,  `arka_turbine_reg_master`.customer_name,  `arka_turbine_reg_master`.turbine_htsc_no, `arka_turbine_reg_master`.location_no,  `arka_turbine_reg_master`.site_name,  `arka_turbine_reg_master`.make,  `vestas_overview_view` . *,CONVERT_TZ(`vestas_overview_view`.M_TIMESTAMP,  "+00:00",  "+12:30" ) AS TZ, CONVERT_TZ(`vestas_overview_view`.M_TIMESTAMP,  "+00:00",  "+12:30" ) AS VDATE, CONVERT_TZ(`vestas_overview_view`.M_TIMESTAMP,  "+00:00",  "+13:00") AS VDT FROM  `arka_turbine_reg_master`,  `vestas_overview_view` WHERE  `vestas_overview_view`.MACHINE_ID =  `arka_turbine_reg_master`.turbine_id   AND `arka_turbine_reg_master`.customer_id ="'.$_SESSION['CustomerId'].'"AND  `arka_turbine_reg_master`.make =  "Vestas"  ORDER BY  `arka_turbine_reg_master`.turbine_id' ;
								}
			$VestasList		= $this->ExecuteQuery($SelQuery, "select");
        	$objSmarty->assign('VestasList', $VestasList);	 }
			elseif($DasDetail[$count]['Make'] =='NEPC')
			{
			$SelQuery2 = 'SELECT`arka_turbine_reg_master`.turbine_id, `arka_turbine_reg_master`.customer_id, `arka_turbine_reg_master`.customer_name, `arka_turbine_reg_master`.turbine_htsc_no,`arka_turbine_reg_master`.location_no,  `arka_turbine_reg_master`.site_name,`arka_turbine_reg_master`.make,`nepc_std_data_view`.*, CONVERT_TZ(`nepc_std_data_view`.M_SERVER_TIMESTAMP,  "+00:00",  "+12:30" ) AS TZ, CONVERT_TZ(`nepc_std_data_view`.M_SERVER_TIMESTAMP,  "+00:00",  "+12:30" ) AS VDATE,CONVERT_TZ(`nepc_std_data_view`.M_SERVER_TIMESTAMP,  "+00:00",  "+13:00") AS VDT FROM  `arka_turbine_reg_master`,`nepc_std_data_view` WHERE `nepc_std_data_view`.MACHINE_ID = `arka_turbine_reg_master`.turbine_id AND  `arka_turbine_reg_master`.make = "NEPC" AND `arka_turbine_reg_master`.customer_id ="'.$_SESSION['CustomerId'].'" ORDER BY `arka_turbine_reg_master`.turbine_id' ;
				$NepcList		= $this->ExecuteQuery($SelQuery2, "select");
        		$objSmarty->assign('NepcList', $NepcList);	
			}
			elseif($DasDetail[$count]['Make'] =='TTG')
			{
			
			
			$SelQuery3 = 'SELECT`arka_turbine_reg_master`.turbine_id, `arka_turbine_reg_master`.customer_id, `arka_turbine_reg_master`.customer_name, `arka_turbine_reg_master`.turbine_htsc_no,`arka_turbine_reg_master`.location_no,  `arka_turbine_reg_master`.site_name,`arka_turbine_reg_master`.make,`ttg_std_data_view`.*, CONVERT_TZ(`ttg_std_data_view`.M_TIMESTAMP,  "+00:00",  "+12:30" ) AS TZ, DATE(CONVERT_TZ(`ttg_std_data_view`.M_TIMESTAMP,  "+00:00",  "+12:30" )) AS VDATE FROM  `arka_turbine_reg_master`,`ttg_std_data_view` WHERE `ttg_std_data_view`.MACHINE_ID = `arka_turbine_reg_master`.turbine_id AND `arka_turbine_reg_master`.make = "TTG" AND `arka_turbine_reg_master`.customer_id ="'.$_SESSION['CustomerId'].'" ORDER BY `arka_turbine_reg_master`.turbine_id' ;
				$TTGList		= $this->ExecuteQuery($SelQuery3, "select");
        		$objSmarty->assign('TTGList', $TTGList);	
			}
			elseif($DasDetail[$count]['Make'] == 'Pioneer')
			{
			$SelQuery4 = 'SELECT`arka_turbine_reg_master`.turbine_id, `arka_turbine_reg_master`.customer_id, `arka_turbine_reg_master`.customer_name, `arka_turbine_reg_master`.turbine_htsc_no,`arka_turbine_reg_master`.location_no,  `arka_turbine_reg_master`.site_name,`arka_turbine_reg_master`.make,`pioneer_std_data_view`.*, CONVERT_TZ(`pioneer_std_data_view`.M_TIMESTAMP,  "+00:00",  "+12:30" ) AS TZ, DATE(CONVERT_TZ(`pioneer_std_data_view`.M_TIMESTAMP,  "+00:00",  "+12:30" )) AS VDATE FROM  `arka_turbine_reg_master`,`pioneer_std_data_view` WHERE `pioneer_std_data_view`.MACHINE_ID = `arka_turbine_reg_master`.turbine_id AND  `arka_turbine_reg_master`.make = "Pioneer" AND `arka_turbine_reg_master`.customer_id ="'.$_SESSION['CustomerId'].'" ORDER BY `arka_turbine_reg_master`.turbine_id' ;
				$PioneerList		= $this->ExecuteQuery($SelQuery4, "select");
        		$objSmarty->assign('PioneerList', $PioneerList);	
			}
			}
			}
			$SCADAList		= $this->ExecuteQuery($SelQuery, "select");
        	$objSmarty->assign('SCADAList', $SCADAList);	
		
	}	
/*	function GetSCADATurbines()  {
		global $objSmarty;

		if($_SESSION['CustomerId'] =='CUS1001')
					$SelQuery = 'SELECT `arka_cus_reg_master`.customer_id, `arka_turbine_reg_master`.turbine_id, `arka_turbine_reg_master`.customer_id,`arka_turbine_reg_master`.turbine_htsc_no, `arka_turbine_reg_master`.location_no,`arka_turbine_reg_master`.customer_name,`arka_turbine_reg_master`.village_name, `arka_turbine_reg_master`.site_name,`arka_turbine_reg_master`.make,`vestas_overview_view`.*, CONVERT_TZ(vestas_overview_view.M_TIMESTAMP,  "+00:00",  "+12:30" ) AS TZ, DATE(CONVERT_TZ(vestas_overview_view.M_TIMESTAMP,  "+00:00",  "+12:30" )) AS VDATE FROM `arka_cus_reg_master`, `arka_turbine_reg_master`,`vestas_overview_view` WHERE `vestas_overview_view`.MACHINE_ID = `arka_turbine_reg_master`.turbine_id AND  `arka_turbine_reg_master`.customer_id = `arka_cus_reg_master`.customer_id ORDER BY `arka_turbine_reg_master`.turbine_id' ;
				
		else
			$SelQuery = 'SELECT `arka_cus_reg_master`.customer_id, `arka_turbine_reg_master`.turbine_id, `arka_turbine_reg_master`.customer_id,`arka_turbine_reg_master`.turbine_htsc_no, `arka_turbine_reg_master`.location_no, `arka_turbine_reg_master`.village_name, `arka_turbine_reg_master`.site_name,`arka_turbine_reg_master`.make,`vestas_overview_view`.*, CONVERT_TZ(vestas_overview_view.M_TIMESTAMP,  "+00:00",  "+12:30" ) AS TZ, DATE(CONVERT_TZ(vestas_overview_view.M_TIMESTAMP,  "+00:00",  "+12:30" )) AS VDATE FROM `arka_cus_reg_master`, `arka_turbine_reg_master`,`vestas_overview_view` WHERE `vestas_overview_view`.MACHINE_ID = `arka_turbine_reg_master`.turbine_id AND `arka_cus_reg_master`.customer_id ="'.$_SESSION['CustomerId'].'" AND  `arka_turbine_reg_master`.customer_id = `arka_cus_reg_master`.customer_id ORDER BY `arka_turbine_reg_master`.turbine_id' ;
								
			
			$SCADAList		= $this->ExecuteQuery($SelQuery, "select");
        	$objSmarty->assign('SCADAList', $SCADAList);	
	}*/
	function GetSCADATurbines2()  {
		global $objSmarty;

		if($_SESSION['CustomerId'] =='CUS1001')
				$SelQuery = 'SELECT `arka_cus_reg_master`.customer_id, `arka_turbine_reg_master`.turbine_id, `arka_turbine_reg_master`.customer_id,`arka_turbine_reg_master`.turbine_htsc_no, `arka_turbine_reg_master`.location_no, `arka_turbine_reg_master`.village_name, `arka_turbine_reg_master`.site_name,`arka_turbine_reg_master`.make,`arka_turbine_reg_master`.customer_name,`nepc_std_data_view`.*, nepc_std_data_view.M_TIMESTAMP AS TZ, DATE(nepc_std_data_view.M_TIMESTAMP) AS VDATE FROM `arka_cus_reg_master`, `arka_turbine_reg_master`,`nepc_std_data_view` WHERE `nepc_std_data_view`.MACHINE_ID = `arka_turbine_reg_master`.turbine_id AND  `arka_turbine_reg_master`.customer_id = `arka_cus_reg_master`.customer_id ORDER BY `arka_turbine_reg_master`.turbine_id' ;
				
		else
			$SelQuery = 'SELECT `arka_cus_reg_master`.customer_id, `arka_turbine_reg_master`.turbine_id, `arka_turbine_reg_master`.customer_id,`arka_turbine_reg_master`.turbine_htsc_no, `arka_turbine_reg_master`.location_no, `arka_turbine_reg_master`.village_name, `arka_turbine_reg_master`.site_name,`arka_turbine_reg_master`.make,`nepc_std_data_view`.*, nepc_std_data_view.M_TIMESTAMP AS TZ, DATE(nepc_std_data_view.M_TIMESTAMP) AS VDATE FROM `arka_cus_reg_master`, `arka_turbine_reg_master`,`nepc_std_data_view` WHERE `nepc_std_data_view`.MACHINE_ID = `arka_turbine_reg_master`.turbine_id AND `arka_cus_reg_master`.customer_id ="'.$_SESSION['CustomerId'].'" AND  `arka_turbine_reg_master`.customer_id = `arka_cus_reg_master`.customer_id ORDER BY `arka_turbine_reg_master`.turbine_id' ;
											
			
			$SCADAList2		= $this->ExecuteQuery($SelQuery, "select");
        	$objSmarty->assign('SCADAList2', $SCADAList2);	
	}
//**************************************************************************************************************************************************************
function GetStatus($objArray='')  {
		global $objSmarty;
		 $SelQuerys	= 'SELECT DISTINCT make FROM `arka_turbine_reg_master` WHERE `record_status` ="1"';
	  $DasDetail	= $this->ExecuteQuery($SelQuerys, 'select');
	  $objSmarty->assign('DasDetail', $DasDetail);
		
		foreach($DasDetail as $count=>$value)
			{
 		$DasDetail[$count]['Make'] = stripslashes($DasDetail[$count]['make']);			
		if($_SESSION['CustomerId'] =='CUS1001'){ 	
	
			 if($DasDetail[$count]['Make'] =='Vestas')
			 { 
		 $RunQuery = 'SELECT count(*) as runcount FROM `vestas_overview_view` WHERE (vestas_overview_view.STATUS="225" OR vestas_overview_view.STATUS="15") AND ((CONVERT_TZ(vestas_overview_view.M_TIMESTAMP, "+00:00", "+12:30") = CONVERT_TZ(NOW(),"+00:00" , "+12:30")) OR (CONVERT_TZ(NOW(),"+00:00" , "+12:30") <= CONVERT_TZ(vestas_overview_view.M_TIMESTAMP, "+00:00", "+13:00"))) AND vestas_overview_view.MACHINE_ID IN
(SELECT turbine_id FROM arka_turbine_reg_master  WHERE `record_status` ="1" AND `customer_id` = "'.$_GET['customer_id'].'")' ;
		$RunList		= $this->ExecuteQuery($RunQuery, "select");
        $objSmarty->assign('RunList', $RunList);
		//echo $RunList[0][runcount];
		
		 $No_CommQuery = 'SELECT count(*) as no_comm_count FROM `vestas_overview_view`
WHERE (((vestas_overview_view.STATUS="225" OR vestas_overview_view.STATUS="15") OR (vestas_overview_view.STATUS<>"225" OR vestas_overview_view.STATUS<>"15") )
AND (CONVERT_TZ(NOW(),"+00:00" , "+12:30") > (CONVERT_TZ(vestas_overview_view.M_TIMESTAMP , "+00:00", "+13:00")) AND vestas_overview_view.STATUS <> "0" )) 
AND vestas_overview_view.MACHINE_ID IN
(SELECT turbine_id FROM arka_turbine_reg_master  WHERE `record_status` ="1" AND `customer_id` = "'.$_GET['customer_id'].'")';
		$No_CommList		= $this->ExecuteQuery($No_CommQuery, "select");
        $objSmarty->assign('No_CommList', $No_CommList);
				//echo $No_CommList[0][no_comm_count];

		
		 $GridQuery = 'SELECT count(*) as gridcount FROM `vestas_overview_view` WHERE vestas_overview_view.STATUS="0"  AND vestas_overview_view.MACHINE_ID IN(SELECT turbine_id FROM arka_turbine_reg_master  WHERE `record_status` ="1" AND `customer_id` = "'.$_GET['customer_id'].'") ' ;
		$GridList		= $this->ExecuteQuery($GridQuery, "select");
        $objSmarty->assign('GridList', $GridList);
			//	echo $GridList[0][gridcount];

		
/*		$GridQuery = 'SELECT count(*) as gridcount FROM `vestas_overview_view`,`arka_turbine_reg_master` WHERE vestas_overview_view.STATUS="0"  AND (DATE(CONVERT_TZ(vestas_overview_view.M_TIMESTAMP, "+00:00", "+12:30")) <> DATE(DATE_ADD(NOW(),INTERVAL "12:30" HOUR_MINUTE))) AND vestas_overview_view.MACHINE_ID = arka_turbine_reg_master.turbine_id  ' ;
		$GridList		= $this->ExecuteQuery($GridQuery, "select");
        $objSmarty->assign('GridList', $GridList);
		
*/		
		$OtherQuery = 'SELECT count(*) as othercount FROM `vestas_overview_view` WHERE (((CONVERT_TZ(vestas_overview_view.M_TIMESTAMP, "+00:00", "+12:30") = CONVERT_TZ(NOW(), "+00:00", "+12:30")) OR (CONVERT_TZ(NOW(), "+00:00", "+12:30")< CONVERT_TZ(`vestas_overview_view`.M_TIMESTAMP,  "+00:00",  "+13:00"))) AND ((vestas_overview_view.STATUS <> "225") AND (vestas_overview_view.STATUS <> "0")))  AND vestas_overview_view.MACHINE_ID IN
(SELECT turbine_id FROM arka_turbine_reg_master  WHERE `record_status` ="1" AND `customer_id` = "'.$_GET['customer_id'].'") ' ;
		$OtherList		= $this->ExecuteQuery($OtherQuery, "select");
        $objSmarty->assign('OtherList', $OtherList);
			//	echo $OtherList[0][othercount];

		
		 $TotalQuery = 'SELECT count(*) as totalcount FROM `vestas_overview_view` WHERE  vestas_overview_view.MACHINE_ID IN
(SELECT turbine_id FROM arka_turbine_reg_master  WHERE `record_status` ="1" AND `customer_id` = "'.$_GET['customer_id'].'") ' ;
		$TotalList		= $this->ExecuteQuery($TotalQuery, "select");
        $objSmarty->assign('TotalList', $TotalList);
				//echo $TotalList[0][totalcount];

			}
		elseif($DasDetail[$count]['Make'] =='NEPC')
			{
			$RunQuery = 'SELECT count(*) as runcount FROM `nepc_std_data_view` WHERE nepc_std_data_view.STATUS="49"  AND ((CONVERT_TZ(nepc_std_data_view.M_SERVER_TIMESTAMP, "+00:00", "+12:30") = CONVERT_TZ(NOW(),"+00:00" , "+12:30")) OR (CONVERT_TZ(NOW(),"+00:00" , "+12:30") <= CONVERT_TZ(nepc_std_data_view.M_SERVER_TIMESTAMP, "+00:00", "+13:00"))) AND nepc_std_data_view.MACHINE_ID IN (SELECT turbine_id FROM arka_turbine_reg_master  WHERE `record_status` ="1" AND `customer_id` = "'.$_GET['customer_id'].'")' ;
		$RunList1		= $this->ExecuteQuery($RunQuery, "select");
        $objSmarty->assign('RunList1', $RunList1);
	//	echo $RunList1[0]['runcount'];
		
	 $No_CommQuery = 'SELECT count(*) as no_comm_count FROM `nepc_std_data_view` WHERE ((nepc_std_data_view.STATUS="49" OR nepc_std_data_view.STATUS<>"19") AND (CONVERT_TZ(NOW(),"+00:00" , "+12:30") > (CONVERT_TZ(nepc_std_data_view.M_SERVER_TIMESTAMP , "+00:00", "+13:00"))) AND nepc_std_data_view.STATUS <> "0" ) AND nepc_std_data_view.MACHINE_ID IN (SELECT turbine_id FROM arka_turbine_reg_master  WHERE `record_status` ="1" AND `customer_id` = "'.$_GET['customer_id'].'")';
		$No_CommList1		= $this->ExecuteQuery($No_CommQuery, "select");
        $objSmarty->assign('No_CommList1', $No_CommList1);
//echo $No_CommList1[0]['no_comm_count'];

		$GridQuery = 'SELECT count(*) as gridcount FROM `nepc_std_data_view` WHERE nepc_std_data_view.STATUS="19"  AND nepc_std_data_view.MACHINE_ID IN
(SELECT turbine_id FROM arka_turbine_reg_master  WHERE `record_status` ="1" AND `customer_id` = "'.$_GET['customer_id'].'") ' ;
		$GridList1		= $this->ExecuteQuery($GridQuery, "select");
        $objSmarty->assign('GridList1', $GridList1);
		/*$GridList1		= $this->ExecuteQuery($GridQuery, "select");
        $objSmarty->assign('GridList1', $GridList1);*/
		//echo $GridList1[0][gridcount];

       $CommFailQuery = 'SELECT count(*) as commFail FROM `nepc_std_data_view` WHERE nepc_std_data_view.STATUS="101"  AND nepc_std_data_view.MACHINE_ID IN
(SELECT turbine_id FROM arka_turbine_reg_master  WHERE `record_status` ="1" AND `customer_id` = "'.$_GET['customer_id'].'")  ' ;
		$CommList1		= $this->ExecuteQuery($CommFailQuery, "select");
        $objSmarty->assign('CommList1', $CommList1);
			
		$OtherQuery = 'SELECT count(*) as othercount FROM `nepc_std_data_view` WHERE (((CONVERT_TZ(nepc_std_data_view.M_SERVER_TIMESTAMP, "+00:00", "+12:30") = CONVERT_TZ(NOW(), "+00:00", "+12:30")) OR (CONVERT_TZ(NOW(), "+00:00", "+12:30")< CONVERT_TZ(`nepc_std_data_view`.M_SERVER_TIMESTAMP,  "+00:00",  "+13:00"))) AND ((nepc_std_data_view.STATUS <> "49") AND (nepc_std_data_view.STATUS <> "19") AND (nepc_std_data_view.STATUS <> "0" OR nepc_std_data_view.STATUS = "0")))  AND nepc_std_data_view.MACHINE_ID IN(SELECT turbine_id FROM arka_turbine_reg_master  WHERE `record_status` ="1" AND `customer_id` = "'.$_GET['customer_id'].'")' ;
		$OtherList1		= $this->ExecuteQuery($OtherQuery, "select");
        $objSmarty->assign('OtherList1', $OtherList1);
		//echo $OtherList1[0][othercount];
		
      $TotalQuery = 'SELECT count(*) as totalcount FROM `nepc_std_data_view` WHERE  nepc_std_data_view.MACHINE_ID IN
(SELECT turbine_id FROM arka_turbine_reg_master  WHERE `record_status` ="1" AND `customer_id` = "'.$_GET['customer_id'].'") ' ;
		$TotalList1		= $this->ExecuteQuery($TotalQuery, "select");
        $objSmarty->assign('TotalList1', $TotalList1);
//echo $TotalList1[0][totalcount];		
	     }
		}
		else
			{
		 if($DasDetail[$count]['Make'] =='Vestas')
			 { 
		$RunQuery = 'SELECT count(*) as runcount FROM `vestas_overview_view`,`arka_turbine_reg_master` WHERE (vestas_overview_view.STATUS="225" OR vestas_overview_view.STATUS="15") AND ((CONVERT_TZ(vestas_overview_view.M_TIMESTAMP, "+00:00", "+12:30") = CONVERT_TZ(NOW(),"+00:00" , "+12:30")) OR (CONVERT_TZ(NOW(),"+00:00" , "+12:30") <= CONVERT_TZ(vestas_overview_view.M_TIMESTAMP, "+00:00", "+13:00"))) AND vestas_overview_view.MACHINE_ID = arka_turbine_reg_master.turbine_id AND arka_turbine_reg_master.customer_id="'.$_SESSION['CustomerId'].'" ' ;
		$RunList		= $this->ExecuteQuery($RunQuery, "select");
        $objSmarty->assign('RunList', $RunList);
		
		$No_CommQuery = 'SELECT count(*) as no_comm_count FROM `vestas_overview_view`,`arka_turbine_reg_master` 
WHERE (((vestas_overview_view.STATUS="225" OR vestas_overview_view.STATUS="15") OR (vestas_overview_view.STATUS<>"225" OR vestas_overview_view.STATUS<>"15") )
AND (CONVERT_TZ(NOW(),"+00:00" , "+12:30") > (CONVERT_TZ(vestas_overview_view.M_TIMESTAMP , "+00:00", "+13:00")))) 
AND vestas_overview_view.MACHINE_ID = arka_turbine_reg_master.turbine_id AND arka_turbine_reg_master.customer_id="'.$_SESSION['CustomerId'].'" ' ;
		$No_CommList		= $this->ExecuteQuery($No_CommQuery, "select");
        $objSmarty->assign('No_CommList', $No_CommList);
		
		$GridQuery = 'SELECT count(*) as gridcount FROM `vestas_overview_view`,`arka_turbine_reg_master` WHERE vestas_overview_view.STATUS="0"  AND (DATE(CONVERT_TZ(vestas_overview_view.M_TIMESTAMP, "+00:00", "+12:30")) <> DATE(DATE_ADD(NOW(),INTERVAL "12:30" HOUR_MINUTE)))  AND vestas_overview_view.MACHINE_ID = arka_turbine_reg_master.turbine_id AND arka_turbine_reg_master.customer_id="'.$_SESSION['CustomerId'].'" ' ;
		$GridList		= $this->ExecuteQuery($GridQuery, "select");
        $objSmarty->assign('GridList', $GridList);
		
		$OtherQuery = 'SELECT count(*) as othercount FROM `vestas_overview_view`,`arka_turbine_reg_master` WHERE (((CONVERT_TZ(vestas_overview_view.M_TIMESTAMP, "+00:00", "+12:30") = CONVERT_TZ(NOW(), "+00:00", "+12:30")) OR (CONVERT_TZ(NOW(), "+00:00", "+12:30")< CONVERT_TZ(`vestas_overview_view`.M_TIMESTAMP,  "+00:00",  "+13:00"))) AND ((vestas_overview_view.STATUS <> "225") AND (vestas_overview_view.STATUS <> "0")))  AND vestas_overview_view.MACHINE_ID = arka_turbine_reg_master.turbine_id  AND arka_turbine_reg_master.customer_id="'.$_SESSION['CustomerId'].'" ' ;
		$OtherList		= $this->ExecuteQuery($OtherQuery, "select");
        $objSmarty->assign('OtherList', $OtherList);
		
		$TotalQuery = 'SELECT count(*) as totalcount FROM `vestas_overview_view`,`arka_turbine_reg_master` WHERE  vestas_overview_view.MACHINE_ID = arka_turbine_reg_master.turbine_id AND arka_turbine_reg_master.customer_id="'.$_SESSION['CustomerId'].'" ' ;
		$TotalList		= $this->ExecuteQuery($TotalQuery, "select");
        $objSmarty->assign('TotalList', $TotalList);
			}
			elseif($DasDetail[$count]['Make'] =='NEPC')
			{
			$RunQuery = 'SELECT count(*) as runcount FROM `nepc_std_data_view`,`arka_turbine_reg_master` WHERE nepc_std_data_view.STATUS="49"  AND ((CONVERT_TZ(nepc_std_data_view.M_SERVER_TIMESTAMP, "+00:00", "+12:30") = CONVERT_TZ(NOW(),"+00:00" , "+12:30")) OR (CONVERT_TZ(NOW(),"+00:00" , "+12:30") <= CONVERT_TZ(nepc_std_data_view.M_SERVER_TIMESTAMP, "+00:00", "+13:00"))) AND nepc_std_data_view.MACHINE_ID = arka_turbine_reg_master.turbine_id AND arka_turbine_reg_master.customer_id="'.$_SESSION['CustomerId'].'"' ;
		$RunList1		= $this->ExecuteQuery($RunQuery, "select");
        $objSmarty->assign('RunList1', $RunList1);
		
		$No_CommQuery = 'SELECT count(*) as no_comm_count FROM `nepc_std_data_view`,`arka_turbine_reg_master` WHERE ((nepc_std_data_view.STATUS="49" OR nepc_std_data_view.STATUS<>"19")AND (CONVERT_TZ(NOW(),"+00:00" , "+12:30") > (CONVERT_TZ(nepc_std_data_view.M_SERVER_TIMESTAMP , "+00:00", "+13:00")) AND nepc_std_data_view.STATUS <> "0" )) 
AND nepc_std_data_view.MACHINE_ID = arka_turbine_reg_master.turbine_id AND arka_turbine_reg_master.customer_id="'.$_SESSION['CustomerId'].'"';
		$No_CommList1	= $this->ExecuteQuery($No_CommQuery, "select");
        $objSmarty->assign('No_CommList1', $No_CommList1);
		
		$CommFailQuery = 'SELECT count(*) as commFail FROM `nepc_std_data_view`,`arka_turbine_reg_master` WHERE nepc_std_data_view.STATUS="101"  AND nepc_std_data_view.MACHINE_ID = arka_turbine_reg_master.turbine_id  AND arka_turbine_reg_master.customer_id="'.$_SESSION['CustomerId'].'"  ' ;
		$CommList1		= $this->ExecuteQuery($CommFailQuery, "select");
        $objSmarty->assign('CommList1', $CommList1);
		
		$GridQuery = 'SELECT count(*) as gridcount FROM `nepc_std_data_view`,`arka_turbine_reg_master` WHERE nepc_std_data_view.STATUS="19"  AND nepc_std_data_view.MACHINE_ID = arka_turbine_reg_master.turbine_id AND arka_turbine_reg_master.customer_id="'.$_SESSION['CustomerId'].'" ' ;
		$GridList1			= $this->ExecuteQuery($GridQuery, "select");
        $objSmarty->assign('GridList1', $GridList1);
		//echo $GridList1[0][gridcount];

/*		$GridQuery = 'SELECT count(*) as gridcount FROM `vestas_overview_view`,`arka_turbine_reg_master` WHERE vestas_overview_view.STATUS="0"  AND (DATE(CONVERT_TZ(vestas_overview_view.M_TIMESTAMP, "+00:00", "+12:30")) <> DATE(DATE_ADD(NOW(),INTERVAL "12:30" HOUR_MINUTE))) AND vestas_overview_view.MACHINE_ID = arka_turbine_reg_master.turbine_id  ' ;
		$GridList		= $this->ExecuteQuery($GridQuery, "select");
        $objSmarty->assign('GridList', $GridList);
		
*/		
		$OtherQuery = 'SELECT count(*) as othercount FROM `nepc_std_data_view`,`arka_turbine_reg_master` WHERE (((CONVERT_TZ(nepc_std_data_view.M_SERVER_TIMESTAMP, "+00:00", "+12:30") = CONVERT_TZ(NOW(), "+00:00", "+12:30")) OR (CONVERT_TZ(NOW(), "+00:00", "+12:30")< CONVERT_TZ(`nepc_std_data_view`.M_SERVER_TIMESTAMP,  "+00:00",  "+13:00"))) AND ((nepc_std_data_view.STATUS <> "49") AND (nepc_std_data_view.STATUS <> "19") AND (nepc_std_data_view.STATUS <> "0"  OR nepc_std_data_view.STATUS = "0")))  AND nepc_std_data_view.MACHINE_ID = arka_turbine_reg_master.turbine_id AND arka_turbine_reg_master.customer_id="'.$_SESSION['CustomerId'].'"' ;
		$OtherList1		= $this->ExecuteQuery($OtherQuery, "select");
        $objSmarty->assign('OtherList1', $OtherList1);
	//	echo $OtherList1[0][othercount];
		
      $TotalQuery = 'SELECT count(*) as totalcount FROM `nepc_std_data_view`,`arka_turbine_reg_master` WHERE  nepc_std_data_view.MACHINE_ID = arka_turbine_reg_master.turbine_id AND arka_turbine_reg_master.customer_id="'.$_SESSION['CustomerId'].'"' ;
		$TotalList1		= $this->ExecuteQuery($TotalQuery, "select");
        $objSmarty->assign('TotalList1', $TotalList1);

         }
		}
	   }	
	}
 //**************************************************************************************************************************************************************
function GetTurbineDetails($objArray='')  {
		global $objSmarty;
		$SelQuery = 'SELECT * FROM `arka_turbine_reg_master` WHERE turbine_id="'.$_GET['turbine_id'].'" ' ;
		$PageList		= $this->ExecuteQuery($SelQuery, "select");
        $objSmarty->assign('PageList', $PageList);
	}	
	function GetDashboardDetails($objArray='')  {
		global $objSmarty;
		if($_SESSION['CustomerId'] =='CUS1001'){ 	
		$SelQuery = 'SELECT DISTINCT site_name  FROM `arka_turbine_reg_master` WHERE record_status="1" AND customer_id="'.$_GET['customer_id'].'"' ;
		$SiteList		= $this->ExecuteQuery($SelQuery, "select");
        $objSmarty->assign('SiteList', $SiteList);
		
		$SelQuery = 'SELECT DISTINCT  region  FROM `arka_turbine_reg_master` WHERE record_status="1" AND customer_id="'.$_GET['customer_id'].'"' ;
		$regionList		= $this->ExecuteQuery($SelQuery, "select");
        $objSmarty->assign('regionList', $regionList);
		
		$SelQuery = 'SELECT DISTINCT turbine_htsc_no FROM `arka_turbine_reg_master` WHERE record_status="1" AND customer_id="'.$_GET['customer_id'].'"' ;
		$TurList		= $this->ExecuteQuery($SelQuery, "select");
        $objSmarty->assign('TurList', $TurList);
		}
		else
		{
		$SelQuery = 'SELECT DISTINCT site_name  FROM `arka_turbine_reg_master` WHERE record_status="1" AND customer_id="'.$_SESSION['CustomerId'].'"' ;
		$SiteList		= $this->ExecuteQuery($SelQuery, "select");
        $objSmarty->assign('SiteList', $SiteList);
		
		$SelQuery = 'SELECT DISTINCT  region  FROM `arka_turbine_reg_master` WHERE record_status="1" AND customer_id="'.$_SESSION['CustomerId'].'"' ;
		$regionList		= $this->ExecuteQuery($SelQuery, "select");
        $objSmarty->assign('regionList', $regionList);
		
		$SelQuery = 'SELECT DISTINCT turbine_htsc_no FROM `arka_turbine_reg_master` WHERE record_status="1" AND customer_id="'.$_SESSION['CustomerId'].'"' ;
		$TurList		= $this->ExecuteQuery($SelQuery, "select");
        $objSmarty->assign('TurList', $TurList);
		}
	}	
	function GetERRORDetails($objArray='')  {
		global $objSmarty;
		$SelQuery = 'SELECT  `arka_turbine_reg_master`.turbine_id,  `arka_turbine_reg_master`.customer_name,  `arka_turbine_reg_master`.turbine_htsc_no, `arka_turbine_reg_master`.location_no,  `arka_turbine_reg_master`.site_name,  `arka_turbine_reg_master`.make,  `vestas_overview_view` . *, `vestas_error_details`.*,CONVERT_TZ(`vestas_overview_view`.M_TIMESTAMP,  "+00:00",  "+12:30" ) AS TZ, DATE(CONVERT_TZ(`vestas_overview_view`.M_TIMESTAMP,  "+00:00",  "+12:30" )) AS VDATE FROM  `arka_turbine_reg_master`,  `vestas_overview_view`,`vestas_error_details` WHERE  `vestas_overview_view`.MACHINE_ID =  `arka_turbine_reg_master`.turbine_id AND  `arka_turbine_reg_master`.make =  "Vestas" AND vestas_overview_view.STATUS = vestas_error_details.ERROR_ID  ORDER BY  `arka_turbine_reg_master`.turbine_id' ;
		$ErrorList		= $this->ExecuteQuery($SelQuery, "select");
		//print_r($ErrorList);
        $objSmarty->assign('ErrorList', $ErrorList);
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


