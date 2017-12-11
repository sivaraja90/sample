<?php require_once('Connections/ARKA.php');

mysql_select_db($database_arka, $arka);
	
	$GetQuerys1 = "SELECT turbine_id,make FROM arka_turbine_reg_master WHERE record_status='1' ";
	$TurbineList		= mysql_query($GetQuerys1, $arka) or die(mysql_error());
	
	 
while($rows = mysql_fetch_assoc($TurbineList))
{
	$GetQuery1 = "SELECT MACHINE_ID FROM arka_today_production_hrs WHERE status='1' AND MACHINE_ID='".$rows['turbine_id']."'";
	$MachineList		= mysql_query($GetQuery1, $arka) or die(mysql_error());
	$Machine = mysql_fetch_assoc($MachineList);
	
	

$GetQuery3 = 'SELECT DATE(CONVERT_TZ(M_SERVER_TIME, "+00:00", "+12:30")) AS PASSDATE FROM nepc_std_data WHERE DATE(CONVERT_TZ(M_SERVER_TIME, "+00:00", "+12:30")) = DATE(CONVERT_TZ(NOW(), "+00:00",  "+12:30")) AND MACHINE_ID="'.$rows['turbine_id'].'" GROUP BY DATE(PASSDATE)';

 
	$DateList		= mysql_query($GetQuery3, $arka) or die(mysql_error());
	$row1 = mysql_num_rows($DateList);
	$PASSDTE = mysql_fetch_assoc($DateList);

	if($row1!="")
	{
	if (mysql_data_seek($DateList, 0)) {
		$first = mysql_fetch_assoc($DateList);
		//echo $first['PASSDATE'];echo"<br>";
	}
	if (mysql_data_seek($DateList, $row1 - 1)) {
		$last = mysql_fetch_assoc($DateList);
		//echo $last['PASSDATE'];
	}
	}
if($rows['turbine_id']!="" && $row1!="")
{
echo"<br>";echo $GetQuerys2 =  'SELECT (B.bigValue-A.smallValue) as totalValue FROM (SELECT TOTAL_KWH as smallValue FROM  `nepc_std_data` WHERE MACHINE_ID="'.$rows['turbine_id'].'" AND CONVERT_TZ(M_SERVER_TIME, "+00:00", "+12:30") > "'.$first['PASSDATE'].'" AND CONVERT_TZ(M_SERVER_TIME, "+00:00", "+12:30") < DATE_ADD("'.$first['PASSDATE'].'", INTERVAL 1 DAY ) ORDER BY CONVERT_TZ(M_SERVER_TIME, "+00:00", "+12:30") LIMIT 1) as A, (SELECT TOTAL_KWH as bigValue FROM  `nepc_std_data` WHERE MACHINE_ID="'.$rows['turbine_id'].'" AND CONVERT_TZ(M_SERVER_TIME, "+00:00", "+12:30") >  "'.$first['PASSDATE'].'" AND CONVERT_TZ(M_SERVER_TIME, "+00:00", "+12:30") < DATE_ADD( "'.$first['PASSDATE'].'", INTERVAL 1 DAY ) ORDER BY CONVERT_TZ(M_SERVER_TIME, "+00:00", "+12:30") DESC LIMIT 1) as B';
$Total_Value		= mysql_query($GetQuerys2, $arka) or die(mysql_error());
$TotalValue = mysql_fetch_assoc($Total_Value);

echo "Turbine Id";echo "=";echo $rows['turbine_id'];echo "Annual_Value";echo "=";echo $TotalValue['totalValue'];echo"<br>";	
}


//Update
if( $row1!="")
{
if($Machine['MACHINE_ID']=="" && $TotalValue['totalValue']!="" && $row1!="")
{
$INQuery =  'INSERT INTO `arka_today_production_hrs`(MACHINE_ID,DOM,PRODUCTION,STATUS) values("'.$rows['turbine_id'].'","'.$last['PASSDATE'].'","'.$TotalValue['totalValue'].'","1")';
$INSERT		= mysql_query($INQuery, $arka) or die(mysql_error());
}
elseif($Machine['MACHINE_ID']!="" && $TotalValue['totalValue']!="" && $row1!="")
{
 $UPQuery =  'UPDATE `arka_today_production_hrs` SET PRODUCTION="'.$TotalValue['totalValue'].'",DOM="'.$last['PASSDATE'].'" WHERE MACHINE_ID="'.$Machine['MACHINE_ID'].'" AND YEAR(M_TIMESTAMP)=YEAR(NOW()) AND MONTH(DOM) = MONTH(NOW())';
 $UPDATE		= mysql_query($UPQuery, $arka) or die(mysql_error());
 }
}
}
?>
