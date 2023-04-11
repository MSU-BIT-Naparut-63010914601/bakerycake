<?php
@session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>LOGIN</title>
<link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/heroes/">
<link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.css">
</head>

<body>        
  <div class="p-2 mb-2 bg-dark">
  <div class="px-4 py-5 my-5 text-center">
    <img src="logoc.png" >
    <div class="text-white bg-dark">

      <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center"> 
		</div>
      </div>
    </div>
  </div>
<div class="text-white bg-dark ">
<form class="form-horizontal " action="" method="post">
<fieldset>

<!-- Form Name -->
<b><h1 class="text-dark  fw-bold text-center">Please Login </h1></b>

<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">USER</label>  
  <div class="col-md-4">
  <input id="textinput" name="cuser" type="text" placeholder="" class="form-control input-md" autofocus >
    
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="passwordinput">PASSWORD</label>
  <div class="col-md-4">
    <input id="passwordinput" name="c_pwd" type="password" placeholder="" class="form-control input-md" autofocus required>
    
  </div>
</div>

<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="login"></label>
  <div class="col-md-8">
    <button id="login" name="login" class="btn btn-white">Login</button>
    <button class="btn btn-white" ><a href="signin.php" class="text-dark"> Sign in </a></button>
    <button class="btn btn-white" ><a href="index1.php" class="text-dark"> Admin </a></button>
  </div>
</div>
</div>
<br><br><br><br><br>

<br><br><br><br><br><br><br>
</fieldset>
</form>
<?php
if(isset($_POST['login'])){
	include_once("connectdb.php");
	$sql="SELECT * FROM `customers` WHERE `cus_name` = '{$_POST['cus_name']}' or`cus_user` = '{$_POST['cuser']}' and `cpwd`='{$_POST['c_pwd']}'";
	$rs = mysqli_query($conn,$sql);
	$num = mysqli_num_rows($rs);
	
	if($num>0){
	$data = mysqli_fetch_array($rs);
	$_SESSION['ses_cid'] = $data['cus_id'];
	$_SESSION['ses_cname'] = $data['cus_name'];
		
	echo "<script>";
	echo "window.location='cake.php'";
	echo "</script>";
		
		}
		else{
	echo "<script>";
	echo "alert('User หรือ Password ไม่ถูกต้อง');";
	echo "</script>";
			}
	}
?>
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