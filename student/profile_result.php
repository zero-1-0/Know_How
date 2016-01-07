<!DOCTYPE html>
<html lang="en">
  <head>
  <style>
  .space {margin-top:200px}
  </style>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>WpF Degree : Student</title>

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="img/wpf-favicon.png"/>

    <!-- CSS
    ================================================== -->       
    <!-- Bootstrap css file-->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <!-- Font awesome css file-->
    <link href="../css/font-awesome.min.css" rel="stylesheet">
    <!-- Superslide css file-->
    <link rel="stylesheet" href="../css/superslides.css">
    <!-- Slick slider css file -->
    <link href="../css/slick.css" rel="stylesheet"> 
    <!-- Circle counter cdn css file -->
    <link rel='stylesheet prefetch' href='https://cdn.rawgit.com/pguso/jquery-plugin-circliful/master/css/jquery.circliful.css'>  
    <!-- smooth animate css file -->
    <link rel="stylesheet" href="../css/animate.css"> 
    <!-- preloader -->
    <link rel="stylesheet" href="../css/queryLoader.css" type="text/css" />
    <!-- gallery slider css -->
    <link type="text/css" media="all" rel="stylesheet" href="../css/jquery.tosrus.all.css" />    
    <!-- Default Theme css file -->
    <link id="switcher" href="../css/themes/default-theme.css" rel="stylesheet">
    <!-- Main structure css file -->
    <link href="../css/style.css" rel="stylesheet">
   
    <!-- Google fonts -->
    <link href='http://fonts.googleapis.com/css?family=Merriweather' rel='stylesheet' type='text/css'>   
    <link href='http://fonts.googleapis.com/css?family=Varela' rel='stylesheet' type='text/css'>    

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
    <?php
include_once('inc/session.php');

function validate($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


  include_once('../mysqli_connect.php');
  $name = $_SESSION['tempName'];
  $var2 = mysqli_query($cn,"SELECT * FROM student WHERE s_name = '$name' ");
  $var3 = mysqli_fetch_assoc($var2);
  $var4 = $var3['s_id'];
  $query = mysqli_query($cn,"SELECT * from result where s_id = '$var4'");
  $var5 = mysqli_fetch_assoc($query);
  ?>


    <!--=========== BEGIN COURSE BANNER SECTION ================-->
    <!--=========== END COURSE BANNER SECTION ================-->

    <!--=========== BEGIN category SECTION ================-->
    
 <div style="margin-top:200px " class="container" class="space">

  <h2>Your Records</h2>
  <table class="table">
    <thead>
      <tr>
        <th>Subject</th>
        <th>Marks</th>
      </tr>
    </thead>
    <tbody>
      <tr class="success">
        <td><?php echo $var5['sub_id'] ; ?></td>
        <td><?php echo $var5['u_marks'] ?></td>
    
    </tbody>
  </table>
</div>


    <!--=========== END category SECTION ================-->  
    
    <!--=========== BEGIN FOOTER SECTION ================-->
    <?php include_once('inc/footer.php') ?>
    <!--=========== END FOOTER SECTION ================--> 

  

    <!-- Javascript Files
    ================================================== -->

    <!-- initialize jQuery Library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="../js/queryloader2.min.js" type="text/javascript"></script>
    <!-- For smooth animatin  -->
    <script src="../js/wow.min.js"></script>  
    <!-- Bootstrap js -->
    <script src="../js/bootstrap.min.js"></script>
    <!-- slick slider -->
    <script src="../js/slick.min.js"></script>
    <!-- superslides slider -->
    <script src="../js/jquery.easing.1.3.js"></script>
    <script src="../js/jquery.animate-enhanced.min.js"></script>
    <script src="../js/jquery.superslides.min.js" type="text/javascript" charset="utf-8"></script>   
    <!-- for circle counter -->
    <script src='https://cdn.rawgit.com/pguso/jquery-plugin-circliful/master/js/jquery.circliful.min.js'></script>
    <!-- Gallery slider -->
    <script type="../text/javascript" language="javascript" src="js/jquery.tosrus.min.all.js"></script>   
   
    <!-- Custom js-->
    <script src="../js/custom.js"></script>
    <!--=============================================== 
    Template Design By WpFreeware Team.
    Author URI : http://www.wpfreeware.com/
    ====================================================-->


  </body>
</html>
