<?php
session_start();
include 'connect.php';
include 'includes/head.php';
include 'includes/categoryNavbar.php';
include 'includes/modals.php';
?>

<!-- Products -->
<div class="w3-container" style="padding:64px 16px" id="product">
	<h3 class="w3-center">Water Toys & Dive Gear</h3>
	<p class="w3-center w3-large">Click on any image for larger view</p>
	
	<?php

		// displays 16 products, productID: 1 - 16
		$sql = "SELECT * FROM products LIMIT 16";
		
		if ($result=mysqli_query($con,$sql)) {

			// Fetch sixteen product rows - Water Toys and Dive Gear category
			while ($row=mysqli_fetch_row($result)) {

				echo "<div class='w3-col l3 m6 w3-border' style='padding:8px' >";
				echo "<h3 class='w3-center'>".$row['4']."</h3>";
				echo "<img src='".$row['3']."' style='width:100%' onclick=onClick(this) class=w3-hover-opacity >";					
				echo "<p class='w3-center w3-large'>$".$row['6']."</p>";
				echo "<a href='details.php?id=". $row['0']."' class='w3-button w3-block w3-theme w3-hover-teal'>View Details</a>";
				echo "</div>";				
			}	
			
			// Free result set
			mysqli_free_result($result);
		}		
		mysqli_close($con);
	?> 
</div>

<!-- Video -->
<div class="w3-row-padding w3-padding-64 w3-theme-l1" id="video">
	<div class="video-container">
		<iframe width="560" height="315" src="https://www.youtube.com/embed/BopDHDQGud8?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
	</div>
</div>

<script src="shop.js"></script>
<?php include 'includes/footer.php'; ?>
