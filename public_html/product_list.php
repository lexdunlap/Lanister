<?php 
	require './includes/header.php';
	require_once '../pdo_config.php';
	function shortTitle ($title){
		$title = substr($title, 0, -4);
		$title = str_replace('_', ' ', $title);
		$title = ucwords($title);
		return $title;
	}
	$sql = "SELECT * FROM 350images";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$errorInfo = $conn->errorInfo();
	if (isset($errorInfo[2])) {
		$error = $errorInfo[2];
		echo $error;
		exit;
	} else {
		$rows = $stmt->fetchAll();
	?>
  <main>
	<h2>Product List</h2>
	<h3>Generic information about how great our products are</h3>
	<h4>Please click on one of the images to see the purchase details</h4>      
    <table>
        <tr>
            <th>Title</th>
			<th>Image</th>
			<th></th>
        </tr>
        <?php foreach ($rows as $row) { ?>
		<tr>
			<td><?php echo shortTitle($row['filename']); ?></td>
			<td><img src = "images/thumbs/<?php echo $row['filename'];?>" alt="Product">
			<td><form action="image_details.php" method="post">
				  <input type="hidden" name="action" value="add">
				  <input type="hidden" name="image_id" value="<?php echo $row['image_id']; ?>">
				   <input type="hidden" name="qty" value = 1>
                  <input type="submit" value="Image Details">
				</form>
			</td>	
            </tr>
    <?php } //endforeach loop ?>
    </table>

<?php } //end else ?>   

</main>
<?php include 'includes/footer.php'; ?>