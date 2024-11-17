

<center><h2>List of users</h2></center>




<?php include "../database/dbconnect.php";?>
<html>
<head>
	<title>View product</title>
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
      <th scope="col">Username</th>
      <th scope="col">User email</th>
      <th scope="col">User password</th>
	  <th scope="col">User address</th>
	  <th scope="col">User phone</th>
	  <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

  <?php
  $sql="select * from `usertable`";
  $result=mysqli_query($conn,$sql);
  if($result){
	while($row=mysqli_fetch_assoc($result)){
		$user_id=$row['user_id'];
		$username=$row['username'];
		$user_email=$row['user_email'];
		$user_password=$row['user_password'];
		$user_address=$row['user_address'];
		$user_phone=$row['user_phone'];
		echo '<tr>
		<th scope="row">'.$user_id.'</th>
		<td>'.$username.'</td>
		<td>'.$user_email.'</td>
		<td>'.$user_password.'</td>
		<td>'.$user_address.'</td>
		<td>'.$user_phone.'</td>
		<td>
	<button class="btn btn-light bg-info my-1"><a href="edit1.php?user_id='.$user_id.'" class="text-light">Edit</a></button>
	<button class="btn btn-danger my-1"><a href="delete1.php?deleteid='.$user_id.'" class="text-light">Delete</a></button>
</td>
	  </tr>';
	}
  }
  ?>
    


  </tbody>
</table>
</body>
</html>