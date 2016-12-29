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
    <link rel="stylesheet" href="/font-awesome/css/font-awesome.min.css">    
    <link href="/css/lilly-pad-main.min.css" rel="stylesheet">
  </head>
  <body>
    <a name="top"></a>
    <?php include_once('../templates/analyticstracking.php'); ?>
    <?php require_once('../templates/navbar.html'); ?>
    <div class="container">
      <div class="row contact">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading">St Augustine Executive Housing</h2>
          <div class="col-lg-2"></div>
          <div class="col-lg-8">
            <div id="carousel-example-generic" class="carousel slide">
              <ol class="carousel-indicators hidden-xs">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                <li data-target="#carousel-example-generic" data-slide-to="4"></li>
                <li data-target="#carousel-example-generic" data-slide-to="5"></li>
                <li data-target="#carousel-example-generic" data-slide-to="6"></li>
              </ol>
              <div class="carousel-inner">
                <div class="item">
                  <img class="img-responsive img-full" src="../img/executive/executive-sober-house-living-room-2-1000x500.jpg" 
                       alt="Executive sober living home in St Augustine">
                </div>
                <div class="item active">
                  <img class="img-responsive img-full" src="../img/executive/executive-sober-house-bedroom-3-1000x500.jpg" 
                       alt="Sober living home for women in St Augustine">
                </div>
                <div class="item">
                  <img class="img-responsive img-full" src="../img/executive/executive-sober-house-dining-room-1000x500.jpg" 
                       alt="Dining room in St Augustine women's halfway house">
                </div>
                <div class="item">
                  <img class="img-responsive img-full" src="../img/executive/executive-sober-house-bedroom-1-1000x500.jpg" 
                       alt="Comfortable bedroom in Florida Halfway House for women">
                </div>
                <div class="item">
                  <img class="img-responsive img-full" src="../img/executive/executive-sober-house-bedroom-2-1000x500.jpg" 
                       alt="Comfortable housing for women in sobriety">
                </div>
                <div class="item">
                  <img class="img-responsive img-full" src="../img/executive/executive-sober-house-kitchen-1000x500.jpg" 
                       alt="Fully equipped kitchen in Florida Halfway House">
                </div>
                <div class="item">
                  <img class="img-responsive img-full" src="../img/executive/executive-sober-house-living-room-1000x500.jpg" 
                       alt="Community Living Area in Women's Recovery Home">
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-2"></div>
        </div>
      </div>
      
      

        <!-- Call to Action Section -->
        <div class="well st-augustine-well">
          <div class="row">
            <div class="col-md-8">
              <p class="text-center st-augustine-well-text">Interested in learning more about our St Augustine Executive Housing?</p>
            </div>
            <div class="col-md-4">
              <a class="btn btn-lg btn-default btn-block" href="http://www.thelillypadofsaintaugustine.com">Visit St Augustine</a>
            </div>
          </div>
        </div>
      
      
    </div> 
    <?php 
require_once('../templates/social-footer.html');
require_once('../templates/footer.html'); ?>
    <script>
      $('.carousel').carousel({
        interval: 4000 
      })
    </script>
  </body>
</html>