<?php
if(isset($_POST['submit'])){
  //Basic Information
  $fullName = $_POST['fullName'];
  $dob = $_POST['dob'];
  $street = $_POST['street'];
  $apt = $_POST['apt'];
  $city = $_POST['city'];
  $state = $_POST['state'];
  $zip = $_POST['zip'];
  $clientPhone = $_POST['clientPhone'];
  $clientEmail = $_POST['clientEmail'];
  //Emergency Contact
  $emergencyContact = $_POST['emergencyContact'];
  $emergencyRelationship = $_POST['emergencyRelationship'];
  $emergencyPhone = $_POST['emergencyPhone'];
  $emergencyEmail = $_POST['emergencyEmail'];
  //Drug/Alcohol History
  $primarySubstance = $_POST['primarySubstance'];
  $primaryDate = $_POST['primaryDate'];
  $primaryPeriod = $_POST['primaryPeriod'];
  $secondarySubstance = $_POST['secondarySubstance'];
  $familyAddiction = $_POST['familyAddiction'];
  $familyAddictionMessage = $_POST['familyAddictionMessage'];
  //Psych and Medical History
  $allergies = $_POST['allergies'];
  $currentMedications = $_POST['currentMedicationList'];
  $priorFacilities = $_POST['priorFacilityList'];
  $hadPsychTreatment = $_POST['hadPsychTreatment'];
  $psychHistoryMessage = $_POST['psychHistoryMessage'];
  $haveEatingDisorder = $_POST['haveEatingDisorder'];
  $eatingDisorderHistory = $_POST['eatingDisorderHistory'];
  $eatingDisorderHistoryMessage = $_POST['eatingDisorderHistoryMessage'];
  $treatedEatingDisorder = $_POST['treatedEatingDisorder'];
  $treatedEatingDisorderMessage = $_POST['treatedEatingDisorderMessage'];
  //Current Treatment Center
  $inTreatmentRadio = $_POST['inTreatmentRadio'];
  $currentResidence = $_POST['currentResidence'];
  $currentFacilityName = $_POST['currentFacilityName'];
  $currentFacilityDCDate = $_POST['currentFacilityDCDate'];
  $primaryTherapistName = $_POST['primaryTherapistName'];
  $primaryTherapistTelephone = $_POST['primaryTherapistName'];
  $primaryTherapistEmail = $_POST['primaryTherapistEmail'];
  //Employment and Education
  $highestEducation = $_POST['highestEducation'];
  $currentlyEmployed = $_POST['currentlyEmployed'];
  $currentEmploymentMessage = $_POST['currentEmploymentMessage'];
  $vocationalSkills = $_POST['vocationalSkills'];
  //Legalities
  $pastLegalIssues = $_POST['pastLegalIssues'];
  $pastLegalMessage = $_POST['pastLegalMessage'];
  $currentLegalIssues = $_POST['currentLegalIssues'];
  $currentLegalMessage = $_POST['currentLegalMessage'];
  //insurance information
  $insuranceProvider = $_POST['insuranceProvider'];
  $insuranceTelephone = $_POST['insuranceTelephone'];
  $insuranceID = $_POST['insuranceID'];
  $insuranceGroup = $_POST['insuranceGroup'];
  $primaryInsured = $_POST['primaryInsured'];
  $primaryInsuredRelationship = $_POST['primaryInsuredRelationship'];


  $headers = "From: www.thelillypadpb.com\r\n";
  $headers .= "MIME-Version: 1.0\r\n";
  $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

  $emailMessage = 
    "<h2>Lilly Pad Housing Application</h2>
    <h3>Basic Information</h3>
    <table>
    <tr><td>Full Name: $fullName</td></tr>
    <tr><td>Date of Bith: $dob</td></tr>
    <tr><td>Street Address: $street</td></tr>
    <tr><td>Apt/Suite #: $apt</td></tr>
    <tr><td>City: $city</td></tr>
    <tr><td>State: $state</td></tr>
    <tr><td>Zip: $zip</td></tr>
    <tr><td>Primary Phone: $clientPhone</td></tr>
    <tr><td>Email: $clientEmail</td></tr>
    </table>
    <br>
  <h3>Emergency Contact</h3>
    <table>
    <tr><td>Full Name: $emergencyContact</td></tr>
    <tr><td>Relationship: $emergencyRelationship</td></tr>
    <tr><td>Primary Phone: $emergencyPhone</td></tr>
    <tr><td>Email: $emergencyEmail</td></tr>
    </table>
    <br>
  <h3>Drug & Alcohol History</h3>
    <table>
    <tr><td>Primary Substance of Choice: $primarySubstance</td></tr>
    <tr><td>Secondary Substance of Choice: $secondarySubstance</td></tr>
    <tr><td>Date Last Used: $primaryDate</td></tr>
    <tr><td>Months/Years of Use: $primaryPeriod</td></tr>
    <tr><td>Are any family members in active addiction or recovery from: $familyAddiction</td></tr>
    <tr><td>If Yes, Please Explain: $familyAddictionMessage</td></tr>
    <tr><td>Additional Information Regarding Your Drug/Alcohol Use (Optional): $abuseSummary</td></tr>
    </table>
    <br>
    <h3>Psych & Medical History</h3>
    <table>
    <tr><td>Allergies: $allergies</td></tr>
    <tr><td>Current Medication List: $currentMedications</td></tr>
    <tr><td>Prior Treatment Centers: $priorFacilities</td></tr>
    <tr><td>Have you ever been treated for Psych/Mental Health Condition: $hadPsychTreatment</td></tr>
    <tr><td>If Yes, Please Provide Dates and Explain: $psychHistoryMessage</td></tr>
    <tr><td>Do you believe you have an eating disorder: $haveEatingDisorder</td></tr>
    <tr><td>Have history of Binging, Purging, Laxative/Diuretic Use: $eatingDisorderHistory</td></tr>
    <tr><td>If Yes, Please Explain (Specify if active): $eatingDisorderHistoryMessage</td></tr>
    <tr><td>Have you ever been treated for an eating disorder: $treatedEatingDisorder</td></tr>
    <tr><td>If Yes, Please Explain: $treatedEatingDisorderMessage</td></tr>
    </table>
    <br>
    <h3>Current Treatment Center</h3>
    <table>
    <tr><td>Currently In Treatment: $inTreatmentRadio</td></tr>
    <tr><td>If Not, Where Do You Currently Reside: $currentResidence</td></tr>
    <tr><td>Current Facility Name: $currentFacilityName</td></tr>
    <tr><td>Expected Discharge Date: $currentFacilityDCDate</td></tr>
    <tr><td>Primary Therapist's Name: $primaryTherapistName</td></tr>
    <tr><td>Primary Therapist's Phone #: $primaryTherapistTelephone</td></tr>
    <tr><td>Primary Therapist's Email: $primaryTherapistEmail</td></tr>
    </table>
    <br>
    <h3>Education & Employment</h3>
    <table>
    <tr><td>Highest Level Of Education: $highestEducation</td></tr>
    <tr><td>Are You Currently Employed: $currentlyEmployed</td></tr>
    <tr><td>If Yes, Please Explain (Specify if Expected to Return to Work): $currentEmploymentMessage</td></tr>
    <tr><td>List Any Vocational Skills: $vocationalSkills</td></tr>
    </table>
    <br>
    <h3>Legal Obligations</h3>
    <table>
    <tr><td>Do you have any past legal issues: $pastLegalIssues</td></tr>
    <tr><td>If Yes, Please List Convictions and Dates: $pastLegalMessage</td></tr>
    <tr><td>Do you have any current legal obligations: $currentLegalIssues</td></tr>
    <tr><td>If yes, please Explain (Include Court Dates and Requirements): $currentLegalMessage</td></tr>
    </table>
    <br>
    <h3>Insurance Information</h3>
    <table>
    <tr><td>Insurance Provider: $insuranceProvider</td></tr>
    <tr><td>Insurance Telephone #: $insuranceTelephone</td></tr>
    <tr><td>Insurance ID #: $insuranceID</td></tr>
    <tr><td>Insurance Group: $insuranceGroup</td></tr>
    <tr><td>Primary Insured: $primaryInsured</td></tr>
    <tr><td>Primary Insured Relationship: $primaryInsuredRelationship</td></tr>
    </table>
    <br>";
  $result = mail("jjohnson@ambrosiatc.com,allysonm@me.com,allyson@thelillypad.org", "Lilly Pad WPB Housing Application", $emailMessage, $headers);
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="KB Software Solutions - Thank you for your message, we appreciate your business.">
    <meta name="author" content="KB Software Solutions">
    <meta name="ROBOTS" content="NOINDEX, NOFOLLOW">
    <link rel="icon" type="image/x-icon" href="../img/kb-favicon.png" />
    <title>The Lilly Pad | Application Received</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/small-business.css" rel="stylesheet">
    <link href="../css/modern-business.css" rel="stylesheet">
  </head>
  <body>
    <!-- Navigation -->
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
        </div>
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
    <div class="container">
      <div class="row">
        <div class="col-lg-5 col-sm-6">
          <hr class="section-heading-spacer">
          <div class="clearfix"></div>
          <h1 class="section-heading text-center">Application Received</h1>
          <hr class="paragraph-divider">
          <h3 class="text-center">Thank you for you interest in The Lilly Pad</h3>
          <h3 class="text-center">A staff member will review your application and contact you shortly</h3>
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
              <li class="footer-menu-divider">&sdot;</li>

            </ul>
            <p class="copyright text-muted medium text-center">Copyright &copy; The Lilly Pad West Palm Beach, All Rights Reserved</p>
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