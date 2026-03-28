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
<h2> View Categories </h2>
    </div><br><br>
<table >
    <thead>
        <tr>
            <th> S no </th>
            <th> Category title</th>
            <th> Delete</th>
            
        </tr>
    </thead>
    <tbody>
        <?php 
        $select_cat="SELECT * FROM `categories`";
        $result=mysqli_query($conn,$select_cat);
        $number=0;
        while($row=mysqli_fetch_assoc($result)){
            $categories_id=$row['categories_id'];
            $categories_title=$row['categories_title'];
            $number++;
        
        ?>
        <tr>
        <td><?php echo $number; ?></td>
        <td><?php echo $categories_title ; ?></td>
        <td><a href="panel.php?delete_categories=<?php echo $categories_id ?>"><i class='fa fa-edit yellow-color'>Delete </i></td>

            
        </tr>
        <?php 
        }
        ?>
    </tbody>
</table>
</body>
</html>