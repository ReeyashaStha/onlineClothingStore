<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin dashbord</title>
    <!--bootstrap css link-->
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" 
    crossorigin="anonymous">

    <!--css file-->
    <link rel="stylesheet" href="../style.css">
    <!--internal style-->
    <style>
        .admin_img{
        width: 7%;
        height: 7%;
        }
        #logo{
        width: 5%;
        height: 5%;
        }
    </style>

</head>
<body>
    <!--navbar-->

    <div class="container-fluid p-0">

        <!--first child-->

        <nav class="navbar navbar-expand navbar-light bg-info">
            <div class="container-fluid">
                <img src="../img/logo.jpg" alt="" id="logo">
                <nav class="navbar navbar-expand-lg">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="" class="nav-link">Welcome admin</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </nav>

        <!--Second child-->

        <div class="bg-light">
            <h3 class="text-center p-2">Manage Details</h3>
        </div>

        <!--third child-->

        <div class="row">
            <div class="col-md-12 bg-secondary p-1 align-items-center ">
                <div class="button text-center">
                    <!--button*10>nav-link.text-light.bg-info.my-1-->
                    <button><a href="insert_product.php" class="nav-link text-light bg-info my-1">Insert products</a></button>
                    <button><a href="view_product.php" class="nav-link text-light bg-info my-1">View products</a></button>
                    <!-- <button><a href="view_order.php" class="nav-link text-light bg-info my-1">All orders</a></button> -->
                    <button><a href="insert_payment.php" class="nav-link text-light bg-info my-1">Insert payments</a></button>
                    <button><a href="view_payment.php" class="nav-link text-light bg-info my-1">All payments</a></button>
                    <button><a href="view_user.php" class="nav-link text-light bg-info my-1">List users</a></button>
                    <button><a href="view_contactus.php" class="nav-link text-light bg-info my-1">View Feedback</a></button>
                    <!-- <button><a href="view_contact.php" class="nav-link text-light bg-info my-1">All message</a></button> -->
                    <button><a href="index.php" class="nav-link text-light bg-info my-1">Logout</a></button>
                </div>    
            </div>
        </div>

        <!--fourth child-->

        
    </div>

<!--bootstrap js link-->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" 
crossorigin="anonymous"></script>

</body>
</html>