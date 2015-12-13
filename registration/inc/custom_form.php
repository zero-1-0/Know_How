<script type="text/javascript">

  document.addEventListener("DOMContentLoaded", function() {
    var checkPassword = function(str)
    {
      var re = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}$/;
      return re.test(str);
    };

    var checkForm = function(e)
    {
      if(this.username.value == "") {
        alert("Error: Username cannot be blank!");
        this.username.focus();
        e.preventDefault(); // equivalent to return false
        return;
      }
      re = /^\w+$/;
      if(!re.test(this.username.value)) {
        alert("Error: Username must contain only letters, numbers and underscores!");
        this.username.focus();
        e.preventDefault();
        return;
      }
      if(this.pwd1.value != "" && this.pwd1.value == this.pwd2.value) {
        if(!checkPassword(this.pwd1.value)) {
          alert("The password you have entered is not valid!");
          this.pwd1.focus();
          e.preventDefault();
          return;
        }
      } else {
        alert("Error: Please check that you've entered and confirmed your password!");
        this.pwd1.focus();
        e.preventDefault();
        return;
      }
      alert("Both username and password are VALID!");
    };

    var myForm = document.getElementById("myForm");
    myForm.addEventListener("submit", checkForm, true);

    // HTML5 form validation

    var supports_input_validity = function()
    {
      var i = document.createElement("input");
      return "setCustomValidity" in i;
    }

    if(supports_input_validity()) {
      var usernameInput = document.getElementById("field_username");
      usernameInput.setCustomValidity(usernameInput.title);

      var pwd1Input = document.getElementById("field_pwd1");
      pwd1Input.setCustomValidity(pwd1Input.title);

      var pwd2Input = document.getElementById("field_pwd2");

      // input key handlers

      usernameInput.addEventListener("keyup", function() {
        usernameInput.setCustomValidity(this.validity.patternMismatch ? usernameInput.title : "");
      }, false);

      pwd1Input.addEventListener("keyup", function() {
        this.setCustomValidity(this.validity.patternMismatch ? pwd1Input.title : "");
        if(this.checkValidity()) {
          pwd2Input.pattern = this.value;
          pwd2Input.setCustomValidity(pwd2Input.title);
        } else {
          pwd2Input.pattern = this.pattern;
          pwd2Input.setCustomValidity("");
        }
      }, false);

      pwd2Input.addEventListener("keyup", function() {
        this.setCustomValidity(this.validity.patternMismatch ? pwd2Input.title : "");
      }, false);

    }

  }, false);

</script>
<?php
// This script performs an INSERT query that adds a record to the users table.
if ($_SERVER['REQUEST_METHOD'] == 'POST') {                                           
    $errors = array(); // Initialize an error array.
    // Was the first name entered?
     $fn = trim($_POST['username']);
    // Was the last name entered?
     $ln = trim($_POST['tid']);
    // Was an email address entered?
     $e = trim($_POST['tmail']);
    // Did the two passwords match?                                                   
    if ($_POST['pwd1'] != $_POST['pwd2']) {
        $errors[] = 'Your passwords were not the same.';
    }
else { $p = trim($_POST['pwd1']);
    }
//Start of the SUCCESSFUL SECTION. i.e all the fields were filled out
require ('mysqli_connect.php'); // Connect to the database.                            
// Make the query                                                                     
$q = "INSERT INTO teacher(t_name, t_id, tmail, t_pwd)
VALUES ('$fn', '$ln', '$e', SHA1('$p'))";                                 
$result = @mysqli_query ($dbcon, $q); // Run the query.                               
if ($result) { // If it ran OK.                 
echo ("great");                                       
exit();
}
else { // If the form handler or database table contained errors                       
// Display any error message
echo '<h2>System Error</h2>
<p class="error">You could not be registered due to a system error. We apologize for any image
inconvenience.</p>';
// Debug the message:
echo '<p>' . mysqli_error($dbcon) . '<br><br>Query: ' . $q . '</p>';
} // End of if clause ($result)
    mysqli_close($dbcon); // Close the database connection.
    // Include the footer and quit the script:
    exit();
    }
else { // Display the errors
        echo '<h2>Error!</h2>
        <p class="error">The following error(s) occurred:<br>';
        foreach ($errors as $msg) { // Print each error.                             
            echo " - $msg<br>\n";
    }
        echo '</p><h3>Please try again.</h3><p><br></p>';
    }// End of if (empty($errors)) IF.
   } // End of the main Submit conditional.
?>

<section id="contact">
  <div class="container">
  <div class="container">
  
<div class="container-fluid">
 <div class="row">
 <div class="col-sm-2" ></div>
    <div class="col-sm-8" style="background-color:lavenderblush;"><ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
    <li><a data-toggle="tab" href="#menu1">Menu 1</a></li>
    </ul> <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
     <form class="submitphoto_form" id="myForm"  action="demo_form.asp" onsubmit="return validateForm()" method="post">
                <input type="text"  id="field_username" class="wp-form-control wpcf7-text" placeholder="Your name" name="username" required pattern="\w+" image value="<?php if (isset($_POST['fname'])) echo $_POST['fname']; ?>"><input type="text" class="wp-form-control wpcf7-text" placeholder="Teacher Id" name="tid" required>
                <input type="email" class="wp-form-control wpcf7-email" placeholder="Email address" name="tmail" required>          
                <input type="text" class="wp-form-control wpcf7-text" placeholder="Departement" name="tdept" required>       
                <input type="password" title="Password must contain at least 6 characters, including UPPER/lowercase and numbers" class="wp-form-control wpcf7-text" placeholder="Password" name="pwd1" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}">
                <input type="password" id="field_pwd2" title="Please enter the same Password as above" class="wp-form-control wpcf7-text" placeholder="Confirm Password" name="pwd2" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}">
                <input type="submit" value="Submit" class="wpcf7-submit">
              </form>
          </div>
        <div id="menu1" class="tab-pane fade">
     <form class="submitphoto_form">
                <input type="text"  id="field_username" class="wp-form-control wpcf7-text" placeholder="Your name as Login Id" name="username" required pattern="\w+">
                <input type="text" class="wp-form-control wpcf7-text" placeholder="Admission Number" name="sadmno" required>
                <input type="email" class="wp-form-control wpcf7-email" placeholder="Email address" name="smail" required>       
                <input type="text" class="wp-form-control wpcf7-text" placeholder="Branch" name="sbranch" required>          
                <input type="password" title="Password must contain at least 6 characters, including UPPER/lowercase and numbers" class="wp-form-control wpcf7-text" placeholder="Password" name="pwd1" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}">
                <input type="password" title="Password must contain at least 6 characters, including UPPER/lowercase and numbers" class="wp-form-control wpcf7-text" placeholder="Confirm Password" name="pwd1" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}">
                
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