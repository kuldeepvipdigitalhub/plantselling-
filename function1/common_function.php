  <?php 
   
  // geting products
function getproducts(){
        global $conn;

//condition to check issert or not

if(!isset($_GET['categories'])){
$conn=mysqli_connect('localhost','root','','plantselling');
$select_query = "SELECT * FROM `products` WHERE categories_id = categories_id"; // order by rand() limit 0,5
$result_query = mysqli_query($conn,$select_query);
//$row = mysqli_fetch_assoc($result_query);
//echo $row['product_title'];
$num_of_rows = mysqli_num_rows($result_query);
if($num_of_rows==0){
  echo"<h2 class='text_lep'> NO stock for this product</h2>";

}
while($row = mysqli_fetch_assoc($result_query)){
$product_id = $row['product_id'];
$product_title = $row['product_title'];
$product_discription = $row['product_discription'];
$product_keywords = $row['product_keywords'];
$product_price = $row['product_price'];
$product_image = $row['product_image'];
$categories_id = $row['categories_id'];
$product_id = $row['product_id'];

echo"<div class='col-md-4'>
<div class='card'>
  <img src='./admin_area/p_img/$product_image' class='card-img-top' alt='$product_title'>
  <div class='card-body'>
     <h5 class='card-title'>$product_title</h5>
     <p class='card-text'>$product_discription</p>
     <p class='card-text'>Price: $product_price /-</p>
     <a href='webhome.php?add to cart=$product_id' class='btn '>Add to cart</a>
  </div>
</div> 
</div> ";
}
}
}

// getting uniqe caregories
function get_uniqe_caregories(){
  global $conn;

//condition to check issert or not
if(isset($_GET['categories'])){
  $categories_id=$_GET['categories'];
$conn=mysqli_connect('localhost','root','','plantselling');
$select_query = "SELECT * FROM `products` WHERE categories_id = '$categories_id'"; // order by rand() limit 0,5
$result_query = mysqli_query($conn,$select_query);
//$row = mysqli_fetch_assoc($result_query);
//echo $row['product_title'];
$num_of_rows = mysqli_num_rows($result_query);
if($num_of_rows==0){
echo"<h2 class='text_lep'> NO stock for this category</h2>";

}
while($row = mysqli_fetch_assoc($result_query)){
$product_id = $row['product_id'];
$product_title = $row['product_title'];
$product_discription = $row['product_discription'];
$product_keywords = $row['product_keywords'];
$product_price = $row['product_price'];
$product_image = $row['product_image'];
$categories_id = $row['categories_id'];
$product_id = $row['product_id'];

echo"<div class='col-md-4'>
<div class='card'>
<img src='./admin_area/p_img/$product_image' class='card-img-top' alt='$product_title'>
<div class='card-body'>
<h5 class='card-title'>$product_title</h5>
<p class='card-text'>$product_discription</p>
<p class='card-text'>Price: $product_price /-</p>
<a href='webhome.php?add to cart=$product_id' class='btn '> Add to cart</a>
</div>
</div> 
</div> ";
}
}
}


// displaying categories is sidenav
function getcategories(){
  global $conn;
  $conn=mysqli_connect('localhost','root','','plantselling');
  $select_query = "SELECT * FROM `categories`";
  $result_query = mysqli_query($conn,$select_query);
 while($row = mysqli_fetch_assoc($result_query)){
  @$categories_id  = $row['categories_id '];
  $categories_title = $row['categories_title'];
    echo"<li><a href='webhome.php?categories=$categories_id'>$categories_title</a></li>";
    
  } 
  
}

