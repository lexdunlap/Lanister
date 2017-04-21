<?php
session_start();
include 'connect.php';
include 'includes/head.php';
include 'includes/modals.php';
?>

<!-- Navbar -->
<div class="w3-top">
	<div class="w3-bar w3-black w3-card-2" id="myNavbar"> 
		<a href="#" class="w3-bar-item w3-button w3-teal"><i class="fa fa-home w3-margin-right"></i>AquaShop</a> 
		<div class="w3-right w3-hide-small">
			<a href="#categories" class="w3-bar-item w3-button"><i class="fa fa-th-large"></i> Categories</a>
			<a href="#about" class="w3-bar-item w3-button"><i class="fa fa-star"></i> About</a>
			<a href="#contact" class="w3-bar-item w3-button"><i class="fa fa-comment"></i> Contact</a>
			<a href="#" onclick="document.getElementById('id03').style.display='block'" class="w3-bar-item w3-button"><i class="fa fa-user"></i> Login / Signup</a>
			<div class="w3-dropdown-hover">
				<button class="w3-button" title="Product Category Links"><i class="fa fa-th"></i> Products</button>     
				<div class="w3-dropdown-content w3-card-4 w3-bar-block w3-black">
					<a href="category.php" class="w3-bar-item w3-button">Water Toys & Dive Gear</a>
					<a href="category2.php" class="w3-bar-item w3-button">Wakeskates & Wakesurfers</a>
					<a href="category3.php" class="w3-bar-item w3-button">Towables</a>
				</div>
			</div>
			<a href="viewCart.php" class="w3-bar-item w3-button w3-hover-teal"><i class="fa fa-shopping-cart"></i> Cart</a> 
		</div>
		<a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()"><i class="fa fa-bars"></i></a>
	</div>
</div>

<!-- Sidebar on small screens when clicking the menu icon -->
<nav class="w3-sidebar w3-bar-block w3-black w3-card-2 w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
	<a href="#categories" onclick="w3_close()" class="w3-bar-item w3-button"><i class="fa fa-th-large"></i> Categories</a>
	<a href="#about" onclick="w3_close()" class="w3-bar-item w3-button"><i class="fa fa-star"></i> About</a>
	<a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button"><i class="fa fa-comment"></i> Contact</a>
	<a href="#" onclick="document.getElementById('id03').style.display='block'" class="w3-bar-item w3-button"><i class="fa fa-star"></i> Login / Signup</a>
    <div class="w3-dropdown-hover">
		<button class="w3-button" title="Product Category Links"><i class="fa fa-th"></i> Products</button>     
		<div class="w3-dropdown-content w3-card-4 w3-bar-block w3-black">
			<a href="category.php" class="w3-bar-item w3-button">Water Toys & Dive Gear</a>
			<a href="category2.php" class="w3-bar-item w3-button">Wakeskates & Wakesurfers</a>
			<a href="category3.php" class="w3-bar-item w3-button">Towables</a>
		</div>
	</div>
	<a href="viewCart.php" onclick="w3_close()" class="w3-bar-item w3-button"><i class="fa fa-shopping-cart"></i> Cart</a>
</nav>

<!-- Image Header -->
<div class="w3-display-container w3-animate-opacity">
	<div class="w3-row-padding w3-padding-64 w3-theme-l1" id="header">
		<img src="images/kite-header_2.jpg" alt="header" style="width:100%; height:auto;">
		<div class="w3-container w3-display-bottomleft w3-margin-bottom"> 
			<!-- Logo -->
			<button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-xlarge w3-theme w3-hover-teal" title="AquaShop"><img src="images/triangles.png" alt="Triangles" style="vertical-align:middle">AquaShop</button>
		</div>
	</div>
</div>

