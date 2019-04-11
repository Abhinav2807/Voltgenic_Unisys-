<html>
<head>
  <title> ACCOUNT </title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <style>
  html {
      overflow: scroll;
      overflow-x: hidden;
      min-width: 100%;
      margin: 0;
  }

  body
  {
    min-width: 100%;
    background-color: black;
    margin: 0;
    font-family: courier;
    color: white;
    font-weight: 100;

  }
  .details
  {
    display: none;
    max-width: 100%;
    background-color: #111;
    padding: 1%;
    margin :1%;
    border: solid;
    border-width: thin;
    border-color: #222;
    border-radius: 1%;
    font-size: 120%;
  }
  .options
  {
    width : 96%;
    margin:2%;
    padding: 1%;
    color: white;
    background-color: #333;
    font-family: courier;
    border: none;
    margin-top:30%;
  }
  .response_button
  {
    width : 35%;
    margin:2%;
    padding: 1%;
    color: white;
    background-color: #333;
    font-family: courier;
    border: none;
    margin-top: 10%;
    height: 20%;
    font-size: 250%;
    margin-left:33%;

  }
  </style>

</head>
<body>
<button class="options" onclick="openAccountDetails()">ACCOUNT DETAILS</button>
<div class="details" id="account">

  <?php
  $sql = "SELECT AREA_NAME,ADDRESS,PHONE, POWER_CUT, CURRENT_STATUS FROM addresses WHERE PHONE ='".$phone."';";
  $retval = mysqli_query( $conn ,$sql);
  $row = mysqli_fetch_array($retval);

  echo "CONTACT NO :".$row["PHONE"];
  echo "<br><br> AREA :".$row["AREA_NAME"];
  echo "<br><br>ADDRESS :".$row["ADDRESS"];
   ?>
 <button class="options" onclick="closeAccountDetails()">CLOSE</button>

</div>

<form action="http://192.168.43.245/voltgenic/power.php" method="post">
  <input type="hidden" name="phone" value="<?php echo $phone ?>">
  <button class="response_button" >POWER CUT</button>
</form>

<script>
function openAccountDetails() {
    document.getElementById("account").style.display = "block";
}
function closeAccountDetails() {
    document.getElementById("account").style.display = "none";
}

</script>

</body>
</html>
