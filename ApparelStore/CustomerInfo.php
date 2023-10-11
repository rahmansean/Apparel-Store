<?php

include 'Database.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:Login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <title>Customer Info</title>

    <!--My style sheet-->
    <link rel="stylesheet" href="style_CustomerInfo.css">

</head>
<body>
   
<div class="container">

   <div class="content">
      <h3>Hello,I am Customer.</h3>
      <h1>Welcome <span><?php echo $_SESSION['user_name'] ?></span></h1>
      <p>Customer page</p>
      <a href="Logout.php" class="btn">Logout</a>
   </div>

</div>

</body>
</html>