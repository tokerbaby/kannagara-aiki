<div class="container pc_menu" style="padding: 0;">

	<nav class="navbar fixed-top navbar-toggleable-md navbar-light d-inline-block">
		<div class="container-fluid navbar_top">
			<div class="container">
				<div class="row">
					<div class="col-sm-10">
						<a href="../index.php"><img src="../res/images/main/logo.gif" class="pt-2 pb-2" alt="Логотип Каннагара Додзё"></a>
					</div>
					<div class="col-sm-2 text-right	">
						<button id="login" class="d-inline-block btn btn-primary" onclick="document.getElementById('id1').style.display='block'">
							<i class="fas fa-user fa-fw"></i>
						</button>
						<button id="language" class="d-inline-block btn btn-primary">
							<i class="fas fa-globe fa-fw"></i>
						</button>
					</div>
				</div>
			</div>
		</div>

		<div id="id1" class="modal">
      		<form class="modal-content animate" action="/action_page.php">
		        <div class="imgcontainer">
		          <span onclick="document.getElementById('id1').style.display='none'" class="close" title="Close Modal">&times;</span>
		        </div>

		        <div class="container">
		          <label for="email"><b>Почта</b></label>
		          <input type="text" placeholder="" name="email" required>

		          <label for="psw"><b>Пароль</b></label>
		          <input type="password" placeholder="" name="psw" required>
		            
		          <button class="btn btn-primary" type="submit">Вход</button>
		          <label>
		            <input type="checkbox" checked="checked" name="remember">Запомнить меня
		          </label>
		        </div>

		        <div class="container" style="background-color:#f1f1f1">
		          <span><a href="#">Регистрация</a></span>
		          <span class="psw"><a href="#">Забыли пароль?</a></span>
		        </div>
		    </form>
		</div>

		<script>
		    // Get the modal
		    var modal = document.getElementById('id1');

		    // When the user clicks anywhere outside of the modal, close it
		    window.onclick = function(event) {
		        if (event.target == modal) {
		            modal.style.display = "none";
		        }
		    }
		</script>

		<div class="container" style="padding: 0;">
		  	<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    	<span class="navbar-toggler-icon"></span>
		  	</button>

		  	<div class="collapse navbar-collapse" id="navbarSupportedContent">
			    <ul class="navbar-nav mr-auto">
			    	<li class="nav-item">
			        	<a class="nav-link menu_link" href="../index.php">Главная</a>
			        </li>

			        <li class="nav-item">
			        	<a class="nav-link menu_link active" href="../shinto/shinto.php">Беседы о Синто</a>
			        </li>

			        <li class="nav-item">
			        	<div class="dropdown">
					  		<button class="dropbtn menu_dropdown">О клубе
					  		</button>
					 		<div class="dropdown-content">
				    			<a href="../about/about.php">Преподаватели</a>
				    			<a href="../about/about.php#mentors">Наставники и коллеги</a>
				    			<a href="../about/about.php#exams">Экзамены</a>
				    			<a href="../about/rules.php#rules">Правила</a>
					  		</div>
						</div>
			        </li>

			    	<li class="nav-item">
			        	<div class="dropdown">
					  		<button class="dropbtn menu_dropdown">Детский мир айкидо
					  		</button>
					 		<div class="dropdown-content">
				    			<a href="../children/children.php">Айкидо для школьников</a>
				    			<a href="../children/preschoolers.php">Айкидо для дошкольников</a>
				    			<a href="../children/first.php">Первое занятие</a>
					  		</div>
						</div>
			        </li>

			        <li class="nav-item">
			        	<div class="dropdown">
					  		<button class="dropbtn menu_dropdown">О занятиях
					  		</button>
					 		<div class="dropdown-content">
				    			<a href="../classes/schedule.php">Расписание</a>
				    			<a href="../classes/fees.php">Стоимость</a>
				    			<a href="../classes/neophyte.php">Новичку</a>
				    			<a href="../classes/shop.php">Где купить</a>
					  		</div>
						</div>
			        </li>

			        <li class="nav-item">
			        	<a class="nav-link menu_link" href="../contacts/contacts.php">Контакты</a>
			        </li>

			        <li class="nav-item">
				        <div class="dropdown">
						  	<button class="dropbtn menu_dropdown">Семинары</button>
						  	<div class="dropdown-content">
							    <a href="../seminars/seminars.php">О семинарах</a>
							    <a href="../seminars/seminars.php#next_seminars">Семинары 2018</a>
							    <a href="#gallery">Фотографии</a>
						  	</div>
						</div>
			      	</li>

			      	<li class="nav-item">
			        	<a class="nav-link menu_link active" href="../video/video.php">Видео</a>
			        </li>

			    </ul>
		  	</div>
		</div>
	</nav>
