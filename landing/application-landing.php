<?php
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
$emergencyStreet = $_POST['emergencyStreet'];
$emergencyApt = $_POST['emergencyApt'];
$emergencyCity = $_POST['emergencyCity']; 
$emergencyState = $_POST['emergencyState'];
$emergencyZip = $_POST['emergencyZip'];
$emergencyPhone = $_POST['emergencyPhone'];
$emergencyEmail = $_POST['emergencyEmail'];
//Drug/Alcohol History
$primarySubstance = $_POST['primarySubstance'];
$primaryDate = $_POST['primaryDate'];
$primaryFrequency = $_POST['primaryFrequency'];
$primaryPeriod = $_POST['primaryPeriod'];
$secondarySubstance = $_POST['secondarySubstance'];
$secondaryDate = $_POST['secondaryDate'];
$secondaryFrequency = $_POST['secondaryFrequency'];
$secondaryPeriod = $_POST['secondaryPeriod'];
$familyAddiction = $_POST['familyAddiction'];
$familyAddictionMessage = $_POST['familyAddictionMessage'];
$abuseSummary = $_POST['abuseSummaryMessage'];
//Psych and Medical History
$allergies = $_POST['allergies'];
$takingMedications = $_POST['takingMedicationRadio'];
$prescribingPhysician = $_POST['prescriber'];
$currentMedications = $_POST['currentMedicationList'];
$inTreatment = $_POST['inTreatmentRadio'];
$currentFacility = $_POST['currentFacility'];
$priorFacilities = $_POST['priorFacilityList'];
$permissionToContactFacility = $_POST['canContactFacilities'];
$permissionToContactExplanation = $_POST['whyNoContactFacility'];
$hadPsychTreatment = $_POST['hadPsychTreatment'];
$psychHistoryMessage = $_POST['psychHistoryMessage'];
$height = $_POST['height'];
$weight = $_POST['weight'];
$oldWeight = $_POST['oldWeight'];
$haveEatingDisorder = $_POST['haveEatingDisorder'];
$eatingDisorderHistory = $_POST['eatingDisorderHistory'];
$eatingDisorderHistoryMessage = $_POST['eatingDisorderHistoryMessage'];
$treatedEatingDisorder = $_POST['treatedEatingDisorder'];
$treatedEatingDisorderMessage = $_POST['treatedEatingDisorderMessage'];
//Current Treatment Center
$currentFacilityName = $_POST['currentFacilityName'];
$currentFacilityDCDate = $_POST['currentFacilityDCDate'];
$primaryTherapistName = $_POST['primaryTherapistName'];
$primaryTherapistTelephone = $_POST['primaryTherapistName'];
$primaryTherapistEmail = $_POST['primaryTherapistEmail'];
//Employment and Education
$highestEducation = $_POST['highestEducation'];
$educationInstitution = $_POST['educationInstitution'];
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


$headers = "From: www.wpblillypad.com\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

