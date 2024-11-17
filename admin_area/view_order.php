

<center><h2>List of all orders</h2></center>




<?php include "../database/dbconnect.php";?>
<html>
<head>
	<title>List of orders</title>
	<!--bootstrap link-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" 
    crossorigin="anonymous">
</head>
<body>
<table class="table">
  <thead>
    <tr>
      <th scope="col">User_id</th>
      <th scope="col">Product_id</th>
      <th scope="col">Quantity</th>
      <!-- <th scope="col">Phone</th>
      <th scope="col">Message</th>-->
	  <th scope="col">Action</th> 
    </tr>
  </thead>
  <tbody>

  <?php
  $sql="select * from `cart_details`";
  $result=mysqli_query($conn,$sql);
  if($result){
	while($row=mysqli_fetch_assoc($result)){
		$user_id=$row['user_id'];
		$product_id=$row['product_id'];
		$quantity=$row['quantity'];
		// $phone=$row['contact_phone'];
		// $message=$row['contact_message'];
		echo '<tr>
		<th scope="row">'.$user_id.'</th>
		<td>'.$product_id.'</td>
		<td>'.$quantity.'</td>
		<td>
	<button class="btn btn-danger my-1"><a href="delete2.php?deleteid='.$user_id.'" class="text-light">Delete</a></button>
</td>
	  </tr>';
	}
  }
  ?>
    
    <!-- <td>'.$phone.'</td>
		<td>'.$message.'</td> -->

  </tbody>
</table>
</body>
</html>