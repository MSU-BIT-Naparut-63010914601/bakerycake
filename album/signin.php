<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>sign in</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.css">
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
</head>

<body>
<div class="px-4 py-5 my-5 text-center">
    <img src="logoc.png" >
    <div class="text-white bg-dark">

      </div>
    </div>
<div class="text-white bg-dark ">
<form class="form-horizontal " method="post">
<fieldset>

<!-- Form Name -->
<h1 class="text-dark text-center style = ont-family: 'Josefin Sans', sans-serif;">Sign In</h1>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="fullname">Name</label>  
  <div class="col-md-4 text-white bg-dark ">
  <input name="fullname" type="text" placeholder="" class="form-control input-md" required> 
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label " for="fullname">User Name</label>  
  <div class="col-md-4  ">
  <input name="cus_user" type="text" placeholder="" class="form-control input-md" required> 
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label text-white bg-dark" for="fullname">Password</label>  
  <div class="col-md-4  ">
  <input name="cpwd" type="password" placeholder="" class="form-control input-md" required> 
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Submit"></label>
  <div class="col-md-4">
    <button name="Submit" class="btn btn-success">Sign In</button>
    <button  class="btn btn-white" ><a href="index.php" > Cancel </a></button>
  </div>
</div>
</div>
</fieldset>
</form>

<?php
if(isset($_POST['Submit'])){
	include_once("connectdb.php");
	$sql = "INSERT INTO `customers` (`cus_id`,`cus_name`, `cus_user`, `cpwd`) VALUES (NULL,'{$_POST['fullname']}','{$_POST['cus_user']}','{$_POST['cpwd']}');";
	mysqli_query($conn,$sql) or die ('เพิ่มข้อมูลไม่ได้');                                                                        
	echo "<script>";
	echo "alert('เพิ่มข้อมูลสำเร็จ');";
	echo "</script>";
	echo "<script>";
	echo "window.location='index.php'";
	echo "</script>";
	}
?>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
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