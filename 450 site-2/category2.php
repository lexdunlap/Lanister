<?php
session_start();
include 'connect.php';
?>

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
/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Button style */
.modal-button {
    background-color: #000000;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

/* Cancel button */
.cancelbtn {
    width: auto;
    padding: 10px 18px;
	margin: 8px 0;
	color: white;
    background-color: #f44336;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

span.priv {
    float: right;
    padding-top: 16px;
}

/* Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}

input:focus, textarea:focus {
    border:2px solid #1abc9c;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}

/* tabbed modal */
.sign {display:none}

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
			<a href="#" class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-teal" title="Cart"><i class="fa fa-shopping-cart"></i> Cart</a>
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
	<a href="#" onclick="w3_close()" class="w3-bar-item w3-button"><i class="fa fa-shopping-cart"></i> Cart</a>
</nav>

<!-- Tabbed modal -->
<div class="w3-container">
	<div id="id03" class="w3-modal">
		<div class="w3-modal-content w3-card-4 w3-animate-zoom">
			<header class="w3-container w3-teal"> 
				<span onclick="document.getElementById('id03').style.display='none'" 
				class="w3-button w3-teal w3-xlarge w3-display-topright">&times;</span>
				<h2>Login or Signup</h2>
			</header>
			<div class="w3-bar w3-border-bottom">
				<button class="tablink w3-bar-item w3-button " onclick="openSign(event, 'Login')">Login</button>
				<button class="tablink w3-bar-item w3-button" onclick="openSign(event, 'Signup')">Signup</button>
			</div>
			<!-- Login -->
			<div id="Login" class="w3-container sign">
				<h1>Login</h1>
				<form class="modal-content animate" action="/action_page.php">
					<div class="container">
						<label><b>Username</b></label>
						<input type="text" placeholder="Enter Username" name="uname" required>
						<label><b>Password</b></label>
						<input type="password" placeholder="Enter Password" name="psw" required>
						<button type="submit" id="submit" class="modal-button">Login</button>
						<input type="checkbox" checked="checked"> Remember me
					</div>
					<div class="w3-container" style="background-color:#f1f1f1">
						<button type="button" onclick="document.getElementById('id03').style.display='none'" class="cancelbtn">Cancel</button>
						<span class="psw">Forgot <a href="#">password?</a></span>
					</div>
				</form>
			</div>
			<!-- Signup -->
			<div id="Signup" class="w3-container sign">
				<h1>Signup</h1>
				<form class="modal-content animate" action="/action_page.php">
					<div class="container">
						<label><b>Email</b></label>
						<input type="text" placeholder="Enter Email" name="email" required>
						<label><b>Password</b></label>
						<input type="password" placeholder="Enter Password" name="psw" required>
						<label><b>Repeat Password</b></label>
						<input type="password" placeholder="Repeat Password" name="psw-repeat" required>  
						<button type="submit" id="submit" class="modal-button">Sign Up</button>
						<input type="checkbox" checked="checked"> Remember me
					</div>
					<div class="w3-container" style="background-color:#f1f1f1">
						<button type="button" onclick="document.getElementById('id03').style.display='none'" class="cancelbtn">Cancel</button>
						<span class="priv">By creating an account you agree to our <a href="#">Terms & Privacy</a></span>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<!-- Products -->
<div class="w3-container" style="padding:64px 16px" id="product">
	<h3 class="w3-center">Wakeskates & Wakesurfers</h3>
	<p class="w3-center w3-large">Click on any image for larger view</p>
			<?php

			// displays 4 products, 17 - 20
			$sql = "SELECT * FROM products LIMIT 4 OFFSET 16";
			
			if ($result=mysqli_query($con,$sql))
			{
 
				// Fetch one and one row
				while ($row=mysqli_fetch_row($result))
				{
					echo "<div class='w3-col l3 m6 w3-border' style='padding:8px' >";
					echo "<h3 class='w3-center'>".$row['4']."</h3>";
                    echo "<img src='".$row['3']."' style='width:100%' onclick=onClick(this) class=w3-hover-opacity >";
					
					echo "<p class='w3-center w3-large'>$".$row['6']."</p>";
					echo "<a href='details.php?id=". $row['0']."' class='w3-button w3-block w3-theme w3-hover-teal'>View Details</a>";
					//echo $row[6];
					echo "</div>";
				}
					// Free result set
			mysqli_free_result($result);
			}

			mysqli_close($con);
			?> 
</div>


<!-- Modal for full size images on click-->
<div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
	<span class="w3-button w3-xxlarge w3-black w3-padding-large w3-display-topright" title="Close Modal Image">&times;</span>
	<div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
		<img id="img01" class="w3-image">
		<p id="caption" class="w3-opacity w3-large"></p>
	</div>
</div>

<!-- video -->
<div class="w3-row-padding w3-padding-64 w3-theme-l1" id="video">
	<div class="video-container">
		<iframe width="560" height="315" src="https://www.youtube.com/embed/6tT2PIVk2qs?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
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

// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}

// tabbed modal
document.getElementsByClassName("tablink")[0].click();

function openSign(evt, signName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("sign");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
    tablinks[i].classList.remove("w3-light-grey");
  }
  document.getElementById(signName).style.display = "block";
  evt.currentTarget.classList.add("w3-light-grey");
}

// Get the modal
var modal = document.getElementById('id03');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
</body>
</html>