<?php
// This script performs an INSERT query that adds a record to the users table.
//extract($_POST);
//include("database.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {                                           
    $errors = array(); // Initialize an error array.
    // Was the first name entered?
    if (empty($_POST['t_name'])) {
$errors[] = 'You did not enter your name.';
    }
else { $fn = trim($_POST['t_name']);
    }
    // Was the last name entered?
    if (empty($_POST['t_clg_id'])) {
        $errors[] = 'You did not enter your id.';
    }
else { $ln = trim($_POST['t_clg_id']);
    }
    // Was an email address entered?
    if (empty($_POST['tmail'])) {
        $errors[] = 'You did not enter your email address.';
    }
else { $e = trim($_POST['tmail']);
    }
    // Did the two passwords match?                                                   
    if (!empty($_POST['pwd1'])) {
        if ($_POST['pwd1'] !== $_POST['pwd2']) {
        $errors[] = 'Your passwords were not the same.';
    }
else { $p = trim($_POST['pwd1']);
    }
    }
else { $errors[] = 'You did not enter your password.';
    }
//Start of the SUCCESSFUL SECTION. i.e all the fields were filled out
if (empty($errors)) { // If no problems encountered, register user in the database     
$con = mysqli_connect("localhost","root","","db");
if(!$con)
die("Connection cannot be made");
//require ('../inc/connect.php'); // Connect to the database.  
//echo 'hi';                          
// Make the query                                                                     
$q = "INSERT INTO teacher (teachr_id, t_name,t_clg_id, tmail, t_psw)
VALUES (' ', '$fn', '$ln', '$e', '$p')";                                 
$result = mysqli_query ($con, $q); // Run the query.                               
if ($result) { // If it ran OK.                 
header('location:../index.php?status=regsuccess');
exit();
}
else { // If the form handler or database table contained errors                       
// Display any error message
echo '<h2>System Error</h2>
<p class="error">You could not be registered due to a system error. We apologize for any image
inconvenience.</p>';
// Debug the message:
echo '<p>' . mysqli_error($con) . '<br><br>Query: ' . $q . '</p>';
} // End of if clause ($result)
    mysqli_close($con); // Close the database connection.
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
