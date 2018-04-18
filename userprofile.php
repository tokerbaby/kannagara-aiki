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
        <link rel="stylesheet" type="text/css" href="res/css/Form.css">
        <link rel="stylesheet" type="text/css" href="res/css/general.css">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    </head>

    <body>
        <div class="container-fluid header_container">

            <div class="container">
                <?php include('header.php') ?>

                <h1 class="h1 header_title">
                    Личный кабинет
                </h1>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <form method="post" id="user_ajax_form" class="cbp-mc-form" action="UpdateProfileAndSendMail.php">
                        <label for="name text-left">Ваше имя</label>
                        <input type="text" id="name" name="name" placeholder="Jonathan">
                        <label for="email">Электронная почта</label>
                        <input type="text" id="email" name="email" placeholder="ivanivan@gmail.com">
                        <label for="password">Пароль</label>
                        <input type="password" class="form-control" id="password">
                        <label for="birthday">Дата рождения</label>
                        <input class="text-muted" type="date" id="birthday" name="birthday">
                        <label for="mobile_number">Мобильный телефон</label>
                        <input type="text" id="mobile_number" name="mobile_number" placeholder="+7 905 999 9999">
                        <label for="home_number">Домашний телефон</label>
                        <input type="text" id="home_number" name="home_number" placeholder="+7 495 111 1111">
                        <label for="first_dojo">Начало занятий и в каком додзё</label>
                        <input type="text" id="first_dojo" name="first_dojo">
                        <label for="start_kannagara">Начало занятий в Каннагара додзё</label>
                        <input class="text-muted" type="date" id="start_kannagara" name="start_kannagara">
                        <label for="rank">Дан (кю) и дата присуждения</label>
                        <input type="text" id="rank" name="rank">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                        <input type="file" class="custom-file-input" id="customFile">

                        <div class="cbp-mc-submit-wrap">
	                        <input class="cbp-mc-submit" type="submit" onsubmit="SendAjax('#user_ajax_form')" value="Send your data" />
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <?php include('footer.php') ?>


        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

        <script src="res/js/AjaxSendForm.js"></script>
    </body>
</html>