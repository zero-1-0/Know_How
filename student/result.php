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


if($_SERVER["REQUEST_METHOD"] == "POST"){
  $e_id = validate($_POST["e_id"]);
  //$q_id = validate($_POST["q_id"]);
  $total_q = validate($_POST["total_q"]);
  //$no_ques = $_POST['no_ques'];
  $i=1;
  $uans=array();
  $uq=array();
  $marks=0;
  include_once('../mysqli_connect.php');
  for($i =1;$i<=$total_q;$i++ ){
    //echo "i : " .$i;
    $x= 'cse'.$i;
    $uq[$i]=$_POST[$x];
    //echo  " q_id : " . $uq[$i].'<br>';
    $y='cs'.$i;
    $uans[$i]=$_POST[$y];
    //echo "u_ans : " . $uans[$i].'<br>';
    $result1 = mysqli_query ($cn, "SELECT true_ans FROM question WHERE ques_id = '$uq[$i]' " );
    $row1 = @mysqli_fetch_array ($result1);
    $records1 = $row1[0];
    //echo $records1;
    
    if($records1==$uans[$i]){
        $marks++;
    }
    else{
      $marks = $marks - 0.25;
    }

  }
  //echo 'marks = '.$marks;

  $name = $_SESSION['tempName'];
  
  $var2 = mysqli_query($cn,"SELECT s_id FROM student WHERE s_name = '$name' ");
  $var3 = mysqli_fetch_assoc($var2);
  $var4 = $var3['s_id'];
  //echo $var3;
  
  //echo '<br>'.$name.'<br>';
  $sql="INSERT INTO result (r_pid,s_id,sub_id,u_marks,total)  VALUES (' ','$var4','$e_id','$marks','$total_q')";
  if(mysqli_query($cn,$sql)) {
    //echo 'success';
  }
  else {
    echo '<br>'.mysqli_error($cn).'<br>';
  }
  //echo $e_id.'<br>'.$total_q;

  
}
else {
} ?>


    <!--=========== BEGIN COURSE BANNER SECTION ================-->
    <!--=========== END COURSE BANNER SECTION ================-->

    <!--=========== BEGIN category SECTION ================-->
    
 <div class="container" class="space">

  <h2>Your Records</h2>
  <table class="table">
    <thead>
      <tr>
        <th>Name</th>
        <th>Subject</th>
        <th>Marks</th>
      </tr>
    </thead>
    <tbody>
      <tr class="success">
        <td><?php echo $name; ?> </td>
        <td><?php echo $e_id; ?></td>
        <td><?php echo $marks; ?></td>
    
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
