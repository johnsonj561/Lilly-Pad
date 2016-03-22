<?php
if(isset($_POST['submit'])){
  $name = strip_tags($_POST['name']);
  $email = strip_tags($_POST['email']);
  $phoneNumber = strip_tags($_POST['phone']);
  $message = strip_tags($_POST['message']);
  $headers = "From: www.wpblillypad.com\r\n";
  $headers .= "MIME-Version: 1.0\r\n";
  $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
  $emailMessage = 
    "<table class='form-email-message'>
      <tr>
        <td>Lilly Pad Messaging Center</td>
      </tr>
      <tr>
        <td>$message</td>
      </tr>
      <tr>
        <td>From: $name</td>
      </tr>
      <tr>
        <td>Phone Number: $phoneNumber</td>
      </tr>
      <tr>
        <td>Email: $email</td>
      </tr>
    </table>";
  $result = mail("sivia@thelillypad.org", "Lilly Pad Messaging Center", $emailMessage, $headers);
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="The Lilly Pad - Thank you for your message">
    <meta name="author" content="The Lilly Pad">
    <meta name="ROBOTS" content="NOINDEX, NOFOLLOW">
    <link rel="icon" type="image/x-icon" href="img/lily-pad-favicon-32x32.png" />
    <title>The Lilly Pad | Message Received</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/modern-business.css" rel="stylesheet">
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  </head>
  <body>
    <nav class="navbar navbar-inverse navbar-static-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!--     <a class="navbar-brand" href="index.html">The Lilly Pad</a>   -->
          <img class="img-responsive top-logo" src="../img/Lilly%20Pad%20logo%20v2%20300x100.png"/><a name="top"></a>
          <img class="img-responsive top-logo-mobile" src="../img/Lilly-Pad-logo-v2-240x90.png"/>
          <!--      <a class="btn btn-lg btn-default btn-block help-button" href="#">1-800-256-1888</a>    -->
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li>
              <a href="../index.php">Home</a>
            </li>
            <li>
              <a href="../index.php#home-page-1">About</a>
            </li>
            <li class="mobile-only">
              <a href="../view/properties.php">Properties</a>
            </li>
            <li class="dropdown">
              <a href="../view/properties.php" class="dropdown-toggle" data-toggle="dropdown">Properties<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li>
                  <a href="../view/properties.php#main-campus">Main Campus</a>
                </li>
                <li>
                  <a href="../view/properties.php#executive">Executive Housing</a>
                </li>
                <li>
                  <a href="../view/properties.php#step-down">Step Down Housing</a>
                </li>
              </ul>
            </li>
            <li>
              <a href="../view/application.php">Application</a>
            </li>
            <li>
              <a href="../view/articles.php">Articles</a>
            </li>
            <li>
              <a href="https://lillypad.gocashbox.com/" target="_blank">Pay Online</a>
            </li>
            <li>
              <a href="../view/contact.php">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <a  name="services"></a>
    <div class="container">
      <div class="row">
        <div class="col-lg-5 col-sm-6">
          <hr class="section-heading-spacer">
          <div class="clearfix"></div>
          <h1 class="section-heading text-center">Message Received</h1>
          <hr class="paragraph-divider">
          <h3 class="text-center">A staff member will get back to you shortly.</h3>
          <h3 class="text-center"><a href="../index.php">Return to Home Page</a></h3>
        </div>
        <div class="col-lg-5 col-lg-offset-2 col-sm-6">
          <img class="img-responsive" src="../img/mail-received.png" alt="">
        </div>
      </div>
      <hr class="paragraph-divider">
    </div>
  </body>
  <footer>
    <div class="container">
      <div class="row">
        <div class=" row col-lg-12">
          <div class="col-lg-7">
            <ul class="list-inline text-center">
              <li>
                <a href="../index.php">Home</a>
              </li>
              <li class="footer-menu-divider">&sdot;</li>
              <li>
                <a href="../index.php#home-page-1">About</a>
              </li>
              <li class="footer-menu-divider">&sdot;</li>
              <li>
                <a href="../view/properties.php">Properties</a>
              </li>
              <li class="footer-menu-divider">&sdot;</li>
              <li>
                <a href="../view/application.php">Application</a>
              </li>
              <li class="footer-menu-divider">&sdot;</li>
              <li>
                <a href="view/articles.php">Articles</a>
              </li>
              <li class="footer-menu-divider">&sdot;</li>
              <li>
                <a target="_blank" href="https://lillypad.gocashbox.com/">Pay Online</a>
              </li>
              <li class="footer-menu-divider">&sdot;</li>
              <li>
                <a href="https://www.facebook.com/The-Lilly-Pad-Palm-Beach-300926496715593/?fref=ts" target="_blank">Facebook Page</a>
              </li>
              <li class="footer-menu-divider">&sdot;</li>
              <li>
                <a href="https://plus.google.com/u/0/b/101325822073640161186/101325822073640161186/posts" target="_blank">Google+ Page</a>
              </li>
              <li class="footer-menu-divider">&sdot;</li>
              <li>
                <a href="../view/contact.php">Contact</a>
              </li>
            </ul>
            <p class="copyright text-muted medium">Copyright &copy; The Lilly Pad West Palm Beach, All Rights Reserved</p>
          </div>
          <div class="col-lg-2">
                <p class="text-center">
                  <a href="http://farronline.org">
                    <img class="img-responsive pull-right farr-logo" src="../img/farr-logo-120x71.png" target="_blank"
                         alt="FARR Certified Halfway House"/>
                  </a>
                </p>
              </div>
              <div class="col-lg-3">
                <p class="text-center">
                  <a href="http://www.kbsoftwaresolutions.com"><img src="../img/kb-logo-150x75.png" target="_blank" 
                                                                    alt="KB Software Solutions Web Design"/></a>
                </p>
              </div>
        </div>
      </div>
    </div>
  </footer>
  <script src="../js/jquery.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script>
    $(function() {
      $('a[href*=#]:not([href=#])').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
          if (target.length) {
            $('html,body').animate({
              scrollTop: target.offset().top
            }, 1000);
            return false;
          }
        }
      });
    }); 
    $(document).ready(function(){
      $('.dropdown').hover(function(){
        $(this).find('ul').stop().slideToggle(300);
      });
    });
  </script>
  <script type="text/javascript">stLight.options({publisher: "f62e515e-8f42-4815-aec5-77d2c83198b5", doNotHash: false, doNotCopy: false, hashAddressBar: false});
  </script>
  <script>
    var options={ "publisher": "f62e515e-8f42-4815-aec5-77d2c83198b5", "position": "left", "ad": { "visible": false, "openDelay": 5, "closeDelay": 0}, "chicklets": { "items": ["facebook", "twitter", "linkedin", "email", "googleplus"]}};
    var st_hover_widget = new sharethis.widgets.hoverbuttons(options);
  </script>
</html>