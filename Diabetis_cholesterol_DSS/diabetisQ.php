<html>
<head>                
<script language="JavaScript">
    function cardiac_risk(form)
    {
  
     // fylo=document.forma.andras.value;       
          
      per1=document.forma.per.value;  
      sys1=document.forma.sys.value;       
      dia1=document.forma.dia.value; 
      age1=document.forma.age.value;
    //  cig1=document.forma.cig.value;                        
    //  dgly1=document.forma.dgly.value; 
      hdl1=document.forma.hdl.value; 
      ldl1=document.forma.ldl.value;
    //  kardia1=document.forma.kardia.value;
        fat1=document.forma.fat.value;
    //  far1=document.forma.far.value;
    //  sugdia1=document.forma.sugdia.value;  
       
   //------------------------------------------------------------------------------------------------------------------ //   
      var number = document.getElementsByName("andras");
        var len = number.length
              {
             for(i=0; i<len; i++)
                          {                
                           if (number[i].checked)
                                           fylo=number[i].value;
                            }      
             }
         

           var number = document.getElementsByName("kardia");
              var len = number.length
              {
             for(i=0; i<len; i++)
                          {                
                           if (number[i].checked)                                 
                                           kardia1=number[i].value;
                            }      
              }
                  
          var number = document.getElementsByName("cig");
                  var len = number.length
                         {
                              for(i=0; i<len; i++)
                                      {                
                                               if (number[i].checked)                                                      
                                                                   cig1=number[i].value; 
                                        }      
                          }         
          
           var number = document.getElementsByName("dgly");
              var len = number.length
              {
             for(i=0; i<len; i++)
                          {                
                           if (number[i].checked)                          
                                           dgly1=number[i].value;
                                }      
             }   
       
   
       var number = document.getElementsByName("far");
       var len = number.length
  
        for(i=0; i<len; i++)
           {
                      
              if (number[i].checked)                 
                        far1=number[i].value;
               }       
          var number = document.getElementsByName("sugdia");
        var len = number.length
  
        for(i=0; i<len; i++)
          {                 
          if (number[i].checked)                         
                  sugdia1=number[i].value;
           
            }           
  //----------------------------------------------------------------------------------------------------------------------- //
     //    document.write("<font color=#E60000>"+per1+" "+" </font>");  
     //    document.write("<font color=#E60000>"+sys1+" "+" </font>");  
  //   document.write("<font color=#E60000>"+dia1+" "+" </font>");  
  //   document.write("<font color=#E60000>"+age1+" "+" </font>");  
  //   document.write("<font color=#E60000>"+cig1+" "+" </font>");  
  //   document.write("<font color=#E60000>"+dgly1+" "+" </font>");  
  //   document.write("<font color=#E60000>"+hdl1+" "+" </font>");  
  //   document.write("<font color=#E60000>"+fat1+" "+" </font>");  
  //   document.write("<font color=#E60000>"+far1+" "+" </font>");  
     document.write("<font color=#E60000>"+sugdia1+" "+" </font>"); 
          
    
      var dper=dfat=dhdl=dsys=ddia=dfar=dgly=dsugdia=dage=dldl=dcig=dkardia=sum=sum1=0;                                                                   
                                            
      if(fylo==1)
      {                                                       
        if(per1 > 102 )
          dper = 1;
        else if(fat1 >= 150)
          dfat = 1;
        else if(hdl1 <= 40)
          dhdl = 1;
        else if(sys1 >=130 )
          dsys = 1;
        else if(dia1>=85)
          ddia = 1;
      }
     else
     {           
        if(per > 88 )
          dper = 1;
        else if(fat >= 150)
          dfat = 1;
        else if(hdl <= 50)
          dhdl = 1;
        else if(sys >=130 )
          dsys = 1;
        else if(dia>=85)
          ddia = 1;
        sum = dper +dfat+dhdl+dsys+ddia+dfar+dgly+dsugdia;
        if(sum >= 3)
          return 1;
        else
          return 0;
      }   
      sum = dper +dfat+dhdl+dsys+ddia+dfar+dgly+dsugdia;
      if(sum>=3)   
        sum1=1;
      else
        sum1=0;
      if(sys1 >=130 )
        dsys = 1;
      else if(dia1>=85)
        ddia = 1;
      else if((age1 >55) && (fylo == 1))
        dage = 1;
      else if((age1 >65) && (fylo == 0))
        dage = 1;
      else if(cig1==1 )
        dcig =1; 
      else if(ldl1 >115)
        dldl=1;                                          
      else if ((hdl1 <40) && (fylo == 1))
        dhdl =1;
      else if((hdl1 <46) && (fylo == 0))
        dhdl =1;
      else if((per1 >102) &&(fylo == 1))
        dper =1;
      else if((per1 >88) &&( fylo == 0))
        dper =1;
      else if ((kardia1 ==1) && (fylo==1 && age <55))
        dkardia =1;
      else if((kardia1 ==1 )&&( fylo==0 && age <65))
        dkardia =1;
      sum = dsys + ddia+ dage+ dcig+ dhdl+ dldl+ dper+ dkardia+ dgly;       
      var x="Low Danger";            
      if (sys1>130 && sys1<=139 && dia1>85 && dia1<= 89 && sum==0)
        x="Medium Danger";
      else if(sys1>130 && sys1<=139 && dia1>85 && dia1<= 89 && (sum==1 || sum== 2))
        x="Low Added Danger";
      else if(sys1>130 && sys1<=139 && dia1>85 && dia1<= 89 && sum1 ==1 && sum>= 3)
        x="High Added Danger";
      else if(sys1 >=140 && sys1 <=159 && dia1 >= 90 &&dia1 <=99 &&sum ==0)
        x="Low Added Danger";
      else if(sys1 >=140 && sys1 <=159 && dia1 >= 90 && dia1 <=99 &&(sum==1 || sum== 2))
        x="Low Added Danger";
      else if(sys1 >=140 && sys1 <=159 && dia1 >= 90 && dia1 <=99 && sum1 ==1 && sum >= 3)
        x="High Added Danger";
      else if (sys1>=160 && sys1<=179 && dia1>=100 && dia1<= 109 && sum==0)
        x="Medium Added Danger";
      else if(sys1>=160 && sys1<=179 && dia1>=100 && dia1<= 109&& (sum==1 || sum== 2))
        x="Medium Added Danger";
      else if(sys1>=160 && sys1<=179 && dia1>=100 && dia1<= 109 && sum1 ==1 && sum >= 3)
        x="High Added Danger";
      else if(sys1 >= 180 && dia1 >= 110 && sum==0)
        x="High Added Danger";
      else if(sys1 >= 180 && dia1 >= 110 && (sum==1 || sum== 2))
        x="Very High Added Danger";
      else if (sys1 >= 180 && dia1 >= 110 && sum1==1 && sum>= 3)
        x="Very High Added Danger";
      document.write("<font color=#E60000>"+x+" "+" </font>");  
      document.write(" If you have cardiac or kidney problems the danger is very high");
    }               
