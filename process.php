<?php
    $data1= $_POST['Name1'];
    $data2= $_POST['Mobile1'];
    $data3= $_POST['license1'];
    $data4= $_POST['licensevalid1'];
    $data5= $_POST['Address1'];
    $data6= $_POST['photo1'];

    

    $connection=mysqli_connect("localhost","root","","vehicle requisition");

    if(isset($_POST['Name1']))
    {
        //$sql= "INSERT INTO `status`(`post_id`, `name`, `status`) VALUES ('','$data1','$data2')";
        
       // $sql= "INSERT INTO `driver`(`driverid`, `drname`, `drmobile`, `drnid`, `drlicense`, `drlicensevalid`, `draddress`, `drphoto`) VALUES ('','$data1','$data2','$data3','$data4','$data5','$data6','$data7'"; 
        
        $sql= "INSERT INTO `driver`(`Driverid`, `Name`, `Mobile`,  `license`, `licensevalid`, `Address`, `photo`) VALUES ('','$data1','$data2','$data3','$data4','$data5','$data6')";
        
        
        
        
        $result = mysqli_query($connection,$sql);
        
        if ($result)
             echo "done";
         else
             echo "not done"; 
        
         //$data1= $_GET['namee'];
       
        
    } 
	
?>