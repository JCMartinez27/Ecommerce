<?php

session_start();

if(!isset($_SESSION["useid"])){
	header("location:index.php");
}


$tx_id = $_GET["tx"];
$p_st = $_GET["st"];
$amt = $_GET["cc"];
$cm = $_GET["cm"]; 


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
		<style>
			table tr td{
				padding-top: 10px;
			}
		</style>
	</head>  
	<body>
		
		<div class="navbar navbar-inverse navbar-fixed-top"> 
			<div class="container-fluid">
				<div  class="navbar-header">
					

				</div>
				<ul class="nav navbar-nav">
					
					<li style="top:5px; "><img style="height:40px; width: 80px;" src="\PROJECT__WEB\logo.png" class="animated bounce infinite"></li>
 
					<li><a href="#"><span class="glyphicon glyphicon-home"></span>  HOME</a></li>
					<li><a href="index.php"><span class="glyphicon glyphicon-modal-window"></span>  PRODUCT</a></li>
					</ul>
				</div>
			</div>
			<p><br/></p>
			<p><br/></p>
			<p><br/></p>
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-2"></div>
					<div class="col-md-8">
						<div class="panel panel-default">
							<div class="panel-heading"></div>
							<div class="panel-body">
								<h1>THANK YOU !! </h1>	
								<hr/>
								<p>Hello <?php echo $_SESSION["name"]; ?>, Your Payment Process Succesfully !! <br/>YOU CAN CONTINUE YOUR SHOPPING<br/></p>
								<a href="index.php" class="btn btn-success btn-lg">CONTINUE SHOPPING</a>
							</div>
							<div class="panel panel-footer"></div>
						</div>
					</div>
				</div>

		
 			 

 			 			
	
	</body>
	<!--<div class="panel-footer">&copy 2019</div>-->
</html>  