<?php include ('header.php');?>

<html>
  <head>
   <title>
    Geriatrics Measurments project | Aging Questionnaire
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
                <h2><b>Aging Questionnaire</b></h2>
                All fields marked with an asterisc (*) are required.

                <h5>Bulk difficulties*</h5>
                <input type="text" name="surname" maxlength="30" id="element"/>
                (...)
                <h5>Head and neck problems*</h5>
                <input type="text" name="surname" maxlength="30" id="element"/>
                (...)
                <h5>Impaired Mobility*</h5>
                <input type="text" name="surname" maxlength="30" id="element"/>
                (...)
                <h5>Musculoskeletal problems*</h5>
                <input type="text" name="surname" maxlength="30" id="element"/>
                (...)
                <h5>Poor standing posture*</h5>
                <input type="text" name="surname" maxlength="30" id="element"/>
                (...)
                <h5>Rectal problems*</h5>
                <input type="text" name="surname" maxlength="30" id="element"/>
                (...)
                <h5>Skin problems*</h5>
                <input type="text" name="surname" maxlength="30" id="element"/>
                (...)
                <h5>Tiredness all the time*</h5>
                <input type="text" name="surname" maxlength="30" id="element"/>
                (...)
                <h5>Urinate incontinence*</h5>
                <input type="text" name="surname" maxlength="30" id="element"/>
                (...)
 


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