<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Contact The Lilly Pad with any questions about our West Palm Beach Women's Recovery Houses.">
    <meta name="author" content="The Lilly Pad">
    <meta name="ROBOTS" content="INDEX, FOLLOW">
    <link rel="icon" type="image/x-icon" href="../img/lily-pad-favicon-32x32.png" />
    <title>The Lilly Pad | Contact</title>
    <link href="/css/lilly-pad-main.min.css" rel="stylesheet">
    <script src="https://apis.google.com/js/platform.js" async defer></script>
  </head>
  <body>
    <?php include_once('../templates/analyticstracking.php'); ?>
    <?php require_once('../templates/facebook-google-like-script.html'); ?>
    <?php require_once('../templates/navbar.html'); ?>
    <a name="top"></a>
    <div class="container contact">
      <div class="col-xs-12 social-media-like-buttons">
        <div class="fb-like pull-right" data-href="https://www.facebook.com/The-Lilly-Pad-Palm-Beach-300926496715593/?fref=ts" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>
        <div class="pull-right g-plus-button">
          <div class="g-plusone"></div>
        </div>
      </div>
      <div class="row">
        <div class="box">
          <div class="col-lg-12 contact-form">
            <h1 class="intro-text text-center header-spacing">Staff is Available 24/7 to Anyone Seeking Drug or Alcohol Treatment</h1>
            <h3 class="intro-text text-center header-spacing-2">The Lilly Pad Offers Assistance With Detoxification, Inpatient/Outpatient Treatment, and Sober Living</h3>
            <div class="col-lg-12">
              <form role="form" action="../landing/message-landing.php" method = "post"
                    onsubmit = "return onContactSubmit()">
                <div class="col-lg-9">
                  <div class="form-group col-lg-3">
                    <label>Name</label>
                    <input type="text" class="form-control" name = "name" id = "name" autofocus required>
                  </div>
                  <div class="form-group col-lg-3">
                    <label>Email Address</label>
                    <input type="email" class="form-control" name = "email" id = "email" required>
                  </div>
                  <div class="form-group col-lg-3">
                    <label>Phone Number</label>
                    <input type="tel" class="form-control" name = "phone" id = "phone" required>
                  </div>
                  <div class="form-group col-lg-9">
                    <label>Message</label>
                    <textarea class="form-control" rows="6" name = "message" id = "message" required></textarea>
                  </div>
                  <div class="row form-group col-lg-9">
                    <p class = "intro-text text-center" id = "errorElement"></p>
                  </div><br>
                  <div class="row form-group col-lg-9 text-center send-message-div">
                    <input type="hidden" name="save" value="contact">
                    <button type="submit" name="submit" class="btn btn-primary btn-large">Send Message</button>
                  </div>
                </div>
              </form>
              <div class="col-lg-3 contact-div-1">
                <h3 class="text-center">Contact Information</h3>
                <div class="contact-info">
                  <p><strong>Phone 1: </strong>
                    <a href="tel:+15617581011" class="contact-link">561-758-1011</a>
                  </p>
                  <p><strong>Phone 2: </strong>
                    <a href="tel:14407422809" class="contact-link">440-742-2809</a>
                  </p>
                  <p><strong>Location:</strong> 
                    <a class="contact-link" target="_blank"
                       href="https://www.google.com/maps/place/West+Palm+Beach,+FL/@26.7419207,-80.1997062,12z/data=!3m1!4b1!4m2!3m1!1s0x88d8d5ccb595adc1:0x15efc7b51fe16bde">West Palm Beach, FL</a>
                  </p>
                </div>
              </div>
            </div>
            <div class="row col-lg-12 text-center wpb-map">
              <h2 class="intro-text text-center header-spacing">West Palm Beach, Florida</h2>
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d114018.4620546557!2d-80.19970615878994!3d26.741920747096582!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88d8d5ccb595adc1%3A0x15efc7b51fe16bde!2sWest+Palm+Beach%2C+FL!5e0!3m2!1sen!2sus!4v1444573974678" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <div class="row col-lg-12 text-center wpb-map-mobile">
              <h2 class="intro-text text-center header-spacing">West Palm Beach, Florida</h2>
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d114018.4620546557!2d-80.19970615878994!3d26.741920747096582!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88d8d5ccb595adc1%3A0x15efc7b51fe16bde!2sWest+Palm+Beach%2C+FL!5e0!3m2!1sen!2sus!4v1444573974678" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php require_once('../templates/social-footer.html');
require_once('../templates/footer.html'); ?>
  </body>
</html>