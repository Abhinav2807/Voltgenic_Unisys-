<html>
<head>

  <style>
  body
  {
    background: #555;
  }
  html {
      overflow: scroll;
      overflow-x: hidden;
      min-width: 100%;
      margin: 0;
  }
  ::-webkit-scrollbar {
      width: 0px;  /* remove scrollbar space */
      background: transparent;  /* optional: just make scrollbar invisible */
  }
  /* optional: show position indicator in red */
  ::-webkit-scrollbar-thumb {
      background: #FF0000;
  }

table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>
<table>
  <tr>
    <th>PHONE</th>
    <th>ADDRESS</th>
    <th>AREA</th>
    <th>POWER CUT</th>
    <th>CURRENT STATUS</th>
    <th>CONFIRM RECEIVAL</th>
  </tr>
  <?php


  $servername = "localhost";
  $username = "root";
  $password = "abhi12345";
  $dbname = "voltgenic";

  // Create connection
  $conn = mysqli_connect($servername, $username, $password,$dbname);
  // Check connection
  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }

  $sql = "SELECT AREA_NAME,ADDRESS,PHONE, POWER_CUT, CURRENT_STATUS FROM addresses WHERE  RECEIVED = 0;";
  $retval = mysqli_query( $conn ,$sql);

   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }

   while($row = mysqli_fetch_array($retval)) {
     echo "<tr><td>" . $row["PHONE"]. "</td><td>" . $row["ADDRESS"] . "</td><td>". $row["AREA_NAME"]. "</td>
     <td>". $row["POWER_CUT"]. "</td><td>". $row["CURRENT_STATUS"]. "</td>
        <td>
          <form action=\"http://192.168.43.245/voltgenic/checked.php\" method=\"post\">
              <input type=\"hidden\" name='phone' value=\"{$row['PHONE']}\">
              <input type=\"submit\" value=\"RECEIVED\">
          </form></td></tr>";
   }
  mysqli_close($conn);

  ?>

</table>

</body>
</html>
