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
$pass = filter_input(INPUT_POST,'password');
$sql = "SELECT PASSWORD FROM addresses WHERE PHONE ='$phone';";
$pass_in_db = $conn->query($sql) -> fetch_array()[0];
if ($pass == $pass_in_db) {
    include'account.php';
} else {
    header('Location: login.php');
}

mysqli_close($conn);
?>
