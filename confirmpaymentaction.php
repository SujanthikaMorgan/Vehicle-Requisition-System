<?php
    $connection= mysqli_connect('localhost','root','','vehicle requisition');
    session_start();

    $id= $_GET['Trip_No'];

    $sql= "UPDATE `tripcost` SET `paid`='1' WHERE Trip_No='$id'";
    $result= mysqli_query($connection,$sql);

    if($result){
        header ('Location: bookinglist.php');
    }
    ?>
