<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="The Lilly Pad West Palm Beach - Executive Housing Photo Gallery">
    <meta name="author" content="The Lilly Pad">
    <meta name="ROBOTS" content="INDEX, FOLLOW">
    <link rel="icon" type="image/x-icon" href="../img/lily-pad-favicon-32x32.png" />
    <title>The Lilly Pad | Executive Gallery</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/modern-business.css" rel="stylesheet">
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  </head>
  <body>
    <a name="top"></a>
    <?php require_once('../templates/navbar.html'); ?>
    <!-- Page Content -->
    <div class="container">
      <div class="row contact">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading">Executive - Premiere Housing</h2>
          <div class="col-lg-2"></div>
          <div class="col-lg-8">
            <div id="carousel-example-generic" class="carousel slide">
              <!-- Indicators -->
              <ol class="carousel-indicators hidden-xs">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                <li data-target="#carousel-example-generic" data-slide-to="4"></li>
                <li data-target="#carousel-example-generic" data-slide-to="5"></li>
                <li data-target="#carousel-example-generic" data-slide-to="6"></li>
                <li data-target="#carousel-example-generic" data-slide-to="7"></li>
                <li data-target="#carousel-example-generic" data-slide-to="8"></li>
                <li data-target="#carousel-example-generic" data-slide-to="9"></li>
                <li data-target="#carousel-example-generic" data-slide-to="10"></li>
              </ol>
              <!-- Wrapper for slides -->
              <div class="carousel-inner">
                <div class="item active">
                  <img class="img-responsive img-full" src="../img/executive/executive-1-1000x500.jpg" alt="Executive Halfway House - Dining Area">
                </div>
                <div class="item">
                  <img class="img-responsive img-full" src="../img/executive/executive-2-1000x500.jpg" alt="Executive Sober Living - Living Room">
                </div>
                <div class="item">
                  <img class="img-responsive img-full" src="../img/executive/executive-3-1000x500.jpg" alt="Executive Clean and Sober - Living Room">
                </div>
                <div class="item">
                  <img class="img-responsive img-full" src="../img/executive/executive-4-1000x500.jpg" alt="Executive Women's Halfway - Living Room">
                </div>
                <div class="item">
                  <img class="img-responsive img-full" src="../img/executive/executive-5-1000x500.jpg" alt="Executive Sober House - Study Room">
                </div>
                <div class="item">
                  <img class="img-responsive img-full" src="../img/executive/executive-6-1000x500.jpg" alt="Executive Halfway House - Dining Area">
                </div>
                <div class="item">
                  <img class="img-responsive img-full" src="../img/executive/executive-7-1000x500.jpg" alt="Executive Halfway House - Kitchen">
                </div>
                <div class="item">
                  <img class="img-responsive img-full" src="../img/executive/executive-bathroom-1000x500.jpg" alt="Executive Sober Living - Bathroom">
                </div>
                <div class="item">
                  <img class="img-responsive img-full" src="../img/executive/executive-bedroom-1000x500.jpg" alt="Executive Halfway house - Bedroom">
                </div>
                <div class="item">
                  <img class="img-responsive img-full" src="../img/executive/executive-bedroom-2-1000x500.jpg" alt="Executive Women's Sober Living -
                                                                                                                    Bedroom">
                </div>
                <div class="item">
                  <img class="img-responsive img-full" src="../img/executive/executive-pool-1000x500.jpg" alt="Executive Halfway House - Pool">
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-2"></div>
        </div>
      </div>
    </div> 
    <?php 
    require_once('../templates/social-footer.html');
    require_once('../templates/footer.html'); ?>
    <!-- Script to Activate the Carousel -->
    <script>
      $('.carousel').carousel({
        interval: 4000 //changes the speed
      })
    </script>
  </body>
</html>