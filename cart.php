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
</head>
<style>
*body{ 
    margin:0; 
    overflow: hidden;
}
ul{ 
    list-style:none;
    padding:0;
}
a{ 
    text-decoration:none
}
.clear{ 
    clear:both;
}
.wrap{ 
    width:1365px 50px; 
    margin:auto
}

 
.navtop{ 
    background:#333; 
    color:#fff;
}
.navtop > ul{  
     position:relative; 
     z-index:1;
}
.navtop > ul > li{ 
    float:left; 
    border-left:1px solid #fff;
}
.navtop ul li a{ 
    display:block; 
    padding:10px 20px; 
    color:#ccc
}
.navtop ul li:hover > a{ 
    background:#f00; 
    color:#fff;
}
.navtop ul li:first-child{ 
    border:none;
}
.navtop > ul > li:hover > ul{ 
    display:block
}
.navtop > ul > li > ul > li:hover ul{ 
    display:block
}
.navtop > ul > li > ul li{ 
    position:relative;
}
.navtop > ul > li > ul{ 
    display:none; 
    position:absolute; 
    background:#333; 
}
.navtop > ul > li > ul > li > ul{ 
    display:none; 
    position:absolute; 
    left:100%; 
    top:1px; 
    background:#333
}
.navtop ul ul li{ 
    border-top:1px solid #fff;
}
* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 45%;
  width: auto;
  padding: 16px;
  margin-top: -30px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
.copyright {
  padding: 1em 5em;
  background-color: #25262e;
}
.footer-menu{
  float: left;
    margin-top: 10px;
}
.footer-menu a{
  color: #cfd2d6;
  padding: 6px;
  text-decoration: none;
}
.footer-menu a:hover, .social i:hover{
  color: #c7940a;
}
.copyright p {
  font-size: 0.9em;
  text-align: right;
}
@media screen and (max-width: 850px) {
  .row.primary {
    grid-template-columns: 1fr;
  }
}
.gyan{
  margin-top: 0.8em;
}
.row {
  padding: 1em 1em;
}

footer {
  background-color: black;
  color: white;
  bottom: 0;
  width: 100vw;
  font-size: 16px;
}
footer * {
  box-sizing: border-box;
  border: none;
  outline: none;
}
h3 {
  width: 100%;
  text-align: left;
  color: white;
  font-size: 1.4em;
  white-space: nowrap;
}
ul li a:hover {
  color: #79289c;
}
.about p {
  text-align: justify;
  line-height: 2;
  margin: 0;
}
input,
button {
  font-size: 1em;
  padding: 1em;
  width: 40%;
  border-radius: 5px;
  margin-bottom: 5px;
}
button {
  background-color:#4CAF50;
  color: #ffffff;
}
div.social {
  
  justify-content: space-around;
  font-size: 2.4em;
  flex-direction: row;
  margin-top: 0.5em;
}

.row.primary {
  display: grid;
  grid-template-columns: 3fr 2fr 4fr;
  align-items: stretch;
}
.column {
  width: 100%;
  display: flex;
  flex-direction: column;
  padding: 0 2em;
  min-height: 15em;
}

.card-img-top{
  width: 20%;
  height: 200px;
  object-fit: contain;
}
.btn{
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}
.card {
  /* Add shadows to create the "card" effect */
  box-shadow: 0 2px 4px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
}

/* On mouse-over, add a deeper shadow */
.card:hover {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
}

.row {
  display: grid;
  row-gap: 50px;
  grid-template-columns: 10 20px 20px;

  padding: 15px;
}

.col-md-4 {
  background-color: rgba(255, 255, 255, 0.8);
  border: 1px solid rgba(0, 0, 0, 0.8);
  padding: 5px;
  font-size: 20px;
  text-align: center;
}
.card-text {
     padding: 2px 3px;
}

    .text_lep
    {
      text-align: center;
    color: #f00;
    }

    /* first nav css */
    .first_nav{ 
    background:#333; 
    color:#fff;
   
    
}
    * {
  box-sizing:border-box;
}

/* Style the search field */
form.example{
  display: flex;
  align-items: center;
  max-width:40%;
  margin: 0 auto;
}
form.example input[type=text] {
  padding: 10px;
  font-size: 17px;
  border: 1px solid grey;
  float:left;
  width: 20%;
  background: #f1f1f1;
}

/* Style the submit button */
form.example button {
  float: left;
  width: 6%;
  
  padding: 25px;
  background:#4CAF50;
  color: white;

  font-size: 17px;
  border: 1px solid grey;
  border-left: none; /* Prevent double borders */
  cursor: pointer;
}

form.example button:hover {
  background: #0b7dda;
}

/* Clear floats */
form.example::after {
  content: "";
  clear: both;
  display: table;
  
}

