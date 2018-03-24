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
                <?php include('../header.php') ?>

                <h1 class="h1 header_title">
                    Семинар Коити Бэрриш-сэнсэя в Москве, май 2009
                </h1>
            </div>
        </div>

        <div class="container lightbox">
          <div class="row">
              <a href="../res/images/seminars/may2009/1.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-3">
                  <img src="../res/images/seminars/may2009/1.jpg" class="img-fluid">
              </a>
              <a href="../res/images/seminars/may2009/2.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-3">
                  <img src="../res/images/seminars/may2009/2.jpg" class="img-fluid">
              </a>
              <a href="../res/images/seminars/may2009/3.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-3">
                  <img src="../res/images/seminars/may2009/3.jpg" class="img-fluid">
              </a>
              <a href="../res/images/seminars/may2009/4.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-3">
                  <img src="../res/images/seminars/may2009/4.jpg" class="img-fluid">
              </a>
          </div>
          <div class="row">
              <a href="../res/images/seminars/may2009/5.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-3">
                  <img src="../res/images/seminars/may2009/5.jpg" class="img-fluid">
              </a>
              <a href="../res/images/seminars/may2009/6.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-3">
                  <img src="../res/images/seminars/may2009/6.jpg" class="img-fluid">
              </a>
              <a href="../res/images/seminars/may2009/7.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-3">
                  <img src="../res/images/seminars/may2009/7.jpg" class="img-fluid">
              </a>
              <a href="../res/images/seminars/may2009/8.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-3">
                  <img src="../res/images/seminars/may2009/8.jpg" class="img-fluid">
              </a>
          </div>
          <div class="row">
              <a href="../res/images/seminars/may2009/9.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-3">
                  <img src="../res/images/seminars/may2009/9.jpg" class="img-fluid">
              </a>
              <a href="../res/images/seminars/may2009/10.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-3">
                  <img src="../res/images/seminars/may2009/10.jpg" class="img-fluid">
              </a>
              <a href="../res/images/seminars/may2009/11.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-3">
                  <img src="../res/images/seminars/may2009/11.jpg" class="img-fluid">
              </a>
              <a href="../res/images/seminars/may2009/12.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-3">
                  <img src="../res/images/seminars/may2009/12.jpg" class="img-fluid">
              </a>
          </div>
          <div class="row">
              <a href="../res/images/seminars/may2009/13.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-3">
                  <img src="../res/images/seminars/may2009/13.jpg" class="img-fluid">
              </a>
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