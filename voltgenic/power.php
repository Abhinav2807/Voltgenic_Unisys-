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
$phone = filter_input(INPUT_POST,'phone');

$sql = "UPDATE addresses SET POWER_CUT = 1, RECEIVED = 0 WHERE PHONE ='".$phone."';";

if (mysqli_query($conn, $sql)) {
    include 'account.php';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;

}

mysqli_close($conn);
?>
