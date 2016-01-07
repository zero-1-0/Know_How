<?php
  $cn = mysqli_connect("localhost","root","","db");
  if (!$cn) {
    die("Connection failed: " . mysqli_connect_error());
  }
?>
