<!-- connect -->
<?php 
include('../live.php');
include('../function1/common_function.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>

</head>

<style>
*{
    margin: 0;
    padding:0 ;
    box-sizing: border-box;
}
.logo{
    width: 7%;
    height: 8%;
    max-width: 100px;
}

.navbar-nav {
         
        display: inline-block;
        position: absolute;
        right: 34px;
        top: 22px;
}
.nav-link1 {
        margin: 0px 9px;
        padding: 10px 30px;
        border-radius: 10px;
        font-size: 15px;
        cursor: pointer;
    }
    
   /* .nav-link:hover,
    .nav-link {
        background-color: rgb(138, 127, 204);
        color: rgb(255, 247, 6);
        text-decoration: underline rgb(16, 15, 15);
    }*/
    .container-fluid{
        background:aqua;
        padding: 2;
         
    }
    .text-center{
        text-align: center;
        font-size: 1.875em;
    }

.nav-link {
  background-color: #36A9AE;
  background-image: linear-gradient(#37ADB2, #329CA0);
  border: 1px solid #2A8387;
  border-radius: 4px;
  box-shadow: rgba(0, 0, 0, 0.12) 0 1px 1px;
  color: #FFFFFF;
  cursor: pointer;
  display: block;
  font-family: -apple-system,".SFNSDisplay-Regular","Helvetica Neue",Helvetica,Arial,sans-serif;
  font-size: 17px;
  line-height: 100%;
  margin: 0;
  outline: 0;
  padding: 11px 15px 12px;
  text-align: center;
  transition: box-shadow .05s ease-in-out,opacity .05s ease-in-out;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  width: 100%;
}

.nav-link:hover {
  box-shadow: rgba(255, 255, 255, 0.3) 0 0 2px inset, rgba(0, 0, 0, 0.4) 0 1px 2px;
  text-decoration: none;
  transition-duration: .15s, .15s;
}

.nav-link:active {
  box-shadow: rgba(0, 0, 0, 0.15) 0 2px 4px inset, rgba(0, 0, 0, 0.4) 0 1px 1px;
}

.nav-link:disabled {
  cursor: not-allowed;
  opacity: .6;
}

.nav-link:disabled:active {
  pointer-events: none;
}

.nav-link:disabled:hover {
  box-shadow: none;
}

.col-md-12{ 
    display: flex;
    padding: 1;
    align-items: center;
}

.admin_image{
  border: 1px solid #ddd;
  border-radius: 2px;
  padding: 5px;
  width: 100px;
  height: 100px;
}

.row{
    background-color:slategray;
  color:white;
   
}
.text-light{
    font-size:1em;
    text-align: center;
}
.button {
    margin: 50px;
} 
.container1 {
        max-width:auto;
        width: 100%;
        background-color:white;
        padding: 25px 30px;
        border-radius: 5px;
         align-items:center;
        margin: 5;
}

/*li a {
  display: block;
  background-color: #dddddd;
}*/

</style>
<body>
    <!-- navbar -->
<div class="container-fluid "> 
    <!-- first nav -->
    <nav class="navbar navbar-expan-lg navbar-light bg-dark"> 
      <div class="container-fluid">
          <img src="../image/bg.jpg" alt="" class="logo">
          <nav class="navbar navbar-expan-lg  ">
         
            <ul class="navbar-nav">
                <li class="nav-item">
              
               
            </ul>
          </nav>
        </div>
    </nav>
    </div>
</br>

    <!--  second bar-->
    <div class="bg-light">
        <h3 class="text-center p-2"> Manage Details</h3>
    </div>
</br></br>
    <!--  third bar-->
    <div class="row">
        <div class="col-md-12  ">
            <div>
                <a href="#"><img src="../image/bg4.jpg" alt="" class="admin_image"></a>
                <p class="text-light">Admin Name</p>
            </div>
          
          <!--  button*8>.a.nav-link.text-light.bg-info.my-1 -->
            <div class="button text-center">
              <button><a href="insert_product.php" class="nav-link "> Insert Products</a></button>
              <button><a href="panel.php?view_products" class="nav-link "> View Products</a></button>
              <!--<button><a href="panel.php?insert_category" class="nav-link "> Insert categories</a></button>
              <button><a href="panel.php?view_categories" class="nav-link "> View categories</a></button>-->
              <button><a href="panel.php?list_orders" class="nav-link "> All Orders</a></button>
              <button><a href="" class="nav-link "> All Payment</a></button>
              <button><a href="panel.php?list_users" class="nav-link "> List Users</a></button>
              <button><a href="panel.php?list_seller" class="nav-link "> List Sellers</a></button>
              <button><a href="./admin_logout.php" class="nav-link "> Logout</a></button>
      </div>
    </div>
</br></br> </br>
 <!--  fourth bar-->
 <div class="container1">
                <?php
                if(isset($_GET['insert_category'])){
                  include('insert_categories.php');
                }
                if(isset($_GET['view_products'])){
                  include('view_products.php');
                }
                if(isset($_GET['edit_products'])){
                  include('edit_products.php');
                }
                if(isset($_GET['delete_product'])){
                  include('delete_product.php');
                }
                if(isset($_GET['view_categories'])){
                  include('view_categories.php');
                }
                if(isset($_GET['delete_categories'])){
                  include('delete_categories.php');
                }
                if(isset($_GET['list_orders'])){
                  include('list_orders.php');
                }
                if(isset($_GET['list_users'])){
                  include('list_users.php');
                }
                if(isset($_GET['delete_user'])){
                  include('user_delete.php');
                }
                if(isset($_GET['list_seller'])){
                  include('list_seller.php');
                }
                getIPAddress();
                ?>
            </div>
    
</body>
</html>