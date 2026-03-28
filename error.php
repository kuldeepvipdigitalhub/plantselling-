<?php
require 'live.php';
 
if(isset($_POST['sb']))
    {
        $name=$_POST['fullname'];
        $email=$_POST['emailid'];
        $password=$_POST['password'];
        $conform=$_POST['cpass'];
        $phone=$_POST['phoneno'];
        $address=$_POST['address'];
        $gender=$_POST['gender']; 

  $duplicate = mysqli_query($conn, "SELECT * FROM customer WHERE Emailid = '$email' OR Password = '$password'");
  if(mysqli_num_rows($duplicate) > 0){
    echo
    "<script> alert('Emailid or Password Has Already Taken'); </script>";
  }
  else{
    if($password == $conform){
        $query="INSERT INTO `customer` (`Fullname`, `Emailid`, `Password`, `Confirmpassword`, `Phoneno`, `Address`, `Gender`) VALUES ('$name', '$email', '$password','$conform', '$phone', '$address', '$gender')";
        $run=mysqli_query($conn,$query);
      echo
      "<script> alert('Registration Successful'); </script>";
    }
    else{
      echo
      "<script> alert('Password Does Not Match'); </script>";
    }
    header("location:http://localhost/Project%2001/login.php");
  }
}
?>