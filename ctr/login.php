<?php
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST"){
  $name = validate($_POST["name"]);
  $pass = validate($_POST["password"]);
  $check = validate($_POST["check"]);
  $con = mysqli_connect("localhost","root","","db");
  if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
  }
  if($check=="st"){
    $s_result = mysqli_query($con, "SELECT * FROM student WHERE s_name='$name' AND s_psw='$pass'");
    if(!$s_result){echo "Error:".mysqli_error($con);}
    $s_row = mysqli_fetch_array($s_result);
    if($s_row){
      $_SESSION['tempName']=$name;
      $_SESSION['tempPass']=$pass;
      $_SESSION['tempLvl']=0;
      $link="student/index.php";
    }
    else {
      header('location:index.php?status=wrongpass');
      /*$error="Sorry! Wrong Username or Password";
      $name="Sign in";
      $link="#";*/
    }
  }
  elseif($check=="te"){
    $t_result = mysqli_query($con, "SELECT * FROM teacher WHERE t_name='$name' AND t_psw='$pass'");
    if(!$t_result){echo "Error:".mysqli_error($con);}
    $t_row = mysqli_fetch_array($t_result);
    if($t_row){
      $_SESSION['tempName']=$name;
      $_SESSION['tempPass']=$pass;
      $_SESSION['tempLvl']=1;
      $link="teacher/index.php";
    }
    else {
      header('location:index.php?status=wrongpass');
      /*$error="Sorry! Wrong Username or Password";
      $name="Sign in";
      $link="#";*/
    }
  }

else
    $_SESSION['tempLvl']=3;
}
function validate($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>