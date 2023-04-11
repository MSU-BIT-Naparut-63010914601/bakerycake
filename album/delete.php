
<meta charset="utf-8">

<?php

if(isset($_GET['id'])){
	
	include_once("connectdb.php");
	$sql = "DELETE FROM `products` WHERE `p_id`='{$_GET['id']}'";
	mysqli_query($conn,$sql)or die ('ลบข้อมูลไม่ได้');
	
	unlink("product-images/{$_GET['id']}.jpg");
	
	echo "<script>";
	echo "window.location='index2.php'";
	echo "</script>";
	
	}
	

?>
