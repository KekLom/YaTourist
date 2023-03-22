<?php
	$pass = filter_var(trim($_POST['pass']),
	FILTER_SANITIZE_STRING);
	$email = filter_var(trim($_POST['email']),
	FILTER_SANITIZE_STRING);
	$name = filter_var(trim($_POST['name']),
	FILTER_SANITIZE_STRING);
	// $a = filter_var(trim($_POST['a']),
	// FILTER_SANITIZE_STRING);

	
	$pass = md5($pass."dqldjfehwo1275");
	$mysql = new mysqli('localhost','root','','register-bd');
	$mysql->query("INSERT INTO `users`(`pass`,`email`,`name`)	VALUES('$pass', '$email','$name')");
	
	$mysql->close();
	
	header('Location: /prof.html');
?>