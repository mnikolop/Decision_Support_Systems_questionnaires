<?php include ('header.php');?>

<html>
  <head>
   <title>
    Geriatrics Measurments project | Thyroid Quastionaire
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
                <h2><b>Thyroid Questionnaire</b></h2>
                <br>
                All fields marked with an asterisc (*) are required.

                <h4>Symptoms</h4>
                <h6>If there is a family history with this disease is very likely to occur*</h6>
                <input type="radio" name="capacity" value="1"/> Yes
                <br>
                <input type="radio" name="capacity" value="0"/> No
                
                <h6>May, in rare cases, to other endocrine (hormonal) disorders caused by the immune system*</h6>
                <input type="radio" name="capacity" value="1"/> Yes
                <br>
                <input type="radio" name="capacity" value="0"/> No

                <h6>PGA II*</h6>
                <input type="radio" name="capacity" value="1"/> Yes
                <br>
                <input type="radio" name="capacity" value="0"/> No
                
                <h6>(PGA I),with :adrenal insufficiency Fungal infections of the mouthHypoparathyroidism (underactive parathyroid αδένας)*</h6>
                <input type="radio" name="capacity" value="1"/> Yes
                <br>
                <input type="radio" name="capacity" value="0"/> No

                <h6>Constipation*</h6>
                <input type="radio" name="capacity" value="1"/> Yes
                <br>
                <input type="radio" name="capacity" value="0"/> No

                <h6>Difficulty concentrating or thinking*</h6>
                <input type="radio" name="capacity" value="1"/> Yes
                <br>
                <input type="radio" name="capacity" value="0"/> No
                
                <h6>Dry skin*</h6>
                <input type="radio" name="capacity" value="1"/> Yes
                <br>
                <input type="radio" name="capacity" value="0"/> No

                <h6>Extended neck or presence goiter*</h6>
                <input type="radio" name="capacity" value="1"/> Yes
                <br>
                <input type="radio" name="capacity" value="0"/> No

                <h6>Fatigue*</h6>
                <input type="radio" name="capacity" value="1"/> Yes
                <br>
                <input type="radio" name="capacity" value="0"/> No

                <h6>Hair Loss*</h6>
                <input type="radio" name="capacity" value="1"/> Yes
                <br>
                <input type="radio" name="capacity" value="0"/> No

                <h6>Heavy and irregular periods   *</h6>
                <input type="radio" name="capacity" value="1"/> Yes
                <br>
                <input type="radio" name="capacity" value="0"/> No

                <h6>Intolerance to cold*</h6>
                <input type="radio" name="capacity" value="1"/> Yes
                <br>
                <input type="radio" name="capacity" value="0"/> No

                <h6>Mild weight gain*</h6>
                <input type="radio" name="capacity" value="1"/> Yes
                <br>
                <input type="radio" name="capacity" value="0"/> No
                
                <h6>Little or narrowed thyroid gland (late in the disease)*</h6>
                <input type="radio" name="capacity" value="1"/> Yes
                <br>
                <input type="radio" name="capacity" value="0"/> No

                <h6>Joint stiffness*</h6>
                <input type="radio" name="capacity" value="1"/> Yes
                <br>
                <input type="radio" name="capacity" value="0"/> No

                <h6>Swelling of the face*</h6>
                <input type="radio" name="capacity" value="1"/> Yes
                <br>
                <input type="radio" name="capacity" value="0"/> No

                <h4>Test Results</h4>
                <h6>Free T4 test*</h6>
                <input type="radio" name="capacity" value="1"/> Yes
                <br>
                <input type="radio" name="capacity" value="0"/> No

                <h6>Serum TSH*</h6>
                <input type="radio" name="capacity" value="1"/> Yes
                <br>
                <input type="radio" name="capacity" value="0"/> No

                <h6>T3*</h6>
                <input type="radio" name="capacity" value="1"/> Yes
                <br>
                <input type="radio" name="capacity" value="0"/> No

                <h5>Thyroid autoantibodies</h5>
                <h6>Antithyroid peroxidase antibody*</h6>
                <input type="radio" name="capacity" value="1"/> Yes
                <br>
                <input type="radio" name="capacity" value="0"/> No

                <h6>Antithyroglobulin antibody*</h6>
                <input type="radio" name="capacity" value="1"/> Yes
                <br>
                <input type="radio" name="capacity" value="0"/> No

                <h4>Connection with Other Deseases or Factors</h4>
                <h6>Type 1 Diabetes *</h6>
                <input type="radio" name="capacity" value="1"/> Yes
                <br>
                <input type="radio" name="capacity" value="0"/> No

                <h6>Adrenal insufficiency *</h6>
                <input type="radio" name="capacity" value="1"/> Yes
                <br>
                <input type="radio" name="capacity" value="0"/> No

                 <h6>Thyroid cancer *</h6>
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