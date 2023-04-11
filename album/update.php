<?php
include("chk_login.php");
?>
<!doctype html>
<?php

	include_once("connectdb.php");

	
	$sql = "SELECT * FROM products where p_id = '{$_GET['id']}'";
	$rs = mysqli_query($conn,$sql);
	
	($data= mysqli_fetch_array($rs));
		?>
<html>
<head>
<meta charset="utf-8">
<title>Add Order</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.css">
</head>

<body>

<form class="form-horizontal" method="post" action="" enctype="multipart/form-data">
<fieldset>

<legend>Edit Order</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="name">Name</label>  
  <div class="col-md-4">
  <input name="p_name" type="text" placeholder="" class="form-control input-md" required>
    
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="price">Price</label>  
  <div class="col-md-4">
  <input name="p_price" type="number" placeholder="" class="form-control input-md" required>
    
  </div>
</div>



<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="p_datails">details</label>
  <div class="col-md-4">                     
    <textarea class="form-control" name="p_details"></textarea>
  </div>
</div>



<!-- File Button --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="addimg">Add IMG</label>
  <div class="col-md-4">
    <input id="addimg" name="image" class="input-file" type="file">
  </div>
</div>


<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Submit"></label>
  <div class="col-md-4">
    <button id="Submit" name="Submit" class="btn btn-success">Edit</button>
  </div>
</div>

</fieldset>
</form>

<?php
if(isset($_POST['Submit'])){
	include_once("connectdb.php");
	$sql = "UPDATE `products` SET `p_name` = '{$_POST['p_name']}',`p_price` = '{$_POST['p_price']}', `p_details` = '{$_POST['p_details']}' WHERE `p_id` = '{$_GET['id']}';";
	//var_dump($sql);exit;
	mysqli_query($conn,$sql)or die ('Unsuccessful');
	
	if($_FILES['image']['name']!=""){
	@copy($_FILES['image']['tmp_name'],"img/".$_GET['id'].".jpg");
	}
	echo "<script>";
	echo "alert('Successful');";
	echo "window.location='index2.php'";
	echo "</script>";
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