<!-- Navbar -->
<div class="w3-top">
	<div class="w3-bar w3-black" id="myNavbar">
		<a href="index.php" class="w3-bar-item w3-button w3-teal"><i class="fa fa-home w3-margin-right"></i>AquaShop</a>
		<div class="w3-right w3-hide-small">
			<a href="#video" class="w3-bar-item w3-button"><i class="fa fa-video-camera"></i> Video</a>
			<div class="w3-dropdown-hover">
				<button class="w3-button w3-hover-light-grey" title="Product Category Links"><i class="fa fa-th-large"></i> Categories</button>     
				<div class="w3-dropdown-content w3-bar-block w3-black">
					<a href="category.php" class="w3-bar-item w3-button">Water Toys & Dive Gear</a>
					<a href="category2.php" class="w3-bar-item w3-button">Wakeskates & Wakesurfers</a>
					<a href="category3.php" class="w3-bar-item w3-button">Towables</a>
				</div>
			</div>
			<a href="#" onclick="document.getElementById('id03').style.display='block'" class="w3-bar-item w3-button"><i class="fa fa-user"></i> Login / Signup</a>
			<a href="viewCart.php" class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-teal" title="Cart"><i class="fa fa-shopping-cart"></i> Cart</a>
		</div>
		<a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
		<i class="fa fa-bars"></i></a>
	</div>
</div>

<!-- Sidebar on small screens when clicking the menu icon -->
<nav class="w3-sidebar w3-bar-block w3-black w3-card-2 w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
	<a href="#video" onclick="w3_close()" class="w3-bar-item w3-button"><i class="fa fa-video-camera"></i> Video</a>
	<div class="w3-dropdown-hover">
		<button class="w3-button w3-hover-light-grey" title="Product Category Links"><i class="fa fa-th-large"></i> Categories</button>     
		<div class="w3-dropdown-content w3-card-4 w3-bar-block w3-black">
			<a href="category.php" class="w3-bar-item w3-button">Water Toys & Dive Gear</a>
			<a href="category2.php" class="w3-bar-item w3-button">Wakeskates & Wakesurfers</a>
			<a href="category3.php" class="w3-bar-item w3-button">Towables</a>
		</div>
	</div>
	<a href="#" onclick="document.getElementById('id03').style.display='block'" class="w3-bar-item w3-button"><i class="fa fa-user"></i> Login / Signup</a>
	<a href="viewCart.php" onclick="w3_close()" class="w3-bar-item w3-button"><i class="fa fa-shopping-cart"></i> Cart</a>
</nav>
