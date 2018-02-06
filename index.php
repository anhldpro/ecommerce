<!DOCTYPE>
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
				<li><a href="#">Home</a></li>
				<li><a href="#">All Products</a></li>
				<li><a href="#">My Account</a></li>
				<li><a href="#">Sign Up</a></li>
				<li><a href="#">Shopping Cart</a></li>
				<li><a href="#">Contact Us</a></li>
			</ul>
			
			
			<div id="form">
				<form method="get" action="result.php" enctype="mutipart/form-data">
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
					<li><a href="#">Laptop</a></li>
					<li><a href="#">Computers</a></li>
					<li><a href="#">Mobiles</a></li>
					<li><a href="#">Cameras</a></li>
					<li><a href="#">iPads</a></li>
					<li><a href="#">Tablets</a></li>
				
				</ul>
				
				<div id="sidebar_title">Brands</div>
				
				<ul id="cats">
					<li><a href="#">HP</a></li>
					<li><a href="#">DELL</a></li>
					<li><a href="#">Motorola</a></li>
					<li><a href="#">Sony Ericson</a></li>
					<li><a href="#">LG</a></li>
					<li><a href="#">Apple</a></li>
				
				</ul>
				
			</div>
			<div id="content_area">This is content area!</div>
		</div>
		<!--Main Content end here -->
		<!--Main Footer starts here -->
		<div id="footer">This is footer!</div>
		<!--Main Footer end here -->
	</div>
	<!--Main Container end here -->


</body>
</html>
