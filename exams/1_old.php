<?php 
  include('mysqli_connect.php');
?>
    <div class="container-fluid">
  <hr>
  <div class="row" style="margin-top : 80px">
    <div class="col-md-2">
      
      <!-- menu -->
      <div id="MainMenu">
        <div class="list-group panel">
          <a href="#demo1" class="list-group-item list-group-item-success" data-toggle="collapse" data-parent="#MainMenu"><p><span>Computer  </span></p>
                     <i class="fa fa-caret-down"></i></a>
          <div class="collapse" id="demo1">
               
            <?php 
                        $result=mysqli_query($cn,"SELECT * FROM examinfo WHERE sub_id LIKE 'cs%'");
                        $i=1;
                        while($row = mysqli_fetch_array($result)) {
                          echo '<a href="exm_1.php?set=cs'.$i.'" class="list-group-item">'.$row['test_name'].'</a>';
                          $i++;
                      }
                      if(isset($_SESSION['tempLvl']) and $_SESSION['tempLvl']==1){
                        echo '<a href="exm_1.php?add=cs" class="list-group-item">ADD</a>';
                        echo '<a href="exm_1.php?del=cs" class="list-group-item">DELETE</a>';
                       }
                      

                    ?>
          </div>
          <a href="#demo2" class="list-group-item list-group-item-success" data-toggle="collapse" data-parent="#MainMenu"><p><span>Civil  </span></p>
                     <i class="fa fa-caret-down"></i></a>
          <div class="collapse" id="demo2">
               
            <?php 
                        $result=mysqli_query($cn,"SELECT * FROM examinfo WHERE sub_id LIKE 'ce%'");
                        $i=1;
                        while($row = mysqli_fetch_array($result)) {
                          echo '<a href="exm_1.php?set=cs'.$i.'" class="list-group-item">'.$row['test_name'].'</a>';
                          $i++;
                      }
                      if(isset($_SESSION['tempLvl']) and $_SESSION['tempLvl']==1){
                      echo '<a href="exm_1.php?add=ce" class="list-group-item">ADD</a>';
                          echo '<a href="exm_1.php?del=ce" class="list-group-item">DELETE</a>';
                      }
                      
                    ?>
          </div>
          <a href="#demo3" class="list-group-item list-group-item-success" data-toggle="collapse" data-parent="#MainMenu"><p><span>Electrical  </span></p>
                     <i class="fa fa-caret-down"></i></a>
          <div class="collapse" id="demo3">
               
            <?php 
                        $result=mysqli_query($cn,"SELECT * FROM examinfo WHERE sub_id LIKE 'ec%'");
                        $i=1;
                        while($row = mysqli_fetch_array($result)) {
                          echo '<a href="exm_1.php?set=cs'.$i.'" class="list-group-item">'.$row['test_name'].'</a>';
                          $i++;
                      }
                      if(isset($_SESSION['tempLvl']) and $_SESSION['tempLvl']==1){
                       echo '<a href="exm_1.php?add=eee" class="list-group-item">ADD</a>';
                          echo '<a href="exm_1.php?del=eee" class="list-group-item">DELETE</a>';
                      }
                      
                    ?>
          </div>
          <a href="#demo4" class="list-group-item list-group-item-success" data-toggle="collapse" data-parent="#MainMenu"><p><span>Electronics </span></p>
                     <i class="fa fa-caret-down"></i></a>
          <div class="collapse" id="demo4">
               
            <?php 
                        $result=mysqli_query($cn,"SELECT * FROM examinfo WHERE sub_id LIKE 'ee%'");
                        $i=1;
                        while($row = mysqli_fetch_array($result)) {
                          echo '<a href="exm_1.php?set=cs'.$i.'" class="list-group-item">'.$row['test_name'].'</a>';
                          $i++;
                      }
                      if(isset($_SESSION['tempLvl']) and $_SESSION['tempLvl']==1){
                       echo '<a href="exm_1.php?add=ec" class="list-group-item">ADD</a>';
                         echo '<a href="exm_1.php?del=ec" class="list-group-item">DELETE</a>';
                      }
                      
                    ?>
          </div><a href="#demo5" class="list-group-item list-group-item-success" data-toggle="collapse" data-parent="#MainMenu"><p><span>I T   </span></p>
                     <i class="fa fa-caret-down"></i></a>
          <div class="collapse" id="demo5">
               
            <?php 
                       $result=mysqli_query($cn,"SELECT * FROM examinfo WHERE sub_id LIKE 'it%'");
                          $i=1;
                        while($row = mysqli_fetch_array($result)) {
                          echo '<a href="exm_1.php?set=cs'.$i.'" class="list-group-item">'.$row['test_name'].'</a>';
                          $i++;
                      }
                      if(isset($_SESSION['tempLvl']) and $_SESSION['tempLvl']==1){
                       echo '<a href="exm_1.php?add=it" class="list-group-item">ADD</a>';
                         echo '<a href="exm_1.php?del=it" class="list-group-item">DELETE</a>';
                      }
                      
                    ?>
          </div>
          <a href="#demo6" class="list-group-item list-group-item-success" data-toggle="collapse" data-parent="#MainMenu"><p><span>Mechanical  </span></p>
                     <i class="fa fa-caret-down"></i></a>
          <div class="collapse" id="demo6">
               
            <?php 
                        $result=mysqli_query($cn,"SELECT * FROM examinfo WHERE sub_id LIKE 'me%'");
                       $i=1;
                        while($row = mysqli_fetch_array($result)) {
                          echo '<a href="exm_1.php?set=cs'.$i.'" class="list-group-item">'.$row['test_name'].'</a>';
                          $i++;
                      }
                      if(isset($_SESSION['tempLvl']) and $_SESSION['tempLvl']==1){
                       echo '<a href="exm_1.php?add=me" class="list-group-item">ADD</a>';
                         echo '<a href="exm_1.php?del=me" class="list-group-item">DELETE</a>';
                      }
                      
                    ?>
               
          
          </div>
      </div>
    </div>
  </div>
     <div class="col-md-8">
  
 
 <?php 
 if(isset($_SESSION['tempLvl']) and (($_SESSION['tempLvl']==1) or ($_SESSION['tempLvl']==0))){

      include ('get_ques.php');  
 }
 ?>     

</div>
</div>
</div>