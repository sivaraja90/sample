<?php require_once('Connections/ALWEL.php'); ?>
<?php
$this1 = $_GET['id'];
//echo $this1;
mysql_select_db($database_alwel, $alwel);
$query_rs1 = "select * from ras_std_data_view where MACHINE_ID=$this1";
$rs1 = mysql_query($query_rs1, $alwel) or die(mysql_error());
$row_rs1 = mysql_fetch_assoc($rs1);
$totalRows_rs1 = mysql_num_rows($rs1);
$stat1=$row_rs1["STATUS"];

mysql_select_db($database_alwel, $alwel);
$query_rs2 = "select * from ras_error_details where ERROR_ID='$stat1'";
$rs2 = mysql_query($query_rs2, $alwel) or die(mysql_error());
$row_rs2 = mysql_fetch_assoc($rs2);
$totalRows_rs2 = mysql_num_rows($rs2);
$desc1=$row_rs2["DESCRIPTION"];

mysql_select_db($database_alwel, $alwel);
$qry_rs1 = "select HTSC from ras_turbines where MACHINE_ID='$this1'";
$qrs1 = mysql_query($qry_rs1, $alwel) or die(mysql_error());
$qrow_rs1 = mysql_fetch_assoc($qrs1);
$qtotalRows_rs1 = mysql_num_rows($qrs1);
$qstat1=$qrow_rs1["HTSC"];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<!--<META HTTP-EQUIV=REFRESH CONTENT=30>-->
<link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
<title>Untitled Document</title>
<style type="text/css">
<!--
.style5 {font-family: Arial, Helvetica, sans-serif; font-size: 11px; }
.style8 {font-family: Arial, Helvetica, sans-serif; font-size: 11px; }
.style10 {font-size: 9px}
-->
</style>
</head>

<body>
	<table width="433" border="0" align="left">
   <tr align="center">
    <th colspan="2" bgcolor="#487FBF" class="style5" scope="row"><img src="assets/images/wind_t.png" height="14" width="14">&nbsp;&nbsp;Overview      <!--    <div align="center" class="style10">
         <div align="left" class="style14">
           <div align="center" class="style21"></div>
        </div>
     </div>-->    </th>
     </tr>
   <tr align="left" bgcolor="#FFFF99">
     <th bgcolor="#B0C4DD" class="style5" scope="row"><div align="left">Windspeed</div></th>
     <td bordercolor="#FFFFFF" bgcolor="#B0C4DD" class="style5"><div align="right"><?php echo $row_rs1['WS']; ?>m/s</div></td>
     </tr>
   <tr align="left" bgcolor="#FFFF99">
     <th bgcolor="#B0C4DD" class="style5" scope="row"><div align="left">Generation</div></th>
     <td bordercolor="#FFFFFF" bgcolor="#B0C4DD" class="style5"><div align="right"><?php echo $row_rs1['KW']; ?> kW </div></td>
     </tr>
   <tr align="left" bgcolor="#FFFF99">
     <th width="110" bgcolor="#B0C4DD" class="style5" scope="row"><div align="left">Temp 1</div></th>
     <td width="453" bordercolor="#FFFFFF" bgcolor="#B0C4DD" class="style5"><div align="right"><?php echo $row_rs1['TEMP1']; ?></div></td>
     </tr>
   <tr bgcolor="#FF6666">
     <th align="left" bgcolor="#B0C4DD" class="style5" scope="row"><div align="left">Temp 2</div></th>
     <td bgcolor="#B0C4DD" class="style5"><div align="right"><?php echo $row_rs1['TEMP2']; ?></div></td>
     </tr>
   <tr bgcolor="#FFFFCC">
     <th align="left" bgcolor="#B0C4DD" class="style5" scope="row"><div align="left">Temp 3</div></th>
     <td bgcolor="#B0C4DD" class="style5"><div align="right"><?php echo $row_rs1['TEMP3']; ?></div></td>
     </tr>
   <tr bgcolor="#FF6666">
     <th align="left" bgcolor="#B0C4DD" class="style5" scope="row"><div align="left">Temp 4</div></th>
     <td bgcolor="#B0C4DD" class="style5"><div align="right"><?php echo $row_rs1['TEMP4']; ?></div></td>
     </tr>
   <tr bgcolor="#FF6666">
     <th align="left" bgcolor="#B0C4DD" class="style5" scope="row"><div align="left">Temp5</div></th>
     <td bgcolor="#B0C4DD" class="style5"><div align="right"><?php echo $row_rs1['TEMP5']; ?></div></td>
     </tr>
   <tr bgcolor="#FF6666">
     <th align="left" bgcolor="#B0C4DD" class="style5" scope="row"><div align="left">Temp5</div></th>
     <td bgcolor="#B0C4DD" class="style5"><div align="right"><?php echo $row_rs1['TEMP6']; ?></div></td>
     </tr>
   <tr bgcolor="#FF6666">
     <th align="left" bgcolor="#B0C4DD" class="style5" scope="row"><div align="left">Yaw Twist</div></th>
     <td bgcolor="#B0C4DD" class="style5"><div align="right"><?php echo $row_rs1['YAW_TWIST']; ?></div></td>
     </tr>
   
   <tr bgcolor="#FF6666">
     <th align="left" bgcolor="#B0C4DD" class="style5" scope="row"><div align="left">Date</div></th>
     <td bgcolor="#B0C4DD" class="style5"><div align="right"><?php echo $row_rs1['M_DATE']; ?></div></td>
     </tr>
   <tr bgcolor="#FF6666">
     <th align="left" bgcolor="#B0C4DD" class="style5" scope="row"><div align="left">Time</div></th>
     <td bgcolor="#B0C4DD" class="style5"><div align="right"><?php echo $row_rs1['M_TIME']; ?></div></td>
     </tr>
   <tr bgcolor="#FF6666">
     <th align="left" bgcolor="#B0C4DD" class="style5" scope="row"><div align="left">Status</div></th>
     <td bgcolor="#B0C4DD" class="style5"><div align="right"><?php echo $row_rs2['DESCRIPTION']; ?></div></td>
     </tr>
