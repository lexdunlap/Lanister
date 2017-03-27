	<?php $currentPage = basename($_SERVER['SCRIPT_FILENAME']); ?>
	<ul id="nav">
        <li><a href="index.php" <?php if ($currentPage == 'index.php') {echo 'id="here"'; } ?>>Home</a></li>
        <li><a href="contact_us.php" <?php if ($currentPage == 'contact_us.php') {echo 'id="here"'; } ?>>Contact</a></li>
		<li><a href="product_list.php" <?php if ($currentPage == 'product_list.php') {echo 'id="here"'; } ?>>Products</a></li>
		<li><a href="cart_view.php" <?php if ($currentPage == 'cart_view.php') {echo 'id="here"'; } ?>>View Cart</a></li>
		<?php if (!isset($_SESSION['firstName'])) { ?>
			<li><a href="create_acct.php" <?php if ($currentPage == 'create_acct.php') {echo 'id="here"'; } ?>>Register</a></li>
			<li><a href="login.php" <?php if ($currentPage == 'login.php') {echo 'id="here"'; } ?>>Login</a></li>
		<?php } else {	?>	
			<li><a href="logout.php" <?php if ($currentPage == 'logout.php') {echo 'id="here"'; } ?>>Logout</a></li>
		<?php } ?>

	</ul>
	<!--<li><a href="login.php" <?php// if ($currentPage == 'login.php') {echo 'id="here"'; } ?>>Login</a></li>-->
	<!--<li><a href="logout.php" <?php// if ($currentPage == 'logout.php') {echo 'id="here"'; } ?>>Logout</a></li>-->