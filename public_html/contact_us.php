<?php //This page checks for required content, errors, and provides sticky output
	if (isset($_SESSION['firstName'])) {
		require_once 'secure_conn.php';
	}
	require './includes/header.php';
	if (isset($_GET['send'])) {
	//step 2: Determine if name or email is missing and report
	$missing = array();
	$errors = array();
	
	$name = trim(filter_input(INPUT_GET, 'name', FILTER_SANITIZE_STRING)); //returns a string
	if (empty($name)) 
		$missing[]='name';
	
	$valid_email = trim(filter_input(INPUT_GET, 'email', FILTER_VALIDATE_EMAIL));	//returns a string or null if empty or false if not valid	
	if (trim($_GET['email']==''))
		$missing[] = 'email';
	elseif (!$valid_email)
		$errors[] = 'email';
	else $email = $valid_email;
		
			
	$comments = trim(filter_input(INPUT_GET, 'comments')); //returns a string
	$comments = nl2br($comments, false); //Use <br> tags rather than <br />
	
$subscribe = filter_input(INPUT_GET, 'subscribe');
if ($subscribe == 'yes')
$subscribe = 1;
elseif ($subscribe =="no")
$subscribe = 0;
else $missing[]='subscribe';
		
	//$checked = array();
	$checked=filter_input(INPUT_GET, 'interests', FILTER_DEFAULT, FILTER_REQUIRE_ARRAY);
	if (empty($checked))
		$missing[] = 'interests';
		
	$howhear = filter_input(INPUT_GET, 'howhear');
	if (empty($howhear))
			$missing[] = 'howhear';
		
	$accepted = filter_input(INPUT_GET, 'terms');
	if (empty($accepted) || $accepted !='accepted')
		$missing[] = 'accepted';
	
	if (!$missing && !$errors) {
		//Split name into first, last
		$tempName = explode(" ",$name);
		//separates a string based on the first argument, creates an array of strings
		$firstName= $tempName[0];
		if (!empty($tempName[1])) {
			$lastName = $tempName[1];
		} else {
			$lastName = null;
		}
		$interests = "";
		foreach ($checked as $temp)
			$interests = $interests.$temp." ";
		require_once ('../pdo_config.php'); // Connect to the db.
		$sql = "INSERT into 350contacts (firstName, lastName, emailAddr, comments)
		VALUES (?, ?, ?, ?, ?, ?, ?)";
		$stmt = $conn->prepare($sql);
		$stmt->bindValue(1, $firstName);
		$stmt->bindValue(2, $lastName);
		$stmt->bindValue(3, $email);
		$stmt->bindValue(4, $comments);
		if($stmt->execute())
			echo '<main><h2>Thank you for contacting us</h2><h3>We have saved your
			information</h3></main>';
		else
			echo '<main><h2>We are sorry but we were unable to process your<br> request at this
			time.</h2></main>';
	include './includes/footer.php'; 
	exit;
	}
	}
?>

	<main>
        <h2>Page Title</h2>
        <p>Any generic information about contact procedures.</p>
        <form method="get" action="contact_us.php">
			<fieldset>
				<legend>Contact Us</legend>
				<?php if ($missing || $errors) { ?>
				<p class="warning">Please fix the item(s) indicated.</p>
				<?php } ?>
            <p>
                <label for="name">Name: 
				<?php if ($missing && in_array('name', $missing)) { ?>
                        <span class="warning">Please enter your name</span>
                    <?php } ?> </label>
                <input name="name" id="name" type="text"
				 <?php if (isset($name)) {
                    echo 'value="' . htmlspecialchars($name) . '"';
                } ?>
				>
            </p>
            <p>
                <label for="email">Email: 
				<?php if ($missing && in_array('email', $missing)) { ?>
                        <span class="warning">Please enter your email address</span>
                    <?php } ?>
				<?php if ($errors && in_array('email', $errors)) { ?>
                        <span class="warning">The email address you provided is not valid</span>
                    <?php } ?>
				</label>
                <input name="email" id="email" type="text"
				<?php if (isset($email) && !$errors['email']) {
                    echo 'value="' . htmlspecialchars($email) . '"';
                } ?>>
            </p>
            <p>
                <label for="comments">Comments: </label>
				<?php if ($missing && empty($comments)) { ?>
                        <span class="warning">Please enter some comments</span>
                <?php } ?>
                <textarea name="comments" id="comments">
				<?php if (empty($comments) == false) {
                    echo htmlspecialchars($comments);
                } ?>				
				</textarea>
            </p>
            <p>			
                <input type="checkbox" name="terms" value="accepted" id="terms" 
					<?php if ($missing && in_array('accepted', $missing) == false) { ?>
						checked="checked";
					<?php } ?>
				>
                <label for="terms">I accept the terms of using this website</label>
				<?php if ($missing && in_array('accepted', $missing)) { ?>
                    <span class="warning">Please accept our terms</span>
                <?php } ?>
            </p>
            <p>
                <input name="send" type="submit" value="Send message">
            </p>
		</fieldset>
        </form>
	</main>
<?php include './includes/footer.php'; ?>