<!-- Categories -->
<div class="w3-row-padding w3-padding-64" id="categories">
<div class="w3-center">
<h2>Featured Product Categories</h2>
</div>
    <div class="w3-third w3-margin-bottom">
      <div class="w3-border w3-hover-shadow">
        <div class="w3-black">
			<img src="images/water_toys_landing.jpg" alt="Water Toys" style="width:100%">
			<div class="w3-container w3-center">
				<p>Water Toys & Dive Gear</p>
				<div class=" w3-margin-bottom w3-padding-24">	
					<a href="category.php" class="w3-button w3-teal w3-padding-large"><i class="fa fa-smile-o"></i> View</a>
				</div>
			</div>
		</div>
	  </div>
	</div>

    <div class="w3-third w3-margin-bottom">
      <div class="w3-border w3-hover-shadow">
        <div class="w3-black">
			<img src="images/wakeskates_landing.jpg" alt="Wakeskates" style="width:100%">
			<div class="w3-container w3-center">
				<p>Wakeskates & Wakesurfers</p>
				<div class=" w3-margin-bottom w3-padding-24">
					<a href="category2.php" class="w3-button w3-teal w3-padding-large"><i class="fa fa-smile-o"></i> View</a>
				</div>
			</div>
		</div>
	  </div>
	</div>

    <div class="w3-third w3-margin-bottom">
      <div class="w3-border w3-hover-shadow">
        <div class="w3-black">
			<img src="images/towables_landing.jpg" alt="Towables" style="width:100%">
			<div class="w3-container w3-center">
				<p>1 - 4 Person Towables</p>
				<div class=" w3-margin-bottom w3-padding-24">
					<a href="category3.php" class="w3-button w3-teal w3-padding-large"><i class="fa fa-smile-o"></i> View</a>
				</div>
			</div>
		</div>
	   </div>
	</div>
</div>

<!-- About -->
<div class="w3-row-padding w3-padding-32" id="about">
	<h3 class="w3-center">ABOUT AQUASHOP</h3>
	<p class="w3-center w3-large">Specializing in products for watersports enthusiasts, 
     waterfront property owners, resorts, & campgrounds</p>
	<p class="w3-center w3-large">Key features of our company</p>
	<div class="w3-row-padding w3-center" style="margin-top:64px">
		<div class="w3-quarter">
			<img src="images/customer_first.jpg" alt="Customer First" style="width:45%">
			<p class="w3-large">Customer First</p>
			<p>Customer satisfaction is our highest priority. We strive to ensure that your shopping experience is optimal.</p>
		</div>
		<div class="w3-quarter">
			<img src="images/60day_guarantee.png" alt="Guarantee" style="width:50%">
			<p class="w3-large">Guarantee</p>
			<p>We offer an unconditional money-back 60 day satisfaction guarantee on all our products. </p>
		</div>
		<div class="w3-quarter">
			<img src="images/verified.jpg" alt="Quality" style="width:45%">
			<p class="w3-large">Quality</p>	  
			<p>We research the quality of our products, and provide the latest, up-to-date designs.</p>
		</div>
		<div class="w3-quarter">
			<img src="images/service_5.jpg" alt="Support" style="width:55%">
			<p class="w3-large">Support</p>
			<p>Since our inception in 1986, providing excellent customer support and service has been a top goal.</p>
		</div>
	</div>
</div>

<!-- Contact -->
<div class="w3-container w3-light-grey">
	<div class="w3-row-padding w3-padding-64" id="contact">
		<h3 class="w3-center">CONTACT</h3>
		<div class="w3-row-padding" style="margin-top:64px">
			<div class="w3-half">
				<p><i class="fa fa-map-marker fa-fw w3-xxlarge w3-margin-right"></i> City, US</p>
				<p><i class="fa fa-phone fa-fw w3-xxlarge w3-margin-right"></i> Phone: (000) 000-0000</p>
				<p><i class="fa fa-envelope fa-fw w3-xxlarge w3-margin-right"> </i> Email: mail@mail.com</p>
				<br>
				<p class="w3-left w3-large">Send us a message:</p>
				<form action="index.php" target="_blank">
					<p><input class="w3-input w3-border" type="text" placeholder="Name" required name="Name"></p>
					<p><input class="w3-input w3-border" type="text" placeholder="Email" required name="Email"></p>
					<p><input class="w3-input w3-border" type="text" placeholder="Subject" required name="Subject"></p>
					<p><input class="w3-input w3-border" type="text" placeholder="Message" required name="Message"></p>
					<button class="w3-button w3-black" type="submit" id="submit">
						<i class="fa fa-paper-plane"></i> SEND MESSAGE
					</button>
					</p>
				</form>
			</div>
			<div class="w3-half w3-padding">
				<div id="googleMap" class="w3-greyscale-max" style="width:100%;height:auto;">
				<div class="video-container">			
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d416012.0715681055!2d-80.95849156102985!3d35.4524595621488!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8856ad357f03dd69%3A0xee1f400216d78a1f!2sLake+Norman!5e0!3m2!1sen!2sus!4v1492352068118" frameborder="0"allowfullscreen></iframe>				
				</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script src="shop.js"></script>
<?php include 'includes/footer.php'; ?>
