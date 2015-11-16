<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="The Lilly Pad - West Palm Beach Halfway House Photo Gallery">
    <meta name="author" content="The Lilly Pad West Palm Beach">
    <meta name="ROBOTS" content="INDEX, FOLLOW">
    <link rel="icon" type="image/x-icon" href="../img/lily-pad-favicon-32x32.png" />
    <title>Main Campus Photo Gallery</title>
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
          <h2 class="section-heading">Main Campus - Primary Housing</h2>
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
              </ol>
              <!-- Wrapper for slides -->
              <div class="carousel-inner">
                <div class="item active">
                  <img class="img-responsive img-full" src="../img/main-campus/main-1-1000x500.jpg" alt=" Halfway House Main Campus - Bedroom">
                </div>
                <div class="item">
                  <img class="img-responsive img-full" src="../img/main-campus/main-2-1000x50.jpg" alt="Sober Living Main Campus - Bedroom">
                </div>
                <div class="item">
                  <img class="img-responsive img-full" src="../img/main-campus/main-4-1000x500.jpg" alt="Living Clean Main Campus - Living Room">
                </div>
                <div class="item">
                  <img class="img-responsive img-full" src="../img/main-campus/main-3-1000x500.jpg" alt=" Halfway HouseMain Campus - Bedroom">
                </div>
                <div class="item">
                  <img class="img-responsive img-full" src="../img/main-campus/main-5-1000x500.jpg" alt="Halfway House Main Campus">
                </div>
                <div class="item">
                  <img class="img-responsive img-full" src="../img/main-campus/main-6-1000x500.jpg" alt="Main Campus Halfway House - Bedroom">
                </div>
                <div class="item">
                  <img class="img-responsive img-full" src="../img/main-campus/main-7-1000x500.jpg" alt="Sober Living Women's - Bedroom">
                </div>
                <div class="item">
                  <img class="img-responsive img-full" src="../img/main-campus/main-8-1000x500.jpg" alt="Women's Halfway House - Living ROom">
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