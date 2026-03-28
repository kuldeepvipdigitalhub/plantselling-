<?php
 if (isset($_GET['delete_user'])){
  $delete_user=$_GET['delete_user'];

  $delete_query="DELETE FROM `customer` WHERE   Emailid='$delete_user'";
  $result=mysqli_query($conn,$delete_query);
  if($result){
    echo"<script> alert('customer delete successfully')</script>";
    echo"<script>window.open('./panel.php', '_self')</script>";
  }
 }
 ?>