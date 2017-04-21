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

<!-- Modal for full size images on click-->
<div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
	<span class="w3-button w3-xxlarge w3-black w3-padding-large w3-display-topright" title="Close Modal Image">&times;</span>
	<div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
		<img id="img01" class="w3-image">
		<p id="caption" class="w3-opacity w3-large"></p>
	</div>
</div>




