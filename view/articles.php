<?php
//connect to database
require_once('../php/connect.php');
$currentPage = 0;
if(isset($_POST['chevron-left'])){
  //get current page if available, or set to 0 as default
  if(isset($_POST['currentPage'])){
    $currentPage = $_POST['currentPage'];
  }
  $currentPage--;
}
if(isset($_POST['chevron-right'])){
  //get current page if available, or set to 0 as a default
  if(isset($_POST['currentPage'])){
    $currentPage = $_POST['currentPage'];
  }
  $currentPage++;
}
if(!isset($articlesArray)){   //if articles array is not set, query DB and assign articles to array
  //Select all elements from DB and store in PHP array
  //If rows become increasingly large, we will need to implement more efficient algorithm!
  $query = "SELECT * FROM Articles ORDER BY ArticleID DESC;";
  $result = mysqli_query($link, $query);
  $articlesArray = array();
  while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
    $articlesArray[] = $row;
  }
}
//empty element to store article divs
$articlesHTML = "";
//if there are articles to display
if(count($articlesArray)){
  //build article from $currentPage data
  $date = $articlesArray[$currentPage]['Date'];
  $date = strtotime($date);
  $date = date("M d, Y", $date);
  $subject = $articlesArray[$currentPage]['Subject'];
  $imageSource = $articlesArray[$currentPage]['ImageSource'];
  $article = $articlesArray[$currentPage]['Article'];
  $article = nl2br($article);
  $author = $articlesArray[$currentPage]['Author'];
  $articlesHTML .=
    "<div class='col-lg-12'>
     <div class='col-lg-2 text-center need-help-div'>
      <h3>Do You or a Loved One Need Help With Detox or Treatment?</h3>
      <a href='/view/contact.php'>
        <button class='btn btn-success'><span class='glyphicon glyphicon-earphone'></span>Call Now For Help</button>
      </a>
     </div>
     <div class='col-lg-8'>
        <h2 class=''>$subject</h2>
        <div class='article-border'>
                <p class='article-date'>$date</p>";
  //only add an image if ImageSource != null
  if($imageSource){
    $articlesHTML .= "<img src='$imageSource' alt='$subject' class='img-responsive article-image'/>";
  }
  $articlesHTML .=
    "<p class='article-body'>$article</p>
      <div class='article-author-div'><p class='article-author pull-right'>$author</p></div>

      </div></div>
      <div class='col-lg-2 text-center upload-button-div'>
      <h3>Contribute to The Lilly Pad Website</h3>
        <a href='upload-article.php'>
          <button class='btn btn-primary'><span class='glyphicon glyphicon-upload'></span>Upload Articles</button>
        </a>
      </div></div>";
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
    <meta name="ROBOTS" content="INDEX, FOLLOW">
    <link rel="icon" type="image/x-icon" href="../img/lily-pad-favicon-32x32.png" />
    <title>The Lilly Pad | Articles</title>
    <link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="/css/lilly-pad-main.min.css" rel="stylesheet">
    <script src="https://apis.google.com/js/platform.js" async defer></script>
  </head>
  <body>
    <a name="top"></a>
    <?php include_once('../templates/analyticstracking.php'); ?>
    <?php require_once('../templates/facebook-google-like-script.html');?>
    <?php require_once('../templates/navbar.html'); ?>
    <div class="container">
      <div class="col-xs-12 social-media-like-buttons">
        <div class="fb-like pull-right" data-href="https://www.facebook.com/The-Lilly-Pad-Palm-Beach-300926496715593/?fref=ts" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>
        <div class="pull-right g-plus-button">
          <div class="g-plusone"></div>
        </div>
      </div>
    </div>
    <?php echo $articlesHTML; ?>
    <form role='form' enctype='multipart/form-data' action='#' method = 'post'
          onsubmit = ''>
      <div class="col-lg-12 article-chevrons">
        <div class="col-lg-5"></div>
        <div class="col-lg-2">
          <?php 
          if($currentPage > 0){
            echo "<button type='submit' name ='chevron-left' class='btn chevron-button pull-left'>
                        <i class='fa fa-chevron-circle-left fa-3x'></i>
                      </button>";
          }
          if($currentPage < count($articlesArray) - 1){
            echo "<button type='submit' name ='chevron-right' class='btn chevron-button pull-right'>
                        <i class='fa fa-chevron-circle-right fa-3x'></i>
                      </button>";
          }
          ?>
        </div>
        <div class="col-lg-5"></div>
        <input type='hidden' name='currentPage' value='<?php echo $currentPage; ?>'>
      </div>
    </form>
    </div>
  <?php 
  require_once('../templates/social-footer.html');
  require_once('../templates/footer.html'); ?>
  </body>
</html>