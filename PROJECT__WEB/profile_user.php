<?php

session_start();

if(!isset($_SESSION["useid"])){
	header("location:index.php");
}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
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
					<li><a onclick="openNav()" style="cursor:pointer;"><span class="glyphicon glyphicon-th-list" style="font-size:15px;cursor:pointer;" onclick="openNav()"></span> MENU</a></li>
					<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";

}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>
					<li style="top:5px; "><img style="height:40px; width: 80px;" src="logo.png" class="animated bounce infinite"></li>
 
					<li><a href="#"><span class="glyphicon glyphicon-home"></span>  HOME</a></li>
					<li><a href="index.php"><span class="glyphicon glyphicon-modal-window"></span>  PRODUCT</a></li>
					</ul>
 			

 			 			<ul class="nav navbar-nav navbar-right">
					
					<li class="container" style="width:300px;left:10px;top:8px;"><input type="text" placeholder="SEARCH ..." class="form-control" id="search" ></li>
				
					<li style="top:8px;right:40px;"><button style="height: 34px; width: 35px;" class="btn btn-primary btn-xs" id="search_btn"><span class="glyphicon glyphicon-search"></span></button></li>

				



				
					<li><a href="cart.php" id="cart_checkout"><span class="glyphicon glyphicon-shopping-cart"></span><span class="badge">0</span></a></li>
					<li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span>  <?php echo $_SESSION["name"] ?></a>
						<ul class="dropdown-menu">
							<li><a href="" style="text-decoration: none; color: blue;"><span class="glyphicon glyphicon-shopping-cart">CART</span></a></li>
							<li class="divider"></li>
							<li><a href="" style="text-decoration: none; color: blue;">Change Password</a></li>
							<li class="divider"></li>
							<li><a href="Logout.php" style="text-decoration: none; color: blue;">Logout</a></li>
						</ul>
					</li>
					
				</ul>
			</div>

			
			
		</div>

		<p><br/></p>
		<p><br/></p>
		<p><br/></p>
		<div id="mySidenav" class="sidenav">

<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    
    <p><br/></p>
  <div id="get_category">
					</div>

					<div id="get_brand">
					</div>

</div>
		<div class="container-fluid"> 
			<div class="row">
				<div class="col-md-1"></div>
				

					
					
					

					<!--<div class="nav nav-pills nav-stacked">
							<li  class="active" ><a href="#"><h4>CATEGORIES</h4></a></li>
							<li><a href="#">T-SHIRT</a></li>
							<li><a href="#">LONGSLEEVES</a></li>
							<li><a href="#">SHORTS</a></li>
							<li><a href="#">PANTS</a></li>
						</div> -->
					
				


						<!--<div class="nav nav-pills nav-stacked">
							<li class="active"><a href="#"><h4>BRAND</h4></a></li>
							<li><a href="#">FREEGO</a></li>
							<li><a href="#">WRANGLER</a></li>
							<li><a href="#">TRIBAL</a></li>
							<li><a href="#">JAG</a></li>
						</div> -->


					
				<div class="col-md-10">
					<div style="border: none;" class="body">
						
						<div id="get_product">

						</div>
						
				<!--<div class="col-md-4">
								<div class="panel panel-info">
									<div class="panel-heading">TCVC Jaspee Fabric Grapic Design</div>
									<div class="body">
										<img src="freego/CVC_Jaspee _Fabric_Grapic_Design_.jpg"style="max-width:100%;max-height:100%;"/>
									</div>


									<div class="panel-heading">799.75
										<button style="float: right;"class="btn btn-danger btn-xs">ADD TO CART</button>
								 	</div>

									
								</div>
							</div>-->
												
				</div>
				
			</div>
		</div>
		<div class="col-md-1">
			
		</div>
		
		<div class="row">
			<div class="col-md-12">
				<center>
					<ul class="pagination" id="pagenum">
						<li><a href="#">1</a></li>
						
					</ul>
				</center>
			</div>
		</div>


		</div>
	
	</body>
	<!--<div class="panel-footer">&copy 2019</div>-->
	<style>
body {
  font-family: "Lato", sans-serif;
}

.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav li{
  padding: 8px 8px 8px 32px;
  text-decoration: none;
 
  color: #818181;
  display: block;
  transition: 0.3s;
}
.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
 font-weight: bold;
  font-size: 12px;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
 font-weight: bolder;
  font-size: 16px;
}


.sidenav .closebtn {
  position: absolute;
  padding-top: 0;
  right: 20px;
  font-size: 36px;
  margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
img:hover{
background:blue;
}

</style>



</html>  