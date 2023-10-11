<?php

include 'Database.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:Login.php');
}

?>
<!DOCTYPE html>
<html>
<body>

<div class="container">

   <div class="content">
      <h3>Hello, I am Admin </h3>
      <h1>Welcome <span><?php echo $_SESSION['user_name'] ?></span></h1>
      <p>Customer page</p>
   </div>

</div>
	
<form action="" method="post"  enctype="multipart/form-data"> 
 		
		Product Name <input type="text" name="product_name" /><br><br> 
		Product ID <input type="text" name="product_id"/><br><br> 
		Product Price <input type="text" name="product_price"/><br><br>  
		Product Image<input type="file" name="product_image" /> <br><br> 
		Product_Quantity <input type="text" name="product_quantity" /> <br><br> 
		 
		<Select class="form-select" name ="Category">
			 
			 <option value="product">Shirt</option>
			 <option value="pant">Pant</option>
			 <option value="belt">Belt</option>
			 <option value="watch">Watch</option>
			 <option value="sunglass">Sunglass</option>
			 <option value="shoes">Shoes</option>
			 <option value="malenewarrival">New Arrival</option>

		</Select>
		 
 
		<input  type="submit" name="submit1" value="upload" /> 

		<a href="Logout.php" class="btn">logout</a>

	 </form> 

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


		if(isset($_POST['submit1']))
		{
			
			$v1=rand(1111,9999);
			$v2=rand(1111,9999);
		
			$v3=$v1.$v2;
			$v3=md5($v3);
			$fnm=$_FILES["product_image"]["name"];
			$dst="./product_img/".$v3.$fnm;
			$dst1="product_img/".$v3.$fnm;
			move_uploaded_file($_FILES["product_image"]["tmp_name"],$dst);
		
            $Category=$_POST['Category'];

		$sql = "INSERT INTO ".$Category." (name,id,price,quantity,pimage) VALUES ('$_POST[product_name]', '$_POST[product_id]', '$_POST[product_price]','$_POST[product_quantity]','$dst1')"; 
		if (mysqli_query($conn, $sql)) 
		{ 
			echo "New record created successfully"; 
		} 
		else 
		{ 
			echo "Error: " . $sql . "<br>" . mysqli_error($conn); 
		} 
		mysqli_close($conn); 
     
	}
	
?>

</body>
</html>