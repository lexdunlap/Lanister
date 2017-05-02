<?php
session_start();
// productID
$_SESSION['id'] = $_GET['id'];
$id = $_GET['id'];
$_SESSION["currentPage"] = "details.php?id=".$id;

include 'connect.php';
include 'includes/head.php';
include 'includes/noVideoNavbar.php';
include 'includes/modals.php';

// selected quantity
if (isset($_GET['quantity'])) {
	$_SESSION['$selected']=$_GET['document.getElementById("demo").innerHTML = x;']; 
}
?>

<!-- Product Details -->
<div class="w3-row" style="padding:64px 16px" id="product">
	<h3 class="w3-center">Product Details</h3>
	<p class="w3-center w3-large">Click on image for larger view</p>
	
	<?php
	
	// will
		//require_once ('../pdo_config.php'); // Connect to the db.
		$sql = "SELECT * FROM products WHERE productID = ".$id;
		$stmt = $con->prepare($sql);
		//$stmt->bind_param('i', $id);
		$id= $_GET['id'];
		$stmt->execute();
		$result = $stmt->get_result();
		//$stmt->free_result();
		//$stmt->close();

		//$errorInfo = $stmt->errorInfo();
		//if (isset($errorInfo[2])){
		//	echo $errorInfo[2];
		//	exit;
		//}
		//else {
/*
			$result = $stmt->fetch();
			echo "<div class='w3-col l3 m4'>";
			echo "<div class='w3-card-4 w3-color-light-grey w3-padding-small'>";
			echo "<h3 class='w3-center'>".$result['productName']."</h3>";
			echo "<img src='".$result['imagePath']."' style='width:100%' onclick=onClick(this) class=w3-hover-opacity >";
			echo "<p class='w3-center w3-large'>$".$result['listPrice']."</p>";
			echo "<a href='viewCart.php?id=".$result['productID']."' onclick='addCart()' class='w3-button w3-block w3-theme w3-hover-teal'>Add To Cart</a>";
			echo "</div>";
			echo "</div>";
			echo "<div class='w3-col l9 m4'>";
				echo "<div class='w3-card-4 w3-color-light-grey w3-margin-left w3-padding'>";
					echo "<p>".$result['description']."</p>";
				echo "</div>";
			echo "</div>";
		//}
		//
*/	
		//$id = intval($_GET['id']); 
		//$sql = "SELECT * FROM products WHERE productID = ".$id;	
		
		if ($result=mysqli_query($con,$sql)) {	
		
			// Fetch one product row - user clicked view details
			while ($row=mysqli_fetch_row($result)) {
			
				echo "<div class='w3-col l3 m4'>";			
					echo "<div class='w3-card-4 w3-color-light-grey w3 margin w3-padding-small'>";
						echo "<h3 class='w3-center'>".$row['4']."</h3>";
						echo "<img src='".$row['3']."' style='width:100%' onclick=onClick(this) class=w3-hover-opacity >";
						echo "<p class='w3-center w3-large'>$".$row['6']."</p>";
						echo "<a href='viewCart.php?id=". $row['0']."' class='w3-button w3-block w3-theme w3-hover-teal'>Add To Cart</a>";
					echo "</div>";
				echo "</div>";	
				echo "<div class='w3-col l9 m4'>";
					echo "<div class='w3-card-4 w3-color-light-grey w3-margin-left w3-padding'>";
						echo "<p>$row[5]</p>";
					echo "</div>";
				echo "</div>";
				
				echo "<div class='w3-col l9 m4 w3-margin w3-padding'>";
					echo "<select id='quantity' name='quantity' > ";                   
					echo "<option value='0'>Quantity</option> ";
					echo "<option value='1'> 1</option> ";
					echo "<option value='2'>2</option> ";
					echo "<option value='3'>3</option> ";
					echo "</select> ";
					
					echo '<p>Click the button to return the selected value.</p>';
					echo '<button type="button" onclick="myFunction()">Value</button>';
					echo '<p id="demo"></p>';
				echo "</div>";
			}
			// Free result set
			mysqli_free_result($result);
		}
		mysqli_close($con);    
	?> 
</div>

<script>
// get selected value from dropdown
var sel = document.getElementById("quantity");

function myFunction() {
    var x = document.getElementById("quantity").value;
    document.getElementById("demo").innerHTML = x;
}
</script>

<script src="shop.js"></script>
<?php include 'includes/footer.php'; ?>