.cart-btn {
  display: inline-block;
  padding: 10px 2px;
  font-size: 16px;
  font-weight: bold;
  text-align: center;
  text-transform: uppercase;

  background-color:black;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  transition: all 0.3s ease;
  width: 10%;
  
  
}
.cart-btn a{
  color: #ccc;
}
.cart-btn:hover {
  background-color:red;
}
.third_nav{
text-align: center;
font-size: 120%;
color: brown;
}
/*  home child 2 table  */
   .table{
    border: #25262e;
    text-align: center;
   } 
   /* total price css */ 
   .cart_price{
    display: flex;
  color: #0b7dda;
    
   }
   .table, th,tr, td {
  border:1px solid black;
}
   .cart_price button{
    background-color: #4CAF50;
     cursor: pointer;
    margin:auto;
    width: 20%;
     
   }
   .btnsec{
    background-color: #4CAF50;
     height:  auto;
    width: 12%;
    margin: auto;
    cursor: pointer;
   }
   .cart_image{
    width: 150px;
    height: 120px;
    object-fit: contain;
   }
   .update{
width: 120px;
cursor:pointer;
background-color: #4CAF50;
   }
   .remove{
    width: 120px;
    cursor: pointer;
    background-color:#4CAF50 ;
   }
    .form-input{
      width: 50%;
    }
     
</style>
 
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
         
         
       <!-- <li><a href="#">Categories</a> -->
              
        </li>
        <?php 
        if(!isset($_SESSION['em'])){
          echo" <li><a href='login.php'>Login</a></li>";
        }else{
          echo" <li><a href='logout.php'>Logout</a></li>";
        }
        ?>
        <li ><a href="contact.php">Contact us</a></li>
        <div>
    <!--<button class="cart-btn" ><a href="cart.php" class="cartb" ><sup><?php cart();?></sup>Cart</a></button>-->
    </div> 
         
      </ul>
            <div class="clear"></div>             
    </nav>                                   
       <!--Nav Ends-->
       
  </div>                                          
   <!--Wrap Ends-->

   <!-- home child 1 -->
   <div class="third_nav">
    <h2> Cart Store</h2>
   </div>

<!-- home child 2 table -->
<div class="container">
    <div class="row">
      <form action="" method="POST"> 
<table class="table">
    <thead>
        <tr>
            <th>Product_Title</th>
            <th>Product_Image</th>
            <th>Quantity</th>
            <th>Total_Price</th>
            <th>Remove</th>
            <th colspan="2">  Operations</th>

        </tr>
    </thead>
    <tbody>

      <!-- php code dynmic data -->
      <?php 
      global $conn;
       $ip = getIPAddress(); 
       $total_price=0;
       $conn=mysqli_connect('localhost','root','','plantselling');
       $cart_query="SELECT * FROM cart WHERE ip_address='$ip' ";
       $result=mysqli_query($conn,$cart_query);
       while($row=mysqli_fetch_array($result)){
         $product_id=$row['product_id'];
         $select_product="SELECT * FROM products WHERE product_id='$product_id' ";
         $result=mysqli_query($conn,$select_product);
         while($row_product_price=mysqli_fetch_array($result)){
           $product_price=array($row_product_price['product_price']); //[100+50]
           $price_table=$row_product_price['product_price'];
           $product_title=$row_product_price['product_title'];
           $product_image=$row_product_price['product_image'];
           $product_values=array_sum($product_price);//[150]
           $total_price+=$product_values; //150
      ?>

      <tr>
        <td><?php echo $product_title ?></td>
        <td> <img src="./admin_area/p_img/<?php echo $product_image ?>" alt="" class="cart_image"></td>
        <td><input type="text" name="qty" id="" class="form-input"></td>
        <?php
        $ip = getIPAddress(); 
        if(isset($_POST['update_cart']))
        {
          $quantities=$_POST['qty'];
          //$update_cart=" UPDATE 'cart' SET quantity='$quantities' WHERE ip_address='$ip'";
          $update_cart="UPDATE cart SET  quantity='[$quantities]' WHERE ip_address='$ip'";
          $result_quantities=mysqli_query($conn,$update_cart);
          $total_price= $total_price * $quantities;
          
        }
         ?>
        <td><?php echo $price_table ?> /-</td>
        <td> <input type="checkbox" name="removeitem[]" value="<?php echo $product_id ?>"></td>
        <td>
         <!-- <button class="update">Update</button>-->
         <input type="submit" value="Update Cart" class="update" name="update_cart">
         <!-- <button class="remove">Remove</button>-->
         <input type="submit" value="Remove Cart" class="remove" name="remove_cart">
        </td>
      </tr>
      <?php 
    }} 
     ?>
    </tbody> 
</table>

<!--Total -->
<div class="cart_price">
<h2> Total Price :<strong><?php echo $total_price?> /-</strong> </h2>
  
 
    </div>
 </div>
</div>
</form>
 <button ><a href="webhome.php">Continue Shopping</button></a>
<button  ><a href="./function1/checkout.php" class="btnsec">Checkout</button></a>
<!-- function to remove-->

<?php
function remove_cart_item()
{
  global $conn;
  $conn=mysqli_connect('localhost','root','','plantselling');
if(isset($_POST['remove_cart'])){
  foreach($_POST['removeitem'] as $remove_id){
    echo $remove_id;
    $delete_query="DELETE FROM cart WHERE product_id='$remove_id' ";
    $run_delete=mysqli_query($conn,$delete_query);
    if($run_delete){
      echo"<script>window.open('cart.php','_self')</script>";
    }
  }
   
} 
}
echo $remove_item=remove_cart_item();
?> 
  
 
<br>
<!--footer-->
<footer class="gyan">
<div class="row primary">
    <div class="column about">
        <h3>Connect</h3>
        <p>
            <i class="fa fa-map-marker" aria-hidden="true"></i> Indira Gandhi Engineering College Sagar.<br>
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

<!--end footer-->
<script>
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}

</script>
<!--Slider End-->
</body>
</html>