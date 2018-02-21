<div class="container pc_menu" style="padding: 0;">
	<!-- 
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript">
		$(window).scroll(function() {
	    if ($(this).scrollTop() > 20) {
		         $('nav').addClass('navbar');
		    }
		});
	</script> 
	-->

	<nav class="navbar fixed-top navbar-toggleable-md navbar-light d-inline-block">
		<div class="container-fluid navbar_top">
			<div class="container">
				<div class="row">
					<div class="col-sm-10">
						<img src="images/main/logo.gif" class="pt-2 pb-2" alt="Логотип Каннагара Додзё">
					</div>
					<div class="col-sm-2 text-right">
						<img src="images/main/sign-in.png" id="sign_in" alt="Вход в ЛК">
						<img src="images/main/en.png" id="en_ru" alt="Сменить язык">
					</div>
				</div>
			</div>
		</div>
		<div class="container" style="padding: 0;">
		  	<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    	<span class="navbar-toggler-icon"></span>
		  	</button>

		  	<div class="collapse navbar-collapse" id="navbarSupportedContent">
			    <ul class="navbar-nav mr-auto">
			    	<li class="nav-item">
			        	<a class="nav-link menu_link" href="#">Главная</a>
			        </li>

			        <li class="nav-item">
			        	<a class="nav-link menu_link active" href="#">Беседы о Синто</a>
			        </li>

			        <li class="nav-item">
			        	<div class="dropdown">
					  		<button class="dropbtn menu_dropdown">О клубе
					  		</button>
					 		<div class="dropdown-content">
				    			<a href="#">Преподаватели</a>
				    			<a href="#">Наставники и коллеги</a>
				    			<a href="#">Экзамены</a>
				    			<a href="#">Правила</a>
					  		</div>
						</div>
			        </li>

			    	<li class="nav-item">
			        	<div class="dropdown">
					  		<button class="dropbtn menu_dropdown">Детский мир айкидо
					  		</button>
					 		<div class="dropdown-content">
				    			<a href="#">Айкидо для школьников</a>
				    			<a href="#">Айкидо для дошкольников</a>
				    			<a href="#">Перед первым занятием</a>
					  		</div>
						</div>
			        </li>

			        <li class="nav-item">
			        	<div class="dropdown">
					  		<button class="dropbtn menu_dropdown">О занятиях
					  		</button>
					 		<div class="dropdown-content">
				    			<a href="#">Расписание</a>
				    			<a href="#">Стоимость</a>
				    			<a href="#">Новичку</a>
				    			<a href="#">Где купить</a>
					  		</div>
						</div>
			        </li>

			        <li class="nav-item">
			        	<a class="nav-link menu_link" href="#">Контакты</a>
			        </li>

			        <li class="nav-item">
				        <div class="dropdown">
						  	<button class="dropbtn menu_dropdown">Семинары</button>
						  	<div class="dropdown-content">
							    <a href="#">О семинарах</a>
							    <a href="#">Архив</a>
							    <a href="#">Фото</a>
						  	</div>
						</div>
			      	</li>

			      	<li class="nav-item">
			        	<a class="nav-link menu_link active" href="#">Видео</a>
			        </li>

			    </ul>
		  	</div>
		</div>
	</nav>
</div> 

<div class="container mobile_menu text-right" style="margin:15; padding:0;">
	<div class="text-left">
		<img src="images/main/logo.gif" class="pt-4" alt="Логотип Каннагара Додзё">
    </div>
	<div id="mySidenav" class="sidenav">
	  	<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
	  
	    <div id="MainMenu">
	        <div class="list-group panel"> <!-- items start from here -->
	        	<!-- 1st -->
	        	<a href="#" data-parent="#MainMenu">Беседы о синто
	        	</a>

	        	<!-- 2nd -->
	          	<a href="#item_2" data-toggle="collapse" data-parent="#MainMenu">О клубе
	          	</a>
	          	<div class="collapse" id="item_2">
	            	<a href="#" class="list-group-item">Subitem 1</a>
	          	</div>
	          
	          	<!-- 3rd -->
	          	<a href="#demo4" data-toggle="collapse" data-parent="#MainMenu">Детский мир айкидо
	          	</a>
	          	<div class="collapse" id="demo4">
	            	<a href="" class="list-group-item">Subitem 1</a>
	          	</div>
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