<?php session_start();?>
<!DOCTYPE html>
<html>
</head>
<body>
	<h1>Reebok Speedy Runner Lp Running Shoes</h1>
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
		$name="Dell Inspiron 3551 Notebook";
		$price=2148;
		$_SESSION['each']= $quan * $price;
		$u=$_SESSION['name'];
		$total=$_SESSION['each'];
if($u=""){
header('Location:http://localhost/login.html');
}
else{
		echo "Total price:".$total."<br>";
		$sql ="INSERT INTO `shoppingcart`.billing (User,Name,Quantity,Price,Total) VALUES ('$u','$name','$quan','$price','$total')";
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
