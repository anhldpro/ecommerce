﻿<!DOCTYPE>
<?php
	include ("functions/functions.php");
?>
<html>
	<head>
		<title>My Online Shop</title>
		
		<link rel="stylesheet" href="styles/style.css" media="all" />
	</head>
	
<body>
	<!--Main Container starts here -->
	<div class="main_wrapper">
		<!--Main Header starts here -->
		<div class="header_wrapper">
			<img id="logo" src="images/logo.gif" />
			<img id="banner" src="images/banner.gif" />
			
		</div>
		<!--Main Header end here -->
		<!--Main Menubar starts here -->
		<div class="menubar">
		
			<ul id="menu">
				<li><a href="index.php">Home</a></li>
				<li><a href="all_products.php">All Products</a></li>
				<li><a href="customer/my_account.php">My Account</a></li>
				<li><a href="#">Sign Up</a></li>
				<li><a href="cart.php">Shopping Cart</a></li>
				<li><a href="#">Contact Us</a></li>
			</ul>
			
			
			<div id="form">
				<form method="get" action="results.php" enctype="mutipart/form-data">
					<input type="text" name="user_query" placeholder="Search a Product"/>
					<input type="submit" name="search" value="Search" />
				</form>
			</div>
		</div>
		<!--Main Menubar end here -->
		<!--Main Content starts here -->
		<div class="content_wrapper">
			<div id="sidebar">
				<div id="sidebar_title">Categories</div>
				
				<ul id="cats">
					
					<?php
						getCats();
					?>
				
				</ul>
				
				<div id="sidebar_title">Brands</div>
				
				<ul id="cats">
					<?php
						getBrands();
					?>
				
				</ul>
				
			</div>
			<div id="content_area">
				<?php cart(); ?>
				<div id="shopping_cart">
					<span style="float:right;font-size:18px;padding:5px;line-height:40px;">
						Welcome Guest! <b style="color:yellow">Shopping Cart - </b> Total Items: <?php total_items(); ?> - Total Price: <?php total_price(); ?> <a href="cart.php" style="color:yellow">Go to Cart</a></span>
				</div>
				<div id="products_box">
                    <?php
                        if(!isset($_SESSION['customer_email'])){
                            include("customer_login.php");
                        }else{
                            include("payment.php");
                        }
                    ?>
					
				</div>

			</div>
		</div>
		<!--Main Content end here -->
		<!--Main Footer starts here -->
		<div id="footer">
			<h2 style="text-align: center; padding-top:30px;">&copy; 2018 by www.OnlineTuting.com</h2>
		</div>
		<!--Main Footer end here -->
	</div>
	<!--Main Container end here -->


</body>
</html>