</script>

<script language ="Javascript" >
  function met(form)
  {
    n=document.form1.m.value;
    sugar1=document.form1.sugar.value;
    aimo1=document.form1.aimo.value;
    var res,x;
    if(n=="on")
    {             
      if(sugar1 >= 70 &&sugar1 <110 && aimo1 <6)
        x="Normal";
      else if(sugar1 >= 110 && sugar1 <126 && aimo1 >=6 &&aimo1 <= 6.4)
        x="Disturbed Diet Glucose";
      else if(sugar1 >= 126 && aimo1 >=6.5)
      {
        res =1;
        x="Danger for Diabetis";
      }
    }
    else
    {           
      if(sugar1 >= 70 &&sugar1 <140 && aimo1 <6)
        x="Normal";
      else if(sugar1<140&& aimo1 >=6 && aimo1 <= 6.4)
        x="Disturbed Diet Glucose";
      else if(sugar1 >=140 && sugar1 <200 && aimo1 >=6 && aimo1 <= 6.4)
        x="Disturbed Glucose Tolerance";
      else if(sugar1 >= 200 && aimo1 >=6.5)
      {
        res =1;
        x="Danger for Diabetis";
      }
    }    
          document.write("<font color=#E60000>"+n+" "+" </font>");      
    if(res==1)
    {     
      document.write("<font color=#E60000>"+x+" "+" </font>");  
      document.write("Additional Results");
      document.write("If the folowing symptoms are presented");
      document.write("You need to seek medical attention");            
      document.write("Increased Therst");
      document.write("Increased Appetite");
      document.write("Nausia OR Vomit");
      document.write("Increased Urination");
      document.write("Fatigue/Exustion");
      document.write("Vision Disruptions");
      document.write("Nambness OR Ant-like-feeling on your legs and arms");
      document.write("Frequent Skin, Urinary, Viginal Inflamations");
      document.write("Heredity");
    }
    else
      document.write("<font color=#E60000>"+x+" "+" </font>");          
   }
