<?php
require 'includes/header.php';

if (isset($_SESSION['firstName'])) {
	$_SESSION=array();
	session_destroy();
	//setcookie('PHPSESSID', '', time()-3600, '/'); //This causes the warning and I can not figure out how to get rid of it
	$message = "You have logged out";
	
    $http = filter_input(INPUT_SERVER, 'HTTP_HOST');
	if(!http){
		$host = filter_input(INPUT_SERVER, 'HTTP_HOST');
		$url = filter_input(INPUT_SERVER, 'REQUISITE_URL');
		$url = 'http://' . $host . $url;
		header("Location: " . $url);
		exit;
	}
}
else {
	$message = 'You have reached this page in error';
}?>
<main>
<?php
echo '<h2>'.$message.'</h2>';
?>
</main>
<?php include './includes/footer.php'; ?>
