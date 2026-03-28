<?php
 $conn=mysqli_connect('localhost','root','','plantselling');
?>
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View_products</title>
</head>
<style>
    *body{
        overflow: hidden;
    }
    h2{
        text-align: center;
        color: forestgreen;
        font-size: 35px;
    }
    .table{
    border: #25262e;
    text-align: center;
 
   } 
   
   .table, th,tr, td {
  border:1px solid black;
  width: 10%; 
  background-color:cornflowerblue;
  text-align: center;
  font-size: 20px;
}
.tbody, tr, td{
    background-color: gray;
}

 
.fa  {
    cursor: pointer;
    
}
.yellow-color {
    color:yellow;
    }
    .product_img{
        width: 100px;
        object-fit: contain;
    }
    


</style>
<body>
    <div>
<h2> View Products </h2>
    </div><br><br>
<table >
    <thead>
        <tr>
            <th> Product id </th>
            <th> Product title</th>
            <th> product image</th>
            <th> Product price</th>
            <th> Total sold</th>
            <th> Status</th>
            
            <th> Delete</th>
            
        </tr>
    </thead>
    <tbody >
        <?php 
        $get_products="SELECT * FROM `products` ";
        $result=mysqli_query($conn,$get_products);
        $number=0;
        while(($row=mysqli_fetch_assoc($result))){
           $product_id=$row['product_id'] ;
           $product_title=$row['product_title'] ;
           $product_price=$row['product_price'] ;
           $product_image=$row['product_image'] ;
           $status=$row['status'] ;
           $number++;
           ?>
            <tr>
           <td><?php echo $number; ?></td>
           <td><?php echo $product_title; ?></td>
           <td> <img src='./p_img/<?php echo $product_image; ?>' class='product_img' /></td>
           <td><?php echo $product_price; ?> /-</td>
           <td><?php
           $get_count= "SELECT * FROM `oder_pending` WHERE product_id=$product_id";
           $result_count=mysqli_query($conn,$get_count);
           $rows_count=mysqli_num_rows($result_count);
           echo $rows_count;
           ?></td>
           <td> <?php echo $status; ?></td>
            
           <td><a href="panel.php?delete_product=<?php echo $product_id ?>"><i class='fa fa-edit yellow-color'>Delete </i></td>
       </tr>
 <?php
        }
        ?>
        
    </tbody>

</table>
</body>
</html>
