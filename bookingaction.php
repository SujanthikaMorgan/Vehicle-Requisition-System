<?php
    $connection= mysqli_connect('localhost','root','','vehicle management');
    session_start();

    $msg="";
    
    if(isset($_POST['submit'])){
        $Name=$_POST['Name'];
        $Department=$_POST['Department'];
        $type=$_POST['type'];
        $Designation=$_POST['Designation'];
        $Start_date=$_POST['Start_date'];
        $Start_time=$_POST['Start_time'];
        $Return_date=$_POST['Return_date'];
        $Return_time=$_POST['Return_time'];
        $Destination=$_POST['Destination'];
        $Pickup_point=$_POST['Pickup_point'];
        $reasons=$_POST['reasons'];
        $Email=$_POST['Email'];
        $Mobile=$_POST['Mobile'];
        $username= $_POST['username'];
        
        $insert_query="INSERT INTO `Trip`(`Trip_No`, `Name`,`username` ,`Department`, `Designation`, `Start_date`, `Start_time`, `Return_date`, `Return_time`,  `Destination`, `Pickup_Point`, `reasons`,`No_of_days` ,`Email`, `Mobile`, `confirmation`, `veh_reg`, `Driverid`, `finished`) VALUES ('','$Name','$username','$Department','$Designation','$Start_date','$Start_time','$Return_date','$Return_time','$Destination','$Pickup_point','$reasons','$Email','$Mobile','','','','')";
        echo $Name;
        
        
        
        
        $res= mysqli_query($connection,$insert_query);
        
         if($res==true){
            $msg= "<script language='javascript'>
                                       swal(
                                            'Success!',
                                            'Registration Completed!',
                                            'success'
                                            );
				          </script>";
            
        }
        else{
            die('unsuccessful' .mysqli_error($connection));
        }
        
        
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
    
   
     <link rel="stylesheet" href="sweetalert2/sweetalert2.css">
    <script src="sweetalert2/sweetalert2.min.js"></script>
    
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    
</head>
<body>
    <?php echo $msg;
    ?>
    
    <script>
    
        var timer = setTimeout(function() {
            window.location='booking.php'
        }, 1000);
    </script>

</body>
</html>
