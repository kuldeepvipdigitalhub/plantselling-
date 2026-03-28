
<?php 
   session_start();
  
   include('./function1/common_function.php');
    
?> 
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet"   href="./css/profile.css" /> 
</head>
<style>
*body{ 
    margin:0; 
    overflow: hidden;
      
}
h2{
    text-align: center;
    color: aqua;

}  
h4{
    text-align: center;
    color: brown;
     
}
.col{
    margin: 2px;
    padding: 0;
}
.navnew{
    text-align: center;
}
</style>
 
<body>
  <div class="wrap">

    <!-- navbar start -->
    <!-- first nav -->
    
    <nav class="first_nav" >
    <form class="example" action="search_product.php">
    <input type="search" placeholder="Search.." name="search_data">
    <button type="submit" value="search" name="search_data_product"><i class="fa fa-search"></i></button>
    </form>
     
  </nav>
 
<!-- second nav -->
    <nav class="navtop">
      <ul>
        <li><img src="img/l2.jpg" width="120px;" height="50px;" style="margin-right: 20px; margin-left: 20px;"></li>
        <li><a href="webhome.php">Home</a></li>
        <li><a href="#">About</a>
        <ul>
          <li><a href="./introduction.php">Introduction</a></li>
        </ul>
        </li>
        <li><a href="./profile.php">My Account</a>
        </li>
        </ul> <ul>
        <li ><a href="contact.php">Contact us</a></li>  
      </ul>
    <div class="clear"></div>
       
    </nav>  
    </br></br>  
    
       <!--Nav Ends-->
<div>
        <h2> Hidden store</h2>
    </div>
    <div class="row">
        <div class="col">
            <ul class="navnew"></ul>
            <li><a href="#"><h4>Your Profile</h4></a></li>
             
        </div>

    </div>

                                         
   

 
   <footer class="gyan">
<div class="row primary">
    <div class="column about">
        <h3>Connect</h3>
        <p>
            <i class="fa fa-map-marker" aria-hidden="true"></i> Goverment Pollytechnic Collage Balaghat.<br>
        </p>
        <div class="social">
            <i class="fa fa-facebook-square"> <a href="https://www.facebook.com/home.php"> <img src="img/f.png" width="20px;" height="20px;"> </a></i>
            <i class="fa fa-twitter-square"><img src="img/t.png" width="20px;" height="20px;"></i>
            <i class="fa fa-instagram"> <a href="https://www.instagram.com/mr__a_r__1307/"> <img src="img/i.png" width="20px;" height="20px;"></a></i>
        </div>
    </div>

    <div class="column link">
        <h3>Links</h3>
        <ul>
            <li style="margin-top: 0.8em;"><a href="webhome.php">Home</a></li>
            <li style="margin-top: 0.8em;"><a href="">About Us</a></li>
            <li style="margin-top: 0.8em;"><a href="contact.php">Contact</a></li>
        </ul>
    </div>

    <div class="column subscribe">
        <h3>Email</h3>
        <div>
           <input type="email" placeholder="Your email id here" />
           <button>Subscribe</button>
        </div>
    </div>
</div>
<div class="row copyright">
  <div class="footer-menu">
  <a href="">Cookies Policy</a>
  <a href="">Terms Of Service</a>
  <a href="">Support</a>

  </div>
   <p>Copyright &copy; 2023</p>
</div>
</footer>
 
 

 
<!--Slider End-->
</body>
</html>