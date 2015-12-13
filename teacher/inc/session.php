<?php session_start();
//$name = $_SESSION['tempName'];
//$pass = $_SESSION['tempPass'];
//$lvl = $_SESSION['tempLvl'];
if(!isset($_SESSION['tempName']) or !isset($_SESSION['tempPass']) or !isset($_SESSION['tempLvl']) or ($_SESSION['tempLvl'] != 1)) {
  echo "<h1>Access Denied</h1>";
  header('Location:../index.php?status=t_notloggedin');
}
?>