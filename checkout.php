<?php 
   session_start();
   include('./live.php');
   include('./function1/common_function.php');
    
?> 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cart_details</title>
    <link href="./css/style.css" rel="stylesheet">
</head>
 
 
<body>
  <div class="wrap">
    <!-- navbar start -->
    <!-- first nav -->
 
<!-- second nav -->
    <nav class="navtop">
      <ul>
        <li><img src="img/l2.jpg" width="120px;" height="50px;" style="margin-right: 20px; margin-left: 20px;"></li>
        <li><a href="webhome.php">Home</a></li>
        <li><a href="#">About</a>
        <ul>
          <li><a href="#">Introduction</a></li>
        </ul>
        </li>
        <li><a href="#">Registration</a>
          <ul>
            <li><a href="sellreg.php">Seller Registration</a></li>
            <li><a href="coureg.php">Customer Registration</a></li>
          </ul>
        </li>
        <li>
        <li ><a href="contact.php">Contact us</a></li>
      </ul>
            <div class="clear"></div> 

    </nav>                                   
       <!--Nav Ends-->
       <div>
        <?php 
        if(!isset($_SESSION['Emailid'])){
            include('./login.php');
        }
            else{
                include('./admin_area/payment.php');
            }
        
        ?>
       </div>
  </div>                                          
   <!--Wrap Ends-->

   <!-- home child 1 -->
   
<br>
 

 
</body>
</html>