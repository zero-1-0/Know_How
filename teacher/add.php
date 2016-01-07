<?php echo "hi teacher";

$e_id = $_GET['add'];
      $result = mysqli_query ($cn, "SELECT COUNT(sub_id) FROM examinfo WHERE sub_id LIKE  '$e_id%' " );
      $row = @mysqli_fetch_array ($result); 
      $records = $row[0]+1;
      $records = $e_id.$records;
      echo $records;
      if(isset($foo)){
      		$foo= $_GET['foo'];
      		echo $foo;	
      }
      
?>
<form action = "teacher/add_e_entry.php" method= "POST">
	  <?php echo '<input type="hidden" name = "sub_id" value= "'.$records.'" /> '; ?>
            
    <div class="input-group">
	  <span class="input-group-addon" id="basic-addon1">Details</span>
	  <input type="text" class="form-control" onkeyup="checkTest(this.value)" required placeholder=" Enter name for test" aria-describedby="basic-addon1" name ="e_id">
	  <input type="text" class="form-control" required placeholder=" Enter total questions" aria-describedby="basic-addon1" name = "total_q"> 
	  <input type="text" class="form-control" required placeholder=" Enter time limit (if required)" aria-describedby="basic-addon1" name = "time_limit"> 
    </div>
    <p id="test_name"></p>
    <button type="submit" class="btn btn-default">Submit</button>
</form>