</div> 

<div class="container mobile_menu text-right" style="margin:15; padding:0;">
	<div class="text-left">
		<a href="index.php"><img src="../res/images/main/logo.gif" class="pt-4" alt="Логотип Каннагара Додзё"></a>
    </div>
	<div id="mySidenav" class="sidenav">
	  	<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
	  
	    <div id="MainMenu">
	        <div class="list-group panel"> <!-- items start from here -->
	        	<!-- 0 -->
	          	<a href="index.php" data-toggle="collapse" data-parent="#MainMenu">Главная
	          	</a>

	        	<!-- 1st -->
	        	<a href="shinto/shinto.php" data-parent="#MainMenu">Беседы о синто
	        	</a>

	        	<!-- 2nd -->
	          	<a href="#about" data-toggle="collapse" data-parent="#MainMenu">О клубе
	          	</a>
	          	<div class="collapse" id="about">
	            	<a href="about/teachers.php" class="list-group-item">Преподаватели</a>
	            	<a href="about/mentors.php" class="list-group-item">Наставники и коллеги</a>
	            	<a href="about/exams.php" class="list-group-item">Экзамены</a>
	            	<a href="about/rules.php" class="list-group-item">Правила</a>
	          	</div>
	          
	          	<!-- 3rd -->
	          	<a href="#kids_aiki" data-toggle="collapse" data-parent="#MainMenu">Детский мир айкидо
	          	</a>
	          	<div class="collapse" id="kids_aiki">
	            	<a href="children/children.php" class="list-group-item">Айкидо для школьников</a>
	            	<a href="children/preschoolers.php" class="list-group-item">Айкидо для дошкольников</a>
	            	<a href="children/first.php" class="list-group-item">Перед первым занятием</a>
	          	</div>

	          	<!-- 4th -->
	          	<a href="#classes" data-toggle="collapse" data-parent="#MainMenu">О занятиях
	          	</a>
	          	<div class="collapse" id="classes">
	            	<a href="classes/schedule.php" class="list-group-item">Расписание</a>
	            	<a href="classes/fees.php" class="list-group-item">Стоимость</a>
	            	<a href="classes/neophyte.php" class="list-group-item">Новичку</a>
	            	<a href="classes/shop.php" class="list-group-item">Где купить</a>
	          	</div>

	          	<!-- 5th -->
	          	<a href="#" data-toggle="collapse" data-parent="#MainMenu">Контакты
	          	</a>

	          	<!-- 6th -->
	          	<a href="#seminars" data-toggle="collapse" data-parent="#MainMenu">Семинары
	          	</a>
	          	<div class="collapse" id="seminars">
	            	<a href="#" class="list-group-item">О семинарах</a>
	            	<a href="#" class="list-group-item">Архив</a>
	            	<a href="#" class="list-group-item">Фото</a>
	          	</div>

	          	<!-- 7th -->
	          	<a href="#" data-toggle="collapse" data-parent="#MainMenu">Видео
	          	</a>
	        </div>
	    </div>   
	</div>

	<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
</div>


<script>
	function openNav() {
	    document.getElementById("mySidenav").style.width = "250px";
	}

	function closeNav() {
	    document.getElementById("mySidenav").style.width = "0";
	}
</script>