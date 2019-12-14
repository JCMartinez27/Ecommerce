<?php

session_start();

include "database.php";

if(isset($_POST['category'])){
	$category_query = "SELECT * FROM categories";
	$run_query = mysqli_query($conn,$category_query);

	echo "
		<div class='nav nav-pills nav-stacked'>
							<li style='font-size:20px; color:lightblue;'>  CATEGORIES</li>
	";

	if(mysqli_num_rows($run_query) > 0)
	{
		while($row = mysqli_fetch_array($run_query)){
			$cid = $row["categories_id"];
			$categories_name = $row["categories_title"];
			echo "
				<li><a href='#' style='hover:none;'class='category' cid='$cid' onclick='closeNav()'>$categories_name</a></li>
			";
		}
		echo "</div>";
	}

}

if(isset($_POST['brand'])){
	$brand_query = "SELECT * FROM brands";
	$run_query = mysqli_query($conn,$brand_query);

	echo "
		<div class='nav nav-pills nav-stacked'>
							<li style='font-size:20px; color:lightblue;'>BRAND</li>
	";

	if(mysqli_num_rows($run_query) > 0)
	{
		while($row = mysqli_fetch_array($run_query)){
			$bid = $row["brand_id"];
			$brand_name = $row["brand_title"];
			echo "
				<li><a href='#' style='color:' class='select_brand' bid='$bid' onclick='closeNav()'>$brand_name</a></li>
			";
		}
		echo "</div>";
	}

}

/*if(isset($_POST["page"])){
	$sql = "SELECT * FROM products";
	$run_query = mysqli_query($conn,$sql);
	$count = mysqli_num_rows($run_query);
	$pagenum = ceil($count/9);
	for($i=1; $<=$pagenum;$i++){
		echo"<li><a href='#' page='$i' id='page'>1</a></li>";
	}
}*/



if(isset($_POST["getProduct"])){
	/*if(isset($_POST["setPage"])){
		$pageno = $_POST["pageNumber"];
		$start = ($pageno * $limit) - $limit;
	}
	else
	{
		$start = 0;
	}
	$product_query = "SELECT * FROM products LIMIT $start,$limit";*/
	$product_query = "SELECT * FROM products LIMIT 0,9";
	$run_query = mysqli_query($conn,$product_query);
	if(mysqli_num_rows($run_query) > 0){
		while($row = mysqli_fetch_array($run_query)){
			$pro_id = $row['product_id'];
			$pro_cat = $row['product_category'];
			$pro_brand = $row['product_brand'];
			$pro_title = $row['product_title'];
			$pro_price = $row['product_price'];
			$pro_image = $row['product_image'];
			echo "




				<div class='col-md-3'>
								<div class='panel panel-info'>
									<a href='freego/$pro_image'><div style='border:none' class='heading'><img src='freego/$pro_image'style='max-width:100%;max-height:100%;'/></div></a>
									


									<div style='border:none; color:none;' class='panel-heading'>$pro_title <p><br/></p>  <b>₱ $pro_price.00</b>
										<button pid='$pro_id' style='float: right;' id='prods' class='btn btn-danger btn-xs'>ADD TO CART</button>
									</div>

									</div>
								</div>
								


			";
		}
	}
}

if(isset($_POST["get_Selected_Category"]) || isset($_POST["select_brand"]) || isset($_POST["search"])){
	if(isset($_POST["get_Selected_Category"])){
		$id = $_POST["categories_id"];
		$sql = "SELECT * FROM products WHERE product_category = '$id'";
	}else if(isset($_POST["select_brand"])){
		$id = $_POST["brand_id"];
		$sql = "SELECT * FROM products WHERE product_brand = '$id'";
	}
	else{
		$keyword = $_POST["keyword"];
		$sql = "SELECT * FROM products WHERE product_keywords LIKE '%$keyword%' OR product_title LIKE '%$keyword%' ";
	}
	
	$run_query = mysqli_query($conn,$sql);
while($row = mysqli_fetch_array($run_query)){

			$pro_id  = $row['product_id'];
			$pro_cat = $row['product_category'];
			$pro_brand = $row['product_brand'];
			$pro_title = $row['product_title'];
			$pro_price = $row['product_price'];
			$pro_image = $row['product_image'];
			echo "

				<div class='col-md-3'>
								<div class='panel panel-info'>
									<div style='border:none' class='heading'><img src='freego/$pro_image'style='max-width:100%;max-height:100%;'/></div>
									


									<div style='border:none; color:none;' class='panel-heading'>$pro_title <p><br/></p>  <b>₱ $pro_price.00</b>
										<button pid='$pro_id' style='float: right;' id='prods' class='btn btn-danger btn-xs'>ADD TO CART</button>
									</div>

									</div>
								</div>
								

			";
		
	}
}

