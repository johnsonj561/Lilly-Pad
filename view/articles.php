<?php
//connect to database
require_once('../php/connect.php');

//Select all elements from DB
$query = "SELECT * FROM ARTICLES;";
$result = mysqli_query($link, $query);
$articleCount = mysqli_num_rows($result);

//empty element to store article divs
$articlesHTML = "";

//while there are rows to fetch
while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
  $date = $row['Date'];
  $subject = $row['Subject'];
  $imageSource = $row['ImageSource'];
  $article = $row['Article'];
  $articlesHTML .=
    "<div class='col-lg-12'>
     <div class='col-lg-3'></div>
     <div class='col-lg-6'>
        <h1 class='thumbnail-title'>$subject</h1>
        <div class='contact-info'>
           <img src='$imageSource' alt='$subject' class='img-responsive article-image'/>
           <p class='article-body'>$article</p>
        </div>
     </div>
     <div class='col-lg-3'></div>
     </div>";
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="The Lilly Pad West Palm Beach - View our inspirational recovery based articles and share with your friends">
    <meta name="author" content="The Lilly Pad">
    <meta name="ROBOTS" content="INDEX, NOFOLLOW">
    <link rel="icon" type="image/x-icon" href="../img/lily-pad-favicon-32x32.png" />
    <title>The Lilly Pad | Articles</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/modern-business.css" rel="stylesheet">
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Google Button Script -->
    <script src="https://apis.google.com/js/platform.js" async defer></script>
  </head>
  <body>
    <a name="top"></a>
    <?php require_once('../templates/facebook-google-like-script.html');?>
    <?php require_once('../templates/navbar.html'); ?>
    <!-- Page Content -->
    <div class="container">
      <!-- Social Media Like Buttons -->
      <div class="col-xs-12 social-media-like-buttons">
        <!--Facebook Button -->
        <div class="fb-like pull-right" data-href="https://www.facebook.com/The-Lilly-Pad-Palm-Beach-300926496715593/?fref=ts" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>
        <!-- Google Button -->
        <div class="pull-right g-plus-button">
          <div class="g-plusone"></div>
        </div>
      </div>
      <div class="row">
        <a href="upload-article.php">
          <button class="btn btn-primary pull-left"><span class="glyphicon glyphicon-upload"></span>Upload Articles</button>
        </a>
      </div>
      <!-- ARTICLES BODY -->
      
      <?php echo $articlesHTML; ?>

    </div>
    <?php 
require_once('../templates/social-footer.html');
require_once('../templates/footer.html'); ?>
  </body>
</html>
