<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "arkaerp";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
}

$results = 'SELECT TIMEDIFF(timestamp(snooze_date,snooze_time), NOW()) AS Time FROM arka_enquriy_master WHERE enquiry_status = "Pending" AND status= "1"';
$result = $conn->query($results);

if (mysqli_num_rows($result) > 0) {

    while($row = mysqli_fetch_assoc($result)) {
		$Test1 = $row["Time"];
		echo $Test1;
		
    }
} 



mysqli_close($conn);
?>