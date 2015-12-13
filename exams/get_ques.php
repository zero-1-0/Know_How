<?php 
    if(isset($_GET['set'])){
      $e_id = $_GET['set'];
      $result = mysqli_query ($cn, "SELECT COUNT(ques_id) FROM question WHERE exam_id = '$e_id' " );
      $row = @mysqli_fetch_array ($result); 
      $records = $row[0];
      /*

      $timer = mysqli_query ($cn, "SELECT * FROM examinfo WHERE exam_id = '$e_id' " );
      $row_1 = @mysqli_fetch_assoc ($timer);
      $set_limit = $row_1['time_limit'];
      die($set_limit); 
*/
}
  if(isset($_GET["set"]) ){ 
      
      $ques = mysqli_query($cn,"SELECT * FROM question WHERE exam_id = '$e_id' ORDER BY ques_id ");
  ?>
   <html>
        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
            <script type="text/javascript">
            function countDown(secs, elem)
            {
                var element = document.getElementById(elem);
                element.innerHTML = "<h1>You have <b>"+secs+"</b> seconds to answer the questions</h1>";
                if(secs < 1) {
                    document.quiz.submit();
                }
                else
                {
                    secs--;
                    setTimeout('countDown('+secs+',"'+elem+'")',1500);
                }
            }

            function validate() {
                return true;
            }
            </script> 
            <div id="status"></div>
            <script type="text/javascript">countDown(5/*default time limit */,"status");</script>
            <title>Questionnaire</title>
            
        </head>
        <body>
            <form name="quiz" id="myquiz" onsubmit="return validate()" action = "student/result.php" method= "POST">
                <?php
            $e_id =$_GET['set'];
            echo '<input type="hidden" name = "e_id" value= "'.$e_id.'" /> ';
            
            $members = $row[0];
              //mysqli_close($cn);
              echo '<input type="hidden" name = "total_q" value= "'.$members.'" /> ';
             // echo $members;
            while($data = mysqli_fetch_assoc ($ques))
             {
              $ques_id = $data['ques_id'];
              $x = 'cs'.$ques_id;
              echo '<input type="hidden" name = "cse'.$ques_id.'" value= "'.$ques_id.'" /> ';
              echo '<pre>'.$data['ques_id']. ' . ' . $data['ques'] . '</pre>' . '<br>';
              echo '<input type="radio" name="cs'.$ques_id.'" value="1"/>' . $data['ans1'] . '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;' ; 
              echo '<input type="radio" name="cs'.$ques_id.'" value="2"/>' . $data['ans2'] . '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;' ;
              echo '<input type="radio" name="cs'.$ques_id.'" value="3"/>' . $data['ans3'] . '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;' ; 
              echo '<input type="radio" name="cs'.$ques_id.'" value="4"/>' . $data['ans4'] . '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.'<hr>' ;
              
              echo '<br>';
              }
              //echo '<input type="hidden" name = "no_ques" value= "'.$records.'" />';
            
              echo "<p align='center' >Total Questions: ".$records."</p>"; 
              
                  if(isset($_SESSION['tempLvl']) and (($_SESSION['tempLvl'] == 0)))
                      echo '<input type= "submit" name="submitbutton" class= " btn-lg btn-primary"  value="submit"\> ';
                  else
                      echo '<pre style="background-color:cyan;"> You need to log in as student to submit test questions </pre>';
             
                }
              ?>
            

            </form>
        </body>
    </html>
      <form action = "student/result.php" method= "POST">
          
      </form>
       
  <?php
  if(isset($_GET["add"])) {
  include('teacher/add.php');
  }

  if(isset($_GET["del"])){
  include('teacher/del.php');
  }
  ?>