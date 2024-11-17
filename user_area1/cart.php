<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart Details</title>
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
/* other cards */
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

.cart_img{
      width:80px;
      height:80px;
      object-fit:contain;
    }
/* other cards */

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
                            <li><a class="dropdown-item" href="./6discounted.php">Discounted</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact us</a>
                    </li>
              <li class="nav-item">
                <a class="nav-link" href="cart.php"><i class="fa-solid fa-cart-shopping"></i></a>
              </li>
            </ul>

          </div>
        </div>
      </nav>
    <!-- navbar -->

        <?php include('../database/dbconnect.php');
include('../function/commonfunction.php');
cart();
//$ip = getIPAddress();
//echo 'User Real IP Address - '.$ip;  
?>
    <!--table-->
    <div class="container">
      <div class="row">
        <form action="" method="post">
        <table class="table table-bordered text-center">
          
          <tbody>
            <!--Dynamic data-->
            <?php
            include('../database/dbconnect.php');
            $get_ip_add= getIPAddress();
            $total_price=0;
            $cart_query="Select * from `cart_details` where ip_address='$get_ip_add'";
            $result=mysqli_query($conn,$cart_query);
            $result_count=mysqli_num_rows($result);
            if($result_count>0){
              echo "<thead>
              <tr>
                <th>Product Title</th>
                <th>Product Image</th>
                <th>Quantity</th>
                <th>Total Price</th>
                <th>Remove</th>
                <th colspan='2'>Action</th>
              </tr>
            </thead>";
            while($row=mysqli_fetch_array($result)){
              $product_id=$row['product_id'];
              $select_products="Select * from `producttable` where product_id='$product_id'";
              $result_products=mysqli_query($conn,$select_products);
              while($row_product_price=mysqli_fetch_array($result_products)){
                $product_price=array($row_product_price['product_price']);
                $price_table=$row_product_price['product_price'];
                $product_title=$row_product_price['product_title'];
                $product_image=$row_product_price['product_image'];
               $product_values=array_sum($product_price);
                $total_price+=$product_values;
              

          

            ?>
            <tr>
              <td><?php  echo $product_title?></td>
              <td><img src="../admin_area/product_images/<?php  echo $product_image?>" alt="" class="cart_img"></td>
              <td><input type="text" name="qty" id="" class="form-input w-50"></td>
              <?php
               $get_ip_add= getIPAddress();
               if(isset($_POST['update_cart'])){
                $quantities=$_POST['qty'];
                $update_cart="update `cart_details` set quantity=$quantities where 
                ip_address='$get_ip_add'";
                $result_product_quantity=mysqli_query($conn,$update_cart);
                $total_price=$total_price*$quantities;
               }

               ?>
              <td><?php  echo $price_table?></td>
              <td><input type="checkbox" name="removeitem[]" value="<?php echo $product_id; ?>"></td>
              <td>
                <input type="submit" value="Update Cart" class="bg-info px-3 py-2 border-0 mx-3"
                name="update_cart">
                <!--<button class="bg-info px-3 py-2 border-0 mx-3">Remove</button>-->
                <input type="submit" value="Remove Cart" class="bg-info px-3 py-2 border-0 mx-3"
                name="remove_cart">
              </td>
            </tr>
            <?php
              }
            }
          }
          else{
            echo "<h2 class='text-center'>Cart is empty</h2>";
          }
            ?>
          </tbody>
        </table>
        <!-- subtotal-->
        <div class="d-flex mb-5">
          <?php
           $get_ip_add= getIPAddress();
           $cart_query="Select * from `cart_details` where ip_address='$get_ip_add'";
           $result=mysqli_query($conn,$cart_query);
           $result_count=mysqli_num_rows($result);
           if($result_count>0){
            echo "<center><h4 class='px-3'>Subtotal:<strong class='text-info'>$total_price</strong></h4>
            <input type='submit' value='Continue Shopping' class='bg-info px-3 py-2 border-0 mx-3'
            name='continue_shopping'>
            <button class='bg-secondary p-3 py-2 border-0'><a href='checkout.php' class='text-light text-decoration-none'>Checkout</a></button></center>";

           }
           else{
            echo "<center><input type='submit' value='Continue Shopping' class='bg-info px-3 py-2 border-0 mx-3'
            name='continue_shopping'><center>";

           }
           if(isset($_POST['continue_shopping'])){
            echo "<script>window.open('index.php','_self')</script>";
           }
          ?>

       
        </div>
      </div>
    </div>
    </form>
    <!--function to remove item-->
    <?php
    function remove_cart_item(){
      include('../database/dbconnect.php');
      if(isset($_POST['remove_cart'])){
      foreach($_POST['removeitem'] as $remove_id){
        echo $remove_id;
        $delete_query="Delete from `cart_details` where product_id=$remove_id";
        $run_delete=mysqli_query($conn,$delete_query);
        if($run_delete){
          echo "<script>window.open('cart.php','_self')</script>";
        }
      }
    }

    }
    echo $remove_item=remove_cart_item();

     
       ?>
   <!--table-->


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
		integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

      </body>
      </html>