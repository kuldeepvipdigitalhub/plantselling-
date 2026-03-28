<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>seller table</title>

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
    h3{
        text-align:left;
        color: red;
        
    }
    .table{
    border: #25262e;
    text-align: center;
 
   } 
   
   .table, th,tr, td  {
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
    <h2>All Sellers </h2>
    <table>
        <thead>
            <?php 
            $get_orders="SELECT * FROM `seller`";
            $result=mysqli_query($conn,$get_orders);
            $rows_count=mysqli_num_rows($result);
            if($rows_count==0){
                echo"<h2>NO users yet</h2>";
            }else{
            echo"  <tr>
            <th>S no</th>
            <th>Full_name</th>
            <th> Email_id</th>
            <th>Phone_no</th>
            <th>Address</th>
             
           <!--<th>Delete</th>-->
            </tr>
        </thead>
         <tbody>";
            $number=0;
            while($row_data=mysqli_fetch_assoc($result)){
                $customer_name=$row_data['Fullname'];
                $customer_email=$row_data['Emailid'];
                $customer_phoneno=$row_data['Phoneno'];
                $customer_address=$row_data['Address'];
                $number++;
                echo"<tr>
                <td>$number</td>
                <td>$customer_name</td>
                <td>$customer_email</td>delete_user
                <td>$customer_phoneno</td>
                <td>$customer_address</td>
              <!--<td> <a href='panel.php?delete_user=<?php echo $customer_email ?>'> <i class='fa fa-edit yellow-color'>Delete </i></td>-->
                </tr>";

            }
        }
            ?>
           
             

        </tbody>
    </table>

</body>
</html>