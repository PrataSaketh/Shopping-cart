<?php session_start();?>
<!DOCTYPE html>
<html>
</head>
<body>
	<h1>HP 15-ac042TU (Notebook)</h1>
	<?php
	  if(isset($_POST['submit']))
	  {
		$username="root";
		$servername="localhost";
		$password="potatofry2530";
                $database="shoppingcart";
		$connect=mysql_connect($servername,$username,$password,$database);
		if(!$connect){
			echo "Error not connected to the server";
		}
		$quan=$_POST['quan'];
		echo "Your Product quantity is ".$quan."<br>";
		$name="HP 15-ac042TU (Notebook)";
		$price=26999;
		$_SESSION['each']= $quan * $price;
		$u=$_SESSION['name'];
		$total=$_SESSION['each'];
		echo "Total price:".$total."<br>";
		$sql ="INSERT INTO `shoppingcart`.billing (User,Name,Quantity,Price,Total) VALUES ('$u','$name','$quan','$price','$total')";
       if($u!=""){        
                if (!mysql_query($sql)) {
                      echo "Your item didn't add to the cart";
                } 
                else {
                      echo "Inserted successfully";
                  }
	}}	
	?>
		 <a href='http://localhost/product.php'>Go to the main website</a>

</body>
</html>
