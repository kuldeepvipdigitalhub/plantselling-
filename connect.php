<?php
include('./function1/common_function.php');
$con = mysqli_connect('localhost', 'root', '', 'plantselling');

if (isset($_POST['sb'])) {
    $name = $_POST['fullname'];
    $email = $_POST['emailid'];
    $password = $_POST['password'];
    $confirm = $_POST['cpass'];
    $phone = $_POST['phoneno'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];
    $ip_add = getIPAddress(); 

    // Select query to check if email already exists
    $select_query = "SELECT * FROM customer WHERE Emailid='$email'";
    $result = mysqli_query($con, $select_query);
    $row_count = mysqli_num_rows($result);

    if ($row_count > 0) {
        echo "<script>alert('Email id already exists')</script>";
    } else if ($password != $confirm) {
        echo "<script>alert('Passwords do not match')</script>";
        echo "<script>window.open('./coureg.php', '_self')</script>";
    } else {
        // Hash the password before storing it in the database
        // Do not store the confirm password. It is only for validation.
        // Insert query with the hashed password (confirm password is not stored)
        $query = "INSERT INTO customer (Fullname, Emailid, Password, Phoneno, IP_Add, Address, Gender) 
                  VALUES ('$name', '$email', '$password', '$phone', '$ip_add', '$address', '$gender')";
        $run = mysqli_query($con, $query);
        
        echo "<script>alert('Sign up success')</script>";
        echo "<script>window.open('./login.php', '_self')</script>";
    }

    // Selecting cart items
    $select_cart_item = "SELECT * FROM cart WHERE ip_address ='$ip_add' ";
    @$run_cart = mysqli_query($con, $select_cart_item);
    $rows_count = mysqli_num_rows($run_cart);

    if ($rows_count > 0) {
        $_SESSION['Emailid'] = $email;
        echo "<script>alert('You have items in your cart')</script>";
        echo "<script>window.open('./checkout.php', '_self')</script>";
    } else {
        echo "<script>window.open('./webhome.php', '_self')</script>";
    }
}
?>

