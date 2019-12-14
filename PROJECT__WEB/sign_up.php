<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
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
					<a style="font-weight:bold; font-color: #ffffff" class="navbar-brand">UGENATICS STORE</a>
				</div>
				<ul  class="nav navbar-nav">
					<li><a href="#"><span class="glyphicon glyphicon-home"></span>  HOME</a></li>
					<li><a href="index.php"><span class="glyphicon glyphicon-modal-window active"></span>  PRODUCT</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
			<li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span>  SIGN IN</a>
						<ul class="dropdown-menu">
							<div style="width:300px; height: 20px;">
								
								
									<div class="panel-body">
										<label for="email">EMAIL</label>
										<input type="email" class="form-control" id="email" required/>
										<label for="pass">PASSWORD</label>
										<input type="password" class="form-control" id="password" required/>
										<p></p>
										<input type="submit" class="btn btn-success" style="float:left; width: 268px; " id="login" value="Login">
										<p><br/><br/></p>
										<a href="#" style="color:blue; list-style:none; float: left;">FORGOT PASSWORD ?</a>
									</div>
								

							</div>
						</ul>
					</li>
				</ul>
			</div>

		</div>
		<p><br/></p>
		<p><br/></p>
		<p><br/></p>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-3"></div>
					<div class="col-md-7" id="signup_msg">
							<!--ALERT-->	
						</div>
						<div class="col-md-2"></div>
					</div>
			<div class="row">
				<div class="col-md-3"  ></div>
				<div class="col-md-6">
					<style>
						.log-in-form{
							position: relative;
							background: #fff;
							width: 590px;
							margin:5% auto;
							height:700px;
							box-shadow: 0 4px 6px rgba(0,0,0,0.6);

						}
						.row{
							padding-left: 10%;
							width: 90%;
						}
						#signup_btn{
							padding-right:100px;
							position: absolute;
							float: center;
						}
						input[type="text"],
						input[type="email"],
						input[type="password"]{
							display: block;
							box-sizing: border-box;
							margin-bottom: 20px;
							padding: 4px;
							
							height: 32px;
							border: none;
							outline: none;
							border-bottom: 1px solid #aaa;
							font-weight: 400;
							transition: 0.2s ease;
							


						}
						#f_name {
							width: 200px;
						}
						#lname {
							width: 220px;
						}
						.inp
						{
							width: 460px;
						}
						input[type="button"]{
							padding-left: 100px;
							margin-bottom: 28px;
							cursor: pointer;
							background: #f44336;
							border:none;
							border-radius: 2px;
							width: 97%;
							height:40px;
							font-family: sans-serif;
							font-weight: 500;
							text-transform: uppercase;
							transition: 0.2s ease;

						}
						h1{
							padding-left: 170px; 
							float: center;
							
						}
					</style>
								
									
									<div class="log-in-form">
										
										<form method="post">
										<div class="row">
											
											<h1>SIGN UP</h1>
										
											<p><br/></p>
										<div class=" col-md-6">

										<label for="f_name"></label>
										<input type="text" id="f_name" name="f_name" placeholder="Firstname" required /></div>
										<div class="err_name" id="err_name">
											
										</div>
										<div class=" col-md-6">
										<label for="lname"></label>
										<input type="text" id="lname" placeholder="Lastname" name="lname" required/>
										</div>
										</div>
										<div class="row">
											<div class=" col-md-12">
										<label for="email"></label>
										<input type="email" class="inp" id="email" placeholder="Email" name="email" required/>
										</div>
										</div>
										<div class="row">
											<div class=" col-md-12">
										<label for="password"></label>
										<input type="password" class="inp" id="password" placeholder="Pasword" name="password" required/>
										</div>
										</div>
										<div class="row">
											<div class=" col-md-12">
										<label for="repassword"></label>
										<input type="password" class="inp" id="repassword" placeholder="Retype password" name="repassword" required/>
										</div>
										</div>
										<div class="row">
											<div class=" col-md-12">
										<label for="mobilenum"></label>
										<input type="text" class="inp" id="mobilenum" placeholder="Mobile Number" name="mobilenum" required/>
										</div>
										</div>
										<div class="row">
											<div class=" col-md-12">
										<label for="address1"></label>
										<input type="text" class="inp" id="address1" placeholder="Address Line 1" name="address1" required/>
										</div>
										</div>
									<div class="row">
											<div class=" col-md-12">
										<label for="address2"></label>
										<input type="text" class="inp" id="address2" placeholder="Address Line 2" name="address2"/>
										</div>
										</div>
										<p><br/></p>
										<div class="row">
											<div class=" col-md-12">
										<input type="button" class="btn btn-danger" id="signup_btn" value="SIGN UP">
										<script>
											
												const signup_btn = document.querySelector("#signup_btn");
											signup_btn.addEventListener("click", function(){
												window.scrollTo(0, 0);

												
											
											
											});
											



										</script>
									</div>
								</div>

																						
									</div>
									

							</div>
						</form>
				<div class="col-mid-3"></div>
			</div>
		</div>
	








	</body>
</html>
