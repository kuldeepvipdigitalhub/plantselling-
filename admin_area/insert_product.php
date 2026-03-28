<?php 
include("../live.php");
if(isset($_POST['sb'])){

    $product_title = $_POST['product_title'];
    $description = $_POST['description'];
    $keywords = $_POST['keywords'];
    $price = $_POST['price'];
    $image = ($_FILES['image']['name']);
    
    //accessing image tmprary name
    $tmp_image = $_FILES['image']['tmp_name'];
    $categories = $_POST['categories'];
    $product_status = 'true';

    // checking empty condition
    if($product_title=='' or $description=='' or $keywords=='' or $price=='' or $image=='' or  $categories==''){
        echo"<script>alert('please fill all the available fields ')</script>";
        exit();
    }else{
        move_uploaded_file($tmp_image,"./p_img/$image");
        

        // insert query
        $insert_products = "INSERT INTO `products` (`product_title`, `product_discription`, `product_keywords`, `product_price`, `product_image`, `categories_id`, `date`, `status`) VALUES (  '$product_title', '$description', '$keywords', '$price', '$image', '$categories', NOW(), '$product_status')";
        $result_query = mysqli_query($conn,$insert_products);
        if($result_query){
            echo"<script>alert('successfully insert the product')</script>";
        }

    }

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Product-Admin panal</title>
</head>
<style>
 * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }
    
    body {
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 10px;
        background: url('image/bg.jpg');
        background-size: cover;
    }
    
    .container {
        max-width: 700px;
        width: 100%;
        background-color :lavender;
        padding: 40px 50px;
        border-radius: 5px;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.15);
    }
    
    .container .title {
        font-size: 25px;
        font-weight: 500;
        position: relative;
    }
    
    .container .title::before {
        content: "";
        position: absolute;
        left: 0;
        bottom: 0;
        height: 3px;
        width: 30px;
        border-radius: 5px;
        background: linear-gradient(135deg, #71b7e6, #9b59b6);
    }
    
    .content form .product-insert {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        margin: 30px 0 15px 0;
    }
    
    form .product-insert .form-outline {
        margin-bottom: 25px;
        width: calc(100% / 2 - 20px);
         
    }
    
    form .form-outline label.details {
        display: block;
        font-weight: 500;
        margin-bottom: 5px;
         
         
    }
    
    .product-insert .form-outline input {
        height: 45px;
        width: 100%;
        outline: none;
        font-size: 16px;
        border-radius: 5px;
        padding-left: 15px;
        border: 1px solid #ccc;
        border-bottom-width: 2px;
        transition: all 0.3s ease;
        margin: 5px;
    }
    
    .product-insert .form-outline input:focus,
    .product-insert .form-outline input:valid {
        border-color: #9b59b6;
    }
    
    form .category {
        display: flex;
        width: 80%;
        margin: 14px 0;
        justify-content: space-between;
    }
    
     .btn{
  padding: 0.6em 2em;
  border: none;
  outline: none;
  color:#48ff00;
  background: #111;
  cursor: pointer;
  position: relative;
  z-index: 0;
  border-radius: 10px;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
}

.btn:before {
  content: "";
  background: linear-gradient(
    45deg,
    #ff0000,
    #ff7300,
    #fffb00,
    #48ff00,
    #00ffd5,
    #002bff,
    #7a00ff,
    #ff00c8,
    #ff0000
  );
  position: absolute;
  top: -2px;
  left: -2px;
  background-size: 400%;
  z-index: -1;
  filter: blur(5px);
  -webkit-filter: blur(5px);
  width: calc(100% + 4px);
  height: calc(100% + 4px);
  animation: glowing-button-85 20s linear infinite;
  transition: opacity 0.3s ease-in-out;
  border-radius: 10px;
}

@keyframes glowing-btn {
  0% {
    background-position: 0 0;
  }
  50% {
    background-position: 400% 0;
  }
  100% {
    background-position: 0 0;
  }
}

.btn:after {
  z-index: -1;
  content: "";
  position: absolute;
  width: 100%;
  height: 100%;
  background: #222;
  left: 0;
  top: 0;
  border-radius: 10px;
}
     
    
    @media(max-width: 584px) {
        .container {
            max-width: 100%;
        }
        form .user-details .input-box {
            margin-bottom: 15px;
            width: 100%;
        }
        form .category {
            width: 100%;
        }
        .content form .user-details {
            max-height: 300px;
            overflow-y: scroll;
        }
        .user-details::-webkit-scrollbar {
            width: 5px;
        }
    }
    
    @media(max-width: 459px) {
        .container .content .category {
            flex-direction: column;
        }
    }
    .form_select{
        height: 45px;
        width: 100%;
        outline: none;
        font-size: 16px;
        border-radius: 5px;
        padding-left: 15px;
        border: 1px solid #ccc;
        border-bottom-width: 2px;
        transition: all 0.3s ease;
        margin: 5px;
    }
</style>
<body >
    <div class="container">
        <div class="title">Insert Products</div>
        <div class="content">

        <!--form title -->
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="product-insert">
            <div class="form-outline">
                <label for="product_title" class="form-label">Product Title</label>
                <input type="text" name="product_title" id="product_title"   placeholder="Enter product" autocomplete="off" required="required">
            </div>

            <!-- form description -->
            <div class="form-outline">
                <label for="description" class="form-label">Product Description</label>
                <input type="text" name="description" id="description"   placeholder="Enter product description" autocomplete="off" required="required">
            </div>

             <!-- form keywords -->
             <div class="form-outline">
                <label for="product_keywords" class="form-label">Product Keywords</label>
                <input type="text" name="keywords" id="keywords"   placeholder="Enter product keywords" autocomplete="off" required="required">
            </div>

            <!-- Product price -->
            <div class="form-outline">
                <label for="product_price" class="form-label">Product Price</label>
                <input type="text" name="price" id="price"   placeholder="Enter product price" autocomplete="off" required="required">
            </div>
            <!-- Image -->
            <div class="form-outline">
                <label for="product_image1" class="form-label">Product Image 1</label>
                <input type="file" name="image" id="image"   placeholder="Enter product image1" autocomplete="off" required="required">
            </div>

            <!--form categories-->
            <div class="form-outline">
            <label for="description" class="form-label"> Categories</label>
                  <select name="categories" id="" class="form_select">
                    
                    <?php 
                    $select_query="Select * from `categories`";
                    $result_query = mysqli_query($conn,$select_query);
                    while($row=mysqli_fetch_assoc($result_query)){
                        $category_title=$row['categories_title'];
                        $category_id=$row['categories_id'];
                        echo"<option value='$category_id'>$category_title</option>";
                        }
                    ?>
                    <!--
                    <option value="">plants</option>
                    <option value="">fruits</option>
                    <option value="">seeds</option>
                    <option value="">vegetables</option>
                    -->
                  </select>
            </div>

            <div class="button">
            <input type="submit" name="sb" class="btn" value="Insert products">
            </div>
        </form>
    </div>
    </div>
</body>
</html>