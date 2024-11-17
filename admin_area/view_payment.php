

<center><h2>List of order and payments</h2></center>


 <?php include "../database/dbconnect.php";?>
<html>
<head>
	<title>View order and payments</title>
	<!--bootstrap link-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" 
    crossorigin="anonymous">
	<style>
		.cart_img{
      width:80px;
      height:80px;
      object-fit:contain;
    }
		</style>

</head>
<body>
  <div class="container mt-5 p-2px">
    <div class="row-md-12">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <div class="card-body">
              <?php
                include "../database/dbconnect.php";

                $query="Select * from `paymenttable`";
                $query_run= mysqli_query($conn,$query);

              ?>
              <table class="table">
                <thead>
                  <tr>
                    <th>Id</th>
                    <th>Product title</th>
                    <th>Username</th>
                    <th>Product_categories</th>
                    <th>Product_image</th>
                    <th>Product_price</th>
                    <th>Date</th>
                    <!-- <th>Edit</th> -->
                    <th>Delete</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  if(mysqli_num_rows($query_run)>0)//record is present or not
                  {
                    foreach($query_run as $row){
                      
                      ?>
                     
                      <tr>
                        <td><?php echo $row['pay_id']; ?></td>
                        <td><?php echo $row['product_title']; ?></td>
                        <td><?php echo $row['username']; ?></td>
                        <td><?php echo $row['product_categories']; ?></td>
                        <td>
                          <img src="<?php echo "./product_images/".$row['product_image']; ?>" width="80px" alt="product_image">
                        </td>
                        <td><?php echo $row['product_price']; ?></td>
                        <td><?php echo $row['date']; ?></td>
                        <!-- <td>
                          <a href="edit.php?editid=<?php //echo $row['pay_id']; ?>" class="btn btn-light bg-info text-light my-1">Edit</a>
                        </td> -->
                        <td>
                          <a href="delete2.php?deleteid=<?php echo $row['pay_id']; ?>" class="btn btn-danger text-light my-1">Delete</a>
                        </td>
                        <!-- <td><button class="btn btn-light bg-info my-1"><a href="edit.php?editid='.$product_id.'" class="text-light">Edit</a></button></td>
                        <td><button class="btn btn-danger my-1"><a href="delete.php?deleteid='.$product_id.'" class="text-light">Delete</a></button></td> -->
                      </tr>

                      <?php
                    }
                  }else{
                    ?>
                    <tr>
                      <td>No record found</td>
                    </tr>
                    <?php
                  }
                  ?>
                  <tr>
                    <td></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>