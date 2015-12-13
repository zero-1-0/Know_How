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
//include_once('inc/session.php');


function validate($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if($_SERVER["REQUEST_METHOD"] == "POST"){
  $e_id = validate($_POST["e_id"]);
  $total_q = validate($_POST["total_q"]);
  $time_limit = validate($_POST["time_limit"]);
  $sub_id = validate($_POST["sub_id"]);
    include_once('../mysqli_connect.php');
  $foobar = $_POST['e_id'];
  $query1 = "SELECT * from examinfo where test_name = '$foobar'";
  $result2 = mysqli_query($cn,$query1);
  $row2 = mysqli_fetch_assoc($result2);
  $var1 = $row2['test_name'];
  if(isset($var1)){
    header('location:add.php?foo=bar');
  }

  $sql="INSERT INTO examinfo (exam_id,sub_id,test_name,total_que,e_link,e_status,time_limit)  VALUES (' ','$sub_id','$e_id','$total_q','0','1','$time_limit')";
  if(mysqli_query($cn,$sql)) {
   // echo 'success';
  }
  else {
    echo '<br>'.mysqli_error($cn).'<br>';
  }
}
?>

<form action = "inc/add_temp.php?sub_id=<?php echo $sub_id; ?>" method= "POST">
  <br><br><br><br><br>
  <?php   for( $a = 0; $a < $total_q ; $a++){?>
  
  <div class="input-group input-group-lg">
    <span class="input-group-addon" id="sizing-addon1">Question</span>
    <input type="text" class="form-control" placeholder="Enter question " aria-describedby="sizing-addon1" name = "ques[<?php echo $a; ?>]" >
    <input type="text" class="form-control" placeholder="Enter ans1  " aria-describedby="sizing-addon1" name = "ans1[<?php echo $a; ?>]">
    <input type="text" class="form-control" placeholder="Enter ans2 " aria-describedby="sizing-addon1" name = "ans2[<?php echo $a; ?>]">
    <input type="text" class="form-control" placeholder="Enter ans3 " aria-describedby="sizing-addon1" name = "ans3[<?php echo $a; ?>]">
    <input type="text" class="form-control" placeholder="Enter ans4 " aria-describedby="sizing-addon1" name = "ans4[<?php echo $a; ?>]">
    <input type="text" class="form-control" placeholder="Enter true_ans " aria-describedby="sizing-addon1" name = "true_ans[<?php echo $a; ?>]">
  </div>
<?php } ?>
 <?php  echo '<input type= "submit" name="submit_q" value="submit" \> '; ?>
  
</form>



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


