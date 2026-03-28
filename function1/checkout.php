<?php 
    $con=mysqli_connect('localhost','root','','plantselling');
    
    
?> 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>checkout page</title>
     
</head>
<style>
 
*body{ 
    margin:0; 
    overflow: hidden;
      
}
ul{ 
    list-style:none;
    padding:0;
}
a{ 
    text-decoration:none
}
.clear{ 
    clear:both;
}
.wrap{ 
    width:1365px 50px; 
    margin:auto
}

 
.navtop{ 
    background:#333; 
    color:#fff
}
.navtop > ul{  
     position:relative; 
     z-index:1
}
.navtop > ul > li{ 
    float:left; 
    border-left:1px solid #fff;
}
.navtop ul li a{ 
    display:block; 
    padding:10px 20px; 
    color:#ccc
}
.navtop ul li:hover > a{ 
    background:#f00; 
    color:#fff;
}
.navtop ul li:first-child{ 
    border:none;
}
.navtop > ul > li:hover > ul{ 
    display:block
}
.navtop > ul > li > ul > li:hover ul{ 
    display:block
}
.navtop > ul > li > ul li{ 
    position:relative;
}
.navtop > ul > li > ul{ 
    display:none; 
    position:absolute; 
    background:#333; 
}
.navtop > ul > li > ul > li > ul{ 
    display:none; 
    position:absolute; 
    left:100%; 
    top:1px; 
    background:#333
}
.navtop ul ul li{ 
    border-top:1px solid #fff;
}
* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}
  * {
  box-sizing:border-box;
}

    .text{
        text-align: center;
        color: cyan;
    font-size:200%;
    }
    img{
        display: block;
 
width: 120%;
    } 
    .column2{ 
        text-align:center;
        font-size:40px ;
        margin-top: 100px;
        
         
    }
    
element.style {
    margin-right: 20px;
    margin-left: 20px;
}

    </style>
 
 
<body>
  <div class="wrap">
    <!-- navbar start -->
    <!-- first nav -->
 
<!-- second nav -->
    <nav class="navtop">
      <ul>
        <li><img src="../img/l2.jpg" width="200px;" height="60px;" style="margin-right: 70px; margin-left: 30px;"></li>
        <li><a href="../webhome.php">Home</a></li>
        <li><a href="#">About</a>
        <ul>
          <li><a href="#">Introduction</a></li>
        </ul>
        </li>
        <li><a href="#">Registration</a>
          <ul>
            <li><a href="../seller_area/sellreg.php">Seller Registration</a></li>
            <li><a href="../coureg.php">Customer Registration</a></li>
          </ul>
        </li>
        <li>
        <li ><a href="contact.php">Contact us</a></li>
      </ul>
            <div class="clear"></div> 

    </nav>                                   
       <!--Nav Ends-->
       <div>
        <?php 
        if(isset($_SESSION['em'])){
            include('login.php');
        }
            else{
              include('./payment.php');
            }
        
        ?>
       </div>
  </div>                                          
   <!--Wrap Ends-->

   <!-- home child 1 -->
   
<br>
 

 
</body>
</html>