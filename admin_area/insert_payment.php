<?php
include('../database/dbconnect.php');
if(isset($_POST['insert_payment'])){

    $product_title=$_POST['product_title'];
    $username=$_POST['username'];
    $product_categories=$_POST['product_categories'];
    $product_price=$_POST['product_price'];
    //$product_status='true';

        

    //accessing images
    $product_image=$_FILES['product_image']['name'];

   //accessing image tmp name
   $temp_image=$_FILES['product_image']['tmp_name'];
  

    //checking empty condition
    if($product_title==NULL|| $username==NULL || $product_categories==NULL || 
    $product_price==NULL || $product_image==NULL ){
       echo "<script>alert('Please fill all the available field')</script>";
     exit();
 }
     else{
        move_uploaded_file($temp_image,"./product_images/$product_image");
        //insert query
        $insert_products="insert into `paymenttable` (product_title,username,
        product_categories,product_image,product_price,date)
        values('$product_title','$username',
        '$product_categories','$product_image','$product_price',NOW())";
        $result_query=mysqli_query($conn,$insert_products);
        if($result_query){
            echo "<script>alert('Successfully inserted the products')</script>";
        }
        else{
            echo "data not inserted".mysqli_error($result_query);
        }
     }

    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Payment-Admin</title>
    <!--bootstrap CSS link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--bootstrap-->
    <!-- fonts links -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather&display=swap" rel="stylesheet">
    <!-- fonts links -->
    <link rel="stylesheet" href="style.css">
</head>
<body class="bg-light">
    <div class="container mt-3">
        <h1 class="text-center">Insert Payment</h1>
        <!--Form-->
        <form action="" method="post" enctype="multipart/form-data">
            <!--title-->
            <div class="from-outline mb-4 w-50 m-auto">
                <label for="product_title" class="form-label">Product Title</label>
                <input type="text" name="product_title" id="product_title" class="form-control" 
                placeholder="Enter product title" autocomplete="off" required="required">

            </div>
            <!--name-->
            <div class="from-outline mb-4 w-50 m-auto">
                <label for="username" class="form-label">User name</label>
                <input type="text" name="username" id="username" class="form-control" 
                placeholder="Enter user name" autocomplete="off" required="required">

            </div>
    
            <!--categories-->
            <div class="from-outline mb-4 w-50 m-auto">
                <select name="product_categories" class="form-select" id="product_categories">
                    <option value="">Select Category</option>
                    <option value="Summer">Summer</option>
                    <option value="Winter">Winter</option>
                    <option value="Causal">Causal</option>
                    <option value="Formal">Formal</option>
                    <option value="Party">Party</option>
                    <option value="Discounted">Discounted</option>
                </select>
            </div>
            <!--Image -->
            <div class="from-outline mb-4 w-50 m-auto">
                <label for="product_image" class="form-label">Product image </label>
                <input type="file" name="product_image" id="product_image" 
                class="form-control" autocomplete="off" required="required">
            </div>

            <!--Price-->
            <div class="from-outline mb-4 w-50 m-auto">
                <label for="product_price" class="form-label">Product Price</label>
                <input type="text" name="product_price" id="product_price" class="form-control" 
                placeholder="Enter product price" autocomplete="off" required="required">

            </div>
            <!--Submit-->
            <div class="from-outline mb-4 w-50 m-auto">
                <input type="submit"name="insert_payment" class="btn btn-info mb-3 px-3 "value="Insert Payment">
            </div>
            
        </form>
    </div>
</body>
</html>