$emailMessage = 
  "<h2>Lilly Pad Housing Application</h2>
    <h3>Basic Information</h3>
    <table>
    <tr>Full Name: $fullName</tr>
    <tr>Date of Bith: $dob</tr>
    <tr>Street Address: $street</tr>
    <tr>Apt/Suite #: $apt</tr>
    <tr>City: $city</tr>
    <tr>State: $state</tr>
    <tr>Zip: $zip</tr>
    <tr>Primary Phone: $clientPhone</tr>
    <tr>Email: $clientEmail</tr>
    </table>
    <br>
  <h3>Emergency Contact</h3>
    <table>
    <tr>Full Name: $emergencyContact</tr>
    <tr>Relationship: $emergencyRelationship</tr>
    <tr>Street Address: $emergencyStreet</tr>
    <tr>Apt/Suite #: $emergencyApt</tr>
    <tr>City: $emergencyCity</tr>
    <tr>State: $emergencyState</tr>
    <tr>Zip: $emergencyZip</tr>
    <tr>Primary Phone: $emergencyPhone</tr>
    <tr>Email: $emergencyEmail</tr>
    </table>
    <br>
  <h3>Drug & Alcohol History</h3>
    <table>
    <tr>Primary Substance of Choice: $primarySubstance</tr>
    <tr>Date Last Used: $primaryDate</tr>
    <tr>Frequency of Use: $primaryFrequency</tr>
    <tr>Months/Years of Use: $primaryPeriod</tr>
    <tr>Secondary Substance of Choice: $secondarySubstance</tr>
    <tr>Date Last Used: $secondaryDate</tr>
    <tr>Frequency of Use: $secondaryFrequency</tr>
    <tr>Months/Years of Use: $secondaryPeriod</tr>
    <tr>Are any family members in active addiction or recovery from: $familyAddiction</tr>
    <tr>If Yes, Please Explain: $familyAddictionMessage</tr>
    <tr>Additional Information Regarding Your Drug/Alcohol Use (Optional): $abuseSummary</tr>
    </table>
    <br>
    <h3>Psych & Medical History</h3>
    <table>
    <tr>Allergies: $allergies</tr>
    <tr>Currently Taking Medications: $takingMedications</tr>
    <tr>Prescribing Physician: $prescribingPhysician</tr>
    <tr>Current Medication List: $currentMedications</tr>
    <tr>Currently in Treatment: $inTreatment</tr>
    <tr>Current Treatment Center: $currentFacility</tr>
    <tr>Prior Treatment Centers: $priorFacilities</tr>
    <tr>May we contact current facility: $permissionToContactFacility</tr>
    <tr>If not, then why: $permissionToContactExplanation</tr>
    <tr>Have you ever been treated for Psych/Mental Health Condition: $hadPsychTreatment</tr>
    <tr>If Yes, Please Provide Dates and Explain: $psychHistoryMessage</tr>
    <tr>Height: $height</tr>
    <tr>Weight: $weight</tr>
    <tr>Weight Last Year: $oldWeight</tr>
    <tr>Do you believe you have an eating disorder: $haveEatingDisorder</tr>
    <tr>Have history of Binging, Purging, Laxative/Diuretic Use: $eatingDisorderHistory</tr>
    <tr>If Yes, Please Explain (Specify if active): $eatingDisorderHistoryMessage</tr>
    <tr>Have you ever been treated for an eating disorder: $treatedEatingDisorder</tr>
    <tr>If Yes, Please Explain: $treatedEatingDisorderMessage</tr>
    </table>
    <br>
    <h3>Current Treatment Center</h3>
    <table>
    <tr>Current Facility Name: $currentFacilityName</tr>
    <tr>Expected Discharge Date: $currentFacilityDCDate</tr>
    <tr>Primary Therapist's Name: $primaryTherapistName</tr>
    <tr>Primary Therapist's Phone #: $primaryTherapistTelephone</tr>
    <tr>Primary Therapist's Email: $primaryTherapistEmail</tr>
    </table>
    <br>
    <h3>Education & Employment</h3>
    <table>
    <tr>Highest Level Of Education: $highestEducation</tr>
    <tr>Expected Discharge Date: $currentFacilityDCDate</tr>
    <tr>Primary Therapist's Name: $primaryTherapistName</tr>
    <tr>Primary Therapist's Phone #: $primaryTherapistTelephone</tr>
    <tr>Primary Therapist's Email: $primaryTherapistEmail</tr>
    </table>
    <br>
    <h3>Legal Obligations</h3>
    <table>
    <tr>Do you have any past legal issues: $pastLegalIssues</tr>
    <tr>If Yes, Please List Convictions and Dates: $pastLegalMessage</tr>
    <tr>Do you have any current legal obligations: $currentLegalIssues</tr>
    <tr>If yes, please Explain (Include Court Dates and Requirements): $currentLegalMessage</tr>
    </table>
    <br>
    <h3>Insurance Information</h3>
    <table>
    <tr>Insurance Provider: $insuranceProvider</tr>
    <tr>Insurance Telephone #: $insuranceTelephone</tr>
    <tr>Insurance ID #: $insuranceID;</tr>
    <tr>Insurance Group: $insuranceGroup</tr>
    <tr>Primary Insured: $primaryInsured</tr>
    <tr>Primary Insured Relationship: $primaryInsuredRelationship</tr>
    </table>
    <br>";
$result = mail("jjohnson@ambrosiatc.com", "Lilly Pad Housing Application", $emailMessage, $headers);
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
    <?php require_once('../templates/navbar.html'); ?>
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
            <ul class="list-inline">
              <li>
                <a href="../index.php">Home</a>
              </li>
              <li class="footer-menu-divider">&sdot;</li>
              <li>
                <a href="../index.php#home-page-1">About</a>
              </li>
              <li class="footer-menu-divider">&sdot;</li>
              <li>
                <a href="properties.php">Properties</a>
              </li>
              <li class="footer-menu-divider">&sdot;</li>
              <li>
                <a href="application.php">Application</a>
              </li>
              <li class="footer-menu-divider">&sdot;</li>
              <li>
                <a target="_blank" href="https://lillypad.gocashbox.com/">Pay Online</a>
              </li>
              <li class="footer-menu-divider">&sdot;</li>
              <li>
                <a href="contact.php">Contact</a>
              </li>
              <li class="footer-menu-divider">&sdot;</li>

            </ul>
            <p class="copyright text-muted medium">Copyright &copy; The Lilly Pad West Palm Beach, All Rights Reserved</p>
          </div>
          <div class="col-lg-5">
            <p class="pull-right kb-footer-text">
              <img src="../img/kb-logo-v3-75x60.png" alt="KB Software Solutions Web Design">
              <a href="http://www.kbsoftwaresolutions.com" target="_blank">Website Development by KB Software Solutions</a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <script src="../js/jquery.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script>
    $(function(){
      $('.fadein img:gt(0)').hide();
      setInterval(function(){
        $('.fadein :first-child').fadeOut()
        .next('img').fadeIn()
        .end().appendTo('.fadein');}, 
                  5000);
    });
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