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
        <link rel="stylesheet" type="text/css" href="../res/css/lightbox.css">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    </head>

    <body>
        <div class="container-fluid header_container">
                
            <div class="container">
                <?php include('../Header.php') ?>

                <h1 class="h1 header_title">
                    Семинар Поля Мюллера-сэнсэя, 2012 год
                </h1>
            </div>
        </div>

        <div class="container lightbox">
          <div class="row">
              <a href="../res/images/seminars/2012/3821.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-3">
                  <img src="../res/images/seminars/2012/3821.jpg" class="img-fluid">
              </a>
              <a href="../res/images/seminars/2012/3822.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-3">
                  <img src="../res/images/seminars/2012/3822.jpg" class="img-fluid">
              </a>
              <a href="../res/images/seminars/2012/3823.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-3">
                  <img src="../res/images/seminars/2012/3823.jpg" class="img-fluid">
              </a>
              <a href="../res/images/seminars/2012/3824.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-3">
                  <img src="../res/images/seminars/2012/3824.jpg" class="img-fluid">
              </a>
          </div>
          <div class="row">
              <a href="../res/images/seminars/2012/3834.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-3">
                  <img src="../res/images/seminars/2012/3834.jpg" class="img-fluid">
              </a>
              <a href="../res/images/seminars/2012/3835.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-3">
                  <img src="../res/images/seminars/2012/3835.jpg" class="img-fluid">
              </a>
              <a href="../res/images/seminars/2012/3836.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-3">
                  <img src="../res/images/seminars/2012/3836.jpg" class="img-fluid">
              </a>
              <a href="../res/images/seminars/2012/3837.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-3">
                  <img src="../res/images/seminars/2012/3837.jpg" class="img-fluid">
              </a>
          </div>
          <div class="row">
              <a href="../res/images/seminars/2012/3838.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-3">
                  <img src="../res/images/seminars/2012/3838.jpg" class="img-fluid">
              </a>
              <a href="../res/images/seminars/2012/3839.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-3">
                  <img src="../res/images/seminars/2012/3839.jpg" class="img-fluid">
              </a>
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

        <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js"></script>
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css">

        <script>
          $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                event.preventDefault();
                $(this).ekkoLightbox();
            });
        </script>
    </body>
</html>