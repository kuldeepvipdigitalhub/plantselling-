<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>payment page</title>
</head>
<style>
    *body{
        overflow: hidden;
        
    }
    .text{
        text-align: center;
        color: cyan;
    font-size:200%;
    }
    img{
        display: block;
margin-left: auto;
margin-right: auto;
width: 50%;
    }
    .column2{ 
        text-align:center;
        font-size:40px ;
        margin-top: 100px;
        
         
    }

    </style>
<body>
    <!-- php code to access user id --> 
    <?php 
  /*$con=mysqli_connect('localhost','root','','plantselling');
    $user_id= getIPAddress();
    $get_user = "SELECT * FROM `customer` WHERE user_ip= '$user_id' ";
    $result=mysqli_query($con,$get_user);
    $run_query=mysqli_fetch_array($result);
    $user_id=$run_query['user_id'];*/

    ?>
    <div class="container">
        <h2 class="text" > Payment options</h2>
        <div class="row">
            <div class="column1">
            <a href="https://www.paypal.com" target="_blank"><img src="./p_img/Recover-The-Money-From-Wrong-UPI-ID.jpg" alt=""></a>
            </div>
            <div class="column2">
            <a href="order.php?user_id=<?php  echo $user_id  ?>"  >Pay Offline</a>
            </div>
    </div>
    </div>
</body>
</html>