<?php 

if(isset($_GET['delete_product'])){
    $delete_id=$_GET['delete_product'];
  //  echo $delete_id;
  // delete query
  $conn=mysqli_connect('localhost','root','','plantselling');
  $delete_query="DELETE FROM `products` WHERE product_id='$delete_id'";
  $result_product=mysqli_query($conn,$delete_query);
  if($result_product){
    echo"<script> alert('product delete successfully')</script>";
    echo"<script>window.open('./panel.php', '_self')</script>";
  }
}
?>