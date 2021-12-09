<?php
    $connection= mysqli_connect("localhost","root","","vehicle requisition");
    
    session_start();

    $veh_id= $_GET['busid']; 

    $sql= "SELECT * FROM `vehicle` WHERE Vehicle_id='$veh_id' or Vehicle_Registration_No='$veh_id'";
    $res= mysqli_query($connection,$sql);
    $row= mysqli_fetch_assoc($res);

    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Vehicle Requisition System</title>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">

</head>
<div>
  
   <?php  include 'navbar.php';?>
   <div class="container" style="margin-top: 20px; margin-bottom: 20px;">
	
   
</div>
       
        <div class="container">
          <div class="row"> 
          <div class="fb-profile-text" id="h1" >
                            <h2><?php echo $row['Vehicle_Registration_No']; ?></h2>
            </div>
            <hr>
           <div class="col-sm-3">
                   <div class="fb-profile">
                        <img height="250" width="250" align="left" class="fb-image-profile thumbnail userpic" src="vehicle picture/<?php echo $row['Vehicle photo'] ?>" alt="dp"/>
                        
                    </div>
           </div> 
           
           <div class="col-sm-9">
               <div data-spy="scroll" class="tabbable-panel">
                <div class="tabbable-line">
                  <ul class="nav nav-tabs ">
                    <li class="active">
                      <a href="#tab_default_1" data-toggle="tab">
                      About Vehicle </a>
                    </li>

                  </ul>
                  <div class="tab-content">
                    <div class="tab-pane active" id="tab_default_1">

                     <h4><strong>Brand</strong></h4>
                      <p><?php echo $row['Brand']; ?></p>
                      
                      <h4><strong>Color</strong></h4>
                      <p><?php echo $row['Vehicle_Color']; ?></p>
                      
                      <h4><strong>Registration No</strong></h4>
                      <p>
                        <?php echo $row['Vehicle_Registration_No']; ?>
                      </p>

                      <h4><strong>Type</strong></h4>
                      <p><?php echo $row['Vehicle Type']; ?></p>

                      
                      <h4><strong>Vehicle Registration Date</strong></h4>
                      <p><?php echo $row['Vehicle Registration Date']; ?></p>
                      
                      <h4><strong>Description</strong></h4>
                      <p><?php echo $row['Description']; ?></p>

                    </div>
                  </div>
                </div>
              </div>
           </div>
          </div>
        </div>
      </div>

        <div class="container">
          <div class="col-sm-12"> 
              
          </div>
    </div>
</html>




