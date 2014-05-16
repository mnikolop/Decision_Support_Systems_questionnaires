<?php include ('header.php');?>

<html>
  <head>
   <title>
    Geriatrics Measurments project | Tremor Quastionaire
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
                <h2><b>Tremor Questionnaire</b></h2>
                <br>
                All fields marked with an asterisc (*) are required.

                <h4>Tremor in action</h4>
                <h5>Postural tremor </h5>
                <h6>Tremor in bodyparts during maintenance of a posture, such as holding an object*</h6>
                <input type="number" name="name" maxlength="30" id="element"/>(4-12 Hz frequency) 
                
                <h5>Kinetic (intention) tremor </h5>
                <h6>Tremor appearingduring limb movement*</h6>
                <input type="number" name="name" maxlength="30" id="element"/>(2-7 Hz frequency)

                <br>
                <br>

                <h4>Rest tremor  </h4>
                <h6>Tremor whileresting*</h6>
                <input type="number" name="name" maxlength="30" id="element"/>(3-6 Hz frequency)
                
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