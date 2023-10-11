<!DOCTYPE html>
<html lang="en">
<head>

    <title>Apparel Store</title>
    <!--
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">-->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!--Icon-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!--Font family-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;700&family=Lobster&family=Rubik:ital,wght@1,800&display=swap" rel="stylesheet"> 

    <!--My style sheet-->
    <link rel="stylesheet" href="style_Customer.css">

</head>
<body>

<!--Nav Bar Start--> 

<nav class="navbar navbar-expand-lg fixed-top bg-light">
  <div class="container-fluid">
  <a class="navbar-brand" href="#"><img class="logo" src="image\Logo.png">Online Cloth</a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"><i class="fa fa-bars" style="font-size:24px"></i></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="Customer.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="CustomerInfo.php">User</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Logout.php">Logout</a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="#">Cart <i class="fa fa-shopping-cart" style="font-size:24px"></i></a>
      </li>
    </ul>
  </div>
  </div>
</nav>
<!--Nav Bar End--> 

<!--Carrousal Start-->

<div id="carouselExampleCaptions" class="carousel slide abc" data-bs-ride="carousel" data-interval="1000">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner ">
    <div class="carousel-item active">
      <img src="image\Men.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
          <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <p>Clothing Collection</p>
                    <h1>Man Section</h1>
                    <button class="btnHome1 mt-3 ml-2">Shop Now</button>
                </div>
            </div>
          </div>
      </div>
    </div>
    <div class="carousel-item">
      <img src="image\Women.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
      <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <p>Clothing Collection</p>
                    <h1>Woman Section</h1>
                    <button class="btnHome1 mt-3 ml-2">Shop Now</button>
                </div>
            </div>
          </div>
      </div>
    </div>
    <div class="carousel-item">
      <img src="image\Children.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
      <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <p>Clothing Collection</p>
                    <h1>Children Section</h1>
                    <button class="btnHome1 mt-3 ml-2">Shop Now</button>
                </div>
            </div>
          </div>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<!--Carrousal End-->

<!--Feautured start-->
<section class="featuredPro">
    <div class="container py-5">
        <div class="row py-5">
            <div class="col-lg-5 mx-auto text-center">
                <h1>Featured Products</h1>
            </div>
            <div class="row py-5">
                <div class="col-lg-3 text-center">
                    <div class="card border-0 bg-light">
                        <div class="card-body">
                            <img src="image\Man_Featured1.jpg" class="img-fluid" alt="Feautred 01">
                        </div>
                    </div>
                <h5>M. Blue Cotton Formal Shirt</h5>
                <h4>TK 1,200.00</h4>
                </div>
                <div class="col-lg-3 text-center">
                    <div class="card border-0 bg-light">
                        <div class="card-body">
                            <img src="image\Woman_Featured.jpg" class="img-fluid" alt="Feautred 01">
                        </div>
                    </div>
                    <h5>W. Magenta Embroidered Kurta</h5>
                    <h4>TK 3,000.00</h4>
                </div>
        
                <div class="col-lg-3 text-center">
                    <div class="card border-0 bg-light">
                        <div class="card-body">
                            <img src="image\Children_Featured.jpg" class="img-fluid" alt="Feautred 01">
                        </div>
                    </div>
                    <h5>C. White & Blue Shirt and Pant</h5>
                    <h4>TK 2,200.00</h4>
                </div>
           
                <div class="col-lg-3 text-center">
                    <div class="card border-0 bg-light">
                        <div class="card-body">
                            <img src="image\Man_Featured2.jpg" class="img-fluid" alt="Feautred 01">
                        </div>
                    </div>
                    <h5>M. Blue Jeans</h5>
                    <h4>TK 2,500.00</h4>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Feautured end-->

<!--End-->

    <section class="footer">
         <div class="container py-3">
             <div class="row">
                  <div class="col-lg-5 mx-auto text-center">
                     <h1>Join Our Community!</h1><br>
                     <form action="Register.php">
                     <button class="btnHome1">Sign Up</button>
                     </form>
                  </div>  
             </div>
               <div class="row py-5">
                 <div class="col-lg-12">
                     <div class="row">
                         <div class="col-lg-3">
                             <h4>Contact</h4> 
                             <p><i class="fa fa-envelope" style="font-size:14px"></i> Mail us: onlineclothbd@gmail.com</p>
                             <p><i class="fa fa-phone" style="font-size:18px"></i> Phone: 012345678963</p>
                             <p><i class="fa fa-globe" style="font-size:18px"></i> Website: onlineclothbd.com</p> 
                         </div>
                         <div class="col-lg-3">
                             <h4>Services</h4>
                             <p>Men's Collection</p>
                             <p>Women's Collection</p>
                             <p>Children's Collection</p> 
                         </div>
                         <div class="col-lg-3">
                             <h4>Company</h4>
                             <p>About Us</p>
                             <p>Term's and Condition</p>              
                         </div>
                         <div class="col-lg-3 icon">
                             <h4>Follow Us</h4>
                             <i class="fa fa-facebook-official" style="font-size:36px"></i>    
                             <i class="fa fa-instagram" style="font-size:36px"></i> 
                             <i class="fa fa-twitter" style="font-size:36px"></i>   
                         </div>
                     </div>
                 </div>
             </div>
        </div>
    </section> 
		
    <!--script-->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
  
</body>
</html>