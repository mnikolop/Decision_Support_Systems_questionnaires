<?php 
if ((isset($_GET['age'])) && ($_GET['age']) != NULL)
{
  $age = $_GET['age'];

  if ($age >= 60) 
  {
    header('Location:QList.php');
    exit();
  }
  echo "Your age is lower than 60. <br> The results generated might not be accurete.";


}
?>

<?php include ('header.php');?>
<html>
<head>
 <title>
  Geriatrics Measurments project | Initial Questionnaire
</title>
<meta charset="utf-8">
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/bootstrap-responsive.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/bootstrap.icon-large.css" rel="stylesheet">
<link href="css/bootstrap.icon-large.min.css" rel="stylesheet">
</head>



<body>
  <!-- table -->
  <div class="container">        
    <div class="row">
      <div class="span8">
        <table>
          <form action='#' method='GET'>
            <tr>
              <h2><b>Patient health record and history</b></h2>
              All fields marked with an asterisc (*) are required.
              <br>
              <h3><b>Health History Record</b></h3>
              <br>
              <h4> Personal Physiological Characteristics </h4>
              <h5> First Name </h5>
              <input type="text" name="name" maxlength="30" id="element"/>
              (max 30 characters a-z and A-Z)

              <h5> Last Name </h5>
              <input type="text" name="surname" maxlength="30" id="element"/>
              (max 30 characters a-z and A-Z)

              <h5>Gender*</h5>
              <input type="radio" name="gender" value="Male" />Male
              <br>
              <input type="radio" name="gender" value="Female" />Female

              <h5> Age* </h5>
              <input type="number" name="age" maxlength="3" id="element"/> (For the algorithm to give accurate results the age should be greater than 60)
              

              <br>
              <br>

              <h4><b> Diseases’ History </b></h4>
              <h5>Input*</h5>
              <input type="radio" name="dh" value="Male" />Input from file <input type="text" name="dhin" maxlength="30" id="element"/> 
              <a href="patient.php" class="btn btn-info">Browse</a>
              (browse computer)
              <br>
              <input type="radio" name="dh" value="Female" />e-mail personal physician <input type="text" name="dhmail" maxlength="30" id="element"/> 
              <a href="patient.php" class="btn btn-info">Send e-mail</a>
              (inseart physicians e-mail)
              <br>
              <br>

              <h4><b> Family History* </b></h4>
              <h5>Input</h5>
              <input type="radio" name="fh" value="Male" />Input from file <input type="text" name="fhin" maxlength="30" id="element"/> 
              <a href="patient.php" class="btn btn-info">Browse</a>
              (browse computer)
              <br>
              <input type="radio" name="fh" value="Female" />e-mail family physician <input type="text" name="fhmail" maxlength="30" id="element"/> 
              <a href="patient.php" class="btn btn-info">Send e-mail</a>                  
              (inseart physicians e-mail)
              <br>
              <br>

              <h3><b>Pathophysiological Biomarkers</b></h3>
              <br>
              <h4><b>Blood, Urine and Special biofactors Analysis</b></h4>
              <h5>asdf*</h5>
              <input type="text" name="asdf" maxlength="30" id="element"/>
              (...)
              <h5>asdf*</h5>
              <input type="text" name="asdf" maxlength="30" id="element"/>
              (...)
              <h5>asdf*</h5>
              <input type="text" name="asdf" maxlength="30" id="element"/>
              (...)
              <h5>asdf*</h5>
              <input type="text" name="asdf" maxlength="30" id="element"/>
              (...)
              <h5>asdf*</h5>
              <input type="text" name="asdf" maxlength="30" id="element"/>
              (...)

              <h4><b>Imaging data</b></h4>
              <h5>Input*</h5>
              <input type="radio" name="id" value="Male" />Input from file <input type="text" name="idin" maxlength="30" id="element"/> 
              <a href="patient.php" class="btn btn-info">Browse</a>
              (browse computer)
              <br>
              <input type="radio" name="id" value="Female" />e-mail personal physician <input type="text" name="idmail" maxlength="30" id="element"/> 
              <a href="patient.php" class="btn btn-info">Send e-mail</a>
              (inseart physicians e-mail)
              <br>
              <br>

              <h4><b>Electrophysiology Measurements</b></h4>
              <h5>Input*</h5>
              <input type="radio" name="em" value="Male" />Input from file <input type="text" name="emin" maxlength="30" id="element"/> 
              <a href="patient.php" class="btn btn-info">Browse</a>
              (browse computer)
              <br>
              <input type="radio" name="em" value="Female" />e-mail personal physician <input type="text" name="emmail" maxlength="30" id="element"/> 
              <a href="patient.php" class="btn btn-info">Send e-mail</a>
              (inseart physicians e-mail)
              <br>
              <br>

              <h4><b>Heavy metals Measurements</b></h4>
              <h5>Mercury*</h5>
              <input type="number" name="mercury" maxlength="3" id="element"/> 
              (measurement taken in last check up)

              <h5>Lead*</h5>
              <input type="number" name="lead" maxlength="3" id="element"/> 
              (measurement taken in last check up)

              <h5>Cadmium*</h5>
              <input type="number" name="cadmium" maxlength="3" id="element"/>
              (measurement taken in last check up)

              <h5>Arsenic*</h5>
              <input type="number" name="arsenic" maxlength="3" id="element"/>
              (measurement taken in last check up)

              <h5>Iron*</h5>
              <input type="number" name="iron" maxlength="3" id="element"/>
              (measurement taken in last check up)

              <h5>Aluminium*</h5>
              <input type="number" name="aluminium" maxlength="3" id="element"/>
              (measurement taken in last check up)

              <h5>Copper*</h5>
              <input type="number" name="copper" maxlength="3" id="element"/>
              (measurement taken in last check up)

            </tr>
            <br>
            <br>

            <h5>Would you like your data to be anonymusly stored for scientific reacearch?*</h5>
            <input type="radio" name="save" value="Male" />Yes
            <br>
            <input type="radio" name="save" value="Female" />No

            <br>
            <br>
            <tr>
              <input class="btn btn-info" type="submit" value="Submit"></input>
            </tr>
          </form>
        </table>
      </div>
    </div>
    <br>
    <br>
    <div class="row">
      <div id="span12">
        <?php include ('footer.php'); ?>     
      </div>
    </div>

    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>

    <script src="js/bootstrap.js"></script>


  </body>

  </html>