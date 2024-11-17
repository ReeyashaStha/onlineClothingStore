<?php include "../database/dbconnect.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
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
        <h2 class="text-center">New User Registration</h2>
        <div class="row d-flex align-items-center justify-content-center">
            <div class="col-lg-12 col-xl-6">
                <form action="" method="post"> 
                     <!--userfield-->
                <div class="form-outline mb-3">
                <label for="user_username" class="form-label">Username</label>
                <input type="text" name="user_username" id="user_username" 
                class="form-control" placeholder="Enter your username" autocomplete="off" 
                required="required"/>
            </div>
              <!--emailfield-->
              <div class="form-outline mb-3">
                <label for="user_email" class="form-label">Email</label>
                <input type="text" name="user_email" id="user_email" 
                class="form-control" placeholder="Enter your email" autocomplete="off" 
                required="required"/>
            </div>
            <!--password field-->
            <div class="form-outline mb-3">
                <label for="user_password" class="form-label">Password</label>
                <input type="password" name="user_password" id="user_password" 
                class="form-control" placeholder="Enter your password" autocomplete="off" 
                required="required"/>
            </div>
             <!--confirm password field-->
             <div class="form-outline mb-3">
                <label for="conf_user_password" class="form-label">Confirm Password</label>
                <input type="password" name="conf_user_password" id="conf_user_password" 
                class="form-control" placeholder="Confirm password" autocomplete="off" 
                required="required"/>
            </div>
             <!--Address field-->
             <div class="form-outline mb-3">
                <label for="user_address" class="form-label">Address</label>
                <input type="text" name="user_address" id="user_address" 
                class="form-control" placeholder="Enter your address" autocomplete="off" 
                required="required"/>
            </div>
              <!--contact field-->
              <div class="form-outline mb-3">
                <label for="user_contact" class="form-label">Contact</label>
                <input type="text" name="user_contact" id="user_contact" 
                class="form-control" placeholder="Enter your mobile number" autocomplete="off" 
                required="required"/>
            </div>
            <div class="mt-4 pt-2 ">
                <input type="submit" value="Register" class="bg-info py-2 px-3 border-0" 
                name="user_register">
                <p class="small fw-bold mt-2 pt-1 mb-0">Already have an account ?<a 
                href="user_login.php" class="text-danger"> Login</a></p>
            </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
<!--php code-->
<?php
if(isset($_POST['user_register'])){
  $user_username = $_POST['user_username'];
  $user_email = $_POST['user_email'];
  $user_password= $_POST['user_password'];
  $conf_user_password = $_POST['conf_user_password'];
  $user_address= $_POST['user_address'];
  $user_contact= $_POST['user_contact'];
  //$user_ip=getIPAddress();
  //select query
  $select_query="SELECT * FROM `usertable` WHERE username ='$user_username' OR user_email = '$user_email'";
  $result=mysqli_query($conn,$select_query);
  $rows_count=mysqli_num_rows($result);
  if($rows_count > 0){
    echo "<script> alert('Username and email already exist')</script>";
   }elseif($user_password!= $conf_user_password){
    echo "<script> alert('Password Does Not Match')</script>";

   }
   else{
    $insert_query = "INSERT INTO `usertable`(username,user_email,user_password,
    user_address,user_phone) VALUES('$user_username ','$user_email',' $user_password',
    '$user_address','$user_contact')";
    $sql_execute=mysqli_query($conn,$insert_query);
    if($sql_execute){
     echo "<script> alert('Data inserted successfully')</script>";
    }else{
       die(mysqli_error($conn));
    }
    
   }
   //selecting cart items
   $select_cart_items="SELECT * from `cart_details` where ip_address='$user_ip'";
   



}
?>
