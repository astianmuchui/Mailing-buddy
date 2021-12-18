<?php
    $servername = "mail_manager";
    $serverhost = "localhost";
    $serverUser = "root";
    $serverPassword = "";
    $conn = mysqli_connect($serverhost,$serverUser,$serverPassword,$servername);
    if($conn){
        //WE passed
    }else{
        echo "Server Error";
    }
?>
