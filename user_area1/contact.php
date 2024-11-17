<?php include "../database/dbconnect.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send FeedBack</title>
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
        <h5 class="text-center">Feel free too contact us and send feedback for better improvement</h5>
        <h2 class="text-center">Send FeedBack</h2>
        <div class="row d-flex align-items-center justify-content-center">
            <div class="col-lg-12 col-xl-6">
                <form action="" method="post"> 
                     <!--userfield-->
                <div class="form-outline mb-3">
                <label for="contact_name" class="form-label">Name</label>
                <input type="text" name="contact_name" id="contact_name" 
                class="form-control" placeholder="Enter your name" autocomplete="off" 
                required="required"/>
            </div>
              <!--emailfield-->
              <div class="form-outline mb-3">
                <label for="contact_email" class="form-label">Email</label>
                <input type="text" name="contact_email" id="contact_email" 
                class="form-control" placeholder="Enter your email" autocomplete="off" 
                required="required"/>
            </div>
              <!--contact field-->
              <div class="form-outline mb-3">
                <label for="contact_phone" class="form-label">Contact</label>
                <input type="text" name="contact_phone" id="contact_phone" 
                class="form-control" placeholder="Enter your mobile number" autocomplete="off" 
                required="required"/>
            </div>
            <!--message-->
            <div class="form-outline mb-3">
                <label for="contact_message" class="form-label">Message</label>
                <input type="text" name="contact_message" id="contact_message" 
                class="form-control" placeholder="Enter your message" autocomplete="off" 
                required="required"/>
            </div>
            <div class="mt-4 pt-2 ">
                <input type="submit" value="submit" class="bg-info py-2 px-3 border-0" 
                name="submit">
            </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
      <?php
include('../database/dbconnect.php');
if(isset($_POST['submit'])){

    $contact_name=$_POST['contact_name'];
    $contact_email=$_POST['contact_email'];
    $contact_phone=$_POST['contact_phone'];
    $contact_message=$_POST['contact_message'];
    $insert_contact="insert into `contacttable` (contact_name,contact_email,contact_phone,contact_message)
        values('$contact_name','$contact_email','$contact_phone','$contact_message')";
        $result_query=mysqli_query($conn,$insert_contact);
        if($result_query){
            echo "<script>alert('Feedback sent');</script>";
        }
        else{
            echo "data not inserted".mysqli_error($conn);
        }

    
}
?>