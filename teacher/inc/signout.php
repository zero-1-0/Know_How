<?php
    session_start();
    session_destroy();
    unset($_SESSION['tempName']);
	unset($_SESSION['tempPass']);
	unset($_SESSION['tempLvl']);
    header("location:../../index.php");
?>