</script>
    <title>
      Diabetis - Cholestarol Measurments Project | Questionnaire
    </title>

    <meta charset="utf-8">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/bootstrap.icon-large.min.css" rel="stylesheet">

</head>            

<body>   
  <header id="overview" class="jumbotron subhead">
      <div class="row" id="title">
        <div class="span12">
          <h2>Diabetis - Cholestarol Measurments Questionnaire</h2>
        </div>
      </div>
    </header>
    
    <div class="row">
      <div class="span3">
        <?php include ('navbar.php'); ?>
      </div>
    

      <div class="span8">


    
    <section id="hypertantion">
<div id="page-header" class="row">
            <h3>On-line Hypetantion Prognosis</h3>
      </div>
      <div id="text" class="row">
  
  <br>                
  <form name="forma">    
  <tr>                 
    
    <h5>Gender</h5>  
        <input type="radio" NAME="andras">Male 
    <br>
    <input type="radio" NAME="gynaika"> Female
    
    <h5>Is there History of Early Heart Desease?</h5>    
    <input type="radio" NAME="kardia" VALUE="1">Yes
    <br>
    <input type="radio" NAME="kardia" VALUE="0">No

    <h5>Smoking</h5>  
    <input type="radio" NAME="cig"   VALUE = "1"> Yes
    <br>
    <input type="radio" NAME="cig"   VALUE = "0"> No
    
    <h5>Is there Blood Glucose?</h5>     
    <input type="radio" NAME="dgly" VALUE="1">Yes
    <br>
    
    <input type="radio" NAME="dgly" VALUE="0">No

    <h5>Is there Use of Hypertensive Drugs?</h5> 
    <input type="radio" NAME="far" VALUE="1" size=3>Yes 
    <br>
    <input type="radio" NAME="far" VALUE="0" size=3>No
    
    <h5>Existanse of Diabetis</h5> 
    <input type="radio" NAME="sugdia" VALUE="1" size=3>Yes
    <br>
    <input type="radio" NAME="sugdia" VALUE="0" size=3>No

    <h5>Abdominal Circamferance</h5> 
    <input type="text" NAME="per" size=3 id="element"> (in centimetres)
    
    <h5>Systolic Blood Pressure</h5> 
    <input type="text" NAME="sys" size=3 id="element">
    
    <h5>Diastolic Blood Pressure</h5>  
    <input type="text" NAME="dia" size=3 id="element">  
    
    <h5>Age</h5>                     
    <input type="text" NAME="age" size=3 id="element"> 

    <h5>HDL-C Plasma Level</h5>      
    <input type="text" NAME="hdl" size=3 id="element"> (in mg/dl)
    
    <h5>LDL-C Plasma Levels</h5>     
    <input type="text" NAME="ldl" size=3 id="element"> (in mg/dl)
  
    <h5>Triglycerides Plasma Levels</h5>    
    <input type="text" NAME="fat" size=3 id="element">

    <br>
    <br>
    <input type="button" class="btn btn-success" VALUE="Results" onClick="cardiac_risk()">
  </tr>
  </form>    
</div>
    </section>
      
      
 
  <section id="diabetis">
<div id="page-header" class="row">
            <h3>On-line Diabetis Prognosis</h3>
      </div>
      <div id="text" class="row">
  
  <br>
  <form name="form1">    
    <tr>
    <h5>Blood Sugar Level</h5>  
    <input type="text" NAME="sugar" size=3 id="element">(in mg/dl)
    
    <h5>Glycosylated Protein Levels</h5>  
    <input type="text" NAME="aimo" size=3 id="element">
    
    <h5>After Diet Results</h5> 
    <input type="radio" NAME="m" VALUE="1" size=3>Yes
    <br>
    <input type="radio" NAME="m" VALUE="0" size=3>No

    <br>
    <br>
    <input type="button" class="btn btn-success" VALUE="Results" onClick="met()">
  </tr>
  </form> 
</div>
</section>
</div>
</div>

<!-- footer -->
    <div class="row">
      <div id="span12">
        <?php include ('footer.php'); ?>     
      </div>
    </div>
    
  <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
  <script src="js/bootstrap.js"></script>


</body>                                           
</html>
