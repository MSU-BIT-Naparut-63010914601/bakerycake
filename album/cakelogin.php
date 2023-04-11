<!DOCTYPE html>
<html lang="en">
<head>
<link rel="shortcut icon" type=""/>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.108.0">
    <title>Cake & Bakery Shop</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/album/">


	<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>
</head>
<div class="homeheader">
    </div>
<HTML>
<HEAD>
<TITLE>Simple PHP Shopping Cart</TITLE>
</HEAD>
<BODY>
<header>
<div class="collapse bg-dark" id="navbarHeader">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-md-7 py-4">
        </div>
        <div class="col-sm-4 offset-md-1 py-4">
        
        </div>
      </div>
    </div>
  </div>
  <div class="navbar navbar-dark bg-light shadow-sm"> 

    <div class="container">
      <a href="#" class="navbar-brand d-flex align-items-center">
      <div class="navbar navbar-light bg-light shadow-sm">
        <img src="h.jpg" width="150"  height="150">
        <img src="22222.jpg"width="150"  height="150">
        <img src="ew.jpg"width="150"  height="150">
        <img src="pp.jpg"width="150"  height="150">
        <img src="n.jpg"width="150"  height="150">
        <img src="kk.jpg"width="150"  height="150">
        <img src="r.jpg"width="150"  height="150">
        <img src="po.jpg"width="160"  height="150">
      </a>
      <section class="py-5 text-center container">
        <h1>Cake & Bakery Shop</h1>
      
       <div align="right"> <button class="btn btn-outline-danger my-2" ><a href="index.php" class="text-dark"> Logout </a></button></div>
    
    </div>
  </div>
  
</header>
<main>
  <section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">Cake & Bakery Shop</h1>
        <p class="lead text-muted">Best Cakes & Bakery For Your Special Occasions 
        Give happiness to someone special. You can order now.</p>
        <p>
        <a class="btn btn-outline-secondary my-2">New menu</a>
          <a class="btn btn-outline-secondary my-2">Special menu</a>
          <a class="btn btn-outline-secondary my-2">Weekly Bestseller</a>
          <a class="btn btn-outline-secondary my-2">Discount Menu</a>
          <a class="btn btn-outline-secondary my-2">Thai dessert</a>
          <a href="basket.php" class="btn btn-info my-2">Shopping Cart</a>
        </p>
      </div>
    </div>
  </section>
  
  <div class="album py-5 bg-light">
    <div class="container">

      <h1> Cake & Bakery Menu </h2>
<br>
<div class="album py-5 bg-light">
    <div class="container">
<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div class="col">
          <div class="card shadow-sm">     
          
          
    <?php
	include_once("connectdb.php");
	$sql = "SELECT * FROM products";
	$rs = mysqli_query($conn,$sql);
	while($data= mysqli_fetch_array($rs)){
		$img = $data['p_id'];
		echo "<img src='img/$img.jpg' width='400'><br>";
		echo $data['p_name']."<br>";
		echo $data['p_price']." บาท <br>";
		echo $data['p_details']."  <br>";
		
		echo "<a href='basket.php?id=$img';'<button type='submit' name='button' id='button' class='btn btn-outline-danger' role='button' >Add to Cart</a> <br>";
	
	}?>
    
    

      </div>
    </div>
  </div>
 

    

</main>

<footer class="text-muted py-5">
  <div class="container">
    <p class="float-end mb-1">
      <a href="#">Back to top</a>
    </p>
    <p class="mb-1"></p>

  </div>
</footer>


    <script src="bootstrap.bundle.min.js"></script>
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
