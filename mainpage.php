<?php
session_start();
     if (!isset($_SESSION['sessionid'])) {
     echo "<script>alert('Session not available. Please login');</script>"; 
     echo "<script> window.location.replace('../login.php')</script>";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font- awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../style/style.css">
    <script src="../javascript/script.js"></script>
<title>Main Page</title>
</head>


<body>
     <div class="w3-header w3-container w3-black w3-padding-32 w3-center">
     <h1 style="font-size:calc(8px + 4vw);">YUZIE'S RESTAURANT</h1>
       <p style="font-size:calc(8px + 1vw);;">We only serve you the best food!</p>
     </div>

     <div class="w3-bar w3-khaki">
      <a href="#contact" class="w3-bar-item w3-button w3-right">Logout</a>
      <a href="newcustomer.php" class="w3-bar-item w3-button w3- left">New Customer</a>
     </div>

     <footer class="w3-footer w3-center w3-khaki">
       <p>Yuzie Restaurant</p>
</footer>

</body>

</html>
