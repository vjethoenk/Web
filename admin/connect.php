<?php
     $host ="localhost";
     $username = "root";
     $password = "";
     $dbname = "web";
     $conn =new mysqli($host, $username, $password, $dbname);
 
     if($conn->connect_error){
        echo "LOI".$conn->connect_error;
        exit();
     }else{
     
     }
    ?>