<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insta Wears</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <!-- bootstrap links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- bootstrap links -->
    <!-- fonts links -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather&display=swap" rel="stylesheet">
    <!-- fonts links -->
    <style>
    .imglogo{
        width: 7%;
        height: 7%;
    }
    .nav-link active{
        color: black;
    }

    .nav-item .nav-link{
    color: white;
    margin-left: 2px;
    text-shadow: 0px 0px 1px black;
    transition: 0.5s ease;
    }
    
    .card-img-top{
    width:100%;
    height:200px;
    object-fit: contain;
}

</style>
</head>
<body>


    <!-- navbar -->


    <nav class="navbar navbar-expand-lg bg-info " id="navbar" >
        <div class="container-fluid">
            <a class="navbar-brand" href="aboutus.php" id="logo">
                <span><img src="../img/logo.jpg" alt="" width="30px" id="logo"></span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" 
                aria-expanded="false" aria-label="Toggle navigation">
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="display_all.php">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="user_registration.php">Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="user_login.php">Login</a>
                    </li>
                    <li class="nav-item dropdown bg-info" >
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" 
                        aria-expanded="false">Category</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="./1summer.php">Summer</a></li>
                            <li><a class="dropdown-item" href="./2winter.php">Winter</a></li>
                            <li><a class="dropdown-item" href="./3casual.php">Casual</a></li>
                            <li><a class="dropdown-item" href="./4formal.php">Formal</a></li>
                            <li><a class="dropdown-item" href="./5party.php">Party</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Discounted</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="cart.php"><i class="fa-solid fa-cart-shopping"></i></a>
                    </li>
                </ul>
                <form class="d-flex" role="search" method="post" action="search.php">

                <!-- <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"
                name="search_data">
                <input type="submit" value="search" name="search_data_product" class="btn btn-outline-light" /> -->
                
                    <input class="form-control me-2" type="textbox" name="str" placeholder="Search" aria-label="Search">
                    <input type="submit" name="submit" value="search" class="btn btn-outline-light"/>
                </form>
            </div>
        </div>
    </nav>


<!--navbar-->

    <!--Head line-->
    <div class="class bg-light">
  <h3 class="class text-center">Insta Wears</h3>
  <p class="class text-center">Online shopping store</p>
</div>

<!--Sub headline-->

<div class="class">
  <h2 class="class text-center">Party Wears</h2>
</div>


    <?php include('../database/dbconnect.php');
include('../function/commonfunction.php');
cart();
//$ip = getIPAddress();
//echo 'User Real IP Address - '.$ip;  
?>
    <!--product card -->
    <div class="container" id="product-cards">

      <div class="row" style="margin-top: 30px;">
      <?php
       include('../database/dbconnect.php');
   //  if(isset($_GET['producttable'])){
    //  $product_categories=$_GET['5smartphone.php'];
    $select_query="Select * from `producttable` where product_categories='Party'";
    $result_query=mysqli_query($conn,$select_query);
    //$row=mysqli_fetch_assoc($result_query);
    //echo $row['product_title'];
    while($row=mysqli_fetch_assoc($result_query)){
      $product_id=$row['product_id'];
      $product_title=$row['product_title'];
      $product_description=$row['product_description'];
      $product_image=$row['product_image'];
      $product_price=$row['product_price'];
      echo "<div class='col-md-3 py-3 py-md-2'>
      <div class='card'>
        <img src='../admin_area/product_images/$product_image' class='card-img-top' alt=''>
        <div class='card-body'>
          <h3 class='text-center'> $product_title</h3>
          <p class='text-center'>$product_description</p>
          <h2>Rs $product_price<a href='index.php?add_to_cart=$product_id' class='btn bg-info'>Add to cart</a></h2>
        </div>
      </div>
    </div>";
      
    }
      ?>
        
      </div>
      <div style="margin-bottom:50px"></div>
        </div>
        <!--footer-->
        </div><div class="bg-info padding=3 text-center" >
        <p>All rights reserved</p>
        </div>
    <!--product card-->
        <!-- footer -->
    <!-- <footer id="footer">
      <div class="footer-top">
        <div class="container">
          <div class="row">

            <div class="col-lg-3 col-md-6 footer-contact">
              <h3>Electronic Gadget</h3>
              <p>Newroad,Kathmandu.
              </p>
              <strong>Phone:</strong>9841000000<br>
              <strong>Email:</strong>electrogadget@.com <br>
            </div>

            <div class="col-lg-3 col-md-6 footer-links">
              <h4>Usefull Links</h4>
             <ul>
              <li><a href="#">Home</a></li>
              <li><a href="#">About Us</a></li>
              <li><a href="#">Services</a></li>
              <li><a href="#">Terms of service</a></li>
              <li><a href="#">Privacy policey</a></li>
             </ul>
            </div>



           

            <div class="col-lg-3 col-md-6 footer-links">
              <h4>Our Services</h4>

             <ul>
              <li><a href="#">Laptop</a></li>
              <li><a href="#">Computer</a></li>
              <li><a href="#">Tablet</a></li>
              <li><a href="#">Mobile Phone</a></li>
              <li><a href="#">Camera</a></li>
             </ul>
            </div>

            <div class="col-lg-3 col-md-6 footer-links">
              <h4>Our Social Networks</h4>
              <div class="socail-links mt-3">
                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                <a href="#"><i class="fa-brands fa-skype"></i></a>
                <a href="#"><i class="fa-brands fa-linkedin"></i></a>
              </div>
            
            </div>

          </div>
        </div>
      </div>
     
    
    </footer> -->
    <!-- footer -->

      



        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

      </body>
      </html>