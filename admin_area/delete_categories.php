 <?php
 if (isset($_GET['delete_categories'])){
  $delete_categories=$_GET['delete_categories'];

  $delete_query="DELETE FROM `categories` WHERE categories_id='$delete_categories'";
  $result=mysqli_query($conn,$delete_query);
  if($result){
    echo"<script> alert('category delete successfully')</script>";
    echo"<script>window.open('./panel.php', '_self')</script>";
  }
 }
 ?>