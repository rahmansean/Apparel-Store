

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


            <div class="col-sm-3  "><a href="http://localhost/ApparelStore/boys_dress.php"><img src="img/boydress.jpg"
                        class="d-block w-100" alt="image1">
                    
                    <p class="text-center">Boys Dress</p>
                     </a> </div>

            <div class="col-sm-3"><a href="http://localhost/ApparelStore/boys_shoes.php"><img src="img/boyshoe.jpg"
                        class="d-block w-100" alt="image1">
                        <p class="text-center">Boys Shoe</p></a> </div>

            <div class="col-sm-3"><a href="http://localhost/ApparelStore/girls_dress.php"><img src="img/girldress.jpg"
                        class="d-block w-100" alt="image1">
                        <p class="text-center">Girls Dress</p></a> </div>

            <div class="col-sm-3"><a href="http://localhost/ApparelStore/girls_shoe.php"><img src="img/girlsshoe.jpg"
                        class="d-block w-100" alt="image1">
                        <p class="text-center">Girls Shoe</p></a> </div>
           

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

$sql = "SELECT * FROM childnewarrival ORDER BY id desc limit 4"; 
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
                            <img src="img\boy_featured1.jpg" class="img-fluid" alt="Feautred 01">
                        </div>
                    </div>
                <h5>Yellow Floral Printed Kurti with Dhoti Pants</h5>

                </div>
                <div class="col-lg-3 text-center">
                    <div class="card border-0 bg-light">
                        <div class="card-body">
                            <img src="img\boy_featured2.jpg" class="img-fluid" alt="Feautred 01">
                        </div>
                    </div>
                    <h5> Skechers</h5>

                </div>

                <div class="col-lg-3 text-center">
                    <div class="card border-0 bg-light">
                        <div class="card-body">
                            <img src="img\girl_featured1.jpg" class="img-fluid" alt="Feautred 01">
                        </div>
                    </div>
                    <h5>Multicoloured Striped Cotton Dress</h5>
                </div>

                <div class="col-lg-3 text-center">
                    <div class="card border-0 bg-light">
                        <div class="card-body">
                            <img src="img\girl_featured2.jpg" class="img-fluid" alt="Feautred 01">
                        </div>
                    </div>
                    <h5>Solid Mary Janes</h5>

                </div>
            </div>
        </div>
    </div>
</section>
<!--Feautured end-->
eta child featured














    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

</body>

</html>