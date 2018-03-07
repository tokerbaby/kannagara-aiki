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
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    </head>

    <body>
        <div class="container-fluid header_container">
                
            <div class="container">
                <?php include('../header.php') ?>

                <h1 class="h1 header_title">
                    Контакты
                </h1>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <h2 class="h2">Адреса залов</h2>
                    <h3 class="h3">Зал на Шаболовке</h3>
                    <p class="p">м. Шаболовская, ул. Академика Петровского, д. 10 (из выхода направо, 30 шагов, калитка, надпись МЦФПВ)</p>
                    <p class="p">Центральный зал. Работают: основная группа, утренняя группа, школьная и дошкольная группы.</p>
                    <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A6d3f3d8a463a85cdc047e8a9b6d62c525f85f1565c0ec32996e64ba715f258ed&amp;width=350&amp;height=350&amp;lang=ru_RU&amp;scroll=true">
                    </script>

                    <h3 class="h3">Зал на проспекте Мира</h3>
                    <p class="p">с/к "Олимпийский", Олимпийский пр., 16 строение 1, 3 подъезд (от м. Пр. Мира - 4-5 минут)</p>
                    <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A82b7d858edab551dcff37bdb639dd3a9fa199539cf53425db4ad772291a59583&amp;width=350&amp;height=350&amp;lang=ru_RU&amp;scroll=true">
                    </script>

                    <hr class="hr">

                    <h3 class="h3">Телефоны</h3>
                    <p>
                        +7 (917) 530-59-16 (детские группы)
                        <br>
                        +7 (925) 589-03-20
                    </p>
                    <p>Почта для связи <a href="#">detmir-aiki@mail.ru</a></p>
                    <p>Желающие начать занятия в нашем Додзё проходят предварительное собеседование с преподавателем, после чего преподаватель рекомендует для занятий конкретную группу.</p>
                    
                    
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <h2>Обратная связь</h2>
                                <form class="feedback_form" action="/action_page.php">
                                    <div class="form-group">
                                      <label for="email">Почта</label>
                                      <input type="email" class="form-control" id="email" placeholder="" name="email">
                                    </div>
                                    <div class="form-group">
                                        <label for="comment">Ваше сообщение</label>
                                        <textarea class="form-control" rows="5" id="comment"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
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