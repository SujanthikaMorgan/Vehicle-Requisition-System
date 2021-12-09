<?php
   
   $id= $_GET['Trip_No'];

   $conn=mysqli_connect('localhost','root','','vehicle requisition');

   $sql="DELETE FROM `Trip` WHERE Trip_No='$id'";
    echo $sql;
   $result=mysqli_query($conn,$sql);
   if(mysqli_query($conn,$sql)){
       header("Location: bookinglist.php");
   }else{
         echo "Not deleted";
   }
   
?>
