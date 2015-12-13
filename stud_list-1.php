<?php
$con = mysqli_connect("localhost","root","","db");
if(!$con)
die("Connection cannot be made". mysqli_connect_error());
$sql = "SELECT * FROM student ";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
?>       
<?php

$name = array($row["s_name"]);

foreach ($name as $value) {
   echo "$value <br>";
}
?>   