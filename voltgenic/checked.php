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
echo $phone;
$sql = "UPDATE addresses SET RECEIVED = 1 WHERE addresses.PHONE = '".$phone."';";

if (mysqli_query($conn, $sql)) {
    header('Location: content.php');
} else {
    header('Location: error.html');
}

mysqli_close($conn);
?>
