<!DOCTYPE html>

<html lang="en">
	<head>
		<meta charset="utf-8">
		<!-- Responsive meta-tag -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<title>The HTML5 Herald</title>
		<meta name="description" content="The HTML5 Herald">
		<meta name="author" content="SitePoint">

		<link rel="stylesheet" type="text/css" href="../res/css/header.css">
		<link rel="stylesheet" type="text/css" href="../res/css/footer.css">
		<link rel="stylesheet" type="text/css" href="../res/css/general.css">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css"
		      integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ"
		      crossorigin="anonymous">
	</head>

	<body>
		<div class="container-fluid header_container">

			<div class="container">
                <?php include('../Header.php') ?>

				<h1 class="h1 header_title">
					Межклубный семинар
				</h1>
			</div>
		</div>

		<div class="container">
			<div class="row">
				<div class="col-md-9">
					<h2 class="h2">Московское Айкидо Каннагара Додзё приглашает принять участие в межклубном семинаре по
						айкидо</h2>
					<p class="p">17 марта 2018 c 11 до 14 часов</p>
					<img src="../res/images/seminars/inter-club18.jpg">
					<p>
						<strong>Задачи семинара</strong>
					</p>
					<p class="p">- перекинуть мостик от базовой техники айкидо к её практическому применению</p>
					<p class="p">
						Тема занятия:<br>
						принципы встречи и обработки ударов – ирими, атэми;
						поиски противодействия атаке ножом. Некоторые элементы.
					</p>
					<p class="p">
						Программа опирается на стили Нисио-рю и Идэта-рю.
					</p>
					<p class="p">
						Приглашаем владеющих базовой техникой айкидо.
					</p>
					<p class="p">
						Просим сообщить о вашем желании принять участие заранее:
					</p>
					<p class="p">
						Вы можете зарегистрировать заявку <a href="#">на сайте</a><br>
						или написав на <a href="#">detmir-aiki@mail.ru</a>,<br>
						или позвонив по т. <a href="#">+7 (917) 530-59-16</a>
					</p>
					<p class="p">Проход в зал через охрану по заранее составленному списку.</p>
					<p class="p">В зависимости от количества участников занятие пройдёт в зале у м. Шаболовская (1 мин.
						от метро) или в зале в с/к «Олимпийский» на пр. Мира. Понадобятся боккэн и деревянный нож.</p>
					<p class="p">Участие – 700 р.</p>
					<p class="p">Ближайшее занятие в субботу 17 марта с 11 до 14 часов. </p>
					<strong>Занятие проводит Олег Глушко, 6 дан айкидо Айкикай, 6 дан будзюцу Идэта-рю.</strong>
				</div>
			</div>
		</div>

		<?php include('EventForm.php') ?>

        <?php include('../Footer.php') ?>


		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
		        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
		        crossorigin="anonymous">
		</script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
		        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
		        crossorigin="anonymous">
		</script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
		        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
		        crossorigin="anonymous">
		</script>
	</body>
</html>