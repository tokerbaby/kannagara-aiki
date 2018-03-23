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
        <link rel="stylesheet" type="text/css" href="../res/css/gallery.css">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    </head>

    <body>
        <div class="container-fluid header_container">
                
            <div class="container">
                <?php include('../header.php') ?>

                <h1 class="h1 header_title">
                    Галерея
                </h1>
            </div>
        </div>

        <div class="container">
            <div class="row gallery">
                <div class="col-md-4">
                    <a href="2013.php">
                        <img src="../res/images/seminars/6010.jpg" class="img-responsive">
                        <div class="overlay">Семинар Такао Арисуэ-сэнсэя, 2013</div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="2012.php">
                        <img src="../res/images/seminars/3837.jpg" class="img-responsive">
                        <div class="overlay">Семинар Поля Мюллера-сэнсэя, 2012</div>
                    </a>
                </div>
                 <div class="col-md-4">
                    <a href="2011.php">
                        <img src="../res/images/seminars/3816.jpg" class="img-responsive">
                        <div class="overlay">Семинар Такао Арисуэ-сэнсэя, 2011</div>
                    </a>
                </div>
            </div>

            <div class="row gallery">
                <div class="col-md-4">
                    <a href="">
                        <img src="../res/images/seminars/2259.jpg" class="img-responsive">
                        <div class="overlay">Семинар Поля Мюллера-сэнсэя в Москве, июль 2009</div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="">
                        <img src="../res/images/seminars/2174.jpg" class="img-responsive">
                        <div class="overlay">Семинар Коити Бэрриш-сэнсэя в Москве, май 2009</div>
                    </a>
                </div>
                 <div class="col-md-4">
                    <a href="">
                        <img src="../res/images/seminars/2096.jpg" class="img-responsive">
                        <div class="overlay">Семинар Поля Мюллера-сэнсэя в Москве, ноябрь 2008</div>
                    </a>
                </div>
            </div>

            <div class="row gallery">
                <div class="col-md-4">
                    <a href="">
                        <img src="../res/images/seminars/2062.jpg" class="img-responsive">
                        <div class="overlay">Семинар Поля Мюллера-сэнсэя в Ваттенсе (Австрия), август 2008</div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="">
                        <img src="../res/images/seminars/2033.jpg" class="img-responsive">
                        <div class="overlay">Семинар Коити Бэрриша-сэнсэя в Москве, май 2008</div>
                    </a>
                </div>
                 <div class="col-md-4">
                    <a href="">
                        <img src="../res/images/seminars/2121.jpg" class="img-responsive">
                        <div class="overlay">Семинар Поля Мюллера-сэнсэя в Москве, ноябрь 2007</div>
                    </a>
                </div>
            </div>

            <div class="row gallery">
                <div class="col-md-4">
                    <a href="">
                        <img src="../res/images/seminars/537.jpg" class="img-responsive">
                        <div class="overlay">Семинар Поля Мюллера-сэнсэя в Ваттенсе (Австрия), август 2007</div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="">
                        <img src="../res/images/seminars/490.jpg" class="img-responsive">
                        <div class="overlay">Семинар Коичи Бэрриша-сэнсэя в Москве, Каннагара Додзё, май 2007</div>
                    </a>
                </div>
                 <div class="col-md-4">
                    <a href="">
                        <img src="../res/images/seminars/471_400.jpg" class="img-responsive">
                        <div class="overlay">Семинар Поля Мюллера-сэнсэя, октябрь 2006</div>
                    </a>
                </div>
            </div>

            <div class="row gallery">
                <div class="col-md-4">
                    <a href="">
                        <img src="../res/images/seminars/2218.jpg" class="img-responsive">
                        <div class="overlay">Семинар Поля Мюллера-сэнсэя в Буларисе, август 2004</div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="">
                        <img src="" class="img-responsive">
                        <div class="overlay"></div>
                    </a>
                </div>
                 <div class="col-md-4">
                    <a href="">
                        <img src="" class="img-responsive">
                        <div class="overlay"></div>
                    </a>
                </div>
            </div>
        </div>
        
        <?php include('../footer.php') ?>


        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
        </script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
        </script>
    </body>
</html>