<?php include ('header.php');?>

<html>
  <head>
   <title>
    Geriatrics Measurments project | Stroke Quastionaire
  </title>
  <meta charset="utf-8">
  <link href="css/bootstrap.css" rel="stylesheet">
  <link href="css/bootstrap-responsive.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link href="css/bootstrap.icon-large.css" rel="stylesheet">
  <link href="css/bootstrap.icon-large.min.css" rel="stylesheet">

  <style type="text/css">
  p{
        font-size: 12px;
        font-weight:bold;
    }
  </style>
  </head>



    <body>
      
    <!-- table -->
       <div class="container">        
          <div class="row">
            <div class="span12">
            <table>
              <form action='#' method='GET'>
              <tr>
                <h2><b>Stroke Questionnaire</b></h2>
                <br>
                All fields marked with an asterisc (*) are required.

                <h4>Symptoms</h4>
                <h6>Weakness, numbness, paralysis in a body part (person, hands, feet)  *</h6>
                <input type="radio" name="capacity" value="1"/> Yes
                <br>
                <input type="radio" name="capacity" value="0"/> No
                
                <h6>Speech difficulties, understanding, confusion *</h6>
                <input type="radio" name="capacity" value="1"/> Yes
                <br>
                <input type="radio" name="capacity" value="0"/> No
                
                <h6>Visually Impaired (loss or reduction of vision in one or both eyes)*</h6>
                <input type="radio" name="capacity" value="1"/> Yes
                <br>
                <input type="radio" name="capacity" value="0"/> No
                
                <h6>Dizziness*</h6>
                <input type="radio" name="capacity" value="1"/> Yes
                <br>
                <input type="radio" name="capacity" value="0"/> No
                
                <h6>Loss of balance*</h6>
                <input type="radio" name="capacity" value="1"/> Yes
                <br>
                <input type="radio" name="capacity" value="0"/> No
                
                <h6>Difficulty walking*</h6>
                <input type="radio" name="capacity" value="1"/> Yes
                <br>
                <input type="radio" name="capacity" value="0"/> No
                
                <h6>Loss of motion coordination*</h6>
                <input type="radio" name="capacity" value="1"/> Yes
                <br>
                <input type="radio" name="capacity" value="0"/> No
                
                <h6>Intense painful headache that occurs suddenly with no known cause*</h6>
                <input type="radio" name="capacity" value="1"/> Yes
                <br>
                <input type="radio" name="capacity" value="0"/> No
                
                <h6>Hemiplegia (when one side of the body paralyzes) *</h6>
                <input type="radio" name="capacity" value="1"/> Yes
                <br>
                <input type="radio" name="capacity" value="0"/> No
                
                <h6>Difficulty moving the tongue *</h6>
                <input type="radio" name="capacity" value="1"/> Yes
                <br>
                <input type="radio" name="capacity" value="0"/> No

                <h6>Neurological examination *</h6>
                <input type="radio" name="capacity" value="1"/> Yes
                <br>
                <input type="radio" name="capacity" value="0"/> No

                <h6>Magnetic resonance imaging *</h6>
                <input type="radio" name="capacity" value="1"/> Yes
                <br>
                <input type="radio" name="capacity" value="0"/> No

                <h6>Computed tomography*</h6>
                <input type="radio" name="capacity" value="1"/> Yes
                <br>
                <input type="radio" name="capacity" value="0"/> No

                <h4>Conention With Other Deseases and Factors</h4>
                <h5>Ischemic stroke factors/h5>
                <h6>The existence of a similar episode in the past, or the patient himself or one of his parents*</h6>
                <input type="radio" name="capacity" value="1"/> Yes
                <br>
                <input type="radio" name="capacity" value="0"/> No

                <h6>The existence of transient stroke (transient ischemic attack)*</h6>
                <input type="radio" name="capacity" value="1"/> Yes
                <br>
                <input type="radio" name="capacity" value="0"/> No
                
                <h6>Existence or myocardial infarction *</h6>
                <input type="radio" name="capacity" value="1"/> Yes
                <br>
                <input type="radio" name="capacity" value="0"/> No

                <h6>Hypertension ((>14) (διαστολικη>=90 mmHg & συστολική 140 mmHg *</h6>
                <input type="radio" name="capacity" value="1"/> Yes
                <br>
                <input type="radio" name="capacity" value="0"/> No

                <h6>Stenosis of caroti d atherosclerosis*</h6>
                <input type="radio" name="capacity" value="1"/> Yes
                <br>
                <input type="radio" name="capacity" value="0"/> No

                <h6>High blood cholesterol*</h6>
                <input type="radio" name="capacity" value="1"/> Yes
                <br>
                <input type="radio" name="capacity" value="0"/> No

                <h6>Diabetes*</h6>
                <input type="radio" name="capacity" value="1"/> Yes
                <br>
                <input type="radio" name="capacity" value="0"/> No

                <h6>Obesity*</h6>
                <input type="radio" name="capacity" value="1"/> Yes
                <br>
                <input type="radio" name="capacity" value="0"/> No

                <h6>Sedentary*</h6>
                <input type="radio" name="capacity" value="1"/> Yes
                <br>
                <input type="radio" name="capacity" value="0"/> No

                <h6>Other heart diseases *</h6>
                <input type="radio" name="capacity" value="1"/> Yes
                <br>
                <input type="radio" name="capacity" value="0"/> No

                <h6>Estrogen therapy / contraceptives*</h6>
                <input type="radio" name="capacity" value="1"/> Yes
                <br>
                <input type="radio" name="capacity" value="0"/> No

                <h6>Alcoholism*</h6>
                <input type="radio" name="capacity" value="1"/> Yes
                <br>
                <input type="radio" name="capacity" value="0"/> No

                <h6>Disorders associated with blood clotting*</h6>
                <input type="radio" name="capacity" value="1"/> Yes
                <br>
                <input type="radio" name="capacity" value="0"/> No

                <h6>Use of substances efforiogonon *</h6>
                <input type="radio" name="capacity" value="1"/> Yes
                <br>
                <input type="radio" name="capacity" value="0"/> No

                <h6>People of the black race*</h6>
                <input type="radio" name="capacity" value="1"/> Yes
                <br>
                <input type="radio" name="capacity" value="0"/> No

                <h5>Hemorrhagic </h5>

                <h6>Use of warfarin or other blood thinning medications  *</h6>
                <input type="radio" name="capacity" value="1"/> Yes
                <br>
                <input type="radio" name="capacity" value="0"/> No

                <h6>Cerebral amyloidosis *</h6>
                <input type="radio" name="capacity" value="1"/> Yes
                <br>
                <input type="radio" name="capacity" value="0"/> No

                <h6>Coagulopathy*</h6>
                <input type="radio" name="capacity" value="1"/> Yes
                <br>
                <input type="radio" name="capacity" value="0"/> No

                <h6>Anticoagulant therapy  *</h6>
                <input type="radio" name="capacity" value="1"/> Yes
                <br>
                <input type="radio" name="capacity" value="0"/> No

                <h6>Thrombolytic therapy of acute myocardial infarction (MI), or acute ischemic stroke *</h6>
                <input type="radio" name="capacity" value="1"/> Yes
                <br>
                <input type="radio" name="capacity" value="0"/> No

                <h6>Arteriovenous malformation (AVM), aneurysms, and other vascular malformations*</h6>
                <input type="radio" name="capacity" value="1"/> Yes
                <br>
                <input type="radio" name="capacity" value="0"/> No

                 <h6>Vasculitis  *</h6>
                <input type="radio" name="capacity" value="1"/> Yes
                <br>
                <input type="radio" name="capacity" value="0"/> No

                 <h6>Intracranial neoplasm *</h6>
                <input type="radio" name="capacity" value="1"/> Yes
                <br>
                <input type="radio" name="capacity" value="0"/> No

                <h6>Intracerebral hemorrhage</h6>
                <p>Damage *</p>
                <input type="radio" name="capacity" value="1"/> Yes
                <br>
                <input type="radio" name="capacity" value="0"/> No

                <p>Bleeding disorders *</p>
                <input type="radio" name="capacity" value="1"/> Yes
                <br>
                <input type="radio" name="capacity" value="0"/> No

                <h6>Subarachnoid hemorrhage</h6>
                <p>*</p>
                <input type="radio" name="capacity" value="1"/> Yes
                <br>
                <input type="radio" name="capacity" value="0"/> No

                <p>Age ≥40  *</p>
                <input type="radio" name="capacity" value="1"/> Yes
                <br>
                <input type="radio" name="capacity" value="0"/> No

                <p>Neck pain or stiffness *</p>
                <input type="radio" name="capacity" value="1"/> Yes
                <br>
                <input type="radio" name="capacity" value="0"/> No

                <p>Loss of consciousness  *</p>
                <input type="radio" name="capacity" value="1"/> Yes
                <br>
                <input type="radio" name="capacity" value="0"/> No

                <p>Onset of headache during exertion  *</p>
                <input type="radio" name="capacity" value="1"/> Yes
                <br>
                <input type="radio" name="capacity" value="0"/> No

                <p>Thunderclap headache  *</p>
                <input type="radio" name="capacity" value="1"/> Yes
                <br>
                <input type="radio" name="capacity" value="0"/> No

                <p>Limited neck flexion *</p>
                <input type="radio" name="capacity" value="1"/> Yes
                <br>
                <input type="radio" name="capacity" value="0"/> No

                <h6>Aneurysms</h6>
                <p>ADPKD *</p>
                <input type="radio" name="capacity" value="1"/> Yes
                <br>
                <input type="radio" name="capacity" value="0"/> No

                <p>LDS  *</p>
                <input type="radio" name="capacity" value="1"/> Yes
                <br>
                <input type="radio" name="capacity" value="0"/> No

                <p>Ehlers – Danlos syndrome *</p>
                <input type="radio" name="capacity" value="1"/> Yes
                <br>
                <input type="radio" name="capacity" value="0"/> No

                <h5>History</h5>
                <h6>Diabetes  </h6>
                <input type="radio" name="capacity" value="1"/> Yes
                <br>
                <input type="radio" name="capacity" value="0"/> No

                <h6>Cholesterol *</h6>
                <input type="radio" name="capacity" value="1"/> Yes
                <br>
                <input type="radio" name="capacity" value="0"/> No

                <h6>Smoking *</h6>
                <input type="radio" name="capacity" value="1"/> Yes
                <br>
                <input type="radio" name="capacity" value="0"/> No

                <br><br>
                <br><br>
              <tr>
                <a href="verification.php" class="btn btn-info">Submit</a>
              </tr>
              </form>
            </table>
          </div>
</div>
    <br><br>
         <div class="row">
      <div id="span12">
        <?php include ('footer.php'); ?>     
      </div>
    </div>

<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>

<script src="js/bootstrap.js"></script>


</body>

</html>