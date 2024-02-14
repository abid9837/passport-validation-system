<?php

include("../../conn.inc.php");

if(isset($_POST['Passport_number']) && isset($_POST['Request_Number']) && isset($_POST['Country'])){
    $Passport_number = $_POST['Passport_number'];
    $Request_Number = $_POST['Request_Number'];
    $Country  = $_POST['Country'];
    
    // check from database
    $sql = "SELECT * FROM `passposrt_users_info` WHERE passport_number='$Passport_number' AND request_number='$Request_Number' AND country='$Country' ";
    $query = mysqli_query($conn, $sql);
    $num_rows = mysqli_num_rows($query);
    $fetch_assoc = mysqli_fetch_assoc($query);

    

    if($num_rows==1){
        $ID = $fetch_assoc['id'];
        echo $ID;
        
    }
    if($num_rows==0){
        echo 1;
    }
    
    
}

?>























