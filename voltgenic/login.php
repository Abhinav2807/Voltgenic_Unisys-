<html>
<head>
  <title>LOG IN</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <style>
  html {

      min-width: 100%;
      background: #000;

  }
   .form-container
   {
     max-width: 100%;
     height: 200%;
     background-color: #222;

     padding: 5%;
   }
   .form-container input[type=text], .form-container input[type=password] {
     width: 100%;
     padding: 3%;
     margin: 1% 0 4.4% 0;
     border: none;
     background: #111;
     color:white;
   }
   .form-container input[type=text]:focus, .form-container input[type=password]:focus {
     background-color: #333;
     outline: none;
   }
   .form-container .btn {
     background-color: #4CAF50;
     color: white;
     padding: 3.2% 4%;
     border: none;
     cursor: pointer;
     width: 100%;
     margin-bottom:2%;
     opacity: 0.8;
   }

   /* Add a red background color to the cancel button */
   .form-container .cancel {
     background-color: red;
   }

   /* Add some hover effects to buttons */
   .form-container .btn:hover, .open-button:hover {
     opacity: 1;
   }
   a  {
     color : white;
     font-size: 150%;
    font-family: 100;
    text-decoration: none;
   }
   p
   {
     text-align: center;
     color: white;
     font-size: 250%;
     font-family: courier;
     font-weight: 100;
   }
   label
   {
     text-align: center;
     color: white;
     font-size: 150%;
     font-family: courier;
     font-weight: 100;
   }
  </style>

</head>
<body>

  <form action="http://192.168.43.245/voltgenic/check.php" class="form-container" method="post">
    <p>LOG IN</p>

    <label for="phone_no">PHONE NUMBER </label>
    <input type="text" placeholder="ENTER PHONE NUMBER" name="phone" required>

    <label for="Password">PASSWORD </label>
    <input type="password" placeholder="ENTER PASSWORD" name="password" required>

    <button type="submit" id="btn2" class="btn">LOG IN</button>

    <br><br>
    <a href="signup.php" >DON'T HAVE AN ACCOUNT?</a>
  </form>



</body>
</html>
