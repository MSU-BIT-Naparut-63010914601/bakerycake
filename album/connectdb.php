<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>connectbd</title>
</head>

<body>

<?php

	$host = "localhost";
	$user = "root";
	$pwd = "12345678";
	$db = "project1";
	$conn = mysqli_connect($host,$user,$pwd)or die("ไม่สามารถเชื่อมต่อฐานข้อมูลได้");
	mysqli_select_db($conn,$db)or die("ไม่สามารถเลือกฐานข้อมูลนี้ได้");
	mysqli_query($conn,"set names utf8");
	function __construct() {
		$this->conn = $this->connectDB();
	}
	
	function connectDB() {
		$conn = mysqli_connect($this->host,$this->user,$this->password,$this->database);
		return $conn;
	}
	
	function runQuery($query) {
		$result = mysqli_query($this->conn,$query);
		while($row=mysqli_fetch_assoc($result)) {
			$resultset[] = $row;
		}		
		if(!empty($resultset))
			return $resultset;
	}
	
	function numRows($query) {
		$result  = mysqli_query($this->conn,$query);
		$rowcount = mysqli_num_rows($result);
		return $rowcount;	
	}
?>
</body>
</html>