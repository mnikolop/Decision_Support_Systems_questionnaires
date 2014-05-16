<?php include ('header.php');?>

<html>
  <head>
   <title>
    Geriatrics Measurments project | Onset of Cognitive Symptoms Quastionaire
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
                <h2><b>Onset of Cognitive Symptoms Quastionaire</b></h2>
                <br>
                All fields marked with an asterisc (*) are required.

                <h4>Mild cognitive impairment</h4>
                <h5>Non- Amnestic Mild cognitive impairment</h5>
                <h6>Not demented*</h6>
                <input type="radio" name="selective" value="1"/> Yes
                <br>
                <input type="radio" name="selective" value="0"/> No
                <h6>Cognitive declined*</h6>
                <input type="radio" name="devided" value="1"/> Yes
                <br>
                <input type="radio" name="devided" value="0"/> No
                <h6>Essentially normal functional activities*</h6>
                <input type="radio" name="devided" value="1"/> Yes
                <br>
                <input type="radio" name="devided" value="0"/> No

                <h5>Essentially normal functional activities</h5>
                <h6>Not demented*</h6>
                <input type="radio" name="capacity" value="1"/> Yes
                <br>
                <input type="radio" name="capacity" value="0"/> No
                <h6>Cognitive declined*</h6>
                <input type="radio" name="duration" value="1"/> Yes
                <br>
                <input type="radio" name="duration" value="0"/> No
                <h6>Essentially normal functional activities*</h6>
                <input type="radio" name="duration" value="1"/> Yes
                <br>
                <input type="radio" name="duration" value="0"/> No
                <h6>Memory complained usually corroborated by an informant*</h6>
                <input type="radio" name="duration" value="1"/> Yes
                <br>
                <input type="radio" name="duration" value="0"/> No
                <h6>Objective memory impairment*</h6>
                <input type="radio" name="duration" value="1"/> Yes
                <br>
                <input type="radio" name="duration" value="0"/> No


                <br>
                <br>

                <h4>Long-term memory </h4>
                <h5>Semantic memory *</h5>
                <input type="radio" name="semantic" value="1"/> Yes
                <br>
                <input type="radio" name="semantic" value="0"/> No
                
                <h5>Episodic memory *</h5>
                <input type="radio" name="episodic" value="1"/> Yes
                <br>
                <input type="radio" name="episodic" value="0"/> No

                <br>
                <br>

                <h4>Speech and language  *</h4>
                <input type="radio" name="speach" value="1"/> Yes
                <br>
                <input type="radio" name="speach" value="0"/> No
                
                <br>
                <br>

                <h4>Decision making </h4>
                <h5>Short memory limitation *</h5>
                <input type="radio" name="sml" value="1"/> Yes
                <br>
                <input type="radio" name="sml" value="0"/> No
                
                <h5>Episodic memory decline *</h5>
                <input type="radio" name="emd" value="1"/> Yes
                <br>
                <input type="radio" name="epd" value="0"/> No

                <br>
                <br>

                <h4>Executive control  *</h4>
                <input type="radio" name="control" value="1"/> Yes
                <br>
                <input type="radio" name="control" value="0"/> No
                
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