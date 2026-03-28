<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Orders</title>

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
    <h2>All Orders </h2>
    <table>
        <thead>
            <?php 
            $get_orders="SELECT * FROM `user_order`   ";
            $result=mysqli_query($conn,$get_orders);
            $rows_count=mysqli_num_rows($result);
            echo"  <tr>
            <th>S no</th>
            <th>Due Amount</th>
            <th> Invoice number</th>
            <th>Total Products</th>
            <th>Order date</th>
            <th>Status</th>
            <th>Delete</th>
            </tr>
        </thead>
        <tbody >";
        if($row_count==0){
            echo"<h3> No order add</h3></br>";  
        }else{
            $number=0;
            while($row_data=mysqli_fetch_assoc($result)){
                $order_id=$row_data['order_id'];
                $customer_id=$row_data['customer_id'];
                $amount_due=$row_data['amount_due'];
                $invoice_number=$row_data['invoice_number'];
                $total_products=$row_data['	total_products'];
                $order_date=$row_data['order_date'];
                $order_status=$row_data['order_status'];
                $number++;
                echo"<tr>
                <th>$number</th>
                <th>$amount_due</th>
                <th>$invoice_number</th>
                <th>$total_products</th>
                <th>$order_date</th>
                <th>$order_status</th>
                <th>delete</th>
                </tr>";

            }
        }
            ?>
           
             

        </tbody>
    </table>

</body>
</html>