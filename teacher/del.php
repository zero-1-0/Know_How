<?php echo "hi teacher";

$e_id = $_GET['del'];
      
?>
<form action = "teacher/inc/del_temp.php" method= "POST">
	        
    <div class="input-group">
	  <span class="input-group-addon" id="basic-addon1">#</span>
	  <input type="text" class="form-control" placeholder=" Enter name of test to be deleted" aria-describedby="basic-addon1" name ="del_e">
	</div>
	<br><br><br>
	
 <?php  echo '<input type= "submit" name="submit" value="submit" \> '; ?>
	
</form>