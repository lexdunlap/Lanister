<!DOCTYPE html>
<html>
<title>AquaShop</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- responsive css framework -->
<link rel="stylesheet" href="w3.css">
<!-- color theme -->
<link rel="stylesheet" href="w3-theme-black.css">
<!-- icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="icon" href="images/favicon2.ico">

<style>
/* video */
.video-container {
	position:relative;
	padding-bottom:56.25%;
	padding-top:30px;
	height:0;
	overflow:hidden;
}

.video-container iframe, .video-container object, .video-container embed {
	position:absolute;
	top:0;
	left:0;
	width:100%;
	height:100%;
}
</style>

<body id="myPage">

<!-- Navbar -->
<div class="w3-top">
	<div class="w3-bar w3-black w3-card-2" id="myNavbar"> 
		<a href="#" class="w3-bar-item w3-button w3-teal"><i class="fa fa-home w3-margin-right"></i>AquaShop</a> 
		<div class="w3-right w3-hide-small">
			<a href="#categories" class="w3-bar-item w3-button"><i class="fa fa-th-large"></i> Categories</a>
			<a href="#about" class="w3-bar-item w3-button"><i class="fa fa-star"></i> About</a>
			<a href="#contact" class="w3-bar-item w3-button"><i class="fa fa-comment"></i> Contact</a>
			<a href="#" onclick="document.getElementById('id03').style.display='block'" class="w3-bar-item w3-button"><i class="fa fa-user"></i>    Login / Signup</a>
			<div class="w3-dropdown-hover">
				<button class="w3-button" title="Product Category Links"><i class="fa fa-th"></i> Products</button>     
				<div class="w3-dropdown-content w3-card-4 w3-bar-block w3-black">
					<a href="category.php" class="w3-bar-item w3-button">Water Toys & Dive Gear</a>
					<a href="category2.php" class="w3-bar-item w3-button">Wakeskates & Wakesurfers</a>
					<a href="category3.php" class="w3-bar-item w3-button">Towables</a>
				</div>
			</div>
			<a href="#" class="w3-bar-item w3-button w3-hover-teal"><i class="fa fa-shopping-cart"></i> Cart</a> 
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
	<a href="#" onclick="w3_close()" class="w3-bar-item w3-button"><i class="fa fa-shopping-cart"></i> Cart</a>
</nav>

<!-- Image Header -->
<div class="w3-display-container w3-animate-opacity">
	<div class="w3-row-padding w3-padding-64 w3-theme-l1" id="header">
		<img src="images/kite-header_2.jpg" alt="header" style="width:100%; height:auto;">
		<div class="w3-container w3-display-bottomleft w3-margin-bottom">  
			<button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-xlarge w3-theme w3-hover-teal" title="AquaShop"><img src="images/triangles.png" alt="Triangles" style="vertical-align:middle">AquaShop</button>
		</div>
	</div>
</div>

<!-- Modal -->
<div id="id01" class="w3-modal">
	<div class="w3-modal-content w3-card-4 w3-animate-top">
		<header class="w3-container w3-teal w3-display-container"> 
			<span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-teal w3-display-topright"><i class="fa fa-remove"></i></span>
			<h4>We're giving away FREE FlyBoard Lessons!</h4>
			<h5>No purchase necessary. <i class="fa fa-smile-o"></i></h5>
		</header>
		<div class="w3-container">
			<p>Everything is included: Professional instruction & all equipment.</p>
			<p>Go to our <a class="w3-text-teal" href="#">contest page</a> to learn more!</p>
		</div>
		<footer class="w3-container w3-teal">
			<p>Must be 16 years old or older.</p>
		</footer>
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

<!-- Footer -->
<footer class="w3-container w3-padding-32 w3-theme-d1 w3-center">
	<div class="w3-large w3-section">
		<i class="fa fa-facebook-official w3-hover-text-indigo"></i>
		<i class="fa fa-flickr w3-hover-text-red"></i>
		<i class="fa fa-instagram w3-hover-text-purple"></i>
		<i class="fa fa-twitter w3-hover-text-light-blue"></i>
		<i class="fa fa-linkedin w3-hover-text-indigo"></i>
	</div>
	<p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
	<p>Lanister 2017</p>   
	<div style="position:relative;bottom:55px;" class="w3-tooltip w3-right">
		<span class="w3-text w3-theme w3-padding">Top of Page</span>&nbsp;   
		<a href="#" class="w3-text-white" ><span class="w3-xlarge">
		<i class="fa fa-chevron-circle-up"></i></span></a>
	</div> 
</footer>

<script>
// Toggle between showing and hiding the sidebar when clicking the menu icon
var mySidebar = document.getElementById("mySidebar");

function w3_open() {
    if (mySidebar.style.display === 'block') {
        mySidebar.style.display = 'none';
    } else {
        mySidebar.style.display = 'block';
    }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
}

// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
</body>
</html>