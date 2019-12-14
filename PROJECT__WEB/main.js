$(document).ready(function(){

	cat();
	brandss();
	product();

	function cat() {
		$.ajax({
			url : "action.php",
			method : "POST",
			data     :     {category:1},
			success : function(data){
				$("#get_category").html(data);
			}
		})
	}

	function brandss() {
		$.ajax({
			url : "action.php",
			method : "POST",
			data     :     {brand:1,},
			success : function(data){
				$("#get_brand").html(data);
			}
		})
	}

	function product() {
		$.ajax({
			url : "action.php",
			method : "POST",
			data     :     {getProduct:1},
			success : function(data){
				$("#get_product").html(data);
			}
		})
	}

	$("body").delegate(".category","click",function(event){
		event.preventDefault();
		var cid = $(this).attr('cid');
		
			$.ajax({

			url	    : "action.php",
			method  : "POST",
			data    :     {get_Selected_Category:1, categories_id : cid},
			success : function(data){
				$("#get_product").html(data);
			}

		})		
	})

	$("body").delegate(".select_brand","click",function(event){
		event.preventDefault();
		var bid = $(this).attr('bid');
		
			$.ajax({

			url	    : "action.php",
			method  : "POST",
			data    :     {select_brand:1, brand_id : bid},
			success : function(data){
				$("#get_product").html(data);
			}

		})		
	})

	$("#search_btn").click(function(){
		var keyword = $("#search").val();
		if(keyword != ""){
			$.ajax({

			url	    : "action.php",
			method  : "POST",
			data    :     {search:1, keyword:keyword},
			success : function(data){
				$("#get_product").html(data);
			}
		})
		}
	})

	$("#signup_btn").click(function(event){
		event.preventDefault();

		$.ajax({

			url	    : "register.php",
			method  : "POST",
			data    : $("form").serialize(),
			success : function(data){
				$("#signup_msg").html(data);
				
			}
		})
	

	})
	$("#login").click(function(event){
		event.preventDefault();
		var email = $("#email").val();
		var pass = $("#password").val();
		$.ajax({
			url     : "login.php",
			method  : "POST",
			data    : {userLogin:1,userEmail:email,userPassword:pass},
			success : function(data){
				if(data= "true")
				{
					window.location.href = "profile_user.php";
				}
			}
		})
	})
	cart_count();
	$("body").delegate("#prods","click",function(event){
		event.preventDefault();
		var p_id = $(this).attr('pid');
		$.ajax({
			url     : "action.php",
			method  : "POST",
			data    : {addToCart:1,prodId:p_id},
			success :  function(data){
				alert(data);
				cart_count();

			} 
		})
	})
	checkout_cart();

	function checkout_cart(){
		$.ajax({
			url : "action.php",
			method : "POST",
			data : {checkout_cart:1},
			success : function(data){
				$("#checkout_cart").html(data);
			}
		})


	};


		function cart_count(){
		$.ajax({
			url : "action.php",
			method : "POST",
			data : {cart_count:1},
			success : function(data){
				$(".badge").html(data);	

			}
		})
		
	};

	

	

	
	$("body").delegate(".qty","keyup",function(){
		var pid = $(this).attr("pid");
		var qty = $("#qty-"+pid).val();
		var price = $("#price-"+pid).val();
		var total = qty * price;
		$("#total-"+pid).val(total);
	})


	$("body").delegate(".delete","click",function(event){
		event.preventDefault();
		var pid = $(this).attr("delete_id");
		$.ajax({
			url : "action.php",
			method : "POST",
			data : {removeFromCart:1,removeId:pid},
			success : function(data){
				alert(data);
				checkout_cart();
			}

		})
	})

	$("body").delegate(".ok","click",function(event){
		event.preventDefault();
		var pid = $(this).attr("ok_id");
		var qty = $("#qty-"+pid).val();
		var price = $("#price-"+pid).val();
		var total = $("#total-"+pid).val();
		$.ajax({
			url : "action.php",
			method : "POST",
			data : {updateProd:1, updateId:pid,qty:qty,price:price,total:total},
			success : function(data){
				alert(data);
				checkout_cart();
			}
		})
	})

	/*page();
	function page(){
		$.ajax({
			url : "action.php",
			method : "POST",
			data : {page:1},
			success : function(data){
				alert("#pagenum").html(data);
			}
		})
	}
	$("body").delegate("#page","click",function(){
	 var pageN = $(this).attr("page");
	 alert(pageN);
	 $.ajax({
			url : "action.php",
			method : "POST",
			data : {getProduct:1,Setpage:1,pageNumber:pageN},
			success : function(data){
				alert("#get_product").html(data);
			}
		})
	})*/


})





