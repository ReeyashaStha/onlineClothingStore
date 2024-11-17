<?php
    include '../database/dbconnect.php';
    if(isset($_GET['deleteid'])){
    $contact_id=$_GET['deleteid'];
    $query="DELETE FROM `contacttable` WHERE contact_id=$contact_id";
    $data=mysqli_query($conn,$query);
    if($data){
        //echo "<script>alert (Record deleted successfully.);</script>";
        header('Location:view_contactus.php');
    }
    else{
        echo "<script>alert(Failed to delete record data from database.);</script>";
    }
}
?>