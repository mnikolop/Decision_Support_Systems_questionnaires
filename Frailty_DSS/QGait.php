<?php include ('header.php');?>

<html>
  <head>
   <title>
    Geriatrics Measurments project | Irregular Gait Patterns Quastionaire
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
                <h2><b>Irregular Gait Patterns Quastionaire</b></h2>
                <br>
                All fields marked with an asterisc (*) are required.

                <h4>Normal changes in gait</h4>
                <h5>Stride*</h5>
                <h6>Short strides</h6>
                <input type="radio" name="selective" value="1"/> Yes
                <br>
                <input type="radio" name="selective" value="0"/> No
                
                <h5>Gait Velocity *</h5>
                <h6>15% decline for usual gait and 20%decline for fast walking</h6>
                <input type="radio" name="devided" value="1"/> Yes
                <br>
                <input type="radio" name="devided" value="0"/> No

                <h5>Cadence *</h5>
                <h6>Faster cadence</h6>
                <input type="radio" name="devided" value="1"/> Yes
                <br>
                <input type="radio" name="devided" value="0"/> No

                <h5>Double limb stance time *</h5>
                <h6>Increased time with both fee on the floor</h6>
                <input type="radio" name="devided" value="1"/> Yes
                <br>
                <input type="radio" name="devided" value="0"/> No

                <h5>Walking Posture *</h5>
                <h6>Reduction of hip and knee rotation</h6>
                <input type="radio" name="devided" value="1"/> Yes
                <br>
                <input type="radio" name="devided" value="0"/> No
                <h6>Decrease of toe-floor clearance</h6>
                <input type="radio" name="devided" value="1"/> Yes
                <br>
                <input type="radio" name="devided" value="0"/> No
                
                <h5>Joint motion *</h5>
                <h6>Reduction of ankle plantar flexion</h6>
                <input type="radio" name="devided" value="1"/> Yes
                <br>
                <input type="radio" name="devided" value="0"/> No
                <h6>Hips have increased adduction</h6>
                <input type="radio" name="devided" value="1"/> Yes
                <br>
                <input type="radio" name="devided" value="0"/> No
                <h6>Reduction of pelvic motion</h6>
                <input type="radio" name="devided" value="1"/> Yes
                <br>
                <input type="radio" name="devided" value="0"/> No
        
                <br>
                <br>

                <h4>Abnormal Changes in gait</h4>
                <h6>Loss of symmetry of motion and timing between left and right sides</h6>
                <input type="radio" name="selective" value="1"/> Yes
                <br>
                <input type="radio" name="selective" value="0"/> No
                <h6>Difficulty initiating of maintaining gait</h6>
                <input type="radio" name="selective" value="1"/> Yes
                <br>
                <input type="radio" name="selective" value="0"/> No
                <h6>Retropulsion</h6>
                <input type="radio" name="selective" value="1"/> Yes
                <br>
                <input type="radio" name="selective" value="0"/> No
                <h6>Footdrop</h6>
                <input type="radio" name="selective" value="1"/> Yes
                <br>
                <input type="radio" name="selective" value="0"/> No
                <h6>Short step lengt</h6>
                <input type="radio" name="selective" value="1"/> Yes
                <br>
                <input type="radio" name="selective" value="0"/> No
                <h6>Wide-based gait</h6>
                <input type="radio" name="selective" value="1"/> Yes
                <br>
                <input type="radio" name="selective" value="0"/> No
                <h6>Circumduction</h6>
                <input type="radio" name="selective" value="1"/> Yes
                <br>
                <input type="radio" name="selective" value="0"/> No
                <h6>Forward lean</h6>
                <input type="radio" name="selective" value="1"/> Yes
                <br>
                <input type="radio" name="selective" value="0"/> No
                <h6>Festination</h6>
                <input type="radio" name="selective" value="1"/> Yes
                <br>
                <input type="radio" name="selective" value="0"/> No
                <h6>Sideward trunk lean</h6>
                <input type="radio" name="selective" value="1"/> Yes
                <br>
                <input type="radio" name="selective" value="0"/> No
                <h6>Irregular and unpredictable trunk instability</h6>
                <input type="radio" name="selective" value="1"/> Yes
                <br>
                <input type="radio" name="selective" value="0"/> No
                <h6>Deviations from path</h6>
                <input type="radio" name="selective" value="1"/> Yes
                <br>
                <input type="radio" name="selective" value="0"/> No
                <h6>Arm swing</h6>
                <input type="radio" name="selective" value="1"/> Yes
                <br>
                <input type="radio" name="selective" value="0"/> No


</tr>
<br>
<br>
<br>
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