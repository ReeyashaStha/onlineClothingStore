<!-- 

function search_products(){
    global $conn;

      //$select_query="SELECT * FROM products_table order by rand() limit 0,3";
    if(isset($_GET['search_data_product'])){
      $search_data_value=$_GET['search_data'];
    }
    $search_query="SELECT * FROM producttable where product_title like '%$search_data_value%'";
    $result_query=mysqli_query($conn,$search_query);
    // $row=mysqli_fetch_assoc($result_query);
    // echo $row('product_title');
    while($row=mysqli_fetch_assoc($result_query)){
        $product_id=$row['product_id'];
        $product_title=$row['product_title'];
        $product_description=$row['product_description'];
        $product_image=$row['product_image'];
        $product_price=$row['product_price'];
        echo "<div class='col-md-3 py-3 py-md-2'>
        <div class='card'>
          <img src='../admin_area/product_images/$product_image' class='card-img-top' alt='$product_title'>
          <div class='card-body'>
            <h3 class='text-center'> $product_title</h3>
            <p class='text-center'>$product_description</p>
            <h2>Rs $product_price<a href='index.php?add_to_cart=$product_id' 
            class='btn btn-light text-light bg-info my-1'>Add to cart</a></h2>
          </div>
        </div>
      </div>";
    }
  }
?> -->




<?php
// function search(){
//     include('../database/dbconnect.php'); 
//                     // include('../function/commonfunction1.php');
//     if(isset($_POST['submit'])){
//         $str=mysqli_real_escape_string($conn,$_POST['str']);
//         $sql="SELECT * from producttable where product_title like '%$str%'
//         or product_description like '%$str%'";
//         $res=mysqli_query($conn,$sql);
//         if(mysqli_num_rows($res)>0){
//             while($row=mysqli_fetch_assoc($res)){
//                 //echo $row['product_title'];
//                 $product_id=$row['product_id'];
//                 $product_title=$row['product_title'];
//                 $product_description=$row['product_description'];
//                 $product_image=$row['product_image'];
//                 $product_price=$row['product_price'];
//                 echo "<div class='col-md-3 py-3 py-md-2'>
//                 <div class='card'>
//                 <img src='../admin_area/product_images/$product_image' class='card-img-top' alt='$product_title'>
//                 <div class='card-body'>
//                 <h3 class='text-center'> $product_title</h3>
//                 <p class='text-center'>$product_description</p>
//                 <h2>Rs $product_price<a href='index.php?add_to_cart=$product_id' 
//                 class='btn btn-light text-light bg-info my-1'>Add to cart</a></h2>
//                 </div>
//                 </div>
//                 </div>";
//             }
//         }
//         else{
//             echo "No data found";
//         }
//     }
// }
?>