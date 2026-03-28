<?php
session_start();
if(isset($_SESSION['fullname'])){

echo "Welcome".  $_SESSION['fullname'];
echo"<br>";
echo "and your password is". $_SESSION['password'];
echo"<br>";
echo "and your Email_id is" . $_SESSION['emailid'];
}else{
    echo"Please login again to continue";
}
?>