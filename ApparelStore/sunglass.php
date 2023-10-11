<html>
<head>
    <title>

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
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
                <div class="carousel-item active">
                <div class="row">

                        
<?php

$sql = "SELECT*  FROM sunglass order by id desc"; 
		$result = mysqli_query($conn, $sql); 

      
		
			 // output data of each row 
			 while($row = mysqli_fetch_array($result)) 
			 { 
               
                
	?>

<div class="col-sm-3 text-center mt-2"><img src="<?php echo $row['pimage'];?>"
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











</body>

</html>