
      <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insta Wears</title>
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
                            <li><a class="dropdown-item" href="./6discounted.php">Discounted</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact us</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="cart.php"><i class="fa-solid fa-cart-shopping"></i>
                        <?php include('../function/commonfunction.php'); 
                        cart_item();
                        ?></a>
                    </li>
                </ul>

                <!--search-->
                
                <form class="d-flex" role="search" method="post" action="search.php">

                <!-- <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"
                name="search_data">
                <input type="submit" value="search" name="search_data_product" class="btn btn-outline-light" /> -->
                
                    <input class="form-control me-2" type="textbox" name="str" placeholder="Search" aria-label="Search">
                    <input type="submit" name="submit" value="search" class="btn btn-outline-light"/>
                </form>
                
            </div>
        </div>
    </nav>
      <div class="class bg-light">
  <h3 class="class text-center">Insta Wears</h3>
  <p class="class text-center">Online shopping store</p>
</div>
    <!-- navbar -->
    <!-- home content -->
    <div class="container" id="about">
        <h3>About us</h3>
        <hr><p>E-commerce has altered the way people shop all over the world. 
          People can now easily buy whatever they want, whenever they want, online. 
          Consumers are no longer required to visit the shop or wait long hours to make a purchase. 
          Thus, e-commerce has revolutionized shopping and made it easier to make purchases.

        </p>
        <hr>
        <div class="row" style="margin-top: 50px;">
            <div class="col-md-5 py-3 py-md-0">
                <div class="card">
                    <img src="../img/logo.jpg" alt="">
                </div>
            </div>
            <div class="col-md-7 py-3 py-md-0">
                <p>With every business having an online presence, keeping up with them has become impossible. 
        Consumers nowadays are turning to sites with "buy it all in one place" options rather than 
        browsing from site to site. Owning branded clothes is no longer 
        reserved for rich people any more, anyone with an eye for class and style can keep 
        up with the fashion statement. Now you can pick your 
        favorite brand and start shopping.</p>

                 <p>We assure that our buyers get what they see at the best quality and price. 
                  Deliver the order within 2-24 hours of order placement without intermediaries. 
                  In case of the defect returning is possible but it should be within three days.
                  Do keep browsing the website and the social networking site for new updates and 
                  do send feedback for better improvement. 
                  </p>
                   
                  
                 <!-- <p>Every work comes with responsibilities. At electronic gadget, we take our responsibilities as principles.
                   To execute our responsibilities, every department commits to excellence.
                    From CRM to logistics, our delivery represents us.</p> -->
                
            </div>
            <div class="row" style="margin-bottom: 50px;"></div>
            <hr>
        </div>
    </div>

        <!-- home content -->
        <!-- footer -->
  
      <div class=" bg-info">
        <div class="container">
          <div class="row">

            <div class="col-lg-6 col-md-6">
              <h3>Contact info</h3>
              <p>Nayabazar,Kathmandu.</p>
              <p><b>Phone:</b>9803021876</p>
              <p><b>Email:</b>instawears@gmail.com</p>
            </div>

            <div class="col-lg-6 col-md-6">
              <h4>Visit our Social Networks</h4>
              <div class="socail-links mt-3">
                <p><a href="www.facebook.com"><i class="fa-brands fa-facebook-f"></i></a></p>
                <p><a href="www.instagram.com"><i class="fa-brands fa-instagram"></i></a></p>
              </div>
            
            </div>
          </div>
        </div>
      </div>
     
    


    </div><div class="bg-info padding=3 text-center" >
  <p>All rights reserved</p>
</div>
      



        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

      </body>
      </html>