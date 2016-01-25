<?php
require_once('../php/connect.php');
//regular visitors are not authorized to upload articles
$authorization = false;

$feedback = "";

//if password was submitted - check if valid
if(isset($_POST['password-submit'])){
  $password = $_POST['password'];
  if($password == ""){
    $authorization = true;
  }
  else{
    $feedback = "<p class='text-center'>Incorrect Password</p>";
  }
}

if(isset($_POST['upload'])){
  //variable to detect a successful image upload
  $image_success = 1;
  //extract testimonial data
  $date = strip_tags($_POST['date']);
  $subject = strip_tags($_POST['subject']);
  $subject = mysqli_real_escape_string($link, $subject);
  $article = strip_tags($_POST['article']);
  $article = mysqli_real_escape_string($link, $article);

  //create image data
  $tempName = $_FILES['image']['tmp_name'];
  if(!($imageName = $_FILES['image']['name'])){
    echo "No Image Found<br>";
    $image_success = 0;
  }
  else if(!($imageExtension = GetImageExtension($_FILES['image']['type']))){
    echo "Invalid image type entered<br>";
    $image_success = 0;
  }
  else if($_FILES['image']['size'] > 300000){
    echo "File size is too large<br>";
    $image_success = 0;
  }
  else if(file_exists($targetPath = "articleimages/".$imageName)){
    echo "This file already exists<br>";
    $image_success = 0;
  }
  else if(!(move_uploaded_file($tempName, $targetPath))){
    echo "Unable to upload file to server<br>";
    $image_success = 0;
  }

  //if any of above tests failed - set image path to NULL
  //this assumes no image was entered and forces testimonial to upload with no image
  if(!$image_success){
    $targetPath = NULL;
  }

  //we are inserting into the database the path to the image - not the actual image's binary
  //another option is to create a blob db variable and store the image binary in the database
  $query = "INSERT INTO ARTICLES (Date, Subject, Article, ImageSource) VALUES
            ('$date', '$subject', '$article', '$targetPath');";
  $result = mysqli_query($link, $query) or die(mysqli_error($link));
  if($result){
    echo "Article successfully uploaded to Articles table<br>";
    echo "<meta http-equiv='refresh' content='1; articles.php'>";
  }

  mysqli_close($link);

}

//re-direct to Testimonials page

//returns the correct image extension or false if invalid type
function GetImageExtension($imagetype){
  if(empty($imagetype)) return false;
  switch($imagetype){
    case 'image/bmp': return '.bmp';
    case 'image/gif': return '.gif';
    case 'image/jpeg': return '.jpg';
    case 'image/png': return '.png';
    default: return false;
  }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Upload article or blog post to The Lilly Pad website">
    <meta name="author" content="The Lilly Pad">
    <meta name="ROBOTS" content="INDEX, NOFOLLOW">
    <link rel="icon" type="image/x-icon" href="../img/lily-pad-favicon-32x32.png" />
    <title>The Lilly Pad | Properties</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/modern-business.css" rel="stylesheet">
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  </head>
  <body>
    <?php require_once('../templates/navbar.html'); ?>
    <!-- Page Content -->
    <div class="container">
        <?php if($authorization){require_once('../templates/upload-article-form.html');}
              else{require_once('../templates/password-required.html');}?>
    </div>
    </div>
  <?php 
require_once('../templates/social-footer.html');
require_once('../templates/footer.html'); ?>
  </body>
</html>
