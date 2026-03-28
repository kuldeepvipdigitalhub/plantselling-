<?php
$fullname=$_POST["fullname"];
$emailid=$_POST["emailid"];
$password=$_POST["password"];
$confirmpassword=$_POST["confirmpassword"];
$phoneno=$_POST["phoneno"];
$address=$_POST["address"];
$gender=$_POST["gender"];
$conn=mysqli_connect("localhost","root","","plantselling");
$sql="INSERT INTO customer(fullname,emailid,password,confirmpassword,phoneno,address,gender) VALUES('fullname','emailid','password','confirmpassword','phoneno','address','gender')";
$run=mysqli_query($conn,$sql);
?>