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
$address = filter_input(INPUT_POST,'address');
$address = strtoupper($address);
$phone = filter_input(INPUT_POST,'phone');
$pass = filter_input(INPUT_POST,'password');
$sql = "INSERT INTO addresses (ADDRESS ,AREA_NAME , PINCODE,PHONE,PASSWORD)
VALUES ('$address','$area_name',$pin_code,'$phone','$pass')";

if (mysqli_query($conn, $sql)) {
    include  'account.php';
} else {
    header('Location: error.html');
}

mysqli_close($conn);
?>
