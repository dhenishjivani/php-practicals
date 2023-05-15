<?php 

    $servername = "localhost";
    $username = "root";
    $password = "Simform@123";
    $dbname = "test";
    
    // $conn = mysqli_connect($servername , $username , $password , $dbname);
    
    // if(!$conn) {
    //     die ("Something is wrong" . mysqli_connect_error());
    // } else {
    //     return $conn;
    // }

    try {
    $conn = mysqli_connect($servername , $username , $password , $dbname);
    }
    catch (Exception $e) {
        echo "Connection field" . $e->getMessage();
    }
?>