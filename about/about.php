<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <!-- ../responsive meta-tag -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>The HTML5 Herald</title>
        <meta name="description" content="The HTML5 Herald">
        <meta name="author" content="SitePoint">

        <link rel="stylesheet" type="text/css" href="../../res/css/header.css">
        <link rel="stylesheet" type="text/css" href="../../res/css/footer.css">
        <link rel="stylesheet" type="text/css" href="../../res/css/general.css">
        <link rel="stylesheet" type="text/css" href="../../res/css/about.css">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoI../resjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    </head>

    <body>
        <div class="container-fluid header_container">
                
            <div class="container">
                <?php include('../header.php') ?>
                
                <h1 class="h1 header_title" id="teachers">
                    О клубе
                </h1>

                <ul class="breadcrumb">
                    <li><a href="index.php">Главная</a></li>
                    <li>О клубе</li>
                </ul>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-9 text-center">
                    <h2 class="h2">Преподаватели</h2>
                    <div class="row">

                        <div class="col-md-4 teacher_info">
                            <img src="../res/images/about/Oleg.jpg" alt="avatar" class="img-../responsive d-block mx-auto">
                            <h3 class="h3">Глушко Олег Михайлович</h3>
                            <p class="title">Додзё-тё - старший преподаватель</p>
                            <p class="p">
                                Рокудан (6-й дан) айкидо Айкикай<br>
                                Рокудан (6-й дан) будзюцу Идэта-рю
                            </p>
                        </div>

                        <div class="col-md-4 teacher_info">
                            <img src="../res/images/about/Vyacheslav.jpg" alt="avatar" class="img-../responsive d-block mx-auto">
                            <div class="container card_content">
                                <h3 class="h3">Егоров Вячеслав Андреевич</h3>
                                <p class="p">Сидан (4-й дан) айкидо Айкикай </p>
                            </div>
                        </div>

                        <div class="col-md-4 teacher_info">
                            <img src="../res/images/about/Andrey.jpg" alt="avatar" class="img-../responsive d-block mx-auto">
                            <div class="container card_content">
                                <h3 class="h3">Кондрашов Андрей Владимирович</h3>
                                <p class="p">Сандан (3-й дан) айкидо Айкикай</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4 teacher_info">
                            <img src="../res/images/about/Rashid.jpg" alt="avatar" class="img-../responsive d-block mx-auto">
                            <div class="container card_content">
                                <h3 class="h3">Янбаев Рашид Иванович</h3>
                                <p class="p">Сандан (3-й дан) айкидо Айкикай</p>
                            </div>
                        </div>

                        <div class="col-md-4 teacher_info">
                            <img src="../res/images/about/Igor.jpg" alt="avatar" class="img-../responsive d-block mx-auto">
                            <div class="container card_content">
                                <h3 class="h3">Ксенофонтов Игорь Владимирович</h3>
                                <p class="p">Сандан (3-й дан) айкидо Айкикай</p>
                            </div>
                        </div>
                    </div>

                    <div id="mentors"></div>
                    <hr class="hr">

                    <h2 class="h2">Наставники и коллеги</h2>

                    <div class="mentor_info">
                        <a href="#"><img src="../res/images/about/paul.jpg"></a>
						<h3 class="h3 mt-4"><a href="paulmuller.php">Поль Мюллер-сэнсэй (Paul Muller)</a></h3>
                        <h4 class="h4">7 дан Айкидо Айкикай, 7 дан айкидо FFAAA, 5 дан Иайдо Тохо</h4>
                        <p class="p text-left">
                            Профессор электроники в Страсбургском университете, Франция. Занимается Айкидо с 1967 г. В настоящее время 
                            возглавляет Centre d etudes d Aikido et de Budo (CEAB  -  Центр изучения Айкидо и Будо), основанный в 1985 году. 
                            Поль Мюллер-сэнсэй  является последователем легендарного наставника Сёдзи Нисио-сэнсэя, под чьим патронажем изучал 
                            особенности его стиля... <a href="#">Читать далее</a>
                        </p>
                    </div>

                    <div class="mentor_info">
                        <a href="#"><img src="../res/images/about/barrish.jpg"></a>
                        <h3 class="h3 mt-4"><a href="#">Коити Бэрриш-сэнсэй (Koichi Barrish)</a></h3>
                        <h4 class="h4">Сокэ</h4>
                        <p class="p text-left">
                            Начал заниматься бу-дзюцу в западном Лос-Анжелесе в 1969 под руководством Коити Идэта-сэнсэя, Сокэ Идэта-рю (Идэта-рю - ветвь будо, происходящей из Кумамото, Кюсю, Япония). Будучи избранным в качестве Ёси (приёмный сын, наследующий учение) получил должную передачу опыта. В 1977 г. в соответствии  с древней  традицией иэмото  принял от дото (настоятеля) Титул Сокэ и имя Идэта Коити...
                        </p>
                    </div>

                    <div class="mentor_info">
                        <a href="#"><img src="../res/images/about/kevin.jpg"></a>
                        <h3 class="h3 mt-4"><a href="#">Кевин Шоэт-сэнсей (Kevin Choate)</a></h3>
                        <h4 class="h4">6-й дан айкидо Айкикай</h4>
                        <p class="p text-left">
                            Кевин Шоэт-сэнсей начал заниматься айкидо в 1976г. под руководством Сигэру Судзуки-сэнсея, на занятиях которого постигал основы пути.  В 1981г. он стал старшим инструктором Чикаго Айкикай и приобрёл репутацию  высокопрофессионального преподавателя, равно требовательного как к своим ученикам, так и к себе самому...
                        </p>
                    </div>

                    <div class="mentor_info">
                        <a href="#"><img src="../res/images/about/takao.jpg" style="width: 30%"></a>
                        <h3 class="h3 mt-4"><a href="#">Такао Арисуэ-сэнсэй (Takao Arisue)</a></h3>
                        <h4 class="h4">7 дан Айкидо Айкикай и 7 дана Иайдо Тохо</h4>
                        <p class="p text-left">
                            Родился в 1948 г. Начал заниматься айкидо в Токио в 1966 г. Старший ученик и последователь легендарного Нисио-сэнсэя, под руководством которого занимался более 40 лет. В настоящее время активно продолжает линию своего наставника, Нисио-сэнсэя.
                        </p>
                    </div>

                    <div class="mentor_info">
                        <a href="#"><img src="../res/images/about/nishio.jpg" style="width: 30%"></a>
                        <h3 class="h3 mt-4"><a href="#">Сёдзи Нисио-сэнсэй (Shoji Nishio)</a></h3>
                        <h4 class="h4">Сихан, 8-й дан айкидо Айкикай</h4>
                        <p class="p text-left" id="exams">
                            Родился в пре­фектуре Аомори 5-го дня десятой луны во 2-й год эры Сёва (5 декабря 1927 г.). Член Айкикай Хомбу Додзё с 1951 г. Начал пре­подавать в 1955 г. Сихан, кёси, 7-й дан Федерации Дзэндоку Иайдо Японии. Родоначальник Иайдо Тохо - стиля, опирающегося на технику айкидо. Обладатель титула рэнси Федерации Иайдо Дай Ниппон Бутокукай.          
                        </p>
                    </div>

                    <hr class="hr">

                    <h2 class="h2">Экзамены</h2>

                    <div class="container text-left">
                        <h3 class="h3">Демонстрация экзаменационной техники на сайте Поля Мюллера-сэнсэя:</h3>
                        <a href="#">Кю</a>
                        <br>
                        <a href="#">Дан</a>

                        <p class="p"><a href="#">PDF Экзаменационная техника</a></p>

                        <h3 class="h3 text-center">Экзаменационная программа</h3>

                        <?php include 'exams.php';?>
                    </div>

                    <a href="rules.php"><h2 class="h2">Правила</h2></a>

                    <div class="container text-left">
                    </div>      
                </div>

                <div class="col-md-3">
                    <div class="sidebar text-left">
                        <ul> 
                            <li>
                                <a href="#teachers">Преподаватели</a>
                            </li>
                            <li>
                                <a href="#mentors">Наставники и коллеги</a>
                            </li>
                            <li>
                                <a href="#exams">Экзамены</a>
                            </li>
                            <li>
                                <a href="rules.php">Правила</a>
                            </li>
                        </ul>
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