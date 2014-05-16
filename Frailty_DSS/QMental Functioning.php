<?php include ('header.php');?>

<html>
  <head>
   <title>
    Geriatrics Measurments project | Changes in general mental functioning Quastionaire
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
                <h2><b>Changes in general mental functioning Questionnaire</b></h2>
             
                All fields marked with an asterisc (*) are required.
                <br>
                
                <h4>Attention</h4>
                <h5>Selective Attention</h5>
                <h6>Slow response in selective stimuli*</h6>
                <input type="radio" name="selective" value="1"/> Yes
                <br>
                <input type="radio" name="selective" value="0"/> No
                
                <h5>Divided Attention</h5>
                <h6>Problems in attentional tasks that require dividing or switching of attention among multiple inputs*</h6>
                <input type="radio" name="devided" value="1"/> Yes
                <br>
                <input type="radio" name="devided" value="0"/> No
                
                <br>
                
                <h4>Short-term memory </h4>
                <h5>Limited capacity</h5>
                <h6>Low memory capacity *</h6>
                <input type="radio" name="capacity" value="1"/> Yes
                <br>
                <input type="radio" name="capacity" value="0"/> No
                

                
                <h5>Limited duration</h5>
                <h6>Short memory duration *</h6>
                <input type="radio" name="duration" value="1"/> Yes
                <br>
                <input type="radio" name="duration" value="0"/> No
                
                
                
                <h4>Long-term memory </h4>
                <h5>Semantic memory </h5>
                <h6>Difficulty to recall the names of common objects or other well-learned information*</h6>
                <input type="radio" name="semantic" value="1"/> Yes
                <br>
                <input type="radio" name="semantic" value="0"/> No
                
                <h5>Episodic memory</h5>
                <h6>Difficulty to recall personally experienced events that occurred in a particular place and at a particular time *</h6>
                <input type="radio" name="episodic" value="1"/> Yes
                <br>
                <input type="radio" name="episodic" value="0"/> No
                
                <h4>Speech and language </h4>
                <h6>Difficulty with vocal communication *</h6>
                <input type="radio" name="speach" value="1"/> Yes
                <br>
                <input type="radio" name="speach" value="0"/> No
               
                <h4>Decision making </h4>
                <h5>Short memory limitation </h5>
                <h6>Tend to rely on expert opinion to make a decision*</h6>
                <input type="radio" name="sml" value="1"/> Yes
                <br>
                <input type="radio" name="sml" value="0"/> No
                
                <h5>Episodic memory decline </h5>
                <h6>Loss of memory for details or sources troubles the decision making*</h6>
                <input type="radio" name="emd" value="1"/> Yes
                <br>
                <input type="radio" name="epd" value="0"/> No
                
                <h4>Executive control  </h4>
                <h6>Problems in executive daily functions*</h6>
                <input type="radio" name="control" value="1"/> Yes
                <br>
                <input type="radio" name="control" value="0"/> No

                
                <br><br>
                <br><br>
              </tr>
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