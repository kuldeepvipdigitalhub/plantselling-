<?php
include "config.php";
$firstname = $_POST["fname"];
$lastname = $_POST["lname"];
$email = $_POST["email"];
$phonenumber = $_POST["phone"];
$message=$_POST["message"];
$sql = "INSERT INTO contact(firstname, lastname, email, phonenumber,message)VALUES('$firstname','$lastname','$email','$phonenumber','$message')";
$run = mysqli_query($conn,$sql) or die("Query Failed!");
header("location: webhome.php");
mysqli_close($conn);
?>