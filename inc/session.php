<?php session_start();
$name = $_SESSION['tempName'];
$pass = $_SESSION['tempPass'];
if(!isset($name) AND !isset($pass)) {
  echo "<h1>Access Denied</h1>";
  header('Location:../index.php?status=notloggedin');
}
?>