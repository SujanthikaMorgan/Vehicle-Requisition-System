<?php
   
   $id= $_GET['id'];

   $conn=mysqli_connect('localhost','root','','vehicle requisition');
   $sql="DELETE FROM bill WHERE bill_id='$id'";
   $result=mysqli_query($conn,$sql);
   if(mysqli_query($conn,$sql)){
       header("Location: indexbill.php");
   }else{
         echo "Not deleted";
   }
   
?>
