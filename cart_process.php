<?php
	session_start();
	include_once 'config.php';
	$status='';
	$v = $_POST['action'];
	//echo "hello";
	switch($v){
		case 'add_to_cart':
		
			$book_id = $_POST['book_id'];
			$book_name = $_POST['bookname'];
			$image = $_POST['image'];
			$price= $_POST['price'];
			$user_id = $_SESSION['id'];
			$quantity = $_POST['quantity'];
			
			$sql = "SELECT * from cart WHERE user_id = $user_id and book_id=$book_id";
			$result= mysqli_query($link,$sql);
			if(mysqli_num_rows($result)==1)
			{
				$status = '<div class="alert alert-danger" role="alert">Item is already added to cart</div>';
			}
			else{
				$sql = "INSERT INTO cart
				(order_id,book_id,book_name,img,price,total_price,quantity,user_id)
				VALUES('','$book_id','$book_name','$image','$price','$price',$quantity,'$user_id')";
				
				if(mysqli_query($link,$sql))
				{
					$status = '<div class="alert alert-danger" role="alert">Item is already added to cart</div>';
				}
				else{
					$status = '<div class="alert alert-danger" role="alert" data-auto-dismiss="2000">Cannot add to cart</div>';
				}
			}
			echo $status;
			break;
		default:
	}
?>