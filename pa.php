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
			<div class="text">
				<center><h1>Партнёры</h1></center>
				<img src="img/yandex.jpg" height="346px" class="yand">
				<img src="img/google.jpg" height="346px" class="goog">
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