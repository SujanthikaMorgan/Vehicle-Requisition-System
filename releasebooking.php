<?php
   
   $id= $_GET['id'];

   $conn=mysqli_connect('localhost','root','','vehicle requisition');

    $sql1="SELECT `Vehicle_Registration_No`, `Driverid` FROM `Trip` WHERE Trip_No='$id'";
    $result1=mysqli_query($conn,$sql1);
    $row= mysqli_fetch_assoc($result1);
    $veh_reg=$row['Vehicle_Registration_No'];
    $driverid=$row['Driverid'];
echo $veh_reg;
echo $driverid;
    
    
    
   $sql="UPDATE `vehicle` SET `availability`='0' WHERE Vehicle_Registration_No='$veh_reg'; UPDATE `driver` SET `Driver_available`='0' WHERE Driverid='$driverid'; UPDATE `Trip` SET `finished`='1' WHERE Trip_No='$id'";
    //echo $sql;
   $result=mysqli_multi_query($conn,$sql);
   if($result){
       header("Location: bookinglist.php");
   }else{
         echo "Not freed";
   }
   
?>