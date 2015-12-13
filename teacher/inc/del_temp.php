
<?php 
function validate($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if($_SERVER["REQUEST_METHOD"] == "POST"){
  $e_id = validate($_POST["del_e"]);
  include_once('../../mysqli_connect.php');
    // header("Location: http://localhost/sept_24_edited_new_temp/exm_1.php?add=cs");
  $result = mysqli_query ($cn, "SELECT sub_id FROM examinfo WHERE test_name = '$e_id'  " );
  $row = @mysqli_fetch_array ($result); 
  echo $row[0];
  $sql = "UPDATE examinfo SET e_status=0 WHERE test_name = '$e_id' AND e_status=1  ";    
//  $sql="DELETE FROM examinfo WHERE test_name = '$e_id' AND e_status=1 ";
  if(mysqli_query($cn,$sql)) {
    //echo 'success';
  }
  else {
    echo '<br>'.mysqli_error($cn).'<br>';
  }
  /*$sql1="DELETE FROM question WHERE exam_id = '$row[0]' ";
  if(mysqli_query($cn,$sql1)) {
    //echo 'success';
  }
  else {
    echo '<br>'.mysqli_error($cn).'<br>';
  }*/


header("location:../../index.php?status=delsuccess");
  }?>
