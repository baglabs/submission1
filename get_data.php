 <?php
$servername = "mybaglabs.database.windows.net";
$connectionOptions = array(
        "Database" => "mobile-mybaglabs", // update me
        "UID" => "mybaglabs", // update me
        "PWD" => "Bubble4gl@bs" // update me
    );

// Create connection
$conn = sqlsrv_connect($servername, $connectionOptions);
// Check connection
if ($conn === false) {
    die("Connection failed: " . sqlsrv_errors());
}

$sql = "SELECT * FROM TodoItem";

if (($result = sqlsrv_query($conn, $sql)) !== FALSE) {
    while($obj = sqlsrv_fetch_object($result)){
		echo "<tr>";
		echo "<td>".$obj->id.'</td>';
		
		$newDate = $obj->createdAt;
		
		echo "<td>".$newDate->format('d/m/Y H:i:s').'</td>';
		echo "</tr>";
	}
} else {
    die(print_r(sqlsrv_errors(), true));
}

sqlsrv_close($conn);
?> 