<?php
$servername = "localhost";
$username = "root";
$password = "abhi12345";
$dbname = "voltgenic";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$area_name = filter_input(INPUT_POST,'area_name');
$area_name = strtoupper($area_name);
$pin_code = filter_input(INPUT_POST,'pin_code');
$sql = "INSERT INTO areas (AREA_NAME, PINCODE)
VALUES ('$area_name',$pin_code)";

if (mysqli_query($conn, $sql)) {
    header('Location: dashboard.php');
} else {
    header('Location: error.html');
}

mysqli_close($conn);
?>
