<?php
include("chk_login.php");
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Show Order</title>
</head>

<body>
 <div align="right"> <a  href="index.php" class="btn btn-outline-danger btn-lg px-4 me-sm-3 ">Back To Login</a></div>
<br>
<br>
<?php

	include_once("connectdb.php");

	
	$sql = "SELECT * FROM customers";
	$rs = mysqli_query($conn,$sql);
	
	while($data= mysqli_fetch_array($rs)){
		echo $data['cus_id']."<br>";
		echo $data['cus_name']."<br>";
		echo $data['cus_user']."<br>";
		echo $data['cpwd']."<br>";	
		echo "<hr>";	
	}
	
?>
<hr>
<br>
 <a  href="index.php" class="btn btn-outline-danger btn-lg px-4 me-sm-3 ">Back To Login</a>

</body>
</html>