<?php
     $connection= mysqli_connect('localhost','root','','vehicle requisition');
    session_start();

    $id= $_GET['Trip_No'];
    

    $msg="";

    if(isset($_POST['submit'])){
        $username= $_POST['username'];
        $total_km=$_POST['Total_km'];
        $oil_cost=$_POST['Oil_cost'];
        $extra_cost=$_POST['Extra_cost'];
        $total_cost=$_POST['Total_cost'];
        
    } 

    $sql="INSERT INTO `tripcost`(`Trip_No`,`username`, `Total_km`, `Oil_cost`, `Extra_cost`, `Total_cost`) VALUES ('$id','$username','$total_km','$oil_cost','$extra_cost','$total_cost')";

    $result= mysqli_query($connection,$sql);

    if($result==true){
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
    
    
?>    


<<!DOCTYPE html>
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
            window.location='bookinglist.php'
        }, 1000);
    </script>
</body>
</html>