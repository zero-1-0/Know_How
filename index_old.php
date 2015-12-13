<?php
require('ctr/login.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!--=============================================== 
    Template Design By WpFreeware Team.
    Author URI : http://www.wpfreeware.com/
    ====================================================-->

    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>Test Online : Home</title>

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="img/wpf-favicon.png"/>

    <!-- CSS
    ================================================== -->       
    <!-- Bootstrap css file-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Font awesome css file-->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- Superslide css file-->
    <link rel="stylesheet" href="css/superslides.css">
    <!-- Slick slider css file -->
    <link href="css/slick.css" rel="stylesheet"> 
    <!-- Circle counter cdn css file -->
    <link rel='stylesheet prefetch' href='https://cdn.rawgit.com/pguso/jquery-plugin-circliful/master/css/jquery.circliful.css'>  
    <!-- smooth animate css file -->
    <link rel="stylesheet" href="css/animate.css"> 
    <!-- preloader -->
    <link rel="stylesheet" href="css/queryLoader.css" type="text/css" />
    <!-- gallery slider css -->
    <link type="text/css" media="all" rel="stylesheet" href="css/jquery.tosrus.all.css" />    
    <!-- Default Theme css file -->
    <link id="switcher" href="css/themes/default-theme.css" rel="stylesheet">
    <!-- Main structure css file -->
    <link href="css/style.css" rel="stylesheet">
   
    <!-- Google fonts -->
    <link href='http://fonts.googleapis.com/css?family=Merriweather' rel='stylesheet' type='text/css'>   
    <link href='http://fonts.googleapis.com/css?family=Varela' rel='stylesheet' type='text/css'>

    <script>
        function s_showHint(str) {
            if (str.length == 0) {
                document.getElementById("student_hint").innerHTML = "";
                return;
            } else {
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                        document.getElementById("student_hint").innerHTML = xmlhttp.responseText;
                    }
                }
                xmlhttp.open("GET", "ctr/hint.php?u=s&q=" + str, true);
                xmlhttp.send();
            }
        }
        function t_showHint(str) {
            if (str.length == 0) {
                document.getElementById("teacher_hint").innerHTML = "";
                return;
            } else {
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                        document.getElementById("teacher_hint").innerHTML = xmlhttp.responseText;
                    }
                }
                xmlhttp.open("GET", "ctr/hint.php?u=t&q=" + str, true);
                xmlhttp.send();
            }
        }
    </script> 

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
 
  </head>
  <body>    
    <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"></a>
    <!-- END SCROLL TOP BUTTON -->

    <!--=========== BEGIN HEADER SECTION ================-->
    <?php include_once('inc/header.php') ?>
    <!--=========== END HEADER SECTION ================--> 

      <?php if(isset($_GET["status"]) AND ($_GET["status"] == "regsuccess") ){ ?>
            <h2>Alerts</h2>
            <div class="alert alert-success" align='center'>
            <strong>Success!</strong> Now,  Please SIGN IN to continue !.
            </div>
      <?php } ?>

      <?php if(isset($_GET["status"]) AND ($_GET["status"] == "s_notloggedin") ){ ?>
            <h2>Alerts</h2>
            <div class="alert alert-warning" align='center'>
            <strong>Sorry! </strong> Please SIGN IN as student to continue !.
            </div>
      <?php } ?>

      <?php if(isset($_GET["status"]) AND ($_GET["status"] == "t_notloggedin") ){ ?>
            <h2>Alerts</h2>
            <div class="alert alert-warning" align='center'>
            <strong>Sorry! </strong> Please SIGN IN as teacher to continue !.
            </div>
      <?php } ?>

      <?php if(isset($_GET["status"]) AND ($_GET["status"] == "wrongpass") ){ ?>
            <h2>Alerts</h2>
            <div class="alert alert-warning" align='center'>
            <strong>Wrong Username or Password! </strong> Please TRY AGAIN with a different username and password !.
            </div>
      <?php } ?>

      <?php if(isset($_GET["status"]) AND ($_GET["status"] == "addsuccess") ){ ?>
            <h2>Alerts</h2>
            <div class="alert alert-success" align='center'>
            <strong>Your test has been added successfully !</strong>
            </div>
      <?php } ?>


        <?php /*if($error!=""){
          echo '<div class="alert alert-danger alert-dismissible" role="alert">';
          echo '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
          echo '<strong>'.$error.'</strong>';
          echo '</div>';
          }*/
        ?>

    <!--=========== BEGIN SLIDER SECTION ================-->
    <?php include_once('inc/slider.php') ?>
    <!--=========== END SLIDER SECTION ================-->

    <!--=========== BEGIN ABOUT US SECTION ================-->
    <?php include_once('inc/aboutus.php') ?>
    <!--=========== END ABOUT US SECTION ================--> 

    <!--=========== BEGIN WHY US SECTION ================-->
    <?php include_once('inc/whyus.php') ?>
    <!--=========== END WHY US SECTION ================-->

    <!--=========== BEGIN OUR COURSES SECTION ================-->
    <?php include_once('inc/ourcourses.php') ?>
    <!--=========== END OUR COURSES SECTION ================-->  

    <!--=========== BEGIN OUR TUTORS SECTION ================-->
    <?php //include_once('inc/ourtutors.php') ?>
    <!--=========== END OUR TUTORS SECTION ================-->

    <!--=========== BEGIN STUDENTS TESTIMONIAL SECTION ================-->
    <?php //include_once('inc/testimonials.php') ?>
    <!--=========== END STUDENTS TESTIMONIAL SECTION ================-->    
    
    <!--=========== BEGIN FOOTER SECTION ================-->
    <?php include_once('inc/footer.php') ?>
    <!--=========== END FOOTER SECTION ================--> 

  

    <!-- Javascript Files
    ================================================== -->

    <!-- initialize jQuery Library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Preloader js file -->
    <script src="js/queryloader2.min.js" type="text/javascript"></script>
    <!-- For smooth animatin  -->
    <script src="js/wow.min.js"></script>  
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- slick slider -->
    <script src="js/slick.min.js"></script>
    <!-- superslides slider -->
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.animate-enhanced.min.js"></script>
    <script src="js/jquery.superslides.min.js" type="text/javascript" charset="utf-8"></script>   
    <!-- for circle counter -->
    <script src='https://cdn.rawgit.com/pguso/jquery-plugin-circliful/master/js/jquery.circliful.min.js'></script>
    <!-- Gallery slider -->
    <script type="text/javascript" language="javascript" src="js/jquery.tosrus.min.all.js"></script>   
   
    <!-- Custom js-->
    <script src="js/custom.js"></script>
    <!--=============================================== 
    Template Design By WpFreeware Team.
    Author URI : http://www.wpfreeware.com/
    ====================================================-->


  </body>
</html>