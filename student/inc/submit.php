<?php
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST"){
  $e_id = validate($_POST["e_id"]);
  $q_id = validate($_POST["q_id"]);
  $total_q = validate($_POST["total_q"]);

  echo $e_id.$q_id.$total_q;

  
}
function validate($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

