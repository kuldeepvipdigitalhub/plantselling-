<?php 
include('../live.php');
if(isset($_POST['sb'])){
    $category_title = $_POST['us'];

    //select data from database
    $select_query = "Select * from `categories` where categories_title = '$category_title' ";
    $result_select = mysqli_query($conn,$select_query);
    $number = mysqli_num_rows($result_select);
    if($number>1){
        echo"<script>alert('This Category is present inside  database ')</script>";
    }
    else{
    $insert_query ="insert into `categories` (categories_title) values (' $category_title')";
    $result = mysqli_query($conn,$insert_query);
    if($result){
        echo"<script>alert('Category has been inserted successfull')</script>";
    }
 }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>

</head>


<style>
    .form-control{
        overflow: hidden;
          border: 1px solid #FFFFFF;
          font-size: 20px;
          padding: 5px;
          width: 1000px;
          align-items:center ;
          color: brown;
          margin: 4px 0;
          box-sizing: border-box;
          border: 2px solid black;
          border-radius: 4px;
          cursor: pointer;
           
          }
   .form-control1{
          
    border: 1px solid #FFFFFF;
    font-size: 20px;
    padding: 5px;
    width: 200px;
    align-items:center ;
    color: brown;
    margin: 4px 0;
    box-sizing: border-box;
    border: 2px solid black;
    border-radius: 4px;
    cursor: pointer;
    background-color: aqua;
    } 
    .input-group1{
        width: 10;
        margin: auto;
        margin-bottom: 2;
    }
    .header {
  padding: 10px;
  text-align: center;
  color:green;
  font-size: 25px;
}
     
    
</style>
<body>

<form action="" method="POST" class="md"  >
    <div class="input-group">
        <span class="input-group-text" id="basic"> 
        <i class="fa-solid "></i></span>
        <div class="header">
        <h3>Insert categories</h3>
        </div>
         <input type="text" class="form-control" name="us" placeholder="Insert categories" aria-label="Username" aria-describedby="basic-addon1"  >
        
          
    <div class="input-group1">  
         <input type="submit" class="form-control1" name="sb" value="Insert categories" >
    </div>
   <!-- <button class="form-control1">Insert categories</button>-->
</form>
</body>
</html>