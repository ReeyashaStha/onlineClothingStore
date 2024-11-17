<?php
	include 'top_sec.php';
	include 'config.php';
	$user_id = $_SESSION['id'];
	$status = '';
	if(isset($_POST['remove'])){
		$book_id = $_POST['book_id'];
		$sql = "DELETE FROM cart WHERE user_id = $user_id AND book_id = $book_id ";
		$result = mysqli_query($link,$sql);
		if($result){
			$status = '<div class="alert alert-danger">Item Deleted</div>';
		}
		else{
			$status = '<div class="alert alert-danger">Item Cannot be deleted</div>';
		}
	}
	if(isset($_POST['update'])){
		$book_id = $_POST['book_id'];
		$quantity = $_POST['quantity'];
		$price = $_POST['price'];
		$total = (float)$quantity*(float)$price;
		
		$sql = "UPDATE cart SET quantity = $quantity,total_price = $total WHERE user_id = $user_id AND book_id = $book_id";
		$result = mysqli_query($link,$sql);
		if($result){
			$status = '<div class="alert alert-danger">Cart Updated</div>';
		}
		else{
			$status = '<div class="alert alert-danger">Cart cannot be updated</div>';
		}
	}
?>
<div class="container">
	<div class="row">
	<div class="col-sm-2"></div>
	<div class="col-sm-8">
	<span><?php echo $status;?></span>
	<?php
		$sql = "SELECT * from cart WHERE user_id = user_id";
		$result = mysqli_query($link,$sql);
		
		if(mysqli_num_rows($result)<1){
			echo "<h3 class='text-success'>Your cart is empty.</h3>";
			echo "<img src='images/cart.jpg'>";
		}
		else{
		    ?>
		<h3 class="text-danger">My Shopping Cart</h3>
		<table class="table">
		<tr>
			<th>Product</th>
			<th>Price</th>
			<th>Quantity</th>
			<th>Total</th>
		</tr><?php

			while($row = mysqli_fetch_array($result))
			{
				?>
				<tr>
					<td><?php echo '<img src="'.$row['img'].'" height="100" width="100">'; 
					echo "<br>".$row['book_name'];
					?><br>
					<form method="post">
					<input type="hidden" name="book_id" value="<?php echo $row['book_id']; ?>">
					<button type="submit" name="remove" class="btn btn-sm btn-danger">Remove</button>
					</form>
					</td>
					<td>
					<?php echo "&#8377;".$row['price'];?>
					</td>
					<td>
					<form method="post">
					<div class="form-group">
					<input type="hidden" name="book_id" value="<?php echo $row['book_id']; ?>">
					<input type="hidden" name="price" value="<?php echo $row['price']; ?>">
					<span class="badge bagde-info"><?php echo $row['quantity'];?></span>
					<select name="quantity">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						</select>
						<button type="submit" name="update" class="btn btn-sm btn-danger">Update</button>
					</div>
					</form>
					</td>
					<td>
					<?php echo "&#8377;".(float)$row['price']*(float)$row['quantity']; ?>
					</td>
				</tr>
				<?php
			}
		?>
		</table>
		<div class="total">
			<?php
			$total_price = 0;
				$sql= "SELECT * FROM cart WHERE user_id = $user_id";
				$result = mysqli_query($link,$sql);
				while($row = mysqli_fetch_array($result)){
					$total_price = $total_price + $row['total_price'];
				}
			?>
			<span class="text-primary float-right">
			<?php echo "Total Price : &#8377;".$total_price; ?>
			</span>
			<br><br>
			<a href="checkout.php"><button type="submit" class="btn btn-danger float-right">Checkout<i class="fa-solid fa-cart-shopping"></i></button></a>
		</div>
			<?php
		}
		?>

	</div>
	<div class="col-sm-2"></div>
	</div>
</div>
<?php
	include 'footer.php';
?>
<script type="text/javascript">
	$(document).ready(function(){
		$('.login').click(function(event){
			event.stopPropagation();
			event.stopImmediatePropagation();
			$('#LoginModal').modal('show');
			return false;
		});
		$('#signin').click(function(){
			var username = $('#username').val();
			var password = $('#password').val();
			
			if(username == '' || password == '')
			{
				$('#help').html("Both fields should be filled");
			}
			else{
				$.ajax({
					url:'loginprocess.php',
					method:"post",
					dataType:"text",
					data:{
						username:username,
						password:password
					},
					success:function(msg){
						if(msg == 1){
							window.location.href = window.location.href;
						}else
						{
							$('#help').html("Invalid username or password");
						}
					}
				});
			}
		});
		cart_count();
		function cart_count(){
			$.ajax({
				url:'count_cart.php',
				method:"POST",
				dataType:"text",
				success:function(data){
					$('#countcart').html(data);
				}
		}); }
			
		$('button[type=button]').click(function(){
			var id = $(this).attr("id");
			var book_id =$('#book_id'+id+'').val();
			var bookname =$('#bookname'+id+'').val();
			var price =$('#price'+id+'').val();
			var image =$('#image'+id+'').val();
			var quantity = 1;
			var action = "add_to_cart";
			$.ajax({
				url: 'cart_process.php',
				method: "POST",
				dataType: "text",
				data:{
					book_id:book_id,
					bookname:bookname,
					price:price,
					image:image,
					quantity:quantity,
					action:action

				},
				success:function(msg){
					cart_count();
					$('#status').html(msg);
					window.setTimeout(function(){
						$(".alert").fadeTo(500,0).slideup(500,function(){
							$(this).remove();
						});
					},4000);
				}
			});
			//alert(id);
		});
	});
</script>
  