</table>    
 <table width="490" height="94" border="0" align="center">
   <tr bgcolor="#DFDFFF">
     <th colspan="4" bgcolor="#487FBF" class="style5" scope="row"><img src="assets/images/_star.jpg" height="14" width="14">&nbsp;&nbsp;<span class="style22 ">Generation Details </span> </th>
   </tr>
   <tr bgcolor="#DFDFFF">
     <th width="96" align="left" bgcolor="#B0C4DD" class="style21 style10 style5" scope="row">&nbsp;Import KWH </th>
     <td width="133" bgcolor="#B0C4DD" class="style10 style5"><?php echo $row_rs1['IMPORT']; ?></td>
     <th width="102" align="left" bgcolor="#B0C4DD" class="style21 style10 style5" scope="row">G2 KWH</th>
     <td width="141" bgcolor="#B0C4DD" class="style23 style5"><?php echo $row_rs1['G2_KWH']; ?></td>
   </tr>
   <tr bgcolor="#FFFFCA">
     <th align="left" bgcolor="#B0C4DD" class="style5" scope="row"> Rotor RPM </strong></th>
     <td bgcolor="#B0C4DD" class="style10 style5"><?php echo $row_rs1['RRPM']; ?></td>
      <th width="102" align="left" bgcolor="#B0C4DD" class="style21 style10 style5" scope="row">G1 KWH </th>
     <td bgcolor="#B0C4DD" class="style23 style5"><?php echo $row_rs1['G1_KWH']; ?></td>
   </tr>
   <tr bgcolor="#FFFFCA">
     <th align="left" bgcolor="#B0C4DD" class="style5" scope="row">Gen RPM </th>
     <td bgcolor="#B0C4DD" class="style10 style5"><?php echo $row_rs1['GRPM']; ?></td>
      <th width="102" align="left" bgcolor="#B0C4DD" class="style21 style10 style5" scope="row">Cos phi</th>
     <td bgcolor="#B0C4DD" class="style23 style5"><?php echo $row_rs1['COSPHI']; ?></td>
   </tr>
 
