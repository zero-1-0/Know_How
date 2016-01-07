<?php
include_once('inc/session.php');

function validate($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if($_SERVER["REQUEST_METHOD"] == "POST"){
  $e_id = validate($_POST["e_id"]);
  //$q_id = validate($_POST["q_id"]);
  $total_q = validate($_POST["total_q"]);
  //$no_ques = $_POST['no_ques'];
  $i=1;
  $uans=array();
  $uq=array();
  $marks=0;
  include_once('../mysqli_connect.php');
  for($i =1;$i<=$total_q;$i++ )
  {
    echo "i : " .$i;
    $x= 'cse'.$i;
    $uq[$i]=$_POST[$x];
    echo  " q_id : " . $uq[$i].'<br>';
    $y='cs'.$i;
    $uans[$i]=$_POST[$y];
    echo "u_ans : " . $uans[$i].'<br>';
    $result1 = mysqli_query ($cn, "SELECT true_ans FROM question WHERE ques_id = '$uq[$i]' " );
    $row1 = @mysqli_fetch_array ($result1); 
    $records1 = $row1[0];
    echo $records1;
      
    if($records1==$uans[$i])
    {
        $marks++;
    }

  }
  echo 'marks = '.$marks;

  $name = $_SESSION['tempName'];
  
  $var2 = mysqli_query($cn,"SELECT s_id FROM student WHERE s_name = '$name' ");
  $var3 = mysqli_fetch_assoc($var2);
  $var4 = $var3['s_id'];
  //echo $var3;
  
  //echo '<br>'.$name.'<br>';
  $sql="INSERT INTO result (r_pid,s_id,sub_id,u_marks,total)  VALUES (' ','$var4','$e_id','$marks','$total_q')";
  if(mysqli_query($cn,$sql)) {
    //echo 'success';
  }
  else {
    echo '<br>'.mysqli_error($cn).'<br>';
  }
  //echo $e_id.'<br>'.$total_q;

  
}
else {
} ?>

