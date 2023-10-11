<?php 

include 'Database.php';
session_start();

if (isset($_POST['submit'])) {

    //$username = $_POST['username'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	  //$confirmpassword = md5($_POST['confirmpassword']);
    $users_type = $_POST['users_type'];
    
    $select = "SELECT * FROM users WHERE email='$email' && password='$password'  && users_type='$users_type'";
    $result = mysqli_query($conn, $select);

    if(mysqli_num_rows($result) > 0){

        $row = mysqli_fetch_array($result);
        //if(($row['users_type']=='Admin') && ($row['email']==$email && $row['password']==$password)
        if($row['users_type']=='Admin'){
  
           $_SESSION['user_name'] = $row['username'];
           header('location:Admin.php');
        }
        else if($row['users_type']=='Customer')
        {
           $_SESSION['user_name'] = $row['username'];
           header('location:Customer.php');
        }     
     }
     else
     {
        $error[] = 'Incorrect Email or Password.';
     }

};

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!--Font family-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;700&family=Lobster&family=Rubik:ital,wght@1,800&display=swap" rel="stylesheet"> 

     <!--Icon-->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!--My style sheet-->
    <link rel="stylesheet" href="style_Login.css">
</head>
<body>
    <!--#grad1 {
    background-image: linear-gradient(to bottom left, #ff99cc -5%, #ccccff 106%);
  }-->
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

<!--<img class="image1" src=image/Log.jpg>-->


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
<form action="" method="POST" class="login-email">

    <h1 class="login-text text-center py-3">LOGIN</h1>
    <div class="input-group">
        <input type="email"  placeholder="Email" name="email" required>
    </div>
    <div class="input-group">
        <input type="password"  placeholder="Password" name="password" required>
    </div>
    <div class="dropdown">
        <select class="form-select" aria-label="" name="users_type">
        <option value="Customer">Customer</option>
        <option value="Admin">Admin</option>
        </select>
    </div>
    <div class="input-group">
        <button name="submit" class="btn1">Login</button>
    </div>
    <p class="login-register-text text-center">Don't have an account? <a href="Register.php">Sign Up Here</a></p>
</form>
</div>

<?php
/*if(isset($error))
{
     foreach($error as $error)
     {
            echo '<span class="error-msg">'.$error.'</span>';
     };   
};*/
?>


 <!--script-->
 <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
    
</body>
</html>