<?php
include('../database/dbconnect.php');
$id=$_GET['user_id'];
$sql="select * from `usertable` where user_id=$id";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$username=$row['username'];
$user_email=$row['user_email'];
$user_address=$row['user_address'];
$user_phone=$row['user_phone'];




if(isset($_POST['edit_user_register'])){

    $username=$_POST['user_username'];
    $user_email=$_POST['user_email'];
    $user_address=$_POST['user_address'];
    $user_contact=$_POST['user_contact'];
  
        $insert_user="UPDATE `usertable` set user_id=$id,username='$username',
        user_email='$user_email',user_address='$user_address',user_phone='$user_contact'
        where user_id=$id";
        $result=mysqli_query($conn,$insert_user);
        if($result){
            echo "<script>alert('Successfully edited the user');</script>";
        }
        else{
            echo "data not inserted".mysqli_error($conn);
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
    <title>Edit User Registration</title>
     <!-- bootstrap links -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- bootstrap links -->
    <!-- fonts links -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather&display=swap" rel="stylesheet">
    <!-- fonts links -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <div class="container-fluid my-3">
        <h2 class="text-center">Edit User</h2>
        <div class="row d-flex align-items-center justify-content-center">
            <div class="col-lg-12 col-xl-6">
                <form action="" method="post"> 
                     <!--userfield-->
                <div class="form-outline mb-3">
                <label for="user_username" class="form-label">Username</label>
                <input type="text" name="user_username" id="user_username" value="<?php echo "$username"?>"
                class="form-control" placeholder="Enter your username" autocomplete="off" 
                required="required"/>
            </div>
              <!--emailfield-->
              <div class="form-outline mb-3">
                <label for="user_email" class="form-label">Email</label>
                <input type="text" name="user_email" id="user_email" value="<?php echo "$user_email"?>"
                class="form-control" placeholder="Enter your email" autocomplete="off" 
                required="required"/>
            </div>
             <!--Address field-->
             <div class="form-outline mb-3">
                <label for="user_address" class="form-label">Address</label>
                <input type="text" name="user_address" id="user_address" value="<?php echo "$user_address"?>"
                class="form-control" placeholder="Enter your address" autocomplete="off" 
                required="required"/>
            </div>
              <!--contact field-->
              <div class="form-outline mb-3">
                <label for="user_contact" class="form-label">Contact</label>
                <input type="text" name="user_contact" id="user_contact" value="<?php echo "$user_phone"?>"
                class="form-control" placeholder="Enter your mobile number" autocomplete="off" 
                required="required"/>
            </div>
            <div class="mt-4 pt-2 ">
                <input type="submit" value="Edit User" class="bg-info py-2 px-3 border-0" 
                name="edit_user_register">
                <!-- <p class="small fw-bold mt-2 pt-1 mb-0">Already have an account ?<a 
                href="user_login.php" class="text-danger"> Login</a></p> -->
            </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>