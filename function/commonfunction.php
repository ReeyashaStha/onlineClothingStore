<?php
//including connect file
include('../database/dbconnect.php');

//get ip address function
 function getIPAddress() {  
    //whether ip is from the share internet  
    if(!empty($_SERVER['HTTP_CLIENT_IP'])) {  
              $ip = $_SERVER['HTTP_CLIENT_IP'];  
       }  
    //whether ip is from the proxy  
   elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  
              $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
    }  
//whether ip is from the remote address  
  else{  
  $ip = $_SERVER['REMOTE_ADDR'];  
 }  
     return $ip;  
}  
//$ip = getIPAddress();  
//echo 'User Real IP Address - '.$ip;  

//cart function
function cart(){
if(isset($_GET['add_to_cart'])){
  include('../database/dbconnect.php');
 $get_ip_add = getIPAddress();
// $get_user_id=$_GET['user_id'];
  $get_product_id=$_GET['add_to_cart'];
  $select_query="Select * from `cart_details` where ip_address='$get_ip_add'  and 
  product_id= $get_product_id";
  $result_query=mysqli_query($conn,$select_query);
  $num_of_rows=mysqli_num_rows($result_query);
  if($num_of_rows>0){
    echo "<script>alert('This item is already present inside cart')</script>";
    echo "<script>window.open('index.php','_self')</script>";

  }else{
    $insert_query="insert into `cart_details` (product_id,ip_address,quantity)
    values ($get_product_id,'$get_ip_add',0)";
    $result_query=mysqli_query($conn,$insert_query);
    echo "<script>alert('Item is added to cart')</script>";
    echo "<script>window.open('index.php','_self')</script>";

  }




}
}
//function to get cart item numbers
function cart_item(){
  if(isset($_GET['add_to_cart'])){
    include('../database/dbconnect.php');
   $get_ip_add = getIPAddress();
    $select_query="Select * from `cart_details` where ip_address='$get_ip_add'";
    $result_query=mysqli_query($conn,$select_query);
    $count_cart_items=mysqli_num_rows($result_query);
  
    }else{
      include('../database/dbconnect.php');
      $get_ip_add = getIPAddress();
      $select_query="Select * from `cart_details` where ip_address='$get_ip_add'";
      $result_query=mysqli_query($conn,$select_query);
      $count_cart_items=mysqli_num_rows($result_query);
    
  
    }
    echo $count_cart_items;

  }
  

?>


<!-- function search_products(){
      global $conn;

        //$select_query="SELECT * FROM products_table order by rand() limit 0,3";
      if(isset($_GET['search_data_product'])){
        $search_data_value=$_GET['search_data'];
      }
      $search_query="SELECT * FROM products_table where product_keywords like '%$search_data_value%'";
      $result_query=mysqli_query($conn,$search_query);
      // $row=mysqli_fetch_assoc($result_query);
      // echo $row('product_title');
      while($row=mysqli_fetch_assoc($result_query)){
        $product_id=$row['product_id'];
        $product_title=$row['product_title'];
        $product_description=$row['product_description'];
        $product_image1=$row['product_image1'];
        $product_price=$row['product_price'];
        $category_id=$row['category_id'];
        $brand_id=$row['brand_id'];

        //displaying dyanmic data

        echo "<div class='col-md-4 mb-2>
        <div class='card'>
          <img src='./admin/product_images/$product_image1' class='card-img-top' alt='$product_title'>
          <div class='card-body'>
            <h5 class='card-title'>$product_title</h5>
            <p class='card-text'>$product_description</p>
            <a href='#' class='btn btn-info'>Add to cart</a>
            <a href='#' class='btn btn-secondary'>View more</a>
          </div>
        </div>
      </div>";
      }
    }
?> -->

