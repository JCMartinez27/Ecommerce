<?php

session_start();

if(!isset($_SESSION["useid"])){
	header("location:index.php");
	
}
?>


<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>KINEME STORE</title>
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<link rel="stylesheet" href="style.css"/>
		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.min.js"></script> 
		<script src ="main.js"> </script>
	</head>  
	<body>
		
		<div class="navbar navbar-inverse navbar-fixed-top"> 
			<div class="container-fluid">
				<div  class="navbar-header">
					
				</div>
				<ul class="nav navbar-nav">

					<!--<li><a onclick="openNav()" style="cursor:pointer;"><span class="glyphicon glyphicon-th-list" style="font-size:15px;cursor:pointer;" onclick="openNav()"></span> MENU</a></li>
					<script>
					function openNav() {
  					document.getElementById("mySidenav").style.width = "250px";

						}

				function closeNav() {
  				document.getElementById("mySidenav").style.width = "0";
					}
				</script>-->
					<li><a href="#"><span class="glyphicon glyphicon-home"></span>  HOME</a></li>
					<li><a href="index.php" class="active"><span class="glyphicon glyphicon-modal-window "></span>  PRODUCT</a></li>
				</ul>
			</div>
		</div>
		<p><br/></p>
		<p><br/></p>
		
		<div class="container-fluid">
			<div class="row">
				
				<div class="col-md-12">
					<div class="panel panel-primary">
						<div style="font-size: 25px; text-align: center;" class="panel-heading">CART CHECKOUT</div>
						<div class="panel-body">
							<div class="row">
								<div class="col-md-1"></div>
								<div class="col-md-2"><b>Product Image</div>
								<div class="col-md-2">Product Name</div>
								<div class="col-md-2">Product Price</div>
								<div class="col-md-1">Quantity</div>
								<div class="col-md-2">Total</div>
								<div class="col-md-2">Action</b></div>
							</div>	
							<div id="checkout_cart">

							</div>
							<!--<div class="row">
								<div class="col-md-2">
									<div class="btn-group">
										<a href="" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
										<a href="" class="btn btn-primary"><span class="glyphicon glyphicon-ok-sign"></span></a>
									</div>
								</div>
								<div class="col-md-2"><img src='freego/images.jpg'></div>
								<div class="col-md-2">PRODUCT NAME</div>
								<div class="col-md-2"><input type="text" class="form-control" value="5000" disabled></div>
								<div class="col-md-2"><input type="text" class="form-control" value="1" ></div>
								<div class="col-md-2"><input type="text" class="form-control" value="5000" disabled></div>
							</div>-->
						</div>
						<div class="panel-footer"></div>
				</div>
			
			</div>
		</div>
	</div>
	
	</body>