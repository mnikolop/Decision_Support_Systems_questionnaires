<?php include ('header.php');?>

<html>
  <head>
   <title>
    Geriatrics Measurments project | Presence of Palmomental Reflex Quastionaire
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
                <h2><b>Presence of Palmomental Reflex Questionnaire</b></h2>
                <br>
                All fields marked with an asterisc (*) are required.

                <h4>Presence of palmomental reflex</h4>
                <h6>Sustained contraction of the ipsilateral chin muscles in response tochin muscles in response to stokingthe palm with a pin or light touch to the thenal eminence *</h6>
                <input type="radio" name="selective" value="1"/> Yes
                <br>
                <input type="radio" name="selective" value="0"/> No
                
                <h6>Stimulating other areas of the skinor the urethral catheterization maycause the reflex*</h6>
                <input type="radio" name="devided" value="1"/> Yes
                <br>
                <input type="radio" name="devided" value="0"/> No

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