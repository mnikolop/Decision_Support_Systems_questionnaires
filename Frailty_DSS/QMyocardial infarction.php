<?php include ('header.php'); ?>
<?php
if ((isset($_GET['cpain'])) || 
  (isset($_GET['breath'])) ||
  (isset($_GET['sweat'])) ||
  (isset($_GET['nausia'])) || 
  (isset($_GET['vomit'])) || 
  (isset($_GET['hbeat'])) || 
  (isset($_GET['anxiety']))) 
{
  $res = 0;
  $error = 0; 
  if ($_GET['cpain'] == 'Yes') 
  {
    ++$res;
  }
  elseif ($_GET['cpain'] == NULL) 
  {
    ++$error; 
  }
  if ($_GET['breath'] == 'Yes') 
  {
   ++$res;
  }
  elseif ($_GET['breath'] == NULL) 
  {
  ++$error;
  }
  if ($_GET['sweat'] == 'Yes') 
  {
    ++$res;
  }
  elseif ($_GET['sweat'] == NULL) 
  {
    ++$error;
  }
  if ($_GET['nausia'] == 'Yes') 
  {
   ++$res;
  }
  elseif ($_GET['nausia'] == NULL) 
  {
    ++$error;
  }
  if ($_GET['vomit'] == 'Yes') 
  {
   ++$res;
  }
  elseif ($_GET['vomit'] == NULL) 
  {
    ++$error;
  }
  if ($_GET['hbeat'] == 'Yes') 
  {
   ++$res;
  }
  elseif ($_GET['hbeat'] == NULL) 
  {
    ++$error;
  }
  if ($_GET['anxiety'] == 'Yes') 
  {
   ++$res;
  }
  elseif ($_GET['anxiety'] == NULL) 
  {
    ++$error;
  }
  
  if (($res > 0) && ($error == 0))
  {
    echo "<h2>Your Myocardial infarction Geriatrics Score is:". $res . "/7 </h2>
    <br><br><br>";
  }
  if ($error != 0) 
  {
    echo("1 or more of the requires fields are not answered. <br>Please answer all the fields and then press submit.");
  }
}

?>
<html>
<head>
 <title>
  Geriatrics Measurments project | Myocardial infarction Questionnaire
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
              <h2><b>Cardiovascular disease Questionnaire</b></h2>
              All fields marked with an asterisc (*) are required.


              <h5>Chest Pain*</h5>
              <input type="radio" name="cpain" value="Yes" />Yes
              <br>
              <input type="radio" name="cpain" value="No" />No
              
              <h5>Shortness of Breath*</h5>
              <input type="radio" name="breath" value="Yes" />Yes
              <br>
              <input type="radio" name="breath" value="No" />No
              
              <h5>Sweating*</h5>
              <input type="radio" name="sweat" value="Yes" />Yes
              <br>
              <input type="radio" name="sweat" value="No" />No
              
              <h5>Nausia*</h5>
              <input type="radio" name="nausia" value="Yes" />Yes
              <br>
              <input type="radio" name="nausia" value="No" />No
              
              <h5>Vomiting*</h5>
              <input type="radio" name="vomit" value="Yes" />Yes
              <br>
              <input type="radio" name="vomit" value="No" />No
              
              <h5>Abnormal Heartbeat*</h5>
              <input type="radio" name="hbeat" value="Yes" />Yes
              <br>
              <input type="radio" name="hbeat" value="No" />No
              
              <h5>Anxiety*</h5>
              <input type="radio" name="anxiety" value="Yes" />Yes
              <br>
              <input type="radio" name="anxiety" value="No" />No

              <h4>Cardiac Biomarcers</h4>
              <h5> Tropin </h5>
              <input type="number" name="tropin" id="element"/>

              <h5>Ck</h5>
              <input type="number" name="Ck" id="element"/>
              
              <h5>Ck - MB</h5>
              <input type="number" name="ckmb" id="element"/>

              <h5>Myoglobin</h5>
              <input type="number" name="myoglobin" id="element"/>

              <h5>BMP</h5>
              <input type="number" name="bmp" id="element"/>
              <br><br>
              <br><br>
              <tr>
                <input class="btn btn-info" type="submit" value="Submit"></input>
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