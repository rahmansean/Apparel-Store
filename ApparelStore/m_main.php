

<html>

<head>
    <title>
        Apparel Store
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>



<?php



$servername = "localhost"; 
		$username = "root"; 
		$password = "";
		$dbname = "myDB"; 
		
		// Create connection 
		$conn = mysqli_connect($servername, $username, $password, $dbname); 
		// Check connection 
		if(!$conn) 
		{ 
			die("Connection failed: " . mysqli_connect_error()); 
		} 



        ?>


 
  <section class="container">
  <h2 class="mx-auto mb-5 text-center "><u>Categories</u></h2> 
        <div class="row">


            <div class="col-sm-2  "><a href="http://localhost/ApparelStore/shirt.php"><img src="img/shirt.jpg"
                        class="d-block w-100" alt="image1">
                    
                    <p class="text-center">Shirt</p>
                     </a> </div>

            <div class="col-sm-2"><a href="http://localhost/ApparelStore/pant.php"><img src="img/pant.jpg"
                        class="d-block w-100" alt="image1">
                        <p class="text-center">Pant</p></a> </div>

            <div class="col-sm-2"><a href="http://localhost/ApparelStore/belt.php"><img src="img/belt.jpg"
                        class="d-block w-100" alt="image1">
                        <p class="text-center">Belt</p></a> </div>

            <div class="col-sm-2"><a href="http://localhost/ApparelStore/watch.php"><img src="img/watch.jpeg"
                        class="d-block w-100" alt="image1">
                        <p class="text-center">Watch</p> </a></div>
            <div class="col-sm-2"><a href="http://localhost/ApparelStore/shoes.php"><img
                        src="img/shoes.jpg" class="d-block w-100" alt="image1">
                        <p class="text-center">Shoes</p></a> </div>
            <div class="col-sm-2"><a href="http://localhost/ApparelStore/sunglass.php"><img
                    src="img/sunglass.jpg" class="d-block w-100" alt="image1">
                    <p class="text-center">Sunglass</p></a> </div>

        </div>
    </section>

  
<!-- newarrival-->

    <section class="container">
    <h2 class="mx-auto mb-5 text-center "><u>New Arrival</u></h2> 
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
                <div class="carousel-item active">
                <div class="row">

                        
<?php

$sql = "SELECT * FROM malenewarrival ORDER BY id desc limit 4"; 
		$result = mysqli_query($conn, $sql); 

      
		
			 // output data of each row 
			 while($row = mysqli_fetch_array($result)) 
			 { 
               
                
	?>   <div class="col-sm-3 text-center mt-2"><img src="<?php echo $row['pimage'];?>"
    class="d-block w-100" alt="image1">
 
 
        <h5><?php echo $row['name']; ?></h5>
        <h4>TK <?php echo $row['price']; ?></h4>

</div>
                      
    <?php


							 } 
?>
   </div>
        </div>
            </div>                  
                                      
          
</div>

                                    
    </section>


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
                    <h5>M. Blue Cotton Shirt</h5>
                </div>
                <div class="col-lg-3 text-center">
                    <div class="card border-0 bg-light">
                        <div class="card-body">
                            <img src="image\Man_Featured2.jpg" class="img-fluid" alt="Feautred 01">
                        </div>
                    </div>
                    <h5>M. Blue Jeans</h5>
                </div>
        
                <div class="col-lg-3 text-center">
                    <div class="card border-0 bg-light">
                        <div class="card-body">
                            <img src="image\Man_Featured3.jpg" class="img-fluid" alt="Feautred 01">
                        </div>
                    </div>
                    <h5>M. Wrog Analog Watch </h5>
                  
                </div>
           
                <div class="col-lg-3 text-center">
                    <div class="card border-0 bg-light">
                        <div class="card-body">
                            <img src="image\Man_Featured4.jpg" class="img-fluid" alt="Feautred 01">
                        </div>
                    </div>
                    <h5>M. Green Suede Loafers</h5>
                    
                </div>
            </div>
        </div>
    </div>
</section>
<!--Feautured end-->














    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

</body>

</html>