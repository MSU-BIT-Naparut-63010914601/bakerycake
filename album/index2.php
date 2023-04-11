<?php
include("chk_login.php");
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Show Product list</title>
</head>

<body>

<?php

	include_once("connectdb.php");

	
	$sql = "SELECT * FROM products";
	$rs = mysqli_query($conn,$sql);
	
	while($data= mysqli_fetch_array($rs)){
		$img = $data['p_id'];
		echo "<img src='img/$img.jpg' width='400'><br>";
		echo $data['p_name']."<br>";
		echo $data['p_price']." Baht <br>";
		echo $data['p_details']."<br>";	
		echo "<a href='update.php?id=$img';'>Edit</a> <br>";
		echo "<a href='delete.php?id=$img'onClick='return confirm(\"Confirm Deletion?\");'>Delete</a>";
		echo "<hr>";	
	}
	
?>
<hr>
<br>
 <a  href="insert2.php" class="btn btn-outline-danger btn-lg px-4 me-sm-3 ">Add Data</a>
 <br>
 <a  href="index.php" class="btn btn-outline-danger btn-lg px-4 me-sm-3 ">Back To Login</a>
 
<style>
	body {
  		background-image: url('cake.jpg');
		background-repeat: no-repeat;
		background-attachment: fixed;
		background-size: 100% 100%;
	}
</style> 
</body>
</html>


