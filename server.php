<?php

    //ສ້າງໂຕແປເພື່ອມາເກັບຄ່າຕ່າງໆ
    $servername = "localhost";  
    $username = "root";
    $password ="";
    $dbname = "register_db";

    // ສ້າງໂຕແປເພືອເກັບຄ່າເຮັດການເຊື່ອມຕໍ່ກັບໂຕແປດ້ານເທິງ
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // ກວດສອບການເຊື່ອມຕໍ່
    if(!$conn){
        die("Connection failed" . mysqli_connect_error());
    }
    // } else {
    //     echo "Connected successfully";
    // }

?>