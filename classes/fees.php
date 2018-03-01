<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <!-- Responsive meta-tag -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>The HTML5 Herald</title>
        <meta name="description" content="The HTML5 Herald">
        <meta name="author" content="SitePoint">

        <link rel="stylesheet" type="text/css" href="../server_resources/css/header.css">
        <link rel="stylesheet" type="text/css" href="../server_resources/css/footer.css">
        <link rel="stylesheet" type="text/css" href="../server_resources/css/general.css">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    </head>

    <body>
        <div class="container-fluid header_container">
                
            <div class="container">
                <?php include('../header.php') ?>

                <div class="header_title">
                    <h1 class="h1">
                        Стоимость и оплата
                    </h1>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <p>Ежемесячные взносы вносятся до начала месяца.</p>
                    <p>При задержке уплаты ежемесячных взносов просим заранее предупредить преподавателя группы или руководство додзё.</p>
                    <p>Оплата разовых занятий производится в день посещения.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <h3 class="h3">Взрослые и подростки старше 14 лет</h3>
                </div>
                <div class="col-md-4">
                    <h3 class="h3">Школьники и дошкольники</h3>
                </div>
                <div class="col-md-4">
                    <h3 class="h3">Утренняя группа</h3>
                    <div class="table">
                        <tr>
                            <td></td>
                            <td></td>
                        </tr>
                </div>
            </div>
        </div>
        
        <?php include('../../footer.php') ?>


        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
        </script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
        </script>
    </body>
</html>