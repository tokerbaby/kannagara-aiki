<!DOCTYPE html>

<html lang="en">
	<head>
	    <meta charset="utf-8">
	    <!-- Responsive meta-tag -->
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	    <title>The HTML5 Herald</title>
	 	<meta name="description" content="The HTML5 Herald">
		<meta name="author" content="SitePoint">

	  	<link rel="stylesheet" type="text/css" href="res/css/header.css">
	  	<link rel="stylesheet" type="text/css" href="res/css/footer.css">
	  	<link rel="stylesheet" type="text/css" href="res/css/index.css">
	  	<link rel="stylesheet" type="text/css" href="res/css/general.css">
	  	<link rel="stylesheet" type="text/css" href="res/css/login.css">
		<link rel="stylesheet" type="text/css" href="res/css/Form.css">

	  	<!-- Bootstrap CSS -->
	  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	  	
		<!-- Font Awesome -->
		<script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
	</head>

	<body>
		
  		<div class="container-fluid main_header p-0">
			<?php include('Header.php') ?>
			<?php include('Slider.php') ?>
		</div>

		<div class="container-fluid quote">
			<div class="container">
				
			</div>
		</div>

		<div class="container">
                
		</div>
	  	
	  	<div class="container-fluid first_container">
			<div class="container">
				<div class="row">
					<div class="col-md-10">
						<h1 class="h1 pb-2">
							Айкидо - боевое искусство в поисках мира
						</h1>
						<p class="p">
							Айкидо для нас не бизнес. Для нас это Путь. Мы ищем единомышленников.
						</p>
						<p class="p">
							Наше додзё основано в 1989 г. С тех пор занятия идут, не прекращаясь. Мы видим айкидо не только как острое оружие, но и как возможность развития личности.
						</p>
			            <div class="text-right">
			            	<a href="#" class="btn btn-outline-primary my_section_button">Далее о нас ></a>
			            </div>
					</div>
				</div>
			</div>
		</div>

		<div class="container-fluid section mt-0">
			<div class="container">
				<div class="row">
					<h2 class="h2 pl-2">Приглашаем в детские и взрослые группы айкидо</h2>
					<div class="col-md-6">
						<img src="res/images/main/9.jpg" class="d-sm-none d-md-block pb-3" id="kids">
						<strong>Московское Айкидо Каннагара Додзё – одна из старейших школ айкидо в России. Занятия ведут опытные <a href="#">преподаватели</a> (4 и 6 даны айкидо Айкикай).</strong>
						<ul class="item_marker">
							<li>
								Ребята знакомятся с основами обращения с мечом и палкой с самого раннего возраста;
							</li>
							<li>
								Передавая ребенку знания и опыт боевых искусств, мы прививаем ему чувство ответственности за их применение;
							</li>
							<li>
								Мы пытаемся найти индивидуальный подход к каждому ребёнку. Занятия проходят в дружеской атмосфере;
							</li>
							<li>
								Ребята проходят аттестацию и получают очередные степени;
							</li>
							<li>
								Участвуют в семинарах под руководством приглашенных знаменитых мастеров айкидо дома и на выезде;
							</li>
							<li>
								Для ребят и родителей устраиваются летние сборы в России за рубежом.
							</li>
						</ul>
						<a href="#" class="btn btn-outline-primary my_section_button mb-5">Записаться в группу ></a>
					</div>

					<div class="col-md-6">
						<img src="res/images/main/8.png" class="d-sm-none d-md-block pb-3" id="adults">
						<strong>Приглашаем взрослых в начальные и продолжающие группы!</strong>
						<p class="p">Мы не имитируем мастерство. Мы учимся встречать атаку.</p>
						<p class="p">Занятия по айкидо проводят <a href="#">преподаватели</a> с многолетним стажем педагогической практики.</p>
						<p class="p">Работа с оружием (боккэн, дзё, танто) - неотъемлемая часть наших тренировок. Особое внимание уделяется противодействию атаке ножом.</p>
						<p class="p">Каждую неделю проходят тренировки иайдо (стиль Сёдзи Нишио-сэнсэя), поскольку Нишио будо - предмет нашего пристального изучения.</p>
						<p class="p">Члены додзё имеют возможность регулярно участвовать в <a href="#">семинарах</a> ведущих мировых мастеров айкидо на нашем татами и за рубежом.</p>
						<p class="p">По мере совершенствования навыков члены додзё проходят аттестацию и получают дипломы Айкидо Айкикай. И нам не стыдно ни за одного из наших черных поясов.</p>
						<p class="p"><strong>Мы готовы (бесплатно) поделиться записями наших семинаров. Звоните, приходите.</strong></p>
						<a href="#" class="btn btn-outline-primary my_section_button">Подробнее ></a>	
					</div>
				</div>
			</div>		
		</div>

		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<form method="post" id="subscribe_ajax_form" class="form pl-0" action="SubscribeAndSendMail.php">
						<label for="email">Почта</label>
						<input type="text" id="email" name="email" placeholder="">

						<input class="form_submit" type="submit" onsubmit="SendAjax('#subscribe_ajax_form')" value="Подписаться на рассылку">
					</form>
				</div>
			</div>
		</div>

		<div class="container-fluid section">
			<div class="container news_bar">
				<h2 class="h2 text-center">Новости клуба</h2>
				<div class="row">
					<div class="col-md-4">
						<div class="d-block news_image news_1">
						</div>
						<h4 class="h5">
							<strong>Книга Ниcио-сэнсэя</strong>
						</h4>
						<p class="p">
							Вышла книга Ниcио-сэнсэя «Aikido - Yurusu Budo» на русском языке.
							Подробная информация на сайте <a href="#">nishiobook.ru</a>
						</p>
					</div>

					<div class="col-md-4">
						<div class="d-block news_image news_2">
						</div>
						<h4 class="h5">
							<strong>Беседы о Синто</strong>
						</h4>
						<p class="p">
							Мы открываем новую страницу, посвящённую Синто.
							Синто - неотъемлемая часть японской культуры и мировосприятия. Мы полагаем, что статьи, заметки и другие материалы, имеющие отношение к Синто, 
							будут интересны для многих, изучающих искусство айки. <a href="#">Читать далее...</a>
						</p>
					</div>

					<div class="col-md-4">
						<div class="d-block news_image news_3">
						</div>
						<h4 class="h5">
							<strong>Приглашаем на утренние занятия!</strong>
						</h4>
						<p class="p">Занятия в утренние часы оставляют особое тонкое чувство, след которого остаётся с Вами на весь день. <a href="#">Смотреть расписание...</a></p>
					</div>
				</div>
			</div>
		</div>

		<?php include('Footer.php') ?>

	  	<!-- jQuery first, then Tether, then Bootstrap JS. -->
		<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script> 	
		<!--Browser-sync-->
		<script id="__bs_script__">//<![CDATA[
	        document.write("<script async src='http://HOST:3000/browser-sync/browser-sync-client.js?v=2.23.6'><\/script>".replace("HOST", location.hostname));//]]>
		</script>
		<!-- Ajax -->
		<script src="../res/js/AjaxSendForm.js"></script>
	</body>
</html>