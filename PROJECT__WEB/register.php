<?php

include "database.php";

$f_name = $_POST["f_name"];
$lname = $_POST["lname"];
$email = $_POST['email'];
$password = $_POST['password'];
$repassword = $_POST['repassword'];
$mobilenum = $_POST['mobilenum'];
$address1 = $_POST['address1'];
$address2 = $_POST['address2'];
$name= "/^[A-Z][a-zA-Z ]+$/";
$validEmail = "/^[_a-z0-9-]+(\.[_a-z0-9-])*@[a-z0-9]+(\.[a-z]{2,4})$/";
$validNumber = "/^[0-9]+$/";


if(empty($f_name) || empty($lname) || empty($email) || empty($password) || empty($repassword) || empty($mobilenum) ||  empty($address1) ||  empty($address2)) {

	echo "
		<div class='alert alert-warning'>
			<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>PLEASE FILL ALL FIELDS !!!</b>
		</div>

	";
	exit();
} else {
	if(!preg_match($name,$f_name)){

		echo "<div class='alert alert-warning'>
			<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b> This $f_name is invalid !!!</b>
		</div>";	
		exit();
}
	if(!preg_match($name,$lname)){
		echo "<div class='alert alert-warning'>
			<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b> This $lname is not valid !!!</b>
		</div>";
		exit();
}
	if(!preg_match($validEmail,$email)){
		echo "<div class='alert alert-warning'>
			<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b> This $email is not valid !!!</b>
		</div>";
		exit();
}
if($password != $repassword){
		echo "<div class='alert alert-warning'>
			<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b> Password does not match !!!</b>
		</div>";
		exit();
		}
	if(strlen($password) < 9){
	echo "<div class='alert alert-warning'>
			<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b> Password is weak !!!</b>
		</div>";	
		exit();	
}


	
	

	if(!preg_match($validNumber,$mobilenum)){
		echo "<div class='alert alert-warning'>
			<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b> Mobile Number $mobilenum is not valid !!!</b>
		</div>";
		exit();
}
	if(!(strlen($mobilenum) == 11)){
		echo "<div class='alert alert-warning'>
			<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b> Mobile number should be 11 digits !!!</b>
		</div>";
		exit();
}
$sql = "SELECT user_id FROM user_info WHERE email = '$email' LIMIT 1";
$check_query = mysqli_query($conn,$sql);
$count_email = mysqli_num_rows($check_query);
if($count_email > 0){
	echo "<div class='alert alert-danger'>
			<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b> Email Address Already Used !!!</b>
		</div>";

	exit();
}
else{
	
		
	$password = md5($password);
	$sql = "INSERT INTO `user_info` (`user_id`, `firstname`, `lastname`, `email`, `password`, `mobile_num`, `address`, `delivery_address`) VALUES (NULL, '$f_name', '$lname', '$email', '$password', '$mobilenum', '$address1', '$address2');";
	$run_query = mysqli_query($conn,$sql);
	if($run_query){
		echo "<div class='alert alert-success'>
			<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b> You are registered successfully !!!</b>
			
		</div>";
		
	}
}
}

?>