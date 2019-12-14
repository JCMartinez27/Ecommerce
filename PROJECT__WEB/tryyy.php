<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>KINEME STORE</title>
		<link rel="stylesheet" href="css/bootstrap.min.css"/>

		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.min.js"></script> 
		<script src ="main.js"> </script>
	</head>  
	<body>
		<div class="navbar navbar-default navbar-fixed-top"> 
			<div class="container-fluid">
				<div  class="navbar-header">
					<a style="color:blue;" class="navbar-brand">BRAND EXPRESS</a>
				</div>
				<ul  class="nav navbar-nav">
					<li><a href="#"><span class="glyphicon glyphicon-home"></span>  HOME</a></li>
					<li><a href="#"><span class="glyphicon glyphicon-modal-window"></span>  PRODUCT</a></li>
					<li style="width:300px;left:10px;top:8px;"><input type="text" placeholder="SEARCH ..." class="form-control" id="search" ></li>
					<li style="top:8px;left:12px;"><button class="btn btn-primary" id="search_btn">SEARCH</button></li>
				</ul>

				<ul class="nav navbar-nav navbar-right">
					<li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-shopping-cart"></span> <span class="badge">0</span></a>
						<div class="dropdown-menu" style="width:400px; height: 20px;">
							<div class="panel panel-success">
								<div class="panel-heading">
								<div class="row">
									<div class="col-md-3">s1.no</div>
									<div class="col-md-3">Product Image</div>
									<div class="col-md-3">Product Name</div>
									<div class="col-md-3">Price in</div>
								</div>
								</div>
								<div class="panel-body"></div>
								<div class="panel-footer"></div>
							</div>
						</div>
					</li>
					<li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span>  SIGN IN</a>
						<ul class="dropdown-menu">
							<div style="width:300px; height: 20px;">
								<div class="panel panel-primary">
									<div class="panel-heading">SIGN IN</div>
									<div class="panel-body">
										<label for="email">EMAIL</label>
										<input type="email" class="form-control" id="email" required/>
										<label for="emal">PASSWORD</label>
										<input type="password" class="form-control" id="password" required/>
										<p></p>
										<input type="submit" class="btn btn-success" style="float:left; width: 268px; " id="login" value="Login">
										<p><br/><br/></p>
										<a href="#" style="color:blue; list-style:none; float: left;">FORGOT PASSWORD ?</a>
									</div>
									
								</div>

							</div>
						</ul>
					</li>
					<li><a href="#"><span class="glyphicon glyphicon-user"></span>  SIGN UP</a></li>
				</ul>
			</div>
		</div>

		<p><br/></p>
		<p><br/></p>
		<p><br/></p>
		<div class="container-fluid"> 
			<div class="row">
				<div class="col-md-1"></div>
				<div class="col-md-2">
					
					<div id="get_category">
					</div>

					<div id="get_brand">
					</div>

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


					</div>
				<div class="col-md-8">
					<div style="border: none;" class="panel">
						
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
												<!--<div class="panel-footer"></div>-->
					</div>
				</div>
				<div class="col-md-1"></div>
			</div>
		</div>
	</body>
	<!--<div style="text-align: center;"class="panel-footer">&copy; 2019</div>-->
</html>  