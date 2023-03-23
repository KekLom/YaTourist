<html>
	<head>
		<meta charset="utf-8">
		<title></title>
		<script src="script/script.js" defer></script>
		<link rel="stylesheet" href = "style/style.css">
		<link rel="shortcut icon" href="img\logo.jpg" type="image/x-icon">
	</head>
	<body>
		<header>
			<div class="panel">
				<form action="index.html"><button class="gl">Главная</button></form>
				<form action="mi.php"><button class="mi">О нас</button></form>
				<form action="pa.php"><button class="pa">Партнёры</button></form>
				<form action="prof.html"><button class="prof"><?=$_COOKIE['user']?></button></form>
			</div>
		</header>
		<main>
		<?php
		  $host = 'localhost';  // Хост, у нас все локально
		  $user = 'root';    // Имя созданного вами пользователя
		  $pass = ''; // Установленный вами пароль пользователю
		  $db_name = 'register-bd';   // Имя базы данных
		  $link = mysqli_connect($host, $user, $pass, $db_name); // Соединяемся с базой

		  if (!$link) {
			echo 'Не могу соединиться с БД. Код ошибки: ' . mysqli_connect_errno() . ', ошибка: ' . mysqli_connect_error();
			exit;
		  }
		?>
			<div class="text2">
				<div class="left">
					<div class="kart"><img src="img/img1.png" width="100%" height="100%"></div>
					<div class="otziv">
					<?
						$sql = mysqli_query($link, "SELECT `name`, `otziv` FROM `coments`");
						while ($result = mysqli_fetch_array($sql)) {
							echo "<font size='7'><b>{$result['otziv']}</b></font>:<br> {$result['name']}<br>";
						}
					?>
					</div>
				</div>
				<div class="right">
					<div class="infor">
						<center><h4>Чочур Муран 4,6</h4></center>
						<p>Построен в дань уважения русским первопроходцам Сибири В ресторане, кроме русской кухни, гостям предлагают и особое меню из даров тайги — саламат, кёрчэх с арктическими ягодами, тансык…</p>
						<form action="otz.php"><button class="otz">Добавить отзыв</button></form>
					</div>
				</div>
			</div>
		</main>
		<footer>
			<div class="footer">
				<div class="SS"><br><center>©SharkStudio</center></div>
				<div class="kont">
				<center>
					<br>
					Контактная информация:<br><br>
					+7 666 555 44 33<br>
					example@mail.ru
				</center>
				</div>
				<div class="txt">
					Учитывая ключевые сценарии поведения, новая модель организационной деятельности играет определяющее значение для форм воздействия. Ясность нашей позиции очевидна: дальнейшее развитие различных форм деятельности является качественно новой ступенью соответствующих условий активизации.
				</div>
			</div>
		</footer>
	</body>
</html>