<?php
require('ctr/login.php');
?>
<style>
		.std{
			color:#3399FF;
			}
  	  .teach{ color:#CC0066;
	  }
	  h4, .close {
      background-color: #5cb85c;
      color:white !important;
      text-align: center;
      font-size: 30px;
  }
  .modal-footer {
      background-color: #f9f9f9;
  }
  .a{
	  color:#06F;}
  </style>

<header id="header">
  <!-- BEGIN MENU -->
  <div class="menu_area">
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">  <div class="container">
        <div class="navbar-header">
          <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- LOGO -->
          <!-- TEXT BASED LOGO -->
          <a class="navbar-brand" href="index.php">WpF <span>Degree</span></a>              
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
            <li class="active"><a href="index.php">Home</a></li>
            <li><a href="tests.php">Exams</a></li>
            <!--<li><a href="results.php">Results</a></li>-->
            <li><a href="register.php">Register</a></li>
            <li><a href="contact.php">Contact</a></li>
            <!--<li><a href="gallery.html">Gallery</a></li>                
            <li><a href="blog-archive.html">Blog</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Page<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="404.html">404 Page</a></li>
                <li><a href="#">Link Two</a></li>
                <li><a href="#">Link Three</a></li>               
              </ul>
            </li>-->    
            <!-- Button trigger modal -->
            <li data-toggle="modal" data-target="#myModal"><a href="<?php echo $link; ?>"><?php echo $name; ?></a></li>
            <!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <!--<h4 class="modal-title" id="myModalLabel">Sign In as Teacher or Student</h4>-->
                    <ul class="nav nav-tabs" role="tablist">
                      <li role="presentation" class="active"><a href="#student" aria-controls="home" role="tab" data-toggle="tab" class="std">Student</a></li>
                      <li role="presentation"><a href="#teacher" aria-controls="profile" role="tab" data-toggle="tab" class="teach">Teacher</a></li>
                    </ul>
					<?php if($error!=""){
                      echo '<div class="alert alert-danger alert-dismissible" role="alert">';
                      echo '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
                      echo '<strong>'.$error.'</strong>';
                      echo '</div>';
                      }
                    ?>
                  </div>
                  <div class="modal-body">
                    
                    <div class="tab-content">
                      <div role="tabpanel" class="tab-pane fade in active" id="student" >
                        <!-- student form-->
                        <form action="index.php" method="post" autocomplete="off">
                          <div class="form-group">
                            <label for="name" class="control-label"><span class="glyphicon glyphicon-user"></span> &nbsp;&nbsp;Name:</label>
                            <input name="name" type="text" class="form-control" id="name" onkeyup="s_showHint(this.value)" autocomplete="off">
                          </div>
                          <p id="student_hint"></p>
                          <div class="form-group">
                            <label for="password" class="control-label"><span class="glyphicon glyphicon-eye-open"></span> &nbsp;&nbsp;Password:</label>
                            <input name="password" type="password" class="form-control" id="password">
                          </div>
                          <input name="check" value="st" type="hidden">
                                       <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Login</button>
</form>
                      </div>
                      <div role="tabpanel" class="tab-pane fade" id="teacher" >
                        <!-- teacher form-->
                        <form action="index.php" method="post">
                          <div class="form-group">
                            <label for="name" class="control-label"><span class="glyphicon glyphicon-user"></span> &nbsp;&nbsp;Name:</label>
                            <input name="name" type="text" class="form-control" id="name" onkeyup="t_showHint(this.value)">
                          </div>
                          <p id="teacher_hint"></p>
                          <div class="form-group">
                            <label for="password" class="control-label"><span class="glyphicon glyphicon-eye-open"></span> &nbsp;&nbsp;Password:</label>
                            <input name="password" type="password" class="form-control" id="password">
                          </div>
                          <input name="check" value="te" type="hidden">
                                    <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Login</button>
  </form>
                      </div>
                    </div>
                  </div>
                <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>

          <p>Not a member? <a href="#">Sign Up</a></p>
          <p>Forgot <a href="#">Password?</a></p>
        </div>
                </div>
              </div>
            </div>
          </ul>           
        </div><!--/.nav-collapse -->
      </div>     
    </nav>  
  </div>
  <!-- END MENU -->    
</header>