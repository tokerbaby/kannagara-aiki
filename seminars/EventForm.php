<link rel="stylesheet" type="text/css" href="../res/css/Form.css">

<div class="container">
	<div class="row">
		<div class="col-md-6">
			<div id="form-messages"></div>
			<form method="post" id="ajax_form" class="cbp-mc-form" action="AddToSeminarAndSendMail.php">
				<label for="name text-left">ФИО ребенка</label>
				<input type="text" id="name" name="name" placeholder="Jonathan" class="hide">
				<label for="birthday">Дата рождения ребенка</label>
				<input class="text-muted" type="date" id="birthday" name="birthday" placeholder="2011-08-19"
				       class="hide">
				<label for="first_name">ФИО одного из родителей</label>
				<input type="text" id="first_name" name="first_name" placeholder="Jonathan" class="hide">
				<label for="phonenumber">Контактный телефон</label>
				<input type="text" id="phonenumber" name="phonenumber" placeholder="+7 905 999 9999" class="hide">
				<label for="email">Электронная почта</label>
				<input type="text" id="email" name="email" placeholder="ivanivan@gmail.com" class="hide">
				<label for="seminar">Выберите семинар</label>
				<select id="seminar" name="seminar">
					<option>Семинар в Марокко, апрель 2018</option>
					<option>Международный семинар на Лазурном Берегу в июне 2018 г</option>
				</select>
				<label for="msg">Сообщение</label>
				<textarea id="msg" name="msg"></textarea>
				<div class="cbp-mc-submit-wrap">
					<input class="cbp-mc-submit" type="submit" value="Записаться на семинар"/>
				</div>
			</form>
		</div>
	</div>
</div>