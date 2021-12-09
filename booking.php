<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
    $connection= mysqli_connect('localhost','root','','vehicle requisition');


    $username= $_SESSION['username'];
    //echo $username;
    
    $query= "SELECT  `First_name`, `Last_name`, `Email` FROM `user` WHERE username='$username'";
    $result= mysqli_query($connection,$query);
    
    $row= mysqli_fetch_assoc($result);
    //$name= $row['first_name']." ". $row['last_name'];
   // echo $name;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Request a Vehicle</title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
     <link rel="stylesheet" href="css/wickedpicker.min.css">
    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
    
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
    
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
     <link rel="stylesheet" href="sweetalert2/sweetalert2.css">
    <script src="sweetalert2/sweetalert2.min.js"></script>
    
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="js/wickedpicker.min.js"></script>
    <link rel="stylesheet" href="animate.css">
    <link rel="stylesheet" href="style.css">
</head>
<style>
    .navbar-fixed-top.scrolled {
   background-color: ghostwhite;
  transition: background-color 200ms linear;
}    
</style>

<body>
    <?php include 'navbar.php'; ?>
    <br>
    <div class="container">
        <div class="row">
            <div class="page-header">
                <h1 style="text-align:center;">Request a Vehicle</h1>
                 <?php //echo $msg; ?>
            </div>
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <form class="animated bounce" action="bookingaction.php" method="post">
                   
                    <div class="input-group">
                      <span class="input-group-addon"><b>Name</b></span>
                        <label for="Name"></label><input id="Name" type="text" class="form-control" name="Name" value="<?php echo $row['First_name']." ". $row['Last_name']; ?>" required>
                    </div>
                    
                    <br>
                    <div class="input-group">
                      <span class="input-group-addon"><b>Department</b></span>
                      <select name="department" class="form-control" placeholder="department" required>
                        <option value="">Select...</option>
                          <option value="General Program">General Program</option>
                        <option value="Department of Computer Engineering">Department of Computer Engineering</option>
                        <option value="Department of Electrical and Electronic Engineering">Department of Electrical and Electronic Engineering</option>
                        <option value="Department of Interdisciplinary Studies">Department of Interdisciplinary Studies</option>
                        <option value="Department of Civil Engineering">Department of Civil Engineering</option>
                      </select>
                      <!-- <input id="department" type="text" class="form-control" name="department" placeholder="department" required> -->
                    </div>
                    <br>
                    <div class="input-group">
                      <span class="input-group-addon"><b>Vehicle Type</b></span> &nbsp;
                      <label><input type="checkbox" name="type" value="van">Van</label>
                      <label><input type="checkbox" name="type" value="bus">Bus</label>
                    </div>
                    <br>

                    <div class="input-group">
                        <span class="input-group-addon"><b>Number of Days</b></span>
                        <input id="No_of_days" type="int" class="form-control" name="No_of_days" required>
                    </div>

                    <div class="input-group">
                      <span class="input-group-addon"><b>Date of Requirement</b></span>
                      <input id="Start_date" type="text" class="form-control" name="Start_date" placeholder="Day the car is needed" required>
                      <input type="text" name="Start_time" id="Start_time" class="form-control"/>
                      
                    </div>
                    
                    <script>
                      $( function() {
                        $( "#Start_date" ).datepicker();
                        $("#Start_time").wickedpicker();
                        
                      } );
                    </script> 
                    <br>
                    
                    <div class="input-group">
                      <span class="input-group-addon"><b>Date of Return</b></span>
                      <input id="Return_date" type="text" class="form-control" name="Return_date" placeholder="Day the car is returned" required>
                      <input type="text" name="Return_time" id="Return_time" class="form-control"/>
                    </div>
                    
                    <script>
                      $( function() {
                        $( "#Return_date" ).datepicker();
                        $( "#Return_time" ).wickedpicker();
                      } );
                    </script>
                    <br>
                    
                    <div class="input-group">
                      <span class="input-group-addon"><b>Destination</b></span>
                      <input id="Destination" type="text" class="form-control" name="Destination" placeholder="Car Destination" required>
                    </div>
                    <br>

                    <div class="input-group">
                        <span class="input-group-addon"><b>Designation</b></span>
                        <input id="Designation" type="text" class="form-control" name="Designation" required>
                    </div>
                    
                    <div class="input-group">
                      <span class="input-group-addon"><b>Pickup Point</b></span>
                      <input id="Pickup_point" type="text" class="form-control" name="Pickup_point" placeholder="pickup">
                    </div>
                    <br>
                    
                    <div class="input-group">
                      <span class="input-group-addon"><b>Reason for booking</b></span>
                      <input id="reasons" type="text" class="form-control" name="reasons" placeholder="Reason of booking the vehicle">
                    </div>
                    <br>
                    
                    <div class="input-group">
                      <span class="input-group-addon"><b>Email</b></span>
                      <input id="Email" type="email" class="form-control" name="Email" value="<?php echo $row['email']; ?>" required>
                    </div>
                    <br>
                    
                    <div class="input-group">
                      <span class="input-group-addon"><b>Mobile</b></span>
                      <input id="Mobile" type="text" class="form-control" name="Mobile" placeholder="Mobile No" required>
                    </div>
                    <br>
                    
                    <input type="hidden" name="username" value="<?php echo $username; ?>">
                    
                    <div class="input-group">
                        <input type="submit" name="submit" class="btn btn-success">
                    </div>
                     
                    
                </form>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
    
<script>
    $(function () {
  $(document).scroll(function () {
    var $nav = $(".navbar-fixed-top");
    $a= $(".navbar-fixed-top");
    $nav.toggleClass('scrolled', $(this).scrollTop() > $a.height());
  });
}); 
    
</script>  
</body>
</html>