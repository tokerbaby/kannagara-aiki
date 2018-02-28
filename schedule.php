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
        <link rel="stylesheet" type="text/css" href="css/schedule.css">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    </head>

    <body>
        <div class="container-fluid header_container">
                
            <div class="container">
                <?php include('header.php') ?>

                <div class="header_title">
                    <h1 class="h1">
                        Расписание занятий
                    </h1>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <p class="p">Просим вас перед первым посещением позвонить по т. <a href="#">+7 (917) 530-59-16</a>.</p>

                    <ul class="main">
                        <li class="date">
                            <h3>Утренняя группа</h3>
                            <p>Взрослые</p>
                        </li>
                        <li class= "events">
                            <ul class="events-detail">
                                <li>
                                    <a href="#">
                                      <span class="event-time">10:00 - 12:00</span>
                                      <span class="event-name">Среда</span>
                                      <br />
                                      <span class="event-location">с/к "Олимпийский"</span>
                                    </a>
                                </li>
                               
                                <li>
                                    <a href="#">
                                      <span class="event-time">10:00 - 12:00</span>
                                      <span class="event-name">Пятница</span>
                                      <br />
                                      <span class="event-location">с/к "Олимпийский"</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                                 
                        <li class="date">
                            <h3>Центральная группа</h3>
                            <p>Взрослые</p>
                        </li>
                        <li class= "events cf">
                            <ul class="events-detail">
                                <li>
                                    <a href="#">
                                      <span class="event-time">20:00 - 22:00</span>
                                      <span class="event-name">Понедельник</span>
                                      <br />
                                      <span class="event-location">Шаболовская</span>
                                    </a>
                                </li>
                                   
                                <li>
                                    <a href="#">
                                      <span class="event-time">20:00 - 22:00</span>
                                      <span class="event-name">Среда, занятия с оружием</span>
                                      <br />
                                      <span class="event-location">Шаболовская</span>
                                    </a>
                                </li>
                                  
                                <li>
                                    <a href="#">
                                      <span class="event-time">20:00 - 22:00</span>
                                      <span class="event-name">Пятница</span>
                                      <br />
                                      <span class="event-location">Шаболовская</span>
                                    </a>
                                </li>
                                  
                                <li>
                                    <a href="#">
                                      <span class="event-time">2:00pm - </span>
                                      <span class="event-name">Суббота</span>
                                      <br />
                                      <span class="event-location">
                                        Скользящий график, уточняйте письмом detmir-aiki@mail.ru
                                      </span>
                                    </a>
                                </li>  
                            </ul>
                        </li> 

                        <li class="date">
                            <h3>Детская группа</h3>
                            <p>Для карапузов с 7 лет</p>
                        </li>
                        <li class= "events">
                            <ul class="events-detail">
                                <li>
                                    <a href="#">
                                      <span class="event-time">18:15 — 19:45</span>
                                      <span class="event-name">Понедельник</span>
                                      <br />
                                      <span class="event-location">Шаболовская</span>
                                    </a>
                                </li>
                               
                                <li>
                                    <a href="#">
                                      <span class="event-time">18:15 — 19:45</span>
                                      <span class="event-name">Пятница</span>
                                      <br />
                                      <span class="event-location">Шаболовская</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="date">
                            <h3>Для дошкольников</h3>
                            <p>С 4 до 6 лет</p>
                        </li>
                        <li class= "events">
                            <ul class="events-detail">
                                <li>
                                    <a href="#">
                                      <span class="event-time">17:00 - 18:00</span>
                                      <span class="event-name">Понедельник</span>
                                      <br />
                                      <span class="event-location">Шаболовская</span>
                                    </a>
                                </li>
                               
                                <li>
                                    <a href="#">
                                      <span class="event-time">17:00 - 18:00</span>
                                      <span class="event-name">Пятница</span>
                                      <br />
                                      <span class="event-location">Шаболовская</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul> 
                </div>
            </div>
        </div>
        
        <?php include('footer.php') ?>


        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
        </script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
        </script>
    </body>
</html>