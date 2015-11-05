<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Housing Application</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/modern-business.css" rel="stylesheet">
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <script type="text/javascript">var switchTo5x=true;</script>
    <script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
    <script type="text/javascript" src="http://s.sharethis.com/loader.js"></script>
  </head>
  <body>
    <?php require_once('../templates/navbar.html'); ?>
    <!-- Page Content -->
    <div class="container">
      <div class="col-lg-12">
        <h1 class="intro-text text-center">Housing Application</h1>
        <h3 class="text-center">Help Us Get to Know You - Please Don't Leave Any Fields Blank</h3>
        <hr>
        <div class="sign-in-border">
          <form role="form" action="../php/process-registration.php" method = "post" 
                onsubmit = "return onRegistrationSubmit()">
            <!-- SUBJECT -->
            <div class="form-subject col-lg-12">
              <div class="row">
                <h3 class="row form-header">Basic Information</h3>
              </div>
              <div class="row">
                <div class="col-lg-5">
                  <label class="pull-left">Full name</label>
                  <input autofocus type="text" class="form-control" name = "firstName" id = "firstName" required>
                </div>
                <div class="form-group col-lg-3">
                  <label class="pull-left">Date of Birth</label>
                  <input type="date" class="form-control" name = "dob" id = "dob" required>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6">
                  <label class="pull-left">Street Address</label>
                  <input type="text" class="form-control" name = "street" id = "street" required>
                </div>
                <div class="form-group col-lg-2">
                  <label class="pull-left">Apt/Suite</label>
                  <input type="text" class="form-control" name = "apt" id = "apt" required>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-3">
                  <label class="pull-left">City</label>
                  <input type="text" class="form-control" name = "city" id = "city" required>
                </div>
                <div class="form-group col-lg-2">
                  <label class="pull-left">State</label>
                  <input type="text" class="form-control" name = "state" id = "state" required>
                </div>
                <div class="form-group col-lg-3">
                  <label class="pull-left">Zip</label>
                  <input type="text" class="form-control" name = "zip" id = "zip" required>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-4">
                  <label class="pull-left">Primary Phone #</label>
                  <input type="text" class="form-control" name = "firstName" id = "firstName" required>
                </div>
                <div class="form-group col-lg-4">
                  <label class="pull-left">Email</label>
                  <input type="text" class="form-control" name = "email" id = "email">
                </div>
              </div>
            </div>
            <!-- SUBJECT -->
            <div class="form-subject col-lg-12">
              <div class="row">
                <h3 class="row form-header">Emergency Contact</h3>
              </div>
              <div class="row">
                <div class="col-lg-5">
                  <label class="pull-left">Full name</label>
                  <input type="text" class="form-control" name = "emergencyContact" id = "emergencyContact">
                </div>
                <div class="form-group col-lg-3">
                  <label class="pull-left">Relationship</label>
                  <input type="text" class="form-control" name = "emergencyRelationship" id = "emergencyRelationship">
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6">
                  <label class="pull-left">Street Address</label>
                  <input type="text" class="form-control" name = "emergencyStreet" id = "emergencStreet">
                </div>
                <div class="form-group col-lg-2">
                  <label class="pull-left">Apt/Suite</label>
                  <input type="text" class="form-control" name = "emergencyApt" id = "emergencyApt">
                </div>
              </div>
              <div class="row">
                <div class="col-lg-3">
                  <label class="pull-left">City</label>
                  <input type="text" class="form-control" name = "emergencyCity" id = "emergencyCity">
                </div>
                <div class="form-group col-lg-2">
                  <label class="pull-left">State</label>
                  <input type="text" class="form-control" name = "emergenyState" id = "emergencyState">
                </div>
                <div class="form-group col-lg-3">
                  <label class="pull-left">Zip</label>
                  <input type="text" class="form-control" name = "emergencyZip" id = "emergencyZip">
                </div>
              </div>
              <div class="row">
                <div class="col-lg-4">
                  <label class="pull-left">Primary Phone #</label>
                  <input type="text" class="form-control" name = "emergencyPhone" id = "emergencyPhone">
                </div>
                <div class="form-group col-lg-4">
                  <label class="pull-left">Email</label>
                  <input type="text" class="form-control" name = "emergencyEmail" id = "emergencyEmail">
                </div>
              </div>
            </div>
            <!-- SUBJECT -->
            <div class="form-subject col-lg-12">
              <div class="row">
                <h3 class="row form-header">Drug/Alcohol Use Summary</h3>
              </div>
              <div class="row">
                <div class="col-lg-4">
                  <label class="pull-left">Primary Substance of Choice</label>
                  <input type="text" class="form-control" name = "primarySubstance" id = "primarySubstance" required>
                </div>
                <div class="form-group col-lg-3">
                  <label class="pull-left">Date Last Used</label>
                  <input type="date" class="form-control" name = "primaryDate" id = "primaryDate" required>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-4">
                  <label class="pull-left">Frequency of Use</label>
                  <select class="form-control" name="primaryFrequency" form="application-form">
                    <option selected value="0">Select</option>
                    <option value="daily">Daily</option>
                    <option value="5-6">5-6 Days a Week</option>
                    <option value="3-4">3-4 Days a Week</option>
                    <option value="1-2">1-2 Days a Week</option>
                    <option value="less">Less Then Once a Week</option>
                  </select>
                </div>
                <div class="form-group col-lg-4">
                  <label class="pull-left">Months/Years of Use</label>
                  <select class="form-control" name="primaryPeriod" form="application-form">
                    <option selected value="0">Select</option>
                    <option value="5+">5+ Years</option>
                    <option value="3-4">3-4 Years</option>
                    <option value="1-2">1-2 Years</option>
                    <option value="6m-12m">6 - 12 Months</option>
                    <option value="less">Less Then 6 Months</option>
                  </select>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-lg-4">
                  <label class="pull-left">Secondary Substance of Choice</label>
                  <input type="text" class="form-control" name = "secondarySubstance" id = "secondarySubstance">
                </div>
                <div class="form-group col-lg-3">
                  <label class="pull-left">Date Last Used</label>
                  <input type="date" class="form-control" name = "secondaryDate" id = "secondaryDate" >
                </div>
              </div>
              <div class="row">
                <div class="col-lg-4">
                  <label class="pull-left">Frequency of Use</label>
                  <select class="form-control" name="secondaryFrequency" form="application-form">
                    <option selected value="0">Select</option>
                    <option value="daily">Daily</option>
                    <option value="5-6">5-6 Days a Week</option>
                    <option value="3-4">3-4 Days a Week</option>
                    <option value="1-2">1-2 Days a Week</option>
                    <option value="less">Less Then Once a Week</option>
                  </select>
                </div>
                <div class="form-group col-lg-4">
                  <label class="pull-left">Months/Years of Use</label>
                  <select class="form-control" name="secondaryPeriod" form="application-form">
                    <option selected value="0">Select</option>
                    <option value="5+">5+ Years</option>
                    <option value="3-4">3-4 Years</option>
                    <option value="1-2">1-2 Years</option>
                    <option value="6m-12m">6 - 12 Months</option>
                    <option value="less">Less Then 6 Months</option>
                  </select>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="form-group col-lg-8">
                  <label>Are Any Family Members In Active Addiction or Recovery From</label>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-2">
                  <input type="radio" class="form-group" name="familyAddiction" value="yes" checked required/>
                  <label class="radio-label">Yes</label>
                </div>
                <div class="col-lg-2">
                  <input type="radio" class="form-group" name="familyAddiction" value="no"/><label class="radio-label">No</label>
                </div>
                <div class="col-lg-4">
                  <!-- 4 col spacer -->
                </div>
              </div>
              <div class="row">
                <div class="form-group col-lg-8">
                  <label>If Yes, Please Explain</label>
                  <textarea class="form-control" rows="3" name = "familyAddictionMessage" id = "familyAddictionMessage"></textarea>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="form-group col-lg-8">
                  <label>Additional Information Regarding Your Drug/Alcohol Use (Optional)</label>
                  <textarea class="form-control" rows="3" name = "abuseSummaryMessage" id = "abuseSummaryMessage"></textarea>
                </div>
              </div>
            </div>
            <!-- SUBJECT -->
            <div class="form-subject col-lg-12">
              <div class="row">
                <h3 class="row form-header">Psychiatric/Medical History</h3>
              </div>
              <div class="row">
                <div class="form-group col-lg-6">
                  <label class="pull-left">List Allergies</label>
                  <input type="text" class="form-control" name = "allergies" id = "allergies" required>
                </div>
                <div class="col-lg-2"> 
                </div>
              </div>
              <div class="row">
                <div class="col-lg-4">
                  <label class="pull-left">Currently Taking Medications</label>
                </div>
                <div class="col-lg-4">
                  <!-- 4 col spacer -->
                </div>
              </div>
              <div class="row">
                <div class="col-lg-2">
                  <input type="radio" class="form-group" name="takingMedicationRadio" value="yes" checked required/>
                  <label class="radio-label">Yes</label>
                </div>
                <div class="col-lg-2">
                  <input type="radio" class="form-group" name="takingMedicationRadio" value="no"/><label class="radio-label">No</label>
                </div>
                <div class="col-lg-4">
                  <!-- 4 col spacer -->
                </div>
              </div>
              <div class="row">
                <div class="form-group col-lg-6">
                  <label class="pull-left">Prescribing Physican</label>
                  <input type="text" class="form-control" name = "presciber" id = "prescriber">
                </div>
                <div class="col-lg-2"> 
                </div>
              </div>
              <div class="row">
                <div class="form-group col-lg-8">
                  <label>List Current Medications (If Applicapable)</label>
                  <textarea class="form-control" rows="4" name = "currentMedicationList" id = "currentMedicationList"></textarea>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-lg-4">
                  <label class="pull-left">Are you Currently in Treatment?</label>
                </div>
                <div class="col-lg-4">
                  <!-- 4 col spacer -->
                </div>
              </div>
              <div class="row">
                <div class="col-lg-2">
                  <input type="radio" class="form-group" name="inTreatmentRadio" value="yes" checked required/>
                  <label class="radio-label">Yes</label>
                </div>
                <div class="col-lg-2">
                  <input type="radio" class="form-group" name="inTreatmentRadio" value="no"/><label class="radio-label">No</label>
                </div>
                <div class="col-lg-4">
                  <!-- 4 col spacer -->
                </div>
              </div>
              <div class="row">
                <div class="form-group col-lg-8">
                  <label>Name of Current Facility (If Applicable)</label>
                  <input type="text" class="form-control" name = "currentFacility" id = "currentFacility"/>
                </div>
              </div>
              <div class="row">
                <div class="form-group col-lg-8">
                  <label>List Prior Substance Abuse Facilities (If Applicable)</label>
                  <textarea class="form-control" rows="4" name = "priorFacilityList" id = "priorFacilityList"></textarea>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-8">
                  <label class="pull-left">May We Contact Your Current or Prior Facilities?</label>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-2">
                  <input type="radio" class="form-group" name="canContactFacilities" value="yes" checked required/>
                  <label class="radio-label">Yes</label>
                </div>
                <div class="col-lg-2">
                  <input type="radio" class="form-group" name="canContactFacilties" value="no"/><label class="radio-label">No</label>
                </div>
                <div class="col-lg-4">
                  <!-- 4 col spacer -->
                </div>
              </div>
              <div class="row">
                <div class="col-lg-8">
                  <label>If Not, Explain Why</label>
                  <input type="text" class="form-control" name = "whyNoContactFacility" id = "whyNoContactFacility"></input>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-lg-8">
                <label class="pull-left">Have You Ever Been Treated for Psychiatric/Mental Health Condition</label>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-2">
                <input type="radio" class="form-group" name="hadPsychTreatment" value="yes" checked required/>
                <label class="radio-label">Yes</label>
              </div>
              <div class="col-lg-2">
                <input type="radio" class="form-group" name="hadPsychTreatment" value="no"/><label class="radio-label">No</label>
              </div>
              <div class="col-lg-4">
                <!-- 4 col spacer -->
              </div>
            </div>
            <div class="row">
              <div class="form-group col-lg-8">
                <label>If Yes, Please Provide Dates and Explain</label>
                <textarea class="form-control" rows="3" name = "psychHistoryMessage" id = "psychHistorymessage"></textarea>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-2">
                <label class="pull-left">Height</label>
                <input type="text" class="form-control" name = "height" id = "height" required>
              </div>
              <div class="form-group col-lg-3">
                <label class="pull-left">Current Weight</label>
                <input type="text" class="form-control" name = "weight" id = "Weight" required>
              </div>
              <div class="form-group col-lg-3">
                <label class="pull-left">Weight 1 Year Ago</label>
                <input type="text" class="form-control" name = "oldWeight" id = "oldWeight" required>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6">
                <label class="pull-left">Do You Believe You Have an Eating Disorder</label>
              </div>
              <div class="col-lg-2">
                <!-- 2 col spacer -->
              </div>
            </div>
            <div class="row">
              <div class="col-lg-2">
                <input type="radio" class="form-group" name="haveEatingDisorder" value="yes" checked required/>
                <label class="radio-label">Yes</label>
              </div>
              <div class="col-lg-2">
                <input type="radio" class="form-group" name="haveEatingDisorder" value="no"/><label class="radio-label">No</label>
              </div>
              <div class="col-lg-4">
                <!-- 4 col spacer -->
              </div>
            </div>
            <div class="row">
              <div class="col-lg-8">
                <label class="pull-left">Have History of Binging, Purging, Laxative, or Diuretic Use</label>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-2">
                <input type="radio" class="form-group" name="eatingDisorderHistory" value="yes" checked required/>
                <label class="radio-label">Yes</label>
              </div>
              <div class="col-lg-2">
                <input type="radio" class="form-group" name="eatingDisorderHistory" value="no"/><label class="radio-label">No</label>
              </div>
              <div class="col-lg-4">
                <!-- 4 col spacer -->
              </div>
            </div>
            <div class="row">
              <div class="form-group col-lg-8">
                <label>If Yes, Please Explain (Specify If Active)</label>
                <textarea class="form-control" rows="3" name = "eatingDisorderHistoryMessage" id = "priorFacilityList"></textarea>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-8">
                <label class="pull-left">Have You Ever Been Treated for an Eating Disorder</label>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-2">
                <input type="radio" class="form-group" name="treatedEatingDisorder" value="yes" checked required/>
                <label class="radio-label">Yes</label>
              </div>
              <div class="col-lg-2">
                <input type="radio" class="form-group" name="treatedEatingDisorder" value="no"/><label class="radio-label">No</label>
              </div>
              <div class="col-lg-4">
                <!-- 4 col spacer -->
              </div>
            </div>
            <div class="row">
              <div class="form-group col-lg-8">
                <label>If Yes, Please Explain</label>
                <textarea class="form-control" rows="3" name = "priorFacilityList" id = "priorFacilityList"></textarea>
              </div>
            </div>
            <br>
            </div>
          <!-- SUBJECT -->
          <div class="form-subject col-lg-12">
            <div class="row">
              <h3 class="row form-header">Current Treatment Facility</h3>
            </div>
            <div class="row">
              <div class="form-group col-lg-4">
                <label>Name of Current Facility</label>
                <input type="text" class="form-control" name = "currentFacilityName" id = "currentFacilityName"/>
              </div>
              <div class="form-group col-lg-2">
                <!-- 2 col spacer -->
              </div>
              <div class="form-group col-lg-2">
                <label class="pull-left">Expected DC Date</label>
                <input type="date" class="form-control" name = "currentFacilityDCDate" id = "currentFacilityDCDate">
              </div>
            </div>
            <div class="row">
              <div class="form-group col-lg-3">
                <label>Therapist Name</label>
                <input type="text" class="form-control" name = "primaryTherapistName" id = "primaryTherapistName"/>
              </div>
              <div class="form-group col-lg-2">
                <label>Therapist Telephone</label>
                <input type="tel" class="form-control" name = "primaryTherapistTelephone" id = "primaryTherapistTelephone"/>
              </div>
              <div class="form-group col-lg-3">
                <label>Therapist Email</label>
                <input type="email" class="form-control" name = "primaryTherapistEmail" id = "primaryTherapistEmail"/>
              </div>
            </div>
            <br>
          </div> 
          <!-- SUBJECT -->
          <div class="form-subject col-lg-12">
            <div class="row">
              <h3 class="row form-header">Education &amp; Employment</h3>
            </div>
            <div class="row">
              <div class="col-lg-4">
                <label class="pull-left">Highest Level Of Education</label>
                <select class="form-control" name="secondaryFrequency" required form="application-form">
                  <option selected value="0">Select</option>
                  <option value="ged">GED</option>
                  <option value="highschool">High School Graduate</option>
                  <option value="someCollege">Some College</option>
                  <option value="associate">Associate Degree</option>
                  <option value="bacehlor">Bachelor Degree</option>
                  <option value="master">Mater's Degree</option>
                  <option value="none">None of the Above</option>
                </select>
              </div>
              <div class="form-group col-lg-4">
                <label class="pull-left">Name of Institution</label>
                <input type="text" class="form-control" name = "educationInstitution" id = "educationInstitution">
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-lg-8">
                <label class="pull-left">Are You Currently Employed</label>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-2">
                <input type="radio" class="form-group" name="currentlyEmployed" value="yes" checked required/>
                <label class="radio-label">Yes</label>
              </div>
              <div class="col-lg-2">
                <input type="radio" class="form-group" name="currentlyEmployed" value="no"/><label class="radio-label">No</label>
              </div>
              <div class="col-lg-4">
                <!-- 4 col spacer -->
              </div>
            </div>
            <div class="row">
              <div class="form-group col-lg-8">
                <label>If Yes, Please Explain (Specify if Expected to Return to Work)</label>
                <textarea class="form-control" rows="3" name = "currentEmploymentMessage" id = "currentEmploymentMessage"></textarea>
              </div>
            </div>
            <div class="row">
              <div class="form-group col-lg-6">
                <label>List Any Vocational Skills</label>
                <input type="text" class="form-control" name = "vocationalSkills" id = "vocationalSkills">
              </div>
            </div>
          </div>
          <!-- SUBJECT -->
          <div class="form-subject col-lg-12">
            <div class="row">
              <h3 class="row form-header">Legal Obligations</h3>
            </div>
            <div class="row">
              <div class="col-lg-8">
                <label class="pull-left">Do You Have Any Past Legal Issues</label>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-2">
                <input type="radio" class="form-group" name="pastLegalIssues" value="yes" checked required/>
                <label class="radio-label">Yes</label>
              </div>
              <div class="col-lg-2">
                <input type="radio" class="form-group" name="pastLegalIssues" value="no"/><label class="radio-label">No</label>
              </div>
              <div class="col-lg-4">
                <!-- 4 col spacer -->
              </div>
            </div>
            <div class="row">
              <div class="form-group col-lg-8">
                <label>If Yes, Please List Convictions and Dates</label>
                <textarea class="form-control" rows="3" name = "pastLegalMessage" id = "pastLegalMessage"></textarea>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-8">
                <label class="pull-left">Do You Have Any Current Legal Obligations</label>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-2">
                <input type="radio" class="form-group" name="currentLegalIssues" value="yes" checked required/>
                <label class="radio-label">Yes</label>
              </div>
              <div class="col-lg-2">
                <input type="radio" class="form-group" name="currentLegalIssues" value="no"/><label class="radio-label">No</label>
              </div>
              <div class="col-lg-4">
                <!-- 4 col spacer -->
              </div>
            </div>
            <div class="row">
              <div class="form-group col-lg-8">
                <label>If Yes, Please Explain (Include Court Dates and Requirements)</label>
                <textarea class="form-control" rows="3" name = "currentLegalMessage" id = "currentLegalMessage"></textarea>
              </div>
            </div>
          </div>
          <!-- SUBJECT -->
          <div class="form-subject col-lg-12">
            <div class="row">
              <h3 class="row form-header">Insurance Information</h3>
            </div>
            <div class="row">
              <div class="col-lg-4">
                <label class="pull-left">Insurance Provider</label>
                <input type="text" class="form-control" name = "insuranceProvider" id = "insuranceProvider">
              </div>
              <div class="form-group col-lg-4">
                <label class="pull-left">Insurance Phone #</label>
                <input type="tel" class="form-control" name = "insuranceTelephone" id = "insuranceTelephone">
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6">
                <label class="pull-left">ID #</label>
                <input type="text" class="form-control" name = "insuranceID" id = "insuranceID">
              </div>
              <div class="form-group col-lg-2">
                <label class="pull-left">Group #</label>
                <input type="text" class="form-control" name = "insuranceGroup" id = "insuranceGroup">
              </div>
            </div>
            <div class="row">
              <div class="col-lg-5">
                <label class="pull-left">Primary Insured Name</label>
                <input type="text" class="form-control" name = "primaryInsured" id = "primaryInsured">
              </div>
              <div class="form-group col-lg-3">
                <label class="pull-left">Relationship</label>
                <input type="text" class="form-control" name = "primaryInsuredRelationship" id = "primaryInsuredRelationship">
              </div>
            </div>
          </div>
          <div class="text-center col-lg-8">
            <button type="submit" class="btn btn-primary">Submit Application</button>
          </div>
          </form>
      </div>
    </div>
    </div>
  <?php 
require_once('../templates/social-footer.html');
require_once('../templates/footer.html'); ?>
  </body>
</html>
