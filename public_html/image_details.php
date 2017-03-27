<?php 
	require './includes/header.php';
	require_once '../pdo_config.php';
	
	$imgID = filter_input(INPUT_POST, 'image_id');
	function shortTitle ($title){
		$title = substr($title, 0, -4);
		$title = str_replace('_', ' ', $title);
		$title = ucwords($title);
		return $title;
	}
	$sql = "SELECT filename, caption, price, details FROM 350images WHERE image_id = :img";
	$stmt = $conn->prepare($sql);
	$stmt->bindValue(':img', $imgID);
	$stmt->execute();
	$errorInfo = $conn->errorInfo();
	if (isset($errorInfo[2])) {
		$error = $errorInfo[2];
		echo $error;
		exit;
	} else {
		$result = $stmt->fetch();
		$fileName = $result['filename'];
		$caption = $result['caption'];
		$price = $result['price'];
		$details = $result['details'];
	?>
  <main>
  
		
  
  
	<h2>Purchase <?php echo shortTitle($fileName); ?>:</h2>     
	<img src = "images/<?php echo $fileName;?>" alt="Japan Image">
	<h3>Description</h3>
	<h4><?php echo $caption ?></h4>
	<h4><?php echo $details ?></h4> 
	<h4>Price: <?php echo $price ?>
	
	
	
	<form action="cart.php" method="post" style="display:inline;">
		<input type="hidden" name="action" value="add">
		<input type="hidden" name="image_id" value="<?php echo $imgID; ?>">
		<input type="hidden" name="qty" value = 1>
        <input type="submit" value="Add to Cart">
	</form></h4>


<?php } //end else ?>   

</main>
<?php include 'includes/footer.php'; ?>