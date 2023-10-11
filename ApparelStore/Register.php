<?php 

include 'Database.php';


if (isset($_POST['submit'])) {

    $username = $_POST['username'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$confirmpassword = md5($_POST['confirmpassword']);
    $users_type = 'Customer';
    
    $select = "SELECT * FROM users WHERE email='$email' && password='$password' && users_type='$users_type'";
    $result = mysqli_query($conn, $select);

    if(mysqli_num_rows($result)>0){

        $error[]='User already exist.';
     }
     else
     {
        if($password==$confirmpassword)
        {
            $insert = "INSERT INTO users(username,email,password,users_type) VALUES('$username','$email','$password','$users_type')";
            //$insert = "INSERT INTO users(username,email,password) VALUES('$username','$email','$password')";
            mysqli_query($conn, $insert);
            $success[]='Sign Up successful.';
            header('location:Login.php');
        }
        else{
           
           $error[]='Password not matched.';
        }
     }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!--Icon-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!--Font family-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;700&family=Lobster&family=Rubik:ital,wght@1,800&display=swap" rel="stylesheet"> 

    <!--My style sheet-->
    <link rel="stylesheet" href="style_Register.css">

</head>
<body>
    
<!--Nav Bar Start--> 

<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
  <a class="navbar-brand" href="#"><img class="logo" src="image\Logo.png">Online Cloth</a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"><i class="fa fa-bars" style="font-size:24px"></i></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="indexHome.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
      <!--<li class="nav-item">
        <a class="nav-link" href="Login.php">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Register.php">Sign Up</a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="#">Cart <i class="fa fa-shopping-cart" style="font-size:24px"></i></a>
      </li>-->
    </ul>
  </div>
  </div>
</nav>
<!--Nav Bar End--> 

<!--Alert-->
<?php
//echo '<span class="error-msg text-center">'.$error.'</span>';


if(isset($error))
{
     foreach($error as $error)
     {  
?>
      <div class="alert alert-danger alert-dismissible fade show" role="alert">

      <strong><?php echo $error;?></strong>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
      
      </button>
      </div>
      <?php
       
     };

};
?>
  

<div class="container">
<form action="" method="POST" class="signup-email">
    <h1 class="signup-text text-center py-3">Sign Up</h1>
    <div class="input-group">
        <input type="text"  placeholder="Username" name="username" required>
    </div>
    <div class="input-group">
        <input type="email"  placeholder="Email" name="email" required>
    </div>
    <div class="input-group">
        <input type="password"  placeholder="Password" name="password" required>
    </div>
    <div class="input-group">
        <input type="password"  placeholder="Confirm Password" name="confirmpassword" required>
    </div>
    <div class="input-group">
        <button name="submit" class="btn2">Sign Up</button>
    </div>
    <p class="signup-register-text text-center">Have an account? <a href="Login.php">Login Here</a></p>

  
</form>
</div>

 <!--script-->
 <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
</body>
</html>