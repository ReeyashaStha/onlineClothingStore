<?php
    include '../database/dbconnect.php';
    if(isset($_GET['deleteid'])){
    $user_id=$_GET['deleteid'];
    $query="DELETE FROM `usertable` WHERE user_id=$user_id";
    $data=mysqli_query($conn,$query);
    if($data){
        //echo "<script>alert (Record deleted successfully.);</script>";
        header('Location:view_user.php');
    }
    else{
        echo "<script>alert(Failed to delete record data from database.);</script>";
    }
}
?>