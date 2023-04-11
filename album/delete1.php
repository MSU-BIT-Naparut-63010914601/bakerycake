
<meta charset="utf-8">

<?php

if(isset($_GET['id'])){
	
	include_once("connectdb.php");
	$sql = "DELETE FROM `customers` WHERE `cus_id`='{$_GET['id']}'";
	mysqli_query($conn,$sql)or die ('ลบข้อมูลไม่ได้');
	
	echo "<script>";
	echo "window.location='index3.php'";
	echo "</script>";
	
	}
	

?>
