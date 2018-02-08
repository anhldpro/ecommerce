<table width="795" align="center" bgcolor="pink">

    <tr align="center">
        <td colspan="6"><h2>View All Customers Here</h2></td>
    </tr>

    <tr align="center" bgcolor="skyblue">
        <th>S.N</th>
        <th>Customer IP</th>
        <th>Customer Name</th>
        <th>Customer Email</th>
        <th>Customer Country</th>
        <th>Customer City</th>
        <th>Customer Contact</th>
        <th>Customer Image</th>
        <th>Customer Address</th>
        <th>Edit</th>
        <th></th>
    </tr>
    <?php

    include("includes/db.php");
    $get_cus = "select * from customers";
    $run_cus = mysqli_query($con, $get_cus);

    $i = 0;

    while($row_cus=mysqli_fetch_array($run_cus)){
        $cus_id = $row_cus['customer_id'];
        $customer_ip = $row_cus['customer_ip'];
        $customer_name = $row_cus['customer_name'];
        $customer_email = $row_cus['customer_email'];
        $customer_country = $row_cus['customer_country'];
        $customer_city = $row_cus['customer_city'];
        $customer_contact = $row_cus['customer_contact'];
        $customer_image = $row_cus['customer_image'];
        $customer_address = $row_cus['customer_address'];

        $i++;


    ?>

    <tr align="center">
        <td><?php echo $i;?></td>
        <td><?php echo $customer_ip;?></td>
        <td><?php echo $customer_name;?></td>
        <td><?php echo $customer_email;?></td>
        <td><?php echo $customer_country;?></td>
        <td><?php echo $customer_city;?></td>
        <td><?php echo $customer_contact;?></td>
        <td><img src="../customer/customer_images/<?php echo $customer_image;?>" width="60" height="60"/></td>        
        <td><?php echo $customer_address;?></td>
        <td><a href="delete_c.php?delete_c=<?php echo $cus_id ?>">Delete</a></td>
    </tr>
    <?php } ?>

</table>