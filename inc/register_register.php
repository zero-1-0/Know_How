<section id="contact">
  <div class="container">
  <div class="container">
  
<div class="container-fluid">
<div class="row" style="margin-top:80px">
         <div class="col-sm-2" ></div>
    <div class="col-sm-8" style="background-color:lavenderblush;"><ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Teacher</a></li>
    <li><a data-toggle="tab" href="#menu1">Student</a></li>
    </ul> <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
     <form class="submitphoto_form" id="myForm"  action="ctr/temp.php" onsubmit="return validateForm()" method="post">
                <input type="text"  id="field_username" class="wp-form-control wpcf7-text" placeholder="Your name" name="t_name" required pattern="[a-zA-Z]+">
				<input type="text" class="wp-form-control wpcf7-text" placeholder="Teacher Id" name="t_clg_id" required>
                <input type="email" class="wp-form-control wpcf7-email" placeholder="Email address" name="tmail" required>          
                <input type="text" class="wp-form-control wpcf7-text" placeholder="Departement" name="t_dept" required>       
                <input type="password" title="Password must contain at least 6 characters, including UPPER/lowercase and numbers" class="wp-form-control wpcf7-text" placeholder="Password" name="pwd1" required pattern="(?=.*\d)(?=.*[a-z])().{6,}">
                <input type="password" id="field_pwd2" title="Please enter the same Password as above" class="wp-form-control wpcf7-text" placeholder="Confirm Password" name="pwd2" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}">
                <input type="submit" value="Submit" class="wpcf7-submit">
              </form>
          </div>
        <div id="menu1" class="tab-pane fade">
     <form class="submitphoto_form" id="myForm"  action="ctr/temp_s.php" onsubmit="return validateForm()" method="post">
                <input type="text"  id="field_username" class="wp-form-control wpcf7-text" placeholder="Your name as Login Id" name="s_name" required pattern="[a-zA-Z]+">
                <input type="text" class="wp-form-control wpcf7-text" placeholder="Admission Number" name="s_admno" required>
                <input type="email" class="wp-form-control wpcf7-email" placeholder="Email address" name="s_mail" required>       
                <input type="text" class="wp-form-control wpcf7-text" placeholder="Branch" name="branch" required>          
                <input type="password" title="Password must contain at least 6 characters, including UPPER/lowercase and numbers" class="wp-form-control wpcf7-text" placeholder="Password" name="pwd1" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}">
                <input type="password" title="Password must contain at least 6 characters, including UPPER/lowercase and numbers" class="wp-form-control wpcf7-text" placeholder="Confirm Password" name="pwd2" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}">
                <input type="submit" value="Submit" class="wpcf7-submit">
              </form>
</div>
</div></div>
 <div class="col-sm-2" ></div>
  </div>
</div>
 
</div>

      </div>
</section>