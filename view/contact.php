<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Contact C & T Auto Care to schedule appointments or ask any questions regarding your vehicle's reapirs.">
    <meta name="author" content="C & T Auto">
    <meta name="ROBOTS" content="INDEX, FOLLOW">
    <link rel="icon" type="image/x-icon" href="../img/wrench-gear-favicon-16-16.png" />
    <title>C &amp; T Auto Care | Contact</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/modern-business.css" rel="stylesheet">
  </head>
  <body>
    <?php require_once('../templates/navbar.html'); ?>
    <div class="container">
      <a name="top"></a>
      <div class="container contact">
        <div class="row">
          <div class="box">
            <div class="col-lg-12 contact-form">
              <h2 class="intro-text text-center header-spacing">Staff is Available 24/7 to Anyone Reaching Out For Help</h2>
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
                      <input type="tel" class="form-control" name = "phone" id = "email" required>
                    </div>
                    <div class="form-group col-lg-9">
                      <label>Message</label>
                      <textarea class="form-control" rows="6" name = "message" id = "message" required></textarea>
                    </div>
                    <div class="row form-group col-lg-9">
                      <p class = "intro-text text-center" name = "errorElement" id = "errorElement"></p>
                    </div><br>
                    <div class="row form-group col-lg-9 text-center">
                      <input type="hidden" name="save" value="contact">
                      <button type="submit" class="btn btn-primary btn-large">Send Message</button>
                    </div>
                  </div>
                </form>
                <div class="col-lg-3 contact-div-1">
                  <h3 class="text-center">Contact Information</h3>
                  <div class="contact-info">
                    <p><strong>Phone: </strong>
                      <a href="tel:+15619097795" class="contact-link">561-629-7214</a>
                    </p>
                    <p><strong>Email: </strong>
                      <a href="mailto:candtautocare@yahoo.com" class="contact-link">candtautocare@yahoo.com</a>
                    </p>
                    <p><strong>Location:</strong> 
                      <a class="contact-link" target="_blank"
                         href="https://www.google.com/maps/place/1260+Plaza+Cir,+West+Palm+Beach,+FL+33404/data=!4m2!3m1!1s0x88d8d4f234f64211:0x4292d655348e98bb?sa=X&ved=0CB0Q8gEwAGoVChMI0dLBtKexxwIVCJ2ACh12iQok">1260 Plaza Circle</a>
                    </p>
                    <p class="location-line-2">Singer Island, FL 33404</p>
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