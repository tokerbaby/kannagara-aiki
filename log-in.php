<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <!-- Responsive meta-tag -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>The HTML5 Herald</title>
        <meta name="description" content="The HTML5 Herald">
        <meta name="author" content="SitePoint">

        <link rel="stylesheet" type="text/css" href="css/header.css">
        <link rel="stylesheet" type="text/css" href="css/footer.css">
        <link rel="stylesheet" type="text/css" href="css/general.css">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    </head>

    <body class="bg-light">
        <div class="container-fluid header_container">
            
            <div class="container">
                <?php include('header.php') ?>
            </div>
        </div>

        <div class="container py-5">
            <h2 class="text-center pb-2"></h2>
            <div class="row">
                <div class="col-lg-6 col-12 pb-3">
                    <div class="card h-100">
                        <div class="card-body pt-3">
                            <h2 class="text-center mb-4">Вход в личный кабинет</h2>
                            <form class="py-2" role="form">
                                <div class="form-group">
                                    <label for="inputEmailForm" class="sr-only form-control-label">Электропочта</label>
                                    <div class="mx-auto col-sm-10">
                                        <input type="text" class="form-control" id="inputEmailForm" placeholder="Электронная почта" required="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPasswordForm" class="sr-only form-control-label">Пароль</label>
                                    <div class="mx-auto col-sm-10">
                                        <input type="text" class="form-control" id="inputPasswordForm" placeholder="Пароль" required="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="mx-auto col-sm-10">
                                        <div class="checkbox form-control form-control-sm text-center small">
                                            <label class="">
                                                <input type="checkbox" class="">Запомнить меня</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="mx-auto col-sm-10 pb-3 pt-2">
                                        <button type="submit" class="btn btn-outline-secondary btn-lg btn-block">Войти на сайт</button>
                                    </div>
                                </div>
                            </form>
                            <ul class="list-inline text-center">
                                <li class="list-inline-item px-3"><a href="#" title="Twitter"><i class="display-3 ion-social-twitter-outline"></i></a>&nbsp; </li>
                                <li class="list-inline-item px-3"><a href="#" title="Google"><i class="display-3 ion-social-googleplus-outline"></i></a>&nbsp; </li>
                                <li class="list-inline-item px-3"><a href="#" title="Facebook"><i class="display-3 ion-social-facebook-outline"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12 pb-3">
                    <div class="card h-100">
                        <div class="card-body pt-3">
                            <h2 class="text-center mb-4">Регистрация</h2>
                            <ul class="list-inline text-center py-2">
                                <li class="list-inline-item px-3"><a href="" title="Twitter"><i class="display-3 ion-social-twitter-outline"></i></a>&nbsp; </li>
                                <li class="list-inline-item px-3"><a href="" title="Google"><i class="display-3 ion-social-googleplus-outline"></i></a>&nbsp; </li>
                                <li class="list-inline-item px-3"><a href="" title="Facebook"><i class="display-3 ion-social-facebook-outline"></i></a></li>
                            </ul>
                            <form role="form">
                                <div class="form-group">
                                    <label for="input2EmailForm" class="sr-only form-control-label">Электропочта</label>
                                    <div class="mx-auto col-sm-10">
                                        <input type="text" class="form-control" id="input2EmailForm" placeholder="Электронная почта" required="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="input2PasswordForm" class="sr-only form-control-label">Пароль</label>
                                    <div class="mx-auto col-sm-10">
                                        <input type="text" class="form-control" id="input2PasswordForm" placeholder="Пароль" required="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="input2Password2Form" class="sr-only form-control-label">Подтвердить пароль</label>
                                    <div class="mx-auto col-sm-10">
                                        <input type="text" class="form-control" id="input2Password2Form" placeholder="Подтвердить пароль" required="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="mx-auto col-sm-10 pb-3 pt-2">
                                        <button type="submit" class="btn btn-outline-secondary btn-lg btn-block">Зарегистрироваться</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
        </div>
        
        <?php include('footer.php') ?>


        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>