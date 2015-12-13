<?php
// get the q parameter from URL
$q = $_REQUEST["q"];
$u = $_REQUEST["u"];
$student_hint="";
$teacher_hint="";
$con = mysqli_connect("localhost","root","","db");
  if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
  }
if($u=="s"){
    $query="SELECT s_name FROM student WHERE s_name LIKE '%".$q."%'";
    $result=mysqli_query($con,$query);
    if (mysqli_num_rows($result) > 0){
        while($row=mysqli_fetch_assoc($result)){
            if($student_hint===""){
                $student_hint=$row['s_name'];
            }
            else {
                $hint = $row['s_name'];
                $student_hint.=", $hint ";
            }
            
        }
    }
    else {
        $student_hint="";
    }
    echo $student_hint === "" ? "no suggestion" : $student_hint;
}
if($u=="t"){
    $query="SELECT t_name FROM teacher WHERE t_name LIKE '%".$q."%'";
    $result=mysqli_query($con,$query);
    if (mysqli_num_rows($result) > 0){
        while($row=mysqli_fetch_assoc($result)){
            if($teacher_hint===""){
                $teacher_hint=$row['t_name'];
            }
            else {
                $hint = $row['t_name'];
                $teacher_hint.=", $hint ";
            }
        }
    }
    else {
        $teacher_hint="";
    }
    echo $teacher_hint === "" ? "no suggestion" : $teacher_hint;
}
?> 