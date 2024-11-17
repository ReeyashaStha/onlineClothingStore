<?php
include('../database/dbconnect.php');
$id=$_GET['editid'];
$sql="select * from `producttable` where product_id=$id";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$product_title=$row['product_title'];
$product_description=$row['product_description'];
$product_price=$row['product_price'];


if(isset($_POST['edit_product'])){


    $product_title=$_POST['product_title'];
    $product_description=$_POST['product_description'];
    $product_price=$_POST['product_price'];
  
        $insert_products="UPDATE `producttable` set product_id=$id,product_title='$product_title',
        product_description='$product_description',product_price='$product_price'
        where product_id=$id";
        $result=mysqli_query($conn,$insert_products);
        if($result){
            echo "<script>alert('Successfully edited the user');</script>";
        }
        else{
            echo "data failed to edit".mysqli_error($conn);
        }
     //}

    
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product-Admin</title>
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
        <h1 class="text-center">Edit Products</h1>
        <!--Form-->
        <form action="" method="post" enctype="multipart/form-data">
            <!--title-->
            <div class="from-outline mb-4 w-50 m-auto">
                <label for="product_title" class="form-label">Product Title</label>
                <input type="text" name="product_title" id="product_title" value="<?php echo $product_title;?>" 
                class="form-control" placeholder="Enter product title" autocomplete="off" required="required">

            </div>
            <!--description-->
            <div class="from-outline mb-4 w-50 m-auto">
                <label for="description" class="form-label">Product Description</label>
                <input type="text" name="product_description" id="product_description" class="form-control" 
                value="<?php echo $product_description;?>" 
                placeholder="Enter product description" autocomplete="off" required="required">

            </div>

            <!--Price-->
            <div class="from-outline mb-4 w-50 m-auto">
                <label for="product_price" class="form-label">Product Price</label>
                <input type="text" name="product_price" id="product_price" class="form-control" 
                value="<?php echo $product_price;?>"
                placeholder="Enter product price" autocomplete="off" required="required">

            </div>
            <!--Submit-->
            <div class="from-outline mb-4 w-50 m-auto">
                <input type="submit"name="edit_product" class="btn btn-info mb-3 px-3 "value="Edit Products">
            </div>
            
        </form>
    </div>
</body>
</html>