<!DOCTYPE>
<?php
    include ("functions/functions.php");
    include ("includes/db.php");
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
                <form action="customer_register.php" method="post" enctype="multipart/form-data">
                    <table align="center" width="750">
                        <tr align="center">
                            <td colspan="6"><h2>Create an Account</h2></td>
                        </tr>
                        <tr>
                            <td align="right">Customer Name:</td>
                            <td><input type="text" name="c_name" required/></td>
                        </tr>
                        <tr>
                            <td align="right">Customer Email:</td>
                            <td><input type="text" name="c_email" required/></td>
                        </tr>
                        <tr>
                            <td align="right">Customer Password:</td>
                            <td><input type="password" name="c_pass" required/></td>
                        </tr>
                        <tr>
                            <td align="right">Customer Image:</td>
                            <td><input type="file" name="c_image" /></td>
                        </tr>
                        <tr>
                            <td align="right">Customer Country:</td>
                            <td>
                                <select name="c_country" required>
                                    <option>Select a Country</option>
                                    <option>VietNam</option>
                                    <option>English</option>
                                    <option>Japan</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td align="right">Customer City:</td>
                            <td><input type="text" name="c_city" /></td>
                        </tr>
                        <tr>
                            <td align="right">Customer Contact:</td>
                            <td><input type="text" name="c_contact" /></td>
                        </tr>
                        <tr>
                            <td align="right">Customer Address:</td>
                            <td><input type="text" name="c_address"></input></td>
                        </tr>
                        <tr align="center">
                            <td colspan="6"><input type="submit" name="register" value="Create Account" /></td>
                        </tr>
                    </table>
                </form>
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

<?php
    if(isset($_POST['register'])){
        $ip = getIp();

        $c_name = $_POST['c_name'];
        $c_email = $_POST['c_email'];
        $c_pass = $_POST['c_pass'];
        $c_image = $_FILES['c_image']['name'];
        $c_image_tmp = $_FILES['c_image']['tmp_name'];
        $c_country = $_POST['c_country'];
        $c_city = $_POST['c_city'];
        $c_contact = $_POST['c_contact'];
        $c_address = $_POST['c_address'];

        move_uploaded_file($c_image_tmp, "customer/customer_images/$c_image");

        $insert_c = "insert into customers (customer_ip, customer_name, customer_email, customer_pass, customer_country, customer_city, customer_address, customer_image, customer_contact) 
        values ('$ip', '$c_name', '$c_email', '$c_pass', '$c_country', '$c_city', '$c_address', '$c_image', '$c_contact')";

        $run_c = mysqli_query($con, $insert_c);

        if($run_c){
            echo "<script>alert('Registration Success');</script>";
        }

    }

?>