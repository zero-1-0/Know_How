<?php

$q = $_REQUEST["q"];
$testName = "";
$con = mysqli_connect("localhost","root","","db");
  if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
  }
$query="SELECT test_name FROM examinfo WHERE test_name LIKE '%".$q."%'";
$result=mysqli_query($con,$query);
if (mysqli_num_rows($result) > 0){
    while($row=mysqli_fetch_assoc($result)){
        if($testName===""){
            $testName=$row['test_name'];
        }
        else {
            $hint = $row['test_name'];
            $testName.=", $hint ";
        }
        
    }
}
else {
    $testName="";
}
echo $testName === "" ? "no suggestion" : $testName;


?>