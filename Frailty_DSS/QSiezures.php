<?php include ('header.php');?>

<html>
  <head>
   <title>
    Geriatrics Measurments project | Seizures Quastionaire
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
            <div class="span12">
            <table>
              <form action='#' method='GET'>
              <tr>
                <h2><b>Seizures Questionnaire</b></h2>
                <br>
                All fields marked with an asterisc (*) are required.

                <h4>Generalized Seizure</h4>
                <h5>Brief staring*</h5>
                <input type="radio" name="selective" value="1"/> Yes
                <br>
                <input type="radio" name="selective" value="0"/> No
                
                <h5>Sudden muscle contractions *</h5>
                <input type="radio" name="devided" value="1"/> Yes
                <br>
                <input type="radio" name="devided" value="0"/> No

                <h5>Sudden falls*</h5>
                <input type="radio" name="selective" value="1"/> Yes
                <br>
                <input type="radio" name="selective" value="0"/> No
                
                <h5>Convulsions *</h5>
                <input type="radio" name="devided" value="1"/> Yes
                <br>
                <input type="radio" name="devided" value="0"/> No

                <br>
                <br>

                <h4>Partial Seizure </h4>
                <h5>Simple partial Seizure</h5>
                <h6>Familiar thing suddenly seems unfamiliar*</h6>
                <input type="radio" name="capacity" value="1"/> Yes
                <br>
                <input type="radio" name="capacity" value="0"/> No
                
                <h6>Trembling that moves up one side of the body*</h6>
                <input type="radio" name="capacity" value="1"/> Yes
                <br>
                <input type="radio" name="capacity" value="0"/> No

                <h6>Unfamiliar things seem familiar*</h6>
                <input type="radio" name="capacity" value="1"/> Yes
                <br>
                <input type="radio" name="capacity" value="0"/> No

                <h6>Out of body experiences*</h6>
                <input type="radio" name="capacity" value="1"/> Yes
                <br>
                <input type="radio" name="capacity" value="0"/> No

                <h6>Sudden shifts in mood*</h6>
                <input type="radio" name="capacity" value="1"/> Yes
                <br>
                <input type="radio" name="capacity" value="0"/> No

                <h6>Unexplained anger or fear*</h6>
                <input type="radio" name="capacity" value="1"/> Yes
                <br>
                <input type="radio" name="capacity" value="0"/> No

                <h6>Disturbed speech*</h6>
                <input type="radio" name="capacity" value="1"/> Yes
                <br>
                <input type="radio" name="capacity" value="0"/> No

                <br>

                <h5>Complex Partial Seizure</h5>
                <h6>Lip smacking*</h6>
                <input type="radio" name="capacity" value="1"/> Yes
                <br>
                <input type="radio" name="capacity" value="0"/> No
                
                <h6>Swallowing*</h6>
                <input type="radio" name="capacity" value="1"/> Yes
                <br>
                <input type="radio" name="capacity" value="0"/> No

                <h6>Picking at clothes*</h6>
                <input type="radio" name="capacity" value="1"/> Yes
                <br>
                <input type="radio" name="capacity" value="0"/> No

                <h6>Wandering*</h6>
                <input type="radio" name="capacity" value="1"/> Yes
                <br>
                <input type="radio" name="capacity" value="0"/> No

                <h6>Lack of response to others*</h6>
                <input type="radio" name="capacity" value="1"/> Yes
                <br>
                <input type="radio" name="capacity" value="0"/> No

                <h6>Repeated phrases*</h6>
                <input type="radio" name="capacity" value="1"/> Yes
                <br>
                <input type="radio" name="capacity" value="0"/> No

                <h6>Senseless movements*</h6>
                <input type="radio" name="capacity" value="1"/> Yes
                <br>
                <input type="radio" name="capacity" value="0"/> No

                <h6>Lost time*</h6>
                <input type="radio" name="capacity" value="1"/> Yes
                <br>
                <input type="radio" name="capacity" value="0"/> No

                <h6>Disrobing*</h6>
                <input type="radio" name="capacity" value="1"/> Yes
                <br>
                <input type="radio" name="capacity" value="0"/> No

                <h6>Being briefly unaware of danger or pain*</h6>
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