// searching product fuction
function search_product(){
 global $conn;
  
if(isset($_GET['search_data_product'] )){
  $search_data_value=$_GET['search_data'];
$conn=mysqli_connect('localhost','root','','plantselling');
$search_query = "SELECT * FROM `products` WHERE product_title like'%$search_data_value%'"; // order by rand() limit 0,5
$result_query = mysqli_query($conn,$search_query);
//$row = mysqli_fetch_assoc($result_query);
//echo $row['product_title'];
$num_of_rows = mysqli_num_rows($result_query);
if($num_of_rows==0){
  echo"<h2 class='text_lep'> NO stock for this product</h2>";

}
while($row = mysqli_fetch_assoc($result_query)){
$product_id = $row['product_id'];
$product_title = $row['product_title'];
$product_discription = $row['product_discription'];
$product_keywords = $row['product_keywords'];
$product_price = $row['product_price'];
$product_image = $row['product_image'];
$categories_id = $row['categories_id'];
$product_id = $row['product_id'];

echo"<div class='col-md-4'>
<div class='card'>
  <img src='./admin_area/p_img/$product_image' class='card-img-top' alt='$product_title'>
  <div class='card-body'>
     <h5 class='card-title'>$product_title</h5>
     <p class='card-text'>$product_discription</p>
     <p class='card-text'>Price: $product_price /-</p>
     <a href='webhome.php?add to cart=$product_id' class='btn '>Add to cart</a>
  </div>
</div> 
</div> ";
}
}
}

// get ip address 
function getIPAddress() {  
  //whether ip is from the share internet  
   if(!empty($_SERVER['HTTP_CLIENT_IP'])) {  
              $ip = $_SERVER['HTTP_CLIENT_IP'];  
      }  
  //whether ip is from the proxy  
  elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  
              $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
   }  
//whether ip is from the remote address  
  else{  
           $ip = $_SERVER['REMOTE_ADDR'];  
   }  
   return $ip;  
}  
//$ip = getIPAddress();  
//echo 'User Real IP Address - '.$ip; 

// cart function
function cart(){
if(isset($_GET['add_to_cart'])){
  global $conn;
  $ip = getIPAddress(); 
 
  $_get_product_id=$_GET['add_to_cart'];
  $conn=mysqli_connect('localhost','root','','plantselling');
  $select_query="SELECT * FROM `cart` WHERE ip_address='$ip' and product_id= '$_get_product_id'";
  $result_query = mysqli_query($conn,$select_query);
  $num_of_rows = mysqli_num_rows($result_query);
if($num_of_rows>0){
  echo"<script>alert('this plant is already present cart')</script>";
  echo"<script>window.open('webhome.php','_self')</script>";
}else{
  $insert_query ="INSERT INTO `cart` (`product_id`, `ip_address`, `quantity`) VALUES ('$_get_product_id', '$ip ',0)";
  $result_query = mysqli_query($conn,$insert_query);
  echo"<script>alert('plant added to cart')</script>";
  echo"<script>window.open('webhome.php','_self')</script>";
}

}
}
// function to get  cart item numbers
function cart_item(){
  if(isset($_GET['add_to_cart'])){
    global $conn;
    $ip = getIPAddress(); 
    $conn=mysqli_connect('localhost','root','','plantselling');
    $select_query="SELECT * FROM `cart` WHERE ip_address='$ip'";
    $result_query = mysqli_query($conn,$select_query);
  $count_cart_item = mysqli_num_rows($result_query);
  }else{
    global $conn;
    $ip = getIPAddress(); 
    $conn=mysqli_connect('localhost','root','','plantselling');
    $select_query="SELECT * FROM `cart` WHERE ip_address='$ip'";
    $result_query = mysqli_query($conn,$select_query);
  $count_cart_item = mysqli_num_rows($result_query);
  }
  echo $count_cart_item;
  }


// total price function
function total_price(){
  global $conn;
  $ip = getIPAddress(); 
  //$total_price=0;
  $conn=mysqli_connect('localhost','root','','plantselling');
  $cart_query="SELECT * FROM `cart` WHERE ip_address='$ip' ";
  $result=mysqli_query($conn,$cart_query);
  while($row=mysqli_fetch_array($result)){
    $product_id=$row['product_id'];
    $select_product="SELECT * FROM `products` WHERE product_id='$product_id' ";
    $result=mysqli_query($conn,$select_product);
    while($row_product_price=mysqli_fetch_array($result)){
      $product_price=array($row_product_price['product_price']); //[100+50]
      $product_values=array_sum($product_price);//[150]
      //$total_price+=$product_values; //150
    }
  }
  //echo $total_price;
} 
?>