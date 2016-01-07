
<?php 
function validate($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


if($_SERVER["REQUEST_METHOD"] == "POST"){
  $sub_id = validate($_GET['sub_id']);
  $ques = $_POST["ques"];
  $ans1 = $_POST["ans1"];
  $ans2 = $_POST["ans2"];
  $ans3 = $_POST["ans3"];
  $ans4 = $_POST["ans4"];
  $true_ans = $_POST["true_ans"];
  foreach ($ques as $key => $value) {
    include_once('../../mysqli_connect.php');
    $sql1="INSERT INTO question (ques_id,exam_id,ques,ans1,ans2,ans3,ans4,true_ans)  VALUES (' ','$sub_id','$value','$ans1[$key]','$ans2[$key]','$ans3[$key]','$ans4[$key]','$true_ans[$key]')";
  if(mysqli_query($cn,$sql1)) {
    //echo 'success';
  }
  else {
    echo '<br>'.mysqli_error($cn).'<br>';
  }
  }
}
header("location:../../index.php?status=addsuccess");

  ?>
