<?php
	$pass = filter_var(trim($_POST['pass']),
	FILTER_SANITIZE_STRING);
	$email = filter_var(trim($_POST['email']),
	FILTER_SANITIZE_STRING);
	$name = filter_var(trim($_POST['name']),
	FILTER_SANITIZE_STRING);
	$a = 1;

	
	$pass = md5($pass."dqldjfehwo1275");
	$mysql = new mysqli('localhost','root','','register-bd');
	$mysql->query("INSERT INTO `users`(`pass`,`email`,`name`,`a`)	VALUES('$pass', '$email','$name','$a')");
	
	$mysql->close();
	
	header('Location: /prof.html');
?>