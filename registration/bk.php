<?php
// This script performs an INSERT query that adds a record to the users table.
if ($_SERVER['REQUEST_METHOD'] == 'POST') {                                            #1
    $errors = array(); // Initialize an error array.
    // Was the first name entered?
    if (empty($_POST['username'])) {
$errors[] = 'You did not enter your name.';
    }
else { $fn = trim($_POST['username']);
    }
    // Was the last name entered?
    if (empty($_POST['tid'])) {
        $errors[] = 'You did not enter your id.';
    }
else { $ln = trim($_POST['tid']);
    }
    // Was an email address entered?
    if (empty($_POST['tmail'])) {
        $errors[] = 'You did not enter your email address.';
    }
else { $e = trim($_POST['tmail']);
    }
    // Did the two passwords match?                                                   #2
    if (!empty($_POST['pwd1'])) {
        if ($_POST['pwd1'] != $_POST['pwd2']) {
        $errors[] = 'Your passwords were not the same.';
    }
else { $p = trim($_POST['pwd1']);
    }
    }
else { $errors[] = 'You did not enter your password.';
    }
//Start of the SUCCESSFUL SECTION. i.e all the fields were filled out
if (empty($errors)) { // If no problems encountered, register user in the database     #3
require ('mysqli_connect.php'); // Connect to the database.                            #4
// Make the query                                                                      #5
$q = "INSERT INTO users (user_id, username, tid, tmail, pwd)
VALUES (' ', '$fn', '$ln', '$e', SHA1('$p'))";                                 #6
$result = @mysqli_query ($dbcon, $q); // Run the query.                                #7
if ($result) { // If it ran OK.                                                        #8
...header ("location: register-thanks.php");                                           #9
exit();                                                                                #10
//End of SUCCESSFUL SECTION
...}
else { // If the form handler or database table contained errors                       #11
// Display any error message
....echo '<h2>System Error</h2>
<p class="error">You could not be registered due to a system error. We apologize for any image
inconvenience.</p>';
// Debug the message:
....echo '<p>' . mysqli_error($dbcon) . '<br><br>Query: ' . $q . '</p>';
} // End of if clause ($result)
    mysqli_close($dbcon); // Close the database connection.
    // Include the footer and quit the script:
    exit();
    }
else { // Display the errors
        echo '<h2>Error!</h2>
        <p class="error">The following error(s) occurred:<br>';
        foreach ($errors as $msg) { // Print each error.                             #12
            echo " - $msg<br>\n";
    }
        echo '</p><h3>Please try again.</h3><p><br></p>';
    }// End of if (empty($errors)) IF.
   } // End of the main Submit conditional.
?>
<h2>Register</h2>                                                                    #13
<!--display the form on the screen-->
<form action="register-page.php" method="post">
<p><label class="label" for="fname">First Name:</label>image
<input id="fname" type="text" name="fname" size="30" maxlength="30" image
value="<?php if (isset($_POST['fname'])) echo $_POST['fname']; ?>"></p>
<p><label class="label" for="lname">Last Name:</label>image
<input id="lname" type="text" name="lname" size="30" maxlength="40" image
value="<?php if (isset($_POST['lname'])) echo $_POST['lname']; ?>"></p>
<p><label class="label" for="email">Email Address:</label>image
<input id="email" type="text" name="email" size="30" maxlength="60" image
value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>" > </p>
<p><label class="label" for="psword1">Password:</label>image
<input id="psword1" type="password" name="psword1" size="12" maxlength="12" image
value="<?php if (isset($_POST['psword1'])) echo $_POST['psword1']; ?>" >&nbsp; image
Between 8 and 12 characters.</p>
<p><label class="label" for="psword2">Confirm Password:</label>image
<input id="psword2" type="password" name="psword2" size="12" maxlength="12" image
value="<?php if (isset($_POST['psword2'])) echo $_POST['psword2']; ?>" ></p>
<p><input id="submit" type="submit" name="submit" value="Register"></p>
</form><!-- End of the page content. -->
<?php include ('footer.php'); ?></p>
</div>
</div>
</body>
</html>