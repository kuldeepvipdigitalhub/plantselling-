<?php 
include('./function1/common_function.php');
$con=mysqli_connect('localhost','root','','plantselling');
 if(isset($_POST['sb']))
 {
    $email=$_POST['em'];
        $password=$_POST['ps'];

        $select_query="SELECT * FROM customer WHERE Emailid='$email'";
        $result=mysqli_query($con,$select_query);
        $rows_count=mysqli_num_rows($result);
        $row_data=mysqli_fetch_array($result,MYSQLI_ASSOC);
        $ip=getIPAddress();
        // cart item
        $select_query_cart="SELECT * FROM cart WHERE ip_address='$ip'";
        $select_cart=mysqli_query($con,$select_query_cart);
        $rows_count_cart=mysqli_num_rows($select_cart);
        
        if($rows_count>0){
            if(password_verify($password,$row_data['Password']))
            {
               // echo"<script>alert('Login Successfull')</script>";
               if($password === $user["Password"] )
               {
               echo"<script>alert('Login Successfull')</script>";
               echo"<script>window.open('profile.php','_self'</script>";
               }
               else
               {
                echo"<script>alert('Login Successfull')</script>";
                echo"<script>window.open('payment.php','_self'</script>";
                }
            }
                else
                {
                echo"<script>alert(' Invalid credentials')</script>";
                }
            }
                else
                {
                echo"<script>alert(' not match')</script>";
                 }
                
        /* $user = mysqli_fetch_array($result,MYSQLI_ASSOC);
         if($user){
            if($password === $user["Password"])
            {
                session_start();
                $_SESSION["em"] = "yes";
                header("Location:./webhome.php");
                die();
            } else{
                echo"<script>alert('password does not match')</script>";
            } 
            
         }*/
        }
  ?>