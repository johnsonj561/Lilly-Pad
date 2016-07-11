<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="The Lilly Pad West Palm Beach - Application for Women's Transitional Living and Housing">
    <meta name="author" content="The Lilly Pad">
    <meta name="ROBOTS" content="INDEX, FOLLOW">
    <link rel="icon" type="image/x-icon" href="../img/lily-pad-favicon-32x32.png" />
    <title>The Lilly Pad | Housing Application</title>
    <link rel="stylesheet" href="/font-awesome/css/font-awesome.min.css">    
    <link href="/css/lilly-pad-main.min.css" rel="stylesheet">
    <script src="https://apis.google.com/js/platform.js" async defer></script>
  </head>
  <body>
    <a name="#top"></a>
    <?php include_once('../templates/analyticstracking.php'); ?>
    <?php require_once('../templates/facebook-google-like-script.html'); ?>
    <?php require_once('../templates/navbar.html'); ?>
    <div class="container">
      <div class="col-xs-12 social-media-like-buttons">
        <div class="fb-like pull-right" data-href="https://www.facebook.com/The-Lilly-Pad-Palm-Beach-300926496715593/?fref=ts" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>
        <div class="pull-right g-plus-button">
          <div class="g-plusone"></div>
        </div>
      </div>
      <div class="col-lg-12">
        <div>
          <img class="img-responsive spiritual-tools-mssg" src="../img/spiritual-tools-message-v3.png" alt="Spriritual Tools for Recovery"/>
        </div>
        <form role="form" action="../landing/application-landing.php" method = "post" 
              onsubmit = "return onApplicationSubmit()">
          <div class="form-subject row">
            <div class="col-lg-2">
              <h3 class="form-header">Basic Information</h3>
            </div>
            <div class="col-lg-8 form-subject-border">
              <div class="col-lg-8">
                <label class="pull-left">Full Name</label>
                <input autofocus type="text" class="form-control" name = "fullName" id = "fullName" required>
              </div>
              <div class="col-lg-4">
                <label class="pull-left">Date of Birth</label>
                <input type="date" class="form-control" name = "dob" id = "dob" required>
              </div>
              <div class="col-lg-8">
                <label class="pull-left">Street Address</label>
                <input type="text" class="form-control" name = "street" id = "street" required>
              </div>
              <div class="col-lg-4">
                <label class="pull-left">Apt/Suite #</label>
                <input type="text" class="form-control" name = "apt" id = "apt">
              </div>
              <div class="col-lg-5">
                <label class="pull-left">City</label>
                <input type="text" class="form-control" name = "city" id = "city" required>
              </div>
              <div class="col-lg-3">
                <label class="pull-left">State</label>
                <input type="text" class="form-control" name = "state" id = "state" required>
              </div>
              <div class="col-lg-4">
                <label class="pull-left">Zip</label>
                <input type="text" class="form-control" name = "zip" id = "zip" required>
              </div>
              <div class="col-lg-6">
                <label class="pull-left">Primary Phone #</label>
                <input type="text" class="form-control" name = "clientPhone" id = "clientPhone" required>
              </div>
              <div class="col-lg-6">
                <label class="pull-left">Email Address</label>
                <input type="text" class="form-control" name = "clientEmail" id = "clientEmail">
              </div>
            </div>
            <div class="col-lg-2 text-center">
              <a href="Lilly%20Pad%20Housing%20Application.pdf" target="_blank" class="btn btn-primary pc-only">
                <span class="glyphicon glyphicon-print"></span> Print Application</a>
            </div>
          </div>
          <div class="form-subject row">
            <div class="col-lg-2">
              <h3 class="form-header">Emergency Contact</h3>
            </div>
            <div class="col-lg-8 form-subject-border">
              <div class="col-lg-6">
                <label class="pull-left">Full Name</label>
                <input type="text" class="form-control" name = "emergencyContact" id = "emergencyContact"/>
              </div>
              <div class="form-group col-lg-6">
                <label class="pull-left">Relationship</label>
                <input type="text" class="form-control" name = "emergencyRelationship" id = "emergencyRelationship"/>
              </div>
              <div class="col-lg-6">
                <label class="pull-left">Primary Phone #</label>
                <input type="text" class="form-control" name = "emergencyPhone" id = "emergencyPhone"/>
              </div>
              <div class="form-group col-lg-6">
                <label class="pull-left">Email Address</label>
                <input type="text" class="form-control" name = "emergencyEmail" id = "emergencyEmail"/>
              </div>
            </div>
            <div class="col-lg-2">         
            </div>
          </div>
          <div class="form-subject row">
            <div class="col-lg-2">
              <h3 class="form-header">Drug &amp; Alcohol History</h3>
            </div>
            <div class="col-lg-8 form-subject-border">
              <div class="col-lg-6">
                <label class="pull-left">Primary Substance of Choice</label>
                <input type="text" class="form-control" name = "primarySubstance" id = "primarySubstance" required/>
              </div>
              <div class="col-lg-6">
                <label class="pull-left">Secondary Substance of Choice</label>
                <input type="text" class="form-control" name = "secondarySubstance" id = "secondarySubstance"/>
              </div>
              <div class="form-group col-lg-6">
                <label class="pull-left">Date Last Used</label>
                <input type="date" class="form-control" name = "primaryDate" id = "primaryDate"/>
              </div>
              <div class="form-group col-lg-6">
                <label class="pull-left">Months/Years of Use</label>
                <select class="form-control" name="primaryPeriod">
                  <option selected value="0">Select</option>
                  <option value="5+ Years">5+ Years</option>
                  <option value="3-4 Years">3-4 Years</option>
                  <option value="1-2 Years">1-2 Years</option>
                  <option value="6 - 12 Months">6 - 12 Months</option>
                  <option value="Less Than 6 Months">Less Than 6 Months</option>
                </select>
              </div>
              <br>
              <div class="form-group col-lg-12">
                <label>Are Any Family Members In Active Addiction or Recovery From</label>
              </div>
              <div class="col-lg-3">
                <input type="radio" class="form-group" name="familyAddiction" value="Yes" checked required/>
                <label class="radio-label">Yes</label>
              </div>
              <div class="col-lg-3">
                <input type="radio" class="form-group" name="familyAddiction" value="No"/>
                <label class="radio-label">No</label>
              </div>
              <div class="col-lg-6">
              </div>
              <div class="form-group col-lg-12">
                <label>If Yes, Please Explain</label>
                <textarea class="form-control" rows="3" name = "familyAddictionMessage" id = "familyAddictionMessage"></textarea>
              </div>
            </div>
          </div>
          <div class="form-subject row">
            <div class="col-lg-2">
              <h3 class="form-header">Psych &amp; Medical History</h3>
            </div>
            <div class="col-lg-8 form-subject-border">
              <div class="form-group col-lg-12">
                <label class="pull-left">List Allergies</label>
                <input type="text" class="form-control" name = "allergies" id = "allergies" required/>
              </div>
              <div class="form-group col-lg-12">
                <label>List Current Medications (If Applicapable)</label>
                <textarea class="form-control" rows="4" name = "currentMedicationList" id = "currentMedicationList"></textarea>
              </div>
              <div class="form-group col-lg-12">
                <label>List Prior Substance Abuse Facilities (If Applicable)</label>
                <textarea class="form-control" rows="4" name = "priorFacilityList" id = "priorFacilityList"></textarea>
              </div>
              <div class="col-lg-12">
                <label class="pull-left">Have You Ever Been Treated for Psychiatric/Mental Health Condition</label>
              </div>
              <div class="col-lg-3">
                <input type="radio" class="form-group" name="hadPsychTreatment" value="yes" checked required/>
                <label class="radio-label">Yes</label>
              </div>
              <div class="col-lg-3">
                <input type="radio" class="form-group" name="hadPsychTreatment" value="no"/>
                <label class="radio-label">No</label>
              </div>
              <div class="col-lg-6">
                <!-- 4 col spacer -->
              </div>
              <div class="form-group col-lg-12">
                <label>If Yes, Please Provide Dates and Explain</label>
                <textarea class="form-control" rows="3" name = "psychHistoryMessage" id = "psychHistorymessage"></textarea>
              </div>
              <div class="col-lg-12">
                <label class="pull-left">Do You Believe You Have an Eating Disorder</label>
              </div>
              <div class="col-lg-3">
                <input type="radio" class="form-group" name="haveEatingDisorder" value="Yes" checked required/>
                <label class="radio-label">Yes</label>
              </div>
              <div class="col-lg-3">
                <input type="radio" class="form-group" name="haveEatingDisorder" value="No"/>
                <label class="radio-label">No</label>
              </div>
              <div class="col-lg-6">
              </div>
              <div class="col-lg-12">
                <label class="pull-left">Have History of Binging, Purging, Laxative, or Diuretic Use</label>
              </div>
              <div class="col-lg-3">
                <input type="radio" class="form-group" name="eatingDisorderHistory" value="Yes" checked required/>
                <label class="radio-label">Yes</label>
              </div>
              <div class="col-lg-3">
                <input type="radio" class="form-group" name="eatingDisorderHistory" value="No"/>
                <label class="radio-label">No</label>
              </div>
              <div class="col-lg-6">
                <!-- 6 col spacer -->
              </div>
              <div class="form-group col-lg-12">
                <label>If Yes, Please Explain (Specify If Active)</label>
                <textarea class="form-control" rows="3" name = "eatingDisorderHistoryMessage" id = "eatingDisorderHistoryMessage"></textarea>
              </div>
              <div class="col-lg-12">
                <label class="pull-left">Have You Ever Been Treated for an Eating Disorder</label>
              </div>
              <div class="col-lg-3">
                <input type="radio" class="form-group" name="treatedEatingDisorder" value="Yes" checked required/>
                <label class="radio-label">Yes</label>
              </div>
              <div class="col-lg-3">
                <input type="radio" class="form-group" name="treatedEatingDisorder" value="No"/>
                <label class="radio-label">No</label>
              </div>
              <div class="col-lg-6">
                <!-- 6 col spacer -->
              </div>
              <div class="form-group col-lg-12">
                <label>If Yes, Please Explain</label>
                <textarea class="form-control" rows="3" name = "treatedEatingDisorderMessage" id = "treatedEatingDisorderMessage"></textarea>
              </div>
            </div>
            <div class="col-lg-2">
            </div>
          </div>
          <div class="form-subject row">
            <div class="col-lg-2">
              <h3 class="row form-header">Current Treatment</h3>
            </div>
            <div class="col-lg-8 form-subject-border">
              <div class="col-lg-6">
                <label class="pull-left">Are you Currently in Treatment?</label>
              </div>
              <div class="col-lg-6">
                <!-- 6 col spacer -->
              </div>
              <div class="col-lg-3">
                <input type="radio" class="form-group" name="inTreatmentRadio" value="yes" checked required/>
                <label class="radio-label">Yes</label>
              </div>
              <div class="col-lg-3">
                <input type="radio" class="form-group" name="inTreatmentRadio" value="no"/>
                <label class="radio-label">No</label>
              </div>
              <div class="col-lg-6">
                <!-- 6 col spacer -->
              </div>
              <div class="form-group col-lg-12">
                <label>If Not, Where Do You Currently Reside?</label>
                <input type="text" class="form-control" name = "currentResidence" id = "currentResidence"/>
              </div>
              <div class="form-group col-lg-6">
                <label>Name of Current Facility (If Applicable)</label>
                <input type="text" class="form-control" name = "currentFacilityName" id = "currentFacilityName"/>
              </div>
              <div class="form-group col-lg-3">
              </div>
              <div class="form-group col-lg-3">
                <label class="pull-left">Expected DC Date</label>
                <input type="date" class="form-control" name = "currentFacilityDCDate" id = "currentFacilityDCDate"/>
              </div>
              <div class="form-group col-lg-6">
                <label>Therapist Name</label>
                <input type="text" class="form-control" name = "primaryTherapistName" id = "primaryTherapistName"/>
              </div>
              <div class="form-group col-lg-3">
                <label>Therapist Telephone #</label>
                <input type="tel" class="form-control" name = "primaryTherapistTelephone" id = "primaryTherapistTelephone"/>
              </div>
              <div class="form-group col-lg-3">
                <label>Therapist Email</label>
                <input type="email" class="form-control" name = "primaryTherapistEmail" id = "primaryTherapistEmail"/>
              </div>
            </div>
            <div class="col-lg-2">
            </div>
          </div> 
          <div class="form-subject row">
            <div class="col-lg-2">
              <h3 class="form-header">Education &amp; Employment</h3>
            </div>
            <div class="col-lg-8 form-subject-border">
              <div class="col-lg-4">
                <label class="pull-left">Highest Level Of Education</label>
                <select class="form-control" name="highestEducation" required>
                  <option selected value="">Select</option>
                  <option value="GED">GED</option>
                  <option value="High School Graduate">High School Graduate</option>
                  <option value="Some College">Some College</option>
                  <option value="Associates">Associate Degree</option>
                  <option value="Bachelor">Bachelor Degree</option>
                  <option value="Master">Mater's Degree</option>
                  <option value="None of Above">None of the Above</option>
                </select>
              </div>
              <div class="form-group col-lg-8">
              </div>
              <br>
              <div class="col-lg-12">
                <label class="pull-left">Are You Currently Employed</label>
              </div>
              <div class="col-lg-3">
                <input type="radio" class="form-group" name="currentlyEmployed" value="Yes" checked required/>
                <label class="radio-label">Yes</label>
              </div>
              <div class="col-lg-3">
                <input type="radio" class="form-group" name="currentlyEmployed" value="No"/>
                <label class="radio-label">No</label>
              </div>
              <div class="col-lg-6">
              </div>
              <div class="form-group col-lg-12">
                <label>If Yes, Please Explain (Specify if Expected to Return to Work)</label>
                <textarea class="form-control" rows="3" name = "currentEmploymentMessage" id = "currentEmploymentMessage"></textarea>
              </div>
              <div class="form-group col-lg-12">
                <label>List Any Vocational Skills</label>
                <input type="text" class="form-control" name = "vocationalSkills" id = "vocationalSkills"/>
              </div>
            </div>
            <div class="col-lg-2">
            </div>
          </div>
          <div class="form-subject row">
            <div class="col-lg-2">
              <h3 class="row form-header">Legal Obligations</h3>
            </div>
            <div class="col-lg-8 form-subject-border">
              <div class="col-lg-12">
                <label class="pull-left">Do You Have Any Past Legal Issues</label>
              </div>
              <div class="col-lg-3">
                <input type="radio" class="form-group" name="pastLegalIssues" value="Yes" checked required/>
                <label class="radio-label">Yes</label>
              </div>
              <div class="col-lg-3">
                <input type="radio" class="form-group" name="pastLegalIssues" value="No"/>
                <label class="radio-label">No</label>
              </div>
              <div class="col-lg-6">
                <!-- 6 col spacer -->
              </div>
              <div class="form-group col-lg-12">
                <label>If Yes, Please List Convictions and Dates</label>
                <textarea class="form-control" rows="3" name = "pastLegalMessage" id = "pastLegalMessage"></textarea>
              </div>
              <div class="col-lg-12">
                <label class="pull-left">Do You Have Any Current Legal Obligations</label>
              </div>
              <div class="col-lg-3">
                <input type="radio" class="form-group" name="currentLegalIssues" value="Yes" checked required/>
                <label class="radio-label">Yes</label>
              </div>
              <div class="col-lg-3">
                <input type="radio" class="form-group" name="currentLegalIssues" value="No"/>
                <label class="radio-label">No</label>
              </div>
              <div class="col-lg-6">
              </div>
              <div class="form-group col-lg-12">
                <label>If Yes, Please Explain (Include Court Dates and Requirements)</label>
                <textarea class="form-control" rows="3" name = "currentLegalMessage" id = "currentLegalMessage"></textarea>
              </div>
            </div>
            <div class="col-lg-2">
            </div>
          </div>
          <div class="form-subject row">
            <div class="col-lg-2">
              <h3 class="form-header">Insurance Information</h3>
            </div>
            <div class="col-lg-8 form-subject-border">
              <div class="col-lg-6">
                <label class="pull-left">Insurance Provider</label>
                <input type="text" class="form-control" name = "insuranceProvider" id = "insuranceProvider"/>
              </div>
              <div class="form-group col-lg-6">
                <label class="pull-left">Insurance Phone #</label>
                <input type="tel" class="form-control" name = "insuranceTelephone" id = "insuranceTelephone"/>
              </div>
              <div class="col-lg-6">
                <label class="pull-left">ID #</label>
                <input type="text" class="form-control" name = "insuranceID" id = "insuranceID"/>
              </div>
              <div class="form-group col-lg-6">
                <label class="pull-left">Group #</label>
                <input type="text" class="form-control" name = "insuranceGroup" id = "insuranceGroup"/>
              </div>
              <div class="col-lg-6">
                <label class="pull-left">Primary Insured Name</label>
                <input type="text" class="form-control" name = "primaryInsured" id = "primaryInsured"/>
              </div>
              <div class="form-group col-lg-6">
                <label class="pull-left">Relationship</label>
                <input type="text" class="form-control" name = "primaryInsuredRelationship" id = "primaryInsuredRelationship"/>
              </div>
            </div>
            <div class="col-lg-2">
            </div>
          </div>
          <div class="text-center col-lg-12 submit-button">
            <button type="submit" name="submit" class="btn btn-primary"><span class="glyphicon glyphicon-send"></span> Submit Application</button>
          </div>
        </form>
      </div>
      <p class="to-top pull-left"><a href="#top">Back To Top</a></p>
    </div>
    <?php 
require_once('../templates/social-footer.html');
require_once('../templates/footer.html'); ?>
  </body>
</html>