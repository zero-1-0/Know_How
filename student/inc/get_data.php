<?php
$con = mysqli_connect("localhost","root","","db");
if(!$con)
die("Connection cannot be made". mysqli_connect_error());
?>

<div class="container">
    <?php 
      if(!isset($name)){$name = $_SESSION['tempName']; }
      else { exit(); }
      $sql = "SELECT * FROM student WHERE s_name = '$name' ";
	    $result = mysqli_query($con, $sql);
      $row = mysqli_fetch_assoc($result);
      ?>        
  
</div>
  

<section id="contact">
  <div class="container">
   <div class="row" style="margin-top:80px">
      <div class="col-lg-12 col-md-12"> 
        <div class="title_area">
          <h2 class="title_two">Student Panel</h2>
          <span></span> 
          <p>Welcome to Student Panel.</p>
        </div>
      </div>
   </div>
   <div class="row">
     <div class="col-lg-2 col-md-2 col-sm-2"></div>
     <div class="col-lg-8 col-md-8 col-sm-8">
       <div class="contact_form wow fadeInLeft">
          <form class="submitphoto_form">
            <div class="row" style="margin-top: 0px">
              <div class="col-md-4">
                <br/><p>Name :</p>
              </div>
              <div class="col-md-8"><br>
                <p><?php echo  $row["s_name"]; ?></p>
              </div>
            </div>
            <div class="row" style="margin-top: 0px">
              <div class="col-md-4">
                <br/><p>Department :</p>
                </div>
              <div class="col-md-8">
              <br>
                <p><?php echo  $row["branch"]; ?></p> 
              </div>
            </div>
            <div class="row" style="margin-top: 0px">
              <div class="col-md-4">
                <br/><p>College ID :</p>
              </div>
              <div class="col-md-8"><br>
                <?php echo  $row["s_admno"]; ?>
              </div>
            </div>
            <div class="row" style="margin-top: 0px">
              <div class="col-md-4">
                <br/><p>E-mail :</p>
              </div>
              <div class="col-md-8"><br>
                <?php echo  $row["s_mail"]; ?>
              </div>
            </div>
            <div class="row" style="margin-top: 0px">
              <div class="col-md-4">
                <br/><p>Password :</p>
              </div>
              <div class="col-md-8"><br>
                <?php echo  $row["s_psw"]; ?>
              </div>
            </div>
            
              </div>
            </div>
            
          </form>
       </div>
     </div>
     <div class="col-lg-2 col-md-2 col-sm-2"></div>
   </div>
  </div>
</section>
