<?php
    include '../database/dbconnect.php';
    if(isset($_GET['deleteid'])){
    $product_id=$_GET['deleteid'];
    $query="DELETE FROM `producttable` WHERE product_id=$product_id";
    $data=mysqli_query($conn,$query);
    if($data){
        //echo "<script>alert (Record deleted successfully.);</script>";
        header('Location:view_product.php');
    }
    else{
        echo "<script>alert(Failed to delete record data from database.);</script>";
    }
}
?>