<html>
<head>
  <title>Dashboard </title>
  <link rel="stylesheet" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="area_list.php"></script>
</head>
<body>

<!-- TOP BAR-->
<div class="top_bar">
  <p>DASHBOARD</p>

</div>


<!-- LEFT SIDE BAR-->
<div class="side_bar_left">
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
  $sql = 'SELECT AREA_NAME FROM areas';
  $retval = mysqli_query( $conn ,$sql);

   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }

   while($row = mysqli_fetch_array($retval)) {
     echo "<form method=\"post\" action=\"http://192.168.43.245/voltgenic/content.php\"  target=\"content_frame\">
    <input type=\"hidden\" name='varname' value=\"{$row['AREA_NAME']}\">
    <button  name=\"content_button\" type=\"submit\" style=\"margin-top: 0%;margin-bottom: 2%;width: 98%;background-color: #111; color:white;  min-height: 8%;display: flex;justify-content: center;align-items: center; \" method=\"POST\" class=\"area_block\">
            <p>{$row['AREA_NAME']}</p>
              </button>
      </form>";
   }
  mysqli_close($conn);
  ?>

</div>



<!--CONTENT -> ADRESS LIST OF AREA-->
<iframe name="content_frame" class="content" style="background:#333;"></iframe>



<!-- RIGHT SIDE BUTTONS-->
<div class="side_bar_right">
  <button class="options" onclick="openForm_addArea()">ADD AREA</button>
  <button class="options" onclick="openForm_addAddress()">ADD ADDRESS</button>
  <form action="http://192.168.43.245/voltgenic/all_power_cut.php" method="post" target="content_frame">
    <button class="options">ALL POWER CUTS</button>
</form>
</div>



<!--Form For ADD AREA Button-->
<div class="form-popup"  id="addArea_form" >
  <form  action="http://192.168.43.245/voltgenic/insert_area.php" class="form-container" method="post" >
    <h3>AREA DETAILS</h3>

    <label for="area_name">AREA NAME</label>
    <input type="text" id="area_name" placeholder="ENTER AREA NAME" name="area_name" required>

    <label for="pin">PIN CODE</label>
    <input type="text" id="pin_code" placeholder="ENTER PIN CODE" name="pin_code" required>

    <button type="submit" id="btn1" class="btn" >ADD AREA</button>
    <button type="button" class="btn cancel" onclick="closeForm_addArea()">Close</button>
  </form>
</div>




<!--Form For ADD ADDRESS Button-->
<div class="form-popup"  id="addAddress_form">
  <form action="http://192.168.43.245/voltgenic/insert_address.php" class="form-container" method="post">
    <h3>AREA DETAILS</h3>

    <label for="area_name">AREA NAME ( OF NEW ADDRESS)</label>
    <input type="text" placeholder="ENTER AREA NAME" name="area_name" required>

    <label for="pin">PIN CODE ( OF NEW ADDRESS)</label>
    <input type="text" placeholder="ENTER PIN CODE" name="pin_code" required>

    <label for="address">NEW ADDRESS </label>
    <input type="text" placeholder="ENTER NEW ADDRESS" name="address" required>

    <label for="phone_no">PHONE NUMBER </label>
    <input type="text" placeholder="ENTER PHONE NUMBER" name="phone" required>

    <button type="submit" id="btn2" class="btn">ADD ADDRESS</button>
    <button type="button" class="btn cancel" onclick="closeForm_addAddress()">Close</button>
  </form>
</div>



<!-- SCRIPT HERE -->

<script>
function openForm_addArea() {
    document.getElementById("addArea_form").style.display = "block";
}

function openForm_addAddress() {
    document.getElementById("addAddress_form").style.display = "block";
}

function closeForm_addArea() {
  document.getElementById("addArea_form").style.display = "none";
}

function closeForm_addAddress() {
  document.getElementById("addAddress_form").style.display = "none";
}


</script>

</body>
</html>
