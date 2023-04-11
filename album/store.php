<?php
@session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>store</title>
<link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/heroes/">
<link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.css">
</head>

<body> 
  <div class="p-2 mb-2 bg-dark">
  <div class="px-4 py-5 my-5 text-left">
<a href="admin.php" class="btn btn-danger btn-lg px-4 me-sm-3 "><<กลับ</a>
  <h1 class="visually-hidden">G&C STUDIO</h1>       
  <div class="p-2 mb-2 bg-dark">
  <div class="px-4 py-5 my-5 text-center">
    <img src="Logo.png" alt="" width="200" height="200">
    <h1 class="text-danger bg-dark">G&C STUDIO</h1>
    <div class="text-white bg-dark">
      <p class="lead mb-4">Steaming Platform for Animation</p>
      <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center"> 
		</div>
      </div>
    </div>
  </div>
<div class="text-white bg-dark "></div></div>
  <div class="p-2 mb-2 bg-dark">
  <div class="px-4 py-5 my-5 text-center">
<a href="ghibli.php" class="btn btn-danger btn-lg px-4 me-sm-3 ">แก้ไขข้อมูลสินค้า</a><br><br>
<a href="cus.php" class="btn btn-danger btn-lg px-4 me-sm-3 ">แก้ไขข้อมูลลูกค้า</a></div></div>
<br><br><br><br><br><br><br><br>

<?php
if(isset($_POST['login'])){
	include_once("connectdb.php");
	$sql="SELECT * FROM `admin` WHERE `cus_user` = '{$_POST['cususer']}' and `cpwd`='".md5($_POST['cpwd'])."'LIMIT 1 ";
	
	$rs = mysqli_query($conn,$sql);
	$num = mysqli_num_rows($rs);
	
	if($num>0){
	$data = mysqli_fetch_array($rs);
	$_SESSION['ses_cid'] = $data['cus_id'];
	$_SESSION['ses_cname'] = $data['cus_name'];	
	echo "<script>";
	echo "window.location='studio.php'";
	echo "</script>";
		
		}
		else{
	echo "<script>";
	echo "alert('User หรือ Password ไม่ถูกต้อง');";
	echo "</script>";
			}
	}
?>
</body>
</html>