<?php
    //เชื่อมต่อ server
    $severname = "localhost";
    $username = "root";
    $password ="";
    $dbname = "vaccineservicepoint";
    $conn = mysqli_connect($severname,$username,$password);
    mysqli_set_charset($conn, "utf8");
    if($conn->connect_error){
        die("Connection failed: ".$conn->connect_error."<br>");
    }
    else{
        //echo "<br> Successfully connected to server <br>";
    }

    if(!$conn->select_db($dbname)){
        echo $conn->connect_error;
    }
    else{
        //echo " Successfully connected to database <br>";
    }
?>
</div>