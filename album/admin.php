<?php
@session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>admin</title>
<link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/heroes/">
<link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.css">
</head>

<body> 
  <div class="p-2 mb-2 bg-dark">
  <div class="px-4 py-5 my-5 text-left">
<a href="studio.php" class="btn btn-danger btn-lg px-4 me-sm-3 ">Home</a>
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
<div class="text-white bg-dark">
<form class="form-horizontal" action="" method="post">
<fieldset>

<!-- Form Name -->
<h1 class="text-danger text-center bg-dark">สำหรับแอดมิน!!</h1>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">User</label>  
  <div class="col-md-4">
  <input id="textinput" name="a_user" type="text" placeholder="" class="form-control input-md" autofocus required>
    
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="passwordinput">Password</label>
  <div class="col-md-4">
    <input id="passwordinput" name="apwd" type="password" placeholder="" class="form-control input-md" autofocus required>
    
  </div>
</div>

<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="login"></label>
  <div class="col-md-8">
    <button id="login" name="login" class="btn btn-success">LOGIN</button>
  </div>
</div>
</div>
<br><br><br><br><br>
</fieldset>
</form>
<?php
if(isset($_POST['login'])){
	include_once("connectdb.php");
	$sql="SELECT * FROM `admin` WHERE `a_user` = '{$_POST['a_user']}' and `a_pwd`='".md5($_POST['apwd'])."'LIMIT 1 ";
	
	$rs = mysqli_query($conn,$sql);
	$num = mysqli_num_rows($rs);
	
	if($num>0){
	$data = mysqli_fetch_array($rs);
	$_SESSION['ses_aid'] = $data['a_id'];
	$_SESSION['ses_aname'] = $data['a_name'];	
	echo "<script>";
	echo "window.location='store.php'";
	echo "</script>";
		
		}
		else{
	echo "<script>";
	echo "alert('คุณไม่ใช่Admin');";
	echo "</script>";
			}
	}
?>
</body>
</html>