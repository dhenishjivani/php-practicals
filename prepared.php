<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "Simform@123";
$dbname = "practicle";

$conn = new mysqli($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection Failed Due to:") . mysqli_connect_error();
} else {
    // $city = 'London';
    // $sql = $conn->prepare("select * from customer where city = ?");    // prepare means ke query parameter je che jene excute karavi pate aetale 
    // // $sql = mysqli_query($conn , "select....")
    // $sql->bind_param("s" , $city);
    // $sql->execute();
    // $result = $sql->get_result();
    // // echo "<pre>";
    // // print_r($result);

    // while ($row = $result->fetch_object()) {
    //     $array = get_object_vars($row);
    //     echo "<pre>";
    //     print_r($array);
    //     // echo $row[0] . " --> " . $row[1] . " --> " . $row[3];
    // }

    // $id = 3;
    // $sql = $conn->prepare("select * from customer where customer_id = ?");
    // $sql->bind_param("i" , $id);
    // $sql->execute();

    // $sql->bind_result($customer_id , $customer_firstname , $customer_lastname , $city , $customer_email , $created_at);

    // while($sql->fetch()){   // fetch function bind_result sathe use thay
    //     echo $customer_firstname . " - " . $customer_email ;
    // }

    
}
