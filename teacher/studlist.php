<?php 
include('inc/session.php');
$con = mysqli_connect("localhost","root","","db");
if(!$con)
die("Connection cannot be made". mysqli_connect_error());

$sql1 = "SELECT * FROM result ORDER BY u_marks DESC";    
       $result1 = mysqli_query($con, $sql1);
     
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
     <title>Test Online : Examinee Panel</title>

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

    <!--=========== BEGIN COURSE BANNER SECTION ================-->
    <!--=========== END COURSE BANNER SECTION ================-->

    <!--=========== BEGIN category SECTION ================-->
    <?php //include_once('inc/get_data.php') ?>
    <!--=========== END category SECTION ================-->  



    <!-- Tables
    ================================================== -->
    <section id="tables">

        <div class="container">
           <div class="row" style="margin-top:80px">
              <div class="col-lg-12 col-md-12"> 

                      <div class="page-header">
                        <h1>Students List</h1>
                      </div>
                  
                      <table class="table table-bordered table-striped table-hover">
                        <thead>
                          <tr>
                            <th>ID </th>
                            <th>Name</th>       
                            <th>Admission number</th>
                            <th>Branch</th>     
                            <th>Mail-ID</th>    
                            <th>Exam Name</th>    
                            <th>Marks</th>   
                          </tr>
                        </thead>
                        <tbody>

                        <?php 

                            while($row1 = mysqli_fetch_assoc($result1)) {
                                $marks = $row1['u_marks'];
                                $test_name = $row1['sub_id'];
                                $sql2 = "SELECT * FROM examinfo WHERE sub_id = '$test_name' " ;        
                                $result2 = mysqli_query($con, $sql2);
                                $a = mysqli_fetch_assoc($result2);         
                                $s_id = $row1['s_id'];
                                $sql = "SELECT * FROM student WHERE s_id = '$s_id' ";
                                $result = mysqli_query($con, $sql);
                                $row = mysqli_fetch_assoc($result);
                                echo '<tr>
                                        <td>'.$row['s_id'].'</td>
                                        <td>'.$row['s_name'].'</td>
                                        <td>'.$row['s_admno'].'</td>
                                        <td>'.$row['branch'].'</td>
                                        <td>'.$row['s_mail'].'</td>
                                        <td>'.$a['test_name'].'</td>
                                        <td>'.$marks.'</td>
                                      </tr>';
                            } 
                            mysqli_close($con);
                        ?>

                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </section>



    
    <!--=========== BEGIN FOOTER SECTION ================-->
    <?php include_once('inc/footer.php') ?>
    <!--=========== END FOOTER SECTION ================--> 

  

    <!-- Javascript Files
    ================================================== -->

    <!-- initialize jQuery Library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Preloader js file -->
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