if(isset($_POST["addToCart"])){
	if(isset($_SESSION["useid"])){
		$p_id = $_POST["prodId"];
	$user_id = $_SESSION["useid"];
	$sql = "SELECT * FROM cart WHERE product_id='$p_id' AND user_id='$user_id' ";
	$run_query = mysqli_query($conn,$sql);
	$count = mysqli_num_rows($run_query);
	if($count > 0){
		echo "Product Already Added to the Cart !";
	}
	else 
	{
		$sql = "SELECT * FROM products WHERE product_id = '$p_id'";
		$run_query = mysqli_query($conn,$sql);
		$row = mysqli_fetch_array($run_query);
		$id = $row["product_id"];
			$prod_name = $row["product_title"];
			$prod_image = $row["product_image"];
			$prod_price = $row["product_price"];

			$sql = "INSERT INTO `cart` (`id`, `product_id`, `ip_address`, `user_id`, `product_title`, `product_image`, `quantity`, `price`, `total_amount`) VALUES (NULL, '$p_id', '0', '$user_id', '$prod_name', '$prod_image', '1', '$prod_price', '$prod_price');";
			if(mysqli_query($conn,$sql)){
				echo "PRODUCT ADDDED !!!";

			}
	}
	
	}else{
		echo "PLEASE SIGN IN FIRST";
	}


}

	if(isset($_POST["checkout_cart"]) ){
		$uid = $_SESSION["useid"];
		$sql = "SELECT * FROM cart WHERE user_id = '$uid' ";
		$run_query = mysqli_query($conn,$sql);
		$count = mysqli_num_rows($run_query);
		if($count > 0){
			$no =1;
			$total_amt = 0;
			while ($row=mysqli_fetch_array($run_query)) {
				$id = $row["id"];
				$prod_id = $row["product_id"];
				$prod_name = $row["product_title"];
				$prod_image = $row["product_image"];
				$prod_price = $row["price"];
				$qty = $row["quantity"];
				$total = $row["total_amount"];
				$price_arr = array($total);
				$total_sum = array_sum($price_arr);
				$total_amt = $total_amt + $total_sum;


				echo "

					<div class='row'>
					<p><br/></p>
								<div class='col-md-1'><b>$no</b></div>
								<div class='col-md-2'><img src='freego/$prod_image' width='60px' height='70px'></div>
								<div class='col-md-2'>$prod_name</div>
								<div class='col-md-2'><input type='text' class='form-control price' pid='$prod_id' id='price-$prod_id' value='$prod_price' disabled></div>
								<div class='col-md-1'><input type='text' class='form-control qty' pid='$prod_id' id='qty-$prod_id' value='$qty'></div>
								<div class='col-md-2'><input type='text' class='form-control total' pid='$prod_id' id='total-$prod_id' value='$total' disabled></div>


								<div class='col-md-2'>
									<div class='btn-group'>
										<a href='#' delete_id='$prod_id' class='btn btn-danger delete'><span class='glyphicon glyphicon-trash'></span></a>
										<a href='#' ok_id='$prod_id' class='btn btn-primary ok'><span class='glyphicon glyphicon-ok-sign'></span></a>
									</div>
								</div>
							</div>
							


				";
				$no += 1;
			}
			if(isset($_POST["checkout_cart"])){
				echo "
					<div class='row'>
						<div class='col-md-8'></div>
						<div style='font-size:24px;' class='col-md-4'>
						<b>Total: $total_amt</b>

					</div>


				";
			}
			echo '
			
			<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
				<input type="hidden" name="cmd" value="_cart">
				<input type="hidden" name="business" value="uge@shope.com">
				<input type="hidden" name="upload" value="1">';

					$uid = $_SESSION["useid"];
					$x=0;
					$sql = "SELECT * FROM cart WHERE user_id='$uid'";
					$run_query = mysqli_query($conn,$sql);
					while($row=mysqli_fetch_array($run_query)){
						$x++;
			echo 	'<input type="hidden" name="item_name_'.$x.'" value="'.$row["product_title"].'">
				<input type="hidden" name="item_number_'.$x.'" value="'.$x.'">
				<input type="hidden" name="amount_'.$x.'" value="'.$row["price"].'">
				<input type="hidden" name="quantity_'.$x.'" value="'.$row["quantity"].'">';
			}

				echo '
                <input type="hidden" name="return" value="http://jarheadonline.com/success_payment.php">
                <input type="hidden" name="cancel-return" value="http://jarheadonline.com/cart.php/cancel.php">
                <input type="hidden" name="currency_code" value="USD">
                <input type="hidden" name="custom" value="'.$useid.'">
				<input style="float:right;margin-right:280px; background:lightblue;" type="image" name="submit"
				src="https://www.paypalobjects.com/webstatic/en_US/i/buttons/PP_logo_h_150x38.png" alt="PayPal Logo"
				alt="PayPal - The safer, easier way to pay online">

			</form>';
			

			
		}
	}

		if(isset($_POST["cart_count"]) AND isset($_SESSION["useid"])){
			$uid = $_SESSION["useid"];
			$sql="SELECT * FROM cart WHERE user_id = '$uid'";
			$run_query = mysqli_query($conn,$sql);
			echo mysqli_num_rows($run_query);
		}



	if(isset($_POST["removeFromCart"])){
		$pid = $_POST["removeId"];
		$uid = $_SESSION["useid"];
		$sql = "DELETE FROM cart WHERE user_id='$uid' AND product_id ='$pid' ";
		$run_query = mysqli_query($conn,$sql);
		if($run_query){
			echo "PRODUCT DELETED !!";
		}
	}

	if(isset($_POST["updateProd"])){
		$uid = $_SESSION["useid"];
		$pid = $_POST["updateId"];
		$qty = $_POST["qty"];
		$price = $_POST["price"];
		$total = $_POST["total"];
		$sql = "UPDATE cart SET quantity='$qty', price='$price',total_amount='$total' WHERE user_id='$uid' AND product_id='$pid' ";
		$run_query = mysqli_query($conn,$sql);
		if($run_query){
			echo "
			PRODUCT UPDATED !!
			";
		}
	}



?>