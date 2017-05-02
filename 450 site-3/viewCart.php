<?php
session_start();
//$_SESSION['id'] = $_GET['id'];
// gets from my button
$id = $_GET['id'];
$_SESSION["currentPage"] = "details.php?id=".$id;

include 'connect.php';
include 'includes/head.php';
include 'includes/noVideoNavbar.php';
include 'includes/modals.php';
?>

<!-- cart -->
<div class="w3-row" style="padding:64px 16px" id="product">
	<h3 class="w3-center">Shopping Cart</h3>
	
	<?php	

		if(empty($_SESSION['cart'])){
			$_SESSION['cart'] = array();
			$_SESSION['quantity'] = array();
		}
		if(isset($_SESSION['id'])){
			array_push($_SESSION['cart'], $_SESSION['id']);
			array_push($_SESSION['quantity'], 1);
		}
		$cart = implode(',', $_SESSION['cart']);
		unset($_SESSION['id']);
		
		$count = 0;
		
		//$id = intval($_GET['id']); 
		//$sql = "SELECT * FROM products WHERE productID = ".$id;	
		$sql = "SELECT * FROM products WHERE productID in ($cart)";
			
		if ($result=mysqli_query($con,$sql)) {	
		
			// Fetch one and one row
			while ($row=mysqli_fetch_row($result)) {
			echo "<div class='w3-row-padding w3-padding-16 w3-margin' id='categories'>";
				echo "<div class='w3-col l3 m4'>";			
						echo "<div class='w3-card-4 w3-color-light-grey w3-margin w3-padding-small'>";
							echo "<img src='".$row['3']."' style='width:100%' onclick=onClick(this) class=w3-hover-opacity >";
						echo "</div>";
				echo "</div>";	
				echo "<tr>";	
				echo "<div class='w3-col w3-container m8 l9'>"; //-col l9 m4'>";
					echo "<div class='w3-card-4 w3-color-light-grey w3-margin w3-padding'>";
						echo "<table class='w3-table w3-centered'>";
							echo "<thead>";
							echo "<tr class='w3-light-grey'>";
								echo "<th>Product</th>";
								echo "<th>Price</th>";
								echo "<th>Quantity</th>";
								echo "<th>Total</th>";
							echo "</tr>";
							echo "</thead>";
							echo "<tr>";
								echo "<td>$row[4]</td>";
								echo "<td>$$row[6]</td>";
								echo "<td><select id='quantity' name='quantity' >";
								//echo "<select id='quantity' name='quantity' > ";                   
								echo "<option value='0'>Quantity</option> ";
								echo "<option value='1'> 1</option> ";
								echo "<option value='2'>2</option> ";
								echo "<option value='3'>3</option> ";
								echo "</select></td> ";
								echo "<td>$$row[6]</td>";
							echo "</tr>";
						echo "</table>";					
					echo "</div>";
				echo "</div>";
			echo "</div>";
			
			$count++;
				//echo "product id is " . $_SESSION['$id'] . ".<br>";
				//echo "quantity " . $_SESSION['$selected'] . ".<br>";
				//print_r($_SESSION);
			}
			// remove all session variables
			// session_unset();
			// destroy the session
			// session_destroy(); 
			
			// Free result set
			mysqli_free_result($result);
		}
		mysqli_close($con);
	?> 
	
	<div class='w3-left w3-padding w3-margin'>
		<a href='index.php' class='w3-button w3-block w3-theme w3-hover-teal'><i class='fa fa-arrow-left'></i> Continue Shopping</a>
	</div>
	<div class='w3-right w3-padding w3-margin'>
		<a href='checkout.php' class='w3-button w3-block w3-theme w3-hover-teal'><i class='fa fa-arrow-right'></i> Checkout</a>
	</div>
	
	<!-- maybe use this instead of select for quantity -->
	<div class="w3-dropdown-hover">
		<button class="w3-button w3-black">Hover Over Me!</button>
		<div class="w3-dropdown-content w3-bar-block w3-border">
			<a href="#" class="w3-bar-item w3-button">Link 1</a>
			<a href="#" class="w3-bar-item w3-button">Link 2</a>
			<a href="#" class="w3-bar-item w3-button">Link 3</a>
		</div>
	</div>
  
</div>

<script src="shop.js"></script>
<?php include 'includes/footer.php'; ?>
