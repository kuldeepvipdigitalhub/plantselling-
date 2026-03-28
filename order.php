<?php 
include('./function1/common_function.php');
?>
<?php 
   session_start();
    
   $conn=mysqli_connect('localhost','root','','plantselling');
   if (isset($_GET['customer_id'])){
    $customer_id=$_GET['customer_id'];
    echo"$customer_id";
   }

    // getting total items and total price
    $get_ip_address=getIPAddress();
    $total_price=0;
    $cart_query_price="SELECT * FROM `cart` WHERE 	ip_address ='$get_ip_address'";
    $result_cart_price = mysqli_query($conn,$cart_query_price);
    $invoice_number=mt_rand();
    $status='pending';


    $count_products=mysqli_num_rows($result_cart_price);
    while ($row_price=mysqli_fetch_array($result_cart_price)){
    $product_id=$row_price['product_id'];
    $select_product="SELECT * FROM `products` WHERE product_id ='$product_id'";
    $run_price = mysqli_query($conn,$select_product);

    while($row_product_price=mysqli_fetch_array($run_price)){
        $product_price=array($row_product_price['product_price']);
        $product_values=array_sum($product_price);
        $total_price+=$product_values;
    }
   }

   // getting quantity form cart
   $get_cart="SELECT * FROM `cart`";
   $run_cart=mysqli_query($conn,$get_cart);
   @$get_item_quntity=mysqli_fetch_array($run_cart);
   $quantity=@$get_item_quantity['quantity'];
   if($quantity==0){
    $quantity=1;
    $subtotal=$total_price;
   }
   else{
    $quantity=$quantity;
    $subtotal=$total_price*$quantity;

   }
   $insert_order="INSERT INTO `user_order`(  `customer_id`, `amount_due`, `invoice_number`, `total_products`, `order_date`, `order_status`) VALUES ( '[$customer_id]','[$subtotal]','[$invoice_number]','[$count_products]',NOW(),'[$status]') ";
$result_query=mysqli_query($conn,$insert_order);
if($result_query){
    echo"<script>alert('Order are submitted successefuly')</script>";
    echo"<script> window.open('./cart.php','_self')</script>";
}

//order pending
$insert_pending_order="INSERT INTO `oder_pending`(  `customer_id`, `invoice_number`, `product_id`, `quantity`, `order_status`) VALUES ('[$customer_id]','[$invoice_number]','[$product_id]','[$quantity]','[$status]' )";
$result_pending_query=mysqli_query($conn,$insert_pending_order);

//delete product form cart
$empty_cart="DELETE FROM `cart` WHERE ip_address='$get_ip_address'";
$result_empty_cart=mysqli_query($conn,$empty_cart);
?> 