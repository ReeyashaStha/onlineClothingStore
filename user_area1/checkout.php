<?php
  ob_start();
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart Details</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <!-- bootstrap links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- bootstrap links -->
    <!-- fonts links -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather&display=swap" rel="stylesheet">
    <!-- fonts links -->
    <style>
/* other cards */
.imglogo{
        width: 7%;
        height: 7%;
    }
    .nav-link active{
        color: black;
    }

    .nav-item .nav-link{
    color: white;
    margin-left: 2px;
    text-shadow: 0px 0px 1px black;
    transition: 0.5s ease;
    }
    
    .card-img-top{
    width:100%;
    height:200px;
    object-fit: contain;
}

.cart_img{
      width:80px;
      height:80px;
      object-fit:contain;
    }
/* other cards */

</style>
</head>
<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg bg-info " id="navbar" >
        <div class="container-fluid">
            <a class="navbar-brand" href="aboutus.php" id="logo">
                <span><img src="../img/logo.jpg" alt="" width="30px" id="logo"></span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" 
                aria-expanded="false" aria-label="Toggle navigation">
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="display_all.php">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="user_registration.php">Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="user_login.php">Login</a>
                    </li>
                    <li class="nav-item dropdown bg-info" >
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" 
                        aria-expanded="false">Category</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="./1summer.php">Summer</a></li>
                            <li><a class="dropdown-item" href="./2winter.php">Winter</a></li>
                            <li><a class="dropdown-item" href="./3casual.php">Casual</a></li>
                            <li><a class="dropdown-item" href="./4formal.php">Formal</a></li>
                            <li><a class="dropdown-item" href="./5party.php">Party</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Discounted</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact us</a>
                    </li>
                </ul>

          </div>
        </div>
      </nav>
    <!-- navbar -->
    <div class="row px-1">
        <div class="col=md-12">
            <div class="row">
                <?php
                if(!isset($_SESSION['username'])){
                    include('user_login1.php');
                    // header(Location:'user_login.php');
                }
                    else{
                        include('payment.php');


                    }
        ?>
        </div>
            </div>
            </div>



      



        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

      </body>
      </html>