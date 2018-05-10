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
                <?php include('../Header.php') ?>

                <h1 class="h1 header_title">
                    
                </h1>
            </div>
        </div>

        <div class="container">
	        <div class="row">
		        <h2 class="h2">Экзамены</h2>

                <div class="container text-left">
                    <h3 class="h3">Демонстрация экзаменационной техники на сайте Поля Мюллера-сэнсэя:</h3>
                    <a href="#">Кю</a>
                    <br>
                    <a href="#">Дан</a>

                    <p class="p"><a href="#">PDF Экзаменационная техника</a></p>

                    <h3 class="h3 text-center">Экзаменационная программа</h3>

                    <?php include 'exams.php'; ?>
                </div>
	        </div>
		</div>
        
        <?php include('../Footer.php') ?>


        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
        </script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
        </script>
    </body>
</html>