<?php
	if(empty($_SESION['name'])){
		echo("123");
	}
	if(isset($_POST["ostavit"])){
		// if($_COOKIE['user']==){
			// exit();
			// echo($name1);
		// }
		$name1 = $_COOKIE['user'];
		$otziv= filter_var(trim($_POST['otziv']),
		FILTER_SANITIZE_STRING);
		// echo($name1);
		// echo($otziv);
		
		$mysql = new mysqli('localhost','root','','register-bd');
		$mysql->query("INSERT INTO `coments`(`name`,`otziv`)	VALUES	('$otziv', '$name1')");
		// echo($name1);
		// echo($otziv);
		$mysql->close();
	}
	header('Location: /t1.php');
?>