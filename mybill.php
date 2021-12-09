<?php 
    if(!isset($_SESSION)) 
    {   
        
        session_start(); 
    } 
    
    $username= $_GET['id'];
    //echo $username;
    
    $connection= mysqli_connect('localhost','root','','vehicle requisition');

    $query= "SELECT Trip.Trip_No, Trip.Start_date,Trip.`Return_date`, Trip.`Destination`, Trip.`Vehicle_Regisitration_No`, Trip.`Driverid`, tripcost.Total_km,tripcost.Oil_cost, tripcost.Extra_cost,tripcost.Total_cost,tripcost.paid FROM `Trip` LEFT JOIN `tripcost` ON Trip.username=tripcost.username WHERE Trip.username='$username' AND Trip.Trip_No=tripcost.Trip_No;";

    //echo $query;

    $result= mysqli_query($connection,$query);
    
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bill</title>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
     <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
    <link rel="stylesheet" type="text/css" href="./slick/slick.css">
    <link rel="stylesheet" type="text/css" href="./slick/slick-theme.css"> 
   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="animate.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include 'navbar.php'; ?>
    
    <div class="container">
        <div class="row">
            <div class="page-header">
                <h1 style="text-align: center;">My Bill</h1>
            </div>
        </div>
        
        
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <tr>
                        <th>Booking Id</th>
                        <th>Requested Date</th>
                        <th>Return Date</th>
                        <th>Destination</th>
                        <th>Vehicle Registration</th>
                        <th>Driver</th>
                        <!-- <th>Total Km</th>
                        <th>Oil Cost</th>
                        <th>Extra Cost</th>
                        <th>Total Cost</th>
                        <th>Paid</th> -->
                    </tr>  
                </thead>

                <tbody>
<?php
    while($row=mysqli_fetch_assoc($result)) {
                
?>
                    <tr>
                        <td><?php echo $row['Trip_No']; ?></td>
                        <td><?php echo $row['Start_date']; ?></td>
                        <td><?php echo $row['Return_date']; ?></td>
                        <td><?php echo $row['Destination']; ?></td>
                        <td><a href="busprofile.php?busid=<?php echo $row['Vehicle_Registration_No'] ?>"><?php echo $row['Vehicle_Registration_No'] ?></a></td>
                        <td><a href="driverprofile.php?driverid=<?php echo $row['Driverid'] ?>"><?php echo $row['Driverid'] ?></a></td>
                        
                        <td><?php echo $row['Total_km']; ?></td>
                        <!-- <td><?php echo $row['Oil_cost']; ?></td>
                        <td><?php echo $row['Extra_cost']; ?></td>
                        <td><?php echo $row['Total_cost']; ?></td> -->
                        
                       <?php if($row['paid']=='0'){ ?>
                        <td>No</td>
                        <?php } else { ?>
                        <td>Yes</td>
                        <?php }  ?>
                    </tr>                    
                </tbody>
<?php } ?>
            </table>
        </div>
    </div>
</body>
</html>