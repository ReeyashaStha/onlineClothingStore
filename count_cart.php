<?php
	session_start();
	include_once 'config.php';
	
	if(!empty($_SESSION['userlogged']))
	{
		$id = $_SESSION['id'];
		$sql = "SELECT * from cart WHERE user_id ='$id' ";
		$result = mysqli_query($link,$sql);
		echo mysqli_num_rows($result);
	}
	else{
		echo "Error";
	}
?>