<?php
	define(DBCONNSTRING,'mysql:host=127.0.0.1;dbname=wrb2573');
	define(DBUSER, 'wrb2573');
	define(DBPASS,'A1HdE638e');
	try {
		$conn= new PDO(DBCONNSTRING, DBUSER, DBPASS);
	} catch (PDOException $e) {
	echo $e->getMessage();
	}
?>