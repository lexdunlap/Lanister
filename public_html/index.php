<?php 
if (isset($_SESSION['firstName'])) {
	require_once 'secure_conn.php';
}
require './includes/header.php'; 
?>
    <main>
        <h2>Title</h2>
	  <p>Misc info above image.
		<figure><img src="images/placeholder.jpg" alt="Image Caption" width="350" height="237" class="picBorder"><figcaption>Image Caption</figcaption></figure> <!--update alt and figcaption-->
        <p>Continued Info.</p>
        <p>Continued Info.</p>
    </main>
<?php include './includes/footer.php'; ?>




