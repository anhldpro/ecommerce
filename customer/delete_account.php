
<br>
<h2 style="text-align:center">Do you really want to DELETE your account?</h2>
<form action="" method="post">
    <br>
    <input type="submit" name="yes" value="Yes I Want" />
    <input type="submit" name="no" value="No I was Joking" />

</form>

<?php 
    include("includes/db.php");
    $user = $_SESSION['customer_email'];
    if(isset($_POST['yes'])){
        $delete_account = "delete from customers where customer_email='$user'";

        $run_customer = mysqli_query($con, $delete_account);

        echo "<script>alert('We are really sorry, your account has been deleted!');</script>";
        echo "<script>window.open('../index.php','_self');</script>";
        exit();

    }
    if(isset($_POST['no'])){
        echo "<script>alert('oh! do not joke again!');</script>";
        echo "<script>window.open('my_account.php','_self');</script>";
        exit();
    }
?>