<tr bgcolor="#FFFFCA">
     <th align="left" bgcolor="#B0C4DD" class="style21 style5" scope="row">G1 Hrs</th>
     <td bgcolor="#B0C4DD" class="style10 style5"><?php echo $row_rs1['G1_HOURS']; ?></td>
      <th width="102" align="left" bgcolor="#B0C4DD" class="style21 style10 style5" scope="row">G2 Hrs</th>
     <td bgcolor="#B0C4DD" class="style23 style5"><?php echo $row_rs1['G2_HOURS']; ?></td>
   </tr>
</table>
 <span class="style5"><br/>
 </span>
 <table width="490" border="0" align="center">
   <tr align="center" bgcolor="#FFFF99">
     <th colspan="6" bgcolor="#487FBF" class="style5" scope="row"><img src="assets/images/1133035.png" height="14" width="14">&nbsp;&nbsp;<span class="style22 ">Electrical Data </span>       <div align="center">
         <div align="left">
           <div align="center" class="style21"></div>
        </div>
     </div></th>
   </tr>
   <tr align="center" bgcolor="#487FBF">
     <th colspan="2" class="style5" scope="row">&nbsp;</th>
     <th class="style5" scope="row"><span class="style22 ">Units</span>       <div align="center">
         <div align="left">
           <div align="center" class="style21"></div>
        </div>
     </div></th>
     <th colspan="2" class="style5" scope="row">&nbsp;</th>
     <th class="style5" scope="row"><span class="style22 ">Units </span>       <div align="center">
         <div align="left">
           <div align="center" class="style21"></div>
        </div>
     </div></th>
   </tr>
   <tr bgcolor="#FF6666">
     <th align="left" bgcolor="#B0C4DD" class="style5" scope="row"><div align="left">VR</div></th>
     <td width="82" bgcolor="#B0C4DD" class="style5"><div align="left"><?php echo $row_rs1['VR']; ?></div></td>
     <td align="left" bgcolor="#B0C4DD" class="style8 style44"><div align="left">V</div></td>
     <th align="left" bgcolor="#B0C4DD" class="style8" scope="row"><div align="left">IR</div></th>
     <td width="91" bgcolor="#B0C4DD" class="style5"><div align="left"><?php echo $row_rs1['IR']; ?></div></td>
   <td align="left" bgcolor="#B0C4DD" class="style8 style44"><div align="left">A
        </th>
   </div>   </tr>
   <tr bgcolor="#FFFFCC">
     <th align="left" bgcolor="#B0C4DD" class="style8" scope="row">VY</th>
     <td bgcolor="#B0C4DD" class="style5"><?php echo $row_rs1['VY']; ?></td>
	<td align="left" bgcolor="#B0C4DD" class="style8 style44"><div align="left">V</div></td>
    <th align="left" bgcolor="#B0C4DD" class="style8" scope="row">IY</th>
     <td bgcolor="#B0C4DD" class="style5"><?php echo $row_rs1['IY']; ?></td>
     <td align="left" bgcolor="#B0C4DD" class="style8 style44"><div align="left">A</div></td>
   </tr>
   <tr bgcolor="#FF6666">
     <th align="left" bgcolor="#B0C4DD" class="style8" scope="row">VB</th>
     <td bgcolor="#B0C4DD" class="style5"><?php echo $row_rs1['VB']; ?></td>
<td align="left" bgcolor="#B0C4DD" class="style8 style44"><div align="left">V</div></td>
     <th align="left" bgcolor="#B0C4DD" class="style8" scope="row">IB</th>
     <td bgcolor="#B0C4DD" class="style5"><?php echo $row_rs1['IB']; ?></td>
     <td align="left" bgcolor="#B0C4DD" class="style8 style44"><div align="left">A</div></td>
   </tr>
</table>
</body>
</html>
