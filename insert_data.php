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

$sql = "INSERT INTO TodoItem (id) VALUES (?)";
$params = array($_POST["kegiatan"]);

$stmt = sqlsrv_query($conn, $sql, $params);

if ($stmt) {
    echo "New record created successfully<br/>";
	echo "<button onclick=\"location.href = 'https://mybaglabs-submission1.azurewebsites.net';\" />Back</button>";
} else {
    die(print_r(sqlsrv_errors(), true));
}

sqlsrv_free_stmt($stmt);  
sqlsrv_close($conn);
?> 