<?php
$con = mysqli_connect("localhost","root","","db");
if(!$con)
die("Connection cannot be made". mysqli_connect_error());
$sql = "SELECT * FROM student ";
	    $result = mysqli_query($con, $sql);
      $row = mysqli_fetch_assoc($result);
     
?>
<html>
<body>
<table width="400" border="1"  >
<tr>
    <th>ID </th>
    <th>Name</th>		
    <th>Admission num.</th>
  	<th>Branch</th>		
    <th>Mail-ID</th>		
    <th>Marks</th>		
    </tr>
</table>
</body>
</html>
<?php
$query = "SELECT *  FROM student";
  $result = mysqli_query($con, $sql);
      
while($data = mysqli_fetch_assoc ($result)){
$name = $data['s_name'];
$id= $data['s_id'];
$ad= $data['s_admno'];
$br= $data['branch'];
$m= $data['s_mail'];
?>
<html>
<head>
</head>
<body>

<table width="400" border="1"  >
  
  <tr>
    <td><?php echo $id ?></td>
    <td><?php echo $name ?></td>
    <td><?php echo $ad ?></td>
    <td><?php echo $br ?></td>
    <td><?php echo $m ?></td>
    <td>&nbsp;</td>
	<?php } ?>
    
  </tr>
</table>
</body>